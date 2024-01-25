<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * status  实例状态。 - 值为“BUILD”，表示实例正在创建。 - 值为“ACTIVE”，表示实例正常。 - 值为“FAILED”，表示实例异常。 - 值为“FROZEN”，表示实例冻结。 - 值为“MODIFYING”，表示实例正在扩容。 - 值为“REBOOTING”，表示实例正在重启。 - 值为“RESTORING”，表示实例正在恢复。 - 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 - 值为“SWITCHOVER”，表示实例正在主备切换。 - 值为“MIGRATING”，表示实例正在迁移。 - 值为“BACKING UP”，表示实例正在进行备份。 - 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 - 值为“STORAGE FULL”，表示实例磁盘空间满。
    * enableSsl  实例是否开启SSL，取值为\"true\"表示实例开启了SSL，取值为\"false\"表示实例未开启SSL。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  内网域名列表
    * publicDnsNames  公网域名列表
    * publicIps  实例外网IP地址列表。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”，分别对应于单机实例、主备实例、只读实例。
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  客户设置实例只读API的状态信息。仅支持RDS for MySQL引擎。 - true，表示该实例为客户设置的只读状态 - false， 表示该实例未被客户设置只读
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  nodes
    * relatedInstance  relatedInstance
    * name  实例名称。
    * datastore  datastore
    * ha  ha
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE版，5050、5353和5986不可设置）。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * diskEncryptionId  用于磁盘加密的密钥ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * region  区域ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  tags
    * backupUsedSpace  备份空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * orderId  订单ID，仅包周期场景返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * alias  实例的备注信息。
    * maxIops  实例磁盘的最大IOPS值。  当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  仅包周期场景返回。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'enableSsl' => 'bool',
            'privateIps' => 'string[]',
            'privateDnsNames' => 'string[]',
            'publicDnsNames' => 'string[]',
            'publicIps' => 'string[]',
            'type' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'dbUserName' => 'string',
            'switchStrategy' => 'string',
            'readOnlyByUser' => 'bool',
            'maintenanceWindow' => 'string',
            'nodes' => '\HuaweiCloud\SDK\Rds\V3\Model\NodeResponse[]',
            'relatedInstance' => '\HuaweiCloud\SDK\Rds\V3\Model\RelatedInstance[]',
            'name' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Rds\V3\Model\Datastore',
            'ha' => '\HuaweiCloud\SDK\Rds\V3\Model\HaResponse',
            'port' => 'int',
            'backupStrategy' => '\HuaweiCloud\SDK\Rds\V3\Model\BackupStrategyForResponse',
            'enterpriseProjectId' => 'string',
            'diskEncryptionId' => 'string',
            'flavorRef' => 'string',
            'cpu' => 'string',
            'mem' => 'string',
            'volume' => '\HuaweiCloud\SDK\Rds\V3\Model\Volume',
            'region' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ChargeInfoResponse',
            'timeZone' => 'string',
            'tags' => '\HuaweiCloud\SDK\Rds\V3\Model\TagResponse[]',
            'backupUsedSpace' => 'double',
            'storageUsedSpace' => 'double',
            'orderId' => 'string',
            'associatedWithDdm' => 'bool',
            'alias' => 'string',
            'maxIops' => 'int',
            'expirationTime' => 'string',
            'serverlessInfo' => '\HuaweiCloud\SDK\Rds\V3\Model\ServerlessInfoResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * status  实例状态。 - 值为“BUILD”，表示实例正在创建。 - 值为“ACTIVE”，表示实例正常。 - 值为“FAILED”，表示实例异常。 - 值为“FROZEN”，表示实例冻结。 - 值为“MODIFYING”，表示实例正在扩容。 - 值为“REBOOTING”，表示实例正在重启。 - 值为“RESTORING”，表示实例正在恢复。 - 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 - 值为“SWITCHOVER”，表示实例正在主备切换。 - 值为“MIGRATING”，表示实例正在迁移。 - 值为“BACKING UP”，表示实例正在进行备份。 - 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 - 值为“STORAGE FULL”，表示实例磁盘空间满。
    * enableSsl  实例是否开启SSL，取值为\"true\"表示实例开启了SSL，取值为\"false\"表示实例未开启SSL。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  内网域名列表
    * publicDnsNames  公网域名列表
    * publicIps  实例外网IP地址列表。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”，分别对应于单机实例、主备实例、只读实例。
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  客户设置实例只读API的状态信息。仅支持RDS for MySQL引擎。 - true，表示该实例为客户设置的只读状态 - false， 表示该实例未被客户设置只读
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  nodes
    * relatedInstance  relatedInstance
    * name  实例名称。
    * datastore  datastore
    * ha  ha
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE版，5050、5353和5986不可设置）。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * diskEncryptionId  用于磁盘加密的密钥ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * region  区域ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  tags
    * backupUsedSpace  备份空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * orderId  订单ID，仅包周期场景返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * alias  实例的备注信息。
    * maxIops  实例磁盘的最大IOPS值。  当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  仅包周期场景返回。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'enableSsl' => null,
        'privateIps' => null,
        'privateDnsNames' => null,
        'publicDnsNames' => null,
        'publicIps' => null,
        'type' => null,
        'created' => null,
        'updated' => null,
        'dbUserName' => null,
        'switchStrategy' => null,
        'readOnlyByUser' => null,
        'maintenanceWindow' => null,
        'nodes' => null,
        'relatedInstance' => null,
        'name' => null,
        'datastore' => null,
        'ha' => null,
        'port' => null,
        'backupStrategy' => null,
        'enterpriseProjectId' => null,
        'diskEncryptionId' => null,
        'flavorRef' => null,
        'cpu' => null,
        'mem' => null,
        'volume' => null,
        'region' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'chargeInfo' => null,
        'timeZone' => null,
        'tags' => null,
        'backupUsedSpace' => 'double',
        'storageUsedSpace' => 'double',
        'orderId' => null,
        'associatedWithDdm' => null,
        'alias' => null,
        'maxIops' => 'int64',
        'expirationTime' => null,
        'serverlessInfo' => null
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
    * status  实例状态。 - 值为“BUILD”，表示实例正在创建。 - 值为“ACTIVE”，表示实例正常。 - 值为“FAILED”，表示实例异常。 - 值为“FROZEN”，表示实例冻结。 - 值为“MODIFYING”，表示实例正在扩容。 - 值为“REBOOTING”，表示实例正在重启。 - 值为“RESTORING”，表示实例正在恢复。 - 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 - 值为“SWITCHOVER”，表示实例正在主备切换。 - 值为“MIGRATING”，表示实例正在迁移。 - 值为“BACKING UP”，表示实例正在进行备份。 - 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 - 值为“STORAGE FULL”，表示实例磁盘空间满。
    * enableSsl  实例是否开启SSL，取值为\"true\"表示实例开启了SSL，取值为\"false\"表示实例未开启SSL。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  内网域名列表
    * publicDnsNames  公网域名列表
    * publicIps  实例外网IP地址列表。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”，分别对应于单机实例、主备实例、只读实例。
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  客户设置实例只读API的状态信息。仅支持RDS for MySQL引擎。 - true，表示该实例为客户设置的只读状态 - false， 表示该实例未被客户设置只读
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  nodes
    * relatedInstance  relatedInstance
    * name  实例名称。
    * datastore  datastore
    * ha  ha
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE版，5050、5353和5986不可设置）。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * diskEncryptionId  用于磁盘加密的密钥ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * region  区域ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  tags
    * backupUsedSpace  备份空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * orderId  订单ID，仅包周期场景返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * alias  实例的备注信息。
    * maxIops  实例磁盘的最大IOPS值。  当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  仅包周期场景返回。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'enableSsl' => 'enable_ssl',
            'privateIps' => 'private_ips',
            'privateDnsNames' => 'private_dns_names',
            'publicDnsNames' => 'public_dns_names',
            'publicIps' => 'public_ips',
            'type' => 'type',
            'created' => 'created',
            'updated' => 'updated',
            'dbUserName' => 'db_user_name',
            'switchStrategy' => 'switch_strategy',
            'readOnlyByUser' => 'read_only_by_user',
            'maintenanceWindow' => 'maintenance_window',
            'nodes' => 'nodes',
            'relatedInstance' => 'related_instance',
            'name' => 'name',
            'datastore' => 'datastore',
            'ha' => 'ha',
            'port' => 'port',
            'backupStrategy' => 'backup_strategy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'diskEncryptionId' => 'disk_encryption_id',
            'flavorRef' => 'flavor_ref',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'volume' => 'volume',
            'region' => 'region',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'chargeInfo' => 'charge_info',
            'timeZone' => 'time_zone',
            'tags' => 'tags',
            'backupUsedSpace' => 'backup_used_space',
            'storageUsedSpace' => 'storage_used_space',
            'orderId' => 'order_id',
            'associatedWithDdm' => 'associated_with_ddm',
            'alias' => 'alias',
            'maxIops' => 'max_iops',
            'expirationTime' => 'expiration_time',
            'serverlessInfo' => 'serverless_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * status  实例状态。 - 值为“BUILD”，表示实例正在创建。 - 值为“ACTIVE”，表示实例正常。 - 值为“FAILED”，表示实例异常。 - 值为“FROZEN”，表示实例冻结。 - 值为“MODIFYING”，表示实例正在扩容。 - 值为“REBOOTING”，表示实例正在重启。 - 值为“RESTORING”，表示实例正在恢复。 - 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 - 值为“SWITCHOVER”，表示实例正在主备切换。 - 值为“MIGRATING”，表示实例正在迁移。 - 值为“BACKING UP”，表示实例正在进行备份。 - 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 - 值为“STORAGE FULL”，表示实例磁盘空间满。
    * enableSsl  实例是否开启SSL，取值为\"true\"表示实例开启了SSL，取值为\"false\"表示实例未开启SSL。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  内网域名列表
    * publicDnsNames  公网域名列表
    * publicIps  实例外网IP地址列表。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”，分别对应于单机实例、主备实例、只读实例。
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  客户设置实例只读API的状态信息。仅支持RDS for MySQL引擎。 - true，表示该实例为客户设置的只读状态 - false， 表示该实例未被客户设置只读
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  nodes
    * relatedInstance  relatedInstance
    * name  实例名称。
    * datastore  datastore
    * ha  ha
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE版，5050、5353和5986不可设置）。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * diskEncryptionId  用于磁盘加密的密钥ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * region  区域ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  tags
    * backupUsedSpace  备份空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * orderId  订单ID，仅包周期场景返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * alias  实例的备注信息。
    * maxIops  实例磁盘的最大IOPS值。  当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  仅包周期场景返回。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'enableSsl' => 'setEnableSsl',
            'privateIps' => 'setPrivateIps',
            'privateDnsNames' => 'setPrivateDnsNames',
            'publicDnsNames' => 'setPublicDnsNames',
            'publicIps' => 'setPublicIps',
            'type' => 'setType',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'dbUserName' => 'setDbUserName',
            'switchStrategy' => 'setSwitchStrategy',
            'readOnlyByUser' => 'setReadOnlyByUser',
            'maintenanceWindow' => 'setMaintenanceWindow',
            'nodes' => 'setNodes',
            'relatedInstance' => 'setRelatedInstance',
            'name' => 'setName',
            'datastore' => 'setDatastore',
            'ha' => 'setHa',
            'port' => 'setPort',
            'backupStrategy' => 'setBackupStrategy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'diskEncryptionId' => 'setDiskEncryptionId',
            'flavorRef' => 'setFlavorRef',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'volume' => 'setVolume',
            'region' => 'setRegion',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'chargeInfo' => 'setChargeInfo',
            'timeZone' => 'setTimeZone',
            'tags' => 'setTags',
            'backupUsedSpace' => 'setBackupUsedSpace',
            'storageUsedSpace' => 'setStorageUsedSpace',
            'orderId' => 'setOrderId',
            'associatedWithDdm' => 'setAssociatedWithDdm',
            'alias' => 'setAlias',
            'maxIops' => 'setMaxIops',
            'expirationTime' => 'setExpirationTime',
            'serverlessInfo' => 'setServerlessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * status  实例状态。 - 值为“BUILD”，表示实例正在创建。 - 值为“ACTIVE”，表示实例正常。 - 值为“FAILED”，表示实例异常。 - 值为“FROZEN”，表示实例冻结。 - 值为“MODIFYING”，表示实例正在扩容。 - 值为“REBOOTING”，表示实例正在重启。 - 值为“RESTORING”，表示实例正在恢复。 - 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 - 值为“SWITCHOVER”，表示实例正在主备切换。 - 值为“MIGRATING”，表示实例正在迁移。 - 值为“BACKING UP”，表示实例正在进行备份。 - 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 - 值为“STORAGE FULL”，表示实例磁盘空间满。
    * enableSsl  实例是否开启SSL，取值为\"true\"表示实例开启了SSL，取值为\"false\"表示实例未开启SSL。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  内网域名列表
    * publicDnsNames  公网域名列表
    * publicIps  实例外网IP地址列表。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”，分别对应于单机实例、主备实例、只读实例。
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  客户设置实例只读API的状态信息。仅支持RDS for MySQL引擎。 - true，表示该实例为客户设置的只读状态 - false， 表示该实例未被客户设置只读
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  nodes
    * relatedInstance  relatedInstance
    * name  实例名称。
    * datastore  datastore
    * ha  ha
    * port  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE版，5050、5353和5986不可设置）。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * diskEncryptionId  用于磁盘加密的密钥ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * region  区域ID。
    * vpcId  虚拟私有云ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  tags
    * backupUsedSpace  备份空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    * orderId  订单ID，仅包周期场景返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * alias  实例的备注信息。
    * maxIops  实例磁盘的最大IOPS值。  当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  仅包周期场景返回。
    * serverlessInfo  serverlessInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'enableSsl' => 'getEnableSsl',
            'privateIps' => 'getPrivateIps',
            'privateDnsNames' => 'getPrivateDnsNames',
            'publicDnsNames' => 'getPublicDnsNames',
            'publicIps' => 'getPublicIps',
            'type' => 'getType',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'dbUserName' => 'getDbUserName',
            'switchStrategy' => 'getSwitchStrategy',
            'readOnlyByUser' => 'getReadOnlyByUser',
            'maintenanceWindow' => 'getMaintenanceWindow',
            'nodes' => 'getNodes',
            'relatedInstance' => 'getRelatedInstance',
            'name' => 'getName',
            'datastore' => 'getDatastore',
            'ha' => 'getHa',
            'port' => 'getPort',
            'backupStrategy' => 'getBackupStrategy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'diskEncryptionId' => 'getDiskEncryptionId',
            'flavorRef' => 'getFlavorRef',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'volume' => 'getVolume',
            'region' => 'getRegion',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'chargeInfo' => 'getChargeInfo',
            'timeZone' => 'getTimeZone',
            'tags' => 'getTags',
            'backupUsedSpace' => 'getBackupUsedSpace',
            'storageUsedSpace' => 'getStorageUsedSpace',
            'orderId' => 'getOrderId',
            'associatedWithDdm' => 'getAssociatedWithDdm',
            'alias' => 'getAlias',
            'maxIops' => 'getMaxIops',
            'expirationTime' => 'getExpirationTime',
            'serverlessInfo' => 'getServerlessInfo'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['privateIps'] = isset($data['privateIps']) ? $data['privateIps'] : null;
        $this->container['privateDnsNames'] = isset($data['privateDnsNames']) ? $data['privateDnsNames'] : null;
        $this->container['publicDnsNames'] = isset($data['publicDnsNames']) ? $data['publicDnsNames'] : null;
        $this->container['publicIps'] = isset($data['publicIps']) ? $data['publicIps'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['dbUserName'] = isset($data['dbUserName']) ? $data['dbUserName'] : null;
        $this->container['switchStrategy'] = isset($data['switchStrategy']) ? $data['switchStrategy'] : null;
        $this->container['readOnlyByUser'] = isset($data['readOnlyByUser']) ? $data['readOnlyByUser'] : null;
        $this->container['maintenanceWindow'] = isset($data['maintenanceWindow']) ? $data['maintenanceWindow'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['relatedInstance'] = isset($data['relatedInstance']) ? $data['relatedInstance'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['ha'] = isset($data['ha']) ? $data['ha'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['diskEncryptionId'] = isset($data['diskEncryptionId']) ? $data['diskEncryptionId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['backupUsedSpace'] = isset($data['backupUsedSpace']) ? $data['backupUsedSpace'] : null;
        $this->container['storageUsedSpace'] = isset($data['storageUsedSpace']) ? $data['storageUsedSpace'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['associatedWithDdm'] = isset($data['associatedWithDdm']) ? $data['associatedWithDdm'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['maxIops'] = isset($data['maxIops']) ? $data['maxIops'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
        $this->container['serverlessInfo'] = isset($data['serverlessInfo']) ? $data['serverlessInfo'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['enableSsl'] === null) {
            $invalidProperties[] = "'enableSsl' can't be null";
        }
        if ($this->container['privateIps'] === null) {
            $invalidProperties[] = "'privateIps' can't be null";
        }
        if ($this->container['publicIps'] === null) {
            $invalidProperties[] = "'publicIps' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
        if ($this->container['switchStrategy'] === null) {
            $invalidProperties[] = "'switchStrategy' can't be null";
        }
        if ($this->container['maintenanceWindow'] === null) {
            $invalidProperties[] = "'maintenanceWindow' can't be null";
        }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['relatedInstance'] === null) {
            $invalidProperties[] = "'relatedInstance' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['backupStrategy'] === null) {
            $invalidProperties[] = "'backupStrategy' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['diskEncryptionId'] === null) {
            $invalidProperties[] = "'diskEncryptionId' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
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
        if ($this->container['chargeInfo'] === null) {
            $invalidProperties[] = "'chargeInfo' can't be null";
        }
        if ($this->container['timeZone'] === null) {
            $invalidProperties[] = "'timeZone' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
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
    * Gets status
    *  实例状态。 - 值为“BUILD”，表示实例正在创建。 - 值为“ACTIVE”，表示实例正常。 - 值为“FAILED”，表示实例异常。 - 值为“FROZEN”，表示实例冻结。 - 值为“MODIFYING”，表示实例正在扩容。 - 值为“REBOOTING”，表示实例正在重启。 - 值为“RESTORING”，表示实例正在恢复。 - 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 - 值为“SWITCHOVER”，表示实例正在主备切换。 - 值为“MIGRATING”，表示实例正在迁移。 - 值为“BACKING UP”，表示实例正在进行备份。 - 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 - 值为“STORAGE FULL”，表示实例磁盘空间满。
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
    * @param string $status 实例状态。 - 值为“BUILD”，表示实例正在创建。 - 值为“ACTIVE”，表示实例正常。 - 值为“FAILED”，表示实例异常。 - 值为“FROZEN”，表示实例冻结。 - 值为“MODIFYING”，表示实例正在扩容。 - 值为“REBOOTING”，表示实例正在重启。 - 值为“RESTORING”，表示实例正在恢复。 - 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 - 值为“SWITCHOVER”，表示实例正在主备切换。 - 值为“MIGRATING”，表示实例正在迁移。 - 值为“BACKING UP”，表示实例正在进行备份。 - 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 - 值为“STORAGE FULL”，表示实例磁盘空间满。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enableSsl
    *  实例是否开启SSL，取值为\"true\"表示实例开启了SSL，取值为\"false\"表示实例未开启SSL。
    *
    * @return bool
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool $enableSsl 实例是否开启SSL，取值为\"true\"表示实例开启了SSL，取值为\"false\"表示实例未开启SSL。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets privateIps
    *  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    *
    * @return string[]
    */
    public function getPrivateIps()
    {
        return $this->container['privateIps'];
    }

    /**
    * Sets privateIps
    *
    * @param string[] $privateIps 实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    *
    * @return $this
    */
    public function setPrivateIps($privateIps)
    {
        $this->container['privateIps'] = $privateIps;
        return $this;
    }

    /**
    * Gets privateDnsNames
    *  内网域名列表
    *
    * @return string[]|null
    */
    public function getPrivateDnsNames()
    {
        return $this->container['privateDnsNames'];
    }

    /**
    * Sets privateDnsNames
    *
    * @param string[]|null $privateDnsNames 内网域名列表
    *
    * @return $this
    */
    public function setPrivateDnsNames($privateDnsNames)
    {
        $this->container['privateDnsNames'] = $privateDnsNames;
        return $this;
    }

    /**
    * Gets publicDnsNames
    *  公网域名列表
    *
    * @return string[]|null
    */
    public function getPublicDnsNames()
    {
        return $this->container['publicDnsNames'];
    }

    /**
    * Sets publicDnsNames
    *
    * @param string[]|null $publicDnsNames 公网域名列表
    *
    * @return $this
    */
    public function setPublicDnsNames($publicDnsNames)
    {
        $this->container['publicDnsNames'] = $publicDnsNames;
        return $this;
    }

    /**
    * Gets publicIps
    *  实例外网IP地址列表。
    *
    * @return string[]
    */
    public function getPublicIps()
    {
        return $this->container['publicIps'];
    }

    /**
    * Sets publicIps
    *
    * @param string[] $publicIps 实例外网IP地址列表。
    *
    * @return $this
    */
    public function setPublicIps($publicIps)
    {
        $this->container['publicIps'] = $publicIps;
        return $this;
    }

    /**
    * Gets type
    *  实例类型，取值为“Single”，“Ha”或“Replica”，分别对应于单机实例、主备实例、只读实例。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 实例类型，取值为“Single”，“Ha”或“Replica”，分别对应于单机实例、主备实例、只读实例。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
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
    * @param string $created 创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
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
    *  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
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
    * @param string $updated 更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
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
    *  默认用户名。
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
    * @param string $dbUserName 默认用户名。
    *
    * @return $this
    */
    public function setDbUserName($dbUserName)
    {
        $this->container['dbUserName'] = $dbUserName;
        return $this;
    }

    /**
    * Gets switchStrategy
    *  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    *
    * @return string
    */
    public function getSwitchStrategy()
    {
        return $this->container['switchStrategy'];
    }

    /**
    * Sets switchStrategy
    *
    * @param string $switchStrategy 数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    *
    * @return $this
    */
    public function setSwitchStrategy($switchStrategy)
    {
        $this->container['switchStrategy'] = $switchStrategy;
        return $this;
    }

    /**
    * Gets readOnlyByUser
    *  客户设置实例只读API的状态信息。仅支持RDS for MySQL引擎。 - true，表示该实例为客户设置的只读状态 - false， 表示该实例未被客户设置只读
    *
    * @return bool|null
    */
    public function getReadOnlyByUser()
    {
        return $this->container['readOnlyByUser'];
    }

    /**
    * Sets readOnlyByUser
    *
    * @param bool|null $readOnlyByUser 客户设置实例只读API的状态信息。仅支持RDS for MySQL引擎。 - true，表示该实例为客户设置的只读状态 - false， 表示该实例未被客户设置只读
    *
    * @return $this
    */
    public function setReadOnlyByUser($readOnlyByUser)
    {
        $this->container['readOnlyByUser'] = $readOnlyByUser;
        return $this;
    }

    /**
    * Gets maintenanceWindow
    *  可维护时间窗，为UTC时间。
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
    * @param string $maintenanceWindow 可维护时间窗，为UTC时间。
    *
    * @return $this
    */
    public function setMaintenanceWindow($maintenanceWindow)
    {
        $this->container['maintenanceWindow'] = $maintenanceWindow;
        return $this;
    }

    /**
    * Gets nodes
    *  nodes
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\NodeResponse[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\NodeResponse[] $nodes nodes
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets relatedInstance
    *  relatedInstance
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\RelatedInstance[]
    */
    public function getRelatedInstance()
    {
        return $this->container['relatedInstance'];
    }

    /**
    * Sets relatedInstance
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\RelatedInstance[] $relatedInstance relatedInstance
    *
    * @return $this
    */
    public function setRelatedInstance($relatedInstance)
    {
        $this->container['relatedInstance'] = $relatedInstance;
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
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Datastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Datastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets ha
    *  ha
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\HaResponse|null
    */
    public function getHa()
    {
        return $this->container['ha'];
    }

    /**
    * Sets ha
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\HaResponse|null $ha ha
    *
    * @return $this
    */
    public function setHa($ha)
    {
        $this->container['ha'] = $ha;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE版，5050、5353和5986不可设置）。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port 数据库端口信息。  - MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 - PostgreSQL数据库端口修改范围为2100～9500。 - Microsoft SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE版，5050、5353和5986不可设置）。  当不传该参数时，默认端口如下：  - MySQL默认3306。 - PostgreSQL默认5432。 - Microsoft SQL Server默认1433。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\BackupStrategyForResponse
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\BackupStrategyForResponse $backupStrategy backupStrategy
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets diskEncryptionId
    *  用于磁盘加密的密钥ID。
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
    * @param string $diskEncryptionId 用于磁盘加密的密钥ID。
    *
    * @return $this
    */
    public function setDiskEncryptionId($diskEncryptionId)
    {
        $this->container['diskEncryptionId'] = $diskEncryptionId;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 规格码。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU大小。例如，1表示1U。
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
    * @param string|null $cpu CPU大小。例如，1表示1U。
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
    *  内存大小（单位：GB）。
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
    * @param string|null $mem 内存大小（单位：GB）。
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Volume
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Volume $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets region
    *  区域ID。
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
    * @param string $region 区域ID。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ChargeInfoResponse
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ChargeInfoResponse $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
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
    * Gets tags
    *  tags
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\TagResponse[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\TagResponse[] $tags tags
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets backupUsedSpace
    *  备份空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    *
    * @return double|null
    */
    public function getBackupUsedSpace()
    {
        return $this->container['backupUsedSpace'];
    }

    /**
    * Sets backupUsedSpace
    *
    * @param double|null $backupUsedSpace 备份空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    *
    * @return $this
    */
    public function setBackupUsedSpace($backupUsedSpace)
    {
        $this->container['backupUsedSpace'] = $backupUsedSpace;
        return $this;
    }

    /**
    * Gets storageUsedSpace
    *  磁盘空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    *
    * @return double|null
    */
    public function getStorageUsedSpace()
    {
        return $this->container['storageUsedSpace'];
    }

    /**
    * Sets storageUsedSpace
    *
    * @param double|null $storageUsedSpace 磁盘空间使用量，单位GB。  该字段仅用于查询指定SQL Server实例信息时返回。
    *
    * @return $this
    */
    public function setStorageUsedSpace($storageUsedSpace)
    {
        $this->container['storageUsedSpace'] = $storageUsedSpace;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID，仅包周期场景返回。
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
    * @param string|null $orderId 订单ID，仅包周期场景返回。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets associatedWithDdm
    *  是否已被DDM实例关联。
    *
    * @return bool|null
    */
    public function getAssociatedWithDdm()
    {
        return $this->container['associatedWithDdm'];
    }

    /**
    * Sets associatedWithDdm
    *
    * @param bool|null $associatedWithDdm 是否已被DDM实例关联。
    *
    * @return $this
    */
    public function setAssociatedWithDdm($associatedWithDdm)
    {
        $this->container['associatedWithDdm'] = $associatedWithDdm;
        return $this;
    }

    /**
    * Gets alias
    *  实例的备注信息。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 实例的备注信息。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets maxIops
    *  实例磁盘的最大IOPS值。  当前该字段仅对于SQL Server引擎实例返回。
    *
    * @return int|null
    */
    public function getMaxIops()
    {
        return $this->container['maxIops'];
    }

    /**
    * Sets maxIops
    *
    * @param int|null $maxIops 实例磁盘的最大IOPS值。  当前该字段仅对于SQL Server引擎实例返回。
    *
    * @return $this
    */
    public function setMaxIops($maxIops)
    {
        $this->container['maxIops'] = $maxIops;
        return $this;
    }

    /**
    * Gets expirationTime
    *  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  仅包周期场景返回。
    *
    * @return string|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param string|null $expirationTime 实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。  仅包周期场景返回。
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
        return $this;
    }

    /**
    * Gets serverlessInfo
    *  serverlessInfo
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ServerlessInfoResponse|null
    */
    public function getServerlessInfo()
    {
        return $this->container['serverlessInfo'];
    }

    /**
    * Sets serverlessInfo
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ServerlessInfoResponse|null $serverlessInfo serverlessInfo
    *
    * @return $this
    */
    public function setServerlessInfo($serverlessInfo)
    {
        $this->container['serverlessInfo'] = $serverlessInfo;
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

