<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceProtectionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceProtectionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  **参数解释**: 防护列表总数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群防护列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载防护列表 **取值范围**: 最小值0，最大值65535
    * instanceList  **参数解释**: 实例防护列表 **取值范围**: 最小值0，最大值65535
    * riskNum  **参数解释**: 有风险实例数 **取值范围**: 最小值0，最大值2147483647
    * abnormalNum  **参数解释**: 防护异常数 **取值范围**: 最小值0，最大值2147483647
    * unprotectNum  **参数解释**: 未防护实例数 **取值范围**: 最小值0，最大值2147483647
    * instanceNum  **参数解释**: 全部实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'clusterList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterInfo[]',
            'workloadList' => '\HuaweiCloud\SDK\Hss\V5\Model\WorkLoadInfo[]',
            'instanceList' => '\HuaweiCloud\SDK\Hss\V5\Model\ServerlessInstanceInfo[]',
            'riskNum' => 'int',
            'abnormalNum' => 'int',
            'unprotectNum' => 'int',
            'instanceNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  **参数解释**: 防护列表总数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群防护列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载防护列表 **取值范围**: 最小值0，最大值65535
    * instanceList  **参数解释**: 实例防护列表 **取值范围**: 最小值0，最大值65535
    * riskNum  **参数解释**: 有风险实例数 **取值范围**: 最小值0，最大值2147483647
    * abnormalNum  **参数解释**: 防护异常数 **取值范围**: 最小值0，最大值2147483647
    * unprotectNum  **参数解释**: 未防护实例数 **取值范围**: 最小值0，最大值2147483647
    * instanceNum  **参数解释**: 全部实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'clusterList' => null,
        'workloadList' => null,
        'instanceList' => null,
        'riskNum' => 'int32',
        'abnormalNum' => 'int32',
        'unprotectNum' => 'int32',
        'instanceNum' => 'int32'
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
    * totalNum  **参数解释**: 防护列表总数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群防护列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载防护列表 **取值范围**: 最小值0，最大值65535
    * instanceList  **参数解释**: 实例防护列表 **取值范围**: 最小值0，最大值65535
    * riskNum  **参数解释**: 有风险实例数 **取值范围**: 最小值0，最大值2147483647
    * abnormalNum  **参数解释**: 防护异常数 **取值范围**: 最小值0，最大值2147483647
    * unprotectNum  **参数解释**: 未防护实例数 **取值范围**: 最小值0，最大值2147483647
    * instanceNum  **参数解释**: 全部实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'clusterList' => 'cluster_list',
            'workloadList' => 'workload_list',
            'instanceList' => 'instance_list',
            'riskNum' => 'risk_num',
            'abnormalNum' => 'abnormal_num',
            'unprotectNum' => 'unprotect_num',
            'instanceNum' => 'instance_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  **参数解释**: 防护列表总数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群防护列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载防护列表 **取值范围**: 最小值0，最大值65535
    * instanceList  **参数解释**: 实例防护列表 **取值范围**: 最小值0，最大值65535
    * riskNum  **参数解释**: 有风险实例数 **取值范围**: 最小值0，最大值2147483647
    * abnormalNum  **参数解释**: 防护异常数 **取值范围**: 最小值0，最大值2147483647
    * unprotectNum  **参数解释**: 未防护实例数 **取值范围**: 最小值0，最大值2147483647
    * instanceNum  **参数解释**: 全部实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'clusterList' => 'setClusterList',
            'workloadList' => 'setWorkloadList',
            'instanceList' => 'setInstanceList',
            'riskNum' => 'setRiskNum',
            'abnormalNum' => 'setAbnormalNum',
            'unprotectNum' => 'setUnprotectNum',
            'instanceNum' => 'setInstanceNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  **参数解释**: 防护列表总数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群防护列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载防护列表 **取值范围**: 最小值0，最大值65535
    * instanceList  **参数解释**: 实例防护列表 **取值范围**: 最小值0，最大值65535
    * riskNum  **参数解释**: 有风险实例数 **取值范围**: 最小值0，最大值2147483647
    * abnormalNum  **参数解释**: 防护异常数 **取值范围**: 最小值0，最大值2147483647
    * unprotectNum  **参数解释**: 未防护实例数 **取值范围**: 最小值0，最大值2147483647
    * instanceNum  **参数解释**: 全部实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'clusterList' => 'getClusterList',
            'workloadList' => 'getWorkloadList',
            'instanceList' => 'getInstanceList',
            'riskNum' => 'getRiskNum',
            'abnormalNum' => 'getAbnormalNum',
            'unprotectNum' => 'getUnprotectNum',
            'instanceNum' => 'getInstanceNum'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['clusterList'] = isset($data['clusterList']) ? $data['clusterList'] : null;
        $this->container['workloadList'] = isset($data['workloadList']) ? $data['workloadList'] : null;
        $this->container['instanceList'] = isset($data['instanceList']) ? $data['instanceList'] : null;
        $this->container['riskNum'] = isset($data['riskNum']) ? $data['riskNum'] : null;
        $this->container['abnormalNum'] = isset($data['abnormalNum']) ? $data['abnormalNum'] : null;
        $this->container['unprotectNum'] = isset($data['unprotectNum']) ? $data['unprotectNum'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskNum']) && ($this->container['riskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['abnormalNum']) && ($this->container['abnormalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'abnormalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['abnormalNum']) && ($this->container['abnormalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'abnormalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unprotectNum']) && ($this->container['unprotectNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unprotectNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unprotectNum']) && ($this->container['unprotectNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unprotectNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceNum']) && ($this->container['instanceNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceNum']) && ($this->container['instanceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'instanceNum', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  **参数解释**: 防护列表总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum **参数解释**: 防护列表总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets clusterList
    *  **参数解释**: 集群防护列表 **取值范围**: 最小值0，最大值65535
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfo[]|null
    */
    public function getClusterList()
    {
        return $this->container['clusterList'];
    }

    /**
    * Sets clusterList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfo[]|null $clusterList **参数解释**: 集群防护列表 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setClusterList($clusterList)
    {
        $this->container['clusterList'] = $clusterList;
        return $this;
    }

    /**
    * Gets workloadList
    *  **参数解释**: 工作负载防护列表 **取值范围**: 最小值0，最大值65535
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WorkLoadInfo[]|null
    */
    public function getWorkloadList()
    {
        return $this->container['workloadList'];
    }

    /**
    * Sets workloadList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WorkLoadInfo[]|null $workloadList **参数解释**: 工作负载防护列表 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setWorkloadList($workloadList)
    {
        $this->container['workloadList'] = $workloadList;
        return $this;
    }

    /**
    * Gets instanceList
    *  **参数解释**: 实例防护列表 **取值范围**: 最小值0，最大值65535
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ServerlessInstanceInfo[]|null
    */
    public function getInstanceList()
    {
        return $this->container['instanceList'];
    }

    /**
    * Sets instanceList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ServerlessInstanceInfo[]|null $instanceList **参数解释**: 实例防护列表 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setInstanceList($instanceList)
    {
        $this->container['instanceList'] = $instanceList;
        return $this;
    }

    /**
    * Gets riskNum
    *  **参数解释**: 有风险实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRiskNum()
    {
        return $this->container['riskNum'];
    }

    /**
    * Sets riskNum
    *
    * @param int|null $riskNum **参数解释**: 有风险实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRiskNum($riskNum)
    {
        $this->container['riskNum'] = $riskNum;
        return $this;
    }

    /**
    * Gets abnormalNum
    *  **参数解释**: 防护异常数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAbnormalNum()
    {
        return $this->container['abnormalNum'];
    }

    /**
    * Sets abnormalNum
    *
    * @param int|null $abnormalNum **参数解释**: 防护异常数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAbnormalNum($abnormalNum)
    {
        $this->container['abnormalNum'] = $abnormalNum;
        return $this;
    }

    /**
    * Gets unprotectNum
    *  **参数解释**: 未防护实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnprotectNum()
    {
        return $this->container['unprotectNum'];
    }

    /**
    * Sets unprotectNum
    *
    * @param int|null $unprotectNum **参数解释**: 未防护实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnprotectNum($unprotectNum)
    {
        $this->container['unprotectNum'] = $unprotectNum;
        return $this;
    }

    /**
    * Gets instanceNum
    *  **参数解释**: 全部实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int|null $instanceNum **参数解释**: 全部实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
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

