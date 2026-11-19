<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeSecurityReportRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeSecurityReportRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释**: 报告ID **约束限制**: 必填 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **约束限制**: 不涉及 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点  **默认取值**: 不涉及
    * reportName  **参数解释**: 报告名称 **约束限制**: 必填 **取值范围**: 字符长度1-32位 **默认取值**: 不涉及
    * topicUrn  **参数解释**: 主题urn **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * displayName  **参数解释**: 主题的显示名 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * subscriptionType  **参数解释**: 订阅的方式 **约束限制**: 不涉及 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱  **默认取值**: 不涉及
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * logoType  **参数解释**: 报告logo类型 **约束限制**: 不涉及 **取值范围**: - default：华为logo - customize：自定义logo  **默认取值**: 不涉及
    * logoId  **参数解释**: 自定义logo的文件id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'int',
            'sendingPeriod' => 'string',
            'reportName' => 'string',
            'topicUrn' => 'string',
            'displayName' => 'string',
            'subscriptionType' => 'string',
            'overviewSubscriptions' => '\HuaweiCloud\SDK\Hss\V5\Model\OverviewSubscriptionReq',
            'scansSubscriptions' => '\HuaweiCloud\SDK\Hss\V5\Model\ScansSubscriptionReq',
            'intrusionSubscriptions' => '\HuaweiCloud\SDK\Hss\V5\Model\IntrusionSubscriptionReq',
            'logoType' => 'string',
            'logoId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释**: 报告ID **约束限制**: 必填 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **约束限制**: 不涉及 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点  **默认取值**: 不涉及
    * reportName  **参数解释**: 报告名称 **约束限制**: 必填 **取值范围**: 字符长度1-32位 **默认取值**: 不涉及
    * topicUrn  **参数解释**: 主题urn **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * displayName  **参数解释**: 主题的显示名 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * subscriptionType  **参数解释**: 订阅的方式 **约束限制**: 不涉及 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱  **默认取值**: 不涉及
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * logoType  **参数解释**: 报告logo类型 **约束限制**: 不涉及 **取值范围**: - default：华为logo - customize：自定义logo  **默认取值**: 不涉及
    * logoId  **参数解释**: 自定义logo的文件id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => 'int32',
        'sendingPeriod' => null,
        'reportName' => null,
        'topicUrn' => null,
        'displayName' => null,
        'subscriptionType' => null,
        'overviewSubscriptions' => null,
        'scansSubscriptions' => null,
        'intrusionSubscriptions' => null,
        'logoType' => null,
        'logoId' => null
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
    * reportId  **参数解释**: 报告ID **约束限制**: 必填 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **约束限制**: 不涉及 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点  **默认取值**: 不涉及
    * reportName  **参数解释**: 报告名称 **约束限制**: 必填 **取值范围**: 字符长度1-32位 **默认取值**: 不涉及
    * topicUrn  **参数解释**: 主题urn **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * displayName  **参数解释**: 主题的显示名 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * subscriptionType  **参数解释**: 订阅的方式 **约束限制**: 不涉及 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱  **默认取值**: 不涉及
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * logoType  **参数解释**: 报告logo类型 **约束限制**: 不涉及 **取值范围**: - default：华为logo - customize：自定义logo  **默认取值**: 不涉及
    * logoId  **参数解释**: 自定义logo的文件id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'sendingPeriod' => 'sending_period',
            'reportName' => 'report_name',
            'topicUrn' => 'topic_urn',
            'displayName' => 'display_name',
            'subscriptionType' => 'subscription_type',
            'overviewSubscriptions' => 'overview_subscriptions',
            'scansSubscriptions' => 'scans_subscriptions',
            'intrusionSubscriptions' => 'intrusion_subscriptions',
            'logoType' => 'logo_type',
            'logoId' => 'logo_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释**: 报告ID **约束限制**: 必填 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **约束限制**: 不涉及 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点  **默认取值**: 不涉及
    * reportName  **参数解释**: 报告名称 **约束限制**: 必填 **取值范围**: 字符长度1-32位 **默认取值**: 不涉及
    * topicUrn  **参数解释**: 主题urn **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * displayName  **参数解释**: 主题的显示名 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * subscriptionType  **参数解释**: 订阅的方式 **约束限制**: 不涉及 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱  **默认取值**: 不涉及
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * logoType  **参数解释**: 报告logo类型 **约束限制**: 不涉及 **取值范围**: - default：华为logo - customize：自定义logo  **默认取值**: 不涉及
    * logoId  **参数解释**: 自定义logo的文件id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'sendingPeriod' => 'setSendingPeriod',
            'reportName' => 'setReportName',
            'topicUrn' => 'setTopicUrn',
            'displayName' => 'setDisplayName',
            'subscriptionType' => 'setSubscriptionType',
            'overviewSubscriptions' => 'setOverviewSubscriptions',
            'scansSubscriptions' => 'setScansSubscriptions',
            'intrusionSubscriptions' => 'setIntrusionSubscriptions',
            'logoType' => 'setLogoType',
            'logoId' => 'setLogoId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释**: 报告ID **约束限制**: 必填 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    * sendingPeriod  **参数解释**: 报告发送的时间段 **约束限制**: 不涉及 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点  **默认取值**: 不涉及
    * reportName  **参数解释**: 报告名称 **约束限制**: 必填 **取值范围**: 字符长度1-32位 **默认取值**: 不涉及
    * topicUrn  **参数解释**: 主题urn **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * displayName  **参数解释**: 主题的显示名 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * subscriptionType  **参数解释**: 订阅的方式 **约束限制**: 不涉及 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱  **默认取值**: 不涉及
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * logoType  **参数解释**: 报告logo类型 **约束限制**: 不涉及 **取值范围**: - default：华为logo - customize：自定义logo  **默认取值**: 不涉及
    * logoId  **参数解释**: 自定义logo的文件id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'sendingPeriod' => 'getSendingPeriod',
            'reportName' => 'getReportName',
            'topicUrn' => 'getTopicUrn',
            'displayName' => 'getDisplayName',
            'subscriptionType' => 'getSubscriptionType',
            'overviewSubscriptions' => 'getOverviewSubscriptions',
            'scansSubscriptions' => 'getScansSubscriptions',
            'intrusionSubscriptions' => 'getIntrusionSubscriptions',
            'logoType' => 'getLogoType',
            'logoId' => 'getLogoId'
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['sendingPeriod'] = isset($data['sendingPeriod']) ? $data['sendingPeriod'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['overviewSubscriptions'] = isset($data['overviewSubscriptions']) ? $data['overviewSubscriptions'] : null;
        $this->container['scansSubscriptions'] = isset($data['scansSubscriptions']) ? $data['scansSubscriptions'] : null;
        $this->container['intrusionSubscriptions'] = isset($data['intrusionSubscriptions']) ? $data['intrusionSubscriptions'] : null;
        $this->container['logoType'] = isset($data['logoType']) ? $data['logoType'] : null;
        $this->container['logoId'] = isset($data['logoId']) ? $data['logoId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reportId'] === null) {
            $invalidProperties[] = "'reportId' can't be null";
        }
            if (($this->container['reportId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reportId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['reportId'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sendingPeriod']) && !preg_match("/^morning|noon|afternoon|evening$/", $this->container['sendingPeriod'])) {
                $invalidProperties[] = "invalid value for 'sendingPeriod', must be conform to the pattern /^morning|noon|afternoon|evening$/.";
            }
        if ($this->container['reportName'] === null) {
            $invalidProperties[] = "'reportName' can't be null";
        }
            if ((mb_strlen($this->container['reportName']) > 32)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['reportName']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 256)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 0)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subscriptionType']) && !preg_match("/^smn_topic|message_center|silent$/", $this->container['subscriptionType'])) {
                $invalidProperties[] = "invalid value for 'subscriptionType', must be conform to the pattern /^smn_topic|message_center|silent$/.";
            }
            if (!is_null($this->container['logoType']) && !preg_match("/^default|customize$/", $this->container['logoType'])) {
                $invalidProperties[] = "invalid value for 'logoType', must be conform to the pattern /^default|customize$/.";
            }
            if (!is_null($this->container['logoId']) && (mb_strlen($this->container['logoId']) > 256)) {
                $invalidProperties[] = "invalid value for 'logoId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['logoId']) && (mb_strlen($this->container['logoId']) < 0)) {
                $invalidProperties[] = "invalid value for 'logoId', the character length must be bigger than or equal to 0.";
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
    * Gets reportId
    *  **参数解释**: 报告ID **约束限制**: 必填 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param int $reportId **参数解释**: 报告ID **约束限制**: 必填 **取值范围**: 最小值0，最大值2147483647 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets sendingPeriod
    *  **参数解释**: 报告发送的时间段 **约束限制**: 不涉及 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点  **默认取值**: 不涉及
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
    * @param string|null $sendingPeriod **参数解释**: 报告发送的时间段 **约束限制**: 不涉及 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点  **默认取值**: 不涉及
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
    *  **参数解释**: 报告名称 **约束限制**: 必填 **取值范围**: 字符长度1-32位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
    * Sets reportName
    *
    * @param string $reportName **参数解释**: 报告名称 **约束限制**: 必填 **取值范围**: 字符长度1-32位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  **参数解释**: 主题urn **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    * @param string|null $topicUrn **参数解释**: 主题urn **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释**: 主题的显示名 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName **参数解释**: 主题的显示名 **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets subscriptionType
    *  **参数解释**: 订阅的方式 **约束限制**: 不涉及 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱  **默认取值**: 不涉及
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
    * @param string|null $subscriptionType **参数解释**: 订阅的方式 **约束限制**: 不涉及 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSubscriptionType($subscriptionType)
    {
        $this->container['subscriptionType'] = $subscriptionType;
        return $this;
    }

    /**
    * Gets overviewSubscriptions
    *  overviewSubscriptions
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OverviewSubscriptionReq|null
    */
    public function getOverviewSubscriptions()
    {
        return $this->container['overviewSubscriptions'];
    }

    /**
    * Sets overviewSubscriptions
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OverviewSubscriptionReq|null $overviewSubscriptions overviewSubscriptions
    *
    * @return $this
    */
    public function setOverviewSubscriptions($overviewSubscriptions)
    {
        $this->container['overviewSubscriptions'] = $overviewSubscriptions;
        return $this;
    }

    /**
    * Gets scansSubscriptions
    *  scansSubscriptions
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ScansSubscriptionReq|null
    */
    public function getScansSubscriptions()
    {
        return $this->container['scansSubscriptions'];
    }

    /**
    * Sets scansSubscriptions
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ScansSubscriptionReq|null $scansSubscriptions scansSubscriptions
    *
    * @return $this
    */
    public function setScansSubscriptions($scansSubscriptions)
    {
        $this->container['scansSubscriptions'] = $scansSubscriptions;
        return $this;
    }

    /**
    * Gets intrusionSubscriptions
    *  intrusionSubscriptions
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\IntrusionSubscriptionReq|null
    */
    public function getIntrusionSubscriptions()
    {
        return $this->container['intrusionSubscriptions'];
    }

    /**
    * Sets intrusionSubscriptions
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\IntrusionSubscriptionReq|null $intrusionSubscriptions intrusionSubscriptions
    *
    * @return $this
    */
    public function setIntrusionSubscriptions($intrusionSubscriptions)
    {
        $this->container['intrusionSubscriptions'] = $intrusionSubscriptions;
        return $this;
    }

    /**
    * Gets logoType
    *  **参数解释**: 报告logo类型 **约束限制**: 不涉及 **取值范围**: - default：华为logo - customize：自定义logo  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLogoType()
    {
        return $this->container['logoType'];
    }

    /**
    * Sets logoType
    *
    * @param string|null $logoType **参数解释**: 报告logo类型 **约束限制**: 不涉及 **取值范围**: - default：华为logo - customize：自定义logo  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLogoType($logoType)
    {
        $this->container['logoType'] = $logoType;
        return $this;
    }

    /**
    * Gets logoId
    *  **参数解释**: 自定义logo的文件id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLogoId()
    {
        return $this->container['logoId'];
    }

    /**
    * Sets logoId
    *
    * @param string|null $logoId **参数解释**: 自定义logo的文件id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLogoId($logoId)
    {
        $this->container['logoId'] = $logoId;
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

