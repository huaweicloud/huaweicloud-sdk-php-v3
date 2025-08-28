<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancerStatusMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancerStatusMember';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * provisioningStatus  **参数解释**：后端服务器配置状态。  **取值范围**：ACTIVE表示使用中。
    * address  **参数解释**：后端服务器的IP地址。  **取值范围**：不涉及
    * protocolPort  **参数解释**：后端服务器的端口号。  **取值范围**：1-65535
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：后端服务器的操作状态。  **取值范围**： - ONLINE：后端服务器正常运行。 - NO_MONITOR：后端服务器健康检查未开启。 - DISABLED：后端服务器不可用。所属负载均衡器或后端服务器组或该后端服务器的admin_state_up=false时，会出现该状态。注意该状态仅在当前接口中返回。 - OFFLINE：关联ECS已下线。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'provisioningStatus' => 'string',
            'address' => 'string',
            'protocolPort' => 'int',
            'id' => 'string',
            'operatingStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * provisioningStatus  **参数解释**：后端服务器配置状态。  **取值范围**：ACTIVE表示使用中。
    * address  **参数解释**：后端服务器的IP地址。  **取值范围**：不涉及
    * protocolPort  **参数解释**：后端服务器的端口号。  **取值范围**：1-65535
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：后端服务器的操作状态。  **取值范围**： - ONLINE：后端服务器正常运行。 - NO_MONITOR：后端服务器健康检查未开启。 - DISABLED：后端服务器不可用。所属负载均衡器或后端服务器组或该后端服务器的admin_state_up=false时，会出现该状态。注意该状态仅在当前接口中返回。 - OFFLINE：关联ECS已下线。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'provisioningStatus' => null,
        'address' => null,
        'protocolPort' => 'int32',
        'id' => null,
        'operatingStatus' => null
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
    * provisioningStatus  **参数解释**：后端服务器配置状态。  **取值范围**：ACTIVE表示使用中。
    * address  **参数解释**：后端服务器的IP地址。  **取值范围**：不涉及
    * protocolPort  **参数解释**：后端服务器的端口号。  **取值范围**：1-65535
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：后端服务器的操作状态。  **取值范围**： - ONLINE：后端服务器正常运行。 - NO_MONITOR：后端服务器健康检查未开启。 - DISABLED：后端服务器不可用。所属负载均衡器或后端服务器组或该后端服务器的admin_state_up=false时，会出现该状态。注意该状态仅在当前接口中返回。 - OFFLINE：关联ECS已下线。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'provisioningStatus' => 'provisioning_status',
            'address' => 'address',
            'protocolPort' => 'protocol_port',
            'id' => 'id',
            'operatingStatus' => 'operating_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * provisioningStatus  **参数解释**：后端服务器配置状态。  **取值范围**：ACTIVE表示使用中。
    * address  **参数解释**：后端服务器的IP地址。  **取值范围**：不涉及
    * protocolPort  **参数解释**：后端服务器的端口号。  **取值范围**：1-65535
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：后端服务器的操作状态。  **取值范围**： - ONLINE：后端服务器正常运行。 - NO_MONITOR：后端服务器健康检查未开启。 - DISABLED：后端服务器不可用。所属负载均衡器或后端服务器组或该后端服务器的admin_state_up=false时，会出现该状态。注意该状态仅在当前接口中返回。 - OFFLINE：关联ECS已下线。
    *
    * @var string[]
    */
    protected static $setters = [
            'provisioningStatus' => 'setProvisioningStatus',
            'address' => 'setAddress',
            'protocolPort' => 'setProtocolPort',
            'id' => 'setId',
            'operatingStatus' => 'setOperatingStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * provisioningStatus  **参数解释**：后端服务器配置状态。  **取值范围**：ACTIVE表示使用中。
    * address  **参数解释**：后端服务器的IP地址。  **取值范围**：不涉及
    * protocolPort  **参数解释**：后端服务器的端口号。  **取值范围**：1-65535
    * id  **参数解释**：后端服务器ID。  **取值范围**：不涉及
    * operatingStatus  **参数解释**：后端服务器的操作状态。  **取值范围**： - ONLINE：后端服务器正常运行。 - NO_MONITOR：后端服务器健康检查未开启。 - DISABLED：后端服务器不可用。所属负载均衡器或后端服务器组或该后端服务器的admin_state_up=false时，会出现该状态。注意该状态仅在当前接口中返回。 - OFFLINE：关联ECS已下线。
    *
    * @var string[]
    */
    protected static $getters = [
            'provisioningStatus' => 'getProvisioningStatus',
            'address' => 'getAddress',
            'protocolPort' => 'getProtocolPort',
            'id' => 'getId',
            'operatingStatus' => 'getOperatingStatus'
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
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
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
    * Gets provisioningStatus
    *  **参数解释**：后端服务器配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @return string|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string|null $provisioningStatus **参数解释**：后端服务器配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets address
    *  **参数解释**：后端服务器的IP地址。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address **参数解释**：后端服务器的IP地址。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets protocolPort
    *  **参数解释**：后端服务器的端口号。  **取值范围**：1-65535
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort **参数解释**：后端服务器的端口号。  **取值范围**：1-65535
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：后端服务器ID。  **取值范围**：不涉及
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
    * @param string|null $id **参数解释**：后端服务器ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  **参数解释**：后端服务器的操作状态。  **取值范围**： - ONLINE：后端服务器正常运行。 - NO_MONITOR：后端服务器健康检查未开启。 - DISABLED：后端服务器不可用。所属负载均衡器或后端服务器组或该后端服务器的admin_state_up=false时，会出现该状态。注意该状态仅在当前接口中返回。 - OFFLINE：关联ECS已下线。
    *
    * @return string|null
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string|null $operatingStatus **参数解释**：后端服务器的操作状态。  **取值范围**： - ONLINE：后端服务器正常运行。 - NO_MONITOR：后端服务器健康检查未开启。 - DISABLED：后端服务器不可用。所属负载均衡器或后端服务器组或该后端服务器的admin_state_up=false时，会出现该状态。注意该状态仅在当前接口中返回。 - OFFLINE：关联ECS已下线。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
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

