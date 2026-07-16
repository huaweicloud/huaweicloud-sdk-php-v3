<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 实例名称，允许和已有名称重复。 **约束限制：** 区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 长度为4~64位，必须以字母开头（A~Z或a~z）。 **默认取值：** 不涉及。
    * datastore  datastore
    * region  **参数解释：** 区域ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 非空。
    * availabilityZone  **参数解释：** 可用区ID。 **约束限制：** 不涉及。 **取值范围：** 取值：请参见查询所有实例规格信息中返回的“az_status” ，支持创建3可用区实例，中间以逗号隔开。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 虚拟私有云ID。 **约束限制：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网的网络ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。 **默认取值：** 不涉及。
    * securityGroupId  **参数解释：** 安全组ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询安全组列表。 **默认取值：** 不涉及。
    * password  **参数解释：** 数据库密码。 **约束限制：** 不涉及。 **取值范围：** 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。 **默认取值：** 不涉及。
    * mode  **参数解释：** 实例类型。 **约束限制：** 不涉及。 **取值范围：**   -  GeminiDB Cassandra支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Cassandra支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB Mongo4.0版本支持副本集类型，取值为“ReplicaSet”。   -  GeminiDB Influx支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Influx支持云原生部署模式集群增强类型，取值为“CloudNativeCluster”。   -  GeminiDB Influx支持经典部署模式单节点类型，取值为“InfluxdbSingle”。   -  GeminiDB Influx支持经典部署模式集群增强类型，取值为“EnhancedCluster”。   -  GeminiDB Redis支持经典部署模式Proxy集群类型，取值为“Cluster”。   -  GeminiDB redis支持云原生部署模式集群类型，取值为“CloudNativeCluster”。   -  GeminiDB Redis支持经典部署模式Cluster集群类型，取值为“RedisCluster”   -  GeminiDB Redis支持经典部署模式主备类型，取值为“Replication”。   -  GeminiDB兼容DynamoDB支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB兼容DynamoDB支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB HBase支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB HBase支持云原生部署模式集群类型，取值“CloudNativeCluster”。 **默认取值：** 不涉及。
    * productType  **参数解释：** 产品类型。 **约束限制：** 当创建GeminiDB Redis云原生部署模式集群类型必传此参数。 **取值范围：** - Capacity 容量型 **默认取值：** 不涉及。
    * flavor  **参数解释：** 实例规格详情。 **约束限制：** 获取方法请参见查询所有实例规格信息中响应“flavors”字段下参数的值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID，创建实例时不传该参数，表示不进行磁盘加密。 **约束限制：** 备份恢复新实例时不支持指定该参数，如果原实例使用了磁盘加密，新实例复用原实例加密的密钥ID。 该参数仅GeminiDB influx 云原生部署模式集群增强版实例类型、GeminiDB Cassandra经典部署模式实例类型、GeminiDB兼容DynamoDB实例类型支持。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * configurationId  **参数解释：** '参数模板ID。' **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  **参数解释：** '企业项目ID。' **约束限制：**   -对于未开通企业多项目服务的用户，不传该参数。   -对于已开通企业多项目服务的用户，不传该参数时，表示为default企业项目。获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dedicatedResourceId  **参数解释：** '专属资源ID。' **约束限制：** 只有开通专属资源池后才可以下发此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sslOption  **参数解释：** SSL开关选项。 **约束限制：** 不涉及。 **取值范围：** - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认不启用SSL连接。 **默认取值：** 不涉及。
    * chargeInfo  chargeInfo
    * restoreInfo  restoreInfo
    * port  **参数解释：** 数据库访问端口号。 **约束限制：** 目前仅支持GeminiDB Redis实例支持自定义端口，取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。  不指定端口时，创建GeminiDB Redis实例的访问端口默认为6379。  如果该实例计划用于搭建双活容灾场景，请配置为8635端口。 **取值范围：** 取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。 **默认取值：** 6379。
    * availabilityZoneDetail  availabilityZoneDetail
    * lbAccessControlSettings  lbAccessControlSettings
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DatastoreOption',
            'region' => 'string',
            'availabilityZone' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'password' => 'string',
            'mode' => 'string',
            'productType' => 'string',
            'flavor' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\CreateInstanceFlavorOption[]',
            'diskEncryptionId' => 'string',
            'configurationId' => 'string',
            'backupStrategy' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\BackupStrategyOption',
            'enterpriseProjectId' => 'string',
            'dedicatedResourceId' => 'string',
            'sslOption' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ChargeInfoOption',
            'restoreInfo' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RestoreInfo',
            'port' => 'string',
            'availabilityZoneDetail' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\AvailabilityZoneDetail',
            'lbAccessControlSettings' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\LbAccessControlSettings'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 实例名称，允许和已有名称重复。 **约束限制：** 区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 长度为4~64位，必须以字母开头（A~Z或a~z）。 **默认取值：** 不涉及。
    * datastore  datastore
    * region  **参数解释：** 区域ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 非空。
    * availabilityZone  **参数解释：** 可用区ID。 **约束限制：** 不涉及。 **取值范围：** 取值：请参见查询所有实例规格信息中返回的“az_status” ，支持创建3可用区实例，中间以逗号隔开。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 虚拟私有云ID。 **约束限制：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网的网络ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。 **默认取值：** 不涉及。
    * securityGroupId  **参数解释：** 安全组ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询安全组列表。 **默认取值：** 不涉及。
    * password  **参数解释：** 数据库密码。 **约束限制：** 不涉及。 **取值范围：** 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。 **默认取值：** 不涉及。
    * mode  **参数解释：** 实例类型。 **约束限制：** 不涉及。 **取值范围：**   -  GeminiDB Cassandra支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Cassandra支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB Mongo4.0版本支持副本集类型，取值为“ReplicaSet”。   -  GeminiDB Influx支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Influx支持云原生部署模式集群增强类型，取值为“CloudNativeCluster”。   -  GeminiDB Influx支持经典部署模式单节点类型，取值为“InfluxdbSingle”。   -  GeminiDB Influx支持经典部署模式集群增强类型，取值为“EnhancedCluster”。   -  GeminiDB Redis支持经典部署模式Proxy集群类型，取值为“Cluster”。   -  GeminiDB redis支持云原生部署模式集群类型，取值为“CloudNativeCluster”。   -  GeminiDB Redis支持经典部署模式Cluster集群类型，取值为“RedisCluster”   -  GeminiDB Redis支持经典部署模式主备类型，取值为“Replication”。   -  GeminiDB兼容DynamoDB支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB兼容DynamoDB支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB HBase支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB HBase支持云原生部署模式集群类型，取值“CloudNativeCluster”。 **默认取值：** 不涉及。
    * productType  **参数解释：** 产品类型。 **约束限制：** 当创建GeminiDB Redis云原生部署模式集群类型必传此参数。 **取值范围：** - Capacity 容量型 **默认取值：** 不涉及。
    * flavor  **参数解释：** 实例规格详情。 **约束限制：** 获取方法请参见查询所有实例规格信息中响应“flavors”字段下参数的值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID，创建实例时不传该参数，表示不进行磁盘加密。 **约束限制：** 备份恢复新实例时不支持指定该参数，如果原实例使用了磁盘加密，新实例复用原实例加密的密钥ID。 该参数仅GeminiDB influx 云原生部署模式集群增强版实例类型、GeminiDB Cassandra经典部署模式实例类型、GeminiDB兼容DynamoDB实例类型支持。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * configurationId  **参数解释：** '参数模板ID。' **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  **参数解释：** '企业项目ID。' **约束限制：**   -对于未开通企业多项目服务的用户，不传该参数。   -对于已开通企业多项目服务的用户，不传该参数时，表示为default企业项目。获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dedicatedResourceId  **参数解释：** '专属资源ID。' **约束限制：** 只有开通专属资源池后才可以下发此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sslOption  **参数解释：** SSL开关选项。 **约束限制：** 不涉及。 **取值范围：** - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认不启用SSL连接。 **默认取值：** 不涉及。
    * chargeInfo  chargeInfo
    * restoreInfo  restoreInfo
    * port  **参数解释：** 数据库访问端口号。 **约束限制：** 目前仅支持GeminiDB Redis实例支持自定义端口，取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。  不指定端口时，创建GeminiDB Redis实例的访问端口默认为6379。  如果该实例计划用于搭建双活容灾场景，请配置为8635端口。 **取值范围：** 取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。 **默认取值：** 6379。
    * availabilityZoneDetail  availabilityZoneDetail
    * lbAccessControlSettings  lbAccessControlSettings
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'datastore' => null,
        'region' => null,
        'availabilityZone' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'password' => null,
        'mode' => null,
        'productType' => null,
        'flavor' => null,
        'diskEncryptionId' => null,
        'configurationId' => null,
        'backupStrategy' => null,
        'enterpriseProjectId' => null,
        'dedicatedResourceId' => null,
        'sslOption' => null,
        'chargeInfo' => null,
        'restoreInfo' => null,
        'port' => null,
        'availabilityZoneDetail' => null,
        'lbAccessControlSettings' => null
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
    * name  **参数解释：** 实例名称，允许和已有名称重复。 **约束限制：** 区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 长度为4~64位，必须以字母开头（A~Z或a~z）。 **默认取值：** 不涉及。
    * datastore  datastore
    * region  **参数解释：** 区域ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 非空。
    * availabilityZone  **参数解释：** 可用区ID。 **约束限制：** 不涉及。 **取值范围：** 取值：请参见查询所有实例规格信息中返回的“az_status” ，支持创建3可用区实例，中间以逗号隔开。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 虚拟私有云ID。 **约束限制：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网的网络ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。 **默认取值：** 不涉及。
    * securityGroupId  **参数解释：** 安全组ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询安全组列表。 **默认取值：** 不涉及。
    * password  **参数解释：** 数据库密码。 **约束限制：** 不涉及。 **取值范围：** 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。 **默认取值：** 不涉及。
    * mode  **参数解释：** 实例类型。 **约束限制：** 不涉及。 **取值范围：**   -  GeminiDB Cassandra支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Cassandra支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB Mongo4.0版本支持副本集类型，取值为“ReplicaSet”。   -  GeminiDB Influx支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Influx支持云原生部署模式集群增强类型，取值为“CloudNativeCluster”。   -  GeminiDB Influx支持经典部署模式单节点类型，取值为“InfluxdbSingle”。   -  GeminiDB Influx支持经典部署模式集群增强类型，取值为“EnhancedCluster”。   -  GeminiDB Redis支持经典部署模式Proxy集群类型，取值为“Cluster”。   -  GeminiDB redis支持云原生部署模式集群类型，取值为“CloudNativeCluster”。   -  GeminiDB Redis支持经典部署模式Cluster集群类型，取值为“RedisCluster”   -  GeminiDB Redis支持经典部署模式主备类型，取值为“Replication”。   -  GeminiDB兼容DynamoDB支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB兼容DynamoDB支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB HBase支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB HBase支持云原生部署模式集群类型，取值“CloudNativeCluster”。 **默认取值：** 不涉及。
    * productType  **参数解释：** 产品类型。 **约束限制：** 当创建GeminiDB Redis云原生部署模式集群类型必传此参数。 **取值范围：** - Capacity 容量型 **默认取值：** 不涉及。
    * flavor  **参数解释：** 实例规格详情。 **约束限制：** 获取方法请参见查询所有实例规格信息中响应“flavors”字段下参数的值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID，创建实例时不传该参数，表示不进行磁盘加密。 **约束限制：** 备份恢复新实例时不支持指定该参数，如果原实例使用了磁盘加密，新实例复用原实例加密的密钥ID。 该参数仅GeminiDB influx 云原生部署模式集群增强版实例类型、GeminiDB Cassandra经典部署模式实例类型、GeminiDB兼容DynamoDB实例类型支持。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * configurationId  **参数解释：** '参数模板ID。' **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  **参数解释：** '企业项目ID。' **约束限制：**   -对于未开通企业多项目服务的用户，不传该参数。   -对于已开通企业多项目服务的用户，不传该参数时，表示为default企业项目。获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dedicatedResourceId  **参数解释：** '专属资源ID。' **约束限制：** 只有开通专属资源池后才可以下发此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sslOption  **参数解释：** SSL开关选项。 **约束限制：** 不涉及。 **取值范围：** - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认不启用SSL连接。 **默认取值：** 不涉及。
    * chargeInfo  chargeInfo
    * restoreInfo  restoreInfo
    * port  **参数解释：** 数据库访问端口号。 **约束限制：** 目前仅支持GeminiDB Redis实例支持自定义端口，取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。  不指定端口时，创建GeminiDB Redis实例的访问端口默认为6379。  如果该实例计划用于搭建双活容灾场景，请配置为8635端口。 **取值范围：** 取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。 **默认取值：** 6379。
    * availabilityZoneDetail  availabilityZoneDetail
    * lbAccessControlSettings  lbAccessControlSettings
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'datastore' => 'datastore',
            'region' => 'region',
            'availabilityZone' => 'availability_zone',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'password' => 'password',
            'mode' => 'mode',
            'productType' => 'product_type',
            'flavor' => 'flavor',
            'diskEncryptionId' => 'disk_encryption_id',
            'configurationId' => 'configuration_id',
            'backupStrategy' => 'backup_strategy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'dedicatedResourceId' => 'dedicated_resource_id',
            'sslOption' => 'ssl_option',
            'chargeInfo' => 'charge_info',
            'restoreInfo' => 'restore_info',
            'port' => 'port',
            'availabilityZoneDetail' => 'availability_zone_detail',
            'lbAccessControlSettings' => 'lb_access_control_settings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 实例名称，允许和已有名称重复。 **约束限制：** 区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 长度为4~64位，必须以字母开头（A~Z或a~z）。 **默认取值：** 不涉及。
    * datastore  datastore
    * region  **参数解释：** 区域ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 非空。
    * availabilityZone  **参数解释：** 可用区ID。 **约束限制：** 不涉及。 **取值范围：** 取值：请参见查询所有实例规格信息中返回的“az_status” ，支持创建3可用区实例，中间以逗号隔开。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 虚拟私有云ID。 **约束限制：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网的网络ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。 **默认取值：** 不涉及。
    * securityGroupId  **参数解释：** 安全组ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询安全组列表。 **默认取值：** 不涉及。
    * password  **参数解释：** 数据库密码。 **约束限制：** 不涉及。 **取值范围：** 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。 **默认取值：** 不涉及。
    * mode  **参数解释：** 实例类型。 **约束限制：** 不涉及。 **取值范围：**   -  GeminiDB Cassandra支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Cassandra支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB Mongo4.0版本支持副本集类型，取值为“ReplicaSet”。   -  GeminiDB Influx支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Influx支持云原生部署模式集群增强类型，取值为“CloudNativeCluster”。   -  GeminiDB Influx支持经典部署模式单节点类型，取值为“InfluxdbSingle”。   -  GeminiDB Influx支持经典部署模式集群增强类型，取值为“EnhancedCluster”。   -  GeminiDB Redis支持经典部署模式Proxy集群类型，取值为“Cluster”。   -  GeminiDB redis支持云原生部署模式集群类型，取值为“CloudNativeCluster”。   -  GeminiDB Redis支持经典部署模式Cluster集群类型，取值为“RedisCluster”   -  GeminiDB Redis支持经典部署模式主备类型，取值为“Replication”。   -  GeminiDB兼容DynamoDB支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB兼容DynamoDB支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB HBase支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB HBase支持云原生部署模式集群类型，取值“CloudNativeCluster”。 **默认取值：** 不涉及。
    * productType  **参数解释：** 产品类型。 **约束限制：** 当创建GeminiDB Redis云原生部署模式集群类型必传此参数。 **取值范围：** - Capacity 容量型 **默认取值：** 不涉及。
    * flavor  **参数解释：** 实例规格详情。 **约束限制：** 获取方法请参见查询所有实例规格信息中响应“flavors”字段下参数的值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID，创建实例时不传该参数，表示不进行磁盘加密。 **约束限制：** 备份恢复新实例时不支持指定该参数，如果原实例使用了磁盘加密，新实例复用原实例加密的密钥ID。 该参数仅GeminiDB influx 云原生部署模式集群增强版实例类型、GeminiDB Cassandra经典部署模式实例类型、GeminiDB兼容DynamoDB实例类型支持。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * configurationId  **参数解释：** '参数模板ID。' **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  **参数解释：** '企业项目ID。' **约束限制：**   -对于未开通企业多项目服务的用户，不传该参数。   -对于已开通企业多项目服务的用户，不传该参数时，表示为default企业项目。获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dedicatedResourceId  **参数解释：** '专属资源ID。' **约束限制：** 只有开通专属资源池后才可以下发此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sslOption  **参数解释：** SSL开关选项。 **约束限制：** 不涉及。 **取值范围：** - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认不启用SSL连接。 **默认取值：** 不涉及。
    * chargeInfo  chargeInfo
    * restoreInfo  restoreInfo
    * port  **参数解释：** 数据库访问端口号。 **约束限制：** 目前仅支持GeminiDB Redis实例支持自定义端口，取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。  不指定端口时，创建GeminiDB Redis实例的访问端口默认为6379。  如果该实例计划用于搭建双活容灾场景，请配置为8635端口。 **取值范围：** 取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。 **默认取值：** 6379。
    * availabilityZoneDetail  availabilityZoneDetail
    * lbAccessControlSettings  lbAccessControlSettings
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'datastore' => 'setDatastore',
            'region' => 'setRegion',
            'availabilityZone' => 'setAvailabilityZone',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'password' => 'setPassword',
            'mode' => 'setMode',
            'productType' => 'setProductType',
            'flavor' => 'setFlavor',
            'diskEncryptionId' => 'setDiskEncryptionId',
            'configurationId' => 'setConfigurationId',
            'backupStrategy' => 'setBackupStrategy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'dedicatedResourceId' => 'setDedicatedResourceId',
            'sslOption' => 'setSslOption',
            'chargeInfo' => 'setChargeInfo',
            'restoreInfo' => 'setRestoreInfo',
            'port' => 'setPort',
            'availabilityZoneDetail' => 'setAvailabilityZoneDetail',
            'lbAccessControlSettings' => 'setLbAccessControlSettings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 实例名称，允许和已有名称重复。 **约束限制：** 区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 长度为4~64位，必须以字母开头（A~Z或a~z）。 **默认取值：** 不涉及。
    * datastore  datastore
    * region  **参数解释：** 区域ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 非空。
    * availabilityZone  **参数解释：** 可用区ID。 **约束限制：** 不涉及。 **取值范围：** 取值：请参见查询所有实例规格信息中返回的“az_status” ，支持创建3可用区实例，中间以逗号隔开。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 虚拟私有云ID。 **约束限制：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网的网络ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。 **默认取值：** 不涉及。
    * securityGroupId  **参数解释：** 安全组ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询安全组列表。 **默认取值：** 不涉及。
    * password  **参数解释：** 数据库密码。 **约束限制：** 不涉及。 **取值范围：** 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。 **默认取值：** 不涉及。
    * mode  **参数解释：** 实例类型。 **约束限制：** 不涉及。 **取值范围：**   -  GeminiDB Cassandra支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Cassandra支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB Mongo4.0版本支持副本集类型，取值为“ReplicaSet”。   -  GeminiDB Influx支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Influx支持云原生部署模式集群增强类型，取值为“CloudNativeCluster”。   -  GeminiDB Influx支持经典部署模式单节点类型，取值为“InfluxdbSingle”。   -  GeminiDB Influx支持经典部署模式集群增强类型，取值为“EnhancedCluster”。   -  GeminiDB Redis支持经典部署模式Proxy集群类型，取值为“Cluster”。   -  GeminiDB redis支持云原生部署模式集群类型，取值为“CloudNativeCluster”。   -  GeminiDB Redis支持经典部署模式Cluster集群类型，取值为“RedisCluster”   -  GeminiDB Redis支持经典部署模式主备类型，取值为“Replication”。   -  GeminiDB兼容DynamoDB支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB兼容DynamoDB支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB HBase支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB HBase支持云原生部署模式集群类型，取值“CloudNativeCluster”。 **默认取值：** 不涉及。
    * productType  **参数解释：** 产品类型。 **约束限制：** 当创建GeminiDB Redis云原生部署模式集群类型必传此参数。 **取值范围：** - Capacity 容量型 **默认取值：** 不涉及。
    * flavor  **参数解释：** 实例规格详情。 **约束限制：** 获取方法请参见查询所有实例规格信息中响应“flavors”字段下参数的值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * diskEncryptionId  **参数解释：** 磁盘加密时的密钥ID，创建实例时不传该参数，表示不进行磁盘加密。 **约束限制：** 备份恢复新实例时不支持指定该参数，如果原实例使用了磁盘加密，新实例复用原实例加密的密钥ID。 该参数仅GeminiDB influx 云原生部署模式集群增强版实例类型、GeminiDB Cassandra经典部署模式实例类型、GeminiDB兼容DynamoDB实例类型支持。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * configurationId  **参数解释：** '参数模板ID。' **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  **参数解释：** '企业项目ID。' **约束限制：**   -对于未开通企业多项目服务的用户，不传该参数。   -对于已开通企业多项目服务的用户，不传该参数时，表示为default企业项目。获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * dedicatedResourceId  **参数解释：** '专属资源ID。' **约束限制：** 只有开通专属资源池后才可以下发此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sslOption  **参数解释：** SSL开关选项。 **约束限制：** 不涉及。 **取值范围：** - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认不启用SSL连接。 **默认取值：** 不涉及。
    * chargeInfo  chargeInfo
    * restoreInfo  restoreInfo
    * port  **参数解释：** 数据库访问端口号。 **约束限制：** 目前仅支持GeminiDB Redis实例支持自定义端口，取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。  不指定端口时，创建GeminiDB Redis实例的访问端口默认为6379。  如果该实例计划用于搭建双活容灾场景，请配置为8635端口。 **取值范围：** 取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。 **默认取值：** 6379。
    * availabilityZoneDetail  availabilityZoneDetail
    * lbAccessControlSettings  lbAccessControlSettings
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'datastore' => 'getDatastore',
            'region' => 'getRegion',
            'availabilityZone' => 'getAvailabilityZone',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'password' => 'getPassword',
            'mode' => 'getMode',
            'productType' => 'getProductType',
            'flavor' => 'getFlavor',
            'diskEncryptionId' => 'getDiskEncryptionId',
            'configurationId' => 'getConfigurationId',
            'backupStrategy' => 'getBackupStrategy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'dedicatedResourceId' => 'getDedicatedResourceId',
            'sslOption' => 'getSslOption',
            'chargeInfo' => 'getChargeInfo',
            'restoreInfo' => 'getRestoreInfo',
            'port' => 'getPort',
            'availabilityZoneDetail' => 'getAvailabilityZoneDetail',
            'lbAccessControlSettings' => 'getLbAccessControlSettings'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['diskEncryptionId'] = isset($data['diskEncryptionId']) ? $data['diskEncryptionId'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['dedicatedResourceId'] = isset($data['dedicatedResourceId']) ? $data['dedicatedResourceId'] : null;
        $this->container['sslOption'] = isset($data['sslOption']) ? $data['sslOption'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['restoreInfo'] = isset($data['restoreInfo']) ? $data['restoreInfo'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['availabilityZoneDetail'] = isset($data['availabilityZoneDetail']) ? $data['availabilityZoneDetail'] : null;
        $this->container['lbAccessControlSettings'] = isset($data['lbAccessControlSettings']) ? $data['lbAccessControlSettings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
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
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
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
    * Gets name
    *  **参数解释：** 实例名称，允许和已有名称重复。 **约束限制：** 区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 长度为4~64位，必须以字母开头（A~Z或a~z）。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** 实例名称，允许和已有名称重复。 **约束限制：** 区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 长度为4~64位，必须以字母开头（A~Z或a~z）。 **默认取值：** 不涉及。
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
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DatastoreOption
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DatastoreOption $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 区域ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 非空。
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
    * @param string $region **参数解释：** 区域ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 非空。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释：** 可用区ID。 **约束限制：** 不涉及。 **取值范围：** 取值：请参见查询所有实例规格信息中返回的“az_status” ，支持创建3可用区实例，中间以逗号隔开。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone **参数解释：** 可用区ID。 **约束限制：** 不涉及。 **取值范围：** 取值：请参见查询所有实例规格信息中返回的“az_status” ，支持创建3可用区实例，中间以逗号隔开。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释：** 虚拟私有云ID。 **约束限制：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $vpcId **参数解释：** 虚拟私有云ID。 **约束限制：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询VPC列表。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 子网的网络ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。 **默认取值：** 不涉及。
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
    * @param string $subnetId **参数解释：** 子网的网络ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询子网列表。 **默认取值：** 不涉及。
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
    *  **参数解释：** 安全组ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询安全组列表。 **默认取值：** 不涉及。
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
    * @param string $securityGroupId **参数解释：** 安全组ID。 **约束限制：** 不涉及。 **取值范围：**  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询安全组列表。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets password
    *  **参数解释：** 数据库密码。 **约束限制：** 不涉及。 **取值范围：** 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password **参数解释：** 数据库密码。 **约束限制：** 不涉及。 **取值范围：** 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释：** 实例类型。 **约束限制：** 不涉及。 **取值范围：**   -  GeminiDB Cassandra支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Cassandra支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB Mongo4.0版本支持副本集类型，取值为“ReplicaSet”。   -  GeminiDB Influx支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Influx支持云原生部署模式集群增强类型，取值为“CloudNativeCluster”。   -  GeminiDB Influx支持经典部署模式单节点类型，取值为“InfluxdbSingle”。   -  GeminiDB Influx支持经典部署模式集群增强类型，取值为“EnhancedCluster”。   -  GeminiDB Redis支持经典部署模式Proxy集群类型，取值为“Cluster”。   -  GeminiDB redis支持云原生部署模式集群类型，取值为“CloudNativeCluster”。   -  GeminiDB Redis支持经典部署模式Cluster集群类型，取值为“RedisCluster”   -  GeminiDB Redis支持经典部署模式主备类型，取值为“Replication”。   -  GeminiDB兼容DynamoDB支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB兼容DynamoDB支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB HBase支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB HBase支持云原生部署模式集群类型，取值“CloudNativeCluster”。 **默认取值：** 不涉及。
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
    * @param string $mode **参数解释：** 实例类型。 **约束限制：** 不涉及。 **取值范围：**   -  GeminiDB Cassandra支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Cassandra支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB Mongo4.0版本支持副本集类型，取值为“ReplicaSet”。   -  GeminiDB Influx支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB Influx支持云原生部署模式集群增强类型，取值为“CloudNativeCluster”。   -  GeminiDB Influx支持经典部署模式单节点类型，取值为“InfluxdbSingle”。   -  GeminiDB Influx支持经典部署模式集群增强类型，取值为“EnhancedCluster”。   -  GeminiDB Redis支持经典部署模式Proxy集群类型，取值为“Cluster”。   -  GeminiDB redis支持云原生部署模式集群类型，取值为“CloudNativeCluster”。   -  GeminiDB Redis支持经典部署模式Cluster集群类型，取值为“RedisCluster”   -  GeminiDB Redis支持经典部署模式主备类型，取值为“Replication”。   -  GeminiDB兼容DynamoDB支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB兼容DynamoDB支持云原生部署模式集群类型，取值“CloudNativeCluster”。   -  GeminiDB HBase支持经典部署模式集群类型，取值为“Cluster”。   -  GeminiDB HBase支持云原生部署模式集群类型，取值“CloudNativeCluster”。 **默认取值：** 不涉及。
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
    *  **参数解释：** 产品类型。 **约束限制：** 当创建GeminiDB Redis云原生部署模式集群类型必传此参数。 **取值范围：** - Capacity 容量型 **默认取值：** 不涉及。
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
    * @param string|null $productType **参数解释：** 产品类型。 **约束限制：** 当创建GeminiDB Redis云原生部署模式集群类型必传此参数。 **取值范围：** - Capacity 容量型 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释：** 实例规格详情。 **约束限制：** 获取方法请参见查询所有实例规格信息中响应“flavors”字段下参数的值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\CreateInstanceFlavorOption[]
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\CreateInstanceFlavorOption[] $flavor **参数解释：** 实例规格详情。 **约束限制：** 获取方法请参见查询所有实例规格信息中响应“flavors”字段下参数的值。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets diskEncryptionId
    *  **参数解释：** 磁盘加密时的密钥ID，创建实例时不传该参数，表示不进行磁盘加密。 **约束限制：** 备份恢复新实例时不支持指定该参数，如果原实例使用了磁盘加密，新实例复用原实例加密的密钥ID。 该参数仅GeminiDB influx 云原生部署模式集群增强版实例类型、GeminiDB Cassandra经典部署模式实例类型、GeminiDB兼容DynamoDB实例类型支持。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $diskEncryptionId **参数解释：** 磁盘加密时的密钥ID，创建实例时不传该参数，表示不进行磁盘加密。 **约束限制：** 备份恢复新实例时不支持指定该参数，如果原实例使用了磁盘加密，新实例复用原实例加密的密钥ID。 该参数仅GeminiDB influx 云原生部署模式集群增强版实例类型、GeminiDB Cassandra经典部署模式实例类型、GeminiDB兼容DynamoDB实例类型支持。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDiskEncryptionId($diskEncryptionId)
    {
        $this->container['diskEncryptionId'] = $diskEncryptionId;
        return $this;
    }

    /**
    * Gets configurationId
    *  **参数解释：** '参数模板ID。' **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId **参数解释：** '参数模板ID。' **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\BackupStrategyOption|null
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\BackupStrategyOption|null $backupStrategy backupStrategy
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
    *  **参数解释：** '企业项目ID。' **约束限制：**   -对于未开通企业多项目服务的用户，不传该参数。   -对于已开通企业多项目服务的用户，不传该参数时，表示为default企业项目。获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释：** '企业项目ID。' **约束限制：**   -对于未开通企业多项目服务的用户，不传该参数。   -对于已开通企业多项目服务的用户，不传该参数时，表示为default企业项目。获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** '专属资源ID。' **约束限制：** 只有开通专属资源池后才可以下发此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $dedicatedResourceId **参数解释：** '专属资源ID。' **约束限制：** 只有开通专属资源池后才可以下发此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDedicatedResourceId($dedicatedResourceId)
    {
        $this->container['dedicatedResourceId'] = $dedicatedResourceId;
        return $this;
    }

    /**
    * Gets sslOption
    *  **参数解释：** SSL开关选项。 **约束限制：** 不涉及。 **取值范围：** - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认不启用SSL连接。 **默认取值：** 不涉及。
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
    * @param string|null $sslOption **参数解释：** SSL开关选项。 **约束限制：** 不涉及。 **取值范围：** - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认不启用SSL连接。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSslOption($sslOption)
    {
        $this->container['sslOption'] = $sslOption;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ChargeInfoOption|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\ChargeInfoOption|null $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
        return $this;
    }

    /**
    * Gets restoreInfo
    *  restoreInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RestoreInfo|null
    */
    public function getRestoreInfo()
    {
        return $this->container['restoreInfo'];
    }

    /**
    * Sets restoreInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\RestoreInfo|null $restoreInfo restoreInfo
    *
    * @return $this
    */
    public function setRestoreInfo($restoreInfo)
    {
        $this->container['restoreInfo'] = $restoreInfo;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释：** 数据库访问端口号。 **约束限制：** 目前仅支持GeminiDB Redis实例支持自定义端口，取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。  不指定端口时，创建GeminiDB Redis实例的访问端口默认为6379。  如果该实例计划用于搭建双活容灾场景，请配置为8635端口。 **取值范围：** 取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。 **默认取值：** 6379。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port **参数解释：** 数据库访问端口号。 **约束限制：** 目前仅支持GeminiDB Redis实例支持自定义端口，取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。  不指定端口时，创建GeminiDB Redis实例的访问端口默认为6379。  如果该实例计划用于搭建双活容灾场景，请配置为8635端口。 **取值范围：** 取值范围为：1024~65535，禁用端口号为：2180、2887、3887、6377、6378、6380、8018、8079、8091、8479、8484、8999、12017、12333、50069。 **默认取值：** 6379。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets availabilityZoneDetail
    *  availabilityZoneDetail
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\AvailabilityZoneDetail|null
    */
    public function getAvailabilityZoneDetail()
    {
        return $this->container['availabilityZoneDetail'];
    }

    /**
    * Sets availabilityZoneDetail
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\AvailabilityZoneDetail|null $availabilityZoneDetail availabilityZoneDetail
    *
    * @return $this
    */
    public function setAvailabilityZoneDetail($availabilityZoneDetail)
    {
        $this->container['availabilityZoneDetail'] = $availabilityZoneDetail;
        return $this;
    }

    /**
    * Gets lbAccessControlSettings
    *  lbAccessControlSettings
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\LbAccessControlSettings|null
    */
    public function getLbAccessControlSettings()
    {
        return $this->container['lbAccessControlSettings'];
    }

    /**
    * Sets lbAccessControlSettings
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\LbAccessControlSettings|null $lbAccessControlSettings lbAccessControlSettings
    *
    * @return $this
    */
    public function setLbAccessControlSettings($lbAccessControlSettings)
    {
        $this->container['lbAccessControlSettings'] = $lbAccessControlSettings;
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

