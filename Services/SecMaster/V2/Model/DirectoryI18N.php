<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DirectoryI18N implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DirectoryI18N';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * directory  directory 目录分组
    * directoryEn  directory 目录分组
    * directoryFr  directory 目录分组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'directory' => 'string',
            'directoryEn' => 'string',
            'directoryFr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * directory  directory 目录分组
    * directoryEn  directory 目录分组
    * directoryFr  directory 目录分组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'directory' => null,
        'directoryEn' => null,
        'directoryFr' => null
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
    * directory  directory 目录分组
    * directoryEn  directory 目录分组
    * directoryFr  directory 目录分组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'directory' => 'directory',
            'directoryEn' => 'directory_en',
            'directoryFr' => 'directory_fr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * directory  directory 目录分组
    * directoryEn  directory 目录分组
    * directoryFr  directory 目录分组
    *
    * @var string[]
    */
    protected static $setters = [
            'directory' => 'setDirectory',
            'directoryEn' => 'setDirectoryEn',
            'directoryFr' => 'setDirectoryFr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * directory  directory 目录分组
    * directoryEn  directory 目录分组
    * directoryFr  directory 目录分组
    *
    * @var string[]
    */
    protected static $getters = [
            'directory' => 'getDirectory',
            'directoryEn' => 'getDirectoryEn',
            'directoryFr' => 'getDirectoryFr'
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
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['directoryEn'] = isset($data['directoryEn']) ? $data['directoryEn'] : null;
        $this->container['directoryFr'] = isset($data['directoryFr']) ? $data['directoryFr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directoryEn']) && (mb_strlen($this->container['directoryEn']) > 256)) {
                $invalidProperties[] = "invalid value for 'directoryEn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directoryEn']) && (mb_strlen($this->container['directoryEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'directoryEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directoryFr']) && (mb_strlen($this->container['directoryFr']) > 256)) {
                $invalidProperties[] = "invalid value for 'directoryFr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directoryFr']) && (mb_strlen($this->container['directoryFr']) < 1)) {
                $invalidProperties[] = "invalid value for 'directoryFr', the character length must be bigger than or equal to 1.";
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
    * Gets directory
    *  directory 目录分组
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory directory 目录分组
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets directoryEn
    *  directory 目录分组
    *
    * @return string|null
    */
    public function getDirectoryEn()
    {
        return $this->container['directoryEn'];
    }

    /**
    * Sets directoryEn
    *
    * @param string|null $directoryEn directory 目录分组
    *
    * @return $this
    */
    public function setDirectoryEn($directoryEn)
    {
        $this->container['directoryEn'] = $directoryEn;
        return $this;
    }

    /**
    * Gets directoryFr
    *  directory 目录分组
    *
    * @return string|null
    */
    public function getDirectoryFr()
    {
        return $this->container['directoryFr'];
    }

    /**
    * Sets directoryFr
    *
    * @param string|null $directoryFr directory 目录分组
    *
    * @return $this
    */
    public function setDirectoryFr($directoryFr)
    {
        $this->container['directoryFr'] = $directoryFr;
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

