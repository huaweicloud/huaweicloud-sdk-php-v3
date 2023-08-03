<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunJobFlowCommand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunJobFlowCommand';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isDecProject  说明是否为专属云的资源，默认为false。
    * clusterVersion  集群版本。例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * clusterType  集群类型，取值范围： - ANALYSIS：分析集群 - STREAMING：流式集群 - MIXED：混合集群 - CUSTOM：自定义集群，仅MRS 3.x版本支持。
    * chargeInfo  chargeInfo
    * region  集群所在区域信息，请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpcName  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 在“虚拟私有云”页面的列表中即可获取VPC名称。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * components  组件名称列表，用逗号分隔。支持的组件请参见[获取MRS集群信息](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)页面的“MRS服务支持的组件”内容。
    * externalDatasources  部署Hive和Ranger等组件时，可以关联数据连接，将元数据存储于关联的数据库
    * availabilityZone  可用分区名称，不支持多AZ集群。 可用分区信息请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自动创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中需要包含一条支持全部协议、全部端口、源地址为指定的管理面节点IP的入方向规则。 - 支持多个安全组ID，以逗号分隔。
    * autoCreateDefaultSecurityGroup  是否要创建MRS集群默认安全组，默认为false。 当指定该参数为true，则无论“security_groups_id”参数是否指定，都会为集群创建默认安全组。
    * safeMode  MRS集群运行模式。 - SIMPLE：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - KERBEROS：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找Manager的管理员分配权限。
    * managerAdminPassword  配置Manager管理员用户的密码。 - 密码长度应在8～26个字符之间。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * loginMode  节点登录方式。 - PASSWORD：密码登录，选择此项时，node_root_password不能为空。 - KEYPAIR：密钥对登录，选择此项时，node_keypair_name不能为空。
    * nodeRootPassword  配置访问集群节点的root密码。 密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * nodeKeypairName  密钥对名称。用户可以使用密钥对方式登录集群节点。
    * enterpriseProjectId  企业项目ID。 创建集群时，给集群绑定企业项目ID。 默认设置为0，表示为default企业项目。 获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * eipAddress  与MRS集群绑定的弹性公网IP，可实现使用弹性公网IP访问Manager的目的。该弹性公网IP必须已经创建且与集群在同一区域。
    * eipId  当“eip_address”配置时，该参数必须配置，用于表示绑定的弹性公网IP的ID。可通过在VPC服务的“网络控制台 > 弹性公网IP和带宽 > 弹性公网IP”页面单击待绑定的弹性公网IP，在基本信息中获取“ID”。
    * mrsEcsDefaultAgency  集群节点默认绑定的委托名称，固定为MRS_ECS_DEFAULT_AGENCY。 通过绑定委托，您可以将部分资源共享给ECS或BMS云服务来管理，例如通过配置ECS委托可自动获取AK/SK访问OBS。 MRS_ECS_DEFAULT_AGENCY委托拥有对象存储服务的OBS OperateAccess权限和在集群所在区域拥有CES FullAccess（对开启细粒度策略的用户）、CES Administrator和KMS Administrator权限。
    * templateId  当集群类型为CUSTOM时，用于指定节点部署所使用的模板。 - mgmt_control_combined_v2：管控合设模板，管理角色和控制角色共同部署在Master节点中，数据实例合设在同一节点组。该部署方式适用于100个以下的节点，可以减少成本。 - mgmt_control_separated_v2：管控分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例合设在同一节点组。该部署方式适用于100-500个节点，在高并发负载情况下表现更好。 - mgmt_control_data_separated_v2：数据分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例分设在不同节点组。该部署方式适用于500个以上的节点，可以将各组件进一步分开部署，适用于更大的集群规模。
    * tags  集群的标签信息。 同一个集群最多能使用10个tag，tag的名称（key）不能重复。
    * logCollection  集群创建失败时，是否收集失败日志。 默认设置为1，此时将创建OBS桶仅用于MRS集群创建失败时的日志收集。 枚举值： - 0：不收集 - 1：收集
    * nodeGroups  组成集群的节点组信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * logUri  集群日志转储至OBS的具体路径。 开启日志转储功能后，日志上传需要对应OBS路径的读写权限， 请配置MRS_ECS_DEFULT_AGENCY默认委托或具有对应OBS路径读写权限的自定义委托。 具体请参见[配置存算分离集群（委托方式）](https://support.huaweicloud.com/usermanual-mrs/mrs_01_0768.html)。 该参数只适用于支持“集群日志转储OBS”特性的集群版本。
    * componentConfigs  集群组件自定义配置。 该参数只适用于支持“自定义组件配置创建集群”特性的集群版本。
    * deleteWhenNoSteps  作业完成后是否自动删除集群，默认为false。
    * steps  作业列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isDecProject' => 'bool',
            'clusterVersion' => 'string',
            'clusterName' => 'string',
            'clusterType' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\Mrs\V2\Model\ChargeInfo',
            'region' => 'string',
            'vpcName' => 'string',
            'subnetId' => 'string',
            'subnetName' => 'string',
            'components' => 'string',
            'externalDatasources' => '\HuaweiCloud\SDK\Mrs\V2\Model\ClusterDataConnectorMap[]',
            'availabilityZone' => 'string',
            'securityGroupsId' => 'string',
            'autoCreateDefaultSecurityGroup' => 'bool',
            'safeMode' => 'string',
            'managerAdminPassword' => 'string',
            'loginMode' => 'string',
            'nodeRootPassword' => 'string',
            'nodeKeypairName' => 'string',
            'enterpriseProjectId' => 'string',
            'eipAddress' => 'string',
            'eipId' => 'string',
            'mrsEcsDefaultAgency' => 'string',
            'templateId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Mrs\V2\Model\Tag[]',
            'logCollection' => 'int',
            'nodeGroups' => '\HuaweiCloud\SDK\Mrs\V2\Model\NodeGroupV2[]',
            'bootstrapScripts' => '\HuaweiCloud\SDK\Mrs\V2\Model\BootstrapScript[]',
            'logUri' => 'string',
            'componentConfigs' => '\HuaweiCloud\SDK\Mrs\V2\Model\ComponentConfig[]',
            'deleteWhenNoSteps' => 'bool',
            'steps' => '\HuaweiCloud\SDK\Mrs\V2\Model\StepConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isDecProject  说明是否为专属云的资源，默认为false。
    * clusterVersion  集群版本。例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * clusterType  集群类型，取值范围： - ANALYSIS：分析集群 - STREAMING：流式集群 - MIXED：混合集群 - CUSTOM：自定义集群，仅MRS 3.x版本支持。
    * chargeInfo  chargeInfo
    * region  集群所在区域信息，请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpcName  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 在“虚拟私有云”页面的列表中即可获取VPC名称。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * components  组件名称列表，用逗号分隔。支持的组件请参见[获取MRS集群信息](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)页面的“MRS服务支持的组件”内容。
    * externalDatasources  部署Hive和Ranger等组件时，可以关联数据连接，将元数据存储于关联的数据库
    * availabilityZone  可用分区名称，不支持多AZ集群。 可用分区信息请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自动创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中需要包含一条支持全部协议、全部端口、源地址为指定的管理面节点IP的入方向规则。 - 支持多个安全组ID，以逗号分隔。
    * autoCreateDefaultSecurityGroup  是否要创建MRS集群默认安全组，默认为false。 当指定该参数为true，则无论“security_groups_id”参数是否指定，都会为集群创建默认安全组。
    * safeMode  MRS集群运行模式。 - SIMPLE：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - KERBEROS：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找Manager的管理员分配权限。
    * managerAdminPassword  配置Manager管理员用户的密码。 - 密码长度应在8～26个字符之间。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * loginMode  节点登录方式。 - PASSWORD：密码登录，选择此项时，node_root_password不能为空。 - KEYPAIR：密钥对登录，选择此项时，node_keypair_name不能为空。
    * nodeRootPassword  配置访问集群节点的root密码。 密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * nodeKeypairName  密钥对名称。用户可以使用密钥对方式登录集群节点。
    * enterpriseProjectId  企业项目ID。 创建集群时，给集群绑定企业项目ID。 默认设置为0，表示为default企业项目。 获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * eipAddress  与MRS集群绑定的弹性公网IP，可实现使用弹性公网IP访问Manager的目的。该弹性公网IP必须已经创建且与集群在同一区域。
    * eipId  当“eip_address”配置时，该参数必须配置，用于表示绑定的弹性公网IP的ID。可通过在VPC服务的“网络控制台 > 弹性公网IP和带宽 > 弹性公网IP”页面单击待绑定的弹性公网IP，在基本信息中获取“ID”。
    * mrsEcsDefaultAgency  集群节点默认绑定的委托名称，固定为MRS_ECS_DEFAULT_AGENCY。 通过绑定委托，您可以将部分资源共享给ECS或BMS云服务来管理，例如通过配置ECS委托可自动获取AK/SK访问OBS。 MRS_ECS_DEFAULT_AGENCY委托拥有对象存储服务的OBS OperateAccess权限和在集群所在区域拥有CES FullAccess（对开启细粒度策略的用户）、CES Administrator和KMS Administrator权限。
    * templateId  当集群类型为CUSTOM时，用于指定节点部署所使用的模板。 - mgmt_control_combined_v2：管控合设模板，管理角色和控制角色共同部署在Master节点中，数据实例合设在同一节点组。该部署方式适用于100个以下的节点，可以减少成本。 - mgmt_control_separated_v2：管控分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例合设在同一节点组。该部署方式适用于100-500个节点，在高并发负载情况下表现更好。 - mgmt_control_data_separated_v2：数据分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例分设在不同节点组。该部署方式适用于500个以上的节点，可以将各组件进一步分开部署，适用于更大的集群规模。
    * tags  集群的标签信息。 同一个集群最多能使用10个tag，tag的名称（key）不能重复。
    * logCollection  集群创建失败时，是否收集失败日志。 默认设置为1，此时将创建OBS桶仅用于MRS集群创建失败时的日志收集。 枚举值： - 0：不收集 - 1：收集
    * nodeGroups  组成集群的节点组信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * logUri  集群日志转储至OBS的具体路径。 开启日志转储功能后，日志上传需要对应OBS路径的读写权限， 请配置MRS_ECS_DEFULT_AGENCY默认委托或具有对应OBS路径读写权限的自定义委托。 具体请参见[配置存算分离集群（委托方式）](https://support.huaweicloud.com/usermanual-mrs/mrs_01_0768.html)。 该参数只适用于支持“集群日志转储OBS”特性的集群版本。
    * componentConfigs  集群组件自定义配置。 该参数只适用于支持“自定义组件配置创建集群”特性的集群版本。
    * deleteWhenNoSteps  作业完成后是否自动删除集群，默认为false。
    * steps  作业列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isDecProject' => null,
        'clusterVersion' => null,
        'clusterName' => null,
        'clusterType' => null,
        'chargeInfo' => null,
        'region' => null,
        'vpcName' => null,
        'subnetId' => null,
        'subnetName' => null,
        'components' => null,
        'externalDatasources' => null,
        'availabilityZone' => null,
        'securityGroupsId' => null,
        'autoCreateDefaultSecurityGroup' => null,
        'safeMode' => null,
        'managerAdminPassword' => null,
        'loginMode' => null,
        'nodeRootPassword' => null,
        'nodeKeypairName' => null,
        'enterpriseProjectId' => null,
        'eipAddress' => null,
        'eipId' => null,
        'mrsEcsDefaultAgency' => null,
        'templateId' => null,
        'tags' => null,
        'logCollection' => 'int32',
        'nodeGroups' => null,
        'bootstrapScripts' => null,
        'logUri' => null,
        'componentConfigs' => null,
        'deleteWhenNoSteps' => null,
        'steps' => null
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
    * isDecProject  说明是否为专属云的资源，默认为false。
    * clusterVersion  集群版本。例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * clusterType  集群类型，取值范围： - ANALYSIS：分析集群 - STREAMING：流式集群 - MIXED：混合集群 - CUSTOM：自定义集群，仅MRS 3.x版本支持。
    * chargeInfo  chargeInfo
    * region  集群所在区域信息，请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpcName  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 在“虚拟私有云”页面的列表中即可获取VPC名称。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * components  组件名称列表，用逗号分隔。支持的组件请参见[获取MRS集群信息](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)页面的“MRS服务支持的组件”内容。
    * externalDatasources  部署Hive和Ranger等组件时，可以关联数据连接，将元数据存储于关联的数据库
    * availabilityZone  可用分区名称，不支持多AZ集群。 可用分区信息请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自动创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中需要包含一条支持全部协议、全部端口、源地址为指定的管理面节点IP的入方向规则。 - 支持多个安全组ID，以逗号分隔。
    * autoCreateDefaultSecurityGroup  是否要创建MRS集群默认安全组，默认为false。 当指定该参数为true，则无论“security_groups_id”参数是否指定，都会为集群创建默认安全组。
    * safeMode  MRS集群运行模式。 - SIMPLE：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - KERBEROS：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找Manager的管理员分配权限。
    * managerAdminPassword  配置Manager管理员用户的密码。 - 密码长度应在8～26个字符之间。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * loginMode  节点登录方式。 - PASSWORD：密码登录，选择此项时，node_root_password不能为空。 - KEYPAIR：密钥对登录，选择此项时，node_keypair_name不能为空。
    * nodeRootPassword  配置访问集群节点的root密码。 密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * nodeKeypairName  密钥对名称。用户可以使用密钥对方式登录集群节点。
    * enterpriseProjectId  企业项目ID。 创建集群时，给集群绑定企业项目ID。 默认设置为0，表示为default企业项目。 获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * eipAddress  与MRS集群绑定的弹性公网IP，可实现使用弹性公网IP访问Manager的目的。该弹性公网IP必须已经创建且与集群在同一区域。
    * eipId  当“eip_address”配置时，该参数必须配置，用于表示绑定的弹性公网IP的ID。可通过在VPC服务的“网络控制台 > 弹性公网IP和带宽 > 弹性公网IP”页面单击待绑定的弹性公网IP，在基本信息中获取“ID”。
    * mrsEcsDefaultAgency  集群节点默认绑定的委托名称，固定为MRS_ECS_DEFAULT_AGENCY。 通过绑定委托，您可以将部分资源共享给ECS或BMS云服务来管理，例如通过配置ECS委托可自动获取AK/SK访问OBS。 MRS_ECS_DEFAULT_AGENCY委托拥有对象存储服务的OBS OperateAccess权限和在集群所在区域拥有CES FullAccess（对开启细粒度策略的用户）、CES Administrator和KMS Administrator权限。
    * templateId  当集群类型为CUSTOM时，用于指定节点部署所使用的模板。 - mgmt_control_combined_v2：管控合设模板，管理角色和控制角色共同部署在Master节点中，数据实例合设在同一节点组。该部署方式适用于100个以下的节点，可以减少成本。 - mgmt_control_separated_v2：管控分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例合设在同一节点组。该部署方式适用于100-500个节点，在高并发负载情况下表现更好。 - mgmt_control_data_separated_v2：数据分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例分设在不同节点组。该部署方式适用于500个以上的节点，可以将各组件进一步分开部署，适用于更大的集群规模。
    * tags  集群的标签信息。 同一个集群最多能使用10个tag，tag的名称（key）不能重复。
    * logCollection  集群创建失败时，是否收集失败日志。 默认设置为1，此时将创建OBS桶仅用于MRS集群创建失败时的日志收集。 枚举值： - 0：不收集 - 1：收集
    * nodeGroups  组成集群的节点组信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * logUri  集群日志转储至OBS的具体路径。 开启日志转储功能后，日志上传需要对应OBS路径的读写权限， 请配置MRS_ECS_DEFULT_AGENCY默认委托或具有对应OBS路径读写权限的自定义委托。 具体请参见[配置存算分离集群（委托方式）](https://support.huaweicloud.com/usermanual-mrs/mrs_01_0768.html)。 该参数只适用于支持“集群日志转储OBS”特性的集群版本。
    * componentConfigs  集群组件自定义配置。 该参数只适用于支持“自定义组件配置创建集群”特性的集群版本。
    * deleteWhenNoSteps  作业完成后是否自动删除集群，默认为false。
    * steps  作业列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isDecProject' => 'is_dec_project',
            'clusterVersion' => 'cluster_version',
            'clusterName' => 'cluster_name',
            'clusterType' => 'cluster_type',
            'chargeInfo' => 'charge_info',
            'region' => 'region',
            'vpcName' => 'vpc_name',
            'subnetId' => 'subnet_id',
            'subnetName' => 'subnet_name',
            'components' => 'components',
            'externalDatasources' => 'external_datasources',
            'availabilityZone' => 'availability_zone',
            'securityGroupsId' => 'security_groups_id',
            'autoCreateDefaultSecurityGroup' => 'auto_create_default_security_group',
            'safeMode' => 'safe_mode',
            'managerAdminPassword' => 'manager_admin_password',
            'loginMode' => 'login_mode',
            'nodeRootPassword' => 'node_root_password',
            'nodeKeypairName' => 'node_keypair_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'eipAddress' => 'eip_address',
            'eipId' => 'eip_id',
            'mrsEcsDefaultAgency' => 'mrs_ecs_default_agency',
            'templateId' => 'template_id',
            'tags' => 'tags',
            'logCollection' => 'log_collection',
            'nodeGroups' => 'node_groups',
            'bootstrapScripts' => 'bootstrap_scripts',
            'logUri' => 'log_uri',
            'componentConfigs' => 'component_configs',
            'deleteWhenNoSteps' => 'delete_when_no_steps',
            'steps' => 'steps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isDecProject  说明是否为专属云的资源，默认为false。
    * clusterVersion  集群版本。例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * clusterType  集群类型，取值范围： - ANALYSIS：分析集群 - STREAMING：流式集群 - MIXED：混合集群 - CUSTOM：自定义集群，仅MRS 3.x版本支持。
    * chargeInfo  chargeInfo
    * region  集群所在区域信息，请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpcName  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 在“虚拟私有云”页面的列表中即可获取VPC名称。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * components  组件名称列表，用逗号分隔。支持的组件请参见[获取MRS集群信息](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)页面的“MRS服务支持的组件”内容。
    * externalDatasources  部署Hive和Ranger等组件时，可以关联数据连接，将元数据存储于关联的数据库
    * availabilityZone  可用分区名称，不支持多AZ集群。 可用分区信息请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自动创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中需要包含一条支持全部协议、全部端口、源地址为指定的管理面节点IP的入方向规则。 - 支持多个安全组ID，以逗号分隔。
    * autoCreateDefaultSecurityGroup  是否要创建MRS集群默认安全组，默认为false。 当指定该参数为true，则无论“security_groups_id”参数是否指定，都会为集群创建默认安全组。
    * safeMode  MRS集群运行模式。 - SIMPLE：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - KERBEROS：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找Manager的管理员分配权限。
    * managerAdminPassword  配置Manager管理员用户的密码。 - 密码长度应在8～26个字符之间。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * loginMode  节点登录方式。 - PASSWORD：密码登录，选择此项时，node_root_password不能为空。 - KEYPAIR：密钥对登录，选择此项时，node_keypair_name不能为空。
    * nodeRootPassword  配置访问集群节点的root密码。 密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * nodeKeypairName  密钥对名称。用户可以使用密钥对方式登录集群节点。
    * enterpriseProjectId  企业项目ID。 创建集群时，给集群绑定企业项目ID。 默认设置为0，表示为default企业项目。 获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * eipAddress  与MRS集群绑定的弹性公网IP，可实现使用弹性公网IP访问Manager的目的。该弹性公网IP必须已经创建且与集群在同一区域。
    * eipId  当“eip_address”配置时，该参数必须配置，用于表示绑定的弹性公网IP的ID。可通过在VPC服务的“网络控制台 > 弹性公网IP和带宽 > 弹性公网IP”页面单击待绑定的弹性公网IP，在基本信息中获取“ID”。
    * mrsEcsDefaultAgency  集群节点默认绑定的委托名称，固定为MRS_ECS_DEFAULT_AGENCY。 通过绑定委托，您可以将部分资源共享给ECS或BMS云服务来管理，例如通过配置ECS委托可自动获取AK/SK访问OBS。 MRS_ECS_DEFAULT_AGENCY委托拥有对象存储服务的OBS OperateAccess权限和在集群所在区域拥有CES FullAccess（对开启细粒度策略的用户）、CES Administrator和KMS Administrator权限。
    * templateId  当集群类型为CUSTOM时，用于指定节点部署所使用的模板。 - mgmt_control_combined_v2：管控合设模板，管理角色和控制角色共同部署在Master节点中，数据实例合设在同一节点组。该部署方式适用于100个以下的节点，可以减少成本。 - mgmt_control_separated_v2：管控分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例合设在同一节点组。该部署方式适用于100-500个节点，在高并发负载情况下表现更好。 - mgmt_control_data_separated_v2：数据分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例分设在不同节点组。该部署方式适用于500个以上的节点，可以将各组件进一步分开部署，适用于更大的集群规模。
    * tags  集群的标签信息。 同一个集群最多能使用10个tag，tag的名称（key）不能重复。
    * logCollection  集群创建失败时，是否收集失败日志。 默认设置为1，此时将创建OBS桶仅用于MRS集群创建失败时的日志收集。 枚举值： - 0：不收集 - 1：收集
    * nodeGroups  组成集群的节点组信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * logUri  集群日志转储至OBS的具体路径。 开启日志转储功能后，日志上传需要对应OBS路径的读写权限， 请配置MRS_ECS_DEFULT_AGENCY默认委托或具有对应OBS路径读写权限的自定义委托。 具体请参见[配置存算分离集群（委托方式）](https://support.huaweicloud.com/usermanual-mrs/mrs_01_0768.html)。 该参数只适用于支持“集群日志转储OBS”特性的集群版本。
    * componentConfigs  集群组件自定义配置。 该参数只适用于支持“自定义组件配置创建集群”特性的集群版本。
    * deleteWhenNoSteps  作业完成后是否自动删除集群，默认为false。
    * steps  作业列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'isDecProject' => 'setIsDecProject',
            'clusterVersion' => 'setClusterVersion',
            'clusterName' => 'setClusterName',
            'clusterType' => 'setClusterType',
            'chargeInfo' => 'setChargeInfo',
            'region' => 'setRegion',
            'vpcName' => 'setVpcName',
            'subnetId' => 'setSubnetId',
            'subnetName' => 'setSubnetName',
            'components' => 'setComponents',
            'externalDatasources' => 'setExternalDatasources',
            'availabilityZone' => 'setAvailabilityZone',
            'securityGroupsId' => 'setSecurityGroupsId',
            'autoCreateDefaultSecurityGroup' => 'setAutoCreateDefaultSecurityGroup',
            'safeMode' => 'setSafeMode',
            'managerAdminPassword' => 'setManagerAdminPassword',
            'loginMode' => 'setLoginMode',
            'nodeRootPassword' => 'setNodeRootPassword',
            'nodeKeypairName' => 'setNodeKeypairName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'eipAddress' => 'setEipAddress',
            'eipId' => 'setEipId',
            'mrsEcsDefaultAgency' => 'setMrsEcsDefaultAgency',
            'templateId' => 'setTemplateId',
            'tags' => 'setTags',
            'logCollection' => 'setLogCollection',
            'nodeGroups' => 'setNodeGroups',
            'bootstrapScripts' => 'setBootstrapScripts',
            'logUri' => 'setLogUri',
            'componentConfigs' => 'setComponentConfigs',
            'deleteWhenNoSteps' => 'setDeleteWhenNoSteps',
            'steps' => 'setSteps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isDecProject  说明是否为专属云的资源，默认为false。
    * clusterVersion  集群版本。例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * clusterType  集群类型，取值范围： - ANALYSIS：分析集群 - STREAMING：流式集群 - MIXED：混合集群 - CUSTOM：自定义集群，仅MRS 3.x版本支持。
    * chargeInfo  chargeInfo
    * region  集群所在区域信息，请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpcName  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 在“虚拟私有云”页面的列表中即可获取VPC名称。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * components  组件名称列表，用逗号分隔。支持的组件请参见[获取MRS集群信息](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)页面的“MRS服务支持的组件”内容。
    * externalDatasources  部署Hive和Ranger等组件时，可以关联数据连接，将元数据存储于关联的数据库
    * availabilityZone  可用分区名称，不支持多AZ集群。 可用分区信息请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自动创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中需要包含一条支持全部协议、全部端口、源地址为指定的管理面节点IP的入方向规则。 - 支持多个安全组ID，以逗号分隔。
    * autoCreateDefaultSecurityGroup  是否要创建MRS集群默认安全组，默认为false。 当指定该参数为true，则无论“security_groups_id”参数是否指定，都会为集群创建默认安全组。
    * safeMode  MRS集群运行模式。 - SIMPLE：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - KERBEROS：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找Manager的管理员分配权限。
    * managerAdminPassword  配置Manager管理员用户的密码。 - 密码长度应在8～26个字符之间。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * loginMode  节点登录方式。 - PASSWORD：密码登录，选择此项时，node_root_password不能为空。 - KEYPAIR：密钥对登录，选择此项时，node_keypair_name不能为空。
    * nodeRootPassword  配置访问集群节点的root密码。 密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * nodeKeypairName  密钥对名称。用户可以使用密钥对方式登录集群节点。
    * enterpriseProjectId  企业项目ID。 创建集群时，给集群绑定企业项目ID。 默认设置为0，表示为default企业项目。 获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * eipAddress  与MRS集群绑定的弹性公网IP，可实现使用弹性公网IP访问Manager的目的。该弹性公网IP必须已经创建且与集群在同一区域。
    * eipId  当“eip_address”配置时，该参数必须配置，用于表示绑定的弹性公网IP的ID。可通过在VPC服务的“网络控制台 > 弹性公网IP和带宽 > 弹性公网IP”页面单击待绑定的弹性公网IP，在基本信息中获取“ID”。
    * mrsEcsDefaultAgency  集群节点默认绑定的委托名称，固定为MRS_ECS_DEFAULT_AGENCY。 通过绑定委托，您可以将部分资源共享给ECS或BMS云服务来管理，例如通过配置ECS委托可自动获取AK/SK访问OBS。 MRS_ECS_DEFAULT_AGENCY委托拥有对象存储服务的OBS OperateAccess权限和在集群所在区域拥有CES FullAccess（对开启细粒度策略的用户）、CES Administrator和KMS Administrator权限。
    * templateId  当集群类型为CUSTOM时，用于指定节点部署所使用的模板。 - mgmt_control_combined_v2：管控合设模板，管理角色和控制角色共同部署在Master节点中，数据实例合设在同一节点组。该部署方式适用于100个以下的节点，可以减少成本。 - mgmt_control_separated_v2：管控分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例合设在同一节点组。该部署方式适用于100-500个节点，在高并发负载情况下表现更好。 - mgmt_control_data_separated_v2：数据分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例分设在不同节点组。该部署方式适用于500个以上的节点，可以将各组件进一步分开部署，适用于更大的集群规模。
    * tags  集群的标签信息。 同一个集群最多能使用10个tag，tag的名称（key）不能重复。
    * logCollection  集群创建失败时，是否收集失败日志。 默认设置为1，此时将创建OBS桶仅用于MRS集群创建失败时的日志收集。 枚举值： - 0：不收集 - 1：收集
    * nodeGroups  组成集群的节点组信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * logUri  集群日志转储至OBS的具体路径。 开启日志转储功能后，日志上传需要对应OBS路径的读写权限， 请配置MRS_ECS_DEFULT_AGENCY默认委托或具有对应OBS路径读写权限的自定义委托。 具体请参见[配置存算分离集群（委托方式）](https://support.huaweicloud.com/usermanual-mrs/mrs_01_0768.html)。 该参数只适用于支持“集群日志转储OBS”特性的集群版本。
    * componentConfigs  集群组件自定义配置。 该参数只适用于支持“自定义组件配置创建集群”特性的集群版本。
    * deleteWhenNoSteps  作业完成后是否自动删除集群，默认为false。
    * steps  作业列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'isDecProject' => 'getIsDecProject',
            'clusterVersion' => 'getClusterVersion',
            'clusterName' => 'getClusterName',
            'clusterType' => 'getClusterType',
            'chargeInfo' => 'getChargeInfo',
            'region' => 'getRegion',
            'vpcName' => 'getVpcName',
            'subnetId' => 'getSubnetId',
            'subnetName' => 'getSubnetName',
            'components' => 'getComponents',
            'externalDatasources' => 'getExternalDatasources',
            'availabilityZone' => 'getAvailabilityZone',
            'securityGroupsId' => 'getSecurityGroupsId',
            'autoCreateDefaultSecurityGroup' => 'getAutoCreateDefaultSecurityGroup',
            'safeMode' => 'getSafeMode',
            'managerAdminPassword' => 'getManagerAdminPassword',
            'loginMode' => 'getLoginMode',
            'nodeRootPassword' => 'getNodeRootPassword',
            'nodeKeypairName' => 'getNodeKeypairName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'eipAddress' => 'getEipAddress',
            'eipId' => 'getEipId',
            'mrsEcsDefaultAgency' => 'getMrsEcsDefaultAgency',
            'templateId' => 'getTemplateId',
            'tags' => 'getTags',
            'logCollection' => 'getLogCollection',
            'nodeGroups' => 'getNodeGroups',
            'bootstrapScripts' => 'getBootstrapScripts',
            'logUri' => 'getLogUri',
            'componentConfigs' => 'getComponentConfigs',
            'deleteWhenNoSteps' => 'getDeleteWhenNoSteps',
            'steps' => 'getSteps'
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
    const LOG_COLLECTION_0 = 0;
    const LOG_COLLECTION_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogCollectionAllowableValues()
    {
        return [
            self::LOG_COLLECTION_0,
            self::LOG_COLLECTION_1,
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
        $this->container['isDecProject'] = isset($data['isDecProject']) ? $data['isDecProject'] : null;
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
        $this->container['externalDatasources'] = isset($data['externalDatasources']) ? $data['externalDatasources'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['securityGroupsId'] = isset($data['securityGroupsId']) ? $data['securityGroupsId'] : null;
        $this->container['autoCreateDefaultSecurityGroup'] = isset($data['autoCreateDefaultSecurityGroup']) ? $data['autoCreateDefaultSecurityGroup'] : null;
        $this->container['safeMode'] = isset($data['safeMode']) ? $data['safeMode'] : null;
        $this->container['managerAdminPassword'] = isset($data['managerAdminPassword']) ? $data['managerAdminPassword'] : null;
        $this->container['loginMode'] = isset($data['loginMode']) ? $data['loginMode'] : null;
        $this->container['nodeRootPassword'] = isset($data['nodeRootPassword']) ? $data['nodeRootPassword'] : null;
        $this->container['nodeKeypairName'] = isset($data['nodeKeypairName']) ? $data['nodeKeypairName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['eipAddress'] = isset($data['eipAddress']) ? $data['eipAddress'] : null;
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
        $this->container['mrsEcsDefaultAgency'] = isset($data['mrsEcsDefaultAgency']) ? $data['mrsEcsDefaultAgency'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['logCollection'] = isset($data['logCollection']) ? $data['logCollection'] : null;
        $this->container['nodeGroups'] = isset($data['nodeGroups']) ? $data['nodeGroups'] : null;
        $this->container['bootstrapScripts'] = isset($data['bootstrapScripts']) ? $data['bootstrapScripts'] : null;
        $this->container['logUri'] = isset($data['logUri']) ? $data['logUri'] : null;
        $this->container['componentConfigs'] = isset($data['componentConfigs']) ? $data['componentConfigs'] : null;
        $this->container['deleteWhenNoSteps'] = isset($data['deleteWhenNoSteps']) ? $data['deleteWhenNoSteps'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterVersion'] === null) {
            $invalidProperties[] = "'clusterVersion' can't be null";
        }
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
            if ((mb_strlen($this->container['clusterName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['clusterType'] === null) {
            $invalidProperties[] = "'clusterType' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['vpcName'] === null) {
            $invalidProperties[] = "'vpcName' can't be null";
        }
        if ($this->container['subnetName'] === null) {
            $invalidProperties[] = "'subnetName' can't be null";
        }
        if ($this->container['components'] === null) {
            $invalidProperties[] = "'components' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['safeMode'] === null) {
            $invalidProperties[] = "'safeMode' can't be null";
        }
        if ($this->container['managerAdminPassword'] === null) {
            $invalidProperties[] = "'managerAdminPassword' can't be null";
        }
        if ($this->container['loginMode'] === null) {
            $invalidProperties[] = "'loginMode' can't be null";
        }
            $allowedValues = $this->getLogCollectionAllowableValues();
                if (!is_null($this->container['logCollection']) && !in_array($this->container['logCollection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logCollection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['nodeGroups'] === null) {
            $invalidProperties[] = "'nodeGroups' can't be null";
        }
        if ($this->container['steps'] === null) {
            $invalidProperties[] = "'steps' can't be null";
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
    * Gets isDecProject
    *  说明是否为专属云的资源，默认为false。
    *
    * @return bool|null
    */
    public function getIsDecProject()
    {
        return $this->container['isDecProject'];
    }

    /**
    * Sets isDecProject
    *
    * @param bool|null $isDecProject 说明是否为专属云的资源，默认为false。
    *
    * @return $this
    */
    public function setIsDecProject($isDecProject)
    {
        $this->container['isDecProject'] = $isDecProject;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  集群版本。例如：MRS 3.1.0。
    *
    * @return string
    */
    public function getClusterVersion()
    {
        return $this->container['clusterVersion'];
    }

    /**
    * Sets clusterVersion
    *
    * @param string $clusterVersion 集群版本。例如：MRS 3.1.0。
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称，不允许相同。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名称，不允许相同。  只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型，取值范围： - ANALYSIS：分析集群 - STREAMING：流式集群 - MIXED：混合集群 - CUSTOM：自定义集群，仅MRS 3.x版本支持。
    *
    * @return string
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string $clusterType 集群类型，取值范围： - ANALYSIS：分析集群 - STREAMING：流式集群 - MIXED：混合集群 - CUSTOM：自定义集群，仅MRS 3.x版本支持。
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\ChargeInfo|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\ChargeInfo|null $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
        return $this;
    }

    /**
    * Gets region
    *  集群所在区域信息，请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
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
    * @param string $region 集群所在区域信息，请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets vpcName
    *  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 在“虚拟私有云”页面的列表中即可获取VPC名称。
    *
    * @return string
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string $vpcName 子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 在“虚拟私有云”页面的列表中即可获取VPC名称。
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID。通过VPC管理控制台获取子网ID： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
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
    * @param string|null $subnetId 子网ID。通过VPC管理控制台获取子网ID： 1) 登录VPC管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
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
    *  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    *
    * @return string
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string $subnetName 子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。 “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets components
    *  组件名称列表，用逗号分隔。支持的组件请参见[获取MRS集群信息](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)页面的“MRS服务支持的组件”内容。
    *
    * @return string
    */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
    * Sets components
    *
    * @param string $components 组件名称列表，用逗号分隔。支持的组件请参见[获取MRS集群信息](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)页面的“MRS服务支持的组件”内容。
    *
    * @return $this
    */
    public function setComponents($components)
    {
        $this->container['components'] = $components;
        return $this;
    }

    /**
    * Gets externalDatasources
    *  部署Hive和Ranger等组件时，可以关联数据连接，将元数据存储于关联的数据库
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\ClusterDataConnectorMap[]|null
    */
    public function getExternalDatasources()
    {
        return $this->container['externalDatasources'];
    }

    /**
    * Sets externalDatasources
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\ClusterDataConnectorMap[]|null $externalDatasources 部署Hive和Ranger等组件时，可以关联数据连接，将元数据存储于关联的数据库
    *
    * @return $this
    */
    public function setExternalDatasources($externalDatasources)
    {
        $this->container['externalDatasources'] = $externalDatasources;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用分区名称，不支持多AZ集群。 可用分区信息请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
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
    * @param string $availabilityZone 可用分区名称，不支持多AZ集群。 可用分区信息请参见[终端节点](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets securityGroupsId
    *  集群安全组的ID。 - 当该ID为空时MRS后台会自动创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中需要包含一条支持全部协议、全部端口、源地址为指定的管理面节点IP的入方向规则。 - 支持多个安全组ID，以逗号分隔。
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
    * @param string|null $securityGroupsId 集群安全组的ID。 - 当该ID为空时MRS后台会自动创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中需要包含一条支持全部协议、全部端口、源地址为指定的管理面节点IP的入方向规则。 - 支持多个安全组ID，以逗号分隔。
    *
    * @return $this
    */
    public function setSecurityGroupsId($securityGroupsId)
    {
        $this->container['securityGroupsId'] = $securityGroupsId;
        return $this;
    }

    /**
    * Gets autoCreateDefaultSecurityGroup
    *  是否要创建MRS集群默认安全组，默认为false。 当指定该参数为true，则无论“security_groups_id”参数是否指定，都会为集群创建默认安全组。
    *
    * @return bool|null
    */
    public function getAutoCreateDefaultSecurityGroup()
    {
        return $this->container['autoCreateDefaultSecurityGroup'];
    }

    /**
    * Sets autoCreateDefaultSecurityGroup
    *
    * @param bool|null $autoCreateDefaultSecurityGroup 是否要创建MRS集群默认安全组，默认为false。 当指定该参数为true，则无论“security_groups_id”参数是否指定，都会为集群创建默认安全组。
    *
    * @return $this
    */
    public function setAutoCreateDefaultSecurityGroup($autoCreateDefaultSecurityGroup)
    {
        $this->container['autoCreateDefaultSecurityGroup'] = $autoCreateDefaultSecurityGroup;
        return $this;
    }

    /**
    * Gets safeMode
    *  MRS集群运行模式。 - SIMPLE：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - KERBEROS：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找Manager的管理员分配权限。
    *
    * @return string
    */
    public function getSafeMode()
    {
        return $this->container['safeMode'];
    }

    /**
    * Sets safeMode
    *
    * @param string $safeMode MRS集群运行模式。 - SIMPLE：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - KERBEROS：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找Manager的管理员分配权限。
    *
    * @return $this
    */
    public function setSafeMode($safeMode)
    {
        $this->container['safeMode'] = $safeMode;
        return $this;
    }

    /**
    * Gets managerAdminPassword
    *  配置Manager管理员用户的密码。 - 密码长度应在8～26个字符之间。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    *
    * @return string
    */
    public function getManagerAdminPassword()
    {
        return $this->container['managerAdminPassword'];
    }

    /**
    * Sets managerAdminPassword
    *
    * @param string $managerAdminPassword 配置Manager管理员用户的密码。 - 密码长度应在8～26个字符之间。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    *
    * @return $this
    */
    public function setManagerAdminPassword($managerAdminPassword)
    {
        $this->container['managerAdminPassword'] = $managerAdminPassword;
        return $this;
    }

    /**
    * Gets loginMode
    *  节点登录方式。 - PASSWORD：密码登录，选择此项时，node_root_password不能为空。 - KEYPAIR：密钥对登录，选择此项时，node_keypair_name不能为空。
    *
    * @return string
    */
    public function getLoginMode()
    {
        return $this->container['loginMode'];
    }

    /**
    * Sets loginMode
    *
    * @param string $loginMode 节点登录方式。 - PASSWORD：密码登录，选择此项时，node_root_password不能为空。 - KEYPAIR：密钥对登录，选择此项时，node_keypair_name不能为空。
    *
    * @return $this
    */
    public function setLoginMode($loginMode)
    {
        $this->container['loginMode'] = $loginMode;
        return $this;
    }

    /**
    * Gets nodeRootPassword
    *  配置访问集群节点的root密码。 密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    *
    * @return string|null
    */
    public function getNodeRootPassword()
    {
        return $this->container['nodeRootPassword'];
    }

    /**
    * Sets nodeRootPassword
    *
    * @param string|null $nodeRootPassword 配置访问集群节点的root密码。 密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含四种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    *
    * @return $this
    */
    public function setNodeRootPassword($nodeRootPassword)
    {
        $this->container['nodeRootPassword'] = $nodeRootPassword;
        return $this;
    }

    /**
    * Gets nodeKeypairName
    *  密钥对名称。用户可以使用密钥对方式登录集群节点。
    *
    * @return string|null
    */
    public function getNodeKeypairName()
    {
        return $this->container['nodeKeypairName'];
    }

    /**
    * Sets nodeKeypairName
    *
    * @param string|null $nodeKeypairName 密钥对名称。用户可以使用密钥对方式登录集群节点。
    *
    * @return $this
    */
    public function setNodeKeypairName($nodeKeypairName)
    {
        $this->container['nodeKeypairName'] = $nodeKeypairName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 创建集群时，给集群绑定企业项目ID。 默认设置为0，表示为default企业项目。 获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
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
    * @param string|null $enterpriseProjectId 企业项目ID。 创建集群时，给集群绑定企业项目ID。 默认设置为0，表示为default企业项目。 获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
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
    *  与MRS集群绑定的弹性公网IP，可实现使用弹性公网IP访问Manager的目的。该弹性公网IP必须已经创建且与集群在同一区域。
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
    * @param string|null $eipAddress 与MRS集群绑定的弹性公网IP，可实现使用弹性公网IP访问Manager的目的。该弹性公网IP必须已经创建且与集群在同一区域。
    *
    * @return $this
    */
    public function setEipAddress($eipAddress)
    {
        $this->container['eipAddress'] = $eipAddress;
        return $this;
    }

    /**
    * Gets eipId
    *  当“eip_address”配置时，该参数必须配置，用于表示绑定的弹性公网IP的ID。可通过在VPC服务的“网络控制台 > 弹性公网IP和带宽 > 弹性公网IP”页面单击待绑定的弹性公网IP，在基本信息中获取“ID”。
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
    * @param string|null $eipId 当“eip_address”配置时，该参数必须配置，用于表示绑定的弹性公网IP的ID。可通过在VPC服务的“网络控制台 > 弹性公网IP和带宽 > 弹性公网IP”页面单击待绑定的弹性公网IP，在基本信息中获取“ID”。
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
        return $this;
    }

    /**
    * Gets mrsEcsDefaultAgency
    *  集群节点默认绑定的委托名称，固定为MRS_ECS_DEFAULT_AGENCY。 通过绑定委托，您可以将部分资源共享给ECS或BMS云服务来管理，例如通过配置ECS委托可自动获取AK/SK访问OBS。 MRS_ECS_DEFAULT_AGENCY委托拥有对象存储服务的OBS OperateAccess权限和在集群所在区域拥有CES FullAccess（对开启细粒度策略的用户）、CES Administrator和KMS Administrator权限。
    *
    * @return string|null
    */
    public function getMrsEcsDefaultAgency()
    {
        return $this->container['mrsEcsDefaultAgency'];
    }

    /**
    * Sets mrsEcsDefaultAgency
    *
    * @param string|null $mrsEcsDefaultAgency 集群节点默认绑定的委托名称，固定为MRS_ECS_DEFAULT_AGENCY。 通过绑定委托，您可以将部分资源共享给ECS或BMS云服务来管理，例如通过配置ECS委托可自动获取AK/SK访问OBS。 MRS_ECS_DEFAULT_AGENCY委托拥有对象存储服务的OBS OperateAccess权限和在集群所在区域拥有CES FullAccess（对开启细粒度策略的用户）、CES Administrator和KMS Administrator权限。
    *
    * @return $this
    */
    public function setMrsEcsDefaultAgency($mrsEcsDefaultAgency)
    {
        $this->container['mrsEcsDefaultAgency'] = $mrsEcsDefaultAgency;
        return $this;
    }

    /**
    * Gets templateId
    *  当集群类型为CUSTOM时，用于指定节点部署所使用的模板。 - mgmt_control_combined_v2：管控合设模板，管理角色和控制角色共同部署在Master节点中，数据实例合设在同一节点组。该部署方式适用于100个以下的节点，可以减少成本。 - mgmt_control_separated_v2：管控分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例合设在同一节点组。该部署方式适用于100-500个节点，在高并发负载情况下表现更好。 - mgmt_control_data_separated_v2：数据分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例分设在不同节点组。该部署方式适用于500个以上的节点，可以将各组件进一步分开部署，适用于更大的集群规模。
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 当集群类型为CUSTOM时，用于指定节点部署所使用的模板。 - mgmt_control_combined_v2：管控合设模板，管理角色和控制角色共同部署在Master节点中，数据实例合设在同一节点组。该部署方式适用于100个以下的节点，可以减少成本。 - mgmt_control_separated_v2：管控分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例合设在同一节点组。该部署方式适用于100-500个节点，在高并发负载情况下表现更好。 - mgmt_control_data_separated_v2：数据分设模板，管理角色和控制角色分别部署在不同的Master节点中，数据实例分设在不同节点组。该部署方式适用于500个以上的节点，可以将各组件进一步分开部署，适用于更大的集群规模。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets tags
    *  集群的标签信息。 同一个集群最多能使用10个tag，tag的名称（key）不能重复。
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\Tag[]|null $tags 集群的标签信息。 同一个集群最多能使用10个tag，tag的名称（key）不能重复。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets logCollection
    *  集群创建失败时，是否收集失败日志。 默认设置为1，此时将创建OBS桶仅用于MRS集群创建失败时的日志收集。 枚举值： - 0：不收集 - 1：收集
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
    * @param int|null $logCollection 集群创建失败时，是否收集失败日志。 默认设置为1，此时将创建OBS桶仅用于MRS集群创建失败时的日志收集。 枚举值： - 0：不收集 - 1：收集
    *
    * @return $this
    */
    public function setLogCollection($logCollection)
    {
        $this->container['logCollection'] = $logCollection;
        return $this;
    }

    /**
    * Gets nodeGroups
    *  组成集群的节点组信息。
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\NodeGroupV2[]
    */
    public function getNodeGroups()
    {
        return $this->container['nodeGroups'];
    }

    /**
    * Sets nodeGroups
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\NodeGroupV2[] $nodeGroups 组成集群的节点组信息。
    *
    * @return $this
    */
    public function setNodeGroups($nodeGroups)
    {
        $this->container['nodeGroups'] = $nodeGroups;
        return $this;
    }

    /**
    * Gets bootstrapScripts
    *  配置引导操作脚本信息。
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\BootstrapScript[]|null
    */
    public function getBootstrapScripts()
    {
        return $this->container['bootstrapScripts'];
    }

    /**
    * Sets bootstrapScripts
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\BootstrapScript[]|null $bootstrapScripts 配置引导操作脚本信息。
    *
    * @return $this
    */
    public function setBootstrapScripts($bootstrapScripts)
    {
        $this->container['bootstrapScripts'] = $bootstrapScripts;
        return $this;
    }

    /**
    * Gets logUri
    *  集群日志转储至OBS的具体路径。 开启日志转储功能后，日志上传需要对应OBS路径的读写权限， 请配置MRS_ECS_DEFULT_AGENCY默认委托或具有对应OBS路径读写权限的自定义委托。 具体请参见[配置存算分离集群（委托方式）](https://support.huaweicloud.com/usermanual-mrs/mrs_01_0768.html)。 该参数只适用于支持“集群日志转储OBS”特性的集群版本。
    *
    * @return string|null
    */
    public function getLogUri()
    {
        return $this->container['logUri'];
    }

    /**
    * Sets logUri
    *
    * @param string|null $logUri 集群日志转储至OBS的具体路径。 开启日志转储功能后，日志上传需要对应OBS路径的读写权限， 请配置MRS_ECS_DEFULT_AGENCY默认委托或具有对应OBS路径读写权限的自定义委托。 具体请参见[配置存算分离集群（委托方式）](https://support.huaweicloud.com/usermanual-mrs/mrs_01_0768.html)。 该参数只适用于支持“集群日志转储OBS”特性的集群版本。
    *
    * @return $this
    */
    public function setLogUri($logUri)
    {
        $this->container['logUri'] = $logUri;
        return $this;
    }

    /**
    * Gets componentConfigs
    *  集群组件自定义配置。 该参数只适用于支持“自定义组件配置创建集群”特性的集群版本。
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\ComponentConfig[]|null
    */
    public function getComponentConfigs()
    {
        return $this->container['componentConfigs'];
    }

    /**
    * Sets componentConfigs
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\ComponentConfig[]|null $componentConfigs 集群组件自定义配置。 该参数只适用于支持“自定义组件配置创建集群”特性的集群版本。
    *
    * @return $this
    */
    public function setComponentConfigs($componentConfigs)
    {
        $this->container['componentConfigs'] = $componentConfigs;
        return $this;
    }

    /**
    * Gets deleteWhenNoSteps
    *  作业完成后是否自动删除集群，默认为false。
    *
    * @return bool|null
    */
    public function getDeleteWhenNoSteps()
    {
        return $this->container['deleteWhenNoSteps'];
    }

    /**
    * Sets deleteWhenNoSteps
    *
    * @param bool|null $deleteWhenNoSteps 作业完成后是否自动删除集群，默认为false。
    *
    * @return $this
    */
    public function setDeleteWhenNoSteps($deleteWhenNoSteps)
    {
        $this->container['deleteWhenNoSteps'] = $deleteWhenNoSteps;
        return $this;
    }

    /**
    * Gets steps
    *  作业列表。
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\StepConfig[]
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\StepConfig[] $steps 作业列表。
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
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

