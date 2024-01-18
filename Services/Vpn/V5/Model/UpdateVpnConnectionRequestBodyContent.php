<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateVpnConnectionRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateVpnConnectionRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  VPN连接名称
    * cgwId  对端网关ID
    * peerSubnets  对端网段
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'cgwId' => 'string',
            'peerSubnets' => 'string[]',
            'tunnelLocalAddress' => 'string',
            'tunnelPeerAddress' => 'string',
            'psk' => 'string',
            'policyRules' => '\HuaweiCloud\SDK\Vpn\V5\Model\PolicyRule[]',
            'ikepolicy' => '\HuaweiCloud\SDK\Vpn\V5\Model\UpdateIkePolicy',
            'ipsecpolicy' => '\HuaweiCloud\SDK\Vpn\V5\Model\UpdateIpsecPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  VPN连接名称
    * cgwId  对端网关ID
    * peerSubnets  对端网段
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'cgwId' => null,
        'peerSubnets' => null,
        'tunnelLocalAddress' => null,
        'tunnelPeerAddress' => null,
        'psk' => null,
        'policyRules' => null,
        'ikepolicy' => null,
        'ipsecpolicy' => null
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
    * cgwId  对端网关ID
    * peerSubnets  对端网段
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'cgwId' => 'cgw_id',
            'peerSubnets' => 'peer_subnets',
            'tunnelLocalAddress' => 'tunnel_local_address',
            'tunnelPeerAddress' => 'tunnel_peer_address',
            'psk' => 'psk',
            'policyRules' => 'policy_rules',
            'ikepolicy' => 'ikepolicy',
            'ipsecpolicy' => 'ipsecpolicy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  VPN连接名称
    * cgwId  对端网关ID
    * peerSubnets  对端网段
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'cgwId' => 'setCgwId',
            'peerSubnets' => 'setPeerSubnets',
            'tunnelLocalAddress' => 'setTunnelLocalAddress',
            'tunnelPeerAddress' => 'setTunnelPeerAddress',
            'psk' => 'setPsk',
            'policyRules' => 'setPolicyRules',
            'ikepolicy' => 'setIkepolicy',
            'ipsecpolicy' => 'setIpsecpolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  VPN连接名称
    * cgwId  对端网关ID
    * peerSubnets  对端网段
    * tunnelLocalAddress  本端隧道口地址
    * tunnelPeerAddress  对端隧道口地址
    * psk  预共享密钥，只能包含大写字母、小写字母、数字和特殊字符(~!@#$%^()-_+={ },./:;)且至少包含四种字符的三种
    * policyRules  策略模式的策略规则组
    * ikepolicy  ikepolicy
    * ipsecpolicy  ipsecpolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'cgwId' => 'getCgwId',
            'peerSubnets' => 'getPeerSubnets',
            'tunnelLocalAddress' => 'getTunnelLocalAddress',
            'tunnelPeerAddress' => 'getTunnelPeerAddress',
            'psk' => 'getPsk',
            'policyRules' => 'getPolicyRules',
            'ikepolicy' => 'getIkepolicy',
            'ipsecpolicy' => 'getIpsecpolicy'
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
        $this->container['cgwId'] = isset($data['cgwId']) ? $data['cgwId'] : null;
        $this->container['peerSubnets'] = isset($data['peerSubnets']) ? $data['peerSubnets'] : null;
        $this->container['tunnelLocalAddress'] = isset($data['tunnelLocalAddress']) ? $data['tunnelLocalAddress'] : null;
        $this->container['tunnelPeerAddress'] = isset($data['tunnelPeerAddress']) ? $data['tunnelPeerAddress'] : null;
        $this->container['psk'] = isset($data['psk']) ? $data['psk'] : null;
        $this->container['policyRules'] = isset($data['policyRules']) ? $data['policyRules'] : null;
        $this->container['ikepolicy'] = isset($data['ikepolicy']) ? $data['ikepolicy'] : null;
        $this->container['ipsecpolicy'] = isset($data['ipsecpolicy']) ? $data['ipsecpolicy'] : null;
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
            if (!is_null($this->container['name']) && !preg_match("/[一-龥a-zA-Z0-9-_.]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥a-zA-Z0-9-_.]+/.";
            }
            if (!is_null($this->container['cgwId']) && (mb_strlen($this->container['cgwId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cgwId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['psk']) && (mb_strlen($this->container['psk']) > 128)) {
                $invalidProperties[] = "invalid value for 'psk', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['psk']) && (mb_strlen($this->container['psk']) < 8)) {
                $invalidProperties[] = "invalid value for 'psk', the character length must be bigger than or equal to 8.";
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
    * Gets cgwId
    *  对端网关ID
    *
    * @return string|null
    */
    public function getCgwId()
    {
        return $this->container['cgwId'];
    }

    /**
    * Sets cgwId
    *
    * @param string|null $cgwId 对端网关ID
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
    *  对端网段
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
    * @param string[]|null $peerSubnets 对端网段
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
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\UpdateIkePolicy|null
    */
    public function getIkepolicy()
    {
        return $this->container['ikepolicy'];
    }

    /**
    * Sets ikepolicy
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\UpdateIkePolicy|null $ikepolicy ikepolicy
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
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\UpdateIpsecPolicy|null
    */
    public function getIpsecpolicy()
    {
        return $this->container['ipsecpolicy'];
    }

    /**
    * Sets ipsecpolicy
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\UpdateIpsecPolicy|null $ipsecpolicy ipsecpolicy
    *
    * @return $this
    */
    public function setIpsecpolicy($ipsecpolicy)
    {
        $this->container['ipsecpolicy'] = $ipsecpolicy;
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

