<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCarouselTaskDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCarouselTaskDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * videoFramerateList  视频帧率信息列表，单位为fps。
    * videoBitrateList  视频码率信息列表，单位为kbps。
    * audioFramerateList  音频帧率信息列表，单位为fps。
    * audioBitrateList  音频码率信息列表，单位为kbps。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'videoFramerateList' => 'int[]',
            'videoBitrateList' => 'int[]',
            'audioFramerateList' => 'int[]',
            'audioBitrateList' => 'int[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * videoFramerateList  视频帧率信息列表，单位为fps。
    * videoBitrateList  视频码率信息列表，单位为kbps。
    * audioFramerateList  音频帧率信息列表，单位为fps。
    * audioBitrateList  音频码率信息列表，单位为kbps。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'videoFramerateList' => 'int64',
        'videoBitrateList' => 'int64',
        'audioFramerateList' => 'int64',
        'audioBitrateList' => 'int64',
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
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * videoFramerateList  视频帧率信息列表，单位为fps。
    * videoBitrateList  视频码率信息列表，单位为kbps。
    * audioFramerateList  音频帧率信息列表，单位为fps。
    * audioBitrateList  音频码率信息列表，单位为kbps。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'videoFramerateList' => 'video_framerate_list',
            'videoBitrateList' => 'video_bitrate_list',
            'audioFramerateList' => 'audio_framerate_list',
            'audioBitrateList' => 'audio_bitrate_list',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * videoFramerateList  视频帧率信息列表，单位为fps。
    * videoBitrateList  视频码率信息列表，单位为kbps。
    * audioFramerateList  音频帧率信息列表，单位为fps。
    * audioBitrateList  音频码率信息列表，单位为kbps。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'videoFramerateList' => 'setVideoFramerateList',
            'videoBitrateList' => 'setVideoBitrateList',
            'audioFramerateList' => 'setAudioFramerateList',
            'audioBitrateList' => 'setAudioBitrateList',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * videoFramerateList  视频帧率信息列表，单位为fps。
    * videoBitrateList  视频码率信息列表，单位为kbps。
    * audioFramerateList  音频帧率信息列表，单位为fps。
    * audioBitrateList  音频码率信息列表，单位为kbps。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'videoFramerateList' => 'getVideoFramerateList',
            'videoBitrateList' => 'getVideoBitrateList',
            'audioFramerateList' => 'getAudioFramerateList',
            'audioBitrateList' => 'getAudioBitrateList',
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['videoFramerateList'] = isset($data['videoFramerateList']) ? $data['videoFramerateList'] : null;
        $this->container['videoBitrateList'] = isset($data['videoBitrateList']) ? $data['videoBitrateList'] : null;
        $this->container['audioFramerateList'] = isset($data['audioFramerateList']) ? $data['audioFramerateList'] : null;
        $this->container['audioBitrateList'] = isset($data['audioBitrateList']) ? $data['audioBitrateList'] : null;
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
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
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
    * Gets startTime
    *  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets videoFramerateList
    *  视频帧率信息列表，单位为fps。
    *
    * @return int[]|null
    */
    public function getVideoFramerateList()
    {
        return $this->container['videoFramerateList'];
    }

    /**
    * Sets videoFramerateList
    *
    * @param int[]|null $videoFramerateList 视频帧率信息列表，单位为fps。
    *
    * @return $this
    */
    public function setVideoFramerateList($videoFramerateList)
    {
        $this->container['videoFramerateList'] = $videoFramerateList;
        return $this;
    }

    /**
    * Gets videoBitrateList
    *  视频码率信息列表，单位为kbps。
    *
    * @return int[]|null
    */
    public function getVideoBitrateList()
    {
        return $this->container['videoBitrateList'];
    }

    /**
    * Sets videoBitrateList
    *
    * @param int[]|null $videoBitrateList 视频码率信息列表，单位为kbps。
    *
    * @return $this
    */
    public function setVideoBitrateList($videoBitrateList)
    {
        $this->container['videoBitrateList'] = $videoBitrateList;
        return $this;
    }

    /**
    * Gets audioFramerateList
    *  音频帧率信息列表，单位为fps。
    *
    * @return int[]|null
    */
    public function getAudioFramerateList()
    {
        return $this->container['audioFramerateList'];
    }

    /**
    * Sets audioFramerateList
    *
    * @param int[]|null $audioFramerateList 音频帧率信息列表，单位为fps。
    *
    * @return $this
    */
    public function setAudioFramerateList($audioFramerateList)
    {
        $this->container['audioFramerateList'] = $audioFramerateList;
        return $this;
    }

    /**
    * Gets audioBitrateList
    *  音频码率信息列表，单位为kbps。
    *
    * @return int[]|null
    */
    public function getAudioBitrateList()
    {
        return $this->container['audioBitrateList'];
    }

    /**
    * Sets audioBitrateList
    *
    * @param int[]|null $audioBitrateList 音频码率信息列表，单位为kbps。
    *
    * @return $this
    */
    public function setAudioBitrateList($audioBitrateList)
    {
        $this->container['audioBitrateList'] = $audioBitrateList;
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

