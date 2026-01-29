<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache LICENSE, Version 2.0 (the
 * "LICENSE"); you may not use this file except in compliance
 * with the LICENSE.  You may obtain a copy of the LICENSE at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the LICENSE is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the LICENSE for the
 * specific language governing permissions and limitations
 * under the LICENSE.
 */

namespace HuaweiCloud\SDK\Core\Http;

class UserAgent
{
    /**
     * Generates default UserAgent information
     * @param null
     * @return String
     */
    public function GetUserAgentMessage() {
        $userAgentMessage = "huaweicloud-usdk-php/3.0";
        $systemMessage = $this->GetSystemMessage();
        if (strlen($systemMessage) > 0) {
            $userAgentMessage = $userAgentMessage . " " . $systemMessage;
        }
        $phpMessage = $this->GetPhpMessage();
        if (strlen($phpMessage) > 0) {
            $userAgentMessage = $userAgentMessage . " " . $phpMessage;
        }
        $systemLangMessage = $this->GetSystemLangMessage();
        if (strlen($systemLangMessage) > 0) {
            $userAgentMessage = $userAgentMessage . " " . $systemLangMessage;
        }
        $appIdMessage = $this->GetAppIdMessage();
        if (strlen($appIdMessage) > 0) {
            $userAgentMessage = $userAgentMessage . " " . $appIdMessage;
        }
        return $userAgentMessage;
    }

    /**
     * Generates default System information
     * @param null
     * @return String
     */
    public function GetSystemMessage() {
        $systemMessage = "";
        $osName = $this->GetOs();
        if (strlen($osName) > 0) {
            $systemMessage = "os/" . $osName;
        }
        $osVersion = $this->GetOsVersion();
        if (strlen($osVersion) > 0) {
            $systemMessage = $systemMessage . "#" . $osVersion;
        }
        return $systemMessage;
    }

    /**
     * Generates default Php information
     * @param null
     * @return String
     */
    public function GetPhpMessage() {
        $phpVersionMessage = "";
        $phpVersion = $this->GetPhpVersion();
        if (strlen($phpVersion) > 0) {
            $phpVersionMessage = "php/" . $phpVersion;
        }
        return $phpVersionMessage;
    }

    /**
     * Generates default System Lang information
     * @param null
     * @return String
     */
    public function GetSystemLangMessage() {
        $systemLangMessage = "";
        $osLang = $this->GetOsLang();
        if (strlen($osLang) > 0) {
            $systemLangMessage = "meta/" . $osLang;
        }
        $osTimeZone = $this->GetOsTimeZone();
        if (strlen($osTimeZone) > 0) {
            $systemLangMessage = $systemLangMessage . "#" . $osTimeZone;
        }
        return $systemLangMessage;
    }

    /**
     * Get AppId information
     * @param null
     * @return String
     */
    public function GetAppIdMessage() {
        $appIdMessage = "";
        $appId = $this->GetAppFile();
        if (strlen($appId) > 0) {
            $appIdMessage = "app/" . $appId;
        }
        return $appIdMessage;
    }

    /**
     * Obtain the client OS name
     * @param null
     * @return string
     */
    public function GetOs() {
        return php_uname('s');
    }

    /**
     * Obtains detailed system information (including the kernel and version)
     * @param null
     * @return string
     */
    public function GetOsVersion() {
        return php_uname('a');
    }

    /**
    * Obtain the client OS language
    * @param null
    * @return string
    */
    public function GetOsLang() {
        preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
        $lang = $matches[1];
        return $lang;
    }

    /**
    * Obtain the time zone of the client OS
    * @param null
    * @return string
    */
    public function GetOsTimeZone() {
        return date_default_timezone_get();
    }

    /**
    * Obtaining the PHP Version Information
    * @param null
    * @return string
    */
    public function GetPhpVersion() {
        return PHP_VERSION;
    }

    /**
    * Generate UUID
    * @param null
    * @return string
    */
    public function GenerateUUID() {
        if (function_exists('com_create_guid')) {
            // Windows
            return trim(com_create_guid(), '{}');
        } else {
            // Linux/Unix
            $data = random_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // 设置版本4
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }
    }

    /**
    * Obtaining the appid file path
    * @param null
    * @return string
    */
    public function GetAppFilePath() {
        $userDir = getenv('HOME') ?: (PHP_OS_FAMILY === 'Windows' ? getenv('USERPROFILE') : sys_get_temp_dir());
        $targetDir = $userDir . DIRECTORY_SEPARATOR . '.huaweicloud';
        $filePath = $targetDir . DIRECTORY_SEPARATOR . 'application_id';

        // Create the directory (if it does not exist)
        if (!is_dir($targetDir)) {
            if (!mkdir($targetDir, 0777, true)) {
                throw new Exception("无法创建目录: $targetDir");
            }
        }
        return $filePath;
    }

    /**
    * Read the content of the APPID file
    * @param null
    * @return string
    */
    public function GetAppFile() {
        $filePath = $this->GetAppFilePath();
        // Check whether the file exists
        if (!file_exists($filePath)) {
            $uuid = $this->GenerateUUID();
            $this->SaveAppFile($filePath, $uuid);
            return $uuid;
        }

        // Reads the file content
        try {
            $fileHandle = fopen($filePath, 'r'); // Read-only mode
            if ($fileHandle) {
                $content = fread($fileHandle, filesize($filePath)); // Read all content
                fclose($fileHandle);
                $uuid = trim($content); // Remove any possible whitespace characters
                // UUID regular expression verification (standard UUID v4 format)
                $uuidPattern = '/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i';

                if (preg_match($uuidPattern, $uuid)) {
                    return $uuid;
                } else {
                    $new_uuid = $this->GenerateUUID();
                    $this->SaveAppFile($filePath, $new_uuid);
                    return $new_uuid;
                }
            } else {
                throw new Exception("Unable to open the file for reading");
            }
        } catch (Exception $e) {
            return '';
        }
    }

    /**
    * Write the UUID to a file
    * @param $filePath
    * @param $uuid
    * @return string
    */
    public function SaveAppFile($filePath, $uuid) {
        try {
            $fileHandle = fopen($filePath, 'w'); // Coverage Mode
            if ($fileHandle) {
                fwrite($fileHandle, $uuid); // No new line characters added anymore
                fclose($fileHandle);
            } else {
                throw new Exception("Unable to open the file for writing");
            }
        } catch (Exception $e) {
            echo "Save app file error: " . $e->getMessage();
        }
    }
}