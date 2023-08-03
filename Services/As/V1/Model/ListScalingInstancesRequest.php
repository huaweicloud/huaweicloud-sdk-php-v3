<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScalingInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScalingInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingGroupId  伸缩组ID。
    * lifeCycleState  实例在伸缩组中的生命周期状态：INSERVICE： 正在使用。PENDING：正在加入伸缩组。REMOVING：正在移出伸缩组。PENDING_WAIT：正在加入伸缩组：等待。REMOVING_WAIT：正在移出伸缩组：等待。
    * healthStatus  实例健康状态：INITIALIZING：初始化。NORMAL：正常。ERROR：异常
    * protectFromScalingDown  实例保护状态：true：已设置实例保护。false：未设置实例保护。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询的记录条数，默认为20。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingGroupId' => 'string',
            'lifeCycleState' => 'string',
            'healthStatus' => 'string',
            'protectFromScalingDown' => 'string',
            'startNumber' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingGroupId  伸缩组ID。
    * lifeCycleState  实例在伸缩组中的生命周期状态：INSERVICE： 正在使用。PENDING：正在加入伸缩组。REMOVING：正在移出伸缩组。PENDING_WAIT：正在加入伸缩组：等待。REMOVING_WAIT：正在移出伸缩组：等待。
    * healthStatus  实例健康状态：INITIALIZING：初始化。NORMAL：正常。ERROR：异常
    * protectFromScalingDown  实例保护状态：true：已设置实例保护。false：未设置实例保护。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询的记录条数，默认为20。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingGroupId' => null,
        'lifeCycleState' => null,
        'healthStatus' => null,
        'protectFromScalingDown' => null,
        'startNumber' => 'int32',
        'limit' => 'int32'
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
    * scalingGroupId  伸缩组ID。
    * lifeCycleState  实例在伸缩组中的生命周期状态：INSERVICE： 正在使用。PENDING：正在加入伸缩组。REMOVING：正在移出伸缩组。PENDING_WAIT：正在加入伸缩组：等待。REMOVING_WAIT：正在移出伸缩组：等待。
    * healthStatus  实例健康状态：INITIALIZING：初始化。NORMAL：正常。ERROR：异常
    * protectFromScalingDown  实例保护状态：true：已设置实例保护。false：未设置实例保护。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询的记录条数，默认为20。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingGroupId' => 'scaling_group_id',
            'lifeCycleState' => 'life_cycle_state',
            'healthStatus' => 'health_status',
            'protectFromScalingDown' => 'protect_from_scaling_down',
            'startNumber' => 'start_number',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingGroupId  伸缩组ID。
    * lifeCycleState  实例在伸缩组中的生命周期状态：INSERVICE： 正在使用。PENDING：正在加入伸缩组。REMOVING：正在移出伸缩组。PENDING_WAIT：正在加入伸缩组：等待。REMOVING_WAIT：正在移出伸缩组：等待。
    * healthStatus  实例健康状态：INITIALIZING：初始化。NORMAL：正常。ERROR：异常
    * protectFromScalingDown  实例保护状态：true：已设置实例保护。false：未设置实例保护。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询的记录条数，默认为20。
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingGroupId' => 'setScalingGroupId',
            'lifeCycleState' => 'setLifeCycleState',
            'healthStatus' => 'setHealthStatus',
            'protectFromScalingDown' => 'setProtectFromScalingDown',
            'startNumber' => 'setStartNumber',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingGroupId  伸缩组ID。
    * lifeCycleState  实例在伸缩组中的生命周期状态：INSERVICE： 正在使用。PENDING：正在加入伸缩组。REMOVING：正在移出伸缩组。PENDING_WAIT：正在加入伸缩组：等待。REMOVING_WAIT：正在移出伸缩组：等待。
    * healthStatus  实例健康状态：INITIALIZING：初始化。NORMAL：正常。ERROR：异常
    * protectFromScalingDown  实例保护状态：true：已设置实例保护。false：未设置实例保护。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询的记录条数，默认为20。
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingGroupId' => 'getScalingGroupId',
            'lifeCycleState' => 'getLifeCycleState',
            'healthStatus' => 'getHealthStatus',
            'protectFromScalingDown' => 'getProtectFromScalingDown',
            'startNumber' => 'getStartNumber',
            'limit' => 'getLimit'
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
    const LIFE_CYCLE_STATE_STANDBY = 'STANDBY';
    const LIFE_CYCLE_STATE_ENTERING_STANDBY = 'ENTERING_STANDBY';
    const HEALTH_STATUS_INITIALIZING = 'INITIALIZING';
    const HEALTH_STATUS_NORMAL = 'NORMAL';
    const HEALTH_STATUS_ERROR = 'ERROR';
    const PROTECT_FROM_SCALING_DOWN_TRUE = 'true';
    const PROTECT_FROM_SCALING_DOWN_FALSE = 'false';
    

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
            self::LIFE_CYCLE_STATE_STANDBY,
            self::LIFE_CYCLE_STATE_ENTERING_STANDBY,
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
            self::HEALTH_STATUS_INITIALIZING,
            self::HEALTH_STATUS_NORMAL,
            self::HEALTH_STATUS_ERROR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectFromScalingDownAllowableValues()
    {
        return [
            self::PROTECT_FROM_SCALING_DOWN_TRUE,
            self::PROTECT_FROM_SCALING_DOWN_FALSE,
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
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
        $this->container['lifeCycleState'] = isset($data['lifeCycleState']) ? $data['lifeCycleState'] : null;
        $this->container['healthStatus'] = isset($data['healthStatus']) ? $data['healthStatus'] : null;
        $this->container['protectFromScalingDown'] = isset($data['protectFromScalingDown']) ? $data['protectFromScalingDown'] : null;
        $this->container['startNumber'] = isset($data['startNumber']) ? $data['startNumber'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scalingGroupId'] === null) {
            $invalidProperties[] = "'scalingGroupId' can't be null";
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

            $allowedValues = $this->getProtectFromScalingDownAllowableValues();
                if (!is_null($this->container['protectFromScalingDown']) && !in_array($this->container['protectFromScalingDown'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectFromScalingDown', must be one of '%s'",
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
    * Gets scalingGroupId
    *  伸缩组ID。
    *
    * @return string
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string $scalingGroupId 伸缩组ID。
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
        return $this;
    }

    /**
    * Gets lifeCycleState
    *  实例在伸缩组中的生命周期状态：INSERVICE： 正在使用。PENDING：正在加入伸缩组。REMOVING：正在移出伸缩组。PENDING_WAIT：正在加入伸缩组：等待。REMOVING_WAIT：正在移出伸缩组：等待。
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
    * @param string|null $lifeCycleState 实例在伸缩组中的生命周期状态：INSERVICE： 正在使用。PENDING：正在加入伸缩组。REMOVING：正在移出伸缩组。PENDING_WAIT：正在加入伸缩组：等待。REMOVING_WAIT：正在移出伸缩组：等待。
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
    *  实例健康状态：INITIALIZING：初始化。NORMAL：正常。ERROR：异常
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
    * @param string|null $healthStatus 实例健康状态：INITIALIZING：初始化。NORMAL：正常。ERROR：异常
    *
    * @return $this
    */
    public function setHealthStatus($healthStatus)
    {
        $this->container['healthStatus'] = $healthStatus;
        return $this;
    }

    /**
    * Gets protectFromScalingDown
    *  实例保护状态：true：已设置实例保护。false：未设置实例保护。
    *
    * @return string|null
    */
    public function getProtectFromScalingDown()
    {
        return $this->container['protectFromScalingDown'];
    }

    /**
    * Sets protectFromScalingDown
    *
    * @param string|null $protectFromScalingDown 实例保护状态：true：已设置实例保护。false：未设置实例保护。
    *
    * @return $this
    */
    public function setProtectFromScalingDown($protectFromScalingDown)
    {
        $this->container['protectFromScalingDown'] = $protectFromScalingDown;
        return $this;
    }

    /**
    * Gets startNumber
    *  查询的起始行号，默认为0。
    *
    * @return int|null
    */
    public function getStartNumber()
    {
        return $this->container['startNumber'];
    }

    /**
    * Sets startNumber
    *
    * @param int|null $startNumber 查询的起始行号，默认为0。
    *
    * @return $this
    */
    public function setStartNumber($startNumber)
    {
        $this->container['startNumber'] = $startNumber;
        return $this;
    }

    /**
    * Gets limit
    *  查询的记录条数，默认为20。
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
    * @param int|null $limit 查询的记录条数，默认为20。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

