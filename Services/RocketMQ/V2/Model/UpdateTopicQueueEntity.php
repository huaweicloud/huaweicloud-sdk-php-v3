<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTopicQueueEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTopicQueueEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * broker  **参数解释**： Broker名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * readQueueNum  **参数解释**： 读队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * writeQueueNum  **参数解释**： 写队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'broker' => 'string',
            'readQueueNum' => 'float',
            'writeQueueNum' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * broker  **参数解释**： Broker名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * readQueueNum  **参数解释**： 读队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * writeQueueNum  **参数解释**： 写队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'broker' => null,
        'readQueueNum' => null,
        'writeQueueNum' => null
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
    * broker  **参数解释**： Broker名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * readQueueNum  **参数解释**： 读队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * writeQueueNum  **参数解释**： 写队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'broker' => 'broker',
            'readQueueNum' => 'read_queue_num',
            'writeQueueNum' => 'write_queue_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * broker  **参数解释**： Broker名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * readQueueNum  **参数解释**： 读队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * writeQueueNum  **参数解释**： 写队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'broker' => 'setBroker',
            'readQueueNum' => 'setReadQueueNum',
            'writeQueueNum' => 'setWriteQueueNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * broker  **参数解释**： Broker名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * readQueueNum  **参数解释**： 读队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * writeQueueNum  **参数解释**： 写队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'broker' => 'getBroker',
            'readQueueNum' => 'getReadQueueNum',
            'writeQueueNum' => 'getWriteQueueNum'
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
        $this->container['broker'] = isset($data['broker']) ? $data['broker'] : null;
        $this->container['readQueueNum'] = isset($data['readQueueNum']) ? $data['readQueueNum'] : null;
        $this->container['writeQueueNum'] = isset($data['writeQueueNum']) ? $data['writeQueueNum'] : null;
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
    * Gets broker
    *  **参数解释**： Broker名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getBroker()
    {
        return $this->container['broker'];
    }

    /**
    * Sets broker
    *
    * @param string|null $broker **参数解释**： Broker名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBroker($broker)
    {
        $this->container['broker'] = $broker;
        return $this;
    }

    /**
    * Gets readQueueNum
    *  **参数解释**： 读队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return float|null
    */
    public function getReadQueueNum()
    {
        return $this->container['readQueueNum'];
    }

    /**
    * Sets readQueueNum
    *
    * @param float|null $readQueueNum **参数解释**： 读队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setReadQueueNum($readQueueNum)
    {
        $this->container['readQueueNum'] = $readQueueNum;
        return $this;
    }

    /**
    * Gets writeQueueNum
    *  **参数解释**： 写队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return float|null
    */
    public function getWriteQueueNum()
    {
        return $this->container['writeQueueNum'];
    }

    /**
    * Sets writeQueueNum
    *
    * @param float|null $writeQueueNum **参数解释**： 写队列个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setWriteQueueNum($writeQueueNum)
    {
        $this->container['writeQueueNum'] = $writeQueueNum;
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

