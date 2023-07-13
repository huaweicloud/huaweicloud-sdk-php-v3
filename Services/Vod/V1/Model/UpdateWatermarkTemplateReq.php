<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateWatermarkTemplateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateWatermarkTemplateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  水印模板配置id<br/>
    * name  水印模板名称<br/>
    * dx  水印图片相对输出视频的水平偏移量，默认值是0<br/>
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0<br/>
    * position  水印的位置<br/>
    * width  水印图片宽<br/>
    * height  水印图片高<br/>
    * watermarkType  水印类型，当前只支持Image（图片水印）<br/>
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间，与\"timeline_duration\"配合使用。 取值范围:[0, END)。\"END\"表示视频结束时间。 单位:秒。
    * timelineDuration  水印持续时间，与\"timeline_start\"配合使用。 取值范围:(0,END-开始时间]。\"END\"表示视频结束时间。 单位:秒。 默认:END。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'dx' => 'string',
            'dy' => 'string',
            'position' => 'string',
            'width' => 'string',
            'height' => 'string',
            'watermarkType' => 'string',
            'imageProcess' => 'string',
            'timelineStart' => 'string',
            'timelineDuration' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  水印模板配置id<br/>
    * name  水印模板名称<br/>
    * dx  水印图片相对输出视频的水平偏移量，默认值是0<br/>
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0<br/>
    * position  水印的位置<br/>
    * width  水印图片宽<br/>
    * height  水印图片高<br/>
    * watermarkType  水印类型，当前只支持Image（图片水印）<br/>
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间，与\"timeline_duration\"配合使用。 取值范围:[0, END)。\"END\"表示视频结束时间。 单位:秒。
    * timelineDuration  水印持续时间，与\"timeline_start\"配合使用。 取值范围:(0,END-开始时间]。\"END\"表示视频结束时间。 单位:秒。 默认:END。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'dx' => null,
        'dy' => null,
        'position' => null,
        'width' => null,
        'height' => null,
        'watermarkType' => null,
        'imageProcess' => null,
        'timelineStart' => null,
        'timelineDuration' => null
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
    * id  水印模板配置id<br/>
    * name  水印模板名称<br/>
    * dx  水印图片相对输出视频的水平偏移量，默认值是0<br/>
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0<br/>
    * position  水印的位置<br/>
    * width  水印图片宽<br/>
    * height  水印图片高<br/>
    * watermarkType  水印类型，当前只支持Image（图片水印）<br/>
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间，与\"timeline_duration\"配合使用。 取值范围:[0, END)。\"END\"表示视频结束时间。 单位:秒。
    * timelineDuration  水印持续时间，与\"timeline_start\"配合使用。 取值范围:(0,END-开始时间]。\"END\"表示视频结束时间。 单位:秒。 默认:END。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'dx' => 'dx',
            'dy' => 'dy',
            'position' => 'position',
            'width' => 'width',
            'height' => 'height',
            'watermarkType' => 'watermark_type',
            'imageProcess' => 'image_process',
            'timelineStart' => 'timeline_start',
            'timelineDuration' => 'timeline_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  水印模板配置id<br/>
    * name  水印模板名称<br/>
    * dx  水印图片相对输出视频的水平偏移量，默认值是0<br/>
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0<br/>
    * position  水印的位置<br/>
    * width  水印图片宽<br/>
    * height  水印图片高<br/>
    * watermarkType  水印类型，当前只支持Image（图片水印）<br/>
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间，与\"timeline_duration\"配合使用。 取值范围:[0, END)。\"END\"表示视频结束时间。 单位:秒。
    * timelineDuration  水印持续时间，与\"timeline_start\"配合使用。 取值范围:(0,END-开始时间]。\"END\"表示视频结束时间。 单位:秒。 默认:END。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'dx' => 'setDx',
            'dy' => 'setDy',
            'position' => 'setPosition',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'watermarkType' => 'setWatermarkType',
            'imageProcess' => 'setImageProcess',
            'timelineStart' => 'setTimelineStart',
            'timelineDuration' => 'setTimelineDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  水印模板配置id<br/>
    * name  水印模板名称<br/>
    * dx  水印图片相对输出视频的水平偏移量，默认值是0<br/>
    * dy  水印图片相对输出视频的垂直偏移量，默认值是0<br/>
    * position  水印的位置<br/>
    * width  水印图片宽<br/>
    * height  水印图片高<br/>
    * watermarkType  水印类型，当前只支持Image（图片水印）<br/>
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间，与\"timeline_duration\"配合使用。 取值范围:[0, END)。\"END\"表示视频结束时间。 单位:秒。
    * timelineDuration  水印持续时间，与\"timeline_start\"配合使用。 取值范围:(0,END-开始时间]。\"END\"表示视频结束时间。 单位:秒。 默认:END。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'dx' => 'getDx',
            'dy' => 'getDy',
            'position' => 'getPosition',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'watermarkType' => 'getWatermarkType',
            'imageProcess' => 'getImageProcess',
            'timelineStart' => 'getTimelineStart',
            'timelineDuration' => 'getTimelineDuration'
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
    const POSITION_TOPRIGHT = 'TOPRIGHT';
    const POSITION_TOPLEFT = 'TOPLEFT';
    const POSITION_BOTTOMRIGHT = 'BOTTOMRIGHT';
    const POSITION_BOTTOMLEFT = 'BOTTOMLEFT';
    const WATERMARK_TYPE_IMAGE = 'IMAGE';
    const WATERMARK_TYPE_TEXT = 'TEXT';
    const IMAGE_PROCESS_ORIGINAL = 'ORIGINAL';
    const IMAGE_PROCESS_TRANSPARENT = 'TRANSPARENT';
    const IMAGE_PROCESS_GRAYED = 'GRAYED';
    

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dx'] = isset($data['dx']) ? $data['dx'] : null;
        $this->container['dy'] = isset($data['dy']) ? $data['dy'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['watermarkType'] = isset($data['watermarkType']) ? $data['watermarkType'] : null;
        $this->container['imageProcess'] = isset($data['imageProcess']) ? $data['imageProcess'] : null;
        $this->container['timelineStart'] = isset($data['timelineStart']) ? $data['timelineStart'] : null;
        $this->container['timelineDuration'] = isset($data['timelineDuration']) ? $data['timelineDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            $allowedValues = $this->getPositionAllowableValues();
                if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'position', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  水印模板配置id<br/>
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 水印模板配置id<br/>
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  水印模板名称<br/>
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 水印模板名称<br/>
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dx
    *  水印图片相对输出视频的水平偏移量，默认值是0<br/>
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
    * @param string|null $dx 水印图片相对输出视频的水平偏移量，默认值是0<br/>
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
    *  水印图片相对输出视频的垂直偏移量，默认值是0<br/>
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
    * @param string|null $dy 水印图片相对输出视频的垂直偏移量，默认值是0<br/>
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
    *  水印的位置<br/>
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
    * @param string|null $position 水印的位置<br/>
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
    *  水印图片宽<br/>
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
    * @param string|null $width 水印图片宽<br/>
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
    *  水印图片高<br/>
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
    * @param string|null $height 水印图片高<br/>
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets watermarkType
    *  水印类型，当前只支持Image（图片水印）<br/>
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
    * @param string|null $watermarkType 水印类型，当前只支持Image（图片水印）<br/>
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
    * Gets timelineStart
    *  水印开始时间，与\"timeline_duration\"配合使用。 取值范围:[0, END)。\"END\"表示视频结束时间。 单位:秒。
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
    * @param string|null $timelineStart 水印开始时间，与\"timeline_duration\"配合使用。 取值范围:[0, END)。\"END\"表示视频结束时间。 单位:秒。
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
    *  水印持续时间，与\"timeline_start\"配合使用。 取值范围:(0,END-开始时间]。\"END\"表示视频结束时间。 单位:秒。 默认:END。
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
    * @param string|null $timelineDuration 水印持续时间，与\"timeline_start\"配合使用。 取值范围:(0,END-开始时间]。\"END\"表示视频结束时间。 单位:秒。 默认:END。
    *
    * @return $this
    */
    public function setTimelineDuration($timelineDuration)
    {
        $this->container['timelineDuration'] = $timelineDuration;
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

