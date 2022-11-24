<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingPolicyExecuteLogList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingPolicyExecuteLogList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  策略执行状态：SUCCESS：成功。FAIL：失败。EXECUTING：执行中
    * failedReason  策略执行失败原因。
    * executeType  策略执行类型：SCHEDULE：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动警告（告警）。MANUAL：手动触发
    * executeTime  策略执行时间，遵循UTC时间。
    * id  策略执行日志ID。
    * tenantId  租户id。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP 带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * oldValue  伸缩原始值。
    * desireValue  伸缩目标值。
    * limitValue  操作限制。当scaling_resource_type为BANDWIDTH时，且operation不为SET时，limit_value生效，单位为Mbit/s。此时，当operation为ADD时，limit_value表示最高带宽限制；当operation为REDUCE时，limit_value表示最低带宽限制。
    * type  策略执行任务类型。ADD：添加。REMOVE：减少。SET：设置为
    * jobRecords  策略执行动作包含的具体任务
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'failedReason' => 'string',
            'executeType' => 'string',
            'executeTime' => 'string',
            'id' => 'string',
            'tenantId' => 'string',
            'scalingPolicyId' => 'string',
            'scalingResourceType' => 'string',
            'scalingResourceId' => 'string',
            'oldValue' => 'string',
            'desireValue' => 'string',
            'limitValue' => 'string',
            'type' => 'string',
            'jobRecords' => '\HuaweiCloud\SDK\_As\V1\Model\JobRecords[]',
            'metaData' => '\HuaweiCloud\SDK\_As\V1\Model\EipMetaData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  策略执行状态：SUCCESS：成功。FAIL：失败。EXECUTING：执行中
    * failedReason  策略执行失败原因。
    * executeType  策略执行类型：SCHEDULE：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动警告（告警）。MANUAL：手动触发
    * executeTime  策略执行时间，遵循UTC时间。
    * id  策略执行日志ID。
    * tenantId  租户id。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP 带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * oldValue  伸缩原始值。
    * desireValue  伸缩目标值。
    * limitValue  操作限制。当scaling_resource_type为BANDWIDTH时，且operation不为SET时，limit_value生效，单位为Mbit/s。此时，当operation为ADD时，limit_value表示最高带宽限制；当operation为REDUCE时，limit_value表示最低带宽限制。
    * type  策略执行任务类型。ADD：添加。REMOVE：减少。SET：设置为
    * jobRecords  策略执行动作包含的具体任务
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'failedReason' => null,
        'executeType' => null,
        'executeTime' => null,
        'id' => null,
        'tenantId' => null,
        'scalingPolicyId' => null,
        'scalingResourceType' => null,
        'scalingResourceId' => null,
        'oldValue' => null,
        'desireValue' => null,
        'limitValue' => null,
        'type' => null,
        'jobRecords' => null,
        'metaData' => null
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
    * status  策略执行状态：SUCCESS：成功。FAIL：失败。EXECUTING：执行中
    * failedReason  策略执行失败原因。
    * executeType  策略执行类型：SCHEDULE：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动警告（告警）。MANUAL：手动触发
    * executeTime  策略执行时间，遵循UTC时间。
    * id  策略执行日志ID。
    * tenantId  租户id。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP 带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * oldValue  伸缩原始值。
    * desireValue  伸缩目标值。
    * limitValue  操作限制。当scaling_resource_type为BANDWIDTH时，且operation不为SET时，limit_value生效，单位为Mbit/s。此时，当operation为ADD时，limit_value表示最高带宽限制；当operation为REDUCE时，limit_value表示最低带宽限制。
    * type  策略执行任务类型。ADD：添加。REMOVE：减少。SET：设置为
    * jobRecords  策略执行动作包含的具体任务
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'failedReason' => 'failed_reason',
            'executeType' => 'execute_type',
            'executeTime' => 'execute_time',
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'scalingPolicyId' => 'scaling_policy_id',
            'scalingResourceType' => 'scaling_resource_type',
            'scalingResourceId' => 'scaling_resource_id',
            'oldValue' => 'old_value',
            'desireValue' => 'desire_value',
            'limitValue' => 'limit_value',
            'type' => 'type',
            'jobRecords' => 'job_records',
            'metaData' => 'meta_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  策略执行状态：SUCCESS：成功。FAIL：失败。EXECUTING：执行中
    * failedReason  策略执行失败原因。
    * executeType  策略执行类型：SCHEDULE：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动警告（告警）。MANUAL：手动触发
    * executeTime  策略执行时间，遵循UTC时间。
    * id  策略执行日志ID。
    * tenantId  租户id。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP 带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * oldValue  伸缩原始值。
    * desireValue  伸缩目标值。
    * limitValue  操作限制。当scaling_resource_type为BANDWIDTH时，且operation不为SET时，limit_value生效，单位为Mbit/s。此时，当operation为ADD时，limit_value表示最高带宽限制；当operation为REDUCE时，limit_value表示最低带宽限制。
    * type  策略执行任务类型。ADD：添加。REMOVE：减少。SET：设置为
    * jobRecords  策略执行动作包含的具体任务
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'failedReason' => 'setFailedReason',
            'executeType' => 'setExecuteType',
            'executeTime' => 'setExecuteTime',
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'scalingPolicyId' => 'setScalingPolicyId',
            'scalingResourceType' => 'setScalingResourceType',
            'scalingResourceId' => 'setScalingResourceId',
            'oldValue' => 'setOldValue',
            'desireValue' => 'setDesireValue',
            'limitValue' => 'setLimitValue',
            'type' => 'setType',
            'jobRecords' => 'setJobRecords',
            'metaData' => 'setMetaData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  策略执行状态：SUCCESS：成功。FAIL：失败。EXECUTING：执行中
    * failedReason  策略执行失败原因。
    * executeType  策略执行类型：SCHEDULE：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动警告（告警）。MANUAL：手动触发
    * executeTime  策略执行时间，遵循UTC时间。
    * id  策略执行日志ID。
    * tenantId  租户id。
    * scalingPolicyId  伸缩策略ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP 带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * oldValue  伸缩原始值。
    * desireValue  伸缩目标值。
    * limitValue  操作限制。当scaling_resource_type为BANDWIDTH时，且operation不为SET时，limit_value生效，单位为Mbit/s。此时，当operation为ADD时，limit_value表示最高带宽限制；当operation为REDUCE时，limit_value表示最低带宽限制。
    * type  策略执行任务类型。ADD：添加。REMOVE：减少。SET：设置为
    * jobRecords  策略执行动作包含的具体任务
    * metaData  metaData
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'failedReason' => 'getFailedReason',
            'executeType' => 'getExecuteType',
            'executeTime' => 'getExecuteTime',
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'scalingPolicyId' => 'getScalingPolicyId',
            'scalingResourceType' => 'getScalingResourceType',
            'scalingResourceId' => 'getScalingResourceId',
            'oldValue' => 'getOldValue',
            'desireValue' => 'getDesireValue',
            'limitValue' => 'getLimitValue',
            'type' => 'getType',
            'jobRecords' => 'getJobRecords',
            'metaData' => 'getMetaData'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAIL = 'FAIL';
    const STATUS_EXECUTING = 'EXECUTING';
    const EXECUTE_TYPE_SCHEDULE = 'SCHEDULE';
    const EXECUTE_TYPE_RECURRENCE = 'RECURRENCE';
    const EXECUTE_TYPE_ALARM = 'ALARM';
    const EXECUTE_TYPE_MANUAL = 'MANUAL';
    const SCALING_RESOURCE_TYPE_SCALING_GROUP = 'SCALING_GROUP';
    const SCALING_RESOURCE_TYPE_BANDWIDTH = 'BANDWIDTH';
    const TYPE_ADD = 'ADD';
    const TYPE_REMOVE = 'REMOVE';
    const TYPE_SET = 'SET';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_EXECUTING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExecuteTypeAllowableValues()
    {
        return [
            self::EXECUTE_TYPE_SCHEDULE,
            self::EXECUTE_TYPE_RECURRENCE,
            self::EXECUTE_TYPE_ALARM,
            self::EXECUTE_TYPE_MANUAL,
        ];
    }

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
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ADD,
            self::TYPE_REMOVE,
            self::TYPE_SET,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['executeType'] = isset($data['executeType']) ? $data['executeType'] : null;
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['scalingPolicyId'] = isset($data['scalingPolicyId']) ? $data['scalingPolicyId'] : null;
        $this->container['scalingResourceType'] = isset($data['scalingResourceType']) ? $data['scalingResourceType'] : null;
        $this->container['scalingResourceId'] = isset($data['scalingResourceId']) ? $data['scalingResourceId'] : null;
        $this->container['oldValue'] = isset($data['oldValue']) ? $data['oldValue'] : null;
        $this->container['desireValue'] = isset($data['desireValue']) ? $data['desireValue'] : null;
        $this->container['limitValue'] = isset($data['limitValue']) ? $data['limitValue'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['jobRecords'] = isset($data['jobRecords']) ? $data['jobRecords'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getExecuteTypeAllowableValues();
                if (!is_null($this->container['executeType']) && !in_array($this->container['executeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'executeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['id']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['scalingPolicyId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingPolicyId'])) {
                $invalidProperties[] = "invalid value for 'scalingPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getScalingResourceTypeAllowableValues();
                if (!is_null($this->container['scalingResourceType']) && !in_array($this->container['scalingResourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingResourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['scalingResourceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingResourceId'])) {
                $invalidProperties[] = "invalid value for 'scalingResourceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
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
    * Gets status
    *  策略执行状态：SUCCESS：成功。FAIL：失败。EXECUTING：执行中
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
    * @param string|null $status 策略执行状态：SUCCESS：成功。FAIL：失败。EXECUTING：执行中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failedReason
    *  策略执行失败原因。
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason 策略执行失败原因。
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets executeType
    *  策略执行类型：SCHEDULE：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动警告（告警）。MANUAL：手动触发
    *
    * @return string|null
    */
    public function getExecuteType()
    {
        return $this->container['executeType'];
    }

    /**
    * Sets executeType
    *
    * @param string|null $executeType 策略执行类型：SCHEDULE：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动警告（告警）。MANUAL：手动触发
    *
    * @return $this
    */
    public function setExecuteType($executeType)
    {
        $this->container['executeType'] = $executeType;
        return $this;
    }

    /**
    * Gets executeTime
    *  策略执行时间，遵循UTC时间。
    *
    * @return string|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param string|null $executeTime 策略执行时间，遵循UTC时间。
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
        return $this;
    }

    /**
    * Gets id
    *  策略执行日志ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 策略执行日志ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户id。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户id。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
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
    * Gets scalingResourceType
    *  伸缩资源类型：伸缩组：SCALING_GROUP 带宽：BANDWIDTH
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
    * @param string|null $scalingResourceType 伸缩资源类型：伸缩组：SCALING_GROUP 带宽：BANDWIDTH
    *
    * @return $this
    */
    public function setScalingResourceType($scalingResourceType)
    {
        $this->container['scalingResourceType'] = $scalingResourceType;
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
    * Gets oldValue
    *  伸缩原始值。
    *
    * @return string|null
    */
    public function getOldValue()
    {
        return $this->container['oldValue'];
    }

    /**
    * Sets oldValue
    *
    * @param string|null $oldValue 伸缩原始值。
    *
    * @return $this
    */
    public function setOldValue($oldValue)
    {
        $this->container['oldValue'] = $oldValue;
        return $this;
    }

    /**
    * Gets desireValue
    *  伸缩目标值。
    *
    * @return string|null
    */
    public function getDesireValue()
    {
        return $this->container['desireValue'];
    }

    /**
    * Sets desireValue
    *
    * @param string|null $desireValue 伸缩目标值。
    *
    * @return $this
    */
    public function setDesireValue($desireValue)
    {
        $this->container['desireValue'] = $desireValue;
        return $this;
    }

    /**
    * Gets limitValue
    *  操作限制。当scaling_resource_type为BANDWIDTH时，且operation不为SET时，limit_value生效，单位为Mbit/s。此时，当operation为ADD时，limit_value表示最高带宽限制；当operation为REDUCE时，limit_value表示最低带宽限制。
    *
    * @return string|null
    */
    public function getLimitValue()
    {
        return $this->container['limitValue'];
    }

    /**
    * Sets limitValue
    *
    * @param string|null $limitValue 操作限制。当scaling_resource_type为BANDWIDTH时，且operation不为SET时，limit_value生效，单位为Mbit/s。此时，当operation为ADD时，limit_value表示最高带宽限制；当operation为REDUCE时，limit_value表示最低带宽限制。
    *
    * @return $this
    */
    public function setLimitValue($limitValue)
    {
        $this->container['limitValue'] = $limitValue;
        return $this;
    }

    /**
    * Gets type
    *  策略执行任务类型。ADD：添加。REMOVE：减少。SET：设置为
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
    * @param string|null $type 策略执行任务类型。ADD：添加。REMOVE：减少。SET：设置为
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets jobRecords
    *  策略执行动作包含的具体任务
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\JobRecords[]|null
    */
    public function getJobRecords()
    {
        return $this->container['jobRecords'];
    }

    /**
    * Sets jobRecords
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\JobRecords[]|null $jobRecords 策略执行动作包含的具体任务
    *
    * @return $this
    */
    public function setJobRecords($jobRecords)
    {
        $this->container['jobRecords'] = $jobRecords;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\EipMetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\EipMetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
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

