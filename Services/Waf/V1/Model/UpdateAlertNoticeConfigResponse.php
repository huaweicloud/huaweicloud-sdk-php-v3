<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAlertNoticeConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAlertNoticeConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * preferHtml  预留参数，可忽略
    * noticeClass  通知类型
    * nearlyExpiredTime  提前通知天数
    * isAllEnterpriseProject  是否是所有企业项目
    * enterpriseProjectId  企业项目ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'enabled' => 'bool',
            'topicUrn' => 'string',
            'sendfreq' => 'int',
            'locale' => 'string',
            'times' => 'int',
            'threat' => 'string[]',
            'preferHtml' => 'bool',
            'noticeClass' => 'string',
            'nearlyExpiredTime' => 'string',
            'isAllEnterpriseProject' => 'bool',
            'enterpriseProjectId' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * preferHtml  预留参数，可忽略
    * noticeClass  通知类型
    * nearlyExpiredTime  提前通知天数
    * isAllEnterpriseProject  是否是所有企业项目
    * enterpriseProjectId  企业项目ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'enabled' => null,
        'topicUrn' => null,
        'sendfreq' => 'int32',
        'locale' => null,
        'times' => 'int32',
        'threat' => null,
        'preferHtml' => null,
        'noticeClass' => null,
        'nearlyExpiredTime' => null,
        'isAllEnterpriseProject' => null,
        'enterpriseProjectId' => null,
        'updateTime' => 'int64'
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
    * id  ID
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * preferHtml  预留参数，可忽略
    * noticeClass  通知类型
    * nearlyExpiredTime  提前通知天数
    * isAllEnterpriseProject  是否是所有企业项目
    * enterpriseProjectId  企业项目ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'enabled' => 'enabled',
            'topicUrn' => 'topic_urn',
            'sendfreq' => 'sendfreq',
            'locale' => 'locale',
            'times' => 'times',
            'threat' => 'threat',
            'preferHtml' => 'prefer_html',
            'noticeClass' => 'notice_class',
            'nearlyExpiredTime' => 'nearly_expired_time',
            'isAllEnterpriseProject' => 'is_all_enterprise_project',
            'enterpriseProjectId' => 'enterprise_project_id',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * preferHtml  预留参数，可忽略
    * noticeClass  通知类型
    * nearlyExpiredTime  提前通知天数
    * isAllEnterpriseProject  是否是所有企业项目
    * enterpriseProjectId  企业项目ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'enabled' => 'setEnabled',
            'topicUrn' => 'setTopicUrn',
            'sendfreq' => 'setSendfreq',
            'locale' => 'setLocale',
            'times' => 'setTimes',
            'threat' => 'setThreat',
            'preferHtml' => 'setPreferHtml',
            'noticeClass' => 'setNoticeClass',
            'nearlyExpiredTime' => 'setNearlyExpiredTime',
            'isAllEnterpriseProject' => 'setIsAllEnterpriseProject',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * name  告警通知名称
    * enabled  是否开启   - false: 不开启   - true: 开启
    * topicUrn  主题
    * sendfreq  时间间隔，单位为分钟。当通知类型为防护事件时，该参数表示在改时间间隔内，攻击次数等于或者大于设定阈值时，将发送告警通知，支持的值：5、15、30、60、120、360、720、1440；当通知类型为证书到期时，该参数表示每隔多长时间发送一次告警通知，支持的值为1440、10080（单位为分钟）。
    * locale  语言
    * times  当通知类型为防护事件时，需要填写该参数。在该时间间隔内，当攻击次数大于或等于您设置的阈值时才会发送告警通知
    * threat  事件类型
    * preferHtml  预留参数，可忽略
    * noticeClass  通知类型
    * nearlyExpiredTime  提前通知天数
    * isAllEnterpriseProject  是否是所有企业项目
    * enterpriseProjectId  企业项目ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'enabled' => 'getEnabled',
            'topicUrn' => 'getTopicUrn',
            'sendfreq' => 'getSendfreq',
            'locale' => 'getLocale',
            'times' => 'getTimes',
            'threat' => 'getThreat',
            'preferHtml' => 'getPreferHtml',
            'noticeClass' => 'getNoticeClass',
            'nearlyExpiredTime' => 'getNearlyExpiredTime',
            'isAllEnterpriseProject' => 'getIsAllEnterpriseProject',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'updateTime' => 'getUpdateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['sendfreq'] = isset($data['sendfreq']) ? $data['sendfreq'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['times'] = isset($data['times']) ? $data['times'] : 1;
        $this->container['threat'] = isset($data['threat']) ? $data['threat'] : null;
        $this->container['preferHtml'] = isset($data['preferHtml']) ? $data['preferHtml'] : false;
        $this->container['noticeClass'] = isset($data['noticeClass']) ? $data['noticeClass'] : null;
        $this->container['nearlyExpiredTime'] = isset($data['nearlyExpiredTime']) ? $data['nearlyExpiredTime'] : null;
        $this->container['isAllEnterpriseProject'] = isset($data['isAllEnterpriseProject']) ? $data['isAllEnterpriseProject'] : true;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    *  ID
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
    * @param string|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  告警通知名称
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
    * @param string|null $name 告警通知名称
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
    *  主题
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 主题
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
    *  语言
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
    * @param string|null $locale 语言
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
    * Gets preferHtml
    *  预留参数，可忽略
    *
    * @return bool|null
    */
    public function getPreferHtml()
    {
        return $this->container['preferHtml'];
    }

    /**
    * Sets preferHtml
    *
    * @param bool|null $preferHtml 预留参数，可忽略
    *
    * @return $this
    */
    public function setPreferHtml($preferHtml)
    {
        $this->container['preferHtml'] = $preferHtml;
        return $this;
    }

    /**
    * Gets noticeClass
    *  通知类型
    *
    * @return string|null
    */
    public function getNoticeClass()
    {
        return $this->container['noticeClass'];
    }

    /**
    * Sets noticeClass
    *
    * @param string|null $noticeClass 通知类型
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
    *  提前通知天数
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
    * @param string|null $nearlyExpiredTime 提前通知天数
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
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

