<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDefenderPluginManualCommandRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDefenderPluginManualCommandRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * opt  **参数解释**： 操作类型 **约束限制**： 必填 **取值范围**： - install：安装 - uninstall：卸载  **默认取值**： 不涉及
    * network  **参数解释**： 网络类型，用于指定返回的命令中使用的下载地址和服务端地址的网络类型 **约束限制**： 非必填 **取值范围**： - public：公网 - internal：内网  **默认取值**： internal
    * agentType  **参数解释**： 智能体类型，用于区分OpenClaw和自研Claw **约束限制**： 必填 **取值范围**： - OpenClaw：OpenClaw - SelfDevelopedClaw：自研claw  **默认取值**： OpenClaw
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'opt' => 'string',
            'network' => 'string',
            'agentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * opt  **参数解释**： 操作类型 **约束限制**： 必填 **取值范围**： - install：安装 - uninstall：卸载  **默认取值**： 不涉及
    * network  **参数解释**： 网络类型，用于指定返回的命令中使用的下载地址和服务端地址的网络类型 **约束限制**： 非必填 **取值范围**： - public：公网 - internal：内网  **默认取值**： internal
    * agentType  **参数解释**： 智能体类型，用于区分OpenClaw和自研Claw **约束限制**： 必填 **取值范围**： - OpenClaw：OpenClaw - SelfDevelopedClaw：自研claw  **默认取值**： OpenClaw
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'opt' => null,
        'network' => null,
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * opt  **参数解释**： 操作类型 **约束限制**： 必填 **取值范围**： - install：安装 - uninstall：卸载  **默认取值**： 不涉及
    * network  **参数解释**： 网络类型，用于指定返回的命令中使用的下载地址和服务端地址的网络类型 **约束限制**： 非必填 **取值范围**： - public：公网 - internal：内网  **默认取值**： internal
    * agentType  **参数解释**： 智能体类型，用于区分OpenClaw和自研Claw **约束限制**： 必填 **取值范围**： - OpenClaw：OpenClaw - SelfDevelopedClaw：自研claw  **默认取值**： OpenClaw
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'opt' => 'opt',
            'network' => 'network',
            'agentType' => 'agent_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * opt  **参数解释**： 操作类型 **约束限制**： 必填 **取值范围**： - install：安装 - uninstall：卸载  **默认取值**： 不涉及
    * network  **参数解释**： 网络类型，用于指定返回的命令中使用的下载地址和服务端地址的网络类型 **约束限制**： 非必填 **取值范围**： - public：公网 - internal：内网  **默认取值**： internal
    * agentType  **参数解释**： 智能体类型，用于区分OpenClaw和自研Claw **约束限制**： 必填 **取值范围**： - OpenClaw：OpenClaw - SelfDevelopedClaw：自研claw  **默认取值**： OpenClaw
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'opt' => 'setOpt',
            'network' => 'setNetwork',
            'agentType' => 'setAgentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * opt  **参数解释**： 操作类型 **约束限制**： 必填 **取值范围**： - install：安装 - uninstall：卸载  **默认取值**： 不涉及
    * network  **参数解释**： 网络类型，用于指定返回的命令中使用的下载地址和服务端地址的网络类型 **约束限制**： 非必填 **取值范围**： - public：公网 - internal：内网  **默认取值**： internal
    * agentType  **参数解释**： 智能体类型，用于区分OpenClaw和自研Claw **约束限制**： 必填 **取值范围**： - OpenClaw：OpenClaw - SelfDevelopedClaw：自研claw  **默认取值**： OpenClaw
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'opt' => 'getOpt',
            'network' => 'getNetwork',
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
    const OPT_INSTALL = 'install';
    const OPT_UNINSTALL = 'uninstall';
    const NETWORK__PUBLIC = 'public';
    const NETWORK_INTERNAL = 'internal';
    const AGENT_TYPE_OPEN_CLAW = 'OpenClaw';
    const AGENT_TYPE_SELF_DEVELOPED_CLAW = 'SelfDevelopedClaw';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOptAllowableValues()
    {
        return [
            self::OPT_INSTALL,
            self::OPT_UNINSTALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetworkAllowableValues()
    {
        return [
            self::NETWORK__PUBLIC,
            self::NETWORK_INTERNAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAgentTypeAllowableValues()
    {
        return [
            self::AGENT_TYPE_OPEN_CLAW,
            self::AGENT_TYPE_SELF_DEVELOPED_CLAW,
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['opt'] = isset($data['opt']) ? $data['opt'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
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
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['opt'] === null) {
            $invalidProperties[] = "'opt' can't be null";
        }
            $allowedValues = $this->getOptAllowableValues();
                if (!is_null($this->container['opt']) && !in_array($this->container['opt'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'opt', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNetworkAllowableValues();
                if (!is_null($this->container['network']) && !in_array($this->container['network'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'network', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['agentType'] === null) {
            $invalidProperties[] = "'agentType' can't be null";
        }
            $allowedValues = $this->getAgentTypeAllowableValues();
                if (!is_null($this->container['agentType']) && !in_array($this->container['agentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agentType', must be one of '%s'",
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets opt
    *  **参数解释**： 操作类型 **约束限制**： 必填 **取值范围**： - install：安装 - uninstall：卸载  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getOpt()
    {
        return $this->container['opt'];
    }

    /**
    * Sets opt
    *
    * @param string $opt **参数解释**： 操作类型 **约束限制**： 必填 **取值范围**： - install：安装 - uninstall：卸载  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOpt($opt)
    {
        $this->container['opt'] = $opt;
        return $this;
    }

    /**
    * Gets network
    *  **参数解释**： 网络类型，用于指定返回的命令中使用的下载地址和服务端地址的网络类型 **约束限制**： 非必填 **取值范围**： - public：公网 - internal：内网  **默认取值**： internal
    *
    * @return string|null
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param string|null $network **参数解释**： 网络类型，用于指定返回的命令中使用的下载地址和服务端地址的网络类型 **约束限制**： 非必填 **取值范围**： - public：公网 - internal：内网  **默认取值**： internal
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets agentType
    *  **参数解释**： 智能体类型，用于区分OpenClaw和自研Claw **约束限制**： 必填 **取值范围**： - OpenClaw：OpenClaw - SelfDevelopedClaw：自研claw  **默认取值**： OpenClaw
    *
    * @return string
    */
    public function getAgentType()
    {
        return $this->container['agentType'];
    }

    /**
    * Sets agentType
    *
    * @param string $agentType **参数解释**： 智能体类型，用于区分OpenClaw和自研Claw **约束限制**： 必填 **取值范围**： - OpenClaw：OpenClaw - SelfDevelopedClaw：自研claw  **默认取值**： OpenClaw
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

