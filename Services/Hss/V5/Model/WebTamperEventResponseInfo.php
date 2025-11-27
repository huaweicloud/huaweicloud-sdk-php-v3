<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebTamperEventResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebTamperEventResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filePath  **参数解释**: 防护文件 **取值范围**: 字符长度0-256位
    * eventDescription  **参数解释**: 事件描述 **取值范围**: 字符长度0-512位
    * processPath  **参数解释**: 进程路径 **取值范围**: 字符长度0-256位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-256位
    * processPid  **参数解释**: 进程pid **取值范围**: 最小值0，最大值2147483647
    * processEnv  **参数解释**: 进程环境，是指在容器内的进程或者宿主机的进程 **取值范围**: 字符长度0-32位
    * webAppName  **参数解释**: 网站应用名称 **取值范围**: 字符长度0-128位
    * eventTime  **参数解释**: 检测时间(ms) **取值范围**: 最小值0，最大值9223372036854775807
    * hostInfo  hostInfo
    * containerInfo  containerInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filePath' => 'string',
            'eventDescription' => 'string',
            'processPath' => 'string',
            'processCmd' => 'string',
            'processPid' => 'int',
            'processEnv' => 'string',
            'webAppName' => 'string',
            'eventTime' => 'int',
            'hostInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventHostInfo',
            'containerInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventContainerInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filePath  **参数解释**: 防护文件 **取值范围**: 字符长度0-256位
    * eventDescription  **参数解释**: 事件描述 **取值范围**: 字符长度0-512位
    * processPath  **参数解释**: 进程路径 **取值范围**: 字符长度0-256位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-256位
    * processPid  **参数解释**: 进程pid **取值范围**: 最小值0，最大值2147483647
    * processEnv  **参数解释**: 进程环境，是指在容器内的进程或者宿主机的进程 **取值范围**: 字符长度0-32位
    * webAppName  **参数解释**: 网站应用名称 **取值范围**: 字符长度0-128位
    * eventTime  **参数解释**: 检测时间(ms) **取值范围**: 最小值0，最大值9223372036854775807
    * hostInfo  hostInfo
    * containerInfo  containerInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filePath' => null,
        'eventDescription' => null,
        'processPath' => null,
        'processCmd' => null,
        'processPid' => 'int32',
        'processEnv' => null,
        'webAppName' => null,
        'eventTime' => 'int64',
        'hostInfo' => null,
        'containerInfo' => null
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
    * filePath  **参数解释**: 防护文件 **取值范围**: 字符长度0-256位
    * eventDescription  **参数解释**: 事件描述 **取值范围**: 字符长度0-512位
    * processPath  **参数解释**: 进程路径 **取值范围**: 字符长度0-256位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-256位
    * processPid  **参数解释**: 进程pid **取值范围**: 最小值0，最大值2147483647
    * processEnv  **参数解释**: 进程环境，是指在容器内的进程或者宿主机的进程 **取值范围**: 字符长度0-32位
    * webAppName  **参数解释**: 网站应用名称 **取值范围**: 字符长度0-128位
    * eventTime  **参数解释**: 检测时间(ms) **取值范围**: 最小值0，最大值9223372036854775807
    * hostInfo  hostInfo
    * containerInfo  containerInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filePath' => 'file_path',
            'eventDescription' => 'event_description',
            'processPath' => 'process_path',
            'processCmd' => 'process_cmd',
            'processPid' => 'process_pid',
            'processEnv' => 'process_env',
            'webAppName' => 'web_app_name',
            'eventTime' => 'event_time',
            'hostInfo' => 'host_info',
            'containerInfo' => 'container_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filePath  **参数解释**: 防护文件 **取值范围**: 字符长度0-256位
    * eventDescription  **参数解释**: 事件描述 **取值范围**: 字符长度0-512位
    * processPath  **参数解释**: 进程路径 **取值范围**: 字符长度0-256位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-256位
    * processPid  **参数解释**: 进程pid **取值范围**: 最小值0，最大值2147483647
    * processEnv  **参数解释**: 进程环境，是指在容器内的进程或者宿主机的进程 **取值范围**: 字符长度0-32位
    * webAppName  **参数解释**: 网站应用名称 **取值范围**: 字符长度0-128位
    * eventTime  **参数解释**: 检测时间(ms) **取值范围**: 最小值0，最大值9223372036854775807
    * hostInfo  hostInfo
    * containerInfo  containerInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'filePath' => 'setFilePath',
            'eventDescription' => 'setEventDescription',
            'processPath' => 'setProcessPath',
            'processCmd' => 'setProcessCmd',
            'processPid' => 'setProcessPid',
            'processEnv' => 'setProcessEnv',
            'webAppName' => 'setWebAppName',
            'eventTime' => 'setEventTime',
            'hostInfo' => 'setHostInfo',
            'containerInfo' => 'setContainerInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filePath  **参数解释**: 防护文件 **取值范围**: 字符长度0-256位
    * eventDescription  **参数解释**: 事件描述 **取值范围**: 字符长度0-512位
    * processPath  **参数解释**: 进程路径 **取值范围**: 字符长度0-256位
    * processCmd  **参数解释**: 进程命令行 **取值范围**: 字符长度0-256位
    * processPid  **参数解释**: 进程pid **取值范围**: 最小值0，最大值2147483647
    * processEnv  **参数解释**: 进程环境，是指在容器内的进程或者宿主机的进程 **取值范围**: 字符长度0-32位
    * webAppName  **参数解释**: 网站应用名称 **取值范围**: 字符长度0-128位
    * eventTime  **参数解释**: 检测时间(ms) **取值范围**: 最小值0，最大值9223372036854775807
    * hostInfo  hostInfo
    * containerInfo  containerInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'filePath' => 'getFilePath',
            'eventDescription' => 'getEventDescription',
            'processPath' => 'getProcessPath',
            'processCmd' => 'getProcessCmd',
            'processPid' => 'getProcessPid',
            'processEnv' => 'getProcessEnv',
            'webAppName' => 'getWebAppName',
            'eventTime' => 'getEventTime',
            'hostInfo' => 'getHostInfo',
            'containerInfo' => 'getContainerInfo'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['eventDescription'] = isset($data['eventDescription']) ? $data['eventDescription'] : null;
        $this->container['processPath'] = isset($data['processPath']) ? $data['processPath'] : null;
        $this->container['processCmd'] = isset($data['processCmd']) ? $data['processCmd'] : null;
        $this->container['processPid'] = isset($data['processPid']) ? $data['processPid'] : null;
        $this->container['processEnv'] = isset($data['processEnv']) ? $data['processEnv'] : null;
        $this->container['webAppName'] = isset($data['webAppName']) ? $data['webAppName'] : null;
        $this->container['eventTime'] = isset($data['eventTime']) ? $data['eventTime'] : null;
        $this->container['hostInfo'] = isset($data['hostInfo']) ? $data['hostInfo'] : null;
        $this->container['containerInfo'] = isset($data['containerInfo']) ? $data['containerInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 256)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventDescription']) && (mb_strlen($this->container['eventDescription']) > 512)) {
                $invalidProperties[] = "invalid value for 'eventDescription', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['eventDescription']) && (mb_strlen($this->container['eventDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['processPath']) && (mb_strlen($this->container['processPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'processPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processCmd']) && (mb_strlen($this->container['processCmd']) > 256)) {
                $invalidProperties[] = "invalid value for 'processCmd', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['processCmd']) && (mb_strlen($this->container['processCmd']) < 0)) {
                $invalidProperties[] = "invalid value for 'processCmd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'processPid', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processEnv']) && (mb_strlen($this->container['processEnv']) > 32)) {
                $invalidProperties[] = "invalid value for 'processEnv', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['processEnv']) && (mb_strlen($this->container['processEnv']) < 0)) {
                $invalidProperties[] = "invalid value for 'processEnv', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['webAppName']) && (mb_strlen($this->container['webAppName']) > 128)) {
                $invalidProperties[] = "invalid value for 'webAppName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['webAppName']) && (mb_strlen($this->container['webAppName']) < 0)) {
                $invalidProperties[] = "invalid value for 'webAppName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventTime']) && ($this->container['eventTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'eventTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['eventTime']) && ($this->container['eventTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventTime', must be bigger than or equal to 0.";
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
    * Gets filePath
    *  **参数解释**: 防护文件 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释**: 防护文件 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets eventDescription
    *  **参数解释**: 事件描述 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getEventDescription()
    {
        return $this->container['eventDescription'];
    }

    /**
    * Sets eventDescription
    *
    * @param string|null $eventDescription **参数解释**: 事件描述 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setEventDescription($eventDescription)
    {
        $this->container['eventDescription'] = $eventDescription;
        return $this;
    }

    /**
    * Gets processPath
    *  **参数解释**: 进程路径 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getProcessPath()
    {
        return $this->container['processPath'];
    }

    /**
    * Sets processPath
    *
    * @param string|null $processPath **参数解释**: 进程路径 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setProcessPath($processPath)
    {
        $this->container['processPath'] = $processPath;
        return $this;
    }

    /**
    * Gets processCmd
    *  **参数解释**: 进程命令行 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getProcessCmd()
    {
        return $this->container['processCmd'];
    }

    /**
    * Sets processCmd
    *
    * @param string|null $processCmd **参数解释**: 进程命令行 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setProcessCmd($processCmd)
    {
        $this->container['processCmd'] = $processCmd;
        return $this;
    }

    /**
    * Gets processPid
    *  **参数解释**: 进程pid **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProcessPid()
    {
        return $this->container['processPid'];
    }

    /**
    * Sets processPid
    *
    * @param int|null $processPid **参数解释**: 进程pid **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProcessPid($processPid)
    {
        $this->container['processPid'] = $processPid;
        return $this;
    }

    /**
    * Gets processEnv
    *  **参数解释**: 进程环境，是指在容器内的进程或者宿主机的进程 **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getProcessEnv()
    {
        return $this->container['processEnv'];
    }

    /**
    * Sets processEnv
    *
    * @param string|null $processEnv **参数解释**: 进程环境，是指在容器内的进程或者宿主机的进程 **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setProcessEnv($processEnv)
    {
        $this->container['processEnv'] = $processEnv;
        return $this;
    }

    /**
    * Gets webAppName
    *  **参数解释**: 网站应用名称 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getWebAppName()
    {
        return $this->container['webAppName'];
    }

    /**
    * Sets webAppName
    *
    * @param string|null $webAppName **参数解释**: 网站应用名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setWebAppName($webAppName)
    {
        $this->container['webAppName'] = $webAppName;
        return $this;
    }

    /**
    * Gets eventTime
    *  **参数解释**: 检测时间(ms) **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
    * Sets eventTime
    *
    * @param int|null $eventTime **参数解释**: 检测时间(ms) **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setEventTime($eventTime)
    {
        $this->container['eventTime'] = $eventTime;
        return $this;
    }

    /**
    * Gets hostInfo
    *  hostInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventHostInfo|null
    */
    public function getHostInfo()
    {
        return $this->container['hostInfo'];
    }

    /**
    * Sets hostInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventHostInfo|null $hostInfo hostInfo
    *
    * @return $this
    */
    public function setHostInfo($hostInfo)
    {
        $this->container['hostInfo'] = $hostInfo;
        return $this;
    }

    /**
    * Gets containerInfo
    *  containerInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventContainerInfo|null
    */
    public function getContainerInfo()
    {
        return $this->container['containerInfo'];
    }

    /**
    * Sets containerInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventContainerInfo|null $containerInfo containerInfo
    *
    * @return $this
    */
    public function setContainerInfo($containerInfo)
    {
        $this->container['containerInfo'] = $containerInfo;
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

