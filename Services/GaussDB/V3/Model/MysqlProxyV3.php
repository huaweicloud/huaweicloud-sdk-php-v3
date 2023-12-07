<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlProxyV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlProxyV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态。  取值: - “ACTIVE”，表示数据库代理正常； - “FAILED”，表示数据库代理创建失败； - “DELETED”，表示数据库代理已删除； - “ABNORMAL”，表示数据库代理异常； - “ENABLING PROXY”，表示数据库代理正在开启； - “DISABLING PROXY”，表示数据库代理正在关闭； - “ADDING PROXY NODE”，表示数据库代理正在扩容； - “DELETING READ REPLICAS FROM PROXY”，表示数据库代理正在移除只读节点； - “ADDING READ REPLICAS TO PROXY”，表示数据库代理正在添加只读节点； - “CHANGING WEIGHTS”，表示数据库代理正在修改只读节点权重。
    * address  Proxy读写分离地址。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。  取值范围： - ACTIVE，表示数据库代理正常 - ABNORMAL，表示数据库代理异常 - FAILED，表示数据库代理创建失败 - DELETED，表示数据库代理已删除
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * elbVip  Elb模式的虚拟ip信息。
    * eip  弹性公网IP信息。
    * vcpus  Proxy实例规格的CPU数量。
    * ram  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * mode  Proxy主备模式，取值范围：Cluster。
    * nodes  Proxy节点信息。
    * flavorRef  Proxy规格信息。
    * name  Proxy实例名称。
    * transactionSplit  Proxy事务拆分开关状态【ON/OFF】。
    * connectionPoolType  连接池类型。  取值范围: - CLOSED: 关闭连接池。 - SESSION: 开启会话级连接池。
    * switchConnectionPoolTypeEnabled  数据库代理版本是否支持会话级连接池。  取值范围: - true: 支持。 - false: 不支持。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * balanceRouteModeEnabled  数据库代理版本是否支持负载均衡模式。  取值范围: - true 支持; - false 不支持。
    * consistenceMode  一致性模式。默认值为空，此时以会话一致性参数session_consistence为准。 - session: 会话一致性。 - global: 全局一致性。 - eventual: 最终一致性。
    * subnetId  数据库代理所属的子网ID。
    * sslOption  SSL数据加密开关设置。  取值范围： - true: 开启SSL数据加密。 - false: 关闭SSL数据加密。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'poolId' => 'string',
            'status' => 'string',
            'address' => 'string',
            'port' => 'int',
            'poolStatus' => 'string',
            'delayThresholdInSeconds' => 'int',
            'elbVip' => 'string',
            'eip' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'nodeNum' => 'int',
            'mode' => 'string',
            'nodes' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodes[]',
            'flavorRef' => 'string',
            'name' => 'string',
            'transactionSplit' => 'string',
            'connectionPoolType' => 'string',
            'switchConnectionPoolTypeEnabled' => 'bool',
            'routeMode' => 'int',
            'balanceRouteModeEnabled' => 'bool',
            'consistenceMode' => 'string',
            'subnetId' => 'string',
            'sslOption' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态。  取值: - “ACTIVE”，表示数据库代理正常； - “FAILED”，表示数据库代理创建失败； - “DELETED”，表示数据库代理已删除； - “ABNORMAL”，表示数据库代理异常； - “ENABLING PROXY”，表示数据库代理正在开启； - “DISABLING PROXY”，表示数据库代理正在关闭； - “ADDING PROXY NODE”，表示数据库代理正在扩容； - “DELETING READ REPLICAS FROM PROXY”，表示数据库代理正在移除只读节点； - “ADDING READ REPLICAS TO PROXY”，表示数据库代理正在添加只读节点； - “CHANGING WEIGHTS”，表示数据库代理正在修改只读节点权重。
    * address  Proxy读写分离地址。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。  取值范围： - ACTIVE，表示数据库代理正常 - ABNORMAL，表示数据库代理异常 - FAILED，表示数据库代理创建失败 - DELETED，表示数据库代理已删除
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * elbVip  Elb模式的虚拟ip信息。
    * eip  弹性公网IP信息。
    * vcpus  Proxy实例规格的CPU数量。
    * ram  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * mode  Proxy主备模式，取值范围：Cluster。
    * nodes  Proxy节点信息。
    * flavorRef  Proxy规格信息。
    * name  Proxy实例名称。
    * transactionSplit  Proxy事务拆分开关状态【ON/OFF】。
    * connectionPoolType  连接池类型。  取值范围: - CLOSED: 关闭连接池。 - SESSION: 开启会话级连接池。
    * switchConnectionPoolTypeEnabled  数据库代理版本是否支持会话级连接池。  取值范围: - true: 支持。 - false: 不支持。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * balanceRouteModeEnabled  数据库代理版本是否支持负载均衡模式。  取值范围: - true 支持; - false 不支持。
    * consistenceMode  一致性模式。默认值为空，此时以会话一致性参数session_consistence为准。 - session: 会话一致性。 - global: 全局一致性。 - eventual: 最终一致性。
    * subnetId  数据库代理所属的子网ID。
    * sslOption  SSL数据加密开关设置。  取值范围： - true: 开启SSL数据加密。 - false: 关闭SSL数据加密。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'poolId' => null,
        'status' => null,
        'address' => null,
        'port' => 'int32',
        'poolStatus' => null,
        'delayThresholdInSeconds' => 'int32',
        'elbVip' => null,
        'eip' => null,
        'vcpus' => null,
        'ram' => null,
        'nodeNum' => 'int32',
        'mode' => null,
        'nodes' => null,
        'flavorRef' => null,
        'name' => null,
        'transactionSplit' => null,
        'connectionPoolType' => null,
        'switchConnectionPoolTypeEnabled' => null,
        'routeMode' => 'int32',
        'balanceRouteModeEnabled' => null,
        'consistenceMode' => null,
        'subnetId' => null,
        'sslOption' => null
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
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态。  取值: - “ACTIVE”，表示数据库代理正常； - “FAILED”，表示数据库代理创建失败； - “DELETED”，表示数据库代理已删除； - “ABNORMAL”，表示数据库代理异常； - “ENABLING PROXY”，表示数据库代理正在开启； - “DISABLING PROXY”，表示数据库代理正在关闭； - “ADDING PROXY NODE”，表示数据库代理正在扩容； - “DELETING READ REPLICAS FROM PROXY”，表示数据库代理正在移除只读节点； - “ADDING READ REPLICAS TO PROXY”，表示数据库代理正在添加只读节点； - “CHANGING WEIGHTS”，表示数据库代理正在修改只读节点权重。
    * address  Proxy读写分离地址。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。  取值范围： - ACTIVE，表示数据库代理正常 - ABNORMAL，表示数据库代理异常 - FAILED，表示数据库代理创建失败 - DELETED，表示数据库代理已删除
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * elbVip  Elb模式的虚拟ip信息。
    * eip  弹性公网IP信息。
    * vcpus  Proxy实例规格的CPU数量。
    * ram  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * mode  Proxy主备模式，取值范围：Cluster。
    * nodes  Proxy节点信息。
    * flavorRef  Proxy规格信息。
    * name  Proxy实例名称。
    * transactionSplit  Proxy事务拆分开关状态【ON/OFF】。
    * connectionPoolType  连接池类型。  取值范围: - CLOSED: 关闭连接池。 - SESSION: 开启会话级连接池。
    * switchConnectionPoolTypeEnabled  数据库代理版本是否支持会话级连接池。  取值范围: - true: 支持。 - false: 不支持。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * balanceRouteModeEnabled  数据库代理版本是否支持负载均衡模式。  取值范围: - true 支持; - false 不支持。
    * consistenceMode  一致性模式。默认值为空，此时以会话一致性参数session_consistence为准。 - session: 会话一致性。 - global: 全局一致性。 - eventual: 最终一致性。
    * subnetId  数据库代理所属的子网ID。
    * sslOption  SSL数据加密开关设置。  取值范围： - true: 开启SSL数据加密。 - false: 关闭SSL数据加密。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'poolId' => 'pool_id',
            'status' => 'status',
            'address' => 'address',
            'port' => 'port',
            'poolStatus' => 'pool_status',
            'delayThresholdInSeconds' => 'delay_threshold_in_seconds',
            'elbVip' => 'elb_vip',
            'eip' => 'eip',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'nodeNum' => 'node_num',
            'mode' => 'mode',
            'nodes' => 'nodes',
            'flavorRef' => 'flavor_ref',
            'name' => 'name',
            'transactionSplit' => 'transaction_split',
            'connectionPoolType' => 'connection_pool_type',
            'switchConnectionPoolTypeEnabled' => 'switch_connection_pool_type_enabled',
            'routeMode' => 'route_mode',
            'balanceRouteModeEnabled' => 'balance_route_mode_enabled',
            'consistenceMode' => 'consistence_mode',
            'subnetId' => 'subnet_id',
            'sslOption' => 'ssl_option'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态。  取值: - “ACTIVE”，表示数据库代理正常； - “FAILED”，表示数据库代理创建失败； - “DELETED”，表示数据库代理已删除； - “ABNORMAL”，表示数据库代理异常； - “ENABLING PROXY”，表示数据库代理正在开启； - “DISABLING PROXY”，表示数据库代理正在关闭； - “ADDING PROXY NODE”，表示数据库代理正在扩容； - “DELETING READ REPLICAS FROM PROXY”，表示数据库代理正在移除只读节点； - “ADDING READ REPLICAS TO PROXY”，表示数据库代理正在添加只读节点； - “CHANGING WEIGHTS”，表示数据库代理正在修改只读节点权重。
    * address  Proxy读写分离地址。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。  取值范围： - ACTIVE，表示数据库代理正常 - ABNORMAL，表示数据库代理异常 - FAILED，表示数据库代理创建失败 - DELETED，表示数据库代理已删除
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * elbVip  Elb模式的虚拟ip信息。
    * eip  弹性公网IP信息。
    * vcpus  Proxy实例规格的CPU数量。
    * ram  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * mode  Proxy主备模式，取值范围：Cluster。
    * nodes  Proxy节点信息。
    * flavorRef  Proxy规格信息。
    * name  Proxy实例名称。
    * transactionSplit  Proxy事务拆分开关状态【ON/OFF】。
    * connectionPoolType  连接池类型。  取值范围: - CLOSED: 关闭连接池。 - SESSION: 开启会话级连接池。
    * switchConnectionPoolTypeEnabled  数据库代理版本是否支持会话级连接池。  取值范围: - true: 支持。 - false: 不支持。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * balanceRouteModeEnabled  数据库代理版本是否支持负载均衡模式。  取值范围: - true 支持; - false 不支持。
    * consistenceMode  一致性模式。默认值为空，此时以会话一致性参数session_consistence为准。 - session: 会话一致性。 - global: 全局一致性。 - eventual: 最终一致性。
    * subnetId  数据库代理所属的子网ID。
    * sslOption  SSL数据加密开关设置。  取值范围： - true: 开启SSL数据加密。 - false: 关闭SSL数据加密。
    *
    * @var string[]
    */
    protected static $setters = [
            'poolId' => 'setPoolId',
            'status' => 'setStatus',
            'address' => 'setAddress',
            'port' => 'setPort',
            'poolStatus' => 'setPoolStatus',
            'delayThresholdInSeconds' => 'setDelayThresholdInSeconds',
            'elbVip' => 'setElbVip',
            'eip' => 'setEip',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'nodeNum' => 'setNodeNum',
            'mode' => 'setMode',
            'nodes' => 'setNodes',
            'flavorRef' => 'setFlavorRef',
            'name' => 'setName',
            'transactionSplit' => 'setTransactionSplit',
            'connectionPoolType' => 'setConnectionPoolType',
            'switchConnectionPoolTypeEnabled' => 'setSwitchConnectionPoolTypeEnabled',
            'routeMode' => 'setRouteMode',
            'balanceRouteModeEnabled' => 'setBalanceRouteModeEnabled',
            'consistenceMode' => 'setConsistenceMode',
            'subnetId' => 'setSubnetId',
            'sslOption' => 'setSslOption'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * poolId  Proxy实例ID。
    * status  Proxy实例开启状态。  取值: - “ACTIVE”，表示数据库代理正常； - “FAILED”，表示数据库代理创建失败； - “DELETED”，表示数据库代理已删除； - “ABNORMAL”，表示数据库代理异常； - “ENABLING PROXY”，表示数据库代理正在开启； - “DISABLING PROXY”，表示数据库代理正在关闭； - “ADDING PROXY NODE”，表示数据库代理正在扩容； - “DELETING READ REPLICAS FROM PROXY”，表示数据库代理正在移除只读节点； - “ADDING READ REPLICAS TO PROXY”，表示数据库代理正在添加只读节点； - “CHANGING WEIGHTS”，表示数据库代理正在修改只读节点权重。
    * address  Proxy读写分离地址。
    * port  Proxy端口信息。
    * poolStatus  Proxy实例状态。  取值范围： - ACTIVE，表示数据库代理正常 - ABNORMAL，表示数据库代理异常 - FAILED，表示数据库代理创建失败 - DELETED，表示数据库代理已删除
    * delayThresholdInSeconds  延时阈值，单位：秒。
    * elbVip  Elb模式的虚拟ip信息。
    * eip  弹性公网IP信息。
    * vcpus  Proxy实例规格的CPU数量。
    * ram  Proxy实例规格的内存数量。
    * nodeNum  Proxy节点个数。
    * mode  Proxy主备模式，取值范围：Cluster。
    * nodes  Proxy节点信息。
    * flavorRef  Proxy规格信息。
    * name  Proxy实例名称。
    * transactionSplit  Proxy事务拆分开关状态【ON/OFF】。
    * connectionPoolType  连接池类型。  取值范围: - CLOSED: 关闭连接池。 - SESSION: 开启会话级连接池。
    * switchConnectionPoolTypeEnabled  数据库代理版本是否支持会话级连接池。  取值范围: - true: 支持。 - false: 不支持。
    * routeMode  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    * balanceRouteModeEnabled  数据库代理版本是否支持负载均衡模式。  取值范围: - true 支持; - false 不支持。
    * consistenceMode  一致性模式。默认值为空，此时以会话一致性参数session_consistence为准。 - session: 会话一致性。 - global: 全局一致性。 - eventual: 最终一致性。
    * subnetId  数据库代理所属的子网ID。
    * sslOption  SSL数据加密开关设置。  取值范围： - true: 开启SSL数据加密。 - false: 关闭SSL数据加密。
    *
    * @var string[]
    */
    protected static $getters = [
            'poolId' => 'getPoolId',
            'status' => 'getStatus',
            'address' => 'getAddress',
            'port' => 'getPort',
            'poolStatus' => 'getPoolStatus',
            'delayThresholdInSeconds' => 'getDelayThresholdInSeconds',
            'elbVip' => 'getElbVip',
            'eip' => 'getEip',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'nodeNum' => 'getNodeNum',
            'mode' => 'getMode',
            'nodes' => 'getNodes',
            'flavorRef' => 'getFlavorRef',
            'name' => 'getName',
            'transactionSplit' => 'getTransactionSplit',
            'connectionPoolType' => 'getConnectionPoolType',
            'switchConnectionPoolTypeEnabled' => 'getSwitchConnectionPoolTypeEnabled',
            'routeMode' => 'getRouteMode',
            'balanceRouteModeEnabled' => 'getBalanceRouteModeEnabled',
            'consistenceMode' => 'getConsistenceMode',
            'subnetId' => 'getSubnetId',
            'sslOption' => 'getSslOption'
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['poolStatus'] = isset($data['poolStatus']) ? $data['poolStatus'] : null;
        $this->container['delayThresholdInSeconds'] = isset($data['delayThresholdInSeconds']) ? $data['delayThresholdInSeconds'] : null;
        $this->container['elbVip'] = isset($data['elbVip']) ? $data['elbVip'] : null;
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['transactionSplit'] = isset($data['transactionSplit']) ? $data['transactionSplit'] : null;
        $this->container['connectionPoolType'] = isset($data['connectionPoolType']) ? $data['connectionPoolType'] : null;
        $this->container['switchConnectionPoolTypeEnabled'] = isset($data['switchConnectionPoolTypeEnabled']) ? $data['switchConnectionPoolTypeEnabled'] : null;
        $this->container['routeMode'] = isset($data['routeMode']) ? $data['routeMode'] : null;
        $this->container['balanceRouteModeEnabled'] = isset($data['balanceRouteModeEnabled']) ? $data['balanceRouteModeEnabled'] : null;
        $this->container['consistenceMode'] = isset($data['consistenceMode']) ? $data['consistenceMode'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['sslOption'] = isset($data['sslOption']) ? $data['sslOption'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  Proxy实例ID。
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
    * @param string|null $poolId Proxy实例ID。
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
    *  Proxy实例开启状态。  取值: - “ACTIVE”，表示数据库代理正常； - “FAILED”，表示数据库代理创建失败； - “DELETED”，表示数据库代理已删除； - “ABNORMAL”，表示数据库代理异常； - “ENABLING PROXY”，表示数据库代理正在开启； - “DISABLING PROXY”，表示数据库代理正在关闭； - “ADDING PROXY NODE”，表示数据库代理正在扩容； - “DELETING READ REPLICAS FROM PROXY”，表示数据库代理正在移除只读节点； - “ADDING READ REPLICAS TO PROXY”，表示数据库代理正在添加只读节点； - “CHANGING WEIGHTS”，表示数据库代理正在修改只读节点权重。
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
    * @param string|null $status Proxy实例开启状态。  取值: - “ACTIVE”，表示数据库代理正常； - “FAILED”，表示数据库代理创建失败； - “DELETED”，表示数据库代理已删除； - “ABNORMAL”，表示数据库代理异常； - “ENABLING PROXY”，表示数据库代理正在开启； - “DISABLING PROXY”，表示数据库代理正在关闭； - “ADDING PROXY NODE”，表示数据库代理正在扩容； - “DELETING READ REPLICAS FROM PROXY”，表示数据库代理正在移除只读节点； - “ADDING READ REPLICAS TO PROXY”，表示数据库代理正在添加只读节点； - “CHANGING WEIGHTS”，表示数据库代理正在修改只读节点权重。
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
    *  Proxy读写分离地址。
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
    * @param string|null $address Proxy读写分离地址。
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
    *  Proxy端口信息。
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
    * @param int|null $port Proxy端口信息。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets poolStatus
    *  Proxy实例状态。  取值范围： - ACTIVE，表示数据库代理正常 - ABNORMAL，表示数据库代理异常 - FAILED，表示数据库代理创建失败 - DELETED，表示数据库代理已删除
    *
    * @return string|null
    */
    public function getPoolStatus()
    {
        return $this->container['poolStatus'];
    }

    /**
    * Sets poolStatus
    *
    * @param string|null $poolStatus Proxy实例状态。  取值范围： - ACTIVE，表示数据库代理正常 - ABNORMAL，表示数据库代理异常 - FAILED，表示数据库代理创建失败 - DELETED，表示数据库代理已删除
    *
    * @return $this
    */
    public function setPoolStatus($poolStatus)
    {
        $this->container['poolStatus'] = $poolStatus;
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
    * Gets elbVip
    *  Elb模式的虚拟ip信息。
    *
    * @return string|null
    */
    public function getElbVip()
    {
        return $this->container['elbVip'];
    }

    /**
    * Sets elbVip
    *
    * @param string|null $elbVip Elb模式的虚拟ip信息。
    *
    * @return $this
    */
    public function setElbVip($elbVip)
    {
        $this->container['elbVip'] = $elbVip;
        return $this;
    }

    /**
    * Gets eip
    *  弹性公网IP信息。
    *
    * @return string|null
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param string|null $eip 弹性公网IP信息。
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets vcpus
    *  Proxy实例规格的CPU数量。
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus Proxy实例规格的CPU数量。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  Proxy实例规格的内存数量。
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram Proxy实例规格的内存数量。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets nodeNum
    *  Proxy节点个数。
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
    * @param int|null $nodeNum Proxy节点个数。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets mode
    *  Proxy主备模式，取值范围：Cluster。
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
    * @param string|null $mode Proxy主备模式，取值范围：Cluster。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets nodes
    *  Proxy节点信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodes[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodes[]|null $nodes Proxy节点信息。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets flavorRef
    *  Proxy规格信息。
    *
    * @return string|null
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string|null $flavorRef Proxy规格信息。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets name
    *  Proxy实例名称。
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
    * @param string|null $name Proxy实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets transactionSplit
    *  Proxy事务拆分开关状态【ON/OFF】。
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
    * @param string|null $transactionSplit Proxy事务拆分开关状态【ON/OFF】。
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
    *  连接池类型。  取值范围: - CLOSED: 关闭连接池。 - SESSION: 开启会话级连接池。
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
    * @param string|null $connectionPoolType 连接池类型。  取值范围: - CLOSED: 关闭连接池。 - SESSION: 开启会话级连接池。
    *
    * @return $this
    */
    public function setConnectionPoolType($connectionPoolType)
    {
        $this->container['connectionPoolType'] = $connectionPoolType;
        return $this;
    }

    /**
    * Gets switchConnectionPoolTypeEnabled
    *  数据库代理版本是否支持会话级连接池。  取值范围: - true: 支持。 - false: 不支持。
    *
    * @return bool|null
    */
    public function getSwitchConnectionPoolTypeEnabled()
    {
        return $this->container['switchConnectionPoolTypeEnabled'];
    }

    /**
    * Sets switchConnectionPoolTypeEnabled
    *
    * @param bool|null $switchConnectionPoolTypeEnabled 数据库代理版本是否支持会话级连接池。  取值范围: - true: 支持。 - false: 不支持。
    *
    * @return $this
    */
    public function setSwitchConnectionPoolTypeEnabled($switchConnectionPoolTypeEnabled)
    {
        $this->container['switchConnectionPoolTypeEnabled'] = $switchConnectionPoolTypeEnabled;
        return $this;
    }

    /**
    * Gets routeMode
    *  数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
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
    * @param int|null $routeMode 数据库代理路由模式，默认为权重负载模式。  取值范围: - 0，表示权重负载模式; - 1，表示负载均衡模式（数据库主节点不接受读请求）； - 2，表示负载均衡模式（数据库主节点接受读请求）。
    *
    * @return $this
    */
    public function setRouteMode($routeMode)
    {
        $this->container['routeMode'] = $routeMode;
        return $this;
    }

    /**
    * Gets balanceRouteModeEnabled
    *  数据库代理版本是否支持负载均衡模式。  取值范围: - true 支持; - false 不支持。
    *
    * @return bool|null
    */
    public function getBalanceRouteModeEnabled()
    {
        return $this->container['balanceRouteModeEnabled'];
    }

    /**
    * Sets balanceRouteModeEnabled
    *
    * @param bool|null $balanceRouteModeEnabled 数据库代理版本是否支持负载均衡模式。  取值范围: - true 支持; - false 不支持。
    *
    * @return $this
    */
    public function setBalanceRouteModeEnabled($balanceRouteModeEnabled)
    {
        $this->container['balanceRouteModeEnabled'] = $balanceRouteModeEnabled;
        return $this;
    }

    /**
    * Gets consistenceMode
    *  一致性模式。默认值为空，此时以会话一致性参数session_consistence为准。 - session: 会话一致性。 - global: 全局一致性。 - eventual: 最终一致性。
    *
    * @return string|null
    */
    public function getConsistenceMode()
    {
        return $this->container['consistenceMode'];
    }

    /**
    * Sets consistenceMode
    *
    * @param string|null $consistenceMode 一致性模式。默认值为空，此时以会话一致性参数session_consistence为准。 - session: 会话一致性。 - global: 全局一致性。 - eventual: 最终一致性。
    *
    * @return $this
    */
    public function setConsistenceMode($consistenceMode)
    {
        $this->container['consistenceMode'] = $consistenceMode;
        return $this;
    }

    /**
    * Gets subnetId
    *  数据库代理所属的子网ID。
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
    * @param string|null $subnetId 数据库代理所属的子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets sslOption
    *  SSL数据加密开关设置。  取值范围： - true: 开启SSL数据加密。 - false: 关闭SSL数据加密。
    *
    * @return string|null
    */
    public function getSslOption()
    {
        return $this->container['sslOption'];
    }

    /**
    * Sets sslOption
    *
    * @param string|null $sslOption SSL数据加密开关设置。  取值范围： - true: 开启SSL数据加密。 - false: 关闭SSL数据加密。
    *
    * @return $this
    */
    public function setSslOption($sslOption)
    {
        $this->container['sslOption'] = $sslOption;
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

