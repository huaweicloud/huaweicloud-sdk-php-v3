<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsFileAddr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsFileAddr';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  OBS的bucket名称
    * location  OBS Bucket所在数据中心（OBS Location）
    * object  OBS对象路径，遵守OSS Object定义，当用于指示input时,需要指定到具体对象；当用于指示output时, 只需指定到转码结果期望存放的路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'location' => 'string',
            'object' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  OBS的bucket名称
    * location  OBS Bucket所在数据中心（OBS Location）
    * object  OBS对象路径，遵守OSS Object定义，当用于指示input时,需要指定到具体对象；当用于指示output时, 只需指定到转码结果期望存放的路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'location' => null,
        'object' => null
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
    * bucket  OBS的bucket名称
    * location  OBS Bucket所在数据中心（OBS Location）
    * object  OBS对象路径，遵守OSS Object定义，当用于指示input时,需要指定到具体对象；当用于指示output时, 只需指定到转码结果期望存放的路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'location' => 'location',
            'object' => 'object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  OBS的bucket名称
    * location  OBS Bucket所在数据中心（OBS Location）
    * object  OBS对象路径，遵守OSS Object定义，当用于指示input时,需要指定到具体对象；当用于指示output时, 只需指定到转码结果期望存放的路径
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'location' => 'setLocation',
            'object' => 'setObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  OBS的bucket名称
    * location  OBS Bucket所在数据中心（OBS Location）
    * object  OBS对象路径，遵守OSS Object定义，当用于指示input时,需要指定到具体对象；当用于指示output时, 只需指定到转码结果期望存放的路径
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'location' => 'getLocation',
            'object' => 'getObject'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
            if ((mb_strlen($this->container['bucket']) > 64)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
            if ((mb_strlen($this->container['location']) > 128)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['location']) < 1)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
            if ((mb_strlen($this->container['object']) > 1024)) {
                $invalidProperties[] = "invalid value for 'object', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['object']) < 1)) {
                $invalidProperties[] = "invalid value for 'object', the character length must be bigger than or equal to 1.";
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
    * Gets bucket
    *  OBS的bucket名称
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket OBS的bucket名称
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets location
    *  OBS Bucket所在数据中心（OBS Location）
    *
    * @return string
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string $location OBS Bucket所在数据中心（OBS Location）
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets object
    *  OBS对象路径，遵守OSS Object定义，当用于指示input时,需要指定到具体对象；当用于指示output时, 只需指定到转码结果期望存放的路径
    *
    * @return string
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string $object OBS对象路径，遵守OSS Object定义，当用于指示input时,需要指定到具体对象；当用于指示output时, 只需指定到转码结果期望存放的路径
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
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

