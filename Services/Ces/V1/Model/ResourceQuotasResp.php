<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceQuotasResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceQuotasResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 配额类型。 **取值范围**： 枚举值说明：   - alarm：告警规则
    * used  **参数解释**： 已使用配额数。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 长度为[0,32]个字符。
    * quota  **参数解释**： 配额总数。 **取值范围**： 不涉及。
    * min  **参数解释**： 最小值。 **取值范围**： 不涉及。
    * max  **参数解释**： 最大值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'used' => 'int',
            'unit' => 'string',
            'quota' => 'int',
            'min' => 'int',
            'max' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 配额类型。 **取值范围**： 枚举值说明：   - alarm：告警规则
    * used  **参数解释**： 已使用配额数。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 长度为[0,32]个字符。
    * quota  **参数解释**： 配额总数。 **取值范围**： 不涉及。
    * min  **参数解释**： 最小值。 **取值范围**： 不涉及。
    * max  **参数解释**： 最大值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'used' => 'int64',
        'unit' => null,
        'quota' => 'int64',
        'min' => 'int64',
        'max' => 'int64'
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
    * type  **参数解释**： 配额类型。 **取值范围**： 枚举值说明：   - alarm：告警规则
    * used  **参数解释**： 已使用配额数。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 长度为[0,32]个字符。
    * quota  **参数解释**： 配额总数。 **取值范围**： 不涉及。
    * min  **参数解释**： 最小值。 **取值范围**： 不涉及。
    * max  **参数解释**： 最大值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'used' => 'used',
            'unit' => 'unit',
            'quota' => 'quota',
            'min' => 'min',
            'max' => 'max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 配额类型。 **取值范围**： 枚举值说明：   - alarm：告警规则
    * used  **参数解释**： 已使用配额数。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 长度为[0,32]个字符。
    * quota  **参数解释**： 配额总数。 **取值范围**： 不涉及。
    * min  **参数解释**： 最小值。 **取值范围**： 不涉及。
    * max  **参数解释**： 最大值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'used' => 'setUsed',
            'unit' => 'setUnit',
            'quota' => 'setQuota',
            'min' => 'setMin',
            'max' => 'setMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 配额类型。 **取值范围**： 枚举值说明：   - alarm：告警规则
    * used  **参数解释**： 已使用配额数。 **取值范围**： 不涉及。
    * unit  **参数解释**： 单位。 **取值范围**： 长度为[0,32]个字符。
    * quota  **参数解释**： 配额总数。 **取值范围**： 不涉及。
    * min  **参数解释**： 最小值。 **取值范围**： 不涉及。
    * max  **参数解释**： 最大值。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'used' => 'getUsed',
            'unit' => 'getUnit',
            'quota' => 'getQuota',
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
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
            if ((mb_strlen($this->container['unit']) > 32)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['unit']) < 0)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['quota'] === null) {
            $invalidProperties[] = "'quota' can't be null";
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
    * Gets type
    *  **参数解释**： 配额类型。 **取值范围**： 枚举值说明：   - alarm：告警规则
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： 配额类型。 **取值范围**： 枚举值说明：   - alarm：告警规则
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets used
    *  **参数解释**： 已使用配额数。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int $used **参数解释**： 已使用配额数。 **取值范围**： 不涉及。
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
    *  **参数解释**： 单位。 **取值范围**： 长度为[0,32]个字符。
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit **参数解释**： 单位。 **取值范围**： 长度为[0,32]个字符。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets quota
    *  **参数解释**： 配额总数。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int $quota **参数解释**： 配额总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets min
    *  **参数解释**： 最小值。 **取值范围**： 不涉及。
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
    * @param int|null $min **参数解释**： 最小值。 **取值范围**： 不涉及。
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
    *  **参数解释**： 最大值。 **取值范围**： 不涉及。
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
    * @param int|null $max **参数解释**： 最大值。 **取值范围**： 不涉及。
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

