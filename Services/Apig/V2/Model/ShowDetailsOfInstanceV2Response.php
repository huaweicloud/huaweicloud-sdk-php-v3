<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailsOfInstanceV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailsOfInstanceV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业账号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    * description  实例描述
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * maintainBegin  '维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。'
    * maintainEnd  '维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次'。
    * ingressIp  实例入口，虚拟私有云访问地址
    * ingressIpV6  实例入口，虚拟私有云访问地址 (IPv6)
    * userId  实例所属用户ID
    * natEipIpv6Cidr  出公网网段 (IPv6)  。  当前仅部分region部分可用区支持IPv6
    * eipIpv6Address  弹性IP地址(IPv6)。  当前仅部分region部分可用区支持IPv6
    * natEipAddress  实例出公网IP
    * bandwidthSize  出公网带宽
    * bandwidthChargingMode  出公网带宽计费模式
    * availableZoneIds  可用区
    * instanceVersion  实例版本编号
    * virsubnetId  子网的网络ID。  暂不支持
    * romaEipAddress  roma弹性公网IP。  暂不支持
    * listeners  监听信息  暂不支持
    * supportedFeatures  实例支持的特性列表
    * endpointService  endpointService
    * endpointServices  终端节点服务列表
    * nodeIps  nodeIps
    * publicips  公网入口地址列表
    * privateips  私网入口地址列表
    * isReleasable  实例是否可释放 - true：可释放 - false：不可释放
    * ingressBandwidthChargingMode  入公网带宽计费模式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'instanceName' => 'string',
            'status' => 'string',
            'instanceStatus' => 'int',
            'type' => 'string',
            'spec' => 'string',
            'createTime' => 'int',
            'enterpriseProjectId' => 'string',
            'eipAddress' => 'string',
            'chargingMode' => 'int',
            'cbcMetadata' => 'string',
            'loadbalancerProvider' => 'string',
            'cbcOperationLocks' => '\HuaweiCloud\SDK\Apig\V2\Model\CbcOperationLock[]',
            'description' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'ingressIp' => 'string',
            'ingressIpV6' => 'string',
            'userId' => 'string',
            'natEipIpv6Cidr' => 'string',
            'eipIpv6Address' => 'string',
            'natEipAddress' => 'string',
            'bandwidthSize' => 'int',
            'bandwidthChargingMode' => 'string',
            'availableZoneIds' => 'string',
            'instanceVersion' => 'string',
            'virsubnetId' => 'string',
            'romaEipAddress' => 'string',
            'listeners' => 'object',
            'supportedFeatures' => 'string[]',
            'endpointService' => '\HuaweiCloud\SDK\Apig\V2\Model\EndpointService',
            'endpointServices' => '\HuaweiCloud\SDK\Apig\V2\Model\EndpointService[]',
            'nodeIps' => '\HuaweiCloud\SDK\Apig\V2\Model\NodeIps',
            'publicips' => '\HuaweiCloud\SDK\Apig\V2\Model\IpDetails[]',
            'privateips' => '\HuaweiCloud\SDK\Apig\V2\Model\IpDetails[]',
            'isReleasable' => 'bool',
            'ingressBandwidthChargingMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业账号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    * description  实例描述
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * maintainBegin  '维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。'
    * maintainEnd  '维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次'。
    * ingressIp  实例入口，虚拟私有云访问地址
    * ingressIpV6  实例入口，虚拟私有云访问地址 (IPv6)
    * userId  实例所属用户ID
    * natEipIpv6Cidr  出公网网段 (IPv6)  。  当前仅部分region部分可用区支持IPv6
    * eipIpv6Address  弹性IP地址(IPv6)。  当前仅部分region部分可用区支持IPv6
    * natEipAddress  实例出公网IP
    * bandwidthSize  出公网带宽
    * bandwidthChargingMode  出公网带宽计费模式
    * availableZoneIds  可用区
    * instanceVersion  实例版本编号
    * virsubnetId  子网的网络ID。  暂不支持
    * romaEipAddress  roma弹性公网IP。  暂不支持
    * listeners  监听信息  暂不支持
    * supportedFeatures  实例支持的特性列表
    * endpointService  endpointService
    * endpointServices  终端节点服务列表
    * nodeIps  nodeIps
    * publicips  公网入口地址列表
    * privateips  私网入口地址列表
    * isReleasable  实例是否可释放 - true：可释放 - false：不可释放
    * ingressBandwidthChargingMode  入公网带宽计费模式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'instanceName' => null,
        'status' => null,
        'instanceStatus' => 'int32',
        'type' => null,
        'spec' => null,
        'createTime' => 'int64',
        'enterpriseProjectId' => null,
        'eipAddress' => null,
        'chargingMode' => 'int32',
        'cbcMetadata' => null,
        'loadbalancerProvider' => null,
        'cbcOperationLocks' => null,
        'description' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'ingressIp' => null,
        'ingressIpV6' => null,
        'userId' => null,
        'natEipIpv6Cidr' => null,
        'eipIpv6Address' => null,
        'natEipAddress' => null,
        'bandwidthSize' => 'int32',
        'bandwidthChargingMode' => null,
        'availableZoneIds' => null,
        'instanceVersion' => null,
        'virsubnetId' => null,
        'romaEipAddress' => null,
        'listeners' => null,
        'supportedFeatures' => null,
        'endpointService' => null,
        'endpointServices' => null,
        'nodeIps' => null,
        'publicips' => null,
        'privateips' => null,
        'isReleasable' => null,
        'ingressBandwidthChargingMode' => null
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
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业账号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    * description  实例描述
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * maintainBegin  '维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。'
    * maintainEnd  '维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次'。
    * ingressIp  实例入口，虚拟私有云访问地址
    * ingressIpV6  实例入口，虚拟私有云访问地址 (IPv6)
    * userId  实例所属用户ID
    * natEipIpv6Cidr  出公网网段 (IPv6)  。  当前仅部分region部分可用区支持IPv6
    * eipIpv6Address  弹性IP地址(IPv6)。  当前仅部分region部分可用区支持IPv6
    * natEipAddress  实例出公网IP
    * bandwidthSize  出公网带宽
    * bandwidthChargingMode  出公网带宽计费模式
    * availableZoneIds  可用区
    * instanceVersion  实例版本编号
    * virsubnetId  子网的网络ID。  暂不支持
    * romaEipAddress  roma弹性公网IP。  暂不支持
    * listeners  监听信息  暂不支持
    * supportedFeatures  实例支持的特性列表
    * endpointService  endpointService
    * endpointServices  终端节点服务列表
    * nodeIps  nodeIps
    * publicips  公网入口地址列表
    * privateips  私网入口地址列表
    * isReleasable  实例是否可释放 - true：可释放 - false：不可释放
    * ingressBandwidthChargingMode  入公网带宽计费模式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'instanceName' => 'instance_name',
            'status' => 'status',
            'instanceStatus' => 'instance_status',
            'type' => 'type',
            'spec' => 'spec',
            'createTime' => 'create_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'eipAddress' => 'eip_address',
            'chargingMode' => 'charging_mode',
            'cbcMetadata' => 'cbc_metadata',
            'loadbalancerProvider' => 'loadbalancer_provider',
            'cbcOperationLocks' => 'cbc_operation_locks',
            'description' => 'description',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'ingressIp' => 'ingress_ip',
            'ingressIpV6' => 'ingress_ip_v6',
            'userId' => 'user_id',
            'natEipIpv6Cidr' => 'nat_eip_ipv6_cidr',
            'eipIpv6Address' => 'eip_ipv6_address',
            'natEipAddress' => 'nat_eip_address',
            'bandwidthSize' => 'bandwidth_size',
            'bandwidthChargingMode' => 'bandwidth_charging_mode',
            'availableZoneIds' => 'available_zone_ids',
            'instanceVersion' => 'instance_version',
            'virsubnetId' => 'virsubnet_id',
            'romaEipAddress' => 'roma_eip_address',
            'listeners' => 'listeners',
            'supportedFeatures' => 'supported_features',
            'endpointService' => 'endpoint_service',
            'endpointServices' => 'endpoint_services',
            'nodeIps' => 'node_ips',
            'publicips' => 'publicips',
            'privateips' => 'privateips',
            'isReleasable' => 'is_releasable',
            'ingressBandwidthChargingMode' => 'ingress_bandwidth_charging_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业账号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    * description  实例描述
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * maintainBegin  '维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。'
    * maintainEnd  '维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次'。
    * ingressIp  实例入口，虚拟私有云访问地址
    * ingressIpV6  实例入口，虚拟私有云访问地址 (IPv6)
    * userId  实例所属用户ID
    * natEipIpv6Cidr  出公网网段 (IPv6)  。  当前仅部分region部分可用区支持IPv6
    * eipIpv6Address  弹性IP地址(IPv6)。  当前仅部分region部分可用区支持IPv6
    * natEipAddress  实例出公网IP
    * bandwidthSize  出公网带宽
    * bandwidthChargingMode  出公网带宽计费模式
    * availableZoneIds  可用区
    * instanceVersion  实例版本编号
    * virsubnetId  子网的网络ID。  暂不支持
    * romaEipAddress  roma弹性公网IP。  暂不支持
    * listeners  监听信息  暂不支持
    * supportedFeatures  实例支持的特性列表
    * endpointService  endpointService
    * endpointServices  终端节点服务列表
    * nodeIps  nodeIps
    * publicips  公网入口地址列表
    * privateips  私网入口地址列表
    * isReleasable  实例是否可释放 - true：可释放 - false：不可释放
    * ingressBandwidthChargingMode  入公网带宽计费模式
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'instanceName' => 'setInstanceName',
            'status' => 'setStatus',
            'instanceStatus' => 'setInstanceStatus',
            'type' => 'setType',
            'spec' => 'setSpec',
            'createTime' => 'setCreateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'eipAddress' => 'setEipAddress',
            'chargingMode' => 'setChargingMode',
            'cbcMetadata' => 'setCbcMetadata',
            'loadbalancerProvider' => 'setLoadbalancerProvider',
            'cbcOperationLocks' => 'setCbcOperationLocks',
            'description' => 'setDescription',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'ingressIp' => 'setIngressIp',
            'ingressIpV6' => 'setIngressIpV6',
            'userId' => 'setUserId',
            'natEipIpv6Cidr' => 'setNatEipIpv6Cidr',
            'eipIpv6Address' => 'setEipIpv6Address',
            'natEipAddress' => 'setNatEipAddress',
            'bandwidthSize' => 'setBandwidthSize',
            'bandwidthChargingMode' => 'setBandwidthChargingMode',
            'availableZoneIds' => 'setAvailableZoneIds',
            'instanceVersion' => 'setInstanceVersion',
            'virsubnetId' => 'setVirsubnetId',
            'romaEipAddress' => 'setRomaEipAddress',
            'listeners' => 'setListeners',
            'supportedFeatures' => 'setSupportedFeatures',
            'endpointService' => 'setEndpointService',
            'endpointServices' => 'setEndpointServices',
            'nodeIps' => 'setNodeIps',
            'publicips' => 'setPublicips',
            'privateips' => 'setPrivateips',
            'isReleasable' => 'setIsReleasable',
            'ingressBandwidthChargingMode' => 'setIngressBandwidthChargingMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID
    * projectId  实例所属租户ID
    * instanceName  实例名称
    * status  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    * instanceStatus  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    * type  实例类型  默认apig
    * spec  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    * createTime  实例创建时间。unix时间戳格式。
    * enterpriseProjectId  企业项目ID，企业账号必填
    * eipAddress  实例绑定的弹性IP地址
    * chargingMode  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * cbcMetadata  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    * loadbalancerProvider  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    * cbcOperationLocks  云运营限制操作锁
    * description  实例描述
    * vpcId  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
    * subnetId  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
    * securityGroupId  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    * maintainBegin  '维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。'
    * maintainEnd  '维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次'。
    * ingressIp  实例入口，虚拟私有云访问地址
    * ingressIpV6  实例入口，虚拟私有云访问地址 (IPv6)
    * userId  实例所属用户ID
    * natEipIpv6Cidr  出公网网段 (IPv6)  。  当前仅部分region部分可用区支持IPv6
    * eipIpv6Address  弹性IP地址(IPv6)。  当前仅部分region部分可用区支持IPv6
    * natEipAddress  实例出公网IP
    * bandwidthSize  出公网带宽
    * bandwidthChargingMode  出公网带宽计费模式
    * availableZoneIds  可用区
    * instanceVersion  实例版本编号
    * virsubnetId  子网的网络ID。  暂不支持
    * romaEipAddress  roma弹性公网IP。  暂不支持
    * listeners  监听信息  暂不支持
    * supportedFeatures  实例支持的特性列表
    * endpointService  endpointService
    * endpointServices  终端节点服务列表
    * nodeIps  nodeIps
    * publicips  公网入口地址列表
    * privateips  私网入口地址列表
    * isReleasable  实例是否可释放 - true：可释放 - false：不可释放
    * ingressBandwidthChargingMode  入公网带宽计费模式
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'instanceName' => 'getInstanceName',
            'status' => 'getStatus',
            'instanceStatus' => 'getInstanceStatus',
            'type' => 'getType',
            'spec' => 'getSpec',
            'createTime' => 'getCreateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'eipAddress' => 'getEipAddress',
            'chargingMode' => 'getChargingMode',
            'cbcMetadata' => 'getCbcMetadata',
            'loadbalancerProvider' => 'getLoadbalancerProvider',
            'cbcOperationLocks' => 'getCbcOperationLocks',
            'description' => 'getDescription',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'ingressIp' => 'getIngressIp',
            'ingressIpV6' => 'getIngressIpV6',
            'userId' => 'getUserId',
            'natEipIpv6Cidr' => 'getNatEipIpv6Cidr',
            'eipIpv6Address' => 'getEipIpv6Address',
            'natEipAddress' => 'getNatEipAddress',
            'bandwidthSize' => 'getBandwidthSize',
            'bandwidthChargingMode' => 'getBandwidthChargingMode',
            'availableZoneIds' => 'getAvailableZoneIds',
            'instanceVersion' => 'getInstanceVersion',
            'virsubnetId' => 'getVirsubnetId',
            'romaEipAddress' => 'getRomaEipAddress',
            'listeners' => 'getListeners',
            'supportedFeatures' => 'getSupportedFeatures',
            'endpointService' => 'getEndpointService',
            'endpointServices' => 'getEndpointServices',
            'nodeIps' => 'getNodeIps',
            'publicips' => 'getPublicips',
            'privateips' => 'getPrivateips',
            'isReleasable' => 'getIsReleasable',
            'ingressBandwidthChargingMode' => 'getIngressBandwidthChargingMode'
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
    const STATUS_CREATING = 'Creating';
    const STATUS_CREATE_SUCCESS = 'CreateSuccess';
    const STATUS_CREATE_FAIL = 'CreateFail';
    const STATUS_INITING = 'Initing';
    const STATUS_REGISTERING = 'Registering';
    const STATUS_RUNNING = 'Running';
    const STATUS_INITING_FAILED = 'InitingFailed';
    const STATUS_REGISTER_FAILED = 'RegisterFailed';
    const STATUS_INSTALLING = 'Installing';
    const STATUS_INSTALL_FAILED = 'InstallFailed';
    const STATUS_UPDATING = 'Updating';
    const STATUS_UPDATE_FAILED = 'UpdateFailed';
    const STATUS_ROLLBACKING = 'Rollbacking';
    const STATUS_ROLLBACK_SUCCESS = 'RollbackSuccess';
    const STATUS_ROLLBACK_FAILED = 'RollbackFailed';
    const STATUS_DELETING = 'Deleting';
    const STATUS_DELETE_FAILED = 'DeleteFailed';
    const STATUS_UNREGISTERING = 'Unregistering';
    const STATUS_UN_REGISTER_FAILED = 'UnRegisterFailed';
    const STATUS_CREATE_TIMEOUT = 'CreateTimeout';
    const STATUS_INIT_TIMEOUT = 'InitTimeout';
    const STATUS_REGISTER_TIMEOUT = 'RegisterTimeout';
    const STATUS_INSTALL_TIMEOUT = 'InstallTimeout';
    const STATUS_UPDATE_TIMEOUT = 'UpdateTimeout';
    const STATUS_ROLLBACK_TIMEOUT = 'RollbackTimeout';
    const STATUS_DELETE_TIMEOUT = 'DeleteTimeout';
    const STATUS_UNREGISTER_TIMEOUT = 'UnregisterTimeout';
    const STATUS_STARTING = 'Starting';
    const STATUS_FREEZING = 'Freezing';
    const STATUS_FROZEN = 'Frozen';
    const STATUS_RESTARTING = 'Restarting';
    const STATUS_RESTART_FAIL = 'RestartFail';
    const STATUS_UNHEALTHY = 'Unhealthy';
    const STATUS_RESTART_TIMEOUT = 'RestartTimeout';
    const STATUS_RESIZING = 'Resizing';
    const STATUS_RESIZE_FAILED = 'ResizeFailed';
    const STATUS_RESIZE_TIMEOUT = 'ResizeTimeout';
    const INSTANCE_STATUS_1 = 1;
    const INSTANCE_STATUS_2 = 2;
    const INSTANCE_STATUS_3 = 3;
    const INSTANCE_STATUS_4 = 4;
    const INSTANCE_STATUS_5 = 5;
    const INSTANCE_STATUS_6 = 6;
    const INSTANCE_STATUS_7 = 7;
    const INSTANCE_STATUS_8 = 8;
    const INSTANCE_STATUS_10 = 10;
    const INSTANCE_STATUS_11 = 11;
    const INSTANCE_STATUS_12 = 12;
    const INSTANCE_STATUS_13 = 13;
    const INSTANCE_STATUS_20 = 20;
    const INSTANCE_STATUS_21 = 21;
    const INSTANCE_STATUS_22 = 22;
    const INSTANCE_STATUS_23 = 23;
    const INSTANCE_STATUS_24 = 24;
    const INSTANCE_STATUS_25 = 25;
    const INSTANCE_STATUS_26 = 26;
    const INSTANCE_STATUS_27 = 27;
    const INSTANCE_STATUS_28 = 28;
    const INSTANCE_STATUS_29 = 29;
    const INSTANCE_STATUS_30 = 30;
    const INSTANCE_STATUS_31 = 31;
    const INSTANCE_STATUS_32 = 32;
    const INSTANCE_STATUS_33 = 33;
    const INSTANCE_STATUS_34 = 34;
    const INSTANCE_STATUS_35 = 35;
    const INSTANCE_STATUS_36 = 36;
    const INSTANCE_STATUS_37 = 37;
    const INSTANCE_STATUS_38 = 38;
    const INSTANCE_STATUS_39 = 39;
    const INSTANCE_STATUS_40 = 40;
    const INSTANCE_STATUS_41 = 41;
    const INSTANCE_STATUS_42 = 42;
    const INSTANCE_STATUS_43 = 43;
    const INSTANCE_STATUS_44 = 44;
    const SPEC_BASIC = 'BASIC';
    const SPEC_PROFESSIONAL = 'PROFESSIONAL';
    const SPEC_ENTERPRISE = 'ENTERPRISE';
    const SPEC_PLATINUM = 'PLATINUM';
    const SPEC_BASIC_IPV6 = 'BASIC_IPV6';
    const SPEC_PROFESSIONAL_IPV6 = 'PROFESSIONAL_IPV6';
    const SPEC_ENTERPRISE_IPV6 = 'ENTERPRISE_IPV6';
    const SPEC_PLATINUM_IPV6 = 'PLATINUM_IPV6';
    const SPEC_PLATINUM_X2 = 'PLATINUM_X2';
    const SPEC_PLATINUM_X3 = 'PLATINUM_X3';
    const SPEC_PLATINUM_X4 = 'PLATINUM_X4';
    const SPEC_PLATINUM_X5 = 'PLATINUM_X5';
    const SPEC_PLATINUM_X6 = 'PLATINUM_X6';
    const SPEC_PLATINUM_X7 = 'PLATINUM_X7';
    const SPEC_PLATINUM_X8 = 'PLATINUM_X8';
    const CHARGING_MODE_0 = 0;
    const CHARGING_MODE_1 = 1;
    const LOADBALANCER_PROVIDER_LVS = 'lvs';
    const LOADBALANCER_PROVIDER_ELB = 'elb';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_CREATE_SUCCESS,
            self::STATUS_CREATE_FAIL,
            self::STATUS_INITING,
            self::STATUS_REGISTERING,
            self::STATUS_RUNNING,
            self::STATUS_INITING_FAILED,
            self::STATUS_REGISTER_FAILED,
            self::STATUS_INSTALLING,
            self::STATUS_INSTALL_FAILED,
            self::STATUS_UPDATING,
            self::STATUS_UPDATE_FAILED,
            self::STATUS_ROLLBACKING,
            self::STATUS_ROLLBACK_SUCCESS,
            self::STATUS_ROLLBACK_FAILED,
            self::STATUS_DELETING,
            self::STATUS_DELETE_FAILED,
            self::STATUS_UNREGISTERING,
            self::STATUS_UN_REGISTER_FAILED,
            self::STATUS_CREATE_TIMEOUT,
            self::STATUS_INIT_TIMEOUT,
            self::STATUS_REGISTER_TIMEOUT,
            self::STATUS_INSTALL_TIMEOUT,
            self::STATUS_UPDATE_TIMEOUT,
            self::STATUS_ROLLBACK_TIMEOUT,
            self::STATUS_DELETE_TIMEOUT,
            self::STATUS_UNREGISTER_TIMEOUT,
            self::STATUS_STARTING,
            self::STATUS_FREEZING,
            self::STATUS_FROZEN,
            self::STATUS_RESTARTING,
            self::STATUS_RESTART_FAIL,
            self::STATUS_UNHEALTHY,
            self::STATUS_RESTART_TIMEOUT,
            self::STATUS_RESIZING,
            self::STATUS_RESIZE_FAILED,
            self::STATUS_RESIZE_TIMEOUT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceStatusAllowableValues()
    {
        return [
            self::INSTANCE_STATUS_1,
            self::INSTANCE_STATUS_2,
            self::INSTANCE_STATUS_3,
            self::INSTANCE_STATUS_4,
            self::INSTANCE_STATUS_5,
            self::INSTANCE_STATUS_6,
            self::INSTANCE_STATUS_7,
            self::INSTANCE_STATUS_8,
            self::INSTANCE_STATUS_10,
            self::INSTANCE_STATUS_11,
            self::INSTANCE_STATUS_12,
            self::INSTANCE_STATUS_13,
            self::INSTANCE_STATUS_20,
            self::INSTANCE_STATUS_21,
            self::INSTANCE_STATUS_22,
            self::INSTANCE_STATUS_23,
            self::INSTANCE_STATUS_24,
            self::INSTANCE_STATUS_25,
            self::INSTANCE_STATUS_26,
            self::INSTANCE_STATUS_27,
            self::INSTANCE_STATUS_28,
            self::INSTANCE_STATUS_29,
            self::INSTANCE_STATUS_30,
            self::INSTANCE_STATUS_31,
            self::INSTANCE_STATUS_32,
            self::INSTANCE_STATUS_33,
            self::INSTANCE_STATUS_34,
            self::INSTANCE_STATUS_35,
            self::INSTANCE_STATUS_36,
            self::INSTANCE_STATUS_37,
            self::INSTANCE_STATUS_38,
            self::INSTANCE_STATUS_39,
            self::INSTANCE_STATUS_40,
            self::INSTANCE_STATUS_41,
            self::INSTANCE_STATUS_42,
            self::INSTANCE_STATUS_43,
            self::INSTANCE_STATUS_44,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecAllowableValues()
    {
        return [
            self::SPEC_BASIC,
            self::SPEC_PROFESSIONAL,
            self::SPEC_ENTERPRISE,
            self::SPEC_PLATINUM,
            self::SPEC_BASIC_IPV6,
            self::SPEC_PROFESSIONAL_IPV6,
            self::SPEC_ENTERPRISE_IPV6,
            self::SPEC_PLATINUM_IPV6,
            self::SPEC_PLATINUM_X2,
            self::SPEC_PLATINUM_X3,
            self::SPEC_PLATINUM_X4,
            self::SPEC_PLATINUM_X5,
            self::SPEC_PLATINUM_X6,
            self::SPEC_PLATINUM_X7,
            self::SPEC_PLATINUM_X8,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_0,
            self::CHARGING_MODE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLoadbalancerProviderAllowableValues()
    {
        return [
            self::LOADBALANCER_PROVIDER_LVS,
            self::LOADBALANCER_PROVIDER_ELB,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['eipAddress'] = isset($data['eipAddress']) ? $data['eipAddress'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['cbcMetadata'] = isset($data['cbcMetadata']) ? $data['cbcMetadata'] : null;
        $this->container['loadbalancerProvider'] = isset($data['loadbalancerProvider']) ? $data['loadbalancerProvider'] : null;
        $this->container['cbcOperationLocks'] = isset($data['cbcOperationLocks']) ? $data['cbcOperationLocks'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['ingressIp'] = isset($data['ingressIp']) ? $data['ingressIp'] : null;
        $this->container['ingressIpV6'] = isset($data['ingressIpV6']) ? $data['ingressIpV6'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['natEipIpv6Cidr'] = isset($data['natEipIpv6Cidr']) ? $data['natEipIpv6Cidr'] : null;
        $this->container['eipIpv6Address'] = isset($data['eipIpv6Address']) ? $data['eipIpv6Address'] : null;
        $this->container['natEipAddress'] = isset($data['natEipAddress']) ? $data['natEipAddress'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['bandwidthChargingMode'] = isset($data['bandwidthChargingMode']) ? $data['bandwidthChargingMode'] : null;
        $this->container['availableZoneIds'] = isset($data['availableZoneIds']) ? $data['availableZoneIds'] : null;
        $this->container['instanceVersion'] = isset($data['instanceVersion']) ? $data['instanceVersion'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['romaEipAddress'] = isset($data['romaEipAddress']) ? $data['romaEipAddress'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['supportedFeatures'] = isset($data['supportedFeatures']) ? $data['supportedFeatures'] : null;
        $this->container['endpointService'] = isset($data['endpointService']) ? $data['endpointService'] : null;
        $this->container['endpointServices'] = isset($data['endpointServices']) ? $data['endpointServices'] : null;
        $this->container['nodeIps'] = isset($data['nodeIps']) ? $data['nodeIps'] : null;
        $this->container['publicips'] = isset($data['publicips']) ? $data['publicips'] : null;
        $this->container['privateips'] = isset($data['privateips']) ? $data['privateips'] : null;
        $this->container['isReleasable'] = isset($data['isReleasable']) ? $data['isReleasable'] : null;
        $this->container['ingressBandwidthChargingMode'] = isset($data['ingressBandwidthChargingMode']) ? $data['ingressBandwidthChargingMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInstanceStatusAllowableValues();
                if (!is_null($this->container['instanceStatus']) && !in_array($this->container['instanceStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSpecAllowableValues();
                if (!is_null($this->container['spec']) && !in_array($this->container['spec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'spec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLoadbalancerProviderAllowableValues();
                if (!is_null($this->container['loadbalancerProvider']) && !in_array($this->container['loadbalancerProvider'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'loadbalancerProvider', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['maintainBegin']) && !preg_match("/^([0-1][0-9]|[2][0-4]):00:00$/", $this->container['maintainBegin'])) {
                $invalidProperties[] = "invalid value for 'maintainBegin', must be conform to the pattern /^([0-1][0-9]|[2][0-4]):00:00$/.";
            }
            if (!is_null($this->container['maintainEnd']) && !preg_match("/^([0-1][0-9]|[2][0-4]):00:00$/", $this->container['maintainEnd'])) {
                $invalidProperties[] = "invalid value for 'maintainEnd', must be conform to the pattern /^([0-1][0-9]|[2][0-4]):00:00$/.";
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
    *  实例ID
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
    * @param string|null $id 实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  实例所属租户ID
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
    * @param string|null $projectId 实例所属租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
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
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets status
    *  实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
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
    * @param string|null $status 实例状态： - Creating：创建中 - CreateSuccess：创建成功 - CreateFail：创建失败 - Initing：初始化中 - Registering：注册中 - Running：运行中 - InitingFailed：初始化失败 - RegisterFailed：注册失败 - Installing：安装中 - InstallFailed：安装失败 - Updating：升级中 - UpdateFailed：升级失败 - Rollbacking：回滚中 - RollbackSuccess：回滚成功 - RollbackFailed：回滚失败 - Deleting：删除中 - DeleteFailed：删除失败 - Unregistering：注销中 - UnRegisterFailed：注销失败 - CreateTimeout：创建超时 - InitTimeout：初始化超时 - RegisterTimeout：注册超时 - InstallTimeout：安装超时 - UpdateTimeout：升级超时 - RollbackTimeout：回滚超时 - DeleteTimeout：删除超时 - UnregisterTimeout：注销超时 - Starting：启动中 - Freezing：冻结中 - Frozen：已冻结 - Restarting：重启中 - RestartFail：重启失败 - Unhealthy：实例异常 - RestartTimeout：重启超时 - Resizing：规格变更中 - ResizeFailed：规格变更失败 - ResizeTimeout：规格变更超时
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    *
    * @return int|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param int|null $instanceStatus 实例状态对应编号 - 1：创建中 - 2：创建成功 - 3：创建失败 - 4：初始化中 - 5：注册中 - 6：运行中 - 7：初始化失败 - 8：注册失败 - 10：安装中 - 11：安装失败 - 12：升级中 - 13：升级失败 - 20：回滚中 - 21：回滚成功 - 22：回滚失败 - 23：删除中 - 24：删除失败 - 25：注销中 - 26：注销失败 - 27：创建超时 - 28：初始化超时 - 29：注册超时 - 30：安装超时 - 31：升级超时 - 32：回滚超时 - 33：删除超时 - 34：注销超时 - 35：启动中 - 36：冻结中 - 37：已冻结 - 38：重启中 - 39：重启失败 - 40：实例异常 - 41：重启超时 - 42：规格变更中 - 43：规格变更失败 - 44：规格变更超时
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets type
    *  实例类型  默认apig
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
    * @param string|null $type 实例类型  默认apig
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets spec
    *  实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    *
    * @return string|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string|null $spec 实例规格： - BASIC：基础版实例 - PROFESSIONAL：专业版实例 - ENTERPRISE：企业版实例 - PLATINUM：铂金版实例 - BASIC_IPV6：基础版IPV6实例 - PROFESSIONAL_IPV6：专业版IPV6实例 - ENTERPRISE_IPV6：企业版IPV6实例 - PLATINUM_IPV6：铂金版IPV6实例
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets createTime
    *  实例创建时间。unix时间戳格式。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 实例创建时间。unix时间戳格式。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，企业账号必填
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
    * @param string|null $enterpriseProjectId 企业项目ID，企业账号必填
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets eipAddress
    *  实例绑定的弹性IP地址
    *
    * @return string|null
    */
    public function getEipAddress()
    {
        return $this->container['eipAddress'];
    }

    /**
    * Sets eipAddress
    *
    * @param string|null $eipAddress 实例绑定的弹性IP地址
    *
    * @return $this
    */
    public function setEipAddress($eipAddress)
    {
        $this->container['eipAddress'] = $eipAddress;
        return $this;
    }

    /**
    * Gets chargingMode
    *  实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
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
    * @param int|null $chargingMode 实例计费方式： - 0：按需计费 - 1：[包周期计费](tag:hws)[暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets cbcMetadata
    *  [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    *
    * @return string|null
    */
    public function getCbcMetadata()
    {
        return $this->container['cbcMetadata'];
    }

    /**
    * Sets cbcMetadata
    *
    * @param string|null $cbcMetadata [包周期计费订单编号](tag:hws)[计费订单编号参数暂未使用](tag:hws_hk,cmcc,ctc,DT,g42,hk_g42,hk_sbc,hk_tm,hws_eu,hws_ocb,OCB,sbc,tm)
    *
    * @return $this
    */
    public function setCbcMetadata($cbcMetadata)
    {
        $this->container['cbcMetadata'] = $cbcMetadata;
        return $this;
    }

    /**
    * Gets loadbalancerProvider
    *  实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    *
    * @return string|null
    */
    public function getLoadbalancerProvider()
    {
        return $this->container['loadbalancerProvider'];
    }

    /**
    * Sets loadbalancerProvider
    *
    * @param string|null $loadbalancerProvider 实例使用的负载均衡器类型 - lvs Linux虚拟服务器 - elb 弹性负载均衡，elb仅部分region支持
    *
    * @return $this
    */
    public function setLoadbalancerProvider($loadbalancerProvider)
    {
        $this->container['loadbalancerProvider'] = $loadbalancerProvider;
        return $this;
    }

    /**
    * Gets cbcOperationLocks
    *  云运营限制操作锁
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\CbcOperationLock[]|null
    */
    public function getCbcOperationLocks()
    {
        return $this->container['cbcOperationLocks'];
    }

    /**
    * Sets cbcOperationLocks
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\CbcOperationLock[]|null $cbcOperationLocks 云运营限制操作锁
    *
    * @return $this
    */
    public function setCbcOperationLocks($cbcOperationLocks)
    {
        $this->container['cbcOperationLocks'] = $cbcOperationLocks;
        return $this;
    }

    /**
    * Gets description
    *  实例描述
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
    * @param string|null $description 实例描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
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
    * @param string|null $vpcId 虚拟私有云ID。  获取方法如下：   - 方法1：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。   - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询VPC列表”章节。
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
    *  子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
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
    * @param string|null $subnetId 子网的网络ID。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询子网列表”章节。
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
    *  指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
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
    * @param string|null $securityGroupId 指定实例所属的安全组。  获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。 - 方法2：通过虚拟私有云服务的API接口查询，具体方法请参见《虚拟私有云服务API参考》的“查询安全组列表”章节。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  '维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。'
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
    * @param string|null $maintainBegin '维护时间窗开始时间。时间格式为 xx:00:00，xx取值为02,06,10,14,18,22。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次。'
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
    *  '维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次'。
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
    * @param string|null $maintainEnd '维护时间窗结束时间。时间格式为 xx:00:00，与维护时间窗开始时间相差4个小时。'  '在这个时间段内，运维人员可以对该实例的节点进行维护操作。维护期间，业务可以正常使用，可能会发生闪断。维护操作通常几个月一次'。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets ingressIp
    *  实例入口，虚拟私有云访问地址
    *
    * @return string|null
    */
    public function getIngressIp()
    {
        return $this->container['ingressIp'];
    }

    /**
    * Sets ingressIp
    *
    * @param string|null $ingressIp 实例入口，虚拟私有云访问地址
    *
    * @return $this
    */
    public function setIngressIp($ingressIp)
    {
        $this->container['ingressIp'] = $ingressIp;
        return $this;
    }

    /**
    * Gets ingressIpV6
    *  实例入口，虚拟私有云访问地址 (IPv6)
    *
    * @return string|null
    */
    public function getIngressIpV6()
    {
        return $this->container['ingressIpV6'];
    }

    /**
    * Sets ingressIpV6
    *
    * @param string|null $ingressIpV6 实例入口，虚拟私有云访问地址 (IPv6)
    *
    * @return $this
    */
    public function setIngressIpV6($ingressIpV6)
    {
        $this->container['ingressIpV6'] = $ingressIpV6;
        return $this;
    }

    /**
    * Gets userId
    *  实例所属用户ID
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
    * @param string|null $userId 实例所属用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets natEipIpv6Cidr
    *  出公网网段 (IPv6)  。  当前仅部分region部分可用区支持IPv6
    *
    * @return string|null
    */
    public function getNatEipIpv6Cidr()
    {
        return $this->container['natEipIpv6Cidr'];
    }

    /**
    * Sets natEipIpv6Cidr
    *
    * @param string|null $natEipIpv6Cidr 出公网网段 (IPv6)  。  当前仅部分region部分可用区支持IPv6
    *
    * @return $this
    */
    public function setNatEipIpv6Cidr($natEipIpv6Cidr)
    {
        $this->container['natEipIpv6Cidr'] = $natEipIpv6Cidr;
        return $this;
    }

    /**
    * Gets eipIpv6Address
    *  弹性IP地址(IPv6)。  当前仅部分region部分可用区支持IPv6
    *
    * @return string|null
    */
    public function getEipIpv6Address()
    {
        return $this->container['eipIpv6Address'];
    }

    /**
    * Sets eipIpv6Address
    *
    * @param string|null $eipIpv6Address 弹性IP地址(IPv6)。  当前仅部分region部分可用区支持IPv6
    *
    * @return $this
    */
    public function setEipIpv6Address($eipIpv6Address)
    {
        $this->container['eipIpv6Address'] = $eipIpv6Address;
        return $this;
    }

    /**
    * Gets natEipAddress
    *  实例出公网IP
    *
    * @return string|null
    */
    public function getNatEipAddress()
    {
        return $this->container['natEipAddress'];
    }

    /**
    * Sets natEipAddress
    *
    * @param string|null $natEipAddress 实例出公网IP
    *
    * @return $this
    */
    public function setNatEipAddress($natEipAddress)
    {
        $this->container['natEipAddress'] = $natEipAddress;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  出公网带宽
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 出公网带宽
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets bandwidthChargingMode
    *  出公网带宽计费模式
    *
    * @return string|null
    */
    public function getBandwidthChargingMode()
    {
        return $this->container['bandwidthChargingMode'];
    }

    /**
    * Sets bandwidthChargingMode
    *
    * @param string|null $bandwidthChargingMode 出公网带宽计费模式
    *
    * @return $this
    */
    public function setBandwidthChargingMode($bandwidthChargingMode)
    {
        $this->container['bandwidthChargingMode'] = $bandwidthChargingMode;
        return $this;
    }

    /**
    * Gets availableZoneIds
    *  可用区
    *
    * @return string|null
    */
    public function getAvailableZoneIds()
    {
        return $this->container['availableZoneIds'];
    }

    /**
    * Sets availableZoneIds
    *
    * @param string|null $availableZoneIds 可用区
    *
    * @return $this
    */
    public function setAvailableZoneIds($availableZoneIds)
    {
        $this->container['availableZoneIds'] = $availableZoneIds;
        return $this;
    }

    /**
    * Gets instanceVersion
    *  实例版本编号
    *
    * @return string|null
    */
    public function getInstanceVersion()
    {
        return $this->container['instanceVersion'];
    }

    /**
    * Sets instanceVersion
    *
    * @param string|null $instanceVersion 实例版本编号
    *
    * @return $this
    */
    public function setInstanceVersion($instanceVersion)
    {
        $this->container['instanceVersion'] = $instanceVersion;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  子网的网络ID。  暂不支持
    *
    * @return string|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string|null $virsubnetId 子网的网络ID。  暂不支持
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets romaEipAddress
    *  roma弹性公网IP。  暂不支持
    *
    * @return string|null
    */
    public function getRomaEipAddress()
    {
        return $this->container['romaEipAddress'];
    }

    /**
    * Sets romaEipAddress
    *
    * @param string|null $romaEipAddress roma弹性公网IP。  暂不支持
    *
    * @return $this
    */
    public function setRomaEipAddress($romaEipAddress)
    {
        $this->container['romaEipAddress'] = $romaEipAddress;
        return $this;
    }

    /**
    * Gets listeners
    *  监听信息  暂不支持
    *
    * @return object|null
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param object|null $listeners 监听信息  暂不支持
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets supportedFeatures
    *  实例支持的特性列表
    *
    * @return string[]|null
    */
    public function getSupportedFeatures()
    {
        return $this->container['supportedFeatures'];
    }

    /**
    * Sets supportedFeatures
    *
    * @param string[]|null $supportedFeatures 实例支持的特性列表
    *
    * @return $this
    */
    public function setSupportedFeatures($supportedFeatures)
    {
        $this->container['supportedFeatures'] = $supportedFeatures;
        return $this;
    }

    /**
    * Gets endpointService
    *  endpointService
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\EndpointService|null
    */
    public function getEndpointService()
    {
        return $this->container['endpointService'];
    }

    /**
    * Sets endpointService
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\EndpointService|null $endpointService endpointService
    *
    * @return $this
    */
    public function setEndpointService($endpointService)
    {
        $this->container['endpointService'] = $endpointService;
        return $this;
    }

    /**
    * Gets endpointServices
    *  终端节点服务列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\EndpointService[]|null
    */
    public function getEndpointServices()
    {
        return $this->container['endpointServices'];
    }

    /**
    * Sets endpointServices
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\EndpointService[]|null $endpointServices 终端节点服务列表
    *
    * @return $this
    */
    public function setEndpointServices($endpointServices)
    {
        $this->container['endpointServices'] = $endpointServices;
        return $this;
    }

    /**
    * Gets nodeIps
    *  nodeIps
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\NodeIps|null
    */
    public function getNodeIps()
    {
        return $this->container['nodeIps'];
    }

    /**
    * Sets nodeIps
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\NodeIps|null $nodeIps nodeIps
    *
    * @return $this
    */
    public function setNodeIps($nodeIps)
    {
        $this->container['nodeIps'] = $nodeIps;
        return $this;
    }

    /**
    * Gets publicips
    *  公网入口地址列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\IpDetails[]|null
    */
    public function getPublicips()
    {
        return $this->container['publicips'];
    }

    /**
    * Sets publicips
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\IpDetails[]|null $publicips 公网入口地址列表
    *
    * @return $this
    */
    public function setPublicips($publicips)
    {
        $this->container['publicips'] = $publicips;
        return $this;
    }

    /**
    * Gets privateips
    *  私网入口地址列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\IpDetails[]|null
    */
    public function getPrivateips()
    {
        return $this->container['privateips'];
    }

    /**
    * Sets privateips
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\IpDetails[]|null $privateips 私网入口地址列表
    *
    * @return $this
    */
    public function setPrivateips($privateips)
    {
        $this->container['privateips'] = $privateips;
        return $this;
    }

    /**
    * Gets isReleasable
    *  实例是否可释放 - true：可释放 - false：不可释放
    *
    * @return bool|null
    */
    public function getIsReleasable()
    {
        return $this->container['isReleasable'];
    }

    /**
    * Sets isReleasable
    *
    * @param bool|null $isReleasable 实例是否可释放 - true：可释放 - false：不可释放
    *
    * @return $this
    */
    public function setIsReleasable($isReleasable)
    {
        $this->container['isReleasable'] = $isReleasable;
        return $this;
    }

    /**
    * Gets ingressBandwidthChargingMode
    *  入公网带宽计费模式
    *
    * @return string|null
    */
    public function getIngressBandwidthChargingMode()
    {
        return $this->container['ingressBandwidthChargingMode'];
    }

    /**
    * Sets ingressBandwidthChargingMode
    *
    * @param string|null $ingressBandwidthChargingMode 入公网带宽计费模式
    *
    * @return $this
    */
    public function setIngressBandwidthChargingMode($ingressBandwidthChargingMode)
    {
        $this->container['ingressBandwidthChargingMode'] = $ingressBandwidthChargingMode;
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

