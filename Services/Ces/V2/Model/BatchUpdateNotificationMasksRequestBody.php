<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateNotificationMasksRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateNotificationMasksRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationIds  关联编号，relation_type为ALARM_RULE时填屏蔽的告警规则ID；relation_type为RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的告警策略ID；
    * resources  关联资源，relation_type为RESOURCE、RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的资源信息；
    * metricNames  关联指标名称，relation_type为RESOURCE可选填，不填视为对资源所有指标进行告警屏蔽
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * maskType  maskType
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maskName' => 'string',
            'relationType' => '\HuaweiCloud\SDK\Ces\V2\Model\RelationType',
            'relationIds' => 'string[]',
            'resources' => '\HuaweiCloud\SDK\Ces\V2\Model\Resource[]',
            'metricNames' => 'string[]',
            'productMetrics' => '\HuaweiCloud\SDK\Ces\V2\Model\ProductMetric[]',
            'resourceLevel' => 'string',
            'productName' => 'string',
            'maskType' => '\HuaweiCloud\SDK\Ces\V2\Model\MaskType',
            'startDate' => '\DateTime',
            'startTime' => 'string',
            'endDate' => '\DateTime',
            'endTime' => 'string',
            'effectiveTimezone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationIds  关联编号，relation_type为ALARM_RULE时填屏蔽的告警规则ID；relation_type为RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的告警策略ID；
    * resources  关联资源，relation_type为RESOURCE、RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的资源信息；
    * metricNames  关联指标名称，relation_type为RESOURCE可选填，不填视为对资源所有指标进行告警屏蔽
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * maskType  maskType
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maskName' => null,
        'relationType' => null,
        'relationIds' => null,
        'resources' => null,
        'metricNames' => null,
        'productMetrics' => null,
        'resourceLevel' => null,
        'productName' => null,
        'maskType' => null,
        'startDate' => 'date',
        'startTime' => null,
        'endDate' => 'date',
        'endTime' => null,
        'effectiveTimezone' => null
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
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationIds  关联编号，relation_type为ALARM_RULE时填屏蔽的告警规则ID；relation_type为RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的告警策略ID；
    * resources  关联资源，relation_type为RESOURCE、RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的资源信息；
    * metricNames  关联指标名称，relation_type为RESOURCE可选填，不填视为对资源所有指标进行告警屏蔽
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * maskType  maskType
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maskName' => 'mask_name',
            'relationType' => 'relation_type',
            'relationIds' => 'relation_ids',
            'resources' => 'resources',
            'metricNames' => 'metric_names',
            'productMetrics' => 'product_metrics',
            'resourceLevel' => 'resource_level',
            'productName' => 'product_name',
            'maskType' => 'mask_type',
            'startDate' => 'start_date',
            'startTime' => 'start_time',
            'endDate' => 'end_date',
            'endTime' => 'end_time',
            'effectiveTimezone' => 'effective_timezone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationIds  关联编号，relation_type为ALARM_RULE时填屏蔽的告警规则ID；relation_type为RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的告警策略ID；
    * resources  关联资源，relation_type为RESOURCE、RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的资源信息；
    * metricNames  关联指标名称，relation_type为RESOURCE可选填，不填视为对资源所有指标进行告警屏蔽
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * maskType  maskType
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'maskName' => 'setMaskName',
            'relationType' => 'setRelationType',
            'relationIds' => 'setRelationIds',
            'resources' => 'setResources',
            'metricNames' => 'setMetricNames',
            'productMetrics' => 'setProductMetrics',
            'resourceLevel' => 'setResourceLevel',
            'productName' => 'setProductName',
            'maskType' => 'setMaskType',
            'startDate' => 'setStartDate',
            'startTime' => 'setStartTime',
            'endDate' => 'setEndDate',
            'endTime' => 'setEndTime',
            'effectiveTimezone' => 'setEffectiveTimezone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maskName  **参数解释**： 屏蔽规则名称。    **约束限制**： 不涉及。 **取值范围**： 只能为字母、数字、汉字、-、_，长度为[1,64]个字符。      **默认取值**： 不涉及。
    * relationType  relationType
    * relationIds  关联编号，relation_type为ALARM_RULE时填屏蔽的告警规则ID；relation_type为RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的告警策略ID；
    * resources  关联资源，relation_type为RESOURCE、RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的资源信息；
    * metricNames  关联指标名称，relation_type为RESOURCE可选填，不填视为对资源所有指标进行告警屏蔽
    * productMetrics  按云产品维度屏蔽时的指标信息
    * resourceLevel  dimension: 子维度,product: 云产品
    * productName  资源为云产品时的云产品名称
    * maskType  maskType
    * startDate  **参数解释**： 屏蔽起始日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * startTime  **参数解释**： 屏蔽起始时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * endDate  **参数解释**： 屏蔽截止日期。           **约束限制**： 不涉及。 **取值范围**： 字符长度为10，格式为：yyyy-MM-dd           **默认取值**： 不涉及。
    * endTime  **参数解释**： 屏蔽截止时间。          **约束限制**： 不涉及。 **取值范围**： 字符长度为8，格式为：HH:mm:ss         **默认取值**： 不涉及。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\"。    **约束限制**： 不涉及。 **取值范围**： 长度为[1,16]个字符。           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'maskName' => 'getMaskName',
            'relationType' => 'getRelationType',
            'relationIds' => 'getRelationIds',
            'resources' => 'getResources',
            'metricNames' => 'getMetricNames',
            'productMetrics' => 'getProductMetrics',
            'resourceLevel' => 'getResourceLevel',
            'productName' => 'getProductName',
            'maskType' => 'getMaskType',
            'startDate' => 'getStartDate',
            'startTime' => 'getStartTime',
            'endDate' => 'getEndDate',
            'endTime' => 'getEndTime',
            'effectiveTimezone' => 'getEffectiveTimezone'
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
        $this->container['maskName'] = isset($data['maskName']) ? $data['maskName'] : null;
        $this->container['relationType'] = isset($data['relationType']) ? $data['relationType'] : null;
        $this->container['relationIds'] = isset($data['relationIds']) ? $data['relationIds'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['metricNames'] = isset($data['metricNames']) ? $data['metricNames'] : null;
        $this->container['productMetrics'] = isset($data['productMetrics']) ? $data['productMetrics'] : null;
        $this->container['resourceLevel'] = isset($data['resourceLevel']) ? $data['resourceLevel'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['maskType'] = isset($data['maskType']) ? $data['maskType'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['effectiveTimezone'] = isset($data['effectiveTimezone']) ? $data['effectiveTimezone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
        if ($this->container['relationIds'] === null) {
            $invalidProperties[] = "'relationIds' can't be null";
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
    * Gets relationIds
    *  关联编号，relation_type为ALARM_RULE时填屏蔽的告警规则ID；relation_type为RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的告警策略ID；
    *
    * @return string[]
    */
    public function getRelationIds()
    {
        return $this->container['relationIds'];
    }

    /**
    * Sets relationIds
    *
    * @param string[] $relationIds 关联编号，relation_type为ALARM_RULE时填屏蔽的告警规则ID；relation_type为RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的告警策略ID；
    *
    * @return $this
    */
    public function setRelationIds($relationIds)
    {
        $this->container['relationIds'] = $relationIds;
        return $this;
    }

    /**
    * Gets resources
    *  关联资源，relation_type为RESOURCE、RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的资源信息；
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Resource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Resource[]|null $resources 关联资源，relation_type为RESOURCE、RESOURCE_POLICY_NOTIFICATION、RESOURCE_POLICY_ALARM时填屏蔽的资源信息；
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets metricNames
    *  关联指标名称，relation_type为RESOURCE可选填，不填视为对资源所有指标进行告警屏蔽
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
    * @param string[]|null $metricNames 关联指标名称，relation_type为RESOURCE可选填，不填视为对资源所有指标进行告警屏蔽
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

