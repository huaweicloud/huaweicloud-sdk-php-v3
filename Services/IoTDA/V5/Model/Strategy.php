<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Strategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Strategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trigger  **参数说明**：规则条件触发的判断策略，默认为pulse。 **取值范围**： - pulse：设备上报的数据满足条件则触发，不判断上一次上报的数据。 - reverse：设备上一次上报的数据不满足条件，本次上报的数据满足条件则触发。
    * eventValidTime  **参数说明**：设备数据的有效时间，单位为秒，设备数据的产生时间以上报数据中的eventTime为基准。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trigger' => 'string',
            'eventValidTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trigger  **参数说明**：规则条件触发的判断策略，默认为pulse。 **取值范围**： - pulse：设备上报的数据满足条件则触发，不判断上一次上报的数据。 - reverse：设备上一次上报的数据不满足条件，本次上报的数据满足条件则触发。
    * eventValidTime  **参数说明**：设备数据的有效时间，单位为秒，设备数据的产生时间以上报数据中的eventTime为基准。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trigger' => null,
        'eventValidTime' => 'int32'
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
    * trigger  **参数说明**：规则条件触发的判断策略，默认为pulse。 **取值范围**： - pulse：设备上报的数据满足条件则触发，不判断上一次上报的数据。 - reverse：设备上一次上报的数据不满足条件，本次上报的数据满足条件则触发。
    * eventValidTime  **参数说明**：设备数据的有效时间，单位为秒，设备数据的产生时间以上报数据中的eventTime为基准。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trigger' => 'trigger',
            'eventValidTime' => 'event_valid_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trigger  **参数说明**：规则条件触发的判断策略，默认为pulse。 **取值范围**： - pulse：设备上报的数据满足条件则触发，不判断上一次上报的数据。 - reverse：设备上一次上报的数据不满足条件，本次上报的数据满足条件则触发。
    * eventValidTime  **参数说明**：设备数据的有效时间，单位为秒，设备数据的产生时间以上报数据中的eventTime为基准。
    *
    * @var string[]
    */
    protected static $setters = [
            'trigger' => 'setTrigger',
            'eventValidTime' => 'setEventValidTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trigger  **参数说明**：规则条件触发的判断策略，默认为pulse。 **取值范围**： - pulse：设备上报的数据满足条件则触发，不判断上一次上报的数据。 - reverse：设备上一次上报的数据不满足条件，本次上报的数据满足条件则触发。
    * eventValidTime  **参数说明**：设备数据的有效时间，单位为秒，设备数据的产生时间以上报数据中的eventTime为基准。
    *
    * @var string[]
    */
    protected static $getters = [
            'trigger' => 'getTrigger',
            'eventValidTime' => 'getEventValidTime'
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
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['eventValidTime'] = isset($data['eventValidTime']) ? $data['eventValidTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['trigger']) && !preg_match("/(pulse|reverse)/", $this->container['trigger'])) {
                $invalidProperties[] = "invalid value for 'trigger', must be conform to the pattern /(pulse|reverse)/.";
            }
            if (!is_null($this->container['eventValidTime']) && ($this->container['eventValidTime'] < -1)) {
                $invalidProperties[] = "invalid value for 'eventValidTime', must be bigger than or equal to -1.";
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
    * Gets trigger
    *  **参数说明**：规则条件触发的判断策略，默认为pulse。 **取值范围**： - pulse：设备上报的数据满足条件则触发，不判断上一次上报的数据。 - reverse：设备上一次上报的数据不满足条件，本次上报的数据满足条件则触发。
    *
    * @return string|null
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param string|null $trigger **参数说明**：规则条件触发的判断策略，默认为pulse。 **取值范围**： - pulse：设备上报的数据满足条件则触发，不判断上一次上报的数据。 - reverse：设备上一次上报的数据不满足条件，本次上报的数据满足条件则触发。
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets eventValidTime
    *  **参数说明**：设备数据的有效时间，单位为秒，设备数据的产生时间以上报数据中的eventTime为基准。
    *
    * @return int|null
    */
    public function getEventValidTime()
    {
        return $this->container['eventValidTime'];
    }

    /**
    * Sets eventValidTime
    *
    * @param int|null $eventValidTime **参数说明**：设备数据的有效时间，单位为秒，设备数据的产生时间以上报数据中的eventTime为基准。
    *
    * @return $this
    */
    public function setEventValidTime($eventValidTime)
    {
        $this->container['eventValidTime'] = $eventValidTime;
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

