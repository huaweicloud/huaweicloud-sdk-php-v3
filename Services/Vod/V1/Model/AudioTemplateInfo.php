<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioTemplateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioTemplateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sampleRate  音频采样率(有效值范围) - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050 - 3：AUDIO_SAMPLE_32000 - 4：AUDIO_SAMPLE_44100 - 5：AUDIO_SAMPLE_48000 - 6：AUDIO_SAMPLE_96000  默认值为1。
    * bitrate  音频码率（单位：Kbps）。
    * channels  声道数(有效值范围) - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sampleRate' => 'int',
            'bitrate' => 'int',
            'channels' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sampleRate  音频采样率(有效值范围) - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050 - 3：AUDIO_SAMPLE_32000 - 4：AUDIO_SAMPLE_44100 - 5：AUDIO_SAMPLE_48000 - 6：AUDIO_SAMPLE_96000  默认值为1。
    * bitrate  音频码率（单位：Kbps）。
    * channels  声道数(有效值范围) - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * sampleRate  音频采样率(有效值范围) - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050 - 3：AUDIO_SAMPLE_32000 - 4：AUDIO_SAMPLE_44100 - 5：AUDIO_SAMPLE_48000 - 6：AUDIO_SAMPLE_96000  默认值为1。
    * bitrate  音频码率（单位：Kbps）。
    * channels  声道数(有效值范围) - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2
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
    * sampleRate  音频采样率(有效值范围) - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050 - 3：AUDIO_SAMPLE_32000 - 4：AUDIO_SAMPLE_44100 - 5：AUDIO_SAMPLE_48000 - 6：AUDIO_SAMPLE_96000  默认值为1。
    * bitrate  音频码率（单位：Kbps）。
    * channels  声道数(有效值范围) - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2
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
    * sampleRate  音频采样率(有效值范围) - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050 - 3：AUDIO_SAMPLE_32000 - 4：AUDIO_SAMPLE_44100 - 5：AUDIO_SAMPLE_48000 - 6：AUDIO_SAMPLE_96000  默认值为1。
    * bitrate  音频码率（单位：Kbps）。
    * channels  声道数(有效值范围) - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2
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
        if ($this->container['channels'] === null) {
            $invalidProperties[] = "'channels' can't be null";
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
    *  音频采样率(有效值范围) - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050 - 3：AUDIO_SAMPLE_32000 - 4：AUDIO_SAMPLE_44100 - 5：AUDIO_SAMPLE_48000 - 6：AUDIO_SAMPLE_96000  默认值为1。
    *
    * @return int
    */
    public function getSampleRate()
    {
        return $this->container['sampleRate'];
    }

    /**
    * Sets sampleRate
    *
    * @param int $sampleRate 音频采样率(有效值范围) - 1：AUDIO_SAMPLE_AUTO - 2：AUDIO_SAMPLE_22050 - 3：AUDIO_SAMPLE_32000 - 4：AUDIO_SAMPLE_44100 - 5：AUDIO_SAMPLE_48000 - 6：AUDIO_SAMPLE_96000  默认值为1。
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
    *  音频码率（单位：Kbps）。
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
    * @param int|null $bitrate 音频码率（单位：Kbps）。
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
    *  声道数(有效值范围) - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2
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
    * @param int $channels 声道数(有效值范围) - 1：AUDIO_CHANNELS_1 - 2：AUDIO_CHANNELS_2
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

