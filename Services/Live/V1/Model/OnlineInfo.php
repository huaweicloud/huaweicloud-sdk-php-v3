<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OnlineInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OnlineInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishDomain  域名
    * app  应用名
    * stream  流名
    * videoCodec  视频编码方式 - H264 - H265
    * audioCodec  音频编码方式 - AAC
    * videoFrameRate  视频帧率
    * audioFrameRate  音频帧率
    * videoBitrate  视频码率
    * audioBitrate  音频码率
    * resolution  视频分辨率
    * clientIp  推流设备的ip
    * startTime  开始推流时刻 UTC格式 2006-01-02T15:04:05Z
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishDomain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'videoCodec' => 'string',
            'audioCodec' => 'string',
            'videoFrameRate' => 'int',
            'audioFrameRate' => 'int',
            'videoBitrate' => 'int',
            'audioBitrate' => 'int',
            'resolution' => 'string',
            'clientIp' => 'string',
            'startTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishDomain  域名
    * app  应用名
    * stream  流名
    * videoCodec  视频编码方式 - H264 - H265
    * audioCodec  音频编码方式 - AAC
    * videoFrameRate  视频帧率
    * audioFrameRate  音频帧率
    * videoBitrate  视频码率
    * audioBitrate  音频码率
    * resolution  视频分辨率
    * clientIp  推流设备的ip
    * startTime  开始推流时刻 UTC格式 2006-01-02T15:04:05Z
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishDomain' => null,
        'app' => null,
        'stream' => null,
        'videoCodec' => null,
        'audioCodec' => null,
        'videoFrameRate' => 'int64',
        'audioFrameRate' => 'int64',
        'videoBitrate' => 'int64',
        'audioBitrate' => 'int64',
        'resolution' => null,
        'clientIp' => null,
        'startTime' => null
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
    * publishDomain  域名
    * app  应用名
    * stream  流名
    * videoCodec  视频编码方式 - H264 - H265
    * audioCodec  音频编码方式 - AAC
    * videoFrameRate  视频帧率
    * audioFrameRate  音频帧率
    * videoBitrate  视频码率
    * audioBitrate  音频码率
    * resolution  视频分辨率
    * clientIp  推流设备的ip
    * startTime  开始推流时刻 UTC格式 2006-01-02T15:04:05Z
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'stream' => 'stream',
            'videoCodec' => 'video_codec',
            'audioCodec' => 'audio_codec',
            'videoFrameRate' => 'video_frame_rate',
            'audioFrameRate' => 'audio_frame_rate',
            'videoBitrate' => 'video_bitrate',
            'audioBitrate' => 'audio_bitrate',
            'resolution' => 'resolution',
            'clientIp' => 'client_ip',
            'startTime' => 'start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishDomain  域名
    * app  应用名
    * stream  流名
    * videoCodec  视频编码方式 - H264 - H265
    * audioCodec  音频编码方式 - AAC
    * videoFrameRate  视频帧率
    * audioFrameRate  音频帧率
    * videoBitrate  视频码率
    * audioBitrate  音频码率
    * resolution  视频分辨率
    * clientIp  推流设备的ip
    * startTime  开始推流时刻 UTC格式 2006-01-02T15:04:05Z
    *
    * @var string[]
    */
    protected static $setters = [
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'videoCodec' => 'setVideoCodec',
            'audioCodec' => 'setAudioCodec',
            'videoFrameRate' => 'setVideoFrameRate',
            'audioFrameRate' => 'setAudioFrameRate',
            'videoBitrate' => 'setVideoBitrate',
            'audioBitrate' => 'setAudioBitrate',
            'resolution' => 'setResolution',
            'clientIp' => 'setClientIp',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishDomain  域名
    * app  应用名
    * stream  流名
    * videoCodec  视频编码方式 - H264 - H265
    * audioCodec  音频编码方式 - AAC
    * videoFrameRate  视频帧率
    * audioFrameRate  音频帧率
    * videoBitrate  视频码率
    * audioBitrate  音频码率
    * resolution  视频分辨率
    * clientIp  推流设备的ip
    * startTime  开始推流时刻 UTC格式 2006-01-02T15:04:05Z
    *
    * @var string[]
    */
    protected static $getters = [
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'videoCodec' => 'getVideoCodec',
            'audioCodec' => 'getAudioCodec',
            'videoFrameRate' => 'getVideoFrameRate',
            'audioFrameRate' => 'getAudioFrameRate',
            'videoBitrate' => 'getVideoBitrate',
            'audioBitrate' => 'getAudioBitrate',
            'resolution' => 'getResolution',
            'clientIp' => 'getClientIp',
            'startTime' => 'getStartTime'
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
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['videoCodec'] = isset($data['videoCodec']) ? $data['videoCodec'] : null;
        $this->container['audioCodec'] = isset($data['audioCodec']) ? $data['audioCodec'] : null;
        $this->container['videoFrameRate'] = isset($data['videoFrameRate']) ? $data['videoFrameRate'] : null;
        $this->container['audioFrameRate'] = isset($data['audioFrameRate']) ? $data['audioFrameRate'] : null;
        $this->container['videoBitrate'] = isset($data['videoBitrate']) ? $data['videoBitrate'] : null;
        $this->container['audioBitrate'] = isset($data['audioBitrate']) ? $data['audioBitrate'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publishDomain'] === null) {
            $invalidProperties[] = "'publishDomain' can't be null";
        }
            if ((mb_strlen($this->container['publishDomain']) > 64)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['publishDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
            if ((mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['stream'] === null) {
            $invalidProperties[] = "'stream' can't be null";
        }
            if ((mb_strlen($this->container['stream']) > 64)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['videoCodec'] === null) {
            $invalidProperties[] = "'videoCodec' can't be null";
        }
            $allowedValues = $this->getVideoCodecAllowableValues();
                if (!is_null($this->container['videoCodec']) && !in_array($this->container['videoCodec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoCodec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['audioCodec'] === null) {
            $invalidProperties[] = "'audioCodec' can't be null";
        }
            $allowedValues = $this->getAudioCodecAllowableValues();
                if (!is_null($this->container['audioCodec']) && !in_array($this->container['audioCodec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioCodec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['clientIp'] === null) {
            $invalidProperties[] = "'clientIp' can't be null";
        }
            if ((mb_strlen($this->container['clientIp']) > 15)) {
                $invalidProperties[] = "invalid value for 'clientIp', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['clientIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'clientIp', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
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
    * Gets publishDomain
    *  域名
    *
    * @return string
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string $publishDomain 域名
    *
    * @return $this
    */
    public function setPublishDomain($publishDomain)
    {
        $this->container['publishDomain'] = $publishDomain;
        return $this;
    }

    /**
    * Gets app
    *  应用名
    *
    * @return string
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string $app 应用名
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets stream
    *  流名
    *
    * @return string
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string $stream 流名
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets videoCodec
    *  视频编码方式 - H264 - H265
    *
    * @return string
    */
    public function getVideoCodec()
    {
        return $this->container['videoCodec'];
    }

    /**
    * Sets videoCodec
    *
    * @param string $videoCodec 视频编码方式 - H264 - H265
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
    *  音频编码方式 - AAC
    *
    * @return string
    */
    public function getAudioCodec()
    {
        return $this->container['audioCodec'];
    }

    /**
    * Sets audioCodec
    *
    * @param string $audioCodec 音频编码方式 - AAC
    *
    * @return $this
    */
    public function setAudioCodec($audioCodec)
    {
        $this->container['audioCodec'] = $audioCodec;
        return $this;
    }

    /**
    * Gets videoFrameRate
    *  视频帧率
    *
    * @return int|null
    */
    public function getVideoFrameRate()
    {
        return $this->container['videoFrameRate'];
    }

    /**
    * Sets videoFrameRate
    *
    * @param int|null $videoFrameRate 视频帧率
    *
    * @return $this
    */
    public function setVideoFrameRate($videoFrameRate)
    {
        $this->container['videoFrameRate'] = $videoFrameRate;
        return $this;
    }

    /**
    * Gets audioFrameRate
    *  音频帧率
    *
    * @return int|null
    */
    public function getAudioFrameRate()
    {
        return $this->container['audioFrameRate'];
    }

    /**
    * Sets audioFrameRate
    *
    * @param int|null $audioFrameRate 音频帧率
    *
    * @return $this
    */
    public function setAudioFrameRate($audioFrameRate)
    {
        $this->container['audioFrameRate'] = $audioFrameRate;
        return $this;
    }

    /**
    * Gets videoBitrate
    *  视频码率
    *
    * @return int|null
    */
    public function getVideoBitrate()
    {
        return $this->container['videoBitrate'];
    }

    /**
    * Sets videoBitrate
    *
    * @param int|null $videoBitrate 视频码率
    *
    * @return $this
    */
    public function setVideoBitrate($videoBitrate)
    {
        $this->container['videoBitrate'] = $videoBitrate;
        return $this;
    }

    /**
    * Gets audioBitrate
    *  音频码率
    *
    * @return int|null
    */
    public function getAudioBitrate()
    {
        return $this->container['audioBitrate'];
    }

    /**
    * Sets audioBitrate
    *
    * @param int|null $audioBitrate 音频码率
    *
    * @return $this
    */
    public function setAudioBitrate($audioBitrate)
    {
        $this->container['audioBitrate'] = $audioBitrate;
        return $this;
    }

    /**
    * Gets resolution
    *  视频分辨率
    *
    * @return string|null
    */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
    * Sets resolution
    *
    * @param string|null $resolution 视频分辨率
    *
    * @return $this
    */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;
        return $this;
    }

    /**
    * Gets clientIp
    *  推流设备的ip
    *
    * @return string
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string $clientIp 推流设备的ip
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets startTime
    *  开始推流时刻 UTC格式 2006-01-02T15:04:05Z
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始推流时刻 UTC格式 2006-01-02T15:04:05Z
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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

