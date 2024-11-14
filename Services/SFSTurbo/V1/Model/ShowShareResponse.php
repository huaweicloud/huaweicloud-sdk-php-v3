<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowShareResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowShareResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionProgress  actionProgress
    * version  SFS Turbo文件系统的版本号。
    * availCapacity  SFS Turbo文件系统剩余容量，单位GB。
    * availabilityZone  SFS Turbo文件系统所在可用区编码。
    * azName  SFS Turbo文件系统所在可用区名称。
    * createdAt  创建时间。UTC时间，例如：2018-11-19T04:02:03
    * cryptKeyId  用户指定的加密密钥ID，非加密盘时不返回。
    * expandType  如果是增强版文件系统，该字段返回bandwidth；如果是20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB，该字段返回hpc；否则不返回。
    * exportLocation  SFS Turbo文件系统的挂载端点。例如\"192.168.0.90:/\"。如果文件系统正在创建，该字段不返回。
    * id  SFS Turbo的文件系统ID。
    * name  创建时指定的SFS Turbo文件系统名称。
    * payModel  SFS Turbo文件系统的计费模式。'0'代表按需付费，'1'代表包周期计费。如果文件系统正在创建，该字段不返回。
    * region  SFS Turbo文件系统所在区域。
    * securityGroupId  用户指定的安全组ID。
    * shareProto  SFS Turbo文件系统的协议类型，当前为NFS
    * shareType  SFS Turbo文件系统性能类型，包括“STANDARD”标准型和“PERFORMANCE”性能型。
    * size  SFS Turbo文件系统总容量，单位GB。
    * status  SFS Turbo文件系统的状态。'100'表示创建中，'200'表示可用，'303'表示创建失败，'800'表示实例被冻结。
    * subStatus  SFS Turbo文件系统的子状态。当用户未对文件系统有修改类操作时，该字段不返回。 '121'表示扩容中；'132'表示修改安全组中；'137'表示添加VPC中；'138'表示删除VPC中；'150'表示配置联动后端中；'151'表示删除联动后端配置中。 '221'表示扩容成功；'232'表示修改安全组成功；'237'表示添加VPC成功；'238'表示删除VPC成功；'250'表示配置联动后端成功；'251'表示删除联动后端配置成功。 '321'表示扩容失败；'332'表示修改安全组失败；'337'表示添加VPC失败；'338'表示删除VPC失败；'350'表示配置联动后端失败；'351'表示删除联动后端配置失败。
    * subnetId  用户指定的子网的网络ID。
    * vpcId  用户指定的VPC ID。
    * enterpriseProjectId  SFS Turbo文件系统绑定的企业项目ID。
    * tags  tag标签的列表。
    * optionalEndpoint  可选的挂载IP地址。上一代文件系统规格类型不返回该字段。
    * hpcBw  文件系统的带宽规格。 - \"20M\"表示20MB/s/TiB - \"40M\"表示40MB/s/TiB - \"125M\"表示125MB/s/TiB - \"250M\"表示250MB/s/TiB - \"500M\"表示500MB/s/TiB  - \"1000M\"表示1000MB/s/TiB  - \"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"表示HPC缓存型的带宽规格。
    * instanceId  文件系统规格的节点id，为预留字段，不具备实际含义。
    * instanceType  文件系统规格的节点类型，为预留字段，不具备实际含义。
    * statusDetail  文件系统的请求ID，为预留字段，不具备实际含义。
    * features  features
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionProgress' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ActionProgress',
            'version' => 'string',
            'availCapacity' => 'string',
            'availabilityZone' => 'string',
            'azName' => 'string',
            'createdAt' => '\DateTime',
            'cryptKeyId' => 'string',
            'expandType' => 'string',
            'exportLocation' => 'string',
            'id' => 'string',
            'name' => 'string',
            'payModel' => 'string',
            'region' => 'string',
            'securityGroupId' => 'string',
            'shareProto' => 'string',
            'shareType' => 'string',
            'size' => 'string',
            'status' => 'string',
            'subStatus' => 'string',
            'subnetId' => 'string',
            'vpcId' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]',
            'optionalEndpoint' => 'string',
            'hpcBw' => 'string',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'statusDetail' => 'string',
            'features' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareInfoFeatures'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionProgress  actionProgress
    * version  SFS Turbo文件系统的版本号。
    * availCapacity  SFS Turbo文件系统剩余容量，单位GB。
    * availabilityZone  SFS Turbo文件系统所在可用区编码。
    * azName  SFS Turbo文件系统所在可用区名称。
    * createdAt  创建时间。UTC时间，例如：2018-11-19T04:02:03
    * cryptKeyId  用户指定的加密密钥ID，非加密盘时不返回。
    * expandType  如果是增强版文件系统，该字段返回bandwidth；如果是20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB，该字段返回hpc；否则不返回。
    * exportLocation  SFS Turbo文件系统的挂载端点。例如\"192.168.0.90:/\"。如果文件系统正在创建，该字段不返回。
    * id  SFS Turbo的文件系统ID。
    * name  创建时指定的SFS Turbo文件系统名称。
    * payModel  SFS Turbo文件系统的计费模式。'0'代表按需付费，'1'代表包周期计费。如果文件系统正在创建，该字段不返回。
    * region  SFS Turbo文件系统所在区域。
    * securityGroupId  用户指定的安全组ID。
    * shareProto  SFS Turbo文件系统的协议类型，当前为NFS
    * shareType  SFS Turbo文件系统性能类型，包括“STANDARD”标准型和“PERFORMANCE”性能型。
    * size  SFS Turbo文件系统总容量，单位GB。
    * status  SFS Turbo文件系统的状态。'100'表示创建中，'200'表示可用，'303'表示创建失败，'800'表示实例被冻结。
    * subStatus  SFS Turbo文件系统的子状态。当用户未对文件系统有修改类操作时，该字段不返回。 '121'表示扩容中；'132'表示修改安全组中；'137'表示添加VPC中；'138'表示删除VPC中；'150'表示配置联动后端中；'151'表示删除联动后端配置中。 '221'表示扩容成功；'232'表示修改安全组成功；'237'表示添加VPC成功；'238'表示删除VPC成功；'250'表示配置联动后端成功；'251'表示删除联动后端配置成功。 '321'表示扩容失败；'332'表示修改安全组失败；'337'表示添加VPC失败；'338'表示删除VPC失败；'350'表示配置联动后端失败；'351'表示删除联动后端配置失败。
    * subnetId  用户指定的子网的网络ID。
    * vpcId  用户指定的VPC ID。
    * enterpriseProjectId  SFS Turbo文件系统绑定的企业项目ID。
    * tags  tag标签的列表。
    * optionalEndpoint  可选的挂载IP地址。上一代文件系统规格类型不返回该字段。
    * hpcBw  文件系统的带宽规格。 - \"20M\"表示20MB/s/TiB - \"40M\"表示40MB/s/TiB - \"125M\"表示125MB/s/TiB - \"250M\"表示250MB/s/TiB - \"500M\"表示500MB/s/TiB  - \"1000M\"表示1000MB/s/TiB  - \"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"表示HPC缓存型的带宽规格。
    * instanceId  文件系统规格的节点id，为预留字段，不具备实际含义。
    * instanceType  文件系统规格的节点类型，为预留字段，不具备实际含义。
    * statusDetail  文件系统的请求ID，为预留字段，不具备实际含义。
    * features  features
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionProgress' => null,
        'version' => null,
        'availCapacity' => null,
        'availabilityZone' => null,
        'azName' => null,
        'createdAt' => 'date-time',
        'cryptKeyId' => null,
        'expandType' => null,
        'exportLocation' => null,
        'id' => null,
        'name' => null,
        'payModel' => null,
        'region' => null,
        'securityGroupId' => null,
        'shareProto' => null,
        'shareType' => null,
        'size' => null,
        'status' => null,
        'subStatus' => null,
        'subnetId' => null,
        'vpcId' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'optionalEndpoint' => null,
        'hpcBw' => null,
        'instanceId' => null,
        'instanceType' => null,
        'statusDetail' => null,
        'features' => null
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
    * actionProgress  actionProgress
    * version  SFS Turbo文件系统的版本号。
    * availCapacity  SFS Turbo文件系统剩余容量，单位GB。
    * availabilityZone  SFS Turbo文件系统所在可用区编码。
    * azName  SFS Turbo文件系统所在可用区名称。
    * createdAt  创建时间。UTC时间，例如：2018-11-19T04:02:03
    * cryptKeyId  用户指定的加密密钥ID，非加密盘时不返回。
    * expandType  如果是增强版文件系统，该字段返回bandwidth；如果是20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB，该字段返回hpc；否则不返回。
    * exportLocation  SFS Turbo文件系统的挂载端点。例如\"192.168.0.90:/\"。如果文件系统正在创建，该字段不返回。
    * id  SFS Turbo的文件系统ID。
    * name  创建时指定的SFS Turbo文件系统名称。
    * payModel  SFS Turbo文件系统的计费模式。'0'代表按需付费，'1'代表包周期计费。如果文件系统正在创建，该字段不返回。
    * region  SFS Turbo文件系统所在区域。
    * securityGroupId  用户指定的安全组ID。
    * shareProto  SFS Turbo文件系统的协议类型，当前为NFS
    * shareType  SFS Turbo文件系统性能类型，包括“STANDARD”标准型和“PERFORMANCE”性能型。
    * size  SFS Turbo文件系统总容量，单位GB。
    * status  SFS Turbo文件系统的状态。'100'表示创建中，'200'表示可用，'303'表示创建失败，'800'表示实例被冻结。
    * subStatus  SFS Turbo文件系统的子状态。当用户未对文件系统有修改类操作时，该字段不返回。 '121'表示扩容中；'132'表示修改安全组中；'137'表示添加VPC中；'138'表示删除VPC中；'150'表示配置联动后端中；'151'表示删除联动后端配置中。 '221'表示扩容成功；'232'表示修改安全组成功；'237'表示添加VPC成功；'238'表示删除VPC成功；'250'表示配置联动后端成功；'251'表示删除联动后端配置成功。 '321'表示扩容失败；'332'表示修改安全组失败；'337'表示添加VPC失败；'338'表示删除VPC失败；'350'表示配置联动后端失败；'351'表示删除联动后端配置失败。
    * subnetId  用户指定的子网的网络ID。
    * vpcId  用户指定的VPC ID。
    * enterpriseProjectId  SFS Turbo文件系统绑定的企业项目ID。
    * tags  tag标签的列表。
    * optionalEndpoint  可选的挂载IP地址。上一代文件系统规格类型不返回该字段。
    * hpcBw  文件系统的带宽规格。 - \"20M\"表示20MB/s/TiB - \"40M\"表示40MB/s/TiB - \"125M\"表示125MB/s/TiB - \"250M\"表示250MB/s/TiB - \"500M\"表示500MB/s/TiB  - \"1000M\"表示1000MB/s/TiB  - \"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"表示HPC缓存型的带宽规格。
    * instanceId  文件系统规格的节点id，为预留字段，不具备实际含义。
    * instanceType  文件系统规格的节点类型，为预留字段，不具备实际含义。
    * statusDetail  文件系统的请求ID，为预留字段，不具备实际含义。
    * features  features
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionProgress' => 'action_progress',
            'version' => 'version',
            'availCapacity' => 'avail_capacity',
            'availabilityZone' => 'availability_zone',
            'azName' => 'az_name',
            'createdAt' => 'created_at',
            'cryptKeyId' => 'crypt_key_id',
            'expandType' => 'expand_type',
            'exportLocation' => 'export_location',
            'id' => 'id',
            'name' => 'name',
            'payModel' => 'pay_model',
            'region' => 'region',
            'securityGroupId' => 'security_group_id',
            'shareProto' => 'share_proto',
            'shareType' => 'share_type',
            'size' => 'size',
            'status' => 'status',
            'subStatus' => 'sub_status',
            'subnetId' => 'subnet_id',
            'vpcId' => 'vpc_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'optionalEndpoint' => 'optional_endpoint',
            'hpcBw' => 'hpc_bw',
            'instanceId' => 'instanceId',
            'instanceType' => 'instanceType',
            'statusDetail' => 'statusDetail',
            'features' => 'features'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionProgress  actionProgress
    * version  SFS Turbo文件系统的版本号。
    * availCapacity  SFS Turbo文件系统剩余容量，单位GB。
    * availabilityZone  SFS Turbo文件系统所在可用区编码。
    * azName  SFS Turbo文件系统所在可用区名称。
    * createdAt  创建时间。UTC时间，例如：2018-11-19T04:02:03
    * cryptKeyId  用户指定的加密密钥ID，非加密盘时不返回。
    * expandType  如果是增强版文件系统，该字段返回bandwidth；如果是20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB，该字段返回hpc；否则不返回。
    * exportLocation  SFS Turbo文件系统的挂载端点。例如\"192.168.0.90:/\"。如果文件系统正在创建，该字段不返回。
    * id  SFS Turbo的文件系统ID。
    * name  创建时指定的SFS Turbo文件系统名称。
    * payModel  SFS Turbo文件系统的计费模式。'0'代表按需付费，'1'代表包周期计费。如果文件系统正在创建，该字段不返回。
    * region  SFS Turbo文件系统所在区域。
    * securityGroupId  用户指定的安全组ID。
    * shareProto  SFS Turbo文件系统的协议类型，当前为NFS
    * shareType  SFS Turbo文件系统性能类型，包括“STANDARD”标准型和“PERFORMANCE”性能型。
    * size  SFS Turbo文件系统总容量，单位GB。
    * status  SFS Turbo文件系统的状态。'100'表示创建中，'200'表示可用，'303'表示创建失败，'800'表示实例被冻结。
    * subStatus  SFS Turbo文件系统的子状态。当用户未对文件系统有修改类操作时，该字段不返回。 '121'表示扩容中；'132'表示修改安全组中；'137'表示添加VPC中；'138'表示删除VPC中；'150'表示配置联动后端中；'151'表示删除联动后端配置中。 '221'表示扩容成功；'232'表示修改安全组成功；'237'表示添加VPC成功；'238'表示删除VPC成功；'250'表示配置联动后端成功；'251'表示删除联动后端配置成功。 '321'表示扩容失败；'332'表示修改安全组失败；'337'表示添加VPC失败；'338'表示删除VPC失败；'350'表示配置联动后端失败；'351'表示删除联动后端配置失败。
    * subnetId  用户指定的子网的网络ID。
    * vpcId  用户指定的VPC ID。
    * enterpriseProjectId  SFS Turbo文件系统绑定的企业项目ID。
    * tags  tag标签的列表。
    * optionalEndpoint  可选的挂载IP地址。上一代文件系统规格类型不返回该字段。
    * hpcBw  文件系统的带宽规格。 - \"20M\"表示20MB/s/TiB - \"40M\"表示40MB/s/TiB - \"125M\"表示125MB/s/TiB - \"250M\"表示250MB/s/TiB - \"500M\"表示500MB/s/TiB  - \"1000M\"表示1000MB/s/TiB  - \"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"表示HPC缓存型的带宽规格。
    * instanceId  文件系统规格的节点id，为预留字段，不具备实际含义。
    * instanceType  文件系统规格的节点类型，为预留字段，不具备实际含义。
    * statusDetail  文件系统的请求ID，为预留字段，不具备实际含义。
    * features  features
    *
    * @var string[]
    */
    protected static $setters = [
            'actionProgress' => 'setActionProgress',
            'version' => 'setVersion',
            'availCapacity' => 'setAvailCapacity',
            'availabilityZone' => 'setAvailabilityZone',
            'azName' => 'setAzName',
            'createdAt' => 'setCreatedAt',
            'cryptKeyId' => 'setCryptKeyId',
            'expandType' => 'setExpandType',
            'exportLocation' => 'setExportLocation',
            'id' => 'setId',
            'name' => 'setName',
            'payModel' => 'setPayModel',
            'region' => 'setRegion',
            'securityGroupId' => 'setSecurityGroupId',
            'shareProto' => 'setShareProto',
            'shareType' => 'setShareType',
            'size' => 'setSize',
            'status' => 'setStatus',
            'subStatus' => 'setSubStatus',
            'subnetId' => 'setSubnetId',
            'vpcId' => 'setVpcId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'optionalEndpoint' => 'setOptionalEndpoint',
            'hpcBw' => 'setHpcBw',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'statusDetail' => 'setStatusDetail',
            'features' => 'setFeatures'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionProgress  actionProgress
    * version  SFS Turbo文件系统的版本号。
    * availCapacity  SFS Turbo文件系统剩余容量，单位GB。
    * availabilityZone  SFS Turbo文件系统所在可用区编码。
    * azName  SFS Turbo文件系统所在可用区名称。
    * createdAt  创建时间。UTC时间，例如：2018-11-19T04:02:03
    * cryptKeyId  用户指定的加密密钥ID，非加密盘时不返回。
    * expandType  如果是增强版文件系统，该字段返回bandwidth；如果是20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB，该字段返回hpc；否则不返回。
    * exportLocation  SFS Turbo文件系统的挂载端点。例如\"192.168.0.90:/\"。如果文件系统正在创建，该字段不返回。
    * id  SFS Turbo的文件系统ID。
    * name  创建时指定的SFS Turbo文件系统名称。
    * payModel  SFS Turbo文件系统的计费模式。'0'代表按需付费，'1'代表包周期计费。如果文件系统正在创建，该字段不返回。
    * region  SFS Turbo文件系统所在区域。
    * securityGroupId  用户指定的安全组ID。
    * shareProto  SFS Turbo文件系统的协议类型，当前为NFS
    * shareType  SFS Turbo文件系统性能类型，包括“STANDARD”标准型和“PERFORMANCE”性能型。
    * size  SFS Turbo文件系统总容量，单位GB。
    * status  SFS Turbo文件系统的状态。'100'表示创建中，'200'表示可用，'303'表示创建失败，'800'表示实例被冻结。
    * subStatus  SFS Turbo文件系统的子状态。当用户未对文件系统有修改类操作时，该字段不返回。 '121'表示扩容中；'132'表示修改安全组中；'137'表示添加VPC中；'138'表示删除VPC中；'150'表示配置联动后端中；'151'表示删除联动后端配置中。 '221'表示扩容成功；'232'表示修改安全组成功；'237'表示添加VPC成功；'238'表示删除VPC成功；'250'表示配置联动后端成功；'251'表示删除联动后端配置成功。 '321'表示扩容失败；'332'表示修改安全组失败；'337'表示添加VPC失败；'338'表示删除VPC失败；'350'表示配置联动后端失败；'351'表示删除联动后端配置失败。
    * subnetId  用户指定的子网的网络ID。
    * vpcId  用户指定的VPC ID。
    * enterpriseProjectId  SFS Turbo文件系统绑定的企业项目ID。
    * tags  tag标签的列表。
    * optionalEndpoint  可选的挂载IP地址。上一代文件系统规格类型不返回该字段。
    * hpcBw  文件系统的带宽规格。 - \"20M\"表示20MB/s/TiB - \"40M\"表示40MB/s/TiB - \"125M\"表示125MB/s/TiB - \"250M\"表示250MB/s/TiB - \"500M\"表示500MB/s/TiB  - \"1000M\"表示1000MB/s/TiB  - \"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"表示HPC缓存型的带宽规格。
    * instanceId  文件系统规格的节点id，为预留字段，不具备实际含义。
    * instanceType  文件系统规格的节点类型，为预留字段，不具备实际含义。
    * statusDetail  文件系统的请求ID，为预留字段，不具备实际含义。
    * features  features
    *
    * @var string[]
    */
    protected static $getters = [
            'actionProgress' => 'getActionProgress',
            'version' => 'getVersion',
            'availCapacity' => 'getAvailCapacity',
            'availabilityZone' => 'getAvailabilityZone',
            'azName' => 'getAzName',
            'createdAt' => 'getCreatedAt',
            'cryptKeyId' => 'getCryptKeyId',
            'expandType' => 'getExpandType',
            'exportLocation' => 'getExportLocation',
            'id' => 'getId',
            'name' => 'getName',
            'payModel' => 'getPayModel',
            'region' => 'getRegion',
            'securityGroupId' => 'getSecurityGroupId',
            'shareProto' => 'getShareProto',
            'shareType' => 'getShareType',
            'size' => 'getSize',
            'status' => 'getStatus',
            'subStatus' => 'getSubStatus',
            'subnetId' => 'getSubnetId',
            'vpcId' => 'getVpcId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'optionalEndpoint' => 'getOptionalEndpoint',
            'hpcBw' => 'getHpcBw',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'statusDetail' => 'getStatusDetail',
            'features' => 'getFeatures'
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
    const PAY_MODEL__0 = '0';
    const PAY_MODEL__1 = '1';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPayModelAllowableValues()
    {
        return [
            self::PAY_MODEL__0,
            self::PAY_MODEL__1,
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
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['availCapacity'] = isset($data['availCapacity']) ? $data['availCapacity'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['azName'] = isset($data['azName']) ? $data['azName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['cryptKeyId'] = isset($data['cryptKeyId']) ? $data['cryptKeyId'] : null;
        $this->container['expandType'] = isset($data['expandType']) ? $data['expandType'] : null;
        $this->container['exportLocation'] = isset($data['exportLocation']) ? $data['exportLocation'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['shareProto'] = isset($data['shareProto']) ? $data['shareProto'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subStatus'] = isset($data['subStatus']) ? $data['subStatus'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['optionalEndpoint'] = isset($data['optionalEndpoint']) ? $data['optionalEndpoint'] : null;
        $this->container['hpcBw'] = isset($data['hpcBw']) ? $data['hpcBw'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['statusDetail'] = isset($data['statusDetail']) ? $data['statusDetail'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPayModelAllowableValues();
                if (!is_null($this->container['payModel']) && !in_array($this->container['payModel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'payModel', must be one of '%s'",
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
    * Gets actionProgress
    *  actionProgress
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ActionProgress|null
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ActionProgress|null $actionProgress actionProgress
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets version
    *  SFS Turbo文件系统的版本号。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version SFS Turbo文件系统的版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets availCapacity
    *  SFS Turbo文件系统剩余容量，单位GB。
    *
    * @return string|null
    */
    public function getAvailCapacity()
    {
        return $this->container['availCapacity'];
    }

    /**
    * Sets availCapacity
    *
    * @param string|null $availCapacity SFS Turbo文件系统剩余容量，单位GB。
    *
    * @return $this
    */
    public function setAvailCapacity($availCapacity)
    {
        $this->container['availCapacity'] = $availCapacity;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  SFS Turbo文件系统所在可用区编码。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone SFS Turbo文件系统所在可用区编码。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets azName
    *  SFS Turbo文件系统所在可用区名称。
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
    * @param string|null $azName SFS Turbo文件系统所在可用区名称。
    *
    * @return $this
    */
    public function setAzName($azName)
    {
        $this->container['azName'] = $azName;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。UTC时间，例如：2018-11-19T04:02:03
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间。UTC时间，例如：2018-11-19T04:02:03
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets cryptKeyId
    *  用户指定的加密密钥ID，非加密盘时不返回。
    *
    * @return string|null
    */
    public function getCryptKeyId()
    {
        return $this->container['cryptKeyId'];
    }

    /**
    * Sets cryptKeyId
    *
    * @param string|null $cryptKeyId 用户指定的加密密钥ID，非加密盘时不返回。
    *
    * @return $this
    */
    public function setCryptKeyId($cryptKeyId)
    {
        $this->container['cryptKeyId'] = $cryptKeyId;
        return $this;
    }

    /**
    * Gets expandType
    *  如果是增强版文件系统，该字段返回bandwidth；如果是20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB，该字段返回hpc；否则不返回。
    *
    * @return string|null
    */
    public function getExpandType()
    {
        return $this->container['expandType'];
    }

    /**
    * Sets expandType
    *
    * @param string|null $expandType 如果是增强版文件系统，该字段返回bandwidth；如果是20MB/s/TiB、40MB/s/TiB、125MB/s/TiB、250MB/s/TiB、500MB/s/TiB、1000MB/s/TiB，该字段返回hpc；否则不返回。
    *
    * @return $this
    */
    public function setExpandType($expandType)
    {
        $this->container['expandType'] = $expandType;
        return $this;
    }

    /**
    * Gets exportLocation
    *  SFS Turbo文件系统的挂载端点。例如\"192.168.0.90:/\"。如果文件系统正在创建，该字段不返回。
    *
    * @return string|null
    */
    public function getExportLocation()
    {
        return $this->container['exportLocation'];
    }

    /**
    * Sets exportLocation
    *
    * @param string|null $exportLocation SFS Turbo文件系统的挂载端点。例如\"192.168.0.90:/\"。如果文件系统正在创建，该字段不返回。
    *
    * @return $this
    */
    public function setExportLocation($exportLocation)
    {
        $this->container['exportLocation'] = $exportLocation;
        return $this;
    }

    /**
    * Gets id
    *  SFS Turbo的文件系统ID。
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
    * @param string|null $id SFS Turbo的文件系统ID。
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
    *  创建时指定的SFS Turbo文件系统名称。
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
    * @param string|null $name 创建时指定的SFS Turbo文件系统名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets payModel
    *  SFS Turbo文件系统的计费模式。'0'代表按需付费，'1'代表包周期计费。如果文件系统正在创建，该字段不返回。
    *
    * @return string|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string|null $payModel SFS Turbo文件系统的计费模式。'0'代表按需付费，'1'代表包周期计费。如果文件系统正在创建，该字段不返回。
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets region
    *  SFS Turbo文件系统所在区域。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region SFS Turbo文件系统所在区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  用户指定的安全组ID。
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
    * @param string|null $securityGroupId 用户指定的安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets shareProto
    *  SFS Turbo文件系统的协议类型，当前为NFS
    *
    * @return string|null
    */
    public function getShareProto()
    {
        return $this->container['shareProto'];
    }

    /**
    * Sets shareProto
    *
    * @param string|null $shareProto SFS Turbo文件系统的协议类型，当前为NFS
    *
    * @return $this
    */
    public function setShareProto($shareProto)
    {
        $this->container['shareProto'] = $shareProto;
        return $this;
    }

    /**
    * Gets shareType
    *  SFS Turbo文件系统性能类型，包括“STANDARD”标准型和“PERFORMANCE”性能型。
    *
    * @return string|null
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string|null $shareType SFS Turbo文件系统性能类型，包括“STANDARD”标准型和“PERFORMANCE”性能型。
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets size
    *  SFS Turbo文件系统总容量，单位GB。
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size SFS Turbo文件系统总容量，单位GB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  SFS Turbo文件系统的状态。'100'表示创建中，'200'表示可用，'303'表示创建失败，'800'表示实例被冻结。
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
    * @param string|null $status SFS Turbo文件系统的状态。'100'表示创建中，'200'表示可用，'303'表示创建失败，'800'表示实例被冻结。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subStatus
    *  SFS Turbo文件系统的子状态。当用户未对文件系统有修改类操作时，该字段不返回。 '121'表示扩容中；'132'表示修改安全组中；'137'表示添加VPC中；'138'表示删除VPC中；'150'表示配置联动后端中；'151'表示删除联动后端配置中。 '221'表示扩容成功；'232'表示修改安全组成功；'237'表示添加VPC成功；'238'表示删除VPC成功；'250'表示配置联动后端成功；'251'表示删除联动后端配置成功。 '321'表示扩容失败；'332'表示修改安全组失败；'337'表示添加VPC失败；'338'表示删除VPC失败；'350'表示配置联动后端失败；'351'表示删除联动后端配置失败。
    *
    * @return string|null
    */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
    * Sets subStatus
    *
    * @param string|null $subStatus SFS Turbo文件系统的子状态。当用户未对文件系统有修改类操作时，该字段不返回。 '121'表示扩容中；'132'表示修改安全组中；'137'表示添加VPC中；'138'表示删除VPC中；'150'表示配置联动后端中；'151'表示删除联动后端配置中。 '221'表示扩容成功；'232'表示修改安全组成功；'237'表示添加VPC成功；'238'表示删除VPC成功；'250'表示配置联动后端成功；'251'表示删除联动后端配置成功。 '321'表示扩容失败；'332'表示修改安全组失败；'337'表示添加VPC失败；'338'表示删除VPC失败；'350'表示配置联动后端失败；'351'表示删除联动后端配置失败。
    *
    * @return $this
    */
    public function setSubStatus($subStatus)
    {
        $this->container['subStatus'] = $subStatus;
        return $this;
    }

    /**
    * Gets subnetId
    *  用户指定的子网的网络ID。
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
    * @param string|null $subnetId 用户指定的子网的网络ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  用户指定的VPC ID。
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
    * @param string|null $vpcId 用户指定的VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  SFS Turbo文件系统绑定的企业项目ID。
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
    * @param string|null $enterpriseProjectId SFS Turbo文件系统绑定的企业项目ID。
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
    *  tag标签的列表。
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null $tags tag标签的列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets optionalEndpoint
    *  可选的挂载IP地址。上一代文件系统规格类型不返回该字段。
    *
    * @return string|null
    */
    public function getOptionalEndpoint()
    {
        return $this->container['optionalEndpoint'];
    }

    /**
    * Sets optionalEndpoint
    *
    * @param string|null $optionalEndpoint 可选的挂载IP地址。上一代文件系统规格类型不返回该字段。
    *
    * @return $this
    */
    public function setOptionalEndpoint($optionalEndpoint)
    {
        $this->container['optionalEndpoint'] = $optionalEndpoint;
        return $this;
    }

    /**
    * Gets hpcBw
    *  文件系统的带宽规格。 - \"20M\"表示20MB/s/TiB - \"40M\"表示40MB/s/TiB - \"125M\"表示125MB/s/TiB - \"250M\"表示250MB/s/TiB - \"500M\"表示500MB/s/TiB  - \"1000M\"表示1000MB/s/TiB  - \"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"表示HPC缓存型的带宽规格。
    *
    * @return string|null
    */
    public function getHpcBw()
    {
        return $this->container['hpcBw'];
    }

    /**
    * Sets hpcBw
    *
    * @param string|null $hpcBw 文件系统的带宽规格。 - \"20M\"表示20MB/s/TiB - \"40M\"表示40MB/s/TiB - \"125M\"表示125MB/s/TiB - \"250M\"表示250MB/s/TiB - \"500M\"表示500MB/s/TiB  - \"1000M\"表示1000MB/s/TiB  - \"2G\"、\"4G\"、\"8G\"、\"16G\"、\"24G\"、\"32G\"或\"48G\"表示HPC缓存型的带宽规格。
    *
    * @return $this
    */
    public function setHpcBw($hpcBw)
    {
        $this->container['hpcBw'] = $hpcBw;
        return $this;
    }

    /**
    * Gets instanceId
    *  文件系统规格的节点id，为预留字段，不具备实际含义。
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
    * @param string|null $instanceId 文件系统规格的节点id，为预留字段，不具备实际含义。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  文件系统规格的节点类型，为预留字段，不具备实际含义。
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
    * @param string|null $instanceType 文件系统规格的节点类型，为预留字段，不具备实际含义。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets statusDetail
    *  文件系统的请求ID，为预留字段，不具备实际含义。
    *
    * @return string|null
    */
    public function getStatusDetail()
    {
        return $this->container['statusDetail'];
    }

    /**
    * Sets statusDetail
    *
    * @param string|null $statusDetail 文件系统的请求ID，为预留字段，不具备实际含义。
    *
    * @return $this
    */
    public function setStatusDetail($statusDetail)
    {
        $this->container['statusDetail'] = $statusDetail;
        return $this;
    }

    /**
    * Gets features
    *  features
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareInfoFeatures|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareInfoFeatures|null $features features
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
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

