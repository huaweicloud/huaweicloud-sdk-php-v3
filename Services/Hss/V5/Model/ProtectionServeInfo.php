<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectionServeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectionServeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  服务器ID
    * agentId  Agent ID
    * agentVersion  Agent版本
    * hostName  服务器名称
    * publicIp  弹性ip地址
    * privateIp  私有ip
    * osType  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * raspStatus  **参数解释**: 应用防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下7种。 - app_install_processing：防护开启中。 - app_protected：防护成功。 - app_install_failed：防护失败（安装失败）。 - app_not_configure：未防护。 - app_partially_protected：部分防护。 - app_all_failed：防护失败。 - app_uninstall_processing：卸载中。 **默认取值**: 不涉及
    * policyName  防护策略名称
    * isFriendlyUser  是否为友好用户
    * agentSupportAutoAttach  agent是否支持动态加载
    * agentStatus  **参数解释**: Agent状态 **约束限制**: 不涉及 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。 **默认取值**: 不涉及
    * autoAttach  动态加载是否开启
    * protectStatus  防护状态 |- agent防护状态，包含如下2种。 - 0 ：关闭。 - 1 ：开启。
    * groupId  服务器组ID
    * groupName  服务器组名称
    * protectEventNum  防护事件数
    * raspPort  RASP端口号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'agentId' => 'string',
            'agentVersion' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'osType' => 'string',
            'raspStatus' => 'string',
            'policyName' => 'string',
            'isFriendlyUser' => 'bool',
            'agentSupportAutoAttach' => 'bool',
            'agentStatus' => 'string',
            'autoAttach' => 'bool',
            'protectStatus' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'protectEventNum' => 'int',
            'raspPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  服务器ID
    * agentId  Agent ID
    * agentVersion  Agent版本
    * hostName  服务器名称
    * publicIp  弹性ip地址
    * privateIp  私有ip
    * osType  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * raspStatus  **参数解释**: 应用防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下7种。 - app_install_processing：防护开启中。 - app_protected：防护成功。 - app_install_failed：防护失败（安装失败）。 - app_not_configure：未防护。 - app_partially_protected：部分防护。 - app_all_failed：防护失败。 - app_uninstall_processing：卸载中。 **默认取值**: 不涉及
    * policyName  防护策略名称
    * isFriendlyUser  是否为友好用户
    * agentSupportAutoAttach  agent是否支持动态加载
    * agentStatus  **参数解释**: Agent状态 **约束限制**: 不涉及 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。 **默认取值**: 不涉及
    * autoAttach  动态加载是否开启
    * protectStatus  防护状态 |- agent防护状态，包含如下2种。 - 0 ：关闭。 - 1 ：开启。
    * groupId  服务器组ID
    * groupName  服务器组名称
    * protectEventNum  防护事件数
    * raspPort  RASP端口号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'agentId' => null,
        'agentVersion' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'osType' => null,
        'raspStatus' => null,
        'policyName' => null,
        'isFriendlyUser' => null,
        'agentSupportAutoAttach' => null,
        'agentStatus' => null,
        'autoAttach' => null,
        'protectStatus' => null,
        'groupId' => null,
        'groupName' => null,
        'protectEventNum' => 'int64',
        'raspPort' => null
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
    * hostId  服务器ID
    * agentId  Agent ID
    * agentVersion  Agent版本
    * hostName  服务器名称
    * publicIp  弹性ip地址
    * privateIp  私有ip
    * osType  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * raspStatus  **参数解释**: 应用防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下7种。 - app_install_processing：防护开启中。 - app_protected：防护成功。 - app_install_failed：防护失败（安装失败）。 - app_not_configure：未防护。 - app_partially_protected：部分防护。 - app_all_failed：防护失败。 - app_uninstall_processing：卸载中。 **默认取值**: 不涉及
    * policyName  防护策略名称
    * isFriendlyUser  是否为友好用户
    * agentSupportAutoAttach  agent是否支持动态加载
    * agentStatus  **参数解释**: Agent状态 **约束限制**: 不涉及 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。 **默认取值**: 不涉及
    * autoAttach  动态加载是否开启
    * protectStatus  防护状态 |- agent防护状态，包含如下2种。 - 0 ：关闭。 - 1 ：开启。
    * groupId  服务器组ID
    * groupName  服务器组名称
    * protectEventNum  防护事件数
    * raspPort  RASP端口号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'agentId' => 'agent_id',
            'agentVersion' => 'agent_version',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'osType' => 'os_type',
            'raspStatus' => 'rasp_status',
            'policyName' => 'policy_name',
            'isFriendlyUser' => 'is_friendly_user',
            'agentSupportAutoAttach' => 'agent_support_auto_attach',
            'agentStatus' => 'agent_status',
            'autoAttach' => 'auto_attach',
            'protectStatus' => 'protect_status',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'protectEventNum' => 'protect_event_num',
            'raspPort' => 'rasp_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  服务器ID
    * agentId  Agent ID
    * agentVersion  Agent版本
    * hostName  服务器名称
    * publicIp  弹性ip地址
    * privateIp  私有ip
    * osType  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * raspStatus  **参数解释**: 应用防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下7种。 - app_install_processing：防护开启中。 - app_protected：防护成功。 - app_install_failed：防护失败（安装失败）。 - app_not_configure：未防护。 - app_partially_protected：部分防护。 - app_all_failed：防护失败。 - app_uninstall_processing：卸载中。 **默认取值**: 不涉及
    * policyName  防护策略名称
    * isFriendlyUser  是否为友好用户
    * agentSupportAutoAttach  agent是否支持动态加载
    * agentStatus  **参数解释**: Agent状态 **约束限制**: 不涉及 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。 **默认取值**: 不涉及
    * autoAttach  动态加载是否开启
    * protectStatus  防护状态 |- agent防护状态，包含如下2种。 - 0 ：关闭。 - 1 ：开启。
    * groupId  服务器组ID
    * groupName  服务器组名称
    * protectEventNum  防护事件数
    * raspPort  RASP端口号
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'agentId' => 'setAgentId',
            'agentVersion' => 'setAgentVersion',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'osType' => 'setOsType',
            'raspStatus' => 'setRaspStatus',
            'policyName' => 'setPolicyName',
            'isFriendlyUser' => 'setIsFriendlyUser',
            'agentSupportAutoAttach' => 'setAgentSupportAutoAttach',
            'agentStatus' => 'setAgentStatus',
            'autoAttach' => 'setAutoAttach',
            'protectStatus' => 'setProtectStatus',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'protectEventNum' => 'setProtectEventNum',
            'raspPort' => 'setRaspPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  服务器ID
    * agentId  Agent ID
    * agentVersion  Agent版本
    * hostName  服务器名称
    * publicIp  弹性ip地址
    * privateIp  私有ip
    * osType  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    * raspStatus  **参数解释**: 应用防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下7种。 - app_install_processing：防护开启中。 - app_protected：防护成功。 - app_install_failed：防护失败（安装失败）。 - app_not_configure：未防护。 - app_partially_protected：部分防护。 - app_all_failed：防护失败。 - app_uninstall_processing：卸载中。 **默认取值**: 不涉及
    * policyName  防护策略名称
    * isFriendlyUser  是否为友好用户
    * agentSupportAutoAttach  agent是否支持动态加载
    * agentStatus  **参数解释**: Agent状态 **约束限制**: 不涉及 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。 **默认取值**: 不涉及
    * autoAttach  动态加载是否开启
    * protectStatus  防护状态 |- agent防护状态，包含如下2种。 - 0 ：关闭。 - 1 ：开启。
    * groupId  服务器组ID
    * groupName  服务器组名称
    * protectEventNum  防护事件数
    * raspPort  RASP端口号
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'agentId' => 'getAgentId',
            'agentVersion' => 'getAgentVersion',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'osType' => 'getOsType',
            'raspStatus' => 'getRaspStatus',
            'policyName' => 'getPolicyName',
            'isFriendlyUser' => 'getIsFriendlyUser',
            'agentSupportAutoAttach' => 'getAgentSupportAutoAttach',
            'agentStatus' => 'getAgentStatus',
            'autoAttach' => 'getAutoAttach',
            'protectStatus' => 'getProtectStatus',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'protectEventNum' => 'getProtectEventNum',
            'raspPort' => 'getRaspPort'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['raspStatus'] = isset($data['raspStatus']) ? $data['raspStatus'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['isFriendlyUser'] = isset($data['isFriendlyUser']) ? $data['isFriendlyUser'] : null;
        $this->container['agentSupportAutoAttach'] = isset($data['agentSupportAutoAttach']) ? $data['agentSupportAutoAttach'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['autoAttach'] = isset($data['autoAttach']) ? $data['autoAttach'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['protectEventNum'] = isset($data['protectEventNum']) ? $data['protectEventNum'] : null;
        $this->container['raspPort'] = isset($data['raspPort']) ? $data['raspPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/^(Linux|Windows)$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^(Linux|Windows)$/.";
            }
            if (!is_null($this->container['raspStatus']) && (mb_strlen($this->container['raspStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'raspStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['raspStatus']) && (mb_strlen($this->container['raspStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'raspStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectEventNum']) && ($this->container['protectEventNum'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'protectEventNum', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['protectEventNum']) && ($this->container['protectEventNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectEventNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['raspPort']) && ($this->container['raspPort'] > 65536)) {
                $invalidProperties[] = "invalid value for 'raspPort', must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['raspPort']) && ($this->container['raspPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'raspPort', must be bigger than or equal to 0.";
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
    * Gets hostId
    *  服务器ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 服务器ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets agentId
    *  Agent ID
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
    * @param string|null $agentId Agent ID
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentVersion
    *  Agent版本
    *
    * @return string|null
    */
    public function getAgentVersion()
    {
        return $this->container['agentVersion'];
    }

    /**
    * Sets agentVersion
    *
    * @param string|null $agentVersion Agent版本
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  弹性ip地址
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 弹性ip地址
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  私有ip
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 私有ip
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释**: 策略支持的操作系统 **约束限制**: 不涉及 **取值范围**: 包含如下：   - Windows : Windows系统   - Linux : Linux系统 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets raspStatus
    *  **参数解释**: 应用防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下7种。 - app_install_processing：防护开启中。 - app_protected：防护成功。 - app_install_failed：防护失败（安装失败）。 - app_not_configure：未防护。 - app_partially_protected：部分防护。 - app_all_failed：防护失败。 - app_uninstall_processing：卸载中。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRaspStatus()
    {
        return $this->container['raspStatus'];
    }

    /**
    * Sets raspStatus
    *
    * @param string|null $raspStatus **参数解释**: 应用防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下7种。 - app_install_processing：防护开启中。 - app_protected：防护成功。 - app_install_failed：防护失败（安装失败）。 - app_not_configure：未防护。 - app_partially_protected：部分防护。 - app_all_failed：防护失败。 - app_uninstall_processing：卸载中。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRaspStatus($raspStatus)
    {
        $this->container['raspStatus'] = $raspStatus;
        return $this;
    }

    /**
    * Gets policyName
    *  防护策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 防护策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets isFriendlyUser
    *  是否为友好用户
    *
    * @return bool|null
    */
    public function getIsFriendlyUser()
    {
        return $this->container['isFriendlyUser'];
    }

    /**
    * Sets isFriendlyUser
    *
    * @param bool|null $isFriendlyUser 是否为友好用户
    *
    * @return $this
    */
    public function setIsFriendlyUser($isFriendlyUser)
    {
        $this->container['isFriendlyUser'] = $isFriendlyUser;
        return $this;
    }

    /**
    * Gets agentSupportAutoAttach
    *  agent是否支持动态加载
    *
    * @return bool|null
    */
    public function getAgentSupportAutoAttach()
    {
        return $this->container['agentSupportAutoAttach'];
    }

    /**
    * Sets agentSupportAutoAttach
    *
    * @param bool|null $agentSupportAutoAttach agent是否支持动态加载
    *
    * @return $this
    */
    public function setAgentSupportAutoAttach($agentSupportAutoAttach)
    {
        $this->container['agentSupportAutoAttach'] = $agentSupportAutoAttach;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**: Agent状态 **约束限制**: 不涉及 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus **参数解释**: Agent状态 **约束限制**: 不涉及 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets autoAttach
    *  动态加载是否开启
    *
    * @return bool|null
    */
    public function getAutoAttach()
    {
        return $this->container['autoAttach'];
    }

    /**
    * Sets autoAttach
    *
    * @param bool|null $autoAttach 动态加载是否开启
    *
    * @return $this
    */
    public function setAutoAttach($autoAttach)
    {
        $this->container['autoAttach'] = $autoAttach;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态 |- agent防护状态，包含如下2种。 - 0 ：关闭。 - 1 ：开启。
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 防护状态 |- agent防护状态，包含如下2种。 - 0 ：关闭。 - 1 ：开启。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets groupId
    *  服务器组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 服务器组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  服务器组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 服务器组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets protectEventNum
    *  防护事件数
    *
    * @return int|null
    */
    public function getProtectEventNum()
    {
        return $this->container['protectEventNum'];
    }

    /**
    * Sets protectEventNum
    *
    * @param int|null $protectEventNum 防护事件数
    *
    * @return $this
    */
    public function setProtectEventNum($protectEventNum)
    {
        $this->container['protectEventNum'] = $protectEventNum;
        return $this;
    }

    /**
    * Gets raspPort
    *  RASP端口号
    *
    * @return int|null
    */
    public function getRaspPort()
    {
        return $this->container['raspPort'];
    }

    /**
    * Sets raspPort
    *
    * @param int|null $raspPort RASP端口号
    *
    * @return $this
    */
    public function setRaspPort($raspPort)
    {
        $this->container['raspPort'] = $raspPort;
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

