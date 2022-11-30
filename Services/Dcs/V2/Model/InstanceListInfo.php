<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * vpcName  VPC的名称。
    * chargingMode  计费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * createdAt  创建时间。格式为：2017-03-31T12:24:46.297Z
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * capacity  缓存容量（G Byte）。
    * capacityMinor  小规格缓存容量（G Byte）。
    * orderId  订单ID，仅在创建包周期实例时返回。按需实例时此值为null
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。
    * engine  缓存引擎。
    * engineVersion  缓存版本。
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  缓存的端口。
    * userId  用户id。
    * userName  用户名。
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * name  实例名称。
    * specCode  产品规格编码。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)。
    * tags  实例标签键值。
    * enterpriseProjectId  企业项目ID。
    * description  实例描述备注
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * azCodes  有资源的可用区编码。
    * features  features
    * subStatus  实例子状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicipId' => 'string',
            'vpcName' => 'string',
            'chargingMode' => 'int',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'createdAt' => 'string',
            'enableSsl' => 'bool',
            'maxMemory' => 'int',
            'usedMemory' => 'int',
            'publicipAddress' => 'string',
            'capacity' => 'int',
            'capacityMinor' => 'string',
            'orderId' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'serviceUpgrade' => 'bool',
            'noPasswordAccess' => 'string',
            'serviceTaskId' => 'string',
            'ip' => 'string',
            'accessUser' => 'string',
            'instanceId' => 'string',
            'enablePublicip' => 'bool',
            'port' => 'int',
            'userId' => 'string',
            'userName' => 'string',
            'domainName' => 'string',
            'readonlyDomainName' => 'string',
            'name' => 'string',
            'specCode' => 'string',
            'status' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]',
            'enterpriseProjectId' => 'string',
            'description' => 'string',
            'cpuType' => 'string',
            'azCodes' => 'string[]',
            'features' => '\HuaweiCloud\SDK\Dcs\V2\Model\Features',
            'subStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * vpcName  VPC的名称。
    * chargingMode  计费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * createdAt  创建时间。格式为：2017-03-31T12:24:46.297Z
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * capacity  缓存容量（G Byte）。
    * capacityMinor  小规格缓存容量（G Byte）。
    * orderId  订单ID，仅在创建包周期实例时返回。按需实例时此值为null
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。
    * engine  缓存引擎。
    * engineVersion  缓存版本。
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  缓存的端口。
    * userId  用户id。
    * userName  用户名。
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * name  实例名称。
    * specCode  产品规格编码。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)。
    * tags  实例标签键值。
    * enterpriseProjectId  企业项目ID。
    * description  实例描述备注
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * azCodes  有资源的可用区编码。
    * features  features
    * subStatus  实例子状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicipId' => null,
        'vpcName' => null,
        'chargingMode' => 'int32',
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'createdAt' => null,
        'enableSsl' => null,
        'maxMemory' => 'int32',
        'usedMemory' => 'int32',
        'publicipAddress' => null,
        'capacity' => 'int32',
        'capacityMinor' => null,
        'orderId' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'engine' => null,
        'engineVersion' => null,
        'serviceUpgrade' => null,
        'noPasswordAccess' => null,
        'serviceTaskId' => null,
        'ip' => null,
        'accessUser' => null,
        'instanceId' => null,
        'enablePublicip' => null,
        'port' => 'int32',
        'userId' => null,
        'userName' => null,
        'domainName' => null,
        'readonlyDomainName' => null,
        'name' => 'int32',
        'specCode' => null,
        'status' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'description' => null,
        'cpuType' => null,
        'azCodes' => null,
        'features' => null,
        'subStatus' => null
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
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * vpcName  VPC的名称。
    * chargingMode  计费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * createdAt  创建时间。格式为：2017-03-31T12:24:46.297Z
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * capacity  缓存容量（G Byte）。
    * capacityMinor  小规格缓存容量（G Byte）。
    * orderId  订单ID，仅在创建包周期实例时返回。按需实例时此值为null
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。
    * engine  缓存引擎。
    * engineVersion  缓存版本。
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  缓存的端口。
    * userId  用户id。
    * userName  用户名。
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * name  实例名称。
    * specCode  产品规格编码。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)。
    * tags  实例标签键值。
    * enterpriseProjectId  企业项目ID。
    * description  实例描述备注
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * azCodes  有资源的可用区编码。
    * features  features
    * subStatus  实例子状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicipId' => 'publicip_id',
            'vpcName' => 'vpc_name',
            'chargingMode' => 'charging_mode',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'createdAt' => 'created_at',
            'enableSsl' => 'enable_ssl',
            'maxMemory' => 'max_memory',
            'usedMemory' => 'used_memory',
            'publicipAddress' => 'publicip_address',
            'capacity' => 'capacity',
            'capacityMinor' => 'capacity_minor',
            'orderId' => 'order_id',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'serviceUpgrade' => 'service_upgrade',
            'noPasswordAccess' => 'no_password_access',
            'serviceTaskId' => 'service_task_id',
            'ip' => 'ip',
            'accessUser' => 'access_user',
            'instanceId' => 'instance_id',
            'enablePublicip' => 'enable_publicip',
            'port' => 'port',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'domainName' => 'domain_name',
            'readonlyDomainName' => 'readonly_domain_name',
            'name' => 'name',
            'specCode' => 'spec_code',
            'status' => 'status',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'description' => 'description',
            'cpuType' => 'cpu_type',
            'azCodes' => 'az_codes',
            'features' => 'features',
            'subStatus' => 'sub_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * vpcName  VPC的名称。
    * chargingMode  计费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * createdAt  创建时间。格式为：2017-03-31T12:24:46.297Z
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * capacity  缓存容量（G Byte）。
    * capacityMinor  小规格缓存容量（G Byte）。
    * orderId  订单ID，仅在创建包周期实例时返回。按需实例时此值为null
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。
    * engine  缓存引擎。
    * engineVersion  缓存版本。
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  缓存的端口。
    * userId  用户id。
    * userName  用户名。
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * name  实例名称。
    * specCode  产品规格编码。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)。
    * tags  实例标签键值。
    * enterpriseProjectId  企业项目ID。
    * description  实例描述备注
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * azCodes  有资源的可用区编码。
    * features  features
    * subStatus  实例子状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicipId' => 'setPublicipId',
            'vpcName' => 'setVpcName',
            'chargingMode' => 'setChargingMode',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'createdAt' => 'setCreatedAt',
            'enableSsl' => 'setEnableSsl',
            'maxMemory' => 'setMaxMemory',
            'usedMemory' => 'setUsedMemory',
            'publicipAddress' => 'setPublicipAddress',
            'capacity' => 'setCapacity',
            'capacityMinor' => 'setCapacityMinor',
            'orderId' => 'setOrderId',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'serviceUpgrade' => 'setServiceUpgrade',
            'noPasswordAccess' => 'setNoPasswordAccess',
            'serviceTaskId' => 'setServiceTaskId',
            'ip' => 'setIp',
            'accessUser' => 'setAccessUser',
            'instanceId' => 'setInstanceId',
            'enablePublicip' => 'setEnablePublicip',
            'port' => 'setPort',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'domainName' => 'setDomainName',
            'readonlyDomainName' => 'setReadonlyDomainName',
            'name' => 'setName',
            'specCode' => 'setSpecCode',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'description' => 'setDescription',
            'cpuType' => 'setCpuType',
            'azCodes' => 'setAzCodes',
            'features' => 'setFeatures',
            'subStatus' => 'setSubStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicipId  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    * vpcName  VPC的名称。
    * chargingMode  计费模式，0表示按需计费，1表示包年/包月计费。
    * vpcId  VPC ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * createdAt  创建时间。格式为：2017-03-31T12:24:46.297Z
    * enableSsl  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    * maxMemory  总内存，单位：MB。
    * usedMemory  已使用的内存，单位：MB。
    * publicipAddress  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    * capacity  缓存容量（G Byte）。
    * capacityMinor  小规格缓存容量（G Byte）。
    * orderId  订单ID，仅在创建包周期实例时返回。按需实例时此值为null
    * maintainBegin  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。
    * maintainEnd  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。
    * engine  缓存引擎。
    * engineVersion  缓存版本。
    * serviceUpgrade  实例是否存在升级任务。 - true：存在 - false：不存在
    * noPasswordAccess  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    * serviceTaskId  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    * ip  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    * accessUser  通过密码认证访问缓存实例的认证用户名。
    * instanceId  实例ID。
    * enablePublicip  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    * port  缓存的端口。
    * userId  用户id。
    * userName  用户名。
    * domainName  实例的域名。
    * readonlyDomainName  实例的只读域名，只有主备实例有该字段。
    * name  实例名称。
    * specCode  产品规格编码。
    * status  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)。
    * tags  实例标签键值。
    * enterpriseProjectId  企业项目ID。
    * description  实例描述备注
    * cpuType  实例CPU类型，通常为x86_64或aarch64
    * azCodes  有资源的可用区编码。
    * features  features
    * subStatus  实例子状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicipId' => 'getPublicipId',
            'vpcName' => 'getVpcName',
            'chargingMode' => 'getChargingMode',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'createdAt' => 'getCreatedAt',
            'enableSsl' => 'getEnableSsl',
            'maxMemory' => 'getMaxMemory',
            'usedMemory' => 'getUsedMemory',
            'publicipAddress' => 'getPublicipAddress',
            'capacity' => 'getCapacity',
            'capacityMinor' => 'getCapacityMinor',
            'orderId' => 'getOrderId',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'serviceUpgrade' => 'getServiceUpgrade',
            'noPasswordAccess' => 'getNoPasswordAccess',
            'serviceTaskId' => 'getServiceTaskId',
            'ip' => 'getIp',
            'accessUser' => 'getAccessUser',
            'instanceId' => 'getInstanceId',
            'enablePublicip' => 'getEnablePublicip',
            'port' => 'getPort',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'domainName' => 'getDomainName',
            'readonlyDomainName' => 'getReadonlyDomainName',
            'name' => 'getName',
            'specCode' => 'getSpecCode',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'description' => 'getDescription',
            'cpuType' => 'getCpuType',
            'azCodes' => 'getAzCodes',
            'features' => 'getFeatures',
            'subStatus' => 'getSubStatus'
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
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['maxMemory'] = isset($data['maxMemory']) ? $data['maxMemory'] : null;
        $this->container['usedMemory'] = isset($data['usedMemory']) ? $data['usedMemory'] : null;
        $this->container['publicipAddress'] = isset($data['publicipAddress']) ? $data['publicipAddress'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['capacityMinor'] = isset($data['capacityMinor']) ? $data['capacityMinor'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['serviceUpgrade'] = isset($data['serviceUpgrade']) ? $data['serviceUpgrade'] : null;
        $this->container['noPasswordAccess'] = isset($data['noPasswordAccess']) ? $data['noPasswordAccess'] : null;
        $this->container['serviceTaskId'] = isset($data['serviceTaskId']) ? $data['serviceTaskId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['accessUser'] = isset($data['accessUser']) ? $data['accessUser'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['readonlyDomainName'] = isset($data['readonlyDomainName']) ? $data['readonlyDomainName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cpuType'] = isset($data['cpuType']) ? $data['cpuType'] : null;
        $this->container['azCodes'] = isset($data['azCodes']) ? $data['azCodes'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['subStatus'] = isset($data['subStatus']) ? $data['subStatus'] : null;
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
    * Gets publicipId
    *  Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
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
    * @param string|null $publicipId Redis缓存实例绑定的弹性IP地址的id。 如果未开启公网访问功能，该字段值为null。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
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
    * Gets chargingMode
    *  计费模式，0表示按需计费，1表示包年/包月计费。
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
    * @param int|null $chargingMode 计费模式，0表示按需计费，1表示包年/包月计费。
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
    * Gets createdAt
    *  创建时间。格式为：2017-03-31T12:24:46.297Z
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
    * @param string|null $createdAt 创建时间。格式为：2017-03-31T12:24:46.297Z
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets enableSsl
    *  Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl Redis缓存实例开启公网访问功能时，是否选择支持ssl。 - true：开启 - false：不开启
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets maxMemory
    *  总内存，单位：MB。
    *
    * @return int|null
    */
    public function getMaxMemory()
    {
        return $this->container['maxMemory'];
    }

    /**
    * Sets maxMemory
    *
    * @param int|null $maxMemory 总内存，单位：MB。
    *
    * @return $this
    */
    public function setMaxMemory($maxMemory)
    {
        $this->container['maxMemory'] = $maxMemory;
        return $this;
    }

    /**
    * Gets usedMemory
    *  已使用的内存，单位：MB。
    *
    * @return int|null
    */
    public function getUsedMemory()
    {
        return $this->container['usedMemory'];
    }

    /**
    * Sets usedMemory
    *
    * @param int|null $usedMemory 已使用的内存，单位：MB。
    *
    * @return $this
    */
    public function setUsedMemory($usedMemory)
    {
        $this->container['usedMemory'] = $usedMemory;
        return $this;
    }

    /**
    * Gets publicipAddress
    *  Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
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
    * @param string|null $publicipAddress Redis缓存实例绑定的弹性IP地址。 如果未开启公网访问功能，该字段值为null。
    *
    * @return $this
    */
    public function setPublicipAddress($publicipAddress)
    {
        $this->container['publicipAddress'] = $publicipAddress;
        return $this;
    }

    /**
    * Gets capacity
    *  缓存容量（G Byte）。
    *
    * @return int|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param int|null $capacity 缓存容量（G Byte）。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets capacityMinor
    *  小规格缓存容量（G Byte）。
    *
    * @return string|null
    */
    public function getCapacityMinor()
    {
        return $this->container['capacityMinor'];
    }

    /**
    * Sets capacityMinor
    *
    * @param string|null $capacityMinor 小规格缓存容量（G Byte）。
    *
    * @return $this
    */
    public function setCapacityMinor($capacityMinor)
    {
        $this->container['capacityMinor'] = $capacityMinor;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID，仅在创建包周期实例时返回。按需实例时此值为null
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
    * @param string|null $orderId 订单ID，仅在创建包周期实例时返回。按需实例时此值为null
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
    *  维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。
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
    * @param string|null $maintainBegin 维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。
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
    *  维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。
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
    * @param string|null $maintainEnd 维护时间窗结束时间，为UTC时间，格式为HH:mm:ss。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets engine
    *  缓存引擎。
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
    * @param string|null $engine 缓存引擎。
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
    *  缓存版本。
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
    * @param string|null $engineVersion 缓存版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets serviceUpgrade
    *  实例是否存在升级任务。 - true：存在 - false：不存在
    *
    * @return bool|null
    */
    public function getServiceUpgrade()
    {
        return $this->container['serviceUpgrade'];
    }

    /**
    * Sets serviceUpgrade
    *
    * @param bool|null $serviceUpgrade 实例是否存在升级任务。 - true：存在 - false：不存在
    *
    * @return $this
    */
    public function setServiceUpgrade($serviceUpgrade)
    {
        $this->container['serviceUpgrade'] = $serviceUpgrade;
        return $this;
    }

    /**
    * Gets noPasswordAccess
    *  是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    *
    * @return string|null
    */
    public function getNoPasswordAccess()
    {
        return $this->container['noPasswordAccess'];
    }

    /**
    * Sets noPasswordAccess
    *
    * @param string|null $noPasswordAccess 是否允许免密码访问缓存实例。 - true：该实例无需密码即可访问。 - false：该实例必须通过密码认证才能访问。
    *
    * @return $this
    */
    public function setNoPasswordAccess($noPasswordAccess)
    {
        $this->container['noPasswordAccess'] = $noPasswordAccess;
        return $this;
    }

    /**
    * Gets serviceTaskId
    *  升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    *
    * @return string|null
    */
    public function getServiceTaskId()
    {
        return $this->container['serviceTaskId'];
    }

    /**
    * Sets serviceTaskId
    *
    * @param string|null $serviceTaskId 升级任务的ID。 - 当service_upgrade为true时，为升级任务的ID。 - 当service_upgrade为false时，该参数为空。
    *
    * @return $this
    */
    public function setServiceTaskId($serviceTaskId)
    {
        $this->container['serviceTaskId'] = $serviceTaskId;
        return $this;
    }

    /**
    * Gets ip
    *  连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 连接缓存实例的IP地址。如果是集群实例，返回多个IP地址，使用逗号分隔。如：192.168.0.1，192.168.0.2。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets accessUser
    *  通过密码认证访问缓存实例的认证用户名。
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
    * @param string|null $accessUser 通过密码认证访问缓存实例的认证用户名。
    *
    * @return $this
    */
    public function setAccessUser($accessUser)
    {
        $this->container['accessUser'] = $accessUser;
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
    * Gets enablePublicip
    *  Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
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
    * @param bool|null $enablePublicip Redis缓存实例是否开启公网访问功能。 - true：开启 - false：不开启
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets port
    *  缓存的端口。
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
    * @param int|null $port 缓存的端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets userId
    *  用户id。
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
    * @param string|null $userId 用户id。
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
    * Gets domainName
    *  实例的域名。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 实例的域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets readonlyDomainName
    *  实例的只读域名，只有主备实例有该字段。
    *
    * @return string|null
    */
    public function getReadonlyDomainName()
    {
        return $this->container['readonlyDomainName'];
    }

    /**
    * Sets readonlyDomainName
    *
    * @param string|null $readonlyDomainName 实例的只读域名，只有主备实例有该字段。
    *
    * @return $this
    */
    public function setReadonlyDomainName($readonlyDomainName)
    {
        $this->container['readonlyDomainName'] = $readonlyDomainName;
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
    * Gets specCode
    *  产品规格编码。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 产品规格编码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)。
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
    * @param string|null $status 实例状态。详细状态说明见[缓存实例状态说明](https://support.huaweicloud.com/api-dcs/dcs-api-0312047.html)。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  实例标签键值。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ResourceTag[]|null $tags 实例标签键值。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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
    * Gets description
    *  实例描述备注
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
    * @param string|null $description 实例描述备注
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cpuType
    *  实例CPU类型，通常为x86_64或aarch64
    *
    * @return string|null
    */
    public function getCpuType()
    {
        return $this->container['cpuType'];
    }

    /**
    * Sets cpuType
    *
    * @param string|null $cpuType 实例CPU类型，通常为x86_64或aarch64
    *
    * @return $this
    */
    public function setCpuType($cpuType)
    {
        $this->container['cpuType'] = $cpuType;
        return $this;
    }

    /**
    * Gets azCodes
    *  有资源的可用区编码。
    *
    * @return string[]|null
    */
    public function getAzCodes()
    {
        return $this->container['azCodes'];
    }

    /**
    * Sets azCodes
    *
    * @param string[]|null $azCodes 有资源的可用区编码。
    *
    * @return $this
    */
    public function setAzCodes($azCodes)
    {
        $this->container['azCodes'] = $azCodes;
        return $this;
    }

    /**
    * Gets features
    *  features
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\Features|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\Features|null $features features
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
        return $this;
    }

    /**
    * Gets subStatus
    *  实例子状态。
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
    * @param string|null $subStatus 实例子状态。
    *
    * @return $this
    */
    public function setSubStatus($subStatus)
    {
        $this->container['subStatus'] = $subStatus;
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

