<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateImageWatermarkRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateImageWatermarkRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * file  要添加水印的图片文件，添加的图片短边尺寸需要超过512像素。
    * blindWatermark  待嵌入的文字暗水印内容，长度不超过32个字符。当前仅支持数字及英文大小写。与图片暗水印image_watermark二选一填充。
    * imageWatermark  待嵌入的图片暗水印文件，与文字暗水印 blind_watermark 二选一填充。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'file' => '\SplFileObject',
            'blindWatermark' => 'string',
            'imageWatermark' => '\SplFileObject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * file  要添加水印的图片文件，添加的图片短边尺寸需要超过512像素。
    * blindWatermark  待嵌入的文字暗水印内容，长度不超过32个字符。当前仅支持数字及英文大小写。与图片暗水印image_watermark二选一填充。
    * imageWatermark  待嵌入的图片暗水印文件，与文字暗水印 blind_watermark 二选一填充。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'file' => 'binary',
        'blindWatermark' => null,
        'imageWatermark' => 'binary'
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
    * file  要添加水印的图片文件，添加的图片短边尺寸需要超过512像素。
    * blindWatermark  待嵌入的文字暗水印内容，长度不超过32个字符。当前仅支持数字及英文大小写。与图片暗水印image_watermark二选一填充。
    * imageWatermark  待嵌入的图片暗水印文件，与文字暗水印 blind_watermark 二选一填充。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'file' => 'file',
            'blindWatermark' => 'blind_watermark',
            'imageWatermark' => 'image_watermark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * file  要添加水印的图片文件，添加的图片短边尺寸需要超过512像素。
    * blindWatermark  待嵌入的文字暗水印内容，长度不超过32个字符。当前仅支持数字及英文大小写。与图片暗水印image_watermark二选一填充。
    * imageWatermark  待嵌入的图片暗水印文件，与文字暗水印 blind_watermark 二选一填充。
    *
    * @var string[]
    */
    protected static $setters = [
            'file' => 'setFile',
            'blindWatermark' => 'setBlindWatermark',
            'imageWatermark' => 'setImageWatermark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * file  要添加水印的图片文件，添加的图片短边尺寸需要超过512像素。
    * blindWatermark  待嵌入的文字暗水印内容，长度不超过32个字符。当前仅支持数字及英文大小写。与图片暗水印image_watermark二选一填充。
    * imageWatermark  待嵌入的图片暗水印文件，与文字暗水印 blind_watermark 二选一填充。
    *
    * @var string[]
    */
    protected static $getters = [
            'file' => 'getFile',
            'blindWatermark' => 'getBlindWatermark',
            'imageWatermark' => 'getImageWatermark'
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['blindWatermark'] = isset($data['blindWatermark']) ? $data['blindWatermark'] : null;
        $this->container['imageWatermark'] = isset($data['imageWatermark']) ? $data['imageWatermark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
            if (!is_null($this->container['blindWatermark']) && (mb_strlen($this->container['blindWatermark']) > 32)) {
                $invalidProperties[] = "invalid value for 'blindWatermark', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['blindWatermark']) && (mb_strlen($this->container['blindWatermark']) < 0)) {
                $invalidProperties[] = "invalid value for 'blindWatermark', the character length must be bigger than or equal to 0.";
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
    * Gets file
    *  要添加水印的图片文件，添加的图片短边尺寸需要超过512像素。
    *
    * @return \SplFileObject
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param \SplFileObject $file 要添加水印的图片文件，添加的图片短边尺寸需要超过512像素。
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets blindWatermark
    *  待嵌入的文字暗水印内容，长度不超过32个字符。当前仅支持数字及英文大小写。与图片暗水印image_watermark二选一填充。
    *
    * @return string|null
    */
    public function getBlindWatermark()
    {
        return $this->container['blindWatermark'];
    }

    /**
    * Sets blindWatermark
    *
    * @param string|null $blindWatermark 待嵌入的文字暗水印内容，长度不超过32个字符。当前仅支持数字及英文大小写。与图片暗水印image_watermark二选一填充。
    *
    * @return $this
    */
    public function setBlindWatermark($blindWatermark)
    {
        $this->container['blindWatermark'] = $blindWatermark;
        return $this;
    }

    /**
    * Gets imageWatermark
    *  待嵌入的图片暗水印文件，与文字暗水印 blind_watermark 二选一填充。
    *
    * @return \SplFileObject|null
    */
    public function getImageWatermark()
    {
        return $this->container['imageWatermark'];
    }

    /**
    * Sets imageWatermark
    *
    * @param \SplFileObject|null $imageWatermark 待嵌入的图片暗水印文件，与文字暗水印 blind_watermark 二选一填充。
    *
    * @return $this
    */
    public function setImageWatermark($imageWatermark)
    {
        $this->container['imageWatermark'] = $imageWatermark;
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

