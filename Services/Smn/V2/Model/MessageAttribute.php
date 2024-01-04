<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MessageAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MessageAttribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  属性名称。属性名称只能包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符
    * type  属性类型 STRING：字符串（String）类型 STRING_ARRAY：字符串数组（String.Array）类型 PROTOCOL：协议类型
    * value  属性值。 当属性类型为“STRING”时，属性值只能包含中英文、数字、下划线，长度为1到32个字符。 当属性类型为“STRING_ARRAY”时，属性值为字符串数组，数组长度为1到10，数组中的元素内容不能重复，数组中的每个字符串都只能包含中英文、数字、下划线，且长度为1到32个字符。 当属性类型为“PROTOCOL”时，属性值为支持协议类型的字符串数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'value' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  属性名称。属性名称只能包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符
    * type  属性类型 STRING：字符串（String）类型 STRING_ARRAY：字符串数组（String.Array）类型 PROTOCOL：协议类型
    * value  属性值。 当属性类型为“STRING”时，属性值只能包含中英文、数字、下划线，长度为1到32个字符。 当属性类型为“STRING_ARRAY”时，属性值为字符串数组，数组长度为1到10，数组中的元素内容不能重复，数组中的每个字符串都只能包含中英文、数字、下划线，且长度为1到32个字符。 当属性类型为“PROTOCOL”时，属性值为支持协议类型的字符串数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
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
    * name  属性名称。属性名称只能包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符
    * type  属性类型 STRING：字符串（String）类型 STRING_ARRAY：字符串数组（String.Array）类型 PROTOCOL：协议类型
    * value  属性值。 当属性类型为“STRING”时，属性值只能包含中英文、数字、下划线，长度为1到32个字符。 当属性类型为“STRING_ARRAY”时，属性值为字符串数组，数组长度为1到10，数组中的元素内容不能重复，数组中的每个字符串都只能包含中英文、数字、下划线，且长度为1到32个字符。 当属性类型为“PROTOCOL”时，属性值为支持协议类型的字符串数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  属性名称。属性名称只能包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符
    * type  属性类型 STRING：字符串（String）类型 STRING_ARRAY：字符串数组（String.Array）类型 PROTOCOL：协议类型
    * value  属性值。 当属性类型为“STRING”时，属性值只能包含中英文、数字、下划线，长度为1到32个字符。 当属性类型为“STRING_ARRAY”时，属性值为字符串数组，数组长度为1到10，数组中的元素内容不能重复，数组中的每个字符串都只能包含中英文、数字、下划线，且长度为1到32个字符。 当属性类型为“PROTOCOL”时，属性值为支持协议类型的字符串数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  属性名称。属性名称只能包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符
    * type  属性类型 STRING：字符串（String）类型 STRING_ARRAY：字符串数组（String.Array）类型 PROTOCOL：协议类型
    * value  属性值。 当属性类型为“STRING”时，属性值只能包含中英文、数字、下划线，长度为1到32个字符。 当属性类型为“STRING_ARRAY”时，属性值为字符串数组，数组长度为1到10，数组中的元素内容不能重复，数组中的每个字符串都只能包含中英文、数字、下划线，且长度为1到32个字符。 当属性类型为“PROTOCOL”时，属性值为支持协议类型的字符串数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
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
    const TYPE_STRING = 'STRING';
    const TYPE_STRING_ARRAY = 'STRING_ARRAY';
    const TYPE_PROTOCOL = 'PROTOCOL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_STRING_ARRAY,
            self::TYPE_PROTOCOL,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-z0-9](?!.*?_{2,})([a-z0-9_]{0,30}[a-z0-9])?$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9](?!.*?_{2,})([a-z0-9_]{0,30}[a-z0-9])?$/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    *  属性名称。属性名称只能包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 属性名称。属性名称只能包含小写英文字母([a-z])、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  属性类型 STRING：字符串（String）类型 STRING_ARRAY：字符串数组（String.Array）类型 PROTOCOL：协议类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 属性类型 STRING：字符串（String）类型 STRING_ARRAY：字符串数组（String.Array）类型 PROTOCOL：协议类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  属性值。 当属性类型为“STRING”时，属性值只能包含中英文、数字、下划线，长度为1到32个字符。 当属性类型为“STRING_ARRAY”时，属性值为字符串数组，数组长度为1到10，数组中的元素内容不能重复，数组中的每个字符串都只能包含中英文、数字、下划线，且长度为1到32个字符。 当属性类型为“PROTOCOL”时，属性值为支持协议类型的字符串数组。
    *
    * @return object
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param object $value 属性值。 当属性类型为“STRING”时，属性值只能包含中英文、数字、下划线，长度为1到32个字符。 当属性类型为“STRING_ARRAY”时，属性值为字符串数组，数组长度为1到10，数组中的元素内容不能重复，数组中的每个字符串都只能包含中英文、数字、下划线，且长度为1到32个字符。 当属性类型为“PROTOCOL”时，属性值为支持协议类型的字符串数组。
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

