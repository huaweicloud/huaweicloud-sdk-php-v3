<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePhotoDetectionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePhotoDetectionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'humanImage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'humanImage' => null
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
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'humanImage' => 'human_image'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    *
    * @var string[]
    */
    protected static $setters = [
            'humanImage' => 'setHumanImage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * humanImage  人物照片，需要Base64编码。照片分辨率不超过1080P。
    *
    * @var string[]
    */
    protected static $getters = [
            'humanImage' => 'getHumanImage'
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
        $this->container['humanImage'] = isset($data['humanImage']) ? $data['humanImage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['humanImage'] === null) {
            $invalidProperties[] = "'humanImage' can't be null";
        }
            if ((mb_strlen($this->container['humanImage']) > 31457280)) {
                $invalidProperties[] = "invalid value for 'humanImage', the character length must be smaller than or equal to 31457280.";
            }
            if ((mb_strlen($this->container['humanImage']) < 1)) {
                $invalidProperties[] = "invalid value for 'humanImage', the character length must be bigger than or equal to 1.";
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
    * Gets humanImage
    *  人物照片，需要Base64编码。照片分辨率不超过1080P。
    *
    * @return string
    */
    public function getHumanImage()
    {
        return $this->container['humanImage'];
    }

    /**
    * Sets humanImage
    *
    * @param string $humanImage 人物照片，需要Base64编码。照片分辨率不超过1080P。
    *
    * @return $this
    */
    public function setHumanImage($humanImage)
    {
        $this->container['humanImage'] = $humanImage;
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

