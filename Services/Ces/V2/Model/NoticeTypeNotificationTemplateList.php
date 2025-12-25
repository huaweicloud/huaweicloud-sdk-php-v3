<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NoticeTypeNotificationTemplateList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NoticeTypeNotificationTemplateList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * noticeType  通知类型, sms(短信)/email/http(s)/smn/welink/dingding(钉钉)/wechat(微信)/feishu(飞书)/wecomgroup(微信企业版)
    * alarmNotificationTemplateId  **参数解释**： 通知模板id **约束限制**： 不涉及。 **取值范围**： 长度为[3,64]个字符。 **默认取值**： 不涉及
    * alarmNotificationTemplateName  **参数解释**： 通知模板名 **约束限制**： 不涉及。 **取值范围**： 长度为[1,200]个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'noticeType' => 'string',
            'alarmNotificationTemplateId' => 'string',
            'alarmNotificationTemplateName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * noticeType  通知类型, sms(短信)/email/http(s)/smn/welink/dingding(钉钉)/wechat(微信)/feishu(飞书)/wecomgroup(微信企业版)
    * alarmNotificationTemplateId  **参数解释**： 通知模板id **约束限制**： 不涉及。 **取值范围**： 长度为[3,64]个字符。 **默认取值**： 不涉及
    * alarmNotificationTemplateName  **参数解释**： 通知模板名 **约束限制**： 不涉及。 **取值范围**： 长度为[1,200]个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'noticeType' => null,
        'alarmNotificationTemplateId' => null,
        'alarmNotificationTemplateName' => null
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
    * noticeType  通知类型, sms(短信)/email/http(s)/smn/welink/dingding(钉钉)/wechat(微信)/feishu(飞书)/wecomgroup(微信企业版)
    * alarmNotificationTemplateId  **参数解释**： 通知模板id **约束限制**： 不涉及。 **取值范围**： 长度为[3,64]个字符。 **默认取值**： 不涉及
    * alarmNotificationTemplateName  **参数解释**： 通知模板名 **约束限制**： 不涉及。 **取值范围**： 长度为[1,200]个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'noticeType' => 'notice_type',
            'alarmNotificationTemplateId' => 'alarm_notification_template_id',
            'alarmNotificationTemplateName' => 'alarm_notification_template_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * noticeType  通知类型, sms(短信)/email/http(s)/smn/welink/dingding(钉钉)/wechat(微信)/feishu(飞书)/wecomgroup(微信企业版)
    * alarmNotificationTemplateId  **参数解释**： 通知模板id **约束限制**： 不涉及。 **取值范围**： 长度为[3,64]个字符。 **默认取值**： 不涉及
    * alarmNotificationTemplateName  **参数解释**： 通知模板名 **约束限制**： 不涉及。 **取值范围**： 长度为[1,200]个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'noticeType' => 'setNoticeType',
            'alarmNotificationTemplateId' => 'setAlarmNotificationTemplateId',
            'alarmNotificationTemplateName' => 'setAlarmNotificationTemplateName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * noticeType  通知类型, sms(短信)/email/http(s)/smn/welink/dingding(钉钉)/wechat(微信)/feishu(飞书)/wecomgroup(微信企业版)
    * alarmNotificationTemplateId  **参数解释**： 通知模板id **约束限制**： 不涉及。 **取值范围**： 长度为[3,64]个字符。 **默认取值**： 不涉及
    * alarmNotificationTemplateName  **参数解释**： 通知模板名 **约束限制**： 不涉及。 **取值范围**： 长度为[1,200]个字符。 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'noticeType' => 'getNoticeType',
            'alarmNotificationTemplateId' => 'getAlarmNotificationTemplateId',
            'alarmNotificationTemplateName' => 'getAlarmNotificationTemplateName'
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
    const NOTICE_TYPE_SMS = 'sms';
    const NOTICE_TYPE_EMAIL = 'email';
    const NOTICE_TYPE_HTTP_S = 'http(s)';
    const NOTICE_TYPE_SMN = 'smn';
    const NOTICE_TYPE_WELINK = 'welink';
    const NOTICE_TYPE_DINGDING = 'dingding';
    const NOTICE_TYPE_WECHAT = 'wechat';
    const NOTICE_TYPE_FEISHU = 'feishu';
    const NOTICE_TYPE_WECOMGROUP = 'wecomgroup';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoticeTypeAllowableValues()
    {
        return [
            self::NOTICE_TYPE_SMS,
            self::NOTICE_TYPE_EMAIL,
            self::NOTICE_TYPE_HTTP_S,
            self::NOTICE_TYPE_SMN,
            self::NOTICE_TYPE_WELINK,
            self::NOTICE_TYPE_DINGDING,
            self::NOTICE_TYPE_WECHAT,
            self::NOTICE_TYPE_FEISHU,
            self::NOTICE_TYPE_WECOMGROUP,
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
        $this->container['noticeType'] = isset($data['noticeType']) ? $data['noticeType'] : null;
        $this->container['alarmNotificationTemplateId'] = isset($data['alarmNotificationTemplateId']) ? $data['alarmNotificationTemplateId'] : null;
        $this->container['alarmNotificationTemplateName'] = isset($data['alarmNotificationTemplateName']) ? $data['alarmNotificationTemplateName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['noticeType'] === null) {
            $invalidProperties[] = "'noticeType' can't be null";
        }
            $allowedValues = $this->getNoticeTypeAllowableValues();
                if (!is_null($this->container['noticeType']) && !in_array($this->container['noticeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'noticeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!preg_match("/^(sms|email|http\\(s\\)|smn|welink|dingding|wechat|feishu|wecomgroup)$/", $this->container['noticeType'])) {
                $invalidProperties[] = "invalid value for 'noticeType', must be conform to the pattern /^(sms|email|http\\(s\\)|smn|welink|dingding|wechat|feishu|wecomgroup)$/.";
            }
        if ($this->container['alarmNotificationTemplateId'] === null) {
            $invalidProperties[] = "'alarmNotificationTemplateId' can't be null";
        }
            if (!preg_match("/^ant([0-9A-Za-z]){0,61}$/", $this->container['alarmNotificationTemplateId'])) {
                $invalidProperties[] = "invalid value for 'alarmNotificationTemplateId', must be conform to the pattern /^ant([0-9A-Za-z]){0,61}$/.";
            }
            if (!is_null($this->container['alarmNotificationTemplateName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-){1,200}$/", $this->container['alarmNotificationTemplateName'])) {
                $invalidProperties[] = "invalid value for 'alarmNotificationTemplateName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-){1,200}$/.";
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
    * Gets noticeType
    *  通知类型, sms(短信)/email/http(s)/smn/welink/dingding(钉钉)/wechat(微信)/feishu(飞书)/wecomgroup(微信企业版)
    *
    * @return string
    */
    public function getNoticeType()
    {
        return $this->container['noticeType'];
    }

    /**
    * Sets noticeType
    *
    * @param string $noticeType 通知类型, sms(短信)/email/http(s)/smn/welink/dingding(钉钉)/wechat(微信)/feishu(飞书)/wecomgroup(微信企业版)
    *
    * @return $this
    */
    public function setNoticeType($noticeType)
    {
        $this->container['noticeType'] = $noticeType;
        return $this;
    }

    /**
    * Gets alarmNotificationTemplateId
    *  **参数解释**： 通知模板id **约束限制**： 不涉及。 **取值范围**： 长度为[3,64]个字符。 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getAlarmNotificationTemplateId()
    {
        return $this->container['alarmNotificationTemplateId'];
    }

    /**
    * Sets alarmNotificationTemplateId
    *
    * @param string $alarmNotificationTemplateId **参数解释**： 通知模板id **约束限制**： 不涉及。 **取值范围**： 长度为[3,64]个字符。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlarmNotificationTemplateId($alarmNotificationTemplateId)
    {
        $this->container['alarmNotificationTemplateId'] = $alarmNotificationTemplateId;
        return $this;
    }

    /**
    * Gets alarmNotificationTemplateName
    *  **参数解释**： 通知模板名 **约束限制**： 不涉及。 **取值范围**： 长度为[1,200]个字符。 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlarmNotificationTemplateName()
    {
        return $this->container['alarmNotificationTemplateName'];
    }

    /**
    * Sets alarmNotificationTemplateName
    *
    * @param string|null $alarmNotificationTemplateName **参数解释**： 通知模板名 **约束限制**： 不涉及。 **取值范围**： 长度为[1,200]个字符。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlarmNotificationTemplateName($alarmNotificationTemplateName)
    {
        $this->container['alarmNotificationTemplateName'] = $alarmNotificationTemplateName;
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

