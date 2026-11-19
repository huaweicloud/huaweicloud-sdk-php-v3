<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiSessionsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiSessionsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionId  **参数解释**： 会话ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentName  **参数解释**： 智能体名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts。 - OfficeClaw：OfficeClaw。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionId' => 'string',
            'agentName' => 'string',
            'agentId' => 'string',
            'runtimeName' => 'string',
            'runtimeId' => 'string',
            'sdkStatus' => 'string',
            'source' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionId  **参数解释**： 会话ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentName  **参数解释**： 智能体名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts。 - OfficeClaw：OfficeClaw。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionId' => null,
        'agentName' => null,
        'agentId' => null,
        'runtimeName' => null,
        'runtimeId' => null,
        'sdkStatus' => null,
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
    * sessionId  **参数解释**： 会话ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentName  **参数解释**： 智能体名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts。 - OfficeClaw：OfficeClaw。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionId' => 'session_id',
            'agentName' => 'agent_name',
            'agentId' => 'agent_id',
            'runtimeName' => 'runtime_name',
            'runtimeId' => 'runtime_id',
            'sdkStatus' => 'sdk_status',
            'source' => 'source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionId  **参数解释**： 会话ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentName  **参数解释**： 智能体名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts。 - OfficeClaw：OfficeClaw。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionId' => 'setSessionId',
            'agentName' => 'setAgentName',
            'agentId' => 'setAgentId',
            'runtimeName' => 'setRuntimeName',
            'runtimeId' => 'setRuntimeId',
            'sdkStatus' => 'setSdkStatus',
            'source' => 'setSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionId  **参数解释**： 会话ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentName  **参数解释**： 智能体名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts。 - OfficeClaw：OfficeClaw。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionId' => 'getSessionId',
            'agentName' => 'getAgentName',
            'agentId' => 'getAgentId',
            'runtimeName' => 'getRuntimeName',
            'runtimeId' => 'getRuntimeId',
            'sdkStatus' => 'getSdkStatus',
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
        $this->container['sdkStatus'] = isset($data['sdkStatus']) ? $data['sdkStatus'] : null;
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
            if (!is_null($this->container['sdkStatus']) && !preg_match("/^(open|close)$/", $this->container['sdkStatus'])) {
                $invalidProperties[] = "invalid value for 'sdkStatus', must be conform to the pattern /^(open|close)$/.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 64)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 1)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**： 会话ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    * @param string|null $sessionId **参数解释**： 会话ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    *  **参数解释**： 智能体名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    * @param string|null $agentName **参数解释**： 智能体名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    *  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    * @param string|null $agentId **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    *  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    * @param string|null $runtimeName **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    *  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    * @param string|null $runtimeId **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRuntimeId($runtimeId)
    {
        $this->container['runtimeId'] = $runtimeId;
        return $this;
    }

    /**
    * Gets sdkStatus
    *  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
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
    * @param string|null $sdkStatus **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSdkStatus($sdkStatus)
    {
        $this->container['sdkStatus'] = $sdkStatus;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts。 - OfficeClaw：OfficeClaw。  **默认取值**： 不涉及
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
    * @param string|null $source **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts。 - OfficeClaw：OfficeClaw。  **默认取值**： 不涉及
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

