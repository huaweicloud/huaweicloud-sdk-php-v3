<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'pageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nextMarker  |参数名称：向后分页标识符| |参数的约束及描述：向后分页标识符，下一页数据的起始marker，有值代表有下一页，为null代表无下一页|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nextMarker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nextMarker  |参数名称：向后分页标识符| |参数的约束及描述：向后分页标识符，下一页数据的起始marker，有值代表有下一页，为null代表无下一页|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nextMarker' => null
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
    * nextMarker  |参数名称：向后分页标识符| |参数的约束及描述：向后分页标识符，下一页数据的起始marker，有值代表有下一页，为null代表无下一页|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nextMarker' => 'next_marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nextMarker  |参数名称：向后分页标识符| |参数的约束及描述：向后分页标识符，下一页数据的起始marker，有值代表有下一页，为null代表无下一页|
    *
    * @var string[]
    */
    protected static $setters = [
            'nextMarker' => 'setNextMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nextMarker  |参数名称：向后分页标识符| |参数的约束及描述：向后分页标识符，下一页数据的起始marker，有值代表有下一页，为null代表无下一页|
    *
    * @var string[]
    */
    protected static $getters = [
            'nextMarker' => 'getNextMarker'
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
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nextMarker']) && (mb_strlen($this->container['nextMarker']) > 128)) {
                $invalidProperties[] = "invalid value for 'nextMarker', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['nextMarker']) && (mb_strlen($this->container['nextMarker']) < 0)) {
                $invalidProperties[] = "invalid value for 'nextMarker', the character length must be bigger than or equal to 0.";
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
    * Gets nextMarker
    *  |参数名称：向后分页标识符| |参数的约束及描述：向后分页标识符，下一页数据的起始marker，有值代表有下一页，为null代表无下一页|
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker |参数名称：向后分页标识符| |参数的约束及描述：向后分页标识符，下一页数据的起始marker，有值代表有下一页，为null代表无下一页|
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
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

