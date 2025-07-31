<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowContainerNetworkInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowContainerNetworkInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  网络模型
    * vpc  VPC Id
    * subnet  网络ID
    * securityGroup  安全组
    * ipv4Cidr  IPv4 服务网段
    * cidrs  容器网络网段
    * kubeProxyMode  服务转发模式:    - iptables   - ipvs
    * isSupportEgress  是否支持配置egress规则: true、false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'string',
            'vpc' => 'string',
            'subnet' => 'string',
            'securityGroup' => 'string',
            'ipv4Cidr' => 'string',
            'cidrs' => 'string',
            'kubeProxyMode' => 'string',
            'isSupportEgress' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  网络模型
    * vpc  VPC Id
    * subnet  网络ID
    * securityGroup  安全组
    * ipv4Cidr  IPv4 服务网段
    * cidrs  容器网络网段
    * kubeProxyMode  服务转发模式:    - iptables   - ipvs
    * isSupportEgress  是否支持配置egress规则: true、false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'vpc' => null,
        'subnet' => null,
        'securityGroup' => null,
        'ipv4Cidr' => null,
        'cidrs' => null,
        'kubeProxyMode' => null,
        'isSupportEgress' => null
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
    * mode  网络模型
    * vpc  VPC Id
    * subnet  网络ID
    * securityGroup  安全组
    * ipv4Cidr  IPv4 服务网段
    * cidrs  容器网络网段
    * kubeProxyMode  服务转发模式:    - iptables   - ipvs
    * isSupportEgress  是否支持配置egress规则: true、false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'vpc' => 'vpc',
            'subnet' => 'subnet',
            'securityGroup' => 'security_group',
            'ipv4Cidr' => 'ipv4_cidr',
            'cidrs' => 'cidrs',
            'kubeProxyMode' => 'kube_proxy_mode',
            'isSupportEgress' => 'is_support_egress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  网络模型
    * vpc  VPC Id
    * subnet  网络ID
    * securityGroup  安全组
    * ipv4Cidr  IPv4 服务网段
    * cidrs  容器网络网段
    * kubeProxyMode  服务转发模式:    - iptables   - ipvs
    * isSupportEgress  是否支持配置egress规则: true、false
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'vpc' => 'setVpc',
            'subnet' => 'setSubnet',
            'securityGroup' => 'setSecurityGroup',
            'ipv4Cidr' => 'setIpv4Cidr',
            'cidrs' => 'setCidrs',
            'kubeProxyMode' => 'setKubeProxyMode',
            'isSupportEgress' => 'setIsSupportEgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  网络模型
    * vpc  VPC Id
    * subnet  网络ID
    * securityGroup  安全组
    * ipv4Cidr  IPv4 服务网段
    * cidrs  容器网络网段
    * kubeProxyMode  服务转发模式:    - iptables   - ipvs
    * isSupportEgress  是否支持配置egress规则: true、false
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'vpc' => 'getVpc',
            'subnet' => 'getSubnet',
            'securityGroup' => 'getSecurityGroup',
            'ipv4Cidr' => 'getIpv4Cidr',
            'cidrs' => 'getCidrs',
            'kubeProxyMode' => 'getKubeProxyMode',
            'isSupportEgress' => 'getIsSupportEgress'
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['subnet'] = isset($data['subnet']) ? $data['subnet'] : null;
        $this->container['securityGroup'] = isset($data['securityGroup']) ? $data['securityGroup'] : null;
        $this->container['ipv4Cidr'] = isset($data['ipv4Cidr']) ? $data['ipv4Cidr'] : null;
        $this->container['cidrs'] = isset($data['cidrs']) ? $data['cidrs'] : null;
        $this->container['kubeProxyMode'] = isset($data['kubeProxyMode']) ? $data['kubeProxyMode'] : null;
        $this->container['isSupportEgress'] = isset($data['isSupportEgress']) ? $data['isSupportEgress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 256)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpc']) && (mb_strlen($this->container['vpc']) > 256)) {
                $invalidProperties[] = "invalid value for 'vpc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vpc']) && (mb_strlen($this->container['vpc']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subnet']) && (mb_strlen($this->container['subnet']) > 128)) {
                $invalidProperties[] = "invalid value for 'subnet', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['subnet']) && (mb_strlen($this->container['subnet']) < 0)) {
                $invalidProperties[] = "invalid value for 'subnet', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityGroup']) && (mb_strlen($this->container['securityGroup']) > 256)) {
                $invalidProperties[] = "invalid value for 'securityGroup', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['securityGroup']) && (mb_strlen($this->container['securityGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroup', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipv4Cidr']) && (mb_strlen($this->container['ipv4Cidr']) > 256)) {
                $invalidProperties[] = "invalid value for 'ipv4Cidr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ipv4Cidr']) && (mb_strlen($this->container['ipv4Cidr']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipv4Cidr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cidrs']) && (mb_strlen($this->container['cidrs']) > 256)) {
                $invalidProperties[] = "invalid value for 'cidrs', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cidrs']) && (mb_strlen($this->container['cidrs']) < 0)) {
                $invalidProperties[] = "invalid value for 'cidrs', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['kubeProxyMode']) && (mb_strlen($this->container['kubeProxyMode']) > 12)) {
                $invalidProperties[] = "invalid value for 'kubeProxyMode', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['kubeProxyMode']) && (mb_strlen($this->container['kubeProxyMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'kubeProxyMode', the character length must be bigger than or equal to 0.";
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
    * Gets mode
    *  网络模型
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 网络模型
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets vpc
    *  VPC Id
    *
    * @return string|null
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param string|null $vpc VPC Id
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets subnet
    *  网络ID
    *
    * @return string|null
    */
    public function getSubnet()
    {
        return $this->container['subnet'];
    }

    /**
    * Sets subnet
    *
    * @param string|null $subnet 网络ID
    *
    * @return $this
    */
    public function setSubnet($subnet)
    {
        $this->container['subnet'] = $subnet;
        return $this;
    }

    /**
    * Gets securityGroup
    *  安全组
    *
    * @return string|null
    */
    public function getSecurityGroup()
    {
        return $this->container['securityGroup'];
    }

    /**
    * Sets securityGroup
    *
    * @param string|null $securityGroup 安全组
    *
    * @return $this
    */
    public function setSecurityGroup($securityGroup)
    {
        $this->container['securityGroup'] = $securityGroup;
        return $this;
    }

    /**
    * Gets ipv4Cidr
    *  IPv4 服务网段
    *
    * @return string|null
    */
    public function getIpv4Cidr()
    {
        return $this->container['ipv4Cidr'];
    }

    /**
    * Sets ipv4Cidr
    *
    * @param string|null $ipv4Cidr IPv4 服务网段
    *
    * @return $this
    */
    public function setIpv4Cidr($ipv4Cidr)
    {
        $this->container['ipv4Cidr'] = $ipv4Cidr;
        return $this;
    }

    /**
    * Gets cidrs
    *  容器网络网段
    *
    * @return string|null
    */
    public function getCidrs()
    {
        return $this->container['cidrs'];
    }

    /**
    * Sets cidrs
    *
    * @param string|null $cidrs 容器网络网段
    *
    * @return $this
    */
    public function setCidrs($cidrs)
    {
        $this->container['cidrs'] = $cidrs;
        return $this;
    }

    /**
    * Gets kubeProxyMode
    *  服务转发模式:    - iptables   - ipvs
    *
    * @return string|null
    */
    public function getKubeProxyMode()
    {
        return $this->container['kubeProxyMode'];
    }

    /**
    * Sets kubeProxyMode
    *
    * @param string|null $kubeProxyMode 服务转发模式:    - iptables   - ipvs
    *
    * @return $this
    */
    public function setKubeProxyMode($kubeProxyMode)
    {
        $this->container['kubeProxyMode'] = $kubeProxyMode;
        return $this;
    }

    /**
    * Gets isSupportEgress
    *  是否支持配置egress规则: true、false
    *
    * @return bool|null
    */
    public function getIsSupportEgress()
    {
        return $this->container['isSupportEgress'];
    }

    /**
    * Sets isSupportEgress
    *
    * @param bool|null $isSupportEgress 是否支持配置egress规则: true、false
    *
    * @return $this
    */
    public function setIsSupportEgress($isSupportEgress)
    {
        $this->container['isSupportEgress'] = $isSupportEgress;
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

