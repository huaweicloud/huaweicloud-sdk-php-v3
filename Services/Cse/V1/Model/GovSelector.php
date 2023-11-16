<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GovSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GovSelector';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * environment  所属环境
    * app  所属应用
    * service  可选，治理下发到微服务级别
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'environment' => 'string',
            'app' => 'string',
            'service' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * environment  所属环境
    * app  所属应用
    * service  可选，治理下发到微服务级别
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'environment' => null,
        'app' => null,
        'service' => null
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
    * environment  所属环境
    * app  所属应用
    * service  可选，治理下发到微服务级别
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'environment' => 'environment',
            'app' => 'app',
            'service' => 'service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * environment  所属环境
    * app  所属应用
    * service  可选，治理下发到微服务级别
    *
    * @var string[]
    */
    protected static $setters = [
            'environment' => 'setEnvironment',
            'app' => 'setApp',
            'service' => 'setService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * environment  所属环境
    * app  所属应用
    * service  可选，治理下发到微服务级别
    *
    * @var string[]
    */
    protected static $getters = [
            'environment' => 'getEnvironment',
            'app' => 'getApp',
            'service' => 'getService'
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
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
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
    * Gets environment
    *  所属环境
    *
    * @return string|null
    */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
    * Sets environment
    *
    * @param string|null $environment 所属环境
    *
    * @return $this
    */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;
        return $this;
    }

    /**
    * Gets app
    *  所属应用
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 所属应用
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets service
    *  可选，治理下发到微服务级别
    *
    * @return string|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string|null $service 可选，治理下发到微服务级别
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
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

