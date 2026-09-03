<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtocolReqVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtocolReqVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basic  basic
    * headers  请求头
    * method  方法
    * requestBody  请求body体
    * url  url
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basic' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\BasicInfoVo',
            'headers' => 'map[string,string]',
            'method' => 'string',
            'requestBody' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basic  basic
    * headers  请求头
    * method  方法
    * requestBody  请求body体
    * url  url
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basic' => null,
        'headers' => null,
        'method' => null,
        'requestBody' => null,
        'url' => null
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
    * basic  basic
    * headers  请求头
    * method  方法
    * requestBody  请求body体
    * url  url
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basic' => 'basic',
            'headers' => 'headers',
            'method' => 'method',
            'requestBody' => 'request_body',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basic  basic
    * headers  请求头
    * method  方法
    * requestBody  请求body体
    * url  url
    *
    * @var string[]
    */
    protected static $setters = [
            'basic' => 'setBasic',
            'headers' => 'setHeaders',
            'method' => 'setMethod',
            'requestBody' => 'setRequestBody',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basic  basic
    * headers  请求头
    * method  方法
    * requestBody  请求body体
    * url  url
    *
    * @var string[]
    */
    protected static $getters = [
            'basic' => 'getBasic',
            'headers' => 'getHeaders',
            'method' => 'getMethod',
            'requestBody' => 'getRequestBody',
            'url' => 'getUrl'
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
        $this->container['basic'] = isset($data['basic']) ? $data['basic'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['requestBody'] = isset($data['requestBody']) ? $data['requestBody'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
    * Gets basic
    *  basic
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicInfoVo|null
    */
    public function getBasic()
    {
        return $this->container['basic'];
    }

    /**
    * Sets basic
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\BasicInfoVo|null $basic basic
    *
    * @return $this
    */
    public function setBasic($basic)
    {
        $this->container['basic'] = $basic;
        return $this;
    }

    /**
    * Gets headers
    *  请求头
    *
    * @return map[string,string]|null
    */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
    * Sets headers
    *
    * @param map[string,string]|null $headers 请求头
    *
    * @return $this
    */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
    * Gets method
    *  方法
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method 方法
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets requestBody
    *  请求body体
    *
    * @return string|null
    */
    public function getRequestBody()
    {
        return $this->container['requestBody'];
    }

    /**
    * Sets requestBody
    *
    * @param string|null $requestBody 请求body体
    *
    * @return $this
    */
    public function setRequestBody($requestBody)
    {
        $this->container['requestBody'] = $requestBody;
        return $this;
    }

    /**
    * Gets url
    *  url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

