<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadbalancerResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadbalancerResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  负载均衡器ID
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网的IPv4子网ID。仅支持内网类型。
    * vipPortId  负载均衡器虚拟IP对应的端口ID
    * vipAddress  负载均衡器的虚拟IP。
    * listeners  负载均衡器关联的监听器ID的列表
    * pools  负载均衡器关联的后端云服务器组ID的列表。
    * provider  负载均衡器的供应者名称。只支持vlb
    * operatingStatus  负载均衡器的操作状态
    * provisioningStatus  负载均衡器的配置状态
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * createdAt  负载均衡器的创建时间
    * updatedAt  负载均衡器的更新时间
    * enterpriseProjectId  负载均衡器的企业项目ID。
    * projectId  负载均衡器所在的项目ID。
    * tags  负载均衡器的标签列表
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。
    * chargeMode  收费模式。取值：  flavor：按规格计费 lcu：按使用量计费 说明：不影响弹性扩缩容实例、包周期实例的计费方式
    * frozenScene  负载均衡器的冻结场景。若负载均衡器有多个冻结场景，用逗号分隔。取值：  POLICE：公安冻结场景。 ILLEGAL：违规冻结场景。 VERIFY：客户未实名认证冻结场景。 PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 AREAR：欠费冻结场景。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'vipSubnetId' => 'string',
            'vipPortId' => 'string',
            'vipAddress' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]',
            'pools' => '\HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]',
            'provider' => 'string',
            'operatingStatus' => 'string',
            'provisioningStatus' => 'string',
            'adminStateUp' => 'bool',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'tags' => 'string[]',
            'publicips' => '\HuaweiCloud\SDK\Elb\V2\Model\PublicIpInfo[]',
            'chargeMode' => 'string',
            'frozenScene' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  负载均衡器ID
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网的IPv4子网ID。仅支持内网类型。
    * vipPortId  负载均衡器虚拟IP对应的端口ID
    * vipAddress  负载均衡器的虚拟IP。
    * listeners  负载均衡器关联的监听器ID的列表
    * pools  负载均衡器关联的后端云服务器组ID的列表。
    * provider  负载均衡器的供应者名称。只支持vlb
    * operatingStatus  负载均衡器的操作状态
    * provisioningStatus  负载均衡器的配置状态
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * createdAt  负载均衡器的创建时间
    * updatedAt  负载均衡器的更新时间
    * enterpriseProjectId  负载均衡器的企业项目ID。
    * projectId  负载均衡器所在的项目ID。
    * tags  负载均衡器的标签列表
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。
    * chargeMode  收费模式。取值：  flavor：按规格计费 lcu：按使用量计费 说明：不影响弹性扩缩容实例、包周期实例的计费方式
    * frozenScene  负载均衡器的冻结场景。若负载均衡器有多个冻结场景，用逗号分隔。取值：  POLICE：公安冻结场景。 ILLEGAL：违规冻结场景。 VERIFY：客户未实名认证冻结场景。 PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 AREAR：欠费冻结场景。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'vipSubnetId' => null,
        'vipPortId' => null,
        'vipAddress' => null,
        'listeners' => null,
        'pools' => null,
        'provider' => null,
        'operatingStatus' => null,
        'provisioningStatus' => null,
        'adminStateUp' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'enterpriseProjectId' => null,
        'projectId' => null,
        'tags' => null,
        'publicips' => null,
        'chargeMode' => null,
        'frozenScene' => null
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
    * id  负载均衡器ID
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网的IPv4子网ID。仅支持内网类型。
    * vipPortId  负载均衡器虚拟IP对应的端口ID
    * vipAddress  负载均衡器的虚拟IP。
    * listeners  负载均衡器关联的监听器ID的列表
    * pools  负载均衡器关联的后端云服务器组ID的列表。
    * provider  负载均衡器的供应者名称。只支持vlb
    * operatingStatus  负载均衡器的操作状态
    * provisioningStatus  负载均衡器的配置状态
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * createdAt  负载均衡器的创建时间
    * updatedAt  负载均衡器的更新时间
    * enterpriseProjectId  负载均衡器的企业项目ID。
    * projectId  负载均衡器所在的项目ID。
    * tags  负载均衡器的标签列表
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。
    * chargeMode  收费模式。取值：  flavor：按规格计费 lcu：按使用量计费 说明：不影响弹性扩缩容实例、包周期实例的计费方式
    * frozenScene  负载均衡器的冻结场景。若负载均衡器有多个冻结场景，用逗号分隔。取值：  POLICE：公安冻结场景。 ILLEGAL：违规冻结场景。 VERIFY：客户未实名认证冻结场景。 PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 AREAR：欠费冻结场景。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'vipSubnetId' => 'vip_subnet_id',
            'vipPortId' => 'vip_port_id',
            'vipAddress' => 'vip_address',
            'listeners' => 'listeners',
            'pools' => 'pools',
            'provider' => 'provider',
            'operatingStatus' => 'operating_status',
            'provisioningStatus' => 'provisioning_status',
            'adminStateUp' => 'admin_state_up',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'tags' => 'tags',
            'publicips' => 'publicips',
            'chargeMode' => 'charge_mode',
            'frozenScene' => 'frozen_scene'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  负载均衡器ID
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网的IPv4子网ID。仅支持内网类型。
    * vipPortId  负载均衡器虚拟IP对应的端口ID
    * vipAddress  负载均衡器的虚拟IP。
    * listeners  负载均衡器关联的监听器ID的列表
    * pools  负载均衡器关联的后端云服务器组ID的列表。
    * provider  负载均衡器的供应者名称。只支持vlb
    * operatingStatus  负载均衡器的操作状态
    * provisioningStatus  负载均衡器的配置状态
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * createdAt  负载均衡器的创建时间
    * updatedAt  负载均衡器的更新时间
    * enterpriseProjectId  负载均衡器的企业项目ID。
    * projectId  负载均衡器所在的项目ID。
    * tags  负载均衡器的标签列表
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。
    * chargeMode  收费模式。取值：  flavor：按规格计费 lcu：按使用量计费 说明：不影响弹性扩缩容实例、包周期实例的计费方式
    * frozenScene  负载均衡器的冻结场景。若负载均衡器有多个冻结场景，用逗号分隔。取值：  POLICE：公安冻结场景。 ILLEGAL：违规冻结场景。 VERIFY：客户未实名认证冻结场景。 PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 AREAR：欠费冻结场景。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'vipSubnetId' => 'setVipSubnetId',
            'vipPortId' => 'setVipPortId',
            'vipAddress' => 'setVipAddress',
            'listeners' => 'setListeners',
            'pools' => 'setPools',
            'provider' => 'setProvider',
            'operatingStatus' => 'setOperatingStatus',
            'provisioningStatus' => 'setProvisioningStatus',
            'adminStateUp' => 'setAdminStateUp',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'tags' => 'setTags',
            'publicips' => 'setPublicips',
            'chargeMode' => 'setChargeMode',
            'frozenScene' => 'setFrozenScene'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  负载均衡器ID
    * tenantId  负载均衡器所在的项目ID。
    * name  负载均衡器名称。
    * description  负载均衡器的描述信息
    * vipSubnetId  负载均衡器所在的子网的IPv4子网ID。仅支持内网类型。
    * vipPortId  负载均衡器虚拟IP对应的端口ID
    * vipAddress  负载均衡器的虚拟IP。
    * listeners  负载均衡器关联的监听器ID的列表
    * pools  负载均衡器关联的后端云服务器组ID的列表。
    * provider  负载均衡器的供应者名称。只支持vlb
    * operatingStatus  负载均衡器的操作状态
    * provisioningStatus  负载均衡器的配置状态
    * adminStateUp  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    * createdAt  负载均衡器的创建时间
    * updatedAt  负载均衡器的更新时间
    * enterpriseProjectId  负载均衡器的企业项目ID。
    * projectId  负载均衡器所在的项目ID。
    * tags  负载均衡器的标签列表
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。
    * chargeMode  收费模式。取值：  flavor：按规格计费 lcu：按使用量计费 说明：不影响弹性扩缩容实例、包周期实例的计费方式
    * frozenScene  负载均衡器的冻结场景。若负载均衡器有多个冻结场景，用逗号分隔。取值：  POLICE：公安冻结场景。 ILLEGAL：违规冻结场景。 VERIFY：客户未实名认证冻结场景。 PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 AREAR：欠费冻结场景。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'vipSubnetId' => 'getVipSubnetId',
            'vipPortId' => 'getVipPortId',
            'vipAddress' => 'getVipAddress',
            'listeners' => 'getListeners',
            'pools' => 'getPools',
            'provider' => 'getProvider',
            'operatingStatus' => 'getOperatingStatus',
            'provisioningStatus' => 'getProvisioningStatus',
            'adminStateUp' => 'getAdminStateUp',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'tags' => 'getTags',
            'publicips' => 'getPublicips',
            'chargeMode' => 'getChargeMode',
            'frozenScene' => 'getFrozenScene'
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
    const OPERATING_STATUS_ONLINE = 'ONLINE';
    const OPERATING_STATUS_OFFLINE = 'OFFLINE';
    const OPERATING_STATUS_DEGRADED = 'DEGRADED';
    const OPERATING_STATUS_DISABLED = 'DISABLED';
    const OPERATING_STATUS_NO_MONITOR = 'NO_MONITOR';
    const PROVISIONING_STATUS_ACTIVE = 'ACTIVE';
    const PROVISIONING_STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const PROVISIONING_STATUS_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperatingStatusAllowableValues()
    {
        return [
            self::OPERATING_STATUS_ONLINE,
            self::OPERATING_STATUS_OFFLINE,
            self::OPERATING_STATUS_DEGRADED,
            self::OPERATING_STATUS_DISABLED,
            self::OPERATING_STATUS_NO_MONITOR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProvisioningStatusAllowableValues()
    {
        return [
            self::PROVISIONING_STATUS_ACTIVE,
            self::PROVISIONING_STATUS_PENDING_CREATE,
            self::PROVISIONING_STATUS_ERROR,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vipSubnetId'] = isset($data['vipSubnetId']) ? $data['vipSubnetId'] : null;
        $this->container['vipPortId'] = isset($data['vipPortId']) ? $data['vipPortId'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['pools'] = isset($data['pools']) ? $data['pools'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['publicips'] = isset($data['publicips']) ? $data['publicips'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['frozenScene'] = isset($data['frozenScene']) ? $data['frozenScene'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if ((mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vipSubnetId'] === null) {
            $invalidProperties[] = "'vipSubnetId' can't be null";
        }
        if ($this->container['vipPortId'] === null) {
            $invalidProperties[] = "'vipPortId' can't be null";
        }
        if ($this->container['vipAddress'] === null) {
            $invalidProperties[] = "'vipAddress' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['pools'] === null) {
            $invalidProperties[] = "'pools' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
        }
            $allowedValues = $this->getOperatingStatusAllowableValues();
                if (!is_null($this->container['operatingStatus']) && !in_array($this->container['operatingStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operatingStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['operatingStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'operatingStatus', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['operatingStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'operatingStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
        }
            $allowedValues = $this->getProvisioningStatusAllowableValues();
                if (!is_null($this->container['provisioningStatus']) && !in_array($this->container['provisioningStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'provisioningStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['provisioningStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'provisioningStatus', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['provisioningStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'provisioningStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
            if ((mb_strlen($this->container['createdAt']) > 19)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            if ((mb_strlen($this->container['updatedAt']) > 19)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['publicips'] === null) {
            $invalidProperties[] = "'publicips' can't be null";
        }
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
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
    *  负载均衡器ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 负载均衡器ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  负载均衡器所在的项目ID。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 负载均衡器所在的项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  负载均衡器名称。
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
    * @param string $name 负载均衡器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  负载均衡器的描述信息
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 负载均衡器的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vipSubnetId
    *  负载均衡器所在的子网的IPv4子网ID。仅支持内网类型。
    *
    * @return string
    */
    public function getVipSubnetId()
    {
        return $this->container['vipSubnetId'];
    }

    /**
    * Sets vipSubnetId
    *
    * @param string $vipSubnetId 负载均衡器所在的子网的IPv4子网ID。仅支持内网类型。
    *
    * @return $this
    */
    public function setVipSubnetId($vipSubnetId)
    {
        $this->container['vipSubnetId'] = $vipSubnetId;
        return $this;
    }

    /**
    * Gets vipPortId
    *  负载均衡器虚拟IP对应的端口ID
    *
    * @return string
    */
    public function getVipPortId()
    {
        return $this->container['vipPortId'];
    }

    /**
    * Sets vipPortId
    *
    * @param string $vipPortId 负载均衡器虚拟IP对应的端口ID
    *
    * @return $this
    */
    public function setVipPortId($vipPortId)
    {
        $this->container['vipPortId'] = $vipPortId;
        return $this;
    }

    /**
    * Gets vipAddress
    *  负载均衡器的虚拟IP。
    *
    * @return string
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string $vipAddress 负载均衡器的虚拟IP。
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets listeners
    *  负载均衡器关联的监听器ID的列表
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[] $listeners 负载均衡器关联的监听器ID的列表
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets pools
    *  负载均衡器关联的后端云服务器组ID的列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[]
    */
    public function getPools()
    {
        return $this->container['pools'];
    }

    /**
    * Sets pools
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\ResourceList[] $pools 负载均衡器关联的后端云服务器组ID的列表。
    *
    * @return $this
    */
    public function setPools($pools)
    {
        $this->container['pools'] = $pools;
        return $this;
    }

    /**
    * Gets provider
    *  负载均衡器的供应者名称。只支持vlb
    *
    * @return string
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string $provider 负载均衡器的供应者名称。只支持vlb
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  负载均衡器的操作状态
    *
    * @return string
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string $operatingStatus 负载均衡器的操作状态
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  负载均衡器的配置状态
    *
    * @return string
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string $provisioningStatus 负载均衡器的配置状态
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 负载均衡器的管理状态。只支持设定为true，该字段的值无实际意义。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets createdAt
    *  负载均衡器的创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 负载均衡器的创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  负载均衡器的更新时间
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 负载均衡器的更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  负载均衡器的企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 负载均衡器的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets projectId
    *  负载均衡器所在的项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 负载均衡器所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tags
    *  负载均衡器的标签列表
    *
    * @return string[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[] $tags 负载均衡器的标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets publicips
    *  负载均衡器绑定的公网IP。只支持绑定一个公网IP。
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\PublicIpInfo[]
    */
    public function getPublicips()
    {
        return $this->container['publicips'];
    }

    /**
    * Sets publicips
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\PublicIpInfo[] $publicips 负载均衡器绑定的公网IP。只支持绑定一个公网IP。
    *
    * @return $this
    */
    public function setPublicips($publicips)
    {
        $this->container['publicips'] = $publicips;
        return $this;
    }

    /**
    * Gets chargeMode
    *  收费模式。取值：  flavor：按规格计费 lcu：按使用量计费 说明：不影响弹性扩缩容实例、包周期实例的计费方式
    *
    * @return string
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string $chargeMode 收费模式。取值：  flavor：按规格计费 lcu：按使用量计费 说明：不影响弹性扩缩容实例、包周期实例的计费方式
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets frozenScene
    *  负载均衡器的冻结场景。若负载均衡器有多个冻结场景，用逗号分隔。取值：  POLICE：公安冻结场景。 ILLEGAL：违规冻结场景。 VERIFY：客户未实名认证冻结场景。 PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 AREAR：欠费冻结场景。
    *
    * @return string|null
    */
    public function getFrozenScene()
    {
        return $this->container['frozenScene'];
    }

    /**
    * Sets frozenScene
    *
    * @param string|null $frozenScene 负载均衡器的冻结场景。若负载均衡器有多个冻结场景，用逗号分隔。取值：  POLICE：公安冻结场景。 ILLEGAL：违规冻结场景。 VERIFY：客户未实名认证冻结场景。 PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 AREAR：欠费冻结场景。
    *
    * @return $this
    */
    public function setFrozenScene($frozenScene)
    {
        $this->container['frozenScene'] = $frozenScene;
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

