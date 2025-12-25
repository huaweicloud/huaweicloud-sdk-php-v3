<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorVolumeNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorVolumeNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeType  **参数解释**： 节点使用存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * volumeNum  **参数解释**： 节点使用的磁盘数量。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 节点去除副本后的有效容量。 **取值范围**： 不涉及。
    * volumeSize  **参数解释**： 节点存的单盘容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeType' => 'string',
            'volumeNum' => 'int',
            'capacity' => 'int',
            'volumeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeType  **参数解释**： 节点使用存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * volumeNum  **参数解释**： 节点使用的磁盘数量。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 节点去除副本后的有效容量。 **取值范围**： 不涉及。
    * volumeSize  **参数解释**： 节点存的单盘容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeType' => null,
        'volumeNum' => 'int32',
        'capacity' => 'int32',
        'volumeSize' => 'int32'
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
    * volumeType  **参数解释**： 节点使用存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * volumeNum  **参数解释**： 节点使用的磁盘数量。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 节点去除副本后的有效容量。 **取值范围**： 不涉及。
    * volumeSize  **参数解释**： 节点存的单盘容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeType' => 'volume_type',
            'volumeNum' => 'volume_num',
            'capacity' => 'capacity',
            'volumeSize' => 'volume_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeType  **参数解释**： 节点使用存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * volumeNum  **参数解释**： 节点使用的磁盘数量。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 节点去除副本后的有效容量。 **取值范围**： 不涉及。
    * volumeSize  **参数解释**： 节点存的单盘容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeType' => 'setVolumeType',
            'volumeNum' => 'setVolumeNum',
            'capacity' => 'setCapacity',
            'volumeSize' => 'setVolumeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeType  **参数解释**： 节点使用存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * volumeNum  **参数解释**： 节点使用的磁盘数量。 **取值范围**： 不涉及。
    * capacity  **参数解释**： 节点去除副本后的有效容量。 **取值范围**： 不涉及。
    * volumeSize  **参数解释**： 节点存的单盘容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeType' => 'getVolumeType',
            'volumeNum' => 'getVolumeNum',
            'capacity' => 'getCapacity',
            'volumeSize' => 'getVolumeSize'
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
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['volumeNum'] = isset($data['volumeNum']) ? $data['volumeNum'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumeType'] === null) {
            $invalidProperties[] = "'volumeType' can't be null";
        }
        if ($this->container['volumeNum'] === null) {
            $invalidProperties[] = "'volumeNum' can't be null";
        }
        if ($this->container['capacity'] === null) {
            $invalidProperties[] = "'capacity' can't be null";
        }
        if ($this->container['volumeSize'] === null) {
            $invalidProperties[] = "'volumeSize' can't be null";
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
    * Gets volumeType
    *  **参数解释**： 节点使用存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    *
    * @return string
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string $volumeType **参数解释**： 节点使用存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets volumeNum
    *  **参数解释**： 节点使用的磁盘数量。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getVolumeNum()
    {
        return $this->container['volumeNum'];
    }

    /**
    * Sets volumeNum
    *
    * @param int $volumeNum **参数解释**： 节点使用的磁盘数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVolumeNum($volumeNum)
    {
        $this->container['volumeNum'] = $volumeNum;
        return $this;
    }

    /**
    * Gets capacity
    *  **参数解释**： 节点去除副本后的有效容量。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param int $capacity **参数解释**： 节点去除副本后的有效容量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets volumeSize
    *  **参数解释**： 节点存的单盘容量。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int $volumeSize **参数解释**： 节点存的单盘容量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
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

