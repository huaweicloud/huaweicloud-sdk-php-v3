<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommitMergeRequestDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommitMergeRequestDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 合并请求的ID。
    * iid  **参数解释：** 合并请求的序号。
    * title  **参数解释：** 合并请求的标题。
    * description  **参数解释：** 合并请求的详细描述。
    * state  **参数解释：** 合并请求的状态。
    * createdAt  **参数解释：** 合并请求创建的时间。
    * updatedAt  **参数解释：** 合并请求最后一次更新的时间。
    * mergedBy  mergedBy
    * mergedAt  **参数解释：** 合并请求被合并的时间。
    * closedBy  closedBy
    * closedAt  **参数解释：** 合并请求被关闭的时间。
    * targetBranch  **参数解释：** 合并请求的目标分支名称。
    * sourceBranch  **参数解释：** 合并请求的源分支名称。
    * userNotesCount  **参数解释：** 合并请求中检视意见的数量。
    * upvotes  **参数解释：** 合并请求的正向评分数量。
    * downvotes  **参数解释：** 合并请求的负向评分数量。
    * author  author
    * assignee  **参数解释：** 合并请求的可合并人列表。
    * sourceRepositoryId  **参数解释：** 源仓库的唯一标识符。
    * targetRepositoryId  **参数解释：** 目标仓库的唯一标识符。
    * labels  **参数解释：** 合并请求关联的标签列表。
    * workInProgress  **参数解释：** 表示合并请求是否处于“工作进行中”状态。
    * milestone  milestone
    * mergeWhenPipelineSucceeds  **参数解释：** 表示是否在CI/CD管道成功时自动合并请求。
    * mergeStatus  **参数解释：** 合并请求的合并状态。
    * sha  **参数解释：** 合并请求的提交哈希值。
    * mergeCommitSha  **参数解释：** 合并提交的哈希值。
    * discussionLocked  **参数解释：** 表示合并请求的讨论是否被锁定。
    * forceRemoveSourceBranch  **参数解释：** 表示是否强制删除源分支。
    * shouldRemoveSourceBranch  **参数解释：** 表示是否应该删除源分支。
    * allowCollaboration  **参数解释：** 表示是否允许协作者参与。
    * allowMaintainerToPush  **参数解释：** 表示是否允许维护者推送代码。
    * webUrl  **参数解释：** 合并请求的网页URL链接。
    * timeStats  timeStats
    * squash  **参数解释：** 表示是否在合并时将提交压缩为一个。
    * mergeRequestType  **参数解释：** 合并请求的类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'iid' => 'int',
            'title' => 'string',
            'description' => 'string',
            'state' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'mergedBy' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'mergedAt' => 'string',
            'closedBy' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'closedAt' => 'string',
            'targetBranch' => 'string',
            'sourceBranch' => 'string',
            'userNotesCount' => 'int',
            'upvotes' => 'int',
            'downvotes' => 'int',
            'author' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'assignee' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]',
            'sourceRepositoryId' => 'int',
            'targetRepositoryId' => 'int',
            'labels' => 'string[]',
            'workInProgress' => 'bool',
            'milestone' => '\HuaweiCloud\SDK\CodeHub\V4\Model\MilestoneBasicDto',
            'mergeWhenPipelineSucceeds' => 'bool',
            'mergeStatus' => 'string',
            'sha' => 'string',
            'mergeCommitSha' => 'string',
            'discussionLocked' => 'bool',
            'forceRemoveSourceBranch' => 'bool',
            'shouldRemoveSourceBranch' => 'bool',
            'allowCollaboration' => 'bool',
            'allowMaintainerToPush' => 'bool',
            'webUrl' => 'string',
            'timeStats' => '\HuaweiCloud\SDK\CodeHub\V4\Model\IssuableTimeStatsDto',
            'squash' => 'bool',
            'mergeRequestType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 合并请求的ID。
    * iid  **参数解释：** 合并请求的序号。
    * title  **参数解释：** 合并请求的标题。
    * description  **参数解释：** 合并请求的详细描述。
    * state  **参数解释：** 合并请求的状态。
    * createdAt  **参数解释：** 合并请求创建的时间。
    * updatedAt  **参数解释：** 合并请求最后一次更新的时间。
    * mergedBy  mergedBy
    * mergedAt  **参数解释：** 合并请求被合并的时间。
    * closedBy  closedBy
    * closedAt  **参数解释：** 合并请求被关闭的时间。
    * targetBranch  **参数解释：** 合并请求的目标分支名称。
    * sourceBranch  **参数解释：** 合并请求的源分支名称。
    * userNotesCount  **参数解释：** 合并请求中检视意见的数量。
    * upvotes  **参数解释：** 合并请求的正向评分数量。
    * downvotes  **参数解释：** 合并请求的负向评分数量。
    * author  author
    * assignee  **参数解释：** 合并请求的可合并人列表。
    * sourceRepositoryId  **参数解释：** 源仓库的唯一标识符。
    * targetRepositoryId  **参数解释：** 目标仓库的唯一标识符。
    * labels  **参数解释：** 合并请求关联的标签列表。
    * workInProgress  **参数解释：** 表示合并请求是否处于“工作进行中”状态。
    * milestone  milestone
    * mergeWhenPipelineSucceeds  **参数解释：** 表示是否在CI/CD管道成功时自动合并请求。
    * mergeStatus  **参数解释：** 合并请求的合并状态。
    * sha  **参数解释：** 合并请求的提交哈希值。
    * mergeCommitSha  **参数解释：** 合并提交的哈希值。
    * discussionLocked  **参数解释：** 表示合并请求的讨论是否被锁定。
    * forceRemoveSourceBranch  **参数解释：** 表示是否强制删除源分支。
    * shouldRemoveSourceBranch  **参数解释：** 表示是否应该删除源分支。
    * allowCollaboration  **参数解释：** 表示是否允许协作者参与。
    * allowMaintainerToPush  **参数解释：** 表示是否允许维护者推送代码。
    * webUrl  **参数解释：** 合并请求的网页URL链接。
    * timeStats  timeStats
    * squash  **参数解释：** 表示是否在合并时将提交压缩为一个。
    * mergeRequestType  **参数解释：** 合并请求的类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'iid' => null,
        'title' => null,
        'description' => null,
        'state' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'mergedBy' => null,
        'mergedAt' => null,
        'closedBy' => null,
        'closedAt' => null,
        'targetBranch' => null,
        'sourceBranch' => null,
        'userNotesCount' => null,
        'upvotes' => null,
        'downvotes' => null,
        'author' => null,
        'assignee' => null,
        'sourceRepositoryId' => null,
        'targetRepositoryId' => null,
        'labels' => null,
        'workInProgress' => null,
        'milestone' => null,
        'mergeWhenPipelineSucceeds' => null,
        'mergeStatus' => null,
        'sha' => null,
        'mergeCommitSha' => null,
        'discussionLocked' => null,
        'forceRemoveSourceBranch' => null,
        'shouldRemoveSourceBranch' => null,
        'allowCollaboration' => null,
        'allowMaintainerToPush' => null,
        'webUrl' => null,
        'timeStats' => null,
        'squash' => null,
        'mergeRequestType' => null
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
    * id  **参数解释：** 合并请求的ID。
    * iid  **参数解释：** 合并请求的序号。
    * title  **参数解释：** 合并请求的标题。
    * description  **参数解释：** 合并请求的详细描述。
    * state  **参数解释：** 合并请求的状态。
    * createdAt  **参数解释：** 合并请求创建的时间。
    * updatedAt  **参数解释：** 合并请求最后一次更新的时间。
    * mergedBy  mergedBy
    * mergedAt  **参数解释：** 合并请求被合并的时间。
    * closedBy  closedBy
    * closedAt  **参数解释：** 合并请求被关闭的时间。
    * targetBranch  **参数解释：** 合并请求的目标分支名称。
    * sourceBranch  **参数解释：** 合并请求的源分支名称。
    * userNotesCount  **参数解释：** 合并请求中检视意见的数量。
    * upvotes  **参数解释：** 合并请求的正向评分数量。
    * downvotes  **参数解释：** 合并请求的负向评分数量。
    * author  author
    * assignee  **参数解释：** 合并请求的可合并人列表。
    * sourceRepositoryId  **参数解释：** 源仓库的唯一标识符。
    * targetRepositoryId  **参数解释：** 目标仓库的唯一标识符。
    * labels  **参数解释：** 合并请求关联的标签列表。
    * workInProgress  **参数解释：** 表示合并请求是否处于“工作进行中”状态。
    * milestone  milestone
    * mergeWhenPipelineSucceeds  **参数解释：** 表示是否在CI/CD管道成功时自动合并请求。
    * mergeStatus  **参数解释：** 合并请求的合并状态。
    * sha  **参数解释：** 合并请求的提交哈希值。
    * mergeCommitSha  **参数解释：** 合并提交的哈希值。
    * discussionLocked  **参数解释：** 表示合并请求的讨论是否被锁定。
    * forceRemoveSourceBranch  **参数解释：** 表示是否强制删除源分支。
    * shouldRemoveSourceBranch  **参数解释：** 表示是否应该删除源分支。
    * allowCollaboration  **参数解释：** 表示是否允许协作者参与。
    * allowMaintainerToPush  **参数解释：** 表示是否允许维护者推送代码。
    * webUrl  **参数解释：** 合并请求的网页URL链接。
    * timeStats  timeStats
    * squash  **参数解释：** 表示是否在合并时将提交压缩为一个。
    * mergeRequestType  **参数解释：** 合并请求的类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'iid' => 'iid',
            'title' => 'title',
            'description' => 'description',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'mergedBy' => 'merged_by',
            'mergedAt' => 'merged_at',
            'closedBy' => 'closed_by',
            'closedAt' => 'closed_at',
            'targetBranch' => 'target_branch',
            'sourceBranch' => 'source_branch',
            'userNotesCount' => 'user_notes_count',
            'upvotes' => 'upvotes',
            'downvotes' => 'downvotes',
            'author' => 'author',
            'assignee' => 'assignee',
            'sourceRepositoryId' => 'source_repository_id',
            'targetRepositoryId' => 'target_repository_id',
            'labels' => 'labels',
            'workInProgress' => 'work_in_progress',
            'milestone' => 'milestone',
            'mergeWhenPipelineSucceeds' => 'merge_when_pipeline_succeeds',
            'mergeStatus' => 'merge_status',
            'sha' => 'sha',
            'mergeCommitSha' => 'merge_commit_sha',
            'discussionLocked' => 'discussion_locked',
            'forceRemoveSourceBranch' => 'force_remove_source_branch',
            'shouldRemoveSourceBranch' => 'should_remove_source_branch',
            'allowCollaboration' => 'allow_collaboration',
            'allowMaintainerToPush' => 'allow_maintainer_to_push',
            'webUrl' => 'web_url',
            'timeStats' => 'time_stats',
            'squash' => 'squash',
            'mergeRequestType' => 'merge_request_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 合并请求的ID。
    * iid  **参数解释：** 合并请求的序号。
    * title  **参数解释：** 合并请求的标题。
    * description  **参数解释：** 合并请求的详细描述。
    * state  **参数解释：** 合并请求的状态。
    * createdAt  **参数解释：** 合并请求创建的时间。
    * updatedAt  **参数解释：** 合并请求最后一次更新的时间。
    * mergedBy  mergedBy
    * mergedAt  **参数解释：** 合并请求被合并的时间。
    * closedBy  closedBy
    * closedAt  **参数解释：** 合并请求被关闭的时间。
    * targetBranch  **参数解释：** 合并请求的目标分支名称。
    * sourceBranch  **参数解释：** 合并请求的源分支名称。
    * userNotesCount  **参数解释：** 合并请求中检视意见的数量。
    * upvotes  **参数解释：** 合并请求的正向评分数量。
    * downvotes  **参数解释：** 合并请求的负向评分数量。
    * author  author
    * assignee  **参数解释：** 合并请求的可合并人列表。
    * sourceRepositoryId  **参数解释：** 源仓库的唯一标识符。
    * targetRepositoryId  **参数解释：** 目标仓库的唯一标识符。
    * labels  **参数解释：** 合并请求关联的标签列表。
    * workInProgress  **参数解释：** 表示合并请求是否处于“工作进行中”状态。
    * milestone  milestone
    * mergeWhenPipelineSucceeds  **参数解释：** 表示是否在CI/CD管道成功时自动合并请求。
    * mergeStatus  **参数解释：** 合并请求的合并状态。
    * sha  **参数解释：** 合并请求的提交哈希值。
    * mergeCommitSha  **参数解释：** 合并提交的哈希值。
    * discussionLocked  **参数解释：** 表示合并请求的讨论是否被锁定。
    * forceRemoveSourceBranch  **参数解释：** 表示是否强制删除源分支。
    * shouldRemoveSourceBranch  **参数解释：** 表示是否应该删除源分支。
    * allowCollaboration  **参数解释：** 表示是否允许协作者参与。
    * allowMaintainerToPush  **参数解释：** 表示是否允许维护者推送代码。
    * webUrl  **参数解释：** 合并请求的网页URL链接。
    * timeStats  timeStats
    * squash  **参数解释：** 表示是否在合并时将提交压缩为一个。
    * mergeRequestType  **参数解释：** 合并请求的类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'iid' => 'setIid',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'mergedBy' => 'setMergedBy',
            'mergedAt' => 'setMergedAt',
            'closedBy' => 'setClosedBy',
            'closedAt' => 'setClosedAt',
            'targetBranch' => 'setTargetBranch',
            'sourceBranch' => 'setSourceBranch',
            'userNotesCount' => 'setUserNotesCount',
            'upvotes' => 'setUpvotes',
            'downvotes' => 'setDownvotes',
            'author' => 'setAuthor',
            'assignee' => 'setAssignee',
            'sourceRepositoryId' => 'setSourceRepositoryId',
            'targetRepositoryId' => 'setTargetRepositoryId',
            'labels' => 'setLabels',
            'workInProgress' => 'setWorkInProgress',
            'milestone' => 'setMilestone',
            'mergeWhenPipelineSucceeds' => 'setMergeWhenPipelineSucceeds',
            'mergeStatus' => 'setMergeStatus',
            'sha' => 'setSha',
            'mergeCommitSha' => 'setMergeCommitSha',
            'discussionLocked' => 'setDiscussionLocked',
            'forceRemoveSourceBranch' => 'setForceRemoveSourceBranch',
            'shouldRemoveSourceBranch' => 'setShouldRemoveSourceBranch',
            'allowCollaboration' => 'setAllowCollaboration',
            'allowMaintainerToPush' => 'setAllowMaintainerToPush',
            'webUrl' => 'setWebUrl',
            'timeStats' => 'setTimeStats',
            'squash' => 'setSquash',
            'mergeRequestType' => 'setMergeRequestType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 合并请求的ID。
    * iid  **参数解释：** 合并请求的序号。
    * title  **参数解释：** 合并请求的标题。
    * description  **参数解释：** 合并请求的详细描述。
    * state  **参数解释：** 合并请求的状态。
    * createdAt  **参数解释：** 合并请求创建的时间。
    * updatedAt  **参数解释：** 合并请求最后一次更新的时间。
    * mergedBy  mergedBy
    * mergedAt  **参数解释：** 合并请求被合并的时间。
    * closedBy  closedBy
    * closedAt  **参数解释：** 合并请求被关闭的时间。
    * targetBranch  **参数解释：** 合并请求的目标分支名称。
    * sourceBranch  **参数解释：** 合并请求的源分支名称。
    * userNotesCount  **参数解释：** 合并请求中检视意见的数量。
    * upvotes  **参数解释：** 合并请求的正向评分数量。
    * downvotes  **参数解释：** 合并请求的负向评分数量。
    * author  author
    * assignee  **参数解释：** 合并请求的可合并人列表。
    * sourceRepositoryId  **参数解释：** 源仓库的唯一标识符。
    * targetRepositoryId  **参数解释：** 目标仓库的唯一标识符。
    * labels  **参数解释：** 合并请求关联的标签列表。
    * workInProgress  **参数解释：** 表示合并请求是否处于“工作进行中”状态。
    * milestone  milestone
    * mergeWhenPipelineSucceeds  **参数解释：** 表示是否在CI/CD管道成功时自动合并请求。
    * mergeStatus  **参数解释：** 合并请求的合并状态。
    * sha  **参数解释：** 合并请求的提交哈希值。
    * mergeCommitSha  **参数解释：** 合并提交的哈希值。
    * discussionLocked  **参数解释：** 表示合并请求的讨论是否被锁定。
    * forceRemoveSourceBranch  **参数解释：** 表示是否强制删除源分支。
    * shouldRemoveSourceBranch  **参数解释：** 表示是否应该删除源分支。
    * allowCollaboration  **参数解释：** 表示是否允许协作者参与。
    * allowMaintainerToPush  **参数解释：** 表示是否允许维护者推送代码。
    * webUrl  **参数解释：** 合并请求的网页URL链接。
    * timeStats  timeStats
    * squash  **参数解释：** 表示是否在合并时将提交压缩为一个。
    * mergeRequestType  **参数解释：** 合并请求的类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'iid' => 'getIid',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'mergedBy' => 'getMergedBy',
            'mergedAt' => 'getMergedAt',
            'closedBy' => 'getClosedBy',
            'closedAt' => 'getClosedAt',
            'targetBranch' => 'getTargetBranch',
            'sourceBranch' => 'getSourceBranch',
            'userNotesCount' => 'getUserNotesCount',
            'upvotes' => 'getUpvotes',
            'downvotes' => 'getDownvotes',
            'author' => 'getAuthor',
            'assignee' => 'getAssignee',
            'sourceRepositoryId' => 'getSourceRepositoryId',
            'targetRepositoryId' => 'getTargetRepositoryId',
            'labels' => 'getLabels',
            'workInProgress' => 'getWorkInProgress',
            'milestone' => 'getMilestone',
            'mergeWhenPipelineSucceeds' => 'getMergeWhenPipelineSucceeds',
            'mergeStatus' => 'getMergeStatus',
            'sha' => 'getSha',
            'mergeCommitSha' => 'getMergeCommitSha',
            'discussionLocked' => 'getDiscussionLocked',
            'forceRemoveSourceBranch' => 'getForceRemoveSourceBranch',
            'shouldRemoveSourceBranch' => 'getShouldRemoveSourceBranch',
            'allowCollaboration' => 'getAllowCollaboration',
            'allowMaintainerToPush' => 'getAllowMaintainerToPush',
            'webUrl' => 'getWebUrl',
            'timeStats' => 'getTimeStats',
            'squash' => 'getSquash',
            'mergeRequestType' => 'getMergeRequestType'
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
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['mergedBy'] = isset($data['mergedBy']) ? $data['mergedBy'] : null;
        $this->container['mergedAt'] = isset($data['mergedAt']) ? $data['mergedAt'] : null;
        $this->container['closedBy'] = isset($data['closedBy']) ? $data['closedBy'] : null;
        $this->container['closedAt'] = isset($data['closedAt']) ? $data['closedAt'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['userNotesCount'] = isset($data['userNotesCount']) ? $data['userNotesCount'] : null;
        $this->container['upvotes'] = isset($data['upvotes']) ? $data['upvotes'] : null;
        $this->container['downvotes'] = isset($data['downvotes']) ? $data['downvotes'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['sourceRepositoryId'] = isset($data['sourceRepositoryId']) ? $data['sourceRepositoryId'] : null;
        $this->container['targetRepositoryId'] = isset($data['targetRepositoryId']) ? $data['targetRepositoryId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['workInProgress'] = isset($data['workInProgress']) ? $data['workInProgress'] : null;
        $this->container['milestone'] = isset($data['milestone']) ? $data['milestone'] : null;
        $this->container['mergeWhenPipelineSucceeds'] = isset($data['mergeWhenPipelineSucceeds']) ? $data['mergeWhenPipelineSucceeds'] : null;
        $this->container['mergeStatus'] = isset($data['mergeStatus']) ? $data['mergeStatus'] : null;
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['mergeCommitSha'] = isset($data['mergeCommitSha']) ? $data['mergeCommitSha'] : null;
        $this->container['discussionLocked'] = isset($data['discussionLocked']) ? $data['discussionLocked'] : null;
        $this->container['forceRemoveSourceBranch'] = isset($data['forceRemoveSourceBranch']) ? $data['forceRemoveSourceBranch'] : null;
        $this->container['shouldRemoveSourceBranch'] = isset($data['shouldRemoveSourceBranch']) ? $data['shouldRemoveSourceBranch'] : null;
        $this->container['allowCollaboration'] = isset($data['allowCollaboration']) ? $data['allowCollaboration'] : null;
        $this->container['allowMaintainerToPush'] = isset($data['allowMaintainerToPush']) ? $data['allowMaintainerToPush'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['timeStats'] = isset($data['timeStats']) ? $data['timeStats'] : null;
        $this->container['squash'] = isset($data['squash']) ? $data['squash'] : null;
        $this->container['mergeRequestType'] = isset($data['mergeRequestType']) ? $data['mergeRequestType'] : null;
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
    *  **参数解释：** 合并请求的ID。
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
    * @param int|null $id **参数解释：** 合并请求的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets iid
    *  **参数解释：** 合并请求的序号。
    *
    * @return int|null
    */
    public function getIid()
    {
        return $this->container['iid'];
    }

    /**
    * Sets iid
    *
    * @param int|null $iid **参数解释：** 合并请求的序号。
    *
    * @return $this
    */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释：** 合并请求的标题。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释：** 合并请求的标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 合并请求的详细描述。
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
    * @param string|null $description **参数解释：** 合并请求的详细描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 合并请求的状态。
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
    * @param string|null $state **参数解释：** 合并请求的状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 合并请求创建的时间。
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
    * @param string|null $createdAt **参数解释：** 合并请求创建的时间。
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
    *  **参数解释：** 合并请求最后一次更新的时间。
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
    * @param string|null $updatedAt **参数解释：** 合并请求最后一次更新的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets mergedBy
    *  mergedBy
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getMergedBy()
    {
        return $this->container['mergedBy'];
    }

    /**
    * Sets mergedBy
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $mergedBy mergedBy
    *
    * @return $this
    */
    public function setMergedBy($mergedBy)
    {
        $this->container['mergedBy'] = $mergedBy;
        return $this;
    }

    /**
    * Gets mergedAt
    *  **参数解释：** 合并请求被合并的时间。
    *
    * @return string|null
    */
    public function getMergedAt()
    {
        return $this->container['mergedAt'];
    }

    /**
    * Sets mergedAt
    *
    * @param string|null $mergedAt **参数解释：** 合并请求被合并的时间。
    *
    * @return $this
    */
    public function setMergedAt($mergedAt)
    {
        $this->container['mergedAt'] = $mergedAt;
        return $this;
    }

    /**
    * Gets closedBy
    *  closedBy
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getClosedBy()
    {
        return $this->container['closedBy'];
    }

    /**
    * Sets closedBy
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $closedBy closedBy
    *
    * @return $this
    */
    public function setClosedBy($closedBy)
    {
        $this->container['closedBy'] = $closedBy;
        return $this;
    }

    /**
    * Gets closedAt
    *  **参数解释：** 合并请求被关闭的时间。
    *
    * @return string|null
    */
    public function getClosedAt()
    {
        return $this->container['closedAt'];
    }

    /**
    * Sets closedAt
    *
    * @param string|null $closedAt **参数解释：** 合并请求被关闭的时间。
    *
    * @return $this
    */
    public function setClosedAt($closedAt)
    {
        $this->container['closedAt'] = $closedAt;
        return $this;
    }

    /**
    * Gets targetBranch
    *  **参数解释：** 合并请求的目标分支名称。
    *
    * @return string|null
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string|null $targetBranch **参数解释：** 合并请求的目标分支名称。
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  **参数解释：** 合并请求的源分支名称。
    *
    * @return string|null
    */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
    * Sets sourceBranch
    *
    * @param string|null $sourceBranch **参数解释：** 合并请求的源分支名称。
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets userNotesCount
    *  **参数解释：** 合并请求中检视意见的数量。
    *
    * @return int|null
    */
    public function getUserNotesCount()
    {
        return $this->container['userNotesCount'];
    }

    /**
    * Sets userNotesCount
    *
    * @param int|null $userNotesCount **参数解释：** 合并请求中检视意见的数量。
    *
    * @return $this
    */
    public function setUserNotesCount($userNotesCount)
    {
        $this->container['userNotesCount'] = $userNotesCount;
        return $this;
    }

    /**
    * Gets upvotes
    *  **参数解释：** 合并请求的正向评分数量。
    *
    * @return int|null
    */
    public function getUpvotes()
    {
        return $this->container['upvotes'];
    }

    /**
    * Sets upvotes
    *
    * @param int|null $upvotes **参数解释：** 合并请求的正向评分数量。
    *
    * @return $this
    */
    public function setUpvotes($upvotes)
    {
        $this->container['upvotes'] = $upvotes;
        return $this;
    }

    /**
    * Gets downvotes
    *  **参数解释：** 合并请求的负向评分数量。
    *
    * @return int|null
    */
    public function getDownvotes()
    {
        return $this->container['downvotes'];
    }

    /**
    * Sets downvotes
    *
    * @param int|null $downvotes **参数解释：** 合并请求的负向评分数量。
    *
    * @return $this
    */
    public function setDownvotes($downvotes)
    {
        $this->container['downvotes'] = $downvotes;
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
    * Gets assignee
    *  **参数解释：** 合并请求的可合并人列表。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null $assignee **参数解释：** 合并请求的可合并人列表。
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets sourceRepositoryId
    *  **参数解释：** 源仓库的唯一标识符。
    *
    * @return int|null
    */
    public function getSourceRepositoryId()
    {
        return $this->container['sourceRepositoryId'];
    }

    /**
    * Sets sourceRepositoryId
    *
    * @param int|null $sourceRepositoryId **参数解释：** 源仓库的唯一标识符。
    *
    * @return $this
    */
    public function setSourceRepositoryId($sourceRepositoryId)
    {
        $this->container['sourceRepositoryId'] = $sourceRepositoryId;
        return $this;
    }

    /**
    * Gets targetRepositoryId
    *  **参数解释：** 目标仓库的唯一标识符。
    *
    * @return int|null
    */
    public function getTargetRepositoryId()
    {
        return $this->container['targetRepositoryId'];
    }

    /**
    * Sets targetRepositoryId
    *
    * @param int|null $targetRepositoryId **参数解释：** 目标仓库的唯一标识符。
    *
    * @return $this
    */
    public function setTargetRepositoryId($targetRepositoryId)
    {
        $this->container['targetRepositoryId'] = $targetRepositoryId;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释：** 合并请求关联的标签列表。
    *
    * @return string[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[]|null $labels **参数解释：** 合并请求关联的标签列表。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets workInProgress
    *  **参数解释：** 表示合并请求是否处于“工作进行中”状态。
    *
    * @return bool|null
    */
    public function getWorkInProgress()
    {
        return $this->container['workInProgress'];
    }

    /**
    * Sets workInProgress
    *
    * @param bool|null $workInProgress **参数解释：** 表示合并请求是否处于“工作进行中”状态。
    *
    * @return $this
    */
    public function setWorkInProgress($workInProgress)
    {
        $this->container['workInProgress'] = $workInProgress;
        return $this;
    }

    /**
    * Gets milestone
    *  milestone
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\MilestoneBasicDto|null
    */
    public function getMilestone()
    {
        return $this->container['milestone'];
    }

    /**
    * Sets milestone
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\MilestoneBasicDto|null $milestone milestone
    *
    * @return $this
    */
    public function setMilestone($milestone)
    {
        $this->container['milestone'] = $milestone;
        return $this;
    }

    /**
    * Gets mergeWhenPipelineSucceeds
    *  **参数解释：** 表示是否在CI/CD管道成功时自动合并请求。
    *
    * @return bool|null
    */
    public function getMergeWhenPipelineSucceeds()
    {
        return $this->container['mergeWhenPipelineSucceeds'];
    }

    /**
    * Sets mergeWhenPipelineSucceeds
    *
    * @param bool|null $mergeWhenPipelineSucceeds **参数解释：** 表示是否在CI/CD管道成功时自动合并请求。
    *
    * @return $this
    */
    public function setMergeWhenPipelineSucceeds($mergeWhenPipelineSucceeds)
    {
        $this->container['mergeWhenPipelineSucceeds'] = $mergeWhenPipelineSucceeds;
        return $this;
    }

    /**
    * Gets mergeStatus
    *  **参数解释：** 合并请求的合并状态。
    *
    * @return string|null
    */
    public function getMergeStatus()
    {
        return $this->container['mergeStatus'];
    }

    /**
    * Sets mergeStatus
    *
    * @param string|null $mergeStatus **参数解释：** 合并请求的合并状态。
    *
    * @return $this
    */
    public function setMergeStatus($mergeStatus)
    {
        $this->container['mergeStatus'] = $mergeStatus;
        return $this;
    }

    /**
    * Gets sha
    *  **参数解释：** 合并请求的提交哈希值。
    *
    * @return string|null
    */
    public function getSha()
    {
        return $this->container['sha'];
    }

    /**
    * Sets sha
    *
    * @param string|null $sha **参数解释：** 合并请求的提交哈希值。
    *
    * @return $this
    */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;
        return $this;
    }

    /**
    * Gets mergeCommitSha
    *  **参数解释：** 合并提交的哈希值。
    *
    * @return string|null
    */
    public function getMergeCommitSha()
    {
        return $this->container['mergeCommitSha'];
    }

    /**
    * Sets mergeCommitSha
    *
    * @param string|null $mergeCommitSha **参数解释：** 合并提交的哈希值。
    *
    * @return $this
    */
    public function setMergeCommitSha($mergeCommitSha)
    {
        $this->container['mergeCommitSha'] = $mergeCommitSha;
        return $this;
    }

    /**
    * Gets discussionLocked
    *  **参数解释：** 表示合并请求的讨论是否被锁定。
    *
    * @return bool|null
    */
    public function getDiscussionLocked()
    {
        return $this->container['discussionLocked'];
    }

    /**
    * Sets discussionLocked
    *
    * @param bool|null $discussionLocked **参数解释：** 表示合并请求的讨论是否被锁定。
    *
    * @return $this
    */
    public function setDiscussionLocked($discussionLocked)
    {
        $this->container['discussionLocked'] = $discussionLocked;
        return $this;
    }

    /**
    * Gets forceRemoveSourceBranch
    *  **参数解释：** 表示是否强制删除源分支。
    *
    * @return bool|null
    */
    public function getForceRemoveSourceBranch()
    {
        return $this->container['forceRemoveSourceBranch'];
    }

    /**
    * Sets forceRemoveSourceBranch
    *
    * @param bool|null $forceRemoveSourceBranch **参数解释：** 表示是否强制删除源分支。
    *
    * @return $this
    */
    public function setForceRemoveSourceBranch($forceRemoveSourceBranch)
    {
        $this->container['forceRemoveSourceBranch'] = $forceRemoveSourceBranch;
        return $this;
    }

    /**
    * Gets shouldRemoveSourceBranch
    *  **参数解释：** 表示是否应该删除源分支。
    *
    * @return bool|null
    */
    public function getShouldRemoveSourceBranch()
    {
        return $this->container['shouldRemoveSourceBranch'];
    }

    /**
    * Sets shouldRemoveSourceBranch
    *
    * @param bool|null $shouldRemoveSourceBranch **参数解释：** 表示是否应该删除源分支。
    *
    * @return $this
    */
    public function setShouldRemoveSourceBranch($shouldRemoveSourceBranch)
    {
        $this->container['shouldRemoveSourceBranch'] = $shouldRemoveSourceBranch;
        return $this;
    }

    /**
    * Gets allowCollaboration
    *  **参数解释：** 表示是否允许协作者参与。
    *
    * @return bool|null
    */
    public function getAllowCollaboration()
    {
        return $this->container['allowCollaboration'];
    }

    /**
    * Sets allowCollaboration
    *
    * @param bool|null $allowCollaboration **参数解释：** 表示是否允许协作者参与。
    *
    * @return $this
    */
    public function setAllowCollaboration($allowCollaboration)
    {
        $this->container['allowCollaboration'] = $allowCollaboration;
        return $this;
    }

    /**
    * Gets allowMaintainerToPush
    *  **参数解释：** 表示是否允许维护者推送代码。
    *
    * @return bool|null
    */
    public function getAllowMaintainerToPush()
    {
        return $this->container['allowMaintainerToPush'];
    }

    /**
    * Sets allowMaintainerToPush
    *
    * @param bool|null $allowMaintainerToPush **参数解释：** 表示是否允许维护者推送代码。
    *
    * @return $this
    */
    public function setAllowMaintainerToPush($allowMaintainerToPush)
    {
        $this->container['allowMaintainerToPush'] = $allowMaintainerToPush;
        return $this;
    }

    /**
    * Gets webUrl
    *  **参数解释：** 合并请求的网页URL链接。
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl **参数解释：** 合并请求的网页URL链接。
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets timeStats
    *  timeStats
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\IssuableTimeStatsDto|null
    */
    public function getTimeStats()
    {
        return $this->container['timeStats'];
    }

    /**
    * Sets timeStats
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\IssuableTimeStatsDto|null $timeStats timeStats
    *
    * @return $this
    */
    public function setTimeStats($timeStats)
    {
        $this->container['timeStats'] = $timeStats;
        return $this;
    }

    /**
    * Gets squash
    *  **参数解释：** 表示是否在合并时将提交压缩为一个。
    *
    * @return bool|null
    */
    public function getSquash()
    {
        return $this->container['squash'];
    }

    /**
    * Sets squash
    *
    * @param bool|null $squash **参数解释：** 表示是否在合并时将提交压缩为一个。
    *
    * @return $this
    */
    public function setSquash($squash)
    {
        $this->container['squash'] = $squash;
        return $this;
    }

    /**
    * Gets mergeRequestType
    *  **参数解释：** 合并请求的类型。
    *
    * @return string|null
    */
    public function getMergeRequestType()
    {
        return $this->container['mergeRequestType'];
    }

    /**
    * Sets mergeRequestType
    *
    * @param string|null $mergeRequestType **参数解释：** 合并请求的类型。
    *
    * @return $this
    */
    public function setMergeRequestType($mergeRequestType)
    {
        $this->container['mergeRequestType'] = $mergeRequestType;
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

