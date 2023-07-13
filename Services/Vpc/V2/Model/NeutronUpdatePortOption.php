<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronUpdatePortOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronUpdatePortOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：网络的名称 取值范围：0-255个字符
    * securityGroups  功能说明：扩展属性：安全组的UUID 例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 约束：不支持更新为空
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，allow_address_pair参见“allow_address_pair对象”表 约束：  - IP地址不允许为 “0.0.0.0”  - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组  - 硬件SDN环境不支持ip_address属性配置为CIDR格式  - 为虚拟IP配置后端ECS场景，allowed_address_pairs中配置的IP地址，必须为ECS网卡已有的IP地址，否则可能会导致虚拟IP通信异常。
    * extraDhcpOpts  扩展属性：DHCP的扩展Option
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效，默认为true
    * bindingvnicType  绑定的vNIC类型  - normal: 软交换
    * bindingprofile  功能说明：扩展属性，提供用户设置自定义信息  - internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  - disable_security_groups字段，布尔类型，普通租户可见。默认为false，高性能通信场景下，允许指定为true。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false。 举例：{\"disable_security_groups\"：true }，当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'securityGroups' => 'string[]',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\Vpc\V2\Model\AllowedAddressPair[]',
            'extraDhcpOpts' => '\HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOpt[]',
            'portSecurityEnabled' => 'bool',
            'bindingvnicType' => 'string',
            'bindingprofile' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：网络的名称 取值范围：0-255个字符
    * securityGroups  功能说明：扩展属性：安全组的UUID 例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 约束：不支持更新为空
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，allow_address_pair参见“allow_address_pair对象”表 约束：  - IP地址不允许为 “0.0.0.0”  - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组  - 硬件SDN环境不支持ip_address属性配置为CIDR格式  - 为虚拟IP配置后端ECS场景，allowed_address_pairs中配置的IP地址，必须为ECS网卡已有的IP地址，否则可能会导致虚拟IP通信异常。
    * extraDhcpOpts  扩展属性：DHCP的扩展Option
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效，默认为true
    * bindingvnicType  绑定的vNIC类型  - normal: 软交换
    * bindingprofile  功能说明：扩展属性，提供用户设置自定义信息  - internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  - disable_security_groups字段，布尔类型，普通租户可见。默认为false，高性能通信场景下，允许指定为true。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false。 举例：{\"disable_security_groups\"：true }，当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'securityGroups' => null,
        'allowedAddressPairs' => null,
        'extraDhcpOpts' => null,
        'portSecurityEnabled' => null,
        'bindingvnicType' => null,
        'bindingprofile' => null
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
    * name  功能说明：网络的名称 取值范围：0-255个字符
    * securityGroups  功能说明：扩展属性：安全组的UUID 例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 约束：不支持更新为空
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，allow_address_pair参见“allow_address_pair对象”表 约束：  - IP地址不允许为 “0.0.0.0”  - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组  - 硬件SDN环境不支持ip_address属性配置为CIDR格式  - 为虚拟IP配置后端ECS场景，allowed_address_pairs中配置的IP地址，必须为ECS网卡已有的IP地址，否则可能会导致虚拟IP通信异常。
    * extraDhcpOpts  扩展属性：DHCP的扩展Option
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效，默认为true
    * bindingvnicType  绑定的vNIC类型  - normal: 软交换
    * bindingprofile  功能说明：扩展属性，提供用户设置自定义信息  - internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  - disable_security_groups字段，布尔类型，普通租户可见。默认为false，高性能通信场景下，允许指定为true。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false。 举例：{\"disable_security_groups\"：true }，当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'securityGroups' => 'security_groups',
            'allowedAddressPairs' => 'allowed_address_pairs',
            'extraDhcpOpts' => 'extra_dhcp_opts',
            'portSecurityEnabled' => 'port_security_enabled',
            'bindingvnicType' => 'binding:vnic_type',
            'bindingprofile' => 'binding:profile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：网络的名称 取值范围：0-255个字符
    * securityGroups  功能说明：扩展属性：安全组的UUID 例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 约束：不支持更新为空
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，allow_address_pair参见“allow_address_pair对象”表 约束：  - IP地址不允许为 “0.0.0.0”  - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组  - 硬件SDN环境不支持ip_address属性配置为CIDR格式  - 为虚拟IP配置后端ECS场景，allowed_address_pairs中配置的IP地址，必须为ECS网卡已有的IP地址，否则可能会导致虚拟IP通信异常。
    * extraDhcpOpts  扩展属性：DHCP的扩展Option
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效，默认为true
    * bindingvnicType  绑定的vNIC类型  - normal: 软交换
    * bindingprofile  功能说明：扩展属性，提供用户设置自定义信息  - internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  - disable_security_groups字段，布尔类型，普通租户可见。默认为false，高性能通信场景下，允许指定为true。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false。 举例：{\"disable_security_groups\"：true }，当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'securityGroups' => 'setSecurityGroups',
            'allowedAddressPairs' => 'setAllowedAddressPairs',
            'extraDhcpOpts' => 'setExtraDhcpOpts',
            'portSecurityEnabled' => 'setPortSecurityEnabled',
            'bindingvnicType' => 'setBindingvnicType',
            'bindingprofile' => 'setBindingprofile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：网络的名称 取值范围：0-255个字符
    * securityGroups  功能说明：扩展属性：安全组的UUID 例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 约束：不支持更新为空
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，allow_address_pair参见“allow_address_pair对象”表 约束：  - IP地址不允许为 “0.0.0.0”  - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组  - 硬件SDN环境不支持ip_address属性配置为CIDR格式  - 为虚拟IP配置后端ECS场景，allowed_address_pairs中配置的IP地址，必须为ECS网卡已有的IP地址，否则可能会导致虚拟IP通信异常。
    * extraDhcpOpts  扩展属性：DHCP的扩展Option
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效，默认为true
    * bindingvnicType  绑定的vNIC类型  - normal: 软交换
    * bindingprofile  功能说明：扩展属性，提供用户设置自定义信息  - internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  - disable_security_groups字段，布尔类型，普通租户可见。默认为false，高性能通信场景下，允许指定为true。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false。 举例：{\"disable_security_groups\"：true }，当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'securityGroups' => 'getSecurityGroups',
            'allowedAddressPairs' => 'getAllowedAddressPairs',
            'extraDhcpOpts' => 'getExtraDhcpOpts',
            'portSecurityEnabled' => 'getPortSecurityEnabled',
            'bindingvnicType' => 'getBindingvnicType',
            'bindingprofile' => 'getBindingprofile'
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
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
        $this->container['extraDhcpOpts'] = isset($data['extraDhcpOpts']) ? $data['extraDhcpOpts'] : null;
        $this->container['portSecurityEnabled'] = isset($data['portSecurityEnabled']) ? $data['portSecurityEnabled'] : true;
        $this->container['bindingvnicType'] = isset($data['bindingvnicType']) ? $data['bindingvnicType'] : null;
        $this->container['bindingprofile'] = isset($data['bindingprofile']) ? $data['bindingprofile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    *  功能说明：网络的名称 取值范围：0-255个字符
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
    * @param string|null $name 功能说明：网络的名称 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets securityGroups
    *  功能说明：扩展属性：安全组的UUID 例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 约束：不支持更新为空
    *
    * @return string[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param string[]|null $securityGroups 功能说明：扩展属性：安全组的UUID 例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 约束：不支持更新为空
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  功能说明：扩展属性：IP/Mac对列表，allow_address_pair参见“allow_address_pair对象”表 约束：  - IP地址不允许为 “0.0.0.0”  - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组  - 硬件SDN环境不支持ip_address属性配置为CIDR格式  - 为虚拟IP配置后端ECS场景，allowed_address_pairs中配置的IP地址，必须为ECS网卡已有的IP地址，否则可能会导致虚拟IP通信异常。
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\AllowedAddressPair[]|null
    */
    public function getAllowedAddressPairs()
    {
        return $this->container['allowedAddressPairs'];
    }

    /**
    * Sets allowedAddressPairs
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\AllowedAddressPair[]|null $allowedAddressPairs 功能说明：扩展属性：IP/Mac对列表，allow_address_pair参见“allow_address_pair对象”表 约束：  - IP地址不允许为 “0.0.0.0”  - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组  - 硬件SDN环境不支持ip_address属性配置为CIDR格式  - 为虚拟IP配置后端ECS场景，allowed_address_pairs中配置的IP地址，必须为ECS网卡已有的IP地址，否则可能会导致虚拟IP通信异常。
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
        return $this;
    }

    /**
    * Gets extraDhcpOpts
    *  扩展属性：DHCP的扩展Option
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOpt[]|null
    */
    public function getExtraDhcpOpts()
    {
        return $this->container['extraDhcpOpts'];
    }

    /**
    * Sets extraDhcpOpts
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOpt[]|null $extraDhcpOpts 扩展属性：DHCP的扩展Option
    *
    * @return $this
    */
    public function setExtraDhcpOpts($extraDhcpOpts)
    {
        $this->container['extraDhcpOpts'] = $extraDhcpOpts;
        return $this;
    }

    /**
    * Gets portSecurityEnabled
    *  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效，默认为true
    *
    * @return bool|null
    */
    public function getPortSecurityEnabled()
    {
        return $this->container['portSecurityEnabled'];
    }

    /**
    * Sets portSecurityEnabled
    *
    * @param bool|null $portSecurityEnabled 功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效，默认为true
    *
    * @return $this
    */
    public function setPortSecurityEnabled($portSecurityEnabled)
    {
        $this->container['portSecurityEnabled'] = $portSecurityEnabled;
        return $this;
    }

    /**
    * Gets bindingvnicType
    *  绑定的vNIC类型  - normal: 软交换
    *
    * @return string|null
    */
    public function getBindingvnicType()
    {
        return $this->container['bindingvnicType'];
    }

    /**
    * Sets bindingvnicType
    *
    * @param string|null $bindingvnicType 绑定的vNIC类型  - normal: 软交换
    *
    * @return $this
    */
    public function setBindingvnicType($bindingvnicType)
    {
        $this->container['bindingvnicType'] = $bindingvnicType;
        return $this;
    }

    /**
    * Gets bindingprofile
    *  功能说明：扩展属性，提供用户设置自定义信息  - internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  - disable_security_groups字段，布尔类型，普通租户可见。默认为false，高性能通信场景下，允许指定为true。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false。 举例：{\"disable_security_groups\"：true }，当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。
    *
    * @return map[string,object]|null
    */
    public function getBindingprofile()
    {
        return $this->container['bindingprofile'];
    }

    /**
    * Sets bindingprofile
    *
    * @param map[string,object]|null $bindingprofile 功能说明：扩展属性，提供用户设置自定义信息  - internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  - disable_security_groups字段，布尔类型，普通租户可见。默认为false，高性能通信场景下，允许指定为true。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false。 举例：{\"disable_security_groups\"：true }，当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。
    *
    * @return $this
    */
    public function setBindingprofile($bindingprofile)
    {
        $this->container['bindingprofile'] = $bindingprofile;
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

