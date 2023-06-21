<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordObsFileAddr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordObsFileAddr';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * location  OBS Bucket所在RegionID - cn-north-4
    * projectId  OBS Bucket所在Region的项目ID
    * bucket  OBS的bucket名称
    * object  OBS对象路径，遵守OBS Object定义。如果为空则保存到根目录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'location' => 'string',
            'projectId' => 'string',
            'bucket' => 'string',
            'object' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * location  OBS Bucket所在RegionID - cn-north-4
    * projectId  OBS Bucket所在Region的项目ID
    * bucket  OBS的bucket名称
    * object  OBS对象路径，遵守OBS Object定义。如果为空则保存到根目录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'location' => null,
        'projectId' => null,
        'bucket' => null,
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
    * location  OBS Bucket所在RegionID - cn-north-4
    * projectId  OBS Bucket所在Region的项目ID
    * bucket  OBS的bucket名称
    * object  OBS对象路径，遵守OBS Object定义。如果为空则保存到根目录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'location' => 'location',
            'projectId' => 'project_id',
            'bucket' => 'bucket',
            'object' => 'object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * location  OBS Bucket所在RegionID - cn-north-4
    * projectId  OBS Bucket所在Region的项目ID
    * bucket  OBS的bucket名称
    * object  OBS对象路径，遵守OBS Object定义。如果为空则保存到根目录
    *
    * @var string[]
    */
    protected static $setters = [
            'location' => 'setLocation',
            'projectId' => 'setProjectId',
            'bucket' => 'setBucket',
            'object' => 'setObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * location  OBS Bucket所在RegionID - cn-north-4
    * projectId  OBS Bucket所在Region的项目ID
    * bucket  OBS的bucket名称
    * object  OBS对象路径，遵守OBS Object定义。如果为空则保存到根目录
    *
    * @var string[]
    */
    protected static $getters = [
            'location' => 'getLocation',
            'projectId' => 'getProjectId',
            'bucket' => 'getBucket',
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
    const LOCATION_CN_NORTH_4 = 'cn-north-4';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocationAllowableValues()
    {
        return [
            self::LOCATION_CN_NORTH_4,
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
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
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

        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
            if ((mb_strlen($this->container['bucket']) > 256)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['object']) && (mb_strlen($this->container['object']) > 1024)) {
                $invalidProperties[] = "invalid value for 'object', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['object']) && (mb_strlen($this->container['object']) < 0)) {
                $invalidProperties[] = "invalid value for 'object', the character length must be bigger than or equal to 0.";
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
    * Gets location
    *  OBS Bucket所在RegionID - cn-north-4
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
    * @param string $location OBS Bucket所在RegionID - cn-north-4
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets projectId
    *  OBS Bucket所在Region的项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId OBS Bucket所在Region的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
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
    * Gets object
    *  OBS对象路径，遵守OBS Object定义。如果为空则保存到根目录
    *
    * @return string|null
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string|null $object OBS对象路径，遵守OBS Object定义。如果为空则保存到根目录
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

