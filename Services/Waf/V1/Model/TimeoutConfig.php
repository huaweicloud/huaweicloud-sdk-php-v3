<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TimeoutConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TimeoutConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectTimeout  WAF连接源站超时配置
    * sendTimeout  WAF发送请求到源站超时配置
    * readTimeout  WAF接收源站响应超时配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectTimeout' => 'int',
            'sendTimeout' => 'int',
            'readTimeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectTimeout  WAF连接源站超时配置
    * sendTimeout  WAF发送请求到源站超时配置
    * readTimeout  WAF接收源站响应超时配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectTimeout' => 'int32',
        'sendTimeout' => 'int32',
        'readTimeout' => 'int32'
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
    * connectTimeout  WAF连接源站超时配置
    * sendTimeout  WAF发送请求到源站超时配置
    * readTimeout  WAF接收源站响应超时配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectTimeout' => 'connect_timeout',
            'sendTimeout' => 'send_timeout',
            'readTimeout' => 'read_timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectTimeout  WAF连接源站超时配置
    * sendTimeout  WAF发送请求到源站超时配置
    * readTimeout  WAF接收源站响应超时配置
    *
    * @var string[]
    */
    protected static $setters = [
            'connectTimeout' => 'setConnectTimeout',
            'sendTimeout' => 'setSendTimeout',
            'readTimeout' => 'setReadTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectTimeout  WAF连接源站超时配置
    * sendTimeout  WAF发送请求到源站超时配置
    * readTimeout  WAF接收源站响应超时配置
    *
    * @var string[]
    */
    protected static $getters = [
            'connectTimeout' => 'getConnectTimeout',
            'sendTimeout' => 'getSendTimeout',
            'readTimeout' => 'getReadTimeout'
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
        $this->container['connectTimeout'] = isset($data['connectTimeout']) ? $data['connectTimeout'] : null;
        $this->container['sendTimeout'] = isset($data['sendTimeout']) ? $data['sendTimeout'] : null;
        $this->container['readTimeout'] = isset($data['readTimeout']) ? $data['readTimeout'] : null;
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
    * Gets connectTimeout
    *  WAF连接源站超时配置
    *
    * @return int|null
    */
    public function getConnectTimeout()
    {
        return $this->container['connectTimeout'];
    }

    /**
    * Sets connectTimeout
    *
    * @param int|null $connectTimeout WAF连接源站超时配置
    *
    * @return $this
    */
    public function setConnectTimeout($connectTimeout)
    {
        $this->container['connectTimeout'] = $connectTimeout;
        return $this;
    }

    /**
    * Gets sendTimeout
    *  WAF发送请求到源站超时配置
    *
    * @return int|null
    */
    public function getSendTimeout()
    {
        return $this->container['sendTimeout'];
    }

    /**
    * Sets sendTimeout
    *
    * @param int|null $sendTimeout WAF发送请求到源站超时配置
    *
    * @return $this
    */
    public function setSendTimeout($sendTimeout)
    {
        $this->container['sendTimeout'] = $sendTimeout;
        return $this;
    }

    /**
    * Gets readTimeout
    *  WAF接收源站响应超时配置
    *
    * @return int|null
    */
    public function getReadTimeout()
    {
        return $this->container['readTimeout'];
    }

    /**
    * Sets readTimeout
    *
    * @param int|null $readTimeout WAF接收源站响应超时配置
    *
    * @return $this
    */
    public function setReadTimeout($readTimeout)
    {
        $this->container['readTimeout'] = $readTimeout;
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

