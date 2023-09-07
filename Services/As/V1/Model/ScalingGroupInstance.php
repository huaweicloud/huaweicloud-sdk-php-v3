<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingGroupInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingGroupInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingGroupId  实例所在伸缩组ID。
    * scalingGroupName  实例所在伸缩组名称。
    * lifeCycleState  实例在伸缩组中的生命周期状态：  - INSERVICE：已启用 - PENDING：正在加入伸缩组 - PENDING_WAIT：等待（正在加入伸缩组） - REMOVING：正在移出伸缩组 - REMOVING_WAIT：等待（正在移出伸缩组） - STANDBY：已备用 - ENTERING_STANDBY：进入备用状态
    * healthStatus  实例健康状态:INITAILIZING:初始化；NORMAL：正常；ERROR：错误。
    * scalingConfigurationName  伸缩配置名称。如果返回为空，表示伸缩配置已经被删除。如果返回MANNUAL_ADD，表示实例为手动加入。
    * scalingConfigurationId  伸缩配置ID。
    * createTime  实例加入伸缩组的时间，遵循UTC时间。
    * protectFromScalingDown  实例的实例保护属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'scalingGroupId' => 'string',
            'scalingGroupName' => 'string',
            'lifeCycleState' => 'string',
            'healthStatus' => 'string',
            'scalingConfigurationName' => 'string',
            'scalingConfigurationId' => 'string',
            'createTime' => '\DateTime',
            'protectFromScalingDown' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingGroupId  实例所在伸缩组ID。
    * scalingGroupName  实例所在伸缩组名称。
    * lifeCycleState  实例在伸缩组中的生命周期状态：  - INSERVICE：已启用 - PENDING：正在加入伸缩组 - PENDING_WAIT：等待（正在加入伸缩组） - REMOVING：正在移出伸缩组 - REMOVING_WAIT：等待（正在移出伸缩组） - STANDBY：已备用 - ENTERING_STANDBY：进入备用状态
    * healthStatus  实例健康状态:INITAILIZING:初始化；NORMAL：正常；ERROR：错误。
    * scalingConfigurationName  伸缩配置名称。如果返回为空，表示伸缩配置已经被删除。如果返回MANNUAL_ADD，表示实例为手动加入。
    * scalingConfigurationId  伸缩配置ID。
    * createTime  实例加入伸缩组的时间，遵循UTC时间。
    * protectFromScalingDown  实例的实例保护属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'scalingGroupId' => null,
        'scalingGroupName' => null,
        'lifeCycleState' => null,
        'healthStatus' => null,
        'scalingConfigurationName' => null,
        'scalingConfigurationId' => null,
        'createTime' => 'date-time',
        'protectFromScalingDown' => null
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
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingGroupId  实例所在伸缩组ID。
    * scalingGroupName  实例所在伸缩组名称。
    * lifeCycleState  实例在伸缩组中的生命周期状态：  - INSERVICE：已启用 - PENDING：正在加入伸缩组 - PENDING_WAIT：等待（正在加入伸缩组） - REMOVING：正在移出伸缩组 - REMOVING_WAIT：等待（正在移出伸缩组） - STANDBY：已备用 - ENTERING_STANDBY：进入备用状态
    * healthStatus  实例健康状态:INITAILIZING:初始化；NORMAL：正常；ERROR：错误。
    * scalingConfigurationName  伸缩配置名称。如果返回为空，表示伸缩配置已经被删除。如果返回MANNUAL_ADD，表示实例为手动加入。
    * scalingConfigurationId  伸缩配置ID。
    * createTime  实例加入伸缩组的时间，遵循UTC时间。
    * protectFromScalingDown  实例的实例保护属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'scalingGroupId' => 'scaling_group_id',
            'scalingGroupName' => 'scaling_group_name',
            'lifeCycleState' => 'life_cycle_state',
            'healthStatus' => 'health_status',
            'scalingConfigurationName' => 'scaling_configuration_name',
            'scalingConfigurationId' => 'scaling_configuration_id',
            'createTime' => 'create_time',
            'protectFromScalingDown' => 'protect_from_scaling_down'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingGroupId  实例所在伸缩组ID。
    * scalingGroupName  实例所在伸缩组名称。
    * lifeCycleState  实例在伸缩组中的生命周期状态：  - INSERVICE：已启用 - PENDING：正在加入伸缩组 - PENDING_WAIT：等待（正在加入伸缩组） - REMOVING：正在移出伸缩组 - REMOVING_WAIT：等待（正在移出伸缩组） - STANDBY：已备用 - ENTERING_STANDBY：进入备用状态
    * healthStatus  实例健康状态:INITAILIZING:初始化；NORMAL：正常；ERROR：错误。
    * scalingConfigurationName  伸缩配置名称。如果返回为空，表示伸缩配置已经被删除。如果返回MANNUAL_ADD，表示实例为手动加入。
    * scalingConfigurationId  伸缩配置ID。
    * createTime  实例加入伸缩组的时间，遵循UTC时间。
    * protectFromScalingDown  实例的实例保护属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'scalingGroupId' => 'setScalingGroupId',
            'scalingGroupName' => 'setScalingGroupName',
            'lifeCycleState' => 'setLifeCycleState',
            'healthStatus' => 'setHealthStatus',
            'scalingConfigurationName' => 'setScalingConfigurationName',
            'scalingConfigurationId' => 'setScalingConfigurationId',
            'createTime' => 'setCreateTime',
            'protectFromScalingDown' => 'setProtectFromScalingDown'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * instanceName  实例名称。
    * scalingGroupId  实例所在伸缩组ID。
    * scalingGroupName  实例所在伸缩组名称。
    * lifeCycleState  实例在伸缩组中的生命周期状态：  - INSERVICE：已启用 - PENDING：正在加入伸缩组 - PENDING_WAIT：等待（正在加入伸缩组） - REMOVING：正在移出伸缩组 - REMOVING_WAIT：等待（正在移出伸缩组） - STANDBY：已备用 - ENTERING_STANDBY：进入备用状态
    * healthStatus  实例健康状态:INITAILIZING:初始化；NORMAL：正常；ERROR：错误。
    * scalingConfigurationName  伸缩配置名称。如果返回为空，表示伸缩配置已经被删除。如果返回MANNUAL_ADD，表示实例为手动加入。
    * scalingConfigurationId  伸缩配置ID。
    * createTime  实例加入伸缩组的时间，遵循UTC时间。
    * protectFromScalingDown  实例的实例保护属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'scalingGroupId' => 'getScalingGroupId',
            'scalingGroupName' => 'getScalingGroupName',
            'lifeCycleState' => 'getLifeCycleState',
            'healthStatus' => 'getHealthStatus',
            'scalingConfigurationName' => 'getScalingConfigurationName',
            'scalingConfigurationId' => 'getScalingConfigurationId',
            'createTime' => 'getCreateTime',
            'protectFromScalingDown' => 'getProtectFromScalingDown'
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
    const LIFE_CYCLE_STATE_INSERVICE = 'INSERVICE';
    const LIFE_CYCLE_STATE_PENDING = 'PENDING';
    const LIFE_CYCLE_STATE_REMOVING = 'REMOVING';
    const LIFE_CYCLE_STATE_PENDING_WAIT = 'PENDING_WAIT';
    const LIFE_CYCLE_STATE_REMOVING_WAIT = 'REMOVING_WAIT';
    const HEALTH_STATUS_NORMAL = 'NORMAL';
    const HEALTH_STATUS_ERROR = 'ERROR';
    const HEALTH_STATUS_INITAILIZING = 'INITAILIZING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLifeCycleStateAllowableValues()
    {
        return [
            self::LIFE_CYCLE_STATE_INSERVICE,
            self::LIFE_CYCLE_STATE_PENDING,
            self::LIFE_CYCLE_STATE_REMOVING,
            self::LIFE_CYCLE_STATE_PENDING_WAIT,
            self::LIFE_CYCLE_STATE_REMOVING_WAIT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHealthStatusAllowableValues()
    {
        return [
            self::HEALTH_STATUS_NORMAL,
            self::HEALTH_STATUS_ERROR,
            self::HEALTH_STATUS_INITAILIZING,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
        $this->container['scalingGroupName'] = isset($data['scalingGroupName']) ? $data['scalingGroupName'] : null;
        $this->container['lifeCycleState'] = isset($data['lifeCycleState']) ? $data['lifeCycleState'] : null;
        $this->container['healthStatus'] = isset($data['healthStatus']) ? $data['healthStatus'] : null;
        $this->container['scalingConfigurationName'] = isset($data['scalingConfigurationName']) ? $data['scalingConfigurationName'] : null;
        $this->container['scalingConfigurationId'] = isset($data['scalingConfigurationId']) ? $data['scalingConfigurationId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['protectFromScalingDown'] = isset($data['protectFromScalingDown']) ? $data['protectFromScalingDown'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scalingGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingGroupId'])) {
                $invalidProperties[] = "invalid value for 'scalingGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getLifeCycleStateAllowableValues();
                if (!is_null($this->container['lifeCycleState']) && !in_array($this->container['lifeCycleState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lifeCycleState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getHealthStatusAllowableValues();
                if (!is_null($this->container['healthStatus']) && !in_array($this->container['healthStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'healthStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['scalingConfigurationName']) && (mb_strlen($this->container['scalingConfigurationName']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalingConfigurationName']) && (mb_strlen($this->container['scalingConfigurationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scalingConfigurationId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingConfigurationId'])) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets instanceId
    *  实例ID。
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
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets scalingGroupId
    *  实例所在伸缩组ID。
    *
    * @return string|null
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string|null $scalingGroupId 实例所在伸缩组ID。
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
        return $this;
    }

    /**
    * Gets scalingGroupName
    *  实例所在伸缩组名称。
    *
    * @return string|null
    */
    public function getScalingGroupName()
    {
        return $this->container['scalingGroupName'];
    }

    /**
    * Sets scalingGroupName
    *
    * @param string|null $scalingGroupName 实例所在伸缩组名称。
    *
    * @return $this
    */
    public function setScalingGroupName($scalingGroupName)
    {
        $this->container['scalingGroupName'] = $scalingGroupName;
        return $this;
    }

    /**
    * Gets lifeCycleState
    *  实例在伸缩组中的生命周期状态：  - INSERVICE：已启用 - PENDING：正在加入伸缩组 - PENDING_WAIT：等待（正在加入伸缩组） - REMOVING：正在移出伸缩组 - REMOVING_WAIT：等待（正在移出伸缩组） - STANDBY：已备用 - ENTERING_STANDBY：进入备用状态
    *
    * @return string|null
    */
    public function getLifeCycleState()
    {
        return $this->container['lifeCycleState'];
    }

    /**
    * Sets lifeCycleState
    *
    * @param string|null $lifeCycleState 实例在伸缩组中的生命周期状态：  - INSERVICE：已启用 - PENDING：正在加入伸缩组 - PENDING_WAIT：等待（正在加入伸缩组） - REMOVING：正在移出伸缩组 - REMOVING_WAIT：等待（正在移出伸缩组） - STANDBY：已备用 - ENTERING_STANDBY：进入备用状态
    *
    * @return $this
    */
    public function setLifeCycleState($lifeCycleState)
    {
        $this->container['lifeCycleState'] = $lifeCycleState;
        return $this;
    }

    /**
    * Gets healthStatus
    *  实例健康状态:INITAILIZING:初始化；NORMAL：正常；ERROR：错误。
    *
    * @return string|null
    */
    public function getHealthStatus()
    {
        return $this->container['healthStatus'];
    }

    /**
    * Sets healthStatus
    *
    * @param string|null $healthStatus 实例健康状态:INITAILIZING:初始化；NORMAL：正常；ERROR：错误。
    *
    * @return $this
    */
    public function setHealthStatus($healthStatus)
    {
        $this->container['healthStatus'] = $healthStatus;
        return $this;
    }

    /**
    * Gets scalingConfigurationName
    *  伸缩配置名称。如果返回为空，表示伸缩配置已经被删除。如果返回MANNUAL_ADD，表示实例为手动加入。
    *
    * @return string|null
    */
    public function getScalingConfigurationName()
    {
        return $this->container['scalingConfigurationName'];
    }

    /**
    * Sets scalingConfigurationName
    *
    * @param string|null $scalingConfigurationName 伸缩配置名称。如果返回为空，表示伸缩配置已经被删除。如果返回MANNUAL_ADD，表示实例为手动加入。
    *
    * @return $this
    */
    public function setScalingConfigurationName($scalingConfigurationName)
    {
        $this->container['scalingConfigurationName'] = $scalingConfigurationName;
        return $this;
    }

    /**
    * Gets scalingConfigurationId
    *  伸缩配置ID。
    *
    * @return string|null
    */
    public function getScalingConfigurationId()
    {
        return $this->container['scalingConfigurationId'];
    }

    /**
    * Sets scalingConfigurationId
    *
    * @param string|null $scalingConfigurationId 伸缩配置ID。
    *
    * @return $this
    */
    public function setScalingConfigurationId($scalingConfigurationId)
    {
        $this->container['scalingConfigurationId'] = $scalingConfigurationId;
        return $this;
    }

    /**
    * Gets createTime
    *  实例加入伸缩组的时间，遵循UTC时间。
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
    * @param \DateTime|null $createTime 实例加入伸缩组的时间，遵循UTC时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets protectFromScalingDown
    *  实例的实例保护属性。
    *
    * @return bool|null
    */
    public function getProtectFromScalingDown()
    {
        return $this->container['protectFromScalingDown'];
    }

    /**
    * Sets protectFromScalingDown
    *
    * @param bool|null $protectFromScalingDown 实例的实例保护属性。
    *
    * @return $this
    */
    public function setProtectFromScalingDown($protectFromScalingDown)
    {
        $this->container['protectFromScalingDown'] = $protectFromScalingDown;
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

