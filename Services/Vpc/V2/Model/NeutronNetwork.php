<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  网络ID
    * status  功能说明：网络状态 取值范围：ACTIVE，DOWN，BUILD或ERROR
    * name  功能说明：网络名称 取值范围：0-255个字符
    * subnets  功能说明：网络关联的子网ID列表 约束：一个network仅支持关联一个 subnet。
    * routerexternal  功能说明：扩展属性，是否外部网络 取值范围：true、false 约束：不支持设置和更新
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享此资源 取值范围：true(共享)、false(非共享) 约束：不支持设置和更新
    * tenantId  项目ID
    * providernetworkType  功能说明：扩展属性，网络类型（支持vxlan, geneve） 取值范围：vxlan，geneve
    * availabilityZoneHints  功能说明：本网络的候选可用域
    * availabilityZones  功能说明：本网络的可用域。 取值范围：当前region下的可用域
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true（启用）、false（禁用） 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    * dnsDomain  功能说明：默认内网DNS域地址 约束：系统自动生成维护，不支持设置和更新
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'name' => 'string',
            'subnets' => 'string[]',
            'routerexternal' => 'bool',
            'adminStateUp' => 'bool',
            'shared' => 'bool',
            'tenantId' => 'string',
            'providernetworkType' => 'string',
            'availabilityZoneHints' => 'string[]',
            'availabilityZones' => 'string[]',
            'portSecurityEnabled' => 'bool',
            'dnsDomain' => 'string',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  网络ID
    * status  功能说明：网络状态 取值范围：ACTIVE，DOWN，BUILD或ERROR
    * name  功能说明：网络名称 取值范围：0-255个字符
    * subnets  功能说明：网络关联的子网ID列表 约束：一个network仅支持关联一个 subnet。
    * routerexternal  功能说明：扩展属性，是否外部网络 取值范围：true、false 约束：不支持设置和更新
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享此资源 取值范围：true(共享)、false(非共享) 约束：不支持设置和更新
    * tenantId  项目ID
    * providernetworkType  功能说明：扩展属性，网络类型（支持vxlan, geneve） 取值范围：vxlan，geneve
    * availabilityZoneHints  功能说明：本网络的候选可用域
    * availabilityZones  功能说明：本网络的可用域。 取值范围：当前region下的可用域
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true（启用）、false（禁用） 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    * dnsDomain  功能说明：默认内网DNS域地址 约束：系统自动生成维护，不支持设置和更新
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'name' => null,
        'subnets' => null,
        'routerexternal' => null,
        'adminStateUp' => null,
        'shared' => null,
        'tenantId' => null,
        'providernetworkType' => null,
        'availabilityZoneHints' => null,
        'availabilityZones' => null,
        'portSecurityEnabled' => null,
        'dnsDomain' => null,
        'projectId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  网络ID
    * status  功能说明：网络状态 取值范围：ACTIVE，DOWN，BUILD或ERROR
    * name  功能说明：网络名称 取值范围：0-255个字符
    * subnets  功能说明：网络关联的子网ID列表 约束：一个network仅支持关联一个 subnet。
    * routerexternal  功能说明：扩展属性，是否外部网络 取值范围：true、false 约束：不支持设置和更新
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享此资源 取值范围：true(共享)、false(非共享) 约束：不支持设置和更新
    * tenantId  项目ID
    * providernetworkType  功能说明：扩展属性，网络类型（支持vxlan, geneve） 取值范围：vxlan，geneve
    * availabilityZoneHints  功能说明：本网络的候选可用域
    * availabilityZones  功能说明：本网络的可用域。 取值范围：当前region下的可用域
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true（启用）、false（禁用） 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    * dnsDomain  功能说明：默认内网DNS域地址 约束：系统自动生成维护，不支持设置和更新
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'name' => 'name',
            'subnets' => 'subnets',
            'routerexternal' => 'router:external',
            'adminStateUp' => 'admin_state_up',
            'shared' => 'shared',
            'tenantId' => 'tenant_id',
            'providernetworkType' => 'provider:network_type',
            'availabilityZoneHints' => 'availability_zone_hints',
            'availabilityZones' => 'availability_zones',
            'portSecurityEnabled' => 'port_security_enabled',
            'dnsDomain' => 'dns_domain',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  网络ID
    * status  功能说明：网络状态 取值范围：ACTIVE，DOWN，BUILD或ERROR
    * name  功能说明：网络名称 取值范围：0-255个字符
    * subnets  功能说明：网络关联的子网ID列表 约束：一个network仅支持关联一个 subnet。
    * routerexternal  功能说明：扩展属性，是否外部网络 取值范围：true、false 约束：不支持设置和更新
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享此资源 取值范围：true(共享)、false(非共享) 约束：不支持设置和更新
    * tenantId  项目ID
    * providernetworkType  功能说明：扩展属性，网络类型（支持vxlan, geneve） 取值范围：vxlan，geneve
    * availabilityZoneHints  功能说明：本网络的候选可用域
    * availabilityZones  功能说明：本网络的可用域。 取值范围：当前region下的可用域
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true（启用）、false（禁用） 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    * dnsDomain  功能说明：默认内网DNS域地址 约束：系统自动生成维护，不支持设置和更新
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'name' => 'setName',
            'subnets' => 'setSubnets',
            'routerexternal' => 'setRouterexternal',
            'adminStateUp' => 'setAdminStateUp',
            'shared' => 'setShared',
            'tenantId' => 'setTenantId',
            'providernetworkType' => 'setProvidernetworkType',
            'availabilityZoneHints' => 'setAvailabilityZoneHints',
            'availabilityZones' => 'setAvailabilityZones',
            'portSecurityEnabled' => 'setPortSecurityEnabled',
            'dnsDomain' => 'setDnsDomain',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  网络ID
    * status  功能说明：网络状态 取值范围：ACTIVE，DOWN，BUILD或ERROR
    * name  功能说明：网络名称 取值范围：0-255个字符
    * subnets  功能说明：网络关联的子网ID列表 约束：一个network仅支持关联一个 subnet。
    * routerexternal  功能说明：扩展属性，是否外部网络 取值范围：true、false 约束：不支持设置和更新
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享此资源 取值范围：true(共享)、false(非共享) 约束：不支持设置和更新
    * tenantId  项目ID
    * providernetworkType  功能说明：扩展属性，网络类型（支持vxlan, geneve） 取值范围：vxlan，geneve
    * availabilityZoneHints  功能说明：本网络的候选可用域
    * availabilityZones  功能说明：本网络的可用域。 取值范围：当前region下的可用域
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true（启用）、false（禁用） 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    * dnsDomain  功能说明：默认内网DNS域地址 约束：系统自动生成维护，不支持设置和更新
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'name' => 'getName',
            'subnets' => 'getSubnets',
            'routerexternal' => 'getRouterexternal',
            'adminStateUp' => 'getAdminStateUp',
            'shared' => 'getShared',
            'tenantId' => 'getTenantId',
            'providernetworkType' => 'getProvidernetworkType',
            'availabilityZoneHints' => 'getAvailabilityZoneHints',
            'availabilityZones' => 'getAvailabilityZones',
            'portSecurityEnabled' => 'getPortSecurityEnabled',
            'dnsDomain' => 'getDnsDomain',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DOWN = 'DOWN';
    const STATUS_BUILD = 'BUILD';
    const STATUS_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_DOWN,
            self::STATUS_BUILD,
            self::STATUS_ERROR,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
        $this->container['routerexternal'] = isset($data['routerexternal']) ? $data['routerexternal'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['providernetworkType'] = isset($data['providernetworkType']) ? $data['providernetworkType'] : null;
        $this->container['availabilityZoneHints'] = isset($data['availabilityZoneHints']) ? $data['availabilityZoneHints'] : null;
        $this->container['availabilityZones'] = isset($data['availabilityZones']) ? $data['availabilityZones'] : null;
        $this->container['portSecurityEnabled'] = isset($data['portSecurityEnabled']) ? $data['portSecurityEnabled'] : null;
        $this->container['dnsDomain'] = isset($data['dnsDomain']) ? $data['dnsDomain'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
        if ($this->container['subnets'] === null) {
            $invalidProperties[] = "'subnets' can't be null";
        }
        if ($this->container['routerexternal'] === null) {
            $invalidProperties[] = "'routerexternal' can't be null";
        }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['shared'] === null) {
            $invalidProperties[] = "'shared' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if ((mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['providernetworkType'] === null) {
            $invalidProperties[] = "'providernetworkType' can't be null";
        }
            if ((mb_strlen($this->container['providernetworkType']) > 32)) {
                $invalidProperties[] = "invalid value for 'providernetworkType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['providernetworkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'providernetworkType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['availabilityZoneHints'] === null) {
            $invalidProperties[] = "'availabilityZoneHints' can't be null";
        }
        if ($this->container['availabilityZones'] === null) {
            $invalidProperties[] = "'availabilityZones' can't be null";
        }
        if ($this->container['portSecurityEnabled'] === null) {
            $invalidProperties[] = "'portSecurityEnabled' can't be null";
        }
        if ($this->container['dnsDomain'] === null) {
            $invalidProperties[] = "'dnsDomain' can't be null";
        }
            if ((mb_strlen($this->container['dnsDomain']) > 255)) {
                $invalidProperties[] = "invalid value for 'dnsDomain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['dnsDomain']) < 0)) {
                $invalidProperties[] = "invalid value for 'dnsDomain', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    *  网络ID
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
    * @param string $id 网络ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：网络状态 取值范围：ACTIVE，DOWN，BUILD或ERROR
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 功能说明：网络状态 取值范围：ACTIVE，DOWN，BUILD或ERROR
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  功能说明：网络名称 取值范围：0-255个字符
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
    * @param string $name 功能说明：网络名称 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets subnets
    *  功能说明：网络关联的子网ID列表 约束：一个network仅支持关联一个 subnet。
    *
    * @return string[]
    */
    public function getSubnets()
    {
        return $this->container['subnets'];
    }

    /**
    * Sets subnets
    *
    * @param string[] $subnets 功能说明：网络关联的子网ID列表 约束：一个network仅支持关联一个 subnet。
    *
    * @return $this
    */
    public function setSubnets($subnets)
    {
        $this->container['subnets'] = $subnets;
        return $this;
    }

    /**
    * Gets routerexternal
    *  功能说明：扩展属性，是否外部网络 取值范围：true、false 约束：不支持设置和更新
    *
    * @return bool
    */
    public function getRouterexternal()
    {
        return $this->container['routerexternal'];
    }

    /**
    * Sets routerexternal
    *
    * @param bool $routerexternal 功能说明：扩展属性，是否外部网络 取值范围：true、false 约束：不支持设置和更新
    *
    * @return $this
    */
    public function setRouterexternal($routerexternal)
    {
        $this->container['routerexternal'] = $routerexternal;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
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
    * @param bool $adminStateUp 功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets shared
    *  功能说明：是否支持跨租户共享此资源 取值范围：true(共享)、false(非共享) 约束：不支持设置和更新
    *
    * @return bool
    */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
    * Sets shared
    *
    * @param bool $shared 功能说明：是否支持跨租户共享此资源 取值范围：true(共享)、false(非共享) 约束：不支持设置和更新
    *
    * @return $this
    */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目ID
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
    * @param string $tenantId 项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets providernetworkType
    *  功能说明：扩展属性，网络类型（支持vxlan, geneve） 取值范围：vxlan，geneve
    *
    * @return string
    */
    public function getProvidernetworkType()
    {
        return $this->container['providernetworkType'];
    }

    /**
    * Sets providernetworkType
    *
    * @param string $providernetworkType 功能说明：扩展属性，网络类型（支持vxlan, geneve） 取值范围：vxlan，geneve
    *
    * @return $this
    */
    public function setProvidernetworkType($providernetworkType)
    {
        $this->container['providernetworkType'] = $providernetworkType;
        return $this;
    }

    /**
    * Gets availabilityZoneHints
    *  功能说明：本网络的候选可用域
    *
    * @return string[]
    */
    public function getAvailabilityZoneHints()
    {
        return $this->container['availabilityZoneHints'];
    }

    /**
    * Sets availabilityZoneHints
    *
    * @param string[] $availabilityZoneHints 功能说明：本网络的候选可用域
    *
    * @return $this
    */
    public function setAvailabilityZoneHints($availabilityZoneHints)
    {
        $this->container['availabilityZoneHints'] = $availabilityZoneHints;
        return $this;
    }

    /**
    * Gets availabilityZones
    *  功能说明：本网络的可用域。 取值范围：当前region下的可用域
    *
    * @return string[]
    */
    public function getAvailabilityZones()
    {
        return $this->container['availabilityZones'];
    }

    /**
    * Sets availabilityZones
    *
    * @param string[] $availabilityZones 功能说明：本网络的可用域。 取值范围：当前region下的可用域
    *
    * @return $this
    */
    public function setAvailabilityZones($availabilityZones)
    {
        $this->container['availabilityZones'] = $availabilityZones;
        return $this;
    }

    /**
    * Gets portSecurityEnabled
    *  功能说明：端口安全使能标记 取值范围：true（启用）、false（禁用） 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @return bool
    */
    public function getPortSecurityEnabled()
    {
        return $this->container['portSecurityEnabled'];
    }

    /**
    * Sets portSecurityEnabled
    *
    * @param bool $portSecurityEnabled 功能说明：端口安全使能标记 取值范围：true（启用）、false（禁用） 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @return $this
    */
    public function setPortSecurityEnabled($portSecurityEnabled)
    {
        $this->container['portSecurityEnabled'] = $portSecurityEnabled;
        return $this;
    }

    /**
    * Gets dnsDomain
    *  功能说明：默认内网DNS域地址 约束：系统自动生成维护，不支持设置和更新
    *
    * @return string
    */
    public function getDnsDomain()
    {
        return $this->container['dnsDomain'];
    }

    /**
    * Sets dnsDomain
    *
    * @param string $dnsDomain 功能说明：默认内网DNS域地址 约束：系统自动生成维护，不支持设置和更新
    *
    * @return $this
    */
    public function setDnsDomain($dnsDomain)
    {
        $this->container['dnsDomain'] = $dnsDomain;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    *  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

