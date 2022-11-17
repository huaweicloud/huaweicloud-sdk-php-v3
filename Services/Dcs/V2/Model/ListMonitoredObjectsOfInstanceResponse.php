<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMonitoredObjectsOfInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMonitoredObjectsOfInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * router  当前查询维度路由。如果是主维度，则数组中是自身ID。
    * children  当前查询维度子维度对象列表。当前只有维度为dcs_instance_id时才有值。 - Proxy集群有两个子维度，分别为dcs_cluster_redis_node和dcs_cluster_proxy_node。 - Cluster集群有一个子维度 dcs_cluster_proxy_node。
    * instances  当前查询维度监控对象列表。
    * dcsClusterRedisNode  Proxy集群或Cluster集群时才存在，表示集群数据节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxyNode  Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxy2Node  Redis 4.0和5.0的Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * total  主维度监控对象的总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'router' => 'string[]',
            'children' => '\HuaweiCloud\SDK\Dcs\V2\Model\DimChild[]',
            'instances' => '\HuaweiCloud\SDK\Dcs\V2\Model\InstancesMonitoredObject[]',
            'dcsClusterRedisNode' => '\HuaweiCloud\SDK\Dcs\V2\Model\ClusterRedisNodeMonitoredObject[]',
            'dcsClusterProxyNode' => '\HuaweiCloud\SDK\Dcs\V2\Model\ProxyNodeMonitoredObject[]',
            'dcsClusterProxy2Node' => '\HuaweiCloud\SDK\Dcs\V2\Model\Proxy2NodeMonitoredObject[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * router  当前查询维度路由。如果是主维度，则数组中是自身ID。
    * children  当前查询维度子维度对象列表。当前只有维度为dcs_instance_id时才有值。 - Proxy集群有两个子维度，分别为dcs_cluster_redis_node和dcs_cluster_proxy_node。 - Cluster集群有一个子维度 dcs_cluster_proxy_node。
    * instances  当前查询维度监控对象列表。
    * dcsClusterRedisNode  Proxy集群或Cluster集群时才存在，表示集群数据节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxyNode  Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxy2Node  Redis 4.0和5.0的Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * total  主维度监控对象的总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'router' => null,
        'children' => null,
        'instances' => null,
        'dcsClusterRedisNode' => null,
        'dcsClusterProxyNode' => null,
        'dcsClusterProxy2Node' => null,
        'total' => null
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
    * router  当前查询维度路由。如果是主维度，则数组中是自身ID。
    * children  当前查询维度子维度对象列表。当前只有维度为dcs_instance_id时才有值。 - Proxy集群有两个子维度，分别为dcs_cluster_redis_node和dcs_cluster_proxy_node。 - Cluster集群有一个子维度 dcs_cluster_proxy_node。
    * instances  当前查询维度监控对象列表。
    * dcsClusterRedisNode  Proxy集群或Cluster集群时才存在，表示集群数据节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxyNode  Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxy2Node  Redis 4.0和5.0的Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * total  主维度监控对象的总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'router' => 'router',
            'children' => 'children',
            'instances' => 'instances',
            'dcsClusterRedisNode' => 'dcs_cluster_redis_node',
            'dcsClusterProxyNode' => 'dcs_cluster_proxy_node',
            'dcsClusterProxy2Node' => 'dcs_cluster_proxy2_node',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * router  当前查询维度路由。如果是主维度，则数组中是自身ID。
    * children  当前查询维度子维度对象列表。当前只有维度为dcs_instance_id时才有值。 - Proxy集群有两个子维度，分别为dcs_cluster_redis_node和dcs_cluster_proxy_node。 - Cluster集群有一个子维度 dcs_cluster_proxy_node。
    * instances  当前查询维度监控对象列表。
    * dcsClusterRedisNode  Proxy集群或Cluster集群时才存在，表示集群数据节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxyNode  Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxy2Node  Redis 4.0和5.0的Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * total  主维度监控对象的总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'router' => 'setRouter',
            'children' => 'setChildren',
            'instances' => 'setInstances',
            'dcsClusterRedisNode' => 'setDcsClusterRedisNode',
            'dcsClusterProxyNode' => 'setDcsClusterProxyNode',
            'dcsClusterProxy2Node' => 'setDcsClusterProxy2Node',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * router  当前查询维度路由。如果是主维度，则数组中是自身ID。
    * children  当前查询维度子维度对象列表。当前只有维度为dcs_instance_id时才有值。 - Proxy集群有两个子维度，分别为dcs_cluster_redis_node和dcs_cluster_proxy_node。 - Cluster集群有一个子维度 dcs_cluster_proxy_node。
    * instances  当前查询维度监控对象列表。
    * dcsClusterRedisNode  Proxy集群或Cluster集群时才存在，表示集群数据节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxyNode  Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * dcsClusterProxy2Node  Redis 4.0和5.0的Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    * total  主维度监控对象的总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'router' => 'getRouter',
            'children' => 'getChildren',
            'instances' => 'getInstances',
            'dcsClusterRedisNode' => 'getDcsClusterRedisNode',
            'dcsClusterProxyNode' => 'getDcsClusterProxyNode',
            'dcsClusterProxy2Node' => 'getDcsClusterProxy2Node',
            'total' => 'getTotal'
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
        $this->container['router'] = isset($data['router']) ? $data['router'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['dcsClusterRedisNode'] = isset($data['dcsClusterRedisNode']) ? $data['dcsClusterRedisNode'] : null;
        $this->container['dcsClusterProxyNode'] = isset($data['dcsClusterProxyNode']) ? $data['dcsClusterProxyNode'] : null;
        $this->container['dcsClusterProxy2Node'] = isset($data['dcsClusterProxy2Node']) ? $data['dcsClusterProxy2Node'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets router
    *  当前查询维度路由。如果是主维度，则数组中是自身ID。
    *
    * @return string[]|null
    */
    public function getRouter()
    {
        return $this->container['router'];
    }

    /**
    * Sets router
    *
    * @param string[]|null $router 当前查询维度路由。如果是主维度，则数组中是自身ID。
    *
    * @return $this
    */
    public function setRouter($router)
    {
        $this->container['router'] = $router;
        return $this;
    }

    /**
    * Gets children
    *  当前查询维度子维度对象列表。当前只有维度为dcs_instance_id时才有值。 - Proxy集群有两个子维度，分别为dcs_cluster_redis_node和dcs_cluster_proxy_node。 - Cluster集群有一个子维度 dcs_cluster_proxy_node。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DimChild[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DimChild[]|null $children 当前查询维度子维度对象列表。当前只有维度为dcs_instance_id时才有值。 - Proxy集群有两个子维度，分别为dcs_cluster_redis_node和dcs_cluster_proxy_node。 - Cluster集群有一个子维度 dcs_cluster_proxy_node。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets instances
    *  当前查询维度监控对象列表。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\InstancesMonitoredObject[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\InstancesMonitoredObject[]|null $instances 当前查询维度监控对象列表。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets dcsClusterRedisNode
    *  Proxy集群或Cluster集群时才存在，表示集群数据节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ClusterRedisNodeMonitoredObject[]|null
    */
    public function getDcsClusterRedisNode()
    {
        return $this->container['dcsClusterRedisNode'];
    }

    /**
    * Sets dcsClusterRedisNode
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ClusterRedisNodeMonitoredObject[]|null $dcsClusterRedisNode Proxy集群或Cluster集群时才存在，表示集群数据节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    *
    * @return $this
    */
    public function setDcsClusterRedisNode($dcsClusterRedisNode)
    {
        $this->container['dcsClusterRedisNode'] = $dcsClusterRedisNode;
        return $this;
    }

    /**
    * Gets dcsClusterProxyNode
    *  Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ProxyNodeMonitoredObject[]|null
    */
    public function getDcsClusterProxyNode()
    {
        return $this->container['dcsClusterProxyNode'];
    }

    /**
    * Sets dcsClusterProxyNode
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ProxyNodeMonitoredObject[]|null $dcsClusterProxyNode Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    *
    * @return $this
    */
    public function setDcsClusterProxyNode($dcsClusterProxyNode)
    {
        $this->container['dcsClusterProxyNode'] = $dcsClusterProxyNode;
        return $this;
    }

    /**
    * Gets dcsClusterProxy2Node
    *  Redis 4.0和5.0的Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\Proxy2NodeMonitoredObject[]|null
    */
    public function getDcsClusterProxy2Node()
    {
        return $this->container['dcsClusterProxy2Node'];
    }

    /**
    * Sets dcsClusterProxy2Node
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\Proxy2NodeMonitoredObject[]|null $dcsClusterProxy2Node Redis 4.0和5.0的Proxy集群时才存在，表示集群Proxy节点维度的监控对象列表。字段名称与children的子维度对象名称相同。
    *
    * @return $this
    */
    public function setDcsClusterProxy2Node($dcsClusterProxy2Node)
    {
        $this->container['dcsClusterProxy2Node'] = $dcsClusterProxy2Node;
        return $this;
    }

    /**
    * Gets total
    *  主维度监控对象的总数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 主维度监控对象的总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

