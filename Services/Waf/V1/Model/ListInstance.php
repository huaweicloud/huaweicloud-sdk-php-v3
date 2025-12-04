<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  独享引擎实例ID
    * instancename  独享引擎实例名称
    * region  独享引擎实例Region ID
    * zone  可用区ID
    * arch  CPU架构
    * cpuFlavor  ECS规格
    * vpcId  独享引擎实例所在VPC ID
    * subnetId  独享引擎实例所在VPC的子网ID
    * serviceIp  独享引擎实例的业务面IP
    * securityGroupIds  独享引擎绑定的安全组
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  独享引擎是否可升级（0：不可升级，1：可升级）
    * cloudServiceType  云服务代码。 仅作为标记，用户可忽略。
    * resourceType  云服务资源类型，仅作为标记，用户可忽略。
    * resourceSpecCode  云服务资源代码。仅作为标记，用户可忽略。
    * specification  独享引擎ECS规格，如\"8vCPUs | 16GB\"
    * hosts  独享引擎防护的域名
    * serverId  独享引擎ECS ID
    * createTime  引擎实例创建时间
    * instanceName  独享引擎实例名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instancename' => 'string',
            'region' => 'string',
            'zone' => 'string',
            'arch' => 'string',
            'cpuFlavor' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'serviceIp' => 'string',
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
            'serverId' => 'string',
            'createTime' => 'int',
            'instanceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  独享引擎实例ID
    * instancename  独享引擎实例名称
    * region  独享引擎实例Region ID
    * zone  可用区ID
    * arch  CPU架构
    * cpuFlavor  ECS规格
    * vpcId  独享引擎实例所在VPC ID
    * subnetId  独享引擎实例所在VPC的子网ID
    * serviceIp  独享引擎实例的业务面IP
    * securityGroupIds  独享引擎绑定的安全组
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  独享引擎是否可升级（0：不可升级，1：可升级）
    * cloudServiceType  云服务代码。 仅作为标记，用户可忽略。
    * resourceType  云服务资源类型，仅作为标记，用户可忽略。
    * resourceSpecCode  云服务资源代码。仅作为标记，用户可忽略。
    * specification  独享引擎ECS规格，如\"8vCPUs | 16GB\"
    * hosts  独享引擎防护的域名
    * serverId  独享引擎ECS ID
    * createTime  引擎实例创建时间
    * instanceName  独享引擎实例名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instancename' => null,
        'region' => null,
        'zone' => null,
        'arch' => null,
        'cpuFlavor' => null,
        'vpcId' => null,
        'subnetId' => null,
        'serviceIp' => null,
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
        'serverId' => null,
        'createTime' => 'int64',
        'instanceName' => null
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
    * id  独享引擎实例ID
    * instancename  独享引擎实例名称
    * region  独享引擎实例Region ID
    * zone  可用区ID
    * arch  CPU架构
    * cpuFlavor  ECS规格
    * vpcId  独享引擎实例所在VPC ID
    * subnetId  独享引擎实例所在VPC的子网ID
    * serviceIp  独享引擎实例的业务面IP
    * securityGroupIds  独享引擎绑定的安全组
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  独享引擎是否可升级（0：不可升级，1：可升级）
    * cloudServiceType  云服务代码。 仅作为标记，用户可忽略。
    * resourceType  云服务资源类型，仅作为标记，用户可忽略。
    * resourceSpecCode  云服务资源代码。仅作为标记，用户可忽略。
    * specification  独享引擎ECS规格，如\"8vCPUs | 16GB\"
    * hosts  独享引擎防护的域名
    * serverId  独享引擎ECS ID
    * createTime  引擎实例创建时间
    * instanceName  独享引擎实例名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instancename' => 'instancename',
            'region' => 'region',
            'zone' => 'zone',
            'arch' => 'arch',
            'cpuFlavor' => 'cpu_flavor',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'serviceIp' => 'service_ip',
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
            'serverId' => 'serverId',
            'createTime' => 'create_time',
            'instanceName' => 'instance_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  独享引擎实例ID
    * instancename  独享引擎实例名称
    * region  独享引擎实例Region ID
    * zone  可用区ID
    * arch  CPU架构
    * cpuFlavor  ECS规格
    * vpcId  独享引擎实例所在VPC ID
    * subnetId  独享引擎实例所在VPC的子网ID
    * serviceIp  独享引擎实例的业务面IP
    * securityGroupIds  独享引擎绑定的安全组
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  独享引擎是否可升级（0：不可升级，1：可升级）
    * cloudServiceType  云服务代码。 仅作为标记，用户可忽略。
    * resourceType  云服务资源类型，仅作为标记，用户可忽略。
    * resourceSpecCode  云服务资源代码。仅作为标记，用户可忽略。
    * specification  独享引擎ECS规格，如\"8vCPUs | 16GB\"
    * hosts  独享引擎防护的域名
    * serverId  独享引擎ECS ID
    * createTime  引擎实例创建时间
    * instanceName  独享引擎实例名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instancename' => 'setInstancename',
            'region' => 'setRegion',
            'zone' => 'setZone',
            'arch' => 'setArch',
            'cpuFlavor' => 'setCpuFlavor',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'serviceIp' => 'setServiceIp',
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
            'serverId' => 'setServerId',
            'createTime' => 'setCreateTime',
            'instanceName' => 'setInstanceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  独享引擎实例ID
    * instancename  独享引擎实例名称
    * region  独享引擎实例Region ID
    * zone  可用区ID
    * arch  CPU架构
    * cpuFlavor  ECS规格
    * vpcId  独享引擎实例所在VPC ID
    * subnetId  独享引擎实例所在VPC的子网ID
    * serviceIp  独享引擎实例的业务面IP
    * securityGroupIds  独享引擎绑定的安全组
    * status  **参数解释：** 独享引擎计费状态标识，用于指示独享引擎当前的计费使用状态 **约束限制：** 不涉及 **取值范围：**  - 0：正常计费  - 1：冻结，资源和数据会保留，但租户无法再正常使用云服务  - 2：终止，资源和数据将清除 **默认取值：** 不涉及
    * runStatus  **参数解释：** 独享引擎运行状态标识，用于反映独享引擎当前的运行生命周期状态 **约束限制：** 不涉及 **取值范围：**  - 0：创建中  - 1：运行中  - 2：删除中  - 3：已删除  - 4：创建失败  - 5：已冻结  - 6：异常  - 7：更新中  - 8：更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 独享引擎接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * upgradable  独享引擎是否可升级（0：不可升级，1：可升级）
    * cloudServiceType  云服务代码。 仅作为标记，用户可忽略。
    * resourceType  云服务资源类型，仅作为标记，用户可忽略。
    * resourceSpecCode  云服务资源代码。仅作为标记，用户可忽略。
    * specification  独享引擎ECS规格，如\"8vCPUs | 16GB\"
    * hosts  独享引擎防护的域名
    * serverId  独享引擎ECS ID
    * createTime  引擎实例创建时间
    * instanceName  独享引擎实例名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instancename' => 'getInstancename',
            'region' => 'getRegion',
            'zone' => 'getZone',
            'arch' => 'getArch',
            'cpuFlavor' => 'getCpuFlavor',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'serviceIp' => 'getServiceIp',
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
            'serverId' => 'getServerId',
            'createTime' => 'getCreateTime',
            'instanceName' => 'getInstanceName'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['cpuFlavor'] = isset($data['cpuFlavor']) ? $data['cpuFlavor'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['serviceIp'] = isset($data['serviceIp']) ? $data['serviceIp'] : null;
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
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
    *  独享引擎实例ID
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
    * @param string|null $id 独享引擎实例ID
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
    *  独享引擎实例名称
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
    * @param string|null $instancename 独享引擎实例名称
    *
    * @return $this
    */
    public function setInstancename($instancename)
    {
        $this->container['instancename'] = $instancename;
        return $this;
    }

    /**
    * Gets region
    *  独享引擎实例Region ID
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
    * @param string|null $region 独享引擎实例Region ID
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
    *  可用区ID
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
    * @param string|null $zone 可用区ID
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
    *  CPU架构
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
    * @param string|null $arch CPU架构
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
    *  ECS规格
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
    * @param string|null $cpuFlavor ECS规格
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
    *  独享引擎实例所在VPC ID
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
    * @param string|null $vpcId 独享引擎实例所在VPC ID
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
    *  独享引擎实例所在VPC的子网ID
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
    * @param string|null $subnetId 独享引擎实例所在VPC的子网ID
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
    *  独享引擎实例的业务面IP
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
    * @param string|null $serviceIp 独享引擎实例的业务面IP
    *
    * @return $this
    */
    public function setServiceIp($serviceIp)
    {
        $this->container['serviceIp'] = $serviceIp;
        return $this;
    }

    /**
    * Gets securityGroupIds
    *  独享引擎绑定的安全组
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
    * @param string[]|null $securityGroupIds 独享引擎绑定的安全组
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
    *  独享引擎是否可升级（0：不可升级，1：可升级）
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
    * @param int|null $upgradable 独享引擎是否可升级（0：不可升级，1：可升级）
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
    *  云服务代码。 仅作为标记，用户可忽略。
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
    * @param string|null $cloudServiceType 云服务代码。 仅作为标记，用户可忽略。
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
    *  云服务资源类型，仅作为标记，用户可忽略。
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
    * @param string|null $resourceType 云服务资源类型，仅作为标记，用户可忽略。
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
    *  云服务资源代码。仅作为标记，用户可忽略。
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
    * @param string|null $resourceSpecCode 云服务资源代码。仅作为标记，用户可忽略。
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
    *  独享引擎ECS规格，如\"8vCPUs | 16GB\"
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
    * @param string|null $specification 独享引擎ECS规格，如\"8vCPUs | 16GB\"
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
    *  独享引擎防护的域名
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
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IdHostnameEntry[]|null $hosts 独享引擎防护的域名
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets serverId
    *  独享引擎ECS ID
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
    * @param string|null $serverId 独享引擎ECS ID
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets createTime
    *  引擎实例创建时间
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
    * @param int|null $createTime 引擎实例创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets instanceName
    *  独享引擎实例名称
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
    * @param string|null $instanceName 独享引擎实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
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

