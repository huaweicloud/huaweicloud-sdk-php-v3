<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sampleRate  音频采样率(有效值范围)<br/> AUDIO_SAMPLE_AUTO (default), AUDIO_SAMPLE_22050：22050Hz<br/> AUDIO_SAMPLE_32000：32000Hz<br/> AUDIO_SAMPLE_44100：44100Hz<br/> AUDIO_SAMPLE_48000：48000Hz<br/> AUDIO_SAMPLE_96000：96000Hz<br/>
    * bitrate  音频码率（单位：Kbps）<br/>
    * channels  声道数(有效值范围)<br/> AUDIO_CHANNELS_1:单声道<br/> AUDIO_CHANNELS_2：双声道<br/> AUDIO_CHANNELS_5_1：5.1声道<br/>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sampleRate' => 'string',
            'bitrate' => 'int',
            'channels' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sampleRate  音频采样率(有效值范围)<br/> AUDIO_SAMPLE_AUTO (default), AUDIO_SAMPLE_22050：22050Hz<br/> AUDIO_SAMPLE_32000：32000Hz<br/> AUDIO_SAMPLE_44100：44100Hz<br/> AUDIO_SAMPLE_48000：48000Hz<br/> AUDIO_SAMPLE_96000：96000Hz<br/>
    * bitrate  音频码率（单位：Kbps）<br/>
    * channels  声道数(有效值范围)<br/> AUDIO_CHANNELS_1:单声道<br/> AUDIO_CHANNELS_2：双声道<br/> AUDIO_CHANNELS_5_1：5.1声道<br/>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sampleRate' => null,
        'bitrate' => 'int32',
        'channels' => null
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
    * sampleRate  音频采样率(有效值范围)<br/> AUDIO_SAMPLE_AUTO (default), AUDIO_SAMPLE_22050：22050Hz<br/> AUDIO_SAMPLE_32000：32000Hz<br/> AUDIO_SAMPLE_44100：44100Hz<br/> AUDIO_SAMPLE_48000：48000Hz<br/> AUDIO_SAMPLE_96000：96000Hz<br/>
    * bitrate  音频码率（单位：Kbps）<br/>
    * channels  声道数(有效值范围)<br/> AUDIO_CHANNELS_1:单声道<br/> AUDIO_CHANNELS_2：双声道<br/> AUDIO_CHANNELS_5_1：5.1声道<br/>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sampleRate' => 'sample_rate',
            'bitrate' => 'bitrate',
            'channels' => 'channels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sampleRate  音频采样率(有效值范围)<br/> AUDIO_SAMPLE_AUTO (default), AUDIO_SAMPLE_22050：22050Hz<br/> AUDIO_SAMPLE_32000：32000Hz<br/> AUDIO_SAMPLE_44100：44100Hz<br/> AUDIO_SAMPLE_48000：48000Hz<br/> AUDIO_SAMPLE_96000：96000Hz<br/>
    * bitrate  音频码率（单位：Kbps）<br/>
    * channels  声道数(有效值范围)<br/> AUDIO_CHANNELS_1:单声道<br/> AUDIO_CHANNELS_2：双声道<br/> AUDIO_CHANNELS_5_1：5.1声道<br/>
    *
    * @var string[]
    */
    protected static $setters = [
            'sampleRate' => 'setSampleRate',
            'bitrate' => 'setBitrate',
            'channels' => 'setChannels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sampleRate  音频采样率(有效值范围)<br/> AUDIO_SAMPLE_AUTO (default), AUDIO_SAMPLE_22050：22050Hz<br/> AUDIO_SAMPLE_32000：32000Hz<br/> AUDIO_SAMPLE_44100：44100Hz<br/> AUDIO_SAMPLE_48000：48000Hz<br/> AUDIO_SAMPLE_96000：96000Hz<br/>
    * bitrate  音频码率（单位：Kbps）<br/>
    * channels  声道数(有效值范围)<br/> AUDIO_CHANNELS_1:单声道<br/> AUDIO_CHANNELS_2：双声道<br/> AUDIO_CHANNELS_5_1：5.1声道<br/>
    *
    * @var string[]
    */
    protected static $getters = [
            'sampleRate' => 'getSampleRate',
            'bitrate' => 'getBitrate',
            'channels' => 'getChannels'
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
    const SAMPLE_RATE_AUDIO_SAMPLE_AUTO = 'AUDIO_SAMPLE_AUTO';
    const SAMPLE_RATE_AUDIO_SAMPLE_22050 = 'AUDIO_SAMPLE_22050';
    const SAMPLE_RATE_AUDIO_SAMPLE_32000 = 'AUDIO_SAMPLE_32000';
    const SAMPLE_RATE_AUDIO_SAMPLE_44100 = 'AUDIO_SAMPLE_44100';
    const SAMPLE_RATE_AUDIO_SAMPLE_48000 = 'AUDIO_SAMPLE_48000';
    const SAMPLE_RATE_AUDIO_SAMPLE_96000 = 'AUDIO_SAMPLE_96000';
    const CHANNELS_AUDIO_CHANNELS_1 = 'AUDIO_CHANNELS_1';
    const CHANNELS_AUDIO_CHANNELS_2 = 'AUDIO_CHANNELS_2';
    const CHANNELS_AUDIO_CHANNELS_5_1 = 'AUDIO_CHANNELS_5_1';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSampleRateAllowableValues()
    {
        return [
            self::SAMPLE_RATE_AUDIO_SAMPLE_AUTO,
            self::SAMPLE_RATE_AUDIO_SAMPLE_22050,
            self::SAMPLE_RATE_AUDIO_SAMPLE_32000,
            self::SAMPLE_RATE_AUDIO_SAMPLE_44100,
            self::SAMPLE_RATE_AUDIO_SAMPLE_48000,
            self::SAMPLE_RATE_AUDIO_SAMPLE_96000,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChannelsAllowableValues()
    {
        return [
            self::CHANNELS_AUDIO_CHANNELS_1,
            self::CHANNELS_AUDIO_CHANNELS_2,
            self::CHANNELS_AUDIO_CHANNELS_5_1,
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
        $this->container['sampleRate'] = isset($data['sampleRate']) ? $data['sampleRate'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sampleRate'] === null) {
            $invalidProperties[] = "'sampleRate' can't be null";
        }
            $allowedValues = $this->getSampleRateAllowableValues();
                if (!is_null($this->container['sampleRate']) && !in_array($this->container['sampleRate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sampleRate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['channels'] === null) {
            $invalidProperties[] = "'channels' can't be null";
        }
            $allowedValues = $this->getChannelsAllowableValues();
                if (!is_null($this->container['channels']) && !in_array($this->container['channels'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'channels', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets sampleRate
    *  音频采样率(有效值范围)<br/> AUDIO_SAMPLE_AUTO (default), AUDIO_SAMPLE_22050：22050Hz<br/> AUDIO_SAMPLE_32000：32000Hz<br/> AUDIO_SAMPLE_44100：44100Hz<br/> AUDIO_SAMPLE_48000：48000Hz<br/> AUDIO_SAMPLE_96000：96000Hz<br/>
    *
    * @return string
    */
    public function getSampleRate()
    {
        return $this->container['sampleRate'];
    }

    /**
    * Sets sampleRate
    *
    * @param string $sampleRate 音频采样率(有效值范围)<br/> AUDIO_SAMPLE_AUTO (default), AUDIO_SAMPLE_22050：22050Hz<br/> AUDIO_SAMPLE_32000：32000Hz<br/> AUDIO_SAMPLE_44100：44100Hz<br/> AUDIO_SAMPLE_48000：48000Hz<br/> AUDIO_SAMPLE_96000：96000Hz<br/>
    *
    * @return $this
    */
    public function setSampleRate($sampleRate)
    {
        $this->container['sampleRate'] = $sampleRate;
        return $this;
    }

    /**
    * Gets bitrate
    *  音频码率（单位：Kbps）<br/>
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
    * @param int|null $bitrate 音频码率（单位：Kbps）<br/>
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets channels
    *  声道数(有效值范围)<br/> AUDIO_CHANNELS_1:单声道<br/> AUDIO_CHANNELS_2：双声道<br/> AUDIO_CHANNELS_5_1：5.1声道<br/>
    *
    * @return string
    */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
    * Sets channels
    *
    * @param string $channels 声道数(有效值范围)<br/> AUDIO_CHANNELS_1:单声道<br/> AUDIO_CHANNELS_2：双声道<br/> AUDIO_CHANNELS_5_1：5.1声道<br/>
    *
    * @return $this
    */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;
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

