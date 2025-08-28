<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulReportDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulReportDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sumary  sumary
    * hosts  主机列表
    * vulnerabilities  漏洞列表
    * reportCreateTime  **参数解释**： 报告生成时间 **取值范围**： 最小值0，最大值9223372036854775807
    * vulnerabilityTotalCount  **参数解释**： 漏洞总数量 **取值范围**： 最小值0，最大值10000000
    * hostTotalCount  **参数解释**： 主机总数量 **取值范围**： 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sumary' => '\HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoSumary',
            'hosts' => '\HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoHosts[]',
            'vulnerabilities' => '\HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoVulnerabilities[]',
            'reportCreateTime' => 'int',
            'vulnerabilityTotalCount' => 'int',
            'hostTotalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sumary  sumary
    * hosts  主机列表
    * vulnerabilities  漏洞列表
    * reportCreateTime  **参数解释**： 报告生成时间 **取值范围**： 最小值0，最大值9223372036854775807
    * vulnerabilityTotalCount  **参数解释**： 漏洞总数量 **取值范围**： 最小值0，最大值10000000
    * hostTotalCount  **参数解释**： 主机总数量 **取值范围**： 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sumary' => null,
        'hosts' => null,
        'vulnerabilities' => null,
        'reportCreateTime' => 'int64',
        'vulnerabilityTotalCount' => 'int32',
        'hostTotalCount' => 'int32'
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
    * sumary  sumary
    * hosts  主机列表
    * vulnerabilities  漏洞列表
    * reportCreateTime  **参数解释**： 报告生成时间 **取值范围**： 最小值0，最大值9223372036854775807
    * vulnerabilityTotalCount  **参数解释**： 漏洞总数量 **取值范围**： 最小值0，最大值10000000
    * hostTotalCount  **参数解释**： 主机总数量 **取值范围**： 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sumary' => 'sumary',
            'hosts' => 'hosts',
            'vulnerabilities' => 'vulnerabilities',
            'reportCreateTime' => 'report_create_time',
            'vulnerabilityTotalCount' => 'vulnerability_total_count',
            'hostTotalCount' => 'host_total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sumary  sumary
    * hosts  主机列表
    * vulnerabilities  漏洞列表
    * reportCreateTime  **参数解释**： 报告生成时间 **取值范围**： 最小值0，最大值9223372036854775807
    * vulnerabilityTotalCount  **参数解释**： 漏洞总数量 **取值范围**： 最小值0，最大值10000000
    * hostTotalCount  **参数解释**： 主机总数量 **取值范围**： 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $setters = [
            'sumary' => 'setSumary',
            'hosts' => 'setHosts',
            'vulnerabilities' => 'setVulnerabilities',
            'reportCreateTime' => 'setReportCreateTime',
            'vulnerabilityTotalCount' => 'setVulnerabilityTotalCount',
            'hostTotalCount' => 'setHostTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sumary  sumary
    * hosts  主机列表
    * vulnerabilities  漏洞列表
    * reportCreateTime  **参数解释**： 报告生成时间 **取值范围**： 最小值0，最大值9223372036854775807
    * vulnerabilityTotalCount  **参数解释**： 漏洞总数量 **取值范围**： 最小值0，最大值10000000
    * hostTotalCount  **参数解释**： 主机总数量 **取值范围**： 最小值0，最大值20000
    *
    * @var string[]
    */
    protected static $getters = [
            'sumary' => 'getSumary',
            'hosts' => 'getHosts',
            'vulnerabilities' => 'getVulnerabilities',
            'reportCreateTime' => 'getReportCreateTime',
            'vulnerabilityTotalCount' => 'getVulnerabilityTotalCount',
            'hostTotalCount' => 'getHostTotalCount'
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
        $this->container['sumary'] = isset($data['sumary']) ? $data['sumary'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['vulnerabilities'] = isset($data['vulnerabilities']) ? $data['vulnerabilities'] : null;
        $this->container['reportCreateTime'] = isset($data['reportCreateTime']) ? $data['reportCreateTime'] : null;
        $this->container['vulnerabilityTotalCount'] = isset($data['vulnerabilityTotalCount']) ? $data['vulnerabilityTotalCount'] : null;
        $this->container['hostTotalCount'] = isset($data['hostTotalCount']) ? $data['hostTotalCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['reportCreateTime']) && ($this->container['reportCreateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'reportCreateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['reportCreateTime']) && ($this->container['reportCreateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'reportCreateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulnerabilityTotalCount']) && ($this->container['vulnerabilityTotalCount'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'vulnerabilityTotalCount', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['vulnerabilityTotalCount']) && ($this->container['vulnerabilityTotalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulnerabilityTotalCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostTotalCount']) && ($this->container['hostTotalCount'] > 20000)) {
                $invalidProperties[] = "invalid value for 'hostTotalCount', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['hostTotalCount']) && ($this->container['hostTotalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostTotalCount', must be bigger than or equal to 0.";
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
    * Gets sumary
    *  sumary
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoSumary|null
    */
    public function getSumary()
    {
        return $this->container['sumary'];
    }

    /**
    * Sets sumary
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoSumary|null $sumary sumary
    *
    * @return $this
    */
    public function setSumary($sumary)
    {
        $this->container['sumary'] = $sumary;
        return $this;
    }

    /**
    * Gets hosts
    *  主机列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoHosts[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoHosts[]|null $hosts 主机列表
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets vulnerabilities
    *  漏洞列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoVulnerabilities[]|null
    */
    public function getVulnerabilities()
    {
        return $this->container['vulnerabilities'];
    }

    /**
    * Sets vulnerabilities
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ShowVulReportDataResponseInfoVulnerabilities[]|null $vulnerabilities 漏洞列表
    *
    * @return $this
    */
    public function setVulnerabilities($vulnerabilities)
    {
        $this->container['vulnerabilities'] = $vulnerabilities;
        return $this;
    }

    /**
    * Gets reportCreateTime
    *  **参数解释**： 报告生成时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getReportCreateTime()
    {
        return $this->container['reportCreateTime'];
    }

    /**
    * Sets reportCreateTime
    *
    * @param int|null $reportCreateTime **参数解释**： 报告生成时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setReportCreateTime($reportCreateTime)
    {
        $this->container['reportCreateTime'] = $reportCreateTime;
        return $this;
    }

    /**
    * Gets vulnerabilityTotalCount
    *  **参数解释**： 漏洞总数量 **取值范围**： 最小值0，最大值10000000
    *
    * @return int|null
    */
    public function getVulnerabilityTotalCount()
    {
        return $this->container['vulnerabilityTotalCount'];
    }

    /**
    * Sets vulnerabilityTotalCount
    *
    * @param int|null $vulnerabilityTotalCount **参数解释**： 漏洞总数量 **取值范围**： 最小值0，最大值10000000
    *
    * @return $this
    */
    public function setVulnerabilityTotalCount($vulnerabilityTotalCount)
    {
        $this->container['vulnerabilityTotalCount'] = $vulnerabilityTotalCount;
        return $this;
    }

    /**
    * Gets hostTotalCount
    *  **参数解释**： 主机总数量 **取值范围**： 最小值0，最大值20000
    *
    * @return int|null
    */
    public function getHostTotalCount()
    {
        return $this->container['hostTotalCount'];
    }

    /**
    * Sets hostTotalCount
    *
    * @param int|null $hostTotalCount **参数解释**： 主机总数量 **取值范围**： 最小值0，最大值20000
    *
    * @return $this
    */
    public function setHostTotalCount($hostTotalCount)
    {
        $this->container['hostTotalCount'] = $hostTotalCount;
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

