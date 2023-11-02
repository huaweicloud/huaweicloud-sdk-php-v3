<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAutoScalingPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAutoScalingPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。  取值范围：300、600、900、1800。  status为ON时必填。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。  取值范围：300、600、1800、3600、7200、10800、86400、604800。  status为ON时必填。
    * enlargeThreshold  扩容阈值（百分比数值）。  取值范围：50-100。  status为ON时必填。
    * maxFlavor  扩容规格上限。开启扩缩规格时必填。
    * reduceEnabled  是否开启自动回缩。开启自动变配时必填。 - true：是。 - false：否。
    * maxReadOnlyCount  只读节点数量上限。开启增删只读节点时必填。
    * readOnlyWeight  只读节点读写分离权重。开启增删只读节点时必填。
    * scalingStrategy  scalingStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'monitorCycle' => 'int',
            'silenceCycle' => 'int',
            'enlargeThreshold' => 'int',
            'maxFlavor' => 'string',
            'reduceEnabled' => 'bool',
            'maxReadOnlyCount' => 'int',
            'readOnlyWeight' => 'int',
            'scalingStrategy' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ScalingStrategyReqInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。  取值范围：300、600、900、1800。  status为ON时必填。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。  取值范围：300、600、1800、3600、7200、10800、86400、604800。  status为ON时必填。
    * enlargeThreshold  扩容阈值（百分比数值）。  取值范围：50-100。  status为ON时必填。
    * maxFlavor  扩容规格上限。开启扩缩规格时必填。
    * reduceEnabled  是否开启自动回缩。开启自动变配时必填。 - true：是。 - false：否。
    * maxReadOnlyCount  只读节点数量上限。开启增删只读节点时必填。
    * readOnlyWeight  只读节点读写分离权重。开启增删只读节点时必填。
    * scalingStrategy  scalingStrategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'monitorCycle' => null,
        'silenceCycle' => null,
        'enlargeThreshold' => null,
        'maxFlavor' => null,
        'reduceEnabled' => null,
        'maxReadOnlyCount' => null,
        'readOnlyWeight' => null,
        'scalingStrategy' => null
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
    * status  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。  取值范围：300、600、900、1800。  status为ON时必填。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。  取值范围：300、600、1800、3600、7200、10800、86400、604800。  status为ON时必填。
    * enlargeThreshold  扩容阈值（百分比数值）。  取值范围：50-100。  status为ON时必填。
    * maxFlavor  扩容规格上限。开启扩缩规格时必填。
    * reduceEnabled  是否开启自动回缩。开启自动变配时必填。 - true：是。 - false：否。
    * maxReadOnlyCount  只读节点数量上限。开启增删只读节点时必填。
    * readOnlyWeight  只读节点读写分离权重。开启增删只读节点时必填。
    * scalingStrategy  scalingStrategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'monitorCycle' => 'monitor_cycle',
            'silenceCycle' => 'silence_cycle',
            'enlargeThreshold' => 'enlarge_threshold',
            'maxFlavor' => 'max_flavor',
            'reduceEnabled' => 'reduce_enabled',
            'maxReadOnlyCount' => 'max_read_only_count',
            'readOnlyWeight' => 'read_only_weight',
            'scalingStrategy' => 'scaling_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。  取值范围：300、600、900、1800。  status为ON时必填。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。  取值范围：300、600、1800、3600、7200、10800、86400、604800。  status为ON时必填。
    * enlargeThreshold  扩容阈值（百分比数值）。  取值范围：50-100。  status为ON时必填。
    * maxFlavor  扩容规格上限。开启扩缩规格时必填。
    * reduceEnabled  是否开启自动回缩。开启自动变配时必填。 - true：是。 - false：否。
    * maxReadOnlyCount  只读节点数量上限。开启增删只读节点时必填。
    * readOnlyWeight  只读节点读写分离权重。开启增删只读节点时必填。
    * scalingStrategy  scalingStrategy
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'monitorCycle' => 'setMonitorCycle',
            'silenceCycle' => 'setSilenceCycle',
            'enlargeThreshold' => 'setEnlargeThreshold',
            'maxFlavor' => 'setMaxFlavor',
            'reduceEnabled' => 'setReduceEnabled',
            'maxReadOnlyCount' => 'setMaxReadOnlyCount',
            'readOnlyWeight' => 'setReadOnlyWeight',
            'scalingStrategy' => 'setScalingStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    * monitorCycle  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。  取值范围：300、600、900、1800。  status为ON时必填。
    * silenceCycle  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。  取值范围：300、600、1800、3600、7200、10800、86400、604800。  status为ON时必填。
    * enlargeThreshold  扩容阈值（百分比数值）。  取值范围：50-100。  status为ON时必填。
    * maxFlavor  扩容规格上限。开启扩缩规格时必填。
    * reduceEnabled  是否开启自动回缩。开启自动变配时必填。 - true：是。 - false：否。
    * maxReadOnlyCount  只读节点数量上限。开启增删只读节点时必填。
    * readOnlyWeight  只读节点读写分离权重。开启增删只读节点时必填。
    * scalingStrategy  scalingStrategy
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'monitorCycle' => 'getMonitorCycle',
            'silenceCycle' => 'getSilenceCycle',
            'enlargeThreshold' => 'getEnlargeThreshold',
            'maxFlavor' => 'getMaxFlavor',
            'reduceEnabled' => 'getReduceEnabled',
            'maxReadOnlyCount' => 'getMaxReadOnlyCount',
            'readOnlyWeight' => 'getReadOnlyWeight',
            'scalingStrategy' => 'getScalingStrategy'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['monitorCycle'] = isset($data['monitorCycle']) ? $data['monitorCycle'] : null;
        $this->container['silenceCycle'] = isset($data['silenceCycle']) ? $data['silenceCycle'] : null;
        $this->container['enlargeThreshold'] = isset($data['enlargeThreshold']) ? $data['enlargeThreshold'] : null;
        $this->container['maxFlavor'] = isset($data['maxFlavor']) ? $data['maxFlavor'] : null;
        $this->container['reduceEnabled'] = isset($data['reduceEnabled']) ? $data['reduceEnabled'] : null;
        $this->container['maxReadOnlyCount'] = isset($data['maxReadOnlyCount']) ? $data['maxReadOnlyCount'] : null;
        $this->container['readOnlyWeight'] = isset($data['readOnlyWeight']) ? $data['readOnlyWeight'] : null;
        $this->container['scalingStrategy'] = isset($data['scalingStrategy']) ? $data['scalingStrategy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['scalingStrategy'] === null) {
            $invalidProperties[] = "'scalingStrategy' can't be null";
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
    * Gets status
    *  自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 自动变配开关状态。  取值：  - ON：开启。 - OFF：关闭。
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
    *  监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。  取值范围：300、600、900、1800。  status为ON时必填。
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
    * @param int|null $monitorCycle 监测周期（单位：秒）。 在整个观测窗口期内，若CPU平均使用率大于等于设定值，则在观测窗口结束后，进行扩容。  取值范围：300、600、900、1800。  status为ON时必填。
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
    *  静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。  取值范围：300、600、1800、3600、7200、10800、86400、604800。  status为ON时必填。
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
    * @param int|null $silenceCycle 静默周期（单位：秒）。 两次自动扩容或自动回缩的最小间隔时间。  取值范围：300、600、1800、3600、7200、10800、86400、604800。  status为ON时必填。
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
    *  扩容阈值（百分比数值）。  取值范围：50-100。  status为ON时必填。
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
    * @param int|null $enlargeThreshold 扩容阈值（百分比数值）。  取值范围：50-100。  status为ON时必填。
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
    *  扩容规格上限。开启扩缩规格时必填。
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
    * @param string|null $maxFlavor 扩容规格上限。开启扩缩规格时必填。
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
    *  是否开启自动回缩。开启自动变配时必填。 - true：是。 - false：否。
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
    * @param bool|null $reduceEnabled 是否开启自动回缩。开启自动变配时必填。 - true：是。 - false：否。
    *
    * @return $this
    */
    public function setReduceEnabled($reduceEnabled)
    {
        $this->container['reduceEnabled'] = $reduceEnabled;
        return $this;
    }

    /**
    * Gets maxReadOnlyCount
    *  只读节点数量上限。开启增删只读节点时必填。
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
    * @param int|null $maxReadOnlyCount 只读节点数量上限。开启增删只读节点时必填。
    *
    * @return $this
    */
    public function setMaxReadOnlyCount($maxReadOnlyCount)
    {
        $this->container['maxReadOnlyCount'] = $maxReadOnlyCount;
        return $this;
    }

    /**
    * Gets readOnlyWeight
    *  只读节点读写分离权重。开启增删只读节点时必填。
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
    * @param int|null $readOnlyWeight 只读节点读写分离权重。开启增删只读节点时必填。
    *
    * @return $this
    */
    public function setReadOnlyWeight($readOnlyWeight)
    {
        $this->container['readOnlyWeight'] = $readOnlyWeight;
        return $this;
    }

    /**
    * Gets scalingStrategy
    *  scalingStrategy
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ScalingStrategyReqInfo
    */
    public function getScalingStrategy()
    {
        return $this->container['scalingStrategy'];
    }

    /**
    * Sets scalingStrategy
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ScalingStrategyReqInfo $scalingStrategy scalingStrategy
    *
    * @return $this
    */
    public function setScalingStrategy($scalingStrategy)
    {
        $this->container['scalingStrategy'] = $scalingStrategy;
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

