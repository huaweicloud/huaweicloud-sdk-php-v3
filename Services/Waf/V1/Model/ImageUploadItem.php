<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageUploadItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageUploadItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageName  图片名称（后缀必须为jpg/jpeg/png/bmp）
    * imageSize  图片大小（字节，不超过max_image_size默认5MB）
    * uploadContentType  上传内容类型（作为Content-Type请求头纳入OBS预签名，客户端PUT上传时须用相同值）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageName' => 'string',
            'imageSize' => 'int',
            'uploadContentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageName  图片名称（后缀必须为jpg/jpeg/png/bmp）
    * imageSize  图片大小（字节，不超过max_image_size默认5MB）
    * uploadContentType  上传内容类型（作为Content-Type请求头纳入OBS预签名，客户端PUT上传时须用相同值）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageName' => null,
        'imageSize' => 'int64',
        'uploadContentType' => null
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
    * imageName  图片名称（后缀必须为jpg/jpeg/png/bmp）
    * imageSize  图片大小（字节，不超过max_image_size默认5MB）
    * uploadContentType  上传内容类型（作为Content-Type请求头纳入OBS预签名，客户端PUT上传时须用相同值）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageName' => 'image_name',
            'imageSize' => 'image_size',
            'uploadContentType' => 'upload_content_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageName  图片名称（后缀必须为jpg/jpeg/png/bmp）
    * imageSize  图片大小（字节，不超过max_image_size默认5MB）
    * uploadContentType  上传内容类型（作为Content-Type请求头纳入OBS预签名，客户端PUT上传时须用相同值）
    *
    * @var string[]
    */
    protected static $setters = [
            'imageName' => 'setImageName',
            'imageSize' => 'setImageSize',
            'uploadContentType' => 'setUploadContentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageName  图片名称（后缀必须为jpg/jpeg/png/bmp）
    * imageSize  图片大小（字节，不超过max_image_size默认5MB）
    * uploadContentType  上传内容类型（作为Content-Type请求头纳入OBS预签名，客户端PUT上传时须用相同值）
    *
    * @var string[]
    */
    protected static $getters = [
            'imageName' => 'getImageName',
            'imageSize' => 'getImageSize',
            'uploadContentType' => 'getUploadContentType'
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['uploadContentType'] = isset($data['uploadContentType']) ? $data['uploadContentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageName'] === null) {
            $invalidProperties[] = "'imageName' can't be null";
        }
            if ((mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!preg_match("/^(?! )(?!.* $)[\\p{L}0-9()（）@#_\\-\/\\ |:：.]{1,256}$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^(?! )(?!.* $)[\\p{L}0-9()（）@#_\\-\/\\ |:：.]{1,256}$/.";
            }
        if ($this->container['imageSize'] === null) {
            $invalidProperties[] = "'imageSize' can't be null";
        }
            if (($this->container['imageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'imageSize', must be bigger than or equal to 1.";
            }
        if ($this->container['uploadContentType'] === null) {
            $invalidProperties[] = "'uploadContentType' can't be null";
        }
            if ((mb_strlen($this->container['uploadContentType']) > 128)) {
                $invalidProperties[] = "invalid value for 'uploadContentType', the character length must be smaller than or equal to 128.";
            }
            if (!preg_match("/^[A-Za-z0-9._+;\/= \"-]{1,128}$/", $this->container['uploadContentType'])) {
                $invalidProperties[] = "invalid value for 'uploadContentType', must be conform to the pattern /^[A-Za-z0-9._+;\/= \"-]{1,128}$/.";
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
    * Gets imageName
    *  图片名称（后缀必须为jpg/jpeg/png/bmp）
    *
    * @return string
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string $imageName 图片名称（后缀必须为jpg/jpeg/png/bmp）
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageSize
    *  图片大小（字节，不超过max_image_size默认5MB）
    *
    * @return int
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param int $imageSize 图片大小（字节，不超过max_image_size默认5MB）
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets uploadContentType
    *  上传内容类型（作为Content-Type请求头纳入OBS预签名，客户端PUT上传时须用相同值）
    *
    * @return string
    */
    public function getUploadContentType()
    {
        return $this->container['uploadContentType'];
    }

    /**
    * Sets uploadContentType
    *
    * @param string $uploadContentType 上传内容类型（作为Content-Type请求头纳入OBS预签名，客户端PUT上传时须用相同值）
    *
    * @return $this
    */
    public function setUploadContentType($uploadContentType)
    {
        $this->container['uploadContentType'] = $uploadContentType;
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

