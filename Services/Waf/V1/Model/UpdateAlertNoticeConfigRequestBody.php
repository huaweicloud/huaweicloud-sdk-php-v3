<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAlertNoticeConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAlertNoticeConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题URN，通过消息通知服务获取
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言   - zh-cn：中文   - en-us
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * noticeClass  通知类型    - threat_alert_notice: 防护事件    - cert_alert_notice: 证书到期
    * nearlyExpiredTime  提前通知天数，通知类型为证书到期通知需要填写该参数
    * isAllEnterpriseProject  是否是所有企业项目
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'enabled' => 'bool',
            'topicUrn' => 'string',
            'sendfreq' => 'int',
            'locale' => 'string',
            'times' => 'int',
            'threat' => 'string[]',
            'noticeClass' => 'string',
            'nearlyExpiredTime' => 'string',
            'isAllEnterpriseProject' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题URN，通过消息通知服务获取
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言   - zh-cn：中文   - en-us
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * noticeClass  通知类型    - threat_alert_notice: 防护事件    - cert_alert_notice: 证书到期
    * nearlyExpiredTime  提前通知天数，通知类型为证书到期通知需要填写该参数
    * isAllEnterpriseProject  是否是所有企业项目
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'enabled' => null,
        'topicUrn' => null,
        'sendfreq' => 'int32',
        'locale' => null,
        'times' => 'int32',
        'threat' => null,
        'noticeClass' => null,
        'nearlyExpiredTime' => null,
        'isAllEnterpriseProject' => null
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
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题URN，通过消息通知服务获取
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言   - zh-cn：中文   - en-us
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * noticeClass  通知类型    - threat_alert_notice: 防护事件    - cert_alert_notice: 证书到期
    * nearlyExpiredTime  提前通知天数，通知类型为证书到期通知需要填写该参数
    * isAllEnterpriseProject  是否是所有企业项目
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'enabled' => 'enabled',
            'topicUrn' => 'topic_urn',
            'sendfreq' => 'sendfreq',
            'locale' => 'locale',
            'times' => 'times',
            'threat' => 'threat',
            'noticeClass' => 'notice_class',
            'nearlyExpiredTime' => 'nearly_expired_time',
            'isAllEnterpriseProject' => 'is_all_enterprise_project'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题URN，通过消息通知服务获取
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言   - zh-cn：中文   - en-us
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * noticeClass  通知类型    - threat_alert_notice: 防护事件    - cert_alert_notice: 证书到期
    * nearlyExpiredTime  提前通知天数，通知类型为证书到期通知需要填写该参数
    * isAllEnterpriseProject  是否是所有企业项目
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'enabled' => 'setEnabled',
            'topicUrn' => 'setTopicUrn',
            'sendfreq' => 'setSendfreq',
            'locale' => 'setLocale',
            'times' => 'setTimes',
            'threat' => 'setThreat',
            'noticeClass' => 'setNoticeClass',
            'nearlyExpiredTime' => 'setNearlyExpiredTime',
            'isAllEnterpriseProject' => 'setIsAllEnterpriseProject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题URN，通过消息通知服务获取
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言   - zh-cn：中文   - en-us
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * noticeClass  通知类型    - threat_alert_notice: 防护事件    - cert_alert_notice: 证书到期
    * nearlyExpiredTime  提前通知天数，通知类型为证书到期通知需要填写该参数
    * isAllEnterpriseProject  是否是所有企业项目
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'enabled' => 'getEnabled',
            'topicUrn' => 'getTopicUrn',
            'sendfreq' => 'getSendfreq',
            'locale' => 'getLocale',
            'times' => 'getTimes',
            'threat' => 'getThreat',
            'noticeClass' => 'getNoticeClass',
            'nearlyExpiredTime' => 'getNearlyExpiredTime',
            'isAllEnterpriseProject' => 'getIsAllEnterpriseProject'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['sendfreq'] = isset($data['sendfreq']) ? $data['sendfreq'] : 5;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['times'] = isset($data['times']) ? $data['times'] : 1;
        $this->container['threat'] = isset($data['threat']) ? $data['threat'] : null;
        $this->container['noticeClass'] = isset($data['noticeClass']) ? $data['noticeClass'] : null;
        $this->container['nearlyExpiredTime'] = isset($data['nearlyExpiredTime']) ? $data['nearlyExpiredTime'] : null;
        $this->container['isAllEnterpriseProject'] = isset($data['isAllEnterpriseProject']) ? $data['isAllEnterpriseProject'] : null;
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
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
        if ($this->container['noticeClass'] === null) {
            $invalidProperties[] = "'noticeClass' can't be null";
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
    *  告警通知名称
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
    * @param string $name 告警通知名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enabled
    *  是否开启   - false: 不开启   - true: 开启
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否开启   - false: 不开启   - true: 开启
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题URN，通过消息通知服务获取
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn 主题URN，通过消息通知服务获取
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets sendfreq
    *  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    *
    * @return int|null
    */
    public function getSendfreq()
    {
        return $this->container['sendfreq'];
    }

    /**
    * Sets sendfreq
    *
    * @param int|null $sendfreq 时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    *
    * @return $this
    */
    public function setSendfreq($sendfreq)
    {
        $this->container['sendfreq'] = $sendfreq;
        return $this;
    }

    /**
    * Gets locale
    *  语言   - zh-cn：中文   - en-us
    *
    * @return string|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param string|null $locale 语言   - zh-cn：中文   - en-us
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
        return $this;
    }

    /**
    * Gets times
    *  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    *
    * @return int|null
    */
    public function getTimes()
    {
        return $this->container['times'];
    }

    /**
    * Sets times
    *
    * @param int|null $times 当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    *
    * @return $this
    */
    public function setTimes($times)
    {
        $this->container['times'] = $times;
        return $this;
    }

    /**
    * Gets threat
    *  事件类型
    *
    * @return string[]|null
    */
    public function getThreat()
    {
        return $this->container['threat'];
    }

    /**
    * Sets threat
    *
    * @param string[]|null $threat 事件类型
    *
    * @return $this
    */
    public function setThreat($threat)
    {
        $this->container['threat'] = $threat;
        return $this;
    }

    /**
    * Gets noticeClass
    *  通知类型    - threat_alert_notice: 防护事件    - cert_alert_notice: 证书到期
    *
    * @return string
    */
    public function getNoticeClass()
    {
        return $this->container['noticeClass'];
    }

    /**
    * Sets noticeClass
    *
    * @param string $noticeClass 通知类型    - threat_alert_notice: 防护事件    - cert_alert_notice: 证书到期
    *
    * @return $this
    */
    public function setNoticeClass($noticeClass)
    {
        $this->container['noticeClass'] = $noticeClass;
        return $this;
    }

    /**
    * Gets nearlyExpiredTime
    *  提前通知天数，通知类型为证书到期通知需要填写该参数
    *
    * @return string|null
    */
    public function getNearlyExpiredTime()
    {
        return $this->container['nearlyExpiredTime'];
    }

    /**
    * Sets nearlyExpiredTime
    *
    * @param string|null $nearlyExpiredTime 提前通知天数，通知类型为证书到期通知需要填写该参数
    *
    * @return $this
    */
    public function setNearlyExpiredTime($nearlyExpiredTime)
    {
        $this->container['nearlyExpiredTime'] = $nearlyExpiredTime;
        return $this;
    }

    /**
    * Gets isAllEnterpriseProject
    *  是否是所有企业项目
    *
    * @return bool|null
    */
    public function getIsAllEnterpriseProject()
    {
        return $this->container['isAllEnterpriseProject'];
    }

    /**
    * Sets isAllEnterpriseProject
    *
    * @param bool|null $isAllEnterpriseProject 是否是所有企业项目
    *
    * @return $this
    */
    public function setIsAllEnterpriseProject($isAllEnterpriseProject)
    {
        $this->container['isAllEnterpriseProject'] = $isAllEnterpriseProject;
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

