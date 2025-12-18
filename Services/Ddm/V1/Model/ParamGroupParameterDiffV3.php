<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParamGroupParameterDiffV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParamGroupParameterDiffV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：  参数名称。  **参数范围**：  不涉及。
    * sourceValue  **参数解释**：  源参数值。  **参数范围**：  不涉及。
    * targetValue  **参数解释**：  目标参数值。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sourceValue' => 'string',
            'targetValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：  参数名称。  **参数范围**：  不涉及。
    * sourceValue  **参数解释**：  源参数值。  **参数范围**：  不涉及。
    * targetValue  **参数解释**：  目标参数值。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sourceValue' => null,
        'targetValue' => null
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
    * name  **参数解释**：  参数名称。  **参数范围**：  不涉及。
    * sourceValue  **参数解释**：  源参数值。  **参数范围**：  不涉及。
    * targetValue  **参数解释**：  目标参数值。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sourceValue' => 'source_value',
            'targetValue' => 'target_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：  参数名称。  **参数范围**：  不涉及。
    * sourceValue  **参数解释**：  源参数值。  **参数范围**：  不涉及。
    * targetValue  **参数解释**：  目标参数值。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sourceValue' => 'setSourceValue',
            'targetValue' => 'setTargetValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：  参数名称。  **参数范围**：  不涉及。
    * sourceValue  **参数解释**：  源参数值。  **参数范围**：  不涉及。
    * targetValue  **参数解释**：  目标参数值。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sourceValue' => 'getSourceValue',
            'targetValue' => 'getTargetValue'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sourceValue'] = isset($data['sourceValue']) ? $data['sourceValue'] : null;
        $this->container['targetValue'] = isset($data['targetValue']) ? $data['targetValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceValue']) && (mb_strlen($this->container['sourceValue']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sourceValue', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sourceValue']) && (mb_strlen($this->container['sourceValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetValue']) && (mb_strlen($this->container['targetValue']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'targetValue', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['targetValue']) && (mb_strlen($this->container['targetValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetValue', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  **参数解释**：  参数名称。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**：  参数名称。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sourceValue
    *  **参数解释**：  源参数值。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSourceValue()
    {
        return $this->container['sourceValue'];
    }

    /**
    * Sets sourceValue
    *
    * @param string|null $sourceValue **参数解释**：  源参数值。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setSourceValue($sourceValue)
    {
        $this->container['sourceValue'] = $sourceValue;
        return $this;
    }

    /**
    * Gets targetValue
    *  **参数解释**：  目标参数值。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getTargetValue()
    {
        return $this->container['targetValue'];
    }

    /**
    * Sets targetValue
    *
    * @param string|null $targetValue **参数解释**：  目标参数值。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setTargetValue($targetValue)
    {
        $this->container['targetValue'] = $targetValue;
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

