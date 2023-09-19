<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EsflavorsVersionsFlavorsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EsflavorsVersionsFlavorsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  实例的CPU核数。
    * ram  实例的内存大小。单位GB。
    * name  规格名称。
    * region  可用region。
    * diskrange  实例的硬盘容量范围。
    * availableAz  可用区。
    * flavorId  规格对应的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'int',
            'ram' => 'int',
            'name' => 'string',
            'region' => 'string',
            'diskrange' => 'string',
            'availableAz' => 'string',
            'flavorId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  实例的CPU核数。
    * ram  实例的内存大小。单位GB。
    * name  规格名称。
    * region  可用region。
    * diskrange  实例的硬盘容量范围。
    * availableAz  可用区。
    * flavorId  规格对应的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => null,
        'ram' => null,
        'name' => null,
        'region' => null,
        'diskrange' => null,
        'availableAz' => null,
        'flavorId' => null
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
    * cpu  实例的CPU核数。
    * ram  实例的内存大小。单位GB。
    * name  规格名称。
    * region  可用region。
    * diskrange  实例的硬盘容量范围。
    * availableAz  可用区。
    * flavorId  规格对应的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'ram' => 'ram',
            'name' => 'name',
            'region' => 'region',
            'diskrange' => 'diskrange',
            'availableAz' => 'availableAZ',
            'flavorId' => 'flavor_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  实例的CPU核数。
    * ram  实例的内存大小。单位GB。
    * name  规格名称。
    * region  可用region。
    * diskrange  实例的硬盘容量范围。
    * availableAz  可用区。
    * flavorId  规格对应的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'ram' => 'setRam',
            'name' => 'setName',
            'region' => 'setRegion',
            'diskrange' => 'setDiskrange',
            'availableAz' => 'setAvailableAz',
            'flavorId' => 'setFlavorId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  实例的CPU核数。
    * ram  实例的内存大小。单位GB。
    * name  规格名称。
    * region  可用region。
    * diskrange  实例的硬盘容量范围。
    * availableAz  可用区。
    * flavorId  规格对应的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'ram' => 'getRam',
            'name' => 'getName',
            'region' => 'getRegion',
            'diskrange' => 'getDiskrange',
            'availableAz' => 'getAvailableAz',
            'flavorId' => 'getFlavorId'
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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['diskrange'] = isset($data['diskrange']) ? $data['diskrange'] : null;
        $this->container['availableAz'] = isset($data['availableAz']) ? $data['availableAz'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
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
    * Gets cpu
    *  实例的CPU核数。
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu 实例的CPU核数。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets ram
    *  实例的内存大小。单位GB。
    *
    * @return int|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int|null $ram 实例的内存大小。单位GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets name
    *  规格名称。
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
    * @param string|null $name 规格名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets region
    *  可用region。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 可用region。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets diskrange
    *  实例的硬盘容量范围。
    *
    * @return string|null
    */
    public function getDiskrange()
    {
        return $this->container['diskrange'];
    }

    /**
    * Sets diskrange
    *
    * @param string|null $diskrange 实例的硬盘容量范围。
    *
    * @return $this
    */
    public function setDiskrange($diskrange)
    {
        $this->container['diskrange'] = $diskrange;
        return $this;
    }

    /**
    * Gets availableAz
    *  可用区。
    *
    * @return string|null
    */
    public function getAvailableAz()
    {
        return $this->container['availableAz'];
    }

    /**
    * Sets availableAz
    *
    * @param string|null $availableAz 可用区。
    *
    * @return $this
    */
    public function setAvailableAz($availableAz)
    {
        $this->container['availableAz'] = $availableAz;
        return $this;
    }

    /**
    * Gets flavorId
    *  规格对应的ID。
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 规格对应的ID。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
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

