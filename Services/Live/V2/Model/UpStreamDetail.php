<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpStreamDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpStreamDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * fps  帧率，单位为fps
    * rate  码率，单位为Kbps
    * delay  时延 单位ms
    * gopDuration  最近一次gop的时长 单位ms
    * lastVideoPts  视频DTS 单位ms
    * lastAudioPts  音频DTS 单位ms
    * lastVideoAudioPtsDiff  音视频DTS差值 单位ms
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'fps' => 'int',
            'rate' => 'int',
            'delay' => 'int',
            'gopDuration' => 'int',
            'lastVideoPts' => 'int',
            'lastAudioPts' => 'int',
            'lastVideoAudioPtsDiff' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * fps  帧率，单位为fps
    * rate  码率，单位为Kbps
    * delay  时延 单位ms
    * gopDuration  最近一次gop的时长 单位ms
    * lastVideoPts  视频DTS 单位ms
    * lastAudioPts  音频DTS 单位ms
    * lastVideoAudioPtsDiff  音视频DTS差值 单位ms
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'fps' => 'int64',
        'rate' => 'int64',
        'delay' => 'int64',
        'gopDuration' => 'int64',
        'lastVideoPts' => 'int64',
        'lastAudioPts' => 'int64',
        'lastVideoAudioPtsDiff' => 'int64'
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
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * fps  帧率，单位为fps
    * rate  码率，单位为Kbps
    * delay  时延 单位ms
    * gopDuration  最近一次gop的时长 单位ms
    * lastVideoPts  视频DTS 单位ms
    * lastAudioPts  音频DTS 单位ms
    * lastVideoAudioPtsDiff  音视频DTS差值 单位ms
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'fps' => 'fps',
            'rate' => 'rate',
            'delay' => 'delay',
            'gopDuration' => 'gop_duration',
            'lastVideoPts' => 'last_video_pts',
            'lastAudioPts' => 'last_audio_pts',
            'lastVideoAudioPtsDiff' => 'last_video_audio_pts_diff'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * fps  帧率，单位为fps
    * rate  码率，单位为Kbps
    * delay  时延 单位ms
    * gopDuration  最近一次gop的时长 单位ms
    * lastVideoPts  视频DTS 单位ms
    * lastAudioPts  音频DTS 单位ms
    * lastVideoAudioPtsDiff  音视频DTS差值 单位ms
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'fps' => 'setFps',
            'rate' => 'setRate',
            'delay' => 'setDelay',
            'gopDuration' => 'setGopDuration',
            'lastVideoPts' => 'setLastVideoPts',
            'lastAudioPts' => 'setLastAudioPts',
            'lastVideoAudioPtsDiff' => 'setLastVideoAudioPtsDiff'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * fps  帧率，单位为fps
    * rate  码率，单位为Kbps
    * delay  时延 单位ms
    * gopDuration  最近一次gop的时长 单位ms
    * lastVideoPts  视频DTS 单位ms
    * lastAudioPts  音频DTS 单位ms
    * lastVideoAudioPtsDiff  音视频DTS差值 单位ms
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'fps' => 'getFps',
            'rate' => 'getRate',
            'delay' => 'getDelay',
            'gopDuration' => 'getGopDuration',
            'lastVideoPts' => 'getLastVideoPts',
            'lastAudioPts' => 'getLastAudioPts',
            'lastVideoAudioPtsDiff' => 'getLastVideoAudioPtsDiff'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['fps'] = isset($data['fps']) ? $data['fps'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['gopDuration'] = isset($data['gopDuration']) ? $data['gopDuration'] : null;
        $this->container['lastVideoPts'] = isset($data['lastVideoPts']) ? $data['lastVideoPts'] : null;
        $this->container['lastAudioPts'] = isset($data['lastAudioPts']) ? $data['lastAudioPts'] : null;
        $this->container['lastVideoAudioPtsDiff'] = isset($data['lastVideoAudioPtsDiff']) ? $data['lastVideoAudioPtsDiff'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) > 64)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) < 1)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fps']) && ($this->container['fps'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'fps', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['fps']) && ($this->container['fps'] < 0)) {
                $invalidProperties[] = "invalid value for 'fps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rate']) && ($this->container['rate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'rate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['rate']) && ($this->container['rate'] < 0)) {
                $invalidProperties[] = "invalid value for 'rate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['delay']) && ($this->container['delay'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'delay', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['delay']) && ($this->container['delay'] < 0)) {
                $invalidProperties[] = "invalid value for 'delay', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gopDuration']) && ($this->container['gopDuration'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'gopDuration', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['gopDuration']) && ($this->container['gopDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'gopDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastVideoPts']) && ($this->container['lastVideoPts'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastVideoPts', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastVideoPts']) && ($this->container['lastVideoPts'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastVideoPts', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastAudioPts']) && ($this->container['lastAudioPts'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastAudioPts', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastAudioPts']) && ($this->container['lastAudioPts'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastAudioPts', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastVideoAudioPtsDiff']) && ($this->container['lastVideoAudioPtsDiff'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastVideoAudioPtsDiff', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastVideoAudioPtsDiff']) && ($this->container['lastVideoAudioPtsDiff'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastVideoAudioPtsDiff', must be bigger than or equal to 0.";
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
    * Gets time
    *  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 采样时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets fps
    *  帧率，单位为fps
    *
    * @return int|null
    */
    public function getFps()
    {
        return $this->container['fps'];
    }

    /**
    * Sets fps
    *
    * @param int|null $fps 帧率，单位为fps
    *
    * @return $this
    */
    public function setFps($fps)
    {
        $this->container['fps'] = $fps;
        return $this;
    }

    /**
    * Gets rate
    *  码率，单位为Kbps
    *
    * @return int|null
    */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
    * Sets rate
    *
    * @param int|null $rate 码率，单位为Kbps
    *
    * @return $this
    */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;
        return $this;
    }

    /**
    * Gets delay
    *  时延 单位ms
    *
    * @return int|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param int|null $delay 时延 单位ms
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets gopDuration
    *  最近一次gop的时长 单位ms
    *
    * @return int|null
    */
    public function getGopDuration()
    {
        return $this->container['gopDuration'];
    }

    /**
    * Sets gopDuration
    *
    * @param int|null $gopDuration 最近一次gop的时长 单位ms
    *
    * @return $this
    */
    public function setGopDuration($gopDuration)
    {
        $this->container['gopDuration'] = $gopDuration;
        return $this;
    }

    /**
    * Gets lastVideoPts
    *  视频DTS 单位ms
    *
    * @return int|null
    */
    public function getLastVideoPts()
    {
        return $this->container['lastVideoPts'];
    }

    /**
    * Sets lastVideoPts
    *
    * @param int|null $lastVideoPts 视频DTS 单位ms
    *
    * @return $this
    */
    public function setLastVideoPts($lastVideoPts)
    {
        $this->container['lastVideoPts'] = $lastVideoPts;
        return $this;
    }

    /**
    * Gets lastAudioPts
    *  音频DTS 单位ms
    *
    * @return int|null
    */
    public function getLastAudioPts()
    {
        return $this->container['lastAudioPts'];
    }

    /**
    * Sets lastAudioPts
    *
    * @param int|null $lastAudioPts 音频DTS 单位ms
    *
    * @return $this
    */
    public function setLastAudioPts($lastAudioPts)
    {
        $this->container['lastAudioPts'] = $lastAudioPts;
        return $this;
    }

    /**
    * Gets lastVideoAudioPtsDiff
    *  音视频DTS差值 单位ms
    *
    * @return int|null
    */
    public function getLastVideoAudioPtsDiff()
    {
        return $this->container['lastVideoAudioPtsDiff'];
    }

    /**
    * Sets lastVideoAudioPtsDiff
    *
    * @param int|null $lastVideoAudioPtsDiff 音视频DTS差值 单位ms
    *
    * @return $this
    */
    public function setLastVideoAudioPtsDiff($lastVideoAudioPtsDiff)
    {
        $this->container['lastVideoAudioPtsDiff'] = $lastVideoAudioPtsDiff;
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

