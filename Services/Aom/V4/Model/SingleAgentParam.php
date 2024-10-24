<?php

namespace HuaweiCloud\SDK\Aom\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SingleAgentParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SingleAgentParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  agent ID唯一值。
    * innerIp  主机ip。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'innerIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  agent ID唯一值。
    * innerIp  主机ip。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'innerIp' => null
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
    * agentId  agent ID唯一值。
    * innerIp  主机ip。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'innerIp' => 'inner_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  agent ID唯一值。
    * innerIp  主机ip。
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'innerIp' => 'setInnerIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  agent ID唯一值。
    * innerIp  主机ip。
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'innerIp' => 'getInnerIp'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['innerIp'] = isset($data['innerIp']) ? $data['innerIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['agentId'] === null) {
            $invalidProperties[] = "'agentId' can't be null";
        }
        if ($this->container['innerIp'] === null) {
            $invalidProperties[] = "'innerIp' can't be null";
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
    * Gets agentId
    *  agent ID唯一值。
    *
    * @return string
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string $agentId agent ID唯一值。
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets innerIp
    *  主机ip。
    *
    * @return string
    */
    public function getInnerIp()
    {
        return $this->container['innerIp'];
    }

    /**
    * Sets innerIp
    *
    * @param string $innerIp 主机ip。
    *
    * @return $this
    */
    public function setInnerIp($innerIp)
    {
        $this->container['innerIp'] = $innerIp;
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

