<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateSecurityGroupRulesOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateSecurityGroupRulesOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  功能说明：安全组的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * direction  功能说明：安全组规则的出入控制方向 取值范围：ingress 表示入方向；egress 表示出方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号(0~255) 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * multiport  功能说明：端口取值范围 取值范围：支持单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80) 约束：端口值的范围1~65535
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteGroupId  功能说明：远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteAddressGroupId  功能说明：远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * action  功能说明：安全组规则生效策略 取值范围：allow 允许，deny 拒绝 约束：默认值为allow
    * priority  功能说明：规则在安全组中的优先级 取值范围：1~100，1代表最高优先级 约束：默认值为1
    * enabled  功能说明：是否启用安全组规则。 取值范围：true, false。 约束：默认值为true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'direction' => 'string',
            'ethertype' => 'string',
            'protocol' => 'string',
            'multiport' => 'string',
            'remoteIpPrefix' => 'string',
            'remoteGroupId' => 'string',
            'remoteAddressGroupId' => 'string',
            'action' => 'string',
            'priority' => 'string',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  功能说明：安全组的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * direction  功能说明：安全组规则的出入控制方向 取值范围：ingress 表示入方向；egress 表示出方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号(0~255) 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * multiport  功能说明：端口取值范围 取值范围：支持单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80) 约束：端口值的范围1~65535
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteGroupId  功能说明：远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteAddressGroupId  功能说明：远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * action  功能说明：安全组规则生效策略 取值范围：allow 允许，deny 拒绝 约束：默认值为allow
    * priority  功能说明：规则在安全组中的优先级 取值范围：1~100，1代表最高优先级 约束：默认值为1
    * enabled  功能说明：是否启用安全组规则。 取值范围：true, false。 约束：默认值为true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'direction' => null,
        'ethertype' => null,
        'protocol' => null,
        'multiport' => null,
        'remoteIpPrefix' => null,
        'remoteGroupId' => null,
        'remoteAddressGroupId' => null,
        'action' => null,
        'priority' => null,
        'enabled' => null
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
    * description  功能说明：安全组的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * direction  功能说明：安全组规则的出入控制方向 取值范围：ingress 表示入方向；egress 表示出方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号(0~255) 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * multiport  功能说明：端口取值范围 取值范围：支持单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80) 约束：端口值的范围1~65535
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteGroupId  功能说明：远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteAddressGroupId  功能说明：远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * action  功能说明：安全组规则生效策略 取值范围：allow 允许，deny 拒绝 约束：默认值为allow
    * priority  功能说明：规则在安全组中的优先级 取值范围：1~100，1代表最高优先级 约束：默认值为1
    * enabled  功能说明：是否启用安全组规则。 取值范围：true, false。 约束：默认值为true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'direction' => 'direction',
            'ethertype' => 'ethertype',
            'protocol' => 'protocol',
            'multiport' => 'multiport',
            'remoteIpPrefix' => 'remote_ip_prefix',
            'remoteGroupId' => 'remote_group_id',
            'remoteAddressGroupId' => 'remote_address_group_id',
            'action' => 'action',
            'priority' => 'priority',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  功能说明：安全组的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * direction  功能说明：安全组规则的出入控制方向 取值范围：ingress 表示入方向；egress 表示出方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号(0~255) 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * multiport  功能说明：端口取值范围 取值范围：支持单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80) 约束：端口值的范围1~65535
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteGroupId  功能说明：远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteAddressGroupId  功能说明：远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * action  功能说明：安全组规则生效策略 取值范围：allow 允许，deny 拒绝 约束：默认值为allow
    * priority  功能说明：规则在安全组中的优先级 取值范围：1~100，1代表最高优先级 约束：默认值为1
    * enabled  功能说明：是否启用安全组规则。 取值范围：true, false。 约束：默认值为true。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'direction' => 'setDirection',
            'ethertype' => 'setEthertype',
            'protocol' => 'setProtocol',
            'multiport' => 'setMultiport',
            'remoteIpPrefix' => 'setRemoteIpPrefix',
            'remoteGroupId' => 'setRemoteGroupId',
            'remoteAddressGroupId' => 'setRemoteAddressGroupId',
            'action' => 'setAction',
            'priority' => 'setPriority',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  功能说明：安全组的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * direction  功能说明：安全组规则的出入控制方向 取值范围：ingress 表示入方向；egress 表示出方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号(0~255) 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * multiport  功能说明：端口取值范围 取值范围：支持单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80) 约束：端口值的范围1~65535
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    * remoteGroupId  功能说明：远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    * remoteAddressGroupId  功能说明：远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    * action  功能说明：安全组规则生效策略 取值范围：allow 允许，deny 拒绝 约束：默认值为allow
    * priority  功能说明：规则在安全组中的优先级 取值范围：1~100，1代表最高优先级 约束：默认值为1
    * enabled  功能说明：是否启用安全组规则。 取值范围：true, false。 约束：默认值为true。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'direction' => 'getDirection',
            'ethertype' => 'getEthertype',
            'protocol' => 'getProtocol',
            'multiport' => 'getMultiport',
            'remoteIpPrefix' => 'getRemoteIpPrefix',
            'remoteGroupId' => 'getRemoteGroupId',
            'remoteAddressGroupId' => 'getRemoteAddressGroupId',
            'action' => 'getAction',
            'priority' => 'getPriority',
            'enabled' => 'getEnabled'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['ethertype'] = isset($data['ethertype']) ? $data['ethertype'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['multiport'] = isset($data['multiport']) ? $data['multiport'] : null;
        $this->container['remoteIpPrefix'] = isset($data['remoteIpPrefix']) ? $data['remoteIpPrefix'] : null;
        $this->container['remoteGroupId'] = isset($data['remoteGroupId']) ? $data['remoteGroupId'] : null;
        $this->container['remoteAddressGroupId'] = isset($data['remoteAddressGroupId']) ? $data['remoteAddressGroupId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
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
    *  功能说明：安全组的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    * @param string|null $description 功能说明：安全组的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    *  功能说明：安全组规则的出入控制方向 取值范围：ingress 表示入方向；egress 表示出方向
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
    * @param string $direction 功能说明：安全组规则的出入控制方向 取值范围：ingress 表示入方向；egress 表示出方向
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
    *  功能说明：IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    *
    * @return string|null
    */
    public function getEthertype()
    {
        return $this->container['ethertype'];
    }

    /**
    * Sets ethertype
    *
    * @param string|null $ethertype 功能说明：IP地址协议类型 取值范围：IPv4，IPv6 约束：不填默认值为IPv4
    *
    * @return $this
    */
    public function setEthertype($ethertype)
    {
        $this->container['ethertype'] = $ethertype;
        return $this;
    }

    /**
    * Gets protocol
    *  功能说明：协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号(0~255) 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 功能说明：协议类型 取值范围：icmp、tcp、udp、icmpv6或IP协议号(0~255) 约束：为空表示支持所有协议。协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets multiport
    *  功能说明：端口取值范围 取值范围：支持单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80) 约束：端口值的范围1~65535
    *
    * @return string|null
    */
    public function getMultiport()
    {
        return $this->container['multiport'];
    }

    /**
    * Sets multiport
    *
    * @param string|null $multiport 功能说明：端口取值范围 取值范围：支持单端口(80)，连续端口(1-30)以及不连续端口(22,3389,80) 约束：端口值的范围1~65535
    *
    * @return $this
    */
    public function setMultiport($multiport)
    {
        $this->container['multiport'] = $multiport;
        return $this;
    }

    /**
    * Gets remoteIpPrefix
    *  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
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
    * @param string|null $remoteIpPrefix 功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：与remote_group_id、remote_address_group_id互斥
    *
    * @return $this
    */
    public function setRemoteIpPrefix($remoteIpPrefix)
    {
        $this->container['remoteIpPrefix'] = $remoteIpPrefix;
        return $this;
    }

    /**
    * Gets remoteGroupId
    *  功能说明：远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
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
    * @param string|null $remoteGroupId 功能说明：远端安全组ID，表示该安全组内的流量允许或拒绝 取值范围：租户下存在的安全组ID 约束：与remote_ip_prefix，remote_address_group_id功能互斥
    *
    * @return $this
    */
    public function setRemoteGroupId($remoteGroupId)
    {
        $this->container['remoteGroupId'] = $remoteGroupId;
        return $this;
    }

    /**
    * Gets remoteAddressGroupId
    *  功能说明：远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
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
    * @param string|null $remoteAddressGroupId 功能说明：远端地址组ID 取值范围：租户下存在的地址组ID 约束：与remote_ip_prefix，remote_group_id功能互斥
    *
    * @return $this
    */
    public function setRemoteAddressGroupId($remoteAddressGroupId)
    {
        $this->container['remoteAddressGroupId'] = $remoteAddressGroupId;
        return $this;
    }

    /**
    * Gets action
    *  功能说明：安全组规则生效策略 取值范围：allow 允许，deny 拒绝 约束：默认值为allow
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 功能说明：安全组规则生效策略 取值范围：allow 允许，deny 拒绝 约束：默认值为allow
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
    *  功能说明：规则在安全组中的优先级 取值范围：1~100，1代表最高优先级 约束：默认值为1
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority 功能说明：规则在安全组中的优先级 取值范围：1~100，1代表最高优先级 约束：默认值为1
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets enabled
    *  功能说明：是否启用安全组规则。 取值范围：true, false。 约束：默认值为true。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 功能说明：是否启用安全组规则。 取值范围：true, false。 约束：默认值为true。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

