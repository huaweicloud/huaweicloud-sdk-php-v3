<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * poolId  数据库代理实例ID。
    * status  数据库代理状态。  取值: NORMAL：表示数据库代理正常。 ENABLING：表示数据库代理正在开启。 DISABLING：表示数据库代理正在关闭。 CHANGING_NODE_NUM：表示数据库代理正在调整节点数量。 SCALING: 表示数据库代理正在规格变更。 UPGRADING: 表示数据库代理正在升级内核版本。 IPMODIFYING: 表示数据库代理正在修改读写分离地址。 RESTARTING: 表示数据库代理正在重启进程。 TRANSACTION_SPLITTING: 表示数据库代理正在变更事务拆分功能状态。 CONNECTION_POOL_SWITCH_OPERATING: 表示数据库代理正在变更会话连接池类型。 PORT_MODIFYING: 表示数据库代理正在修改端口。 PROXY_SSL_SWITCHING: 表示数据库代理正在变更SSL状态。 ALT_SWITCH_OPERATING: 表示数据库代理正在变更ALT状态。 CHANGING_RESOURCES: 表示数据库代理正在进行资源变更。 NORMAL: 表示数据库代理正常。 ABNORMAL: 表示数据库代理异常。 FAILED: 表示数据库代理创建失败。 FROZEN: 表示数据库代理已冻结。
    * address  读写分离地址。
    * port  端口号。
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * cpu  数据库代理规格的CPU大小。
    * mem  数据库代理规格的内存大小。
    * nodeNum  数据库代理节点个数。
    * nodes  数据库代理节点信息列表。
    * mode  数据库代理集群模式。 取值：     Cluster：集群模式     Ha：主备模式
    * flavorInfo  flavorInfo
    * transactionSplit  数据库代理事务拆分开关状态。  true：开启。  false：关闭。
    * connectionPoolType  连接池类型。  取值范围:  CLOSED: 关闭连接池。  SESSION: 开启会话级连接池。
    * payMode  数据库代理计费模式。  取值范围： 0:按需计费 1:包周期计费
    * name  数据库代理名称。
    * proxyMode  数据库代理读写模式。 取值范围：     readwrite 读写模式     readonly 只读模式
    * dnsName  数据库代理读写分离地址内网域名。 该字段为空表示未申请读写内网域名。
    * subnetId  数据库代理实例所属子网ID。
    * secondsLevelMonitorFunStatus  数据库代理秒级监控状态。
    * altFlag  ALT开关状态。
    * forceReadOnly  是否强制读路由到只读。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。
    * sslOption  ssl开关状态。
    * supportBalanceRouteMode  数据库代理是否支持开启负载均衡路由模式。
    * supportProxySsl  数据库代理是否支持开启ssl功能。
    * supportSwitchConnectionPoolType  数据库代理是否支持切换会话连接池类型。
    * supportTransactionSplit  数据库代理是否支持开启事务拆分。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'poolId' => 'string',
            'status' => 'string',
            'address' => 'string',
            'port' => 'int',
            'delayThresholdInSeconds' => 'int',
            'cpu' => 'string',
            'mem' => 'string',
            'nodeNum' => 'int',
            'nodes' => '\HuaweiCloud\SDK\Rds\V3\Model\ProxyInfoNodes[]',
            'mode' => 'string',
            'flavorInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ProxyInfoFlavorInfo',
            'transactionSplit' => 'string',
            'connectionPoolType' => 'string',
            'payMode' => 'string',
            'name' => 'string',
            'proxyMode' => 'string',
            'dnsName' => 'string',
            'subnetId' => 'string',
            'secondsLevelMonitorFunStatus' => 'string',
            'altFlag' => 'bool',
            'forceReadOnly' => 'bool',
            'routeMode' => 'int',
            'sslOption' => 'bool',
            'supportBalanceRouteMode' => 'bool',
            'supportProxySsl' => 'bool',
            'supportSwitchConnectionPoolType' => 'bool',
            'supportTransactionSplit' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * poolId  数据库代理实例ID。
    * status  数据库代理状态。  取值: NORMAL：表示数据库代理正常。 ENABLING：表示数据库代理正在开启。 DISABLING：表示数据库代理正在关闭。 CHANGING_NODE_NUM：表示数据库代理正在调整节点数量。 SCALING: 表示数据库代理正在规格变更。 UPGRADING: 表示数据库代理正在升级内核版本。 IPMODIFYING: 表示数据库代理正在修改读写分离地址。 RESTARTING: 表示数据库代理正在重启进程。 TRANSACTION_SPLITTING: 表示数据库代理正在变更事务拆分功能状态。 CONNECTION_POOL_SWITCH_OPERATING: 表示数据库代理正在变更会话连接池类型。 PORT_MODIFYING: 表示数据库代理正在修改端口。 PROXY_SSL_SWITCHING: 表示数据库代理正在变更SSL状态。 ALT_SWITCH_OPERATING: 表示数据库代理正在变更ALT状态。 CHANGING_RESOURCES: 表示数据库代理正在进行资源变更。 NORMAL: 表示数据库代理正常。 ABNORMAL: 表示数据库代理异常。 FAILED: 表示数据库代理创建失败。 FROZEN: 表示数据库代理已冻结。
    * address  读写分离地址。
    * port  端口号。
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * cpu  数据库代理规格的CPU大小。
    * mem  数据库代理规格的内存大小。
    * nodeNum  数据库代理节点个数。
    * nodes  数据库代理节点信息列表。
    * mode  数据库代理集群模式。 取值：     Cluster：集群模式     Ha：主备模式
    * flavorInfo  flavorInfo
    * transactionSplit  数据库代理事务拆分开关状态。  true：开启。  false：关闭。
    * connectionPoolType  连接池类型。  取值范围:  CLOSED: 关闭连接池。  SESSION: 开启会话级连接池。
    * payMode  数据库代理计费模式。  取值范围： 0:按需计费 1:包周期计费
    * name  数据库代理名称。
    * proxyMode  数据库代理读写模式。 取值范围：     readwrite 读写模式     readonly 只读模式
    * dnsName  数据库代理读写分离地址内网域名。 该字段为空表示未申请读写内网域名。
    * subnetId  数据库代理实例所属子网ID。
    * secondsLevelMonitorFunStatus  数据库代理秒级监控状态。
    * altFlag  ALT开关状态。
    * forceReadOnly  是否强制读路由到只读。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。
    * sslOption  ssl开关状态。
    * supportBalanceRouteMode  数据库代理是否支持开启负载均衡路由模式。
    * supportProxySsl  数据库代理是否支持开启ssl功能。
    * supportSwitchConnectionPoolType  数据库代理是否支持切换会话连接池类型。
    * supportTransactionSplit  数据库代理是否支持开启事务拆分。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'poolId' => null,
        'status' => null,
        'address' => null,
        'port' => 'int32',
        'delayThresholdInSeconds' => 'int32',
        'cpu' => null,
        'mem' => null,
        'nodeNum' => 'int32',
        'nodes' => null,
        'mode' => null,
        'flavorInfo' => null,
        'transactionSplit' => null,
        'connectionPoolType' => null,
        'payMode' => null,
        'name' => null,
        'proxyMode' => null,
        'dnsName' => null,
        'subnetId' => null,
        'secondsLevelMonitorFunStatus' => null,
        'altFlag' => null,
        'forceReadOnly' => null,
        'routeMode' => 'int32',
        'sslOption' => null,
        'supportBalanceRouteMode' => null,
        'supportProxySsl' => null,
        'supportSwitchConnectionPoolType' => null,
        'supportTransactionSplit' => null
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
    * poolId  数据库代理实例ID。
    * status  数据库代理状态。  取值: NORMAL：表示数据库代理正常。 ENABLING：表示数据库代理正在开启。 DISABLING：表示数据库代理正在关闭。 CHANGING_NODE_NUM：表示数据库代理正在调整节点数量。 SCALING: 表示数据库代理正在规格变更。 UPGRADING: 表示数据库代理正在升级内核版本。 IPMODIFYING: 表示数据库代理正在修改读写分离地址。 RESTARTING: 表示数据库代理正在重启进程。 TRANSACTION_SPLITTING: 表示数据库代理正在变更事务拆分功能状态。 CONNECTION_POOL_SWITCH_OPERATING: 表示数据库代理正在变更会话连接池类型。 PORT_MODIFYING: 表示数据库代理正在修改端口。 PROXY_SSL_SWITCHING: 表示数据库代理正在变更SSL状态。 ALT_SWITCH_OPERATING: 表示数据库代理正在变更ALT状态。 CHANGING_RESOURCES: 表示数据库代理正在进行资源变更。 NORMAL: 表示数据库代理正常。 ABNORMAL: 表示数据库代理异常。 FAILED: 表示数据库代理创建失败。 FROZEN: 表示数据库代理已冻结。
    * address  读写分离地址。
    * port  端口号。
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * cpu  数据库代理规格的CPU大小。
    * mem  数据库代理规格的内存大小。
    * nodeNum  数据库代理节点个数。
    * nodes  数据库代理节点信息列表。
    * mode  数据库代理集群模式。 取值：     Cluster：集群模式     Ha：主备模式
    * flavorInfo  flavorInfo
    * transactionSplit  数据库代理事务拆分开关状态。  true：开启。  false：关闭。
    * connectionPoolType  连接池类型。  取值范围:  CLOSED: 关闭连接池。  SESSION: 开启会话级连接池。
    * payMode  数据库代理计费模式。  取值范围： 0:按需计费 1:包周期计费
    * name  数据库代理名称。
    * proxyMode  数据库代理读写模式。 取值范围：     readwrite 读写模式     readonly 只读模式
    * dnsName  数据库代理读写分离地址内网域名。 该字段为空表示未申请读写内网域名。
    * subnetId  数据库代理实例所属子网ID。
    * secondsLevelMonitorFunStatus  数据库代理秒级监控状态。
    * altFlag  ALT开关状态。
    * forceReadOnly  是否强制读路由到只读。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。
    * sslOption  ssl开关状态。
    * supportBalanceRouteMode  数据库代理是否支持开启负载均衡路由模式。
    * supportProxySsl  数据库代理是否支持开启ssl功能。
    * supportSwitchConnectionPoolType  数据库代理是否支持切换会话连接池类型。
    * supportTransactionSplit  数据库代理是否支持开启事务拆分。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'poolId' => 'pool_id',
            'status' => 'status',
            'address' => 'address',
            'port' => 'port',
            'delayThresholdInSeconds' => 'delay_threshold_in_seconds',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'nodeNum' => 'node_num',
            'nodes' => 'nodes',
            'mode' => 'mode',
            'flavorInfo' => 'flavor_info',
            'transactionSplit' => 'transaction_split',
            'connectionPoolType' => 'connection_pool_type',
            'payMode' => 'pay_mode',
            'name' => 'name',
            'proxyMode' => 'proxy_mode',
            'dnsName' => 'dns_name',
            'subnetId' => 'subnet_id',
            'secondsLevelMonitorFunStatus' => 'seconds_level_monitor_fun_status',
            'altFlag' => 'alt_flag',
            'forceReadOnly' => 'force_read_only',
            'routeMode' => 'route_mode',
            'sslOption' => 'ssl_option',
            'supportBalanceRouteMode' => 'support_balance_route_mode',
            'supportProxySsl' => 'support_proxy_ssl',
            'supportSwitchConnectionPoolType' => 'support_switch_connection_pool_type',
            'supportTransactionSplit' => 'support_transaction_split'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * poolId  数据库代理实例ID。
    * status  数据库代理状态。  取值: NORMAL：表示数据库代理正常。 ENABLING：表示数据库代理正在开启。 DISABLING：表示数据库代理正在关闭。 CHANGING_NODE_NUM：表示数据库代理正在调整节点数量。 SCALING: 表示数据库代理正在规格变更。 UPGRADING: 表示数据库代理正在升级内核版本。 IPMODIFYING: 表示数据库代理正在修改读写分离地址。 RESTARTING: 表示数据库代理正在重启进程。 TRANSACTION_SPLITTING: 表示数据库代理正在变更事务拆分功能状态。 CONNECTION_POOL_SWITCH_OPERATING: 表示数据库代理正在变更会话连接池类型。 PORT_MODIFYING: 表示数据库代理正在修改端口。 PROXY_SSL_SWITCHING: 表示数据库代理正在变更SSL状态。 ALT_SWITCH_OPERATING: 表示数据库代理正在变更ALT状态。 CHANGING_RESOURCES: 表示数据库代理正在进行资源变更。 NORMAL: 表示数据库代理正常。 ABNORMAL: 表示数据库代理异常。 FAILED: 表示数据库代理创建失败。 FROZEN: 表示数据库代理已冻结。
    * address  读写分离地址。
    * port  端口号。
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * cpu  数据库代理规格的CPU大小。
    * mem  数据库代理规格的内存大小。
    * nodeNum  数据库代理节点个数。
    * nodes  数据库代理节点信息列表。
    * mode  数据库代理集群模式。 取值：     Cluster：集群模式     Ha：主备模式
    * flavorInfo  flavorInfo
    * transactionSplit  数据库代理事务拆分开关状态。  true：开启。  false：关闭。
    * connectionPoolType  连接池类型。  取值范围:  CLOSED: 关闭连接池。  SESSION: 开启会话级连接池。
    * payMode  数据库代理计费模式。  取值范围： 0:按需计费 1:包周期计费
    * name  数据库代理名称。
    * proxyMode  数据库代理读写模式。 取值范围：     readwrite 读写模式     readonly 只读模式
    * dnsName  数据库代理读写分离地址内网域名。 该字段为空表示未申请读写内网域名。
    * subnetId  数据库代理实例所属子网ID。
    * secondsLevelMonitorFunStatus  数据库代理秒级监控状态。
    * altFlag  ALT开关状态。
    * forceReadOnly  是否强制读路由到只读。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。
    * sslOption  ssl开关状态。
    * supportBalanceRouteMode  数据库代理是否支持开启负载均衡路由模式。
    * supportProxySsl  数据库代理是否支持开启ssl功能。
    * supportSwitchConnectionPoolType  数据库代理是否支持切换会话连接池类型。
    * supportTransactionSplit  数据库代理是否支持开启事务拆分。
    *
    * @var string[]
    */
    protected static $setters = [
            'poolId' => 'setPoolId',
            'status' => 'setStatus',
            'address' => 'setAddress',
            'port' => 'setPort',
            'delayThresholdInSeconds' => 'setDelayThresholdInSeconds',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'nodeNum' => 'setNodeNum',
            'nodes' => 'setNodes',
            'mode' => 'setMode',
            'flavorInfo' => 'setFlavorInfo',
            'transactionSplit' => 'setTransactionSplit',
            'connectionPoolType' => 'setConnectionPoolType',
            'payMode' => 'setPayMode',
            'name' => 'setName',
            'proxyMode' => 'setProxyMode',
            'dnsName' => 'setDnsName',
            'subnetId' => 'setSubnetId',
            'secondsLevelMonitorFunStatus' => 'setSecondsLevelMonitorFunStatus',
            'altFlag' => 'setAltFlag',
            'forceReadOnly' => 'setForceReadOnly',
            'routeMode' => 'setRouteMode',
            'sslOption' => 'setSslOption',
            'supportBalanceRouteMode' => 'setSupportBalanceRouteMode',
            'supportProxySsl' => 'setSupportProxySsl',
            'supportSwitchConnectionPoolType' => 'setSupportSwitchConnectionPoolType',
            'supportTransactionSplit' => 'setSupportTransactionSplit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * poolId  数据库代理实例ID。
    * status  数据库代理状态。  取值: NORMAL：表示数据库代理正常。 ENABLING：表示数据库代理正在开启。 DISABLING：表示数据库代理正在关闭。 CHANGING_NODE_NUM：表示数据库代理正在调整节点数量。 SCALING: 表示数据库代理正在规格变更。 UPGRADING: 表示数据库代理正在升级内核版本。 IPMODIFYING: 表示数据库代理正在修改读写分离地址。 RESTARTING: 表示数据库代理正在重启进程。 TRANSACTION_SPLITTING: 表示数据库代理正在变更事务拆分功能状态。 CONNECTION_POOL_SWITCH_OPERATING: 表示数据库代理正在变更会话连接池类型。 PORT_MODIFYING: 表示数据库代理正在修改端口。 PROXY_SSL_SWITCHING: 表示数据库代理正在变更SSL状态。 ALT_SWITCH_OPERATING: 表示数据库代理正在变更ALT状态。 CHANGING_RESOURCES: 表示数据库代理正在进行资源变更。 NORMAL: 表示数据库代理正常。 ABNORMAL: 表示数据库代理异常。 FAILED: 表示数据库代理创建失败。 FROZEN: 表示数据库代理已冻结。
    * address  读写分离地址。
    * port  端口号。
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * cpu  数据库代理规格的CPU大小。
    * mem  数据库代理规格的内存大小。
    * nodeNum  数据库代理节点个数。
    * nodes  数据库代理节点信息列表。
    * mode  数据库代理集群模式。 取值：     Cluster：集群模式     Ha：主备模式
    * flavorInfo  flavorInfo
    * transactionSplit  数据库代理事务拆分开关状态。  true：开启。  false：关闭。
    * connectionPoolType  连接池类型。  取值范围:  CLOSED: 关闭连接池。  SESSION: 开启会话级连接池。
    * payMode  数据库代理计费模式。  取值范围： 0:按需计费 1:包周期计费
    * name  数据库代理名称。
    * proxyMode  数据库代理读写模式。 取值范围：     readwrite 读写模式     readonly 只读模式
    * dnsName  数据库代理读写分离地址内网域名。 该字段为空表示未申请读写内网域名。
    * subnetId  数据库代理实例所属子网ID。
    * secondsLevelMonitorFunStatus  数据库代理秒级监控状态。
    * altFlag  ALT开关状态。
    * forceReadOnly  是否强制读路由到只读。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。
    * sslOption  ssl开关状态。
    * supportBalanceRouteMode  数据库代理是否支持开启负载均衡路由模式。
    * supportProxySsl  数据库代理是否支持开启ssl功能。
    * supportSwitchConnectionPoolType  数据库代理是否支持切换会话连接池类型。
    * supportTransactionSplit  数据库代理是否支持开启事务拆分。
    *
    * @var string[]
    */
    protected static $getters = [
            'poolId' => 'getPoolId',
            'status' => 'getStatus',
            'address' => 'getAddress',
            'port' => 'getPort',
            'delayThresholdInSeconds' => 'getDelayThresholdInSeconds',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'nodeNum' => 'getNodeNum',
            'nodes' => 'getNodes',
            'mode' => 'getMode',
            'flavorInfo' => 'getFlavorInfo',
            'transactionSplit' => 'getTransactionSplit',
            'connectionPoolType' => 'getConnectionPoolType',
            'payMode' => 'getPayMode',
            'name' => 'getName',
            'proxyMode' => 'getProxyMode',
            'dnsName' => 'getDnsName',
            'subnetId' => 'getSubnetId',
            'secondsLevelMonitorFunStatus' => 'getSecondsLevelMonitorFunStatus',
            'altFlag' => 'getAltFlag',
            'forceReadOnly' => 'getForceReadOnly',
            'routeMode' => 'getRouteMode',
            'sslOption' => 'getSslOption',
            'supportBalanceRouteMode' => 'getSupportBalanceRouteMode',
            'supportProxySsl' => 'getSupportProxySsl',
            'supportSwitchConnectionPoolType' => 'getSupportSwitchConnectionPoolType',
            'supportTransactionSplit' => 'getSupportTransactionSplit'
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
    const SECONDS_LEVEL_MONITOR_FUN_STATUS_OFF = 'off';
    const SECONDS_LEVEL_MONITOR_FUN_STATUS_ON = 'on';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSecondsLevelMonitorFunStatusAllowableValues()
    {
        return [
            self::SECONDS_LEVEL_MONITOR_FUN_STATUS_OFF,
            self::SECONDS_LEVEL_MONITOR_FUN_STATUS_ON,
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['delayThresholdInSeconds'] = isset($data['delayThresholdInSeconds']) ? $data['delayThresholdInSeconds'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['flavorInfo'] = isset($data['flavorInfo']) ? $data['flavorInfo'] : null;
        $this->container['transactionSplit'] = isset($data['transactionSplit']) ? $data['transactionSplit'] : null;
        $this->container['connectionPoolType'] = isset($data['connectionPoolType']) ? $data['connectionPoolType'] : null;
        $this->container['payMode'] = isset($data['payMode']) ? $data['payMode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['proxyMode'] = isset($data['proxyMode']) ? $data['proxyMode'] : null;
        $this->container['dnsName'] = isset($data['dnsName']) ? $data['dnsName'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['secondsLevelMonitorFunStatus'] = isset($data['secondsLevelMonitorFunStatus']) ? $data['secondsLevelMonitorFunStatus'] : null;
        $this->container['altFlag'] = isset($data['altFlag']) ? $data['altFlag'] : null;
        $this->container['forceReadOnly'] = isset($data['forceReadOnly']) ? $data['forceReadOnly'] : null;
        $this->container['routeMode'] = isset($data['routeMode']) ? $data['routeMode'] : null;
        $this->container['sslOption'] = isset($data['sslOption']) ? $data['sslOption'] : null;
        $this->container['supportBalanceRouteMode'] = isset($data['supportBalanceRouteMode']) ? $data['supportBalanceRouteMode'] : null;
        $this->container['supportProxySsl'] = isset($data['supportProxySsl']) ? $data['supportProxySsl'] : null;
        $this->container['supportSwitchConnectionPoolType'] = isset($data['supportSwitchConnectionPoolType']) ? $data['supportSwitchConnectionPoolType'] : null;
        $this->container['supportTransactionSplit'] = isset($data['supportTransactionSplit']) ? $data['supportTransactionSplit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSecondsLevelMonitorFunStatusAllowableValues();
                if (!is_null($this->container['secondsLevelMonitorFunStatus']) && !in_array($this->container['secondsLevelMonitorFunStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'secondsLevelMonitorFunStatus', must be one of '%s'",
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
    * Gets poolId
    *  数据库代理实例ID。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId 数据库代理实例ID。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets status
    *  数据库代理状态。  取值: NORMAL：表示数据库代理正常。 ENABLING：表示数据库代理正在开启。 DISABLING：表示数据库代理正在关闭。 CHANGING_NODE_NUM：表示数据库代理正在调整节点数量。 SCALING: 表示数据库代理正在规格变更。 UPGRADING: 表示数据库代理正在升级内核版本。 IPMODIFYING: 表示数据库代理正在修改读写分离地址。 RESTARTING: 表示数据库代理正在重启进程。 TRANSACTION_SPLITTING: 表示数据库代理正在变更事务拆分功能状态。 CONNECTION_POOL_SWITCH_OPERATING: 表示数据库代理正在变更会话连接池类型。 PORT_MODIFYING: 表示数据库代理正在修改端口。 PROXY_SSL_SWITCHING: 表示数据库代理正在变更SSL状态。 ALT_SWITCH_OPERATING: 表示数据库代理正在变更ALT状态。 CHANGING_RESOURCES: 表示数据库代理正在进行资源变更。 NORMAL: 表示数据库代理正常。 ABNORMAL: 表示数据库代理异常。 FAILED: 表示数据库代理创建失败。 FROZEN: 表示数据库代理已冻结。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 数据库代理状态。  取值: NORMAL：表示数据库代理正常。 ENABLING：表示数据库代理正在开启。 DISABLING：表示数据库代理正在关闭。 CHANGING_NODE_NUM：表示数据库代理正在调整节点数量。 SCALING: 表示数据库代理正在规格变更。 UPGRADING: 表示数据库代理正在升级内核版本。 IPMODIFYING: 表示数据库代理正在修改读写分离地址。 RESTARTING: 表示数据库代理正在重启进程。 TRANSACTION_SPLITTING: 表示数据库代理正在变更事务拆分功能状态。 CONNECTION_POOL_SWITCH_OPERATING: 表示数据库代理正在变更会话连接池类型。 PORT_MODIFYING: 表示数据库代理正在修改端口。 PROXY_SSL_SWITCHING: 表示数据库代理正在变更SSL状态。 ALT_SWITCH_OPERATING: 表示数据库代理正在变更ALT状态。 CHANGING_RESOURCES: 表示数据库代理正在进行资源变更。 NORMAL: 表示数据库代理正常。 ABNORMAL: 表示数据库代理异常。 FAILED: 表示数据库代理创建失败。 FROZEN: 表示数据库代理已冻结。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets address
    *  读写分离地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 读写分离地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets port
    *  端口号。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口号。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets delayThresholdInSeconds
    *  延时阈值，单位：秒。
    *
    * @return int|null
    */
    public function getDelayThresholdInSeconds()
    {
        return $this->container['delayThresholdInSeconds'];
    }

    /**
    * Sets delayThresholdInSeconds
    *
    * @param int|null $delayThresholdInSeconds 延时阈值，单位：秒。
    *
    * @return $this
    */
    public function setDelayThresholdInSeconds($delayThresholdInSeconds)
    {
        $this->container['delayThresholdInSeconds'] = $delayThresholdInSeconds;
        return $this;
    }

    /**
    * Gets cpu
    *  数据库代理规格的CPU大小。
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu 数据库代理规格的CPU大小。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  数据库代理规格的内存大小。
    *
    * @return string|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string|null $mem 数据库代理规格的内存大小。
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets nodeNum
    *  数据库代理节点个数。
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum 数据库代理节点个数。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets nodes
    *  数据库代理节点信息列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ProxyInfoNodes[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ProxyInfoNodes[]|null $nodes 数据库代理节点信息列表。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets mode
    *  数据库代理集群模式。 取值：     Cluster：集群模式     Ha：主备模式
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 数据库代理集群模式。 取值：     Cluster：集群模式     Ha：主备模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets flavorInfo
    *  flavorInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ProxyInfoFlavorInfo|null
    */
    public function getFlavorInfo()
    {
        return $this->container['flavorInfo'];
    }

    /**
    * Sets flavorInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ProxyInfoFlavorInfo|null $flavorInfo flavorInfo
    *
    * @return $this
    */
    public function setFlavorInfo($flavorInfo)
    {
        $this->container['flavorInfo'] = $flavorInfo;
        return $this;
    }

    /**
    * Gets transactionSplit
    *  数据库代理事务拆分开关状态。  true：开启。  false：关闭。
    *
    * @return string|null
    */
    public function getTransactionSplit()
    {
        return $this->container['transactionSplit'];
    }

    /**
    * Sets transactionSplit
    *
    * @param string|null $transactionSplit 数据库代理事务拆分开关状态。  true：开启。  false：关闭。
    *
    * @return $this
    */
    public function setTransactionSplit($transactionSplit)
    {
        $this->container['transactionSplit'] = $transactionSplit;
        return $this;
    }

    /**
    * Gets connectionPoolType
    *  连接池类型。  取值范围:  CLOSED: 关闭连接池。  SESSION: 开启会话级连接池。
    *
    * @return string|null
    */
    public function getConnectionPoolType()
    {
        return $this->container['connectionPoolType'];
    }

    /**
    * Sets connectionPoolType
    *
    * @param string|null $connectionPoolType 连接池类型。  取值范围:  CLOSED: 关闭连接池。  SESSION: 开启会话级连接池。
    *
    * @return $this
    */
    public function setConnectionPoolType($connectionPoolType)
    {
        $this->container['connectionPoolType'] = $connectionPoolType;
        return $this;
    }

    /**
    * Gets payMode
    *  数据库代理计费模式。  取值范围： 0:按需计费 1:包周期计费
    *
    * @return string|null
    */
    public function getPayMode()
    {
        return $this->container['payMode'];
    }

    /**
    * Sets payMode
    *
    * @param string|null $payMode 数据库代理计费模式。  取值范围： 0:按需计费 1:包周期计费
    *
    * @return $this
    */
    public function setPayMode($payMode)
    {
        $this->container['payMode'] = $payMode;
        return $this;
    }

    /**
    * Gets name
    *  数据库代理名称。
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
    * @param string|null $name 数据库代理名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets proxyMode
    *  数据库代理读写模式。 取值范围：     readwrite 读写模式     readonly 只读模式
    *
    * @return string|null
    */
    public function getProxyMode()
    {
        return $this->container['proxyMode'];
    }

    /**
    * Sets proxyMode
    *
    * @param string|null $proxyMode 数据库代理读写模式。 取值范围：     readwrite 读写模式     readonly 只读模式
    *
    * @return $this
    */
    public function setProxyMode($proxyMode)
    {
        $this->container['proxyMode'] = $proxyMode;
        return $this;
    }

    /**
    * Gets dnsName
    *  数据库代理读写分离地址内网域名。 该字段为空表示未申请读写内网域名。
    *
    * @return string|null
    */
    public function getDnsName()
    {
        return $this->container['dnsName'];
    }

    /**
    * Sets dnsName
    *
    * @param string|null $dnsName 数据库代理读写分离地址内网域名。 该字段为空表示未申请读写内网域名。
    *
    * @return $this
    */
    public function setDnsName($dnsName)
    {
        $this->container['dnsName'] = $dnsName;
        return $this;
    }

    /**
    * Gets subnetId
    *  数据库代理实例所属子网ID。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 数据库代理实例所属子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets secondsLevelMonitorFunStatus
    *  数据库代理秒级监控状态。
    *
    * @return string|null
    */
    public function getSecondsLevelMonitorFunStatus()
    {
        return $this->container['secondsLevelMonitorFunStatus'];
    }

    /**
    * Sets secondsLevelMonitorFunStatus
    *
    * @param string|null $secondsLevelMonitorFunStatus 数据库代理秒级监控状态。
    *
    * @return $this
    */
    public function setSecondsLevelMonitorFunStatus($secondsLevelMonitorFunStatus)
    {
        $this->container['secondsLevelMonitorFunStatus'] = $secondsLevelMonitorFunStatus;
        return $this;
    }

    /**
    * Gets altFlag
    *  ALT开关状态。
    *
    * @return bool|null
    */
    public function getAltFlag()
    {
        return $this->container['altFlag'];
    }

    /**
    * Sets altFlag
    *
    * @param bool|null $altFlag ALT开关状态。
    *
    * @return $this
    */
    public function setAltFlag($altFlag)
    {
        $this->container['altFlag'] = $altFlag;
        return $this;
    }

    /**
    * Gets forceReadOnly
    *  是否强制读路由到只读。
    *
    * @return bool|null
    */
    public function getForceReadOnly()
    {
        return $this->container['forceReadOnly'];
    }

    /**
    * Sets forceReadOnly
    *
    * @param bool|null $forceReadOnly 是否强制读路由到只读。
    *
    * @return $this
    */
    public function setForceReadOnly($forceReadOnly)
    {
        $this->container['forceReadOnly'] = $forceReadOnly;
        return $this;
    }

    /**
    * Gets routeMode
    *  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。
    *
    * @return int|null
    */
    public function getRouteMode()
    {
        return $this->container['routeMode'];
    }

    /**
    * Sets routeMode
    *
    * @param int|null $routeMode 数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。
    *
    * @return $this
    */
    public function setRouteMode($routeMode)
    {
        $this->container['routeMode'] = $routeMode;
        return $this;
    }

    /**
    * Gets sslOption
    *  ssl开关状态。
    *
    * @return bool|null
    */
    public function getSslOption()
    {
        return $this->container['sslOption'];
    }

    /**
    * Sets sslOption
    *
    * @param bool|null $sslOption ssl开关状态。
    *
    * @return $this
    */
    public function setSslOption($sslOption)
    {
        $this->container['sslOption'] = $sslOption;
        return $this;
    }

    /**
    * Gets supportBalanceRouteMode
    *  数据库代理是否支持开启负载均衡路由模式。
    *
    * @return bool|null
    */
    public function getSupportBalanceRouteMode()
    {
        return $this->container['supportBalanceRouteMode'];
    }

    /**
    * Sets supportBalanceRouteMode
    *
    * @param bool|null $supportBalanceRouteMode 数据库代理是否支持开启负载均衡路由模式。
    *
    * @return $this
    */
    public function setSupportBalanceRouteMode($supportBalanceRouteMode)
    {
        $this->container['supportBalanceRouteMode'] = $supportBalanceRouteMode;
        return $this;
    }

    /**
    * Gets supportProxySsl
    *  数据库代理是否支持开启ssl功能。
    *
    * @return bool|null
    */
    public function getSupportProxySsl()
    {
        return $this->container['supportProxySsl'];
    }

    /**
    * Sets supportProxySsl
    *
    * @param bool|null $supportProxySsl 数据库代理是否支持开启ssl功能。
    *
    * @return $this
    */
    public function setSupportProxySsl($supportProxySsl)
    {
        $this->container['supportProxySsl'] = $supportProxySsl;
        return $this;
    }

    /**
    * Gets supportSwitchConnectionPoolType
    *  数据库代理是否支持切换会话连接池类型。
    *
    * @return bool|null
    */
    public function getSupportSwitchConnectionPoolType()
    {
        return $this->container['supportSwitchConnectionPoolType'];
    }

    /**
    * Sets supportSwitchConnectionPoolType
    *
    * @param bool|null $supportSwitchConnectionPoolType 数据库代理是否支持切换会话连接池类型。
    *
    * @return $this
    */
    public function setSupportSwitchConnectionPoolType($supportSwitchConnectionPoolType)
    {
        $this->container['supportSwitchConnectionPoolType'] = $supportSwitchConnectionPoolType;
        return $this;
    }

    /**
    * Gets supportTransactionSplit
    *  数据库代理是否支持开启事务拆分。
    *
    * @return bool|null
    */
    public function getSupportTransactionSplit()
    {
        return $this->container['supportTransactionSplit'];
    }

    /**
    * Sets supportTransactionSplit
    *
    * @param bool|null $supportTransactionSplit 数据库代理是否支持开启事务拆分。
    *
    * @return $this
    */
    public function setSupportTransactionSplit($supportTransactionSplit)
    {
        $this->container['supportTransactionSplit'] = $supportTransactionSplit;
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

