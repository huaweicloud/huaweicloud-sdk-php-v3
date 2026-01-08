<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLoadBalancerTopologyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLoadBalancerTopologyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loadbalancerId  **参数解释**：负载均衡器ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  监听器的ID。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * poolId  后端服务器组的ID。  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * listenerName  监听器的名称。  支持多值查询，查询条件格式：*listener_name=xxx&listener_name=xxx*。
    * listenerProtocol  监听器的协议。  支持多值查询，查询条件格式：*listener_protocol=xxx&listener_protocol=xxx*。
    * listenerProtocolPort  监听器的监听端口。  支持多值查询，查询条件格式：*listener_protocol_port=xxx&listener_protocol_port=xxx*。
    * poolName  后端服务器组的名称。  支持多值查询，查询条件格式：*pool_name=xxx&pool_name=xxx*。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loadbalancerId' => 'string',
            'listenerId' => 'string',
            'poolId' => 'string',
            'listenerName' => 'string',
            'listenerProtocol' => 'string',
            'listenerProtocolPort' => 'int',
            'poolName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loadbalancerId  **参数解释**：负载均衡器ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  监听器的ID。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * poolId  后端服务器组的ID。  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * listenerName  监听器的名称。  支持多值查询，查询条件格式：*listener_name=xxx&listener_name=xxx*。
    * listenerProtocol  监听器的协议。  支持多值查询，查询条件格式：*listener_protocol=xxx&listener_protocol=xxx*。
    * listenerProtocolPort  监听器的监听端口。  支持多值查询，查询条件格式：*listener_protocol_port=xxx&listener_protocol_port=xxx*。
    * poolName  后端服务器组的名称。  支持多值查询，查询条件格式：*pool_name=xxx&pool_name=xxx*。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loadbalancerId' => null,
        'listenerId' => null,
        'poolId' => null,
        'listenerName' => null,
        'listenerProtocol' => null,
        'listenerProtocolPort' => null,
        'poolName' => null
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
    * loadbalancerId  **参数解释**：负载均衡器ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  监听器的ID。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * poolId  后端服务器组的ID。  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * listenerName  监听器的名称。  支持多值查询，查询条件格式：*listener_name=xxx&listener_name=xxx*。
    * listenerProtocol  监听器的协议。  支持多值查询，查询条件格式：*listener_protocol=xxx&listener_protocol=xxx*。
    * listenerProtocolPort  监听器的监听端口。  支持多值查询，查询条件格式：*listener_protocol_port=xxx&listener_protocol_port=xxx*。
    * poolName  后端服务器组的名称。  支持多值查询，查询条件格式：*pool_name=xxx&pool_name=xxx*。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loadbalancerId' => 'loadbalancer_id',
            'listenerId' => 'listener_id',
            'poolId' => 'pool_id',
            'listenerName' => 'listener_name',
            'listenerProtocol' => 'listener_protocol',
            'listenerProtocolPort' => 'listener_protocol_port',
            'poolName' => 'pool_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loadbalancerId  **参数解释**：负载均衡器ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  监听器的ID。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * poolId  后端服务器组的ID。  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * listenerName  监听器的名称。  支持多值查询，查询条件格式：*listener_name=xxx&listener_name=xxx*。
    * listenerProtocol  监听器的协议。  支持多值查询，查询条件格式：*listener_protocol=xxx&listener_protocol=xxx*。
    * listenerProtocolPort  监听器的监听端口。  支持多值查询，查询条件格式：*listener_protocol_port=xxx&listener_protocol_port=xxx*。
    * poolName  后端服务器组的名称。  支持多值查询，查询条件格式：*pool_name=xxx&pool_name=xxx*。
    *
    * @var string[]
    */
    protected static $setters = [
            'loadbalancerId' => 'setLoadbalancerId',
            'listenerId' => 'setListenerId',
            'poolId' => 'setPoolId',
            'listenerName' => 'setListenerName',
            'listenerProtocol' => 'setListenerProtocol',
            'listenerProtocolPort' => 'setListenerProtocolPort',
            'poolName' => 'setPoolName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loadbalancerId  **参数解释**：负载均衡器ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  监听器的ID。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * poolId  后端服务器组的ID。  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    * listenerName  监听器的名称。  支持多值查询，查询条件格式：*listener_name=xxx&listener_name=xxx*。
    * listenerProtocol  监听器的协议。  支持多值查询，查询条件格式：*listener_protocol=xxx&listener_protocol=xxx*。
    * listenerProtocolPort  监听器的监听端口。  支持多值查询，查询条件格式：*listener_protocol_port=xxx&listener_protocol_port=xxx*。
    * poolName  后端服务器组的名称。  支持多值查询，查询条件格式：*pool_name=xxx&pool_name=xxx*。
    *
    * @var string[]
    */
    protected static $getters = [
            'loadbalancerId' => 'getLoadbalancerId',
            'listenerId' => 'getListenerId',
            'poolId' => 'getPoolId',
            'listenerName' => 'getListenerName',
            'listenerProtocol' => 'getListenerProtocol',
            'listenerProtocolPort' => 'getListenerProtocolPort',
            'poolName' => 'getPoolName'
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
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['listenerName'] = isset($data['listenerName']) ? $data['listenerName'] : null;
        $this->container['listenerProtocol'] = isset($data['listenerProtocol']) ? $data['listenerProtocol'] : null;
        $this->container['listenerProtocolPort'] = isset($data['listenerProtocolPort']) ? $data['listenerProtocolPort'] : null;
        $this->container['poolName'] = isset($data['poolName']) ? $data['poolName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['loadbalancerId'] === null) {
            $invalidProperties[] = "'loadbalancerId' can't be null";
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
    * Gets loadbalancerId
    *  **参数解释**：负载均衡器ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string $loadbalancerId **参数解释**：负载均衡器ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets listenerId
    *  监听器的ID。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    *
    * @return string|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string|null $listenerId 监听器的ID。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets poolId
    *  后端服务器组的ID。  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId 后端服务器组的ID。  支持多值查询，查询条件格式：*pool_id=xxx&pool_id=xxx*。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets listenerName
    *  监听器的名称。  支持多值查询，查询条件格式：*listener_name=xxx&listener_name=xxx*。
    *
    * @return string|null
    */
    public function getListenerName()
    {
        return $this->container['listenerName'];
    }

    /**
    * Sets listenerName
    *
    * @param string|null $listenerName 监听器的名称。  支持多值查询，查询条件格式：*listener_name=xxx&listener_name=xxx*。
    *
    * @return $this
    */
    public function setListenerName($listenerName)
    {
        $this->container['listenerName'] = $listenerName;
        return $this;
    }

    /**
    * Gets listenerProtocol
    *  监听器的协议。  支持多值查询，查询条件格式：*listener_protocol=xxx&listener_protocol=xxx*。
    *
    * @return string|null
    */
    public function getListenerProtocol()
    {
        return $this->container['listenerProtocol'];
    }

    /**
    * Sets listenerProtocol
    *
    * @param string|null $listenerProtocol 监听器的协议。  支持多值查询，查询条件格式：*listener_protocol=xxx&listener_protocol=xxx*。
    *
    * @return $this
    */
    public function setListenerProtocol($listenerProtocol)
    {
        $this->container['listenerProtocol'] = $listenerProtocol;
        return $this;
    }

    /**
    * Gets listenerProtocolPort
    *  监听器的监听端口。  支持多值查询，查询条件格式：*listener_protocol_port=xxx&listener_protocol_port=xxx*。
    *
    * @return int|null
    */
    public function getListenerProtocolPort()
    {
        return $this->container['listenerProtocolPort'];
    }

    /**
    * Sets listenerProtocolPort
    *
    * @param int|null $listenerProtocolPort 监听器的监听端口。  支持多值查询，查询条件格式：*listener_protocol_port=xxx&listener_protocol_port=xxx*。
    *
    * @return $this
    */
    public function setListenerProtocolPort($listenerProtocolPort)
    {
        $this->container['listenerProtocolPort'] = $listenerProtocolPort;
        return $this;
    }

    /**
    * Gets poolName
    *  后端服务器组的名称。  支持多值查询，查询条件格式：*pool_name=xxx&pool_name=xxx*。
    *
    * @return string|null
    */
    public function getPoolName()
    {
        return $this->container['poolName'];
    }

    /**
    * Sets poolName
    *
    * @param string|null $poolName 后端服务器组的名称。  支持多值查询，查询条件格式：*pool_name=xxx&pool_name=xxx*。
    *
    * @return $this
    */
    public function setPoolName($poolName)
    {
        $this->container['poolName'] = $poolName;
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

