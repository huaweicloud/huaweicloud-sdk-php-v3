<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskCaseResponseTimeDetailVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskCaseResponseTimeDetailVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caseId  用例ID
    * caseName  用例名称
    * endTime  用例结束时间
    * errorReason  用例状态
    * responseTime  用例响应时间
    * serviceId  服务ID
    * serviceName  服务名称
    * startTime  用例开始时间
    * state  用例状态
    * subTaskId  子任务ID
    * tagId  已废弃
    * tagName  已废弃
    * taskCaseId  任务和用例关联关系的ID
    * taskId  任务ID
    * taskName  任务名称
    * taskTypeId  任务类型，1=拨测，2=冒烟，4=部署测试，5=小网拨测
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caseId' => 'string',
            'caseName' => 'string',
            'endTime' => 'int',
            'errorReason' => 'string',
            'responseTime' => 'int',
            'serviceId' => 'string',
            'serviceName' => 'string',
            'startTime' => 'int',
            'state' => 'string',
            'subTaskId' => 'string',
            'tagId' => 'string',
            'tagName' => 'string',
            'taskCaseId' => 'string',
            'taskId' => 'string',
            'taskName' => 'string',
            'taskTypeId' => 'string',
            'testSuiteType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caseId  用例ID
    * caseName  用例名称
    * endTime  用例结束时间
    * errorReason  用例状态
    * responseTime  用例响应时间
    * serviceId  服务ID
    * serviceName  服务名称
    * startTime  用例开始时间
    * state  用例状态
    * subTaskId  子任务ID
    * tagId  已废弃
    * tagName  已废弃
    * taskCaseId  任务和用例关联关系的ID
    * taskId  任务ID
    * taskName  任务名称
    * taskTypeId  任务类型，1=拨测，2=冒烟，4=部署测试，5=小网拨测
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caseId' => null,
        'caseName' => null,
        'endTime' => 'int64',
        'errorReason' => null,
        'responseTime' => 'int64',
        'serviceId' => null,
        'serviceName' => null,
        'startTime' => 'int64',
        'state' => null,
        'subTaskId' => null,
        'tagId' => null,
        'tagName' => null,
        'taskCaseId' => null,
        'taskId' => null,
        'taskName' => null,
        'taskTypeId' => null,
        'testSuiteType' => 'int32'
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
    * caseId  用例ID
    * caseName  用例名称
    * endTime  用例结束时间
    * errorReason  用例状态
    * responseTime  用例响应时间
    * serviceId  服务ID
    * serviceName  服务名称
    * startTime  用例开始时间
    * state  用例状态
    * subTaskId  子任务ID
    * tagId  已废弃
    * tagName  已废弃
    * taskCaseId  任务和用例关联关系的ID
    * taskId  任务ID
    * taskName  任务名称
    * taskTypeId  任务类型，1=拨测，2=冒烟，4=部署测试，5=小网拨测
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caseId' => 'case_id',
            'caseName' => 'case_name',
            'endTime' => 'end_time',
            'errorReason' => 'error_reason',
            'responseTime' => 'response_time',
            'serviceId' => 'service_id',
            'serviceName' => 'service_name',
            'startTime' => 'start_time',
            'state' => 'state',
            'subTaskId' => 'sub_task_id',
            'tagId' => 'tag_id',
            'tagName' => 'tag_name',
            'taskCaseId' => 'task_case_id',
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'taskTypeId' => 'task_type_id',
            'testSuiteType' => 'test_suite_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caseId  用例ID
    * caseName  用例名称
    * endTime  用例结束时间
    * errorReason  用例状态
    * responseTime  用例响应时间
    * serviceId  服务ID
    * serviceName  服务名称
    * startTime  用例开始时间
    * state  用例状态
    * subTaskId  子任务ID
    * tagId  已废弃
    * tagName  已废弃
    * taskCaseId  任务和用例关联关系的ID
    * taskId  任务ID
    * taskName  任务名称
    * taskTypeId  任务类型，1=拨测，2=冒烟，4=部署测试，5=小网拨测
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $setters = [
            'caseId' => 'setCaseId',
            'caseName' => 'setCaseName',
            'endTime' => 'setEndTime',
            'errorReason' => 'setErrorReason',
            'responseTime' => 'setResponseTime',
            'serviceId' => 'setServiceId',
            'serviceName' => 'setServiceName',
            'startTime' => 'setStartTime',
            'state' => 'setState',
            'subTaskId' => 'setSubTaskId',
            'tagId' => 'setTagId',
            'tagName' => 'setTagName',
            'taskCaseId' => 'setTaskCaseId',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'taskTypeId' => 'setTaskTypeId',
            'testSuiteType' => 'setTestSuiteType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caseId  用例ID
    * caseName  用例名称
    * endTime  用例结束时间
    * errorReason  用例状态
    * responseTime  用例响应时间
    * serviceId  服务ID
    * serviceName  服务名称
    * startTime  用例开始时间
    * state  用例状态
    * subTaskId  子任务ID
    * tagId  已废弃
    * tagName  已废弃
    * taskCaseId  任务和用例关联关系的ID
    * taskId  任务ID
    * taskName  任务名称
    * taskTypeId  任务类型，1=拨测，2=冒烟，4=部署测试，5=小网拨测
    * testSuiteType  测试套类型
    *
    * @var string[]
    */
    protected static $getters = [
            'caseId' => 'getCaseId',
            'caseName' => 'getCaseName',
            'endTime' => 'getEndTime',
            'errorReason' => 'getErrorReason',
            'responseTime' => 'getResponseTime',
            'serviceId' => 'getServiceId',
            'serviceName' => 'getServiceName',
            'startTime' => 'getStartTime',
            'state' => 'getState',
            'subTaskId' => 'getSubTaskId',
            'tagId' => 'getTagId',
            'tagName' => 'getTagName',
            'taskCaseId' => 'getTaskCaseId',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'taskTypeId' => 'getTaskTypeId',
            'testSuiteType' => 'getTestSuiteType'
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
        $this->container['caseId'] = isset($data['caseId']) ? $data['caseId'] : null;
        $this->container['caseName'] = isset($data['caseName']) ? $data['caseName'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorReason'] = isset($data['errorReason']) ? $data['errorReason'] : null;
        $this->container['responseTime'] = isset($data['responseTime']) ? $data['responseTime'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['subTaskId'] = isset($data['subTaskId']) ? $data['subTaskId'] : null;
        $this->container['tagId'] = isset($data['tagId']) ? $data['tagId'] : null;
        $this->container['tagName'] = isset($data['tagName']) ? $data['tagName'] : null;
        $this->container['taskCaseId'] = isset($data['taskCaseId']) ? $data['taskCaseId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskTypeId'] = isset($data['taskTypeId']) ? $data['taskTypeId'] : null;
        $this->container['testSuiteType'] = isset($data['testSuiteType']) ? $data['testSuiteType'] : null;
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
    * Gets caseId
    *  用例ID
    *
    * @return string|null
    */
    public function getCaseId()
    {
        return $this->container['caseId'];
    }

    /**
    * Sets caseId
    *
    * @param string|null $caseId 用例ID
    *
    * @return $this
    */
    public function setCaseId($caseId)
    {
        $this->container['caseId'] = $caseId;
        return $this;
    }

    /**
    * Gets caseName
    *  用例名称
    *
    * @return string|null
    */
    public function getCaseName()
    {
        return $this->container['caseName'];
    }

    /**
    * Sets caseName
    *
    * @param string|null $caseName 用例名称
    *
    * @return $this
    */
    public function setCaseName($caseName)
    {
        $this->container['caseName'] = $caseName;
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
    * Gets errorReason
    *  用例状态
    *
    * @return string|null
    */
    public function getErrorReason()
    {
        return $this->container['errorReason'];
    }

    /**
    * Sets errorReason
    *
    * @param string|null $errorReason 用例状态
    *
    * @return $this
    */
    public function setErrorReason($errorReason)
    {
        $this->container['errorReason'] = $errorReason;
        return $this;
    }

    /**
    * Gets responseTime
    *  用例响应时间
    *
    * @return int|null
    */
    public function getResponseTime()
    {
        return $this->container['responseTime'];
    }

    /**
    * Sets responseTime
    *
    * @param int|null $responseTime 用例响应时间
    *
    * @return $this
    */
    public function setResponseTime($responseTime)
    {
        $this->container['responseTime'] = $responseTime;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务ID
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务ID
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets serviceName
    *  服务名称
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
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
    *  用例状态
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
    * @param string|null $state 用例状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets subTaskId
    *  子任务ID
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
    * @param string|null $subTaskId 子任务ID
    *
    * @return $this
    */
    public function setSubTaskId($subTaskId)
    {
        $this->container['subTaskId'] = $subTaskId;
        return $this;
    }

    /**
    * Gets tagId
    *  已废弃
    *
    * @return string|null
    */
    public function getTagId()
    {
        return $this->container['tagId'];
    }

    /**
    * Sets tagId
    *
    * @param string|null $tagId 已废弃
    *
    * @return $this
    */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;
        return $this;
    }

    /**
    * Gets tagName
    *  已废弃
    *
    * @return string|null
    */
    public function getTagName()
    {
        return $this->container['tagName'];
    }

    /**
    * Sets tagName
    *
    * @param string|null $tagName 已废弃
    *
    * @return $this
    */
    public function setTagName($tagName)
    {
        $this->container['tagName'] = $tagName;
        return $this;
    }

    /**
    * Gets taskCaseId
    *  任务和用例关联关系的ID
    *
    * @return string|null
    */
    public function getTaskCaseId()
    {
        return $this->container['taskCaseId'];
    }

    /**
    * Sets taskCaseId
    *
    * @param string|null $taskCaseId 任务和用例关联关系的ID
    *
    * @return $this
    */
    public function setTaskCaseId($taskCaseId)
    {
        $this->container['taskCaseId'] = $taskCaseId;
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
    * Gets taskName
    *  任务名称
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskTypeId
    *  任务类型，1=拨测，2=冒烟，4=部署测试，5=小网拨测
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
    * @param string|null $taskTypeId 任务类型，1=拨测，2=冒烟，4=部署测试，5=小网拨测
    *
    * @return $this
    */
    public function setTaskTypeId($taskTypeId)
    {
        $this->container['taskTypeId'] = $taskTypeId;
        return $this;
    }

    /**
    * Gets testSuiteType
    *  测试套类型
    *
    * @return int|null
    */
    public function getTestSuiteType()
    {
        return $this->container['testSuiteType'];
    }

    /**
    * Sets testSuiteType
    *
    * @param int|null $testSuiteType 测试套类型
    *
    * @return $this
    */
    public function setTestSuiteType($testSuiteType)
    {
        $this->container['testSuiteType'] = $testSuiteType;
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

