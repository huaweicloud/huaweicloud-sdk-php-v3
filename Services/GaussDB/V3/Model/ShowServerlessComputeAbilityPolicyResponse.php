<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowServerlessComputeAbilityPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowServerlessComputeAbilityPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentVcpus  **参数描述**：  当前算力。  **取值范围**：  介于最大算力和最小算力之间。
    * minVcpus  **参数解释**：  最小算力。  **取值范围**：  ≥0.5。
    * maxVcpus  **参数解释**：  最大算力。  **取值范围**：  ≥4。
    * scaleOutSwitch  **参数解释**:  增删只读节点开关。  **取值范围**： - true: 开启增删只读节点。 - false: 关闭增删只读节点。
    * maxReadonlyNodeCount  **参数解释**：  最大只读节点个数。  **取值范围**：  ≥2。
    * minReadonlyNodeCount  **参数解释**：  最小只读节点个数。  **取值范围**：  ≥1。
    * scaleToZero  **参数解释**：  Scale to Zero开关。  **取值范围**： - true: 开启Scale to Zero。 - false: 关闭Scale to Zero。
    * idleDurationSeconds  **参数解释**：  空闲持续时长阈值，单位是秒。  所有节点活跃连接数为0且持续达到该阈值时触发Scale to Zero（停止计算计费）。  **取值范围**：  300-3600。
    * scaleToZeroStatus  **参数解释**：  Scale to Zero开启后实例的运行状态。  **取值范围**： - ACTIVE：实例已唤醒，正常计费。 - SCALED_TO_ZERO：计算资源停止计费。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentVcpus' => 'string',
            'minVcpus' => 'string',
            'maxVcpus' => 'string',
            'scaleOutSwitch' => 'bool',
            'maxReadonlyNodeCount' => 'int',
            'minReadonlyNodeCount' => 'int',
            'scaleToZero' => 'bool',
            'idleDurationSeconds' => 'int',
            'scaleToZeroStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentVcpus  **参数描述**：  当前算力。  **取值范围**：  介于最大算力和最小算力之间。
    * minVcpus  **参数解释**：  最小算力。  **取值范围**：  ≥0.5。
    * maxVcpus  **参数解释**：  最大算力。  **取值范围**：  ≥4。
    * scaleOutSwitch  **参数解释**:  增删只读节点开关。  **取值范围**： - true: 开启增删只读节点。 - false: 关闭增删只读节点。
    * maxReadonlyNodeCount  **参数解释**：  最大只读节点个数。  **取值范围**：  ≥2。
    * minReadonlyNodeCount  **参数解释**：  最小只读节点个数。  **取值范围**：  ≥1。
    * scaleToZero  **参数解释**：  Scale to Zero开关。  **取值范围**： - true: 开启Scale to Zero。 - false: 关闭Scale to Zero。
    * idleDurationSeconds  **参数解释**：  空闲持续时长阈值，单位是秒。  所有节点活跃连接数为0且持续达到该阈值时触发Scale to Zero（停止计算计费）。  **取值范围**：  300-3600。
    * scaleToZeroStatus  **参数解释**：  Scale to Zero开启后实例的运行状态。  **取值范围**： - ACTIVE：实例已唤醒，正常计费。 - SCALED_TO_ZERO：计算资源停止计费。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentVcpus' => null,
        'minVcpus' => null,
        'maxVcpus' => null,
        'scaleOutSwitch' => null,
        'maxReadonlyNodeCount' => null,
        'minReadonlyNodeCount' => null,
        'scaleToZero' => null,
        'idleDurationSeconds' => null,
        'scaleToZeroStatus' => null
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
    * currentVcpus  **参数描述**：  当前算力。  **取值范围**：  介于最大算力和最小算力之间。
    * minVcpus  **参数解释**：  最小算力。  **取值范围**：  ≥0.5。
    * maxVcpus  **参数解释**：  最大算力。  **取值范围**：  ≥4。
    * scaleOutSwitch  **参数解释**:  增删只读节点开关。  **取值范围**： - true: 开启增删只读节点。 - false: 关闭增删只读节点。
    * maxReadonlyNodeCount  **参数解释**：  最大只读节点个数。  **取值范围**：  ≥2。
    * minReadonlyNodeCount  **参数解释**：  最小只读节点个数。  **取值范围**：  ≥1。
    * scaleToZero  **参数解释**：  Scale to Zero开关。  **取值范围**： - true: 开启Scale to Zero。 - false: 关闭Scale to Zero。
    * idleDurationSeconds  **参数解释**：  空闲持续时长阈值，单位是秒。  所有节点活跃连接数为0且持续达到该阈值时触发Scale to Zero（停止计算计费）。  **取值范围**：  300-3600。
    * scaleToZeroStatus  **参数解释**：  Scale to Zero开启后实例的运行状态。  **取值范围**： - ACTIVE：实例已唤醒，正常计费。 - SCALED_TO_ZERO：计算资源停止计费。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentVcpus' => 'current_vcpus',
            'minVcpus' => 'min_vcpus',
            'maxVcpus' => 'max_vcpus',
            'scaleOutSwitch' => 'scale_out_switch',
            'maxReadonlyNodeCount' => 'max_readonly_node_count',
            'minReadonlyNodeCount' => 'min_readonly_node_count',
            'scaleToZero' => 'scale_to_zero',
            'idleDurationSeconds' => 'idle_duration_seconds',
            'scaleToZeroStatus' => 'scale_to_zero_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentVcpus  **参数描述**：  当前算力。  **取值范围**：  介于最大算力和最小算力之间。
    * minVcpus  **参数解释**：  最小算力。  **取值范围**：  ≥0.5。
    * maxVcpus  **参数解释**：  最大算力。  **取值范围**：  ≥4。
    * scaleOutSwitch  **参数解释**:  增删只读节点开关。  **取值范围**： - true: 开启增删只读节点。 - false: 关闭增删只读节点。
    * maxReadonlyNodeCount  **参数解释**：  最大只读节点个数。  **取值范围**：  ≥2。
    * minReadonlyNodeCount  **参数解释**：  最小只读节点个数。  **取值范围**：  ≥1。
    * scaleToZero  **参数解释**：  Scale to Zero开关。  **取值范围**： - true: 开启Scale to Zero。 - false: 关闭Scale to Zero。
    * idleDurationSeconds  **参数解释**：  空闲持续时长阈值，单位是秒。  所有节点活跃连接数为0且持续达到该阈值时触发Scale to Zero（停止计算计费）。  **取值范围**：  300-3600。
    * scaleToZeroStatus  **参数解释**：  Scale to Zero开启后实例的运行状态。  **取值范围**： - ACTIVE：实例已唤醒，正常计费。 - SCALED_TO_ZERO：计算资源停止计费。
    *
    * @var string[]
    */
    protected static $setters = [
            'currentVcpus' => 'setCurrentVcpus',
            'minVcpus' => 'setMinVcpus',
            'maxVcpus' => 'setMaxVcpus',
            'scaleOutSwitch' => 'setScaleOutSwitch',
            'maxReadonlyNodeCount' => 'setMaxReadonlyNodeCount',
            'minReadonlyNodeCount' => 'setMinReadonlyNodeCount',
            'scaleToZero' => 'setScaleToZero',
            'idleDurationSeconds' => 'setIdleDurationSeconds',
            'scaleToZeroStatus' => 'setScaleToZeroStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentVcpus  **参数描述**：  当前算力。  **取值范围**：  介于最大算力和最小算力之间。
    * minVcpus  **参数解释**：  最小算力。  **取值范围**：  ≥0.5。
    * maxVcpus  **参数解释**：  最大算力。  **取值范围**：  ≥4。
    * scaleOutSwitch  **参数解释**:  增删只读节点开关。  **取值范围**： - true: 开启增删只读节点。 - false: 关闭增删只读节点。
    * maxReadonlyNodeCount  **参数解释**：  最大只读节点个数。  **取值范围**：  ≥2。
    * minReadonlyNodeCount  **参数解释**：  最小只读节点个数。  **取值范围**：  ≥1。
    * scaleToZero  **参数解释**：  Scale to Zero开关。  **取值范围**： - true: 开启Scale to Zero。 - false: 关闭Scale to Zero。
    * idleDurationSeconds  **参数解释**：  空闲持续时长阈值，单位是秒。  所有节点活跃连接数为0且持续达到该阈值时触发Scale to Zero（停止计算计费）。  **取值范围**：  300-3600。
    * scaleToZeroStatus  **参数解释**：  Scale to Zero开启后实例的运行状态。  **取值范围**： - ACTIVE：实例已唤醒，正常计费。 - SCALED_TO_ZERO：计算资源停止计费。
    *
    * @var string[]
    */
    protected static $getters = [
            'currentVcpus' => 'getCurrentVcpus',
            'minVcpus' => 'getMinVcpus',
            'maxVcpus' => 'getMaxVcpus',
            'scaleOutSwitch' => 'getScaleOutSwitch',
            'maxReadonlyNodeCount' => 'getMaxReadonlyNodeCount',
            'minReadonlyNodeCount' => 'getMinReadonlyNodeCount',
            'scaleToZero' => 'getScaleToZero',
            'idleDurationSeconds' => 'getIdleDurationSeconds',
            'scaleToZeroStatus' => 'getScaleToZeroStatus'
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
        $this->container['currentVcpus'] = isset($data['currentVcpus']) ? $data['currentVcpus'] : null;
        $this->container['minVcpus'] = isset($data['minVcpus']) ? $data['minVcpus'] : null;
        $this->container['maxVcpus'] = isset($data['maxVcpus']) ? $data['maxVcpus'] : null;
        $this->container['scaleOutSwitch'] = isset($data['scaleOutSwitch']) ? $data['scaleOutSwitch'] : null;
        $this->container['maxReadonlyNodeCount'] = isset($data['maxReadonlyNodeCount']) ? $data['maxReadonlyNodeCount'] : null;
        $this->container['minReadonlyNodeCount'] = isset($data['minReadonlyNodeCount']) ? $data['minReadonlyNodeCount'] : null;
        $this->container['scaleToZero'] = isset($data['scaleToZero']) ? $data['scaleToZero'] : null;
        $this->container['idleDurationSeconds'] = isset($data['idleDurationSeconds']) ? $data['idleDurationSeconds'] : null;
        $this->container['scaleToZeroStatus'] = isset($data['scaleToZeroStatus']) ? $data['scaleToZeroStatus'] : null;
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
    * Gets currentVcpus
    *  **参数描述**：  当前算力。  **取值范围**：  介于最大算力和最小算力之间。
    *
    * @return string|null
    */
    public function getCurrentVcpus()
    {
        return $this->container['currentVcpus'];
    }

    /**
    * Sets currentVcpus
    *
    * @param string|null $currentVcpus **参数描述**：  当前算力。  **取值范围**：  介于最大算力和最小算力之间。
    *
    * @return $this
    */
    public function setCurrentVcpus($currentVcpus)
    {
        $this->container['currentVcpus'] = $currentVcpus;
        return $this;
    }

    /**
    * Gets minVcpus
    *  **参数解释**：  最小算力。  **取值范围**：  ≥0.5。
    *
    * @return string|null
    */
    public function getMinVcpus()
    {
        return $this->container['minVcpus'];
    }

    /**
    * Sets minVcpus
    *
    * @param string|null $minVcpus **参数解释**：  最小算力。  **取值范围**：  ≥0.5。
    *
    * @return $this
    */
    public function setMinVcpus($minVcpus)
    {
        $this->container['minVcpus'] = $minVcpus;
        return $this;
    }

    /**
    * Gets maxVcpus
    *  **参数解释**：  最大算力。  **取值范围**：  ≥4。
    *
    * @return string|null
    */
    public function getMaxVcpus()
    {
        return $this->container['maxVcpus'];
    }

    /**
    * Sets maxVcpus
    *
    * @param string|null $maxVcpus **参数解释**：  最大算力。  **取值范围**：  ≥4。
    *
    * @return $this
    */
    public function setMaxVcpus($maxVcpus)
    {
        $this->container['maxVcpus'] = $maxVcpus;
        return $this;
    }

    /**
    * Gets scaleOutSwitch
    *  **参数解释**:  增删只读节点开关。  **取值范围**： - true: 开启增删只读节点。 - false: 关闭增删只读节点。
    *
    * @return bool|null
    */
    public function getScaleOutSwitch()
    {
        return $this->container['scaleOutSwitch'];
    }

    /**
    * Sets scaleOutSwitch
    *
    * @param bool|null $scaleOutSwitch **参数解释**:  增删只读节点开关。  **取值范围**： - true: 开启增删只读节点。 - false: 关闭增删只读节点。
    *
    * @return $this
    */
    public function setScaleOutSwitch($scaleOutSwitch)
    {
        $this->container['scaleOutSwitch'] = $scaleOutSwitch;
        return $this;
    }

    /**
    * Gets maxReadonlyNodeCount
    *  **参数解释**：  最大只读节点个数。  **取值范围**：  ≥2。
    *
    * @return int|null
    */
    public function getMaxReadonlyNodeCount()
    {
        return $this->container['maxReadonlyNodeCount'];
    }

    /**
    * Sets maxReadonlyNodeCount
    *
    * @param int|null $maxReadonlyNodeCount **参数解释**：  最大只读节点个数。  **取值范围**：  ≥2。
    *
    * @return $this
    */
    public function setMaxReadonlyNodeCount($maxReadonlyNodeCount)
    {
        $this->container['maxReadonlyNodeCount'] = $maxReadonlyNodeCount;
        return $this;
    }

    /**
    * Gets minReadonlyNodeCount
    *  **参数解释**：  最小只读节点个数。  **取值范围**：  ≥1。
    *
    * @return int|null
    */
    public function getMinReadonlyNodeCount()
    {
        return $this->container['minReadonlyNodeCount'];
    }

    /**
    * Sets minReadonlyNodeCount
    *
    * @param int|null $minReadonlyNodeCount **参数解释**：  最小只读节点个数。  **取值范围**：  ≥1。
    *
    * @return $this
    */
    public function setMinReadonlyNodeCount($minReadonlyNodeCount)
    {
        $this->container['minReadonlyNodeCount'] = $minReadonlyNodeCount;
        return $this;
    }

    /**
    * Gets scaleToZero
    *  **参数解释**：  Scale to Zero开关。  **取值范围**： - true: 开启Scale to Zero。 - false: 关闭Scale to Zero。
    *
    * @return bool|null
    */
    public function getScaleToZero()
    {
        return $this->container['scaleToZero'];
    }

    /**
    * Sets scaleToZero
    *
    * @param bool|null $scaleToZero **参数解释**：  Scale to Zero开关。  **取值范围**： - true: 开启Scale to Zero。 - false: 关闭Scale to Zero。
    *
    * @return $this
    */
    public function setScaleToZero($scaleToZero)
    {
        $this->container['scaleToZero'] = $scaleToZero;
        return $this;
    }

    /**
    * Gets idleDurationSeconds
    *  **参数解释**：  空闲持续时长阈值，单位是秒。  所有节点活跃连接数为0且持续达到该阈值时触发Scale to Zero（停止计算计费）。  **取值范围**：  300-3600。
    *
    * @return int|null
    */
    public function getIdleDurationSeconds()
    {
        return $this->container['idleDurationSeconds'];
    }

    /**
    * Sets idleDurationSeconds
    *
    * @param int|null $idleDurationSeconds **参数解释**：  空闲持续时长阈值，单位是秒。  所有节点活跃连接数为0且持续达到该阈值时触发Scale to Zero（停止计算计费）。  **取值范围**：  300-3600。
    *
    * @return $this
    */
    public function setIdleDurationSeconds($idleDurationSeconds)
    {
        $this->container['idleDurationSeconds'] = $idleDurationSeconds;
        return $this;
    }

    /**
    * Gets scaleToZeroStatus
    *  **参数解释**：  Scale to Zero开启后实例的运行状态。  **取值范围**： - ACTIVE：实例已唤醒，正常计费。 - SCALED_TO_ZERO：计算资源停止计费。
    *
    * @return string|null
    */
    public function getScaleToZeroStatus()
    {
        return $this->container['scaleToZeroStatus'];
    }

    /**
    * Sets scaleToZeroStatus
    *
    * @param string|null $scaleToZeroStatus **参数解释**：  Scale to Zero开启后实例的运行状态。  **取值范围**： - ACTIVE：实例已唤醒，正常计费。 - SCALED_TO_ZERO：计算资源停止计费。
    *
    * @return $this
    */
    public function setScaleToZeroStatus($scaleToZeroStatus)
    {
        $this->container['scaleToZeroStatus'] = $scaleToZeroStatus;
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

