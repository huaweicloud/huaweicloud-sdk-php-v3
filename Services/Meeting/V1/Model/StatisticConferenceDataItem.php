<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticConferenceDataItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticConferenceDataItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  日期/月份，category = conference_info时有效。 小时，category = conference_hourly_info时有效。
    * confCount  会议数(含VMR)。 category = conference_info时有效。
    * confDuration  会议时长(秒)(含VMR)。 category = conference_info时有效。
    * attendeeCount  与会人次(含VMR)。 category = conference_info时有效。
    * confConcurrentUsedCount  并发会议使用数。 category = conference_info时有效。
    * conf24hCount  小时单位会议数(含VMR)。 category = conference_hourly_info时有效。
    * conf24hAttendeeCount  小时单位与会人次(含VMR)。 category = conference_hourly_info时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'confCount' => 'string',
            'confDuration' => 'string',
            'attendeeCount' => 'string',
            'confConcurrentUsedCount' => 'string',
            'conf24hCount' => 'string',
            'conf24hAttendeeCount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  日期/月份，category = conference_info时有效。 小时，category = conference_hourly_info时有效。
    * confCount  会议数(含VMR)。 category = conference_info时有效。
    * confDuration  会议时长(秒)(含VMR)。 category = conference_info时有效。
    * attendeeCount  与会人次(含VMR)。 category = conference_info时有效。
    * confConcurrentUsedCount  并发会议使用数。 category = conference_info时有效。
    * conf24hCount  小时单位会议数(含VMR)。 category = conference_hourly_info时有效。
    * conf24hAttendeeCount  小时单位与会人次(含VMR)。 category = conference_hourly_info时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'confCount' => null,
        'confDuration' => null,
        'attendeeCount' => null,
        'confConcurrentUsedCount' => null,
        'conf24hCount' => null,
        'conf24hAttendeeCount' => null
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
    * time  日期/月份，category = conference_info时有效。 小时，category = conference_hourly_info时有效。
    * confCount  会议数(含VMR)。 category = conference_info时有效。
    * confDuration  会议时长(秒)(含VMR)。 category = conference_info时有效。
    * attendeeCount  与会人次(含VMR)。 category = conference_info时有效。
    * confConcurrentUsedCount  并发会议使用数。 category = conference_info时有效。
    * conf24hCount  小时单位会议数(含VMR)。 category = conference_hourly_info时有效。
    * conf24hAttendeeCount  小时单位与会人次(含VMR)。 category = conference_hourly_info时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'confCount' => 'confCount',
            'confDuration' => 'confDuration',
            'attendeeCount' => 'attendeeCount',
            'confConcurrentUsedCount' => 'confConcurrentUsedCount',
            'conf24hCount' => 'conf24hCount',
            'conf24hAttendeeCount' => 'conf24hAttendeeCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  日期/月份，category = conference_info时有效。 小时，category = conference_hourly_info时有效。
    * confCount  会议数(含VMR)。 category = conference_info时有效。
    * confDuration  会议时长(秒)(含VMR)。 category = conference_info时有效。
    * attendeeCount  与会人次(含VMR)。 category = conference_info时有效。
    * confConcurrentUsedCount  并发会议使用数。 category = conference_info时有效。
    * conf24hCount  小时单位会议数(含VMR)。 category = conference_hourly_info时有效。
    * conf24hAttendeeCount  小时单位与会人次(含VMR)。 category = conference_hourly_info时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'confCount' => 'setConfCount',
            'confDuration' => 'setConfDuration',
            'attendeeCount' => 'setAttendeeCount',
            'confConcurrentUsedCount' => 'setConfConcurrentUsedCount',
            'conf24hCount' => 'setConf24hCount',
            'conf24hAttendeeCount' => 'setConf24hAttendeeCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  日期/月份，category = conference_info时有效。 小时，category = conference_hourly_info时有效。
    * confCount  会议数(含VMR)。 category = conference_info时有效。
    * confDuration  会议时长(秒)(含VMR)。 category = conference_info时有效。
    * attendeeCount  与会人次(含VMR)。 category = conference_info时有效。
    * confConcurrentUsedCount  并发会议使用数。 category = conference_info时有效。
    * conf24hCount  小时单位会议数(含VMR)。 category = conference_hourly_info时有效。
    * conf24hAttendeeCount  小时单位与会人次(含VMR)。 category = conference_hourly_info时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'confCount' => 'getConfCount',
            'confDuration' => 'getConfDuration',
            'attendeeCount' => 'getAttendeeCount',
            'confConcurrentUsedCount' => 'getConfConcurrentUsedCount',
            'conf24hCount' => 'getConf24hCount',
            'conf24hAttendeeCount' => 'getConf24hAttendeeCount'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['confCount'] = isset($data['confCount']) ? $data['confCount'] : null;
        $this->container['confDuration'] = isset($data['confDuration']) ? $data['confDuration'] : null;
        $this->container['attendeeCount'] = isset($data['attendeeCount']) ? $data['attendeeCount'] : null;
        $this->container['confConcurrentUsedCount'] = isset($data['confConcurrentUsedCount']) ? $data['confConcurrentUsedCount'] : null;
        $this->container['conf24hCount'] = isset($data['conf24hCount']) ? $data['conf24hCount'] : null;
        $this->container['conf24hAttendeeCount'] = isset($data['conf24hAttendeeCount']) ? $data['conf24hAttendeeCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) > 128)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) < 1)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confCount']) && (mb_strlen($this->container['confCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'confCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confCount']) && (mb_strlen($this->container['confCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'confCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confDuration']) && (mb_strlen($this->container['confDuration']) > 128)) {
                $invalidProperties[] = "invalid value for 'confDuration', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confDuration']) && (mb_strlen($this->container['confDuration']) < 1)) {
                $invalidProperties[] = "invalid value for 'confDuration', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attendeeCount']) && (mb_strlen($this->container['attendeeCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'attendeeCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['attendeeCount']) && (mb_strlen($this->container['attendeeCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'attendeeCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['confConcurrentUsedCount']) && (mb_strlen($this->container['confConcurrentUsedCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'confConcurrentUsedCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['confConcurrentUsedCount']) && (mb_strlen($this->container['confConcurrentUsedCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'confConcurrentUsedCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['conf24hCount']) && (mb_strlen($this->container['conf24hCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'conf24hCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['conf24hCount']) && (mb_strlen($this->container['conf24hCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'conf24hCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['conf24hAttendeeCount']) && (mb_strlen($this->container['conf24hAttendeeCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'conf24hAttendeeCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['conf24hAttendeeCount']) && (mb_strlen($this->container['conf24hAttendeeCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'conf24hAttendeeCount', the character length must be bigger than or equal to 1.";
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
    * Gets time
    *  日期/月份，category = conference_info时有效。 小时，category = conference_hourly_info时有效。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 日期/月份，category = conference_info时有效。 小时，category = conference_hourly_info时有效。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets confCount
    *  会议数(含VMR)。 category = conference_info时有效。
    *
    * @return string|null
    */
    public function getConfCount()
    {
        return $this->container['confCount'];
    }

    /**
    * Sets confCount
    *
    * @param string|null $confCount 会议数(含VMR)。 category = conference_info时有效。
    *
    * @return $this
    */
    public function setConfCount($confCount)
    {
        $this->container['confCount'] = $confCount;
        return $this;
    }

    /**
    * Gets confDuration
    *  会议时长(秒)(含VMR)。 category = conference_info时有效。
    *
    * @return string|null
    */
    public function getConfDuration()
    {
        return $this->container['confDuration'];
    }

    /**
    * Sets confDuration
    *
    * @param string|null $confDuration 会议时长(秒)(含VMR)。 category = conference_info时有效。
    *
    * @return $this
    */
    public function setConfDuration($confDuration)
    {
        $this->container['confDuration'] = $confDuration;
        return $this;
    }

    /**
    * Gets attendeeCount
    *  与会人次(含VMR)。 category = conference_info时有效。
    *
    * @return string|null
    */
    public function getAttendeeCount()
    {
        return $this->container['attendeeCount'];
    }

    /**
    * Sets attendeeCount
    *
    * @param string|null $attendeeCount 与会人次(含VMR)。 category = conference_info时有效。
    *
    * @return $this
    */
    public function setAttendeeCount($attendeeCount)
    {
        $this->container['attendeeCount'] = $attendeeCount;
        return $this;
    }

    /**
    * Gets confConcurrentUsedCount
    *  并发会议使用数。 category = conference_info时有效。
    *
    * @return string|null
    */
    public function getConfConcurrentUsedCount()
    {
        return $this->container['confConcurrentUsedCount'];
    }

    /**
    * Sets confConcurrentUsedCount
    *
    * @param string|null $confConcurrentUsedCount 并发会议使用数。 category = conference_info时有效。
    *
    * @return $this
    */
    public function setConfConcurrentUsedCount($confConcurrentUsedCount)
    {
        $this->container['confConcurrentUsedCount'] = $confConcurrentUsedCount;
        return $this;
    }

    /**
    * Gets conf24hCount
    *  小时单位会议数(含VMR)。 category = conference_hourly_info时有效。
    *
    * @return string|null
    */
    public function getConf24hCount()
    {
        return $this->container['conf24hCount'];
    }

    /**
    * Sets conf24hCount
    *
    * @param string|null $conf24hCount 小时单位会议数(含VMR)。 category = conference_hourly_info时有效。
    *
    * @return $this
    */
    public function setConf24hCount($conf24hCount)
    {
        $this->container['conf24hCount'] = $conf24hCount;
        return $this;
    }

    /**
    * Gets conf24hAttendeeCount
    *  小时单位与会人次(含VMR)。 category = conference_hourly_info时有效。
    *
    * @return string|null
    */
    public function getConf24hAttendeeCount()
    {
        return $this->container['conf24hAttendeeCount'];
    }

    /**
    * Sets conf24hAttendeeCount
    *
    * @param string|null $conf24hAttendeeCount 小时单位与会人次(含VMR)。 category = conference_hourly_info时有效。
    *
    * @return $this
    */
    public function setConf24hAttendeeCount($conf24hAttendeeCount)
    {
        $this->container['conf24hAttendeeCount'] = $conf24hAttendeeCount;
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

