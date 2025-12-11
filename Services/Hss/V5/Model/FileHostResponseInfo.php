<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FileHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * changeTotalNum  **参数解释**： 文件变更与注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeFileNum  **参数解释**： 文件变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeRegistryNum  **参数解释**： 注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * latestTime  **参数解释**： 最后一次文件/注册表变更时间 **取值范围**： 非负长整数，时间格式：13位毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'hostId' => 'string',
            'changeTotalNum' => 'int',
            'changeFileNum' => 'int',
            'changeRegistryNum' => 'int',
            'latestTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * changeTotalNum  **参数解释**： 文件变更与注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeFileNum  **参数解释**： 文件变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeRegistryNum  **参数解释**： 注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * latestTime  **参数解释**： 最后一次文件/注册表变更时间 **取值范围**： 非负长整数，时间格式：13位毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'changeTotalNum' => 'int32',
        'changeFileNum' => 'int32',
        'changeRegistryNum' => 'int32',
        'latestTime' => 'int64'
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
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * changeTotalNum  **参数解释**： 文件变更与注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeFileNum  **参数解释**： 文件变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeRegistryNum  **参数解释**： 注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * latestTime  **参数解释**： 最后一次文件/注册表变更时间 **取值范围**： 非负长整数，时间格式：13位毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'changeTotalNum' => 'change_total_num',
            'changeFileNum' => 'change_file_num',
            'changeRegistryNum' => 'change_registry_num',
            'latestTime' => 'latest_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * changeTotalNum  **参数解释**： 文件变更与注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeFileNum  **参数解释**： 文件变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeRegistryNum  **参数解释**： 注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * latestTime  **参数解释**： 最后一次文件/注册表变更时间 **取值范围**： 非负长整数，时间格式：13位毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'changeTotalNum' => 'setChangeTotalNum',
            'changeFileNum' => 'setChangeFileNum',
            'changeRegistryNum' => 'setChangeRegistryNum',
            'latestTime' => 'setLatestTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * changeTotalNum  **参数解释**： 文件变更与注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeFileNum  **参数解释**： 文件变更总数量 **取值范围**： 最小值0，最大值2147483647
    * changeRegistryNum  **参数解释**： 注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    * latestTime  **参数解释**： 最后一次文件/注册表变更时间 **取值范围**： 非负长整数，时间格式：13位毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'changeTotalNum' => 'getChangeTotalNum',
            'changeFileNum' => 'getChangeFileNum',
            'changeRegistryNum' => 'getChangeRegistryNum',
            'latestTime' => 'getLatestTime'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['changeTotalNum'] = isset($data['changeTotalNum']) ? $data['changeTotalNum'] : null;
        $this->container['changeFileNum'] = isset($data['changeFileNum']) ? $data['changeFileNum'] : null;
        $this->container['changeRegistryNum'] = isset($data['changeRegistryNum']) ? $data['changeRegistryNum'] : null;
        $this->container['latestTime'] = isset($data['latestTime']) ? $data['latestTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['changeTotalNum']) && ($this->container['changeTotalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeTotalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeTotalNum']) && ($this->container['changeTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'changeTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeFileNum']) && ($this->container['changeFileNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeFileNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeFileNum']) && ($this->container['changeFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'changeFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['changeRegistryNum']) && ($this->container['changeRegistryNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeRegistryNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeRegistryNum']) && ($this->container['changeRegistryNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'changeRegistryNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestTime']) && ($this->container['latestTime'] > 4765104000000)) {
                $invalidProperties[] = "invalid value for 'latestTime', must be smaller than or equal to 4765104000000.";
            }
            if (!is_null($this->container['latestTime']) && ($this->container['latestTime'] < 1609430400000)) {
                $invalidProperties[] = "invalid value for 'latestTime', must be bigger than or equal to 1609430400000.";
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
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets changeTotalNum
    *  **参数解释**： 文件变更与注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getChangeTotalNum()
    {
        return $this->container['changeTotalNum'];
    }

    /**
    * Sets changeTotalNum
    *
    * @param int|null $changeTotalNum **参数解释**： 文件变更与注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setChangeTotalNum($changeTotalNum)
    {
        $this->container['changeTotalNum'] = $changeTotalNum;
        return $this;
    }

    /**
    * Gets changeFileNum
    *  **参数解释**： 文件变更总数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getChangeFileNum()
    {
        return $this->container['changeFileNum'];
    }

    /**
    * Sets changeFileNum
    *
    * @param int|null $changeFileNum **参数解释**： 文件变更总数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setChangeFileNum($changeFileNum)
    {
        $this->container['changeFileNum'] = $changeFileNum;
        return $this;
    }

    /**
    * Gets changeRegistryNum
    *  **参数解释**： 注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getChangeRegistryNum()
    {
        return $this->container['changeRegistryNum'];
    }

    /**
    * Sets changeRegistryNum
    *
    * @param int|null $changeRegistryNum **参数解释**： 注册表变更总数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setChangeRegistryNum($changeRegistryNum)
    {
        $this->container['changeRegistryNum'] = $changeRegistryNum;
        return $this;
    }

    /**
    * Gets latestTime
    *  **参数解释**： 最后一次文件/注册表变更时间 **取值范围**： 非负长整数，时间格式：13位毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @return int|null
    */
    public function getLatestTime()
    {
        return $this->container['latestTime'];
    }

    /**
    * Sets latestTime
    *
    * @param int|null $latestTime **参数解释**： 最后一次文件/注册表变更时间 **取值范围**： 非负长整数，时间格式：13位毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @return $this
    */
    public function setLatestTime($latestTime)
    {
        $this->container['latestTime'] = $latestTime;
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

