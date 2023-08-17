<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsBucket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsBucket';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  OBS的bucket名称
    * location  OBS的bucket所在region
    * creationDate  创建时间，格式如：2020/07/16 15:11:55 GMT+08:00
    * isAuthorized  鉴权
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'location' => 'string',
            'creationDate' => 'string',
            'isAuthorized' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  OBS的bucket名称
    * location  OBS的bucket所在region
    * creationDate  创建时间，格式如：2020/07/16 15:11:55 GMT+08:00
    * isAuthorized  鉴权
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'location' => null,
        'creationDate' => null,
        'isAuthorized' => null
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
    * location  OBS的bucket所在region
    * creationDate  创建时间，格式如：2020/07/16 15:11:55 GMT+08:00
    * isAuthorized  鉴权
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'location' => 'location',
            'creationDate' => 'creation_date',
            'isAuthorized' => 'is_authorized'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  OBS的bucket名称
    * location  OBS的bucket所在region
    * creationDate  创建时间，格式如：2020/07/16 15:11:55 GMT+08:00
    * isAuthorized  鉴权
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'location' => 'setLocation',
            'creationDate' => 'setCreationDate',
            'isAuthorized' => 'setIsAuthorized'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  OBS的bucket名称
    * location  OBS的bucket所在region
    * creationDate  创建时间，格式如：2020/07/16 15:11:55 GMT+08:00
    * isAuthorized  鉴权
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'location' => 'getLocation',
            'creationDate' => 'getCreationDate',
            'isAuthorized' => 'getIsAuthorized'
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
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['isAuthorized'] = isset($data['isAuthorized']) ? $data['isAuthorized'] : null;
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
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
            if ((mb_strlen($this->container['location']) > 63)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['location']) < 1)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['creationDate'] === null) {
            $invalidProperties[] = "'creationDate' can't be null";
        }
            if ((mb_strlen($this->container['creationDate']) > 29)) {
                $invalidProperties[] = "invalid value for 'creationDate', the character length must be smaller than or equal to 29.";
            }
            if ((mb_strlen($this->container['creationDate']) < 29)) {
                $invalidProperties[] = "invalid value for 'creationDate', the character length must be bigger than or equal to 29.";
            }
        if ($this->container['isAuthorized'] === null) {
            $invalidProperties[] = "'isAuthorized' can't be null";
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
    *  OBS的bucket所在region
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
    * @param string $location OBS的bucket所在region
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @return string
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string $creationDate 创建时间，格式如：2020/07/16 15:11:55 GMT+08:00
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets isAuthorized
    *  鉴权
    *
    * @return bool
    */
    public function getIsAuthorized()
    {
        return $this->container['isAuthorized'];
    }

    /**
    * Sets isAuthorized
    *
    * @param bool $isAuthorized 鉴权
    *
    * @return $this
    */
    public function setIsAuthorized($isAuthorized)
    {
        $this->container['isAuthorized'] = $isAuthorized;
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

