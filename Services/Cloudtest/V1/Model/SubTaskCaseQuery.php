<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubTaskCaseQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTaskCaseQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createUser  用例创建者
    * endTime  用例结束时间
    * keyWord  keyWord
    * locationId  执行机区域ID
    * more  more
    * pageNum  分页时页码
    * pageSize  分页时每页大小
    * pid  告警策略选择失败后重试时有值
    * results  cloudTest任务执行结果列表
    * sortBy  排序字段
    * stage  用例所处的阶段 0：前置， 1：测试用例 2：后置用例
    * startTime  用例开始时间
    * state  状态
    * subtaskIds  子任务ID列表
    * subtaskId  子任务ID
    * suiteType  suiteType
    * taskId  任务ID
    * taskIds  任务ID列表
    * taskTypeId  任务类型
    * testServiceId  服务ID
    * testcaseId  用例ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createUser' => 'string',
            'endTime' => 'int',
            'keyWord' => 'string',
            'locationId' => 'string',
            'more' => 'bool',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'pid' => 'string',
            'results' => 'int[]',
            'sortBy' => 'string',
            'stage' => 'int',
            'startTime' => 'int',
            'state' => 'string',
            'subtaskIds' => 'string[]',
            'subtaskId' => 'string',
            'suiteType' => 'int',
            'taskId' => 'string',
            'taskIds' => 'string[]',
            'taskTypeId' => 'string',
            'testServiceId' => 'string',
            'testcaseId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createUser  用例创建者
    * endTime  用例结束时间
    * keyWord  keyWord
    * locationId  执行机区域ID
    * more  more
    * pageNum  分页时页码
    * pageSize  分页时每页大小
    * pid  告警策略选择失败后重试时有值
    * results  cloudTest任务执行结果列表
    * sortBy  排序字段
    * stage  用例所处的阶段 0：前置， 1：测试用例 2：后置用例
    * startTime  用例开始时间
    * state  状态
    * subtaskIds  子任务ID列表
    * subtaskId  子任务ID
    * suiteType  suiteType
    * taskId  任务ID
    * taskIds  任务ID列表
    * taskTypeId  任务类型
    * testServiceId  服务ID
    * testcaseId  用例ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createUser' => null,
        'endTime' => 'int64',
        'keyWord' => null,
        'locationId' => null,
        'more' => null,
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'pid' => null,
        'results' => 'int32',
        'sortBy' => null,
        'stage' => 'int32',
        'startTime' => 'int64',
        'state' => null,
        'subtaskIds' => null,
        'subtaskId' => null,
        'suiteType' => 'int32',
        'taskId' => null,
        'taskIds' => null,
        'taskTypeId' => null,
        'testServiceId' => null,
        'testcaseId' => null
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
    * createUser  用例创建者
    * endTime  用例结束时间
    * keyWord  keyWord
    * locationId  执行机区域ID
    * more  more
    * pageNum  分页时页码
    * pageSize  分页时每页大小
    * pid  告警策略选择失败后重试时有值
    * results  cloudTest任务执行结果列表
    * sortBy  排序字段
    * stage  用例所处的阶段 0：前置， 1：测试用例 2：后置用例
    * startTime  用例开始时间
    * state  状态
    * subtaskIds  子任务ID列表
    * subtaskId  子任务ID
    * suiteType  suiteType
    * taskId  任务ID
    * taskIds  任务ID列表
    * taskTypeId  任务类型
    * testServiceId  服务ID
    * testcaseId  用例ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createUser' => 'create_user',
            'endTime' => 'endTime',
            'keyWord' => 'keyWord',
            'locationId' => 'location_id',
            'more' => 'more',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'pid' => 'pid',
            'results' => 'results',
            'sortBy' => 'sortBy',
            'stage' => 'stage',
            'startTime' => 'startTime',
            'state' => 'state',
            'subtaskIds' => 'subtask_ids',
            'subtaskId' => 'subtask_id',
            'suiteType' => 'suiteType',
            'taskId' => 'task_id',
            'taskIds' => 'task_ids',
            'taskTypeId' => 'taskTypeId',
            'testServiceId' => 'test_service_id',
            'testcaseId' => 'testcase_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createUser  用例创建者
    * endTime  用例结束时间
    * keyWord  keyWord
    * locationId  执行机区域ID
    * more  more
    * pageNum  分页时页码
    * pageSize  分页时每页大小
    * pid  告警策略选择失败后重试时有值
    * results  cloudTest任务执行结果列表
    * sortBy  排序字段
    * stage  用例所处的阶段 0：前置， 1：测试用例 2：后置用例
    * startTime  用例开始时间
    * state  状态
    * subtaskIds  子任务ID列表
    * subtaskId  子任务ID
    * suiteType  suiteType
    * taskId  任务ID
    * taskIds  任务ID列表
    * taskTypeId  任务类型
    * testServiceId  服务ID
    * testcaseId  用例ID
    *
    * @var string[]
    */
    protected static $setters = [
            'createUser' => 'setCreateUser',
            'endTime' => 'setEndTime',
            'keyWord' => 'setKeyWord',
            'locationId' => 'setLocationId',
            'more' => 'setMore',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'pid' => 'setPid',
            'results' => 'setResults',
            'sortBy' => 'setSortBy',
            'stage' => 'setStage',
            'startTime' => 'setStartTime',
            'state' => 'setState',
            'subtaskIds' => 'setSubtaskIds',
            'subtaskId' => 'setSubtaskId',
            'suiteType' => 'setSuiteType',
            'taskId' => 'setTaskId',
            'taskIds' => 'setTaskIds',
            'taskTypeId' => 'setTaskTypeId',
            'testServiceId' => 'setTestServiceId',
            'testcaseId' => 'setTestcaseId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createUser  用例创建者
    * endTime  用例结束时间
    * keyWord  keyWord
    * locationId  执行机区域ID
    * more  more
    * pageNum  分页时页码
    * pageSize  分页时每页大小
    * pid  告警策略选择失败后重试时有值
    * results  cloudTest任务执行结果列表
    * sortBy  排序字段
    * stage  用例所处的阶段 0：前置， 1：测试用例 2：后置用例
    * startTime  用例开始时间
    * state  状态
    * subtaskIds  子任务ID列表
    * subtaskId  子任务ID
    * suiteType  suiteType
    * taskId  任务ID
    * taskIds  任务ID列表
    * taskTypeId  任务类型
    * testServiceId  服务ID
    * testcaseId  用例ID
    *
    * @var string[]
    */
    protected static $getters = [
            'createUser' => 'getCreateUser',
            'endTime' => 'getEndTime',
            'keyWord' => 'getKeyWord',
            'locationId' => 'getLocationId',
            'more' => 'getMore',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'pid' => 'getPid',
            'results' => 'getResults',
            'sortBy' => 'getSortBy',
            'stage' => 'getStage',
            'startTime' => 'getStartTime',
            'state' => 'getState',
            'subtaskIds' => 'getSubtaskIds',
            'subtaskId' => 'getSubtaskId',
            'suiteType' => 'getSuiteType',
            'taskId' => 'getTaskId',
            'taskIds' => 'getTaskIds',
            'taskTypeId' => 'getTaskTypeId',
            'testServiceId' => 'getTestServiceId',
            'testcaseId' => 'getTestcaseId'
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
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['locationId'] = isset($data['locationId']) ? $data['locationId'] : null;
        $this->container['more'] = isset($data['more']) ? $data['more'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['subtaskIds'] = isset($data['subtaskIds']) ? $data['subtaskIds'] : null;
        $this->container['subtaskId'] = isset($data['subtaskId']) ? $data['subtaskId'] : null;
        $this->container['suiteType'] = isset($data['suiteType']) ? $data['suiteType'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskIds'] = isset($data['taskIds']) ? $data['taskIds'] : null;
        $this->container['taskTypeId'] = isset($data['taskTypeId']) ? $data['taskTypeId'] : null;
        $this->container['testServiceId'] = isset($data['testServiceId']) ? $data['testServiceId'] : null;
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
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
    * Gets createUser
    *  用例创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 用例创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets endTime
    *  用例结束时间
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
    * @param int|null $endTime 用例结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets keyWord
    *  keyWord
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord keyWord
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets locationId
    *  执行机区域ID
    *
    * @return string|null
    */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
    * Sets locationId
    *
    * @param string|null $locationId 执行机区域ID
    *
    * @return $this
    */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;
        return $this;
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
    * Gets pageNum
    *  分页时页码
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 分页时页码
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页时每页大小
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
    * @param int|null $pageSize 分页时每页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pid
    *  告警策略选择失败后重试时有值
    *
    * @return string|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param string|null $pid 告警策略选择失败后重试时有值
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets results
    *  cloudTest任务执行结果列表
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
    * @param int[]|null $results cloudTest任务执行结果列表
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序字段
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 排序字段
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets stage
    *  用例所处的阶段 0：前置， 1：测试用例 2：后置用例
    *
    * @return int|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param int|null $stage 用例所处的阶段 0：前置， 1：测试用例 2：后置用例
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets startTime
    *  用例开始时间
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
    * @param int|null $startTime 用例开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets subtaskIds
    *  子任务ID列表
    *
    * @return string[]|null
    */
    public function getSubtaskIds()
    {
        return $this->container['subtaskIds'];
    }

    /**
    * Sets subtaskIds
    *
    * @param string[]|null $subtaskIds 子任务ID列表
    *
    * @return $this
    */
    public function setSubtaskIds($subtaskIds)
    {
        $this->container['subtaskIds'] = $subtaskIds;
        return $this;
    }

    /**
    * Gets subtaskId
    *  子任务ID
    *
    * @return string|null
    */
    public function getSubtaskId()
    {
        return $this->container['subtaskId'];
    }

    /**
    * Sets subtaskId
    *
    * @param string|null $subtaskId 子任务ID
    *
    * @return $this
    */
    public function setSubtaskId($subtaskId)
    {
        $this->container['subtaskId'] = $subtaskId;
        return $this;
    }

    /**
    * Gets suiteType
    *  suiteType
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
    * @param int|null $suiteType suiteType
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
    *  任务ID
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
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskIds
    *  任务ID列表
    *
    * @return string[]|null
    */
    public function getTaskIds()
    {
        return $this->container['taskIds'];
    }

    /**
    * Sets taskIds
    *
    * @param string[]|null $taskIds 任务ID列表
    *
    * @return $this
    */
    public function setTaskIds($taskIds)
    {
        $this->container['taskIds'] = $taskIds;
        return $this;
    }

    /**
    * Gets taskTypeId
    *  任务类型
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
    * @param string|null $taskTypeId 任务类型
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
    *  服务ID
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
    * @param string|null $testServiceId 服务ID
    *
    * @return $this
    */
    public function setTestServiceId($testServiceId)
    {
        $this->container['testServiceId'] = $testServiceId;
        return $this;
    }

    /**
    * Gets testcaseId
    *  用例ID
    *
    * @return string|null
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string|null $testcaseId 用例ID
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
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

