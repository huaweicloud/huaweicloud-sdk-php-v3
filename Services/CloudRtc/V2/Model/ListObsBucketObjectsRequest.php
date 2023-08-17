<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListObsBucketObjectsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListObsBucketObjectsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  要查询的桶名
    * prefix  对象名前缀，可以理解为文件夹路径
    * type  查询类似，取值“folders”“objects”前者为查询目录，后者为查询对象
    * location  查询bucket所在的region
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'prefix' => 'string',
            'type' => 'string',
            'location' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  要查询的桶名
    * prefix  对象名前缀，可以理解为文件夹路径
    * type  查询类似，取值“folders”“objects”前者为查询目录，后者为查询对象
    * location  查询bucket所在的region
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'prefix' => null,
        'type' => null,
        'location' => null
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
    * bucket  要查询的桶名
    * prefix  对象名前缀，可以理解为文件夹路径
    * type  查询类似，取值“folders”“objects”前者为查询目录，后者为查询对象
    * location  查询bucket所在的region
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'prefix' => 'prefix',
            'type' => 'type',
            'location' => 'location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  要查询的桶名
    * prefix  对象名前缀，可以理解为文件夹路径
    * type  查询类似，取值“folders”“objects”前者为查询目录，后者为查询对象
    * location  查询bucket所在的region
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'prefix' => 'setPrefix',
            'type' => 'setType',
            'location' => 'setLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  要查询的桶名
    * prefix  对象名前缀，可以理解为文件夹路径
    * type  查询类似，取值“folders”“objects”前者为查询目录，后者为查询对象
    * location  查询bucket所在的region
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'prefix' => 'getPrefix',
            'type' => 'getType',
            'location' => 'getLocation'
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
    const TYPE_FOLDERS = 'folders';
    const TYPE_OBJECTS = 'objects';
    const LOCATION_CN_NORTH_4 = 'cn-north-4';
    const LOCATION_CN_NORTH_1 = 'cn-north-1';
    const LOCATION_CN_NORTH_5 = 'cn-north-5';
    const LOCATION_CN_NORTH_6 = 'cn-north-6';
    const LOCATION_CN_SOUTH_1 = 'cn-south-1';
    const LOCATION_CN_EAST_2 = 'cn-east-2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FOLDERS,
            self::TYPE_OBJECTS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocationAllowableValues()
    {
        return [
            self::LOCATION_CN_NORTH_4,
            self::LOCATION_CN_NORTH_1,
            self::LOCATION_CN_NORTH_5,
            self::LOCATION_CN_NORTH_6,
            self::LOCATION_CN_SOUTH_1,
            self::LOCATION_CN_EAST_2,
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
            if ((mb_strlen($this->container['bucket']) > 63)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['prefix']) && (mb_strlen($this->container['prefix']) > 63)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['prefix']) && (mb_strlen($this->container['prefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['type']) > 16)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
            $allowedValues = $this->getLocationAllowableValues();
                if (!is_null($this->container['location']) && !in_array($this->container['location'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'location', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['location']) > 16)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['location']) < 4)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 4.";
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
    *  要查询的桶名
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
    * @param string $bucket 要查询的桶名
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets prefix
    *  对象名前缀，可以理解为文件夹路径
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 对象名前缀，可以理解为文件夹路径
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets type
    *  查询类似，取值“folders”“objects”前者为查询目录，后者为查询对象
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 查询类似，取值“folders”“objects”前者为查询目录，后者为查询对象
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets location
    *  查询bucket所在的region
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
    * @param string $location 查询bucket所在的region
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
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

