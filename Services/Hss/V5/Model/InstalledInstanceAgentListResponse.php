<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstalledInstanceAgentListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstalledInstanceAgentListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  **参数解释**: 安装列表总数 **取值范围**: 最小值0，最大值2147483647
    * accessErrorNum  **参数解释**: 安装列表接入异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * runErrorNum  **参数解释**: 安装列表运行异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * upgradeNum  **参数解释**: 安装列表待升级Agent数 **取值范围**: 最小值0，最大值2147483647
    * upgradeFailedNum  **参数解释**: 安装列表升级失败实例数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群安装agent列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载安装agent列表 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'accessErrorNum' => 'int',
            'runErrorNum' => 'int',
            'upgradeNum' => 'int',
            'upgradeFailedNum' => 'int',
            'clusterList' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterInfo[]',
            'workloadList' => '\HuaweiCloud\SDK\Hss\V5\Model\WorkLoadInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  **参数解释**: 安装列表总数 **取值范围**: 最小值0，最大值2147483647
    * accessErrorNum  **参数解释**: 安装列表接入异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * runErrorNum  **参数解释**: 安装列表运行异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * upgradeNum  **参数解释**: 安装列表待升级Agent数 **取值范围**: 最小值0，最大值2147483647
    * upgradeFailedNum  **参数解释**: 安装列表升级失败实例数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群安装agent列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载安装agent列表 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'accessErrorNum' => 'int32',
        'runErrorNum' => 'int32',
        'upgradeNum' => 'int32',
        'upgradeFailedNum' => 'int32',
        'clusterList' => null,
        'workloadList' => null
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
    * totalNum  **参数解释**: 安装列表总数 **取值范围**: 最小值0，最大值2147483647
    * accessErrorNum  **参数解释**: 安装列表接入异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * runErrorNum  **参数解释**: 安装列表运行异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * upgradeNum  **参数解释**: 安装列表待升级Agent数 **取值范围**: 最小值0，最大值2147483647
    * upgradeFailedNum  **参数解释**: 安装列表升级失败实例数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群安装agent列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载安装agent列表 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'accessErrorNum' => 'access_error_num',
            'runErrorNum' => 'run_error_num',
            'upgradeNum' => 'upgrade_num',
            'upgradeFailedNum' => 'upgrade_failed_num',
            'clusterList' => 'cluster_list',
            'workloadList' => 'workload_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  **参数解释**: 安装列表总数 **取值范围**: 最小值0，最大值2147483647
    * accessErrorNum  **参数解释**: 安装列表接入异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * runErrorNum  **参数解释**: 安装列表运行异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * upgradeNum  **参数解释**: 安装列表待升级Agent数 **取值范围**: 最小值0，最大值2147483647
    * upgradeFailedNum  **参数解释**: 安装列表升级失败实例数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群安装agent列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载安装agent列表 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'accessErrorNum' => 'setAccessErrorNum',
            'runErrorNum' => 'setRunErrorNum',
            'upgradeNum' => 'setUpgradeNum',
            'upgradeFailedNum' => 'setUpgradeFailedNum',
            'clusterList' => 'setClusterList',
            'workloadList' => 'setWorkloadList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  **参数解释**: 安装列表总数 **取值范围**: 最小值0，最大值2147483647
    * accessErrorNum  **参数解释**: 安装列表接入异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * runErrorNum  **参数解释**: 安装列表运行异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    * upgradeNum  **参数解释**: 安装列表待升级Agent数 **取值范围**: 最小值0，最大值2147483647
    * upgradeFailedNum  **参数解释**: 安装列表升级失败实例数 **取值范围**: 最小值0，最大值2147483647
    * clusterList  **参数解释**: 集群安装agent列表 **取值范围**: 最小值0，最大值65535
    * workloadList  **参数解释**: 工作负载安装agent列表 **取值范围**: 最小值0，最大值65535
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'accessErrorNum' => 'getAccessErrorNum',
            'runErrorNum' => 'getRunErrorNum',
            'upgradeNum' => 'getUpgradeNum',
            'upgradeFailedNum' => 'getUpgradeFailedNum',
            'clusterList' => 'getClusterList',
            'workloadList' => 'getWorkloadList'
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
        $this->container['accessErrorNum'] = isset($data['accessErrorNum']) ? $data['accessErrorNum'] : null;
        $this->container['runErrorNum'] = isset($data['runErrorNum']) ? $data['runErrorNum'] : null;
        $this->container['upgradeNum'] = isset($data['upgradeNum']) ? $data['upgradeNum'] : null;
        $this->container['upgradeFailedNum'] = isset($data['upgradeFailedNum']) ? $data['upgradeFailedNum'] : null;
        $this->container['clusterList'] = isset($data['clusterList']) ? $data['clusterList'] : null;
        $this->container['workloadList'] = isset($data['workloadList']) ? $data['workloadList'] : null;
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
            if (!is_null($this->container['accessErrorNum']) && ($this->container['accessErrorNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessErrorNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessErrorNum']) && ($this->container['accessErrorNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'accessErrorNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runErrorNum']) && ($this->container['runErrorNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'runErrorNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['runErrorNum']) && ($this->container['runErrorNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'runErrorNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['upgradeNum']) && ($this->container['upgradeNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'upgradeNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['upgradeNum']) && ($this->container['upgradeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'upgradeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['upgradeFailedNum']) && ($this->container['upgradeFailedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'upgradeFailedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['upgradeFailedNum']) && ($this->container['upgradeFailedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'upgradeFailedNum', must be bigger than or equal to 0.";
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
    *  **参数解释**: 安装列表总数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $totalNum **参数解释**: 安装列表总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets accessErrorNum
    *  **参数解释**: 安装列表接入异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAccessErrorNum()
    {
        return $this->container['accessErrorNum'];
    }

    /**
    * Sets accessErrorNum
    *
    * @param int|null $accessErrorNum **参数解释**: 安装列表接入异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAccessErrorNum($accessErrorNum)
    {
        $this->container['accessErrorNum'] = $accessErrorNum;
        return $this;
    }

    /**
    * Gets runErrorNum
    *  **参数解释**: 安装列表运行异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRunErrorNum()
    {
        return $this->container['runErrorNum'];
    }

    /**
    * Sets runErrorNum
    *
    * @param int|null $runErrorNum **参数解释**: 安装列表运行异常工作负载/集群个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRunErrorNum($runErrorNum)
    {
        $this->container['runErrorNum'] = $runErrorNum;
        return $this;
    }

    /**
    * Gets upgradeNum
    *  **参数解释**: 安装列表待升级Agent数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUpgradeNum()
    {
        return $this->container['upgradeNum'];
    }

    /**
    * Sets upgradeNum
    *
    * @param int|null $upgradeNum **参数解释**: 安装列表待升级Agent数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUpgradeNum($upgradeNum)
    {
        $this->container['upgradeNum'] = $upgradeNum;
        return $this;
    }

    /**
    * Gets upgradeFailedNum
    *  **参数解释**: 安装列表升级失败实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUpgradeFailedNum()
    {
        return $this->container['upgradeFailedNum'];
    }

    /**
    * Sets upgradeFailedNum
    *
    * @param int|null $upgradeFailedNum **参数解释**: 安装列表升级失败实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUpgradeFailedNum($upgradeFailedNum)
    {
        $this->container['upgradeFailedNum'] = $upgradeFailedNum;
        return $this;
    }

    /**
    * Gets clusterList
    *  **参数解释**: 集群安装agent列表 **取值范围**: 最小值0，最大值65535
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
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfo[]|null $clusterList **参数解释**: 集群安装agent列表 **取值范围**: 最小值0，最大值65535
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
    *  **参数解释**: 工作负载安装agent列表 **取值范围**: 最小值0，最大值65535
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
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WorkLoadInfo[]|null $workloadList **参数解释**: 工作负载安装agent列表 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setWorkloadList($workloadList)
    {
        $this->container['workloadList'] = $workloadList;
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

