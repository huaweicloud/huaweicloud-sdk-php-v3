<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterQuotaResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterQuotaResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 资源类型 **约束限制**： 不涉及 **取值范围**： - cluster：Standard/Turbo集群 - autopilot_cluster：Autopilot集群  **默认取值**： 不涉及
    * quota  **参数解释**： 总配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * used  **参数解释**： 配额已使用数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * unit  **参数解释**： 单位 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * min  **参数解释**： 配额最小值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * max  **参数解释**： 配额最大值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'quota' => 'int',
            'used' => 'int',
            'unit' => 'string',
            'min' => 'int',
            'max' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 资源类型 **约束限制**： 不涉及 **取值范围**： - cluster：Standard/Turbo集群 - autopilot_cluster：Autopilot集群  **默认取值**： 不涉及
    * quota  **参数解释**： 总配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * used  **参数解释**： 配额已使用数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * unit  **参数解释**： 单位 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * min  **参数解释**： 配额最小值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * max  **参数解释**： 配额最大值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'quota' => null,
        'used' => null,
        'unit' => null,
        'min' => null,
        'max' => null
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
    * type  **参数解释**： 资源类型 **约束限制**： 不涉及 **取值范围**： - cluster：Standard/Turbo集群 - autopilot_cluster：Autopilot集群  **默认取值**： 不涉及
    * quota  **参数解释**： 总配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * used  **参数解释**： 配额已使用数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * unit  **参数解释**： 单位 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * min  **参数解释**： 配额最小值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * max  **参数解释**： 配额最大值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'quota' => 'quota',
            'used' => 'used',
            'unit' => 'unit',
            'min' => 'min',
            'max' => 'max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 资源类型 **约束限制**： 不涉及 **取值范围**： - cluster：Standard/Turbo集群 - autopilot_cluster：Autopilot集群  **默认取值**： 不涉及
    * quota  **参数解释**： 总配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * used  **参数解释**： 配额已使用数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * unit  **参数解释**： 单位 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * min  **参数解释**： 配额最小值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * max  **参数解释**： 配额最大值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'quota' => 'setQuota',
            'used' => 'setUsed',
            'unit' => 'setUnit',
            'min' => 'setMin',
            'max' => 'setMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 资源类型 **约束限制**： 不涉及 **取值范围**： - cluster：Standard/Turbo集群 - autopilot_cluster：Autopilot集群  **默认取值**： 不涉及
    * quota  **参数解释**： 总配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * used  **参数解释**： 配额已使用数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * unit  **参数解释**： 单位 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * min  **参数解释**： 配额最小值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * max  **参数解释**： 配额最大值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'quota' => 'getQuota',
            'used' => 'getUsed',
            'unit' => 'getUnit',
            'min' => 'getMin',
            'max' => 'getMax'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
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
    * Gets type
    *  **参数解释**： 资源类型 **约束限制**： 不涉及 **取值范围**： - cluster：Standard/Turbo集群 - autopilot_cluster：Autopilot集群  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 资源类型 **约束限制**： 不涉及 **取值范围**： - cluster：Standard/Turbo集群 - autopilot_cluster：Autopilot集群  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets quota
    *  **参数解释**： 总配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota **参数解释**： 总配额 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  **参数解释**： 配额已使用数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used **参数解释**： 配额已使用数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释**： 单位 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit **参数解释**： 单位 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets min
    *  **参数解释**： 配额最小值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int|null $min **参数解释**： 配额最小值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets max
    *  **参数解释**： 配额最大值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max **参数解释**： 配额最大值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
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

