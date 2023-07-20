<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListActiveOrHistoryAlarmsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListActiveOrHistoryAlarmsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * step  关键字检索条件
    * whetherCustomField  是否自定义查询时间段
    * startTime  自定义时间段开始时间(时间戳)
    * endTime  自定义时间段结束时间(时间戳)
    * timeRange  非自定义时间段时间范围(单位为分钟)
    * search  关键字检索条件
    * alarmLevelIds  告警级别(\"Critical\",\"Major\",\"Minor\",\"Info\")
    * sort  sort
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'step' => 'int',
            'whetherCustomField' => 'bool',
            'startTime' => 'int',
            'endTime' => 'int',
            'timeRange' => 'string',
            'search' => 'string',
            'alarmLevelIds' => 'string[]',
            'sort' => '\HuaweiCloud\SDK\Lts\V2\Model\Sort'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * step  关键字检索条件
    * whetherCustomField  是否自定义查询时间段
    * startTime  自定义时间段开始时间(时间戳)
    * endTime  自定义时间段结束时间(时间戳)
    * timeRange  非自定义时间段时间范围(单位为分钟)
    * search  关键字检索条件
    * alarmLevelIds  告警级别(\"Critical\",\"Major\",\"Minor\",\"Info\")
    * sort  sort
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'step' => 'int32',
        'whetherCustomField' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'timeRange' => null,
        'search' => null,
        'alarmLevelIds' => null,
        'sort' => null
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
    * step  关键字检索条件
    * whetherCustomField  是否自定义查询时间段
    * startTime  自定义时间段开始时间(时间戳)
    * endTime  自定义时间段结束时间(时间戳)
    * timeRange  非自定义时间段时间范围(单位为分钟)
    * search  关键字检索条件
    * alarmLevelIds  告警级别(\"Critical\",\"Major\",\"Minor\",\"Info\")
    * sort  sort
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'step' => 'step',
            'whetherCustomField' => 'whether_custom_field',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'timeRange' => 'time_range',
            'search' => 'search',
            'alarmLevelIds' => 'alarm_level_ids',
            'sort' => 'sort'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * step  关键字检索条件
    * whetherCustomField  是否自定义查询时间段
    * startTime  自定义时间段开始时间(时间戳)
    * endTime  自定义时间段结束时间(时间戳)
    * timeRange  非自定义时间段时间范围(单位为分钟)
    * search  关键字检索条件
    * alarmLevelIds  告警级别(\"Critical\",\"Major\",\"Minor\",\"Info\")
    * sort  sort
    *
    * @var string[]
    */
    protected static $setters = [
            'step' => 'setStep',
            'whetherCustomField' => 'setWhetherCustomField',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'timeRange' => 'setTimeRange',
            'search' => 'setSearch',
            'alarmLevelIds' => 'setAlarmLevelIds',
            'sort' => 'setSort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * step  关键字检索条件
    * whetherCustomField  是否自定义查询时间段
    * startTime  自定义时间段开始时间(时间戳)
    * endTime  自定义时间段结束时间(时间戳)
    * timeRange  非自定义时间段时间范围(单位为分钟)
    * search  关键字检索条件
    * alarmLevelIds  告警级别(\"Critical\",\"Major\",\"Minor\",\"Info\")
    * sort  sort
    *
    * @var string[]
    */
    protected static $getters = [
            'step' => 'getStep',
            'whetherCustomField' => 'getWhetherCustomField',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'timeRange' => 'getTimeRange',
            'search' => 'getSearch',
            'alarmLevelIds' => 'getAlarmLevelIds',
            'sort' => 'getSort'
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
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['whetherCustomField'] = isset($data['whetherCustomField']) ? $data['whetherCustomField'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['alarmLevelIds'] = isset($data['alarmLevelIds']) ? $data['alarmLevelIds'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['whetherCustomField'] === null) {
            $invalidProperties[] = "'whetherCustomField' can't be null";
        }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 1024)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) < 1)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be bigger than or equal to 1.";
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
    * Gets step
    *  关键字检索条件
    *
    * @return int|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param int|null $step 关键字检索条件
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
        return $this;
    }

    /**
    * Gets whetherCustomField
    *  是否自定义查询时间段
    *
    * @return bool
    */
    public function getWhetherCustomField()
    {
        return $this->container['whetherCustomField'];
    }

    /**
    * Sets whetherCustomField
    *
    * @param bool $whetherCustomField 是否自定义查询时间段
    *
    * @return $this
    */
    public function setWhetherCustomField($whetherCustomField)
    {
        $this->container['whetherCustomField'] = $whetherCustomField;
        return $this;
    }

    /**
    * Gets startTime
    *  自定义时间段开始时间(时间戳)
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 自定义时间段开始时间(时间戳)
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
    *  自定义时间段结束时间(时间戳)
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 自定义时间段结束时间(时间戳)
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets timeRange
    *  非自定义时间段时间范围(单位为分钟)
    *
    * @return string|null
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param string|null $timeRange 非自定义时间段时间范围(单位为分钟)
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets search
    *  关键字检索条件
    *
    * @return string|null
    */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
    * Sets search
    *
    * @param string|null $search 关键字检索条件
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets alarmLevelIds
    *  告警级别(\"Critical\",\"Major\",\"Minor\",\"Info\")
    *
    * @return string[]|null
    */
    public function getAlarmLevelIds()
    {
        return $this->container['alarmLevelIds'];
    }

    /**
    * Sets alarmLevelIds
    *
    * @param string[]|null $alarmLevelIds 告警级别(\"Critical\",\"Major\",\"Minor\",\"Info\")
    *
    * @return $this
    */
    public function setAlarmLevelIds($alarmLevelIds)
    {
        $this->container['alarmLevelIds'] = $alarmLevelIds;
        return $this;
    }

    /**
    * Gets sort
    *  sort
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Sort|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Sort|null $sort sort
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
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

