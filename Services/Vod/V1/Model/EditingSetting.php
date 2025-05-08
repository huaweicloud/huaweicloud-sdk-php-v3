<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EditingSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EditingSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resolutionAdaptation  分辨率自适应策略, 选值：OPEN, CLOSE（默认OPEN） 输入为OPEN时，width表示长边，height表示短边 输入为CLOSE时，width表示宽度，height表示长度
    * resolutionUpsample  分辨率上采样开关, 选值：ON, OFF（默认OFF）
    * format  输出封装格式，HLS、MP4（默认MP4）、MP3、MOV、FLV、AVI
    * width  输出宽或长边，整型，输入小数向下取整，默认0，按源  - 当 width、height 均为 0，则分辨率取片源分辨率； - 当 width 为 0，height 非 0，则 width 按片源分辨率比例缩放； - 当 width 非 0，height 为 0，则 height 按片源分辨率比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * height  输出高或短边，整型，输入小数向下取整，默认0，按源  - 当 Width、Height 均为 0，则分辨率取片源分辨率； - 当 Width 为 0，Height 非 0，则 Width 按片源分辨率比例缩放； - 当 Width 非 0，Height 为 0，则 Height 按片源分辨率比例缩放； - 当 Width、Height 均非 0，则分辨率按用户指定。
    * reference  输出参考基准，可选，默认为空  - NONE 输出分辨率按输入的第一个片源为主，码率按输出分辨率自适应，帧率固定输出25fps - MAX_BITRATE 按码率最大的输入片源参数为基准 - MAX_RESOLUTION 按分辨率最大的输入片源参数为基准
    * videoCodec  视频编码格式。 取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resolutionAdaptation' => 'string',
            'resolutionUpsample' => 'string',
            'format' => 'string',
            'width' => 'int',
            'height' => 'int',
            'reference' => 'string',
            'videoCodec' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resolutionAdaptation  分辨率自适应策略, 选值：OPEN, CLOSE（默认OPEN） 输入为OPEN时，width表示长边，height表示短边 输入为CLOSE时，width表示宽度，height表示长度
    * resolutionUpsample  分辨率上采样开关, 选值：ON, OFF（默认OFF）
    * format  输出封装格式，HLS、MP4（默认MP4）、MP3、MOV、FLV、AVI
    * width  输出宽或长边，整型，输入小数向下取整，默认0，按源  - 当 width、height 均为 0，则分辨率取片源分辨率； - 当 width 为 0，height 非 0，则 width 按片源分辨率比例缩放； - 当 width 非 0，height 为 0，则 height 按片源分辨率比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * height  输出高或短边，整型，输入小数向下取整，默认0，按源  - 当 Width、Height 均为 0，则分辨率取片源分辨率； - 当 Width 为 0，Height 非 0，则 Width 按片源分辨率比例缩放； - 当 Width 非 0，Height 为 0，则 Height 按片源分辨率比例缩放； - 当 Width、Height 均非 0，则分辨率按用户指定。
    * reference  输出参考基准，可选，默认为空  - NONE 输出分辨率按输入的第一个片源为主，码率按输出分辨率自适应，帧率固定输出25fps - MAX_BITRATE 按码率最大的输入片源参数为基准 - MAX_RESOLUTION 按分辨率最大的输入片源参数为基准
    * videoCodec  视频编码格式。 取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resolutionAdaptation' => null,
        'resolutionUpsample' => null,
        'format' => null,
        'width' => 'int32',
        'height' => 'int32',
        'reference' => null,
        'videoCodec' => 'int32'
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
    * resolutionAdaptation  分辨率自适应策略, 选值：OPEN, CLOSE（默认OPEN） 输入为OPEN时，width表示长边，height表示短边 输入为CLOSE时，width表示宽度，height表示长度
    * resolutionUpsample  分辨率上采样开关, 选值：ON, OFF（默认OFF）
    * format  输出封装格式，HLS、MP4（默认MP4）、MP3、MOV、FLV、AVI
    * width  输出宽或长边，整型，输入小数向下取整，默认0，按源  - 当 width、height 均为 0，则分辨率取片源分辨率； - 当 width 为 0，height 非 0，则 width 按片源分辨率比例缩放； - 当 width 非 0，height 为 0，则 height 按片源分辨率比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * height  输出高或短边，整型，输入小数向下取整，默认0，按源  - 当 Width、Height 均为 0，则分辨率取片源分辨率； - 当 Width 为 0，Height 非 0，则 Width 按片源分辨率比例缩放； - 当 Width 非 0，Height 为 0，则 Height 按片源分辨率比例缩放； - 当 Width、Height 均非 0，则分辨率按用户指定。
    * reference  输出参考基准，可选，默认为空  - NONE 输出分辨率按输入的第一个片源为主，码率按输出分辨率自适应，帧率固定输出25fps - MAX_BITRATE 按码率最大的输入片源参数为基准 - MAX_RESOLUTION 按分辨率最大的输入片源参数为基准
    * videoCodec  视频编码格式。 取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resolutionAdaptation' => 'resolution_adaptation',
            'resolutionUpsample' => 'resolution_upsample',
            'format' => 'format',
            'width' => 'width',
            'height' => 'height',
            'reference' => 'reference',
            'videoCodec' => 'video_codec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resolutionAdaptation  分辨率自适应策略, 选值：OPEN, CLOSE（默认OPEN） 输入为OPEN时，width表示长边，height表示短边 输入为CLOSE时，width表示宽度，height表示长度
    * resolutionUpsample  分辨率上采样开关, 选值：ON, OFF（默认OFF）
    * format  输出封装格式，HLS、MP4（默认MP4）、MP3、MOV、FLV、AVI
    * width  输出宽或长边，整型，输入小数向下取整，默认0，按源  - 当 width、height 均为 0，则分辨率取片源分辨率； - 当 width 为 0，height 非 0，则 width 按片源分辨率比例缩放； - 当 width 非 0，height 为 0，则 height 按片源分辨率比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * height  输出高或短边，整型，输入小数向下取整，默认0，按源  - 当 Width、Height 均为 0，则分辨率取片源分辨率； - 当 Width 为 0，Height 非 0，则 Width 按片源分辨率比例缩放； - 当 Width 非 0，Height 为 0，则 Height 按片源分辨率比例缩放； - 当 Width、Height 均非 0，则分辨率按用户指定。
    * reference  输出参考基准，可选，默认为空  - NONE 输出分辨率按输入的第一个片源为主，码率按输出分辨率自适应，帧率固定输出25fps - MAX_BITRATE 按码率最大的输入片源参数为基准 - MAX_RESOLUTION 按分辨率最大的输入片源参数为基准
    * videoCodec  视频编码格式。 取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @var string[]
    */
    protected static $setters = [
            'resolutionAdaptation' => 'setResolutionAdaptation',
            'resolutionUpsample' => 'setResolutionUpsample',
            'format' => 'setFormat',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'reference' => 'setReference',
            'videoCodec' => 'setVideoCodec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resolutionAdaptation  分辨率自适应策略, 选值：OPEN, CLOSE（默认OPEN） 输入为OPEN时，width表示长边，height表示短边 输入为CLOSE时，width表示宽度，height表示长度
    * resolutionUpsample  分辨率上采样开关, 选值：ON, OFF（默认OFF）
    * format  输出封装格式，HLS、MP4（默认MP4）、MP3、MOV、FLV、AVI
    * width  输出宽或长边，整型，输入小数向下取整，默认0，按源  - 当 width、height 均为 0，则分辨率取片源分辨率； - 当 width 为 0，height 非 0，则 width 按片源分辨率比例缩放； - 当 width 非 0，height 为 0，则 height 按片源分辨率比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * height  输出高或短边，整型，输入小数向下取整，默认0，按源  - 当 Width、Height 均为 0，则分辨率取片源分辨率； - 当 Width 为 0，Height 非 0，则 Width 按片源分辨率比例缩放； - 当 Width 非 0，Height 为 0，则 Height 按片源分辨率比例缩放； - 当 Width、Height 均非 0，则分辨率按用户指定。
    * reference  输出参考基准，可选，默认为空  - NONE 输出分辨率按输入的第一个片源为主，码率按输出分辨率自适应，帧率固定输出25fps - MAX_BITRATE 按码率最大的输入片源参数为基准 - MAX_RESOLUTION 按分辨率最大的输入片源参数为基准
    * videoCodec  视频编码格式。 取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @var string[]
    */
    protected static $getters = [
            'resolutionAdaptation' => 'getResolutionAdaptation',
            'resolutionUpsample' => 'getResolutionUpsample',
            'format' => 'getFormat',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'reference' => 'getReference',
            'videoCodec' => 'getVideoCodec'
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
    const RESOLUTION_ADAPTATION_OPEN = 'OPEN';
    const RESOLUTION_ADAPTATION_CLOSE = 'CLOSE';
    const RESOLUTION_UPSAMPLE_ON = 'ON';
    const RESOLUTION_UPSAMPLE_OFF = 'OFF';
    const FORMAT_MP4 = 'MP4';
    const FORMAT_HLS = 'HLS';
    const FORMAT_MP3 = 'MP3';
    const FORMAT_MOV = 'MOV';
    const FORMAT_AVI = 'AVI';
    const FORMAT_FLV = 'FLV';
    const REFERENCE_NONE = 'NONE';
    const REFERENCE_MAX_BITRATE = 'MAX_BITRATE';
    const REFERENCE_MAX_RESOLUTION = 'MAX_RESOLUTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResolutionAdaptationAllowableValues()
    {
        return [
            self::RESOLUTION_ADAPTATION_OPEN,
            self::RESOLUTION_ADAPTATION_CLOSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResolutionUpsampleAllowableValues()
    {
        return [
            self::RESOLUTION_UPSAMPLE_ON,
            self::RESOLUTION_UPSAMPLE_OFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_MP4,
            self::FORMAT_HLS,
            self::FORMAT_MP3,
            self::FORMAT_MOV,
            self::FORMAT_AVI,
            self::FORMAT_FLV,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReferenceAllowableValues()
    {
        return [
            self::REFERENCE_NONE,
            self::REFERENCE_MAX_BITRATE,
            self::REFERENCE_MAX_RESOLUTION,
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
        $this->container['resolutionAdaptation'] = isset($data['resolutionAdaptation']) ? $data['resolutionAdaptation'] : null;
        $this->container['resolutionUpsample'] = isset($data['resolutionUpsample']) ? $data['resolutionUpsample'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['videoCodec'] = isset($data['videoCodec']) ? $data['videoCodec'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getResolutionAdaptationAllowableValues();
                if (!is_null($this->container['resolutionAdaptation']) && !in_array($this->container['resolutionAdaptation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resolutionAdaptation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resolutionAdaptation']) && (mb_strlen($this->container['resolutionAdaptation']) > 32)) {
                $invalidProperties[] = "invalid value for 'resolutionAdaptation', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resolutionAdaptation']) && (mb_strlen($this->container['resolutionAdaptation']) < 0)) {
                $invalidProperties[] = "invalid value for 'resolutionAdaptation', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResolutionUpsampleAllowableValues();
                if (!is_null($this->container['resolutionUpsample']) && !in_array($this->container['resolutionUpsample'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resolutionUpsample', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resolutionUpsample']) && (mb_strlen($this->container['resolutionUpsample']) > 32)) {
                $invalidProperties[] = "invalid value for 'resolutionUpsample', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resolutionUpsample']) && (mb_strlen($this->container['resolutionUpsample']) < 0)) {
                $invalidProperties[] = "invalid value for 'resolutionUpsample', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) > 32)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) < 0)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 4096)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2880)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2880.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getReferenceAllowableValues();
                if (!is_null($this->container['reference']) && !in_array($this->container['reference'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reference', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 32)) {
                $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
                $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoCodec']) && ($this->container['videoCodec'] > 2)) {
                $invalidProperties[] = "invalid value for 'videoCodec', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['videoCodec']) && ($this->container['videoCodec'] < 1)) {
                $invalidProperties[] = "invalid value for 'videoCodec', must be bigger than or equal to 1.";
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
    * Gets resolutionAdaptation
    *  分辨率自适应策略, 选值：OPEN, CLOSE（默认OPEN） 输入为OPEN时，width表示长边，height表示短边 输入为CLOSE时，width表示宽度，height表示长度
    *
    * @return string|null
    */
    public function getResolutionAdaptation()
    {
        return $this->container['resolutionAdaptation'];
    }

    /**
    * Sets resolutionAdaptation
    *
    * @param string|null $resolutionAdaptation 分辨率自适应策略, 选值：OPEN, CLOSE（默认OPEN） 输入为OPEN时，width表示长边，height表示短边 输入为CLOSE时，width表示宽度，height表示长度
    *
    * @return $this
    */
    public function setResolutionAdaptation($resolutionAdaptation)
    {
        $this->container['resolutionAdaptation'] = $resolutionAdaptation;
        return $this;
    }

    /**
    * Gets resolutionUpsample
    *  分辨率上采样开关, 选值：ON, OFF（默认OFF）
    *
    * @return string|null
    */
    public function getResolutionUpsample()
    {
        return $this->container['resolutionUpsample'];
    }

    /**
    * Sets resolutionUpsample
    *
    * @param string|null $resolutionUpsample 分辨率上采样开关, 选值：ON, OFF（默认OFF）
    *
    * @return $this
    */
    public function setResolutionUpsample($resolutionUpsample)
    {
        $this->container['resolutionUpsample'] = $resolutionUpsample;
        return $this;
    }

    /**
    * Gets format
    *  输出封装格式，HLS、MP4（默认MP4）、MP3、MOV、FLV、AVI
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 输出封装格式，HLS、MP4（默认MP4）、MP3、MOV、FLV、AVI
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets width
    *  输出宽或长边，整型，输入小数向下取整，默认0，按源  - 当 width、height 均为 0，则分辨率取片源分辨率； - 当 width 为 0，height 非 0，则 width 按片源分辨率比例缩放； - 当 width 非 0，height 为 0，则 height 按片源分辨率比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
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
    * @param int|null $width 输出宽或长边，整型，输入小数向下取整，默认0，按源  - 当 width、height 均为 0，则分辨率取片源分辨率； - 当 width 为 0，height 非 0，则 width 按片源分辨率比例缩放； - 当 width 非 0，height 为 0，则 height 按片源分辨率比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
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
    *  输出高或短边，整型，输入小数向下取整，默认0，按源  - 当 Width、Height 均为 0，则分辨率取片源分辨率； - 当 Width 为 0，Height 非 0，则 Width 按片源分辨率比例缩放； - 当 Width 非 0，Height 为 0，则 Height 按片源分辨率比例缩放； - 当 Width、Height 均非 0，则分辨率按用户指定。
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
    * @param int|null $height 输出高或短边，整型，输入小数向下取整，默认0，按源  - 当 Width、Height 均为 0，则分辨率取片源分辨率； - 当 Width 为 0，Height 非 0，则 Width 按片源分辨率比例缩放； - 当 Width 非 0，Height 为 0，则 Height 按片源分辨率比例缩放； - 当 Width、Height 均非 0，则分辨率按用户指定。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets reference
    *  输出参考基准，可选，默认为空  - NONE 输出分辨率按输入的第一个片源为主，码率按输出分辨率自适应，帧率固定输出25fps - MAX_BITRATE 按码率最大的输入片源参数为基准 - MAX_RESOLUTION 按分辨率最大的输入片源参数为基准
    *
    * @return string|null
    */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
    * Sets reference
    *
    * @param string|null $reference 输出参考基准，可选，默认为空  - NONE 输出分辨率按输入的第一个片源为主，码率按输出分辨率自适应，帧率固定输出25fps - MAX_BITRATE 按码率最大的输入片源参数为基准 - MAX_RESOLUTION 按分辨率最大的输入片源参数为基准
    *
    * @return $this
    */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;
        return $this;
    }

    /**
    * Gets videoCodec
    *  视频编码格式。 取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @return int|null
    */
    public function getVideoCodec()
    {
        return $this->container['videoCodec'];
    }

    /**
    * Sets videoCodec
    *
    * @param int|null $videoCodec 视频编码格式。 取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @return $this
    */
    public function setVideoCodec($videoCodec)
    {
        $this->container['videoCodec'] = $videoCodec;
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

