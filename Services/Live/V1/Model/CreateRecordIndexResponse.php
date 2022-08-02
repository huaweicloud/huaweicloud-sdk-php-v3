<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRecordIndexResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRecordIndexResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indexUrl  索引文件地址
    * publishDomain  直播推流域名
    * app  应用名，如果任意应用填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如果任意流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * startTime  开始时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的开始时间)
    * endTime  结束时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的结束时间)
    * duration  录制时长。单位：秒。
    * weight  视频宽。
    * height  视频高。
    * location  OBS Bucket所在RegionID
    * bucket  桶名称
    * object  m3u8文件路径。默认Index/{publish_domain}/{app}/{stream}-{start_time}-{end_time}
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indexUrl' => 'string',
            'publishDomain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'duration' => 'int',
            'weight' => 'int',
            'height' => 'int',
            'location' => 'string',
            'bucket' => 'string',
            'object' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indexUrl  索引文件地址
    * publishDomain  直播推流域名
    * app  应用名，如果任意应用填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如果任意流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * startTime  开始时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的开始时间)
    * endTime  结束时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的结束时间)
    * duration  录制时长。单位：秒。
    * weight  视频宽。
    * height  视频高。
    * location  OBS Bucket所在RegionID
    * bucket  桶名称
    * object  m3u8文件路径。默认Index/{publish_domain}/{app}/{stream}-{start_time}-{end_time}
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indexUrl' => 'url',
        'publishDomain' => 'url',
        'app' => null,
        'stream' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'duration' => 'int32',
        'weight' => 'int32',
        'height' => 'int32',
        'location' => null,
        'bucket' => null,
        'object' => 'uri',
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
    * indexUrl  索引文件地址
    * publishDomain  直播推流域名
    * app  应用名，如果任意应用填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如果任意流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * startTime  开始时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的开始时间)
    * endTime  结束时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的结束时间)
    * duration  录制时长。单位：秒。
    * weight  视频宽。
    * height  视频高。
    * location  OBS Bucket所在RegionID
    * bucket  桶名称
    * object  m3u8文件路径。默认Index/{publish_domain}/{app}/{stream}-{start_time}-{end_time}
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indexUrl' => 'index_url',
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'stream' => 'stream',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'duration' => 'duration',
            'weight' => 'weight',
            'height' => 'height',
            'location' => 'location',
            'bucket' => 'bucket',
            'object' => 'object',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indexUrl  索引文件地址
    * publishDomain  直播推流域名
    * app  应用名，如果任意应用填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如果任意流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * startTime  开始时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的开始时间)
    * endTime  结束时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的结束时间)
    * duration  录制时长。单位：秒。
    * weight  视频宽。
    * height  视频高。
    * location  OBS Bucket所在RegionID
    * bucket  桶名称
    * object  m3u8文件路径。默认Index/{publish_domain}/{app}/{stream}-{start_time}-{end_time}
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'indexUrl' => 'setIndexUrl',
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'duration' => 'setDuration',
            'weight' => 'setWeight',
            'height' => 'setHeight',
            'location' => 'setLocation',
            'bucket' => 'setBucket',
            'object' => 'setObject',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indexUrl  索引文件地址
    * publishDomain  直播推流域名
    * app  应用名，如果任意应用填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * stream  录制的流名，如果任意流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    * startTime  开始时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的开始时间)
    * endTime  结束时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的结束时间)
    * duration  录制时长。单位：秒。
    * weight  视频宽。
    * height  视频高。
    * location  OBS Bucket所在RegionID
    * bucket  桶名称
    * object  m3u8文件路径。默认Index/{publish_domain}/{app}/{stream}-{start_time}-{end_time}
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'indexUrl' => 'getIndexUrl',
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'duration' => 'getDuration',
            'weight' => 'getWeight',
            'height' => 'getHeight',
            'location' => 'getLocation',
            'bucket' => 'getBucket',
            'object' => 'getObject',
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
    const LOCATION_CN_NORTH_4 = 'cn-north-4';
    const LOCATION_CN_NORTH_5 = 'cn-north-5';
    const LOCATION_CN_NORTH_6 = 'cn-north-6';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocationAllowableValues()
    {
        return [
            self::LOCATION_CN_NORTH_4,
            self::LOCATION_CN_NORTH_5,
            self::LOCATION_CN_NORTH_6,
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
        $this->container['indexUrl'] = isset($data['indexUrl']) ? $data['indexUrl'] : null;
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
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
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) > 128)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 72000)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 72000.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] > 65535)) {
                $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['weight']) && ($this->container['weight'] < 0)) {
                $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 65535)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLocationAllowableValues();
                if (!is_null($this->container['location']) && !in_array($this->container['location'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'location', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) > 255)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
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
    * Gets indexUrl
    *  索引文件地址
    *
    * @return string|null
    */
    public function getIndexUrl()
    {
        return $this->container['indexUrl'];
    }

    /**
    * Sets indexUrl
    *
    * @param string|null $indexUrl 索引文件地址
    *
    * @return $this
    */
    public function setIndexUrl($indexUrl)
    {
        $this->container['indexUrl'] = $indexUrl;
        return $this;
    }

    /**
    * Gets publishDomain
    *  直播推流域名
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
    * @param string|null $publishDomain 直播推流域名
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
    *  应用名，如果任意应用填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
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
    * @param string|null $app 应用名，如果任意应用填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
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
    *  录制的流名，如果任意流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
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
    * @param string|null $stream 录制的流名，如果任意流名则填写*。录制规则匹配的时候，优先精确stream匹配，如果匹配不到，则匹配*
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的开始时间)
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 开始时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的开始时间)
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
    *  结束时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的结束时间)
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 结束时间。格式为：yyyy-MM-ddTHH:mm:ssZ（UTC时间）。(实际视频的结束时间)
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets duration
    *  录制时长。单位：秒。
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
    * @param int|null $duration 录制时长。单位：秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets weight
    *  视频宽。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 视频宽。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets height
    *  视频高。
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
    * @param int|null $height 视频高。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets location
    *  OBS Bucket所在RegionID
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location OBS Bucket所在RegionID
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets bucket
    *  桶名称
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 桶名称
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets object
    *  m3u8文件路径。默认Index/{publish_domain}/{app}/{stream}-{start_time}-{end_time}
    *
    * @return string|null
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string|null $object m3u8文件路径。默认Index/{publish_domain}/{app}/{stream}-{start_time}-{end_time}
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
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

