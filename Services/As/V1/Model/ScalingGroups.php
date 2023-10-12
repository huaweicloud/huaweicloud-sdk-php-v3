<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingGroups implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingGroups';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingGroupName  伸缩组名称。
    * scalingGroupId  伸缩组ID。
    * scalingGroupStatus  伸缩组状态。
    * scalingConfigurationId  伸缩配置ID。
    * scalingConfigurationName  伸缩配置名称。
    * currentInstanceNumber  伸缩组中当前实例数。
    * desireInstanceNumber  伸缩组期望实例数。
    * minInstanceNumber  伸缩组最小实例数。
    * maxInstanceNumber  伸缩组最大实例数
    * coolDownTime  冷却时间，单位是秒。
    * lbListenerId  经典型负载均衡监听器ID，多个负载均衡监听器ID以逗号分隔。
    * lbaasListeners  增强型负载均衡器信息，该参数为预留字段。
    * availableZones  可用分区信息
    * networks  网络信息
    * securityGroups  安全组信息
    * createTime  创建伸缩组时间，遵循UTC时间。
    * vpcId  伸缩组所在的VPC ID。
    * detail  伸缩组详情。
    * isScaling  伸缩组伸缩标志。
    * healthPeriodicAuditMethod  健康检查方式。
    * healthPeriodicAuditTime  健康检查的间隔时间。
    * healthPeriodicAuditGracePeriod  健康状况检查宽限期。
    * instanceTerminatePolicy  移除策略。
    * notifications  通知方式：  EMAIL为发送邮件通知。  该通知方式已经被废除，建议给弹性伸缩组配置通知功能。请参考[通知](https://support.huaweicloud.com/api-as/as_06_0800.html)。
    * deletePublicip  删除云服务器是否删除云服务器绑定的弹性IP。
    * deleteVolume  删除云服务器是否删除云服务器绑定的数据盘
    * cloudLocationId  该参数为预留字段
    * enterpriseProjectId  企业项目ID
    * activityType  伸缩组活动类型
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingGroupName' => 'string',
            'scalingGroupId' => 'string',
            'scalingGroupStatus' => 'string',
            'scalingConfigurationId' => 'string',
            'scalingConfigurationName' => 'string',
            'currentInstanceNumber' => 'int',
            'desireInstanceNumber' => 'int',
            'minInstanceNumber' => 'int',
            'maxInstanceNumber' => 'int',
            'coolDownTime' => 'int',
            'lbListenerId' => 'string',
            'lbaasListeners' => '\HuaweiCloud\SDK\_As\V1\Model\LbaasListenersResult[]',
            'availableZones' => 'string[]',
            'networks' => '\HuaweiCloud\SDK\_As\V1\Model\NetworksResult[]',
            'securityGroups' => '\HuaweiCloud\SDK\_As\V1\Model\SecurityGroupsResult[]',
            'createTime' => '\DateTime',
            'vpcId' => 'string',
            'detail' => 'string',
            'isScaling' => 'bool',
            'healthPeriodicAuditMethod' => 'string',
            'healthPeriodicAuditTime' => 'int',
            'healthPeriodicAuditGracePeriod' => 'int',
            'instanceTerminatePolicy' => 'string',
            'notifications' => 'string[]',
            'deletePublicip' => 'bool',
            'deleteVolume' => 'bool',
            'cloudLocationId' => 'string',
            'enterpriseProjectId' => 'string',
            'activityType' => 'string',
            'multiAzPriorityPolicy' => 'string',
            'iamAgencyName' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingGroupName  伸缩组名称。
    * scalingGroupId  伸缩组ID。
    * scalingGroupStatus  伸缩组状态。
    * scalingConfigurationId  伸缩配置ID。
    * scalingConfigurationName  伸缩配置名称。
    * currentInstanceNumber  伸缩组中当前实例数。
    * desireInstanceNumber  伸缩组期望实例数。
    * minInstanceNumber  伸缩组最小实例数。
    * maxInstanceNumber  伸缩组最大实例数
    * coolDownTime  冷却时间，单位是秒。
    * lbListenerId  经典型负载均衡监听器ID，多个负载均衡监听器ID以逗号分隔。
    * lbaasListeners  增强型负载均衡器信息，该参数为预留字段。
    * availableZones  可用分区信息
    * networks  网络信息
    * securityGroups  安全组信息
    * createTime  创建伸缩组时间，遵循UTC时间。
    * vpcId  伸缩组所在的VPC ID。
    * detail  伸缩组详情。
    * isScaling  伸缩组伸缩标志。
    * healthPeriodicAuditMethod  健康检查方式。
    * healthPeriodicAuditTime  健康检查的间隔时间。
    * healthPeriodicAuditGracePeriod  健康状况检查宽限期。
    * instanceTerminatePolicy  移除策略。
    * notifications  通知方式：  EMAIL为发送邮件通知。  该通知方式已经被废除，建议给弹性伸缩组配置通知功能。请参考[通知](https://support.huaweicloud.com/api-as/as_06_0800.html)。
    * deletePublicip  删除云服务器是否删除云服务器绑定的弹性IP。
    * deleteVolume  删除云服务器是否删除云服务器绑定的数据盘
    * cloudLocationId  该参数为预留字段
    * enterpriseProjectId  企业项目ID
    * activityType  伸缩组活动类型
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingGroupName' => null,
        'scalingGroupId' => null,
        'scalingGroupStatus' => null,
        'scalingConfigurationId' => null,
        'scalingConfigurationName' => null,
        'currentInstanceNumber' => 'int32',
        'desireInstanceNumber' => 'int32',
        'minInstanceNumber' => 'int32',
        'maxInstanceNumber' => 'int32',
        'coolDownTime' => null,
        'lbListenerId' => null,
        'lbaasListeners' => null,
        'availableZones' => null,
        'networks' => null,
        'securityGroups' => null,
        'createTime' => 'date-time',
        'vpcId' => null,
        'detail' => null,
        'isScaling' => null,
        'healthPeriodicAuditMethod' => null,
        'healthPeriodicAuditTime' => 'int32',
        'healthPeriodicAuditGracePeriod' => 'int32',
        'instanceTerminatePolicy' => null,
        'notifications' => null,
        'deletePublicip' => null,
        'deleteVolume' => null,
        'cloudLocationId' => null,
        'enterpriseProjectId' => null,
        'activityType' => null,
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
    * scalingGroupName  伸缩组名称。
    * scalingGroupId  伸缩组ID。
    * scalingGroupStatus  伸缩组状态。
    * scalingConfigurationId  伸缩配置ID。
    * scalingConfigurationName  伸缩配置名称。
    * currentInstanceNumber  伸缩组中当前实例数。
    * desireInstanceNumber  伸缩组期望实例数。
    * minInstanceNumber  伸缩组最小实例数。
    * maxInstanceNumber  伸缩组最大实例数
    * coolDownTime  冷却时间，单位是秒。
    * lbListenerId  经典型负载均衡监听器ID，多个负载均衡监听器ID以逗号分隔。
    * lbaasListeners  增强型负载均衡器信息，该参数为预留字段。
    * availableZones  可用分区信息
    * networks  网络信息
    * securityGroups  安全组信息
    * createTime  创建伸缩组时间，遵循UTC时间。
    * vpcId  伸缩组所在的VPC ID。
    * detail  伸缩组详情。
    * isScaling  伸缩组伸缩标志。
    * healthPeriodicAuditMethod  健康检查方式。
    * healthPeriodicAuditTime  健康检查的间隔时间。
    * healthPeriodicAuditGracePeriod  健康状况检查宽限期。
    * instanceTerminatePolicy  移除策略。
    * notifications  通知方式：  EMAIL为发送邮件通知。  该通知方式已经被废除，建议给弹性伸缩组配置通知功能。请参考[通知](https://support.huaweicloud.com/api-as/as_06_0800.html)。
    * deletePublicip  删除云服务器是否删除云服务器绑定的弹性IP。
    * deleteVolume  删除云服务器是否删除云服务器绑定的数据盘
    * cloudLocationId  该参数为预留字段
    * enterpriseProjectId  企业项目ID
    * activityType  伸缩组活动类型
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingGroupName' => 'scaling_group_name',
            'scalingGroupId' => 'scaling_group_id',
            'scalingGroupStatus' => 'scaling_group_status',
            'scalingConfigurationId' => 'scaling_configuration_id',
            'scalingConfigurationName' => 'scaling_configuration_name',
            'currentInstanceNumber' => 'current_instance_number',
            'desireInstanceNumber' => 'desire_instance_number',
            'minInstanceNumber' => 'min_instance_number',
            'maxInstanceNumber' => 'max_instance_number',
            'coolDownTime' => 'cool_down_time',
            'lbListenerId' => 'lb_listener_id',
            'lbaasListeners' => 'lbaas_listeners',
            'availableZones' => 'available_zones',
            'networks' => 'networks',
            'securityGroups' => 'security_groups',
            'createTime' => 'create_time',
            'vpcId' => 'vpc_id',
            'detail' => 'detail',
            'isScaling' => 'is_scaling',
            'healthPeriodicAuditMethod' => 'health_periodic_audit_method',
            'healthPeriodicAuditTime' => 'health_periodic_audit_time',
            'healthPeriodicAuditGracePeriod' => 'health_periodic_audit_grace_period',
            'instanceTerminatePolicy' => 'instance_terminate_policy',
            'notifications' => 'notifications',
            'deletePublicip' => 'delete_publicip',
            'deleteVolume' => 'delete_volume',
            'cloudLocationId' => 'cloud_location_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'activityType' => 'activity_type',
            'multiAzPriorityPolicy' => 'multi_az_priority_policy',
            'iamAgencyName' => 'iam_agency_name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingGroupName  伸缩组名称。
    * scalingGroupId  伸缩组ID。
    * scalingGroupStatus  伸缩组状态。
    * scalingConfigurationId  伸缩配置ID。
    * scalingConfigurationName  伸缩配置名称。
    * currentInstanceNumber  伸缩组中当前实例数。
    * desireInstanceNumber  伸缩组期望实例数。
    * minInstanceNumber  伸缩组最小实例数。
    * maxInstanceNumber  伸缩组最大实例数
    * coolDownTime  冷却时间，单位是秒。
    * lbListenerId  经典型负载均衡监听器ID，多个负载均衡监听器ID以逗号分隔。
    * lbaasListeners  增强型负载均衡器信息，该参数为预留字段。
    * availableZones  可用分区信息
    * networks  网络信息
    * securityGroups  安全组信息
    * createTime  创建伸缩组时间，遵循UTC时间。
    * vpcId  伸缩组所在的VPC ID。
    * detail  伸缩组详情。
    * isScaling  伸缩组伸缩标志。
    * healthPeriodicAuditMethod  健康检查方式。
    * healthPeriodicAuditTime  健康检查的间隔时间。
    * healthPeriodicAuditGracePeriod  健康状况检查宽限期。
    * instanceTerminatePolicy  移除策略。
    * notifications  通知方式：  EMAIL为发送邮件通知。  该通知方式已经被废除，建议给弹性伸缩组配置通知功能。请参考[通知](https://support.huaweicloud.com/api-as/as_06_0800.html)。
    * deletePublicip  删除云服务器是否删除云服务器绑定的弹性IP。
    * deleteVolume  删除云服务器是否删除云服务器绑定的数据盘
    * cloudLocationId  该参数为预留字段
    * enterpriseProjectId  企业项目ID
    * activityType  伸缩组活动类型
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingGroupName' => 'setScalingGroupName',
            'scalingGroupId' => 'setScalingGroupId',
            'scalingGroupStatus' => 'setScalingGroupStatus',
            'scalingConfigurationId' => 'setScalingConfigurationId',
            'scalingConfigurationName' => 'setScalingConfigurationName',
            'currentInstanceNumber' => 'setCurrentInstanceNumber',
            'desireInstanceNumber' => 'setDesireInstanceNumber',
            'minInstanceNumber' => 'setMinInstanceNumber',
            'maxInstanceNumber' => 'setMaxInstanceNumber',
            'coolDownTime' => 'setCoolDownTime',
            'lbListenerId' => 'setLbListenerId',
            'lbaasListeners' => 'setLbaasListeners',
            'availableZones' => 'setAvailableZones',
            'networks' => 'setNetworks',
            'securityGroups' => 'setSecurityGroups',
            'createTime' => 'setCreateTime',
            'vpcId' => 'setVpcId',
            'detail' => 'setDetail',
            'isScaling' => 'setIsScaling',
            'healthPeriodicAuditMethod' => 'setHealthPeriodicAuditMethod',
            'healthPeriodicAuditTime' => 'setHealthPeriodicAuditTime',
            'healthPeriodicAuditGracePeriod' => 'setHealthPeriodicAuditGracePeriod',
            'instanceTerminatePolicy' => 'setInstanceTerminatePolicy',
            'notifications' => 'setNotifications',
            'deletePublicip' => 'setDeletePublicip',
            'deleteVolume' => 'setDeleteVolume',
            'cloudLocationId' => 'setCloudLocationId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'activityType' => 'setActivityType',
            'multiAzPriorityPolicy' => 'setMultiAzPriorityPolicy',
            'iamAgencyName' => 'setIamAgencyName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingGroupName  伸缩组名称。
    * scalingGroupId  伸缩组ID。
    * scalingGroupStatus  伸缩组状态。
    * scalingConfigurationId  伸缩配置ID。
    * scalingConfigurationName  伸缩配置名称。
    * currentInstanceNumber  伸缩组中当前实例数。
    * desireInstanceNumber  伸缩组期望实例数。
    * minInstanceNumber  伸缩组最小实例数。
    * maxInstanceNumber  伸缩组最大实例数
    * coolDownTime  冷却时间，单位是秒。
    * lbListenerId  经典型负载均衡监听器ID，多个负载均衡监听器ID以逗号分隔。
    * lbaasListeners  增强型负载均衡器信息，该参数为预留字段。
    * availableZones  可用分区信息
    * networks  网络信息
    * securityGroups  安全组信息
    * createTime  创建伸缩组时间，遵循UTC时间。
    * vpcId  伸缩组所在的VPC ID。
    * detail  伸缩组详情。
    * isScaling  伸缩组伸缩标志。
    * healthPeriodicAuditMethod  健康检查方式。
    * healthPeriodicAuditTime  健康检查的间隔时间。
    * healthPeriodicAuditGracePeriod  健康状况检查宽限期。
    * instanceTerminatePolicy  移除策略。
    * notifications  通知方式：  EMAIL为发送邮件通知。  该通知方式已经被废除，建议给弹性伸缩组配置通知功能。请参考[通知](https://support.huaweicloud.com/api-as/as_06_0800.html)。
    * deletePublicip  删除云服务器是否删除云服务器绑定的弹性IP。
    * deleteVolume  删除云服务器是否删除云服务器绑定的数据盘
    * cloudLocationId  该参数为预留字段
    * enterpriseProjectId  企业项目ID
    * activityType  伸缩组活动类型
    * multiAzPriorityPolicy  伸缩组扩缩容时目标AZ选择的优先级策略
    * iamAgencyName  委托的名称委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。
    * description  伸缩组描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingGroupName' => 'getScalingGroupName',
            'scalingGroupId' => 'getScalingGroupId',
            'scalingGroupStatus' => 'getScalingGroupStatus',
            'scalingConfigurationId' => 'getScalingConfigurationId',
            'scalingConfigurationName' => 'getScalingConfigurationName',
            'currentInstanceNumber' => 'getCurrentInstanceNumber',
            'desireInstanceNumber' => 'getDesireInstanceNumber',
            'minInstanceNumber' => 'getMinInstanceNumber',
            'maxInstanceNumber' => 'getMaxInstanceNumber',
            'coolDownTime' => 'getCoolDownTime',
            'lbListenerId' => 'getLbListenerId',
            'lbaasListeners' => 'getLbaasListeners',
            'availableZones' => 'getAvailableZones',
            'networks' => 'getNetworks',
            'securityGroups' => 'getSecurityGroups',
            'createTime' => 'getCreateTime',
            'vpcId' => 'getVpcId',
            'detail' => 'getDetail',
            'isScaling' => 'getIsScaling',
            'healthPeriodicAuditMethod' => 'getHealthPeriodicAuditMethod',
            'healthPeriodicAuditTime' => 'getHealthPeriodicAuditTime',
            'healthPeriodicAuditGracePeriod' => 'getHealthPeriodicAuditGracePeriod',
            'instanceTerminatePolicy' => 'getInstanceTerminatePolicy',
            'notifications' => 'getNotifications',
            'deletePublicip' => 'getDeletePublicip',
            'deleteVolume' => 'getDeleteVolume',
            'cloudLocationId' => 'getCloudLocationId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'activityType' => 'getActivityType',
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
    const SCALING_GROUP_STATUS_INSERVICE = 'INSERVICE';
    const SCALING_GROUP_STATUS_PAUSED = 'PAUSED';
    const SCALING_GROUP_STATUS_ERROR = 'ERROR';
    const SCALING_GROUP_STATUS_DELETING = 'DELETING';
    const SCALING_GROUP_STATUS_FREEZED = 'FREEZED';
    const HEALTH_PERIODIC_AUDIT_METHOD_ELB_AUDIT = 'ELB_AUDIT';
    const HEALTH_PERIODIC_AUDIT_METHOD_NOVA_AUDIT = 'NOVA_AUDIT';
    const INSTANCE_TERMINATE_POLICY_OLD_CONFIG_OLD_INSTANCE = 'OLD_CONFIG_OLD_INSTANCE';
    const INSTANCE_TERMINATE_POLICY_OLD_CONFIG_NEW_INSTANCE = 'OLD_CONFIG_NEW_INSTANCE';
    const INSTANCE_TERMINATE_POLICY_OLD_INSTANCE = 'OLD_INSTANCE';
    const INSTANCE_TERMINATE_POLICY_NEW_INSTANCE = 'NEW_INSTANCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingGroupStatusAllowableValues()
    {
        return [
            self::SCALING_GROUP_STATUS_INSERVICE,
            self::SCALING_GROUP_STATUS_PAUSED,
            self::SCALING_GROUP_STATUS_ERROR,
            self::SCALING_GROUP_STATUS_DELETING,
            self::SCALING_GROUP_STATUS_FREEZED,
        ];
    }

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
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
        $this->container['scalingGroupStatus'] = isset($data['scalingGroupStatus']) ? $data['scalingGroupStatus'] : null;
        $this->container['scalingConfigurationId'] = isset($data['scalingConfigurationId']) ? $data['scalingConfigurationId'] : null;
        $this->container['scalingConfigurationName'] = isset($data['scalingConfigurationName']) ? $data['scalingConfigurationName'] : null;
        $this->container['currentInstanceNumber'] = isset($data['currentInstanceNumber']) ? $data['currentInstanceNumber'] : null;
        $this->container['desireInstanceNumber'] = isset($data['desireInstanceNumber']) ? $data['desireInstanceNumber'] : null;
        $this->container['minInstanceNumber'] = isset($data['minInstanceNumber']) ? $data['minInstanceNumber'] : null;
        $this->container['maxInstanceNumber'] = isset($data['maxInstanceNumber']) ? $data['maxInstanceNumber'] : null;
        $this->container['coolDownTime'] = isset($data['coolDownTime']) ? $data['coolDownTime'] : null;
        $this->container['lbListenerId'] = isset($data['lbListenerId']) ? $data['lbListenerId'] : null;
        $this->container['lbaasListeners'] = isset($data['lbaasListeners']) ? $data['lbaasListeners'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['isScaling'] = isset($data['isScaling']) ? $data['isScaling'] : null;
        $this->container['healthPeriodicAuditMethod'] = isset($data['healthPeriodicAuditMethod']) ? $data['healthPeriodicAuditMethod'] : null;
        $this->container['healthPeriodicAuditTime'] = isset($data['healthPeriodicAuditTime']) ? $data['healthPeriodicAuditTime'] : null;
        $this->container['healthPeriodicAuditGracePeriod'] = isset($data['healthPeriodicAuditGracePeriod']) ? $data['healthPeriodicAuditGracePeriod'] : null;
        $this->container['instanceTerminatePolicy'] = isset($data['instanceTerminatePolicy']) ? $data['instanceTerminatePolicy'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['deletePublicip'] = isset($data['deletePublicip']) ? $data['deletePublicip'] : null;
        $this->container['deleteVolume'] = isset($data['deleteVolume']) ? $data['deleteVolume'] : null;
        $this->container['cloudLocationId'] = isset($data['cloudLocationId']) ? $data['cloudLocationId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['activityType'] = isset($data['activityType']) ? $data['activityType'] : null;
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
            if (!is_null($this->container['scalingGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingGroupId'])) {
                $invalidProperties[] = "invalid value for 'scalingGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getScalingGroupStatusAllowableValues();
                if (!is_null($this->container['scalingGroupStatus']) && !in_array($this->container['scalingGroupStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingGroupStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['scalingConfigurationId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingConfigurationId'])) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['scalingConfigurationName']) && (mb_strlen($this->container['scalingConfigurationName']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalingConfigurationName']) && (mb_strlen($this->container['scalingConfigurationName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scalingConfigurationName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['coolDownTime']) && ($this->container['coolDownTime'] > 86400)) {
                $invalidProperties[] = "invalid value for 'coolDownTime', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['lbListenerId']) && (mb_strlen($this->container['lbListenerId']) > 32)) {
                $invalidProperties[] = "invalid value for 'lbListenerId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['lbListenerId']) && (mb_strlen($this->container['lbListenerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'lbListenerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['vpcId'])) {
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
    *  伸缩组名称。
    *
    * @return string|null
    */
    public function getScalingGroupName()
    {
        return $this->container['scalingGroupName'];
    }

    /**
    * Sets scalingGroupName
    *
    * @param string|null $scalingGroupName 伸缩组名称。
    *
    * @return $this
    */
    public function setScalingGroupName($scalingGroupName)
    {
        $this->container['scalingGroupName'] = $scalingGroupName;
        return $this;
    }

    /**
    * Gets scalingGroupId
    *  伸缩组ID。
    *
    * @return string|null
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string|null $scalingGroupId 伸缩组ID。
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
        return $this;
    }

    /**
    * Gets scalingGroupStatus
    *  伸缩组状态。
    *
    * @return string|null
    */
    public function getScalingGroupStatus()
    {
        return $this->container['scalingGroupStatus'];
    }

    /**
    * Sets scalingGroupStatus
    *
    * @param string|null $scalingGroupStatus 伸缩组状态。
    *
    * @return $this
    */
    public function setScalingGroupStatus($scalingGroupStatus)
    {
        $this->container['scalingGroupStatus'] = $scalingGroupStatus;
        return $this;
    }

    /**
    * Gets scalingConfigurationId
    *  伸缩配置ID。
    *
    * @return string|null
    */
    public function getScalingConfigurationId()
    {
        return $this->container['scalingConfigurationId'];
    }

    /**
    * Sets scalingConfigurationId
    *
    * @param string|null $scalingConfigurationId 伸缩配置ID。
    *
    * @return $this
    */
    public function setScalingConfigurationId($scalingConfigurationId)
    {
        $this->container['scalingConfigurationId'] = $scalingConfigurationId;
        return $this;
    }

    /**
    * Gets scalingConfigurationName
    *  伸缩配置名称。
    *
    * @return string|null
    */
    public function getScalingConfigurationName()
    {
        return $this->container['scalingConfigurationName'];
    }

    /**
    * Sets scalingConfigurationName
    *
    * @param string|null $scalingConfigurationName 伸缩配置名称。
    *
    * @return $this
    */
    public function setScalingConfigurationName($scalingConfigurationName)
    {
        $this->container['scalingConfigurationName'] = $scalingConfigurationName;
        return $this;
    }

    /**
    * Gets currentInstanceNumber
    *  伸缩组中当前实例数。
    *
    * @return int|null
    */
    public function getCurrentInstanceNumber()
    {
        return $this->container['currentInstanceNumber'];
    }

    /**
    * Sets currentInstanceNumber
    *
    * @param int|null $currentInstanceNumber 伸缩组中当前实例数。
    *
    * @return $this
    */
    public function setCurrentInstanceNumber($currentInstanceNumber)
    {
        $this->container['currentInstanceNumber'] = $currentInstanceNumber;
        return $this;
    }

    /**
    * Gets desireInstanceNumber
    *  伸缩组期望实例数。
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
    * @param int|null $desireInstanceNumber 伸缩组期望实例数。
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
    *  伸缩组最小实例数。
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
    * @param int|null $minInstanceNumber 伸缩组最小实例数。
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
    *  伸缩组最大实例数
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
    * @param int|null $maxInstanceNumber 伸缩组最大实例数
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
    *  冷却时间，单位是秒。
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
    * @param int|null $coolDownTime 冷却时间，单位是秒。
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
    *  经典型负载均衡监听器ID，多个负载均衡监听器ID以逗号分隔。
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
    * @param string|null $lbListenerId 经典型负载均衡监听器ID，多个负载均衡监听器ID以逗号分隔。
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
    *  增强型负载均衡器信息，该参数为预留字段。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\LbaasListenersResult[]|null
    */
    public function getLbaasListeners()
    {
        return $this->container['lbaasListeners'];
    }

    /**
    * Sets lbaasListeners
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\LbaasListenersResult[]|null $lbaasListeners 增强型负载均衡器信息，该参数为预留字段。
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
    *  可用分区信息
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
    * @param string[]|null $availableZones 可用分区信息
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
    *  网络信息
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\NetworksResult[]|null
    */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
    * Sets networks
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\NetworksResult[]|null $networks 网络信息
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
    *  安全组信息
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\SecurityGroupsResult[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\SecurityGroupsResult[]|null $securityGroups 安全组信息
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets createTime
    *  创建伸缩组时间，遵循UTC时间。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建伸缩组时间，遵循UTC时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets vpcId
    *  伸缩组所在的VPC ID。
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
    * @param string|null $vpcId 伸缩组所在的VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets detail
    *  伸缩组详情。
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 伸缩组详情。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets isScaling
    *  伸缩组伸缩标志。
    *
    * @return bool|null
    */
    public function getIsScaling()
    {
        return $this->container['isScaling'];
    }

    /**
    * Sets isScaling
    *
    * @param bool|null $isScaling 伸缩组伸缩标志。
    *
    * @return $this
    */
    public function setIsScaling($isScaling)
    {
        $this->container['isScaling'] = $isScaling;
        return $this;
    }

    /**
    * Gets healthPeriodicAuditMethod
    *  健康检查方式。
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
    * @param string|null $healthPeriodicAuditMethod 健康检查方式。
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
    *  健康检查的间隔时间。
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
    * @param int|null $healthPeriodicAuditTime 健康检查的间隔时间。
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
    *  健康状况检查宽限期。
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
    * @param int|null $healthPeriodicAuditGracePeriod 健康状况检查宽限期。
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
    *  移除策略。
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
    * @param string|null $instanceTerminatePolicy 移除策略。
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
    *  通知方式：  EMAIL为发送邮件通知。  该通知方式已经被废除，建议给弹性伸缩组配置通知功能。请参考[通知](https://support.huaweicloud.com/api-as/as_06_0800.html)。
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
    * @param string[]|null $notifications 通知方式：  EMAIL为发送邮件通知。  该通知方式已经被废除，建议给弹性伸缩组配置通知功能。请参考[通知](https://support.huaweicloud.com/api-as/as_06_0800.html)。
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
    *  删除云服务器是否删除云服务器绑定的弹性IP。
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
    * @param bool|null $deletePublicip 删除云服务器是否删除云服务器绑定的弹性IP。
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
    *  删除云服务器是否删除云服务器绑定的数据盘
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
    * @param bool|null $deleteVolume 删除云服务器是否删除云服务器绑定的数据盘
    *
    * @return $this
    */
    public function setDeleteVolume($deleteVolume)
    {
        $this->container['deleteVolume'] = $deleteVolume;
        return $this;
    }

    /**
    * Gets cloudLocationId
    *  该参数为预留字段
    *
    * @return string|null
    */
    public function getCloudLocationId()
    {
        return $this->container['cloudLocationId'];
    }

    /**
    * Sets cloudLocationId
    *
    * @param string|null $cloudLocationId 该参数为预留字段
    *
    * @return $this
    */
    public function setCloudLocationId($cloudLocationId)
    {
        $this->container['cloudLocationId'] = $cloudLocationId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets activityType
    *  伸缩组活动类型
    *
    * @return string|null
    */
    public function getActivityType()
    {
        return $this->container['activityType'];
    }

    /**
    * Sets activityType
    *
    * @param string|null $activityType 伸缩组活动类型
    *
    * @return $this
    */
    public function setActivityType($activityType)
    {
        $this->container['activityType'] = $activityType;
        return $this;
    }

    /**
    * Gets multiAzPriorityPolicy
    *  伸缩组扩缩容时目标AZ选择的优先级策略
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
    * @param string|null $multiAzPriorityPolicy 伸缩组扩缩容时目标AZ选择的优先级策略
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
    *  伸缩组描述信息
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
    * @param string|null $description 伸缩组描述信息
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

