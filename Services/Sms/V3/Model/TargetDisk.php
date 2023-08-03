<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetDisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetDisk';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  磁盘标识ID
    * deviceUse  判断是普通分区，启动分区还是系统分区 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID
    * name  磁盘名称
    * physicalVolumes  逻辑卷信息
    * size  大小
    * usedSize  已使用大小
    * diskIndex  磁盘索引
    * osDisk  是否为系统盘
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选 MBR：mbr格式 GPT：gpt格式
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'deviceUse' => 'string',
            'diskId' => 'string',
            'name' => 'string',
            'physicalVolumes' => '\HuaweiCloud\SDK\Sms\V3\Model\TargetPhysicalVolumes[]',
            'size' => 'int',
            'usedSize' => 'int',
            'diskIndex' => 'string',
            'osDisk' => 'bool',
            'partitionStyle' => 'string',
            'relationName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  磁盘标识ID
    * deviceUse  判断是普通分区，启动分区还是系统分区 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID
    * name  磁盘名称
    * physicalVolumes  逻辑卷信息
    * size  大小
    * usedSize  已使用大小
    * diskIndex  磁盘索引
    * osDisk  是否为系统盘
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选 MBR：mbr格式 GPT：gpt格式
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'deviceUse' => null,
        'diskId' => null,
        'name' => null,
        'physicalVolumes' => null,
        'size' => 'int64',
        'usedSize' => 'int64',
        'diskIndex' => null,
        'osDisk' => null,
        'partitionStyle' => null,
        'relationName' => null
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
    * id  磁盘标识ID
    * deviceUse  判断是普通分区，启动分区还是系统分区 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID
    * name  磁盘名称
    * physicalVolumes  逻辑卷信息
    * size  大小
    * usedSize  已使用大小
    * diskIndex  磁盘索引
    * osDisk  是否为系统盘
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选 MBR：mbr格式 GPT：gpt格式
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'deviceUse' => 'device_use',
            'diskId' => 'disk_id',
            'name' => 'name',
            'physicalVolumes' => 'physical_volumes',
            'size' => 'size',
            'usedSize' => 'used_size',
            'diskIndex' => 'disk_index',
            'osDisk' => 'os_disk',
            'partitionStyle' => 'partition_style',
            'relationName' => 'relation_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  磁盘标识ID
    * deviceUse  判断是普通分区，启动分区还是系统分区 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID
    * name  磁盘名称
    * physicalVolumes  逻辑卷信息
    * size  大小
    * usedSize  已使用大小
    * diskIndex  磁盘索引
    * osDisk  是否为系统盘
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选 MBR：mbr格式 GPT：gpt格式
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'deviceUse' => 'setDeviceUse',
            'diskId' => 'setDiskId',
            'name' => 'setName',
            'physicalVolumes' => 'setPhysicalVolumes',
            'size' => 'setSize',
            'usedSize' => 'setUsedSize',
            'diskIndex' => 'setDiskIndex',
            'osDisk' => 'setOsDisk',
            'partitionStyle' => 'setPartitionStyle',
            'relationName' => 'setRelationName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  磁盘标识ID
    * deviceUse  判断是普通分区，启动分区还是系统分区 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID
    * name  磁盘名称
    * physicalVolumes  逻辑卷信息
    * size  大小
    * usedSize  已使用大小
    * diskIndex  磁盘索引
    * osDisk  是否为系统盘
    * partitionStyle  磁盘的分区类型，添加源端时源端磁盘必选 MBR：mbr格式 GPT：gpt格式
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'deviceUse' => 'getDeviceUse',
            'diskId' => 'getDiskId',
            'name' => 'getName',
            'physicalVolumes' => 'getPhysicalVolumes',
            'size' => 'getSize',
            'usedSize' => 'getUsedSize',
            'diskIndex' => 'getDiskIndex',
            'osDisk' => 'getOsDisk',
            'partitionStyle' => 'getPartitionStyle',
            'relationName' => 'getRelationName'
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
    const DEVICE_USE_NORMAL = 'NORMAL';
    const DEVICE_USE_OS = 'OS';
    const DEVICE_USE_BOOT = 'BOOT';
    const PARTITION_STYLE_MBR = 'MBR';
    const PARTITION_STYLE_GPT = 'GPT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeviceUseAllowableValues()
    {
        return [
            self::DEVICE_USE_NORMAL,
            self::DEVICE_USE_OS,
            self::DEVICE_USE_BOOT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPartitionStyleAllowableValues()
    {
        return [
            self::PARTITION_STYLE_MBR,
            self::PARTITION_STYLE_GPT,
        ];
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
        $this->container['deviceUse'] = isset($data['deviceUse']) ? $data['deviceUse'] : null;
        $this->container['diskId'] = isset($data['diskId']) ? $data['diskId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['physicalVolumes'] = isset($data['physicalVolumes']) ? $data['physicalVolumes'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['usedSize'] = isset($data['usedSize']) ? $data['usedSize'] : null;
        $this->container['diskIndex'] = isset($data['diskIndex']) ? $data['diskIndex'] : null;
        $this->container['osDisk'] = isset($data['osDisk']) ? $data['osDisk'] : null;
        $this->container['partitionStyle'] = isset($data['partitionStyle']) ? $data['partitionStyle'] : null;
        $this->container['relationName'] = isset($data['relationName']) ? $data['relationName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getDeviceUseAllowableValues();
                if (!is_null($this->container['deviceUse']) && !in_array($this->container['deviceUse'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deviceUse', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['diskId']) && (mb_strlen($this->container['diskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'diskId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['diskId']) && (mb_strlen($this->container['diskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'diskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['diskIndex']) && (mb_strlen($this->container['diskIndex']) > 255)) {
                $invalidProperties[] = "invalid value for 'diskIndex', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['diskIndex']) && (mb_strlen($this->container['diskIndex']) < 0)) {
                $invalidProperties[] = "invalid value for 'diskIndex', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPartitionStyleAllowableValues();
                if (!is_null($this->container['partitionStyle']) && !in_array($this->container['partitionStyle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'partitionStyle', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['relationName']) && (mb_strlen($this->container['relationName']) > 255)) {
                $invalidProperties[] = "invalid value for 'relationName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['relationName']) && (mb_strlen($this->container['relationName']) < 0)) {
                $invalidProperties[] = "invalid value for 'relationName', the character length must be bigger than or equal to 0.";
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
    *  磁盘标识ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 磁盘标识ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets deviceUse
    *  判断是普通分区，启动分区还是系统分区 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
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
    * @param string|null $deviceUse 判断是普通分区，启动分区还是系统分区 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    *
    * @return $this
    */
    public function setDeviceUse($deviceUse)
    {
        $this->container['deviceUse'] = $deviceUse;
        return $this;
    }

    /**
    * Gets diskId
    *  磁盘ID
    *
    * @return string|null
    */
    public function getDiskId()
    {
        return $this->container['diskId'];
    }

    /**
    * Sets diskId
    *
    * @param string|null $diskId 磁盘ID
    *
    * @return $this
    */
    public function setDiskId($diskId)
    {
        $this->container['diskId'] = $diskId;
        return $this;
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
    * Gets physicalVolumes
    *  逻辑卷信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TargetPhysicalVolumes[]|null
    */
    public function getPhysicalVolumes()
    {
        return $this->container['physicalVolumes'];
    }

    /**
    * Sets physicalVolumes
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TargetPhysicalVolumes[]|null $physicalVolumes 逻辑卷信息
    *
    * @return $this
    */
    public function setPhysicalVolumes($physicalVolumes)
    {
        $this->container['physicalVolumes'] = $physicalVolumes;
        return $this;
    }

    /**
    * Gets size
    *  大小
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
    * @param int|null $size 大小
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
    *  已使用大小
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
    * @param int|null $usedSize 已使用大小
    *
    * @return $this
    */
    public function setUsedSize($usedSize)
    {
        $this->container['usedSize'] = $usedSize;
        return $this;
    }

    /**
    * Gets diskIndex
    *  磁盘索引
    *
    * @return string|null
    */
    public function getDiskIndex()
    {
        return $this->container['diskIndex'];
    }

    /**
    * Sets diskIndex
    *
    * @param string|null $diskIndex 磁盘索引
    *
    * @return $this
    */
    public function setDiskIndex($diskIndex)
    {
        $this->container['diskIndex'] = $diskIndex;
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
    * Gets partitionStyle
    *  磁盘的分区类型，添加源端时源端磁盘必选 MBR：mbr格式 GPT：gpt格式
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
    * @param string|null $partitionStyle 磁盘的分区类型，添加源端时源端磁盘必选 MBR：mbr格式 GPT：gpt格式
    *
    * @return $this
    */
    public function setPartitionStyle($partitionStyle)
    {
        $this->container['partitionStyle'] = $partitionStyle;
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

