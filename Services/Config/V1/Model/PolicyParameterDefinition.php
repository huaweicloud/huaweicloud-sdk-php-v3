<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyParameterDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyParameterDefinition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  策略参数名字
    * description  策略参数描述
    * allowedValues  策略参数允许值列表
    * defaultValue  策略参数默认值
    * minimum  策略参数的最小值，当参数类型为Integer或Float时生效。
    * maximum  策略参数的最大值，当参数类型为Integer或Float时生效。
    * minItems  策略参数的最小项数，当参数类型为Array时生效。
    * maxItems  策略参数的最大项数，当参数类型为Array时生效。
    * minLength  策略参数的最小字符串长度或每项的最小字符串长度，当参数类型为String或Array时生效。
    * maxLength  策略参数的最大字符串长度或每项的最大字符串长度，当参数类型为String或Array时生效。
    * pattern  策略参数的字符串正则要求或每项的字符串正则要求，当参数类型为String或Array时生效。
    * type  策略参数类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'allowedValues' => 'object[]',
            'defaultValue' => 'string',
            'minimum' => 'float',
            'maximum' => 'float',
            'minItems' => 'int',
            'maxItems' => 'int',
            'minLength' => 'int',
            'maxLength' => 'int',
            'pattern' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  策略参数名字
    * description  策略参数描述
    * allowedValues  策略参数允许值列表
    * defaultValue  策略参数默认值
    * minimum  策略参数的最小值，当参数类型为Integer或Float时生效。
    * maximum  策略参数的最大值，当参数类型为Integer或Float时生效。
    * minItems  策略参数的最小项数，当参数类型为Array时生效。
    * maxItems  策略参数的最大项数，当参数类型为Array时生效。
    * minLength  策略参数的最小字符串长度或每项的最小字符串长度，当参数类型为String或Array时生效。
    * maxLength  策略参数的最大字符串长度或每项的最大字符串长度，当参数类型为String或Array时生效。
    * pattern  策略参数的字符串正则要求或每项的字符串正则要求，当参数类型为String或Array时生效。
    * type  策略参数类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'allowedValues' => null,
        'defaultValue' => null,
        'minimum' => 'float',
        'maximum' => 'float',
        'minItems' => null,
        'maxItems' => null,
        'minLength' => null,
        'maxLength' => null,
        'pattern' => null,
        'type' => null
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
    * name  策略参数名字
    * description  策略参数描述
    * allowedValues  策略参数允许值列表
    * defaultValue  策略参数默认值
    * minimum  策略参数的最小值，当参数类型为Integer或Float时生效。
    * maximum  策略参数的最大值，当参数类型为Integer或Float时生效。
    * minItems  策略参数的最小项数，当参数类型为Array时生效。
    * maxItems  策略参数的最大项数，当参数类型为Array时生效。
    * minLength  策略参数的最小字符串长度或每项的最小字符串长度，当参数类型为String或Array时生效。
    * maxLength  策略参数的最大字符串长度或每项的最大字符串长度，当参数类型为String或Array时生效。
    * pattern  策略参数的字符串正则要求或每项的字符串正则要求，当参数类型为String或Array时生效。
    * type  策略参数类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'allowedValues' => 'allowed_values',
            'defaultValue' => 'default_value',
            'minimum' => 'minimum',
            'maximum' => 'maximum',
            'minItems' => 'min_items',
            'maxItems' => 'max_items',
            'minLength' => 'min_length',
            'maxLength' => 'max_length',
            'pattern' => 'pattern',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  策略参数名字
    * description  策略参数描述
    * allowedValues  策略参数允许值列表
    * defaultValue  策略参数默认值
    * minimum  策略参数的最小值，当参数类型为Integer或Float时生效。
    * maximum  策略参数的最大值，当参数类型为Integer或Float时生效。
    * minItems  策略参数的最小项数，当参数类型为Array时生效。
    * maxItems  策略参数的最大项数，当参数类型为Array时生效。
    * minLength  策略参数的最小字符串长度或每项的最小字符串长度，当参数类型为String或Array时生效。
    * maxLength  策略参数的最大字符串长度或每项的最大字符串长度，当参数类型为String或Array时生效。
    * pattern  策略参数的字符串正则要求或每项的字符串正则要求，当参数类型为String或Array时生效。
    * type  策略参数类型
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'allowedValues' => 'setAllowedValues',
            'defaultValue' => 'setDefaultValue',
            'minimum' => 'setMinimum',
            'maximum' => 'setMaximum',
            'minItems' => 'setMinItems',
            'maxItems' => 'setMaxItems',
            'minLength' => 'setMinLength',
            'maxLength' => 'setMaxLength',
            'pattern' => 'setPattern',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  策略参数名字
    * description  策略参数描述
    * allowedValues  策略参数允许值列表
    * defaultValue  策略参数默认值
    * minimum  策略参数的最小值，当参数类型为Integer或Float时生效。
    * maximum  策略参数的最大值，当参数类型为Integer或Float时生效。
    * minItems  策略参数的最小项数，当参数类型为Array时生效。
    * maxItems  策略参数的最大项数，当参数类型为Array时生效。
    * minLength  策略参数的最小字符串长度或每项的最小字符串长度，当参数类型为String或Array时生效。
    * maxLength  策略参数的最大字符串长度或每项的最大字符串长度，当参数类型为String或Array时生效。
    * pattern  策略参数的字符串正则要求或每项的字符串正则要求，当参数类型为String或Array时生效。
    * type  策略参数类型
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'allowedValues' => 'getAllowedValues',
            'defaultValue' => 'getDefaultValue',
            'minimum' => 'getMinimum',
            'maximum' => 'getMaximum',
            'minItems' => 'getMinItems',
            'maxItems' => 'getMaxItems',
            'minLength' => 'getMinLength',
            'maxLength' => 'getMaxLength',
            'pattern' => 'getPattern',
            'type' => 'getType'
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
    const TYPE__ARRAY = 'Array';
    const TYPE_BOOLEAN = 'Boolean';
    const TYPE_INTEGER = 'Integer';
    const TYPE_FLOAT = 'Float';
    const TYPE_STRING = 'String';
    const TYPE_DATE_TIME = 'DateTime';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__ARRAY,
            self::TYPE_BOOLEAN,
            self::TYPE_INTEGER,
            self::TYPE_FLOAT,
            self::TYPE_STRING,
            self::TYPE_DATE_TIME,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['allowedValues'] = isset($data['allowedValues']) ? $data['allowedValues'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['minimum'] = isset($data['minimum']) ? $data['minimum'] : null;
        $this->container['maximum'] = isset($data['maximum']) ? $data['maximum'] : null;
        $this->container['minItems'] = isset($data['minItems']) ? $data['minItems'] : null;
        $this->container['maxItems'] = isset($data['maxItems']) ? $data['maxItems'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    *  策略参数名字
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
    * @param string|null $name 策略参数名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  策略参数描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 策略参数描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets allowedValues
    *  策略参数允许值列表
    *
    * @return object[]|null
    */
    public function getAllowedValues()
    {
        return $this->container['allowedValues'];
    }

    /**
    * Sets allowedValues
    *
    * @param object[]|null $allowedValues 策略参数允许值列表
    *
    * @return $this
    */
    public function setAllowedValues($allowedValues)
    {
        $this->container['allowedValues'] = $allowedValues;
        return $this;
    }

    /**
    * Gets defaultValue
    *  策略参数默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 策略参数默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets minimum
    *  策略参数的最小值，当参数类型为Integer或Float时生效。
    *
    * @return float|null
    */
    public function getMinimum()
    {
        return $this->container['minimum'];
    }

    /**
    * Sets minimum
    *
    * @param float|null $minimum 策略参数的最小值，当参数类型为Integer或Float时生效。
    *
    * @return $this
    */
    public function setMinimum($minimum)
    {
        $this->container['minimum'] = $minimum;
        return $this;
    }

    /**
    * Gets maximum
    *  策略参数的最大值，当参数类型为Integer或Float时生效。
    *
    * @return float|null
    */
    public function getMaximum()
    {
        return $this->container['maximum'];
    }

    /**
    * Sets maximum
    *
    * @param float|null $maximum 策略参数的最大值，当参数类型为Integer或Float时生效。
    *
    * @return $this
    */
    public function setMaximum($maximum)
    {
        $this->container['maximum'] = $maximum;
        return $this;
    }

    /**
    * Gets minItems
    *  策略参数的最小项数，当参数类型为Array时生效。
    *
    * @return int|null
    */
    public function getMinItems()
    {
        return $this->container['minItems'];
    }

    /**
    * Sets minItems
    *
    * @param int|null $minItems 策略参数的最小项数，当参数类型为Array时生效。
    *
    * @return $this
    */
    public function setMinItems($minItems)
    {
        $this->container['minItems'] = $minItems;
        return $this;
    }

    /**
    * Gets maxItems
    *  策略参数的最大项数，当参数类型为Array时生效。
    *
    * @return int|null
    */
    public function getMaxItems()
    {
        return $this->container['maxItems'];
    }

    /**
    * Sets maxItems
    *
    * @param int|null $maxItems 策略参数的最大项数，当参数类型为Array时生效。
    *
    * @return $this
    */
    public function setMaxItems($maxItems)
    {
        $this->container['maxItems'] = $maxItems;
        return $this;
    }

    /**
    * Gets minLength
    *  策略参数的最小字符串长度或每项的最小字符串长度，当参数类型为String或Array时生效。
    *
    * @return int|null
    */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
    * Sets minLength
    *
    * @param int|null $minLength 策略参数的最小字符串长度或每项的最小字符串长度，当参数类型为String或Array时生效。
    *
    * @return $this
    */
    public function setMinLength($minLength)
    {
        $this->container['minLength'] = $minLength;
        return $this;
    }

    /**
    * Gets maxLength
    *  策略参数的最大字符串长度或每项的最大字符串长度，当参数类型为String或Array时生效。
    *
    * @return int|null
    */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
    * Sets maxLength
    *
    * @param int|null $maxLength 策略参数的最大字符串长度或每项的最大字符串长度，当参数类型为String或Array时生效。
    *
    * @return $this
    */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;
        return $this;
    }

    /**
    * Gets pattern
    *  策略参数的字符串正则要求或每项的字符串正则要求，当参数类型为String或Array时生效。
    *
    * @return string|null
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string|null $pattern 策略参数的字符串正则要求或每项的字符串正则要求，当参数类型为String或Array时生效。
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets type
    *  策略参数类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 策略参数类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

