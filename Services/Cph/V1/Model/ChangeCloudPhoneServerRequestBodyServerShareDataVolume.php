<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeCloudPhoneServerRequestBodyServerShareDataVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeCloudPhoneServerRequestBody_server_share_data_volume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeType  磁盘类型，只支持如下类型：   - SSD   - GPSSD
    * size  共享磁盘大小，单位GiB，取值范围[10，32768]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeType' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeType  磁盘类型，只支持如下类型：   - SSD   - GPSSD
    * size  共享磁盘大小，单位GiB，取值范围[10，32768]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeType' => null,
        'size' => 'int32'
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
    * volumeType  磁盘类型，只支持如下类型：   - SSD   - GPSSD
    * size  共享磁盘大小，单位GiB，取值范围[10，32768]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeType' => 'volume_type',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeType  磁盘类型，只支持如下类型：   - SSD   - GPSSD
    * size  共享磁盘大小，单位GiB，取值范围[10，32768]。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeType' => 'setVolumeType',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeType  磁盘类型，只支持如下类型：   - SSD   - GPSSD
    * size  共享磁盘大小，单位GiB，取值范围[10，32768]。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeType' => 'getVolumeType',
            'size' => 'getSize'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumeType'] === null) {
            $invalidProperties[] = "'volumeType' can't be null";
        }
            if ((mb_strlen($this->container['volumeType']) > 36)) {
                $invalidProperties[] = "invalid value for 'volumeType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['volumeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'volumeType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 32768)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 32768.";
            }
            if (($this->container['size'] < 10)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 10.";
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
    *  磁盘类型，只支持如下类型：   - SSD   - GPSSD
    *
    * @return string
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string $volumeType 磁盘类型，只支持如下类型：   - SSD   - GPSSD
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
    *  共享磁盘大小，单位GiB，取值范围[10，32768]。
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
    * @param int $size 共享磁盘大小，单位GiB，取值范围[10，32768]。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

