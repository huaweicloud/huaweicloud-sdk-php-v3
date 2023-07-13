<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronSubnet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronSubnet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * cidr  功能说明：子网网段 取值范围：CIDR格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28 约束：当ip_version=6时，该字段不支持设置
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]； 默认值：不填时为空，无法使用云内网DNS功能
    * enableDhcp  功能说明：是否启动dhcp 取值范围：只支持true
    * gatewayIp  功能说明：子网网关IP  取值范围：本子网网段内的可用IP  约束：不允许和allocation_pools地址块冲突；ip_version=6时该字段不支持设置 默认值：本子网网段内第一个可用IP
    * hostRoutes  虚拟机静态路由，参见“host_route对象”表
    * id  子网ID
    * ipVersion  功能说明：IP协议版本 取值范围：4或6(支持后)
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * networkId  所属网络的ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * subnetpoolId  子网池id 【使用说明】目前IPv4不支持，IPv6支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allocationPools' => '\HuaweiCloud\SDK\Vpc\V2\Model\AllocationPool[]',
            'cidr' => 'string',
            'dnsNameservers' => 'string[]',
            'enableDhcp' => 'bool',
            'gatewayIp' => 'string',
            'hostRoutes' => '\HuaweiCloud\SDK\Vpc\V2\Model\HostRoute[]',
            'id' => 'string',
            'ipVersion' => 'int',
            'ipv6AddressMode' => 'string',
            'ipv6RaMode' => 'string',
            'name' => 'string',
            'networkId' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'subnetpoolId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * cidr  功能说明：子网网段 取值范围：CIDR格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28 约束：当ip_version=6时，该字段不支持设置
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]； 默认值：不填时为空，无法使用云内网DNS功能
    * enableDhcp  功能说明：是否启动dhcp 取值范围：只支持true
    * gatewayIp  功能说明：子网网关IP  取值范围：本子网网段内的可用IP  约束：不允许和allocation_pools地址块冲突；ip_version=6时该字段不支持设置 默认值：本子网网段内第一个可用IP
    * hostRoutes  虚拟机静态路由，参见“host_route对象”表
    * id  子网ID
    * ipVersion  功能说明：IP协议版本 取值范围：4或6(支持后)
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * networkId  所属网络的ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * subnetpoolId  子网池id 【使用说明】目前IPv4不支持，IPv6支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allocationPools' => null,
        'cidr' => null,
        'dnsNameservers' => null,
        'enableDhcp' => null,
        'gatewayIp' => null,
        'hostRoutes' => null,
        'id' => null,
        'ipVersion' => 'int32',
        'ipv6AddressMode' => null,
        'ipv6RaMode' => null,
        'name' => null,
        'networkId' => null,
        'tenantId' => null,
        'projectId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'subnetpoolId' => null
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
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * cidr  功能说明：子网网段 取值范围：CIDR格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28 约束：当ip_version=6时，该字段不支持设置
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]； 默认值：不填时为空，无法使用云内网DNS功能
    * enableDhcp  功能说明：是否启动dhcp 取值范围：只支持true
    * gatewayIp  功能说明：子网网关IP  取值范围：本子网网段内的可用IP  约束：不允许和allocation_pools地址块冲突；ip_version=6时该字段不支持设置 默认值：本子网网段内第一个可用IP
    * hostRoutes  虚拟机静态路由，参见“host_route对象”表
    * id  子网ID
    * ipVersion  功能说明：IP协议版本 取值范围：4或6(支持后)
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * networkId  所属网络的ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * subnetpoolId  子网池id 【使用说明】目前IPv4不支持，IPv6支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allocationPools' => 'allocation_pools',
            'cidr' => 'cidr',
            'dnsNameservers' => 'dns_nameservers',
            'enableDhcp' => 'enable_dhcp',
            'gatewayIp' => 'gateway_ip',
            'hostRoutes' => 'host_routes',
            'id' => 'id',
            'ipVersion' => 'ip_version',
            'ipv6AddressMode' => 'ipv6_address_mode',
            'ipv6RaMode' => 'ipv6_ra_mode',
            'name' => 'name',
            'networkId' => 'network_id',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'subnetpoolId' => 'subnetpool_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * cidr  功能说明：子网网段 取值范围：CIDR格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28 约束：当ip_version=6时，该字段不支持设置
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]； 默认值：不填时为空，无法使用云内网DNS功能
    * enableDhcp  功能说明：是否启动dhcp 取值范围：只支持true
    * gatewayIp  功能说明：子网网关IP  取值范围：本子网网段内的可用IP  约束：不允许和allocation_pools地址块冲突；ip_version=6时该字段不支持设置 默认值：本子网网段内第一个可用IP
    * hostRoutes  虚拟机静态路由，参见“host_route对象”表
    * id  子网ID
    * ipVersion  功能说明：IP协议版本 取值范围：4或6(支持后)
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * networkId  所属网络的ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * subnetpoolId  子网池id 【使用说明】目前IPv4不支持，IPv6支持
    *
    * @var string[]
    */
    protected static $setters = [
            'allocationPools' => 'setAllocationPools',
            'cidr' => 'setCidr',
            'dnsNameservers' => 'setDnsNameservers',
            'enableDhcp' => 'setEnableDhcp',
            'gatewayIp' => 'setGatewayIp',
            'hostRoutes' => 'setHostRoutes',
            'id' => 'setId',
            'ipVersion' => 'setIpVersion',
            'ipv6AddressMode' => 'setIpv6AddressMode',
            'ipv6RaMode' => 'setIpv6RaMode',
            'name' => 'setName',
            'networkId' => 'setNetworkId',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'subnetpoolId' => 'setSubnetpoolId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * cidr  功能说明：子网网段 取值范围：CIDR格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28 约束：当ip_version=6时，该字段不支持设置
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]； 默认值：不填时为空，无法使用云内网DNS功能
    * enableDhcp  功能说明：是否启动dhcp 取值范围：只支持true
    * gatewayIp  功能说明：子网网关IP  取值范围：本子网网段内的可用IP  约束：不允许和allocation_pools地址块冲突；ip_version=6时该字段不支持设置 默认值：本子网网段内第一个可用IP
    * hostRoutes  虚拟机静态路由，参见“host_route对象”表
    * id  子网ID
    * ipVersion  功能说明：IP协议版本 取值范围：4或6(支持后)
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * networkId  所属网络的ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * subnetpoolId  子网池id 【使用说明】目前IPv4不支持，IPv6支持
    *
    * @var string[]
    */
    protected static $getters = [
            'allocationPools' => 'getAllocationPools',
            'cidr' => 'getCidr',
            'dnsNameservers' => 'getDnsNameservers',
            'enableDhcp' => 'getEnableDhcp',
            'gatewayIp' => 'getGatewayIp',
            'hostRoutes' => 'getHostRoutes',
            'id' => 'getId',
            'ipVersion' => 'getIpVersion',
            'ipv6AddressMode' => 'getIpv6AddressMode',
            'ipv6RaMode' => 'getIpv6RaMode',
            'name' => 'getName',
            'networkId' => 'getNetworkId',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'subnetpoolId' => 'getSubnetpoolId'
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
        $this->container['allocationPools'] = isset($data['allocationPools']) ? $data['allocationPools'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['dnsNameservers'] = isset($data['dnsNameservers']) ? $data['dnsNameservers'] : null;
        $this->container['enableDhcp'] = isset($data['enableDhcp']) ? $data['enableDhcp'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['hostRoutes'] = isset($data['hostRoutes']) ? $data['hostRoutes'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['ipv6AddressMode'] = isset($data['ipv6AddressMode']) ? $data['ipv6AddressMode'] : null;
        $this->container['ipv6RaMode'] = isset($data['ipv6RaMode']) ? $data['ipv6RaMode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['subnetpoolId'] = isset($data['subnetpoolId']) ? $data['subnetpoolId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['allocationPools'] === null) {
            $invalidProperties[] = "'allocationPools' can't be null";
        }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
            if ((mb_strlen($this->container['cidr']) > 64)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['dnsNameservers'] === null) {
            $invalidProperties[] = "'dnsNameservers' can't be null";
        }
        if ($this->container['enableDhcp'] === null) {
            $invalidProperties[] = "'enableDhcp' can't be null";
        }
        if ($this->container['gatewayIp'] === null) {
            $invalidProperties[] = "'gatewayIp' can't be null";
        }
            if ((mb_strlen($this->container['gatewayIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'gatewayIp', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['hostRoutes'] === null) {
            $invalidProperties[] = "'hostRoutes' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
        if ($this->container['ipv6AddressMode'] === null) {
            $invalidProperties[] = "'ipv6AddressMode' can't be null";
        }
        if ($this->container['ipv6RaMode'] === null) {
            $invalidProperties[] = "'ipv6RaMode' can't be null";
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
        if ($this->container['networkId'] === null) {
            $invalidProperties[] = "'networkId' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if ((mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
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
    * Gets allocationPools
    *  功能说明：可用的IP池，allocation_pool对象参见 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\AllocationPool[]
    */
    public function getAllocationPools()
    {
        return $this->container['allocationPools'];
    }

    /**
    * Sets allocationPools
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\AllocationPool[] $allocationPools 功能说明：可用的IP池，allocation_pool对象参见 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @return $this
    */
    public function setAllocationPools($allocationPools)
    {
        $this->container['allocationPools'] = $allocationPools;
        return $this;
    }

    /**
    * Gets cidr
    *  功能说明：子网网段 取值范围：CIDR格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28 约束：当ip_version=6时，该字段不支持设置
    *
    * @return string
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string $cidr 功能说明：子网网段 取值范围：CIDR格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28 约束：当ip_version=6时，该字段不支持设置
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets dnsNameservers
    *  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]； 默认值：不填时为空，无法使用云内网DNS功能
    *
    * @return string[]
    */
    public function getDnsNameservers()
    {
        return $this->container['dnsNameservers'];
    }

    /**
    * Sets dnsNameservers
    *
    * @param string[] $dnsNameservers 功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]； 默认值：不填时为空，无法使用云内网DNS功能
    *
    * @return $this
    */
    public function setDnsNameservers($dnsNameservers)
    {
        $this->container['dnsNameservers'] = $dnsNameservers;
        return $this;
    }

    /**
    * Gets enableDhcp
    *  功能说明：是否启动dhcp 取值范围：只支持true
    *
    * @return bool
    */
    public function getEnableDhcp()
    {
        return $this->container['enableDhcp'];
    }

    /**
    * Sets enableDhcp
    *
    * @param bool $enableDhcp 功能说明：是否启动dhcp 取值范围：只支持true
    *
    * @return $this
    */
    public function setEnableDhcp($enableDhcp)
    {
        $this->container['enableDhcp'] = $enableDhcp;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  功能说明：子网网关IP  取值范围：本子网网段内的可用IP  约束：不允许和allocation_pools地址块冲突；ip_version=6时该字段不支持设置 默认值：本子网网段内第一个可用IP
    *
    * @return string
    */
    public function getGatewayIp()
    {
        return $this->container['gatewayIp'];
    }

    /**
    * Sets gatewayIp
    *
    * @param string $gatewayIp 功能说明：子网网关IP  取值范围：本子网网段内的可用IP  约束：不允许和allocation_pools地址块冲突；ip_version=6时该字段不支持设置 默认值：本子网网段内第一个可用IP
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets hostRoutes
    *  虚拟机静态路由，参见“host_route对象”表
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\HostRoute[]
    */
    public function getHostRoutes()
    {
        return $this->container['hostRoutes'];
    }

    /**
    * Sets hostRoutes
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\HostRoute[] $hostRoutes 虚拟机静态路由，参见“host_route对象”表
    *
    * @return $this
    */
    public function setHostRoutes($hostRoutes)
    {
        $this->container['hostRoutes'] = $hostRoutes;
        return $this;
    }

    /**
    * Gets id
    *  子网ID
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
    * @param string $id 子网ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：IP协议版本 取值范围：4或6(支持后)
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion 功能说明：IP协议版本 取值范围：4或6(支持后)
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets ipv6AddressMode
    *  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    *
    * @return string
    */
    public function getIpv6AddressMode()
    {
        return $this->container['ipv6AddressMode'];
    }

    /**
    * Sets ipv6AddressMode
    *
    * @param string $ipv6AddressMode 功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    *
    * @return $this
    */
    public function setIpv6AddressMode($ipv6AddressMode)
    {
        $this->container['ipv6AddressMode'] = $ipv6AddressMode;
        return $this;
    }

    /**
    * Gets ipv6RaMode
    *  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    *
    * @return string
    */
    public function getIpv6RaMode()
    {
        return $this->container['ipv6RaMode'];
    }

    /**
    * Sets ipv6RaMode
    *
    * @param string $ipv6RaMode 功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    *
    * @return $this
    */
    public function setIpv6RaMode($ipv6RaMode)
    {
        $this->container['ipv6RaMode'] = $ipv6RaMode;
        return $this;
    }

    /**
    * Gets name
    *  功能说明：子网的名称 取值范围：0-255个字符
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
    * @param string $name 功能说明：子网的名称 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets networkId
    *  所属网络的ID
    *
    * @return string
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string $networkId 所属网络的ID
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
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
    * Gets subnetpoolId
    *  子网池id 【使用说明】目前IPv4不支持，IPv6支持
    *
    * @return string|null
    */
    public function getSubnetpoolId()
    {
        return $this->container['subnetpoolId'];
    }

    /**
    * Sets subnetpoolId
    *
    * @param string|null $subnetpoolId 子网池id 【使用说明】目前IPv4不支持，IPv6支持
    *
    * @return $this
    */
    public function setSubnetpoolId($subnetpoolId)
    {
        $this->container['subnetpoolId'] = $subnetpoolId;
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

