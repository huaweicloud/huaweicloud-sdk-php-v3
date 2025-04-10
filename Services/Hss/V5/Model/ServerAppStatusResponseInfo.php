<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerAppStatusResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerAppStatusResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * webMidware  web中间件名称
    * jdkVersion  jdk版本
    * portList  java应用监听的端口列表
    * pid  process id
    * cmdLine  启动命令
    * errorInfo  动态接入报错信息
    * startTime  应用启动时间，毫秒级时间戳(ms)
    * appProtectStatus  java应用防护状态，包含如下4种。 - 0 ：未防护。 - 1 ：防护失败。 - 2 ：手动防护成功。 - 3 ：自动防护成功
    * chkFeatureName  检测规则标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'webMidware' => 'string',
            'jdkVersion' => 'string',
            'portList' => 'int[]',
            'pid' => 'int',
            'cmdLine' => 'string',
            'errorInfo' => 'string',
            'startTime' => 'string',
            'appProtectStatus' => 'int',
            'chkFeatureName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * webMidware  web中间件名称
    * jdkVersion  jdk版本
    * portList  java应用监听的端口列表
    * pid  process id
    * cmdLine  启动命令
    * errorInfo  动态接入报错信息
    * startTime  应用启动时间，毫秒级时间戳(ms)
    * appProtectStatus  java应用防护状态，包含如下4种。 - 0 ：未防护。 - 1 ：防护失败。 - 2 ：手动防护成功。 - 3 ：自动防护成功
    * chkFeatureName  检测规则标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'webMidware' => null,
        'jdkVersion' => null,
        'portList' => null,
        'pid' => null,
        'cmdLine' => null,
        'errorInfo' => null,
        'startTime' => null,
        'appProtectStatus' => null,
        'chkFeatureName' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * webMidware  web中间件名称
    * jdkVersion  jdk版本
    * portList  java应用监听的端口列表
    * pid  process id
    * cmdLine  启动命令
    * errorInfo  动态接入报错信息
    * startTime  应用启动时间，毫秒级时间戳(ms)
    * appProtectStatus  java应用防护状态，包含如下4种。 - 0 ：未防护。 - 1 ：防护失败。 - 2 ：手动防护成功。 - 3 ：自动防护成功
    * chkFeatureName  检测规则标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'webMidware' => 'web_midware',
            'jdkVersion' => 'jdk_version',
            'portList' => 'port_list',
            'pid' => 'pid',
            'cmdLine' => 'cmd_line',
            'errorInfo' => 'error_info',
            'startTime' => 'start_time',
            'appProtectStatus' => 'app_protect_status',
            'chkFeatureName' => 'chk_feature_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * webMidware  web中间件名称
    * jdkVersion  jdk版本
    * portList  java应用监听的端口列表
    * pid  process id
    * cmdLine  启动命令
    * errorInfo  动态接入报错信息
    * startTime  应用启动时间，毫秒级时间戳(ms)
    * appProtectStatus  java应用防护状态，包含如下4种。 - 0 ：未防护。 - 1 ：防护失败。 - 2 ：手动防护成功。 - 3 ：自动防护成功
    * chkFeatureName  检测规则标识
    *
    * @var string[]
    */
    protected static $setters = [
            'webMidware' => 'setWebMidware',
            'jdkVersion' => 'setJdkVersion',
            'portList' => 'setPortList',
            'pid' => 'setPid',
            'cmdLine' => 'setCmdLine',
            'errorInfo' => 'setErrorInfo',
            'startTime' => 'setStartTime',
            'appProtectStatus' => 'setAppProtectStatus',
            'chkFeatureName' => 'setChkFeatureName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * webMidware  web中间件名称
    * jdkVersion  jdk版本
    * portList  java应用监听的端口列表
    * pid  process id
    * cmdLine  启动命令
    * errorInfo  动态接入报错信息
    * startTime  应用启动时间，毫秒级时间戳(ms)
    * appProtectStatus  java应用防护状态，包含如下4种。 - 0 ：未防护。 - 1 ：防护失败。 - 2 ：手动防护成功。 - 3 ：自动防护成功
    * chkFeatureName  检测规则标识
    *
    * @var string[]
    */
    protected static $getters = [
            'webMidware' => 'getWebMidware',
            'jdkVersion' => 'getJdkVersion',
            'portList' => 'getPortList',
            'pid' => 'getPid',
            'cmdLine' => 'getCmdLine',
            'errorInfo' => 'getErrorInfo',
            'startTime' => 'getStartTime',
            'appProtectStatus' => 'getAppProtectStatus',
            'chkFeatureName' => 'getChkFeatureName'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['webMidware'] = isset($data['webMidware']) ? $data['webMidware'] : null;
        $this->container['jdkVersion'] = isset($data['jdkVersion']) ? $data['jdkVersion'] : null;
        $this->container['portList'] = isset($data['portList']) ? $data['portList'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['cmdLine'] = isset($data['cmdLine']) ? $data['cmdLine'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['appProtectStatus'] = isset($data['appProtectStatus']) ? $data['appProtectStatus'] : null;
        $this->container['chkFeatureName'] = isset($data['chkFeatureName']) ? $data['chkFeatureName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['webMidware']) && (mb_strlen($this->container['webMidware']) > 128)) {
                $invalidProperties[] = "invalid value for 'webMidware', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['webMidware']) && (mb_strlen($this->container['webMidware']) < 0)) {
                $invalidProperties[] = "invalid value for 'webMidware', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jdkVersion']) && (mb_strlen($this->container['jdkVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'jdkVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['jdkVersion']) && (mb_strlen($this->container['jdkVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'jdkVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'pid', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['pid']) && ($this->container['pid'] < 0)) {
                $invalidProperties[] = "invalid value for 'pid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cmdLine']) && (mb_strlen($this->container['cmdLine']) > 2048)) {
                $invalidProperties[] = "invalid value for 'cmdLine', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['cmdLine']) && (mb_strlen($this->container['cmdLine']) < 0)) {
                $invalidProperties[] = "invalid value for 'cmdLine', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorInfo']) && (mb_strlen($this->container['errorInfo']) > 2048)) {
                $invalidProperties[] = "invalid value for 'errorInfo', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['errorInfo']) && (mb_strlen($this->container['errorInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['appProtectStatus']) && ($this->container['appProtectStatus'] > 4)) {
                $invalidProperties[] = "invalid value for 'appProtectStatus', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['appProtectStatus']) && ($this->container['appProtectStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'appProtectStatus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chkFeatureName']) && (mb_strlen($this->container['chkFeatureName']) > 128)) {
                $invalidProperties[] = "invalid value for 'chkFeatureName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chkFeatureName']) && (mb_strlen($this->container['chkFeatureName']) < 0)) {
                $invalidProperties[] = "invalid value for 'chkFeatureName', the character length must be bigger than or equal to 0.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets webMidware
    *  web中间件名称
    *
    * @return string|null
    */
    public function getWebMidware()
    {
        return $this->container['webMidware'];
    }

    /**
    * Sets webMidware
    *
    * @param string|null $webMidware web中间件名称
    *
    * @return $this
    */
    public function setWebMidware($webMidware)
    {
        $this->container['webMidware'] = $webMidware;
        return $this;
    }

    /**
    * Gets jdkVersion
    *  jdk版本
    *
    * @return string|null
    */
    public function getJdkVersion()
    {
        return $this->container['jdkVersion'];
    }

    /**
    * Sets jdkVersion
    *
    * @param string|null $jdkVersion jdk版本
    *
    * @return $this
    */
    public function setJdkVersion($jdkVersion)
    {
        $this->container['jdkVersion'] = $jdkVersion;
        return $this;
    }

    /**
    * Gets portList
    *  java应用监听的端口列表
    *
    * @return int[]|null
    */
    public function getPortList()
    {
        return $this->container['portList'];
    }

    /**
    * Sets portList
    *
    * @param int[]|null $portList java应用监听的端口列表
    *
    * @return $this
    */
    public function setPortList($portList)
    {
        $this->container['portList'] = $portList;
        return $this;
    }

    /**
    * Gets pid
    *  process id
    *
    * @return int|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param int|null $pid process id
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets cmdLine
    *  启动命令
    *
    * @return string|null
    */
    public function getCmdLine()
    {
        return $this->container['cmdLine'];
    }

    /**
    * Sets cmdLine
    *
    * @param string|null $cmdLine 启动命令
    *
    * @return $this
    */
    public function setCmdLine($cmdLine)
    {
        $this->container['cmdLine'] = $cmdLine;
        return $this;
    }

    /**
    * Gets errorInfo
    *  动态接入报错信息
    *
    * @return string|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param string|null $errorInfo 动态接入报错信息
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets startTime
    *  应用启动时间，毫秒级时间戳(ms)
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 应用启动时间，毫秒级时间戳(ms)
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets appProtectStatus
    *  java应用防护状态，包含如下4种。 - 0 ：未防护。 - 1 ：防护失败。 - 2 ：手动防护成功。 - 3 ：自动防护成功
    *
    * @return int|null
    */
    public function getAppProtectStatus()
    {
        return $this->container['appProtectStatus'];
    }

    /**
    * Sets appProtectStatus
    *
    * @param int|null $appProtectStatus java应用防护状态，包含如下4种。 - 0 ：未防护。 - 1 ：防护失败。 - 2 ：手动防护成功。 - 3 ：自动防护成功
    *
    * @return $this
    */
    public function setAppProtectStatus($appProtectStatus)
    {
        $this->container['appProtectStatus'] = $appProtectStatus;
        return $this;
    }

    /**
    * Gets chkFeatureName
    *  检测规则标识
    *
    * @return string|null
    */
    public function getChkFeatureName()
    {
        return $this->container['chkFeatureName'];
    }

    /**
    * Sets chkFeatureName
    *
    * @param string|null $chkFeatureName 检测规则标识
    *
    * @return $this
    */
    public function setChkFeatureName($chkFeatureName)
    {
        $this->container['chkFeatureName'] = $chkFeatureName;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

