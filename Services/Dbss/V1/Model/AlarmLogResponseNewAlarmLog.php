<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmLogResponseNewAlarmLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmLogResponseNew_alarm_log';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  告警ID
    * alarmLife  告警状态 - ON - OFF
    * sendEmail  是否发送邮件
    * alarmTime  告警发生时间
    * alarmType  告警类型 - RISK_RULE: 风险规则 - RISK_CPU: CPU超限 - RISK_MEMORY: 内存超限 - RISK_DISK: 磁盘超限 - RISK_DISK_CAPACITY: 磁盘容量不足六个月 - RISK_BACKUP: 备份失败 - AUDIT_QPS_OVERFLOW: 流量超限入库延迟告警 - RISK_AGENT: Agent异常 - AUDIT_BACKUP_FAILED: 实例备份失败(运维侧)
    * alarmFixTime  告警恢复时间
    * alarmStatus  告警确认状态 - DONE: 已确认 - UNDO: 未确认
    * alarmRisk  告警风险等级 - LOW：低 - MEDIUM：中 - HIGH：高
    * alarmDescription  告警描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'alarmLife' => 'string',
            'sendEmail' => 'bool',
            'alarmTime' => 'string',
            'alarmType' => 'string',
            'alarmFixTime' => 'string',
            'alarmStatus' => 'string',
            'alarmRisk' => 'string',
            'alarmDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  告警ID
    * alarmLife  告警状态 - ON - OFF
    * sendEmail  是否发送邮件
    * alarmTime  告警发生时间
    * alarmType  告警类型 - RISK_RULE: 风险规则 - RISK_CPU: CPU超限 - RISK_MEMORY: 内存超限 - RISK_DISK: 磁盘超限 - RISK_DISK_CAPACITY: 磁盘容量不足六个月 - RISK_BACKUP: 备份失败 - AUDIT_QPS_OVERFLOW: 流量超限入库延迟告警 - RISK_AGENT: Agent异常 - AUDIT_BACKUP_FAILED: 实例备份失败(运维侧)
    * alarmFixTime  告警恢复时间
    * alarmStatus  告警确认状态 - DONE: 已确认 - UNDO: 未确认
    * alarmRisk  告警风险等级 - LOW：低 - MEDIUM：中 - HIGH：高
    * alarmDescription  告警描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'alarmLife' => null,
        'sendEmail' => null,
        'alarmTime' => null,
        'alarmType' => null,
        'alarmFixTime' => null,
        'alarmStatus' => null,
        'alarmRisk' => null,
        'alarmDescription' => null
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
    * id  告警ID
    * alarmLife  告警状态 - ON - OFF
    * sendEmail  是否发送邮件
    * alarmTime  告警发生时间
    * alarmType  告警类型 - RISK_RULE: 风险规则 - RISK_CPU: CPU超限 - RISK_MEMORY: 内存超限 - RISK_DISK: 磁盘超限 - RISK_DISK_CAPACITY: 磁盘容量不足六个月 - RISK_BACKUP: 备份失败 - AUDIT_QPS_OVERFLOW: 流量超限入库延迟告警 - RISK_AGENT: Agent异常 - AUDIT_BACKUP_FAILED: 实例备份失败(运维侧)
    * alarmFixTime  告警恢复时间
    * alarmStatus  告警确认状态 - DONE: 已确认 - UNDO: 未确认
    * alarmRisk  告警风险等级 - LOW：低 - MEDIUM：中 - HIGH：高
    * alarmDescription  告警描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'alarmLife' => 'alarm_life',
            'sendEmail' => 'send_email',
            'alarmTime' => 'alarm_time',
            'alarmType' => 'alarm_type',
            'alarmFixTime' => 'alarm_fix_time',
            'alarmStatus' => 'alarm_status',
            'alarmRisk' => 'alarm_risk',
            'alarmDescription' => 'alarm_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  告警ID
    * alarmLife  告警状态 - ON - OFF
    * sendEmail  是否发送邮件
    * alarmTime  告警发生时间
    * alarmType  告警类型 - RISK_RULE: 风险规则 - RISK_CPU: CPU超限 - RISK_MEMORY: 内存超限 - RISK_DISK: 磁盘超限 - RISK_DISK_CAPACITY: 磁盘容量不足六个月 - RISK_BACKUP: 备份失败 - AUDIT_QPS_OVERFLOW: 流量超限入库延迟告警 - RISK_AGENT: Agent异常 - AUDIT_BACKUP_FAILED: 实例备份失败(运维侧)
    * alarmFixTime  告警恢复时间
    * alarmStatus  告警确认状态 - DONE: 已确认 - UNDO: 未确认
    * alarmRisk  告警风险等级 - LOW：低 - MEDIUM：中 - HIGH：高
    * alarmDescription  告警描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'alarmLife' => 'setAlarmLife',
            'sendEmail' => 'setSendEmail',
            'alarmTime' => 'setAlarmTime',
            'alarmType' => 'setAlarmType',
            'alarmFixTime' => 'setAlarmFixTime',
            'alarmStatus' => 'setAlarmStatus',
            'alarmRisk' => 'setAlarmRisk',
            'alarmDescription' => 'setAlarmDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  告警ID
    * alarmLife  告警状态 - ON - OFF
    * sendEmail  是否发送邮件
    * alarmTime  告警发生时间
    * alarmType  告警类型 - RISK_RULE: 风险规则 - RISK_CPU: CPU超限 - RISK_MEMORY: 内存超限 - RISK_DISK: 磁盘超限 - RISK_DISK_CAPACITY: 磁盘容量不足六个月 - RISK_BACKUP: 备份失败 - AUDIT_QPS_OVERFLOW: 流量超限入库延迟告警 - RISK_AGENT: Agent异常 - AUDIT_BACKUP_FAILED: 实例备份失败(运维侧)
    * alarmFixTime  告警恢复时间
    * alarmStatus  告警确认状态 - DONE: 已确认 - UNDO: 未确认
    * alarmRisk  告警风险等级 - LOW：低 - MEDIUM：中 - HIGH：高
    * alarmDescription  告警描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'alarmLife' => 'getAlarmLife',
            'sendEmail' => 'getSendEmail',
            'alarmTime' => 'getAlarmTime',
            'alarmType' => 'getAlarmType',
            'alarmFixTime' => 'getAlarmFixTime',
            'alarmStatus' => 'getAlarmStatus',
            'alarmRisk' => 'getAlarmRisk',
            'alarmDescription' => 'getAlarmDescription'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['alarmLife'] = isset($data['alarmLife']) ? $data['alarmLife'] : null;
        $this->container['sendEmail'] = isset($data['sendEmail']) ? $data['sendEmail'] : null;
        $this->container['alarmTime'] = isset($data['alarmTime']) ? $data['alarmTime'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['alarmFixTime'] = isset($data['alarmFixTime']) ? $data['alarmFixTime'] : null;
        $this->container['alarmStatus'] = isset($data['alarmStatus']) ? $data['alarmStatus'] : null;
        $this->container['alarmRisk'] = isset($data['alarmRisk']) ? $data['alarmRisk'] : null;
        $this->container['alarmDescription'] = isset($data['alarmDescription']) ? $data['alarmDescription'] : null;
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
    * Gets id
    *  告警ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 告警ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets alarmLife
    *  告警状态 - ON - OFF
    *
    * @return string|null
    */
    public function getAlarmLife()
    {
        return $this->container['alarmLife'];
    }

    /**
    * Sets alarmLife
    *
    * @param string|null $alarmLife 告警状态 - ON - OFF
    *
    * @return $this
    */
    public function setAlarmLife($alarmLife)
    {
        $this->container['alarmLife'] = $alarmLife;
        return $this;
    }

    /**
    * Gets sendEmail
    *  是否发送邮件
    *
    * @return bool|null
    */
    public function getSendEmail()
    {
        return $this->container['sendEmail'];
    }

    /**
    * Sets sendEmail
    *
    * @param bool|null $sendEmail 是否发送邮件
    *
    * @return $this
    */
    public function setSendEmail($sendEmail)
    {
        $this->container['sendEmail'] = $sendEmail;
        return $this;
    }

    /**
    * Gets alarmTime
    *  告警发生时间
    *
    * @return string|null
    */
    public function getAlarmTime()
    {
        return $this->container['alarmTime'];
    }

    /**
    * Sets alarmTime
    *
    * @param string|null $alarmTime 告警发生时间
    *
    * @return $this
    */
    public function setAlarmTime($alarmTime)
    {
        $this->container['alarmTime'] = $alarmTime;
        return $this;
    }

    /**
    * Gets alarmType
    *  告警类型 - RISK_RULE: 风险规则 - RISK_CPU: CPU超限 - RISK_MEMORY: 内存超限 - RISK_DISK: 磁盘超限 - RISK_DISK_CAPACITY: 磁盘容量不足六个月 - RISK_BACKUP: 备份失败 - AUDIT_QPS_OVERFLOW: 流量超限入库延迟告警 - RISK_AGENT: Agent异常 - AUDIT_BACKUP_FAILED: 实例备份失败(运维侧)
    *
    * @return string|null
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param string|null $alarmType 告警类型 - RISK_RULE: 风险规则 - RISK_CPU: CPU超限 - RISK_MEMORY: 内存超限 - RISK_DISK: 磁盘超限 - RISK_DISK_CAPACITY: 磁盘容量不足六个月 - RISK_BACKUP: 备份失败 - AUDIT_QPS_OVERFLOW: 流量超限入库延迟告警 - RISK_AGENT: Agent异常 - AUDIT_BACKUP_FAILED: 实例备份失败(运维侧)
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets alarmFixTime
    *  告警恢复时间
    *
    * @return string|null
    */
    public function getAlarmFixTime()
    {
        return $this->container['alarmFixTime'];
    }

    /**
    * Sets alarmFixTime
    *
    * @param string|null $alarmFixTime 告警恢复时间
    *
    * @return $this
    */
    public function setAlarmFixTime($alarmFixTime)
    {
        $this->container['alarmFixTime'] = $alarmFixTime;
        return $this;
    }

    /**
    * Gets alarmStatus
    *  告警确认状态 - DONE: 已确认 - UNDO: 未确认
    *
    * @return string|null
    */
    public function getAlarmStatus()
    {
        return $this->container['alarmStatus'];
    }

    /**
    * Sets alarmStatus
    *
    * @param string|null $alarmStatus 告警确认状态 - DONE: 已确认 - UNDO: 未确认
    *
    * @return $this
    */
    public function setAlarmStatus($alarmStatus)
    {
        $this->container['alarmStatus'] = $alarmStatus;
        return $this;
    }

    /**
    * Gets alarmRisk
    *  告警风险等级 - LOW：低 - MEDIUM：中 - HIGH：高
    *
    * @return string|null
    */
    public function getAlarmRisk()
    {
        return $this->container['alarmRisk'];
    }

    /**
    * Sets alarmRisk
    *
    * @param string|null $alarmRisk 告警风险等级 - LOW：低 - MEDIUM：中 - HIGH：高
    *
    * @return $this
    */
    public function setAlarmRisk($alarmRisk)
    {
        $this->container['alarmRisk'] = $alarmRisk;
        return $this;
    }

    /**
    * Gets alarmDescription
    *  告警描述信息
    *
    * @return string|null
    */
    public function getAlarmDescription()
    {
        return $this->container['alarmDescription'];
    }

    /**
    * Sets alarmDescription
    *
    * @param string|null $alarmDescription 告警描述信息
    *
    * @return $this
    */
    public function setAlarmDescription($alarmDescription)
    {
        $this->container['alarmDescription'] = $alarmDescription;
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

