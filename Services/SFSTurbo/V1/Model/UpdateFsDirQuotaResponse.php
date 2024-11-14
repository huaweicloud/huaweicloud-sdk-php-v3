<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFsDirQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFsDirQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB
    * inode  目录的inode数量限制
    * usedCapacity  目录已使用的容量大小，单位：MB。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    * usedInode  目录的已使用的inode数量。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'capacity' => 'int',
            'inode' => 'int',
            'usedCapacity' => 'int',
            'usedInode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB
    * inode  目录的inode数量限制
    * usedCapacity  目录已使用的容量大小，单位：MB。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    * usedInode  目录的已使用的inode数量。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'capacity' => null,
        'inode' => null,
        'usedCapacity' => null,
        'usedInode' => null
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
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB
    * inode  目录的inode数量限制
    * usedCapacity  目录已使用的容量大小，单位：MB。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    * usedInode  目录的已使用的inode数量。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'capacity' => 'capacity',
            'inode' => 'inode',
            'usedCapacity' => 'used_capacity',
            'usedInode' => 'used_inode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB
    * inode  目录的inode数量限制
    * usedCapacity  目录已使用的容量大小，单位：MB。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    * usedInode  目录的已使用的inode数量。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'capacity' => 'setCapacity',
            'inode' => 'setInode',
            'usedCapacity' => 'setUsedCapacity',
            'usedInode' => 'setUsedInode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB
    * inode  目录的inode数量限制
    * usedCapacity  目录已使用的容量大小，单位：MB。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    * usedInode  目录的已使用的inode数量。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'capacity' => 'getCapacity',
            'inode' => 'getInode',
            'usedCapacity' => 'getUsedCapacity',
            'usedInode' => 'getUsedInode'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['inode'] = isset($data['inode']) ? $data['inode'] : null;
        $this->container['usedCapacity'] = isset($data['usedCapacity']) ? $data['usedCapacity'] : null;
        $this->container['usedInode'] = isset($data['usedInode']) ? $data['usedInode'] : null;
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
    * Gets path
    *  合法的已存在的目录的全路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 合法的已存在的目录的全路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets capacity
    *  目录的容量大小，单位：MB
    *
    * @return int|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param int|null $capacity 目录的容量大小，单位：MB
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets inode
    *  目录的inode数量限制
    *
    * @return int|null
    */
    public function getInode()
    {
        return $this->container['inode'];
    }

    /**
    * Sets inode
    *
    * @param int|null $inode 目录的inode数量限制
    *
    * @return $this
    */
    public function setInode($inode)
    {
        $this->container['inode'] = $inode;
        return $this;
    }

    /**
    * Gets usedCapacity
    *  目录已使用的容量大小，单位：MB。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @return int|null
    */
    public function getUsedCapacity()
    {
        return $this->container['usedCapacity'];
    }

    /**
    * Sets usedCapacity
    *
    * @param int|null $usedCapacity 目录已使用的容量大小，单位：MB。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @return $this
    */
    public function setUsedCapacity($usedCapacity)
    {
        $this->container['usedCapacity'] = $usedCapacity;
        return $this;
    }

    /**
    * Gets usedInode
    *  目录的已使用的inode数量。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @return int|null
    */
    public function getUsedInode()
    {
        return $this->container['usedInode'];
    }

    /**
    * Sets usedInode
    *
    * @param int|null $usedInode 目录的已使用的inode数量。仅SFSTurbo 20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB返回该字段
    *
    * @return $this
    */
    public function setUsedInode($usedInode)
    {
        $this->container['usedInode'] = $usedInode;
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

