<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckTaskCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckTaskCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  定时任务，包含如下:   - fixed_weekday : 固定工作日
    * dayOfWeek  周几触发，可选0或多个
    * hour  在此参数表示的小时触发定时任务
    * minute  在此参数表示的分钟触发定时任务
    * randomOffset  随机偏移时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'dayOfWeek' => 'string[]',
            'hour' => 'int',
            'minute' => 'int',
            'randomOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  定时任务，包含如下:   - fixed_weekday : 固定工作日
    * dayOfWeek  周几触发，可选0或多个
    * hour  在此参数表示的小时触发定时任务
    * minute  在此参数表示的分钟触发定时任务
    * randomOffset  随机偏移时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'dayOfWeek' => null,
        'hour' => 'int32',
        'minute' => 'int32',
        'randomOffset' => 'int32'
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
    * type  定时任务，包含如下:   - fixed_weekday : 固定工作日
    * dayOfWeek  周几触发，可选0或多个
    * hour  在此参数表示的小时触发定时任务
    * minute  在此参数表示的分钟触发定时任务
    * randomOffset  随机偏移时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'dayOfWeek' => 'day_of_week',
            'hour' => 'hour',
            'minute' => 'minute',
            'randomOffset' => 'random_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  定时任务，包含如下:   - fixed_weekday : 固定工作日
    * dayOfWeek  周几触发，可选0或多个
    * hour  在此参数表示的小时触发定时任务
    * minute  在此参数表示的分钟触发定时任务
    * randomOffset  随机偏移时间
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'dayOfWeek' => 'setDayOfWeek',
            'hour' => 'setHour',
            'minute' => 'setMinute',
            'randomOffset' => 'setRandomOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  定时任务，包含如下:   - fixed_weekday : 固定工作日
    * dayOfWeek  周几触发，可选0或多个
    * hour  在此参数表示的小时触发定时任务
    * minute  在此参数表示的分钟触发定时任务
    * randomOffset  随机偏移时间
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'dayOfWeek' => 'getDayOfWeek',
            'hour' => 'getHour',
            'minute' => 'getMinute',
            'randomOffset' => 'getRandomOffset'
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
        $this->container['dayOfWeek'] = isset($data['dayOfWeek']) ? $data['dayOfWeek'] : null;
        $this->container['hour'] = isset($data['hour']) ? $data['hour'] : null;
        $this->container['minute'] = isset($data['minute']) ? $data['minute'] : null;
        $this->container['randomOffset'] = isset($data['randomOffset']) ? $data['randomOffset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hour']) && ($this->container['hour'] > 23)) {
                $invalidProperties[] = "invalid value for 'hour', must be smaller than or equal to 23.";
            }
            if (!is_null($this->container['hour']) && ($this->container['hour'] < 0)) {
                $invalidProperties[] = "invalid value for 'hour', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['minute']) && ($this->container['minute'] > 59)) {
                $invalidProperties[] = "invalid value for 'minute', must be smaller than or equal to 59.";
            }
            if (!is_null($this->container['minute']) && ($this->container['minute'] < 0)) {
                $invalidProperties[] = "invalid value for 'minute', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['randomOffset']) && ($this->container['randomOffset'] > 3600)) {
                $invalidProperties[] = "invalid value for 'randomOffset', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['randomOffset']) && ($this->container['randomOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'randomOffset', must be bigger than or equal to 0.";
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
    *  定时任务，包含如下:   - fixed_weekday : 固定工作日
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
    * @param string|null $type 定时任务，包含如下:   - fixed_weekday : 固定工作日
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dayOfWeek
    *  周几触发，可选0或多个
    *
    * @return string[]|null
    */
    public function getDayOfWeek()
    {
        return $this->container['dayOfWeek'];
    }

    /**
    * Sets dayOfWeek
    *
    * @param string[]|null $dayOfWeek 周几触发，可选0或多个
    *
    * @return $this
    */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->container['dayOfWeek'] = $dayOfWeek;
        return $this;
    }

    /**
    * Gets hour
    *  在此参数表示的小时触发定时任务
    *
    * @return int|null
    */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
    * Sets hour
    *
    * @param int|null $hour 在此参数表示的小时触发定时任务
    *
    * @return $this
    */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;
        return $this;
    }

    /**
    * Gets minute
    *  在此参数表示的分钟触发定时任务
    *
    * @return int|null
    */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
    * Sets minute
    *
    * @param int|null $minute 在此参数表示的分钟触发定时任务
    *
    * @return $this
    */
    public function setMinute($minute)
    {
        $this->container['minute'] = $minute;
        return $this;
    }

    /**
    * Gets randomOffset
    *  随机偏移时间
    *
    * @return int|null
    */
    public function getRandomOffset()
    {
        return $this->container['randomOffset'];
    }

    /**
    * Sets randomOffset
    *
    * @param int|null $randomOffset 随机偏移时间
    *
    * @return $this
    */
    public function setRandomOffset($randomOffset)
    {
        $this->container['randomOffset'] = $randomOffset;
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

