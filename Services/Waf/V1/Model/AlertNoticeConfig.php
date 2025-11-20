<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertNoticeConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertNoticeConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 告警id，用于唯一标识一条告警通知配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enabled  **参数解释：** 是否开启告警，控制该告警通知配置的启用/禁用状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通知频率，控制告警通知的发送间隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * times  **参数解释：** 通知频率（补充说明，与sendfreq协同控制告警发送频次） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * preferHtml  预留参数，可忽略
    * threat  告警的事件类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'enabled' => 'bool',
            'topicUrn' => 'string',
            'sendfreq' => 'int',
            'local' => 'string',
            'times' => 'int',
            'name' => 'string',
            'noticeClass' => 'string',
            'nearlyExpiredTime' => 'int',
            'isAllEnterpriseProject' => 'bool',
            'description' => 'string',
            'preferHtml' => 'bool',
            'threat' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 告警id，用于唯一标识一条告警通知配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enabled  **参数解释：** 是否开启告警，控制该告警通知配置的启用/禁用状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通知频率，控制告警通知的发送间隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * times  **参数解释：** 通知频率（补充说明，与sendfreq协同控制告警发送频次） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * preferHtml  预留参数，可忽略
    * threat  告警的事件类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'enabled' => null,
        'topicUrn' => null,
        'sendfreq' => null,
        'local' => null,
        'times' => null,
        'name' => null,
        'noticeClass' => null,
        'nearlyExpiredTime' => 'int64',
        'isAllEnterpriseProject' => null,
        'description' => null,
        'preferHtml' => null,
        'threat' => null
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
    * id  **参数解释：** 告警id，用于唯一标识一条告警通知配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enabled  **参数解释：** 是否开启告警，控制该告警通知配置的启用/禁用状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通知频率，控制告警通知的发送间隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * times  **参数解释：** 通知频率（补充说明，与sendfreq协同控制告警发送频次） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * preferHtml  预留参数，可忽略
    * threat  告警的事件类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'enabled' => 'enabled',
            'topicUrn' => 'topic_urn',
            'sendfreq' => 'sendfreq',
            'local' => 'local',
            'times' => 'times',
            'name' => 'name',
            'noticeClass' => 'notice_class',
            'nearlyExpiredTime' => 'nearly_expired_time',
            'isAllEnterpriseProject' => 'is_all_enterprise_project',
            'description' => 'description',
            'preferHtml' => 'prefer_html',
            'threat' => 'threat'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 告警id，用于唯一标识一条告警通知配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enabled  **参数解释：** 是否开启告警，控制该告警通知配置的启用/禁用状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通知频率，控制告警通知的发送间隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * times  **参数解释：** 通知频率（补充说明，与sendfreq协同控制告警发送频次） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * preferHtml  预留参数，可忽略
    * threat  告警的事件类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'enabled' => 'setEnabled',
            'topicUrn' => 'setTopicUrn',
            'sendfreq' => 'setSendfreq',
            'local' => 'setLocal',
            'times' => 'setTimes',
            'name' => 'setName',
            'noticeClass' => 'setNoticeClass',
            'nearlyExpiredTime' => 'setNearlyExpiredTime',
            'isAllEnterpriseProject' => 'setIsAllEnterpriseProject',
            'description' => 'setDescription',
            'preferHtml' => 'setPreferHtml',
            'threat' => 'setThreat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 告警id，用于唯一标识一条告警通知配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * enabled  **参数解释：** 是否开启告警，控制该告警通知配置的启用/禁用状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendfreq  **参数解释：** 通知频率，控制告警通知的发送间隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * local  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * times  **参数解释：** 通知频率（补充说明，与sendfreq协同控制告警发送频次） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * noticeClass  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nearlyExpiredTime  **参数解释：** 提前通知天数，针对过期类告警提前发送通知的天数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * isAllEnterpriseProject  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 描述，对告警通知配置的补充说明 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * preferHtml  预留参数，可忽略
    * threat  告警的事件类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'enabled' => 'getEnabled',
            'topicUrn' => 'getTopicUrn',
            'sendfreq' => 'getSendfreq',
            'local' => 'getLocal',
            'times' => 'getTimes',
            'name' => 'getName',
            'noticeClass' => 'getNoticeClass',
            'nearlyExpiredTime' => 'getNearlyExpiredTime',
            'isAllEnterpriseProject' => 'getIsAllEnterpriseProject',
            'description' => 'getDescription',
            'preferHtml' => 'getPreferHtml',
            'threat' => 'getThreat'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['sendfreq'] = isset($data['sendfreq']) ? $data['sendfreq'] : null;
        $this->container['local'] = isset($data['local']) ? $data['local'] : null;
        $this->container['times'] = isset($data['times']) ? $data['times'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['noticeClass'] = isset($data['noticeClass']) ? $data['noticeClass'] : null;
        $this->container['nearlyExpiredTime'] = isset($data['nearlyExpiredTime']) ? $data['nearlyExpiredTime'] : null;
        $this->container['isAllEnterpriseProject'] = isset($data['isAllEnterpriseProject']) ? $data['isAllEnterpriseProject'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['preferHtml'] = isset($data['preferHtml']) ? $data['preferHtml'] : null;
        $this->container['threat'] = isset($data['threat']) ? $data['threat'] : null;
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
    *  **参数解释：** 告警id，用于唯一标识一条告警通知配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $id **参数解释：** 告警id，用于唯一标识一条告警通知配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释：** 是否开启告警，控制该告警通知配置的启用/禁用状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param bool|null $enabled **参数解释：** 是否开启告警，控制该告警通知配置的启用/禁用状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $topicUrn **参数解释：** 通知模板，关联用于发送告警通知的SMN主题URN 查询可使用的主题，通过 云日志服务的“查询SMN主题”接口，返回体中的\"topic_urn\"字段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 通知频率，控制告警通知的发送间隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param int|null $sendfreq **参数解释：** 通知频率，控制告警通知的发送间隔 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLocal()
    {
        return $this->container['local'];
    }

    /**
    * Sets local
    *
    * @param string|null $local **参数解释：** 地区，指定告警通知的语言或地域相关配置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 通知频率（补充说明，与sendfreq协同控制告警发送频次） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param int|null $times **参数解释：** 通知频率（补充说明，与sendfreq协同控制告警发送频次） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 告警名称，用于标识告警通知配置的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $noticeClass **参数解释：** 告警类型，区分不同场景的告警（如防护规则触发、资源异常等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param bool|null $isAllEnterpriseProject **参数解释：** 是否所有企业项目，标识该告警配置是否适用于所有企业项目 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * Gets threat
    *  告警的事件类型
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
    * @param string[]|null $threat 告警的事件类型
    *
    * @return $this
    */
    public function setThreat($threat)
    {
        $this->container['threat'] = $threat;
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

