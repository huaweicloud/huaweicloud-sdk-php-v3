<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSmartChatRoomReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSmartChatRoomReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomName  对话名称
    * roomDescription  对话描述。
    * videoConfig  videoConfig
    * modelAssetId  数字人模型资产ID。
    * voiceConfig  voiceConfig
    * voiceConfigList  语音配置参数列表。
    * robotId  机器人ID。获取方法请参考[创建应用](CreateRobot.xml)。
    * concurrency  **参数解释**： 并发路数。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。
    * backgroundConfig  backgroundConfig
    * layerConfig  图层配置。
    * reviewConfig  reviewConfig
    * chatSubtitleConfig  chatSubtitleConfig
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomName' => 'string',
            'roomDescription' => 'string',
            'videoConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig',
            'modelAssetId' => 'string',
            'voiceConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig',
            'voiceConfigList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ChatVoiceConfig[]',
            'robotId' => 'string',
            'concurrency' => 'int',
            'defaultLanguage' => 'string',
            'backgroundConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundConfigInfo',
            'layerConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LayerConfig[]',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig',
            'chatSubtitleConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ChatSubtitleConfig',
            'chatVideoType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomName  对话名称
    * roomDescription  对话描述。
    * videoConfig  videoConfig
    * modelAssetId  数字人模型资产ID。
    * voiceConfig  voiceConfig
    * voiceConfigList  语音配置参数列表。
    * robotId  机器人ID。获取方法请参考[创建应用](CreateRobot.xml)。
    * concurrency  **参数解释**： 并发路数。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。
    * backgroundConfig  backgroundConfig
    * layerConfig  图层配置。
    * reviewConfig  reviewConfig
    * chatSubtitleConfig  chatSubtitleConfig
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomName' => null,
        'roomDescription' => null,
        'videoConfig' => null,
        'modelAssetId' => null,
        'voiceConfig' => null,
        'voiceConfigList' => null,
        'robotId' => null,
        'concurrency' => 'int32',
        'defaultLanguage' => null,
        'backgroundConfig' => null,
        'layerConfig' => null,
        'reviewConfig' => null,
        'chatSubtitleConfig' => null,
        'chatVideoType' => null
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
    * roomName  对话名称
    * roomDescription  对话描述。
    * videoConfig  videoConfig
    * modelAssetId  数字人模型资产ID。
    * voiceConfig  voiceConfig
    * voiceConfigList  语音配置参数列表。
    * robotId  机器人ID。获取方法请参考[创建应用](CreateRobot.xml)。
    * concurrency  **参数解释**： 并发路数。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。
    * backgroundConfig  backgroundConfig
    * layerConfig  图层配置。
    * reviewConfig  reviewConfig
    * chatSubtitleConfig  chatSubtitleConfig
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomName' => 'room_name',
            'roomDescription' => 'room_description',
            'videoConfig' => 'video_config',
            'modelAssetId' => 'model_asset_id',
            'voiceConfig' => 'voice_config',
            'voiceConfigList' => 'voice_config_list',
            'robotId' => 'robot_id',
            'concurrency' => 'concurrency',
            'defaultLanguage' => 'default_language',
            'backgroundConfig' => 'background_config',
            'layerConfig' => 'layer_config',
            'reviewConfig' => 'review_config',
            'chatSubtitleConfig' => 'chat_subtitle_config',
            'chatVideoType' => 'chat_video_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomName  对话名称
    * roomDescription  对话描述。
    * videoConfig  videoConfig
    * modelAssetId  数字人模型资产ID。
    * voiceConfig  voiceConfig
    * voiceConfigList  语音配置参数列表。
    * robotId  机器人ID。获取方法请参考[创建应用](CreateRobot.xml)。
    * concurrency  **参数解释**： 并发路数。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。
    * backgroundConfig  backgroundConfig
    * layerConfig  图层配置。
    * reviewConfig  reviewConfig
    * chatSubtitleConfig  chatSubtitleConfig
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @var string[]
    */
    protected static $setters = [
            'roomName' => 'setRoomName',
            'roomDescription' => 'setRoomDescription',
            'videoConfig' => 'setVideoConfig',
            'modelAssetId' => 'setModelAssetId',
            'voiceConfig' => 'setVoiceConfig',
            'voiceConfigList' => 'setVoiceConfigList',
            'robotId' => 'setRobotId',
            'concurrency' => 'setConcurrency',
            'defaultLanguage' => 'setDefaultLanguage',
            'backgroundConfig' => 'setBackgroundConfig',
            'layerConfig' => 'setLayerConfig',
            'reviewConfig' => 'setReviewConfig',
            'chatSubtitleConfig' => 'setChatSubtitleConfig',
            'chatVideoType' => 'setChatVideoType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomName  对话名称
    * roomDescription  对话描述。
    * videoConfig  videoConfig
    * modelAssetId  数字人模型资产ID。
    * voiceConfig  voiceConfig
    * voiceConfigList  语音配置参数列表。
    * robotId  机器人ID。获取方法请参考[创建应用](CreateRobot.xml)。
    * concurrency  **参数解释**： 并发路数。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。
    * backgroundConfig  backgroundConfig
    * layerConfig  图层配置。
    * reviewConfig  reviewConfig
    * chatSubtitleConfig  chatSubtitleConfig
    * chatVideoType  智能交互对话端配置。 * COMPUTER: 电脑端 * MOBILE: 手机端 * HUB: 大屏
    *
    * @var string[]
    */
    protected static $getters = [
            'roomName' => 'getRoomName',
            'roomDescription' => 'getRoomDescription',
            'videoConfig' => 'getVideoConfig',
            'modelAssetId' => 'getModelAssetId',
            'voiceConfig' => 'getVoiceConfig',
            'voiceConfigList' => 'getVoiceConfigList',
            'robotId' => 'getRobotId',
            'concurrency' => 'getConcurrency',
            'defaultLanguage' => 'getDefaultLanguage',
            'backgroundConfig' => 'getBackgroundConfig',
            'layerConfig' => 'getLayerConfig',
            'reviewConfig' => 'getReviewConfig',
            'chatSubtitleConfig' => 'getChatSubtitleConfig',
            'chatVideoType' => 'getChatVideoType'
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
    const DEFAULT_LANGUAGE_CN = 'CN';
    const DEFAULT_LANGUAGE_EN = 'EN';
    const CHAT_VIDEO_TYPE_COMPUTER = 'COMPUTER';
    const CHAT_VIDEO_TYPE_MOBILE = 'MOBILE';
    const CHAT_VIDEO_TYPE_HUB = 'HUB';
    

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
        $this->container['roomName'] = isset($data['roomName']) ? $data['roomName'] : null;
        $this->container['roomDescription'] = isset($data['roomDescription']) ? $data['roomDescription'] : null;
        $this->container['videoConfig'] = isset($data['videoConfig']) ? $data['videoConfig'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['voiceConfig'] = isset($data['voiceConfig']) ? $data['voiceConfig'] : null;
        $this->container['voiceConfigList'] = isset($data['voiceConfigList']) ? $data['voiceConfigList'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['concurrency'] = isset($data['concurrency']) ? $data['concurrency'] : null;
        $this->container['defaultLanguage'] = isset($data['defaultLanguage']) ? $data['defaultLanguage'] : null;
        $this->container['backgroundConfig'] = isset($data['backgroundConfig']) ? $data['backgroundConfig'] : null;
        $this->container['layerConfig'] = isset($data['layerConfig']) ? $data['layerConfig'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
        $this->container['chatSubtitleConfig'] = isset($data['chatSubtitleConfig']) ? $data['chatSubtitleConfig'] : null;
        $this->container['chatVideoType'] = isset($data['chatVideoType']) ? $data['chatVideoType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['roomName'] === null) {
            $invalidProperties[] = "'roomName' can't be null";
        }
            if ((mb_strlen($this->container['roomName']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['roomName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomDescription']) && (mb_strlen($this->container['roomDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'roomDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['roomDescription']) && (mb_strlen($this->container['roomDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['concurrency']) && ($this->container['concurrency'] > 1024)) {
                $invalidProperties[] = "invalid value for 'concurrency', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['concurrency']) && ($this->container['concurrency'] < 0)) {
                $invalidProperties[] = "invalid value for 'concurrency', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getDefaultLanguageAllowableValues();
                if (!is_null($this->container['defaultLanguage']) && !in_array($this->container['defaultLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'defaultLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets roomName
    *  对话名称
    *
    * @return string
    */
    public function getRoomName()
    {
        return $this->container['roomName'];
    }

    /**
    * Sets roomName
    *
    * @param string $roomName 对话名称
    *
    * @return $this
    */
    public function setRoomName($roomName)
    {
        $this->container['roomName'] = $roomName;
        return $this;
    }

    /**
    * Gets roomDescription
    *  对话描述。
    *
    * @return string|null
    */
    public function getRoomDescription()
    {
        return $this->container['roomDescription'];
    }

    /**
    * Sets roomDescription
    *
    * @param string|null $roomDescription 对话描述。
    *
    * @return $this
    */
    public function setRoomDescription($roomDescription)
    {
        $this->container['roomDescription'] = $roomDescription;
        return $this;
    }

    /**
    * Gets videoConfig
    *  videoConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig|null
    */
    public function getVideoConfig()
    {
        return $this->container['videoConfig'];
    }

    /**
    * Sets videoConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VideoConfig|null $videoConfig videoConfig
    *
    * @return $this
    */
    public function setVideoConfig($videoConfig)
    {
        $this->container['videoConfig'] = $videoConfig;
        return $this;
    }

    /**
    * Gets modelAssetId
    *  数字人模型资产ID。
    *
    * @return string|null
    */
    public function getModelAssetId()
    {
        return $this->container['modelAssetId'];
    }

    /**
    * Sets modelAssetId
    *
    * @param string|null $modelAssetId 数字人模型资产ID。
    *
    * @return $this
    */
    public function setModelAssetId($modelAssetId)
    {
        $this->container['modelAssetId'] = $modelAssetId;
        return $this;
    }

    /**
    * Gets voiceConfig
    *  voiceConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig|null
    */
    public function getVoiceConfig()
    {
        return $this->container['voiceConfig'];
    }

    /**
    * Sets voiceConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig|null $voiceConfig voiceConfig
    *
    * @return $this
    */
    public function setVoiceConfig($voiceConfig)
    {
        $this->container['voiceConfig'] = $voiceConfig;
        return $this;
    }

    /**
    * Gets voiceConfigList
    *  语音配置参数列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ChatVoiceConfig[]|null
    */
    public function getVoiceConfigList()
    {
        return $this->container['voiceConfigList'];
    }

    /**
    * Sets voiceConfigList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ChatVoiceConfig[]|null $voiceConfigList 语音配置参数列表。
    *
    * @return $this
    */
    public function setVoiceConfigList($voiceConfigList)
    {
        $this->container['voiceConfigList'] = $voiceConfigList;
        return $this;
    }

    /**
    * Gets robotId
    *  机器人ID。获取方法请参考[创建应用](CreateRobot.xml)。
    *
    * @return string|null
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string|null $robotId 机器人ID。获取方法请参考[创建应用](CreateRobot.xml)。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets concurrency
    *  **参数解释**： 并发路数。
    *
    * @return int|null
    */
    public function getConcurrency()
    {
        return $this->container['concurrency'];
    }

    /**
    * Sets concurrency
    *
    * @param int|null $concurrency **参数解释**： 并发路数。
    *
    * @return $this
    */
    public function setConcurrency($concurrency)
    {
        $this->container['concurrency'] = $concurrency;
        return $this;
    }

    /**
    * Gets defaultLanguage
    *  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。
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
    * @param string|null $defaultLanguage 默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。
    *
    * @return $this
    */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->container['defaultLanguage'] = $defaultLanguage;
        return $this;
    }

    /**
    * Gets backgroundConfig
    *  backgroundConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundConfigInfo|null
    */
    public function getBackgroundConfig()
    {
        return $this->container['backgroundConfig'];
    }

    /**
    * Sets backgroundConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\BackgroundConfigInfo|null $backgroundConfig backgroundConfig
    *
    * @return $this
    */
    public function setBackgroundConfig($backgroundConfig)
    {
        $this->container['backgroundConfig'] = $backgroundConfig;
        return $this;
    }

    /**
    * Gets layerConfig
    *  图层配置。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerConfig[]|null
    */
    public function getLayerConfig()
    {
        return $this->container['layerConfig'];
    }

    /**
    * Sets layerConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LayerConfig[]|null $layerConfig 图层配置。
    *
    * @return $this
    */
    public function setLayerConfig($layerConfig)
    {
        $this->container['layerConfig'] = $layerConfig;
        return $this;
    }

    /**
    * Gets reviewConfig
    *  reviewConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null
    */
    public function getReviewConfig()
    {
        return $this->container['reviewConfig'];
    }

    /**
    * Sets reviewConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null $reviewConfig reviewConfig
    *
    * @return $this
    */
    public function setReviewConfig($reviewConfig)
    {
        $this->container['reviewConfig'] = $reviewConfig;
        return $this;
    }

    /**
    * Gets chatSubtitleConfig
    *  chatSubtitleConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ChatSubtitleConfig|null
    */
    public function getChatSubtitleConfig()
    {
        return $this->container['chatSubtitleConfig'];
    }

    /**
    * Sets chatSubtitleConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ChatSubtitleConfig|null $chatSubtitleConfig chatSubtitleConfig
    *
    * @return $this
    */
    public function setChatSubtitleConfig($chatSubtitleConfig)
    {
        $this->container['chatSubtitleConfig'] = $chatSubtitleConfig;
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

