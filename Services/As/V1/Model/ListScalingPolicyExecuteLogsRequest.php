<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScalingPolicyExecuteLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScalingPolicyExecuteLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingPolicyId  伸缩策略ID。
    * logId  日志ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP。带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * executeType  策略执行类型：SCHEDULED：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动触发（告警）。MANUAL：手动触发。
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingPolicyId' => 'string',
            'logId' => 'string',
            'scalingResourceType' => 'string',
            'scalingResourceId' => 'string',
            'executeType' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'startNumber' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingPolicyId  伸缩策略ID。
    * logId  日志ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP。带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * executeType  策略执行类型：SCHEDULED：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动触发（告警）。MANUAL：手动触发。
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingPolicyId' => null,
        'logId' => null,
        'scalingResourceType' => null,
        'scalingResourceId' => null,
        'executeType' => null,
        'startTime' => null,
        'endTime' => null,
        'startNumber' => 'int32',
        'limit' => null
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
    * scalingPolicyId  伸缩策略ID。
    * logId  日志ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP。带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * executeType  策略执行类型：SCHEDULED：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动触发（告警）。MANUAL：手动触发。
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingPolicyId' => 'scaling_policy_id',
            'logId' => 'log_id',
            'scalingResourceType' => 'scaling_resource_type',
            'scalingResourceId' => 'scaling_resource_id',
            'executeType' => 'execute_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'startNumber' => 'start_number',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingPolicyId  伸缩策略ID。
    * logId  日志ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP。带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * executeType  策略执行类型：SCHEDULED：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动触发（告警）。MANUAL：手动触发。
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingPolicyId' => 'setScalingPolicyId',
            'logId' => 'setLogId',
            'scalingResourceType' => 'setScalingResourceType',
            'scalingResourceId' => 'setScalingResourceId',
            'executeType' => 'setExecuteType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'startNumber' => 'setStartNumber',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingPolicyId  伸缩策略ID。
    * logId  日志ID。
    * scalingResourceType  伸缩资源类型：伸缩组：SCALING_GROUP。带宽：BANDWIDTH
    * scalingResourceId  伸缩资源ID。
    * executeType  策略执行类型：SCHEDULED：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动触发（告警）。MANUAL：手动触发。
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingPolicyId' => 'getScalingPolicyId',
            'logId' => 'getLogId',
            'scalingResourceType' => 'getScalingResourceType',
            'scalingResourceId' => 'getScalingResourceId',
            'executeType' => 'getExecuteType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
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
    const SCALING_RESOURCE_TYPE_SCALING_GROUP = 'SCALING_GROUP';
    const SCALING_RESOURCE_TYPE_BANDWIDTH = 'BANDWIDTH';
    const EXECUTE_TYPE_SCHEDULED = 'SCHEDULED';
    const EXECUTE_TYPE_RECURRENCE = 'RECURRENCE';
    const EXECUTE_TYPE_ALARM = 'ALARM';
    const EXECUTE_TYPE_MANUAL = 'MANUAL';
    

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
    public function getExecuteTypeAllowableValues()
    {
        return [
            self::EXECUTE_TYPE_SCHEDULED,
            self::EXECUTE_TYPE_RECURRENCE,
            self::EXECUTE_TYPE_ALARM,
            self::EXECUTE_TYPE_MANUAL,
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
        $this->container['scalingPolicyId'] = isset($data['scalingPolicyId']) ? $data['scalingPolicyId'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['scalingResourceType'] = isset($data['scalingResourceType']) ? $data['scalingResourceType'] : null;
        $this->container['scalingResourceId'] = isset($data['scalingResourceId']) ? $data['scalingResourceId'] : null;
        $this->container['executeType'] = isset($data['executeType']) ? $data['executeType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['startNumber'] = isset($data['startNumber']) ? $data['startNumber'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 20;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scalingPolicyId'] === null) {
            $invalidProperties[] = "'scalingPolicyId' can't be null";
        }
            if (!is_null($this->container['logId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['logId'])) {
                $invalidProperties[] = "invalid value for 'logId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
            $allowedValues = $this->getExecuteTypeAllowableValues();
                if (!is_null($this->container['executeType']) && !in_array($this->container['executeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'executeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
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
    * Gets scalingPolicyId
    *  伸缩策略ID。
    *
    * @return string
    */
    public function getScalingPolicyId()
    {
        return $this->container['scalingPolicyId'];
    }

    /**
    * Sets scalingPolicyId
    *
    * @param string $scalingPolicyId 伸缩策略ID。
    *
    * @return $this
    */
    public function setScalingPolicyId($scalingPolicyId)
    {
        $this->container['scalingPolicyId'] = $scalingPolicyId;
        return $this;
    }

    /**
    * Gets logId
    *  日志ID。
    *
    * @return string|null
    */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
    * Sets logId
    *
    * @param string|null $logId 日志ID。
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets scalingResourceType
    *  伸缩资源类型：伸缩组：SCALING_GROUP。带宽：BANDWIDTH
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
    * @param string|null $scalingResourceType 伸缩资源类型：伸缩组：SCALING_GROUP。带宽：BANDWIDTH
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
    * Gets executeType
    *  策略执行类型：SCHEDULED：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动触发（告警）。MANUAL：手动触发。
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
    * @param string|null $executeType 策略执行类型：SCHEDULED：自动触发（定时）。RECURRENCE：自动触发（周期）。ALARM：自动触发（告警）。MANUAL：手动触发。
    *
    * @return $this
    */
    public function setExecuteType($executeType)
    {
        $this->container['executeType'] = $executeType;
        return $this;
    }

    /**
    * Gets startTime
    *  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
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
    * @param string|null $startTime 查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
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
    * @param string|null $endTime 查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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
    *  查询记录数，默认20，最大100。
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
    * @param int|null $limit 查询记录数，默认20，最大100。
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

