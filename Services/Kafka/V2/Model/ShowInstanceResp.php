<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。
    * engine  引擎。
    * engineVersion  版本。
    * description  实例描述。
    * specification  实例规格。
    * storageSpace  消息存储空间，单位：GB。
    * partitionNum  Kafka实例的分区数量。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * connectAddress  实例连接IP地址。
    * port  实例连接端口。
    * status  实例的状态。详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   - dms.instance.kafka.cluster.c3.mini：Kafka实例的基准带宽为100MByte/秒。   - dms.instance.kafka.cluster.c3.small.2：Kafka实例的基准带宽为300MByte/秒。   - dms.instance.kafka.cluster.c3.middle.2：Kafka实例的基准带宽为600MByte/秒。   - dms.instance.kafka.cluster.c3.high.2：Kafka实例的基准带宽为1200MByte/秒。
    * chargingMode  [付费模式，1表示按需计费，0表示包年/包月计费。](tag:hws,hws_hk,ctc,sbc,hk_sbc,cmcc,hws_eu)[付费模式，暂未使用。](tag:hws_ocb,ocb) [付费模式，1表示按需计费。](tag:otc,dt,g42,tm,hk_g42,hk_tm)
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。  格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * userId  用户ID。
    * userName  用户名。
    * accessUser  实例访问用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  实例是否开启公网访问功能。 - true：开启 - false：未开启
    * managementConnectAddress  Kafka实例的Kafka Manager连接地址。
    * sslEnable  是否开启安全认证。 - true：开启 - false：未开启
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。 - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * sslTwoWayEnable  是否开启双向认证。
    * certReplaced  是否能够证书替换。
    * publicManagementConnectAddress  公网访问Kafka Manager连接地址。
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * enableAutoTopic  是否打开kafka自动创建topic功能。   - true：开启   - false：关闭
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * publicConnectAddress  实例公网连接IP地址。当实例开启了公网访问，实例才包含该参数。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * serviceType  服务类型。
    * storageType  存储类型。
    * retentionPolicy  消息老化策略。
    * kafkaPublicStatus  Kafka公网开启状态。
    * publicBandwidth  kafka公网访问带宽。
    * kafkaManagerEnable  是否已开启kafka manager
    * kafkaManagerUser  登录Kafka Manager的用户名。
    * enableLogCollection  是否开启消息收集功能。
    * crossVpcInfo  跨VPC访问信息。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * connectorEnable  是否开启转储。新规格产品暂不支持开启转储。
    * connectorId  转储任务ID。
    * restEnable  是否开启Kafka rest功能。
    * restConnectAddress  Kafka rest连接地址。
    * publicBoundwidth  kafka公网访问带宽。待删除版本。
    * messageQueryInstEnable  是否开启消息查询功能。
    * vpcClientPlain  是否开启VPC明文访问。
    * supportFeatures  Kafka实例支持的特性功能。
    * traceEnable  是否开启消息轨迹功能。
    * agentEnable  是否开启代理。
    * podConnectAddress  租户侧连接地址。
    * diskEncrypted  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空。
    * kafkaPrivateConnectAddress  Kafka实例私有连接地址。
    * cesVersion  云监控版本。
    * publicAccessEnabled  区分实例什么时候开启的公网访问：true,actived,closed,false。
    * nodeNum  节点数。
    * enableAcl  是否开启访问控制。
    * newSpecBillingEnable  是否启用新规格计费。
    * brokerNum  节点数量。
    * tags  标签列表。
    * drEnable  是否为容灾实例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'description' => 'string',
            'specification' => 'string',
            'storageSpace' => 'int',
            'partitionNum' => 'string',
            'usedStorageSpace' => 'int',
            'connectAddress' => 'string',
            'port' => 'int',
            'status' => 'string',
            'instanceId' => 'string',
            'resourceSpecCode' => 'string',
            'chargingMode' => 'int',
            'vpcId' => 'string',
            'vpcName' => 'string',
            'createdAt' => 'string',
            'subnetName' => 'string',
            'subnetCidr' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'accessUser' => 'string',
            'orderId' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'enablePublicip' => 'bool',
            'managementConnectAddress' => 'string',
            'sslEnable' => 'bool',
            'kafkaSecurityProtocol' => 'string',
            'saslEnabledMechanisms' => 'string[]',
            'sslTwoWayEnable' => 'bool',
            'certReplaced' => 'bool',
            'publicManagementConnectAddress' => 'string',
            'enterpriseProjectId' => 'string',
            'isLogicalVolume' => 'bool',
            'extendTimes' => 'int',
            'enableAutoTopic' => 'bool',
            'type' => 'string',
            'productId' => 'string',
            'securityGroupId' => 'string',
            'securityGroupName' => 'string',
            'subnetId' => 'string',
            'availableZones' => 'string[]',
            'totalStorageSpace' => 'int',
            'publicConnectAddress' => 'string',
            'storageResourceId' => 'string',
            'storageSpecCode' => 'string',
            'serviceType' => 'string',
            'storageType' => 'string',
            'retentionPolicy' => 'string',
            'kafkaPublicStatus' => 'string',
            'publicBandwidth' => 'int',
            'kafkaManagerEnable' => 'bool',
            'kafkaManagerUser' => 'string',
            'enableLogCollection' => 'bool',
            'crossVpcInfo' => 'string',
            'ipv6Enable' => 'bool',
            'ipv6ConnectAddresses' => 'string[]',
            'connectorEnable' => 'bool',
            'connectorId' => 'string',
            'restEnable' => 'bool',
            'restConnectAddress' => 'string',
            'publicBoundwidth' => 'int',
            'messageQueryInstEnable' => 'bool',
            'vpcClientPlain' => 'bool',
            'supportFeatures' => 'string',
            'traceEnable' => 'bool',
            'agentEnable' => 'bool',
            'podConnectAddress' => 'string',
            'diskEncrypted' => 'bool',
            'diskEncryptedKey' => 'string',
            'kafkaPrivateConnectAddress' => 'string',
            'cesVersion' => 'string',
            'publicAccessEnabled' => 'string',
            'nodeNum' => 'int',
            'enableAcl' => 'bool',
            'newSpecBillingEnable' => 'bool',
            'brokerNum' => 'int',
            'tags' => '\HuaweiCloud\SDK\Kafka\V2\Model\TagEntity[]',
            'drEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。
    * engine  引擎。
    * engineVersion  版本。
    * description  实例描述。
    * specification  实例规格。
    * storageSpace  消息存储空间，单位：GB。
    * partitionNum  Kafka实例的分区数量。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * connectAddress  实例连接IP地址。
    * port  实例连接端口。
    * status  实例的状态。详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   - dms.instance.kafka.cluster.c3.mini：Kafka实例的基准带宽为100MByte/秒。   - dms.instance.kafka.cluster.c3.small.2：Kafka实例的基准带宽为300MByte/秒。   - dms.instance.kafka.cluster.c3.middle.2：Kafka实例的基准带宽为600MByte/秒。   - dms.instance.kafka.cluster.c3.high.2：Kafka实例的基准带宽为1200MByte/秒。
    * chargingMode  [付费模式，1表示按需计费，0表示包年/包月计费。](tag:hws,hws_hk,ctc,sbc,hk_sbc,cmcc,hws_eu)[付费模式，暂未使用。](tag:hws_ocb,ocb) [付费模式，1表示按需计费。](tag:otc,dt,g42,tm,hk_g42,hk_tm)
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。  格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * userId  用户ID。
    * userName  用户名。
    * accessUser  实例访问用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  实例是否开启公网访问功能。 - true：开启 - false：未开启
    * managementConnectAddress  Kafka实例的Kafka Manager连接地址。
    * sslEnable  是否开启安全认证。 - true：开启 - false：未开启
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。 - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * sslTwoWayEnable  是否开启双向认证。
    * certReplaced  是否能够证书替换。
    * publicManagementConnectAddress  公网访问Kafka Manager连接地址。
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * enableAutoTopic  是否打开kafka自动创建topic功能。   - true：开启   - false：关闭
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * publicConnectAddress  实例公网连接IP地址。当实例开启了公网访问，实例才包含该参数。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * serviceType  服务类型。
    * storageType  存储类型。
    * retentionPolicy  消息老化策略。
    * kafkaPublicStatus  Kafka公网开启状态。
    * publicBandwidth  kafka公网访问带宽。
    * kafkaManagerEnable  是否已开启kafka manager
    * kafkaManagerUser  登录Kafka Manager的用户名。
    * enableLogCollection  是否开启消息收集功能。
    * crossVpcInfo  跨VPC访问信息。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * connectorEnable  是否开启转储。新规格产品暂不支持开启转储。
    * connectorId  转储任务ID。
    * restEnable  是否开启Kafka rest功能。
    * restConnectAddress  Kafka rest连接地址。
    * publicBoundwidth  kafka公网访问带宽。待删除版本。
    * messageQueryInstEnable  是否开启消息查询功能。
    * vpcClientPlain  是否开启VPC明文访问。
    * supportFeatures  Kafka实例支持的特性功能。
    * traceEnable  是否开启消息轨迹功能。
    * agentEnable  是否开启代理。
    * podConnectAddress  租户侧连接地址。
    * diskEncrypted  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空。
    * kafkaPrivateConnectAddress  Kafka实例私有连接地址。
    * cesVersion  云监控版本。
    * publicAccessEnabled  区分实例什么时候开启的公网访问：true,actived,closed,false。
    * nodeNum  节点数。
    * enableAcl  是否开启访问控制。
    * newSpecBillingEnable  是否启用新规格计费。
    * brokerNum  节点数量。
    * tags  标签列表。
    * drEnable  是否为容灾实例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'engine' => null,
        'engineVersion' => null,
        'description' => null,
        'specification' => null,
        'storageSpace' => null,
        'partitionNum' => null,
        'usedStorageSpace' => null,
        'connectAddress' => null,
        'port' => null,
        'status' => null,
        'instanceId' => null,
        'resourceSpecCode' => null,
        'chargingMode' => null,
        'vpcId' => null,
        'vpcName' => null,
        'createdAt' => null,
        'subnetName' => null,
        'subnetCidr' => null,
        'userId' => null,
        'userName' => null,
        'accessUser' => null,
        'orderId' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'enablePublicip' => null,
        'managementConnectAddress' => null,
        'sslEnable' => null,
        'kafkaSecurityProtocol' => null,
        'saslEnabledMechanisms' => null,
        'sslTwoWayEnable' => null,
        'certReplaced' => null,
        'publicManagementConnectAddress' => null,
        'enterpriseProjectId' => null,
        'isLogicalVolume' => null,
        'extendTimes' => null,
        'enableAutoTopic' => null,
        'type' => null,
        'productId' => null,
        'securityGroupId' => null,
        'securityGroupName' => null,
        'subnetId' => null,
        'availableZones' => null,
        'totalStorageSpace' => null,
        'publicConnectAddress' => null,
        'storageResourceId' => null,
        'storageSpecCode' => null,
        'serviceType' => null,
        'storageType' => null,
        'retentionPolicy' => null,
        'kafkaPublicStatus' => null,
        'publicBandwidth' => null,
        'kafkaManagerEnable' => null,
        'kafkaManagerUser' => null,
        'enableLogCollection' => null,
        'crossVpcInfo' => null,
        'ipv6Enable' => null,
        'ipv6ConnectAddresses' => null,
        'connectorEnable' => null,
        'connectorId' => null,
        'restEnable' => null,
        'restConnectAddress' => null,
        'publicBoundwidth' => 'int32',
        'messageQueryInstEnable' => null,
        'vpcClientPlain' => null,
        'supportFeatures' => null,
        'traceEnable' => null,
        'agentEnable' => null,
        'podConnectAddress' => null,
        'diskEncrypted' => null,
        'diskEncryptedKey' => null,
        'kafkaPrivateConnectAddress' => null,
        'cesVersion' => null,
        'publicAccessEnabled' => null,
        'nodeNum' => 'int32',
        'enableAcl' => null,
        'newSpecBillingEnable' => null,
        'brokerNum' => 'int32',
        'tags' => null,
        'drEnable' => null
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
    * name  实例名称。
    * engine  引擎。
    * engineVersion  版本。
    * description  实例描述。
    * specification  实例规格。
    * storageSpace  消息存储空间，单位：GB。
    * partitionNum  Kafka实例的分区数量。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * connectAddress  实例连接IP地址。
    * port  实例连接端口。
    * status  实例的状态。详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   - dms.instance.kafka.cluster.c3.mini：Kafka实例的基准带宽为100MByte/秒。   - dms.instance.kafka.cluster.c3.small.2：Kafka实例的基准带宽为300MByte/秒。   - dms.instance.kafka.cluster.c3.middle.2：Kafka实例的基准带宽为600MByte/秒。   - dms.instance.kafka.cluster.c3.high.2：Kafka实例的基准带宽为1200MByte/秒。
    * chargingMode  [付费模式，1表示按需计费，0表示包年/包月计费。](tag:hws,hws_hk,ctc,sbc,hk_sbc,cmcc,hws_eu)[付费模式，暂未使用。](tag:hws_ocb,ocb) [付费模式，1表示按需计费。](tag:otc,dt,g42,tm,hk_g42,hk_tm)
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。  格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * userId  用户ID。
    * userName  用户名。
    * accessUser  实例访问用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  实例是否开启公网访问功能。 - true：开启 - false：未开启
    * managementConnectAddress  Kafka实例的Kafka Manager连接地址。
    * sslEnable  是否开启安全认证。 - true：开启 - false：未开启
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。 - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * sslTwoWayEnable  是否开启双向认证。
    * certReplaced  是否能够证书替换。
    * publicManagementConnectAddress  公网访问Kafka Manager连接地址。
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * enableAutoTopic  是否打开kafka自动创建topic功能。   - true：开启   - false：关闭
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * publicConnectAddress  实例公网连接IP地址。当实例开启了公网访问，实例才包含该参数。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * serviceType  服务类型。
    * storageType  存储类型。
    * retentionPolicy  消息老化策略。
    * kafkaPublicStatus  Kafka公网开启状态。
    * publicBandwidth  kafka公网访问带宽。
    * kafkaManagerEnable  是否已开启kafka manager
    * kafkaManagerUser  登录Kafka Manager的用户名。
    * enableLogCollection  是否开启消息收集功能。
    * crossVpcInfo  跨VPC访问信息。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * connectorEnable  是否开启转储。新规格产品暂不支持开启转储。
    * connectorId  转储任务ID。
    * restEnable  是否开启Kafka rest功能。
    * restConnectAddress  Kafka rest连接地址。
    * publicBoundwidth  kafka公网访问带宽。待删除版本。
    * messageQueryInstEnable  是否开启消息查询功能。
    * vpcClientPlain  是否开启VPC明文访问。
    * supportFeatures  Kafka实例支持的特性功能。
    * traceEnable  是否开启消息轨迹功能。
    * agentEnable  是否开启代理。
    * podConnectAddress  租户侧连接地址。
    * diskEncrypted  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空。
    * kafkaPrivateConnectAddress  Kafka实例私有连接地址。
    * cesVersion  云监控版本。
    * publicAccessEnabled  区分实例什么时候开启的公网访问：true,actived,closed,false。
    * nodeNum  节点数。
    * enableAcl  是否开启访问控制。
    * newSpecBillingEnable  是否启用新规格计费。
    * brokerNum  节点数量。
    * tags  标签列表。
    * drEnable  是否为容灾实例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'description' => 'description',
            'specification' => 'specification',
            'storageSpace' => 'storage_space',
            'partitionNum' => 'partition_num',
            'usedStorageSpace' => 'used_storage_space',
            'connectAddress' => 'connect_address',
            'port' => 'port',
            'status' => 'status',
            'instanceId' => 'instance_id',
            'resourceSpecCode' => 'resource_spec_code',
            'chargingMode' => 'charging_mode',
            'vpcId' => 'vpc_id',
            'vpcName' => 'vpc_name',
            'createdAt' => 'created_at',
            'subnetName' => 'subnet_name',
            'subnetCidr' => 'subnet_cidr',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'accessUser' => 'access_user',
            'orderId' => 'order_id',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'enablePublicip' => 'enable_publicip',
            'managementConnectAddress' => 'management_connect_address',
            'sslEnable' => 'ssl_enable',
            'kafkaSecurityProtocol' => 'kafka_security_protocol',
            'saslEnabledMechanisms' => 'sasl_enabled_mechanisms',
            'sslTwoWayEnable' => 'ssl_two_way_enable',
            'certReplaced' => 'cert_replaced',
            'publicManagementConnectAddress' => 'public_management_connect_address',
            'enterpriseProjectId' => 'enterprise_project_id',
            'isLogicalVolume' => 'is_logical_volume',
            'extendTimes' => 'extend_times',
            'enableAutoTopic' => 'enable_auto_topic',
            'type' => 'type',
            'productId' => 'product_id',
            'securityGroupId' => 'security_group_id',
            'securityGroupName' => 'security_group_name',
            'subnetId' => 'subnet_id',
            'availableZones' => 'available_zones',
            'totalStorageSpace' => 'total_storage_space',
            'publicConnectAddress' => 'public_connect_address',
            'storageResourceId' => 'storage_resource_id',
            'storageSpecCode' => 'storage_spec_code',
            'serviceType' => 'service_type',
            'storageType' => 'storage_type',
            'retentionPolicy' => 'retention_policy',
            'kafkaPublicStatus' => 'kafka_public_status',
            'publicBandwidth' => 'public_bandwidth',
            'kafkaManagerEnable' => 'kafka_manager_enable',
            'kafkaManagerUser' => 'kafka_manager_user',
            'enableLogCollection' => 'enable_log_collection',
            'crossVpcInfo' => 'cross_vpc_info',
            'ipv6Enable' => 'ipv6_enable',
            'ipv6ConnectAddresses' => 'ipv6_connect_addresses',
            'connectorEnable' => 'connector_enable',
            'connectorId' => 'connector_id',
            'restEnable' => 'rest_enable',
            'restConnectAddress' => 'rest_connect_address',
            'publicBoundwidth' => 'public_boundwidth',
            'messageQueryInstEnable' => 'message_query_inst_enable',
            'vpcClientPlain' => 'vpc_client_plain',
            'supportFeatures' => 'support_features',
            'traceEnable' => 'trace_enable',
            'agentEnable' => 'agent_enable',
            'podConnectAddress' => 'pod_connect_address',
            'diskEncrypted' => 'disk_encrypted',
            'diskEncryptedKey' => 'disk_encrypted_key',
            'kafkaPrivateConnectAddress' => 'kafka_private_connect_address',
            'cesVersion' => 'ces_version',
            'publicAccessEnabled' => 'public_access_enabled',
            'nodeNum' => 'node_num',
            'enableAcl' => 'enable_acl',
            'newSpecBillingEnable' => 'new_spec_billing_enable',
            'brokerNum' => 'broker_num',
            'tags' => 'tags',
            'drEnable' => 'dr_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。
    * engine  引擎。
    * engineVersion  版本。
    * description  实例描述。
    * specification  实例规格。
    * storageSpace  消息存储空间，单位：GB。
    * partitionNum  Kafka实例的分区数量。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * connectAddress  实例连接IP地址。
    * port  实例连接端口。
    * status  实例的状态。详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   - dms.instance.kafka.cluster.c3.mini：Kafka实例的基准带宽为100MByte/秒。   - dms.instance.kafka.cluster.c3.small.2：Kafka实例的基准带宽为300MByte/秒。   - dms.instance.kafka.cluster.c3.middle.2：Kafka实例的基准带宽为600MByte/秒。   - dms.instance.kafka.cluster.c3.high.2：Kafka实例的基准带宽为1200MByte/秒。
    * chargingMode  [付费模式，1表示按需计费，0表示包年/包月计费。](tag:hws,hws_hk,ctc,sbc,hk_sbc,cmcc,hws_eu)[付费模式，暂未使用。](tag:hws_ocb,ocb) [付费模式，1表示按需计费。](tag:otc,dt,g42,tm,hk_g42,hk_tm)
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。  格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * userId  用户ID。
    * userName  用户名。
    * accessUser  实例访问用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  实例是否开启公网访问功能。 - true：开启 - false：未开启
    * managementConnectAddress  Kafka实例的Kafka Manager连接地址。
    * sslEnable  是否开启安全认证。 - true：开启 - false：未开启
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。 - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * sslTwoWayEnable  是否开启双向认证。
    * certReplaced  是否能够证书替换。
    * publicManagementConnectAddress  公网访问Kafka Manager连接地址。
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * enableAutoTopic  是否打开kafka自动创建topic功能。   - true：开启   - false：关闭
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * publicConnectAddress  实例公网连接IP地址。当实例开启了公网访问，实例才包含该参数。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * serviceType  服务类型。
    * storageType  存储类型。
    * retentionPolicy  消息老化策略。
    * kafkaPublicStatus  Kafka公网开启状态。
    * publicBandwidth  kafka公网访问带宽。
    * kafkaManagerEnable  是否已开启kafka manager
    * kafkaManagerUser  登录Kafka Manager的用户名。
    * enableLogCollection  是否开启消息收集功能。
    * crossVpcInfo  跨VPC访问信息。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * connectorEnable  是否开启转储。新规格产品暂不支持开启转储。
    * connectorId  转储任务ID。
    * restEnable  是否开启Kafka rest功能。
    * restConnectAddress  Kafka rest连接地址。
    * publicBoundwidth  kafka公网访问带宽。待删除版本。
    * messageQueryInstEnable  是否开启消息查询功能。
    * vpcClientPlain  是否开启VPC明文访问。
    * supportFeatures  Kafka实例支持的特性功能。
    * traceEnable  是否开启消息轨迹功能。
    * agentEnable  是否开启代理。
    * podConnectAddress  租户侧连接地址。
    * diskEncrypted  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空。
    * kafkaPrivateConnectAddress  Kafka实例私有连接地址。
    * cesVersion  云监控版本。
    * publicAccessEnabled  区分实例什么时候开启的公网访问：true,actived,closed,false。
    * nodeNum  节点数。
    * enableAcl  是否开启访问控制。
    * newSpecBillingEnable  是否启用新规格计费。
    * brokerNum  节点数量。
    * tags  标签列表。
    * drEnable  是否为容灾实例。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'description' => 'setDescription',
            'specification' => 'setSpecification',
            'storageSpace' => 'setStorageSpace',
            'partitionNum' => 'setPartitionNum',
            'usedStorageSpace' => 'setUsedStorageSpace',
            'connectAddress' => 'setConnectAddress',
            'port' => 'setPort',
            'status' => 'setStatus',
            'instanceId' => 'setInstanceId',
            'resourceSpecCode' => 'setResourceSpecCode',
            'chargingMode' => 'setChargingMode',
            'vpcId' => 'setVpcId',
            'vpcName' => 'setVpcName',
            'createdAt' => 'setCreatedAt',
            'subnetName' => 'setSubnetName',
            'subnetCidr' => 'setSubnetCidr',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'accessUser' => 'setAccessUser',
            'orderId' => 'setOrderId',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'enablePublicip' => 'setEnablePublicip',
            'managementConnectAddress' => 'setManagementConnectAddress',
            'sslEnable' => 'setSslEnable',
            'kafkaSecurityProtocol' => 'setKafkaSecurityProtocol',
            'saslEnabledMechanisms' => 'setSaslEnabledMechanisms',
            'sslTwoWayEnable' => 'setSslTwoWayEnable',
            'certReplaced' => 'setCertReplaced',
            'publicManagementConnectAddress' => 'setPublicManagementConnectAddress',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'isLogicalVolume' => 'setIsLogicalVolume',
            'extendTimes' => 'setExtendTimes',
            'enableAutoTopic' => 'setEnableAutoTopic',
            'type' => 'setType',
            'productId' => 'setProductId',
            'securityGroupId' => 'setSecurityGroupId',
            'securityGroupName' => 'setSecurityGroupName',
            'subnetId' => 'setSubnetId',
            'availableZones' => 'setAvailableZones',
            'totalStorageSpace' => 'setTotalStorageSpace',
            'publicConnectAddress' => 'setPublicConnectAddress',
            'storageResourceId' => 'setStorageResourceId',
            'storageSpecCode' => 'setStorageSpecCode',
            'serviceType' => 'setServiceType',
            'storageType' => 'setStorageType',
            'retentionPolicy' => 'setRetentionPolicy',
            'kafkaPublicStatus' => 'setKafkaPublicStatus',
            'publicBandwidth' => 'setPublicBandwidth',
            'kafkaManagerEnable' => 'setKafkaManagerEnable',
            'kafkaManagerUser' => 'setKafkaManagerUser',
            'enableLogCollection' => 'setEnableLogCollection',
            'crossVpcInfo' => 'setCrossVpcInfo',
            'ipv6Enable' => 'setIpv6Enable',
            'ipv6ConnectAddresses' => 'setIpv6ConnectAddresses',
            'connectorEnable' => 'setConnectorEnable',
            'connectorId' => 'setConnectorId',
            'restEnable' => 'setRestEnable',
            'restConnectAddress' => 'setRestConnectAddress',
            'publicBoundwidth' => 'setPublicBoundwidth',
            'messageQueryInstEnable' => 'setMessageQueryInstEnable',
            'vpcClientPlain' => 'setVpcClientPlain',
            'supportFeatures' => 'setSupportFeatures',
            'traceEnable' => 'setTraceEnable',
            'agentEnable' => 'setAgentEnable',
            'podConnectAddress' => 'setPodConnectAddress',
            'diskEncrypted' => 'setDiskEncrypted',
            'diskEncryptedKey' => 'setDiskEncryptedKey',
            'kafkaPrivateConnectAddress' => 'setKafkaPrivateConnectAddress',
            'cesVersion' => 'setCesVersion',
            'publicAccessEnabled' => 'setPublicAccessEnabled',
            'nodeNum' => 'setNodeNum',
            'enableAcl' => 'setEnableAcl',
            'newSpecBillingEnable' => 'setNewSpecBillingEnable',
            'brokerNum' => 'setBrokerNum',
            'tags' => 'setTags',
            'drEnable' => 'setDrEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。
    * engine  引擎。
    * engineVersion  版本。
    * description  实例描述。
    * specification  实例规格。
    * storageSpace  消息存储空间，单位：GB。
    * partitionNum  Kafka实例的分区数量。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * connectAddress  实例连接IP地址。
    * port  实例连接端口。
    * status  实例的状态。详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   - dms.instance.kafka.cluster.c3.mini：Kafka实例的基准带宽为100MByte/秒。   - dms.instance.kafka.cluster.c3.small.2：Kafka实例的基准带宽为300MByte/秒。   - dms.instance.kafka.cluster.c3.middle.2：Kafka实例的基准带宽为600MByte/秒。   - dms.instance.kafka.cluster.c3.high.2：Kafka实例的基准带宽为1200MByte/秒。
    * chargingMode  [付费模式，1表示按需计费，0表示包年/包月计费。](tag:hws,hws_hk,ctc,sbc,hk_sbc,cmcc,hws_eu)[付费模式，暂未使用。](tag:hws_ocb,ocb) [付费模式，1表示按需计费。](tag:otc,dt,g42,tm,hk_g42,hk_tm)
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。  格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * subnetName  子网名称。
    * subnetCidr  子网网段。
    * userId  用户ID。
    * userName  用户名。
    * accessUser  实例访问用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  实例是否开启公网访问功能。 - true：开启 - false：未开启
    * managementConnectAddress  Kafka实例的Kafka Manager连接地址。
    * sslEnable  是否开启安全认证。 - true：开启 - false：未开启
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制。 - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * sslTwoWayEnable  是否开启双向认证。
    * certReplaced  是否能够证书替换。
    * publicManagementConnectAddress  公网访问Kafka Manager连接地址。
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * enableAutoTopic  是否打开kafka自动创建topic功能。   - true：开启   - false：关闭
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * publicConnectAddress  实例公网连接IP地址。当实例开启了公网访问，实例才包含该参数。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * serviceType  服务类型。
    * storageType  存储类型。
    * retentionPolicy  消息老化策略。
    * kafkaPublicStatus  Kafka公网开启状态。
    * publicBandwidth  kafka公网访问带宽。
    * kafkaManagerEnable  是否已开启kafka manager
    * kafkaManagerUser  登录Kafka Manager的用户名。
    * enableLogCollection  是否开启消息收集功能。
    * crossVpcInfo  跨VPC访问信息。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * connectorEnable  是否开启转储。新规格产品暂不支持开启转储。
    * connectorId  转储任务ID。
    * restEnable  是否开启Kafka rest功能。
    * restConnectAddress  Kafka rest连接地址。
    * publicBoundwidth  kafka公网访问带宽。待删除版本。
    * messageQueryInstEnable  是否开启消息查询功能。
    * vpcClientPlain  是否开启VPC明文访问。
    * supportFeatures  Kafka实例支持的特性功能。
    * traceEnable  是否开启消息轨迹功能。
    * agentEnable  是否开启代理。
    * podConnectAddress  租户侧连接地址。
    * diskEncrypted  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空。
    * kafkaPrivateConnectAddress  Kafka实例私有连接地址。
    * cesVersion  云监控版本。
    * publicAccessEnabled  区分实例什么时候开启的公网访问：true,actived,closed,false。
    * nodeNum  节点数。
    * enableAcl  是否开启访问控制。
    * newSpecBillingEnable  是否启用新规格计费。
    * brokerNum  节点数量。
    * tags  标签列表。
    * drEnable  是否为容灾实例。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'description' => 'getDescription',
            'specification' => 'getSpecification',
            'storageSpace' => 'getStorageSpace',
            'partitionNum' => 'getPartitionNum',
            'usedStorageSpace' => 'getUsedStorageSpace',
            'connectAddress' => 'getConnectAddress',
            'port' => 'getPort',
            'status' => 'getStatus',
            'instanceId' => 'getInstanceId',
            'resourceSpecCode' => 'getResourceSpecCode',
            'chargingMode' => 'getChargingMode',
            'vpcId' => 'getVpcId',
            'vpcName' => 'getVpcName',
            'createdAt' => 'getCreatedAt',
            'subnetName' => 'getSubnetName',
            'subnetCidr' => 'getSubnetCidr',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'accessUser' => 'getAccessUser',
            'orderId' => 'getOrderId',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'enablePublicip' => 'getEnablePublicip',
            'managementConnectAddress' => 'getManagementConnectAddress',
            'sslEnable' => 'getSslEnable',
            'kafkaSecurityProtocol' => 'getKafkaSecurityProtocol',
            'saslEnabledMechanisms' => 'getSaslEnabledMechanisms',
            'sslTwoWayEnable' => 'getSslTwoWayEnable',
            'certReplaced' => 'getCertReplaced',
            'publicManagementConnectAddress' => 'getPublicManagementConnectAddress',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'isLogicalVolume' => 'getIsLogicalVolume',
            'extendTimes' => 'getExtendTimes',
            'enableAutoTopic' => 'getEnableAutoTopic',
            'type' => 'getType',
            'productId' => 'getProductId',
            'securityGroupId' => 'getSecurityGroupId',
            'securityGroupName' => 'getSecurityGroupName',
            'subnetId' => 'getSubnetId',
            'availableZones' => 'getAvailableZones',
            'totalStorageSpace' => 'getTotalStorageSpace',
            'publicConnectAddress' => 'getPublicConnectAddress',
            'storageResourceId' => 'getStorageResourceId',
            'storageSpecCode' => 'getStorageSpecCode',
            'serviceType' => 'getServiceType',
            'storageType' => 'getStorageType',
            'retentionPolicy' => 'getRetentionPolicy',
            'kafkaPublicStatus' => 'getKafkaPublicStatus',
            'publicBandwidth' => 'getPublicBandwidth',
            'kafkaManagerEnable' => 'getKafkaManagerEnable',
            'kafkaManagerUser' => 'getKafkaManagerUser',
            'enableLogCollection' => 'getEnableLogCollection',
            'crossVpcInfo' => 'getCrossVpcInfo',
            'ipv6Enable' => 'getIpv6Enable',
            'ipv6ConnectAddresses' => 'getIpv6ConnectAddresses',
            'connectorEnable' => 'getConnectorEnable',
            'connectorId' => 'getConnectorId',
            'restEnable' => 'getRestEnable',
            'restConnectAddress' => 'getRestConnectAddress',
            'publicBoundwidth' => 'getPublicBoundwidth',
            'messageQueryInstEnable' => 'getMessageQueryInstEnable',
            'vpcClientPlain' => 'getVpcClientPlain',
            'supportFeatures' => 'getSupportFeatures',
            'traceEnable' => 'getTraceEnable',
            'agentEnable' => 'getAgentEnable',
            'podConnectAddress' => 'getPodConnectAddress',
            'diskEncrypted' => 'getDiskEncrypted',
            'diskEncryptedKey' => 'getDiskEncryptedKey',
            'kafkaPrivateConnectAddress' => 'getKafkaPrivateConnectAddress',
            'cesVersion' => 'getCesVersion',
            'publicAccessEnabled' => 'getPublicAccessEnabled',
            'nodeNum' => 'getNodeNum',
            'enableAcl' => 'getEnableAcl',
            'newSpecBillingEnable' => 'getNewSpecBillingEnable',
            'brokerNum' => 'getBrokerNum',
            'tags' => 'getTags',
            'drEnable' => 'getDrEnable'
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
    const SASL_ENABLED_MECHANISMS_PLAIN = 'PLAIN';
    const SASL_ENABLED_MECHANISMS_SCRAM_SHA_512 = 'SCRAM-SHA-512';
    const TYPE_SINGLE = 'single';
    const TYPE_CLUSTER = 'cluster';
    const RETENTION_POLICY_TIME_BASE = 'time_base';
    const RETENTION_POLICY_PRODUCE_REJECT = 'produce_reject';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSaslEnabledMechanismsAllowableValues()
    {
        return [
            self::SASL_ENABLED_MECHANISMS_PLAIN,
            self::SASL_ENABLED_MECHANISMS_SCRAM_SHA_512,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SINGLE,
            self::TYPE_CLUSTER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRetentionPolicyAllowableValues()
    {
        return [
            self::RETENTION_POLICY_TIME_BASE,
            self::RETENTION_POLICY_PRODUCE_REJECT,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['storageSpace'] = isset($data['storageSpace']) ? $data['storageSpace'] : null;
        $this->container['partitionNum'] = isset($data['partitionNum']) ? $data['partitionNum'] : null;
        $this->container['usedStorageSpace'] = isset($data['usedStorageSpace']) ? $data['usedStorageSpace'] : null;
        $this->container['connectAddress'] = isset($data['connectAddress']) ? $data['connectAddress'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['accessUser'] = isset($data['accessUser']) ? $data['accessUser'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['managementConnectAddress'] = isset($data['managementConnectAddress']) ? $data['managementConnectAddress'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['kafkaSecurityProtocol'] = isset($data['kafkaSecurityProtocol']) ? $data['kafkaSecurityProtocol'] : null;
        $this->container['saslEnabledMechanisms'] = isset($data['saslEnabledMechanisms']) ? $data['saslEnabledMechanisms'] : null;
        $this->container['sslTwoWayEnable'] = isset($data['sslTwoWayEnable']) ? $data['sslTwoWayEnable'] : null;
        $this->container['certReplaced'] = isset($data['certReplaced']) ? $data['certReplaced'] : null;
        $this->container['publicManagementConnectAddress'] = isset($data['publicManagementConnectAddress']) ? $data['publicManagementConnectAddress'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['isLogicalVolume'] = isset($data['isLogicalVolume']) ? $data['isLogicalVolume'] : null;
        $this->container['extendTimes'] = isset($data['extendTimes']) ? $data['extendTimes'] : null;
        $this->container['enableAutoTopic'] = isset($data['enableAutoTopic']) ? $data['enableAutoTopic'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['securityGroupName'] = isset($data['securityGroupName']) ? $data['securityGroupName'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['totalStorageSpace'] = isset($data['totalStorageSpace']) ? $data['totalStorageSpace'] : null;
        $this->container['publicConnectAddress'] = isset($data['publicConnectAddress']) ? $data['publicConnectAddress'] : null;
        $this->container['storageResourceId'] = isset($data['storageResourceId']) ? $data['storageResourceId'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['retentionPolicy'] = isset($data['retentionPolicy']) ? $data['retentionPolicy'] : null;
        $this->container['kafkaPublicStatus'] = isset($data['kafkaPublicStatus']) ? $data['kafkaPublicStatus'] : null;
        $this->container['publicBandwidth'] = isset($data['publicBandwidth']) ? $data['publicBandwidth'] : null;
        $this->container['kafkaManagerEnable'] = isset($data['kafkaManagerEnable']) ? $data['kafkaManagerEnable'] : null;
        $this->container['kafkaManagerUser'] = isset($data['kafkaManagerUser']) ? $data['kafkaManagerUser'] : null;
        $this->container['enableLogCollection'] = isset($data['enableLogCollection']) ? $data['enableLogCollection'] : null;
        $this->container['crossVpcInfo'] = isset($data['crossVpcInfo']) ? $data['crossVpcInfo'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['ipv6ConnectAddresses'] = isset($data['ipv6ConnectAddresses']) ? $data['ipv6ConnectAddresses'] : null;
        $this->container['connectorEnable'] = isset($data['connectorEnable']) ? $data['connectorEnable'] : null;
        $this->container['connectorId'] = isset($data['connectorId']) ? $data['connectorId'] : null;
        $this->container['restEnable'] = isset($data['restEnable']) ? $data['restEnable'] : null;
        $this->container['restConnectAddress'] = isset($data['restConnectAddress']) ? $data['restConnectAddress'] : null;
        $this->container['publicBoundwidth'] = isset($data['publicBoundwidth']) ? $data['publicBoundwidth'] : null;
        $this->container['messageQueryInstEnable'] = isset($data['messageQueryInstEnable']) ? $data['messageQueryInstEnable'] : null;
        $this->container['vpcClientPlain'] = isset($data['vpcClientPlain']) ? $data['vpcClientPlain'] : null;
        $this->container['supportFeatures'] = isset($data['supportFeatures']) ? $data['supportFeatures'] : null;
        $this->container['traceEnable'] = isset($data['traceEnable']) ? $data['traceEnable'] : null;
        $this->container['agentEnable'] = isset($data['agentEnable']) ? $data['agentEnable'] : null;
        $this->container['podConnectAddress'] = isset($data['podConnectAddress']) ? $data['podConnectAddress'] : null;
        $this->container['diskEncrypted'] = isset($data['diskEncrypted']) ? $data['diskEncrypted'] : null;
        $this->container['diskEncryptedKey'] = isset($data['diskEncryptedKey']) ? $data['diskEncryptedKey'] : null;
        $this->container['kafkaPrivateConnectAddress'] = isset($data['kafkaPrivateConnectAddress']) ? $data['kafkaPrivateConnectAddress'] : null;
        $this->container['cesVersion'] = isset($data['cesVersion']) ? $data['cesVersion'] : null;
        $this->container['publicAccessEnabled'] = isset($data['publicAccessEnabled']) ? $data['publicAccessEnabled'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['enableAcl'] = isset($data['enableAcl']) ? $data['enableAcl'] : null;
        $this->container['newSpecBillingEnable'] = isset($data['newSpecBillingEnable']) ? $data['newSpecBillingEnable'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['drEnable'] = isset($data['drEnable']) ? $data['drEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRetentionPolicyAllowableValues();
                if (!is_null($this->container['retentionPolicy']) && !in_array($this->container['retentionPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'retentionPolicy', must be one of '%s'",
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
    * Gets engine
    *  引擎。
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
    * @param string|null $engine 引擎。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets engineVersion
    *  版本。
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
    * @param string|null $engineVersion 版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
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
    * Gets specification
    *  实例规格。
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 实例规格。
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets storageSpace
    *  消息存储空间，单位：GB。
    *
    * @return int|null
    */
    public function getStorageSpace()
    {
        return $this->container['storageSpace'];
    }

    /**
    * Sets storageSpace
    *
    * @param int|null $storageSpace 消息存储空间，单位：GB。
    *
    * @return $this
    */
    public function setStorageSpace($storageSpace)
    {
        $this->container['storageSpace'] = $storageSpace;
        return $this;
    }

    /**
    * Gets partitionNum
    *  Kafka实例的分区数量。
    *
    * @return string|null
    */
    public function getPartitionNum()
    {
        return $this->container['partitionNum'];
    }

    /**
    * Sets partitionNum
    *
    * @param string|null $partitionNum Kafka实例的分区数量。
    *
    * @return $this
    */
    public function setPartitionNum($partitionNum)
    {
        $this->container['partitionNum'] = $partitionNum;
        return $this;
    }

    /**
    * Gets usedStorageSpace
    *  已使用的消息存储空间，单位：GB。
    *
    * @return int|null
    */
    public function getUsedStorageSpace()
    {
        return $this->container['usedStorageSpace'];
    }

    /**
    * Sets usedStorageSpace
    *
    * @param int|null $usedStorageSpace 已使用的消息存储空间，单位：GB。
    *
    * @return $this
    */
    public function setUsedStorageSpace($usedStorageSpace)
    {
        $this->container['usedStorageSpace'] = $usedStorageSpace;
        return $this;
    }

    /**
    * Gets connectAddress
    *  实例连接IP地址。
    *
    * @return string|null
    */
    public function getConnectAddress()
    {
        return $this->container['connectAddress'];
    }

    /**
    * Sets connectAddress
    *
    * @param string|null $connectAddress 实例连接IP地址。
    *
    * @return $this
    */
    public function setConnectAddress($connectAddress)
    {
        $this->container['connectAddress'] = $connectAddress;
        return $this;
    }

    /**
    * Gets port
    *  实例连接端口。
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
    * @param int|null $port 实例连接端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets status
    *  实例的状态。详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
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
    * @param string|null $status 实例的状态。详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets resourceSpecCode
    *  资源规格标识。   - dms.instance.kafka.cluster.c3.mini：Kafka实例的基准带宽为100MByte/秒。   - dms.instance.kafka.cluster.c3.small.2：Kafka实例的基准带宽为300MByte/秒。   - dms.instance.kafka.cluster.c3.middle.2：Kafka实例的基准带宽为600MByte/秒。   - dms.instance.kafka.cluster.c3.high.2：Kafka实例的基准带宽为1200MByte/秒。
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 资源规格标识。   - dms.instance.kafka.cluster.c3.mini：Kafka实例的基准带宽为100MByte/秒。   - dms.instance.kafka.cluster.c3.small.2：Kafka实例的基准带宽为300MByte/秒。   - dms.instance.kafka.cluster.c3.middle.2：Kafka实例的基准带宽为600MByte/秒。   - dms.instance.kafka.cluster.c3.high.2：Kafka实例的基准带宽为1200MByte/秒。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets chargingMode
    *  [付费模式，1表示按需计费，0表示包年/包月计费。](tag:hws,hws_hk,ctc,sbc,hk_sbc,cmcc,hws_eu)[付费模式，暂未使用。](tag:hws_ocb,ocb) [付费模式，1表示按需计费。](tag:otc,dt,g42,tm,hk_g42,hk_tm)
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
    * @param int|null $chargingMode [付费模式，1表示按需计费，0表示包年/包月计费。](tag:hws,hws_hk,ctc,sbc,hk_sbc,cmcc,hws_eu)[付费模式，暂未使用。](tag:hws_ocb,ocb) [付费模式，1表示按需计费。](tag:otc,dt,g42,tm,hk_g42,hk_tm)
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
    *  VPC ID。
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
    * @param string|null $vpcId VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
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
    * Gets createdAt
    *  完成创建时间。  格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
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
    * @param string|null $createdAt 完成创建时间。  格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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
    * Gets userId
    *  用户ID。
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
    * @param string|null $userId 用户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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
    * Gets accessUser
    *  实例访问用户名。
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
    * @param string|null $accessUser 实例访问用户名。
    *
    * @return $this
    */
    public function setAccessUser($accessUser)
    {
        $this->container['accessUser'] = $accessUser;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
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
    * @param string|null $orderId 订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  维护时间窗开始时间，格式为HH:mm:ss。
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
    * @param string|null $maintainBegin 维护时间窗开始时间，格式为HH:mm:ss。
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
    *  维护时间窗结束时间，格式为HH:mm:ss。
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
    * @param string|null $maintainEnd 维护时间窗结束时间，格式为HH:mm:ss。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets enablePublicip
    *  实例是否开启公网访问功能。 - true：开启 - false：未开启
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
    * @param bool|null $enablePublicip 实例是否开启公网访问功能。 - true：开启 - false：未开启
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets managementConnectAddress
    *  Kafka实例的Kafka Manager连接地址。
    *
    * @return string|null
    */
    public function getManagementConnectAddress()
    {
        return $this->container['managementConnectAddress'];
    }

    /**
    * Sets managementConnectAddress
    *
    * @param string|null $managementConnectAddress Kafka实例的Kafka Manager连接地址。
    *
    * @return $this
    */
    public function setManagementConnectAddress($managementConnectAddress)
    {
        $this->container['managementConnectAddress'] = $managementConnectAddress;
        return $this;
    }

    /**
    * Gets sslEnable
    *  是否开启安全认证。 - true：开启 - false：未开启
    *
    * @return bool|null
    */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
    * Sets sslEnable
    *
    * @param bool|null $sslEnable 是否开启安全认证。 - true：开启 - false：未开启
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets kafkaSecurityProtocol
    *  开启SASL后使用的安全协议。 - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    *
    * @return string|null
    */
    public function getKafkaSecurityProtocol()
    {
        return $this->container['kafkaSecurityProtocol'];
    }

    /**
    * Sets kafkaSecurityProtocol
    *
    * @param string|null $kafkaSecurityProtocol 开启SASL后使用的安全协议。 - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    *
    * @return $this
    */
    public function setKafkaSecurityProtocol($kafkaSecurityProtocol)
    {
        $this->container['kafkaSecurityProtocol'] = $kafkaSecurityProtocol;
        return $this;
    }

    /**
    * Gets saslEnabledMechanisms
    *  开启SASL后使用的认证机制。 - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    *
    * @return string[]|null
    */
    public function getSaslEnabledMechanisms()
    {
        return $this->container['saslEnabledMechanisms'];
    }

    /**
    * Sets saslEnabledMechanisms
    *
    * @param string[]|null $saslEnabledMechanisms 开启SASL后使用的认证机制。 - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    *
    * @return $this
    */
    public function setSaslEnabledMechanisms($saslEnabledMechanisms)
    {
        $this->container['saslEnabledMechanisms'] = $saslEnabledMechanisms;
        return $this;
    }

    /**
    * Gets sslTwoWayEnable
    *  是否开启双向认证。
    *
    * @return bool|null
    */
    public function getSslTwoWayEnable()
    {
        return $this->container['sslTwoWayEnable'];
    }

    /**
    * Sets sslTwoWayEnable
    *
    * @param bool|null $sslTwoWayEnable 是否开启双向认证。
    *
    * @return $this
    */
    public function setSslTwoWayEnable($sslTwoWayEnable)
    {
        $this->container['sslTwoWayEnable'] = $sslTwoWayEnable;
        return $this;
    }

    /**
    * Gets certReplaced
    *  是否能够证书替换。
    *
    * @return bool|null
    */
    public function getCertReplaced()
    {
        return $this->container['certReplaced'];
    }

    /**
    * Sets certReplaced
    *
    * @param bool|null $certReplaced 是否能够证书替换。
    *
    * @return $this
    */
    public function setCertReplaced($certReplaced)
    {
        $this->container['certReplaced'] = $certReplaced;
        return $this;
    }

    /**
    * Gets publicManagementConnectAddress
    *  公网访问Kafka Manager连接地址。
    *
    * @return string|null
    */
    public function getPublicManagementConnectAddress()
    {
        return $this->container['publicManagementConnectAddress'];
    }

    /**
    * Sets publicManagementConnectAddress
    *
    * @param string|null $publicManagementConnectAddress 公网访问Kafka Manager连接地址。
    *
    * @return $this
    */
    public function setPublicManagementConnectAddress($publicManagementConnectAddress)
    {
        $this->container['publicManagementConnectAddress'] = $publicManagementConnectAddress;
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
    * Gets isLogicalVolume
    *  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    *
    * @return bool|null
    */
    public function getIsLogicalVolume()
    {
        return $this->container['isLogicalVolume'];
    }

    /**
    * Sets isLogicalVolume
    *
    * @param bool|null $isLogicalVolume 实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    *
    * @return $this
    */
    public function setIsLogicalVolume($isLogicalVolume)
    {
        $this->container['isLogicalVolume'] = $isLogicalVolume;
        return $this;
    }

    /**
    * Gets extendTimes
    *  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    *
    * @return int|null
    */
    public function getExtendTimes()
    {
        return $this->container['extendTimes'];
    }

    /**
    * Sets extendTimes
    *
    * @param int|null $extendTimes 实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    *
    * @return $this
    */
    public function setExtendTimes($extendTimes)
    {
        $this->container['extendTimes'] = $extendTimes;
        return $this;
    }

    /**
    * Gets enableAutoTopic
    *  是否打开kafka自动创建topic功能。   - true：开启   - false：关闭
    *
    * @return bool|null
    */
    public function getEnableAutoTopic()
    {
        return $this->container['enableAutoTopic'];
    }

    /**
    * Sets enableAutoTopic
    *
    * @param bool|null $enableAutoTopic 是否打开kafka自动创建topic功能。   - true：开启   - false：关闭
    *
    * @return $this
    */
    public function setEnableAutoTopic($enableAutoTopic)
    {
        $this->container['enableAutoTopic'] = $enableAutoTopic;
        return $this;
    }

    /**
    * Gets type
    *  实例类型：集群，cluster。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 实例类型：集群，cluster。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets productId
    *  产品标识。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品标识。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
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
    * Gets availableZones
    *  实例节点所在的可用区，返回“可用区ID”。
    *
    * @return string[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[]|null $availableZones 实例节点所在的可用区，返回“可用区ID”。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets totalStorageSpace
    *  总共消息存储空间，单位：GB。
    *
    * @return int|null
    */
    public function getTotalStorageSpace()
    {
        return $this->container['totalStorageSpace'];
    }

    /**
    * Sets totalStorageSpace
    *
    * @param int|null $totalStorageSpace 总共消息存储空间，单位：GB。
    *
    * @return $this
    */
    public function setTotalStorageSpace($totalStorageSpace)
    {
        $this->container['totalStorageSpace'] = $totalStorageSpace;
        return $this;
    }

    /**
    * Gets publicConnectAddress
    *  实例公网连接IP地址。当实例开启了公网访问，实例才包含该参数。
    *
    * @return string|null
    */
    public function getPublicConnectAddress()
    {
        return $this->container['publicConnectAddress'];
    }

    /**
    * Sets publicConnectAddress
    *
    * @param string|null $publicConnectAddress 实例公网连接IP地址。当实例开启了公网访问，实例才包含该参数。
    *
    * @return $this
    */
    public function setPublicConnectAddress($publicConnectAddress)
    {
        $this->container['publicConnectAddress'] = $publicConnectAddress;
        return $this;
    }

    /**
    * Gets storageResourceId
    *  存储资源ID。
    *
    * @return string|null
    */
    public function getStorageResourceId()
    {
        return $this->container['storageResourceId'];
    }

    /**
    * Sets storageResourceId
    *
    * @param string|null $storageResourceId 存储资源ID。
    *
    * @return $this
    */
    public function setStorageResourceId($storageResourceId)
    {
        $this->container['storageResourceId'] = $storageResourceId;
        return $this;
    }

    /**
    * Gets storageSpecCode
    *  IO规格。
    *
    * @return string|null
    */
    public function getStorageSpecCode()
    {
        return $this->container['storageSpecCode'];
    }

    /**
    * Sets storageSpecCode
    *
    * @param string|null $storageSpecCode IO规格。
    *
    * @return $this
    */
    public function setStorageSpecCode($storageSpecCode)
    {
        $this->container['storageSpecCode'] = $storageSpecCode;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 服务类型。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets storageType
    *  存储类型。
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
    * @param string|null $storageType 存储类型。
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets retentionPolicy
    *  消息老化策略。
    *
    * @return string|null
    */
    public function getRetentionPolicy()
    {
        return $this->container['retentionPolicy'];
    }

    /**
    * Sets retentionPolicy
    *
    * @param string|null $retentionPolicy 消息老化策略。
    *
    * @return $this
    */
    public function setRetentionPolicy($retentionPolicy)
    {
        $this->container['retentionPolicy'] = $retentionPolicy;
        return $this;
    }

    /**
    * Gets kafkaPublicStatus
    *  Kafka公网开启状态。
    *
    * @return string|null
    */
    public function getKafkaPublicStatus()
    {
        return $this->container['kafkaPublicStatus'];
    }

    /**
    * Sets kafkaPublicStatus
    *
    * @param string|null $kafkaPublicStatus Kafka公网开启状态。
    *
    * @return $this
    */
    public function setKafkaPublicStatus($kafkaPublicStatus)
    {
        $this->container['kafkaPublicStatus'] = $kafkaPublicStatus;
        return $this;
    }

    /**
    * Gets publicBandwidth
    *  kafka公网访问带宽。
    *
    * @return int|null
    */
    public function getPublicBandwidth()
    {
        return $this->container['publicBandwidth'];
    }

    /**
    * Sets publicBandwidth
    *
    * @param int|null $publicBandwidth kafka公网访问带宽。
    *
    * @return $this
    */
    public function setPublicBandwidth($publicBandwidth)
    {
        $this->container['publicBandwidth'] = $publicBandwidth;
        return $this;
    }

    /**
    * Gets kafkaManagerEnable
    *  是否已开启kafka manager
    *
    * @return bool|null
    */
    public function getKafkaManagerEnable()
    {
        return $this->container['kafkaManagerEnable'];
    }

    /**
    * Sets kafkaManagerEnable
    *
    * @param bool|null $kafkaManagerEnable 是否已开启kafka manager
    *
    * @return $this
    */
    public function setKafkaManagerEnable($kafkaManagerEnable)
    {
        $this->container['kafkaManagerEnable'] = $kafkaManagerEnable;
        return $this;
    }

    /**
    * Gets kafkaManagerUser
    *  登录Kafka Manager的用户名。
    *
    * @return string|null
    */
    public function getKafkaManagerUser()
    {
        return $this->container['kafkaManagerUser'];
    }

    /**
    * Sets kafkaManagerUser
    *
    * @param string|null $kafkaManagerUser 登录Kafka Manager的用户名。
    *
    * @return $this
    */
    public function setKafkaManagerUser($kafkaManagerUser)
    {
        $this->container['kafkaManagerUser'] = $kafkaManagerUser;
        return $this;
    }

    /**
    * Gets enableLogCollection
    *  是否开启消息收集功能。
    *
    * @return bool|null
    */
    public function getEnableLogCollection()
    {
        return $this->container['enableLogCollection'];
    }

    /**
    * Sets enableLogCollection
    *
    * @param bool|null $enableLogCollection 是否开启消息收集功能。
    *
    * @return $this
    */
    public function setEnableLogCollection($enableLogCollection)
    {
        $this->container['enableLogCollection'] = $enableLogCollection;
        return $this;
    }

    /**
    * Gets crossVpcInfo
    *  跨VPC访问信息。
    *
    * @return string|null
    */
    public function getCrossVpcInfo()
    {
        return $this->container['crossVpcInfo'];
    }

    /**
    * Sets crossVpcInfo
    *
    * @param string|null $crossVpcInfo 跨VPC访问信息。
    *
    * @return $this
    */
    public function setCrossVpcInfo($crossVpcInfo)
    {
        $this->container['crossVpcInfo'] = $crossVpcInfo;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否开启ipv6。
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 是否开启ipv6。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets ipv6ConnectAddresses
    *  IPv6的连接地址。
    *
    * @return string[]|null
    */
    public function getIpv6ConnectAddresses()
    {
        return $this->container['ipv6ConnectAddresses'];
    }

    /**
    * Sets ipv6ConnectAddresses
    *
    * @param string[]|null $ipv6ConnectAddresses IPv6的连接地址。
    *
    * @return $this
    */
    public function setIpv6ConnectAddresses($ipv6ConnectAddresses)
    {
        $this->container['ipv6ConnectAddresses'] = $ipv6ConnectAddresses;
        return $this;
    }

    /**
    * Gets connectorEnable
    *  是否开启转储。新规格产品暂不支持开启转储。
    *
    * @return bool|null
    */
    public function getConnectorEnable()
    {
        return $this->container['connectorEnable'];
    }

    /**
    * Sets connectorEnable
    *
    * @param bool|null $connectorEnable 是否开启转储。新规格产品暂不支持开启转储。
    *
    * @return $this
    */
    public function setConnectorEnable($connectorEnable)
    {
        $this->container['connectorEnable'] = $connectorEnable;
        return $this;
    }

    /**
    * Gets connectorId
    *  转储任务ID。
    *
    * @return string|null
    */
    public function getConnectorId()
    {
        return $this->container['connectorId'];
    }

    /**
    * Sets connectorId
    *
    * @param string|null $connectorId 转储任务ID。
    *
    * @return $this
    */
    public function setConnectorId($connectorId)
    {
        $this->container['connectorId'] = $connectorId;
        return $this;
    }

    /**
    * Gets restEnable
    *  是否开启Kafka rest功能。
    *
    * @return bool|null
    */
    public function getRestEnable()
    {
        return $this->container['restEnable'];
    }

    /**
    * Sets restEnable
    *
    * @param bool|null $restEnable 是否开启Kafka rest功能。
    *
    * @return $this
    */
    public function setRestEnable($restEnable)
    {
        $this->container['restEnable'] = $restEnable;
        return $this;
    }

    /**
    * Gets restConnectAddress
    *  Kafka rest连接地址。
    *
    * @return string|null
    */
    public function getRestConnectAddress()
    {
        return $this->container['restConnectAddress'];
    }

    /**
    * Sets restConnectAddress
    *
    * @param string|null $restConnectAddress Kafka rest连接地址。
    *
    * @return $this
    */
    public function setRestConnectAddress($restConnectAddress)
    {
        $this->container['restConnectAddress'] = $restConnectAddress;
        return $this;
    }

    /**
    * Gets publicBoundwidth
    *  kafka公网访问带宽。待删除版本。
    *
    * @return int|null
    */
    public function getPublicBoundwidth()
    {
        return $this->container['publicBoundwidth'];
    }

    /**
    * Sets publicBoundwidth
    *
    * @param int|null $publicBoundwidth kafka公网访问带宽。待删除版本。
    *
    * @return $this
    */
    public function setPublicBoundwidth($publicBoundwidth)
    {
        $this->container['publicBoundwidth'] = $publicBoundwidth;
        return $this;
    }

    /**
    * Gets messageQueryInstEnable
    *  是否开启消息查询功能。
    *
    * @return bool|null
    */
    public function getMessageQueryInstEnable()
    {
        return $this->container['messageQueryInstEnable'];
    }

    /**
    * Sets messageQueryInstEnable
    *
    * @param bool|null $messageQueryInstEnable 是否开启消息查询功能。
    *
    * @return $this
    */
    public function setMessageQueryInstEnable($messageQueryInstEnable)
    {
        $this->container['messageQueryInstEnable'] = $messageQueryInstEnable;
        return $this;
    }

    /**
    * Gets vpcClientPlain
    *  是否开启VPC明文访问。
    *
    * @return bool|null
    */
    public function getVpcClientPlain()
    {
        return $this->container['vpcClientPlain'];
    }

    /**
    * Sets vpcClientPlain
    *
    * @param bool|null $vpcClientPlain 是否开启VPC明文访问。
    *
    * @return $this
    */
    public function setVpcClientPlain($vpcClientPlain)
    {
        $this->container['vpcClientPlain'] = $vpcClientPlain;
        return $this;
    }

    /**
    * Gets supportFeatures
    *  Kafka实例支持的特性功能。
    *
    * @return string|null
    */
    public function getSupportFeatures()
    {
        return $this->container['supportFeatures'];
    }

    /**
    * Sets supportFeatures
    *
    * @param string|null $supportFeatures Kafka实例支持的特性功能。
    *
    * @return $this
    */
    public function setSupportFeatures($supportFeatures)
    {
        $this->container['supportFeatures'] = $supportFeatures;
        return $this;
    }

    /**
    * Gets traceEnable
    *  是否开启消息轨迹功能。
    *
    * @return bool|null
    */
    public function getTraceEnable()
    {
        return $this->container['traceEnable'];
    }

    /**
    * Sets traceEnable
    *
    * @param bool|null $traceEnable 是否开启消息轨迹功能。
    *
    * @return $this
    */
    public function setTraceEnable($traceEnable)
    {
        $this->container['traceEnable'] = $traceEnable;
        return $this;
    }

    /**
    * Gets agentEnable
    *  是否开启代理。
    *
    * @return bool|null
    */
    public function getAgentEnable()
    {
        return $this->container['agentEnable'];
    }

    /**
    * Sets agentEnable
    *
    * @param bool|null $agentEnable 是否开启代理。
    *
    * @return $this
    */
    public function setAgentEnable($agentEnable)
    {
        $this->container['agentEnable'] = $agentEnable;
        return $this;
    }

    /**
    * Gets podConnectAddress
    *  租户侧连接地址。
    *
    * @return string|null
    */
    public function getPodConnectAddress()
    {
        return $this->container['podConnectAddress'];
    }

    /**
    * Sets podConnectAddress
    *
    * @param string|null $podConnectAddress 租户侧连接地址。
    *
    * @return $this
    */
    public function setPodConnectAddress($podConnectAddress)
    {
        $this->container['podConnectAddress'] = $podConnectAddress;
        return $this;
    }

    /**
    * Gets diskEncrypted
    *  是否开启磁盘加密。
    *
    * @return bool|null
    */
    public function getDiskEncrypted()
    {
        return $this->container['diskEncrypted'];
    }

    /**
    * Sets diskEncrypted
    *
    * @param bool|null $diskEncrypted 是否开启磁盘加密。
    *
    * @return $this
    */
    public function setDiskEncrypted($diskEncrypted)
    {
        $this->container['diskEncrypted'] = $diskEncrypted;
        return $this;
    }

    /**
    * Gets diskEncryptedKey
    *  磁盘加密key，未开启磁盘加密时为空。
    *
    * @return string|null
    */
    public function getDiskEncryptedKey()
    {
        return $this->container['diskEncryptedKey'];
    }

    /**
    * Sets diskEncryptedKey
    *
    * @param string|null $diskEncryptedKey 磁盘加密key，未开启磁盘加密时为空。
    *
    * @return $this
    */
    public function setDiskEncryptedKey($diskEncryptedKey)
    {
        $this->container['diskEncryptedKey'] = $diskEncryptedKey;
        return $this;
    }

    /**
    * Gets kafkaPrivateConnectAddress
    *  Kafka实例私有连接地址。
    *
    * @return string|null
    */
    public function getKafkaPrivateConnectAddress()
    {
        return $this->container['kafkaPrivateConnectAddress'];
    }

    /**
    * Sets kafkaPrivateConnectAddress
    *
    * @param string|null $kafkaPrivateConnectAddress Kafka实例私有连接地址。
    *
    * @return $this
    */
    public function setKafkaPrivateConnectAddress($kafkaPrivateConnectAddress)
    {
        $this->container['kafkaPrivateConnectAddress'] = $kafkaPrivateConnectAddress;
        return $this;
    }

    /**
    * Gets cesVersion
    *  云监控版本。
    *
    * @return string|null
    */
    public function getCesVersion()
    {
        return $this->container['cesVersion'];
    }

    /**
    * Sets cesVersion
    *
    * @param string|null $cesVersion 云监控版本。
    *
    * @return $this
    */
    public function setCesVersion($cesVersion)
    {
        $this->container['cesVersion'] = $cesVersion;
        return $this;
    }

    /**
    * Gets publicAccessEnabled
    *  区分实例什么时候开启的公网访问：true,actived,closed,false。
    *
    * @return string|null
    */
    public function getPublicAccessEnabled()
    {
        return $this->container['publicAccessEnabled'];
    }

    /**
    * Sets publicAccessEnabled
    *
    * @param string|null $publicAccessEnabled 区分实例什么时候开启的公网访问：true,actived,closed,false。
    *
    * @return $this
    */
    public function setPublicAccessEnabled($publicAccessEnabled)
    {
        $this->container['publicAccessEnabled'] = $publicAccessEnabled;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点数。
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
    * @param int|null $nodeNum 节点数。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets enableAcl
    *  是否开启访问控制。
    *
    * @return bool|null
    */
    public function getEnableAcl()
    {
        return $this->container['enableAcl'];
    }

    /**
    * Sets enableAcl
    *
    * @param bool|null $enableAcl 是否开启访问控制。
    *
    * @return $this
    */
    public function setEnableAcl($enableAcl)
    {
        $this->container['enableAcl'] = $enableAcl;
        return $this;
    }

    /**
    * Gets newSpecBillingEnable
    *  是否启用新规格计费。
    *
    * @return bool|null
    */
    public function getNewSpecBillingEnable()
    {
        return $this->container['newSpecBillingEnable'];
    }

    /**
    * Sets newSpecBillingEnable
    *
    * @param bool|null $newSpecBillingEnable 是否启用新规格计费。
    *
    * @return $this
    */
    public function setNewSpecBillingEnable($newSpecBillingEnable)
    {
        $this->container['newSpecBillingEnable'] = $newSpecBillingEnable;
        return $this;
    }

    /**
    * Gets brokerNum
    *  节点数量。
    *
    * @return int|null
    */
    public function getBrokerNum()
    {
        return $this->container['brokerNum'];
    }

    /**
    * Sets brokerNum
    *
    * @param int|null $brokerNum 节点数量。
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\TagEntity[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\TagEntity[]|null $tags 标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets drEnable
    *  是否为容灾实例。
    *
    * @return bool|null
    */
    public function getDrEnable()
    {
        return $this->container['drEnable'];
    }

    /**
    * Sets drEnable
    *
    * @param bool|null $drEnable 是否为容灾实例。
    *
    * @return $this
    */
    public function setDrEnable($drEnable)
    {
        $this->container['drEnable'] = $drEnable;
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

