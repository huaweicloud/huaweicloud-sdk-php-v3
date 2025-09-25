<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyAutoEnlargePolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyAutoEnlargePolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOption  **参数解释**: 磁盘自动扩容开关。 **约束限制**: 不涉及。 **取值范围**: - true：开启磁盘自动扩容。 - false：开启磁盘自动扩容。  **默认取值**: 不涉及。
    * limitVolumeSize  **参数解释**: 存储自动扩容上限。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * triggerAvailablePercent  **参数解释**: 可用存储空间率。 **约束限制**: 不涉及。 **取值范围**: 0-100。 **默认取值**: 20。
    * stepSize  **参数解释**: 扩容步长，固定大小扩容方式。 **约束限制**: 40的倍数。 **取值范围**: 不涉及。 **默认取值**: 40。
    * stepPercent  **参数解释**: 扩容步长，百分比扩容方式。 **约束限制**: 不能小于1。 **取值范围**: 不涉及。 **默认取值**: 20。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOption' => 'bool',
            'limitVolumeSize' => 'int',
            'triggerAvailablePercent' => 'int',
            'stepSize' => 'int',
            'stepPercent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOption  **参数解释**: 磁盘自动扩容开关。 **约束限制**: 不涉及。 **取值范围**: - true：开启磁盘自动扩容。 - false：开启磁盘自动扩容。  **默认取值**: 不涉及。
    * limitVolumeSize  **参数解释**: 存储自动扩容上限。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * triggerAvailablePercent  **参数解释**: 可用存储空间率。 **约束限制**: 不涉及。 **取值范围**: 0-100。 **默认取值**: 20。
    * stepSize  **参数解释**: 扩容步长，固定大小扩容方式。 **约束限制**: 40的倍数。 **取值范围**: 不涉及。 **默认取值**: 40。
    * stepPercent  **参数解释**: 扩容步长，百分比扩容方式。 **约束限制**: 不能小于1。 **取值范围**: 不涉及。 **默认取值**: 20。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOption' => null,
        'limitVolumeSize' => null,
        'triggerAvailablePercent' => null,
        'stepSize' => null,
        'stepPercent' => null
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
    * switchOption  **参数解释**: 磁盘自动扩容开关。 **约束限制**: 不涉及。 **取值范围**: - true：开启磁盘自动扩容。 - false：开启磁盘自动扩容。  **默认取值**: 不涉及。
    * limitVolumeSize  **参数解释**: 存储自动扩容上限。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * triggerAvailablePercent  **参数解释**: 可用存储空间率。 **约束限制**: 不涉及。 **取值范围**: 0-100。 **默认取值**: 20。
    * stepSize  **参数解释**: 扩容步长，固定大小扩容方式。 **约束限制**: 40的倍数。 **取值范围**: 不涉及。 **默认取值**: 40。
    * stepPercent  **参数解释**: 扩容步长，百分比扩容方式。 **约束限制**: 不能小于1。 **取值范围**: 不涉及。 **默认取值**: 20。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOption' => 'switch_option',
            'limitVolumeSize' => 'limit_volume_size',
            'triggerAvailablePercent' => 'trigger_available_percent',
            'stepSize' => 'step_size',
            'stepPercent' => 'step_percent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOption  **参数解释**: 磁盘自动扩容开关。 **约束限制**: 不涉及。 **取值范围**: - true：开启磁盘自动扩容。 - false：开启磁盘自动扩容。  **默认取值**: 不涉及。
    * limitVolumeSize  **参数解释**: 存储自动扩容上限。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * triggerAvailablePercent  **参数解释**: 可用存储空间率。 **约束限制**: 不涉及。 **取值范围**: 0-100。 **默认取值**: 20。
    * stepSize  **参数解释**: 扩容步长，固定大小扩容方式。 **约束限制**: 40的倍数。 **取值范围**: 不涉及。 **默认取值**: 40。
    * stepPercent  **参数解释**: 扩容步长，百分比扩容方式。 **约束限制**: 不能小于1。 **取值范围**: 不涉及。 **默认取值**: 20。
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOption' => 'setSwitchOption',
            'limitVolumeSize' => 'setLimitVolumeSize',
            'triggerAvailablePercent' => 'setTriggerAvailablePercent',
            'stepSize' => 'setStepSize',
            'stepPercent' => 'setStepPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOption  **参数解释**: 磁盘自动扩容开关。 **约束限制**: 不涉及。 **取值范围**: - true：开启磁盘自动扩容。 - false：开启磁盘自动扩容。  **默认取值**: 不涉及。
    * limitVolumeSize  **参数解释**: 存储自动扩容上限。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * triggerAvailablePercent  **参数解释**: 可用存储空间率。 **约束限制**: 不涉及。 **取值范围**: 0-100。 **默认取值**: 20。
    * stepSize  **参数解释**: 扩容步长，固定大小扩容方式。 **约束限制**: 40的倍数。 **取值范围**: 不涉及。 **默认取值**: 40。
    * stepPercent  **参数解释**: 扩容步长，百分比扩容方式。 **约束限制**: 不能小于1。 **取值范围**: 不涉及。 **默认取值**: 20。
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOption' => 'getSwitchOption',
            'limitVolumeSize' => 'getLimitVolumeSize',
            'triggerAvailablePercent' => 'getTriggerAvailablePercent',
            'stepSize' => 'getStepSize',
            'stepPercent' => 'getStepPercent'
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
        $this->container['limitVolumeSize'] = isset($data['limitVolumeSize']) ? $data['limitVolumeSize'] : null;
        $this->container['triggerAvailablePercent'] = isset($data['triggerAvailablePercent']) ? $data['triggerAvailablePercent'] : null;
        $this->container['stepSize'] = isset($data['stepSize']) ? $data['stepSize'] : null;
        $this->container['stepPercent'] = isset($data['stepPercent']) ? $data['stepPercent'] : null;
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
    *  **参数解释**: 磁盘自动扩容开关。 **约束限制**: 不涉及。 **取值范围**: - true：开启磁盘自动扩容。 - false：开启磁盘自动扩容。  **默认取值**: 不涉及。
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
    * @param bool|null $switchOption **参数解释**: 磁盘自动扩容开关。 **约束限制**: 不涉及。 **取值范围**: - true：开启磁盘自动扩容。 - false：开启磁盘自动扩容。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSwitchOption($switchOption)
    {
        $this->container['switchOption'] = $switchOption;
        return $this;
    }

    /**
    * Gets limitVolumeSize
    *  **参数解释**: 存储自动扩容上限。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getLimitVolumeSize()
    {
        return $this->container['limitVolumeSize'];
    }

    /**
    * Sets limitVolumeSize
    *
    * @param int|null $limitVolumeSize **参数解释**: 存储自动扩容上限。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setLimitVolumeSize($limitVolumeSize)
    {
        $this->container['limitVolumeSize'] = $limitVolumeSize;
        return $this;
    }

    /**
    * Gets triggerAvailablePercent
    *  **参数解释**: 可用存储空间率。 **约束限制**: 不涉及。 **取值范围**: 0-100。 **默认取值**: 20。
    *
    * @return int|null
    */
    public function getTriggerAvailablePercent()
    {
        return $this->container['triggerAvailablePercent'];
    }

    /**
    * Sets triggerAvailablePercent
    *
    * @param int|null $triggerAvailablePercent **参数解释**: 可用存储空间率。 **约束限制**: 不涉及。 **取值范围**: 0-100。 **默认取值**: 20。
    *
    * @return $this
    */
    public function setTriggerAvailablePercent($triggerAvailablePercent)
    {
        $this->container['triggerAvailablePercent'] = $triggerAvailablePercent;
        return $this;
    }

    /**
    * Gets stepSize
    *  **参数解释**: 扩容步长，固定大小扩容方式。 **约束限制**: 40的倍数。 **取值范围**: 不涉及。 **默认取值**: 40。
    *
    * @return int|null
    */
    public function getStepSize()
    {
        return $this->container['stepSize'];
    }

    /**
    * Sets stepSize
    *
    * @param int|null $stepSize **参数解释**: 扩容步长，固定大小扩容方式。 **约束限制**: 40的倍数。 **取值范围**: 不涉及。 **默认取值**: 40。
    *
    * @return $this
    */
    public function setStepSize($stepSize)
    {
        $this->container['stepSize'] = $stepSize;
        return $this;
    }

    /**
    * Gets stepPercent
    *  **参数解释**: 扩容步长，百分比扩容方式。 **约束限制**: 不能小于1。 **取值范围**: 不涉及。 **默认取值**: 20。
    *
    * @return int|null
    */
    public function getStepPercent()
    {
        return $this->container['stepPercent'];
    }

    /**
    * Sets stepPercent
    *
    * @param int|null $stepPercent **参数解释**: 扩容步长，百分比扩容方式。 **约束限制**: 不能小于1。 **取值范围**: 不涉及。 **默认取值**: 20。
    *
    * @return $this
    */
    public function setStepPercent($stepPercent)
    {
        $this->container['stepPercent'] = $stepPercent;
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

