<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerDisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerDisk';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  磁盘名称
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选，否则无法通过后续环境检查 （非枚举数据，来源于EVS服务） 常见类型如：MBR：主启动记录分区，GPT：Guid Partition Table，全局分区表。 详细类型请参考EVS服务API文档中“MBR和GPT分区形式有何区别”部分描述
    * deviceUse  磁盘类型。 无强约束，可为空值，常见取值如下 NORMAL：平常 OS：系统设备 BOOT：BOOT设备 VOLUME_GROUP：VolumeGroup组成设备 BTRFS：BTRFS组成设备
    * size  磁盘总大小，以字节为单位
    * usedSize  磁盘已使用大小，以字节为单位
    * physicalVolumes  磁盘上的物理分区信息
    * osDisk  是否为系统盘
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * inodeSize  inode大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'partitionStyle' => 'string',
            'deviceUse' => 'string',
            'size' => 'int',
            'usedSize' => 'int',
            'physicalVolumes' => '\HuaweiCloud\SDK\Sms\V3\Model\PhysicalVolume[]',
            'osDisk' => 'bool',
            'relationName' => 'string',
            'inodeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  磁盘名称
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选，否则无法通过后续环境检查 （非枚举数据，来源于EVS服务） 常见类型如：MBR：主启动记录分区，GPT：Guid Partition Table，全局分区表。 详细类型请参考EVS服务API文档中“MBR和GPT分区形式有何区别”部分描述
    * deviceUse  磁盘类型。 无强约束，可为空值，常见取值如下 NORMAL：平常 OS：系统设备 BOOT：BOOT设备 VOLUME_GROUP：VolumeGroup组成设备 BTRFS：BTRFS组成设备
    * size  磁盘总大小，以字节为单位
    * usedSize  磁盘已使用大小，以字节为单位
    * physicalVolumes  磁盘上的物理分区信息
    * osDisk  是否为系统盘
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * inodeSize  inode大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'partitionStyle' => null,
        'deviceUse' => null,
        'size' => 'int64',
        'usedSize' => 'int64',
        'physicalVolumes' => null,
        'osDisk' => null,
        'relationName' => null,
        'inodeSize' => 'int32'
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
    * name  磁盘名称
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选，否则无法通过后续环境检查 （非枚举数据，来源于EVS服务） 常见类型如：MBR：主启动记录分区，GPT：Guid Partition Table，全局分区表。 详细类型请参考EVS服务API文档中“MBR和GPT分区形式有何区别”部分描述
    * deviceUse  磁盘类型。 无强约束，可为空值，常见取值如下 NORMAL：平常 OS：系统设备 BOOT：BOOT设备 VOLUME_GROUP：VolumeGroup组成设备 BTRFS：BTRFS组成设备
    * size  磁盘总大小，以字节为单位
    * usedSize  磁盘已使用大小，以字节为单位
    * physicalVolumes  磁盘上的物理分区信息
    * osDisk  是否为系统盘
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * inodeSize  inode大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'partitionStyle' => 'partition_style',
            'deviceUse' => 'device_use',
            'size' => 'size',
            'usedSize' => 'used_size',
            'physicalVolumes' => 'physical_volumes',
            'osDisk' => 'os_disk',
            'relationName' => 'relation_name',
            'inodeSize' => 'inode_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  磁盘名称
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选，否则无法通过后续环境检查 （非枚举数据，来源于EVS服务） 常见类型如：MBR：主启动记录分区，GPT：Guid Partition Table，全局分区表。 详细类型请参考EVS服务API文档中“MBR和GPT分区形式有何区别”部分描述
    * deviceUse  磁盘类型。 无强约束，可为空值，常见取值如下 NORMAL：平常 OS：系统设备 BOOT：BOOT设备 VOLUME_GROUP：VolumeGroup组成设备 BTRFS：BTRFS组成设备
    * size  磁盘总大小，以字节为单位
    * usedSize  磁盘已使用大小，以字节为单位
    * physicalVolumes  磁盘上的物理分区信息
    * osDisk  是否为系统盘
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * inodeSize  inode大小
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'partitionStyle' => 'setPartitionStyle',
            'deviceUse' => 'setDeviceUse',
            'size' => 'setSize',
            'usedSize' => 'setUsedSize',
            'physicalVolumes' => 'setPhysicalVolumes',
            'osDisk' => 'setOsDisk',
            'relationName' => 'setRelationName',
            'inodeSize' => 'setInodeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  磁盘名称
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选，否则无法通过后续环境检查 （非枚举数据，来源于EVS服务） 常见类型如：MBR：主启动记录分区，GPT：Guid Partition Table，全局分区表。 详细类型请参考EVS服务API文档中“MBR和GPT分区形式有何区别”部分描述
    * deviceUse  磁盘类型。 无强约束，可为空值，常见取值如下 NORMAL：平常 OS：系统设备 BOOT：BOOT设备 VOLUME_GROUP：VolumeGroup组成设备 BTRFS：BTRFS组成设备
    * size  磁盘总大小，以字节为单位
    * usedSize  磁盘已使用大小，以字节为单位
    * physicalVolumes  磁盘上的物理分区信息
    * osDisk  是否为系统盘
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * inodeSize  inode大小
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'partitionStyle' => 'getPartitionStyle',
            'deviceUse' => 'getDeviceUse',
            'size' => 'getSize',
            'usedSize' => 'getUsedSize',
            'physicalVolumes' => 'getPhysicalVolumes',
            'osDisk' => 'getOsDisk',
            'relationName' => 'getRelationName',
            'inodeSize' => 'getInodeSize'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['partitionStyle'] = isset($data['partitionStyle']) ? $data['partitionStyle'] : null;
        $this->container['deviceUse'] = isset($data['deviceUse']) ? $data['deviceUse'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['usedSize'] = isset($data['usedSize']) ? $data['usedSize'] : null;
        $this->container['physicalVolumes'] = isset($data['physicalVolumes']) ? $data['physicalVolumes'] : null;
        $this->container['osDisk'] = isset($data['osDisk']) ? $data['osDisk'] : null;
        $this->container['relationName'] = isset($data['relationName']) ? $data['relationName'] : null;
        $this->container['inodeSize'] = isset($data['inodeSize']) ? $data['inodeSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['partitionStyle']) && (mb_strlen($this->container['partitionStyle']) > 255)) {
                $invalidProperties[] = "invalid value for 'partitionStyle', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['partitionStyle']) && (mb_strlen($this->container['partitionStyle']) < 0)) {
                $invalidProperties[] = "invalid value for 'partitionStyle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceUse']) && (mb_strlen($this->container['deviceUse']) > 255)) {
                $invalidProperties[] = "invalid value for 'deviceUse', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['deviceUse']) && (mb_strlen($this->container['deviceUse']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceUse', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usedSize']) && ($this->container['usedSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'usedSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['usedSize']) && ($this->container['usedSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['relationName']) && (mb_strlen($this->container['relationName']) > 255)) {
                $invalidProperties[] = "invalid value for 'relationName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['relationName']) && (mb_strlen($this->container['relationName']) < 0)) {
                $invalidProperties[] = "invalid value for 'relationName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['inodeSize']) && ($this->container['inodeSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'inodeSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['inodeSize']) && ($this->container['inodeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'inodeSize', must be bigger than or equal to 0.";
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
    * Gets name
    *  磁盘名称
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
    * @param string|null $name 磁盘名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets partitionStyle
    *  磁盘的分区类型，添加源端时源端磁盘必选，否则无法通过后续环境检查 （非枚举数据，来源于EVS服务） 常见类型如：MBR：主启动记录分区，GPT：Guid Partition Table，全局分区表。 详细类型请参考EVS服务API文档中“MBR和GPT分区形式有何区别”部分描述
    *
    * @return string|null
    */
    public function getPartitionStyle()
    {
        return $this->container['partitionStyle'];
    }

    /**
    * Sets partitionStyle
    *
    * @param string|null $partitionStyle 磁盘的分区类型，添加源端时源端磁盘必选，否则无法通过后续环境检查 （非枚举数据，来源于EVS服务） 常见类型如：MBR：主启动记录分区，GPT：Guid Partition Table，全局分区表。 详细类型请参考EVS服务API文档中“MBR和GPT分区形式有何区别”部分描述
    *
    * @return $this
    */
    public function setPartitionStyle($partitionStyle)
    {
        $this->container['partitionStyle'] = $partitionStyle;
        return $this;
    }

    /**
    * Gets deviceUse
    *  磁盘类型。 无强约束，可为空值，常见取值如下 NORMAL：平常 OS：系统设备 BOOT：BOOT设备 VOLUME_GROUP：VolumeGroup组成设备 BTRFS：BTRFS组成设备
    *
    * @return string|null
    */
    public function getDeviceUse()
    {
        return $this->container['deviceUse'];
    }

    /**
    * Sets deviceUse
    *
    * @param string|null $deviceUse 磁盘类型。 无强约束，可为空值，常见取值如下 NORMAL：平常 OS：系统设备 BOOT：BOOT设备 VOLUME_GROUP：VolumeGroup组成设备 BTRFS：BTRFS组成设备
    *
    * @return $this
    */
    public function setDeviceUse($deviceUse)
    {
        $this->container['deviceUse'] = $deviceUse;
        return $this;
    }

    /**
    * Gets size
    *  磁盘总大小，以字节为单位
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
    * @param int|null $size 磁盘总大小，以字节为单位
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets usedSize
    *  磁盘已使用大小，以字节为单位
    *
    * @return int|null
    */
    public function getUsedSize()
    {
        return $this->container['usedSize'];
    }

    /**
    * Sets usedSize
    *
    * @param int|null $usedSize 磁盘已使用大小，以字节为单位
    *
    * @return $this
    */
    public function setUsedSize($usedSize)
    {
        $this->container['usedSize'] = $usedSize;
        return $this;
    }

    /**
    * Gets physicalVolumes
    *  磁盘上的物理分区信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\PhysicalVolume[]|null
    */
    public function getPhysicalVolumes()
    {
        return $this->container['physicalVolumes'];
    }

    /**
    * Sets physicalVolumes
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\PhysicalVolume[]|null $physicalVolumes 磁盘上的物理分区信息
    *
    * @return $this
    */
    public function setPhysicalVolumes($physicalVolumes)
    {
        $this->container['physicalVolumes'] = $physicalVolumes;
        return $this;
    }

    /**
    * Gets osDisk
    *  是否为系统盘
    *
    * @return bool|null
    */
    public function getOsDisk()
    {
        return $this->container['osDisk'];
    }

    /**
    * Sets osDisk
    *
    * @param bool|null $osDisk 是否为系统盘
    *
    * @return $this
    */
    public function setOsDisk($osDisk)
    {
        $this->container['osDisk'] = $osDisk;
        return $this;
    }

    /**
    * Gets relationName
    *  Linux系统 目的端ECS中与源端关联的磁盘名称
    *
    * @return string|null
    */
    public function getRelationName()
    {
        return $this->container['relationName'];
    }

    /**
    * Sets relationName
    *
    * @param string|null $relationName Linux系统 目的端ECS中与源端关联的磁盘名称
    *
    * @return $this
    */
    public function setRelationName($relationName)
    {
        $this->container['relationName'] = $relationName;
        return $this;
    }

    /**
    * Gets inodeSize
    *  inode大小
    *
    * @return int|null
    */
    public function getInodeSize()
    {
        return $this->container['inodeSize'];
    }

    /**
    * Sets inodeSize
    *
    * @param int|null $inodeSize inode大小
    *
    * @return $this
    */
    public function setInodeSize($inodeSize)
    {
        $this->container['inodeSize'] = $inodeSize;
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

