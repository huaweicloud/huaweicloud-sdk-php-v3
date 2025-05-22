<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIssueV4Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIssueV4Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actualWorkHours  实际工时
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  开始时间，年-月-日
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * module  module
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actualWorkHours' => 'double',
            'assignedCcUser' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser[]',
            'assignedUser' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'beginTime' => 'string',
            'creator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'customFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CustomField[]',
            'newCustomFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\NewCustomField[]',
            'developer' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'domain' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4Domain',
            'doneRatio' => 'int',
            'endTime' => 'string',
            'expectedWorkHours' => 'double',
            'id' => 'int',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueProjectResponseV4',
            'iteration' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Iteration',
            'module' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Module',
            'parentIssue' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4ParentIssue',
            'priority' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Priority',
            'severity' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Severity',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Status',
            'tracker' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4Tracker'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actualWorkHours  实际工时
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  开始时间，年-月-日
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * module  module
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actualWorkHours' => 'double',
        'assignedCcUser' => null,
        'assignedUser' => null,
        'beginTime' => null,
        'creator' => null,
        'customFields' => null,
        'newCustomFields' => null,
        'developer' => null,
        'domain' => null,
        'doneRatio' => 'int32',
        'endTime' => null,
        'expectedWorkHours' => 'double',
        'id' => 'int32',
        'project' => null,
        'iteration' => null,
        'module' => null,
        'parentIssue' => null,
        'priority' => null,
        'severity' => null,
        'status' => null,
        'tracker' => null
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
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  开始时间，年-月-日
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * module  module
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actualWorkHours' => 'actual_work_hours',
            'assignedCcUser' => 'assigned_cc_user',
            'assignedUser' => 'assigned_user',
            'beginTime' => 'begin_time',
            'creator' => 'creator',
            'customFields' => 'custom_fields',
            'newCustomFields' => 'new_custom_fields',
            'developer' => 'developer',
            'domain' => 'domain',
            'doneRatio' => 'done_ratio',
            'endTime' => 'end_time',
            'expectedWorkHours' => 'expected_work_hours',
            'id' => 'id',
            'project' => 'project',
            'iteration' => 'iteration',
            'module' => 'module',
            'parentIssue' => 'parent_issue',
            'priority' => 'priority',
            'severity' => 'severity',
            'status' => 'status',
            'tracker' => 'tracker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actualWorkHours  实际工时
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  开始时间，年-月-日
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * module  module
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    *
    * @var string[]
    */
    protected static $setters = [
            'actualWorkHours' => 'setActualWorkHours',
            'assignedCcUser' => 'setAssignedCcUser',
            'assignedUser' => 'setAssignedUser',
            'beginTime' => 'setBeginTime',
            'creator' => 'setCreator',
            'customFields' => 'setCustomFields',
            'newCustomFields' => 'setNewCustomFields',
            'developer' => 'setDeveloper',
            'domain' => 'setDomain',
            'doneRatio' => 'setDoneRatio',
            'endTime' => 'setEndTime',
            'expectedWorkHours' => 'setExpectedWorkHours',
            'id' => 'setId',
            'project' => 'setProject',
            'iteration' => 'setIteration',
            'module' => 'setModule',
            'parentIssue' => 'setParentIssue',
            'priority' => 'setPriority',
            'severity' => 'setSeverity',
            'status' => 'setStatus',
            'tracker' => 'setTracker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actualWorkHours  实际工时
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  开始时间，年-月-日
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * module  module
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    *
    * @var string[]
    */
    protected static $getters = [
            'actualWorkHours' => 'getActualWorkHours',
            'assignedCcUser' => 'getAssignedCcUser',
            'assignedUser' => 'getAssignedUser',
            'beginTime' => 'getBeginTime',
            'creator' => 'getCreator',
            'customFields' => 'getCustomFields',
            'newCustomFields' => 'getNewCustomFields',
            'developer' => 'getDeveloper',
            'domain' => 'getDomain',
            'doneRatio' => 'getDoneRatio',
            'endTime' => 'getEndTime',
            'expectedWorkHours' => 'getExpectedWorkHours',
            'id' => 'getId',
            'project' => 'getProject',
            'iteration' => 'getIteration',
            'module' => 'getModule',
            'parentIssue' => 'getParentIssue',
            'priority' => 'getPriority',
            'severity' => 'getSeverity',
            'status' => 'getStatus',
            'tracker' => 'getTracker'
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
        $this->container['assignedCcUser'] = isset($data['assignedCcUser']) ? $data['assignedCcUser'] : null;
        $this->container['assignedUser'] = isset($data['assignedUser']) ? $data['assignedUser'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
        $this->container['newCustomFields'] = isset($data['newCustomFields']) ? $data['newCustomFields'] : null;
        $this->container['developer'] = isset($data['developer']) ? $data['developer'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['doneRatio'] = isset($data['doneRatio']) ? $data['doneRatio'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['expectedWorkHours'] = isset($data['expectedWorkHours']) ? $data['expectedWorkHours'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['parentIssue'] = isset($data['parentIssue']) ? $data['parentIssue'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
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
    * Gets assignedCcUser
    *  抄送人
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser[]|null
    */
    public function getAssignedCcUser()
    {
        return $this->container['assignedCcUser'];
    }

    /**
    * Sets assignedCcUser
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser[]|null $assignedCcUser 抄送人
    *
    * @return $this
    */
    public function setAssignedCcUser($assignedCcUser)
    {
        $this->container['assignedCcUser'] = $assignedCcUser;
        return $this;
    }

    /**
    * Gets assignedUser
    *  assignedUser
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null
    */
    public function getAssignedUser()
    {
        return $this->container['assignedUser'];
    }

    /**
    * Sets assignedUser
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null $assignedUser assignedUser
    *
    * @return $this
    */
    public function setAssignedUser($assignedUser)
    {
        $this->container['assignedUser'] = $assignedUser;
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
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets customFields
    *  自定义属性值,不建议使用，建议参考new_custom_fields字段
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CustomField[]|null
    */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
    * Sets customFields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CustomField[]|null $customFields 自定义属性值,不建议使用，建议参考new_custom_fields字段
    *
    * @return $this
    */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;
        return $this;
    }

    /**
    * Gets newCustomFields
    *  自定义属性值
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
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\NewCustomField[]|null $newCustomFields 自定义属性值
    *
    * @return $this
    */
    public function setNewCustomFields($newCustomFields)
    {
        $this->container['newCustomFields'] = $newCustomFields;
        return $this;
    }

    /**
    * Gets developer
    *  developer
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null
    */
    public function getDeveloper()
    {
        return $this->container['developer'];
    }

    /**
    * Sets developer
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null $developer developer
    *
    * @return $this
    */
    public function setDeveloper($developer)
    {
        $this->container['developer'] = $developer;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4Domain|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4Domain|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
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
    * Gets id
    *  工作项项id
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
    * @param int|null $id 工作项项id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueProjectResponseV4|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueProjectResponseV4|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets iteration
    *  iteration
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Iteration|null
    */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
    * Sets iteration
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Iteration|null $iteration iteration
    *
    * @return $this
    */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;
        return $this;
    }

    /**
    * Gets module
    *  module
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Module|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Module|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets parentIssue
    *  parentIssue
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4ParentIssue|null
    */
    public function getParentIssue()
    {
        return $this->container['parentIssue'];
    }

    /**
    * Sets parentIssue
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4ParentIssue|null $parentIssue parentIssue
    *
    * @return $this
    */
    public function setParentIssue($parentIssue)
    {
        $this->container['parentIssue'] = $parentIssue;
        return $this;
    }

    /**
    * Gets priority
    *  priority
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Priority|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Priority|null $priority priority
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Severity|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Severity|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Status|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Status|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tracker
    *  tracker
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4Tracker|null
    */
    public function getTracker()
    {
        return $this->container['tracker'];
    }

    /**
    * Sets tracker
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4Tracker|null $tracker tracker
    *
    * @return $this
    */
    public function setTracker($tracker)
    {
        $this->container['tracker'] = $tracker;
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

