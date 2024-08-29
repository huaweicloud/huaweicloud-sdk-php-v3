<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorQuasar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorQuasar';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云服务器类型ID。
    * name  云服务器规格名称。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB.
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。
    * rootGb  rootGb
    * ephemeralGb  ephemeralGb
    * extraSpecs  flavor扩展字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'vcpus' => 'int',
            'ram' => 'int',
            'disk' => 'int',
            'rootGb' => 'int',
            'ephemeralGb' => 'int',
            'extraSpecs' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云服务器类型ID。
    * name  云服务器规格名称。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB.
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。
    * rootGb  rootGb
    * ephemeralGb  ephemeralGb
    * extraSpecs  flavor扩展字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'vcpus' => null,
        'ram' => null,
        'disk' => null,
        'rootGb' => null,
        'ephemeralGb' => null,
        'extraSpecs' => null
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
    * id  云服务器类型ID。
    * name  云服务器规格名称。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB.
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。
    * rootGb  rootGb
    * ephemeralGb  ephemeralGb
    * extraSpecs  flavor扩展字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'disk' => 'disk',
            'rootGb' => 'root_gb',
            'ephemeralGb' => 'ephemeral_gb',
            'extraSpecs' => 'extra_specs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云服务器类型ID。
    * name  云服务器规格名称。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB.
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。
    * rootGb  rootGb
    * ephemeralGb  ephemeralGb
    * extraSpecs  flavor扩展字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'disk' => 'setDisk',
            'rootGb' => 'setRootGb',
            'ephemeralGb' => 'setEphemeralGb',
            'extraSpecs' => 'setExtraSpecs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云服务器类型ID。
    * name  云服务器规格名称。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB.
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。
    * rootGb  rootGb
    * ephemeralGb  ephemeralGb
    * extraSpecs  flavor扩展字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'disk' => 'getDisk',
            'rootGb' => 'getRootGb',
            'ephemeralGb' => 'getEphemeralGb',
            'extraSpecs' => 'getExtraSpecs'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['rootGb'] = isset($data['rootGb']) ? $data['rootGb'] : null;
        $this->container['ephemeralGb'] = isset($data['ephemeralGb']) ? $data['ephemeralGb'] : null;
        $this->container['extraSpecs'] = isset($data['extraSpecs']) ? $data['extraSpecs'] : null;
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
    * Gets id
    *  云服务器类型ID。
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
    * @param string|null $id 云服务器类型ID。
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
    *  云服务器规格名称。
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
    * @param string|null $name 云服务器规格名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vcpus
    *  该云服务器规格对应的CPU核数。
    *
    * @return int|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param int|null $vcpus 该云服务器规格对应的CPU核数。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  该云服务器规格对应的内存大小，单位为MB.
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
    * @param int|null $ram 该云服务器规格对应的内存大小，单位为MB.
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets disk
    *  该云服务器规格对应要求系统盘大小，0为不限制。
    *
    * @return int|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param int|null $disk 该云服务器规格对应要求系统盘大小，0为不限制。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets rootGb
    *  rootGb
    *
    * @return int|null
    */
    public function getRootGb()
    {
        return $this->container['rootGb'];
    }

    /**
    * Sets rootGb
    *
    * @param int|null $rootGb rootGb
    *
    * @return $this
    */
    public function setRootGb($rootGb)
    {
        $this->container['rootGb'] = $rootGb;
        return $this;
    }

    /**
    * Gets ephemeralGb
    *  ephemeralGb
    *
    * @return int|null
    */
    public function getEphemeralGb()
    {
        return $this->container['ephemeralGb'];
    }

    /**
    * Sets ephemeralGb
    *
    * @param int|null $ephemeralGb ephemeralGb
    *
    * @return $this
    */
    public function setEphemeralGb($ephemeralGb)
    {
        $this->container['ephemeralGb'] = $ephemeralGb;
        return $this;
    }

    /**
    * Gets extraSpecs
    *  flavor扩展字段。
    *
    * @return map[string,string]|null
    */
    public function getExtraSpecs()
    {
        return $this->container['extraSpecs'];
    }

    /**
    * Sets extraSpecs
    *
    * @param map[string,string]|null $extraSpecs flavor扩展字段。
    *
    * @return $this
    */
    public function setExtraSpecs($extraSpecs)
    {
        $this->container['extraSpecs'] = $extraSpecs;
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

