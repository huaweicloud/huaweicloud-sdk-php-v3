<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerDataVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerDataVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  **参数解释**：数据盘大小。表示分配给数据盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 32768 GB **默认取值**：不涉及。
    * type  **参数解释**：系统盘类型。表示数据盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘 **默认取值**：不涉及。
    * count  **参数解释**：数据盘个数。表示为实例分配的数据盘数量。 **约束限制**：不涉及。 **取值范围**：1 - 8 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'type' => 'string',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  **参数解释**：数据盘大小。表示分配给数据盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 32768 GB **默认取值**：不涉及。
    * type  **参数解释**：系统盘类型。表示数据盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘 **默认取值**：不涉及。
    * count  **参数解释**：数据盘个数。表示为实例分配的数据盘数量。 **约束限制**：不涉及。 **取值范围**：1 - 8 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => 'int32',
        'type' => null,
        'count' => 'int32'
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
    * size  **参数解释**：数据盘大小。表示分配给数据盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 32768 GB **默认取值**：不涉及。
    * type  **参数解释**：系统盘类型。表示数据盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘 **默认取值**：不涉及。
    * count  **参数解释**：数据盘个数。表示为实例分配的数据盘数量。 **约束限制**：不涉及。 **取值范围**：1 - 8 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'type' => 'type',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  **参数解释**：数据盘大小。表示分配给数据盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 32768 GB **默认取值**：不涉及。
    * type  **参数解释**：系统盘类型。表示数据盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘 **默认取值**：不涉及。
    * count  **参数解释**：数据盘个数。表示为实例分配的数据盘数量。 **约束限制**：不涉及。 **取值范围**：1 - 8 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'type' => 'setType',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  **参数解释**：数据盘大小。表示分配给数据盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 32768 GB **默认取值**：不涉及。
    * type  **参数解释**：系统盘类型。表示数据盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘 **默认取值**：不涉及。
    * count  **参数解释**：数据盘个数。表示为实例分配的数据盘数量。 **约束限制**：不涉及。 **取值范围**：1 - 8 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'type' => 'getType',
            'count' => 'getCount'
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
    const TYPE_SSD = 'SSD';
    const TYPE_SAS = 'SAS';
    const TYPE_SATA = 'SATA';
    const TYPE_GPSSD = 'GPSSD';
    const TYPE_ESSD = 'ESSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SSD,
            self::TYPE_SAS,
            self::TYPE_SATA,
            self::TYPE_GPSSD,
            self::TYPE_ESSD,
        ];
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 32768)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 32768.";
            }
            if (($this->container['size'] < 100)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 100.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
            if (($this->container['count'] > 8)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 8.";
            }
            if (($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
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
    * Gets size
    *  **参数解释**：数据盘大小。表示分配给数据盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 32768 GB **默认取值**：不涉及。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size **参数解释**：数据盘大小。表示分配给数据盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 32768 GB **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：系统盘类型。表示数据盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘 **默认取值**：不涉及。
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
    * @param string $type **参数解释**：系统盘类型。表示数据盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：数据盘个数。表示为实例分配的数据盘数量。 **约束限制**：不涉及。 **取值范围**：1 - 8 **默认取值**：不涉及。
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count **参数解释**：数据盘个数。表示为实例分配的数据盘数量。 **约束限制**：不涉及。 **取值范围**：1 - 8 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

