<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorCategoryDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorCategoryDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * computeFlavorGroups  **参数解释**: 计算规格组列表。 **取值范围**: 不涉及。
    * volumeFlavors  **参数解释**: 存储规格列表。 **取值范围**: 不涉及。
    * decServiceFlavors  **参数解释**: DeC专属规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'computeFlavorGroups' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ComputeFlavorGroupDetail[]',
            'volumeFlavors' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\VolumeFlavorItemDetail[]',
            'decServiceFlavors' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DecServiceFlavorItemDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * computeFlavorGroups  **参数解释**: 计算规格组列表。 **取值范围**: 不涉及。
    * volumeFlavors  **参数解释**: 存储规格列表。 **取值范围**: 不涉及。
    * decServiceFlavors  **参数解释**: DeC专属规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'computeFlavorGroups' => null,
        'volumeFlavors' => null,
        'decServiceFlavors' => null
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
    * computeFlavorGroups  **参数解释**: 计算规格组列表。 **取值范围**: 不涉及。
    * volumeFlavors  **参数解释**: 存储规格列表。 **取值范围**: 不涉及。
    * decServiceFlavors  **参数解释**: DeC专属规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'computeFlavorGroups' => 'compute_flavor_groups',
            'volumeFlavors' => 'volume_flavors',
            'decServiceFlavors' => 'dec_service_flavors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * computeFlavorGroups  **参数解释**: 计算规格组列表。 **取值范围**: 不涉及。
    * volumeFlavors  **参数解释**: 存储规格列表。 **取值范围**: 不涉及。
    * decServiceFlavors  **参数解释**: DeC专属规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'computeFlavorGroups' => 'setComputeFlavorGroups',
            'volumeFlavors' => 'setVolumeFlavors',
            'decServiceFlavors' => 'setDecServiceFlavors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * computeFlavorGroups  **参数解释**: 计算规格组列表。 **取值范围**: 不涉及。
    * volumeFlavors  **参数解释**: 存储规格列表。 **取值范围**: 不涉及。
    * decServiceFlavors  **参数解释**: DeC专属规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'computeFlavorGroups' => 'getComputeFlavorGroups',
            'volumeFlavors' => 'getVolumeFlavors',
            'decServiceFlavors' => 'getDecServiceFlavors'
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
        $this->container['computeFlavorGroups'] = isset($data['computeFlavorGroups']) ? $data['computeFlavorGroups'] : null;
        $this->container['volumeFlavors'] = isset($data['volumeFlavors']) ? $data['volumeFlavors'] : null;
        $this->container['decServiceFlavors'] = isset($data['decServiceFlavors']) ? $data['decServiceFlavors'] : null;
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
    * Gets computeFlavorGroups
    *  **参数解释**: 计算规格组列表。 **取值范围**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ComputeFlavorGroupDetail[]|null
    */
    public function getComputeFlavorGroups()
    {
        return $this->container['computeFlavorGroups'];
    }

    /**
    * Sets computeFlavorGroups
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ComputeFlavorGroupDetail[]|null $computeFlavorGroups **参数解释**: 计算规格组列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setComputeFlavorGroups($computeFlavorGroups)
    {
        $this->container['computeFlavorGroups'] = $computeFlavorGroups;
        return $this;
    }

    /**
    * Gets volumeFlavors
    *  **参数解释**: 存储规格列表。 **取值范围**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\VolumeFlavorItemDetail[]|null
    */
    public function getVolumeFlavors()
    {
        return $this->container['volumeFlavors'];
    }

    /**
    * Sets volumeFlavors
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\VolumeFlavorItemDetail[]|null $volumeFlavors **参数解释**: 存储规格列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setVolumeFlavors($volumeFlavors)
    {
        $this->container['volumeFlavors'] = $volumeFlavors;
        return $this;
    }

    /**
    * Gets decServiceFlavors
    *  **参数解释**: DeC专属规格列表。 **取值范围**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DecServiceFlavorItemDetail[]|null
    */
    public function getDecServiceFlavors()
    {
        return $this->container['decServiceFlavors'];
    }

    /**
    * Sets decServiceFlavors
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DecServiceFlavorItemDetail[]|null $decServiceFlavors **参数解释**: DeC专属规格列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDecServiceFlavors($decServiceFlavors)
    {
        $this->container['decServiceFlavors'] = $decServiceFlavors;
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

