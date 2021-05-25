<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSecurityGroupRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSecurityGroupRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * securityGroupId  安全组ID
    * description  功能说明：安全组规则描述 取值范围：0-255个字符，支持数字、字母、中文字符
    * direction  功能说明：出入控制方向 取值范围： - egress：出方向 - ingress：入方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4,IPv6 约束：默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：tcp、udp、icmp或IP协议编号（0~255） 约束：为空表示支持所有协议
    * portRangeMin  功能说明：起始端口值 取值范围：1~65535 约束：不能大于port_range_max的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * portRangeMax  功能说明：结束端口值 取值范围：1~65535 约束：协议不为icmp时，取值不能小于port_range_min的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：和remote_group_id互斥
    * remoteGroupId  功能说明：对端安全组ID 约束：和remote_ip_prefix互斥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'securityGroupId' => 'string',
            'description' => 'string',
            'direction' => 'string',
            'ethertype' => 'string',
            'protocol' => 'string',
            'portRangeMin' => 'int',
            'portRangeMax' => 'int',
            'remoteIpPrefix' => 'string',
            'remoteGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * securityGroupId  安全组ID
    * description  功能说明：安全组规则描述 取值范围：0-255个字符，支持数字、字母、中文字符
    * direction  功能说明：出入控制方向 取值范围： - egress：出方向 - ingress：入方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4,IPv6 约束：默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：tcp、udp、icmp或IP协议编号（0~255） 约束：为空表示支持所有协议
    * portRangeMin  功能说明：起始端口值 取值范围：1~65535 约束：不能大于port_range_max的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * portRangeMax  功能说明：结束端口值 取值范围：1~65535 约束：协议不为icmp时，取值不能小于port_range_min的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：和remote_group_id互斥
    * remoteGroupId  功能说明：对端安全组ID 约束：和remote_ip_prefix互斥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'securityGroupId' => null,
        'description' => null,
        'direction' => null,
        'ethertype' => null,
        'protocol' => null,
        'portRangeMin' => 'int32',
        'portRangeMax' => 'int32',
        'remoteIpPrefix' => null,
        'remoteGroupId' => null
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
    * securityGroupId  安全组ID
    * description  功能说明：安全组规则描述 取值范围：0-255个字符，支持数字、字母、中文字符
    * direction  功能说明：出入控制方向 取值范围： - egress：出方向 - ingress：入方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4,IPv6 约束：默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：tcp、udp、icmp或IP协议编号（0~255） 约束：为空表示支持所有协议
    * portRangeMin  功能说明：起始端口值 取值范围：1~65535 约束：不能大于port_range_max的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * portRangeMax  功能说明：结束端口值 取值范围：1~65535 约束：协议不为icmp时，取值不能小于port_range_min的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：和remote_group_id互斥
    * remoteGroupId  功能说明：对端安全组ID 约束：和remote_ip_prefix互斥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'securityGroupId' => 'security_group_id',
            'description' => 'description',
            'direction' => 'direction',
            'ethertype' => 'ethertype',
            'protocol' => 'protocol',
            'portRangeMin' => 'port_range_min',
            'portRangeMax' => 'port_range_max',
            'remoteIpPrefix' => 'remote_ip_prefix',
            'remoteGroupId' => 'remote_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * securityGroupId  安全组ID
    * description  功能说明：安全组规则描述 取值范围：0-255个字符，支持数字、字母、中文字符
    * direction  功能说明：出入控制方向 取值范围： - egress：出方向 - ingress：入方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4,IPv6 约束：默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：tcp、udp、icmp或IP协议编号（0~255） 约束：为空表示支持所有协议
    * portRangeMin  功能说明：起始端口值 取值范围：1~65535 约束：不能大于port_range_max的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * portRangeMax  功能说明：结束端口值 取值范围：1~65535 约束：协议不为icmp时，取值不能小于port_range_min的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：和remote_group_id互斥
    * remoteGroupId  功能说明：对端安全组ID 约束：和remote_ip_prefix互斥
    *
    * @var string[]
    */
    protected static $setters = [
            'securityGroupId' => 'setSecurityGroupId',
            'description' => 'setDescription',
            'direction' => 'setDirection',
            'ethertype' => 'setEthertype',
            'protocol' => 'setProtocol',
            'portRangeMin' => 'setPortRangeMin',
            'portRangeMax' => 'setPortRangeMax',
            'remoteIpPrefix' => 'setRemoteIpPrefix',
            'remoteGroupId' => 'setRemoteGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * securityGroupId  安全组ID
    * description  功能说明：安全组规则描述 取值范围：0-255个字符，支持数字、字母、中文字符
    * direction  功能说明：出入控制方向 取值范围： - egress：出方向 - ingress：入方向
    * ethertype  功能说明：IP地址协议类型 取值范围：IPv4,IPv6 约束：默认值为IPv4
    * protocol  功能说明：协议类型 取值范围：tcp、udp、icmp或IP协议编号（0~255） 约束：为空表示支持所有协议
    * portRangeMin  功能说明：起始端口值 取值范围：1~65535 约束：不能大于port_range_max的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * portRangeMax  功能说明：结束端口值 取值范围：1~65535 约束：协议不为icmp时，取值不能小于port_range_min的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    * remoteIpPrefix  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：和remote_group_id互斥
    * remoteGroupId  功能说明：对端安全组ID 约束：和remote_ip_prefix互斥
    *
    * @var string[]
    */
    protected static $getters = [
            'securityGroupId' => 'getSecurityGroupId',
            'description' => 'getDescription',
            'direction' => 'getDirection',
            'ethertype' => 'getEthertype',
            'protocol' => 'getProtocol',
            'portRangeMin' => 'getPortRangeMin',
            'portRangeMax' => 'getPortRangeMax',
            'remoteIpPrefix' => 'getRemoteIpPrefix',
            'remoteGroupId' => 'getRemoteGroupId'
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
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['ethertype'] = isset($data['ethertype']) ? $data['ethertype'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['portRangeMin'] = isset($data['portRangeMin']) ? $data['portRangeMin'] : null;
        $this->container['portRangeMax'] = isset($data['portRangeMax']) ? $data['portRangeMax'] : null;
        $this->container['remoteIpPrefix'] = isset($data['remoteIpPrefix']) ? $data['remoteIpPrefix'] : null;
        $this->container['remoteGroupId'] = isset($data['remoteGroupId']) ? $data['remoteGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
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
    * Gets securityGroupId
    *  安全组ID
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
    * @param string $securityGroupId 安全组ID
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：安全组规则描述 取值范围：0-255个字符，支持数字、字母、中文字符
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
    * @param string|null $description 功能说明：安全组规则描述 取值范围：0-255个字符，支持数字、字母、中文字符
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
    *  功能说明：出入控制方向 取值范围： - egress：出方向 - ingress：入方向
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
    * @param string $direction 功能说明：出入控制方向 取值范围： - egress：出方向 - ingress：入方向
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
    *  功能说明：IP地址协议类型 取值范围：IPv4,IPv6 约束：默认值为IPv4
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
    * @param string|null $ethertype 功能说明：IP地址协议类型 取值范围：IPv4,IPv6 约束：默认值为IPv4
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
    *  功能说明：协议类型 取值范围：tcp、udp、icmp或IP协议编号（0~255） 约束：为空表示支持所有协议
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
    * @param string|null $protocol 功能说明：协议类型 取值范围：tcp、udp、icmp或IP协议编号（0~255） 约束：为空表示支持所有协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets portRangeMin
    *  功能说明：起始端口值 取值范围：1~65535 约束：不能大于port_range_max的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    *
    * @return int|null
    */
    public function getPortRangeMin()
    {
        return $this->container['portRangeMin'];
    }

    /**
    * Sets portRangeMin
    *
    * @param int|null $portRangeMin 功能说明：起始端口值 取值范围：1~65535 约束：不能大于port_range_max的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    *
    * @return $this
    */
    public function setPortRangeMin($portRangeMin)
    {
        $this->container['portRangeMin'] = $portRangeMin;
        return $this;
    }

    /**
    * Gets portRangeMax
    *  功能说明：结束端口值 取值范围：1~65535 约束：协议不为icmp时，取值不能小于port_range_min的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    *
    * @return int|null
    */
    public function getPortRangeMax()
    {
        return $this->container['portRangeMax'];
    }

    /**
    * Sets portRangeMax
    *
    * @param int|null $portRangeMax 功能说明：结束端口值 取值范围：1~65535 约束：协议不为icmp时，取值不能小于port_range_min的值，为空表示所有端口，如果协议是icmp类型，取值范围请参见 [安全组规则icmp协议名称对应关系表](https://support.huaweicloud.com/api-vpc/vpc_api_0009.html)
    *
    * @return $this
    */
    public function setPortRangeMax($portRangeMax)
    {
        $this->container['portRangeMax'] = $portRangeMax;
        return $this;
    }

    /**
    * Gets remoteIpPrefix
    *  功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：和remote_group_id互斥
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
    * @param string|null $remoteIpPrefix 功能说明：远端IP地址，当direction是egress时为虚拟机访问端的地址，当direction是ingress时为访问虚拟机的地址 取值范围：IP地址，或者cidr格式 约束：和remote_group_id互斥
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
    *  功能说明：对端安全组ID 约束：和remote_ip_prefix互斥
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
    * @param string|null $remoteGroupId 功能说明：对端安全组ID 约束：和remote_ip_prefix互斥
    *
    * @return $this
    */
    public function setRemoteGroupId($remoteGroupId)
    {
        $this->container['remoteGroupId'] = $remoteGroupId;
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

