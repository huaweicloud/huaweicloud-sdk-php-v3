<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * percentage  **参数解释**： 已使用百分比。 **取值范围**： 不涉及。
    * id  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 节点名。 **取值范围**： 不涉及。
    * diskCapacity  **参数解释**： 磁盘规格。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 已使用量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'percentage' => 'string',
            'id' => 'string',
            'name' => 'string',
            'diskCapacity' => 'string',
            'diskUsed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * percentage  **参数解释**： 已使用百分比。 **取值范围**： 不涉及。
    * id  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 节点名。 **取值范围**： 不涉及。
    * diskCapacity  **参数解释**： 磁盘规格。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 已使用量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'percentage' => null,
        'id' => null,
        'name' => null,
        'diskCapacity' => null,
        'diskUsed' => null
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
    * percentage  **参数解释**： 已使用百分比。 **取值范围**： 不涉及。
    * id  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 节点名。 **取值范围**： 不涉及。
    * diskCapacity  **参数解释**： 磁盘规格。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 已使用量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'percentage' => 'percentage',
            'id' => 'id',
            'name' => 'name',
            'diskCapacity' => 'disk_capacity',
            'diskUsed' => 'disk_used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * percentage  **参数解释**： 已使用百分比。 **取值范围**： 不涉及。
    * id  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 节点名。 **取值范围**： 不涉及。
    * diskCapacity  **参数解释**： 磁盘规格。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 已使用量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'percentage' => 'setPercentage',
            'id' => 'setId',
            'name' => 'setName',
            'diskCapacity' => 'setDiskCapacity',
            'diskUsed' => 'setDiskUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * percentage  **参数解释**： 已使用百分比。 **取值范围**： 不涉及。
    * id  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 节点名。 **取值范围**： 不涉及。
    * diskCapacity  **参数解释**： 磁盘规格。 **取值范围**： 不涉及。
    * diskUsed  **参数解释**： 已使用量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'percentage' => 'getPercentage',
            'id' => 'getId',
            'name' => 'getName',
            'diskCapacity' => 'getDiskCapacity',
            'diskUsed' => 'getDiskUsed'
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
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['diskCapacity'] = isset($data['diskCapacity']) ? $data['diskCapacity'] : null;
        $this->container['diskUsed'] = isset($data['diskUsed']) ? $data['diskUsed'] : null;
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
    * Gets percentage
    *  **参数解释**： 已使用百分比。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
    * Sets percentage
    *
    * @param string|null $percentage **参数解释**： 已使用百分比。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 节点ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 节点名。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 节点名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets diskCapacity
    *  **参数解释**： 磁盘规格。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDiskCapacity()
    {
        return $this->container['diskCapacity'];
    }

    /**
    * Sets diskCapacity
    *
    * @param string|null $diskCapacity **参数解释**： 磁盘规格。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskCapacity($diskCapacity)
    {
        $this->container['diskCapacity'] = $diskCapacity;
        return $this;
    }

    /**
    * Gets diskUsed
    *  **参数解释**： 已使用量。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDiskUsed()
    {
        return $this->container['diskUsed'];
    }

    /**
    * Sets diskUsed
    *
    * @param string|null $diskUsed **参数解释**： 已使用量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskUsed($diskUsed)
    {
        $this->container['diskUsed'] = $diskUsed;
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

