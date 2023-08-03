<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterReqV11 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterReqV11';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterVersion  集群版本。 例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * masterNodeNum  Master节点数量。启用集群高可用功能时配置为2，不启用集群高可用功能时配置为1。MRS 3.x版本暂时不支持该参数配置为1。
    * coreNodeNum  Core节点数量。  取值范围：[1～500]  Core节点默认的最大值为500，如果用户需要的Core节点数大于500，请申请扩大配额。
    * billingType  集群的计费模式。  12：表示按需计费。接口调用仅支持创建按需计费集群。
    * dataCenter  集群区域信息，请参见[终端节点及区域](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpc  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。  在“虚拟私有云”页面的列表中即可获取VPC名称。
    * masterNodeSize  Master节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * coreNodeSize  Core节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * componentList  服务组件安装列表信息。
    * availableZoneId  可用分区ID。  - 华北-北京一可用区1（cn-north-1a）：ae04cf9d61544df3806a3feeb401b204 - 华北-北京一可用区2（cn-north-1b）：d573142f24894ef3bd3664de068b44b0 - 华东-上海二可用区1（cn-east-2a）：72d50cedc49846b9b42c21495f38d81c - 华东-上海二可用区2（cn-east-2b）：38b0f7a602344246bcb0da47b5d548e7 - 华东-上海二可用区3（cn-east-2c）：5547fd6bf8f84bb5a7f9db062ad3d015 - 华南-广州可用区1（cn-south-1a）：34f5ff4865cf4ed6b270f15382ebdec5 - 华南-广州可用区2（cn-south-2b）：043c7e39ecb347a08dc8fcb6c35a274e - 华南-广州可用区3（cn-south-1c）：af1687643e8c4ec1b34b688e4e3b8901 - 华北-北京四可用区1（cn-north-4a）：effdcbc7d4d64a02aa1fa26b42f56533 - 华北-北京四可用区2（cn-north-4b）：a0865121f83b41cbafce65930a22a6e8 - 华北-北京四可用区3（cn-north-4c）：2dcb154ac2724a6d92e9bcc859657c1e
    * vpcId  子网所在VPC ID。 通过VPC管理控制台获取ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。   在“虚拟私有云”页面的列表中即可获取VPC ID。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自己创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中包含一条全部协议，全部端口，源地址为指定的管理面节点IP的入方向规则。
    * addJobs  创建集群时可同时提交作业，当前版本暂时只支持新增一个作业。
    * volumeSize  Master和Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。可以根据如下应用场景合理选择磁盘存储空间大小： - 数据存储和计算分离，数据存储在OBS系统中，集群费用相对较低，计算性能不高，并且集群随时可以删除，建议数据计算不频繁场景下使用。 - 数据存储和计算不分离，数据存储在HDFS中，集群费用相对较高，计算性能高，集群需要长期存在，建议数据计算频繁场景下使用。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。 不建议使用该参数，详情请参考volume_type参数的说明。
    * volumeType  Master和Core节点的磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。磁盘参数可以使用volume_type和volume_size表示，也可以使用多磁盘相关的参数表示。volume_type和volume_size这两个参数如果与多磁盘参数同时出现，系统优先读取volume_type和volume_size参数。建议使用多磁盘参数。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * masterDataVolumeType  该参数为多磁盘参数，表示Master节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * masterDataVolumeSize  该参数为多磁盘参数，表示Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  该参数为多磁盘参数，表示Master节点数据磁盘个数。取值只能是1。
    * coreDataVolumeType  该参数为多磁盘参数，表示Core节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * coreDataVolumeSize  该参数为多磁盘参数，表示Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  该参数为多磁盘参数，表示Core节点数据磁盘个数。 取值范围：1～10
    * taskNodeGroups  Task节点列表信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * nodePublicCertName  密钥对名称。用户可以使用密钥对方式登录集群节点。当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。
    * clusterAdminSecret  配置MRS Manager管理员用户的密码。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合     - 至少一个小写字母     - 至少一个大写字母     - 至少一个数字     - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * clusterMasterSecret  配置访问集群节点的root密码。当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。  密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含4种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * safeMode  MRS集群运行模式。 - 0：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - 1：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找MRS Manager的管理员分配权限。
    * clusterType  集群类型。  默认值为0：分析集群。  说明：暂不支持通过接口方式创建混合集群。  枚举值： - 0：分析集群 - 1：流式集群
    * logCollection  集群创建失败时，是否收集失败日志。  默认设置为1，将创建OBS桶仅用于MRS集群创建失败时的日志收集。  枚举值： - 0：不收集 - 1：收集
    * enterpriseProjectId  企业项目ID。  创建集群时，给集群绑定企业项目ID。  默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * tags  集群的标签信息。  同一个集群最多能使用10个tag，tag的名称（key）不能重复 标签的键/值不能包含“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。
    * loginMode  集群登录方式。默认设置为1。  - 当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。 - 当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。  枚举值： - 0：密码方式 - 1：密钥对方式
    * nodeGroups  节点列表信息。  说明：如下参数和该参数任选一组进行配置即可。  master_node_num、master_node_size、core_node_num、core_node_size、master_data_volume_type、master_data_volume_size、master_data_volume_count、core_data_volume_type、core_data_volume_size、core_data_volume_count、volume_type、volume_size、task_node_groups。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterVersion' => 'string',
            'clusterName' => 'string',
            'masterNodeNum' => 'int',
            'coreNodeNum' => 'int',
            'billingType' => 'int',
            'dataCenter' => 'string',
            'vpc' => 'string',
            'masterNodeSize' => 'string',
            'coreNodeSize' => 'string',
            'componentList' => '\HuaweiCloud\SDK\Mrs\V1\Model\ComponentAmbV11[]',
            'availableZoneId' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'subnetName' => 'string',
            'securityGroupsId' => 'string',
            'addJobs' => '\HuaweiCloud\SDK\Mrs\V1\Model\AddJobsReqV11[]',
            'volumeSize' => 'int',
            'volumeType' => 'string',
            'masterDataVolumeType' => 'string',
            'masterDataVolumeSize' => 'int',
            'masterDataVolumeCount' => 'int',
            'coreDataVolumeType' => 'string',
            'coreDataVolumeSize' => 'int',
            'coreDataVolumeCount' => 'int',
            'taskNodeGroups' => '\HuaweiCloud\SDK\Mrs\V1\Model\TaskNodeGroup[]',
            'bootstrapScripts' => '\HuaweiCloud\SDK\Mrs\V1\Model\BootstrapScript[]',
            'nodePublicCertName' => 'string',
            'clusterAdminSecret' => 'string',
            'clusterMasterSecret' => 'string',
            'safeMode' => 'int',
            'clusterType' => 'int',
            'logCollection' => 'int',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Mrs\V1\Model\Tag[]',
            'loginMode' => 'int',
            'nodeGroups' => '\HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV11[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterVersion  集群版本。 例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * masterNodeNum  Master节点数量。启用集群高可用功能时配置为2，不启用集群高可用功能时配置为1。MRS 3.x版本暂时不支持该参数配置为1。
    * coreNodeNum  Core节点数量。  取值范围：[1～500]  Core节点默认的最大值为500，如果用户需要的Core节点数大于500，请申请扩大配额。
    * billingType  集群的计费模式。  12：表示按需计费。接口调用仅支持创建按需计费集群。
    * dataCenter  集群区域信息，请参见[终端节点及区域](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpc  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。  在“虚拟私有云”页面的列表中即可获取VPC名称。
    * masterNodeSize  Master节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * coreNodeSize  Core节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * componentList  服务组件安装列表信息。
    * availableZoneId  可用分区ID。  - 华北-北京一可用区1（cn-north-1a）：ae04cf9d61544df3806a3feeb401b204 - 华北-北京一可用区2（cn-north-1b）：d573142f24894ef3bd3664de068b44b0 - 华东-上海二可用区1（cn-east-2a）：72d50cedc49846b9b42c21495f38d81c - 华东-上海二可用区2（cn-east-2b）：38b0f7a602344246bcb0da47b5d548e7 - 华东-上海二可用区3（cn-east-2c）：5547fd6bf8f84bb5a7f9db062ad3d015 - 华南-广州可用区1（cn-south-1a）：34f5ff4865cf4ed6b270f15382ebdec5 - 华南-广州可用区2（cn-south-2b）：043c7e39ecb347a08dc8fcb6c35a274e - 华南-广州可用区3（cn-south-1c）：af1687643e8c4ec1b34b688e4e3b8901 - 华北-北京四可用区1（cn-north-4a）：effdcbc7d4d64a02aa1fa26b42f56533 - 华北-北京四可用区2（cn-north-4b）：a0865121f83b41cbafce65930a22a6e8 - 华北-北京四可用区3（cn-north-4c）：2dcb154ac2724a6d92e9bcc859657c1e
    * vpcId  子网所在VPC ID。 通过VPC管理控制台获取ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。   在“虚拟私有云”页面的列表中即可获取VPC ID。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自己创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中包含一条全部协议，全部端口，源地址为指定的管理面节点IP的入方向规则。
    * addJobs  创建集群时可同时提交作业，当前版本暂时只支持新增一个作业。
    * volumeSize  Master和Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。可以根据如下应用场景合理选择磁盘存储空间大小： - 数据存储和计算分离，数据存储在OBS系统中，集群费用相对较低，计算性能不高，并且集群随时可以删除，建议数据计算不频繁场景下使用。 - 数据存储和计算不分离，数据存储在HDFS中，集群费用相对较高，计算性能高，集群需要长期存在，建议数据计算频繁场景下使用。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。 不建议使用该参数，详情请参考volume_type参数的说明。
    * volumeType  Master和Core节点的磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。磁盘参数可以使用volume_type和volume_size表示，也可以使用多磁盘相关的参数表示。volume_type和volume_size这两个参数如果与多磁盘参数同时出现，系统优先读取volume_type和volume_size参数。建议使用多磁盘参数。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * masterDataVolumeType  该参数为多磁盘参数，表示Master节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * masterDataVolumeSize  该参数为多磁盘参数，表示Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  该参数为多磁盘参数，表示Master节点数据磁盘个数。取值只能是1。
    * coreDataVolumeType  该参数为多磁盘参数，表示Core节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * coreDataVolumeSize  该参数为多磁盘参数，表示Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  该参数为多磁盘参数，表示Core节点数据磁盘个数。 取值范围：1～10
    * taskNodeGroups  Task节点列表信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * nodePublicCertName  密钥对名称。用户可以使用密钥对方式登录集群节点。当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。
    * clusterAdminSecret  配置MRS Manager管理员用户的密码。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合     - 至少一个小写字母     - 至少一个大写字母     - 至少一个数字     - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * clusterMasterSecret  配置访问集群节点的root密码。当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。  密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含4种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * safeMode  MRS集群运行模式。 - 0：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - 1：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找MRS Manager的管理员分配权限。
    * clusterType  集群类型。  默认值为0：分析集群。  说明：暂不支持通过接口方式创建混合集群。  枚举值： - 0：分析集群 - 1：流式集群
    * logCollection  集群创建失败时，是否收集失败日志。  默认设置为1，将创建OBS桶仅用于MRS集群创建失败时的日志收集。  枚举值： - 0：不收集 - 1：收集
    * enterpriseProjectId  企业项目ID。  创建集群时，给集群绑定企业项目ID。  默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * tags  集群的标签信息。  同一个集群最多能使用10个tag，tag的名称（key）不能重复 标签的键/值不能包含“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。
    * loginMode  集群登录方式。默认设置为1。  - 当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。 - 当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。  枚举值： - 0：密码方式 - 1：密钥对方式
    * nodeGroups  节点列表信息。  说明：如下参数和该参数任选一组进行配置即可。  master_node_num、master_node_size、core_node_num、core_node_size、master_data_volume_type、master_data_volume_size、master_data_volume_count、core_data_volume_type、core_data_volume_size、core_data_volume_count、volume_type、volume_size、task_node_groups。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterVersion' => null,
        'clusterName' => null,
        'masterNodeNum' => 'int32',
        'coreNodeNum' => 'int32',
        'billingType' => 'int32',
        'dataCenter' => null,
        'vpc' => null,
        'masterNodeSize' => null,
        'coreNodeSize' => null,
        'componentList' => null,
        'availableZoneId' => null,
        'vpcId' => null,
        'subnetId' => null,
        'subnetName' => null,
        'securityGroupsId' => null,
        'addJobs' => null,
        'volumeSize' => 'int32',
        'volumeType' => null,
        'masterDataVolumeType' => null,
        'masterDataVolumeSize' => 'int32',
        'masterDataVolumeCount' => 'int32',
        'coreDataVolumeType' => null,
        'coreDataVolumeSize' => 'int32',
        'coreDataVolumeCount' => 'int32',
        'taskNodeGroups' => null,
        'bootstrapScripts' => null,
        'nodePublicCertName' => null,
        'clusterAdminSecret' => null,
        'clusterMasterSecret' => null,
        'safeMode' => 'int32',
        'clusterType' => 'int32',
        'logCollection' => 'int32',
        'enterpriseProjectId' => null,
        'tags' => null,
        'loginMode' => 'int32',
        'nodeGroups' => null
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
    * clusterVersion  集群版本。 例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * masterNodeNum  Master节点数量。启用集群高可用功能时配置为2，不启用集群高可用功能时配置为1。MRS 3.x版本暂时不支持该参数配置为1。
    * coreNodeNum  Core节点数量。  取值范围：[1～500]  Core节点默认的最大值为500，如果用户需要的Core节点数大于500，请申请扩大配额。
    * billingType  集群的计费模式。  12：表示按需计费。接口调用仅支持创建按需计费集群。
    * dataCenter  集群区域信息，请参见[终端节点及区域](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpc  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。  在“虚拟私有云”页面的列表中即可获取VPC名称。
    * masterNodeSize  Master节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * coreNodeSize  Core节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * componentList  服务组件安装列表信息。
    * availableZoneId  可用分区ID。  - 华北-北京一可用区1（cn-north-1a）：ae04cf9d61544df3806a3feeb401b204 - 华北-北京一可用区2（cn-north-1b）：d573142f24894ef3bd3664de068b44b0 - 华东-上海二可用区1（cn-east-2a）：72d50cedc49846b9b42c21495f38d81c - 华东-上海二可用区2（cn-east-2b）：38b0f7a602344246bcb0da47b5d548e7 - 华东-上海二可用区3（cn-east-2c）：5547fd6bf8f84bb5a7f9db062ad3d015 - 华南-广州可用区1（cn-south-1a）：34f5ff4865cf4ed6b270f15382ebdec5 - 华南-广州可用区2（cn-south-2b）：043c7e39ecb347a08dc8fcb6c35a274e - 华南-广州可用区3（cn-south-1c）：af1687643e8c4ec1b34b688e4e3b8901 - 华北-北京四可用区1（cn-north-4a）：effdcbc7d4d64a02aa1fa26b42f56533 - 华北-北京四可用区2（cn-north-4b）：a0865121f83b41cbafce65930a22a6e8 - 华北-北京四可用区3（cn-north-4c）：2dcb154ac2724a6d92e9bcc859657c1e
    * vpcId  子网所在VPC ID。 通过VPC管理控制台获取ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。   在“虚拟私有云”页面的列表中即可获取VPC ID。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自己创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中包含一条全部协议，全部端口，源地址为指定的管理面节点IP的入方向规则。
    * addJobs  创建集群时可同时提交作业，当前版本暂时只支持新增一个作业。
    * volumeSize  Master和Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。可以根据如下应用场景合理选择磁盘存储空间大小： - 数据存储和计算分离，数据存储在OBS系统中，集群费用相对较低，计算性能不高，并且集群随时可以删除，建议数据计算不频繁场景下使用。 - 数据存储和计算不分离，数据存储在HDFS中，集群费用相对较高，计算性能高，集群需要长期存在，建议数据计算频繁场景下使用。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。 不建议使用该参数，详情请参考volume_type参数的说明。
    * volumeType  Master和Core节点的磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。磁盘参数可以使用volume_type和volume_size表示，也可以使用多磁盘相关的参数表示。volume_type和volume_size这两个参数如果与多磁盘参数同时出现，系统优先读取volume_type和volume_size参数。建议使用多磁盘参数。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * masterDataVolumeType  该参数为多磁盘参数，表示Master节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * masterDataVolumeSize  该参数为多磁盘参数，表示Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  该参数为多磁盘参数，表示Master节点数据磁盘个数。取值只能是1。
    * coreDataVolumeType  该参数为多磁盘参数，表示Core节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * coreDataVolumeSize  该参数为多磁盘参数，表示Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  该参数为多磁盘参数，表示Core节点数据磁盘个数。 取值范围：1～10
    * taskNodeGroups  Task节点列表信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * nodePublicCertName  密钥对名称。用户可以使用密钥对方式登录集群节点。当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。
    * clusterAdminSecret  配置MRS Manager管理员用户的密码。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合     - 至少一个小写字母     - 至少一个大写字母     - 至少一个数字     - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * clusterMasterSecret  配置访问集群节点的root密码。当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。  密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含4种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * safeMode  MRS集群运行模式。 - 0：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - 1：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找MRS Manager的管理员分配权限。
    * clusterType  集群类型。  默认值为0：分析集群。  说明：暂不支持通过接口方式创建混合集群。  枚举值： - 0：分析集群 - 1：流式集群
    * logCollection  集群创建失败时，是否收集失败日志。  默认设置为1，将创建OBS桶仅用于MRS集群创建失败时的日志收集。  枚举值： - 0：不收集 - 1：收集
    * enterpriseProjectId  企业项目ID。  创建集群时，给集群绑定企业项目ID。  默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * tags  集群的标签信息。  同一个集群最多能使用10个tag，tag的名称（key）不能重复 标签的键/值不能包含“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。
    * loginMode  集群登录方式。默认设置为1。  - 当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。 - 当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。  枚举值： - 0：密码方式 - 1：密钥对方式
    * nodeGroups  节点列表信息。  说明：如下参数和该参数任选一组进行配置即可。  master_node_num、master_node_size、core_node_num、core_node_size、master_data_volume_type、master_data_volume_size、master_data_volume_count、core_data_volume_type、core_data_volume_size、core_data_volume_count、volume_type、volume_size、task_node_groups。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterVersion' => 'cluster_version',
            'clusterName' => 'cluster_name',
            'masterNodeNum' => 'master_node_num',
            'coreNodeNum' => 'core_node_num',
            'billingType' => 'billing_type',
            'dataCenter' => 'data_center',
            'vpc' => 'vpc',
            'masterNodeSize' => 'master_node_size',
            'coreNodeSize' => 'core_node_size',
            'componentList' => 'component_list',
            'availableZoneId' => 'available_zone_id',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'subnetName' => 'subnet_name',
            'securityGroupsId' => 'security_groups_id',
            'addJobs' => 'add_jobs',
            'volumeSize' => 'volume_size',
            'volumeType' => 'volume_type',
            'masterDataVolumeType' => 'master_data_volume_type',
            'masterDataVolumeSize' => 'master_data_volume_size',
            'masterDataVolumeCount' => 'master_data_volume_count',
            'coreDataVolumeType' => 'core_data_volume_type',
            'coreDataVolumeSize' => 'core_data_volume_size',
            'coreDataVolumeCount' => 'core_data_volume_count',
            'taskNodeGroups' => 'task_node_groups',
            'bootstrapScripts' => 'bootstrap_scripts',
            'nodePublicCertName' => 'node_public_cert_name',
            'clusterAdminSecret' => 'cluster_admin_secret',
            'clusterMasterSecret' => 'cluster_master_secret',
            'safeMode' => 'safe_mode',
            'clusterType' => 'cluster_type',
            'logCollection' => 'log_collection',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'loginMode' => 'login_mode',
            'nodeGroups' => 'node_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterVersion  集群版本。 例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * masterNodeNum  Master节点数量。启用集群高可用功能时配置为2，不启用集群高可用功能时配置为1。MRS 3.x版本暂时不支持该参数配置为1。
    * coreNodeNum  Core节点数量。  取值范围：[1～500]  Core节点默认的最大值为500，如果用户需要的Core节点数大于500，请申请扩大配额。
    * billingType  集群的计费模式。  12：表示按需计费。接口调用仅支持创建按需计费集群。
    * dataCenter  集群区域信息，请参见[终端节点及区域](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpc  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。  在“虚拟私有云”页面的列表中即可获取VPC名称。
    * masterNodeSize  Master节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * coreNodeSize  Core节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * componentList  服务组件安装列表信息。
    * availableZoneId  可用分区ID。  - 华北-北京一可用区1（cn-north-1a）：ae04cf9d61544df3806a3feeb401b204 - 华北-北京一可用区2（cn-north-1b）：d573142f24894ef3bd3664de068b44b0 - 华东-上海二可用区1（cn-east-2a）：72d50cedc49846b9b42c21495f38d81c - 华东-上海二可用区2（cn-east-2b）：38b0f7a602344246bcb0da47b5d548e7 - 华东-上海二可用区3（cn-east-2c）：5547fd6bf8f84bb5a7f9db062ad3d015 - 华南-广州可用区1（cn-south-1a）：34f5ff4865cf4ed6b270f15382ebdec5 - 华南-广州可用区2（cn-south-2b）：043c7e39ecb347a08dc8fcb6c35a274e - 华南-广州可用区3（cn-south-1c）：af1687643e8c4ec1b34b688e4e3b8901 - 华北-北京四可用区1（cn-north-4a）：effdcbc7d4d64a02aa1fa26b42f56533 - 华北-北京四可用区2（cn-north-4b）：a0865121f83b41cbafce65930a22a6e8 - 华北-北京四可用区3（cn-north-4c）：2dcb154ac2724a6d92e9bcc859657c1e
    * vpcId  子网所在VPC ID。 通过VPC管理控制台获取ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。   在“虚拟私有云”页面的列表中即可获取VPC ID。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自己创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中包含一条全部协议，全部端口，源地址为指定的管理面节点IP的入方向规则。
    * addJobs  创建集群时可同时提交作业，当前版本暂时只支持新增一个作业。
    * volumeSize  Master和Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。可以根据如下应用场景合理选择磁盘存储空间大小： - 数据存储和计算分离，数据存储在OBS系统中，集群费用相对较低，计算性能不高，并且集群随时可以删除，建议数据计算不频繁场景下使用。 - 数据存储和计算不分离，数据存储在HDFS中，集群费用相对较高，计算性能高，集群需要长期存在，建议数据计算频繁场景下使用。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。 不建议使用该参数，详情请参考volume_type参数的说明。
    * volumeType  Master和Core节点的磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。磁盘参数可以使用volume_type和volume_size表示，也可以使用多磁盘相关的参数表示。volume_type和volume_size这两个参数如果与多磁盘参数同时出现，系统优先读取volume_type和volume_size参数。建议使用多磁盘参数。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * masterDataVolumeType  该参数为多磁盘参数，表示Master节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * masterDataVolumeSize  该参数为多磁盘参数，表示Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  该参数为多磁盘参数，表示Master节点数据磁盘个数。取值只能是1。
    * coreDataVolumeType  该参数为多磁盘参数，表示Core节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * coreDataVolumeSize  该参数为多磁盘参数，表示Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  该参数为多磁盘参数，表示Core节点数据磁盘个数。 取值范围：1～10
    * taskNodeGroups  Task节点列表信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * nodePublicCertName  密钥对名称。用户可以使用密钥对方式登录集群节点。当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。
    * clusterAdminSecret  配置MRS Manager管理员用户的密码。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合     - 至少一个小写字母     - 至少一个大写字母     - 至少一个数字     - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * clusterMasterSecret  配置访问集群节点的root密码。当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。  密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含4种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * safeMode  MRS集群运行模式。 - 0：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - 1：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找MRS Manager的管理员分配权限。
    * clusterType  集群类型。  默认值为0：分析集群。  说明：暂不支持通过接口方式创建混合集群。  枚举值： - 0：分析集群 - 1：流式集群
    * logCollection  集群创建失败时，是否收集失败日志。  默认设置为1，将创建OBS桶仅用于MRS集群创建失败时的日志收集。  枚举值： - 0：不收集 - 1：收集
    * enterpriseProjectId  企业项目ID。  创建集群时，给集群绑定企业项目ID。  默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * tags  集群的标签信息。  同一个集群最多能使用10个tag，tag的名称（key）不能重复 标签的键/值不能包含“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。
    * loginMode  集群登录方式。默认设置为1。  - 当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。 - 当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。  枚举值： - 0：密码方式 - 1：密钥对方式
    * nodeGroups  节点列表信息。  说明：如下参数和该参数任选一组进行配置即可。  master_node_num、master_node_size、core_node_num、core_node_size、master_data_volume_type、master_data_volume_size、master_data_volume_count、core_data_volume_type、core_data_volume_size、core_data_volume_count、volume_type、volume_size、task_node_groups。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterVersion' => 'setClusterVersion',
            'clusterName' => 'setClusterName',
            'masterNodeNum' => 'setMasterNodeNum',
            'coreNodeNum' => 'setCoreNodeNum',
            'billingType' => 'setBillingType',
            'dataCenter' => 'setDataCenter',
            'vpc' => 'setVpc',
            'masterNodeSize' => 'setMasterNodeSize',
            'coreNodeSize' => 'setCoreNodeSize',
            'componentList' => 'setComponentList',
            'availableZoneId' => 'setAvailableZoneId',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'subnetName' => 'setSubnetName',
            'securityGroupsId' => 'setSecurityGroupsId',
            'addJobs' => 'setAddJobs',
            'volumeSize' => 'setVolumeSize',
            'volumeType' => 'setVolumeType',
            'masterDataVolumeType' => 'setMasterDataVolumeType',
            'masterDataVolumeSize' => 'setMasterDataVolumeSize',
            'masterDataVolumeCount' => 'setMasterDataVolumeCount',
            'coreDataVolumeType' => 'setCoreDataVolumeType',
            'coreDataVolumeSize' => 'setCoreDataVolumeSize',
            'coreDataVolumeCount' => 'setCoreDataVolumeCount',
            'taskNodeGroups' => 'setTaskNodeGroups',
            'bootstrapScripts' => 'setBootstrapScripts',
            'nodePublicCertName' => 'setNodePublicCertName',
            'clusterAdminSecret' => 'setClusterAdminSecret',
            'clusterMasterSecret' => 'setClusterMasterSecret',
            'safeMode' => 'setSafeMode',
            'clusterType' => 'setClusterType',
            'logCollection' => 'setLogCollection',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'loginMode' => 'setLoginMode',
            'nodeGroups' => 'setNodeGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterVersion  集群版本。 例如：MRS 3.1.0。
    * clusterName  集群名称，不允许相同。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    * masterNodeNum  Master节点数量。启用集群高可用功能时配置为2，不启用集群高可用功能时配置为1。MRS 3.x版本暂时不支持该参数配置为1。
    * coreNodeNum  Core节点数量。  取值范围：[1～500]  Core节点默认的最大值为500，如果用户需要的Core节点数大于500，请申请扩大配额。
    * billingType  集群的计费模式。  12：表示按需计费。接口调用仅支持创建按需计费集群。
    * dataCenter  集群区域信息，请参见[终端节点及区域](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    * vpc  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。  在“虚拟私有云”页面的列表中即可获取VPC名称。
    * masterNodeSize  Master节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * coreNodeSize  Core节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * componentList  服务组件安装列表信息。
    * availableZoneId  可用分区ID。  - 华北-北京一可用区1（cn-north-1a）：ae04cf9d61544df3806a3feeb401b204 - 华北-北京一可用区2（cn-north-1b）：d573142f24894ef3bd3664de068b44b0 - 华东-上海二可用区1（cn-east-2a）：72d50cedc49846b9b42c21495f38d81c - 华东-上海二可用区2（cn-east-2b）：38b0f7a602344246bcb0da47b5d548e7 - 华东-上海二可用区3（cn-east-2c）：5547fd6bf8f84bb5a7f9db062ad3d015 - 华南-广州可用区1（cn-south-1a）：34f5ff4865cf4ed6b270f15382ebdec5 - 华南-广州可用区2（cn-south-2b）：043c7e39ecb347a08dc8fcb6c35a274e - 华南-广州可用区3（cn-south-1c）：af1687643e8c4ec1b34b688e4e3b8901 - 华北-北京四可用区1（cn-north-4a）：effdcbc7d4d64a02aa1fa26b42f56533 - 华北-北京四可用区2（cn-north-4b）：a0865121f83b41cbafce65930a22a6e8 - 华北-北京四可用区3（cn-north-4c）：2dcb154ac2724a6d92e9bcc859657c1e
    * vpcId  子网所在VPC ID。 通过VPC管理控制台获取ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。   在“虚拟私有云”页面的列表中即可获取VPC ID。
    * subnetId  子网ID。通过VPC管理控制台获取子网ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
    * subnetName  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
    * securityGroupsId  集群安全组的ID。 - 当该ID为空时MRS后台会自己创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中包含一条全部协议，全部端口，源地址为指定的管理面节点IP的入方向规则。
    * addJobs  创建集群时可同时提交作业，当前版本暂时只支持新增一个作业。
    * volumeSize  Master和Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。可以根据如下应用场景合理选择磁盘存储空间大小： - 数据存储和计算分离，数据存储在OBS系统中，集群费用相对较低，计算性能不高，并且集群随时可以删除，建议数据计算不频繁场景下使用。 - 数据存储和计算不分离，数据存储在HDFS中，集群费用相对较高，计算性能高，集群需要长期存在，建议数据计算频繁场景下使用。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。 不建议使用该参数，详情请参考volume_type参数的说明。
    * volumeType  Master和Core节点的磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。磁盘参数可以使用volume_type和volume_size表示，也可以使用多磁盘相关的参数表示。volume_type和volume_size这两个参数如果与多磁盘参数同时出现，系统优先读取volume_type和volume_size参数。建议使用多磁盘参数。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * masterDataVolumeType  该参数为多磁盘参数，表示Master节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * masterDataVolumeSize  该参数为多磁盘参数，表示Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * masterDataVolumeCount  该参数为多磁盘参数，表示Master节点数据磁盘个数。取值只能是1。
    * coreDataVolumeType  该参数为多磁盘参数，表示Core节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
    * coreDataVolumeSize  该参数为多磁盘参数，表示Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
    * coreDataVolumeCount  该参数为多磁盘参数，表示Core节点数据磁盘个数。 取值范围：1～10
    * taskNodeGroups  Task节点列表信息。
    * bootstrapScripts  配置引导操作脚本信息。
    * nodePublicCertName  密钥对名称。用户可以使用密钥对方式登录集群节点。当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。
    * clusterAdminSecret  配置MRS Manager管理员用户的密码。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合     - 至少一个小写字母     - 至少一个大写字母     - 至少一个数字     - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    * clusterMasterSecret  配置访问集群节点的root密码。当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。  密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含4种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    * safeMode  MRS集群运行模式。 - 0：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - 1：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找MRS Manager的管理员分配权限。
    * clusterType  集群类型。  默认值为0：分析集群。  说明：暂不支持通过接口方式创建混合集群。  枚举值： - 0：分析集群 - 1：流式集群
    * logCollection  集群创建失败时，是否收集失败日志。  默认设置为1，将创建OBS桶仅用于MRS集群创建失败时的日志收集。  枚举值： - 0：不收集 - 1：收集
    * enterpriseProjectId  企业项目ID。  创建集群时，给集群绑定企业项目ID。  默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
    * tags  集群的标签信息。  同一个集群最多能使用10个tag，tag的名称（key）不能重复 标签的键/值不能包含“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。
    * loginMode  集群登录方式。默认设置为1。  - 当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。 - 当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。  枚举值： - 0：密码方式 - 1：密钥对方式
    * nodeGroups  节点列表信息。  说明：如下参数和该参数任选一组进行配置即可。  master_node_num、master_node_size、core_node_num、core_node_size、master_data_volume_type、master_data_volume_size、master_data_volume_count、core_data_volume_type、core_data_volume_size、core_data_volume_count、volume_type、volume_size、task_node_groups。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterVersion' => 'getClusterVersion',
            'clusterName' => 'getClusterName',
            'masterNodeNum' => 'getMasterNodeNum',
            'coreNodeNum' => 'getCoreNodeNum',
            'billingType' => 'getBillingType',
            'dataCenter' => 'getDataCenter',
            'vpc' => 'getVpc',
            'masterNodeSize' => 'getMasterNodeSize',
            'coreNodeSize' => 'getCoreNodeSize',
            'componentList' => 'getComponentList',
            'availableZoneId' => 'getAvailableZoneId',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'subnetName' => 'getSubnetName',
            'securityGroupsId' => 'getSecurityGroupsId',
            'addJobs' => 'getAddJobs',
            'volumeSize' => 'getVolumeSize',
            'volumeType' => 'getVolumeType',
            'masterDataVolumeType' => 'getMasterDataVolumeType',
            'masterDataVolumeSize' => 'getMasterDataVolumeSize',
            'masterDataVolumeCount' => 'getMasterDataVolumeCount',
            'coreDataVolumeType' => 'getCoreDataVolumeType',
            'coreDataVolumeSize' => 'getCoreDataVolumeSize',
            'coreDataVolumeCount' => 'getCoreDataVolumeCount',
            'taskNodeGroups' => 'getTaskNodeGroups',
            'bootstrapScripts' => 'getBootstrapScripts',
            'nodePublicCertName' => 'getNodePublicCertName',
            'clusterAdminSecret' => 'getClusterAdminSecret',
            'clusterMasterSecret' => 'getClusterMasterSecret',
            'safeMode' => 'getSafeMode',
            'clusterType' => 'getClusterType',
            'logCollection' => 'getLogCollection',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'loginMode' => 'getLoginMode',
            'nodeGroups' => 'getNodeGroups'
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
    const BILLING_TYPE_12 = 12;
    const VOLUME_TYPE_SATA = 'SATA';
    const VOLUME_TYPE_SAS = 'SAS';
    const VOLUME_TYPE_SSD = 'SSD';
    const VOLUME_TYPE_GPSSD = 'GPSSD';
    const MASTER_DATA_VOLUME_TYPE_SATA = 'SATA';
    const MASTER_DATA_VOLUME_TYPE_SAS = 'SAS';
    const MASTER_DATA_VOLUME_TYPE_SSD = 'SSD';
    const MASTER_DATA_VOLUME_TYPE_GPSSD = 'GPSSD';
    const MASTER_DATA_VOLUME_COUNT_1 = 1;
    const CORE_DATA_VOLUME_TYPE_SATA = 'SATA';
    const CORE_DATA_VOLUME_TYPE_SAS = 'SAS';
    const CORE_DATA_VOLUME_TYPE_SSD = 'SSD';
    const CORE_DATA_VOLUME_TYPE_GPSSD = 'GPSSD';
    const SAFE_MODE_0 = 0;
    const SAFE_MODE_1 = 1;
    const CLUSTER_TYPE_0 = 0;
    const CLUSTER_TYPE_1 = 1;
    const LOG_COLLECTION_0 = 0;
    const LOG_COLLECTION_1 = 1;
    const LOGIN_MODE_0 = 0;
    const LOGIN_MODE_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBillingTypeAllowableValues()
    {
        return [
            self::BILLING_TYPE_12,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVolumeTypeAllowableValues()
    {
        return [
            self::VOLUME_TYPE_SATA,
            self::VOLUME_TYPE_SAS,
            self::VOLUME_TYPE_SSD,
            self::VOLUME_TYPE_GPSSD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMasterDataVolumeTypeAllowableValues()
    {
        return [
            self::MASTER_DATA_VOLUME_TYPE_SATA,
            self::MASTER_DATA_VOLUME_TYPE_SAS,
            self::MASTER_DATA_VOLUME_TYPE_SSD,
            self::MASTER_DATA_VOLUME_TYPE_GPSSD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMasterDataVolumeCountAllowableValues()
    {
        return [
            self::MASTER_DATA_VOLUME_COUNT_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCoreDataVolumeTypeAllowableValues()
    {
        return [
            self::CORE_DATA_VOLUME_TYPE_SATA,
            self::CORE_DATA_VOLUME_TYPE_SAS,
            self::CORE_DATA_VOLUME_TYPE_SSD,
            self::CORE_DATA_VOLUME_TYPE_GPSSD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSafeModeAllowableValues()
    {
        return [
            self::SAFE_MODE_0,
            self::SAFE_MODE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterTypeAllowableValues()
    {
        return [
            self::CLUSTER_TYPE_0,
            self::CLUSTER_TYPE_1,
        ];
    }

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLoginModeAllowableValues()
    {
        return [
            self::LOGIN_MODE_0,
            self::LOGIN_MODE_1,
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
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['masterNodeNum'] = isset($data['masterNodeNum']) ? $data['masterNodeNum'] : null;
        $this->container['coreNodeNum'] = isset($data['coreNodeNum']) ? $data['coreNodeNum'] : null;
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['masterNodeSize'] = isset($data['masterNodeSize']) ? $data['masterNodeSize'] : null;
        $this->container['coreNodeSize'] = isset($data['coreNodeSize']) ? $data['coreNodeSize'] : null;
        $this->container['componentList'] = isset($data['componentList']) ? $data['componentList'] : null;
        $this->container['availableZoneId'] = isset($data['availableZoneId']) ? $data['availableZoneId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['securityGroupsId'] = isset($data['securityGroupsId']) ? $data['securityGroupsId'] : null;
        $this->container['addJobs'] = isset($data['addJobs']) ? $data['addJobs'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['masterDataVolumeType'] = isset($data['masterDataVolumeType']) ? $data['masterDataVolumeType'] : null;
        $this->container['masterDataVolumeSize'] = isset($data['masterDataVolumeSize']) ? $data['masterDataVolumeSize'] : null;
        $this->container['masterDataVolumeCount'] = isset($data['masterDataVolumeCount']) ? $data['masterDataVolumeCount'] : null;
        $this->container['coreDataVolumeType'] = isset($data['coreDataVolumeType']) ? $data['coreDataVolumeType'] : null;
        $this->container['coreDataVolumeSize'] = isset($data['coreDataVolumeSize']) ? $data['coreDataVolumeSize'] : null;
        $this->container['coreDataVolumeCount'] = isset($data['coreDataVolumeCount']) ? $data['coreDataVolumeCount'] : null;
        $this->container['taskNodeGroups'] = isset($data['taskNodeGroups']) ? $data['taskNodeGroups'] : null;
        $this->container['bootstrapScripts'] = isset($data['bootstrapScripts']) ? $data['bootstrapScripts'] : null;
        $this->container['nodePublicCertName'] = isset($data['nodePublicCertName']) ? $data['nodePublicCertName'] : null;
        $this->container['clusterAdminSecret'] = isset($data['clusterAdminSecret']) ? $data['clusterAdminSecret'] : null;
        $this->container['clusterMasterSecret'] = isset($data['clusterMasterSecret']) ? $data['clusterMasterSecret'] : null;
        $this->container['safeMode'] = isset($data['safeMode']) ? $data['safeMode'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['logCollection'] = isset($data['logCollection']) ? $data['logCollection'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['loginMode'] = isset($data['loginMode']) ? $data['loginMode'] : null;
        $this->container['nodeGroups'] = isset($data['nodeGroups']) ? $data['nodeGroups'] : null;
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
            if (!is_null($this->container['coreNodeNum']) && ($this->container['coreNodeNum'] > 500)) {
                $invalidProperties[] = "invalid value for 'coreNodeNum', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['coreNodeNum']) && ($this->container['coreNodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'coreNodeNum', must be bigger than or equal to 0.";
            }
        if ($this->container['billingType'] === null) {
            $invalidProperties[] = "'billingType' can't be null";
        }
            $allowedValues = $this->getBillingTypeAllowableValues();
                if (!is_null($this->container['billingType']) && !in_array($this->container['billingType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'billingType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['dataCenter'] === null) {
            $invalidProperties[] = "'dataCenter' can't be null";
        }
        if ($this->container['vpc'] === null) {
            $invalidProperties[] = "'vpc' can't be null";
        }
        if ($this->container['componentList'] === null) {
            $invalidProperties[] = "'componentList' can't be null";
        }
        if ($this->container['availableZoneId'] === null) {
            $invalidProperties[] = "'availableZoneId' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['subnetName'] === null) {
            $invalidProperties[] = "'subnetName' can't be null";
        }
            if (!is_null($this->container['volumeSize']) && ($this->container['volumeSize'] > 32000)) {
                $invalidProperties[] = "invalid value for 'volumeSize', must be smaller than or equal to 32000.";
            }
            if (!is_null($this->container['volumeSize']) && ($this->container['volumeSize'] < 100)) {
                $invalidProperties[] = "invalid value for 'volumeSize', must be bigger than or equal to 100.";
            }
            $allowedValues = $this->getVolumeTypeAllowableValues();
                if (!is_null($this->container['volumeType']) && !in_array($this->container['volumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'volumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMasterDataVolumeTypeAllowableValues();
                if (!is_null($this->container['masterDataVolumeType']) && !in_array($this->container['masterDataVolumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'masterDataVolumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['masterDataVolumeSize']) && ($this->container['masterDataVolumeSize'] > 32000)) {
                $invalidProperties[] = "invalid value for 'masterDataVolumeSize', must be smaller than or equal to 32000.";
            }
            if (!is_null($this->container['masterDataVolumeSize']) && ($this->container['masterDataVolumeSize'] < 100)) {
                $invalidProperties[] = "invalid value for 'masterDataVolumeSize', must be bigger than or equal to 100.";
            }
            $allowedValues = $this->getMasterDataVolumeCountAllowableValues();
                if (!is_null($this->container['masterDataVolumeCount']) && !in_array($this->container['masterDataVolumeCount'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'masterDataVolumeCount', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['masterDataVolumeCount']) && ($this->container['masterDataVolumeCount'] > 1)) {
                $invalidProperties[] = "invalid value for 'masterDataVolumeCount', must be smaller than or equal to 1.";
            }
            $allowedValues = $this->getCoreDataVolumeTypeAllowableValues();
                if (!is_null($this->container['coreDataVolumeType']) && !in_array($this->container['coreDataVolumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'coreDataVolumeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['coreDataVolumeSize']) && ($this->container['coreDataVolumeSize'] > 32000)) {
                $invalidProperties[] = "invalid value for 'coreDataVolumeSize', must be smaller than or equal to 32000.";
            }
            if (!is_null($this->container['coreDataVolumeSize']) && ($this->container['coreDataVolumeSize'] < 100)) {
                $invalidProperties[] = "invalid value for 'coreDataVolumeSize', must be bigger than or equal to 100.";
            }
            if (!is_null($this->container['coreDataVolumeCount']) && ($this->container['coreDataVolumeCount'] > 10)) {
                $invalidProperties[] = "invalid value for 'coreDataVolumeCount', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['coreDataVolumeCount']) && ($this->container['coreDataVolumeCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'coreDataVolumeCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterAdminSecret']) && (mb_strlen($this->container['clusterAdminSecret']) > 26)) {
                $invalidProperties[] = "invalid value for 'clusterAdminSecret', the character length must be smaller than or equal to 26.";
            }
            if (!is_null($this->container['clusterAdminSecret']) && (mb_strlen($this->container['clusterAdminSecret']) < 8)) {
                $invalidProperties[] = "invalid value for 'clusterAdminSecret', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['clusterMasterSecret']) && (mb_strlen($this->container['clusterMasterSecret']) > 26)) {
                $invalidProperties[] = "invalid value for 'clusterMasterSecret', the character length must be smaller than or equal to 26.";
            }
            if (!is_null($this->container['clusterMasterSecret']) && (mb_strlen($this->container['clusterMasterSecret']) < 8)) {
                $invalidProperties[] = "invalid value for 'clusterMasterSecret', the character length must be bigger than or equal to 8.";
            }
        if ($this->container['safeMode'] === null) {
            $invalidProperties[] = "'safeMode' can't be null";
        }
            $allowedValues = $this->getSafeModeAllowableValues();
                if (!is_null($this->container['safeMode']) && !in_array($this->container['safeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'safeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getClusterTypeAllowableValues();
                if (!is_null($this->container['clusterType']) && !in_array($this->container['clusterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLogCollectionAllowableValues();
                if (!is_null($this->container['logCollection']) && !in_array($this->container['logCollection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logCollection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLoginModeAllowableValues();
                if (!is_null($this->container['loginMode']) && !in_array($this->container['loginMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'loginMode', must be one of '%s'",
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
    * Gets clusterVersion
    *  集群版本。 例如：MRS 3.1.0。
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
    * @param string $clusterVersion 集群版本。 例如：MRS 3.1.0。
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
    *  集群名称，不允许相同。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
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
    * @param string $clusterName 集群名称，不允许相同。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets masterNodeNum
    *  Master节点数量。启用集群高可用功能时配置为2，不启用集群高可用功能时配置为1。MRS 3.x版本暂时不支持该参数配置为1。
    *
    * @return int|null
    */
    public function getMasterNodeNum()
    {
        return $this->container['masterNodeNum'];
    }

    /**
    * Sets masterNodeNum
    *
    * @param int|null $masterNodeNum Master节点数量。启用集群高可用功能时配置为2，不启用集群高可用功能时配置为1。MRS 3.x版本暂时不支持该参数配置为1。
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
    *  Core节点数量。  取值范围：[1～500]  Core节点默认的最大值为500，如果用户需要的Core节点数大于500，请申请扩大配额。
    *
    * @return int|null
    */
    public function getCoreNodeNum()
    {
        return $this->container['coreNodeNum'];
    }

    /**
    * Sets coreNodeNum
    *
    * @param int|null $coreNodeNum Core节点数量。  取值范围：[1～500]  Core节点默认的最大值为500，如果用户需要的Core节点数大于500，请申请扩大配额。
    *
    * @return $this
    */
    public function setCoreNodeNum($coreNodeNum)
    {
        $this->container['coreNodeNum'] = $coreNodeNum;
        return $this;
    }

    /**
    * Gets billingType
    *  集群的计费模式。  12：表示按需计费。接口调用仅支持创建按需计费集群。
    *
    * @return int
    */
    public function getBillingType()
    {
        return $this->container['billingType'];
    }

    /**
    * Sets billingType
    *
    * @param int $billingType 集群的计费模式。  12：表示按需计费。接口调用仅支持创建按需计费集群。
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
    *  集群区域信息，请参见[终端节点及区域](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
    *
    * @return string
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param string $dataCenter 集群区域信息，请参见[终端节点及区域](https://support.huaweicloud.com/api-mrs/mrs_02_0003.html)。
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
    *  子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。  在“虚拟私有云”页面的列表中即可获取VPC名称。
    *
    * @return string
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param string $vpc 子网所在VPC名称。 通过VPC管理控制台获取名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。  在“虚拟私有云”页面的列表中即可获取VPC名称。
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets masterNodeSize
    *  Master节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
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
    * @param string|null $masterNodeSize Master节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
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
    *  Core节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
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
    * @param string|null $coreNodeSize Core节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    *
    * @return $this
    */
    public function setCoreNodeSize($coreNodeSize)
    {
        $this->container['coreNodeSize'] = $coreNodeSize;
        return $this;
    }

    /**
    * Gets componentList
    *  服务组件安装列表信息。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\ComponentAmbV11[]
    */
    public function getComponentList()
    {
        return $this->container['componentList'];
    }

    /**
    * Sets componentList
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\ComponentAmbV11[] $componentList 服务组件安装列表信息。
    *
    * @return $this
    */
    public function setComponentList($componentList)
    {
        $this->container['componentList'] = $componentList;
        return $this;
    }

    /**
    * Gets availableZoneId
    *  可用分区ID。  - 华北-北京一可用区1（cn-north-1a）：ae04cf9d61544df3806a3feeb401b204 - 华北-北京一可用区2（cn-north-1b）：d573142f24894ef3bd3664de068b44b0 - 华东-上海二可用区1（cn-east-2a）：72d50cedc49846b9b42c21495f38d81c - 华东-上海二可用区2（cn-east-2b）：38b0f7a602344246bcb0da47b5d548e7 - 华东-上海二可用区3（cn-east-2c）：5547fd6bf8f84bb5a7f9db062ad3d015 - 华南-广州可用区1（cn-south-1a）：34f5ff4865cf4ed6b270f15382ebdec5 - 华南-广州可用区2（cn-south-2b）：043c7e39ecb347a08dc8fcb6c35a274e - 华南-广州可用区3（cn-south-1c）：af1687643e8c4ec1b34b688e4e3b8901 - 华北-北京四可用区1（cn-north-4a）：effdcbc7d4d64a02aa1fa26b42f56533 - 华北-北京四可用区2（cn-north-4b）：a0865121f83b41cbafce65930a22a6e8 - 华北-北京四可用区3（cn-north-4c）：2dcb154ac2724a6d92e9bcc859657c1e
    *
    * @return string
    */
    public function getAvailableZoneId()
    {
        return $this->container['availableZoneId'];
    }

    /**
    * Sets availableZoneId
    *
    * @param string $availableZoneId 可用分区ID。  - 华北-北京一可用区1（cn-north-1a）：ae04cf9d61544df3806a3feeb401b204 - 华北-北京一可用区2（cn-north-1b）：d573142f24894ef3bd3664de068b44b0 - 华东-上海二可用区1（cn-east-2a）：72d50cedc49846b9b42c21495f38d81c - 华东-上海二可用区2（cn-east-2b）：38b0f7a602344246bcb0da47b5d548e7 - 华东-上海二可用区3（cn-east-2c）：5547fd6bf8f84bb5a7f9db062ad3d015 - 华南-广州可用区1（cn-south-1a）：34f5ff4865cf4ed6b270f15382ebdec5 - 华南-广州可用区2（cn-south-2b）：043c7e39ecb347a08dc8fcb6c35a274e - 华南-广州可用区3（cn-south-1c）：af1687643e8c4ec1b34b688e4e3b8901 - 华北-北京四可用区1（cn-north-4a）：effdcbc7d4d64a02aa1fa26b42f56533 - 华北-北京四可用区2（cn-north-4b）：a0865121f83b41cbafce65930a22a6e8 - 华北-北京四可用区3（cn-north-4c）：2dcb154ac2724a6d92e9bcc859657c1e
    *
    * @return $this
    */
    public function setAvailableZoneId($availableZoneId)
    {
        $this->container['availableZoneId'] = $availableZoneId;
        return $this;
    }

    /**
    * Gets vpcId
    *  子网所在VPC ID。 通过VPC管理控制台获取ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。   在“虚拟私有云”页面的列表中即可获取VPC ID。
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
    * @param string $vpcId 子网所在VPC ID。 通过VPC管理控制台获取ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。   在“虚拟私有云”页面的列表中即可获取VPC ID。
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
    *  子网ID。通过VPC管理控制台获取子网ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
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
    * @param string $subnetId 子网ID。通过VPC管理控制台获取子网ID： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网。 4) 单击对应子网名称，获取“网络ID”。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。推荐使用“subnet_id”。
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
    *  子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
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
    * @param string $subnetName 子网名称。 通过VPC管理控制台获取子网名称： 1) 登录管理控制台。 2) 单击“虚拟私有云”，从左侧列表选择虚拟私有云。 3) 单击对应虚拟私有云所在行的“子网个数”查看子网，获取子网名称。  “subnet_id”和“subnet_name”必须至少填写一个，当这两个参数同时配置但是不匹配同一个子网时，集群会创建失败，请仔细填写参数。当仅填写“subnet_name”一个参数且VPC下存在同名子网时，创建集群时以VPC平台第一个名称的子网为准。推荐使用“subnet_id”。
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
    *  集群安全组的ID。 - 当该ID为空时MRS后台会自己创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中包含一条全部协议，全部端口，源地址为指定的管理面节点IP的入方向规则。
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
    * @param string|null $securityGroupsId 集群安全组的ID。 - 当该ID为空时MRS后台会自己创建安全组，自动创建的安全组名称以mrs_{cluster_name}开头。 - 当该ID不为空时，表示使用固定安全组来创建集群，传入的ID必须是当前租户中包含的安全组ID，且该安全组中包含一条全部协议，全部端口，源地址为指定的管理面节点IP的入方向规则。
    *
    * @return $this
    */
    public function setSecurityGroupsId($securityGroupsId)
    {
        $this->container['securityGroupsId'] = $securityGroupsId;
        return $this;
    }

    /**
    * Gets addJobs
    *  创建集群时可同时提交作业，当前版本暂时只支持新增一个作业。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\AddJobsReqV11[]|null
    */
    public function getAddJobs()
    {
        return $this->container['addJobs'];
    }

    /**
    * Sets addJobs
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\AddJobsReqV11[]|null $addJobs 创建集群时可同时提交作业，当前版本暂时只支持新增一个作业。
    *
    * @return $this
    */
    public function setAddJobs($addJobs)
    {
        $this->container['addJobs'] = $addJobs;
        return $this;
    }

    /**
    * Gets volumeSize
    *  Master和Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。可以根据如下应用场景合理选择磁盘存储空间大小： - 数据存储和计算分离，数据存储在OBS系统中，集群费用相对较低，计算性能不高，并且集群随时可以删除，建议数据计算不频繁场景下使用。 - 数据存储和计算不分离，数据存储在HDFS中，集群费用相对较高，计算性能高，集群需要长期存在，建议数据计算频繁场景下使用。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。 不建议使用该参数，详情请参考volume_type参数的说明。
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
    * @param int|null $volumeSize Master和Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。可以根据如下应用场景合理选择磁盘存储空间大小： - 数据存储和计算分离，数据存储在OBS系统中，集群费用相对较低，计算性能不高，并且集群随时可以删除，建议数据计算不频繁场景下使用。 - 数据存储和计算不分离，数据存储在HDFS中，集群费用相对较高，计算性能高，集群需要长期存在，建议数据计算频繁场景下使用。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。 不建议使用该参数，详情请参考volume_type参数的说明。
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
    *  Master和Core节点的磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。磁盘参数可以使用volume_type和volume_size表示，也可以使用多磁盘相关的参数表示。volume_type和volume_size这两个参数如果与多磁盘参数同时出现，系统优先读取volume_type和volume_size参数。建议使用多磁盘参数。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
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
    * @param string|null $volumeType Master和Core节点的磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。磁盘参数可以使用volume_type和volume_size表示，也可以使用多磁盘相关的参数表示。volume_type和volume_size这两个参数如果与多磁盘参数同时出现，系统优先读取volume_type和volume_size参数。建议使用多磁盘参数。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets masterDataVolumeType
    *  该参数为多磁盘参数，表示Master节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
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
    * @param string|null $masterDataVolumeType 该参数为多磁盘参数，表示Master节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
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
    *  该参数为多磁盘参数，表示Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
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
    * @param int|null $masterDataVolumeSize 该参数为多磁盘参数，表示Master节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
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
    *  该参数为多磁盘参数，表示Master节点数据磁盘个数。取值只能是1。
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
    * @param int|null $masterDataVolumeCount 该参数为多磁盘参数，表示Master节点数据磁盘个数。取值只能是1。
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
    *  该参数为多磁盘参数，表示Core节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
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
    * @param string|null $coreDataVolumeType 该参数为多磁盘参数，表示Core节点数据磁盘存储类别，目前支持SATA、SAS、SSD和GPSSD。
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
    *  该参数为多磁盘参数，表示Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
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
    * @param int|null $coreDataVolumeSize 该参数为多磁盘参数，表示Core节点数据磁盘存储空间。为增大数据存储容量，创建集群时可同时添加磁盘。  取值范围：100GB～32000GB，传值只需填数字，不需要带单位GB。
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
    *  该参数为多磁盘参数，表示Core节点数据磁盘个数。 取值范围：1～10
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
    * @param int|null $coreDataVolumeCount 该参数为多磁盘参数，表示Core节点数据磁盘个数。 取值范围：1～10
    *
    * @return $this
    */
    public function setCoreDataVolumeCount($coreDataVolumeCount)
    {
        $this->container['coreDataVolumeCount'] = $coreDataVolumeCount;
        return $this;
    }

    /**
    * Gets taskNodeGroups
    *  Task节点列表信息。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\TaskNodeGroup[]|null
    */
    public function getTaskNodeGroups()
    {
        return $this->container['taskNodeGroups'];
    }

    /**
    * Sets taskNodeGroups
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\TaskNodeGroup[]|null $taskNodeGroups Task节点列表信息。
    *
    * @return $this
    */
    public function setTaskNodeGroups($taskNodeGroups)
    {
        $this->container['taskNodeGroups'] = $taskNodeGroups;
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
    * Gets nodePublicCertName
    *  密钥对名称。用户可以使用密钥对方式登录集群节点。当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。
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
    * @param string|null $nodePublicCertName 密钥对名称。用户可以使用密钥对方式登录集群节点。当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。
    *
    * @return $this
    */
    public function setNodePublicCertName($nodePublicCertName)
    {
        $this->container['nodePublicCertName'] = $nodePublicCertName;
        return $this;
    }

    /**
    * Gets clusterAdminSecret
    *  配置MRS Manager管理员用户的密码。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合     - 至少一个小写字母     - 至少一个大写字母     - 至少一个数字     - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @return string|null
    */
    public function getClusterAdminSecret()
    {
        return $this->container['clusterAdminSecret'];
    }

    /**
    * Sets clusterAdminSecret
    *
    * @param string|null $clusterAdminSecret 配置MRS Manager管理员用户的密码。 - 密码长度应在8～26个字符之间 - 不能与用户名或者倒序用户名相同 - 必须包含如下4种字符的组合     - 至少一个小写字母     - 至少一个大写字母     - 至少一个数字     - 至少一个特殊字符：!@$%^-_=+[{}]:,./?
    *
    * @return $this
    */
    public function setClusterAdminSecret($clusterAdminSecret)
    {
        $this->container['clusterAdminSecret'] = $clusterAdminSecret;
        return $this;
    }

    /**
    * Gets clusterMasterSecret
    *  配置访问集群节点的root密码。当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。  密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含4种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    *
    * @return string|null
    */
    public function getClusterMasterSecret()
    {
        return $this->container['clusterMasterSecret'];
    }

    /**
    * Sets clusterMasterSecret
    *
    * @param string|null $clusterMasterSecret 配置访问集群节点的root密码。当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。  密码设置约束如下： - 字符串类型，可输入的字符串长度为8-26。 - 至少包含4种字符组合，如大写字母，小写字母，数字，特殊字符（!@$%^-_=+[{}]:,./?），但不能包含空格。 - 不能与用户名或者倒序用户名相同。
    *
    * @return $this
    */
    public function setClusterMasterSecret($clusterMasterSecret)
    {
        $this->container['clusterMasterSecret'] = $clusterMasterSecret;
        return $this;
    }

    /**
    * Gets safeMode
    *  MRS集群运行模式。 - 0：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - 1：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找MRS Manager的管理员分配权限。
    *
    * @return int
    */
    public function getSafeMode()
    {
        return $this->container['safeMode'];
    }

    /**
    * Sets safeMode
    *
    * @param int $safeMode MRS集群运行模式。 - 0：普通集群，表示Kerberos认证关闭，用户可使用集群提供的所有功能。 - 1：安全集群，表示Kerberos认证开启，普通用户无权限使用MRS集群的“文件管理”和“作业管理”功能，并且无法查看Hadoop、Spark的作业记录以及集群资源使用情况。如果需要使用集群更多功能，需要找MRS Manager的管理员分配权限。
    *
    * @return $this
    */
    public function setSafeMode($safeMode)
    {
        $this->container['safeMode'] = $safeMode;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型。  默认值为0：分析集群。  说明：暂不支持通过接口方式创建混合集群。  枚举值： - 0：分析集群 - 1：流式集群
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
    * @param int|null $clusterType 集群类型。  默认值为0：分析集群。  说明：暂不支持通过接口方式创建混合集群。  枚举值： - 0：分析集群 - 1：流式集群
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
    *  集群创建失败时，是否收集失败日志。  默认设置为1，将创建OBS桶仅用于MRS集群创建失败时的日志收集。  枚举值： - 0：不收集 - 1：收集
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
    * @param int|null $logCollection 集群创建失败时，是否收集失败日志。  默认设置为1，将创建OBS桶仅用于MRS集群创建失败时的日志收集。  枚举值： - 0：不收集 - 1：收集
    *
    * @return $this
    */
    public function setLogCollection($logCollection)
    {
        $this->container['logCollection'] = $logCollection;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。  创建集群时，给集群绑定企业项目ID。  默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
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
    * @param string|null $enterpriseProjectId 企业项目ID。  创建集群时，给集群绑定企业项目ID。  默认设置为0，表示为default企业项目。  获取方式请参见《企业管理API参考》的“查询企业项目列表”响应消息表“enterprise_project字段数据结构说明”的“id”。
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
    *  集群的标签信息。  同一个集群最多能使用10个tag，tag的名称（key）不能重复 标签的键/值不能包含“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\Tag[]|null $tags 集群的标签信息。  同一个集群最多能使用10个tag，tag的名称（key）不能重复 标签的键/值不能包含“=”,“*”,“<”,“>”,“\\”,“,”,“|”,“/”。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets loginMode
    *  集群登录方式。默认设置为1。  - 当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。 - 当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。  枚举值： - 0：密码方式 - 1：密钥对方式
    *
    * @return int|null
    */
    public function getLoginMode()
    {
        return $this->container['loginMode'];
    }

    /**
    * Sets loginMode
    *
    * @param int|null $loginMode 集群登录方式。默认设置为1。  - 当“login_mode”配置为“0”时，请求消息体中包含cluster_master_secret字段。 - 当“login_mode”配置为“1”时，请求消息体中包含node_public_cert_name字段。  枚举值： - 0：密码方式 - 1：密钥对方式
    *
    * @return $this
    */
    public function setLoginMode($loginMode)
    {
        $this->container['loginMode'] = $loginMode;
        return $this;
    }

    /**
    * Gets nodeGroups
    *  节点列表信息。  说明：如下参数和该参数任选一组进行配置即可。  master_node_num、master_node_size、core_node_num、core_node_size、master_data_volume_type、master_data_volume_size、master_data_volume_count、core_data_volume_type、core_data_volume_size、core_data_volume_count、volume_type、volume_size、task_node_groups。
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV11[]|null
    */
    public function getNodeGroups()
    {
        return $this->container['nodeGroups'];
    }

    /**
    * Sets nodeGroups
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\NodeGroupV11[]|null $nodeGroups 节点列表信息。  说明：如下参数和该参数任选一组进行配置即可。  master_node_num、master_node_size、core_node_num、core_node_size、master_data_volume_type、master_data_volume_size、master_data_volume_count、core_data_volume_type、core_data_volume_size、core_data_volume_count、volume_type、volume_size、task_node_groups。
    *
    * @return $this
    */
    public function setNodeGroups($nodeGroups)
    {
        $this->container['nodeGroups'] = $nodeGroups;
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

