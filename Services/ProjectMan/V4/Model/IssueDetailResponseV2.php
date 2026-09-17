<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueDetailResponseV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueDetailResponseV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * assignedCcUser  **参数解释：** 当前工作项的抄送人。
    * assignedTo  assignedTo
    * startDate  **参数解释：** 工作项的预计开始时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * createdOn  **参数解释：** 工作项创建时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * author  author
    * customFields  **参数解释：** 工作项的自定义字段。
    * customValueNew  customValueNew
    * developer  developer
    * domain  domain
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 工作项的预计结束时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计完成工时（单位：人/时）。 **取值范围：** 不涉及。
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * subject  **参数解释：** 工作项的标题。 **取值范围：** 不涉及。
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 缺陷发现版本号（仅Bug类型工作项具备该字段）。 **取值范围：** 不涉及。
    * env  env
    * tracker  tracker
    * updatedOn  **参数解释：** 工作项的最后更新时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * closedTime  **参数解释：** 工作项的关闭时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * description  **参数解释：** 工作项描述。 **取值范围：** 不涉及。
    * accessoriesList  **参数解释：** 工作项的附件列表。
    * innerText  **参数解释：** 工作项更新的评论内容。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actualWorkHours' => 'double',
            'assignedCcUser' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]',
            'assignedTo' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'startDate' => 'string',
            'createdOn' => 'string',
            'author' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'customFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CustomFieldV2[]',
            'customValueNew' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailCustomFieldV2',
            'developer' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'domain' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Domain',
            'doneRatio' => 'int',
            'endTime' => 'string',
            'expectedWorkHours' => 'double',
            'id' => 'int',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProjectVO',
            'iteration' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Iteration',
            'storyPoint' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2StoryPoint',
            'module' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Module',
            'subject' => 'string',
            'parentIssue' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2ParentIssue',
            'priority' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Priority',
            'severity' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Severity',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Status',
            'releaseDev' => 'string',
            'findReleaseDev' => 'string',
            'env' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Env',
            'tracker' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Tracker',
            'updatedOn' => 'string',
            'closedTime' => 'string',
            'description' => 'string',
            'accessoriesList' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueAccessoryV2[]',
            'innerText' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * assignedCcUser  **参数解释：** 当前工作项的抄送人。
    * assignedTo  assignedTo
    * startDate  **参数解释：** 工作项的预计开始时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * createdOn  **参数解释：** 工作项创建时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * author  author
    * customFields  **参数解释：** 工作项的自定义字段。
    * customValueNew  customValueNew
    * developer  developer
    * domain  domain
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 工作项的预计结束时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计完成工时（单位：人/时）。 **取值范围：** 不涉及。
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * subject  **参数解释：** 工作项的标题。 **取值范围：** 不涉及。
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 缺陷发现版本号（仅Bug类型工作项具备该字段）。 **取值范围：** 不涉及。
    * env  env
    * tracker  tracker
    * updatedOn  **参数解释：** 工作项的最后更新时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * closedTime  **参数解释：** 工作项的关闭时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * description  **参数解释：** 工作项描述。 **取值范围：** 不涉及。
    * accessoriesList  **参数解释：** 工作项的附件列表。
    * innerText  **参数解释：** 工作项更新的评论内容。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actualWorkHours' => 'double',
        'assignedCcUser' => null,
        'assignedTo' => null,
        'startDate' => null,
        'createdOn' => null,
        'author' => null,
        'customFields' => null,
        'customValueNew' => null,
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
        'subject' => null,
        'parentIssue' => null,
        'priority' => null,
        'severity' => null,
        'status' => null,
        'releaseDev' => null,
        'findReleaseDev' => null,
        'env' => null,
        'tracker' => null,
        'updatedOn' => null,
        'closedTime' => null,
        'description' => null,
        'accessoriesList' => null,
        'innerText' => null
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
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * assignedCcUser  **参数解释：** 当前工作项的抄送人。
    * assignedTo  assignedTo
    * startDate  **参数解释：** 工作项的预计开始时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * createdOn  **参数解释：** 工作项创建时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * author  author
    * customFields  **参数解释：** 工作项的自定义字段。
    * customValueNew  customValueNew
    * developer  developer
    * domain  domain
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 工作项的预计结束时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计完成工时（单位：人/时）。 **取值范围：** 不涉及。
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * subject  **参数解释：** 工作项的标题。 **取值范围：** 不涉及。
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 缺陷发现版本号（仅Bug类型工作项具备该字段）。 **取值范围：** 不涉及。
    * env  env
    * tracker  tracker
    * updatedOn  **参数解释：** 工作项的最后更新时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * closedTime  **参数解释：** 工作项的关闭时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * description  **参数解释：** 工作项描述。 **取值范围：** 不涉及。
    * accessoriesList  **参数解释：** 工作项的附件列表。
    * innerText  **参数解释：** 工作项更新的评论内容。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actualWorkHours' => 'actual_work_hours',
            'assignedCcUser' => 'assigned_cc_user',
            'assignedTo' => 'assigned_to',
            'startDate' => 'start_date',
            'createdOn' => 'created_on',
            'author' => 'author',
            'customFields' => 'custom_fields',
            'customValueNew' => 'custom_value_new',
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
            'subject' => 'subject',
            'parentIssue' => 'parent_issue',
            'priority' => 'priority',
            'severity' => 'severity',
            'status' => 'status',
            'releaseDev' => 'release_dev',
            'findReleaseDev' => 'find_release_dev',
            'env' => 'env',
            'tracker' => 'tracker',
            'updatedOn' => 'updated_on',
            'closedTime' => 'closed_time',
            'description' => 'description',
            'accessoriesList' => 'accessories_list',
            'innerText' => 'inner_text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * assignedCcUser  **参数解释：** 当前工作项的抄送人。
    * assignedTo  assignedTo
    * startDate  **参数解释：** 工作项的预计开始时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * createdOn  **参数解释：** 工作项创建时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * author  author
    * customFields  **参数解释：** 工作项的自定义字段。
    * customValueNew  customValueNew
    * developer  developer
    * domain  domain
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 工作项的预计结束时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计完成工时（单位：人/时）。 **取值范围：** 不涉及。
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * subject  **参数解释：** 工作项的标题。 **取值范围：** 不涉及。
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 缺陷发现版本号（仅Bug类型工作项具备该字段）。 **取值范围：** 不涉及。
    * env  env
    * tracker  tracker
    * updatedOn  **参数解释：** 工作项的最后更新时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * closedTime  **参数解释：** 工作项的关闭时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * description  **参数解释：** 工作项描述。 **取值范围：** 不涉及。
    * accessoriesList  **参数解释：** 工作项的附件列表。
    * innerText  **参数解释：** 工作项更新的评论内容。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'actualWorkHours' => 'setActualWorkHours',
            'assignedCcUser' => 'setAssignedCcUser',
            'assignedTo' => 'setAssignedTo',
            'startDate' => 'setStartDate',
            'createdOn' => 'setCreatedOn',
            'author' => 'setAuthor',
            'customFields' => 'setCustomFields',
            'customValueNew' => 'setCustomValueNew',
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
            'subject' => 'setSubject',
            'parentIssue' => 'setParentIssue',
            'priority' => 'setPriority',
            'severity' => 'setSeverity',
            'status' => 'setStatus',
            'releaseDev' => 'setReleaseDev',
            'findReleaseDev' => 'setFindReleaseDev',
            'env' => 'setEnv',
            'tracker' => 'setTracker',
            'updatedOn' => 'setUpdatedOn',
            'closedTime' => 'setClosedTime',
            'description' => 'setDescription',
            'accessoriesList' => 'setAccessoriesList',
            'innerText' => 'setInnerText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * assignedCcUser  **参数解释：** 当前工作项的抄送人。
    * assignedTo  assignedTo
    * startDate  **参数解释：** 工作项的预计开始时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * createdOn  **参数解释：** 工作项创建时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * author  author
    * customFields  **参数解释：** 工作项的自定义字段。
    * customValueNew  customValueNew
    * developer  developer
    * domain  domain
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 工作项的预计结束时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计完成工时（单位：人/时）。 **取值范围：** 不涉及。
    * id  **参数解释：** 工作项id。 **取值范围：** 不涉及。
    * project  project
    * iteration  iteration
    * storyPoint  storyPoint
    * module  module
    * subject  **参数解释：** 工作项的标题。 **取值范围：** 不涉及。
    * parentIssue  parentIssue
    * priority  priority
    * severity  severity
    * status  status
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 缺陷发现版本号（仅Bug类型工作项具备该字段）。 **取值范围：** 不涉及。
    * env  env
    * tracker  tracker
    * updatedOn  **参数解释：** 工作项的最后更新时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * closedTime  **参数解释：** 工作项的关闭时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    * description  **参数解释：** 工作项描述。 **取值范围：** 不涉及。
    * accessoriesList  **参数解释：** 工作项的附件列表。
    * innerText  **参数解释：** 工作项更新的评论内容。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'actualWorkHours' => 'getActualWorkHours',
            'assignedCcUser' => 'getAssignedCcUser',
            'assignedTo' => 'getAssignedTo',
            'startDate' => 'getStartDate',
            'createdOn' => 'getCreatedOn',
            'author' => 'getAuthor',
            'customFields' => 'getCustomFields',
            'customValueNew' => 'getCustomValueNew',
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
            'subject' => 'getSubject',
            'parentIssue' => 'getParentIssue',
            'priority' => 'getPriority',
            'severity' => 'getSeverity',
            'status' => 'getStatus',
            'releaseDev' => 'getReleaseDev',
            'findReleaseDev' => 'getFindReleaseDev',
            'env' => 'getEnv',
            'tracker' => 'getTracker',
            'updatedOn' => 'getUpdatedOn',
            'closedTime' => 'getClosedTime',
            'description' => 'getDescription',
            'accessoriesList' => 'getAccessoriesList',
            'innerText' => 'getInnerText'
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
        $this->container['assignedTo'] = isset($data['assignedTo']) ? $data['assignedTo'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
        $this->container['customValueNew'] = isset($data['customValueNew']) ? $data['customValueNew'] : null;
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['parentIssue'] = isset($data['parentIssue']) ? $data['parentIssue'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['findReleaseDev'] = isset($data['findReleaseDev']) ? $data['findReleaseDev'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
        $this->container['updatedOn'] = isset($data['updatedOn']) ? $data['updatedOn'] : null;
        $this->container['closedTime'] = isset($data['closedTime']) ? $data['closedTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['accessoriesList'] = isset($data['accessoriesList']) ? $data['accessoriesList'] : null;
        $this->container['innerText'] = isset($data['innerText']) ? $data['innerText'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['actualWorkHours']) && ($this->container['actualWorkHours'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'actualWorkHours', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['actualWorkHours']) && ($this->container['actualWorkHours'] < 0)) {
                $invalidProperties[] = "invalid value for 'actualWorkHours', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startDate']) && (mb_strlen($this->container['startDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'startDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['startDate']) && (mb_strlen($this->container['startDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'startDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdOn']) && (mb_strlen($this->container['createdOn']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdOn', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdOn']) && (mb_strlen($this->container['createdOn']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdOn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['doneRatio']) && ($this->container['doneRatio'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'doneRatio', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['doneRatio']) && ($this->container['doneRatio'] < 0)) {
                $invalidProperties[] = "invalid value for 'doneRatio', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expectedWorkHours']) && ($this->container['expectedWorkHours'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'expectedWorkHours', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['expectedWorkHours']) && ($this->container['expectedWorkHours'] < 0)) {
                $invalidProperties[] = "invalid value for 'expectedWorkHours', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 30)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 2)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['releaseDev']) && (mb_strlen($this->container['releaseDev']) > 30)) {
                $invalidProperties[] = "invalid value for 'releaseDev', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['releaseDev']) && (mb_strlen($this->container['releaseDev']) < 2)) {
                $invalidProperties[] = "invalid value for 'releaseDev', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['findReleaseDev']) && (mb_strlen($this->container['findReleaseDev']) > 32)) {
                $invalidProperties[] = "invalid value for 'findReleaseDev', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['findReleaseDev']) && (mb_strlen($this->container['findReleaseDev']) < 0)) {
                $invalidProperties[] = "invalid value for 'findReleaseDev', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedOn']) && (mb_strlen($this->container['updatedOn']) > 32)) {
                $invalidProperties[] = "invalid value for 'updatedOn', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['updatedOn']) && (mb_strlen($this->container['updatedOn']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedOn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closedTime']) && (mb_strlen($this->container['closedTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'closedTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['closedTime']) && (mb_strlen($this->container['closedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'closedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
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
    * @param double|null $actualWorkHours **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
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
    *  **参数解释：** 当前工作项的抄送人。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]|null
    */
    public function getAssignedCcUser()
    {
        return $this->container['assignedCcUser'];
    }

    /**
    * Sets assignedCcUser
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO[]|null $assignedCcUser **参数解释：** 当前工作项的抄送人。
    *
    * @return $this
    */
    public function setAssignedCcUser($assignedCcUser)
    {
        $this->container['assignedCcUser'] = $assignedCcUser;
        return $this;
    }

    /**
    * Gets assignedTo
    *  assignedTo
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getAssignedTo()
    {
        return $this->container['assignedTo'];
    }

    /**
    * Sets assignedTo
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $assignedTo assignedTo
    *
    * @return $this
    */
    public function setAssignedTo($assignedTo)
    {
        $this->container['assignedTo'] = $assignedTo;
        return $this;
    }

    /**
    * Gets startDate
    *  **参数解释：** 工作项的预计开始时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate **参数解释：** 工作项的预计开始时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets createdOn
    *  **参数解释：** 工作项创建时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
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
    * @param string|null $createdOn **参数解释：** 工作项创建时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets customFields
    *  **参数解释：** 工作项的自定义字段。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CustomFieldV2[]|null
    */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
    * Sets customFields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CustomFieldV2[]|null $customFields **参数解释：** 工作项的自定义字段。
    *
    * @return $this
    */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;
        return $this;
    }

    /**
    * Gets customValueNew
    *  customValueNew
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailCustomFieldV2|null
    */
    public function getCustomValueNew()
    {
        return $this->container['customValueNew'];
    }

    /**
    * Sets customValueNew
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailCustomFieldV2|null $customValueNew customValueNew
    *
    * @return $this
    */
    public function setCustomValueNew($customValueNew)
    {
        $this->container['customValueNew'] = $customValueNew;
        return $this;
    }

    /**
    * Gets developer
    *  developer
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getDeveloper()
    {
        return $this->container['developer'];
    }

    /**
    * Sets developer
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $developer developer
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Domain|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Domain|null $domain domain
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
    *  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
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
    * @param int|null $doneRatio **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
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
    *  **参数解释：** 工作项的预计结束时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
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
    * @param string|null $endTime **参数解释：** 工作项的预计结束时间，时间戳格式（示例：1754323200000）。 **取值范围：** 不涉及。
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
    *  **参数解释：** 工作项的预计完成工时（单位：人/时）。 **取值范围：** 不涉及。
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
    * @param double|null $expectedWorkHours **参数解释：** 工作项的预计完成工时（单位：人/时）。 **取值范围：** 不涉及。
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
    *  **参数解释：** 工作项id。 **取值范围：** 不涉及。
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
    * @param int|null $id **参数解释：** 工作项id。 **取值范围：** 不涉及。
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProjectVO|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProjectVO|null $project project
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Iteration|null
    */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
    * Sets iteration
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Iteration|null $iteration iteration
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2StoryPoint|null
    */
    public function getStoryPoint()
    {
        return $this->container['storyPoint'];
    }

    /**
    * Sets storyPoint
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2StoryPoint|null $storyPoint storyPoint
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Module|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Module|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets subject
    *  **参数解释：** 工作项的标题。 **取值范围：** 不涉及。
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
    * @param string|null $subject **参数解释：** 工作项的标题。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets parentIssue
    *  parentIssue
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2ParentIssue|null
    */
    public function getParentIssue()
    {
        return $this->container['parentIssue'];
    }

    /**
    * Sets parentIssue
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2ParentIssue|null $parentIssue parentIssue
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Priority|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Priority|null $priority priority
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Severity|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Severity|null $severity severity
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Status|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Status|null $status status
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
    *  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
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
    * @param string|null $releaseDev **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
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
    *  **参数解释：** 缺陷发现版本号（仅Bug类型工作项具备该字段）。 **取值范围：** 不涉及。
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
    * @param string|null $findReleaseDev **参数解释：** 缺陷发现版本号（仅Bug类型工作项具备该字段）。 **取值范围：** 不涉及。
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Env|null
    */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
    * Sets env
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Env|null $env env
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Tracker|null
    */
    public function getTracker()
    {
        return $this->container['tracker'];
    }

    /**
    * Sets tracker
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueDetailResponseV2Tracker|null $tracker tracker
    *
    * @return $this
    */
    public function setTracker($tracker)
    {
        $this->container['tracker'] = $tracker;
        return $this;
    }

    /**
    * Gets updatedOn
    *  **参数解释：** 工作项的最后更新时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
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
    * @param string|null $updatedOn **参数解释：** 工作项的最后更新时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedOn($updatedOn)
    {
        $this->container['updatedOn'] = $updatedOn;
        return $this;
    }

    /**
    * Gets closedTime
    *  **参数解释：** 工作项的关闭时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
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
    * @param string|null $closedTime **参数解释：** 工作项的关闭时间，时间戳格式（示例：1754374102000）。 **取值范围：** 不涉及。
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
    *  **参数解释：** 工作项描述。 **取值范围：** 不涉及。
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
    * @param string|null $description **参数解释：** 工作项描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets accessoriesList
    *  **参数解释：** 工作项的附件列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueAccessoryV2[]|null
    */
    public function getAccessoriesList()
    {
        return $this->container['accessoriesList'];
    }

    /**
    * Sets accessoriesList
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueAccessoryV2[]|null $accessoriesList **参数解释：** 工作项的附件列表。
    *
    * @return $this
    */
    public function setAccessoriesList($accessoriesList)
    {
        $this->container['accessoriesList'] = $accessoriesList;
        return $this;
    }

    /**
    * Gets innerText
    *  **参数解释：** 工作项更新的评论内容。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getInnerText()
    {
        return $this->container['innerText'];
    }

    /**
    * Sets innerText
    *
    * @param string|null $innerText **参数解释：** 工作项更新的评论内容。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInnerText($innerText)
    {
        $this->container['innerText'] = $innerText;
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

