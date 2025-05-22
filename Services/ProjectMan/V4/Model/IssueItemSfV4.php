<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueItemSfV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueItemSfV4';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * closedTime  关闭工作项的时间
    * createdTime  创建时间
    * customFeilds  自定义属性
    * developer  developer
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentIssueId  父工作项的id
    * releaseVersion  发布的版本
    * rootIssueId  根工作项的id
    * storyPoint  storyPoint
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    * subject  工作项标题
    * updatedTime  工作项更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actualWorkHours' => 'double',
            'assignedUser' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'author' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'beginTime' => 'int',
            'closedTime' => 'int',
            'createdTime' => 'int',
            'customFeilds' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CustomFeildRecord[]',
            'developer' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'discoverVersion' => 'string',
            'endTime' => 'int',
            'doneRatio' => 'int',
            'expectedWorkHours' => 'double',
            'order' => 'int',
            'parentIssueId' => 'int',
            'releaseVersion' => 'string',
            'rootIssueId' => 'int',
            'storyPoint' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4StoryPoint',
            'domain' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Domain',
            'iteration' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Iteration',
            'module' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Module',
            'priority' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Priority',
            'severity' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Severity',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Status',
            'tracker' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Tracker',
            'subject' => 'string',
            'updatedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * closedTime  关闭工作项的时间
    * createdTime  创建时间
    * customFeilds  自定义属性
    * developer  developer
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentIssueId  父工作项的id
    * releaseVersion  发布的版本
    * rootIssueId  根工作项的id
    * storyPoint  storyPoint
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    * subject  工作项标题
    * updatedTime  工作项更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actualWorkHours' => 'double',
        'assignedUser' => null,
        'author' => null,
        'beginTime' => 'int64',
        'closedTime' => 'int64',
        'createdTime' => 'int64',
        'customFeilds' => null,
        'developer' => null,
        'discoverVersion' => null,
        'endTime' => 'int64',
        'doneRatio' => 'int32',
        'expectedWorkHours' => 'double',
        'order' => 'int32',
        'parentIssueId' => 'int32',
        'releaseVersion' => null,
        'rootIssueId' => 'int32',
        'storyPoint' => null,
        'domain' => null,
        'iteration' => null,
        'module' => null,
        'priority' => null,
        'severity' => null,
        'status' => null,
        'tracker' => null,
        'subject' => null,
        'updatedTime' => 'int64'
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
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * closedTime  关闭工作项的时间
    * createdTime  创建时间
    * customFeilds  自定义属性
    * developer  developer
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentIssueId  父工作项的id
    * releaseVersion  发布的版本
    * rootIssueId  根工作项的id
    * storyPoint  storyPoint
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    * subject  工作项标题
    * updatedTime  工作项更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actualWorkHours' => 'actual_work_hours',
            'assignedUser' => 'assigned_user',
            'author' => 'author',
            'beginTime' => 'begin_time',
            'closedTime' => 'closed_time',
            'createdTime' => 'created_time',
            'customFeilds' => 'custom_feilds',
            'developer' => 'developer',
            'discoverVersion' => 'discover_version',
            'endTime' => 'end_time',
            'doneRatio' => 'done_ratio',
            'expectedWorkHours' => 'expected_work_hours',
            'order' => 'order',
            'parentIssueId' => 'parent_issue_id',
            'releaseVersion' => 'release_version',
            'rootIssueId' => 'root_issue_id',
            'storyPoint' => 'story_point',
            'domain' => 'domain',
            'iteration' => 'iteration',
            'module' => 'module',
            'priority' => 'priority',
            'severity' => 'severity',
            'status' => 'status',
            'tracker' => 'tracker',
            'subject' => 'subject',
            'updatedTime' => 'updated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * closedTime  关闭工作项的时间
    * createdTime  创建时间
    * customFeilds  自定义属性
    * developer  developer
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentIssueId  父工作项的id
    * releaseVersion  发布的版本
    * rootIssueId  根工作项的id
    * storyPoint  storyPoint
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    * subject  工作项标题
    * updatedTime  工作项更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'actualWorkHours' => 'setActualWorkHours',
            'assignedUser' => 'setAssignedUser',
            'author' => 'setAuthor',
            'beginTime' => 'setBeginTime',
            'closedTime' => 'setClosedTime',
            'createdTime' => 'setCreatedTime',
            'customFeilds' => 'setCustomFeilds',
            'developer' => 'setDeveloper',
            'discoverVersion' => 'setDiscoverVersion',
            'endTime' => 'setEndTime',
            'doneRatio' => 'setDoneRatio',
            'expectedWorkHours' => 'setExpectedWorkHours',
            'order' => 'setOrder',
            'parentIssueId' => 'setParentIssueId',
            'releaseVersion' => 'setReleaseVersion',
            'rootIssueId' => 'setRootIssueId',
            'storyPoint' => 'setStoryPoint',
            'domain' => 'setDomain',
            'iteration' => 'setIteration',
            'module' => 'setModule',
            'priority' => 'setPriority',
            'severity' => 'setSeverity',
            'status' => 'setStatus',
            'tracker' => 'setTracker',
            'subject' => 'setSubject',
            'updatedTime' => 'setUpdatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * closedTime  关闭工作项的时间
    * createdTime  创建时间
    * customFeilds  自定义属性
    * developer  developer
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentIssueId  父工作项的id
    * releaseVersion  发布的版本
    * rootIssueId  根工作项的id
    * storyPoint  storyPoint
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  priority
    * severity  severity
    * status  status
    * tracker  tracker
    * subject  工作项标题
    * updatedTime  工作项更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'actualWorkHours' => 'getActualWorkHours',
            'assignedUser' => 'getAssignedUser',
            'author' => 'getAuthor',
            'beginTime' => 'getBeginTime',
            'closedTime' => 'getClosedTime',
            'createdTime' => 'getCreatedTime',
            'customFeilds' => 'getCustomFeilds',
            'developer' => 'getDeveloper',
            'discoverVersion' => 'getDiscoverVersion',
            'endTime' => 'getEndTime',
            'doneRatio' => 'getDoneRatio',
            'expectedWorkHours' => 'getExpectedWorkHours',
            'order' => 'getOrder',
            'parentIssueId' => 'getParentIssueId',
            'releaseVersion' => 'getReleaseVersion',
            'rootIssueId' => 'getRootIssueId',
            'storyPoint' => 'getStoryPoint',
            'domain' => 'getDomain',
            'iteration' => 'getIteration',
            'module' => 'getModule',
            'priority' => 'getPriority',
            'severity' => 'getSeverity',
            'status' => 'getStatus',
            'tracker' => 'getTracker',
            'subject' => 'getSubject',
            'updatedTime' => 'getUpdatedTime'
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
        $this->container['assignedUser'] = isset($data['assignedUser']) ? $data['assignedUser'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['closedTime'] = isset($data['closedTime']) ? $data['closedTime'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['customFeilds'] = isset($data['customFeilds']) ? $data['customFeilds'] : null;
        $this->container['developer'] = isset($data['developer']) ? $data['developer'] : null;
        $this->container['discoverVersion'] = isset($data['discoverVersion']) ? $data['discoverVersion'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['doneRatio'] = isset($data['doneRatio']) ? $data['doneRatio'] : null;
        $this->container['expectedWorkHours'] = isset($data['expectedWorkHours']) ? $data['expectedWorkHours'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['parentIssueId'] = isset($data['parentIssueId']) ? $data['parentIssueId'] : null;
        $this->container['releaseVersion'] = isset($data['releaseVersion']) ? $data['releaseVersion'] : null;
        $this->container['rootIssueId'] = isset($data['rootIssueId']) ? $data['rootIssueId'] : null;
        $this->container['storyPoint'] = isset($data['storyPoint']) ? $data['storyPoint'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['order']) && ($this->container['order'] > 100)) {
                $invalidProperties[] = "invalid value for 'order', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['order']) && ($this->container['order'] < 1)) {
                $invalidProperties[] = "invalid value for 'order', must be bigger than or equal to 1.";
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
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets beginTime
    *  工作项开始时间
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 工作项开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets closedTime
    *  关闭工作项的时间
    *
    * @return int|null
    */
    public function getClosedTime()
    {
        return $this->container['closedTime'];
    }

    /**
    * Sets closedTime
    *
    * @param int|null $closedTime 关闭工作项的时间
    *
    * @return $this
    */
    public function setClosedTime($closedTime)
    {
        $this->container['closedTime'] = $closedTime;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets customFeilds
    *  自定义属性
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CustomFeildRecord[]|null
    */
    public function getCustomFeilds()
    {
        return $this->container['customFeilds'];
    }

    /**
    * Sets customFeilds
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CustomFeildRecord[]|null $customFeilds 自定义属性
    *
    * @return $this
    */
    public function setCustomFeilds($customFeilds)
    {
        $this->container['customFeilds'] = $customFeilds;
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
    * Gets discoverVersion
    *  发现问题的版本
    *
    * @return string|null
    */
    public function getDiscoverVersion()
    {
        return $this->container['discoverVersion'];
    }

    /**
    * Sets discoverVersion
    *
    * @param string|null $discoverVersion 发现问题的版本
    *
    * @return $this
    */
    public function setDiscoverVersion($discoverVersion)
    {
        $this->container['discoverVersion'] = $discoverVersion;
        return $this;
    }

    /**
    * Gets endTime
    *  工作项结束时间
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
    * @param int|null $endTime 工作项结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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
    * Gets order
    *  顺序
    *
    * @return int|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param int|null $order 顺序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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
    * Gets releaseVersion
    *  发布的版本
    *
    * @return string|null
    */
    public function getReleaseVersion()
    {
        return $this->container['releaseVersion'];
    }

    /**
    * Sets releaseVersion
    *
    * @param string|null $releaseVersion 发布的版本
    *
    * @return $this
    */
    public function setReleaseVersion($releaseVersion)
    {
        $this->container['releaseVersion'] = $releaseVersion;
        return $this;
    }

    /**
    * Gets rootIssueId
    *  根工作项的id
    *
    * @return int|null
    */
    public function getRootIssueId()
    {
        return $this->container['rootIssueId'];
    }

    /**
    * Sets rootIssueId
    *
    * @param int|null $rootIssueId 根工作项的id
    *
    * @return $this
    */
    public function setRootIssueId($rootIssueId)
    {
        $this->container['rootIssueId'] = $rootIssueId;
        return $this;
    }

    /**
    * Gets storyPoint
    *  storyPoint
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4StoryPoint|null
    */
    public function getStoryPoint()
    {
        return $this->container['storyPoint'];
    }

    /**
    * Sets storyPoint
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4StoryPoint|null $storyPoint storyPoint
    *
    * @return $this
    */
    public function setStoryPoint($storyPoint)
    {
        $this->container['storyPoint'] = $storyPoint;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Domain|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Domain|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Tracker|null
    */
    public function getTracker()
    {
        return $this->container['tracker'];
    }

    /**
    * Sets tracker
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Tracker|null $tracker tracker
    *
    * @return $this
    */
    public function setTracker($tracker)
    {
        $this->container['tracker'] = $tracker;
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
    * Gets updatedTime
    *  工作项更新时间
    *
    * @return int|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param int|null $updatedTime 工作项更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
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

