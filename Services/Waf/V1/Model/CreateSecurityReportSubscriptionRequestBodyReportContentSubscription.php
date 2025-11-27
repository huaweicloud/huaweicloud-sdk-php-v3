<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSecurityReportSubscriptionRequestBodyReportContentSubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSecurityReportSubscriptionRequestBody_report_content_subscription';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * overviewStatisticsEnable  **参数解释：** 是否启用总览统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * groupByDayEnable  **参数解释：** 是否启用按天分组统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * requestStatisticsEnable  **参数解释：** 是否启用请求次数统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * qpsStatisticsEnable  **参数解释：** 是否启用QPS统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * bandwidthStatisticsEnable  **参数解释：** 是否启用带宽统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * responseCodeStatisticsEnable  **参数解释：** 是否启用响应码统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * attackTypeDistributionEnable  **参数解释：** 是否启用攻击类型分布统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedDomainsEnable  **参数解释：** 是否启用TOP被攻击域名统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceIpsEnable  **参数解释：** 是否启用TOP攻击源IP统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedUrlsEnable  **参数解释：** 是否启用TOP被攻击URL统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceLocationsEnable  **参数解释：** 是否启用TOP攻击源地理位置统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topErrorPagesEnable  **参数解释：** 是否启用TOP错误页面统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'overviewStatisticsEnable' => 'bool',
            'groupByDayEnable' => 'bool',
            'requestStatisticsEnable' => 'bool',
            'qpsStatisticsEnable' => 'bool',
            'bandwidthStatisticsEnable' => 'bool',
            'responseCodeStatisticsEnable' => 'bool',
            'attackTypeDistributionEnable' => 'bool',
            'topAttackedDomainsEnable' => 'bool',
            'topAttackSourceIpsEnable' => 'bool',
            'topAttackedUrlsEnable' => 'bool',
            'topAttackSourceLocationsEnable' => 'bool',
            'topErrorPagesEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * overviewStatisticsEnable  **参数解释：** 是否启用总览统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * groupByDayEnable  **参数解释：** 是否启用按天分组统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * requestStatisticsEnable  **参数解释：** 是否启用请求次数统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * qpsStatisticsEnable  **参数解释：** 是否启用QPS统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * bandwidthStatisticsEnable  **参数解释：** 是否启用带宽统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * responseCodeStatisticsEnable  **参数解释：** 是否启用响应码统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * attackTypeDistributionEnable  **参数解释：** 是否启用攻击类型分布统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedDomainsEnable  **参数解释：** 是否启用TOP被攻击域名统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceIpsEnable  **参数解释：** 是否启用TOP攻击源IP统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedUrlsEnable  **参数解释：** 是否启用TOP被攻击URL统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceLocationsEnable  **参数解释：** 是否启用TOP攻击源地理位置统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topErrorPagesEnable  **参数解释：** 是否启用TOP错误页面统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'overviewStatisticsEnable' => null,
        'groupByDayEnable' => null,
        'requestStatisticsEnable' => null,
        'qpsStatisticsEnable' => null,
        'bandwidthStatisticsEnable' => null,
        'responseCodeStatisticsEnable' => null,
        'attackTypeDistributionEnable' => null,
        'topAttackedDomainsEnable' => null,
        'topAttackSourceIpsEnable' => null,
        'topAttackedUrlsEnable' => null,
        'topAttackSourceLocationsEnable' => null,
        'topErrorPagesEnable' => null
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
    * overviewStatisticsEnable  **参数解释：** 是否启用总览统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * groupByDayEnable  **参数解释：** 是否启用按天分组统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * requestStatisticsEnable  **参数解释：** 是否启用请求次数统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * qpsStatisticsEnable  **参数解释：** 是否启用QPS统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * bandwidthStatisticsEnable  **参数解释：** 是否启用带宽统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * responseCodeStatisticsEnable  **参数解释：** 是否启用响应码统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * attackTypeDistributionEnable  **参数解释：** 是否启用攻击类型分布统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedDomainsEnable  **参数解释：** 是否启用TOP被攻击域名统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceIpsEnable  **参数解释：** 是否启用TOP攻击源IP统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedUrlsEnable  **参数解释：** 是否启用TOP被攻击URL统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceLocationsEnable  **参数解释：** 是否启用TOP攻击源地理位置统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topErrorPagesEnable  **参数解释：** 是否启用TOP错误页面统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'overviewStatisticsEnable' => 'overview_statistics_enable',
            'groupByDayEnable' => 'group_by_day_enable',
            'requestStatisticsEnable' => 'request_statistics_enable',
            'qpsStatisticsEnable' => 'qps_statistics_enable',
            'bandwidthStatisticsEnable' => 'bandwidth_statistics_enable',
            'responseCodeStatisticsEnable' => 'response_code_statistics_enable',
            'attackTypeDistributionEnable' => 'attack_type_distribution_enable',
            'topAttackedDomainsEnable' => 'top_attacked_domains_enable',
            'topAttackSourceIpsEnable' => 'top_attack_source_ips_enable',
            'topAttackedUrlsEnable' => 'top_attacked_urls_enable',
            'topAttackSourceLocationsEnable' => 'top_attack_source_locations_enable',
            'topErrorPagesEnable' => 'top_error_pages_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * overviewStatisticsEnable  **参数解释：** 是否启用总览统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * groupByDayEnable  **参数解释：** 是否启用按天分组统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * requestStatisticsEnable  **参数解释：** 是否启用请求次数统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * qpsStatisticsEnable  **参数解释：** 是否启用QPS统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * bandwidthStatisticsEnable  **参数解释：** 是否启用带宽统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * responseCodeStatisticsEnable  **参数解释：** 是否启用响应码统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * attackTypeDistributionEnable  **参数解释：** 是否启用攻击类型分布统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedDomainsEnable  **参数解释：** 是否启用TOP被攻击域名统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceIpsEnable  **参数解释：** 是否启用TOP攻击源IP统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedUrlsEnable  **参数解释：** 是否启用TOP被攻击URL统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceLocationsEnable  **参数解释：** 是否启用TOP攻击源地理位置统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topErrorPagesEnable  **参数解释：** 是否启用TOP错误页面统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @var string[]
    */
    protected static $setters = [
            'overviewStatisticsEnable' => 'setOverviewStatisticsEnable',
            'groupByDayEnable' => 'setGroupByDayEnable',
            'requestStatisticsEnable' => 'setRequestStatisticsEnable',
            'qpsStatisticsEnable' => 'setQpsStatisticsEnable',
            'bandwidthStatisticsEnable' => 'setBandwidthStatisticsEnable',
            'responseCodeStatisticsEnable' => 'setResponseCodeStatisticsEnable',
            'attackTypeDistributionEnable' => 'setAttackTypeDistributionEnable',
            'topAttackedDomainsEnable' => 'setTopAttackedDomainsEnable',
            'topAttackSourceIpsEnable' => 'setTopAttackSourceIpsEnable',
            'topAttackedUrlsEnable' => 'setTopAttackedUrlsEnable',
            'topAttackSourceLocationsEnable' => 'setTopAttackSourceLocationsEnable',
            'topErrorPagesEnable' => 'setTopErrorPagesEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * overviewStatisticsEnable  **参数解释：** 是否启用总览统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * groupByDayEnable  **参数解释：** 是否启用按天分组统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * requestStatisticsEnable  **参数解释：** 是否启用请求次数统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * qpsStatisticsEnable  **参数解释：** 是否启用QPS统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * bandwidthStatisticsEnable  **参数解释：** 是否启用带宽统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * responseCodeStatisticsEnable  **参数解释：** 是否启用响应码统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * attackTypeDistributionEnable  **参数解释：** 是否启用攻击类型分布统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedDomainsEnable  **参数解释：** 是否启用TOP被攻击域名统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceIpsEnable  **参数解释：** 是否启用TOP攻击源IP统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackedUrlsEnable  **参数解释：** 是否启用TOP被攻击URL统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topAttackSourceLocationsEnable  **参数解释：** 是否启用TOP攻击源地理位置统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    * topErrorPagesEnable  **参数解释：** 是否启用TOP错误页面统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @var string[]
    */
    protected static $getters = [
            'overviewStatisticsEnable' => 'getOverviewStatisticsEnable',
            'groupByDayEnable' => 'getGroupByDayEnable',
            'requestStatisticsEnable' => 'getRequestStatisticsEnable',
            'qpsStatisticsEnable' => 'getQpsStatisticsEnable',
            'bandwidthStatisticsEnable' => 'getBandwidthStatisticsEnable',
            'responseCodeStatisticsEnable' => 'getResponseCodeStatisticsEnable',
            'attackTypeDistributionEnable' => 'getAttackTypeDistributionEnable',
            'topAttackedDomainsEnable' => 'getTopAttackedDomainsEnable',
            'topAttackSourceIpsEnable' => 'getTopAttackSourceIpsEnable',
            'topAttackedUrlsEnable' => 'getTopAttackedUrlsEnable',
            'topAttackSourceLocationsEnable' => 'getTopAttackSourceLocationsEnable',
            'topErrorPagesEnable' => 'getTopErrorPagesEnable'
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
        $this->container['overviewStatisticsEnable'] = isset($data['overviewStatisticsEnable']) ? $data['overviewStatisticsEnable'] : null;
        $this->container['groupByDayEnable'] = isset($data['groupByDayEnable']) ? $data['groupByDayEnable'] : null;
        $this->container['requestStatisticsEnable'] = isset($data['requestStatisticsEnable']) ? $data['requestStatisticsEnable'] : null;
        $this->container['qpsStatisticsEnable'] = isset($data['qpsStatisticsEnable']) ? $data['qpsStatisticsEnable'] : null;
        $this->container['bandwidthStatisticsEnable'] = isset($data['bandwidthStatisticsEnable']) ? $data['bandwidthStatisticsEnable'] : null;
        $this->container['responseCodeStatisticsEnable'] = isset($data['responseCodeStatisticsEnable']) ? $data['responseCodeStatisticsEnable'] : null;
        $this->container['attackTypeDistributionEnable'] = isset($data['attackTypeDistributionEnable']) ? $data['attackTypeDistributionEnable'] : null;
        $this->container['topAttackedDomainsEnable'] = isset($data['topAttackedDomainsEnable']) ? $data['topAttackedDomainsEnable'] : null;
        $this->container['topAttackSourceIpsEnable'] = isset($data['topAttackSourceIpsEnable']) ? $data['topAttackSourceIpsEnable'] : null;
        $this->container['topAttackedUrlsEnable'] = isset($data['topAttackedUrlsEnable']) ? $data['topAttackedUrlsEnable'] : null;
        $this->container['topAttackSourceLocationsEnable'] = isset($data['topAttackSourceLocationsEnable']) ? $data['topAttackSourceLocationsEnable'] : null;
        $this->container['topErrorPagesEnable'] = isset($data['topErrorPagesEnable']) ? $data['topErrorPagesEnable'] : null;
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
    * Gets overviewStatisticsEnable
    *  **参数解释：** 是否启用总览统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getOverviewStatisticsEnable()
    {
        return $this->container['overviewStatisticsEnable'];
    }

    /**
    * Sets overviewStatisticsEnable
    *
    * @param bool|null $overviewStatisticsEnable **参数解释：** 是否启用总览统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setOverviewStatisticsEnable($overviewStatisticsEnable)
    {
        $this->container['overviewStatisticsEnable'] = $overviewStatisticsEnable;
        return $this;
    }

    /**
    * Gets groupByDayEnable
    *  **参数解释：** 是否启用按天分组统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getGroupByDayEnable()
    {
        return $this->container['groupByDayEnable'];
    }

    /**
    * Sets groupByDayEnable
    *
    * @param bool|null $groupByDayEnable **参数解释：** 是否启用按天分组统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setGroupByDayEnable($groupByDayEnable)
    {
        $this->container['groupByDayEnable'] = $groupByDayEnable;
        return $this;
    }

    /**
    * Gets requestStatisticsEnable
    *  **参数解释：** 是否启用请求次数统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getRequestStatisticsEnable()
    {
        return $this->container['requestStatisticsEnable'];
    }

    /**
    * Sets requestStatisticsEnable
    *
    * @param bool|null $requestStatisticsEnable **参数解释：** 是否启用请求次数统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setRequestStatisticsEnable($requestStatisticsEnable)
    {
        $this->container['requestStatisticsEnable'] = $requestStatisticsEnable;
        return $this;
    }

    /**
    * Gets qpsStatisticsEnable
    *  **参数解释：** 是否启用QPS统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getQpsStatisticsEnable()
    {
        return $this->container['qpsStatisticsEnable'];
    }

    /**
    * Sets qpsStatisticsEnable
    *
    * @param bool|null $qpsStatisticsEnable **参数解释：** 是否启用QPS统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setQpsStatisticsEnable($qpsStatisticsEnable)
    {
        $this->container['qpsStatisticsEnable'] = $qpsStatisticsEnable;
        return $this;
    }

    /**
    * Gets bandwidthStatisticsEnable
    *  **参数解释：** 是否启用带宽统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getBandwidthStatisticsEnable()
    {
        return $this->container['bandwidthStatisticsEnable'];
    }

    /**
    * Sets bandwidthStatisticsEnable
    *
    * @param bool|null $bandwidthStatisticsEnable **参数解释：** 是否启用带宽统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setBandwidthStatisticsEnable($bandwidthStatisticsEnable)
    {
        $this->container['bandwidthStatisticsEnable'] = $bandwidthStatisticsEnable;
        return $this;
    }

    /**
    * Gets responseCodeStatisticsEnable
    *  **参数解释：** 是否启用响应码统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getResponseCodeStatisticsEnable()
    {
        return $this->container['responseCodeStatisticsEnable'];
    }

    /**
    * Sets responseCodeStatisticsEnable
    *
    * @param bool|null $responseCodeStatisticsEnable **参数解释：** 是否启用响应码统计内容（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setResponseCodeStatisticsEnable($responseCodeStatisticsEnable)
    {
        $this->container['responseCodeStatisticsEnable'] = $responseCodeStatisticsEnable;
        return $this;
    }

    /**
    * Gets attackTypeDistributionEnable
    *  **参数解释：** 是否启用攻击类型分布统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getAttackTypeDistributionEnable()
    {
        return $this->container['attackTypeDistributionEnable'];
    }

    /**
    * Sets attackTypeDistributionEnable
    *
    * @param bool|null $attackTypeDistributionEnable **参数解释：** 是否启用攻击类型分布统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setAttackTypeDistributionEnable($attackTypeDistributionEnable)
    {
        $this->container['attackTypeDistributionEnable'] = $attackTypeDistributionEnable;
        return $this;
    }

    /**
    * Gets topAttackedDomainsEnable
    *  **参数解释：** 是否启用TOP被攻击域名统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getTopAttackedDomainsEnable()
    {
        return $this->container['topAttackedDomainsEnable'];
    }

    /**
    * Sets topAttackedDomainsEnable
    *
    * @param bool|null $topAttackedDomainsEnable **参数解释：** 是否启用TOP被攻击域名统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setTopAttackedDomainsEnable($topAttackedDomainsEnable)
    {
        $this->container['topAttackedDomainsEnable'] = $topAttackedDomainsEnable;
        return $this;
    }

    /**
    * Gets topAttackSourceIpsEnable
    *  **参数解释：** 是否启用TOP攻击源IP统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getTopAttackSourceIpsEnable()
    {
        return $this->container['topAttackSourceIpsEnable'];
    }

    /**
    * Sets topAttackSourceIpsEnable
    *
    * @param bool|null $topAttackSourceIpsEnable **参数解释：** 是否启用TOP攻击源IP统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setTopAttackSourceIpsEnable($topAttackSourceIpsEnable)
    {
        $this->container['topAttackSourceIpsEnable'] = $topAttackSourceIpsEnable;
        return $this;
    }

    /**
    * Gets topAttackedUrlsEnable
    *  **参数解释：** 是否启用TOP被攻击URL统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getTopAttackedUrlsEnable()
    {
        return $this->container['topAttackedUrlsEnable'];
    }

    /**
    * Sets topAttackedUrlsEnable
    *
    * @param bool|null $topAttackedUrlsEnable **参数解释：** 是否启用TOP被攻击URL统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setTopAttackedUrlsEnable($topAttackedUrlsEnable)
    {
        $this->container['topAttackedUrlsEnable'] = $topAttackedUrlsEnable;
        return $this;
    }

    /**
    * Gets topAttackSourceLocationsEnable
    *  **参数解释：** 是否启用TOP攻击源地理位置统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getTopAttackSourceLocationsEnable()
    {
        return $this->container['topAttackSourceLocationsEnable'];
    }

    /**
    * Sets topAttackSourceLocationsEnable
    *
    * @param bool|null $topAttackSourceLocationsEnable **参数解释：** 是否启用TOP攻击源地理位置统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setTopAttackSourceLocationsEnable($topAttackSourceLocationsEnable)
    {
        $this->container['topAttackSourceLocationsEnable'] = $topAttackSourceLocationsEnable;
        return $this;
    }

    /**
    * Gets topErrorPagesEnable
    *  **参数解释：** 是否启用TOP错误页面统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return bool|null
    */
    public function getTopErrorPagesEnable()
    {
        return $this->container['topErrorPagesEnable'];
    }

    /**
    * Sets topErrorPagesEnable
    *
    * @param bool|null $topErrorPagesEnable **参数解释：** 是否启用TOP错误页面统计（true表示启用，false表示禁用）。 **约束限制：** 不涉及 **取值范围：** 仅支持true、false两个布尔值 **默认取值：** true
    *
    * @return $this
    */
    public function setTopErrorPagesEnable($topErrorPagesEnable)
    {
        $this->container['topErrorPagesEnable'] = $topErrorPagesEnable;
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

