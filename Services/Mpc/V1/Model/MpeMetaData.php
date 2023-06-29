<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MpeMetaData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MpeMetaData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packType  封装类型。
    * duration  视频时长。
    * videoSize  视频大小。
    * width  视频宽度。
    * height  视频高度。
    * bitRate  码率。
    * audioBitRate  音频码率。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codecName  编码类型名称。
    * audioCodecName  音频编码类型。
    * channels  声道数。
    * sample  采样率。
    * isAudio  是否音频。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packType' => 'string',
            'duration' => 'double',
            'videoSize' => 'int',
            'width' => 'int',
            'height' => 'int',
            'bitRate' => 'int',
            'audioBitRate' => 'int',
            'frameRate' => 'int',
            'codecName' => 'string',
            'audioCodecName' => 'string',
            'channels' => 'int',
            'sample' => 'int',
            'isAudio' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packType  封装类型。
    * duration  视频时长。
    * videoSize  视频大小。
    * width  视频宽度。
    * height  视频高度。
    * bitRate  码率。
    * audioBitRate  音频码率。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codecName  编码类型名称。
    * audioCodecName  音频编码类型。
    * channels  声道数。
    * sample  采样率。
    * isAudio  是否音频。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packType' => null,
        'duration' => 'double',
        'videoSize' => 'int64',
        'width' => 'int32',
        'height' => 'int32',
        'bitRate' => 'int32',
        'audioBitRate' => 'int32',
        'frameRate' => 'int32',
        'codecName' => null,
        'audioCodecName' => null,
        'channels' => 'int32',
        'sample' => 'int32',
        'isAudio' => null
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
    * packType  封装类型。
    * duration  视频时长。
    * videoSize  视频大小。
    * width  视频宽度。
    * height  视频高度。
    * bitRate  码率。
    * audioBitRate  音频码率。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codecName  编码类型名称。
    * audioCodecName  音频编码类型。
    * channels  声道数。
    * sample  采样率。
    * isAudio  是否音频。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packType' => 'pack_type',
            'duration' => 'duration',
            'videoSize' => 'video_size',
            'width' => 'width',
            'height' => 'height',
            'bitRate' => 'bit_rate',
            'audioBitRate' => 'audio_bit_rate',
            'frameRate' => 'frame_rate',
            'codecName' => 'codec_name',
            'audioCodecName' => 'audio_codec_name',
            'channels' => 'channels',
            'sample' => 'sample',
            'isAudio' => 'is_audio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packType  封装类型。
    * duration  视频时长。
    * videoSize  视频大小。
    * width  视频宽度。
    * height  视频高度。
    * bitRate  码率。
    * audioBitRate  音频码率。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codecName  编码类型名称。
    * audioCodecName  音频编码类型。
    * channels  声道数。
    * sample  采样率。
    * isAudio  是否音频。
    *
    * @var string[]
    */
    protected static $setters = [
            'packType' => 'setPackType',
            'duration' => 'setDuration',
            'videoSize' => 'setVideoSize',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'bitRate' => 'setBitRate',
            'audioBitRate' => 'setAudioBitRate',
            'frameRate' => 'setFrameRate',
            'codecName' => 'setCodecName',
            'audioCodecName' => 'setAudioCodecName',
            'channels' => 'setChannels',
            'sample' => 'setSample',
            'isAudio' => 'setIsAudio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packType  封装类型。
    * duration  视频时长。
    * videoSize  视频大小。
    * width  视频宽度。
    * height  视频高度。
    * bitRate  码率。
    * audioBitRate  音频码率。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codecName  编码类型名称。
    * audioCodecName  音频编码类型。
    * channels  声道数。
    * sample  采样率。
    * isAudio  是否音频。
    *
    * @var string[]
    */
    protected static $getters = [
            'packType' => 'getPackType',
            'duration' => 'getDuration',
            'videoSize' => 'getVideoSize',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'bitRate' => 'getBitRate',
            'audioBitRate' => 'getAudioBitRate',
            'frameRate' => 'getFrameRate',
            'codecName' => 'getCodecName',
            'audioCodecName' => 'getAudioCodecName',
            'channels' => 'getChannels',
            'sample' => 'getSample',
            'isAudio' => 'getIsAudio'
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
        $this->container['packType'] = isset($data['packType']) ? $data['packType'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['videoSize'] = isset($data['videoSize']) ? $data['videoSize'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['bitRate'] = isset($data['bitRate']) ? $data['bitRate'] : null;
        $this->container['audioBitRate'] = isset($data['audioBitRate']) ? $data['audioBitRate'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['codecName'] = isset($data['codecName']) ? $data['codecName'] : null;
        $this->container['audioCodecName'] = isset($data['audioCodecName']) ? $data['audioCodecName'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : null;
        $this->container['isAudio'] = isset($data['isAudio']) ? $data['isAudio'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['packType']) && (mb_strlen($this->container['packType']) > 16)) {
                $invalidProperties[] = "invalid value for 'packType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['packType']) && (mb_strlen($this->container['packType']) < 0)) {
                $invalidProperties[] = "invalid value for 'packType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoSize']) && ($this->container['videoSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'videoSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['videoSize']) && ($this->container['videoSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bitRate']) && ($this->container['bitRate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'bitRate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['bitRate']) && ($this->container['bitRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioBitRate']) && ($this->container['audioBitRate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'audioBitRate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['audioBitRate']) && ($this->container['audioBitRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioBitRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['codecName']) && (mb_strlen($this->container['codecName']) > 128)) {
                $invalidProperties[] = "invalid value for 'codecName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['codecName']) && (mb_strlen($this->container['codecName']) < 0)) {
                $invalidProperties[] = "invalid value for 'codecName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioCodecName']) && (mb_strlen($this->container['audioCodecName']) > 16)) {
                $invalidProperties[] = "invalid value for 'audioCodecName', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['audioCodecName']) && (mb_strlen($this->container['audioCodecName']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioCodecName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['channels']) && ($this->container['channels'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'channels', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['channels']) && ($this->container['channels'] < 0)) {
                $invalidProperties[] = "invalid value for 'channels', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sample', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] < 0)) {
                $invalidProperties[] = "invalid value for 'sample', must be bigger than or equal to 0.";
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
    * Gets packType
    *  封装类型。
    *
    * @return string|null
    */
    public function getPackType()
    {
        return $this->container['packType'];
    }

    /**
    * Sets packType
    *
    * @param string|null $packType 封装类型。
    *
    * @return $this
    */
    public function setPackType($packType)
    {
        $this->container['packType'] = $packType;
        return $this;
    }

    /**
    * Gets duration
    *  视频时长。
    *
    * @return double|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param double|null $duration 视频时长。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets videoSize
    *  视频大小。
    *
    * @return int|null
    */
    public function getVideoSize()
    {
        return $this->container['videoSize'];
    }

    /**
    * Sets videoSize
    *
    * @param int|null $videoSize 视频大小。
    *
    * @return $this
    */
    public function setVideoSize($videoSize)
    {
        $this->container['videoSize'] = $videoSize;
        return $this;
    }

    /**
    * Gets width
    *  视频宽度。
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
    * @param int|null $width 视频宽度。
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets height
    *  视频高度。
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
    * @param int|null $height 视频高度。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets bitRate
    *  码率。
    *
    * @return int|null
    */
    public function getBitRate()
    {
        return $this->container['bitRate'];
    }

    /**
    * Sets bitRate
    *
    * @param int|null $bitRate 码率。
    *
    * @return $this
    */
    public function setBitRate($bitRate)
    {
        $this->container['bitRate'] = $bitRate;
        return $this;
    }

    /**
    * Gets audioBitRate
    *  音频码率。
    *
    * @return int|null
    */
    public function getAudioBitRate()
    {
        return $this->container['audioBitRate'];
    }

    /**
    * Sets audioBitRate
    *
    * @param int|null $audioBitRate 音频码率。
    *
    * @return $this
    */
    public function setAudioBitRate($audioBitRate)
    {
        $this->container['audioBitRate'] = $audioBitRate;
        return $this;
    }

    /**
    * Gets frameRate
    *  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    *
    * @return int|null
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param int|null $frameRate 帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
        return $this;
    }

    /**
    * Gets codecName
    *  编码类型名称。
    *
    * @return string|null
    */
    public function getCodecName()
    {
        return $this->container['codecName'];
    }

    /**
    * Sets codecName
    *
    * @param string|null $codecName 编码类型名称。
    *
    * @return $this
    */
    public function setCodecName($codecName)
    {
        $this->container['codecName'] = $codecName;
        return $this;
    }

    /**
    * Gets audioCodecName
    *  音频编码类型。
    *
    * @return string|null
    */
    public function getAudioCodecName()
    {
        return $this->container['audioCodecName'];
    }

    /**
    * Sets audioCodecName
    *
    * @param string|null $audioCodecName 音频编码类型。
    *
    * @return $this
    */
    public function setAudioCodecName($audioCodecName)
    {
        $this->container['audioCodecName'] = $audioCodecName;
        return $this;
    }

    /**
    * Gets channels
    *  声道数。
    *
    * @return int|null
    */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
    * Sets channels
    *
    * @param int|null $channels 声道数。
    *
    * @return $this
    */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;
        return $this;
    }

    /**
    * Gets sample
    *  采样率。
    *
    * @return int|null
    */
    public function getSample()
    {
        return $this->container['sample'];
    }

    /**
    * Sets sample
    *
    * @param int|null $sample 采样率。
    *
    * @return $this
    */
    public function setSample($sample)
    {
        $this->container['sample'] = $sample;
        return $this;
    }

    /**
    * Gets isAudio
    *  是否音频。
    *
    * @return bool|null
    */
    public function getIsAudio()
    {
        return $this->container['isAudio'];
    }

    /**
    * Sets isAudio
    *
    * @param bool|null $isAudio 是否音频。
    *
    * @return $this
    */
    public function setIsAudio($isAudio)
    {
        $this->container['isAudio'] = $isAudio;
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

