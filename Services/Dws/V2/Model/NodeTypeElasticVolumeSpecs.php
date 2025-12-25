<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeTypeElasticVolumeSpecs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeTypeElasticVolumeSpecs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 云盘存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * step  **参数解释**： 云盘容量调整步长。 **取值范围**： 不涉及。
    * minSize  **参数解释**： 云盘支持的最小容量。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 云盘支持的最大容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'step' => 'int',
            'minSize' => 'int',
            'maxSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 云盘存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * step  **参数解释**： 云盘容量调整步长。 **取值范围**： 不涉及。
    * minSize  **参数解释**： 云盘支持的最小容量。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 云盘支持的最大容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'step' => 'int32',
        'minSize' => null,
        'maxSize' => null
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
    * type  **参数解释**： 云盘存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * step  **参数解释**： 云盘容量调整步长。 **取值范围**： 不涉及。
    * minSize  **参数解释**： 云盘支持的最小容量。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 云盘支持的最大容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'step' => 'step',
            'minSize' => 'min_size',
            'maxSize' => 'max_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 云盘存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * step  **参数解释**： 云盘容量调整步长。 **取值范围**： 不涉及。
    * minSize  **参数解释**： 云盘支持的最小容量。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 云盘支持的最大容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'step' => 'setStep',
            'minSize' => 'setMinSize',
            'maxSize' => 'setMaxSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 云盘存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    * step  **参数解释**： 云盘容量调整步长。 **取值范围**： 不涉及。
    * minSize  **参数解释**： 云盘支持的最小容量。 **取值范围**： 不涉及。
    * maxSize  **参数解释**： 云盘支持的最大容量。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'step' => 'getStep',
            'minSize' => 'getMinSize',
            'maxSize' => 'getMaxSize'
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
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['minSize'] = isset($data['minSize']) ? $data['minSize'] : null;
        $this->container['maxSize'] = isset($data['maxSize']) ? $data['maxSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['step'] === null) {
            $invalidProperties[] = "'step' can't be null";
        }
        if ($this->container['minSize'] === null) {
            $invalidProperties[] = "'minSize' can't be null";
        }
        if ($this->container['maxSize'] === null) {
            $invalidProperties[] = "'maxSize' can't be null";
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
    * Gets type
    *  **参数解释**： 云盘存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
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
    * @param string $type **参数解释**： 云盘存储类型。 **取值范围**： - SATA：普通IO。 - SAS：高IO。 - SSD：超高IO。 - ESSD：极速型SSD。 - GPSSD：通用型SSD。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets step
    *  **参数解释**： 云盘容量调整步长。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param int $step **参数解释**： 云盘容量调整步长。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
        return $this;
    }

    /**
    * Gets minSize
    *  **参数解释**： 云盘支持的最小容量。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getMinSize()
    {
        return $this->container['minSize'];
    }

    /**
    * Sets minSize
    *
    * @param int $minSize **参数解释**： 云盘支持的最小容量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinSize($minSize)
    {
        $this->container['minSize'] = $minSize;
        return $this;
    }

    /**
    * Gets maxSize
    *  **参数解释**： 云盘支持的最大容量。 **取值范围**： 不涉及。
    *
    * @return int
    */
    public function getMaxSize()
    {
        return $this->container['maxSize'];
    }

    /**
    * Sets maxSize
    *
    * @param int $maxSize **参数解释**： 云盘支持的最大容量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxSize($maxSize)
    {
        $this->container['maxSize'] = $maxSize;
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

