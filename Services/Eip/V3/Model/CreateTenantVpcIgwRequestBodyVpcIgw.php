<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTenantVpcIgwRequestBodyVpcIgw implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTenantVpcIgwRequestBody_vpc_igw';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  vpcid
    * networkId  创建VPC IGW的network id
    * addRoute  是否添加默认路由
    * enableIpv6  是否使能ipv6
    * name  虚拟IGW的名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'networkId' => 'string',
            'addRoute' => 'bool',
            'enableIpv6' => 'bool',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  vpcid
    * networkId  创建VPC IGW的network id
    * addRoute  是否添加默认路由
    * enableIpv6  是否使能ipv6
    * name  虚拟IGW的名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'networkId' => null,
        'addRoute' => null,
        'enableIpv6' => null,
        'name' => null
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
    * vpcId  vpcid
    * networkId  创建VPC IGW的network id
    * addRoute  是否添加默认路由
    * enableIpv6  是否使能ipv6
    * name  虚拟IGW的名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'networkId' => 'network_id',
            'addRoute' => 'add_route',
            'enableIpv6' => 'enable_ipv6',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  vpcid
    * networkId  创建VPC IGW的network id
    * addRoute  是否添加默认路由
    * enableIpv6  是否使能ipv6
    * name  虚拟IGW的名称
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'networkId' => 'setNetworkId',
            'addRoute' => 'setAddRoute',
            'enableIpv6' => 'setEnableIpv6',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  vpcid
    * networkId  创建VPC IGW的network id
    * addRoute  是否添加默认路由
    * enableIpv6  是否使能ipv6
    * name  虚拟IGW的名称
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'networkId' => 'getNetworkId',
            'addRoute' => 'getAddRoute',
            'enableIpv6' => 'getEnableIpv6',
            'name' => 'getName'
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
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['addRoute'] = isset($data['addRoute']) ? $data['addRoute'] : null;
        $this->container['enableIpv6'] = isset($data['enableIpv6']) ? $data['enableIpv6'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
            if ((mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['networkId']) && (mb_strlen($this->container['networkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['networkId']) && (mb_strlen($this->container['networkId']) < 0)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa5A-Za-z0-9_.-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5A-Za-z0-9_.-]+$/.";
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
    *  vpcid
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
    * @param string $vpcId vpcid
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets networkId
    *  创建VPC IGW的network id
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
    * @param string|null $networkId 创建VPC IGW的network id
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets addRoute
    *  是否添加默认路由
    *
    * @return bool|null
    */
    public function getAddRoute()
    {
        return $this->container['addRoute'];
    }

    /**
    * Sets addRoute
    *
    * @param bool|null $addRoute 是否添加默认路由
    *
    * @return $this
    */
    public function setAddRoute($addRoute)
    {
        $this->container['addRoute'] = $addRoute;
        return $this;
    }

    /**
    * Gets enableIpv6
    *  是否使能ipv6
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
    * @param bool|null $enableIpv6 是否使能ipv6
    *
    * @return $this
    */
    public function setEnableIpv6($enableIpv6)
    {
        $this->container['enableIpv6'] = $enableIpv6;
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

