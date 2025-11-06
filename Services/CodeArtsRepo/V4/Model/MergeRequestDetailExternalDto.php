<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestDetailExternalDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestDetailExternalDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  合并请求id
    * iid  合并请求iid
    * repositoryId  目标仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isSourceBranchProtected  源分支是否为保护分支
    * devcloudSourceBranch  源分支
    * author  author
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceProjectId  源项目id
    * targetProjectId  目标项目id
    * labels  标签
    * workInProgress  WIP状态
    * milestone  milestone
    * mergeWhenBuildSucceeds  流水线成功后自动合入
    * mergeStatus  可合并状态
    * sha  当前合并请求最新commit
    * mergeCommitSha  合入commit节点
    * subscribed  订阅
    * mergedBy  mergedBy
    * mergedAt  合并时间
    * closedBy  closedBy
    * closedAt  关闭时间
    * userNotesCount  检视意见数量
    * forceRemoveSourceBranch  合入后删除源分支
    * webUrl  主页url
    * mergeRequestDiff  mergeRequestDiff
    * mergeRequestReviewersCount  评审人数量
    * mergeRequestReviewCount  打分
    * mergeRequestReviewerList  评审人列表
    * mergeRequestAssigneeList  合并人列表
    * notes  检视意见
    * codecheckState  代码检查状态
    * codecheckDefectCount  代码检查问题数
    * mergeRequestRelatedWorkItems  合并请求关联单数量
    * divergedCommitsCount  源分支落后commit数
    * moderationResult  送审结果
    * moderationTime  送审时间时间戳
    * moderationStatus  送审状态码
    * isUseTempBranch  是否使用临时分支
    * approvalMergeRequestApprovers  审核人
    * reviewMode  合并请求模式
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * rebaseInProgress  是否正在rebase
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'iid' => 'int',
            'repositoryId' => 'int',
            'title' => 'string',
            'description' => 'string',
            'state' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'sourceBranch' => 'string',
            'targetBranch' => 'string',
            'isSourceBranchProtected' => 'bool',
            'devcloudSourceBranch' => 'string',
            'author' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto',
            'sourceRepositoryId' => 'int',
            'targetRepositoryId' => 'int',
            'sourceProjectId' => 'string',
            'targetProjectId' => 'string',
            'labels' => 'object[]',
            'workInProgress' => 'bool',
            'milestone' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MilestoneBasicDto',
            'mergeWhenBuildSucceeds' => 'bool',
            'mergeStatus' => 'string',
            'sha' => 'string',
            'mergeCommitSha' => 'string',
            'subscribed' => 'bool',
            'mergedBy' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto',
            'mergedAt' => 'string',
            'closedBy' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto',
            'closedAt' => 'string',
            'userNotesCount' => 'int',
            'forceRemoveSourceBranch' => 'bool',
            'webUrl' => 'string',
            'mergeRequestDiff' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestDiffExternalDto',
            'mergeRequestReviewersCount' => 'int',
            'mergeRequestReviewCount' => 'int',
            'mergeRequestReviewerList' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestReviewerExternalDto[]',
            'mergeRequestAssigneeList' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto[]',
            'notes' => 'int',
            'codecheckState' => 'int',
            'codecheckDefectCount' => 'int',
            'mergeRequestRelatedWorkItems' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestRelatedWorkItemDto[]',
            'divergedCommitsCount' => 'int',
            'moderationResult' => 'bool',
            'moderationTime' => 'int',
            'moderationStatus' => 'int',
            'isUseTempBranch' => 'bool',
            'approvalMergeRequestApprovers' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ApprovalUserDto[]',
            'reviewMode' => 'string',
            'squash' => 'bool',
            'squashCommitMessage' => 'string',
            'rebaseInProgress' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  合并请求id
    * iid  合并请求iid
    * repositoryId  目标仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isSourceBranchProtected  源分支是否为保护分支
    * devcloudSourceBranch  源分支
    * author  author
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceProjectId  源项目id
    * targetProjectId  目标项目id
    * labels  标签
    * workInProgress  WIP状态
    * milestone  milestone
    * mergeWhenBuildSucceeds  流水线成功后自动合入
    * mergeStatus  可合并状态
    * sha  当前合并请求最新commit
    * mergeCommitSha  合入commit节点
    * subscribed  订阅
    * mergedBy  mergedBy
    * mergedAt  合并时间
    * closedBy  closedBy
    * closedAt  关闭时间
    * userNotesCount  检视意见数量
    * forceRemoveSourceBranch  合入后删除源分支
    * webUrl  主页url
    * mergeRequestDiff  mergeRequestDiff
    * mergeRequestReviewersCount  评审人数量
    * mergeRequestReviewCount  打分
    * mergeRequestReviewerList  评审人列表
    * mergeRequestAssigneeList  合并人列表
    * notes  检视意见
    * codecheckState  代码检查状态
    * codecheckDefectCount  代码检查问题数
    * mergeRequestRelatedWorkItems  合并请求关联单数量
    * divergedCommitsCount  源分支落后commit数
    * moderationResult  送审结果
    * moderationTime  送审时间时间戳
    * moderationStatus  送审状态码
    * isUseTempBranch  是否使用临时分支
    * approvalMergeRequestApprovers  审核人
    * reviewMode  合并请求模式
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * rebaseInProgress  是否正在rebase
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'iid' => null,
        'repositoryId' => null,
        'title' => null,
        'description' => null,
        'state' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'isSourceBranchProtected' => null,
        'devcloudSourceBranch' => null,
        'author' => null,
        'sourceRepositoryId' => null,
        'targetRepositoryId' => null,
        'sourceProjectId' => null,
        'targetProjectId' => null,
        'labels' => null,
        'workInProgress' => null,
        'milestone' => null,
        'mergeWhenBuildSucceeds' => null,
        'mergeStatus' => null,
        'sha' => null,
        'mergeCommitSha' => null,
        'subscribed' => null,
        'mergedBy' => null,
        'mergedAt' => null,
        'closedBy' => null,
        'closedAt' => null,
        'userNotesCount' => null,
        'forceRemoveSourceBranch' => null,
        'webUrl' => null,
        'mergeRequestDiff' => null,
        'mergeRequestReviewersCount' => null,
        'mergeRequestReviewCount' => null,
        'mergeRequestReviewerList' => null,
        'mergeRequestAssigneeList' => null,
        'notes' => null,
        'codecheckState' => null,
        'codecheckDefectCount' => null,
        'mergeRequestRelatedWorkItems' => null,
        'divergedCommitsCount' => null,
        'moderationResult' => null,
        'moderationTime' => 'int64',
        'moderationStatus' => null,
        'isUseTempBranch' => null,
        'approvalMergeRequestApprovers' => null,
        'reviewMode' => null,
        'squash' => null,
        'squashCommitMessage' => null,
        'rebaseInProgress' => null
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
    * id  合并请求id
    * iid  合并请求iid
    * repositoryId  目标仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isSourceBranchProtected  源分支是否为保护分支
    * devcloudSourceBranch  源分支
    * author  author
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceProjectId  源项目id
    * targetProjectId  目标项目id
    * labels  标签
    * workInProgress  WIP状态
    * milestone  milestone
    * mergeWhenBuildSucceeds  流水线成功后自动合入
    * mergeStatus  可合并状态
    * sha  当前合并请求最新commit
    * mergeCommitSha  合入commit节点
    * subscribed  订阅
    * mergedBy  mergedBy
    * mergedAt  合并时间
    * closedBy  closedBy
    * closedAt  关闭时间
    * userNotesCount  检视意见数量
    * forceRemoveSourceBranch  合入后删除源分支
    * webUrl  主页url
    * mergeRequestDiff  mergeRequestDiff
    * mergeRequestReviewersCount  评审人数量
    * mergeRequestReviewCount  打分
    * mergeRequestReviewerList  评审人列表
    * mergeRequestAssigneeList  合并人列表
    * notes  检视意见
    * codecheckState  代码检查状态
    * codecheckDefectCount  代码检查问题数
    * mergeRequestRelatedWorkItems  合并请求关联单数量
    * divergedCommitsCount  源分支落后commit数
    * moderationResult  送审结果
    * moderationTime  送审时间时间戳
    * moderationStatus  送审状态码
    * isUseTempBranch  是否使用临时分支
    * approvalMergeRequestApprovers  审核人
    * reviewMode  合并请求模式
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * rebaseInProgress  是否正在rebase
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'iid' => 'iid',
            'repositoryId' => 'repository_id',
            'title' => 'title',
            'description' => 'description',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'sourceBranch' => 'source_branch',
            'targetBranch' => 'target_branch',
            'isSourceBranchProtected' => 'is_source_branch_protected',
            'devcloudSourceBranch' => 'devcloud_source_branch',
            'author' => 'author',
            'sourceRepositoryId' => 'source_repository_id',
            'targetRepositoryId' => 'target_repository_id',
            'sourceProjectId' => 'source_project_id',
            'targetProjectId' => 'target_project_id',
            'labels' => 'labels',
            'workInProgress' => 'work_in_progress',
            'milestone' => 'milestone',
            'mergeWhenBuildSucceeds' => 'merge_when_build_succeeds',
            'mergeStatus' => 'merge_status',
            'sha' => 'sha',
            'mergeCommitSha' => 'merge_commit_sha',
            'subscribed' => 'subscribed',
            'mergedBy' => 'merged_by',
            'mergedAt' => 'merged_at',
            'closedBy' => 'closed_by',
            'closedAt' => 'closed_at',
            'userNotesCount' => 'user_notes_count',
            'forceRemoveSourceBranch' => 'force_remove_source_branch',
            'webUrl' => 'web_url',
            'mergeRequestDiff' => 'merge_request_diff',
            'mergeRequestReviewersCount' => 'merge_request_reviewers_count',
            'mergeRequestReviewCount' => 'merge_request_review_count',
            'mergeRequestReviewerList' => 'merge_request_reviewer_list',
            'mergeRequestAssigneeList' => 'merge_request_assignee_list',
            'notes' => 'notes',
            'codecheckState' => 'codecheck_state',
            'codecheckDefectCount' => 'codecheck_defect_count',
            'mergeRequestRelatedWorkItems' => 'merge_request_related_work_items',
            'divergedCommitsCount' => 'diverged_commits_count',
            'moderationResult' => 'moderation_result',
            'moderationTime' => 'moderation_time',
            'moderationStatus' => 'moderation_status',
            'isUseTempBranch' => 'is_use_temp_branch',
            'approvalMergeRequestApprovers' => 'approval_merge_request_approvers',
            'reviewMode' => 'review_mode',
            'squash' => 'squash',
            'squashCommitMessage' => 'squash_commit_message',
            'rebaseInProgress' => 'rebase_in_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  合并请求id
    * iid  合并请求iid
    * repositoryId  目标仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isSourceBranchProtected  源分支是否为保护分支
    * devcloudSourceBranch  源分支
    * author  author
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceProjectId  源项目id
    * targetProjectId  目标项目id
    * labels  标签
    * workInProgress  WIP状态
    * milestone  milestone
    * mergeWhenBuildSucceeds  流水线成功后自动合入
    * mergeStatus  可合并状态
    * sha  当前合并请求最新commit
    * mergeCommitSha  合入commit节点
    * subscribed  订阅
    * mergedBy  mergedBy
    * mergedAt  合并时间
    * closedBy  closedBy
    * closedAt  关闭时间
    * userNotesCount  检视意见数量
    * forceRemoveSourceBranch  合入后删除源分支
    * webUrl  主页url
    * mergeRequestDiff  mergeRequestDiff
    * mergeRequestReviewersCount  评审人数量
    * mergeRequestReviewCount  打分
    * mergeRequestReviewerList  评审人列表
    * mergeRequestAssigneeList  合并人列表
    * notes  检视意见
    * codecheckState  代码检查状态
    * codecheckDefectCount  代码检查问题数
    * mergeRequestRelatedWorkItems  合并请求关联单数量
    * divergedCommitsCount  源分支落后commit数
    * moderationResult  送审结果
    * moderationTime  送审时间时间戳
    * moderationStatus  送审状态码
    * isUseTempBranch  是否使用临时分支
    * approvalMergeRequestApprovers  审核人
    * reviewMode  合并请求模式
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * rebaseInProgress  是否正在rebase
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'iid' => 'setIid',
            'repositoryId' => 'setRepositoryId',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'sourceBranch' => 'setSourceBranch',
            'targetBranch' => 'setTargetBranch',
            'isSourceBranchProtected' => 'setIsSourceBranchProtected',
            'devcloudSourceBranch' => 'setDevcloudSourceBranch',
            'author' => 'setAuthor',
            'sourceRepositoryId' => 'setSourceRepositoryId',
            'targetRepositoryId' => 'setTargetRepositoryId',
            'sourceProjectId' => 'setSourceProjectId',
            'targetProjectId' => 'setTargetProjectId',
            'labels' => 'setLabels',
            'workInProgress' => 'setWorkInProgress',
            'milestone' => 'setMilestone',
            'mergeWhenBuildSucceeds' => 'setMergeWhenBuildSucceeds',
            'mergeStatus' => 'setMergeStatus',
            'sha' => 'setSha',
            'mergeCommitSha' => 'setMergeCommitSha',
            'subscribed' => 'setSubscribed',
            'mergedBy' => 'setMergedBy',
            'mergedAt' => 'setMergedAt',
            'closedBy' => 'setClosedBy',
            'closedAt' => 'setClosedAt',
            'userNotesCount' => 'setUserNotesCount',
            'forceRemoveSourceBranch' => 'setForceRemoveSourceBranch',
            'webUrl' => 'setWebUrl',
            'mergeRequestDiff' => 'setMergeRequestDiff',
            'mergeRequestReviewersCount' => 'setMergeRequestReviewersCount',
            'mergeRequestReviewCount' => 'setMergeRequestReviewCount',
            'mergeRequestReviewerList' => 'setMergeRequestReviewerList',
            'mergeRequestAssigneeList' => 'setMergeRequestAssigneeList',
            'notes' => 'setNotes',
            'codecheckState' => 'setCodecheckState',
            'codecheckDefectCount' => 'setCodecheckDefectCount',
            'mergeRequestRelatedWorkItems' => 'setMergeRequestRelatedWorkItems',
            'divergedCommitsCount' => 'setDivergedCommitsCount',
            'moderationResult' => 'setModerationResult',
            'moderationTime' => 'setModerationTime',
            'moderationStatus' => 'setModerationStatus',
            'isUseTempBranch' => 'setIsUseTempBranch',
            'approvalMergeRequestApprovers' => 'setApprovalMergeRequestApprovers',
            'reviewMode' => 'setReviewMode',
            'squash' => 'setSquash',
            'squashCommitMessage' => 'setSquashCommitMessage',
            'rebaseInProgress' => 'setRebaseInProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  合并请求id
    * iid  合并请求iid
    * repositoryId  目标仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * sourceBranch  源分支
    * targetBranch  目标分支
    * isSourceBranchProtected  源分支是否为保护分支
    * devcloudSourceBranch  源分支
    * author  author
    * sourceRepositoryId  源仓库id
    * targetRepositoryId  目标仓库id
    * sourceProjectId  源项目id
    * targetProjectId  目标项目id
    * labels  标签
    * workInProgress  WIP状态
    * milestone  milestone
    * mergeWhenBuildSucceeds  流水线成功后自动合入
    * mergeStatus  可合并状态
    * sha  当前合并请求最新commit
    * mergeCommitSha  合入commit节点
    * subscribed  订阅
    * mergedBy  mergedBy
    * mergedAt  合并时间
    * closedBy  closedBy
    * closedAt  关闭时间
    * userNotesCount  检视意见数量
    * forceRemoveSourceBranch  合入后删除源分支
    * webUrl  主页url
    * mergeRequestDiff  mergeRequestDiff
    * mergeRequestReviewersCount  评审人数量
    * mergeRequestReviewCount  打分
    * mergeRequestReviewerList  评审人列表
    * mergeRequestAssigneeList  合并人列表
    * notes  检视意见
    * codecheckState  代码检查状态
    * codecheckDefectCount  代码检查问题数
    * mergeRequestRelatedWorkItems  合并请求关联单数量
    * divergedCommitsCount  源分支落后commit数
    * moderationResult  送审结果
    * moderationTime  送审时间时间戳
    * moderationStatus  送审状态码
    * isUseTempBranch  是否使用临时分支
    * approvalMergeRequestApprovers  审核人
    * reviewMode  合并请求模式
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * rebaseInProgress  是否正在rebase
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'iid' => 'getIid',
            'repositoryId' => 'getRepositoryId',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'sourceBranch' => 'getSourceBranch',
            'targetBranch' => 'getTargetBranch',
            'isSourceBranchProtected' => 'getIsSourceBranchProtected',
            'devcloudSourceBranch' => 'getDevcloudSourceBranch',
            'author' => 'getAuthor',
            'sourceRepositoryId' => 'getSourceRepositoryId',
            'targetRepositoryId' => 'getTargetRepositoryId',
            'sourceProjectId' => 'getSourceProjectId',
            'targetProjectId' => 'getTargetProjectId',
            'labels' => 'getLabels',
            'workInProgress' => 'getWorkInProgress',
            'milestone' => 'getMilestone',
            'mergeWhenBuildSucceeds' => 'getMergeWhenBuildSucceeds',
            'mergeStatus' => 'getMergeStatus',
            'sha' => 'getSha',
            'mergeCommitSha' => 'getMergeCommitSha',
            'subscribed' => 'getSubscribed',
            'mergedBy' => 'getMergedBy',
            'mergedAt' => 'getMergedAt',
            'closedBy' => 'getClosedBy',
            'closedAt' => 'getClosedAt',
            'userNotesCount' => 'getUserNotesCount',
            'forceRemoveSourceBranch' => 'getForceRemoveSourceBranch',
            'webUrl' => 'getWebUrl',
            'mergeRequestDiff' => 'getMergeRequestDiff',
            'mergeRequestReviewersCount' => 'getMergeRequestReviewersCount',
            'mergeRequestReviewCount' => 'getMergeRequestReviewCount',
            'mergeRequestReviewerList' => 'getMergeRequestReviewerList',
            'mergeRequestAssigneeList' => 'getMergeRequestAssigneeList',
            'notes' => 'getNotes',
            'codecheckState' => 'getCodecheckState',
            'codecheckDefectCount' => 'getCodecheckDefectCount',
            'mergeRequestRelatedWorkItems' => 'getMergeRequestRelatedWorkItems',
            'divergedCommitsCount' => 'getDivergedCommitsCount',
            'moderationResult' => 'getModerationResult',
            'moderationTime' => 'getModerationTime',
            'moderationStatus' => 'getModerationStatus',
            'isUseTempBranch' => 'getIsUseTempBranch',
            'approvalMergeRequestApprovers' => 'getApprovalMergeRequestApprovers',
            'reviewMode' => 'getReviewMode',
            'squash' => 'getSquash',
            'squashCommitMessage' => 'getSquashCommitMessage',
            'rebaseInProgress' => 'getRebaseInProgress'
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
    const REVIEW_MODE_VOTE = 'vote';
    const REVIEW_MODE_APPROVAL = 'approval';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReviewModeAllowableValues()
    {
        return [
            self::REVIEW_MODE_VOTE,
            self::REVIEW_MODE_APPROVAL,
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
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['isSourceBranchProtected'] = isset($data['isSourceBranchProtected']) ? $data['isSourceBranchProtected'] : null;
        $this->container['devcloudSourceBranch'] = isset($data['devcloudSourceBranch']) ? $data['devcloudSourceBranch'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['sourceRepositoryId'] = isset($data['sourceRepositoryId']) ? $data['sourceRepositoryId'] : null;
        $this->container['targetRepositoryId'] = isset($data['targetRepositoryId']) ? $data['targetRepositoryId'] : null;
        $this->container['sourceProjectId'] = isset($data['sourceProjectId']) ? $data['sourceProjectId'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['workInProgress'] = isset($data['workInProgress']) ? $data['workInProgress'] : null;
        $this->container['milestone'] = isset($data['milestone']) ? $data['milestone'] : null;
        $this->container['mergeWhenBuildSucceeds'] = isset($data['mergeWhenBuildSucceeds']) ? $data['mergeWhenBuildSucceeds'] : null;
        $this->container['mergeStatus'] = isset($data['mergeStatus']) ? $data['mergeStatus'] : null;
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['mergeCommitSha'] = isset($data['mergeCommitSha']) ? $data['mergeCommitSha'] : null;
        $this->container['subscribed'] = isset($data['subscribed']) ? $data['subscribed'] : null;
        $this->container['mergedBy'] = isset($data['mergedBy']) ? $data['mergedBy'] : null;
        $this->container['mergedAt'] = isset($data['mergedAt']) ? $data['mergedAt'] : null;
        $this->container['closedBy'] = isset($data['closedBy']) ? $data['closedBy'] : null;
        $this->container['closedAt'] = isset($data['closedAt']) ? $data['closedAt'] : null;
        $this->container['userNotesCount'] = isset($data['userNotesCount']) ? $data['userNotesCount'] : null;
        $this->container['forceRemoveSourceBranch'] = isset($data['forceRemoveSourceBranch']) ? $data['forceRemoveSourceBranch'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['mergeRequestDiff'] = isset($data['mergeRequestDiff']) ? $data['mergeRequestDiff'] : null;
        $this->container['mergeRequestReviewersCount'] = isset($data['mergeRequestReviewersCount']) ? $data['mergeRequestReviewersCount'] : null;
        $this->container['mergeRequestReviewCount'] = isset($data['mergeRequestReviewCount']) ? $data['mergeRequestReviewCount'] : null;
        $this->container['mergeRequestReviewerList'] = isset($data['mergeRequestReviewerList']) ? $data['mergeRequestReviewerList'] : null;
        $this->container['mergeRequestAssigneeList'] = isset($data['mergeRequestAssigneeList']) ? $data['mergeRequestAssigneeList'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['codecheckState'] = isset($data['codecheckState']) ? $data['codecheckState'] : null;
        $this->container['codecheckDefectCount'] = isset($data['codecheckDefectCount']) ? $data['codecheckDefectCount'] : null;
        $this->container['mergeRequestRelatedWorkItems'] = isset($data['mergeRequestRelatedWorkItems']) ? $data['mergeRequestRelatedWorkItems'] : null;
        $this->container['divergedCommitsCount'] = isset($data['divergedCommitsCount']) ? $data['divergedCommitsCount'] : null;
        $this->container['moderationResult'] = isset($data['moderationResult']) ? $data['moderationResult'] : null;
        $this->container['moderationTime'] = isset($data['moderationTime']) ? $data['moderationTime'] : null;
        $this->container['moderationStatus'] = isset($data['moderationStatus']) ? $data['moderationStatus'] : null;
        $this->container['isUseTempBranch'] = isset($data['isUseTempBranch']) ? $data['isUseTempBranch'] : null;
        $this->container['approvalMergeRequestApprovers'] = isset($data['approvalMergeRequestApprovers']) ? $data['approvalMergeRequestApprovers'] : null;
        $this->container['reviewMode'] = isset($data['reviewMode']) ? $data['reviewMode'] : null;
        $this->container['squash'] = isset($data['squash']) ? $data['squash'] : null;
        $this->container['squashCommitMessage'] = isset($data['squashCommitMessage']) ? $data['squashCommitMessage'] : null;
        $this->container['rebaseInProgress'] = isset($data['rebaseInProgress']) ? $data['rebaseInProgress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['moderationTime']) && ($this->container['moderationTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'moderationTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['moderationTime']) && ($this->container['moderationTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'moderationTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['moderationStatus']) && ($this->container['moderationStatus'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'moderationStatus', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['moderationStatus']) && ($this->container['moderationStatus'] < 1)) {
                $invalidProperties[] = "invalid value for 'moderationStatus', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getReviewModeAllowableValues();
                if (!is_null($this->container['reviewMode']) && !in_array($this->container['reviewMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reviewMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['squashCommitMessage']) && (mb_strlen($this->container['squashCommitMessage']) > 100000)) {
                $invalidProperties[] = "invalid value for 'squashCommitMessage', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['squashCommitMessage']) && (mb_strlen($this->container['squashCommitMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'squashCommitMessage', the character length must be bigger than or equal to 0.";
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
    *  合并请求id
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
    * @param int|null $id 合并请求id
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
    *  合并请求iid
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
    * @param int|null $iid 合并请求iid
    *
    * @return $this
    */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;
        return $this;
    }

    /**
    * Gets repositoryId
    *  目标仓库id
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId 目标仓库id
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets title
    *  合并请求标题
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
    * @param string|null $title 合并请求标题
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
    *  合并请求描述
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
    * @param string|null $description 合并请求描述
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
    *  合并请求状态
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
    * @param string|null $state 合并请求状态
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
    *  创建时间
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
    * @param string|null $createdAt 创建时间
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
    *  更新时间
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
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  源分支
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
    * @param string|null $sourceBranch 源分支
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets targetBranch
    *  目标分支
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
    * @param string|null $targetBranch 目标分支
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets isSourceBranchProtected
    *  源分支是否为保护分支
    *
    * @return bool|null
    */
    public function getIsSourceBranchProtected()
    {
        return $this->container['isSourceBranchProtected'];
    }

    /**
    * Sets isSourceBranchProtected
    *
    * @param bool|null $isSourceBranchProtected 源分支是否为保护分支
    *
    * @return $this
    */
    public function setIsSourceBranchProtected($isSourceBranchProtected)
    {
        $this->container['isSourceBranchProtected'] = $isSourceBranchProtected;
        return $this;
    }

    /**
    * Gets devcloudSourceBranch
    *  源分支
    *
    * @return string|null
    */
    public function getDevcloudSourceBranch()
    {
        return $this->container['devcloudSourceBranch'];
    }

    /**
    * Sets devcloudSourceBranch
    *
    * @param string|null $devcloudSourceBranch 源分支
    *
    * @return $this
    */
    public function setDevcloudSourceBranch($devcloudSourceBranch)
    {
        $this->container['devcloudSourceBranch'] = $devcloudSourceBranch;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets sourceRepositoryId
    *  源仓库id
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
    * @param int|null $sourceRepositoryId 源仓库id
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
    *  目标仓库id
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
    * @param int|null $targetRepositoryId 目标仓库id
    *
    * @return $this
    */
    public function setTargetRepositoryId($targetRepositoryId)
    {
        $this->container['targetRepositoryId'] = $targetRepositoryId;
        return $this;
    }

    /**
    * Gets sourceProjectId
    *  源项目id
    *
    * @return string|null
    */
    public function getSourceProjectId()
    {
        return $this->container['sourceProjectId'];
    }

    /**
    * Sets sourceProjectId
    *
    * @param string|null $sourceProjectId 源项目id
    *
    * @return $this
    */
    public function setSourceProjectId($sourceProjectId)
    {
        $this->container['sourceProjectId'] = $sourceProjectId;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  目标项目id
    *
    * @return string|null
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string|null $targetProjectId 目标项目id
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets labels
    *  标签
    *
    * @return object[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param object[]|null $labels 标签
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
    *  WIP状态
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
    * @param bool|null $workInProgress WIP状态
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
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MilestoneBasicDto|null
    */
    public function getMilestone()
    {
        return $this->container['milestone'];
    }

    /**
    * Sets milestone
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MilestoneBasicDto|null $milestone milestone
    *
    * @return $this
    */
    public function setMilestone($milestone)
    {
        $this->container['milestone'] = $milestone;
        return $this;
    }

    /**
    * Gets mergeWhenBuildSucceeds
    *  流水线成功后自动合入
    *
    * @return bool|null
    */
    public function getMergeWhenBuildSucceeds()
    {
        return $this->container['mergeWhenBuildSucceeds'];
    }

    /**
    * Sets mergeWhenBuildSucceeds
    *
    * @param bool|null $mergeWhenBuildSucceeds 流水线成功后自动合入
    *
    * @return $this
    */
    public function setMergeWhenBuildSucceeds($mergeWhenBuildSucceeds)
    {
        $this->container['mergeWhenBuildSucceeds'] = $mergeWhenBuildSucceeds;
        return $this;
    }

    /**
    * Gets mergeStatus
    *  可合并状态
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
    * @param string|null $mergeStatus 可合并状态
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
    *  当前合并请求最新commit
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
    * @param string|null $sha 当前合并请求最新commit
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
    *  合入commit节点
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
    * @param string|null $mergeCommitSha 合入commit节点
    *
    * @return $this
    */
    public function setMergeCommitSha($mergeCommitSha)
    {
        $this->container['mergeCommitSha'] = $mergeCommitSha;
        return $this;
    }

    /**
    * Gets subscribed
    *  订阅
    *
    * @return bool|null
    */
    public function getSubscribed()
    {
        return $this->container['subscribed'];
    }

    /**
    * Sets subscribed
    *
    * @param bool|null $subscribed 订阅
    *
    * @return $this
    */
    public function setSubscribed($subscribed)
    {
        $this->container['subscribed'] = $subscribed;
        return $this;
    }

    /**
    * Gets mergedBy
    *  mergedBy
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto|null
    */
    public function getMergedBy()
    {
        return $this->container['mergedBy'];
    }

    /**
    * Sets mergedBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto|null $mergedBy mergedBy
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
    *  合并时间
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
    * @param string|null $mergedAt 合并时间
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
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto|null
    */
    public function getClosedBy()
    {
        return $this->container['closedBy'];
    }

    /**
    * Sets closedBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto|null $closedBy closedBy
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
    *  关闭时间
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
    * @param string|null $closedAt 关闭时间
    *
    * @return $this
    */
    public function setClosedAt($closedAt)
    {
        $this->container['closedAt'] = $closedAt;
        return $this;
    }

    /**
    * Gets userNotesCount
    *  检视意见数量
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
    * @param int|null $userNotesCount 检视意见数量
    *
    * @return $this
    */
    public function setUserNotesCount($userNotesCount)
    {
        $this->container['userNotesCount'] = $userNotesCount;
        return $this;
    }

    /**
    * Gets forceRemoveSourceBranch
    *  合入后删除源分支
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
    * @param bool|null $forceRemoveSourceBranch 合入后删除源分支
    *
    * @return $this
    */
    public function setForceRemoveSourceBranch($forceRemoveSourceBranch)
    {
        $this->container['forceRemoveSourceBranch'] = $forceRemoveSourceBranch;
        return $this;
    }

    /**
    * Gets webUrl
    *  主页url
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
    * @param string|null $webUrl 主页url
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets mergeRequestDiff
    *  mergeRequestDiff
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestDiffExternalDto|null
    */
    public function getMergeRequestDiff()
    {
        return $this->container['mergeRequestDiff'];
    }

    /**
    * Sets mergeRequestDiff
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestDiffExternalDto|null $mergeRequestDiff mergeRequestDiff
    *
    * @return $this
    */
    public function setMergeRequestDiff($mergeRequestDiff)
    {
        $this->container['mergeRequestDiff'] = $mergeRequestDiff;
        return $this;
    }

    /**
    * Gets mergeRequestReviewersCount
    *  评审人数量
    *
    * @return int|null
    */
    public function getMergeRequestReviewersCount()
    {
        return $this->container['mergeRequestReviewersCount'];
    }

    /**
    * Sets mergeRequestReviewersCount
    *
    * @param int|null $mergeRequestReviewersCount 评审人数量
    *
    * @return $this
    */
    public function setMergeRequestReviewersCount($mergeRequestReviewersCount)
    {
        $this->container['mergeRequestReviewersCount'] = $mergeRequestReviewersCount;
        return $this;
    }

    /**
    * Gets mergeRequestReviewCount
    *  打分
    *
    * @return int|null
    */
    public function getMergeRequestReviewCount()
    {
        return $this->container['mergeRequestReviewCount'];
    }

    /**
    * Sets mergeRequestReviewCount
    *
    * @param int|null $mergeRequestReviewCount 打分
    *
    * @return $this
    */
    public function setMergeRequestReviewCount($mergeRequestReviewCount)
    {
        $this->container['mergeRequestReviewCount'] = $mergeRequestReviewCount;
        return $this;
    }

    /**
    * Gets mergeRequestReviewerList
    *  评审人列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestReviewerExternalDto[]|null
    */
    public function getMergeRequestReviewerList()
    {
        return $this->container['mergeRequestReviewerList'];
    }

    /**
    * Sets mergeRequestReviewerList
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestReviewerExternalDto[]|null $mergeRequestReviewerList 评审人列表
    *
    * @return $this
    */
    public function setMergeRequestReviewerList($mergeRequestReviewerList)
    {
        $this->container['mergeRequestReviewerList'] = $mergeRequestReviewerList;
        return $this;
    }

    /**
    * Gets mergeRequestAssigneeList
    *  合并人列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto[]|null
    */
    public function getMergeRequestAssigneeList()
    {
        return $this->container['mergeRequestAssigneeList'];
    }

    /**
    * Sets mergeRequestAssigneeList
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicExternalDto[]|null $mergeRequestAssigneeList 合并人列表
    *
    * @return $this
    */
    public function setMergeRequestAssigneeList($mergeRequestAssigneeList)
    {
        $this->container['mergeRequestAssigneeList'] = $mergeRequestAssigneeList;
        return $this;
    }

    /**
    * Gets notes
    *  检视意见
    *
    * @return int|null
    */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
    * Sets notes
    *
    * @param int|null $notes 检视意见
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
        return $this;
    }

    /**
    * Gets codecheckState
    *  代码检查状态
    *
    * @return int|null
    */
    public function getCodecheckState()
    {
        return $this->container['codecheckState'];
    }

    /**
    * Sets codecheckState
    *
    * @param int|null $codecheckState 代码检查状态
    *
    * @return $this
    */
    public function setCodecheckState($codecheckState)
    {
        $this->container['codecheckState'] = $codecheckState;
        return $this;
    }

    /**
    * Gets codecheckDefectCount
    *  代码检查问题数
    *
    * @return int|null
    */
    public function getCodecheckDefectCount()
    {
        return $this->container['codecheckDefectCount'];
    }

    /**
    * Sets codecheckDefectCount
    *
    * @param int|null $codecheckDefectCount 代码检查问题数
    *
    * @return $this
    */
    public function setCodecheckDefectCount($codecheckDefectCount)
    {
        $this->container['codecheckDefectCount'] = $codecheckDefectCount;
        return $this;
    }

    /**
    * Gets mergeRequestRelatedWorkItems
    *  合并请求关联单数量
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestRelatedWorkItemDto[]|null
    */
    public function getMergeRequestRelatedWorkItems()
    {
        return $this->container['mergeRequestRelatedWorkItems'];
    }

    /**
    * Sets mergeRequestRelatedWorkItems
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestRelatedWorkItemDto[]|null $mergeRequestRelatedWorkItems 合并请求关联单数量
    *
    * @return $this
    */
    public function setMergeRequestRelatedWorkItems($mergeRequestRelatedWorkItems)
    {
        $this->container['mergeRequestRelatedWorkItems'] = $mergeRequestRelatedWorkItems;
        return $this;
    }

    /**
    * Gets divergedCommitsCount
    *  源分支落后commit数
    *
    * @return int|null
    */
    public function getDivergedCommitsCount()
    {
        return $this->container['divergedCommitsCount'];
    }

    /**
    * Sets divergedCommitsCount
    *
    * @param int|null $divergedCommitsCount 源分支落后commit数
    *
    * @return $this
    */
    public function setDivergedCommitsCount($divergedCommitsCount)
    {
        $this->container['divergedCommitsCount'] = $divergedCommitsCount;
        return $this;
    }

    /**
    * Gets moderationResult
    *  送审结果
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
    * @param bool|null $moderationResult 送审结果
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
    *  送审时间时间戳
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
    * @param int|null $moderationTime 送审时间时间戳
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
    *  送审状态码
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
    * @param int|null $moderationStatus 送审状态码
    *
    * @return $this
    */
    public function setModerationStatus($moderationStatus)
    {
        $this->container['moderationStatus'] = $moderationStatus;
        return $this;
    }

    /**
    * Gets isUseTempBranch
    *  是否使用临时分支
    *
    * @return bool|null
    */
    public function getIsUseTempBranch()
    {
        return $this->container['isUseTempBranch'];
    }

    /**
    * Sets isUseTempBranch
    *
    * @param bool|null $isUseTempBranch 是否使用临时分支
    *
    * @return $this
    */
    public function setIsUseTempBranch($isUseTempBranch)
    {
        $this->container['isUseTempBranch'] = $isUseTempBranch;
        return $this;
    }

    /**
    * Gets approvalMergeRequestApprovers
    *  审核人
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ApprovalUserDto[]|null
    */
    public function getApprovalMergeRequestApprovers()
    {
        return $this->container['approvalMergeRequestApprovers'];
    }

    /**
    * Sets approvalMergeRequestApprovers
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ApprovalUserDto[]|null $approvalMergeRequestApprovers 审核人
    *
    * @return $this
    */
    public function setApprovalMergeRequestApprovers($approvalMergeRequestApprovers)
    {
        $this->container['approvalMergeRequestApprovers'] = $approvalMergeRequestApprovers;
        return $this;
    }

    /**
    * Gets reviewMode
    *  合并请求模式
    *
    * @return string|null
    */
    public function getReviewMode()
    {
        return $this->container['reviewMode'];
    }

    /**
    * Sets reviewMode
    *
    * @param string|null $reviewMode 合并请求模式
    *
    * @return $this
    */
    public function setReviewMode($reviewMode)
    {
        $this->container['reviewMode'] = $reviewMode;
        return $this;
    }

    /**
    * Gets squash
    *  squash合入
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
    * @param bool|null $squash squash合入
    *
    * @return $this
    */
    public function setSquash($squash)
    {
        $this->container['squash'] = $squash;
        return $this;
    }

    /**
    * Gets squashCommitMessage
    *  squash提交信息
    *
    * @return string|null
    */
    public function getSquashCommitMessage()
    {
        return $this->container['squashCommitMessage'];
    }

    /**
    * Sets squashCommitMessage
    *
    * @param string|null $squashCommitMessage squash提交信息
    *
    * @return $this
    */
    public function setSquashCommitMessage($squashCommitMessage)
    {
        $this->container['squashCommitMessage'] = $squashCommitMessage;
        return $this;
    }

    /**
    * Gets rebaseInProgress
    *  是否正在rebase
    *
    * @return bool|null
    */
    public function getRebaseInProgress()
    {
        return $this->container['rebaseInProgress'];
    }

    /**
    * Sets rebaseInProgress
    *
    * @param bool|null $rebaseInProgress 是否正在rebase
    *
    * @return $this
    */
    public function setRebaseInProgress($rebaseInProgress)
    {
        $this->container['rebaseInProgress'] = $rebaseInProgress;
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

