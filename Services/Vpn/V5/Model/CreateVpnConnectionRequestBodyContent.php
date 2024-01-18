<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVpnConnectionRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVpnConnectionRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  VPN连接名称
    * vgwId  VPN网关ID
    * vgwIp  VGW IP
    * style  连接模式 允许范围[policy, static, bgp] policy: 策略模式 static: 静态路由模式 bgp: bgp路由模式
    * cgwId  对端网关ID
    * peerSubnets  对端子网
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * enableNqa  开启NQA检测
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    * haRole  连接的HA角色
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'vgwId' => 'string',
            'vgwIp' => 'string',
            'style' => 'string',
            'cgwId' => 'string',
            'peerSubnets' => 'string[]',
            'tunnelLocalAddress' => 'string',
            'tunnelPeerAddress' => 'string',
            'enableNqa' => 'bool',
            'psk' => 'string',
            'policyRules' => '\HuaweiCloud\SDK\Vpn\V5\Model\PolicyRule[]',
            'ikepolicy' => '\HuaweiCloud\SDK\Vpn\V5\Model\IkePolicy',
            'ipsecpolicy' => '\HuaweiCloud\SDK\Vpn\V5\Model\IpsecPolicy',
            'haRole' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  VPN连接名称
    * vgwId  VPN网关ID
    * vgwIp  VGW IP
    * style  连接模式 允许范围[policy, static, bgp] policy: 策略模式 static: 静态路由模式 bgp: bgp路由模式
    * cgwId  对端网关ID
    * peerSubnets  对端子网
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * enableNqa  开启NQA检测
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    * haRole  连接的HA角色
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'vgwId' => null,
        'vgwIp' => null,
        'style' => null,
        'cgwId' => null,
        'peerSubnets' => null,
        'tunnelLocalAddress' => null,
        'tunnelPeerAddress' => null,
        'enableNqa' => null,
        'psk' => null,
        'policyRules' => null,
        'ikepolicy' => null,
        'ipsecpolicy' => null,
        'haRole' => null,
        'tags' => null
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
    * name  VPN连接名称
    * vgwId  VPN网关ID
    * vgwIp  VGW IP
    * style  连接模式 允许范围[policy, static, bgp] policy: 策略模式 static: 静态路由模式 bgp: bgp路由模式
    * cgwId  对端网关ID
    * peerSubnets  对端子网
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * enableNqa  开启NQA检测
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    * haRole  连接的HA角色
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'vgwId' => 'vgw_id',
            'vgwIp' => 'vgw_ip',
            'style' => 'style',
            'cgwId' => 'cgw_id',
            'peerSubnets' => 'peer_subnets',
            'tunnelLocalAddress' => 'tunnel_local_address',
            'tunnelPeerAddress' => 'tunnel_peer_address',
            'enableNqa' => 'enable_nqa',
            'psk' => 'psk',
            'policyRules' => 'policy_rules',
            'ikepolicy' => 'ikepolicy',
            'ipsecpolicy' => 'ipsecpolicy',
            'haRole' => 'ha_role',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  VPN连接名称
    * vgwId  VPN网关ID
    * vgwIp  VGW IP
    * style  连接模式 允许范围[policy, static, bgp] policy: 策略模式 static: 静态路由模式 bgp: bgp路由模式
    * cgwId  对端网关ID
    * peerSubnets  对端子网
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * enableNqa  开启NQA检测
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    * haRole  连接的HA角色
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'vgwId' => 'setVgwId',
            'vgwIp' => 'setVgwIp',
            'style' => 'setStyle',
            'cgwId' => 'setCgwId',
            'peerSubnets' => 'setPeerSubnets',
            'tunnelLocalAddress' => 'setTunnelLocalAddress',
            'tunnelPeerAddress' => 'setTunnelPeerAddress',
            'enableNqa' => 'setEnableNqa',
            'psk' => 'setPsk',
            'policyRules' => 'setPolicyRules',
            'ikepolicy' => 'setIkepolicy',
            'ipsecpolicy' => 'setIpsecpolicy',
            'haRole' => 'setHaRole',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  VPN连接名称
    * vgwId  VPN网关ID
    * vgwIp  VGW IP
    * style  连接模式 允许范围[policy, static, bgp] policy: 策略模式 static: 静态路由模式 bgp: bgp路由模式
    * cgwId  对端网关ID
    * peerSubnets  对端子网
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * enableNqa  开启NQA检测
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    * haRole  连接的HA角色
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'vgwId' => 'getVgwId',
            'vgwIp' => 'getVgwIp',
            'style' => 'getStyle',
            'cgwId' => 'getCgwId',
            'peerSubnets' => 'getPeerSubnets',
            'tunnelLocalAddress' => 'getTunnelLocalAddress',
            'tunnelPeerAddress' => 'getTunnelPeerAddress',
            'enableNqa' => 'getEnableNqa',
            'psk' => 'getPsk',
            'policyRules' => 'getPolicyRules',
            'ikepolicy' => 'getIkepolicy',
            'ipsecpolicy' => 'getIpsecpolicy',
            'haRole' => 'getHaRole',
            'tags' => 'getTags'
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
    const STYLE_POLICY = 'policy';
    const STYLE__STATIC = 'static';
    const STYLE_BGP = 'bgp';
    const HA_ROLE_MASTER = 'master';
    const HA_ROLE_SLAVE = 'slave';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_POLICY,
            self::STYLE__STATIC,
            self::STYLE_BGP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHaRoleAllowableValues()
    {
        return [
            self::HA_ROLE_MASTER,
            self::HA_ROLE_SLAVE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['vgwIp'] = isset($data['vgwIp']) ? $data['vgwIp'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['cgwId'] = isset($data['cgwId']) ? $data['cgwId'] : null;
        $this->container['peerSubnets'] = isset($data['peerSubnets']) ? $data['peerSubnets'] : null;
        $this->container['tunnelLocalAddress'] = isset($data['tunnelLocalAddress']) ? $data['tunnelLocalAddress'] : null;
        $this->container['tunnelPeerAddress'] = isset($data['tunnelPeerAddress']) ? $data['tunnelPeerAddress'] : null;
        $this->container['enableNqa'] = isset($data['enableNqa']) ? $data['enableNqa'] : null;
        $this->container['psk'] = isset($data['psk']) ? $data['psk'] : null;
        $this->container['policyRules'] = isset($data['policyRules']) ? $data['policyRules'] : null;
        $this->container['ikepolicy'] = isset($data['ikepolicy']) ? $data['ikepolicy'] : null;
        $this->container['ipsecpolicy'] = isset($data['ipsecpolicy']) ? $data['ipsecpolicy'] : null;
        $this->container['haRole'] = isset($data['haRole']) ? $data['haRole'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
            if (!is_null($this->container['name']) && !preg_match("/[一-龥a-zA-Z0-9-_.]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥a-zA-Z0-9-_.]+/.";
            }
        if ($this->container['vgwId'] === null) {
            $invalidProperties[] = "'vgwId' can't be null";
        }
            if ((mb_strlen($this->container['vgwId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vgwId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['vgwIp'] === null) {
            $invalidProperties[] = "'vgwIp' can't be null";
        }
            if ((mb_strlen($this->container['vgwIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'vgwIp', the character length must be smaller than or equal to 64.";
            }
            $allowedValues = $this->getStyleAllowableValues();
                if (!is_null($this->container['style']) && !in_array($this->container['style'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'style', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['cgwId'] === null) {
            $invalidProperties[] = "'cgwId' can't be null";
        }
            if ((mb_strlen($this->container['cgwId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cgwId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['psk']) && (mb_strlen($this->container['psk']) > 128)) {
                $invalidProperties[] = "invalid value for 'psk', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['psk']) && (mb_strlen($this->container['psk']) < 8)) {
                $invalidProperties[] = "invalid value for 'psk', the character length must be bigger than or equal to 8.";
            }
            $allowedValues = $this->getHaRoleAllowableValues();
                if (!is_null($this->container['haRole']) && !in_array($this->container['haRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'haRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  VPN连接名称
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
    * @param string|null $name VPN连接名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vgwId
    *  VPN网关ID
    *
    * @return string
    */
    public function getVgwId()
    {
        return $this->container['vgwId'];
    }

    /**
    * Sets vgwId
    *
    * @param string $vgwId VPN网关ID
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
        return $this;
    }

    /**
    * Gets vgwIp
    *  VGW IP
    *
    * @return string
    */
    public function getVgwIp()
    {
        return $this->container['vgwIp'];
    }

    /**
    * Sets vgwIp
    *
    * @param string $vgwIp VGW IP
    *
    * @return $this
    */
    public function setVgwIp($vgwIp)
    {
        $this->container['vgwIp'] = $vgwIp;
        return $this;
    }

    /**
    * Gets style
    *  连接模式 允许范围[policy, static, bgp] policy: 策略模式 static: 静态路由模式 bgp: bgp路由模式
    *
    * @return string|null
    */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
    * Sets style
    *
    * @param string|null $style 连接模式 允许范围[policy, static, bgp] policy: 策略模式 static: 静态路由模式 bgp: bgp路由模式
    *
    * @return $this
    */
    public function setStyle($style)
    {
        $this->container['style'] = $style;
        return $this;
    }

    /**
    * Gets cgwId
    *  对端网关ID
    *
    * @return string
    */
    public function getCgwId()
    {
        return $this->container['cgwId'];
    }

    /**
    * Sets cgwId
    *
    * @param string $cgwId 对端网关ID
    *
    * @return $this
    */
    public function setCgwId($cgwId)
    {
        $this->container['cgwId'] = $cgwId;
        return $this;
    }

    /**
    * Gets peerSubnets
    *  对端子网
    *
    * @return string[]|null
    */
    public function getPeerSubnets()
    {
        return $this->container['peerSubnets'];
    }

    /**
    * Sets peerSubnets
    *
    * @param string[]|null $peerSubnets 对端子网
    *
    * @return $this
    */
    public function setPeerSubnets($peerSubnets)
    {
        $this->container['peerSubnets'] = $peerSubnets;
        return $this;
    }

    /**
    * Gets tunnelLocalAddress
    *  本端隧道口地址
    *
    * @return string|null
    */
    public function getTunnelLocalAddress()
    {
        return $this->container['tunnelLocalAddress'];
    }

    /**
    * Sets tunnelLocalAddress
    *
    * @param string|null $tunnelLocalAddress 本端隧道口地址
    *
    * @return $this
    */
    public function setTunnelLocalAddress($tunnelLocalAddress)
    {
        $this->container['tunnelLocalAddress'] = $tunnelLocalAddress;
        return $this;
    }

    /**
    * Gets tunnelPeerAddress
    *  对端隧道口地址
    *
    * @return string|null
    */
    public function getTunnelPeerAddress()
    {
        return $this->container['tunnelPeerAddress'];
    }

    /**
    * Sets tunnelPeerAddress
    *
    * @param string|null $tunnelPeerAddress 对端隧道口地址
    *
    * @return $this
    */
    public function setTunnelPeerAddress($tunnelPeerAddress)
    {
        $this->container['tunnelPeerAddress'] = $tunnelPeerAddress;
        return $this;
    }

    /**
    * Gets enableNqa
    *  开启NQA检测
    *
    * @return bool|null
    */
    public function getEnableNqa()
    {
        return $this->container['enableNqa'];
    }

    /**
    * Sets enableNqa
    *
    * @param bool|null $enableNqa 开启NQA检测
    *
    * @return $this
    */
    public function setEnableNqa($enableNqa)
    {
        $this->container['enableNqa'] = $enableNqa;
        return $this;
    }

    /**
    * Gets psk
    *  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    *
    * @return string|null
    */
    public function getPsk()
    {
        return $this->container['psk'];
    }

    /**
    * Sets psk
    *
    * @param string|null $psk 预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    *
    * @return $this
    */
    public function setPsk($psk)
    {
        $this->container['psk'] = $psk;
        return $this;
    }

    /**
    * Gets policyRules
    *  策略模式的策略规则组
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\PolicyRule[]|null
    */
    public function getPolicyRules()
    {
        return $this->container['policyRules'];
    }

    /**
    * Sets policyRules
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\PolicyRule[]|null $policyRules 策略模式的策略规则组
    *
    * @return $this
    */
    public function setPolicyRules($policyRules)
    {
        $this->container['policyRules'] = $policyRules;
        return $this;
    }

    /**
    * Gets ikepolicy
    *  ikepolicy
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\IkePolicy|null
    */
    public function getIkepolicy()
    {
        return $this->container['ikepolicy'];
    }

    /**
    * Sets ikepolicy
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\IkePolicy|null $ikepolicy ikepolicy
    *
    * @return $this
    */
    public function setIkepolicy($ikepolicy)
    {
        $this->container['ikepolicy'] = $ikepolicy;
        return $this;
    }

    /**
    * Gets ipsecpolicy
    *  ipsecpolicy
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\IpsecPolicy|null
    */
    public function getIpsecpolicy()
    {
        return $this->container['ipsecpolicy'];
    }

    /**
    * Sets ipsecpolicy
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\IpsecPolicy|null $ipsecpolicy ipsecpolicy
    *
    * @return $this
    */
    public function setIpsecpolicy($ipsecpolicy)
    {
        $this->container['ipsecpolicy'] = $ipsecpolicy;
        return $this;
    }

    /**
    * Gets haRole
    *  连接的HA角色
    *
    * @return string|null
    */
    public function getHaRole()
    {
        return $this->container['haRole'];
    }

    /**
    * Sets haRole
    *
    * @param string|null $haRole 连接的HA角色
    *
    * @return $this
    */
    public function setHaRole($haRole)
    {
        $this->container['haRole'] = $haRole;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

