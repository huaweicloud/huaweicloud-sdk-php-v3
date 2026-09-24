<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetAutoScalingPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetAutoScalingPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**：  是否开启自动变配。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启自动变配 - OFF：关闭自动变配  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-1800  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-604800  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比。  **约束限制**：  不涉及。  **取值范围**：  50-100  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态。  **约束限制**：  不涉及。  **取值范围**：  - ON：自动降配开启 - OFF：自动降配关闭  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值。  **约束限制**：  不涉及。  **取值范围**：  10-30  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最小变配规格下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyScalingStrategy  readOnlyScalingStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'monitorCycle' => 'int',
            'silenceCycle' => 'int',
            'enlargeThreshold' => 'int',
            'maxFlavor' => 'string',
            'reduceEnabled' => 'string',
            'reduceThreshold' => 'int',
            'minFlavor' => 'string',
            'readOnlyScalingStrategy' => '\HuaweiCloud\SDK\Rds\V3\Model\ReadOnlyScalingStrategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**：  是否开启自动变配。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启自动变配 - OFF：关闭自动变配  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-1800  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-604800  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比。  **约束限制**：  不涉及。  **取值范围**：  50-100  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态。  **约束限制**：  不涉及。  **取值范围**：  - ON：自动降配开启 - OFF：自动降配关闭  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值。  **约束限制**：  不涉及。  **取值范围**：  10-30  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最小变配规格下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyScalingStrategy  readOnlyScalingStrategy
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
        'reduceThreshold' => null,
        'minFlavor' => null,
        'readOnlyScalingStrategy' => null
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
    * status  **参数解释**：  是否开启自动变配。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启自动变配 - OFF：关闭自动变配  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-1800  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-604800  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比。  **约束限制**：  不涉及。  **取值范围**：  50-100  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态。  **约束限制**：  不涉及。  **取值范围**：  - ON：自动降配开启 - OFF：自动降配关闭  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值。  **约束限制**：  不涉及。  **取值范围**：  10-30  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最小变配规格下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyScalingStrategy  readOnlyScalingStrategy
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
            'reduceThreshold' => 'reduce_threshold',
            'minFlavor' => 'min_flavor',
            'readOnlyScalingStrategy' => 'read_only_scaling_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**：  是否开启自动变配。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启自动变配 - OFF：关闭自动变配  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-1800  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-604800  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比。  **约束限制**：  不涉及。  **取值范围**：  50-100  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态。  **约束限制**：  不涉及。  **取值范围**：  - ON：自动降配开启 - OFF：自动降配关闭  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值。  **约束限制**：  不涉及。  **取值范围**：  10-30  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最小变配规格下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyScalingStrategy  readOnlyScalingStrategy
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
            'reduceThreshold' => 'setReduceThreshold',
            'minFlavor' => 'setMinFlavor',
            'readOnlyScalingStrategy' => 'setReadOnlyScalingStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**：  是否开启自动变配。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启自动变配 - OFF：关闭自动变配  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-1800  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-604800  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比。  **约束限制**：  不涉及。  **取值范围**：  50-100  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态。  **约束限制**：  不涉及。  **取值范围**：  - ON：自动降配开启 - OFF：自动降配关闭  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值。  **约束限制**：  不涉及。  **取值范围**：  10-30  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最小变配规格下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyScalingStrategy  readOnlyScalingStrategy
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
            'reduceThreshold' => 'getReduceThreshold',
            'minFlavor' => 'getMinFlavor',
            'readOnlyScalingStrategy' => 'getReadOnlyScalingStrategy'
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
        $this->container['reduceThreshold'] = isset($data['reduceThreshold']) ? $data['reduceThreshold'] : null;
        $this->container['minFlavor'] = isset($data['minFlavor']) ? $data['minFlavor'] : null;
        $this->container['readOnlyScalingStrategy'] = isset($data['readOnlyScalingStrategy']) ? $data['readOnlyScalingStrategy'] : null;
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
    *  **参数解释**：  是否开启自动变配。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启自动变配 - OFF：关闭自动变配  **默认取值**：  不涉及。
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
    * @param string $status **参数解释**：  是否开启自动变配。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启自动变配 - OFF：关闭自动变配  **默认取值**：  不涉及。
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
    *  **参数解释**：  观察窗口，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-1800  **默认取值**：  不涉及。
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
    * @param int|null $monitorCycle **参数解释**：  观察窗口，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-1800  **默认取值**：  不涉及。
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
    *  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-604800  **默认取值**：  不涉及。
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
    * @param int|null $silenceCycle **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  300-604800  **默认取值**：  不涉及。
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
    *  **参数解释**：  自动升配触发阈值，单位百分比。  **约束限制**：  不涉及。  **取值范围**：  50-100  **默认取值**：  不涉及。
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
    * @param int|null $enlargeThreshold **参数解释**：  自动升配触发阈值，单位百分比。  **约束限制**：  不涉及。  **取值范围**：  50-100  **默认取值**：  不涉及。
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
    *  **参数解释**：  最大变配规格上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $maxFlavor **参数解释**：  最大变配规格上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  自动降配状态。  **约束限制**：  不涉及。  **取值范围**：  - ON：自动降配开启 - OFF：自动降配关闭  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getReduceEnabled()
    {
        return $this->container['reduceEnabled'];
    }

    /**
    * Sets reduceEnabled
    *
    * @param string|null $reduceEnabled **参数解释**：  自动降配状态。  **约束限制**：  不涉及。  **取值范围**：  - ON：自动降配开启 - OFF：自动降配关闭  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReduceEnabled($reduceEnabled)
    {
        $this->container['reduceEnabled'] = $reduceEnabled;
        return $this;
    }

    /**
    * Gets reduceThreshold
    *  **参数解释**：  自动降配触发阈值。  **约束限制**：  不涉及。  **取值范围**：  10-30  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getReduceThreshold()
    {
        return $this->container['reduceThreshold'];
    }

    /**
    * Sets reduceThreshold
    *
    * @param int|null $reduceThreshold **参数解释**：  自动降配触发阈值。  **约束限制**：  不涉及。  **取值范围**：  10-30  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReduceThreshold($reduceThreshold)
    {
        $this->container['reduceThreshold'] = $reduceThreshold;
        return $this;
    }

    /**
    * Gets minFlavor
    *  **参数解释**：  最小变配规格下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $minFlavor **参数解释**：  最小变配规格下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setMinFlavor($minFlavor)
    {
        $this->container['minFlavor'] = $minFlavor;
        return $this;
    }

    /**
    * Gets readOnlyScalingStrategy
    *  readOnlyScalingStrategy
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ReadOnlyScalingStrategy|null
    */
    public function getReadOnlyScalingStrategy()
    {
        return $this->container['readOnlyScalingStrategy'];
    }

    /**
    * Sets readOnlyScalingStrategy
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ReadOnlyScalingStrategy|null $readOnlyScalingStrategy readOnlyScalingStrategy
    *
    * @return $this
    */
    public function setReadOnlyScalingStrategy($readOnlyScalingStrategy)
    {
        $this->container['readOnlyScalingStrategy'] = $readOnlyScalingStrategy;
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

