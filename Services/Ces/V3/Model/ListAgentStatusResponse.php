<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAgentStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAgentStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentStatus  **参数解释**: agent插件状态列表 **取值范围**: 数组长度为[1,2000]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentStatus' => '\HuaweiCloud\SDK\Ces\V3\Model\AgentStatusInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentStatus  **参数解释**: agent插件状态列表 **取值范围**: 数组长度为[1,2000]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentStatus' => null
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
    * agentStatus  **参数解释**: agent插件状态列表 **取值范围**: 数组长度为[1,2000]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentStatus' => 'agent_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentStatus  **参数解释**: agent插件状态列表 **取值范围**: 数组长度为[1,2000]
    *
    * @var string[]
    */
    protected static $setters = [
            'agentStatus' => 'setAgentStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentStatus  **参数解释**: agent插件状态列表 **取值范围**: 数组长度为[1,2000]
    *
    * @var string[]
    */
    protected static $getters = [
            'agentStatus' => 'getAgentStatus'
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
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
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
    * Gets agentStatus
    *  **参数解释**: agent插件状态列表 **取值范围**: 数组长度为[1,2000]
    *
    * @return \HuaweiCloud\SDK\Ces\V3\Model\AgentStatusInfo[]|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param \HuaweiCloud\SDK\Ces\V3\Model\AgentStatusInfo[]|null $agentStatus **参数解释**: agent插件状态列表 **取值范围**: 数组长度为[1,2000]
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
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

