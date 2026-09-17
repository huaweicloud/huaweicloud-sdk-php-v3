<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserSeekTrend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserSeekTrend';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastDayUserSeekCount  近1天用户访问条数
    * lastWeekUserSeekCount  近1周用户访问条数
    * lastTwoWeekUserSeekCount  近2周用户访问条数
    * lastMonthUserSeekCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastDayUserSeekCount' => 'int',
            'lastWeekUserSeekCount' => 'int',
            'lastTwoWeekUserSeekCount' => 'int',
            'lastMonthUserSeekCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastDayUserSeekCount  近1天用户访问条数
    * lastWeekUserSeekCount  近1周用户访问条数
    * lastTwoWeekUserSeekCount  近2周用户访问条数
    * lastMonthUserSeekCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastDayUserSeekCount' => 'int64',
        'lastWeekUserSeekCount' => 'int64',
        'lastTwoWeekUserSeekCount' => 'int64',
        'lastMonthUserSeekCount' => 'int64'
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
    * lastDayUserSeekCount  近1天用户访问条数
    * lastWeekUserSeekCount  近1周用户访问条数
    * lastTwoWeekUserSeekCount  近2周用户访问条数
    * lastMonthUserSeekCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastDayUserSeekCount' => 'last_day_user_seek_count',
            'lastWeekUserSeekCount' => 'last_week_user_seek_count',
            'lastTwoWeekUserSeekCount' => 'last_two_week_user_seek_count',
            'lastMonthUserSeekCount' => 'last_month_user_seek_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastDayUserSeekCount  近1天用户访问条数
    * lastWeekUserSeekCount  近1周用户访问条数
    * lastTwoWeekUserSeekCount  近2周用户访问条数
    * lastMonthUserSeekCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $setters = [
            'lastDayUserSeekCount' => 'setLastDayUserSeekCount',
            'lastWeekUserSeekCount' => 'setLastWeekUserSeekCount',
            'lastTwoWeekUserSeekCount' => 'setLastTwoWeekUserSeekCount',
            'lastMonthUserSeekCount' => 'setLastMonthUserSeekCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastDayUserSeekCount  近1天用户访问条数
    * lastWeekUserSeekCount  近1周用户访问条数
    * lastTwoWeekUserSeekCount  近2周用户访问条数
    * lastMonthUserSeekCount  近1月用户访问条数
    *
    * @var string[]
    */
    protected static $getters = [
            'lastDayUserSeekCount' => 'getLastDayUserSeekCount',
            'lastWeekUserSeekCount' => 'getLastWeekUserSeekCount',
            'lastTwoWeekUserSeekCount' => 'getLastTwoWeekUserSeekCount',
            'lastMonthUserSeekCount' => 'getLastMonthUserSeekCount'
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
        $this->container['lastDayUserSeekCount'] = isset($data['lastDayUserSeekCount']) ? $data['lastDayUserSeekCount'] : null;
        $this->container['lastWeekUserSeekCount'] = isset($data['lastWeekUserSeekCount']) ? $data['lastWeekUserSeekCount'] : null;
        $this->container['lastTwoWeekUserSeekCount'] = isset($data['lastTwoWeekUserSeekCount']) ? $data['lastTwoWeekUserSeekCount'] : null;
        $this->container['lastMonthUserSeekCount'] = isset($data['lastMonthUserSeekCount']) ? $data['lastMonthUserSeekCount'] : null;
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
    * Gets lastDayUserSeekCount
    *  近1天用户访问条数
    *
    * @return int|null
    */
    public function getLastDayUserSeekCount()
    {
        return $this->container['lastDayUserSeekCount'];
    }

    /**
    * Sets lastDayUserSeekCount
    *
    * @param int|null $lastDayUserSeekCount 近1天用户访问条数
    *
    * @return $this
    */
    public function setLastDayUserSeekCount($lastDayUserSeekCount)
    {
        $this->container['lastDayUserSeekCount'] = $lastDayUserSeekCount;
        return $this;
    }

    /**
    * Gets lastWeekUserSeekCount
    *  近1周用户访问条数
    *
    * @return int|null
    */
    public function getLastWeekUserSeekCount()
    {
        return $this->container['lastWeekUserSeekCount'];
    }

    /**
    * Sets lastWeekUserSeekCount
    *
    * @param int|null $lastWeekUserSeekCount 近1周用户访问条数
    *
    * @return $this
    */
    public function setLastWeekUserSeekCount($lastWeekUserSeekCount)
    {
        $this->container['lastWeekUserSeekCount'] = $lastWeekUserSeekCount;
        return $this;
    }

    /**
    * Gets lastTwoWeekUserSeekCount
    *  近2周用户访问条数
    *
    * @return int|null
    */
    public function getLastTwoWeekUserSeekCount()
    {
        return $this->container['lastTwoWeekUserSeekCount'];
    }

    /**
    * Sets lastTwoWeekUserSeekCount
    *
    * @param int|null $lastTwoWeekUserSeekCount 近2周用户访问条数
    *
    * @return $this
    */
    public function setLastTwoWeekUserSeekCount($lastTwoWeekUserSeekCount)
    {
        $this->container['lastTwoWeekUserSeekCount'] = $lastTwoWeekUserSeekCount;
        return $this;
    }

    /**
    * Gets lastMonthUserSeekCount
    *  近1月用户访问条数
    *
    * @return int|null
    */
    public function getLastMonthUserSeekCount()
    {
        return $this->container['lastMonthUserSeekCount'];
    }

    /**
    * Sets lastMonthUserSeekCount
    *
    * @param int|null $lastMonthUserSeekCount 近1月用户访问条数
    *
    * @return $this
    */
    public function setLastMonthUserSeekCount($lastMonthUserSeekCount)
    {
        $this->container['lastMonthUserSeekCount'] = $lastMonthUserSeekCount;
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

