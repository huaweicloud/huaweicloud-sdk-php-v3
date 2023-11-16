<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBussinessSceneSpecMatches implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBussinessScene_spec_matches';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  条件名称
    * apiPath  匹配的PATH
    * headers  匹配的Headers
    * method  匹配的Method列表
    * serviceName  匹配的微服务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'apiPath' => 'object',
            'headers' => 'object',
            'method' => 'string[]',
            'serviceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  条件名称
    * apiPath  匹配的PATH
    * headers  匹配的Headers
    * method  匹配的Method列表
    * serviceName  匹配的微服务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'apiPath' => null,
        'headers' => null,
        'method' => null,
        'serviceName' => null
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
    * name  条件名称
    * apiPath  匹配的PATH
    * headers  匹配的Headers
    * method  匹配的Method列表
    * serviceName  匹配的微服务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'apiPath' => 'apiPath',
            'headers' => 'headers',
            'method' => 'method',
            'serviceName' => 'serviceName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  条件名称
    * apiPath  匹配的PATH
    * headers  匹配的Headers
    * method  匹配的Method列表
    * serviceName  匹配的微服务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'apiPath' => 'setApiPath',
            'headers' => 'setHeaders',
            'method' => 'setMethod',
            'serviceName' => 'setServiceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  条件名称
    * apiPath  匹配的PATH
    * headers  匹配的Headers
    * method  匹配的Method列表
    * serviceName  匹配的微服务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'apiPath' => 'getApiPath',
            'headers' => 'getHeaders',
            'method' => 'getMethod',
            'serviceName' => 'getServiceName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['apiPath'] = isset($data['apiPath']) ? $data['apiPath'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
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
    * Gets name
    *  条件名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 条件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets apiPath
    *  匹配的PATH
    *
    * @return object|null
    */
    public function getApiPath()
    {
        return $this->container['apiPath'];
    }

    /**
    * Sets apiPath
    *
    * @param object|null $apiPath 匹配的PATH
    *
    * @return $this
    */
    public function setApiPath($apiPath)
    {
        $this->container['apiPath'] = $apiPath;
        return $this;
    }

    /**
    * Gets headers
    *  匹配的Headers
    *
    * @return object|null
    */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
    * Sets headers
    *
    * @param object|null $headers 匹配的Headers
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
    *  匹配的Method列表
    *
    * @return string[]|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string[]|null $method 匹配的Method列表
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets serviceName
    *  匹配的微服务名称
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 匹配的微服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
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

