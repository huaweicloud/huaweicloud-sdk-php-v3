<?php

namespace HuaweiCloud\SDK\AntiDDoS\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TriggerQpsDict implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TriggerQpsDict';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpRequestPosId' => 'int',
            'httpPacketPerSecond' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpRequestPosId' => 'int64',
        'httpPacketPerSecond' => 'int64'
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
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpRequestPosId' => 'http_request_pos_id',
            'httpPacketPerSecond' => 'http_packet_per_second'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'httpRequestPosId' => 'setHttpRequestPosId',
            'httpPacketPerSecond' => 'setHttpPacketPerSecond'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * httpPacketPerSecond  每秒HTTP请求数（个/s）阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'httpRequestPosId' => 'getHttpRequestPosId',
            'httpPacketPerSecond' => 'getHttpPacketPerSecond'
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
        $this->container['httpRequestPosId'] = isset($data['httpRequestPosId']) ? $data['httpRequestPosId'] : null;
        $this->container['httpPacketPerSecond'] = isset($data['httpPacketPerSecond']) ? $data['httpPacketPerSecond'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['httpRequestPosId'] === null) {
            $invalidProperties[] = "'httpRequestPosId' can't be null";
        }
        if ($this->container['httpPacketPerSecond'] === null) {
            $invalidProperties[] = "'httpPacketPerSecond' can't be null";
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
    * Gets httpRequestPosId
    *  HTTP请求数分段ID，固定值为1
    *
    * @return int
    */
    public function getHttpRequestPosId()
    {
        return $this->container['httpRequestPosId'];
    }

    /**
    * Sets httpRequestPosId
    *
    * @param int $httpRequestPosId HTTP请求数分段ID，固定值为1
    *
    * @return $this
    */
    public function setHttpRequestPosId($httpRequestPosId)
    {
        $this->container['httpRequestPosId'] = $httpRequestPosId;
        return $this;
    }

    /**
    * Gets httpPacketPerSecond
    *  每秒HTTP请求数（个/s）阈值
    *
    * @return int
    */
    public function getHttpPacketPerSecond()
    {
        return $this->container['httpPacketPerSecond'];
    }

    /**
    * Sets httpPacketPerSecond
    *
    * @param int $httpPacketPerSecond 每秒HTTP请求数（个/s）阈值
    *
    * @return $this
    */
    public function setHttpPacketPerSecond($httpPacketPerSecond)
    {
        $this->container['httpPacketPerSecond'] = $httpPacketPerSecond;
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

