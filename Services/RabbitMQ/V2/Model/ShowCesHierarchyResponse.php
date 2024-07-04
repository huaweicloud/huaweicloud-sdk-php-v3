<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCesHierarchyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCesHierarchyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimensions  监控维度。
    * instanceIds  实例信息。
    * nodes  节点信息。
    * queues  Queue信息。
    * vhosts  Vhost信息
    * exchanges  exchange信息
    * groups  消费组信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimensions' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespDimensions[]',
            'instanceIds' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespInstanceIds[]',
            'nodes' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespNodes[]',
            'queues' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespQueues[]',
            'vhosts' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespVhosts[]',
            'exchanges' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespExchanges[]',
            'groups' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimensions  监控维度。
    * instanceIds  实例信息。
    * nodes  节点信息。
    * queues  Queue信息。
    * vhosts  Vhost信息
    * exchanges  exchange信息
    * groups  消费组信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimensions' => null,
        'instanceIds' => null,
        'nodes' => null,
        'queues' => null,
        'vhosts' => null,
        'exchanges' => null,
        'groups' => null
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
    * dimensions  监控维度。
    * instanceIds  实例信息。
    * nodes  节点信息。
    * queues  Queue信息。
    * vhosts  Vhost信息
    * exchanges  exchange信息
    * groups  消费组信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimensions' => 'dimensions',
            'instanceIds' => 'instance_ids',
            'nodes' => 'nodes',
            'queues' => 'queues',
            'vhosts' => 'vhosts',
            'exchanges' => 'exchanges',
            'groups' => 'groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimensions  监控维度。
    * instanceIds  实例信息。
    * nodes  节点信息。
    * queues  Queue信息。
    * vhosts  Vhost信息
    * exchanges  exchange信息
    * groups  消费组信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'dimensions' => 'setDimensions',
            'instanceIds' => 'setInstanceIds',
            'nodes' => 'setNodes',
            'queues' => 'setQueues',
            'vhosts' => 'setVhosts',
            'exchanges' => 'setExchanges',
            'groups' => 'setGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimensions  监控维度。
    * instanceIds  实例信息。
    * nodes  节点信息。
    * queues  Queue信息。
    * vhosts  Vhost信息
    * exchanges  exchange信息
    * groups  消费组信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'dimensions' => 'getDimensions',
            'instanceIds' => 'getInstanceIds',
            'nodes' => 'getNodes',
            'queues' => 'getQueues',
            'vhosts' => 'getVhosts',
            'exchanges' => 'getExchanges',
            'groups' => 'getGroups'
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
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['queues'] = isset($data['queues']) ? $data['queues'] : null;
        $this->container['vhosts'] = isset($data['vhosts']) ? $data['vhosts'] : null;
        $this->container['exchanges'] = isset($data['exchanges']) ? $data['exchanges'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
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
    * Gets dimensions
    *  监控维度。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespDimensions[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespDimensions[]|null $dimensions 监控维度。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets instanceIds
    *  实例信息。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespInstanceIds[]|null
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespInstanceIds[]|null $instanceIds 实例信息。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets nodes
    *  节点信息。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespNodes[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespNodes[]|null $nodes 节点信息。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets queues
    *  Queue信息。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespQueues[]|null
    */
    public function getQueues()
    {
        return $this->container['queues'];
    }

    /**
    * Sets queues
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespQueues[]|null $queues Queue信息。
    *
    * @return $this
    */
    public function setQueues($queues)
    {
        $this->container['queues'] = $queues;
        return $this;
    }

    /**
    * Gets vhosts
    *  Vhost信息
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespVhosts[]|null
    */
    public function getVhosts()
    {
        return $this->container['vhosts'];
    }

    /**
    * Sets vhosts
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespVhosts[]|null $vhosts Vhost信息
    *
    * @return $this
    */
    public function setVhosts($vhosts)
    {
        $this->container['vhosts'] = $vhosts;
        return $this;
    }

    /**
    * Gets exchanges
    *  exchange信息
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespExchanges[]|null
    */
    public function getExchanges()
    {
        return $this->container['exchanges'];
    }

    /**
    * Sets exchanges
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespExchanges[]|null $exchanges exchange信息
    *
    * @return $this
    */
    public function setExchanges($exchanges)
    {
        $this->container['exchanges'] = $exchanges;
        return $this;
    }

    /**
    * Gets groups
    *  消费组信息。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespGroups[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ShowCeshierarchyRespGroups[]|null $groups 消费组信息。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
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

