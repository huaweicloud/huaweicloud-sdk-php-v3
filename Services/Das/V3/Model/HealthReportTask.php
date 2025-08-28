<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  报告ID
    * instanceId  实例ID
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * reportStatus  诊断状态
    * riskCount  风险点数量
    * origin  触发源
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'instanceId' => 'string',
            'createAt' => 'int',
            'reportStatus' => 'string',
            'riskCount' => 'int',
            'origin' => 'string',
            'startAt' => 'int',
            'endAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  报告ID
    * instanceId  实例ID
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * reportStatus  诊断状态
    * riskCount  风险点数量
    * origin  触发源
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'instanceId' => null,
        'createAt' => 'int64',
        'reportStatus' => null,
        'riskCount' => 'int32',
        'origin' => null,
        'startAt' => 'int64',
        'endAt' => 'int64'
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
    * taskId  报告ID
    * instanceId  实例ID
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * reportStatus  诊断状态
    * riskCount  风险点数量
    * origin  触发源
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'instanceId' => 'instance_id',
            'createAt' => 'create_at',
            'reportStatus' => 'report_status',
            'riskCount' => 'risk_count',
            'origin' => 'origin',
            'startAt' => 'start_at',
            'endAt' => 'end_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  报告ID
    * instanceId  实例ID
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * reportStatus  诊断状态
    * riskCount  风险点数量
    * origin  触发源
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'instanceId' => 'setInstanceId',
            'createAt' => 'setCreateAt',
            'reportStatus' => 'setReportStatus',
            'riskCount' => 'setRiskCount',
            'origin' => 'setOrigin',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  报告ID
    * instanceId  实例ID
    * createAt  创建时间（Unix timestamp），单位：毫秒。
    * reportStatus  诊断状态
    * riskCount  风险点数量
    * origin  触发源
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'instanceId' => 'getInstanceId',
            'createAt' => 'getCreateAt',
            'reportStatus' => 'getReportStatus',
            'riskCount' => 'getRiskCount',
            'origin' => 'getOrigin',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['reportStatus'] = isset($data['reportStatus']) ? $data['reportStatus'] : null;
        $this->container['riskCount'] = isset($data['riskCount']) ? $data['riskCount'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['createAt'] === null) {
            $invalidProperties[] = "'createAt' can't be null";
        }
        if ($this->container['reportStatus'] === null) {
            $invalidProperties[] = "'reportStatus' can't be null";
        }
        if ($this->container['riskCount'] === null) {
            $invalidProperties[] = "'riskCount' can't be null";
        }
        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
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
    * Gets taskId
    *  报告ID
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 报告ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int $createAt 创建时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets reportStatus
    *  诊断状态
    *
    * @return string
    */
    public function getReportStatus()
    {
        return $this->container['reportStatus'];
    }

    /**
    * Sets reportStatus
    *
    * @param string $reportStatus 诊断状态
    *
    * @return $this
    */
    public function setReportStatus($reportStatus)
    {
        $this->container['reportStatus'] = $reportStatus;
        return $this;
    }

    /**
    * Gets riskCount
    *  风险点数量
    *
    * @return int
    */
    public function getRiskCount()
    {
        return $this->container['riskCount'];
    }

    /**
    * Sets riskCount
    *
    * @param int $riskCount 风险点数量
    *
    * @return $this
    */
    public function setRiskCount($riskCount)
    {
        $this->container['riskCount'] = $riskCount;
        return $this;
    }

    /**
    * Gets origin
    *  触发源
    *
    * @return string
    */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
    * Sets origin
    *
    * @param string $origin 触发源
    *
    * @return $this
    */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;
        return $this;
    }

    /**
    * Gets startAt
    *  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
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

