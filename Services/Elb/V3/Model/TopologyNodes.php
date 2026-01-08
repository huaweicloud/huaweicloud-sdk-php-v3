<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopologyNodes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopologyNodes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loadbalancers  **取值范围**：拓扑LB节点信息。
    * eips  **取值范围**：拓扑EIP节点信息。
    * listeners  **取值范围**：拓扑监听器节点信息。
    * pools  **取值范围**：拓扑后端服务器组节点信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loadbalancers' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerNode[]',
            'eips' => '\HuaweiCloud\SDK\Elb\V3\Model\EipNode[]',
            'listeners' => '\HuaweiCloud\SDK\Elb\V3\Model\ListenerNode[]',
            'pools' => '\HuaweiCloud\SDK\Elb\V3\Model\PoolNode[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loadbalancers  **取值范围**：拓扑LB节点信息。
    * eips  **取值范围**：拓扑EIP节点信息。
    * listeners  **取值范围**：拓扑监听器节点信息。
    * pools  **取值范围**：拓扑后端服务器组节点信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loadbalancers' => null,
        'eips' => null,
        'listeners' => null,
        'pools' => null
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
    * loadbalancers  **取值范围**：拓扑LB节点信息。
    * eips  **取值范围**：拓扑EIP节点信息。
    * listeners  **取值范围**：拓扑监听器节点信息。
    * pools  **取值范围**：拓扑后端服务器组节点信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loadbalancers' => 'loadbalancers',
            'eips' => 'eips',
            'listeners' => 'listeners',
            'pools' => 'pools'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loadbalancers  **取值范围**：拓扑LB节点信息。
    * eips  **取值范围**：拓扑EIP节点信息。
    * listeners  **取值范围**：拓扑监听器节点信息。
    * pools  **取值范围**：拓扑后端服务器组节点信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'loadbalancers' => 'setLoadbalancers',
            'eips' => 'setEips',
            'listeners' => 'setListeners',
            'pools' => 'setPools'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loadbalancers  **取值范围**：拓扑LB节点信息。
    * eips  **取值范围**：拓扑EIP节点信息。
    * listeners  **取值范围**：拓扑监听器节点信息。
    * pools  **取值范围**：拓扑后端服务器组节点信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'loadbalancers' => 'getLoadbalancers',
            'eips' => 'getEips',
            'listeners' => 'getListeners',
            'pools' => 'getPools'
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
        $this->container['loadbalancers'] = isset($data['loadbalancers']) ? $data['loadbalancers'] : null;
        $this->container['eips'] = isset($data['eips']) ? $data['eips'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['pools'] = isset($data['pools']) ? $data['pools'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['loadbalancers'] === null) {
            $invalidProperties[] = "'loadbalancers' can't be null";
        }
        if ($this->container['eips'] === null) {
            $invalidProperties[] = "'eips' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['pools'] === null) {
            $invalidProperties[] = "'pools' can't be null";
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
    * Gets loadbalancers
    *  **取值范围**：拓扑LB节点信息。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerNode[]
    */
    public function getLoadbalancers()
    {
        return $this->container['loadbalancers'];
    }

    /**
    * Sets loadbalancers
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerNode[] $loadbalancers **取值范围**：拓扑LB节点信息。
    *
    * @return $this
    */
    public function setLoadbalancers($loadbalancers)
    {
        $this->container['loadbalancers'] = $loadbalancers;
        return $this;
    }

    /**
    * Gets eips
    *  **取值范围**：拓扑EIP节点信息。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\EipNode[]
    */
    public function getEips()
    {
        return $this->container['eips'];
    }

    /**
    * Sets eips
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\EipNode[] $eips **取值范围**：拓扑EIP节点信息。
    *
    * @return $this
    */
    public function setEips($eips)
    {
        $this->container['eips'] = $eips;
        return $this;
    }

    /**
    * Gets listeners
    *  **取值范围**：拓扑监听器节点信息。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ListenerNode[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerNode[] $listeners **取值范围**：拓扑监听器节点信息。
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets pools
    *  **取值范围**：拓扑后端服务器组节点信息。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PoolNode[]
    */
    public function getPools()
    {
        return $this->container['pools'];
    }

    /**
    * Sets pools
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PoolNode[] $pools **取值范围**：拓扑后端服务器组节点信息。
    *
    * @return $this
    */
    public function setPools($pools)
    {
        $this->container['pools'] = $pools;
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

