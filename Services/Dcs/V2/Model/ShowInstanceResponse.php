<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcName  VPC的名称。
    * chargingMode  付费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID
    * userName  用户名。
    * createdAt  完成创建时间。格式为：2017-03-31T12:24:46.297Z
    * description  实例描述。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * capacity  缓存实例的容量（G Byte）。
    * capacityMinor  单机小规格的缓存容量。
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss
    * engine  缓存实例的引擎类型。
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * instanceBackupPolicy  instanceBackupPolicy
    * azCodes  实例所在的可用区。返回“可用区Code”
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * port  缓存的端口。
    * userId  用户id。
    * name  实例名称。
    * specCode  产品规格编码
    * subnetId  子网ID。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * engineVersion  缓存版本。
    * orderId  订单ID。
    * status  缓存实例的状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * enterpriseProjectId  企业项目ID。
    * backendAddrs  集群实例的后端服务地址。
    * features  features
    * domainNameInfo  domainNameInfo
    * transparentClientIpEnable  是否开启客户端ip透传。
    * subStatus  实例子状态。
    * tags  实例标签键值。
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * enterpriseProjectName  企业项目名称。
    * updateAt  更新时间，形如2022-07-06T09:32:16.502Z
    * productType  版本类型：社区版、企业版
    * storageType  存储类型：内存存储
    * launchedAt  启动时间，形如2022-07-06T09:32:16.502Z
    * cacheMode  缓存类型：单机类型，主备类型，主备读写分离，Proxy集群类型，原生集群类型
    * supportSlowLogFlag  是否支持慢日志
    * dbNumber  数据库数量
    * replicaCount  副本数
    * shardingCount  集群实例分片个数
    * bandwidthInfo  bandwidthInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcName' => 'string',
            'chargingMode' => 'int',
            'vpcId' => 'string',
            'userName' => 'string',
            'createdAt' => 'string',
            'description' => 'string',
            'securityGroupId' => 'string',
            'securityGroupName' => 'string',
            'maxMemory' => 'int',
            'usedMemory' => 'int',
            'capacity' => 'int',
            'capacityMinor' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'engine' => 'string',
            'noPasswordAccess' => 'string',
            'ip' => 'string',
            'instanceBackupPolicy' => '\HuaweiCloud\SDK\Dcs\V2\Model\InstanceBackupPolicy',
            'azCodes' => 'string[]',
            'accessUser' => 'string',
            'instanceId' => 'string',
            'port' => 'int',
            'userId' => 'string',
            'name' => 'string',
            'specCode' => 'string',
            'subnetId' => 'string',
            'subnetName' => 'string',
            'subnetCidr' => 'string',
            'engineVersion' => 'string',
            'orderId' => 'string',
            'status' => 'string',
            'domainName' => 'string',
            'readonlyDomainName' => 'string',
            'enablePublicip' => 'bool',
            'publicipId' => 'string',
            'publicipAddress' => 'string',
            'enableSsl' => 'bool',
            'serviceUpgrade' => 'bool',
            'serviceTaskId' => 'string',
            'enterpriseProjectId' => 'string',
            'backendAddrs' => 'string',
            'features' => '\HuaweiCloud\SDK\Dcs\V2\Model\Features',
            'domainNameInfo' => '\HuaweiCloud\SDK\Dcs\V2\Model\DomainNameInfo',
            'transparentClientIpEnable' => 'bool',
            'subStatus' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]',
            'cpuType' => 'string',
            'enterpriseProjectName' => 'string',
            'updateAt' => 'string',
            'productType' => 'string',
            'storageType' => 'string',
            'launchedAt' => 'string',
            'cacheMode' => 'string',
            'supportSlowLogFlag' => 'string',
            'dbNumber' => 'int',
            'replicaCount' => 'int',
            'shardingCount' => 'int',
            'bandwidthInfo' => '\HuaweiCloud\SDK\Dcs\V2\Model\BandwidthInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcName  VPC的名称。
    * chargingMode  付费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID
    * userName  用户名。
    * createdAt  完成创建时间。格式为：2017-03-31T12:24:46.297Z
    * description  实例描述。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * capacity  缓存实例的容量（G Byte）。
    * capacityMinor  单机小规格的缓存容量。
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss
    * engine  缓存实例的引擎类型。
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * instanceBackupPolicy  instanceBackupPolicy
    * azCodes  实例所在的可用区。返回“可用区Code”
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * port  缓存的端口。
    * userId  用户id。
    * name  实例名称。
    * specCode  产品规格编码
    * subnetId  子网ID。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * engineVersion  缓存版本。
    * orderId  订单ID。
    * status  缓存实例的状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * enterpriseProjectId  企业项目ID。
    * backendAddrs  集群实例的后端服务地址。
    * features  features
    * domainNameInfo  domainNameInfo
    * transparentClientIpEnable  是否开启客户端ip透传。
    * subStatus  实例子状态。
    * tags  实例标签键值。
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * enterpriseProjectName  企业项目名称。
    * updateAt  更新时间，形如2022-07-06T09:32:16.502Z
    * productType  版本类型：社区版、企业版
    * storageType  存储类型：内存存储
    * launchedAt  启动时间，形如2022-07-06T09:32:16.502Z
    * cacheMode  缓存类型：单机类型，主备类型，主备读写分离，Proxy集群类型，原生集群类型
    * supportSlowLogFlag  是否支持慢日志
    * dbNumber  数据库数量
    * replicaCount  副本数
    * shardingCount  集群实例分片个数
    * bandwidthInfo  bandwidthInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcName' => null,
        'chargingMode' => 'int32',
        'vpcId' => null,
        'userName' => null,
        'createdAt' => null,
        'description' => null,
        'securityGroupId' => null,
        'securityGroupName' => null,
        'maxMemory' => 'int32',
        'usedMemory' => 'int32',
        'capacity' => 'int32',
        'capacityMinor' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'engine' => null,
        'noPasswordAccess' => null,
        'ip' => null,
        'instanceBackupPolicy' => null,
        'azCodes' => null,
        'accessUser' => null,
        'instanceId' => null,
        'port' => 'int32',
        'userId' => null,
        'name' => null,
        'specCode' => null,
        'subnetId' => null,
        'subnetName' => null,
        'subnetCidr' => null,
        'engineVersion' => null,
        'orderId' => null,
        'status' => null,
        'domainName' => null,
        'readonlyDomainName' => null,
        'enablePublicip' => null,
        'publicipId' => null,
        'publicipAddress' => null,
        'enableSsl' => null,
        'serviceUpgrade' => null,
        'serviceTaskId' => null,
        'enterpriseProjectId' => null,
        'backendAddrs' => null,
        'features' => null,
        'domainNameInfo' => null,
        'transparentClientIpEnable' => null,
        'subStatus' => null,
        'tags' => null,
        'cpuType' => null,
        'enterpriseProjectName' => null,
        'updateAt' => null,
        'productType' => null,
        'storageType' => null,
        'launchedAt' => null,
        'cacheMode' => null,
        'supportSlowLogFlag' => null,
        'dbNumber' => 'int32',
        'replicaCount' => 'int32',
        'shardingCount' => 'int32',
        'bandwidthInfo' => null
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
    * vpcName  VPC的名称。
    * chargingMode  付费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID
    * userName  用户名。
    * createdAt  完成创建时间。格式为：2017-03-31T12:24:46.297Z
    * description  实例描述。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * capacity  缓存实例的容量（G Byte）。
    * capacityMinor  单机小规格的缓存容量。
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss
    * engine  缓存实例的引擎类型。
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * instanceBackupPolicy  instanceBackupPolicy
    * azCodes  实例所在的可用区。返回“可用区Code”
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * port  缓存的端口。
    * userId  用户id。
    * name  实例名称。
    * specCode  产品规格编码
    * subnetId  子网ID。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * engineVersion  缓存版本。
    * orderId  订单ID。
    * status  缓存实例的状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * enterpriseProjectId  企业项目ID。
    * backendAddrs  集群实例的后端服务地址。
    * features  features
    * domainNameInfo  domainNameInfo
    * transparentClientIpEnable  是否开启客户端ip透传。
    * subStatus  实例子状态。
    * tags  实例标签键值。
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * enterpriseProjectName  企业项目名称。
    * updateAt  更新时间，形如2022-07-06T09:32:16.502Z
    * productType  版本类型：社区版、企业版
    * storageType  存储类型：内存存储
    * launchedAt  启动时间，形如2022-07-06T09:32:16.502Z
    * cacheMode  缓存类型：单机类型，主备类型，主备读写分离，Proxy集群类型，原生集群类型
    * supportSlowLogFlag  是否支持慢日志
    * dbNumber  数据库数量
    * replicaCount  副本数
    * shardingCount  集群实例分片个数
    * bandwidthInfo  bandwidthInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcName' => 'vpc_name',
            'chargingMode' => 'charging_mode',
            'vpcId' => 'vpc_id',
            'userName' => 'user_name',
            'createdAt' => 'created_at',
            'description' => 'description',
            'securityGroupId' => 'security_group_id',
            'securityGroupName' => 'security_group_name',
            'maxMemory' => 'max_memory',
            'usedMemory' => 'used_memory',
            'capacity' => 'capacity',
            'capacityMinor' => 'capacity_minor',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'engine' => 'engine',
            'noPasswordAccess' => 'no_password_access',
            'ip' => 'ip',
            'instanceBackupPolicy' => 'instance_backup_policy',
            'azCodes' => 'az_codes',
            'accessUser' => 'access_user',
            'instanceId' => 'instance_id',
            'port' => 'port',
            'userId' => 'user_id',
            'name' => 'name',
            'specCode' => 'spec_code',
            'subnetId' => 'subnet_id',
            'subnetName' => 'subnet_name',
            'subnetCidr' => 'subnet_cidr',
            'engineVersion' => 'engine_version',
            'orderId' => 'order_id',
            'status' => 'status',
            'domainName' => 'domain_name',
            'readonlyDomainName' => 'readonly_domain_name',
            'enablePublicip' => 'enable_publicip',
            'publicipId' => 'publicip_id',
            'publicipAddress' => 'publicip_address',
            'enableSsl' => 'enable_ssl',
            'serviceUpgrade' => 'service_upgrade',
            'serviceTaskId' => 'service_task_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'backendAddrs' => 'backend_addrs',
            'features' => 'features',
            'domainNameInfo' => 'domain_name_info',
            'transparentClientIpEnable' => 'transparent_client_ip_enable',
            'subStatus' => 'sub_status',
            'tags' => 'tags',
            'cpuType' => 'cpu_type',
            'enterpriseProjectName' => 'enterprise_project_name',
            'updateAt' => 'update_at',
            'productType' => 'product_type',
            'storageType' => 'storage_type',
            'launchedAt' => 'launched_at',
            'cacheMode' => 'cache_mode',
            'supportSlowLogFlag' => 'support_slow_log_flag',
            'dbNumber' => 'db_number',
            'replicaCount' => 'replica_count',
            'shardingCount' => 'sharding_count',
            'bandwidthInfo' => 'bandwidth_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcName  VPC的名称。
    * chargingMode  付费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID
    * userName  用户名。
    * createdAt  完成创建时间。格式为：2017-03-31T12:24:46.297Z
    * description  实例描述。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * capacity  缓存实例的容量（G Byte）。
    * capacityMinor  单机小规格的缓存容量。
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss
    * engine  缓存实例的引擎类型。
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * instanceBackupPolicy  instanceBackupPolicy
    * azCodes  实例所在的可用区。返回“可用区Code”
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * port  缓存的端口。
    * userId  用户id。
    * name  实例名称。
    * specCode  产品规格编码
    * subnetId  子网ID。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * engineVersion  缓存版本。
    * orderId  订单ID。
    * status  缓存实例的状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * enterpriseProjectId  企业项目ID。
    * backendAddrs  集群实例的后端服务地址。
    * features  features
    * domainNameInfo  domainNameInfo
    * transparentClientIpEnable  是否开启客户端ip透传。
    * subStatus  实例子状态。
    * tags  实例标签键值。
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * enterpriseProjectName  企业项目名称。
    * updateAt  更新时间，形如2022-07-06T09:32:16.502Z
    * productType  版本类型：社区版、企业版
    * storageType  存储类型：内存存储
    * launchedAt  启动时间，形如2022-07-06T09:32:16.502Z
    * cacheMode  缓存类型：单机类型，主备类型，主备读写分离，Proxy集群类型，原生集群类型
    * supportSlowLogFlag  是否支持慢日志
    * dbNumber  数据库数量
    * replicaCount  副本数
    * shardingCount  集群实例分片个数
    * bandwidthInfo  bandwidthInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcName' => 'setVpcName',
            'chargingMode' => 'setChargingMode',
            'vpcId' => 'setVpcId',
            'userName' => 'setUserName',
            'createdAt' => 'setCreatedAt',
            'description' => 'setDescription',
            'securityGroupId' => 'setSecurityGroupId',
            'securityGroupName' => 'setSecurityGroupName',
            'maxMemory' => 'setMaxMemory',
            'usedMemory' => 'setUsedMemory',
            'capacity' => 'setCapacity',
            'capacityMinor' => 'setCapacityMinor',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'engine' => 'setEngine',
            'noPasswordAccess' => 'setNoPasswordAccess',
            'ip' => 'setIp',
            'instanceBackupPolicy' => 'setInstanceBackupPolicy',
            'azCodes' => 'setAzCodes',
            'accessUser' => 'setAccessUser',
            'instanceId' => 'setInstanceId',
            'port' => 'setPort',
            'userId' => 'setUserId',
            'name' => 'setName',
            'specCode' => 'setSpecCode',
            'subnetId' => 'setSubnetId',
            'subnetName' => 'setSubnetName',
            'subnetCidr' => 'setSubnetCidr',
            'engineVersion' => 'setEngineVersion',
            'orderId' => 'setOrderId',
            'status' => 'setStatus',
            'domainName' => 'setDomainName',
            'readonlyDomainName' => 'setReadonlyDomainName',
            'enablePublicip' => 'setEnablePublicip',
            'publicipId' => 'setPublicipId',
            'publicipAddress' => 'setPublicipAddress',
            'enableSsl' => 'setEnableSsl',
            'serviceUpgrade' => 'setServiceUpgrade',
            'serviceTaskId' => 'setServiceTaskId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'backendAddrs' => 'setBackendAddrs',
            'features' => 'setFeatures',
            'domainNameInfo' => 'setDomainNameInfo',
            'transparentClientIpEnable' => 'setTransparentClientIpEnable',
            'subStatus' => 'setSubStatus',
            'tags' => 'setTags',
            'cpuType' => 'setCpuType',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'updateAt' => 'setUpdateAt',
            'productType' => 'setProductType',
            'storageType' => 'setStorageType',
            'launchedAt' => 'setLaunchedAt',
            'cacheMode' => 'setCacheMode',
            'supportSlowLogFlag' => 'setSupportSlowLogFlag',
            'dbNumber' => 'setDbNumber',
            'replicaCount' => 'setReplicaCount',
            'shardingCount' => 'setShardingCount',
            'bandwidthInfo' => 'setBandwidthInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcName  VPC的名称。
    * chargingMode  付费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID
    * userName  用户名。
    * createdAt  完成创建时间。格式为：2017-03-31T12:24:46.297Z
    * description  实例描述。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * capacity  缓存实例的容量（G Byte）。
    * capacityMinor  单机小规格的缓存容量。
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss
    * engine  缓存实例的引擎类型。
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * instanceBackupPolicy  instanceBackupPolicy
    * azCodes  实例所在的可用区。返回“可用区Code”
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * port  缓存的端口。
    * userId  用户id。
    * name  实例名称。
    * specCode  产品规格编码
    * subnetId  子网ID。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * engineVersion  缓存版本。
    * orderId  订单ID。
    * status  缓存实例的状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * enterpriseProjectId  企业项目ID。
    * backendAddrs  集群实例的后端服务地址。
    * features  features
    * domainNameInfo  domainNameInfo
    * transparentClientIpEnable  是否开启客户端ip透传。
    * subStatus  实例子状态。
    * tags  实例标签键值。
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * enterpriseProjectName  企业项目名称。
    * updateAt  更新时间，形如2022-07-06T09:32:16.502Z
    * productType  版本类型：社区版、企业版
    * storageType  存储类型：内存存储
    * launchedAt  启动时间，形如2022-07-06T09:32:16.502Z
    * cacheMode  缓存类型：单机类型，主备类型，主备读写分离，Proxy集群类型，原生集群类型
    * supportSlowLogFlag  是否支持慢日志
    * dbNumber  数据库数量
    * replicaCount  副本数
    * shardingCount  集群实例分片个数
    * bandwidthInfo  bandwidthInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcName' => 'getVpcName',
            'chargingMode' => 'getChargingMode',
            'vpcId' => 'getVpcId',
            'userName' => 'getUserName',
            'createdAt' => 'getCreatedAt',
            'description' => 'getDescription',
            'securityGroupId' => 'getSecurityGroupId',
            'securityGroupName' => 'getSecurityGroupName',
            'maxMemory' => 'getMaxMemory',
            'usedMemory' => 'getUsedMemory',
            'capacity' => 'getCapacity',
            'capacityMinor' => 'getCapacityMinor',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'engine' => 'getEngine',
            'noPasswordAccess' => 'getNoPasswordAccess',
            'ip' => 'getIp',
            'instanceBackupPolicy' => 'getInstanceBackupPolicy',
            'azCodes' => 'getAzCodes',
            'accessUser' => 'getAccessUser',
            'instanceId' => 'getInstanceId',
            'port' => 'getPort',
            'userId' => 'getUserId',
            'name' => 'getName',
            'specCode' => 'getSpecCode',
            'subnetId' => 'getSubnetId',
            'subnetName' => 'getSubnetName',
            'subnetCidr' => 'getSubnetCidr',
            'engineVersion' => 'getEngineVersion',
            'orderId' => 'getOrderId',
            'status' => 'getStatus',
            'domainName' => 'getDomainName',
            'readonlyDomainName' => 'getReadonlyDomainName',
            'enablePublicip' => 'getEnablePublicip',
            'publicipId' => 'getPublicipId',
            'publicipAddress' => 'getPublicipAddress',
            'enableSsl' => 'getEnableSsl',
            'serviceUpgrade' => 'getServiceUpgrade',
            'serviceTaskId' => 'getServiceTaskId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'backendAddrs' => 'getBackendAddrs',
            'features' => 'getFeatures',
            'domainNameInfo' => 'getDomainNameInfo',
            'transparentClientIpEnable' => 'getTransparentClientIpEnable',
            'subStatus' => 'getSubStatus',
            'tags' => 'getTags',
            'cpuType' => 'getCpuType',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'updateAt' => 'getUpdateAt',
            'productType' => 'getProductType',
            'storageType' => 'getStorageType',
            'launchedAt' => 'getLaunchedAt',
            'cacheMode' => 'getCacheMode',
            'supportSlowLogFlag' => 'getSupportSlowLogFlag',
            'dbNumber' => 'getDbNumber',
            'replicaCount' => 'getReplicaCount',
            'shardingCount' => 'getShardingCount',
            'bandwidthInfo' => 'getBandwidthInfo'
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
    const PRODUCT_TYPE_GENERIC = 'generic';
    const PRODUCT_TYPE_ENTERPRISE = 'enterprise';
    const STORAGE_TYPE_DRAM = 'DRAM';
    const CACHE_MODE_SINGLE = 'single';
    const CACHE_MODE_HA = 'ha';
    const CACHE_MODE_HA_RW_SPLIT = 'ha_rw_split';
    const CACHE_MODE_PROXY = 'proxy';
    const CACHE_MODE_CLUSTER = 'cluster';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProductTypeAllowableValues()
    {
        return [
            self::PRODUCT_TYPE_GENERIC,
            self::PRODUCT_TYPE_ENTERPRISE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageTypeAllowableValues()
    {
        return [
            self::STORAGE_TYPE_DRAM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCacheModeAllowableValues()
    {
        return [
            self::CACHE_MODE_SINGLE,
            self::CACHE_MODE_HA,
            self::CACHE_MODE_HA_RW_SPLIT,
            self::CACHE_MODE_PROXY,
            self::CACHE_MODE_CLUSTER,
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
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['securityGroupName'] = isset($data['securityGroupName']) ? $data['securityGroupName'] : null;
        $this->container['maxMemory'] = isset($data['maxMemory']) ? $data['maxMemory'] : null;
        $this->container['usedMemory'] = isset($data['usedMemory']) ? $data['usedMemory'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['capacityMinor'] = isset($data['capacityMinor']) ? $data['capacityMinor'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['noPasswordAccess'] = isset($data['noPasswordAccess']) ? $data['noPasswordAccess'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['instanceBackupPolicy'] = isset($data['instanceBackupPolicy']) ? $data['instanceBackupPolicy'] : null;
        $this->container['azCodes'] = isset($data['azCodes']) ? $data['azCodes'] : null;
        $this->container['accessUser'] = isset($data['accessUser']) ? $data['accessUser'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['readonlyDomainName'] = isset($data['readonlyDomainName']) ? $data['readonlyDomainName'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['publicipAddress'] = isset($data['publicipAddress']) ? $data['publicipAddress'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['serviceUpgrade'] = isset($data['serviceUpgrade']) ? $data['serviceUpgrade'] : null;
        $this->container['serviceTaskId'] = isset($data['serviceTaskId']) ? $data['serviceTaskId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['backendAddrs'] = isset($data['backendAddrs']) ? $data['backendAddrs'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['domainNameInfo'] = isset($data['domainNameInfo']) ? $data['domainNameInfo'] : null;
        $this->container['transparentClientIpEnable'] = isset($data['transparentClientIpEnable']) ? $data['transparentClientIpEnable'] : null;
        $this->container['subStatus'] = isset($data['subStatus']) ? $data['subStatus'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['cpuType'] = isset($data['cpuType']) ? $data['cpuType'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['launchedAt'] = isset($data['launchedAt']) ? $data['launchedAt'] : null;
        $this->container['cacheMode'] = isset($data['cacheMode']) ? $data['cacheMode'] : null;
        $this->container['supportSlowLogFlag'] = isset($data['supportSlowLogFlag']) ? $data['supportSlowLogFlag'] : null;
        $this->container['dbNumber'] = isset($data['dbNumber']) ? $data['dbNumber'] : null;
        $this->container['replicaCount'] = isset($data['replicaCount']) ? $data['replicaCount'] : null;
        $this->container['shardingCount'] = isset($data['shardingCount']) ? $data['shardingCount'] : null;
        $this->container['bandwidthInfo'] = isset($data['bandwidthInfo']) ? $data['bandwidthInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProductTypeAllowableValues();
                if (!is_null($this->container['productType']) && !in_array($this->container['productType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'productType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStorageTypeAllowableValues();
                if (!is_null($this->container['storageType']) && !in_array($this->container['storageType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCacheModeAllowableValues();
                if (!is_null($this->container['cacheMode']) && !in_array($this->container['cacheMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cacheMode', must be one of '%s'",
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
    * Gets vpcName
    *  VPC的名称。
    *
    * @return string|null
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string|null $vpcName VPC的名称。
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets chargingMode
    *  付费模式，0表示按需计费，1表示包年/包月计费。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 付费模式，0表示按需计费，1表示包年/包月计费。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC ID
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
    * @param string|null $vpcId VPC ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets createdAt
    *  完成创建时间。格式为：2017-03-31T12:24:46.297Z
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
    * @param string|null $createdAt 完成创建时间。格式为：2017-03-31T12:24:46.297Z
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 实例描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。
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
    * @param string|null $securityGroupId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets securityGroupName
    *  租户安全组名称。
    *
    * @return string|null
    */
    public function getSecurityGroupName()
    {
        return $this->container['securityGroupName'];
    }

    /**
    * Sets securityGroupName
    *
    * @param string|null $securityGroupName 租户安全组名称。
    *
    * @return $this
    */
    public function setSecurityGroupName($securityGroupName)
    {
        $this->container['securityGroupName'] = $securityGroupName;
        return $this;
    }

    /**
    * Gets maxMemory
    *  总内存，单位：MB。
    *
    * @return int|null
    */
    public function getMaxMemory()
    {
        return $this->container['maxMemory'];
    }

    /**
    * Sets maxMemory
    *
    * @param int|null $maxMemory 总内存，单位：MB。
    *
    * @return $this
    */
    public function setMaxMemory($maxMemory)
    {
        $this->container['maxMemory'] = $maxMemory;
        return $this;
    }

    /**
    * Gets usedMemory
    *  已使用的内存，单位：MB。
    *
    * @return int|null
    */
    public function getUsedMemory()
    {
        return $this->container['usedMemory'];
    }

    /**
    * Sets usedMemory
    *
    * @param int|null $usedMemory 已使用的内存，单位：MB。
    *
    * @return $this
    */
    public function setUsedMemory($usedMemory)
    {
        $this->container['usedMemory'] = $usedMemory;
        return $this;
    }

    /**
    * Gets capacity
    *  缓存实例的容量（G Byte）。
    *
    * @return int|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param int|null $capacity 缓存实例的容量（G Byte）。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets capacityMinor
    *  单机小规格的缓存容量。
    *
    * @return string|null
    */
    public function getCapacityMinor()
    {
        return $this->container['capacityMinor'];
    }

    /**
    * Sets capacityMinor
    *
    * @param string|null $capacityMinor 单机小规格的缓存容量。
    *
    * @return $this
    */
    public function setCapacityMinor($capacityMinor)
    {
        $this->container['capacityMinor'] = $capacityMinor;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss
    *
    * @return string|null
    */
    public function getMaintainBegin()
    {
        return $this->container['maintainBegin'];
    }

    /**
    * Sets maintainBegin
    *
    * @param string|null $maintainBegin 维护时间窗开始时间，为UTC时间，格式为HH:mm:ss
    *
    * @return $this
    */
    public function setMaintainBegin($maintainBegin)
    {
        $this->container['maintainBegin'] = $maintainBegin;
        return $this;
    }

    /**
    * Gets maintainEnd
    *  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss
    *
    * @return string|null
    */
    public function getMaintainEnd()
    {
        return $this->container['maintainEnd'];
    }

    /**
    * Sets maintainEnd
    *
    * @param string|null $maintainEnd 维护时间窗结束时间，为UTC时间，格式为HH:mm:ss
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets engine
    *  缓存实例的引擎类型。
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine 缓存实例的引擎类型。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets noPasswordAccess
    *  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    *
    * @return string|null
    */
    public function getNoPasswordAccess()
    {
        return $this->container['noPasswordAccess'];
    }

    /**
    * Sets noPasswordAccess
    *
    * @param string|null $noPasswordAccess 是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    *
    * @return $this
    */
    public function setNoPasswordAccess($noPasswordAccess)
    {
        $this->container['noPasswordAccess'] = $noPasswordAccess;
        return $this;
    }

    /**
    * Gets ip
    *  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
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
    * @param string|null $ip 连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets instanceBackupPolicy
    *  instanceBackupPolicy
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\InstanceBackupPolicy|null
    */
    public function getInstanceBackupPolicy()
    {
        return $this->container['instanceBackupPolicy'];
    }

    /**
    * Sets instanceBackupPolicy
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\InstanceBackupPolicy|null $instanceBackupPolicy instanceBackupPolicy
    *
    * @return $this
    */
    public function setInstanceBackupPolicy($instanceBackupPolicy)
    {
        $this->container['instanceBackupPolicy'] = $instanceBackupPolicy;
        return $this;
    }

    /**
    * Gets azCodes
    *  实例所在的可用区。返回“可用区Code”
    *
    * @return string[]|null
    */
    public function getAzCodes()
    {
        return $this->container['azCodes'];
    }

    /**
    * Sets azCodes
    *
    * @param string[]|null $azCodes 实例所在的可用区。返回“可用区Code”
    *
    * @return $this
    */
    public function setAzCodes($azCodes)
    {
        $this->container['azCodes'] = $azCodes;
        return $this;
    }

    /**
    * Gets accessUser
    *  通过密码认证访问缓存实例的认证用户名。
    *
    * @return string|null
    */
    public function getAccessUser()
    {
        return $this->container['accessUser'];
    }

    /**
    * Sets accessUser
    *
    * @param string|null $accessUser 通过密码认证访问缓存实例的认证用户名。
    *
    * @return $this
    */
    public function setAccessUser($accessUser)
    {
        $this->container['accessUser'] = $accessUser;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
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
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets port
    *  缓存的端口。
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
    * @param int|null $port 缓存的端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets userId
    *  用户id。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets name
    *  实例名称。
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
    * @param string|null $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets specCode
    *  产品规格编码
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 产品规格编码
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID。
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
    * @param string|null $subnetId 子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets subnetName
    *  子网名称。
    *
    * @return string|null
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string|null $subnetName 子网名称。
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets subnetCidr
    *  子网网段。
    *
    * @return string|null
    */
    public function getSubnetCidr()
    {
        return $this->container['subnetCidr'];
    }

    /**
    * Sets subnetCidr
    *
    * @param string|null $subnetCidr 子网网段。
    *
    * @return $this
    */
    public function setSubnetCidr($subnetCidr)
    {
        $this->container['subnetCidr'] = $subnetCidr;
        return $this;
    }

    /**
    * Gets engineVersion
    *  缓存版本。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 缓存版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets status
    *  缓存实例的状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
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
    * @param string|null $status 缓存实例的状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets domainName
    *  实例的域名。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 实例的域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets readonlyDomainName
    *  实例的只读域名，只有主备实例有该字段。
    *
    * @return string|null
    */
    public function getReadonlyDomainName()
    {
        return $this->container['readonlyDomainName'];
    }

    /**
    * Sets readonlyDomainName
    *
    * @param string|null $readonlyDomainName 实例的只读域名，只有主备实例有该字段。
    *
    * @return $this
    */
    public function setReadonlyDomainName($readonlyDomainName)
    {
        $this->container['readonlyDomainName'] = $readonlyDomainName;
        return $this;
    }

    /**
    * Gets enablePublicip
    *  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    *
    * @return bool|null
    */
    public function getEnablePublicip()
    {
        return $this->container['enablePublicip'];
    }

    /**
    * Sets enablePublicip
    *
    * @param bool|null $enablePublicip Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets publicipId
    *  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets publicipAddress
    *  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    *
    * @return string|null
    */
    public function getPublicipAddress()
    {
        return $this->container['publicipAddress'];
    }

    /**
    * Sets publicipAddress
    *
    * @param string|null $publicipAddress Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    *
    * @return $this
    */
    public function setPublicipAddress($publicipAddress)
    {
        $this->container['publicipAddress'] = $publicipAddress;
        return $this;
    }

    /**
    * Gets enableSsl
    *  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets serviceUpgrade
    *  实例是否存在升级任务。 - true：存在 - false：不存在
    *
    * @return bool|null
    */
    public function getServiceUpgrade()
    {
        return $this->container['serviceUpgrade'];
    }

    /**
    * Sets serviceUpgrade
    *
    * @param bool|null $serviceUpgrade 实例是否存在升级任务。 - true：存在 - false：不存在
    *
    * @return $this
    */
    public function setServiceUpgrade($serviceUpgrade)
    {
        $this->container['serviceUpgrade'] = $serviceUpgrade;
        return $this;
    }

    /**
    * Gets serviceTaskId
    *  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    *
    * @return string|null
    */
    public function getServiceTaskId()
    {
        return $this->container['serviceTaskId'];
    }

    /**
    * Sets serviceTaskId
    *
    * @param string|null $serviceTaskId 升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    *
    * @return $this
    */
    public function setServiceTaskId($serviceTaskId)
    {
        $this->container['serviceTaskId'] = $serviceTaskId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets backendAddrs
    *  集群实例的后端服务地址。
    *
    * @return string|null
    */
    public function getBackendAddrs()
    {
        return $this->container['backendAddrs'];
    }

    /**
    * Sets backendAddrs
    *
    * @param string|null $backendAddrs 集群实例的后端服务地址。
    *
    * @return $this
    */
    public function setBackendAddrs($backendAddrs)
    {
        $this->container['backendAddrs'] = $backendAddrs;
        return $this;
    }

    /**
    * Gets features
    *  features
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\Features|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\Features|null $features features
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
        return $this;
    }

    /**
    * Gets domainNameInfo
    *  domainNameInfo
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DomainNameInfo|null
    */
    public function getDomainNameInfo()
    {
        return $this->container['domainNameInfo'];
    }

    /**
    * Sets domainNameInfo
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DomainNameInfo|null $domainNameInfo domainNameInfo
    *
    * @return $this
    */
    public function setDomainNameInfo($domainNameInfo)
    {
        $this->container['domainNameInfo'] = $domainNameInfo;
        return $this;
    }

    /**
    * Gets transparentClientIpEnable
    *  是否开启客户端ip透传。
    *
    * @return bool|null
    */
    public function getTransparentClientIpEnable()
    {
        return $this->container['transparentClientIpEnable'];
    }

    /**
    * Sets transparentClientIpEnable
    *
    * @param bool|null $transparentClientIpEnable 是否开启客户端ip透传。
    *
    * @return $this
    */
    public function setTransparentClientIpEnable($transparentClientIpEnable)
    {
        $this->container['transparentClientIpEnable'] = $transparentClientIpEnable;
        return $this;
    }

    /**
    * Gets subStatus
    *  实例子状态。
    *
    * @return string|null
    */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
    * Sets subStatus
    *
    * @param string|null $subStatus 实例子状态。
    *
    * @return $this
    */
    public function setSubStatus($subStatus)
    {
        $this->container['subStatus'] = $subStatus;
        return $this;
    }

    /**
    * Gets tags
    *  实例标签键值。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]|null $tags 实例标签键值。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets cpuType
    *  实例CPU类型，通常为x86_64或aarch64
    *
    * @return string|null
    */
    public function getCpuType()
    {
        return $this->container['cpuType'];
    }

    /**
    * Sets cpuType
    *
    * @param string|null $cpuType 实例CPU类型，通常为x86_64或aarch64
    *
    * @return $this
    */
    public function setCpuType($cpuType)
    {
        $this->container['cpuType'] = $cpuType;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称。
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称。
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间，形如2022-07-06T09:32:16.502Z
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间，形如2022-07-06T09:32:16.502Z
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets productType
    *  版本类型：社区版、企业版
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
    * @param string|null $productType 版本类型：社区版、企业版
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets storageType
    *  存储类型：内存存储
    *
    * @return string|null
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string|null $storageType 存储类型：内存存储
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets launchedAt
    *  启动时间，形如2022-07-06T09:32:16.502Z
    *
    * @return string|null
    */
    public function getLaunchedAt()
    {
        return $this->container['launchedAt'];
    }

    /**
    * Sets launchedAt
    *
    * @param string|null $launchedAt 启动时间，形如2022-07-06T09:32:16.502Z
    *
    * @return $this
    */
    public function setLaunchedAt($launchedAt)
    {
        $this->container['launchedAt'] = $launchedAt;
        return $this;
    }

    /**
    * Gets cacheMode
    *  缓存类型：单机类型，主备类型，主备读写分离，Proxy集群类型，原生集群类型
    *
    * @return string|null
    */
    public function getCacheMode()
    {
        return $this->container['cacheMode'];
    }

    /**
    * Sets cacheMode
    *
    * @param string|null $cacheMode 缓存类型：单机类型，主备类型，主备读写分离，Proxy集群类型，原生集群类型
    *
    * @return $this
    */
    public function setCacheMode($cacheMode)
    {
        $this->container['cacheMode'] = $cacheMode;
        return $this;
    }

    /**
    * Gets supportSlowLogFlag
    *  是否支持慢日志
    *
    * @return string|null
    */
    public function getSupportSlowLogFlag()
    {
        return $this->container['supportSlowLogFlag'];
    }

    /**
    * Sets supportSlowLogFlag
    *
    * @param string|null $supportSlowLogFlag 是否支持慢日志
    *
    * @return $this
    */
    public function setSupportSlowLogFlag($supportSlowLogFlag)
    {
        $this->container['supportSlowLogFlag'] = $supportSlowLogFlag;
        return $this;
    }

    /**
    * Gets dbNumber
    *  数据库数量
    *
    * @return int|null
    */
    public function getDbNumber()
    {
        return $this->container['dbNumber'];
    }

    /**
    * Sets dbNumber
    *
    * @param int|null $dbNumber 数据库数量
    *
    * @return $this
    */
    public function setDbNumber($dbNumber)
    {
        $this->container['dbNumber'] = $dbNumber;
        return $this;
    }

    /**
    * Gets replicaCount
    *  副本数
    *
    * @return int|null
    */
    public function getReplicaCount()
    {
        return $this->container['replicaCount'];
    }

    /**
    * Sets replicaCount
    *
    * @param int|null $replicaCount 副本数
    *
    * @return $this
    */
    public function setReplicaCount($replicaCount)
    {
        $this->container['replicaCount'] = $replicaCount;
        return $this;
    }

    /**
    * Gets shardingCount
    *  集群实例分片个数
    *
    * @return int|null
    */
    public function getShardingCount()
    {
        return $this->container['shardingCount'];
    }

    /**
    * Sets shardingCount
    *
    * @param int|null $shardingCount 集群实例分片个数
    *
    * @return $this
    */
    public function setShardingCount($shardingCount)
    {
        $this->container['shardingCount'] = $shardingCount;
        return $this;
    }

    /**
    * Gets bandwidthInfo
    *  bandwidthInfo
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BandwidthInfo|null
    */
    public function getBandwidthInfo()
    {
        return $this->container['bandwidthInfo'];
    }

    /**
    * Sets bandwidthInfo
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BandwidthInfo|null $bandwidthInfo bandwidthInfo
    *
    * @return $this
    */
    public function setBandwidthInfo($bandwidthInfo)
    {
        $this->container['bandwidthInfo'] = $bandwidthInfo;
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

