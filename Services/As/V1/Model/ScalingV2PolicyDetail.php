<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingV2PolicyDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingV2PolicyDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceId  伸缩资源ID。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * policyStatus  伸缩策略状态。INSERVICE：使用中。PAUSED：停止。EXECUTING：执行中。
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间
    * metaData  metaData
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingPolicyName' => 'string',
            'scalingPolicyId' => 'string',
            'scalingResourceId' => 'string',
            'scalingResourceType' => 'string',
            'policyStatus' => 'string',
            'scalingPolicyType' => 'string',
            'alarmId' => 'string',
            'scheduledPolicy' => '\HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy',
            'scalingPolicyAction' => '\HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV2',
            'coolDownTime' => 'int',
            'createTime' => '\DateTime',
            'metaData' => '\HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyV2MetaData',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceId  伸缩资源ID。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * policyStatus  伸缩策略状态。INSERVICE：使用中。PAUSED：停止。EXECUTING：执行中。
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间
    * metaData  metaData
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingPolicyName' => null,
        'scalingPolicyId' => null,
        'scalingResourceId' => null,
        'scalingResourceType' => null,
        'policyStatus' => null,
        'scalingPolicyType' => null,
        'alarmId' => null,
        'scheduledPolicy' => null,
        'scalingPolicyAction' => null,
        'coolDownTime' => null,
        'createTime' => 'date-time',
        'metaData' => null,
        'description' => null
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
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceId  伸缩资源ID。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * policyStatus  伸缩策略状态。INSERVICE：使用中。PAUSED：停止。EXECUTING：执行中。
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间
    * metaData  metaData
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingPolicyName' => 'scaling_policy_name',
            'scalingPolicyId' => 'scaling_policy_id',
            'scalingResourceId' => 'scaling_resource_id',
            'scalingResourceType' => 'scaling_resource_type',
            'policyStatus' => 'policy_status',
            'scalingPolicyType' => 'scaling_policy_type',
            'alarmId' => 'alarm_id',
            'scheduledPolicy' => 'scheduled_policy',
            'scalingPolicyAction' => 'scaling_policy_action',
            'coolDownTime' => 'cool_down_time',
            'createTime' => 'create_time',
            'metaData' => 'meta_data',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceId  伸缩资源ID。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * policyStatus  伸缩策略状态。INSERVICE：使用中。PAUSED：停止。EXECUTING：执行中。
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间
    * metaData  metaData
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingPolicyName' => 'setScalingPolicyName',
            'scalingPolicyId' => 'setScalingPolicyId',
            'scalingResourceId' => 'setScalingResourceId',
            'scalingResourceType' => 'setScalingResourceType',
            'policyStatus' => 'setPolicyStatus',
            'scalingPolicyType' => 'setScalingPolicyType',
            'alarmId' => 'setAlarmId',
            'scheduledPolicy' => 'setScheduledPolicy',
            'scalingPolicyAction' => 'setScalingPolicyAction',
            'coolDownTime' => 'setCoolDownTime',
            'createTime' => 'setCreateTime',
            'metaData' => 'setMetaData',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceId  伸缩资源ID。
    * scalingResourceType  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    * policyStatus  伸缩策略状态。INSERVICE：使用中。PAUSED：停止。EXECUTING：执行中。
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间
    * metaData  metaData
    * description  伸缩策略描述（1-256个字符）
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingPolicyName' => 'getScalingPolicyName',
            'scalingPolicyId' => 'getScalingPolicyId',
            'scalingResourceId' => 'getScalingResourceId',
            'scalingResourceType' => 'getScalingResourceType',
            'policyStatus' => 'getPolicyStatus',
            'scalingPolicyType' => 'getScalingPolicyType',
            'alarmId' => 'getAlarmId',
            'scheduledPolicy' => 'getScheduledPolicy',
            'scalingPolicyAction' => 'getScalingPolicyAction',
            'coolDownTime' => 'getCoolDownTime',
            'createTime' => 'getCreateTime',
            'metaData' => 'getMetaData',
            'description' => 'getDescription'
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
    const SCALING_RESOURCE_TYPE_SCALING_GROUP = 'SCALING_GROUP';
    const SCALING_RESOURCE_TYPE_BANDWIDTH = 'BANDWIDTH';
    const POLICY_STATUS_INSERVICE = 'INSERVICE';
    const POLICY_STATUS_PAUSED = 'PAUSED';
    const POLICY_STATUS_EXECUTING = 'EXECUTING';
    const SCALING_POLICY_TYPE_ALARM = 'ALARM';
    const SCALING_POLICY_TYPE_SCHEDULED = 'SCHEDULED';
    const SCALING_POLICY_TYPE_RECURRENCE = 'RECURRENCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingResourceTypeAllowableValues()
    {
        return [
            self::SCALING_RESOURCE_TYPE_SCALING_GROUP,
            self::SCALING_RESOURCE_TYPE_BANDWIDTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPolicyStatusAllowableValues()
    {
        return [
            self::POLICY_STATUS_INSERVICE,
            self::POLICY_STATUS_PAUSED,
            self::POLICY_STATUS_EXECUTING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingPolicyTypeAllowableValues()
    {
        return [
            self::SCALING_POLICY_TYPE_ALARM,
            self::SCALING_POLICY_TYPE_SCHEDULED,
            self::SCALING_POLICY_TYPE_RECURRENCE,
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
        $this->container['scalingPolicyName'] = isset($data['scalingPolicyName']) ? $data['scalingPolicyName'] : null;
        $this->container['scalingPolicyId'] = isset($data['scalingPolicyId']) ? $data['scalingPolicyId'] : null;
        $this->container['scalingResourceId'] = isset($data['scalingResourceId']) ? $data['scalingResourceId'] : null;
        $this->container['scalingResourceType'] = isset($data['scalingResourceType']) ? $data['scalingResourceType'] : null;
        $this->container['policyStatus'] = isset($data['policyStatus']) ? $data['policyStatus'] : null;
        $this->container['scalingPolicyType'] = isset($data['scalingPolicyType']) ? $data['scalingPolicyType'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['scheduledPolicy'] = isset($data['scheduledPolicy']) ? $data['scheduledPolicy'] : null;
        $this->container['scalingPolicyAction'] = isset($data['scalingPolicyAction']) ? $data['scalingPolicyAction'] : null;
        $this->container['coolDownTime'] = isset($data['coolDownTime']) ? $data['coolDownTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scalingPolicyId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingPolicyId'])) {
                $invalidProperties[] = "invalid value for 'scalingPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['scalingResourceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingResourceId'])) {
                $invalidProperties[] = "invalid value for 'scalingResourceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getScalingResourceTypeAllowableValues();
                if (!is_null($this->container['scalingResourceType']) && !in_array($this->container['scalingResourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingResourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPolicyStatusAllowableValues();
                if (!is_null($this->container['policyStatus']) && !in_array($this->container['policyStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'policyStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getScalingPolicyTypeAllowableValues();
                if (!is_null($this->container['scalingPolicyType']) && !in_array($this->container['scalingPolicyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingPolicyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['coolDownTime']) && ($this->container['coolDownTime'] > 86400)) {
                $invalidProperties[] = "invalid value for 'coolDownTime', must be smaller than or equal to 86400.";
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
    * Gets scalingPolicyName
    *  伸缩策略名称。
    *
    * @return string|null
    */
    public function getScalingPolicyName()
    {
        return $this->container['scalingPolicyName'];
    }

    /**
    * Sets scalingPolicyName
    *
    * @param string|null $scalingPolicyName 伸缩策略名称。
    *
    * @return $this
    */
    public function setScalingPolicyName($scalingPolicyName)
    {
        $this->container['scalingPolicyName'] = $scalingPolicyName;
        return $this;
    }

    /**
    * Gets scalingPolicyId
    *  伸缩策略ID。
    *
    * @return string|null
    */
    public function getScalingPolicyId()
    {
        return $this->container['scalingPolicyId'];
    }

    /**
    * Sets scalingPolicyId
    *
    * @param string|null $scalingPolicyId 伸缩策略ID。
    *
    * @return $this
    */
    public function setScalingPolicyId($scalingPolicyId)
    {
        $this->container['scalingPolicyId'] = $scalingPolicyId;
        return $this;
    }

    /**
    * Gets scalingResourceId
    *  伸缩资源ID。
    *
    * @return string|null
    */
    public function getScalingResourceId()
    {
        return $this->container['scalingResourceId'];
    }

    /**
    * Sets scalingResourceId
    *
    * @param string|null $scalingResourceId 伸缩资源ID。
    *
    * @return $this
    */
    public function setScalingResourceId($scalingResourceId)
    {
        $this->container['scalingResourceId'] = $scalingResourceId;
        return $this;
    }

    /**
    * Gets scalingResourceType
    *  伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    *
    * @return string|null
    */
    public function getScalingResourceType()
    {
        return $this->container['scalingResourceType'];
    }

    /**
    * Sets scalingResourceType
    *
    * @param string|null $scalingResourceType 伸缩资源类型。伸缩组：SCALING_GROUP。带宽：BANDWIDTH。
    *
    * @return $this
    */
    public function setScalingResourceType($scalingResourceType)
    {
        $this->container['scalingResourceType'] = $scalingResourceType;
        return $this;
    }

    /**
    * Gets policyStatus
    *  伸缩策略状态。INSERVICE：使用中。PAUSED：停止。EXECUTING：执行中。
    *
    * @return string|null
    */
    public function getPolicyStatus()
    {
        return $this->container['policyStatus'];
    }

    /**
    * Sets policyStatus
    *
    * @param string|null $policyStatus 伸缩策略状态。INSERVICE：使用中。PAUSED：停止。EXECUTING：执行中。
    *
    * @return $this
    */
    public function setPolicyStatus($policyStatus)
    {
        $this->container['policyStatus'] = $policyStatus;
        return $this;
    }

    /**
    * Gets scalingPolicyType
    *  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    *
    * @return string|null
    */
    public function getScalingPolicyType()
    {
        return $this->container['scalingPolicyType'];
    }

    /**
    * Sets scalingPolicyType
    *
    * @param string|null $scalingPolicyType 伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    *
    * @return $this
    */
    public function setScalingPolicyType($scalingPolicyType)
    {
        $this->container['scalingPolicyType'] = $scalingPolicyType;
        return $this;
    }

    /**
    * Gets alarmId
    *  告警ID。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警ID。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets scheduledPolicy
    *  scheduledPolicy
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy|null
    */
    public function getScheduledPolicy()
    {
        return $this->container['scheduledPolicy'];
    }

    /**
    * Sets scheduledPolicy
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy|null $scheduledPolicy scheduledPolicy
    *
    * @return $this
    */
    public function setScheduledPolicy($scheduledPolicy)
    {
        $this->container['scheduledPolicy'] = $scheduledPolicy;
        return $this;
    }

    /**
    * Gets scalingPolicyAction
    *  scalingPolicyAction
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV2|null
    */
    public function getScalingPolicyAction()
    {
        return $this->container['scalingPolicyAction'];
    }

    /**
    * Sets scalingPolicyAction
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV2|null $scalingPolicyAction scalingPolicyAction
    *
    * @return $this
    */
    public function setScalingPolicyAction($scalingPolicyAction)
    {
        $this->container['scalingPolicyAction'] = $scalingPolicyAction;
        return $this;
    }

    /**
    * Gets coolDownTime
    *  冷却时间，取值范围0-86400，默认为300，单位是秒。
    *
    * @return int|null
    */
    public function getCoolDownTime()
    {
        return $this->container['coolDownTime'];
    }

    /**
    * Sets coolDownTime
    *
    * @param int|null $coolDownTime 冷却时间，取值范围0-86400，默认为300，单位是秒。
    *
    * @return $this
    */
    public function setCoolDownTime($coolDownTime)
    {
        $this->container['coolDownTime'] = $coolDownTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建伸缩策略时间，遵循UTC时间
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
    * @param \DateTime|null $createTime 创建伸缩策略时间，遵循UTC时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyV2MetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyV2MetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
        return $this;
    }

    /**
    * Gets description
    *  伸缩策略描述（1-256个字符）
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
    * @param string|null $description 伸缩策略描述（1-256个字符）
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

