<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyNodeMonitoredObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyNodeMonitoredObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dcsInstanceId  测量对象ID，即节点的ID。
    * name  测量对象名称，即节点IP。
    * dcsClusterProxyNode  维度dcs_cluster_proxy_node 的测量对象的ID。
    * status  测量对象状态，即节点状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dcsInstanceId' => 'string',
            'name' => 'string',
            'dcsClusterProxyNode' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dcsInstanceId  测量对象ID，即节点的ID。
    * name  测量对象名称，即节点IP。
    * dcsClusterProxyNode  维度dcs_cluster_proxy_node 的测量对象的ID。
    * status  测量对象状态，即节点状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dcsInstanceId' => null,
        'name' => null,
        'dcsClusterProxyNode' => null,
        'status' => null
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
    * dcsInstanceId  测量对象ID，即节点的ID。
    * name  测量对象名称，即节点IP。
    * dcsClusterProxyNode  维度dcs_cluster_proxy_node 的测量对象的ID。
    * status  测量对象状态，即节点状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dcsInstanceId' => 'dcs_instance_id',
            'name' => 'name',
            'dcsClusterProxyNode' => 'dcs_cluster_proxy_node',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dcsInstanceId  测量对象ID，即节点的ID。
    * name  测量对象名称，即节点IP。
    * dcsClusterProxyNode  维度dcs_cluster_proxy_node 的测量对象的ID。
    * status  测量对象状态，即节点状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'dcsInstanceId' => 'setDcsInstanceId',
            'name' => 'setName',
            'dcsClusterProxyNode' => 'setDcsClusterProxyNode',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dcsInstanceId  测量对象ID，即节点的ID。
    * name  测量对象名称，即节点IP。
    * dcsClusterProxyNode  维度dcs_cluster_proxy_node 的测量对象的ID。
    * status  测量对象状态，即节点状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'dcsInstanceId' => 'getDcsInstanceId',
            'name' => 'getName',
            'dcsClusterProxyNode' => 'getDcsClusterProxyNode',
            'status' => 'getStatus'
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
        $this->container['dcsInstanceId'] = isset($data['dcsInstanceId']) ? $data['dcsInstanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dcsClusterProxyNode'] = isset($data['dcsClusterProxyNode']) ? $data['dcsClusterProxyNode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets dcsInstanceId
    *  测量对象ID，即节点的ID。
    *
    * @return string|null
    */
    public function getDcsInstanceId()
    {
        return $this->container['dcsInstanceId'];
    }

    /**
    * Sets dcsInstanceId
    *
    * @param string|null $dcsInstanceId 测量对象ID，即节点的ID。
    *
    * @return $this
    */
    public function setDcsInstanceId($dcsInstanceId)
    {
        $this->container['dcsInstanceId'] = $dcsInstanceId;
        return $this;
    }

    /**
    * Gets name
    *  测量对象名称，即节点IP。
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
    * @param string|null $name 测量对象名称，即节点IP。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dcsClusterProxyNode
    *  维度dcs_cluster_proxy_node 的测量对象的ID。
    *
    * @return string|null
    */
    public function getDcsClusterProxyNode()
    {
        return $this->container['dcsClusterProxyNode'];
    }

    /**
    * Sets dcsClusterProxyNode
    *
    * @param string|null $dcsClusterProxyNode 维度dcs_cluster_proxy_node 的测量对象的ID。
    *
    * @return $this
    */
    public function setDcsClusterProxyNode($dcsClusterProxyNode)
    {
        $this->container['dcsClusterProxyNode'] = $dcsClusterProxyNode;
        return $this;
    }

    /**
    * Gets status
    *  测量对象状态，即节点状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 测量对象状态，即节点状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

