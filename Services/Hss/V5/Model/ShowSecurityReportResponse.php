<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityReportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityReportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释**： 报告ID **取值范围**： 最小值0，最大值2147483647
    * reportSubId  **参数解释**： 报告子ID **取值范围**： 最小值0，最大值2147483647
    * reportName  **参数解释**： 报告名称 **取值范围**： 字符长度0-128位
    * reportCategory  **参数解释**： 报告类别 **取值范围**： 字符长度0-64位
    * sendingPeriod  **参数解释**： 报告发送的时间段 **取值范围**： 字符长度0-64位
    * topicUrn  **参数解释**： 主题URN **取值范围**： 字符长度0-256位
    * displayName  **参数解释**： 主题的显示名 **取值范围**： 字符长度0-256位
    * logoType  **参数解释**： 报告logo类型 **取值范围**： - default：华为logo - customize：自定义logo
    * logoId  **参数解释**： 自定义logo的文件ID **取值范围**： 字符长度0-256位
    * subscriptionType  **参数解释**： 订阅的方式 **取值范围**： 字符长度0-64位
    * statPeriod  statPeriod
    * overviewInfo  overviewInfo
    * scansInfo  scansInfo
    * intrusionInfo  intrusionInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'int',
            'reportSubId' => 'int',
            'reportName' => 'string',
            'reportCategory' => 'string',
            'sendingPeriod' => 'string',
            'topicUrn' => 'string',
            'displayName' => 'string',
            'logoType' => 'string',
            'logoId' => 'string',
            'subscriptionType' => 'string',
            'statPeriod' => '\HuaweiCloud\SDK\Hss\V5\Model\StatPeriodRes',
            'overviewInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\OverviewInfoRes',
            'scansInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ScansInfoRes',
            'intrusionInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\IntrusionInfoRes'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释**： 报告ID **取值范围**： 最小值0，最大值2147483647
    * reportSubId  **参数解释**： 报告子ID **取值范围**： 最小值0，最大值2147483647
    * reportName  **参数解释**： 报告名称 **取值范围**： 字符长度0-128位
    * reportCategory  **参数解释**： 报告类别 **取值范围**： 字符长度0-64位
    * sendingPeriod  **参数解释**： 报告发送的时间段 **取值范围**： 字符长度0-64位
    * topicUrn  **参数解释**： 主题URN **取值范围**： 字符长度0-256位
    * displayName  **参数解释**： 主题的显示名 **取值范围**： 字符长度0-256位
    * logoType  **参数解释**： 报告logo类型 **取值范围**： - default：华为logo - customize：自定义logo
    * logoId  **参数解释**： 自定义logo的文件ID **取值范围**： 字符长度0-256位
    * subscriptionType  **参数解释**： 订阅的方式 **取值范围**： 字符长度0-64位
    * statPeriod  statPeriod
    * overviewInfo  overviewInfo
    * scansInfo  scansInfo
    * intrusionInfo  intrusionInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => 'int32',
        'reportSubId' => 'int32',
        'reportName' => null,
        'reportCategory' => null,
        'sendingPeriod' => null,
        'topicUrn' => null,
        'displayName' => null,
        'logoType' => null,
        'logoId' => null,
        'subscriptionType' => null,
        'statPeriod' => null,
        'overviewInfo' => null,
        'scansInfo' => null,
        'intrusionInfo' => null
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
    * reportId  **参数解释**： 报告ID **取值范围**： 最小值0，最大值2147483647
    * reportSubId  **参数解释**： 报告子ID **取值范围**： 最小值0，最大值2147483647
    * reportName  **参数解释**： 报告名称 **取值范围**： 字符长度0-128位
    * reportCategory  **参数解释**： 报告类别 **取值范围**： 字符长度0-64位
    * sendingPeriod  **参数解释**： 报告发送的时间段 **取值范围**： 字符长度0-64位
    * topicUrn  **参数解释**： 主题URN **取值范围**： 字符长度0-256位
    * displayName  **参数解释**： 主题的显示名 **取值范围**： 字符长度0-256位
    * logoType  **参数解释**： 报告logo类型 **取值范围**： - default：华为logo - customize：自定义logo
    * logoId  **参数解释**： 自定义logo的文件ID **取值范围**： 字符长度0-256位
    * subscriptionType  **参数解释**： 订阅的方式 **取值范围**： 字符长度0-64位
    * statPeriod  statPeriod
    * overviewInfo  overviewInfo
    * scansInfo  scansInfo
    * intrusionInfo  intrusionInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'reportSubId' => 'report_sub_id',
            'reportName' => 'report_name',
            'reportCategory' => 'report_category',
            'sendingPeriod' => 'sending_period',
            'topicUrn' => 'topic_urn',
            'displayName' => 'display_name',
            'logoType' => 'logo_type',
            'logoId' => 'logo_id',
            'subscriptionType' => 'subscription_type',
            'statPeriod' => 'stat_period',
            'overviewInfo' => 'overview_info',
            'scansInfo' => 'scans_info',
            'intrusionInfo' => 'intrusion_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释**： 报告ID **取值范围**： 最小值0，最大值2147483647
    * reportSubId  **参数解释**： 报告子ID **取值范围**： 最小值0，最大值2147483647
    * reportName  **参数解释**： 报告名称 **取值范围**： 字符长度0-128位
    * reportCategory  **参数解释**： 报告类别 **取值范围**： 字符长度0-64位
    * sendingPeriod  **参数解释**： 报告发送的时间段 **取值范围**： 字符长度0-64位
    * topicUrn  **参数解释**： 主题URN **取值范围**： 字符长度0-256位
    * displayName  **参数解释**： 主题的显示名 **取值范围**： 字符长度0-256位
    * logoType  **参数解释**： 报告logo类型 **取值范围**： - default：华为logo - customize：自定义logo
    * logoId  **参数解释**： 自定义logo的文件ID **取值范围**： 字符长度0-256位
    * subscriptionType  **参数解释**： 订阅的方式 **取值范围**： 字符长度0-64位
    * statPeriod  statPeriod
    * overviewInfo  overviewInfo
    * scansInfo  scansInfo
    * intrusionInfo  intrusionInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'reportSubId' => 'setReportSubId',
            'reportName' => 'setReportName',
            'reportCategory' => 'setReportCategory',
            'sendingPeriod' => 'setSendingPeriod',
            'topicUrn' => 'setTopicUrn',
            'displayName' => 'setDisplayName',
            'logoType' => 'setLogoType',
            'logoId' => 'setLogoId',
            'subscriptionType' => 'setSubscriptionType',
            'statPeriod' => 'setStatPeriod',
            'overviewInfo' => 'setOverviewInfo',
            'scansInfo' => 'setScansInfo',
            'intrusionInfo' => 'setIntrusionInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释**： 报告ID **取值范围**： 最小值0，最大值2147483647
    * reportSubId  **参数解释**： 报告子ID **取值范围**： 最小值0，最大值2147483647
    * reportName  **参数解释**： 报告名称 **取值范围**： 字符长度0-128位
    * reportCategory  **参数解释**： 报告类别 **取值范围**： 字符长度0-64位
    * sendingPeriod  **参数解释**： 报告发送的时间段 **取值范围**： 字符长度0-64位
    * topicUrn  **参数解释**： 主题URN **取值范围**： 字符长度0-256位
    * displayName  **参数解释**： 主题的显示名 **取值范围**： 字符长度0-256位
    * logoType  **参数解释**： 报告logo类型 **取值范围**： - default：华为logo - customize：自定义logo
    * logoId  **参数解释**： 自定义logo的文件ID **取值范围**： 字符长度0-256位
    * subscriptionType  **参数解释**： 订阅的方式 **取值范围**： 字符长度0-64位
    * statPeriod  statPeriod
    * overviewInfo  overviewInfo
    * scansInfo  scansInfo
    * intrusionInfo  intrusionInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'reportSubId' => 'getReportSubId',
            'reportName' => 'getReportName',
            'reportCategory' => 'getReportCategory',
            'sendingPeriod' => 'getSendingPeriod',
            'topicUrn' => 'getTopicUrn',
            'displayName' => 'getDisplayName',
            'logoType' => 'getLogoType',
            'logoId' => 'getLogoId',
            'subscriptionType' => 'getSubscriptionType',
            'statPeriod' => 'getStatPeriod',
            'overviewInfo' => 'getOverviewInfo',
            'scansInfo' => 'getScansInfo',
            'intrusionInfo' => 'getIntrusionInfo'
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
        $this->container['reportSubId'] = isset($data['reportSubId']) ? $data['reportSubId'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportCategory'] = isset($data['reportCategory']) ? $data['reportCategory'] : null;
        $this->container['sendingPeriod'] = isset($data['sendingPeriod']) ? $data['sendingPeriod'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['logoType'] = isset($data['logoType']) ? $data['logoType'] : null;
        $this->container['logoId'] = isset($data['logoId']) ? $data['logoId'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['statPeriod'] = isset($data['statPeriod']) ? $data['statPeriod'] : null;
        $this->container['overviewInfo'] = isset($data['overviewInfo']) ? $data['overviewInfo'] : null;
        $this->container['scansInfo'] = isset($data['scansInfo']) ? $data['scansInfo'] : null;
        $this->container['intrusionInfo'] = isset($data['intrusionInfo']) ? $data['intrusionInfo'] : null;
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
            if (!is_null($this->container['reportSubId']) && ($this->container['reportSubId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reportSubId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['reportSubId']) && ($this->container['reportSubId'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportSubId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportName']) && (mb_strlen($this->container['reportName']) > 128)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['reportName']) && (mb_strlen($this->container['reportName']) < 0)) {
                $invalidProperties[] = "invalid value for 'reportName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reportCategory']) && (mb_strlen($this->container['reportCategory']) > 64)) {
                $invalidProperties[] = "invalid value for 'reportCategory', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['reportCategory']) && (mb_strlen($this->container['reportCategory']) < 0)) {
                $invalidProperties[] = "invalid value for 'reportCategory', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sendingPeriod']) && (mb_strlen($this->container['sendingPeriod']) > 64)) {
                $invalidProperties[] = "invalid value for 'sendingPeriod', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sendingPeriod']) && (mb_strlen($this->container['sendingPeriod']) < 0)) {
                $invalidProperties[] = "invalid value for 'sendingPeriod', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['logoType']) && (mb_strlen($this->container['logoType']) > 32)) {
                $invalidProperties[] = "invalid value for 'logoType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['logoType']) && (mb_strlen($this->container['logoType']) < 0)) {
                $invalidProperties[] = "invalid value for 'logoType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logoId']) && (mb_strlen($this->container['logoId']) > 256)) {
                $invalidProperties[] = "invalid value for 'logoId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['logoId']) && (mb_strlen($this->container['logoId']) < 0)) {
                $invalidProperties[] = "invalid value for 'logoId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subscriptionType']) && (mb_strlen($this->container['subscriptionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'subscriptionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subscriptionType']) && (mb_strlen($this->container['subscriptionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'subscriptionType', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**： 报告ID **取值范围**： 最小值0，最大值2147483647
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
    * @param int|null $reportId **参数解释**： 报告ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets reportSubId
    *  **参数解释**： 报告子ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getReportSubId()
    {
        return $this->container['reportSubId'];
    }

    /**
    * Sets reportSubId
    *
    * @param int|null $reportSubId **参数解释**： 报告子ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setReportSubId($reportSubId)
    {
        $this->container['reportSubId'] = $reportSubId;
        return $this;
    }

    /**
    * Gets reportName
    *  **参数解释**： 报告名称 **取值范围**： 字符长度0-128位
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
    * @param string|null $reportName **参数解释**： 报告名称 **取值范围**： 字符长度0-128位
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
    *  **参数解释**： 报告类别 **取值范围**： 字符长度0-64位
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
    * @param string|null $reportCategory **参数解释**： 报告类别 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setReportCategory($reportCategory)
    {
        $this->container['reportCategory'] = $reportCategory;
        return $this;
    }

    /**
    * Gets sendingPeriod
    *  **参数解释**： 报告发送的时间段 **取值范围**： 字符长度0-64位
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
    * @param string|null $sendingPeriod **参数解释**： 报告发送的时间段 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setSendingPeriod($sendingPeriod)
    {
        $this->container['sendingPeriod'] = $sendingPeriod;
        return $this;
    }

    /**
    * Gets topicUrn
    *  **参数解释**： 主题URN **取值范围**： 字符长度0-256位
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
    * @param string|null $topicUrn **参数解释**： 主题URN **取值范围**： 字符长度0-256位
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
    *  **参数解释**： 主题的显示名 **取值范围**： 字符长度0-256位
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
    * @param string|null $displayName **参数解释**： 主题的显示名 **取值范围**： 字符长度0-256位
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
    *  **参数解释**： 报告logo类型 **取值范围**： - default：华为logo - customize：自定义logo
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
    * @param string|null $logoType **参数解释**： 报告logo类型 **取值范围**： - default：华为logo - customize：自定义logo
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
    *  **参数解释**： 自定义logo的文件ID **取值范围**： 字符长度0-256位
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
    * @param string|null $logoId **参数解释**： 自定义logo的文件ID **取值范围**： 字符长度0-256位
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
    *  **参数解释**： 订阅的方式 **取值范围**： 字符长度0-64位
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
    * @param string|null $subscriptionType **参数解释**： 订阅的方式 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setSubscriptionType($subscriptionType)
    {
        $this->container['subscriptionType'] = $subscriptionType;
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
    * Gets overviewInfo
    *  overviewInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\OverviewInfoRes|null
    */
    public function getOverviewInfo()
    {
        return $this->container['overviewInfo'];
    }

    /**
    * Sets overviewInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\OverviewInfoRes|null $overviewInfo overviewInfo
    *
    * @return $this
    */
    public function setOverviewInfo($overviewInfo)
    {
        $this->container['overviewInfo'] = $overviewInfo;
        return $this;
    }

    /**
    * Gets scansInfo
    *  scansInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ScansInfoRes|null
    */
    public function getScansInfo()
    {
        return $this->container['scansInfo'];
    }

    /**
    * Sets scansInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ScansInfoRes|null $scansInfo scansInfo
    *
    * @return $this
    */
    public function setScansInfo($scansInfo)
    {
        $this->container['scansInfo'] = $scansInfo;
        return $this;
    }

    /**
    * Gets intrusionInfo
    *  intrusionInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\IntrusionInfoRes|null
    */
    public function getIntrusionInfo()
    {
        return $this->container['intrusionInfo'];
    }

    /**
    * Sets intrusionInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\IntrusionInfoRes|null $intrusionInfo intrusionInfo
    *
    * @return $this
    */
    public function setIntrusionInfo($intrusionInfo)
    {
        $this->container['intrusionInfo'] = $intrusionInfo;
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

