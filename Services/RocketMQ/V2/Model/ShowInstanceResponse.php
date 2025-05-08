<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

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
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * description  **参数解释**： 消息描述。 **取值范围**： 不涉及。
    * type  **参数解释**： 实例类型。 **取值范围**： - single：单机。 - cluster：集群。
    * specification  **参数解释**： 实例规格。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 实例版本。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * chargingMode  **参数解释**： 付费模式。 **取值范围**： [1表示按需计费。](tag:hws_eu,g42,hk_g42,tm,sbc,hk_sbc,hk_tm)[1表示按需计费，0表示包年/包月计费。](tag:hws,hws_eu,hws_hk,ctc) [计费模式，参数暂未使用。](tag:ocb,hws_ocb,hcs,fcs)
    * vpcId  **参数解释**： 私有云ID。 **取值范围**： 不涉及。
    * vpcName  **参数解释**： 私有云名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 完成创建时间。  格式为时间戳，指从格林威治时间1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品标识。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * securityGroupName  **参数解释**： 安全组名称。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * subnetName  **参数解释**： 子网名称。 **取值范围**： 不涉及。
    * subnetCidr  **参数解释**： 子网路由（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 可用区ID列表。 **取值范围**： 不涉及。
    * availableZoneNames  **参数解释**： 可用区名称列表。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * enableLogCollection  **参数解释**： 是否开启消息收集功能。 **取值范围**： - true：开启。 - false：不开启。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **取值范围**： 不涉及。
    * usedStorageSpace  **参数解释**： 已用消息存储空间，单位：GB。 **取值范围**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网。 **取值范围**： - true：开启。 - false：不开启。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。
    * publicipAddress  **参数解释**： 公网IP地址。 **取值范围**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL。 **取值范围**： - true：开启。 - false：未开启。
    * crossVpcInfo  **参数解释**： 跨VPC访问信息。 **取值范围**： 不涉及。
    * storageResourceId  **参数解释**： 存储资源ID。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： 存储规格代码。 **取值范围**： 不涉及。
    * serviceType  **参数解释**： 服务类型。 **取值范围**： 不涉及。
    * storageType  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * extendTimes  **参数解释**： 扩展时间。 **取值范围**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **取值范围**： - true：开启。 - false：未开启。
    * supportFeatures  **参数解释**： 实例支持的特性功能。 **取值范围**： 不涉及。
    * diskEncrypted  **参数解释**： 是否开启磁盘加密。 **取值范围**： - true：开启。 - false：不开启。
    * cesVersion  **参数解释**： 云监控版本。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 节点数。 **取值范围**： 不涉及。
    * newSpecBillingEnable  **参数解释**： 是否启用新规格计费。 **取值范围**： - true：开启。 - false：未开启。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **取值范围**： - true：开启。 - false：未开启。
    * brokerNum  **参数解释**： Broker节点数（仅RocketMQ 4.8.0版本会显示此字段）。 **取值范围**： 不涉及。
    * dnsEnable  **参数解释**： 实例是否开启域名访问功能。 **取值范围**： - true：开启。 - false：未开启。
    * namesrvAddress  **参数解释**： 元数据地址。 **取值范围**： 不涉及。
    * namesrvDomainName  **参数解释**： 元数据域名。 **取值范围**： 不涉及。
    * brokerAddress  **参数解释**： 业务数据地址。 **取值范围**： 不涉及。
    * publicNamesrvAddress  **参数解释**： 公网元数据地址。 **取值范围**： 不涉及。
    * publicNamesrvDomainName  **参数解释**： 公网元数据域名。 **取值范围**： 不涉及。
    * publicBrokerAddress  **参数解释**： 公网业务数据地址。 **取值范围**： 不涉及。
    * grpcAddress  **参数解释**： grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * grpcDomainName  **参数解释**： grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcAddress  **参数解释**： 公网grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcDomainName  **参数解释**： 公网grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 不涉及。
    * tags  **参数解释**： 标签列表。 **取值范围**： 不涉及。
    * totalStorageSpace  **参数解释**： 总存储空间。 **取值范围**： 不涉及。
    * resourceSpecCode  **参数解释**： 资源规格。 **取值范围**： 不涉及。
    * producePortion  **参数解释**： 生产TPS占比。 **取值范围**： 不涉及。
    * consumePortion  **参数解释**： 消费TPS占比。 **取值范围**： 不涉及。
    * drEnable  **参数解释**： 是否为容灾实例。 **取值范围**： 不涉及。
    * configSslNeedRestartProcess  **参数解释**： 配置ssl是否需要重启。 **取值范围**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'engine' => 'string',
            'status' => 'string',
            'description' => 'string',
            'type' => 'string',
            'specification' => 'string',
            'engineVersion' => 'string',
            'instanceId' => 'string',
            'chargingMode' => 'int',
            'vpcId' => 'string',
            'vpcName' => 'string',
            'createdAt' => 'string',
            'productId' => 'string',
            'securityGroupId' => 'string',
            'securityGroupName' => 'string',
            'subnetId' => 'string',
            'subnetName' => 'string',
            'subnetCidr' => 'string',
            'availableZones' => 'string[]',
            'availableZoneNames' => 'string[]',
            'userId' => 'string',
            'userName' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'enableLogCollection' => 'bool',
            'storageSpace' => 'int',
            'usedStorageSpace' => 'int',
            'enablePublicip' => 'bool',
            'publicipId' => 'string',
            'publicipAddress' => 'string',
            'sslEnable' => 'bool',
            'crossVpcInfo' => 'string',
            'storageResourceId' => 'string',
            'storageSpecCode' => 'string',
            'serviceType' => 'string',
            'storageType' => 'string',
            'extendTimes' => 'int',
            'ipv6Enable' => 'bool',
            'supportFeatures' => 'string',
            'diskEncrypted' => 'bool',
            'cesVersion' => 'string',
            'nodeNum' => 'int',
            'newSpecBillingEnable' => 'bool',
            'enableAcl' => 'bool',
            'brokerNum' => 'int',
            'dnsEnable' => 'bool',
            'namesrvAddress' => 'string',
            'namesrvDomainName' => 'string',
            'brokerAddress' => 'string',
            'publicNamesrvAddress' => 'string',
            'publicNamesrvDomainName' => 'string',
            'publicBrokerAddress' => 'string',
            'grpcAddress' => 'string',
            'grpcDomainName' => 'string',
            'publicGrpcAddress' => 'string',
            'publicGrpcDomainName' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\TagEntity[]',
            'totalStorageSpace' => 'int',
            'resourceSpecCode' => 'string',
            'producePortion' => 'int',
            'consumePortion' => 'int',
            'drEnable' => 'bool',
            'configSslNeedRestartProcess' => 'bool',
            'tlsMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * description  **参数解释**： 消息描述。 **取值范围**： 不涉及。
    * type  **参数解释**： 实例类型。 **取值范围**： - single：单机。 - cluster：集群。
    * specification  **参数解释**： 实例规格。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 实例版本。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * chargingMode  **参数解释**： 付费模式。 **取值范围**： [1表示按需计费。](tag:hws_eu,g42,hk_g42,tm,sbc,hk_sbc,hk_tm)[1表示按需计费，0表示包年/包月计费。](tag:hws,hws_eu,hws_hk,ctc) [计费模式，参数暂未使用。](tag:ocb,hws_ocb,hcs,fcs)
    * vpcId  **参数解释**： 私有云ID。 **取值范围**： 不涉及。
    * vpcName  **参数解释**： 私有云名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 完成创建时间。  格式为时间戳，指从格林威治时间1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品标识。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * securityGroupName  **参数解释**： 安全组名称。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * subnetName  **参数解释**： 子网名称。 **取值范围**： 不涉及。
    * subnetCidr  **参数解释**： 子网路由（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 可用区ID列表。 **取值范围**： 不涉及。
    * availableZoneNames  **参数解释**： 可用区名称列表。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * enableLogCollection  **参数解释**： 是否开启消息收集功能。 **取值范围**： - true：开启。 - false：不开启。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **取值范围**： 不涉及。
    * usedStorageSpace  **参数解释**： 已用消息存储空间，单位：GB。 **取值范围**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网。 **取值范围**： - true：开启。 - false：不开启。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。
    * publicipAddress  **参数解释**： 公网IP地址。 **取值范围**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL。 **取值范围**： - true：开启。 - false：未开启。
    * crossVpcInfo  **参数解释**： 跨VPC访问信息。 **取值范围**： 不涉及。
    * storageResourceId  **参数解释**： 存储资源ID。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： 存储规格代码。 **取值范围**： 不涉及。
    * serviceType  **参数解释**： 服务类型。 **取值范围**： 不涉及。
    * storageType  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * extendTimes  **参数解释**： 扩展时间。 **取值范围**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **取值范围**： - true：开启。 - false：未开启。
    * supportFeatures  **参数解释**： 实例支持的特性功能。 **取值范围**： 不涉及。
    * diskEncrypted  **参数解释**： 是否开启磁盘加密。 **取值范围**： - true：开启。 - false：不开启。
    * cesVersion  **参数解释**： 云监控版本。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 节点数。 **取值范围**： 不涉及。
    * newSpecBillingEnable  **参数解释**： 是否启用新规格计费。 **取值范围**： - true：开启。 - false：未开启。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **取值范围**： - true：开启。 - false：未开启。
    * brokerNum  **参数解释**： Broker节点数（仅RocketMQ 4.8.0版本会显示此字段）。 **取值范围**： 不涉及。
    * dnsEnable  **参数解释**： 实例是否开启域名访问功能。 **取值范围**： - true：开启。 - false：未开启。
    * namesrvAddress  **参数解释**： 元数据地址。 **取值范围**： 不涉及。
    * namesrvDomainName  **参数解释**： 元数据域名。 **取值范围**： 不涉及。
    * brokerAddress  **参数解释**： 业务数据地址。 **取值范围**： 不涉及。
    * publicNamesrvAddress  **参数解释**： 公网元数据地址。 **取值范围**： 不涉及。
    * publicNamesrvDomainName  **参数解释**： 公网元数据域名。 **取值范围**： 不涉及。
    * publicBrokerAddress  **参数解释**： 公网业务数据地址。 **取值范围**： 不涉及。
    * grpcAddress  **参数解释**： grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * grpcDomainName  **参数解释**： grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcAddress  **参数解释**： 公网grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcDomainName  **参数解释**： 公网grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 不涉及。
    * tags  **参数解释**： 标签列表。 **取值范围**： 不涉及。
    * totalStorageSpace  **参数解释**： 总存储空间。 **取值范围**： 不涉及。
    * resourceSpecCode  **参数解释**： 资源规格。 **取值范围**： 不涉及。
    * producePortion  **参数解释**： 生产TPS占比。 **取值范围**： 不涉及。
    * consumePortion  **参数解释**： 消费TPS占比。 **取值范围**： 不涉及。
    * drEnable  **参数解释**： 是否为容灾实例。 **取值范围**： 不涉及。
    * configSslNeedRestartProcess  **参数解释**： 配置ssl是否需要重启。 **取值范围**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'engine' => null,
        'status' => null,
        'description' => null,
        'type' => null,
        'specification' => null,
        'engineVersion' => null,
        'instanceId' => null,
        'chargingMode' => null,
        'vpcId' => null,
        'vpcName' => null,
        'createdAt' => null,
        'productId' => null,
        'securityGroupId' => null,
        'securityGroupName' => null,
        'subnetId' => null,
        'subnetName' => null,
        'subnetCidr' => null,
        'availableZones' => null,
        'availableZoneNames' => null,
        'userId' => null,
        'userName' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'enableLogCollection' => null,
        'storageSpace' => 'int32',
        'usedStorageSpace' => 'int32',
        'enablePublicip' => null,
        'publicipId' => null,
        'publicipAddress' => null,
        'sslEnable' => null,
        'crossVpcInfo' => null,
        'storageResourceId' => null,
        'storageSpecCode' => null,
        'serviceType' => null,
        'storageType' => null,
        'extendTimes' => 'int64',
        'ipv6Enable' => null,
        'supportFeatures' => null,
        'diskEncrypted' => null,
        'cesVersion' => null,
        'nodeNum' => 'int32',
        'newSpecBillingEnable' => null,
        'enableAcl' => null,
        'brokerNum' => 'int32',
        'dnsEnable' => null,
        'namesrvAddress' => null,
        'namesrvDomainName' => null,
        'brokerAddress' => null,
        'publicNamesrvAddress' => null,
        'publicNamesrvDomainName' => null,
        'publicBrokerAddress' => null,
        'grpcAddress' => null,
        'grpcDomainName' => null,
        'publicGrpcAddress' => null,
        'publicGrpcDomainName' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'totalStorageSpace' => 'int32',
        'resourceSpecCode' => null,
        'producePortion' => null,
        'consumePortion' => null,
        'drEnable' => null,
        'configSslNeedRestartProcess' => null,
        'tlsMode' => null
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
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * description  **参数解释**： 消息描述。 **取值范围**： 不涉及。
    * type  **参数解释**： 实例类型。 **取值范围**： - single：单机。 - cluster：集群。
    * specification  **参数解释**： 实例规格。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 实例版本。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * chargingMode  **参数解释**： 付费模式。 **取值范围**： [1表示按需计费。](tag:hws_eu,g42,hk_g42,tm,sbc,hk_sbc,hk_tm)[1表示按需计费，0表示包年/包月计费。](tag:hws,hws_eu,hws_hk,ctc) [计费模式，参数暂未使用。](tag:ocb,hws_ocb,hcs,fcs)
    * vpcId  **参数解释**： 私有云ID。 **取值范围**： 不涉及。
    * vpcName  **参数解释**： 私有云名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 完成创建时间。  格式为时间戳，指从格林威治时间1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品标识。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * securityGroupName  **参数解释**： 安全组名称。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * subnetName  **参数解释**： 子网名称。 **取值范围**： 不涉及。
    * subnetCidr  **参数解释**： 子网路由（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 可用区ID列表。 **取值范围**： 不涉及。
    * availableZoneNames  **参数解释**： 可用区名称列表。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * enableLogCollection  **参数解释**： 是否开启消息收集功能。 **取值范围**： - true：开启。 - false：不开启。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **取值范围**： 不涉及。
    * usedStorageSpace  **参数解释**： 已用消息存储空间，单位：GB。 **取值范围**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网。 **取值范围**： - true：开启。 - false：不开启。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。
    * publicipAddress  **参数解释**： 公网IP地址。 **取值范围**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL。 **取值范围**： - true：开启。 - false：未开启。
    * crossVpcInfo  **参数解释**： 跨VPC访问信息。 **取值范围**： 不涉及。
    * storageResourceId  **参数解释**： 存储资源ID。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： 存储规格代码。 **取值范围**： 不涉及。
    * serviceType  **参数解释**： 服务类型。 **取值范围**： 不涉及。
    * storageType  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * extendTimes  **参数解释**： 扩展时间。 **取值范围**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **取值范围**： - true：开启。 - false：未开启。
    * supportFeatures  **参数解释**： 实例支持的特性功能。 **取值范围**： 不涉及。
    * diskEncrypted  **参数解释**： 是否开启磁盘加密。 **取值范围**： - true：开启。 - false：不开启。
    * cesVersion  **参数解释**： 云监控版本。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 节点数。 **取值范围**： 不涉及。
    * newSpecBillingEnable  **参数解释**： 是否启用新规格计费。 **取值范围**： - true：开启。 - false：未开启。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **取值范围**： - true：开启。 - false：未开启。
    * brokerNum  **参数解释**： Broker节点数（仅RocketMQ 4.8.0版本会显示此字段）。 **取值范围**： 不涉及。
    * dnsEnable  **参数解释**： 实例是否开启域名访问功能。 **取值范围**： - true：开启。 - false：未开启。
    * namesrvAddress  **参数解释**： 元数据地址。 **取值范围**： 不涉及。
    * namesrvDomainName  **参数解释**： 元数据域名。 **取值范围**： 不涉及。
    * brokerAddress  **参数解释**： 业务数据地址。 **取值范围**： 不涉及。
    * publicNamesrvAddress  **参数解释**： 公网元数据地址。 **取值范围**： 不涉及。
    * publicNamesrvDomainName  **参数解释**： 公网元数据域名。 **取值范围**： 不涉及。
    * publicBrokerAddress  **参数解释**： 公网业务数据地址。 **取值范围**： 不涉及。
    * grpcAddress  **参数解释**： grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * grpcDomainName  **参数解释**： grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcAddress  **参数解释**： 公网grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcDomainName  **参数解释**： 公网grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 不涉及。
    * tags  **参数解释**： 标签列表。 **取值范围**： 不涉及。
    * totalStorageSpace  **参数解释**： 总存储空间。 **取值范围**： 不涉及。
    * resourceSpecCode  **参数解释**： 资源规格。 **取值范围**： 不涉及。
    * producePortion  **参数解释**： 生产TPS占比。 **取值范围**： 不涉及。
    * consumePortion  **参数解释**： 消费TPS占比。 **取值范围**： 不涉及。
    * drEnable  **参数解释**： 是否为容灾实例。 **取值范围**： 不涉及。
    * configSslNeedRestartProcess  **参数解释**： 配置ssl是否需要重启。 **取值范围**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'engine' => 'engine',
            'status' => 'status',
            'description' => 'description',
            'type' => 'type',
            'specification' => 'specification',
            'engineVersion' => 'engine_version',
            'instanceId' => 'instance_id',
            'chargingMode' => 'charging_mode',
            'vpcId' => 'vpc_id',
            'vpcName' => 'vpc_name',
            'createdAt' => 'created_at',
            'productId' => 'product_id',
            'securityGroupId' => 'security_group_id',
            'securityGroupName' => 'security_group_name',
            'subnetId' => 'subnet_id',
            'subnetName' => 'subnet_name',
            'subnetCidr' => 'subnet_cidr',
            'availableZones' => 'available_zones',
            'availableZoneNames' => 'available_zone_names',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'enableLogCollection' => 'enable_log_collection',
            'storageSpace' => 'storage_space',
            'usedStorageSpace' => 'used_storage_space',
            'enablePublicip' => 'enable_publicip',
            'publicipId' => 'publicip_id',
            'publicipAddress' => 'publicip_address',
            'sslEnable' => 'ssl_enable',
            'crossVpcInfo' => 'cross_vpc_info',
            'storageResourceId' => 'storage_resource_id',
            'storageSpecCode' => 'storage_spec_code',
            'serviceType' => 'service_type',
            'storageType' => 'storage_type',
            'extendTimes' => 'extend_times',
            'ipv6Enable' => 'ipv6_enable',
            'supportFeatures' => 'support_features',
            'diskEncrypted' => 'disk_encrypted',
            'cesVersion' => 'ces_version',
            'nodeNum' => 'node_num',
            'newSpecBillingEnable' => 'new_spec_billing_enable',
            'enableAcl' => 'enable_acl',
            'brokerNum' => 'broker_num',
            'dnsEnable' => 'dns_enable',
            'namesrvAddress' => 'namesrv_address',
            'namesrvDomainName' => 'namesrv_domain_name',
            'brokerAddress' => 'broker_address',
            'publicNamesrvAddress' => 'public_namesrv_address',
            'publicNamesrvDomainName' => 'public_namesrv_domain_name',
            'publicBrokerAddress' => 'public_broker_address',
            'grpcAddress' => 'grpc_address',
            'grpcDomainName' => 'grpc_domain_name',
            'publicGrpcAddress' => 'public_grpc_address',
            'publicGrpcDomainName' => 'public_grpc_domain_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'totalStorageSpace' => 'total_storage_space',
            'resourceSpecCode' => 'resource_spec_code',
            'producePortion' => 'produce_portion',
            'consumePortion' => 'consume_portion',
            'drEnable' => 'dr_enable',
            'configSslNeedRestartProcess' => 'config_ssl_need_restart_process',
            'tlsMode' => 'tls_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * description  **参数解释**： 消息描述。 **取值范围**： 不涉及。
    * type  **参数解释**： 实例类型。 **取值范围**： - single：单机。 - cluster：集群。
    * specification  **参数解释**： 实例规格。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 实例版本。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * chargingMode  **参数解释**： 付费模式。 **取值范围**： [1表示按需计费。](tag:hws_eu,g42,hk_g42,tm,sbc,hk_sbc,hk_tm)[1表示按需计费，0表示包年/包月计费。](tag:hws,hws_eu,hws_hk,ctc) [计费模式，参数暂未使用。](tag:ocb,hws_ocb,hcs,fcs)
    * vpcId  **参数解释**： 私有云ID。 **取值范围**： 不涉及。
    * vpcName  **参数解释**： 私有云名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 完成创建时间。  格式为时间戳，指从格林威治时间1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品标识。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * securityGroupName  **参数解释**： 安全组名称。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * subnetName  **参数解释**： 子网名称。 **取值范围**： 不涉及。
    * subnetCidr  **参数解释**： 子网路由（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 可用区ID列表。 **取值范围**： 不涉及。
    * availableZoneNames  **参数解释**： 可用区名称列表。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * enableLogCollection  **参数解释**： 是否开启消息收集功能。 **取值范围**： - true：开启。 - false：不开启。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **取值范围**： 不涉及。
    * usedStorageSpace  **参数解释**： 已用消息存储空间，单位：GB。 **取值范围**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网。 **取值范围**： - true：开启。 - false：不开启。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。
    * publicipAddress  **参数解释**： 公网IP地址。 **取值范围**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL。 **取值范围**： - true：开启。 - false：未开启。
    * crossVpcInfo  **参数解释**： 跨VPC访问信息。 **取值范围**： 不涉及。
    * storageResourceId  **参数解释**： 存储资源ID。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： 存储规格代码。 **取值范围**： 不涉及。
    * serviceType  **参数解释**： 服务类型。 **取值范围**： 不涉及。
    * storageType  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * extendTimes  **参数解释**： 扩展时间。 **取值范围**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **取值范围**： - true：开启。 - false：未开启。
    * supportFeatures  **参数解释**： 实例支持的特性功能。 **取值范围**： 不涉及。
    * diskEncrypted  **参数解释**： 是否开启磁盘加密。 **取值范围**： - true：开启。 - false：不开启。
    * cesVersion  **参数解释**： 云监控版本。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 节点数。 **取值范围**： 不涉及。
    * newSpecBillingEnable  **参数解释**： 是否启用新规格计费。 **取值范围**： - true：开启。 - false：未开启。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **取值范围**： - true：开启。 - false：未开启。
    * brokerNum  **参数解释**： Broker节点数（仅RocketMQ 4.8.0版本会显示此字段）。 **取值范围**： 不涉及。
    * dnsEnable  **参数解释**： 实例是否开启域名访问功能。 **取值范围**： - true：开启。 - false：未开启。
    * namesrvAddress  **参数解释**： 元数据地址。 **取值范围**： 不涉及。
    * namesrvDomainName  **参数解释**： 元数据域名。 **取值范围**： 不涉及。
    * brokerAddress  **参数解释**： 业务数据地址。 **取值范围**： 不涉及。
    * publicNamesrvAddress  **参数解释**： 公网元数据地址。 **取值范围**： 不涉及。
    * publicNamesrvDomainName  **参数解释**： 公网元数据域名。 **取值范围**： 不涉及。
    * publicBrokerAddress  **参数解释**： 公网业务数据地址。 **取值范围**： 不涉及。
    * grpcAddress  **参数解释**： grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * grpcDomainName  **参数解释**： grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcAddress  **参数解释**： 公网grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcDomainName  **参数解释**： 公网grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 不涉及。
    * tags  **参数解释**： 标签列表。 **取值范围**： 不涉及。
    * totalStorageSpace  **参数解释**： 总存储空间。 **取值范围**： 不涉及。
    * resourceSpecCode  **参数解释**： 资源规格。 **取值范围**： 不涉及。
    * producePortion  **参数解释**： 生产TPS占比。 **取值范围**： 不涉及。
    * consumePortion  **参数解释**： 消费TPS占比。 **取值范围**： 不涉及。
    * drEnable  **参数解释**： 是否为容灾实例。 **取值范围**： 不涉及。
    * configSslNeedRestartProcess  **参数解释**： 配置ssl是否需要重启。 **取值范围**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'engine' => 'setEngine',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'type' => 'setType',
            'specification' => 'setSpecification',
            'engineVersion' => 'setEngineVersion',
            'instanceId' => 'setInstanceId',
            'chargingMode' => 'setChargingMode',
            'vpcId' => 'setVpcId',
            'vpcName' => 'setVpcName',
            'createdAt' => 'setCreatedAt',
            'productId' => 'setProductId',
            'securityGroupId' => 'setSecurityGroupId',
            'securityGroupName' => 'setSecurityGroupName',
            'subnetId' => 'setSubnetId',
            'subnetName' => 'setSubnetName',
            'subnetCidr' => 'setSubnetCidr',
            'availableZones' => 'setAvailableZones',
            'availableZoneNames' => 'setAvailableZoneNames',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'enableLogCollection' => 'setEnableLogCollection',
            'storageSpace' => 'setStorageSpace',
            'usedStorageSpace' => 'setUsedStorageSpace',
            'enablePublicip' => 'setEnablePublicip',
            'publicipId' => 'setPublicipId',
            'publicipAddress' => 'setPublicipAddress',
            'sslEnable' => 'setSslEnable',
            'crossVpcInfo' => 'setCrossVpcInfo',
            'storageResourceId' => 'setStorageResourceId',
            'storageSpecCode' => 'setStorageSpecCode',
            'serviceType' => 'setServiceType',
            'storageType' => 'setStorageType',
            'extendTimes' => 'setExtendTimes',
            'ipv6Enable' => 'setIpv6Enable',
            'supportFeatures' => 'setSupportFeatures',
            'diskEncrypted' => 'setDiskEncrypted',
            'cesVersion' => 'setCesVersion',
            'nodeNum' => 'setNodeNum',
            'newSpecBillingEnable' => 'setNewSpecBillingEnable',
            'enableAcl' => 'setEnableAcl',
            'brokerNum' => 'setBrokerNum',
            'dnsEnable' => 'setDnsEnable',
            'namesrvAddress' => 'setNamesrvAddress',
            'namesrvDomainName' => 'setNamesrvDomainName',
            'brokerAddress' => 'setBrokerAddress',
            'publicNamesrvAddress' => 'setPublicNamesrvAddress',
            'publicNamesrvDomainName' => 'setPublicNamesrvDomainName',
            'publicBrokerAddress' => 'setPublicBrokerAddress',
            'grpcAddress' => 'setGrpcAddress',
            'grpcDomainName' => 'setGrpcDomainName',
            'publicGrpcAddress' => 'setPublicGrpcAddress',
            'publicGrpcDomainName' => 'setPublicGrpcDomainName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'totalStorageSpace' => 'setTotalStorageSpace',
            'resourceSpecCode' => 'setResourceSpecCode',
            'producePortion' => 'setProducePortion',
            'consumePortion' => 'setConsumePortion',
            'drEnable' => 'setDrEnable',
            'configSslNeedRestartProcess' => 'setConfigSslNeedRestartProcess',
            'tlsMode' => 'setTlsMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **取值范围**： 不涉及。
    * status  **参数解释**： 状态。 **取值范围**： 不涉及。
    * description  **参数解释**： 消息描述。 **取值范围**： 不涉及。
    * type  **参数解释**： 实例类型。 **取值范围**： - single：单机。 - cluster：集群。
    * specification  **参数解释**： 实例规格。 **取值范围**： 不涉及。
    * engineVersion  **参数解释**： 实例版本。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * chargingMode  **参数解释**： 付费模式。 **取值范围**： [1表示按需计费。](tag:hws_eu,g42,hk_g42,tm,sbc,hk_sbc,hk_tm)[1表示按需计费，0表示包年/包月计费。](tag:hws,hws_eu,hws_hk,ctc) [计费模式，参数暂未使用。](tag:ocb,hws_ocb,hcs,fcs)
    * vpcId  **参数解释**： 私有云ID。 **取值范围**： 不涉及。
    * vpcName  **参数解释**： 私有云名称。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 完成创建时间。  格式为时间戳，指从格林威治时间1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品标识。 **取值范围**： 不涉及。
    * securityGroupId  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
    * securityGroupName  **参数解释**： 安全组名称。 **取值范围**： 不涉及。
    * subnetId  **参数解释**： 子网ID。 **取值范围**： 不涉及。
    * subnetName  **参数解释**： 子网名称。 **取值范围**： 不涉及。
    * subnetCidr  **参数解释**： 子网路由（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 可用区ID列表。 **取值范围**： 不涉及。
    * availableZoneNames  **参数解释**： 可用区名称列表。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    * enableLogCollection  **参数解释**： 是否开启消息收集功能。 **取值范围**： - true：开启。 - false：不开启。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **取值范围**： 不涉及。
    * usedStorageSpace  **参数解释**： 已用消息存储空间，单位：GB。 **取值范围**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网。 **取值范围**： - true：开启。 - false：不开启。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。
    * publicipAddress  **参数解释**： 公网IP地址。 **取值范围**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL。 **取值范围**： - true：开启。 - false：未开启。
    * crossVpcInfo  **参数解释**： 跨VPC访问信息。 **取值范围**： 不涉及。
    * storageResourceId  **参数解释**： 存储资源ID。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： 存储规格代码。 **取值范围**： 不涉及。
    * serviceType  **参数解释**： 服务类型。 **取值范围**： 不涉及。
    * storageType  **参数解释**： 存储类型。 **取值范围**： 不涉及。
    * extendTimes  **参数解释**： 扩展时间。 **取值范围**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **取值范围**： - true：开启。 - false：未开启。
    * supportFeatures  **参数解释**： 实例支持的特性功能。 **取值范围**： 不涉及。
    * diskEncrypted  **参数解释**： 是否开启磁盘加密。 **取值范围**： - true：开启。 - false：不开启。
    * cesVersion  **参数解释**： 云监控版本。 **取值范围**： 不涉及。
    * nodeNum  **参数解释**： 节点数。 **取值范围**： 不涉及。
    * newSpecBillingEnable  **参数解释**： 是否启用新规格计费。 **取值范围**： - true：开启。 - false：未开启。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **取值范围**： - true：开启。 - false：未开启。
    * brokerNum  **参数解释**： Broker节点数（仅RocketMQ 4.8.0版本会显示此字段）。 **取值范围**： 不涉及。
    * dnsEnable  **参数解释**： 实例是否开启域名访问功能。 **取值范围**： - true：开启。 - false：未开启。
    * namesrvAddress  **参数解释**： 元数据地址。 **取值范围**： 不涉及。
    * namesrvDomainName  **参数解释**： 元数据域名。 **取值范围**： 不涉及。
    * brokerAddress  **参数解释**： 业务数据地址。 **取值范围**： 不涉及。
    * publicNamesrvAddress  **参数解释**： 公网元数据地址。 **取值范围**： 不涉及。
    * publicNamesrvDomainName  **参数解释**： 公网元数据域名。 **取值范围**： 不涉及。
    * publicBrokerAddress  **参数解释**： 公网业务数据地址。 **取值范围**： 不涉及。
    * grpcAddress  **参数解释**： grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * grpcDomainName  **参数解释**： grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcAddress  **参数解释**： 公网grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * publicGrpcDomainName  **参数解释**： 公网grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 不涉及。
    * tags  **参数解释**： 标签列表。 **取值范围**： 不涉及。
    * totalStorageSpace  **参数解释**： 总存储空间。 **取值范围**： 不涉及。
    * resourceSpecCode  **参数解释**： 资源规格。 **取值范围**： 不涉及。
    * producePortion  **参数解释**： 生产TPS占比。 **取值范围**： 不涉及。
    * consumePortion  **参数解释**： 消费TPS占比。 **取值范围**： 不涉及。
    * drEnable  **参数解释**： 是否为容灾实例。 **取值范围**： 不涉及。
    * configSslNeedRestartProcess  **参数解释**： 配置ssl是否需要重启。 **取值范围**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'engine' => 'getEngine',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'type' => 'getType',
            'specification' => 'getSpecification',
            'engineVersion' => 'getEngineVersion',
            'instanceId' => 'getInstanceId',
            'chargingMode' => 'getChargingMode',
            'vpcId' => 'getVpcId',
            'vpcName' => 'getVpcName',
            'createdAt' => 'getCreatedAt',
            'productId' => 'getProductId',
            'securityGroupId' => 'getSecurityGroupId',
            'securityGroupName' => 'getSecurityGroupName',
            'subnetId' => 'getSubnetId',
            'subnetName' => 'getSubnetName',
            'subnetCidr' => 'getSubnetCidr',
            'availableZones' => 'getAvailableZones',
            'availableZoneNames' => 'getAvailableZoneNames',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'enableLogCollection' => 'getEnableLogCollection',
            'storageSpace' => 'getStorageSpace',
            'usedStorageSpace' => 'getUsedStorageSpace',
            'enablePublicip' => 'getEnablePublicip',
            'publicipId' => 'getPublicipId',
            'publicipAddress' => 'getPublicipAddress',
            'sslEnable' => 'getSslEnable',
            'crossVpcInfo' => 'getCrossVpcInfo',
            'storageResourceId' => 'getStorageResourceId',
            'storageSpecCode' => 'getStorageSpecCode',
            'serviceType' => 'getServiceType',
            'storageType' => 'getStorageType',
            'extendTimes' => 'getExtendTimes',
            'ipv6Enable' => 'getIpv6Enable',
            'supportFeatures' => 'getSupportFeatures',
            'diskEncrypted' => 'getDiskEncrypted',
            'cesVersion' => 'getCesVersion',
            'nodeNum' => 'getNodeNum',
            'newSpecBillingEnable' => 'getNewSpecBillingEnable',
            'enableAcl' => 'getEnableAcl',
            'brokerNum' => 'getBrokerNum',
            'dnsEnable' => 'getDnsEnable',
            'namesrvAddress' => 'getNamesrvAddress',
            'namesrvDomainName' => 'getNamesrvDomainName',
            'brokerAddress' => 'getBrokerAddress',
            'publicNamesrvAddress' => 'getPublicNamesrvAddress',
            'publicNamesrvDomainName' => 'getPublicNamesrvDomainName',
            'publicBrokerAddress' => 'getPublicBrokerAddress',
            'grpcAddress' => 'getGrpcAddress',
            'grpcDomainName' => 'getGrpcDomainName',
            'publicGrpcAddress' => 'getPublicGrpcAddress',
            'publicGrpcDomainName' => 'getPublicGrpcDomainName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'totalStorageSpace' => 'getTotalStorageSpace',
            'resourceSpecCode' => 'getResourceSpecCode',
            'producePortion' => 'getProducePortion',
            'consumePortion' => 'getConsumePortion',
            'drEnable' => 'getDrEnable',
            'configSslNeedRestartProcess' => 'getConfigSslNeedRestartProcess',
            'tlsMode' => 'getTlsMode'
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
    const TYPE_SINGLE = 'single';
    const TYPE_CLUSTER = 'cluster';
    

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['securityGroupName'] = isset($data['securityGroupName']) ? $data['securityGroupName'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['availableZoneNames'] = isset($data['availableZoneNames']) ? $data['availableZoneNames'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['enableLogCollection'] = isset($data['enableLogCollection']) ? $data['enableLogCollection'] : null;
        $this->container['storageSpace'] = isset($data['storageSpace']) ? $data['storageSpace'] : null;
        $this->container['usedStorageSpace'] = isset($data['usedStorageSpace']) ? $data['usedStorageSpace'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['publicipAddress'] = isset($data['publicipAddress']) ? $data['publicipAddress'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['crossVpcInfo'] = isset($data['crossVpcInfo']) ? $data['crossVpcInfo'] : null;
        $this->container['storageResourceId'] = isset($data['storageResourceId']) ? $data['storageResourceId'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['extendTimes'] = isset($data['extendTimes']) ? $data['extendTimes'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['supportFeatures'] = isset($data['supportFeatures']) ? $data['supportFeatures'] : null;
        $this->container['diskEncrypted'] = isset($data['diskEncrypted']) ? $data['diskEncrypted'] : null;
        $this->container['cesVersion'] = isset($data['cesVersion']) ? $data['cesVersion'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['newSpecBillingEnable'] = isset($data['newSpecBillingEnable']) ? $data['newSpecBillingEnable'] : null;
        $this->container['enableAcl'] = isset($data['enableAcl']) ? $data['enableAcl'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
        $this->container['dnsEnable'] = isset($data['dnsEnable']) ? $data['dnsEnable'] : null;
        $this->container['namesrvAddress'] = isset($data['namesrvAddress']) ? $data['namesrvAddress'] : null;
        $this->container['namesrvDomainName'] = isset($data['namesrvDomainName']) ? $data['namesrvDomainName'] : null;
        $this->container['brokerAddress'] = isset($data['brokerAddress']) ? $data['brokerAddress'] : null;
        $this->container['publicNamesrvAddress'] = isset($data['publicNamesrvAddress']) ? $data['publicNamesrvAddress'] : null;
        $this->container['publicNamesrvDomainName'] = isset($data['publicNamesrvDomainName']) ? $data['publicNamesrvDomainName'] : null;
        $this->container['publicBrokerAddress'] = isset($data['publicBrokerAddress']) ? $data['publicBrokerAddress'] : null;
        $this->container['grpcAddress'] = isset($data['grpcAddress']) ? $data['grpcAddress'] : null;
        $this->container['grpcDomainName'] = isset($data['grpcDomainName']) ? $data['grpcDomainName'] : null;
        $this->container['publicGrpcAddress'] = isset($data['publicGrpcAddress']) ? $data['publicGrpcAddress'] : null;
        $this->container['publicGrpcDomainName'] = isset($data['publicGrpcDomainName']) ? $data['publicGrpcDomainName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['totalStorageSpace'] = isset($data['totalStorageSpace']) ? $data['totalStorageSpace'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['producePortion'] = isset($data['producePortion']) ? $data['producePortion'] : null;
        $this->container['consumePortion'] = isset($data['consumePortion']) ? $data['consumePortion'] : null;
        $this->container['drEnable'] = isset($data['drEnable']) ? $data['drEnable'] : null;
        $this->container['configSslNeedRestartProcess'] = isset($data['configSslNeedRestartProcess']) ? $data['configSslNeedRestartProcess'] : null;
        $this->container['tlsMode'] = isset($data['tlsMode']) ? $data['tlsMode'] : null;
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
    *  **参数解释**： 实例名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 实例名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 消息引擎。 **取值范围**： 不涉及。
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
    * @param string|null $engine **参数解释**： 消息引擎。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 消息描述。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 消息描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 实例类型。 **取值范围**： - single：单机。 - cluster：集群。
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
    * @param string|null $type **参数解释**： 实例类型。 **取值范围**： - single：单机。 - cluster：集群。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets specification
    *  **参数解释**： 实例规格。 **取值范围**： 不涉及。
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
    * @param string|null $specification **参数解释**： 实例规格。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets engineVersion
    *  **参数解释**： 实例版本。 **取值范围**： 不涉及。
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
    * @param string|null $engineVersion **参数解释**： 实例版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 实例ID。 **取值范围**： 不涉及。
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
    * @param string|null $instanceId **参数解释**： 实例ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**： 付费模式。 **取值范围**： [1表示按需计费。](tag:hws_eu,g42,hk_g42,tm,sbc,hk_sbc,hk_tm)[1表示按需计费，0表示包年/包月计费。](tag:hws,hws_eu,hws_hk,ctc) [计费模式，参数暂未使用。](tag:ocb,hws_ocb,hcs,fcs)
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
    * @param int|null $chargingMode **参数解释**： 付费模式。 **取值范围**： [1表示按需计费。](tag:hws_eu,g42,hk_g42,tm,sbc,hk_sbc,hk_tm)[1表示按需计费，0表示包年/包月计费。](tag:hws,hws_eu,hws_hk,ctc) [计费模式，参数暂未使用。](tag:ocb,hws_ocb,hcs,fcs)
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
    *  **参数解释**： 私有云ID。 **取值范围**： 不涉及。
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
    * @param string|null $vpcId **参数解释**： 私有云ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 私有云名称。 **取值范围**： 不涉及。
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
    * @param string|null $vpcName **参数解释**： 私有云名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 完成创建时间。  格式为时间戳，指从格林威治时间1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。 **取值范围**： 不涉及。
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
    * @param string|null $createdAt **参数解释**： 完成创建时间。  格式为时间戳，指从格林威治时间1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**： 产品标识。 **取值范围**： 不涉及。
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
    * @param string|null $productId **参数解释**： 产品标识。 **取值范围**： 不涉及。
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
    *  **参数解释**： 安全组ID。 **取值范围**： 不涉及。
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
    * @param string|null $securityGroupId **参数解释**： 安全组ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 安全组名称。 **取值范围**： 不涉及。
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
    * @param string|null $securityGroupName **参数解释**： 安全组名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 子网ID。 **取值范围**： 不涉及。
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
    * @param string|null $subnetId **参数解释**： 子网ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 子网名称。 **取值范围**： 不涉及。
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
    * @param string|null $subnetName **参数解释**： 子网名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 子网路由（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
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
    * @param string|null $subnetCidr **参数解释**： 子网路由（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubnetCidr($subnetCidr)
    {
        $this->container['subnetCidr'] = $subnetCidr;
        return $this;
    }

    /**
    * Gets availableZones
    *  **参数解释**： 可用区ID列表。 **取值范围**： 不涉及。
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
    * @param string[]|null $availableZones **参数解释**： 可用区ID列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets availableZoneNames
    *  **参数解释**： 可用区名称列表。
    *
    * @return string[]|null
    */
    public function getAvailableZoneNames()
    {
        return $this->container['availableZoneNames'];
    }

    /**
    * Sets availableZoneNames
    *
    * @param string[]|null $availableZoneNames **参数解释**： 可用区名称列表。
    *
    * @return $this
    */
    public function setAvailableZoneNames($availableZoneNames)
    {
        $this->container['availableZoneNames'] = $availableZoneNames;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**： 用户ID。 **取值范围**： 不涉及。
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
    * @param string|null $userId **参数解释**： 用户ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 用户名。 **取值范围**： 不涉及。
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
    * @param string|null $userName **参数解释**： 用户名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  **参数解释**： 维护时间窗开始时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
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
    * @param string|null $maintainBegin **参数解释**： 维护时间窗开始时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
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
    *  **参数解释**： 维护时间窗结束时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
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
    * @param string|null $maintainEnd **参数解释**： 维护时间窗结束时间，格式为HH:mm:ss。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets enableLogCollection
    *  **参数解释**： 是否开启消息收集功能。 **取值范围**： - true：开启。 - false：不开启。
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
    * @param bool|null $enableLogCollection **参数解释**： 是否开启消息收集功能。 **取值范围**： - true：开启。 - false：不开启。
    *
    * @return $this
    */
    public function setEnableLogCollection($enableLogCollection)
    {
        $this->container['enableLogCollection'] = $enableLogCollection;
        return $this;
    }

    /**
    * Gets storageSpace
    *  **参数解释**： 存储空间，单位：GB。 **取值范围**： 不涉及。
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
    * @param int|null $storageSpace **参数解释**： 存储空间，单位：GB。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStorageSpace($storageSpace)
    {
        $this->container['storageSpace'] = $storageSpace;
        return $this;
    }

    /**
    * Gets usedStorageSpace
    *  **参数解释**： 已用消息存储空间，单位：GB。 **取值范围**： 不涉及。
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
    * @param int|null $usedStorageSpace **参数解释**： 已用消息存储空间，单位：GB。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUsedStorageSpace($usedStorageSpace)
    {
        $this->container['usedStorageSpace'] = $usedStorageSpace;
        return $this;
    }

    /**
    * Gets enablePublicip
    *  **参数解释**： 是否开启公网。 **取值范围**： - true：开启。 - false：不开启。
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
    * @param bool|null $enablePublicip **参数解释**： 是否开启公网。 **取值范围**： - true：开启。 - false：不开启。
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
    *  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。
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
    * @param string|null $publicipId **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。
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
    *  **参数解释**： 公网IP地址。 **取值范围**： 不涉及。
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
    * @param string|null $publicipAddress **参数解释**： 公网IP地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublicipAddress($publicipAddress)
    {
        $this->container['publicipAddress'] = $publicipAddress;
        return $this;
    }

    /**
    * Gets sslEnable
    *  **参数解释**： 是否开启SSL。 **取值范围**： - true：开启。 - false：未开启。
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
    * @param bool|null $sslEnable **参数解释**： 是否开启SSL。 **取值范围**： - true：开启。 - false：未开启。
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets crossVpcInfo
    *  **参数解释**： 跨VPC访问信息。 **取值范围**： 不涉及。
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
    * @param string|null $crossVpcInfo **参数解释**： 跨VPC访问信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCrossVpcInfo($crossVpcInfo)
    {
        $this->container['crossVpcInfo'] = $crossVpcInfo;
        return $this;
    }

    /**
    * Gets storageResourceId
    *  **参数解释**： 存储资源ID。 **取值范围**： 不涉及。
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
    * @param string|null $storageResourceId **参数解释**： 存储资源ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 存储规格代码。 **取值范围**： 不涉及。
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
    * @param string|null $storageSpecCode **参数解释**： 存储规格代码。 **取值范围**： 不涉及。
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
    *  **参数解释**： 服务类型。 **取值范围**： 不涉及。
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
    * @param string|null $serviceType **参数解释**： 服务类型。 **取值范围**： 不涉及。
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
    *  **参数解释**： 存储类型。 **取值范围**： 不涉及。
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
    * @param string|null $storageType **参数解释**： 存储类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets extendTimes
    *  **参数解释**： 扩展时间。 **取值范围**： 不涉及。
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
    * @param int|null $extendTimes **参数解释**： 扩展时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExtendTimes($extendTimes)
    {
        $this->container['extendTimes'] = $extendTimes;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  **参数解释**： 是否开启IPv6。 **取值范围**： - true：开启。 - false：未开启。
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
    * @param bool|null $ipv6Enable **参数解释**： 是否开启IPv6。 **取值范围**： - true：开启。 - false：未开启。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets supportFeatures
    *  **参数解释**： 实例支持的特性功能。 **取值范围**： 不涉及。
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
    * @param string|null $supportFeatures **参数解释**： 实例支持的特性功能。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSupportFeatures($supportFeatures)
    {
        $this->container['supportFeatures'] = $supportFeatures;
        return $this;
    }

    /**
    * Gets diskEncrypted
    *  **参数解释**： 是否开启磁盘加密。 **取值范围**： - true：开启。 - false：不开启。
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
    * @param bool|null $diskEncrypted **参数解释**： 是否开启磁盘加密。 **取值范围**： - true：开启。 - false：不开启。
    *
    * @return $this
    */
    public function setDiskEncrypted($diskEncrypted)
    {
        $this->container['diskEncrypted'] = $diskEncrypted;
        return $this;
    }

    /**
    * Gets cesVersion
    *  **参数解释**： 云监控版本。 **取值范围**： 不涉及。
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
    * @param string|null $cesVersion **参数解释**： 云监控版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCesVersion($cesVersion)
    {
        $this->container['cesVersion'] = $cesVersion;
        return $this;
    }

    /**
    * Gets nodeNum
    *  **参数解释**： 节点数。 **取值范围**： 不涉及。
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
    * @param int|null $nodeNum **参数解释**： 节点数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets newSpecBillingEnable
    *  **参数解释**： 是否启用新规格计费。 **取值范围**： - true：开启。 - false：未开启。
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
    * @param bool|null $newSpecBillingEnable **参数解释**： 是否启用新规格计费。 **取值范围**： - true：开启。 - false：未开启。
    *
    * @return $this
    */
    public function setNewSpecBillingEnable($newSpecBillingEnable)
    {
        $this->container['newSpecBillingEnable'] = $newSpecBillingEnable;
        return $this;
    }

    /**
    * Gets enableAcl
    *  **参数解释**： 是否开启访问控制列表。 **取值范围**： - true：开启。 - false：未开启。
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
    * @param bool|null $enableAcl **参数解释**： 是否开启访问控制列表。 **取值范围**： - true：开启。 - false：未开启。
    *
    * @return $this
    */
    public function setEnableAcl($enableAcl)
    {
        $this->container['enableAcl'] = $enableAcl;
        return $this;
    }

    /**
    * Gets brokerNum
    *  **参数解释**： Broker节点数（仅RocketMQ 4.8.0版本会显示此字段）。 **取值范围**： 不涉及。
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
    * @param int|null $brokerNum **参数解释**： Broker节点数（仅RocketMQ 4.8.0版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
        return $this;
    }

    /**
    * Gets dnsEnable
    *  **参数解释**： 实例是否开启域名访问功能。 **取值范围**： - true：开启。 - false：未开启。
    *
    * @return bool|null
    */
    public function getDnsEnable()
    {
        return $this->container['dnsEnable'];
    }

    /**
    * Sets dnsEnable
    *
    * @param bool|null $dnsEnable **参数解释**： 实例是否开启域名访问功能。 **取值范围**： - true：开启。 - false：未开启。
    *
    * @return $this
    */
    public function setDnsEnable($dnsEnable)
    {
        $this->container['dnsEnable'] = $dnsEnable;
        return $this;
    }

    /**
    * Gets namesrvAddress
    *  **参数解释**： 元数据地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNamesrvAddress()
    {
        return $this->container['namesrvAddress'];
    }

    /**
    * Sets namesrvAddress
    *
    * @param string|null $namesrvAddress **参数解释**： 元数据地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNamesrvAddress($namesrvAddress)
    {
        $this->container['namesrvAddress'] = $namesrvAddress;
        return $this;
    }

    /**
    * Gets namesrvDomainName
    *  **参数解释**： 元数据域名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNamesrvDomainName()
    {
        return $this->container['namesrvDomainName'];
    }

    /**
    * Sets namesrvDomainName
    *
    * @param string|null $namesrvDomainName **参数解释**： 元数据域名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNamesrvDomainName($namesrvDomainName)
    {
        $this->container['namesrvDomainName'] = $namesrvDomainName;
        return $this;
    }

    /**
    * Gets brokerAddress
    *  **参数解释**： 业务数据地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBrokerAddress()
    {
        return $this->container['brokerAddress'];
    }

    /**
    * Sets brokerAddress
    *
    * @param string|null $brokerAddress **参数解释**： 业务数据地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerAddress($brokerAddress)
    {
        $this->container['brokerAddress'] = $brokerAddress;
        return $this;
    }

    /**
    * Gets publicNamesrvAddress
    *  **参数解释**： 公网元数据地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPublicNamesrvAddress()
    {
        return $this->container['publicNamesrvAddress'];
    }

    /**
    * Sets publicNamesrvAddress
    *
    * @param string|null $publicNamesrvAddress **参数解释**： 公网元数据地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublicNamesrvAddress($publicNamesrvAddress)
    {
        $this->container['publicNamesrvAddress'] = $publicNamesrvAddress;
        return $this;
    }

    /**
    * Gets publicNamesrvDomainName
    *  **参数解释**： 公网元数据域名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPublicNamesrvDomainName()
    {
        return $this->container['publicNamesrvDomainName'];
    }

    /**
    * Sets publicNamesrvDomainName
    *
    * @param string|null $publicNamesrvDomainName **参数解释**： 公网元数据域名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublicNamesrvDomainName($publicNamesrvDomainName)
    {
        $this->container['publicNamesrvDomainName'] = $publicNamesrvDomainName;
        return $this;
    }

    /**
    * Gets publicBrokerAddress
    *  **参数解释**： 公网业务数据地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPublicBrokerAddress()
    {
        return $this->container['publicBrokerAddress'];
    }

    /**
    * Sets publicBrokerAddress
    *
    * @param string|null $publicBrokerAddress **参数解释**： 公网业务数据地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublicBrokerAddress($publicBrokerAddress)
    {
        $this->container['publicBrokerAddress'] = $publicBrokerAddress;
        return $this;
    }

    /**
    * Gets grpcAddress
    *  **参数解释**： grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGrpcAddress()
    {
        return $this->container['grpcAddress'];
    }

    /**
    * Sets grpcAddress
    *
    * @param string|null $grpcAddress **参数解释**： grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGrpcAddress($grpcAddress)
    {
        $this->container['grpcAddress'] = $grpcAddress;
        return $this;
    }

    /**
    * Gets grpcDomainName
    *  **参数解释**： grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGrpcDomainName()
    {
        return $this->container['grpcDomainName'];
    }

    /**
    * Sets grpcDomainName
    *
    * @param string|null $grpcDomainName **参数解释**： grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGrpcDomainName($grpcDomainName)
    {
        $this->container['grpcDomainName'] = $grpcDomainName;
        return $this;
    }

    /**
    * Gets publicGrpcAddress
    *  **参数解释**： 公网grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPublicGrpcAddress()
    {
        return $this->container['publicGrpcAddress'];
    }

    /**
    * Sets publicGrpcAddress
    *
    * @param string|null $publicGrpcAddress **参数解释**： 公网grpc连接地址（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublicGrpcAddress($publicGrpcAddress)
    {
        $this->container['publicGrpcAddress'] = $publicGrpcAddress;
        return $this;
    }

    /**
    * Gets publicGrpcDomainName
    *  **参数解释**： 公网grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPublicGrpcDomainName()
    {
        return $this->container['publicGrpcDomainName'];
    }

    /**
    * Sets publicGrpcDomainName
    *
    * @param string|null $publicGrpcDomainName **参数解释**： 公网grpc连接域名（仅RocketMQ 5.x版本会显示此字段）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublicGrpcDomainName($publicGrpcDomainName)
    {
        $this->container['publicGrpcDomainName'] = $publicGrpcDomainName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目ID。 **取值范围**： 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 标签列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\TagEntity[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\TagEntity[]|null $tags **参数解释**： 标签列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets totalStorageSpace
    *  **参数解释**： 总存储空间。 **取值范围**： 不涉及。
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
    * @param int|null $totalStorageSpace **参数解释**： 总存储空间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotalStorageSpace($totalStorageSpace)
    {
        $this->container['totalStorageSpace'] = $totalStorageSpace;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  **参数解释**： 资源规格。 **取值范围**： 不涉及。
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
    * @param string|null $resourceSpecCode **参数解释**： 资源规格。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets producePortion
    *  **参数解释**： 生产TPS占比。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getProducePortion()
    {
        return $this->container['producePortion'];
    }

    /**
    * Sets producePortion
    *
    * @param int|null $producePortion **参数解释**： 生产TPS占比。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProducePortion($producePortion)
    {
        $this->container['producePortion'] = $producePortion;
        return $this;
    }

    /**
    * Gets consumePortion
    *  **参数解释**： 消费TPS占比。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getConsumePortion()
    {
        return $this->container['consumePortion'];
    }

    /**
    * Sets consumePortion
    *
    * @param int|null $consumePortion **参数解释**： 消费TPS占比。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setConsumePortion($consumePortion)
    {
        $this->container['consumePortion'] = $consumePortion;
        return $this;
    }

    /**
    * Gets drEnable
    *  **参数解释**： 是否为容灾实例。 **取值范围**： 不涉及。
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
    * @param bool|null $drEnable **参数解释**： 是否为容灾实例。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDrEnable($drEnable)
    {
        $this->container['drEnable'] = $drEnable;
        return $this;
    }

    /**
    * Gets configSslNeedRestartProcess
    *  **参数解释**： 配置ssl是否需要重启。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getConfigSslNeedRestartProcess()
    {
        return $this->container['configSslNeedRestartProcess'];
    }

    /**
    * Sets configSslNeedRestartProcess
    *
    * @param bool|null $configSslNeedRestartProcess **参数解释**： 配置ssl是否需要重启。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setConfigSslNeedRestartProcess($configSslNeedRestartProcess)
    {
        $this->container['configSslNeedRestartProcess'] = $configSslNeedRestartProcess;
        return $this;
    }

    /**
    * Gets tlsMode
    *  **参数解释**： 实例使用的安全协议。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTlsMode()
    {
        return $this->container['tlsMode'];
    }

    /**
    * Sets tlsMode
    *
    * @param string|null $tlsMode **参数解释**： 实例使用的安全协议。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTlsMode($tlsMode)
    {
        $this->container['tlsMode'] = $tlsMode;
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

