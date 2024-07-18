<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorInfos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  裸金属服务器规格ID
    * name  裸金属服务器规格名称
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * vcpus  该裸金属服务器规格对应的CPU核数
    * ram  该裸金属服务器规格对应的内存大小，单位为MB
    * gpus  该裸金属服务器规格对应的GPU设备。
    * asicAccelerators  该裸金属服务器规格对应的ASIC设备。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'disk' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'gpus' => '\HuaweiCloud\SDK\Bms\V1\Model\GpuInfo[]',
            'asicAccelerators' => '\HuaweiCloud\SDK\Bms\V1\Model\ASICAcceleratorInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  裸金属服务器规格ID
    * name  裸金属服务器规格名称
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * vcpus  该裸金属服务器规格对应的CPU核数
    * ram  该裸金属服务器规格对应的内存大小，单位为MB
    * gpus  该裸金属服务器规格对应的GPU设备。
    * asicAccelerators  该裸金属服务器规格对应的ASIC设备。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'disk' => null,
        'vcpus' => null,
        'ram' => null,
        'gpus' => null,
        'asicAccelerators' => null
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
    * id  裸金属服务器规格ID
    * name  裸金属服务器规格名称
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * vcpus  该裸金属服务器规格对应的CPU核数
    * ram  该裸金属服务器规格对应的内存大小，单位为MB
    * gpus  该裸金属服务器规格对应的GPU设备。
    * asicAccelerators  该裸金属服务器规格对应的ASIC设备。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'disk' => 'disk',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'gpus' => 'gpus',
            'asicAccelerators' => 'asic_accelerators'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  裸金属服务器规格ID
    * name  裸金属服务器规格名称
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * vcpus  该裸金属服务器规格对应的CPU核数
    * ram  该裸金属服务器规格对应的内存大小，单位为MB
    * gpus  该裸金属服务器规格对应的GPU设备。
    * asicAccelerators  该裸金属服务器规格对应的ASIC设备。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'disk' => 'setDisk',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'gpus' => 'setGpus',
            'asicAccelerators' => 'setAsicAccelerators'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  裸金属服务器规格ID
    * name  裸金属服务器规格名称
    * disk  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    * vcpus  该裸金属服务器规格对应的CPU核数
    * ram  该裸金属服务器规格对应的内存大小，单位为MB
    * gpus  该裸金属服务器规格对应的GPU设备。
    * asicAccelerators  该裸金属服务器规格对应的ASIC设备。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'disk' => 'getDisk',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'gpus' => 'getGpus',
            'asicAccelerators' => 'getAsicAccelerators'
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
        $this->container['gpus'] = isset($data['gpus']) ? $data['gpus'] : null;
        $this->container['asicAccelerators'] = isset($data['asicAccelerators']) ? $data['asicAccelerators'] : null;
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
    *  裸金属服务器规格ID
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
    * @param string|null $id 裸金属服务器规格ID
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
    *  裸金属服务器规格名称
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
    * @param string|null $name 裸金属服务器规格名称
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
    *  该裸金属服务器规格对应要求系统盘大小，0为不限制。
    *
    * @return string|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param string|null $disk 该裸金属服务器规格对应要求系统盘大小，0为不限制。
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
    *  该裸金属服务器规格对应的CPU核数
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus 该裸金属服务器规格对应的CPU核数
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
    *  该裸金属服务器规格对应的内存大小，单位为MB
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram 该裸金属服务器规格对应的内存大小，单位为MB
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets gpus
    *  该裸金属服务器规格对应的GPU设备。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\GpuInfo[]|null
    */
    public function getGpus()
    {
        return $this->container['gpus'];
    }

    /**
    * Sets gpus
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\GpuInfo[]|null $gpus 该裸金属服务器规格对应的GPU设备。
    *
    * @return $this
    */
    public function setGpus($gpus)
    {
        $this->container['gpus'] = $gpus;
        return $this;
    }

    /**
    * Gets asicAccelerators
    *  该裸金属服务器规格对应的ASIC设备。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\ASICAcceleratorInfo[]|null
    */
    public function getAsicAccelerators()
    {
        return $this->container['asicAccelerators'];
    }

    /**
    * Sets asicAccelerators
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\ASICAcceleratorInfo[]|null $asicAccelerators 该裸金属服务器规格对应的ASIC设备。
    *
    * @return $this
    */
    public function setAsicAccelerators($asicAccelerators)
    {
        $this->container['asicAccelerators'] = $asicAccelerators;
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

