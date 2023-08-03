<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronCreateSubnetOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronCreateSubnetOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * cidr  功能说明：子网网段 取值范围：必须是cidr格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28
    * networkId  功能说明：子网所属网络ID
    * gatewayIp  功能说明：子网网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipVersion  功能说明：IP版本信息 取值范围：4或者6(特定局点)
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"] 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持设置
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'cidr' => 'string',
            'networkId' => 'string',
            'gatewayIp' => 'string',
            'ipVersion' => 'int',
            'allocationPools' => '\HuaweiCloud\SDK\Vpc\V2\Model\AllocationPool[]',
            'dnsNameservers' => 'string[]',
            'hostRoutes' => '\HuaweiCloud\SDK\Vpc\V2\Model\HostRoute[]',
            'enableDhcp' => 'bool',
            'ipv6AddressMode' => 'string',
            'ipv6RaMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * cidr  功能说明：子网网段 取值范围：必须是cidr格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28
    * networkId  功能说明：子网所属网络ID
    * gatewayIp  功能说明：子网网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipVersion  功能说明：IP版本信息 取值范围：4或者6(特定局点)
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"] 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持设置
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'cidr' => null,
        'networkId' => null,
        'gatewayIp' => null,
        'ipVersion' => 'int32',
        'allocationPools' => null,
        'dnsNameservers' => null,
        'hostRoutes' => null,
        'enableDhcp' => null,
        'ipv6AddressMode' => null,
        'ipv6RaMode' => null
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
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * cidr  功能说明：子网网段 取值范围：必须是cidr格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28
    * networkId  功能说明：子网所属网络ID
    * gatewayIp  功能说明：子网网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipVersion  功能说明：IP版本信息 取值范围：4或者6(特定局点)
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"] 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持设置
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'cidr' => 'cidr',
            'networkId' => 'network_id',
            'gatewayIp' => 'gateway_ip',
            'ipVersion' => 'ip_version',
            'allocationPools' => 'allocation_pools',
            'dnsNameservers' => 'dns_nameservers',
            'hostRoutes' => 'host_routes',
            'enableDhcp' => 'enable_dhcp',
            'ipv6AddressMode' => 'ipv6_address_mode',
            'ipv6RaMode' => 'ipv6_ra_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * cidr  功能说明：子网网段 取值范围：必须是cidr格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28
    * networkId  功能说明：子网所属网络ID
    * gatewayIp  功能说明：子网网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipVersion  功能说明：IP版本信息 取值范围：4或者6(特定局点)
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"] 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持设置
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'cidr' => 'setCidr',
            'networkId' => 'setNetworkId',
            'gatewayIp' => 'setGatewayIp',
            'ipVersion' => 'setIpVersion',
            'allocationPools' => 'setAllocationPools',
            'dnsNameservers' => 'setDnsNameservers',
            'hostRoutes' => 'setHostRoutes',
            'enableDhcp' => 'setEnableDhcp',
            'ipv6AddressMode' => 'setIpv6AddressMode',
            'ipv6RaMode' => 'setIpv6RaMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：子网的名称 取值范围：0-255个字符
    * cidr  功能说明：子网网段 取值范围：必须是cidr格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28
    * networkId  功能说明：子网所属网络ID
    * gatewayIp  功能说明：子网网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipVersion  功能说明：IP版本信息 取值范围：4或者6(特定局点)
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    * dnsNameservers  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"] 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持设置
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * ipv6AddressMode  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    * ipv6RaMode  功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'cidr' => 'getCidr',
            'networkId' => 'getNetworkId',
            'gatewayIp' => 'getGatewayIp',
            'ipVersion' => 'getIpVersion',
            'allocationPools' => 'getAllocationPools',
            'dnsNameservers' => 'getDnsNameservers',
            'hostRoutes' => 'getHostRoutes',
            'enableDhcp' => 'getEnableDhcp',
            'ipv6AddressMode' => 'getIpv6AddressMode',
            'ipv6RaMode' => 'getIpv6RaMode'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['allocationPools'] = isset($data['allocationPools']) ? $data['allocationPools'] : null;
        $this->container['dnsNameservers'] = isset($data['dnsNameservers']) ? $data['dnsNameservers'] : null;
        $this->container['hostRoutes'] = isset($data['hostRoutes']) ? $data['hostRoutes'] : null;
        $this->container['enableDhcp'] = isset($data['enableDhcp']) ? $data['enableDhcp'] : null;
        $this->container['ipv6AddressMode'] = isset($data['ipv6AddressMode']) ? $data['ipv6AddressMode'] : null;
        $this->container['ipv6RaMode'] = isset($data['ipv6RaMode']) ? $data['ipv6RaMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['networkId'] === null) {
            $invalidProperties[] = "'networkId' can't be null";
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
    * Gets name
    *  功能说明：子网的名称 取值范围：0-255个字符
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
    * @param string|null $name 功能说明：子网的名称 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets cidr
    *  功能说明：子网网段 取值范围：必须是cidr格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28
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
    * @param string $cidr 功能说明：子网网段 取值范围：必须是cidr格式，只支持10.0.0.0/8,172.16.0.0/12,192.168.0.0/16三个网段内的地址，掩码长度不能大于28
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets networkId
    *  功能说明：子网所属网络ID
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
    * @param string $networkId 功能说明：子网所属网络ID
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  功能说明：子网网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    *
    * @return string|null
    */
    public function getGatewayIp()
    {
        return $this->container['gatewayIp'];
    }

    /**
    * Sets gatewayIp
    *
    * @param string|null $gatewayIp 功能说明：子网网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：IP版本信息 取值范围：4或者6(特定局点)
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion 功能说明：IP版本信息 取值范围：4或者6(特定局点)
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets allocationPools
    *  功能说明：可用的IP池，allocation_pool对象参见allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\AllocationPool[]|null
    */
    public function getAllocationPools()
    {
        return $this->container['allocationPools'];
    }

    /**
    * Sets allocationPools
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\AllocationPool[]|null $allocationPools 功能说明：可用的IP池，allocation_pool对象参见allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后4个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.252、192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @return $this
    */
    public function setAllocationPools($allocationPools)
    {
        $this->container['allocationPools'] = $allocationPools;
        return $this;
    }

    /**
    * Gets dnsNameservers
    *  功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"] 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return string[]|null
    */
    public function getDnsNameservers()
    {
        return $this->container['dnsNameservers'];
    }

    /**
    * Sets dnsNameservers
    *
    * @param string[]|null $dnsNameservers 功能说明：子网关联的DNS名称服务器列表 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"] 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return $this
    */
    public function setDnsNameservers($dnsNameservers)
    {
        $this->container['dnsNameservers'] = $dnsNameservers;
        return $this;
    }

    /**
    * Gets hostRoutes
    *  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持设置
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\HostRoute[]|null
    */
    public function getHostRoutes()
    {
        return $this->container['hostRoutes'];
    }

    /**
    * Sets hostRoutes
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\HostRoute[]|null $hostRoutes 功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持设置
    *
    * @return $this
    */
    public function setHostRoutes($hostRoutes)
    {
        $this->container['hostRoutes'] = $hostRoutes;
        return $this;
    }

    /**
    * Gets enableDhcp
    *  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    *
    * @return bool|null
    */
    public function getEnableDhcp()
    {
        return $this->container['enableDhcp'];
    }

    /**
    * Sets enableDhcp
    *
    * @param bool|null $enableDhcp 功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    *
    * @return $this
    */
    public function setEnableDhcp($enableDhcp)
    {
        $this->container['enableDhcp'] = $enableDhcp;
        return $this;
    }

    /**
    * Gets ipv6AddressMode
    *  功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
    *
    * @return string|null
    */
    public function getIpv6AddressMode()
    {
        return $this->container['ipv6AddressMode'];
    }

    /**
    * Sets ipv6AddressMode
    *
    * @param string|null $ipv6AddressMode 功能说明：IPv6寻址模式 取值范围：dhcpv6-stateful
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
    * @return string|null
    */
    public function getIpv6RaMode()
    {
        return $this->container['ipv6RaMode'];
    }

    /**
    * Sets ipv6RaMode
    *
    * @param string|null $ipv6RaMode 功能说明：IPv6路由广播模式 取值范围：dhcpv6-stateful
    *
    * @return $this
    */
    public function setIpv6RaMode($ipv6RaMode)
    {
        $this->container['ipv6RaMode'] = $ipv6RaMode;
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

