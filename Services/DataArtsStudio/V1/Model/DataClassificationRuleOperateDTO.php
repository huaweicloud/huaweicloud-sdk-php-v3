<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataClassificationRuleOperateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataClassificationRuleOperateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevelId  密级ID
    * name  规则名称
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * builtinRuleId  内置规则id
    * description  规则描述
    * categoryId  分类ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleType' => 'string',
            'secrecyLevelId' => 'string',
            'name' => 'string',
            'method' => 'string',
            'contentExpression' => 'string',
            'columnExpression' => 'string',
            'commitExpression' => 'string',
            'builtinRuleId' => 'string',
            'description' => 'string',
            'categoryId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevelId  密级ID
    * name  规则名称
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * builtinRuleId  内置规则id
    * description  规则描述
    * categoryId  分类ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleType' => null,
        'secrecyLevelId' => null,
        'name' => null,
        'method' => null,
        'contentExpression' => null,
        'columnExpression' => null,
        'commitExpression' => null,
        'builtinRuleId' => null,
        'description' => null,
        'categoryId' => null
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
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevelId  密级ID
    * name  规则名称
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * builtinRuleId  内置规则id
    * description  规则描述
    * categoryId  分类ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleType' => 'rule_type',
            'secrecyLevelId' => 'secrecy_level_id',
            'name' => 'name',
            'method' => 'method',
            'contentExpression' => 'content_expression',
            'columnExpression' => 'column_expression',
            'commitExpression' => 'commit_expression',
            'builtinRuleId' => 'builtin_rule_id',
            'description' => 'description',
            'categoryId' => 'category_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevelId  密级ID
    * name  规则名称
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * builtinRuleId  内置规则id
    * description  规则描述
    * categoryId  分类ID
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleType' => 'setRuleType',
            'secrecyLevelId' => 'setSecrecyLevelId',
            'name' => 'setName',
            'method' => 'setMethod',
            'contentExpression' => 'setContentExpression',
            'columnExpression' => 'setColumnExpression',
            'commitExpression' => 'setCommitExpression',
            'builtinRuleId' => 'setBuiltinRuleId',
            'description' => 'setDescription',
            'categoryId' => 'setCategoryId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevelId  密级ID
    * name  规则名称
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * builtinRuleId  内置规则id
    * description  规则描述
    * categoryId  分类ID
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleType' => 'getRuleType',
            'secrecyLevelId' => 'getSecrecyLevelId',
            'name' => 'getName',
            'method' => 'getMethod',
            'contentExpression' => 'getContentExpression',
            'columnExpression' => 'getColumnExpression',
            'commitExpression' => 'getCommitExpression',
            'builtinRuleId' => 'getBuiltinRuleId',
            'description' => 'getDescription',
            'categoryId' => 'getCategoryId'
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
    const RULE_TYPE_CUSTOM = 'CUSTOM';
    const RULE_TYPE_BUILTIN = 'BUILTIN';
    const METHOD_REGULAR = 'REGULAR';
    const METHOD_NONE = 'NONE';
    const METHOD__DEFAULT = 'DEFAULT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuleTypeAllowableValues()
    {
        return [
            self::RULE_TYPE_CUSTOM,
            self::RULE_TYPE_BUILTIN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMethodAllowableValues()
    {
        return [
            self::METHOD_REGULAR,
            self::METHOD_NONE,
            self::METHOD__DEFAULT,
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
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['secrecyLevelId'] = isset($data['secrecyLevelId']) ? $data['secrecyLevelId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['contentExpression'] = isset($data['contentExpression']) ? $data['contentExpression'] : null;
        $this->container['columnExpression'] = isset($data['columnExpression']) ? $data['columnExpression'] : null;
        $this->container['commitExpression'] = isset($data['commitExpression']) ? $data['commitExpression'] : null;
        $this->container['builtinRuleId'] = isset($data['builtinRuleId']) ? $data['builtinRuleId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRuleTypeAllowableValues();
                if (!is_null($this->container['ruleType']) && !in_array($this->container['ruleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['secrecyLevelId']) && (mb_strlen($this->container['secrecyLevelId']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevelId']) && (mb_strlen($this->container['secrecyLevelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getMethodAllowableValues();
                if (!is_null($this->container['method']) && !in_array($this->container['method'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'method', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['contentExpression']) && (mb_strlen($this->container['contentExpression']) > 4096)) {
                $invalidProperties[] = "invalid value for 'contentExpression', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['contentExpression']) && (mb_strlen($this->container['contentExpression']) < 1)) {
                $invalidProperties[] = "invalid value for 'contentExpression', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnExpression']) && (mb_strlen($this->container['columnExpression']) > 4096)) {
                $invalidProperties[] = "invalid value for 'columnExpression', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['columnExpression']) && (mb_strlen($this->container['columnExpression']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnExpression', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitExpression']) && (mb_strlen($this->container['commitExpression']) > 4096)) {
                $invalidProperties[] = "invalid value for 'commitExpression', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['commitExpression']) && (mb_strlen($this->container['commitExpression']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitExpression', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) > 128)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) > 128)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be bigger than or equal to 1.";
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
    * Gets ruleType
    *  规则类型, CUSTOM, BUILTIN
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 规则类型, CUSTOM, BUILTIN
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets secrecyLevelId
    *  密级ID
    *
    * @return string|null
    */
    public function getSecrecyLevelId()
    {
        return $this->container['secrecyLevelId'];
    }

    /**
    * Sets secrecyLevelId
    *
    * @param string|null $secrecyLevelId 密级ID
    *
    * @return $this
    */
    public function setSecrecyLevelId($secrecyLevelId)
    {
        $this->container['secrecyLevelId'] = $secrecyLevelId;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
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
    * @param string|null $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets method
    *  规则方式, REGULAR, NONE, DEFAULT
    *
    * @return string|null
    */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
    * Sets method
    *
    * @param string|null $method 规则方式, REGULAR, NONE, DEFAULT
    *
    * @return $this
    */
    public function setMethod($method)
    {
        $this->container['method'] = $method;
        return $this;
    }

    /**
    * Gets contentExpression
    *  内容表达式
    *
    * @return string|null
    */
    public function getContentExpression()
    {
        return $this->container['contentExpression'];
    }

    /**
    * Sets contentExpression
    *
    * @param string|null $contentExpression 内容表达式
    *
    * @return $this
    */
    public function setContentExpression($contentExpression)
    {
        $this->container['contentExpression'] = $contentExpression;
        return $this;
    }

    /**
    * Gets columnExpression
    *  列表达式
    *
    * @return string|null
    */
    public function getColumnExpression()
    {
        return $this->container['columnExpression'];
    }

    /**
    * Sets columnExpression
    *
    * @param string|null $columnExpression 列表达式
    *
    * @return $this
    */
    public function setColumnExpression($columnExpression)
    {
        $this->container['columnExpression'] = $columnExpression;
        return $this;
    }

    /**
    * Gets commitExpression
    *  备注表达式
    *
    * @return string|null
    */
    public function getCommitExpression()
    {
        return $this->container['commitExpression'];
    }

    /**
    * Sets commitExpression
    *
    * @param string|null $commitExpression 备注表达式
    *
    * @return $this
    */
    public function setCommitExpression($commitExpression)
    {
        $this->container['commitExpression'] = $commitExpression;
        return $this;
    }

    /**
    * Gets builtinRuleId
    *  内置规则id
    *
    * @return string|null
    */
    public function getBuiltinRuleId()
    {
        return $this->container['builtinRuleId'];
    }

    /**
    * Sets builtinRuleId
    *
    * @param string|null $builtinRuleId 内置规则id
    *
    * @return $this
    */
    public function setBuiltinRuleId($builtinRuleId)
    {
        $this->container['builtinRuleId'] = $builtinRuleId;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
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
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets categoryId
    *  分类ID
    *
    * @return string|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param string|null $categoryId 分类ID
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
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

