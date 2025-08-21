<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineReference';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpc  vpc名称
    * azList  微服务引擎部署的可用区列表
    * networkId  微服务引擎子网网络ID
    * subnetCidr  微服务引擎ipv4子网划分
    * subnetCidrV6  微服务引擎ipv6子网划分
    * subnetGateway  微服务引擎子网网关
    * publicIpId  微服务引擎公网地址ID
    * serviceLimit  微服务引擎可支持的微服务总数
    * instanceLimit  微服务引擎可支持的实例总数
    * inputs  微服务引擎附加参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpc' => 'string',
            'azList' => 'string[]',
            'networkId' => 'string',
            'subnetCidr' => 'string',
            'subnetCidrV6' => 'string',
            'subnetGateway' => 'string',
            'publicIpId' => 'string',
            'serviceLimit' => 'string',
            'instanceLimit' => 'string',
            'inputs' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpc  vpc名称
    * azList  微服务引擎部署的可用区列表
    * networkId  微服务引擎子网网络ID
    * subnetCidr  微服务引擎ipv4子网划分
    * subnetCidrV6  微服务引擎ipv6子网划分
    * subnetGateway  微服务引擎子网网关
    * publicIpId  微服务引擎公网地址ID
    * serviceLimit  微服务引擎可支持的微服务总数
    * instanceLimit  微服务引擎可支持的实例总数
    * inputs  微服务引擎附加参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpc' => null,
        'azList' => null,
        'networkId' => null,
        'subnetCidr' => null,
        'subnetCidrV6' => null,
        'subnetGateway' => null,
        'publicIpId' => null,
        'serviceLimit' => null,
        'instanceLimit' => null,
        'inputs' => null
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
    * vpc  vpc名称
    * azList  微服务引擎部署的可用区列表
    * networkId  微服务引擎子网网络ID
    * subnetCidr  微服务引擎ipv4子网划分
    * subnetCidrV6  微服务引擎ipv6子网划分
    * subnetGateway  微服务引擎子网网关
    * publicIpId  微服务引擎公网地址ID
    * serviceLimit  微服务引擎可支持的微服务总数
    * instanceLimit  微服务引擎可支持的实例总数
    * inputs  微服务引擎附加参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpc' => 'vpc',
            'azList' => 'azList',
            'networkId' => 'networkId',
            'subnetCidr' => 'subnetCidr',
            'subnetCidrV6' => 'subnetCidrV6',
            'subnetGateway' => 'subnetGateway',
            'publicIpId' => 'publicIpId',
            'serviceLimit' => 'serviceLimit',
            'instanceLimit' => 'instanceLimit',
            'inputs' => 'inputs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpc  vpc名称
    * azList  微服务引擎部署的可用区列表
    * networkId  微服务引擎子网网络ID
    * subnetCidr  微服务引擎ipv4子网划分
    * subnetCidrV6  微服务引擎ipv6子网划分
    * subnetGateway  微服务引擎子网网关
    * publicIpId  微服务引擎公网地址ID
    * serviceLimit  微服务引擎可支持的微服务总数
    * instanceLimit  微服务引擎可支持的实例总数
    * inputs  微服务引擎附加参数
    *
    * @var string[]
    */
    protected static $setters = [
            'vpc' => 'setVpc',
            'azList' => 'setAzList',
            'networkId' => 'setNetworkId',
            'subnetCidr' => 'setSubnetCidr',
            'subnetCidrV6' => 'setSubnetCidrV6',
            'subnetGateway' => 'setSubnetGateway',
            'publicIpId' => 'setPublicIpId',
            'serviceLimit' => 'setServiceLimit',
            'instanceLimit' => 'setInstanceLimit',
            'inputs' => 'setInputs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpc  vpc名称
    * azList  微服务引擎部署的可用区列表
    * networkId  微服务引擎子网网络ID
    * subnetCidr  微服务引擎ipv4子网划分
    * subnetCidrV6  微服务引擎ipv6子网划分
    * subnetGateway  微服务引擎子网网关
    * publicIpId  微服务引擎公网地址ID
    * serviceLimit  微服务引擎可支持的微服务总数
    * instanceLimit  微服务引擎可支持的实例总数
    * inputs  微服务引擎附加参数
    *
    * @var string[]
    */
    protected static $getters = [
            'vpc' => 'getVpc',
            'azList' => 'getAzList',
            'networkId' => 'getNetworkId',
            'subnetCidr' => 'getSubnetCidr',
            'subnetCidrV6' => 'getSubnetCidrV6',
            'subnetGateway' => 'getSubnetGateway',
            'publicIpId' => 'getPublicIpId',
            'serviceLimit' => 'getServiceLimit',
            'instanceLimit' => 'getInstanceLimit',
            'inputs' => 'getInputs'
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
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['azList'] = isset($data['azList']) ? $data['azList'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['subnetCidrV6'] = isset($data['subnetCidrV6']) ? $data['subnetCidrV6'] : null;
        $this->container['subnetGateway'] = isset($data['subnetGateway']) ? $data['subnetGateway'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['serviceLimit'] = isset($data['serviceLimit']) ? $data['serviceLimit'] : null;
        $this->container['instanceLimit'] = isset($data['instanceLimit']) ? $data['instanceLimit'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets vpc
    *  vpc名称
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
    * @param string|null $vpc vpc名称
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets azList
    *  微服务引擎部署的可用区列表
    *
    * @return string[]|null
    */
    public function getAzList()
    {
        return $this->container['azList'];
    }

    /**
    * Sets azList
    *
    * @param string[]|null $azList 微服务引擎部署的可用区列表
    *
    * @return $this
    */
    public function setAzList($azList)
    {
        $this->container['azList'] = $azList;
        return $this;
    }

    /**
    * Gets networkId
    *  微服务引擎子网网络ID
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
    * @param string|null $networkId 微服务引擎子网网络ID
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets subnetCidr
    *  微服务引擎ipv4子网划分
    *
    * @return string|null
    */
    public function getSubnetCidr()
    {
        return $this->container['subnetCidr'];
    }

    /**
    * Sets subnetCidr
    *
    * @param string|null $subnetCidr 微服务引擎ipv4子网划分
    *
    * @return $this
    */
    public function setSubnetCidr($subnetCidr)
    {
        $this->container['subnetCidr'] = $subnetCidr;
        return $this;
    }

    /**
    * Gets subnetCidrV6
    *  微服务引擎ipv6子网划分
    *
    * @return string|null
    */
    public function getSubnetCidrV6()
    {
        return $this->container['subnetCidrV6'];
    }

    /**
    * Sets subnetCidrV6
    *
    * @param string|null $subnetCidrV6 微服务引擎ipv6子网划分
    *
    * @return $this
    */
    public function setSubnetCidrV6($subnetCidrV6)
    {
        $this->container['subnetCidrV6'] = $subnetCidrV6;
        return $this;
    }

    /**
    * Gets subnetGateway
    *  微服务引擎子网网关
    *
    * @return string|null
    */
    public function getSubnetGateway()
    {
        return $this->container['subnetGateway'];
    }

    /**
    * Sets subnetGateway
    *
    * @param string|null $subnetGateway 微服务引擎子网网关
    *
    * @return $this
    */
    public function setSubnetGateway($subnetGateway)
    {
        $this->container['subnetGateway'] = $subnetGateway;
        return $this;
    }

    /**
    * Gets publicIpId
    *  微服务引擎公网地址ID
    *
    * @return string|null
    */
    public function getPublicIpId()
    {
        return $this->container['publicIpId'];
    }

    /**
    * Sets publicIpId
    *
    * @param string|null $publicIpId 微服务引擎公网地址ID
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets serviceLimit
    *  微服务引擎可支持的微服务总数
    *
    * @return string|null
    */
    public function getServiceLimit()
    {
        return $this->container['serviceLimit'];
    }

    /**
    * Sets serviceLimit
    *
    * @param string|null $serviceLimit 微服务引擎可支持的微服务总数
    *
    * @return $this
    */
    public function setServiceLimit($serviceLimit)
    {
        $this->container['serviceLimit'] = $serviceLimit;
        return $this;
    }

    /**
    * Gets instanceLimit
    *  微服务引擎可支持的实例总数
    *
    * @return string|null
    */
    public function getInstanceLimit()
    {
        return $this->container['instanceLimit'];
    }

    /**
    * Sets instanceLimit
    *
    * @param string|null $instanceLimit 微服务引擎可支持的实例总数
    *
    * @return $this
    */
    public function setInstanceLimit($instanceLimit)
    {
        $this->container['instanceLimit'] = $instanceLimit;
        return $this;
    }

    /**
    * Gets inputs
    *  微服务引擎附加参数
    *
    * @return map[string,string]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param map[string,string]|null $inputs 微服务引擎附加参数
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
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

