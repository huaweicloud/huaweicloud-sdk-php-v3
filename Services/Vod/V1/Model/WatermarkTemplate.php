<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WatermarkTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WatermarkTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  水印模板名称。
    * id  水印模板配置id。
    * status  启用状态。  取值为： - 0：停用 - 1：启用
    * dx  水印图片相对输出视频的水平偏移量。  默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量。  默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * createTime  创建时间。
    * imageUrl  水印图片下载url。
    * type  水印图片格式类型。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'status' => 'int',
            'dx' => 'string',
            'dy' => 'string',
            'position' => 'string',
            'width' => 'string',
            'height' => 'string',
            'createTime' => 'string',
            'imageUrl' => 'string',
            'type' => 'string',
            'watermarkType' => 'string',
            'imageProcess' => 'string',
            'timelineStart' => 'string',
            'timelineDuration' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  水印模板名称。
    * id  水印模板配置id。
    * status  启用状态。  取值为： - 0：停用 - 1：启用
    * dx  水印图片相对输出视频的水平偏移量。  默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量。  默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * createTime  创建时间。
    * imageUrl  水印图片下载url。
    * type  水印图片格式类型。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'status' => 'int64',
        'dx' => null,
        'dy' => null,
        'position' => null,
        'width' => null,
        'height' => null,
        'createTime' => null,
        'imageUrl' => null,
        'type' => null,
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
    * name  水印模板名称。
    * id  水印模板配置id。
    * status  启用状态。  取值为： - 0：停用 - 1：启用
    * dx  水印图片相对输出视频的水平偏移量。  默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量。  默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * createTime  创建时间。
    * imageUrl  水印图片下载url。
    * type  水印图片格式类型。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'status' => 'status',
            'dx' => 'dx',
            'dy' => 'dy',
            'position' => 'position',
            'width' => 'width',
            'height' => 'height',
            'createTime' => 'create_time',
            'imageUrl' => 'image_url',
            'type' => 'type',
            'watermarkType' => 'watermark_type',
            'imageProcess' => 'image_process',
            'timelineStart' => 'timeline_start',
            'timelineDuration' => 'timeline_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  水印模板名称。
    * id  水印模板配置id。
    * status  启用状态。  取值为： - 0：停用 - 1：启用
    * dx  水印图片相对输出视频的水平偏移量。  默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量。  默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * createTime  创建时间。
    * imageUrl  水印图片下载url。
    * type  水印图片格式类型。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'status' => 'setStatus',
            'dx' => 'setDx',
            'dy' => 'setDy',
            'position' => 'setPosition',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'createTime' => 'setCreateTime',
            'imageUrl' => 'setImageUrl',
            'type' => 'setType',
            'watermarkType' => 'setWatermarkType',
            'imageProcess' => 'setImageProcess',
            'timelineStart' => 'setTimelineStart',
            'timelineDuration' => 'setTimelineDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  水印模板名称。
    * id  水印模板配置id。
    * status  启用状态。  取值为： - 0：停用 - 1：启用
    * dx  水印图片相对输出视频的水平偏移量。  默认值是0。
    * dy  水印图片相对输出视频的垂直偏移量。  默认值是0。
    * position  水印的位置。
    * width  水印图片宽。
    * height  水印图片高。
    * createTime  创建时间。
    * imageUrl  水印图片下载url。
    * type  水印图片格式类型。
    * watermarkType  水印类型，当前只支持Image（图片水印）。
    * imageProcess  type设置为Image时有效。  目前包括： - Original：只做简单缩放，不做其他处理 - Transparent：图片底色透明 - Grayed：彩色图片变灰
    * timelineStart  水印开始时间。
    * timelineDuration  水印持续时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'status' => 'getStatus',
            'dx' => 'getDx',
            'dy' => 'getDy',
            'position' => 'getPosition',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'createTime' => 'getCreateTime',
            'imageUrl' => 'getImageUrl',
            'type' => 'getType',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dx'] = isset($data['dx']) ? $data['dx'] : null;
        $this->container['dy'] = isset($data['dy']) ? $data['dy'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 水印模板名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  水印模板配置id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 水印模板配置id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  启用状态。  取值为： - 0：停用 - 1：启用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 启用状态。  取值为： - 0：停用 - 1：启用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dx
    *  水印图片相对输出视频的水平偏移量。  默认值是0。
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
    * @param string|null $dx 水印图片相对输出视频的水平偏移量。  默认值是0。
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
    *  水印图片相对输出视频的垂直偏移量。  默认值是0。
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
    * @param string|null $dy 水印图片相对输出视频的垂直偏移量。  默认值是0。
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
    * Gets createTime
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets imageUrl
    *  水印图片下载url。
    *
    * @return string|null
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string|null $imageUrl 水印图片下载url。
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets type
    *  水印图片格式类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 水印图片格式类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

