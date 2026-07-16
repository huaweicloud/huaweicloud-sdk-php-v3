<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolMetadataUpdateAnnotations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolMetadataUpdate_annotations';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osModelartsDescription  **参数解释**：资源池描述信息，用于说明资源池用于某种指定场景。不能包含特殊字符!<>=&\"'。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期创建和变更的时候需要传递该参数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osModelartsDescription' => 'string',
            'osModelartsOrderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osModelartsDescription  **参数解释**：资源池描述信息，用于说明资源池用于某种指定场景。不能包含特殊字符!<>=&\"'。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期创建和变更的时候需要传递该参数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osModelartsDescription' => null,
        'osModelartsOrderId' => null
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
    * osModelartsDescription  **参数解释**：资源池描述信息，用于说明资源池用于某种指定场景。不能包含特殊字符!<>=&\"'。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期创建和变更的时候需要传递该参数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osModelartsDescription' => 'os.modelarts/description',
            'osModelartsOrderId' => 'os.modelarts/order.id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osModelartsDescription  **参数解释**：资源池描述信息，用于说明资源池用于某种指定场景。不能包含特殊字符!<>=&\"'。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期创建和变更的时候需要传递该参数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'osModelartsDescription' => 'setOsModelartsDescription',
            'osModelartsOrderId' => 'setOsModelartsOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osModelartsDescription  **参数解释**：资源池描述信息，用于说明资源池用于某种指定场景。不能包含特殊字符!<>=&\"'。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * osModelartsOrderId  **参数解释**：订单id，包周期创建和变更的时候需要传递该参数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'osModelartsDescription' => 'getOsModelartsDescription',
            'osModelartsOrderId' => 'getOsModelartsOrderId'
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
        $this->container['osModelartsDescription'] = isset($data['osModelartsDescription']) ? $data['osModelartsDescription'] : null;
        $this->container['osModelartsOrderId'] = isset($data['osModelartsOrderId']) ? $data['osModelartsOrderId'] : null;
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
    * Gets osModelartsDescription
    *  **参数解释**：资源池描述信息，用于说明资源池用于某种指定场景。不能包含特殊字符!<>=&\"'。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsDescription()
    {
        return $this->container['osModelartsDescription'];
    }

    /**
    * Sets osModelartsDescription
    *
    * @param string|null $osModelartsDescription **参数解释**：资源池描述信息，用于说明资源池用于某种指定场景。不能包含特殊字符!<>=&\"'。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsDescription($osModelartsDescription)
    {
        $this->container['osModelartsDescription'] = $osModelartsDescription;
        return $this;
    }

    /**
    * Gets osModelartsOrderId
    *  **参数解释**：订单id，包周期创建和变更的时候需要传递该参数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOsModelartsOrderId()
    {
        return $this->container['osModelartsOrderId'];
    }

    /**
    * Sets osModelartsOrderId
    *
    * @param string|null $osModelartsOrderId **参数解释**：订单id，包周期创建和变更的时候需要传递该参数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOsModelartsOrderId($osModelartsOrderId)
    {
        $this->container['osModelartsOrderId'] = $osModelartsOrderId;
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

