<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceInfluxDB2PushInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceInfluxDB2PushInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organization' => 'string',
            'bucket' => 'string',
            'format' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organization' => null,
        'bucket' => null,
        'format' => null
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
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organization' => 'organization',
            'bucket' => 'bucket',
            'format' => 'format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $setters = [
            'organization' => 'setOrganization',
            'bucket' => 'setBucket',
            'format' => 'setFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $getters = [
            'organization' => 'getOrganization',
            'bucket' => 'getBucket',
            'format' => 'getFormat'
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
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
            if ((mb_strlen($this->container['organization']) > 32)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['organization']) < 1)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['organization'])) {
                $invalidProperties[] = "invalid value for 'organization', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
            if ((mb_strlen($this->container['bucket']) > 32)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['bucket'])) {
                $invalidProperties[] = "invalid value for 'bucket', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
            if ((mb_strlen($this->container['format']) > 32)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['format']) < 1)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/(iotda_1.0)/", $this->container['format'])) {
                $invalidProperties[] = "invalid value for 'format', must be conform to the pattern /(iotda_1.0)/.";
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
    * Gets organization
    *  一组用户的工作空间，一组用户下可以创建多个bucket
    *
    * @return string
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string $organization 一组用户的工作空间，一组用户下可以创建多个bucket
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
        return $this;
    }

    /**
    * Gets bucket
    *  数据存储的地方，结合了数据库和存储周期的概念
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
    * @param string $bucket 数据存储的地方，结合了数据库和存储周期的概念
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets format
    *  数据格式转换类型
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 数据格式转换类型
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
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

