<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

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
    * accessUser  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * brokerNum  代理个数。
    * name  实例名称。
    * engine  消息引擎。
    * engineVersion  消息引擎版本。
    * specification  实例规格。   - RabbitMQ实例单机返回vm规格。   - RabbitMQ实例集群返回vm规格和节点数。
    * storageSpace  消息存储空间，单位：GB。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * dnsEnable  实例是否开启域名访问功能。 - true：开启 - false：未开启
    * connectAddress  实例内网连接IP地址。
    * connectDomainName  实例内网连接域名。
    * publicConnectAddress  实例公网连接IP地址。
    * publicConnectDomainName  实例公网连接域名。
    * port  实例连接端口。
    * status  实例的状态。
    * description  实例描述。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   [- dms.instance.rabbitmq.single.c3.2u4g：RabbitMQ单机，vm规格2u4g   - dms.instance.rabbitmq.single.c3.4u8g：RabbitMQ单机，vm规格4u8g   - dms.instance.rabbitmq.single.c3.8u16g：RabbitMQ单机，vm规格8u16g   - dms.instance.rabbitmq.single.c3.16u32g：RabbitMQ单机，vm规格16u32g   - dms.instance.rabbitmq.cluster.c3.4u8g.3：RabbitMQ集群，vm规格4u8g，3个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.5：RabbitMQ集群，vm规格4u8g，5个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.7：RabbitMQ集群，vm规格4u8g，7个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.3：RabbitMQ集群，vm规格8u16g，3个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.5：RabbitMQ集群，vm规格8u16g，5个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.7：RabbitMQ集群，vm规格8u16g，7个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.3：RabbitMQ集群，vm规格16u32g，3个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.5：RabbitMQ集群，vm规格16u32g，5个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.7：RabbitMQ集群，vm规格16u32g，7个节点](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc)
    * chargingMode  付费模式，1表示按需计费，0表示包年/包月计费。
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * userId  用户ID。
    * userName  用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：未开启
    * publicipAddress  RabbitMQ实例绑定的弹性IP地址。  如果未开启公网访问功能，该字段值为null。
    * publicipId  RabbitMQ实例绑定的弹性IP地址的ID。  如果未开启公网访问功能，该字段值为null。
    * managementConnectAddress  RabbitMQ实例的管理地址。
    * managementConnectDomainName  RabbitMQ实例的管理域名。
    * publicManagementConnectAddress  RabbitMQ实例的公网管理地址。
    * publicManagementConnectDomainName  RabbitMQ实例的公网管理域名。
    * sslEnable  是否开启安全认证。   - true：开启   - false：未开启
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * availableZoneNames  实例节点所在的可用区，返回“可用区名称”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessUser' => 'string',
            'brokerNum' => 'int',
            'name' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'specification' => 'string',
            'storageSpace' => 'int',
            'usedStorageSpace' => 'int',
            'dnsEnable' => 'bool',
            'connectAddress' => 'string',
            'connectDomainName' => 'string',
            'publicConnectAddress' => 'string',
            'publicConnectDomainName' => 'string',
            'port' => 'int',
            'status' => 'string',
            'description' => 'string',
            'instanceId' => 'string',
            'resourceSpecCode' => 'string',
            'chargingMode' => 'int',
            'vpcId' => 'string',
            'vpcName' => 'string',
            'createdAt' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'orderId' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'enablePublicip' => 'bool',
            'publicipAddress' => 'string',
            'publicipId' => 'string',
            'managementConnectAddress' => 'string',
            'managementConnectDomainName' => 'string',
            'publicManagementConnectAddress' => 'string',
            'publicManagementConnectDomainName' => 'string',
            'sslEnable' => 'bool',
            'enterpriseProjectId' => 'string',
            'isLogicalVolume' => 'bool',
            'extendTimes' => 'int',
            'type' => 'string',
            'productId' => 'string',
            'securityGroupId' => 'string',
            'securityGroupName' => 'string',
            'subnetId' => 'string',
            'availableZones' => 'string[]',
            'availableZoneNames' => 'string[]',
            'totalStorageSpace' => 'int',
            'storageResourceId' => 'string',
            'storageSpecCode' => 'string',
            'ipv6Enable' => 'bool',
            'ipv6ConnectAddresses' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\TagEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessUser  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * brokerNum  代理个数。
    * name  实例名称。
    * engine  消息引擎。
    * engineVersion  消息引擎版本。
    * specification  实例规格。   - RabbitMQ实例单机返回vm规格。   - RabbitMQ实例集群返回vm规格和节点数。
    * storageSpace  消息存储空间，单位：GB。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * dnsEnable  实例是否开启域名访问功能。 - true：开启 - false：未开启
    * connectAddress  实例内网连接IP地址。
    * connectDomainName  实例内网连接域名。
    * publicConnectAddress  实例公网连接IP地址。
    * publicConnectDomainName  实例公网连接域名。
    * port  实例连接端口。
    * status  实例的状态。
    * description  实例描述。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   [- dms.instance.rabbitmq.single.c3.2u4g：RabbitMQ单机，vm规格2u4g   - dms.instance.rabbitmq.single.c3.4u8g：RabbitMQ单机，vm规格4u8g   - dms.instance.rabbitmq.single.c3.8u16g：RabbitMQ单机，vm规格8u16g   - dms.instance.rabbitmq.single.c3.16u32g：RabbitMQ单机，vm规格16u32g   - dms.instance.rabbitmq.cluster.c3.4u8g.3：RabbitMQ集群，vm规格4u8g，3个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.5：RabbitMQ集群，vm规格4u8g，5个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.7：RabbitMQ集群，vm规格4u8g，7个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.3：RabbitMQ集群，vm规格8u16g，3个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.5：RabbitMQ集群，vm规格8u16g，5个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.7：RabbitMQ集群，vm规格8u16g，7个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.3：RabbitMQ集群，vm规格16u32g，3个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.5：RabbitMQ集群，vm规格16u32g，5个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.7：RabbitMQ集群，vm规格16u32g，7个节点](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc)
    * chargingMode  付费模式，1表示按需计费，0表示包年/包月计费。
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * userId  用户ID。
    * userName  用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：未开启
    * publicipAddress  RabbitMQ实例绑定的弹性IP地址。  如果未开启公网访问功能，该字段值为null。
    * publicipId  RabbitMQ实例绑定的弹性IP地址的ID。  如果未开启公网访问功能，该字段值为null。
    * managementConnectAddress  RabbitMQ实例的管理地址。
    * managementConnectDomainName  RabbitMQ实例的管理域名。
    * publicManagementConnectAddress  RabbitMQ实例的公网管理地址。
    * publicManagementConnectDomainName  RabbitMQ实例的公网管理域名。
    * sslEnable  是否开启安全认证。   - true：开启   - false：未开启
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * availableZoneNames  实例节点所在的可用区，返回“可用区名称”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessUser' => null,
        'brokerNum' => 'int32',
        'name' => null,
        'engine' => null,
        'engineVersion' => null,
        'specification' => null,
        'storageSpace' => null,
        'usedStorageSpace' => null,
        'dnsEnable' => null,
        'connectAddress' => null,
        'connectDomainName' => null,
        'publicConnectAddress' => null,
        'publicConnectDomainName' => null,
        'port' => null,
        'status' => null,
        'description' => null,
        'instanceId' => null,
        'resourceSpecCode' => null,
        'chargingMode' => null,
        'vpcId' => null,
        'vpcName' => null,
        'createdAt' => null,
        'userId' => null,
        'userName' => null,
        'orderId' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'enablePublicip' => null,
        'publicipAddress' => null,
        'publicipId' => null,
        'managementConnectAddress' => null,
        'managementConnectDomainName' => null,
        'publicManagementConnectAddress' => null,
        'publicManagementConnectDomainName' => null,
        'sslEnable' => null,
        'enterpriseProjectId' => null,
        'isLogicalVolume' => null,
        'extendTimes' => null,
        'type' => null,
        'productId' => null,
        'securityGroupId' => null,
        'securityGroupName' => null,
        'subnetId' => null,
        'availableZones' => null,
        'availableZoneNames' => null,
        'totalStorageSpace' => null,
        'storageResourceId' => null,
        'storageSpecCode' => null,
        'ipv6Enable' => null,
        'ipv6ConnectAddresses' => null,
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
    * accessUser  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * brokerNum  代理个数。
    * name  实例名称。
    * engine  消息引擎。
    * engineVersion  消息引擎版本。
    * specification  实例规格。   - RabbitMQ实例单机返回vm规格。   - RabbitMQ实例集群返回vm规格和节点数。
    * storageSpace  消息存储空间，单位：GB。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * dnsEnable  实例是否开启域名访问功能。 - true：开启 - false：未开启
    * connectAddress  实例内网连接IP地址。
    * connectDomainName  实例内网连接域名。
    * publicConnectAddress  实例公网连接IP地址。
    * publicConnectDomainName  实例公网连接域名。
    * port  实例连接端口。
    * status  实例的状态。
    * description  实例描述。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   [- dms.instance.rabbitmq.single.c3.2u4g：RabbitMQ单机，vm规格2u4g   - dms.instance.rabbitmq.single.c3.4u8g：RabbitMQ单机，vm规格4u8g   - dms.instance.rabbitmq.single.c3.8u16g：RabbitMQ单机，vm规格8u16g   - dms.instance.rabbitmq.single.c3.16u32g：RabbitMQ单机，vm规格16u32g   - dms.instance.rabbitmq.cluster.c3.4u8g.3：RabbitMQ集群，vm规格4u8g，3个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.5：RabbitMQ集群，vm规格4u8g，5个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.7：RabbitMQ集群，vm规格4u8g，7个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.3：RabbitMQ集群，vm规格8u16g，3个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.5：RabbitMQ集群，vm规格8u16g，5个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.7：RabbitMQ集群，vm规格8u16g，7个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.3：RabbitMQ集群，vm规格16u32g，3个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.5：RabbitMQ集群，vm规格16u32g，5个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.7：RabbitMQ集群，vm规格16u32g，7个节点](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc)
    * chargingMode  付费模式，1表示按需计费，0表示包年/包月计费。
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * userId  用户ID。
    * userName  用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：未开启
    * publicipAddress  RabbitMQ实例绑定的弹性IP地址。  如果未开启公网访问功能，该字段值为null。
    * publicipId  RabbitMQ实例绑定的弹性IP地址的ID。  如果未开启公网访问功能，该字段值为null。
    * managementConnectAddress  RabbitMQ实例的管理地址。
    * managementConnectDomainName  RabbitMQ实例的管理域名。
    * publicManagementConnectAddress  RabbitMQ实例的公网管理地址。
    * publicManagementConnectDomainName  RabbitMQ实例的公网管理域名。
    * sslEnable  是否开启安全认证。   - true：开启   - false：未开启
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * availableZoneNames  实例节点所在的可用区，返回“可用区名称”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessUser' => 'access_user',
            'brokerNum' => 'broker_num',
            'name' => 'name',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'specification' => 'specification',
            'storageSpace' => 'storage_space',
            'usedStorageSpace' => 'used_storage_space',
            'dnsEnable' => 'dns_enable',
            'connectAddress' => 'connect_address',
            'connectDomainName' => 'connect_domain_name',
            'publicConnectAddress' => 'public_connect_address',
            'publicConnectDomainName' => 'public_connect_domain_name',
            'port' => 'port',
            'status' => 'status',
            'description' => 'description',
            'instanceId' => 'instance_id',
            'resourceSpecCode' => 'resource_spec_code',
            'chargingMode' => 'charging_mode',
            'vpcId' => 'vpc_id',
            'vpcName' => 'vpc_name',
            'createdAt' => 'created_at',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'orderId' => 'order_id',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'enablePublicip' => 'enable_publicip',
            'publicipAddress' => 'publicip_address',
            'publicipId' => 'publicip_id',
            'managementConnectAddress' => 'management_connect_address',
            'managementConnectDomainName' => 'management_connect_domain_name',
            'publicManagementConnectAddress' => 'public_management_connect_address',
            'publicManagementConnectDomainName' => 'public_management_connect_domain_name',
            'sslEnable' => 'ssl_enable',
            'enterpriseProjectId' => 'enterprise_project_id',
            'isLogicalVolume' => 'is_logical_volume',
            'extendTimes' => 'extend_times',
            'type' => 'type',
            'productId' => 'product_id',
            'securityGroupId' => 'security_group_id',
            'securityGroupName' => 'security_group_name',
            'subnetId' => 'subnet_id',
            'availableZones' => 'available_zones',
            'availableZoneNames' => 'available_zone_names',
            'totalStorageSpace' => 'total_storage_space',
            'storageResourceId' => 'storage_resource_id',
            'storageSpecCode' => 'storage_spec_code',
            'ipv6Enable' => 'ipv6_enable',
            'ipv6ConnectAddresses' => 'ipv6_connect_addresses',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessUser  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * brokerNum  代理个数。
    * name  实例名称。
    * engine  消息引擎。
    * engineVersion  消息引擎版本。
    * specification  实例规格。   - RabbitMQ实例单机返回vm规格。   - RabbitMQ实例集群返回vm规格和节点数。
    * storageSpace  消息存储空间，单位：GB。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * dnsEnable  实例是否开启域名访问功能。 - true：开启 - false：未开启
    * connectAddress  实例内网连接IP地址。
    * connectDomainName  实例内网连接域名。
    * publicConnectAddress  实例公网连接IP地址。
    * publicConnectDomainName  实例公网连接域名。
    * port  实例连接端口。
    * status  实例的状态。
    * description  实例描述。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   [- dms.instance.rabbitmq.single.c3.2u4g：RabbitMQ单机，vm规格2u4g   - dms.instance.rabbitmq.single.c3.4u8g：RabbitMQ单机，vm规格4u8g   - dms.instance.rabbitmq.single.c3.8u16g：RabbitMQ单机，vm规格8u16g   - dms.instance.rabbitmq.single.c3.16u32g：RabbitMQ单机，vm规格16u32g   - dms.instance.rabbitmq.cluster.c3.4u8g.3：RabbitMQ集群，vm规格4u8g，3个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.5：RabbitMQ集群，vm规格4u8g，5个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.7：RabbitMQ集群，vm规格4u8g，7个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.3：RabbitMQ集群，vm规格8u16g，3个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.5：RabbitMQ集群，vm规格8u16g，5个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.7：RabbitMQ集群，vm规格8u16g，7个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.3：RabbitMQ集群，vm规格16u32g，3个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.5：RabbitMQ集群，vm规格16u32g，5个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.7：RabbitMQ集群，vm规格16u32g，7个节点](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc)
    * chargingMode  付费模式，1表示按需计费，0表示包年/包月计费。
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * userId  用户ID。
    * userName  用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：未开启
    * publicipAddress  RabbitMQ实例绑定的弹性IP地址。  如果未开启公网访问功能，该字段值为null。
    * publicipId  RabbitMQ实例绑定的弹性IP地址的ID。  如果未开启公网访问功能，该字段值为null。
    * managementConnectAddress  RabbitMQ实例的管理地址。
    * managementConnectDomainName  RabbitMQ实例的管理域名。
    * publicManagementConnectAddress  RabbitMQ实例的公网管理地址。
    * publicManagementConnectDomainName  RabbitMQ实例的公网管理域名。
    * sslEnable  是否开启安全认证。   - true：开启   - false：未开启
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * availableZoneNames  实例节点所在的可用区，返回“可用区名称”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessUser' => 'setAccessUser',
            'brokerNum' => 'setBrokerNum',
            'name' => 'setName',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'specification' => 'setSpecification',
            'storageSpace' => 'setStorageSpace',
            'usedStorageSpace' => 'setUsedStorageSpace',
            'dnsEnable' => 'setDnsEnable',
            'connectAddress' => 'setConnectAddress',
            'connectDomainName' => 'setConnectDomainName',
            'publicConnectAddress' => 'setPublicConnectAddress',
            'publicConnectDomainName' => 'setPublicConnectDomainName',
            'port' => 'setPort',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'instanceId' => 'setInstanceId',
            'resourceSpecCode' => 'setResourceSpecCode',
            'chargingMode' => 'setChargingMode',
            'vpcId' => 'setVpcId',
            'vpcName' => 'setVpcName',
            'createdAt' => 'setCreatedAt',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'orderId' => 'setOrderId',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'enablePublicip' => 'setEnablePublicip',
            'publicipAddress' => 'setPublicipAddress',
            'publicipId' => 'setPublicipId',
            'managementConnectAddress' => 'setManagementConnectAddress',
            'managementConnectDomainName' => 'setManagementConnectDomainName',
            'publicManagementConnectAddress' => 'setPublicManagementConnectAddress',
            'publicManagementConnectDomainName' => 'setPublicManagementConnectDomainName',
            'sslEnable' => 'setSslEnable',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'isLogicalVolume' => 'setIsLogicalVolume',
            'extendTimes' => 'setExtendTimes',
            'type' => 'setType',
            'productId' => 'setProductId',
            'securityGroupId' => 'setSecurityGroupId',
            'securityGroupName' => 'setSecurityGroupName',
            'subnetId' => 'setSubnetId',
            'availableZones' => 'setAvailableZones',
            'availableZoneNames' => 'setAvailableZoneNames',
            'totalStorageSpace' => 'setTotalStorageSpace',
            'storageResourceId' => 'setStorageResourceId',
            'storageSpecCode' => 'setStorageSpecCode',
            'ipv6Enable' => 'setIpv6Enable',
            'ipv6ConnectAddresses' => 'setIpv6ConnectAddresses',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessUser  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * brokerNum  代理个数。
    * name  实例名称。
    * engine  消息引擎。
    * engineVersion  消息引擎版本。
    * specification  实例规格。   - RabbitMQ实例单机返回vm规格。   - RabbitMQ实例集群返回vm规格和节点数。
    * storageSpace  消息存储空间，单位：GB。
    * usedStorageSpace  已使用的消息存储空间，单位：GB。
    * dnsEnable  实例是否开启域名访问功能。 - true：开启 - false：未开启
    * connectAddress  实例内网连接IP地址。
    * connectDomainName  实例内网连接域名。
    * publicConnectAddress  实例公网连接IP地址。
    * publicConnectDomainName  实例公网连接域名。
    * port  实例连接端口。
    * status  实例的状态。
    * description  实例描述。
    * instanceId  实例ID。
    * resourceSpecCode  资源规格标识。   [- dms.instance.rabbitmq.single.c3.2u4g：RabbitMQ单机，vm规格2u4g   - dms.instance.rabbitmq.single.c3.4u8g：RabbitMQ单机，vm规格4u8g   - dms.instance.rabbitmq.single.c3.8u16g：RabbitMQ单机，vm规格8u16g   - dms.instance.rabbitmq.single.c3.16u32g：RabbitMQ单机，vm规格16u32g   - dms.instance.rabbitmq.cluster.c3.4u8g.3：RabbitMQ集群，vm规格4u8g，3个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.5：RabbitMQ集群，vm规格4u8g，5个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.7：RabbitMQ集群，vm规格4u8g，7个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.3：RabbitMQ集群，vm规格8u16g，3个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.5：RabbitMQ集群，vm规格8u16g，5个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.7：RabbitMQ集群，vm规格8u16g，7个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.3：RabbitMQ集群，vm规格16u32g，3个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.5：RabbitMQ集群，vm规格16u32g，5个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.7：RabbitMQ集群，vm规格16u32g，7个节点](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc)
    * chargingMode  付费模式，1表示按需计费，0表示包年/包月计费。
    * vpcId  VPC ID。
    * vpcName  VPC的名称。
    * createdAt  完成创建时间。格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    * userId  用户ID。
    * userName  用户名。
    * orderId  订单ID，只有在包周期计费时才会有order_id值，其他计费方式order_id值为空。
    * maintainBegin  维护时间窗开始时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm:ss。
    * enablePublicip  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：未开启
    * publicipAddress  RabbitMQ实例绑定的弹性IP地址。  如果未开启公网访问功能，该字段值为null。
    * publicipId  RabbitMQ实例绑定的弹性IP地址的ID。  如果未开启公网访问功能，该字段值为null。
    * managementConnectAddress  RabbitMQ实例的管理地址。
    * managementConnectDomainName  RabbitMQ实例的管理域名。
    * publicManagementConnectAddress  RabbitMQ实例的公网管理地址。
    * publicManagementConnectDomainName  RabbitMQ实例的公网管理域名。
    * sslEnable  是否开启安全认证。   - true：开启   - false：未开启
    * enterpriseProjectId  企业项目ID。
    * isLogicalVolume  实例扩容时用于区分老实例与新实例。 - true：新创建的实例，允许磁盘动态扩容不需要重启。 - false：老实例
    * extendTimes  实例扩容磁盘次数，如果超过20次则无法扩容磁盘。
    * type  实例类型：集群，cluster。
    * productId  产品标识。
    * securityGroupId  安全组ID。
    * securityGroupName  租户安全组名称。
    * subnetId  子网ID。
    * availableZones  实例节点所在的可用区，返回“可用区ID”。
    * availableZoneNames  实例节点所在的可用区，返回“可用区名称”。
    * totalStorageSpace  总共消息存储空间，单位：GB。
    * storageResourceId  存储资源ID。
    * storageSpecCode  IO规格。
    * ipv6Enable  是否开启ipv6。
    * ipv6ConnectAddresses  IPv6的连接地址。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessUser' => 'getAccessUser',
            'brokerNum' => 'getBrokerNum',
            'name' => 'getName',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'specification' => 'getSpecification',
            'storageSpace' => 'getStorageSpace',
            'usedStorageSpace' => 'getUsedStorageSpace',
            'dnsEnable' => 'getDnsEnable',
            'connectAddress' => 'getConnectAddress',
            'connectDomainName' => 'getConnectDomainName',
            'publicConnectAddress' => 'getPublicConnectAddress',
            'publicConnectDomainName' => 'getPublicConnectDomainName',
            'port' => 'getPort',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'instanceId' => 'getInstanceId',
            'resourceSpecCode' => 'getResourceSpecCode',
            'chargingMode' => 'getChargingMode',
            'vpcId' => 'getVpcId',
            'vpcName' => 'getVpcName',
            'createdAt' => 'getCreatedAt',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'orderId' => 'getOrderId',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'enablePublicip' => 'getEnablePublicip',
            'publicipAddress' => 'getPublicipAddress',
            'publicipId' => 'getPublicipId',
            'managementConnectAddress' => 'getManagementConnectAddress',
            'managementConnectDomainName' => 'getManagementConnectDomainName',
            'publicManagementConnectAddress' => 'getPublicManagementConnectAddress',
            'publicManagementConnectDomainName' => 'getPublicManagementConnectDomainName',
            'sslEnable' => 'getSslEnable',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'isLogicalVolume' => 'getIsLogicalVolume',
            'extendTimes' => 'getExtendTimes',
            'type' => 'getType',
            'productId' => 'getProductId',
            'securityGroupId' => 'getSecurityGroupId',
            'securityGroupName' => 'getSecurityGroupName',
            'subnetId' => 'getSubnetId',
            'availableZones' => 'getAvailableZones',
            'availableZoneNames' => 'getAvailableZoneNames',
            'totalStorageSpace' => 'getTotalStorageSpace',
            'storageResourceId' => 'getStorageResourceId',
            'storageSpecCode' => 'getStorageSpecCode',
            'ipv6Enable' => 'getIpv6Enable',
            'ipv6ConnectAddresses' => 'getIpv6ConnectAddresses',
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
    const BROKER_NUM_1 = 1;
    const BROKER_NUM_3 = 3;
    const BROKER_NUM_5 = 5;
    const BROKER_NUM_7 = 7;
    const TYPE_SINGLE = 'single';
    const TYPE_CLUSTER = 'cluster';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBrokerNumAllowableValues()
    {
        return [
            self::BROKER_NUM_1,
            self::BROKER_NUM_3,
            self::BROKER_NUM_5,
            self::BROKER_NUM_7,
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
        $this->container['accessUser'] = isset($data['accessUser']) ? $data['accessUser'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['storageSpace'] = isset($data['storageSpace']) ? $data['storageSpace'] : null;
        $this->container['usedStorageSpace'] = isset($data['usedStorageSpace']) ? $data['usedStorageSpace'] : null;
        $this->container['dnsEnable'] = isset($data['dnsEnable']) ? $data['dnsEnable'] : null;
        $this->container['connectAddress'] = isset($data['connectAddress']) ? $data['connectAddress'] : null;
        $this->container['connectDomainName'] = isset($data['connectDomainName']) ? $data['connectDomainName'] : null;
        $this->container['publicConnectAddress'] = isset($data['publicConnectAddress']) ? $data['publicConnectAddress'] : null;
        $this->container['publicConnectDomainName'] = isset($data['publicConnectDomainName']) ? $data['publicConnectDomainName'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['publicipAddress'] = isset($data['publicipAddress']) ? $data['publicipAddress'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['managementConnectAddress'] = isset($data['managementConnectAddress']) ? $data['managementConnectAddress'] : null;
        $this->container['managementConnectDomainName'] = isset($data['managementConnectDomainName']) ? $data['managementConnectDomainName'] : null;
        $this->container['publicManagementConnectAddress'] = isset($data['publicManagementConnectAddress']) ? $data['publicManagementConnectAddress'] : null;
        $this->container['publicManagementConnectDomainName'] = isset($data['publicManagementConnectDomainName']) ? $data['publicManagementConnectDomainName'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['isLogicalVolume'] = isset($data['isLogicalVolume']) ? $data['isLogicalVolume'] : null;
        $this->container['extendTimes'] = isset($data['extendTimes']) ? $data['extendTimes'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['securityGroupName'] = isset($data['securityGroupName']) ? $data['securityGroupName'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['availableZoneNames'] = isset($data['availableZoneNames']) ? $data['availableZoneNames'] : null;
        $this->container['totalStorageSpace'] = isset($data['totalStorageSpace']) ? $data['totalStorageSpace'] : null;
        $this->container['storageResourceId'] = isset($data['storageResourceId']) ? $data['storageResourceId'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['ipv6ConnectAddresses'] = isset($data['ipv6ConnectAddresses']) ? $data['ipv6ConnectAddresses'] : null;
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
            $allowedValues = $this->getBrokerNumAllowableValues();
                if (!is_null($this->container['brokerNum']) && !in_array($this->container['brokerNum'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'brokerNum', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets accessUser
    *  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
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
    * @param string|null $accessUser 认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    *
    * @return $this
    */
    public function setAccessUser($accessUser)
    {
        $this->container['accessUser'] = $accessUser;
        return $this;
    }

    /**
    * Gets brokerNum
    *  代理个数。
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
    * @param int|null $brokerNum 代理个数。
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
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
    * Gets engine
    *  消息引擎。
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
    * @param string|null $engine 消息引擎。
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
    *  消息引擎版本。
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
    * @param string|null $engineVersion 消息引擎版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets specification
    *  实例规格。   - RabbitMQ实例单机返回vm规格。   - RabbitMQ实例集群返回vm规格和节点数。
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
    * @param string|null $specification 实例规格。   - RabbitMQ实例单机返回vm规格。   - RabbitMQ实例集群返回vm规格和节点数。
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
    * Gets dnsEnable
    *  实例是否开启域名访问功能。 - true：开启 - false：未开启
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
    * @param bool|null $dnsEnable 实例是否开启域名访问功能。 - true：开启 - false：未开启
    *
    * @return $this
    */
    public function setDnsEnable($dnsEnable)
    {
        $this->container['dnsEnable'] = $dnsEnable;
        return $this;
    }

    /**
    * Gets connectAddress
    *  实例内网连接IP地址。
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
    * @param string|null $connectAddress 实例内网连接IP地址。
    *
    * @return $this
    */
    public function setConnectAddress($connectAddress)
    {
        $this->container['connectAddress'] = $connectAddress;
        return $this;
    }

    /**
    * Gets connectDomainName
    *  实例内网连接域名。
    *
    * @return string|null
    */
    public function getConnectDomainName()
    {
        return $this->container['connectDomainName'];
    }

    /**
    * Sets connectDomainName
    *
    * @param string|null $connectDomainName 实例内网连接域名。
    *
    * @return $this
    */
    public function setConnectDomainName($connectDomainName)
    {
        $this->container['connectDomainName'] = $connectDomainName;
        return $this;
    }

    /**
    * Gets publicConnectAddress
    *  实例公网连接IP地址。
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
    * @param string|null $publicConnectAddress 实例公网连接IP地址。
    *
    * @return $this
    */
    public function setPublicConnectAddress($publicConnectAddress)
    {
        $this->container['publicConnectAddress'] = $publicConnectAddress;
        return $this;
    }

    /**
    * Gets publicConnectDomainName
    *  实例公网连接域名。
    *
    * @return string|null
    */
    public function getPublicConnectDomainName()
    {
        return $this->container['publicConnectDomainName'];
    }

    /**
    * Sets publicConnectDomainName
    *
    * @param string|null $publicConnectDomainName 实例公网连接域名。
    *
    * @return $this
    */
    public function setPublicConnectDomainName($publicConnectDomainName)
    {
        $this->container['publicConnectDomainName'] = $publicConnectDomainName;
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
    *  实例的状态。
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
    * @param string|null $status 实例的状态。
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
    *  资源规格标识。   [- dms.instance.rabbitmq.single.c3.2u4g：RabbitMQ单机，vm规格2u4g   - dms.instance.rabbitmq.single.c3.4u8g：RabbitMQ单机，vm规格4u8g   - dms.instance.rabbitmq.single.c3.8u16g：RabbitMQ单机，vm规格8u16g   - dms.instance.rabbitmq.single.c3.16u32g：RabbitMQ单机，vm规格16u32g   - dms.instance.rabbitmq.cluster.c3.4u8g.3：RabbitMQ集群，vm规格4u8g，3个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.5：RabbitMQ集群，vm规格4u8g，5个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.7：RabbitMQ集群，vm规格4u8g，7个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.3：RabbitMQ集群，vm规格8u16g，3个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.5：RabbitMQ集群，vm规格8u16g，5个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.7：RabbitMQ集群，vm规格8u16g，7个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.3：RabbitMQ集群，vm规格16u32g，3个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.5：RabbitMQ集群，vm规格16u32g，5个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.7：RabbitMQ集群，vm规格16u32g，7个节点](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc)
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
    * @param string|null $resourceSpecCode 资源规格标识。   [- dms.instance.rabbitmq.single.c3.2u4g：RabbitMQ单机，vm规格2u4g   - dms.instance.rabbitmq.single.c3.4u8g：RabbitMQ单机，vm规格4u8g   - dms.instance.rabbitmq.single.c3.8u16g：RabbitMQ单机，vm规格8u16g   - dms.instance.rabbitmq.single.c3.16u32g：RabbitMQ单机，vm规格16u32g   - dms.instance.rabbitmq.cluster.c3.4u8g.3：RabbitMQ集群，vm规格4u8g，3个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.5：RabbitMQ集群，vm规格4u8g，5个节点   - dms.instance.rabbitmq.cluster.c3.4u8g.7：RabbitMQ集群，vm规格4u8g，7个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.3：RabbitMQ集群，vm规格8u16g，3个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.5：RabbitMQ集群，vm规格8u16g，5个节点   - dms.instance.rabbitmq.cluster.c3.8u16g.7：RabbitMQ集群，vm规格8u16g，7个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.3：RabbitMQ集群，vm规格16u32g，3个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.5：RabbitMQ集群，vm规格16u32g，5个节点   - dms.instance.rabbitmq.cluster.c3.16u32g.7：RabbitMQ集群，vm规格16u32g，7个节点](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc)
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
    *  付费模式，1表示按需计费，0表示包年/包月计费。
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
    * @param int|null $chargingMode 付费模式，1表示按需计费，0表示包年/包月计费。
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
    *  完成创建时间。格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
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
    * @param string|null $createdAt 完成创建时间。格式为时间戳，指从格林威治时间 1970年01月01日00时00分00秒起至指定时间的偏差总毫秒数。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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
    *  RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：未开启
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
    * @param bool|null $enablePublicip RabbitMQ实例是否开启公网访问功能。   - true：开启   - false：未开启
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets publicipAddress
    *  RabbitMQ实例绑定的弹性IP地址。  如果未开启公网访问功能，该字段值为null。
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
    * @param string|null $publicipAddress RabbitMQ实例绑定的弹性IP地址。  如果未开启公网访问功能，该字段值为null。
    *
    * @return $this
    */
    public function setPublicipAddress($publicipAddress)
    {
        $this->container['publicipAddress'] = $publicipAddress;
        return $this;
    }

    /**
    * Gets publicipId
    *  RabbitMQ实例绑定的弹性IP地址的ID。  如果未开启公网访问功能，该字段值为null。
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
    * @param string|null $publicipId RabbitMQ实例绑定的弹性IP地址的ID。  如果未开启公网访问功能，该字段值为null。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets managementConnectAddress
    *  RabbitMQ实例的管理地址。
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
    * @param string|null $managementConnectAddress RabbitMQ实例的管理地址。
    *
    * @return $this
    */
    public function setManagementConnectAddress($managementConnectAddress)
    {
        $this->container['managementConnectAddress'] = $managementConnectAddress;
        return $this;
    }

    /**
    * Gets managementConnectDomainName
    *  RabbitMQ实例的管理域名。
    *
    * @return string|null
    */
    public function getManagementConnectDomainName()
    {
        return $this->container['managementConnectDomainName'];
    }

    /**
    * Sets managementConnectDomainName
    *
    * @param string|null $managementConnectDomainName RabbitMQ实例的管理域名。
    *
    * @return $this
    */
    public function setManagementConnectDomainName($managementConnectDomainName)
    {
        $this->container['managementConnectDomainName'] = $managementConnectDomainName;
        return $this;
    }

    /**
    * Gets publicManagementConnectAddress
    *  RabbitMQ实例的公网管理地址。
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
    * @param string|null $publicManagementConnectAddress RabbitMQ实例的公网管理地址。
    *
    * @return $this
    */
    public function setPublicManagementConnectAddress($publicManagementConnectAddress)
    {
        $this->container['publicManagementConnectAddress'] = $publicManagementConnectAddress;
        return $this;
    }

    /**
    * Gets publicManagementConnectDomainName
    *  RabbitMQ实例的公网管理域名。
    *
    * @return string|null
    */
    public function getPublicManagementConnectDomainName()
    {
        return $this->container['publicManagementConnectDomainName'];
    }

    /**
    * Sets publicManagementConnectDomainName
    *
    * @param string|null $publicManagementConnectDomainName RabbitMQ实例的公网管理域名。
    *
    * @return $this
    */
    public function setPublicManagementConnectDomainName($publicManagementConnectDomainName)
    {
        $this->container['publicManagementConnectDomainName'] = $publicManagementConnectDomainName;
        return $this;
    }

    /**
    * Gets sslEnable
    *  是否开启安全认证。   - true：开启   - false：未开启
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
    * @param bool|null $sslEnable 是否开启安全认证。   - true：开启   - false：未开启
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
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
    * Gets availableZoneNames
    *  实例节点所在的可用区，返回“可用区名称”。
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
    * @param string[]|null $availableZoneNames 实例节点所在的可用区，返回“可用区名称”。
    *
    * @return $this
    */
    public function setAvailableZoneNames($availableZoneNames)
    {
        $this->container['availableZoneNames'] = $availableZoneNames;
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
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\TagEntity[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\TagEntity[]|null $tags 标签列表。
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

