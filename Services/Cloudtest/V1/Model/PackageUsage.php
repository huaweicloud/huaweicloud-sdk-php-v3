<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackageUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'packageUsage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  套餐类型
    * usedPercent  套餐用量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'usedPercent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  套餐类型
    * usedPercent  套餐用量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'usedPercent' => null
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
    * name  套餐类型
    * usedPercent  套餐用量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'usedPercent' => 'used_percent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  套餐类型
    * usedPercent  套餐用量
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'usedPercent' => 'setUsedPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  套餐类型
    * usedPercent  套餐用量
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'usedPercent' => 'getUsedPercent'
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
        $this->container['usedPercent'] = isset($data['usedPercent']) ? $data['usedPercent'] : null;
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
    *  套餐类型
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
    * @param string|null $name 套餐类型
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets usedPercent
    *  套餐用量
    *
    * @return int|null
    */
    public function getUsedPercent()
    {
        return $this->container['usedPercent'];
    }

    /**
    * Sets usedPercent
    *
    * @param int|null $usedPercent 套餐用量
    *
    * @return $this
    */
    public function setUsedPercent($usedPercent)
    {
        $this->container['usedPercent'] = $usedPercent;
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

