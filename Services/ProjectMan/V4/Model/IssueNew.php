<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * updatedOn  **参数解释：** 工作项的更新日期。时间戳格式（示例：1839340800000） 。 **取值范围：** 不涉及。
    * storyPoint  storyPoint
    * subject  **参数解释：** 工作项的负责者。 **取值范围：** 不涉及。
    * project  project
    * isParent  **参数解释：** 是否有子工作项。 **取值范围：** true（有子工作项） false（没有子工作项）
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 发布人 。 **取值范围：** 不涉及。
    * tracker  tracker
    * id  **参数解释：** 工作项列表id。 **取值范围：** 不涉及。
    * startDate  **参数解释：** 工作项的开始日期。时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * assignedTo  assignedTo
    * statusAttribute  statusAttribute
    * severity  severity
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * author  author
    * module  **参数解释：** 工作项的模块。 **取值范围：** 不涉及。
    * dueDate  **参数解释：** 工作项的截止日期，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计工时(单位：人时)。 **取值范围：** 不涉及。
    * priority  priority
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * isWatcher  **参数解释：** 是否关注 。 **取值范围：** true（是） false（不是）
    * deleted  **参数解释：** 是否删除 。 **取值范围：** true（是） false（不是）
    * fixedVersion  **参数解释：** 问题解决版本。 **取值范围：** 不涉及。
    * isArchived  **参数解释：** 是否归档。 **取值范围：** true（是） false（不是）
    * createdOn  **参数解释：** 工作项的创建时间，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * domain  **参数解释：** 工作项的领域 。 **取值范围：** 不涉及。
    * developer  **参数解释：** 工作项的开发人员。 **取值范围：** 不涉及。
    * closeder  **参数解释：** 关闭人员。 **取值范围：** 不涉及。
    * position  **参数解释：** 工作项在列表的展示位置 。 **取值范围：** 不涉及。
    * closedFlag  **参数解释：** 关闭标志 。 **取值范围：** 0（打开） 1（关闭）
    * assignedCcUser  **参数解释：** 工作项的抄送人。 **取值范围：** 不涉及。
    * customValueNew  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * status  status
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'updatedOn' => 'string',
            'storyPoint' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StoryPoint',
            'subject' => 'string',
            'project' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\Project',
            'isParent' => 'bool',
            'doneRatio' => 'int',
            'findReleaseDev' => 'string',
            'tracker' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\Tracker',
            'id' => 'int',
            'startDate' => 'string',
            'assignedTo' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueNewAssignedTo',
            'statusAttribute' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StatusAttributeVO',
            'severity' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\Severity',
            'releaseDev' => 'string',
            'author' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IssueNewAuthor',
            'module' => 'object',
            'dueDate' => 'string',
            'expectedWorkHours' => 'int',
            'priority' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\Priority',
            'actualWorkHours' => 'int',
            'isWatcher' => 'bool',
            'deleted' => 'bool',
            'fixedVersion' => 'object',
            'isArchived' => 'bool',
            'createdOn' => 'string',
            'domain' => 'object',
            'developer' => 'object',
            'closeder' => 'object',
            'position' => 'string',
            'closedFlag' => 'int',
            'assignedCcUser' => 'string',
            'customValueNew' => 'object',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\Status'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * updatedOn  **参数解释：** 工作项的更新日期。时间戳格式（示例：1839340800000） 。 **取值范围：** 不涉及。
    * storyPoint  storyPoint
    * subject  **参数解释：** 工作项的负责者。 **取值范围：** 不涉及。
    * project  project
    * isParent  **参数解释：** 是否有子工作项。 **取值范围：** true（有子工作项） false（没有子工作项）
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 发布人 。 **取值范围：** 不涉及。
    * tracker  tracker
    * id  **参数解释：** 工作项列表id。 **取值范围：** 不涉及。
    * startDate  **参数解释：** 工作项的开始日期。时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * assignedTo  assignedTo
    * statusAttribute  statusAttribute
    * severity  severity
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * author  author
    * module  **参数解释：** 工作项的模块。 **取值范围：** 不涉及。
    * dueDate  **参数解释：** 工作项的截止日期，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计工时(单位：人时)。 **取值范围：** 不涉及。
    * priority  priority
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * isWatcher  **参数解释：** 是否关注 。 **取值范围：** true（是） false（不是）
    * deleted  **参数解释：** 是否删除 。 **取值范围：** true（是） false（不是）
    * fixedVersion  **参数解释：** 问题解决版本。 **取值范围：** 不涉及。
    * isArchived  **参数解释：** 是否归档。 **取值范围：** true（是） false（不是）
    * createdOn  **参数解释：** 工作项的创建时间，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * domain  **参数解释：** 工作项的领域 。 **取值范围：** 不涉及。
    * developer  **参数解释：** 工作项的开发人员。 **取值范围：** 不涉及。
    * closeder  **参数解释：** 关闭人员。 **取值范围：** 不涉及。
    * position  **参数解释：** 工作项在列表的展示位置 。 **取值范围：** 不涉及。
    * closedFlag  **参数解释：** 关闭标志 。 **取值范围：** 0（打开） 1（关闭）
    * assignedCcUser  **参数解释：** 工作项的抄送人。 **取值范围：** 不涉及。
    * customValueNew  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * status  status
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'updatedOn' => null,
        'storyPoint' => null,
        'subject' => null,
        'project' => null,
        'isParent' => null,
        'doneRatio' => 'int32',
        'findReleaseDev' => null,
        'tracker' => null,
        'id' => 'int32',
        'startDate' => null,
        'assignedTo' => null,
        'statusAttribute' => null,
        'severity' => null,
        'releaseDev' => null,
        'author' => null,
        'module' => null,
        'dueDate' => null,
        'expectedWorkHours' => 'int32',
        'priority' => null,
        'actualWorkHours' => 'int32',
        'isWatcher' => null,
        'deleted' => null,
        'fixedVersion' => null,
        'isArchived' => null,
        'createdOn' => null,
        'domain' => null,
        'developer' => null,
        'closeder' => null,
        'position' => null,
        'closedFlag' => 'int32',
        'assignedCcUser' => null,
        'customValueNew' => null,
        'status' => null
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
    * updatedOn  **参数解释：** 工作项的更新日期。时间戳格式（示例：1839340800000） 。 **取值范围：** 不涉及。
    * storyPoint  storyPoint
    * subject  **参数解释：** 工作项的负责者。 **取值范围：** 不涉及。
    * project  project
    * isParent  **参数解释：** 是否有子工作项。 **取值范围：** true（有子工作项） false（没有子工作项）
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 发布人 。 **取值范围：** 不涉及。
    * tracker  tracker
    * id  **参数解释：** 工作项列表id。 **取值范围：** 不涉及。
    * startDate  **参数解释：** 工作项的开始日期。时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * assignedTo  assignedTo
    * statusAttribute  statusAttribute
    * severity  severity
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * author  author
    * module  **参数解释：** 工作项的模块。 **取值范围：** 不涉及。
    * dueDate  **参数解释：** 工作项的截止日期，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计工时(单位：人时)。 **取值范围：** 不涉及。
    * priority  priority
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * isWatcher  **参数解释：** 是否关注 。 **取值范围：** true（是） false（不是）
    * deleted  **参数解释：** 是否删除 。 **取值范围：** true（是） false（不是）
    * fixedVersion  **参数解释：** 问题解决版本。 **取值范围：** 不涉及。
    * isArchived  **参数解释：** 是否归档。 **取值范围：** true（是） false（不是）
    * createdOn  **参数解释：** 工作项的创建时间，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * domain  **参数解释：** 工作项的领域 。 **取值范围：** 不涉及。
    * developer  **参数解释：** 工作项的开发人员。 **取值范围：** 不涉及。
    * closeder  **参数解释：** 关闭人员。 **取值范围：** 不涉及。
    * position  **参数解释：** 工作项在列表的展示位置 。 **取值范围：** 不涉及。
    * closedFlag  **参数解释：** 关闭标志 。 **取值范围：** 0（打开） 1（关闭）
    * assignedCcUser  **参数解释：** 工作项的抄送人。 **取值范围：** 不涉及。
    * customValueNew  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * status  status
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'updatedOn' => 'updated_on',
            'storyPoint' => 'story_point',
            'subject' => 'subject',
            'project' => 'project',
            'isParent' => 'isParent',
            'doneRatio' => 'done_ratio',
            'findReleaseDev' => 'findReleaseDev',
            'tracker' => 'tracker',
            'id' => 'id',
            'startDate' => 'start_date',
            'assignedTo' => 'assigned_to',
            'statusAttribute' => 'status_attribute',
            'severity' => 'severity',
            'releaseDev' => 'releaseDev',
            'author' => 'author',
            'module' => 'module',
            'dueDate' => 'due_date',
            'expectedWorkHours' => 'expected_work_hours',
            'priority' => 'priority',
            'actualWorkHours' => 'actual_work_hours',
            'isWatcher' => 'is_watcher',
            'deleted' => 'deleted',
            'fixedVersion' => 'fixed_version',
            'isArchived' => 'is_archived',
            'createdOn' => 'created_on',
            'domain' => 'domain',
            'developer' => 'developer',
            'closeder' => 'closeder',
            'position' => 'position',
            'closedFlag' => 'closed_flag',
            'assignedCcUser' => 'assigned_cc_user',
            'customValueNew' => 'custom_value_new',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * updatedOn  **参数解释：** 工作项的更新日期。时间戳格式（示例：1839340800000） 。 **取值范围：** 不涉及。
    * storyPoint  storyPoint
    * subject  **参数解释：** 工作项的负责者。 **取值范围：** 不涉及。
    * project  project
    * isParent  **参数解释：** 是否有子工作项。 **取值范围：** true（有子工作项） false（没有子工作项）
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 发布人 。 **取值范围：** 不涉及。
    * tracker  tracker
    * id  **参数解释：** 工作项列表id。 **取值范围：** 不涉及。
    * startDate  **参数解释：** 工作项的开始日期。时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * assignedTo  assignedTo
    * statusAttribute  statusAttribute
    * severity  severity
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * author  author
    * module  **参数解释：** 工作项的模块。 **取值范围：** 不涉及。
    * dueDate  **参数解释：** 工作项的截止日期，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计工时(单位：人时)。 **取值范围：** 不涉及。
    * priority  priority
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * isWatcher  **参数解释：** 是否关注 。 **取值范围：** true（是） false（不是）
    * deleted  **参数解释：** 是否删除 。 **取值范围：** true（是） false（不是）
    * fixedVersion  **参数解释：** 问题解决版本。 **取值范围：** 不涉及。
    * isArchived  **参数解释：** 是否归档。 **取值范围：** true（是） false（不是）
    * createdOn  **参数解释：** 工作项的创建时间，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * domain  **参数解释：** 工作项的领域 。 **取值范围：** 不涉及。
    * developer  **参数解释：** 工作项的开发人员。 **取值范围：** 不涉及。
    * closeder  **参数解释：** 关闭人员。 **取值范围：** 不涉及。
    * position  **参数解释：** 工作项在列表的展示位置 。 **取值范围：** 不涉及。
    * closedFlag  **参数解释：** 关闭标志 。 **取值范围：** 0（打开） 1（关闭）
    * assignedCcUser  **参数解释：** 工作项的抄送人。 **取值范围：** 不涉及。
    * customValueNew  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * status  status
    *
    * @var string[]
    */
    protected static $setters = [
            'updatedOn' => 'setUpdatedOn',
            'storyPoint' => 'setStoryPoint',
            'subject' => 'setSubject',
            'project' => 'setProject',
            'isParent' => 'setIsParent',
            'doneRatio' => 'setDoneRatio',
            'findReleaseDev' => 'setFindReleaseDev',
            'tracker' => 'setTracker',
            'id' => 'setId',
            'startDate' => 'setStartDate',
            'assignedTo' => 'setAssignedTo',
            'statusAttribute' => 'setStatusAttribute',
            'severity' => 'setSeverity',
            'releaseDev' => 'setReleaseDev',
            'author' => 'setAuthor',
            'module' => 'setModule',
            'dueDate' => 'setDueDate',
            'expectedWorkHours' => 'setExpectedWorkHours',
            'priority' => 'setPriority',
            'actualWorkHours' => 'setActualWorkHours',
            'isWatcher' => 'setIsWatcher',
            'deleted' => 'setDeleted',
            'fixedVersion' => 'setFixedVersion',
            'isArchived' => 'setIsArchived',
            'createdOn' => 'setCreatedOn',
            'domain' => 'setDomain',
            'developer' => 'setDeveloper',
            'closeder' => 'setCloseder',
            'position' => 'setPosition',
            'closedFlag' => 'setClosedFlag',
            'assignedCcUser' => 'setAssignedCcUser',
            'customValueNew' => 'setCustomValueNew',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * updatedOn  **参数解释：** 工作项的更新日期。时间戳格式（示例：1839340800000） 。 **取值范围：** 不涉及。
    * storyPoint  storyPoint
    * subject  **参数解释：** 工作项的负责者。 **取值范围：** 不涉及。
    * project  project
    * isParent  **参数解释：** 是否有子工作项。 **取值范围：** true（有子工作项） false（没有子工作项）
    * doneRatio  **参数解释：** 工作项完成度。 **取值范围：** 不涉及。
    * findReleaseDev  **参数解释：** 发布人 。 **取值范围：** 不涉及。
    * tracker  tracker
    * id  **参数解释：** 工作项列表id。 **取值范围：** 不涉及。
    * startDate  **参数解释：** 工作项的开始日期。时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * assignedTo  assignedTo
    * statusAttribute  statusAttribute
    * severity  severity
    * releaseDev  **参数解释：** 工作项发布版本号。 **取值范围：** 不涉及。
    * author  author
    * module  **参数解释：** 工作项的模块。 **取值范围：** 不涉及。
    * dueDate  **参数解释：** 工作项的截止日期，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * expectedWorkHours  **参数解释：** 工作项的预计工时(单位：人时)。 **取值范围：** 不涉及。
    * priority  priority
    * actualWorkHours  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    * isWatcher  **参数解释：** 是否关注 。 **取值范围：** true（是） false（不是）
    * deleted  **参数解释：** 是否删除 。 **取值范围：** true（是） false（不是）
    * fixedVersion  **参数解释：** 问题解决版本。 **取值范围：** 不涉及。
    * isArchived  **参数解释：** 是否归档。 **取值范围：** true（是） false（不是）
    * createdOn  **参数解释：** 工作项的创建时间，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    * domain  **参数解释：** 工作项的领域 。 **取值范围：** 不涉及。
    * developer  **参数解释：** 工作项的开发人员。 **取值范围：** 不涉及。
    * closeder  **参数解释：** 关闭人员。 **取值范围：** 不涉及。
    * position  **参数解释：** 工作项在列表的展示位置 。 **取值范围：** 不涉及。
    * closedFlag  **参数解释：** 关闭标志 。 **取值范围：** 0（打开） 1（关闭）
    * assignedCcUser  **参数解释：** 工作项的抄送人。 **取值范围：** 不涉及。
    * customValueNew  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * status  status
    *
    * @var string[]
    */
    protected static $getters = [
            'updatedOn' => 'getUpdatedOn',
            'storyPoint' => 'getStoryPoint',
            'subject' => 'getSubject',
            'project' => 'getProject',
            'isParent' => 'getIsParent',
            'doneRatio' => 'getDoneRatio',
            'findReleaseDev' => 'getFindReleaseDev',
            'tracker' => 'getTracker',
            'id' => 'getId',
            'startDate' => 'getStartDate',
            'assignedTo' => 'getAssignedTo',
            'statusAttribute' => 'getStatusAttribute',
            'severity' => 'getSeverity',
            'releaseDev' => 'getReleaseDev',
            'author' => 'getAuthor',
            'module' => 'getModule',
            'dueDate' => 'getDueDate',
            'expectedWorkHours' => 'getExpectedWorkHours',
            'priority' => 'getPriority',
            'actualWorkHours' => 'getActualWorkHours',
            'isWatcher' => 'getIsWatcher',
            'deleted' => 'getDeleted',
            'fixedVersion' => 'getFixedVersion',
            'isArchived' => 'getIsArchived',
            'createdOn' => 'getCreatedOn',
            'domain' => 'getDomain',
            'developer' => 'getDeveloper',
            'closeder' => 'getCloseder',
            'position' => 'getPosition',
            'closedFlag' => 'getClosedFlag',
            'assignedCcUser' => 'getAssignedCcUser',
            'customValueNew' => 'getCustomValueNew',
            'status' => 'getStatus'
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
        $this->container['updatedOn'] = isset($data['updatedOn']) ? $data['updatedOn'] : null;
        $this->container['storyPoint'] = isset($data['storyPoint']) ? $data['storyPoint'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['isParent'] = isset($data['isParent']) ? $data['isParent'] : null;
        $this->container['doneRatio'] = isset($data['doneRatio']) ? $data['doneRatio'] : null;
        $this->container['findReleaseDev'] = isset($data['findReleaseDev']) ? $data['findReleaseDev'] : null;
        $this->container['tracker'] = isset($data['tracker']) ? $data['tracker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['assignedTo'] = isset($data['assignedTo']) ? $data['assignedTo'] : null;
        $this->container['statusAttribute'] = isset($data['statusAttribute']) ? $data['statusAttribute'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['expectedWorkHours'] = isset($data['expectedWorkHours']) ? $data['expectedWorkHours'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['actualWorkHours'] = isset($data['actualWorkHours']) ? $data['actualWorkHours'] : null;
        $this->container['isWatcher'] = isset($data['isWatcher']) ? $data['isWatcher'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['fixedVersion'] = isset($data['fixedVersion']) ? $data['fixedVersion'] : null;
        $this->container['isArchived'] = isset($data['isArchived']) ? $data['isArchived'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['developer'] = isset($data['developer']) ? $data['developer'] : null;
        $this->container['closeder'] = isset($data['closeder']) ? $data['closeder'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['closedFlag'] = isset($data['closedFlag']) ? $data['closedFlag'] : null;
        $this->container['assignedCcUser'] = isset($data['assignedCcUser']) ? $data['assignedCcUser'] : null;
        $this->container['customValueNew'] = isset($data['customValueNew']) ? $data['customValueNew'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets updatedOn
    *  **参数解释：** 工作项的更新日期。时间戳格式（示例：1839340800000） 。 **取值范围：** 不涉及。
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
    * @param string|null $updatedOn **参数解释：** 工作项的更新日期。时间戳格式（示例：1839340800000） 。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedOn($updatedOn)
    {
        $this->container['updatedOn'] = $updatedOn;
        return $this;
    }

    /**
    * Gets storyPoint
    *  storyPoint
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StoryPoint|null
    */
    public function getStoryPoint()
    {
        return $this->container['storyPoint'];
    }

    /**
    * Sets storyPoint
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StoryPoint|null $storyPoint storyPoint
    *
    * @return $this
    */
    public function setStoryPoint($storyPoint)
    {
        $this->container['storyPoint'] = $storyPoint;
        return $this;
    }

    /**
    * Gets subject
    *  **参数解释：** 工作项的负责者。 **取值范围：** 不涉及。
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
    * @param string|null $subject **参数解释：** 工作项的负责者。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets project
    *  project
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\Project|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\Project|null $project project
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets isParent
    *  **参数解释：** 是否有子工作项。 **取值范围：** true（有子工作项） false（没有子工作项）
    *
    * @return bool|null
    */
    public function getIsParent()
    {
        return $this->container['isParent'];
    }

    /**
    * Sets isParent
    *
    * @param bool|null $isParent **参数解释：** 是否有子工作项。 **取值范围：** true（有子工作项） false（没有子工作项）
    *
    * @return $this
    */
    public function setIsParent($isParent)
    {
        $this->container['isParent'] = $isParent;
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
    * Gets findReleaseDev
    *  **参数解释：** 发布人 。 **取值范围：** 不涉及。
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
    * @param string|null $findReleaseDev **参数解释：** 发布人 。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFindReleaseDev($findReleaseDev)
    {
        $this->container['findReleaseDev'] = $findReleaseDev;
        return $this;
    }

    /**
    * Gets tracker
    *  tracker
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\Tracker|null
    */
    public function getTracker()
    {
        return $this->container['tracker'];
    }

    /**
    * Sets tracker
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\Tracker|null $tracker tracker
    *
    * @return $this
    */
    public function setTracker($tracker)
    {
        $this->container['tracker'] = $tracker;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 工作项列表id。 **取值范围：** 不涉及。
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
    * @param int|null $id **参数解释：** 工作项列表id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets startDate
    *  **参数解释：** 工作项的开始日期。时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
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
    * @param string|null $startDate **参数解释：** 工作项的开始日期。时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets assignedTo
    *  assignedTo
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueNewAssignedTo|null
    */
    public function getAssignedTo()
    {
        return $this->container['assignedTo'];
    }

    /**
    * Sets assignedTo
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueNewAssignedTo|null $assignedTo assignedTo
    *
    * @return $this
    */
    public function setAssignedTo($assignedTo)
    {
        $this->container['assignedTo'] = $assignedTo;
        return $this;
    }

    /**
    * Gets statusAttribute
    *  statusAttribute
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusAttributeVO|null
    */
    public function getStatusAttribute()
    {
        return $this->container['statusAttribute'];
    }

    /**
    * Sets statusAttribute
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusAttributeVO|null $statusAttribute statusAttribute
    *
    * @return $this
    */
    public function setStatusAttribute($statusAttribute)
    {
        $this->container['statusAttribute'] = $statusAttribute;
        return $this;
    }

    /**
    * Gets severity
    *  severity
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\Severity|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\Severity|null $severity severity
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
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
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueNewAuthor|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IssueNewAuthor|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets module
    *  **参数解释：** 工作项的模块。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param object|null $module **参数解释：** 工作项的模块。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets dueDate
    *  **参数解释：** 工作项的截止日期，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
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
    * @param string|null $dueDate **参数解释：** 工作项的截止日期，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;
        return $this;
    }

    /**
    * Gets expectedWorkHours
    *  **参数解释：** 工作项的预计工时(单位：人时)。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getExpectedWorkHours()
    {
        return $this->container['expectedWorkHours'];
    }

    /**
    * Sets expectedWorkHours
    *
    * @param int|null $expectedWorkHours **参数解释：** 工作项的预计工时(单位：人时)。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setExpectedWorkHours($expectedWorkHours)
    {
        $this->container['expectedWorkHours'] = $expectedWorkHours;
        return $this;
    }

    /**
    * Gets priority
    *  priority
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\Priority|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\Priority|null $priority priority
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets actualWorkHours
    *  **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getActualWorkHours()
    {
        return $this->container['actualWorkHours'];
    }

    /**
    * Sets actualWorkHours
    *
    * @param int|null $actualWorkHours **参数解释：** 工作项的实际工时（单位：人/时）。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setActualWorkHours($actualWorkHours)
    {
        $this->container['actualWorkHours'] = $actualWorkHours;
        return $this;
    }

    /**
    * Gets isWatcher
    *  **参数解释：** 是否关注 。 **取值范围：** true（是） false（不是）
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
    * @param bool|null $isWatcher **参数解释：** 是否关注 。 **取值范围：** true（是） false（不是）
    *
    * @return $this
    */
    public function setIsWatcher($isWatcher)
    {
        $this->container['isWatcher'] = $isWatcher;
        return $this;
    }

    /**
    * Gets deleted
    *  **参数解释：** 是否删除 。 **取值范围：** true（是） false（不是）
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
    * @param bool|null $deleted **参数解释：** 是否删除 。 **取值范围：** true（是） false（不是）
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets fixedVersion
    *  **参数解释：** 问题解决版本。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getFixedVersion()
    {
        return $this->container['fixedVersion'];
    }

    /**
    * Sets fixedVersion
    *
    * @param object|null $fixedVersion **参数解释：** 问题解决版本。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFixedVersion($fixedVersion)
    {
        $this->container['fixedVersion'] = $fixedVersion;
        return $this;
    }

    /**
    * Gets isArchived
    *  **参数解释：** 是否归档。 **取值范围：** true（是） false（不是）
    *
    * @return bool|null
    */
    public function getIsArchived()
    {
        return $this->container['isArchived'];
    }

    /**
    * Sets isArchived
    *
    * @param bool|null $isArchived **参数解释：** 是否归档。 **取值范围：** true（是） false（不是）
    *
    * @return $this
    */
    public function setIsArchived($isArchived)
    {
        $this->container['isArchived'] = $isArchived;
        return $this;
    }

    /**
    * Gets createdOn
    *  **参数解释：** 工作项的创建时间，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
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
    * @param string|null $createdOn **参数解释：** 工作项的创建时间，时间戳格式（示例：1839340800000）。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;
        return $this;
    }

    /**
    * Gets domain
    *  **参数解释：** 工作项的领域 。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param object|null $domain **参数解释：** 工作项的领域 。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets developer
    *  **参数解释：** 工作项的开发人员。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getDeveloper()
    {
        return $this->container['developer'];
    }

    /**
    * Sets developer
    *
    * @param object|null $developer **参数解释：** 工作项的开发人员。 **取值范围：** 不涉及。
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
    *  **参数解释：** 关闭人员。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getCloseder()
    {
        return $this->container['closeder'];
    }

    /**
    * Sets closeder
    *
    * @param object|null $closeder **参数解释：** 关闭人员。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCloseder($closeder)
    {
        $this->container['closeder'] = $closeder;
        return $this;
    }

    /**
    * Gets position
    *  **参数解释：** 工作项在列表的展示位置 。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param string|null $position **参数解释：** 工作项在列表的展示位置 。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets closedFlag
    *  **参数解释：** 关闭标志 。 **取值范围：** 0（打开） 1（关闭）
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
    * @param int|null $closedFlag **参数解释：** 关闭标志 。 **取值范围：** 0（打开） 1（关闭）
    *
    * @return $this
    */
    public function setClosedFlag($closedFlag)
    {
        $this->container['closedFlag'] = $closedFlag;
        return $this;
    }

    /**
    * Gets assignedCcUser
    *  **参数解释：** 工作项的抄送人。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getAssignedCcUser()
    {
        return $this->container['assignedCcUser'];
    }

    /**
    * Sets assignedCcUser
    *
    * @param string|null $assignedCcUser **参数解释：** 工作项的抄送人。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAssignedCcUser($assignedCcUser)
    {
        $this->container['assignedCcUser'] = $assignedCcUser;
        return $this;
    }

    /**
    * Gets customValueNew
    *  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    *
    * @return object|null
    */
    public function getCustomValueNew()
    {
        return $this->container['customValueNew'];
    }

    /**
    * Sets customValueNew
    *
    * @param object|null $customValueNew **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCustomValueNew($customValueNew)
    {
        $this->container['customValueNew'] = $customValueNew;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\Status|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\Status|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

