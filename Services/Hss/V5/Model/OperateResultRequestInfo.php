<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperateResultRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperateResultRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'resultId' => 'string',
            'eventType' => 'int',
            'occurTime' => 'int',
            'fileHash' => 'string',
            'filePath' => 'string',
            'fileAttr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'resultId' => null,
        'eventType' => 'int32',
        'occurTime' => 'int64',
        'fileHash' => null,
        'filePath' => null,
        'fileAttr' => null
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
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'resultId' => 'result_id',
            'eventType' => 'event_type',
            'occurTime' => 'occur_time',
            'fileHash' => 'file_hash',
            'filePath' => 'file_path',
            'fileAttr' => 'file_attr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'resultId' => 'setResultId',
            'eventType' => 'setEventType',
            'occurTime' => 'setOccurTime',
            'fileHash' => 'setFileHash',
            'filePath' => 'setFilePath',
            'fileAttr' => 'setFileAttr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * resultId  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'resultId' => 'getResultId',
            'eventType' => 'getEventType',
            'occurTime' => 'getOccurTime',
            'fileHash' => 'getFileHash',
            'filePath' => 'getFilePath',
            'fileAttr' => 'getFileAttr'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileAttr'] = isset($data['fileAttr']) ? $data['fileAttr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agentId'] === null) {
            $invalidProperties[] = "'agentId' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['resultId'] === null) {
            $invalidProperties[] = "'resultId' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['resultId'])) {
                $invalidProperties[] = "invalid value for 'resultId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
            if (($this->container['eventType'] > 6000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 6000.";
            }
            if (($this->container['eventType'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be bigger than or equal to 0.";
            }
        if ($this->container['fileHash'] === null) {
            $invalidProperties[] = "'fileHash' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['fileHash'])) {
                $invalidProperties[] = "invalid value for 'fileHash', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['fileAttr'] === null) {
            $invalidProperties[] = "'fileAttr' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['fileAttr'])) {
                $invalidProperties[] = "invalid value for 'fileAttr', must be conform to the pattern /^.*$/.";
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
    * Gets agentId
    *  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string $agentId **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets resultId
    *  **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    *
    * @return string
    */
    public function getResultId()
    {
        return $this->container['resultId'];
    }

    /**
    * Sets resultId
    *
    * @param string $resultId **参数解释**： 病毒查杀结果ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    *
    * @return int
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param int $eventType **参数解释**: 病毒查杀结果对应的事件类型标识 **取值范围**: 0-10（具体含义：0=文件病毒事件、1=内存病毒事件...，详见产品错误码/枚举文档）
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets occurTime
    *  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @return int|null
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param int|null $occurTime **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807，时间格式：毫秒级时间戳（UTC时区，从1970-01-01 00:00:00开始计算），单位：ms
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets fileHash
    *  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    *
    * @return string
    */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
    * Sets fileHash
    *
    * @param string $fileHash **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string $filePath **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileAttr
    *  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @return string
    */
    public function getFileAttr()
    {
        return $this->container['fileAttr'];
    }

    /**
    * Sets fileAttr
    *
    * @param string $fileAttr **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileAttr($fileAttr)
    {
        $this->container['fileAttr'] = $fileAttr;
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

