<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLockBlockingStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLockBlockingStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastDayCount  近1天锁阻塞总数
    * lastWeekCount  近1周锁阻塞总数
    * lastTwoWeekCount  近2周锁阻塞总数
    * lastMonthCount  近1月锁阻塞总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastDayCount' => 'int',
            'lastWeekCount' => 'int',
            'lastTwoWeekCount' => 'int',
            'lastMonthCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastDayCount  近1天锁阻塞总数
    * lastWeekCount  近1周锁阻塞总数
    * lastTwoWeekCount  近2周锁阻塞总数
    * lastMonthCount  近1月锁阻塞总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastDayCount' => 'int64',
        'lastWeekCount' => 'int64',
        'lastTwoWeekCount' => 'int64',
        'lastMonthCount' => 'int64'
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
    * lastDayCount  近1天锁阻塞总数
    * lastWeekCount  近1周锁阻塞总数
    * lastTwoWeekCount  近2周锁阻塞总数
    * lastMonthCount  近1月锁阻塞总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastDayCount' => 'last_day_count',
            'lastWeekCount' => 'last_week_count',
            'lastTwoWeekCount' => 'last_two_week_count',
            'lastMonthCount' => 'last_month_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastDayCount  近1天锁阻塞总数
    * lastWeekCount  近1周锁阻塞总数
    * lastTwoWeekCount  近2周锁阻塞总数
    * lastMonthCount  近1月锁阻塞总数
    *
    * @var string[]
    */
    protected static $setters = [
            'lastDayCount' => 'setLastDayCount',
            'lastWeekCount' => 'setLastWeekCount',
            'lastTwoWeekCount' => 'setLastTwoWeekCount',
            'lastMonthCount' => 'setLastMonthCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastDayCount  近1天锁阻塞总数
    * lastWeekCount  近1周锁阻塞总数
    * lastTwoWeekCount  近2周锁阻塞总数
    * lastMonthCount  近1月锁阻塞总数
    *
    * @var string[]
    */
    protected static $getters = [
            'lastDayCount' => 'getLastDayCount',
            'lastWeekCount' => 'getLastWeekCount',
            'lastTwoWeekCount' => 'getLastTwoWeekCount',
            'lastMonthCount' => 'getLastMonthCount'
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
        $this->container['lastDayCount'] = isset($data['lastDayCount']) ? $data['lastDayCount'] : null;
        $this->container['lastWeekCount'] = isset($data['lastWeekCount']) ? $data['lastWeekCount'] : null;
        $this->container['lastTwoWeekCount'] = isset($data['lastTwoWeekCount']) ? $data['lastTwoWeekCount'] : null;
        $this->container['lastMonthCount'] = isset($data['lastMonthCount']) ? $data['lastMonthCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['lastDayCount']) && ($this->container['lastDayCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastDayCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastDayCount']) && ($this->container['lastDayCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastDayCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastWeekCount']) && ($this->container['lastWeekCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastWeekCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastWeekCount']) && ($this->container['lastWeekCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastWeekCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastTwoWeekCount']) && ($this->container['lastTwoWeekCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastTwoWeekCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastTwoWeekCount']) && ($this->container['lastTwoWeekCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastTwoWeekCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastMonthCount']) && ($this->container['lastMonthCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastMonthCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastMonthCount']) && ($this->container['lastMonthCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastMonthCount', must be bigger than or equal to 0.";
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
    * Gets lastDayCount
    *  近1天锁阻塞总数
    *
    * @return int|null
    */
    public function getLastDayCount()
    {
        return $this->container['lastDayCount'];
    }

    /**
    * Sets lastDayCount
    *
    * @param int|null $lastDayCount 近1天锁阻塞总数
    *
    * @return $this
    */
    public function setLastDayCount($lastDayCount)
    {
        $this->container['lastDayCount'] = $lastDayCount;
        return $this;
    }

    /**
    * Gets lastWeekCount
    *  近1周锁阻塞总数
    *
    * @return int|null
    */
    public function getLastWeekCount()
    {
        return $this->container['lastWeekCount'];
    }

    /**
    * Sets lastWeekCount
    *
    * @param int|null $lastWeekCount 近1周锁阻塞总数
    *
    * @return $this
    */
    public function setLastWeekCount($lastWeekCount)
    {
        $this->container['lastWeekCount'] = $lastWeekCount;
        return $this;
    }

    /**
    * Gets lastTwoWeekCount
    *  近2周锁阻塞总数
    *
    * @return int|null
    */
    public function getLastTwoWeekCount()
    {
        return $this->container['lastTwoWeekCount'];
    }

    /**
    * Sets lastTwoWeekCount
    *
    * @param int|null $lastTwoWeekCount 近2周锁阻塞总数
    *
    * @return $this
    */
    public function setLastTwoWeekCount($lastTwoWeekCount)
    {
        $this->container['lastTwoWeekCount'] = $lastTwoWeekCount;
        return $this;
    }

    /**
    * Gets lastMonthCount
    *  近1月锁阻塞总数
    *
    * @return int|null
    */
    public function getLastMonthCount()
    {
        return $this->container['lastMonthCount'];
    }

    /**
    * Sets lastMonthCount
    *
    * @param int|null $lastMonthCount 近1月锁阻塞总数
    *
    * @return $this
    */
    public function setLastMonthCount($lastMonthCount)
    {
        $this->container['lastMonthCount'] = $lastMonthCount;
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

