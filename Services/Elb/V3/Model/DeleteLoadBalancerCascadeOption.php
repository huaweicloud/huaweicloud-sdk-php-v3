<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteLoadBalancerCascadeOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteLoadBalancerCascadeOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unboundedPool  **参数解释**：是否删除关联的后端服务器组。  **约束限制**： - 共享型负载均衡器仅支持传参为true。 [- 若开启多挂特性，且后端服务器组关联了多个LB，则无论传入何值，都不会删除后端服务器组。](tag: hws,hws_hk)  **取值范围**： - true：删除该后端服务器组。 - false：仅解绑后端服务器组，不删除。  **默认取值**：true
    * publicIp  **参数解释**：删除负载均衡器后是否删除关联的公网IP。  **约束限制**：不涉及          **取值范围**： - true：删除关联的EIP。 - false：仅解绑关联的EIP，不删除。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unboundedPool' => 'bool',
            'publicIp' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unboundedPool  **参数解释**：是否删除关联的后端服务器组。  **约束限制**： - 共享型负载均衡器仅支持传参为true。 [- 若开启多挂特性，且后端服务器组关联了多个LB，则无论传入何值，都不会删除后端服务器组。](tag: hws,hws_hk)  **取值范围**： - true：删除该后端服务器组。 - false：仅解绑后端服务器组，不删除。  **默认取值**：true
    * publicIp  **参数解释**：删除负载均衡器后是否删除关联的公网IP。  **约束限制**：不涉及          **取值范围**： - true：删除关联的EIP。 - false：仅解绑关联的EIP，不删除。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unboundedPool' => null,
        'publicIp' => null
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
    * unboundedPool  **参数解释**：是否删除关联的后端服务器组。  **约束限制**： - 共享型负载均衡器仅支持传参为true。 [- 若开启多挂特性，且后端服务器组关联了多个LB，则无论传入何值，都不会删除后端服务器组。](tag: hws,hws_hk)  **取值范围**： - true：删除该后端服务器组。 - false：仅解绑后端服务器组，不删除。  **默认取值**：true
    * publicIp  **参数解释**：删除负载均衡器后是否删除关联的公网IP。  **约束限制**：不涉及          **取值范围**： - true：删除关联的EIP。 - false：仅解绑关联的EIP，不删除。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unboundedPool' => 'unbounded_pool',
            'publicIp' => 'public_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unboundedPool  **参数解释**：是否删除关联的后端服务器组。  **约束限制**： - 共享型负载均衡器仅支持传参为true。 [- 若开启多挂特性，且后端服务器组关联了多个LB，则无论传入何值，都不会删除后端服务器组。](tag: hws,hws_hk)  **取值范围**： - true：删除该后端服务器组。 - false：仅解绑后端服务器组，不删除。  **默认取值**：true
    * publicIp  **参数解释**：删除负载均衡器后是否删除关联的公网IP。  **约束限制**：不涉及          **取值范围**： - true：删除关联的EIP。 - false：仅解绑关联的EIP，不删除。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $setters = [
            'unboundedPool' => 'setUnboundedPool',
            'publicIp' => 'setPublicIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unboundedPool  **参数解释**：是否删除关联的后端服务器组。  **约束限制**： - 共享型负载均衡器仅支持传参为true。 [- 若开启多挂特性，且后端服务器组关联了多个LB，则无论传入何值，都不会删除后端服务器组。](tag: hws,hws_hk)  **取值范围**： - true：删除该后端服务器组。 - false：仅解绑后端服务器组，不删除。  **默认取值**：true
    * publicIp  **参数解释**：删除负载均衡器后是否删除关联的公网IP。  **约束限制**：不涉及          **取值范围**： - true：删除关联的EIP。 - false：仅解绑关联的EIP，不删除。  **默认取值**：false
    *
    * @var string[]
    */
    protected static $getters = [
            'unboundedPool' => 'getUnboundedPool',
            'publicIp' => 'getPublicIp'
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
        $this->container['unboundedPool'] = isset($data['unboundedPool']) ? $data['unboundedPool'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
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
    * Gets unboundedPool
    *  **参数解释**：是否删除关联的后端服务器组。  **约束限制**： - 共享型负载均衡器仅支持传参为true。 [- 若开启多挂特性，且后端服务器组关联了多个LB，则无论传入何值，都不会删除后端服务器组。](tag: hws,hws_hk)  **取值范围**： - true：删除该后端服务器组。 - false：仅解绑后端服务器组，不删除。  **默认取值**：true
    *
    * @return bool|null
    */
    public function getUnboundedPool()
    {
        return $this->container['unboundedPool'];
    }

    /**
    * Sets unboundedPool
    *
    * @param bool|null $unboundedPool **参数解释**：是否删除关联的后端服务器组。  **约束限制**： - 共享型负载均衡器仅支持传参为true。 [- 若开启多挂特性，且后端服务器组关联了多个LB，则无论传入何值，都不会删除后端服务器组。](tag: hws,hws_hk)  **取值范围**： - true：删除该后端服务器组。 - false：仅解绑后端服务器组，不删除。  **默认取值**：true
    *
    * @return $this
    */
    public function setUnboundedPool($unboundedPool)
    {
        $this->container['unboundedPool'] = $unboundedPool;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**：删除负载均衡器后是否删除关联的公网IP。  **约束限制**：不涉及          **取值范围**： - true：删除关联的EIP。 - false：仅解绑关联的EIP，不删除。  **默认取值**：false
    *
    * @return bool|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param bool|null $publicIp **参数解释**：删除负载均衡器后是否删除关联的公网IP。  **约束限制**：不涉及          **取值范围**： - true：删除关联的EIP。 - false：仅解绑关联的EIP，不删除。  **默认取值**：false
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
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

