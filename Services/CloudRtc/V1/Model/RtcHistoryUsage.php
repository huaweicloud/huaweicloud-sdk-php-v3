<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RtcHistoryUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RtcHistoryUsage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * videoSd  标清视频时长，单位秒
    * videoHd  高清视频时长，单位秒
    * videoHdp  超高清视频时长，单位秒
    * audio  音频时长，单位秒
    * totalDuration  音视频总时长，单位秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'date' => 'string',
            'videoSd' => 'int',
            'videoHd' => 'int',
            'videoHdp' => 'int',
            'audio' => 'int',
            'totalDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * videoSd  标清视频时长，单位秒
    * videoHd  高清视频时长，单位秒
    * videoHdp  超高清视频时长，单位秒
    * audio  音频时长，单位秒
    * totalDuration  音视频总时长，单位秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'date' => null,
        'videoSd' => 'int64',
        'videoHd' => 'int64',
        'videoHdp' => 'int64',
        'audio' => 'int64',
        'totalDuration' => 'int64'
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
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * videoSd  标清视频时长，单位秒
    * videoHd  高清视频时长，单位秒
    * videoHdp  超高清视频时长，单位秒
    * audio  音频时长，单位秒
    * totalDuration  音视频总时长，单位秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'date' => 'date',
            'videoSd' => 'video_sd',
            'videoHd' => 'video_hd',
            'videoHdp' => 'video_hdp',
            'audio' => 'audio',
            'totalDuration' => 'total_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * videoSd  标清视频时长，单位秒
    * videoHd  高清视频时长，单位秒
    * videoHdp  超高清视频时长，单位秒
    * audio  音频时长，单位秒
    * totalDuration  音视频总时长，单位秒
    *
    * @var string[]
    */
    protected static $setters = [
            'date' => 'setDate',
            'videoSd' => 'setVideoSd',
            'videoHd' => 'setVideoHd',
            'videoHdp' => 'setVideoHdp',
            'audio' => 'setAudio',
            'totalDuration' => 'setTotalDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * videoSd  标清视频时长，单位秒
    * videoHd  高清视频时长，单位秒
    * videoHdp  超高清视频时长，单位秒
    * audio  音频时长，单位秒
    * totalDuration  音视频总时长，单位秒
    *
    * @var string[]
    */
    protected static $getters = [
            'date' => 'getDate',
            'videoSd' => 'getVideoSd',
            'videoHd' => 'getVideoHd',
            'videoHdp' => 'getVideoHdp',
            'audio' => 'getAudio',
            'totalDuration' => 'getTotalDuration'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['videoSd'] = isset($data['videoSd']) ? $data['videoSd'] : null;
        $this->container['videoHd'] = isset($data['videoHd']) ? $data['videoHd'] : null;
        $this->container['videoHdp'] = isset($data['videoHdp']) ? $data['videoHdp'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
        $this->container['totalDuration'] = isset($data['totalDuration']) ? $data['totalDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) > 10)) {
                $invalidProperties[] = "invalid value for 'date', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) < 10)) {
                $invalidProperties[] = "invalid value for 'date', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['videoSd']) && ($this->container['videoSd'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'videoSd', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['videoSd']) && ($this->container['videoSd'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoSd', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoHd']) && ($this->container['videoHd'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'videoHd', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['videoHd']) && ($this->container['videoHd'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoHd', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoHdp']) && ($this->container['videoHdp'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'videoHdp', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['videoHdp']) && ($this->container['videoHdp'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoHdp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audio']) && ($this->container['audio'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'audio', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['audio']) && ($this->container['audio'] < 0)) {
                $invalidProperties[] = "invalid value for 'audio', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalDuration']) && ($this->container['totalDuration'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'totalDuration', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['totalDuration']) && ($this->container['totalDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalDuration', must be bigger than or equal to 0.";
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
    * Gets date
    *  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets videoSd
    *  标清视频时长，单位秒
    *
    * @return int|null
    */
    public function getVideoSd()
    {
        return $this->container['videoSd'];
    }

    /**
    * Sets videoSd
    *
    * @param int|null $videoSd 标清视频时长，单位秒
    *
    * @return $this
    */
    public function setVideoSd($videoSd)
    {
        $this->container['videoSd'] = $videoSd;
        return $this;
    }

    /**
    * Gets videoHd
    *  高清视频时长，单位秒
    *
    * @return int|null
    */
    public function getVideoHd()
    {
        return $this->container['videoHd'];
    }

    /**
    * Sets videoHd
    *
    * @param int|null $videoHd 高清视频时长，单位秒
    *
    * @return $this
    */
    public function setVideoHd($videoHd)
    {
        $this->container['videoHd'] = $videoHd;
        return $this;
    }

    /**
    * Gets videoHdp
    *  超高清视频时长，单位秒
    *
    * @return int|null
    */
    public function getVideoHdp()
    {
        return $this->container['videoHdp'];
    }

    /**
    * Sets videoHdp
    *
    * @param int|null $videoHdp 超高清视频时长，单位秒
    *
    * @return $this
    */
    public function setVideoHdp($videoHdp)
    {
        $this->container['videoHdp'] = $videoHdp;
        return $this;
    }

    /**
    * Gets audio
    *  音频时长，单位秒
    *
    * @return int|null
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param int|null $audio 音频时长，单位秒
    *
    * @return $this
    */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;
        return $this;
    }

    /**
    * Gets totalDuration
    *  音视频总时长，单位秒
    *
    * @return int|null
    */
    public function getTotalDuration()
    {
        return $this->container['totalDuration'];
    }

    /**
    * Sets totalDuration
    *
    * @param int|null $totalDuration 音视频总时长，单位秒
    *
    * @return $this
    */
    public function setTotalDuration($totalDuration)
    {
        $this->container['totalDuration'] = $totalDuration;
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

