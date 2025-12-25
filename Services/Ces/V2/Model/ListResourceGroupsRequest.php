<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceGroupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceGroupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 归属企业项目ID。 **约束限制**: 不涉及。 **取值范围**: 只能包含小写字母、数字、“-”、“_”，长度为36个字符。或者为0（代表默认企业项目ID），或者为all_granted_eps（代表所有企业项目ID）。 **默认取值**: 不涉及。
    * groupName  **参数解释** 资源分组名称，支持模糊查询。 **约束限制** 不涉及。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。 **默认取值** 不涉及。
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及。 **取值范围** 以\"rg\"开头，后跟22位由字母或数字组成的字符串。 **默认取值** 不涉及。
    * offset  **参数解释** 分页起始值。 **约束限制** 不涉及。 **取值范围** 在[0,10000]区间内。 **默认取值** 0
    * limit  **参数解释** 分页查询时每页的条目数。 **约束限制** 不涉及。 **取值范围** 在[1,100]区间内。 **默认取值** 100
    * type  **参数解释** 资源分组添加资源方式，不传代表查询所有资源分组类型。 **约束限制** 不涉及。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称 **默认取值** 不涉及。
    * status  **参数解释** 资源分组健康状态。 **约束限制** 不涉及。 **取值范围** - health: 表示健康 - unhealthy: 表示不健康 - no_alarm_rule: 表示未配置告警规则 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'groupName' => 'string',
            'groupId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'type' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 归属企业项目ID。 **约束限制**: 不涉及。 **取值范围**: 只能包含小写字母、数字、“-”、“_”，长度为36个字符。或者为0（代表默认企业项目ID），或者为all_granted_eps（代表所有企业项目ID）。 **默认取值**: 不涉及。
    * groupName  **参数解释** 资源分组名称，支持模糊查询。 **约束限制** 不涉及。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。 **默认取值** 不涉及。
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及。 **取值范围** 以\"rg\"开头，后跟22位由字母或数字组成的字符串。 **默认取值** 不涉及。
    * offset  **参数解释** 分页起始值。 **约束限制** 不涉及。 **取值范围** 在[0,10000]区间内。 **默认取值** 0
    * limit  **参数解释** 分页查询时每页的条目数。 **约束限制** 不涉及。 **取值范围** 在[1,100]区间内。 **默认取值** 100
    * type  **参数解释** 资源分组添加资源方式，不传代表查询所有资源分组类型。 **约束限制** 不涉及。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称 **默认取值** 不涉及。
    * status  **参数解释** 资源分组健康状态。 **约束限制** 不涉及。 **取值范围** - health: 表示健康 - unhealthy: 表示不健康 - no_alarm_rule: 表示未配置告警规则 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'groupName' => null,
        'groupId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'type' => null,
        'status' => null
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
    * enterpriseProjectId  **参数解释**: 归属企业项目ID。 **约束限制**: 不涉及。 **取值范围**: 只能包含小写字母、数字、“-”、“_”，长度为36个字符。或者为0（代表默认企业项目ID），或者为all_granted_eps（代表所有企业项目ID）。 **默认取值**: 不涉及。
    * groupName  **参数解释** 资源分组名称，支持模糊查询。 **约束限制** 不涉及。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。 **默认取值** 不涉及。
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及。 **取值范围** 以\"rg\"开头，后跟22位由字母或数字组成的字符串。 **默认取值** 不涉及。
    * offset  **参数解释** 分页起始值。 **约束限制** 不涉及。 **取值范围** 在[0,10000]区间内。 **默认取值** 0
    * limit  **参数解释** 分页查询时每页的条目数。 **约束限制** 不涉及。 **取值范围** 在[1,100]区间内。 **默认取值** 100
    * type  **参数解释** 资源分组添加资源方式，不传代表查询所有资源分组类型。 **约束限制** 不涉及。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称 **默认取值** 不涉及。
    * status  **参数解释** 资源分组健康状态。 **约束限制** 不涉及。 **取值范围** - health: 表示健康 - unhealthy: 表示不健康 - no_alarm_rule: 表示未配置告警规则 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'groupName' => 'group_name',
            'groupId' => 'group_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'type' => 'type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 归属企业项目ID。 **约束限制**: 不涉及。 **取值范围**: 只能包含小写字母、数字、“-”、“_”，长度为36个字符。或者为0（代表默认企业项目ID），或者为all_granted_eps（代表所有企业项目ID）。 **默认取值**: 不涉及。
    * groupName  **参数解释** 资源分组名称，支持模糊查询。 **约束限制** 不涉及。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。 **默认取值** 不涉及。
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及。 **取值范围** 以\"rg\"开头，后跟22位由字母或数字组成的字符串。 **默认取值** 不涉及。
    * offset  **参数解释** 分页起始值。 **约束限制** 不涉及。 **取值范围** 在[0,10000]区间内。 **默认取值** 0
    * limit  **参数解释** 分页查询时每页的条目数。 **约束限制** 不涉及。 **取值范围** 在[1,100]区间内。 **默认取值** 100
    * type  **参数解释** 资源分组添加资源方式，不传代表查询所有资源分组类型。 **约束限制** 不涉及。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称 **默认取值** 不涉及。
    * status  **参数解释** 资源分组健康状态。 **约束限制** 不涉及。 **取值范围** - health: 表示健康 - unhealthy: 表示不健康 - no_alarm_rule: 表示未配置告警规则 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'groupName' => 'setGroupName',
            'groupId' => 'setGroupId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'type' => 'setType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 归属企业项目ID。 **约束限制**: 不涉及。 **取值范围**: 只能包含小写字母、数字、“-”、“_”，长度为36个字符。或者为0（代表默认企业项目ID），或者为all_granted_eps（代表所有企业项目ID）。 **默认取值**: 不涉及。
    * groupName  **参数解释** 资源分组名称，支持模糊查询。 **约束限制** 不涉及。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。 **默认取值** 不涉及。
    * groupId  **参数解释** 资源分组ID。 **约束限制** 不涉及。 **取值范围** 以\"rg\"开头，后跟22位由字母或数字组成的字符串。 **默认取值** 不涉及。
    * offset  **参数解释** 分页起始值。 **约束限制** 不涉及。 **取值范围** 在[0,10000]区间内。 **默认取值** 0
    * limit  **参数解释** 分页查询时每页的条目数。 **约束限制** 不涉及。 **取值范围** 在[1,100]区间内。 **默认取值** 100
    * type  **参数解释** 资源分组添加资源方式，不传代表查询所有资源分组类型。 **约束限制** 不涉及。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称 **默认取值** 不涉及。
    * status  **参数解释** 资源分组健康状态。 **约束限制** 不涉及。 **取值范围** - health: 表示健康 - unhealthy: 表示不健康 - no_alarm_rule: 表示未配置告警规则 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'groupName' => 'getGroupName',
            'groupId' => 'getGroupId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'type' => 'getType',
            'status' => 'getStatus'
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
    const TYPE_EPS = 'EPS';
    const TYPE_TAG = 'TAG';
    const TYPE_MANUAL = 'Manual';
    const TYPE_COMB = 'COMB';
    const TYPE_NAME = 'NAME';
    const STATUS_HEALTH = 'health';
    const STATUS_UNHEALTHY = 'unhealthy';
    const STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EPS,
            self::TYPE_TAG,
            self::TYPE_MANUAL,
            self::TYPE_COMB,
            self::TYPE_NAME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_HEALTH,
            self::STATUS_UNHEALTHY,
            self::STATUS_NO_ALARM_RULE,
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0|all_granted_eps)$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0|all_granted_eps)$/.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^([一-鿿]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^([一-鿿]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 2)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^rg([a-z]|[A-Z]|[0-9]){22}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^rg([a-z]|[A-Z]|[0-9]){22}$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets enterpriseProjectId
    *  **参数解释**: 归属企业项目ID。 **约束限制**: 不涉及。 **取值范围**: 只能包含小写字母、数字、“-”、“_”，长度为36个字符。或者为0（代表默认企业项目ID），或者为all_granted_eps（代表所有企业项目ID）。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 归属企业项目ID。 **约束限制**: 不涉及。 **取值范围**: 只能包含小写字母、数字、“-”、“_”，长度为36个字符。或者为0（代表默认企业项目ID），或者为all_granted_eps（代表所有企业项目ID）。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释** 资源分组名称，支持模糊查询。 **约束限制** 不涉及。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释** 资源分组名称，支持模糊查询。 **约束限制** 不涉及。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释** 资源分组ID。 **约束限制** 不涉及。 **取值范围** 以\"rg\"开头，后跟22位由字母或数字组成的字符串。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释** 资源分组ID。 **约束限制** 不涉及。 **取值范围** 以\"rg\"开头，后跟22位由字母或数字组成的字符串。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释** 分页起始值。 **约束限制** 不涉及。 **取值范围** 在[0,10000]区间内。 **默认取值** 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释** 分页起始值。 **约束限制** 不涉及。 **取值范围** 在[0,10000]区间内。 **默认取值** 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释** 分页查询时每页的条目数。 **约束限制** 不涉及。 **取值范围** 在[1,100]区间内。 **默认取值** 100
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释** 分页查询时每页的条目数。 **约束限制** 不涉及。 **取值范围** 在[1,100]区间内。 **默认取值** 100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释** 资源分组添加资源方式，不传代表查询所有资源分组类型。 **约束限制** 不涉及。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称 **默认取值** 不涉及。
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
    * @param string|null $type **参数解释** 资源分组添加资源方式，不传代表查询所有资源分组类型。 **约束限制** 不涉及。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 资源分组健康状态。 **约束限制** 不涉及。 **取值范围** - health: 表示健康 - unhealthy: 表示不健康 - no_alarm_rule: 表示未配置告警规则 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释** 资源分组健康状态。 **约束限制** 不涉及。 **取值范围** - health: 表示健康 - unhealthy: 表示不健康 - no_alarm_rule: 表示未配置告警规则 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

