<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsInfoJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsInfo_job';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupId  日志组ID。
    * logStreamId  日志流ID。
    * ltsEnabled  是否开启LTS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'ltsEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupId  日志组ID。
    * logStreamId  日志流ID。
    * ltsEnabled  是否开启LTS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupId' => null,
        'logStreamId' => null,
        'ltsEnabled' => null
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
    * logGroupId  日志组ID。
    * logStreamId  日志流ID。
    * ltsEnabled  是否开启LTS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'ltsEnabled' => 'lts_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupId  日志组ID。
    * logStreamId  日志流ID。
    * ltsEnabled  是否开启LTS。
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'ltsEnabled' => 'setLtsEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupId  日志组ID。
    * logStreamId  日志流ID。
    * ltsEnabled  是否开启LTS。
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'ltsEnabled' => 'getLtsEnabled'
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
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['ltsEnabled'] = isset($data['ltsEnabled']) ? $data['ltsEnabled'] : null;
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
    * Gets logGroupId
    *  日志组ID。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组ID。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID。
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流ID。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets ltsEnabled
    *  是否开启LTS。
    *
    * @return bool|null
    */
    public function getLtsEnabled()
    {
        return $this->container['ltsEnabled'];
    }

    /**
    * Sets ltsEnabled
    *
    * @param bool|null $ltsEnabled 是否开启LTS。
    *
    * @return $this
    */
    public function setLtsEnabled($ltsEnabled)
    {
        $this->container['ltsEnabled'] = $ltsEnabled;
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

