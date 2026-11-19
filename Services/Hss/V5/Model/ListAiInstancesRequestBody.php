<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiInstancesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiInstancesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentName  
    * detectTime  **参数解释**： 最近检测时间 **取值范围**： 不涉及
    * securityRiskNum  **参数解释**： 风险总数 **取值范围**： 最小值0，最大值2147483647
    * freeHealthCheckTotalHostNum  **参数解释**： 免费体检的服务器总数 **取值范围**： 最小值0，最大值2147483647
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentIdList  **参数解释**： 智能体ID列表，支持批量查询 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * imageUrl  **参数解释**： 运行镜像地址 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * existRiskTrace  **参数解释**： 是否存在行为轨迹检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * existRiskRuntime  **参数解释**： 是否存在运行时检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts系统。 - OfficeClaw：OfficeClaw系统。 - OpenClaw：OpenClaw系统。  **默认取值**： 不涉及
    * agentType  **参数解释**： 智能体类型 **约束限制**： 不涉及 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentName' => 'string',
            'detectTime' => 'int',
            'securityRiskNum' => 'int',
            'freeHealthCheckTotalHostNum' => 'int',
            'agentId' => 'string',
            'agentIdList' => 'string[]',
            'runtimeName' => 'string',
            'runtimeId' => 'string',
            'imageUrl' => 'string',
            'sdkStatus' => 'string',
            'existRiskTrace' => 'bool',
            'existRiskRuntime' => 'bool',
            'source' => 'string',
            'agentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentName  
    * detectTime  **参数解释**： 最近检测时间 **取值范围**： 不涉及
    * securityRiskNum  **参数解释**： 风险总数 **取值范围**： 最小值0，最大值2147483647
    * freeHealthCheckTotalHostNum  **参数解释**： 免费体检的服务器总数 **取值范围**： 最小值0，最大值2147483647
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentIdList  **参数解释**： 智能体ID列表，支持批量查询 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * imageUrl  **参数解释**： 运行镜像地址 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * existRiskTrace  **参数解释**： 是否存在行为轨迹检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * existRiskRuntime  **参数解释**： 是否存在运行时检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts系统。 - OfficeClaw：OfficeClaw系统。 - OpenClaw：OpenClaw系统。  **默认取值**： 不涉及
    * agentType  **参数解释**： 智能体类型 **约束限制**： 不涉及 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentName' => null,
        'detectTime' => 'int64',
        'securityRiskNum' => 'int32',
        'freeHealthCheckTotalHostNum' => 'int32',
        'agentId' => null,
        'agentIdList' => null,
        'runtimeName' => null,
        'runtimeId' => null,
        'imageUrl' => null,
        'sdkStatus' => null,
        'existRiskTrace' => null,
        'existRiskRuntime' => null,
        'source' => null,
        'agentType' => null
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
    * agentName  
    * detectTime  **参数解释**： 最近检测时间 **取值范围**： 不涉及
    * securityRiskNum  **参数解释**： 风险总数 **取值范围**： 最小值0，最大值2147483647
    * freeHealthCheckTotalHostNum  **参数解释**： 免费体检的服务器总数 **取值范围**： 最小值0，最大值2147483647
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentIdList  **参数解释**： 智能体ID列表，支持批量查询 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * imageUrl  **参数解释**： 运行镜像地址 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * existRiskTrace  **参数解释**： 是否存在行为轨迹检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * existRiskRuntime  **参数解释**： 是否存在运行时检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts系统。 - OfficeClaw：OfficeClaw系统。 - OpenClaw：OpenClaw系统。  **默认取值**： 不涉及
    * agentType  **参数解释**： 智能体类型 **约束限制**： 不涉及 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentName' => 'agent_name',
            'detectTime' => 'detect_time',
            'securityRiskNum' => 'security_risk_num',
            'freeHealthCheckTotalHostNum' => 'free_health_check_total_host_num',
            'agentId' => 'agent_id',
            'agentIdList' => 'agent_id_list',
            'runtimeName' => 'runtime_name',
            'runtimeId' => 'runtime_id',
            'imageUrl' => 'image_url',
            'sdkStatus' => 'sdk_status',
            'existRiskTrace' => 'exist_risk_trace',
            'existRiskRuntime' => 'exist_risk_runtime',
            'source' => 'source',
            'agentType' => 'agent_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentName  
    * detectTime  **参数解释**： 最近检测时间 **取值范围**： 不涉及
    * securityRiskNum  **参数解释**： 风险总数 **取值范围**： 最小值0，最大值2147483647
    * freeHealthCheckTotalHostNum  **参数解释**： 免费体检的服务器总数 **取值范围**： 最小值0，最大值2147483647
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentIdList  **参数解释**： 智能体ID列表，支持批量查询 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * imageUrl  **参数解释**： 运行镜像地址 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * existRiskTrace  **参数解释**： 是否存在行为轨迹检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * existRiskRuntime  **参数解释**： 是否存在运行时检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts系统。 - OfficeClaw：OfficeClaw系统。 - OpenClaw：OpenClaw系统。  **默认取值**： 不涉及
    * agentType  **参数解释**： 智能体类型 **约束限制**： 不涉及 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'agentName' => 'setAgentName',
            'detectTime' => 'setDetectTime',
            'securityRiskNum' => 'setSecurityRiskNum',
            'freeHealthCheckTotalHostNum' => 'setFreeHealthCheckTotalHostNum',
            'agentId' => 'setAgentId',
            'agentIdList' => 'setAgentIdList',
            'runtimeName' => 'setRuntimeName',
            'runtimeId' => 'setRuntimeId',
            'imageUrl' => 'setImageUrl',
            'sdkStatus' => 'setSdkStatus',
            'existRiskTrace' => 'setExistRiskTrace',
            'existRiskRuntime' => 'setExistRiskRuntime',
            'source' => 'setSource',
            'agentType' => 'setAgentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentName  
    * detectTime  **参数解释**： 最近检测时间 **取值范围**： 不涉及
    * securityRiskNum  **参数解释**： 风险总数 **取值范围**： 最小值0，最大值2147483647
    * freeHealthCheckTotalHostNum  **参数解释**： 免费体检的服务器总数 **取值范围**： 最小值0，最大值2147483647
    * agentId  **参数解释**： 智能体ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * agentIdList  **参数解释**： 智能体ID列表，支持批量查询 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * runtimeName  **参数解释**： 智能体运行时名字 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * runtimeId  **参数解释**： 智能体运行时ID **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * imageUrl  **参数解释**： 运行镜像地址 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
    * sdkStatus  **参数解释**： SDK检测状态 **约束限制**： 不涉及 **取值范围**： - open：开启 - close：关闭  **默认取值**： 不涉及
    * existRiskTrace  **参数解释**： 是否存在行为轨迹检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * existRiskRuntime  **参数解释**： 是否存在运行时检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    * source  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts系统。 - OfficeClaw：OfficeClaw系统。 - OpenClaw：OpenClaw系统。  **默认取值**： 不涉及
    * agentType  **参数解释**： 智能体类型 **约束限制**： 不涉及 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'agentName' => 'getAgentName',
            'detectTime' => 'getDetectTime',
            'securityRiskNum' => 'getSecurityRiskNum',
            'freeHealthCheckTotalHostNum' => 'getFreeHealthCheckTotalHostNum',
            'agentId' => 'getAgentId',
            'agentIdList' => 'getAgentIdList',
            'runtimeName' => 'getRuntimeName',
            'runtimeId' => 'getRuntimeId',
            'imageUrl' => 'getImageUrl',
            'sdkStatus' => 'getSdkStatus',
            'existRiskTrace' => 'getExistRiskTrace',
            'existRiskRuntime' => 'getExistRiskRuntime',
            'source' => 'getSource',
            'agentType' => 'getAgentType'
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
    const AGENT_TYPE_AGENT = 'agent';
    const AGENT_TYPE_CHAT = 'chat';
    const AGENT_TYPE_CONTROLLER = 'controller';
    const AGENT_TYPE_TEAM_AGENT = 'teamAgent';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAgentTypeAllowableValues()
    {
        return [
            self::AGENT_TYPE_AGENT,
            self::AGENT_TYPE_CHAT,
            self::AGENT_TYPE_CONTROLLER,
            self::AGENT_TYPE_TEAM_AGENT,
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
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['detectTime'] = isset($data['detectTime']) ? $data['detectTime'] : null;
        $this->container['securityRiskNum'] = isset($data['securityRiskNum']) ? $data['securityRiskNum'] : null;
        $this->container['freeHealthCheckTotalHostNum'] = isset($data['freeHealthCheckTotalHostNum']) ? $data['freeHealthCheckTotalHostNum'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
        $this->container['runtimeName'] = isset($data['runtimeName']) ? $data['runtimeName'] : null;
        $this->container['runtimeId'] = isset($data['runtimeId']) ? $data['runtimeId'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['sdkStatus'] = isset($data['sdkStatus']) ? $data['sdkStatus'] : null;
        $this->container['existRiskTrace'] = isset($data['existRiskTrace']) ? $data['existRiskTrace'] : null;
        $this->container['existRiskRuntime'] = isset($data['existRiskRuntime']) ? $data['existRiskRuntime'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['agentType'] = isset($data['agentType']) ? $data['agentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['securityRiskNum']) && ($this->container['securityRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'securityRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['securityRiskNum']) && ($this->container['securityRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'securityRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['freeHealthCheckTotalHostNum']) && ($this->container['freeHealthCheckTotalHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'freeHealthCheckTotalHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['freeHealthCheckTotalHostNum']) && ($this->container['freeHealthCheckTotalHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'freeHealthCheckTotalHostNum', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 64)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 1)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['source']) && !preg_match("/^(AgentArts|OfficeClaw|OpenClaw)$/", $this->container['source'])) {
                $invalidProperties[] = "invalid value for 'source', must be conform to the pattern /^(AgentArts|OfficeClaw|OpenClaw)$/.";
            }
            $allowedValues = $this->getAgentTypeAllowableValues();
                if (!is_null($this->container['agentType']) && !in_array($this->container['agentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['agentType']) && (mb_strlen($this->container['agentType']) > 20)) {
                $invalidProperties[] = "invalid value for 'agentType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['agentType']) && (mb_strlen($this->container['agentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentType']) && !preg_match("/^(agent|chat|controller|teamAgent)$/", $this->container['agentType'])) {
                $invalidProperties[] = "invalid value for 'agentType', must be conform to the pattern /^(agent|chat|controller|teamAgent)$/.";
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
    * Gets agentName
    *  
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
    * @param string|null $agentName 
    *
    * @return $this
    */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;
        return $this;
    }

    /**
    * Gets detectTime
    *  **参数解释**： 最近检测时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDetectTime()
    {
        return $this->container['detectTime'];
    }

    /**
    * Sets detectTime
    *
    * @param int|null $detectTime **参数解释**： 最近检测时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDetectTime($detectTime)
    {
        $this->container['detectTime'] = $detectTime;
        return $this;
    }

    /**
    * Gets securityRiskNum
    *  **参数解释**： 风险总数 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getSecurityRiskNum()
    {
        return $this->container['securityRiskNum'];
    }

    /**
    * Sets securityRiskNum
    *
    * @param int|null $securityRiskNum **参数解释**： 风险总数 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSecurityRiskNum($securityRiskNum)
    {
        $this->container['securityRiskNum'] = $securityRiskNum;
        return $this;
    }

    /**
    * Gets freeHealthCheckTotalHostNum
    *  **参数解释**： 免费体检的服务器总数 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getFreeHealthCheckTotalHostNum()
    {
        return $this->container['freeHealthCheckTotalHostNum'];
    }

    /**
    * Sets freeHealthCheckTotalHostNum
    *
    * @param int|null $freeHealthCheckTotalHostNum **参数解释**： 免费体检的服务器总数 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setFreeHealthCheckTotalHostNum($freeHealthCheckTotalHostNum)
    {
        $this->container['freeHealthCheckTotalHostNum'] = $freeHealthCheckTotalHostNum;
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
    * Gets agentIdList
    *  **参数解释**： 智能体ID列表，支持批量查询 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[]|null $agentIdList **参数解释**： 智能体ID列表，支持批量查询 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
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
    * Gets imageUrl
    *  **参数解释**： 运行镜像地址 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    * @param string|null $imageUrl **参数解释**： 运行镜像地址 **约束限制**： 不涉及 **取值范围**： 字符长度为1-128位 **默认取值**： 不涉及
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
    * Gets existRiskTrace
    *  **参数解释**： 是否存在行为轨迹检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getExistRiskTrace()
    {
        return $this->container['existRiskTrace'];
    }

    /**
    * Sets existRiskTrace
    *
    * @param bool|null $existRiskTrace **参数解释**： 是否存在行为轨迹检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setExistRiskTrace($existRiskTrace)
    {
        $this->container['existRiskTrace'] = $existRiskTrace;
        return $this;
    }

    /**
    * Gets existRiskRuntime
    *  **参数解释**： 是否存在运行时检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getExistRiskRuntime()
    {
        return $this->container['existRiskRuntime'];
    }

    /**
    * Sets existRiskRuntime
    *
    * @param bool|null $existRiskRuntime **参数解释**： 是否存在运行时检测 **约束限制**： 不涉及 **取值范围**： - true：存在 - false：不存在  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setExistRiskRuntime($existRiskRuntime)
    {
        $this->container['existRiskRuntime'] = $existRiskRuntime;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts系统。 - OfficeClaw：OfficeClaw系统。 - OpenClaw：OpenClaw系统。  **默认取值**： 不涉及
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
    * @param string|null $source **参数解释**： 智能体的来源 **约束限制**： 不涉及 **取值范围**： - AgentArts：AgentArts系统。 - OfficeClaw：OfficeClaw系统。 - OpenClaw：OpenClaw系统。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets agentType
    *  **参数解释**： 智能体类型 **约束限制**： 不涉及 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAgentType()
    {
        return $this->container['agentType'];
    }

    /**
    * Sets agentType
    *
    * @param string|null $agentType **参数解释**： 智能体类型 **约束限制**： 不涉及 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAgentType($agentType)
    {
        $this->container['agentType'] = $agentType;
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

