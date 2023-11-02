<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QualityTaskOverviewVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QualityTaskOverviewVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  name
    * categoryId  目录ID
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * schedulePeriod  调度周期 MINUTE:按分钟调度,HOUR:按小时调度,DAY:按天调度,WEEK:按周调度
    * scheduleInterval  调度间隔 当调度周期为分钟、小时、天时，返回数值字符串，当调度周期为周时，返回具体的调度星期信息如（MONDAY,THURSDAY）
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * creator  创建者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'categoryId' => 'int',
            'scheduleStatus' => 'string',
            'schedulePeriod' => 'string',
            'scheduleInterval' => 'string',
            'createTime' => 'int',
            'lastRunTime' => 'int',
            'creator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  name
    * categoryId  目录ID
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * schedulePeriod  调度周期 MINUTE:按分钟调度,HOUR:按小时调度,DAY:按天调度,WEEK:按周调度
    * scheduleInterval  调度间隔 当调度周期为分钟、小时、天时，返回数值字符串，当调度周期为周时，返回具体的调度星期信息如（MONDAY,THURSDAY）
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * creator  创建者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'categoryId' => 'int64',
        'scheduleStatus' => null,
        'schedulePeriod' => null,
        'scheduleInterval' => null,
        'createTime' => 'int64',
        'lastRunTime' => 'int64',
        'creator' => null
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
    * id  id
    * name  name
    * categoryId  目录ID
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * schedulePeriod  调度周期 MINUTE:按分钟调度,HOUR:按小时调度,DAY:按天调度,WEEK:按周调度
    * scheduleInterval  调度间隔 当调度周期为分钟、小时、天时，返回数值字符串，当调度周期为周时，返回具体的调度星期信息如（MONDAY,THURSDAY）
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * creator  创建者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'categoryId' => 'category_id',
            'scheduleStatus' => 'schedule_status',
            'schedulePeriod' => 'schedule_period',
            'scheduleInterval' => 'schedule_interval',
            'createTime' => 'create_time',
            'lastRunTime' => 'last_run_time',
            'creator' => 'creator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  name
    * categoryId  目录ID
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * schedulePeriod  调度周期 MINUTE:按分钟调度,HOUR:按小时调度,DAY:按天调度,WEEK:按周调度
    * scheduleInterval  调度间隔 当调度周期为分钟、小时、天时，返回数值字符串，当调度周期为周时，返回具体的调度星期信息如（MONDAY,THURSDAY）
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * creator  创建者
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'categoryId' => 'setCategoryId',
            'scheduleStatus' => 'setScheduleStatus',
            'schedulePeriod' => 'setSchedulePeriod',
            'scheduleInterval' => 'setScheduleInterval',
            'createTime' => 'setCreateTime',
            'lastRunTime' => 'setLastRunTime',
            'creator' => 'setCreator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  name
    * categoryId  目录ID
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * schedulePeriod  调度周期 MINUTE:按分钟调度,HOUR:按小时调度,DAY:按天调度,WEEK:按周调度
    * scheduleInterval  调度间隔 当调度周期为分钟、小时、天时，返回数值字符串，当调度周期为周时，返回具体的调度星期信息如（MONDAY,THURSDAY）
    * createTime  创建时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * creator  创建者
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'categoryId' => 'getCategoryId',
            'scheduleStatus' => 'getScheduleStatus',
            'schedulePeriod' => 'getSchedulePeriod',
            'scheduleInterval' => 'getScheduleInterval',
            'createTime' => 'getCreateTime',
            'lastRunTime' => 'getLastRunTime',
            'creator' => 'getCreator'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['scheduleStatus'] = isset($data['scheduleStatus']) ? $data['scheduleStatus'] : null;
        $this->container['schedulePeriod'] = isset($data['schedulePeriod']) ? $data['schedulePeriod'] : null;
        $this->container['scheduleInterval'] = isset($data['scheduleInterval']) ? $data['scheduleInterval'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastRunTime'] = isset($data['lastRunTime']) ? $data['lastRunTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
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
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  name
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets categoryId
    *  目录ID
    *
    * @return int|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param int|null $categoryId 目录ID
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets scheduleStatus
    *  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    *
    * @return string|null
    */
    public function getScheduleStatus()
    {
        return $this->container['scheduleStatus'];
    }

    /**
    * Sets scheduleStatus
    *
    * @param string|null $scheduleStatus 调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    *
    * @return $this
    */
    public function setScheduleStatus($scheduleStatus)
    {
        $this->container['scheduleStatus'] = $scheduleStatus;
        return $this;
    }

    /**
    * Gets schedulePeriod
    *  调度周期 MINUTE:按分钟调度,HOUR:按小时调度,DAY:按天调度,WEEK:按周调度
    *
    * @return string|null
    */
    public function getSchedulePeriod()
    {
        return $this->container['schedulePeriod'];
    }

    /**
    * Sets schedulePeriod
    *
    * @param string|null $schedulePeriod 调度周期 MINUTE:按分钟调度,HOUR:按小时调度,DAY:按天调度,WEEK:按周调度
    *
    * @return $this
    */
    public function setSchedulePeriod($schedulePeriod)
    {
        $this->container['schedulePeriod'] = $schedulePeriod;
        return $this;
    }

    /**
    * Gets scheduleInterval
    *  调度间隔 当调度周期为分钟、小时、天时，返回数值字符串，当调度周期为周时，返回具体的调度星期信息如（MONDAY,THURSDAY）
    *
    * @return string|null
    */
    public function getScheduleInterval()
    {
        return $this->container['scheduleInterval'];
    }

    /**
    * Sets scheduleInterval
    *
    * @param string|null $scheduleInterval 调度间隔 当调度周期为分钟、小时、天时，返回数值字符串，当调度周期为周时，返回具体的调度星期信息如（MONDAY,THURSDAY）
    *
    * @return $this
    */
    public function setScheduleInterval($scheduleInterval)
    {
        $this->container['scheduleInterval'] = $scheduleInterval;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间,13位时间戳(精确到毫秒)
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间,13位时间戳(精确到毫秒)
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastRunTime
    *  最近运行时间,13位时间戳(精确到毫秒)
    *
    * @return int|null
    */
    public function getLastRunTime()
    {
        return $this->container['lastRunTime'];
    }

    /**
    * Sets lastRunTime
    *
    * @param int|null $lastRunTime 最近运行时间,13位时间戳(精确到毫秒)
    *
    * @return $this
    */
    public function setLastRunTime($lastRunTime)
    {
        $this->container['lastRunTime'] = $lastRunTime;
        return $this;
    }

    /**
    * Gets creator
    *  创建者
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建者
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
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

