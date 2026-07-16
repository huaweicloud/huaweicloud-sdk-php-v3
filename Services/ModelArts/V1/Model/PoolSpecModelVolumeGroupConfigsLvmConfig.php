<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolSpecModelVolumeGroupConfigsLvmConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolSpecModel_volumeGroupConfigs_lvmConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lvType  **参数解释**：LVM写入模式 **取值范围**：可选项如下： - linear：线性模式。 - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lvType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lvType  **参数解释**：LVM写入模式 **取值范围**：可选项如下： - linear：线性模式。 - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lvType' => null
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
    * lvType  **参数解释**：LVM写入模式 **取值范围**：可选项如下： - linear：线性模式。 - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lvType' => 'lvType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lvType  **参数解释**：LVM写入模式 **取值范围**：可选项如下： - linear：线性模式。 - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能。
    *
    * @var string[]
    */
    protected static $setters = [
            'lvType' => 'setLvType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lvType  **参数解释**：LVM写入模式 **取值范围**：可选项如下： - linear：线性模式。 - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能。
    *
    * @var string[]
    */
    protected static $getters = [
            'lvType' => 'getLvType'
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
        $this->container['lvType'] = isset($data['lvType']) ? $data['lvType'] : null;
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
    * Gets lvType
    *  **参数解释**：LVM写入模式 **取值范围**：可选项如下： - linear：线性模式。 - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能。
    *
    * @return string|null
    */
    public function getLvType()
    {
        return $this->container['lvType'];
    }

    /**
    * Sets lvType
    *
    * @param string|null $lvType **参数解释**：LVM写入模式 **取值范围**：可选项如下： - linear：线性模式。 - striped：条带模式，使用多块磁盘组成条带模式，能够提升磁盘性能。
    *
    * @return $this
    */
    public function setLvType($lvType)
    {
        $this->container['lvType'] = $lvType;
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

