<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityReportSubscriptionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityReportSubscriptionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sendingPeriod  **参数解释：** 报告发送的时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * displayName  **参数解释：** 主题的显示名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * reportStatus  **参数解释：** 报告开启状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sendingPeriod' => 'string',
            'reportName' => 'string',
            'reportCategory' => 'string',
            'topicUrn' => 'string',
            'displayName' => 'string',
            'subscriptionType' => 'string',
            'reportContentSubscription' => '\HuaweiCloud\SDK\Waf\V1\Model\UpdateSecurityReportSubscriptionRequestBodyReportContentSubscription',
            'statPeriod' => '\HuaweiCloud\SDK\Waf\V1\Model\UpdateSecurityReportSubscriptionRequestBodyStatPeriod',
            'reportStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sendingPeriod  **参数解释：** 报告发送的时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * displayName  **参数解释：** 主题的显示名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * reportStatus  **参数解释：** 报告开启状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sendingPeriod' => null,
        'reportName' => null,
        'reportCategory' => null,
        'topicUrn' => null,
        'displayName' => null,
        'subscriptionType' => null,
        'reportContentSubscription' => null,
        'statPeriod' => null,
        'reportStatus' => null
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
    * sendingPeriod  **参数解释：** 报告发送的时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * displayName  **参数解释：** 主题的显示名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * reportStatus  **参数解释：** 报告开启状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sendingPeriod' => 'sending_period',
            'reportName' => 'report_name',
            'reportCategory' => 'report_category',
            'topicUrn' => 'topic_urn',
            'displayName' => 'display_name',
            'subscriptionType' => 'subscription_type',
            'reportContentSubscription' => 'report_content_subscription',
            'statPeriod' => 'stat_period',
            'reportStatus' => 'report_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sendingPeriod  **参数解释：** 报告发送的时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * displayName  **参数解释：** 主题的显示名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * reportStatus  **参数解释：** 报告开启状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'sendingPeriod' => 'setSendingPeriod',
            'reportName' => 'setReportName',
            'reportCategory' => 'setReportCategory',
            'topicUrn' => 'setTopicUrn',
            'displayName' => 'setDisplayName',
            'subscriptionType' => 'setSubscriptionType',
            'reportContentSubscription' => 'setReportContentSubscription',
            'statPeriod' => 'setStatPeriod',
            'reportStatus' => 'setReportStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sendingPeriod  **参数解释：** 报告发送的时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * displayName  **参数解释：** 主题的显示名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentSubscription  reportContentSubscription
    * statPeriod  statPeriod
    * reportStatus  **参数解释：** 报告开启状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'sendingPeriod' => 'getSendingPeriod',
            'reportName' => 'getReportName',
            'reportCategory' => 'getReportCategory',
            'topicUrn' => 'getTopicUrn',
            'displayName' => 'getDisplayName',
            'subscriptionType' => 'getSubscriptionType',
            'reportContentSubscription' => 'getReportContentSubscription',
            'statPeriod' => 'getStatPeriod',
            'reportStatus' => 'getReportStatus'
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
        $this->container['sendingPeriod'] = isset($data['sendingPeriod']) ? $data['sendingPeriod'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportCategory'] = isset($data['reportCategory']) ? $data['reportCategory'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['reportContentSubscription'] = isset($data['reportContentSubscription']) ? $data['reportContentSubscription'] : null;
        $this->container['statPeriod'] = isset($data['statPeriod']) ? $data['statPeriod'] : null;
        $this->container['reportStatus'] = isset($data['reportStatus']) ? $data['reportStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sendingPeriod'] === null) {
            $invalidProperties[] = "'sendingPeriod' can't be null";
        }
        if ($this->container['reportName'] === null) {
            $invalidProperties[] = "'reportName' can't be null";
        }
        if ($this->container['reportCategory'] === null) {
            $invalidProperties[] = "'reportCategory' can't be null";
        }
        if ($this->container['subscriptionType'] === null) {
            $invalidProperties[] = "'subscriptionType' can't be null";
        }
        if ($this->container['reportContentSubscription'] === null) {
            $invalidProperties[] = "'reportContentSubscription' can't be null";
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
    * Gets sendingPeriod
    *  **参数解释：** 报告发送的时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getSendingPeriod()
    {
        return $this->container['sendingPeriod'];
    }

    /**
    * Sets sendingPeriod
    *
    * @param string $sendingPeriod **参数解释：** 报告发送的时间段 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 报告名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string $reportName **参数解释：** 报告名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 报告类别 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getReportCategory()
    {
        return $this->container['reportCategory'];
    }

    /**
    * Sets reportCategory
    *
    * @param string $reportCategory **参数解释：** 报告类别 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 主题urn **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $topicUrn **参数解释：** 主题urn **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 主题的显示名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $displayName **参数解释：** 主题的显示名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 订阅类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getSubscriptionType()
    {
        return $this->container['subscriptionType'];
    }

    /**
    * Sets subscriptionType
    *
    * @param string $subscriptionType **参数解释：** 订阅类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\UpdateSecurityReportSubscriptionRequestBodyReportContentSubscription
    */
    public function getReportContentSubscription()
    {
        return $this->container['reportContentSubscription'];
    }

    /**
    * Sets reportContentSubscription
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\UpdateSecurityReportSubscriptionRequestBodyReportContentSubscription $reportContentSubscription reportContentSubscription
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\UpdateSecurityReportSubscriptionRequestBodyStatPeriod|null
    */
    public function getStatPeriod()
    {
        return $this->container['statPeriod'];
    }

    /**
    * Sets statPeriod
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\UpdateSecurityReportSubscriptionRequestBodyStatPeriod|null $statPeriod statPeriod
    *
    * @return $this
    */
    public function setStatPeriod($statPeriod)
    {
        $this->container['statPeriod'] = $statPeriod;
        return $this;
    }

    /**
    * Gets reportStatus
    *  **参数解释：** 报告开启状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getReportStatus()
    {
        return $this->container['reportStatus'];
    }

    /**
    * Sets reportStatus
    *
    * @param string|null $reportStatus **参数解释：** 报告开启状态 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setReportStatus($reportStatus)
    {
        $this->container['reportStatus'] = $reportStatus;
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

