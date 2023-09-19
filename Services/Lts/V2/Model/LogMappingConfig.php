<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogMappingConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogMappingConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceLogGroupId  源日志组ID
    * targetLogGroupId  目标日志组ID
    * targetLogGroupName  目标日志组名称
    * logStreamConfig  日志流配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceLogGroupId' => 'string',
            'targetLogGroupId' => 'string',
            'targetLogGroupName' => 'string',
            'logStreamConfig' => '\HuaweiCloud\SDK\Lts\V2\Model\LogMappingStreamInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceLogGroupId  源日志组ID
    * targetLogGroupId  目标日志组ID
    * targetLogGroupName  目标日志组名称
    * logStreamConfig  日志流配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceLogGroupId' => null,
        'targetLogGroupId' => null,
        'targetLogGroupName' => null,
        'logStreamConfig' => null
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
    * sourceLogGroupId  源日志组ID
    * targetLogGroupId  目标日志组ID
    * targetLogGroupName  目标日志组名称
    * logStreamConfig  日志流配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceLogGroupId' => 'source_log_group_id',
            'targetLogGroupId' => 'target_log_group_id',
            'targetLogGroupName' => 'target_log_group_name',
            'logStreamConfig' => 'log_stream_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceLogGroupId  源日志组ID
    * targetLogGroupId  目标日志组ID
    * targetLogGroupName  目标日志组名称
    * logStreamConfig  日志流配置
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceLogGroupId' => 'setSourceLogGroupId',
            'targetLogGroupId' => 'setTargetLogGroupId',
            'targetLogGroupName' => 'setTargetLogGroupName',
            'logStreamConfig' => 'setLogStreamConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceLogGroupId  源日志组ID
    * targetLogGroupId  目标日志组ID
    * targetLogGroupName  目标日志组名称
    * logStreamConfig  日志流配置
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceLogGroupId' => 'getSourceLogGroupId',
            'targetLogGroupId' => 'getTargetLogGroupId',
            'targetLogGroupName' => 'getTargetLogGroupName',
            'logStreamConfig' => 'getLogStreamConfig'
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
        $this->container['sourceLogGroupId'] = isset($data['sourceLogGroupId']) ? $data['sourceLogGroupId'] : null;
        $this->container['targetLogGroupId'] = isset($data['targetLogGroupId']) ? $data['targetLogGroupId'] : null;
        $this->container['targetLogGroupName'] = isset($data['targetLogGroupName']) ? $data['targetLogGroupName'] : null;
        $this->container['logStreamConfig'] = isset($data['logStreamConfig']) ? $data['logStreamConfig'] : null;
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
    * Gets sourceLogGroupId
    *  源日志组ID
    *
    * @return string|null
    */
    public function getSourceLogGroupId()
    {
        return $this->container['sourceLogGroupId'];
    }

    /**
    * Sets sourceLogGroupId
    *
    * @param string|null $sourceLogGroupId 源日志组ID
    *
    * @return $this
    */
    public function setSourceLogGroupId($sourceLogGroupId)
    {
        $this->container['sourceLogGroupId'] = $sourceLogGroupId;
        return $this;
    }

    /**
    * Gets targetLogGroupId
    *  目标日志组ID
    *
    * @return string|null
    */
    public function getTargetLogGroupId()
    {
        return $this->container['targetLogGroupId'];
    }

    /**
    * Sets targetLogGroupId
    *
    * @param string|null $targetLogGroupId 目标日志组ID
    *
    * @return $this
    */
    public function setTargetLogGroupId($targetLogGroupId)
    {
        $this->container['targetLogGroupId'] = $targetLogGroupId;
        return $this;
    }

    /**
    * Gets targetLogGroupName
    *  目标日志组名称
    *
    * @return string|null
    */
    public function getTargetLogGroupName()
    {
        return $this->container['targetLogGroupName'];
    }

    /**
    * Sets targetLogGroupName
    *
    * @param string|null $targetLogGroupName 目标日志组名称
    *
    * @return $this
    */
    public function setTargetLogGroupName($targetLogGroupName)
    {
        $this->container['targetLogGroupName'] = $targetLogGroupName;
        return $this;
    }

    /**
    * Gets logStreamConfig
    *  日志流配置
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LogMappingStreamInfo[]|null
    */
    public function getLogStreamConfig()
    {
        return $this->container['logStreamConfig'];
    }

    /**
    * Sets logStreamConfig
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LogMappingStreamInfo[]|null $logStreamConfig 日志流配置
    *
    * @return $this
    */
    public function setLogStreamConfig($logStreamConfig)
    {
        $this->container['logStreamConfig'] = $logStreamConfig;
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

