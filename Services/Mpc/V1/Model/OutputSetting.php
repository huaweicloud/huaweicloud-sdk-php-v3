<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutputSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutputSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * format  剪切或拼接的输出封装格式。
    * video  video
    * audio  audio
    * hls  hls
    * output  output
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'format' => 'string',
            'video' => '\HuaweiCloud\SDK\Mpc\V1\Model\EditVideoInfo',
            'audio' => '\HuaweiCloud\SDK\Mpc\V1\Model\EditAudioInfo',
            'hls' => '\HuaweiCloud\SDK\Mpc\V1\Model\EditHlsInfo',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * format  剪切或拼接的输出封装格式。
    * video  video
    * audio  audio
    * hls  hls
    * output  output
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'format' => null,
        'video' => null,
        'audio' => null,
        'hls' => null,
        'output' => null
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
    * format  剪切或拼接的输出封装格式。
    * video  video
    * audio  audio
    * hls  hls
    * output  output
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'format' => 'format',
            'video' => 'video',
            'audio' => 'audio',
            'hls' => 'hls',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * format  剪切或拼接的输出封装格式。
    * video  video
    * audio  audio
    * hls  hls
    * output  output
    *
    * @var string[]
    */
    protected static $setters = [
            'format' => 'setFormat',
            'video' => 'setVideo',
            'audio' => 'setAudio',
            'hls' => 'setHls',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * format  剪切或拼接的输出封装格式。
    * video  video
    * audio  audio
    * hls  hls
    * output  output
    *
    * @var string[]
    */
    protected static $getters = [
            'format' => 'getFormat',
            'video' => 'getVideo',
            'audio' => 'getAudio',
            'hls' => 'getHls',
            'output' => 'getOutput'
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
    const FORMAT_MP4 = 'MP4';
    const FORMAT_HLS = 'HLS';
    const FORMAT_TS = 'TS';
    const FORMAT_FLV = 'FLV';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_MP4,
            self::FORMAT_HLS,
            self::FORMAT_TS,
            self::FORMAT_FLV,
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
        $this->container['hls'] = isset($data['hls']) ? $data['hls'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) > 32)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) < 0)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 0.";
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
    * Gets format
    *  剪切或拼接的输出封装格式。
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 剪切或拼接的输出封装格式。
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets video
    *  video
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\EditVideoInfo|null
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\EditVideoInfo|null $video video
    *
    * @return $this
    */
    public function setVideo($video)
    {
        $this->container['video'] = $video;
        return $this;
    }

    /**
    * Gets audio
    *  audio
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\EditAudioInfo|null
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\EditAudioInfo|null $audio audio
    *
    * @return $this
    */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;
        return $this;
    }

    /**
    * Gets hls
    *  hls
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\EditHlsInfo|null
    */
    public function getHls()
    {
        return $this->container['hls'];
    }

    /**
    * Sets hls
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\EditHlsInfo|null $hls hls
    *
    * @return $this
    */
    public function setHls($hls)
    {
        $this->container['hls'] = $hls;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
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

