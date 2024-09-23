<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoCodec  **参数解释**： 视频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * width  **参数解释**： 视频画面宽度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * height  **参数解释**： 视频画面高度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * frameRate  **参数解释**： 视频帧率。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * videoBitRate  **参数解释**： 视频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * mode  **参数解释**： 横向画面或纵向画面。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： * Horizontal：横向 * Vertical：纵向  **默认取值**： 不涉及
    * videoTranscodingStatus  **参数解释**： 视频转码状态。 **约束限制**： 用户无需填写，系统自行填写。 **取值范围**： * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功  **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoCodec' => 'string',
            'width' => 'int',
            'height' => 'int',
            'frameRate' => 'string',
            'videoBitRate' => 'int',
            'duration' => 'int',
            'audioCodec' => 'string',
            'audioBitRate' => 'int',
            'audioChannels' => 'int',
            'sample' => 'int',
            'mode' => 'string',
            'videoTranscodingStatus' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoCodec  **参数解释**： 视频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * width  **参数解释**： 视频画面宽度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * height  **参数解释**： 视频画面高度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * frameRate  **参数解释**： 视频帧率。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * videoBitRate  **参数解释**： 视频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * mode  **参数解释**： 横向画面或纵向画面。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： * Horizontal：横向 * Vertical：纵向  **默认取值**： 不涉及
    * videoTranscodingStatus  **参数解释**： 视频转码状态。 **约束限制**： 用户无需填写，系统自行填写。 **取值范围**： * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功  **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoCodec' => null,
        'width' => null,
        'height' => null,
        'frameRate' => null,
        'videoBitRate' => null,
        'duration' => null,
        'audioCodec' => null,
        'audioBitRate' => null,
        'audioChannels' => 'int32',
        'sample' => null,
        'mode' => null,
        'videoTranscodingStatus' => null,
        'errorInfo' => null
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
    * videoCodec  **参数解释**： 视频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * width  **参数解释**： 视频画面宽度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * height  **参数解释**： 视频画面高度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * frameRate  **参数解释**： 视频帧率。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * videoBitRate  **参数解释**： 视频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * mode  **参数解释**： 横向画面或纵向画面。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： * Horizontal：横向 * Vertical：纵向  **默认取值**： 不涉及
    * videoTranscodingStatus  **参数解释**： 视频转码状态。 **约束限制**： 用户无需填写，系统自行填写。 **取值范围**： * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功  **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoCodec' => 'video_codec',
            'width' => 'width',
            'height' => 'height',
            'frameRate' => 'frame_rate',
            'videoBitRate' => 'video_bit_rate',
            'duration' => 'duration',
            'audioCodec' => 'audio_codec',
            'audioBitRate' => 'audio_bit_rate',
            'audioChannels' => 'audio_channels',
            'sample' => 'sample',
            'mode' => 'mode',
            'videoTranscodingStatus' => 'video_transcoding_status',
            'errorInfo' => 'error_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoCodec  **参数解释**： 视频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * width  **参数解释**： 视频画面宽度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * height  **参数解释**： 视频画面高度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * frameRate  **参数解释**： 视频帧率。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * videoBitRate  **参数解释**： 视频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * mode  **参数解释**： 横向画面或纵向画面。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： * Horizontal：横向 * Vertical：纵向  **默认取值**： 不涉及
    * videoTranscodingStatus  **参数解释**： 视频转码状态。 **约束限制**： 用户无需填写，系统自行填写。 **取值范围**： * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功  **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'videoCodec' => 'setVideoCodec',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'frameRate' => 'setFrameRate',
            'videoBitRate' => 'setVideoBitRate',
            'duration' => 'setDuration',
            'audioCodec' => 'setAudioCodec',
            'audioBitRate' => 'setAudioBitRate',
            'audioChannels' => 'setAudioChannels',
            'sample' => 'setSample',
            'mode' => 'setMode',
            'videoTranscodingStatus' => 'setVideoTranscodingStatus',
            'errorInfo' => 'setErrorInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoCodec  **参数解释**： 视频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * width  **参数解释**： 视频画面宽度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * height  **参数解释**： 视频画面高度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * frameRate  **参数解释**： 视频帧率。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * videoBitRate  **参数解释**： 视频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * mode  **参数解释**： 横向画面或纵向画面。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： * Horizontal：横向 * Vertical：纵向  **默认取值**： 不涉及
    * videoTranscodingStatus  **参数解释**： 视频转码状态。 **约束限制**： 用户无需填写，系统自行填写。 **取值范围**： * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功  **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'videoCodec' => 'getVideoCodec',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'frameRate' => 'getFrameRate',
            'videoBitRate' => 'getVideoBitRate',
            'duration' => 'getDuration',
            'audioCodec' => 'getAudioCodec',
            'audioBitRate' => 'getAudioBitRate',
            'audioChannels' => 'getAudioChannels',
            'sample' => 'getSample',
            'mode' => 'getMode',
            'videoTranscodingStatus' => 'getVideoTranscodingStatus',
            'errorInfo' => 'getErrorInfo'
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
    const MODE_HORIZONTAL = 'Horizontal';
    const MODE_VERTICAL = 'Vertical';
    const VIDEO_TRANSCODING_STATUS_WAITING = 'WAITING';
    const VIDEO_TRANSCODING_STATUS_TRANSCODING = 'TRANSCODING';
    const VIDEO_TRANSCODING_STATUS_FAILED = 'FAILED';
    const VIDEO_TRANSCODING_STATUS_SUCCEEDED = 'SUCCEEDED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_HORIZONTAL,
            self::MODE_VERTICAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoTranscodingStatusAllowableValues()
    {
        return [
            self::VIDEO_TRANSCODING_STATUS_WAITING,
            self::VIDEO_TRANSCODING_STATUS_TRANSCODING,
            self::VIDEO_TRANSCODING_STATUS_FAILED,
            self::VIDEO_TRANSCODING_STATUS_SUCCEEDED,
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
        $this->container['videoCodec'] = isset($data['videoCodec']) ? $data['videoCodec'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['videoBitRate'] = isset($data['videoBitRate']) ? $data['videoBitRate'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['audioCodec'] = isset($data['audioCodec']) ? $data['audioCodec'] : null;
        $this->container['audioBitRate'] = isset($data['audioBitRate']) ? $data['audioBitRate'] : null;
        $this->container['audioChannels'] = isset($data['audioChannels']) ? $data['audioChannels'] : null;
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['videoTranscodingStatus'] = isset($data['videoTranscodingStatus']) ? $data['videoTranscodingStatus'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['videoCodec']) && (mb_strlen($this->container['videoCodec']) > 32)) {
                $invalidProperties[] = "invalid value for 'videoCodec', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['videoCodec']) && (mb_strlen($this->container['videoCodec']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoCodec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 8196)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 8196.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 8196)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 8196.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frameRate']) && (mb_strlen($this->container['frameRate']) > 32)) {
                $invalidProperties[] = "invalid value for 'frameRate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['frameRate']) && (mb_strlen($this->container['frameRate']) < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoBitRate']) && ($this->container['videoBitRate'] > 104857600)) {
                $invalidProperties[] = "invalid value for 'videoBitRate', must be smaller than or equal to 104857600.";
            }
            if (!is_null($this->container['videoBitRate']) && ($this->container['videoBitRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoBitRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 86400)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioCodec']) && (mb_strlen($this->container['audioCodec']) > 32)) {
                $invalidProperties[] = "invalid value for 'audioCodec', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['audioCodec']) && (mb_strlen($this->container['audioCodec']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioCodec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioBitRate']) && ($this->container['audioBitRate'] > 16384)) {
                $invalidProperties[] = "invalid value for 'audioBitRate', must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['audioBitRate']) && ($this->container['audioBitRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioBitRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioChannels']) && ($this->container['audioChannels'] > 100)) {
                $invalidProperties[] = "invalid value for 'audioChannels', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['audioChannels']) && ($this->container['audioChannels'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioChannels', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] > 100000)) {
                $invalidProperties[] = "invalid value for 'sample', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] < 0)) {
                $invalidProperties[] = "invalid value for 'sample', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVideoTranscodingStatusAllowableValues();
                if (!is_null($this->container['videoTranscodingStatus']) && !in_array($this->container['videoTranscodingStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoTranscodingStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['videoTranscodingStatus']) && (mb_strlen($this->container['videoTranscodingStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'videoTranscodingStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['videoTranscodingStatus']) && (mb_strlen($this->container['videoTranscodingStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoTranscodingStatus', the character length must be bigger than or equal to 0.";
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
    * Gets videoCodec
    *  **参数解释**： 视频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getVideoCodec()
    {
        return $this->container['videoCodec'];
    }

    /**
    * Sets videoCodec
    *
    * @param string|null $videoCodec **参数解释**： 视频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVideoCodec($videoCodec)
    {
        $this->container['videoCodec'] = $videoCodec;
        return $this;
    }

    /**
    * Gets width
    *  **参数解释**： 视频画面宽度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
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
    * @param int|null $width **参数解释**： 视频画面宽度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
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
    *  **参数解释**： 视频画面高度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
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
    * @param int|null $height **参数解释**： 视频画面高度。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
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
    *  **参数解释**： 视频帧率。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
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
    * @param string|null $frameRate **参数解释**： 视频帧率。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
        return $this;
    }

    /**
    * Gets videoBitRate
    *  **参数解释**： 视频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getVideoBitRate()
    {
        return $this->container['videoBitRate'];
    }

    /**
    * Sets videoBitRate
    *
    * @param int|null $videoBitRate **参数解释**： 视频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVideoBitRate($videoBitRate)
    {
        $this->container['videoBitRate'] = $videoBitRate;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets audioCodec
    *  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAudioCodec()
    {
        return $this->container['audioCodec'];
    }

    /**
    * Sets audioCodec
    *
    * @param string|null $audioCodec **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAudioCodec($audioCodec)
    {
        $this->container['audioCodec'] = $audioCodec;
        return $this;
    }

    /**
    * Gets audioBitRate
    *  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAudioBitRate()
    {
        return $this->container['audioBitRate'];
    }

    /**
    * Sets audioBitRate
    *
    * @param int|null $audioBitRate **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAudioBitRate($audioBitRate)
    {
        $this->container['audioBitRate'] = $audioBitRate;
        return $this;
    }

    /**
    * Gets audioChannels
    *  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAudioChannels()
    {
        return $this->container['audioChannels'];
    }

    /**
    * Sets audioChannels
    *
    * @param int|null $audioChannels **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAudioChannels($audioChannels)
    {
        $this->container['audioChannels'] = $audioChannels;
        return $this;
    }

    /**
    * Gets sample
    *  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getSample()
    {
        return $this->container['sample'];
    }

    /**
    * Sets sample
    *
    * @param int|null $sample **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSample($sample)
    {
        $this->container['sample'] = $sample;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**： 横向画面或纵向画面。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： * Horizontal：横向 * Vertical：纵向  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**： 横向画面或纵向画面。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： * Horizontal：横向 * Vertical：纵向  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets videoTranscodingStatus
    *  **参数解释**： 视频转码状态。 **约束限制**： 用户无需填写，系统自行填写。 **取值范围**： * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getVideoTranscodingStatus()
    {
        return $this->container['videoTranscodingStatus'];
    }

    /**
    * Sets videoTranscodingStatus
    *
    * @param string|null $videoTranscodingStatus **参数解释**： 视频转码状态。 **约束限制**： 用户无需填写，系统自行填写。 **取值范围**： * WAITING：等待 * TRANSCODING：转码中 * FAILED：失败 * SUCCEEDED：成功  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVideoTranscodingStatus($videoTranscodingStatus)
    {
        $this->container['videoTranscodingStatus'] = $videoTranscodingStatus;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
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

