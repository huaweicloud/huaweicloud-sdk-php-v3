<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSingleStreamDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSingleStreamDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishDomain  推流域名
    * app  应用名
    * stream  流名
    * videoFramerate  展示流视频帧率情况，帧率单位为fps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_framerate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         21,         22       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         13,         34,         21       ]     }   ]
    * videoBitrate  展示流视频码率情况，码率单位为Kbps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_bitrate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         1326,         1268,         775       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         1021,         2022       ]     }   ]
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishDomain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'videoFramerate' => '\HuaweiCloud\SDK\Live\V2\Model\StreamDetail[]',
            'videoBitrate' => '\HuaweiCloud\SDK\Live\V2\Model\StreamDetail[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishDomain  推流域名
    * app  应用名
    * stream  流名
    * videoFramerate  展示流视频帧率情况，帧率单位为fps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_framerate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         21,         22       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         13,         34,         21       ]     }   ]
    * videoBitrate  展示流视频码率情况，码率单位为Kbps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_bitrate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         1326,         1268,         775       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         1021,         2022       ]     }   ]
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishDomain' => null,
        'app' => null,
        'stream' => null,
        'videoFramerate' => null,
        'videoBitrate' => null,
        'xRequestId' => null
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
    * publishDomain  推流域名
    * app  应用名
    * stream  流名
    * videoFramerate  展示流视频帧率情况，帧率单位为fps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_framerate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         21,         22       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         13,         34,         21       ]     }   ]
    * videoBitrate  展示流视频码率情况，码率单位为Kbps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_bitrate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         1326,         1268,         775       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         1021,         2022       ]     }   ]
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'stream' => 'stream',
            'videoFramerate' => 'video_framerate',
            'videoBitrate' => 'video_bitrate',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishDomain  推流域名
    * app  应用名
    * stream  流名
    * videoFramerate  展示流视频帧率情况，帧率单位为fps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_framerate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         21,         22       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         13,         34,         21       ]     }   ]
    * videoBitrate  展示流视频码率情况，码率单位为Kbps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_bitrate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         1326,         1268,         775       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         1021,         2022       ]     }   ]
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'videoFramerate' => 'setVideoFramerate',
            'videoBitrate' => 'setVideoBitrate',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishDomain  推流域名
    * app  应用名
    * stream  流名
    * videoFramerate  展示流视频帧率情况，帧率单位为fps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_framerate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         21,         22       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         13,         34,         21       ]     }   ]
    * videoBitrate  展示流视频码率情况，码率单位为Kbps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_bitrate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         1326,         1268,         775       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         1021,         2022       ]     }   ]
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'videoFramerate' => 'getVideoFramerate',
            'videoBitrate' => 'getVideoBitrate',
            'xRequestId' => 'getXRequestId'
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
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['videoFramerate'] = isset($data['videoFramerate']) ? $data['videoFramerate'] : null;
        $this->container['videoBitrate'] = isset($data['videoBitrate']) ? $data['videoBitrate'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['publishDomain']) && (mb_strlen($this->container['publishDomain']) > 64)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publishDomain']) && (mb_strlen($this->container['publishDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 64)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) > 256)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
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
    *  推流域名
    *
    * @return string|null
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string|null $publishDomain 推流域名
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
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 应用名
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
    * @return string|null
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string|null $stream 流名
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets videoFramerate
    *  展示流视频帧率情况，帧率单位为fps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_framerate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         21,         22       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         13,         34,         21       ]     }   ]
    *
    * @return \HuaweiCloud\SDK\Live\V2\Model\StreamDetail[]|null
    */
    public function getVideoFramerate()
    {
        return $this->container['videoFramerate'];
    }

    /**
    * Sets videoFramerate
    *
    * @param \HuaweiCloud\SDK\Live\V2\Model\StreamDetail[]|null $videoFramerate 展示流视频帧率情况，帧率单位为fps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_framerate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         21,         22       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         13,         34,         21       ]     }   ]
    *
    * @return $this
    */
    public function setVideoFramerate($videoFramerate)
    {
        $this->container['videoFramerate'] = $videoFramerate;
        return $this;
    }

    /**
    * Gets videoBitrate
    *  展示流视频码率情况，码率单位为Kbps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_bitrate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         1326,         1268,         775       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         1021,         2022       ]     }   ]
    *
    * @return \HuaweiCloud\SDK\Live\V2\Model\StreamDetail[]|null
    */
    public function getVideoBitrate()
    {
        return $this->container['videoBitrate'];
    }

    /**
    * Sets videoBitrate
    *
    * @param \HuaweiCloud\SDK\Live\V2\Model\StreamDetail[]|null $videoBitrate 展示流视频码率情况，码率单位为Kbps。  如果出现断流则会出现多个时间段流信息，如： ``` \"video_bitrate\": [     {       \"start_time\": \"2022-02-04T07:00:00Z\",       \"end_time\": \"2022-02-04T07:00:02Z\",       \"data_list\": [         1326,         1268,         775       ]     },     {       \"start_time\": \"2022-02-04T07:00:05Z\",       \"end_time\": \"2022-02-04T07:00:07Z\",       \"data_list\": [         1021,         2022       ]     }   ]
    *
    * @return $this
    */
    public function setVideoBitrate($videoBitrate)
    {
        $this->container['videoBitrate'] = $videoBitrate;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

