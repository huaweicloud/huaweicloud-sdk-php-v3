<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  数据库端口。
    * mode  实例类型。 -  取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。  -  取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 -  取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 -  取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。  -  取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 -  取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。 -  如果不传datastore_type参数，自动忽略该参数设置。 -  默认取值：不涉及。
    * productType  产品类型。 GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * region  实例所在区域。
    * datastore  datastore
    * engine  存储引擎。取值为“rocksDB”。
    * created  实例创建时间。
    * updated  实例操作最新变更的时间。
    * dbUserName  默认用户名。取值为“rwuser”。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * backupStrategy  backupStrategy
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  系统可维护时间窗。
    * groups  组信息。
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * dedicatedResourceId  专属资源ID，只有数据库实例属于专属资源池才会返回该参数。
    * timeZone  时区。
    * actions  实例正在执行的动作。
    * lbIpAddress  负载均衡ip，只有存在负载均衡ip，才会返回该参数。
    * lbPort  负载均衡端口，只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  实例可用区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'port' => 'string',
            'mode' => 'string',
            'productType' => 'string',
            'region' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesDatastoreResult',
            'engine' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'dbUserName' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'backupStrategy' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesBackupStrategyResult',
            'payMode' => 'string',
            'maintenanceWindow' => 'string',
            'groups' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesGroupResult[]',
            'enterpriseProjectId' => 'string',
            'dedicatedResourceId' => 'string',
            'timeZone' => 'string',
            'actions' => 'string[]',
            'lbIpAddress' => 'string',
            'lbPort' => 'string',
            'availabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  数据库端口。
    * mode  实例类型。 -  取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。  -  取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 -  取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 -  取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。  -  取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 -  取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。 -  如果不传datastore_type参数，自动忽略该参数设置。 -  默认取值：不涉及。
    * productType  产品类型。 GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * region  实例所在区域。
    * datastore  datastore
    * engine  存储引擎。取值为“rocksDB”。
    * created  实例创建时间。
    * updated  实例操作最新变更的时间。
    * dbUserName  默认用户名。取值为“rwuser”。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * backupStrategy  backupStrategy
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  系统可维护时间窗。
    * groups  组信息。
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * dedicatedResourceId  专属资源ID，只有数据库实例属于专属资源池才会返回该参数。
    * timeZone  时区。
    * actions  实例正在执行的动作。
    * lbIpAddress  负载均衡ip，只有存在负载均衡ip，才会返回该参数。
    * lbPort  负载均衡端口，只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  实例可用区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'port' => null,
        'mode' => null,
        'productType' => null,
        'region' => null,
        'datastore' => null,
        'engine' => null,
        'created' => null,
        'updated' => null,
        'dbUserName' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'backupStrategy' => null,
        'payMode' => null,
        'maintenanceWindow' => null,
        'groups' => null,
        'enterpriseProjectId' => null,
        'dedicatedResourceId' => null,
        'timeZone' => null,
        'actions' => null,
        'lbIpAddress' => null,
        'lbPort' => null,
        'availabilityZone' => null
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
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  数据库端口。
    * mode  实例类型。 -  取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。  -  取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 -  取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 -  取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。  -  取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 -  取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。 -  如果不传datastore_type参数，自动忽略该参数设置。 -  默认取值：不涉及。
    * productType  产品类型。 GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * region  实例所在区域。
    * datastore  datastore
    * engine  存储引擎。取值为“rocksDB”。
    * created  实例创建时间。
    * updated  实例操作最新变更的时间。
    * dbUserName  默认用户名。取值为“rwuser”。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * backupStrategy  backupStrategy
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  系统可维护时间窗。
    * groups  组信息。
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * dedicatedResourceId  专属资源ID，只有数据库实例属于专属资源池才会返回该参数。
    * timeZone  时区。
    * actions  实例正在执行的动作。
    * lbIpAddress  负载均衡ip，只有存在负载均衡ip，才会返回该参数。
    * lbPort  负载均衡端口，只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  实例可用区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'port' => 'port',
            'mode' => 'mode',
            'productType' => 'product_type',
            'region' => 'region',
            'datastore' => 'datastore',
            'engine' => 'engine',
            'created' => 'created',
            'updated' => 'updated',
            'dbUserName' => 'db_user_name',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'backupStrategy' => 'backup_strategy',
            'payMode' => 'pay_mode',
            'maintenanceWindow' => 'maintenance_window',
            'groups' => 'groups',
            'enterpriseProjectId' => 'enterprise_project_id',
            'dedicatedResourceId' => 'dedicated_resource_id',
            'timeZone' => 'time_zone',
            'actions' => 'actions',
            'lbIpAddress' => 'lb_ip_address',
            'lbPort' => 'lb_port',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  数据库端口。
    * mode  实例类型。 -  取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。  -  取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 -  取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 -  取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。  -  取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 -  取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。 -  如果不传datastore_type参数，自动忽略该参数设置。 -  默认取值：不涉及。
    * productType  产品类型。 GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * region  实例所在区域。
    * datastore  datastore
    * engine  存储引擎。取值为“rocksDB”。
    * created  实例创建时间。
    * updated  实例操作最新变更的时间。
    * dbUserName  默认用户名。取值为“rwuser”。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * backupStrategy  backupStrategy
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  系统可维护时间窗。
    * groups  组信息。
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * dedicatedResourceId  专属资源ID，只有数据库实例属于专属资源池才会返回该参数。
    * timeZone  时区。
    * actions  实例正在执行的动作。
    * lbIpAddress  负载均衡ip，只有存在负载均衡ip，才会返回该参数。
    * lbPort  负载均衡端口，只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  实例可用区。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'port' => 'setPort',
            'mode' => 'setMode',
            'productType' => 'setProductType',
            'region' => 'setRegion',
            'datastore' => 'setDatastore',
            'engine' => 'setEngine',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'dbUserName' => 'setDbUserName',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'backupStrategy' => 'setBackupStrategy',
            'payMode' => 'setPayMode',
            'maintenanceWindow' => 'setMaintenanceWindow',
            'groups' => 'setGroups',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'dedicatedResourceId' => 'setDedicatedResourceId',
            'timeZone' => 'setTimeZone',
            'actions' => 'setActions',
            'lbIpAddress' => 'setLbIpAddress',
            'lbPort' => 'setLbPort',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名称。
    * status  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  数据库端口。
    * mode  实例类型。 -  取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。  -  取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 -  取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 -  取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。  -  取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 -  取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。 -  如果不传datastore_type参数，自动忽略该参数设置。 -  默认取值：不涉及。
    * productType  产品类型。 GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * region  实例所在区域。
    * datastore  datastore
    * engine  存储引擎。取值为“rocksDB”。
    * created  实例创建时间。
    * updated  实例操作最新变更的时间。
    * dbUserName  默认用户名。取值为“rwuser”。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * backupStrategy  backupStrategy
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  系统可维护时间窗。
    * groups  组信息。
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * dedicatedResourceId  专属资源ID，只有数据库实例属于专属资源池才会返回该参数。
    * timeZone  时区。
    * actions  实例正在执行的动作。
    * lbIpAddress  负载均衡ip，只有存在负载均衡ip，才会返回该参数。
    * lbPort  负载均衡端口，只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  实例可用区。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'port' => 'getPort',
            'mode' => 'getMode',
            'productType' => 'getProductType',
            'region' => 'getRegion',
            'datastore' => 'getDatastore',
            'engine' => 'getEngine',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'dbUserName' => 'getDbUserName',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'backupStrategy' => 'getBackupStrategy',
            'payMode' => 'getPayMode',
            'maintenanceWindow' => 'getMaintenanceWindow',
            'groups' => 'getGroups',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'dedicatedResourceId' => 'getDedicatedResourceId',
            'timeZone' => 'getTimeZone',
            'actions' => 'getActions',
            'lbIpAddress' => 'getLbIpAddress',
            'lbPort' => 'getLbPort',
            'availabilityZone' => 'getAvailabilityZone'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['dbUserName'] = isset($data['dbUserName']) ? $data['dbUserName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['payMode'] = isset($data['payMode']) ? $data['payMode'] : null;
        $this->container['maintenanceWindow'] = isset($data['maintenanceWindow']) ? $data['maintenanceWindow'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['dedicatedResourceId'] = isset($data['dedicatedResourceId']) ? $data['dedicatedResourceId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['lbIpAddress'] = isset($data['lbIpAddress']) ? $data['lbIpAddress'] : null;
        $this->container['lbPort'] = isset($data['lbPort']) ? $data['lbPort'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['dbUserName'] === null) {
            $invalidProperties[] = "'dbUserName' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['backupStrategy'] === null) {
            $invalidProperties[] = "'backupStrategy' can't be null";
        }
        if ($this->container['payMode'] === null) {
            $invalidProperties[] = "'payMode' can't be null";
        }
        if ($this->container['maintenanceWindow'] === null) {
            $invalidProperties[] = "'maintenanceWindow' can't be null";
        }
        if ($this->container['groups'] === null) {
            $invalidProperties[] = "'groups' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['timeZone'] === null) {
            $invalidProperties[] = "'timeZone' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
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
    * Gets id
    *  实例ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  实例名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 实例状态。 取值： - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口。
    *
    * @return string
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string $port 数据库端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型。 -  取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。  -  取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 -  取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 -  取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。  -  取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 -  取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。 -  如果不传datastore_type参数，自动忽略该参数设置。 -  默认取值：不涉及。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 实例类型。 -  取值为“Cluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis Proxy经典部署模式集群实例类型。  -  取值为“CloudNativeCluster”，表示GeminiDB Cassandra、GeminiDB Influx、GeminiDB Redis云原生部署模式集群实例类型。 -  取值为“RedisCluster”，表示GeminiDB Redis Cluster经典部署模式集群实例类型。 -  取值为“Replication”，表示GeminiDB Redis经典部署模式主备实例类型。  -  取值为“InfluxdbSingle”，表示GeminiDB Influx经典部署模式单节点实例类型。 -  取值为“ReplicaSet”，表示GeminiDB Mongo副本集实例类型。 -  如果不传datastore_type参数，自动忽略该参数设置。 -  默认取值：不涉及。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets productType
    *  产品类型。 GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    *
    * @return string|null
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param string|null $productType 产品类型。 GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets region
    *  实例所在区域。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 实例所在区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesDatastoreResult
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesDatastoreResult $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets engine
    *  存储引擎。取值为“rocksDB”。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 存储引擎。取值为“rocksDB”。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets created
    *  实例创建时间。
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 实例创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  实例操作最新变更的时间。
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 实例操作最新变更的时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets dbUserName
    *  默认用户名。取值为“rwuser”。
    *
    * @return string
    */
    public function getDbUserName()
    {
        return $this->container['dbUserName'];
    }

    /**
    * Sets dbUserName
    *
    * @param string $dbUserName 默认用户名。取值为“rwuser”。
    *
    * @return $this
    */
    public function setDbUserName($dbUserName)
    {
        $this->container['dbUserName'] = $dbUserName;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesBackupStrategyResult
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesBackupStrategyResult $backupStrategy backupStrategy
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
        return $this;
    }

    /**
    * Gets payMode
    *  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    *
    * @return string
    */
    public function getPayMode()
    {
        return $this->container['payMode'];
    }

    /**
    * Sets payMode
    *
    * @param string $payMode 计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    *
    * @return $this
    */
    public function setPayMode($payMode)
    {
        $this->container['payMode'] = $payMode;
        return $this;
    }

    /**
    * Gets maintenanceWindow
    *  系统可维护时间窗。
    *
    * @return string
    */
    public function getMaintenanceWindow()
    {
        return $this->container['maintenanceWindow'];
    }

    /**
    * Sets maintenanceWindow
    *
    * @param string $maintenanceWindow 系统可维护时间窗。
    *
    * @return $this
    */
    public function setMaintenanceWindow($maintenanceWindow)
    {
        $this->container['maintenanceWindow'] = $maintenanceWindow;
        return $this;
    }

    /**
    * Gets groups
    *  组信息。
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesGroupResult[]
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesGroupResult[] $groups 组信息。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。取值为“0”，表示为default企业项目。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。取值为“0”，表示为default企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets dedicatedResourceId
    *  专属资源ID，只有数据库实例属于专属资源池才会返回该参数。
    *
    * @return string|null
    */
    public function getDedicatedResourceId()
    {
        return $this->container['dedicatedResourceId'];
    }

    /**
    * Sets dedicatedResourceId
    *
    * @param string|null $dedicatedResourceId 专属资源ID，只有数据库实例属于专属资源池才会返回该参数。
    *
    * @return $this
    */
    public function setDedicatedResourceId($dedicatedResourceId)
    {
        $this->container['dedicatedResourceId'] = $dedicatedResourceId;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区。
    *
    * @return string
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string $timeZone 时区。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets actions
    *  实例正在执行的动作。
    *
    * @return string[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[] $actions 实例正在执行的动作。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets lbIpAddress
    *  负载均衡ip，只有存在负载均衡ip，才会返回该参数。
    *
    * @return string|null
    */
    public function getLbIpAddress()
    {
        return $this->container['lbIpAddress'];
    }

    /**
    * Sets lbIpAddress
    *
    * @param string|null $lbIpAddress 负载均衡ip，只有存在负载均衡ip，才会返回该参数。
    *
    * @return $this
    */
    public function setLbIpAddress($lbIpAddress)
    {
        $this->container['lbIpAddress'] = $lbIpAddress;
        return $this;
    }

    /**
    * Gets lbPort
    *  负载均衡端口，只有存在负载均衡ip，才会返回该参数。
    *
    * @return string|null
    */
    public function getLbPort()
    {
        return $this->container['lbPort'];
    }

    /**
    * Sets lbPort
    *
    * @param string|null $lbPort 负载均衡端口，只有存在负载均衡ip，才会返回该参数。
    *
    * @return $this
    */
    public function setLbPort($lbPort)
    {
        $this->container['lbPort'] = $lbPort;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  实例可用区。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 实例可用区。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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

