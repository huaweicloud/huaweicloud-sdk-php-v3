<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConditionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConditionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * expressionType  表达式类型。默认为common,事件触发剧本必填
    * conditions  触发条件。事件触发剧本必填
    * logics  条件逻辑组合。事件触发剧本必填
    * cron  Cron 表达式（定时任务）。定时触发剧本必填
    * scheduleType  定时重复类型(second--秒, hour--小时,day--天，week-周)。定时触发剧本必填
    * startType  剧本开始执行类型，IMMEDIATELY--创建完成立即执行, CUSTOM--自定义执行时间。定时触发剧本必填
    * endType  剧本结束执行类型，FOREVER--一直执行, CUSTOM--自定义结束时间。定时触发剧本必填
    * endTime  定时结束时间。定时触发剧本必填
    * repeatRange  执行时间段 2021-01-30T23:00:00Z+0800。定时触发剧本必填
    * onlyOnce  是否只执行一次。定时触发剧本必填
    * executionType  执行队列类型（PARALLEL-新任务与之前任务并行）。定时触发剧本必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expressionType' => 'string',
            'conditions' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ConditionItem[]',
            'logics' => 'string[]',
            'cron' => 'string',
            'scheduleType' => 'string',
            'startType' => 'string',
            'endType' => 'string',
            'endTime' => 'string',
            'repeatRange' => 'string',
            'onlyOnce' => 'bool',
            'executionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * expressionType  表达式类型。默认为common,事件触发剧本必填
    * conditions  触发条件。事件触发剧本必填
    * logics  条件逻辑组合。事件触发剧本必填
    * cron  Cron 表达式（定时任务）。定时触发剧本必填
    * scheduleType  定时重复类型(second--秒, hour--小时,day--天，week-周)。定时触发剧本必填
    * startType  剧本开始执行类型，IMMEDIATELY--创建完成立即执行, CUSTOM--自定义执行时间。定时触发剧本必填
    * endType  剧本结束执行类型，FOREVER--一直执行, CUSTOM--自定义结束时间。定时触发剧本必填
    * endTime  定时结束时间。定时触发剧本必填
    * repeatRange  执行时间段 2021-01-30T23:00:00Z+0800。定时触发剧本必填
    * onlyOnce  是否只执行一次。定时触发剧本必填
    * executionType  执行队列类型（PARALLEL-新任务与之前任务并行）。定时触发剧本必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expressionType' => null,
        'conditions' => null,
        'logics' => null,
        'cron' => null,
        'scheduleType' => null,
        'startType' => null,
        'endType' => null,
        'endTime' => null,
        'repeatRange' => null,
        'onlyOnce' => null,
        'executionType' => null
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
    * expressionType  表达式类型。默认为common,事件触发剧本必填
    * conditions  触发条件。事件触发剧本必填
    * logics  条件逻辑组合。事件触发剧本必填
    * cron  Cron 表达式（定时任务）。定时触发剧本必填
    * scheduleType  定时重复类型(second--秒, hour--小时,day--天，week-周)。定时触发剧本必填
    * startType  剧本开始执行类型，IMMEDIATELY--创建完成立即执行, CUSTOM--自定义执行时间。定时触发剧本必填
    * endType  剧本结束执行类型，FOREVER--一直执行, CUSTOM--自定义结束时间。定时触发剧本必填
    * endTime  定时结束时间。定时触发剧本必填
    * repeatRange  执行时间段 2021-01-30T23:00:00Z+0800。定时触发剧本必填
    * onlyOnce  是否只执行一次。定时触发剧本必填
    * executionType  执行队列类型（PARALLEL-新任务与之前任务并行）。定时触发剧本必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expressionType' => 'expression_type',
            'conditions' => 'conditions',
            'logics' => 'logics',
            'cron' => 'cron',
            'scheduleType' => 'schedule_type',
            'startType' => 'start_type',
            'endType' => 'end_type',
            'endTime' => 'end_time',
            'repeatRange' => 'repeat_range',
            'onlyOnce' => 'only_once',
            'executionType' => 'execution_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * expressionType  表达式类型。默认为common,事件触发剧本必填
    * conditions  触发条件。事件触发剧本必填
    * logics  条件逻辑组合。事件触发剧本必填
    * cron  Cron 表达式（定时任务）。定时触发剧本必填
    * scheduleType  定时重复类型(second--秒, hour--小时,day--天，week-周)。定时触发剧本必填
    * startType  剧本开始执行类型，IMMEDIATELY--创建完成立即执行, CUSTOM--自定义执行时间。定时触发剧本必填
    * endType  剧本结束执行类型，FOREVER--一直执行, CUSTOM--自定义结束时间。定时触发剧本必填
    * endTime  定时结束时间。定时触发剧本必填
    * repeatRange  执行时间段 2021-01-30T23:00:00Z+0800。定时触发剧本必填
    * onlyOnce  是否只执行一次。定时触发剧本必填
    * executionType  执行队列类型（PARALLEL-新任务与之前任务并行）。定时触发剧本必填
    *
    * @var string[]
    */
    protected static $setters = [
            'expressionType' => 'setExpressionType',
            'conditions' => 'setConditions',
            'logics' => 'setLogics',
            'cron' => 'setCron',
            'scheduleType' => 'setScheduleType',
            'startType' => 'setStartType',
            'endType' => 'setEndType',
            'endTime' => 'setEndTime',
            'repeatRange' => 'setRepeatRange',
            'onlyOnce' => 'setOnlyOnce',
            'executionType' => 'setExecutionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * expressionType  表达式类型。默认为common,事件触发剧本必填
    * conditions  触发条件。事件触发剧本必填
    * logics  条件逻辑组合。事件触发剧本必填
    * cron  Cron 表达式（定时任务）。定时触发剧本必填
    * scheduleType  定时重复类型(second--秒, hour--小时,day--天，week-周)。定时触发剧本必填
    * startType  剧本开始执行类型，IMMEDIATELY--创建完成立即执行, CUSTOM--自定义执行时间。定时触发剧本必填
    * endType  剧本结束执行类型，FOREVER--一直执行, CUSTOM--自定义结束时间。定时触发剧本必填
    * endTime  定时结束时间。定时触发剧本必填
    * repeatRange  执行时间段 2021-01-30T23:00:00Z+0800。定时触发剧本必填
    * onlyOnce  是否只执行一次。定时触发剧本必填
    * executionType  执行队列类型（PARALLEL-新任务与之前任务并行）。定时触发剧本必填
    *
    * @var string[]
    */
    protected static $getters = [
            'expressionType' => 'getExpressionType',
            'conditions' => 'getConditions',
            'logics' => 'getLogics',
            'cron' => 'getCron',
            'scheduleType' => 'getScheduleType',
            'startType' => 'getStartType',
            'endType' => 'getEndType',
            'endTime' => 'getEndTime',
            'repeatRange' => 'getRepeatRange',
            'onlyOnce' => 'getOnlyOnce',
            'executionType' => 'getExecutionType'
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
        $this->container['expressionType'] = isset($data['expressionType']) ? $data['expressionType'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['logics'] = isset($data['logics']) ? $data['logics'] : null;
        $this->container['cron'] = isset($data['cron']) ? $data['cron'] : null;
        $this->container['scheduleType'] = isset($data['scheduleType']) ? $data['scheduleType'] : null;
        $this->container['startType'] = isset($data['startType']) ? $data['startType'] : null;
        $this->container['endType'] = isset($data['endType']) ? $data['endType'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['repeatRange'] = isset($data['repeatRange']) ? $data['repeatRange'] : null;
        $this->container['onlyOnce'] = isset($data['onlyOnce']) ? $data['onlyOnce'] : null;
        $this->container['executionType'] = isset($data['executionType']) ? $data['executionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['expressionType']) && (mb_strlen($this->container['expressionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'expressionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['expressionType']) && (mb_strlen($this->container['expressionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'expressionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cron']) && (mb_strlen($this->container['cron']) > 64)) {
                $invalidProperties[] = "invalid value for 'cron', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cron']) && (mb_strlen($this->container['cron']) < 0)) {
                $invalidProperties[] = "invalid value for 'cron', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleType']) && (mb_strlen($this->container['scheduleType']) > 64)) {
                $invalidProperties[] = "invalid value for 'scheduleType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scheduleType']) && (mb_strlen($this->container['scheduleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startType']) && (mb_strlen($this->container['startType']) > 64)) {
                $invalidProperties[] = "invalid value for 'startType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startType']) && (mb_strlen($this->container['startType']) < 0)) {
                $invalidProperties[] = "invalid value for 'startType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endType']) && (mb_strlen($this->container['endType']) > 64)) {
                $invalidProperties[] = "invalid value for 'endType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endType']) && (mb_strlen($this->container['endType']) < 0)) {
                $invalidProperties[] = "invalid value for 'endType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repeatRange']) && (mb_strlen($this->container['repeatRange']) > 64)) {
                $invalidProperties[] = "invalid value for 'repeatRange', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['repeatRange']) && (mb_strlen($this->container['repeatRange']) < 0)) {
                $invalidProperties[] = "invalid value for 'repeatRange', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executionType']) && (mb_strlen($this->container['executionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'executionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['executionType']) && (mb_strlen($this->container['executionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'executionType', the character length must be bigger than or equal to 0.";
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
    * Gets expressionType
    *  表达式类型。默认为common,事件触发剧本必填
    *
    * @return string|null
    */
    public function getExpressionType()
    {
        return $this->container['expressionType'];
    }

    /**
    * Sets expressionType
    *
    * @param string|null $expressionType 表达式类型。默认为common,事件触发剧本必填
    *
    * @return $this
    */
    public function setExpressionType($expressionType)
    {
        $this->container['expressionType'] = $expressionType;
        return $this;
    }

    /**
    * Gets conditions
    *  触发条件。事件触发剧本必填
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ConditionItem[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ConditionItem[]|null $conditions 触发条件。事件触发剧本必填
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets logics
    *  条件逻辑组合。事件触发剧本必填
    *
    * @return string[]|null
    */
    public function getLogics()
    {
        return $this->container['logics'];
    }

    /**
    * Sets logics
    *
    * @param string[]|null $logics 条件逻辑组合。事件触发剧本必填
    *
    * @return $this
    */
    public function setLogics($logics)
    {
        $this->container['logics'] = $logics;
        return $this;
    }

    /**
    * Gets cron
    *  Cron 表达式（定时任务）。定时触发剧本必填
    *
    * @return string|null
    */
    public function getCron()
    {
        return $this->container['cron'];
    }

    /**
    * Sets cron
    *
    * @param string|null $cron Cron 表达式（定时任务）。定时触发剧本必填
    *
    * @return $this
    */
    public function setCron($cron)
    {
        $this->container['cron'] = $cron;
        return $this;
    }

    /**
    * Gets scheduleType
    *  定时重复类型(second--秒, hour--小时,day--天，week-周)。定时触发剧本必填
    *
    * @return string|null
    */
    public function getScheduleType()
    {
        return $this->container['scheduleType'];
    }

    /**
    * Sets scheduleType
    *
    * @param string|null $scheduleType 定时重复类型(second--秒, hour--小时,day--天，week-周)。定时触发剧本必填
    *
    * @return $this
    */
    public function setScheduleType($scheduleType)
    {
        $this->container['scheduleType'] = $scheduleType;
        return $this;
    }

    /**
    * Gets startType
    *  剧本开始执行类型，IMMEDIATELY--创建完成立即执行, CUSTOM--自定义执行时间。定时触发剧本必填
    *
    * @return string|null
    */
    public function getStartType()
    {
        return $this->container['startType'];
    }

    /**
    * Sets startType
    *
    * @param string|null $startType 剧本开始执行类型，IMMEDIATELY--创建完成立即执行, CUSTOM--自定义执行时间。定时触发剧本必填
    *
    * @return $this
    */
    public function setStartType($startType)
    {
        $this->container['startType'] = $startType;
        return $this;
    }

    /**
    * Gets endType
    *  剧本结束执行类型，FOREVER--一直执行, CUSTOM--自定义结束时间。定时触发剧本必填
    *
    * @return string|null
    */
    public function getEndType()
    {
        return $this->container['endType'];
    }

    /**
    * Sets endType
    *
    * @param string|null $endType 剧本结束执行类型，FOREVER--一直执行, CUSTOM--自定义结束时间。定时触发剧本必填
    *
    * @return $this
    */
    public function setEndType($endType)
    {
        $this->container['endType'] = $endType;
        return $this;
    }

    /**
    * Gets endTime
    *  定时结束时间。定时触发剧本必填
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
    * @param string|null $endTime 定时结束时间。定时触发剧本必填
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets repeatRange
    *  执行时间段 2021-01-30T23:00:00Z+0800。定时触发剧本必填
    *
    * @return string|null
    */
    public function getRepeatRange()
    {
        return $this->container['repeatRange'];
    }

    /**
    * Sets repeatRange
    *
    * @param string|null $repeatRange 执行时间段 2021-01-30T23:00:00Z+0800。定时触发剧本必填
    *
    * @return $this
    */
    public function setRepeatRange($repeatRange)
    {
        $this->container['repeatRange'] = $repeatRange;
        return $this;
    }

    /**
    * Gets onlyOnce
    *  是否只执行一次。定时触发剧本必填
    *
    * @return bool|null
    */
    public function getOnlyOnce()
    {
        return $this->container['onlyOnce'];
    }

    /**
    * Sets onlyOnce
    *
    * @param bool|null $onlyOnce 是否只执行一次。定时触发剧本必填
    *
    * @return $this
    */
    public function setOnlyOnce($onlyOnce)
    {
        $this->container['onlyOnce'] = $onlyOnce;
        return $this;
    }

    /**
    * Gets executionType
    *  执行队列类型（PARALLEL-新任务与之前任务并行）。定时触发剧本必填
    *
    * @return string|null
    */
    public function getExecutionType()
    {
        return $this->container['executionType'];
    }

    /**
    * Sets executionType
    *
    * @param string|null $executionType 执行队列类型（PARALLEL-新任务与之前任务并行）。定时触发剧本必填
    *
    * @return $this
    */
    public function setExecutionType($executionType)
    {
        $this->container['executionType'] = $executionType;
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

