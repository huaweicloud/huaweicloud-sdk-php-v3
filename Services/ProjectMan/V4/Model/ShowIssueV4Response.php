<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIssueV4Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIssueV4Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actualWorkHours  实际工时
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  预计开始时间，年-月-日
    * createdTime  创建时间 年-月-日 时:分:秒
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  预计结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * name  标题
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  工作项发布版本号
    * findReleaseDev  缺陷发现版本号（仅Bug类型工作项具备该字段）
    * env  env
    * tracker  tracker
    * updatedTime  更新时间 年-月-日 时:分:秒
    * closedTime  关闭时间 年-月-日 时:分:秒
    * description  工作项描述
    * order  order
    * accessories  附近列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actualWorkHours' => 'double',
            'assignedCcUser' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser[]',
            'assignedUser' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'beginTime' => 'string',
            'createdTime' => 'string',
            'creator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'customFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CustomField[]',
            'newCustomFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailCustomField[]',
            'developer' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueUser',
            'domain' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Domain',
            'doneRatio' => 'int',
            'endTime' => 'string',
            'expectedWorkHours' => 'double',
            'id' => 'int',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueProjectResponseV4',
            'iteration' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Iteration',
            'storyPoint' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV4StoryPoint',
            'module' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Module',
            'name' => 'string',
            'parentIssue' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4ParentIssue',
            'priority' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Priority',
            'severity' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Severity',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueItemSfV4Status',
            'releaseDev' => 'string',
            'findReleaseDev' => 'string',
            'env' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV4Env',
            'tracker' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CreateIssueResponseV4Tracker',
            'updatedTime' => 'string',
            'closedTime' => 'string',
            'description' => 'string',
            'order' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueOrder',
            'accessories' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueAccessory[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actualWorkHours  实际工时
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  预计开始时间，年-月-日
    * createdTime  创建时间 年-月-日 时:分:秒
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  预计结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * name  标题
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  工作项发布版本号
    * findReleaseDev  缺陷发现版本号（仅Bug类型工作项具备该字段）
    * env  env
    * tracker  tracker
    * updatedTime  更新时间 年-月-日 时:分:秒
    * closedTime  关闭时间 年-月-日 时:分:秒
    * description  工作项描述
    * order  order
    * accessories  附近列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actualWorkHours' => 'double',
        'assignedCcUser' => null,
        'assignedUser' => null,
        'beginTime' => null,
        'createdTime' => null,
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
        'storyPoint' => null,
        'module' => null,
        'name' => null,
        'parentIssue' => null,
        'priority' => null,
        'severity' => null,
        'status' => null,
        'releaseDev' => null,
        'findReleaseDev' => null,
        'env' => null,
        'tracker' => null,
        'updatedTime' => null,
        'closedTime' => null,
        'description' => null,
        'order' => null,
        'accessories' => null
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
    * beginTime  预计开始时间，年-月-日
    * createdTime  创建时间 年-月-日 时:分:秒
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  预计结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * name  标题
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  工作项发布版本号
    * findReleaseDev  缺陷发现版本号（仅Bug类型工作项具备该字段）
    * env  env
    * tracker  tracker
    * updatedTime  更新时间 年-月-日 时:分:秒
    * closedTime  关闭时间 年-月-日 时:分:秒
    * description  工作项描述
    * order  order
    * accessories  附近列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actualWorkHours' => 'actual_work_hours',
            'assignedCcUser' => 'assigned_cc_user',
            'assignedUser' => 'assigned_user',
            'beginTime' => 'begin_time',
            'createdTime' => 'created_time',
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
            'storyPoint' => 'story_point',
            'module' => 'module',
            'name' => 'name',
            'parentIssue' => 'parent_issue',
            'priority' => 'priority',
            'severity' => 'severity',
            'status' => 'status',
            'releaseDev' => 'release_dev',
            'findReleaseDev' => 'find_release_dev',
            'env' => 'env',
            'tracker' => 'tracker',
            'updatedTime' => 'updated_time',
            'closedTime' => 'closed_time',
            'description' => 'description',
            'order' => 'order',
            'accessories' => 'accessories'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actualWorkHours  实际工时
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  预计开始时间，年-月-日
    * createdTime  创建时间 年-月-日 时:分:秒
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  预计结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * name  标题
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  工作项发布版本号
    * findReleaseDev  缺陷发现版本号（仅Bug类型工作项具备该字段）
    * env  env
    * tracker  tracker
    * updatedTime  更新时间 年-月-日 时:分:秒
    * closedTime  关闭时间 年-月-日 时:分:秒
    * description  工作项描述
    * order  order
    * accessories  附近列表
    *
    * @var string[]
    */
    protected static $setters = [
            'actualWorkHours' => 'setActualWorkHours',
            'assignedCcUser' => 'setAssignedCcUser',
            'assignedUser' => 'setAssignedUser',
            'beginTime' => 'setBeginTime',
            'createdTime' => 'setCreatedTime',
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
            'storyPoint' => 'setStoryPoint',
            'module' => 'setModule',
            'name' => 'setName',
            'parentIssue' => 'setParentIssue',
            'priority' => 'setPriority',
            'severity' => 'setSeverity',
            'status' => 'setStatus',
            'releaseDev' => 'setReleaseDev',
            'findReleaseDev' => 'setFindReleaseDev',
            'env' => 'setEnv',
            'tracker' => 'setTracker',
            'updatedTime' => 'setUpdatedTime',
            'closedTime' => 'setClosedTime',
            'description' => 'setDescription',
            'order' => 'setOrder',
            'accessories' => 'setAccessories'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actualWorkHours  实际工时
    * assignedCcUser  抄送人
    * assignedUser  assignedUser
    * beginTime  预计开始时间，年-月-日
    * createdTime  创建时间 年-月-日 时:分:秒
    * creator  creator
    * customFields  自定义属性值,不建议使用，建议参考new_custom_fields字段
    * newCustomFields  自定义属性值
    * developer  developer
    * domain  domain
    * doneRatio  工作项进度值
    * endTime  预计结束时间，年-月-日
    * expectedWorkHours  预计工时
    * id  工作项项id
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * name  标题
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  工作项发布版本号
    * findReleaseDev  缺陷发现版本号（仅Bug类型工作项具备该字段）
    * env  env
    * tracker  tracker
    * updatedTime  更新时间 年-月-日 时:分:秒
    * closedTime  关闭时间 年-月-日 时:分:秒
    * description  工作项描述
    * order  order
    * accessories  附近列表
    *
    * @var string[]
    */
    protected static $getters = [
            'actualWorkHours' => 'getActualWorkHours',
            'assignedCcUser' => 'getAssignedCcUser',
            'assignedUser' => 'getAssignedUser',
            'beginTime' => 'getBeginTime',
            'createdTime' => 'getCreatedTime',
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
            'storyPoint' => 'getStoryPoint',
            'module' => 'getModule',
            'name' => 'getName',
            'parentIssue' => 'getParentIssue',
            'priority' => 'getPriority',
            'severity' => 'getSeverity',
            'status' => 'getStatus',
            'releaseDev' => 'getReleaseDev',
            'findReleaseDev' => 'getFindReleaseDev',
            'env' => 'getEnv',
            'tracker' => 'getTracker',
            'updatedTime' => 'getUpdatedTime',
            'closedTime' => 'getClosedTime',
            'description' => 'getDescription',
            'order' => 'getOrder',
            'accessories' => 'getAccessories'
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
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
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
        $this->container['storyPoint'] = isset($data['storyPoint']) ? $data['storyPoint'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentIssue'] = isset($data['parentIssue']) ? $data['parentIssue'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['findReleaseDev'] = isset($data['findReleaseDev']) ? $data['findReleaseDev'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['closedTime'] = isset($data['closedTime']) ? $data['closedTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['accessories'] = isset($data['accessories']) ? $data['accessories'] : null;
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
    *  预计开始时间，年-月-日
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
    * @param string|null $beginTime 预计开始时间，年-月-日
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间 年-月-日 时:分:秒
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间 年-月-日 时:分:秒
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailCustomField[]|null
    */
    public function getNewCustomFields()
    {
        return $this->container['newCustomFields'];
    }

    /**
    * Sets newCustomFields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailCustomField[]|null $newCustomFields 自定义属性值
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
    *  预计结束时间，年-月-日
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
    * @param string|null $endTime 预计结束时间，年-月-日
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
    * Gets storyPoint
    *  storyPoint
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV4StoryPoint|null
    */
    public function getStoryPoint()
    {
        return $this->container['storyPoint'];
    }

    /**
    * Sets storyPoint
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV4StoryPoint|null $storyPoint storyPoint
    *
    * @return $this
    */
    public function setStoryPoint($storyPoint)
    {
        $this->container['storyPoint'] = $storyPoint;
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
    * Gets releaseDev
    *  工作项发布版本号
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
    * @param string|null $releaseDev 工作项发布版本号
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
    *  缺陷发现版本号（仅Bug类型工作项具备该字段）
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
    * @param string|null $findReleaseDev 缺陷发现版本号（仅Bug类型工作项具备该字段）
    *
    * @return $this
    */
    public function setFindReleaseDev($findReleaseDev)
    {
        $this->container['findReleaseDev'] = $findReleaseDev;
        return $this;
    }

    /**
    * Gets env
    *  env
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV4Env|null
    */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
    * Sets env
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV4Env|null $env env
    *
    * @return $this
    */
    public function setEnv($env)
    {
        $this->container['env'] = $env;
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
    * Gets updatedTime
    *  更新时间 年-月-日 时:分:秒
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 更新时间 年-月-日 时:分:秒
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets closedTime
    *  关闭时间 年-月-日 时:分:秒
    *
    * @return string|null
    */
    public function getClosedTime()
    {
        return $this->container['closedTime'];
    }

    /**
    * Sets closedTime
    *
    * @param string|null $closedTime 关闭时间 年-月-日 时:分:秒
    *
    * @return $this
    */
    public function setClosedTime($closedTime)
    {
        $this->container['closedTime'] = $closedTime;
        return $this;
    }

    /**
    * Gets description
    *  工作项描述
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
    * @param string|null $description 工作项描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets order
    *  order
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueOrder|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueOrder|null $order order
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets accessories
    *  附近列表
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueAccessory[]|null
    */
    public function getAccessories()
    {
        return $this->container['accessories'];
    }

    /**
    * Sets accessories
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueAccessory[]|null $accessories 附近列表
    *
    * @return $this
    */
    public function setAccessories($accessories)
    {
        $this->container['accessories'] = $accessories;
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

