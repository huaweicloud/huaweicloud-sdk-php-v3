<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVirtualGateway implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVirtualGateway';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  虚拟网关接入的VPC的ID
    * name  虚拟网关名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'localEpGroup' => 'string[]',
            'localEpGroupIpv6' => 'string[]',
            'bgpAsn' => 'int',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dc\V3\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  虚拟网关接入的VPC的ID
    * name  虚拟网关名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'name' => null,
        'description' => null,
        'localEpGroup' => null,
        'localEpGroupIpv6' => null,
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
    * vpcId  虚拟网关接入的VPC的ID
    * name  虚拟网关名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'name' => 'name',
            'description' => 'description',
            'localEpGroup' => 'local_ep_group',
            'localEpGroupIpv6' => 'local_ep_group_ipv6',
            'bgpAsn' => 'bgp_asn',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  虚拟网关接入的VPC的ID
    * name  虚拟网关名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'name' => 'setName',
            'description' => 'setDescription',
            'localEpGroup' => 'setLocalEpGroup',
            'localEpGroupIpv6' => 'setLocalEpGroupIpv6',
            'bgpAsn' => 'setBgpAsn',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  虚拟网关接入的VPC的ID
    * name  虚拟网关名字
    * description  虚拟网关的描述信息
    * localEpGroup  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    * localEpGroupIpv6  预留字段用于虚拟网关到访问云上服务IPv6子网列表，通常是vpc的cidrs
    * bgpAsn  虚拟网关本地的BGP自冶域号(asn)
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'name' => 'getName',
            'description' => 'getDescription',
            'localEpGroup' => 'getLocalEpGroup',
            'localEpGroupIpv6' => 'getLocalEpGroupIpv6',
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['localEpGroup'] = isset($data['localEpGroup']) ? $data['localEpGroup'] : null;
        $this->container['localEpGroupIpv6'] = isset($data['localEpGroupIpv6']) ? $data['localEpGroupIpv6'] : null;
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
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
        if ($this->container['localEpGroup'] === null) {
            $invalidProperties[] = "'localEpGroup' can't be null";
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
    * Gets vpcId
    *  虚拟网关接入的VPC的ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟网关接入的VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets name
    *  虚拟网关名字
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
    * @param string|null $name 虚拟网关名字
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
    *  虚拟网关的描述信息
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
    * @param string|null $description 虚拟网关的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets localEpGroup
    *  虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
    *
    * @return string[]
    */
    public function getLocalEpGroup()
    {
        return $this->container['localEpGroup'];
    }

    /**
    * Sets localEpGroup
    *
    * @param string[] $localEpGroup 虚拟网关到访问云上服务IPv4子网列表，通常是vpc的cidrs
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

