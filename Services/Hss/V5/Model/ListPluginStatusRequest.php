<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPluginStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPluginStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginVersion  **参数解释**： 插件版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginStatus  **参数解释**： 插件状态 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败  **默认取值**: 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**： 服务器状态 **约束限制**: 不涉及 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机  **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * osType  **参数解释**： 主机操作系统 **约束限制**: 不涉及 **取值范围**: - linux：Linux操作系统 - Windows：windows操作系统  **默认取值**: 不涉及
    * osArch  **参数解释**： 系统架构 **约束限制**: 不涉及 **取值范围**: - x86_64：X86架构 - arm：ARM架构  **默认取值**: 不涉及
    * hostType  **参数解释**： 服务器类型 **约束限制**: 不涉及 **取值范围**: - host：非容器主机 - container：容器主机  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'pluginCode' => 'string',
            'pluginVersion' => 'string',
            'pluginStatus' => 'string',
            'hostName' => 'string',
            'hostIds' => 'string[]',
            'hostStatus' => 'string[]',
            'agentStatus' => 'string',
            'osType' => 'string',
            'osArch' => 'string',
            'hostType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginVersion  **参数解释**： 插件版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginStatus  **参数解释**： 插件状态 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败  **默认取值**: 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**： 服务器状态 **约束限制**: 不涉及 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机  **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * osType  **参数解释**： 主机操作系统 **约束限制**: 不涉及 **取值范围**: - linux：Linux操作系统 - Windows：windows操作系统  **默认取值**: 不涉及
    * osArch  **参数解释**： 系统架构 **约束限制**: 不涉及 **取值范围**: - x86_64：X86架构 - arm：ARM架构  **默认取值**: 不涉及
    * hostType  **参数解释**： 服务器类型 **约束限制**: 不涉及 **取值范围**: - host：非容器主机 - container：容器主机  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'pluginCode' => null,
        'pluginVersion' => null,
        'pluginStatus' => null,
        'hostName' => null,
        'hostIds' => null,
        'hostStatus' => null,
        'agentStatus' => null,
        'osType' => null,
        'osArch' => null,
        'hostType' => null
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
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginVersion  **参数解释**： 插件版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginStatus  **参数解释**： 插件状态 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败  **默认取值**: 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**： 服务器状态 **约束限制**: 不涉及 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机  **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * osType  **参数解释**： 主机操作系统 **约束限制**: 不涉及 **取值范围**: - linux：Linux操作系统 - Windows：windows操作系统  **默认取值**: 不涉及
    * osArch  **参数解释**： 系统架构 **约束限制**: 不涉及 **取值范围**: - x86_64：X86架构 - arm：ARM架构  **默认取值**: 不涉及
    * hostType  **参数解释**： 服务器类型 **约束限制**: 不涉及 **取值范围**: - host：非容器主机 - container：容器主机  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'pluginCode' => 'plugin_code',
            'pluginVersion' => 'plugin_version',
            'pluginStatus' => 'plugin_status',
            'hostName' => 'host_name',
            'hostIds' => 'host_ids',
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'osType' => 'os_type',
            'osArch' => 'os_arch',
            'hostType' => 'host_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginVersion  **参数解释**： 插件版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginStatus  **参数解释**： 插件状态 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败  **默认取值**: 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**： 服务器状态 **约束限制**: 不涉及 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机  **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * osType  **参数解释**： 主机操作系统 **约束限制**: 不涉及 **取值范围**: - linux：Linux操作系统 - Windows：windows操作系统  **默认取值**: 不涉及
    * osArch  **参数解释**： 系统架构 **约束限制**: 不涉及 **取值范围**: - x86_64：X86架构 - arm：ARM架构  **默认取值**: 不涉及
    * hostType  **参数解释**： 服务器类型 **约束限制**: 不涉及 **取值范围**: - host：非容器主机 - container：容器主机  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'pluginCode' => 'setPluginCode',
            'pluginVersion' => 'setPluginVersion',
            'pluginStatus' => 'setPluginStatus',
            'hostName' => 'setHostName',
            'hostIds' => 'setHostIds',
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'osType' => 'setOsType',
            'osArch' => 'setOsArch',
            'hostType' => 'setHostType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * pluginCode  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginVersion  **参数解释**： 插件版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * pluginStatus  **参数解释**： 插件状态 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败  **默认取值**: 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostIds  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**： 服务器状态 **约束限制**: 不涉及 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机  **默认取值**: 不涉及
    * agentStatus  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    * osType  **参数解释**： 主机操作系统 **约束限制**: 不涉及 **取值范围**: - linux：Linux操作系统 - Windows：windows操作系统  **默认取值**: 不涉及
    * osArch  **参数解释**： 系统架构 **约束限制**: 不涉及 **取值范围**: - x86_64：X86架构 - arm：ARM架构  **默认取值**: 不涉及
    * hostType  **参数解释**： 服务器类型 **约束限制**: 不涉及 **取值范围**: - host：非容器主机 - container：容器主机  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'pluginCode' => 'getPluginCode',
            'pluginVersion' => 'getPluginVersion',
            'pluginStatus' => 'getPluginStatus',
            'hostName' => 'getHostName',
            'hostIds' => 'getHostIds',
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'osType' => 'getOsType',
            'osArch' => 'getOsArch',
            'hostType' => 'getHostType'
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
    const HOST_STATUS_ACTIVE = 'ACTIVE';
    const HOST_STATUS_BUILDING = 'BUILDING';
    const HOST_STATUS_ERROR = 'ERROR';
    const HOST_STATUS_SHUTOFF = 'SHUTOFF';
    const AGENT_STATUS_NOT_INSTALLED = 'not_installed';
    const AGENT_STATUS_ONLINE = 'online';
    const AGENT_STATUS_OFFLINE = 'offline';
    const AGENT_STATUS_INSTALL_FAILED = 'install_failed';
    const AGENT_STATUS_INSTALLING = 'installing';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostStatusAllowableValues()
    {
        return [
            self::HOST_STATUS_ACTIVE,
            self::HOST_STATUS_BUILDING,
            self::HOST_STATUS_ERROR,
            self::HOST_STATUS_SHUTOFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAgentStatusAllowableValues()
    {
        return [
            self::AGENT_STATUS_NOT_INSTALLED,
            self::AGENT_STATUS_ONLINE,
            self::AGENT_STATUS_OFFLINE,
            self::AGENT_STATUS_INSTALL_FAILED,
            self::AGENT_STATUS_INSTALLING,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pluginCode'] = isset($data['pluginCode']) ? $data['pluginCode'] : null;
        $this->container['pluginVersion'] = isset($data['pluginVersion']) ? $data['pluginVersion'] : null;
        $this->container['pluginStatus'] = isset($data['pluginStatus']) ? $data['pluginStatus'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osArch'] = isset($data['osArch']) ? $data['osArch'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['pluginCode'] === null) {
            $invalidProperties[] = "'pluginCode' can't be null";
        }
            if ((mb_strlen($this->container['pluginCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'pluginCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['pluginCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'pluginCode', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[\\w-]*$/", $this->container['pluginCode'])) {
                $invalidProperties[] = "invalid value for 'pluginCode', must be conform to the pattern /^[\\w-]*$/.";
            }
            if (!is_null($this->container['pluginVersion']) && (mb_strlen($this->container['pluginVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'pluginVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pluginVersion']) && (mb_strlen($this->container['pluginVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'pluginVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pluginVersion']) && !preg_match("/^(\\.*[0-9]+)+$/", $this->container['pluginVersion'])) {
                $invalidProperties[] = "invalid value for 'pluginVersion', must be conform to the pattern /^(\\.*[0-9]+)+$/.";
            }
            if (!is_null($this->container['pluginStatus']) && (mb_strlen($this->container['pluginStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'pluginStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['pluginStatus']) && (mb_strlen($this->container['pluginStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'pluginStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pluginStatus']) && !preg_match("/(^((not_installed|installing|install_fail|starting|start_fail|running|offline|stopping|stopped|updating|update_fail|uninstalling|uninstall_fail),){0,12}(|(not_installed|installing|install_fail|starting|start_fail|running|offline|stopping|stopped|updating|update_fail|uninstalling|uninstall_fail))$)|(^$)/", $this->container['pluginStatus'])) {
                $invalidProperties[] = "invalid value for 'pluginStatus', must be conform to the pattern /(^((not_installed|installing|install_fail|starting|start_fail|running|offline|stopping|stopped|updating|update_fail|uninstalling|uninstall_fail),){0,12}(|(not_installed|installing|install_fail|starting|start_fail|running|offline|stopping|stopped|updating|update_fail|uninstalling|uninstall_fail))$)|(^$)/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            $allowedValues = $this->getAgentStatusAllowableValues();
                if (!is_null($this->container['agentStatus']) && !in_array($this->container['agentStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agentStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && !preg_match("/^not_installed|online|offline|install_failed|installing$/", $this->container['agentStatus'])) {
                $invalidProperties[] = "invalid value for 'agentStatus', must be conform to the pattern /^not_installed|online|offline|install_failed|installing$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 20)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/(^((Linux|Windows),){0,1}(|(Linux|Windows))$)|(^$)/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /(^((Linux|Windows),){0,1}(|(Linux|Windows))$)|(^$)/.";
            }
            if (!is_null($this->container['osArch']) && (mb_strlen($this->container['osArch']) > 20)) {
                $invalidProperties[] = "invalid value for 'osArch', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['osArch']) && (mb_strlen($this->container['osArch']) < 0)) {
                $invalidProperties[] = "invalid value for 'osArch', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osArch']) && !preg_match("/(^((x86_64|arm),){0,1}(|(x86_64|arm))$)|(^$)/", $this->container['osArch'])) {
                $invalidProperties[] = "invalid value for 'osArch', must be conform to the pattern /(^((x86_64|arm),){0,1}(|(x86_64|arm))$)|(^$)/.";
            }
            if (!is_null($this->container['hostType']) && (mb_strlen($this->container['hostType']) > 20)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['hostType']) && (mb_strlen($this->container['hostType']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostType']) && !preg_match("/(^((host|container),){0,1}(|(host|container))$)|(^$)/", $this->container['hostType'])) {
                $invalidProperties[] = "invalid value for 'hostType', must be conform to the pattern /(^((host|container),){0,1}(|(host|container))$)|(^$)/.";
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
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pluginCode
    *  **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getPluginCode()
    {
        return $this->container['pluginCode'];
    }

    /**
    * Sets pluginCode
    *
    * @param string $pluginCode **参数解释**： 插件编码 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPluginCode($pluginCode)
    {
        $this->container['pluginCode'] = $pluginCode;
        return $this;
    }

    /**
    * Gets pluginVersion
    *  **参数解释**： 插件版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPluginVersion()
    {
        return $this->container['pluginVersion'];
    }

    /**
    * Sets pluginVersion
    *
    * @param string|null $pluginVersion **参数解释**： 插件版本 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPluginVersion($pluginVersion)
    {
        $this->container['pluginVersion'] = $pluginVersion;
        return $this;
    }

    /**
    * Gets pluginStatus
    *  **参数解释**： 插件状态 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPluginStatus()
    {
        return $this->container['pluginStatus'];
    }

    /**
    * Sets pluginStatus
    *
    * @param string|null $pluginStatus **参数解释**： 插件状态 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPluginStatus($pluginStatus)
    {
        $this->container['pluginStatus'] = $pluginStatus;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $hostName **参数解释**： 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIds
    *  **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释**： 服务器ID列表 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**： 服务器状态 **约束限制**: 不涉及 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机  **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string[]|null $hostStatus **参数解释**： 服务器状态 **约束限制**: 不涉及 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
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
    * @param string|null $agentStatus **参数解释**： agent状态 **约束限制**: 不涉及 **取值范围**: -not_installed：未安装 -online：在线 -offline：离线 -install_failed：安装失败 -installing：安装中  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 主机操作系统 **约束限制**: 不涉及 **取值范围**: - linux：Linux操作系统 - Windows：windows操作系统  **默认取值**: 不涉及
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
    * @param string|null $osType **参数解释**： 主机操作系统 **约束限制**: 不涉及 **取值范围**: - linux：Linux操作系统 - Windows：windows操作系统  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osArch
    *  **参数解释**： 系统架构 **约束限制**: 不涉及 **取值范围**: - x86_64：X86架构 - arm：ARM架构  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getOsArch()
    {
        return $this->container['osArch'];
    }

    /**
    * Sets osArch
    *
    * @param string|null $osArch **参数解释**： 系统架构 **约束限制**: 不涉及 **取值范围**: - x86_64：X86架构 - arm：ARM架构  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOsArch($osArch)
    {
        $this->container['osArch'] = $osArch;
        return $this;
    }

    /**
    * Gets hostType
    *  **参数解释**： 服务器类型 **约束限制**: 不涉及 **取值范围**: - host：非容器主机 - container：容器主机  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param string|null $hostType **参数解释**： 服务器类型 **约束限制**: 不涉及 **取值范围**: - host：非容器主机 - container：容器主机  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
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

