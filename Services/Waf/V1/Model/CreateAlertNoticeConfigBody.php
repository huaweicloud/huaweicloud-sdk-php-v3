<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAlertNoticeConfigBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAlertNoticeConfigBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  **参数解释：** 功能启用状态：true表示启用当前配置，false表示禁用。 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * preferHtml  **参数解释：** 预留参数，默认为false **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** false
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN,通过“消息通知服务”获取 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通间间隔,单位为分钟。当通知类型为防护事件时,该参数表示在该时间间隔内,攻击次数等于或者大于设定阈值时,将发送告警通知,支持的值:5、15、30、60、120、360、720、1440;当通知类型为证书到期时,该参数表示每隔多长时间发送一次告警通知,支持的值为1440、10080(单位为分钟)。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** - zh-cn - en-us  **默认取值：** 不涉及
    * times  **参数解释：** 当通知类型为防护事件时,需要填写该参数。在该时间间隔内,当攻击次数大于或等于您设置的阈值时才会发送告警通知 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** - threat_alert_notice：威胁告警通知  - cert_alert_notice：证书告警通知, - rule_alert_notice：规则告警通知, - cname_ip_alert_notice：域名 / IP 告警通知  **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * threat  **参数解释：** 威胁类型范围：指定需要告警的威胁类型，如[\"all\"]表示所有威胁 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    * ruleType  **参数解释：** 指定需要告警的规则类型，[\"all\"]表示所有规则类型。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'preferHtml' => 'bool',
            'topicUrn' => 'string',
            'sendfreq' => 'int',
            'local' => 'string',
            'times' => 'int',
            'name' => 'string',
            'noticeClass' => 'string',
            'nearlyExpiredTime' => 'int',
            'isAllEnterpriseProject' => 'bool',
            'description' => 'string',
            'threat' => 'string[]',
            'ruleType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  **参数解释：** 功能启用状态：true表示启用当前配置，false表示禁用。 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * preferHtml  **参数解释：** 预留参数，默认为false **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** false
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN,通过“消息通知服务”获取 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通间间隔,单位为分钟。当通知类型为防护事件时,该参数表示在该时间间隔内,攻击次数等于或者大于设定阈值时,将发送告警通知,支持的值:5、15、30、60、120、360、720、1440;当通知类型为证书到期时,该参数表示每隔多长时间发送一次告警通知,支持的值为1440、10080(单位为分钟)。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** - zh-cn - en-us  **默认取值：** 不涉及
    * times  **参数解释：** 当通知类型为防护事件时,需要填写该参数。在该时间间隔内,当攻击次数大于或等于您设置的阈值时才会发送告警通知 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** - threat_alert_notice：威胁告警通知  - cert_alert_notice：证书告警通知, - rule_alert_notice：规则告警通知, - cname_ip_alert_notice：域名 / IP 告警通知  **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * threat  **参数解释：** 威胁类型范围：指定需要告警的威胁类型，如[\"all\"]表示所有威胁 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    * ruleType  **参数解释：** 指定需要告警的规则类型，[\"all\"]表示所有规则类型。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'preferHtml' => null,
        'topicUrn' => null,
        'sendfreq' => null,
        'local' => null,
        'times' => null,
        'name' => null,
        'noticeClass' => null,
        'nearlyExpiredTime' => 'int64',
        'isAllEnterpriseProject' => null,
        'description' => null,
        'threat' => null,
        'ruleType' => null
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
    * enabled  **参数解释：** 功能启用状态：true表示启用当前配置，false表示禁用。 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * preferHtml  **参数解释：** 预留参数，默认为false **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** false
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN,通过“消息通知服务”获取 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通间间隔,单位为分钟。当通知类型为防护事件时,该参数表示在该时间间隔内,攻击次数等于或者大于设定阈值时,将发送告警通知,支持的值:5、15、30、60、120、360、720、1440;当通知类型为证书到期时,该参数表示每隔多长时间发送一次告警通知,支持的值为1440、10080(单位为分钟)。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** - zh-cn - en-us  **默认取值：** 不涉及
    * times  **参数解释：** 当通知类型为防护事件时,需要填写该参数。在该时间间隔内,当攻击次数大于或等于您设置的阈值时才会发送告警通知 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** - threat_alert_notice：威胁告警通知  - cert_alert_notice：证书告警通知, - rule_alert_notice：规则告警通知, - cname_ip_alert_notice：域名 / IP 告警通知  **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * threat  **参数解释：** 威胁类型范围：指定需要告警的威胁类型，如[\"all\"]表示所有威胁 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    * ruleType  **参数解释：** 指定需要告警的规则类型，[\"all\"]表示所有规则类型。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'preferHtml' => 'prefer_html',
            'topicUrn' => 'topic_urn',
            'sendfreq' => 'sendfreq',
            'local' => 'local',
            'times' => 'times',
            'name' => 'name',
            'noticeClass' => 'notice_class',
            'nearlyExpiredTime' => 'nearly_expired_time',
            'isAllEnterpriseProject' => 'is_all_enterprise_project',
            'description' => 'description',
            'threat' => 'threat',
            'ruleType' => 'rule_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  **参数解释：** 功能启用状态：true表示启用当前配置，false表示禁用。 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * preferHtml  **参数解释：** 预留参数，默认为false **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** false
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN,通过“消息通知服务”获取 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通间间隔,单位为分钟。当通知类型为防护事件时,该参数表示在该时间间隔内,攻击次数等于或者大于设定阈值时,将发送告警通知,支持的值:5、15、30、60、120、360、720、1440;当通知类型为证书到期时,该参数表示每隔多长时间发送一次告警通知,支持的值为1440、10080(单位为分钟)。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** - zh-cn - en-us  **默认取值：** 不涉及
    * times  **参数解释：** 当通知类型为防护事件时,需要填写该参数。在该时间间隔内,当攻击次数大于或等于您设置的阈值时才会发送告警通知 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** - threat_alert_notice：威胁告警通知  - cert_alert_notice：证书告警通知, - rule_alert_notice：规则告警通知, - cname_ip_alert_notice：域名 / IP 告警通知  **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * threat  **参数解释：** 威胁类型范围：指定需要告警的威胁类型，如[\"all\"]表示所有威胁 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    * ruleType  **参数解释：** 指定需要告警的规则类型，[\"all\"]表示所有规则类型。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'preferHtml' => 'setPreferHtml',
            'topicUrn' => 'setTopicUrn',
            'sendfreq' => 'setSendfreq',
            'local' => 'setLocal',
            'times' => 'setTimes',
            'name' => 'setName',
            'noticeClass' => 'setNoticeClass',
            'nearlyExpiredTime' => 'setNearlyExpiredTime',
            'isAllEnterpriseProject' => 'setIsAllEnterpriseProject',
            'description' => 'setDescription',
            'threat' => 'setThreat',
            'ruleType' => 'setRuleType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  **参数解释：** 功能启用状态：true表示启用当前配置，false表示禁用。 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * preferHtml  **参数解释：** 预留参数，默认为false **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** false
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN,通过“消息通知服务”获取 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通间间隔,单位为分钟。当通知类型为防护事件时,该参数表示在该时间间隔内,攻击次数等于或者大于设定阈值时,将发送告警通知,支持的值:5、15、30、60、120、360、720、1440;当通知类型为证书到期时,该参数表示每隔多长时间发送一次告警通知,支持的值为1440、10080(单位为分钟)。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** - zh-cn - en-us  **默认取值：** 不涉及
    * times  **参数解释：** 当通知类型为防护事件时,需要填写该参数。在该时间间隔内,当攻击次数大于或等于您设置的阈值时才会发送告警通知 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** - threat_alert_notice：威胁告警通知  - cert_alert_notice：证书告警通知, - rule_alert_notice：规则告警通知, - cname_ip_alert_notice：域名 / IP 告警通知  **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * threat  **参数解释：** 威胁类型范围：指定需要告警的威胁类型，如[\"all\"]表示所有威胁 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    * ruleType  **参数解释：** 指定需要告警的规则类型，[\"all\"]表示所有规则类型。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'preferHtml' => 'getPreferHtml',
            'topicUrn' => 'getTopicUrn',
            'sendfreq' => 'getSendfreq',
            'local' => 'getLocal',
            'times' => 'getTimes',
            'name' => 'getName',
            'noticeClass' => 'getNoticeClass',
            'nearlyExpiredTime' => 'getNearlyExpiredTime',
            'isAllEnterpriseProject' => 'getIsAllEnterpriseProject',
            'description' => 'getDescription',
            'threat' => 'getThreat',
            'ruleType' => 'getRuleType'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['preferHtml'] = isset($data['preferHtml']) ? $data['preferHtml'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['sendfreq'] = isset($data['sendfreq']) ? $data['sendfreq'] : null;
        $this->container['local'] = isset($data['local']) ? $data['local'] : null;
        $this->container['times'] = isset($data['times']) ? $data['times'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['noticeClass'] = isset($data['noticeClass']) ? $data['noticeClass'] : null;
        $this->container['nearlyExpiredTime'] = isset($data['nearlyExpiredTime']) ? $data['nearlyExpiredTime'] : null;
        $this->container['isAllEnterpriseProject'] = isset($data['isAllEnterpriseProject']) ? $data['isAllEnterpriseProject'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['threat'] = isset($data['threat']) ? $data['threat'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['preferHtml'] === null) {
            $invalidProperties[] = "'preferHtml' can't be null";
        }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
        if ($this->container['local'] === null) {
            $invalidProperties[] = "'local' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['noticeClass'] === null) {
            $invalidProperties[] = "'noticeClass' can't be null";
        }
        if ($this->container['isAllEnterpriseProject'] === null) {
            $invalidProperties[] = "'isAllEnterpriseProject' can't be null";
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
    * Gets enabled
    *  **参数解释：** 功能启用状态：true表示启用当前配置，false表示禁用。 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled **参数解释：** 功能启用状态：true表示启用当前配置，false表示禁用。 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets preferHtml
    *  **参数解释：** 预留参数，默认为false **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** false
    *
    * @return bool
    */
    public function getPreferHtml()
    {
        return $this->container['preferHtml'];
    }

    /**
    * Sets preferHtml
    *
    * @param bool $preferHtml **参数解释：** 预留参数，默认为false **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** false
    *
    * @return $this
    */
    public function setPreferHtml($preferHtml)
    {
        $this->container['preferHtml'] = $preferHtml;
        return $this;
    }

    /**
    * Gets topicUrn
    *  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN,通过“消息通知服务”获取 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string $topicUrn **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN,通过“消息通知服务”获取 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 通间间隔,单位为分钟。当通知类型为防护事件时,该参数表示在该时间间隔内,攻击次数等于或者大于设定阈值时,将发送告警通知,支持的值:5、15、30、60、120、360、720、1440;当通知类型为证书到期时,该参数表示每隔多长时间发送一次告警通知,支持的值为1440、10080(单位为分钟)。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param int|null $sendfreq **参数解释：** 通间间隔,单位为分钟。当通知类型为防护事件时,该参数表示在该时间间隔内,攻击次数等于或者大于设定阈值时,将发送告警通知,支持的值:5、15、30、60、120、360、720、1440;当通知类型为证书到期时,该参数表示每隔多长时间发送一次告警通知,支持的值为1440、10080(单位为分钟)。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSendfreq($sendfreq)
    {
        $this->container['sendfreq'] = $sendfreq;
        return $this;
    }

    /**
    * Gets local
    *  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** - zh-cn - en-us  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getLocal()
    {
        return $this->container['local'];
    }

    /**
    * Sets local
    *
    * @param string $local **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** - zh-cn - en-us  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLocal($local)
    {
        $this->container['local'] = $local;
        return $this;
    }

    /**
    * Gets times
    *  **参数解释：** 当通知类型为防护事件时,需要填写该参数。在该时间间隔内,当攻击次数大于或等于您设置的阈值时才会发送告警通知 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param int|null $times **参数解释：** 当通知类型为防护事件时,需要填写该参数。在该时间间隔内,当攻击次数大于或等于您设置的阈值时才会发送告警通知 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTimes($times)
    {
        $this->container['times'] = $times;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string $name **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets noticeClass
    *  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** - threat_alert_notice：威胁告警通知  - cert_alert_notice：证书告警通知, - rule_alert_notice：规则告警通知, - cname_ip_alert_notice：域名 / IP 告警通知  **默认取值：** 不涉及
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
    * @param string $noticeClass **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** - threat_alert_notice：威胁告警通知  - cert_alert_notice：证书告警通知, - rule_alert_notice：规则告警通知, - cname_ip_alert_notice：域名 / IP 告警通知  **默认取值：** 不涉及
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
    *  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getNearlyExpiredTime()
    {
        return $this->container['nearlyExpiredTime'];
    }

    /**
    * Sets nearlyExpiredTime
    *
    * @param int|null $nearlyExpiredTime **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    *
    * @return bool
    */
    public function getIsAllEnterpriseProject()
    {
        return $this->container['isAllEnterpriseProject'];
    }

    /**
    * Sets isAllEnterpriseProject
    *
    * @param bool $isAllEnterpriseProject **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** - true - false  **默认取值：** true
    *
    * @return $this
    */
    public function setIsAllEnterpriseProject($isAllEnterpriseProject)
    {
        $this->container['isAllEnterpriseProject'] = $isAllEnterpriseProject;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets threat
    *  **参数解释：** 威胁类型范围：指定需要告警的威胁类型，如[\"all\"]表示所有威胁 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
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
    * @param string[]|null $threat **参数解释：** 威胁类型范围：指定需要告警的威胁类型，如[\"all\"]表示所有威胁 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    *
    * @return $this
    */
    public function setThreat($threat)
    {
        $this->container['threat'] = $threat;
        return $this;
    }

    /**
    * Gets ruleType
    *  **参数解释：** 指定需要告警的规则类型，[\"all\"]表示所有规则类型。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    *
    * @return string[]|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string[]|null $ruleType **参数解释：** 指定需要告警的规则类型，[\"all\"]表示所有规则类型。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** all
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
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

