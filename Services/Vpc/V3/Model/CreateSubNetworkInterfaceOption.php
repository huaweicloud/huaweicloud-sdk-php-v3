<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubNetworkInterfaceOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubNetworkInterfaceOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * virsubnetId  功能说明：虚拟子网ID 取值范围：标准UUID
    * vlanId  功能说明：辅助弹性网卡的VLAN ID 取值范围：1-4094 约束：同一个宿主网络接口下唯一
    * parentId  功能说明：宿主网络接口的ID 取值范围：标准UUID 约束：必须是实际存在的端口ID
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * ipv6Enable  功能说明：辅助弹性网卡是否启用ipv6地址 取值范围：true（开启)，false（关闭） 默认值：false
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址 取值范围：必须在虚拟子网的网段内，不填则随机在虚拟子网网段内随机分配
    * ipv6IpAddress  功能说明：辅助弹性网卡的IPv6地址 取值范围：不填则随机分配
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 取值范围：默认值为系统默认安全组
    * projectId  功能说明：辅助弹性网卡所属的项目ID 取值范围：标准UUID 约束：只有管理员有权限指定
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * instanceId  功能说明：辅助弹性网卡所属实例ID，例如RDS实例ID 约束： 1-64个字符
    * instanceType  功能说明：辅助弹性网卡所属实例类型，例如“RDS” 约束：1-64个字符
    * tags  辅助弹性网卡资源标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'virsubnetId' => 'string',
            'vlanId' => 'string',
            'parentId' => 'string',
            'description' => 'string',
            'ipv6Enable' => 'bool',
            'privateIpAddress' => 'string',
            'ipv6IpAddress' => 'string',
            'securityGroups' => 'string[]',
            'projectId' => 'string',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * virsubnetId  功能说明：虚拟子网ID 取值范围：标准UUID
    * vlanId  功能说明：辅助弹性网卡的VLAN ID 取值范围：1-4094 约束：同一个宿主网络接口下唯一
    * parentId  功能说明：宿主网络接口的ID 取值范围：标准UUID 约束：必须是实际存在的端口ID
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * ipv6Enable  功能说明：辅助弹性网卡是否启用ipv6地址 取值范围：true（开启)，false（关闭） 默认值：false
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址 取值范围：必须在虚拟子网的网段内，不填则随机在虚拟子网网段内随机分配
    * ipv6IpAddress  功能说明：辅助弹性网卡的IPv6地址 取值范围：不填则随机分配
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 取值范围：默认值为系统默认安全组
    * projectId  功能说明：辅助弹性网卡所属的项目ID 取值范围：标准UUID 约束：只有管理员有权限指定
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * instanceId  功能说明：辅助弹性网卡所属实例ID，例如RDS实例ID 约束： 1-64个字符
    * instanceType  功能说明：辅助弹性网卡所属实例类型，例如“RDS” 约束：1-64个字符
    * tags  辅助弹性网卡资源标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'virsubnetId' => null,
        'vlanId' => null,
        'parentId' => null,
        'description' => null,
        'ipv6Enable' => null,
        'privateIpAddress' => null,
        'ipv6IpAddress' => null,
        'securityGroups' => null,
        'projectId' => null,
        'allowedAddressPairs' => null,
        'instanceId' => null,
        'instanceType' => null,
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
    * virsubnetId  功能说明：虚拟子网ID 取值范围：标准UUID
    * vlanId  功能说明：辅助弹性网卡的VLAN ID 取值范围：1-4094 约束：同一个宿主网络接口下唯一
    * parentId  功能说明：宿主网络接口的ID 取值范围：标准UUID 约束：必须是实际存在的端口ID
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * ipv6Enable  功能说明：辅助弹性网卡是否启用ipv6地址 取值范围：true（开启)，false（关闭） 默认值：false
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址 取值范围：必须在虚拟子网的网段内，不填则随机在虚拟子网网段内随机分配
    * ipv6IpAddress  功能说明：辅助弹性网卡的IPv6地址 取值范围：不填则随机分配
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 取值范围：默认值为系统默认安全组
    * projectId  功能说明：辅助弹性网卡所属的项目ID 取值范围：标准UUID 约束：只有管理员有权限指定
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * instanceId  功能说明：辅助弹性网卡所属实例ID，例如RDS实例ID 约束： 1-64个字符
    * instanceType  功能说明：辅助弹性网卡所属实例类型，例如“RDS” 约束：1-64个字符
    * tags  辅助弹性网卡资源标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'virsubnetId' => 'virsubnet_id',
            'vlanId' => 'vlan_id',
            'parentId' => 'parent_id',
            'description' => 'description',
            'ipv6Enable' => 'ipv6_enable',
            'privateIpAddress' => 'private_ip_address',
            'ipv6IpAddress' => 'ipv6_ip_address',
            'securityGroups' => 'security_groups',
            'projectId' => 'project_id',
            'allowedAddressPairs' => 'allowed_address_pairs',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * virsubnetId  功能说明：虚拟子网ID 取值范围：标准UUID
    * vlanId  功能说明：辅助弹性网卡的VLAN ID 取值范围：1-4094 约束：同一个宿主网络接口下唯一
    * parentId  功能说明：宿主网络接口的ID 取值范围：标准UUID 约束：必须是实际存在的端口ID
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * ipv6Enable  功能说明：辅助弹性网卡是否启用ipv6地址 取值范围：true（开启)，false（关闭） 默认值：false
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址 取值范围：必须在虚拟子网的网段内，不填则随机在虚拟子网网段内随机分配
    * ipv6IpAddress  功能说明：辅助弹性网卡的IPv6地址 取值范围：不填则随机分配
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 取值范围：默认值为系统默认安全组
    * projectId  功能说明：辅助弹性网卡所属的项目ID 取值范围：标准UUID 约束：只有管理员有权限指定
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * instanceId  功能说明：辅助弹性网卡所属实例ID，例如RDS实例ID 约束： 1-64个字符
    * instanceType  功能说明：辅助弹性网卡所属实例类型，例如“RDS” 约束：1-64个字符
    * tags  辅助弹性网卡资源标签
    *
    * @var string[]
    */
    protected static $setters = [
            'virsubnetId' => 'setVirsubnetId',
            'vlanId' => 'setVlanId',
            'parentId' => 'setParentId',
            'description' => 'setDescription',
            'ipv6Enable' => 'setIpv6Enable',
            'privateIpAddress' => 'setPrivateIpAddress',
            'ipv6IpAddress' => 'setIpv6IpAddress',
            'securityGroups' => 'setSecurityGroups',
            'projectId' => 'setProjectId',
            'allowedAddressPairs' => 'setAllowedAddressPairs',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * virsubnetId  功能说明：虚拟子网ID 取值范围：标准UUID
    * vlanId  功能说明：辅助弹性网卡的VLAN ID 取值范围：1-4094 约束：同一个宿主网络接口下唯一
    * parentId  功能说明：宿主网络接口的ID 取值范围：标准UUID 约束：必须是实际存在的端口ID
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * ipv6Enable  功能说明：辅助弹性网卡是否启用ipv6地址 取值范围：true（开启)，false（关闭） 默认值：false
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址 取值范围：必须在虚拟子网的网段内，不填则随机在虚拟子网网段内随机分配
    * ipv6IpAddress  功能说明：辅助弹性网卡的IPv6地址 取值范围：不填则随机分配
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 取值范围：默认值为系统默认安全组
    * projectId  功能说明：辅助弹性网卡所属的项目ID 取值范围：标准UUID 约束：只有管理员有权限指定
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * instanceId  功能说明：辅助弹性网卡所属实例ID，例如RDS实例ID 约束： 1-64个字符
    * instanceType  功能说明：辅助弹性网卡所属实例类型，例如“RDS” 约束：1-64个字符
    * tags  辅助弹性网卡资源标签
    *
    * @var string[]
    */
    protected static $getters = [
            'virsubnetId' => 'getVirsubnetId',
            'vlanId' => 'getVlanId',
            'parentId' => 'getParentId',
            'description' => 'getDescription',
            'ipv6Enable' => 'getIpv6Enable',
            'privateIpAddress' => 'getPrivateIpAddress',
            'ipv6IpAddress' => 'getIpv6IpAddress',
            'securityGroups' => 'getSecurityGroups',
            'projectId' => 'getProjectId',
            'allowedAddressPairs' => 'getAllowedAddressPairs',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
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
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['vlanId'] = isset($data['vlanId']) ? $data['vlanId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['ipv6IpAddress'] = isset($data['ipv6IpAddress']) ? $data['ipv6IpAddress'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
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
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
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
    * Gets virsubnetId
    *  功能说明：虚拟子网ID 取值范围：标准UUID
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId 功能说明：虚拟子网ID 取值范围：标准UUID
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets vlanId
    *  功能说明：辅助弹性网卡的VLAN ID 取值范围：1-4094 约束：同一个宿主网络接口下唯一
    *
    * @return string|null
    */
    public function getVlanId()
    {
        return $this->container['vlanId'];
    }

    /**
    * Sets vlanId
    *
    * @param string|null $vlanId 功能说明：辅助弹性网卡的VLAN ID 取值范围：1-4094 约束：同一个宿主网络接口下唯一
    *
    * @return $this
    */
    public function setVlanId($vlanId)
    {
        $this->container['vlanId'] = $vlanId;
        return $this;
    }

    /**
    * Gets parentId
    *  功能说明：宿主网络接口的ID 取值范围：标准UUID 约束：必须是实际存在的端口ID
    *
    * @return string
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string $parentId 功能说明：宿主网络接口的ID 取值范围：标准UUID 约束：必须是实际存在的端口ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
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
    * @param string|null $description 功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  功能说明：辅助弹性网卡是否启用ipv6地址 取值范围：true（开启)，false（关闭） 默认值：false
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 功能说明：辅助弹性网卡是否启用ipv6地址 取值范围：true（开启)，false（关闭） 默认值：false
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  功能说明：辅助弹性网卡的私有IPv4地址 取值范围：必须在虚拟子网的网段内，不填则随机在虚拟子网网段内随机分配
    *
    * @return string|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string|null $privateIpAddress 功能说明：辅助弹性网卡的私有IPv4地址 取值范围：必须在虚拟子网的网段内，不填则随机在虚拟子网网段内随机分配
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets ipv6IpAddress
    *  功能说明：辅助弹性网卡的IPv6地址 取值范围：不填则随机分配
    *
    * @return string|null
    */
    public function getIpv6IpAddress()
    {
        return $this->container['ipv6IpAddress'];
    }

    /**
    * Sets ipv6IpAddress
    *
    * @param string|null $ipv6IpAddress 功能说明：辅助弹性网卡的IPv6地址 取值范围：不填则随机分配
    *
    * @return $this
    */
    public function setIpv6IpAddress($ipv6IpAddress)
    {
        $this->container['ipv6IpAddress'] = $ipv6IpAddress;
        return $this;
    }

    /**
    * Gets securityGroups
    *  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 取值范围：默认值为系统默认安全组
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
    * @param string[]|null $securityGroups 功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"] 取值范围：默认值为系统默认安全组
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets projectId
    *  功能说明：辅助弹性网卡所属的项目ID 取值范围：标准UUID 约束：只有管理员有权限指定
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 功能说明：辅助弹性网卡所属的项目ID 取值范围：标准UUID 约束：只有管理员有权限指定
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]|null
    */
    public function getAllowedAddressPairs()
    {
        return $this->container['allowedAddressPairs'];
    }

    /**
    * Sets allowedAddressPairs
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]|null $allowedAddressPairs 1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
        return $this;
    }

    /**
    * Gets instanceId
    *  功能说明：辅助弹性网卡所属实例ID，例如RDS实例ID 约束： 1-64个字符
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 功能说明：辅助弹性网卡所属实例ID，例如RDS实例ID 约束： 1-64个字符
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  功能说明：辅助弹性网卡所属实例类型，例如“RDS” 约束：1-64个字符
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 功能说明：辅助弹性网卡所属实例类型，例如“RDS” 约束：1-64个字符
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets tags
    *  辅助弹性网卡资源标签
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[]|null $tags 辅助弹性网卡资源标签
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

