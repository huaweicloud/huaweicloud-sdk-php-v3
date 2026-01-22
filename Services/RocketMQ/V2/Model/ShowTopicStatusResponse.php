<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTopicStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTopicStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxOffset  **参数解释**： 最大偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minOffset  **参数解释**： 最小偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 代理。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxOffset' => 'int',
            'minOffset' => 'int',
            'brokers' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ShowTopicStatusRespBrokers[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxOffset  **参数解释**： 最大偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minOffset  **参数解释**： 最小偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 代理。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxOffset' => 'int32',
        'minOffset' => 'int32',
        'brokers' => null
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
    * maxOffset  **参数解释**： 最大偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minOffset  **参数解释**： 最小偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 代理。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxOffset' => 'max_offset',
            'minOffset' => 'min_offset',
            'brokers' => 'brokers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxOffset  **参数解释**： 最大偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minOffset  **参数解释**： 最小偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 代理。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxOffset' => 'setMaxOffset',
            'minOffset' => 'setMinOffset',
            'brokers' => 'setBrokers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxOffset  **参数解释**： 最大偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * minOffset  **参数解释**： 最小偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： 代理。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxOffset' => 'getMaxOffset',
            'minOffset' => 'getMinOffset',
            'brokers' => 'getBrokers'
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
        $this->container['maxOffset'] = isset($data['maxOffset']) ? $data['maxOffset'] : null;
        $this->container['minOffset'] = isset($data['minOffset']) ? $data['minOffset'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
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
    * Gets maxOffset
    *  **参数解释**： 最大偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxOffset()
    {
        return $this->container['maxOffset'];
    }

    /**
    * Sets maxOffset
    *
    * @param int|null $maxOffset **参数解释**： 最大偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxOffset($maxOffset)
    {
        $this->container['maxOffset'] = $maxOffset;
        return $this;
    }

    /**
    * Gets minOffset
    *  **参数解释**： 最小偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getMinOffset()
    {
        return $this->container['minOffset'];
    }

    /**
    * Sets minOffset
    *
    * @param int|null $minOffset **参数解释**： 最小偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMinOffset($minOffset)
    {
        $this->container['minOffset'] = $minOffset;
        return $this;
    }

    /**
    * Gets brokers
    *  **参数解释**： 代理。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowTopicStatusRespBrokers[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowTopicStatusRespBrokers[]|null $brokers **参数解释**： 代理。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
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

