<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性云服务器规格ID。
    * name  弹性云服务器规格名称。
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。此字段在本系统中无效。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'disk' => 'string',
            'vcpus' => 'string',
            'ram' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性云服务器规格ID。
    * name  弹性云服务器规格名称。
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。此字段在本系统中无效。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'disk' => null,
        'vcpus' => null,
        'ram' => null
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
    * id  弹性云服务器规格ID。
    * name  弹性云服务器规格名称。
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。此字段在本系统中无效。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'disk' => 'disk',
            'vcpus' => 'vcpus',
            'ram' => 'ram'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性云服务器规格ID。
    * name  弹性云服务器规格名称。
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。此字段在本系统中无效。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'disk' => 'setDisk',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性云服务器规格ID。
    * name  弹性云服务器规格名称。
    * disk  该云服务器规格对应要求系统盘大小，0为不限制。此字段在本系统中无效。
    * vcpus  该云服务器规格对应的CPU核数。
    * ram  该云服务器规格对应的内存大小，单位为MB。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'disk' => 'getDisk',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam'
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
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['disk'] === null) {
            $invalidProperties[] = "'disk' can't be null";
        }
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
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
    * Gets id
    *  弹性云服务器规格ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 弹性云服务器规格ID。
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
    *  弹性云服务器规格名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 弹性云服务器规格名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets disk
    *  该云服务器规格对应要求系统盘大小，0为不限制。此字段在本系统中无效。
    *
    * @return string
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param string $disk 该云服务器规格对应要求系统盘大小，0为不限制。此字段在本系统中无效。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets vcpus
    *  该云服务器规格对应的CPU核数。
    *
    * @return string
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string $vcpus 该云服务器规格对应的CPU核数。
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
    *  该云服务器规格对应的内存大小，单位为MB。
    *
    * @return string
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string $ram 该云服务器规格对应的内存大小，单位为MB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
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

