<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTriggerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTriggerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * triggerStatus  触发器状态
    * eventData  触发器更新事件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'triggerStatus' => 'string',
            'eventData' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerEventData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * triggerStatus  触发器状态
    * eventData  触发器更新事件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'triggerStatus' => null,
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
    * triggerStatus  触发器状态
    * eventData  触发器更新事件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'triggerStatus' => 'trigger_status',
            'eventData' => 'event_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * triggerStatus  触发器状态
    * eventData  触发器更新事件
    *
    * @var string[]
    */
    protected static $setters = [
            'triggerStatus' => 'setTriggerStatus',
            'eventData' => 'setEventData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * triggerStatus  触发器状态
    * eventData  触发器更新事件
    *
    * @var string[]
    */
    protected static $getters = [
            'triggerStatus' => 'getTriggerStatus',
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
    const TRIGGER_STATUS_ACTIVE = 'ACTIVE';
    const TRIGGER_STATUS_DISABLED = 'DISABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerStatusAllowableValues()
    {
        return [
            self::TRIGGER_STATUS_ACTIVE,
            self::TRIGGER_STATUS_DISABLED,
        ];
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
        $this->container['triggerStatus'] = isset($data['triggerStatus']) ? $data['triggerStatus'] : null;
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
            $allowedValues = $this->getTriggerStatusAllowableValues();
                if (!is_null($this->container['triggerStatus']) && !in_array($this->container['triggerStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets triggerStatus
    *  触发器状态
    *
    * @return string|null
    */
    public function getTriggerStatus()
    {
        return $this->container['triggerStatus'];
    }

    /**
    * Sets triggerStatus
    *
    * @param string|null $triggerStatus 触发器状态
    *
    * @return $this
    */
    public function setTriggerStatus($triggerStatus)
    {
        $this->container['triggerStatus'] = $triggerStatus;
        return $this;
    }

    /**
    * Gets eventData
    *  触发器更新事件
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerEventData[]|null
    */
    public function getEventData()
    {
        return $this->container['eventData'];
    }

    /**
    * Sets eventData
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerEventData[]|null $eventData 触发器更新事件
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

