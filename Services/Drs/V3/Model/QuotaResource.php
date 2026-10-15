<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：  配额类型，用于标识不同维度的资源配额。  **约束限制**：  不涉及。  **取值范围**：  - instances：实例的数量配额  **默认取值**：  不涉及
    * min  **参数解释**：  配额允许的最小值，表示该资源配额的下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * max  **参数解释**：  配额允许的最大值，表示该资源配额的上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * quota  **参数解释**：  用户当前配额的实际值，即系统为该用户分配的配额数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * used  **参数解释**：  用户已使用的配额值，表示当前已占用的资源数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'min' => 'int',
            'max' => 'int',
            'quota' => 'int',
            'used' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：  配额类型，用于标识不同维度的资源配额。  **约束限制**：  不涉及。  **取值范围**：  - instances：实例的数量配额  **默认取值**：  不涉及
    * min  **参数解释**：  配额允许的最小值，表示该资源配额的下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * max  **参数解释**：  配额允许的最大值，表示该资源配额的上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * quota  **参数解释**：  用户当前配额的实际值，即系统为该用户分配的配额数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * used  **参数解释**：  用户已使用的配额值，表示当前已占用的资源数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'min' => 'int32',
        'max' => 'int32',
        'quota' => 'int32',
        'used' => 'int32'
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
    * type  **参数解释**：  配额类型，用于标识不同维度的资源配额。  **约束限制**：  不涉及。  **取值范围**：  - instances：实例的数量配额  **默认取值**：  不涉及
    * min  **参数解释**：  配额允许的最小值，表示该资源配额的下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * max  **参数解释**：  配额允许的最大值，表示该资源配额的上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * quota  **参数解释**：  用户当前配额的实际值，即系统为该用户分配的配额数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * used  **参数解释**：  用户已使用的配额值，表示当前已占用的资源数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'min' => 'min',
            'max' => 'max',
            'quota' => 'quota',
            'used' => 'used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：  配额类型，用于标识不同维度的资源配额。  **约束限制**：  不涉及。  **取值范围**：  - instances：实例的数量配额  **默认取值**：  不涉及
    * min  **参数解释**：  配额允许的最小值，表示该资源配额的下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * max  **参数解释**：  配额允许的最大值，表示该资源配额的上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * quota  **参数解释**：  用户当前配额的实际值，即系统为该用户分配的配额数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * used  **参数解释**：  用户已使用的配额值，表示当前已占用的资源数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'min' => 'setMin',
            'max' => 'setMax',
            'quota' => 'setQuota',
            'used' => 'setUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：  配额类型，用于标识不同维度的资源配额。  **约束限制**：  不涉及。  **取值范围**：  - instances：实例的数量配额  **默认取值**：  不涉及
    * min  **参数解释**：  配额允许的最小值，表示该资源配额的下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * max  **参数解释**：  配额允许的最大值，表示该资源配额的上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * quota  **参数解释**：  用户当前配额的实际值，即系统为该用户分配的配额数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * used  **参数解释**：  用户已使用的配额值，表示当前已占用的资源数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'min' => 'getMin',
            'max' => 'getMax',
            'quota' => 'getQuota',
            'used' => 'getUsed'
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
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
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
    *  **参数解释**：  配额类型，用于标识不同维度的资源配额。  **约束限制**：  不涉及。  **取值范围**：  - instances：实例的数量配额  **默认取值**：  不涉及
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
    * @param string|null $type **参数解释**：  配额类型，用于标识不同维度的资源配额。  **约束限制**：  不涉及。  **取值范围**：  - instances：实例的数量配额  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets min
    *  **参数解释**：  配额允许的最小值，表示该资源配额的下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param int|null $min **参数解释**：  配额允许的最小值，表示该资源配额的下限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  配额允许的最大值，表示该资源配额的上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param int|null $max **参数解释**：  配额允许的最大值，表示该资源配额的上限。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets quota
    *  **参数解释**：  用户当前配额的实际值，即系统为该用户分配的配额数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param int|null $quota **参数解释**：  用户当前配额的实际值，即系统为该用户分配的配额数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    *  **参数解释**：  用户已使用的配额值，表示当前已占用的资源数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param int|null $used **参数解释**：  用户已使用的配额值，表示当前已占用的资源数量。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
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

