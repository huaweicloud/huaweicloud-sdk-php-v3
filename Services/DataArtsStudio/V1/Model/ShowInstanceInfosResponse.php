<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceInfosResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceInfosResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statusCode  响应码
    * body  响应体
    * headerMap  响应头，结构为Map<String,String>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statusCode' => 'int',
            'body' => 'string',
            'headerMap' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statusCode  响应码
    * body  响应体
    * headerMap  响应头，结构为Map<String,String>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statusCode' => 'int32',
        'body' => null,
        'headerMap' => null
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
    * statusCode  响应码
    * body  响应体
    * headerMap  响应头，结构为Map<String,String>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statusCode' => 'status_code',
            'body' => 'body',
            'headerMap' => 'header_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statusCode  响应码
    * body  响应体
    * headerMap  响应头，结构为Map<String,String>
    *
    * @var string[]
    */
    protected static $setters = [
            'statusCode' => 'setStatusCode',
            'body' => 'setBody',
            'headerMap' => 'setHeaderMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statusCode  响应码
    * body  响应体
    * headerMap  响应头，结构为Map<String,String>
    *
    * @var string[]
    */
    protected static $getters = [
            'statusCode' => 'getStatusCode',
            'body' => 'getBody',
            'headerMap' => 'getHeaderMap'
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
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['headerMap'] = isset($data['headerMap']) ? $data['headerMap'] : null;
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
    * Gets statusCode
    *  响应码
    *
    * @return int|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param int|null $statusCode 响应码
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets body
    *  响应体
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body 响应体
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets headerMap
    *  响应头，结构为Map<String,String>
    *
    * @return object|null
    */
    public function getHeaderMap()
    {
        return $this->container['headerMap'];
    }

    /**
    * Sets headerMap
    *
    * @param object|null $headerMap 响应头，结构为Map<String,String>
    *
    * @return $this
    */
    public function setHeaderMap($headerMap)
    {
        $this->container['headerMap'] = $headerMap;
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

