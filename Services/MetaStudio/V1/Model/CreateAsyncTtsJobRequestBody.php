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
    * ttsText  发送给tts的待合成文本
    * voiceAssetId  音色ID，获取方式详见[获取音色ID](metastudio_02_0054.xml)。
    * speed  语速。 * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。
    * volume  音量。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长，单位毫秒。
    * callbackConfig  callbackConfig
    * genSrt  是否开启字幕
    * srtLen  字幕最大长度限制
    * srtLineLimit  字幕行数限制，默认为1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'text' => 'string',
            'ttsText' => 'string',
            'voiceAssetId' => 'string',
            'speed' => 'int',
            'pitch' => 'int',
            'volume' => 'int',
            'audioFormat' => 'string',
            'needTimestamp' => 'bool',
            'silenceFlag' => 'bool',
            'silenceTimeMs' => 'int',
            'callbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TtsCallBackConfig',
            'genSrt' => 'bool',
            'srtLen' => 'int',
            'srtLineLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * text  待合成文本
    * ttsText  发送给tts的待合成文本
    * voiceAssetId  音色ID，获取方式详见[获取音色ID](metastudio_02_0054.xml)。
    * speed  语速。 * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。
    * volume  音量。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长，单位毫秒。
    * callbackConfig  callbackConfig
    * genSrt  是否开启字幕
    * srtLen  字幕最大长度限制
    * srtLineLimit  字幕行数限制，默认为1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'text' => null,
        'ttsText' => null,
        'voiceAssetId' => null,
        'speed' => 'int32',
        'pitch' => 'int32',
        'volume' => 'int32',
        'audioFormat' => null,
        'needTimestamp' => null,
        'silenceFlag' => null,
        'silenceTimeMs' => null,
        'callbackConfig' => null,
        'genSrt' => null,
        'srtLen' => 'int64',
        'srtLineLimit' => 'int32'
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
    * ttsText  发送给tts的待合成文本
    * voiceAssetId  音色ID，获取方式详见[获取音色ID](metastudio_02_0054.xml)。
    * speed  语速。 * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。
    * volume  音量。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长，单位毫秒。
    * callbackConfig  callbackConfig
    * genSrt  是否开启字幕
    * srtLen  字幕最大长度限制
    * srtLineLimit  字幕行数限制，默认为1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'text' => 'text',
            'ttsText' => 'tts_text',
            'voiceAssetId' => 'voice_asset_id',
            'speed' => 'speed',
            'pitch' => 'pitch',
            'volume' => 'volume',
            'audioFormat' => 'audio_format',
            'needTimestamp' => 'need_timestamp',
            'silenceFlag' => 'silence_flag',
            'silenceTimeMs' => 'silence_time_ms',
            'callbackConfig' => 'callback_config',
            'genSrt' => 'gen_srt',
            'srtLen' => 'srt_len',
            'srtLineLimit' => 'srt_line_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * text  待合成文本
    * ttsText  发送给tts的待合成文本
    * voiceAssetId  音色ID，获取方式详见[获取音色ID](metastudio_02_0054.xml)。
    * speed  语速。 * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。
    * volume  音量。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长，单位毫秒。
    * callbackConfig  callbackConfig
    * genSrt  是否开启字幕
    * srtLen  字幕最大长度限制
    * srtLineLimit  字幕行数限制，默认为1
    *
    * @var string[]
    */
    protected static $setters = [
            'text' => 'setText',
            'ttsText' => 'setTtsText',
            'voiceAssetId' => 'setVoiceAssetId',
            'speed' => 'setSpeed',
            'pitch' => 'setPitch',
            'volume' => 'setVolume',
            'audioFormat' => 'setAudioFormat',
            'needTimestamp' => 'setNeedTimestamp',
            'silenceFlag' => 'setSilenceFlag',
            'silenceTimeMs' => 'setSilenceTimeMs',
            'callbackConfig' => 'setCallbackConfig',
            'genSrt' => 'setGenSrt',
            'srtLen' => 'setSrtLen',
            'srtLineLimit' => 'setSrtLineLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * text  待合成文本
    * ttsText  发送给tts的待合成文本
    * voiceAssetId  音色ID，获取方式详见[获取音色ID](metastudio_02_0054.xml)。
    * speed  语速。 * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
    * pitch  音高。
    * volume  音量。
    * audioFormat  输出音频文件格式。默认WAV。 * WAV：wav格式。 * MP3：mp3格式。
    * needTimestamp  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
    * silenceFlag  异常时是否返回静默音频流
    * silenceTimeMs  异常时返回的静默音频流时长，单位毫秒。
    * callbackConfig  callbackConfig
    * genSrt  是否开启字幕
    * srtLen  字幕最大长度限制
    * srtLineLimit  字幕行数限制，默认为1
    *
    * @var string[]
    */
    protected static $getters = [
            'text' => 'getText',
            'ttsText' => 'getTtsText',
            'voiceAssetId' => 'getVoiceAssetId',
            'speed' => 'getSpeed',
            'pitch' => 'getPitch',
            'volume' => 'getVolume',
            'audioFormat' => 'getAudioFormat',
            'needTimestamp' => 'getNeedTimestamp',
            'silenceFlag' => 'getSilenceFlag',
            'silenceTimeMs' => 'getSilenceTimeMs',
            'callbackConfig' => 'getCallbackConfig',
            'genSrt' => 'getGenSrt',
            'srtLen' => 'getSrtLen',
            'srtLineLimit' => 'getSrtLineLimit'
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
        $this->container['ttsText'] = isset($data['ttsText']) ? $data['ttsText'] : null;
        $this->container['voiceAssetId'] = isset($data['voiceAssetId']) ? $data['voiceAssetId'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['pitch'] = isset($data['pitch']) ? $data['pitch'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['audioFormat'] = isset($data['audioFormat']) ? $data['audioFormat'] : null;
        $this->container['needTimestamp'] = isset($data['needTimestamp']) ? $data['needTimestamp'] : null;
        $this->container['silenceFlag'] = isset($data['silenceFlag']) ? $data['silenceFlag'] : null;
        $this->container['silenceTimeMs'] = isset($data['silenceTimeMs']) ? $data['silenceTimeMs'] : null;
        $this->container['callbackConfig'] = isset($data['callbackConfig']) ? $data['callbackConfig'] : null;
        $this->container['genSrt'] = isset($data['genSrt']) ? $data['genSrt'] : null;
        $this->container['srtLen'] = isset($data['srtLen']) ? $data['srtLen'] : null;
        $this->container['srtLineLimit'] = isset($data['srtLineLimit']) ? $data['srtLineLimit'] : null;
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
            if (!is_null($this->container['ttsText']) && (mb_strlen($this->container['ttsText']) > 100000)) {
                $invalidProperties[] = "invalid value for 'ttsText', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['ttsText']) && (mb_strlen($this->container['ttsText']) < 0)) {
                $invalidProperties[] = "invalid value for 'ttsText', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['srtLen']) && ($this->container['srtLen'] > 10000)) {
                $invalidProperties[] = "invalid value for 'srtLen', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['srtLen']) && ($this->container['srtLen'] < 0)) {
                $invalidProperties[] = "invalid value for 'srtLen', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srtLineLimit']) && ($this->container['srtLineLimit'] > 5000)) {
                $invalidProperties[] = "invalid value for 'srtLineLimit', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['srtLineLimit']) && ($this->container['srtLineLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'srtLineLimit', must be bigger than or equal to 0.";
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
    * Gets ttsText
    *  发送给tts的待合成文本
    *
    * @return string|null
    */
    public function getTtsText()
    {
        return $this->container['ttsText'];
    }

    /**
    * Sets ttsText
    *
    * @param string|null $ttsText 发送给tts的待合成文本
    *
    * @return $this
    */
    public function setTtsText($ttsText)
    {
        $this->container['ttsText'] = $ttsText;
        return $this;
    }

    /**
    * Gets voiceAssetId
    *  音色ID，获取方式详见[获取音色ID](metastudio_02_0054.xml)。
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
    * @param string $voiceAssetId 音色ID，获取方式详见[获取音色ID](metastudio_02_0054.xml)。
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
    *  语速。 * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
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
    * @param int|null $speed 语速。 * 当取值为“100”时，表示一个成年人正常的语速，约为250字/分钟。 * 50表示0.5倍语速，100表示正常语速，200表示2倍语速。
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
    *  音高。
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
    * @param int|null $pitch 音高。
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
    *  音量。
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
    * @param int|null $volume 音量。
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
    *  是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
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
    * @param bool|null $needTimestamp 是否需要时间戳。false为不需要，true为需要返回时间戳信息。默认值为false。
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
    *  异常时返回的静默音频流时长，单位毫秒。
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
    * @param int|null $silenceTimeMs 异常时返回的静默音频流时长，单位毫秒。
    *
    * @return $this
    */
    public function setSilenceTimeMs($silenceTimeMs)
    {
        $this->container['silenceTimeMs'] = $silenceTimeMs;
        return $this;
    }

    /**
    * Gets callbackConfig
    *  callbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TtsCallBackConfig|null
    */
    public function getCallbackConfig()
    {
        return $this->container['callbackConfig'];
    }

    /**
    * Sets callbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TtsCallBackConfig|null $callbackConfig callbackConfig
    *
    * @return $this
    */
    public function setCallbackConfig($callbackConfig)
    {
        $this->container['callbackConfig'] = $callbackConfig;
        return $this;
    }

    /**
    * Gets genSrt
    *  是否开启字幕
    *
    * @return bool|null
    */
    public function getGenSrt()
    {
        return $this->container['genSrt'];
    }

    /**
    * Sets genSrt
    *
    * @param bool|null $genSrt 是否开启字幕
    *
    * @return $this
    */
    public function setGenSrt($genSrt)
    {
        $this->container['genSrt'] = $genSrt;
        return $this;
    }

    /**
    * Gets srtLen
    *  字幕最大长度限制
    *
    * @return int|null
    */
    public function getSrtLen()
    {
        return $this->container['srtLen'];
    }

    /**
    * Sets srtLen
    *
    * @param int|null $srtLen 字幕最大长度限制
    *
    * @return $this
    */
    public function setSrtLen($srtLen)
    {
        $this->container['srtLen'] = $srtLen;
        return $this;
    }

    /**
    * Gets srtLineLimit
    *  字幕行数限制，默认为1
    *
    * @return int|null
    */
    public function getSrtLineLimit()
    {
        return $this->container['srtLineLimit'];
    }

    /**
    * Sets srtLineLimit
    *
    * @param int|null $srtLineLimit 字幕行数限制，默认为1
    *
    * @return $this
    */
    public function setSrtLineLimit($srtLineLimit)
    {
        $this->container['srtLineLimit'] = $srtLineLimit;
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

