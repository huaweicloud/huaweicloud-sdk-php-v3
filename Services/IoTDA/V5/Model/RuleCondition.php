<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  规则条件的类型，取值范围： - DEVICE_DATA：设备数据类型条件。 - SIMPLE_TIMER：简单定时类型条件。 - DAILY_TIMER：每日定时类型条件。 - DEVICE_STATUS：设备状态类型条件。 - DEVICE_LIFE_CYCLE：设备生命周期类型条件。 - DEVICE_MESSAGE：设备消息条件。 - MESSAGE_RESULTS：下行消息结果条件。
    * devicePropertyCondition  devicePropertyCondition
    * simpleTimerCondition  simpleTimerCondition
    * dailyTimerCondition  dailyTimerCondition
    * deviceMessageCondition  deviceMessageCondition
    * deviceStatusCondition  deviceStatusCondition
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'devicePropertyCondition' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DeviceDataCondition',
            'simpleTimerCondition' => '\HuaweiCloud\SDK\IoTDA\V5\Model\SimpleTimerType',
            'dailyTimerCondition' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DailyTimerType',
            'deviceMessageCondition' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DeviceMessageCondition',
            'deviceStatusCondition' => '\HuaweiCloud\SDK\IoTDA\V5\Model\DeviceStatusCondition'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  规则条件的类型，取值范围： - DEVICE_DATA：设备数据类型条件。 - SIMPLE_TIMER：简单定时类型条件。 - DAILY_TIMER：每日定时类型条件。 - DEVICE_STATUS：设备状态类型条件。 - DEVICE_LIFE_CYCLE：设备生命周期类型条件。 - DEVICE_MESSAGE：设备消息条件。 - MESSAGE_RESULTS：下行消息结果条件。
    * devicePropertyCondition  devicePropertyCondition
    * simpleTimerCondition  simpleTimerCondition
    * dailyTimerCondition  dailyTimerCondition
    * deviceMessageCondition  deviceMessageCondition
    * deviceStatusCondition  deviceStatusCondition
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'devicePropertyCondition' => null,
        'simpleTimerCondition' => null,
        'dailyTimerCondition' => null,
        'deviceMessageCondition' => null,
        'deviceStatusCondition' => null
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
    * type  规则条件的类型，取值范围： - DEVICE_DATA：设备数据类型条件。 - SIMPLE_TIMER：简单定时类型条件。 - DAILY_TIMER：每日定时类型条件。 - DEVICE_STATUS：设备状态类型条件。 - DEVICE_LIFE_CYCLE：设备生命周期类型条件。 - DEVICE_MESSAGE：设备消息条件。 - MESSAGE_RESULTS：下行消息结果条件。
    * devicePropertyCondition  devicePropertyCondition
    * simpleTimerCondition  simpleTimerCondition
    * dailyTimerCondition  dailyTimerCondition
    * deviceMessageCondition  deviceMessageCondition
    * deviceStatusCondition  deviceStatusCondition
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'devicePropertyCondition' => 'device_property_condition',
            'simpleTimerCondition' => 'simple_timer_condition',
            'dailyTimerCondition' => 'daily_timer_condition',
            'deviceMessageCondition' => 'device_message_condition',
            'deviceStatusCondition' => 'device_status_condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  规则条件的类型，取值范围： - DEVICE_DATA：设备数据类型条件。 - SIMPLE_TIMER：简单定时类型条件。 - DAILY_TIMER：每日定时类型条件。 - DEVICE_STATUS：设备状态类型条件。 - DEVICE_LIFE_CYCLE：设备生命周期类型条件。 - DEVICE_MESSAGE：设备消息条件。 - MESSAGE_RESULTS：下行消息结果条件。
    * devicePropertyCondition  devicePropertyCondition
    * simpleTimerCondition  simpleTimerCondition
    * dailyTimerCondition  dailyTimerCondition
    * deviceMessageCondition  deviceMessageCondition
    * deviceStatusCondition  deviceStatusCondition
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'devicePropertyCondition' => 'setDevicePropertyCondition',
            'simpleTimerCondition' => 'setSimpleTimerCondition',
            'dailyTimerCondition' => 'setDailyTimerCondition',
            'deviceMessageCondition' => 'setDeviceMessageCondition',
            'deviceStatusCondition' => 'setDeviceStatusCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  规则条件的类型，取值范围： - DEVICE_DATA：设备数据类型条件。 - SIMPLE_TIMER：简单定时类型条件。 - DAILY_TIMER：每日定时类型条件。 - DEVICE_STATUS：设备状态类型条件。 - DEVICE_LIFE_CYCLE：设备生命周期类型条件。 - DEVICE_MESSAGE：设备消息条件。 - MESSAGE_RESULTS：下行消息结果条件。
    * devicePropertyCondition  devicePropertyCondition
    * simpleTimerCondition  simpleTimerCondition
    * dailyTimerCondition  dailyTimerCondition
    * deviceMessageCondition  deviceMessageCondition
    * deviceStatusCondition  deviceStatusCondition
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'devicePropertyCondition' => 'getDevicePropertyCondition',
            'simpleTimerCondition' => 'getSimpleTimerCondition',
            'dailyTimerCondition' => 'getDailyTimerCondition',
            'deviceMessageCondition' => 'getDeviceMessageCondition',
            'deviceStatusCondition' => 'getDeviceStatusCondition'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['devicePropertyCondition'] = isset($data['devicePropertyCondition']) ? $data['devicePropertyCondition'] : null;
        $this->container['simpleTimerCondition'] = isset($data['simpleTimerCondition']) ? $data['simpleTimerCondition'] : null;
        $this->container['dailyTimerCondition'] = isset($data['dailyTimerCondition']) ? $data['dailyTimerCondition'] : null;
        $this->container['deviceMessageCondition'] = isset($data['deviceMessageCondition']) ? $data['deviceMessageCondition'] : null;
        $this->container['deviceStatusCondition'] = isset($data['deviceStatusCondition']) ? $data['deviceStatusCondition'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!preg_match("/(DEVICE_DATA|DAILY_TIMER|SIMPLE_TIMER|DEVICE_STATUS|DEVICE_LIFE_CYCLE|DEVICE_MESSAGE|MESSAGE_RESULTS)/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /(DEVICE_DATA|DAILY_TIMER|SIMPLE_TIMER|DEVICE_STATUS|DEVICE_LIFE_CYCLE|DEVICE_MESSAGE|MESSAGE_RESULTS)/.";
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
    * Gets type
    *  规则条件的类型，取值范围： - DEVICE_DATA：设备数据类型条件。 - SIMPLE_TIMER：简单定时类型条件。 - DAILY_TIMER：每日定时类型条件。 - DEVICE_STATUS：设备状态类型条件。 - DEVICE_LIFE_CYCLE：设备生命周期类型条件。 - DEVICE_MESSAGE：设备消息条件。 - MESSAGE_RESULTS：下行消息结果条件。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 规则条件的类型，取值范围： - DEVICE_DATA：设备数据类型条件。 - SIMPLE_TIMER：简单定时类型条件。 - DAILY_TIMER：每日定时类型条件。 - DEVICE_STATUS：设备状态类型条件。 - DEVICE_LIFE_CYCLE：设备生命周期类型条件。 - DEVICE_MESSAGE：设备消息条件。 - MESSAGE_RESULTS：下行消息结果条件。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets devicePropertyCondition
    *  devicePropertyCondition
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceDataCondition|null
    */
    public function getDevicePropertyCondition()
    {
        return $this->container['devicePropertyCondition'];
    }

    /**
    * Sets devicePropertyCondition
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceDataCondition|null $devicePropertyCondition devicePropertyCondition
    *
    * @return $this
    */
    public function setDevicePropertyCondition($devicePropertyCondition)
    {
        $this->container['devicePropertyCondition'] = $devicePropertyCondition;
        return $this;
    }

    /**
    * Gets simpleTimerCondition
    *  simpleTimerCondition
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\SimpleTimerType|null
    */
    public function getSimpleTimerCondition()
    {
        return $this->container['simpleTimerCondition'];
    }

    /**
    * Sets simpleTimerCondition
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\SimpleTimerType|null $simpleTimerCondition simpleTimerCondition
    *
    * @return $this
    */
    public function setSimpleTimerCondition($simpleTimerCondition)
    {
        $this->container['simpleTimerCondition'] = $simpleTimerCondition;
        return $this;
    }

    /**
    * Gets dailyTimerCondition
    *  dailyTimerCondition
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DailyTimerType|null
    */
    public function getDailyTimerCondition()
    {
        return $this->container['dailyTimerCondition'];
    }

    /**
    * Sets dailyTimerCondition
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DailyTimerType|null $dailyTimerCondition dailyTimerCondition
    *
    * @return $this
    */
    public function setDailyTimerCondition($dailyTimerCondition)
    {
        $this->container['dailyTimerCondition'] = $dailyTimerCondition;
        return $this;
    }

    /**
    * Gets deviceMessageCondition
    *  deviceMessageCondition
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceMessageCondition|null
    */
    public function getDeviceMessageCondition()
    {
        return $this->container['deviceMessageCondition'];
    }

    /**
    * Sets deviceMessageCondition
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceMessageCondition|null $deviceMessageCondition deviceMessageCondition
    *
    * @return $this
    */
    public function setDeviceMessageCondition($deviceMessageCondition)
    {
        $this->container['deviceMessageCondition'] = $deviceMessageCondition;
        return $this;
    }

    /**
    * Gets deviceStatusCondition
    *  deviceStatusCondition
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceStatusCondition|null
    */
    public function getDeviceStatusCondition()
    {
        return $this->container['deviceStatusCondition'];
    }

    /**
    * Sets deviceStatusCondition
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\DeviceStatusCondition|null $deviceStatusCondition deviceStatusCondition
    *
    * @return $this
    */
    public function setDeviceStatusCondition($deviceStatusCondition)
    {
        $this->container['deviceStatusCondition'] = $deviceStatusCondition;
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

