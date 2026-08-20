<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResidualResources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResidualResources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * elbListenerId  **参数解释：** 负载均衡器监听器ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * elbPoolId  **参数解释：** 后端服务器组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vpcepId  **参数解释：** 终端节点ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'elbListenerId' => 'string',
            'elbPoolId' => 'string',
            'vpcepId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * elbListenerId  **参数解释：** 负载均衡器监听器ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * elbPoolId  **参数解释：** 后端服务器组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vpcepId  **参数解释：** 终端节点ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'elbListenerId' => null,
        'elbPoolId' => null,
        'vpcepId' => null
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
    * elbListenerId  **参数解释：** 负载均衡器监听器ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * elbPoolId  **参数解释：** 后端服务器组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vpcepId  **参数解释：** 终端节点ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'elbListenerId' => 'elb_listener_id',
            'elbPoolId' => 'elb_pool_id',
            'vpcepId' => 'vpcep_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * elbListenerId  **参数解释：** 负载均衡器监听器ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * elbPoolId  **参数解释：** 后端服务器组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vpcepId  **参数解释：** 终端节点ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'elbListenerId' => 'setElbListenerId',
            'elbPoolId' => 'setElbPoolId',
            'vpcepId' => 'setVpcepId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * elbListenerId  **参数解释：** 负载均衡器监听器ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * elbPoolId  **参数解释：** 后端服务器组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vpcepId  **参数解释：** 终端节点ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'elbListenerId' => 'getElbListenerId',
            'elbPoolId' => 'getElbPoolId',
            'vpcepId' => 'getVpcepId'
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
        $this->container['elbListenerId'] = isset($data['elbListenerId']) ? $data['elbListenerId'] : null;
        $this->container['elbPoolId'] = isset($data['elbPoolId']) ? $data['elbPoolId'] : null;
        $this->container['vpcepId'] = isset($data['vpcepId']) ? $data['vpcepId'] : null;
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
    * Gets elbListenerId
    *  **参数解释：** 负载均衡器监听器ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getElbListenerId()
    {
        return $this->container['elbListenerId'];
    }

    /**
    * Sets elbListenerId
    *
    * @param string|null $elbListenerId **参数解释：** 负载均衡器监听器ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setElbListenerId($elbListenerId)
    {
        $this->container['elbListenerId'] = $elbListenerId;
        return $this;
    }

    /**
    * Gets elbPoolId
    *  **参数解释：** 后端服务器组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getElbPoolId()
    {
        return $this->container['elbPoolId'];
    }

    /**
    * Sets elbPoolId
    *
    * @param string|null $elbPoolId **参数解释：** 后端服务器组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setElbPoolId($elbPoolId)
    {
        $this->container['elbPoolId'] = $elbPoolId;
        return $this;
    }

    /**
    * Gets vpcepId
    *  **参数解释：** 终端节点ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getVpcepId()
    {
        return $this->container['vpcepId'];
    }

    /**
    * Sets vpcepId
    *
    * @param string|null $vpcepId **参数解释：** 终端节点ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setVpcepId($vpcepId)
    {
        $this->container['vpcepId'] = $vpcepId;
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

