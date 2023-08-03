<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TextWatermark implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TextWatermark';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dx  水印图片起点相对输出视频顶点的水平偏移量。  设置方法有如下两种：  - 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率宽1920，设置“dx”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在水平方向上偏移距离为192。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。  - 设置方法有如下两种：整数型：表示图片起点垂直偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率高的垂直偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率高1080，设置“dy”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在垂直方向上的偏移距离为108。
    * referpos  水印的位置。  取值如下： - TopRight：右上角。 - TopLeft：左上角。 - BottomRight：右下角。 - BottomLeft：左下角。
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。  取值范围：数字。  单位：秒。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。  取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值：ToEND。
    * fontName  字体，当前支持fzyouh
    * fontSize  字体大小。  取值范围：[4, 120]
    * fontColor  字体颜色。 目前颜色支持 black，blue，white，green，red，yellow，brown，gold，pink，orange，purple。
    * base  水印叠加母体 取值如下： - input：水印叠加在输入片源上，转码输出后实际大小按图像等比例缩放 - output：水印叠加在转码输出文件上。 默认值：input
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dx' => 'string',
            'dy' => 'string',
            'referpos' => 'string',
            'timelineStart' => 'string',
            'timelineDuration' => 'string',
            'fontName' => 'string',
            'fontSize' => 'int',
            'fontColor' => 'string',
            'base' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dx  水印图片起点相对输出视频顶点的水平偏移量。  设置方法有如下两种：  - 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率宽1920，设置“dx”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在水平方向上偏移距离为192。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。  - 设置方法有如下两种：整数型：表示图片起点垂直偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率高的垂直偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率高1080，设置“dy”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在垂直方向上的偏移距离为108。
    * referpos  水印的位置。  取值如下： - TopRight：右上角。 - TopLeft：左上角。 - BottomRight：右下角。 - BottomLeft：左下角。
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。  取值范围：数字。  单位：秒。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。  取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值：ToEND。
    * fontName  字体，当前支持fzyouh
    * fontSize  字体大小。  取值范围：[4, 120]
    * fontColor  字体颜色。 目前颜色支持 black，blue，white，green，red，yellow，brown，gold，pink，orange，purple。
    * base  水印叠加母体 取值如下： - input：水印叠加在输入片源上，转码输出后实际大小按图像等比例缩放 - output：水印叠加在转码输出文件上。 默认值：input
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dx' => null,
        'dy' => null,
        'referpos' => null,
        'timelineStart' => null,
        'timelineDuration' => null,
        'fontName' => null,
        'fontSize' => 'int32',
        'fontColor' => null,
        'base' => null
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
    * dx  水印图片起点相对输出视频顶点的水平偏移量。  设置方法有如下两种：  - 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率宽1920，设置“dx”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在水平方向上偏移距离为192。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。  - 设置方法有如下两种：整数型：表示图片起点垂直偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率高的垂直偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率高1080，设置“dy”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在垂直方向上的偏移距离为108。
    * referpos  水印的位置。  取值如下： - TopRight：右上角。 - TopLeft：左上角。 - BottomRight：右下角。 - BottomLeft：左下角。
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。  取值范围：数字。  单位：秒。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。  取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值：ToEND。
    * fontName  字体，当前支持fzyouh
    * fontSize  字体大小。  取值范围：[4, 120]
    * fontColor  字体颜色。 目前颜色支持 black，blue，white，green，red，yellow，brown，gold，pink，orange，purple。
    * base  水印叠加母体 取值如下： - input：水印叠加在输入片源上，转码输出后实际大小按图像等比例缩放 - output：水印叠加在转码输出文件上。 默认值：input
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dx' => 'dx',
            'dy' => 'dy',
            'referpos' => 'referpos',
            'timelineStart' => 'timeline_start',
            'timelineDuration' => 'timeline_duration',
            'fontName' => 'font_name',
            'fontSize' => 'font_size',
            'fontColor' => 'font_color',
            'base' => 'base'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dx  水印图片起点相对输出视频顶点的水平偏移量。  设置方法有如下两种：  - 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率宽1920，设置“dx”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在水平方向上偏移距离为192。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。  - 设置方法有如下两种：整数型：表示图片起点垂直偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率高的垂直偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率高1080，设置“dy”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在垂直方向上的偏移距离为108。
    * referpos  水印的位置。  取值如下： - TopRight：右上角。 - TopLeft：左上角。 - BottomRight：右下角。 - BottomLeft：左下角。
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。  取值范围：数字。  单位：秒。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。  取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值：ToEND。
    * fontName  字体，当前支持fzyouh
    * fontSize  字体大小。  取值范围：[4, 120]
    * fontColor  字体颜色。 目前颜色支持 black，blue，white，green，red，yellow，brown，gold，pink，orange，purple。
    * base  水印叠加母体 取值如下： - input：水印叠加在输入片源上，转码输出后实际大小按图像等比例缩放 - output：水印叠加在转码输出文件上。 默认值：input
    *
    * @var string[]
    */
    protected static $setters = [
            'dx' => 'setDx',
            'dy' => 'setDy',
            'referpos' => 'setReferpos',
            'timelineStart' => 'setTimelineStart',
            'timelineDuration' => 'setTimelineDuration',
            'fontName' => 'setFontName',
            'fontSize' => 'setFontSize',
            'fontColor' => 'setFontColor',
            'base' => 'setBase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dx  水印图片起点相对输出视频顶点的水平偏移量。  设置方法有如下两种：  - 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率宽1920，设置“dx”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在水平方向上偏移距离为192。
    * dy  水印图片起点相对输出视频顶点的垂直偏移量。  - 设置方法有如下两种：整数型：表示图片起点垂直偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率高的垂直偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率高1080，设置“dy”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在垂直方向上的偏移距离为108。
    * referpos  水印的位置。  取值如下： - TopRight：右上角。 - TopLeft：左上角。 - BottomRight：右下角。 - BottomLeft：左下角。
    * timelineStart  水印开始时间，与“timeline_duration”配合使用。  取值范围：数字。  单位：秒。
    * timelineDuration  水印持续时间，与“timeline_start”配合使用。  取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值：ToEND。
    * fontName  字体，当前支持fzyouh
    * fontSize  字体大小。  取值范围：[4, 120]
    * fontColor  字体颜色。 目前颜色支持 black，blue，white，green，red，yellow，brown，gold，pink，orange，purple。
    * base  水印叠加母体 取值如下： - input：水印叠加在输入片源上，转码输出后实际大小按图像等比例缩放 - output：水印叠加在转码输出文件上。 默认值：input
    *
    * @var string[]
    */
    protected static $getters = [
            'dx' => 'getDx',
            'dy' => 'getDy',
            'referpos' => 'getReferpos',
            'timelineStart' => 'getTimelineStart',
            'timelineDuration' => 'getTimelineDuration',
            'fontName' => 'getFontName',
            'fontSize' => 'getFontSize',
            'fontColor' => 'getFontColor',
            'base' => 'getBase'
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
    const BASE_INPUT = 'input';
    const BASE_OUTPUT = 'output';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBaseAllowableValues()
    {
        return [
            self::BASE_INPUT,
            self::BASE_OUTPUT,
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
        $this->container['dx'] = isset($data['dx']) ? $data['dx'] : null;
        $this->container['dy'] = isset($data['dy']) ? $data['dy'] : null;
        $this->container['referpos'] = isset($data['referpos']) ? $data['referpos'] : null;
        $this->container['timelineStart'] = isset($data['timelineStart']) ? $data['timelineStart'] : null;
        $this->container['timelineDuration'] = isset($data['timelineDuration']) ? $data['timelineDuration'] : null;
        $this->container['fontName'] = isset($data['fontName']) ? $data['fontName'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dx']) && (mb_strlen($this->container['dx']) > 16)) {
                $invalidProperties[] = "invalid value for 'dx', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['dx']) && (mb_strlen($this->container['dx']) < 0)) {
                $invalidProperties[] = "invalid value for 'dx', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dy']) && (mb_strlen($this->container['dy']) > 16)) {
                $invalidProperties[] = "invalid value for 'dy', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['dy']) && (mb_strlen($this->container['dy']) < 0)) {
                $invalidProperties[] = "invalid value for 'dy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['referpos']) && (mb_strlen($this->container['referpos']) > 32)) {
                $invalidProperties[] = "invalid value for 'referpos', the character length must be smaller than or equal to 32.";
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
            if (!is_null($this->container['fontName']) && (mb_strlen($this->container['fontName']) > 64)) {
                $invalidProperties[] = "invalid value for 'fontName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fontName']) && (mb_strlen($this->container['fontName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fontName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontSize']) && ($this->container['fontSize'] > 120)) {
                $invalidProperties[] = "invalid value for 'fontSize', must be smaller than or equal to 120.";
            }
            if (!is_null($this->container['fontSize']) && ($this->container['fontSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fontSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) > 16)) {
                $invalidProperties[] = "invalid value for 'fontColor', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) < 0)) {
                $invalidProperties[] = "invalid value for 'fontColor', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBaseAllowableValues();
                if (!is_null($this->container['base']) && !in_array($this->container['base'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'base', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['base']) && (mb_strlen($this->container['base']) > 16)) {
                $invalidProperties[] = "invalid value for 'base', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['base']) && (mb_strlen($this->container['base']) < 0)) {
                $invalidProperties[] = "invalid value for 'base', the character length must be bigger than or equal to 0.";
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
    *  水印图片起点相对输出视频顶点的水平偏移量。  设置方法有如下两种：  - 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率宽1920，设置“dx”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在水平方向上偏移距离为192。
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
    * @param string|null $dx 水印图片起点相对输出视频顶点的水平偏移量。  设置方法有如下两种：  - 整数型：表示图片起点水平偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率宽的水平偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率宽1920，设置“dx”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在水平方向上偏移距离为192。
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
    *  水印图片起点相对输出视频顶点的垂直偏移量。  - 设置方法有如下两种：整数型：表示图片起点垂直偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率高的垂直偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率高1080，设置“dy”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在垂直方向上的偏移距离为108。
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
    * @param string|null $dy 水印图片起点相对输出视频顶点的垂直偏移量。  - 设置方法有如下两种：整数型：表示图片起点垂直偏移视频顶点的像素值，单位px。取值范围：[0，4096] - 小数型：表示图片起点相对于视频分辨率高的垂直偏移比率。取值范围：(0，1)，支持4位小数，如0.9999，超出部分系统自动丢弃。  示例：输出视频分辨率高1080，设置“dy”为“0.1”，“referpos”为“TopRight”（右上角），则水印图片右上角到视频右顶点在垂直方向上的偏移距离为108。
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
    *  水印的位置。  取值如下： - TopRight：右上角。 - TopLeft：左上角。 - BottomRight：右下角。 - BottomLeft：左下角。
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
    * @param string|null $referpos 水印的位置。  取值如下： - TopRight：右上角。 - TopLeft：左上角。 - BottomRight：右下角。 - BottomLeft：左下角。
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
    *  水印开始时间，与“timeline_duration”配合使用。  取值范围：数字。  单位：秒。
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
    * @param string|null $timelineStart 水印开始时间，与“timeline_duration”配合使用。  取值范围：数字。  单位：秒。
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
    *  水印持续时间，与“timeline_start”配合使用。  取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值：ToEND。
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
    * @param string|null $timelineDuration 水印持续时间，与“timeline_start”配合使用。  取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值：ToEND。
    *
    * @return $this
    */
    public function setTimelineDuration($timelineDuration)
    {
        $this->container['timelineDuration'] = $timelineDuration;
        return $this;
    }

    /**
    * Gets fontName
    *  字体，当前支持fzyouh
    *
    * @return string|null
    */
    public function getFontName()
    {
        return $this->container['fontName'];
    }

    /**
    * Sets fontName
    *
    * @param string|null $fontName 字体，当前支持fzyouh
    *
    * @return $this
    */
    public function setFontName($fontName)
    {
        $this->container['fontName'] = $fontName;
        return $this;
    }

    /**
    * Gets fontSize
    *  字体大小。  取值范围：[4, 120]
    *
    * @return int|null
    */
    public function getFontSize()
    {
        return $this->container['fontSize'];
    }

    /**
    * Sets fontSize
    *
    * @param int|null $fontSize 字体大小。  取值范围：[4, 120]
    *
    * @return $this
    */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;
        return $this;
    }

    /**
    * Gets fontColor
    *  字体颜色。 目前颜色支持 black，blue，white，green，red，yellow，brown，gold，pink，orange，purple。
    *
    * @return string|null
    */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /**
    * Sets fontColor
    *
    * @param string|null $fontColor 字体颜色。 目前颜色支持 black，blue，white，green，red，yellow，brown，gold，pink，orange，purple。
    *
    * @return $this
    */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;
        return $this;
    }

    /**
    * Gets base
    *  水印叠加母体 取值如下： - input：水印叠加在输入片源上，转码输出后实际大小按图像等比例缩放 - output：水印叠加在转码输出文件上。 默认值：input
    *
    * @return string|null
    */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
    * Sets base
    *
    * @param string|null $base 水印叠加母体 取值如下： - input：水印叠加在输入片源上，转码输出后实际大小按图像等比例缩放 - output：水印叠加在转码输出文件上。 默认值：input
    *
    * @return $this
    */
    public function setBase($base)
    {
        $this->container['base'] = $base;
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

