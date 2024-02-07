<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcIgwsTenantResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcIgwsTenantResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  虚拟IGW的uuid
    * projectId  虚拟IGW的租户id
    * vpcId  虚拟IGW的vpcid
    * name  虚拟IGW的名称
    * createdAt  创建时间
    * updatedAt  更新时间
    * networkId  创建IGW使用的VPC具体子网
    * enableIpv6  是否使能IPV6
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'vpcId' => 'string',
            'name' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'networkId' => 'string',
            'enableIpv6' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  虚拟IGW的uuid
    * projectId  虚拟IGW的租户id
    * vpcId  虚拟IGW的vpcid
    * name  虚拟IGW的名称
    * createdAt  创建时间
    * updatedAt  更新时间
    * networkId  创建IGW使用的VPC具体子网
    * enableIpv6  是否使能IPV6
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'vpcId' => null,
        'name' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'networkId' => null,
        'enableIpv6' => null
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
    * id  虚拟IGW的uuid
    * projectId  虚拟IGW的租户id
    * vpcId  虚拟IGW的vpcid
    * name  虚拟IGW的名称
    * createdAt  创建时间
    * updatedAt  更新时间
    * networkId  创建IGW使用的VPC具体子网
    * enableIpv6  是否使能IPV6
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'vpcId' => 'vpc_id',
            'name' => 'name',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'networkId' => 'network_id',
            'enableIpv6' => 'enable_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  虚拟IGW的uuid
    * projectId  虚拟IGW的租户id
    * vpcId  虚拟IGW的vpcid
    * name  虚拟IGW的名称
    * createdAt  创建时间
    * updatedAt  更新时间
    * networkId  创建IGW使用的VPC具体子网
    * enableIpv6  是否使能IPV6
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'vpcId' => 'setVpcId',
            'name' => 'setName',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'networkId' => 'setNetworkId',
            'enableIpv6' => 'setEnableIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  虚拟IGW的uuid
    * projectId  虚拟IGW的租户id
    * vpcId  虚拟IGW的vpcid
    * name  虚拟IGW的名称
    * createdAt  创建时间
    * updatedAt  更新时间
    * networkId  创建IGW使用的VPC具体子网
    * enableIpv6  是否使能IPV6
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'vpcId' => 'getVpcId',
            'name' => 'getName',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'networkId' => 'getNetworkId',
            'enableIpv6' => 'getEnableIpv6'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['enableIpv6'] = isset($data['enableIpv6']) ? $data['enableIpv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['networkId']) && (mb_strlen($this->container['networkId']) > 64)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['networkId']) && (mb_strlen($this->container['networkId']) < 0)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be bigger than or equal to 0.";
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
    *  虚拟IGW的uuid
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
    * @param string|null $id 虚拟IGW的uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  虚拟IGW的租户id
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
    * @param string|null $projectId 虚拟IGW的租户id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟IGW的vpcid
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
    * @param string|null $vpcId 虚拟IGW的vpcid
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
    *  虚拟IGW的名称
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
    * @param string|null $name 虚拟IGW的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
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
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets networkId
    *  创建IGW使用的VPC具体子网
    *
    * @return string|null
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string|null $networkId 创建IGW使用的VPC具体子网
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets enableIpv6
    *  是否使能IPV6
    *
    * @return bool|null
    */
    public function getEnableIpv6()
    {
        return $this->container['enableIpv6'];
    }

    /**
    * Sets enableIpv6
    *
    * @param bool|null $enableIpv6 是否使能IPV6
    *
    * @return $this
    */
    public function setEnableIpv6($enableIpv6)
    {
        $this->container['enableIpv6'] = $enableIpv6;
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

