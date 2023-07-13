<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Common implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Common';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pvc  pvc开关。
    * pvcVersion  pvc版本。
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式(有效值范围) - 1：AUDIO_CODECTYPE_AAC - 2：AUDIO_CODECTYPE_HEAAC1 - 3：AUDIO_CODECTYPE_HEAAC2 - 4：AUDIO_CODECTYPE_MP3  默认值为1。
    * hlsInterval  分片时长(默认为5秒)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pvc' => 'string',
            'pvcVersion' => 'string',
            'videoCodec' => 'string',
            'audioCodec' => 'string',
            'hlsInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pvc  pvc开关。
    * pvcVersion  pvc版本。
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式(有效值范围) - 1：AUDIO_CODECTYPE_AAC - 2：AUDIO_CODECTYPE_HEAAC1 - 3：AUDIO_CODECTYPE_HEAAC2 - 4：AUDIO_CODECTYPE_MP3  默认值为1。
    * hlsInterval  分片时长(默认为5秒)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pvc' => null,
        'pvcVersion' => null,
        'videoCodec' => null,
        'audioCodec' => 'int32',
        'hlsInterval' => null
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
    * pvc  pvc开关。
    * pvcVersion  pvc版本。
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式(有效值范围) - 1：AUDIO_CODECTYPE_AAC - 2：AUDIO_CODECTYPE_HEAAC1 - 3：AUDIO_CODECTYPE_HEAAC2 - 4：AUDIO_CODECTYPE_MP3  默认值为1。
    * hlsInterval  分片时长(默认为5秒)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pvc' => 'pvc',
            'pvcVersion' => 'pvc_version',
            'videoCodec' => 'video_codec',
            'audioCodec' => 'audio_codec',
            'hlsInterval' => 'hls_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pvc  pvc开关。
    * pvcVersion  pvc版本。
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式(有效值范围) - 1：AUDIO_CODECTYPE_AAC - 2：AUDIO_CODECTYPE_HEAAC1 - 3：AUDIO_CODECTYPE_HEAAC2 - 4：AUDIO_CODECTYPE_MP3  默认值为1。
    * hlsInterval  分片时长(默认为5秒)。
    *
    * @var string[]
    */
    protected static $setters = [
            'pvc' => 'setPvc',
            'pvcVersion' => 'setPvcVersion',
            'videoCodec' => 'setVideoCodec',
            'audioCodec' => 'setAudioCodec',
            'hlsInterval' => 'setHlsInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pvc  pvc开关。
    * pvcVersion  pvc版本。
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式(有效值范围) - 1：AUDIO_CODECTYPE_AAC - 2：AUDIO_CODECTYPE_HEAAC1 - 3：AUDIO_CODECTYPE_HEAAC2 - 4：AUDIO_CODECTYPE_MP3  默认值为1。
    * hlsInterval  分片时长(默认为5秒)。
    *
    * @var string[]
    */
    protected static $getters = [
            'pvc' => 'getPvc',
            'pvcVersion' => 'getPvcVersion',
            'videoCodec' => 'getVideoCodec',
            'audioCodec' => 'getAudioCodec',
            'hlsInterval' => 'getHlsInterval'
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
    const PVC__0 = '0';
    const PVC__1 = '1';
    const PVC__2 = '2';
    const PVC_UNKNOW = 'UNKNOW';
    const VIDEO_CODEC_H264 = 'H264';
    const VIDEO_CODEC_H265 = 'H265';
    const VIDEO_CODEC_UNKNOW = 'UNKNOW';
    const AUDIO_CODEC_AAC = 'AAC';
    const AUDIO_CODEC_HEAAC1 = 'HEAAC1';
    const AUDIO_CODEC_HEAAC2 = 'HEAAC2';
    const AUDIO_CODEC_MP3 = 'MP3';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPvcAllowableValues()
    {
        return [
            self::PVC__0,
            self::PVC__1,
            self::PVC__2,
            self::PVC_UNKNOW,
        ];
    }

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
            self::VIDEO_CODEC_UNKNOW,
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
        $this->container['pvcVersion'] = isset($data['pvcVersion']) ? $data['pvcVersion'] : null;
        $this->container['videoCodec'] = isset($data['videoCodec']) ? $data['videoCodec'] : null;
        $this->container['audioCodec'] = isset($data['audioCodec']) ? $data['audioCodec'] : null;
        $this->container['hlsInterval'] = isset($data['hlsInterval']) ? $data['hlsInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pvc'] === null) {
            $invalidProperties[] = "'pvc' can't be null";
        }
            $allowedValues = $this->getPvcAllowableValues();
                if (!is_null($this->container['pvc']) && !in_array($this->container['pvc'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pvc', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    *  pvc开关。
    *
    * @return string
    */
    public function getPvc()
    {
        return $this->container['pvc'];
    }

    /**
    * Sets pvc
    *
    * @param string $pvc pvc开关。
    *
    * @return $this
    */
    public function setPvc($pvc)
    {
        $this->container['pvc'] = $pvc;
        return $this;
    }

    /**
    * Gets pvcVersion
    *  pvc版本。
    *
    * @return string|null
    */
    public function getPvcVersion()
    {
        return $this->container['pvcVersion'];
    }

    /**
    * Sets pvcVersion
    *
    * @param string|null $pvcVersion pvc版本。
    *
    * @return $this
    */
    public function setPvcVersion($pvcVersion)
    {
        $this->container['pvcVersion'] = $pvcVersion;
        return $this;
    }

    /**
    * Gets videoCodec
    *  视频编码格式。
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
    * @param string|null $videoCodec 视频编码格式。
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
    *  音频编码格式(有效值范围) - 1：AUDIO_CODECTYPE_AAC - 2：AUDIO_CODECTYPE_HEAAC1 - 3：AUDIO_CODECTYPE_HEAAC2 - 4：AUDIO_CODECTYPE_MP3  默认值为1。
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
    * @param string|null $audioCodec 音频编码格式(有效值范围) - 1：AUDIO_CODECTYPE_AAC - 2：AUDIO_CODECTYPE_HEAAC1 - 3：AUDIO_CODECTYPE_HEAAC2 - 4：AUDIO_CODECTYPE_MP3  默认值为1。
    *
    * @return $this
    */
    public function setAudioCodec($audioCodec)
    {
        $this->container['audioCodec'] = $audioCodec;
        return $this;
    }

    /**
    * Gets hlsInterval
    *  分片时长(默认为5秒)。
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
    * @param int|null $hlsInterval 分片时长(默认为5秒)。
    *
    * @return $this
    */
    public function setHlsInterval($hlsInterval)
    {
        $this->container['hlsInterval'] = $hlsInterval;
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

