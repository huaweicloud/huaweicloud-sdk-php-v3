<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListFirewallGroupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListFirewallGroupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  分页查询起始的资源ID，为空时查询第一页
    * limit  每页返回的个数
    * id  使用id过滤网络ACL组
    * name  使用name过滤ACL组
    * description  使用description过滤ACL组
    * ingressFirewallPolicyId  使用入方向的网络ACL策略ID过滤网络ACL组
    * egressFirewallPolicyId  使用出方向的网络ACL策略过滤查询网络ACL组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'id' => 'string[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'ingressFirewallPolicyId' => 'string',
            'egressFirewallPolicyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  分页查询起始的资源ID，为空时查询第一页
    * limit  每页返回的个数
    * id  使用id过滤网络ACL组
    * name  使用name过滤ACL组
    * description  使用description过滤ACL组
    * ingressFirewallPolicyId  使用入方向的网络ACL策略ID过滤网络ACL组
    * egressFirewallPolicyId  使用出方向的网络ACL策略过滤查询网络ACL组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'id' => null,
        'name' => null,
        'description' => null,
        'ingressFirewallPolicyId' => null,
        'egressFirewallPolicyId' => null
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
    * marker  分页查询起始的资源ID，为空时查询第一页
    * limit  每页返回的个数
    * id  使用id过滤网络ACL组
    * name  使用name过滤ACL组
    * description  使用description过滤ACL组
    * ingressFirewallPolicyId  使用入方向的网络ACL策略ID过滤网络ACL组
    * egressFirewallPolicyId  使用出方向的网络ACL策略过滤查询网络ACL组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'ingressFirewallPolicyId' => 'ingress_firewall_policy_id',
            'egressFirewallPolicyId' => 'egress_firewall_policy_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  分页查询起始的资源ID，为空时查询第一页
    * limit  每页返回的个数
    * id  使用id过滤网络ACL组
    * name  使用name过滤ACL组
    * description  使用description过滤ACL组
    * ingressFirewallPolicyId  使用入方向的网络ACL策略ID过滤网络ACL组
    * egressFirewallPolicyId  使用出方向的网络ACL策略过滤查询网络ACL组
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'ingressFirewallPolicyId' => 'setIngressFirewallPolicyId',
            'egressFirewallPolicyId' => 'setEgressFirewallPolicyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  分页查询起始的资源ID，为空时查询第一页
    * limit  每页返回的个数
    * id  使用id过滤网络ACL组
    * name  使用name过滤ACL组
    * description  使用description过滤ACL组
    * ingressFirewallPolicyId  使用入方向的网络ACL策略ID过滤网络ACL组
    * egressFirewallPolicyId  使用出方向的网络ACL策略过滤查询网络ACL组
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'ingressFirewallPolicyId' => 'getIngressFirewallPolicyId',
            'egressFirewallPolicyId' => 'getEgressFirewallPolicyId'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 2000;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ingressFirewallPolicyId'] = isset($data['ingressFirewallPolicyId']) ? $data['ingressFirewallPolicyId'] : null;
        $this->container['egressFirewallPolicyId'] = isset($data['egressFirewallPolicyId']) ? $data['egressFirewallPolicyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets id
    *  使用id过滤网络ACL组
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 使用id过滤网络ACL组
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
    *  使用name过滤ACL组
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 使用name过滤ACL组
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
    *  使用description过滤ACL组
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description 使用description过滤ACL组
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ingressFirewallPolicyId
    *  使用入方向的网络ACL策略ID过滤网络ACL组
    *
    * @return string|null
    */
    public function getIngressFirewallPolicyId()
    {
        return $this->container['ingressFirewallPolicyId'];
    }

    /**
    * Sets ingressFirewallPolicyId
    *
    * @param string|null $ingressFirewallPolicyId 使用入方向的网络ACL策略ID过滤网络ACL组
    *
    * @return $this
    */
    public function setIngressFirewallPolicyId($ingressFirewallPolicyId)
    {
        $this->container['ingressFirewallPolicyId'] = $ingressFirewallPolicyId;
        return $this;
    }

    /**
    * Gets egressFirewallPolicyId
    *  使用出方向的网络ACL策略过滤查询网络ACL组
    *
    * @return string|null
    */
    public function getEgressFirewallPolicyId()
    {
        return $this->container['egressFirewallPolicyId'];
    }

    /**
    * Sets egressFirewallPolicyId
    *
    * @param string|null $egressFirewallPolicyId 使用出方向的网络ACL策略过滤查询网络ACL组
    *
    * @return $this
    */
    public function setEgressFirewallPolicyId($egressFirewallPolicyId)
    {
        $this->container['egressFirewallPolicyId'] = $egressFirewallPolicyId;
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

