<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageWatermark implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageWatermark';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dx  水印图片起点相对输出视频顶点的水平偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * referpos  水印的位置。 取值如下： TopRight：右上角。 TopLeft：左上角。 BottomRight：右下角。 BottomLeft：左下角。 ClockWise：顺时针 AntiClockWise：逆时针 Random：随机跳转
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。 默认值：ToEND。
    * randomTimeMin  随机时间最小值，单位：秒
    * randomTimeMax  随机时间最大值，单位：秒
    * width  水印图片宽，值有两种形式： 整数型代水印图片宽的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率宽的比率，范围(0,1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * height  水印图片高，值有两种形式： 整数型代表水印图片高的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率高的比率，范围(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dx' => 'string',
            'dy' => 'string',
            'referpos' => 'string',
            'timelineStart' => 'string',
            'timelineDuration' => 'string',
            'randomTimeMin' => 'float',
            'randomTimeMax' => 'float',
            'width' => 'string',
            'height' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dx  水印图片起点相对输出视频顶点的水平偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * referpos  水印的位置。 取值如下： TopRight：右上角。 TopLeft：左上角。 BottomRight：右下角。 BottomLeft：左下角。 ClockWise：顺时针 AntiClockWise：逆时针 Random：随机跳转
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。 默认值：ToEND。
    * randomTimeMin  随机时间最小值，单位：秒
    * randomTimeMax  随机时间最大值，单位：秒
    * width  水印图片宽，值有两种形式： 整数型代水印图片宽的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率宽的比率，范围(0,1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * height  水印图片高，值有两种形式： 整数型代表水印图片高的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率高的比率，范围(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dx' => null,
        'dy' => null,
        'referpos' => null,
        'timelineStart' => null,
        'timelineDuration' => null,
        'randomTimeMin' => 'float',
        'randomTimeMax' => 'float',
        'width' => null,
        'height' => null
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
    * dx  水印图片起点相对输出视频顶点的水平偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * referpos  水印的位置。 取值如下： TopRight：右上角。 TopLeft：左上角。 BottomRight：右下角。 BottomLeft：左下角。 ClockWise：顺时针 AntiClockWise：逆时针 Random：随机跳转
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。 默认值：ToEND。
    * randomTimeMin  随机时间最小值，单位：秒
    * randomTimeMax  随机时间最大值，单位：秒
    * width  水印图片宽，值有两种形式： 整数型代水印图片宽的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率宽的比率，范围(0,1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * height  水印图片高，值有两种形式： 整数型代表水印图片高的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率高的比率，范围(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dx' => 'dx',
            'dy' => 'dy',
            'referpos' => 'referpos',
            'timelineStart' => 'timeline_start',
            'timelineDuration' => 'timeline_duration',
            'randomTimeMin' => 'random_time_min',
            'randomTimeMax' => 'random_time_max',
            'width' => 'width',
            'height' => 'height'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dx  水印图片起点相对输出视频顶点的水平偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * referpos  水印的位置。 取值如下： TopRight：右上角。 TopLeft：左上角。 BottomRight：右下角。 BottomLeft：左下角。 ClockWise：顺时针 AntiClockWise：逆时针 Random：随机跳转
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。 默认值：ToEND。
    * randomTimeMin  随机时间最小值，单位：秒
    * randomTimeMax  随机时间最大值，单位：秒
    * width  水印图片宽，值有两种形式： 整数型代水印图片宽的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率宽的比率，范围(0,1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * height  水印图片高，值有两种形式： 整数型代表水印图片高的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率高的比率，范围(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    *
    * @var string[]
    */
    protected static $setters = [
            'dx' => 'setDx',
            'dy' => 'setDy',
            'referpos' => 'setReferpos',
            'timelineStart' => 'setTimelineStart',
            'timelineDuration' => 'setTimelineDuration',
            'randomTimeMin' => 'setRandomTimeMin',
            'randomTimeMax' => 'setRandomTimeMax',
            'width' => 'setWidth',
            'height' => 'setHeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dx  水印图片起点相对输出视频顶点的水平偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * referpos  水印的位置。 取值如下： TopRight：右上角。 TopLeft：左上角。 BottomRight：右下角。 BottomLeft：左下角。 ClockWise：顺时针 AntiClockWise：逆时针 Random：随机跳转
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。 默认值：ToEND。
    * randomTimeMin  随机时间最小值，单位：秒
    * randomTimeMax  随机时间最大值，单位：秒
    * width  水印图片宽，值有两种形式： 整数型代水印图片宽的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率宽的比率，范围(0,1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    * height  水印图片高，值有两种形式： 整数型代表水印图片高的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率高的比率，范围(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    *
    * @var string[]
    */
    protected static $getters = [
            'dx' => 'getDx',
            'dy' => 'getDy',
            'referpos' => 'getReferpos',
            'timelineStart' => 'getTimelineStart',
            'timelineDuration' => 'getTimelineDuration',
            'randomTimeMin' => 'getRandomTimeMin',
            'randomTimeMax' => 'getRandomTimeMax',
            'width' => 'getWidth',
            'height' => 'getHeight'
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
        $this->container['dx'] = isset($data['dx']) ? $data['dx'] : null;
        $this->container['dy'] = isset($data['dy']) ? $data['dy'] : null;
        $this->container['referpos'] = isset($data['referpos']) ? $data['referpos'] : null;
        $this->container['timelineStart'] = isset($data['timelineStart']) ? $data['timelineStart'] : null;
        $this->container['timelineDuration'] = isset($data['timelineDuration']) ? $data['timelineDuration'] : null;
        $this->container['randomTimeMin'] = isset($data['randomTimeMin']) ? $data['randomTimeMin'] : null;
        $this->container['randomTimeMax'] = isset($data['randomTimeMax']) ? $data['randomTimeMax'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dx']) && (mb_strlen($this->container['dx']) > 10)) {
                $invalidProperties[] = "invalid value for 'dx', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['dx']) && (mb_strlen($this->container['dx']) < 0)) {
                $invalidProperties[] = "invalid value for 'dx', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dy']) && (mb_strlen($this->container['dy']) > 10)) {
                $invalidProperties[] = "invalid value for 'dy', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['dy']) && (mb_strlen($this->container['dy']) < 0)) {
                $invalidProperties[] = "invalid value for 'dy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['referpos']) && (mb_strlen($this->container['referpos']) > 64)) {
                $invalidProperties[] = "invalid value for 'referpos', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['referpos']) && (mb_strlen($this->container['referpos']) < 0)) {
                $invalidProperties[] = "invalid value for 'referpos', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timelineStart']) && (mb_strlen($this->container['timelineStart']) > 16)) {
                $invalidProperties[] = "invalid value for 'timelineStart', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['timelineStart']) && (mb_strlen($this->container['timelineStart']) < 0)) {
                $invalidProperties[] = "invalid value for 'timelineStart', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timelineDuration']) && (mb_strlen($this->container['timelineDuration']) > 16)) {
                $invalidProperties[] = "invalid value for 'timelineDuration', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['timelineDuration']) && (mb_strlen($this->container['timelineDuration']) < 0)) {
                $invalidProperties[] = "invalid value for 'timelineDuration', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['randomTimeMin']) && ($this->container['randomTimeMin'] > 3.6E+6)) {
                $invalidProperties[] = "invalid value for 'randomTimeMin', must be smaller than or equal to 3.6E+6.";
            }
            if (!is_null($this->container['randomTimeMin']) && ($this->container['randomTimeMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'randomTimeMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['randomTimeMax']) && ($this->container['randomTimeMax'] > 3.6E+6)) {
                $invalidProperties[] = "invalid value for 'randomTimeMax', must be smaller than or equal to 3.6E+6.";
            }
            if (!is_null($this->container['randomTimeMax']) && ($this->container['randomTimeMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'randomTimeMax', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && (mb_strlen($this->container['width']) > 32)) {
                $invalidProperties[] = "invalid value for 'width', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['width']) && (mb_strlen($this->container['width']) < 0)) {
                $invalidProperties[] = "invalid value for 'width', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && (mb_strlen($this->container['height']) > 32)) {
                $invalidProperties[] = "invalid value for 'height', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['height']) && (mb_strlen($this->container['height']) < 0)) {
                $invalidProperties[] = "invalid value for 'height', the character length must be bigger than or equal to 0.";
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
    * Gets dx
    *  水印图片起点相对输出视频顶点的水平偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
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
    * @param string|null $dx 水印图片起点相对输出视频顶点的水平偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
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
    *  水印图片起点相对输出视频顶点的垂直偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
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
    * @param string|null $dy 水印图片起点相对输出视频顶点的垂直偏移量。 设置方法有如下两种： 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    *
    * @return $this
    */
    public function setDy($dy)
    {
        $this->container['dy'] = $dy;
        return $this;
    }

    /**
    * Gets referpos
    *  水印的位置。 取值如下： TopRight：右上角。 TopLeft：左上角。 BottomRight：右下角。 BottomLeft：左下角。 ClockWise：顺时针 AntiClockWise：逆时针 Random：随机跳转
    *
    * @return string|null
    */
    public function getReferpos()
    {
        return $this->container['referpos'];
    }

    /**
    * Sets referpos
    *
    * @param string|null $referpos 水印的位置。 取值如下： TopRight：右上角。 TopLeft：左上角。 BottomRight：右下角。 BottomLeft：左下角。 ClockWise：顺时针 AntiClockWise：逆时针 Random：随机跳转
    *
    * @return $this
    */
    public function setReferpos($referpos)
    {
        $this->container['referpos'] = $referpos;
        return $this;
    }

    /**
    * Gets timelineStart
    *  水印开始时间，与“timeline_duration”配合使用。
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
    * @param string|null $timelineStart 水印开始时间，与“timeline_duration”配合使用。
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
    *  水印持续时间，与“timeline_start”配合使用。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。 默认值：ToEND。
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
    * @param string|null $timelineDuration 水印持续时间，与“timeline_start”配合使用。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。 默认值：ToEND。
    *
    * @return $this
    */
    public function setTimelineDuration($timelineDuration)
    {
        $this->container['timelineDuration'] = $timelineDuration;
        return $this;
    }

    /**
    * Gets randomTimeMin
    *  随机时间最小值，单位：秒
    *
    * @return float|null
    */
    public function getRandomTimeMin()
    {
        return $this->container['randomTimeMin'];
    }

    /**
    * Sets randomTimeMin
    *
    * @param float|null $randomTimeMin 随机时间最小值，单位：秒
    *
    * @return $this
    */
    public function setRandomTimeMin($randomTimeMin)
    {
        $this->container['randomTimeMin'] = $randomTimeMin;
        return $this;
    }

    /**
    * Gets randomTimeMax
    *  随机时间最大值，单位：秒
    *
    * @return float|null
    */
    public function getRandomTimeMax()
    {
        return $this->container['randomTimeMax'];
    }

    /**
    * Sets randomTimeMax
    *
    * @param float|null $randomTimeMax 随机时间最大值，单位：秒
    *
    * @return $this
    */
    public function setRandomTimeMax($randomTimeMax)
    {
        $this->container['randomTimeMax'] = $randomTimeMax;
        return $this;
    }

    /**
    * Gets width
    *  水印图片宽，值有两种形式： 整数型代水印图片宽的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率宽的比率，范围(0,1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
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
    * @param string|null $width 水印图片宽，值有两种形式： 整数型代水印图片宽的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率宽的比率，范围(0,1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
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
    *  水印图片高，值有两种形式： 整数型代表水印图片高的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率高的比率，范围(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
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
    * @param string|null $height 水印图片高，值有两种形式： 整数型代表水印图片高的像素值，范围[8，4096]，单位px。 小数型代表相对输出视频分辨率高的比率，范围(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
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

