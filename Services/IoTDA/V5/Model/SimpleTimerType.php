<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SimpleTimerType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SimpleTimerType';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  **参数说明**：规则触发的开始时间，使用UTC时区，格式：yyyyMMdd'T'HHmmss'Z'。
    * repeatInterval  **参数说明**：规则触发的重复时间间隔，单位为秒。
    * repeatCount  **参数说明**：规则触发的重复次数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'repeatInterval' => 'int',
            'repeatCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  **参数说明**：规则触发的开始时间，使用UTC时区，格式：yyyyMMdd'T'HHmmss'Z'。
    * repeatInterval  **参数说明**：规则触发的重复时间间隔，单位为秒。
    * repeatCount  **参数说明**：规则触发的重复次数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'repeatInterval' => 'int32',
        'repeatCount' => 'int32'
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
    * startTime  **参数说明**：规则触发的开始时间，使用UTC时区，格式：yyyyMMdd'T'HHmmss'Z'。
    * repeatInterval  **参数说明**：规则触发的重复时间间隔，单位为秒。
    * repeatCount  **参数说明**：规则触发的重复次数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'repeatInterval' => 'repeat_interval',
            'repeatCount' => 'repeat_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  **参数说明**：规则触发的开始时间，使用UTC时区，格式：yyyyMMdd'T'HHmmss'Z'。
    * repeatInterval  **参数说明**：规则触发的重复时间间隔，单位为秒。
    * repeatCount  **参数说明**：规则触发的重复次数。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'repeatInterval' => 'setRepeatInterval',
            'repeatCount' => 'setRepeatCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  **参数说明**：规则触发的开始时间，使用UTC时区，格式：yyyyMMdd'T'HHmmss'Z'。
    * repeatInterval  **参数说明**：规则触发的重复时间间隔，单位为秒。
    * repeatCount  **参数说明**：规则触发的重复次数。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'repeatInterval' => 'getRepeatInterval',
            'repeatCount' => 'getRepeatCount'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['repeatInterval'] = isset($data['repeatInterval']) ? $data['repeatInterval'] : null;
        $this->container['repeatCount'] = isset($data['repeatCount']) ? $data['repeatCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['repeatInterval'] === null) {
            $invalidProperties[] = "'repeatInterval' can't be null";
        }
            if (($this->container['repeatInterval'] > 31536000)) {
                $invalidProperties[] = "invalid value for 'repeatInterval', must be smaller than or equal to 31536000.";
            }
            if (($this->container['repeatInterval'] < 1)) {
                $invalidProperties[] = "invalid value for 'repeatInterval', must be bigger than or equal to 1.";
            }
        if ($this->container['repeatCount'] === null) {
            $invalidProperties[] = "'repeatCount' can't be null";
        }
            if (($this->container['repeatCount'] > 9999)) {
                $invalidProperties[] = "invalid value for 'repeatCount', must be smaller than or equal to 9999.";
            }
            if (($this->container['repeatCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'repeatCount', must be bigger than or equal to 1.";
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
    * Gets startTime
    *  **参数说明**：规则触发的开始时间，使用UTC时区，格式：yyyyMMdd'T'HHmmss'Z'。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime **参数说明**：规则触发的开始时间，使用UTC时区，格式：yyyyMMdd'T'HHmmss'Z'。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets repeatInterval
    *  **参数说明**：规则触发的重复时间间隔，单位为秒。
    *
    * @return int
    */
    public function getRepeatInterval()
    {
        return $this->container['repeatInterval'];
    }

    /**
    * Sets repeatInterval
    *
    * @param int $repeatInterval **参数说明**：规则触发的重复时间间隔，单位为秒。
    *
    * @return $this
    */
    public function setRepeatInterval($repeatInterval)
    {
        $this->container['repeatInterval'] = $repeatInterval;
        return $this;
    }

    /**
    * Gets repeatCount
    *  **参数说明**：规则触发的重复次数。
    *
    * @return int
    */
    public function getRepeatCount()
    {
        return $this->container['repeatCount'];
    }

    /**
    * Sets repeatCount
    *
    * @param int $repeatCount **参数说明**：规则触发的重复次数。
    *
    * @return $this
    */
    public function setRepeatCount($repeatCount)
    {
        $this->container['repeatCount'] = $repeatCount;
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

