<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StreamPortrait implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StreamPortrait';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  统计日期，日期格式按照ISO8601表示法，格式：YYYYMMDD，如20200904。统计该统计日期00:00-23:59时段的播放画像信息。
    * flow  累计流量，单位为byte。
    * playDuration  累计播放时长,单位为秒。
    * requestCount  累计请求次数。
    * userCount  累计观看人数,根据IP去重。
    * peakUserCount  峰值观看人数,flv/rtmp协议是统计Session会话ID，其它协议统计IP,1分钟的采样数据。
    * peakBandwidth  峰值带宽，单位bps,5分钟的采样数据。
    * pushDuration  累计直播(推流)时长,单位为秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'flow' => 'int',
            'playDuration' => 'int',
            'requestCount' => 'int',
            'userCount' => 'int',
            'peakUserCount' => 'int',
            'peakBandwidth' => 'int',
            'pushDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  统计日期，日期格式按照ISO8601表示法，格式：YYYYMMDD，如20200904。统计该统计日期00:00-23:59时段的播放画像信息。
    * flow  累计流量，单位为byte。
    * playDuration  累计播放时长,单位为秒。
    * requestCount  累计请求次数。
    * userCount  累计观看人数,根据IP去重。
    * peakUserCount  峰值观看人数,flv/rtmp协议是统计Session会话ID，其它协议统计IP,1分钟的采样数据。
    * peakBandwidth  峰值带宽，单位bps,5分钟的采样数据。
    * pushDuration  累计直播(推流)时长,单位为秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'flow' => 'int64',
        'playDuration' => 'int64',
        'requestCount' => 'int64',
        'userCount' => 'int64',
        'peakUserCount' => 'int64',
        'peakBandwidth' => 'int64',
        'pushDuration' => 'int64'
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
    * time  统计日期，日期格式按照ISO8601表示法，格式：YYYYMMDD，如20200904。统计该统计日期00:00-23:59时段的播放画像信息。
    * flow  累计流量，单位为byte。
    * playDuration  累计播放时长,单位为秒。
    * requestCount  累计请求次数。
    * userCount  累计观看人数,根据IP去重。
    * peakUserCount  峰值观看人数,flv/rtmp协议是统计Session会话ID，其它协议统计IP,1分钟的采样数据。
    * peakBandwidth  峰值带宽，单位bps,5分钟的采样数据。
    * pushDuration  累计直播(推流)时长,单位为秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'flow' => 'flow',
            'playDuration' => 'play_duration',
            'requestCount' => 'request_count',
            'userCount' => 'user_count',
            'peakUserCount' => 'peak_user_count',
            'peakBandwidth' => 'peak_bandwidth',
            'pushDuration' => 'push_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  统计日期，日期格式按照ISO8601表示法，格式：YYYYMMDD，如20200904。统计该统计日期00:00-23:59时段的播放画像信息。
    * flow  累计流量，单位为byte。
    * playDuration  累计播放时长,单位为秒。
    * requestCount  累计请求次数。
    * userCount  累计观看人数,根据IP去重。
    * peakUserCount  峰值观看人数,flv/rtmp协议是统计Session会话ID，其它协议统计IP,1分钟的采样数据。
    * peakBandwidth  峰值带宽，单位bps,5分钟的采样数据。
    * pushDuration  累计直播(推流)时长,单位为秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'flow' => 'setFlow',
            'playDuration' => 'setPlayDuration',
            'requestCount' => 'setRequestCount',
            'userCount' => 'setUserCount',
            'peakUserCount' => 'setPeakUserCount',
            'peakBandwidth' => 'setPeakBandwidth',
            'pushDuration' => 'setPushDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  统计日期，日期格式按照ISO8601表示法，格式：YYYYMMDD，如20200904。统计该统计日期00:00-23:59时段的播放画像信息。
    * flow  累计流量，单位为byte。
    * playDuration  累计播放时长,单位为秒。
    * requestCount  累计请求次数。
    * userCount  累计观看人数,根据IP去重。
    * peakUserCount  峰值观看人数,flv/rtmp协议是统计Session会话ID，其它协议统计IP,1分钟的采样数据。
    * peakBandwidth  峰值带宽，单位bps,5分钟的采样数据。
    * pushDuration  累计直播(推流)时长,单位为秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'flow' => 'getFlow',
            'playDuration' => 'getPlayDuration',
            'requestCount' => 'getRequestCount',
            'userCount' => 'getUserCount',
            'peakUserCount' => 'getPeakUserCount',
            'peakBandwidth' => 'getPeakBandwidth',
            'pushDuration' => 'getPushDuration'
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
        $this->container['flow'] = isset($data['flow']) ? $data['flow'] : null;
        $this->container['playDuration'] = isset($data['playDuration']) ? $data['playDuration'] : null;
        $this->container['requestCount'] = isset($data['requestCount']) ? $data['requestCount'] : null;
        $this->container['userCount'] = isset($data['userCount']) ? $data['userCount'] : null;
        $this->container['peakUserCount'] = isset($data['peakUserCount']) ? $data['peakUserCount'] : null;
        $this->container['peakBandwidth'] = isset($data['peakBandwidth']) ? $data['peakBandwidth'] : null;
        $this->container['pushDuration'] = isset($data['pushDuration']) ? $data['pushDuration'] : null;
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
            if (!is_null($this->container['flow']) && ($this->container['flow'] > -1)) {
                $invalidProperties[] = "invalid value for 'flow', must be smaller than or equal to -1.";
            }
            if (!is_null($this->container['flow']) && ($this->container['flow'] < 0)) {
                $invalidProperties[] = "invalid value for 'flow', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['playDuration']) && ($this->container['playDuration'] > -1)) {
                $invalidProperties[] = "invalid value for 'playDuration', must be smaller than or equal to -1.";
            }
            if (!is_null($this->container['playDuration']) && ($this->container['playDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'playDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['requestCount']) && ($this->container['requestCount'] > -1)) {
                $invalidProperties[] = "invalid value for 'requestCount', must be smaller than or equal to -1.";
            }
            if (!is_null($this->container['requestCount']) && ($this->container['requestCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'requestCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userCount']) && ($this->container['userCount'] > -1)) {
                $invalidProperties[] = "invalid value for 'userCount', must be smaller than or equal to -1.";
            }
            if (!is_null($this->container['userCount']) && ($this->container['userCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'userCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['peakUserCount']) && ($this->container['peakUserCount'] > -1)) {
                $invalidProperties[] = "invalid value for 'peakUserCount', must be smaller than or equal to -1.";
            }
            if (!is_null($this->container['peakUserCount']) && ($this->container['peakUserCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'peakUserCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['peakBandwidth']) && ($this->container['peakBandwidth'] > -1)) {
                $invalidProperties[] = "invalid value for 'peakBandwidth', must be smaller than or equal to -1.";
            }
            if (!is_null($this->container['peakBandwidth']) && ($this->container['peakBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'peakBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pushDuration']) && ($this->container['pushDuration'] > -1)) {
                $invalidProperties[] = "invalid value for 'pushDuration', must be smaller than or equal to -1.";
            }
            if (!is_null($this->container['pushDuration']) && ($this->container['pushDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'pushDuration', must be bigger than or equal to 0.";
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
    *  统计日期，日期格式按照ISO8601表示法，格式：YYYYMMDD，如20200904。统计该统计日期00:00-23:59时段的播放画像信息。
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
    * @param string|null $time 统计日期，日期格式按照ISO8601表示法，格式：YYYYMMDD，如20200904。统计该统计日期00:00-23:59时段的播放画像信息。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets flow
    *  累计流量，单位为byte。
    *
    * @return int|null
    */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
    * Sets flow
    *
    * @param int|null $flow 累计流量，单位为byte。
    *
    * @return $this
    */
    public function setFlow($flow)
    {
        $this->container['flow'] = $flow;
        return $this;
    }

    /**
    * Gets playDuration
    *  累计播放时长,单位为秒。
    *
    * @return int|null
    */
    public function getPlayDuration()
    {
        return $this->container['playDuration'];
    }

    /**
    * Sets playDuration
    *
    * @param int|null $playDuration 累计播放时长,单位为秒。
    *
    * @return $this
    */
    public function setPlayDuration($playDuration)
    {
        $this->container['playDuration'] = $playDuration;
        return $this;
    }

    /**
    * Gets requestCount
    *  累计请求次数。
    *
    * @return int|null
    */
    public function getRequestCount()
    {
        return $this->container['requestCount'];
    }

    /**
    * Sets requestCount
    *
    * @param int|null $requestCount 累计请求次数。
    *
    * @return $this
    */
    public function setRequestCount($requestCount)
    {
        $this->container['requestCount'] = $requestCount;
        return $this;
    }

    /**
    * Gets userCount
    *  累计观看人数,根据IP去重。
    *
    * @return int|null
    */
    public function getUserCount()
    {
        return $this->container['userCount'];
    }

    /**
    * Sets userCount
    *
    * @param int|null $userCount 累计观看人数,根据IP去重。
    *
    * @return $this
    */
    public function setUserCount($userCount)
    {
        $this->container['userCount'] = $userCount;
        return $this;
    }

    /**
    * Gets peakUserCount
    *  峰值观看人数,flv/rtmp协议是统计Session会话ID，其它协议统计IP,1分钟的采样数据。
    *
    * @return int|null
    */
    public function getPeakUserCount()
    {
        return $this->container['peakUserCount'];
    }

    /**
    * Sets peakUserCount
    *
    * @param int|null $peakUserCount 峰值观看人数,flv/rtmp协议是统计Session会话ID，其它协议统计IP,1分钟的采样数据。
    *
    * @return $this
    */
    public function setPeakUserCount($peakUserCount)
    {
        $this->container['peakUserCount'] = $peakUserCount;
        return $this;
    }

    /**
    * Gets peakBandwidth
    *  峰值带宽，单位bps,5分钟的采样数据。
    *
    * @return int|null
    */
    public function getPeakBandwidth()
    {
        return $this->container['peakBandwidth'];
    }

    /**
    * Sets peakBandwidth
    *
    * @param int|null $peakBandwidth 峰值带宽，单位bps,5分钟的采样数据。
    *
    * @return $this
    */
    public function setPeakBandwidth($peakBandwidth)
    {
        $this->container['peakBandwidth'] = $peakBandwidth;
        return $this;
    }

    /**
    * Gets pushDuration
    *  累计直播(推流)时长,单位为秒。
    *
    * @return int|null
    */
    public function getPushDuration()
    {
        return $this->container['pushDuration'];
    }

    /**
    * Sets pushDuration
    *
    * @param int|null $pushDuration 累计直播(推流)时长,单位为秒。
    *
    * @return $this
    */
    public function setPushDuration($pushDuration)
    {
        $this->container['pushDuration'] = $pushDuration;
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

