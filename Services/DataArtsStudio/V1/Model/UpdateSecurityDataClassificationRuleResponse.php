<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityDataClassificationRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityDataClassificationRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uuid  规则ID
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevel  密级
    * secrecyLevelNum  密级层级
    * name  规则名称
    * guid  guid
    * enable  规则是否开启
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * projectId  项目ID
    * description  规则描述
    * createdBy  策略创建人
    * createdAt  策略创建时间
    * updatedBy  策略更新人
    * updatedAt  策略更新时间
    * builtinRuleId  内置规则ID
    * categoryId  分类ID
    * instanceId  实例ID
    * matchType  匹配类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uuid' => 'string',
            'ruleType' => 'string',
            'secrecyLevel' => 'string',
            'secrecyLevelNum' => 'int',
            'name' => 'string',
            'guid' => 'string',
            'enable' => 'bool',
            'method' => 'string',
            'contentExpression' => 'string',
            'columnExpression' => 'string',
            'commitExpression' => 'string',
            'projectId' => 'string',
            'description' => 'string',
            'createdBy' => 'string',
            'createdAt' => 'int',
            'updatedBy' => 'string',
            'updatedAt' => 'int',
            'builtinRuleId' => 'string',
            'categoryId' => 'string',
            'instanceId' => 'string',
            'matchType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uuid  规则ID
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevel  密级
    * secrecyLevelNum  密级层级
    * name  规则名称
    * guid  guid
    * enable  规则是否开启
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * projectId  项目ID
    * description  规则描述
    * createdBy  策略创建人
    * createdAt  策略创建时间
    * updatedBy  策略更新人
    * updatedAt  策略更新时间
    * builtinRuleId  内置规则ID
    * categoryId  分类ID
    * instanceId  实例ID
    * matchType  匹配类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uuid' => null,
        'ruleType' => null,
        'secrecyLevel' => null,
        'secrecyLevelNum' => 'int64',
        'name' => null,
        'guid' => null,
        'enable' => null,
        'method' => null,
        'contentExpression' => null,
        'columnExpression' => null,
        'commitExpression' => null,
        'projectId' => null,
        'description' => null,
        'createdBy' => null,
        'createdAt' => 'int64',
        'updatedBy' => null,
        'updatedAt' => 'int64',
        'builtinRuleId' => null,
        'categoryId' => null,
        'instanceId' => null,
        'matchType' => null
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
    * uuid  规则ID
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevel  密级
    * secrecyLevelNum  密级层级
    * name  规则名称
    * guid  guid
    * enable  规则是否开启
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * projectId  项目ID
    * description  规则描述
    * createdBy  策略创建人
    * createdAt  策略创建时间
    * updatedBy  策略更新人
    * updatedAt  策略更新时间
    * builtinRuleId  内置规则ID
    * categoryId  分类ID
    * instanceId  实例ID
    * matchType  匹配类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uuid' => 'uuid',
            'ruleType' => 'rule_type',
            'secrecyLevel' => 'secrecy_level',
            'secrecyLevelNum' => 'secrecy_level_num',
            'name' => 'name',
            'guid' => 'guid',
            'enable' => 'enable',
            'method' => 'method',
            'contentExpression' => 'content_expression',
            'columnExpression' => 'column_expression',
            'commitExpression' => 'commit_expression',
            'projectId' => 'project_id',
            'description' => 'description',
            'createdBy' => 'created_by',
            'createdAt' => 'created_at',
            'updatedBy' => 'updated_by',
            'updatedAt' => 'updated_at',
            'builtinRuleId' => 'builtin_rule_id',
            'categoryId' => 'category_id',
            'instanceId' => 'instance_id',
            'matchType' => 'match_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uuid  规则ID
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevel  密级
    * secrecyLevelNum  密级层级
    * name  规则名称
    * guid  guid
    * enable  规则是否开启
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * projectId  项目ID
    * description  规则描述
    * createdBy  策略创建人
    * createdAt  策略创建时间
    * updatedBy  策略更新人
    * updatedAt  策略更新时间
    * builtinRuleId  内置规则ID
    * categoryId  分类ID
    * instanceId  实例ID
    * matchType  匹配类型
    *
    * @var string[]
    */
    protected static $setters = [
            'uuid' => 'setUuid',
            'ruleType' => 'setRuleType',
            'secrecyLevel' => 'setSecrecyLevel',
            'secrecyLevelNum' => 'setSecrecyLevelNum',
            'name' => 'setName',
            'guid' => 'setGuid',
            'enable' => 'setEnable',
            'method' => 'setMethod',
            'contentExpression' => 'setContentExpression',
            'columnExpression' => 'setColumnExpression',
            'commitExpression' => 'setCommitExpression',
            'projectId' => 'setProjectId',
            'description' => 'setDescription',
            'createdBy' => 'setCreatedBy',
            'createdAt' => 'setCreatedAt',
            'updatedBy' => 'setUpdatedBy',
            'updatedAt' => 'setUpdatedAt',
            'builtinRuleId' => 'setBuiltinRuleId',
            'categoryId' => 'setCategoryId',
            'instanceId' => 'setInstanceId',
            'matchType' => 'setMatchType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uuid  规则ID
    * ruleType  规则类型, CUSTOM, BUILTIN
    * secrecyLevel  密级
    * secrecyLevelNum  密级层级
    * name  规则名称
    * guid  guid
    * enable  规则是否开启
    * method  规则方式, REGULAR, NONE, DEFAULT
    * contentExpression  内容表达式
    * columnExpression  列表达式
    * commitExpression  备注表达式
    * projectId  项目ID
    * description  规则描述
    * createdBy  策略创建人
    * createdAt  策略创建时间
    * updatedBy  策略更新人
    * updatedAt  策略更新时间
    * builtinRuleId  内置规则ID
    * categoryId  分类ID
    * instanceId  实例ID
    * matchType  匹配类型
    *
    * @var string[]
    */
    protected static $getters = [
            'uuid' => 'getUuid',
            'ruleType' => 'getRuleType',
            'secrecyLevel' => 'getSecrecyLevel',
            'secrecyLevelNum' => 'getSecrecyLevelNum',
            'name' => 'getName',
            'guid' => 'getGuid',
            'enable' => 'getEnable',
            'method' => 'getMethod',
            'contentExpression' => 'getContentExpression',
            'columnExpression' => 'getColumnExpression',
            'commitExpression' => 'getCommitExpression',
            'projectId' => 'getProjectId',
            'description' => 'getDescription',
            'createdBy' => 'getCreatedBy',
            'createdAt' => 'getCreatedAt',
            'updatedBy' => 'getUpdatedBy',
            'updatedAt' => 'getUpdatedAt',
            'builtinRuleId' => 'getBuiltinRuleId',
            'categoryId' => 'getCategoryId',
            'instanceId' => 'getInstanceId',
            'matchType' => 'getMatchType'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['secrecyLevel'] = isset($data['secrecyLevel']) ? $data['secrecyLevel'] : null;
        $this->container['secrecyLevelNum'] = isset($data['secrecyLevelNum']) ? $data['secrecyLevelNum'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['contentExpression'] = isset($data['contentExpression']) ? $data['contentExpression'] : null;
        $this->container['columnExpression'] = isset($data['columnExpression']) ? $data['columnExpression'] : null;
        $this->container['commitExpression'] = isset($data['commitExpression']) ? $data['commitExpression'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['builtinRuleId'] = isset($data['builtinRuleId']) ? $data['builtinRuleId'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 128)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getRuleTypeAllowableValues();
                if (!is_null($this->container['ruleType']) && !in_array($this->container['ruleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['secrecyLevel']) && (mb_strlen($this->container['secrecyLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevel']) && (mb_strlen($this->container['secrecyLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secrecyLevelNum']) && ($this->container['secrecyLevelNum'] > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelNum', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevelNum']) && ($this->container['secrecyLevelNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['guid']) && (mb_strlen($this->container['guid']) > 128)) {
                $invalidProperties[] = "invalid value for 'guid', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['guid']) && (mb_strlen($this->container['guid']) < 1)) {
                $invalidProperties[] = "invalid value for 'guid', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && ($this->container['createdAt'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createdAt', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createdAt']) && ($this->container['createdAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedBy']) && (mb_strlen($this->container['updatedBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'updatedBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updatedBy']) && (mb_strlen($this->container['updatedBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedAt']) && ($this->container['updatedAt'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'updatedAt', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['updatedAt']) && ($this->container['updatedAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) > 128)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) > 128)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['categoryId']) && (mb_strlen($this->container['categoryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'categoryId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['matchType']) && (mb_strlen($this->container['matchType']) > 128)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['matchType']) && (mb_strlen($this->container['matchType']) < 1)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be bigger than or equal to 1.";
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
    * Gets uuid
    *  规则ID
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid 规则ID
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
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
    * Gets secrecyLevel
    *  密级
    *
    * @return string|null
    */
    public function getSecrecyLevel()
    {
        return $this->container['secrecyLevel'];
    }

    /**
    * Sets secrecyLevel
    *
    * @param string|null $secrecyLevel 密级
    *
    * @return $this
    */
    public function setSecrecyLevel($secrecyLevel)
    {
        $this->container['secrecyLevel'] = $secrecyLevel;
        return $this;
    }

    /**
    * Gets secrecyLevelNum
    *  密级层级
    *
    * @return int|null
    */
    public function getSecrecyLevelNum()
    {
        return $this->container['secrecyLevelNum'];
    }

    /**
    * Sets secrecyLevelNum
    *
    * @param int|null $secrecyLevelNum 密级层级
    *
    * @return $this
    */
    public function setSecrecyLevelNum($secrecyLevelNum)
    {
        $this->container['secrecyLevelNum'] = $secrecyLevelNum;
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
    * Gets guid
    *  guid
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets enable
    *  规则是否开启
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 规则是否开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
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
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    * Gets createdBy
    *  策略创建人
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 策略创建人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdAt
    *  策略创建时间
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt 策略创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedBy
    *  策略更新人
    *
    * @return string|null
    */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
    * Sets updatedBy
    *
    * @param string|null $updatedBy 策略更新人
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
        return $this;
    }

    /**
    * Gets updatedAt
    *  策略更新时间
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt 策略更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets builtinRuleId
    *  内置规则ID
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
    * @param string|null $builtinRuleId 内置规则ID
    *
    * @return $this
    */
    public function setBuiltinRuleId($builtinRuleId)
    {
        $this->container['builtinRuleId'] = $builtinRuleId;
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
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets matchType
    *  匹配类型
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
    * @param string|null $matchType 匹配类型
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
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

