<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Cron implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Cron';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  调度开始时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。
    * endTime  调度结束时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。如果结束时间不配置，作业会按照调度周期一直执行下去。
    * expression  Cron表达式，格式为\"<秒> <分> <时> <天> <月> <星期>\"
    * expressionTimeZone  Cron表达式对应的时区信息，例如GMT+8。默认值：使用DataArts Studio服务端所在的时区。
    * period  用于描述运行的间隔时间，格式为时间+时间单位。需要与expression中的表达式对应
    * dependPrePeriod  是否依赖本作业上一个运行周期任务的执行结果
    * dependJobs  依赖其它作业列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'expression' => 'string',
            'expressionTimeZone' => 'string',
            'period' => 'string',
            'dependPrePeriod' => 'bool',
            'dependJobs' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DependJob[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  调度开始时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。
    * endTime  调度结束时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。如果结束时间不配置，作业会按照调度周期一直执行下去。
    * expression  Cron表达式，格式为\"<秒> <分> <时> <天> <月> <星期>\"
    * expressionTimeZone  Cron表达式对应的时区信息，例如GMT+8。默认值：使用DataArts Studio服务端所在的时区。
    * period  用于描述运行的间隔时间，格式为时间+时间单位。需要与expression中的表达式对应
    * dependPrePeriod  是否依赖本作业上一个运行周期任务的执行结果
    * dependJobs  依赖其它作业列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'expression' => null,
        'expressionTimeZone' => null,
        'period' => null,
        'dependPrePeriod' => null,
        'dependJobs' => null
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
    * startTime  调度开始时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。
    * endTime  调度结束时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。如果结束时间不配置，作业会按照调度周期一直执行下去。
    * expression  Cron表达式，格式为\"<秒> <分> <时> <天> <月> <星期>\"
    * expressionTimeZone  Cron表达式对应的时区信息，例如GMT+8。默认值：使用DataArts Studio服务端所在的时区。
    * period  用于描述运行的间隔时间，格式为时间+时间单位。需要与expression中的表达式对应
    * dependPrePeriod  是否依赖本作业上一个运行周期任务的执行结果
    * dependJobs  依赖其它作业列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'expression' => 'expression',
            'expressionTimeZone' => 'expression_time_zone',
            'period' => 'period',
            'dependPrePeriod' => 'depend_pre_period',
            'dependJobs' => 'depend_jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  调度开始时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。
    * endTime  调度结束时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。如果结束时间不配置，作业会按照调度周期一直执行下去。
    * expression  Cron表达式，格式为\"<秒> <分> <时> <天> <月> <星期>\"
    * expressionTimeZone  Cron表达式对应的时区信息，例如GMT+8。默认值：使用DataArts Studio服务端所在的时区。
    * period  用于描述运行的间隔时间，格式为时间+时间单位。需要与expression中的表达式对应
    * dependPrePeriod  是否依赖本作业上一个运行周期任务的执行结果
    * dependJobs  依赖其它作业列表
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'expression' => 'setExpression',
            'expressionTimeZone' => 'setExpressionTimeZone',
            'period' => 'setPeriod',
            'dependPrePeriod' => 'setDependPrePeriod',
            'dependJobs' => 'setDependJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  调度开始时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。
    * endTime  调度结束时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。如果结束时间不配置，作业会按照调度周期一直执行下去。
    * expression  Cron表达式，格式为\"<秒> <分> <时> <天> <月> <星期>\"
    * expressionTimeZone  Cron表达式对应的时区信息，例如GMT+8。默认值：使用DataArts Studio服务端所在的时区。
    * period  用于描述运行的间隔时间，格式为时间+时间单位。需要与expression中的表达式对应
    * dependPrePeriod  是否依赖本作业上一个运行周期任务的执行结果
    * dependJobs  依赖其它作业列表
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'expression' => 'getExpression',
            'expressionTimeZone' => 'getExpressionTimeZone',
            'period' => 'getPeriod',
            'dependPrePeriod' => 'getDependPrePeriod',
            'dependJobs' => 'getDependJobs'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['expressionTimeZone'] = isset($data['expressionTimeZone']) ? $data['expressionTimeZone'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['dependPrePeriod'] = isset($data['dependPrePeriod']) ? $data['dependPrePeriod'] : null;
        $this->container['dependJobs'] = isset($data['dependJobs']) ? $data['dependJobs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['expression'] === null) {
            $invalidProperties[] = "'expression' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
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
    * Gets startTime
    *  调度开始时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 调度开始时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。
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
    *  调度结束时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。如果结束时间不配置，作业会按照调度周期一直执行下去。
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
    * @param string|null $endTime 调度结束时间，采用ISO 8601时间表示方法，格式为yyyy-MM-dd'T'HH:mm:ssZ，例如2018-10-22T23:59:59+08表示的时间为2018年10月22日23时59分59秒，在正8区，即北京时区。如果结束时间不配置，作业会按照调度周期一直执行下去。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets expression
    *  Cron表达式，格式为\"<秒> <分> <时> <天> <月> <星期>\"
    *
    * @return string
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string $expression Cron表达式，格式为\"<秒> <分> <时> <天> <月> <星期>\"
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets expressionTimeZone
    *  Cron表达式对应的时区信息，例如GMT+8。默认值：使用DataArts Studio服务端所在的时区。
    *
    * @return string|null
    */
    public function getExpressionTimeZone()
    {
        return $this->container['expressionTimeZone'];
    }

    /**
    * Sets expressionTimeZone
    *
    * @param string|null $expressionTimeZone Cron表达式对应的时区信息，例如GMT+8。默认值：使用DataArts Studio服务端所在的时区。
    *
    * @return $this
    */
    public function setExpressionTimeZone($expressionTimeZone)
    {
        $this->container['expressionTimeZone'] = $expressionTimeZone;
        return $this;
    }

    /**
    * Gets period
    *  用于描述运行的间隔时间，格式为时间+时间单位。需要与expression中的表达式对应
    *
    * @return string
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string $period 用于描述运行的间隔时间，格式为时间+时间单位。需要与expression中的表达式对应
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets dependPrePeriod
    *  是否依赖本作业上一个运行周期任务的执行结果
    *
    * @return bool|null
    */
    public function getDependPrePeriod()
    {
        return $this->container['dependPrePeriod'];
    }

    /**
    * Sets dependPrePeriod
    *
    * @param bool|null $dependPrePeriod 是否依赖本作业上一个运行周期任务的执行结果
    *
    * @return $this
    */
    public function setDependPrePeriod($dependPrePeriod)
    {
        $this->container['dependPrePeriod'] = $dependPrePeriod;
        return $this;
    }

    /**
    * Gets dependJobs
    *  依赖其它作业列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DependJob[]|null
    */
    public function getDependJobs()
    {
        return $this->container['dependJobs'];
    }

    /**
    * Sets dependJobs
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DependJob[]|null $dependJobs 依赖其它作业列表
    *
    * @return $this
    */
    public function setDependJobs($dependJobs)
    {
        $this->container['dependJobs'] = $dependJobs;
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

