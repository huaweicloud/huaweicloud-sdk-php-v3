<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWatermarkTemplateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWatermarkTemplateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  水印模板名称。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * dx  水印图片相对输出视频的水平偏移量，默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    * type  水印图片格式类型。
    * md5  水印图片MD5值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'watermarkType' => 'string',
            'imageProcess' => 'string',
            'dx' => 'string',
            'dy' => 'string',
            'position' => 'string',
            'width' => 'string',
            'height' => 'string',
            'timelineStart' => 'string',
            'timelineDuration' => 'string',
            'type' => 'string',
            'md5' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  水印模板名称。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * dx  水印图片相对输出视频的水平偏移量，默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    * type  水印图片格式类型。
    * md5  水印图片MD5值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'watermarkType' => null,
        'imageProcess' => null,
        'dx' => null,
        'dy' => null,
        'position' => null,
        'width' => null,
        'height' => null,
        'timelineStart' => null,
        'timelineDuration' => null,
        'type' => null,
        'md5' => null
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
    * name  水印模板名称。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * dx  水印图片相对输出视频的水平偏移量，默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    * type  水印图片格式类型。
    * md5  水印图片MD5值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'watermarkType' => 'watermark_type',
            'imageProcess' => 'image_process',
            'dx' => 'dx',
            'dy' => 'dy',
            'position' => 'position',
            'width' => 'width',
            'height' => 'height',
            'timelineStart' => 'timeline_start',
            'timelineDuration' => 'timeline_duration',
            'type' => 'type',
            'md5' => 'md5'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  水印模板名称。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * dx  水印图片相对输出视频的水平偏移量，默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    * type  水印图片格式类型。
    * md5  水印图片MD5值。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'watermarkType' => 'setWatermarkType',
            'imageProcess' => 'setImageProcess',
            'dx' => 'setDx',
            'dy' => 'setDy',
            'position' => 'setPosition',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'timelineStart' => 'setTimelineStart',
            'timelineDuration' => 'setTimelineDuration',
            'type' => 'setType',
            'md5' => 'setMd5'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  水印模板名称。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * dx  水印图片相对输出视频的水平偏移量，默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    * type  水印图片格式类型。
    * md5  水印图片MD5值。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'watermarkType' => 'getWatermarkType',
            'imageProcess' => 'getImageProcess',
            'dx' => 'getDx',
            'dy' => 'getDy',
            'position' => 'getPosition',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'timelineStart' => 'getTimelineStart',
            'timelineDuration' => 'getTimelineDuration',
            'type' => 'getType',
            'md5' => 'getMd5'
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
    const WATERMARK_TYPE_IMAGE = 'IMAGE';
    const WATERMARK_TYPE_TEXT = 'TEXT';
    const IMAGE_PROCESS_ORIGINAL = 'ORIGINAL';
    const IMAGE_PROCESS_TRANSPARENT = 'TRANSPARENT';
    const IMAGE_PROCESS_GRAYED = 'GRAYED';
    const POSITION_TOPRIGHT = 'TOPRIGHT';
    const POSITION_TOPLEFT = 'TOPLEFT';
    const POSITION_BOTTOMRIGHT = 'BOTTOMRIGHT';
    const POSITION_BOTTOMLEFT = 'BOTTOMLEFT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getWatermarkTypeAllowableValues()
    {
        return [
            self::WATERMARK_TYPE_IMAGE,
            self::WATERMARK_TYPE_TEXT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImageProcessAllowableValues()
    {
        return [
            self::IMAGE_PROCESS_ORIGINAL,
            self::IMAGE_PROCESS_TRANSPARENT,
            self::IMAGE_PROCESS_GRAYED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_TOPRIGHT,
            self::POSITION_TOPLEFT,
            self::POSITION_BOTTOMRIGHT,
            self::POSITION_BOTTOMLEFT,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['watermarkType'] = isset($data['watermarkType']) ? $data['watermarkType'] : null;
        $this->container['imageProcess'] = isset($data['imageProcess']) ? $data['imageProcess'] : null;
        $this->container['dx'] = isset($data['dx']) ? $data['dx'] : null;
        $this->container['dy'] = isset($data['dy']) ? $data['dy'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['timelineStart'] = isset($data['timelineStart']) ? $data['timelineStart'] : null;
        $this->container['timelineDuration'] = isset($data['timelineDuration']) ? $data['timelineDuration'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            $allowedValues = $this->getWatermarkTypeAllowableValues();
                if (!is_null($this->container['watermarkType']) && !in_array($this->container['watermarkType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'watermarkType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getImageProcessAllowableValues();
                if (!is_null($this->container['imageProcess']) && !in_array($this->container['imageProcess'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'imageProcess', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPositionAllowableValues();
                if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'position', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets name
    *  水印模板名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 水印模板名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets watermarkType
    *  水印类型，当前只支持Image（图片水印）。
    *
    * @return string|null
    */
    public function getWatermarkType()
    {
        return $this->container['watermarkType'];
    }

    /**
    * Sets watermarkType
    *
    * @param string|null $watermarkType 水印类型，当前只支持Image（图片水印）。
    *
    * @return $this
    */
    public function setWatermarkType($watermarkType)
    {
        $this->container['watermarkType'] = $watermarkType;
        return $this;
    }

    /**
    * Gets imageProcess
    *  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    *
    * @return string|null
    */
    public function getImageProcess()
    {
        return $this->container['imageProcess'];
    }

    /**
    * Sets imageProcess
    *
    * @param string|null $imageProcess type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    *
    * @return $this
    */
    public function setImageProcess($imageProcess)
    {
        $this->container['imageProcess'] = $imageProcess;
        return $this;
    }

    /**
    * Gets dx
    *  水印图片相对输出视频的水平偏移量，默认值是0。
    *
    * @return string|null
    */
    public function getDx()
    {
        return $this->container['dx'];
    }

    /**
    * Sets dx
    *
    * @param string|null $dx 水印图片相对输出视频的水平偏移量，默认值是0。
    *
    * @return $this
    */
    public function setDx($dx)
    {
        $this->container['dx'] = $dx;
        return $this;
    }

    /**
    * Gets dy
    *  水印图片相对输出视频的垂直偏移量，默认值是0。
    *
    * @return string|null
    */
    public function getDy()
    {
        return $this->container['dy'];
    }

    /**
    * Sets dy
    *
    * @param string|null $dy 水印图片相对输出视频的垂直偏移量，默认值是0。
    *
    * @return $this
    */
    public function setDy($dy)
    {
        $this->container['dy'] = $dy;
        return $this;
    }

    /**
    * Gets position
    *  水印的位置。
    *
    * @return string|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param string|null $position 水印的位置。
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets width
    *  水印图片宽。
    *
    * @return string|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param string|null $width 水印图片宽。
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets height
    *  水印图片高。
    *
    * @return string|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param string|null $height 水印图片高。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets timelineStart
    *  水印开始时间。
    *
    * @return string|null
    */
    public function getTimelineStart()
    {
        return $this->container['timelineStart'];
    }

    /**
    * Sets timelineStart
    *
    * @param string|null $timelineStart 水印开始时间。
    *
    * @return $this
    */
    public function setTimelineStart($timelineStart)
    {
        $this->container['timelineStart'] = $timelineStart;
        return $this;
    }

    /**
    * Gets timelineDuration
    *  水印持续时间。
    *
    * @return string|null
    */
    public function getTimelineDuration()
    {
        return $this->container['timelineDuration'];
    }

    /**
    * Sets timelineDuration
    *
    * @param string|null $timelineDuration 水印持续时间。
    *
    * @return $this
    */
    public function setTimelineDuration($timelineDuration)
    {
        $this->container['timelineDuration'] = $timelineDuration;
        return $this;
    }

    /**
    * Gets type
    *  水印图片格式类型。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 水印图片格式类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets md5
    *  水印图片MD5值。
    *
    * @return string|null
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string|null $md5 水印图片MD5值。
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
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

