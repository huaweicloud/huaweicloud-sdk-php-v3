<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TimeRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TimeRange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlTimeZone  时区信息，默认为“UTC”。
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索起始时间（UTC时间，毫秒级）。
    * startTimeGt  搜索是否包含起始时间点，默认为false。
    * endTimeLt  搜索是否包含结束时间点，默认为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlTimeZone' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'startTimeGt' => 'bool',
            'endTimeLt' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlTimeZone  时区信息，默认为“UTC”。
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索起始时间（UTC时间，毫秒级）。
    * startTimeGt  搜索是否包含起始时间点，默认为false。
    * endTimeLt  搜索是否包含结束时间点，默认为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlTimeZone' => null,
        'startTime' => null,
        'endTime' => null,
        'startTimeGt' => null,
        'endTimeLt' => null
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
    * sqlTimeZone  时区信息，默认为“UTC”。
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索起始时间（UTC时间，毫秒级）。
    * startTimeGt  搜索是否包含起始时间点，默认为false。
    * endTimeLt  搜索是否包含结束时间点，默认为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlTimeZone' => 'sql_time_zone',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'startTimeGt' => 'start_time_gt',
            'endTimeLt' => 'end_time_lt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlTimeZone  时区信息，默认为“UTC”。
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索起始时间（UTC时间，毫秒级）。
    * startTimeGt  搜索是否包含起始时间点，默认为false。
    * endTimeLt  搜索是否包含结束时间点，默认为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlTimeZone' => 'setSqlTimeZone',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'startTimeGt' => 'setStartTimeGt',
            'endTimeLt' => 'setEndTimeLt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlTimeZone  时区信息，默认为“UTC”。
    * startTime  搜索起始时间（UTC时间，毫秒级）。
    * endTime  搜索起始时间（UTC时间，毫秒级）。
    * startTimeGt  搜索是否包含起始时间点，默认为false。
    * endTimeLt  搜索是否包含结束时间点，默认为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlTimeZone' => 'getSqlTimeZone',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'startTimeGt' => 'getStartTimeGt',
            'endTimeLt' => 'getEndTimeLt'
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
        $this->container['sqlTimeZone'] = isset($data['sqlTimeZone']) ? $data['sqlTimeZone'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['startTimeGt'] = isset($data['startTimeGt']) ? $data['startTimeGt'] : false;
        $this->container['endTimeLt'] = isset($data['endTimeLt']) ? $data['endTimeLt'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sqlTimeZone']) && (mb_strlen($this->container['sqlTimeZone']) > 100)) {
                $invalidProperties[] = "invalid value for 'sqlTimeZone', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sqlTimeZone']) && (mb_strlen($this->container['sqlTimeZone']) < 1)) {
                $invalidProperties[] = "invalid value for 'sqlTimeZone', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 13.";
            }
            if ((mb_strlen($this->container['startTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 13.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 13.";
            }
            if ((mb_strlen($this->container['endTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 13.";
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
    * Gets sqlTimeZone
    *  时区信息，默认为“UTC”。
    *
    * @return string|null
    */
    public function getSqlTimeZone()
    {
        return $this->container['sqlTimeZone'];
    }

    /**
    * Sets sqlTimeZone
    *
    * @param string|null $sqlTimeZone 时区信息，默认为“UTC”。
    *
    * @return $this
    */
    public function setSqlTimeZone($sqlTimeZone)
    {
        $this->container['sqlTimeZone'] = $sqlTimeZone;
        return $this;
    }

    /**
    * Gets startTime
    *  搜索起始时间（UTC时间，毫秒级）。
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
    * @param string $startTime 搜索起始时间（UTC时间，毫秒级）。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  搜索起始时间（UTC时间，毫秒级）。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 搜索起始时间（UTC时间，毫秒级）。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets startTimeGt
    *  搜索是否包含起始时间点，默认为false。
    *
    * @return bool|null
    */
    public function getStartTimeGt()
    {
        return $this->container['startTimeGt'];
    }

    /**
    * Sets startTimeGt
    *
    * @param bool|null $startTimeGt 搜索是否包含起始时间点，默认为false。
    *
    * @return $this
    */
    public function setStartTimeGt($startTimeGt)
    {
        $this->container['startTimeGt'] = $startTimeGt;
        return $this;
    }

    /**
    * Gets endTimeLt
    *  搜索是否包含结束时间点，默认为false。
    *
    * @return bool|null
    */
    public function getEndTimeLt()
    {
        return $this->container['endTimeLt'];
    }

    /**
    * Sets endTimeLt
    *
    * @param bool|null $endTimeLt 搜索是否包含结束时间点，默认为false。
    *
    * @return $this
    */
    public function setEndTimeLt($endTimeLt)
    {
        $this->container['endTimeLt'] = $endTimeLt;
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

