<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcSubnetSecurityGroupRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcSubnetSecurityGroupRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  安全组规则对应的唯一标识 取值范围：带“-”的标准UUID格式
    * description  安全组规则的描述信息
    * securityGroupId  安全组规则所属的安全组ID
    * direction  安全组规则的出入控制方向 取值范围： ingress 表示入方向 egress 表示出方向
    * protocol  协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * ethertype  IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * multiport  端口取值范围 取值范围：支持和单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80)
    * action  安全组规则生效策略 取值范围： allow表示允许 deny表示拒绝 约束：默认值为deny
    * priority  优先级 取值范围：1~100，1代表最高优先级
    * remoteGroupId  远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteIpPrefix  远端IP地址， 当direction是egress时，为虚拟机访问端的地址 当direction是ingress时，为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteAddressGroupId  远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * createdAt  安全组规则创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  安全组规则更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * projectId  安全组规则所属项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'securityGroupId' => 'string',
            'direction' => 'string',
            'protocol' => 'string',
            'ethertype' => 'string',
            'multiport' => 'string',
            'action' => 'string',
            'priority' => 'int',
            'remoteGroupId' => 'string',
            'remoteIpPrefix' => 'string',
            'remoteAddressGroupId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  安全组规则对应的唯一标识 取值范围：带“-”的标准UUID格式
    * description  安全组规则的描述信息
    * securityGroupId  安全组规则所属的安全组ID
    * direction  安全组规则的出入控制方向 取值范围： ingress 表示入方向 egress 表示出方向
    * protocol  协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * ethertype  IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * multiport  端口取值范围 取值范围：支持和单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80)
    * action  安全组规则生效策略 取值范围： allow表示允许 deny表示拒绝 约束：默认值为deny
    * priority  优先级 取值范围：1~100，1代表最高优先级
    * remoteGroupId  远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteIpPrefix  远端IP地址， 当direction是egress时，为虚拟机访问端的地址 当direction是ingress时，为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteAddressGroupId  远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * createdAt  安全组规则创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  安全组规则更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * projectId  安全组规则所属项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'securityGroupId' => null,
        'direction' => null,
        'protocol' => null,
        'ethertype' => null,
        'multiport' => null,
        'action' => null,
        'priority' => 'int32',
        'remoteGroupId' => null,
        'remoteIpPrefix' => null,
        'remoteAddressGroupId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'projectId' => null
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
    * id  安全组规则对应的唯一标识 取值范围：带“-”的标准UUID格式
    * description  安全组规则的描述信息
    * securityGroupId  安全组规则所属的安全组ID
    * direction  安全组规则的出入控制方向 取值范围： ingress 表示入方向 egress 表示出方向
    * protocol  协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * ethertype  IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * multiport  端口取值范围 取值范围：支持和单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80)
    * action  安全组规则生效策略 取值范围： allow表示允许 deny表示拒绝 约束：默认值为deny
    * priority  优先级 取值范围：1~100，1代表最高优先级
    * remoteGroupId  远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteIpPrefix  远端IP地址， 当direction是egress时，为虚拟机访问端的地址 当direction是ingress时，为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteAddressGroupId  远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * createdAt  安全组规则创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  安全组规则更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * projectId  安全组规则所属项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'securityGroupId' => 'security_group_id',
            'direction' => 'direction',
            'protocol' => 'protocol',
            'ethertype' => 'ethertype',
            'multiport' => 'multiport',
            'action' => 'action',
            'priority' => 'priority',
            'remoteGroupId' => 'remote_group_id',
            'remoteIpPrefix' => 'remote_ip_prefix',
            'remoteAddressGroupId' => 'remote_address_group_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  安全组规则对应的唯一标识 取值范围：带“-”的标准UUID格式
    * description  安全组规则的描述信息
    * securityGroupId  安全组规则所属的安全组ID
    * direction  安全组规则的出入控制方向 取值范围： ingress 表示入方向 egress 表示出方向
    * protocol  协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * ethertype  IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * multiport  端口取值范围 取值范围：支持和单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80)
    * action  安全组规则生效策略 取值范围： allow表示允许 deny表示拒绝 约束：默认值为deny
    * priority  优先级 取值范围：1~100，1代表最高优先级
    * remoteGroupId  远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteIpPrefix  远端IP地址， 当direction是egress时，为虚拟机访问端的地址 当direction是ingress时，为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteAddressGroupId  远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * createdAt  安全组规则创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  安全组规则更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * projectId  安全组规则所属项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'securityGroupId' => 'setSecurityGroupId',
            'direction' => 'setDirection',
            'protocol' => 'setProtocol',
            'ethertype' => 'setEthertype',
            'multiport' => 'setMultiport',
            'action' => 'setAction',
            'priority' => 'setPriority',
            'remoteGroupId' => 'setRemoteGroupId',
            'remoteIpPrefix' => 'setRemoteIpPrefix',
            'remoteAddressGroupId' => 'setRemoteAddressGroupId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  安全组规则对应的唯一标识 取值范围：带“-”的标准UUID格式
    * description  安全组规则的描述信息
    * securityGroupId  安全组规则所属的安全组ID
    * direction  安全组规则的出入控制方向 取值范围： ingress 表示入方向 egress 表示出方向
    * protocol  协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * ethertype  IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * multiport  端口取值范围 取值范围：支持和单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80)
    * action  安全组规则生效策略 取值范围： allow表示允许 deny表示拒绝 约束：默认值为deny
    * priority  优先级 取值范围：1~100，1代表最高优先级
    * remoteGroupId  远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteIpPrefix  远端IP地址， 当direction是egress时，为虚拟机访问端的地址 当direction是ingress时，为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteAddressGroupId  远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * createdAt  安全组规则创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  安全组规则更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * projectId  安全组规则所属项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'securityGroupId' => 'getSecurityGroupId',
            'direction' => 'getDirection',
            'protocol' => 'getProtocol',
            'ethertype' => 'getEthertype',
            'multiport' => 'getMultiport',
            'action' => 'getAction',
            'priority' => 'getPriority',
            'remoteGroupId' => 'getRemoteGroupId',
            'remoteIpPrefix' => 'getRemoteIpPrefix',
            'remoteAddressGroupId' => 'getRemoteAddressGroupId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'projectId' => 'getProjectId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ethertype'] = isset($data['ethertype']) ? $data['ethertype'] : null;
        $this->container['multiport'] = isset($data['multiport']) ? $data['multiport'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['remoteGroupId'] = isset($data['remoteGroupId']) ? $data['remoteGroupId'] : null;
        $this->container['remoteIpPrefix'] = isset($data['remoteIpPrefix']) ? $data['remoteIpPrefix'] : null;
        $this->container['remoteAddressGroupId'] = isset($data['remoteAddressGroupId']) ? $data['remoteAddressGroupId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if ((mb_strlen($this->container['securityGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['securityGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
            if ((mb_strlen($this->container['direction']) > 32)) {
                $invalidProperties[] = "invalid value for 'direction', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['direction']) < 0)) {
                $invalidProperties[] = "invalid value for 'direction', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            if ((mb_strlen($this->container['protocol']) > 32)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['protocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ethertype'] === null) {
            $invalidProperties[] = "'ethertype' can't be null";
        }
            if ((mb_strlen($this->container['ethertype']) > 32)) {
                $invalidProperties[] = "invalid value for 'ethertype', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['ethertype']) < 0)) {
                $invalidProperties[] = "invalid value for 'ethertype', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['multiport'] === null) {
            $invalidProperties[] = "'multiport' can't be null";
        }
            if ((mb_strlen($this->container['multiport']) > 2048)) {
                $invalidProperties[] = "invalid value for 'multiport', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['multiport']) < 0)) {
                $invalidProperties[] = "invalid value for 'multiport', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if ((mb_strlen($this->container['action']) > 32)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
            if (($this->container['priority'] >= 100)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than 100.";
            }
            if (($this->container['priority'] <= 1)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than 1.";
            }
            if (!is_null($this->container['remoteGroupId']) && (mb_strlen($this->container['remoteGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'remoteGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['remoteGroupId']) && (mb_strlen($this->container['remoteGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'remoteGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remoteIpPrefix']) && (mb_strlen($this->container['remoteIpPrefix']) > 36)) {
                $invalidProperties[] = "invalid value for 'remoteIpPrefix', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['remoteIpPrefix']) && (mb_strlen($this->container['remoteIpPrefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'remoteIpPrefix', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remoteAddressGroupId']) && (mb_strlen($this->container['remoteAddressGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'remoteAddressGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['remoteAddressGroupId']) && (mb_strlen($this->container['remoteAddressGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'remoteAddressGroupId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
            if ((mb_strlen($this->container['createdAt']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            if ((mb_strlen($this->container['updatedAt']) > 32)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
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
    *  安全组规则对应的唯一标识 取值范围：带“-”的标准UUID格式
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
    * @param string $id 安全组规则对应的唯一标识 取值范围：带“-”的标准UUID格式
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  安全组规则的描述信息
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
    * @param string|null $description 安全组规则的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组规则所属的安全组ID
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
    * @param string $securityGroupId 安全组规则所属的安全组ID
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets direction
    *  安全组规则的出入控制方向 取值范围： ingress 表示入方向 egress 表示出方向
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
    * @param string $direction 安全组规则的出入控制方向 取值范围： ingress 表示入方向 egress 表示出方向
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
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
    * @param string $protocol 协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets ethertype
    *  IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
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
    * @param string $ethertype IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    *
    * @return $this
    */
    public function setEthertype($ethertype)
    {
        $this->container['ethertype'] = $ethertype;
        return $this;
    }

    /**
    * Gets multiport
    *  端口取值范围 取值范围：支持和单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80)
    *
    * @return string
    */
    public function getMultiport()
    {
        return $this->container['multiport'];
    }

    /**
    * Sets multiport
    *
    * @param string $multiport 端口取值范围 取值范围：支持和单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80)
    *
    * @return $this
    */
    public function setMultiport($multiport)
    {
        $this->container['multiport'] = $multiport;
        return $this;
    }

    /**
    * Gets action
    *  安全组规则生效策略 取值范围： allow表示允许 deny表示拒绝 约束：默认值为deny
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 安全组规则生效策略 取值范围： allow表示允许 deny表示拒绝 约束：默认值为deny
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets priority
    *  优先级 取值范围：1~100，1代表最高优先级
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 优先级 取值范围：1~100，1代表最高优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets remoteGroupId
    *  远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    *
    * @return string|null
    */
    public function getRemoteGroupId()
    {
        return $this->container['remoteGroupId'];
    }

    /**
    * Sets remoteGroupId
    *
    * @param string|null $remoteGroupId 远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
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
    *  远端IP地址， 当direction是egress时，为虚拟机访问端的地址 当direction是ingress时，为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    *
    * @return string|null
    */
    public function getRemoteIpPrefix()
    {
        return $this->container['remoteIpPrefix'];
    }

    /**
    * Sets remoteIpPrefix
    *
    * @param string|null $remoteIpPrefix 远端IP地址， 当direction是egress时，为虚拟机访问端的地址 当direction是ingress时，为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
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
    *  远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    *
    * @return string|null
    */
    public function getRemoteAddressGroupId()
    {
        return $this->container['remoteAddressGroupId'];
    }

    /**
    * Sets remoteAddressGroupId
    *
    * @param string|null $remoteAddressGroupId 远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    *
    * @return $this
    */
    public function setRemoteAddressGroupId($remoteAddressGroupId)
    {
        $this->container['remoteAddressGroupId'] = $remoteAddressGroupId;
        return $this;
    }

    /**
    * Gets createdAt
    *  安全组规则创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
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
    * @param string $createdAt 安全组规则创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
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
    *  安全组规则更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
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
    * @param string $updatedAt 安全组规则更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets projectId
    *  安全组规则所属项目ID
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
    * @param string $projectId 安全组规则所属项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

