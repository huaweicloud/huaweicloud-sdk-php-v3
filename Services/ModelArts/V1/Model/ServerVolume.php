<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  **参数解释**：EVS盘大小。表示分配给系统盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 1024 GB **默认取值**：不涉及。
    * type  **参数解释**：存储类型。表示系统盘或数据盘。 **约束限制**：不涉及。 **取值范围**： - ROOT：系统盘 - DATA：数据盘  **默认取值**：不涉及。
    * evsType  **参数解释**：EVS盘类型。表示EVS盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘  **默认取值**：不涉及。
    * evsId  **参数解释**：EVS盘的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'type' => 'string',
            'evsType' => 'string',
            'evsId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  **参数解释**：EVS盘大小。表示分配给系统盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 1024 GB **默认取值**：不涉及。
    * type  **参数解释**：存储类型。表示系统盘或数据盘。 **约束限制**：不涉及。 **取值范围**： - ROOT：系统盘 - DATA：数据盘  **默认取值**：不涉及。
    * evsType  **参数解释**：EVS盘类型。表示EVS盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘  **默认取值**：不涉及。
    * evsId  **参数解释**：EVS盘的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => 'int32',
        'type' => null,
        'evsType' => null,
        'evsId' => null
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
    * size  **参数解释**：EVS盘大小。表示分配给系统盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 1024 GB **默认取值**：不涉及。
    * type  **参数解释**：存储类型。表示系统盘或数据盘。 **约束限制**：不涉及。 **取值范围**： - ROOT：系统盘 - DATA：数据盘  **默认取值**：不涉及。
    * evsType  **参数解释**：EVS盘类型。表示EVS盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘  **默认取值**：不涉及。
    * evsId  **参数解释**：EVS盘的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'type' => 'type',
            'evsType' => 'evs_type',
            'evsId' => 'evs_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  **参数解释**：EVS盘大小。表示分配给系统盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 1024 GB **默认取值**：不涉及。
    * type  **参数解释**：存储类型。表示系统盘或数据盘。 **约束限制**：不涉及。 **取值范围**： - ROOT：系统盘 - DATA：数据盘  **默认取值**：不涉及。
    * evsType  **参数解释**：EVS盘类型。表示EVS盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘  **默认取值**：不涉及。
    * evsId  **参数解释**：EVS盘的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'type' => 'setType',
            'evsType' => 'setEvsType',
            'evsId' => 'setEvsId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  **参数解释**：EVS盘大小。表示分配给系统盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 1024 GB **默认取值**：不涉及。
    * type  **参数解释**：存储类型。表示系统盘或数据盘。 **约束限制**：不涉及。 **取值范围**： - ROOT：系统盘 - DATA：数据盘  **默认取值**：不涉及。
    * evsType  **参数解释**：EVS盘类型。表示EVS盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘  **默认取值**：不涉及。
    * evsId  **参数解释**：EVS盘的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'type' => 'getType',
            'evsType' => 'getEvsType',
            'evsId' => 'getEvsId'
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
    const TYPE_ROOT = 'ROOT';
    const TYPE_DATA = 'DATA';
    const EVS_TYPE_ESSD = 'ESSD';
    const EVS_TYPE_GPSSD = 'GPSSD';
    const EVS_TYPE_SAS = 'SAS';
    const EVS_TYPE_SATA = 'SATA';
    const EVS_TYPE_SSD = 'SSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ROOT,
            self::TYPE_DATA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEvsTypeAllowableValues()
    {
        return [
            self::EVS_TYPE_ESSD,
            self::EVS_TYPE_GPSSD,
            self::EVS_TYPE_SAS,
            self::EVS_TYPE_SATA,
            self::EVS_TYPE_SSD,
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
        $this->container['evsType'] = isset($data['evsType']) ? $data['evsType'] : null;
        $this->container['evsId'] = isset($data['evsId']) ? $data['evsId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['size']) && ($this->container['size'] > 1024)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 100)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 100.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEvsTypeAllowableValues();
                if (!is_null($this->container['evsType']) && !in_array($this->container['evsType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'evsType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['evsId']) && (mb_strlen($this->container['evsId']) > 64)) {
                $invalidProperties[] = "invalid value for 'evsId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['evsId']) && (mb_strlen($this->container['evsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'evsId', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**：EVS盘大小。表示分配给系统盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 1024 GB **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**：EVS盘大小。表示分配给系统盘的存储空间大小。 **约束限制**：不涉及。 **取值范围**：100 - 1024 GB **默认取值**：不涉及。
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
    *  **参数解释**：存储类型。表示系统盘或数据盘。 **约束限制**：不涉及。 **取值范围**： - ROOT：系统盘 - DATA：数据盘  **默认取值**：不涉及。
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
    * @param string|null $type **参数解释**：存储类型。表示系统盘或数据盘。 **约束限制**：不涉及。 **取值范围**： - ROOT：系统盘 - DATA：数据盘  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets evsType
    *  **参数解释**：EVS盘类型。表示EVS盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getEvsType()
    {
        return $this->container['evsType'];
    }

    /**
    * Sets evsType
    *
    * @param string|null $evsType **参数解释**：EVS盘类型。表示EVS盘的存储类型。 **约束限制**：不涉及。 **取值范围**： - ESSD：极速型SSD云硬盘 - GPSSD：通用型SSD云硬盘 - SAS：高IO云硬盘 - SATA：普通IO云硬盘 - SSD：超高IO云硬盘  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setEvsType($evsType)
    {
        $this->container['evsType'] = $evsType;
        return $this;
    }

    /**
    * Gets evsId
    *  **参数解释**：EVS盘的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return string|null
    */
    public function getEvsId()
    {
        return $this->container['evsId'];
    }

    /**
    * Sets evsId
    *
    * @param string|null $evsId **参数解释**：EVS盘的ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    *
    * @return $this
    */
    public function setEvsId($evsId)
    {
        $this->container['evsId'] = $evsId;
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

