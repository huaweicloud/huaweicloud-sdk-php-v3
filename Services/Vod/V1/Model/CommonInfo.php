<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommonInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommonInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pvc  高清低码开关<br/>
    * videoCodec  视频编码格式<br/>
    * audioCodec  音频编码格式<br/> AAC：AAC格式 (default)<br/> HEAAC1：HEAAC1格式<br/> HEAAC2：HEAAC2格式<br/> MP3：MP3格式<br/>
    * isBlackCut  黑边剪裁类型<br/>
    * format  格式<br/>
    * hlsInterval  分片时长(默认为5秒)<br/>
    * upsample  上采样<br/>
    * adaptation  SHORT：短边自适应<br/> LONG：长边自适应<br/> NONE：宽高自适应<br/>
    * preset  编码质量等级，取值[0,2] 0表示当前现网方式默认方式，1表示转码效率优先，2表示转码质量优先。<br/>
    * maxIframesInterval  I帧最大间隔，取值范围：[2，10]。默认值：5，单位秒。<br/>
    * hlsAudioSeparate  转码后音频是否独立存储。<br/>
    * hlsSegmentType  分片的封装格式，目前支持TS和FMP4，默认TS格式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pvc' => 'bool',
            'videoCodec' => 'string',
            'audioCodec' => 'string',
            'isBlackCut' => 'bool',
            'format' => 'string',
            'hlsInterval' => 'int',
            'upsample' => 'bool',
            'adaptation' => 'string',
            'preset' => 'int',
            'maxIframesInterval' => 'int',
            'hlsAudioSeparate' => 'bool',
            'hlsSegmentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pvc  高清低码开关<br/>
    * videoCodec  视频编码格式<br/>
    * audioCodec  音频编码格式<br/> AAC：AAC格式 (default)<br/> HEAAC1：HEAAC1格式<br/> HEAAC2：HEAAC2格式<br/> MP3：MP3格式<br/>
    * isBlackCut  黑边剪裁类型<br/>
    * format  格式<br/>
    * hlsInterval  分片时长(默认为5秒)<br/>
    * upsample  上采样<br/>
    * adaptation  SHORT：短边自适应<br/> LONG：长边自适应<br/> NONE：宽高自适应<br/>
    * preset  编码质量等级，取值[0,2] 0表示当前现网方式默认方式，1表示转码效率优先，2表示转码质量优先。<br/>
    * maxIframesInterval  I帧最大间隔，取值范围：[2，10]。默认值：5，单位秒。<br/>
    * hlsAudioSeparate  转码后音频是否独立存储。<br/>
    * hlsSegmentType  分片的封装格式，目前支持TS和FMP4，默认TS格式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pvc' => null,
        'videoCodec' => null,
        'audioCodec' => null,
        'isBlackCut' => null,
        'format' => null,
        'hlsInterval' => null,
        'upsample' => null,
        'adaptation' => null,
        'preset' => 'int32',
        'maxIframesInterval' => 'int32',
        'hlsAudioSeparate' => null,
        'hlsSegmentType' => null
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
    * pvc  高清低码开关<br/>
    * videoCodec  视频编码格式<br/>
    * audioCodec  音频编码格式<br/> AAC：AAC格式 (default)<br/> HEAAC1：HEAAC1格式<br/> HEAAC2：HEAAC2格式<br/> MP3：MP3格式<br/>
    * isBlackCut  黑边剪裁类型<br/>
    * format  格式<br/>
    * hlsInterval  分片时长(默认为5秒)<br/>
    * upsample  上采样<br/>
    * adaptation  SHORT：短边自适应<br/> LONG：长边自适应<br/> NONE：宽高自适应<br/>
    * preset  编码质量等级，取值[0,2] 0表示当前现网方式默认方式，1表示转码效率优先，2表示转码质量优先。<br/>
    * maxIframesInterval  I帧最大间隔，取值范围：[2，10]。默认值：5，单位秒。<br/>
    * hlsAudioSeparate  转码后音频是否独立存储。<br/>
    * hlsSegmentType  分片的封装格式，目前支持TS和FMP4，默认TS格式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pvc' => 'pvc',
            'videoCodec' => 'video_codec',
            'audioCodec' => 'audio_codec',
            'isBlackCut' => 'is_black_cut',
            'format' => 'format',
            'hlsInterval' => 'hls_interval',
            'upsample' => 'upsample',
            'adaptation' => 'adaptation',
            'preset' => 'preset',
            'maxIframesInterval' => 'max_iframes_interval',
            'hlsAudioSeparate' => 'hls_audio_separate',
            'hlsSegmentType' => 'hls_segment_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pvc  高清低码开关<br/>
    * videoCodec  视频编码格式<br/>
    * audioCodec  音频编码格式<br/> AAC：AAC格式 (default)<br/> HEAAC1：HEAAC1格式<br/> HEAAC2：HEAAC2格式<br/> MP3：MP3格式<br/>
    * isBlackCut  黑边剪裁类型<br/>
    * format  格式<br/>
    * hlsInterval  分片时长(默认为5秒)<br/>
    * upsample  上采样<br/>
    * adaptation  SHORT：短边自适应<br/> LONG：长边自适应<br/> NONE：宽高自适应<br/>
    * preset  编码质量等级，取值[0,2] 0表示当前现网方式默认方式，1表示转码效率优先，2表示转码质量优先。<br/>
    * maxIframesInterval  I帧最大间隔，取值范围：[2，10]。默认值：5，单位秒。<br/>
    * hlsAudioSeparate  转码后音频是否独立存储。<br/>
    * hlsSegmentType  分片的封装格式，目前支持TS和FMP4，默认TS格式。
    *
    * @var string[]
    */
    protected static $setters = [
            'pvc' => 'setPvc',
            'videoCodec' => 'setVideoCodec',
            'audioCodec' => 'setAudioCodec',
            'isBlackCut' => 'setIsBlackCut',
            'format' => 'setFormat',
            'hlsInterval' => 'setHlsInterval',
            'upsample' => 'setUpsample',
            'adaptation' => 'setAdaptation',
            'preset' => 'setPreset',
            'maxIframesInterval' => 'setMaxIframesInterval',
            'hlsAudioSeparate' => 'setHlsAudioSeparate',
            'hlsSegmentType' => 'setHlsSegmentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pvc  高清低码开关<br/>
    * videoCodec  视频编码格式<br/>
    * audioCodec  音频编码格式<br/> AAC：AAC格式 (default)<br/> HEAAC1：HEAAC1格式<br/> HEAAC2：HEAAC2格式<br/> MP3：MP3格式<br/>
    * isBlackCut  黑边剪裁类型<br/>
    * format  格式<br/>
    * hlsInterval  分片时长(默认为5秒)<br/>
    * upsample  上采样<br/>
    * adaptation  SHORT：短边自适应<br/> LONG：长边自适应<br/> NONE：宽高自适应<br/>
    * preset  编码质量等级，取值[0,2] 0表示当前现网方式默认方式，1表示转码效率优先，2表示转码质量优先。<br/>
    * maxIframesInterval  I帧最大间隔，取值范围：[2，10]。默认值：5，单位秒。<br/>
    * hlsAudioSeparate  转码后音频是否独立存储。<br/>
    * hlsSegmentType  分片的封装格式，目前支持TS和FMP4，默认TS格式。
    *
    * @var string[]
    */
    protected static $getters = [
            'pvc' => 'getPvc',
            'videoCodec' => 'getVideoCodec',
            'audioCodec' => 'getAudioCodec',
            'isBlackCut' => 'getIsBlackCut',
            'format' => 'getFormat',
            'hlsInterval' => 'getHlsInterval',
            'upsample' => 'getUpsample',
            'adaptation' => 'getAdaptation',
            'preset' => 'getPreset',
            'maxIframesInterval' => 'getMaxIframesInterval',
            'hlsAudioSeparate' => 'getHlsAudioSeparate',
            'hlsSegmentType' => 'getHlsSegmentType'
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
    const VIDEO_CODEC_H264 = 'H264';
    const VIDEO_CODEC_H265 = 'H265';
    const AUDIO_CODEC_AAC = 'AAC';
    const AUDIO_CODEC_HEAAC1 = 'HEAAC1';
    const AUDIO_CODEC_HEAAC2 = 'HEAAC2';
    const AUDIO_CODEC_MP3 = 'MP3';
    const FORMAT_MP4 = 'MP4';
    const FORMAT_HLS = 'HLS';
    const FORMAT_DASH = 'DASH';
    const FORMAT_DASH_HLS = 'DASH_HLS';
    const FORMAT_MP3 = 'MP3';
    const FORMAT_ADTS = 'ADTS';
    const FORMAT_UNKNOW = 'UNKNOW';
    const ADAPTATION_SHORT = 'SHORT';
    const ADAPTATION_LONG = 'LONG';
    const ADAPTATION_NONE = 'NONE';
    const HLS_SEGMENT_TYPE_TS = 'TS';
    const HLS_SEGMENT_TYPE_FMP4 = 'FMP4';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoCodecAllowableValues()
    {
        return [
            self::VIDEO_CODEC_H264,
            self::VIDEO_CODEC_H265,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioCodecAllowableValues()
    {
        return [
            self::AUDIO_CODEC_AAC,
            self::AUDIO_CODEC_HEAAC1,
            self::AUDIO_CODEC_HEAAC2,
            self::AUDIO_CODEC_MP3,
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
            self::FORMAT_DASH,
            self::FORMAT_DASH_HLS,
            self::FORMAT_MP3,
            self::FORMAT_ADTS,
            self::FORMAT_UNKNOW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAdaptationAllowableValues()
    {
        return [
            self::ADAPTATION_SHORT,
            self::ADAPTATION_LONG,
            self::ADAPTATION_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHlsSegmentTypeAllowableValues()
    {
        return [
            self::HLS_SEGMENT_TYPE_TS,
            self::HLS_SEGMENT_TYPE_FMP4,
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
        $this->container['pvc'] = isset($data['pvc']) ? $data['pvc'] : null;
        $this->container['videoCodec'] = isset($data['videoCodec']) ? $data['videoCodec'] : null;
        $this->container['audioCodec'] = isset($data['audioCodec']) ? $data['audioCodec'] : null;
        $this->container['isBlackCut'] = isset($data['isBlackCut']) ? $data['isBlackCut'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['hlsInterval'] = isset($data['hlsInterval']) ? $data['hlsInterval'] : null;
        $this->container['upsample'] = isset($data['upsample']) ? $data['upsample'] : null;
        $this->container['adaptation'] = isset($data['adaptation']) ? $data['adaptation'] : null;
        $this->container['preset'] = isset($data['preset']) ? $data['preset'] : null;
        $this->container['maxIframesInterval'] = isset($data['maxIframesInterval']) ? $data['maxIframesInterval'] : null;
        $this->container['hlsAudioSeparate'] = isset($data['hlsAudioSeparate']) ? $data['hlsAudioSeparate'] : null;
        $this->container['hlsSegmentType'] = isset($data['hlsSegmentType']) ? $data['hlsSegmentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVideoCodecAllowableValues();
                if (!is_null($this->container['videoCodec']) && !in_array($this->container['videoCodec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoCodec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAudioCodecAllowableValues();
                if (!is_null($this->container['audioCodec']) && !in_array($this->container['audioCodec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioCodec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hlsInterval']) && ($this->container['hlsInterval'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsInterval', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsInterval']) && ($this->container['hlsInterval'] < 2)) {
                $invalidProperties[] = "invalid value for 'hlsInterval', must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getAdaptationAllowableValues();
                if (!is_null($this->container['adaptation']) && !in_array($this->container['adaptation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'adaptation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getHlsSegmentTypeAllowableValues();
                if (!is_null($this->container['hlsSegmentType']) && !in_array($this->container['hlsSegmentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hlsSegmentType', must be one of '%s'",
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
    * Gets pvc
    *  高清低码开关<br/>
    *
    * @return bool|null
    */
    public function getPvc()
    {
        return $this->container['pvc'];
    }

    /**
    * Sets pvc
    *
    * @param bool|null $pvc 高清低码开关<br/>
    *
    * @return $this
    */
    public function setPvc($pvc)
    {
        $this->container['pvc'] = $pvc;
        return $this;
    }

    /**
    * Gets videoCodec
    *  视频编码格式<br/>
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
    * @param string|null $videoCodec 视频编码格式<br/>
    *
    * @return $this
    */
    public function setVideoCodec($videoCodec)
    {
        $this->container['videoCodec'] = $videoCodec;
        return $this;
    }

    /**
    * Gets audioCodec
    *  音频编码格式<br/> AAC：AAC格式 (default)<br/> HEAAC1：HEAAC1格式<br/> HEAAC2：HEAAC2格式<br/> MP3：MP3格式<br/>
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
    * @param string|null $audioCodec 音频编码格式<br/> AAC：AAC格式 (default)<br/> HEAAC1：HEAAC1格式<br/> HEAAC2：HEAAC2格式<br/> MP3：MP3格式<br/>
    *
    * @return $this
    */
    public function setAudioCodec($audioCodec)
    {
        $this->container['audioCodec'] = $audioCodec;
        return $this;
    }

    /**
    * Gets isBlackCut
    *  黑边剪裁类型<br/>
    *
    * @return bool|null
    */
    public function getIsBlackCut()
    {
        return $this->container['isBlackCut'];
    }

    /**
    * Sets isBlackCut
    *
    * @param bool|null $isBlackCut 黑边剪裁类型<br/>
    *
    * @return $this
    */
    public function setIsBlackCut($isBlackCut)
    {
        $this->container['isBlackCut'] = $isBlackCut;
        return $this;
    }

    /**
    * Gets format
    *  格式<br/>
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 格式<br/>
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets hlsInterval
    *  分片时长(默认为5秒)<br/>
    *
    * @return int|null
    */
    public function getHlsInterval()
    {
        return $this->container['hlsInterval'];
    }

    /**
    * Sets hlsInterval
    *
    * @param int|null $hlsInterval 分片时长(默认为5秒)<br/>
    *
    * @return $this
    */
    public function setHlsInterval($hlsInterval)
    {
        $this->container['hlsInterval'] = $hlsInterval;
        return $this;
    }

    /**
    * Gets upsample
    *  上采样<br/>
    *
    * @return bool|null
    */
    public function getUpsample()
    {
        return $this->container['upsample'];
    }

    /**
    * Sets upsample
    *
    * @param bool|null $upsample 上采样<br/>
    *
    * @return $this
    */
    public function setUpsample($upsample)
    {
        $this->container['upsample'] = $upsample;
        return $this;
    }

    /**
    * Gets adaptation
    *  SHORT：短边自适应<br/> LONG：长边自适应<br/> NONE：宽高自适应<br/>
    *
    * @return string|null
    */
    public function getAdaptation()
    {
        return $this->container['adaptation'];
    }

    /**
    * Sets adaptation
    *
    * @param string|null $adaptation SHORT：短边自适应<br/> LONG：长边自适应<br/> NONE：宽高自适应<br/>
    *
    * @return $this
    */
    public function setAdaptation($adaptation)
    {
        $this->container['adaptation'] = $adaptation;
        return $this;
    }

    /**
    * Gets preset
    *  编码质量等级，取值[0,2] 0表示当前现网方式默认方式，1表示转码效率优先，2表示转码质量优先。<br/>
    *
    * @return int|null
    */
    public function getPreset()
    {
        return $this->container['preset'];
    }

    /**
    * Sets preset
    *
    * @param int|null $preset 编码质量等级，取值[0,2] 0表示当前现网方式默认方式，1表示转码效率优先，2表示转码质量优先。<br/>
    *
    * @return $this
    */
    public function setPreset($preset)
    {
        $this->container['preset'] = $preset;
        return $this;
    }

    /**
    * Gets maxIframesInterval
    *  I帧最大间隔，取值范围：[2，10]。默认值：5，单位秒。<br/>
    *
    * @return int|null
    */
    public function getMaxIframesInterval()
    {
        return $this->container['maxIframesInterval'];
    }

    /**
    * Sets maxIframesInterval
    *
    * @param int|null $maxIframesInterval I帧最大间隔，取值范围：[2，10]。默认值：5，单位秒。<br/>
    *
    * @return $this
    */
    public function setMaxIframesInterval($maxIframesInterval)
    {
        $this->container['maxIframesInterval'] = $maxIframesInterval;
        return $this;
    }

    /**
    * Gets hlsAudioSeparate
    *  转码后音频是否独立存储。<br/>
    *
    * @return bool|null
    */
    public function getHlsAudioSeparate()
    {
        return $this->container['hlsAudioSeparate'];
    }

    /**
    * Sets hlsAudioSeparate
    *
    * @param bool|null $hlsAudioSeparate 转码后音频是否独立存储。<br/>
    *
    * @return $this
    */
    public function setHlsAudioSeparate($hlsAudioSeparate)
    {
        $this->container['hlsAudioSeparate'] = $hlsAudioSeparate;
        return $this;
    }

    /**
    * Gets hlsSegmentType
    *  分片的封装格式，目前支持TS和FMP4，默认TS格式。
    *
    * @return string|null
    */
    public function getHlsSegmentType()
    {
        return $this->container['hlsSegmentType'];
    }

    /**
    * Sets hlsSegmentType
    *
    * @param string|null $hlsSegmentType 分片的封装格式，目前支持TS和FMP4，默认TS格式。
    *
    * @return $this
    */
    public function setHlsSegmentType($hlsSegmentType)
    {
        $this->container['hlsSegmentType'] = $hlsSegmentType;
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

