<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityReportContentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityReportContentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  **参数解释：** 报告ID，唯一标识当前查询的安全报告。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionId  **参数解释：** 订阅ID，关联当前报告所属的安全报告订阅记录。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，用于标识当前安全报告的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentInfo  reportContentInfo
    * createTime  **参数解释：** 创建时间，报告的创建时间。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'string',
            'subscriptionId' => 'string',
            'sendingPeriod' => 'string',
            'reportName' => 'string',
            'reportCategory' => 'string',
            'topicUrn' => 'string',
            'subscriptionType' => 'string',
            'reportContentInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfo',
            'createTime' => 'int',
            'statPeriod' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseStatPeriod'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  **参数解释：** 报告ID，唯一标识当前查询的安全报告。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionId  **参数解释：** 订阅ID，关联当前报告所属的安全报告订阅记录。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，用于标识当前安全报告的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentInfo  reportContentInfo
    * createTime  **参数解释：** 创建时间，报告的创建时间。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => null,
        'subscriptionId' => null,
        'sendingPeriod' => null,
        'reportName' => null,
        'reportCategory' => null,
        'topicUrn' => null,
        'subscriptionType' => null,
        'reportContentInfo' => null,
        'createTime' => 'int64',
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
    * reportId  **参数解释：** 报告ID，唯一标识当前查询的安全报告。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionId  **参数解释：** 订阅ID，关联当前报告所属的安全报告订阅记录。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，用于标识当前安全报告的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentInfo  reportContentInfo
    * createTime  **参数解释：** 创建时间，报告的创建时间。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'subscriptionId' => 'subscription_id',
            'sendingPeriod' => 'sending_period',
            'reportName' => 'report_name',
            'reportCategory' => 'report_category',
            'topicUrn' => 'topic_urn',
            'subscriptionType' => 'subscription_type',
            'reportContentInfo' => 'report_content_info',
            'createTime' => 'create_time',
            'statPeriod' => 'stat_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  **参数解释：** 报告ID，唯一标识当前查询的安全报告。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionId  **参数解释：** 订阅ID，关联当前报告所属的安全报告订阅记录。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，用于标识当前安全报告的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentInfo  reportContentInfo
    * createTime  **参数解释：** 创建时间，报告的创建时间。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'subscriptionId' => 'setSubscriptionId',
            'sendingPeriod' => 'setSendingPeriod',
            'reportName' => 'setReportName',
            'reportCategory' => 'setReportCategory',
            'topicUrn' => 'setTopicUrn',
            'subscriptionType' => 'setSubscriptionType',
            'reportContentInfo' => 'setReportContentInfo',
            'createTime' => 'setCreateTime',
            'statPeriod' => 'setStatPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  **参数解释：** 报告ID，唯一标识当前查询的安全报告。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionId  **参数解释：** 订阅ID，关联当前报告所属的安全报告订阅记录。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sendingPeriod  **参数解释：** 发送时间段，标识报告的预设发送时间（如morning表示早晨时段）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportName  **参数解释：** 报告名称，用于标识当前安全报告的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportCategory  **参数解释：** 报告类别，标识报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topicUrn  **参数解释：** 主题urn，关联报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subscriptionType  **参数解释：** 订阅类型，标识安全报告的订阅方式（如slient表示静默订阅）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * reportContentInfo  reportContentInfo
    * createTime  **参数解释：** 创建时间，报告的创建时间。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * statPeriod  statPeriod
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'subscriptionId' => 'getSubscriptionId',
            'sendingPeriod' => 'getSendingPeriod',
            'reportName' => 'getReportName',
            'reportCategory' => 'getReportCategory',
            'topicUrn' => 'getTopicUrn',
            'subscriptionType' => 'getSubscriptionType',
            'reportContentInfo' => 'getReportContentInfo',
            'createTime' => 'getCreateTime',
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
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['sendingPeriod'] = isset($data['sendingPeriod']) ? $data['sendingPeriod'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['reportCategory'] = isset($data['reportCategory']) ? $data['reportCategory'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['subscriptionType'] = isset($data['subscriptionType']) ? $data['subscriptionType'] : null;
        $this->container['reportContentInfo'] = isset($data['reportContentInfo']) ? $data['reportContentInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    *  **参数解释：** 报告ID，唯一标识当前查询的安全报告。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId **参数解释：** 报告ID，唯一标识当前查询的安全报告。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets subscriptionId
    *  **参数解释：** 订阅ID，关联当前报告所属的安全报告订阅记录。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $subscriptionId **参数解释：** 订阅ID，关联当前报告所属的安全报告订阅记录。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 报告名称，用于标识当前安全报告的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $reportName **参数解释：** 报告名称，用于标识当前安全报告的名称。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 报告类别，标识报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $reportCategory **参数解释：** 报告类别，标识报告类型（如daily_report表示安全日报）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 主题urn，关联报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $topicUrn **参数解释：** 主题urn，关联报告发送的SMN主题唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * Gets reportContentInfo
    *  reportContentInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfo|null
    */
    public function getReportContentInfo()
    {
        return $this->container['reportContentInfo'];
    }

    /**
    * Sets reportContentInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfo|null $reportContentInfo reportContentInfo
    *
    * @return $this
    */
    public function setReportContentInfo($reportContentInfo)
    {
        $this->container['reportContentInfo'] = $reportContentInfo;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 创建时间，报告的创建时间。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释：** 创建时间，报告的创建时间。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets statPeriod
    *  statPeriod
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseStatPeriod|null
    */
    public function getStatPeriod()
    {
        return $this->container['statPeriod'];
    }

    /**
    * Sets statPeriod
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseStatPeriod|null $statPeriod statPeriod
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

