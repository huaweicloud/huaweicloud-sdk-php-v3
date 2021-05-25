<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubnetOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubnetOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  子网所在VPC标识
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭） 约束：不填时默认为false > 说明 该参数目前仅在“华北-北京四”区域开放，且申请IPv6公测后才可设置。
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：子网所在的可用分区标识 约束：系统存在的可用分区标识
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'cidr' => 'string',
            'vpcId' => 'string',
            'gatewayIp' => 'string',
            'ipv6Enable' => 'bool',
            'dhcpEnable' => 'bool',
            'primaryDns' => 'string',
            'secondaryDns' => 'string',
            'dnsList' => 'string[]',
            'availabilityZone' => 'string',
            'extraDhcpOpts' => '\HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  子网所在VPC标识
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭） 约束：不填时默认为false > 说明 该参数目前仅在“华北-北京四”区域开放，且申请IPv6公测后才可设置。
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：子网所在的可用分区标识 约束：系统存在的可用分区标识
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'cidr' => null,
        'vpcId' => null,
        'gatewayIp' => null,
        'ipv6Enable' => null,
        'dhcpEnable' => null,
        'primaryDns' => null,
        'secondaryDns' => null,
        'dnsList' => null,
        'availabilityZone' => null,
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
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  子网所在VPC标识
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭） 约束：不填时默认为false > 说明 该参数目前仅在“华北-北京四”区域开放，且申请IPv6公测后才可设置。
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：子网所在的可用分区标识 约束：系统存在的可用分区标识
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'cidr' => 'cidr',
            'vpcId' => 'vpc_id',
            'gatewayIp' => 'gateway_ip',
            'ipv6Enable' => 'ipv6_enable',
            'dhcpEnable' => 'dhcp_enable',
            'primaryDns' => 'primary_dns',
            'secondaryDns' => 'secondary_dns',
            'dnsList' => 'dnsList',
            'availabilityZone' => 'availability_zone',
            'extraDhcpOpts' => 'extra_dhcp_opts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  子网所在VPC标识
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭） 约束：不填时默认为false > 说明 该参数目前仅在“华北-北京四”区域开放，且申请IPv6公测后才可设置。
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：子网所在的可用分区标识 约束：系统存在的可用分区标识
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'cidr' => 'setCidr',
            'vpcId' => 'setVpcId',
            'gatewayIp' => 'setGatewayIp',
            'ipv6Enable' => 'setIpv6Enable',
            'dhcpEnable' => 'setDhcpEnable',
            'primaryDns' => 'setPrimaryDns',
            'secondaryDns' => 'setSecondaryDns',
            'dnsList' => 'setDnsList',
            'availabilityZone' => 'setAvailabilityZone',
            'extraDhcpOpts' => 'setExtraDhcpOpts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：子网名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
    * cidr  功能说明：子网的网段 取值范围：必须在vpc对应cidr范围内 约束：必须是cidr格式。掩码长度不能大于28
    * vpcId  子网所在VPC标识
    * gatewayIp  功能说明：子网的网关 取值范围：子网网段中的IP地址 约束：必须是ip格式
    * ipv6Enable  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭） 约束：不填时默认为false > 说明 该参数目前仅在“华北-北京四”区域开放，且申请IPv6公测后才可设置。
    * dhcpEnable  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    * primaryDns  功能说明：子网dns服务器地址1 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * secondaryDns  功能说明：子网dns服务器地址2 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * dnsList  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    * availabilityZone  功能说明：子网所在的可用分区标识 约束：系统存在的可用分区标识
    * extraDhcpOpts  子网配置的NTP地址
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'cidr' => 'getCidr',
            'vpcId' => 'getVpcId',
            'gatewayIp' => 'getGatewayIp',
            'ipv6Enable' => 'getIpv6Enable',
            'dhcpEnable' => 'getDhcpEnable',
            'primaryDns' => 'getPrimaryDns',
            'secondaryDns' => 'getSecondaryDns',
            'dnsList' => 'getDnsList',
            'availabilityZone' => 'getAvailabilityZone',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['dhcpEnable'] = isset($data['dhcpEnable']) ? $data['dhcpEnable'] : null;
        $this->container['primaryDns'] = isset($data['primaryDns']) ? $data['primaryDns'] : null;
        $this->container['secondaryDns'] = isset($data['secondaryDns']) ? $data['secondaryDns'] : null;
        $this->container['dnsList'] = isset($data['dnsList']) ? $data['dnsList'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['gatewayIp'] === null) {
            $invalidProperties[] = "'gatewayIp' can't be null";
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
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 功能说明：子网描述 取值范围：0-255个字符，不能包含“<”和“>”。
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
    *  功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭） 约束：不填时默认为false > 说明 该参数目前仅在“华北-北京四”区域开放，且申请IPv6公测后才可设置。
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 功能说明：是否创建cidr_v6 取值范围：true（开启），false（关闭） 约束：不填时默认为false > 说明 该参数目前仅在“华北-北京四”区域开放，且申请IPv6公测后才可设置。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets dhcpEnable
    *  功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
    *
    * @return bool|null
    */
    public function getDhcpEnable()
    {
        return $this->container['dhcpEnable'];
    }

    /**
    * Sets dhcpEnable
    *
    * @param bool|null $dhcpEnable 功能说明：子网是否开启dhcp功能 取值范围：true（开启），false（关闭） 约束：不填时默认为true。当设置为false时，会导致新创建的ECS无法获取IP地址，cloudinit无法注入账号密码，请谨慎操作。
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
    *  功能说明：子网dns服务器地址1 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return string|null
    */
    public function getPrimaryDns()
    {
        return $this->container['primaryDns'];
    }

    /**
    * Sets primaryDns
    *
    * @param string|null $primaryDns 功能说明：子网dns服务器地址1 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
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
    *  功能说明：子网dns服务器地址2 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return string|null
    */
    public function getSecondaryDns()
    {
        return $this->container['secondaryDns'];
    }

    /**
    * Sets secondaryDns
    *
    * @param string|null $secondaryDns 功能说明：子网dns服务器地址2 约束：ip格式，不支持IPv6地址 默认值：不填时为空 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
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
    *  功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
    *
    * @return string[]|null
    */
    public function getDnsList()
    {
        return $this->container['dnsList'];
    }

    /**
    * Sets dnsList
    *
    * @param string[]|null $dnsList 功能说明：子网dns服务器地址的集合；如果想使用两个以上dns服务器，请使用该字段 约束：是子网dns服务器地址1跟子网dns服务器地址2的合集的父集，不支持IPv6地址。 默认值：不填时为空，无法使用云内网DNS功能 [内网DNS地址请参见](https://support.huaweicloud.com/dns_faq/dns_faq_002.html) [通过API获取请参见](https://support.huaweicloud.com/api-dns/dns_api_69001.html)
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
    *  功能说明：子网所在的可用分区标识 约束：系统存在的可用分区标识
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 功能说明：子网所在的可用分区标识 约束：系统存在的可用分区标识
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets extraDhcpOpts
    *  子网配置的NTP地址
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[]|null
    */
    public function getExtraDhcpOpts()
    {
        return $this->container['extraDhcpOpts'];
    }

    /**
    * Sets extraDhcpOpts
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOption[]|null $extraDhcpOpts 子网配置的NTP地址
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

