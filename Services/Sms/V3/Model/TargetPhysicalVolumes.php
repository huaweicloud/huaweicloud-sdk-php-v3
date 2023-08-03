<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetPhysicalVolumes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetPhysicalVolumes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  逻辑卷ID
    * deviceUse  分区类型 NORMAL:平常 OS：系统设备 BOOT：BOOT设备
    * fileSystem  文件系统
    * index  编号
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * uuid  uuid
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * freeSize  分区空闲大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'deviceUse' => 'string',
            'fileSystem' => 'string',
            'index' => 'int',
            'mountPoint' => 'string',
            'name' => 'string',
            'size' => 'int',
            'usedSize' => 'int',
            'uuid' => 'string',
            'relationName' => 'string',
            'freeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  逻辑卷ID
    * deviceUse  分区类型 NORMAL:平常 OS：系统设备 BOOT：BOOT设备
    * fileSystem  文件系统
    * index  编号
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * uuid  uuid
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * freeSize  分区空闲大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'deviceUse' => null,
        'fileSystem' => null,
        'index' => 'int32',
        'mountPoint' => null,
        'name' => null,
        'size' => 'int64',
        'usedSize' => 'int64',
        'uuid' => null,
        'relationName' => null,
        'freeSize' => 'int64'
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
    * id  逻辑卷ID
    * deviceUse  分区类型 NORMAL:平常 OS：系统设备 BOOT：BOOT设备
    * fileSystem  文件系统
    * index  编号
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * uuid  uuid
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * freeSize  分区空闲大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'deviceUse' => 'device_use',
            'fileSystem' => 'file_system',
            'index' => 'index',
            'mountPoint' => 'mount_point',
            'name' => 'name',
            'size' => 'size',
            'usedSize' => 'used_size',
            'uuid' => 'uuid',
            'relationName' => 'relation_name',
            'freeSize' => 'free_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  逻辑卷ID
    * deviceUse  分区类型 NORMAL:平常 OS：系统设备 BOOT：BOOT设备
    * fileSystem  文件系统
    * index  编号
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * uuid  uuid
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * freeSize  分区空闲大小
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'deviceUse' => 'setDeviceUse',
            'fileSystem' => 'setFileSystem',
            'index' => 'setIndex',
            'mountPoint' => 'setMountPoint',
            'name' => 'setName',
            'size' => 'setSize',
            'usedSize' => 'setUsedSize',
            'uuid' => 'setUuid',
            'relationName' => 'setRelationName',
            'freeSize' => 'setFreeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  逻辑卷ID
    * deviceUse  分区类型 NORMAL:平常 OS：系统设备 BOOT：BOOT设备
    * fileSystem  文件系统
    * index  编号
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * uuid  uuid
    * relationName  Linux系统 目的端ECS中与源端关联的磁盘名称
    * freeSize  分区空闲大小
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'deviceUse' => 'getDeviceUse',
            'fileSystem' => 'getFileSystem',
            'index' => 'getIndex',
            'mountPoint' => 'getMountPoint',
            'name' => 'getName',
            'size' => 'getSize',
            'usedSize' => 'getUsedSize',
            'uuid' => 'getUuid',
            'relationName' => 'getRelationName',
            'freeSize' => 'getFreeSize'
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
        $this->container['fileSystem'] = isset($data['fileSystem']) ? $data['fileSystem'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['mountPoint'] = isset($data['mountPoint']) ? $data['mountPoint'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['usedSize'] = isset($data['usedSize']) ? $data['usedSize'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['relationName'] = isset($data['relationName']) ? $data['relationName'] : null;
        $this->container['freeSize'] = isset($data['freeSize']) ? $data['freeSize'] : null;
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

            if (!is_null($this->container['fileSystem']) && (mb_strlen($this->container['fileSystem']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileSystem', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fileSystem']) && (mb_strlen($this->container['fileSystem']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileSystem', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['index']) && ($this->container['index'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'index', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['index']) && ($this->container['index'] < 0)) {
                $invalidProperties[] = "invalid value for 'index', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mountPoint']) && (mb_strlen($this->container['mountPoint']) > 255)) {
                $invalidProperties[] = "invalid value for 'mountPoint', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['mountPoint']) && (mb_strlen($this->container['mountPoint']) < 0)) {
                $invalidProperties[] = "invalid value for 'mountPoint', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 255)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['relationName']) && (mb_strlen($this->container['relationName']) > 255)) {
                $invalidProperties[] = "invalid value for 'relationName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['relationName']) && (mb_strlen($this->container['relationName']) < 0)) {
                $invalidProperties[] = "invalid value for 'relationName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['freeSize']) && ($this->container['freeSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'freeSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['freeSize']) && ($this->container['freeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'freeSize', must be bigger than or equal to 0.";
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
    *  逻辑卷ID
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
    * @param int|null $id 逻辑卷ID
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
    *  分区类型 NORMAL:平常 OS：系统设备 BOOT：BOOT设备
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
    * @param string|null $deviceUse 分区类型 NORMAL:平常 OS：系统设备 BOOT：BOOT设备
    *
    * @return $this
    */
    public function setDeviceUse($deviceUse)
    {
        $this->container['deviceUse'] = $deviceUse;
        return $this;
    }

    /**
    * Gets fileSystem
    *  文件系统
    *
    * @return string|null
    */
    public function getFileSystem()
    {
        return $this->container['fileSystem'];
    }

    /**
    * Sets fileSystem
    *
    * @param string|null $fileSystem 文件系统
    *
    * @return $this
    */
    public function setFileSystem($fileSystem)
    {
        $this->container['fileSystem'] = $fileSystem;
        return $this;
    }

    /**
    * Gets index
    *  编号
    *
    * @return int|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int|null $index 编号
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets mountPoint
    *  挂载点
    *
    * @return string|null
    */
    public function getMountPoint()
    {
        return $this->container['mountPoint'];
    }

    /**
    * Sets mountPoint
    *
    * @param string|null $mountPoint 挂载点
    *
    * @return $this
    */
    public function setMountPoint($mountPoint)
    {
        $this->container['mountPoint'] = $mountPoint;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    *  使用大小
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
    * @param int|null $usedSize 使用大小
    *
    * @return $this
    */
    public function setUsedSize($usedSize)
    {
        $this->container['usedSize'] = $usedSize;
        return $this;
    }

    /**
    * Gets uuid
    *  uuid
    *
    * @return string|null
    */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
    * Sets uuid
    *
    * @param string|null $uuid uuid
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
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
    * Gets freeSize
    *  分区空闲大小
    *
    * @return int|null
    */
    public function getFreeSize()
    {
        return $this->container['freeSize'];
    }

    /**
    * Sets freeSize
    *
    * @param int|null $freeSize 分区空闲大小
    *
    * @return $this
    */
    public function setFreeSize($freeSize)
    {
        $this->container['freeSize'] = $freeSize;
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

