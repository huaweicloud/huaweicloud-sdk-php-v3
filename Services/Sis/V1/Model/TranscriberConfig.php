<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TranscriberConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TranscriberConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioFormat  支持语音的格式。  audioformat取值范围:  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw/adpcm编码格式）、MP3、M4A、ogg-speex、ogg-opus、AMR、wma等格式，相应的文件后缀名为.wav, .mp3, .m4a, .spx, .opus, .amr 和.wma, 不区分大小写。支持双声道的音频。  pcm16k16bit  16k16bit裸音频录音数据。  pcm8k16bit   8k16bit裸音频录音数据。  ulaw16k8bit  16k8bit ulaw 裸音频录音数据。  ulaw8k8bit   8k8bit ulaw 裸音频录音数据。  alaw16k8bit  16k8bit alaw 裸音频录音数据。  alaw8k8bit   8k8bit alaw 裸音频录音数据。  vox8k4bit    8k4bit vox 裸音频录音数据。  v3_8k4bit    8k4bit v3 裸音频录音数据。
    * property  所使用的模型特征串。通常是“语种_采样率_领域”的形式，例如chinese_8k_common。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_8k_general （最新8k 通用版e2e模型，推荐使用）  chinese_16k_media (音视频领域，区域仅支持cn-north-4，cn-east-3)  chinese_8k_common  chinese_16k_conversation  chinese_8k_bank（银行领域，区域仅支持cn-north-4）  chinese_8k_insurance（保险领域，区域仅支持cn-north-4）  sichuan_8k_common （四川话识别，区域支持cn-north-4，cn-east-3）
    * addPunc  是否加标点， 可以为 yes, no(缺省)。
    * needAnalysisInfo  needAnalysisInfo
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为yes 、 no，缺省为yes。
    * callbackUrl  用于录音文件识表示回调 url，即用户用于接收识别结果的服务器地址，不支持IP地址方式调用，url长度小于2048字节。服务请求方法为POST。  如果用户使用回调方式获取识别结果，需填写该参数，处理成功后用户服务器需返回状态码“200”。  如果用户使用轮询方式获取识别结果，则无需填写该参数。别结果的回调url，不使用则不填写。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioFormat' => 'string',
            'property' => 'string',
            'addPunc' => 'string',
            'needAnalysisInfo' => '\HuaweiCloud\SDK\Sis\V1\Model\AnalysisInfo',
            'vocabularyId' => 'string',
            'digitNorm' => 'string',
            'callbackUrl' => 'string',
            'needWordInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioFormat  支持语音的格式。  audioformat取值范围:  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw/adpcm编码格式）、MP3、M4A、ogg-speex、ogg-opus、AMR、wma等格式，相应的文件后缀名为.wav, .mp3, .m4a, .spx, .opus, .amr 和.wma, 不区分大小写。支持双声道的音频。  pcm16k16bit  16k16bit裸音频录音数据。  pcm8k16bit   8k16bit裸音频录音数据。  ulaw16k8bit  16k8bit ulaw 裸音频录音数据。  ulaw8k8bit   8k8bit ulaw 裸音频录音数据。  alaw16k8bit  16k8bit alaw 裸音频录音数据。  alaw8k8bit   8k8bit alaw 裸音频录音数据。  vox8k4bit    8k4bit vox 裸音频录音数据。  v3_8k4bit    8k4bit v3 裸音频录音数据。
    * property  所使用的模型特征串。通常是“语种_采样率_领域”的形式，例如chinese_8k_common。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_8k_general （最新8k 通用版e2e模型，推荐使用）  chinese_16k_media (音视频领域，区域仅支持cn-north-4，cn-east-3)  chinese_8k_common  chinese_16k_conversation  chinese_8k_bank（银行领域，区域仅支持cn-north-4）  chinese_8k_insurance（保险领域，区域仅支持cn-north-4）  sichuan_8k_common （四川话识别，区域支持cn-north-4，cn-east-3）
    * addPunc  是否加标点， 可以为 yes, no(缺省)。
    * needAnalysisInfo  needAnalysisInfo
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为yes 、 no，缺省为yes。
    * callbackUrl  用于录音文件识表示回调 url，即用户用于接收识别结果的服务器地址，不支持IP地址方式调用，url长度小于2048字节。服务请求方法为POST。  如果用户使用回调方式获取识别结果，需填写该参数，处理成功后用户服务器需返回状态码“200”。  如果用户使用轮询方式获取识别结果，则无需填写该参数。别结果的回调url，不使用则不填写。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioFormat' => null,
        'property' => null,
        'addPunc' => null,
        'needAnalysisInfo' => null,
        'vocabularyId' => null,
        'digitNorm' => null,
        'callbackUrl' => null,
        'needWordInfo' => null
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
    * audioFormat  支持语音的格式。  audioformat取值范围:  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw/adpcm编码格式）、MP3、M4A、ogg-speex、ogg-opus、AMR、wma等格式，相应的文件后缀名为.wav, .mp3, .m4a, .spx, .opus, .amr 和.wma, 不区分大小写。支持双声道的音频。  pcm16k16bit  16k16bit裸音频录音数据。  pcm8k16bit   8k16bit裸音频录音数据。  ulaw16k8bit  16k8bit ulaw 裸音频录音数据。  ulaw8k8bit   8k8bit ulaw 裸音频录音数据。  alaw16k8bit  16k8bit alaw 裸音频录音数据。  alaw8k8bit   8k8bit alaw 裸音频录音数据。  vox8k4bit    8k4bit vox 裸音频录音数据。  v3_8k4bit    8k4bit v3 裸音频录音数据。
    * property  所使用的模型特征串。通常是“语种_采样率_领域”的形式，例如chinese_8k_common。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_8k_general （最新8k 通用版e2e模型，推荐使用）  chinese_16k_media (音视频领域，区域仅支持cn-north-4，cn-east-3)  chinese_8k_common  chinese_16k_conversation  chinese_8k_bank（银行领域，区域仅支持cn-north-4）  chinese_8k_insurance（保险领域，区域仅支持cn-north-4）  sichuan_8k_common （四川话识别，区域支持cn-north-4，cn-east-3）
    * addPunc  是否加标点， 可以为 yes, no(缺省)。
    * needAnalysisInfo  needAnalysisInfo
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为yes 、 no，缺省为yes。
    * callbackUrl  用于录音文件识表示回调 url，即用户用于接收识别结果的服务器地址，不支持IP地址方式调用，url长度小于2048字节。服务请求方法为POST。  如果用户使用回调方式获取识别结果，需填写该参数，处理成功后用户服务器需返回状态码“200”。  如果用户使用轮询方式获取识别结果，则无需填写该参数。别结果的回调url，不使用则不填写。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioFormat' => 'audio_format',
            'property' => 'property',
            'addPunc' => 'add_punc',
            'needAnalysisInfo' => 'need_analysis_info',
            'vocabularyId' => 'vocabulary_id',
            'digitNorm' => 'digit_norm',
            'callbackUrl' => 'callback_url',
            'needWordInfo' => 'need_word_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioFormat  支持语音的格式。  audioformat取值范围:  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw/adpcm编码格式）、MP3、M4A、ogg-speex、ogg-opus、AMR、wma等格式，相应的文件后缀名为.wav, .mp3, .m4a, .spx, .opus, .amr 和.wma, 不区分大小写。支持双声道的音频。  pcm16k16bit  16k16bit裸音频录音数据。  pcm8k16bit   8k16bit裸音频录音数据。  ulaw16k8bit  16k8bit ulaw 裸音频录音数据。  ulaw8k8bit   8k8bit ulaw 裸音频录音数据。  alaw16k8bit  16k8bit alaw 裸音频录音数据。  alaw8k8bit   8k8bit alaw 裸音频录音数据。  vox8k4bit    8k4bit vox 裸音频录音数据。  v3_8k4bit    8k4bit v3 裸音频录音数据。
    * property  所使用的模型特征串。通常是“语种_采样率_领域”的形式，例如chinese_8k_common。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_8k_general （最新8k 通用版e2e模型，推荐使用）  chinese_16k_media (音视频领域，区域仅支持cn-north-4，cn-east-3)  chinese_8k_common  chinese_16k_conversation  chinese_8k_bank（银行领域，区域仅支持cn-north-4）  chinese_8k_insurance（保险领域，区域仅支持cn-north-4）  sichuan_8k_common （四川话识别，区域支持cn-north-4，cn-east-3）
    * addPunc  是否加标点， 可以为 yes, no(缺省)。
    * needAnalysisInfo  needAnalysisInfo
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为yes 、 no，缺省为yes。
    * callbackUrl  用于录音文件识表示回调 url，即用户用于接收识别结果的服务器地址，不支持IP地址方式调用，url长度小于2048字节。服务请求方法为POST。  如果用户使用回调方式获取识别结果，需填写该参数，处理成功后用户服务器需返回状态码“200”。  如果用户使用轮询方式获取识别结果，则无需填写该参数。别结果的回调url，不使用则不填写。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $setters = [
            'audioFormat' => 'setAudioFormat',
            'property' => 'setProperty',
            'addPunc' => 'setAddPunc',
            'needAnalysisInfo' => 'setNeedAnalysisInfo',
            'vocabularyId' => 'setVocabularyId',
            'digitNorm' => 'setDigitNorm',
            'callbackUrl' => 'setCallbackUrl',
            'needWordInfo' => 'setNeedWordInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioFormat  支持语音的格式。  audioformat取值范围:  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw/adpcm编码格式）、MP3、M4A、ogg-speex、ogg-opus、AMR、wma等格式，相应的文件后缀名为.wav, .mp3, .m4a, .spx, .opus, .amr 和.wma, 不区分大小写。支持双声道的音频。  pcm16k16bit  16k16bit裸音频录音数据。  pcm8k16bit   8k16bit裸音频录音数据。  ulaw16k8bit  16k8bit ulaw 裸音频录音数据。  ulaw8k8bit   8k8bit ulaw 裸音频录音数据。  alaw16k8bit  16k8bit alaw 裸音频录音数据。  alaw8k8bit   8k8bit alaw 裸音频录音数据。  vox8k4bit    8k4bit vox 裸音频录音数据。  v3_8k4bit    8k4bit v3 裸音频录音数据。
    * property  所使用的模型特征串。通常是“语种_采样率_领域”的形式，例如chinese_8k_common。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_8k_general （最新8k 通用版e2e模型，推荐使用）  chinese_16k_media (音视频领域，区域仅支持cn-north-4，cn-east-3)  chinese_8k_common  chinese_16k_conversation  chinese_8k_bank（银行领域，区域仅支持cn-north-4）  chinese_8k_insurance（保险领域，区域仅支持cn-north-4）  sichuan_8k_common （四川话识别，区域支持cn-north-4，cn-east-3）
    * addPunc  是否加标点， 可以为 yes, no(缺省)。
    * needAnalysisInfo  needAnalysisInfo
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为yes 、 no，缺省为yes。
    * callbackUrl  用于录音文件识表示回调 url，即用户用于接收识别结果的服务器地址，不支持IP地址方式调用，url长度小于2048字节。服务请求方法为POST。  如果用户使用回调方式获取识别结果，需填写该参数，处理成功后用户服务器需返回状态码“200”。  如果用户使用轮询方式获取识别结果，则无需填写该参数。别结果的回调url，不使用则不填写。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $getters = [
            'audioFormat' => 'getAudioFormat',
            'property' => 'getProperty',
            'addPunc' => 'getAddPunc',
            'needAnalysisInfo' => 'getNeedAnalysisInfo',
            'vocabularyId' => 'getVocabularyId',
            'digitNorm' => 'getDigitNorm',
            'callbackUrl' => 'getCallbackUrl',
            'needWordInfo' => 'getNeedWordInfo'
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
    const AUDIO_FORMAT_AUTO = 'auto';
    const AUDIO_FORMAT_PCM16K16BIT = 'pcm16k16bit';
    const AUDIO_FORMAT_PCM8K16BIT = 'pcm8k16bit';
    const AUDIO_FORMAT_ULAW16K8BIT = 'ulaw16k8bit';
    const AUDIO_FORMAT_ULAW8K8BIT = 'ulaw8k8bit';
    const AUDIO_FORMAT_ALAW16K8BIT = 'alaw16k8bit';
    const AUDIO_FORMAT_ALAW8K8BIT = 'alaw8k8bit';
    const AUDIO_FORMAT_VOX8K4BIT = 'vox8k4bit';
    const AUDIO_FORMAT_V3_8K4BIT = 'v3_8k4bit';
    const PROPERTY_CHINESE_16K_MEDIA = 'chinese_16k_media';
    const PROPERTY_CHINESE_8K_COMMON = 'chinese_8k_common';
    const PROPERTY_CHINESE_16K_CONVERSATION = 'chinese_16k_conversation';
    const PROPERTY_CHINESE_8K_BANK = 'chinese_8k_bank';
    const PROPERTY_CHINESE_8K_INSURANCE = 'chinese_8k_insurance';
    const PROPERTY_SICHUAN_8K_COMMON = 'sichuan_8k_common';
    const PROPERTY_CHINESE_8K_GENERAL = 'chinese_8k_general';
    const ADD_PUNC_YES = 'yes';
    const ADD_PUNC_NO = 'no';
    const DIGIT_NORM_YES = 'yes';
    const DIGIT_NORM_NO = 'no';
    const NEED_WORD_INFO_YES = 'yes';
    const NEED_WORD_INFO_NO = 'no';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioFormatAllowableValues()
    {
        return [
            self::AUDIO_FORMAT_AUTO,
            self::AUDIO_FORMAT_PCM16K16BIT,
            self::AUDIO_FORMAT_PCM8K16BIT,
            self::AUDIO_FORMAT_ULAW16K8BIT,
            self::AUDIO_FORMAT_ULAW8K8BIT,
            self::AUDIO_FORMAT_ALAW16K8BIT,
            self::AUDIO_FORMAT_ALAW8K8BIT,
            self::AUDIO_FORMAT_VOX8K4BIT,
            self::AUDIO_FORMAT_V3_8K4BIT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPropertyAllowableValues()
    {
        return [
            self::PROPERTY_CHINESE_16K_MEDIA,
            self::PROPERTY_CHINESE_8K_COMMON,
            self::PROPERTY_CHINESE_16K_CONVERSATION,
            self::PROPERTY_CHINESE_8K_BANK,
            self::PROPERTY_CHINESE_8K_INSURANCE,
            self::PROPERTY_SICHUAN_8K_COMMON,
            self::PROPERTY_CHINESE_8K_GENERAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddPuncAllowableValues()
    {
        return [
            self::ADD_PUNC_YES,
            self::ADD_PUNC_NO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDigitNormAllowableValues()
    {
        return [
            self::DIGIT_NORM_YES,
            self::DIGIT_NORM_NO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNeedWordInfoAllowableValues()
    {
        return [
            self::NEED_WORD_INFO_YES,
            self::NEED_WORD_INFO_NO,
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
        $this->container['audioFormat'] = isset($data['audioFormat']) ? $data['audioFormat'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['addPunc'] = isset($data['addPunc']) ? $data['addPunc'] : null;
        $this->container['needAnalysisInfo'] = isset($data['needAnalysisInfo']) ? $data['needAnalysisInfo'] : null;
        $this->container['vocabularyId'] = isset($data['vocabularyId']) ? $data['vocabularyId'] : null;
        $this->container['digitNorm'] = isset($data['digitNorm']) ? $data['digitNorm'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
        $this->container['needWordInfo'] = isset($data['needWordInfo']) ? $data['needWordInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAudioFormatAllowableValues();
                if (!is_null($this->container['audioFormat']) && !in_array($this->container['audioFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['property'] === null) {
            $invalidProperties[] = "'property' can't be null";
        }
            $allowedValues = $this->getPropertyAllowableValues();
                if (!is_null($this->container['property']) && !in_array($this->container['property'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'property', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAddPuncAllowableValues();
                if (!is_null($this->container['addPunc']) && !in_array($this->container['addPunc'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addPunc', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDigitNormAllowableValues();
                if (!is_null($this->container['digitNorm']) && !in_array($this->container['digitNorm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'digitNorm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNeedWordInfoAllowableValues();
                if (!is_null($this->container['needWordInfo']) && !in_array($this->container['needWordInfo'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'needWordInfo', must be one of '%s'",
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
    * Gets audioFormat
    *  支持语音的格式。  audioformat取值范围:  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw/adpcm编码格式）、MP3、M4A、ogg-speex、ogg-opus、AMR、wma等格式，相应的文件后缀名为.wav, .mp3, .m4a, .spx, .opus, .amr 和.wma, 不区分大小写。支持双声道的音频。  pcm16k16bit  16k16bit裸音频录音数据。  pcm8k16bit   8k16bit裸音频录音数据。  ulaw16k8bit  16k8bit ulaw 裸音频录音数据。  ulaw8k8bit   8k8bit ulaw 裸音频录音数据。  alaw16k8bit  16k8bit alaw 裸音频录音数据。  alaw8k8bit   8k8bit alaw 裸音频录音数据。  vox8k4bit    8k4bit vox 裸音频录音数据。  v3_8k4bit    8k4bit v3 裸音频录音数据。
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
    * @param string|null $audioFormat 支持语音的格式。  audioformat取值范围:  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw/adpcm编码格式）、MP3、M4A、ogg-speex、ogg-opus、AMR、wma等格式，相应的文件后缀名为.wav, .mp3, .m4a, .spx, .opus, .amr 和.wma, 不区分大小写。支持双声道的音频。  pcm16k16bit  16k16bit裸音频录音数据。  pcm8k16bit   8k16bit裸音频录音数据。  ulaw16k8bit  16k8bit ulaw 裸音频录音数据。  ulaw8k8bit   8k8bit ulaw 裸音频录音数据。  alaw16k8bit  16k8bit alaw 裸音频录音数据。  alaw8k8bit   8k8bit alaw 裸音频录音数据。  vox8k4bit    8k4bit vox 裸音频录音数据。  v3_8k4bit    8k4bit v3 裸音频录音数据。
    *
    * @return $this
    */
    public function setAudioFormat($audioFormat)
    {
        $this->container['audioFormat'] = $audioFormat;
        return $this;
    }

    /**
    * Gets property
    *  所使用的模型特征串。通常是“语种_采样率_领域”的形式，例如chinese_8k_common。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_8k_general （最新8k 通用版e2e模型，推荐使用）  chinese_16k_media (音视频领域，区域仅支持cn-north-4，cn-east-3)  chinese_8k_common  chinese_16k_conversation  chinese_8k_bank（银行领域，区域仅支持cn-north-4）  chinese_8k_insurance（保险领域，区域仅支持cn-north-4）  sichuan_8k_common （四川话识别，区域支持cn-north-4，cn-east-3）
    *
    * @return string
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string $property 所使用的模型特征串。通常是“语种_采样率_领域”的形式，例如chinese_8k_common。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_8k_general （最新8k 通用版e2e模型，推荐使用）  chinese_16k_media (音视频领域，区域仅支持cn-north-4，cn-east-3)  chinese_8k_common  chinese_16k_conversation  chinese_8k_bank（银行领域，区域仅支持cn-north-4）  chinese_8k_insurance（保险领域，区域仅支持cn-north-4）  sichuan_8k_common （四川话识别，区域支持cn-north-4，cn-east-3）
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets addPunc
    *  是否加标点， 可以为 yes, no(缺省)。
    *
    * @return string|null
    */
    public function getAddPunc()
    {
        return $this->container['addPunc'];
    }

    /**
    * Sets addPunc
    *
    * @param string|null $addPunc 是否加标点， 可以为 yes, no(缺省)。
    *
    * @return $this
    */
    public function setAddPunc($addPunc)
    {
        $this->container['addPunc'] = $addPunc;
        return $this;
    }

    /**
    * Gets needAnalysisInfo
    *  needAnalysisInfo
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\AnalysisInfo|null
    */
    public function getNeedAnalysisInfo()
    {
        return $this->container['needAnalysisInfo'];
    }

    /**
    * Sets needAnalysisInfo
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\AnalysisInfo|null $needAnalysisInfo needAnalysisInfo
    *
    * @return $this
    */
    public function setNeedAnalysisInfo($needAnalysisInfo)
    {
        $this->container['needAnalysisInfo'] = $needAnalysisInfo;
        return $this;
    }

    /**
    * Gets vocabularyId
    *  热词表id，不使用则不填写。
    *
    * @return string|null
    */
    public function getVocabularyId()
    {
        return $this->container['vocabularyId'];
    }

    /**
    * Sets vocabularyId
    *
    * @param string|null $vocabularyId 热词表id，不使用则不填写。
    *
    * @return $this
    */
    public function setVocabularyId($vocabularyId)
    {
        $this->container['vocabularyId'] = $vocabularyId;
        return $this;
    }

    /**
    * Gets digitNorm
    *  表示是否将语音中的数字识别为阿拉伯数字，取值为yes 、 no，缺省为yes。
    *
    * @return string|null
    */
    public function getDigitNorm()
    {
        return $this->container['digitNorm'];
    }

    /**
    * Sets digitNorm
    *
    * @param string|null $digitNorm 表示是否将语音中的数字识别为阿拉伯数字，取值为yes 、 no，缺省为yes。
    *
    * @return $this
    */
    public function setDigitNorm($digitNorm)
    {
        $this->container['digitNorm'] = $digitNorm;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  用于录音文件识表示回调 url，即用户用于接收识别结果的服务器地址，不支持IP地址方式调用，url长度小于2048字节。服务请求方法为POST。  如果用户使用回调方式获取识别结果，需填写该参数，处理成功后用户服务器需返回状态码“200”。  如果用户使用轮询方式获取识别结果，则无需填写该参数。别结果的回调url，不使用则不填写。
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 用于录音文件识表示回调 url，即用户用于接收识别结果的服务器地址，不支持IP地址方式调用，url长度小于2048字节。服务请求方法为POST。  如果用户使用回调方式获取识别结果，需填写该参数，处理成功后用户服务器需返回状态码“200”。  如果用户使用轮询方式获取识别结果，则无需填写该参数。别结果的回调url，不使用则不填写。
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
    * Gets needWordInfo
    *  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    *
    * @return string|null
    */
    public function getNeedWordInfo()
    {
        return $this->container['needWordInfo'];
    }

    /**
    * Sets needWordInfo
    *
    * @param string|null $needWordInfo 表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    *
    * @return $this
    */
    public function setNeedWordInfo($needWordInfo)
    {
        $this->container['needWordInfo'] = $needWordInfo;
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

