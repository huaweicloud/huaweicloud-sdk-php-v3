<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Criterion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Criterion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contains  要匹配筛选器的“包含”运算符。
    * eq  要匹配筛选器的“等于”运算符。
    * exists  要匹配筛选器的“存在”运算符。
    * neq  要匹配筛选器的“不等于”运算符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contains' => 'string[]',
            'eq' => 'string[]',
            'exists' => 'bool',
            'neq' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contains  要匹配筛选器的“包含”运算符。
    * eq  要匹配筛选器的“等于”运算符。
    * exists  要匹配筛选器的“存在”运算符。
    * neq  要匹配筛选器的“不等于”运算符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contains' => null,
        'eq' => null,
        'exists' => null,
        'neq' => null
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
    * contains  要匹配筛选器的“包含”运算符。
    * eq  要匹配筛选器的“等于”运算符。
    * exists  要匹配筛选器的“存在”运算符。
    * neq  要匹配筛选器的“不等于”运算符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contains' => 'contains',
            'eq' => 'eq',
            'exists' => 'exists',
            'neq' => 'neq'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contains  要匹配筛选器的“包含”运算符。
    * eq  要匹配筛选器的“等于”运算符。
    * exists  要匹配筛选器的“存在”运算符。
    * neq  要匹配筛选器的“不等于”运算符。
    *
    * @var string[]
    */
    protected static $setters = [
            'contains' => 'setContains',
            'eq' => 'setEq',
            'exists' => 'setExists',
            'neq' => 'setNeq'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contains  要匹配筛选器的“包含”运算符。
    * eq  要匹配筛选器的“等于”运算符。
    * exists  要匹配筛选器的“存在”运算符。
    * neq  要匹配筛选器的“不等于”运算符。
    *
    * @var string[]
    */
    protected static $getters = [
            'contains' => 'getContains',
            'eq' => 'getEq',
            'exists' => 'getExists',
            'neq' => 'getNeq'
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
        $this->container['contains'] = isset($data['contains']) ? $data['contains'] : null;
        $this->container['eq'] = isset($data['eq']) ? $data['eq'] : null;
        $this->container['exists'] = isset($data['exists']) ? $data['exists'] : null;
        $this->container['neq'] = isset($data['neq']) ? $data['neq'] : null;
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
    * Gets contains
    *  要匹配筛选器的“包含”运算符。
    *
    * @return string[]|null
    */
    public function getContains()
    {
        return $this->container['contains'];
    }

    /**
    * Sets contains
    *
    * @param string[]|null $contains 要匹配筛选器的“包含”运算符。
    *
    * @return $this
    */
    public function setContains($contains)
    {
        $this->container['contains'] = $contains;
        return $this;
    }

    /**
    * Gets eq
    *  要匹配筛选器的“等于”运算符。
    *
    * @return string[]|null
    */
    public function getEq()
    {
        return $this->container['eq'];
    }

    /**
    * Sets eq
    *
    * @param string[]|null $eq 要匹配筛选器的“等于”运算符。
    *
    * @return $this
    */
    public function setEq($eq)
    {
        $this->container['eq'] = $eq;
        return $this;
    }

    /**
    * Gets exists
    *  要匹配筛选器的“存在”运算符。
    *
    * @return bool|null
    */
    public function getExists()
    {
        return $this->container['exists'];
    }

    /**
    * Sets exists
    *
    * @param bool|null $exists 要匹配筛选器的“存在”运算符。
    *
    * @return $this
    */
    public function setExists($exists)
    {
        $this->container['exists'] = $exists;
        return $this;
    }

    /**
    * Gets neq
    *  要匹配筛选器的“不等于”运算符。
    *
    * @return string[]|null
    */
    public function getNeq()
    {
        return $this->container['neq'];
    }

    /**
    * Sets neq
    *
    * @param string[]|null $neq 要匹配筛选器的“不等于”运算符。
    *
    * @return $this
    */
    public function setNeq($neq)
    {
        $this->container['neq'] = $neq;
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

