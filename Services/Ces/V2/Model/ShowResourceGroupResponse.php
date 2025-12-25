<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释**： 资源分组ID。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释**： 资源分组的创建时间 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 资源分组的修改时间 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 枚举值。 - EPS: 匹配企业项目 - TAG: 匹配标签 - NAME: 匹配实例名称 - COMB: 组合匹配 - Manual: 手动添加
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    * tags  当资源匹配规则为匹配标签时,所指定的标签规则
    * instances  实例名称匹配参数
    * combRelation  combRelation
    * relatedEpIds  当资源匹配规则为匹配企业项目时，指定的企业项目列表
    * enterpriseProjectIdAndTags  匹配企业项目或匹配标签参数
    * status  **参数解释** 指标告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * eventStatus  **参数解释** 事件告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * resourceStatistics  resourceStatistics
    * resourceLevel  **参数解释** 资源等级。 **取值范围** 枚举值。 - product: 云产品 - dimension: 子维度
    * productNames  **参数解释** 创建资源层级为云产品时的云产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **取值范围** 长度[0,10240]个字符
    * epResourceStatistics  每个企业项目关联的资源状态
    * associationAlarmTemplates  关联的告警模板列表
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
            'associationEpIds' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]',
            'instances' => '\HuaweiCloud\SDK\Ces\V2\Model\Instance[]',
            'combRelation' => '\HuaweiCloud\SDK\Ces\V2\Model\CombRelation',
            'relatedEpIds' => 'string[]',
            'enterpriseProjectIdAndTags' => '\HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]',
            'status' => 'string',
            'eventStatus' => 'string',
            'resourceStatistics' => '\HuaweiCloud\SDK\Ces\V2\Model\GetResourceGroupRespResourceStatistics',
            'resourceLevel' => 'string',
            'productNames' => 'string',
            'epResourceStatistics' => '\HuaweiCloud\SDK\Ces\V2\Model\EpResourceStatistics[]',
            'associationAlarmTemplates' => '\HuaweiCloud\SDK\Ces\V2\Model\AssociationAlarmTemplate[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释**： 资源分组ID。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释**： 资源分组的创建时间 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 资源分组的修改时间 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 枚举值。 - EPS: 匹配企业项目 - TAG: 匹配标签 - NAME: 匹配实例名称 - COMB: 组合匹配 - Manual: 手动添加
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    * tags  当资源匹配规则为匹配标签时,所指定的标签规则
    * instances  实例名称匹配参数
    * combRelation  combRelation
    * relatedEpIds  当资源匹配规则为匹配企业项目时，指定的企业项目列表
    * enterpriseProjectIdAndTags  匹配企业项目或匹配标签参数
    * status  **参数解释** 指标告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * eventStatus  **参数解释** 事件告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * resourceStatistics  resourceStatistics
    * resourceLevel  **参数解释** 资源等级。 **取值范围** 枚举值。 - product: 云产品 - dimension: 子维度
    * productNames  **参数解释** 创建资源层级为云产品时的云产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **取值范围** 长度[0,10240]个字符
    * epResourceStatistics  每个企业项目关联的资源状态
    * associationAlarmTemplates  关联的告警模板列表
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
        'associationEpIds' => null,
        'tags' => null,
        'instances' => null,
        'combRelation' => null,
        'relatedEpIds' => null,
        'enterpriseProjectIdAndTags' => null,
        'status' => null,
        'eventStatus' => null,
        'resourceStatistics' => null,
        'resourceLevel' => null,
        'productNames' => null,
        'epResourceStatistics' => null,
        'associationAlarmTemplates' => null
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
    * groupId  **参数解释**： 资源分组ID。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释**： 资源分组的创建时间 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 资源分组的修改时间 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 枚举值。 - EPS: 匹配企业项目 - TAG: 匹配标签 - NAME: 匹配实例名称 - COMB: 组合匹配 - Manual: 手动添加
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    * tags  当资源匹配规则为匹配标签时,所指定的标签规则
    * instances  实例名称匹配参数
    * combRelation  combRelation
    * relatedEpIds  当资源匹配规则为匹配企业项目时，指定的企业项目列表
    * enterpriseProjectIdAndTags  匹配企业项目或匹配标签参数
    * status  **参数解释** 指标告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * eventStatus  **参数解释** 事件告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * resourceStatistics  resourceStatistics
    * resourceLevel  **参数解释** 资源等级。 **取值范围** 枚举值。 - product: 云产品 - dimension: 子维度
    * productNames  **参数解释** 创建资源层级为云产品时的云产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **取值范围** 长度[0,10240]个字符
    * epResourceStatistics  每个企业项目关联的资源状态
    * associationAlarmTemplates  关联的告警模板列表
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
            'associationEpIds' => 'association_ep_ids',
            'tags' => 'tags',
            'instances' => 'instances',
            'combRelation' => 'comb_relation',
            'relatedEpIds' => 'related_ep_ids',
            'enterpriseProjectIdAndTags' => 'enterprise_project_id_and_tags',
            'status' => 'status',
            'eventStatus' => 'event_status',
            'resourceStatistics' => 'resource_statistics',
            'resourceLevel' => 'resource_level',
            'productNames' => 'product_names',
            'epResourceStatistics' => 'ep_resource_statistics',
            'associationAlarmTemplates' => 'association_alarm_templates'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释**： 资源分组ID。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释**： 资源分组的创建时间 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 资源分组的修改时间 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 枚举值。 - EPS: 匹配企业项目 - TAG: 匹配标签 - NAME: 匹配实例名称 - COMB: 组合匹配 - Manual: 手动添加
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    * tags  当资源匹配规则为匹配标签时,所指定的标签规则
    * instances  实例名称匹配参数
    * combRelation  combRelation
    * relatedEpIds  当资源匹配规则为匹配企业项目时，指定的企业项目列表
    * enterpriseProjectIdAndTags  匹配企业项目或匹配标签参数
    * status  **参数解释** 指标告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * eventStatus  **参数解释** 事件告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * resourceStatistics  resourceStatistics
    * resourceLevel  **参数解释** 资源等级。 **取值范围** 枚举值。 - product: 云产品 - dimension: 子维度
    * productNames  **参数解释** 创建资源层级为云产品时的云产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **取值范围** 长度[0,10240]个字符
    * epResourceStatistics  每个企业项目关联的资源状态
    * associationAlarmTemplates  关联的告警模板列表
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
            'associationEpIds' => 'setAssociationEpIds',
            'tags' => 'setTags',
            'instances' => 'setInstances',
            'combRelation' => 'setCombRelation',
            'relatedEpIds' => 'setRelatedEpIds',
            'enterpriseProjectIdAndTags' => 'setEnterpriseProjectIdAndTags',
            'status' => 'setStatus',
            'eventStatus' => 'setEventStatus',
            'resourceStatistics' => 'setResourceStatistics',
            'resourceLevel' => 'setResourceLevel',
            'productNames' => 'setProductNames',
            'epResourceStatistics' => 'setEpResourceStatistics',
            'associationAlarmTemplates' => 'setAssociationAlarmTemplates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
    * groupId  **参数解释**： 资源分组ID。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释**： 资源分组的创建时间 **取值范围**： 不涉及。
    * updateTime  **参数解释**： 资源分组的修改时间 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 枚举值。 - EPS: 匹配企业项目 - TAG: 匹配标签 - NAME: 匹配实例名称 - COMB: 组合匹配 - Manual: 手动添加
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    * tags  当资源匹配规则为匹配标签时,所指定的标签规则
    * instances  实例名称匹配参数
    * combRelation  combRelation
    * relatedEpIds  当资源匹配规则为匹配企业项目时，指定的企业项目列表
    * enterpriseProjectIdAndTags  匹配企业项目或匹配标签参数
    * status  **参数解释** 指标告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * eventStatus  **参数解释** 事件告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
    * resourceStatistics  resourceStatistics
    * resourceLevel  **参数解释** 资源等级。 **取值范围** 枚举值。 - product: 云产品 - dimension: 子维度
    * productNames  **参数解释** 创建资源层级为云产品时的云产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **取值范围** 长度[0,10240]个字符
    * epResourceStatistics  每个企业项目关联的资源状态
    * associationAlarmTemplates  关联的告警模板列表
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
            'associationEpIds' => 'getAssociationEpIds',
            'tags' => 'getTags',
            'instances' => 'getInstances',
            'combRelation' => 'getCombRelation',
            'relatedEpIds' => 'getRelatedEpIds',
            'enterpriseProjectIdAndTags' => 'getEnterpriseProjectIdAndTags',
            'status' => 'getStatus',
            'eventStatus' => 'getEventStatus',
            'resourceStatistics' => 'getResourceStatistics',
            'resourceLevel' => 'getResourceLevel',
            'productNames' => 'getProductNames',
            'epResourceStatistics' => 'getEpResourceStatistics',
            'associationAlarmTemplates' => 'getAssociationAlarmTemplates'
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
    const TYPE_NAME = 'NAME';
    const TYPE_COMB = 'COMB';
    const TYPE_MANUAL = 'Manual';
    const STATUS_HEALTH = 'health';
    const STATUS_UNHEALTHY = 'unhealthy';
    const STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    const EVENT_STATUS_HEALTH = 'health';
    const EVENT_STATUS_UNHEALTHY = 'unhealthy';
    const EVENT_STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    const RESOURCE_LEVEL_DIMENSION = 'dimension';
    const RESOURCE_LEVEL_PRODUCT = 'product';
    

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
            self::TYPE_NAME,
            self::TYPE_COMB,
            self::TYPE_MANUAL,
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
            self::RESOURCE_LEVEL_DIMENSION,
            self::RESOURCE_LEVEL_PRODUCT,
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
        $this->container['associationEpIds'] = isset($data['associationEpIds']) ? $data['associationEpIds'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['combRelation'] = isset($data['combRelation']) ? $data['combRelation'] : null;
        $this->container['relatedEpIds'] = isset($data['relatedEpIds']) ? $data['relatedEpIds'] : null;
        $this->container['enterpriseProjectIdAndTags'] = isset($data['enterpriseProjectIdAndTags']) ? $data['enterpriseProjectIdAndTags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['eventStatus'] = isset($data['eventStatus']) ? $data['eventStatus'] : null;
        $this->container['resourceStatistics'] = isset($data['resourceStatistics']) ? $data['resourceStatistics'] : null;
        $this->container['resourceLevel'] = isset($data['resourceLevel']) ? $data['resourceLevel'] : null;
        $this->container['productNames'] = isset($data['productNames']) ? $data['productNames'] : null;
        $this->container['epResourceStatistics'] = isset($data['epResourceStatistics']) ? $data['epResourceStatistics'] : null;
        $this->container['associationAlarmTemplates'] = isset($data['associationAlarmTemplates']) ? $data['associationAlarmTemplates'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
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
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
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

            if (!is_null($this->container['productNames']) && (mb_strlen($this->container['productNames']) > 10240)) {
                $invalidProperties[] = "invalid value for 'productNames', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['productNames']) && (mb_strlen($this->container['productNames']) < 0)) {
                $invalidProperties[] = "invalid value for 'productNames', the character length must be bigger than or equal to 0.";
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
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释** 资源分组的名称。 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符。
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
    *  **参数解释**： 资源分组ID。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
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
    * @param string|null $groupId **参数解释**： 资源分组ID。 **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
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
    *  **参数解释**： 资源分组的创建时间 **取值范围**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime **参数解释**： 资源分组的创建时间 **取值范围**： 不涉及。
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
    *  **参数解释**： 资源分组的修改时间 **取值范围**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime **参数解释**： 资源分组的修改时间 **取值范围**： 不涉及。
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
    *  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
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
    * @param string|null $enterpriseProjectId **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
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
    *  **参数解释** 资源添加/匹配方式。 **取值范围** 枚举值。 - EPS: 匹配企业项目 - TAG: 匹配标签 - NAME: 匹配实例名称 - COMB: 组合匹配 - Manual: 手动添加
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
    * @param string|null $type **参数解释** 资源添加/匹配方式。 **取值范围** 枚举值。 - EPS: 匹配企业项目 - TAG: 匹配标签 - NAME: 匹配实例名称 - COMB: 组合匹配 - Manual: 手动添加
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets associationEpIds
    *  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @return string[]|null
    */
    public function getAssociationEpIds()
    {
        return $this->container['associationEpIds'];
    }

    /**
    * Sets associationEpIds
    *
    * @param string[]|null $associationEpIds 该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @return $this
    */
    public function setAssociationEpIds($associationEpIds)
    {
        $this->container['associationEpIds'] = $associationEpIds;
        return $this;
    }

    /**
    * Gets tags
    *  当资源匹配规则为匹配标签时,所指定的标签规则
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]|null $tags 当资源匹配规则为匹配标签时,所指定的标签规则
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets instances
    *  实例名称匹配参数
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Instance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Instance[]|null $instances 实例名称匹配参数
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets combRelation
    *  combRelation
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\CombRelation|null
    */
    public function getCombRelation()
    {
        return $this->container['combRelation'];
    }

    /**
    * Sets combRelation
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\CombRelation|null $combRelation combRelation
    *
    * @return $this
    */
    public function setCombRelation($combRelation)
    {
        $this->container['combRelation'] = $combRelation;
        return $this;
    }

    /**
    * Gets relatedEpIds
    *  当资源匹配规则为匹配企业项目时，指定的企业项目列表
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
    * @param string[]|null $relatedEpIds 当资源匹配规则为匹配企业项目时，指定的企业项目列表
    *
    * @return $this
    */
    public function setRelatedEpIds($relatedEpIds)
    {
        $this->container['relatedEpIds'] = $relatedEpIds;
        return $this;
    }

    /**
    * Gets enterpriseProjectIdAndTags
    *  匹配企业项目或匹配标签参数
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]|null
    */
    public function getEnterpriseProjectIdAndTags()
    {
        return $this->container['enterpriseProjectIdAndTags'];
    }

    /**
    * Sets enterpriseProjectIdAndTags
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]|null $enterpriseProjectIdAndTags 匹配企业项目或匹配标签参数
    *
    * @return $this
    */
    public function setEnterpriseProjectIdAndTags($enterpriseProjectIdAndTags)
    {
        $this->container['enterpriseProjectIdAndTags'] = $enterpriseProjectIdAndTags;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 指标告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
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
    * @param string|null $status **参数解释** 指标告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
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
    *  **参数解释** 事件告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
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
    * @param string|null $eventStatus **参数解释** 事件告警状态。 **取值范围** 枚举值。 - health: 告警中 - unhealthy: 已触发 - no_alarm_rule: 未设置告警规则
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
    * @return \HuaweiCloud\SDK\Ces\V2\Model\GetResourceGroupRespResourceStatistics|null
    */
    public function getResourceStatistics()
    {
        return $this->container['resourceStatistics'];
    }

    /**
    * Sets resourceStatistics
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\GetResourceGroupRespResourceStatistics|null $resourceStatistics resourceStatistics
    *
    * @return $this
    */
    public function setResourceStatistics($resourceStatistics)
    {
        $this->container['resourceStatistics'] = $resourceStatistics;
        return $this;
    }

    /**
    * Gets resourceLevel
    *  **参数解释** 资源等级。 **取值范围** 枚举值。 - product: 云产品 - dimension: 子维度
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
    * @param string|null $resourceLevel **参数解释** 资源等级。 **取值范围** 枚举值。 - product: 云产品 - dimension: 子维度
    *
    * @return $this
    */
    public function setResourceLevel($resourceLevel)
    {
        $this->container['resourceLevel'] = $resourceLevel;
        return $this;
    }

    /**
    * Gets productNames
    *  **参数解释** 创建资源层级为云产品时的云产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **取值范围** 长度[0,10240]个字符
    *
    * @return string|null
    */
    public function getProductNames()
    {
        return $this->container['productNames'];
    }

    /**
    * Sets productNames
    *
    * @param string|null $productNames **参数解释** 创建资源层级为云产品时的云产品名称，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **取值范围** 长度[0,10240]个字符
    *
    * @return $this
    */
    public function setProductNames($productNames)
    {
        $this->container['productNames'] = $productNames;
        return $this;
    }

    /**
    * Gets epResourceStatistics
    *  每个企业项目关联的资源状态
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\EpResourceStatistics[]|null
    */
    public function getEpResourceStatistics()
    {
        return $this->container['epResourceStatistics'];
    }

    /**
    * Sets epResourceStatistics
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\EpResourceStatistics[]|null $epResourceStatistics 每个企业项目关联的资源状态
    *
    * @return $this
    */
    public function setEpResourceStatistics($epResourceStatistics)
    {
        $this->container['epResourceStatistics'] = $epResourceStatistics;
        return $this;
    }

    /**
    * Gets associationAlarmTemplates
    *  关联的告警模板列表
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
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AssociationAlarmTemplate[]|null $associationAlarmTemplates 关联的告警模板列表
    *
    * @return $this
    */
    public function setAssociationAlarmTemplates($associationAlarmTemplates)
    {
        $this->container['associationAlarmTemplates'] = $associationAlarmTemplates;
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

