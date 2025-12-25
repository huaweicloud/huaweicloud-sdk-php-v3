<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcRds implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcRds';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  创建的实例名称。
    * protectedStatus  DBSS开启状态：OPEN | CLOSE
    * status  实例状态。 取值： 值为“BUILD”，表示实例正在创建。 值为“ACTIVE”，表示实例正常。 值为“FAILED”，表示实例异常。 值为“FROZEN”，表示实例冻结。 值为“MODIFYING”，表示实例正在扩容。 值为“REBOOTING”，表示实例正在重启。 值为“RESTORING”，表示实例正在恢复。 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 值为“SWITCHOVER”，表示实例正在主备切换。 值为“MIGRATING”，表示实例正在迁移。 值为“BACKING UP”，表示实例正在进行备份。 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 值为“STORAGE FULL”，表示实例磁盘空间满。
    * alias  实例的备注信息。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。 RDS for MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 RDS for PostgreSQL数据库端口修改范围为2100～9500。 RDS for SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置）。 当不传该参数时，默认端口如下：  RDS for MySQL默认3306。 RDS for PostgreSQL默认5432。 RDS for SQL Server默认1433。
    * enableSsl  实例开启SSL标志。 取值为“true”：表示实例已开启SSL。 取值为“false”：表示实例未开启SSL。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”, \"Enterprise\"，分别对应于单机实例、主备实例、只读实例、分布式实例（企业版）。
    * ha  ha
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * tags  标签列表，没有标签默认为空数组。
    * enterpriseProjectId  企业项目标签ID。
    * projectId  项目ID
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  用户设置的实例只读状态。仅支持RDS for MySQL引擎。 true，表示该实例被设置为只读状态。 false，表示该实例未被设置为只读状态。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  主备实例信息
    * relatedInstance  所关联的数据库实例列表。
    * diskEncryptionId  磁盘加密密钥ID。
    * timeZone  时区。
    * backupUsedSpace  备份空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * maxIops  实例磁盘的最大IOPS值。 当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 仅包周期场景返回。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'protectedStatus' => 'string',
            'status' => 'string',
            'alias' => 'string',
            'privateIps' => 'string[]',
            'privateDnsNames' => 'string[]',
            'publicIps' => 'string[]',
            'port' => 'int',
            'enableSsl' => 'bool',
            'type' => 'string',
            'ha' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsHa',
            'region' => 'string',
            'datastore' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsDatastore',
            'created' => 'string',
            'updated' => 'string',
            'dbUserName' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'flavorRef' => 'string',
            'cpu' => 'string',
            'mem' => 'string',
            'volume' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsVolume',
            'tags' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Tag[]',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'switchStrategy' => 'string',
            'readOnlyByUser' => 'bool',
            'backupStrategy' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsBackupStrategy',
            'maintenanceWindow' => 'string',
            'nodes' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsNode[]',
            'relatedInstance' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsRelatedInstance[]',
            'diskEncryptionId' => 'string',
            'timeZone' => 'string',
            'backupUsedSpace' => 'double',
            'storageUsedSpace' => 'double',
            'associatedWithDdm' => 'bool',
            'maxIops' => 'int',
            'expirationTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  创建的实例名称。
    * protectedStatus  DBSS开启状态：OPEN | CLOSE
    * status  实例状态。 取值： 值为“BUILD”，表示实例正在创建。 值为“ACTIVE”，表示实例正常。 值为“FAILED”，表示实例异常。 值为“FROZEN”，表示实例冻结。 值为“MODIFYING”，表示实例正在扩容。 值为“REBOOTING”，表示实例正在重启。 值为“RESTORING”，表示实例正在恢复。 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 值为“SWITCHOVER”，表示实例正在主备切换。 值为“MIGRATING”，表示实例正在迁移。 值为“BACKING UP”，表示实例正在进行备份。 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 值为“STORAGE FULL”，表示实例磁盘空间满。
    * alias  实例的备注信息。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。 RDS for MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 RDS for PostgreSQL数据库端口修改范围为2100～9500。 RDS for SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置）。 当不传该参数时，默认端口如下：  RDS for MySQL默认3306。 RDS for PostgreSQL默认5432。 RDS for SQL Server默认1433。
    * enableSsl  实例开启SSL标志。 取值为“true”：表示实例已开启SSL。 取值为“false”：表示实例未开启SSL。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”, \"Enterprise\"，分别对应于单机实例、主备实例、只读实例、分布式实例（企业版）。
    * ha  ha
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * tags  标签列表，没有标签默认为空数组。
    * enterpriseProjectId  企业项目标签ID。
    * projectId  项目ID
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  用户设置的实例只读状态。仅支持RDS for MySQL引擎。 true，表示该实例被设置为只读状态。 false，表示该实例未被设置为只读状态。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  主备实例信息
    * relatedInstance  所关联的数据库实例列表。
    * diskEncryptionId  磁盘加密密钥ID。
    * timeZone  时区。
    * backupUsedSpace  备份空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * maxIops  实例磁盘的最大IOPS值。 当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 仅包周期场景返回。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'protectedStatus' => null,
        'status' => null,
        'alias' => null,
        'privateIps' => null,
        'privateDnsNames' => null,
        'publicIps' => null,
        'port' => 'int32',
        'enableSsl' => null,
        'type' => null,
        'ha' => null,
        'region' => null,
        'datastore' => null,
        'created' => null,
        'updated' => null,
        'dbUserName' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'flavorRef' => null,
        'cpu' => null,
        'mem' => null,
        'volume' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'projectId' => null,
        'switchStrategy' => null,
        'readOnlyByUser' => null,
        'backupStrategy' => null,
        'maintenanceWindow' => null,
        'nodes' => null,
        'relatedInstance' => null,
        'diskEncryptionId' => null,
        'timeZone' => null,
        'backupUsedSpace' => 'double',
        'storageUsedSpace' => 'double',
        'associatedWithDdm' => null,
        'maxIops' => 'int64',
        'expirationTime' => null
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
    * name  创建的实例名称。
    * protectedStatus  DBSS开启状态：OPEN | CLOSE
    * status  实例状态。 取值： 值为“BUILD”，表示实例正在创建。 值为“ACTIVE”，表示实例正常。 值为“FAILED”，表示实例异常。 值为“FROZEN”，表示实例冻结。 值为“MODIFYING”，表示实例正在扩容。 值为“REBOOTING”，表示实例正在重启。 值为“RESTORING”，表示实例正在恢复。 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 值为“SWITCHOVER”，表示实例正在主备切换。 值为“MIGRATING”，表示实例正在迁移。 值为“BACKING UP”，表示实例正在进行备份。 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 值为“STORAGE FULL”，表示实例磁盘空间满。
    * alias  实例的备注信息。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。 RDS for MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 RDS for PostgreSQL数据库端口修改范围为2100～9500。 RDS for SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置）。 当不传该参数时，默认端口如下：  RDS for MySQL默认3306。 RDS for PostgreSQL默认5432。 RDS for SQL Server默认1433。
    * enableSsl  实例开启SSL标志。 取值为“true”：表示实例已开启SSL。 取值为“false”：表示实例未开启SSL。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”, \"Enterprise\"，分别对应于单机实例、主备实例、只读实例、分布式实例（企业版）。
    * ha  ha
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * tags  标签列表，没有标签默认为空数组。
    * enterpriseProjectId  企业项目标签ID。
    * projectId  项目ID
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  用户设置的实例只读状态。仅支持RDS for MySQL引擎。 true，表示该实例被设置为只读状态。 false，表示该实例未被设置为只读状态。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  主备实例信息
    * relatedInstance  所关联的数据库实例列表。
    * diskEncryptionId  磁盘加密密钥ID。
    * timeZone  时区。
    * backupUsedSpace  备份空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * maxIops  实例磁盘的最大IOPS值。 当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 仅包周期场景返回。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'protectedStatus' => 'protected_status',
            'status' => 'status',
            'alias' => 'alias',
            'privateIps' => 'private_ips',
            'privateDnsNames' => 'private_dns_names',
            'publicIps' => 'public_ips',
            'port' => 'port',
            'enableSsl' => 'enable_ssl',
            'type' => 'type',
            'ha' => 'ha',
            'region' => 'region',
            'datastore' => 'datastore',
            'created' => 'created',
            'updated' => 'updated',
            'dbUserName' => 'db_user_name',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'flavorRef' => 'flavor_ref',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'volume' => 'volume',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'switchStrategy' => 'switch_strategy',
            'readOnlyByUser' => 'read_only_by_user',
            'backupStrategy' => 'backup_strategy',
            'maintenanceWindow' => 'maintenance_window',
            'nodes' => 'nodes',
            'relatedInstance' => 'related_instance',
            'diskEncryptionId' => 'disk_encryption_id',
            'timeZone' => 'time_zone',
            'backupUsedSpace' => 'backup_used_space',
            'storageUsedSpace' => 'storage_used_space',
            'associatedWithDdm' => 'associated_with_ddm',
            'maxIops' => 'max_iops',
            'expirationTime' => 'expiration_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  创建的实例名称。
    * protectedStatus  DBSS开启状态：OPEN | CLOSE
    * status  实例状态。 取值： 值为“BUILD”，表示实例正在创建。 值为“ACTIVE”，表示实例正常。 值为“FAILED”，表示实例异常。 值为“FROZEN”，表示实例冻结。 值为“MODIFYING”，表示实例正在扩容。 值为“REBOOTING”，表示实例正在重启。 值为“RESTORING”，表示实例正在恢复。 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 值为“SWITCHOVER”，表示实例正在主备切换。 值为“MIGRATING”，表示实例正在迁移。 值为“BACKING UP”，表示实例正在进行备份。 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 值为“STORAGE FULL”，表示实例磁盘空间满。
    * alias  实例的备注信息。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。 RDS for MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 RDS for PostgreSQL数据库端口修改范围为2100～9500。 RDS for SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置）。 当不传该参数时，默认端口如下：  RDS for MySQL默认3306。 RDS for PostgreSQL默认5432。 RDS for SQL Server默认1433。
    * enableSsl  实例开启SSL标志。 取值为“true”：表示实例已开启SSL。 取值为“false”：表示实例未开启SSL。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”, \"Enterprise\"，分别对应于单机实例、主备实例、只读实例、分布式实例（企业版）。
    * ha  ha
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * tags  标签列表，没有标签默认为空数组。
    * enterpriseProjectId  企业项目标签ID。
    * projectId  项目ID
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  用户设置的实例只读状态。仅支持RDS for MySQL引擎。 true，表示该实例被设置为只读状态。 false，表示该实例未被设置为只读状态。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  主备实例信息
    * relatedInstance  所关联的数据库实例列表。
    * diskEncryptionId  磁盘加密密钥ID。
    * timeZone  时区。
    * backupUsedSpace  备份空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * maxIops  实例磁盘的最大IOPS值。 当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 仅包周期场景返回。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'protectedStatus' => 'setProtectedStatus',
            'status' => 'setStatus',
            'alias' => 'setAlias',
            'privateIps' => 'setPrivateIps',
            'privateDnsNames' => 'setPrivateDnsNames',
            'publicIps' => 'setPublicIps',
            'port' => 'setPort',
            'enableSsl' => 'setEnableSsl',
            'type' => 'setType',
            'ha' => 'setHa',
            'region' => 'setRegion',
            'datastore' => 'setDatastore',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'dbUserName' => 'setDbUserName',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'flavorRef' => 'setFlavorRef',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'volume' => 'setVolume',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'switchStrategy' => 'setSwitchStrategy',
            'readOnlyByUser' => 'setReadOnlyByUser',
            'backupStrategy' => 'setBackupStrategy',
            'maintenanceWindow' => 'setMaintenanceWindow',
            'nodes' => 'setNodes',
            'relatedInstance' => 'setRelatedInstance',
            'diskEncryptionId' => 'setDiskEncryptionId',
            'timeZone' => 'setTimeZone',
            'backupUsedSpace' => 'setBackupUsedSpace',
            'storageUsedSpace' => 'setStorageUsedSpace',
            'associatedWithDdm' => 'setAssociatedWithDdm',
            'maxIops' => 'setMaxIops',
            'expirationTime' => 'setExpirationTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  创建的实例名称。
    * protectedStatus  DBSS开启状态：OPEN | CLOSE
    * status  实例状态。 取值： 值为“BUILD”，表示实例正在创建。 值为“ACTIVE”，表示实例正常。 值为“FAILED”，表示实例异常。 值为“FROZEN”，表示实例冻结。 值为“MODIFYING”，表示实例正在扩容。 值为“REBOOTING”，表示实例正在重启。 值为“RESTORING”，表示实例正在恢复。 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 值为“SWITCHOVER”，表示实例正在主备切换。 值为“MIGRATING”，表示实例正在迁移。 值为“BACKING UP”，表示实例正在进行备份。 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 值为“STORAGE FULL”，表示实例磁盘空间满。
    * alias  实例的备注信息。
    * privateIps  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。 RDS for MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 RDS for PostgreSQL数据库端口修改范围为2100～9500。 RDS for SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置）。 当不传该参数时，默认端口如下：  RDS for MySQL默认3306。 RDS for PostgreSQL默认5432。 RDS for SQL Server默认1433。
    * enableSsl  实例开启SSL标志。 取值为“true”：表示实例已开启SSL。 取值为“false”：表示实例未开启SSL。
    * type  实例类型，取值为“Single”，“Ha”或“Replica”, \"Enterprise\"，分别对应于单机实例、主备实例、只读实例、分布式实例（企业版）。
    * ha  ha
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * updated  更新时间，格式与“created”字段对应格式完全相同。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * cpu  CPU大小。例如，1表示1U。
    * mem  内存大小（单位：GB）。
    * volume  volume
    * tags  标签列表，没有标签默认为空数组。
    * enterpriseProjectId  企业项目标签ID。
    * projectId  项目ID
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。
    * readOnlyByUser  用户设置的实例只读状态。仅支持RDS for MySQL引擎。 true，表示该实例被设置为只读状态。 false，表示该实例未被设置为只读状态。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  主备实例信息
    * relatedInstance  所关联的数据库实例列表。
    * diskEncryptionId  磁盘加密密钥ID。
    * timeZone  时区。
    * backupUsedSpace  备份空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * storageUsedSpace  磁盘空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    * associatedWithDdm  是否已被DDM实例关联。
    * maxIops  实例磁盘的最大IOPS值。 当前该字段仅对于SQL Server引擎实例返回。
    * expirationTime  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 仅包周期场景返回。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'protectedStatus' => 'getProtectedStatus',
            'status' => 'getStatus',
            'alias' => 'getAlias',
            'privateIps' => 'getPrivateIps',
            'privateDnsNames' => 'getPrivateDnsNames',
            'publicIps' => 'getPublicIps',
            'port' => 'getPort',
            'enableSsl' => 'getEnableSsl',
            'type' => 'getType',
            'ha' => 'getHa',
            'region' => 'getRegion',
            'datastore' => 'getDatastore',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'dbUserName' => 'getDbUserName',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'flavorRef' => 'getFlavorRef',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'volume' => 'getVolume',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'switchStrategy' => 'getSwitchStrategy',
            'readOnlyByUser' => 'getReadOnlyByUser',
            'backupStrategy' => 'getBackupStrategy',
            'maintenanceWindow' => 'getMaintenanceWindow',
            'nodes' => 'getNodes',
            'relatedInstance' => 'getRelatedInstance',
            'diskEncryptionId' => 'getDiskEncryptionId',
            'timeZone' => 'getTimeZone',
            'backupUsedSpace' => 'getBackupUsedSpace',
            'storageUsedSpace' => 'getStorageUsedSpace',
            'associatedWithDdm' => 'getAssociatedWithDdm',
            'maxIops' => 'getMaxIops',
            'expirationTime' => 'getExpirationTime'
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
        $this->container['protectedStatus'] = isset($data['protectedStatus']) ? $data['protectedStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['privateIps'] = isset($data['privateIps']) ? $data['privateIps'] : null;
        $this->container['privateDnsNames'] = isset($data['privateDnsNames']) ? $data['privateDnsNames'] : null;
        $this->container['publicIps'] = isset($data['publicIps']) ? $data['publicIps'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ha'] = isset($data['ha']) ? $data['ha'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['dbUserName'] = isset($data['dbUserName']) ? $data['dbUserName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['switchStrategy'] = isset($data['switchStrategy']) ? $data['switchStrategy'] : null;
        $this->container['readOnlyByUser'] = isset($data['readOnlyByUser']) ? $data['readOnlyByUser'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['maintenanceWindow'] = isset($data['maintenanceWindow']) ? $data['maintenanceWindow'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['relatedInstance'] = isset($data['relatedInstance']) ? $data['relatedInstance'] : null;
        $this->container['diskEncryptionId'] = isset($data['diskEncryptionId']) ? $data['diskEncryptionId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['backupUsedSpace'] = isset($data['backupUsedSpace']) ? $data['backupUsedSpace'] : null;
        $this->container['storageUsedSpace'] = isset($data['storageUsedSpace']) ? $data['storageUsedSpace'] : null;
        $this->container['associatedWithDdm'] = isset($data['associatedWithDdm']) ? $data['associatedWithDdm'] : null;
        $this->container['maxIops'] = isset($data['maxIops']) ? $data['maxIops'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protectedStatus'] === null) {
            $invalidProperties[] = "'protectedStatus' can't be null";
        }
            if ((mb_strlen($this->container['protectedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['protectedStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 256)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) < 0)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
            if (($this->container['port'] >= 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than 65535.";
            }
            if (($this->container['port'] <= 1024)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than 1024.";
            }
        if ($this->container['enableSsl'] === null) {
            $invalidProperties[] = "'enableSsl' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ha'] === null) {
            $invalidProperties[] = "'ha' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 32)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
            if ((mb_strlen($this->container['created']) > 32)) {
                $invalidProperties[] = "invalid value for 'created', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['created']) < 0)) {
                $invalidProperties[] = "invalid value for 'created', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updated']) && (mb_strlen($this->container['updated']) > 32)) {
                $invalidProperties[] = "invalid value for 'updated', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['updated']) && (mb_strlen($this->container['updated']) < 0)) {
                $invalidProperties[] = "invalid value for 'updated', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dbUserName']) && (mb_strlen($this->container['dbUserName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dbUserName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dbUserName']) && (mb_strlen($this->container['dbUserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dbUserName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vpcId']) < 32)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            if ((mb_strlen($this->container['subnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['subnetId']) < 32)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if ((mb_strlen($this->container['securityGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['securityGroupId']) < 32)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
            if ((mb_strlen($this->container['flavorRef']) > 64)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['flavorRef']) < 0)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
            if ((mb_strlen($this->container['cpu']) > 32)) {
                $invalidProperties[] = "invalid value for 'cpu', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['cpu']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpu', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['mem'] === null) {
            $invalidProperties[] = "'mem' can't be null";
        }
            if ((mb_strlen($this->container['mem']) > 8)) {
                $invalidProperties[] = "invalid value for 'mem', the character length must be smaller than or equal to 8.";
            }
            if ((mb_strlen($this->container['mem']) < 0)) {
                $invalidProperties[] = "invalid value for 'mem', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['switchStrategy'] === null) {
            $invalidProperties[] = "'switchStrategy' can't be null";
        }
            if ((mb_strlen($this->container['switchStrategy']) > 32)) {
                $invalidProperties[] = "invalid value for 'switchStrategy', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['switchStrategy']) < 0)) {
                $invalidProperties[] = "invalid value for 'switchStrategy', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['readOnlyByUser'] === null) {
            $invalidProperties[] = "'readOnlyByUser' can't be null";
        }
        if ($this->container['backupStrategy'] === null) {
            $invalidProperties[] = "'backupStrategy' can't be null";
        }
        if ($this->container['maintenanceWindow'] === null) {
            $invalidProperties[] = "'maintenanceWindow' can't be null";
        }
            if ((mb_strlen($this->container['maintenanceWindow']) > 32)) {
                $invalidProperties[] = "invalid value for 'maintenanceWindow', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['maintenanceWindow']) < 0)) {
                $invalidProperties[] = "invalid value for 'maintenanceWindow', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['relatedInstance'] === null) {
            $invalidProperties[] = "'relatedInstance' can't be null";
        }
            if (!is_null($this->container['diskEncryptionId']) && (mb_strlen($this->container['diskEncryptionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'diskEncryptionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['diskEncryptionId']) && (mb_strlen($this->container['diskEncryptionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'diskEncryptionId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['timeZone'] === null) {
            $invalidProperties[] = "'timeZone' can't be null";
        }
            if ((mb_strlen($this->container['timeZone']) > 32)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['timeZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupUsedSpace']) && ($this->container['backupUsedSpace'] > 65536)) {
                $invalidProperties[] = "invalid value for 'backupUsedSpace', must be smaller than or equal to 65536.";
            }
            if (!is_null($this->container['backupUsedSpace']) && ($this->container['backupUsedSpace'] < 0)) {
                $invalidProperties[] = "invalid value for 'backupUsedSpace', must be bigger than or equal to 0.";
            }
        if ($this->container['storageUsedSpace'] === null) {
            $invalidProperties[] = "'storageUsedSpace' can't be null";
        }
            if (($this->container['storageUsedSpace'] > 65535)) {
                $invalidProperties[] = "invalid value for 'storageUsedSpace', must be smaller than or equal to 65535.";
            }
            if (($this->container['storageUsedSpace'] < 0)) {
                $invalidProperties[] = "invalid value for 'storageUsedSpace', must be bigger than or equal to 0.";
            }
        if ($this->container['associatedWithDdm'] === null) {
            $invalidProperties[] = "'associatedWithDdm' can't be null";
        }
        if ($this->container['maxIops'] === null) {
            $invalidProperties[] = "'maxIops' can't be null";
        }
            if (($this->container['maxIops'] > 10000000000)) {
                $invalidProperties[] = "invalid value for 'maxIops', must be smaller than or equal to 10000000000.";
            }
            if (($this->container['maxIops'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxIops', must be bigger than or equal to 0.";
            }
        if ($this->container['expirationTime'] === null) {
            $invalidProperties[] = "'expirationTime' can't be null";
        }
            if ((mb_strlen($this->container['expirationTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'expirationTime', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['expirationTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expirationTime', the character length must be bigger than or equal to 0.";
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
    *  创建的实例名称。
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
    * @param string $name 创建的实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protectedStatus
    *  DBSS开启状态：OPEN | CLOSE
    *
    * @return string
    */
    public function getProtectedStatus()
    {
        return $this->container['protectedStatus'];
    }

    /**
    * Sets protectedStatus
    *
    * @param string $protectedStatus DBSS开启状态：OPEN | CLOSE
    *
    * @return $this
    */
    public function setProtectedStatus($protectedStatus)
    {
        $this->container['protectedStatus'] = $protectedStatus;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。 取值： 值为“BUILD”，表示实例正在创建。 值为“ACTIVE”，表示实例正常。 值为“FAILED”，表示实例异常。 值为“FROZEN”，表示实例冻结。 值为“MODIFYING”，表示实例正在扩容。 值为“REBOOTING”，表示实例正在重启。 值为“RESTORING”，表示实例正在恢复。 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 值为“SWITCHOVER”，表示实例正在主备切换。 值为“MIGRATING”，表示实例正在迁移。 值为“BACKING UP”，表示实例正在进行备份。 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 值为“STORAGE FULL”，表示实例磁盘空间满。
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
    * @param string $status 实例状态。 取值： 值为“BUILD”，表示实例正在创建。 值为“ACTIVE”，表示实例正常。 值为“FAILED”，表示实例异常。 值为“FROZEN”，表示实例冻结。 值为“MODIFYING”，表示实例正在扩容。 值为“REBOOTING”，表示实例正在重启。 值为“RESTORING”，表示实例正在恢复。 值为“MODIFYING INSTANCE TYPE”，表示实例正在转主备。 值为“SWITCHOVER”，表示实例正在主备切换。 值为“MIGRATING”，表示实例正在迁移。 值为“BACKING UP”，表示实例正在进行备份。 值为“MODIFYING DATABASE PORT”，表示实例正在修改数据库端口。 值为“STORAGE FULL”，表示实例磁盘空间满。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets privateIps
    *  实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    *
    * @return string[]|null
    */
    public function getPrivateIps()
    {
        return $this->container['privateIps'];
    }

    /**
    * Sets privateIps
    *
    * @param string[]|null $privateIps 实例内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字符串。
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
    *  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
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
    * @param string[]|null $privateDnsNames 实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    *
    * @return $this
    */
    public function setPrivateDnsNames($privateDnsNames)
    {
        $this->container['privateDnsNames'] = $privateDnsNames;
        return $this;
    }

    /**
    * Gets publicIps
    *  实例外网IP地址列表。
    *
    * @return string[]|null
    */
    public function getPublicIps()
    {
        return $this->container['publicIps'];
    }

    /**
    * Sets publicIps
    *
    * @param string[]|null $publicIps 实例外网IP地址列表。
    *
    * @return $this
    */
    public function setPublicIps($publicIps)
    {
        $this->container['publicIps'] = $publicIps;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口号。 RDS for MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 RDS for PostgreSQL数据库端口修改范围为2100～9500。 RDS for SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置）。 当不传该参数时，默认端口如下：  RDS for MySQL默认3306。 RDS for PostgreSQL默认5432。 RDS for SQL Server默认1433。
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
    * @param int $port 数据库端口号。 RDS for MySQL数据库端口设置范围为1024～65535（其中12017和33071被RDS系统占用不可设置）。 RDS for PostgreSQL数据库端口修改范围为2100～9500。 RDS for SQL Server实例的端口设置范围为1433和2100~9500（其中5355和5985不可设置。对于2017 EE、2017 SE、2017 Web版，5050、5353和5986不可设置）。 当不传该参数时，默认端口如下：  RDS for MySQL默认3306。 RDS for PostgreSQL默认5432。 RDS for SQL Server默认1433。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets enableSsl
    *  实例开启SSL标志。 取值为“true”：表示实例已开启SSL。 取值为“false”：表示实例未开启SSL。
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
    * @param bool $enableSsl 实例开启SSL标志。 取值为“true”：表示实例已开启SSL。 取值为“false”：表示实例未开启SSL。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets type
    *  实例类型，取值为“Single”，“Ha”或“Replica”, \"Enterprise\"，分别对应于单机实例、主备实例、只读实例、分布式实例（企业版）。
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
    * @param string $type 实例类型，取值为“Single”，“Ha”或“Replica”, \"Enterprise\"，分别对应于单机实例、主备实例、只读实例、分布式实例（企业版）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ha
    *  ha
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsHa
    */
    public function getHa()
    {
        return $this->container['ha'];
    }

    /**
    * Sets ha
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsHa $ha ha
    *
    * @return $this
    */
    public function setHa($ha)
    {
        $this->container['ha'] = $ha;
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
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsDatastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsDatastore $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
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
    * @param string $created 创建时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
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
    *  更新时间，格式与“created”字段对应格式完全相同。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间，格式与“created”字段对应格式完全相同。 说明：创建时返回值为空，数据库实例创建成功后该值不为空。
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
    * @return string|null
    */
    public function getDbUserName()
    {
        return $this->container['dbUserName'];
    }

    /**
    * Sets dbUserName
    *
    * @param string|null $dbUserName 默认用户名。
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
    *  子网的网络ID信息。
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
    * @param string $subnetId 子网的网络ID信息。
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
    * @return string
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string $cpu CPU大小。例如，1表示1U。
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
    * @return string
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string $mem 内存大小（单位：GB）。
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
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsVolume
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsVolume $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，没有标签默认为空数组。
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Tag[]|null $tags 标签列表，没有标签默认为空数组。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目标签ID。
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
    * @param string|null $enterpriseProjectId 企业项目标签ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    *  用户设置的实例只读状态。仅支持RDS for MySQL引擎。 true，表示该实例被设置为只读状态。 false，表示该实例未被设置为只读状态。
    *
    * @return bool
    */
    public function getReadOnlyByUser()
    {
        return $this->container['readOnlyByUser'];
    }

    /**
    * Sets readOnlyByUser
    *
    * @param bool $readOnlyByUser 用户设置的实例只读状态。仅支持RDS for MySQL引擎。 true，表示该实例被设置为只读状态。 false，表示该实例未被设置为只读状态。
    *
    * @return $this
    */
    public function setReadOnlyByUser($readOnlyByUser)
    {
        $this->container['readOnlyByUser'] = $readOnlyByUser;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsBackupStrategy
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsBackupStrategy $backupStrategy backupStrategy
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
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
    *  主备实例信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsNode[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsNode[] $nodes 主备实例信息
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
    *  所关联的数据库实例列表。
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsRelatedInstance[]
    */
    public function getRelatedInstance()
    {
        return $this->container['relatedInstance'];
    }

    /**
    * Sets relatedInstance
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcRdsRelatedInstance[] $relatedInstance 所关联的数据库实例列表。
    *
    * @return $this
    */
    public function setRelatedInstance($relatedInstance)
    {
        $this->container['relatedInstance'] = $relatedInstance;
        return $this;
    }

    /**
    * Gets diskEncryptionId
    *  磁盘加密密钥ID。
    *
    * @return string|null
    */
    public function getDiskEncryptionId()
    {
        return $this->container['diskEncryptionId'];
    }

    /**
    * Sets diskEncryptionId
    *
    * @param string|null $diskEncryptionId 磁盘加密密钥ID。
    *
    * @return $this
    */
    public function setDiskEncryptionId($diskEncryptionId)
    {
        $this->container['diskEncryptionId'] = $diskEncryptionId;
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
    * Gets backupUsedSpace
    *  备份空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
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
    * @param double|null $backupUsedSpace 备份空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
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
    *  磁盘空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    *
    * @return double
    */
    public function getStorageUsedSpace()
    {
        return $this->container['storageUsedSpace'];
    }

    /**
    * Sets storageUsedSpace
    *
    * @param double $storageUsedSpace 磁盘空间使用量，单位GB。 该字段仅用于查询指定RDS for SQL Server单个实例信息时返回。
    *
    * @return $this
    */
    public function setStorageUsedSpace($storageUsedSpace)
    {
        $this->container['storageUsedSpace'] = $storageUsedSpace;
        return $this;
    }

    /**
    * Gets associatedWithDdm
    *  是否已被DDM实例关联。
    *
    * @return bool
    */
    public function getAssociatedWithDdm()
    {
        return $this->container['associatedWithDdm'];
    }

    /**
    * Sets associatedWithDdm
    *
    * @param bool $associatedWithDdm 是否已被DDM实例关联。
    *
    * @return $this
    */
    public function setAssociatedWithDdm($associatedWithDdm)
    {
        $this->container['associatedWithDdm'] = $associatedWithDdm;
        return $this;
    }

    /**
    * Gets maxIops
    *  实例磁盘的最大IOPS值。 当前该字段仅对于SQL Server引擎实例返回。
    *
    * @return int
    */
    public function getMaxIops()
    {
        return $this->container['maxIops'];
    }

    /**
    * Sets maxIops
    *
    * @param int $maxIops 实例磁盘的最大IOPS值。 当前该字段仅对于SQL Server引擎实例返回。
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
    *  实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 仅包周期场景返回。
    *
    * @return string
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param string $expirationTime 实例的到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 仅包周期场景返回。
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
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

