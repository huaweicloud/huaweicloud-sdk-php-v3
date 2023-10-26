<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventSeries implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventSeries';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventSeverity  事件或者告警级别枚举类型。
    * values  事件或者告警统计结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventSeverity' => 'string',
            'values' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventSeverity  事件或者告警级别枚举类型。
    * values  事件或者告警统计结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventSeverity' => null,
        'values' => 'int32'
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
    * eventSeverity  事件或者告警级别枚举类型。
    * values  事件或者告警统计结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventSeverity' => 'event_severity',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventSeverity  事件或者告警级别枚举类型。
    * values  事件或者告警统计结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventSeverity' => 'setEventSeverity',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventSeverity  事件或者告警级别枚举类型。
    * values  事件或者告警统计结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventSeverity' => 'getEventSeverity',
            'values' => 'getValues'
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
    const EVENT_SEVERITY_CRITICAL = 'Critical';
    const EVENT_SEVERITY_MAJOR = 'Major';
    const EVENT_SEVERITY_MINOR = 'Minor';
    const EVENT_SEVERITY_INFO = 'Info';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventSeverityAllowableValues()
    {
        return [
            self::EVENT_SEVERITY_CRITICAL,
            self::EVENT_SEVERITY_MAJOR,
            self::EVENT_SEVERITY_MINOR,
            self::EVENT_SEVERITY_INFO,
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
        $this->container['eventSeverity'] = isset($data['eventSeverity']) ? $data['eventSeverity'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEventSeverityAllowableValues();
                if (!is_null($this->container['eventSeverity']) && !in_array($this->container['eventSeverity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventSeverity', must be one of '%s'",
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
    * Gets eventSeverity
    *  事件或者告警级别枚举类型。
    *
    * @return string|null
    */
    public function getEventSeverity()
    {
        return $this->container['eventSeverity'];
    }

    /**
    * Sets eventSeverity
    *
    * @param string|null $eventSeverity 事件或者告警级别枚举类型。
    *
    * @return $this
    */
    public function setEventSeverity($eventSeverity)
    {
        $this->container['eventSeverity'] = $eventSeverity;
        return $this;
    }

    /**
    * Gets values
    *  事件或者告警统计结果。
    *
    * @return int[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param int[]|null $values 事件或者告警统计结果。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

