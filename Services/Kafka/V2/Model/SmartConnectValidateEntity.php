<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartConnectValidateEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartConnectValidateEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * task  task
    * type  **参数解释**： Smart Connect任务类型。 **取值范围**： - OBS_SINK：转储。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'task' => '\HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSourceConfig',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * task  task
    * type  **参数解释**： Smart Connect任务类型。 **取值范围**： - OBS_SINK：转储。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'task' => null,
        'type' => null
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
    * task  task
    * type  **参数解释**： Smart Connect任务类型。 **取值范围**： - OBS_SINK：转储。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'task' => 'task',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * task  task
    * type  **参数解释**： Smart Connect任务类型。 **取值范围**： - OBS_SINK：转储。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @var string[]
    */
    protected static $setters = [
            'task' => 'setTask',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * task  task
    * type  **参数解释**： Smart Connect任务类型。 **取值范围**： - OBS_SINK：转储。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @var string[]
    */
    protected static $getters = [
            'task' => 'getTask',
            'type' => 'getType'
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
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets task
    *  task
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSourceConfig|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSourceConfig|null $task task
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： Smart Connect任务类型。 **取值范围**： - OBS_SINK：转储。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： Smart Connect任务类型。 **取值范围**： - OBS_SINK：转储。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

