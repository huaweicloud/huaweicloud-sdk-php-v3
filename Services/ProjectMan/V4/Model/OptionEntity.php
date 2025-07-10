<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OptionEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OptionEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  选项id
    * code  选项code值
    * displayValue  选项显示名称
    * value  选项唯一标识
    * level  选项层级。用于区分层级字段的层级
    * sequence  选项顺序
    * parentId  父选项id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'code' => 'string',
            'displayValue' => 'string',
            'value' => 'string',
            'level' => 'int',
            'sequence' => 'int',
            'parentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  选项id
    * code  选项code值
    * displayValue  选项显示名称
    * value  选项唯一标识
    * level  选项层级。用于区分层级字段的层级
    * sequence  选项顺序
    * parentId  父选项id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'code' => null,
        'displayValue' => null,
        'value' => null,
        'level' => 'int32',
        'sequence' => 'int32',
        'parentId' => null
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
    * id  选项id
    * code  选项code值
    * displayValue  选项显示名称
    * value  选项唯一标识
    * level  选项层级。用于区分层级字段的层级
    * sequence  选项顺序
    * parentId  父选项id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'code' => 'code',
            'displayValue' => 'display_value',
            'value' => 'value',
            'level' => 'level',
            'sequence' => 'sequence',
            'parentId' => 'parent_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  选项id
    * code  选项code值
    * displayValue  选项显示名称
    * value  选项唯一标识
    * level  选项层级。用于区分层级字段的层级
    * sequence  选项顺序
    * parentId  父选项id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'code' => 'setCode',
            'displayValue' => 'setDisplayValue',
            'value' => 'setValue',
            'level' => 'setLevel',
            'sequence' => 'setSequence',
            'parentId' => 'setParentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  选项id
    * code  选项code值
    * displayValue  选项显示名称
    * value  选项唯一标识
    * level  选项层级。用于区分层级字段的层级
    * sequence  选项顺序
    * parentId  父选项id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'code' => 'getCode',
            'displayValue' => 'getDisplayValue',
            'value' => 'getValue',
            'level' => 'getLevel',
            'sequence' => 'getSequence',
            'parentId' => 'getParentId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['displayValue'] = isset($data['displayValue']) ? $data['displayValue'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 2)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 32)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayValue']) && (mb_strlen($this->container['displayValue']) > 15)) {
                $invalidProperties[] = "invalid value for 'displayValue', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['displayValue']) && (mb_strlen($this->container['displayValue']) < 2)) {
                $invalidProperties[] = "invalid value for 'displayValue', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 32)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] > 4)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] < 1)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sequence']) && ($this->container['sequence'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sequence', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sequence']) && ($this->container['sequence'] < 0)) {
                $invalidProperties[] = "invalid value for 'sequence', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 32)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 2)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 2.";
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
    * Gets id
    *  选项id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 选项id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets code
    *  选项code值
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 选项code值
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets displayValue
    *  选项显示名称
    *
    * @return string|null
    */
    public function getDisplayValue()
    {
        return $this->container['displayValue'];
    }

    /**
    * Sets displayValue
    *
    * @param string|null $displayValue 选项显示名称
    *
    * @return $this
    */
    public function setDisplayValue($displayValue)
    {
        $this->container['displayValue'] = $displayValue;
        return $this;
    }

    /**
    * Gets value
    *  选项唯一标识
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
    * @param string|null $value 选项唯一标识
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets level
    *  选项层级。用于区分层级字段的层级
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 选项层级。用于区分层级字段的层级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets sequence
    *  选项顺序
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence 选项顺序
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets parentId
    *  父选项id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父选项id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
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

