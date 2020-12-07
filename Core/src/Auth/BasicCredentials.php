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

namespace HuaweiCloud\SDK\Core\Auth;

use HuaweiCloud\SDK\Core\SdkRequest;

class BasicCredentials extends Credentials
{
    private $projectId;

    /**
     * BasicCredentials constructor.
     *
     * @param $ak
     * @param $sk
     * @param $securityToken
     * @param $projectId
     */
    public function __construct($ak = null,
                                $sk = null,
                                $projectId = null,
                                $securityToken = null
    ) {
        $this->ak = isset($ak) ? $ak : null;
        $this->sk = isset($sk) ? $sk : null;
        $this->projectId = isset($projectId) ? $projectId : null;
        $this->securityToken = isset($securityToken) ? $securityToken : null;
    }

    public function withAk($ak)
    {
        $this->setAk($ak);

        return $this;
    }

    public function withSk($sk)
    {
        $this->setSk($sk);

        return $this;
    }

    public function withProjectId($projectId)
    {
        $this->setProjectId($projectId);

        return $this;
    }

    /**
     * @param $securityToken
     *
     * @return BasicCredentials
     */
    public function withSecurityToken($securityToken)
    {
        $this->setSecurityToken($securityToken);

        return $this;
    }

    protected static $setters = [
        'ak' => 'setAk',
        'sk' => 'setSk',
        'securityToken' => 'setSecurityToken',
        'projectId' => 'setProjectId',
    ];

    protected static $getters = [
        'ak' => 'getAk',
        'sk' => 'getSk',
        'securityToken' => 'getSecurityToken',
        'projectId' => 'getProjectId',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * @return string
     */
    public function getAk()
    {
        return $this->ak;
    }

    /**
     * @param string $ak
     */
    public function setAk($ak)
    {
        $this->ak = $ak;
    }

    /**
     * @return string
     */
    public function getSk()
    {
        return $this->sk;
    }

    /**
     * @param string $sk
     */
    public function setSk($sk)
    {
        $this->sk = $sk;
    }

    /**
     * @return string
     */
    public function getSecurityToken()
    {
        return $this->securityToken;
    }

    /**
     * @param string $securityToken
     */
    public function setSecurityToken($securityToken)
    {
        $this->securityToken = $securityToken;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return array
     */
    public function getUpdatePathParams()
    {
        $pathParams = [];
        if ($this->projectId) {
            $pathParams['project_id'] = $this->projectId;
        }

        return $pathParams;
    }

    public function processAuthRequest(SdkRequest $request)
    {
        return $this->signRequest($request);
    }

    private function signRequest(SdkRequest $request)
    {
        $request->headerParams['X-Project-Id'] = $this->projectId;
        if (null != $this->securityToken) {
            $request->headerParams['X-Security-Token'] = $this->securityToken;
        }
        if (isset($request->headerParams['Content-Type']) and
            0 === strpos($request->headerParams['Content-Type'],
                'application/json')) {
            $request->headerParams['X-Sdk-Content-Sha256'] = 'UNSIGNED-PAYLOAD';
        }

        $signer = new Signer($this);

        return $signer->sign($request);
    }
}
