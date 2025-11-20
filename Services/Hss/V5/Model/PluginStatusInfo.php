<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginStatusInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginStatusInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostType  **参数解释**: 服务器类型 **取值范围**: - host：非容器主机 - container：容器主机
    * privateIp  **参数解释**: 服务器私网IP地址 **取值范围**: 字符长度0-128
    * publicIp  **参数解释**: 服务器公网IP地址 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * assetValue  **参数解释**: 服务器的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * osType  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统
    * osArch  **参数解释**: 系统架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osName  **参数解释**: 系统名称 **取值范围**: 不涉及
    * osVersion  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统 系统版本
    * pluginStatus  **参数解释**: 插件状态 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败
    * pluginVersion  **参数解释**: 插件版本 **取值范围**: 不涉及
    * statusDetail  **参数解释**: 插件操作失败原因，包括安装失败、启动失败、离线、停止失败、更新失败以及卸载失败 **取值范围**: 不涉及
    * installProgress  **参数解释**: 插件安装进度，百分比 **取值范围**: 0-99
    * remainingTime  **参数解释**: 插件剩余安装时间，单位分钟 **取值范围**: 不涉及
    * protectStatus  **参数解释**: 主机防护状态 **取值范围**: - closed：未开启 - opened：防护中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'hostType' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'hostStatus' => 'string',
            'agentStatus' => 'string',
            'agentVersion' => 'string',
            'assetValue' => 'string',
            'osType' => 'string',
            'osArch' => 'string',
            'osName' => 'string',
            'osVersion' => 'string',
            'pluginStatus' => 'string',
            'pluginVersion' => 'string',
            'statusDetail' => 'string',
            'installProgress' => 'string',
            'remainingTime' => 'string',
            'protectStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostType  **参数解释**: 服务器类型 **取值范围**: - host：非容器主机 - container：容器主机
    * privateIp  **参数解释**: 服务器私网IP地址 **取值范围**: 字符长度0-128
    * publicIp  **参数解释**: 服务器公网IP地址 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * assetValue  **参数解释**: 服务器的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * osType  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统
    * osArch  **参数解释**: 系统架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osName  **参数解释**: 系统名称 **取值范围**: 不涉及
    * osVersion  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统 系统版本
    * pluginStatus  **参数解释**: 插件状态 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败
    * pluginVersion  **参数解释**: 插件版本 **取值范围**: 不涉及
    * statusDetail  **参数解释**: 插件操作失败原因，包括安装失败、启动失败、离线、停止失败、更新失败以及卸载失败 **取值范围**: 不涉及
    * installProgress  **参数解释**: 插件安装进度，百分比 **取值范围**: 0-99
    * remainingTime  **参数解释**: 插件剩余安装时间，单位分钟 **取值范围**: 不涉及
    * protectStatus  **参数解释**: 主机防护状态 **取值范围**: - closed：未开启 - opened：防护中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'hostType' => null,
        'privateIp' => null,
        'publicIp' => null,
        'hostStatus' => null,
        'agentStatus' => null,
        'agentVersion' => null,
        'assetValue' => null,
        'osType' => null,
        'osArch' => null,
        'osName' => null,
        'osVersion' => null,
        'pluginStatus' => null,
        'pluginVersion' => null,
        'statusDetail' => null,
        'installProgress' => null,
        'remainingTime' => null,
        'protectStatus' => null
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
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostType  **参数解释**: 服务器类型 **取值范围**: - host：非容器主机 - container：容器主机
    * privateIp  **参数解释**: 服务器私网IP地址 **取值范围**: 字符长度0-128
    * publicIp  **参数解释**: 服务器公网IP地址 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * assetValue  **参数解释**: 服务器的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * osType  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统
    * osArch  **参数解释**: 系统架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osName  **参数解释**: 系统名称 **取值范围**: 不涉及
    * osVersion  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统 系统版本
    * pluginStatus  **参数解释**: 插件状态 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败
    * pluginVersion  **参数解释**: 插件版本 **取值范围**: 不涉及
    * statusDetail  **参数解释**: 插件操作失败原因，包括安装失败、启动失败、离线、停止失败、更新失败以及卸载失败 **取值范围**: 不涉及
    * installProgress  **参数解释**: 插件安装进度，百分比 **取值范围**: 0-99
    * remainingTime  **参数解释**: 插件剩余安装时间，单位分钟 **取值范围**: 不涉及
    * protectStatus  **参数解释**: 主机防护状态 **取值范围**: - closed：未开启 - opened：防护中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostType' => 'host_type',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'agentVersion' => 'agent_version',
            'assetValue' => 'asset_value',
            'osType' => 'os_type',
            'osArch' => 'os_arch',
            'osName' => 'os_name',
            'osVersion' => 'os_version',
            'pluginStatus' => 'plugin_status',
            'pluginVersion' => 'plugin_version',
            'statusDetail' => 'status_detail',
            'installProgress' => 'install_progress',
            'remainingTime' => 'remaining_time',
            'protectStatus' => 'protect_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostType  **参数解释**: 服务器类型 **取值范围**: - host：非容器主机 - container：容器主机
    * privateIp  **参数解释**: 服务器私网IP地址 **取值范围**: 字符长度0-128
    * publicIp  **参数解释**: 服务器公网IP地址 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * assetValue  **参数解释**: 服务器的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * osType  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统
    * osArch  **参数解释**: 系统架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osName  **参数解释**: 系统名称 **取值范围**: 不涉及
    * osVersion  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统 系统版本
    * pluginStatus  **参数解释**: 插件状态 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败
    * pluginVersion  **参数解释**: 插件版本 **取值范围**: 不涉及
    * statusDetail  **参数解释**: 插件操作失败原因，包括安装失败、启动失败、离线、停止失败、更新失败以及卸载失败 **取值范围**: 不涉及
    * installProgress  **参数解释**: 插件安装进度，百分比 **取值范围**: 0-99
    * remainingTime  **参数解释**: 插件剩余安装时间，单位分钟 **取值范围**: 不涉及
    * protectStatus  **参数解释**: 主机防护状态 **取值范围**: - closed：未开启 - opened：防护中
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostType' => 'setHostType',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'agentVersion' => 'setAgentVersion',
            'assetValue' => 'setAssetValue',
            'osType' => 'setOsType',
            'osArch' => 'setOsArch',
            'osName' => 'setOsName',
            'osVersion' => 'setOsVersion',
            'pluginStatus' => 'setPluginStatus',
            'pluginVersion' => 'setPluginVersion',
            'statusDetail' => 'setStatusDetail',
            'installProgress' => 'setInstallProgress',
            'remainingTime' => 'setRemainingTime',
            'protectStatus' => 'setProtectStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostType  **参数解释**: 服务器类型 **取值范围**: - host：非容器主机 - container：容器主机
    * privateIp  **参数解释**: 服务器私网IP地址 **取值范围**: 字符长度0-128
    * publicIp  **参数解释**: 服务器公网IP地址 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * assetValue  **参数解释**: 服务器的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    * osType  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统
    * osArch  **参数解释**: 系统架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    * osName  **参数解释**: 系统名称 **取值范围**: 不涉及
    * osVersion  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统 系统版本
    * pluginStatus  **参数解释**: 插件状态 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败
    * pluginVersion  **参数解释**: 插件版本 **取值范围**: 不涉及
    * statusDetail  **参数解释**: 插件操作失败原因，包括安装失败、启动失败、离线、停止失败、更新失败以及卸载失败 **取值范围**: 不涉及
    * installProgress  **参数解释**: 插件安装进度，百分比 **取值范围**: 0-99
    * remainingTime  **参数解释**: 插件剩余安装时间，单位分钟 **取值范围**: 不涉及
    * protectStatus  **参数解释**: 主机防护状态 **取值范围**: - closed：未开启 - opened：防护中
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostType' => 'getHostType',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'agentVersion' => 'getAgentVersion',
            'assetValue' => 'getAssetValue',
            'osType' => 'getOsType',
            'osArch' => 'getOsArch',
            'osName' => 'getOsName',
            'osVersion' => 'getOsVersion',
            'pluginStatus' => 'getPluginStatus',
            'pluginVersion' => 'getPluginVersion',
            'statusDetail' => 'getStatusDetail',
            'installProgress' => 'getInstallProgress',
            'remainingTime' => 'getRemainingTime',
            'protectStatus' => 'getProtectStatus'
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
    const HOST_TYPE_HOST = 'host';
    const HOST_TYPE_CONTAINER = 'container';
    const HOST_STATUS_ACTIVE = 'ACTIVE';
    const HOST_STATUS_BUILDING = 'BUILDING';
    const HOST_STATUS_ERROR = 'ERROR';
    const HOST_STATUS_SHUTOFF = 'SHUTOFF';
    const AGENT_STATUS_NOT_INSTALLED = 'not_installed';
    const AGENT_STATUS_ONLINE = 'online';
    const AGENT_STATUS_OFFLINE = 'offline';
    const AGENT_STATUS_INSTALL_FAILED = 'install_failed';
    const AGENT_STATUS_INSTALLING = 'installing';
    const ASSET_VALUE_COMMON = 'common';
    const ASSET_VALUE_IMPORTANT = 'important';
    const ASSET_VALUE_TEST = 'test';
    const OS_TYPE_LINUX = 'Linux';
    const OS_TYPE_WINDOWS = 'Windows';
    const OS_ARCH_X86_64 = 'x86_64';
    const OS_ARCH_ARM = 'arm';
    const PLUGIN_STATUS_NOT_INSTALLED = 'not_installed';
    const PLUGIN_STATUS_INSTALLING = 'installing';
    const PLUGIN_STATUS_INSTALL_FAIL = 'install_fail';
    const PLUGIN_STATUS_STARTING = 'starting';
    const PLUGIN_STATUS_RUNNING = 'running';
    const PLUGIN_STATUS_START_FAIL = 'start_fail';
    const PLUGIN_STATUS_OFFLINE = 'offline';
    const PLUGIN_STATUS_STOPPING = 'stopping';
    const PLUGIN_STATUS_STOPPED = 'stopped';
    const PLUGIN_STATUS_UPDATING = 'updating';
    const PLUGIN_STATUS_UPDATE_FAIL = 'update_fail';
    const PLUGIN_STATUS_UNINSTALLING = 'uninstalling';
    const PLUGIN_STATUS_UNINSTALL_FAIL = 'uninstall_fail';
    const PROTECT_STATUS_CLOSED = 'closed';
    const PROTECT_STATUS_OPENED = 'opened';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostTypeAllowableValues()
    {
        return [
            self::HOST_TYPE_HOST,
            self::HOST_TYPE_CONTAINER,
        ];
    }

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetValueAllowableValues()
    {
        return [
            self::ASSET_VALUE_COMMON,
            self::ASSET_VALUE_IMPORTANT,
            self::ASSET_VALUE_TEST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_LINUX,
            self::OS_TYPE_WINDOWS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsArchAllowableValues()
    {
        return [
            self::OS_ARCH_X86_64,
            self::OS_ARCH_ARM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPluginStatusAllowableValues()
    {
        return [
            self::PLUGIN_STATUS_NOT_INSTALLED,
            self::PLUGIN_STATUS_INSTALLING,
            self::PLUGIN_STATUS_INSTALL_FAIL,
            self::PLUGIN_STATUS_STARTING,
            self::PLUGIN_STATUS_RUNNING,
            self::PLUGIN_STATUS_START_FAIL,
            self::PLUGIN_STATUS_OFFLINE,
            self::PLUGIN_STATUS_STOPPING,
            self::PLUGIN_STATUS_STOPPED,
            self::PLUGIN_STATUS_UPDATING,
            self::PLUGIN_STATUS_UPDATE_FAIL,
            self::PLUGIN_STATUS_UNINSTALLING,
            self::PLUGIN_STATUS_UNINSTALL_FAIL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectStatusAllowableValues()
    {
        return [
            self::PROTECT_STATUS_CLOSED,
            self::PROTECT_STATUS_OPENED,
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osArch'] = isset($data['osArch']) ? $data['osArch'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['pluginStatus'] = isset($data['pluginStatus']) ? $data['pluginStatus'] : null;
        $this->container['pluginVersion'] = isset($data['pluginVersion']) ? $data['pluginVersion'] : null;
        $this->container['statusDetail'] = isset($data['statusDetail']) ? $data['statusDetail'] : null;
        $this->container['installProgress'] = isset($data['installProgress']) ? $data['installProgress'] : null;
        $this->container['remainingTime'] = isset($data['remainingTime']) ? $data['remainingTime'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getHostTypeAllowableValues();
                if (!is_null($this->container['hostType']) && !in_array($this->container['hostType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hostType']) && !preg_match("/^host|container$/", $this->container['hostType'])) {
                $invalidProperties[] = "invalid value for 'hostType', must be conform to the pattern /^host|container$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getHostStatusAllowableValues();
                if (!is_null($this->container['hostStatus']) && !in_array($this->container['hostStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hostStatus']) && !preg_match("/^ACTIVE|BUILDING|ERROR|SHUTOFF$/", $this->container['hostStatus'])) {
                $invalidProperties[] = "invalid value for 'hostStatus', must be conform to the pattern /^ACTIVE|BUILDING|ERROR|SHUTOFF$/.";
            }
            $allowedValues = $this->getAgentStatusAllowableValues();
                if (!is_null($this->container['agentStatus']) && !in_array($this->container['agentStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'agentStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['agentStatus']) && !preg_match("/^not_installed|online|offline|install_failed|installing$/", $this->container['agentStatus'])) {
                $invalidProperties[] = "invalid value for 'agentStatus', must be conform to the pattern /^not_installed|online|offline|install_failed|installing$/.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAssetValueAllowableValues();
                if (!is_null($this->container['assetValue']) && !in_array($this->container['assetValue'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetValue', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetValue']) && !preg_match("/^common|important|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^common|important|test$/.";
            }
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['osType']) && !preg_match("/^Linux|Windows$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^Linux|Windows$/.";
            }
            $allowedValues = $this->getOsArchAllowableValues();
                if (!is_null($this->container['osArch']) && !in_array($this->container['osArch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osArch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['osArch']) && !preg_match("/^x86_64|arm$/", $this->container['osArch'])) {
                $invalidProperties[] = "invalid value for 'osArch', must be conform to the pattern /^x86_64|arm$/.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 128)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 0)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPluginStatusAllowableValues();
                if (!is_null($this->container['pluginStatus']) && !in_array($this->container['pluginStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pluginStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['pluginVersion']) && (mb_strlen($this->container['pluginVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'pluginVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pluginVersion']) && (mb_strlen($this->container['pluginVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'pluginVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['statusDetail']) && (mb_strlen($this->container['statusDetail']) > 256)) {
                $invalidProperties[] = "invalid value for 'statusDetail', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['statusDetail']) && (mb_strlen($this->container['statusDetail']) < 0)) {
                $invalidProperties[] = "invalid value for 'statusDetail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installProgress']) && (mb_strlen($this->container['installProgress']) > 100)) {
                $invalidProperties[] = "invalid value for 'installProgress', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['installProgress']) && (mb_strlen($this->container['installProgress']) < 0)) {
                $invalidProperties[] = "invalid value for 'installProgress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remainingTime']) && (mb_strlen($this->container['remainingTime']) > 60)) {
                $invalidProperties[] = "invalid value for 'remainingTime', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['remainingTime']) && (mb_strlen($this->container['remainingTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'remainingTime', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProtectStatusAllowableValues();
                if (!is_null($this->container['protectStatus']) && !in_array($this->container['protectStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectStatus', must be one of '%s'",
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
    * Gets hostId
    *  **参数解释**: 服务器ID **取值范围**: 字符长度1-128
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
    * @param string|null $hostId **参数解释**: 服务器ID **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostType
    *  **参数解释**: 服务器类型 **取值范围**: - host：非容器主机 - container：容器主机
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
    * @param string|null $hostType **参数解释**: 服务器类型 **取值范围**: - host：非容器主机 - container：容器主机
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私网IP地址 **取值范围**: 字符长度0-128
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
    * @param string|null $privateIp **参数解释**: 服务器私网IP地址 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**: 服务器公网IP地址 **取值范围**: 字符长度0-128
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
    * @param string|null $publicIp **参数解释**: 服务器公网IP地址 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**: 服务器状态 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus **参数解释**: 服务器状态 **取值范围**: - ACTIVE：正在运行 - BUILDING：创建中 - ERROR：故障 - SHUTOFF：关机
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
    *  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
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
    * @param string|null $agentStatus **参数解释**: Agent状态 **取值范围**: - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets agentVersion
    *  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
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
    * @param string|null $agentVersion **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 服务器的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**: 服务器的资产重要性 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统
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
    * @param string|null $osType **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统
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
    *  **参数解释**: 系统架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
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
    * @param string|null $osArch **参数解释**: 系统架构 **取值范围**: - x86_64：X86架构 - arm：ARM架构
    *
    * @return $this
    */
    public function setOsArch($osArch)
    {
        $this->container['osArch'] = $osArch;
        return $this;
    }

    /**
    * Gets osName
    *  **参数解释**: 系统名称 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getOsName()
    {
        return $this->container['osName'];
    }

    /**
    * Sets osName
    *
    * @param string|null $osName **参数解释**: 系统名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets osVersion
    *  **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统 系统版本
    *
    * @return string|null
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string|null $osVersion **参数解释**: 操作系统类型 **取值范围**: - linux：Linux操作系统 - windows：windows操作系统 系统版本
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets pluginStatus
    *  **参数解释**: 插件状态 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败
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
    * @param string|null $pluginStatus **参数解释**: 插件状态 **取值范围**: - not_installed：未安装 - installing：安装中 - install_fail：安装失败 - starting：启动中 - running：运行中 - start_fail：启动失败 - offline：离线 - stopping：停止中 - stopped：已停止 - updating：更新中 - update_fail：更新失败 - uninstalling：卸载中 - uninstall_fail：卸载失败
    *
    * @return $this
    */
    public function setPluginStatus($pluginStatus)
    {
        $this->container['pluginStatus'] = $pluginStatus;
        return $this;
    }

    /**
    * Gets pluginVersion
    *  **参数解释**: 插件版本 **取值范围**: 不涉及
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
    * @param string|null $pluginVersion **参数解释**: 插件版本 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setPluginVersion($pluginVersion)
    {
        $this->container['pluginVersion'] = $pluginVersion;
        return $this;
    }

    /**
    * Gets statusDetail
    *  **参数解释**: 插件操作失败原因，包括安装失败、启动失败、离线、停止失败、更新失败以及卸载失败 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getStatusDetail()
    {
        return $this->container['statusDetail'];
    }

    /**
    * Sets statusDetail
    *
    * @param string|null $statusDetail **参数解释**: 插件操作失败原因，包括安装失败、启动失败、离线、停止失败、更新失败以及卸载失败 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setStatusDetail($statusDetail)
    {
        $this->container['statusDetail'] = $statusDetail;
        return $this;
    }

    /**
    * Gets installProgress
    *  **参数解释**: 插件安装进度，百分比 **取值范围**: 0-99
    *
    * @return string|null
    */
    public function getInstallProgress()
    {
        return $this->container['installProgress'];
    }

    /**
    * Sets installProgress
    *
    * @param string|null $installProgress **参数解释**: 插件安装进度，百分比 **取值范围**: 0-99
    *
    * @return $this
    */
    public function setInstallProgress($installProgress)
    {
        $this->container['installProgress'] = $installProgress;
        return $this;
    }

    /**
    * Gets remainingTime
    *  **参数解释**: 插件剩余安装时间，单位分钟 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getRemainingTime()
    {
        return $this->container['remainingTime'];
    }

    /**
    * Sets remainingTime
    *
    * @param string|null $remainingTime **参数解释**: 插件剩余安装时间，单位分钟 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setRemainingTime($remainingTime)
    {
        $this->container['remainingTime'] = $remainingTime;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**: 主机防护状态 **取值范围**: - closed：未开启 - opened：防护中
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
    * @param string|null $protectStatus **参数解释**: 主机防护状态 **取值范围**: - closed：未开启 - opened：防护中
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
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

