<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQualityTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQualityTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoryId  目录ID
    * name  name
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * creator  创建人
    * limit  分页条数,最大值为100
    * offset  分页偏移量,最小值0
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoryId' => 'int',
            'name' => 'string',
            'scheduleStatus' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'creator' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'workspace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoryId  目录ID
    * name  name
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * creator  创建人
    * limit  分页条数,最大值为100
    * offset  分页偏移量,最小值0
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoryId' => 'int64',
        'name' => null,
        'scheduleStatus' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'creator' => null,
        'limit' => 'int64',
        'offset' => 'int64',
        'workspace' => null
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
    * categoryId  目录ID
    * name  name
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * creator  创建人
    * limit  分页条数,最大值为100
    * offset  分页偏移量,最小值0
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoryId' => 'category_id',
            'name' => 'name',
            'scheduleStatus' => 'schedule_status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'creator' => 'creator',
            'limit' => 'limit',
            'offset' => 'offset',
            'workspace' => 'workspace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoryId  目录ID
    * name  name
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * creator  创建人
    * limit  分页条数,最大值为100
    * offset  分页偏移量,最小值0
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $setters = [
            'categoryId' => 'setCategoryId',
            'name' => 'setName',
            'scheduleStatus' => 'setScheduleStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'creator' => 'setCreator',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'workspace' => 'setWorkspace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoryId  目录ID
    * name  name
    * scheduleStatus  调度状态 UNKNOWN:未知,NOT_START:未启动,SCHEDULING:调度中,FINISH_SUCCESS:正常结束,KILL:手动停止,RUNNING_EXCEPTION:运行失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * creator  创建人
    * limit  分页条数,最大值为100
    * offset  分页偏移量,最小值0
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $getters = [
            'categoryId' => 'getCategoryId',
            'name' => 'getName',
            'scheduleStatus' => 'getScheduleStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'creator' => 'getCreator',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'workspace' => 'getWorkspace'
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
    const SCHEDULE_STATUS_UNKNOWN = 'UNKNOWN';
    const SCHEDULE_STATUS_NOT_START = 'NOT_START';
    const SCHEDULE_STATUS_SCHEDULING = 'SCHEDULING';
    const SCHEDULE_STATUS_FINISH_SUCCESS = 'FINISH_SUCCESS';
    const SCHEDULE_STATUS_KILL = 'KILL';
    const SCHEDULE_STATUS_RUNNING_EXCEPTION = 'RUNNING_EXCEPTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScheduleStatusAllowableValues()
    {
        return [
            self::SCHEDULE_STATUS_UNKNOWN,
            self::SCHEDULE_STATUS_NOT_START,
            self::SCHEDULE_STATUS_SCHEDULING,
            self::SCHEDULE_STATUS_FINISH_SUCCESS,
            self::SCHEDULE_STATUS_KILL,
            self::SCHEDULE_STATUS_RUNNING_EXCEPTION,
        ];
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
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['scheduleStatus'] = isset($data['scheduleStatus']) ? $data['scheduleStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getScheduleStatusAllowableValues();
                if (!is_null($this->container['scheduleStatus']) && !in_array($this->container['scheduleStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scheduleStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
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
    * Gets startTime
    *  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
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
    * @param int|null $startTime 最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
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
    *  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
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
    * @param int|null $endTime 最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
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
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets limit
    *  分页条数,最大值为100
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页条数,最大值为100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页偏移量,最小值0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页偏移量,最小值0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets workspace
    *  workspace 信息
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace workspace 信息
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
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

