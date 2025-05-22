<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueRequestV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueRequestV4';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actualWorkHours  实际工时
    * assignedId  处理人id,对应用户信息的数字id
    * beginTime  开始时间，年-月-日
    * description  描述信息
    * developerId  开发者id,对应用户信息的数字id
    * domainId  领域id
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * iterationId  迭代id
    * moduleId  模块id
    * name  标题
    * parentIssueId  父工作项的id
    * priorityId  优先级,   1 低,   2 中,   3 高,
    * severityId  重要程度,   10 关键,   11 重要,   12 一般,   13 提示,
    * statusId  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已解决 6,
    * trackerId  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * newCustomFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actualWorkHours' => 'double',
            'assignedId' => 'int',
            'beginTime' => 'string',
            'description' => 'string',
            'developerId' => 'int',
            'domainId' => 'int',
            'doneRatio' => 'int',
            'endTime' => 'string',
            'expectedWorkHours' => 'double',
            'iterationId' => 'int',
            'moduleId' => 'int',
            'name' => 'string',
            'parentIssueId' => 'int',
            'priorityId' => 'int',
            'severityId' => 'int',
            'statusId' => 'int',
            'trackerId' => 'int',
            'newCustomFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\NewCustomField[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actualWorkHours  实际工时
    * assignedId  处理人id,对应用户信息的数字id
    * beginTime  开始时间，年-月-日
    * description  描述信息
    * developerId  开发者id,对应用户信息的数字id
    * domainId  领域id
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * iterationId  迭代id
    * moduleId  模块id
    * name  标题
    * parentIssueId  父工作项的id
    * priorityId  优先级,   1 低,   2 中,   3 高,
    * severityId  重要程度,   10 关键,   11 重要,   12 一般,   13 提示,
    * statusId  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已解决 6,
    * trackerId  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * newCustomFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actualWorkHours' => 'double',
        'assignedId' => 'int32',
        'beginTime' => null,
        'description' => null,
        'developerId' => 'int32',
        'domainId' => 'int32',
        'doneRatio' => 'int32',
        'endTime' => null,
        'expectedWorkHours' => 'double',
        'iterationId' => 'int32',
        'moduleId' => 'int32',
        'name' => null,
        'parentIssueId' => 'int32',
        'priorityId' => 'int32',
        'severityId' => 'int32',
        'statusId' => 'int32',
        'trackerId' => 'int32',
        'newCustomFields' => null
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
    * actualWorkHours  实际工时
    * assignedId  处理人id,对应用户信息的数字id
    * beginTime  开始时间，年-月-日
    * description  描述信息
    * developerId  开发者id,对应用户信息的数字id
    * domainId  领域id
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * iterationId  迭代id
    * moduleId  模块id
    * name  标题
    * parentIssueId  父工作项的id
    * priorityId  优先级,   1 低,   2 中,   3 高,
    * severityId  重要程度,   10 关键,   11 重要,   12 一般,   13 提示,
    * statusId  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已解决 6,
    * trackerId  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * newCustomFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actualWorkHours' => 'actual_work_hours',
            'assignedId' => 'assigned_id',
            'beginTime' => 'begin_time',
            'description' => 'description',
            'developerId' => 'developer_id',
            'domainId' => 'domain_id',
            'doneRatio' => 'done_ratio',
            'endTime' => 'end_time',
            'expectedWorkHours' => 'expected_work_hours',
            'iterationId' => 'iteration_id',
            'moduleId' => 'module_id',
            'name' => 'name',
            'parentIssueId' => 'parent_issue_id',
            'priorityId' => 'priority_id',
            'severityId' => 'severity_id',
            'statusId' => 'status_id',
            'trackerId' => 'tracker_id',
            'newCustomFields' => 'new_custom_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actualWorkHours  实际工时
    * assignedId  处理人id,对应用户信息的数字id
    * beginTime  开始时间，年-月-日
    * description  描述信息
    * developerId  开发者id,对应用户信息的数字id
    * domainId  领域id
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * iterationId  迭代id
    * moduleId  模块id
    * name  标题
    * parentIssueId  父工作项的id
    * priorityId  优先级,   1 低,   2 中,   3 高,
    * severityId  重要程度,   10 关键,   11 重要,   12 一般,   13 提示,
    * statusId  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已解决 6,
    * trackerId  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * newCustomFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $setters = [
            'actualWorkHours' => 'setActualWorkHours',
            'assignedId' => 'setAssignedId',
            'beginTime' => 'setBeginTime',
            'description' => 'setDescription',
            'developerId' => 'setDeveloperId',
            'domainId' => 'setDomainId',
            'doneRatio' => 'setDoneRatio',
            'endTime' => 'setEndTime',
            'expectedWorkHours' => 'setExpectedWorkHours',
            'iterationId' => 'setIterationId',
            'moduleId' => 'setModuleId',
            'name' => 'setName',
            'parentIssueId' => 'setParentIssueId',
            'priorityId' => 'setPriorityId',
            'severityId' => 'setSeverityId',
            'statusId' => 'setStatusId',
            'trackerId' => 'setTrackerId',
            'newCustomFields' => 'setNewCustomFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actualWorkHours  实际工时
    * assignedId  处理人id,对应用户信息的数字id
    * beginTime  开始时间，年-月-日
    * description  描述信息
    * developerId  开发者id,对应用户信息的数字id
    * domainId  领域id
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * iterationId  迭代id
    * moduleId  模块id
    * name  标题
    * parentIssueId  父工作项的id
    * priorityId  优先级,   1 低,   2 中,   3 高,
    * severityId  重要程度,   10 关键,   11 重要,   12 一般,   13 提示,
    * statusId  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已解决 6,
    * trackerId  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    * newCustomFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $getters = [
            'actualWorkHours' => 'getActualWorkHours',
            'assignedId' => 'getAssignedId',
            'beginTime' => 'getBeginTime',
            'description' => 'getDescription',
            'developerId' => 'getDeveloperId',
            'domainId' => 'getDomainId',
            'doneRatio' => 'getDoneRatio',
            'endTime' => 'getEndTime',
            'expectedWorkHours' => 'getExpectedWorkHours',
            'iterationId' => 'getIterationId',
            'moduleId' => 'getModuleId',
            'name' => 'getName',
            'parentIssueId' => 'getParentIssueId',
            'priorityId' => 'getPriorityId',
            'severityId' => 'getSeverityId',
            'statusId' => 'getStatusId',
            'trackerId' => 'getTrackerId',
            'newCustomFields' => 'getNewCustomFields'
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
        $this->container['actualWorkHours'] = isset($data['actualWorkHours']) ? $data['actualWorkHours'] : null;
        $this->container['assignedId'] = isset($data['assignedId']) ? $data['assignedId'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['developerId'] = isset($data['developerId']) ? $data['developerId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['doneRatio'] = isset($data['doneRatio']) ? $data['doneRatio'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['expectedWorkHours'] = isset($data['expectedWorkHours']) ? $data['expectedWorkHours'] : null;
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentIssueId'] = isset($data['parentIssueId']) ? $data['parentIssueId'] : null;
        $this->container['priorityId'] = isset($data['priorityId']) ? $data['priorityId'] : null;
        $this->container['severityId'] = isset($data['severityId']) ? $data['severityId'] : null;
        $this->container['statusId'] = isset($data['statusId']) ? $data['statusId'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['newCustomFields'] = isset($data['newCustomFields']) ? $data['newCustomFields'] : null;
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
    * Gets actualWorkHours
    *  实际工时
    *
    * @return double|null
    */
    public function getActualWorkHours()
    {
        return $this->container['actualWorkHours'];
    }

    /**
    * Sets actualWorkHours
    *
    * @param double|null $actualWorkHours 实际工时
    *
    * @return $this
    */
    public function setActualWorkHours($actualWorkHours)
    {
        $this->container['actualWorkHours'] = $actualWorkHours;
        return $this;
    }

    /**
    * Gets assignedId
    *  处理人id,对应用户信息的数字id
    *
    * @return int|null
    */
    public function getAssignedId()
    {
        return $this->container['assignedId'];
    }

    /**
    * Sets assignedId
    *
    * @param int|null $assignedId 处理人id,对应用户信息的数字id
    *
    * @return $this
    */
    public function setAssignedId($assignedId)
    {
        $this->container['assignedId'] = $assignedId;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间，年-月-日
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 开始时间，年-月-日
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets developerId
    *  开发者id,对应用户信息的数字id
    *
    * @return int|null
    */
    public function getDeveloperId()
    {
        return $this->container['developerId'];
    }

    /**
    * Sets developerId
    *
    * @param int|null $developerId 开发者id,对应用户信息的数字id
    *
    * @return $this
    */
    public function setDeveloperId($developerId)
    {
        $this->container['developerId'] = $developerId;
        return $this;
    }

    /**
    * Gets domainId
    *  领域id
    *
    * @return int|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param int|null $domainId 领域id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets doneRatio
    *  工作项进度值
    *
    * @return int|null
    */
    public function getDoneRatio()
    {
        return $this->container['doneRatio'];
    }

    /**
    * Sets doneRatio
    *
    * @param int|null $doneRatio 工作项进度值
    *
    * @return $this
    */
    public function setDoneRatio($doneRatio)
    {
        $this->container['doneRatio'] = $doneRatio;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间，年-月-日
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
    * @param string|null $endTime 结束时间，年-月-日
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets expectedWorkHours
    *  预计工时
    *
    * @return double|null
    */
    public function getExpectedWorkHours()
    {
        return $this->container['expectedWorkHours'];
    }

    /**
    * Sets expectedWorkHours
    *
    * @param double|null $expectedWorkHours 预计工时
    *
    * @return $this
    */
    public function setExpectedWorkHours($expectedWorkHours)
    {
        $this->container['expectedWorkHours'] = $expectedWorkHours;
        return $this;
    }

    /**
    * Gets iterationId
    *  迭代id
    *
    * @return int|null
    */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
    * Sets iterationId
    *
    * @param int|null $iterationId 迭代id
    *
    * @return $this
    */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块id
    *
    * @return int|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param int|null $moduleId 模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets name
    *  标题
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
    * @param string|null $name 标题
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentIssueId
    *  父工作项的id
    *
    * @return int|null
    */
    public function getParentIssueId()
    {
        return $this->container['parentIssueId'];
    }

    /**
    * Sets parentIssueId
    *
    * @param int|null $parentIssueId 父工作项的id
    *
    * @return $this
    */
    public function setParentIssueId($parentIssueId)
    {
        $this->container['parentIssueId'] = $parentIssueId;
        return $this;
    }

    /**
    * Gets priorityId
    *  优先级,   1 低,   2 中,   3 高,
    *
    * @return int|null
    */
    public function getPriorityId()
    {
        return $this->container['priorityId'];
    }

    /**
    * Sets priorityId
    *
    * @param int|null $priorityId 优先级,   1 低,   2 中,   3 高,
    *
    * @return $this
    */
    public function setPriorityId($priorityId)
    {
        $this->container['priorityId'] = $priorityId;
        return $this;
    }

    /**
    * Gets severityId
    *  重要程度,   10 关键,   11 重要,   12 一般,   13 提示,
    *
    * @return int|null
    */
    public function getSeverityId()
    {
        return $this->container['severityId'];
    }

    /**
    * Sets severityId
    *
    * @param int|null $severityId 重要程度,   10 关键,   11 重要,   12 一般,   13 提示,
    *
    * @return $this
    */
    public function setSeverityId($severityId)
    {
        $this->container['severityId'] = $severityId;
        return $this;
    }

    /**
    * Gets statusId
    *  状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已解决 6,
    *
    * @return int|null
    */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
    * Sets statusId
    *
    * @param int|null $statusId 状态   id, 新建   1, 进行中 2, 已解决 3, 测试中 4, 已关闭 5, 已解决 6,
    *
    * @return $this
    */
    public function setStatusId($statusId)
    {
        $this->container['statusId'] = $statusId;
        return $this;
    }

    /**
    * Gets trackerId
    *  工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @return int|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param int|null $trackerId 工作项类型,2任务/Task,3缺陷/Bug,5Epic,6Feature,7Story
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets newCustomFields
    *  用户自定义字段
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\NewCustomField[]|null
    */
    public function getNewCustomFields()
    {
        return $this->container['newCustomFields'];
    }

    /**
    * Sets newCustomFields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\NewCustomField[]|null $newCustomFields 用户自定义字段
    *
    * @return $this
    */
    public function setNewCustomFields($newCustomFields)
    {
        $this->container['newCustomFields'] = $newCustomFields;
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

