<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduledTaskHistoryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduledTaskHistoryRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  ID of ScheduledTask
    * id  工单ID
    * region  区域
    * status  状态
    * startedStartTime  开始时间参数的查询开始区间时间戳
    * startedEndTime  开始时间参数的查询结束区间时间戳
    * finishedStartTime  结束时间参数的查询开始区间时间戳
    * finishedEndTime  结束时间参数的查询结束区间时间戳
    * marker  上一页数据的最后一条记录的id
    * offset  分页指针
    * limit  每页数量
    * sortKey  排序字段名：支持 started_time,finished_time
    * sortDir  排序方式，asc升序，desc降序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'id' => 'string',
            'region' => 'string',
            'status' => 'string',
            'startedStartTime' => 'int',
            'startedEndTime' => 'int',
            'finishedStartTime' => 'int',
            'finishedEndTime' => 'int',
            'marker' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  ID of ScheduledTask
    * id  工单ID
    * region  区域
    * status  状态
    * startedStartTime  开始时间参数的查询开始区间时间戳
    * startedEndTime  开始时间参数的查询结束区间时间戳
    * finishedStartTime  结束时间参数的查询开始区间时间戳
    * finishedEndTime  结束时间参数的查询结束区间时间戳
    * marker  上一页数据的最后一条记录的id
    * offset  分页指针
    * limit  每页数量
    * sortKey  排序字段名：支持 started_time,finished_time
    * sortDir  排序方式，asc升序，desc降序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'id' => null,
        'region' => null,
        'status' => null,
        'startedStartTime' => 'int64',
        'startedEndTime' => 'int64',
        'finishedStartTime' => 'int64',
        'finishedEndTime' => 'int64',
        'marker' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'sortKey' => null,
        'sortDir' => null
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
    * taskId  ID of ScheduledTask
    * id  工单ID
    * region  区域
    * status  状态
    * startedStartTime  开始时间参数的查询开始区间时间戳
    * startedEndTime  开始时间参数的查询结束区间时间戳
    * finishedStartTime  结束时间参数的查询开始区间时间戳
    * finishedEndTime  结束时间参数的查询结束区间时间戳
    * marker  上一页数据的最后一条记录的id
    * offset  分页指针
    * limit  每页数量
    * sortKey  排序字段名：支持 started_time,finished_time
    * sortDir  排序方式，asc升序，desc降序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'id' => 'id',
            'region' => 'region',
            'status' => 'status',
            'startedStartTime' => 'started_start_time',
            'startedEndTime' => 'started_end_time',
            'finishedStartTime' => 'finished_start_time',
            'finishedEndTime' => 'finished_end_time',
            'marker' => 'marker',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  ID of ScheduledTask
    * id  工单ID
    * region  区域
    * status  状态
    * startedStartTime  开始时间参数的查询开始区间时间戳
    * startedEndTime  开始时间参数的查询结束区间时间戳
    * finishedStartTime  结束时间参数的查询开始区间时间戳
    * finishedEndTime  结束时间参数的查询结束区间时间戳
    * marker  上一页数据的最后一条记录的id
    * offset  分页指针
    * limit  每页数量
    * sortKey  排序字段名：支持 started_time,finished_time
    * sortDir  排序方式，asc升序，desc降序
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'id' => 'setId',
            'region' => 'setRegion',
            'status' => 'setStatus',
            'startedStartTime' => 'setStartedStartTime',
            'startedEndTime' => 'setStartedEndTime',
            'finishedStartTime' => 'setFinishedStartTime',
            'finishedEndTime' => 'setFinishedEndTime',
            'marker' => 'setMarker',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  ID of ScheduledTask
    * id  工单ID
    * region  区域
    * status  状态
    * startedStartTime  开始时间参数的查询开始区间时间戳
    * startedEndTime  开始时间参数的查询结束区间时间戳
    * finishedStartTime  结束时间参数的查询开始区间时间戳
    * finishedEndTime  结束时间参数的查询结束区间时间戳
    * marker  上一页数据的最后一条记录的id
    * offset  分页指针
    * limit  每页数量
    * sortKey  排序字段名：支持 started_time,finished_time
    * sortDir  排序方式，asc升序，desc降序
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'id' => 'getId',
            'region' => 'getRegion',
            'status' => 'getStatus',
            'startedStartTime' => 'getStartedStartTime',
            'startedEndTime' => 'getStartedEndTime',
            'finishedStartTime' => 'getFinishedStartTime',
            'finishedEndTime' => 'getFinishedEndTime',
            'marker' => 'getMarker',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
    const SORT_KEY_STARTED_TIME = 'started_time';
    const SORT_KEY_FINISHED_TIME = 'finished_time';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_STARTED_TIME,
            self::SORT_KEY_FINISHED_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startedStartTime'] = isset($data['startedStartTime']) ? $data['startedStartTime'] : null;
        $this->container['startedEndTime'] = isset($data['startedEndTime']) ? $data['startedEndTime'] : null;
        $this->container['finishedStartTime'] = isset($data['finishedStartTime']) ? $data['finishedStartTime'] : null;
        $this->container['finishedEndTime'] = isset($data['finishedEndTime']) ? $data['finishedEndTime'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if ((mb_strlen($this->container['taskId']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startedStartTime']) && ($this->container['startedStartTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'startedStartTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['startedStartTime']) && ($this->container['startedStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startedStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startedEndTime']) && ($this->container['startedEndTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'startedEndTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['startedEndTime']) && ($this->container['startedEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startedEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finishedEndTime']) && ($this->container['finishedEndTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'finishedEndTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['finishedEndTime']) && ($this->container['finishedEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'finishedEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 128)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 32)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 32)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  ID of ScheduledTask
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId ID of ScheduledTask
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets id
    *  工单ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 工单ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startedStartTime
    *  开始时间参数的查询开始区间时间戳
    *
    * @return int|null
    */
    public function getStartedStartTime()
    {
        return $this->container['startedStartTime'];
    }

    /**
    * Sets startedStartTime
    *
    * @param int|null $startedStartTime 开始时间参数的查询开始区间时间戳
    *
    * @return $this
    */
    public function setStartedStartTime($startedStartTime)
    {
        $this->container['startedStartTime'] = $startedStartTime;
        return $this;
    }

    /**
    * Gets startedEndTime
    *  开始时间参数的查询结束区间时间戳
    *
    * @return int|null
    */
    public function getStartedEndTime()
    {
        return $this->container['startedEndTime'];
    }

    /**
    * Sets startedEndTime
    *
    * @param int|null $startedEndTime 开始时间参数的查询结束区间时间戳
    *
    * @return $this
    */
    public function setStartedEndTime($startedEndTime)
    {
        $this->container['startedEndTime'] = $startedEndTime;
        return $this;
    }

    /**
    * Gets finishedStartTime
    *  结束时间参数的查询开始区间时间戳
    *
    * @return int|null
    */
    public function getFinishedStartTime()
    {
        return $this->container['finishedStartTime'];
    }

    /**
    * Sets finishedStartTime
    *
    * @param int|null $finishedStartTime 结束时间参数的查询开始区间时间戳
    *
    * @return $this
    */
    public function setFinishedStartTime($finishedStartTime)
    {
        $this->container['finishedStartTime'] = $finishedStartTime;
        return $this;
    }

    /**
    * Gets finishedEndTime
    *  结束时间参数的查询结束区间时间戳
    *
    * @return int|null
    */
    public function getFinishedEndTime()
    {
        return $this->container['finishedEndTime'];
    }

    /**
    * Sets finishedEndTime
    *
    * @param int|null $finishedEndTime 结束时间参数的查询结束区间时间戳
    *
    * @return $this
    */
    public function setFinishedEndTime($finishedEndTime)
    {
        $this->container['finishedEndTime'] = $finishedEndTime;
        return $this;
    }

    /**
    * Gets marker
    *  上一页数据的最后一条记录的id
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页数据的最后一条记录的id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets offset
    *  分页指针
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
    * @param int|null $offset 分页指针
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页数量
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段名：支持 started_time,finished_time
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段名：支持 started_time,finished_time
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序方式，asc升序，desc降序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方式，asc升序，desc降序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

