<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveDetectFaceBase64Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveDetectFaceBase64Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB。 • 图片编码格式： JPG、PNG、JPEG、BMP格式的图片。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageBase64' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB。 • 图片编码格式： JPG、PNG、JPEG、BMP格式的图片。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageBase64' => null
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
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB。 • 图片编码格式： JPG、PNG、JPEG、BMP格式的图片。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageBase64' => 'image_base64'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB。 • 图片编码格式： JPG、PNG、JPEG、BMP格式的图片。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageBase64' => 'setImageBase64'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB。 • 图片编码格式： JPG、PNG、JPEG、BMP格式的图片。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageBase64' => 'getImageBase64'
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
        $this->container['imageBase64'] = isset($data['imageBase64']) ? $data['imageBase64'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageBase64'] === null) {
            $invalidProperties[] = "'imageBase64' can't be null";
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
    * Gets imageBase64
    *  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB。 • 图片编码格式： JPG、PNG、JPEG、BMP格式的图片。
    *
    * @return string
    */
    public function getImageBase64()
    {
        return $this->container['imageBase64'];
    }

    /**
    * Sets imageBase64
    *
    * @param string $imageBase64 图像数据，Base64编码，要求： • Base64编码后大小不超过8MB。 • 图片编码格式： JPG、PNG、JPEG、BMP格式的图片。
    *
    * @return $this
    */
    public function setImageBase64($imageBase64)
    {
        $this->container['imageBase64'] = $imageBase64;
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

