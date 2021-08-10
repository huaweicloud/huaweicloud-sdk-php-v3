<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetaData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetaData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codec  视频编码格式。  取值如下： - MPEG-2 - MPEG-4 - H.264 - H.265 - WMV - Vorbis - AAC - AC-3 - AMR - APE - FLAC - MP3 - MP2 - WMA - PCM - ADPCM - WavPack
    * duration  视频时长。  若视频的原时长为非整数，则该字段值为原时长的向上取整。
    * videoSize  视频文件大小。  单位：字节。
    * width  视频宽度（单位：像素）。 - 编码为H.264的取值范围：[32,3840]之间2的倍数。 - 编码为H.265的取值范围：[320,3840]之间4的倍数。
    * hight  视频高度（单位：像素）。 - 编码为H.264的取值范围：[32,2160]之间2的倍数 。 - 编码为H.265的取值范围：[240,2160]之间4的倍数。
    * bitRate  视频平均码率。
    * frameRate  帧率（单位：帧每秒）。  取值如下： - FRAMERATE_AUTO = 1, - FRAMERATE_10 = 2, - FRAMERATE_15 = 3, - FRAMERATE_2397 = 4, // 23.97 fps - FRAMERATE_24 = 5, - FRAMERATE_25 = 6, - FRAMERATE_2997 = 7, // 29.97 fps - FRAMERATE_30 = 8, - FRAMERATE_50 = 9, - FRAMERATE_60 = 10  默认值：1。  单位：帧每秒。
    * quality  清晰度。  取值如下： - FULL_HD：超高清 - HD：高清 - SD：标清 - FLUENT：流畅 - AD：自适应 - 2K - 4K
    * audioChannels  音频的声道数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codec' => 'string',
            'duration' => 'int',
            'videoSize' => 'int',
            'width' => 'int',
            'hight' => 'int',
            'bitRate' => 'int',
            'frameRate' => 'int',
            'quality' => 'string',
            'audioChannels' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codec  视频编码格式。  取值如下： - MPEG-2 - MPEG-4 - H.264 - H.265 - WMV - Vorbis - AAC - AC-3 - AMR - APE - FLAC - MP3 - MP2 - WMA - PCM - ADPCM - WavPack
    * duration  视频时长。  若视频的原时长为非整数，则该字段值为原时长的向上取整。
    * videoSize  视频文件大小。  单位：字节。
    * width  视频宽度（单位：像素）。 - 编码为H.264的取值范围：[32,3840]之间2的倍数。 - 编码为H.265的取值范围：[320,3840]之间4的倍数。
    * hight  视频高度（单位：像素）。 - 编码为H.264的取值范围：[32,2160]之间2的倍数 。 - 编码为H.265的取值范围：[240,2160]之间4的倍数。
    * bitRate  视频平均码率。
    * frameRate  帧率（单位：帧每秒）。  取值如下： - FRAMERATE_AUTO = 1, - FRAMERATE_10 = 2, - FRAMERATE_15 = 3, - FRAMERATE_2397 = 4, // 23.97 fps - FRAMERATE_24 = 5, - FRAMERATE_25 = 6, - FRAMERATE_2997 = 7, // 29.97 fps - FRAMERATE_30 = 8, - FRAMERATE_50 = 9, - FRAMERATE_60 = 10  默认值：1。  单位：帧每秒。
    * quality  清晰度。  取值如下： - FULL_HD：超高清 - HD：高清 - SD：标清 - FLUENT：流畅 - AD：自适应 - 2K - 4K
    * audioChannels  音频的声道数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codec' => null,
        'duration' => 'int64',
        'videoSize' => 'int64',
        'width' => 'int64',
        'hight' => 'int64',
        'bitRate' => 'int64',
        'frameRate' => 'int64',
        'quality' => null,
        'audioChannels' => 'int32'
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
    * codec  视频编码格式。  取值如下： - MPEG-2 - MPEG-4 - H.264 - H.265 - WMV - Vorbis - AAC - AC-3 - AMR - APE - FLAC - MP3 - MP2 - WMA - PCM - ADPCM - WavPack
    * duration  视频时长。  若视频的原时长为非整数，则该字段值为原时长的向上取整。
    * videoSize  视频文件大小。  单位：字节。
    * width  视频宽度（单位：像素）。 - 编码为H.264的取值范围：[32,3840]之间2的倍数。 - 编码为H.265的取值范围：[320,3840]之间4的倍数。
    * hight  视频高度（单位：像素）。 - 编码为H.264的取值范围：[32,2160]之间2的倍数 。 - 编码为H.265的取值范围：[240,2160]之间4的倍数。
    * bitRate  视频平均码率。
    * frameRate  帧率（单位：帧每秒）。  取值如下： - FRAMERATE_AUTO = 1, - FRAMERATE_10 = 2, - FRAMERATE_15 = 3, - FRAMERATE_2397 = 4, // 23.97 fps - FRAMERATE_24 = 5, - FRAMERATE_25 = 6, - FRAMERATE_2997 = 7, // 29.97 fps - FRAMERATE_30 = 8, - FRAMERATE_50 = 9, - FRAMERATE_60 = 10  默认值：1。  单位：帧每秒。
    * quality  清晰度。  取值如下： - FULL_HD：超高清 - HD：高清 - SD：标清 - FLUENT：流畅 - AD：自适应 - 2K - 4K
    * audioChannels  音频的声道数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codec' => 'codec',
            'duration' => 'duration',
            'videoSize' => 'video_size',
            'width' => 'width',
            'hight' => 'hight',
            'bitRate' => 'bit_rate',
            'frameRate' => 'frame_rate',
            'quality' => 'quality',
            'audioChannels' => 'audio_channels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codec  视频编码格式。  取值如下： - MPEG-2 - MPEG-4 - H.264 - H.265 - WMV - Vorbis - AAC - AC-3 - AMR - APE - FLAC - MP3 - MP2 - WMA - PCM - ADPCM - WavPack
    * duration  视频时长。  若视频的原时长为非整数，则该字段值为原时长的向上取整。
    * videoSize  视频文件大小。  单位：字节。
    * width  视频宽度（单位：像素）。 - 编码为H.264的取值范围：[32,3840]之间2的倍数。 - 编码为H.265的取值范围：[320,3840]之间4的倍数。
    * hight  视频高度（单位：像素）。 - 编码为H.264的取值范围：[32,2160]之间2的倍数 。 - 编码为H.265的取值范围：[240,2160]之间4的倍数。
    * bitRate  视频平均码率。
    * frameRate  帧率（单位：帧每秒）。  取值如下： - FRAMERATE_AUTO = 1, - FRAMERATE_10 = 2, - FRAMERATE_15 = 3, - FRAMERATE_2397 = 4, // 23.97 fps - FRAMERATE_24 = 5, - FRAMERATE_25 = 6, - FRAMERATE_2997 = 7, // 29.97 fps - FRAMERATE_30 = 8, - FRAMERATE_50 = 9, - FRAMERATE_60 = 10  默认值：1。  单位：帧每秒。
    * quality  清晰度。  取值如下： - FULL_HD：超高清 - HD：高清 - SD：标清 - FLUENT：流畅 - AD：自适应 - 2K - 4K
    * audioChannels  音频的声道数。
    *
    * @var string[]
    */
    protected static $setters = [
            'codec' => 'setCodec',
            'duration' => 'setDuration',
            'videoSize' => 'setVideoSize',
            'width' => 'setWidth',
            'hight' => 'setHight',
            'bitRate' => 'setBitRate',
            'frameRate' => 'setFrameRate',
            'quality' => 'setQuality',
            'audioChannels' => 'setAudioChannels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codec  视频编码格式。  取值如下： - MPEG-2 - MPEG-4 - H.264 - H.265 - WMV - Vorbis - AAC - AC-3 - AMR - APE - FLAC - MP3 - MP2 - WMA - PCM - ADPCM - WavPack
    * duration  视频时长。  若视频的原时长为非整数，则该字段值为原时长的向上取整。
    * videoSize  视频文件大小。  单位：字节。
    * width  视频宽度（单位：像素）。 - 编码为H.264的取值范围：[32,3840]之间2的倍数。 - 编码为H.265的取值范围：[320,3840]之间4的倍数。
    * hight  视频高度（单位：像素）。 - 编码为H.264的取值范围：[32,2160]之间2的倍数 。 - 编码为H.265的取值范围：[240,2160]之间4的倍数。
    * bitRate  视频平均码率。
    * frameRate  帧率（单位：帧每秒）。  取值如下： - FRAMERATE_AUTO = 1, - FRAMERATE_10 = 2, - FRAMERATE_15 = 3, - FRAMERATE_2397 = 4, // 23.97 fps - FRAMERATE_24 = 5, - FRAMERATE_25 = 6, - FRAMERATE_2997 = 7, // 29.97 fps - FRAMERATE_30 = 8, - FRAMERATE_50 = 9, - FRAMERATE_60 = 10  默认值：1。  单位：帧每秒。
    * quality  清晰度。  取值如下： - FULL_HD：超高清 - HD：高清 - SD：标清 - FLUENT：流畅 - AD：自适应 - 2K - 4K
    * audioChannels  音频的声道数。
    *
    * @var string[]
    */
    protected static $getters = [
            'codec' => 'getCodec',
            'duration' => 'getDuration',
            'videoSize' => 'getVideoSize',
            'width' => 'getWidth',
            'hight' => 'getHight',
            'bitRate' => 'getBitRate',
            'frameRate' => 'getFrameRate',
            'quality' => 'getQuality',
            'audioChannels' => 'getAudioChannels'
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
    const CODEC_MPEG_2 = 'MPEG-2';
    const CODEC_MPEG_4 = 'MPEG-4';
    const CODEC_H_264 = 'H.264';
    const CODEC_H_265 = 'H.265';
    const CODEC_WMV = 'WMV';
    const CODEC_VORBIS = 'Vorbis';
    const CODEC_AAC = 'AAC';
    const CODEC_EAC_3 = 'EAC-3';
    const CODEC_AC_3 = 'AC-3';
    const CODEC_AMR = 'AMR';
    const CODEC_APE = 'APE';
    const CODEC_FLAC = 'FLAC';
    const CODEC_MP3 = 'MP3';
    const CODEC_MP2 = 'MP2';
    const CODEC_WMA = 'WMA';
    const CODEC_PCM = 'PCM';
    const CODEC_ADPCM = 'ADPCM';
    const CODEC_WAV_PACK = 'WavPack';
    const CODEC_HEAAC = 'HEAAC';
    const CODEC_UNKNOWN = 'UNKNOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodecAllowableValues()
    {
        return [
            self::CODEC_MPEG_2,
            self::CODEC_MPEG_4,
            self::CODEC_H_264,
            self::CODEC_H_265,
            self::CODEC_WMV,
            self::CODEC_VORBIS,
            self::CODEC_AAC,
            self::CODEC_EAC_3,
            self::CODEC_AC_3,
            self::CODEC_AMR,
            self::CODEC_APE,
            self::CODEC_FLAC,
            self::CODEC_MP3,
            self::CODEC_MP2,
            self::CODEC_WMA,
            self::CODEC_PCM,
            self::CODEC_ADPCM,
            self::CODEC_WAV_PACK,
            self::CODEC_HEAAC,
            self::CODEC_UNKNOWN,
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
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['videoSize'] = isset($data['videoSize']) ? $data['videoSize'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['hight'] = isset($data['hight']) ? $data['hight'] : null;
        $this->container['bitRate'] = isset($data['bitRate']) ? $data['bitRate'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['audioChannels'] = isset($data['audioChannels']) ? $data['audioChannels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCodecAllowableValues();
                if (!is_null($this->container['codec']) && !in_array($this->container['codec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'codec', must be one of '%s'",
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
    * Gets codec
    *  视频编码格式。  取值如下： - MPEG-2 - MPEG-4 - H.264 - H.265 - WMV - Vorbis - AAC - AC-3 - AMR - APE - FLAC - MP3 - MP2 - WMA - PCM - ADPCM - WavPack
    *
    * @return string|null
    */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
    * Sets codec
    *
    * @param string|null $codec 视频编码格式。  取值如下： - MPEG-2 - MPEG-4 - H.264 - H.265 - WMV - Vorbis - AAC - AC-3 - AMR - APE - FLAC - MP3 - MP2 - WMA - PCM - ADPCM - WavPack
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets duration
    *  视频时长。  若视频的原时长为非整数，则该字段值为原时长的向上取整。
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
    * @param int|null $duration 视频时长。  若视频的原时长为非整数，则该字段值为原时长的向上取整。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets videoSize
    *  视频文件大小。  单位：字节。
    *
    * @return int|null
    */
    public function getVideoSize()
    {
        return $this->container['videoSize'];
    }

    /**
    * Sets videoSize
    *
    * @param int|null $videoSize 视频文件大小。  单位：字节。
    *
    * @return $this
    */
    public function setVideoSize($videoSize)
    {
        $this->container['videoSize'] = $videoSize;
        return $this;
    }

    /**
    * Gets width
    *  视频宽度（单位：像素）。 - 编码为H.264的取值范围：[32,3840]之间2的倍数。 - 编码为H.265的取值范围：[320,3840]之间4的倍数。
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
    * @param int|null $width 视频宽度（单位：像素）。 - 编码为H.264的取值范围：[32,3840]之间2的倍数。 - 编码为H.265的取值范围：[320,3840]之间4的倍数。
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets hight
    *  视频高度（单位：像素）。 - 编码为H.264的取值范围：[32,2160]之间2的倍数 。 - 编码为H.265的取值范围：[240,2160]之间4的倍数。
    *
    * @return int|null
    */
    public function getHight()
    {
        return $this->container['hight'];
    }

    /**
    * Sets hight
    *
    * @param int|null $hight 视频高度（单位：像素）。 - 编码为H.264的取值范围：[32,2160]之间2的倍数 。 - 编码为H.265的取值范围：[240,2160]之间4的倍数。
    *
    * @return $this
    */
    public function setHight($hight)
    {
        $this->container['hight'] = $hight;
        return $this;
    }

    /**
    * Gets bitRate
    *  视频平均码率。
    *
    * @return int|null
    */
    public function getBitRate()
    {
        return $this->container['bitRate'];
    }

    /**
    * Sets bitRate
    *
    * @param int|null $bitRate 视频平均码率。
    *
    * @return $this
    */
    public function setBitRate($bitRate)
    {
        $this->container['bitRate'] = $bitRate;
        return $this;
    }

    /**
    * Gets frameRate
    *  帧率（单位：帧每秒）。  取值如下： - FRAMERATE_AUTO = 1, - FRAMERATE_10 = 2, - FRAMERATE_15 = 3, - FRAMERATE_2397 = 4, // 23.97 fps - FRAMERATE_24 = 5, - FRAMERATE_25 = 6, - FRAMERATE_2997 = 7, // 29.97 fps - FRAMERATE_30 = 8, - FRAMERATE_50 = 9, - FRAMERATE_60 = 10  默认值：1。  单位：帧每秒。
    *
    * @return int|null
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param int|null $frameRate 帧率（单位：帧每秒）。  取值如下： - FRAMERATE_AUTO = 1, - FRAMERATE_10 = 2, - FRAMERATE_15 = 3, - FRAMERATE_2397 = 4, // 23.97 fps - FRAMERATE_24 = 5, - FRAMERATE_25 = 6, - FRAMERATE_2997 = 7, // 29.97 fps - FRAMERATE_30 = 8, - FRAMERATE_50 = 9, - FRAMERATE_60 = 10  默认值：1。  单位：帧每秒。
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
        return $this;
    }

    /**
    * Gets quality
    *  清晰度。  取值如下： - FULL_HD：超高清 - HD：高清 - SD：标清 - FLUENT：流畅 - AD：自适应 - 2K - 4K
    *
    * @return string|null
    */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
    * Sets quality
    *
    * @param string|null $quality 清晰度。  取值如下： - FULL_HD：超高清 - HD：高清 - SD：标清 - FLUENT：流畅 - AD：自适应 - 2K - 4K
    *
    * @return $this
    */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;
        return $this;
    }

    /**
    * Gets audioChannels
    *  音频的声道数。
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
    * @param int|null $audioChannels 音频的声道数。
    *
    * @return $this
    */
    public function setAudioChannels($audioChannels)
    {
        $this->container['audioChannels'] = $audioChannels;
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

