<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtocolResVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtocolResVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * responseCode  期望响应的状态码
    * responseTime  期望响应时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'responseCode' => 'int[]',
            'responseTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * responseCode  期望响应的状态码
    * responseTime  期望响应时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'responseCode' => 'int32',
        'responseTime' => null
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
    * responseCode  期望响应的状态码
    * responseTime  期望响应时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'responseCode' => 'response_code',
            'responseTime' => 'response_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * responseCode  期望响应的状态码
    * responseTime  期望响应时间
    *
    * @var string[]
    */
    protected static $setters = [
            'responseCode' => 'setResponseCode',
            'responseTime' => 'setResponseTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * responseCode  期望响应的状态码
    * responseTime  期望响应时间
    *
    * @var string[]
    */
    protected static $getters = [
            'responseCode' => 'getResponseCode',
            'responseTime' => 'getResponseTime'
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
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['responseTime'] = isset($data['responseTime']) ? $data['responseTime'] : null;
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
    * Gets responseCode
    *  期望响应的状态码
    *
    * @return int[]|null
    */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
    * Sets responseCode
    *
    * @param int[]|null $responseCode 期望响应的状态码
    *
    * @return $this
    */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;
        return $this;
    }

    /**
    * Gets responseTime
    *  期望响应时间
    *
    * @return string|null
    */
    public function getResponseTime()
    {
        return $this->container['responseTime'];
    }

    /**
    * Sets responseTime
    *
    * @param string|null $responseTime 期望响应时间
    *
    * @return $this
    */
    public function setResponseTime($responseTime)
    {
        $this->container['responseTime'] = $responseTime;
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

