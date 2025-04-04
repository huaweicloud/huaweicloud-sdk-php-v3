<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFsDirQuotaRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFsDirQuotaRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    * inode  目录的inode数量限制; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'capacity' => 'int',
            'inode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    * inode  目录的inode数量限制; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'capacity' => null,
        'inode' => null
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
    * capacity  目录的容量大小，单位：MB; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    * inode  目录的inode数量限制; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'capacity' => 'capacity',
            'inode' => 'inode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    * inode  目录的inode数量限制; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'capacity' => 'setCapacity',
            'inode' => 'setInode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  合法的已存在的目录的全路径
    * capacity  目录的容量大小，单位：MB; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    * inode  目录的inode数量限制; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'capacity' => 'getCapacity',
            'inode' => 'getInode'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
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
    * Gets path
    *  合法的已存在的目录的全路径
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 合法的已存在的目录的全路径
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
    *  目录的容量大小，单位：MB; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
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
    * @param int|null $capacity 目录的容量大小，单位：MB; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
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
    *  目录的inode数量限制; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
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
    * @param int|null $inode 目录的inode数量限制; 设置为0会导致数据无法写入目录; capacity和quota至少二选一
    *
    * @return $this
    */
    public function setInode($inode)
    {
        $this->container['inode'] = $inode;
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

