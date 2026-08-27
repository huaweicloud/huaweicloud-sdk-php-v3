<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceFlavorXpu implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceFlavorXpu';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：卡类型。 **取值范围**：不涉及。
    * size  **参数解释**：芯片数量。reseverd for backwards compatibility **取值范围**：不涉及。
    * memory  **参数解释**：单卡显存大小。 **取值范围**：不涉及。
    * card  **参数解释**：卡数量。 **取值范围**：不涉及。
    * chip  **参数解释**：芯片数量。值同size字段一致。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'size' => 'string',
            'memory' => 'string',
            'card' => 'string',
            'chip' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：卡类型。 **取值范围**：不涉及。
    * size  **参数解释**：芯片数量。reseverd for backwards compatibility **取值范围**：不涉及。
    * memory  **参数解释**：单卡显存大小。 **取值范围**：不涉及。
    * card  **参数解释**：卡数量。 **取值范围**：不涉及。
    * chip  **参数解释**：芯片数量。值同size字段一致。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'size' => null,
        'memory' => null,
        'card' => null,
        'chip' => null
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
    * type  **参数解释**：卡类型。 **取值范围**：不涉及。
    * size  **参数解释**：芯片数量。reseverd for backwards compatibility **取值范围**：不涉及。
    * memory  **参数解释**：单卡显存大小。 **取值范围**：不涉及。
    * card  **参数解释**：卡数量。 **取值范围**：不涉及。
    * chip  **参数解释**：芯片数量。值同size字段一致。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'size' => 'size',
            'memory' => 'memory',
            'card' => 'card',
            'chip' => 'chip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：卡类型。 **取值范围**：不涉及。
    * size  **参数解释**：芯片数量。reseverd for backwards compatibility **取值范围**：不涉及。
    * memory  **参数解释**：单卡显存大小。 **取值范围**：不涉及。
    * card  **参数解释**：卡数量。 **取值范围**：不涉及。
    * chip  **参数解释**：芯片数量。值同size字段一致。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'size' => 'setSize',
            'memory' => 'setMemory',
            'card' => 'setCard',
            'chip' => 'setChip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：卡类型。 **取值范围**：不涉及。
    * size  **参数解释**：芯片数量。reseverd for backwards compatibility **取值范围**：不涉及。
    * memory  **参数解释**：单卡显存大小。 **取值范围**：不涉及。
    * card  **参数解释**：卡数量。 **取值范围**：不涉及。
    * chip  **参数解释**：芯片数量。值同size字段一致。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'size' => 'getSize',
            'memory' => 'getMemory',
            'card' => 'getCard',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
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
    * Gets type
    *  **参数解释**：卡类型。 **取值范围**：不涉及。
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
    * @param string|null $type **参数解释**：卡类型。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**：芯片数量。reseverd for backwards compatibility **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size **参数解释**：芯片数量。reseverd for backwards compatibility **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets memory
    *  **参数解释**：单卡显存大小。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param string|null $memory **参数解释**：单卡显存大小。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets card
    *  **参数解释**：卡数量。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
    * Sets card
    *
    * @param string|null $card **参数解释**：卡数量。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCard($card)
    {
        $this->container['card'] = $card;
        return $this;
    }

    /**
    * Gets chip
    *  **参数解释**：芯片数量。值同size字段一致。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getChip()
    {
        return $this->container['chip'];
    }

    /**
    * Sets chip
    *
    * @param string|null $chip **参数解释**：芯片数量。值同size字段一致。 **取值范围**：不涉及。
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

