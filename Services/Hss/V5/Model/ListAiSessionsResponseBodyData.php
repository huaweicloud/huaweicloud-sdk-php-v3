<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiSessionsResponseBodyData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiSessionsResponseBodyData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionId  **参数解释**： 会话ID **取值范围**： 字符长度为1-128位
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 运行镜像地址 **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * startTime  **参数解释**： 会话开启时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * lastChatTime  **参数解释**： 会话上次对话时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * runDuration  **参数解释**： 会话运行时长，单位为秒 **取值范围**： 0~2147483647
    * securityTokens  **参数解释**： 消耗的token数量 **取值范围**： 0~2147483647
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionId' => 'string',
            'agentName' => 'string',
            'agentId' => 'string',
            'runtimeName' => 'string',
            'runtimeId' => 'string',
            'imageUrl' => 'string',
            'sdkStatus' => 'string',
            'startTime' => 'int',
            'lastChatTime' => 'int',
            'runDuration' => 'int',
            'securityTokens' => 'int',
            'source' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionId  **参数解释**： 会话ID **取值范围**： 字符长度为1-128位
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 运行镜像地址 **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * startTime  **参数解释**： 会话开启时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * lastChatTime  **参数解释**： 会话上次对话时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * runDuration  **参数解释**： 会话运行时长，单位为秒 **取值范围**： 0~2147483647
    * securityTokens  **参数解释**： 消耗的token数量 **取值范围**： 0~2147483647
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionId' => null,
        'agentName' => null,
        'agentId' => null,
        'runtimeName' => null,
        'runtimeId' => null,
        'imageUrl' => null,
        'sdkStatus' => null,
        'startTime' => 'int64',
        'lastChatTime' => 'int64',
        'runDuration' => 'int32',
        'securityTokens' => 'int32',
        'source' => null
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
    * sessionId  **参数解释**： 会话ID **取值范围**： 字符长度为1-128位
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 运行镜像地址 **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * startTime  **参数解释**： 会话开启时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * lastChatTime  **参数解释**： 会话上次对话时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * runDuration  **参数解释**： 会话运行时长，单位为秒 **取值范围**： 0~2147483647
    * securityTokens  **参数解释**： 消耗的token数量 **取值范围**： 0~2147483647
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionId' => 'session_id',
            'agentName' => 'agent_name',
            'agentId' => 'agent_id',
            'runtimeName' => 'runtime_name',
            'runtimeId' => 'runtime_id',
            'imageUrl' => 'image_url',
            'sdkStatus' => 'sdk_status',
            'startTime' => 'start_time',
            'lastChatTime' => 'last_chat_time',
            'runDuration' => 'run_duration',
            'securityTokens' => 'security_tokens',
            'source' => 'source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionId  **参数解释**： 会话ID **取值范围**： 字符长度为1-128位
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 运行镜像地址 **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * startTime  **参数解释**： 会话开启时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * lastChatTime  **参数解释**： 会话上次对话时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * runDuration  **参数解释**： 会话运行时长，单位为秒 **取值范围**： 0~2147483647
    * securityTokens  **参数解释**： 消耗的token数量 **取值范围**： 0~2147483647
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionId' => 'setSessionId',
            'agentName' => 'setAgentName',
            'agentId' => 'setAgentId',
            'runtimeName' => 'setRuntimeName',
            'runtimeId' => 'setRuntimeId',
            'imageUrl' => 'setImageUrl',
            'sdkStatus' => 'setSdkStatus',
            'startTime' => 'setStartTime',
            'lastChatTime' => 'setLastChatTime',
            'runDuration' => 'setRunDuration',
            'securityTokens' => 'setSecurityTokens',
            'source' => 'setSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionId  **参数解释**： 会话ID **取值范围**： 字符长度为1-128位
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 运行镜像地址 **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * startTime  **参数解释**： 会话开启时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * lastChatTime  **参数解释**： 会话上次对话时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * runDuration  **参数解释**： 会话运行时长，单位为秒 **取值范围**： 0~2147483647
    * securityTokens  **参数解释**： 消耗的token数量 **取值范围**： 0~2147483647
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionId' => 'getSessionId',
            'agentName' => 'getAgentName',
            'agentId' => 'getAgentId',
            'runtimeName' => 'getRuntimeName',
            'runtimeId' => 'getRuntimeId',
            'imageUrl' => 'getImageUrl',
            'sdkStatus' => 'getSdkStatus',
            'startTime' => 'getStartTime',
            'lastChatTime' => 'getLastChatTime',
            'runDuration' => 'getRunDuration',
            'securityTokens' => 'getSecurityTokens',
            'source' => 'getSource'
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
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['runtimeName'] = isset($data['runtimeName']) ? $data['runtimeName'] : null;
        $this->container['runtimeId'] = isset($data['runtimeId']) ? $data['runtimeId'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['sdkStatus'] = isset($data['sdkStatus']) ? $data['sdkStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['lastChatTime'] = isset($data['lastChatTime']) ? $data['lastChatTime'] : null;
        $this->container['runDuration'] = isset($data['runDuration']) ? $data['runDuration'] : null;
        $this->container['securityTokens'] = isset($data['securityTokens']) ? $data['securityTokens'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sessionId']) && (mb_strlen($this->container['sessionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sessionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['runtimeName']) && (mb_strlen($this->container['runtimeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeName']) && (mb_strlen($this->container['runtimeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'runtimeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['runtimeId']) && (mb_strlen($this->container['runtimeId']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeId']) && (mb_strlen($this->container['runtimeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'runtimeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageUrl']) && (mb_strlen($this->container['imageUrl']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageUrl', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageUrl']) && (mb_strlen($this->container['imageUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sdkStatus']) && !preg_match("/^(open|close)$/", $this->container['sdkStatus'])) {
                $invalidProperties[] = "invalid value for 'sdkStatus', must be conform to the pattern /^(open|close)$/.";
            }
            if (!is_null($this->container['source']) && !preg_match("/^(AgentArts|OfficeClaw)$/", $this->container['source'])) {
                $invalidProperties[] = "invalid value for 'source', must be conform to the pattern /^(AgentArts|OfficeClaw)$/.";
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
    * Gets sessionId
    *  **参数解释**： 会话ID **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string|null $sessionId **参数解释**： 会话ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets agentName
    *  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getAgentName()
    {
        return $this->container['agentName'];
    }

    /**
    * Sets agentName
    *
    * @param string|null $agentName **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets runtimeName
    *  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getRuntimeName()
    {
        return $this->container['runtimeName'];
    }

    /**
    * Sets runtimeName
    *
    * @param string|null $runtimeName **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setRuntimeName($runtimeName)
    {
        $this->container['runtimeName'] = $runtimeName;
        return $this;
    }

    /**
    * Gets runtimeId
    *  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getRuntimeId()
    {
        return $this->container['runtimeId'];
    }

    /**
    * Sets runtimeId
    *
    * @param string|null $runtimeId **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setRuntimeId($runtimeId)
    {
        $this->container['runtimeId'] = $runtimeId;
        return $this;
    }

    /**
    * Gets imageUrl
    *  **参数解释**： 运行镜像地址 **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string|null $imageUrl **参数解释**： 运行镜像地址 **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets sdkStatus
    *  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    *
    * @return string|null
    */
    public function getSdkStatus()
    {
        return $this->container['sdkStatus'];
    }

    /**
    * Sets sdkStatus
    *
    * @param string|null $sdkStatus **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    *
    * @return $this
    */
    public function setSdkStatus($sdkStatus)
    {
        $this->container['sdkStatus'] = $sdkStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 会话开启时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 会话开启时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets lastChatTime
    *  **参数解释**： 会话上次对话时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    *
    * @return int|null
    */
    public function getLastChatTime()
    {
        return $this->container['lastChatTime'];
    }

    /**
    * Sets lastChatTime
    *
    * @param int|null $lastChatTime **参数解释**： 会话上次对话时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    *
    * @return $this
    */
    public function setLastChatTime($lastChatTime)
    {
        $this->container['lastChatTime'] = $lastChatTime;
        return $this;
    }

    /**
    * Gets runDuration
    *  **参数解释**： 会话运行时长，单位为秒 **取值范围**： 0~2147483647
    *
    * @return int|null
    */
    public function getRunDuration()
    {
        return $this->container['runDuration'];
    }

    /**
    * Sets runDuration
    *
    * @param int|null $runDuration **参数解释**： 会话运行时长，单位为秒 **取值范围**： 0~2147483647
    *
    * @return $this
    */
    public function setRunDuration($runDuration)
    {
        $this->container['runDuration'] = $runDuration;
        return $this;
    }

    /**
    * Gets securityTokens
    *  **参数解释**： 消耗的token数量 **取值范围**： 0~2147483647
    *
    * @return int|null
    */
    public function getSecurityTokens()
    {
        return $this->container['securityTokens'];
    }

    /**
    * Sets securityTokens
    *
    * @param int|null $securityTokens **参数解释**： 消耗的token数量 **取值范围**： 0~2147483647
    *
    * @return $this
    */
    public function setSecurityTokens($securityTokens)
    {
        $this->container['securityTokens'] = $securityTokens;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
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

