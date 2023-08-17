<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronSecurityGroupRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronSecurityGroupRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  安全组规则描述
    * direction  功能说明：规则方向 取值范围：ingress、egress
    * ethertype  功能说明：网络类型 取值范围：IPv4、IPv6
    * id  安全组规则ID，查询安全组规则非必选
    * portRangeMax  功能说明：最大端口 取值范围：当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口 当协议类型为ICMP时，该值表示ICMP的type。protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  所属安全组的对端ID
    * remoteIpPrefix  对端ip网段
    * remoteAddressGroupId  功能说明：远端IP地址组ID 约束：和remote_ip_prefix，remote_group_id互斥
    * securityGroupId  所属安全组ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'direction' => 'string',
            'ethertype' => 'string',
            'id' => 'string',
            'portRangeMax' => 'int',
            'portRangeMin' => 'int',
            'protocol' => 'string',
            'remoteGroupId' => 'string',
            'remoteIpPrefix' => 'string',
            'remoteAddressGroupId' => 'string',
            'securityGroupId' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  安全组规则描述
    * direction  功能说明：规则方向 取值范围：ingress、egress
    * ethertype  功能说明：网络类型 取值范围：IPv4、IPv6
    * id  安全组规则ID，查询安全组规则非必选
    * portRangeMax  功能说明：最大端口 取值范围：当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口 当协议类型为ICMP时，该值表示ICMP的type。protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  所属安全组的对端ID
    * remoteIpPrefix  对端ip网段
    * remoteAddressGroupId  功能说明：远端IP地址组ID 约束：和remote_ip_prefix，remote_group_id互斥
    * securityGroupId  所属安全组ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'direction' => null,
        'ethertype' => null,
        'id' => null,
        'portRangeMax' => 'int32',
        'portRangeMin' => 'int32',
        'protocol' => null,
        'remoteGroupId' => null,
        'remoteIpPrefix' => null,
        'remoteAddressGroupId' => null,
        'securityGroupId' => null,
        'tenantId' => null,
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
    * description  安全组规则描述
    * direction  功能说明：规则方向 取值范围：ingress、egress
    * ethertype  功能说明：网络类型 取值范围：IPv4、IPv6
    * id  安全组规则ID，查询安全组规则非必选
    * portRangeMax  功能说明：最大端口 取值范围：当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口 当协议类型为ICMP时，该值表示ICMP的type。protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  所属安全组的对端ID
    * remoteIpPrefix  对端ip网段
    * remoteAddressGroupId  功能说明：远端IP地址组ID 约束：和remote_ip_prefix，remote_group_id互斥
    * securityGroupId  所属安全组ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'direction' => 'direction',
            'ethertype' => 'ethertype',
            'id' => 'id',
            'portRangeMax' => 'port_range_max',
            'portRangeMin' => 'port_range_min',
            'protocol' => 'protocol',
            'remoteGroupId' => 'remote_group_id',
            'remoteIpPrefix' => 'remote_ip_prefix',
            'remoteAddressGroupId' => 'remote_address_group_id',
            'securityGroupId' => 'security_group_id',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  安全组规则描述
    * direction  功能说明：规则方向 取值范围：ingress、egress
    * ethertype  功能说明：网络类型 取值范围：IPv4、IPv6
    * id  安全组规则ID，查询安全组规则非必选
    * portRangeMax  功能说明：最大端口 取值范围：当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口 当协议类型为ICMP时，该值表示ICMP的type。protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  所属安全组的对端ID
    * remoteIpPrefix  对端ip网段
    * remoteAddressGroupId  功能说明：远端IP地址组ID 约束：和remote_ip_prefix，remote_group_id互斥
    * securityGroupId  所属安全组ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'direction' => 'setDirection',
            'ethertype' => 'setEthertype',
            'id' => 'setId',
            'portRangeMax' => 'setPortRangeMax',
            'portRangeMin' => 'setPortRangeMin',
            'protocol' => 'setProtocol',
            'remoteGroupId' => 'setRemoteGroupId',
            'remoteIpPrefix' => 'setRemoteIpPrefix',
            'remoteAddressGroupId' => 'setRemoteAddressGroupId',
            'securityGroupId' => 'setSecurityGroupId',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  安全组规则描述
    * direction  功能说明：规则方向 取值范围：ingress、egress
    * ethertype  功能说明：网络类型 取值范围：IPv4、IPv6
    * id  安全组规则ID，查询安全组规则非必选
    * portRangeMax  功能说明：最大端口 取值范围：当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口 当协议类型为ICMP时，该值表示ICMP的type。protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  所属安全组的对端ID
    * remoteIpPrefix  对端ip网段
    * remoteAddressGroupId  功能说明：远端IP地址组ID 约束：和remote_ip_prefix，remote_group_id互斥
    * securityGroupId  所属安全组ID
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'direction' => 'getDirection',
            'ethertype' => 'getEthertype',
            'id' => 'getId',
            'portRangeMax' => 'getPortRangeMax',
            'portRangeMin' => 'getPortRangeMin',
            'protocol' => 'getProtocol',
            'remoteGroupId' => 'getRemoteGroupId',
            'remoteIpPrefix' => 'getRemoteIpPrefix',
            'remoteAddressGroupId' => 'getRemoteAddressGroupId',
            'securityGroupId' => 'getSecurityGroupId',
            'tenantId' => 'getTenantId',
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
    const DIRECTION_INGRESS = 'ingress';
    const DIRECTION_EGRESS = 'egress';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INGRESS,
            self::DIRECTION_EGRESS,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['ethertype'] = isset($data['ethertype']) ? $data['ethertype'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['portRangeMax'] = isset($data['portRangeMax']) ? $data['portRangeMax'] : null;
        $this->container['portRangeMin'] = isset($data['portRangeMin']) ? $data['portRangeMin'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['remoteGroupId'] = isset($data['remoteGroupId']) ? $data['remoteGroupId'] : null;
        $this->container['remoteIpPrefix'] = isset($data['remoteIpPrefix']) ? $data['remoteIpPrefix'] : null;
        $this->container['remoteAddressGroupId'] = isset($data['remoteAddressGroupId']) ? $data['remoteAddressGroupId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
            $allowedValues = $this->getDirectionAllowableValues();
                if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ethertype'] === null) {
            $invalidProperties[] = "'ethertype' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['portRangeMax'] === null) {
            $invalidProperties[] = "'portRangeMax' can't be null";
        }
        if ($this->container['portRangeMin'] === null) {
            $invalidProperties[] = "'portRangeMin' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['remoteGroupId'] === null) {
            $invalidProperties[] = "'remoteGroupId' can't be null";
        }
        if ($this->container['remoteIpPrefix'] === null) {
            $invalidProperties[] = "'remoteIpPrefix' can't be null";
        }
            if ((mb_strlen($this->container['remoteIpPrefix']) > 255)) {
                $invalidProperties[] = "invalid value for 'remoteIpPrefix', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['remoteAddressGroupId'] === null) {
            $invalidProperties[] = "'remoteAddressGroupId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
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
    * Gets description
    *  安全组规则描述
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
    * @param string $description 安全组规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets direction
    *  功能说明：规则方向 取值范围：ingress、egress
    *
    * @return string
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string $direction 功能说明：规则方向 取值范围：ingress、egress
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets ethertype
    *  功能说明：网络类型 取值范围：IPv4、IPv6
    *
    * @return string
    */
    public function getEthertype()
    {
        return $this->container['ethertype'];
    }

    /**
    * Sets ethertype
    *
    * @param string $ethertype 功能说明：网络类型 取值范围：IPv4、IPv6
    *
    * @return $this
    */
    public function setEthertype($ethertype)
    {
        $this->container['ethertype'] = $ethertype;
        return $this;
    }

    /**
    * Gets id
    *  安全组规则ID，查询安全组规则非必选
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
    * @param string $id 安全组规则ID，查询安全组规则非必选
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets portRangeMax
    *  功能说明：最大端口 取值范围：当协议类型为ICMP时，该值表示ICMP的code
    *
    * @return int
    */
    public function getPortRangeMax()
    {
        return $this->container['portRangeMax'];
    }

    /**
    * Sets portRangeMax
    *
    * @param int $portRangeMax 功能说明：最大端口 取值范围：当协议类型为ICMP时，该值表示ICMP的code
    *
    * @return $this
    */
    public function setPortRangeMax($portRangeMax)
    {
        $this->container['portRangeMax'] = $portRangeMax;
        return $this;
    }

    /**
    * Gets portRangeMin
    *  功能说明：最小端口 当协议类型为ICMP时，该值表示ICMP的type。protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    *
    * @return int
    */
    public function getPortRangeMin()
    {
        return $this->container['portRangeMin'];
    }

    /**
    * Sets portRangeMin
    *
    * @param int $portRangeMin 功能说明：最小端口 当协议类型为ICMP时，该值表示ICMP的type。protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    *
    * @return $this
    */
    public function setPortRangeMin($portRangeMin)
    {
        $this->container['portRangeMin'] = $portRangeMin;
        return $this;
    }

    /**
    * Gets protocol
    *  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets remoteGroupId
    *  所属安全组的对端ID
    *
    * @return string
    */
    public function getRemoteGroupId()
    {
        return $this->container['remoteGroupId'];
    }

    /**
    * Sets remoteGroupId
    *
    * @param string $remoteGroupId 所属安全组的对端ID
    *
    * @return $this
    */
    public function setRemoteGroupId($remoteGroupId)
    {
        $this->container['remoteGroupId'] = $remoteGroupId;
        return $this;
    }

    /**
    * Gets remoteIpPrefix
    *  对端ip网段
    *
    * @return string
    */
    public function getRemoteIpPrefix()
    {
        return $this->container['remoteIpPrefix'];
    }

    /**
    * Sets remoteIpPrefix
    *
    * @param string $remoteIpPrefix 对端ip网段
    *
    * @return $this
    */
    public function setRemoteIpPrefix($remoteIpPrefix)
    {
        $this->container['remoteIpPrefix'] = $remoteIpPrefix;
        return $this;
    }

    /**
    * Gets remoteAddressGroupId
    *  功能说明：远端IP地址组ID 约束：和remote_ip_prefix，remote_group_id互斥
    *
    * @return string
    */
    public function getRemoteAddressGroupId()
    {
        return $this->container['remoteAddressGroupId'];
    }

    /**
    * Sets remoteAddressGroupId
    *
    * @param string $remoteAddressGroupId 功能说明：远端IP地址组ID 约束：和remote_ip_prefix，remote_group_id互斥
    *
    * @return $this
    */
    public function setRemoteAddressGroupId($remoteAddressGroupId)
    {
        $this->container['remoteAddressGroupId'] = $remoteAddressGroupId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  所属安全组ID
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 所属安全组ID
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
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

