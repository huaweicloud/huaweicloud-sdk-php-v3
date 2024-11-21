<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RobotInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RobotInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * robotId  应用ID。
    * name  应用名称。
    * roomId  智能交互对话房间ID。
    * appId  第三方应用ID。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型；8：奇妙问
    * appKey  应用的AccessKey或帐号。
    * robotType  robotType
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * isIflyProduction  是否为正式环境
    * tailSilenceTime  语音识别后端点静音时长默认500ms
    * roleId  奇妙问角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    * enableQuestionAudit  是否开启提问文本审核开关
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'robotId' => 'string',
            'name' => 'string',
            'roomId' => 'string',
            'appId' => 'string',
            'appType' => 'int',
            'appKey' => 'string',
            'robotType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RobotTypeEnum',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'createTime' => 'string',
            'updateTime' => 'string',
            'region' => 'int',
            'cbsProjectId' => 'string',
            'llmUrl' => 'string',
            'isStream' => 'bool',
            'chatRounds' => 'int',
            'isIflyProduction' => 'bool',
            'tailSilenceTime' => 'int',
            'roleId' => 'string',
            'sisRegion' => 'int',
            'sisProjectId' => 'string',
            'enableHotWords' => 'bool',
            'enableQuestionAudit' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * robotId  应用ID。
    * name  应用名称。
    * roomId  智能交互对话房间ID。
    * appId  第三方应用ID。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型；8：奇妙问
    * appKey  应用的AccessKey或帐号。
    * robotType  robotType
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * isIflyProduction  是否为正式环境
    * tailSilenceTime  语音识别后端点静音时长默认500ms
    * roleId  奇妙问角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    * enableQuestionAudit  是否开启提问文本审核开关
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'robotId' => null,
        'name' => null,
        'roomId' => null,
        'appId' => null,
        'appType' => null,
        'appKey' => null,
        'robotType' => null,
        'language' => null,
        'createTime' => null,
        'updateTime' => null,
        'region' => null,
        'cbsProjectId' => null,
        'llmUrl' => null,
        'isStream' => null,
        'chatRounds' => null,
        'isIflyProduction' => null,
        'tailSilenceTime' => null,
        'roleId' => null,
        'sisRegion' => null,
        'sisProjectId' => null,
        'enableHotWords' => null,
        'enableQuestionAudit' => null
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
    * robotId  应用ID。
    * name  应用名称。
    * roomId  智能交互对话房间ID。
    * appId  第三方应用ID。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型；8：奇妙问
    * appKey  应用的AccessKey或帐号。
    * robotType  robotType
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * isIflyProduction  是否为正式环境
    * tailSilenceTime  语音识别后端点静音时长默认500ms
    * roleId  奇妙问角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    * enableQuestionAudit  是否开启提问文本审核开关
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'robotId' => 'robot_id',
            'name' => 'name',
            'roomId' => 'room_id',
            'appId' => 'app_id',
            'appType' => 'app_type',
            'appKey' => 'app_key',
            'robotType' => 'robot_type',
            'language' => 'language',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'region' => 'region',
            'cbsProjectId' => 'cbs_project_id',
            'llmUrl' => 'llm_url',
            'isStream' => 'is_stream',
            'chatRounds' => 'chat_rounds',
            'isIflyProduction' => 'is_ifly_production',
            'tailSilenceTime' => 'tail_silence_time',
            'roleId' => 'role_id',
            'sisRegion' => 'sis_region',
            'sisProjectId' => 'sis_project_id',
            'enableHotWords' => 'enable_hot_words',
            'enableQuestionAudit' => 'enable_question_audit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * robotId  应用ID。
    * name  应用名称。
    * roomId  智能交互对话房间ID。
    * appId  第三方应用ID。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型；8：奇妙问
    * appKey  应用的AccessKey或帐号。
    * robotType  robotType
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * isIflyProduction  是否为正式环境
    * tailSilenceTime  语音识别后端点静音时长默认500ms
    * roleId  奇妙问角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    * enableQuestionAudit  是否开启提问文本审核开关
    *
    * @var string[]
    */
    protected static $setters = [
            'robotId' => 'setRobotId',
            'name' => 'setName',
            'roomId' => 'setRoomId',
            'appId' => 'setAppId',
            'appType' => 'setAppType',
            'appKey' => 'setAppKey',
            'robotType' => 'setRobotType',
            'language' => 'setLanguage',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'region' => 'setRegion',
            'cbsProjectId' => 'setCbsProjectId',
            'llmUrl' => 'setLlmUrl',
            'isStream' => 'setIsStream',
            'chatRounds' => 'setChatRounds',
            'isIflyProduction' => 'setIsIflyProduction',
            'tailSilenceTime' => 'setTailSilenceTime',
            'roleId' => 'setRoleId',
            'sisRegion' => 'setSisRegion',
            'sisProjectId' => 'setSisProjectId',
            'enableHotWords' => 'setEnableHotWords',
            'enableQuestionAudit' => 'setEnableQuestionAudit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * robotId  应用ID。
    * name  应用名称。
    * roomId  智能交互对话房间ID。
    * appId  第三方应用ID。
    * appType  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型；8：奇妙问
    * appKey  应用的AccessKey或帐号。
    * robotType  robotType
    * language  language
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * region  CBS所在区域
    * cbsProjectId  CBS所在区域的projectId
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * isIflyProduction  是否为正式环境
    * tailSilenceTime  语音识别后端点静音时长默认500ms
    * roleId  奇妙问角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    * enableQuestionAudit  是否开启提问文本审核开关
    *
    * @var string[]
    */
    protected static $getters = [
            'robotId' => 'getRobotId',
            'name' => 'getName',
            'roomId' => 'getRoomId',
            'appId' => 'getAppId',
            'appType' => 'getAppType',
            'appKey' => 'getAppKey',
            'robotType' => 'getRobotType',
            'language' => 'getLanguage',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'region' => 'getRegion',
            'cbsProjectId' => 'getCbsProjectId',
            'llmUrl' => 'getLlmUrl',
            'isStream' => 'getIsStream',
            'chatRounds' => 'getChatRounds',
            'isIflyProduction' => 'getIsIflyProduction',
            'tailSilenceTime' => 'getTailSilenceTime',
            'roleId' => 'getRoleId',
            'sisRegion' => 'getSisRegion',
            'sisProjectId' => 'getSisProjectId',
            'enableHotWords' => 'getEnableHotWords',
            'enableQuestionAudit' => 'getEnableQuestionAudit'
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
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['robotType'] = isset($data['robotType']) ? $data['robotType'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['cbsProjectId'] = isset($data['cbsProjectId']) ? $data['cbsProjectId'] : null;
        $this->container['llmUrl'] = isset($data['llmUrl']) ? $data['llmUrl'] : null;
        $this->container['isStream'] = isset($data['isStream']) ? $data['isStream'] : null;
        $this->container['chatRounds'] = isset($data['chatRounds']) ? $data['chatRounds'] : null;
        $this->container['isIflyProduction'] = isset($data['isIflyProduction']) ? $data['isIflyProduction'] : null;
        $this->container['tailSilenceTime'] = isset($data['tailSilenceTime']) ? $data['tailSilenceTime'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['sisRegion'] = isset($data['sisRegion']) ? $data['sisRegion'] : null;
        $this->container['sisProjectId'] = isset($data['sisProjectId']) ? $data['sisProjectId'] : null;
        $this->container['enableHotWords'] = isset($data['enableHotWords']) ? $data['enableHotWords'] : null;
        $this->container['enableQuestionAudit'] = isset($data['enableQuestionAudit']) ? $data['enableQuestionAudit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 64)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appType']) && ($this->container['appType'] > 32)) {
                $invalidProperties[] = "invalid value for 'appType', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['appType']) && ($this->container['appType'] < 0)) {
                $invalidProperties[] = "invalid value for 'appType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['region']) && ($this->container['region'] > 32)) {
                $invalidProperties[] = "invalid value for 'region', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['region']) && ($this->container['region'] < 0)) {
                $invalidProperties[] = "invalid value for 'region', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cbsProjectId']) && (mb_strlen($this->container['cbsProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cbsProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cbsProjectId']) && (mb_strlen($this->container['cbsProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'cbsProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['llmUrl']) && (mb_strlen($this->container['llmUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'llmUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['llmUrl']) && (mb_strlen($this->container['llmUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'llmUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chatRounds']) && ($this->container['chatRounds'] > 10)) {
                $invalidProperties[] = "invalid value for 'chatRounds', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['chatRounds']) && ($this->container['chatRounds'] < 1)) {
                $invalidProperties[] = "invalid value for 'chatRounds', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tailSilenceTime']) && ($this->container['tailSilenceTime'] > 3000)) {
                $invalidProperties[] = "invalid value for 'tailSilenceTime', must be smaller than or equal to 3000.";
            }
            if (!is_null($this->container['tailSilenceTime']) && ($this->container['tailSilenceTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'tailSilenceTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sisRegion']) && ($this->container['sisRegion'] > 32)) {
                $invalidProperties[] = "invalid value for 'sisRegion', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sisRegion']) && ($this->container['sisRegion'] < 0)) {
                $invalidProperties[] = "invalid value for 'sisRegion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets robotId
    *  应用ID。
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
    * @param string|null $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets name
    *  应用名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 应用名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets roomId
    *  智能交互对话房间ID。
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
    * @param string|null $roomId 智能交互对话房间ID。
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets appId
    *  第三方应用ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 第三方应用ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appType
    *  对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型；8：奇妙问
    *
    * @return int|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param int|null $appType 对接第三方应用厂商类型。 > 0：科大讯飞AIUI；1：华为云CBS；2：科大讯飞星火交互认知大模型；5：第三方驱动；6：第三方语言模型；8：奇妙问
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets appKey
    *  应用的AccessKey或帐号。
    *
    * @return string|null
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string|null $appKey 应用的AccessKey或帐号。
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets robotType
    *  robotType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RobotTypeEnum|null
    */
    public function getRobotType()
    {
        return $this->container['robotType'];
    }

    /**
    * Sets robotType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RobotTypeEnum|null $robotType robotType
    *
    * @return $this
    */
    public function setRobotType($robotType)
    {
        $this->container['robotType'] = $robotType;
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
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets region
    *  CBS所在区域
    *
    * @return int|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param int|null $region CBS所在区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets cbsProjectId
    *  CBS所在区域的projectId
    *
    * @return string|null
    */
    public function getCbsProjectId()
    {
        return $this->container['cbsProjectId'];
    }

    /**
    * Sets cbsProjectId
    *
    * @param string|null $cbsProjectId CBS所在区域的projectId
    *
    * @return $this
    */
    public function setCbsProjectId($cbsProjectId)
    {
        $this->container['cbsProjectId'] = $cbsProjectId;
        return $this;
    }

    /**
    * Gets llmUrl
    *  第三方语言模型地址。
    *
    * @return string|null
    */
    public function getLlmUrl()
    {
        return $this->container['llmUrl'];
    }

    /**
    * Sets llmUrl
    *
    * @param string|null $llmUrl 第三方语言模型地址。
    *
    * @return $this
    */
    public function setLlmUrl($llmUrl)
    {
        $this->container['llmUrl'] = $llmUrl;
        return $this;
    }

    /**
    * Gets isStream
    *  是否采用流式响应。
    *
    * @return bool|null
    */
    public function getIsStream()
    {
        return $this->container['isStream'];
    }

    /**
    * Sets isStream
    *
    * @param bool|null $isStream 是否采用流式响应。
    *
    * @return $this
    */
    public function setIsStream($isStream)
    {
        $this->container['isStream'] = $isStream;
        return $this;
    }

    /**
    * Gets chatRounds
    *  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    *
    * @return int|null
    */
    public function getChatRounds()
    {
        return $this->container['chatRounds'];
    }

    /**
    * Sets chatRounds
    *
    * @param int|null $chatRounds 支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    *
    * @return $this
    */
    public function setChatRounds($chatRounds)
    {
        $this->container['chatRounds'] = $chatRounds;
        return $this;
    }

    /**
    * Gets isIflyProduction
    *  是否为正式环境
    *
    * @return bool|null
    */
    public function getIsIflyProduction()
    {
        return $this->container['isIflyProduction'];
    }

    /**
    * Sets isIflyProduction
    *
    * @param bool|null $isIflyProduction 是否为正式环境
    *
    * @return $this
    */
    public function setIsIflyProduction($isIflyProduction)
    {
        $this->container['isIflyProduction'] = $isIflyProduction;
        return $this;
    }

    /**
    * Gets tailSilenceTime
    *  语音识别后端点静音时长默认500ms
    *
    * @return int|null
    */
    public function getTailSilenceTime()
    {
        return $this->container['tailSilenceTime'];
    }

    /**
    * Sets tailSilenceTime
    *
    * @param int|null $tailSilenceTime 语音识别后端点静音时长默认500ms
    *
    * @return $this
    */
    public function setTailSilenceTime($tailSilenceTime)
    {
        $this->container['tailSilenceTime'] = $tailSilenceTime;
        return $this;
    }

    /**
    * Gets roleId
    *  奇妙问角色ID。
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId 奇妙问角色ID。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets sisRegion
    *  SIS所在区域
    *
    * @return int|null
    */
    public function getSisRegion()
    {
        return $this->container['sisRegion'];
    }

    /**
    * Sets sisRegion
    *
    * @param int|null $sisRegion SIS所在区域
    *
    * @return $this
    */
    public function setSisRegion($sisRegion)
    {
        $this->container['sisRegion'] = $sisRegion;
        return $this;
    }

    /**
    * Gets sisProjectId
    *  SIS所在区域的projectId
    *
    * @return string|null
    */
    public function getSisProjectId()
    {
        return $this->container['sisProjectId'];
    }

    /**
    * Sets sisProjectId
    *
    * @param string|null $sisProjectId SIS所在区域的projectId
    *
    * @return $this
    */
    public function setSisProjectId($sisProjectId)
    {
        $this->container['sisProjectId'] = $sisProjectId;
        return $this;
    }

    /**
    * Gets enableHotWords
    *  是否开启热词
    *
    * @return bool|null
    */
    public function getEnableHotWords()
    {
        return $this->container['enableHotWords'];
    }

    /**
    * Sets enableHotWords
    *
    * @param bool|null $enableHotWords 是否开启热词
    *
    * @return $this
    */
    public function setEnableHotWords($enableHotWords)
    {
        $this->container['enableHotWords'] = $enableHotWords;
        return $this;
    }

    /**
    * Gets enableQuestionAudit
    *  是否开启提问文本审核开关
    *
    * @return bool|null
    */
    public function getEnableQuestionAudit()
    {
        return $this->container['enableQuestionAudit'];
    }

    /**
    * Sets enableQuestionAudit
    *
    * @param bool|null $enableQuestionAudit 是否开启提问文本审核开关
    *
    * @return $this
    */
    public function setEnableQuestionAudit($enableQuestionAudit)
    {
        $this->container['enableQuestionAudit'] = $enableQuestionAudit;
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

