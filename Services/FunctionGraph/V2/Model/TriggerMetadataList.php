<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TriggerMetadataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TriggerMetadataList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * triggerName  触发名称
    * triggerType  触发器类型
    * eventType  事件类型
    * eventData  事件数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'triggerName' => 'string',
            'triggerType' => 'string',
            'eventType' => 'string',
            'eventData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * triggerName  触发名称
    * triggerType  触发器类型
    * eventType  事件类型
    * eventData  事件数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'triggerName' => null,
        'triggerType' => null,
        'eventType' => null,
        'eventData' => null
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
    * triggerName  触发名称
    * triggerType  触发器类型
    * eventType  事件类型
    * eventData  事件数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'triggerName' => 'trigger_name',
            'triggerType' => 'trigger_type',
            'eventType' => 'event_type',
            'eventData' => 'event_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * triggerName  触发名称
    * triggerType  触发器类型
    * eventType  事件类型
    * eventData  事件数据
    *
    * @var string[]
    */
    protected static $setters = [
            'triggerName' => 'setTriggerName',
            'triggerType' => 'setTriggerType',
            'eventType' => 'setEventType',
            'eventData' => 'setEventData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * triggerName  触发名称
    * triggerType  触发器类型
    * eventType  事件类型
    * eventData  事件数据
    *
    * @var string[]
    */
    protected static $getters = [
            'triggerName' => 'getTriggerName',
            'triggerType' => 'getTriggerType',
            'eventType' => 'getEventType',
            'eventData' => 'getEventData'
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
        $this->container['triggerName'] = isset($data['triggerName']) ? $data['triggerName'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventData'] = isset($data['eventData']) ? $data['eventData'] : null;
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
    * Gets triggerName
    *  触发名称
    *
    * @return string|null
    */
    public function getTriggerName()
    {
        return $this->container['triggerName'];
    }

    /**
    * Sets triggerName
    *
    * @param string|null $triggerName 触发名称
    *
    * @return $this
    */
    public function setTriggerName($triggerName)
    {
        $this->container['triggerName'] = $triggerName;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发器类型
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发器类型
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 事件类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventData
    *  事件数据
    *
    * @return string|null
    */
    public function getEventData()
    {
        return $this->container['eventData'];
    }

    /**
    * Sets eventData
    *
    * @param string|null $eventData 事件数据
    *
    * @return $this
    */
    public function setEventData($eventData)
    {
        $this->container['eventData'] = $eventData;
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

