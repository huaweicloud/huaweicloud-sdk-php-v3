<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortRange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startPort  **参数解释**：起始端口。  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    * endPort  **参数解释**：结束端口，需大于等于起始端口  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startPort' => 'int',
            'endPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startPort  **参数解释**：起始端口。  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    * endPort  **参数解释**：结束端口，需大于等于起始端口  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startPort' => 'int32',
        'endPort' => 'int32'
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
    * startPort  **参数解释**：起始端口。  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    * endPort  **参数解释**：结束端口，需大于等于起始端口  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startPort' => 'start_port',
            'endPort' => 'end_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startPort  **参数解释**：起始端口。  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    * endPort  **参数解释**：结束端口，需大于等于起始端口  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'startPort' => 'setStartPort',
            'endPort' => 'setEndPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startPort  **参数解释**：起始端口。  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    * endPort  **参数解释**：结束端口，需大于等于起始端口  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'startPort' => 'getStartPort',
            'endPort' => 'getEndPort'
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
        $this->container['startPort'] = isset($data['startPort']) ? $data['startPort'] : null;
        $this->container['endPort'] = isset($data['endPort']) ? $data['endPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['startPort']) && ($this->container['startPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'startPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['startPort']) && ($this->container['startPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'startPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endPort']) && ($this->container['endPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'endPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['endPort']) && ($this->container['endPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'endPort', must be bigger than or equal to 1.";
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
    * Gets startPort
    *  **参数解释**：起始端口。  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @return int|null
    */
    public function getStartPort()
    {
        return $this->container['startPort'];
    }

    /**
    * Sets startPort
    *
    * @param int|null $startPort **参数解释**：起始端口。  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @return $this
    */
    public function setStartPort($startPort)
    {
        $this->container['startPort'] = $startPort;
        return $this;
    }

    /**
    * Gets endPort
    *  **参数解释**：结束端口，需大于等于起始端口  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @return int|null
    */
    public function getEndPort()
    {
        return $this->container['endPort'];
    }

    /**
    * Sets endPort
    *
    * @param int|null $endPort **参数解释**：结束端口，需大于等于起始端口  **约束限制**：不涉及  **取值范围**：1-65535  **默认取值：不涉及
    *
    * @return $this
    */
    public function setEndPort($endPort)
    {
        $this->container['endPort'] = $endPort;
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

