<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Config implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioFormat  支持语音的格式。  audio_format取值范围：  pcm16k16bit  16k16bit单通道录音数据。  pcm8k16bit   8k16bit单通道录音数据。  ulaw16k8bit  16k8bit ulaw 单通道录音数据。  ulaw8k8bit   8k8bit ulaw 单通道录音数据。  alaw16k8bit  16k8bit alaw 单通道录音数据。  alaw8k8bit   8k8bit alaw 单通道录音数据。  mp3  mp3格式音频。目前仅支持单通道的音频。  aac  aac格式音频。目前仅支持单通道的音频。  wav  带wav封装头的格式，从封装头中自动确定格式，目前仅支持8k/16k采样率、单通道、pcm, alaw, ulaw三种编码格式  amr  AMR窄带(8k) 压缩录音数据。  amrwb  AMR 宽带(16k) 压缩录音数据。  auto 由引擎自动判断音频数据的格式并解码，支持自动判断wav，mp3，amr/amrwb，aac，m4a，wma格式
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_16k_general  支持采样率为16k的中文普通话语音识别，同时可识别一些简单的方言。格式仅支持pcm16k16bit、mp3、wav，区域仅支持cn-north-4。  chinese_16k_travel 支持采样率为16k的中文普通话语音识别，采用新一代端到端识别算法，并针对网约车质检场景进行了优化。格式仅支持pcm16k16bit、mp3、wav和aac，区域支持cn-east-3和cn-north-4（强烈推荐使用）。  chinese_8k_common  支持采样率为8k的中文普通话语音识别。  chinese_16k_common  支持采样率为16k的中文普通话语音识别。  sichuan_16k_common  支持采样率为16k的中文普通话与四川话方言识别。区域仅支持cn-north-4。  cantonese_16k_common  支持采样率为16k的粤语方言识别。区域仅支持cn-north-4。  shanghai_16k_common  支持采样率为16k的上海话方言识别，区域仅支持cn-north-4。  english_8k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。  english_16k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。
    * addPunc  表示是否在识别结果中添加标点，取值为“yes”和“no”，缺省为“no”。
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为“yes” 和 “no”，缺省为“yes”。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    * autoLanguageDetect  表示是否开启普英方自动识别，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioFormat' => 'string',
            'property' => 'string',
            'addPunc' => 'string',
            'vocabularyId' => 'string',
            'digitNorm' => 'string',
            'needWordInfo' => 'string',
            'autoLanguageDetect' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioFormat  支持语音的格式。  audio_format取值范围：  pcm16k16bit  16k16bit单通道录音数据。  pcm8k16bit   8k16bit单通道录音数据。  ulaw16k8bit  16k8bit ulaw 单通道录音数据。  ulaw8k8bit   8k8bit ulaw 单通道录音数据。  alaw16k8bit  16k8bit alaw 单通道录音数据。  alaw8k8bit   8k8bit alaw 单通道录音数据。  mp3  mp3格式音频。目前仅支持单通道的音频。  aac  aac格式音频。目前仅支持单通道的音频。  wav  带wav封装头的格式，从封装头中自动确定格式，目前仅支持8k/16k采样率、单通道、pcm, alaw, ulaw三种编码格式  amr  AMR窄带(8k) 压缩录音数据。  amrwb  AMR 宽带(16k) 压缩录音数据。  auto 由引擎自动判断音频数据的格式并解码，支持自动判断wav，mp3，amr/amrwb，aac，m4a，wma格式
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_16k_general  支持采样率为16k的中文普通话语音识别，同时可识别一些简单的方言。格式仅支持pcm16k16bit、mp3、wav，区域仅支持cn-north-4。  chinese_16k_travel 支持采样率为16k的中文普通话语音识别，采用新一代端到端识别算法，并针对网约车质检场景进行了优化。格式仅支持pcm16k16bit、mp3、wav和aac，区域支持cn-east-3和cn-north-4（强烈推荐使用）。  chinese_8k_common  支持采样率为8k的中文普通话语音识别。  chinese_16k_common  支持采样率为16k的中文普通话语音识别。  sichuan_16k_common  支持采样率为16k的中文普通话与四川话方言识别。区域仅支持cn-north-4。  cantonese_16k_common  支持采样率为16k的粤语方言识别。区域仅支持cn-north-4。  shanghai_16k_common  支持采样率为16k的上海话方言识别，区域仅支持cn-north-4。  english_8k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。  english_16k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。
    * addPunc  表示是否在识别结果中添加标点，取值为“yes”和“no”，缺省为“no”。
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为“yes” 和 “no”，缺省为“yes”。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    * autoLanguageDetect  表示是否开启普英方自动识别，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioFormat' => null,
        'property' => null,
        'addPunc' => null,
        'vocabularyId' => null,
        'digitNorm' => null,
        'needWordInfo' => null,
        'autoLanguageDetect' => null
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
    * audioFormat  支持语音的格式。  audio_format取值范围：  pcm16k16bit  16k16bit单通道录音数据。  pcm8k16bit   8k16bit单通道录音数据。  ulaw16k8bit  16k8bit ulaw 单通道录音数据。  ulaw8k8bit   8k8bit ulaw 单通道录音数据。  alaw16k8bit  16k8bit alaw 单通道录音数据。  alaw8k8bit   8k8bit alaw 单通道录音数据。  mp3  mp3格式音频。目前仅支持单通道的音频。  aac  aac格式音频。目前仅支持单通道的音频。  wav  带wav封装头的格式，从封装头中自动确定格式，目前仅支持8k/16k采样率、单通道、pcm, alaw, ulaw三种编码格式  amr  AMR窄带(8k) 压缩录音数据。  amrwb  AMR 宽带(16k) 压缩录音数据。  auto 由引擎自动判断音频数据的格式并解码，支持自动判断wav，mp3，amr/amrwb，aac，m4a，wma格式
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_16k_general  支持采样率为16k的中文普通话语音识别，同时可识别一些简单的方言。格式仅支持pcm16k16bit、mp3、wav，区域仅支持cn-north-4。  chinese_16k_travel 支持采样率为16k的中文普通话语音识别，采用新一代端到端识别算法，并针对网约车质检场景进行了优化。格式仅支持pcm16k16bit、mp3、wav和aac，区域支持cn-east-3和cn-north-4（强烈推荐使用）。  chinese_8k_common  支持采样率为8k的中文普通话语音识别。  chinese_16k_common  支持采样率为16k的中文普通话语音识别。  sichuan_16k_common  支持采样率为16k的中文普通话与四川话方言识别。区域仅支持cn-north-4。  cantonese_16k_common  支持采样率为16k的粤语方言识别。区域仅支持cn-north-4。  shanghai_16k_common  支持采样率为16k的上海话方言识别，区域仅支持cn-north-4。  english_8k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。  english_16k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。
    * addPunc  表示是否在识别结果中添加标点，取值为“yes”和“no”，缺省为“no”。
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为“yes” 和 “no”，缺省为“yes”。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    * autoLanguageDetect  表示是否开启普英方自动识别，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioFormat' => 'audio_format',
            'property' => 'property',
            'addPunc' => 'add_punc',
            'vocabularyId' => 'vocabulary_id',
            'digitNorm' => 'digit_norm',
            'needWordInfo' => 'need_word_info',
            'autoLanguageDetect' => 'auto_language_detect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioFormat  支持语音的格式。  audio_format取值范围：  pcm16k16bit  16k16bit单通道录音数据。  pcm8k16bit   8k16bit单通道录音数据。  ulaw16k8bit  16k8bit ulaw 单通道录音数据。  ulaw8k8bit   8k8bit ulaw 单通道录音数据。  alaw16k8bit  16k8bit alaw 单通道录音数据。  alaw8k8bit   8k8bit alaw 单通道录音数据。  mp3  mp3格式音频。目前仅支持单通道的音频。  aac  aac格式音频。目前仅支持单通道的音频。  wav  带wav封装头的格式，从封装头中自动确定格式，目前仅支持8k/16k采样率、单通道、pcm, alaw, ulaw三种编码格式  amr  AMR窄带(8k) 压缩录音数据。  amrwb  AMR 宽带(16k) 压缩录音数据。  auto 由引擎自动判断音频数据的格式并解码，支持自动判断wav，mp3，amr/amrwb，aac，m4a，wma格式
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_16k_general  支持采样率为16k的中文普通话语音识别，同时可识别一些简单的方言。格式仅支持pcm16k16bit、mp3、wav，区域仅支持cn-north-4。  chinese_16k_travel 支持采样率为16k的中文普通话语音识别，采用新一代端到端识别算法，并针对网约车质检场景进行了优化。格式仅支持pcm16k16bit、mp3、wav和aac，区域支持cn-east-3和cn-north-4（强烈推荐使用）。  chinese_8k_common  支持采样率为8k的中文普通话语音识别。  chinese_16k_common  支持采样率为16k的中文普通话语音识别。  sichuan_16k_common  支持采样率为16k的中文普通话与四川话方言识别。区域仅支持cn-north-4。  cantonese_16k_common  支持采样率为16k的粤语方言识别。区域仅支持cn-north-4。  shanghai_16k_common  支持采样率为16k的上海话方言识别，区域仅支持cn-north-4。  english_8k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。  english_16k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。
    * addPunc  表示是否在识别结果中添加标点，取值为“yes”和“no”，缺省为“no”。
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为“yes” 和 “no”，缺省为“yes”。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    * autoLanguageDetect  表示是否开启普英方自动识别，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $setters = [
            'audioFormat' => 'setAudioFormat',
            'property' => 'setProperty',
            'addPunc' => 'setAddPunc',
            'vocabularyId' => 'setVocabularyId',
            'digitNorm' => 'setDigitNorm',
            'needWordInfo' => 'setNeedWordInfo',
            'autoLanguageDetect' => 'setAutoLanguageDetect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioFormat  支持语音的格式。  audio_format取值范围：  pcm16k16bit  16k16bit单通道录音数据。  pcm8k16bit   8k16bit单通道录音数据。  ulaw16k8bit  16k8bit ulaw 单通道录音数据。  ulaw8k8bit   8k8bit ulaw 单通道录音数据。  alaw16k8bit  16k8bit alaw 单通道录音数据。  alaw8k8bit   8k8bit alaw 单通道录音数据。  mp3  mp3格式音频。目前仅支持单通道的音频。  aac  aac格式音频。目前仅支持单通道的音频。  wav  带wav封装头的格式，从封装头中自动确定格式，目前仅支持8k/16k采样率、单通道、pcm, alaw, ulaw三种编码格式  amr  AMR窄带(8k) 压缩录音数据。  amrwb  AMR 宽带(16k) 压缩录音数据。  auto 由引擎自动判断音频数据的格式并解码，支持自动判断wav，mp3，amr/amrwb，aac，m4a，wma格式
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_16k_general  支持采样率为16k的中文普通话语音识别，同时可识别一些简单的方言。格式仅支持pcm16k16bit、mp3、wav，区域仅支持cn-north-4。  chinese_16k_travel 支持采样率为16k的中文普通话语音识别，采用新一代端到端识别算法，并针对网约车质检场景进行了优化。格式仅支持pcm16k16bit、mp3、wav和aac，区域支持cn-east-3和cn-north-4（强烈推荐使用）。  chinese_8k_common  支持采样率为8k的中文普通话语音识别。  chinese_16k_common  支持采样率为16k的中文普通话语音识别。  sichuan_16k_common  支持采样率为16k的中文普通话与四川话方言识别。区域仅支持cn-north-4。  cantonese_16k_common  支持采样率为16k的粤语方言识别。区域仅支持cn-north-4。  shanghai_16k_common  支持采样率为16k的上海话方言识别，区域仅支持cn-north-4。  english_8k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。  english_16k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。
    * addPunc  表示是否在识别结果中添加标点，取值为“yes”和“no”，缺省为“no”。
    * vocabularyId  热词表id，不使用则不填写。
    * digitNorm  表示是否将语音中的数字识别为阿拉伯数字，取值为“yes” 和 “no”，缺省为“yes”。
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为“yes”和“no”，默认为“no”。
    * autoLanguageDetect  表示是否开启普英方自动识别，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $getters = [
            'audioFormat' => 'getAudioFormat',
            'property' => 'getProperty',
            'addPunc' => 'getAddPunc',
            'vocabularyId' => 'getVocabularyId',
            'digitNorm' => 'getDigitNorm',
            'needWordInfo' => 'getNeedWordInfo',
            'autoLanguageDetect' => 'getAutoLanguageDetect'
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
    const AUDIO_FORMAT_PCM16K16BIT = 'pcm16k16bit';
    const AUDIO_FORMAT_PCM8K16BIT = 'pcm8k16bit';
    const AUDIO_FORMAT_ULAW16K8BIT = 'ulaw16k8bit';
    const AUDIO_FORMAT_ULAW8K8BIT = 'ulaw8k8bit';
    const AUDIO_FORMAT_ALAW16K8BIT = 'alaw16k8bit';
    const AUDIO_FORMAT_ALAW8K8BIT = 'alaw8k8bit';
    const AUDIO_FORMAT_MP3 = 'mp3';
    const AUDIO_FORMAT_AAC = 'aac';
    const AUDIO_FORMAT_WAV = 'wav';
    const AUDIO_FORMAT_AMR = 'amr';
    const AUDIO_FORMAT_AMRWB = 'amrwb';
    const AUDIO_FORMAT_AUTO = 'auto';
    const PROPERTY_CHINESE_16K_GENERAL = 'chinese_16k_general';
    const PROPERTY_CHINESE_16K_TRAVEL = 'chinese_16k_travel';
    const PROPERTY_CHINESE_8K_COMMON = 'chinese_8k_common';
    const PROPERTY_CHINESE_16K_COMMON = 'chinese_16k_common';
    const PROPERTY_SICHUAN_16K_COMMON = 'sichuan_16k_common';
    const PROPERTY_CANTONESE_16K_COMMON = 'cantonese_16k_common';
    const PROPERTY_SHANGHAI_16K_COMMON = 'shanghai_16k_common';
    const PROPERTY_ENGLISH_8K_COMMON = 'english_8k_common';
    const PROPERTY_ENGLISH_16K_COMMON = 'english_16k_common';
    const ADD_PUNC_YES = 'yes';
    const ADD_PUNC_NO = 'no';
    const DIGIT_NORM_YES = 'yes';
    const DIGIT_NORM_NO = 'no';
    const NEED_WORD_INFO_YES = 'yes';
    const NEED_WORD_INFO_NO = 'no';
    const AUTO_LANGUAGE_DETECT_YES = 'yes';
    const AUTO_LANGUAGE_DETECT_NO = 'no';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioFormatAllowableValues()
    {
        return [
            self::AUDIO_FORMAT_PCM16K16BIT,
            self::AUDIO_FORMAT_PCM8K16BIT,
            self::AUDIO_FORMAT_ULAW16K8BIT,
            self::AUDIO_FORMAT_ULAW8K8BIT,
            self::AUDIO_FORMAT_ALAW16K8BIT,
            self::AUDIO_FORMAT_ALAW8K8BIT,
            self::AUDIO_FORMAT_MP3,
            self::AUDIO_FORMAT_AAC,
            self::AUDIO_FORMAT_WAV,
            self::AUDIO_FORMAT_AMR,
            self::AUDIO_FORMAT_AMRWB,
            self::AUDIO_FORMAT_AUTO,
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
            self::PROPERTY_CHINESE_16K_GENERAL,
            self::PROPERTY_CHINESE_16K_TRAVEL,
            self::PROPERTY_CHINESE_8K_COMMON,
            self::PROPERTY_CHINESE_16K_COMMON,
            self::PROPERTY_SICHUAN_16K_COMMON,
            self::PROPERTY_CANTONESE_16K_COMMON,
            self::PROPERTY_SHANGHAI_16K_COMMON,
            self::PROPERTY_ENGLISH_8K_COMMON,
            self::PROPERTY_ENGLISH_16K_COMMON,
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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAutoLanguageDetectAllowableValues()
    {
        return [
            self::AUTO_LANGUAGE_DETECT_YES,
            self::AUTO_LANGUAGE_DETECT_NO,
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
        $this->container['vocabularyId'] = isset($data['vocabularyId']) ? $data['vocabularyId'] : null;
        $this->container['digitNorm'] = isset($data['digitNorm']) ? $data['digitNorm'] : null;
        $this->container['needWordInfo'] = isset($data['needWordInfo']) ? $data['needWordInfo'] : null;
        $this->container['autoLanguageDetect'] = isset($data['autoLanguageDetect']) ? $data['autoLanguageDetect'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['audioFormat'] === null) {
            $invalidProperties[] = "'audioFormat' can't be null";
        }
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

            $allowedValues = $this->getAutoLanguageDetectAllowableValues();
                if (!is_null($this->container['autoLanguageDetect']) && !in_array($this->container['autoLanguageDetect'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'autoLanguageDetect', must be one of '%s'",
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
    *  支持语音的格式。  audio_format取值范围：  pcm16k16bit  16k16bit单通道录音数据。  pcm8k16bit   8k16bit单通道录音数据。  ulaw16k8bit  16k8bit ulaw 单通道录音数据。  ulaw8k8bit   8k8bit ulaw 单通道录音数据。  alaw16k8bit  16k8bit alaw 单通道录音数据。  alaw8k8bit   8k8bit alaw 单通道录音数据。  mp3  mp3格式音频。目前仅支持单通道的音频。  aac  aac格式音频。目前仅支持单通道的音频。  wav  带wav封装头的格式，从封装头中自动确定格式，目前仅支持8k/16k采样率、单通道、pcm, alaw, ulaw三种编码格式  amr  AMR窄带(8k) 压缩录音数据。  amrwb  AMR 宽带(16k) 压缩录音数据。  auto 由引擎自动判断音频数据的格式并解码，支持自动判断wav，mp3，amr/amrwb，aac，m4a，wma格式
    *
    * @return string
    */
    public function getAudioFormat()
    {
        return $this->container['audioFormat'];
    }

    /**
    * Sets audioFormat
    *
    * @param string $audioFormat 支持语音的格式。  audio_format取值范围：  pcm16k16bit  16k16bit单通道录音数据。  pcm8k16bit   8k16bit单通道录音数据。  ulaw16k8bit  16k8bit ulaw 单通道录音数据。  ulaw8k8bit   8k8bit ulaw 单通道录音数据。  alaw16k8bit  16k8bit alaw 单通道录音数据。  alaw8k8bit   8k8bit alaw 单通道录音数据。  mp3  mp3格式音频。目前仅支持单通道的音频。  aac  aac格式音频。目前仅支持单通道的音频。  wav  带wav封装头的格式，从封装头中自动确定格式，目前仅支持8k/16k采样率、单通道、pcm, alaw, ulaw三种编码格式  amr  AMR窄带(8k) 压缩录音数据。  amrwb  AMR 宽带(16k) 压缩录音数据。  auto 由引擎自动判断音频数据的格式并解码，支持自动判断wav，mp3，amr/amrwb，aac，m4a，wma格式
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
    *  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_16k_general  支持采样率为16k的中文普通话语音识别，同时可识别一些简单的方言。格式仅支持pcm16k16bit、mp3、wav，区域仅支持cn-north-4。  chinese_16k_travel 支持采样率为16k的中文普通话语音识别，采用新一代端到端识别算法，并针对网约车质检场景进行了优化。格式仅支持pcm16k16bit、mp3、wav和aac，区域支持cn-east-3和cn-north-4（强烈推荐使用）。  chinese_8k_common  支持采样率为8k的中文普通话语音识别。  chinese_16k_common  支持采样率为16k的中文普通话语音识别。  sichuan_16k_common  支持采样率为16k的中文普通话与四川话方言识别。区域仅支持cn-north-4。  cantonese_16k_common  支持采样率为16k的粤语方言识别。区域仅支持cn-north-4。  shanghai_16k_common  支持采样率为16k的上海话方言识别，区域仅支持cn-north-4。  english_8k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。  english_16k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。
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
    * @param string $property 所使用的模型特征串。通常是 “语种_采样率_领域”的形式。  采样率需要与音频采样率保持一致。  当前支持如下模型特征串：  chinese_16k_general  支持采样率为16k的中文普通话语音识别，同时可识别一些简单的方言。格式仅支持pcm16k16bit、mp3、wav，区域仅支持cn-north-4。  chinese_16k_travel 支持采样率为16k的中文普通话语音识别，采用新一代端到端识别算法，并针对网约车质检场景进行了优化。格式仅支持pcm16k16bit、mp3、wav和aac，区域支持cn-east-3和cn-north-4（强烈推荐使用）。  chinese_8k_common  支持采样率为8k的中文普通话语音识别。  chinese_16k_common  支持采样率为16k的中文普通话语音识别。  sichuan_16k_common  支持采样率为16k的中文普通话与四川话方言识别。区域仅支持cn-north-4。  cantonese_16k_common  支持采样率为16k的粤语方言识别。区域仅支持cn-north-4。  shanghai_16k_common  支持采样率为16k的上海话方言识别，区域仅支持cn-north-4。  english_8k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。  english_16k_common  支持采样率为16k的英文识别，区域仅支持cn-east-3，格式仅支持wav。
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
    *  表示是否在识别结果中添加标点，取值为“yes”和“no”，缺省为“no”。
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
    * @param string|null $addPunc 表示是否在识别结果中添加标点，取值为“yes”和“no”，缺省为“no”。
    *
    * @return $this
    */
    public function setAddPunc($addPunc)
    {
        $this->container['addPunc'] = $addPunc;
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
    *  表示是否将语音中的数字识别为阿拉伯数字，取值为“yes” 和 “no”，缺省为“yes”。
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
    * @param string|null $digitNorm 表示是否将语音中的数字识别为阿拉伯数字，取值为“yes” 和 “no”，缺省为“yes”。
    *
    * @return $this
    */
    public function setDigitNorm($digitNorm)
    {
        $this->container['digitNorm'] = $digitNorm;
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
    * Gets autoLanguageDetect
    *  表示是否开启普英方自动识别，取值为“yes”和“no”，默认为“no”。
    *
    * @return string|null
    */
    public function getAutoLanguageDetect()
    {
        return $this->container['autoLanguageDetect'];
    }

    /**
    * Sets autoLanguageDetect
    *
    * @param string|null $autoLanguageDetect 表示是否开启普英方自动识别，取值为“yes”和“no”，默认为“no”。
    *
    * @return $this
    */
    public function setAutoLanguageDetect($autoLanguageDetect)
    {
        $this->container['autoLanguageDetect'] = $autoLanguageDetect;
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

