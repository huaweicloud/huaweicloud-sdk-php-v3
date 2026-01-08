<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OneResourceGroupResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OneResourceGroupResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以rg开头，后跟22位由字母或数字组成的字符串。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * updateTime  **参数解释** 资源分组的修改时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 只能包含小写字母、数字或-，长度为36个字符。或者为0，代表默认企业项目ID。
    * type  **参数解释** 资源分组添加资源方式。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称
    * status  **参数解释** 资源分组指标告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * eventStatus  **参数解释** 资源分组事件告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * resourceStatistics  resourceStatistics
    * relatedEpIds  **参数解释** 当资源匹配规则为匹配企业项目时，指定的企业项目列表。
    * associationAlarmTemplates  **参数解释** 关联的告警模板列表。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。 **取值范围** - product: 云产品 - dimension: 子维度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'groupId' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'enterpriseProjectId' => 'string',
            'type' => 'string',
            'status' => 'string',
            'eventStatus' => 'string',
            'resourceStatistics' => '\HuaweiCloud\SDK\Ces\V2\Model\OneResourceGroupRespResourceStatistics',
            'relatedEpIds' => 'string[]',
            'associationAlarmTemplates' => '\HuaweiCloud\SDK\Ces\V2\Model\AssociationAlarmTemplate[]',
            'resourceLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以rg开头，后跟22位由字母或数字组成的字符串。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * updateTime  **参数解释** 资源分组的修改时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 只能包含小写字母、数字或-，长度为36个字符。或者为0，代表默认企业项目ID。
    * type  **参数解释** 资源分组添加资源方式。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称
    * status  **参数解释** 资源分组指标告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * eventStatus  **参数解释** 资源分组事件告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * resourceStatistics  resourceStatistics
    * relatedEpIds  **参数解释** 当资源匹配规则为匹配企业项目时，指定的企业项目列表。
    * associationAlarmTemplates  **参数解释** 关联的告警模板列表。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。 **取值范围** - product: 云产品 - dimension: 子维度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'groupId' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'enterpriseProjectId' => null,
        'type' => null,
        'status' => null,
        'eventStatus' => null,
        'resourceStatistics' => null,
        'relatedEpIds' => null,
        'associationAlarmTemplates' => null,
        'resourceLevel' => null
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
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以rg开头，后跟22位由字母或数字组成的字符串。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * updateTime  **参数解释** 资源分组的修改时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 只能包含小写字母、数字或-，长度为36个字符。或者为0，代表默认企业项目ID。
    * type  **参数解释** 资源分组添加资源方式。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称
    * status  **参数解释** 资源分组指标告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * eventStatus  **参数解释** 资源分组事件告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * resourceStatistics  resourceStatistics
    * relatedEpIds  **参数解释** 当资源匹配规则为匹配企业项目时，指定的企业项目列表。
    * associationAlarmTemplates  **参数解释** 关联的告警模板列表。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。 **取值范围** - product: 云产品 - dimension: 子维度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'groupId' => 'group_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'status' => 'status',
            'eventStatus' => 'event_status',
            'resourceStatistics' => 'resource_statistics',
            'relatedEpIds' => 'related_ep_ids',
            'associationAlarmTemplates' => 'association_alarm_templates',
            'resourceLevel' => 'resource_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以rg开头，后跟22位由字母或数字组成的字符串。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * updateTime  **参数解释** 资源分组的修改时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 只能包含小写字母、数字或-，长度为36个字符。或者为0，代表默认企业项目ID。
    * type  **参数解释** 资源分组添加资源方式。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称
    * status  **参数解释** 资源分组指标告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * eventStatus  **参数解释** 资源分组事件告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * resourceStatistics  resourceStatistics
    * relatedEpIds  **参数解释** 当资源匹配规则为匹配企业项目时，指定的企业项目列表。
    * associationAlarmTemplates  **参数解释** 关联的告警模板列表。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。 **取值范围** - product: 云产品 - dimension: 子维度
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'groupId' => 'setGroupId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'status' => 'setStatus',
            'eventStatus' => 'setEventStatus',
            'resourceStatistics' => 'setResourceStatistics',
            'relatedEpIds' => 'setRelatedEpIds',
            'associationAlarmTemplates' => 'setAssociationAlarmTemplates',
            'resourceLevel' => 'setResourceLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释** 资源分组ID。 **取值范围** 以rg开头，后跟22位由字母或数字组成的字符串。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * updateTime  **参数解释** 资源分组的修改时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 只能包含小写字母、数字或-，长度为36个字符。或者为0，代表默认企业项目ID。
    * type  **参数解释** 资源分组添加资源方式。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称
    * status  **参数解释** 资源分组指标告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * eventStatus  **参数解释** 资源分组事件告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    * resourceStatistics  resourceStatistics
    * relatedEpIds  **参数解释** 当资源匹配规则为匹配企业项目时，指定的企业项目列表。
    * associationAlarmTemplates  **参数解释** 关联的告警模板列表。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。 **取值范围** - product: 云产品 - dimension: 子维度
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'groupId' => 'getGroupId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'status' => 'getStatus',
            'eventStatus' => 'getEventStatus',
            'resourceStatistics' => 'getResourceStatistics',
            'relatedEpIds' => 'getRelatedEpIds',
            'associationAlarmTemplates' => 'getAssociationAlarmTemplates',
            'resourceLevel' => 'getResourceLevel'
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
    const EVENT_STATUS_HEALTH = 'health';
    const EVENT_STATUS_UNHEALTHY = 'unhealthy';
    const EVENT_STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    const RESOURCE_LEVEL_PRODUCT = 'product';
    const RESOURCE_LEVEL_DIMENSION = 'dimension';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventStatusAllowableValues()
    {
        return [
            self::EVENT_STATUS_HEALTH,
            self::EVENT_STATUS_UNHEALTHY,
            self::EVENT_STATUS_NO_ALARM_RULE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceLevelAllowableValues()
    {
        return [
            self::RESOURCE_LEVEL_PRODUCT,
            self::RESOURCE_LEVEL_DIMENSION,
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['eventStatus'] = isset($data['eventStatus']) ? $data['eventStatus'] : null;
        $this->container['resourceStatistics'] = isset($data['resourceStatistics']) ? $data['resourceStatistics'] : null;
        $this->container['relatedEpIds'] = isset($data['relatedEpIds']) ? $data['relatedEpIds'] : null;
        $this->container['associationAlarmTemplates'] = isset($data['associationAlarmTemplates']) ? $data['associationAlarmTemplates'] : null;
        $this->container['resourceLevel'] = isset($data['resourceLevel']) ? $data['resourceLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
            if (!preg_match("/^([一-鿿]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^([一-鿿]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/.";
            }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 24.";
            }
            if ((mb_strlen($this->container['groupId']) < 2)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if (!preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
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

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEventStatusAllowableValues();
                if (!is_null($this->container['eventStatus']) && !in_array($this->container['eventStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getResourceLevelAllowableValues();
                if (!is_null($this->container['resourceLevel']) && !in_array($this->container['resourceLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceLevel', must be one of '%s'",
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
    * Gets groupName
    *  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
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
    *  **参数解释** 资源分组ID。 **取值范围** 以rg开头，后跟22位由字母或数字组成的字符串。
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId **参数解释** 资源分组ID。 **取值范围** 以rg开头，后跟22位由字母或数字组成的字符串。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    *
    * @return \DateTime
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime $createTime **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释** 资源分组的修改时间，UNIX时间戳，单位毫秒；如：1603819753000。
    *
    * @return \DateTime
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime $updateTime **参数解释** 资源分组的修改时间，UNIX时间戳，单位毫秒；如：1603819753000。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 资源分组归属企业项目ID。 **取值范围** 只能包含小写字母、数字或-，长度为36个字符。或者为0，代表默认企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId **参数解释** 资源分组归属企业项目ID。 **取值范围** 只能包含小写字母、数字或-，长度为36个字符。或者为0，代表默认企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释** 资源分组添加资源方式。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称
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
    * @param string $type **参数解释** 资源分组添加资源方式。 **取值范围** - EPS: 表示匹配企业项目 - TAG: 表示匹配标签 - Manual: 表示手动添加 - COMB: 表示组合匹配 - NAME: 表示匹配实例名称
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
    *  **参数解释** 资源分组指标告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
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
    * @param string|null $status **参数解释** 资源分组指标告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets eventStatus
    *  **参数解释** 资源分组事件告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @return string|null
    */
    public function getEventStatus()
    {
        return $this->container['eventStatus'];
    }

    /**
    * Sets eventStatus
    *
    * @param string|null $eventStatus **参数解释** 资源分组事件告警状态。 **取值范围** - health: 表示无告警 - unhealthy: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @return $this
    */
    public function setEventStatus($eventStatus)
    {
        $this->container['eventStatus'] = $eventStatus;
        return $this;
    }

    /**
    * Gets resourceStatistics
    *  resourceStatistics
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\OneResourceGroupRespResourceStatistics|null
    */
    public function getResourceStatistics()
    {
        return $this->container['resourceStatistics'];
    }

    /**
    * Sets resourceStatistics
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\OneResourceGroupRespResourceStatistics|null $resourceStatistics resourceStatistics
    *
    * @return $this
    */
    public function setResourceStatistics($resourceStatistics)
    {
        $this->container['resourceStatistics'] = $resourceStatistics;
        return $this;
    }

    /**
    * Gets relatedEpIds
    *  **参数解释** 当资源匹配规则为匹配企业项目时，指定的企业项目列表。
    *
    * @return string[]|null
    */
    public function getRelatedEpIds()
    {
        return $this->container['relatedEpIds'];
    }

    /**
    * Sets relatedEpIds
    *
    * @param string[]|null $relatedEpIds **参数解释** 当资源匹配规则为匹配企业项目时，指定的企业项目列表。
    *
    * @return $this
    */
    public function setRelatedEpIds($relatedEpIds)
    {
        $this->container['relatedEpIds'] = $relatedEpIds;
        return $this;
    }

    /**
    * Gets associationAlarmTemplates
    *  **参数解释** 关联的告警模板列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AssociationAlarmTemplate[]|null
    */
    public function getAssociationAlarmTemplates()
    {
        return $this->container['associationAlarmTemplates'];
    }

    /**
    * Sets associationAlarmTemplates
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AssociationAlarmTemplate[]|null $associationAlarmTemplates **参数解释** 关联的告警模板列表。
    *
    * @return $this
    */
    public function setAssociationAlarmTemplates($associationAlarmTemplates)
    {
        $this->container['associationAlarmTemplates'] = $associationAlarmTemplates;
        return $this;
    }

    /**
    * Gets resourceLevel
    *  **参数解释** 资源层级，资源生效范围。 **取值范围** - product: 云产品 - dimension: 子维度
    *
    * @return string|null
    */
    public function getResourceLevel()
    {
        return $this->container['resourceLevel'];
    }

    /**
    * Sets resourceLevel
    *
    * @param string|null $resourceLevel **参数解释** 资源层级，资源生效范围。 **取值范围** - product: 云产品 - dimension: 子维度
    *
    * @return $this
    */
    public function setResourceLevel($resourceLevel)
    {
        $this->container['resourceLevel'] = $resourceLevel;
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

