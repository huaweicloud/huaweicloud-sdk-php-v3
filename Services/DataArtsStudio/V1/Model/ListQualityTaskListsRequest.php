<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQualityTaskListsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQualityTaskListsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * start  start number
    * pageSize  page size
    * offset  分页查询偏移量
    * limit  每页显示的条目数量
    * categoryId  category id
    * ruleName  rule name
    * scheduleStatus  schedule status
    * schedulePeriod  schedule period
    * startTime  开始时间(搜索)
    * endTime  结束时间(搜索)
    * resultStatus  最近运行结果 0：运行中 1：异常 2：告警 3：正常
    * sort  排序字段
    * order  排序方式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'start' => 'int',
            'pageSize' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'categoryId' => 'int',
            'ruleName' => 'string',
            'scheduleStatus' => 'int',
            'schedulePeriod' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'resultStatus' => 'int',
            'sort' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * start  start number
    * pageSize  page size
    * offset  分页查询偏移量
    * limit  每页显示的条目数量
    * categoryId  category id
    * ruleName  rule name
    * scheduleStatus  schedule status
    * schedulePeriod  schedule period
    * startTime  开始时间(搜索)
    * endTime  结束时间(搜索)
    * resultStatus  最近运行结果 0：运行中 1：异常 2：告警 3：正常
    * sort  排序字段
    * order  排序方式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'start' => 'int64',
        'pageSize' => 'int64',
        'offset' => 'int32',
        'limit' => 'int32',
        'categoryId' => 'int64',
        'ruleName' => null,
        'scheduleStatus' => 'int',
        'schedulePeriod' => 'int',
        'startTime' => null,
        'endTime' => null,
        'resultStatus' => null,
        'sort' => null,
        'order' => null
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
    * start  start number
    * pageSize  page size
    * offset  分页查询偏移量
    * limit  每页显示的条目数量
    * categoryId  category id
    * ruleName  rule name
    * scheduleStatus  schedule status
    * schedulePeriod  schedule period
    * startTime  开始时间(搜索)
    * endTime  结束时间(搜索)
    * resultStatus  最近运行结果 0：运行中 1：异常 2：告警 3：正常
    * sort  排序字段
    * order  排序方式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'start' => 'start',
            'pageSize' => 'page_size',
            'offset' => 'offset',
            'limit' => 'limit',
            'categoryId' => 'category_id',
            'ruleName' => 'rule_name',
            'scheduleStatus' => 'schedule_status',
            'schedulePeriod' => 'schedule_period',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'resultStatus' => 'result_status',
            'sort' => 'sort',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * start  start number
    * pageSize  page size
    * offset  分页查询偏移量
    * limit  每页显示的条目数量
    * categoryId  category id
    * ruleName  rule name
    * scheduleStatus  schedule status
    * schedulePeriod  schedule period
    * startTime  开始时间(搜索)
    * endTime  结束时间(搜索)
    * resultStatus  最近运行结果 0：运行中 1：异常 2：告警 3：正常
    * sort  排序字段
    * order  排序方式
    *
    * @var string[]
    */
    protected static $setters = [
            'start' => 'setStart',
            'pageSize' => 'setPageSize',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'categoryId' => 'setCategoryId',
            'ruleName' => 'setRuleName',
            'scheduleStatus' => 'setScheduleStatus',
            'schedulePeriod' => 'setSchedulePeriod',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'resultStatus' => 'setResultStatus',
            'sort' => 'setSort',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * start  start number
    * pageSize  page size
    * offset  分页查询偏移量
    * limit  每页显示的条目数量
    * categoryId  category id
    * ruleName  rule name
    * scheduleStatus  schedule status
    * schedulePeriod  schedule period
    * startTime  开始时间(搜索)
    * endTime  结束时间(搜索)
    * resultStatus  最近运行结果 0：运行中 1：异常 2：告警 3：正常
    * sort  排序字段
    * order  排序方式
    *
    * @var string[]
    */
    protected static $getters = [
            'start' => 'getStart',
            'pageSize' => 'getPageSize',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'categoryId' => 'getCategoryId',
            'ruleName' => 'getRuleName',
            'scheduleStatus' => 'getScheduleStatus',
            'schedulePeriod' => 'getSchedulePeriod',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'resultStatus' => 'getResultStatus',
            'sort' => 'getSort',
            'order' => 'getOrder'
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['scheduleStatus'] = isset($data['scheduleStatus']) ? $data['scheduleStatus'] : null;
        $this->container['schedulePeriod'] = isset($data['schedulePeriod']) ? $data['schedulePeriod'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['resultStatus'] = isset($data['resultStatus']) ? $data['resultStatus'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
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
    * Gets start
    *  start number
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start start number
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets pageSize
    *  page size
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize page size
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询偏移量
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
    * @param int|null $offset 分页查询偏移量
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
    *  每页显示的条目数量
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
    * @param int|null $limit 每页显示的条目数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets categoryId
    *  category id
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
    * @param int|null $categoryId category id
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets ruleName
    *  rule name
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName rule name
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets scheduleStatus
    *  schedule status
    *
    * @return int|null
    */
    public function getScheduleStatus()
    {
        return $this->container['scheduleStatus'];
    }

    /**
    * Sets scheduleStatus
    *
    * @param int|null $scheduleStatus schedule status
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
    *  schedule period
    *
    * @return int|null
    */
    public function getSchedulePeriod()
    {
        return $this->container['schedulePeriod'];
    }

    /**
    * Sets schedulePeriod
    *
    * @param int|null $schedulePeriod schedule period
    *
    * @return $this
    */
    public function setSchedulePeriod($schedulePeriod)
    {
        $this->container['schedulePeriod'] = $schedulePeriod;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间(搜索)
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间(搜索)
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
    *  结束时间(搜索)
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间(搜索)
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets resultStatus
    *  最近运行结果 0：运行中 1：异常 2：告警 3：正常
    *
    * @return int|null
    */
    public function getResultStatus()
    {
        return $this->container['resultStatus'];
    }

    /**
    * Sets resultStatus
    *
    * @param int|null $resultStatus 最近运行结果 0：运行中 1：异常 2：告警 3：正常
    *
    * @return $this
    */
    public function setResultStatus($resultStatus)
    {
        $this->container['resultStatus'] = $resultStatus;
        return $this;
    }

    /**
    * Gets sort
    *  排序字段
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 排序字段
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets order
    *  排序方式
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序方式
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

