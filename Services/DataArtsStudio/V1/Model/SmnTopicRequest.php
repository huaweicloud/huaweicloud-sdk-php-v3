<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnTopicRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnTopicRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  主题名称。
    * urn  smn urn，可以在SMN服务查看对应主题的urn。
    * notifyMethod  告警方式：主题、责任人、值班表和钉钉机器人，取值如下： - SUBJECT: 主题 - OWNER： 责任人 - DUTY_SCHEDULE: 值班表 - DINGDING: 钉钉机器人
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"] \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数，取值为 [1, 50]。
    * sendInterval  告警间隔，取值为[5, 60]，单位：分钟。
    * dutyScheduleName  值班表名称。
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
            'dutyScheduleName' => 'string',
            'smnConfigName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  主题名称。
    * urn  smn urn，可以在SMN服务查看对应主题的urn。
    * notifyMethod  告警方式：主题、责任人、值班表和钉钉机器人，取值如下： - SUBJECT: 主题 - OWNER： 责任人 - DUTY_SCHEDULE: 值班表 - DINGDING: 钉钉机器人
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"] \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数，取值为 [1, 50]。
    * sendInterval  告警间隔，取值为[5, 60]，单位：分钟。
    * dutyScheduleName  值班表名称。
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
        'dutyScheduleName' => null,
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
    * name  主题名称。
    * urn  smn urn，可以在SMN服务查看对应主题的urn。
    * notifyMethod  告警方式：主题、责任人、值班表和钉钉机器人，取值如下： - SUBJECT: 主题 - OWNER： 责任人 - DUTY_SCHEDULE: 值班表 - DINGDING: 钉钉机器人
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"] \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数，取值为 [1, 50]。
    * sendInterval  告警间隔，取值为[5, 60]，单位：分钟。
    * dutyScheduleName  值班表名称。
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
            'dutyScheduleName' => 'duty_schedule_name',
            'smnConfigName' => 'smn_config_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  主题名称。
    * urn  smn urn，可以在SMN服务查看对应主题的urn。
    * notifyMethod  告警方式：主题、责任人、值班表和钉钉机器人，取值如下： - SUBJECT: 主题 - OWNER： 责任人 - DUTY_SCHEDULE: 值班表 - DINGDING: 钉钉机器人
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"] \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数，取值为 [1, 50]。
    * sendInterval  告警间隔，取值为[5, 60]，单位：分钟。
    * dutyScheduleName  值班表名称。
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
            'dutyScheduleName' => 'setDutyScheduleName',
            'smnConfigName' => 'setSmnConfigName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  主题名称。
    * urn  smn urn，可以在SMN服务查看对应主题的urn。
    * notifyMethod  告警方式：主题、责任人、值班表和钉钉机器人，取值如下： - SUBJECT: 主题 - OWNER： 责任人 - DUTY_SCHEDULE: 值班表 - DINGDING: 钉钉机器人
    * protocol  告警协议：短信、邮件、电话，示例：[\"email\"] \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
    * otherPersons  抄送人，示例：[\"lin\",\"hua\"]。
    * maxSendTimes  最大告警次数，取值为 [1, 50]。
    * sendInterval  告警间隔，取值为[5, 60]，单位：分钟。
    * dutyScheduleName  值班表名称。
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
            'dutyScheduleName' => 'getDutyScheduleName',
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
        $this->container['dutyScheduleName'] = isset($data['dutyScheduleName']) ? $data['dutyScheduleName'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
        if ($this->container['notifyMethod'] === null) {
            $invalidProperties[] = "'notifyMethod' can't be null";
        }
        if ($this->container['maxSendTimes'] === null) {
            $invalidProperties[] = "'maxSendTimes' can't be null";
        }
        if ($this->container['sendInterval'] === null) {
            $invalidProperties[] = "'sendInterval' can't be null";
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
    *  主题名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 主题名称。
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
    *  smn urn，可以在SMN服务查看对应主题的urn。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn smn urn，可以在SMN服务查看对应主题的urn。
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
    *  告警方式：主题、责任人、值班表和钉钉机器人，取值如下： - SUBJECT: 主题 - OWNER： 责任人 - DUTY_SCHEDULE: 值班表 - DINGDING: 钉钉机器人
    *
    * @return string
    */
    public function getNotifyMethod()
    {
        return $this->container['notifyMethod'];
    }

    /**
    * Sets notifyMethod
    *
    * @param string $notifyMethod 告警方式：主题、责任人、值班表和钉钉机器人，取值如下： - SUBJECT: 主题 - OWNER： 责任人 - DUTY_SCHEDULE: 值班表 - DINGDING: 钉钉机器人
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
    *  告警协议：短信、邮件、电话，示例：[\"email\"] \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
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
    * @param string|null $protocol 告警协议：短信、邮件、电话，示例：[\"email\"] \"email\"：邮件传输协议,\"sms\"：短信传输协议,\"callnotify\":语音, \"dingding\":个人钉钉。
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
    *  最大告警次数，取值为 [1, 50]。
    *
    * @return int
    */
    public function getMaxSendTimes()
    {
        return $this->container['maxSendTimes'];
    }

    /**
    * Sets maxSendTimes
    *
    * @param int $maxSendTimes 最大告警次数，取值为 [1, 50]。
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
    *  告警间隔，取值为[5, 60]，单位：分钟。
    *
    * @return int
    */
    public function getSendInterval()
    {
        return $this->container['sendInterval'];
    }

    /**
    * Sets sendInterval
    *
    * @param int $sendInterval 告警间隔，取值为[5, 60]，单位：分钟。
    *
    * @return $this
    */
    public function setSendInterval($sendInterval)
    {
        $this->container['sendInterval'] = $sendInterval;
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

