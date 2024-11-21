<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAsyncTtsJobRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAsyncTtsJobRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * text  待合成文本
    * voiceAssetId  音色ID
    * speed  语速。 默认值100，最小值50，最大值200。 > * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 > * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。 默认值100，最小值50，最大值200。
    * volume  音量。 默认值140，最小值90，最大值240。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳 false不需要；true：需要返回时间戳信息；默认false
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长,单位毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'text' => 'string',
            'voiceAssetId' => 'string',
            'speed' => 'int',
            'pitch' => 'int',
            'volume' => 'int',
            'audioFormat' => 'string',
            'needTimestamp' => 'bool',
            'silenceFlag' => 'bool',
            'silenceTimeMs' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * text  待合成文本
    * voiceAssetId  音色ID
    * speed  语速。 默认值100，最小值50，最大值200。 > * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 > * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。 默认值100，最小值50，最大值200。
    * volume  音量。 默认值140，最小值90，最大值240。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳 false不需要；true：需要返回时间戳信息；默认false
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长,单位毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'text' => null,
        'voiceAssetId' => null,
        'speed' => 'int32',
        'pitch' => 'int32',
        'volume' => 'int32',
        'audioFormat' => null,
        'needTimestamp' => null,
        'silenceFlag' => null,
        'silenceTimeMs' => null
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
    * text  待合成文本
    * voiceAssetId  音色ID
    * speed  语速。 默认值100，最小值50，最大值200。 > * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 > * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。 默认值100，最小值50，最大值200。
    * volume  音量。 默认值140，最小值90，最大值240。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳 false不需要；true：需要返回时间戳信息；默认false
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长,单位毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'text' => 'text',
            'voiceAssetId' => 'voice_asset_id',
            'speed' => 'speed',
            'pitch' => 'pitch',
            'volume' => 'volume',
            'audioFormat' => 'audio_format',
            'needTimestamp' => 'need_timestamp',
            'silenceFlag' => 'silence_flag',
            'silenceTimeMs' => 'silence_time_ms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * text  待合成文本
    * voiceAssetId  音色ID
    * speed  语速。 默认值100，最小值50，最大值200。 > * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 > * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。 默认值100，最小值50，最大值200。
    * volume  音量。 默认值140，最小值90，最大值240。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳 false不需要；true：需要返回时间戳信息；默认false
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长,单位毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'text' => 'setText',
            'voiceAssetId' => 'setVoiceAssetId',
            'speed' => 'setSpeed',
            'pitch' => 'setPitch',
            'volume' => 'setVolume',
            'audioFormat' => 'setAudioFormat',
            'needTimestamp' => 'setNeedTimestamp',
            'silenceFlag' => 'setSilenceFlag',
            'silenceTimeMs' => 'setSilenceTimeMs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * text  待合成文本
    * voiceAssetId  音色ID
    * speed  语速。 默认值100，最小值50，最大值200。 > * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 > * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。 默认值100，最小值50，最大值200。
    * volume  音量。 默认值140，最小值90，最大值240。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳 false不需要；true：需要返回时间戳信息；默认false
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长,单位毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'text' => 'getText',
            'voiceAssetId' => 'getVoiceAssetId',
            'speed' => 'getSpeed',
            'pitch' => 'getPitch',
            'volume' => 'getVolume',
            'audioFormat' => 'getAudioFormat',
            'needTimestamp' => 'getNeedTimestamp',
            'silenceFlag' => 'getSilenceFlag',
            'silenceTimeMs' => 'getSilenceTimeMs'
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
    const AUDIO_FORMAT_WAV = 'WAV';
    const AUDIO_FORMAT_MP3 = 'MP3';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioFormatAllowableValues()
    {
        return [
            self::AUDIO_FORMAT_WAV,
            self::AUDIO_FORMAT_MP3,
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['voiceAssetId'] = isset($data['voiceAssetId']) ? $data['voiceAssetId'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['pitch'] = isset($data['pitch']) ? $data['pitch'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['audioFormat'] = isset($data['audioFormat']) ? $data['audioFormat'] : null;
        $this->container['needTimestamp'] = isset($data['needTimestamp']) ? $data['needTimestamp'] : null;
        $this->container['silenceFlag'] = isset($data['silenceFlag']) ? $data['silenceFlag'] : null;
        $this->container['silenceTimeMs'] = isset($data['silenceTimeMs']) ? $data['silenceTimeMs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
            if ((mb_strlen($this->container['text']) > 100000)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 100000.";
            }
            if ((mb_strlen($this->container['text']) < 0)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['voiceAssetId'] === null) {
            $invalidProperties[] = "'voiceAssetId' can't be null";
        }
            if ((mb_strlen($this->container['voiceAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'voiceAssetId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['voiceAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceAssetId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9-_]+$/", $this->container['voiceAssetId'])) {
                $invalidProperties[] = "invalid value for 'voiceAssetId', must be conform to the pattern /^[a-zA-Z0-9-_]+$/.";
            }
            if (!is_null($this->container['speed']) && ($this->container['speed'] > 200)) {
                $invalidProperties[] = "invalid value for 'speed', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['speed']) && ($this->container['speed'] < 50)) {
                $invalidProperties[] = "invalid value for 'speed', must be bigger than or equal to 50.";
            }
            if (!is_null($this->container['pitch']) && ($this->container['pitch'] > 200)) {
                $invalidProperties[] = "invalid value for 'pitch', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['pitch']) && ($this->container['pitch'] < 50)) {
                $invalidProperties[] = "invalid value for 'pitch', must be bigger than or equal to 50.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] > 240)) {
                $invalidProperties[] = "invalid value for 'volume', must be smaller than or equal to 240.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] < 90)) {
                $invalidProperties[] = "invalid value for 'volume', must be bigger than or equal to 90.";
            }
            $allowedValues = $this->getAudioFormatAllowableValues();
                if (!is_null($this->container['audioFormat']) && !in_array($this->container['audioFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['silenceTimeMs']) && ($this->container['silenceTimeMs'] > 5000)) {
                $invalidProperties[] = "invalid value for 'silenceTimeMs', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['silenceTimeMs']) && ($this->container['silenceTimeMs'] < 0)) {
                $invalidProperties[] = "invalid value for 'silenceTimeMs', must be bigger than or equal to 0.";
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
    * Gets text
    *  待合成文本
    *
    * @return string
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string $text 待合成文本
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets voiceAssetId
    *  音色ID
    *
    * @return string
    */
    public function getVoiceAssetId()
    {
        return $this->container['voiceAssetId'];
    }

    /**
    * Sets voiceAssetId
    *
    * @param string $voiceAssetId 音色ID
    *
    * @return $this
    */
    public function setVoiceAssetId($voiceAssetId)
    {
        $this->container['voiceAssetId'] = $voiceAssetId;
        return $this;
    }

    /**
    * Gets speed
    *  语速。 默认值100，最小值50，最大值200。 > * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 > * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
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
    * @param int|null $speed 语速。 默认值100，最小值50，最大值200。 > * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 > * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
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
    *  音高。 默认值100，最小值50，最大值200。
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
    * @param int|null $pitch 音高。 默认值100，最小值50，最大值200。
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
    *  音量。 默认值140，最小值90，最大值240。
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
    * @param int|null $volume 音量。 默认值140，最小值90，最大值240。
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets audioFormat
    *  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
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
    * @param string|null $audioFormat 输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    *
    * @return $this
    */
    public function setAudioFormat($audioFormat)
    {
        $this->container['audioFormat'] = $audioFormat;
        return $this;
    }

    /**
    * Gets needTimestamp
    *  是否需要时间戳 false不需要；true：需要返回时间戳信息；默认false
    *
    * @return bool|null
    */
    public function getNeedTimestamp()
    {
        return $this->container['needTimestamp'];
    }

    /**
    * Sets needTimestamp
    *
    * @param bool|null $needTimestamp 是否需要时间戳 false不需要；true：需要返回时间戳信息；默认false
    *
    * @return $this
    */
    public function setNeedTimestamp($needTimestamp)
    {
        $this->container['needTimestamp'] = $needTimestamp;
        return $this;
    }

    /**
    * Gets silenceFlag
    *  异常时是否返回静默音频流
    *
    * @return bool|null
    */
    public function getSilenceFlag()
    {
        return $this->container['silenceFlag'];
    }

    /**
    * Sets silenceFlag
    *
    * @param bool|null $silenceFlag 异常时是否返回静默音频流
    *
    * @return $this
    */
    public function setSilenceFlag($silenceFlag)
    {
        $this->container['silenceFlag'] = $silenceFlag;
        return $this;
    }

    /**
    * Gets silenceTimeMs
    *  异常时返回的静默音频流时长,单位毫秒
    *
    * @return int|null
    */
    public function getSilenceTimeMs()
    {
        return $this->container['silenceTimeMs'];
    }

    /**
    * Sets silenceTimeMs
    *
    * @param int|null $silenceTimeMs 异常时返回的静默音频流时长,单位毫秒
    *
    * @return $this
    */
    public function setSilenceTimeMs($silenceTimeMs)
    {
        $this->container['silenceTimeMs'] = $silenceTimeMs;
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

