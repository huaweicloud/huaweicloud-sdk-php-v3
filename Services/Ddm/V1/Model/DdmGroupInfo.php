<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DdmGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DdmGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  组ID。
    * name  名称。
    * role  角色。
    * endpoint  组ip。
    * ipv6Endpoint  ipv6。
    * nodeCount  节点数量。
    * loadBalance  负载均衡。
    * isDefaultGroup  是否默认组。
    * extendMap  其他信息。
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'role' => 'string',
            'endpoint' => 'string',
            'ipv6Endpoint' => 'string',
            'nodeCount' => 'int',
            'loadBalance' => 'bool',
            'isDefaultGroup' => 'bool',
            'extendMap' => 'map[string,string]',
            'nodes' => '\HuaweiCloud\SDK\Ddm\V1\Model\DdmNodeInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  组ID。
    * name  名称。
    * role  角色。
    * endpoint  组ip。
    * ipv6Endpoint  ipv6。
    * nodeCount  节点数量。
    * loadBalance  负载均衡。
    * isDefaultGroup  是否默认组。
    * extendMap  其他信息。
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'role' => null,
        'endpoint' => null,
        'ipv6Endpoint' => null,
        'nodeCount' => null,
        'loadBalance' => null,
        'isDefaultGroup' => null,
        'extendMap' => null,
        'nodes' => null
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
    * id  组ID。
    * name  名称。
    * role  角色。
    * endpoint  组ip。
    * ipv6Endpoint  ipv6。
    * nodeCount  节点数量。
    * loadBalance  负载均衡。
    * isDefaultGroup  是否默认组。
    * extendMap  其他信息。
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'role' => 'role',
            'endpoint' => 'endpoint',
            'ipv6Endpoint' => 'ipv6_endpoint',
            'nodeCount' => 'node_count',
            'loadBalance' => 'load_balance',
            'isDefaultGroup' => 'is_default_group',
            'extendMap' => 'extend_map',
            'nodes' => 'nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  组ID。
    * name  名称。
    * role  角色。
    * endpoint  组ip。
    * ipv6Endpoint  ipv6。
    * nodeCount  节点数量。
    * loadBalance  负载均衡。
    * isDefaultGroup  是否默认组。
    * extendMap  其他信息。
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'role' => 'setRole',
            'endpoint' => 'setEndpoint',
            'ipv6Endpoint' => 'setIpv6Endpoint',
            'nodeCount' => 'setNodeCount',
            'loadBalance' => 'setLoadBalance',
            'isDefaultGroup' => 'setIsDefaultGroup',
            'extendMap' => 'setExtendMap',
            'nodes' => 'setNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  组ID。
    * name  名称。
    * role  角色。
    * endpoint  组ip。
    * ipv6Endpoint  ipv6。
    * nodeCount  节点数量。
    * loadBalance  负载均衡。
    * isDefaultGroup  是否默认组。
    * extendMap  其他信息。
    * nodes  节点信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'role' => 'getRole',
            'endpoint' => 'getEndpoint',
            'ipv6Endpoint' => 'getIpv6Endpoint',
            'nodeCount' => 'getNodeCount',
            'loadBalance' => 'getLoadBalance',
            'isDefaultGroup' => 'getIsDefaultGroup',
            'extendMap' => 'getExtendMap',
            'nodes' => 'getNodes'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['ipv6Endpoint'] = isset($data['ipv6Endpoint']) ? $data['ipv6Endpoint'] : null;
        $this->container['nodeCount'] = isset($data['nodeCount']) ? $data['nodeCount'] : null;
        $this->container['loadBalance'] = isset($data['loadBalance']) ? $data['loadBalance'] : null;
        $this->container['isDefaultGroup'] = isset($data['isDefaultGroup']) ? $data['isDefaultGroup'] : null;
        $this->container['extendMap'] = isset($data['extendMap']) ? $data['extendMap'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['role']) && (mb_strlen($this->container['role']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['role']) && (mb_strlen($this->container['role']) < 0)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endpoint']) && (mb_strlen($this->container['endpoint']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['endpoint']) && (mb_strlen($this->container['endpoint']) < 0)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipv6Endpoint']) && (mb_strlen($this->container['ipv6Endpoint']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ipv6Endpoint', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ipv6Endpoint']) && (mb_strlen($this->container['ipv6Endpoint']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipv6Endpoint', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeCount']) && ($this->container['nodeCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'nodeCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['nodeCount']) && ($this->container['nodeCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeCount', must be bigger than or equal to 0.";
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
    *  组ID。
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
    * @param string|null $id 组ID。
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
    *  名称。
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
    * @param string|null $name 名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets role
    *  角色。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 角色。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets endpoint
    *  组ip。
    *
    * @return string|null
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string|null $endpoint 组ip。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets ipv6Endpoint
    *  ipv6。
    *
    * @return string|null
    */
    public function getIpv6Endpoint()
    {
        return $this->container['ipv6Endpoint'];
    }

    /**
    * Sets ipv6Endpoint
    *
    * @param string|null $ipv6Endpoint ipv6。
    *
    * @return $this
    */
    public function setIpv6Endpoint($ipv6Endpoint)
    {
        $this->container['ipv6Endpoint'] = $ipv6Endpoint;
        return $this;
    }

    /**
    * Gets nodeCount
    *  节点数量。
    *
    * @return int|null
    */
    public function getNodeCount()
    {
        return $this->container['nodeCount'];
    }

    /**
    * Sets nodeCount
    *
    * @param int|null $nodeCount 节点数量。
    *
    * @return $this
    */
    public function setNodeCount($nodeCount)
    {
        $this->container['nodeCount'] = $nodeCount;
        return $this;
    }

    /**
    * Gets loadBalance
    *  负载均衡。
    *
    * @return bool|null
    */
    public function getLoadBalance()
    {
        return $this->container['loadBalance'];
    }

    /**
    * Sets loadBalance
    *
    * @param bool|null $loadBalance 负载均衡。
    *
    * @return $this
    */
    public function setLoadBalance($loadBalance)
    {
        $this->container['loadBalance'] = $loadBalance;
        return $this;
    }

    /**
    * Gets isDefaultGroup
    *  是否默认组。
    *
    * @return bool|null
    */
    public function getIsDefaultGroup()
    {
        return $this->container['isDefaultGroup'];
    }

    /**
    * Sets isDefaultGroup
    *
    * @param bool|null $isDefaultGroup 是否默认组。
    *
    * @return $this
    */
    public function setIsDefaultGroup($isDefaultGroup)
    {
        $this->container['isDefaultGroup'] = $isDefaultGroup;
        return $this;
    }

    /**
    * Gets extendMap
    *  其他信息。
    *
    * @return map[string,string]|null
    */
    public function getExtendMap()
    {
        return $this->container['extendMap'];
    }

    /**
    * Sets extendMap
    *
    * @param map[string,string]|null $extendMap 其他信息。
    *
    * @return $this
    */
    public function setExtendMap($extendMap)
    {
        $this->container['extendMap'] = $extendMap;
        return $this;
    }

    /**
    * Gets nodes
    *  节点信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\DdmNodeInfo[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\DdmNodeInfo[]|null $nodes 节点信息。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
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

