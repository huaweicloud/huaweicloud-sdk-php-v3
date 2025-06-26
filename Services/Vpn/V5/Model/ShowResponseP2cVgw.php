<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResponseP2cVgw implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResponseP2cVgw';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  P2C VPN网关ID
    * name  P2C VPN网关名称
    * status  P2C VPN网关状态
    * vpcId  P2C VPN网关所连接的VPC的ID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  可用区列表
    * eip  eip
    * maxConnectionNumber  配置的最大并发客户端连接数
    * currentConnectionNumber  当前建连的客户端连接数
    * enterpriseProjectId  企业项目ID
    * tags  标签
    * orderId  订单Id
    * adminStateUp  冻结状态
    * frozenEffect  冻结场景：0未冻结；1 冻结可删除；2冻结不可删除
    * version  网关版本
    * createdAt  创建时间
    * updatedAt  更新时间
    * appliedAt  生效时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'vpcId' => 'string',
            'connectSubnet' => 'string',
            'flavor' => 'string',
            'availabilityZoneIds' => 'string[]',
            'eip' => '\HuaweiCloud\SDK\Vpn\V5\Model\ResponseEipInfo',
            'maxConnectionNumber' => 'int',
            'currentConnectionNumber' => 'int',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpn\V5\Model\VpnResourceTag[]',
            'orderId' => 'string',
            'adminStateUp' => 'bool',
            'frozenEffect' => 'int',
            'version' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'appliedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  P2C VPN网关ID
    * name  P2C VPN网关名称
    * status  P2C VPN网关状态
    * vpcId  P2C VPN网关所连接的VPC的ID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  可用区列表
    * eip  eip
    * maxConnectionNumber  配置的最大并发客户端连接数
    * currentConnectionNumber  当前建连的客户端连接数
    * enterpriseProjectId  企业项目ID
    * tags  标签
    * orderId  订单Id
    * adminStateUp  冻结状态
    * frozenEffect  冻结场景：0未冻结；1 冻结可删除；2冻结不可删除
    * version  网关版本
    * createdAt  创建时间
    * updatedAt  更新时间
    * appliedAt  生效时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'vpcId' => null,
        'connectSubnet' => null,
        'flavor' => null,
        'availabilityZoneIds' => null,
        'eip' => null,
        'maxConnectionNumber' => 'int32',
        'currentConnectionNumber' => 'int32',
        'enterpriseProjectId' => null,
        'tags' => null,
        'orderId' => null,
        'adminStateUp' => null,
        'frozenEffect' => null,
        'version' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'appliedAt' => 'date-time'
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
    * id  P2C VPN网关ID
    * name  P2C VPN网关名称
    * status  P2C VPN网关状态
    * vpcId  P2C VPN网关所连接的VPC的ID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  可用区列表
    * eip  eip
    * maxConnectionNumber  配置的最大并发客户端连接数
    * currentConnectionNumber  当前建连的客户端连接数
    * enterpriseProjectId  企业项目ID
    * tags  标签
    * orderId  订单Id
    * adminStateUp  冻结状态
    * frozenEffect  冻结场景：0未冻结；1 冻结可删除；2冻结不可删除
    * version  网关版本
    * createdAt  创建时间
    * updatedAt  更新时间
    * appliedAt  生效时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'vpcId' => 'vpc_id',
            'connectSubnet' => 'connect_subnet',
            'flavor' => 'flavor',
            'availabilityZoneIds' => 'availability_zone_ids',
            'eip' => 'eip',
            'maxConnectionNumber' => 'max_connection_number',
            'currentConnectionNumber' => 'current_connection_number',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'orderId' => 'order_id',
            'adminStateUp' => 'admin_state_up',
            'frozenEffect' => 'frozen_effect',
            'version' => 'version',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'appliedAt' => 'applied_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  P2C VPN网关ID
    * name  P2C VPN网关名称
    * status  P2C VPN网关状态
    * vpcId  P2C VPN网关所连接的VPC的ID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  可用区列表
    * eip  eip
    * maxConnectionNumber  配置的最大并发客户端连接数
    * currentConnectionNumber  当前建连的客户端连接数
    * enterpriseProjectId  企业项目ID
    * tags  标签
    * orderId  订单Id
    * adminStateUp  冻结状态
    * frozenEffect  冻结场景：0未冻结；1 冻结可删除；2冻结不可删除
    * version  网关版本
    * createdAt  创建时间
    * updatedAt  更新时间
    * appliedAt  生效时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'vpcId' => 'setVpcId',
            'connectSubnet' => 'setConnectSubnet',
            'flavor' => 'setFlavor',
            'availabilityZoneIds' => 'setAvailabilityZoneIds',
            'eip' => 'setEip',
            'maxConnectionNumber' => 'setMaxConnectionNumber',
            'currentConnectionNumber' => 'setCurrentConnectionNumber',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'orderId' => 'setOrderId',
            'adminStateUp' => 'setAdminStateUp',
            'frozenEffect' => 'setFrozenEffect',
            'version' => 'setVersion',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'appliedAt' => 'setAppliedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  P2C VPN网关ID
    * name  P2C VPN网关名称
    * status  P2C VPN网关状态
    * vpcId  P2C VPN网关所连接的VPC的ID
    * connectSubnet  P2C VPN网关所使用的VPC子网ID
    * flavor  P2C VPN网关的规格类型
    * availabilityZoneIds  可用区列表
    * eip  eip
    * maxConnectionNumber  配置的最大并发客户端连接数
    * currentConnectionNumber  当前建连的客户端连接数
    * enterpriseProjectId  企业项目ID
    * tags  标签
    * orderId  订单Id
    * adminStateUp  冻结状态
    * frozenEffect  冻结场景：0未冻结；1 冻结可删除；2冻结不可删除
    * version  网关版本
    * createdAt  创建时间
    * updatedAt  更新时间
    * appliedAt  生效时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'vpcId' => 'getVpcId',
            'connectSubnet' => 'getConnectSubnet',
            'flavor' => 'getFlavor',
            'availabilityZoneIds' => 'getAvailabilityZoneIds',
            'eip' => 'getEip',
            'maxConnectionNumber' => 'getMaxConnectionNumber',
            'currentConnectionNumber' => 'getCurrentConnectionNumber',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'orderId' => 'getOrderId',
            'adminStateUp' => 'getAdminStateUp',
            'frozenEffect' => 'getFrozenEffect',
            'version' => 'getVersion',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'appliedAt' => 'getAppliedAt'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['connectSubnet'] = isset($data['connectSubnet']) ? $data['connectSubnet'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['availabilityZoneIds'] = isset($data['availabilityZoneIds']) ? $data['availabilityZoneIds'] : null;
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['maxConnectionNumber'] = isset($data['maxConnectionNumber']) ? $data['maxConnectionNumber'] : null;
        $this->container['currentConnectionNumber'] = isset($data['currentConnectionNumber']) ? $data['currentConnectionNumber'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['frozenEffect'] = isset($data['frozenEffect']) ? $data['frozenEffect'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['appliedAt'] = isset($data['appliedAt']) ? $data['appliedAt'] : null;
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
            if (!is_null($this->container['name']) && !preg_match("/[一-龥A-Za-z0-9_-]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥A-Za-z0-9_-]+/.";
            }
            if (!is_null($this->container['flavor']) && (mb_strlen($this->container['flavor']) > 64)) {
                $invalidProperties[] = "invalid value for 'flavor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
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
    *  P2C VPN网关ID
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
    * @param string|null $id P2C VPN网关ID
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
    *  P2C VPN网关名称
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
    * @param string|null $name P2C VPN网关名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  P2C VPN网关状态
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
    * @param string|null $status P2C VPN网关状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vpcId
    *  P2C VPN网关所连接的VPC的ID
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
    * @param string|null $vpcId P2C VPN网关所连接的VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets connectSubnet
    *  P2C VPN网关所使用的VPC子网ID
    *
    * @return string|null
    */
    public function getConnectSubnet()
    {
        return $this->container['connectSubnet'];
    }

    /**
    * Sets connectSubnet
    *
    * @param string|null $connectSubnet P2C VPN网关所使用的VPC子网ID
    *
    * @return $this
    */
    public function setConnectSubnet($connectSubnet)
    {
        $this->container['connectSubnet'] = $connectSubnet;
        return $this;
    }

    /**
    * Gets flavor
    *  P2C VPN网关的规格类型
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor P2C VPN网关的规格类型
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets availabilityZoneIds
    *  可用区列表
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneIds()
    {
        return $this->container['availabilityZoneIds'];
    }

    /**
    * Sets availabilityZoneIds
    *
    * @param string[]|null $availabilityZoneIds 可用区列表
    *
    * @return $this
    */
    public function setAvailabilityZoneIds($availabilityZoneIds)
    {
        $this->container['availabilityZoneIds'] = $availabilityZoneIds;
        return $this;
    }

    /**
    * Gets eip
    *  eip
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\ResponseEipInfo|null
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\ResponseEipInfo|null $eip eip
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets maxConnectionNumber
    *  配置的最大并发客户端连接数
    *
    * @return int|null
    */
    public function getMaxConnectionNumber()
    {
        return $this->container['maxConnectionNumber'];
    }

    /**
    * Sets maxConnectionNumber
    *
    * @param int|null $maxConnectionNumber 配置的最大并发客户端连接数
    *
    * @return $this
    */
    public function setMaxConnectionNumber($maxConnectionNumber)
    {
        $this->container['maxConnectionNumber'] = $maxConnectionNumber;
        return $this;
    }

    /**
    * Gets currentConnectionNumber
    *  当前建连的客户端连接数
    *
    * @return int|null
    */
    public function getCurrentConnectionNumber()
    {
        return $this->container['currentConnectionNumber'];
    }

    /**
    * Sets currentConnectionNumber
    *
    * @param int|null $currentConnectionNumber 当前建连的客户端连接数
    *
    * @return $this
    */
    public function setCurrentConnectionNumber($currentConnectionNumber)
    {
        $this->container['currentConnectionNumber'] = $currentConnectionNumber;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
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
    * Gets orderId
    *  订单Id
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单Id
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  冻结状态
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
    * @param bool|null $adminStateUp 冻结状态
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets frozenEffect
    *  冻结场景：0未冻结；1 冻结可删除；2冻结不可删除
    *
    * @return int|null
    */
    public function getFrozenEffect()
    {
        return $this->container['frozenEffect'];
    }

    /**
    * Sets frozenEffect
    *
    * @param int|null $frozenEffect 冻结场景：0未冻结；1 冻结可删除；2冻结不可删除
    *
    * @return $this
    */
    public function setFrozenEffect($frozenEffect)
    {
        $this->container['frozenEffect'] = $frozenEffect;
        return $this;
    }

    /**
    * Gets version
    *  网关版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 网关版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets appliedAt
    *  生效时间
    *
    * @return \DateTime|null
    */
    public function getAppliedAt()
    {
        return $this->container['appliedAt'];
    }

    /**
    * Sets appliedAt
    *
    * @param \DateTime|null $appliedAt 生效时间
    *
    * @return $this
    */
    public function setAppliedAt($appliedAt)
    {
        $this->container['appliedAt'] = $appliedAt;
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

