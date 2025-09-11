<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceNameItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceNameItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceName  **参数解释** 资源名称条件值 **约束限制** 不涉及 **取值范围** 长度[0,128]个字符 **默认取值** 不涉及
    * operator  **参数解释** 实例操作符，含义是真实资源的名称与资源名称条件值的运算关系。 **约束限制** 不涉及 **取值范围** - include: 表示包含 - prefix: 表示前缀 - suffix: 表示后缀 - notInclude: 表示不包含 - equal: 表示相等 - all: 表示全部 **默认取值** 不涉及
    * resourceNameIsIgnoreCase  **参数解释** 资源名称忽略大小写 **约束限制** 不涉及 **取值范围** - true: 名称忽略大小写 - false: 名称不忽略大小写 **默认取值** false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceName' => 'string',
            'operator' => 'string',
            'resourceNameIsIgnoreCase' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceName  **参数解释** 资源名称条件值 **约束限制** 不涉及 **取值范围** 长度[0,128]个字符 **默认取值** 不涉及
    * operator  **参数解释** 实例操作符，含义是真实资源的名称与资源名称条件值的运算关系。 **约束限制** 不涉及 **取值范围** - include: 表示包含 - prefix: 表示前缀 - suffix: 表示后缀 - notInclude: 表示不包含 - equal: 表示相等 - all: 表示全部 **默认取值** 不涉及
    * resourceNameIsIgnoreCase  **参数解释** 资源名称忽略大小写 **约束限制** 不涉及 **取值范围** - true: 名称忽略大小写 - false: 名称不忽略大小写 **默认取值** false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceName' => null,
        'operator' => null,
        'resourceNameIsIgnoreCase' => null
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
    * resourceName  **参数解释** 资源名称条件值 **约束限制** 不涉及 **取值范围** 长度[0,128]个字符 **默认取值** 不涉及
    * operator  **参数解释** 实例操作符，含义是真实资源的名称与资源名称条件值的运算关系。 **约束限制** 不涉及 **取值范围** - include: 表示包含 - prefix: 表示前缀 - suffix: 表示后缀 - notInclude: 表示不包含 - equal: 表示相等 - all: 表示全部 **默认取值** 不涉及
    * resourceNameIsIgnoreCase  **参数解释** 资源名称忽略大小写 **约束限制** 不涉及 **取值范围** - true: 名称忽略大小写 - false: 名称不忽略大小写 **默认取值** false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceName' => 'resource_name',
            'operator' => 'operator',
            'resourceNameIsIgnoreCase' => 'resource_name_is_ignore_case'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceName  **参数解释** 资源名称条件值 **约束限制** 不涉及 **取值范围** 长度[0,128]个字符 **默认取值** 不涉及
    * operator  **参数解释** 实例操作符，含义是真实资源的名称与资源名称条件值的运算关系。 **约束限制** 不涉及 **取值范围** - include: 表示包含 - prefix: 表示前缀 - suffix: 表示后缀 - notInclude: 表示不包含 - equal: 表示相等 - all: 表示全部 **默认取值** 不涉及
    * resourceNameIsIgnoreCase  **参数解释** 资源名称忽略大小写 **约束限制** 不涉及 **取值范围** - true: 名称忽略大小写 - false: 名称不忽略大小写 **默认取值** false
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceName' => 'setResourceName',
            'operator' => 'setOperator',
            'resourceNameIsIgnoreCase' => 'setResourceNameIsIgnoreCase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceName  **参数解释** 资源名称条件值 **约束限制** 不涉及 **取值范围** 长度[0,128]个字符 **默认取值** 不涉及
    * operator  **参数解释** 实例操作符，含义是真实资源的名称与资源名称条件值的运算关系。 **约束限制** 不涉及 **取值范围** - include: 表示包含 - prefix: 表示前缀 - suffix: 表示后缀 - notInclude: 表示不包含 - equal: 表示相等 - all: 表示全部 **默认取值** 不涉及
    * resourceNameIsIgnoreCase  **参数解释** 资源名称忽略大小写 **约束限制** 不涉及 **取值范围** - true: 名称忽略大小写 - false: 名称不忽略大小写 **默认取值** false
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceName' => 'getResourceName',
            'operator' => 'getOperator',
            'resourceNameIsIgnoreCase' => 'getResourceNameIsIgnoreCase'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['resourceNameIsIgnoreCase'] = isset($data['resourceNameIsIgnoreCase']) ? $data['resourceNameIsIgnoreCase'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
            $allowedValues = $this->getOperatorAllowableValues();
                if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
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
    * Gets resourceName
    *  **参数解释** 资源名称条件值 **约束限制** 不涉及 **取值范围** 长度[0,128]个字符 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName **参数解释** 资源名称条件值 **约束限制** 不涉及 **取值范围** 长度[0,128]个字符 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释** 实例操作符，含义是真实资源的名称与资源名称条件值的运算关系。 **约束限制** 不涉及 **取值范围** - include: 表示包含 - prefix: 表示前缀 - suffix: 表示后缀 - notInclude: 表示不包含 - equal: 表示相等 - all: 表示全部 **默认取值** 不涉及
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
    * @param string $operator **参数解释** 实例操作符，含义是真实资源的名称与资源名称条件值的运算关系。 **约束限制** 不涉及 **取值范围** - include: 表示包含 - prefix: 表示前缀 - suffix: 表示后缀 - notInclude: 表示不包含 - equal: 表示相等 - all: 表示全部 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets resourceNameIsIgnoreCase
    *  **参数解释** 资源名称忽略大小写 **约束限制** 不涉及 **取值范围** - true: 名称忽略大小写 - false: 名称不忽略大小写 **默认取值** false
    *
    * @return bool|null
    */
    public function getResourceNameIsIgnoreCase()
    {
        return $this->container['resourceNameIsIgnoreCase'];
    }

    /**
    * Sets resourceNameIsIgnoreCase
    *
    * @param bool|null $resourceNameIsIgnoreCase **参数解释** 资源名称忽略大小写 **约束限制** 不涉及 **取值范围** - true: 名称忽略大小写 - false: 名称不忽略大小写 **默认取值** false
    *
    * @return $this
    */
    public function setResourceNameIsIgnoreCase($resourceNameIsIgnoreCase)
    {
        $this->container['resourceNameIsIgnoreCase'] = $resourceNameIsIgnoreCase;
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

