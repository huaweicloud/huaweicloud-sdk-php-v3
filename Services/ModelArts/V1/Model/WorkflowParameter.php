<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Workflow工作流配置参数的名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * type  参数的类型，枚举值如下: - str：字符串 - int：整型 - bool：布尔类型 - float：浮点型
    * description  Workflow工作流配置参数的描述。
    * example  Workflow工作流配置参数的样例。
    * delay  是否为延迟输入的参数，默认为否。
    * default  配置参数的默认值。
    * value  参数值。
    * enum  Workflow工作流配置参数的枚举项。
    * usedSteps  使用这个参数的工作流节点。
    * format  数据格式。
    * constraint  限制条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'description' => 'string',
            'example' => 'object',
            'delay' => 'bool',
            'default' => 'object',
            'value' => 'object',
            'enum' => 'object[]',
            'usedSteps' => 'string[]',
            'format' => 'string',
            'constraint' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Workflow工作流配置参数的名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * type  参数的类型，枚举值如下: - str：字符串 - int：整型 - bool：布尔类型 - float：浮点型
    * description  Workflow工作流配置参数的描述。
    * example  Workflow工作流配置参数的样例。
    * delay  是否为延迟输入的参数，默认为否。
    * default  配置参数的默认值。
    * value  参数值。
    * enum  Workflow工作流配置参数的枚举项。
    * usedSteps  使用这个参数的工作流节点。
    * format  数据格式。
    * constraint  限制条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'description' => null,
        'example' => null,
        'delay' => null,
        'default' => null,
        'value' => null,
        'enum' => null,
        'usedSteps' => null,
        'format' => null,
        'constraint' => null
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
    * name  Workflow工作流配置参数的名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * type  参数的类型，枚举值如下: - str：字符串 - int：整型 - bool：布尔类型 - float：浮点型
    * description  Workflow工作流配置参数的描述。
    * example  Workflow工作流配置参数的样例。
    * delay  是否为延迟输入的参数，默认为否。
    * default  配置参数的默认值。
    * value  参数值。
    * enum  Workflow工作流配置参数的枚举项。
    * usedSteps  使用这个参数的工作流节点。
    * format  数据格式。
    * constraint  限制条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'example' => 'example',
            'delay' => 'delay',
            'default' => 'default',
            'value' => 'value',
            'enum' => 'enum',
            'usedSteps' => 'used_steps',
            'format' => 'format',
            'constraint' => 'constraint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Workflow工作流配置参数的名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * type  参数的类型，枚举值如下: - str：字符串 - int：整型 - bool：布尔类型 - float：浮点型
    * description  Workflow工作流配置参数的描述。
    * example  Workflow工作流配置参数的样例。
    * delay  是否为延迟输入的参数，默认为否。
    * default  配置参数的默认值。
    * value  参数值。
    * enum  Workflow工作流配置参数的枚举项。
    * usedSteps  使用这个参数的工作流节点。
    * format  数据格式。
    * constraint  限制条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'example' => 'setExample',
            'delay' => 'setDelay',
            'default' => 'setDefault',
            'value' => 'setValue',
            'enum' => 'setEnum',
            'usedSteps' => 'setUsedSteps',
            'format' => 'setFormat',
            'constraint' => 'setConstraint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Workflow工作流配置参数的名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * type  参数的类型，枚举值如下: - str：字符串 - int：整型 - bool：布尔类型 - float：浮点型
    * description  Workflow工作流配置参数的描述。
    * example  Workflow工作流配置参数的样例。
    * delay  是否为延迟输入的参数，默认为否。
    * default  配置参数的默认值。
    * value  参数值。
    * enum  Workflow工作流配置参数的枚举项。
    * usedSteps  使用这个参数的工作流节点。
    * format  数据格式。
    * constraint  限制条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'example' => 'getExample',
            'delay' => 'getDelay',
            'default' => 'getDefault',
            'value' => 'getValue',
            'enum' => 'getEnum',
            'usedSteps' => 'getUsedSteps',
            'format' => 'getFormat',
            'constraint' => 'getConstraint'
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
    const TYPE_STR = 'str：字符串类型';
    const TYPE_INT = 'int：整型';
    const TYPE_BOOL = 'bool：布尔类型';
    const TYPE_FLOAT = 'float：浮点型';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STR,
            self::TYPE_INT,
            self::TYPE_BOOL,
            self::TYPE_FLOAT,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['example'] = isset($data['example']) ? $data['example'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['enum'] = isset($data['enum']) ? $data['enum'] : null;
        $this->container['usedSteps'] = isset($data['usedSteps']) ? $data['usedSteps'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['constraint'] = isset($data['constraint']) ? $data['constraint'] : null;
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
    *  Workflow工作流配置参数的名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
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
    * @param string|null $name Workflow工作流配置参数的名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
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
    *  参数的类型，枚举值如下: - str：字符串 - int：整型 - bool：布尔类型 - float：浮点型
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
    * @param string|null $type 参数的类型，枚举值如下: - str：字符串 - int：整型 - bool：布尔类型 - float：浮点型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  Workflow工作流配置参数的描述。
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
    * @param string|null $description Workflow工作流配置参数的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets example
    *  Workflow工作流配置参数的样例。
    *
    * @return object|null
    */
    public function getExample()
    {
        return $this->container['example'];
    }

    /**
    * Sets example
    *
    * @param object|null $example Workflow工作流配置参数的样例。
    *
    * @return $this
    */
    public function setExample($example)
    {
        $this->container['example'] = $example;
        return $this;
    }

    /**
    * Gets delay
    *  是否为延迟输入的参数，默认为否。
    *
    * @return bool|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param bool|null $delay 是否为延迟输入的参数，默认为否。
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets default
    *  配置参数的默认值。
    *
    * @return object|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param object|null $default 配置参数的默认值。
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets value
    *  参数值。
    *
    * @return object|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param object|null $value 参数值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets enum
    *  Workflow工作流配置参数的枚举项。
    *
    * @return object[]|null
    */
    public function getEnum()
    {
        return $this->container['enum'];
    }

    /**
    * Sets enum
    *
    * @param object[]|null $enum Workflow工作流配置参数的枚举项。
    *
    * @return $this
    */
    public function setEnum($enum)
    {
        $this->container['enum'] = $enum;
        return $this;
    }

    /**
    * Gets usedSteps
    *  使用这个参数的工作流节点。
    *
    * @return string[]|null
    */
    public function getUsedSteps()
    {
        return $this->container['usedSteps'];
    }

    /**
    * Sets usedSteps
    *
    * @param string[]|null $usedSteps 使用这个参数的工作流节点。
    *
    * @return $this
    */
    public function setUsedSteps($usedSteps)
    {
        $this->container['usedSteps'] = $usedSteps;
        return $this;
    }

    /**
    * Gets format
    *  数据格式。
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 数据格式。
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets constraint
    *  限制条件。
    *
    * @return map[string,object]|null
    */
    public function getConstraint()
    {
        return $this->container['constraint'];
    }

    /**
    * Sets constraint
    *
    * @param map[string,object]|null $constraint 限制条件。
    *
    * @return $this
    */
    public function setConstraint($constraint)
    {
        $this->container['constraint'] = $constraint;
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

