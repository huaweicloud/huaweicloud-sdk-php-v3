<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkTableIssuseListResponseBodyIssueList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkTableIssuseListResponseBody_issue_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  工作项id
    * subject  工作项标题
    * parentIssueId  父工作项id
    * parentIssue  parentIssue
    * project  project
    * releaseDev  发布版本
    * findReleaseDev  发现发布版本
    * doneRatio  工作项完成度
    * expectedWorkHours  预计工时
    * actualWorkHours  实际工时
    * tracker  tracker
    * order  order
    * severity  severity
    * priority  priority
    * domain  domain
    * position  排序数值
    * module  module
    * assignedTo  assignedTo
    * author  author
    * developer  developer
    * closeder  closeder
    * status  status
    * deleted  是否删除工作项
    * isWatcher  是否关注工作项
    * closedFlag  关闭标志
    * createdOn  工作项新建时间戳
    * updatedOn  工作项更新时间戳
    * dueDate  工作项预计结束时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'subject' => 'string',
            'parentIssueId' => 'int',
            'parentIssue' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyParentIssue',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyProject',
            'releaseDev' => 'string',
            'findReleaseDev' => 'string',
            'doneRatio' => 'int',
            'expectedWorkHours' => 'double',
            'actualWorkHours' => 'double',
            'tracker' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyTracker',
            'order' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyOrder',
            'severity' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodySeverity',
            'priority' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyPriority',
            'domain' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyDomain',
            'position' => 'double',
            'module' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyModule',
            'assignedTo' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn',
            'author' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn',
            'developer' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn',
            'closeder' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyStatus',
            'deleted' => 'bool',
            'isWatcher' => 'bool',
            'closedFlag' => 'int',
            'createdOn' => 'string',
            'updatedOn' => 'string',
            'dueDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  工作项id
    * subject  工作项标题
    * parentIssueId  父工作项id
    * parentIssue  parentIssue
    * project  project
    * releaseDev  发布版本
    * findReleaseDev  发现发布版本
    * doneRatio  工作项完成度
    * expectedWorkHours  预计工时
    * actualWorkHours  实际工时
    * tracker  tracker
    * order  order
    * severity  severity
    * priority  priority
    * domain  domain
    * position  排序数值
    * module  module
    * assignedTo  assignedTo
    * author  author
    * developer  developer
    * closeder  closeder
    * status  status
    * deleted  是否删除工作项
    * isWatcher  是否关注工作项
    * closedFlag  关闭标志
    * createdOn  工作项新建时间戳
    * updatedOn  工作项更新时间戳
    * dueDate  工作项预计结束时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'subject' => null,
        'parentIssueId' => 'int32',
        'parentIssue' => null,
        'project' => null,
        'releaseDev' => null,
        'findReleaseDev' => null,
        'doneRatio' => 'int32',
        'expectedWorkHours' => 'double',
        'actualWorkHours' => 'double',
        'tracker' => null,
        'order' => null,
        'severity' => null,
        'priority' => null,
        'domain' => null,
        'position' => 'double',
        'module' => null,
        'assignedTo' => null,
        'author' => null,
        'developer' => null,
        'closeder' => null,
        'status' => null,
        'deleted' => null,
        'isWatcher' => null,
        'closedFlag' => 'int32',
        'createdOn' => null,
        'updatedOn' => null,
        'dueDate' => null
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
    * id  工作项id
    * subject  工作项标题
    * parentIssueId  父工作项id
    * parentIssue  parentIssue
    * project  project
    * releaseDev  发布版本
    * findReleaseDev  发现发布版本
    * doneRatio  工作项完成度
    * expectedWorkHours  预计工时
    * actualWorkHours  实际工时
    * tracker  tracker
    * order  order
    * severity  severity
    * priority  priority
    * domain  domain
    * position  排序数值
    * module  module
    * assignedTo  assignedTo
    * author  author
    * developer  developer
    * closeder  closeder
    * status  status
    * deleted  是否删除工作项
    * isWatcher  是否关注工作项
    * closedFlag  关闭标志
    * createdOn  工作项新建时间戳
    * updatedOn  工作项更新时间戳
    * dueDate  工作项预计结束时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'subject' => 'subject',
            'parentIssueId' => 'parent_issue_id',
            'parentIssue' => 'parent_issue',
            'project' => 'project',
            'releaseDev' => 'release_dev',
            'findReleaseDev' => 'find_release_dev',
            'doneRatio' => 'done_ratio',
            'expectedWorkHours' => 'expected_work_hours',
            'actualWorkHours' => 'actual_work_hours',
            'tracker' => 'tracker',
            'order' => 'order',
            'severity' => 'severity',
            'priority' => 'priority',
            'domain' => 'domain',
            'position' => 'position',
            'module' => 'module',
            'assignedTo' => 'assigned_to',
            'author' => 'author',
            'developer' => 'developer',
            'closeder' => 'closeder',
            'status' => 'status',
            'deleted' => 'deleted',
            'isWatcher' => 'is_watcher',
            'closedFlag' => 'closed_flag',
            'createdOn' => 'created_on',
            'updatedOn' => 'updated_on',
            'dueDate' => 'due_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  工作项id
    * subject  工作项标题
    * parentIssueId  父工作项id
    * parentIssue  parentIssue
    * project  project
    * releaseDev  发布版本
    * findReleaseDev  发现发布版本
    * doneRatio  工作项完成度
    * expectedWorkHours  预计工时
    * actualWorkHours  实际工时
    * tracker  tracker
    * order  order
    * severity  severity
    * priority  priority
    * domain  domain
    * position  排序数值
    * module  module
    * assignedTo  assignedTo
    * author  author
    * developer  developer
    * closeder  closeder
    * status  status
    * deleted  是否删除工作项
    * isWatcher  是否关注工作项
    * closedFlag  关闭标志
    * createdOn  工作项新建时间戳
    * updatedOn  工作项更新时间戳
    * dueDate  工作项预计结束时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'subject' => 'setSubject',
            'parentIssueId' => 'setParentIssueId',
            'parentIssue' => 'setParentIssue',
            'project' => 'setProject',
            'releaseDev' => 'setReleaseDev',
            'findReleaseDev' => 'setFindReleaseDev',
            'doneRatio' => 'setDoneRatio',
            'expectedWorkHours' => 'setExpectedWorkHours',
            'actualWorkHours' => 'setActualWorkHours',
            'tracker' => 'setTracker',
            'order' => 'setOrder',
            'severity' => 'setSeverity',
            'priority' => 'setPriority',
            'domain' => 'setDomain',
            'position' => 'setPosition',
            'module' => 'setModule',
            'assignedTo' => 'setAssignedTo',
            'author' => 'setAuthor',
            'developer' => 'setDeveloper',
            'closeder' => 'setCloseder',
            'status' => 'setStatus',
            'deleted' => 'setDeleted',
            'isWatcher' => 'setIsWatcher',
            'closedFlag' => 'setClosedFlag',
            'createdOn' => 'setCreatedOn',
            'updatedOn' => 'setUpdatedOn',
            'dueDate' => 'setDueDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  工作项id
    * subject  工作项标题
    * parentIssueId  父工作项id
    * parentIssue  parentIssue
    * project  project
    * releaseDev  发布版本
    * findReleaseDev  发现发布版本
    * doneRatio  工作项完成度
    * expectedWorkHours  预计工时
    * actualWorkHours  实际工时
    * tracker  tracker
    * order  order
    * severity  severity
    * priority  priority
    * domain  domain
    * position  排序数值
    * module  module
    * assignedTo  assignedTo
    * author  author
    * developer  developer
    * closeder  closeder
    * status  status
    * deleted  是否删除工作项
    * isWatcher  是否关注工作项
    * closedFlag  关闭标志
    * createdOn  工作项新建时间戳
    * updatedOn  工作项更新时间戳
    * dueDate  工作项预计结束时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'subject' => 'getSubject',
            'parentIssueId' => 'getParentIssueId',
            'parentIssue' => 'getParentIssue',
            'project' => 'getProject',
            'releaseDev' => 'getReleaseDev',
            'findReleaseDev' => 'getFindReleaseDev',
            'doneRatio' => 'getDoneRatio',
            'expectedWorkHours' => 'getExpectedWorkHours',
            'actualWorkHours' => 'getActualWorkHours',
            'tracker' => 'getTracker',
            'order' => 'getOrder',
            'severity' => 'getSeverity',
            'priority' => 'getPriority',
            'domain' => 'getDomain',
            'position' => 'getPosition',
            'module' => 'getModule',
            'assignedTo' => 'getAssignedTo',
            'author' => 'getAuthor',
            'developer' => 'getDeveloper',
            'closeder' => 'getCloseder',
            'status' => 'getStatus',
            'deleted' => 'getDeleted',
            'isWatcher' => 'getIsWatcher',
            'closedFlag' => 'getClosedFlag',
            'createdOn' => 'getCreatedOn',
            'updatedOn' => 'getUpdatedOn',
            'dueDate' => 'getDueDate'
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['parentIssueId'] = isset($data['parentIssueId']) ? $data['parentIssueId'] : null;
        $this->container['parentIssue'] = isset($data['parentIssue']) ? $data['parentIssue'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['findReleaseDev'] = isset($data['findReleaseDev']) ? $data['findReleaseDev'] : null;
        $this->container['doneRatio'] = isset($data['doneRatio']) ? $data['doneRatio'] : null;
        $this->container['expectedWorkHours'] = isset($data['expectedWorkHours']) ? $data['expectedWorkHours'] : null;
        $this->container['actualWorkHours'] = isset($data['actualWorkHours']) ? $data['actualWorkHours'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['assignedTo'] = isset($data['assignedTo']) ? $data['assignedTo'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['developer'] = isset($data['developer']) ? $data['developer'] : null;
        $this->container['closeder'] = isset($data['closeder']) ? $data['closeder'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['isWatcher'] = isset($data['isWatcher']) ? $data['isWatcher'] : null;
        $this->container['closedFlag'] = isset($data['closedFlag']) ? $data['closedFlag'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['updatedOn'] = isset($data['updatedOn']) ? $data['updatedOn'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
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
    *  工作项id
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
    * @param int|null $id 工作项id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets subject
    *  工作项标题
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 工作项标题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets parentIssueId
    *  父工作项id
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
    * @param int|null $parentIssueId 父工作项id
    *
    * @return $this
    */
    public function setParentIssueId($parentIssueId)
    {
        $this->container['parentIssueId'] = $parentIssueId;
        return $this;
    }

    /**
    * Gets parentIssue
    *  parentIssue
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyParentIssue|null
    */
    public function getParentIssue()
    {
        return $this->container['parentIssue'];
    }

    /**
    * Sets parentIssue
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyParentIssue|null $parentIssue parentIssue
    *
    * @return $this
    */
    public function setParentIssue($parentIssue)
    {
        $this->container['parentIssue'] = $parentIssue;
        return $this;
    }

    /**
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyProject|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyProject|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets releaseDev
    *  发布版本
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 发布版本
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets findReleaseDev
    *  发现发布版本
    *
    * @return string|null
    */
    public function getFindReleaseDev()
    {
        return $this->container['findReleaseDev'];
    }

    /**
    * Sets findReleaseDev
    *
    * @param string|null $findReleaseDev 发现发布版本
    *
    * @return $this
    */
    public function setFindReleaseDev($findReleaseDev)
    {
        $this->container['findReleaseDev'] = $findReleaseDev;
        return $this;
    }

    /**
    * Gets doneRatio
    *  工作项完成度
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
    * @param int|null $doneRatio 工作项完成度
    *
    * @return $this
    */
    public function setDoneRatio($doneRatio)
    {
        $this->container['doneRatio'] = $doneRatio;
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
    * Gets tracker
    *  tracker
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyTracker|null
    */
    public function getTracker()
    {
        return $this->container['tracker'];
    }

    /**
    * Sets tracker
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyTracker|null $tracker tracker
    *
    * @return $this
    */
    public function setTracker($tracker)
    {
        $this->container['tracker'] = $tracker;
        return $this;
    }

    /**
    * Gets order
    *  order
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyOrder|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyOrder|null $order order
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodySeverity|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodySeverity|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets priority
    *  priority
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyPriority|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyPriority|null $priority priority
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyDomain|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyDomain|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets position
    *  排序数值
    *
    * @return double|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param double|null $position 排序数值
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets module
    *  module
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyModule|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyModule|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets assignedTo
    *  assignedTo
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn|null
    */
    public function getAssignedTo()
    {
        return $this->container['assignedTo'];
    }

    /**
    * Sets assignedTo
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn|null $assignedTo assignedTo
    *
    * @return $this
    */
    public function setAssignedTo($assignedTo)
    {
        $this->container['assignedTo'] = $assignedTo;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets developer
    *  developer
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn|null
    */
    public function getDeveloper()
    {
        return $this->container['developer'];
    }

    /**
    * Sets developer
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn|null $developer developer
    *
    * @return $this
    */
    public function setDeveloper($developer)
    {
        $this->container['developer'] = $developer;
        return $this;
    }

    /**
    * Gets closeder
    *  closeder
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn|null
    */
    public function getCloseder()
    {
        return $this->container['closeder'];
    }

    /**
    * Sets closeder
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SimpleUserIn|null $closeder closeder
    *
    * @return $this
    */
    public function setCloseder($closeder)
    {
        $this->container['closeder'] = $closeder;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkTableIssuseListResponseBodyStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets deleted
    *  是否删除工作项
    *
    * @return bool|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool|null $deleted 是否删除工作项
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets isWatcher
    *  是否关注工作项
    *
    * @return bool|null
    */
    public function getIsWatcher()
    {
        return $this->container['isWatcher'];
    }

    /**
    * Sets isWatcher
    *
    * @param bool|null $isWatcher 是否关注工作项
    *
    * @return $this
    */
    public function setIsWatcher($isWatcher)
    {
        $this->container['isWatcher'] = $isWatcher;
        return $this;
    }

    /**
    * Gets closedFlag
    *  关闭标志
    *
    * @return int|null
    */
    public function getClosedFlag()
    {
        return $this->container['closedFlag'];
    }

    /**
    * Sets closedFlag
    *
    * @param int|null $closedFlag 关闭标志
    *
    * @return $this
    */
    public function setClosedFlag($closedFlag)
    {
        $this->container['closedFlag'] = $closedFlag;
        return $this;
    }

    /**
    * Gets createdOn
    *  工作项新建时间戳
    *
    * @return string|null
    */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
    * Sets createdOn
    *
    * @param string|null $createdOn 工作项新建时间戳
    *
    * @return $this
    */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;
        return $this;
    }

    /**
    * Gets updatedOn
    *  工作项更新时间戳
    *
    * @return string|null
    */
    public function getUpdatedOn()
    {
        return $this->container['updatedOn'];
    }

    /**
    * Sets updatedOn
    *
    * @param string|null $updatedOn 工作项更新时间戳
    *
    * @return $this
    */
    public function setUpdatedOn($updatedOn)
    {
        $this->container['updatedOn'] = $updatedOn;
        return $this;
    }

    /**
    * Gets dueDate
    *  工作项预计结束时间戳
    *
    * @return string|null
    */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
    * Sets dueDate
    *
    * @param string|null $dueDate 工作项预计结束时间戳
    *
    * @return $this
    */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;
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

