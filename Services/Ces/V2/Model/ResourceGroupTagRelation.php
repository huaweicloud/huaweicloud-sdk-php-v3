<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceGroupTagRelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceGroupTagRelation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  TMS标签键规范。
    * operator  tag操作符，含义是标签key与value的关系。   include表示包含   prefix表示前缀   suffix表示后缀   notInclude表示不包含   equal表示相等   当operator为equal，value为空字符串时表示为全部   all表示全部
    * value  TMS标签值规范。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'operator' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  TMS标签键规范。
    * operator  tag操作符，含义是标签key与value的关系。   include表示包含   prefix表示前缀   suffix表示后缀   notInclude表示不包含   equal表示相等   当operator为equal，value为空字符串时表示为全部   all表示全部
    * value  TMS标签值规范。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'operator' => null,
        'value' => null
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
    * key  TMS标签键规范。
    * operator  tag操作符，含义是标签key与value的关系。   include表示包含   prefix表示前缀   suffix表示后缀   notInclude表示不包含   equal表示相等   当operator为equal，value为空字符串时表示为全部   all表示全部
    * value  TMS标签值规范。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'operator' => 'operator',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  TMS标签键规范。
    * operator  tag操作符，含义是标签key与value的关系。   include表示包含   prefix表示前缀   suffix表示后缀   notInclude表示不包含   equal表示相等   当operator为equal，value为空字符串时表示为全部   all表示全部
    * value  TMS标签值规范。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'operator' => 'setOperator',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  TMS标签键规范。
    * operator  tag操作符，含义是标签key与value的关系。   include表示包含   prefix表示前缀   suffix表示后缀   notInclude表示不包含   equal表示相等   当operator为equal，value为空字符串时表示为全部   all表示全部
    * value  TMS标签值规范。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'operator' => 'getOperator',
            'value' => 'getValue'
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
    const OPERATOR__INCLUDE = 'include';
    const OPERATOR_PREFIX = 'prefix';
    const OPERATOR_SUFFIX = 'suffix';
    const OPERATOR_NOT_INCLUDE = 'notInclude';
    const OPERATOR_EQUAL = 'equal';
    const OPERATOR_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR__INCLUDE,
            self::OPERATOR_PREFIX,
            self::OPERATOR_SUFFIX,
            self::OPERATOR_NOT_INCLUDE,
            self::OPERATOR_EQUAL,
            self::OPERATOR_ALL,
        ];
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 128)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^((?!\\s)(?!_sys_)[\\p{L}\\p{Z}\\p{N}_.:=+\\-@]*)(?<!\\s)$/", $this->container['key'])) {
                $invalidProperties[] = "invalid value for 'key', must be conform to the pattern /^((?!\\s)(?!_sys_)[\\p{L}\\p{Z}\\p{N}_.:=+\\-@]*)(?<!\\s)$/.";
            }
            $allowedValues = $this->getOperatorAllowableValues();
                if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 255)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && !preg_match("/^([\\p{L}\\p{Z}\\p{N}_.:\/=+\\-@]*)$/", $this->container['value'])) {
                $invalidProperties[] = "invalid value for 'value', must be conform to the pattern /^([\\p{L}\\p{Z}\\p{N}_.:\/=+\\-@]*)$/.";
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
    * Gets key
    *  TMS标签键规范。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key TMS标签键规范。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets operator
    *  tag操作符，含义是标签key与value的关系。   include表示包含   prefix表示前缀   suffix表示后缀   notInclude表示不包含   equal表示相等   当operator为equal，value为空字符串时表示为全部   all表示全部
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator tag操作符，含义是标签key与value的关系。   include表示包含   prefix表示前缀   suffix表示后缀   notInclude表示不包含   equal表示相等   当operator为equal，value为空字符串时表示为全部   all表示全部
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets value
    *  TMS标签值规范。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value TMS标签值规范。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

