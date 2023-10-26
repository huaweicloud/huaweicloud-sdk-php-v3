<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FsDuInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FsDuInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  文件系统内合法的目录全路径
    * usedCapacity  占用容量，单位：byte
    * fileCount  该目录下所有文件数目
    * message  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'usedCapacity' => 'int',
            'fileCount' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\FsFileCount',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  文件系统内合法的目录全路径
    * usedCapacity  占用容量，单位：byte
    * fileCount  该目录下所有文件数目
    * message  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'usedCapacity' => 'int64',
        'fileCount' => null,
        'message' => null
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
    * path  文件系统内合法的目录全路径
    * usedCapacity  占用容量，单位：byte
    * fileCount  该目录下所有文件数目
    * message  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'usedCapacity' => 'used_capacity',
            'fileCount' => 'file_count',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  文件系统内合法的目录全路径
    * usedCapacity  占用容量，单位：byte
    * fileCount  该目录下所有文件数目
    * message  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'usedCapacity' => 'setUsedCapacity',
            'fileCount' => 'setFileCount',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  文件系统内合法的目录全路径
    * usedCapacity  占用容量，单位：byte
    * fileCount  该目录下所有文件数目
    * message  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'usedCapacity' => 'getUsedCapacity',
            'fileCount' => 'getFileCount',
            'message' => 'getMessage'
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
        $this->container['usedCapacity'] = isset($data['usedCapacity']) ? $data['usedCapacity'] : null;
        $this->container['fileCount'] = isset($data['fileCount']) ? $data['fileCount'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
            if ((mb_strlen($this->container['path']) > 4096)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['usedCapacity'] === null) {
            $invalidProperties[] = "'usedCapacity' can't be null";
        }
            if (($this->container['usedCapacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedCapacity', must be bigger than or equal to 0.";
            }
        if ($this->container['fileCount'] === null) {
            $invalidProperties[] = "'fileCount' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
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
    *  文件系统内合法的目录全路径
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
    * @param string $path 文件系统内合法的目录全路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets usedCapacity
    *  占用容量，单位：byte
    *
    * @return int
    */
    public function getUsedCapacity()
    {
        return $this->container['usedCapacity'];
    }

    /**
    * Sets usedCapacity
    *
    * @param int $usedCapacity 占用容量，单位：byte
    *
    * @return $this
    */
    public function setUsedCapacity($usedCapacity)
    {
        $this->container['usedCapacity'] = $usedCapacity;
        return $this;
    }

    /**
    * Gets fileCount
    *  该目录下所有文件数目
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\FsFileCount
    */
    public function getFileCount()
    {
        return $this->container['fileCount'];
    }

    /**
    * Sets fileCount
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\FsFileCount $fileCount 该目录下所有文件数目
    *
    * @return $this
    */
    public function setFileCount($fileCount)
    {
        $this->container['fileCount'] = $fileCount;
        return $this;
    }

    /**
    * Gets message
    *  错误信息
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message 错误信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

