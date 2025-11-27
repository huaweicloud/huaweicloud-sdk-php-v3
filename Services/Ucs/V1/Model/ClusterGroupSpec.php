<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterGroupSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterGroupSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleNamespaces  权限策略关联的命名空间列表
    * federationId  舰队启用联邦ID
    * description  描述信息
    * dnsSuffix  舰队对应联邦的DNS后缀，开启联邦后可见
    * federationExpirationTimestamp  联邦到期时间戳
    * policyId  策略管理id
    * federationVersion  舰队启用联邦的版本
    * connectGatewayEndpoints  集群联邦连接网关节点列表，仅当舰队开启集群联邦时有值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleNamespaces' => 'string[]',
            'federationId' => 'string',
            'description' => 'string',
            'dnsSuffix' => 'string[]',
            'federationExpirationTimestamp' => 'string',
            'policyId' => 'string',
            'federationVersion' => 'string',
            'connectGatewayEndpoints' => '\HuaweiCloud\SDK\Ucs\V1\Model\ConnectEndpoint[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleNamespaces  权限策略关联的命名空间列表
    * federationId  舰队启用联邦ID
    * description  描述信息
    * dnsSuffix  舰队对应联邦的DNS后缀，开启联邦后可见
    * federationExpirationTimestamp  联邦到期时间戳
    * policyId  策略管理id
    * federationVersion  舰队启用联邦的版本
    * connectGatewayEndpoints  集群联邦连接网关节点列表，仅当舰队开启集群联邦时有值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleNamespaces' => null,
        'federationId' => null,
        'description' => null,
        'dnsSuffix' => null,
        'federationExpirationTimestamp' => null,
        'policyId' => null,
        'federationVersion' => null,
        'connectGatewayEndpoints' => null
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
    * ruleNamespaces  权限策略关联的命名空间列表
    * federationId  舰队启用联邦ID
    * description  描述信息
    * dnsSuffix  舰队对应联邦的DNS后缀，开启联邦后可见
    * federationExpirationTimestamp  联邦到期时间戳
    * policyId  策略管理id
    * federationVersion  舰队启用联邦的版本
    * connectGatewayEndpoints  集群联邦连接网关节点列表，仅当舰队开启集群联邦时有值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleNamespaces' => 'ruleNamespaces',
            'federationId' => 'federationId',
            'description' => 'description',
            'dnsSuffix' => 'dnsSuffix',
            'federationExpirationTimestamp' => 'federationExpirationTimestamp',
            'policyId' => 'policyId',
            'federationVersion' => 'federationVersion',
            'connectGatewayEndpoints' => 'connectGatewayEndpoints'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleNamespaces  权限策略关联的命名空间列表
    * federationId  舰队启用联邦ID
    * description  描述信息
    * dnsSuffix  舰队对应联邦的DNS后缀，开启联邦后可见
    * federationExpirationTimestamp  联邦到期时间戳
    * policyId  策略管理id
    * federationVersion  舰队启用联邦的版本
    * connectGatewayEndpoints  集群联邦连接网关节点列表，仅当舰队开启集群联邦时有值
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleNamespaces' => 'setRuleNamespaces',
            'federationId' => 'setFederationId',
            'description' => 'setDescription',
            'dnsSuffix' => 'setDnsSuffix',
            'federationExpirationTimestamp' => 'setFederationExpirationTimestamp',
            'policyId' => 'setPolicyId',
            'federationVersion' => 'setFederationVersion',
            'connectGatewayEndpoints' => 'setConnectGatewayEndpoints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleNamespaces  权限策略关联的命名空间列表
    * federationId  舰队启用联邦ID
    * description  描述信息
    * dnsSuffix  舰队对应联邦的DNS后缀，开启联邦后可见
    * federationExpirationTimestamp  联邦到期时间戳
    * policyId  策略管理id
    * federationVersion  舰队启用联邦的版本
    * connectGatewayEndpoints  集群联邦连接网关节点列表，仅当舰队开启集群联邦时有值
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleNamespaces' => 'getRuleNamespaces',
            'federationId' => 'getFederationId',
            'description' => 'getDescription',
            'dnsSuffix' => 'getDnsSuffix',
            'federationExpirationTimestamp' => 'getFederationExpirationTimestamp',
            'policyId' => 'getPolicyId',
            'federationVersion' => 'getFederationVersion',
            'connectGatewayEndpoints' => 'getConnectGatewayEndpoints'
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
        $this->container['ruleNamespaces'] = isset($data['ruleNamespaces']) ? $data['ruleNamespaces'] : null;
        $this->container['federationId'] = isset($data['federationId']) ? $data['federationId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dnsSuffix'] = isset($data['dnsSuffix']) ? $data['dnsSuffix'] : null;
        $this->container['federationExpirationTimestamp'] = isset($data['federationExpirationTimestamp']) ? $data['federationExpirationTimestamp'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['federationVersion'] = isset($data['federationVersion']) ? $data['federationVersion'] : null;
        $this->container['connectGatewayEndpoints'] = isset($data['connectGatewayEndpoints']) ? $data['connectGatewayEndpoints'] : null;
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
    * Gets ruleNamespaces
    *  权限策略关联的命名空间列表
    *
    * @return string[]|null
    */
    public function getRuleNamespaces()
    {
        return $this->container['ruleNamespaces'];
    }

    /**
    * Sets ruleNamespaces
    *
    * @param string[]|null $ruleNamespaces 权限策略关联的命名空间列表
    *
    * @return $this
    */
    public function setRuleNamespaces($ruleNamespaces)
    {
        $this->container['ruleNamespaces'] = $ruleNamespaces;
        return $this;
    }

    /**
    * Gets federationId
    *  舰队启用联邦ID
    *
    * @return string|null
    */
    public function getFederationId()
    {
        return $this->container['federationId'];
    }

    /**
    * Sets federationId
    *
    * @param string|null $federationId 舰队启用联邦ID
    *
    * @return $this
    */
    public function setFederationId($federationId)
    {
        $this->container['federationId'] = $federationId;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dnsSuffix
    *  舰队对应联邦的DNS后缀，开启联邦后可见
    *
    * @return string[]|null
    */
    public function getDnsSuffix()
    {
        return $this->container['dnsSuffix'];
    }

    /**
    * Sets dnsSuffix
    *
    * @param string[]|null $dnsSuffix 舰队对应联邦的DNS后缀，开启联邦后可见
    *
    * @return $this
    */
    public function setDnsSuffix($dnsSuffix)
    {
        $this->container['dnsSuffix'] = $dnsSuffix;
        return $this;
    }

    /**
    * Gets federationExpirationTimestamp
    *  联邦到期时间戳
    *
    * @return string|null
    */
    public function getFederationExpirationTimestamp()
    {
        return $this->container['federationExpirationTimestamp'];
    }

    /**
    * Sets federationExpirationTimestamp
    *
    * @param string|null $federationExpirationTimestamp 联邦到期时间戳
    *
    * @return $this
    */
    public function setFederationExpirationTimestamp($federationExpirationTimestamp)
    {
        $this->container['federationExpirationTimestamp'] = $federationExpirationTimestamp;
        return $this;
    }

    /**
    * Gets policyId
    *  策略管理id
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略管理id
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets federationVersion
    *  舰队启用联邦的版本
    *
    * @return string|null
    */
    public function getFederationVersion()
    {
        return $this->container['federationVersion'];
    }

    /**
    * Sets federationVersion
    *
    * @param string|null $federationVersion 舰队启用联邦的版本
    *
    * @return $this
    */
    public function setFederationVersion($federationVersion)
    {
        $this->container['federationVersion'] = $federationVersion;
        return $this;
    }

    /**
    * Gets connectGatewayEndpoints
    *  集群联邦连接网关节点列表，仅当舰队开启集群联邦时有值
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ConnectEndpoint[]|null
    */
    public function getConnectGatewayEndpoints()
    {
        return $this->container['connectGatewayEndpoints'];
    }

    /**
    * Sets connectGatewayEndpoints
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ConnectEndpoint[]|null $connectGatewayEndpoints 集群联邦连接网关节点列表，仅当舰队开启集群联邦时有值
    *
    * @return $this
    */
    public function setConnectGatewayEndpoints($connectGatewayEndpoints)
    {
        $this->container['connectGatewayEndpoints'] = $connectGatewayEndpoints;
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

