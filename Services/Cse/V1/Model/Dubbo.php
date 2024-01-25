<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Dubbo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Dubbo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * service  服务名。
    * version  版本号。
    * group  分组。
    * methods  dubbo方法列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'service' => 'string',
            'version' => 'string',
            'group' => 'string',
            'methods' => '\HuaweiCloud\SDK\Cse\V1\Model\DubboMethod[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * service  服务名。
    * version  版本号。
    * group  分组。
    * methods  dubbo方法列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'service' => null,
        'version' => null,
        'group' => null,
        'methods' => null
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
    * service  服务名。
    * version  版本号。
    * group  分组。
    * methods  dubbo方法列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'service' => 'service',
            'version' => 'version',
            'group' => 'group',
            'methods' => 'methods'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * service  服务名。
    * version  版本号。
    * group  分组。
    * methods  dubbo方法列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'service' => 'setService',
            'version' => 'setVersion',
            'group' => 'setGroup',
            'methods' => 'setMethods'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * service  服务名。
    * version  版本号。
    * group  分组。
    * methods  dubbo方法列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'service' => 'getService',
            'version' => 'getVersion',
            'group' => 'getGroup',
            'methods' => 'getMethods'
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
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['methods'] = isset($data['methods']) ? $data['methods'] : null;
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
    * Gets service
    *  服务名。
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
    * @param string|null $service 服务名。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets version
    *  版本号。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets group
    *  分组。
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 分组。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets methods
    *  dubbo方法列表。
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\DubboMethod[]|null
    */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
    * Sets methods
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\DubboMethod[]|null $methods dubbo方法列表。
    *
    * @return $this
    */
    public function setMethods($methods)
    {
        $this->container['methods'] = $methods;
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

