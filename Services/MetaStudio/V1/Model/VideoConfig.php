<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clipMode  输出视频的剪辑方式。默认值RESIZE。 * RESIZE：视频缩放。 * CROP：视频裁剪。
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件 * VP8：vp8编码，输出webm文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。 > * 分身数字人视频制作采用质量优先，可能会超过设置的码率。 > * 分身数字人直播码率范围[1000, 8000]。
    * width  视频宽度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率。4K分辨率视频需要分身数字人模型支持4K的情况下才能使用。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像宽度为width。 > * 分身数字人直播目前只支持1080x1920。
    * height  视频高度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率分辨率。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像高度为height。 > * 分身数字人直播目前只支持1080x1920。
    * frameRate  帧率。  单位：FPS。 > *  分身数字人视频固定25FPS。
    * isSubtitleEnable  输出的视频是否带字幕。默认false。 > true: 打开字幕 > false: 关闭字幕
    * subtitleConfig  subtitleConfig
    * dx  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clipMode' => 'string',
            'codec' => 'string',
            'bitrate' => 'int',
            'width' => 'int',
            'height' => 'int',
            'frameRate' => 'string',
            'isSubtitleEnable' => 'bool',
            'subtitleConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SubtitleConfig',
            'dx' => 'int',
            'dy' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clipMode  输出视频的剪辑方式。默认值RESIZE。 * RESIZE：视频缩放。 * CROP：视频裁剪。
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件 * VP8：vp8编码，输出webm文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。 > * 分身数字人视频制作采用质量优先，可能会超过设置的码率。 > * 分身数字人直播码率范围[1000, 8000]。
    * width  视频宽度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率。4K分辨率视频需要分身数字人模型支持4K的情况下才能使用。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像宽度为width。 > * 分身数字人直播目前只支持1080x1920。
    * height  视频高度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率分辨率。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像高度为height。 > * 分身数字人直播目前只支持1080x1920。
    * frameRate  帧率。  单位：FPS。 > *  分身数字人视频固定25FPS。
    * isSubtitleEnable  输出的视频是否带字幕。默认false。 > true: 打开字幕 > false: 关闭字幕
    * subtitleConfig  subtitleConfig
    * dx  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clipMode' => null,
        'codec' => null,
        'bitrate' => null,
        'width' => null,
        'height' => null,
        'frameRate' => 'string',
        'isSubtitleEnable' => null,
        'subtitleConfig' => null,
        'dx' => 'int32',
        'dy' => 'int32'
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
    * clipMode  输出视频的剪辑方式。默认值RESIZE。 * RESIZE：视频缩放。 * CROP：视频裁剪。
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件 * VP8：vp8编码，输出webm文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。 > * 分身数字人视频制作采用质量优先，可能会超过设置的码率。 > * 分身数字人直播码率范围[1000, 8000]。
    * width  视频宽度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率。4K分辨率视频需要分身数字人模型支持4K的情况下才能使用。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像宽度为width。 > * 分身数字人直播目前只支持1080x1920。
    * height  视频高度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率分辨率。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像高度为height。 > * 分身数字人直播目前只支持1080x1920。
    * frameRate  帧率。  单位：FPS。 > *  分身数字人视频固定25FPS。
    * isSubtitleEnable  输出的视频是否带字幕。默认false。 > true: 打开字幕 > false: 关闭字幕
    * subtitleConfig  subtitleConfig
    * dx  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clipMode' => 'clip_mode',
            'codec' => 'codec',
            'bitrate' => 'bitrate',
            'width' => 'width',
            'height' => 'height',
            'frameRate' => 'frame_rate',
            'isSubtitleEnable' => 'is_subtitle_enable',
            'subtitleConfig' => 'subtitle_config',
            'dx' => 'dx',
            'dy' => 'dy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clipMode  输出视频的剪辑方式。默认值RESIZE。 * RESIZE：视频缩放。 * CROP：视频裁剪。
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件 * VP8：vp8编码，输出webm文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。 > * 分身数字人视频制作采用质量优先，可能会超过设置的码率。 > * 分身数字人直播码率范围[1000, 8000]。
    * width  视频宽度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率。4K分辨率视频需要分身数字人模型支持4K的情况下才能使用。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像宽度为width。 > * 分身数字人直播目前只支持1080x1920。
    * height  视频高度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率分辨率。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像高度为height。 > * 分身数字人直播目前只支持1080x1920。
    * frameRate  帧率。  单位：FPS。 > *  分身数字人视频固定25FPS。
    * isSubtitleEnable  输出的视频是否带字幕。默认false。 > true: 打开字幕 > false: 关闭字幕
    * subtitleConfig  subtitleConfig
    * dx  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @var string[]
    */
    protected static $setters = [
            'clipMode' => 'setClipMode',
            'codec' => 'setCodec',
            'bitrate' => 'setBitrate',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'frameRate' => 'setFrameRate',
            'isSubtitleEnable' => 'setIsSubtitleEnable',
            'subtitleConfig' => 'setSubtitleConfig',
            'dx' => 'setDx',
            'dy' => 'setDy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clipMode  输出视频的剪辑方式。默认值RESIZE。 * RESIZE：视频缩放。 * CROP：视频裁剪。
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件 * VP8：vp8编码，输出webm文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。 > * 分身数字人视频制作采用质量优先，可能会超过设置的码率。 > * 分身数字人直播码率范围[1000, 8000]。
    * width  视频宽度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率。4K分辨率视频需要分身数字人模型支持4K的情况下才能使用。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像宽度为width。 > * 分身数字人直播目前只支持1080x1920。
    * height  视频高度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率分辨率。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像高度为height。 > * 分身数字人直播目前只支持1080x1920。
    * frameRate  帧率。  单位：FPS。 > *  分身数字人视频固定25FPS。
    * isSubtitleEnable  输出的视频是否带字幕。默认false。 > true: 打开字幕 > false: 关闭字幕
    * subtitleConfig  subtitleConfig
    * dx  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @var string[]
    */
    protected static $getters = [
            'clipMode' => 'getClipMode',
            'codec' => 'getCodec',
            'bitrate' => 'getBitrate',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'frameRate' => 'getFrameRate',
            'isSubtitleEnable' => 'getIsSubtitleEnable',
            'subtitleConfig' => 'getSubtitleConfig',
            'dx' => 'getDx',
            'dy' => 'getDy'
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
    const CLIP_MODE_RESIZE = 'RESIZE';
    const CLIP_MODE_CROP = 'CROP';
    const CODEC_H264 = 'H264';
    const CODEC_VP8 = 'VP8';
    const CODEC_VP9 = 'VP9';
    const FRAME_RATE__24 = '24';
    const FRAME_RATE__25 = '25';
    const FRAME_RATE__30 = '30';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClipModeAllowableValues()
    {
        return [
            self::CLIP_MODE_RESIZE,
            self::CLIP_MODE_CROP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodecAllowableValues()
    {
        return [
            self::CODEC_H264,
            self::CODEC_VP8,
            self::CODEC_VP9,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFrameRateAllowableValues()
    {
        return [
            self::FRAME_RATE__24,
            self::FRAME_RATE__25,
            self::FRAME_RATE__30,
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
        $this->container['clipMode'] = isset($data['clipMode']) ? $data['clipMode'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['isSubtitleEnable'] = isset($data['isSubtitleEnable']) ? $data['isSubtitleEnable'] : null;
        $this->container['subtitleConfig'] = isset($data['subtitleConfig']) ? $data['subtitleConfig'] : null;
        $this->container['dx'] = isset($data['dx']) ? $data['dx'] : null;
        $this->container['dy'] = isset($data['dy']) ? $data['dy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getClipModeAllowableValues();
                if (!is_null($this->container['clipMode']) && !in_array($this->container['clipMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clipMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['codec'] === null) {
            $invalidProperties[] = "'codec' can't be null";
        }
            $allowedValues = $this->getCodecAllowableValues();
                if (!is_null($this->container['codec']) && !in_array($this->container['codec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'codec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['bitrate'] === null) {
            $invalidProperties[] = "'bitrate' can't be null";
        }
            if (($this->container['bitrate'] > 30000)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 30000.";
            }
            if (($this->container['bitrate'] < 40)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 40.";
            }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
            if (($this->container['width'] > 3840)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 3840.";
            }
            if (($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
            if (($this->container['height'] > 3840)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 3840.";
            }
            if (($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getFrameRateAllowableValues();
                if (!is_null($this->container['frameRate']) && !in_array($this->container['frameRate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'frameRate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['frameRate']) && (mb_strlen($this->container['frameRate']) > 10)) {
                $invalidProperties[] = "invalid value for 'frameRate', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['frameRate']) && (mb_strlen($this->container['frameRate']) < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dx']) && ($this->container['dx'] > 3840)) {
                $invalidProperties[] = "invalid value for 'dx', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['dx']) && ($this->container['dx'] < -1920)) {
                $invalidProperties[] = "invalid value for 'dx', must be bigger than or equal to -1920.";
            }
            if (!is_null($this->container['dy']) && ($this->container['dy'] > 3840)) {
                $invalidProperties[] = "invalid value for 'dy', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['dy']) && ($this->container['dy'] < -1920)) {
                $invalidProperties[] = "invalid value for 'dy', must be bigger than or equal to -1920.";
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
    * Gets clipMode
    *  输出视频的剪辑方式。默认值RESIZE。 * RESIZE：视频缩放。 * CROP：视频裁剪。
    *
    * @return string|null
    */
    public function getClipMode()
    {
        return $this->container['clipMode'];
    }

    /**
    * Sets clipMode
    *
    * @param string|null $clipMode 输出视频的剪辑方式。默认值RESIZE。 * RESIZE：视频缩放。 * CROP：视频裁剪。
    *
    * @return $this
    */
    public function setClipMode($clipMode)
    {
        $this->container['clipMode'] = $clipMode;
        return $this;
    }

    /**
    * Gets codec
    *  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件 * VP8：vp8编码，输出webm文件
    *
    * @return string
    */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
    * Sets codec
    *
    * @param string $codec 视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件 * VP8：vp8编码，输出webm文件
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets bitrate
    *  输出平均码率。  单位：kbps。  最小值40，最大值30000。 > * 分身数字人视频制作采用质量优先，可能会超过设置的码率。 > * 分身数字人直播码率范围[1000, 8000]。
    *
    * @return int
    */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
    * Sets bitrate
    *
    * @param int $bitrate 输出平均码率。  单位：kbps。  最小值40，最大值30000。 > * 分身数字人视频制作采用质量优先，可能会超过设置的码率。 > * 分身数字人直播码率范围[1000, 8000]。
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets width
    *  视频宽度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率。4K分辨率视频需要分身数字人模型支持4K的情况下才能使用。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像宽度为width。 > * 分身数字人直播目前只支持1080x1920。
    *
    * @return int
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int $width 视频宽度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率。4K分辨率视频需要分身数字人模型支持4K的情况下才能使用。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像宽度为width。 > * 分身数字人直播目前只支持1080x1920。
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
    *  视频高度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率分辨率。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像高度为height。 > * 分身数字人直播目前只支持1080x1920。
    *
    * @return int
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int $height 视频高度。  单位：像素。  最小值320，最大值2560。 > * clip_mode=RESIZE时，当前支持1920x1080、1080x1920、1280x720、720x1280、3840x2160、2160x3840六种分辨率分辨率。 > * clip_mode=CROP，裁剪后视频，（dx,dy）为原点，保留视频像高度为height。 > * 分身数字人直播目前只支持1080x1920。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets frameRate
    *  帧率。  单位：FPS。 > *  分身数字人视频固定25FPS。
    *
    * @return string|null
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param string|null $frameRate 帧率。  单位：FPS。 > *  分身数字人视频固定25FPS。
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
        return $this;
    }

    /**
    * Gets isSubtitleEnable
    *  输出的视频是否带字幕。默认false。 > true: 打开字幕 > false: 关闭字幕
    *
    * @return bool|null
    */
    public function getIsSubtitleEnable()
    {
        return $this->container['isSubtitleEnable'];
    }

    /**
    * Sets isSubtitleEnable
    *
    * @param bool|null $isSubtitleEnable 输出的视频是否带字幕。默认false。 > true: 打开字幕 > false: 关闭字幕
    *
    * @return $this
    */
    public function setIsSubtitleEnable($isSubtitleEnable)
    {
        $this->container['isSubtitleEnable'] = $isSubtitleEnable;
        return $this;
    }

    /**
    * Gets subtitleConfig
    *  subtitleConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SubtitleConfig|null
    */
    public function getSubtitleConfig()
    {
        return $this->container['subtitleConfig'];
    }

    /**
    * Sets subtitleConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SubtitleConfig|null $subtitleConfig subtitleConfig
    *
    * @return $this
    */
    public function setSubtitleConfig($subtitleConfig)
    {
        $this->container['subtitleConfig'] = $subtitleConfig;
        return $this;
    }

    /**
    * Gets dx
    *  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @return int|null
    */
    public function getDx()
    {
        return $this->container['dx'];
    }

    /**
    * Sets dx
    *
    * @param int|null $dx 裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
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
    *  裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @return int|null
    */
    public function getDy()
    {
        return $this->container['dy'];
    }

    /**
    * Sets dy
    *
    * @param int|null $dy 裁剪视频左上角像素点坐标。  clip_mode= CROP时生效。 > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @return $this
    */
    public function setDy($dy)
    {
        $this->container['dy'] = $dy;
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

