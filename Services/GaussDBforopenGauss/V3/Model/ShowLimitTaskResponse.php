<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLimitTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLimitTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskName  限流任务名传。
    * limitType  任务限流类型。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * taskRunningTime  限流任务已执行时间，单位秒。
    * limitCount  限流任务拦截次数。
    * ruleName  规则名。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * limitTaskRuleInfoList  限流任务列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskName' => 'string',
            'limitType' => 'string',
            'parallelSize' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'taskRunningTime' => 'int',
            'limitCount' => 'int',
            'ruleName' => 'string',
            'memoryUtilization' => 'int',
            'cpuUtilization' => 'int',
            'limitTaskRuleInfoList' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LimitTaskRuleInfoOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskName  限流任务名传。
    * limitType  任务限流类型。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * taskRunningTime  限流任务已执行时间，单位秒。
    * limitCount  限流任务拦截次数。
    * ruleName  规则名。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * limitTaskRuleInfoList  限流任务列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskName' => null,
        'limitType' => null,
        'parallelSize' => null,
        'startTime' => null,
        'endTime' => null,
        'taskRunningTime' => null,
        'limitCount' => null,
        'ruleName' => null,
        'memoryUtilization' => null,
        'cpuUtilization' => null,
        'limitTaskRuleInfoList' => null
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
    * taskName  限流任务名传。
    * limitType  任务限流类型。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * taskRunningTime  限流任务已执行时间，单位秒。
    * limitCount  限流任务拦截次数。
    * ruleName  规则名。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * limitTaskRuleInfoList  限流任务列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskName' => 'task_name',
            'limitType' => 'limit_type',
            'parallelSize' => 'parallel_size',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'taskRunningTime' => 'task_running_time',
            'limitCount' => 'limit_count',
            'ruleName' => 'rule_name',
            'memoryUtilization' => 'memory_utilization',
            'cpuUtilization' => 'cpu_utilization',
            'limitTaskRuleInfoList' => 'limit_task_rule_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskName  限流任务名传。
    * limitType  任务限流类型。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * taskRunningTime  限流任务已执行时间，单位秒。
    * limitCount  限流任务拦截次数。
    * ruleName  规则名。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * limitTaskRuleInfoList  限流任务列表
    *
    * @var string[]
    */
    protected static $setters = [
            'taskName' => 'setTaskName',
            'limitType' => 'setLimitType',
            'parallelSize' => 'setParallelSize',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'taskRunningTime' => 'setTaskRunningTime',
            'limitCount' => 'setLimitCount',
            'ruleName' => 'setRuleName',
            'memoryUtilization' => 'setMemoryUtilization',
            'cpuUtilization' => 'setCpuUtilization',
            'limitTaskRuleInfoList' => 'setLimitTaskRuleInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskName  限流任务名传。
    * limitType  任务限流类型。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * taskRunningTime  限流任务已执行时间，单位秒。
    * limitCount  限流任务拦截次数。
    * ruleName  规则名。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    * limitTaskRuleInfoList  限流任务列表
    *
    * @var string[]
    */
    protected static $getters = [
            'taskName' => 'getTaskName',
            'limitType' => 'getLimitType',
            'parallelSize' => 'getParallelSize',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'taskRunningTime' => 'getTaskRunningTime',
            'limitCount' => 'getLimitCount',
            'ruleName' => 'getRuleName',
            'memoryUtilization' => 'getMemoryUtilization',
            'cpuUtilization' => 'getCpuUtilization',
            'limitTaskRuleInfoList' => 'getLimitTaskRuleInfoList'
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
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['limitType'] = isset($data['limitType']) ? $data['limitType'] : null;
        $this->container['parallelSize'] = isset($data['parallelSize']) ? $data['parallelSize'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['taskRunningTime'] = isset($data['taskRunningTime']) ? $data['taskRunningTime'] : null;
        $this->container['limitCount'] = isset($data['limitCount']) ? $data['limitCount'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['memoryUtilization'] = isset($data['memoryUtilization']) ? $data['memoryUtilization'] : null;
        $this->container['cpuUtilization'] = isset($data['cpuUtilization']) ? $data['cpuUtilization'] : null;
        $this->container['limitTaskRuleInfoList'] = isset($data['limitTaskRuleInfoList']) ? $data['limitTaskRuleInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets taskName
    *  限流任务名传。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 限流任务名传。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets limitType
    *  任务限流类型。
    *
    * @return string|null
    */
    public function getLimitType()
    {
        return $this->container['limitType'];
    }

    /**
    * Sets limitType
    *
    * @param string|null $limitType 任务限流类型。
    *
    * @return $this
    */
    public function setLimitType($limitType)
    {
        $this->container['limitType'] = $limitType;
        return $this;
    }

    /**
    * Gets parallelSize
    *  并发数。
    *
    * @return int|null
    */
    public function getParallelSize()
    {
        return $this->container['parallelSize'];
    }

    /**
    * Sets parallelSize
    *
    * @param int|null $parallelSize 并发数。
    *
    * @return $this
    */
    public function setParallelSize($parallelSize)
    {
        $this->container['parallelSize'] = $parallelSize;
        return $this;
    }

    /**
    * Gets startTime
    *  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    * @param string|null $startTime 限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    *  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    * @param string|null $endTime 限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets taskRunningTime
    *  限流任务已执行时间，单位秒。
    *
    * @return int|null
    */
    public function getTaskRunningTime()
    {
        return $this->container['taskRunningTime'];
    }

    /**
    * Sets taskRunningTime
    *
    * @param int|null $taskRunningTime 限流任务已执行时间，单位秒。
    *
    * @return $this
    */
    public function setTaskRunningTime($taskRunningTime)
    {
        $this->container['taskRunningTime'] = $taskRunningTime;
        return $this;
    }

    /**
    * Gets limitCount
    *  限流任务拦截次数。
    *
    * @return int|null
    */
    public function getLimitCount()
    {
        return $this->container['limitCount'];
    }

    /**
    * Sets limitCount
    *
    * @param int|null $limitCount 限流任务拦截次数。
    *
    * @return $this
    */
    public function setLimitCount($limitCount)
    {
        $this->container['limitCount'] = $limitCount;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets memoryUtilization
    *  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    *
    * @return int|null
    */
    public function getMemoryUtilization()
    {
        return $this->container['memoryUtilization'];
    }

    /**
    * Sets memoryUtilization
    *
    * @param int|null $memoryUtilization 内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    *
    * @return $this
    */
    public function setMemoryUtilization($memoryUtilization)
    {
        $this->container['memoryUtilization'] = $memoryUtilization;
        return $this;
    }

    /**
    * Gets cpuUtilization
    *  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    *
    * @return int|null
    */
    public function getCpuUtilization()
    {
        return $this->container['cpuUtilization'];
    }

    /**
    * Sets cpuUtilization
    *
    * @param int|null $cpuUtilization cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且与请求参数相同。
    *
    * @return $this
    */
    public function setCpuUtilization($cpuUtilization)
    {
        $this->container['cpuUtilization'] = $cpuUtilization;
        return $this;
    }

    /**
    * Gets limitTaskRuleInfoList
    *  限流任务列表
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LimitTaskRuleInfoOption[]|null
    */
    public function getLimitTaskRuleInfoList()
    {
        return $this->container['limitTaskRuleInfoList'];
    }

    /**
    * Sets limitTaskRuleInfoList
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LimitTaskRuleInfoOption[]|null $limitTaskRuleInfoList 限流任务列表
    *
    * @return $this
    */
    public function setLimitTaskRuleInfoList($limitTaskRuleInfoList)
    {
        $this->container['limitTaskRuleInfoList'] = $limitTaskRuleInfoList;
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

