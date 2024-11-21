<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartSmartChatJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartSmartChatJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  智能交互对话任务ID。
    * language  language
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * region  算力所在region。 * cn-north-4: 北京4 * cn-southwest-2: 贵阳1
    * chatAccessAddress  智能交互接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'rtcRoomInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList',
            'chatSubtitleConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatSubtitleConfig',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVideoConfig',
            'voiceConfigList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVoiceConfig[]',
            'chatVideoType' => 'string',
            'region' => 'string',
            'chatAccessAddress' => 'string',
            'isTransparent' => 'bool',
            'defaultLanguage' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  智能交互对话任务ID。
    * language  language
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * region  算力所在region。 * cn-north-4: 北京4 * cn-southwest-2: 贵阳1
    * chatAccessAddress  智能交互接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'language' => null,
        'rtcRoomInfo' => null,
        'chatSubtitleConfig' => null,
        'videoConfig' => null,
        'voiceConfigList' => null,
        'chatVideoType' => null,
        'region' => null,
        'chatAccessAddress' => null,
        'isTransparent' => null,
        'defaultLanguage' => null,
        'xRequestId' => null
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
    * jobId  智能交互对话任务ID。
    * language  language
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * region  算力所在region。 * cn-north-4: 北京4 * cn-southwest-2: 贵阳1
    * chatAccessAddress  智能交互接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'language' => 'language',
            'rtcRoomInfo' => 'rtc_room_info',
            'chatSubtitleConfig' => 'chat_subtitle_config',
            'videoConfig' => 'video_config',
            'voiceConfigList' => 'voice_config_list',
            'chatVideoType' => 'chat_video_type',
            'region' => 'region',
            'chatAccessAddress' => 'chat_access_address',
            'isTransparent' => 'is_transparent',
            'defaultLanguage' => 'default_language',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  智能交互对话任务ID。
    * language  language
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * region  算力所在region。 * cn-north-4: 北京4 * cn-southwest-2: 贵阳1
    * chatAccessAddress  智能交互接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'language' => 'setLanguage',
            'rtcRoomInfo' => 'setRtcRoomInfo',
            'chatSubtitleConfig' => 'setChatSubtitleConfig',
            'videoConfig' => 'setVideoConfig',
            'voiceConfigList' => 'setVoiceConfigList',
            'chatVideoType' => 'setChatVideoType',
            'region' => 'setRegion',
            'chatAccessAddress' => 'setChatAccessAddress',
            'isTransparent' => 'setIsTransparent',
            'defaultLanguage' => 'setDefaultLanguage',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  智能交互对话任务ID。
    * language  language
    * rtcRoomInfo  rtcRoomInfo
    * chatSubtitleConfig  chatSubtitleConfig
    * videoConfig  videoConfig
    * voiceConfigList  语音配置参数列表。
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    * region  算力所在region。 * cn-north-4: 北京4 * cn-southwest-2: 贵阳1
    * chatAccessAddress  智能交互接入地址。
    * isTransparent  是否透明背景
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'language' => 'getLanguage',
            'rtcRoomInfo' => 'getRtcRoomInfo',
            'chatSubtitleConfig' => 'getChatSubtitleConfig',
            'videoConfig' => 'getVideoConfig',
            'voiceConfigList' => 'getVoiceConfigList',
            'chatVideoType' => 'getChatVideoType',
            'region' => 'getRegion',
            'chatAccessAddress' => 'getChatAccessAddress',
            'isTransparent' => 'getIsTransparent',
            'defaultLanguage' => 'getDefaultLanguage',
            'xRequestId' => 'getXRequestId'
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
    const CHAT_VIDEO_TYPE_COMPUTER = 'COMPUTER';
    const CHAT_VIDEO_TYPE_MOBILE = 'MOBILE';
    const CHAT_VIDEO_TYPE_HUB = 'HUB';
    const DEFAULT_LANGUAGE_CN = 'CN';
    const DEFAULT_LANGUAGE_EN = 'EN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChatVideoTypeAllowableValues()
    {
        return [
            self::CHAT_VIDEO_TYPE_COMPUTER,
            self::CHAT_VIDEO_TYPE_MOBILE,
            self::CHAT_VIDEO_TYPE_HUB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDefaultLanguageAllowableValues()
    {
        return [
            self::DEFAULT_LANGUAGE_CN,
            self::DEFAULT_LANGUAGE_EN,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['rtcRoomInfo'] = isset($data['rtcRoomInfo']) ? $data['rtcRoomInfo'] : null;
        $this->container['chatSubtitleConfig'] = isset($data['chatSubtitleConfig']) ? $data['chatSubtitleConfig'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['voiceConfigList'] = isset($data['voiceConfigList']) ? $data['voiceConfigList'] : null;
        $this->container['chatVideoType'] = isset($data['chatVideoType']) ? $data['chatVideoType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['chatAccessAddress'] = isset($data['chatAccessAddress']) ? $data['chatAccessAddress'] : null;
        $this->container['isTransparent'] = isset($data['isTransparent']) ? $data['isTransparent'] : null;
        $this->container['defaultLanguage'] = isset($data['defaultLanguage']) ? $data['defaultLanguage'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getChatVideoTypeAllowableValues();
                if (!is_null($this->container['chatVideoType']) && !in_array($this->container['chatVideoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chatVideoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chatVideoType']) && (mb_strlen($this->container['chatVideoType']) > 64)) {
                $invalidProperties[] = "invalid value for 'chatVideoType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chatVideoType']) && (mb_strlen($this->container['chatVideoType']) < 1)) {
                $invalidProperties[] = "invalid value for 'chatVideoType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chatAccessAddress']) && (mb_strlen($this->container['chatAccessAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'chatAccessAddress', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chatAccessAddress']) && (mb_strlen($this->container['chatAccessAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'chatAccessAddress', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDefaultLanguageAllowableValues();
                if (!is_null($this->container['defaultLanguage']) && !in_array($this->container['defaultLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'defaultLanguage', must be one of '%s'",
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
    * Gets jobId
    *  智能交互对话任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 智能交互对话任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets rtcRoomInfo
    *  rtcRoomInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList|null
    */
    public function getRtcRoomInfo()
    {
        return $this->container['rtcRoomInfo'];
    }

    /**
    * Sets rtcRoomInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList|null $rtcRoomInfo rtcRoomInfo
    *
    * @return $this
    */
    public function setRtcRoomInfo($rtcRoomInfo)
    {
        $this->container['rtcRoomInfo'] = $rtcRoomInfo;
        return $this;
    }

    /**
    * Gets chatSubtitleConfig
    *  chatSubtitleConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatSubtitleConfig|null
    */
    public function getChatSubtitleConfig()
    {
        return $this->container['chatSubtitleConfig'];
    }

    /**
    * Sets chatSubtitleConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatSubtitleConfig|null $chatSubtitleConfig chatSubtitleConfig
    *
    * @return $this
    */
    public function setChatSubtitleConfig($chatSubtitleConfig)
    {
        $this->container['chatSubtitleConfig'] = $chatSubtitleConfig;
        return $this;
    }

    /**
    * Gets videoConfig
    *  videoConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVideoConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVideoConfig|null $videoConfig videoConfig
    *
    * @return $this
    */
    public function setVideoConfig($videoConfig)
    {
        $this->container['videoConfig'] = $videoConfig;
        return $this;
    }

    /**
    * Gets voiceConfigList
    *  语音配置参数列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVoiceConfig[]|null
    */
    public function getVoiceConfigList()
    {
        return $this->container['voiceConfigList'];
    }

    /**
    * Sets voiceConfigList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatVoiceConfig[]|null $voiceConfigList 语音配置参数列表。
    *
    * @return $this
    */
    public function setVoiceConfigList($voiceConfigList)
    {
        $this->container['voiceConfigList'] = $voiceConfigList;
        return $this;
    }

    /**
    * Gets chatVideoType
    *  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @return string|null
    */
    public function getChatVideoType()
    {
        return $this->container['chatVideoType'];
    }

    /**
    * Sets chatVideoType
    *
    * @param string|null $chatVideoType 智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @return $this
    */
    public function setChatVideoType($chatVideoType)
    {
        $this->container['chatVideoType'] = $chatVideoType;
        return $this;
    }

    /**
    * Gets region
    *  算力所在region。 * cn-north-4: 北京4 * cn-southwest-2: 贵阳1
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 算力所在region。 * cn-north-4: 北京4 * cn-southwest-2: 贵阳1
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets chatAccessAddress
    *  智能交互接入地址。
    *
    * @return string|null
    */
    public function getChatAccessAddress()
    {
        return $this->container['chatAccessAddress'];
    }

    /**
    * Sets chatAccessAddress
    *
    * @param string|null $chatAccessAddress 智能交互接入地址。
    *
    * @return $this
    */
    public function setChatAccessAddress($chatAccessAddress)
    {
        $this->container['chatAccessAddress'] = $chatAccessAddress;
        return $this;
    }

    /**
    * Gets isTransparent
    *  是否透明背景
    *
    * @return bool|null
    */
    public function getIsTransparent()
    {
        return $this->container['isTransparent'];
    }

    /**
    * Sets isTransparent
    *
    * @param bool|null $isTransparent 是否透明背景
    *
    * @return $this
    */
    public function setIsTransparent($isTransparent)
    {
        $this->container['isTransparent'] = $isTransparent;
        return $this;
    }

    /**
    * Gets defaultLanguage
    *  默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。
    *
    * @return string|null
    */
    public function getDefaultLanguage()
    {
        return $this->container['defaultLanguage'];
    }

    /**
    * Sets defaultLanguage
    *
    * @param string|null $defaultLanguage 默认语言，智能交互接口使用。默认值CN。 * CN：中文。 * EN：英文。
    *
    * @return $this
    */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->container['defaultLanguage'] = $defaultLanguage;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

