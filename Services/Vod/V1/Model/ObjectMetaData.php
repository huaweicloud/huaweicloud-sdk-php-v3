<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectMetaData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectMetaData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bitrate  总码率，单位：bit/秒
    * container  封装格式
    * duration  时长，单位：秒
    * videoDuration  时长，单位：秒
    * audioDuration  时长，单位：秒
    * floatDuration  时长，单位：秒
    * height  视频高度
    * width  视频宽度
    * md5  视频md5
    * rotate  视频拍摄角度
    * size  文件大小，单位：byte
    * videoStreamList  视频流元数据
    * audioStreamList  音频流元数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bitrate' => 'int',
            'container' => 'string',
            'duration' => 'int',
            'videoDuration' => 'float',
            'audioDuration' => 'float',
            'floatDuration' => 'float',
            'height' => 'int',
            'width' => 'int',
            'md5' => 'string',
            'rotate' => 'float',
            'size' => 'int',
            'videoStreamList' => '\HuaweiCloud\SDK\Vod\V1\Model\MetaVideoInfo[]',
            'audioStreamList' => '\HuaweiCloud\SDK\Vod\V1\Model\MetaAudioInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bitrate  总码率，单位：bit/秒
    * container  封装格式
    * duration  时长，单位：秒
    * videoDuration  时长，单位：秒
    * audioDuration  时长，单位：秒
    * floatDuration  时长，单位：秒
    * height  视频高度
    * width  视频宽度
    * md5  视频md5
    * rotate  视频拍摄角度
    * size  文件大小，单位：byte
    * videoStreamList  视频流元数据
    * audioStreamList  音频流元数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bitrate' => 'int64',
        'container' => null,
        'duration' => null,
        'videoDuration' => 'float',
        'audioDuration' => 'float',
        'floatDuration' => 'float',
        'height' => null,
        'width' => null,
        'md5' => null,
        'rotate' => 'float',
        'size' => 'int64',
        'videoStreamList' => null,
        'audioStreamList' => null
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
    * bitrate  总码率，单位：bit/秒
    * container  封装格式
    * duration  时长，单位：秒
    * videoDuration  时长，单位：秒
    * audioDuration  时长，单位：秒
    * floatDuration  时长，单位：秒
    * height  视频高度
    * width  视频宽度
    * md5  视频md5
    * rotate  视频拍摄角度
    * size  文件大小，单位：byte
    * videoStreamList  视频流元数据
    * audioStreamList  音频流元数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bitrate' => 'bitrate',
            'container' => 'container',
            'duration' => 'duration',
            'videoDuration' => 'video_duration',
            'audioDuration' => 'audio_duration',
            'floatDuration' => 'float_duration',
            'height' => 'height',
            'width' => 'width',
            'md5' => 'md5',
            'rotate' => 'rotate',
            'size' => 'size',
            'videoStreamList' => 'video_stream_list',
            'audioStreamList' => 'audio_stream_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bitrate  总码率，单位：bit/秒
    * container  封装格式
    * duration  时长，单位：秒
    * videoDuration  时长，单位：秒
    * audioDuration  时长，单位：秒
    * floatDuration  时长，单位：秒
    * height  视频高度
    * width  视频宽度
    * md5  视频md5
    * rotate  视频拍摄角度
    * size  文件大小，单位：byte
    * videoStreamList  视频流元数据
    * audioStreamList  音频流元数据
    *
    * @var string[]
    */
    protected static $setters = [
            'bitrate' => 'setBitrate',
            'container' => 'setContainer',
            'duration' => 'setDuration',
            'videoDuration' => 'setVideoDuration',
            'audioDuration' => 'setAudioDuration',
            'floatDuration' => 'setFloatDuration',
            'height' => 'setHeight',
            'width' => 'setWidth',
            'md5' => 'setMd5',
            'rotate' => 'setRotate',
            'size' => 'setSize',
            'videoStreamList' => 'setVideoStreamList',
            'audioStreamList' => 'setAudioStreamList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bitrate  总码率，单位：bit/秒
    * container  封装格式
    * duration  时长，单位：秒
    * videoDuration  时长，单位：秒
    * audioDuration  时长，单位：秒
    * floatDuration  时长，单位：秒
    * height  视频高度
    * width  视频宽度
    * md5  视频md5
    * rotate  视频拍摄角度
    * size  文件大小，单位：byte
    * videoStreamList  视频流元数据
    * audioStreamList  音频流元数据
    *
    * @var string[]
    */
    protected static $getters = [
            'bitrate' => 'getBitrate',
            'container' => 'getContainer',
            'duration' => 'getDuration',
            'videoDuration' => 'getVideoDuration',
            'audioDuration' => 'getAudioDuration',
            'floatDuration' => 'getFloatDuration',
            'height' => 'getHeight',
            'width' => 'getWidth',
            'md5' => 'getMd5',
            'rotate' => 'getRotate',
            'size' => 'getSize',
            'videoStreamList' => 'getVideoStreamList',
            'audioStreamList' => 'getAudioStreamList'
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
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['container'] = isset($data['container']) ? $data['container'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['videoDuration'] = isset($data['videoDuration']) ? $data['videoDuration'] : null;
        $this->container['audioDuration'] = isset($data['audioDuration']) ? $data['audioDuration'] : null;
        $this->container['floatDuration'] = isset($data['floatDuration']) ? $data['floatDuration'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['videoStreamList'] = isset($data['videoStreamList']) ? $data['videoStreamList'] : null;
        $this->container['audioStreamList'] = isset($data['audioStreamList']) ? $data['audioStreamList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets bitrate
    *  总码率，单位：bit/秒
    *
    * @return int|null
    */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
    * Sets bitrate
    *
    * @param int|null $bitrate 总码率，单位：bit/秒
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets container
    *  封装格式
    *
    * @return string|null
    */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
    * Sets container
    *
    * @param string|null $container 封装格式
    *
    * @return $this
    */
    public function setContainer($container)
    {
        $this->container['container'] = $container;
        return $this;
    }

    /**
    * Gets duration
    *  时长，单位：秒
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
    * @param int|null $duration 时长，单位：秒
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets videoDuration
    *  时长，单位：秒
    *
    * @return float|null
    */
    public function getVideoDuration()
    {
        return $this->container['videoDuration'];
    }

    /**
    * Sets videoDuration
    *
    * @param float|null $videoDuration 时长，单位：秒
    *
    * @return $this
    */
    public function setVideoDuration($videoDuration)
    {
        $this->container['videoDuration'] = $videoDuration;
        return $this;
    }

    /**
    * Gets audioDuration
    *  时长，单位：秒
    *
    * @return float|null
    */
    public function getAudioDuration()
    {
        return $this->container['audioDuration'];
    }

    /**
    * Sets audioDuration
    *
    * @param float|null $audioDuration 时长，单位：秒
    *
    * @return $this
    */
    public function setAudioDuration($audioDuration)
    {
        $this->container['audioDuration'] = $audioDuration;
        return $this;
    }

    /**
    * Gets floatDuration
    *  时长，单位：秒
    *
    * @return float|null
    */
    public function getFloatDuration()
    {
        return $this->container['floatDuration'];
    }

    /**
    * Sets floatDuration
    *
    * @param float|null $floatDuration 时长，单位：秒
    *
    * @return $this
    */
    public function setFloatDuration($floatDuration)
    {
        $this->container['floatDuration'] = $floatDuration;
        return $this;
    }

    /**
    * Gets height
    *  视频高度
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
    * @param int|null $height 视频高度
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets width
    *  视频宽度
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
    * @param int|null $width 视频宽度
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets md5
    *  视频md5
    *
    * @return string|null
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string|null $md5 视频md5
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
        return $this;
    }

    /**
    * Gets rotate
    *  视频拍摄角度
    *
    * @return float|null
    */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /**
    * Sets rotate
    *
    * @param float|null $rotate 视频拍摄角度
    *
    * @return $this
    */
    public function setRotate($rotate)
    {
        $this->container['rotate'] = $rotate;
        return $this;
    }

    /**
    * Gets size
    *  文件大小，单位：byte
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 文件大小，单位：byte
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets videoStreamList
    *  视频流元数据
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\MetaVideoInfo[]|null
    */
    public function getVideoStreamList()
    {
        return $this->container['videoStreamList'];
    }

    /**
    * Sets videoStreamList
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\MetaVideoInfo[]|null $videoStreamList 视频流元数据
    *
    * @return $this
    */
    public function setVideoStreamList($videoStreamList)
    {
        $this->container['videoStreamList'] = $videoStreamList;
        return $this;
    }

    /**
    * Gets audioStreamList
    *  音频流元数据
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\MetaAudioInfo[]|null
    */
    public function getAudioStreamList()
    {
        return $this->container['audioStreamList'];
    }

    /**
    * Sets audioStreamList
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\MetaAudioInfo[]|null $audioStreamList 音频流元数据
    *
    * @return $this
    */
    public function setAudioStreamList($audioStreamList)
    {
        $this->container['audioStreamList'] = $audioStreamList;
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

