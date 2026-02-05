<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GenerateSpeechRequestBodyConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GenerateSpeechRequestBody_config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：8kHz、16kHz、24kHz。 默认：24kHz
    * voiceName  音色名称。
    * speed  语速：-500~500。 默认：0
    * pitch  音高：-500~500。 默认：0
    * volume  音量：0~100。 默认：50
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioFormat' => 'string',
            'sampleRate' => 'string',
            'voiceName' => 'string',
            'speed' => 'int',
            'pitch' => 'int',
            'volume' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：8kHz、16kHz、24kHz。 默认：24kHz
    * voiceName  音色名称。
    * speed  语速：-500~500。 默认：0
    * pitch  音高：-500~500。 默认：0
    * volume  音量：0~100。 默认：50
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioFormat' => null,
        'sampleRate' => null,
        'voiceName' => null,
        'speed' => 'int32',
        'pitch' => 'int32',
        'volume' => 'int32'
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
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：8kHz、16kHz、24kHz。 默认：24kHz
    * voiceName  音色名称。
    * speed  语速：-500~500。 默认：0
    * pitch  音高：-500~500。 默认：0
    * volume  音量：0~100。 默认：50
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioFormat' => 'audio_format',
            'sampleRate' => 'sample_rate',
            'voiceName' => 'voice_name',
            'speed' => 'speed',
            'pitch' => 'pitch',
            'volume' => 'volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：8kHz、16kHz、24kHz。 默认：24kHz
    * voiceName  音色名称。
    * speed  语速：-500~500。 默认：0
    * pitch  音高：-500~500。 默认：0
    * volume  音量：0~100。 默认：50
    *
    * @var string[]
    */
    protected static $setters = [
            'audioFormat' => 'setAudioFormat',
            'sampleRate' => 'setSampleRate',
            'voiceName' => 'setVoiceName',
            'speed' => 'setSpeed',
            'pitch' => 'setPitch',
            'volume' => 'setVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：8kHz、16kHz、24kHz。 默认：24kHz
    * voiceName  音色名称。
    * speed  语速：-500~500。 默认：0
    * pitch  音高：-500~500。 默认：0
    * volume  音量：0~100。 默认：50
    *
    * @var string[]
    */
    protected static $getters = [
            'audioFormat' => 'getAudioFormat',
            'sampleRate' => 'getSampleRate',
            'voiceName' => 'getVoiceName',
            'speed' => 'getSpeed',
            'pitch' => 'getPitch',
            'volume' => 'getVolume'
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
        $this->container['audioFormat'] = isset($data['audioFormat']) ? $data['audioFormat'] : null;
        $this->container['sampleRate'] = isset($data['sampleRate']) ? $data['sampleRate'] : null;
        $this->container['voiceName'] = isset($data['voiceName']) ? $data['voiceName'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['pitch'] = isset($data['pitch']) ? $data['pitch'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['voiceName'] === null) {
            $invalidProperties[] = "'voiceName' can't be null";
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
    * Gets audioFormat
    *  语音格式头：wav、mp3、pcm。 默认：wav
    *
    * @return string|null
    */
    public function getAudioFormat()
    {
        return $this->container['audioFormat'];
    }

    /**
    * Sets audioFormat
    *
    * @param string|null $audioFormat 语音格式头：wav、mp3、pcm。 默认：wav
    *
    * @return $this
    */
    public function setAudioFormat($audioFormat)
    {
        $this->container['audioFormat'] = $audioFormat;
        return $this;
    }

    /**
    * Gets sampleRate
    *  采样率：8kHz、16kHz、24kHz。 默认：24kHz
    *
    * @return string|null
    */
    public function getSampleRate()
    {
        return $this->container['sampleRate'];
    }

    /**
    * Sets sampleRate
    *
    * @param string|null $sampleRate 采样率：8kHz、16kHz、24kHz。 默认：24kHz
    *
    * @return $this
    */
    public function setSampleRate($sampleRate)
    {
        $this->container['sampleRate'] = $sampleRate;
        return $this;
    }

    /**
    * Gets voiceName
    *  音色名称。
    *
    * @return string
    */
    public function getVoiceName()
    {
        return $this->container['voiceName'];
    }

    /**
    * Sets voiceName
    *
    * @param string $voiceName 音色名称。
    *
    * @return $this
    */
    public function setVoiceName($voiceName)
    {
        $this->container['voiceName'] = $voiceName;
        return $this;
    }

    /**
    * Gets speed
    *  语速：-500~500。 默认：0
    *
    * @return int|null
    */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
    * Sets speed
    *
    * @param int|null $speed 语速：-500~500。 默认：0
    *
    * @return $this
    */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;
        return $this;
    }

    /**
    * Gets pitch
    *  音高：-500~500。 默认：0
    *
    * @return int|null
    */
    public function getPitch()
    {
        return $this->container['pitch'];
    }

    /**
    * Sets pitch
    *
    * @param int|null $pitch 音高：-500~500。 默认：0
    *
    * @return $this
    */
    public function setPitch($pitch)
    {
        $this->container['pitch'] = $pitch;
        return $this;
    }

    /**
    * Gets volume
    *  音量：0~100。 默认：50
    *
    * @return int|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param int|null $volume 音量：0~100。 默认：50
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
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

