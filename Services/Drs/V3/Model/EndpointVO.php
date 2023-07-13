<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库id。
    * objId  对象id。
    * instanceName  RDS实例名称。
    * dbType  数据库类型
    * dbUser  数据库用户。
    * dbPassword  数据库密码。
    * manageIp  管理IP。
    * trafficIp  流量IP。
    * dbPort  数据库端口。
    * region  RDS实例所在region。
    * createdAt  创建日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  修改日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * ip  迁移实例所在的私有IP。
    * publicIp  迁移实例所在的公网IP。
    * azCode  可用区azCode。
    * securityGroupId  源库所在的安全组id。
    * subnetId  源库所在的子网id。
    * vpcId  源库所在的虚拟私有云id。
    * volumeSize  迁移实例的磁盘大小。
    * fullTransUserPwd  全量迁移用户密码，密文。
    * incrementTransUserPwd  增量迁移用户密码，密文。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容。
    * sslCertName  SSL证书名字。
    * sslCertCheckSum  SSL证书内容checksum值。
    * sslCertPassword  SSL证书密码，密文。
    * dbVersion  数据库版本。
    * mongoHaMode  mongoHa模式。 - Sharding 集群 - ReplicaSet 副本集 - ReplicaSingle 单节点
    * projectId  RDS实例projectId。
    * clusterMode  集群模式。 - Single：单节点RDS - Ha：主备RDS - GR：金融版RDS - Sharding：mongodb 集群或DDM的模式，均默认为分片 - Sharding4.0+：mongodb 集群版本4.0+，默认为不分片 - ReplicaSet：mongodb 副本集,Replica RDS只读副本 - ReplicaSingle：mongodb 单节点 - Cluster：集群 - Independent：gaussdbv5 independent模式 - Combined：gaussdbv5 Combined模式 - Distributed ：分布式taurus - NoSharding：非集群模式
    * instanceId  RDS实例id。
    * dbName  Oracle服务名serviceName。
    * topic  mrskafka topic名称。
    * safeMode  MRSkafka是否开启kerberos认证 - 0非安全认证 - 1安全认证
    * kerberosVo  kerberosVo
    * multiWriteDbId  多写数据库Id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'objId' => 'string',
            'instanceName' => 'string',
            'dbType' => 'string',
            'dbUser' => 'string',
            'dbPassword' => 'string',
            'manageIp' => 'string',
            'trafficIp' => 'string',
            'dbPort' => 'int',
            'region' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'ip' => 'string',
            'publicIp' => 'string',
            'azCode' => 'string',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'vpcId' => 'string',
            'volumeSize' => 'int',
            'fullTransUserPwd' => 'string',
            'incrementTransUserPwd' => 'string',
            'sslLink' => 'bool',
            'sslCertKey' => 'string',
            'sslCertName' => 'string',
            'sslCertCheckSum' => 'string',
            'sslCertPassword' => 'string',
            'dbVersion' => 'string',
            'mongoHaMode' => 'string',
            'projectId' => 'string',
            'clusterMode' => 'string',
            'instanceId' => 'string',
            'dbName' => 'string',
            'topic' => 'string',
            'safeMode' => 'int',
            'kerberosVo' => '\HuaweiCloud\SDK\Drs\V3\Model\KerberosVO',
            'multiWriteDbId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库id。
    * objId  对象id。
    * instanceName  RDS实例名称。
    * dbType  数据库类型
    * dbUser  数据库用户。
    * dbPassword  数据库密码。
    * manageIp  管理IP。
    * trafficIp  流量IP。
    * dbPort  数据库端口。
    * region  RDS实例所在region。
    * createdAt  创建日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  修改日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * ip  迁移实例所在的私有IP。
    * publicIp  迁移实例所在的公网IP。
    * azCode  可用区azCode。
    * securityGroupId  源库所在的安全组id。
    * subnetId  源库所在的子网id。
    * vpcId  源库所在的虚拟私有云id。
    * volumeSize  迁移实例的磁盘大小。
    * fullTransUserPwd  全量迁移用户密码，密文。
    * incrementTransUserPwd  增量迁移用户密码，密文。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容。
    * sslCertName  SSL证书名字。
    * sslCertCheckSum  SSL证书内容checksum值。
    * sslCertPassword  SSL证书密码，密文。
    * dbVersion  数据库版本。
    * mongoHaMode  mongoHa模式。 - Sharding 集群 - ReplicaSet 副本集 - ReplicaSingle 单节点
    * projectId  RDS实例projectId。
    * clusterMode  集群模式。 - Single：单节点RDS - Ha：主备RDS - GR：金融版RDS - Sharding：mongodb 集群或DDM的模式，均默认为分片 - Sharding4.0+：mongodb 集群版本4.0+，默认为不分片 - ReplicaSet：mongodb 副本集,Replica RDS只读副本 - ReplicaSingle：mongodb 单节点 - Cluster：集群 - Independent：gaussdbv5 independent模式 - Combined：gaussdbv5 Combined模式 - Distributed ：分布式taurus - NoSharding：非集群模式
    * instanceId  RDS实例id。
    * dbName  Oracle服务名serviceName。
    * topic  mrskafka topic名称。
    * safeMode  MRSkafka是否开启kerberos认证 - 0非安全认证 - 1安全认证
    * kerberosVo  kerberosVo
    * multiWriteDbId  多写数据库Id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'objId' => null,
        'instanceName' => null,
        'dbType' => null,
        'dbUser' => null,
        'dbPassword' => null,
        'manageIp' => null,
        'trafficIp' => null,
        'dbPort' => 'int32',
        'region' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'ip' => null,
        'publicIp' => null,
        'azCode' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'vpcId' => null,
        'volumeSize' => 'int64',
        'fullTransUserPwd' => null,
        'incrementTransUserPwd' => null,
        'sslLink' => null,
        'sslCertKey' => null,
        'sslCertName' => null,
        'sslCertCheckSum' => null,
        'sslCertPassword' => null,
        'dbVersion' => null,
        'mongoHaMode' => null,
        'projectId' => null,
        'clusterMode' => null,
        'instanceId' => null,
        'dbName' => null,
        'topic' => null,
        'safeMode' => 'int32',
        'kerberosVo' => null,
        'multiWriteDbId' => null
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
    * id  数据库id。
    * objId  对象id。
    * instanceName  RDS实例名称。
    * dbType  数据库类型
    * dbUser  数据库用户。
    * dbPassword  数据库密码。
    * manageIp  管理IP。
    * trafficIp  流量IP。
    * dbPort  数据库端口。
    * region  RDS实例所在region。
    * createdAt  创建日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  修改日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * ip  迁移实例所在的私有IP。
    * publicIp  迁移实例所在的公网IP。
    * azCode  可用区azCode。
    * securityGroupId  源库所在的安全组id。
    * subnetId  源库所在的子网id。
    * vpcId  源库所在的虚拟私有云id。
    * volumeSize  迁移实例的磁盘大小。
    * fullTransUserPwd  全量迁移用户密码，密文。
    * incrementTransUserPwd  增量迁移用户密码，密文。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容。
    * sslCertName  SSL证书名字。
    * sslCertCheckSum  SSL证书内容checksum值。
    * sslCertPassword  SSL证书密码，密文。
    * dbVersion  数据库版本。
    * mongoHaMode  mongoHa模式。 - Sharding 集群 - ReplicaSet 副本集 - ReplicaSingle 单节点
    * projectId  RDS实例projectId。
    * clusterMode  集群模式。 - Single：单节点RDS - Ha：主备RDS - GR：金融版RDS - Sharding：mongodb 集群或DDM的模式，均默认为分片 - Sharding4.0+：mongodb 集群版本4.0+，默认为不分片 - ReplicaSet：mongodb 副本集,Replica RDS只读副本 - ReplicaSingle：mongodb 单节点 - Cluster：集群 - Independent：gaussdbv5 independent模式 - Combined：gaussdbv5 Combined模式 - Distributed ：分布式taurus - NoSharding：非集群模式
    * instanceId  RDS实例id。
    * dbName  Oracle服务名serviceName。
    * topic  mrskafka topic名称。
    * safeMode  MRSkafka是否开启kerberos认证 - 0非安全认证 - 1安全认证
    * kerberosVo  kerberosVo
    * multiWriteDbId  多写数据库Id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'objId' => 'obj_id',
            'instanceName' => 'instance_name',
            'dbType' => 'db_type',
            'dbUser' => 'db_user',
            'dbPassword' => 'db_password',
            'manageIp' => 'manage_ip',
            'trafficIp' => 'traffic_ip',
            'dbPort' => 'db_port',
            'region' => 'region',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'ip' => 'ip',
            'publicIp' => 'public_ip',
            'azCode' => 'az_code',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'vpcId' => 'vpc_id',
            'volumeSize' => 'volume_size',
            'fullTransUserPwd' => 'full_trans_user_pwd',
            'incrementTransUserPwd' => 'increment_trans_user_pwd',
            'sslLink' => 'ssl_link',
            'sslCertKey' => 'ssl_cert_key',
            'sslCertName' => 'ssl_cert_name',
            'sslCertCheckSum' => 'ssl_cert_check_sum',
            'sslCertPassword' => 'ssl_cert_password',
            'dbVersion' => 'db_version',
            'mongoHaMode' => 'mongo_ha_mode',
            'projectId' => 'project_id',
            'clusterMode' => 'cluster_mode',
            'instanceId' => 'instance_id',
            'dbName' => 'db_name',
            'topic' => 'topic',
            'safeMode' => 'safe_mode',
            'kerberosVo' => 'kerberos_vo',
            'multiWriteDbId' => 'multi_write_db_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库id。
    * objId  对象id。
    * instanceName  RDS实例名称。
    * dbType  数据库类型
    * dbUser  数据库用户。
    * dbPassword  数据库密码。
    * manageIp  管理IP。
    * trafficIp  流量IP。
    * dbPort  数据库端口。
    * region  RDS实例所在region。
    * createdAt  创建日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  修改日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * ip  迁移实例所在的私有IP。
    * publicIp  迁移实例所在的公网IP。
    * azCode  可用区azCode。
    * securityGroupId  源库所在的安全组id。
    * subnetId  源库所在的子网id。
    * vpcId  源库所在的虚拟私有云id。
    * volumeSize  迁移实例的磁盘大小。
    * fullTransUserPwd  全量迁移用户密码，密文。
    * incrementTransUserPwd  增量迁移用户密码，密文。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容。
    * sslCertName  SSL证书名字。
    * sslCertCheckSum  SSL证书内容checksum值。
    * sslCertPassword  SSL证书密码，密文。
    * dbVersion  数据库版本。
    * mongoHaMode  mongoHa模式。 - Sharding 集群 - ReplicaSet 副本集 - ReplicaSingle 单节点
    * projectId  RDS实例projectId。
    * clusterMode  集群模式。 - Single：单节点RDS - Ha：主备RDS - GR：金融版RDS - Sharding：mongodb 集群或DDM的模式，均默认为分片 - Sharding4.0+：mongodb 集群版本4.0+，默认为不分片 - ReplicaSet：mongodb 副本集,Replica RDS只读副本 - ReplicaSingle：mongodb 单节点 - Cluster：集群 - Independent：gaussdbv5 independent模式 - Combined：gaussdbv5 Combined模式 - Distributed ：分布式taurus - NoSharding：非集群模式
    * instanceId  RDS实例id。
    * dbName  Oracle服务名serviceName。
    * topic  mrskafka topic名称。
    * safeMode  MRSkafka是否开启kerberos认证 - 0非安全认证 - 1安全认证
    * kerberosVo  kerberosVo
    * multiWriteDbId  多写数据库Id。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'objId' => 'setObjId',
            'instanceName' => 'setInstanceName',
            'dbType' => 'setDbType',
            'dbUser' => 'setDbUser',
            'dbPassword' => 'setDbPassword',
            'manageIp' => 'setManageIp',
            'trafficIp' => 'setTrafficIp',
            'dbPort' => 'setDbPort',
            'region' => 'setRegion',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'ip' => 'setIp',
            'publicIp' => 'setPublicIp',
            'azCode' => 'setAzCode',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'vpcId' => 'setVpcId',
            'volumeSize' => 'setVolumeSize',
            'fullTransUserPwd' => 'setFullTransUserPwd',
            'incrementTransUserPwd' => 'setIncrementTransUserPwd',
            'sslLink' => 'setSslLink',
            'sslCertKey' => 'setSslCertKey',
            'sslCertName' => 'setSslCertName',
            'sslCertCheckSum' => 'setSslCertCheckSum',
            'sslCertPassword' => 'setSslCertPassword',
            'dbVersion' => 'setDbVersion',
            'mongoHaMode' => 'setMongoHaMode',
            'projectId' => 'setProjectId',
            'clusterMode' => 'setClusterMode',
            'instanceId' => 'setInstanceId',
            'dbName' => 'setDbName',
            'topic' => 'setTopic',
            'safeMode' => 'setSafeMode',
            'kerberosVo' => 'setKerberosVo',
            'multiWriteDbId' => 'setMultiWriteDbId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库id。
    * objId  对象id。
    * instanceName  RDS实例名称。
    * dbType  数据库类型
    * dbUser  数据库用户。
    * dbPassword  数据库密码。
    * manageIp  管理IP。
    * trafficIp  流量IP。
    * dbPort  数据库端口。
    * region  RDS实例所在region。
    * createdAt  创建日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  修改日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    * ip  迁移实例所在的私有IP。
    * publicIp  迁移实例所在的公网IP。
    * azCode  可用区azCode。
    * securityGroupId  源库所在的安全组id。
    * subnetId  源库所在的子网id。
    * vpcId  源库所在的虚拟私有云id。
    * volumeSize  迁移实例的磁盘大小。
    * fullTransUserPwd  全量迁移用户密码，密文。
    * incrementTransUserPwd  增量迁移用户密码，密文。
    * sslLink  是否SSL安全连接。
    * sslCertKey  SSL证书内容。
    * sslCertName  SSL证书名字。
    * sslCertCheckSum  SSL证书内容checksum值。
    * sslCertPassword  SSL证书密码，密文。
    * dbVersion  数据库版本。
    * mongoHaMode  mongoHa模式。 - Sharding 集群 - ReplicaSet 副本集 - ReplicaSingle 单节点
    * projectId  RDS实例projectId。
    * clusterMode  集群模式。 - Single：单节点RDS - Ha：主备RDS - GR：金融版RDS - Sharding：mongodb 集群或DDM的模式，均默认为分片 - Sharding4.0+：mongodb 集群版本4.0+，默认为不分片 - ReplicaSet：mongodb 副本集,Replica RDS只读副本 - ReplicaSingle：mongodb 单节点 - Cluster：集群 - Independent：gaussdbv5 independent模式 - Combined：gaussdbv5 Combined模式 - Distributed ：分布式taurus - NoSharding：非集群模式
    * instanceId  RDS实例id。
    * dbName  Oracle服务名serviceName。
    * topic  mrskafka topic名称。
    * safeMode  MRSkafka是否开启kerberos认证 - 0非安全认证 - 1安全认证
    * kerberosVo  kerberosVo
    * multiWriteDbId  多写数据库Id。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'objId' => 'getObjId',
            'instanceName' => 'getInstanceName',
            'dbType' => 'getDbType',
            'dbUser' => 'getDbUser',
            'dbPassword' => 'getDbPassword',
            'manageIp' => 'getManageIp',
            'trafficIp' => 'getTrafficIp',
            'dbPort' => 'getDbPort',
            'region' => 'getRegion',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'ip' => 'getIp',
            'publicIp' => 'getPublicIp',
            'azCode' => 'getAzCode',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'vpcId' => 'getVpcId',
            'volumeSize' => 'getVolumeSize',
            'fullTransUserPwd' => 'getFullTransUserPwd',
            'incrementTransUserPwd' => 'getIncrementTransUserPwd',
            'sslLink' => 'getSslLink',
            'sslCertKey' => 'getSslCertKey',
            'sslCertName' => 'getSslCertName',
            'sslCertCheckSum' => 'getSslCertCheckSum',
            'sslCertPassword' => 'getSslCertPassword',
            'dbVersion' => 'getDbVersion',
            'mongoHaMode' => 'getMongoHaMode',
            'projectId' => 'getProjectId',
            'clusterMode' => 'getClusterMode',
            'instanceId' => 'getInstanceId',
            'dbName' => 'getDbName',
            'topic' => 'getTopic',
            'safeMode' => 'getSafeMode',
            'kerberosVo' => 'getKerberosVo',
            'multiWriteDbId' => 'getMultiWriteDbId'
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
    const DB_TYPE_MYSQL = 'mysql';
    const DB_TYPE_MONGODB = 'mongodb';
    const MONGO_HA_MODE_SHARDING = 'Sharding';
    const MONGO_HA_MODE_REPLICA_SET = 'ReplicaSet';
    const MONGO_HA_MODE_REPLICA_SINGLE = 'ReplicaSingle';
    const CLUSTER_MODE_SINGLE = 'Single';
    const CLUSTER_MODE_HA = 'Ha';
    const CLUSTER_MODE_GR = 'GR';
    const CLUSTER_MODE_SHARDING = 'Sharding';
    const CLUSTER_MODE_SHARDING4_0 = 'Sharding4.0+';
    const CLUSTER_MODE_REPLICA_SET = 'ReplicaSet';
    const CLUSTER_MODE_REPLICA = 'Replica';
    const CLUSTER_MODE_REPLICA_SINGLE = 'ReplicaSingle';
    const CLUSTER_MODE_CLUSTER = 'Cluster';
    const CLUSTER_MODE_INDEPENDENT = 'Independent';
    const CLUSTER_MODE_COMBINED = 'Combined';
    const CLUSTER_MODE_DISTRIBUTED = 'Distributed';
    const CLUSTER_MODE_NO_SHARDING = 'NoSharding';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbTypeAllowableValues()
    {
        return [
            self::DB_TYPE_MYSQL,
            self::DB_TYPE_MONGODB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMongoHaModeAllowableValues()
    {
        return [
            self::MONGO_HA_MODE_SHARDING,
            self::MONGO_HA_MODE_REPLICA_SET,
            self::MONGO_HA_MODE_REPLICA_SINGLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterModeAllowableValues()
    {
        return [
            self::CLUSTER_MODE_SINGLE,
            self::CLUSTER_MODE_HA,
            self::CLUSTER_MODE_GR,
            self::CLUSTER_MODE_SHARDING,
            self::CLUSTER_MODE_SHARDING4_0,
            self::CLUSTER_MODE_REPLICA_SET,
            self::CLUSTER_MODE_REPLICA,
            self::CLUSTER_MODE_REPLICA_SINGLE,
            self::CLUSTER_MODE_CLUSTER,
            self::CLUSTER_MODE_INDEPENDENT,
            self::CLUSTER_MODE_COMBINED,
            self::CLUSTER_MODE_DISTRIBUTED,
            self::CLUSTER_MODE_NO_SHARDING,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['objId'] = isset($data['objId']) ? $data['objId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['dbPassword'] = isset($data['dbPassword']) ? $data['dbPassword'] : null;
        $this->container['manageIp'] = isset($data['manageIp']) ? $data['manageIp'] : null;
        $this->container['trafficIp'] = isset($data['trafficIp']) ? $data['trafficIp'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['fullTransUserPwd'] = isset($data['fullTransUserPwd']) ? $data['fullTransUserPwd'] : null;
        $this->container['incrementTransUserPwd'] = isset($data['incrementTransUserPwd']) ? $data['incrementTransUserPwd'] : null;
        $this->container['sslLink'] = isset($data['sslLink']) ? $data['sslLink'] : null;
        $this->container['sslCertKey'] = isset($data['sslCertKey']) ? $data['sslCertKey'] : null;
        $this->container['sslCertName'] = isset($data['sslCertName']) ? $data['sslCertName'] : null;
        $this->container['sslCertCheckSum'] = isset($data['sslCertCheckSum']) ? $data['sslCertCheckSum'] : null;
        $this->container['sslCertPassword'] = isset($data['sslCertPassword']) ? $data['sslCertPassword'] : null;
        $this->container['dbVersion'] = isset($data['dbVersion']) ? $data['dbVersion'] : null;
        $this->container['mongoHaMode'] = isset($data['mongoHaMode']) ? $data['mongoHaMode'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['safeMode'] = isset($data['safeMode']) ? $data['safeMode'] : null;
        $this->container['kerberosVo'] = isset($data['kerberosVo']) ? $data['kerberosVo'] : null;
        $this->container['multiWriteDbId'] = isset($data['multiWriteDbId']) ? $data['multiWriteDbId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDbTypeAllowableValues();
                if (!is_null($this->container['dbType']) && !in_array($this->container['dbType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMongoHaModeAllowableValues();
                if (!is_null($this->container['mongoHaMode']) && !in_array($this->container['mongoHaMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mongoHaMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getClusterModeAllowableValues();
                if (!is_null($this->container['clusterMode']) && !in_array($this->container['clusterMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterMode', must be one of '%s'",
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
    * Gets id
    *  数据库id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 数据库id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets objId
    *  对象id。
    *
    * @return string|null
    */
    public function getObjId()
    {
        return $this->container['objId'];
    }

    /**
    * Sets objId
    *
    * @param string|null $objId 对象id。
    *
    * @return $this
    */
    public function setObjId($objId)
    {
        $this->container['objId'] = $objId;
        return $this;
    }

    /**
    * Gets instanceName
    *  RDS实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName RDS实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets dbType
    *  数据库类型
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType 数据库类型
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets dbUser
    *  数据库用户。
    *
    * @return string|null
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string|null $dbUser 数据库用户。
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets dbPassword
    *  数据库密码。
    *
    * @return string|null
    */
    public function getDbPassword()
    {
        return $this->container['dbPassword'];
    }

    /**
    * Sets dbPassword
    *
    * @param string|null $dbPassword 数据库密码。
    *
    * @return $this
    */
    public function setDbPassword($dbPassword)
    {
        $this->container['dbPassword'] = $dbPassword;
        return $this;
    }

    /**
    * Gets manageIp
    *  管理IP。
    *
    * @return string|null
    */
    public function getManageIp()
    {
        return $this->container['manageIp'];
    }

    /**
    * Sets manageIp
    *
    * @param string|null $manageIp 管理IP。
    *
    * @return $this
    */
    public function setManageIp($manageIp)
    {
        $this->container['manageIp'] = $manageIp;
        return $this;
    }

    /**
    * Gets trafficIp
    *  流量IP。
    *
    * @return string|null
    */
    public function getTrafficIp()
    {
        return $this->container['trafficIp'];
    }

    /**
    * Sets trafficIp
    *
    * @param string|null $trafficIp 流量IP。
    *
    * @return $this
    */
    public function setTrafficIp($trafficIp)
    {
        $this->container['trafficIp'] = $trafficIp;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口。
    *
    * @return int|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param int|null $dbPort 数据库端口。
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets region
    *  RDS实例所在region。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region RDS实例所在region。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  修改日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 修改日期，格式yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets ip
    *  迁移实例所在的私有IP。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 迁移实例所在的私有IP。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets publicIp
    *  迁移实例所在的公网IP。
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
    * @param string|null $publicIp 迁移实例所在的公网IP。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区azCode。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区azCode。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  源库所在的安全组id。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 源库所在的安全组id。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets subnetId
    *  源库所在的子网id。
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
    * @param string|null $subnetId 源库所在的子网id。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  源库所在的虚拟私有云id。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 源库所在的虚拟私有云id。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets volumeSize
    *  迁移实例的磁盘大小。
    *
    * @return int|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int|null $volumeSize 迁移实例的磁盘大小。
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets fullTransUserPwd
    *  全量迁移用户密码，密文。
    *
    * @return string|null
    */
    public function getFullTransUserPwd()
    {
        return $this->container['fullTransUserPwd'];
    }

    /**
    * Sets fullTransUserPwd
    *
    * @param string|null $fullTransUserPwd 全量迁移用户密码，密文。
    *
    * @return $this
    */
    public function setFullTransUserPwd($fullTransUserPwd)
    {
        $this->container['fullTransUserPwd'] = $fullTransUserPwd;
        return $this;
    }

    /**
    * Gets incrementTransUserPwd
    *  增量迁移用户密码，密文。
    *
    * @return string|null
    */
    public function getIncrementTransUserPwd()
    {
        return $this->container['incrementTransUserPwd'];
    }

    /**
    * Sets incrementTransUserPwd
    *
    * @param string|null $incrementTransUserPwd 增量迁移用户密码，密文。
    *
    * @return $this
    */
    public function setIncrementTransUserPwd($incrementTransUserPwd)
    {
        $this->container['incrementTransUserPwd'] = $incrementTransUserPwd;
        return $this;
    }

    /**
    * Gets sslLink
    *  是否SSL安全连接。
    *
    * @return bool|null
    */
    public function getSslLink()
    {
        return $this->container['sslLink'];
    }

    /**
    * Sets sslLink
    *
    * @param bool|null $sslLink 是否SSL安全连接。
    *
    * @return $this
    */
    public function setSslLink($sslLink)
    {
        $this->container['sslLink'] = $sslLink;
        return $this;
    }

    /**
    * Gets sslCertKey
    *  SSL证书内容。
    *
    * @return string|null
    */
    public function getSslCertKey()
    {
        return $this->container['sslCertKey'];
    }

    /**
    * Sets sslCertKey
    *
    * @param string|null $sslCertKey SSL证书内容。
    *
    * @return $this
    */
    public function setSslCertKey($sslCertKey)
    {
        $this->container['sslCertKey'] = $sslCertKey;
        return $this;
    }

    /**
    * Gets sslCertName
    *  SSL证书名字。
    *
    * @return string|null
    */
    public function getSslCertName()
    {
        return $this->container['sslCertName'];
    }

    /**
    * Sets sslCertName
    *
    * @param string|null $sslCertName SSL证书名字。
    *
    * @return $this
    */
    public function setSslCertName($sslCertName)
    {
        $this->container['sslCertName'] = $sslCertName;
        return $this;
    }

    /**
    * Gets sslCertCheckSum
    *  SSL证书内容checksum值。
    *
    * @return string|null
    */
    public function getSslCertCheckSum()
    {
        return $this->container['sslCertCheckSum'];
    }

    /**
    * Sets sslCertCheckSum
    *
    * @param string|null $sslCertCheckSum SSL证书内容checksum值。
    *
    * @return $this
    */
    public function setSslCertCheckSum($sslCertCheckSum)
    {
        $this->container['sslCertCheckSum'] = $sslCertCheckSum;
        return $this;
    }

    /**
    * Gets sslCertPassword
    *  SSL证书密码，密文。
    *
    * @return string|null
    */
    public function getSslCertPassword()
    {
        return $this->container['sslCertPassword'];
    }

    /**
    * Sets sslCertPassword
    *
    * @param string|null $sslCertPassword SSL证书密码，密文。
    *
    * @return $this
    */
    public function setSslCertPassword($sslCertPassword)
    {
        $this->container['sslCertPassword'] = $sslCertPassword;
        return $this;
    }

    /**
    * Gets dbVersion
    *  数据库版本。
    *
    * @return string|null
    */
    public function getDbVersion()
    {
        return $this->container['dbVersion'];
    }

    /**
    * Sets dbVersion
    *
    * @param string|null $dbVersion 数据库版本。
    *
    * @return $this
    */
    public function setDbVersion($dbVersion)
    {
        $this->container['dbVersion'] = $dbVersion;
        return $this;
    }

    /**
    * Gets mongoHaMode
    *  mongoHa模式。 - Sharding 集群 - ReplicaSet 副本集 - ReplicaSingle 单节点
    *
    * @return string|null
    */
    public function getMongoHaMode()
    {
        return $this->container['mongoHaMode'];
    }

    /**
    * Sets mongoHaMode
    *
    * @param string|null $mongoHaMode mongoHa模式。 - Sharding 集群 - ReplicaSet 副本集 - ReplicaSingle 单节点
    *
    * @return $this
    */
    public function setMongoHaMode($mongoHaMode)
    {
        $this->container['mongoHaMode'] = $mongoHaMode;
        return $this;
    }

    /**
    * Gets projectId
    *  RDS实例projectId。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId RDS实例projectId。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets clusterMode
    *  集群模式。 - Single：单节点RDS - Ha：主备RDS - GR：金融版RDS - Sharding：mongodb 集群或DDM的模式，均默认为分片 - Sharding4.0+：mongodb 集群版本4.0+，默认为不分片 - ReplicaSet：mongodb 副本集,Replica RDS只读副本 - ReplicaSingle：mongodb 单节点 - Cluster：集群 - Independent：gaussdbv5 independent模式 - Combined：gaussdbv5 Combined模式 - Distributed ：分布式taurus - NoSharding：非集群模式
    *
    * @return string|null
    */
    public function getClusterMode()
    {
        return $this->container['clusterMode'];
    }

    /**
    * Sets clusterMode
    *
    * @param string|null $clusterMode 集群模式。 - Single：单节点RDS - Ha：主备RDS - GR：金融版RDS - Sharding：mongodb 集群或DDM的模式，均默认为分片 - Sharding4.0+：mongodb 集群版本4.0+，默认为不分片 - ReplicaSet：mongodb 副本集,Replica RDS只读副本 - ReplicaSingle：mongodb 单节点 - Cluster：集群 - Independent：gaussdbv5 independent模式 - Combined：gaussdbv5 Combined模式 - Distributed ：分布式taurus - NoSharding：非集群模式
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
        return $this;
    }

    /**
    * Gets instanceId
    *  RDS实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId RDS实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets dbName
    *  Oracle服务名serviceName。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName Oracle服务名serviceName。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets topic
    *  mrskafka topic名称。
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic mrskafka topic名称。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets safeMode
    *  MRSkafka是否开启kerberos认证 - 0非安全认证 - 1安全认证
    *
    * @return int|null
    */
    public function getSafeMode()
    {
        return $this->container['safeMode'];
    }

    /**
    * Sets safeMode
    *
    * @param int|null $safeMode MRSkafka是否开启kerberos认证 - 0非安全认证 - 1安全认证
    *
    * @return $this
    */
    public function setSafeMode($safeMode)
    {
        $this->container['safeMode'] = $safeMode;
        return $this;
    }

    /**
    * Gets kerberosVo
    *  kerberosVo
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\KerberosVO|null
    */
    public function getKerberosVo()
    {
        return $this->container['kerberosVo'];
    }

    /**
    * Sets kerberosVo
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\KerberosVO|null $kerberosVo kerberosVo
    *
    * @return $this
    */
    public function setKerberosVo($kerberosVo)
    {
        $this->container['kerberosVo'] = $kerberosVo;
        return $this;
    }

    /**
    * Gets multiWriteDbId
    *  多写数据库Id。
    *
    * @return string|null
    */
    public function getMultiWriteDbId()
    {
        return $this->container['multiWriteDbId'];
    }

    /**
    * Sets multiWriteDbId
    *
    * @param string|null $multiWriteDbId 多写数据库Id。
    *
    * @return $this
    */
    public function setMultiWriteDbId($multiWriteDbId)
    {
        $this->container['multiWriteDbId'] = $multiWriteDbId;
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

