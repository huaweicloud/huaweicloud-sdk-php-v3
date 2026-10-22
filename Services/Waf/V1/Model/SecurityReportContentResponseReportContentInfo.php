<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityReportContentResponseReportContentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityReportContentResponse_report_content_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * overviewStatisticsInfoList  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topErrorPagesInfo  topErrorPagesInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'overviewStatisticsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoOverviewStatisticsInfoList[]',
            'requestStatisticsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoRequestStatisticsInfoList[]',
            'qpsStatisticsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoQpsStatisticsInfo',
            'bandwidthStatisticsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoBandwidthStatisticsInfo',
            'responseCodeStatisticsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoResponseCodeStatisticsInfo',
            'attackTypeDistributionInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoAttackTypeDistributionInfoList[]',
            'topAttackedDomainsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackedDomainsInfoList[]',
            'topAttackSourceIpsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackSourceIpsInfoList[]',
            'topAttackedUrlsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackedUrlsInfoList[]',
            'topAttackSourceLocationsInfoList' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackSourceLocationsInfoList[]',
            'topErrorPagesInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopErrorPagesInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * overviewStatisticsInfoList  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topErrorPagesInfo  topErrorPagesInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'overviewStatisticsInfoList' => null,
        'requestStatisticsInfoList' => null,
        'qpsStatisticsInfo' => null,
        'bandwidthStatisticsInfo' => null,
        'responseCodeStatisticsInfo' => null,
        'attackTypeDistributionInfoList' => null,
        'topAttackedDomainsInfoList' => null,
        'topAttackSourceIpsInfoList' => null,
        'topAttackedUrlsInfoList' => null,
        'topAttackSourceLocationsInfoList' => null,
        'topErrorPagesInfo' => null
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
    * overviewStatisticsInfoList  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topErrorPagesInfo  topErrorPagesInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'overviewStatisticsInfoList' => 'overview_statistics_info_list',
            'requestStatisticsInfoList' => 'request_statistics_info_list',
            'qpsStatisticsInfo' => 'qps_statistics_info',
            'bandwidthStatisticsInfo' => 'bandwidth_statistics_info',
            'responseCodeStatisticsInfo' => 'response_code_statistics_info',
            'attackTypeDistributionInfoList' => 'attack_type_distribution_info_list',
            'topAttackedDomainsInfoList' => 'top_attacked_domains_info_list',
            'topAttackSourceIpsInfoList' => 'top_attack_source_ips_info_list',
            'topAttackedUrlsInfoList' => 'top_attacked_urls_info_list',
            'topAttackSourceLocationsInfoList' => 'top_attack_source_locations_info_list',
            'topErrorPagesInfo' => 'top_error_pages_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * overviewStatisticsInfoList  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topErrorPagesInfo  topErrorPagesInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'overviewStatisticsInfoList' => 'setOverviewStatisticsInfoList',
            'requestStatisticsInfoList' => 'setRequestStatisticsInfoList',
            'qpsStatisticsInfo' => 'setQpsStatisticsInfo',
            'bandwidthStatisticsInfo' => 'setBandwidthStatisticsInfo',
            'responseCodeStatisticsInfo' => 'setResponseCodeStatisticsInfo',
            'attackTypeDistributionInfoList' => 'setAttackTypeDistributionInfoList',
            'topAttackedDomainsInfoList' => 'setTopAttackedDomainsInfoList',
            'topAttackSourceIpsInfoList' => 'setTopAttackSourceIpsInfoList',
            'topAttackedUrlsInfoList' => 'setTopAttackedUrlsInfoList',
            'topAttackSourceLocationsInfoList' => 'setTopAttackSourceLocationsInfoList',
            'topErrorPagesInfo' => 'setTopErrorPagesInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * overviewStatisticsInfoList  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * requestStatisticsInfoList  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * qpsStatisticsInfo  qpsStatisticsInfo
    * bandwidthStatisticsInfo  bandwidthStatisticsInfo
    * responseCodeStatisticsInfo  responseCodeStatisticsInfo
    * attackTypeDistributionInfoList  **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedDomainsInfoList  **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceIpsInfoList  **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackedUrlsInfoList  **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topAttackSourceLocationsInfoList  **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * topErrorPagesInfo  topErrorPagesInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'overviewStatisticsInfoList' => 'getOverviewStatisticsInfoList',
            'requestStatisticsInfoList' => 'getRequestStatisticsInfoList',
            'qpsStatisticsInfo' => 'getQpsStatisticsInfo',
            'bandwidthStatisticsInfo' => 'getBandwidthStatisticsInfo',
            'responseCodeStatisticsInfo' => 'getResponseCodeStatisticsInfo',
            'attackTypeDistributionInfoList' => 'getAttackTypeDistributionInfoList',
            'topAttackedDomainsInfoList' => 'getTopAttackedDomainsInfoList',
            'topAttackSourceIpsInfoList' => 'getTopAttackSourceIpsInfoList',
            'topAttackedUrlsInfoList' => 'getTopAttackedUrlsInfoList',
            'topAttackSourceLocationsInfoList' => 'getTopAttackSourceLocationsInfoList',
            'topErrorPagesInfo' => 'getTopErrorPagesInfo'
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
        $this->container['overviewStatisticsInfoList'] = isset($data['overviewStatisticsInfoList']) ? $data['overviewStatisticsInfoList'] : null;
        $this->container['requestStatisticsInfoList'] = isset($data['requestStatisticsInfoList']) ? $data['requestStatisticsInfoList'] : null;
        $this->container['qpsStatisticsInfo'] = isset($data['qpsStatisticsInfo']) ? $data['qpsStatisticsInfo'] : null;
        $this->container['bandwidthStatisticsInfo'] = isset($data['bandwidthStatisticsInfo']) ? $data['bandwidthStatisticsInfo'] : null;
        $this->container['responseCodeStatisticsInfo'] = isset($data['responseCodeStatisticsInfo']) ? $data['responseCodeStatisticsInfo'] : null;
        $this->container['attackTypeDistributionInfoList'] = isset($data['attackTypeDistributionInfoList']) ? $data['attackTypeDistributionInfoList'] : null;
        $this->container['topAttackedDomainsInfoList'] = isset($data['topAttackedDomainsInfoList']) ? $data['topAttackedDomainsInfoList'] : null;
        $this->container['topAttackSourceIpsInfoList'] = isset($data['topAttackSourceIpsInfoList']) ? $data['topAttackSourceIpsInfoList'] : null;
        $this->container['topAttackedUrlsInfoList'] = isset($data['topAttackedUrlsInfoList']) ? $data['topAttackedUrlsInfoList'] : null;
        $this->container['topAttackSourceLocationsInfoList'] = isset($data['topAttackSourceLocationsInfoList']) ? $data['topAttackSourceLocationsInfoList'] : null;
        $this->container['topErrorPagesInfo'] = isset($data['topErrorPagesInfo']) ? $data['topErrorPagesInfo'] : null;
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
    * Gets overviewStatisticsInfoList
    *  **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoOverviewStatisticsInfoList[]|null
    */
    public function getOverviewStatisticsInfoList()
    {
        return $this->container['overviewStatisticsInfoList'];
    }

    /**
    * Sets overviewStatisticsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoOverviewStatisticsInfoList[]|null $overviewStatisticsInfoList **参数解释：** 总览统计信息，包含各维度的汇总统计数据及TOP域名详情。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOverviewStatisticsInfoList($overviewStatisticsInfoList)
    {
        $this->container['overviewStatisticsInfoList'] = $overviewStatisticsInfoList;
        return $this;
    }

    /**
    * Gets requestStatisticsInfoList
    *  **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoRequestStatisticsInfoList[]|null
    */
    public function getRequestStatisticsInfoList()
    {
        return $this->container['requestStatisticsInfoList'];
    }

    /**
    * Sets requestStatisticsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoRequestStatisticsInfoList[]|null $requestStatisticsInfoList **参数解释：** 请求次数统计信息，包含各维度按时间线的请求数量统计。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoQpsStatisticsInfo|null
    */
    public function getQpsStatisticsInfo()
    {
        return $this->container['qpsStatisticsInfo'];
    }

    /**
    * Sets qpsStatisticsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoQpsStatisticsInfo|null $qpsStatisticsInfo qpsStatisticsInfo
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoBandwidthStatisticsInfo|null
    */
    public function getBandwidthStatisticsInfo()
    {
        return $this->container['bandwidthStatisticsInfo'];
    }

    /**
    * Sets bandwidthStatisticsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoBandwidthStatisticsInfo|null $bandwidthStatisticsInfo bandwidthStatisticsInfo
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoResponseCodeStatisticsInfo|null
    */
    public function getResponseCodeStatisticsInfo()
    {
        return $this->container['responseCodeStatisticsInfo'];
    }

    /**
    * Sets responseCodeStatisticsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoResponseCodeStatisticsInfo|null $responseCodeStatisticsInfo responseCodeStatisticsInfo
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoAttackTypeDistributionInfoList[]|null
    */
    public function getAttackTypeDistributionInfoList()
    {
        return $this->container['attackTypeDistributionInfoList'];
    }

    /**
    * Sets attackTypeDistributionInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoAttackTypeDistributionInfoList[]|null $attackTypeDistributionInfoList **参数解释：** 攻击类型分布统计信息，包含各攻击类型的数量分布。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackedDomainsInfoList[]|null
    */
    public function getTopAttackedDomainsInfoList()
    {
        return $this->container['topAttackedDomainsInfoList'];
    }

    /**
    * Sets topAttackedDomainsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackedDomainsInfoList[]|null $topAttackedDomainsInfoList **参数解释：** TOP被攻击的域名信息，按被攻击次数排序的域名列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackSourceIpsInfoList[]|null
    */
    public function getTopAttackSourceIpsInfoList()
    {
        return $this->container['topAttackSourceIpsInfoList'];
    }

    /**
    * Sets topAttackSourceIpsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackSourceIpsInfoList[]|null $topAttackSourceIpsInfoList **参数解释：** TOP攻击的源IP信息，按攻击次数排序的攻击源IP列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackedUrlsInfoList[]|null
    */
    public function getTopAttackedUrlsInfoList()
    {
        return $this->container['topAttackedUrlsInfoList'];
    }

    /**
    * Sets topAttackedUrlsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackedUrlsInfoList[]|null $topAttackedUrlsInfoList **参数解释：** TOP被攻击的URL信息，按被攻击次数排序的URL列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackSourceLocationsInfoList[]|null
    */
    public function getTopAttackSourceLocationsInfoList()
    {
        return $this->container['topAttackSourceLocationsInfoList'];
    }

    /**
    * Sets topAttackSourceLocationsInfoList
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopAttackSourceLocationsInfoList[]|null $topAttackSourceLocationsInfoList **参数解释：** TOP攻击的源地理位置信息，按攻击次数排序的地理位置列表。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTopAttackSourceLocationsInfoList($topAttackSourceLocationsInfoList)
    {
        $this->container['topAttackSourceLocationsInfoList'] = $topAttackSourceLocationsInfoList;
        return $this;
    }

    /**
    * Gets topErrorPagesInfo
    *  topErrorPagesInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopErrorPagesInfo|null
    */
    public function getTopErrorPagesInfo()
    {
        return $this->container['topErrorPagesInfo'];
    }

    /**
    * Sets topErrorPagesInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\SecurityReportContentResponseReportContentInfoTopErrorPagesInfo|null $topErrorPagesInfo topErrorPagesInfo
    *
    * @return $this
    */
    public function setTopErrorPagesInfo($topErrorPagesInfo)
    {
        $this->container['topErrorPagesInfo'] = $topErrorPagesInfo;
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

