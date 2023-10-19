<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateScalingGroupOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateScalingGroupOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingGroupName  伸缩组名称(1-64个字符)，只能包含中文、字母、数字、下划线、中划线。
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取。
    * desireInstanceNumber  期望实例数量，默认值为最小实例数。最小实例数<=期望实例数<=最大实例数
    * minInstanceNumber  最小实例数量，默认值为0。
    * maxInstanceNumber  最大实例数量，默认值为0。
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。 只针对告警策略生效，定时、周期策略和手动触发策略不受该参数限制。
    * lbListenerId  弹性负载均衡（经典型）监听器ID，最多支持绑定6个负载均衡监听器，多个负载均衡监听器ID以逗号分隔。首先使用vpc_id通过查询ELB服务负载均衡器列表接口获取负载均衡器的ID，详见《弹性负载均衡API参考》的“查询负载均衡器列表”，再使用该ID查询监听器列表获取，详见《弹性负载均衡API参考》的“查询监听器列表”。
    * lbaasListeners  弹性负载均衡器（增强型）信息，最多支持绑定6个负载均衡。该字段与lb_listener_id互斥。
    * availableZones  可用分区信息。弹性伸缩活动中自动添加的云服务器会被创建在指定的可用区中。如果没有指定可用分区，会由系统自动指定可用分区。详情请参考地区和终端节点。
    * networks  网络信息，最多支持选择5个子网，传入的第一个子网默认作为云服务器的主网卡。获取子网信息请参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroups  安全组信息，最多支持选择1个安全组。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * vpcId  VPC信息，通过查询VPC服务VPC列表接口获取，详见《虚拟私有云API参考》的“查询VPC列表”。
    * healthPeriodicAuditMethod  伸缩组实例健康检查方式：ELB_AUDIT和NOVA_AUDIT。当伸缩组参数中设置负载均衡时，默认为ELB_AUDIT；否则默认为NOVA_AUDIT。ELB_AUDIT表示负载均衡健康检查方式，在有监听器的伸缩组中有效。NOVA_AUDIT表示弹性伸缩自带的健康检查方式。
    * healthPeriodicAuditTime  伸缩组实例的健康检查周期，可设置为1、5、15、60、180（分钟），若不设置该参数，默认为5。若设置为0，可以实现10秒级健康检查。
    * healthPeriodicAuditGracePeriod  伸缩组实例健康状况检查宽限期，取值范围0-86400，单位是秒。当实例加入伸缩组并且进入已启用状态后，健康状况检查宽限期才会启动，伸缩组会等健康状况检查宽限期结束后才检查实例的运行状况。当伸缩组实例健康检查方式为ELB_AUDIT时，该参数生效，若不设置该参数，默认为600秒。
    * instanceTerminatePolicy  伸缩组实例移除策略：OLD_CONFIG_OLD_INSTANCE（默认）：从根据“较早创建的配置”创建的实例中筛选出较早创建的实例被优先移除。OLD_CONFIG_NEW_INSTANCE：从根据“较早创建的配置”创建的实例中筛选出较新创建的实例被优先移除。OLD_INSTANCE：较早创建的实例被优先移除。NEW_INSTANCE：较新创建的实例将被优先移除。
    * notifications  通知方式：EMAIL为发送邮件通知。该通知方式即将被废除，建议给弹性伸缩组配置通知功能。详见通知。
    * deletePublicip  配置删除云服务器时是否删除云服务器绑定的弹性IP。取值为true或false，默认为false。true：删除云服务器时，会同时删除绑定在云服务器上的弹性IP。当弹性IP的计费方式为包年包月时，不会被删除。false：删除云服务器时，仅解绑定在云服务器上的弹性IP，不删除弹性IP。
    * deleteVolume  配置删除云服务器时是否删除云服务器绑定的数据盘。取值为true或false，默认为false。 true：删除云服务器时，会同时删除绑定在云服务器上的数据盘。当数据盘的计费方式为包年包月时，不会被删除。 false：删除云服务器时，仅解绑定在云服务器上的数据盘，不删除数据盘。
    * enterpriseProjectId  企业项目ID，用于指定伸缩组归属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。当伸缩组配置企业项目时，由该伸缩组创建的弹性云服务器将归属于该企业项目。否则将使用默认企业项目。说明：关于企业项目特性的详细信息，请参见[企业项目管理](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0131965280.html)。
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略：EQUILIBRIUM_DISTRIBUTE（默认）：均衡分布，云服务器扩缩容时优先保证available_zones列表中各AZ下虚拟机数量均衡，当无法在目标AZ下完成虚拟机扩容时，按照PICK_FIRST原则选择其他可用AZ。PICK_FIRST：选择优先，虚拟机扩缩容时目标AZ的选择按照available_zones列表的顺序进行优先级排序。
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息(0-256个字符)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingGroupName' => 'string',
            'scalingConfigurationId' => 'string',
            'desireInstanceNumber' => 'int',
            'minInstanceNumber' => 'int',
            'maxInstanceNumber' => 'int',
            'coolDownTime' => 'int',
            'lbListenerId' => 'string',
            'lbaasListeners' => '\HuaweiCloud\SDK\_As\V1\Model\LbaasListeners[]',
            'availableZones' => 'string[]',
            'networks' => '\HuaweiCloud\SDK\_As\V1\Model\Networks[]',
            'securityGroups' => '\HuaweiCloud\SDK\_As\V1\Model\SecurityGroup[]',
            'vpcId' => 'string',
            'healthPeriodicAuditMethod' => 'string',
            'healthPeriodicAuditTime' => 'int',
            'healthPeriodicAuditGracePeriod' => 'int',
            'instanceTerminatePolicy' => 'string',
            'notifications' => 'string[]',
            'deletePublicip' => 'bool',
            'deleteVolume' => 'bool',
            'enterpriseProjectId' => 'string',
            'multiAzPriorityPolicy' => 'string',
            'iamAgencyName' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingGroupName  伸缩组名称(1-64个字符)，只能包含中文、字母、数字、下划线、中划线。
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取。
    * desireInstanceNumber  期望实例数量，默认值为最小实例数。最小实例数<=期望实例数<=最大实例数
    * minInstanceNumber  最小实例数量，默认值为0。
    * maxInstanceNumber  最大实例数量，默认值为0。
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。 只针对告警策略生效，定时、周期策略和手动触发策略不受该参数限制。
    * lbListenerId  弹性负载均衡（经典型）监听器ID，最多支持绑定6个负载均衡监听器，多个负载均衡监听器ID以逗号分隔。首先使用vpc_id通过查询ELB服务负载均衡器列表接口获取负载均衡器的ID，详见《弹性负载均衡API参考》的“查询负载均衡器列表”，再使用该ID查询监听器列表获取，详见《弹性负载均衡API参考》的“查询监听器列表”。
    * lbaasListeners  弹性负载均衡器（增强型）信息，最多支持绑定6个负载均衡。该字段与lb_listener_id互斥。
    * availableZones  可用分区信息。弹性伸缩活动中自动添加的云服务器会被创建在指定的可用区中。如果没有指定可用分区，会由系统自动指定可用分区。详情请参考地区和终端节点。
    * networks  网络信息，最多支持选择5个子网，传入的第一个子网默认作为云服务器的主网卡。获取子网信息请参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroups  安全组信息，最多支持选择1个安全组。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * vpcId  VPC信息，通过查询VPC服务VPC列表接口获取，详见《虚拟私有云API参考》的“查询VPC列表”。
    * healthPeriodicAuditMethod  伸缩组实例健康检查方式：ELB_AUDIT和NOVA_AUDIT。当伸缩组参数中设置负载均衡时，默认为ELB_AUDIT；否则默认为NOVA_AUDIT。ELB_AUDIT表示负载均衡健康检查方式，在有监听器的伸缩组中有效。NOVA_AUDIT表示弹性伸缩自带的健康检查方式。
    * healthPeriodicAuditTime  伸缩组实例的健康检查周期，可设置为1、5、15、60、180（分钟），若不设置该参数，默认为5。若设置为0，可以实现10秒级健康检查。
    * healthPeriodicAuditGracePeriod  伸缩组实例健康状况检查宽限期，取值范围0-86400，单位是秒。当实例加入伸缩组并且进入已启用状态后，健康状况检查宽限期才会启动，伸缩组会等健康状况检查宽限期结束后才检查实例的运行状况。当伸缩组实例健康检查方式为ELB_AUDIT时，该参数生效，若不设置该参数，默认为600秒。
    * instanceTerminatePolicy  伸缩组实例移除策略：OLD_CONFIG_OLD_INSTANCE（默认）：从根据“较早创建的配置”创建的实例中筛选出较早创建的实例被优先移除。OLD_CONFIG_NEW_INSTANCE：从根据“较早创建的配置”创建的实例中筛选出较新创建的实例被优先移除。OLD_INSTANCE：较早创建的实例被优先移除。NEW_INSTANCE：较新创建的实例将被优先移除。
    * notifications  通知方式：EMAIL为发送邮件通知。该通知方式即将被废除，建议给弹性伸缩组配置通知功能。详见通知。
    * deletePublicip  配置删除云服务器时是否删除云服务器绑定的弹性IP。取值为true或false，默认为false。true：删除云服务器时，会同时删除绑定在云服务器上的弹性IP。当弹性IP的计费方式为包年包月时，不会被删除。false：删除云服务器时，仅解绑定在云服务器上的弹性IP，不删除弹性IP。
    * deleteVolume  配置删除云服务器时是否删除云服务器绑定的数据盘。取值为true或false，默认为false。 true：删除云服务器时，会同时删除绑定在云服务器上的数据盘。当数据盘的计费方式为包年包月时，不会被删除。 false：删除云服务器时，仅解绑定在云服务器上的数据盘，不删除数据盘。
    * enterpriseProjectId  企业项目ID，用于指定伸缩组归属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。当伸缩组配置企业项目时，由该伸缩组创建的弹性云服务器将归属于该企业项目。否则将使用默认企业项目。说明：关于企业项目特性的详细信息，请参见[企业项目管理](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0131965280.html)。
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略：EQUILIBRIUM_DISTRIBUTE（默认）：均衡分布，云服务器扩缩容时优先保证available_zones列表中各AZ下虚拟机数量均衡，当无法在目标AZ下完成虚拟机扩容时，按照PICK_FIRST原则选择其他可用AZ。PICK_FIRST：选择优先，虚拟机扩缩容时目标AZ的选择按照available_zones列表的顺序进行优先级排序。
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息(0-256个字符)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingGroupName' => null,
        'scalingConfigurationId' => null,
        'desireInstanceNumber' => 'int32',
        'minInstanceNumber' => 'int32',
        'maxInstanceNumber' => 'int32',
        'coolDownTime' => 'int32',
        'lbListenerId' => null,
        'lbaasListeners' => null,
        'availableZones' => null,
        'networks' => null,
        'securityGroups' => null,
        'vpcId' => null,
        'healthPeriodicAuditMethod' => null,
        'healthPeriodicAuditTime' => 'int32',
        'healthPeriodicAuditGracePeriod' => 'int32',
        'instanceTerminatePolicy' => null,
        'notifications' => null,
        'deletePublicip' => null,
        'deleteVolume' => null,
        'enterpriseProjectId' => null,
        'multiAzPriorityPolicy' => null,
        'iamAgencyName' => null,
        'description' => null
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
    * scalingGroupName  伸缩组名称(1-64个字符)，只能包含中文、字母、数字、下划线、中划线。
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取。
    * desireInstanceNumber  期望实例数量，默认值为最小实例数。最小实例数<=期望实例数<=最大实例数
    * minInstanceNumber  最小实例数量，默认值为0。
    * maxInstanceNumber  最大实例数量，默认值为0。
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。 只针对告警策略生效，定时、周期策略和手动触发策略不受该参数限制。
    * lbListenerId  弹性负载均衡（经典型）监听器ID，最多支持绑定6个负载均衡监听器，多个负载均衡监听器ID以逗号分隔。首先使用vpc_id通过查询ELB服务负载均衡器列表接口获取负载均衡器的ID，详见《弹性负载均衡API参考》的“查询负载均衡器列表”，再使用该ID查询监听器列表获取，详见《弹性负载均衡API参考》的“查询监听器列表”。
    * lbaasListeners  弹性负载均衡器（增强型）信息，最多支持绑定6个负载均衡。该字段与lb_listener_id互斥。
    * availableZones  可用分区信息。弹性伸缩活动中自动添加的云服务器会被创建在指定的可用区中。如果没有指定可用分区，会由系统自动指定可用分区。详情请参考地区和终端节点。
    * networks  网络信息，最多支持选择5个子网，传入的第一个子网默认作为云服务器的主网卡。获取子网信息请参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroups  安全组信息，最多支持选择1个安全组。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * vpcId  VPC信息，通过查询VPC服务VPC列表接口获取，详见《虚拟私有云API参考》的“查询VPC列表”。
    * healthPeriodicAuditMethod  伸缩组实例健康检查方式：ELB_AUDIT和NOVA_AUDIT。当伸缩组参数中设置负载均衡时，默认为ELB_AUDIT；否则默认为NOVA_AUDIT。ELB_AUDIT表示负载均衡健康检查方式，在有监听器的伸缩组中有效。NOVA_AUDIT表示弹性伸缩自带的健康检查方式。
    * healthPeriodicAuditTime  伸缩组实例的健康检查周期，可设置为1、5、15、60、180（分钟），若不设置该参数，默认为5。若设置为0，可以实现10秒级健康检查。
    * healthPeriodicAuditGracePeriod  伸缩组实例健康状况检查宽限期，取值范围0-86400，单位是秒。当实例加入伸缩组并且进入已启用状态后，健康状况检查宽限期才会启动，伸缩组会等健康状况检查宽限期结束后才检查实例的运行状况。当伸缩组实例健康检查方式为ELB_AUDIT时，该参数生效，若不设置该参数，默认为600秒。
    * instanceTerminatePolicy  伸缩组实例移除策略：OLD_CONFIG_OLD_INSTANCE（默认）：从根据“较早创建的配置”创建的实例中筛选出较早创建的实例被优先移除。OLD_CONFIG_NEW_INSTANCE：从根据“较早创建的配置”创建的实例中筛选出较新创建的实例被优先移除。OLD_INSTANCE：较早创建的实例被优先移除。NEW_INSTANCE：较新创建的实例将被优先移除。
    * notifications  通知方式：EMAIL为发送邮件通知。该通知方式即将被废除，建议给弹性伸缩组配置通知功能。详见通知。
    * deletePublicip  配置删除云服务器时是否删除云服务器绑定的弹性IP。取值为true或false，默认为false。true：删除云服务器时，会同时删除绑定在云服务器上的弹性IP。当弹性IP的计费方式为包年包月时，不会被删除。false：删除云服务器时，仅解绑定在云服务器上的弹性IP，不删除弹性IP。
    * deleteVolume  配置删除云服务器时是否删除云服务器绑定的数据盘。取值为true或false，默认为false。 true：删除云服务器时，会同时删除绑定在云服务器上的数据盘。当数据盘的计费方式为包年包月时，不会被删除。 false：删除云服务器时，仅解绑定在云服务器上的数据盘，不删除数据盘。
    * enterpriseProjectId  企业项目ID，用于指定伸缩组归属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。当伸缩组配置企业项目时，由该伸缩组创建的弹性云服务器将归属于该企业项目。否则将使用默认企业项目。说明：关于企业项目特性的详细信息，请参见[企业项目管理](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0131965280.html)。
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略：EQUILIBRIUM_DISTRIBUTE（默认）：均衡分布，云服务器扩缩容时优先保证available_zones列表中各AZ下虚拟机数量均衡，当无法在目标AZ下完成虚拟机扩容时，按照PICK_FIRST原则选择其他可用AZ。PICK_FIRST：选择优先，虚拟机扩缩容时目标AZ的选择按照available_zones列表的顺序进行优先级排序。
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息(0-256个字符)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingGroupName' => 'scaling_group_name',
            'scalingConfigurationId' => 'scaling_configuration_id',
            'desireInstanceNumber' => 'desire_instance_number',
            'minInstanceNumber' => 'min_instance_number',
            'maxInstanceNumber' => 'max_instance_number',
            'coolDownTime' => 'cool_down_time',
            'lbListenerId' => 'lb_listener_id',
            'lbaasListeners' => 'lbaas_listeners',
            'availableZones' => 'available_zones',
            'networks' => 'networks',
            'securityGroups' => 'security_groups',
            'vpcId' => 'vpc_id',
            'healthPeriodicAuditMethod' => 'health_periodic_audit_method',
            'healthPeriodicAuditTime' => 'health_periodic_audit_time',
            'healthPeriodicAuditGracePeriod' => 'health_periodic_audit_grace_period',
            'instanceTerminatePolicy' => 'instance_terminate_policy',
            'notifications' => 'notifications',
            'deletePublicip' => 'delete_publicip',
            'deleteVolume' => 'delete_volume',
            'enterpriseProjectId' => 'enterprise_project_id',
            'multiAzPriorityPolicy' => 'multi_az_priority_policy',
            'iamAgencyName' => 'iam_agency_name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingGroupName  伸缩组名称(1-64个字符)，只能包含中文、字母、数字、下划线、中划线。
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取。
    * desireInstanceNumber  期望实例数量，默认值为最小实例数。最小实例数<=期望实例数<=最大实例数
    * minInstanceNumber  最小实例数量，默认值为0。
    * maxInstanceNumber  最大实例数量，默认值为0。
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。 只针对告警策略生效，定时、周期策略和手动触发策略不受该参数限制。
    * lbListenerId  弹性负载均衡（经典型）监听器ID，最多支持绑定6个负载均衡监听器，多个负载均衡监听器ID以逗号分隔。首先使用vpc_id通过查询ELB服务负载均衡器列表接口获取负载均衡器的ID，详见《弹性负载均衡API参考》的“查询负载均衡器列表”，再使用该ID查询监听器列表获取，详见《弹性负载均衡API参考》的“查询监听器列表”。
    * lbaasListeners  弹性负载均衡器（增强型）信息，最多支持绑定6个负载均衡。该字段与lb_listener_id互斥。
    * availableZones  可用分区信息。弹性伸缩活动中自动添加的云服务器会被创建在指定的可用区中。如果没有指定可用分区，会由系统自动指定可用分区。详情请参考地区和终端节点。
    * networks  网络信息，最多支持选择5个子网，传入的第一个子网默认作为云服务器的主网卡。获取子网信息请参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroups  安全组信息，最多支持选择1个安全组。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * vpcId  VPC信息，通过查询VPC服务VPC列表接口获取，详见《虚拟私有云API参考》的“查询VPC列表”。
    * healthPeriodicAuditMethod  伸缩组实例健康检查方式：ELB_AUDIT和NOVA_AUDIT。当伸缩组参数中设置负载均衡时，默认为ELB_AUDIT；否则默认为NOVA_AUDIT。ELB_AUDIT表示负载均衡健康检查方式，在有监听器的伸缩组中有效。NOVA_AUDIT表示弹性伸缩自带的健康检查方式。
    * healthPeriodicAuditTime  伸缩组实例的健康检查周期，可设置为1、5、15、60、180（分钟），若不设置该参数，默认为5。若设置为0，可以实现10秒级健康检查。
    * healthPeriodicAuditGracePeriod  伸缩组实例健康状况检查宽限期，取值范围0-86400，单位是秒。当实例加入伸缩组并且进入已启用状态后，健康状况检查宽限期才会启动，伸缩组会等健康状况检查宽限期结束后才检查实例的运行状况。当伸缩组实例健康检查方式为ELB_AUDIT时，该参数生效，若不设置该参数，默认为600秒。
    * instanceTerminatePolicy  伸缩组实例移除策略：OLD_CONFIG_OLD_INSTANCE（默认）：从根据“较早创建的配置”创建的实例中筛选出较早创建的实例被优先移除。OLD_CONFIG_NEW_INSTANCE：从根据“较早创建的配置”创建的实例中筛选出较新创建的实例被优先移除。OLD_INSTANCE：较早创建的实例被优先移除。NEW_INSTANCE：较新创建的实例将被优先移除。
    * notifications  通知方式：EMAIL为发送邮件通知。该通知方式即将被废除，建议给弹性伸缩组配置通知功能。详见通知。
    * deletePublicip  配置删除云服务器时是否删除云服务器绑定的弹性IP。取值为true或false，默认为false。true：删除云服务器时，会同时删除绑定在云服务器上的弹性IP。当弹性IP的计费方式为包年包月时，不会被删除。false：删除云服务器时，仅解绑定在云服务器上的弹性IP，不删除弹性IP。
    * deleteVolume  配置删除云服务器时是否删除云服务器绑定的数据盘。取值为true或false，默认为false。 true：删除云服务器时，会同时删除绑定在云服务器上的数据盘。当数据盘的计费方式为包年包月时，不会被删除。 false：删除云服务器时，仅解绑定在云服务器上的数据盘，不删除数据盘。
    * enterpriseProjectId  企业项目ID，用于指定伸缩组归属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。当伸缩组配置企业项目时，由该伸缩组创建的弹性云服务器将归属于该企业项目。否则将使用默认企业项目。说明：关于企业项目特性的详细信息，请参见[企业项目管理](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0131965280.html)。
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略：EQUILIBRIUM_DISTRIBUTE（默认）：均衡分布，云服务器扩缩容时优先保证available_zones列表中各AZ下虚拟机数量均衡，当无法在目标AZ下完成虚拟机扩容时，按照PICK_FIRST原则选择其他可用AZ。PICK_FIRST：选择优先，虚拟机扩缩容时目标AZ的选择按照available_zones列表的顺序进行优先级排序。
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息(0-256个字符)
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingGroupName' => 'setScalingGroupName',
            'scalingConfigurationId' => 'setScalingConfigurationId',
            'desireInstanceNumber' => 'setDesireInstanceNumber',
            'minInstanceNumber' => 'setMinInstanceNumber',
            'maxInstanceNumber' => 'setMaxInstanceNumber',
            'coolDownTime' => 'setCoolDownTime',
            'lbListenerId' => 'setLbListenerId',
            'lbaasListeners' => 'setLbaasListeners',
            'availableZones' => 'setAvailableZones',
            'networks' => 'setNetworks',
            'securityGroups' => 'setSecurityGroups',
            'vpcId' => 'setVpcId',
            'healthPeriodicAuditMethod' => 'setHealthPeriodicAuditMethod',
            'healthPeriodicAuditTime' => 'setHealthPeriodicAuditTime',
            'healthPeriodicAuditGracePeriod' => 'setHealthPeriodicAuditGracePeriod',
            'instanceTerminatePolicy' => 'setInstanceTerminatePolicy',
            'notifications' => 'setNotifications',
            'deletePublicip' => 'setDeletePublicip',
            'deleteVolume' => 'setDeleteVolume',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'multiAzPriorityPolicy' => 'setMultiAzPriorityPolicy',
            'iamAgencyName' => 'setIamAgencyName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingGroupName  伸缩组名称(1-64个字符)，只能包含中文、字母、数字、下划线、中划线。
    * scalingConfigurationId  伸缩配置ID，通过查询弹性伸缩配置列表接口获取。
    * desireInstanceNumber  期望实例数量，默认值为最小实例数。最小实例数<=期望实例数<=最大实例数
    * minInstanceNumber  最小实例数量，默认值为0。
    * maxInstanceNumber  最大实例数量，默认值为0。
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。 只针对告警策略生效，定时、周期策略和手动触发策略不受该参数限制。
    * lbListenerId  弹性负载均衡（经典型）监听器ID，最多支持绑定6个负载均衡监听器，多个负载均衡监听器ID以逗号分隔。首先使用vpc_id通过查询ELB服务负载均衡器列表接口获取负载均衡器的ID，详见《弹性负载均衡API参考》的“查询负载均衡器列表”，再使用该ID查询监听器列表获取，详见《弹性负载均衡API参考》的“查询监听器列表”。
    * lbaasListeners  弹性负载均衡器（增强型）信息，最多支持绑定6个负载均衡。该字段与lb_listener_id互斥。
    * availableZones  可用分区信息。弹性伸缩活动中自动添加的云服务器会被创建在指定的可用区中。如果没有指定可用分区，会由系统自动指定可用分区。详情请参考地区和终端节点。
    * networks  网络信息，最多支持选择5个子网，传入的第一个子网默认作为云服务器的主网卡。获取子网信息请参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    * securityGroups  安全组信息，最多支持选择1个安全组。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    * vpcId  VPC信息，通过查询VPC服务VPC列表接口获取，详见《虚拟私有云API参考》的“查询VPC列表”。
    * healthPeriodicAuditMethod  伸缩组实例健康检查方式：ELB_AUDIT和NOVA_AUDIT。当伸缩组参数中设置负载均衡时，默认为ELB_AUDIT；否则默认为NOVA_AUDIT。ELB_AUDIT表示负载均衡健康检查方式，在有监听器的伸缩组中有效。NOVA_AUDIT表示弹性伸缩自带的健康检查方式。
    * healthPeriodicAuditTime  伸缩组实例的健康检查周期，可设置为1、5、15、60、180（分钟），若不设置该参数，默认为5。若设置为0，可以实现10秒级健康检查。
    * healthPeriodicAuditGracePeriod  伸缩组实例健康状况检查宽限期，取值范围0-86400，单位是秒。当实例加入伸缩组并且进入已启用状态后，健康状况检查宽限期才会启动，伸缩组会等健康状况检查宽限期结束后才检查实例的运行状况。当伸缩组实例健康检查方式为ELB_AUDIT时，该参数生效，若不设置该参数，默认为600秒。
    * instanceTerminatePolicy  伸缩组实例移除策略：OLD_CONFIG_OLD_INSTANCE（默认）：从根据“较早创建的配置”创建的实例中筛选出较早创建的实例被优先移除。OLD_CONFIG_NEW_INSTANCE：从根据“较早创建的配置”创建的实例中筛选出较新创建的实例被优先移除。OLD_INSTANCE：较早创建的实例被优先移除。NEW_INSTANCE：较新创建的实例将被优先移除。
    * notifications  通知方式：EMAIL为发送邮件通知。该通知方式即将被废除，建议给弹性伸缩组配置通知功能。详见通知。
    * deletePublicip  配置删除云服务器时是否删除云服务器绑定的弹性IP。取值为true或false，默认为false。true：删除云服务器时，会同时删除绑定在云服务器上的弹性IP。当弹性IP的计费方式为包年包月时，不会被删除。false：删除云服务器时，仅解绑定在云服务器上的弹性IP，不删除弹性IP。
    * deleteVolume  配置删除云服务器时是否删除云服务器绑定的数据盘。取值为true或false，默认为false。 true：删除云服务器时，会同时删除绑定在云服务器上的数据盘。当数据盘的计费方式为包年包月时，不会被删除。 false：删除云服务器时，仅解绑定在云服务器上的数据盘，不删除数据盘。
    * enterpriseProjectId  企业项目ID，用于指定伸缩组归属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。当伸缩组配置企业项目时，由该伸缩组创建的弹性云服务器将归属于该企业项目。否则将使用默认企业项目。说明：关于企业项目特性的详细信息，请参见[企业项目管理](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0131965280.html)。
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略：EQUILIBRIUM_DISTRIBUTE（默认）：均衡分布，云服务器扩缩容时优先保证available_zones列表中各AZ下虚拟机数量均衡，当无法在目标AZ下完成虚拟机扩容时，按照PICK_FIRST原则选择其他可用AZ。PICK_FIRST：选择优先，虚拟机扩缩容时目标AZ的选择按照available_zones列表的顺序进行优先级排序。
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息(0-256个字符)
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingGroupName' => 'getScalingGroupName',
            'scalingConfigurationId' => 'getScalingConfigurationId',
            'desireInstanceNumber' => 'getDesireInstanceNumber',
            'minInstanceNumber' => 'getMinInstanceNumber',
            'maxInstanceNumber' => 'getMaxInstanceNumber',
            'coolDownTime' => 'getCoolDownTime',
            'lbListenerId' => 'getLbListenerId',
            'lbaasListeners' => 'getLbaasListeners',
            'availableZones' => 'getAvailableZones',
            'networks' => 'getNetworks',
            'securityGroups' => 'getSecurityGroups',
            'vpcId' => 'getVpcId',
            'healthPeriodicAuditMethod' => 'getHealthPeriodicAuditMethod',
            'healthPeriodicAuditTime' => 'getHealthPeriodicAuditTime',
            'healthPeriodicAuditGracePeriod' => 'getHealthPeriodicAuditGracePeriod',
            'instanceTerminatePolicy' => 'getInstanceTerminatePolicy',
            'notifications' => 'getNotifications',
            'deletePublicip' => 'getDeletePublicip',
            'deleteVolume' => 'getDeleteVolume',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'multiAzPriorityPolicy' => 'getMultiAzPriorityPolicy',
            'iamAgencyName' => 'getIamAgencyName',
            'description' => 'getDescription'
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
    const HEALTH_PERIODIC_AUDIT_METHOD_ELB_AUDIT = 'ELB_AUDIT';
    const HEALTH_PERIODIC_AUDIT_METHOD_NOVA_AUDIT = 'NOVA_AUDIT';
    const INSTANCE_TERMINATE_POLICY_OLD_CONFIG_OLD_INSTANCE = 'OLD_CONFIG_OLD_INSTANCE';
    const INSTANCE_TERMINATE_POLICY_OLD_CONFIG_NEW_INSTANCE = 'OLD_CONFIG_NEW_INSTANCE';
    const INSTANCE_TERMINATE_POLICY_OLD_INSTANCE = 'OLD_INSTANCE';
    const INSTANCE_TERMINATE_POLICY_NEW_INSTANCE = 'NEW_INSTANCE';
    const MULTI_AZ_PRIORITY_POLICY_EQUILIBRIUM_DISTRIBUTE = 'EQUILIBRIUM_DISTRIBUTE';
    const MULTI_AZ_PRIORITY_POLICY_PICK_FIRST = 'PICK_FIRST';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHealthPeriodicAuditMethodAllowableValues()
    {
        return [
            self::HEALTH_PERIODIC_AUDIT_METHOD_ELB_AUDIT,
            self::HEALTH_PERIODIC_AUDIT_METHOD_NOVA_AUDIT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceTerminatePolicyAllowableValues()
    {
        return [
            self::INSTANCE_TERMINATE_POLICY_OLD_CONFIG_OLD_INSTANCE,
            self::INSTANCE_TERMINATE_POLICY_OLD_CONFIG_NEW_INSTANCE,
            self::INSTANCE_TERMINATE_POLICY_OLD_INSTANCE,
            self::INSTANCE_TERMINATE_POLICY_NEW_INSTANCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMultiAzPriorityPolicyAllowableValues()
    {
        return [
            self::MULTI_AZ_PRIORITY_POLICY_EQUILIBRIUM_DISTRIBUTE,
            self::MULTI_AZ_PRIORITY_POLICY_PICK_FIRST,
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
        $this->container['scalingGroupName'] = isset($data['scalingGroupName']) ? $data['scalingGroupName'] : null;
        $this->container['scalingConfigurationId'] = isset($data['scalingConfigurationId']) ? $data['scalingConfigurationId'] : null;
        $this->container['desireInstanceNumber'] = isset($data['desireInstanceNumber']) ? $data['desireInstanceNumber'] : null;
        $this->container['minInstanceNumber'] = isset($data['minInstanceNumber']) ? $data['minInstanceNumber'] : null;
        $this->container['maxInstanceNumber'] = isset($data['maxInstanceNumber']) ? $data['maxInstanceNumber'] : null;
        $this->container['coolDownTime'] = isset($data['coolDownTime']) ? $data['coolDownTime'] : null;
        $this->container['lbListenerId'] = isset($data['lbListenerId']) ? $data['lbListenerId'] : null;
        $this->container['lbaasListeners'] = isset($data['lbaasListeners']) ? $data['lbaasListeners'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['healthPeriodicAuditMethod'] = isset($data['healthPeriodicAuditMethod']) ? $data['healthPeriodicAuditMethod'] : null;
        $this->container['healthPeriodicAuditTime'] = isset($data['healthPeriodicAuditTime']) ? $data['healthPeriodicAuditTime'] : null;
        $this->container['healthPeriodicAuditGracePeriod'] = isset($data['healthPeriodicAuditGracePeriod']) ? $data['healthPeriodicAuditGracePeriod'] : null;
        $this->container['instanceTerminatePolicy'] = isset($data['instanceTerminatePolicy']) ? $data['instanceTerminatePolicy'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['deletePublicip'] = isset($data['deletePublicip']) ? $data['deletePublicip'] : null;
        $this->container['deleteVolume'] = isset($data['deleteVolume']) ? $data['deleteVolume'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['multiAzPriorityPolicy'] = isset($data['multiAzPriorityPolicy']) ? $data['multiAzPriorityPolicy'] : null;
        $this->container['iamAgencyName'] = isset($data['iamAgencyName']) ? $data['iamAgencyName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scalingGroupName'] === null) {
            $invalidProperties[] = "'scalingGroupName' can't be null";
        }
        if ($this->container['scalingConfigurationId'] === null) {
            $invalidProperties[] = "'scalingConfigurationId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingConfigurationId'])) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['coolDownTime']) && ($this->container['coolDownTime'] > 86400)) {
                $invalidProperties[] = "invalid value for 'coolDownTime', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['lbListenerId']) && (mb_strlen($this->container['lbListenerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'lbListenerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['lbListenerId']) && (mb_strlen($this->container['lbListenerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'lbListenerId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['networks'] === null) {
            $invalidProperties[] = "'networks' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getHealthPeriodicAuditMethodAllowableValues();
                if (!is_null($this->container['healthPeriodicAuditMethod']) && !in_array($this->container['healthPeriodicAuditMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'healthPeriodicAuditMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['healthPeriodicAuditGracePeriod']) && ($this->container['healthPeriodicAuditGracePeriod'] > 86400)) {
                $invalidProperties[] = "invalid value for 'healthPeriodicAuditGracePeriod', must be smaller than or equal to 86400.";
            }
            $allowedValues = $this->getInstanceTerminatePolicyAllowableValues();
                if (!is_null($this->container['instanceTerminatePolicy']) && !in_array($this->container['instanceTerminatePolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceTerminatePolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getMultiAzPriorityPolicyAllowableValues();
                if (!is_null($this->container['multiAzPriorityPolicy']) && !in_array($this->container['multiAzPriorityPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'multiAzPriorityPolicy', must be one of '%s'",
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
    * Gets scalingGroupName
    *  伸缩组名称(1-64个字符)，只能包含中文、字母、数字、下划线、中划线。
    *
    * @return string
    */
    public function getScalingGroupName()
    {
        return $this->container['scalingGroupName'];
    }

    /**
    * Sets scalingGroupName
    *
    * @param string $scalingGroupName 伸缩组名称(1-64个字符)，只能包含中文、字母、数字、下划线、中划线。
    *
    * @return $this
    */
    public function setScalingGroupName($scalingGroupName)
    {
        $this->container['scalingGroupName'] = $scalingGroupName;
        return $this;
    }

    /**
    * Gets scalingConfigurationId
    *  伸缩配置ID，通过查询弹性伸缩配置列表接口获取。
    *
    * @return string
    */
    public function getScalingConfigurationId()
    {
        return $this->container['scalingConfigurationId'];
    }

    /**
    * Sets scalingConfigurationId
    *
    * @param string $scalingConfigurationId 伸缩配置ID，通过查询弹性伸缩配置列表接口获取。
    *
    * @return $this
    */
    public function setScalingConfigurationId($scalingConfigurationId)
    {
        $this->container['scalingConfigurationId'] = $scalingConfigurationId;
        return $this;
    }

    /**
    * Gets desireInstanceNumber
    *  期望实例数量，默认值为最小实例数。最小实例数<=期望实例数<=最大实例数
    *
    * @return int|null
    */
    public function getDesireInstanceNumber()
    {
        return $this->container['desireInstanceNumber'];
    }

    /**
    * Sets desireInstanceNumber
    *
    * @param int|null $desireInstanceNumber 期望实例数量，默认值为最小实例数。最小实例数<=期望实例数<=最大实例数
    *
    * @return $this
    */
    public function setDesireInstanceNumber($desireInstanceNumber)
    {
        $this->container['desireInstanceNumber'] = $desireInstanceNumber;
        return $this;
    }

    /**
    * Gets minInstanceNumber
    *  最小实例数量，默认值为0。
    *
    * @return int|null
    */
    public function getMinInstanceNumber()
    {
        return $this->container['minInstanceNumber'];
    }

    /**
    * Sets minInstanceNumber
    *
    * @param int|null $minInstanceNumber 最小实例数量，默认值为0。
    *
    * @return $this
    */
    public function setMinInstanceNumber($minInstanceNumber)
    {
        $this->container['minInstanceNumber'] = $minInstanceNumber;
        return $this;
    }

    /**
    * Gets maxInstanceNumber
    *  最大实例数量，默认值为0。
    *
    * @return int|null
    */
    public function getMaxInstanceNumber()
    {
        return $this->container['maxInstanceNumber'];
    }

    /**
    * Sets maxInstanceNumber
    *
    * @param int|null $maxInstanceNumber 最大实例数量，默认值为0。
    *
    * @return $this
    */
    public function setMaxInstanceNumber($maxInstanceNumber)
    {
        $this->container['maxInstanceNumber'] = $maxInstanceNumber;
        return $this;
    }

    /**
    * Gets coolDownTime
    *  冷却时间，取值范围0-86400，默认为300，单位是秒。 只针对告警策略生效，定时、周期策略和手动触发策略不受该参数限制。
    *
    * @return int|null
    */
    public function getCoolDownTime()
    {
        return $this->container['coolDownTime'];
    }

    /**
    * Sets coolDownTime
    *
    * @param int|null $coolDownTime 冷却时间，取值范围0-86400，默认为300，单位是秒。 只针对告警策略生效，定时、周期策略和手动触发策略不受该参数限制。
    *
    * @return $this
    */
    public function setCoolDownTime($coolDownTime)
    {
        $this->container['coolDownTime'] = $coolDownTime;
        return $this;
    }

    /**
    * Gets lbListenerId
    *  弹性负载均衡（经典型）监听器ID，最多支持绑定6个负载均衡监听器，多个负载均衡监听器ID以逗号分隔。首先使用vpc_id通过查询ELB服务负载均衡器列表接口获取负载均衡器的ID，详见《弹性负载均衡API参考》的“查询负载均衡器列表”，再使用该ID查询监听器列表获取，详见《弹性负载均衡API参考》的“查询监听器列表”。
    *
    * @return string|null
    */
    public function getLbListenerId()
    {
        return $this->container['lbListenerId'];
    }

    /**
    * Sets lbListenerId
    *
    * @param string|null $lbListenerId 弹性负载均衡（经典型）监听器ID，最多支持绑定6个负载均衡监听器，多个负载均衡监听器ID以逗号分隔。首先使用vpc_id通过查询ELB服务负载均衡器列表接口获取负载均衡器的ID，详见《弹性负载均衡API参考》的“查询负载均衡器列表”，再使用该ID查询监听器列表获取，详见《弹性负载均衡API参考》的“查询监听器列表”。
    *
    * @return $this
    */
    public function setLbListenerId($lbListenerId)
    {
        $this->container['lbListenerId'] = $lbListenerId;
        return $this;
    }

    /**
    * Gets lbaasListeners
    *  弹性负载均衡器（增强型）信息，最多支持绑定6个负载均衡。该字段与lb_listener_id互斥。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\LbaasListeners[]|null
    */
    public function getLbaasListeners()
    {
        return $this->container['lbaasListeners'];
    }

    /**
    * Sets lbaasListeners
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\LbaasListeners[]|null $lbaasListeners 弹性负载均衡器（增强型）信息，最多支持绑定6个负载均衡。该字段与lb_listener_id互斥。
    *
    * @return $this
    */
    public function setLbaasListeners($lbaasListeners)
    {
        $this->container['lbaasListeners'] = $lbaasListeners;
        return $this;
    }

    /**
    * Gets availableZones
    *  可用分区信息。弹性伸缩活动中自动添加的云服务器会被创建在指定的可用区中。如果没有指定可用分区，会由系统自动指定可用分区。详情请参考地区和终端节点。
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
    * @param string[]|null $availableZones 可用分区信息。弹性伸缩活动中自动添加的云服务器会被创建在指定的可用区中。如果没有指定可用分区，会由系统自动指定可用分区。详情请参考地区和终端节点。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets networks
    *  网络信息，最多支持选择5个子网，传入的第一个子网默认作为云服务器的主网卡。获取子网信息请参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\Networks[]
    */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
    * Sets networks
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\Networks[] $networks 网络信息，最多支持选择5个子网，传入的第一个子网默认作为云服务器的主网卡。获取子网信息请参考[查询子网列表](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)。
    *
    * @return $this
    */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;
        return $this;
    }

    /**
    * Gets securityGroups
    *  安全组信息，最多支持选择1个安全组。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\SecurityGroup[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\SecurityGroup[]|null $securityGroups 安全组信息，最多支持选择1个安全组。使用vpc_id通过查询VPC服务安全组列表接口获取，详见《虚拟私有云API参考》的“查询安全组列表”。当伸缩配置和伸缩组同时指定安全组时，将以伸缩配置中的安全组为准；当伸缩配置和伸缩组都没有指定安全组时，将使用默认安全组。为了使用灵活性更高，推荐在伸缩配置中指定安全组。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC信息，通过查询VPC服务VPC列表接口获取，详见《虚拟私有云API参考》的“查询VPC列表”。
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
    * @param string $vpcId VPC信息，通过查询VPC服务VPC列表接口获取，详见《虚拟私有云API参考》的“查询VPC列表”。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets healthPeriodicAuditMethod
    *  伸缩组实例健康检查方式：ELB_AUDIT和NOVA_AUDIT。当伸缩组参数中设置负载均衡时，默认为ELB_AUDIT；否则默认为NOVA_AUDIT。ELB_AUDIT表示负载均衡健康检查方式，在有监听器的伸缩组中有效。NOVA_AUDIT表示弹性伸缩自带的健康检查方式。
    *
    * @return string|null
    */
    public function getHealthPeriodicAuditMethod()
    {
        return $this->container['healthPeriodicAuditMethod'];
    }

    /**
    * Sets healthPeriodicAuditMethod
    *
    * @param string|null $healthPeriodicAuditMethod 伸缩组实例健康检查方式：ELB_AUDIT和NOVA_AUDIT。当伸缩组参数中设置负载均衡时，默认为ELB_AUDIT；否则默认为NOVA_AUDIT。ELB_AUDIT表示负载均衡健康检查方式，在有监听器的伸缩组中有效。NOVA_AUDIT表示弹性伸缩自带的健康检查方式。
    *
    * @return $this
    */
    public function setHealthPeriodicAuditMethod($healthPeriodicAuditMethod)
    {
        $this->container['healthPeriodicAuditMethod'] = $healthPeriodicAuditMethod;
        return $this;
    }

    /**
    * Gets healthPeriodicAuditTime
    *  伸缩组实例的健康检查周期，可设置为1、5、15、60、180（分钟），若不设置该参数，默认为5。若设置为0，可以实现10秒级健康检查。
    *
    * @return int|null
    */
    public function getHealthPeriodicAuditTime()
    {
        return $this->container['healthPeriodicAuditTime'];
    }

    /**
    * Sets healthPeriodicAuditTime
    *
    * @param int|null $healthPeriodicAuditTime 伸缩组实例的健康检查周期，可设置为1、5、15、60、180（分钟），若不设置该参数，默认为5。若设置为0，可以实现10秒级健康检查。
    *
    * @return $this
    */
    public function setHealthPeriodicAuditTime($healthPeriodicAuditTime)
    {
        $this->container['healthPeriodicAuditTime'] = $healthPeriodicAuditTime;
        return $this;
    }

    /**
    * Gets healthPeriodicAuditGracePeriod
    *  伸缩组实例健康状况检查宽限期，取值范围0-86400，单位是秒。当实例加入伸缩组并且进入已启用状态后，健康状况检查宽限期才会启动，伸缩组会等健康状况检查宽限期结束后才检查实例的运行状况。当伸缩组实例健康检查方式为ELB_AUDIT时，该参数生效，若不设置该参数，默认为600秒。
    *
    * @return int|null
    */
    public function getHealthPeriodicAuditGracePeriod()
    {
        return $this->container['healthPeriodicAuditGracePeriod'];
    }

    /**
    * Sets healthPeriodicAuditGracePeriod
    *
    * @param int|null $healthPeriodicAuditGracePeriod 伸缩组实例健康状况检查宽限期，取值范围0-86400，单位是秒。当实例加入伸缩组并且进入已启用状态后，健康状况检查宽限期才会启动，伸缩组会等健康状况检查宽限期结束后才检查实例的运行状况。当伸缩组实例健康检查方式为ELB_AUDIT时，该参数生效，若不设置该参数，默认为600秒。
    *
    * @return $this
    */
    public function setHealthPeriodicAuditGracePeriod($healthPeriodicAuditGracePeriod)
    {
        $this->container['healthPeriodicAuditGracePeriod'] = $healthPeriodicAuditGracePeriod;
        return $this;
    }

    /**
    * Gets instanceTerminatePolicy
    *  伸缩组实例移除策略：OLD_CONFIG_OLD_INSTANCE（默认）：从根据“较早创建的配置”创建的实例中筛选出较早创建的实例被优先移除。OLD_CONFIG_NEW_INSTANCE：从根据“较早创建的配置”创建的实例中筛选出较新创建的实例被优先移除。OLD_INSTANCE：较早创建的实例被优先移除。NEW_INSTANCE：较新创建的实例将被优先移除。
    *
    * @return string|null
    */
    public function getInstanceTerminatePolicy()
    {
        return $this->container['instanceTerminatePolicy'];
    }

    /**
    * Sets instanceTerminatePolicy
    *
    * @param string|null $instanceTerminatePolicy 伸缩组实例移除策略：OLD_CONFIG_OLD_INSTANCE（默认）：从根据“较早创建的配置”创建的实例中筛选出较早创建的实例被优先移除。OLD_CONFIG_NEW_INSTANCE：从根据“较早创建的配置”创建的实例中筛选出较新创建的实例被优先移除。OLD_INSTANCE：较早创建的实例被优先移除。NEW_INSTANCE：较新创建的实例将被优先移除。
    *
    * @return $this
    */
    public function setInstanceTerminatePolicy($instanceTerminatePolicy)
    {
        $this->container['instanceTerminatePolicy'] = $instanceTerminatePolicy;
        return $this;
    }

    /**
    * Gets notifications
    *  通知方式：EMAIL为发送邮件通知。该通知方式即将被废除，建议给弹性伸缩组配置通知功能。详见通知。
    *
    * @return string[]|null
    */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
    * Sets notifications
    *
    * @param string[]|null $notifications 通知方式：EMAIL为发送邮件通知。该通知方式即将被废除，建议给弹性伸缩组配置通知功能。详见通知。
    *
    * @return $this
    */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;
        return $this;
    }

    /**
    * Gets deletePublicip
    *  配置删除云服务器时是否删除云服务器绑定的弹性IP。取值为true或false，默认为false。true：删除云服务器时，会同时删除绑定在云服务器上的弹性IP。当弹性IP的计费方式为包年包月时，不会被删除。false：删除云服务器时，仅解绑定在云服务器上的弹性IP，不删除弹性IP。
    *
    * @return bool|null
    */
    public function getDeletePublicip()
    {
        return $this->container['deletePublicip'];
    }

    /**
    * Sets deletePublicip
    *
    * @param bool|null $deletePublicip 配置删除云服务器时是否删除云服务器绑定的弹性IP。取值为true或false，默认为false。true：删除云服务器时，会同时删除绑定在云服务器上的弹性IP。当弹性IP的计费方式为包年包月时，不会被删除。false：删除云服务器时，仅解绑定在云服务器上的弹性IP，不删除弹性IP。
    *
    * @return $this
    */
    public function setDeletePublicip($deletePublicip)
    {
        $this->container['deletePublicip'] = $deletePublicip;
        return $this;
    }

    /**
    * Gets deleteVolume
    *  配置删除云服务器时是否删除云服务器绑定的数据盘。取值为true或false，默认为false。 true：删除云服务器时，会同时删除绑定在云服务器上的数据盘。当数据盘的计费方式为包年包月时，不会被删除。 false：删除云服务器时，仅解绑定在云服务器上的数据盘，不删除数据盘。
    *
    * @return bool|null
    */
    public function getDeleteVolume()
    {
        return $this->container['deleteVolume'];
    }

    /**
    * Sets deleteVolume
    *
    * @param bool|null $deleteVolume 配置删除云服务器时是否删除云服务器绑定的数据盘。取值为true或false，默认为false。 true：删除云服务器时，会同时删除绑定在云服务器上的数据盘。当数据盘的计费方式为包年包月时，不会被删除。 false：删除云服务器时，仅解绑定在云服务器上的数据盘，不删除数据盘。
    *
    * @return $this
    */
    public function setDeleteVolume($deleteVolume)
    {
        $this->container['deleteVolume'] = $deleteVolume;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，用于指定伸缩组归属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。当伸缩组配置企业项目时，由该伸缩组创建的弹性云服务器将归属于该企业项目。否则将使用默认企业项目。说明：关于企业项目特性的详细信息，请参见[企业项目管理](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0131965280.html)。
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
    * @param string|null $enterpriseProjectId 企业项目ID，用于指定伸缩组归属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目，如何获取企业项目ID，请参考[查询企业项目列表](https://support.huaweicloud.com/api-em/zh-cn_topic_0121230880.html)。当伸缩组配置企业项目时，由该伸缩组创建的弹性云服务器将归属于该企业项目。否则将使用默认企业项目。说明：关于企业项目特性的详细信息，请参见[企业项目管理](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0131965280.html)。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets multiAzPriorityPolicy
    *  伸缩组扩缩容时目标AZ选择的优先级策略：EQUILIBRIUM_DISTRIBUTE（默认）：均衡分布，云服务器扩缩容时优先保证available_zones列表中各AZ下虚拟机数量均衡，当无法在目标AZ下完成虚拟机扩容时，按照PICK_FIRST原则选择其他可用AZ。PICK_FIRST：选择优先，虚拟机扩缩容时目标AZ的选择按照available_zones列表的顺序进行优先级排序。
    *
    * @return string|null
    */
    public function getMultiAzPriorityPolicy()
    {
        return $this->container['multiAzPriorityPolicy'];
    }

    /**
    * Sets multiAzPriorityPolicy
    *
    * @param string|null $multiAzPriorityPolicy 伸缩组扩缩容时目标AZ选择的优先级策略：EQUILIBRIUM_DISTRIBUTE（默认）：均衡分布，云服务器扩缩容时优先保证available_zones列表中各AZ下虚拟机数量均衡，当无法在目标AZ下完成虚拟机扩容时，按照PICK_FIRST原则选择其他可用AZ。PICK_FIRST：选择优先，虚拟机扩缩容时目标AZ的选择按照available_zones列表的顺序进行优先级排序。
    *
    * @return $this
    */
    public function setMultiAzPriorityPolicy($multiAzPriorityPolicy)
    {
        $this->container['multiAzPriorityPolicy'] = $multiAzPriorityPolicy;
        return $this;
    }

    /**
    * Gets iamAgencyName
    *  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    *
    * @return string|null
    */
    public function getIamAgencyName()
    {
        return $this->container['iamAgencyName'];
    }

    /**
    * Sets iamAgencyName
    *
    * @param string|null $iamAgencyName 委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    *
    * @return $this
    */
    public function setIamAgencyName($iamAgencyName)
    {
        $this->container['iamAgencyName'] = $iamAgencyName;
        return $this;
    }

    /**
    * Gets description
    *  伸缩组描述信息(0-256个字符)
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
    * @param string|null $description 伸缩组描述信息(0-256个字符)
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

