<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteSecurityReportSubscriptionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteSecurityReportSubscriptionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionId  **参数解释：** 订阅ID，唯一标识当前安全报告订阅。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，当前安全报告订阅的报告名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识订阅的报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联订阅报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目，标识订阅是否适用于当前租户的所有企业项目（true表示适用，false表示仅适用指定项目）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    * enterpriseProjectId  **参数解释：** 企业项目ID，订阅关联的企业项目唯一标识（is_all_enterprise_project为false时生效）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionId' => 'string',
            'sendingPeriod' => 'string',
            'reportName' => 'string',
            'reportCategory' => 'string',
            'topicUrn' => 'string',
            'subscriptionType' => 'string',
            'reportContentSubscription' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportSubscriptionResponseReportContentSubscription',
            'statPeriod' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportSubscriptionResponseStatPeriod',
            'isAllEnterpriseProject' => 'bool',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionId  **参数解释：** 订阅ID，唯一标识当前安全报告订阅。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，当前安全报告订阅的报告名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识订阅的报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联订阅报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目，标识订阅是否适用于当前租户的所有企业项目（true表示适用，false表示仅适用指定项目）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    * enterpriseProjectId  **参数解释：** 企业项目ID，订阅关联的企业项目唯一标识（is_all_enterprise_project为false时生效）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionId' => null,
        'sendingPeriod' => null,
        'reportName' => null,
        'reportCategory' => null,
        'topicUrn' => null,
        'subscriptionType' => null,
        'reportContentSubscription' => null,
        'statPeriod' => null,
        'isAllEnterpriseProject' => null,
        'enterpriseProjectId' => null
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
    * subscriptionId  **参数解释：** 订阅ID，唯一标识当前安全报告订阅。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，当前安全报告订阅的报告名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识订阅的报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联订阅报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目，标识订阅是否适用于当前租户的所有企业项目（true表示适用，false表示仅适用指定项目）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    * enterpriseProjectId  **参数解释：** 企业项目ID，订阅关联的企业项目唯一标识（is_all_enterprise_project为false时生效）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionId' => 'subscription_id',
            'sendingPeriod' => 'sending_period',
            'reportName' => 'report_name',
            'reportCategory' => 'report_category',
            'topicUrn' => 'topic_urn',
            'subscriptionType' => 'subscription_type',
            'reportContentSubscription' => 'report_content_subscription',
            'statPeriod' => 'stat_period',
            'isAllEnterpriseProject' => 'is_all_enterprise_project',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionId  **参数解释：** 订阅ID，唯一标识当前安全报告订阅。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，当前安全报告订阅的报告名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识订阅的报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联订阅报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目，标识订阅是否适用于当前租户的所有企业项目（true表示适用，false表示仅适用指定项目）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    * enterpriseProjectId  **参数解释：** 企业项目ID，订阅关联的企业项目唯一标识（is_all_enterprise_project为false时生效）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionId' => 'setSubscriptionId',
            'sendingPeriod' => 'setSendingPeriod',
            'reportName' => 'setReportName',
            'reportCategory' => 'setReportCategory',
            'topicUrn' => 'setTopicUrn',
            'subscriptionType' => 'setSubscriptionType',
            'reportContentSubscription' => 'setReportContentSubscription',
            'statPeriod' => 'setStatPeriod',
            'isAllEnterpriseProject' => 'setIsAllEnterpriseProject',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionId  **参数解释：** 订阅ID，唯一标识当前安全报告订阅。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，当前安全报告订阅的报告名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识订阅的报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联订阅报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * isAllEnterpriseProject  **参数解释：** 是否是所有企业项目，标识订阅是否适用于当前租户的所有企业项目（true表示适用，false表示仅适用指定项目）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
    * enterpriseProjectId  **参数解释：** 企业项目ID，订阅关联的企业项目唯一标识（is_all_enterprise_project为false时生效）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionId' => 'getSubscriptionId',
            'sendingPeriod' => 'getSendingPeriod',
            'reportName' => 'getReportName',
            'reportCategory' => 'getReportCategory',
            'topicUrn' => 'getTopicUrn',
            'subscriptionType' => 'getSubscriptionType',
            'reportContentSubscription' => 'getReportContentSubscription',
            'statPeriod' => 'getStatPeriod',
            'isAllEnterpriseProject' => 'getIsAllEnterpriseProject',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['sendingPeriod'] = isset($data['sendingPeriod']) ? $data['sendingPeriod'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportCategory'] = isset($data['reportCategory']) ? $data['reportCategory'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['reportContentSubscription'] = isset($data['reportContentSubscription']) ? $data['reportContentSubscription'] : null;
        $this->container['statPeriod'] = isset($data['statPeriod']) ? $data['statPeriod'] : null;
        $this->container['isAllEnterpriseProject'] = isset($data['isAllEnterpriseProject']) ? $data['isAllEnterpriseProject'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets subscriptionId
    *  **参数解释：** 订阅ID，唯一标识当前安全报告订阅。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
    * Sets subscriptionId
    *
    * @param string|null $subscriptionId **参数解释：** 订阅ID，唯一标识当前安全报告订阅。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets sendingPeriod
    *  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSendingPeriod()
    {
        return $this->container['sendingPeriod'];
    }

    /**
    * Sets sendingPeriod
    *
    * @param string|null $sendingPeriod **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSendingPeriod($sendingPeriod)
    {
        $this->container['sendingPeriod'] = $sendingPeriod;
        return $this;
    }

    /**
    * Gets reportName
    *  **参数解释：** 报告名称，当前安全报告订阅的报告名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
    * Sets reportName
    *
    * @param string|null $reportName **参数解释：** 报告名称，当前安全报告订阅的报告名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;
        return $this;
    }

    /**
    * Gets reportCategory
    *  **参数解释：** 报告类别，标识订阅的报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getReportCategory()
    {
        return $this->container['reportCategory'];
    }

    /**
    * Sets reportCategory
    *
    * @param string|null $reportCategory **参数解释：** 报告类别，标识订阅的报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setReportCategory($reportCategory)
    {
        $this->container['reportCategory'] = $reportCategory;
        return $this;
    }

    /**
    * Gets topicUrn
    *  **参数解释：** 主题urn，关联订阅报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $topicUrn **参数解释：** 主题urn，关联订阅报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets subscriptionType
    *  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSubscriptionType()
    {
        return $this->container['subscriptionType'];
    }

    /**
    * Sets subscriptionType
    *
    * @param string|null $subscriptionType **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSubscriptionType($subscriptionType)
    {
        $this->container['subscriptionType'] = $subscriptionType;
        return $this;
    }

    /**
    * Gets reportContentSubscription
    *  reportContentSubscription
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportSubscriptionResponseReportContentSubscription|null
    */
    public function getReportContentSubscription()
    {
        return $this->container['reportContentSubscription'];
    }

    /**
    * Sets reportContentSubscription
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportSubscriptionResponseReportContentSubscription|null $reportContentSubscription reportContentSubscription
    *
    * @return $this
    */
    public function setReportContentSubscription($reportContentSubscription)
    {
        $this->container['reportContentSubscription'] = $reportContentSubscription;
        return $this;
    }

    /**
    * Gets statPeriod
    *  statPeriod
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportSubscriptionResponseStatPeriod|null
    */
    public function getStatPeriod()
    {
        return $this->container['statPeriod'];
    }

    /**
    * Sets statPeriod
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportSubscriptionResponseStatPeriod|null $statPeriod statPeriod
    *
    * @return $this
    */
    public function setStatPeriod($statPeriod)
    {
        $this->container['statPeriod'] = $statPeriod;
        return $this;
    }

    /**
    * Gets isAllEnterpriseProject
    *  **参数解释：** 是否是所有企业项目，标识订阅是否适用于当前租户的所有企业项目（true表示适用，false表示仅适用指定项目）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
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
    * @param bool|null $isAllEnterpriseProject **参数解释：** 是否是所有企业项目，标识订阅是否适用于当前租户的所有企业项目（true表示适用，false表示仅适用指定项目）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** false
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
    *  **参数解释：** 企业项目ID，订阅关联的企业项目唯一标识（is_all_enterprise_project为false时生效）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $enterpriseProjectId **参数解释：** 企业项目ID，订阅关联的企业项目唯一标识（is_all_enterprise_project为false时生效）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

