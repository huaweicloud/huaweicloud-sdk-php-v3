<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MixUserBackgroundImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MixUserBackgroundImage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  需要设置背景图的用户ID
    * imageUri  需要设置背景图的地址，图片先上传obs，格式s3://bucket/object
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'imageUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  需要设置背景图的用户ID
    * imageUri  需要设置背景图的地址，图片先上传obs，格式s3://bucket/object
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'imageUri' => null
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
    * userId  需要设置背景图的用户ID
    * imageUri  需要设置背景图的地址，图片先上传obs，格式s3://bucket/object
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'imageUri' => 'image_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  需要设置背景图的用户ID
    * imageUri  需要设置背景图的地址，图片先上传obs，格式s3://bucket/object
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'imageUri' => 'setImageUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  需要设置背景图的用户ID
    * imageUri  需要设置背景图的地址，图片先上传obs，格式s3://bucket/object
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'imageUri' => 'getImageUri'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['imageUri'] = isset($data['imageUri']) ? $data['imageUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 64)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['imageUri'] === null) {
            $invalidProperties[] = "'imageUri' can't be null";
        }
            if ((mb_strlen($this->container['imageUri']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageUri', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['imageUri']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageUri', the character length must be bigger than or equal to 1.";
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
    * Gets userId
    *  需要设置背景图的用户ID
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 需要设置背景图的用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets imageUri
    *  需要设置背景图的地址，图片先上传obs，格式s3://bucket/object
    *
    * @return string
    */
    public function getImageUri()
    {
        return $this->container['imageUri'];
    }

    /**
    * Sets imageUri
    *
    * @param string $imageUri 需要设置背景图的地址，图片先上传obs，格式s3://bucket/object
    *
    * @return $this
    */
    public function setImageUri($imageUri)
    {
        $this->container['imageUri'] = $imageUri;
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

