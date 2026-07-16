<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AscendInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AscendInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * npu  **参数解释**：NPU数量。 **取值范围**：不涉及。
    * npuMemory  **参数解释**：NPU内存。 **取值范围**：不涉及。
    * type  **参数解释**：NPU类型。 **取值范围**：不涉及。
    * chip  **参数解释**：NPU设备数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'npu' => 'int',
            'npuMemory' => 'string',
            'type' => 'string',
            'chip' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * npu  **参数解释**：NPU数量。 **取值范围**：不涉及。
    * npuMemory  **参数解释**：NPU内存。 **取值范围**：不涉及。
    * type  **参数解释**：NPU类型。 **取值范围**：不涉及。
    * chip  **参数解释**：NPU设备数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'npu' => 'int32',
        'npuMemory' => null,
        'type' => null,
        'chip' => 'int32'
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
    * npu  **参数解释**：NPU数量。 **取值范围**：不涉及。
    * npuMemory  **参数解释**：NPU内存。 **取值范围**：不涉及。
    * type  **参数解释**：NPU类型。 **取值范围**：不涉及。
    * chip  **参数解释**：NPU设备数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'npu' => 'npu',
            'npuMemory' => 'npu_memory',
            'type' => 'type',
            'chip' => 'chip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * npu  **参数解释**：NPU数量。 **取值范围**：不涉及。
    * npuMemory  **参数解释**：NPU内存。 **取值范围**：不涉及。
    * type  **参数解释**：NPU类型。 **取值范围**：不涉及。
    * chip  **参数解释**：NPU设备数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'npu' => 'setNpu',
            'npuMemory' => 'setNpuMemory',
            'type' => 'setType',
            'chip' => 'setChip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * npu  **参数解释**：NPU数量。 **取值范围**：不涉及。
    * npuMemory  **参数解释**：NPU内存。 **取值范围**：不涉及。
    * type  **参数解释**：NPU类型。 **取值范围**：不涉及。
    * chip  **参数解释**：NPU设备数。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'npu' => 'getNpu',
            'npuMemory' => 'getNpuMemory',
            'type' => 'getType',
            'chip' => 'getChip'
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
        $this->container['npu'] = isset($data['npu']) ? $data['npu'] : null;
        $this->container['npuMemory'] = isset($data['npuMemory']) ? $data['npuMemory'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['chip'] = isset($data['chip']) ? $data['chip'] : null;
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
    * Gets npu
    *  **参数解释**：NPU数量。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getNpu()
    {
        return $this->container['npu'];
    }

    /**
    * Sets npu
    *
    * @param int|null $npu **参数解释**：NPU数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNpu($npu)
    {
        $this->container['npu'] = $npu;
        return $this;
    }

    /**
    * Gets npuMemory
    *  **参数解释**：NPU内存。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getNpuMemory()
    {
        return $this->container['npuMemory'];
    }

    /**
    * Sets npuMemory
    *
    * @param string|null $npuMemory **参数解释**：NPU内存。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNpuMemory($npuMemory)
    {
        $this->container['npuMemory'] = $npuMemory;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：NPU类型。 **取值范围**：不涉及。
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
    * @param string|null $type **参数解释**：NPU类型。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets chip
    *  **参数解释**：NPU设备数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getChip()
    {
        return $this->container['chip'];
    }

    /**
    * Sets chip
    *
    * @param int|null $chip **参数解释**：NPU设备数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setChip($chip)
    {
        $this->container['chip'] = $chip;
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

