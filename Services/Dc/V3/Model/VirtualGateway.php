<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VirtualGateway implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VirtualGateway';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  虚拟网关的ID
    * vpcId  虚拟网关接入的VPC的ID
    * tenantId  实例所属项目ID。
    * name  虚拟网关的名字
    * description  虚拟网关的描述
    * type  虚拟网关类型：default
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * adminStateUp  管理状态：true或false
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vpcId' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'localEpGroup' => 'string[]',
            'localEpGroupIpv6' => 'string[]',
            'adminStateUp' => 'bool',
            'status' => 'string',
            'bgpAsn' => 'int',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dc\V3\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  虚拟网关的ID
    * vpcId  虚拟网关接入的VPC的ID
    * tenantId  实例所属项目ID。
    * name  虚拟网关的名字
    * description  虚拟网关的描述
    * type  虚拟网关类型：default
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * adminStateUp  管理状态：true或false
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vpcId' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'localEpGroup' => null,
        'localEpGroupIpv6' => null,
        'adminStateUp' => null,
        'status' => null,
        'bgpAsn' => 'int32',
        'enterpriseProjectId' => null,
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
    * id  虚拟网关的ID
    * vpcId  虚拟网关接入的VPC的ID
    * tenantId  实例所属项目ID。
    * name  虚拟网关的名字
    * description  虚拟网关的描述
    * type  虚拟网关类型：default
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * adminStateUp  管理状态：true或false
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vpcId' => 'vpc_id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'localEpGroup' => 'local_ep_group',
            'localEpGroupIpv6' => 'local_ep_group_ipv6',
            'adminStateUp' => 'admin_state_up',
            'status' => 'status',
            'bgpAsn' => 'bgp_asn',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  虚拟网关的ID
    * vpcId  虚拟网关接入的VPC的ID
    * tenantId  实例所属项目ID。
    * name  虚拟网关的名字
    * description  虚拟网关的描述
    * type  虚拟网关类型：default
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * adminStateUp  管理状态：true或false
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vpcId' => 'setVpcId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'localEpGroup' => 'setLocalEpGroup',
            'localEpGroupIpv6' => 'setLocalEpGroupIpv6',
            'adminStateUp' => 'setAdminStateUp',
            'status' => 'setStatus',
            'bgpAsn' => 'setBgpAsn',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  虚拟网关的ID
    * vpcId  虚拟网关接入的VPC的ID
    * tenantId  实例所属项目ID。
    * name  虚拟网关的名字
    * description  虚拟网关的描述
    * type  虚拟网关类型：default
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * adminStateUp  管理状态：true或false
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vpcId' => 'getVpcId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'localEpGroup' => 'getLocalEpGroup',
            'localEpGroupIpv6' => 'getLocalEpGroupIpv6',
            'adminStateUp' => 'getAdminStateUp',
            'status' => 'getStatus',
            'bgpAsn' => 'getBgpAsn',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['localEpGroup'] = isset($data['localEpGroup']) ? $data['localEpGroup'] : null;
        $this->container['localEpGroupIpv6'] = isset($data['localEpGroupIpv6']) ? $data['localEpGroupIpv6'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
            if (!is_null($this->container['vpcId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[a-fA-F0-9]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] < 1)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    *  虚拟网关的ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 虚拟网关的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟网关接入的VPC的ID
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟网关接入的VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets tenantId
    *  实例所属项目ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 实例所属项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  虚拟网关的名字
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
    * @param string|null $name 虚拟网关的名字
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
    *  虚拟网关的描述
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
    * @param string|null $description 虚拟网关的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  虚拟网关类型：default
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 虚拟网关类型：default
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets localEpGroup
    *  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    *
    * @return string[]|null
    */
    public function getLocalEpGroup()
    {
        return $this->container['localEpGroup'];
    }

    /**
    * Sets localEpGroup
    *
    * @param string[]|null $localEpGroup 虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    *
    * @return $this
    */
    public function setLocalEpGroup($localEpGroup)
    {
        $this->container['localEpGroup'] = $localEpGroup;
        return $this;
    }

    /**
    * Gets localEpGroupIpv6
    *  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @return string[]|null
    */
    public function getLocalEpGroupIpv6()
    {
        return $this->container['localEpGroupIpv6'];
    }

    /**
    * Sets localEpGroupIpv6
    *
    * @param string[]|null $localEpGroupIpv6 预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    *
    * @return $this
    */
    public function setLocalEpGroupIpv6($localEpGroupIpv6)
    {
        $this->container['localEpGroupIpv6'] = $localEpGroupIpv6;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  管理状态：true或false
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 管理状态：true或false
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets status
    *  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  虚拟网关本地的BGP自冶域号(asn)
    *
    * @return int|null
    */
    public function getBgpAsn()
    {
        return $this->container['bgpAsn'];
    }

    /**
    * Sets bgpAsn
    *
    * @param int|null $bgpAsn 虚拟网关本地的BGP自冶域号(asn)
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  实例所属企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 实例所属企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null $tags 标签信息
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

