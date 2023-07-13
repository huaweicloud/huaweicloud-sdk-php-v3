<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListSecurityGroupRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListSecurityGroupRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照安全组规则对应的id过滤查询结果
    * direction  按照安全组规则的方向过滤查询结果，支持ingress和egress进行过滤
    * protocol  按照安全组规则的IP协议过滤查询结果
    * ethertype  按照网络类型过滤查询结果，支持IPv4或者IPv6
    * description  按照安全组规则的描述过滤查询结果
    * remoteIpPrefix  按照与此安全组规则匹配的远端IP网段过滤查询结果
    * remoteGroupId  按照与此安全组规则关联的远端安全组ID过滤查询结果
    * securityGroupId  按照与此安全组规则所属的安全组ID过滤查询结果
    * portRangeMax  按照最大端口过滤查询结果
    * portRangeMin  按照最小端口过滤查询结果
    * tenantId  按照安全组规则所属的项目ID过滤查询结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string',
            'direction' => 'string',
            'protocol' => 'string',
            'ethertype' => 'string',
            'description' => 'string',
            'remoteIpPrefix' => 'string',
            'remoteGroupId' => 'string',
            'securityGroupId' => 'string',
            'portRangeMax' => 'string',
            'portRangeMin' => 'string',
            'tenantId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照安全组规则对应的id过滤查询结果
    * direction  按照安全组规则的方向过滤查询结果，支持ingress和egress进行过滤
    * protocol  按照安全组规则的IP协议过滤查询结果
    * ethertype  按照网络类型过滤查询结果，支持IPv4或者IPv6
    * description  按照安全组规则的描述过滤查询结果
    * remoteIpPrefix  按照与此安全组规则匹配的远端IP网段过滤查询结果
    * remoteGroupId  按照与此安全组规则关联的远端安全组ID过滤查询结果
    * securityGroupId  按照与此安全组规则所属的安全组ID过滤查询结果
    * portRangeMax  按照最大端口过滤查询结果
    * portRangeMin  按照最小端口过滤查询结果
    * tenantId  按照安全组规则所属的项目ID过滤查询结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'direction' => null,
        'protocol' => null,
        'ethertype' => null,
        'description' => null,
        'remoteIpPrefix' => null,
        'remoteGroupId' => null,
        'securityGroupId' => null,
        'portRangeMax' => null,
        'portRangeMin' => null,
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
    * id  按照安全组规则对应的id过滤查询结果
    * direction  按照安全组规则的方向过滤查询结果，支持ingress和egress进行过滤
    * protocol  按照安全组规则的IP协议过滤查询结果
    * ethertype  按照网络类型过滤查询结果，支持IPv4或者IPv6
    * description  按照安全组规则的描述过滤查询结果
    * remoteIpPrefix  按照与此安全组规则匹配的远端IP网段过滤查询结果
    * remoteGroupId  按照与此安全组规则关联的远端安全组ID过滤查询结果
    * securityGroupId  按照与此安全组规则所属的安全组ID过滤查询结果
    * portRangeMax  按照最大端口过滤查询结果
    * portRangeMin  按照最小端口过滤查询结果
    * tenantId  按照安全组规则所属的项目ID过滤查询结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'direction' => 'direction',
            'protocol' => 'protocol',
            'ethertype' => 'ethertype',
            'description' => 'description',
            'remoteIpPrefix' => 'remote_ip_prefix',
            'remoteGroupId' => 'remote_group_id',
            'securityGroupId' => 'security_group_id',
            'portRangeMax' => 'port_range_max',
            'portRangeMin' => 'port_range_min',
            'tenantId' => 'tenant_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照安全组规则对应的id过滤查询结果
    * direction  按照安全组规则的方向过滤查询结果，支持ingress和egress进行过滤
    * protocol  按照安全组规则的IP协议过滤查询结果
    * ethertype  按照网络类型过滤查询结果，支持IPv4或者IPv6
    * description  按照安全组规则的描述过滤查询结果
    * remoteIpPrefix  按照与此安全组规则匹配的远端IP网段过滤查询结果
    * remoteGroupId  按照与此安全组规则关联的远端安全组ID过滤查询结果
    * securityGroupId  按照与此安全组规则所属的安全组ID过滤查询结果
    * portRangeMax  按照最大端口过滤查询结果
    * portRangeMin  按照最小端口过滤查询结果
    * tenantId  按照安全组规则所属的项目ID过滤查询结果
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'direction' => 'setDirection',
            'protocol' => 'setProtocol',
            'ethertype' => 'setEthertype',
            'description' => 'setDescription',
            'remoteIpPrefix' => 'setRemoteIpPrefix',
            'remoteGroupId' => 'setRemoteGroupId',
            'securityGroupId' => 'setSecurityGroupId',
            'portRangeMax' => 'setPortRangeMax',
            'portRangeMin' => 'setPortRangeMin',
            'tenantId' => 'setTenantId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照安全组规则对应的id过滤查询结果
    * direction  按照安全组规则的方向过滤查询结果，支持ingress和egress进行过滤
    * protocol  按照安全组规则的IP协议过滤查询结果
    * ethertype  按照网络类型过滤查询结果，支持IPv4或者IPv6
    * description  按照安全组规则的描述过滤查询结果
    * remoteIpPrefix  按照与此安全组规则匹配的远端IP网段过滤查询结果
    * remoteGroupId  按照与此安全组规则关联的远端安全组ID过滤查询结果
    * securityGroupId  按照与此安全组规则所属的安全组ID过滤查询结果
    * portRangeMax  按照最大端口过滤查询结果
    * portRangeMin  按照最小端口过滤查询结果
    * tenantId  按照安全组规则所属的项目ID过滤查询结果
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'direction' => 'getDirection',
            'protocol' => 'getProtocol',
            'ethertype' => 'getEthertype',
            'description' => 'getDescription',
            'remoteIpPrefix' => 'getRemoteIpPrefix',
            'remoteGroupId' => 'getRemoteGroupId',
            'securityGroupId' => 'getSecurityGroupId',
            'portRangeMax' => 'getPortRangeMax',
            'portRangeMin' => 'getPortRangeMin',
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 2000;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ethertype'] = isset($data['ethertype']) ? $data['ethertype'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['remoteIpPrefix'] = isset($data['remoteIpPrefix']) ? $data['remoteIpPrefix'] : null;
        $this->container['remoteGroupId'] = isset($data['remoteGroupId']) ? $data['remoteGroupId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['portRangeMax'] = isset($data['portRangeMax']) ? $data['portRangeMax'] : null;
        $this->container['portRangeMin'] = isset($data['portRangeMin']) ? $data['portRangeMin'] : null;
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
    *  按照安全组规则对应的id过滤查询结果
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
    * @param string|null $id 按照安全组规则对应的id过滤查询结果
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets direction
    *  按照安全组规则的方向过滤查询结果，支持ingress和egress进行过滤
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 按照安全组规则的方向过滤查询结果，支持ingress和egress进行过滤
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets protocol
    *  按照安全组规则的IP协议过滤查询结果
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 按照安全组规则的IP协议过滤查询结果
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets ethertype
    *  按照网络类型过滤查询结果，支持IPv4或者IPv6
    *
    * @return string|null
    */
    public function getEthertype()
    {
        return $this->container['ethertype'];
    }

    /**
    * Sets ethertype
    *
    * @param string|null $ethertype 按照网络类型过滤查询结果，支持IPv4或者IPv6
    *
    * @return $this
    */
    public function setEthertype($ethertype)
    {
        $this->container['ethertype'] = $ethertype;
        return $this;
    }

    /**
    * Gets description
    *  按照安全组规则的描述过滤查询结果
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
    * @param string|null $description 按照安全组规则的描述过滤查询结果
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets remoteIpPrefix
    *  按照与此安全组规则匹配的远端IP网段过滤查询结果
    *
    * @return string|null
    */
    public function getRemoteIpPrefix()
    {
        return $this->container['remoteIpPrefix'];
    }

    /**
    * Sets remoteIpPrefix
    *
    * @param string|null $remoteIpPrefix 按照与此安全组规则匹配的远端IP网段过滤查询结果
    *
    * @return $this
    */
    public function setRemoteIpPrefix($remoteIpPrefix)
    {
        $this->container['remoteIpPrefix'] = $remoteIpPrefix;
        return $this;
    }

    /**
    * Gets remoteGroupId
    *  按照与此安全组规则关联的远端安全组ID过滤查询结果
    *
    * @return string|null
    */
    public function getRemoteGroupId()
    {
        return $this->container['remoteGroupId'];
    }

    /**
    * Sets remoteGroupId
    *
    * @param string|null $remoteGroupId 按照与此安全组规则关联的远端安全组ID过滤查询结果
    *
    * @return $this
    */
    public function setRemoteGroupId($remoteGroupId)
    {
        $this->container['remoteGroupId'] = $remoteGroupId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  按照与此安全组规则所属的安全组ID过滤查询结果
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 按照与此安全组规则所属的安全组ID过滤查询结果
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets portRangeMax
    *  按照最大端口过滤查询结果
    *
    * @return string|null
    */
    public function getPortRangeMax()
    {
        return $this->container['portRangeMax'];
    }

    /**
    * Sets portRangeMax
    *
    * @param string|null $portRangeMax 按照最大端口过滤查询结果
    *
    * @return $this
    */
    public function setPortRangeMax($portRangeMax)
    {
        $this->container['portRangeMax'] = $portRangeMax;
        return $this;
    }

    /**
    * Gets portRangeMin
    *  按照最小端口过滤查询结果
    *
    * @return string|null
    */
    public function getPortRangeMin()
    {
        return $this->container['portRangeMin'];
    }

    /**
    * Sets portRangeMin
    *
    * @param string|null $portRangeMin 按照最小端口过滤查询结果
    *
    * @return $this
    */
    public function setPortRangeMin($portRangeMin)
    {
        $this->container['portRangeMin'] = $portRangeMin;
        return $this;
    }

    /**
    * Gets tenantId
    *  按照安全组规则所属的项目ID过滤查询结果
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
    * @param string|null $tenantId 按照安全组规则所属的项目ID过滤查询结果
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

