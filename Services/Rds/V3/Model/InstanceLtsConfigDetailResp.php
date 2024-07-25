<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceLtsConfigDetailResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceLtsConfigDetailResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logType  日志类型
    * ltsGroupId  日志组id
    * ltsStreamId  日志流id
    * enabled  是否开启上传至lts
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logType' => 'string',
            'ltsGroupId' => 'string',
            'ltsStreamId' => 'string',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logType  日志类型
    * ltsGroupId  日志组id
    * ltsStreamId  日志流id
    * enabled  是否开启上传至lts
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logType' => null,
        'ltsGroupId' => null,
        'ltsStreamId' => null,
        'enabled' => null
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
    * logType  日志类型
    * ltsGroupId  日志组id
    * ltsStreamId  日志流id
    * enabled  是否开启上传至lts
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logType' => 'log_type',
            'ltsGroupId' => 'lts_group_id',
            'ltsStreamId' => 'lts_stream_id',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logType  日志类型
    * ltsGroupId  日志组id
    * ltsStreamId  日志流id
    * enabled  是否开启上传至lts
    *
    * @var string[]
    */
    protected static $setters = [
            'logType' => 'setLogType',
            'ltsGroupId' => 'setLtsGroupId',
            'ltsStreamId' => 'setLtsStreamId',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logType  日志类型
    * ltsGroupId  日志组id
    * ltsStreamId  日志流id
    * enabled  是否开启上传至lts
    *
    * @var string[]
    */
    protected static $getters = [
            'logType' => 'getLogType',
            'ltsGroupId' => 'getLtsGroupId',
            'ltsStreamId' => 'getLtsStreamId',
            'enabled' => 'getEnabled'
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
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['ltsGroupId'] = isset($data['ltsGroupId']) ? $data['ltsGroupId'] : null;
        $this->container['ltsStreamId'] = isset($data['ltsStreamId']) ? $data['ltsStreamId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets logType
    *  日志类型
    *
    * @return string|null
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string|null $logType 日志类型
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets ltsGroupId
    *  日志组id
    *
    * @return string|null
    */
    public function getLtsGroupId()
    {
        return $this->container['ltsGroupId'];
    }

    /**
    * Sets ltsGroupId
    *
    * @param string|null $ltsGroupId 日志组id
    *
    * @return $this
    */
    public function setLtsGroupId($ltsGroupId)
    {
        $this->container['ltsGroupId'] = $ltsGroupId;
        return $this;
    }

    /**
    * Gets ltsStreamId
    *  日志流id
    *
    * @return string|null
    */
    public function getLtsStreamId()
    {
        return $this->container['ltsStreamId'];
    }

    /**
    * Sets ltsStreamId
    *
    * @param string|null $ltsStreamId 日志流id
    *
    * @return $this
    */
    public function setLtsStreamId($ltsStreamId)
    {
        $this->container['ltsStreamId'] = $ltsStreamId;
        return $this;
    }

    /**
    * Gets enabled
    *  是否开启上传至lts
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否开启上传至lts
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

