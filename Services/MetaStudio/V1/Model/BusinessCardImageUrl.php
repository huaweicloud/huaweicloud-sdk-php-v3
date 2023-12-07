<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessCardImageUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessCardImageUrl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * humanImageUrl  任务照片下载URL。
    * logoImage  Logo图片下载URL。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'humanImageUrl' => 'string',
            'logoImage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * humanImageUrl  任务照片下载URL。
    * logoImage  Logo图片下载URL。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'humanImageUrl' => null,
        'logoImage' => null
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
    * humanImageUrl  任务照片下载URL。
    * logoImage  Logo图片下载URL。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'humanImageUrl' => 'human_image_url',
            'logoImage' => 'logo_image'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * humanImageUrl  任务照片下载URL。
    * logoImage  Logo图片下载URL。
    *
    * @var string[]
    */
    protected static $setters = [
            'humanImageUrl' => 'setHumanImageUrl',
            'logoImage' => 'setLogoImage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * humanImageUrl  任务照片下载URL。
    * logoImage  Logo图片下载URL。
    *
    * @var string[]
    */
    protected static $getters = [
            'humanImageUrl' => 'getHumanImageUrl',
            'logoImage' => 'getLogoImage'
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
        $this->container['humanImageUrl'] = isset($data['humanImageUrl']) ? $data['humanImageUrl'] : null;
        $this->container['logoImage'] = isset($data['logoImage']) ? $data['logoImage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['humanImageUrl']) && (mb_strlen($this->container['humanImageUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'humanImageUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['humanImageUrl']) && (mb_strlen($this->container['humanImageUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'humanImageUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logoImage']) && (mb_strlen($this->container['logoImage']) > 2048)) {
                $invalidProperties[] = "invalid value for 'logoImage', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['logoImage']) && (mb_strlen($this->container['logoImage']) < 1)) {
                $invalidProperties[] = "invalid value for 'logoImage', the character length must be bigger than or equal to 1.";
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
    * Gets humanImageUrl
    *  任务照片下载URL。
    *
    * @return string|null
    */
    public function getHumanImageUrl()
    {
        return $this->container['humanImageUrl'];
    }

    /**
    * Sets humanImageUrl
    *
    * @param string|null $humanImageUrl 任务照片下载URL。
    *
    * @return $this
    */
    public function setHumanImageUrl($humanImageUrl)
    {
        $this->container['humanImageUrl'] = $humanImageUrl;
        return $this;
    }

    /**
    * Gets logoImage
    *  Logo图片下载URL。
    *
    * @return string|null
    */
    public function getLogoImage()
    {
        return $this->container['logoImage'];
    }

    /**
    * Sets logoImage
    *
    * @param string|null $logoImage Logo图片下载URL。
    *
    * @return $this
    */
    public function setLogoImage($logoImage)
    {
        $this->container['logoImage'] = $logoImage;
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

