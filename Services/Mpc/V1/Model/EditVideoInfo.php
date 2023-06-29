<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EditVideoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EditVideoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reference  剪辑输出视频参数的参照物。取值如下： - MAX，以输入片源中最大分辨率的视频参数作为输出参照。 - MIN，以输入片源中最小分辨率的视频参数作为输出参照。 - CUSTOM，自定义视频输出参数，使用该参数时，所有视频参数必填。- SHORT_HEIGHT_SHORT_WIDTH，当edit_type为MIX时，只能使用该值。
    * width  视频宽度。
    * height  视频高度。
    * codec  视频频编码格式。
    * bitrate  视频码率，单位: bit/s
    * frameRate  帧率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reference' => 'string',
            'width' => 'int',
            'height' => 'int',
            'codec' => 'string',
            'bitrate' => 'int',
            'frameRate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reference  剪辑输出视频参数的参照物。取值如下： - MAX，以输入片源中最大分辨率的视频参数作为输出参照。 - MIN，以输入片源中最小分辨率的视频参数作为输出参照。 - CUSTOM，自定义视频输出参数，使用该参数时，所有视频参数必填。- SHORT_HEIGHT_SHORT_WIDTH，当edit_type为MIX时，只能使用该值。
    * width  视频宽度。
    * height  视频高度。
    * codec  视频频编码格式。
    * bitrate  视频码率，单位: bit/s
    * frameRate  帧率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reference' => null,
        'width' => null,
        'height' => null,
        'codec' => null,
        'bitrate' => null,
        'frameRate' => null
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
    * reference  剪辑输出视频参数的参照物。取值如下： - MAX，以输入片源中最大分辨率的视频参数作为输出参照。 - MIN，以输入片源中最小分辨率的视频参数作为输出参照。 - CUSTOM，自定义视频输出参数，使用该参数时，所有视频参数必填。- SHORT_HEIGHT_SHORT_WIDTH，当edit_type为MIX时，只能使用该值。
    * width  视频宽度。
    * height  视频高度。
    * codec  视频频编码格式。
    * bitrate  视频码率，单位: bit/s
    * frameRate  帧率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reference' => 'reference',
            'width' => 'width',
            'height' => 'height',
            'codec' => 'codec',
            'bitrate' => 'bitrate',
            'frameRate' => 'frame_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reference  剪辑输出视频参数的参照物。取值如下： - MAX，以输入片源中最大分辨率的视频参数作为输出参照。 - MIN，以输入片源中最小分辨率的视频参数作为输出参照。 - CUSTOM，自定义视频输出参数，使用该参数时，所有视频参数必填。- SHORT_HEIGHT_SHORT_WIDTH，当edit_type为MIX时，只能使用该值。
    * width  视频宽度。
    * height  视频高度。
    * codec  视频频编码格式。
    * bitrate  视频码率，单位: bit/s
    * frameRate  帧率。
    *
    * @var string[]
    */
    protected static $setters = [
            'reference' => 'setReference',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'codec' => 'setCodec',
            'bitrate' => 'setBitrate',
            'frameRate' => 'setFrameRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reference  剪辑输出视频参数的参照物。取值如下： - MAX，以输入片源中最大分辨率的视频参数作为输出参照。 - MIN，以输入片源中最小分辨率的视频参数作为输出参照。 - CUSTOM，自定义视频输出参数，使用该参数时，所有视频参数必填。- SHORT_HEIGHT_SHORT_WIDTH，当edit_type为MIX时，只能使用该值。
    * width  视频宽度。
    * height  视频高度。
    * codec  视频频编码格式。
    * bitrate  视频码率，单位: bit/s
    * frameRate  帧率。
    *
    * @var string[]
    */
    protected static $getters = [
            'reference' => 'getReference',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'codec' => 'getCodec',
            'bitrate' => 'getBitrate',
            'frameRate' => 'getFrameRate'
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
    const REFERENCE_MAX = 'MAX';
    const REFERENCE_MIN = 'MIN';
    const REFERENCE_CUSTOM = 'CUSTOM';
    const REFERENCE_SHORT_HEIGHT_SHORT_WIDTH = 'SHORT_HEIGHT_SHORT_WIDTH';
    const CODEC_H264 = 'H264';
    const CODEC_H265 = 'H265';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReferenceAllowableValues()
    {
        return [
            self::REFERENCE_MAX,
            self::REFERENCE_MIN,
            self::REFERENCE_CUSTOM,
            self::REFERENCE_SHORT_HEIGHT_SHORT_WIDTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodecAllowableValues()
    {
        return [
            self::CODEC_H264,
            self::CODEC_H265,
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : 'MAX';
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : 'H264';
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getReferenceAllowableValues();
                if (!is_null($this->container['reference']) && !in_array($this->container['reference'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reference', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 32)) {
                $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 0)) {
                $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 3840)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2160)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2160.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getCodecAllowableValues();
                if (!is_null($this->container['codec']) && !in_array($this->container['codec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'codec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 20000000)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 20000000.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] > 60)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be bigger than or equal to 0.";
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
    * Gets reference
    *  剪辑输出视频参数的参照物。取值如下： - MAX，以输入片源中最大分辨率的视频参数作为输出参照。 - MIN，以输入片源中最小分辨率的视频参数作为输出参照。 - CUSTOM，自定义视频输出参数，使用该参数时，所有视频参数必填。- SHORT_HEIGHT_SHORT_WIDTH，当edit_type为MIX时，只能使用该值。
    *
    * @return string|null
    */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
    * Sets reference
    *
    * @param string|null $reference 剪辑输出视频参数的参照物。取值如下： - MAX，以输入片源中最大分辨率的视频参数作为输出参照。 - MIN，以输入片源中最小分辨率的视频参数作为输出参照。 - CUSTOM，自定义视频输出参数，使用该参数时，所有视频参数必填。- SHORT_HEIGHT_SHORT_WIDTH，当edit_type为MIX时，只能使用该值。
    *
    * @return $this
    */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;
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
    * Gets codec
    *  视频频编码格式。
    *
    * @return string|null
    */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
    * Sets codec
    *
    * @param string|null $codec 视频频编码格式。
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
    *  视频码率，单位: bit/s
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
    * @param int|null $bitrate 视频码率，单位: bit/s
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
    *  帧率。
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
    * @param int|null $frameRate 帧率。
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
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

