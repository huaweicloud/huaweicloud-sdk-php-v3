<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及
    * volumeNames  **参数解释**： 磁盘类型。 **取值范围**： - SATA：普通IO - SAS：高IO - SSD：超高IO - ESSD：极速型SSD
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string',
            'volumeNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及
    * volumeNames  **参数解释**： 磁盘类型。 **取值范围**： - SATA：普通IO - SAS：高IO - SSD：超高IO - ESSD：极速型SSD
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'volumeNames' => null
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
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及
    * volumeNames  **参数解释**： 磁盘类型。 **取值范围**： - SATA：普通IO - SAS：高IO - SSD：超高IO - ESSD：极速型SSD
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availabilityZone',
            'volumeNames' => 'volumeNames'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及
    * volumeNames  **参数解释**： 磁盘类型。 **取值范围**： - SATA：普通IO - SAS：高IO - SSD：超高IO - ESSD：极速型SSD
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'volumeNames' => 'setVolumeNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  **参数解释**： 可用区。 **取值范围**： 不涉及
    * volumeNames  **参数解释**： 磁盘类型。 **取值范围**： - SATA：普通IO - SAS：高IO - SSD：超高IO - ESSD：极速型SSD
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'volumeNames' => 'getVolumeNames'
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['volumeNames'] = isset($data['volumeNames']) ? $data['volumeNames'] : null;
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
    * Gets availabilityZone
    *  **参数解释**： 可用区。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释**： 可用区。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets volumeNames
    *  **参数解释**： 磁盘类型。 **取值范围**： - SATA：普通IO - SAS：高IO - SSD：超高IO - ESSD：极速型SSD
    *
    * @return string[]|null
    */
    public function getVolumeNames()
    {
        return $this->container['volumeNames'];
    }

    /**
    * Sets volumeNames
    *
    * @param string[]|null $volumeNames **参数解释**： 磁盘类型。 **取值范围**： - SATA：普通IO - SAS：高IO - SSD：超高IO - ESSD：极速型SSD
    *
    * @return $this
    */
    public function setVolumeNames($volumeNames)
    {
        $this->container['volumeNames'] = $volumeNames;
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

