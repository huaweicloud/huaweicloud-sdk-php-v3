<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Audio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Audio';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  音频编码格式。  取值如下：  - 1：AAC格式。 - 2：HEAAC1格式 。 - 3：HEAAC2格式。 - 4：MP3格式 。
    * sampleRate  音频采样率。  取值如下：  - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050（22050Hz） - 3：AUDIO_SAMPLE_32000（32000Hz） - 4：AUDIO_SAMPLE_44100（44100Hz） - 5：AUDIO_SAMPLE_48000（48000Hz） - 6：AUDIO_SAMPLE_96000（96000Hz）
    * bitrate  音频码率。  取值范围：0或[8,1000]。  单位：kbit/s。
    * channels  声道数。  取值如下： - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2 - 6：AUDIO_CHANNELS_5_1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'outputPolicy' => 'string',
            'codec' => 'int',
            'sampleRate' => 'int',
            'bitrate' => 'int',
            'channels' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  音频编码格式。  取值如下：  - 1：AAC格式。 - 2：HEAAC1格式 。 - 3：HEAAC2格式。 - 4：MP3格式 。
    * sampleRate  音频采样率。  取值如下：  - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050（22050Hz） - 3：AUDIO_SAMPLE_32000（32000Hz） - 4：AUDIO_SAMPLE_44100（44100Hz） - 5：AUDIO_SAMPLE_48000（48000Hz） - 6：AUDIO_SAMPLE_96000（96000Hz）
    * bitrate  音频码率。  取值范围：0或[8,1000]。  单位：kbit/s。
    * channels  声道数。  取值如下： - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2 - 6：AUDIO_CHANNELS_5_1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'outputPolicy' => null,
        'codec' => 'int32',
        'sampleRate' => 'int32',
        'bitrate' => 'int32',
        'channels' => 'int32'
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
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  音频编码格式。  取值如下：  - 1：AAC格式。 - 2：HEAAC1格式 。 - 3：HEAAC2格式。 - 4：MP3格式 。
    * sampleRate  音频采样率。  取值如下：  - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050（22050Hz） - 3：AUDIO_SAMPLE_32000（32000Hz） - 4：AUDIO_SAMPLE_44100（44100Hz） - 5：AUDIO_SAMPLE_48000（48000Hz） - 6：AUDIO_SAMPLE_96000（96000Hz）
    * bitrate  音频码率。  取值范围：0或[8,1000]。  单位：kbit/s。
    * channels  声道数。  取值如下： - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2 - 6：AUDIO_CHANNELS_5_1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'outputPolicy' => 'output_policy',
            'codec' => 'codec',
            'sampleRate' => 'sample_rate',
            'bitrate' => 'bitrate',
            'channels' => 'channels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  音频编码格式。  取值如下：  - 1：AAC格式。 - 2：HEAAC1格式 。 - 3：HEAAC2格式。 - 4：MP3格式 。
    * sampleRate  音频采样率。  取值如下：  - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050（22050Hz） - 3：AUDIO_SAMPLE_32000（32000Hz） - 4：AUDIO_SAMPLE_44100（44100Hz） - 5：AUDIO_SAMPLE_48000（48000Hz） - 6：AUDIO_SAMPLE_96000（96000Hz）
    * bitrate  音频码率。  取值范围：0或[8,1000]。  单位：kbit/s。
    * channels  声道数。  取值如下： - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2 - 6：AUDIO_CHANNELS_5_1
    *
    * @var string[]
    */
    protected static $setters = [
            'outputPolicy' => 'setOutputPolicy',
            'codec' => 'setCodec',
            'sampleRate' => 'setSampleRate',
            'bitrate' => 'setBitrate',
            'channels' => 'setChannels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  音频编码格式。  取值如下：  - 1：AAC格式。 - 2：HEAAC1格式 。 - 3：HEAAC2格式。 - 4：MP3格式 。
    * sampleRate  音频采样率。  取值如下：  - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050（22050Hz） - 3：AUDIO_SAMPLE_32000（32000Hz） - 4：AUDIO_SAMPLE_44100（44100Hz） - 5：AUDIO_SAMPLE_48000（48000Hz） - 6：AUDIO_SAMPLE_96000（96000Hz）
    * bitrate  音频码率。  取值范围：0或[8,1000]。  单位：kbit/s。
    * channels  声道数。  取值如下： - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2 - 6：AUDIO_CHANNELS_5_1
    *
    * @var string[]
    */
    protected static $getters = [
            'outputPolicy' => 'getOutputPolicy',
            'codec' => 'getCodec',
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
    const OUTPUT_POLICY_TRANSCODE = 'transcode';
    const OUTPUT_POLICY_DISCARD = 'discard';
    const OUTPUT_POLICY_COPY = 'copy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOutputPolicyAllowableValues()
    {
        return [
            self::OUTPUT_POLICY_TRANSCODE,
            self::OUTPUT_POLICY_DISCARD,
            self::OUTPUT_POLICY_COPY,
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
        $this->container['outputPolicy'] = isset($data['outputPolicy']) ? $data['outputPolicy'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
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
            $allowedValues = $this->getOutputPolicyAllowableValues();
                if (!is_null($this->container['outputPolicy']) && !in_array($this->container['outputPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'outputPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['outputPolicy']) && (mb_strlen($this->container['outputPolicy']) > 64)) {
                $invalidProperties[] = "invalid value for 'outputPolicy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['outputPolicy']) && (mb_strlen($this->container['outputPolicy']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputPolicy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['codec']) && ($this->container['codec'] > 4)) {
                $invalidProperties[] = "invalid value for 'codec', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['codec']) && ($this->container['codec'] < 1)) {
                $invalidProperties[] = "invalid value for 'codec', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sampleRate']) && ($this->container['sampleRate'] > 6)) {
                $invalidProperties[] = "invalid value for 'sampleRate', must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['sampleRate']) && ($this->container['sampleRate'] < 1)) {
                $invalidProperties[] = "invalid value for 'sampleRate', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 0.";
            }
        if ($this->container['channels'] === null) {
            $invalidProperties[] = "'channels' can't be null";
        }
            if (($this->container['channels'] > 6)) {
                $invalidProperties[] = "invalid value for 'channels', must be smaller than or equal to 6.";
            }
            if (($this->container['channels'] < 1)) {
                $invalidProperties[] = "invalid value for 'channels', must be bigger than or equal to 1.";
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
    * Gets outputPolicy
    *  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    *
    * @return string|null
    */
    public function getOutputPolicy()
    {
        return $this->container['outputPolicy'];
    }

    /**
    * Sets outputPolicy
    *
    * @param string|null $outputPolicy 输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    *
    * @return $this
    */
    public function setOutputPolicy($outputPolicy)
    {
        $this->container['outputPolicy'] = $outputPolicy;
        return $this;
    }

    /**
    * Gets codec
    *  音频编码格式。  取值如下：  - 1：AAC格式。 - 2：HEAAC1格式 。 - 3：HEAAC2格式。 - 4：MP3格式 。
    *
    * @return int|null
    */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
    * Sets codec
    *
    * @param int|null $codec 音频编码格式。  取值如下：  - 1：AAC格式。 - 2：HEAAC1格式 。 - 3：HEAAC2格式。 - 4：MP3格式 。
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets sampleRate
    *  音频采样率。  取值如下：  - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050（22050Hz） - 3：AUDIO_SAMPLE_32000（32000Hz） - 4：AUDIO_SAMPLE_44100（44100Hz） - 5：AUDIO_SAMPLE_48000（48000Hz） - 6：AUDIO_SAMPLE_96000（96000Hz）
    *
    * @return int|null
    */
    public function getSampleRate()
    {
        return $this->container['sampleRate'];
    }

    /**
    * Sets sampleRate
    *
    * @param int|null $sampleRate 音频采样率。  取值如下：  - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050（22050Hz） - 3：AUDIO_SAMPLE_32000（32000Hz） - 4：AUDIO_SAMPLE_44100（44100Hz） - 5：AUDIO_SAMPLE_48000（48000Hz） - 6：AUDIO_SAMPLE_96000（96000Hz）
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
    *  音频码率。  取值范围：0或[8,1000]。  单位：kbit/s。
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
    * @param int|null $bitrate 音频码率。  取值范围：0或[8,1000]。  单位：kbit/s。
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
    *  声道数。  取值如下： - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2 - 6：AUDIO_CHANNELS_5_1
    *
    * @return int
    */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
    * Sets channels
    *
    * @param int $channels 声道数。  取值如下： - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2 - 6：AUDIO_CHANNELS_5_1
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

