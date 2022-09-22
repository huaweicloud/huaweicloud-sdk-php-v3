<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpeedLimitlJson implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpeedLimitlJson';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * start  时间段开始时间，格式：XX:XX。
    * end  时间段结束时间，格式：XX:XX。
    * speed  时间段的速率，0-1000的整数，单位：Mbit/s。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'start' => 'string',
            'end' => 'string',
            'speed' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * start  时间段开始时间，格式：XX:XX。
    * end  时间段结束时间，格式：XX:XX。
    * speed  时间段的速率，0-1000的整数，单位：Mbit/s。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'start' => null,
        'end' => null,
        'speed' => 'int32'
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
    * start  时间段开始时间，格式：XX:XX。
    * end  时间段结束时间，格式：XX:XX。
    * speed  时间段的速率，0-1000的整数，单位：Mbit/s。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'start' => 'start',
            'end' => 'end',
            'speed' => 'speed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * start  时间段开始时间，格式：XX:XX。
    * end  时间段结束时间，格式：XX:XX。
    * speed  时间段的速率，0-1000的整数，单位：Mbit/s。
    *
    * @var string[]
    */
    protected static $setters = [
            'start' => 'setStart',
            'end' => 'setEnd',
            'speed' => 'setSpeed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * start  时间段开始时间，格式：XX:XX。
    * end  时间段结束时间，格式：XX:XX。
    * speed  时间段的速率，0-1000的整数，单位：Mbit/s。
    *
    * @var string[]
    */
    protected static $getters = [
            'start' => 'getStart',
            'end' => 'getEnd',
            'speed' => 'getSpeed'
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
            if ((mb_strlen($this->container['start']) > 255)) {
                $invalidProperties[] = "invalid value for 'start', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['start']) < 0)) {
                $invalidProperties[] = "invalid value for 'start', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
            if ((mb_strlen($this->container['end']) > 255)) {
                $invalidProperties[] = "invalid value for 'end', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['end']) < 0)) {
                $invalidProperties[] = "invalid value for 'end', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['speed'] === null) {
            $invalidProperties[] = "'speed' can't be null";
        }
            if (($this->container['speed'] > 10000)) {
                $invalidProperties[] = "invalid value for 'speed', must be smaller than or equal to 10000.";
            }
            if (($this->container['speed'] < 0)) {
                $invalidProperties[] = "invalid value for 'speed', must be bigger than or equal to 0.";
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
    * Gets start
    *  时间段开始时间，格式：XX:XX。
    *
    * @return string
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string $start 时间段开始时间，格式：XX:XX。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets end
    *  时间段结束时间，格式：XX:XX。
    *
    * @return string
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param string $end 时间段结束时间，格式：XX:XX。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets speed
    *  时间段的速率，0-1000的整数，单位：Mbit/s。
    *
    * @return int
    */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
    * Sets speed
    *
    * @param int $speed 时间段的速率，0-1000的整数，单位：Mbit/s。
    *
    * @return $this
    */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;
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

