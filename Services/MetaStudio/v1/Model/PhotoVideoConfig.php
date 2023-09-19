<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PhotoVideoConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PhotoVideoConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。
    * frameRate  帧率。  单位：FPS。
    * disableSystemWatermark  输出的视频是否关闭系统水印。目前该参数需要白名单的租户才起作用。 > true: 关闭系统水印 > false: 不关闭系统水印
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codec' => 'string',
            'bitrate' => 'int',
            'frameRate' => 'string',
            'disableSystemWatermark' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。
    * frameRate  帧率。  单位：FPS。
    * disableSystemWatermark  输出的视频是否关闭系统水印。目前该参数需要白名单的租户才起作用。 > true: 关闭系统水印 > false: 不关闭系统水印
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codec' => null,
        'bitrate' => null,
        'frameRate' => 'string',
        'disableSystemWatermark' => null
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
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。
    * frameRate  帧率。  单位：FPS。
    * disableSystemWatermark  输出的视频是否关闭系统水印。目前该参数需要白名单的租户才起作用。 > true: 关闭系统水印 > false: 不关闭系统水印
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codec' => 'codec',
            'bitrate' => 'bitrate',
            'frameRate' => 'frame_rate',
            'disableSystemWatermark' => 'disable_system_watermark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。
    * frameRate  帧率。  单位：FPS。
    * disableSystemWatermark  输出的视频是否关闭系统水印。目前该参数需要白名单的租户才起作用。 > true: 关闭系统水印 > false: 不关闭系统水印
    *
    * @var string[]
    */
    protected static $setters = [
            'codec' => 'setCodec',
            'bitrate' => 'setBitrate',
            'frameRate' => 'setFrameRate',
            'disableSystemWatermark' => 'setDisableSystemWatermark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codec  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件
    * bitrate  输出平均码率。  单位：kbps。  最小值40，最大值30000。
    * frameRate  帧率。  单位：FPS。
    * disableSystemWatermark  输出的视频是否关闭系统水印。目前该参数需要白名单的租户才起作用。 > true: 关闭系统水印 > false: 不关闭系统水印
    *
    * @var string[]
    */
    protected static $getters = [
            'codec' => 'getCodec',
            'bitrate' => 'getBitrate',
            'frameRate' => 'getFrameRate',
            'disableSystemWatermark' => 'getDisableSystemWatermark'
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
    const CODEC_H264 = 'H264';
    const FRAME_RATE__24 = '24';
    const FRAME_RATE__25 = '25';
    const FRAME_RATE__30 = '30';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodecAllowableValues()
    {
        return [
            self::CODEC_H264,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFrameRateAllowableValues()
    {
        return [
            self::FRAME_RATE__24,
            self::FRAME_RATE__25,
            self::FRAME_RATE__30,
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
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['disableSystemWatermark'] = isset($data['disableSystemWatermark']) ? $data['disableSystemWatermark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['codec'] === null) {
            $invalidProperties[] = "'codec' can't be null";
        }
            $allowedValues = $this->getCodecAllowableValues();
                if (!is_null($this->container['codec']) && !in_array($this->container['codec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'codec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 30000)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 40)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 40.";
            }
            $allowedValues = $this->getFrameRateAllowableValues();
                if (!is_null($this->container['frameRate']) && !in_array($this->container['frameRate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'frameRate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['frameRate']) && (mb_strlen($this->container['frameRate']) > 10)) {
                $invalidProperties[] = "invalid value for 'frameRate', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['frameRate']) && (mb_strlen($this->container['frameRate']) < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', the character length must be bigger than or equal to 0.";
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
    * Gets codec
    *  视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件
    *
    * @return string
    */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
    * Sets codec
    *
    * @param string $codec 视频编码格式及视频文件格式。 * H264: h264编码，输出mp4文件
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets bitrate
    *  输出平均码率。  单位：kbps。  最小值40，最大值30000。
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
    * @param int|null $bitrate 输出平均码率。  单位：kbps。  最小值40，最大值30000。
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets frameRate
    *  帧率。  单位：FPS。
    *
    * @return string|null
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param string|null $frameRate 帧率。  单位：FPS。
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
        return $this;
    }

    /**
    * Gets disableSystemWatermark
    *  输出的视频是否关闭系统水印。目前该参数需要白名单的租户才起作用。 > true: 关闭系统水印 > false: 不关闭系统水印
    *
    * @return bool|null
    */
    public function getDisableSystemWatermark()
    {
        return $this->container['disableSystemWatermark'];
    }

    /**
    * Sets disableSystemWatermark
    *
    * @param bool|null $disableSystemWatermark 输出的视频是否关闭系统水印。目前该参数需要白名单的租户才起作用。 > true: 关闭系统水印 > false: 不关闭系统水印
    *
    * @return $this
    */
    public function setDisableSystemWatermark($disableSystemWatermark)
    {
        $this->container['disableSystemWatermark'] = $disableSystemWatermark;
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

