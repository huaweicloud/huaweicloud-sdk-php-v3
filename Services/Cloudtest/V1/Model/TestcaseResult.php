<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestcaseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestcaseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executeResultId  结果
    * executeStatus  测试用例状态
    * failureCause  失败原因
    * taskId  任务id
    * planId  测试计划id
    * startTime  开始时间
    * endTime  结束时间
    * executorId  执行测试用例用户id
    * executorName  执行测试用例用户name
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executeResultId' => 'string',
            'executeStatus' => 'string',
            'failureCause' => 'string',
            'taskId' => 'string',
            'planId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'executorId' => 'string',
            'executorName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executeResultId  结果
    * executeStatus  测试用例状态
    * failureCause  失败原因
    * taskId  任务id
    * planId  测试计划id
    * startTime  开始时间
    * endTime  结束时间
    * executorId  执行测试用例用户id
    * executorName  执行测试用例用户name
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executeResultId' => null,
        'executeStatus' => null,
        'failureCause' => null,
        'taskId' => null,
        'planId' => null,
        'startTime' => null,
        'endTime' => null,
        'executorId' => null,
        'executorName' => null
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
    * executeResultId  结果
    * executeStatus  测试用例状态
    * failureCause  失败原因
    * taskId  任务id
    * planId  测试计划id
    * startTime  开始时间
    * endTime  结束时间
    * executorId  执行测试用例用户id
    * executorName  执行测试用例用户name
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executeResultId' => 'execute_result_id',
            'executeStatus' => 'execute_status',
            'failureCause' => 'failure_cause',
            'taskId' => 'task_id',
            'planId' => 'plan_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'executorId' => 'executor_id',
            'executorName' => 'executor_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executeResultId  结果
    * executeStatus  测试用例状态
    * failureCause  失败原因
    * taskId  任务id
    * planId  测试计划id
    * startTime  开始时间
    * endTime  结束时间
    * executorId  执行测试用例用户id
    * executorName  执行测试用例用户name
    *
    * @var string[]
    */
    protected static $setters = [
            'executeResultId' => 'setExecuteResultId',
            'executeStatus' => 'setExecuteStatus',
            'failureCause' => 'setFailureCause',
            'taskId' => 'setTaskId',
            'planId' => 'setPlanId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'executorId' => 'setExecutorId',
            'executorName' => 'setExecutorName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executeResultId  结果
    * executeStatus  测试用例状态
    * failureCause  失败原因
    * taskId  任务id
    * planId  测试计划id
    * startTime  开始时间
    * endTime  结束时间
    * executorId  执行测试用例用户id
    * executorName  执行测试用例用户name
    *
    * @var string[]
    */
    protected static $getters = [
            'executeResultId' => 'getExecuteResultId',
            'executeStatus' => 'getExecuteStatus',
            'failureCause' => 'getFailureCause',
            'taskId' => 'getTaskId',
            'planId' => 'getPlanId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'executorId' => 'getExecutorId',
            'executorName' => 'getExecutorName'
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
        $this->container['executeResultId'] = isset($data['executeResultId']) ? $data['executeResultId'] : null;
        $this->container['executeStatus'] = isset($data['executeStatus']) ? $data['executeStatus'] : null;
        $this->container['failureCause'] = isset($data['failureCause']) ? $data['failureCause'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['executorId'] = isset($data['executorId']) ? $data['executorId'] : null;
        $this->container['executorName'] = isset($data['executorName']) ? $data['executorName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['executeResultId']) && (mb_strlen($this->container['executeResultId']) > 3)) {
                $invalidProperties[] = "invalid value for 'executeResultId', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['executeResultId']) && (mb_strlen($this->container['executeResultId']) < 0)) {
                $invalidProperties[] = "invalid value for 'executeResultId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executeStatus']) && (mb_strlen($this->container['executeStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'executeStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['executeStatus']) && (mb_strlen($this->container['executeStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'executeStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failureCause']) && (mb_strlen($this->container['failureCause']) > 10000)) {
                $invalidProperties[] = "invalid value for 'failureCause', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['failureCause']) && (mb_strlen($this->container['failureCause']) < 0)) {
                $invalidProperties[] = "invalid value for 'failureCause', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
            if (!is_null($this->container['planId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['planId'])) {
                $invalidProperties[] = "invalid value for 'planId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executorId']) && (mb_strlen($this->container['executorId']) > 32)) {
                $invalidProperties[] = "invalid value for 'executorId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['executorId']) && (mb_strlen($this->container['executorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'executorId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executorName']) && (mb_strlen($this->container['executorName']) > 32)) {
                $invalidProperties[] = "invalid value for 'executorName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['executorName']) && (mb_strlen($this->container['executorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'executorName', the character length must be bigger than or equal to 1.";
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
    * Gets executeResultId
    *  结果
    *
    * @return string|null
    */
    public function getExecuteResultId()
    {
        return $this->container['executeResultId'];
    }

    /**
    * Sets executeResultId
    *
    * @param string|null $executeResultId 结果
    *
    * @return $this
    */
    public function setExecuteResultId($executeResultId)
    {
        $this->container['executeResultId'] = $executeResultId;
        return $this;
    }

    /**
    * Gets executeStatus
    *  测试用例状态
    *
    * @return string|null
    */
    public function getExecuteStatus()
    {
        return $this->container['executeStatus'];
    }

    /**
    * Sets executeStatus
    *
    * @param string|null $executeStatus 测试用例状态
    *
    * @return $this
    */
    public function setExecuteStatus($executeStatus)
    {
        $this->container['executeStatus'] = $executeStatus;
        return $this;
    }

    /**
    * Gets failureCause
    *  失败原因
    *
    * @return string|null
    */
    public function getFailureCause()
    {
        return $this->container['failureCause'];
    }

    /**
    * Sets failureCause
    *
    * @param string|null $failureCause 失败原因
    *
    * @return $this
    */
    public function setFailureCause($failureCause)
    {
        $this->container['failureCause'] = $failureCause;
        return $this;
    }

    /**
    * Gets taskId
    *  任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets planId
    *  测试计划id
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId 测试计划id
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param string|null $startTime 开始时间
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
    *  结束时间
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
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets executorId
    *  执行测试用例用户id
    *
    * @return string|null
    */
    public function getExecutorId()
    {
        return $this->container['executorId'];
    }

    /**
    * Sets executorId
    *
    * @param string|null $executorId 执行测试用例用户id
    *
    * @return $this
    */
    public function setExecutorId($executorId)
    {
        $this->container['executorId'] = $executorId;
        return $this;
    }

    /**
    * Gets executorName
    *  执行测试用例用户name
    *
    * @return string|null
    */
    public function getExecutorName()
    {
        return $this->container['executorName'];
    }

    /**
    * Sets executorName
    *
    * @param string|null $executorName 执行测试用例用户name
    *
    * @return $this
    */
    public function setExecutorName($executorName)
    {
        $this->container['executorName'] = $executorName;
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

