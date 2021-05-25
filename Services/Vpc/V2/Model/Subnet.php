<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Subnet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Subnet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  子网ID
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭）
    * cidrV6  IPv6子网的网段，如果子网为IPv4子网，则不返回此参数
    * gatewayIpV6  IPv6子网的网关，如果子网为IPv4子网，则不返回此参数
    * dhcpEnable  子网是否开启dhcp功能
    * primaryDns  子网dns服务器地址1
    * secondaryDns  子网dns服务器地址2
    * dnsList  子网dns服务器地址列表
    * availabilityZone  子网所在的可用区标识
    * vpcId  子网所在VPC标识
    * status  功能说明：子网的状态 取值范围： - ACTIVE：表示子网已挂载到ROUTER上 - UNKNOWN：表示子网还未挂载到ROUTER上 - ERROR：表示子网状态故障
    * neutronNetworkId  对应网络（OpenStack Neutron接口）id
    * neutronSubnetId  对应子网（OpenStack Neutron接口）id
    * neutronSubnetIdV6  对应IPv6子网（OpenStack Neutron接口）id，如果子网为IPv4子网，则不返回此参数
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'cidr' => 'string',
            'gatewayIp' => 'string',
            'ipv6Enable' => 'bool',
            'cidrV6' => 'string',
            'gatewayIpV6' => 'string',
            'dhcpEnable' => 'bool',
            'primaryDns' => 'string',
            'secondaryDns' => 'string',
            'dnsList' => 'string[]',
            'availabilityZone' => 'string',
            'vpcId' => 'string',
            'status' => 'string',
            'neutronNetworkId' => 'string',
            'neutronSubnetId' => 'string',
            'neutronSubnetIdV6' => 'string',
            'extraDhcpOpts' => '\HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  子网ID
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭）
    * cidrV6  IPv6子网的网段，如果子网为IPv4子网，则不返回此参数
    * gatewayIpV6  IPv6子网的网关，如果子网为IPv4子网，则不返回此参数
    * dhcpEnable  子网是否开启dhcp功能
    * primaryDns  子网dns服务器地址1
    * secondaryDns  子网dns服务器地址2
    * dnsList  子网dns服务器地址列表
    * availabilityZone  子网所在的可用区标识
    * vpcId  子网所在VPC标识
    * status  功能说明：子网的状态 取值范围： - ACTIVE：表示子网已挂载到ROUTER上 - UNKNOWN：表示子网还未挂载到ROUTER上 - ERROR：表示子网状态故障
    * neutronNetworkId  对应网络（OpenStack Neutron接口）id
    * neutronSubnetId  对应子网（OpenStack Neutron接口）id
    * neutronSubnetIdV6  对应IPv6子网（OpenStack Neutron接口）id，如果子网为IPv4子网，则不返回此参数
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'cidr' => null,
        'gatewayIp' => null,
        'ipv6Enable' => null,
        'cidrV6' => null,
        'gatewayIpV6' => null,
        'dhcpEnable' => null,
        'primaryDns' => null,
        'secondaryDns' => null,
        'dnsList' => null,
        'availabilityZone' => null,
        'vpcId' => null,
        'status' => null,
        'neutronNetworkId' => null,
        'neutronSubnetId' => null,
        'neutronSubnetIdV6' => null,
        'extraDhcpOpts' => null
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
    * id  子网ID
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭）
    * cidrV6  IPv6子网的网段，如果子网为IPv4子网，则不返回此参数
    * gatewayIpV6  IPv6子网的网关，如果子网为IPv4子网，则不返回此参数
    * dhcpEnable  子网是否开启dhcp功能
    * primaryDns  子网dns服务器地址1
    * secondaryDns  子网dns服务器地址2
    * dnsList  子网dns服务器地址列表
    * availabilityZone  子网所在的可用区标识
    * vpcId  子网所在VPC标识
    * status  功能说明：子网的状态 取值范围： - ACTIVE：表示子网已挂载到ROUTER上 - UNKNOWN：表示子网还未挂载到ROUTER上 - ERROR：表示子网状态故障
    * neutronNetworkId  对应网络（OpenStack Neutron接口）id
    * neutronSubnetId  对应子网（OpenStack Neutron接口）id
    * neutronSubnetIdV6  对应IPv6子网（OpenStack Neutron接口）id，如果子网为IPv4子网，则不返回此参数
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'cidr' => 'cidr',
            'gatewayIp' => 'gateway_ip',
            'ipv6Enable' => 'ipv6_enable',
            'cidrV6' => 'cidr_v6',
            'gatewayIpV6' => 'gateway_ip_v6',
            'dhcpEnable' => 'dhcp_enable',
            'primaryDns' => 'primary_dns',
            'secondaryDns' => 'secondary_dns',
            'dnsList' => 'dnsList',
            'availabilityZone' => 'availability_zone',
            'vpcId' => 'vpc_id',
            'status' => 'status',
            'neutronNetworkId' => 'neutron_network_id',
            'neutronSubnetId' => 'neutron_subnet_id',
            'neutronSubnetIdV6' => 'neutron_subnet_id_v6',
            'extraDhcpOpts' => 'extra_dhcp_opts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  子网ID
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭）
    * cidrV6  IPv6子网的网段，如果子网为IPv4子网，则不返回此参数
    * gatewayIpV6  IPv6子网的网关，如果子网为IPv4子网，则不返回此参数
    * dhcpEnable  子网是否开启dhcp功能
    * primaryDns  子网dns服务器地址1
    * secondaryDns  子网dns服务器地址2
    * dnsList  子网dns服务器地址列表
    * availabilityZone  子网所在的可用区标识
    * vpcId  子网所在VPC标识
    * status  功能说明：子网的状态 取值范围： - ACTIVE：表示子网已挂载到ROUTER上 - UNKNOWN：表示子网还未挂载到ROUTER上 - ERROR：表示子网状态故障
    * neutronNetworkId  对应网络（OpenStack Neutron接口）id
    * neutronSubnetId  对应子网（OpenStack Neutron接口）id
    * neutronSubnetIdV6  对应IPv6子网（OpenStack Neutron接口）id，如果子网为IPv4子网，则不返回此参数
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'cidr' => 'setCidr',
            'gatewayIp' => 'setGatewayIp',
            'ipv6Enable' => 'setIpv6Enable',
            'cidrV6' => 'setCidrV6',
            'gatewayIpV6' => 'setGatewayIpV6',
            'dhcpEnable' => 'setDhcpEnable',
            'primaryDns' => 'setPrimaryDns',
            'secondaryDns' => 'setSecondaryDns',
            'dnsList' => 'setDnsList',
            'availabilityZone' => 'setAvailabilityZone',
            'vpcId' => 'setVpcId',
            'status' => 'setStatus',
            'neutronNetworkId' => 'setNeutronNetworkId',
            'neutronSubnetId' => 'setNeutronSubnetId',
            'neutronSubnetIdV6' => 'setNeutronSubnetIdV6',
            'extraDhcpOpts' => 'setExtraDhcpOpts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  子网ID
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭）
    * cidrV6  IPv6子网的网段，如果子网为IPv4子网，则不返回此参数
    * gatewayIpV6  IPv6子网的网关，如果子网为IPv4子网，则不返回此参数
    * dhcpEnable  子网是否开启dhcp功能
    * primaryDns  子网dns服务器地址1
    * secondaryDns  子网dns服务器地址2
    * dnsList  子网dns服务器地址列表
    * availabilityZone  子网所在的可用区标识
    * vpcId  子网所在VPC标识
    * status  功能说明：子网的状态 取值范围： - ACTIVE：表示子网已挂载到ROUTER上 - UNKNOWN：表示子网还未挂载到ROUTER上 - ERROR：表示子网状态故障
    * neutronNetworkId  对应网络（OpenStack Neutron接口）id
    * neutronSubnetId  对应子网（OpenStack Neutron接口）id
    * neutronSubnetIdV6  对应IPv6子网（OpenStack Neutron接口）id，如果子网为IPv4子网，则不返回此参数
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'cidr' => 'getCidr',
            'gatewayIp' => 'getGatewayIp',
            'ipv6Enable' => 'getIpv6Enable',
            'cidrV6' => 'getCidrV6',
            'gatewayIpV6' => 'getGatewayIpV6',
            'dhcpEnable' => 'getDhcpEnable',
            'primaryDns' => 'getPrimaryDns',
            'secondaryDns' => 'getSecondaryDns',
            'dnsList' => 'getDnsList',
            'availabilityZone' => 'getAvailabilityZone',
            'vpcId' => 'getVpcId',
            'status' => 'getStatus',
            'neutronNetworkId' => 'getNeutronNetworkId',
            'neutronSubnetId' => 'getNeutronSubnetId',
            'neutronSubnetIdV6' => 'getNeutronSubnetIdV6',
            'extraDhcpOpts' => 'getExtraDhcpOpts'
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
    const STATUS_UNKNOWN = 'UNKNOWN';
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
            self::STATUS_UNKNOWN,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['cidrV6'] = isset($data['cidrV6']) ? $data['cidrV6'] : null;
        $this->container['gatewayIpV6'] = isset($data['gatewayIpV6']) ? $data['gatewayIpV6'] : null;
        $this->container['dhcpEnable'] = isset($data['dhcpEnable']) ? $data['dhcpEnable'] : null;
        $this->container['primaryDns'] = isset($data['primaryDns']) ? $data['primaryDns'] : null;
        $this->container['secondaryDns'] = isset($data['secondaryDns']) ? $data['secondaryDns'] : null;
        $this->container['dnsList'] = isset($data['dnsList']) ? $data['dnsList'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['neutronNetworkId'] = isset($data['neutronNetworkId']) ? $data['neutronNetworkId'] : null;
        $this->container['neutronSubnetId'] = isset($data['neutronSubnetId']) ? $data['neutronSubnetId'] : null;
        $this->container['neutronSubnetIdV6'] = isset($data['neutronSubnetIdV6']) ? $data['neutronSubnetIdV6'] : null;
        $this->container['extraDhcpOpts'] = isset($data['extraDhcpOpts']) ? $data['extraDhcpOpts'] : null;
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
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['gatewayIp'] === null) {
            $invalidProperties[] = "'gatewayIp' can't be null";
        }
        if ($this->container['ipv6Enable'] === null) {
            $invalidProperties[] = "'ipv6Enable' can't be null";
        }
        if ($this->container['cidrV6'] === null) {
            $invalidProperties[] = "'cidrV6' can't be null";
        }
        if ($this->container['gatewayIpV6'] === null) {
            $invalidProperties[] = "'gatewayIpV6' can't be null";
        }
        if ($this->container['dhcpEnable'] === null) {
            $invalidProperties[] = "'dhcpEnable' can't be null";
        }
        if ($this->container['primaryDns'] === null) {
            $invalidProperties[] = "'primaryDns' can't be null";
        }
        if ($this->container['secondaryDns'] === null) {
            $invalidProperties[] = "'secondaryDns' can't be null";
        }
        if ($this->container['dnsList'] === null) {
            $invalidProperties[] = "'dnsList' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
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

        if ($this->container['neutronNetworkId'] === null) {
            $invalidProperties[] = "'neutronNetworkId' can't be null";
        }
        if ($this->container['neutronSubnetId'] === null) {
            $invalidProperties[] = "'neutronSubnetId' can't be null";
        }
        if ($this->container['neutronSubnetIdV6'] === null) {
            $invalidProperties[] = "'neutronSubnetIdV6' can't be null";
        }
        if ($this->container['extraDhcpOpts'] === null) {
            $invalidProperties[] = "'extraDhcpOpts' can't be null";
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
    * Gets name
    *  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
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
    * @param string $description 功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cidr
    *  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
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
    * @param string $cidr 功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
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
    * @param string $gatewayIp 功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭）
    *
    * @return bool
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool $ipv6Enable 功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭）
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets cidrV6
    *  IPv6子网的网段，如果子网为IPv4子网，则不返回此参数
    *
    * @return string
    */
    public function getCidrV6()
    {
        return $this->container['cidrV6'];
    }

    /**
    * Sets cidrV6
    *
    * @param string $cidrV6 IPv6子网的网段，如果子网为IPv4子网，则不返回此参数
    *
    * @return $this
    */
    public function setCidrV6($cidrV6)
    {
        $this->container['cidrV6'] = $cidrV6;
        return $this;
    }

    /**
    * Gets gatewayIpV6
    *  IPv6子网的网关，如果子网为IPv4子网，则不返回此参数
    *
    * @return string
    */
    public function getGatewayIpV6()
    {
        return $this->container['gatewayIpV6'];
    }

    /**
    * Sets gatewayIpV6
    *
    * @param string $gatewayIpV6 IPv6子网的网关，如果子网为IPv4子网，则不返回此参数
    *
    * @return $this
    */
    public function setGatewayIpV6($gatewayIpV6)
    {
        $this->container['gatewayIpV6'] = $gatewayIpV6;
        return $this;
    }

    /**
    * Gets dhcpEnable
    *  子网是否开启dhcp功能
    *
    * @return bool
    */
    public function getDhcpEnable()
    {
        return $this->container['dhcpEnable'];
    }

    /**
    * Sets dhcpEnable
    *
    * @param bool $dhcpEnable 子网是否开启dhcp功能
    *
    * @return $this
    */
    public function setDhcpEnable($dhcpEnable)
    {
        $this->container['dhcpEnable'] = $dhcpEnable;
        return $this;
    }

    /**
    * Gets primaryDns
    *  子网dns服务器地址1
    *
    * @return string
    */
    public function getPrimaryDns()
    {
        return $this->container['primaryDns'];
    }

    /**
    * Sets primaryDns
    *
    * @param string $primaryDns 子网dns服务器地址1
    *
    * @return $this
    */
    public function setPrimaryDns($primaryDns)
    {
        $this->container['primaryDns'] = $primaryDns;
        return $this;
    }

    /**
    * Gets secondaryDns
    *  子网dns服务器地址2
    *
    * @return string
    */
    public function getSecondaryDns()
    {
        return $this->container['secondaryDns'];
    }

    /**
    * Sets secondaryDns
    *
    * @param string $secondaryDns 子网dns服务器地址2
    *
    * @return $this
    */
    public function setSecondaryDns($secondaryDns)
    {
        $this->container['secondaryDns'] = $secondaryDns;
        return $this;
    }

    /**
    * Gets dnsList
    *  子网dns服务器地址列表
    *
    * @return string[]
    */
    public function getDnsList()
    {
        return $this->container['dnsList'];
    }

    /**
    * Sets dnsList
    *
    * @param string[] $dnsList 子网dns服务器地址列表
    *
    * @return $this
    */
    public function setDnsList($dnsList)
    {
        $this->container['dnsList'] = $dnsList;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  子网所在的可用区标识
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 子网所在的可用区标识
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets vpcId
    *  子网所在VPC标识
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
    * @param string $vpcId 子网所在VPC标识
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：子网的状态 取值范围： - ACTIVE：表示子网已挂载到ROUTER上 - UNKNOWN：表示子网还未挂载到ROUTER上 - ERROR：表示子网状态故障
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
    * @param string $status 功能说明：子网的状态 取值范围： - ACTIVE：表示子网已挂载到ROUTER上 - UNKNOWN：表示子网还未挂载到ROUTER上 - ERROR：表示子网状态故障
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets neutronNetworkId
    *  对应网络（OpenStack Neutron接口）id
    *
    * @return string
    */
    public function getNeutronNetworkId()
    {
        return $this->container['neutronNetworkId'];
    }

    /**
    * Sets neutronNetworkId
    *
    * @param string $neutronNetworkId 对应网络（OpenStack Neutron接口）id
    *
    * @return $this
    */
    public function setNeutronNetworkId($neutronNetworkId)
    {
        $this->container['neutronNetworkId'] = $neutronNetworkId;
        return $this;
    }

    /**
    * Gets neutronSubnetId
    *  对应子网（OpenStack Neutron接口）id
    *
    * @return string
    */
    public function getNeutronSubnetId()
    {
        return $this->container['neutronSubnetId'];
    }

    /**
    * Sets neutronSubnetId
    *
    * @param string $neutronSubnetId 对应子网（OpenStack Neutron接口）id
    *
    * @return $this
    */
    public function setNeutronSubnetId($neutronSubnetId)
    {
        $this->container['neutronSubnetId'] = $neutronSubnetId;
        return $this;
    }

    /**
    * Gets neutronSubnetIdV6
    *  对应IPv6子网（OpenStack Neutron接口）id，如果子网为IPv4子网，则不返回此参数
    *
    * @return string
    */
    public function getNeutronSubnetIdV6()
    {
        return $this->container['neutronSubnetIdV6'];
    }

    /**
    * Sets neutronSubnetIdV6
    *
    * @param string $neutronSubnetIdV6 对应IPv6子网（OpenStack Neutron接口）id，如果子网为IPv4子网，则不返回此参数
    *
    * @return $this
    */
    public function setNeutronSubnetIdV6($neutronSubnetIdV6)
    {
        $this->container['neutronSubnetIdV6'] = $neutronSubnetIdV6;
        return $this;
    }

    /**
    * Gets extraDhcpOpts
    *  子网配置的NTP地址
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[]
    */
    public function getExtraDhcpOpts()
    {
        return $this->container['extraDhcpOpts'];
    }

    /**
    * Sets extraDhcpOpts
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[] $extraDhcpOpts 子网配置的NTP地址
    *
    * @return $this
    */
    public function setExtraDhcpOpts($extraDhcpOpts)
    {
        $this->container['extraDhcpOpts'] = $extraDhcpOpts;
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

