<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FuncVpc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FuncVpc';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  域名id。
    * namespace  租户的project id。
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    * isSafety  是否开启安全访问。开启时，需要您自行配置VPCEP网络但可以提供更安全的VPC连接访问并打通内网域名。注意：开启后无法关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'namespace' => 'string',
            'vpcName' => 'string',
            'vpcId' => 'string',
            'subnetName' => 'string',
            'subnetId' => 'string',
            'cidr' => 'string',
            'gateway' => 'string',
            'securityGroups' => 'string[]',
            'isSafety' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  域名id。
    * namespace  租户的project id。
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    * isSafety  是否开启安全访问。开启时，需要您自行配置VPCEP网络但可以提供更安全的VPC连接访问并打通内网域名。注意：开启后无法关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'namespace' => null,
        'vpcName' => null,
        'vpcId' => null,
        'subnetName' => null,
        'subnetId' => null,
        'cidr' => null,
        'gateway' => null,
        'securityGroups' => null,
        'isSafety' => null
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
    * domainId  域名id。
    * namespace  租户的project id。
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    * isSafety  是否开启安全访问。开启时，需要您自行配置VPCEP网络但可以提供更安全的VPC连接访问并打通内网域名。注意：开启后无法关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'namespace' => 'namespace',
            'vpcName' => 'vpc_name',
            'vpcId' => 'vpc_id',
            'subnetName' => 'subnet_name',
            'subnetId' => 'subnet_id',
            'cidr' => 'cidr',
            'gateway' => 'gateway',
            'securityGroups' => 'security_groups',
            'isSafety' => 'is_safety'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  域名id。
    * namespace  租户的project id。
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    * isSafety  是否开启安全访问。开启时，需要您自行配置VPCEP网络但可以提供更安全的VPC连接访问并打通内网域名。注意：开启后无法关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'namespace' => 'setNamespace',
            'vpcName' => 'setVpcName',
            'vpcId' => 'setVpcId',
            'subnetName' => 'setSubnetName',
            'subnetId' => 'setSubnetId',
            'cidr' => 'setCidr',
            'gateway' => 'setGateway',
            'securityGroups' => 'setSecurityGroups',
            'isSafety' => 'setIsSafety'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  域名id。
    * namespace  租户的project id。
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    * isSafety  是否开启安全访问。开启时，需要您自行配置VPCEP网络但可以提供更安全的VPC连接访问并打通内网域名。注意：开启后无法关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'namespace' => 'getNamespace',
            'vpcName' => 'getVpcName',
            'vpcId' => 'getVpcId',
            'subnetName' => 'getSubnetName',
            'subnetId' => 'getSubnetId',
            'cidr' => 'getCidr',
            'gateway' => 'getGateway',
            'securityGroups' => 'getSecurityGroups',
            'isSafety' => 'getIsSafety'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['isSafety'] = isset($data['isSafety']) ? $data['isSafety'] : null;
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
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
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
    * Gets domainId
    *  域名id。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 域名id。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets namespace
    *  租户的project id。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 租户的project id。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets vpcName
    *  虚拟私有云名称。
    *
    * @return string|null
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string|null $vpcName 虚拟私有云名称。
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云唯一标识。
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
    * @param string $vpcId 虚拟私有云唯一标识。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetName
    *  子网名称。
    *
    * @return string|null
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string|null $subnetName 子网名称。
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网编号。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网编号。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets cidr
    *  子网掩码。
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 子网掩码。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets gateway
    *  网关。
    *
    * @return string|null
    */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
    * Sets gateway
    *
    * @param string|null $gateway 网关。
    *
    * @return $this
    */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;
        return $this;
    }

    /**
    * Gets securityGroups
    *  安全组
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
    * @param string[]|null $securityGroups 安全组
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets isSafety
    *  是否开启安全访问。开启时，需要您自行配置VPCEP网络但可以提供更安全的VPC连接访问并打通内网域名。注意：开启后无法关闭。
    *
    * @return bool|null
    */
    public function getIsSafety()
    {
        return $this->container['isSafety'];
    }

    /**
    * Sets isSafety
    *
    * @param bool|null $isSafety 是否开启安全访问。开启时，需要您自行配置VPCEP网络但可以提供更安全的VPC连接访问并打通内网域名。注意：开启后无法关闭。
    *
    * @return $this
    */
    public function setIsSafety($isSafety)
    {
        $this->container['isSafety'] = $isSafety;
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

