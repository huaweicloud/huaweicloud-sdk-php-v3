<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileAddr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'File_addr';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  OBS的bucket名称。
    * location  桶所在的区域名， 如“华北-北京四”的区域名为“cn-north-4”，创建的桶所在区域必须和点播服务所在区域保持一致。
    * object  文件的存储路径。
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
    * bucket  OBS的bucket名称。
    * location  桶所在的区域名， 如“华北-北京四”的区域名为“cn-north-4”，创建的桶所在区域必须和点播服务所在区域保持一致。
    * object  文件的存储路径。
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
    * bucket  OBS的bucket名称。
    * location  桶所在的区域名， 如“华北-北京四”的区域名为“cn-north-4”，创建的桶所在区域必须和点播服务所在区域保持一致。
    * object  文件的存储路径。
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
    * bucket  OBS的bucket名称。
    * location  桶所在的区域名， 如“华北-北京四”的区域名为“cn-north-4”，创建的桶所在区域必须和点播服务所在区域保持一致。
    * object  文件的存储路径。
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
    * bucket  OBS的bucket名称。
    * location  桶所在的区域名， 如“华北-北京四”的区域名为“cn-north-4”，创建的桶所在区域必须和点播服务所在区域保持一致。
    * object  文件的存储路径。
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
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
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
    *  OBS的bucket名称。
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
    * @param string $bucket OBS的bucket名称。
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
    *  桶所在的区域名， 如“华北-北京四”的区域名为“cn-north-4”，创建的桶所在区域必须和点播服务所在区域保持一致。
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
    * @param string $location 桶所在的区域名， 如“华北-北京四”的区域名为“cn-north-4”，创建的桶所在区域必须和点播服务所在区域保持一致。
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
    *  文件的存储路径。
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
    * @param string $object 文件的存储路径。
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

