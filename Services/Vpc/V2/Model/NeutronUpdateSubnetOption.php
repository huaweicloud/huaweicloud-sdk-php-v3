<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronUpdateSubnetOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronUpdateSubnetOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dnsNameservers  功能说明：dns服务器 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]，最多5个 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持，忽略输入信息
    * name  子网的名称
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见表 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后3个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dnsNameservers' => 'string[]',
            'enableDhcp' => 'bool',
            'hostRoutes' => '\HuaweiCloud\SDK\Vpc\V2\Model\HostRoute[]',
            'name' => 'string',
            'allocationPools' => '\HuaweiCloud\SDK\Vpc\V2\Model\AllocationPool[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dnsNameservers  功能说明：dns服务器 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]，最多5个 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持，忽略输入信息
    * name  子网的名称
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见表 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后3个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dnsNameservers' => null,
        'enableDhcp' => null,
        'hostRoutes' => null,
        'name' => null,
        'allocationPools' => null
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
    * dnsNameservers  功能说明：dns服务器 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]，最多5个 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持，忽略输入信息
    * name  子网的名称
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见表 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后3个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dnsNameservers' => 'dns_nameservers',
            'enableDhcp' => 'enable_dhcp',
            'hostRoutes' => 'host_routes',
            'name' => 'name',
            'allocationPools' => 'allocation_pools'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dnsNameservers  功能说明：dns服务器 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]，最多5个 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持，忽略输入信息
    * name  子网的名称
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见表 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后3个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @var string[]
    */
    protected static $setters = [
            'dnsNameservers' => 'setDnsNameservers',
            'enableDhcp' => 'setEnableDhcp',
            'hostRoutes' => 'setHostRoutes',
            'name' => 'setName',
            'allocationPools' => 'setAllocationPools'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dnsNameservers  功能说明：dns服务器 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]，最多5个 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * enableDhcp  功能说明：是否启动dhcp，false表示不提供dhcp服务的能力 约束：只支持true
    * hostRoutes  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持，忽略输入信息
    * name  子网的名称
    * allocationPools  功能说明：可用的IP池，allocation_pool对象参见表 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后3个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @var string[]
    */
    protected static $getters = [
            'dnsNameservers' => 'getDnsNameservers',
            'enableDhcp' => 'getEnableDhcp',
            'hostRoutes' => 'getHostRoutes',
            'name' => 'getName',
            'allocationPools' => 'getAllocationPools'
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
        $this->container['dnsNameservers'] = isset($data['dnsNameservers']) ? $data['dnsNameservers'] : null;
        $this->container['enableDhcp'] = isset($data['enableDhcp']) ? $data['enableDhcp'] : null;
        $this->container['hostRoutes'] = isset($data['hostRoutes']) ? $data['hostRoutes'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['allocationPools'] = isset($data['allocationPools']) ? $data['allocationPools'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
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
    * Gets dnsNameservers
    *  功能说明：dns服务器 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]，最多5个 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
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
    * @param string[]|null $dnsNameservers 功能说明：dns服务器 取值范围：IP地址格式例如：\"dns_nameservers\": [\"8.xx.xx.8\",\"8.xx.xx.4\"]，最多5个 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
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
    * Gets hostRoutes
    *  功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持，忽略输入信息
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
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\HostRoute[]|null $hostRoutes 功能说明：虚拟机静态路由，参见“host_route对象”表 约束：不支持，忽略输入信息
    *
    * @return $this
    */
    public function setHostRoutes($hostRoutes)
    {
        $this->container['hostRoutes'] = $hostRoutes;
        return $this;
    }

    /**
    * Gets name
    *  子网的名称
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
    * @param string|null $name 子网的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets allocationPools
    *  功能说明：可用的IP池，allocation_pool对象参见表 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后3个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
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
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\AllocationPool[]|null $allocationPools 功能说明：可用的IP池，allocation_pool对象参见表 allocation_pool对象 例如：[ { \"start\": \"10.0.0.2\", \"end\": \"10.0.0.251\"} ]每个子网的第1个和最后3个IP地址为系统保留地址。以192.168.1.0/24为例，192.168.1.0、 192.168.1.253、192.168.1.254和192.168.1.255这些地址是系统保留地址。系统预留地址默认不在allocation_pool范围内。 约束：更新时allocation_pool范围不能包含网关和广播地址的所有IP。
    *
    * @return $this
    */
    public function setAllocationPools($allocationPools)
    {
        $this->container['allocationPools'] = $allocationPools;
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

