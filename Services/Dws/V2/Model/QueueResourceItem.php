<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueueResourceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueueResourceItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * queueResources  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueName' => 'string',
            'queueResources' => '\HuaweiCloud\SDK\Dws\V2\Model\WorkloadResourceItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * queueResources  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueName' => null,
        'queueResources' => null
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
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * queueResources  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueName' => 'queue_name',
            'queueResources' => 'queue_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * queueResources  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'queueName' => 'setQueueName',
            'queueResources' => 'setQueueResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * queueResources  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'queueName' => 'getQueueName',
            'queueResources' => 'getQueueResources'
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
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['queueResources'] = isset($data['queueResources']) ? $data['queueResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['queueName'] === null) {
            $invalidProperties[] = "'queueName' can't be null";
        }
        if ($this->container['queueResources'] === null) {
            $invalidProperties[] = "'queueResources' can't be null";
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
    * Gets queueName
    *  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string $queueName **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets queueResources
    *  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\WorkloadResourceItem[]
    */
    public function getQueueResources()
    {
        return $this->container['queueResources'];
    }

    /**
    * Sets queueResources
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\WorkloadResourceItem[] $queueResources **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueueResources($queueResources)
    {
        $this->container['queueResources'] = $queueResources;
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

