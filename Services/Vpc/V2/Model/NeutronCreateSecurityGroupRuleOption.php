<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronCreateSecurityGroupRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronCreateSecurityGroupRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  功能说明：安全组规则描述 取值范围：0-255个字符
    * direction  功能说明：安全组规则方向 取值范围：ingress(入方向)或egress(出方向)
    * ethertype  功能说明：安全组规则网络类型 取值范围：IPv4或IPv6
    * portRangeMax  最大端口，当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口，当协议类型为ICMP时，该值表示ICMP的type 约束：protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  功能说明：目的安全组的ID
    * remoteIpPrefix  功能说明：目的端ip网段 取值范围：cidr格式，如10.10.0.0/16
    * securityGroupId  所属安全组ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'direction' => 'string',
            'ethertype' => 'string',
            'portRangeMax' => 'int',
            'portRangeMin' => 'int',
            'protocol' => 'string',
            'remoteGroupId' => 'string',
            'remoteIpPrefix' => 'string',
            'securityGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  功能说明：安全组规则描述 取值范围：0-255个字符
    * direction  功能说明：安全组规则方向 取值范围：ingress(入方向)或egress(出方向)
    * ethertype  功能说明：安全组规则网络类型 取值范围：IPv4或IPv6
    * portRangeMax  最大端口，当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口，当协议类型为ICMP时，该值表示ICMP的type 约束：protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  功能说明：目的安全组的ID
    * remoteIpPrefix  功能说明：目的端ip网段 取值范围：cidr格式，如10.10.0.0/16
    * securityGroupId  所属安全组ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'direction' => null,
        'ethertype' => null,
        'portRangeMax' => 'int32',
        'portRangeMin' => 'int32',
        'protocol' => null,
        'remoteGroupId' => null,
        'remoteIpPrefix' => null,
        'securityGroupId' => null
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
    * description  功能说明：安全组规则描述 取值范围：0-255个字符
    * direction  功能说明：安全组规则方向 取值范围：ingress(入方向)或egress(出方向)
    * ethertype  功能说明：安全组规则网络类型 取值范围：IPv4或IPv6
    * portRangeMax  最大端口，当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口，当协议类型为ICMP时，该值表示ICMP的type 约束：protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  功能说明：目的安全组的ID
    * remoteIpPrefix  功能说明：目的端ip网段 取值范围：cidr格式，如10.10.0.0/16
    * securityGroupId  所属安全组ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'direction' => 'direction',
            'ethertype' => 'ethertype',
            'portRangeMax' => 'port_range_max',
            'portRangeMin' => 'port_range_min',
            'protocol' => 'protocol',
            'remoteGroupId' => 'remote_group_id',
            'remoteIpPrefix' => 'remote_ip_prefix',
            'securityGroupId' => 'security_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  功能说明：安全组规则描述 取值范围：0-255个字符
    * direction  功能说明：安全组规则方向 取值范围：ingress(入方向)或egress(出方向)
    * ethertype  功能说明：安全组规则网络类型 取值范围：IPv4或IPv6
    * portRangeMax  最大端口，当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口，当协议类型为ICMP时，该值表示ICMP的type 约束：protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  功能说明：目的安全组的ID
    * remoteIpPrefix  功能说明：目的端ip网段 取值范围：cidr格式，如10.10.0.0/16
    * securityGroupId  所属安全组ID
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'direction' => 'setDirection',
            'ethertype' => 'setEthertype',
            'portRangeMax' => 'setPortRangeMax',
            'portRangeMin' => 'setPortRangeMin',
            'protocol' => 'setProtocol',
            'remoteGroupId' => 'setRemoteGroupId',
            'remoteIpPrefix' => 'setRemoteIpPrefix',
            'securityGroupId' => 'setSecurityGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  功能说明：安全组规则描述 取值范围：0-255个字符
    * direction  功能说明：安全组规则方向 取值范围：ingress(入方向)或egress(出方向)
    * ethertype  功能说明：安全组规则网络类型 取值范围：IPv4或IPv6
    * portRangeMax  最大端口，当协议类型为ICMP时，该值表示ICMP的code
    * portRangeMin  功能说明：最小端口，当协议类型为ICMP时，该值表示ICMP的type 约束：protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
    * protocol  功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
    * remoteGroupId  功能说明：目的安全组的ID
    * remoteIpPrefix  功能说明：目的端ip网段 取值范围：cidr格式，如10.10.0.0/16
    * securityGroupId  所属安全组ID
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'direction' => 'getDirection',
            'ethertype' => 'getEthertype',
            'portRangeMax' => 'getPortRangeMax',
            'portRangeMin' => 'getPortRangeMin',
            'protocol' => 'getProtocol',
            'remoteGroupId' => 'getRemoteGroupId',
            'remoteIpPrefix' => 'getRemoteIpPrefix',
            'securityGroupId' => 'getSecurityGroupId'
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
    const ETHERTYPE_I_PV4 = 'IPv4';
    const ETHERTYPE_I_PV6 = 'IPv6';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEthertypeAllowableValues()
    {
        return [
            self::ETHERTYPE_I_PV4,
            self::ETHERTYPE_I_PV6,
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
        $this->container['portRangeMax'] = isset($data['portRangeMax']) ? $data['portRangeMax'] : null;
        $this->container['portRangeMin'] = isset($data['portRangeMin']) ? $data['portRangeMin'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['remoteGroupId'] = isset($data['remoteGroupId']) ? $data['remoteGroupId'] : null;
        $this->container['remoteIpPrefix'] = isset($data['remoteIpPrefix']) ? $data['remoteIpPrefix'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
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

            $allowedValues = $this->getEthertypeAllowableValues();
                if (!is_null($this->container['ethertype']) && !in_array($this->container['ethertype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ethertype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['remoteGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['remoteGroupId'])) {
                $invalidProperties[] = "invalid value for 'remoteGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['remoteIpPrefix']) && (mb_strlen($this->container['remoteIpPrefix']) > 255)) {
                $invalidProperties[] = "invalid value for 'remoteIpPrefix', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
            if ((mb_strlen($this->container['securityGroupId']) > 255)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['securityGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['securityGroupId'])) {
                $invalidProperties[] = "invalid value for 'securityGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    *  功能说明：安全组规则描述 取值范围：0-255个字符
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
    * @param string|null $description 功能说明：安全组规则描述 取值范围：0-255个字符
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
    *  功能说明：安全组规则方向 取值范围：ingress(入方向)或egress(出方向)
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
    * @param string $direction 功能说明：安全组规则方向 取值范围：ingress(入方向)或egress(出方向)
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
    *  功能说明：安全组规则网络类型 取值范围：IPv4或IPv6
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
    * @param string|null $ethertype 功能说明：安全组规则网络类型 取值范围：IPv4或IPv6
    *
    * @return $this
    */
    public function setEthertype($ethertype)
    {
        $this->container['ethertype'] = $ethertype;
        return $this;
    }

    /**
    * Gets portRangeMax
    *  最大端口，当协议类型为ICMP时，该值表示ICMP的code
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
    * @param int|null $portRangeMax 最大端口，当协议类型为ICMP时，该值表示ICMP的code
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
    *  功能说明：最小端口，当协议类型为ICMP时，该值表示ICMP的type 约束：protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
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
    * @param int|null $portRangeMin 功能说明：最小端口，当协议类型为ICMP时，该值表示ICMP的type 约束：protocol为tcp和udp时，port_range_max和port_range_min必须同时输入，且port_range_max应大于等于port_range_min。protocol为icmp时，指定ICMP code（port_range_max）时，必须同时指定ICMP type（port_range_min）。
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
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 功能说明：tcp/udp/icmp/icmpv6或IP协议编号（0~255） 约束：协议为icmpv6时，网络类型应该为IPv6；协议为icmp时，网络类型应该为IPv4
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
    *  功能说明：目的安全组的ID
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
    * @param string|null $remoteGroupId 功能说明：目的安全组的ID
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
    *  功能说明：目的端ip网段 取值范围：cidr格式，如10.10.0.0/16
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
    * @param string|null $remoteIpPrefix 功能说明：目的端ip网段 取值范围：cidr格式，如10.10.0.0/16
    *
    * @return $this
    */
    public function setRemoteIpPrefix($remoteIpPrefix)
    {
        $this->container['remoteIpPrefix'] = $remoteIpPrefix;
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

