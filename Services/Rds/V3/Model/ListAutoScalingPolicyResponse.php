<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAutoScalingPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAutoScalingPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  是否开启autoScaling，OFF为关闭，ON为开启  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态，on为自动降配开启；off为关闭  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最大变配规格下限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'status' => 'string',
            'monitorCycle' => 'int',
            'silenceCycle' => 'int',
            'enlargeThreshold' => 'int',
            'maxFlavor' => 'string',
            'reduceEnabled' => 'string',
            'reduceThreshold' => 'int',
            'minFlavor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  是否开启autoScaling，OFF为关闭，ON为开启  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态，on为自动降配开启；off为关闭  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最大变配规格下限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'status' => null,
        'monitorCycle' => null,
        'silenceCycle' => null,
        'enlargeThreshold' => null,
        'maxFlavor' => null,
        'reduceEnabled' => null,
        'reduceThreshold' => null,
        'minFlavor' => null
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
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  是否开启autoScaling，OFF为关闭，ON为开启  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态，on为自动降配开启；off为关闭  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最大变配规格下限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'status' => 'status',
            'monitorCycle' => 'monitor_cycle',
            'silenceCycle' => 'silence_cycle',
            'enlargeThreshold' => 'enlarge_threshold',
            'maxFlavor' => 'max_flavor',
            'reduceEnabled' => 'reduce_enabled',
            'reduceThreshold' => 'reduce_threshold',
            'minFlavor' => 'min_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  是否开启autoScaling，OFF为关闭，ON为开启  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态，on为自动降配开启；off为关闭  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最大变配规格下限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'monitorCycle' => 'setMonitorCycle',
            'silenceCycle' => 'setSilenceCycle',
            'enlargeThreshold' => 'setEnlargeThreshold',
            'maxFlavor' => 'setMaxFlavor',
            'reduceEnabled' => 'setReduceEnabled',
            'reduceThreshold' => 'setReduceThreshold',
            'minFlavor' => 'setMinFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * status  **参数解释**：  是否开启autoScaling，OFF为关闭，ON为开启  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * monitorCycle  **参数解释**：  观察窗口，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * silenceCycle  **参数解释**：  静默期，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * enlargeThreshold  **参数解释**：  自动升配触发阈值，单位百分比  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * maxFlavor  **参数解释**：  最大变配规格上限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceEnabled  **参数解释**：  自动降配状态，on为自动降配开启；off为关闭  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * reduceThreshold  **参数解释**：  自动降配触发阈值  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minFlavor  **参数解释**：  最大变配规格下限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'monitorCycle' => 'getMonitorCycle',
            'silenceCycle' => 'getSilenceCycle',
            'enlargeThreshold' => 'getEnlargeThreshold',
            'maxFlavor' => 'getMaxFlavor',
            'reduceEnabled' => 'getReduceEnabled',
            'reduceThreshold' => 'getReduceThreshold',
            'minFlavor' => 'getMinFlavor'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['monitorCycle'] = isset($data['monitorCycle']) ? $data['monitorCycle'] : null;
        $this->container['silenceCycle'] = isset($data['silenceCycle']) ? $data['silenceCycle'] : null;
        $this->container['enlargeThreshold'] = isset($data['enlargeThreshold']) ? $data['enlargeThreshold'] : null;
        $this->container['maxFlavor'] = isset($data['maxFlavor']) ? $data['maxFlavor'] : null;
        $this->container['reduceEnabled'] = isset($data['reduceEnabled']) ? $data['reduceEnabled'] : null;
        $this->container['reduceThreshold'] = isset($data['reduceThreshold']) ? $data['reduceThreshold'] : null;
        $this->container['minFlavor'] = isset($data['minFlavor']) ? $data['minFlavor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['monitorCycle']) && ($this->container['monitorCycle'] > 1800)) {
                $invalidProperties[] = "invalid value for 'monitorCycle', must be smaller than or equal to 1800.";
            }
            if (!is_null($this->container['monitorCycle']) && ($this->container['monitorCycle'] < 300)) {
                $invalidProperties[] = "invalid value for 'monitorCycle', must be bigger than or equal to 300.";
            }
            if (!is_null($this->container['silenceCycle']) && ($this->container['silenceCycle'] > 604800)) {
                $invalidProperties[] = "invalid value for 'silenceCycle', must be smaller than or equal to 604800.";
            }
            if (!is_null($this->container['silenceCycle']) && ($this->container['silenceCycle'] < 300)) {
                $invalidProperties[] = "invalid value for 'silenceCycle', must be bigger than or equal to 300.";
            }
            if (!is_null($this->container['enlargeThreshold']) && ($this->container['enlargeThreshold'] > 90)) {
                $invalidProperties[] = "invalid value for 'enlargeThreshold', must be smaller than or equal to 90.";
            }
            if (!is_null($this->container['enlargeThreshold']) && ($this->container['enlargeThreshold'] < 60)) {
                $invalidProperties[] = "invalid value for 'enlargeThreshold', must be bigger than or equal to 60.";
            }
            if (!is_null($this->container['maxFlavor']) && (mb_strlen($this->container['maxFlavor']) > 36)) {
                $invalidProperties[] = "invalid value for 'maxFlavor', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['maxFlavor']) && (mb_strlen($this->container['maxFlavor']) < 0)) {
                $invalidProperties[] = "invalid value for 'maxFlavor', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reduceEnabled']) && (mb_strlen($this->container['reduceEnabled']) > 36)) {
                $invalidProperties[] = "invalid value for 'reduceEnabled', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['reduceEnabled']) && (mb_strlen($this->container['reduceEnabled']) < 0)) {
                $invalidProperties[] = "invalid value for 'reduceEnabled', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reduceThreshold']) && ($this->container['reduceThreshold'] > 30)) {
                $invalidProperties[] = "invalid value for 'reduceThreshold', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['reduceThreshold']) && ($this->container['reduceThreshold'] < 10)) {
                $invalidProperties[] = "invalid value for 'reduceThreshold', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['minFlavor']) && (mb_strlen($this->container['minFlavor']) > 36)) {
                $invalidProperties[] = "invalid value for 'minFlavor', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['minFlavor']) && (mb_strlen($this->container['minFlavor']) < 0)) {
                $invalidProperties[] = "invalid value for 'minFlavor', the character length must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $instanceId **参数解释**：  实例ID。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  是否开启autoScaling，OFF为关闭，ON为开启  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $status **参数解释**：  是否开启autoScaling，OFF为关闭，ON为开启  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  观察窗口，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param int|null $monitorCycle **参数解释**：  观察窗口，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  静默期，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param int|null $silenceCycle **参数解释**：  静默期，单位秒  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  自动升配触发阈值，单位百分比  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param int|null $enlargeThreshold **参数解释**：  自动升配触发阈值，单位百分比  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  最大变配规格上限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $maxFlavor **参数解释**：  最大变配规格上限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  自动降配状态，on为自动降配开启；off为关闭  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $reduceEnabled **参数解释**：  自动降配状态，on为自动降配开启；off为关闭  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  自动降配触发阈值  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param int|null $reduceThreshold **参数解释**：  自动降配触发阈值  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  最大变配规格下限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string|null $minFlavor **参数解释**：  最大变配规格下限  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setMinFlavor($minFlavor)
    {
        $this->container['minFlavor'] = $minFlavor;
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

