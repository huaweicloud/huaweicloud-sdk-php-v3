<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnTopic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnTopic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称。
    * urn  smn urn。
    * notifyMethod  告警方式：主题、责任人，值班表和钉钉机器人。
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"]  \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数。
    * sendInterval  告警间隔。
    * dutyScheduleId  值班表id。
    * dutyScheduleName  值班表名称。
    * smnConfigId  机器人id。
    * smnConfigName  机器人名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'urn' => 'string',
            'notifyMethod' => 'string',
            'protocol' => 'string',
            'otherPersons' => 'string',
            'maxSendTimes' => 'int',
            'sendInterval' => 'int',
            'dutyScheduleId' => 'int',
            'dutyScheduleName' => 'string',
            'smnConfigId' => 'string',
            'smnConfigName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称。
    * urn  smn urn。
    * notifyMethod  告警方式：主题、责任人，值班表和钉钉机器人。
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"]  \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数。
    * sendInterval  告警间隔。
    * dutyScheduleId  值班表id。
    * dutyScheduleName  值班表名称。
    * smnConfigId  机器人id。
    * smnConfigName  机器人名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'urn' => null,
        'notifyMethod' => null,
        'protocol' => null,
        'otherPersons' => null,
        'maxSendTimes' => 'int32',
        'sendInterval' => 'int32',
        'dutyScheduleId' => 'int64',
        'dutyScheduleName' => null,
        'smnConfigId' => null,
        'smnConfigName' => null
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
    * name  名称。
    * urn  smn urn。
    * notifyMethod  告警方式：主题、责任人，值班表和钉钉机器人。
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"]  \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数。
    * sendInterval  告警间隔。
    * dutyScheduleId  值班表id。
    * dutyScheduleName  值班表名称。
    * smnConfigId  机器人id。
    * smnConfigName  机器人名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'urn' => 'urn',
            'notifyMethod' => 'notify_method',
            'protocol' => 'protocol',
            'otherPersons' => 'other_persons',
            'maxSendTimes' => 'max_send_times',
            'sendInterval' => 'send_interval',
            'dutyScheduleId' => 'duty_schedule_id',
            'dutyScheduleName' => 'duty_schedule_name',
            'smnConfigId' => 'smn_config_id',
            'smnConfigName' => 'smn_config_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称。
    * urn  smn urn。
    * notifyMethod  告警方式：主题、责任人，值班表和钉钉机器人。
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"]  \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数。
    * sendInterval  告警间隔。
    * dutyScheduleId  值班表id。
    * dutyScheduleName  值班表名称。
    * smnConfigId  机器人id。
    * smnConfigName  机器人名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'urn' => 'setUrn',
            'notifyMethod' => 'setNotifyMethod',
            'protocol' => 'setProtocol',
            'otherPersons' => 'setOtherPersons',
            'maxSendTimes' => 'setMaxSendTimes',
            'sendInterval' => 'setSendInterval',
            'dutyScheduleId' => 'setDutyScheduleId',
            'dutyScheduleName' => 'setDutyScheduleName',
            'smnConfigId' => 'setSmnConfigId',
            'smnConfigName' => 'setSmnConfigName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称。
    * urn  smn urn。
    * notifyMethod  告警方式：主题、责任人，值班表和钉钉机器人。
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"]  \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数。
    * sendInterval  告警间隔。
    * dutyScheduleId  值班表id。
    * dutyScheduleName  值班表名称。
    * smnConfigId  机器人id。
    * smnConfigName  机器人名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'urn' => 'getUrn',
            'notifyMethod' => 'getNotifyMethod',
            'protocol' => 'getProtocol',
            'otherPersons' => 'getOtherPersons',
            'maxSendTimes' => 'getMaxSendTimes',
            'sendInterval' => 'getSendInterval',
            'dutyScheduleId' => 'getDutyScheduleId',
            'dutyScheduleName' => 'getDutyScheduleName',
            'smnConfigId' => 'getSmnConfigId',
            'smnConfigName' => 'getSmnConfigName'
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
    const NOTIFY_METHOD_SUBJECT = 'SUBJECT';
    const NOTIFY_METHOD_OWNER = 'OWNER';
    const NOTIFY_METHOD_DUTY_SCHEDULE = 'DUTY_SCHEDULE';
    const NOTIFY_METHOD_SUBJECT_OWNER = 'SUBJECT_OWNER';
    const NOTIFY_METHOD_SUBJECT_DUTY = 'SUBJECT_DUTY';
    const NOTIFY_METHOD_DINGDING = 'DINGDING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotifyMethodAllowableValues()
    {
        return [
            self::NOTIFY_METHOD_SUBJECT,
            self::NOTIFY_METHOD_OWNER,
            self::NOTIFY_METHOD_DUTY_SCHEDULE,
            self::NOTIFY_METHOD_SUBJECT_OWNER,
            self::NOTIFY_METHOD_SUBJECT_DUTY,
            self::NOTIFY_METHOD_DINGDING,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['notifyMethod'] = isset($data['notifyMethod']) ? $data['notifyMethod'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['otherPersons'] = isset($data['otherPersons']) ? $data['otherPersons'] : null;
        $this->container['maxSendTimes'] = isset($data['maxSendTimes']) ? $data['maxSendTimes'] : null;
        $this->container['sendInterval'] = isset($data['sendInterval']) ? $data['sendInterval'] : null;
        $this->container['dutyScheduleId'] = isset($data['dutyScheduleId']) ? $data['dutyScheduleId'] : null;
        $this->container['dutyScheduleName'] = isset($data['dutyScheduleName']) ? $data['dutyScheduleName'] : null;
        $this->container['smnConfigId'] = isset($data['smnConfigId']) ? $data['smnConfigId'] : null;
        $this->container['smnConfigName'] = isset($data['smnConfigName']) ? $data['smnConfigName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNotifyMethodAllowableValues();
                if (!is_null($this->container['notifyMethod']) && !in_array($this->container['notifyMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notifyMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 1024)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['otherPersons']) && (mb_strlen($this->container['otherPersons']) > 1024)) {
                $invalidProperties[] = "invalid value for 'otherPersons', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['otherPersons']) && (mb_strlen($this->container['otherPersons']) < 0)) {
                $invalidProperties[] = "invalid value for 'otherPersons', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  名称。
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
    * @param string|null $name 名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets urn
    *  smn urn。
    *
    * @return string|null
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string|null $urn smn urn。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets notifyMethod
    *  告警方式：主题、责任人，值班表和钉钉机器人。
    *
    * @return string|null
    */
    public function getNotifyMethod()
    {
        return $this->container['notifyMethod'];
    }

    /**
    * Sets notifyMethod
    *
    * @param string|null $notifyMethod 告警方式：主题、责任人，值班表和钉钉机器人。
    *
    * @return $this
    */
    public function setNotifyMethod($notifyMethod)
    {
        $this->container['notifyMethod'] = $notifyMethod;
        return $this;
    }

    /**
    * Gets protocol
    *  告警协议：短信、邮件、电话，示例：[\"email\"]  \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 告警协议：短信、邮件、电话，示例：[\"email\"]  \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets otherPersons
    *  抄送人，示例：[\"lin\",\"hua\"]。
    *
    * @return string|null
    */
    public function getOtherPersons()
    {
        return $this->container['otherPersons'];
    }

    /**
    * Sets otherPersons
    *
    * @param string|null $otherPersons 抄送人，示例：[\"lin\",\"hua\"]。
    *
    * @return $this
    */
    public function setOtherPersons($otherPersons)
    {
        $this->container['otherPersons'] = $otherPersons;
        return $this;
    }

    /**
    * Gets maxSendTimes
    *  最大告警次数。
    *
    * @return int|null
    */
    public function getMaxSendTimes()
    {
        return $this->container['maxSendTimes'];
    }

    /**
    * Sets maxSendTimes
    *
    * @param int|null $maxSendTimes 最大告警次数。
    *
    * @return $this
    */
    public function setMaxSendTimes($maxSendTimes)
    {
        $this->container['maxSendTimes'] = $maxSendTimes;
        return $this;
    }

    /**
    * Gets sendInterval
    *  告警间隔。
    *
    * @return int|null
    */
    public function getSendInterval()
    {
        return $this->container['sendInterval'];
    }

    /**
    * Sets sendInterval
    *
    * @param int|null $sendInterval 告警间隔。
    *
    * @return $this
    */
    public function setSendInterval($sendInterval)
    {
        $this->container['sendInterval'] = $sendInterval;
        return $this;
    }

    /**
    * Gets dutyScheduleId
    *  值班表id。
    *
    * @return int|null
    */
    public function getDutyScheduleId()
    {
        return $this->container['dutyScheduleId'];
    }

    /**
    * Sets dutyScheduleId
    *
    * @param int|null $dutyScheduleId 值班表id。
    *
    * @return $this
    */
    public function setDutyScheduleId($dutyScheduleId)
    {
        $this->container['dutyScheduleId'] = $dutyScheduleId;
        return $this;
    }

    /**
    * Gets dutyScheduleName
    *  值班表名称。
    *
    * @return string|null
    */
    public function getDutyScheduleName()
    {
        return $this->container['dutyScheduleName'];
    }

    /**
    * Sets dutyScheduleName
    *
    * @param string|null $dutyScheduleName 值班表名称。
    *
    * @return $this
    */
    public function setDutyScheduleName($dutyScheduleName)
    {
        $this->container['dutyScheduleName'] = $dutyScheduleName;
        return $this;
    }

    /**
    * Gets smnConfigId
    *  机器人id。
    *
    * @return string|null
    */
    public function getSmnConfigId()
    {
        return $this->container['smnConfigId'];
    }

    /**
    * Sets smnConfigId
    *
    * @param string|null $smnConfigId 机器人id。
    *
    * @return $this
    */
    public function setSmnConfigId($smnConfigId)
    {
        $this->container['smnConfigId'] = $smnConfigId;
        return $this;
    }

    /**
    * Gets smnConfigName
    *  机器人名称。
    *
    * @return string|null
    */
    public function getSmnConfigName()
    {
        return $this->container['smnConfigName'];
    }

    /**
    * Sets smnConfigName
    *
    * @param string|null $smnConfigName 机器人名称。
    *
    * @return $this
    */
    public function setSmnConfigName($smnConfigName)
    {
        $this->container['smnConfigName'] = $smnConfigName;
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

