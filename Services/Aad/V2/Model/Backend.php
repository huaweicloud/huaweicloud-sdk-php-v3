<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Backend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Backend';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  当前后端协议
    * port  当前后端端口
    * host  当前后端 Host 值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'port' => 'int',
            'host' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  当前后端协议
    * port  当前后端端口
    * host  当前后端 Host 值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'port' => 'int32',
        'host' => null
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
    * protocol  当前后端协议
    * port  当前后端端口
    * host  当前后端 Host 值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'port' => 'port',
            'host' => 'host'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  当前后端协议
    * port  当前后端端口
    * host  当前后端 Host 值
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'port' => 'setPort',
            'host' => 'setHost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  当前后端协议
    * port  当前后端端口
    * host  当前后端 Host 值
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'port' => 'getPort',
            'host' => 'getHost'
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
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
    * Gets protocol
    *  当前后端协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 当前后端协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets port
    *  当前后端端口
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 当前后端端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets host
    *  当前后端 Host 值
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 当前后端 Host 值
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
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

