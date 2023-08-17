<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  对象名
    * size  文件大小，单位KB
    * lastModified  上次修改时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'size' => 'int',
            'lastModified' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  对象名
    * size  文件大小，单位KB
    * lastModified  上次修改时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'size' => null,
        'lastModified' => null
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
    * fileName  对象名
    * size  文件大小，单位KB
    * lastModified  上次修改时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'size' => 'size',
            'lastModified' => 'last_modified'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  对象名
    * size  文件大小，单位KB
    * lastModified  上次修改时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'size' => 'setSize',
            'lastModified' => 'setLastModified'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  对象名
    * size  文件大小，单位KB
    * lastModified  上次修改时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'size' => 'getSize',
            'lastModified' => 'getLastModified'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
            if ((mb_strlen($this->container['fileName']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 15728640)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 15728640.";
            }
            if (($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
        if ($this->container['lastModified'] === null) {
            $invalidProperties[] = "'lastModified' can't be null";
        }
            if ((mb_strlen($this->container['lastModified']) > 29)) {
                $invalidProperties[] = "invalid value for 'lastModified', the character length must be smaller than or equal to 29.";
            }
            if ((mb_strlen($this->container['lastModified']) < 29)) {
                $invalidProperties[] = "invalid value for 'lastModified', the character length must be bigger than or equal to 29.";
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
    * Gets fileName
    *  对象名
    *
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName 对象名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets size
    *  文件大小，单位KB
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
    * @param int $size 文件大小，单位KB
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets lastModified
    *  上次修改时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @return string
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param string $lastModified 上次修改时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
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

