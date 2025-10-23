<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMergeRequestDiscussionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMergeRequestDiscussionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 评论id(主评论和回复不共用)。
    * type  **参数解释：** 评论类型。 **取值范围：** - DiscussionNote: 需要解决的关联代码行的评论。 - DiffNote: 一般。
    * body  **参数解释：** 评论内容。
    * attachment  **参数解释：** 附件(弃用)。
    * author  author
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * system  **参数解释：** 是否为系统添加的。
    * noteableId  **参数解释：** 合并请求id或issue id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * resolvable  **参数解释：** 是否需要解决。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * noteableIid  **参数解释：** 合并请求iid或issue iid。
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repository  **参数解释：** 仓库路径。
    * diffFile  **参数解释：** 关联代码行所在文件的文件名。
    * diff  **参数解释：** 关联代码行的代码片段。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文名。
    * reviewCategoriesEn  **参数解释：** 合并请求版本信息。
    * reviewModules  **参数解释：** 合并请求版本信息。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * filePath  **参数解释：** 文件路径(弃用)。
    * line  **参数解释：** 行号(弃用)。
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  **参数解释：** 是否已解决。
    * isOutdated  **参数解释：** 是否已过期。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'type' => 'string',
            'body' => 'string',
            'attachment' => 'string',
            'author' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'system' => 'bool',
            'noteableId' => 'int',
            'noteableType' => 'string',
            'commitId' => 'string',
            'resolvable' => 'bool',
            'isReply' => 'bool',
            'resolvedBy' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'noteableIid' => 'int',
            'discussionId' => 'string',
            'repository' => 'string',
            'diffFile' => 'string',
            'diff' => 'string',
            'archived' => 'bool',
            'reviewCategories' => 'string',
            'reviewCategoriesCn' => 'string',
            'reviewCategoriesEn' => 'string',
            'reviewModules' => 'string',
            'severity' => 'string',
            'severityCn' => 'string',
            'severityEn' => 'string',
            'filePath' => 'string',
            'line' => 'string',
            'assignee' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'proposer' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'position' => '\HuaweiCloud\SDK\CodeHub\V4\Model\PositionDto',
            'resolved' => 'bool',
            'isOutdated' => 'bool',
            'moderationResult' => 'bool',
            'moderationTime' => 'int',
            'moderationStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 评论id(主评论和回复不共用)。
    * type  **参数解释：** 评论类型。 **取值范围：** - DiscussionNote: 需要解决的关联代码行的评论。 - DiffNote: 一般。
    * body  **参数解释：** 评论内容。
    * attachment  **参数解释：** 附件(弃用)。
    * author  author
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * system  **参数解释：** 是否为系统添加的。
    * noteableId  **参数解释：** 合并请求id或issue id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * resolvable  **参数解释：** 是否需要解决。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * noteableIid  **参数解释：** 合并请求iid或issue iid。
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repository  **参数解释：** 仓库路径。
    * diffFile  **参数解释：** 关联代码行所在文件的文件名。
    * diff  **参数解释：** 关联代码行的代码片段。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文名。
    * reviewCategoriesEn  **参数解释：** 合并请求版本信息。
    * reviewModules  **参数解释：** 合并请求版本信息。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * filePath  **参数解释：** 文件路径(弃用)。
    * line  **参数解释：** 行号(弃用)。
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  **参数解释：** 是否已解决。
    * isOutdated  **参数解释：** 是否已过期。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'type' => null,
        'body' => null,
        'attachment' => null,
        'author' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'system' => null,
        'noteableId' => 'int32',
        'noteableType' => null,
        'commitId' => null,
        'resolvable' => null,
        'isReply' => null,
        'resolvedBy' => null,
        'noteableIid' => 'int32',
        'discussionId' => null,
        'repository' => null,
        'diffFile' => null,
        'diff' => null,
        'archived' => null,
        'reviewCategories' => null,
        'reviewCategoriesCn' => null,
        'reviewCategoriesEn' => null,
        'reviewModules' => null,
        'severity' => null,
        'severityCn' => null,
        'severityEn' => null,
        'filePath' => null,
        'line' => null,
        'assignee' => null,
        'proposer' => null,
        'position' => null,
        'resolved' => null,
        'isOutdated' => null,
        'moderationResult' => null,
        'moderationTime' => 'int64',
        'moderationStatus' => 'int32'
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
    * id  **参数解释：** 评论id(主评论和回复不共用)。
    * type  **参数解释：** 评论类型。 **取值范围：** - DiscussionNote: 需要解决的关联代码行的评论。 - DiffNote: 一般。
    * body  **参数解释：** 评论内容。
    * attachment  **参数解释：** 附件(弃用)。
    * author  author
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * system  **参数解释：** 是否为系统添加的。
    * noteableId  **参数解释：** 合并请求id或issue id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * resolvable  **参数解释：** 是否需要解决。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * noteableIid  **参数解释：** 合并请求iid或issue iid。
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repository  **参数解释：** 仓库路径。
    * diffFile  **参数解释：** 关联代码行所在文件的文件名。
    * diff  **参数解释：** 关联代码行的代码片段。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文名。
    * reviewCategoriesEn  **参数解释：** 合并请求版本信息。
    * reviewModules  **参数解释：** 合并请求版本信息。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * filePath  **参数解释：** 文件路径(弃用)。
    * line  **参数解释：** 行号(弃用)。
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  **参数解释：** 是否已解决。
    * isOutdated  **参数解释：** 是否已过期。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'body' => 'body',
            'attachment' => 'attachment',
            'author' => 'author',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'system' => 'system',
            'noteableId' => 'noteable_id',
            'noteableType' => 'noteable_type',
            'commitId' => 'commit_id',
            'resolvable' => 'resolvable',
            'isReply' => 'is_reply',
            'resolvedBy' => 'resolved_by',
            'noteableIid' => 'noteable_iid',
            'discussionId' => 'discussion_id',
            'repository' => 'repository',
            'diffFile' => 'diff_file',
            'diff' => 'diff',
            'archived' => 'archived',
            'reviewCategories' => 'review_categories',
            'reviewCategoriesCn' => 'review_categories_cn',
            'reviewCategoriesEn' => 'review_categories_en',
            'reviewModules' => 'review_modules',
            'severity' => 'severity',
            'severityCn' => 'severity_cn',
            'severityEn' => 'severity_en',
            'filePath' => 'file_path',
            'line' => 'line',
            'assignee' => 'assignee',
            'proposer' => 'proposer',
            'position' => 'position',
            'resolved' => 'resolved',
            'isOutdated' => 'is_outdated',
            'moderationResult' => 'moderation_result',
            'moderationTime' => 'moderation_time',
            'moderationStatus' => 'moderation_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 评论id(主评论和回复不共用)。
    * type  **参数解释：** 评论类型。 **取值范围：** - DiscussionNote: 需要解决的关联代码行的评论。 - DiffNote: 一般。
    * body  **参数解释：** 评论内容。
    * attachment  **参数解释：** 附件(弃用)。
    * author  author
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * system  **参数解释：** 是否为系统添加的。
    * noteableId  **参数解释：** 合并请求id或issue id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * resolvable  **参数解释：** 是否需要解决。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * noteableIid  **参数解释：** 合并请求iid或issue iid。
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repository  **参数解释：** 仓库路径。
    * diffFile  **参数解释：** 关联代码行所在文件的文件名。
    * diff  **参数解释：** 关联代码行的代码片段。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文名。
    * reviewCategoriesEn  **参数解释：** 合并请求版本信息。
    * reviewModules  **参数解释：** 合并请求版本信息。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * filePath  **参数解释：** 文件路径(弃用)。
    * line  **参数解释：** 行号(弃用)。
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  **参数解释：** 是否已解决。
    * isOutdated  **参数解释：** 是否已过期。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'body' => 'setBody',
            'attachment' => 'setAttachment',
            'author' => 'setAuthor',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'system' => 'setSystem',
            'noteableId' => 'setNoteableId',
            'noteableType' => 'setNoteableType',
            'commitId' => 'setCommitId',
            'resolvable' => 'setResolvable',
            'isReply' => 'setIsReply',
            'resolvedBy' => 'setResolvedBy',
            'noteableIid' => 'setNoteableIid',
            'discussionId' => 'setDiscussionId',
            'repository' => 'setRepository',
            'diffFile' => 'setDiffFile',
            'diff' => 'setDiff',
            'archived' => 'setArchived',
            'reviewCategories' => 'setReviewCategories',
            'reviewCategoriesCn' => 'setReviewCategoriesCn',
            'reviewCategoriesEn' => 'setReviewCategoriesEn',
            'reviewModules' => 'setReviewModules',
            'severity' => 'setSeverity',
            'severityCn' => 'setSeverityCn',
            'severityEn' => 'setSeverityEn',
            'filePath' => 'setFilePath',
            'line' => 'setLine',
            'assignee' => 'setAssignee',
            'proposer' => 'setProposer',
            'position' => 'setPosition',
            'resolved' => 'setResolved',
            'isOutdated' => 'setIsOutdated',
            'moderationResult' => 'setModerationResult',
            'moderationTime' => 'setModerationTime',
            'moderationStatus' => 'setModerationStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 评论id(主评论和回复不共用)。
    * type  **参数解释：** 评论类型。 **取值范围：** - DiscussionNote: 需要解决的关联代码行的评论。 - DiffNote: 一般。
    * body  **参数解释：** 评论内容。
    * attachment  **参数解释：** 附件(弃用)。
    * author  author
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * system  **参数解释：** 是否为系统添加的。
    * noteableId  **参数解释：** 合并请求id或issue id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * resolvable  **参数解释：** 是否需要解决。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * noteableIid  **参数解释：** 合并请求iid或issue iid。
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repository  **参数解释：** 仓库路径。
    * diffFile  **参数解释：** 关联代码行所在文件的文件名。
    * diff  **参数解释：** 关联代码行的代码片段。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文名。
    * reviewCategoriesEn  **参数解释：** 合并请求版本信息。
    * reviewModules  **参数解释：** 合并请求版本信息。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * filePath  **参数解释：** 文件路径(弃用)。
    * line  **参数解释：** 行号(弃用)。
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  **参数解释：** 是否已解决。
    * isOutdated  **参数解释：** 是否已过期。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'body' => 'getBody',
            'attachment' => 'getAttachment',
            'author' => 'getAuthor',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'system' => 'getSystem',
            'noteableId' => 'getNoteableId',
            'noteableType' => 'getNoteableType',
            'commitId' => 'getCommitId',
            'resolvable' => 'getResolvable',
            'isReply' => 'getIsReply',
            'resolvedBy' => 'getResolvedBy',
            'noteableIid' => 'getNoteableIid',
            'discussionId' => 'getDiscussionId',
            'repository' => 'getRepository',
            'diffFile' => 'getDiffFile',
            'diff' => 'getDiff',
            'archived' => 'getArchived',
            'reviewCategories' => 'getReviewCategories',
            'reviewCategoriesCn' => 'getReviewCategoriesCn',
            'reviewCategoriesEn' => 'getReviewCategoriesEn',
            'reviewModules' => 'getReviewModules',
            'severity' => 'getSeverity',
            'severityCn' => 'getSeverityCn',
            'severityEn' => 'getSeverityEn',
            'filePath' => 'getFilePath',
            'line' => 'getLine',
            'assignee' => 'getAssignee',
            'proposer' => 'getProposer',
            'position' => 'getPosition',
            'resolved' => 'getResolved',
            'isOutdated' => 'getIsOutdated',
            'moderationResult' => 'getModerationResult',
            'moderationTime' => 'getModerationTime',
            'moderationStatus' => 'getModerationStatus'
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
    const NOTEABLE_TYPE_MERGE_REQUEST = 'MergeRequest';
    const NOTEABLE_TYPE_COMMIT = 'Commit';
    const SEVERITY_SUGGESTION = 'suggestion';
    const SEVERITY_MINOR = 'minor';
    const SEVERITY_MAJOR = 'major';
    const SEVERITY_FATAL = 'fatal';
    const SEVERITY_EN_SUGGESTION = 'Suggestion';
    const SEVERITY_EN_MINOR = 'Minor';
    const SEVERITY_EN_MAJOR = 'Major';
    const SEVERITY_EN_FATAL = 'Fatal';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoteableTypeAllowableValues()
    {
        return [
            self::NOTEABLE_TYPE_MERGE_REQUEST,
            self::NOTEABLE_TYPE_COMMIT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_SUGGESTION,
            self::SEVERITY_MINOR,
            self::SEVERITY_MAJOR,
            self::SEVERITY_FATAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityEnAllowableValues()
    {
        return [
            self::SEVERITY_EN_SUGGESTION,
            self::SEVERITY_EN_MINOR,
            self::SEVERITY_EN_MAJOR,
            self::SEVERITY_EN_FATAL,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['noteableId'] = isset($data['noteableId']) ? $data['noteableId'] : null;
        $this->container['noteableType'] = isset($data['noteableType']) ? $data['noteableType'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['resolvable'] = isset($data['resolvable']) ? $data['resolvable'] : null;
        $this->container['isReply'] = isset($data['isReply']) ? $data['isReply'] : null;
        $this->container['resolvedBy'] = isset($data['resolvedBy']) ? $data['resolvedBy'] : null;
        $this->container['noteableIid'] = isset($data['noteableIid']) ? $data['noteableIid'] : null;
        $this->container['discussionId'] = isset($data['discussionId']) ? $data['discussionId'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['diffFile'] = isset($data['diffFile']) ? $data['diffFile'] : null;
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['reviewCategories'] = isset($data['reviewCategories']) ? $data['reviewCategories'] : null;
        $this->container['reviewCategoriesCn'] = isset($data['reviewCategoriesCn']) ? $data['reviewCategoriesCn'] : null;
        $this->container['reviewCategoriesEn'] = isset($data['reviewCategoriesEn']) ? $data['reviewCategoriesEn'] : null;
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['severityCn'] = isset($data['severityCn']) ? $data['severityCn'] : null;
        $this->container['severityEn'] = isset($data['severityEn']) ? $data['severityEn'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['proposer'] = isset($data['proposer']) ? $data['proposer'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
        $this->container['isOutdated'] = isset($data['isOutdated']) ? $data['isOutdated'] : null;
        $this->container['moderationResult'] = isset($data['moderationResult']) ? $data['moderationResult'] : null;
        $this->container['moderationTime'] = isset($data['moderationTime']) ? $data['moderationTime'] : null;
        $this->container['moderationStatus'] = isset($data['moderationStatus']) ? $data['moderationStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['body']) && (mb_strlen($this->container['body']) > 8000)) {
                $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 8000.";
            }
            if (!is_null($this->container['body']) && (mb_strlen($this->container['body']) < 1)) {
                $invalidProperties[] = "invalid value for 'body', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) > 100000)) {
                $invalidProperties[] = "invalid value for 'attachment', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachment', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['noteableId']) && ($this->container['noteableId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'noteableId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['noteableId']) && ($this->container['noteableId'] < 1)) {
                $invalidProperties[] = "invalid value for 'noteableId', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getNoteableTypeAllowableValues();
                if (!is_null($this->container['noteableType']) && !in_array($this->container['noteableType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'noteableType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['commitId']) && (mb_strlen($this->container['commitId']) > 40)) {
                $invalidProperties[] = "invalid value for 'commitId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['commitId']) && (mb_strlen($this->container['commitId']) < 40)) {
                $invalidProperties[] = "invalid value for 'commitId', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['noteableIid']) && ($this->container['noteableIid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'noteableIid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['noteableIid']) && ($this->container['noteableIid'] < 1)) {
                $invalidProperties[] = "invalid value for 'noteableIid', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['discussionId']) && (mb_strlen($this->container['discussionId']) > 40)) {
                $invalidProperties[] = "invalid value for 'discussionId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['discussionId']) && (mb_strlen($this->container['discussionId']) < 40)) {
                $invalidProperties[] = "invalid value for 'discussionId', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['repository']) && (mb_strlen($this->container['repository']) > 100000)) {
                $invalidProperties[] = "invalid value for 'repository', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['repository']) && (mb_strlen($this->container['repository']) < 1)) {
                $invalidProperties[] = "invalid value for 'repository', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['diffFile']) && (mb_strlen($this->container['diffFile']) > 100000)) {
                $invalidProperties[] = "invalid value for 'diffFile', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['diffFile']) && (mb_strlen($this->container['diffFile']) < 1)) {
                $invalidProperties[] = "invalid value for 'diffFile', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['diff']) && (mb_strlen($this->container['diff']) > 100000)) {
                $invalidProperties[] = "invalid value for 'diff', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['diff']) && (mb_strlen($this->container['diff']) < 1)) {
                $invalidProperties[] = "invalid value for 'diff', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewCategories']) && (mb_strlen($this->container['reviewCategories']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewCategories', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewCategories']) && (mb_strlen($this->container['reviewCategories']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewCategories', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewCategoriesCn']) && (mb_strlen($this->container['reviewCategoriesCn']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewCategoriesCn', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewCategoriesCn']) && (mb_strlen($this->container['reviewCategoriesCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewCategoriesCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewCategoriesEn']) && (mb_strlen($this->container['reviewCategoriesEn']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewCategoriesEn', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewCategoriesEn']) && (mb_strlen($this->container['reviewCategoriesEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewCategoriesEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewModules']) && (mb_strlen($this->container['reviewModules']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewModules', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewModules']) && (mb_strlen($this->container['reviewModules']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewModules', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSeverityEnAllowableValues();
                if (!is_null($this->container['severityEn']) && !in_array($this->container['severityEn'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severityEn', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['line']) && (mb_strlen($this->container['line']) > 100000)) {
                $invalidProperties[] = "invalid value for 'line', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['line']) && (mb_strlen($this->container['line']) < 1)) {
                $invalidProperties[] = "invalid value for 'line', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  **参数解释：** 评论id(主评论和回复不共用)。
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
    * @param int|null $id **参数解释：** 评论id(主评论和回复不共用)。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 评论类型。 **取值范围：** - DiscussionNote: 需要解决的关联代码行的评论。 - DiffNote: 一般。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 评论类型。 **取值范围：** - DiscussionNote: 需要解决的关联代码行的评论。 - DiffNote: 一般。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets body
    *  **参数解释：** 评论内容。
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body **参数解释：** 评论内容。
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets attachment
    *  **参数解释：** 附件(弃用)。
    *
    * @return string|null
    */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
    * Sets attachment
    *
    * @param string|null $attachment **参数解释：** 附件(弃用)。
    *
    * @return $this
    */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets system
    *  **参数解释：** 是否为系统添加的。
    *
    * @return bool|null
    */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
    * Sets system
    *
    * @param bool|null $system **参数解释：** 是否为系统添加的。
    *
    * @return $this
    */
    public function setSystem($system)
    {
        $this->container['system'] = $system;
        return $this;
    }

    /**
    * Gets noteableId
    *  **参数解释：** 合并请求id或issue id。
    *
    * @return int|null
    */
    public function getNoteableId()
    {
        return $this->container['noteableId'];
    }

    /**
    * Sets noteableId
    *
    * @param int|null $noteableId **参数解释：** 合并请求id或issue id。
    *
    * @return $this
    */
    public function setNoteableId($noteableId)
    {
        $this->container['noteableId'] = $noteableId;
        return $this;
    }

    /**
    * Gets noteableType
    *  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    *
    * @return string|null
    */
    public function getNoteableType()
    {
        return $this->container['noteableType'];
    }

    /**
    * Sets noteableType
    *
    * @param string|null $noteableType **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    *
    * @return $this
    */
    public function setNoteableType($noteableType)
    {
        $this->container['noteableType'] = $noteableType;
        return $this;
    }

    /**
    * Gets commitId
    *  **参数解释：** 提交记录id。
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId **参数解释：** 提交记录id。
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets resolvable
    *  **参数解释：** 是否需要解决。
    *
    * @return bool|null
    */
    public function getResolvable()
    {
        return $this->container['resolvable'];
    }

    /**
    * Sets resolvable
    *
    * @param bool|null $resolvable **参数解释：** 是否需要解决。
    *
    * @return $this
    */
    public function setResolvable($resolvable)
    {
        $this->container['resolvable'] = $resolvable;
        return $this;
    }

    /**
    * Gets isReply
    *  **参数解释：** 是否为回复。
    *
    * @return bool|null
    */
    public function getIsReply()
    {
        return $this->container['isReply'];
    }

    /**
    * Sets isReply
    *
    * @param bool|null $isReply **参数解释：** 是否为回复。
    *
    * @return $this
    */
    public function setIsReply($isReply)
    {
        $this->container['isReply'] = $isReply;
        return $this;
    }

    /**
    * Gets resolvedBy
    *  resolvedBy
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getResolvedBy()
    {
        return $this->container['resolvedBy'];
    }

    /**
    * Sets resolvedBy
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $resolvedBy resolvedBy
    *
    * @return $this
    */
    public function setResolvedBy($resolvedBy)
    {
        $this->container['resolvedBy'] = $resolvedBy;
        return $this;
    }

    /**
    * Gets noteableIid
    *  **参数解释：** 合并请求iid或issue iid。
    *
    * @return int|null
    */
    public function getNoteableIid()
    {
        return $this->container['noteableIid'];
    }

    /**
    * Sets noteableIid
    *
    * @param int|null $noteableIid **参数解释：** 合并请求iid或issue iid。
    *
    * @return $this
    */
    public function setNoteableIid($noteableIid)
    {
        $this->container['noteableIid'] = $noteableIid;
        return $this;
    }

    /**
    * Gets discussionId
    *  **参数解释：** 检视意见id(主评论和回复共用)。
    *
    * @return string|null
    */
    public function getDiscussionId()
    {
        return $this->container['discussionId'];
    }

    /**
    * Sets discussionId
    *
    * @param string|null $discussionId **参数解释：** 检视意见id(主评论和回复共用)。
    *
    * @return $this
    */
    public function setDiscussionId($discussionId)
    {
        $this->container['discussionId'] = $discussionId;
        return $this;
    }

    /**
    * Gets repository
    *  **参数解释：** 仓库路径。
    *
    * @return string|null
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param string|null $repository **参数解释：** 仓库路径。
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
        return $this;
    }

    /**
    * Gets diffFile
    *  **参数解释：** 关联代码行所在文件的文件名。
    *
    * @return string|null
    */
    public function getDiffFile()
    {
        return $this->container['diffFile'];
    }

    /**
    * Sets diffFile
    *
    * @param string|null $diffFile **参数解释：** 关联代码行所在文件的文件名。
    *
    * @return $this
    */
    public function setDiffFile($diffFile)
    {
        $this->container['diffFile'] = $diffFile;
        return $this;
    }

    /**
    * Gets diff
    *  **参数解释：** 关联代码行的代码片段。
    *
    * @return string|null
    */
    public function getDiff()
    {
        return $this->container['diff'];
    }

    /**
    * Sets diff
    *
    * @param string|null $diff **参数解释：** 关联代码行的代码片段。
    *
    * @return $this
    */
    public function setDiff($diff)
    {
        $this->container['diff'] = $diff;
        return $this;
    }

    /**
    * Gets archived
    *  **参数解释：** 是否已归档。
    *
    * @return bool|null
    */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
    * Sets archived
    *
    * @param bool|null $archived **参数解释：** 是否已归档。
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets reviewCategories
    *  **参数解释：** 意见分类key。
    *
    * @return string|null
    */
    public function getReviewCategories()
    {
        return $this->container['reviewCategories'];
    }

    /**
    * Sets reviewCategories
    *
    * @param string|null $reviewCategories **参数解释：** 意见分类key。
    *
    * @return $this
    */
    public function setReviewCategories($reviewCategories)
    {
        $this->container['reviewCategories'] = $reviewCategories;
        return $this;
    }

    /**
    * Gets reviewCategoriesCn
    *  **参数解释：** 意见分类中文名。
    *
    * @return string|null
    */
    public function getReviewCategoriesCn()
    {
        return $this->container['reviewCategoriesCn'];
    }

    /**
    * Sets reviewCategoriesCn
    *
    * @param string|null $reviewCategoriesCn **参数解释：** 意见分类中文名。
    *
    * @return $this
    */
    public function setReviewCategoriesCn($reviewCategoriesCn)
    {
        $this->container['reviewCategoriesCn'] = $reviewCategoriesCn;
        return $this;
    }

    /**
    * Gets reviewCategoriesEn
    *  **参数解释：** 合并请求版本信息。
    *
    * @return string|null
    */
    public function getReviewCategoriesEn()
    {
        return $this->container['reviewCategoriesEn'];
    }

    /**
    * Sets reviewCategoriesEn
    *
    * @param string|null $reviewCategoriesEn **参数解释：** 合并请求版本信息。
    *
    * @return $this
    */
    public function setReviewCategoriesEn($reviewCategoriesEn)
    {
        $this->container['reviewCategoriesEn'] = $reviewCategoriesEn;
        return $this;
    }

    /**
    * Gets reviewModules
    *  **参数解释：** 合并请求版本信息。
    *
    * @return string|null
    */
    public function getReviewModules()
    {
        return $this->container['reviewModules'];
    }

    /**
    * Sets reviewModules
    *
    * @param string|null $reviewModules **参数解释：** 合并请求版本信息。
    *
    * @return $this
    */
    public function setReviewModules($reviewModules)
    {
        $this->container['reviewModules'] = $reviewModules;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释：** 严重程度key。
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释：** 严重程度key。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets severityCn
    *  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    *
    * @return string|null
    */
    public function getSeverityCn()
    {
        return $this->container['severityCn'];
    }

    /**
    * Sets severityCn
    *
    * @param string|null $severityCn **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    *
    * @return $this
    */
    public function setSeverityCn($severityCn)
    {
        $this->container['severityCn'] = $severityCn;
        return $this;
    }

    /**
    * Gets severityEn
    *  **参数解释：** 严重程度英文。
    *
    * @return string|null
    */
    public function getSeverityEn()
    {
        return $this->container['severityEn'];
    }

    /**
    * Sets severityEn
    *
    * @param string|null $severityEn **参数解释：** 严重程度英文。
    *
    * @return $this
    */
    public function setSeverityEn($severityEn)
    {
        $this->container['severityEn'] = $severityEn;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释：** 文件路径(弃用)。
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释：** 文件路径(弃用)。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets line
    *  **参数解释：** 行号(弃用)。
    *
    * @return string|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string|null $line **参数解释：** 行号(弃用)。
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets assignee
    *  assignee
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets proposer
    *  proposer
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getProposer()
    {
        return $this->container['proposer'];
    }

    /**
    * Sets proposer
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $proposer proposer
    *
    * @return $this
    */
    public function setProposer($proposer)
    {
        $this->container['proposer'] = $proposer;
        return $this;
    }

    /**
    * Gets position
    *  position
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\PositionDto|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\PositionDto|null $position position
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets resolved
    *  **参数解释：** 是否已解决。
    *
    * @return bool|null
    */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
    * Sets resolved
    *
    * @param bool|null $resolved **参数解释：** 是否已解决。
    *
    * @return $this
    */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;
        return $this;
    }

    /**
    * Gets isOutdated
    *  **参数解释：** 是否已过期。
    *
    * @return bool|null
    */
    public function getIsOutdated()
    {
        return $this->container['isOutdated'];
    }

    /**
    * Sets isOutdated
    *
    * @param bool|null $isOutdated **参数解释：** 是否已过期。
    *
    * @return $this
    */
    public function setIsOutdated($isOutdated)
    {
        $this->container['isOutdated'] = $isOutdated;
        return $this;
    }

    /**
    * Gets moderationResult
    *  **参数解释：** 内容审核结果。
    *
    * @return bool|null
    */
    public function getModerationResult()
    {
        return $this->container['moderationResult'];
    }

    /**
    * Sets moderationResult
    *
    * @param bool|null $moderationResult **参数解释：** 内容审核结果。
    *
    * @return $this
    */
    public function setModerationResult($moderationResult)
    {
        $this->container['moderationResult'] = $moderationResult;
        return $this;
    }

    /**
    * Gets moderationTime
    *  **参数解释：** 内容审核时间。
    *
    * @return int|null
    */
    public function getModerationTime()
    {
        return $this->container['moderationTime'];
    }

    /**
    * Sets moderationTime
    *
    * @param int|null $moderationTime **参数解释：** 内容审核时间。
    *
    * @return $this
    */
    public function setModerationTime($moderationTime)
    {
        $this->container['moderationTime'] = $moderationTime;
        return $this;
    }

    /**
    * Gets moderationStatus
    *  **参数解释：** 内容审核状态。
    *
    * @return int|null
    */
    public function getModerationStatus()
    {
        return $this->container['moderationStatus'];
    }

    /**
    * Sets moderationStatus
    *
    * @param int|null $moderationStatus **参数解释：** 内容审核状态。
    *
    * @return $this
    */
    public function setModerationStatus($moderationStatus)
    {
        $this->container['moderationStatus'] = $moderationStatus;
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

