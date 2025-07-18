<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartChatRoomBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartChatRoomBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomId  智能交互对话ID
    * roomName  智能交互对话名称
    * roomDescription  智能交互对话描述。
    * robotId  机器人ID。
    * coverUrl  对话封面图URL
    * modelInfos  modelInfos
    * voiceConfig  voiceConfig
    * concurrency  **参数解释**： 并发路数。
    * voiceConfigList  语音配置参数列表。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * createTime  创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * exitMuteThreshold  **参数解释**： 静默退出时长。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomId' => 'string',
            'roomName' => 'string',
            'roomDescription' => 'string',
            'robotId' => 'string',
            'coverUrl' => 'string',
            'modelInfos' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ModelInfo',
            'voiceConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig',
            'concurrency' => 'int',
            'voiceConfigList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfigRsp[]',
            'defaultLanguage' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'exitMuteThreshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomId  智能交互对话ID
    * roomName  智能交互对话名称
    * roomDescription  智能交互对话描述。
    * robotId  机器人ID。
    * coverUrl  对话封面图URL
    * modelInfos  modelInfos
    * voiceConfig  voiceConfig
    * concurrency  **参数解释**： 并发路数。
    * voiceConfigList  语音配置参数列表。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * createTime  创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * exitMuteThreshold  **参数解释**： 静默退出时长。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomId' => null,
        'roomName' => null,
        'roomDescription' => null,
        'robotId' => null,
        'coverUrl' => null,
        'modelInfos' => null,
        'voiceConfig' => null,
        'concurrency' => 'int32',
        'voiceConfigList' => null,
        'defaultLanguage' => null,
        'createTime' => null,
        'updateTime' => null,
        'exitMuteThreshold' => 'int32'
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
    * roomId  智能交互对话ID
    * roomName  智能交互对话名称
    * roomDescription  智能交互对话描述。
    * robotId  机器人ID。
    * coverUrl  对话封面图URL
    * modelInfos  modelInfos
    * voiceConfig  voiceConfig
    * concurrency  **参数解释**： 并发路数。
    * voiceConfigList  语音配置参数列表。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * createTime  创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * exitMuteThreshold  **参数解释**： 静默退出时长。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomId' => 'room_id',
            'roomName' => 'room_name',
            'roomDescription' => 'room_description',
            'robotId' => 'robot_id',
            'coverUrl' => 'cover_url',
            'modelInfos' => 'model_infos',
            'voiceConfig' => 'voice_config',
            'concurrency' => 'concurrency',
            'voiceConfigList' => 'voice_config_list',
            'defaultLanguage' => 'default_language',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'exitMuteThreshold' => 'exit_mute_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomId  智能交互对话ID
    * roomName  智能交互对话名称
    * roomDescription  智能交互对话描述。
    * robotId  机器人ID。
    * coverUrl  对话封面图URL
    * modelInfos  modelInfos
    * voiceConfig  voiceConfig
    * concurrency  **参数解释**： 并发路数。
    * voiceConfigList  语音配置参数列表。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * createTime  创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * exitMuteThreshold  **参数解释**： 静默退出时长。
    *
    * @var string[]
    */
    protected static $setters = [
            'roomId' => 'setRoomId',
            'roomName' => 'setRoomName',
            'roomDescription' => 'setRoomDescription',
            'robotId' => 'setRobotId',
            'coverUrl' => 'setCoverUrl',
            'modelInfos' => 'setModelInfos',
            'voiceConfig' => 'setVoiceConfig',
            'concurrency' => 'setConcurrency',
            'voiceConfigList' => 'setVoiceConfigList',
            'defaultLanguage' => 'setDefaultLanguage',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'exitMuteThreshold' => 'setExitMuteThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomId  智能交互对话ID
    * roomName  智能交互对话名称
    * roomDescription  智能交互对话描述。
    * robotId  机器人ID。
    * coverUrl  对话封面图URL
    * modelInfos  modelInfos
    * voiceConfig  voiceConfig
    * concurrency  **参数解释**： 并发路数。
    * voiceConfigList  语音配置参数列表。
    * defaultLanguage  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    * createTime  创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * updateTime  更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    * exitMuteThreshold  **参数解释**： 静默退出时长。
    *
    * @var string[]
    */
    protected static $getters = [
            'roomId' => 'getRoomId',
            'roomName' => 'getRoomName',
            'roomDescription' => 'getRoomDescription',
            'robotId' => 'getRobotId',
            'coverUrl' => 'getCoverUrl',
            'modelInfos' => 'getModelInfos',
            'voiceConfig' => 'getVoiceConfig',
            'concurrency' => 'getConcurrency',
            'voiceConfigList' => 'getVoiceConfigList',
            'defaultLanguage' => 'getDefaultLanguage',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'exitMuteThreshold' => 'getExitMuteThreshold'
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
    const DEFAULT_LANGUAGE_ESP = 'ESP';
    const DEFAULT_LANGUAGE_POR = 'por';
    const DEFAULT_LANGUAGE_ARABIC = 'Arabic';
    const DEFAULT_LANGUAGE_THAI = 'Thai';
    

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
            self::DEFAULT_LANGUAGE_ESP,
            self::DEFAULT_LANGUAGE_POR,
            self::DEFAULT_LANGUAGE_ARABIC,
            self::DEFAULT_LANGUAGE_THAI,
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['roomName'] = isset($data['roomName']) ? $data['roomName'] : null;
        $this->container['roomDescription'] = isset($data['roomDescription']) ? $data['roomDescription'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['coverUrl'] = isset($data['coverUrl']) ? $data['coverUrl'] : null;
        $this->container['modelInfos'] = isset($data['modelInfos']) ? $data['modelInfos'] : null;
        $this->container['voiceConfig'] = isset($data['voiceConfig']) ? $data['voiceConfig'] : null;
        $this->container['concurrency'] = isset($data['concurrency']) ? $data['concurrency'] : null;
        $this->container['voiceConfigList'] = isset($data['voiceConfigList']) ? $data['voiceConfigList'] : null;
        $this->container['defaultLanguage'] = isset($data['defaultLanguage']) ? $data['defaultLanguage'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['exitMuteThreshold'] = isset($data['exitMuteThreshold']) ? $data['exitMuteThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roomName']) && (mb_strlen($this->container['roomName']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['roomName']) && (mb_strlen($this->container['roomName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomDescription']) && (mb_strlen($this->container['roomDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'roomDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['roomDescription']) && (mb_strlen($this->container['roomDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverUrl']) && (mb_strlen($this->container['coverUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'coverUrl', the character length must be bigger than or equal to 0.";
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

            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['exitMuteThreshold']) && ($this->container['exitMuteThreshold'] > 1440)) {
                $invalidProperties[] = "invalid value for 'exitMuteThreshold', must be smaller than or equal to 1440.";
            }
            if (!is_null($this->container['exitMuteThreshold']) && ($this->container['exitMuteThreshold'] < 0)) {
                $invalidProperties[] = "invalid value for 'exitMuteThreshold', must be bigger than or equal to 0.";
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
    * Gets roomId
    *  智能交互对话ID
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 智能交互对话ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets roomName
    *  智能交互对话名称
    *
    * @return string|null
    */
    public function getRoomName()
    {
        return $this->container['roomName'];
    }

    /**
    * Sets roomName
    *
    * @param string|null $roomName 智能交互对话名称
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
    *  智能交互对话描述。
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
    * @param string|null $roomDescription 智能交互对话描述。
    *
    * @return $this
    */
    public function setRoomDescription($roomDescription)
    {
        $this->container['roomDescription'] = $roomDescription;
        return $this;
    }

    /**
    * Gets robotId
    *  机器人ID。
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
    * @param string|null $robotId 机器人ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets coverUrl
    *  对话封面图URL
    *
    * @return string|null
    */
    public function getCoverUrl()
    {
        return $this->container['coverUrl'];
    }

    /**
    * Sets coverUrl
    *
    * @param string|null $coverUrl 对话封面图URL
    *
    * @return $this
    */
    public function setCoverUrl($coverUrl)
    {
        $this->container['coverUrl'] = $coverUrl;
        return $this;
    }

    /**
    * Gets modelInfos
    *  modelInfos
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ModelInfo|null
    */
    public function getModelInfos()
    {
        return $this->container['modelInfos'];
    }

    /**
    * Sets modelInfos
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ModelInfo|null $modelInfos modelInfos
    *
    * @return $this
    */
    public function setModelInfos($modelInfos)
    {
        $this->container['modelInfos'] = $modelInfos;
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
    * Gets voiceConfigList
    *  语音配置参数列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfigRsp[]|null
    */
    public function getVoiceConfigList()
    {
        return $this->container['voiceConfigList'];
    }

    /**
    * Sets voiceConfigList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfigRsp[]|null $voiceConfigList 语音配置参数列表。
    *
    * @return $this
    */
    public function setVoiceConfigList($voiceConfigList)
    {
        $this->container['voiceConfigList'] = $voiceConfigList;
        return $this;
    }

    /**
    * Gets defaultLanguage
    *  默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
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
    * @param string|null $defaultLanguage 默认语言，智能交互接口使用。默认值CN。 * CN：简体中文。 * EN：英语。 * ESP：西班牙语（仅海外站点支持） * por：葡萄牙语（仅海外站点支持） * Arabic：阿拉伯语（仅海外站点支持） * Thai：泰语（仅海外站点支持）
    *
    * @return $this
    */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->container['defaultLanguage'] = $defaultLanguage;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如“2021-01-10T08:43:17Z”。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets exitMuteThreshold
    *  **参数解释**： 静默退出时长。
    *
    * @return int|null
    */
    public function getExitMuteThreshold()
    {
        return $this->container['exitMuteThreshold'];
    }

    /**
    * Sets exitMuteThreshold
    *
    * @param int|null $exitMuteThreshold **参数解释**： 静默退出时长。
    *
    * @return $this
    */
    public function setExitMuteThreshold($exitMuteThreshold)
    {
        $this->container['exitMuteThreshold'] = $exitMuteThreshold;
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

