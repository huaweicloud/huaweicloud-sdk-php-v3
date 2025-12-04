<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PhoneDataVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PhoneDataVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeType  云手机数据盘类型。
    * volumeSize  云手机数据盘大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeType' => 'string',
            'volumeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeType  云手机数据盘类型。
    * volumeSize  云手机数据盘大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeType' => null,
        'volumeSize' => 'int32'
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
    * volumeType  云手机数据盘类型。
    * volumeSize  云手机数据盘大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeType' => 'volume_type',
            'volumeSize' => 'volume_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeType  云手机数据盘类型。
    * volumeSize  云手机数据盘大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeType' => 'setVolumeType',
            'volumeSize' => 'setVolumeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeType  云手机数据盘类型。
    * volumeSize  云手机数据盘大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeType' => 'getVolumeType',
            'volumeSize' => 'getVolumeSize'
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
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['volumeType']) && (mb_strlen($this->container['volumeType']) > 16)) {
                $invalidProperties[] = "invalid value for 'volumeType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['volumeType']) && (mb_strlen($this->container['volumeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'volumeType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeSize']) && ($this->container['volumeSize'] > 4096)) {
                $invalidProperties[] = "invalid value for 'volumeSize', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['volumeSize']) && ($this->container['volumeSize'] < 10)) {
                $invalidProperties[] = "invalid value for 'volumeSize', must be bigger than or equal to 10.";
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
    *  云手机数据盘类型。
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
    * @param string|null $volumeType 云手机数据盘类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets volumeSize
    *  云手机数据盘大小。
    *
    * @return int|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int|null $volumeSize 云手机数据盘大小。
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
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

