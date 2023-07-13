<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SelectorConfigBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SelectorConfigBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allSupported  是否选择所有支持的资源
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allSupported' => 'bool',
            'resourceTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allSupported  是否选择所有支持的资源
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allSupported' => null,
        'resourceTypes' => null
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
    * allSupported  是否选择所有支持的资源
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allSupported' => 'all_supported',
            'resourceTypes' => 'resource_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allSupported  是否选择所有支持的资源
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $setters = [
            'allSupported' => 'setAllSupported',
            'resourceTypes' => 'setResourceTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allSupported  是否选择所有支持的资源
    * resourceTypes  资源类型列表
    *
    * @var string[]
    */
    protected static $getters = [
            'allSupported' => 'getAllSupported',
            'resourceTypes' => 'getResourceTypes'
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
        $this->container['allSupported'] = isset($data['allSupported']) ? $data['allSupported'] : null;
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['allSupported'] === null) {
            $invalidProperties[] = "'allSupported' can't be null";
        }
        if ($this->container['resourceTypes'] === null) {
            $invalidProperties[] = "'resourceTypes' can't be null";
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
    * Gets allSupported
    *  是否选择所有支持的资源
    *
    * @return bool
    */
    public function getAllSupported()
    {
        return $this->container['allSupported'];
    }

    /**
    * Sets allSupported
    *
    * @param bool $allSupported 是否选择所有支持的资源
    *
    * @return $this
    */
    public function setAllSupported($allSupported)
    {
        $this->container['allSupported'] = $allSupported;
        return $this;
    }

    /**
    * Gets resourceTypes
    *  资源类型列表
    *
    * @return string[]
    */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
    * Sets resourceTypes
    *
    * @param string[] $resourceTypes 资源类型列表
    *
    * @return $this
    */
    public function setResourceTypes($resourceTypes)
    {
        $this->container['resourceTypes'] = $resourceTypes;
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

