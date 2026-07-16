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
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  **参数解释：** 数据库端口。 **取值范围：** 不涉及。
    * region  **参数解释：** 实例所在区域。 **取值范围：** 不涉及。
    * datastore  datastore
    * mode  **参数解释：** 实例类型。 **取值范围：** 与请求参数相同。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * engine  **参数解释：** 存储引擎。 **取值范围：** 取值为“rocksDB”。
    * created  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * updated  **参数解释：** 实例操作最新变更的时间。 **取值范围：** 不涉及。
    * dbUserName  **参数解释：** 默认用户名。 **取值范围：** 取值为“rwuser”。
    * vpcId  **参数解释：** 虚拟私有云ID。 **取值范围：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** GeminiDB Cassandra 实例使用多个子网的场景，请参见表 ListInstancesNodeResult字段数据结构说明中的“subnet_id”。
    * securityGroupId  **参数解释：** 安全组ID。 **取值范围：** 不涉及。
    * backupStrategy  backupStrategy
    * payMode  **参数解释：** 计费方式。 **取值范围：** - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  **参数解释：** 系统可维护时间窗。 **取值范围：** 不涉及。
    * groups  **参数解释：** 组信息。 **取值范围：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目ID。 **取值范围：** 取值为“0”，表示为default企业项目。
    * dedicatedResourceId  **参数解释：** 专属资源ID。只有数据库实例属于专属资源池才会返回该参数。 **取值范围：** 不涉及。
    * timeZone  **参数解释：** 时区。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例正在执行的动作。 **取值范围：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID。 **取值范围：** 不涉及。
    * lbIpAddress  **参数解释：** 负载均衡ip。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * lbPort  **参数解释：** 负载均衡端口。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  **参数解释：** 实例可用区。 **取值范围：** 不涉及。
    * drInstanceId  **参数解释：** 容灾实例ID。 **取值范围：** 不涉及。
    * dualActiveInfo  dualActiveInfo
    * ccmCertInfo  ccmCertInfo
    * ssl  **参数解释：** SSL安全连接启用情况。 **取值范围：** - 取值为“0”表示未启用。 - 取值为“1”表示已启用。
    * backupSpaceUsage  backupSpaceUsage
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'port' => 'string',
            'region' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesDatastoreResult',
            'mode' => 'string',
            'productType' => 'string',
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
            'diskEncryptionId' => 'string',
            'lbIpAddress' => 'string',
            'lbPort' => 'string',
            'availabilityZone' => 'string',
            'drInstanceId' => 'string',
            'dualActiveInfo' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DualActiveInfo',
            'ccmCertInfo' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\CertInfoOption',
            'ssl' => 'string',
            'backupSpaceUsage' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\BackupSpaceUsage'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  **参数解释：** 数据库端口。 **取值范围：** 不涉及。
    * region  **参数解释：** 实例所在区域。 **取值范围：** 不涉及。
    * datastore  datastore
    * mode  **参数解释：** 实例类型。 **取值范围：** 与请求参数相同。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * engine  **参数解释：** 存储引擎。 **取值范围：** 取值为“rocksDB”。
    * created  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * updated  **参数解释：** 实例操作最新变更的时间。 **取值范围：** 不涉及。
    * dbUserName  **参数解释：** 默认用户名。 **取值范围：** 取值为“rwuser”。
    * vpcId  **参数解释：** 虚拟私有云ID。 **取值范围：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** GeminiDB Cassandra 实例使用多个子网的场景，请参见表 ListInstancesNodeResult字段数据结构说明中的“subnet_id”。
    * securityGroupId  **参数解释：** 安全组ID。 **取值范围：** 不涉及。
    * backupStrategy  backupStrategy
    * payMode  **参数解释：** 计费方式。 **取值范围：** - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  **参数解释：** 系统可维护时间窗。 **取值范围：** 不涉及。
    * groups  **参数解释：** 组信息。 **取值范围：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目ID。 **取值范围：** 取值为“0”，表示为default企业项目。
    * dedicatedResourceId  **参数解释：** 专属资源ID。只有数据库实例属于专属资源池才会返回该参数。 **取值范围：** 不涉及。
    * timeZone  **参数解释：** 时区。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例正在执行的动作。 **取值范围：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID。 **取值范围：** 不涉及。
    * lbIpAddress  **参数解释：** 负载均衡ip。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * lbPort  **参数解释：** 负载均衡端口。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  **参数解释：** 实例可用区。 **取值范围：** 不涉及。
    * drInstanceId  **参数解释：** 容灾实例ID。 **取值范围：** 不涉及。
    * dualActiveInfo  dualActiveInfo
    * ccmCertInfo  ccmCertInfo
    * ssl  **参数解释：** SSL安全连接启用情况。 **取值范围：** - 取值为“0”表示未启用。 - 取值为“1”表示已启用。
    * backupSpaceUsage  backupSpaceUsage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'port' => null,
        'region' => null,
        'datastore' => null,
        'mode' => null,
        'productType' => null,
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
        'diskEncryptionId' => null,
        'lbIpAddress' => null,
        'lbPort' => null,
        'availabilityZone' => null,
        'drInstanceId' => null,
        'dualActiveInfo' => null,
        'ccmCertInfo' => null,
        'ssl' => null,
        'backupSpaceUsage' => null
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
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  **参数解释：** 数据库端口。 **取值范围：** 不涉及。
    * region  **参数解释：** 实例所在区域。 **取值范围：** 不涉及。
    * datastore  datastore
    * mode  **参数解释：** 实例类型。 **取值范围：** 与请求参数相同。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * engine  **参数解释：** 存储引擎。 **取值范围：** 取值为“rocksDB”。
    * created  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * updated  **参数解释：** 实例操作最新变更的时间。 **取值范围：** 不涉及。
    * dbUserName  **参数解释：** 默认用户名。 **取值范围：** 取值为“rwuser”。
    * vpcId  **参数解释：** 虚拟私有云ID。 **取值范围：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** GeminiDB Cassandra 实例使用多个子网的场景，请参见表 ListInstancesNodeResult字段数据结构说明中的“subnet_id”。
    * securityGroupId  **参数解释：** 安全组ID。 **取值范围：** 不涉及。
    * backupStrategy  backupStrategy
    * payMode  **参数解释：** 计费方式。 **取值范围：** - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  **参数解释：** 系统可维护时间窗。 **取值范围：** 不涉及。
    * groups  **参数解释：** 组信息。 **取值范围：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目ID。 **取值范围：** 取值为“0”，表示为default企业项目。
    * dedicatedResourceId  **参数解释：** 专属资源ID。只有数据库实例属于专属资源池才会返回该参数。 **取值范围：** 不涉及。
    * timeZone  **参数解释：** 时区。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例正在执行的动作。 **取值范围：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID。 **取值范围：** 不涉及。
    * lbIpAddress  **参数解释：** 负载均衡ip。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * lbPort  **参数解释：** 负载均衡端口。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  **参数解释：** 实例可用区。 **取值范围：** 不涉及。
    * drInstanceId  **参数解释：** 容灾实例ID。 **取值范围：** 不涉及。
    * dualActiveInfo  dualActiveInfo
    * ccmCertInfo  ccmCertInfo
    * ssl  **参数解释：** SSL安全连接启用情况。 **取值范围：** - 取值为“0”表示未启用。 - 取值为“1”表示已启用。
    * backupSpaceUsage  backupSpaceUsage
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'port' => 'port',
            'region' => 'region',
            'datastore' => 'datastore',
            'mode' => 'mode',
            'productType' => 'product_type',
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
            'diskEncryptionId' => 'disk_encryption_id',
            'lbIpAddress' => 'lb_ip_address',
            'lbPort' => 'lb_port',
            'availabilityZone' => 'availability_zone',
            'drInstanceId' => 'dr_instance_id',
            'dualActiveInfo' => 'dual_active_info',
            'ccmCertInfo' => 'ccm_cert_info',
            'ssl' => 'ssl',
            'backupSpaceUsage' => 'backup_space_usage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  **参数解释：** 数据库端口。 **取值范围：** 不涉及。
    * region  **参数解释：** 实例所在区域。 **取值范围：** 不涉及。
    * datastore  datastore
    * mode  **参数解释：** 实例类型。 **取值范围：** 与请求参数相同。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * engine  **参数解释：** 存储引擎。 **取值范围：** 取值为“rocksDB”。
    * created  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * updated  **参数解释：** 实例操作最新变更的时间。 **取值范围：** 不涉及。
    * dbUserName  **参数解释：** 默认用户名。 **取值范围：** 取值为“rwuser”。
    * vpcId  **参数解释：** 虚拟私有云ID。 **取值范围：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** GeminiDB Cassandra 实例使用多个子网的场景，请参见表 ListInstancesNodeResult字段数据结构说明中的“subnet_id”。
    * securityGroupId  **参数解释：** 安全组ID。 **取值范围：** 不涉及。
    * backupStrategy  backupStrategy
    * payMode  **参数解释：** 计费方式。 **取值范围：** - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  **参数解释：** 系统可维护时间窗。 **取值范围：** 不涉及。
    * groups  **参数解释：** 组信息。 **取值范围：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目ID。 **取值范围：** 取值为“0”，表示为default企业项目。
    * dedicatedResourceId  **参数解释：** 专属资源ID。只有数据库实例属于专属资源池才会返回该参数。 **取值范围：** 不涉及。
    * timeZone  **参数解释：** 时区。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例正在执行的动作。 **取值范围：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID。 **取值范围：** 不涉及。
    * lbIpAddress  **参数解释：** 负载均衡ip。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * lbPort  **参数解释：** 负载均衡端口。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  **参数解释：** 实例可用区。 **取值范围：** 不涉及。
    * drInstanceId  **参数解释：** 容灾实例ID。 **取值范围：** 不涉及。
    * dualActiveInfo  dualActiveInfo
    * ccmCertInfo  ccmCertInfo
    * ssl  **参数解释：** SSL安全连接启用情况。 **取值范围：** - 取值为“0”表示未启用。 - 取值为“1”表示已启用。
    * backupSpaceUsage  backupSpaceUsage
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'port' => 'setPort',
            'region' => 'setRegion',
            'datastore' => 'setDatastore',
            'mode' => 'setMode',
            'productType' => 'setProductType',
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
            'diskEncryptionId' => 'setDiskEncryptionId',
            'lbIpAddress' => 'setLbIpAddress',
            'lbPort' => 'setLbPort',
            'availabilityZone' => 'setAvailabilityZone',
            'drInstanceId' => 'setDrInstanceId',
            'dualActiveInfo' => 'setDualActiveInfo',
            'ccmCertInfo' => 'setCcmCertInfo',
            'ssl' => 'setSsl',
            'backupSpaceUsage' => 'setBackupSpaceUsage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
    * port  **参数解释：** 数据库端口。 **取值范围：** 不涉及。
    * region  **参数解释：** 实例所在区域。 **取值范围：** 不涉及。
    * datastore  datastore
    * mode  **参数解释：** 实例类型。 **取值范围：** 与请求参数相同。
    * productType  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    * engine  **参数解释：** 存储引擎。 **取值范围：** 取值为“rocksDB”。
    * created  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
    * updated  **参数解释：** 实例操作最新变更的时间。 **取值范围：** 不涉及。
    * dbUserName  **参数解释：** 默认用户名。 **取值范围：** 取值为“rwuser”。
    * vpcId  **参数解释：** 虚拟私有云ID。 **取值范围：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** GeminiDB Cassandra 实例使用多个子网的场景，请参见表 ListInstancesNodeResult字段数据结构说明中的“subnet_id”。
    * securityGroupId  **参数解释：** 安全组ID。 **取值范围：** 不涉及。
    * backupStrategy  backupStrategy
    * payMode  **参数解释：** 计费方式。 **取值范围：** - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * maintenanceWindow  **参数解释：** 系统可维护时间窗。 **取值范围：** 不涉及。
    * groups  **参数解释：** 组信息。 **取值范围：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目ID。 **取值范围：** 取值为“0”，表示为default企业项目。
    * dedicatedResourceId  **参数解释：** 专属资源ID。只有数据库实例属于专属资源池才会返回该参数。 **取值范围：** 不涉及。
    * timeZone  **参数解释：** 时区。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例正在执行的动作。 **取值范围：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID。 **取值范围：** 不涉及。
    * lbIpAddress  **参数解释：** 负载均衡ip。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * lbPort  **参数解释：** 负载均衡端口。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
    * availabilityZone  **参数解释：** 实例可用区。 **取值范围：** 不涉及。
    * drInstanceId  **参数解释：** 容灾实例ID。 **取值范围：** 不涉及。
    * dualActiveInfo  dualActiveInfo
    * ccmCertInfo  ccmCertInfo
    * ssl  **参数解释：** SSL安全连接启用情况。 **取值范围：** - 取值为“0”表示未启用。 - 取值为“1”表示已启用。
    * backupSpaceUsage  backupSpaceUsage
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'port' => 'getPort',
            'region' => 'getRegion',
            'datastore' => 'getDatastore',
            'mode' => 'getMode',
            'productType' => 'getProductType',
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
            'diskEncryptionId' => 'getDiskEncryptionId',
            'lbIpAddress' => 'getLbIpAddress',
            'lbPort' => 'getLbPort',
            'availabilityZone' => 'getAvailabilityZone',
            'drInstanceId' => 'getDrInstanceId',
            'dualActiveInfo' => 'getDualActiveInfo',
            'ccmCertInfo' => 'getCcmCertInfo',
            'ssl' => 'getSsl',
            'backupSpaceUsage' => 'getBackupSpaceUsage'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
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
        $this->container['diskEncryptionId'] = isset($data['diskEncryptionId']) ? $data['diskEncryptionId'] : null;
        $this->container['lbIpAddress'] = isset($data['lbIpAddress']) ? $data['lbIpAddress'] : null;
        $this->container['lbPort'] = isset($data['lbPort']) ? $data['lbPort'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['drInstanceId'] = isset($data['drInstanceId']) ? $data['drInstanceId'] : null;
        $this->container['dualActiveInfo'] = isset($data['dualActiveInfo']) ? $data['dualActiveInfo'] : null;
        $this->container['ccmCertInfo'] = isset($data['ccmCertInfo']) ? $data['ccmCertInfo'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['backupSpaceUsage'] = isset($data['backupSpaceUsage']) ? $data['backupSpaceUsage'] : null;
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
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
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
        if ($this->container['diskEncryptionId'] === null) {
            $invalidProperties[] = "'diskEncryptionId' can't be null";
        }
        if ($this->container['ssl'] === null) {
            $invalidProperties[] = "'ssl' can't be null";
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
    *  **参数解释：** 实例ID。 **取值范围：** 不涉及。
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
    * @param string $id **参数解释：** 实例ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 实例名称。 **取值范围：** 不涉及。
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
    * @param string $name **参数解释：** 实例名称。 **取值范围：** 不涉及。
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
    *  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
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
    * @param string $status **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示实例磁盘已满。 - createfail，表示实例创建失败。 - enlargefail，表示实例扩容节点个数失败。
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
    *  **参数解释：** 数据库端口。 **取值范围：** 不涉及。
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
    * @param string $port **参数解释：** 数据库端口。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 实例所在区域。 **取值范围：** 不涉及。
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
    * @param string $region **参数解释：** 实例所在区域。 **取值范围：** 不涉及。
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
    * Gets mode
    *  **参数解释：** 实例类型。 **取值范围：** 与请求参数相同。
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
    * @param string $mode **参数解释：** 实例类型。 **取值范围：** 与请求参数相同。
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
    *  **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
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
    * @param string|null $productType **参数解释：** 产品类型。 **取值范围：** GeminiDB Redis云原生部署模式集群涉及此字段，取值：   -  Standard 标准型   -  Capacity 容量型
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets engine
    *  **参数解释：** 存储引擎。 **取值范围：** 取值为“rocksDB”。
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
    * @param string $engine **参数解释：** 存储引擎。 **取值范围：** 取值为“rocksDB”。
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
    *  **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
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
    * @param string $created **参数解释：** 实例创建时间。 **取值范围：** 不涉及。
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
    *  **参数解释：** 实例操作最新变更的时间。 **取值范围：** 不涉及。
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
    * @param string $updated **参数解释：** 实例操作最新变更的时间。 **取值范围：** 不涉及。
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
    *  **参数解释：** 默认用户名。 **取值范围：** 取值为“rwuser”。
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
    * @param string $dbUserName **参数解释：** 默认用户名。 **取值范围：** 取值为“rwuser”。
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
    *  **参数解释：** 虚拟私有云ID。 **取值范围：** 不涉及。
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
    * @param string $vpcId **参数解释：** 虚拟私有云ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 子网ID。 **取值范围：** GeminiDB Cassandra 实例使用多个子网的场景，请参见表 ListInstancesNodeResult字段数据结构说明中的“subnet_id”。
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
    * @param string $subnetId **参数解释：** 子网ID。 **取值范围：** GeminiDB Cassandra 实例使用多个子网的场景，请参见表 ListInstancesNodeResult字段数据结构说明中的“subnet_id”。
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
    *  **参数解释：** 安全组ID。 **取值范围：** 不涉及。
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
    * @param string $securityGroupId **参数解释：** 安全组ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 计费方式。 **取值范围：** - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
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
    * @param string $payMode **参数解释：** 计费方式。 **取值范围：** - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
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
    *  **参数解释：** 系统可维护时间窗。 **取值范围：** 不涉及。
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
    * @param string $maintenanceWindow **参数解释：** 系统可维护时间窗。 **取值范围：** 不涉及。
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
    *  **参数解释：** 组信息。 **取值范围：** 不涉及。
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
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ListInstancesGroupResult[] $groups **参数解释：** 组信息。 **取值范围：** 不涉及。
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
    *  **参数解释：** 企业项目ID。 **取值范围：** 取值为“0”，表示为default企业项目。
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
    * @param string $enterpriseProjectId **参数解释：** 企业项目ID。 **取值范围：** 取值为“0”，表示为default企业项目。
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
    *  **参数解释：** 专属资源ID。只有数据库实例属于专属资源池才会返回该参数。 **取值范围：** 不涉及。
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
    * @param string|null $dedicatedResourceId **参数解释：** 专属资源ID。只有数据库实例属于专属资源池才会返回该参数。 **取值范围：** 不涉及。
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
    *  **参数解释：** 时区。 **取值范围：** 不涉及。
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
    * @param string $timeZone **参数解释：** 时区。 **取值范围：** 不涉及。
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
    *  **参数解释：** 实例正在执行的动作。 **取值范围：** 不涉及。
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
    * @param string[] $actions **参数解释：** 实例正在执行的动作。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets diskEncryptionId
    *  **参数解释：** 磁盘加密时的密钥ID。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getDiskEncryptionId()
    {
        return $this->container['diskEncryptionId'];
    }

    /**
    * Sets diskEncryptionId
    *
    * @param string $diskEncryptionId **参数解释：** 磁盘加密时的密钥ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDiskEncryptionId($diskEncryptionId)
    {
        $this->container['diskEncryptionId'] = $diskEncryptionId;
        return $this;
    }

    /**
    * Gets lbIpAddress
    *  **参数解释：** 负载均衡ip。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
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
    * @param string|null $lbIpAddress **参数解释：** 负载均衡ip。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
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
    *  **参数解释：** 负载均衡端口。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
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
    * @param string|null $lbPort **参数解释：** 负载均衡端口。 **取值范围：** 只有存在负载均衡ip，才会返回该参数。
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
    *  **参数解释：** 实例可用区。 **取值范围：** 不涉及。
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
    * @param string|null $availabilityZone **参数解释：** 实例可用区。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets drInstanceId
    *  **参数解释：** 容灾实例ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDrInstanceId()
    {
        return $this->container['drInstanceId'];
    }

    /**
    * Sets drInstanceId
    *
    * @param string|null $drInstanceId **参数解释：** 容灾实例ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDrInstanceId($drInstanceId)
    {
        $this->container['drInstanceId'] = $drInstanceId;
        return $this;
    }

    /**
    * Gets dualActiveInfo
    *  dualActiveInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DualActiveInfo|null
    */
    public function getDualActiveInfo()
    {
        return $this->container['dualActiveInfo'];
    }

    /**
    * Sets dualActiveInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DualActiveInfo|null $dualActiveInfo dualActiveInfo
    *
    * @return $this
    */
    public function setDualActiveInfo($dualActiveInfo)
    {
        $this->container['dualActiveInfo'] = $dualActiveInfo;
        return $this;
    }

    /**
    * Gets ccmCertInfo
    *  ccmCertInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\CertInfoOption|null
    */
    public function getCcmCertInfo()
    {
        return $this->container['ccmCertInfo'];
    }

    /**
    * Sets ccmCertInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\CertInfoOption|null $ccmCertInfo ccmCertInfo
    *
    * @return $this
    */
    public function setCcmCertInfo($ccmCertInfo)
    {
        $this->container['ccmCertInfo'] = $ccmCertInfo;
        return $this;
    }

    /**
    * Gets ssl
    *  **参数解释：** SSL安全连接启用情况。 **取值范围：** - 取值为“0”表示未启用。 - 取值为“1”表示已启用。
    *
    * @return string
    */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
    * Sets ssl
    *
    * @param string $ssl **参数解释：** SSL安全连接启用情况。 **取值范围：** - 取值为“0”表示未启用。 - 取值为“1”表示已启用。
    *
    * @return $this
    */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;
        return $this;
    }

    /**
    * Gets backupSpaceUsage
    *  backupSpaceUsage
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\BackupSpaceUsage|null
    */
    public function getBackupSpaceUsage()
    {
        return $this->container['backupSpaceUsage'];
    }

    /**
    * Sets backupSpaceUsage
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\BackupSpaceUsage|null $backupSpaceUsage backupSpaceUsage
    *
    * @return $this
    */
    public function setBackupSpaceUsage($backupSpaceUsage)
    {
        $this->container['backupSpaceUsage'] = $backupSpaceUsage;
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

