<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiRequestPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiRequestPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名称
    * mapping  映射字段
    * condition  操作符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'mapping' => 'string',
            'condition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名称
    * mapping  映射字段
    * condition  操作符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'mapping' => null,
        'condition' => null
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
    * name  参数名称
    * mapping  映射字段
    * condition  操作符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'mapping' => 'mapping',
            'condition' => 'condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名称
    * mapping  映射字段
    * condition  操作符
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'mapping' => 'setMapping',
            'condition' => 'setCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名称
    * mapping  映射字段
    * condition  操作符
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'mapping' => 'getMapping',
            'condition' => 'getCondition'
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
    const CONDITION_CONDITION_TYPE_EQ = 'CONDITION_TYPE_EQ';
    const CONDITION_CONDITION_TYPE_NE = 'CONDITION_TYPE_NE';
    const CONDITION_CONDITION_TYPE_GT = 'CONDITION_TYPE_GT';
    const CONDITION_CONDITION_TYPE_GE = 'CONDITION_TYPE_GE';
    const CONDITION_CONDITION_TYPE_LT = 'CONDITION_TYPE_LT';
    const CONDITION_CONDITION_TYPE_LE = 'CONDITION_TYPE_LE';
    const CONDITION_CONDITION_TYPE_LIKE = 'CONDITION_TYPE_LIKE';
    const CONDITION_CONDITION_TYPE_LIKE_L = 'CONDITION_TYPE_LIKE_L';
    const CONDITION_CONDITION_TYPE_LIKE_R = 'CONDITION_TYPE_LIKE_R';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION_CONDITION_TYPE_EQ,
            self::CONDITION_CONDITION_TYPE_NE,
            self::CONDITION_CONDITION_TYPE_GT,
            self::CONDITION_CONDITION_TYPE_GE,
            self::CONDITION_CONDITION_TYPE_LT,
            self::CONDITION_CONDITION_TYPE_LE,
            self::CONDITION_CONDITION_TYPE_LIKE,
            self::CONDITION_CONDITION_TYPE_LIKE_L,
            self::CONDITION_CONDITION_TYPE_LIKE_R,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mapping'] = isset($data['mapping']) ? $data['mapping'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getConditionAllowableValues();
                if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  参数名称
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
    * @param string|null $name 参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mapping
    *  映射字段
    *
    * @return string|null
    */
    public function getMapping()
    {
        return $this->container['mapping'];
    }

    /**
    * Sets mapping
    *
    * @param string|null $mapping 映射字段
    *
    * @return $this
    */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;
        return $this;
    }

    /**
    * Gets condition
    *  操作符
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 操作符
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
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

