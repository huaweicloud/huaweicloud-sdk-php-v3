<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OverviewSubscriptionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OverviewSubscriptionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dashboardStatus  **参数解释**： 安全总览是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyTrendStatus  **参数解释**： 风险趋势是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyDistributionStatus  **参数解释**： 风险分布是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topRiskyHostStatus  **参数解释**： top5风险主机是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topAccountCrackStatus  **参数解释**： top5暴力破解来源是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * hostInfoStatus  **参数解释**： 服务器列表是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dashboardStatus' => 'bool',
            'riskyTrendStatus' => 'bool',
            'riskyDistributionStatus' => 'bool',
            'topRiskyHostStatus' => 'bool',
            'topAccountCrackStatus' => 'bool',
            'hostInfoStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dashboardStatus  **参数解释**： 安全总览是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyTrendStatus  **参数解释**： 风险趋势是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyDistributionStatus  **参数解释**： 风险分布是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topRiskyHostStatus  **参数解释**： top5风险主机是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topAccountCrackStatus  **参数解释**： top5暴力破解来源是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * hostInfoStatus  **参数解释**： 服务器列表是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dashboardStatus' => null,
        'riskyTrendStatus' => null,
        'riskyDistributionStatus' => null,
        'topRiskyHostStatus' => null,
        'topAccountCrackStatus' => null,
        'hostInfoStatus' => null
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
    * dashboardStatus  **参数解释**： 安全总览是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyTrendStatus  **参数解释**： 风险趋势是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyDistributionStatus  **参数解释**： 风险分布是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topRiskyHostStatus  **参数解释**： top5风险主机是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topAccountCrackStatus  **参数解释**： top5暴力破解来源是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * hostInfoStatus  **参数解释**： 服务器列表是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dashboardStatus' => 'dashboard_status',
            'riskyTrendStatus' => 'risky_trend_status',
            'riskyDistributionStatus' => 'risky_distribution_status',
            'topRiskyHostStatus' => 'top_risky_host_status',
            'topAccountCrackStatus' => 'top_account_crack_status',
            'hostInfoStatus' => 'host_info_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dashboardStatus  **参数解释**： 安全总览是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyTrendStatus  **参数解释**： 风险趋势是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyDistributionStatus  **参数解释**： 风险分布是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topRiskyHostStatus  **参数解释**： top5风险主机是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topAccountCrackStatus  **参数解释**： top5暴力破解来源是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * hostInfoStatus  **参数解释**： 服务器列表是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'dashboardStatus' => 'setDashboardStatus',
            'riskyTrendStatus' => 'setRiskyTrendStatus',
            'riskyDistributionStatus' => 'setRiskyDistributionStatus',
            'topRiskyHostStatus' => 'setTopRiskyHostStatus',
            'topAccountCrackStatus' => 'setTopAccountCrackStatus',
            'hostInfoStatus' => 'setHostInfoStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dashboardStatus  **参数解释**： 安全总览是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyTrendStatus  **参数解释**： 风险趋势是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * riskyDistributionStatus  **参数解释**： 风险分布是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topRiskyHostStatus  **参数解释**： top5风险主机是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * topAccountCrackStatus  **参数解释**： top5暴力破解来源是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    * hostInfoStatus  **参数解释**： 服务器列表是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'dashboardStatus' => 'getDashboardStatus',
            'riskyTrendStatus' => 'getRiskyTrendStatus',
            'riskyDistributionStatus' => 'getRiskyDistributionStatus',
            'topRiskyHostStatus' => 'getTopRiskyHostStatus',
            'topAccountCrackStatus' => 'getTopAccountCrackStatus',
            'hostInfoStatus' => 'getHostInfoStatus'
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
        $this->container['dashboardStatus'] = isset($data['dashboardStatus']) ? $data['dashboardStatus'] : null;
        $this->container['riskyTrendStatus'] = isset($data['riskyTrendStatus']) ? $data['riskyTrendStatus'] : null;
        $this->container['riskyDistributionStatus'] = isset($data['riskyDistributionStatus']) ? $data['riskyDistributionStatus'] : null;
        $this->container['topRiskyHostStatus'] = isset($data['topRiskyHostStatus']) ? $data['topRiskyHostStatus'] : null;
        $this->container['topAccountCrackStatus'] = isset($data['topAccountCrackStatus']) ? $data['topAccountCrackStatus'] : null;
        $this->container['hostInfoStatus'] = isset($data['hostInfoStatus']) ? $data['hostInfoStatus'] : null;
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
    * Gets dashboardStatus
    *  **参数解释**： 安全总览是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getDashboardStatus()
    {
        return $this->container['dashboardStatus'];
    }

    /**
    * Sets dashboardStatus
    *
    * @param bool|null $dashboardStatus **参数解释**： 安全总览是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDashboardStatus($dashboardStatus)
    {
        $this->container['dashboardStatus'] = $dashboardStatus;
        return $this;
    }

    /**
    * Gets riskyTrendStatus
    *  **参数解释**： 风险趋势是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getRiskyTrendStatus()
    {
        return $this->container['riskyTrendStatus'];
    }

    /**
    * Sets riskyTrendStatus
    *
    * @param bool|null $riskyTrendStatus **参数解释**： 风险趋势是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRiskyTrendStatus($riskyTrendStatus)
    {
        $this->container['riskyTrendStatus'] = $riskyTrendStatus;
        return $this;
    }

    /**
    * Gets riskyDistributionStatus
    *  **参数解释**： 风险分布是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getRiskyDistributionStatus()
    {
        return $this->container['riskyDistributionStatus'];
    }

    /**
    * Sets riskyDistributionStatus
    *
    * @param bool|null $riskyDistributionStatus **参数解释**： 风险分布是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRiskyDistributionStatus($riskyDistributionStatus)
    {
        $this->container['riskyDistributionStatus'] = $riskyDistributionStatus;
        return $this;
    }

    /**
    * Gets topRiskyHostStatus
    *  **参数解释**： top5风险主机是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getTopRiskyHostStatus()
    {
        return $this->container['topRiskyHostStatus'];
    }

    /**
    * Sets topRiskyHostStatus
    *
    * @param bool|null $topRiskyHostStatus **参数解释**： top5风险主机是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTopRiskyHostStatus($topRiskyHostStatus)
    {
        $this->container['topRiskyHostStatus'] = $topRiskyHostStatus;
        return $this;
    }

    /**
    * Gets topAccountCrackStatus
    *  **参数解释**： top5暴力破解来源是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getTopAccountCrackStatus()
    {
        return $this->container['topAccountCrackStatus'];
    }

    /**
    * Sets topAccountCrackStatus
    *
    * @param bool|null $topAccountCrackStatus **参数解释**： top5暴力破解来源是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setTopAccountCrackStatus($topAccountCrackStatus)
    {
        $this->container['topAccountCrackStatus'] = $topAccountCrackStatus;
        return $this;
    }

    /**
    * Gets hostInfoStatus
    *  **参数解释**： 服务器列表是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getHostInfoStatus()
    {
        return $this->container['hostInfoStatus'];
    }

    /**
    * Sets hostInfoStatus
    *
    * @param bool|null $hostInfoStatus **参数解释**： 服务器列表是否订阅 **约束限制**： 不涉及 **取值范围**： - true：是 - false：否  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostInfoStatus($hostInfoStatus)
    {
        $this->container['hostInfoStatus'] = $hostInfoStatus;
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

