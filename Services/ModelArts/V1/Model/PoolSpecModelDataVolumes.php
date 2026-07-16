<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolSpecModelDataVolumes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolSpecModel_dataVolumes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeType  **参数解释**：磁盘类型，具体内容可参考磁盘类型及性能介绍。 **取值范围**：可选值如下： - SSD：超高IO硬盘 - GPSSD：通用型SSD - SAS：高IO硬盘
    * size  **参数解释**：磁盘大小，单位为Gi。 **取值范围**：不涉及。
    * count  **参数解释**：磁盘个数。 **取值范围**：不涉及。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeType' => 'string',
            'size' => 'string',
            'count' => 'string',
            'extendParams' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecModelDataVolumesExtendParams'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeType  **参数解释**：磁盘类型，具体内容可参考磁盘类型及性能介绍。 **取值范围**：可选值如下： - SSD：超高IO硬盘 - GPSSD：通用型SSD - SAS：高IO硬盘
    * size  **参数解释**：磁盘大小，单位为Gi。 **取值范围**：不涉及。
    * count  **参数解释**：磁盘个数。 **取值范围**：不涉及。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeType' => null,
        'size' => null,
        'count' => null,
        'extendParams' => null
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
    * volumeType  **参数解释**：磁盘类型，具体内容可参考磁盘类型及性能介绍。 **取值范围**：可选值如下： - SSD：超高IO硬盘 - GPSSD：通用型SSD - SAS：高IO硬盘
    * size  **参数解释**：磁盘大小，单位为Gi。 **取值范围**：不涉及。
    * count  **参数解释**：磁盘个数。 **取值范围**：不涉及。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeType' => 'volumeType',
            'size' => 'size',
            'count' => 'count',
            'extendParams' => 'extendParams'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeType  **参数解释**：磁盘类型，具体内容可参考磁盘类型及性能介绍。 **取值范围**：可选值如下： - SSD：超高IO硬盘 - GPSSD：通用型SSD - SAS：高IO硬盘
    * size  **参数解释**：磁盘大小，单位为Gi。 **取值范围**：不涉及。
    * count  **参数解释**：磁盘个数。 **取值范围**：不涉及。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeType' => 'setVolumeType',
            'size' => 'setSize',
            'count' => 'setCount',
            'extendParams' => 'setExtendParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeType  **参数解释**：磁盘类型，具体内容可参考磁盘类型及性能介绍。 **取值范围**：可选值如下： - SSD：超高IO硬盘 - GPSSD：通用型SSD - SAS：高IO硬盘
    * size  **参数解释**：磁盘大小，单位为Gi。 **取值范围**：不涉及。
    * count  **参数解释**：磁盘个数。 **取值范围**：不涉及。
    * extendParams  extendParams
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeType' => 'getVolumeType',
            'size' => 'getSize',
            'count' => 'getCount',
            'extendParams' => 'getExtendParams'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['extendParams'] = isset($data['extendParams']) ? $data['extendParams'] : null;
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
    * Gets volumeType
    *  **参数解释**：磁盘类型，具体内容可参考磁盘类型及性能介绍。 **取值范围**：可选值如下： - SSD：超高IO硬盘 - GPSSD：通用型SSD - SAS：高IO硬盘
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType **参数解释**：磁盘类型，具体内容可参考磁盘类型及性能介绍。 **取值范围**：可选值如下： - SSD：超高IO硬盘 - GPSSD：通用型SSD - SAS：高IO硬盘
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**：磁盘大小，单位为Gi。 **取值范围**：不涉及。
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
    * @param string|null $size **参数解释**：磁盘大小，单位为Gi。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：磁盘个数。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param string|null $count **参数解释**：磁盘个数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets extendParams
    *  extendParams
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecModelDataVolumesExtendParams|null
    */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
    * Sets extendParams
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecModelDataVolumesExtendParams|null $extendParams extendParams
    *
    * @return $this
    */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;
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

