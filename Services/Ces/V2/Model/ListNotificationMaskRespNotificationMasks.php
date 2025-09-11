<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotificationMaskRespNotificationMasks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotificationMaskResp_notification_masks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notificationMaskId  屏蔽规则ID
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationId  **参数解释**： 关联ID       **约束限制**： 不涉及。 **取值范围**： 取值为告警规则ID、告警策略ID。只能包含字母、数字、“-”，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * resourceType  resourceType
    * metricNames  关联指标名称，relation_type为RESOURCE时存在该字段
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * createTime  告警屏蔽的创建时间，UNIX时间戳，单位毫秒。
    * updateTime  告警屏蔽的更新时间，UNIX时间戳，单位毫秒。
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notificationMaskId' => 'string',
            'maskName' => 'string',
            'relationType' => '\HuaweiCloud\SDK\Ces\V2\Model\RelationType',
            'relationId' => 'string',
            'resourceType' => '\HuaweiCloud\SDK\Ces\V2\Model\MaskResourceType',
            'metricNames' => 'string[]',
            'productMetrics' => '\HuaweiCloud\SDK\Ces\V2\Model\ProductMetric[]',
            'resourceLevel' => 'string',
            'productName' => 'string',
            'resources' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceCategory[]',
            'maskStatus' => '\HuaweiCloud\SDK\Ces\V2\Model\MaskStatus',
            'maskType' => '\HuaweiCloud\SDK\Ces\V2\Model\MaskType',
            'createTime' => 'int',
            'updateTime' => 'int',
            'startDate' => '\DateTime',
            'startTime' => 'string',
            'endDate' => '\DateTime',
            'endTime' => 'string',
            'effectiveTimezone' => 'string',
            'policies' => '\HuaweiCloud\SDK\Ces\V2\Model\PoliciesInListResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notificationMaskId  屏蔽规则ID
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationId  **参数解释**： 关联ID       **约束限制**： 不涉及。 **取值范围**： 取值为告警规则ID、告警策略ID。只能包含字母、数字、“-”，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * resourceType  resourceType
    * metricNames  关联指标名称，relation_type为RESOURCE时存在该字段
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * createTime  告警屏蔽的创建时间，UNIX时间戳，单位毫秒。
    * updateTime  告警屏蔽的更新时间，UNIX时间戳，单位毫秒。
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notificationMaskId' => null,
        'maskName' => null,
        'relationType' => null,
        'relationId' => null,
        'resourceType' => null,
        'metricNames' => null,
        'productMetrics' => null,
        'resourceLevel' => null,
        'productName' => null,
        'resources' => null,
        'maskStatus' => null,
        'maskType' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'startDate' => 'date',
        'startTime' => null,
        'endDate' => 'date',
        'endTime' => null,
        'effectiveTimezone' => null,
        'policies' => null
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
    * notificationMaskId  屏蔽规则ID
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationId  **参数解释**： 关联ID       **约束限制**： 不涉及。 **取值范围**： 取值为告警规则ID、告警策略ID。只能包含字母、数字、“-”，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * resourceType  resourceType
    * metricNames  关联指标名称，relation_type为RESOURCE时存在该字段
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * createTime  告警屏蔽的创建时间，UNIX时间戳，单位毫秒。
    * updateTime  告警屏蔽的更新时间，UNIX时间戳，单位毫秒。
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notificationMaskId' => 'notification_mask_id',
            'maskName' => 'mask_name',
            'relationType' => 'relation_type',
            'relationId' => 'relation_id',
            'resourceType' => 'resource_type',
            'metricNames' => 'metric_names',
            'productMetrics' => 'product_metrics',
            'resourceLevel' => 'resource_level',
            'productName' => 'product_name',
            'resources' => 'resources',
            'maskStatus' => 'mask_status',
            'maskType' => 'mask_type',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'startDate' => 'start_date',
            'startTime' => 'start_time',
            'endDate' => 'end_date',
            'endTime' => 'end_time',
            'effectiveTimezone' => 'effective_timezone',
            'policies' => 'policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notificationMaskId  屏蔽规则ID
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationId  **参数解释**： 关联ID       **约束限制**： 不涉及。 **取值范围**： 取值为告警规则ID、告警策略ID。只能包含字母、数字、“-”，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * resourceType  resourceType
    * metricNames  关联指标名称，relation_type为RESOURCE时存在该字段
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * createTime  告警屏蔽的创建时间，UNIX时间戳，单位毫秒。
    * updateTime  告警屏蔽的更新时间，UNIX时间戳，单位毫秒。
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'notificationMaskId' => 'setNotificationMaskId',
            'maskName' => 'setMaskName',
            'relationType' => 'setRelationType',
            'relationId' => 'setRelationId',
            'resourceType' => 'setResourceType',
            'metricNames' => 'setMetricNames',
            'productMetrics' => 'setProductMetrics',
            'resourceLevel' => 'setResourceLevel',
            'productName' => 'setProductName',
            'resources' => 'setResources',
            'maskStatus' => 'setMaskStatus',
            'maskType' => 'setMaskType',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'startDate' => 'setStartDate',
            'startTime' => 'setStartTime',
            'endDate' => 'setEndDate',
            'endTime' => 'setEndTime',
            'effectiveTimezone' => 'setEffectiveTimezone',
            'policies' => 'setPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notificationMaskId  屏蔽规则ID
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationId  **参数解释**： 关联ID       **约束限制**： 不涉及。 **取值范围**： 取值为告警规则ID、告警策略ID。只能包含字母、数字、“-”，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * resourceType  resourceType
    * metricNames  关联指标名称，relation_type为RESOURCE时存在该字段
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * resources  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    * maskStatus  maskStatus
    * maskType  maskType
    * createTime  告警屏蔽的创建时间，UNIX时间戳，单位毫秒。
    * updateTime  告警屏蔽的更新时间，UNIX时间戳，单位毫秒。
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    * policies  告警策略列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'notificationMaskId' => 'getNotificationMaskId',
            'maskName' => 'getMaskName',
            'relationType' => 'getRelationType',
            'relationId' => 'getRelationId',
            'resourceType' => 'getResourceType',
            'metricNames' => 'getMetricNames',
            'productMetrics' => 'getProductMetrics',
            'resourceLevel' => 'getResourceLevel',
            'productName' => 'getProductName',
            'resources' => 'getResources',
            'maskStatus' => 'getMaskStatus',
            'maskType' => 'getMaskType',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'startDate' => 'getStartDate',
            'startTime' => 'getStartTime',
            'endDate' => 'getEndDate',
            'endTime' => 'getEndTime',
            'effectiveTimezone' => 'getEffectiveTimezone',
            'policies' => 'getPolicies'
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
    const RESOURCE_LEVEL_DIMENSION = 'dimension';
    const RESOURCE_LEVEL_PRODUCT = 'product';
    

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
        $this->container['notificationMaskId'] = isset($data['notificationMaskId']) ? $data['notificationMaskId'] : null;
        $this->container['maskName'] = isset($data['maskName']) ? $data['maskName'] : null;
        $this->container['relationType'] = isset($data['relationType']) ? $data['relationType'] : null;
        $this->container['relationId'] = isset($data['relationId']) ? $data['relationId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['metricNames'] = isset($data['metricNames']) ? $data['metricNames'] : null;
        $this->container['productMetrics'] = isset($data['productMetrics']) ? $data['productMetrics'] : null;
        $this->container['resourceLevel'] = isset($data['resourceLevel']) ? $data['resourceLevel'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['maskStatus'] = isset($data['maskStatus']) ? $data['maskStatus'] : null;
        $this->container['maskType'] = isset($data['maskType']) ? $data['maskType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['effectiveTimezone'] = isset($data['effectiveTimezone']) ? $data['effectiveTimezone'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['notificationMaskId'] === null) {
            $invalidProperties[] = "'notificationMaskId' can't be null";
        }
            if ((mb_strlen($this->container['notificationMaskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['notificationMaskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^nm([0-9A-Za-z]){0,62}$/", $this->container['notificationMaskId'])) {
                $invalidProperties[] = "invalid value for 'notificationMaskId', must be conform to the pattern /^nm([0-9A-Za-z]){0,62}$/.";
            }
            if (!is_null($this->container['maskName']) && (mb_strlen($this->container['maskName']) > 64)) {
                $invalidProperties[] = "invalid value for 'maskName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['maskName']) && (mb_strlen($this->container['maskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'maskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maskName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['maskName'])) {
                $invalidProperties[] = "invalid value for 'maskName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
        if ($this->container['relationType'] === null) {
            $invalidProperties[] = "'relationType' can't be null";
        }
            if (!is_null($this->container['relationId']) && (mb_strlen($this->container['relationId']) > 64)) {
                $invalidProperties[] = "invalid value for 'relationId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['relationId']) && (mb_strlen($this->container['relationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'relationId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['relationId']) && !preg_match("/^([a-z]|[A-Z]|[0-9]|-){1,64}$/", $this->container['relationId'])) {
                $invalidProperties[] = "invalid value for 'relationId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|-){1,64}$/.";
            }
            $allowedValues = $this->getResourceLevelAllowableValues();
                if (!is_null($this->container['resourceLevel']) && !in_array($this->container['resourceLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 128)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['maskStatus'] === null) {
            $invalidProperties[] = "'maskStatus' can't be null";
        }
        if ($this->container['maskType'] === null) {
            $invalidProperties[] = "'maskType' can't be null";
        }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 8)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 8)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 8)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 8)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['effectiveTimezone']) && (mb_strlen($this->container['effectiveTimezone']) > 16)) {
                $invalidProperties[] = "invalid value for 'effectiveTimezone', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['effectiveTimezone']) && (mb_strlen($this->container['effectiveTimezone']) < 1)) {
                $invalidProperties[] = "invalid value for 'effectiveTimezone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['effectiveTimezone']) && !preg_match("/^(GMT[+-](0|0[1-9]|1[0-2]):00)$/", $this->container['effectiveTimezone'])) {
                $invalidProperties[] = "invalid value for 'effectiveTimezone', must be conform to the pattern /^(GMT[+-](0|0[1-9]|1[0-2]):00)$/.";
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
    * Gets notificationMaskId
    *  屏蔽规则ID
    *
    * @return string
    */
    public function getNotificationMaskId()
    {
        return $this->container['notificationMaskId'];
    }

    /**
    * Sets notificationMaskId
    *
    * @param string $notificationMaskId 屏蔽规则ID
    *
    * @return $this
    */
    public function setNotificationMaskId($notificationMaskId)
    {
        $this->container['notificationMaskId'] = $notificationMaskId;
        return $this;
    }

    /**
    * Gets maskName
    *  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaskName()
    {
        return $this->container['maskName'];
    }

    /**
    * Sets maskName
    *
    * @param string|null $maskName **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaskName($maskName)
    {
        $this->container['maskName'] = $maskName;
        return $this;
    }

    /**
    * Gets relationType
    *  relationType
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\RelationType
    */
    public function getRelationType()
    {
        return $this->container['relationType'];
    }

    /**
    * Sets relationType
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\RelationType $relationType relationType
    *
    * @return $this
    */
    public function setRelationType($relationType)
    {
        $this->container['relationType'] = $relationType;
        return $this;
    }

    /**
    * Gets relationId
    *  **参数解释**： 关联ID       **约束限制**： 不涉及。 **取值范围**： 取值为告警规则ID、告警策略ID。只能包含字母、数字、“-”，长度为[1,64]个字符。      **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getRelationId()
    {
        return $this->container['relationId'];
    }

    /**
    * Sets relationId
    *
    * @param string|null $relationId **参数解释**： 关联ID       **约束限制**： 不涉及。 **取值范围**： 取值为告警规则ID、告警策略ID。只能包含字母、数字、“-”，长度为[1,64]个字符。      **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRelationId($relationId)
    {
        $this->container['relationId'] = $relationId;
        return $this;
    }

    /**
    * Gets resourceType
    *  resourceType
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\MaskResourceType|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\MaskResourceType|null $resourceType resourceType
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets metricNames
    *  关联指标名称，relation_type为RESOURCE时存在该字段
    *
    * @return string[]|null
    */
    public function getMetricNames()
    {
        return $this->container['metricNames'];
    }

    /**
    * Sets metricNames
    *
    * @param string[]|null $metricNames 关联指标名称，relation_type为RESOURCE时存在该字段
    *
    * @return $this
    */
    public function setMetricNames($metricNames)
    {
        $this->container['metricNames'] = $metricNames;
        return $this;
    }

    /**
    * Gets productMetrics
    *  按云产品维度屏蔽时的指标信息
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ProductMetric[]|null
    */
    public function getProductMetrics()
    {
        return $this->container['productMetrics'];
    }

    /**
    * Sets productMetrics
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ProductMetric[]|null $productMetrics 按云产品维度屏蔽时的指标信息
    *
    * @return $this
    */
    public function setProductMetrics($productMetrics)
    {
        $this->container['productMetrics'] = $productMetrics;
        return $this;
    }

    /**
    * Gets resourceLevel
    *  dimension: 子维度,product: 云产品
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
    * @param string|null $resourceLevel dimension: 子维度,product: 云产品
    *
    * @return $this
    */
    public function setResourceLevel($resourceLevel)
    {
        $this->container['resourceLevel'] = $resourceLevel;
        return $this;
    }

    /**
    * Gets productName
    *  资源为云产品时的云产品名称
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 资源为云产品时的云产品名称
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets resources
    *  关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceCategory[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceCategory[]|null $resources 关联资源类型，relation_type为RESOURCE时存在该字段,只需要查询出资源的namespace+维度名即可
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets maskStatus
    *  maskStatus
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\MaskStatus
    */
    public function getMaskStatus()
    {
        return $this->container['maskStatus'];
    }

    /**
    * Sets maskStatus
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\MaskStatus $maskStatus maskStatus
    *
    * @return $this
    */
    public function setMaskStatus($maskStatus)
    {
        $this->container['maskStatus'] = $maskStatus;
        return $this;
    }

    /**
    * Gets maskType
    *  maskType
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\MaskType
    */
    public function getMaskType()
    {
        return $this->container['maskType'];
    }

    /**
    * Sets maskType
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\MaskType $maskType maskType
    *
    * @return $this
    */
    public function setMaskType($maskType)
    {
        $this->container['maskType'] = $maskType;
        return $this;
    }

    /**
    * Gets createTime
    *  告警屏蔽的创建时间，UNIX时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 告警屏蔽的创建时间，UNIX时间戳，单位毫秒。
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
    *  告警屏蔽的更新时间，UNIX时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 告警屏蔽的更新时间，UNIX时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets startDate
    *  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param \DateTime|null $startDate **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endDate
    *  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param \DateTime|null $endDate **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets effectiveTimezone
    *  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEffectiveTimezone()
    {
        return $this->container['effectiveTimezone'];
    }

    /**
    * Sets effectiveTimezone
    *
    * @param string|null $effectiveTimezone **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEffectiveTimezone($effectiveTimezone)
    {
        $this->container['effectiveTimezone'] = $effectiveTimezone;
        return $this;
    }

    /**
    * Gets policies
    *  告警策略列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\PoliciesInListResp[]|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\PoliciesInListResp[]|null $policies 告警策略列表。
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
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

