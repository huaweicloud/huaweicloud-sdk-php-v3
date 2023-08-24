<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FirewallUpdateRuleItemOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FirewallUpdateRuleItemOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：ACL规则唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL规则名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL规则描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * action  功能说明：ACL规则对流量执行的操作放通或拒绝 取值范围：allow放通；deny拒绝
    * protocol  功能说明：ACL规则协议 取值范围：支持tcp,udp,icmp,icmpv6或者协议号（0-255），any表示全部协议
    * ipVersion  功能说明：ACL规则的ip版本 取值范围：4, 表示ipv4；6, 表示ipv6
    * sourceIpAddress  功能说明：ACL规则源IP地址或者CIDR 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationIpAddress  功能说明：ACL规则目的IP地址或者CIDR 约束：destination_ip_address和destination_address_group_id不能同时设置
    * sourcePort  功能说明：ACL规则的源端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * destinationPort  功能说明：ACL规则的目的端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * sourceAddressGroupId  功能说明：ACL规则的源地址组ID 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationAddressGroupId  功能说明：ACL规则的目的地址组ID 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'action' => 'string',
            'protocol' => 'string',
            'ipVersion' => 'int',
            'sourceIpAddress' => 'string',
            'destinationIpAddress' => 'string',
            'sourcePort' => 'string',
            'destinationPort' => 'string',
            'sourceAddressGroupId' => 'string',
            'destinationAddressGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：ACL规则唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL规则名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL规则描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * action  功能说明：ACL规则对流量执行的操作放通或拒绝 取值范围：allow放通；deny拒绝
    * protocol  功能说明：ACL规则协议 取值范围：支持tcp,udp,icmp,icmpv6或者协议号（0-255），any表示全部协议
    * ipVersion  功能说明：ACL规则的ip版本 取值范围：4, 表示ipv4；6, 表示ipv6
    * sourceIpAddress  功能说明：ACL规则源IP地址或者CIDR 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationIpAddress  功能说明：ACL规则目的IP地址或者CIDR 约束：destination_ip_address和destination_address_group_id不能同时设置
    * sourcePort  功能说明：ACL规则的源端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * destinationPort  功能说明：ACL规则的目的端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * sourceAddressGroupId  功能说明：ACL规则的源地址组ID 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationAddressGroupId  功能说明：ACL规则的目的地址组ID 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'action' => null,
        'protocol' => null,
        'ipVersion' => 'int32',
        'sourceIpAddress' => null,
        'destinationIpAddress' => null,
        'sourcePort' => null,
        'destinationPort' => null,
        'sourceAddressGroupId' => null,
        'destinationAddressGroupId' => null
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
    * id  功能说明：ACL规则唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL规则名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL规则描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * action  功能说明：ACL规则对流量执行的操作放通或拒绝 取值范围：allow放通；deny拒绝
    * protocol  功能说明：ACL规则协议 取值范围：支持tcp,udp,icmp,icmpv6或者协议号（0-255），any表示全部协议
    * ipVersion  功能说明：ACL规则的ip版本 取值范围：4, 表示ipv4；6, 表示ipv6
    * sourceIpAddress  功能说明：ACL规则源IP地址或者CIDR 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationIpAddress  功能说明：ACL规则目的IP地址或者CIDR 约束：destination_ip_address和destination_address_group_id不能同时设置
    * sourcePort  功能说明：ACL规则的源端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * destinationPort  功能说明：ACL规则的目的端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * sourceAddressGroupId  功能说明：ACL规则的源地址组ID 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationAddressGroupId  功能说明：ACL规则的目的地址组ID 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'action' => 'action',
            'protocol' => 'protocol',
            'ipVersion' => 'ip_version',
            'sourceIpAddress' => 'source_ip_address',
            'destinationIpAddress' => 'destination_ip_address',
            'sourcePort' => 'source_port',
            'destinationPort' => 'destination_port',
            'sourceAddressGroupId' => 'source_address_group_id',
            'destinationAddressGroupId' => 'destination_address_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：ACL规则唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL规则名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL规则描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * action  功能说明：ACL规则对流量执行的操作放通或拒绝 取值范围：allow放通；deny拒绝
    * protocol  功能说明：ACL规则协议 取值范围：支持tcp,udp,icmp,icmpv6或者协议号（0-255），any表示全部协议
    * ipVersion  功能说明：ACL规则的ip版本 取值范围：4, 表示ipv4；6, 表示ipv6
    * sourceIpAddress  功能说明：ACL规则源IP地址或者CIDR 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationIpAddress  功能说明：ACL规则目的IP地址或者CIDR 约束：destination_ip_address和destination_address_group_id不能同时设置
    * sourcePort  功能说明：ACL规则的源端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * destinationPort  功能说明：ACL规则的目的端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * sourceAddressGroupId  功能说明：ACL规则的源地址组ID 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationAddressGroupId  功能说明：ACL规则的目的地址组ID 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'action' => 'setAction',
            'protocol' => 'setProtocol',
            'ipVersion' => 'setIpVersion',
            'sourceIpAddress' => 'setSourceIpAddress',
            'destinationIpAddress' => 'setDestinationIpAddress',
            'sourcePort' => 'setSourcePort',
            'destinationPort' => 'setDestinationPort',
            'sourceAddressGroupId' => 'setSourceAddressGroupId',
            'destinationAddressGroupId' => 'setDestinationAddressGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：ACL规则唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL规则名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL规则描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * action  功能说明：ACL规则对流量执行的操作放通或拒绝 取值范围：allow放通；deny拒绝
    * protocol  功能说明：ACL规则协议 取值范围：支持tcp,udp,icmp,icmpv6或者协议号（0-255），any表示全部协议
    * ipVersion  功能说明：ACL规则的ip版本 取值范围：4, 表示ipv4；6, 表示ipv6
    * sourceIpAddress  功能说明：ACL规则源IP地址或者CIDR 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationIpAddress  功能说明：ACL规则目的IP地址或者CIDR 约束：destination_ip_address和destination_address_group_id不能同时设置
    * sourcePort  功能说明：ACL规则的源端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * destinationPort  功能说明：ACL规则的目的端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    * sourceAddressGroupId  功能说明：ACL规则的源地址组ID 约束：source_ip_address和source_address_group_id不能同时设置
    * destinationAddressGroupId  功能说明：ACL规则的目的地址组ID 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'action' => 'getAction',
            'protocol' => 'getProtocol',
            'ipVersion' => 'getIpVersion',
            'sourceIpAddress' => 'getSourceIpAddress',
            'destinationIpAddress' => 'getDestinationIpAddress',
            'sourcePort' => 'getSourcePort',
            'destinationPort' => 'getDestinationPort',
            'sourceAddressGroupId' => 'getSourceAddressGroupId',
            'destinationAddressGroupId' => 'getDestinationAddressGroupId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['sourceIpAddress'] = isset($data['sourceIpAddress']) ? $data['sourceIpAddress'] : null;
        $this->container['destinationIpAddress'] = isset($data['destinationIpAddress']) ? $data['destinationIpAddress'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['destinationPort'] = isset($data['destinationPort']) ? $data['destinationPort'] : null;
        $this->container['sourceAddressGroupId'] = isset($data['sourceAddressGroupId']) ? $data['sourceAddressGroupId'] : null;
        $this->container['destinationAddressGroupId'] = isset($data['destinationAddressGroupId']) ? $data['destinationAddressGroupId'] : null;
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
    *  功能说明：ACL规则唯一标识 取值范围：合法UUID的字符串
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
    * @param string $id 功能说明：ACL规则唯一标识 取值范围：合法UUID的字符串
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  功能说明：ACL规则名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string|null $name 功能说明：ACL规则名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  功能说明：ACL规则描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
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
    * @param string|null $description 功能说明：ACL规则描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets action
    *  功能说明：ACL规则对流量执行的操作放通或拒绝 取值范围：allow放通；deny拒绝
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
    * @param string|null $action 功能说明：ACL规则对流量执行的操作放通或拒绝 取值范围：allow放通；deny拒绝
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets protocol
    *  功能说明：ACL规则协议 取值范围：支持tcp,udp,icmp,icmpv6或者协议号（0-255），any表示全部协议
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
    * @param string|null $protocol 功能说明：ACL规则协议 取值范围：支持tcp,udp,icmp,icmpv6或者协议号（0-255），any表示全部协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：ACL规则的ip版本 取值范围：4, 表示ipv4；6, 表示ipv6
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion 功能说明：ACL规则的ip版本 取值范围：4, 表示ipv4；6, 表示ipv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets sourceIpAddress
    *  功能说明：ACL规则源IP地址或者CIDR 约束：source_ip_address和source_address_group_id不能同时设置
    *
    * @return string|null
    */
    public function getSourceIpAddress()
    {
        return $this->container['sourceIpAddress'];
    }

    /**
    * Sets sourceIpAddress
    *
    * @param string|null $sourceIpAddress 功能说明：ACL规则源IP地址或者CIDR 约束：source_ip_address和source_address_group_id不能同时设置
    *
    * @return $this
    */
    public function setSourceIpAddress($sourceIpAddress)
    {
        $this->container['sourceIpAddress'] = $sourceIpAddress;
        return $this;
    }

    /**
    * Gets destinationIpAddress
    *  功能说明：ACL规则目的IP地址或者CIDR 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @return string|null
    */
    public function getDestinationIpAddress()
    {
        return $this->container['destinationIpAddress'];
    }

    /**
    * Sets destinationIpAddress
    *
    * @param string|null $destinationIpAddress 功能说明：ACL规则目的IP地址或者CIDR 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @return $this
    */
    public function setDestinationIpAddress($destinationIpAddress)
    {
        $this->container['destinationIpAddress'] = $destinationIpAddress;
        return $this;
    }

    /**
    * Gets sourcePort
    *  功能说明：ACL规则的源端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    *
    * @return string|null
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param string|null $sourcePort 功能说明：ACL规则的源端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets destinationPort
    *  功能说明：ACL规则的目的端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    *
    * @return string|null
    */
    public function getDestinationPort()
    {
        return $this->container['destinationPort'];
    }

    /**
    * Sets destinationPort
    *
    * @param string|null $destinationPort 功能说明：ACL规则的目的端口 取值范围：支持端口号，一段端口范围，多个以逗号分隔 约束：支持的端口组的数量默认为20
    *
    * @return $this
    */
    public function setDestinationPort($destinationPort)
    {
        $this->container['destinationPort'] = $destinationPort;
        return $this;
    }

    /**
    * Gets sourceAddressGroupId
    *  功能说明：ACL规则的源地址组ID 约束：source_ip_address和source_address_group_id不能同时设置
    *
    * @return string|null
    */
    public function getSourceAddressGroupId()
    {
        return $this->container['sourceAddressGroupId'];
    }

    /**
    * Sets sourceAddressGroupId
    *
    * @param string|null $sourceAddressGroupId 功能说明：ACL规则的源地址组ID 约束：source_ip_address和source_address_group_id不能同时设置
    *
    * @return $this
    */
    public function setSourceAddressGroupId($sourceAddressGroupId)
    {
        $this->container['sourceAddressGroupId'] = $sourceAddressGroupId;
        return $this;
    }

    /**
    * Gets destinationAddressGroupId
    *  功能说明：ACL规则的目的地址组ID 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @return string|null
    */
    public function getDestinationAddressGroupId()
    {
        return $this->container['destinationAddressGroupId'];
    }

    /**
    * Sets destinationAddressGroupId
    *
    * @param string|null $destinationAddressGroupId 功能说明：ACL规则的目的地址组ID 约束：destination_ip_address和destination_address_group_id不能同时设置
    *
    * @return $this
    */
    public function setDestinationAddressGroupId($destinationAddressGroupId)
    {
        $this->container['destinationAddressGroupId'] = $destinationAddressGroupId;
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

