<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogicalVolumes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogicalVolumes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blockCount  块数量
    * blockSize  块大小
    * fileSystem  文件系统
    * inodeSize  inode数量
    * deviceUse  已使用大小
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * freeSize  剩余空间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blockCount' => 'int',
            'blockSize' => 'int',
            'fileSystem' => 'string',
            'inodeSize' => 'int',
            'deviceUse' => 'int',
            'mountPoint' => 'string',
            'name' => 'string',
            'size' => 'int',
            'usedSize' => 'int',
            'freeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blockCount  块数量
    * blockSize  块大小
    * fileSystem  文件系统
    * inodeSize  inode数量
    * deviceUse  已使用大小
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * freeSize  剩余空间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blockCount' => 'int32',
        'blockSize' => 'int64',
        'fileSystem' => null,
        'inodeSize' => 'int32',
        'deviceUse' => 'int32',
        'mountPoint' => null,
        'name' => null,
        'size' => 'int64',
        'usedSize' => 'int64',
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
    * blockCount  块数量
    * blockSize  块大小
    * fileSystem  文件系统
    * inodeSize  inode数量
    * deviceUse  已使用大小
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * freeSize  剩余空间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blockCount' => 'block_count',
            'blockSize' => 'block_size',
            'fileSystem' => 'file_system',
            'inodeSize' => 'inode_size',
            'deviceUse' => 'device_use',
            'mountPoint' => 'mount_point',
            'name' => 'name',
            'size' => 'size',
            'usedSize' => 'used_size',
            'freeSize' => 'free_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blockCount  块数量
    * blockSize  块大小
    * fileSystem  文件系统
    * inodeSize  inode数量
    * deviceUse  已使用大小
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * freeSize  剩余空间
    *
    * @var string[]
    */
    protected static $setters = [
            'blockCount' => 'setBlockCount',
            'blockSize' => 'setBlockSize',
            'fileSystem' => 'setFileSystem',
            'inodeSize' => 'setInodeSize',
            'deviceUse' => 'setDeviceUse',
            'mountPoint' => 'setMountPoint',
            'name' => 'setName',
            'size' => 'setSize',
            'usedSize' => 'setUsedSize',
            'freeSize' => 'setFreeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blockCount  块数量
    * blockSize  块大小
    * fileSystem  文件系统
    * inodeSize  inode数量
    * deviceUse  已使用大小
    * mountPoint  挂载点
    * name  名称
    * size  大小
    * usedSize  使用大小
    * freeSize  剩余空间
    *
    * @var string[]
    */
    protected static $getters = [
            'blockCount' => 'getBlockCount',
            'blockSize' => 'getBlockSize',
            'fileSystem' => 'getFileSystem',
            'inodeSize' => 'getInodeSize',
            'deviceUse' => 'getDeviceUse',
            'mountPoint' => 'getMountPoint',
            'name' => 'getName',
            'size' => 'getSize',
            'usedSize' => 'getUsedSize',
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
        $this->container['blockCount'] = isset($data['blockCount']) ? $data['blockCount'] : null;
        $this->container['blockSize'] = isset($data['blockSize']) ? $data['blockSize'] : null;
        $this->container['fileSystem'] = isset($data['fileSystem']) ? $data['fileSystem'] : null;
        $this->container['inodeSize'] = isset($data['inodeSize']) ? $data['inodeSize'] : null;
        $this->container['deviceUse'] = isset($data['deviceUse']) ? $data['deviceUse'] : null;
        $this->container['mountPoint'] = isset($data['mountPoint']) ? $data['mountPoint'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['usedSize'] = isset($data['usedSize']) ? $data['usedSize'] : null;
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
            if (!is_null($this->container['blockCount']) && ($this->container['blockCount'] > 4294967296)) {
                $invalidProperties[] = "invalid value for 'blockCount', must be smaller than or equal to 4294967296.";
            }
            if (!is_null($this->container['blockCount']) && ($this->container['blockCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockSize']) && ($this->container['blockSize'] > 1048576)) {
                $invalidProperties[] = "invalid value for 'blockSize', must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['blockSize']) && ($this->container['blockSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockSize', must be bigger than or equal to 0.";
            }
        if ($this->container['fileSystem'] === null) {
            $invalidProperties[] = "'fileSystem' can't be null";
        }
            if ((mb_strlen($this->container['fileSystem']) > 255)) {
                $invalidProperties[] = "invalid value for 'fileSystem', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['fileSystem']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileSystem', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['inodeSize'] === null) {
            $invalidProperties[] = "'inodeSize' can't be null";
        }
            if (($this->container['inodeSize'] > 4294967296)) {
                $invalidProperties[] = "invalid value for 'inodeSize', must be smaller than or equal to 4294967296.";
            }
            if (($this->container['inodeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'inodeSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceUse']) && ($this->container['deviceUse'] > 4294967296)) {
                $invalidProperties[] = "invalid value for 'deviceUse', must be smaller than or equal to 4294967296.";
            }
            if (!is_null($this->container['deviceUse']) && ($this->container['deviceUse'] < 0)) {
                $invalidProperties[] = "invalid value for 'deviceUse', must be bigger than or equal to 0.";
            }
        if ($this->container['mountPoint'] === null) {
            $invalidProperties[] = "'mountPoint' can't be null";
        }
            if ((mb_strlen($this->container['mountPoint']) > 256)) {
                $invalidProperties[] = "invalid value for 'mountPoint', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['mountPoint']) < 0)) {
                $invalidProperties[] = "invalid value for 'mountPoint', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
        if ($this->container['usedSize'] === null) {
            $invalidProperties[] = "'usedSize' can't be null";
        }
            if (($this->container['usedSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'usedSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['usedSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedSize', must be bigger than or equal to 0.";
            }
        if ($this->container['freeSize'] === null) {
            $invalidProperties[] = "'freeSize' can't be null";
        }
            if (($this->container['freeSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'freeSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['freeSize'] < 0)) {
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
    * Gets blockCount
    *  块数量
    *
    * @return int|null
    */
    public function getBlockCount()
    {
        return $this->container['blockCount'];
    }

    /**
    * Sets blockCount
    *
    * @param int|null $blockCount 块数量
    *
    * @return $this
    */
    public function setBlockCount($blockCount)
    {
        $this->container['blockCount'] = $blockCount;
        return $this;
    }

    /**
    * Gets blockSize
    *  块大小
    *
    * @return int|null
    */
    public function getBlockSize()
    {
        return $this->container['blockSize'];
    }

    /**
    * Sets blockSize
    *
    * @param int|null $blockSize 块大小
    *
    * @return $this
    */
    public function setBlockSize($blockSize)
    {
        $this->container['blockSize'] = $blockSize;
        return $this;
    }

    /**
    * Gets fileSystem
    *  文件系统
    *
    * @return string
    */
    public function getFileSystem()
    {
        return $this->container['fileSystem'];
    }

    /**
    * Sets fileSystem
    *
    * @param string $fileSystem 文件系统
    *
    * @return $this
    */
    public function setFileSystem($fileSystem)
    {
        $this->container['fileSystem'] = $fileSystem;
        return $this;
    }

    /**
    * Gets inodeSize
    *  inode数量
    *
    * @return int
    */
    public function getInodeSize()
    {
        return $this->container['inodeSize'];
    }

    /**
    * Sets inodeSize
    *
    * @param int $inodeSize inode数量
    *
    * @return $this
    */
    public function setInodeSize($inodeSize)
    {
        $this->container['inodeSize'] = $inodeSize;
        return $this;
    }

    /**
    * Gets deviceUse
    *  已使用大小
    *
    * @return int|null
    */
    public function getDeviceUse()
    {
        return $this->container['deviceUse'];
    }

    /**
    * Sets deviceUse
    *
    * @param int|null $deviceUse 已使用大小
    *
    * @return $this
    */
    public function setDeviceUse($deviceUse)
    {
        $this->container['deviceUse'] = $deviceUse;
        return $this;
    }

    /**
    * Gets mountPoint
    *  挂载点
    *
    * @return string
    */
    public function getMountPoint()
    {
        return $this->container['mountPoint'];
    }

    /**
    * Sets mountPoint
    *
    * @param string $mountPoint 挂载点
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
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
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
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 大小
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
    * @return int
    */
    public function getUsedSize()
    {
        return $this->container['usedSize'];
    }

    /**
    * Sets usedSize
    *
    * @param int $usedSize 使用大小
    *
    * @return $this
    */
    public function setUsedSize($usedSize)
    {
        $this->container['usedSize'] = $usedSize;
        return $this;
    }

    /**
    * Gets freeSize
    *  剩余空间
    *
    * @return int
    */
    public function getFreeSize()
    {
        return $this->container['freeSize'];
    }

    /**
    * Sets freeSize
    *
    * @param int $freeSize 剩余空间
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

