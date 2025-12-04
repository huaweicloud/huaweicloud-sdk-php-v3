<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCloudPhoneServerDetailResponseBodyShareVolumeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCloudPhoneServerDetailResponseBody_share_volume_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeType  共享存储磁盘类型。
    * size  共享存储大小，单位G。
    * version  共享存储版本： - 0：共享存储1.0 - 1：共享存储2.0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeType' => 'string',
            'size' => 'int',
            'version' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeType  共享存储磁盘类型。
    * size  共享存储大小，单位G。
    * version  共享存储版本： - 0：共享存储1.0 - 1：共享存储2.0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeType' => null,
        'size' => 'int32',
        'version' => 'int32'
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
    * volumeType  共享存储磁盘类型。
    * size  共享存储大小，单位G。
    * version  共享存储版本： - 0：共享存储1.0 - 1：共享存储2.0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeType' => 'volume_type',
            'size' => 'size',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeType  共享存储磁盘类型。
    * size  共享存储大小，单位G。
    * version  共享存储版本： - 0：共享存储1.0 - 1：共享存储2.0
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeType' => 'setVolumeType',
            'size' => 'setSize',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeType  共享存储磁盘类型。
    * size  共享存储大小，单位G。
    * version  共享存储版本： - 0：共享存储1.0 - 1：共享存储2.0
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeType' => 'getVolumeType',
            'size' => 'getSize',
            'version' => 'getVersion'
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
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['volumeType']) && (mb_strlen($this->container['volumeType']) > 64)) {
                $invalidProperties[] = "invalid value for 'volumeType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['volumeType']) && (mb_strlen($this->container['volumeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'volumeType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 65535)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] > 65535)) {
                $invalidProperties[] = "invalid value for 'version', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] < 0)) {
                $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 0.";
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
    * Gets volumeType
    *  共享存储磁盘类型。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 共享存储磁盘类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets size
    *  共享存储大小，单位G。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 共享存储大小，单位G。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets version
    *  共享存储版本： - 0：共享存储1.0 - 1：共享存储2.0
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 共享存储版本： - 0：共享存储1.0 - 1：共享存储2.0
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

