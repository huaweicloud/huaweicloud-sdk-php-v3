<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityReportSubscriptionRequestBodyReportContentSubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityReportSubscriptionRequestBody_report_content_subscription';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * overviewStatisticsEnable  overviewStatisticsEnable
    * groupByDayEnable  groupByDayEnable
    * requestStatisticsEnable  requestStatisticsEnable
    * qpsStatisticsEnable  qpsStatisticsEnable
    * bandwidthStatisticsEnable  bandwidthStatisticsEnable
    * responseCodeStatisticsEnable  responseCodeStatisticsEnable
    * attackTypeDistributionEnable  attackTypeDistributionEnable
    * topAttackedDomainsEnable  topAttackedDomainsEnable
    * topAttackSourceIpsEnable  topAttackSourceIpsEnable
    * topAttackedUrlsEnable  topAttackedUrlsEnable
    * topAttackSourceLocationsEnable  topAttackSourceLocationsEnable
    * topAbnormalUrlsEnable  topAbnormalUrlsEnable
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
            'topAbnormalUrlsEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * overviewStatisticsEnable  overviewStatisticsEnable
    * groupByDayEnable  groupByDayEnable
    * requestStatisticsEnable  requestStatisticsEnable
    * qpsStatisticsEnable  qpsStatisticsEnable
    * bandwidthStatisticsEnable  bandwidthStatisticsEnable
    * responseCodeStatisticsEnable  responseCodeStatisticsEnable
    * attackTypeDistributionEnable  attackTypeDistributionEnable
    * topAttackedDomainsEnable  topAttackedDomainsEnable
    * topAttackSourceIpsEnable  topAttackSourceIpsEnable
    * topAttackedUrlsEnable  topAttackedUrlsEnable
    * topAttackSourceLocationsEnable  topAttackSourceLocationsEnable
    * topAbnormalUrlsEnable  topAbnormalUrlsEnable
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
        'topAbnormalUrlsEnable' => null
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
    * overviewStatisticsEnable  overviewStatisticsEnable
    * groupByDayEnable  groupByDayEnable
    * requestStatisticsEnable  requestStatisticsEnable
    * qpsStatisticsEnable  qpsStatisticsEnable
    * bandwidthStatisticsEnable  bandwidthStatisticsEnable
    * responseCodeStatisticsEnable  responseCodeStatisticsEnable
    * attackTypeDistributionEnable  attackTypeDistributionEnable
    * topAttackedDomainsEnable  topAttackedDomainsEnable
    * topAttackSourceIpsEnable  topAttackSourceIpsEnable
    * topAttackedUrlsEnable  topAttackedUrlsEnable
    * topAttackSourceLocationsEnable  topAttackSourceLocationsEnable
    * topAbnormalUrlsEnable  topAbnormalUrlsEnable
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
            'topAbnormalUrlsEnable' => 'top_abnormal_urls_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * overviewStatisticsEnable  overviewStatisticsEnable
    * groupByDayEnable  groupByDayEnable
    * requestStatisticsEnable  requestStatisticsEnable
    * qpsStatisticsEnable  qpsStatisticsEnable
    * bandwidthStatisticsEnable  bandwidthStatisticsEnable
    * responseCodeStatisticsEnable  responseCodeStatisticsEnable
    * attackTypeDistributionEnable  attackTypeDistributionEnable
    * topAttackedDomainsEnable  topAttackedDomainsEnable
    * topAttackSourceIpsEnable  topAttackSourceIpsEnable
    * topAttackedUrlsEnable  topAttackedUrlsEnable
    * topAttackSourceLocationsEnable  topAttackSourceLocationsEnable
    * topAbnormalUrlsEnable  topAbnormalUrlsEnable
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
            'topAbnormalUrlsEnable' => 'setTopAbnormalUrlsEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * overviewStatisticsEnable  overviewStatisticsEnable
    * groupByDayEnable  groupByDayEnable
    * requestStatisticsEnable  requestStatisticsEnable
    * qpsStatisticsEnable  qpsStatisticsEnable
    * bandwidthStatisticsEnable  bandwidthStatisticsEnable
    * responseCodeStatisticsEnable  responseCodeStatisticsEnable
    * attackTypeDistributionEnable  attackTypeDistributionEnable
    * topAttackedDomainsEnable  topAttackedDomainsEnable
    * topAttackSourceIpsEnable  topAttackSourceIpsEnable
    * topAttackedUrlsEnable  topAttackedUrlsEnable
    * topAttackSourceLocationsEnable  topAttackSourceLocationsEnable
    * topAbnormalUrlsEnable  topAbnormalUrlsEnable
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
            'topAbnormalUrlsEnable' => 'getTopAbnormalUrlsEnable'
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
        $this->container['topAbnormalUrlsEnable'] = isset($data['topAbnormalUrlsEnable']) ? $data['topAbnormalUrlsEnable'] : null;
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
    *  overviewStatisticsEnable
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
    * @param bool|null $overviewStatisticsEnable overviewStatisticsEnable
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
    *  groupByDayEnable
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
    * @param bool|null $groupByDayEnable groupByDayEnable
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
    *  requestStatisticsEnable
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
    * @param bool|null $requestStatisticsEnable requestStatisticsEnable
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
    *  qpsStatisticsEnable
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
    * @param bool|null $qpsStatisticsEnable qpsStatisticsEnable
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
    *  bandwidthStatisticsEnable
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
    * @param bool|null $bandwidthStatisticsEnable bandwidthStatisticsEnable
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
    *  responseCodeStatisticsEnable
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
    * @param bool|null $responseCodeStatisticsEnable responseCodeStatisticsEnable
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
    *  attackTypeDistributionEnable
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
    * @param bool|null $attackTypeDistributionEnable attackTypeDistributionEnable
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
    *  topAttackedDomainsEnable
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
    * @param bool|null $topAttackedDomainsEnable topAttackedDomainsEnable
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
    *  topAttackSourceIpsEnable
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
    * @param bool|null $topAttackSourceIpsEnable topAttackSourceIpsEnable
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
    *  topAttackedUrlsEnable
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
    * @param bool|null $topAttackedUrlsEnable topAttackedUrlsEnable
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
    *  topAttackSourceLocationsEnable
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
    * @param bool|null $topAttackSourceLocationsEnable topAttackSourceLocationsEnable
    *
    * @return $this
    */
    public function setTopAttackSourceLocationsEnable($topAttackSourceLocationsEnable)
    {
        $this->container['topAttackSourceLocationsEnable'] = $topAttackSourceLocationsEnable;
        return $this;
    }

    /**
    * Gets topAbnormalUrlsEnable
    *  topAbnormalUrlsEnable
    *
    * @return bool|null
    */
    public function getTopAbnormalUrlsEnable()
    {
        return $this->container['topAbnormalUrlsEnable'];
    }

    /**
    * Sets topAbnormalUrlsEnable
    *
    * @param bool|null $topAbnormalUrlsEnable topAbnormalUrlsEnable
    *
    * @return $this
    */
    public function setTopAbnormalUrlsEnable($topAbnormalUrlsEnable)
    {
        $this->container['topAbnormalUrlsEnable'] = $topAbnormalUrlsEnable;
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

