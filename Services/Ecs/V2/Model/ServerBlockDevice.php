<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerBlockDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerBlockDevice';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bootIndex  云硬盘启动顺序。  - 0为系统盘。  - 非0为数据盘
    * pciAddress  pci地址。
    * volumeId  云硬盘ID，UUID格式。
    * device  云硬盘挂载盘符，即磁盘挂载点。
    * serverId  弹性云服务器ID，UUID格式。
    * id  挂载ID，与云硬盘ID相同。UUID格式。
    * size  云硬盘大小，单位GB。
    * bus  磁盘总线类型 。  取值范围：virtio、scsi
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bootIndex' => 'int',
            'pciAddress' => 'string',
            'volumeId' => 'string',
            'device' => 'string',
            'serverId' => 'string',
            'id' => 'string',
            'size' => 'int',
            'bus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bootIndex  云硬盘启动顺序。  - 0为系统盘。  - 非0为数据盘
    * pciAddress  pci地址。
    * volumeId  云硬盘ID，UUID格式。
    * device  云硬盘挂载盘符，即磁盘挂载点。
    * serverId  弹性云服务器ID，UUID格式。
    * id  挂载ID，与云硬盘ID相同。UUID格式。
    * size  云硬盘大小，单位GB。
    * bus  磁盘总线类型 。  取值范围：virtio、scsi
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bootIndex' => 'int32',
        'pciAddress' => null,
        'volumeId' => null,
        'device' => null,
        'serverId' => null,
        'id' => null,
        'size' => 'int32',
        'bus' => null
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
    * bootIndex  云硬盘启动顺序。  - 0为系统盘。  - 非0为数据盘
    * pciAddress  pci地址。
    * volumeId  云硬盘ID，UUID格式。
    * device  云硬盘挂载盘符，即磁盘挂载点。
    * serverId  弹性云服务器ID，UUID格式。
    * id  挂载ID，与云硬盘ID相同。UUID格式。
    * size  云硬盘大小，单位GB。
    * bus  磁盘总线类型 。  取值范围：virtio、scsi
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bootIndex' => 'bootIndex',
            'pciAddress' => 'pciAddress',
            'volumeId' => 'volumeId',
            'device' => 'device',
            'serverId' => 'serverId',
            'id' => 'id',
            'size' => 'size',
            'bus' => 'bus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bootIndex  云硬盘启动顺序。  - 0为系统盘。  - 非0为数据盘
    * pciAddress  pci地址。
    * volumeId  云硬盘ID，UUID格式。
    * device  云硬盘挂载盘符，即磁盘挂载点。
    * serverId  弹性云服务器ID，UUID格式。
    * id  挂载ID，与云硬盘ID相同。UUID格式。
    * size  云硬盘大小，单位GB。
    * bus  磁盘总线类型 。  取值范围：virtio、scsi
    *
    * @var string[]
    */
    protected static $setters = [
            'bootIndex' => 'setBootIndex',
            'pciAddress' => 'setPciAddress',
            'volumeId' => 'setVolumeId',
            'device' => 'setDevice',
            'serverId' => 'setServerId',
            'id' => 'setId',
            'size' => 'setSize',
            'bus' => 'setBus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bootIndex  云硬盘启动顺序。  - 0为系统盘。  - 非0为数据盘
    * pciAddress  pci地址。
    * volumeId  云硬盘ID，UUID格式。
    * device  云硬盘挂载盘符，即磁盘挂载点。
    * serverId  弹性云服务器ID，UUID格式。
    * id  挂载ID，与云硬盘ID相同。UUID格式。
    * size  云硬盘大小，单位GB。
    * bus  磁盘总线类型 。  取值范围：virtio、scsi
    *
    * @var string[]
    */
    protected static $getters = [
            'bootIndex' => 'getBootIndex',
            'pciAddress' => 'getPciAddress',
            'volumeId' => 'getVolumeId',
            'device' => 'getDevice',
            'serverId' => 'getServerId',
            'id' => 'getId',
            'size' => 'getSize',
            'bus' => 'getBus'
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
        $this->container['bootIndex'] = isset($data['bootIndex']) ? $data['bootIndex'] : null;
        $this->container['pciAddress'] = isset($data['pciAddress']) ? $data['pciAddress'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['bus'] = isset($data['bus']) ? $data['bus'] : null;
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
    * Gets bootIndex
    *  云硬盘启动顺序。  - 0为系统盘。  - 非0为数据盘
    *
    * @return int|null
    */
    public function getBootIndex()
    {
        return $this->container['bootIndex'];
    }

    /**
    * Sets bootIndex
    *
    * @param int|null $bootIndex 云硬盘启动顺序。  - 0为系统盘。  - 非0为数据盘
    *
    * @return $this
    */
    public function setBootIndex($bootIndex)
    {
        $this->container['bootIndex'] = $bootIndex;
        return $this;
    }

    /**
    * Gets pciAddress
    *  pci地址。
    *
    * @return string|null
    */
    public function getPciAddress()
    {
        return $this->container['pciAddress'];
    }

    /**
    * Sets pciAddress
    *
    * @param string|null $pciAddress pci地址。
    *
    * @return $this
    */
    public function setPciAddress($pciAddress)
    {
        $this->container['pciAddress'] = $pciAddress;
        return $this;
    }

    /**
    * Gets volumeId
    *  云硬盘ID，UUID格式。
    *
    * @return string|null
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string|null $volumeId 云硬盘ID，UUID格式。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets device
    *  云硬盘挂载盘符，即磁盘挂载点。
    *
    * @return string|null
    */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
    * Sets device
    *
    * @param string|null $device 云硬盘挂载盘符，即磁盘挂载点。
    *
    * @return $this
    */
    public function setDevice($device)
    {
        $this->container['device'] = $device;
        return $this;
    }

    /**
    * Gets serverId
    *  弹性云服务器ID，UUID格式。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 弹性云服务器ID，UUID格式。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets id
    *  挂载ID，与云硬盘ID相同。UUID格式。
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
    * @param string|null $id 挂载ID，与云硬盘ID相同。UUID格式。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets size
    *  云硬盘大小，单位GB。
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
    * @param int|null $size 云硬盘大小，单位GB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets bus
    *  磁盘总线类型 。  取值范围：virtio、scsi
    *
    * @return string|null
    */
    public function getBus()
    {
        return $this->container['bus'];
    }

    /**
    * Sets bus
    *
    * @param string|null $bus 磁盘总线类型 。  取值范围：virtio、scsi
    *
    * @return $this
    */
    public function setBus($bus)
    {
        $this->container['bus'] = $bus;
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

