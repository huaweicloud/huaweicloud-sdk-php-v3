<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAutoNodeExpansionPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAutoNodeExpansionPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOption  **参数解释：** 节点扩容是否开启。 **约束限制：** 不涉及。 **取值范围：**   true为开启。   false为关闭。 **默认取值：** 不涉及。
    * overloadNodeThreshold  **参数解释：** 超负载节点比例。当大等于overload_node_threshold%的节点，节点内存使用率或cpu使用率满足条件时，触发自动扩容节点。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * cpuThreshold  **参数解释：** 触发节点自动扩容的CPU使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * memThreshold  **参数解释：** 触发节点自动扩容的内存使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * step  **参数解释：** 每次扩容的节点个数。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过可扩容的节点上限。 **默认取值：** 不涉及。
    * nodeLimit  **参数解释：** 自动扩容所能达到的节点上限。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过当前实例可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOption' => 'bool',
            'overloadNodeThreshold' => 'int',
            'cpuThreshold' => 'int',
            'memThreshold' => 'int',
            'step' => 'int',
            'nodeLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOption  **参数解释：** 节点扩容是否开启。 **约束限制：** 不涉及。 **取值范围：**   true为开启。   false为关闭。 **默认取值：** 不涉及。
    * overloadNodeThreshold  **参数解释：** 超负载节点比例。当大等于overload_node_threshold%的节点，节点内存使用率或cpu使用率满足条件时，触发自动扩容节点。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * cpuThreshold  **参数解释：** 触发节点自动扩容的CPU使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * memThreshold  **参数解释：** 触发节点自动扩容的内存使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * step  **参数解释：** 每次扩容的节点个数。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过可扩容的节点上限。 **默认取值：** 不涉及。
    * nodeLimit  **参数解释：** 自动扩容所能达到的节点上限。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过当前实例可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOption' => null,
        'overloadNodeThreshold' => 'int32',
        'cpuThreshold' => 'int32',
        'memThreshold' => 'int32',
        'step' => 'int32',
        'nodeLimit' => 'int32'
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
    * switchOption  **参数解释：** 节点扩容是否开启。 **约束限制：** 不涉及。 **取值范围：**   true为开启。   false为关闭。 **默认取值：** 不涉及。
    * overloadNodeThreshold  **参数解释：** 超负载节点比例。当大等于overload_node_threshold%的节点，节点内存使用率或cpu使用率满足条件时，触发自动扩容节点。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * cpuThreshold  **参数解释：** 触发节点自动扩容的CPU使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * memThreshold  **参数解释：** 触发节点自动扩容的内存使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * step  **参数解释：** 每次扩容的节点个数。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过可扩容的节点上限。 **默认取值：** 不涉及。
    * nodeLimit  **参数解释：** 自动扩容所能达到的节点上限。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过当前实例可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOption' => 'switch_option',
            'overloadNodeThreshold' => 'overload_node_threshold',
            'cpuThreshold' => 'cpu_threshold',
            'memThreshold' => 'mem_threshold',
            'step' => 'step',
            'nodeLimit' => 'node_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOption  **参数解释：** 节点扩容是否开启。 **约束限制：** 不涉及。 **取值范围：**   true为开启。   false为关闭。 **默认取值：** 不涉及。
    * overloadNodeThreshold  **参数解释：** 超负载节点比例。当大等于overload_node_threshold%的节点，节点内存使用率或cpu使用率满足条件时，触发自动扩容节点。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * cpuThreshold  **参数解释：** 触发节点自动扩容的CPU使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * memThreshold  **参数解释：** 触发节点自动扩容的内存使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * step  **参数解释：** 每次扩容的节点个数。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过可扩容的节点上限。 **默认取值：** 不涉及。
    * nodeLimit  **参数解释：** 自动扩容所能达到的节点上限。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过当前实例可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOption' => 'setSwitchOption',
            'overloadNodeThreshold' => 'setOverloadNodeThreshold',
            'cpuThreshold' => 'setCpuThreshold',
            'memThreshold' => 'setMemThreshold',
            'step' => 'setStep',
            'nodeLimit' => 'setNodeLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOption  **参数解释：** 节点扩容是否开启。 **约束限制：** 不涉及。 **取值范围：**   true为开启。   false为关闭。 **默认取值：** 不涉及。
    * overloadNodeThreshold  **参数解释：** 超负载节点比例。当大等于overload_node_threshold%的节点，节点内存使用率或cpu使用率满足条件时，触发自动扩容节点。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * cpuThreshold  **参数解释：** 触发节点自动扩容的CPU使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * memThreshold  **参数解释：** 触发节点自动扩容的内存使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    * step  **参数解释：** 每次扩容的节点个数。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过可扩容的节点上限。 **默认取值：** 不涉及。
    * nodeLimit  **参数解释：** 自动扩容所能达到的节点上限。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过当前实例可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOption' => 'getSwitchOption',
            'overloadNodeThreshold' => 'getOverloadNodeThreshold',
            'cpuThreshold' => 'getCpuThreshold',
            'memThreshold' => 'getMemThreshold',
            'step' => 'getStep',
            'nodeLimit' => 'getNodeLimit'
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
        $this->container['switchOption'] = isset($data['switchOption']) ? $data['switchOption'] : null;
        $this->container['overloadNodeThreshold'] = isset($data['overloadNodeThreshold']) ? $data['overloadNodeThreshold'] : null;
        $this->container['cpuThreshold'] = isset($data['cpuThreshold']) ? $data['cpuThreshold'] : null;
        $this->container['memThreshold'] = isset($data['memThreshold']) ? $data['memThreshold'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['nodeLimit'] = isset($data['nodeLimit']) ? $data['nodeLimit'] : null;
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
    * Gets switchOption
    *  **参数解释：** 节点扩容是否开启。 **约束限制：** 不涉及。 **取值范围：**   true为开启。   false为关闭。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getSwitchOption()
    {
        return $this->container['switchOption'];
    }

    /**
    * Sets switchOption
    *
    * @param bool|null $switchOption **参数解释：** 节点扩容是否开启。 **约束限制：** 不涉及。 **取值范围：**   true为开启。   false为关闭。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSwitchOption($switchOption)
    {
        $this->container['switchOption'] = $switchOption;
        return $this;
    }

    /**
    * Gets overloadNodeThreshold
    *  **参数解释：** 超负载节点比例。当大等于overload_node_threshold%的节点，节点内存使用率或cpu使用率满足条件时，触发自动扩容节点。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getOverloadNodeThreshold()
    {
        return $this->container['overloadNodeThreshold'];
    }

    /**
    * Sets overloadNodeThreshold
    *
    * @param int|null $overloadNodeThreshold **参数解释：** 超负载节点比例。当大等于overload_node_threshold%的节点，节点内存使用率或cpu使用率满足条件时，触发自动扩容节点。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOverloadNodeThreshold($overloadNodeThreshold)
    {
        $this->container['overloadNodeThreshold'] = $overloadNodeThreshold;
        return $this;
    }

    /**
    * Gets cpuThreshold
    *  **参数解释：** 触发节点自动扩容的CPU使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getCpuThreshold()
    {
        return $this->container['cpuThreshold'];
    }

    /**
    * Sets cpuThreshold
    *
    * @param int|null $cpuThreshold **参数解释：** 触发节点自动扩容的CPU使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCpuThreshold($cpuThreshold)
    {
        $this->container['cpuThreshold'] = $cpuThreshold;
        return $this;
    }

    /**
    * Gets memThreshold
    *  **参数解释：** 触发节点自动扩容的内存使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getMemThreshold()
    {
        return $this->container['memThreshold'];
    }

    /**
    * Sets memThreshold
    *
    * @param int|null $memThreshold **参数解释：** 触发节点自动扩容的内存使用率。 **约束限制：** 不涉及。 **取值范围：** 1-100的正整数。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMemThreshold($memThreshold)
    {
        $this->container['memThreshold'] = $memThreshold;
        return $this;
    }

    /**
    * Gets step
    *  **参数解释：** 每次扩容的节点个数。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param int|null $step **参数解释：** 每次扩容的节点个数。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
        return $this;
    }

    /**
    * Gets nodeLimit
    *  **参数解释：** 自动扩容所能达到的节点上限。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过当前实例可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getNodeLimit()
    {
        return $this->container['nodeLimit'];
    }

    /**
    * Sets nodeLimit
    *
    * @param int|null $nodeLimit **参数解释：** 自动扩容所能达到的节点上限。 **约束限制：** 不涉及。 **取值范围：** 大等于1的正整数，最大不超过当前实例可扩容的节点上限。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNodeLimit($nodeLimit)
    {
        $this->container['nodeLimit'] = $nodeLimit;
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

