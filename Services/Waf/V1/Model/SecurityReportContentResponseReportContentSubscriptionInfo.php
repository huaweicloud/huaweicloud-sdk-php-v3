<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityReportContentResponseReportContentSubscriptionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityReportContentResponse_report_content_subscription_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * overviewStatisticsListInfo  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAbnormalUrlsInfo  topAbnormalUrlsInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'overviewStatisticsListInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoOverviewStatisticsListInfo[]',
            'requestStatisticsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoRequestStatisticsInfoList[]',
            'qpsStatisticsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoQpsStatisticsInfo',
            'bandwidthStatisticsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoBandwidthStatisticsInfo',
            'responseCodeStatisticsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfo',
            'attackTypeDistributionInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoAttackTypeDistributionInfoList[]',
            'topAttackedDomainsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackedDomainsInfoList[]',
            'topAttackSourceIpsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackSourceIpsInfoList[]',
            'topAttackedUrlsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackedUrlsInfoList[]',
            'topAttackSourceLocationsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackSourceLocationsInfoList[]',
            'topAbnormalUrlsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * overviewStatisticsListInfo  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAbnormalUrlsInfo  topAbnormalUrlsInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'overviewStatisticsListInfo' => null,
        'requestStatisticsInfoList' => null,
        'qpsStatisticsInfo' => null,
        'bandwidthStatisticsInfo' => null,
        'responseCodeStatisticsInfo' => null,
        'attackTypeDistributionInfoList' => null,
        'topAttackedDomainsInfoList' => null,
        'topAttackSourceIpsInfoList' => null,
        'topAttackedUrlsInfoList' => null,
        'topAttackSourceLocationsInfoList' => null,
        'topAbnormalUrlsInfo' => null
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
    * overviewStatisticsListInfo  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAbnormalUrlsInfo  topAbnormalUrlsInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'overviewStatisticsListInfo' => 'overview_statistics_list_info',
            'requestStatisticsInfoList' => 'request_statistics_info_list',
            'qpsStatisticsInfo' => 'qps_statistics_info',
            'bandwidthStatisticsInfo' => 'bandwidth_statistics_info',
            'responseCodeStatisticsInfo' => 'response_code_statistics_info',
            'attackTypeDistributionInfoList' => 'attack_type_distribution_info_list',
            'topAttackedDomainsInfoList' => 'top_attacked_domains_info_list',
            'topAttackSourceIpsInfoList' => 'top_attack_source_ips_info_list',
            'topAttackedUrlsInfoList' => 'top_attacked_urls_info_list',
            'topAttackSourceLocationsInfoList' => 'top_attack_source_locations_info_list',
            'topAbnormalUrlsInfo' => 'top_abnormal_urls_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * overviewStatisticsListInfo  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAbnormalUrlsInfo  topAbnormalUrlsInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'overviewStatisticsListInfo' => 'setOverviewStatisticsListInfo',
            'requestStatisticsInfoList' => 'setRequestStatisticsInfoList',
            'qpsStatisticsInfo' => 'setQpsStatisticsInfo',
            'bandwidthStatisticsInfo' => 'setBandwidthStatisticsInfo',
            'responseCodeStatisticsInfo' => 'setResponseCodeStatisticsInfo',
            'attackTypeDistributionInfoList' => 'setAttackTypeDistributionInfoList',
            'topAttackedDomainsInfoList' => 'setTopAttackedDomainsInfoList',
            'topAttackSourceIpsInfoList' => 'setTopAttackSourceIpsInfoList',
            'topAttackedUrlsInfoList' => 'setTopAttackedUrlsInfoList',
            'topAttackSourceLocationsInfoList' => 'setTopAttackSourceLocationsInfoList',
            'topAbnormalUrlsInfo' => 'setTopAbnormalUrlsInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * overviewStatisticsListInfo  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAbnormalUrlsInfo  topAbnormalUrlsInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'overviewStatisticsListInfo' => 'getOverviewStatisticsListInfo',
            'requestStatisticsInfoList' => 'getRequestStatisticsInfoList',
            'qpsStatisticsInfo' => 'getQpsStatisticsInfo',
            'bandwidthStatisticsInfo' => 'getBandwidthStatisticsInfo',
            'responseCodeStatisticsInfo' => 'getResponseCodeStatisticsInfo',
            'attackTypeDistributionInfoList' => 'getAttackTypeDistributionInfoList',
            'topAttackedDomainsInfoList' => 'getTopAttackedDomainsInfoList',
            'topAttackSourceIpsInfoList' => 'getTopAttackSourceIpsInfoList',
            'topAttackedUrlsInfoList' => 'getTopAttackedUrlsInfoList',
            'topAttackSourceLocationsInfoList' => 'getTopAttackSourceLocationsInfoList',
            'topAbnormalUrlsInfo' => 'getTopAbnormalUrlsInfo'
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
        $this->container['overviewStatisticsListInfo'] = isset($data['overviewStatisticsListInfo']) ? $data['overviewStatisticsListInfo'] : null;
        $this->container['requestStatisticsInfoList'] = isset($data['requestStatisticsInfoList']) ? $data['requestStatisticsInfoList'] : null;
        $this->container['qpsStatisticsInfo'] = isset($data['qpsStatisticsInfo']) ? $data['qpsStatisticsInfo'] : null;
        $this->container['bandwidthStatisticsInfo'] = isset($data['bandwidthStatisticsInfo']) ? $data['bandwidthStatisticsInfo'] : null;
        $this->container['responseCodeStatisticsInfo'] = isset($data['responseCodeStatisticsInfo']) ? $data['responseCodeStatisticsInfo'] : null;
        $this->container['attackTypeDistributionInfoList'] = isset($data['attackTypeDistributionInfoList']) ? $data['attackTypeDistributionInfoList'] : null;
        $this->container['topAttackedDomainsInfoList'] = isset($data['topAttackedDomainsInfoList']) ? $data['topAttackedDomainsInfoList'] : null;
        $this->container['topAttackSourceIpsInfoList'] = isset($data['topAttackSourceIpsInfoList']) ? $data['topAttackSourceIpsInfoList'] : null;
        $this->container['topAttackedUrlsInfoList'] = isset($data['topAttackedUrlsInfoList']) ? $data['topAttackedUrlsInfoList'] : null;
        $this->container['topAttackSourceLocationsInfoList'] = isset($data['topAttackSourceLocationsInfoList']) ? $data['topAttackSourceLocationsInfoList'] : null;
        $this->container['topAbnormalUrlsInfo'] = isset($data['topAbnormalUrlsInfo']) ? $data['topAbnormalUrlsInfo'] : null;
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
    * Gets overviewStatisticsListInfo
    *  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoOverviewStatisticsListInfo[]|null
    */
    public function getOverviewStatisticsListInfo()
    {
        return $this->container['overviewStatisticsListInfo'];
    }

    /**
    * Sets overviewStatisticsListInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoOverviewStatisticsListInfo[]|null $overviewStatisticsListInfo **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOverviewStatisticsListInfo($overviewStatisticsListInfo)
    {
        $this->container['overviewStatisticsListInfo'] = $overviewStatisticsListInfo;
        return $this;
    }

    /**
    * Gets requestStatisticsInfoList
    *  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoRequestStatisticsInfoList[]|null
    */
    public function getRequestStatisticsInfoList()
    {
        return $this->container['requestStatisticsInfoList'];
    }

    /**
    * Sets requestStatisticsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoRequestStatisticsInfoList[]|null $requestStatisticsInfoList **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRequestStatisticsInfoList($requestStatisticsInfoList)
    {
        $this->container['requestStatisticsInfoList'] = $requestStatisticsInfoList;
        return $this;
    }

    /**
    * Gets qpsStatisticsInfo
    *  qpsStatisticsInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoQpsStatisticsInfo|null
    */
    public function getQpsStatisticsInfo()
    {
        return $this->container['qpsStatisticsInfo'];
    }

    /**
    * Sets qpsStatisticsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoQpsStatisticsInfo|null $qpsStatisticsInfo qpsStatisticsInfo
    *
    * @return $this
    */
    public function setQpsStatisticsInfo($qpsStatisticsInfo)
    {
        $this->container['qpsStatisticsInfo'] = $qpsStatisticsInfo;
        return $this;
    }

    /**
    * Gets bandwidthStatisticsInfo
    *  bandwidthStatisticsInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoBandwidthStatisticsInfo|null
    */
    public function getBandwidthStatisticsInfo()
    {
        return $this->container['bandwidthStatisticsInfo'];
    }

    /**
    * Sets bandwidthStatisticsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoBandwidthStatisticsInfo|null $bandwidthStatisticsInfo bandwidthStatisticsInfo
    *
    * @return $this
    */
    public function setBandwidthStatisticsInfo($bandwidthStatisticsInfo)
    {
        $this->container['bandwidthStatisticsInfo'] = $bandwidthStatisticsInfo;
        return $this;
    }

    /**
    * Gets responseCodeStatisticsInfo
    *  responseCodeStatisticsInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfo|null
    */
    public function getResponseCodeStatisticsInfo()
    {
        return $this->container['responseCodeStatisticsInfo'];
    }

    /**
    * Sets responseCodeStatisticsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoResponseCodeStatisticsInfo|null $responseCodeStatisticsInfo responseCodeStatisticsInfo
    *
    * @return $this
    */
    public function setResponseCodeStatisticsInfo($responseCodeStatisticsInfo)
    {
        $this->container['responseCodeStatisticsInfo'] = $responseCodeStatisticsInfo;
        return $this;
    }

    /**
    * Gets attackTypeDistributionInfoList
    *  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoAttackTypeDistributionInfoList[]|null
    */
    public function getAttackTypeDistributionInfoList()
    {
        return $this->container['attackTypeDistributionInfoList'];
    }

    /**
    * Sets attackTypeDistributionInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoAttackTypeDistributionInfoList[]|null $attackTypeDistributionInfoList **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAttackTypeDistributionInfoList($attackTypeDistributionInfoList)
    {
        $this->container['attackTypeDistributionInfoList'] = $attackTypeDistributionInfoList;
        return $this;
    }

    /**
    * Gets topAttackedDomainsInfoList
    *  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackedDomainsInfoList[]|null
    */
    public function getTopAttackedDomainsInfoList()
    {
        return $this->container['topAttackedDomainsInfoList'];
    }

    /**
    * Sets topAttackedDomainsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackedDomainsInfoList[]|null $topAttackedDomainsInfoList **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopAttackedDomainsInfoList($topAttackedDomainsInfoList)
    {
        $this->container['topAttackedDomainsInfoList'] = $topAttackedDomainsInfoList;
        return $this;
    }

    /**
    * Gets topAttackSourceIpsInfoList
    *  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackSourceIpsInfoList[]|null
    */
    public function getTopAttackSourceIpsInfoList()
    {
        return $this->container['topAttackSourceIpsInfoList'];
    }

    /**
    * Sets topAttackSourceIpsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackSourceIpsInfoList[]|null $topAttackSourceIpsInfoList **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopAttackSourceIpsInfoList($topAttackSourceIpsInfoList)
    {
        $this->container['topAttackSourceIpsInfoList'] = $topAttackSourceIpsInfoList;
        return $this;
    }

    /**
    * Gets topAttackedUrlsInfoList
    *  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackedUrlsInfoList[]|null
    */
    public function getTopAttackedUrlsInfoList()
    {
        return $this->container['topAttackedUrlsInfoList'];
    }

    /**
    * Sets topAttackedUrlsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackedUrlsInfoList[]|null $topAttackedUrlsInfoList **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopAttackedUrlsInfoList($topAttackedUrlsInfoList)
    {
        $this->container['topAttackedUrlsInfoList'] = $topAttackedUrlsInfoList;
        return $this;
    }

    /**
    * Gets topAttackSourceLocationsInfoList
    *  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackSourceLocationsInfoList[]|null
    */
    public function getTopAttackSourceLocationsInfoList()
    {
        return $this->container['topAttackSourceLocationsInfoList'];
    }

    /**
    * Sets topAttackSourceLocationsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAttackSourceLocationsInfoList[]|null $topAttackSourceLocationsInfoList **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopAttackSourceLocationsInfoList($topAttackSourceLocationsInfoList)
    {
        $this->container['topAttackSourceLocationsInfoList'] = $topAttackSourceLocationsInfoList;
        return $this;
    }

    /**
    * Gets topAbnormalUrlsInfo
    *  topAbnormalUrlsInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfo|null
    */
    public function getTopAbnormalUrlsInfo()
    {
        return $this->container['topAbnormalUrlsInfo'];
    }

    /**
    * Sets topAbnormalUrlsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentSubscriptionInfoTopAbnormalUrlsInfo|null $topAbnormalUrlsInfo topAbnormalUrlsInfo
    *
    * @return $this
    */
    public function setTopAbnormalUrlsInfo($topAbnormalUrlsInfo)
    {
        $this->container['topAbnormalUrlsInfo'] = $topAbnormalUrlsInfo;
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

