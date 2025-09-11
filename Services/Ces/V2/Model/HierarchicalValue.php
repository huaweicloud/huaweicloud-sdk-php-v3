<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HierarchicalValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HierarchicalValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * critical  **参数解释**： 紧急级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * major  **参数解释**： 重要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * minor  **参数解释**： 次要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * info  **参数解释**： 提示级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'critical' => 'double',
            'major' => 'double',
            'minor' => 'double',
            'info' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * critical  **参数解释**： 紧急级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * major  **参数解释**： 重要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * minor  **参数解释**： 次要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * info  **参数解释**： 提示级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'critical' => 'double',
        'major' => 'double',
        'minor' => 'double',
        'info' => 'double'
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
    * critical  **参数解释**： 紧急级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * major  **参数解释**： 重要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * minor  **参数解释**： 次要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * info  **参数解释**： 提示级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'critical' => 'critical',
            'major' => 'major',
            'minor' => 'minor',
            'info' => 'info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * critical  **参数解释**： 紧急级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * major  **参数解释**： 重要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * minor  **参数解释**： 次要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * info  **参数解释**： 提示级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'critical' => 'setCritical',
            'major' => 'setMajor',
            'minor' => 'setMinor',
            'info' => 'setInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * critical  **参数解释**： 紧急级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * major  **参数解释**： 重要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * minor  **参数解释**： 次要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    * info  **参数解释**： 提示级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'critical' => 'getCritical',
            'major' => 'getMajor',
            'minor' => 'getMinor',
            'info' => 'getInfo'
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
        $this->container['critical'] = isset($data['critical']) ? $data['critical'] : null;
        $this->container['major'] = isset($data['major']) ? $data['major'] : null;
        $this->container['minor'] = isset($data['minor']) ? $data['minor'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['critical']) && ($this->container['critical'] > 1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'critical', must be smaller than or equal to 1.7976931348623156E+108.";
            }
            if (!is_null($this->container['critical']) && ($this->container['critical'] < -1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'critical', must be bigger than or equal to -1.7976931348623156E+108.";
            }
            if (!is_null($this->container['major']) && ($this->container['major'] > 1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'major', must be smaller than or equal to 1.7976931348623156E+108.";
            }
            if (!is_null($this->container['major']) && ($this->container['major'] < -1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'major', must be bigger than or equal to -1.7976931348623156E+108.";
            }
            if (!is_null($this->container['minor']) && ($this->container['minor'] > 1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'minor', must be smaller than or equal to 1.7976931348623156E+108.";
            }
            if (!is_null($this->container['minor']) && ($this->container['minor'] < -1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'minor', must be bigger than or equal to -1.7976931348623156E+108.";
            }
            if (!is_null($this->container['info']) && ($this->container['info'] > 1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'info', must be smaller than or equal to 1.7976931348623156E+108.";
            }
            if (!is_null($this->container['info']) && ($this->container['info'] < -1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'info', must be bigger than or equal to -1.7976931348623156E+108.";
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
    * Gets critical
    *  **参数解释**： 紧急级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @return double|null
    */
    public function getCritical()
    {
        return $this->container['critical'];
    }

    /**
    * Sets critical
    *
    * @param double|null $critical **参数解释**： 紧急级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCritical($critical)
    {
        $this->container['critical'] = $critical;
        return $this;
    }

    /**
    * Gets major
    *  **参数解释**： 重要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @return double|null
    */
    public function getMajor()
    {
        return $this->container['major'];
    }

    /**
    * Sets major
    *
    * @param double|null $major **参数解释**： 重要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMajor($major)
    {
        $this->container['major'] = $major;
        return $this;
    }

    /**
    * Gets minor
    *  **参数解释**： 次要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @return double|null
    */
    public function getMinor()
    {
        return $this->container['minor'];
    }

    /**
    * Sets minor
    *
    * @param double|null $minor **参数解释**： 次要级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMinor($minor)
    {
        $this->container['minor'] = $minor;
        return $this;
    }

    /**
    * Gets info
    *  **参数解释**： 提示级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @return double|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param double|null $info **参数解释**： 提示级别的阈值。 **约束限制**： 不涉及。 **取值范围**： [-1.7976931348623157e+108, 1.7976931348623157e+108]           **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
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

