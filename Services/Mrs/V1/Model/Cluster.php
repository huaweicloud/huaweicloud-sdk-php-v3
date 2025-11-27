<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Cluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Cluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID。
    * clusterName  集群名称。
    * totalNodeNum  集群部署的节点总数。
    * clusterState  集群状态，包括： - starting：启动中的集群。 - running：运行中的集群。 - terminated：已删除的集群。 - failed：失败的集群。 - abnormal：异常的集群。 - terminating：删除中的集群。 - frozen：已冻结的集群。 - scaling-out：扩容中的集群。 - scaling-in：缩容中的集群。
    * stageDesc  集群进度描述。  安装集群进度包括： - Verifying cluster parameters：校验集群参数中 - Applying for cluster resources：申请集群资源中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Installing MRS Manager：安装MRS Manager中 - Deploying cluster：部署集群中 - Cluster installation failed：集群安装失败  扩容集群进度包括： - Preparing for cluster expansion：准备扩容中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Adding node to the cluster：节点加入集群中 - Cluster expansion failed：集群扩容失败  缩容集群进度包括： - Preparing for cluster shrink：正在准备缩容 - Decommissioning instance：实例退服中 - Deleting VM：删除虚拟机中 - Deleting node from the cluster：从集群删除节点中 - Cluster shrink failed：集群缩容失败 集群安装、扩容、缩容失败，stageDesc会显示失败的原因。
    * createAt  集群创建时间，十位时间戳。
    * updateAt  集群更新时间，十位时间戳。
    * chargingStartTime  开始计费时间。
    * billingType  集群计费模式。
    * dataCenter  集群工作区域。
    * vpc  VPC名称。
    * vpcId  VPC ID。
    * duration  集群购买时长。
    * fee  创建集群所需费用，系统自动计算。
    * hadoopVersion  Hadoop组件版本信息。
    * componentList  组件列表信息。
    * externalIp  公网IP地址。
    * externalAlternateIp  公网备用IP地址。
    * internalIp  内网IP地址。
    * deploymentId  集群部署ID。
    * remark  集群备注信息。
    * orderId  创建集群的订单号。
    * azId  可用区域ID。
    * azName  可用区域名称。
    * azCode  可用区域英文名称
    * availabilityZoneId  可用区域
    * instanceId  实例ID。
    * vnc  远程登录弹性云服务器的URI地址。
    * tenantId  项目编号。
    * volumeSize  磁盘存储空间。
    * volumeType  磁盘类型。
    * subnetId  子网ID。
    * subnetName  子网名称。
    * securityGroupsId  安全组ID。
    * slaveSecurityGroupsId  非Master节点的安全组id，当前一个MRS集群只会使用一个安全组，所以该字段已经废弃，从兼容性考虑，该字段会返回和securityGroupsId同样的值。
    * bootstrapScripts  配置引导操作脚本信息。
    * safeMode  MRS集群运行模式。 - 0：普通集群 - 1：安全集群
    * clusterVersion  集群版本。
    * nodePublicCertName  密钥文件名称。
    * masterNodeIp  Master节点IP。
    * privateIpFirst  首选私有IP。
    * errorInfo  错误信息。
    * tags  标签信息
    * masterNodeNum  集群部署的Master节点数量。
    * coreNodeNum  集群部署的Core节点数量。
    * masterNodeSize  Master节点的实例规格。
    * coreNodeSize  Core节点的实例规格。
    * masterNodeProductId  Master节点产品ID。
    * masterNodeSpecId  Master节点规格ID。
    * coreNodeProductId  Core节点产品ID。
    * coreNodeSpecId  Core节点规格ID。
    * masterDataVolumeType  Master节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * masterDataVolumeSize  Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  Master节点数据磁盘个数。 取值只能是1
    * coreDataVolumeType  Core节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * coreDataVolumeSize  Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  Core节点数据磁盘个数。 取值范围：1～10
    * enterpriseProjectId  企业项目ID。
    * isMrsManagerFinish  表示集群创建过程中，MRS Manager是否安装完成。 - true：安装完成 - false：安装未完成
    * clusterType  集群类型。
    * logCollection  集群安装失败时，是否搜集日志。 - 0：不收集 - 1：收集
    * periodType  区分包周期，集群是包年还是包月。 - 0：包月 - 1：包年
    * scale  集群节点的变更状态（扩容/缩容/变更规格）。当该参数取值为空时，表示集群节点没有进行变更操作。 取值范围： - scaling-out：扩容中 - scaling-in：缩容中 - scaling-error：处于running状态，且上一次扩容/缩容/升级规格失败的集群 - scaling-up：Master节点规格升级中 - scaling_up_first：备Master节点规格升级中 - scaled_up_first：备Master节点规格升级成功 - scaled-up-success：Master节点规格升级成功
    * nodeGroups  Master节点、Core节点和Task节点列表信息。
    * taskNodeGroups  Task节点列表信息。
    * eipId  集群弹性公网ip的唯一标识
    * eipAddress  集群弹性公网ip的IPV4地址
    * eipv6Address  集群弹性公网ip的IPV6地址，IPv4时无此字段。
    * azCategory  表示当前可用区的类型。 - 0：大云主可用区 - 21：本地可用区 - 41：边缘可用区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'totalNodeNum' => 'string',
            'clusterState' => 'string',
            'stageDesc' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string',
            'chargingStartTime' => 'string',
            'billingType' => 'string',
            'dataCenter' => 'string',
            'vpc' => 'string',
            'vpcId' => 'string',
            'duration' => 'string',
            'fee' => 'string',
            'hadoopVersion' => 'string',
            'componentList' => '\HuaweiCloud\SDK\Mrs\V1\Model\ComponentAmb[]',
            'externalIp' => 'string',
            'externalAlternateIp' => 'string',
            'internalIp' => 'string',
            'deploymentId' => 'string',
            'remark' => 'string',
            'orderId' => 'string',
            'azId' => 'string',
            'azName' => 'string',
            'azCode' => 'string',
            'availabilityZoneId' => 'string',
            'instanceId' => 'string',
            'vnc' => 'string',
            'tenantId' => 'string',
            'volumeSize' => 'int',
            'volumeType' => 'string',
            'subnetId' => 'string',
            'subnetName' => 'string',
            'securityGroupsId' => 'string',
            'slaveSecurityGroupsId' => 'string',
            'bootstrapScripts' => '\HuaweiCloud\SDK\Mrs\V1\Model\BootstrapScript[]',
            'safeMode' => 'int',
            'clusterVersion' => 'string',
            'nodePublicCertName' => 'string',
            'masterNodeIp' => 'string',
            'privateIpFirst' => 'string',
            'errorInfo' => 'string',
            'tags' => 'string',
            'masterNodeNum' => 'string',
            'coreNodeNum' => 'string',
            'masterNodeSize' => 'string',
            'coreNodeSize' => 'string',
            'masterNodeProductId' => 'string',
            'masterNodeSpecId' => 'string',
            'coreNodeProductId' => 'string',
            'coreNodeSpecId' => 'string',
            'masterDataVolumeType' => 'string',
            'masterDataVolumeSize' => 'int',
            'masterDataVolumeCount' => 'int',
            'coreDataVolumeType' => 'string',
            'coreDataVolumeSize' => 'int',
            'coreDataVolumeCount' => 'int',
            'enterpriseProjectId' => 'string',
            'isMrsManagerFinish' => 'bool',
            'clusterType' => 'int',
            'logCollection' => 'int',
            'periodType' => 'int',
            'scale' => 'string',
            'nodeGroups' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV10[]',
            'taskNodeGroups' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV10[]',
            'eipId' => 'string',
            'eipAddress' => 'string',
            'eipv6Address' => 'string',
            'azCategory' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID。
    * clusterName  集群名称。
    * totalNodeNum  集群部署的节点总数。
    * clusterState  集群状态，包括： - starting：启动中的集群。 - running：运行中的集群。 - terminated：已删除的集群。 - failed：失败的集群。 - abnormal：异常的集群。 - terminating：删除中的集群。 - frozen：已冻结的集群。 - scaling-out：扩容中的集群。 - scaling-in：缩容中的集群。
    * stageDesc  集群进度描述。  安装集群进度包括： - Verifying cluster parameters：校验集群参数中 - Applying for cluster resources：申请集群资源中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Installing MRS Manager：安装MRS Manager中 - Deploying cluster：部署集群中 - Cluster installation failed：集群安装失败  扩容集群进度包括： - Preparing for cluster expansion：准备扩容中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Adding node to the cluster：节点加入集群中 - Cluster expansion failed：集群扩容失败  缩容集群进度包括： - Preparing for cluster shrink：正在准备缩容 - Decommissioning instance：实例退服中 - Deleting VM：删除虚拟机中 - Deleting node from the cluster：从集群删除节点中 - Cluster shrink failed：集群缩容失败 集群安装、扩容、缩容失败，stageDesc会显示失败的原因。
    * createAt  集群创建时间，十位时间戳。
    * updateAt  集群更新时间，十位时间戳。
    * chargingStartTime  开始计费时间。
    * billingType  集群计费模式。
    * dataCenter  集群工作区域。
    * vpc  VPC名称。
    * vpcId  VPC ID。
    * duration  集群购买时长。
    * fee  创建集群所需费用，系统自动计算。
    * hadoopVersion  Hadoop组件版本信息。
    * componentList  组件列表信息。
    * externalIp  公网IP地址。
    * externalAlternateIp  公网备用IP地址。
    * internalIp  内网IP地址。
    * deploymentId  集群部署ID。
    * remark  集群备注信息。
    * orderId  创建集群的订单号。
    * azId  可用区域ID。
    * azName  可用区域名称。
    * azCode  可用区域英文名称
    * availabilityZoneId  可用区域
    * instanceId  实例ID。
    * vnc  远程登录弹性云服务器的URI地址。
    * tenantId  项目编号。
    * volumeSize  磁盘存储空间。
    * volumeType  磁盘类型。
    * subnetId  子网ID。
    * subnetName  子网名称。
    * securityGroupsId  安全组ID。
    * slaveSecurityGroupsId  非Master节点的安全组id，当前一个MRS集群只会使用一个安全组，所以该字段已经废弃，从兼容性考虑，该字段会返回和securityGroupsId同样的值。
    * bootstrapScripts  配置引导操作脚本信息。
    * safeMode  MRS集群运行模式。 - 0：普通集群 - 1：安全集群
    * clusterVersion  集群版本。
    * nodePublicCertName  密钥文件名称。
    * masterNodeIp  Master节点IP。
    * privateIpFirst  首选私有IP。
    * errorInfo  错误信息。
    * tags  标签信息
    * masterNodeNum  集群部署的Master节点数量。
    * coreNodeNum  集群部署的Core节点数量。
    * masterNodeSize  Master节点的实例规格。
    * coreNodeSize  Core节点的实例规格。
    * masterNodeProductId  Master节点产品ID。
    * masterNodeSpecId  Master节点规格ID。
    * coreNodeProductId  Core节点产品ID。
    * coreNodeSpecId  Core节点规格ID。
    * masterDataVolumeType  Master节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * masterDataVolumeSize  Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  Master节点数据磁盘个数。 取值只能是1
    * coreDataVolumeType  Core节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * coreDataVolumeSize  Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  Core节点数据磁盘个数。 取值范围：1～10
    * enterpriseProjectId  企业项目ID。
    * isMrsManagerFinish  表示集群创建过程中，MRS Manager是否安装完成。 - true：安装完成 - false：安装未完成
    * clusterType  集群类型。
    * logCollection  集群安装失败时，是否搜集日志。 - 0：不收集 - 1：收集
    * periodType  区分包周期，集群是包年还是包月。 - 0：包月 - 1：包年
    * scale  集群节点的变更状态（扩容/缩容/变更规格）。当该参数取值为空时，表示集群节点没有进行变更操作。 取值范围： - scaling-out：扩容中 - scaling-in：缩容中 - scaling-error：处于running状态，且上一次扩容/缩容/升级规格失败的集群 - scaling-up：Master节点规格升级中 - scaling_up_first：备Master节点规格升级中 - scaled_up_first：备Master节点规格升级成功 - scaled-up-success：Master节点规格升级成功
    * nodeGroups  Master节点、Core节点和Task节点列表信息。
    * taskNodeGroups  Task节点列表信息。
    * eipId  集群弹性公网ip的唯一标识
    * eipAddress  集群弹性公网ip的IPV4地址
    * eipv6Address  集群弹性公网ip的IPV6地址，IPv4时无此字段。
    * azCategory  表示当前可用区的类型。 - 0：大云主可用区 - 21：本地可用区 - 41：边缘可用区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'totalNodeNum' => null,
        'clusterState' => null,
        'stageDesc' => null,
        'createAt' => null,
        'updateAt' => null,
        'chargingStartTime' => null,
        'billingType' => null,
        'dataCenter' => null,
        'vpc' => null,
        'vpcId' => null,
        'duration' => null,
        'fee' => null,
        'hadoopVersion' => null,
        'componentList' => null,
        'externalIp' => null,
        'externalAlternateIp' => null,
        'internalIp' => null,
        'deploymentId' => null,
        'remark' => null,
        'orderId' => null,
        'azId' => null,
        'azName' => null,
        'azCode' => null,
        'availabilityZoneId' => null,
        'instanceId' => null,
        'vnc' => null,
        'tenantId' => null,
        'volumeSize' => 'int32',
        'volumeType' => null,
        'subnetId' => null,
        'subnetName' => null,
        'securityGroupsId' => null,
        'slaveSecurityGroupsId' => null,
        'bootstrapScripts' => null,
        'safeMode' => 'int32',
        'clusterVersion' => null,
        'nodePublicCertName' => null,
        'masterNodeIp' => null,
        'privateIpFirst' => null,
        'errorInfo' => null,
        'tags' => null,
        'masterNodeNum' => null,
        'coreNodeNum' => null,
        'masterNodeSize' => null,
        'coreNodeSize' => null,
        'masterNodeProductId' => null,
        'masterNodeSpecId' => null,
        'coreNodeProductId' => null,
        'coreNodeSpecId' => null,
        'masterDataVolumeType' => null,
        'masterDataVolumeSize' => 'int32',
        'masterDataVolumeCount' => 'int32',
        'coreDataVolumeType' => null,
        'coreDataVolumeSize' => 'int32',
        'coreDataVolumeCount' => 'int32',
        'enterpriseProjectId' => null,
        'isMrsManagerFinish' => null,
        'clusterType' => 'int32',
        'logCollection' => 'int32',
        'periodType' => 'int32',
        'scale' => null,
        'nodeGroups' => null,
        'taskNodeGroups' => null,
        'eipId' => null,
        'eipAddress' => null,
        'eipv6Address' => null,
        'azCategory' => 'int32'
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
    * clusterId  集群ID。
    * clusterName  集群名称。
    * totalNodeNum  集群部署的节点总数。
    * clusterState  集群状态，包括： - starting：启动中的集群。 - running：运行中的集群。 - terminated：已删除的集群。 - failed：失败的集群。 - abnormal：异常的集群。 - terminating：删除中的集群。 - frozen：已冻结的集群。 - scaling-out：扩容中的集群。 - scaling-in：缩容中的集群。
    * stageDesc  集群进度描述。  安装集群进度包括： - Verifying cluster parameters：校验集群参数中 - Applying for cluster resources：申请集群资源中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Installing MRS Manager：安装MRS Manager中 - Deploying cluster：部署集群中 - Cluster installation failed：集群安装失败  扩容集群进度包括： - Preparing for cluster expansion：准备扩容中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Adding node to the cluster：节点加入集群中 - Cluster expansion failed：集群扩容失败  缩容集群进度包括： - Preparing for cluster shrink：正在准备缩容 - Decommissioning instance：实例退服中 - Deleting VM：删除虚拟机中 - Deleting node from the cluster：从集群删除节点中 - Cluster shrink failed：集群缩容失败 集群安装、扩容、缩容失败，stageDesc会显示失败的原因。
    * createAt  集群创建时间，十位时间戳。
    * updateAt  集群更新时间，十位时间戳。
    * chargingStartTime  开始计费时间。
    * billingType  集群计费模式。
    * dataCenter  集群工作区域。
    * vpc  VPC名称。
    * vpcId  VPC ID。
    * duration  集群购买时长。
    * fee  创建集群所需费用，系统自动计算。
    * hadoopVersion  Hadoop组件版本信息。
    * componentList  组件列表信息。
    * externalIp  公网IP地址。
    * externalAlternateIp  公网备用IP地址。
    * internalIp  内网IP地址。
    * deploymentId  集群部署ID。
    * remark  集群备注信息。
    * orderId  创建集群的订单号。
    * azId  可用区域ID。
    * azName  可用区域名称。
    * azCode  可用区域英文名称
    * availabilityZoneId  可用区域
    * instanceId  实例ID。
    * vnc  远程登录弹性云服务器的URI地址。
    * tenantId  项目编号。
    * volumeSize  磁盘存储空间。
    * volumeType  磁盘类型。
    * subnetId  子网ID。
    * subnetName  子网名称。
    * securityGroupsId  安全组ID。
    * slaveSecurityGroupsId  非Master节点的安全组id，当前一个MRS集群只会使用一个安全组，所以该字段已经废弃，从兼容性考虑，该字段会返回和securityGroupsId同样的值。
    * bootstrapScripts  配置引导操作脚本信息。
    * safeMode  MRS集群运行模式。 - 0：普通集群 - 1：安全集群
    * clusterVersion  集群版本。
    * nodePublicCertName  密钥文件名称。
    * masterNodeIp  Master节点IP。
    * privateIpFirst  首选私有IP。
    * errorInfo  错误信息。
    * tags  标签信息
    * masterNodeNum  集群部署的Master节点数量。
    * coreNodeNum  集群部署的Core节点数量。
    * masterNodeSize  Master节点的实例规格。
    * coreNodeSize  Core节点的实例规格。
    * masterNodeProductId  Master节点产品ID。
    * masterNodeSpecId  Master节点规格ID。
    * coreNodeProductId  Core节点产品ID。
    * coreNodeSpecId  Core节点规格ID。
    * masterDataVolumeType  Master节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * masterDataVolumeSize  Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  Master节点数据磁盘个数。 取值只能是1
    * coreDataVolumeType  Core节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * coreDataVolumeSize  Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  Core节点数据磁盘个数。 取值范围：1～10
    * enterpriseProjectId  企业项目ID。
    * isMrsManagerFinish  表示集群创建过程中，MRS Manager是否安装完成。 - true：安装完成 - false：安装未完成
    * clusterType  集群类型。
    * logCollection  集群安装失败时，是否搜集日志。 - 0：不收集 - 1：收集
    * periodType  区分包周期，集群是包年还是包月。 - 0：包月 - 1：包年
    * scale  集群节点的变更状态（扩容/缩容/变更规格）。当该参数取值为空时，表示集群节点没有进行变更操作。 取值范围： - scaling-out：扩容中 - scaling-in：缩容中 - scaling-error：处于running状态，且上一次扩容/缩容/升级规格失败的集群 - scaling-up：Master节点规格升级中 - scaling_up_first：备Master节点规格升级中 - scaled_up_first：备Master节点规格升级成功 - scaled-up-success：Master节点规格升级成功
    * nodeGroups  Master节点、Core节点和Task节点列表信息。
    * taskNodeGroups  Task节点列表信息。
    * eipId  集群弹性公网ip的唯一标识
    * eipAddress  集群弹性公网ip的IPV4地址
    * eipv6Address  集群弹性公网ip的IPV6地址，IPv4时无此字段。
    * azCategory  表示当前可用区的类型。 - 0：大云主可用区 - 21：本地可用区 - 41：边缘可用区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'clusterId',
            'clusterName' => 'clusterName',
            'totalNodeNum' => 'totalNodeNum',
            'clusterState' => 'clusterState',
            'stageDesc' => 'stageDesc',
            'createAt' => 'createAt',
            'updateAt' => 'updateAt',
            'chargingStartTime' => 'chargingStartTime',
            'billingType' => 'billingType',
            'dataCenter' => 'dataCenter',
            'vpc' => 'vpc',
            'vpcId' => 'vpcId',
            'duration' => 'duration',
            'fee' => 'fee',
            'hadoopVersion' => 'hadoopVersion',
            'componentList' => 'componentList',
            'externalIp' => 'externalIp',
            'externalAlternateIp' => 'externalAlternateIp',
            'internalIp' => 'internalIp',
            'deploymentId' => 'deploymentId',
            'remark' => 'remark',
            'orderId' => 'orderId',
            'azId' => 'azId',
            'azName' => 'azName',
            'azCode' => 'azCode',
            'availabilityZoneId' => 'availabilityZoneId',
            'instanceId' => 'instanceId',
            'vnc' => 'vnc',
            'tenantId' => 'tenantId',
            'volumeSize' => 'volumeSize',
            'volumeType' => 'volumeType',
            'subnetId' => 'subnetId',
            'subnetName' => 'subnetName',
            'securityGroupsId' => 'securityGroupsId',
            'slaveSecurityGroupsId' => 'slaveSecurityGroupsId',
            'bootstrapScripts' => 'bootstrapScripts',
            'safeMode' => 'safeMode',
            'clusterVersion' => 'clusterVersion',
            'nodePublicCertName' => 'nodePublicCertName',
            'masterNodeIp' => 'masterNodeIp',
            'privateIpFirst' => 'privateIpFirst',
            'errorInfo' => 'errorInfo',
            'tags' => 'tags',
            'masterNodeNum' => 'masterNodeNum',
            'coreNodeNum' => 'coreNodeNum',
            'masterNodeSize' => 'masterNodeSize',
            'coreNodeSize' => 'coreNodeSize',
            'masterNodeProductId' => 'masterNodeProductId',
            'masterNodeSpecId' => 'masterNodeSpecId',
            'coreNodeProductId' => 'coreNodeProductId',
            'coreNodeSpecId' => 'coreNodeSpecId',
            'masterDataVolumeType' => 'masterDataVolumeType',
            'masterDataVolumeSize' => 'masterDataVolumeSize',
            'masterDataVolumeCount' => 'masterDataVolumeCount',
            'coreDataVolumeType' => 'coreDataVolumeType',
            'coreDataVolumeSize' => 'coreDataVolumeSize',
            'coreDataVolumeCount' => 'coreDataVolumeCount',
            'enterpriseProjectId' => 'enterpriseProjectId',
            'isMrsManagerFinish' => 'isMrsManagerFinish',
            'clusterType' => 'clusterType',
            'logCollection' => 'logCollection',
            'periodType' => 'periodType',
            'scale' => 'scale',
            'nodeGroups' => 'nodeGroups',
            'taskNodeGroups' => 'taskNodeGroups',
            'eipId' => 'eipId',
            'eipAddress' => 'eipAddress',
            'eipv6Address' => 'eipv6Address',
            'azCategory' => 'azCategory'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID。
    * clusterName  集群名称。
    * totalNodeNum  集群部署的节点总数。
    * clusterState  集群状态，包括： - starting：启动中的集群。 - running：运行中的集群。 - terminated：已删除的集群。 - failed：失败的集群。 - abnormal：异常的集群。 - terminating：删除中的集群。 - frozen：已冻结的集群。 - scaling-out：扩容中的集群。 - scaling-in：缩容中的集群。
    * stageDesc  集群进度描述。  安装集群进度包括： - Verifying cluster parameters：校验集群参数中 - Applying for cluster resources：申请集群资源中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Installing MRS Manager：安装MRS Manager中 - Deploying cluster：部署集群中 - Cluster installation failed：集群安装失败  扩容集群进度包括： - Preparing for cluster expansion：准备扩容中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Adding node to the cluster：节点加入集群中 - Cluster expansion failed：集群扩容失败  缩容集群进度包括： - Preparing for cluster shrink：正在准备缩容 - Decommissioning instance：实例退服中 - Deleting VM：删除虚拟机中 - Deleting node from the cluster：从集群删除节点中 - Cluster shrink failed：集群缩容失败 集群安装、扩容、缩容失败，stageDesc会显示失败的原因。
    * createAt  集群创建时间，十位时间戳。
    * updateAt  集群更新时间，十位时间戳。
    * chargingStartTime  开始计费时间。
    * billingType  集群计费模式。
    * dataCenter  集群工作区域。
    * vpc  VPC名称。
    * vpcId  VPC ID。
    * duration  集群购买时长。
    * fee  创建集群所需费用，系统自动计算。
    * hadoopVersion  Hadoop组件版本信息。
    * componentList  组件列表信息。
    * externalIp  公网IP地址。
    * externalAlternateIp  公网备用IP地址。
    * internalIp  内网IP地址。
    * deploymentId  集群部署ID。
    * remark  集群备注信息。
    * orderId  创建集群的订单号。
    * azId  可用区域ID。
    * azName  可用区域名称。
    * azCode  可用区域英文名称
    * availabilityZoneId  可用区域
    * instanceId  实例ID。
    * vnc  远程登录弹性云服务器的URI地址。
    * tenantId  项目编号。
    * volumeSize  磁盘存储空间。
    * volumeType  磁盘类型。
    * subnetId  子网ID。
    * subnetName  子网名称。
    * securityGroupsId  安全组ID。
    * slaveSecurityGroupsId  非Master节点的安全组id，当前一个MRS集群只会使用一个安全组，所以该字段已经废弃，从兼容性考虑，该字段会返回和securityGroupsId同样的值。
    * bootstrapScripts  配置引导操作脚本信息。
    * safeMode  MRS集群运行模式。 - 0：普通集群 - 1：安全集群
    * clusterVersion  集群版本。
    * nodePublicCertName  密钥文件名称。
    * masterNodeIp  Master节点IP。
    * privateIpFirst  首选私有IP。
    * errorInfo  错误信息。
    * tags  标签信息
    * masterNodeNum  集群部署的Master节点数量。
    * coreNodeNum  集群部署的Core节点数量。
    * masterNodeSize  Master节点的实例规格。
    * coreNodeSize  Core节点的实例规格。
    * masterNodeProductId  Master节点产品ID。
    * masterNodeSpecId  Master节点规格ID。
    * coreNodeProductId  Core节点产品ID。
    * coreNodeSpecId  Core节点规格ID。
    * masterDataVolumeType  Master节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * masterDataVolumeSize  Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  Master节点数据磁盘个数。 取值只能是1
    * coreDataVolumeType  Core节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * coreDataVolumeSize  Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  Core节点数据磁盘个数。 取值范围：1～10
    * enterpriseProjectId  企业项目ID。
    * isMrsManagerFinish  表示集群创建过程中，MRS Manager是否安装完成。 - true：安装完成 - false：安装未完成
    * clusterType  集群类型。
    * logCollection  集群安装失败时，是否搜集日志。 - 0：不收集 - 1：收集
    * periodType  区分包周期，集群是包年还是包月。 - 0：包月 - 1：包年
    * scale  集群节点的变更状态（扩容/缩容/变更规格）。当该参数取值为空时，表示集群节点没有进行变更操作。 取值范围： - scaling-out：扩容中 - scaling-in：缩容中 - scaling-error：处于running状态，且上一次扩容/缩容/升级规格失败的集群 - scaling-up：Master节点规格升级中 - scaling_up_first：备Master节点规格升级中 - scaled_up_first：备Master节点规格升级成功 - scaled-up-success：Master节点规格升级成功
    * nodeGroups  Master节点、Core节点和Task节点列表信息。
    * taskNodeGroups  Task节点列表信息。
    * eipId  集群弹性公网ip的唯一标识
    * eipAddress  集群弹性公网ip的IPV4地址
    * eipv6Address  集群弹性公网ip的IPV6地址，IPv4时无此字段。
    * azCategory  表示当前可用区的类型。 - 0：大云主可用区 - 21：本地可用区 - 41：边缘可用区
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'totalNodeNum' => 'setTotalNodeNum',
            'clusterState' => 'setClusterState',
            'stageDesc' => 'setStageDesc',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'chargingStartTime' => 'setChargingStartTime',
            'billingType' => 'setBillingType',
            'dataCenter' => 'setDataCenter',
            'vpc' => 'setVpc',
            'vpcId' => 'setVpcId',
            'duration' => 'setDuration',
            'fee' => 'setFee',
            'hadoopVersion' => 'setHadoopVersion',
            'componentList' => 'setComponentList',
            'externalIp' => 'setExternalIp',
            'externalAlternateIp' => 'setExternalAlternateIp',
            'internalIp' => 'setInternalIp',
            'deploymentId' => 'setDeploymentId',
            'remark' => 'setRemark',
            'orderId' => 'setOrderId',
            'azId' => 'setAzId',
            'azName' => 'setAzName',
            'azCode' => 'setAzCode',
            'availabilityZoneId' => 'setAvailabilityZoneId',
            'instanceId' => 'setInstanceId',
            'vnc' => 'setVnc',
            'tenantId' => 'setTenantId',
            'volumeSize' => 'setVolumeSize',
            'volumeType' => 'setVolumeType',
            'subnetId' => 'setSubnetId',
            'subnetName' => 'setSubnetName',
            'securityGroupsId' => 'setSecurityGroupsId',
            'slaveSecurityGroupsId' => 'setSlaveSecurityGroupsId',
            'bootstrapScripts' => 'setBootstrapScripts',
            'safeMode' => 'setSafeMode',
            'clusterVersion' => 'setClusterVersion',
            'nodePublicCertName' => 'setNodePublicCertName',
            'masterNodeIp' => 'setMasterNodeIp',
            'privateIpFirst' => 'setPrivateIpFirst',
            'errorInfo' => 'setErrorInfo',
            'tags' => 'setTags',
            'masterNodeNum' => 'setMasterNodeNum',
            'coreNodeNum' => 'setCoreNodeNum',
            'masterNodeSize' => 'setMasterNodeSize',
            'coreNodeSize' => 'setCoreNodeSize',
            'masterNodeProductId' => 'setMasterNodeProductId',
            'masterNodeSpecId' => 'setMasterNodeSpecId',
            'coreNodeProductId' => 'setCoreNodeProductId',
            'coreNodeSpecId' => 'setCoreNodeSpecId',
            'masterDataVolumeType' => 'setMasterDataVolumeType',
            'masterDataVolumeSize' => 'setMasterDataVolumeSize',
            'masterDataVolumeCount' => 'setMasterDataVolumeCount',
            'coreDataVolumeType' => 'setCoreDataVolumeType',
            'coreDataVolumeSize' => 'setCoreDataVolumeSize',
            'coreDataVolumeCount' => 'setCoreDataVolumeCount',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'isMrsManagerFinish' => 'setIsMrsManagerFinish',
            'clusterType' => 'setClusterType',
            'logCollection' => 'setLogCollection',
            'periodType' => 'setPeriodType',
            'scale' => 'setScale',
            'nodeGroups' => 'setNodeGroups',
            'taskNodeGroups' => 'setTaskNodeGroups',
            'eipId' => 'setEipId',
            'eipAddress' => 'setEipAddress',
            'eipv6Address' => 'setEipv6Address',
            'azCategory' => 'setAzCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID。
    * clusterName  集群名称。
    * totalNodeNum  集群部署的节点总数。
    * clusterState  集群状态，包括： - starting：启动中的集群。 - running：运行中的集群。 - terminated：已删除的集群。 - failed：失败的集群。 - abnormal：异常的集群。 - terminating：删除中的集群。 - frozen：已冻结的集群。 - scaling-out：扩容中的集群。 - scaling-in：缩容中的集群。
    * stageDesc  集群进度描述。  安装集群进度包括： - Verifying cluster parameters：校验集群参数中 - Applying for cluster resources：申请集群资源中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Installing MRS Manager：安装MRS Manager中 - Deploying cluster：部署集群中 - Cluster installation failed：集群安装失败  扩容集群进度包括： - Preparing for cluster expansion：准备扩容中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Adding node to the cluster：节点加入集群中 - Cluster expansion failed：集群扩容失败  缩容集群进度包括： - Preparing for cluster shrink：正在准备缩容 - Decommissioning instance：实例退服中 - Deleting VM：删除虚拟机中 - Deleting node from the cluster：从集群删除节点中 - Cluster shrink failed：集群缩容失败 集群安装、扩容、缩容失败，stageDesc会显示失败的原因。
    * createAt  集群创建时间，十位时间戳。
    * updateAt  集群更新时间，十位时间戳。
    * chargingStartTime  开始计费时间。
    * billingType  集群计费模式。
    * dataCenter  集群工作区域。
    * vpc  VPC名称。
    * vpcId  VPC ID。
    * duration  集群购买时长。
    * fee  创建集群所需费用，系统自动计算。
    * hadoopVersion  Hadoop组件版本信息。
    * componentList  组件列表信息。
    * externalIp  公网IP地址。
    * externalAlternateIp  公网备用IP地址。
    * internalIp  内网IP地址。
    * deploymentId  集群部署ID。
    * remark  集群备注信息。
    * orderId  创建集群的订单号。
    * azId  可用区域ID。
    * azName  可用区域名称。
    * azCode  可用区域英文名称
    * availabilityZoneId  可用区域
    * instanceId  实例ID。
    * vnc  远程登录弹性云服务器的URI地址。
    * tenantId  项目编号。
    * volumeSize  磁盘存储空间。
    * volumeType  磁盘类型。
    * subnetId  子网ID。
    * subnetName  子网名称。
    * securityGroupsId  安全组ID。
    * slaveSecurityGroupsId  非Master节点的安全组id，当前一个MRS集群只会使用一个安全组，所以该字段已经废弃，从兼容性考虑，该字段会返回和securityGroupsId同样的值。
    * bootstrapScripts  配置引导操作脚本信息。
    * safeMode  MRS集群运行模式。 - 0：普通集群 - 1：安全集群
    * clusterVersion  集群版本。
    * nodePublicCertName  密钥文件名称。
    * masterNodeIp  Master节点IP。
    * privateIpFirst  首选私有IP。
    * errorInfo  错误信息。
    * tags  标签信息
    * masterNodeNum  集群部署的Master节点数量。
    * coreNodeNum  集群部署的Core节点数量。
    * masterNodeSize  Master节点的实例规格。
    * coreNodeSize  Core节点的实例规格。
    * masterNodeProductId  Master节点产品ID。
    * masterNodeSpecId  Master节点规格ID。
    * coreNodeProductId  Core节点产品ID。
    * coreNodeSpecId  Core节点规格ID。
    * masterDataVolumeType  Master节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * masterDataVolumeSize  Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  Master节点数据磁盘个数。 取值只能是1
    * coreDataVolumeType  Core节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    * coreDataVolumeSize  Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  Core节点数据磁盘个数。 取值范围：1～10
    * enterpriseProjectId  企业项目ID。
    * isMrsManagerFinish  表示集群创建过程中，MRS Manager是否安装完成。 - true：安装完成 - false：安装未完成
    * clusterType  集群类型。
    * logCollection  集群安装失败时，是否搜集日志。 - 0：不收集 - 1：收集
    * periodType  区分包周期，集群是包年还是包月。 - 0：包月 - 1：包年
    * scale  集群节点的变更状态（扩容/缩容/变更规格）。当该参数取值为空时，表示集群节点没有进行变更操作。 取值范围： - scaling-out：扩容中 - scaling-in：缩容中 - scaling-error：处于running状态，且上一次扩容/缩容/升级规格失败的集群 - scaling-up：Master节点规格升级中 - scaling_up_first：备Master节点规格升级中 - scaled_up_first：备Master节点规格升级成功 - scaled-up-success：Master节点规格升级成功
    * nodeGroups  Master节点、Core节点和Task节点列表信息。
    * taskNodeGroups  Task节点列表信息。
    * eipId  集群弹性公网ip的唯一标识
    * eipAddress  集群弹性公网ip的IPV4地址
    * eipv6Address  集群弹性公网ip的IPV6地址，IPv4时无此字段。
    * azCategory  表示当前可用区的类型。 - 0：大云主可用区 - 21：本地可用区 - 41：边缘可用区
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'totalNodeNum' => 'getTotalNodeNum',
            'clusterState' => 'getClusterState',
            'stageDesc' => 'getStageDesc',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'chargingStartTime' => 'getChargingStartTime',
            'billingType' => 'getBillingType',
            'dataCenter' => 'getDataCenter',
            'vpc' => 'getVpc',
            'vpcId' => 'getVpcId',
            'duration' => 'getDuration',
            'fee' => 'getFee',
            'hadoopVersion' => 'getHadoopVersion',
            'componentList' => 'getComponentList',
            'externalIp' => 'getExternalIp',
            'externalAlternateIp' => 'getExternalAlternateIp',
            'internalIp' => 'getInternalIp',
            'deploymentId' => 'getDeploymentId',
            'remark' => 'getRemark',
            'orderId' => 'getOrderId',
            'azId' => 'getAzId',
            'azName' => 'getAzName',
            'azCode' => 'getAzCode',
            'availabilityZoneId' => 'getAvailabilityZoneId',
            'instanceId' => 'getInstanceId',
            'vnc' => 'getVnc',
            'tenantId' => 'getTenantId',
            'volumeSize' => 'getVolumeSize',
            'volumeType' => 'getVolumeType',
            'subnetId' => 'getSubnetId',
            'subnetName' => 'getSubnetName',
            'securityGroupsId' => 'getSecurityGroupsId',
            'slaveSecurityGroupsId' => 'getSlaveSecurityGroupsId',
            'bootstrapScripts' => 'getBootstrapScripts',
            'safeMode' => 'getSafeMode',
            'clusterVersion' => 'getClusterVersion',
            'nodePublicCertName' => 'getNodePublicCertName',
            'masterNodeIp' => 'getMasterNodeIp',
            'privateIpFirst' => 'getPrivateIpFirst',
            'errorInfo' => 'getErrorInfo',
            'tags' => 'getTags',
            'masterNodeNum' => 'getMasterNodeNum',
            'coreNodeNum' => 'getCoreNodeNum',
            'masterNodeSize' => 'getMasterNodeSize',
            'coreNodeSize' => 'getCoreNodeSize',
            'masterNodeProductId' => 'getMasterNodeProductId',
            'masterNodeSpecId' => 'getMasterNodeSpecId',
            'coreNodeProductId' => 'getCoreNodeProductId',
            'coreNodeSpecId' => 'getCoreNodeSpecId',
            'masterDataVolumeType' => 'getMasterDataVolumeType',
            'masterDataVolumeSize' => 'getMasterDataVolumeSize',
            'masterDataVolumeCount' => 'getMasterDataVolumeCount',
            'coreDataVolumeType' => 'getCoreDataVolumeType',
            'coreDataVolumeSize' => 'getCoreDataVolumeSize',
            'coreDataVolumeCount' => 'getCoreDataVolumeCount',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'isMrsManagerFinish' => 'getIsMrsManagerFinish',
            'clusterType' => 'getClusterType',
            'logCollection' => 'getLogCollection',
            'periodType' => 'getPeriodType',
            'scale' => 'getScale',
            'nodeGroups' => 'getNodeGroups',
            'taskNodeGroups' => 'getTaskNodeGroups',
            'eipId' => 'getEipId',
            'eipAddress' => 'getEipAddress',
            'eipv6Address' => 'getEipv6Address',
            'azCategory' => 'getAzCategory'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['totalNodeNum'] = isset($data['totalNodeNum']) ? $data['totalNodeNum'] : null;
        $this->container['clusterState'] = isset($data['clusterState']) ? $data['clusterState'] : null;
        $this->container['stageDesc'] = isset($data['stageDesc']) ? $data['stageDesc'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['chargingStartTime'] = isset($data['chargingStartTime']) ? $data['chargingStartTime'] : null;
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['hadoopVersion'] = isset($data['hadoopVersion']) ? $data['hadoopVersion'] : null;
        $this->container['componentList'] = isset($data['componentList']) ? $data['componentList'] : null;
        $this->container['externalIp'] = isset($data['externalIp']) ? $data['externalIp'] : null;
        $this->container['externalAlternateIp'] = isset($data['externalAlternateIp']) ? $data['externalAlternateIp'] : null;
        $this->container['internalIp'] = isset($data['internalIp']) ? $data['internalIp'] : null;
        $this->container['deploymentId'] = isset($data['deploymentId']) ? $data['deploymentId'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['azId'] = isset($data['azId']) ? $data['azId'] : null;
        $this->container['azName'] = isset($data['azName']) ? $data['azName'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['vnc'] = isset($data['vnc']) ? $data['vnc'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['securityGroupsId'] = isset($data['securityGroupsId']) ? $data['securityGroupsId'] : null;
        $this->container['slaveSecurityGroupsId'] = isset($data['slaveSecurityGroupsId']) ? $data['slaveSecurityGroupsId'] : null;
        $this->container['bootstrapScripts'] = isset($data['bootstrapScripts']) ? $data['bootstrapScripts'] : null;
        $this->container['safeMode'] = isset($data['safeMode']) ? $data['safeMode'] : null;
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['nodePublicCertName'] = isset($data['nodePublicCertName']) ? $data['nodePublicCertName'] : null;
        $this->container['masterNodeIp'] = isset($data['masterNodeIp']) ? $data['masterNodeIp'] : null;
        $this->container['privateIpFirst'] = isset($data['privateIpFirst']) ? $data['privateIpFirst'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['masterNodeNum'] = isset($data['masterNodeNum']) ? $data['masterNodeNum'] : null;
        $this->container['coreNodeNum'] = isset($data['coreNodeNum']) ? $data['coreNodeNum'] : null;
        $this->container['masterNodeSize'] = isset($data['masterNodeSize']) ? $data['masterNodeSize'] : null;
        $this->container['coreNodeSize'] = isset($data['coreNodeSize']) ? $data['coreNodeSize'] : null;
        $this->container['masterNodeProductId'] = isset($data['masterNodeProductId']) ? $data['masterNodeProductId'] : null;
        $this->container['masterNodeSpecId'] = isset($data['masterNodeSpecId']) ? $data['masterNodeSpecId'] : null;
        $this->container['coreNodeProductId'] = isset($data['coreNodeProductId']) ? $data['coreNodeProductId'] : null;
        $this->container['coreNodeSpecId'] = isset($data['coreNodeSpecId']) ? $data['coreNodeSpecId'] : null;
        $this->container['masterDataVolumeType'] = isset($data['masterDataVolumeType']) ? $data['masterDataVolumeType'] : null;
        $this->container['masterDataVolumeSize'] = isset($data['masterDataVolumeSize']) ? $data['masterDataVolumeSize'] : null;
        $this->container['masterDataVolumeCount'] = isset($data['masterDataVolumeCount']) ? $data['masterDataVolumeCount'] : null;
        $this->container['coreDataVolumeType'] = isset($data['coreDataVolumeType']) ? $data['coreDataVolumeType'] : null;
        $this->container['coreDataVolumeSize'] = isset($data['coreDataVolumeSize']) ? $data['coreDataVolumeSize'] : null;
        $this->container['coreDataVolumeCount'] = isset($data['coreDataVolumeCount']) ? $data['coreDataVolumeCount'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['isMrsManagerFinish'] = isset($data['isMrsManagerFinish']) ? $data['isMrsManagerFinish'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['logCollection'] = isset($data['logCollection']) ? $data['logCollection'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['scale'] = isset($data['scale']) ? $data['scale'] : null;
        $this->container['nodeGroups'] = isset($data['nodeGroups']) ? $data['nodeGroups'] : null;
        $this->container['taskNodeGroups'] = isset($data['taskNodeGroups']) ? $data['taskNodeGroups'] : null;
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
        $this->container['eipAddress'] = isset($data['eipAddress']) ? $data['eipAddress'] : null;
        $this->container['eipv6Address'] = isset($data['eipv6Address']) ? $data['eipv6Address'] : null;
        $this->container['azCategory'] = isset($data['azCategory']) ? $data['azCategory'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets clusterId
    *  集群ID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets totalNodeNum
    *  集群部署的节点总数。
    *
    * @return string|null
    */
    public function getTotalNodeNum()
    {
        return $this->container['totalNodeNum'];
    }

    /**
    * Sets totalNodeNum
    *
    * @param string|null $totalNodeNum 集群部署的节点总数。
    *
    * @return $this
    */
    public function setTotalNodeNum($totalNodeNum)
    {
        $this->container['totalNodeNum'] = $totalNodeNum;
        return $this;
    }

    /**
    * Gets clusterState
    *  集群状态，包括： - starting：启动中的集群。 - running：运行中的集群。 - terminated：已删除的集群。 - failed：失败的集群。 - abnormal：异常的集群。 - terminating：删除中的集群。 - frozen：已冻结的集群。 - scaling-out：扩容中的集群。 - scaling-in：缩容中的集群。
    *
    * @return string|null
    */
    public function getClusterState()
    {
        return $this->container['clusterState'];
    }

    /**
    * Sets clusterState
    *
    * @param string|null $clusterState 集群状态，包括： - starting：启动中的集群。 - running：运行中的集群。 - terminated：已删除的集群。 - failed：失败的集群。 - abnormal：异常的集群。 - terminating：删除中的集群。 - frozen：已冻结的集群。 - scaling-out：扩容中的集群。 - scaling-in：缩容中的集群。
    *
    * @return $this
    */
    public function setClusterState($clusterState)
    {
        $this->container['clusterState'] = $clusterState;
        return $this;
    }

    /**
    * Gets stageDesc
    *  集群进度描述。  安装集群进度包括： - Verifying cluster parameters：校验集群参数中 - Applying for cluster resources：申请集群资源中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Installing MRS Manager：安装MRS Manager中 - Deploying cluster：部署集群中 - Cluster installation failed：集群安装失败  扩容集群进度包括： - Preparing for cluster expansion：准备扩容中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Adding node to the cluster：节点加入集群中 - Cluster expansion failed：集群扩容失败  缩容集群进度包括： - Preparing for cluster shrink：正在准备缩容 - Decommissioning instance：实例退服中 - Deleting VM：删除虚拟机中 - Deleting node from the cluster：从集群删除节点中 - Cluster shrink failed：集群缩容失败 集群安装、扩容、缩容失败，stageDesc会显示失败的原因。
    *
    * @return string|null
    */
    public function getStageDesc()
    {
        return $this->container['stageDesc'];
    }

    /**
    * Sets stageDesc
    *
    * @param string|null $stageDesc 集群进度描述。  安装集群进度包括： - Verifying cluster parameters：校验集群参数中 - Applying for cluster resources：申请集群资源中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Installing MRS Manager：安装MRS Manager中 - Deploying cluster：部署集群中 - Cluster installation failed：集群安装失败  扩容集群进度包括： - Preparing for cluster expansion：准备扩容中 - Creating VM：创建虚拟机中 - Initializing VM：初始化虚拟机中 - Adding node to the cluster：节点加入集群中 - Cluster expansion failed：集群扩容失败  缩容集群进度包括： - Preparing for cluster shrink：正在准备缩容 - Decommissioning instance：实例退服中 - Deleting VM：删除虚拟机中 - Deleting node from the cluster：从集群删除节点中 - Cluster shrink failed：集群缩容失败 集群安装、扩容、缩容失败，stageDesc会显示失败的原因。
    *
    * @return $this
    */
    public function setStageDesc($stageDesc)
    {
        $this->container['stageDesc'] = $stageDesc;
        return $this;
    }

    /**
    * Gets createAt
    *  集群创建时间，十位时间戳。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 集群创建时间，十位时间戳。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  集群更新时间，十位时间戳。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 集群更新时间，十位时间戳。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets chargingStartTime
    *  开始计费时间。
    *
    * @return string|null
    */
    public function getChargingStartTime()
    {
        return $this->container['chargingStartTime'];
    }

    /**
    * Sets chargingStartTime
    *
    * @param string|null $chargingStartTime 开始计费时间。
    *
    * @return $this
    */
    public function setChargingStartTime($chargingStartTime)
    {
        $this->container['chargingStartTime'] = $chargingStartTime;
        return $this;
    }

    /**
    * Gets billingType
    *  集群计费模式。
    *
    * @return string|null
    */
    public function getBillingType()
    {
        return $this->container['billingType'];
    }

    /**
    * Sets billingType
    *
    * @param string|null $billingType 集群计费模式。
    *
    * @return $this
    */
    public function setBillingType($billingType)
    {
        $this->container['billingType'] = $billingType;
        return $this;
    }

    /**
    * Gets dataCenter
    *  集群工作区域。
    *
    * @return string|null
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param string|null $dataCenter 集群工作区域。
    *
    * @return $this
    */
    public function setDataCenter($dataCenter)
    {
        $this->container['dataCenter'] = $dataCenter;
        return $this;
    }

    /**
    * Gets vpc
    *  VPC名称。
    *
    * @return string|null
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param string|null $vpc VPC名称。
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
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
    * Gets duration
    *  集群购买时长。
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration 集群购买时长。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets fee
    *  创建集群所需费用，系统自动计算。
    *
    * @return string|null
    */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
    * Sets fee
    *
    * @param string|null $fee 创建集群所需费用，系统自动计算。
    *
    * @return $this
    */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;
        return $this;
    }

    /**
    * Gets hadoopVersion
    *  Hadoop组件版本信息。
    *
    * @return string|null
    */
    public function getHadoopVersion()
    {
        return $this->container['hadoopVersion'];
    }

    /**
    * Sets hadoopVersion
    *
    * @param string|null $hadoopVersion Hadoop组件版本信息。
    *
    * @return $this
    */
    public function setHadoopVersion($hadoopVersion)
    {
        $this->container['hadoopVersion'] = $hadoopVersion;
        return $this;
    }

    /**
    * Gets componentList
    *  组件列表信息。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\ComponentAmb[]|null
    */
    public function getComponentList()
    {
        return $this->container['componentList'];
    }

    /**
    * Sets componentList
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\ComponentAmb[]|null $componentList 组件列表信息。
    *
    * @return $this
    */
    public function setComponentList($componentList)
    {
        $this->container['componentList'] = $componentList;
        return $this;
    }

    /**
    * Gets externalIp
    *  公网IP地址。
    *
    * @return string|null
    */
    public function getExternalIp()
    {
        return $this->container['externalIp'];
    }

    /**
    * Sets externalIp
    *
    * @param string|null $externalIp 公网IP地址。
    *
    * @return $this
    */
    public function setExternalIp($externalIp)
    {
        $this->container['externalIp'] = $externalIp;
        return $this;
    }

    /**
    * Gets externalAlternateIp
    *  公网备用IP地址。
    *
    * @return string|null
    */
    public function getExternalAlternateIp()
    {
        return $this->container['externalAlternateIp'];
    }

    /**
    * Sets externalAlternateIp
    *
    * @param string|null $externalAlternateIp 公网备用IP地址。
    *
    * @return $this
    */
    public function setExternalAlternateIp($externalAlternateIp)
    {
        $this->container['externalAlternateIp'] = $externalAlternateIp;
        return $this;
    }

    /**
    * Gets internalIp
    *  内网IP地址。
    *
    * @return string|null
    */
    public function getInternalIp()
    {
        return $this->container['internalIp'];
    }

    /**
    * Sets internalIp
    *
    * @param string|null $internalIp 内网IP地址。
    *
    * @return $this
    */
    public function setInternalIp($internalIp)
    {
        $this->container['internalIp'] = $internalIp;
        return $this;
    }

    /**
    * Gets deploymentId
    *  集群部署ID。
    *
    * @return string|null
    */
    public function getDeploymentId()
    {
        return $this->container['deploymentId'];
    }

    /**
    * Sets deploymentId
    *
    * @param string|null $deploymentId 集群部署ID。
    *
    * @return $this
    */
    public function setDeploymentId($deploymentId)
    {
        $this->container['deploymentId'] = $deploymentId;
        return $this;
    }

    /**
    * Gets remark
    *  集群备注信息。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 集群备注信息。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets orderId
    *  创建集群的订单号。
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
    * @param string|null $orderId 创建集群的订单号。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets azId
    *  可用区域ID。
    *
    * @return string|null
    */
    public function getAzId()
    {
        return $this->container['azId'];
    }

    /**
    * Sets azId
    *
    * @param string|null $azId 可用区域ID。
    *
    * @return $this
    */
    public function setAzId($azId)
    {
        $this->container['azId'] = $azId;
        return $this;
    }

    /**
    * Gets azName
    *  可用区域名称。
    *
    * @return string|null
    */
    public function getAzName()
    {
        return $this->container['azName'];
    }

    /**
    * Sets azName
    *
    * @param string|null $azName 可用区域名称。
    *
    * @return $this
    */
    public function setAzName($azName)
    {
        $this->container['azName'] = $azName;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区域英文名称
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区域英文名称
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets availabilityZoneId
    *  可用区域
    *
    * @return string|null
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string|null $availabilityZoneId 可用区域
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
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
    * Gets vnc
    *  远程登录弹性云服务器的URI地址。
    *
    * @return string|null
    */
    public function getVnc()
    {
        return $this->container['vnc'];
    }

    /**
    * Sets vnc
    *
    * @param string|null $vnc 远程登录弹性云服务器的URI地址。
    *
    * @return $this
    */
    public function setVnc($vnc)
    {
        $this->container['vnc'] = $vnc;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目编号。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 项目编号。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets volumeSize
    *  磁盘存储空间。
    *
    * @return int|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int|null $volumeSize 磁盘存储空间。
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets volumeType
    *  磁盘类型。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 磁盘类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
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
    * Gets securityGroupsId
    *  安全组ID。
    *
    * @return string|null
    */
    public function getSecurityGroupsId()
    {
        return $this->container['securityGroupsId'];
    }

    /**
    * Sets securityGroupsId
    *
    * @param string|null $securityGroupsId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupsId($securityGroupsId)
    {
        $this->container['securityGroupsId'] = $securityGroupsId;
        return $this;
    }

    /**
    * Gets slaveSecurityGroupsId
    *  非Master节点的安全组id，当前一个MRS集群只会使用一个安全组，所以该字段已经废弃，从兼容性考虑，该字段会返回和securityGroupsId同样的值。
    *
    * @return string|null
    */
    public function getSlaveSecurityGroupsId()
    {
        return $this->container['slaveSecurityGroupsId'];
    }

    /**
    * Sets slaveSecurityGroupsId
    *
    * @param string|null $slaveSecurityGroupsId 非Master节点的安全组id，当前一个MRS集群只会使用一个安全组，所以该字段已经废弃，从兼容性考虑，该字段会返回和securityGroupsId同样的值。
    *
    * @return $this
    */
    public function setSlaveSecurityGroupsId($slaveSecurityGroupsId)
    {
        $this->container['slaveSecurityGroupsId'] = $slaveSecurityGroupsId;
        return $this;
    }

    /**
    * Gets bootstrapScripts
    *  配置引导操作脚本信息。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\BootstrapScript[]|null
    */
    public function getBootstrapScripts()
    {
        return $this->container['bootstrapScripts'];
    }

    /**
    * Sets bootstrapScripts
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\BootstrapScript[]|null $bootstrapScripts 配置引导操作脚本信息。
    *
    * @return $this
    */
    public function setBootstrapScripts($bootstrapScripts)
    {
        $this->container['bootstrapScripts'] = $bootstrapScripts;
        return $this;
    }

    /**
    * Gets safeMode
    *  MRS集群运行模式。 - 0：普通集群 - 1：安全集群
    *
    * @return int|null
    */
    public function getSafeMode()
    {
        return $this->container['safeMode'];
    }

    /**
    * Sets safeMode
    *
    * @param int|null $safeMode MRS集群运行模式。 - 0：普通集群 - 1：安全集群
    *
    * @return $this
    */
    public function setSafeMode($safeMode)
    {
        $this->container['safeMode'] = $safeMode;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  集群版本。
    *
    * @return string|null
    */
    public function getClusterVersion()
    {
        return $this->container['clusterVersion'];
    }

    /**
    * Sets clusterVersion
    *
    * @param string|null $clusterVersion 集群版本。
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
        return $this;
    }

    /**
    * Gets nodePublicCertName
    *  密钥文件名称。
    *
    * @return string|null
    */
    public function getNodePublicCertName()
    {
        return $this->container['nodePublicCertName'];
    }

    /**
    * Sets nodePublicCertName
    *
    * @param string|null $nodePublicCertName 密钥文件名称。
    *
    * @return $this
    */
    public function setNodePublicCertName($nodePublicCertName)
    {
        $this->container['nodePublicCertName'] = $nodePublicCertName;
        return $this;
    }

    /**
    * Gets masterNodeIp
    *  Master节点IP。
    *
    * @return string|null
    */
    public function getMasterNodeIp()
    {
        return $this->container['masterNodeIp'];
    }

    /**
    * Sets masterNodeIp
    *
    * @param string|null $masterNodeIp Master节点IP。
    *
    * @return $this
    */
    public function setMasterNodeIp($masterNodeIp)
    {
        $this->container['masterNodeIp'] = $masterNodeIp;
        return $this;
    }

    /**
    * Gets privateIpFirst
    *  首选私有IP。
    *
    * @return string|null
    */
    public function getPrivateIpFirst()
    {
        return $this->container['privateIpFirst'];
    }

    /**
    * Sets privateIpFirst
    *
    * @param string|null $privateIpFirst 首选私有IP。
    *
    * @return $this
    */
    public function setPrivateIpFirst($privateIpFirst)
    {
        $this->container['privateIpFirst'] = $privateIpFirst;
        return $this;
    }

    /**
    * Gets errorInfo
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param string|null $errorInfo 错误信息。
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets masterNodeNum
    *  集群部署的Master节点数量。
    *
    * @return string|null
    */
    public function getMasterNodeNum()
    {
        return $this->container['masterNodeNum'];
    }

    /**
    * Sets masterNodeNum
    *
    * @param string|null $masterNodeNum 集群部署的Master节点数量。
    *
    * @return $this
    */
    public function setMasterNodeNum($masterNodeNum)
    {
        $this->container['masterNodeNum'] = $masterNodeNum;
        return $this;
    }

    /**
    * Gets coreNodeNum
    *  集群部署的Core节点数量。
    *
    * @return string|null
    */
    public function getCoreNodeNum()
    {
        return $this->container['coreNodeNum'];
    }

    /**
    * Sets coreNodeNum
    *
    * @param string|null $coreNodeNum 集群部署的Core节点数量。
    *
    * @return $this
    */
    public function setCoreNodeNum($coreNodeNum)
    {
        $this->container['coreNodeNum'] = $coreNodeNum;
        return $this;
    }

    /**
    * Gets masterNodeSize
    *  Master节点的实例规格。
    *
    * @return string|null
    */
    public function getMasterNodeSize()
    {
        return $this->container['masterNodeSize'];
    }

    /**
    * Sets masterNodeSize
    *
    * @param string|null $masterNodeSize Master节点的实例规格。
    *
    * @return $this
    */
    public function setMasterNodeSize($masterNodeSize)
    {
        $this->container['masterNodeSize'] = $masterNodeSize;
        return $this;
    }

    /**
    * Gets coreNodeSize
    *  Core节点的实例规格。
    *
    * @return string|null
    */
    public function getCoreNodeSize()
    {
        return $this->container['coreNodeSize'];
    }

    /**
    * Sets coreNodeSize
    *
    * @param string|null $coreNodeSize Core节点的实例规格。
    *
    * @return $this
    */
    public function setCoreNodeSize($coreNodeSize)
    {
        $this->container['coreNodeSize'] = $coreNodeSize;
        return $this;
    }

    /**
    * Gets masterNodeProductId
    *  Master节点产品ID。
    *
    * @return string|null
    */
    public function getMasterNodeProductId()
    {
        return $this->container['masterNodeProductId'];
    }

    /**
    * Sets masterNodeProductId
    *
    * @param string|null $masterNodeProductId Master节点产品ID。
    *
    * @return $this
    */
    public function setMasterNodeProductId($masterNodeProductId)
    {
        $this->container['masterNodeProductId'] = $masterNodeProductId;
        return $this;
    }

    /**
    * Gets masterNodeSpecId
    *  Master节点规格ID。
    *
    * @return string|null
    */
    public function getMasterNodeSpecId()
    {
        return $this->container['masterNodeSpecId'];
    }

    /**
    * Sets masterNodeSpecId
    *
    * @param string|null $masterNodeSpecId Master节点规格ID。
    *
    * @return $this
    */
    public function setMasterNodeSpecId($masterNodeSpecId)
    {
        $this->container['masterNodeSpecId'] = $masterNodeSpecId;
        return $this;
    }

    /**
    * Gets coreNodeProductId
    *  Core节点产品ID。
    *
    * @return string|null
    */
    public function getCoreNodeProductId()
    {
        return $this->container['coreNodeProductId'];
    }

    /**
    * Sets coreNodeProductId
    *
    * @param string|null $coreNodeProductId Core节点产品ID。
    *
    * @return $this
    */
    public function setCoreNodeProductId($coreNodeProductId)
    {
        $this->container['coreNodeProductId'] = $coreNodeProductId;
        return $this;
    }

    /**
    * Gets coreNodeSpecId
    *  Core节点规格ID。
    *
    * @return string|null
    */
    public function getCoreNodeSpecId()
    {
        return $this->container['coreNodeSpecId'];
    }

    /**
    * Sets coreNodeSpecId
    *
    * @param string|null $coreNodeSpecId Core节点规格ID。
    *
    * @return $this
    */
    public function setCoreNodeSpecId($coreNodeSpecId)
    {
        $this->container['coreNodeSpecId'] = $coreNodeSpecId;
        return $this;
    }

    /**
    * Gets masterDataVolumeType
    *  Master节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    *
    * @return string|null
    */
    public function getMasterDataVolumeType()
    {
        return $this->container['masterDataVolumeType'];
    }

    /**
    * Sets masterDataVolumeType
    *
    * @param string|null $masterDataVolumeType Master节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    *
    * @return $this
    */
    public function setMasterDataVolumeType($masterDataVolumeType)
    {
        $this->container['masterDataVolumeType'] = $masterDataVolumeType;
        return $this;
    }

    /**
    * Gets masterDataVolumeSize
    *  Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @return int|null
    */
    public function getMasterDataVolumeSize()
    {
        return $this->container['masterDataVolumeSize'];
    }

    /**
    * Sets masterDataVolumeSize
    *
    * @param int|null $masterDataVolumeSize Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @return $this
    */
    public function setMasterDataVolumeSize($masterDataVolumeSize)
    {
        $this->container['masterDataVolumeSize'] = $masterDataVolumeSize;
        return $this;
    }

    /**
    * Gets masterDataVolumeCount
    *  Master节点数据磁盘个数。 取值只能是1
    *
    * @return int|null
    */
    public function getMasterDataVolumeCount()
    {
        return $this->container['masterDataVolumeCount'];
    }

    /**
    * Sets masterDataVolumeCount
    *
    * @param int|null $masterDataVolumeCount Master节点数据磁盘个数。 取值只能是1
    *
    * @return $this
    */
    public function setMasterDataVolumeCount($masterDataVolumeCount)
    {
        $this->container['masterDataVolumeCount'] = $masterDataVolumeCount;
        return $this;
    }

    /**
    * Gets coreDataVolumeType
    *  Core节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    *
    * @return string|null
    */
    public function getCoreDataVolumeType()
    {
        return $this->container['coreDataVolumeType'];
    }

    /**
    * Sets coreDataVolumeType
    *
    * @param string|null $coreDataVolumeType Core节点数据磁盘存储类别，目前支持SATA、SAS和SSD。
    *
    * @return $this
    */
    public function setCoreDataVolumeType($coreDataVolumeType)
    {
        $this->container['coreDataVolumeType'] = $coreDataVolumeType;
        return $this;
    }

    /**
    * Gets coreDataVolumeSize
    *  Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @return int|null
    */
    public function getCoreDataVolumeSize()
    {
        return $this->container['coreDataVolumeSize'];
    }

    /**
    * Sets coreDataVolumeSize
    *
    * @param int|null $coreDataVolumeSize Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。 取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    *
    * @return $this
    */
    public function setCoreDataVolumeSize($coreDataVolumeSize)
    {
        $this->container['coreDataVolumeSize'] = $coreDataVolumeSize;
        return $this;
    }

    /**
    * Gets coreDataVolumeCount
    *  Core节点数据磁盘个数。 取值范围：1～10
    *
    * @return int|null
    */
    public function getCoreDataVolumeCount()
    {
        return $this->container['coreDataVolumeCount'];
    }

    /**
    * Sets coreDataVolumeCount
    *
    * @param int|null $coreDataVolumeCount Core节点数据磁盘个数。 取值范围：1～10
    *
    * @return $this
    */
    public function setCoreDataVolumeCount($coreDataVolumeCount)
    {
        $this->container['coreDataVolumeCount'] = $coreDataVolumeCount;
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
    * Gets isMrsManagerFinish
    *  表示集群创建过程中，MRS Manager是否安装完成。 - true：安装完成 - false：安装未完成
    *
    * @return bool|null
    */
    public function getIsMrsManagerFinish()
    {
        return $this->container['isMrsManagerFinish'];
    }

    /**
    * Sets isMrsManagerFinish
    *
    * @param bool|null $isMrsManagerFinish 表示集群创建过程中，MRS Manager是否安装完成。 - true：安装完成 - false：安装未完成
    *
    * @return $this
    */
    public function setIsMrsManagerFinish($isMrsManagerFinish)
    {
        $this->container['isMrsManagerFinish'] = $isMrsManagerFinish;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型。
    *
    * @return int|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param int|null $clusterType 集群类型。
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets logCollection
    *  集群安装失败时，是否搜集日志。 - 0：不收集 - 1：收集
    *
    * @return int|null
    */
    public function getLogCollection()
    {
        return $this->container['logCollection'];
    }

    /**
    * Sets logCollection
    *
    * @param int|null $logCollection 集群安装失败时，是否搜集日志。 - 0：不收集 - 1：收集
    *
    * @return $this
    */
    public function setLogCollection($logCollection)
    {
        $this->container['logCollection'] = $logCollection;
        return $this;
    }

    /**
    * Gets periodType
    *  区分包周期，集群是包年还是包月。 - 0：包月 - 1：包年
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType 区分包周期，集群是包年还是包月。 - 0：包月 - 1：包年
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets scale
    *  集群节点的变更状态（扩容/缩容/变更规格）。当该参数取值为空时，表示集群节点没有进行变更操作。 取值范围： - scaling-out：扩容中 - scaling-in：缩容中 - scaling-error：处于running状态，且上一次扩容/缩容/升级规格失败的集群 - scaling-up：Master节点规格升级中 - scaling_up_first：备Master节点规格升级中 - scaled_up_first：备Master节点规格升级成功 - scaled-up-success：Master节点规格升级成功
    *
    * @return string|null
    */
    public function getScale()
    {
        return $this->container['scale'];
    }

    /**
    * Sets scale
    *
    * @param string|null $scale 集群节点的变更状态（扩容/缩容/变更规格）。当该参数取值为空时，表示集群节点没有进行变更操作。 取值范围： - scaling-out：扩容中 - scaling-in：缩容中 - scaling-error：处于running状态，且上一次扩容/缩容/升级规格失败的集群 - scaling-up：Master节点规格升级中 - scaling_up_first：备Master节点规格升级中 - scaled_up_first：备Master节点规格升级成功 - scaled-up-success：Master节点规格升级成功
    *
    * @return $this
    */
    public function setScale($scale)
    {
        $this->container['scale'] = $scale;
        return $this;
    }

    /**
    * Gets nodeGroups
    *  Master节点、Core节点和Task节点列表信息。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV10[]|null
    */
    public function getNodeGroups()
    {
        return $this->container['nodeGroups'];
    }

    /**
    * Sets nodeGroups
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV10[]|null $nodeGroups Master节点、Core节点和Task节点列表信息。
    *
    * @return $this
    */
    public function setNodeGroups($nodeGroups)
    {
        $this->container['nodeGroups'] = $nodeGroups;
        return $this;
    }

    /**
    * Gets taskNodeGroups
    *  Task节点列表信息。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV10[]|null
    */
    public function getTaskNodeGroups()
    {
        return $this->container['taskNodeGroups'];
    }

    /**
    * Sets taskNodeGroups
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV10[]|null $taskNodeGroups Task节点列表信息。
    *
    * @return $this
    */
    public function setTaskNodeGroups($taskNodeGroups)
    {
        $this->container['taskNodeGroups'] = $taskNodeGroups;
        return $this;
    }

    /**
    * Gets eipId
    *  集群弹性公网ip的唯一标识
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId 集群弹性公网ip的唯一标识
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
        return $this;
    }

    /**
    * Gets eipAddress
    *  集群弹性公网ip的IPV4地址
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
    * @param string|null $eipAddress 集群弹性公网ip的IPV4地址
    *
    * @return $this
    */
    public function setEipAddress($eipAddress)
    {
        $this->container['eipAddress'] = $eipAddress;
        return $this;
    }

    /**
    * Gets eipv6Address
    *  集群弹性公网ip的IPV6地址，IPv4时无此字段。
    *
    * @return string|null
    */
    public function getEipv6Address()
    {
        return $this->container['eipv6Address'];
    }

    /**
    * Sets eipv6Address
    *
    * @param string|null $eipv6Address 集群弹性公网ip的IPV6地址，IPv4时无此字段。
    *
    * @return $this
    */
    public function setEipv6Address($eipv6Address)
    {
        $this->container['eipv6Address'] = $eipv6Address;
        return $this;
    }

    /**
    * Gets azCategory
    *  表示当前可用区的类型。 - 0：大云主可用区 - 21：本地可用区 - 41：边缘可用区
    *
    * @return int|null
    */
    public function getAzCategory()
    {
        return $this->container['azCategory'];
    }

    /**
    * Sets azCategory
    *
    * @param int|null $azCategory 表示当前可用区的类型。 - 0：大云主可用区 - 21：本地可用区 - 41：边缘可用区
    *
    * @return $this
    */
    public function setAzCategory($azCategory)
    {
        $this->container['azCategory'] = $azCategory;
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

