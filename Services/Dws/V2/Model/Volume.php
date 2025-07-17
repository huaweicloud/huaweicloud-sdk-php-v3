<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Volume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Volume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volume  **参数解释**： 磁盘名称。 **约束限制**： 不涉及。 **取值范围**： - SSD：超高IO  **默认取值**： 不涉及。
    * capacity  **参数解释**： 磁盘容量，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volume' => 'string',
            'capacity' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volume  **参数解释**： 磁盘名称。 **约束限制**： 不涉及。 **取值范围**： - SSD：超高IO  **默认取值**： 不涉及。
    * capacity  **参数解释**： 磁盘容量，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volume' => null,
        'capacity' => 'int32'
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
    * volume  **参数解释**： 磁盘名称。 **约束限制**： 不涉及。 **取值范围**： - SSD：超高IO  **默认取值**： 不涉及。
    * capacity  **参数解释**： 磁盘容量，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volume' => 'volume',
            'capacity' => 'capacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volume  **参数解释**： 磁盘名称。 **约束限制**： 不涉及。 **取值范围**： - SSD：超高IO  **默认取值**： 不涉及。
    * capacity  **参数解释**： 磁盘容量，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'volume' => 'setVolume',
            'capacity' => 'setCapacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volume  **参数解释**： 磁盘名称。 **约束限制**： 不涉及。 **取值范围**： - SSD：超高IO  **默认取值**： 不涉及。
    * capacity  **参数解释**： 磁盘容量，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'volume' => 'getVolume',
            'capacity' => 'getCapacity'
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
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
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
    * Gets volume
    *  **参数解释**： 磁盘名称。 **约束限制**： 不涉及。 **取值范围**： - SSD：超高IO  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param string $volume **参数解释**： 磁盘名称。 **约束限制**： 不涉及。 **取值范围**： - SSD：超高IO  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets capacity
    *  **参数解释**： 磁盘容量，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param int|null $capacity **参数解释**： 磁盘容量，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
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

