<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmInfoResponseAlarmInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmInfoResponse_alarm_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmTime  告警通知时间
    * jobName  作业名称
    * scheduleType  作业实例调度方式，取值范围：0 正常调度，2手工调度，5补数据，6子作业调度，7单次调度
    * sendMsg  发送信息
    * planTime  计划时间
    * remindType  告警通知类型，取值范围：0 运行成功，1 运行异常/失败， 12 未完成，13 运行取消
    * sendStatus  发送状态，取值范围：0 发送成功，1：发送失败
    * jobId  作业ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmTime' => 'int',
            'jobName' => 'string',
            'scheduleType' => 'int',
            'sendMsg' => 'string',
            'planTime' => 'int',
            'remindType' => 'int',
            'sendStatus' => 'int',
            'jobId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmTime  告警通知时间
    * jobName  作业名称
    * scheduleType  作业实例调度方式，取值范围：0 正常调度，2手工调度，5补数据，6子作业调度，7单次调度
    * sendMsg  发送信息
    * planTime  计划时间
    * remindType  告警通知类型，取值范围：0 运行成功，1 运行异常/失败， 12 未完成，13 运行取消
    * sendStatus  发送状态，取值范围：0 发送成功，1：发送失败
    * jobId  作业ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmTime' => 'int64',
        'jobName' => null,
        'scheduleType' => 'int32',
        'sendMsg' => null,
        'planTime' => 'int64',
        'remindType' => 'int32',
        'sendStatus' => 'int32',
        'jobId' => 'int64'
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
    * alarmTime  告警通知时间
    * jobName  作业名称
    * scheduleType  作业实例调度方式，取值范围：0 正常调度，2手工调度，5补数据，6子作业调度，7单次调度
    * sendMsg  发送信息
    * planTime  计划时间
    * remindType  告警通知类型，取值范围：0 运行成功，1 运行异常/失败， 12 未完成，13 运行取消
    * sendStatus  发送状态，取值范围：0 发送成功，1：发送失败
    * jobId  作业ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmTime' => 'alarm_time',
            'jobName' => 'job_name',
            'scheduleType' => 'schedule_type',
            'sendMsg' => 'send_msg',
            'planTime' => 'plan_time',
            'remindType' => 'remind_type',
            'sendStatus' => 'send_status',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmTime  告警通知时间
    * jobName  作业名称
    * scheduleType  作业实例调度方式，取值范围：0 正常调度，2手工调度，5补数据，6子作业调度，7单次调度
    * sendMsg  发送信息
    * planTime  计划时间
    * remindType  告警通知类型，取值范围：0 运行成功，1 运行异常/失败， 12 未完成，13 运行取消
    * sendStatus  发送状态，取值范围：0 发送成功，1：发送失败
    * jobId  作业ID
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmTime' => 'setAlarmTime',
            'jobName' => 'setJobName',
            'scheduleType' => 'setScheduleType',
            'sendMsg' => 'setSendMsg',
            'planTime' => 'setPlanTime',
            'remindType' => 'setRemindType',
            'sendStatus' => 'setSendStatus',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmTime  告警通知时间
    * jobName  作业名称
    * scheduleType  作业实例调度方式，取值范围：0 正常调度，2手工调度，5补数据，6子作业调度，7单次调度
    * sendMsg  发送信息
    * planTime  计划时间
    * remindType  告警通知类型，取值范围：0 运行成功，1 运行异常/失败， 12 未完成，13 运行取消
    * sendStatus  发送状态，取值范围：0 发送成功，1：发送失败
    * jobId  作业ID
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmTime' => 'getAlarmTime',
            'jobName' => 'getJobName',
            'scheduleType' => 'getScheduleType',
            'sendMsg' => 'getSendMsg',
            'planTime' => 'getPlanTime',
            'remindType' => 'getRemindType',
            'sendStatus' => 'getSendStatus',
            'jobId' => 'getJobId'
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
        $this->container['alarmTime'] = isset($data['alarmTime']) ? $data['alarmTime'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['scheduleType'] = isset($data['scheduleType']) ? $data['scheduleType'] : null;
        $this->container['sendMsg'] = isset($data['sendMsg']) ? $data['sendMsg'] : null;
        $this->container['planTime'] = isset($data['planTime']) ? $data['planTime'] : null;
        $this->container['remindType'] = isset($data['remindType']) ? $data['remindType'] : null;
        $this->container['sendStatus'] = isset($data['sendStatus']) ? $data['sendStatus'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
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
    * Gets alarmTime
    *  告警通知时间
    *
    * @return int|null
    */
    public function getAlarmTime()
    {
        return $this->container['alarmTime'];
    }

    /**
    * Sets alarmTime
    *
    * @param int|null $alarmTime 告警通知时间
    *
    * @return $this
    */
    public function setAlarmTime($alarmTime)
    {
        $this->container['alarmTime'] = $alarmTime;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 作业名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets scheduleType
    *  作业实例调度方式，取值范围：0 正常调度，2手工调度，5补数据，6子作业调度，7单次调度
    *
    * @return int|null
    */
    public function getScheduleType()
    {
        return $this->container['scheduleType'];
    }

    /**
    * Sets scheduleType
    *
    * @param int|null $scheduleType 作业实例调度方式，取值范围：0 正常调度，2手工调度，5补数据，6子作业调度，7单次调度
    *
    * @return $this
    */
    public function setScheduleType($scheduleType)
    {
        $this->container['scheduleType'] = $scheduleType;
        return $this;
    }

    /**
    * Gets sendMsg
    *  发送信息
    *
    * @return string|null
    */
    public function getSendMsg()
    {
        return $this->container['sendMsg'];
    }

    /**
    * Sets sendMsg
    *
    * @param string|null $sendMsg 发送信息
    *
    * @return $this
    */
    public function setSendMsg($sendMsg)
    {
        $this->container['sendMsg'] = $sendMsg;
        return $this;
    }

    /**
    * Gets planTime
    *  计划时间
    *
    * @return int|null
    */
    public function getPlanTime()
    {
        return $this->container['planTime'];
    }

    /**
    * Sets planTime
    *
    * @param int|null $planTime 计划时间
    *
    * @return $this
    */
    public function setPlanTime($planTime)
    {
        $this->container['planTime'] = $planTime;
        return $this;
    }

    /**
    * Gets remindType
    *  告警通知类型，取值范围：0 运行成功，1 运行异常/失败， 12 未完成，13 运行取消
    *
    * @return int|null
    */
    public function getRemindType()
    {
        return $this->container['remindType'];
    }

    /**
    * Sets remindType
    *
    * @param int|null $remindType 告警通知类型，取值范围：0 运行成功，1 运行异常/失败， 12 未完成，13 运行取消
    *
    * @return $this
    */
    public function setRemindType($remindType)
    {
        $this->container['remindType'] = $remindType;
        return $this;
    }

    /**
    * Gets sendStatus
    *  发送状态，取值范围：0 发送成功，1：发送失败
    *
    * @return int|null
    */
    public function getSendStatus()
    {
        return $this->container['sendStatus'];
    }

    /**
    * Sets sendStatus
    *
    * @param int|null $sendStatus 发送状态，取值范围：0 发送成功，1：发送失败
    *
    * @return $this
    */
    public function setSendStatus($sendStatus)
    {
        $this->container['sendStatus'] = $sendStatus;
        return $this;
    }

    /**
    * Gets jobId
    *  作业ID
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId 作业ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

