<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicip  云堡垒机实例弹性公网IP，返回默认值null
    * expTime  云堡垒机实例过期时间。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * releaseTime  云堡垒机释放时间，使用时间戳格式表示。
    * name  云堡垒机实例名称。
    * instanceId  云堡垒机实例ID，UUID格式。
    * privateIp  云堡垒机实例私有ip。
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on 开启 - powering-off 关闭 - rebooting 重启 - delete_wait 删除 - frozen 冻结 - NO_TASK 运行 - unfrozen 解冻 - alter 变更 - updating 升级中 - configuring-ha 配置HA
    * status  云堡垒机实例状态。 - SHUTOFF 已关闭 - ACTIVE 运行中 - DELETING 删除中 - BUILD 创建中 - DELETED 已删除 - ERROR 故障 - HAWAIT 等待备机创建成功 - FROZEN 已冻结 - UPGRADING 升级中 - UNPAID 待支付 - RESIZE 规格变更中 - DILATATION 扩容中 - HA 配置HA中
    * created  云堡垒机实例创建时间，使用UTC时间表示。
    * region  云堡垒机实例所在局点。
    * zone  云堡垒机实例所在可用区。
    * availabilityZoneDisplay  云堡垒机实例所在可用区中文名称。
    * vpcId  云堡垒机实例所在虚拟私有云的VPC ID。
    * subnetId  云堡垒机实例所在子网的ID。
    * securityGroupId  云堡垒机实例所属的安全组的ID。
    * specification  云堡垒机实例规格。
    * update  云堡垒机实例是否可以升级。 - NEW，可以升级 - OLD，不能升级
    * createinstanceStatus  云堡垒机实例在创建实例过程中的过程状态信息。 - Waiting for payment，等待支付 - creating-network，创建网络 - creating-server，创建服务 - tranfering-horizontal-network，网络打通 - adding-policy-route，添加路由策略 - configing-dns，配置DNS - starting-cbs-service，服务运行中 - setting-init-conf，初始化 - buying-EIP，购买弹性公网IP
    * failReason  云堡垒机实例创建实例失败原因。
    * instanceKey  云堡垒机实例key。
    * orderId  订单ID。
    * periodNum  云堡垒机实例订购周期数。
    * resourceId  云堡垒机实例的资源id,UUID格式显示。
    * bastionType  云堡垒机实例堡垒机类型。 - OEM
    * alterPermit  云堡垒机实例是否可以扩容。 - 1 开启扩容 - 0 关闭扩容
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * bastionVersion  云堡垒机实例当前版本。
    * newBastionVersion  云堡垒机实例可以升级的版本。
    * instanceStatus  云堡垒机实例状态。 - building  创建中 - deleting  删除中 - deleted 删除了 - unpaid  未支付 - upgrading 升级中 - resizing  扩容中 - abnormal  异常 - error 故障 - ok  正常
    * instanceDescription  云堡垒机实例状态描述。
    * slaveZone  备可用分区，默认返回null。
    * enterpriseProjectId  云堡垒机实例所属企业项目ID。
    * instanceType  云堡垒机实例类型。 - null  单机默认返回null - master  HA时返回主机 - slave HA时返回备机
    * haId  云堡垒机实例主备ID。 - 单机堡垒机实例默认返回null - HA堡垒机实例返回主机HAID
    * slaveZoneDisplay  云堡垒机实例备机可用分区名称。 单机堡垒机实例和备机堡垒机实例返回null，HA堡垒机实例主机返回备机所在可用区名称。
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * vip  云堡垒机实例浮动ip。返回默认值null
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicip' => 'string',
            'expTime' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'releaseTime' => 'string',
            'name' => 'string',
            'instanceId' => 'string',
            'privateIp' => 'string',
            'taskStatus' => 'string',
            'status' => 'string',
            'created' => 'string',
            'region' => 'string',
            'zone' => 'string',
            'availabilityZoneDisplay' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'specification' => 'string',
            'update' => 'string',
            'createinstanceStatus' => 'string',
            'failReason' => 'string',
            'instanceKey' => 'string',
            'orderId' => 'string',
            'periodNum' => 'string',
            'resourceId' => 'string',
            'bastionType' => 'string',
            'alterPermit' => 'string',
            'publicId' => 'string',
            'bastionVersion' => 'string',
            'newBastionVersion' => 'string',
            'instanceStatus' => 'string',
            'instanceDescription' => 'string',
            'slaveZone' => 'string',
            'enterpriseProjectId' => 'string',
            'instanceType' => 'string',
            'haId' => 'string',
            'slaveZoneDisplay' => 'string',
            'webPort' => 'string',
            'vip' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicip  云堡垒机实例弹性公网IP，返回默认值null
    * expTime  云堡垒机实例过期时间。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * releaseTime  云堡垒机释放时间，使用时间戳格式表示。
    * name  云堡垒机实例名称。
    * instanceId  云堡垒机实例ID，UUID格式。
    * privateIp  云堡垒机实例私有ip。
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on 开启 - powering-off 关闭 - rebooting 重启 - delete_wait 删除 - frozen 冻结 - NO_TASK 运行 - unfrozen 解冻 - alter 变更 - updating 升级中 - configuring-ha 配置HA
    * status  云堡垒机实例状态。 - SHUTOFF 已关闭 - ACTIVE 运行中 - DELETING 删除中 - BUILD 创建中 - DELETED 已删除 - ERROR 故障 - HAWAIT 等待备机创建成功 - FROZEN 已冻结 - UPGRADING 升级中 - UNPAID 待支付 - RESIZE 规格变更中 - DILATATION 扩容中 - HA 配置HA中
    * created  云堡垒机实例创建时间，使用UTC时间表示。
    * region  云堡垒机实例所在局点。
    * zone  云堡垒机实例所在可用区。
    * availabilityZoneDisplay  云堡垒机实例所在可用区中文名称。
    * vpcId  云堡垒机实例所在虚拟私有云的VPC ID。
    * subnetId  云堡垒机实例所在子网的ID。
    * securityGroupId  云堡垒机实例所属的安全组的ID。
    * specification  云堡垒机实例规格。
    * update  云堡垒机实例是否可以升级。 - NEW，可以升级 - OLD，不能升级
    * createinstanceStatus  云堡垒机实例在创建实例过程中的过程状态信息。 - Waiting for payment，等待支付 - creating-network，创建网络 - creating-server，创建服务 - tranfering-horizontal-network，网络打通 - adding-policy-route，添加路由策略 - configing-dns，配置DNS - starting-cbs-service，服务运行中 - setting-init-conf，初始化 - buying-EIP，购买弹性公网IP
    * failReason  云堡垒机实例创建实例失败原因。
    * instanceKey  云堡垒机实例key。
    * orderId  订单ID。
    * periodNum  云堡垒机实例订购周期数。
    * resourceId  云堡垒机实例的资源id,UUID格式显示。
    * bastionType  云堡垒机实例堡垒机类型。 - OEM
    * alterPermit  云堡垒机实例是否可以扩容。 - 1 开启扩容 - 0 关闭扩容
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * bastionVersion  云堡垒机实例当前版本。
    * newBastionVersion  云堡垒机实例可以升级的版本。
    * instanceStatus  云堡垒机实例状态。 - building  创建中 - deleting  删除中 - deleted 删除了 - unpaid  未支付 - upgrading 升级中 - resizing  扩容中 - abnormal  异常 - error 故障 - ok  正常
    * instanceDescription  云堡垒机实例状态描述。
    * slaveZone  备可用分区，默认返回null。
    * enterpriseProjectId  云堡垒机实例所属企业项目ID。
    * instanceType  云堡垒机实例类型。 - null  单机默认返回null - master  HA时返回主机 - slave HA时返回备机
    * haId  云堡垒机实例主备ID。 - 单机堡垒机实例默认返回null - HA堡垒机实例返回主机HAID
    * slaveZoneDisplay  云堡垒机实例备机可用分区名称。 单机堡垒机实例和备机堡垒机实例返回null，HA堡垒机实例主机返回备机所在可用区名称。
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * vip  云堡垒机实例浮动ip。返回默认值null
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicip' => null,
        'expTime' => null,
        'startTime' => null,
        'endTime' => null,
        'releaseTime' => null,
        'name' => null,
        'instanceId' => null,
        'privateIp' => null,
        'taskStatus' => null,
        'status' => null,
        'created' => null,
        'region' => null,
        'zone' => null,
        'availabilityZoneDisplay' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'specification' => null,
        'update' => null,
        'createinstanceStatus' => null,
        'failReason' => null,
        'instanceKey' => null,
        'orderId' => null,
        'periodNum' => null,
        'resourceId' => null,
        'bastionType' => null,
        'alterPermit' => null,
        'publicId' => null,
        'bastionVersion' => null,
        'newBastionVersion' => null,
        'instanceStatus' => null,
        'instanceDescription' => null,
        'slaveZone' => null,
        'enterpriseProjectId' => null,
        'instanceType' => null,
        'haId' => null,
        'slaveZoneDisplay' => null,
        'webPort' => null,
        'vip' => null
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
    * publicip  云堡垒机实例弹性公网IP，返回默认值null
    * expTime  云堡垒机实例过期时间。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * releaseTime  云堡垒机释放时间，使用时间戳格式表示。
    * name  云堡垒机实例名称。
    * instanceId  云堡垒机实例ID，UUID格式。
    * privateIp  云堡垒机实例私有ip。
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on 开启 - powering-off 关闭 - rebooting 重启 - delete_wait 删除 - frozen 冻结 - NO_TASK 运行 - unfrozen 解冻 - alter 变更 - updating 升级中 - configuring-ha 配置HA
    * status  云堡垒机实例状态。 - SHUTOFF 已关闭 - ACTIVE 运行中 - DELETING 删除中 - BUILD 创建中 - DELETED 已删除 - ERROR 故障 - HAWAIT 等待备机创建成功 - FROZEN 已冻结 - UPGRADING 升级中 - UNPAID 待支付 - RESIZE 规格变更中 - DILATATION 扩容中 - HA 配置HA中
    * created  云堡垒机实例创建时间，使用UTC时间表示。
    * region  云堡垒机实例所在局点。
    * zone  云堡垒机实例所在可用区。
    * availabilityZoneDisplay  云堡垒机实例所在可用区中文名称。
    * vpcId  云堡垒机实例所在虚拟私有云的VPC ID。
    * subnetId  云堡垒机实例所在子网的ID。
    * securityGroupId  云堡垒机实例所属的安全组的ID。
    * specification  云堡垒机实例规格。
    * update  云堡垒机实例是否可以升级。 - NEW，可以升级 - OLD，不能升级
    * createinstanceStatus  云堡垒机实例在创建实例过程中的过程状态信息。 - Waiting for payment，等待支付 - creating-network，创建网络 - creating-server，创建服务 - tranfering-horizontal-network，网络打通 - adding-policy-route，添加路由策略 - configing-dns，配置DNS - starting-cbs-service，服务运行中 - setting-init-conf，初始化 - buying-EIP，购买弹性公网IP
    * failReason  云堡垒机实例创建实例失败原因。
    * instanceKey  云堡垒机实例key。
    * orderId  订单ID。
    * periodNum  云堡垒机实例订购周期数。
    * resourceId  云堡垒机实例的资源id,UUID格式显示。
    * bastionType  云堡垒机实例堡垒机类型。 - OEM
    * alterPermit  云堡垒机实例是否可以扩容。 - 1 开启扩容 - 0 关闭扩容
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * bastionVersion  云堡垒机实例当前版本。
    * newBastionVersion  云堡垒机实例可以升级的版本。
    * instanceStatus  云堡垒机实例状态。 - building  创建中 - deleting  删除中 - deleted 删除了 - unpaid  未支付 - upgrading 升级中 - resizing  扩容中 - abnormal  异常 - error 故障 - ok  正常
    * instanceDescription  云堡垒机实例状态描述。
    * slaveZone  备可用分区，默认返回null。
    * enterpriseProjectId  云堡垒机实例所属企业项目ID。
    * instanceType  云堡垒机实例类型。 - null  单机默认返回null - master  HA时返回主机 - slave HA时返回备机
    * haId  云堡垒机实例主备ID。 - 单机堡垒机实例默认返回null - HA堡垒机实例返回主机HAID
    * slaveZoneDisplay  云堡垒机实例备机可用分区名称。 单机堡垒机实例和备机堡垒机实例返回null，HA堡垒机实例主机返回备机所在可用区名称。
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * vip  云堡垒机实例浮动ip。返回默认值null
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicip' => 'publicip',
            'expTime' => 'expTime',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'releaseTime' => 'releaseTime',
            'name' => 'name',
            'instanceId' => 'instanceId',
            'privateIp' => 'privateIp',
            'taskStatus' => 'taskStatus',
            'status' => 'status',
            'created' => 'created',
            'region' => 'region',
            'zone' => 'zone',
            'availabilityZoneDisplay' => 'availability_zone_display',
            'vpcId' => 'vpcId',
            'subnetId' => 'subnetId',
            'securityGroupId' => 'securityGroupId',
            'specification' => 'specification',
            'update' => 'update',
            'createinstanceStatus' => 'createinstanceStatus',
            'failReason' => 'failReason',
            'instanceKey' => 'instanceKey',
            'orderId' => 'orderId',
            'periodNum' => 'periodNum',
            'resourceId' => 'resourceId',
            'bastionType' => 'bastion_type',
            'alterPermit' => 'alterPermit',
            'publicId' => 'publicId',
            'bastionVersion' => 'bastionVersion',
            'newBastionVersion' => 'newBastionVersion',
            'instanceStatus' => 'instanceStatus',
            'instanceDescription' => 'instanceDescription',
            'slaveZone' => 'slaveZone',
            'enterpriseProjectId' => 'enterpriseProjectId',
            'instanceType' => 'instanceType',
            'haId' => 'haId',
            'slaveZoneDisplay' => 'slaveZoneDisplay',
            'webPort' => 'webPort',
            'vip' => 'vip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicip  云堡垒机实例弹性公网IP，返回默认值null
    * expTime  云堡垒机实例过期时间。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * releaseTime  云堡垒机释放时间，使用时间戳格式表示。
    * name  云堡垒机实例名称。
    * instanceId  云堡垒机实例ID，UUID格式。
    * privateIp  云堡垒机实例私有ip。
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on 开启 - powering-off 关闭 - rebooting 重启 - delete_wait 删除 - frozen 冻结 - NO_TASK 运行 - unfrozen 解冻 - alter 变更 - updating 升级中 - configuring-ha 配置HA
    * status  云堡垒机实例状态。 - SHUTOFF 已关闭 - ACTIVE 运行中 - DELETING 删除中 - BUILD 创建中 - DELETED 已删除 - ERROR 故障 - HAWAIT 等待备机创建成功 - FROZEN 已冻结 - UPGRADING 升级中 - UNPAID 待支付 - RESIZE 规格变更中 - DILATATION 扩容中 - HA 配置HA中
    * created  云堡垒机实例创建时间，使用UTC时间表示。
    * region  云堡垒机实例所在局点。
    * zone  云堡垒机实例所在可用区。
    * availabilityZoneDisplay  云堡垒机实例所在可用区中文名称。
    * vpcId  云堡垒机实例所在虚拟私有云的VPC ID。
    * subnetId  云堡垒机实例所在子网的ID。
    * securityGroupId  云堡垒机实例所属的安全组的ID。
    * specification  云堡垒机实例规格。
    * update  云堡垒机实例是否可以升级。 - NEW，可以升级 - OLD，不能升级
    * createinstanceStatus  云堡垒机实例在创建实例过程中的过程状态信息。 - Waiting for payment，等待支付 - creating-network，创建网络 - creating-server，创建服务 - tranfering-horizontal-network，网络打通 - adding-policy-route，添加路由策略 - configing-dns，配置DNS - starting-cbs-service，服务运行中 - setting-init-conf，初始化 - buying-EIP，购买弹性公网IP
    * failReason  云堡垒机实例创建实例失败原因。
    * instanceKey  云堡垒机实例key。
    * orderId  订单ID。
    * periodNum  云堡垒机实例订购周期数。
    * resourceId  云堡垒机实例的资源id,UUID格式显示。
    * bastionType  云堡垒机实例堡垒机类型。 - OEM
    * alterPermit  云堡垒机实例是否可以扩容。 - 1 开启扩容 - 0 关闭扩容
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * bastionVersion  云堡垒机实例当前版本。
    * newBastionVersion  云堡垒机实例可以升级的版本。
    * instanceStatus  云堡垒机实例状态。 - building  创建中 - deleting  删除中 - deleted 删除了 - unpaid  未支付 - upgrading 升级中 - resizing  扩容中 - abnormal  异常 - error 故障 - ok  正常
    * instanceDescription  云堡垒机实例状态描述。
    * slaveZone  备可用分区，默认返回null。
    * enterpriseProjectId  云堡垒机实例所属企业项目ID。
    * instanceType  云堡垒机实例类型。 - null  单机默认返回null - master  HA时返回主机 - slave HA时返回备机
    * haId  云堡垒机实例主备ID。 - 单机堡垒机实例默认返回null - HA堡垒机实例返回主机HAID
    * slaveZoneDisplay  云堡垒机实例备机可用分区名称。 单机堡垒机实例和备机堡垒机实例返回null，HA堡垒机实例主机返回备机所在可用区名称。
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * vip  云堡垒机实例浮动ip。返回默认值null
    *
    * @var string[]
    */
    protected static $setters = [
            'publicip' => 'setPublicip',
            'expTime' => 'setExpTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'releaseTime' => 'setReleaseTime',
            'name' => 'setName',
            'instanceId' => 'setInstanceId',
            'privateIp' => 'setPrivateIp',
            'taskStatus' => 'setTaskStatus',
            'status' => 'setStatus',
            'created' => 'setCreated',
            'region' => 'setRegion',
            'zone' => 'setZone',
            'availabilityZoneDisplay' => 'setAvailabilityZoneDisplay',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'specification' => 'setSpecification',
            'update' => 'setUpdate',
            'createinstanceStatus' => 'setCreateinstanceStatus',
            'failReason' => 'setFailReason',
            'instanceKey' => 'setInstanceKey',
            'orderId' => 'setOrderId',
            'periodNum' => 'setPeriodNum',
            'resourceId' => 'setResourceId',
            'bastionType' => 'setBastionType',
            'alterPermit' => 'setAlterPermit',
            'publicId' => 'setPublicId',
            'bastionVersion' => 'setBastionVersion',
            'newBastionVersion' => 'setNewBastionVersion',
            'instanceStatus' => 'setInstanceStatus',
            'instanceDescription' => 'setInstanceDescription',
            'slaveZone' => 'setSlaveZone',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'instanceType' => 'setInstanceType',
            'haId' => 'setHaId',
            'slaveZoneDisplay' => 'setSlaveZoneDisplay',
            'webPort' => 'setWebPort',
            'vip' => 'setVip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicip  云堡垒机实例弹性公网IP，返回默认值null
    * expTime  云堡垒机实例过期时间。
    * startTime  云堡垒机实例开始时间，使用时间戳格式表示。
    * endTime  云堡垒机实例结束时间，使用时间戳格式表示。
    * releaseTime  云堡垒机释放时间，使用时间戳格式表示。
    * name  云堡垒机实例名称。
    * instanceId  云堡垒机实例ID，UUID格式。
    * privateIp  云堡垒机实例私有ip。
    * taskStatus  云堡垒机实例当前的任务状态。 - powering-on 开启 - powering-off 关闭 - rebooting 重启 - delete_wait 删除 - frozen 冻结 - NO_TASK 运行 - unfrozen 解冻 - alter 变更 - updating 升级中 - configuring-ha 配置HA
    * status  云堡垒机实例状态。 - SHUTOFF 已关闭 - ACTIVE 运行中 - DELETING 删除中 - BUILD 创建中 - DELETED 已删除 - ERROR 故障 - HAWAIT 等待备机创建成功 - FROZEN 已冻结 - UPGRADING 升级中 - UNPAID 待支付 - RESIZE 规格变更中 - DILATATION 扩容中 - HA 配置HA中
    * created  云堡垒机实例创建时间，使用UTC时间表示。
    * region  云堡垒机实例所在局点。
    * zone  云堡垒机实例所在可用区。
    * availabilityZoneDisplay  云堡垒机实例所在可用区中文名称。
    * vpcId  云堡垒机实例所在虚拟私有云的VPC ID。
    * subnetId  云堡垒机实例所在子网的ID。
    * securityGroupId  云堡垒机实例所属的安全组的ID。
    * specification  云堡垒机实例规格。
    * update  云堡垒机实例是否可以升级。 - NEW，可以升级 - OLD，不能升级
    * createinstanceStatus  云堡垒机实例在创建实例过程中的过程状态信息。 - Waiting for payment，等待支付 - creating-network，创建网络 - creating-server，创建服务 - tranfering-horizontal-network，网络打通 - adding-policy-route，添加路由策略 - configing-dns，配置DNS - starting-cbs-service，服务运行中 - setting-init-conf，初始化 - buying-EIP，购买弹性公网IP
    * failReason  云堡垒机实例创建实例失败原因。
    * instanceKey  云堡垒机实例key。
    * orderId  订单ID。
    * periodNum  云堡垒机实例订购周期数。
    * resourceId  云堡垒机实例的资源id,UUID格式显示。
    * bastionType  云堡垒机实例堡垒机类型。 - OEM
    * alterPermit  云堡垒机实例是否可以扩容。 - 1 开启扩容 - 0 关闭扩容
    * publicId  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    * bastionVersion  云堡垒机实例当前版本。
    * newBastionVersion  云堡垒机实例可以升级的版本。
    * instanceStatus  云堡垒机实例状态。 - building  创建中 - deleting  删除中 - deleted 删除了 - unpaid  未支付 - upgrading 升级中 - resizing  扩容中 - abnormal  异常 - error 故障 - ok  正常
    * instanceDescription  云堡垒机实例状态描述。
    * slaveZone  备可用分区，默认返回null。
    * enterpriseProjectId  云堡垒机实例所属企业项目ID。
    * instanceType  云堡垒机实例类型。 - null  单机默认返回null - master  HA时返回主机 - slave HA时返回备机
    * haId  云堡垒机实例主备ID。 - 单机堡垒机实例默认返回null - HA堡垒机实例返回主机HAID
    * slaveZoneDisplay  云堡垒机实例备机可用分区名称。 单机堡垒机实例和备机堡垒机实例返回null，HA堡垒机实例主机返回备机所在可用区名称。
    * webPort  云堡垒机实例WEB界面访问的端口号。
    * vip  云堡垒机实例浮动ip。返回默认值null
    *
    * @var string[]
    */
    protected static $getters = [
            'publicip' => 'getPublicip',
            'expTime' => 'getExpTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'releaseTime' => 'getReleaseTime',
            'name' => 'getName',
            'instanceId' => 'getInstanceId',
            'privateIp' => 'getPrivateIp',
            'taskStatus' => 'getTaskStatus',
            'status' => 'getStatus',
            'created' => 'getCreated',
            'region' => 'getRegion',
            'zone' => 'getZone',
            'availabilityZoneDisplay' => 'getAvailabilityZoneDisplay',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'specification' => 'getSpecification',
            'update' => 'getUpdate',
            'createinstanceStatus' => 'getCreateinstanceStatus',
            'failReason' => 'getFailReason',
            'instanceKey' => 'getInstanceKey',
            'orderId' => 'getOrderId',
            'periodNum' => 'getPeriodNum',
            'resourceId' => 'getResourceId',
            'bastionType' => 'getBastionType',
            'alterPermit' => 'getAlterPermit',
            'publicId' => 'getPublicId',
            'bastionVersion' => 'getBastionVersion',
            'newBastionVersion' => 'getNewBastionVersion',
            'instanceStatus' => 'getInstanceStatus',
            'instanceDescription' => 'getInstanceDescription',
            'slaveZone' => 'getSlaveZone',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'instanceType' => 'getInstanceType',
            'haId' => 'getHaId',
            'slaveZoneDisplay' => 'getSlaveZoneDisplay',
            'webPort' => 'getWebPort',
            'vip' => 'getVip'
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
        $this->container['publicip'] = isset($data['publicip']) ? $data['publicip'] : null;
        $this->container['expTime'] = isset($data['expTime']) ? $data['expTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['releaseTime'] = isset($data['releaseTime']) ? $data['releaseTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
        $this->container['availabilityZoneDisplay'] = isset($data['availabilityZoneDisplay']) ? $data['availabilityZoneDisplay'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['update'] = isset($data['update']) ? $data['update'] : null;
        $this->container['createinstanceStatus'] = isset($data['createinstanceStatus']) ? $data['createinstanceStatus'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['instanceKey'] = isset($data['instanceKey']) ? $data['instanceKey'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['bastionType'] = isset($data['bastionType']) ? $data['bastionType'] : null;
        $this->container['alterPermit'] = isset($data['alterPermit']) ? $data['alterPermit'] : null;
        $this->container['publicId'] = isset($data['publicId']) ? $data['publicId'] : null;
        $this->container['bastionVersion'] = isset($data['bastionVersion']) ? $data['bastionVersion'] : null;
        $this->container['newBastionVersion'] = isset($data['newBastionVersion']) ? $data['newBastionVersion'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['instanceDescription'] = isset($data['instanceDescription']) ? $data['instanceDescription'] : null;
        $this->container['slaveZone'] = isset($data['slaveZone']) ? $data['slaveZone'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['haId'] = isset($data['haId']) ? $data['haId'] : null;
        $this->container['slaveZoneDisplay'] = isset($data['slaveZoneDisplay']) ? $data['slaveZoneDisplay'] : null;
        $this->container['webPort'] = isset($data['webPort']) ? $data['webPort'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publicip'] === null) {
            $invalidProperties[] = "'publicip' can't be null";
        }
            if ((mb_strlen($this->container['publicip']) > 15)) {
                $invalidProperties[] = "invalid value for 'publicip', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['publicip']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicip', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['expTime'] === null) {
            $invalidProperties[] = "'expTime' can't be null";
        }
            if ((mb_strlen($this->container['expTime']) > 4)) {
                $invalidProperties[] = "invalid value for 'expTime', the character length must be smaller than or equal to 4.";
            }
            if ((mb_strlen($this->container['expTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 12.";
            }
            if ((mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 12.";
            }
            if ((mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['releaseTime'] === null) {
            $invalidProperties[] = "'releaseTime' can't be null";
        }
            if ((mb_strlen($this->container['releaseTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'releaseTime', the character length must be smaller than or equal to 12.";
            }
            if ((mb_strlen($this->container['releaseTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'releaseTime', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['privateIp'] === null) {
            $invalidProperties[] = "'privateIp' can't be null";
        }
            if ((mb_strlen($this->container['privateIp']) > 15)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['taskStatus'] === null) {
            $invalidProperties[] = "'taskStatus' can't be null";
        }
            if ((mb_strlen($this->container['taskStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['taskStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
            if ((mb_strlen($this->container['created']) > 12)) {
                $invalidProperties[] = "invalid value for 'created', the character length must be smaller than or equal to 12.";
            }
            if ((mb_strlen($this->container['created']) < 0)) {
                $invalidProperties[] = "invalid value for 'created', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 36)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['zone'] === null) {
            $invalidProperties[] = "'zone' can't be null";
        }
            if ((mb_strlen($this->container['zone']) > 36)) {
                $invalidProperties[] = "invalid value for 'zone', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['zone']) < 0)) {
                $invalidProperties[] = "invalid value for 'zone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['availabilityZoneDisplay'] === null) {
            $invalidProperties[] = "'availabilityZoneDisplay' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZoneDisplay']) > 36)) {
                $invalidProperties[] = "invalid value for 'availabilityZoneDisplay', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['availabilityZoneDisplay']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZoneDisplay', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            if ((mb_strlen($this->container['subnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['subnetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if ((mb_strlen($this->container['securityGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['securityGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['specification'] === null) {
            $invalidProperties[] = "'specification' can't be null";
        }
            if ((mb_strlen($this->container['specification']) > 36)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['specification']) < 0)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['update'] === null) {
            $invalidProperties[] = "'update' can't be null";
        }
            if ((mb_strlen($this->container['update']) > 36)) {
                $invalidProperties[] = "invalid value for 'update', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['update']) < 0)) {
                $invalidProperties[] = "invalid value for 'update', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createinstanceStatus'] === null) {
            $invalidProperties[] = "'createinstanceStatus' can't be null";
        }
            if ((mb_strlen($this->container['createinstanceStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'createinstanceStatus', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['createinstanceStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'createinstanceStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['failReason'] === null) {
            $invalidProperties[] = "'failReason' can't be null";
        }
            if ((mb_strlen($this->container['failReason']) > 36)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['failReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'failReason', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceKey'] === null) {
            $invalidProperties[] = "'instanceKey' can't be null";
        }
            if ((mb_strlen($this->container['instanceKey']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceKey', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceKey', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
            if ((mb_strlen($this->container['orderId']) > 36)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if ((mb_strlen($this->container['periodNum']) > 36)) {
                $invalidProperties[] = "invalid value for 'periodNum', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['periodNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'periodNum', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['bastionType'] === null) {
            $invalidProperties[] = "'bastionType' can't be null";
        }
            if ((mb_strlen($this->container['bastionType']) > 36)) {
                $invalidProperties[] = "invalid value for 'bastionType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['bastionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'bastionType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['alterPermit'] === null) {
            $invalidProperties[] = "'alterPermit' can't be null";
        }
            if ((mb_strlen($this->container['alterPermit']) > 36)) {
                $invalidProperties[] = "invalid value for 'alterPermit', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['alterPermit']) < 0)) {
                $invalidProperties[] = "invalid value for 'alterPermit', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['publicId'] === null) {
            $invalidProperties[] = "'publicId' can't be null";
        }
            if ((mb_strlen($this->container['publicId']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['publicId']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['bastionVersion'] === null) {
            $invalidProperties[] = "'bastionVersion' can't be null";
        }
            if ((mb_strlen($this->container['bastionVersion']) > 36)) {
                $invalidProperties[] = "invalid value for 'bastionVersion', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['bastionVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'bastionVersion', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['newBastionVersion'] === null) {
            $invalidProperties[] = "'newBastionVersion' can't be null";
        }
            if ((mb_strlen($this->container['newBastionVersion']) > 36)) {
                $invalidProperties[] = "invalid value for 'newBastionVersion', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['newBastionVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'newBastionVersion', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceStatus'] === null) {
            $invalidProperties[] = "'instanceStatus' can't be null";
        }
            if ((mb_strlen($this->container['instanceStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceDescription'] === null) {
            $invalidProperties[] = "'instanceDescription' can't be null";
        }
            if ((mb_strlen($this->container['instanceDescription']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceDescription', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveZone']) && (mb_strlen($this->container['slaveZone']) > 36)) {
                $invalidProperties[] = "invalid value for 'slaveZone', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['slaveZone']) && (mb_strlen($this->container['slaveZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'slaveZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['haId']) && (mb_strlen($this->container['haId']) > 36)) {
                $invalidProperties[] = "invalid value for 'haId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['haId']) && (mb_strlen($this->container['haId']) < 0)) {
                $invalidProperties[] = "invalid value for 'haId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveZoneDisplay']) && (mb_strlen($this->container['slaveZoneDisplay']) > 36)) {
                $invalidProperties[] = "invalid value for 'slaveZoneDisplay', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['slaveZoneDisplay']) && (mb_strlen($this->container['slaveZoneDisplay']) < 0)) {
                $invalidProperties[] = "invalid value for 'slaveZoneDisplay', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['webPort']) && (mb_strlen($this->container['webPort']) > 36)) {
                $invalidProperties[] = "invalid value for 'webPort', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['webPort']) && (mb_strlen($this->container['webPort']) < 0)) {
                $invalidProperties[] = "invalid value for 'webPort', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vip']) && (mb_strlen($this->container['vip']) > 36)) {
                $invalidProperties[] = "invalid value for 'vip', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vip']) && (mb_strlen($this->container['vip']) < 0)) {
                $invalidProperties[] = "invalid value for 'vip', the character length must be bigger than or equal to 0.";
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
    * Gets publicip
    *  云堡垒机实例弹性公网IP，返回默认值null
    *
    * @return string
    */
    public function getPublicip()
    {
        return $this->container['publicip'];
    }

    /**
    * Sets publicip
    *
    * @param string $publicip 云堡垒机实例弹性公网IP，返回默认值null
    *
    * @return $this
    */
    public function setPublicip($publicip)
    {
        $this->container['publicip'] = $publicip;
        return $this;
    }

    /**
    * Gets expTime
    *  云堡垒机实例过期时间。
    *
    * @return string
    */
    public function getExpTime()
    {
        return $this->container['expTime'];
    }

    /**
    * Sets expTime
    *
    * @param string $expTime 云堡垒机实例过期时间。
    *
    * @return $this
    */
    public function setExpTime($expTime)
    {
        $this->container['expTime'] = $expTime;
        return $this;
    }

    /**
    * Gets startTime
    *  云堡垒机实例开始时间，使用时间戳格式表示。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 云堡垒机实例开始时间，使用时间戳格式表示。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  云堡垒机实例结束时间，使用时间戳格式表示。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 云堡垒机实例结束时间，使用时间戳格式表示。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets releaseTime
    *  云堡垒机释放时间，使用时间戳格式表示。
    *
    * @return string
    */
    public function getReleaseTime()
    {
        return $this->container['releaseTime'];
    }

    /**
    * Sets releaseTime
    *
    * @param string $releaseTime 云堡垒机释放时间，使用时间戳格式表示。
    *
    * @return $this
    */
    public function setReleaseTime($releaseTime)
    {
        $this->container['releaseTime'] = $releaseTime;
        return $this;
    }

    /**
    * Gets name
    *  云堡垒机实例名称。
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
    * @param string $name 云堡垒机实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets instanceId
    *  云堡垒机实例ID，UUID格式。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 云堡垒机实例ID，UUID格式。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets privateIp
    *  云堡垒机实例私有ip。
    *
    * @return string
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string $privateIp 云堡垒机实例私有ip。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets taskStatus
    *  云堡垒机实例当前的任务状态。 - powering-on 开启 - powering-off 关闭 - rebooting 重启 - delete_wait 删除 - frozen 冻结 - NO_TASK 运行 - unfrozen 解冻 - alter 变更 - updating 升级中 - configuring-ha 配置HA
    *
    * @return string
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string $taskStatus 云堡垒机实例当前的任务状态。 - powering-on 开启 - powering-off 关闭 - rebooting 重启 - delete_wait 删除 - frozen 冻结 - NO_TASK 运行 - unfrozen 解冻 - alter 变更 - updating 升级中 - configuring-ha 配置HA
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets status
    *  云堡垒机实例状态。 - SHUTOFF 已关闭 - ACTIVE 运行中 - DELETING 删除中 - BUILD 创建中 - DELETED 已删除 - ERROR 故障 - HAWAIT 等待备机创建成功 - FROZEN 已冻结 - UPGRADING 升级中 - UNPAID 待支付 - RESIZE 规格变更中 - DILATATION 扩容中 - HA 配置HA中
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
    * @param string $status 云堡垒机实例状态。 - SHUTOFF 已关闭 - ACTIVE 运行中 - DELETING 删除中 - BUILD 创建中 - DELETED 已删除 - ERROR 故障 - HAWAIT 等待备机创建成功 - FROZEN 已冻结 - UPGRADING 升级中 - UNPAID 待支付 - RESIZE 规格变更中 - DILATATION 扩容中 - HA 配置HA中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets created
    *  云堡垒机实例创建时间，使用UTC时间表示。
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
    * @param string $created 云堡垒机实例创建时间，使用UTC时间表示。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets region
    *  云堡垒机实例所在局点。
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
    * @param string $region 云堡垒机实例所在局点。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets zone
    *  云堡垒机实例所在可用区。
    *
    * @return string
    */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
    * Sets zone
    *
    * @param string $zone 云堡垒机实例所在可用区。
    *
    * @return $this
    */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;
        return $this;
    }

    /**
    * Gets availabilityZoneDisplay
    *  云堡垒机实例所在可用区中文名称。
    *
    * @return string
    */
    public function getAvailabilityZoneDisplay()
    {
        return $this->container['availabilityZoneDisplay'];
    }

    /**
    * Sets availabilityZoneDisplay
    *
    * @param string $availabilityZoneDisplay 云堡垒机实例所在可用区中文名称。
    *
    * @return $this
    */
    public function setAvailabilityZoneDisplay($availabilityZoneDisplay)
    {
        $this->container['availabilityZoneDisplay'] = $availabilityZoneDisplay;
        return $this;
    }

    /**
    * Gets vpcId
    *  云堡垒机实例所在虚拟私有云的VPC ID。
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
    * @param string $vpcId 云堡垒机实例所在虚拟私有云的VPC ID。
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
    *  云堡垒机实例所在子网的ID。
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
    * @param string $subnetId 云堡垒机实例所在子网的ID。
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
    *  云堡垒机实例所属的安全组的ID。
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
    * @param string $securityGroupId 云堡垒机实例所属的安全组的ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets specification
    *  云堡垒机实例规格。
    *
    * @return string
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string $specification 云堡垒机实例规格。
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets update
    *  云堡垒机实例是否可以升级。 - NEW，可以升级 - OLD，不能升级
    *
    * @return string
    */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
    * Sets update
    *
    * @param string $update 云堡垒机实例是否可以升级。 - NEW，可以升级 - OLD，不能升级
    *
    * @return $this
    */
    public function setUpdate($update)
    {
        $this->container['update'] = $update;
        return $this;
    }

    /**
    * Gets createinstanceStatus
    *  云堡垒机实例在创建实例过程中的过程状态信息。 - Waiting for payment，等待支付 - creating-network，创建网络 - creating-server，创建服务 - tranfering-horizontal-network，网络打通 - adding-policy-route，添加路由策略 - configing-dns，配置DNS - starting-cbs-service，服务运行中 - setting-init-conf，初始化 - buying-EIP，购买弹性公网IP
    *
    * @return string
    */
    public function getCreateinstanceStatus()
    {
        return $this->container['createinstanceStatus'];
    }

    /**
    * Sets createinstanceStatus
    *
    * @param string $createinstanceStatus 云堡垒机实例在创建实例过程中的过程状态信息。 - Waiting for payment，等待支付 - creating-network，创建网络 - creating-server，创建服务 - tranfering-horizontal-network，网络打通 - adding-policy-route，添加路由策略 - configing-dns，配置DNS - starting-cbs-service，服务运行中 - setting-init-conf，初始化 - buying-EIP，购买弹性公网IP
    *
    * @return $this
    */
    public function setCreateinstanceStatus($createinstanceStatus)
    {
        $this->container['createinstanceStatus'] = $createinstanceStatus;
        return $this;
    }

    /**
    * Gets failReason
    *  云堡垒机实例创建实例失败原因。
    *
    * @return string
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string $failReason 云堡垒机实例创建实例失败原因。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets instanceKey
    *  云堡垒机实例key。
    *
    * @return string
    */
    public function getInstanceKey()
    {
        return $this->container['instanceKey'];
    }

    /**
    * Sets instanceKey
    *
    * @param string $instanceKey 云堡垒机实例key。
    *
    * @return $this
    */
    public function setInstanceKey($instanceKey)
    {
        $this->container['instanceKey'] = $instanceKey;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。
    *
    * @return string
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string $orderId 订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets periodNum
    *  云堡垒机实例订购周期数。
    *
    * @return string
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param string $periodNum 云堡垒机实例订购周期数。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets resourceId
    *  云堡垒机实例的资源id,UUID格式显示。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 云堡垒机实例的资源id,UUID格式显示。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets bastionType
    *  云堡垒机实例堡垒机类型。 - OEM
    *
    * @return string
    */
    public function getBastionType()
    {
        return $this->container['bastionType'];
    }

    /**
    * Sets bastionType
    *
    * @param string $bastionType 云堡垒机实例堡垒机类型。 - OEM
    *
    * @return $this
    */
    public function setBastionType($bastionType)
    {
        $this->container['bastionType'] = $bastionType;
        return $this;
    }

    /**
    * Gets alterPermit
    *  云堡垒机实例是否可以扩容。 - 1 开启扩容 - 0 关闭扩容
    *
    * @return string
    */
    public function getAlterPermit()
    {
        return $this->container['alterPermit'];
    }

    /**
    * Sets alterPermit
    *
    * @param string $alterPermit 云堡垒机实例是否可以扩容。 - 1 开启扩容 - 0 关闭扩容
    *
    * @return $this
    */
    public function setAlterPermit($alterPermit)
    {
        $this->container['alterPermit'] = $alterPermit;
        return $this;
    }

    /**
    * Gets publicId
    *  云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    *
    * @return string
    */
    public function getPublicId()
    {
        return $this->container['publicId'];
    }

    /**
    * Sets publicId
    *
    * @param string $publicId 云堡垒机实例绑定公网的弹性IP的ID，UUID格式表示。
    *
    * @return $this
    */
    public function setPublicId($publicId)
    {
        $this->container['publicId'] = $publicId;
        return $this;
    }

    /**
    * Gets bastionVersion
    *  云堡垒机实例当前版本。
    *
    * @return string
    */
    public function getBastionVersion()
    {
        return $this->container['bastionVersion'];
    }

    /**
    * Sets bastionVersion
    *
    * @param string $bastionVersion 云堡垒机实例当前版本。
    *
    * @return $this
    */
    public function setBastionVersion($bastionVersion)
    {
        $this->container['bastionVersion'] = $bastionVersion;
        return $this;
    }

    /**
    * Gets newBastionVersion
    *  云堡垒机实例可以升级的版本。
    *
    * @return string
    */
    public function getNewBastionVersion()
    {
        return $this->container['newBastionVersion'];
    }

    /**
    * Sets newBastionVersion
    *
    * @param string $newBastionVersion 云堡垒机实例可以升级的版本。
    *
    * @return $this
    */
    public function setNewBastionVersion($newBastionVersion)
    {
        $this->container['newBastionVersion'] = $newBastionVersion;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  云堡垒机实例状态。 - building  创建中 - deleting  删除中 - deleted 删除了 - unpaid  未支付 - upgrading 升级中 - resizing  扩容中 - abnormal  异常 - error 故障 - ok  正常
    *
    * @return string
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string $instanceStatus 云堡垒机实例状态。 - building  创建中 - deleting  删除中 - deleted 删除了 - unpaid  未支付 - upgrading 升级中 - resizing  扩容中 - abnormal  异常 - error 故障 - ok  正常
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets instanceDescription
    *  云堡垒机实例状态描述。
    *
    * @return string
    */
    public function getInstanceDescription()
    {
        return $this->container['instanceDescription'];
    }

    /**
    * Sets instanceDescription
    *
    * @param string $instanceDescription 云堡垒机实例状态描述。
    *
    * @return $this
    */
    public function setInstanceDescription($instanceDescription)
    {
        $this->container['instanceDescription'] = $instanceDescription;
        return $this;
    }

    /**
    * Gets slaveZone
    *  备可用分区，默认返回null。
    *
    * @return string|null
    */
    public function getSlaveZone()
    {
        return $this->container['slaveZone'];
    }

    /**
    * Sets slaveZone
    *
    * @param string|null $slaveZone 备可用分区，默认返回null。
    *
    * @return $this
    */
    public function setSlaveZone($slaveZone)
    {
        $this->container['slaveZone'] = $slaveZone;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  云堡垒机实例所属企业项目ID。
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
    * @param string|null $enterpriseProjectId 云堡垒机实例所属企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets instanceType
    *  云堡垒机实例类型。 - null  单机默认返回null - master  HA时返回主机 - slave HA时返回备机
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 云堡垒机实例类型。 - null  单机默认返回null - master  HA时返回主机 - slave HA时返回备机
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets haId
    *  云堡垒机实例主备ID。 - 单机堡垒机实例默认返回null - HA堡垒机实例返回主机HAID
    *
    * @return string|null
    */
    public function getHaId()
    {
        return $this->container['haId'];
    }

    /**
    * Sets haId
    *
    * @param string|null $haId 云堡垒机实例主备ID。 - 单机堡垒机实例默认返回null - HA堡垒机实例返回主机HAID
    *
    * @return $this
    */
    public function setHaId($haId)
    {
        $this->container['haId'] = $haId;
        return $this;
    }

    /**
    * Gets slaveZoneDisplay
    *  云堡垒机实例备机可用分区名称。 单机堡垒机实例和备机堡垒机实例返回null，HA堡垒机实例主机返回备机所在可用区名称。
    *
    * @return string|null
    */
    public function getSlaveZoneDisplay()
    {
        return $this->container['slaveZoneDisplay'];
    }

    /**
    * Sets slaveZoneDisplay
    *
    * @param string|null $slaveZoneDisplay 云堡垒机实例备机可用分区名称。 单机堡垒机实例和备机堡垒机实例返回null，HA堡垒机实例主机返回备机所在可用区名称。
    *
    * @return $this
    */
    public function setSlaveZoneDisplay($slaveZoneDisplay)
    {
        $this->container['slaveZoneDisplay'] = $slaveZoneDisplay;
        return $this;
    }

    /**
    * Gets webPort
    *  云堡垒机实例WEB界面访问的端口号。
    *
    * @return string|null
    */
    public function getWebPort()
    {
        return $this->container['webPort'];
    }

    /**
    * Sets webPort
    *
    * @param string|null $webPort 云堡垒机实例WEB界面访问的端口号。
    *
    * @return $this
    */
    public function setWebPort($webPort)
    {
        $this->container['webPort'] = $webPort;
        return $this;
    }

    /**
    * Gets vip
    *  云堡垒机实例浮动ip。返回默认值null
    *
    * @return string|null
    */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
    * Sets vip
    *
    * @param string|null $vip 云堡垒机实例浮动ip。返回默认值null
    *
    * @return $this
    */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;
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

