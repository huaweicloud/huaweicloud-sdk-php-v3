<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAutoScalingPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAutoScalingPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  自动变配策略ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * status  自动变配开关状态。  取值：  - ON：已开启 - OFF：已关闭
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。
    * enlargeThreshold  扩容阈值（百分比数值），指CPU平均使用率。
    * maxFlavor  扩容规格上限。
    * reduceEnabled  自动回缩开关状态。  取值：  - true：已开启 - false：已关闭
    * minFlavor  缩容规格下限。
    * silenceStartAt  静默期开始时间（上一次变更结束时间）。  格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * scalingStrategy  scalingStrategy
    * maxReadOnlyCount  只读节点数量上限。
    * minReadOnlyCount  只读节点数量下限。
    * readOnlyWeight  只读节点读写分离权重。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'status' => 'string',
            'monitorCycle' => 'int',
            'silenceCycle' => 'int',
            'enlargeThreshold' => 'int',
            'maxFlavor' => 'string',
            'reduceEnabled' => 'bool',
            'minFlavor' => 'string',
            'silenceStartAt' => 'string',
            'scalingStrategy' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ScalingStrategyInfo',
            'maxReadOnlyCount' => 'int',
            'minReadOnlyCount' => 'int',
            'readOnlyWeight' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  自动变配策略ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * status  自动变配开关状态。  取值：  - ON：已开启 - OFF：已关闭
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。
    * enlargeThreshold  扩容阈值（百分比数值），指CPU平均使用率。
    * maxFlavor  扩容规格上限。
    * reduceEnabled  自动回缩开关状态。  取值：  - true：已开启 - false：已关闭
    * minFlavor  缩容规格下限。
    * silenceStartAt  静默期开始时间（上一次变更结束时间）。  格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * scalingStrategy  scalingStrategy
    * maxReadOnlyCount  只读节点数量上限。
    * minReadOnlyCount  只读节点数量下限。
    * readOnlyWeight  只读节点读写分离权重。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceId' => null,
        'instanceName' => null,
        'status' => null,
        'monitorCycle' => null,
        'silenceCycle' => null,
        'enlargeThreshold' => null,
        'maxFlavor' => null,
        'reduceEnabled' => null,
        'minFlavor' => null,
        'silenceStartAt' => null,
        'scalingStrategy' => null,
        'maxReadOnlyCount' => null,
        'minReadOnlyCount' => null,
        'readOnlyWeight' => null
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
    * id  自动变配策略ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * status  自动变配开关状态。  取值：  - ON：已开启 - OFF：已关闭
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。
    * enlargeThreshold  扩容阈值（百分比数值），指CPU平均使用率。
    * maxFlavor  扩容规格上限。
    * reduceEnabled  自动回缩开关状态。  取值：  - true：已开启 - false：已关闭
    * minFlavor  缩容规格下限。
    * silenceStartAt  静默期开始时间（上一次变更结束时间）。  格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * scalingStrategy  scalingStrategy
    * maxReadOnlyCount  只读节点数量上限。
    * minReadOnlyCount  只读节点数量下限。
    * readOnlyWeight  只读节点读写分离权重。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'status' => 'status',
            'monitorCycle' => 'monitor_cycle',
            'silenceCycle' => 'silence_cycle',
            'enlargeThreshold' => 'enlarge_threshold',
            'maxFlavor' => 'max_flavor',
            'reduceEnabled' => 'reduce_enabled',
            'minFlavor' => 'min_flavor',
            'silenceStartAt' => 'silence_start_at',
            'scalingStrategy' => 'scaling_strategy',
            'maxReadOnlyCount' => 'max_read_only_count',
            'minReadOnlyCount' => 'min_read_only_count',
            'readOnlyWeight' => 'read_only_weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  自动变配策略ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * status  自动变配开关状态。  取值：  - ON：已开启 - OFF：已关闭
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。
    * enlargeThreshold  扩容阈值（百分比数值），指CPU平均使用率。
    * maxFlavor  扩容规格上限。
    * reduceEnabled  自动回缩开关状态。  取值：  - true：已开启 - false：已关闭
    * minFlavor  缩容规格下限。
    * silenceStartAt  静默期开始时间（上一次变更结束时间）。  格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * scalingStrategy  scalingStrategy
    * maxReadOnlyCount  只读节点数量上限。
    * minReadOnlyCount  只读节点数量下限。
    * readOnlyWeight  只读节点读写分离权重。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'status' => 'setStatus',
            'monitorCycle' => 'setMonitorCycle',
            'silenceCycle' => 'setSilenceCycle',
            'enlargeThreshold' => 'setEnlargeThreshold',
            'maxFlavor' => 'setMaxFlavor',
            'reduceEnabled' => 'setReduceEnabled',
            'minFlavor' => 'setMinFlavor',
            'silenceStartAt' => 'setSilenceStartAt',
            'scalingStrategy' => 'setScalingStrategy',
            'maxReadOnlyCount' => 'setMaxReadOnlyCount',
            'minReadOnlyCount' => 'setMinReadOnlyCount',
            'readOnlyWeight' => 'setReadOnlyWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  自动变配策略ID。
    * instanceId  实例ID。
    * instanceName  实例名称。
    * status  自动变配开关状态。  取值：  - ON：已开启 - OFF：已关闭
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。
    * enlargeThreshold  扩容阈值（百分比数值），指CPU平均使用率。
    * maxFlavor  扩容规格上限。
    * reduceEnabled  自动回缩开关状态。  取值：  - true：已开启 - false：已关闭
    * minFlavor  缩容规格下限。
    * silenceStartAt  静默期开始时间（上一次变更结束时间）。  格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * scalingStrategy  scalingStrategy
    * maxReadOnlyCount  只读节点数量上限。
    * minReadOnlyCount  只读节点数量下限。
    * readOnlyWeight  只读节点读写分离权重。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'status' => 'getStatus',
            'monitorCycle' => 'getMonitorCycle',
            'silenceCycle' => 'getSilenceCycle',
            'enlargeThreshold' => 'getEnlargeThreshold',
            'maxFlavor' => 'getMaxFlavor',
            'reduceEnabled' => 'getReduceEnabled',
            'minFlavor' => 'getMinFlavor',
            'silenceStartAt' => 'getSilenceStartAt',
            'scalingStrategy' => 'getScalingStrategy',
            'maxReadOnlyCount' => 'getMaxReadOnlyCount',
            'minReadOnlyCount' => 'getMinReadOnlyCount',
            'readOnlyWeight' => 'getReadOnlyWeight'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['monitorCycle'] = isset($data['monitorCycle']) ? $data['monitorCycle'] : null;
        $this->container['silenceCycle'] = isset($data['silenceCycle']) ? $data['silenceCycle'] : null;
        $this->container['enlargeThreshold'] = isset($data['enlargeThreshold']) ? $data['enlargeThreshold'] : null;
        $this->container['maxFlavor'] = isset($data['maxFlavor']) ? $data['maxFlavor'] : null;
        $this->container['reduceEnabled'] = isset($data['reduceEnabled']) ? $data['reduceEnabled'] : null;
        $this->container['minFlavor'] = isset($data['minFlavor']) ? $data['minFlavor'] : null;
        $this->container['silenceStartAt'] = isset($data['silenceStartAt']) ? $data['silenceStartAt'] : null;
        $this->container['scalingStrategy'] = isset($data['scalingStrategy']) ? $data['scalingStrategy'] : null;
        $this->container['maxReadOnlyCount'] = isset($data['maxReadOnlyCount']) ? $data['maxReadOnlyCount'] : null;
        $this->container['minReadOnlyCount'] = isset($data['minReadOnlyCount']) ? $data['minReadOnlyCount'] : null;
        $this->container['readOnlyWeight'] = isset($data['readOnlyWeight']) ? $data['readOnlyWeight'] : null;
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
    * Gets id
    *  自动变配策略ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 自动变配策略ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets status
    *  自动变配开关状态。  取值：  - ON：已开启 - OFF：已关闭
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 自动变配开关状态。  取值：  - ON：已开启 - OFF：已关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets monitorCycle
    *  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。
    *
    * @return int|null
    */
    public function getMonitorCycle()
    {
        return $this->container['monitorCycle'];
    }

    /**
    * Sets monitorCycle
    *
    * @param int|null $monitorCycle 监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。
    *
    * @return $this
    */
    public function setMonitorCycle($monitorCycle)
    {
        $this->container['monitorCycle'] = $monitorCycle;
        return $this;
    }

    /**
    * Gets silenceCycle
    *  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。
    *
    * @return int|null
    */
    public function getSilenceCycle()
    {
        return $this->container['silenceCycle'];
    }

    /**
    * Sets silenceCycle
    *
    * @param int|null $silenceCycle 静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。
    *
    * @return $this
    */
    public function setSilenceCycle($silenceCycle)
    {
        $this->container['silenceCycle'] = $silenceCycle;
        return $this;
    }

    /**
    * Gets enlargeThreshold
    *  扩容阈值（百分比数值），指CPU平均使用率。
    *
    * @return int|null
    */
    public function getEnlargeThreshold()
    {
        return $this->container['enlargeThreshold'];
    }

    /**
    * Sets enlargeThreshold
    *
    * @param int|null $enlargeThreshold 扩容阈值（百分比数值），指CPU平均使用率。
    *
    * @return $this
    */
    public function setEnlargeThreshold($enlargeThreshold)
    {
        $this->container['enlargeThreshold'] = $enlargeThreshold;
        return $this;
    }

    /**
    * Gets maxFlavor
    *  扩容规格上限。
    *
    * @return string|null
    */
    public function getMaxFlavor()
    {
        return $this->container['maxFlavor'];
    }

    /**
    * Sets maxFlavor
    *
    * @param string|null $maxFlavor 扩容规格上限。
    *
    * @return $this
    */
    public function setMaxFlavor($maxFlavor)
    {
        $this->container['maxFlavor'] = $maxFlavor;
        return $this;
    }

    /**
    * Gets reduceEnabled
    *  自动回缩开关状态。  取值：  - true：已开启 - false：已关闭
    *
    * @return bool|null
    */
    public function getReduceEnabled()
    {
        return $this->container['reduceEnabled'];
    }

    /**
    * Sets reduceEnabled
    *
    * @param bool|null $reduceEnabled 自动回缩开关状态。  取值：  - true：已开启 - false：已关闭
    *
    * @return $this
    */
    public function setReduceEnabled($reduceEnabled)
    {
        $this->container['reduceEnabled'] = $reduceEnabled;
        return $this;
    }

    /**
    * Gets minFlavor
    *  缩容规格下限。
    *
    * @return string|null
    */
    public function getMinFlavor()
    {
        return $this->container['minFlavor'];
    }

    /**
    * Sets minFlavor
    *
    * @param string|null $minFlavor 缩容规格下限。
    *
    * @return $this
    */
    public function setMinFlavor($minFlavor)
    {
        $this->container['minFlavor'] = $minFlavor;
        return $this;
    }

    /**
    * Gets silenceStartAt
    *  静默期开始时间（上一次变更结束时间）。  格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string|null
    */
    public function getSilenceStartAt()
    {
        return $this->container['silenceStartAt'];
    }

    /**
    * Sets silenceStartAt
    *
    * @param string|null $silenceStartAt 静默期开始时间（上一次变更结束时间）。  格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setSilenceStartAt($silenceStartAt)
    {
        $this->container['silenceStartAt'] = $silenceStartAt;
        return $this;
    }

    /**
    * Gets scalingStrategy
    *  scalingStrategy
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ScalingStrategyInfo|null
    */
    public function getScalingStrategy()
    {
        return $this->container['scalingStrategy'];
    }

    /**
    * Sets scalingStrategy
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ScalingStrategyInfo|null $scalingStrategy scalingStrategy
    *
    * @return $this
    */
    public function setScalingStrategy($scalingStrategy)
    {
        $this->container['scalingStrategy'] = $scalingStrategy;
        return $this;
    }

    /**
    * Gets maxReadOnlyCount
    *  只读节点数量上限。
    *
    * @return int|null
    */
    public function getMaxReadOnlyCount()
    {
        return $this->container['maxReadOnlyCount'];
    }

    /**
    * Sets maxReadOnlyCount
    *
    * @param int|null $maxReadOnlyCount 只读节点数量上限。
    *
    * @return $this
    */
    public function setMaxReadOnlyCount($maxReadOnlyCount)
    {
        $this->container['maxReadOnlyCount'] = $maxReadOnlyCount;
        return $this;
    }

    /**
    * Gets minReadOnlyCount
    *  只读节点数量下限。
    *
    * @return int|null
    */
    public function getMinReadOnlyCount()
    {
        return $this->container['minReadOnlyCount'];
    }

    /**
    * Sets minReadOnlyCount
    *
    * @param int|null $minReadOnlyCount 只读节点数量下限。
    *
    * @return $this
    */
    public function setMinReadOnlyCount($minReadOnlyCount)
    {
        $this->container['minReadOnlyCount'] = $minReadOnlyCount;
        return $this;
    }

    /**
    * Gets readOnlyWeight
    *  只读节点读写分离权重。
    *
    * @return int|null
    */
    public function getReadOnlyWeight()
    {
        return $this->container['readOnlyWeight'];
    }

    /**
    * Sets readOnlyWeight
    *
    * @param int|null $readOnlyWeight 只读节点读写分离权重。
    *
    * @return $this
    */
    public function setReadOnlyWeight($readOnlyWeight)
    {
        $this->container['readOnlyWeight'] = $readOnlyWeight;
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

