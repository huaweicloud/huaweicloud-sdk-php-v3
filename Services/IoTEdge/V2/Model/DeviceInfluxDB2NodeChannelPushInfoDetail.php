<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceInfluxDB2NodeChannelPushInfoDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceInfluxDB2NodeChannelPushInfoDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'organization' => 'string',
            'bucket' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'organization' => null,
        'bucket' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'organization' => 'organization',
            'bucket' => 'bucket'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    *
    * @var string[]
    */
    protected static $setters = [
            'organization' => 'setOrganization',
            'bucket' => 'setBucket'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * organization  一组用户的工作空间，一组用户下可以创建多个bucket
    * bucket  数据存储的地方，结合了数据库和存储周期的概念
    *
    * @var string[]
    */
    protected static $getters = [
            'organization' => 'getOrganization',
            'bucket' => 'getBucket'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) > 32)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) < 1)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organization']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['organization'])) {
                $invalidProperties[] = "invalid value for 'organization', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) > 32)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bucket']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['bucket'])) {
                $invalidProperties[] = "invalid value for 'bucket', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
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
    * @return string|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string|null $organization 一组用户的工作空间，一组用户下可以创建多个bucket
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
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 数据存储的地方，结合了数据库和存储周期的概念
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
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

