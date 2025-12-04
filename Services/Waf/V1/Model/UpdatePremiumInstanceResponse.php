<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePremiumInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePremiumInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 独享引擎ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instancename  **参数解释：** 独享引擎名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serverId  **参数解释：** 独享引擎ECS ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** Region代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * zone  **参数解释：** 可用区代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * arch  **参数解释：** CPU架构代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cpuFlavor  **参数解释：** ECS规格代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vpcId  **参数解释：** 独享引擎所在VPC ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subnetId  **参数解释：** 独享引擎所在VPC的子网ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIp  **参数解释：** 独享引擎的业务面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIpv6  **参数解释：** 独享引擎的业务面IPV6地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * floatIp  **参数解释：** 独享引擎的管理面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityGroupIds  **参数解释：** 独享引擎ECS绑定的安全组 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  **参数解释：** 独享引擎是否可升级（0：不可升级，1：可升级） **约束限制：** 不涉及 **取值范围：**  - 0: 不可升级  - 1: 可升级  **默认取值：** 不涉及
    * cloudServiceType  **参数解释：** 云服务代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceType  **参数解释：** 云服务资源类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceSpecCode  **参数解释：** 云服务资源代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * specification  **参数解释：** 独享引擎ECS规格，如\"8vCPUs | 16GB\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 独享引擎防护的域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * volumeType  **参数解释：** 存储类型（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 存储资源池ID（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * poolId  **参数解释：** 独享引擎所在WAF组的ID（仅适用特殊独享模式） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chargeMode  **参数解释：** '计费模式。0: 包周期；1:按需' **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instancename' => 'string',
            'serverId' => 'string',
            'region' => 'string',
            'zone' => 'string',
            'arch' => 'string',
            'cpuFlavor' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'serviceIp' => 'string',
            'serviceIpv6' => 'string',
            'floatIp' => 'string',
            'securityGroupIds' => 'string[]',
            'status' => 'int',
            'runStatus' => 'int',
            'accessStatus' => 'int',
            'upgradable' => 'int',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'specification' => 'string',
            'hosts' => '\HuaweiCloud\SDK\Waf\V1\Model\IdHostnameEntry[]',
            'volumeType' => 'string',
            'clusterId' => 'string',
            'poolId' => 'string',
            'chargeMode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 独享引擎ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instancename  **参数解释：** 独享引擎名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serverId  **参数解释：** 独享引擎ECS ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** Region代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * zone  **参数解释：** 可用区代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * arch  **参数解释：** CPU架构代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cpuFlavor  **参数解释：** ECS规格代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vpcId  **参数解释：** 独享引擎所在VPC ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subnetId  **参数解释：** 独享引擎所在VPC的子网ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIp  **参数解释：** 独享引擎的业务面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIpv6  **参数解释：** 独享引擎的业务面IPV6地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * floatIp  **参数解释：** 独享引擎的管理面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityGroupIds  **参数解释：** 独享引擎ECS绑定的安全组 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  **参数解释：** 独享引擎是否可升级（0：不可升级，1：可升级） **约束限制：** 不涉及 **取值范围：**  - 0: 不可升级  - 1: 可升级  **默认取值：** 不涉及
    * cloudServiceType  **参数解释：** 云服务代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceType  **参数解释：** 云服务资源类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceSpecCode  **参数解释：** 云服务资源代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * specification  **参数解释：** 独享引擎ECS规格，如\"8vCPUs | 16GB\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 独享引擎防护的域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * volumeType  **参数解释：** 存储类型（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 存储资源池ID（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * poolId  **参数解释：** 独享引擎所在WAF组的ID（仅适用特殊独享模式） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chargeMode  **参数解释：** '计费模式。0: 包周期；1:按需' **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instancename' => null,
        'serverId' => null,
        'region' => null,
        'zone' => null,
        'arch' => null,
        'cpuFlavor' => null,
        'vpcId' => null,
        'subnetId' => null,
        'serviceIp' => null,
        'serviceIpv6' => null,
        'floatIp' => null,
        'securityGroupIds' => null,
        'status' => 'int32',
        'runStatus' => 'int32',
        'accessStatus' => 'int32',
        'upgradable' => 'int32',
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpecCode' => null,
        'specification' => null,
        'hosts' => null,
        'volumeType' => null,
        'clusterId' => null,
        'poolId' => null,
        'chargeMode' => 'int32'
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
    * id  **参数解释：** 独享引擎ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instancename  **参数解释：** 独享引擎名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serverId  **参数解释：** 独享引擎ECS ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** Region代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * zone  **参数解释：** 可用区代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * arch  **参数解释：** CPU架构代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cpuFlavor  **参数解释：** ECS规格代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vpcId  **参数解释：** 独享引擎所在VPC ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subnetId  **参数解释：** 独享引擎所在VPC的子网ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIp  **参数解释：** 独享引擎的业务面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIpv6  **参数解释：** 独享引擎的业务面IPV6地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * floatIp  **参数解释：** 独享引擎的管理面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityGroupIds  **参数解释：** 独享引擎ECS绑定的安全组 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  **参数解释：** 独享引擎是否可升级（0：不可升级，1：可升级） **约束限制：** 不涉及 **取值范围：**  - 0: 不可升级  - 1: 可升级  **默认取值：** 不涉及
    * cloudServiceType  **参数解释：** 云服务代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceType  **参数解释：** 云服务资源类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceSpecCode  **参数解释：** 云服务资源代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * specification  **参数解释：** 独享引擎ECS规格，如\"8vCPUs | 16GB\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 独享引擎防护的域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * volumeType  **参数解释：** 存储类型（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 存储资源池ID（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * poolId  **参数解释：** 独享引擎所在WAF组的ID（仅适用特殊独享模式） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chargeMode  **参数解释：** '计费模式。0: 包周期；1:按需' **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instancename' => 'instancename',
            'serverId' => 'serverId',
            'region' => 'region',
            'zone' => 'zone',
            'arch' => 'arch',
            'cpuFlavor' => 'cpu_flavor',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'serviceIp' => 'service_ip',
            'serviceIpv6' => 'service_ipv6',
            'floatIp' => 'floatIp',
            'securityGroupIds' => 'security_group_ids',
            'status' => 'status',
            'runStatus' => 'run_status',
            'accessStatus' => 'access_status',
            'upgradable' => 'upgradable',
            'cloudServiceType' => 'cloudServiceType',
            'resourceType' => 'resourceType',
            'resourceSpecCode' => 'resourceSpecCode',
            'specification' => 'specification',
            'hosts' => 'hosts',
            'volumeType' => 'volume_type',
            'clusterId' => 'cluster_id',
            'poolId' => 'pool_id',
            'chargeMode' => 'charge_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 独享引擎ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instancename  **参数解释：** 独享引擎名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serverId  **参数解释：** 独享引擎ECS ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** Region代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * zone  **参数解释：** 可用区代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * arch  **参数解释：** CPU架构代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cpuFlavor  **参数解释：** ECS规格代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vpcId  **参数解释：** 独享引擎所在VPC ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subnetId  **参数解释：** 独享引擎所在VPC的子网ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIp  **参数解释：** 独享引擎的业务面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIpv6  **参数解释：** 独享引擎的业务面IPV6地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * floatIp  **参数解释：** 独享引擎的管理面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityGroupIds  **参数解释：** 独享引擎ECS绑定的安全组 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  **参数解释：** 独享引擎是否可升级（0：不可升级，1：可升级） **约束限制：** 不涉及 **取值范围：**  - 0: 不可升级  - 1: 可升级  **默认取值：** 不涉及
    * cloudServiceType  **参数解释：** 云服务代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceType  **参数解释：** 云服务资源类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceSpecCode  **参数解释：** 云服务资源代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * specification  **参数解释：** 独享引擎ECS规格，如\"8vCPUs | 16GB\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 独享引擎防护的域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * volumeType  **参数解释：** 存储类型（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 存储资源池ID（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * poolId  **参数解释：** 独享引擎所在WAF组的ID（仅适用特殊独享模式） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chargeMode  **参数解释：** '计费模式。0: 包周期；1:按需' **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instancename' => 'setInstancename',
            'serverId' => 'setServerId',
            'region' => 'setRegion',
            'zone' => 'setZone',
            'arch' => 'setArch',
            'cpuFlavor' => 'setCpuFlavor',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'serviceIp' => 'setServiceIp',
            'serviceIpv6' => 'setServiceIpv6',
            'floatIp' => 'setFloatIp',
            'securityGroupIds' => 'setSecurityGroupIds',
            'status' => 'setStatus',
            'runStatus' => 'setRunStatus',
            'accessStatus' => 'setAccessStatus',
            'upgradable' => 'setUpgradable',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'specification' => 'setSpecification',
            'hosts' => 'setHosts',
            'volumeType' => 'setVolumeType',
            'clusterId' => 'setClusterId',
            'poolId' => 'setPoolId',
            'chargeMode' => 'setChargeMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 独享引擎ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instancename  **参数解释：** 独享引擎名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serverId  **参数解释：** 独享引擎ECS ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** Region代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * zone  **参数解释：** 可用区代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * arch  **参数解释：** CPU架构代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cpuFlavor  **参数解释：** ECS规格代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vpcId  **参数解释：** 独享引擎所在VPC ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * subnetId  **参数解释：** 独享引擎所在VPC的子网ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIp  **参数解释：** 独享引擎的业务面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * serviceIpv6  **参数解释：** 独享引擎的业务面IPV6地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * floatIp  **参数解释：** 独享引擎的管理面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityGroupIds  **参数解释：** 独享引擎ECS绑定的安全组 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  **参数解释：** 独享引擎是否可升级（0：不可升级，1：可升级） **约束限制：** 不涉及 **取值范围：**  - 0: 不可升级  - 1: 可升级  **默认取值：** 不涉及
    * cloudServiceType  **参数解释：** 云服务代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceType  **参数解释：** 云服务资源类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resourceSpecCode  **参数解释：** 云服务资源代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * specification  **参数解释：** 独享引擎ECS规格，如\"8vCPUs | 16GB\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 独享引擎防护的域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * volumeType  **参数解释：** 存储类型（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 存储资源池ID（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * poolId  **参数解释：** 独享引擎所在WAF组的ID（仅适用特殊独享模式） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chargeMode  **参数解释：** '计费模式。0: 包周期；1:按需' **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instancename' => 'getInstancename',
            'serverId' => 'getServerId',
            'region' => 'getRegion',
            'zone' => 'getZone',
            'arch' => 'getArch',
            'cpuFlavor' => 'getCpuFlavor',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'serviceIp' => 'getServiceIp',
            'serviceIpv6' => 'getServiceIpv6',
            'floatIp' => 'getFloatIp',
            'securityGroupIds' => 'getSecurityGroupIds',
            'status' => 'getStatus',
            'runStatus' => 'getRunStatus',
            'accessStatus' => 'getAccessStatus',
            'upgradable' => 'getUpgradable',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'specification' => 'getSpecification',
            'hosts' => 'getHosts',
            'volumeType' => 'getVolumeType',
            'clusterId' => 'getClusterId',
            'poolId' => 'getPoolId',
            'chargeMode' => 'getChargeMode'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    const RUN_STATUS_0 = 0;
    const RUN_STATUS_1 = 1;
    const RUN_STATUS_2 = 2;
    const RUN_STATUS_3 = 3;
    const RUN_STATUS_4 = 4;
    const RUN_STATUS_5 = 5;
    const RUN_STATUS_6 = 6;
    const RUN_STATUS_7 = 7;
    const RUN_STATUS_8 = 8;
    const ACCESS_STATUS_0 = 0;
    const ACCESS_STATUS_1 = 1;
    const UPGRADABLE_0 = 0;
    const UPGRADABLE_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
            self::STATUS_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRunStatusAllowableValues()
    {
        return [
            self::RUN_STATUS_0,
            self::RUN_STATUS_1,
            self::RUN_STATUS_2,
            self::RUN_STATUS_3,
            self::RUN_STATUS_4,
            self::RUN_STATUS_5,
            self::RUN_STATUS_6,
            self::RUN_STATUS_7,
            self::RUN_STATUS_8,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessStatusAllowableValues()
    {
        return [
            self::ACCESS_STATUS_0,
            self::ACCESS_STATUS_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUpgradableAllowableValues()
    {
        return [
            self::UPGRADABLE_0,
            self::UPGRADABLE_1,
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
        $this->container['instancename'] = isset($data['instancename']) ? $data['instancename'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['cpuFlavor'] = isset($data['cpuFlavor']) ? $data['cpuFlavor'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['serviceIp'] = isset($data['serviceIp']) ? $data['serviceIp'] : null;
        $this->container['serviceIpv6'] = isset($data['serviceIpv6']) ? $data['serviceIpv6'] : null;
        $this->container['floatIp'] = isset($data['floatIp']) ? $data['floatIp'] : null;
        $this->container['securityGroupIds'] = isset($data['securityGroupIds']) ? $data['securityGroupIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runStatus'] = isset($data['runStatus']) ? $data['runStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['upgradable'] = isset($data['upgradable']) ? $data['upgradable'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
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

            $allowedValues = $this->getRunStatusAllowableValues();
                if (!is_null($this->container['runStatus']) && !in_array($this->container['runStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAccessStatusAllowableValues();
                if (!is_null($this->container['accessStatus']) && !in_array($this->container['accessStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getUpgradableAllowableValues();
                if (!is_null($this->container['upgradable']) && !in_array($this->container['upgradable'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'upgradable', must be one of '%s'",
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
    * Gets id
    *  **参数解释：** 独享引擎ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $id **参数解释：** 独享引擎ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instancename
    *  **参数解释：** 独享引擎名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getInstancename()
    {
        return $this->container['instancename'];
    }

    /**
    * Sets instancename
    *
    * @param string|null $instancename **参数解释：** 独享引擎名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setInstancename($instancename)
    {
        $this->container['instancename'] = $instancename;
        return $this;
    }

    /**
    * Gets serverId
    *  **参数解释：** 独享引擎ECS ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId **参数解释：** 独享引擎ECS ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** Region代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $region **参数解释：** Region代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 可用区代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
    * Sets zone
    *
    * @param string|null $zone **参数解释：** 可用区代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;
        return $this;
    }

    /**
    * Gets arch
    *  **参数解释：** CPU架构代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释：** CPU架构代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets cpuFlavor
    *  **参数解释：** ECS规格代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCpuFlavor()
    {
        return $this->container['cpuFlavor'];
    }

    /**
    * Sets cpuFlavor
    *
    * @param string|null $cpuFlavor **参数解释：** ECS规格代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCpuFlavor($cpuFlavor)
    {
        $this->container['cpuFlavor'] = $cpuFlavor;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释：** 独享引擎所在VPC ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $vpcId **参数解释：** 独享引擎所在VPC ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 独享引擎所在VPC的子网ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $subnetId **参数解释：** 独享引擎所在VPC的子网ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets serviceIp
    *  **参数解释：** 独享引擎的业务面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getServiceIp()
    {
        return $this->container['serviceIp'];
    }

    /**
    * Sets serviceIp
    *
    * @param string|null $serviceIp **参数解释：** 独享引擎的业务面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setServiceIp($serviceIp)
    {
        $this->container['serviceIp'] = $serviceIp;
        return $this;
    }

    /**
    * Gets serviceIpv6
    *  **参数解释：** 独享引擎的业务面IPV6地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getServiceIpv6()
    {
        return $this->container['serviceIpv6'];
    }

    /**
    * Sets serviceIpv6
    *
    * @param string|null $serviceIpv6 **参数解释：** 独享引擎的业务面IPV6地址 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setServiceIpv6($serviceIpv6)
    {
        $this->container['serviceIpv6'] = $serviceIpv6;
        return $this;
    }

    /**
    * Gets floatIp
    *  **参数解释：** 独享引擎的管理面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getFloatIp()
    {
        return $this->container['floatIp'];
    }

    /**
    * Sets floatIp
    *
    * @param string|null $floatIp **参数解释：** 独享引擎的管理面IP **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFloatIp($floatIp)
    {
        $this->container['floatIp'] = $floatIp;
        return $this;
    }

    /**
    * Gets securityGroupIds
    *  **参数解释：** 独享引擎ECS绑定的安全组 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getSecurityGroupIds()
    {
        return $this->container['securityGroupIds'];
    }

    /**
    * Sets securityGroupIds
    *
    * @param string[]|null $securityGroupIds **参数解释：** 独享引擎ECS绑定的安全组 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSecurityGroupIds($securityGroupIds)
    {
        $this->container['securityGroupIds'] = $securityGroupIds;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets runStatus
    *  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
    * Sets runStatus
    *
    * @param int|null $runStatus **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;
        return $this;
    }

    /**
    * Gets accessStatus
    *  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getAccessStatus()
    {
        return $this->container['accessStatus'];
    }

    /**
    * Sets accessStatus
    *
    * @param int|null $accessStatus **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAccessStatus($accessStatus)
    {
        $this->container['accessStatus'] = $accessStatus;
        return $this;
    }

    /**
    * Gets upgradable
    *  **参数解释：** 独享引擎是否可升级（0：不可升级，1：可升级） **约束限制：** 不涉及 **取值范围：**  - 0: 不可升级  - 1: 可升级  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getUpgradable()
    {
        return $this->container['upgradable'];
    }

    /**
    * Sets upgradable
    *
    * @param int|null $upgradable **参数解释：** 独享引擎是否可升级（0：不可升级，1：可升级） **约束限制：** 不涉及 **取值范围：**  - 0: 不可升级  - 1: 可升级  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUpgradable($upgradable)
    {
        $this->container['upgradable'] = $upgradable;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  **参数解释：** 云服务代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType **参数解释：** 云服务代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  **参数解释：** 云服务资源类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType **参数解释：** 云服务资源类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  **参数解释：** 云服务资源代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $resourceSpecCode **参数解释：** 云服务资源代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets specification
    *  **参数解释：** 独享引擎ECS规格，如\"8vCPUs | 16GB\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $specification **参数解释：** 独享引擎ECS规格，如\"8vCPUs | 16GB\" **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets hosts
    *  **参数解释：** 独享引擎防护的域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IdHostnameEntry[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IdHostnameEntry[]|null $hosts **参数解释：** 独享引擎防护的域名 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets volumeType
    *  **参数解释：** 存储类型（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $volumeType **参数解释：** 存储类型（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释：** 存储资源池ID（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $clusterId **参数解释：** 存储资源池ID（可选） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 独享引擎所在WAF组的ID（仅适用特殊独享模式） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId **参数解释：** 独享引擎所在WAF组的ID（仅适用特殊独享模式） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  **参数解释：** '计费模式。0: 包周期；1:按需' **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param int|null $chargeMode **参数解释：** '计费模式。0: 包周期；1:按需' **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
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

