<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PhysicalVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PhysicalVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceUse  分区类型，普通分区，启动分区，系统分区
    * fileSystem  文件系统类型
    * index  顺序
    * mountPoint  挂载点
    * name  名称，windows表示盘符，Linux表示设备号
    * size  大小
    * usedSize  使用大小
    * inodeSize  inode数量
    * inodeNums  inode节点数量
    * uuid  GUID，可从源端查询
    * sizePerCluster  每个cluster大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceUse' => 'string',
            'fileSystem' => 'string',
            'index' => 'int',
            'mountPoint' => 'string',
            'name' => 'string',
            'size' => 'int',
            'usedSize' => 'int',
            'inodeSize' => 'int',
            'inodeNums' => 'int',
            'uuid' => 'string',
            'sizePerCluster' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceUse  分区类型，普通分区，启动分区，系统分区
    * fileSystem  文件系统类型
    * index  顺序
    * mountPoint  挂载点
    * name  名称，windows表示盘符，Linux表示设备号
    * size  大小
    * usedSize  使用大小
    * inodeSize  inode数量
    * inodeNums  inode节点数量
    * uuid  GUID，可从源端查询
    * sizePerCluster  每个cluster大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceUse' => null,
        'fileSystem' => null,
        'index' => 'int32',
        'mountPoint' => null,
        'name' => null,
        'size' => 'int64',
        'usedSize' => 'int64',
        'inodeSize' => 'int32',
        'inodeNums' => 'int64',
        'uuid' => null,
        'sizePerCluster' => 'int32'
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
    * deviceUse  分区类型，普通分区，启动分区，系统分区
    * fileSystem  文件系统类型
    * index  顺序
    * mountPoint  挂载点
    * name  名称，windows表示盘符，Linux表示设备号
    * size  大小
    * usedSize  使用大小
    * inodeSize  inode数量
    * inodeNums  inode节点数量
    * uuid  GUID，可从源端查询
    * sizePerCluster  每个cluster大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceUse' => 'device_use',
            'fileSystem' => 'file_system',
            'index' => 'index',
            'mountPoint' => 'mount_point',
            'name' => 'name',
            'size' => 'size',
            'usedSize' => 'used_size',
            'inodeSize' => 'inode_size',
            'inodeNums' => 'inode_nums',
            'uuid' => 'uuid',
            'sizePerCluster' => 'size_per_cluster'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceUse  分区类型，普通分区，启动分区，系统分区
    * fileSystem  文件系统类型
    * index  顺序
    * mountPoint  挂载点
    * name  名称，windows表示盘符，Linux表示设备号
    * size  大小
    * usedSize  使用大小
    * inodeSize  inode数量
    * inodeNums  inode节点数量
    * uuid  GUID，可从源端查询
    * sizePerCluster  每个cluster大小
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceUse' => 'setDeviceUse',
            'fileSystem' => 'setFileSystem',
            'index' => 'setIndex',
            'mountPoint' => 'setMountPoint',
            'name' => 'setName',
            'size' => 'setSize',
            'usedSize' => 'setUsedSize',
            'inodeSize' => 'setInodeSize',
            'inodeNums' => 'setInodeNums',
            'uuid' => 'setUuid',
            'sizePerCluster' => 'setSizePerCluster'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceUse  分区类型，普通分区，启动分区，系统分区
    * fileSystem  文件系统类型
    * index  顺序
    * mountPoint  挂载点
    * name  名称，windows表示盘符，Linux表示设备号
    * size  大小
    * usedSize  使用大小
    * inodeSize  inode数量
    * inodeNums  inode节点数量
    * uuid  GUID，可从源端查询
    * sizePerCluster  每个cluster大小
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceUse' => 'getDeviceUse',
            'fileSystem' => 'getFileSystem',
            'index' => 'getIndex',
            'mountPoint' => 'getMountPoint',
            'name' => 'getName',
            'size' => 'getSize',
            'usedSize' => 'getUsedSize',
            'inodeSize' => 'getInodeSize',
            'inodeNums' => 'getInodeNums',
            'uuid' => 'getUuid',
            'sizePerCluster' => 'getSizePerCluster'
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
        $this->container['deviceUse'] = isset($data['deviceUse']) ? $data['deviceUse'] : null;
        $this->container['fileSystem'] = isset($data['fileSystem']) ? $data['fileSystem'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['mountPoint'] = isset($data['mountPoint']) ? $data['mountPoint'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['usedSize'] = isset($data['usedSize']) ? $data['usedSize'] : null;
        $this->container['inodeSize'] = isset($data['inodeSize']) ? $data['inodeSize'] : null;
        $this->container['inodeNums'] = isset($data['inodeNums']) ? $data['inodeNums'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['sizePerCluster'] = isset($data['sizePerCluster']) ? $data['sizePerCluster'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deviceUse']) && (mb_strlen($this->container['deviceUse']) > 255)) {
                $invalidProperties[] = "invalid value for 'deviceUse', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['deviceUse']) && (mb_strlen($this->container['deviceUse']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceUse', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['inodeSize']) && ($this->container['inodeSize'] > 4294967296)) {
                $invalidProperties[] = "invalid value for 'inodeSize', must be smaller than or equal to 4294967296.";
            }
            if (!is_null($this->container['inodeSize']) && ($this->container['inodeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'inodeSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['inodeNums']) && ($this->container['inodeNums'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'inodeNums', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['inodeNums']) && ($this->container['inodeNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'inodeNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) > 255)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sizePerCluster']) && ($this->container['sizePerCluster'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sizePerCluster', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sizePerCluster']) && ($this->container['sizePerCluster'] < 0)) {
                $invalidProperties[] = "invalid value for 'sizePerCluster', must be bigger than or equal to 0.";
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
    * Gets deviceUse
    *  分区类型，普通分区，启动分区，系统分区
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
    * @param string|null $deviceUse 分区类型，普通分区，启动分区，系统分区
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
    *  文件系统类型
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
    * @param string|null $fileSystem 文件系统类型
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
    *  顺序
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
    * @param int|null $index 顺序
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
    *  名称，windows表示盘符，Linux表示设备号
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
    * @param string|null $name 名称，windows表示盘符，Linux表示设备号
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
    * Gets inodeSize
    *  inode数量
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
    * @param int|null $inodeSize inode数量
    *
    * @return $this
    */
    public function setInodeSize($inodeSize)
    {
        $this->container['inodeSize'] = $inodeSize;
        return $this;
    }

    /**
    * Gets inodeNums
    *  inode节点数量
    *
    * @return int|null
    */
    public function getInodeNums()
    {
        return $this->container['inodeNums'];
    }

    /**
    * Sets inodeNums
    *
    * @param int|null $inodeNums inode节点数量
    *
    * @return $this
    */
    public function setInodeNums($inodeNums)
    {
        $this->container['inodeNums'] = $inodeNums;
        return $this;
    }

    /**
    * Gets uuid
    *  GUID，可从源端查询
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
    * @param string|null $uuid GUID，可从源端查询
    *
    * @return $this
    */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;
        return $this;
    }

    /**
    * Gets sizePerCluster
    *  每个cluster大小
    *
    * @return int|null
    */
    public function getSizePerCluster()
    {
        return $this->container['sizePerCluster'];
    }

    /**
    * Sets sizePerCluster
    *
    * @param int|null $sizePerCluster 每个cluster大小
    *
    * @return $this
    */
    public function setSizePerCluster($sizePerCluster)
    {
        $this->container['sizePerCluster'] = $sizePerCluster;
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

