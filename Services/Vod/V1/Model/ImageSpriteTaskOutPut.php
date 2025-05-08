<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageSpriteTaskOutPut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageSpriteTaskOutPut';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsInfo  obsInfo
    * height  雪碧图的高度
    * width  雪碧图的宽度
    * spriteImageList  雪碧图对象列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'height' => 'int',
            'width' => 'int',
            'spriteImageList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsInfo  obsInfo
    * height  雪碧图的高度
    * width  雪碧图的宽度
    * spriteImageList  雪碧图对象列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsInfo' => null,
        'height' => null,
        'width' => null,
        'spriteImageList' => null
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
    * obsInfo  obsInfo
    * height  雪碧图的高度
    * width  雪碧图的宽度
    * spriteImageList  雪碧图对象列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsInfo' => 'obs_info',
            'height' => 'height',
            'width' => 'width',
            'spriteImageList' => 'sprite_image_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsInfo  obsInfo
    * height  雪碧图的高度
    * width  雪碧图的宽度
    * spriteImageList  雪碧图对象列表
    *
    * @var string[]
    */
    protected static $setters = [
            'obsInfo' => 'setObsInfo',
            'height' => 'setHeight',
            'width' => 'setWidth',
            'spriteImageList' => 'setSpriteImageList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsInfo  obsInfo
    * height  雪碧图的高度
    * width  雪碧图的宽度
    * spriteImageList  雪碧图对象列表
    *
    * @var string[]
    */
    protected static $getters = [
            'obsInfo' => 'getObsInfo',
            'height' => 'getHeight',
            'width' => 'getWidth',
            'spriteImageList' => 'getSpriteImageList'
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
        $this->container['obsInfo'] = isset($data['obsInfo']) ? $data['obsInfo'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['spriteImageList'] = isset($data['spriteImageList']) ? $data['spriteImageList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets obsInfo
    *  obsInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null
    */
    public function getObsInfo()
    {
        return $this->container['obsInfo'];
    }

    /**
    * Sets obsInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null $obsInfo obsInfo
    *
    * @return $this
    */
    public function setObsInfo($obsInfo)
    {
        $this->container['obsInfo'] = $obsInfo;
        return $this;
    }

    /**
    * Gets height
    *  雪碧图的高度
    *
    * @return int|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int|null $height 雪碧图的高度
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets width
    *  雪碧图的宽度
    *
    * @return int|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int|null $width 雪碧图的宽度
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets spriteImageList
    *  雪碧图对象列表
    *
    * @return string[]|null
    */
    public function getSpriteImageList()
    {
        return $this->container['spriteImageList'];
    }

    /**
    * Sets spriteImageList
    *
    * @param string[]|null $spriteImageList 雪碧图对象列表
    *
    * @return $this
    */
    public function setSpriteImageList($spriteImageList)
    {
        $this->container['spriteImageList'] = $spriteImageList;
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

