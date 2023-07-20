<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogStreamResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogStreamResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logStreams  日志组数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logStreams' => '\HuaweiCloud\SDK\Lts\V2\Model\LogStream[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logStreams  日志组数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logStreams' => null
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
    * logStreams  日志组数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logStreams' => 'log_streams'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logStreams  日志组数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'logStreams' => 'setLogStreams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logStreams  日志组数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'logStreams' => 'getLogStreams'
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
        $this->container['logStreams'] = isset($data['logStreams']) ? $data['logStreams'] : null;
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
    * Gets logStreams
    *  日志组数组。
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LogStream[]|null
    */
    public function getLogStreams()
    {
        return $this->container['logStreams'];
    }

    /**
    * Sets logStreams
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LogStream[]|null $logStreams 日志组数组。
    *
    * @return $this
    */
    public function setLogStreams($logStreams)
    {
        $this->container['logStreams'] = $logStreams;
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

