<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReadOnlyScalingStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReadOnlyScalingStrategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * readOnlyEnlargeEnabled  **参数解释**：  只读扩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyReduceEnabled  **参数解释**：  只读缩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyMonitorCycle  **参数解释**：  观测窗口时间，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 120 - 300 - 600 - 900 - 1800  **默认取值**：  不涉及。
    * readOnlySilenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 300 - 600 - 1800 - 3600 - 7200 - 10800 - 86400 - 604800  **默认取值**：  不涉及。
    * maxReadOnlyCount  **参数解释**：  只读最大节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyEnlargeThreshold  **参数解释**：  只读扩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyFlavor  **参数解释**：  扩容新增只读规格。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minReadOnlyCount  **参数解释**：  只读最小节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyReduceThreshold  **参数解释**：  只读缩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'readOnlyEnlargeEnabled' => 'string',
            'readOnlyReduceEnabled' => 'string',
            'readOnlyMonitorCycle' => 'string',
            'readOnlySilenceCycle' => 'string',
            'maxReadOnlyCount' => 'string',
            'readOnlyEnlargeThreshold' => 'string',
            'readOnlyFlavor' => 'string',
            'minReadOnlyCount' => 'string',
            'readOnlyReduceThreshold' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * readOnlyEnlargeEnabled  **参数解释**：  只读扩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyReduceEnabled  **参数解释**：  只读缩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyMonitorCycle  **参数解释**：  观测窗口时间，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 120 - 300 - 600 - 900 - 1800  **默认取值**：  不涉及。
    * readOnlySilenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 300 - 600 - 1800 - 3600 - 7200 - 10800 - 86400 - 604800  **默认取值**：  不涉及。
    * maxReadOnlyCount  **参数解释**：  只读最大节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyEnlargeThreshold  **参数解释**：  只读扩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyFlavor  **参数解释**：  扩容新增只读规格。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minReadOnlyCount  **参数解释**：  只读最小节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyReduceThreshold  **参数解释**：  只读缩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'readOnlyEnlargeEnabled' => null,
        'readOnlyReduceEnabled' => null,
        'readOnlyMonitorCycle' => null,
        'readOnlySilenceCycle' => null,
        'maxReadOnlyCount' => null,
        'readOnlyEnlargeThreshold' => null,
        'readOnlyFlavor' => null,
        'minReadOnlyCount' => null,
        'readOnlyReduceThreshold' => null
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
    * readOnlyEnlargeEnabled  **参数解释**：  只读扩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyReduceEnabled  **参数解释**：  只读缩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyMonitorCycle  **参数解释**：  观测窗口时间，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 120 - 300 - 600 - 900 - 1800  **默认取值**：  不涉及。
    * readOnlySilenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 300 - 600 - 1800 - 3600 - 7200 - 10800 - 86400 - 604800  **默认取值**：  不涉及。
    * maxReadOnlyCount  **参数解释**：  只读最大节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyEnlargeThreshold  **参数解释**：  只读扩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyFlavor  **参数解释**：  扩容新增只读规格。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minReadOnlyCount  **参数解释**：  只读最小节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyReduceThreshold  **参数解释**：  只读缩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'readOnlyEnlargeEnabled' => 'read_only_enlarge_enabled',
            'readOnlyReduceEnabled' => 'read_only_reduce_enabled',
            'readOnlyMonitorCycle' => 'read_only_monitor_cycle',
            'readOnlySilenceCycle' => 'read_only_silence_cycle',
            'maxReadOnlyCount' => 'max_read_only_count',
            'readOnlyEnlargeThreshold' => 'read_only_enlarge_threshold',
            'readOnlyFlavor' => 'read_only_flavor',
            'minReadOnlyCount' => 'min_read_only_count',
            'readOnlyReduceThreshold' => 'read_only_reduce_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * readOnlyEnlargeEnabled  **参数解释**：  只读扩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyReduceEnabled  **参数解释**：  只读缩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyMonitorCycle  **参数解释**：  观测窗口时间，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 120 - 300 - 600 - 900 - 1800  **默认取值**：  不涉及。
    * readOnlySilenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 300 - 600 - 1800 - 3600 - 7200 - 10800 - 86400 - 604800  **默认取值**：  不涉及。
    * maxReadOnlyCount  **参数解释**：  只读最大节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyEnlargeThreshold  **参数解释**：  只读扩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyFlavor  **参数解释**：  扩容新增只读规格。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minReadOnlyCount  **参数解释**：  只读最小节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyReduceThreshold  **参数解释**：  只读缩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'readOnlyEnlargeEnabled' => 'setReadOnlyEnlargeEnabled',
            'readOnlyReduceEnabled' => 'setReadOnlyReduceEnabled',
            'readOnlyMonitorCycle' => 'setReadOnlyMonitorCycle',
            'readOnlySilenceCycle' => 'setReadOnlySilenceCycle',
            'maxReadOnlyCount' => 'setMaxReadOnlyCount',
            'readOnlyEnlargeThreshold' => 'setReadOnlyEnlargeThreshold',
            'readOnlyFlavor' => 'setReadOnlyFlavor',
            'minReadOnlyCount' => 'setMinReadOnlyCount',
            'readOnlyReduceThreshold' => 'setReadOnlyReduceThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * readOnlyEnlargeEnabled  **参数解释**：  只读扩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyReduceEnabled  **参数解释**：  只读缩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    * readOnlyMonitorCycle  **参数解释**：  观测窗口时间，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 120 - 300 - 600 - 900 - 1800  **默认取值**：  不涉及。
    * readOnlySilenceCycle  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 300 - 600 - 1800 - 3600 - 7200 - 10800 - 86400 - 604800  **默认取值**：  不涉及。
    * maxReadOnlyCount  **参数解释**：  只读最大节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyEnlargeThreshold  **参数解释**：  只读扩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyFlavor  **参数解释**：  扩容新增只读规格。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * minReadOnlyCount  **参数解释**：  只读最小节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * readOnlyReduceThreshold  **参数解释**：  只读缩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'readOnlyEnlargeEnabled' => 'getReadOnlyEnlargeEnabled',
            'readOnlyReduceEnabled' => 'getReadOnlyReduceEnabled',
            'readOnlyMonitorCycle' => 'getReadOnlyMonitorCycle',
            'readOnlySilenceCycle' => 'getReadOnlySilenceCycle',
            'maxReadOnlyCount' => 'getMaxReadOnlyCount',
            'readOnlyEnlargeThreshold' => 'getReadOnlyEnlargeThreshold',
            'readOnlyFlavor' => 'getReadOnlyFlavor',
            'minReadOnlyCount' => 'getMinReadOnlyCount',
            'readOnlyReduceThreshold' => 'getReadOnlyReduceThreshold'
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
        $this->container['readOnlyEnlargeEnabled'] = isset($data['readOnlyEnlargeEnabled']) ? $data['readOnlyEnlargeEnabled'] : null;
        $this->container['readOnlyReduceEnabled'] = isset($data['readOnlyReduceEnabled']) ? $data['readOnlyReduceEnabled'] : null;
        $this->container['readOnlyMonitorCycle'] = isset($data['readOnlyMonitorCycle']) ? $data['readOnlyMonitorCycle'] : null;
        $this->container['readOnlySilenceCycle'] = isset($data['readOnlySilenceCycle']) ? $data['readOnlySilenceCycle'] : null;
        $this->container['maxReadOnlyCount'] = isset($data['maxReadOnlyCount']) ? $data['maxReadOnlyCount'] : null;
        $this->container['readOnlyEnlargeThreshold'] = isset($data['readOnlyEnlargeThreshold']) ? $data['readOnlyEnlargeThreshold'] : null;
        $this->container['readOnlyFlavor'] = isset($data['readOnlyFlavor']) ? $data['readOnlyFlavor'] : null;
        $this->container['minReadOnlyCount'] = isset($data['minReadOnlyCount']) ? $data['minReadOnlyCount'] : null;
        $this->container['readOnlyReduceThreshold'] = isset($data['readOnlyReduceThreshold']) ? $data['readOnlyReduceThreshold'] : null;
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
    * Gets readOnlyEnlargeEnabled
    *  **参数解释**：  只读扩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getReadOnlyEnlargeEnabled()
    {
        return $this->container['readOnlyEnlargeEnabled'];
    }

    /**
    * Sets readOnlyEnlargeEnabled
    *
    * @param string|null $readOnlyEnlargeEnabled **参数解释**：  只读扩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReadOnlyEnlargeEnabled($readOnlyEnlargeEnabled)
    {
        $this->container['readOnlyEnlargeEnabled'] = $readOnlyEnlargeEnabled;
        return $this;
    }

    /**
    * Gets readOnlyReduceEnabled
    *  **参数解释**：  只读缩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getReadOnlyReduceEnabled()
    {
        return $this->container['readOnlyReduceEnabled'];
    }

    /**
    * Sets readOnlyReduceEnabled
    *
    * @param string|null $readOnlyReduceEnabled **参数解释**：  只读缩容开关。  **约束限制**：  不涉及。  **取值范围**：  - ON：开启 - OFF：关闭  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReadOnlyReduceEnabled($readOnlyReduceEnabled)
    {
        $this->container['readOnlyReduceEnabled'] = $readOnlyReduceEnabled;
        return $this;
    }

    /**
    * Gets readOnlyMonitorCycle
    *  **参数解释**：  观测窗口时间，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 120 - 300 - 600 - 900 - 1800  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getReadOnlyMonitorCycle()
    {
        return $this->container['readOnlyMonitorCycle'];
    }

    /**
    * Sets readOnlyMonitorCycle
    *
    * @param string|null $readOnlyMonitorCycle **参数解释**：  观测窗口时间，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 120 - 300 - 600 - 900 - 1800  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReadOnlyMonitorCycle($readOnlyMonitorCycle)
    {
        $this->container['readOnlyMonitorCycle'] = $readOnlyMonitorCycle;
        return $this;
    }

    /**
    * Gets readOnlySilenceCycle
    *  **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 300 - 600 - 1800 - 3600 - 7200 - 10800 - 86400 - 604800  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getReadOnlySilenceCycle()
    {
        return $this->container['readOnlySilenceCycle'];
    }

    /**
    * Sets readOnlySilenceCycle
    *
    * @param string|null $readOnlySilenceCycle **参数解释**：  静默期，单位秒。  **约束限制**：  不涉及。  **取值范围**：  - 300 - 600 - 1800 - 3600 - 7200 - 10800 - 86400 - 604800  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReadOnlySilenceCycle($readOnlySilenceCycle)
    {
        $this->container['readOnlySilenceCycle'] = $readOnlySilenceCycle;
        return $this;
    }

    /**
    * Gets maxReadOnlyCount
    *  **参数解释**：  只读最大节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getMaxReadOnlyCount()
    {
        return $this->container['maxReadOnlyCount'];
    }

    /**
    * Sets maxReadOnlyCount
    *
    * @param string|null $maxReadOnlyCount **参数解释**：  只读最大节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setMaxReadOnlyCount($maxReadOnlyCount)
    {
        $this->container['maxReadOnlyCount'] = $maxReadOnlyCount;
        return $this;
    }

    /**
    * Gets readOnlyEnlargeThreshold
    *  **参数解释**：  只读扩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getReadOnlyEnlargeThreshold()
    {
        return $this->container['readOnlyEnlargeThreshold'];
    }

    /**
    * Sets readOnlyEnlargeThreshold
    *
    * @param string|null $readOnlyEnlargeThreshold **参数解释**：  只读扩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReadOnlyEnlargeThreshold($readOnlyEnlargeThreshold)
    {
        $this->container['readOnlyEnlargeThreshold'] = $readOnlyEnlargeThreshold;
        return $this;
    }

    /**
    * Gets readOnlyFlavor
    *  **参数解释**：  扩容新增只读规格。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getReadOnlyFlavor()
    {
        return $this->container['readOnlyFlavor'];
    }

    /**
    * Sets readOnlyFlavor
    *
    * @param string|null $readOnlyFlavor **参数解释**：  扩容新增只读规格。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReadOnlyFlavor($readOnlyFlavor)
    {
        $this->container['readOnlyFlavor'] = $readOnlyFlavor;
        return $this;
    }

    /**
    * Gets minReadOnlyCount
    *  **参数解释**：  只读最小节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getMinReadOnlyCount()
    {
        return $this->container['minReadOnlyCount'];
    }

    /**
    * Sets minReadOnlyCount
    *
    * @param string|null $minReadOnlyCount **参数解释**：  只读最小节点数。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setMinReadOnlyCount($minReadOnlyCount)
    {
        $this->container['minReadOnlyCount'] = $minReadOnlyCount;
        return $this;
    }

    /**
    * Gets readOnlyReduceThreshold
    *  **参数解释**：  只读缩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getReadOnlyReduceThreshold()
    {
        return $this->container['readOnlyReduceThreshold'];
    }

    /**
    * Sets readOnlyReduceThreshold
    *
    * @param string|null $readOnlyReduceThreshold **参数解释**：  只读缩容阈值。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setReadOnlyReduceThreshold($readOnlyReduceThreshold)
    {
        $this->container['readOnlyReduceThreshold'] = $readOnlyReduceThreshold;
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

