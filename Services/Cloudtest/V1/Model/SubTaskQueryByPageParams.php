<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubTaskQueryByPageParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTaskQueryByPageParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * more  more
    * notSetReleaseDev  未设置发布版本
    * pageNumber  页码
    * pageSize  每页大小
    * parentSubTaskId  父任务id
    * planId  测试计划id
    * releaseDev  -| 发布的版本，空数组：代表所有未设置的； null或者无此字段，搜索所有版本 有内容：搜索所有版本
    * results  results
    * startTimeBegin  任务执行第一次时间
    * startTimeEnd  任务执行最后一次时间
    * state  状态
    * states  子任务状态列表
    * subTaskId  子任务任务id
    * suiteType  测试套类型
    * taskId  任务id
    * taskTypeId  任务类型，1=拨测，2=冒烟
    * testServiceId  项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'more' => 'bool',
            'notSetReleaseDev' => 'bool',
            'pageNumber' => 'int',
            'pageSize' => 'int',
            'parentSubTaskId' => 'string',
            'planId' => 'string',
            'releaseDev' => 'string[]',
            'results' => 'int[]',
            'startTimeBegin' => 'int',
            'startTimeEnd' => 'int',
            'state' => 'int',
            'states' => 'int[]',
            'subTaskId' => 'string',
            'suiteType' => 'int',
            'taskId' => 'string',
            'taskTypeId' => 'string',
            'testServiceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * more  more
    * notSetReleaseDev  未设置发布版本
    * pageNumber  页码
    * pageSize  每页大小
    * parentSubTaskId  父任务id
    * planId  测试计划id
    * releaseDev  -| 发布的版本，空数组：代表所有未设置的； null或者无此字段，搜索所有版本 有内容：搜索所有版本
    * results  results
    * startTimeBegin  任务执行第一次时间
    * startTimeEnd  任务执行最后一次时间
    * state  状态
    * states  子任务状态列表
    * subTaskId  子任务任务id
    * suiteType  测试套类型
    * taskId  任务id
    * taskTypeId  任务类型，1=拨测，2=冒烟
    * testServiceId  项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'more' => null,
        'notSetReleaseDev' => null,
        'pageNumber' => 'int32',
        'pageSize' => 'int32',
        'parentSubTaskId' => null,
        'planId' => null,
        'releaseDev' => null,
        'results' => 'int32',
        'startTimeBegin' => 'int64',
        'startTimeEnd' => 'int64',
        'state' => 'int32',
        'states' => 'int32',
        'subTaskId' => null,
        'suiteType' => 'int32',
        'taskId' => null,
        'taskTypeId' => null,
        'testServiceId' => null
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
    * more  more
    * notSetReleaseDev  未设置发布版本
    * pageNumber  页码
    * pageSize  每页大小
    * parentSubTaskId  父任务id
    * planId  测试计划id
    * releaseDev  -| 发布的版本，空数组：代表所有未设置的； null或者无此字段，搜索所有版本 有内容：搜索所有版本
    * results  results
    * startTimeBegin  任务执行第一次时间
    * startTimeEnd  任务执行最后一次时间
    * state  状态
    * states  子任务状态列表
    * subTaskId  子任务任务id
    * suiteType  测试套类型
    * taskId  任务id
    * taskTypeId  任务类型，1=拨测，2=冒烟
    * testServiceId  项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'more' => 'more',
            'notSetReleaseDev' => 'notSetReleaseDev',
            'pageNumber' => 'page_number',
            'pageSize' => 'page_size',
            'parentSubTaskId' => 'parent_sub_task_id',
            'planId' => 'plan_id',
            'releaseDev' => 'release_dev',
            'results' => 'results',
            'startTimeBegin' => 'start_time_begin',
            'startTimeEnd' => 'start_time_end',
            'state' => 'state',
            'states' => 'states',
            'subTaskId' => 'sub_task_id',
            'suiteType' => 'suite_type',
            'taskId' => 'task_id',
            'taskTypeId' => 'task_type_id',
            'testServiceId' => 'test_service_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * more  more
    * notSetReleaseDev  未设置发布版本
    * pageNumber  页码
    * pageSize  每页大小
    * parentSubTaskId  父任务id
    * planId  测试计划id
    * releaseDev  -| 发布的版本，空数组：代表所有未设置的； null或者无此字段，搜索所有版本 有内容：搜索所有版本
    * results  results
    * startTimeBegin  任务执行第一次时间
    * startTimeEnd  任务执行最后一次时间
    * state  状态
    * states  子任务状态列表
    * subTaskId  子任务任务id
    * suiteType  测试套类型
    * taskId  任务id
    * taskTypeId  任务类型，1=拨测，2=冒烟
    * testServiceId  项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'more' => 'setMore',
            'notSetReleaseDev' => 'setNotSetReleaseDev',
            'pageNumber' => 'setPageNumber',
            'pageSize' => 'setPageSize',
            'parentSubTaskId' => 'setParentSubTaskId',
            'planId' => 'setPlanId',
            'releaseDev' => 'setReleaseDev',
            'results' => 'setResults',
            'startTimeBegin' => 'setStartTimeBegin',
            'startTimeEnd' => 'setStartTimeEnd',
            'state' => 'setState',
            'states' => 'setStates',
            'subTaskId' => 'setSubTaskId',
            'suiteType' => 'setSuiteType',
            'taskId' => 'setTaskId',
            'taskTypeId' => 'setTaskTypeId',
            'testServiceId' => 'setTestServiceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * more  more
    * notSetReleaseDev  未设置发布版本
    * pageNumber  页码
    * pageSize  每页大小
    * parentSubTaskId  父任务id
    * planId  测试计划id
    * releaseDev  -| 发布的版本，空数组：代表所有未设置的； null或者无此字段，搜索所有版本 有内容：搜索所有版本
    * results  results
    * startTimeBegin  任务执行第一次时间
    * startTimeEnd  任务执行最后一次时间
    * state  状态
    * states  子任务状态列表
    * subTaskId  子任务任务id
    * suiteType  测试套类型
    * taskId  任务id
    * taskTypeId  任务类型，1=拨测，2=冒烟
    * testServiceId  项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'more' => 'getMore',
            'notSetReleaseDev' => 'getNotSetReleaseDev',
            'pageNumber' => 'getPageNumber',
            'pageSize' => 'getPageSize',
            'parentSubTaskId' => 'getParentSubTaskId',
            'planId' => 'getPlanId',
            'releaseDev' => 'getReleaseDev',
            'results' => 'getResults',
            'startTimeBegin' => 'getStartTimeBegin',
            'startTimeEnd' => 'getStartTimeEnd',
            'state' => 'getState',
            'states' => 'getStates',
            'subTaskId' => 'getSubTaskId',
            'suiteType' => 'getSuiteType',
            'taskId' => 'getTaskId',
            'taskTypeId' => 'getTaskTypeId',
            'testServiceId' => 'getTestServiceId'
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
        $this->container['more'] = isset($data['more']) ? $data['more'] : null;
        $this->container['notSetReleaseDev'] = isset($data['notSetReleaseDev']) ? $data['notSetReleaseDev'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['parentSubTaskId'] = isset($data['parentSubTaskId']) ? $data['parentSubTaskId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['startTimeBegin'] = isset($data['startTimeBegin']) ? $data['startTimeBegin'] : null;
        $this->container['startTimeEnd'] = isset($data['startTimeEnd']) ? $data['startTimeEnd'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['subTaskId'] = isset($data['subTaskId']) ? $data['subTaskId'] : null;
        $this->container['suiteType'] = isset($data['suiteType']) ? $data['suiteType'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskTypeId'] = isset($data['taskTypeId']) ? $data['taskTypeId'] : null;
        $this->container['testServiceId'] = isset($data['testServiceId']) ? $data['testServiceId'] : null;
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
    * Gets more
    *  more
    *
    * @return bool|null
    */
    public function getMore()
    {
        return $this->container['more'];
    }

    /**
    * Sets more
    *
    * @param bool|null $more more
    *
    * @return $this
    */
    public function setMore($more)
    {
        $this->container['more'] = $more;
        return $this;
    }

    /**
    * Gets notSetReleaseDev
    *  未设置发布版本
    *
    * @return bool|null
    */
    public function getNotSetReleaseDev()
    {
        return $this->container['notSetReleaseDev'];
    }

    /**
    * Sets notSetReleaseDev
    *
    * @param bool|null $notSetReleaseDev 未设置发布版本
    *
    * @return $this
    */
    public function setNotSetReleaseDev($notSetReleaseDev)
    {
        $this->container['notSetReleaseDev'] = $notSetReleaseDev;
        return $this;
    }

    /**
    * Gets pageNumber
    *  页码
    *
    * @return int|null
    */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
    * Sets pageNumber
    *
    * @param int|null $pageNumber 页码
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页大小
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
    * @param int|null $pageSize 每页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets parentSubTaskId
    *  父任务id
    *
    * @return string|null
    */
    public function getParentSubTaskId()
    {
        return $this->container['parentSubTaskId'];
    }

    /**
    * Sets parentSubTaskId
    *
    * @param string|null $parentSubTaskId 父任务id
    *
    * @return $this
    */
    public function setParentSubTaskId($parentSubTaskId)
    {
        $this->container['parentSubTaskId'] = $parentSubTaskId;
        return $this;
    }

    /**
    * Gets planId
    *  测试计划id
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId 测试计划id
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets releaseDev
    *  -| 发布的版本，空数组：代表所有未设置的； null或者无此字段，搜索所有版本 有内容：搜索所有版本
    *
    * @return string[]|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string[]|null $releaseDev -| 发布的版本，空数组：代表所有未设置的； null或者无此字段，搜索所有版本 有内容：搜索所有版本
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets results
    *  results
    *
    * @return int[]|null
    */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
    * Sets results
    *
    * @param int[]|null $results results
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
        return $this;
    }

    /**
    * Gets startTimeBegin
    *  任务执行第一次时间
    *
    * @return int|null
    */
    public function getStartTimeBegin()
    {
        return $this->container['startTimeBegin'];
    }

    /**
    * Sets startTimeBegin
    *
    * @param int|null $startTimeBegin 任务执行第一次时间
    *
    * @return $this
    */
    public function setStartTimeBegin($startTimeBegin)
    {
        $this->container['startTimeBegin'] = $startTimeBegin;
        return $this;
    }

    /**
    * Gets startTimeEnd
    *  任务执行最后一次时间
    *
    * @return int|null
    */
    public function getStartTimeEnd()
    {
        return $this->container['startTimeEnd'];
    }

    /**
    * Sets startTimeEnd
    *
    * @param int|null $startTimeEnd 任务执行最后一次时间
    *
    * @return $this
    */
    public function setStartTimeEnd($startTimeEnd)
    {
        $this->container['startTimeEnd'] = $startTimeEnd;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return int|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets states
    *  子任务状态列表
    *
    * @return int[]|null
    */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
    * Sets states
    *
    * @param int[]|null $states 子任务状态列表
    *
    * @return $this
    */
    public function setStates($states)
    {
        $this->container['states'] = $states;
        return $this;
    }

    /**
    * Gets subTaskId
    *  子任务任务id
    *
    * @return string|null
    */
    public function getSubTaskId()
    {
        return $this->container['subTaskId'];
    }

    /**
    * Sets subTaskId
    *
    * @param string|null $subTaskId 子任务任务id
    *
    * @return $this
    */
    public function setSubTaskId($subTaskId)
    {
        $this->container['subTaskId'] = $subTaskId;
        return $this;
    }

    /**
    * Gets suiteType
    *  测试套类型
    *
    * @return int|null
    */
    public function getSuiteType()
    {
        return $this->container['suiteType'];
    }

    /**
    * Sets suiteType
    *
    * @param int|null $suiteType 测试套类型
    *
    * @return $this
    */
    public function setSuiteType($suiteType)
    {
        $this->container['suiteType'] = $suiteType;
        return $this;
    }

    /**
    * Gets taskId
    *  任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskTypeId
    *  任务类型，1=拨测，2=冒烟
    *
    * @return string|null
    */
    public function getTaskTypeId()
    {
        return $this->container['taskTypeId'];
    }

    /**
    * Sets taskTypeId
    *
    * @param string|null $taskTypeId 任务类型，1=拨测，2=冒烟
    *
    * @return $this
    */
    public function setTaskTypeId($taskTypeId)
    {
        $this->container['taskTypeId'] = $taskTypeId;
        return $this;
    }

    /**
    * Gets testServiceId
    *  项目id
    *
    * @return string|null
    */
    public function getTestServiceId()
    {
        return $this->container['testServiceId'];
    }

    /**
    * Sets testServiceId
    *
    * @param string|null $testServiceId 项目id
    *
    * @return $this
    */
    public function setTestServiceId($testServiceId)
    {
        $this->container['testServiceId'] = $testServiceId;
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

