<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  创建的实例名称。
    * status  实例状态。  取值：  值为“BUILD”，表示实例正在创建。  值为“ACTIVE”，表示实例正常。  值为“FAILED”，表示实例异常。  值为“FROZEN”，表示实例冻结。  值为“EXPANDING”，表示实例正在扩容CN或DN。  值为“REBOOTING”，表示实例正在重启。  值为“UPGRADING”，表示实例正在升级。  值为“RESTORING”，表示实例正在恢复。  值为“BACKING UP”，表示实例正在进行备份。  值为“REDUCING REPLICATION”，表示实例正在降副本。  值为“STORAGE FULL”，表示实例磁盘空间满。
    * privateIps  实例内网IP地址列表。分布式CN所在的弹性云服务器创建成功后该值存在，主备版DN所在的弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * publicIps  实例外网IP地址列表。绑定弹性公网IP后，该值不为空。
    * port  数据库端口号。GaussDB 数据库端口设置范围为1024~39998（其中2378,2379,2380,4999,5000,5999,6000,6001,8097,8098,20049,20050,21731,21732被系统占用不可设置）。  当不传该参数时，默认端口如下：8000。
    * type  实例类型，取值为 \"enterprise\"，对应于分布式实例（企业版）。取值为\"Ha\"，对应于主备版实例。
    * ha  ha
    * replicaNum  实例副本数。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。  说明：创建时该值为实例下发创建的时间，创建完成后，该值为创建完成时间。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB 的“规格编码”列内容获取。
    * flavorInfo  flavorInfo
    * volume  volume
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。 若创建时没有选择切换策略，则不予显示。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  实例节点信息。
    * enterpriseProjectId  企业项目标签ID。非企业项目账号的实例，企业项目默认0。
    * instanceMode  basic为基础版 ，enterprise为企业版。
    * diskEncryptionId  磁盘加密密钥ID。只有创建磁盘加密实例才会显示该参数。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  标签列表，没有标签不返回该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'privateIps' => 'string[]',
            'publicIps' => 'string[]',
            'port' => 'int',
            'type' => 'string',
            'ha' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListHa',
            'replicaNum' => 'int',
            'region' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListDatastore',
            'created' => 'string',
            'updated' => 'string',
            'dbUserName' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'flavorRef' => 'string',
            'flavorInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListFlavorInfo',
            'volume' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListVolume',
            'switchStrategy' => 'string',
            'backupStrategy' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussBackupStrategyForListResponse',
            'maintenanceWindow' => 'string',
            'nodes' => 'object[]',
            'enterpriseProjectId' => 'string',
            'instanceMode' => 'string',
            'diskEncryptionId' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussChargeInfoListResponse',
            'timeZone' => 'string',
            'tags' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  创建的实例名称。
    * status  实例状态。  取值：  值为“BUILD”，表示实例正在创建。  值为“ACTIVE”，表示实例正常。  值为“FAILED”，表示实例异常。  值为“FROZEN”，表示实例冻结。  值为“EXPANDING”，表示实例正在扩容CN或DN。  值为“REBOOTING”，表示实例正在重启。  值为“UPGRADING”，表示实例正在升级。  值为“RESTORING”，表示实例正在恢复。  值为“BACKING UP”，表示实例正在进行备份。  值为“REDUCING REPLICATION”，表示实例正在降副本。  值为“STORAGE FULL”，表示实例磁盘空间满。
    * privateIps  实例内网IP地址列表。分布式CN所在的弹性云服务器创建成功后该值存在，主备版DN所在的弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * publicIps  实例外网IP地址列表。绑定弹性公网IP后，该值不为空。
    * port  数据库端口号。GaussDB 数据库端口设置范围为1024~39998（其中2378,2379,2380,4999,5000,5999,6000,6001,8097,8098,20049,20050,21731,21732被系统占用不可设置）。  当不传该参数时，默认端口如下：8000。
    * type  实例类型，取值为 \"enterprise\"，对应于分布式实例（企业版）。取值为\"Ha\"，对应于主备版实例。
    * ha  ha
    * replicaNum  实例副本数。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。  说明：创建时该值为实例下发创建的时间，创建完成后，该值为创建完成时间。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB 的“规格编码”列内容获取。
    * flavorInfo  flavorInfo
    * volume  volume
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。 若创建时没有选择切换策略，则不予显示。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  实例节点信息。
    * enterpriseProjectId  企业项目标签ID。非企业项目账号的实例，企业项目默认0。
    * instanceMode  basic为基础版 ，enterprise为企业版。
    * diskEncryptionId  磁盘加密密钥ID。只有创建磁盘加密实例才会显示该参数。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  标签列表，没有标签不返回该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'privateIps' => null,
        'publicIps' => null,
        'port' => 'int32',
        'type' => null,
        'ha' => null,
        'replicaNum' => 'int32',
        'region' => null,
        'datastore' => null,
        'created' => null,
        'updated' => null,
        'dbUserName' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'flavorRef' => null,
        'flavorInfo' => null,
        'volume' => null,
        'switchStrategy' => null,
        'backupStrategy' => null,
        'maintenanceWindow' => null,
        'nodes' => null,
        'enterpriseProjectId' => null,
        'instanceMode' => null,
        'diskEncryptionId' => null,
        'chargeInfo' => null,
        'timeZone' => null,
        'tags' => null
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
    * status  实例状态。  取值：  值为“BUILD”，表示实例正在创建。  值为“ACTIVE”，表示实例正常。  值为“FAILED”，表示实例异常。  值为“FROZEN”，表示实例冻结。  值为“EXPANDING”，表示实例正在扩容CN或DN。  值为“REBOOTING”，表示实例正在重启。  值为“UPGRADING”，表示实例正在升级。  值为“RESTORING”，表示实例正在恢复。  值为“BACKING UP”，表示实例正在进行备份。  值为“REDUCING REPLICATION”，表示实例正在降副本。  值为“STORAGE FULL”，表示实例磁盘空间满。
    * privateIps  实例内网IP地址列表。分布式CN所在的弹性云服务器创建成功后该值存在，主备版DN所在的弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * publicIps  实例外网IP地址列表。绑定弹性公网IP后，该值不为空。
    * port  数据库端口号。GaussDB 数据库端口设置范围为1024~39998（其中2378,2379,2380,4999,5000,5999,6000,6001,8097,8098,20049,20050,21731,21732被系统占用不可设置）。  当不传该参数时，默认端口如下：8000。
    * type  实例类型，取值为 \"enterprise\"，对应于分布式实例（企业版）。取值为\"Ha\"，对应于主备版实例。
    * ha  ha
    * replicaNum  实例副本数。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。  说明：创建时该值为实例下发创建的时间，创建完成后，该值为创建完成时间。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB 的“规格编码”列内容获取。
    * flavorInfo  flavorInfo
    * volume  volume
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。 若创建时没有选择切换策略，则不予显示。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  实例节点信息。
    * enterpriseProjectId  企业项目标签ID。非企业项目账号的实例，企业项目默认0。
    * instanceMode  basic为基础版 ，enterprise为企业版。
    * diskEncryptionId  磁盘加密密钥ID。只有创建磁盘加密实例才会显示该参数。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  标签列表，没有标签不返回该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'privateIps' => 'private_ips',
            'publicIps' => 'public_ips',
            'port' => 'port',
            'type' => 'type',
            'ha' => 'ha',
            'replicaNum' => 'replica_num',
            'region' => 'region',
            'datastore' => 'datastore',
            'created' => 'created',
            'updated' => 'updated',
            'dbUserName' => 'db_user_name',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'flavorRef' => 'flavor_ref',
            'flavorInfo' => 'flavor_info',
            'volume' => 'volume',
            'switchStrategy' => 'switch_strategy',
            'backupStrategy' => 'backup_strategy',
            'maintenanceWindow' => 'maintenance_window',
            'nodes' => 'nodes',
            'enterpriseProjectId' => 'enterprise_project_id',
            'instanceMode' => 'instance_mode',
            'diskEncryptionId' => 'disk_encryption_id',
            'chargeInfo' => 'charge_info',
            'timeZone' => 'time_zone',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  创建的实例名称。
    * status  实例状态。  取值：  值为“BUILD”，表示实例正在创建。  值为“ACTIVE”，表示实例正常。  值为“FAILED”，表示实例异常。  值为“FROZEN”，表示实例冻结。  值为“EXPANDING”，表示实例正在扩容CN或DN。  值为“REBOOTING”，表示实例正在重启。  值为“UPGRADING”，表示实例正在升级。  值为“RESTORING”，表示实例正在恢复。  值为“BACKING UP”，表示实例正在进行备份。  值为“REDUCING REPLICATION”，表示实例正在降副本。  值为“STORAGE FULL”，表示实例磁盘空间满。
    * privateIps  实例内网IP地址列表。分布式CN所在的弹性云服务器创建成功后该值存在，主备版DN所在的弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * publicIps  实例外网IP地址列表。绑定弹性公网IP后，该值不为空。
    * port  数据库端口号。GaussDB 数据库端口设置范围为1024~39998（其中2378,2379,2380,4999,5000,5999,6000,6001,8097,8098,20049,20050,21731,21732被系统占用不可设置）。  当不传该参数时，默认端口如下：8000。
    * type  实例类型，取值为 \"enterprise\"，对应于分布式实例（企业版）。取值为\"Ha\"，对应于主备版实例。
    * ha  ha
    * replicaNum  实例副本数。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。  说明：创建时该值为实例下发创建的时间，创建完成后，该值为创建完成时间。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB 的“规格编码”列内容获取。
    * flavorInfo  flavorInfo
    * volume  volume
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。 若创建时没有选择切换策略，则不予显示。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  实例节点信息。
    * enterpriseProjectId  企业项目标签ID。非企业项目账号的实例，企业项目默认0。
    * instanceMode  basic为基础版 ，enterprise为企业版。
    * diskEncryptionId  磁盘加密密钥ID。只有创建磁盘加密实例才会显示该参数。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  标签列表，没有标签不返回该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'privateIps' => 'setPrivateIps',
            'publicIps' => 'setPublicIps',
            'port' => 'setPort',
            'type' => 'setType',
            'ha' => 'setHa',
            'replicaNum' => 'setReplicaNum',
            'region' => 'setRegion',
            'datastore' => 'setDatastore',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'dbUserName' => 'setDbUserName',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'flavorRef' => 'setFlavorRef',
            'flavorInfo' => 'setFlavorInfo',
            'volume' => 'setVolume',
            'switchStrategy' => 'setSwitchStrategy',
            'backupStrategy' => 'setBackupStrategy',
            'maintenanceWindow' => 'setMaintenanceWindow',
            'nodes' => 'setNodes',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'instanceMode' => 'setInstanceMode',
            'diskEncryptionId' => 'setDiskEncryptionId',
            'chargeInfo' => 'setChargeInfo',
            'timeZone' => 'setTimeZone',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  创建的实例名称。
    * status  实例状态。  取值：  值为“BUILD”，表示实例正在创建。  值为“ACTIVE”，表示实例正常。  值为“FAILED”，表示实例异常。  值为“FROZEN”，表示实例冻结。  值为“EXPANDING”，表示实例正在扩容CN或DN。  值为“REBOOTING”，表示实例正在重启。  值为“UPGRADING”，表示实例正在升级。  值为“RESTORING”，表示实例正在恢复。  值为“BACKING UP”，表示实例正在进行备份。  值为“REDUCING REPLICATION”，表示实例正在降副本。  值为“STORAGE FULL”，表示实例磁盘空间满。
    * privateIps  实例内网IP地址列表。分布式CN所在的弹性云服务器创建成功后该值存在，主备版DN所在的弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    * publicIps  实例外网IP地址列表。绑定弹性公网IP后，该值不为空。
    * port  数据库端口号。GaussDB 数据库端口设置范围为1024~39998（其中2378,2379,2380,4999,5000,5999,6000,6001,8097,8098,20049,20050,21731,21732被系统占用不可设置）。  当不传该参数时，默认端口如下：8000。
    * type  实例类型，取值为 \"enterprise\"，对应于分布式实例（企业版）。取值为\"Ha\"，对应于主备版实例。
    * ha  ha
    * replicaNum  实例副本数。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。  说明：创建时该值为实例下发创建的时间，创建完成后，该值为创建完成时间。
    * updated  更新时间，格式与“created”字段对应格式完全相同。  说明：创建时返回值为空，数据库实例创建成功后该值不为空。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB 的“规格编码”列内容获取。
    * flavorInfo  flavorInfo
    * volume  volume
    * switchStrategy  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。 若创建时没有选择切换策略，则不予显示。
    * backupStrategy  backupStrategy
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * nodes  实例节点信息。
    * enterpriseProjectId  企业项目标签ID。非企业项目账号的实例，企业项目默认0。
    * instanceMode  basic为基础版 ，enterprise为企业版。
    * diskEncryptionId  磁盘加密密钥ID。只有创建磁盘加密实例才会显示该参数。
    * chargeInfo  chargeInfo
    * timeZone  时区。
    * tags  标签列表，没有标签不返回该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'privateIps' => 'getPrivateIps',
            'publicIps' => 'getPublicIps',
            'port' => 'getPort',
            'type' => 'getType',
            'ha' => 'getHa',
            'replicaNum' => 'getReplicaNum',
            'region' => 'getRegion',
            'datastore' => 'getDatastore',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'dbUserName' => 'getDbUserName',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'flavorRef' => 'getFlavorRef',
            'flavorInfo' => 'getFlavorInfo',
            'volume' => 'getVolume',
            'switchStrategy' => 'getSwitchStrategy',
            'backupStrategy' => 'getBackupStrategy',
            'maintenanceWindow' => 'getMaintenanceWindow',
            'nodes' => 'getNodes',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'instanceMode' => 'getInstanceMode',
            'diskEncryptionId' => 'getDiskEncryptionId',
            'chargeInfo' => 'getChargeInfo',
            'timeZone' => 'getTimeZone',
            'tags' => 'getTags'
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
        $this->container['privateIps'] = isset($data['privateIps']) ? $data['privateIps'] : null;
        $this->container['publicIps'] = isset($data['publicIps']) ? $data['publicIps'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ha'] = isset($data['ha']) ? $data['ha'] : null;
        $this->container['replicaNum'] = isset($data['replicaNum']) ? $data['replicaNum'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['dbUserName'] = isset($data['dbUserName']) ? $data['dbUserName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['flavorInfo'] = isset($data['flavorInfo']) ? $data['flavorInfo'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['switchStrategy'] = isset($data['switchStrategy']) ? $data['switchStrategy'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['maintenanceWindow'] = isset($data['maintenanceWindow']) ? $data['maintenanceWindow'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
        $this->container['diskEncryptionId'] = isset($data['diskEncryptionId']) ? $data['diskEncryptionId'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
        if ($this->container['privateIps'] === null) {
            $invalidProperties[] = "'privateIps' can't be null";
        }
        if ($this->container['publicIps'] === null) {
            $invalidProperties[] = "'publicIps' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['ha'] === null) {
            $invalidProperties[] = "'ha' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
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
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['flavorInfo'] === null) {
            $invalidProperties[] = "'flavorInfo' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['switchStrategy'] === null) {
            $invalidProperties[] = "'switchStrategy' can't be null";
        }
        if ($this->container['backupStrategy'] === null) {
            $invalidProperties[] = "'backupStrategy' can't be null";
        }
        if ($this->container['maintenanceWindow'] === null) {
            $invalidProperties[] = "'maintenanceWindow' can't be null";
        }
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['instanceMode'] === null) {
            $invalidProperties[] = "'instanceMode' can't be null";
        }
        if ($this->container['diskEncryptionId'] === null) {
            $invalidProperties[] = "'diskEncryptionId' can't be null";
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
    * Gets status
    *  实例状态。  取值：  值为“BUILD”，表示实例正在创建。  值为“ACTIVE”，表示实例正常。  值为“FAILED”，表示实例异常。  值为“FROZEN”，表示实例冻结。  值为“EXPANDING”，表示实例正在扩容CN或DN。  值为“REBOOTING”，表示实例正在重启。  值为“UPGRADING”，表示实例正在升级。  值为“RESTORING”，表示实例正在恢复。  值为“BACKING UP”，表示实例正在进行备份。  值为“REDUCING REPLICATION”，表示实例正在降副本。  值为“STORAGE FULL”，表示实例磁盘空间满。
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
    * @param string $status 实例状态。  取值：  值为“BUILD”，表示实例正在创建。  值为“ACTIVE”，表示实例正常。  值为“FAILED”，表示实例异常。  值为“FROZEN”，表示实例冻结。  值为“EXPANDING”，表示实例正在扩容CN或DN。  值为“REBOOTING”，表示实例正在重启。  值为“UPGRADING”，表示实例正在升级。  值为“RESTORING”，表示实例正在恢复。  值为“BACKING UP”，表示实例正在进行备份。  值为“REDUCING REPLICATION”，表示实例正在降副本。  值为“STORAGE FULL”，表示实例磁盘空间满。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets privateIps
    *  实例内网IP地址列表。分布式CN所在的弹性云服务器创建成功后该值存在，主备版DN所在的弹性云服务器创建成功后该值存在，其他情况下为空字符串。
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
    * @param string[] $privateIps 实例内网IP地址列表。分布式CN所在的弹性云服务器创建成功后该值存在，主备版DN所在的弹性云服务器创建成功后该值存在，其他情况下为空字符串。
    *
    * @return $this
    */
    public function setPrivateIps($privateIps)
    {
        $this->container['privateIps'] = $privateIps;
        return $this;
    }

    /**
    * Gets publicIps
    *  实例外网IP地址列表。绑定弹性公网IP后，该值不为空。
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
    * @param string[] $publicIps 实例外网IP地址列表。绑定弹性公网IP后，该值不为空。
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
    *  数据库端口号。GaussDB 数据库端口设置范围为1024~39998（其中2378,2379,2380,4999,5000,5999,6000,6001,8097,8098,20049,20050,21731,21732被系统占用不可设置）。  当不传该参数时，默认端口如下：8000。
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
    * @param int $port 数据库端口号。GaussDB 数据库端口设置范围为1024~39998（其中2378,2379,2380,4999,5000,5999,6000,6001,8097,8098,20049,20050,21731,21732被系统占用不可设置）。  当不传该参数时，默认端口如下：8000。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets type
    *  实例类型，取值为 \"enterprise\"，对应于分布式实例（企业版）。取值为\"Ha\"，对应于主备版实例。
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
    * @param string $type 实例类型，取值为 \"enterprise\"，对应于分布式实例（企业版）。取值为\"Ha\"，对应于主备版实例。
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
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListHa
    */
    public function getHa()
    {
        return $this->container['ha'];
    }

    /**
    * Sets ha
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListHa $ha ha
    *
    * @return $this
    */
    public function setHa($ha)
    {
        $this->container['ha'] = $ha;
        return $this;
    }

    /**
    * Gets replicaNum
    *  实例副本数。
    *
    * @return int|null
    */
    public function getReplicaNum()
    {
        return $this->container['replicaNum'];
    }

    /**
    * Sets replicaNum
    *
    * @param int|null $replicaNum 实例副本数。
    *
    * @return $this
    */
    public function setReplicaNum($replicaNum)
    {
        $this->container['replicaNum'] = $replicaNum;
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
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListDatastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListDatastore $datastore datastore
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
    *  创建时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。  说明：创建时该值为实例下发创建的时间，创建完成后，该值为创建完成时间。
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
    * @param string $created 创建时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。  说明：创建时该值为实例下发创建的时间，创建完成后，该值为创建完成时间。
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
    *  规格码。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB 的“规格编码”列内容获取。
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
    * @param string $flavorRef 规格码。参考[表1](https://support.huaweicloud.com/api-opengauss/opengauss_api_0037.html#opengauss_api_0037__ted9b9d433c8a4c52884e199e17f94479)中GaussDB 的“规格编码”列内容获取。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets flavorInfo
    *  flavorInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListFlavorInfo
    */
    public function getFlavorInfo()
    {
        return $this->container['flavorInfo'];
    }

    /**
    * Sets flavorInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListFlavorInfo $flavorInfo flavorInfo
    *
    * @return $this
    */
    public function setFlavorInfo($flavorInfo)
    {
        $this->container['flavorInfo'] = $flavorInfo;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListVolume
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ListVolume $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets switchStrategy
    *  数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。 若创建时没有选择切换策略，则不予显示。
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
    * @param string $switchStrategy 数据库切换策略。取值为“reliability”或“availability”，分别对应于可靠性优先和可用性优先。 若创建时没有选择切换策略，则不予显示。
    *
    * @return $this
    */
    public function setSwitchStrategy($switchStrategy)
    {
        $this->container['switchStrategy'] = $switchStrategy;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussBackupStrategyForListResponse
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussBackupStrategyForListResponse $backupStrategy backupStrategy
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
    *  实例节点信息。
    *
    * @return object[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param object[] $nodes 实例节点信息。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目标签ID。非企业项目账号的实例，企业项目默认0。
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
    * @param string $enterpriseProjectId 企业项目标签ID。非企业项目账号的实例，企业项目默认0。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets instanceMode
    *  basic为基础版 ，enterprise为企业版。
    *
    * @return string
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string $instanceMode basic为基础版 ，enterprise为企业版。
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
        return $this;
    }

    /**
    * Gets diskEncryptionId
    *  磁盘加密密钥ID。只有创建磁盘加密实例才会显示该参数。
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
    * @param string $diskEncryptionId 磁盘加密密钥ID。只有创建磁盘加密实例才会显示该参数。
    *
    * @return $this
    */
    public function setDiskEncryptionId($diskEncryptionId)
    {
        $this->container['diskEncryptionId'] = $diskEncryptionId;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussChargeInfoListResponse
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\OpenGaussChargeInfoListResponse $chargeInfo chargeInfo
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
    *  标签列表，没有标签不返回该参数。
    *
    * @return object[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param object[] $tags 标签列表，没有标签不返回该参数。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

