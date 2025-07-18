<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectFilterV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectFilterV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operator  操作符 in/like/startwith/endwith/=/!=/>/<等
    * field  字段名称
    * group  分组
    * name  条件名称
    * matchType  匹配方式
    * priorityType  优先级处理方式
    * values  搜索值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operator' => 'string',
            'field' => 'string',
            'group' => 'string',
            'name' => 'string',
            'matchType' => 'string',
            'priorityType' => 'string',
            'values' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operator  操作符 in/like/startwith/endwith/=/!=/>/<等
    * field  字段名称
    * group  分组
    * name  条件名称
    * matchType  匹配方式
    * priorityType  优先级处理方式
    * values  搜索值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operator' => null,
        'field' => null,
        'group' => null,
        'name' => null,
        'matchType' => null,
        'priorityType' => null,
        'values' => null
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
    * operator  操作符 in/like/startwith/endwith/=/!=/>/<等
    * field  字段名称
    * group  分组
    * name  条件名称
    * matchType  匹配方式
    * priorityType  优先级处理方式
    * values  搜索值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operator' => 'operator',
            'field' => 'field',
            'group' => 'group',
            'name' => 'name',
            'matchType' => 'match_type',
            'priorityType' => 'priority_type',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operator  操作符 in/like/startwith/endwith/=/!=/>/<等
    * field  字段名称
    * group  分组
    * name  条件名称
    * matchType  匹配方式
    * priorityType  优先级处理方式
    * values  搜索值
    *
    * @var string[]
    */
    protected static $setters = [
            'operator' => 'setOperator',
            'field' => 'setField',
            'group' => 'setGroup',
            'name' => 'setName',
            'matchType' => 'setMatchType',
            'priorityType' => 'setPriorityType',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operator  操作符 in/like/startwith/endwith/=/!=/>/<等
    * field  字段名称
    * group  分组
    * name  条件名称
    * matchType  匹配方式
    * priorityType  优先级处理方式
    * values  搜索值
    *
    * @var string[]
    */
    protected static $getters = [
            'operator' => 'getOperator',
            'field' => 'getField',
            'group' => 'getGroup',
            'name' => 'getName',
            'matchType' => 'getMatchType',
            'priorityType' => 'getPriorityType',
            'values' => 'getValues'
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
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['priorityType'] = isset($data['priorityType']) ? $data['priorityType'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
            if ((mb_strlen($this->container['operator']) > 20)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
            if ((mb_strlen($this->container['field']) > 255)) {
                $invalidProperties[] = "invalid value for 'field', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['field']) < 0)) {
                $invalidProperties[] = "invalid value for 'field', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['group']) && (mb_strlen($this->container['group']) > 255)) {
                $invalidProperties[] = "invalid value for 'group', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['group']) && (mb_strlen($this->container['group']) < 0)) {
                $invalidProperties[] = "invalid value for 'group', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['matchType']) && (mb_strlen($this->container['matchType']) > 255)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['matchType']) && (mb_strlen($this->container['matchType']) < 0)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['priorityType']) && (mb_strlen($this->container['priorityType']) > 255)) {
                $invalidProperties[] = "invalid value for 'priorityType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['priorityType']) && (mb_strlen($this->container['priorityType']) < 0)) {
                $invalidProperties[] = "invalid value for 'priorityType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    * Gets operator
    *  操作符 in/like/startwith/endwith/=/!=/>/<等
    *
    * @return string
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string $operator 操作符 in/like/startwith/endwith/=/!=/>/<等
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets field
    *  字段名称
    *
    * @return string
    */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
    * Sets field
    *
    * @param string $field 字段名称
    *
    * @return $this
    */
    public function setField($field)
    {
        $this->container['field'] = $field;
        return $this;
    }

    /**
    * Gets group
    *  分组
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
    * @param string|null $group 分组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
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
    * Gets matchType
    *  匹配方式
    *
    * @return string|null
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string|null $matchType 匹配方式
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets priorityType
    *  优先级处理方式
    *
    * @return string|null
    */
    public function getPriorityType()
    {
        return $this->container['priorityType'];
    }

    /**
    * Sets priorityType
    *
    * @param string|null $priorityType 优先级处理方式
    *
    * @return $this
    */
    public function setPriorityType($priorityType)
    {
        $this->container['priorityType'] = $priorityType;
        return $this;
    }

    /**
    * Gets values
    *  搜索值
    *
    * @return object[]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param object[] $values 搜索值
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

