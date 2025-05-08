<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Brokers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Brokers';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * brokerName  **参数解释**： Topic关联代理名称。 **取值范围**： 不涉及。
    * queues  **参数解释**： 关联代理的队列详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'brokerName' => 'string',
            'queues' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\Queue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * brokerName  **参数解释**： Topic关联代理名称。 **取值范围**： 不涉及。
    * queues  **参数解释**： 关联代理的队列详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'brokerName' => null,
        'queues' => null
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
    * brokerName  **参数解释**： Topic关联代理名称。 **取值范围**： 不涉及。
    * queues  **参数解释**： 关联代理的队列详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'brokerName' => 'broker_name',
            'queues' => 'queues'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * brokerName  **参数解释**： Topic关联代理名称。 **取值范围**： 不涉及。
    * queues  **参数解释**： 关联代理的队列详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'brokerName' => 'setBrokerName',
            'queues' => 'setQueues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * brokerName  **参数解释**： Topic关联代理名称。 **取值范围**： 不涉及。
    * queues  **参数解释**： 关联代理的队列详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'brokerName' => 'getBrokerName',
            'queues' => 'getQueues'
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
        $this->container['brokerName'] = isset($data['brokerName']) ? $data['brokerName'] : null;
        $this->container['queues'] = isset($data['queues']) ? $data['queues'] : null;
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
    * Gets brokerName
    *  **参数解释**： Topic关联代理名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBrokerName()
    {
        return $this->container['brokerName'];
    }

    /**
    * Sets brokerName
    *
    * @param string|null $brokerName **参数解释**： Topic关联代理名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerName($brokerName)
    {
        $this->container['brokerName'] = $brokerName;
        return $this;
    }

    /**
    * Gets queues
    *  **参数解释**： 关联代理的队列详情。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\Queue[]|null
    */
    public function getQueues()
    {
        return $this->container['queues'];
    }

    /**
    * Sets queues
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\Queue[]|null $queues **参数解释**： 关联代理的队列详情。
    *
    * @return $this
    */
    public function setQueues($queues)
    {
        $this->container['queues'] = $queues;
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

