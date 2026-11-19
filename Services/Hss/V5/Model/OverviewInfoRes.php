<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OverviewInfoRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OverviewInfoRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dashboardInfoList  **参数解释**： 安全总览内容列表 **取值范围**： 0-100个DashboardInfo对象
    * riskyTrendInfoList  **参数解释**： 风险趋势内容列表 **取值范围**： 0-100个RiskyTrendInfo对象
    * riskyDistributionInfoList  **参数解释**： 风险分布内容列表 **取值范围**： 0-100个RiskyDistributionInfo对象
    * topRiskyHostInfoList  **参数解释**： top5风险主机列表 **取值范围**： 0-5个TopRiskyHostInfo对象
    * topAccountCrackInfoList  **参数解释**： top5暴力破解来源列表 **取值范围**： 0-5个TopAccountCrackInfo对象
    * hostInfoList  **参数解释**： 服务器列表 **取值范围**： 0-200个HostInfo对象
    * overallSituationInfoList  **参数解释**： 总体情况列表 **取值范围**： 0-100个OverallSituationInfo对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dashboardInfoList' => 'object[]',
            'riskyTrendInfoList' => 'object[]',
            'riskyDistributionInfoList' => 'object[]',
            'topRiskyHostInfoList' => 'object[]',
            'topAccountCrackInfoList' => 'object[]',
            'hostInfoList' => 'object[]',
            'overallSituationInfoList' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dashboardInfoList  **参数解释**： 安全总览内容列表 **取值范围**： 0-100个DashboardInfo对象
    * riskyTrendInfoList  **参数解释**： 风险趋势内容列表 **取值范围**： 0-100个RiskyTrendInfo对象
    * riskyDistributionInfoList  **参数解释**： 风险分布内容列表 **取值范围**： 0-100个RiskyDistributionInfo对象
    * topRiskyHostInfoList  **参数解释**： top5风险主机列表 **取值范围**： 0-5个TopRiskyHostInfo对象
    * topAccountCrackInfoList  **参数解释**： top5暴力破解来源列表 **取值范围**： 0-5个TopAccountCrackInfo对象
    * hostInfoList  **参数解释**： 服务器列表 **取值范围**： 0-200个HostInfo对象
    * overallSituationInfoList  **参数解释**： 总体情况列表 **取值范围**： 0-100个OverallSituationInfo对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dashboardInfoList' => null,
        'riskyTrendInfoList' => null,
        'riskyDistributionInfoList' => null,
        'topRiskyHostInfoList' => null,
        'topAccountCrackInfoList' => null,
        'hostInfoList' => null,
        'overallSituationInfoList' => null
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
    * dashboardInfoList  **参数解释**： 安全总览内容列表 **取值范围**： 0-100个DashboardInfo对象
    * riskyTrendInfoList  **参数解释**： 风险趋势内容列表 **取值范围**： 0-100个RiskyTrendInfo对象
    * riskyDistributionInfoList  **参数解释**： 风险分布内容列表 **取值范围**： 0-100个RiskyDistributionInfo对象
    * topRiskyHostInfoList  **参数解释**： top5风险主机列表 **取值范围**： 0-5个TopRiskyHostInfo对象
    * topAccountCrackInfoList  **参数解释**： top5暴力破解来源列表 **取值范围**： 0-5个TopAccountCrackInfo对象
    * hostInfoList  **参数解释**： 服务器列表 **取值范围**： 0-200个HostInfo对象
    * overallSituationInfoList  **参数解释**： 总体情况列表 **取值范围**： 0-100个OverallSituationInfo对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dashboardInfoList' => 'dashboard_info_list',
            'riskyTrendInfoList' => 'risky_trend_info_list',
            'riskyDistributionInfoList' => 'risky_distribution_info_list',
            'topRiskyHostInfoList' => 'top_risky_host_info_list',
            'topAccountCrackInfoList' => 'top_account_crack_info_list',
            'hostInfoList' => 'host_info_list',
            'overallSituationInfoList' => 'overall_situation_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dashboardInfoList  **参数解释**： 安全总览内容列表 **取值范围**： 0-100个DashboardInfo对象
    * riskyTrendInfoList  **参数解释**： 风险趋势内容列表 **取值范围**： 0-100个RiskyTrendInfo对象
    * riskyDistributionInfoList  **参数解释**： 风险分布内容列表 **取值范围**： 0-100个RiskyDistributionInfo对象
    * topRiskyHostInfoList  **参数解释**： top5风险主机列表 **取值范围**： 0-5个TopRiskyHostInfo对象
    * topAccountCrackInfoList  **参数解释**： top5暴力破解来源列表 **取值范围**： 0-5个TopAccountCrackInfo对象
    * hostInfoList  **参数解释**： 服务器列表 **取值范围**： 0-200个HostInfo对象
    * overallSituationInfoList  **参数解释**： 总体情况列表 **取值范围**： 0-100个OverallSituationInfo对象
    *
    * @var string[]
    */
    protected static $setters = [
            'dashboardInfoList' => 'setDashboardInfoList',
            'riskyTrendInfoList' => 'setRiskyTrendInfoList',
            'riskyDistributionInfoList' => 'setRiskyDistributionInfoList',
            'topRiskyHostInfoList' => 'setTopRiskyHostInfoList',
            'topAccountCrackInfoList' => 'setTopAccountCrackInfoList',
            'hostInfoList' => 'setHostInfoList',
            'overallSituationInfoList' => 'setOverallSituationInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dashboardInfoList  **参数解释**： 安全总览内容列表 **取值范围**： 0-100个DashboardInfo对象
    * riskyTrendInfoList  **参数解释**： 风险趋势内容列表 **取值范围**： 0-100个RiskyTrendInfo对象
    * riskyDistributionInfoList  **参数解释**： 风险分布内容列表 **取值范围**： 0-100个RiskyDistributionInfo对象
    * topRiskyHostInfoList  **参数解释**： top5风险主机列表 **取值范围**： 0-5个TopRiskyHostInfo对象
    * topAccountCrackInfoList  **参数解释**： top5暴力破解来源列表 **取值范围**： 0-5个TopAccountCrackInfo对象
    * hostInfoList  **参数解释**： 服务器列表 **取值范围**： 0-200个HostInfo对象
    * overallSituationInfoList  **参数解释**： 总体情况列表 **取值范围**： 0-100个OverallSituationInfo对象
    *
    * @var string[]
    */
    protected static $getters = [
            'dashboardInfoList' => 'getDashboardInfoList',
            'riskyTrendInfoList' => 'getRiskyTrendInfoList',
            'riskyDistributionInfoList' => 'getRiskyDistributionInfoList',
            'topRiskyHostInfoList' => 'getTopRiskyHostInfoList',
            'topAccountCrackInfoList' => 'getTopAccountCrackInfoList',
            'hostInfoList' => 'getHostInfoList',
            'overallSituationInfoList' => 'getOverallSituationInfoList'
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
        $this->container['dashboardInfoList'] = isset($data['dashboardInfoList']) ? $data['dashboardInfoList'] : null;
        $this->container['riskyTrendInfoList'] = isset($data['riskyTrendInfoList']) ? $data['riskyTrendInfoList'] : null;
        $this->container['riskyDistributionInfoList'] = isset($data['riskyDistributionInfoList']) ? $data['riskyDistributionInfoList'] : null;
        $this->container['topRiskyHostInfoList'] = isset($data['topRiskyHostInfoList']) ? $data['topRiskyHostInfoList'] : null;
        $this->container['topAccountCrackInfoList'] = isset($data['topAccountCrackInfoList']) ? $data['topAccountCrackInfoList'] : null;
        $this->container['hostInfoList'] = isset($data['hostInfoList']) ? $data['hostInfoList'] : null;
        $this->container['overallSituationInfoList'] = isset($data['overallSituationInfoList']) ? $data['overallSituationInfoList'] : null;
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
    * Gets dashboardInfoList
    *  **参数解释**： 安全总览内容列表 **取值范围**： 0-100个DashboardInfo对象
    *
    * @return object[]|null
    */
    public function getDashboardInfoList()
    {
        return $this->container['dashboardInfoList'];
    }

    /**
    * Sets dashboardInfoList
    *
    * @param object[]|null $dashboardInfoList **参数解释**： 安全总览内容列表 **取值范围**： 0-100个DashboardInfo对象
    *
    * @return $this
    */
    public function setDashboardInfoList($dashboardInfoList)
    {
        $this->container['dashboardInfoList'] = $dashboardInfoList;
        return $this;
    }

    /**
    * Gets riskyTrendInfoList
    *  **参数解释**： 风险趋势内容列表 **取值范围**： 0-100个RiskyTrendInfo对象
    *
    * @return object[]|null
    */
    public function getRiskyTrendInfoList()
    {
        return $this->container['riskyTrendInfoList'];
    }

    /**
    * Sets riskyTrendInfoList
    *
    * @param object[]|null $riskyTrendInfoList **参数解释**： 风险趋势内容列表 **取值范围**： 0-100个RiskyTrendInfo对象
    *
    * @return $this
    */
    public function setRiskyTrendInfoList($riskyTrendInfoList)
    {
        $this->container['riskyTrendInfoList'] = $riskyTrendInfoList;
        return $this;
    }

    /**
    * Gets riskyDistributionInfoList
    *  **参数解释**： 风险分布内容列表 **取值范围**： 0-100个RiskyDistributionInfo对象
    *
    * @return object[]|null
    */
    public function getRiskyDistributionInfoList()
    {
        return $this->container['riskyDistributionInfoList'];
    }

    /**
    * Sets riskyDistributionInfoList
    *
    * @param object[]|null $riskyDistributionInfoList **参数解释**： 风险分布内容列表 **取值范围**： 0-100个RiskyDistributionInfo对象
    *
    * @return $this
    */
    public function setRiskyDistributionInfoList($riskyDistributionInfoList)
    {
        $this->container['riskyDistributionInfoList'] = $riskyDistributionInfoList;
        return $this;
    }

    /**
    * Gets topRiskyHostInfoList
    *  **参数解释**： top5风险主机列表 **取值范围**： 0-5个TopRiskyHostInfo对象
    *
    * @return object[]|null
    */
    public function getTopRiskyHostInfoList()
    {
        return $this->container['topRiskyHostInfoList'];
    }

    /**
    * Sets topRiskyHostInfoList
    *
    * @param object[]|null $topRiskyHostInfoList **参数解释**： top5风险主机列表 **取值范围**： 0-5个TopRiskyHostInfo对象
    *
    * @return $this
    */
    public function setTopRiskyHostInfoList($topRiskyHostInfoList)
    {
        $this->container['topRiskyHostInfoList'] = $topRiskyHostInfoList;
        return $this;
    }

    /**
    * Gets topAccountCrackInfoList
    *  **参数解释**： top5暴力破解来源列表 **取值范围**： 0-5个TopAccountCrackInfo对象
    *
    * @return object[]|null
    */
    public function getTopAccountCrackInfoList()
    {
        return $this->container['topAccountCrackInfoList'];
    }

    /**
    * Sets topAccountCrackInfoList
    *
    * @param object[]|null $topAccountCrackInfoList **参数解释**： top5暴力破解来源列表 **取值范围**： 0-5个TopAccountCrackInfo对象
    *
    * @return $this
    */
    public function setTopAccountCrackInfoList($topAccountCrackInfoList)
    {
        $this->container['topAccountCrackInfoList'] = $topAccountCrackInfoList;
        return $this;
    }

    /**
    * Gets hostInfoList
    *  **参数解释**： 服务器列表 **取值范围**： 0-200个HostInfo对象
    *
    * @return object[]|null
    */
    public function getHostInfoList()
    {
        return $this->container['hostInfoList'];
    }

    /**
    * Sets hostInfoList
    *
    * @param object[]|null $hostInfoList **参数解释**： 服务器列表 **取值范围**： 0-200个HostInfo对象
    *
    * @return $this
    */
    public function setHostInfoList($hostInfoList)
    {
        $this->container['hostInfoList'] = $hostInfoList;
        return $this;
    }

    /**
    * Gets overallSituationInfoList
    *  **参数解释**： 总体情况列表 **取值范围**： 0-100个OverallSituationInfo对象
    *
    * @return object[]|null
    */
    public function getOverallSituationInfoList()
    {
        return $this->container['overallSituationInfoList'];
    }

    /**
    * Sets overallSituationInfoList
    *
    * @param object[]|null $overallSituationInfoList **参数解释**： 总体情况列表 **取值范围**： 0-100个OverallSituationInfo对象
    *
    * @return $this
    */
    public function setOverallSituationInfoList($overallSituationInfoList)
    {
        $this->container['overallSituationInfoList'] = $overallSituationInfoList;
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

