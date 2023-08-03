<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListSubnetsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListSubnetsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照子网对应的ID过滤查询
    * cidr  按照子网的cidr过滤查询
    * name  按照子网的名称过滤查询
    * enableDhcp  按照子网是否开启dhcp过滤查询，取值范围：true or false
    * networkId  按照子网所属network_id过滤查询
    * ipVersion  按照子网的IP协议版本过滤查询
    * gatewayIp  按照子网的网关IP过滤查询
    * tenantId  按照子网所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string',
            'cidr' => 'string',
            'name' => 'string',
            'enableDhcp' => 'bool',
            'networkId' => 'string',
            'ipVersion' => 'int',
            'gatewayIp' => 'string',
            'tenantId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照子网对应的ID过滤查询
    * cidr  按照子网的cidr过滤查询
    * name  按照子网的名称过滤查询
    * enableDhcp  按照子网是否开启dhcp过滤查询，取值范围：true or false
    * networkId  按照子网所属network_id过滤查询
    * ipVersion  按照子网的IP协议版本过滤查询
    * gatewayIp  按照子网的网关IP过滤查询
    * tenantId  按照子网所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'cidr' => null,
        'name' => null,
        'enableDhcp' => null,
        'networkId' => null,
        'ipVersion' => 'int32',
        'gatewayIp' => null,
        'tenantId' => null
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
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照子网对应的ID过滤查询
    * cidr  按照子网的cidr过滤查询
    * name  按照子网的名称过滤查询
    * enableDhcp  按照子网是否开启dhcp过滤查询，取值范围：true or false
    * networkId  按照子网所属network_id过滤查询
    * ipVersion  按照子网的IP协议版本过滤查询
    * gatewayIp  按照子网的网关IP过滤查询
    * tenantId  按照子网所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'cidr' => 'cidr',
            'name' => 'name',
            'enableDhcp' => 'enable_dhcp',
            'networkId' => 'network_id',
            'ipVersion' => 'ip_version',
            'gatewayIp' => 'gateway_ip',
            'tenantId' => 'tenant_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照子网对应的ID过滤查询
    * cidr  按照子网的cidr过滤查询
    * name  按照子网的名称过滤查询
    * enableDhcp  按照子网是否开启dhcp过滤查询，取值范围：true or false
    * networkId  按照子网所属network_id过滤查询
    * ipVersion  按照子网的IP协议版本过滤查询
    * gatewayIp  按照子网的网关IP过滤查询
    * tenantId  按照子网所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'cidr' => 'setCidr',
            'name' => 'setName',
            'enableDhcp' => 'setEnableDhcp',
            'networkId' => 'setNetworkId',
            'ipVersion' => 'setIpVersion',
            'gatewayIp' => 'setGatewayIp',
            'tenantId' => 'setTenantId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照子网对应的ID过滤查询
    * cidr  按照子网的cidr过滤查询
    * name  按照子网的名称过滤查询
    * enableDhcp  按照子网是否开启dhcp过滤查询，取值范围：true or false
    * networkId  按照子网所属network_id过滤查询
    * ipVersion  按照子网的IP协议版本过滤查询
    * gatewayIp  按照子网的网关IP过滤查询
    * tenantId  按照子网所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'cidr' => 'getCidr',
            'name' => 'getName',
            'enableDhcp' => 'getEnableDhcp',
            'networkId' => 'getNetworkId',
            'ipVersion' => 'getIpVersion',
            'gatewayIp' => 'getGatewayIp',
            'tenantId' => 'getTenantId'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enableDhcp'] = isset($data['enableDhcp']) ? $data['enableDhcp'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['networkId']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['networkId'])) {
                $invalidProperties[] = "invalid value for 'networkId', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
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
    * Gets limit
    *  每页返回的个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询起始的资源ID，为空时查询第一页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询起始的资源ID，为空时查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  按照子网对应的ID过滤查询
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
    * @param string|null $id 按照子网对应的ID过滤查询
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets cidr
    *  按照子网的cidr过滤查询
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
    * @param string|null $cidr 按照子网的cidr过滤查询
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets name
    *  按照子网的名称过滤查询
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
    * @param string|null $name 按照子网的名称过滤查询
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enableDhcp
    *  按照子网是否开启dhcp过滤查询，取值范围：true or false
    *
    * @return bool|null
    */
    public function getEnableDhcp()
    {
        return $this->container['enableDhcp'];
    }

    /**
    * Sets enableDhcp
    *
    * @param bool|null $enableDhcp 按照子网是否开启dhcp过滤查询，取值范围：true or false
    *
    * @return $this
    */
    public function setEnableDhcp($enableDhcp)
    {
        $this->container['enableDhcp'] = $enableDhcp;
        return $this;
    }

    /**
    * Gets networkId
    *  按照子网所属network_id过滤查询
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
    * @param string|null $networkId 按照子网所属network_id过滤查询
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  按照子网的IP协议版本过滤查询
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
    * @param int|null $ipVersion 按照子网的IP协议版本过滤查询
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  按照子网的网关IP过滤查询
    *
    * @return string|null
    */
    public function getGatewayIp()
    {
        return $this->container['gatewayIp'];
    }

    /**
    * Sets gatewayIp
    *
    * @param string|null $gatewayIp 按照子网的网关IP过滤查询
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets tenantId
    *  按照子网所属的项目ID过滤查询
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
    * @param string|null $tenantId 按照子网所属的项目ID过滤查询
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
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

