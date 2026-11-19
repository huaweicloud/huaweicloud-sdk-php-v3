<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReportSubscriptionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReportSubscriptionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释**: 报告ID **取值范围**: 最小值0，最大值2147483647
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-32位
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * topicUrn  **参数解释**: 主题urn **取值范围**: 字符长度0-256位
    * displayName  **参数解释**: 主题的显示名 **取值范围**: 字符长度0-256位
    * logoType  **参数解释**: 报告logo类型 **取值范围**: - default：华为logo - customize：自定义logo
    * logoId  **参数解释**: 自定义logo的文件id **取值范围**: 字符长度0-256位
    * subscriptionType  **参数解释**: 订阅的方式 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'int',
            'reportName' => 'string',
            'sendingPeriod' => 'string',
            'reportCategory' => 'string',
            'topicUrn' => 'string',
            'displayName' => 'string',
            'logoType' => 'string',
            'logoId' => 'string',
            'subscriptionType' => 'string',
            'overviewSubscriptions' => '\HuaweiCloud\SDK\Hss\V5\Model\OverviewSubscriptionRes',
            'scansSubscriptions' => '\HuaweiCloud\SDK\Hss\V5\Model\ScansSubscriptionRes',
            'intrusionSubscriptions' => '\HuaweiCloud\SDK\Hss\V5\Model\IntrusionSubscriptionRes',
            'statPeriod' => '\HuaweiCloud\SDK\Hss\V5\Model\StatPeriodRes'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释**: 报告ID **取值范围**: 最小值0，最大值2147483647
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-32位
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * topicUrn  **参数解释**: 主题urn **取值范围**: 字符长度0-256位
    * displayName  **参数解释**: 主题的显示名 **取值范围**: 字符长度0-256位
    * logoType  **参数解释**: 报告logo类型 **取值范围**: - default：华为logo - customize：自定义logo
    * logoId  **参数解释**: 自定义logo的文件id **取值范围**: 字符长度0-256位
    * subscriptionType  **参数解释**: 订阅的方式 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => 'int32',
        'reportName' => null,
        'sendingPeriod' => null,
        'reportCategory' => null,
        'topicUrn' => null,
        'displayName' => null,
        'logoType' => null,
        'logoId' => null,
        'subscriptionType' => null,
        'overviewSubscriptions' => null,
        'scansSubscriptions' => null,
        'intrusionSubscriptions' => null,
        'statPeriod' => null
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
    * reportId  **参数解释**: 报告ID **取值范围**: 最小值0，最大值2147483647
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-32位
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * topicUrn  **参数解释**: 主题urn **取值范围**: 字符长度0-256位
    * displayName  **参数解释**: 主题的显示名 **取值范围**: 字符长度0-256位
    * logoType  **参数解释**: 报告logo类型 **取值范围**: - default：华为logo - customize：自定义logo
    * logoId  **参数解释**: 自定义logo的文件id **取值范围**: 字符长度0-256位
    * subscriptionType  **参数解释**: 订阅的方式 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'reportName' => 'report_name',
            'sendingPeriod' => 'sending_period',
            'reportCategory' => 'report_category',
            'topicUrn' => 'topic_urn',
            'displayName' => 'display_name',
            'logoType' => 'logo_type',
            'logoId' => 'logo_id',
            'subscriptionType' => 'subscription_type',
            'overviewSubscriptions' => 'overview_subscriptions',
            'scansSubscriptions' => 'scans_subscriptions',
            'intrusionSubscriptions' => 'intrusion_subscriptions',
            'statPeriod' => 'stat_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释**: 报告ID **取值范围**: 最小值0，最大值2147483647
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-32位
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * topicUrn  **参数解释**: 主题urn **取值范围**: 字符长度0-256位
    * displayName  **参数解释**: 主题的显示名 **取值范围**: 字符长度0-256位
    * logoType  **参数解释**: 报告logo类型 **取值范围**: - default：华为logo - customize：自定义logo
    * logoId  **参数解释**: 自定义logo的文件id **取值范围**: 字符长度0-256位
    * subscriptionType  **参数解释**: 订阅的方式 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'reportName' => 'setReportName',
            'sendingPeriod' => 'setSendingPeriod',
            'reportCategory' => 'setReportCategory',
            'topicUrn' => 'setTopicUrn',
            'displayName' => 'setDisplayName',
            'logoType' => 'setLogoType',
            'logoId' => 'setLogoId',
            'subscriptionType' => 'setSubscriptionType',
            'overviewSubscriptions' => 'setOverviewSubscriptions',
            'scansSubscriptions' => 'setScansSubscriptions',
            'intrusionSubscriptions' => 'setIntrusionSubscriptions',
            'statPeriod' => 'setStatPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释**: 报告ID **取值范围**: 最小值0，最大值2147483647
    * reportName  **参数解释**: 报告名称 **取值范围**: 字符长度1-32位
    * sendingPeriod  **参数解释**: 报告发送的时间段 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点
    * reportCategory  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
    * topicUrn  **参数解释**: 主题urn **取值范围**: 字符长度0-256位
    * displayName  **参数解释**: 主题的显示名 **取值范围**: 字符长度0-256位
    * logoType  **参数解释**: 报告logo类型 **取值范围**: - default：华为logo - customize：自定义logo
    * logoId  **参数解释**: 自定义logo的文件id **取值范围**: 字符长度0-256位
    * subscriptionType  **参数解释**: 订阅的方式 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱
    * overviewSubscriptions  overviewSubscriptions
    * scansSubscriptions  scansSubscriptions
    * intrusionSubscriptions  intrusionSubscriptions
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'reportName' => 'getReportName',
            'sendingPeriod' => 'getSendingPeriod',
            'reportCategory' => 'getReportCategory',
            'topicUrn' => 'getTopicUrn',
            'displayName' => 'getDisplayName',
            'logoType' => 'getLogoType',
            'logoId' => 'getLogoId',
            'subscriptionType' => 'getSubscriptionType',
            'overviewSubscriptions' => 'getOverviewSubscriptions',
            'scansSubscriptions' => 'getScansSubscriptions',
            'intrusionSubscriptions' => 'getIntrusionSubscriptions',
            'statPeriod' => 'getStatPeriod'
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
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['sendingPeriod'] = isset($data['sendingPeriod']) ? $data['sendingPeriod'] : null;
        $this->container['reportCategory'] = isset($data['reportCategory']) ? $data['reportCategory'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['logoType'] = isset($data['logoType']) ? $data['logoType'] : null;
        $this->container['logoId'] = isset($data['logoId']) ? $data['logoId'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['overviewSubscriptions'] = isset($data['overviewSubscriptions']) ? $data['overviewSubscriptions'] : null;
        $this->container['scansSubscriptions'] = isset($data['scansSubscriptions']) ? $data['scansSubscriptions'] : null;
        $this->container['intrusionSubscriptions'] = isset($data['intrusionSubscriptions']) ? $data['intrusionSubscriptions'] : null;
        $this->container['statPeriod'] = isset($data['statPeriod']) ? $data['statPeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['reportId']) && ($this->container['reportId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reportId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['reportId']) && ($this->container['reportId'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportName']) && (mb_strlen($this->container['reportName']) > 32)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reportName']) && (mb_strlen($this->container['reportName']) < 1)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sendingPeriod']) && !preg_match("/^morning|noon|afternoon|evening$/", $this->container['sendingPeriod'])) {
                $invalidProperties[] = "invalid value for 'sendingPeriod', must be conform to the pattern /^morning|noon|afternoon|evening$/.";
            }
            if (!is_null($this->container['reportCategory']) && !preg_match("/^daily_report|weekly_report|monthly_report|custom_report$/", $this->container['reportCategory'])) {
                $invalidProperties[] = "invalid value for 'reportCategory', must be conform to the pattern /^daily_report|weekly_report|monthly_report|custom_report$/.";
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
            if (!is_null($this->container['logoType']) && !preg_match("/^default|customize$/", $this->container['logoType'])) {
                $invalidProperties[] = "invalid value for 'logoType', must be conform to the pattern /^default|customize$/.";
            }
            if (!is_null($this->container['logoId']) && (mb_strlen($this->container['logoId']) > 256)) {
                $invalidProperties[] = "invalid value for 'logoId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['logoId']) && (mb_strlen($this->container['logoId']) < 0)) {
                $invalidProperties[] = "invalid value for 'logoId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subscriptionType']) && !preg_match("/^smn_topic|message_center|silent$/", $this->container['subscriptionType'])) {
                $invalidProperties[] = "invalid value for 'subscriptionType', must be conform to the pattern /^smn_topic|message_center|silent$/.";
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
    *  **参数解释**: 报告ID **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param int|null $reportId **参数解释**: 报告ID **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets reportName
    *  **参数解释**: 报告名称 **取值范围**: 字符长度1-32位
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
    * @param string|null $reportName **参数解释**: 报告名称 **取值范围**: 字符长度1-32位
    *
    * @return $this
    */
    public function setReportName($reportName)
    {
        $this->container['reportName'] = $reportName;
        return $this;
    }

    /**
    * Gets sendingPeriod
    *  **参数解释**: 报告发送的时间段 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点
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
    * @param string|null $sendingPeriod **参数解释**: 报告发送的时间段 **取值范围**: - morning：0点到6点 - noon：6点到12点 - afternoon：12点到18点 - evening：18点到24点
    *
    * @return $this
    */
    public function setSendingPeriod($sendingPeriod)
    {
        $this->container['sendingPeriod'] = $sendingPeriod;
        return $this;
    }

    /**
    * Gets reportCategory
    *  **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
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
    * @param string|null $reportCategory **参数解释**: 报告类别 **取值范围**: - daily_report：安全日报 - weekly_report：安全周报 - monthly_report：安全月报 - custom_report：自定义报告
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
    *  **参数解释**: 主题urn **取值范围**: 字符长度0-256位
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
    * @param string|null $topicUrn **参数解释**: 主题urn **取值范围**: 字符长度0-256位
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
    *  **参数解释**: 主题的显示名 **取值范围**: 字符长度0-256位
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
    * @param string|null $displayName **参数解释**: 主题的显示名 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets logoType
    *  **参数解释**: 报告logo类型 **取值范围**: - default：华为logo - customize：自定义logo
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
    * @param string|null $logoType **参数解释**: 报告logo类型 **取值范围**: - default：华为logo - customize：自定义logo
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
    *  **参数解释**: 自定义logo的文件id **取值范围**: 字符长度0-256位
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
    * @param string|null $logoId **参数解释**: 自定义logo的文件id **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setLogoId($logoId)
    {
        $this->container['logoId'] = $logoId;
        return $this;
    }

    /**
    * Gets subscriptionType
    *  **参数解释**: 订阅的方式 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱
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
    * @param string|null $subscriptionType **参数解释**: 订阅的方式 **取值范围**: - smn_topic：SMN主题 - message_center：消息中心 - silent：无需发送到邮箱
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
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OverviewSubscriptionRes|null
    */
    public function getOverviewSubscriptions()
    {
        return $this->container['overviewSubscriptions'];
    }

    /**
    * Sets overviewSubscriptions
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OverviewSubscriptionRes|null $overviewSubscriptions overviewSubscriptions
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
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ScansSubscriptionRes|null
    */
    public function getScansSubscriptions()
    {
        return $this->container['scansSubscriptions'];
    }

    /**
    * Sets scansSubscriptions
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ScansSubscriptionRes|null $scansSubscriptions scansSubscriptions
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
    * @return \HuaweiCloud\SDK\Hss\V5\Model\IntrusionSubscriptionRes|null
    */
    public function getIntrusionSubscriptions()
    {
        return $this->container['intrusionSubscriptions'];
    }

    /**
    * Sets intrusionSubscriptions
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\IntrusionSubscriptionRes|null $intrusionSubscriptions intrusionSubscriptions
    *
    * @return $this
    */
    public function setIntrusionSubscriptions($intrusionSubscriptions)
    {
        $this->container['intrusionSubscriptions'] = $intrusionSubscriptions;
        return $this;
    }

    /**
    * Gets statPeriod
    *  statPeriod
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\StatPeriodRes|null
    */
    public function getStatPeriod()
    {
        return $this->container['statPeriod'];
    }

    /**
    * Sets statPeriod
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\StatPeriodRes|null $statPeriod statPeriod
    *
    * @return $this
    */
    public function setStatPeriod($statPeriod)
    {
        $this->container['statPeriod'] = $statPeriod;
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

