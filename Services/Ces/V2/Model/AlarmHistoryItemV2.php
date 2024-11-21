<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmHistoryItemV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmHistoryItemV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordId  告警记录ID
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * name  告警规则的名称，如：alarm-test01。
    * status  告警记录的状态，取值为ok，alarm，invalid； ok为正常，alarm为告警，invalid为已失效。
    * level  告警记录的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * type  type
    * actionEnabled  是否发送通知，值为true或者false。
    * beginTime  产生时间,UTC时间
    * endTime  结束时间，UTC时间
    * firstAlarmTime  第一次告警时间戳，UTC时间
    * lastAlarmTime  最后一次告警时间，UTC时间
    * alarmRecoveryTime  告警恢复时间，UTC时间
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notification_list：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notification_list：告警状态发生变化时，被通知对象的列表。
    * dataPoints  计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordId' => 'string',
            'alarmId' => 'string',
            'name' => 'string',
            'status' => 'string',
            'level' => 'int',
            'type' => '\HuaweiCloud\SDK\Ces\V2\Model\AlarmType',
            'actionEnabled' => 'bool',
            'beginTime' => '\DateTime',
            'endTime' => '\DateTime',
            'firstAlarmTime' => '\DateTime',
            'lastAlarmTime' => '\DateTime',
            'alarmRecoveryTime' => '\DateTime',
            'metric' => '\HuaweiCloud\SDK\Ces\V2\Model\Metric',
            'condition' => '\HuaweiCloud\SDK\Ces\V2\Model\AlarmCondition',
            'additionalInfo' => '\HuaweiCloud\SDK\Ces\V2\Model\AdditionalInfo',
            'alarmActions' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'okActions' => '\HuaweiCloud\SDK\Ces\V2\Model\Notification[]',
            'dataPoints' => '\HuaweiCloud\SDK\Ces\V2\Model\DataPointInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordId  告警记录ID
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * name  告警规则的名称，如：alarm-test01。
    * status  告警记录的状态，取值为ok，alarm，invalid； ok为正常，alarm为告警，invalid为已失效。
    * level  告警记录的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * type  type
    * actionEnabled  是否发送通知，值为true或者false。
    * beginTime  产生时间,UTC时间
    * endTime  结束时间，UTC时间
    * firstAlarmTime  第一次告警时间戳，UTC时间
    * lastAlarmTime  最后一次告警时间，UTC时间
    * alarmRecoveryTime  告警恢复时间，UTC时间
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notification_list：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notification_list：告警状态发生变化时，被通知对象的列表。
    * dataPoints  计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordId' => null,
        'alarmId' => null,
        'name' => null,
        'status' => null,
        'level' => 'int32',
        'type' => null,
        'actionEnabled' => null,
        'beginTime' => 'date-time',
        'endTime' => 'date-time',
        'firstAlarmTime' => 'date-time',
        'lastAlarmTime' => 'date-time',
        'alarmRecoveryTime' => 'date-time',
        'metric' => null,
        'condition' => null,
        'additionalInfo' => null,
        'alarmActions' => null,
        'okActions' => null,
        'dataPoints' => null
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
    * recordId  告警记录ID
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * name  告警规则的名称，如：alarm-test01。
    * status  告警记录的状态，取值为ok，alarm，invalid； ok为正常，alarm为告警，invalid为已失效。
    * level  告警记录的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * type  type
    * actionEnabled  是否发送通知，值为true或者false。
    * beginTime  产生时间,UTC时间
    * endTime  结束时间，UTC时间
    * firstAlarmTime  第一次告警时间戳，UTC时间
    * lastAlarmTime  最后一次告警时间，UTC时间
    * alarmRecoveryTime  告警恢复时间，UTC时间
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notification_list：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notification_list：告警状态发生变化时，被通知对象的列表。
    * dataPoints  计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordId' => 'record_id',
            'alarmId' => 'alarm_id',
            'name' => 'name',
            'status' => 'status',
            'level' => 'level',
            'type' => 'type',
            'actionEnabled' => 'action_enabled',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'firstAlarmTime' => 'first_alarm_time',
            'lastAlarmTime' => 'last_alarm_time',
            'alarmRecoveryTime' => 'alarm_recovery_time',
            'metric' => 'metric',
            'condition' => 'condition',
            'additionalInfo' => 'additional_info',
            'alarmActions' => 'alarm_actions',
            'okActions' => 'ok_actions',
            'dataPoints' => 'data_points'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordId  告警记录ID
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * name  告警规则的名称，如：alarm-test01。
    * status  告警记录的状态，取值为ok，alarm，invalid； ok为正常，alarm为告警，invalid为已失效。
    * level  告警记录的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * type  type
    * actionEnabled  是否发送通知，值为true或者false。
    * beginTime  产生时间,UTC时间
    * endTime  结束时间，UTC时间
    * firstAlarmTime  第一次告警时间戳，UTC时间
    * lastAlarmTime  最后一次告警时间，UTC时间
    * alarmRecoveryTime  告警恢复时间，UTC时间
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notification_list：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notification_list：告警状态发生变化时，被通知对象的列表。
    * dataPoints  计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @var string[]
    */
    protected static $setters = [
            'recordId' => 'setRecordId',
            'alarmId' => 'setAlarmId',
            'name' => 'setName',
            'status' => 'setStatus',
            'level' => 'setLevel',
            'type' => 'setType',
            'actionEnabled' => 'setActionEnabled',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'firstAlarmTime' => 'setFirstAlarmTime',
            'lastAlarmTime' => 'setLastAlarmTime',
            'alarmRecoveryTime' => 'setAlarmRecoveryTime',
            'metric' => 'setMetric',
            'condition' => 'setCondition',
            'additionalInfo' => 'setAdditionalInfo',
            'alarmActions' => 'setAlarmActions',
            'okActions' => 'setOkActions',
            'dataPoints' => 'setDataPoints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordId  告警记录ID
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * name  告警规则的名称，如：alarm-test01。
    * status  告警记录的状态，取值为ok，alarm，invalid； ok为正常，alarm为告警，invalid为已失效。
    * level  告警记录的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * type  type
    * actionEnabled  是否发送通知，值为true或者false。
    * beginTime  产生时间,UTC时间
    * endTime  结束时间，UTC时间
    * firstAlarmTime  第一次告警时间戳，UTC时间
    * lastAlarmTime  最后一次告警时间，UTC时间
    * alarmRecoveryTime  告警恢复时间，UTC时间
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notification_list：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notification_list：告警状态发生变化时，被通知对象的列表。
    * dataPoints  计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @var string[]
    */
    protected static $getters = [
            'recordId' => 'getRecordId',
            'alarmId' => 'getAlarmId',
            'name' => 'getName',
            'status' => 'getStatus',
            'level' => 'getLevel',
            'type' => 'getType',
            'actionEnabled' => 'getActionEnabled',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'firstAlarmTime' => 'getFirstAlarmTime',
            'lastAlarmTime' => 'getLastAlarmTime',
            'alarmRecoveryTime' => 'getAlarmRecoveryTime',
            'metric' => 'getMetric',
            'condition' => 'getCondition',
            'additionalInfo' => 'getAdditionalInfo',
            'alarmActions' => 'getAlarmActions',
            'okActions' => 'getOkActions',
            'dataPoints' => 'getDataPoints'
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
    const STATUS_OK = 'ok';
    const STATUS_ALARM = 'alarm';
    const STATUS_INVALID = 'invalid';
    const LEVEL_1 = 1;
    const LEVEL_2 = 2;
    const LEVEL_3 = 3;
    const LEVEL_4 = 4;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_ALARM,
            self::STATUS_INVALID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_1,
            self::LEVEL_2,
            self::LEVEL_3,
            self::LEVEL_4,
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
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['actionEnabled'] = isset($data['actionEnabled']) ? $data['actionEnabled'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['firstAlarmTime'] = isset($data['firstAlarmTime']) ? $data['firstAlarmTime'] : null;
        $this->container['lastAlarmTime'] = isset($data['lastAlarmTime']) ? $data['lastAlarmTime'] : null;
        $this->container['alarmRecoveryTime'] = isset($data['alarmRecoveryTime']) ? $data['alarmRecoveryTime'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['additionalInfo'] = isset($data['additionalInfo']) ? $data['additionalInfo'] : null;
        $this->container['alarmActions'] = isset($data['alarmActions']) ? $data['alarmActions'] : null;
        $this->container['okActions'] = isset($data['okActions']) ? $data['okActions'] : null;
        $this->container['dataPoints'] = isset($data['dataPoints']) ? $data['dataPoints'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) > 24)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) < 24)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) > 24)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) < 24)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLevelAllowableValues();
                if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
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
    * Gets recordId
    *  告警记录ID
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId 告警记录ID
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets alarmId
    *  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警规则的ID，如：al1603131199286dzxpqK3Ez。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets name
    *  告警规则的名称，如：alarm-test01。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 告警规则的名称，如：alarm-test01。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  告警记录的状态，取值为ok，alarm，invalid； ok为正常，alarm为告警，invalid为已失效。
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
    * @param string|null $status 告警记录的状态，取值为ok，alarm，invalid； ok为正常，alarm为告警，invalid为已失效。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets level
    *  告警记录的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 告警记录的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AlarmType|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AlarmType|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets actionEnabled
    *  是否发送通知，值为true或者false。
    *
    * @return bool|null
    */
    public function getActionEnabled()
    {
        return $this->container['actionEnabled'];
    }

    /**
    * Sets actionEnabled
    *
    * @param bool|null $actionEnabled 是否发送通知，值为true或者false。
    *
    * @return $this
    */
    public function setActionEnabled($actionEnabled)
    {
        $this->container['actionEnabled'] = $actionEnabled;
        return $this;
    }

    /**
    * Gets beginTime
    *  产生时间,UTC时间
    *
    * @return \DateTime|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param \DateTime|null $beginTime 产生时间,UTC时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间，UTC时间
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 结束时间，UTC时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets firstAlarmTime
    *  第一次告警时间戳，UTC时间
    *
    * @return \DateTime|null
    */
    public function getFirstAlarmTime()
    {
        return $this->container['firstAlarmTime'];
    }

    /**
    * Sets firstAlarmTime
    *
    * @param \DateTime|null $firstAlarmTime 第一次告警时间戳，UTC时间
    *
    * @return $this
    */
    public function setFirstAlarmTime($firstAlarmTime)
    {
        $this->container['firstAlarmTime'] = $firstAlarmTime;
        return $this;
    }

    /**
    * Gets lastAlarmTime
    *  最后一次告警时间，UTC时间
    *
    * @return \DateTime|null
    */
    public function getLastAlarmTime()
    {
        return $this->container['lastAlarmTime'];
    }

    /**
    * Sets lastAlarmTime
    *
    * @param \DateTime|null $lastAlarmTime 最后一次告警时间，UTC时间
    *
    * @return $this
    */
    public function setLastAlarmTime($lastAlarmTime)
    {
        $this->container['lastAlarmTime'] = $lastAlarmTime;
        return $this;
    }

    /**
    * Gets alarmRecoveryTime
    *  告警恢复时间，UTC时间
    *
    * @return \DateTime|null
    */
    public function getAlarmRecoveryTime()
    {
        return $this->container['alarmRecoveryTime'];
    }

    /**
    * Sets alarmRecoveryTime
    *
    * @param \DateTime|null $alarmRecoveryTime 告警恢复时间，UTC时间
    *
    * @return $this
    */
    public function setAlarmRecoveryTime($alarmRecoveryTime)
    {
        $this->container['alarmRecoveryTime'] = $alarmRecoveryTime;
        return $this;
    }

    /**
    * Gets metric
    *  metric
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Metric|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Metric|null $metric metric
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AlarmCondition|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AlarmCondition|null $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets additionalInfo
    *  additionalInfo
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AdditionalInfo|null
    */
    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    /**
    * Sets additionalInfo
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AdditionalInfo|null $additionalInfo additionalInfo
    *
    * @return $this
    */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->container['additionalInfo'] = $additionalInfo;
        return $this;
    }

    /**
    * Gets alarmActions
    *  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notification_list：告警状态发生变化时，被通知对象的列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null
    */
    public function getAlarmActions()
    {
        return $this->container['alarmActions'];
    }

    /**
    * Sets alarmActions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null $alarmActions 告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notification_list：告警状态发生变化时，被通知对象的列表。
    *
    * @return $this
    */
    public function setAlarmActions($alarmActions)
    {
        $this->container['alarmActions'] = $alarmActions;
        return $this;
    }

    /**
    * Gets okActions
    *  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notification_list：告警状态发生变化时，被通知对象的列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null
    */
    public function getOkActions()
    {
        return $this->container['okActions'];
    }

    /**
    * Sets okActions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Notification[]|null $okActions 告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notification_list：告警状态发生变化时，被通知对象的列表。
    *
    * @return $this
    */
    public function setOkActions($okActions)
    {
        $this->container['okActions'] = $okActions;
        return $this;
    }

    /**
    * Gets dataPoints
    *  计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\DataPointInfo[]|null
    */
    public function getDataPoints()
    {
        return $this->container['dataPoints'];
    }

    /**
    * Sets dataPoints
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\DataPointInfo[]|null $dataPoints 计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @return $this
    */
    public function setDataPoints($dataPoints)
    {
        $this->container['dataPoints'] = $dataPoints;
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

