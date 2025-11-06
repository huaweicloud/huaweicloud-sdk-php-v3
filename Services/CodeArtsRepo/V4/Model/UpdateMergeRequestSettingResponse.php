<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMergeRequestSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMergeRequestSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 主键id
    * disableMergeBySelf  **参数解释：** 禁止合入自己创建的合并请求
    * disableApproveBySelf  **参数解释：** 禁止审核自己创建的合并请求
    * disableReviewBySelf  **参数解释：** 禁止检视自己创建的合并请求
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * canForceMerge  **参数解释：** 允许仓库管理员及项目经理强制合入
    * disableSquashMerge  **参数解释：** 禁止Squash合并（合入MR时禁止Squash合并）
    * mustRelateIssue  **参数解释：** 必须与CodeArts Req关联
    * needRelateIssueBranches  **参数解释：** 必须与CodeArts Req关联-选择目标分支配置合并请求策略(分支以逗号分支的字符串)
    * needAllIssuesCheckPassed  **参数解释：** 必须与CodeArts Req关联-所有E2E单号校验必须通过
    * reviewMode  **参数解释：** 合入模式
    * addNotesAfterMerged  **参数解释：** 允许合并请求合并或关闭后继续做代码检视和评论
    * mergedCommitAuthor  **参数解释：** merged_by：使用MR合入者生成Merge Commit created_by：使用MR创建者生成Merge Commit
    * evaluationRole  **参数解释：** 是否将星级评价作为合入门禁-参与星级评价角色。 29：勾选开发者 30：勾选开发者，Committer 35：勾选Committer 40：都不勾选
    * evaluationMergeGate  **参数解释：** 是否将星级评价作为合入门禁
    * markAutoMergedMrAsClosed  **参数解释：** 是否将自动合并的MR状态标记为关闭状态
    * deleteSourceBranchWhenMerged  **参数解释：** 新建合并请求，默认开启合并后删除源分支
    * autoSquashMerge  **参数解释：** 新建合并请求，默认开启Squash合并
    * squashMergeWithNoMergeCommit  **参数解释：** Squash合并不产生Merge节点
    * onlyAllowOneIssueCheckPassed  **参数解释：** 只能关联一个单号
    * enableCustomEvaluation  **参数解释：** 启用MR自定义评价维度分类（MR评价设置）
    * evaluationTypes  **参数解释：** 评价维度（MR评价设置）
    * canReopen  **参数解释：** 不能重新打开一个已经关闭的合并请求
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 评审问题全部解决才能合入
    * mergeMethod  **参数解释：** 合并模式。 merge：通过 Merge Commit 合并 rebase_merge：通过 Merge Commit 合并(记录半线性历史) ff：Fast-forward 合并
    * onlyAllowMergeIfVoteBiggerThan  **参数解释：** 打分模式最低合入分数。
    * onlyAssigneeCanMerge  **参数解释：** 仅合并人和合并合并请求。
    * repositoryId  **参数解释：** 仓库id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'disableMergeBySelf' => 'bool',
            'disableApproveBySelf' => 'bool',
            'disableReviewBySelf' => 'bool',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'canForceMerge' => 'bool',
            'disableSquashMerge' => 'bool',
            'mustRelateIssue' => 'bool',
            'needRelateIssueBranches' => 'string',
            'needAllIssuesCheckPassed' => 'bool',
            'reviewMode' => 'string',
            'addNotesAfterMerged' => 'bool',
            'mergedCommitAuthor' => 'string',
            'evaluationRole' => 'int',
            'evaluationMergeGate' => 'bool',
            'markAutoMergedMrAsClosed' => 'bool',
            'deleteSourceBranchWhenMerged' => 'bool',
            'autoSquashMerge' => 'bool',
            'squashMergeWithNoMergeCommit' => 'bool',
            'onlyAllowOneIssueCheckPassed' => 'bool',
            'enableCustomEvaluation' => 'bool',
            'evaluationTypes' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\EvaluationTypeDto[]',
            'canReopen' => 'bool',
            'onlyAllowMergeIfAllDiscussionsAreResolved' => 'bool',
            'mergeMethod' => 'string',
            'onlyAllowMergeIfVoteBiggerThan' => 'int',
            'onlyAssigneeCanMerge' => 'bool',
            'repositoryId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 主键id
    * disableMergeBySelf  **参数解释：** 禁止合入自己创建的合并请求
    * disableApproveBySelf  **参数解释：** 禁止审核自己创建的合并请求
    * disableReviewBySelf  **参数解释：** 禁止检视自己创建的合并请求
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * canForceMerge  **参数解释：** 允许仓库管理员及项目经理强制合入
    * disableSquashMerge  **参数解释：** 禁止Squash合并（合入MR时禁止Squash合并）
    * mustRelateIssue  **参数解释：** 必须与CodeArts Req关联
    * needRelateIssueBranches  **参数解释：** 必须与CodeArts Req关联-选择目标分支配置合并请求策略(分支以逗号分支的字符串)
    * needAllIssuesCheckPassed  **参数解释：** 必须与CodeArts Req关联-所有E2E单号校验必须通过
    * reviewMode  **参数解释：** 合入模式
    * addNotesAfterMerged  **参数解释：** 允许合并请求合并或关闭后继续做代码检视和评论
    * mergedCommitAuthor  **参数解释：** merged_by：使用MR合入者生成Merge Commit created_by：使用MR创建者生成Merge Commit
    * evaluationRole  **参数解释：** 是否将星级评价作为合入门禁-参与星级评价角色。 29：勾选开发者 30：勾选开发者，Committer 35：勾选Committer 40：都不勾选
    * evaluationMergeGate  **参数解释：** 是否将星级评价作为合入门禁
    * markAutoMergedMrAsClosed  **参数解释：** 是否将自动合并的MR状态标记为关闭状态
    * deleteSourceBranchWhenMerged  **参数解释：** 新建合并请求，默认开启合并后删除源分支
    * autoSquashMerge  **参数解释：** 新建合并请求，默认开启Squash合并
    * squashMergeWithNoMergeCommit  **参数解释：** Squash合并不产生Merge节点
    * onlyAllowOneIssueCheckPassed  **参数解释：** 只能关联一个单号
    * enableCustomEvaluation  **参数解释：** 启用MR自定义评价维度分类（MR评价设置）
    * evaluationTypes  **参数解释：** 评价维度（MR评价设置）
    * canReopen  **参数解释：** 不能重新打开一个已经关闭的合并请求
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 评审问题全部解决才能合入
    * mergeMethod  **参数解释：** 合并模式。 merge：通过 Merge Commit 合并 rebase_merge：通过 Merge Commit 合并(记录半线性历史) ff：Fast-forward 合并
    * onlyAllowMergeIfVoteBiggerThan  **参数解释：** 打分模式最低合入分数。
    * onlyAssigneeCanMerge  **参数解释：** 仅合并人和合并合并请求。
    * repositoryId  **参数解释：** 仓库id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'disableMergeBySelf' => null,
        'disableApproveBySelf' => null,
        'disableReviewBySelf' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'canForceMerge' => null,
        'disableSquashMerge' => null,
        'mustRelateIssue' => null,
        'needRelateIssueBranches' => null,
        'needAllIssuesCheckPassed' => null,
        'reviewMode' => null,
        'addNotesAfterMerged' => null,
        'mergedCommitAuthor' => null,
        'evaluationRole' => null,
        'evaluationMergeGate' => null,
        'markAutoMergedMrAsClosed' => null,
        'deleteSourceBranchWhenMerged' => null,
        'autoSquashMerge' => null,
        'squashMergeWithNoMergeCommit' => null,
        'onlyAllowOneIssueCheckPassed' => null,
        'enableCustomEvaluation' => null,
        'evaluationTypes' => null,
        'canReopen' => null,
        'onlyAllowMergeIfAllDiscussionsAreResolved' => null,
        'mergeMethod' => null,
        'onlyAllowMergeIfVoteBiggerThan' => 'int32',
        'onlyAssigneeCanMerge' => null,
        'repositoryId' => 'int32'
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
    * id  **参数解释：** 主键id
    * disableMergeBySelf  **参数解释：** 禁止合入自己创建的合并请求
    * disableApproveBySelf  **参数解释：** 禁止审核自己创建的合并请求
    * disableReviewBySelf  **参数解释：** 禁止检视自己创建的合并请求
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * canForceMerge  **参数解释：** 允许仓库管理员及项目经理强制合入
    * disableSquashMerge  **参数解释：** 禁止Squash合并（合入MR时禁止Squash合并）
    * mustRelateIssue  **参数解释：** 必须与CodeArts Req关联
    * needRelateIssueBranches  **参数解释：** 必须与CodeArts Req关联-选择目标分支配置合并请求策略(分支以逗号分支的字符串)
    * needAllIssuesCheckPassed  **参数解释：** 必须与CodeArts Req关联-所有E2E单号校验必须通过
    * reviewMode  **参数解释：** 合入模式
    * addNotesAfterMerged  **参数解释：** 允许合并请求合并或关闭后继续做代码检视和评论
    * mergedCommitAuthor  **参数解释：** merged_by：使用MR合入者生成Merge Commit created_by：使用MR创建者生成Merge Commit
    * evaluationRole  **参数解释：** 是否将星级评价作为合入门禁-参与星级评价角色。 29：勾选开发者 30：勾选开发者，Committer 35：勾选Committer 40：都不勾选
    * evaluationMergeGate  **参数解释：** 是否将星级评价作为合入门禁
    * markAutoMergedMrAsClosed  **参数解释：** 是否将自动合并的MR状态标记为关闭状态
    * deleteSourceBranchWhenMerged  **参数解释：** 新建合并请求，默认开启合并后删除源分支
    * autoSquashMerge  **参数解释：** 新建合并请求，默认开启Squash合并
    * squashMergeWithNoMergeCommit  **参数解释：** Squash合并不产生Merge节点
    * onlyAllowOneIssueCheckPassed  **参数解释：** 只能关联一个单号
    * enableCustomEvaluation  **参数解释：** 启用MR自定义评价维度分类（MR评价设置）
    * evaluationTypes  **参数解释：** 评价维度（MR评价设置）
    * canReopen  **参数解释：** 不能重新打开一个已经关闭的合并请求
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 评审问题全部解决才能合入
    * mergeMethod  **参数解释：** 合并模式。 merge：通过 Merge Commit 合并 rebase_merge：通过 Merge Commit 合并(记录半线性历史) ff：Fast-forward 合并
    * onlyAllowMergeIfVoteBiggerThan  **参数解释：** 打分模式最低合入分数。
    * onlyAssigneeCanMerge  **参数解释：** 仅合并人和合并合并请求。
    * repositoryId  **参数解释：** 仓库id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'disableMergeBySelf' => 'disable_merge_by_self',
            'disableApproveBySelf' => 'disable_approve_by_self',
            'disableReviewBySelf' => 'disable_review_by_self',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'canForceMerge' => 'can_force_merge',
            'disableSquashMerge' => 'disable_squash_merge',
            'mustRelateIssue' => 'must_relate_issue',
            'needRelateIssueBranches' => 'need_relate_issue_branches',
            'needAllIssuesCheckPassed' => 'need_all_issues_check_passed',
            'reviewMode' => 'review_mode',
            'addNotesAfterMerged' => 'add_notes_after_merged',
            'mergedCommitAuthor' => 'merged_commit_author',
            'evaluationRole' => 'evaluation_role',
            'evaluationMergeGate' => 'evaluation_merge_gate',
            'markAutoMergedMrAsClosed' => 'mark_auto_merged_mr_as_closed',
            'deleteSourceBranchWhenMerged' => 'delete_source_branch_when_merged',
            'autoSquashMerge' => 'auto_squash_merge',
            'squashMergeWithNoMergeCommit' => 'squash_merge_with_no_merge_commit',
            'onlyAllowOneIssueCheckPassed' => 'only_allow_one_issue_check_passed',
            'enableCustomEvaluation' => 'enable_custom_evaluation',
            'evaluationTypes' => 'evaluation_types',
            'canReopen' => 'can_reopen',
            'onlyAllowMergeIfAllDiscussionsAreResolved' => 'only_allow_merge_if_all_discussions_are_resolved',
            'mergeMethod' => 'merge_method',
            'onlyAllowMergeIfVoteBiggerThan' => 'only_allow_merge_if_vote_bigger_than',
            'onlyAssigneeCanMerge' => 'only_assignee_can_merge',
            'repositoryId' => 'repository_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 主键id
    * disableMergeBySelf  **参数解释：** 禁止合入自己创建的合并请求
    * disableApproveBySelf  **参数解释：** 禁止审核自己创建的合并请求
    * disableReviewBySelf  **参数解释：** 禁止检视自己创建的合并请求
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * canForceMerge  **参数解释：** 允许仓库管理员及项目经理强制合入
    * disableSquashMerge  **参数解释：** 禁止Squash合并（合入MR时禁止Squash合并）
    * mustRelateIssue  **参数解释：** 必须与CodeArts Req关联
    * needRelateIssueBranches  **参数解释：** 必须与CodeArts Req关联-选择目标分支配置合并请求策略(分支以逗号分支的字符串)
    * needAllIssuesCheckPassed  **参数解释：** 必须与CodeArts Req关联-所有E2E单号校验必须通过
    * reviewMode  **参数解释：** 合入模式
    * addNotesAfterMerged  **参数解释：** 允许合并请求合并或关闭后继续做代码检视和评论
    * mergedCommitAuthor  **参数解释：** merged_by：使用MR合入者生成Merge Commit created_by：使用MR创建者生成Merge Commit
    * evaluationRole  **参数解释：** 是否将星级评价作为合入门禁-参与星级评价角色。 29：勾选开发者 30：勾选开发者，Committer 35：勾选Committer 40：都不勾选
    * evaluationMergeGate  **参数解释：** 是否将星级评价作为合入门禁
    * markAutoMergedMrAsClosed  **参数解释：** 是否将自动合并的MR状态标记为关闭状态
    * deleteSourceBranchWhenMerged  **参数解释：** 新建合并请求，默认开启合并后删除源分支
    * autoSquashMerge  **参数解释：** 新建合并请求，默认开启Squash合并
    * squashMergeWithNoMergeCommit  **参数解释：** Squash合并不产生Merge节点
    * onlyAllowOneIssueCheckPassed  **参数解释：** 只能关联一个单号
    * enableCustomEvaluation  **参数解释：** 启用MR自定义评价维度分类（MR评价设置）
    * evaluationTypes  **参数解释：** 评价维度（MR评价设置）
    * canReopen  **参数解释：** 不能重新打开一个已经关闭的合并请求
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 评审问题全部解决才能合入
    * mergeMethod  **参数解释：** 合并模式。 merge：通过 Merge Commit 合并 rebase_merge：通过 Merge Commit 合并(记录半线性历史) ff：Fast-forward 合并
    * onlyAllowMergeIfVoteBiggerThan  **参数解释：** 打分模式最低合入分数。
    * onlyAssigneeCanMerge  **参数解释：** 仅合并人和合并合并请求。
    * repositoryId  **参数解释：** 仓库id。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'disableMergeBySelf' => 'setDisableMergeBySelf',
            'disableApproveBySelf' => 'setDisableApproveBySelf',
            'disableReviewBySelf' => 'setDisableReviewBySelf',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'canForceMerge' => 'setCanForceMerge',
            'disableSquashMerge' => 'setDisableSquashMerge',
            'mustRelateIssue' => 'setMustRelateIssue',
            'needRelateIssueBranches' => 'setNeedRelateIssueBranches',
            'needAllIssuesCheckPassed' => 'setNeedAllIssuesCheckPassed',
            'reviewMode' => 'setReviewMode',
            'addNotesAfterMerged' => 'setAddNotesAfterMerged',
            'mergedCommitAuthor' => 'setMergedCommitAuthor',
            'evaluationRole' => 'setEvaluationRole',
            'evaluationMergeGate' => 'setEvaluationMergeGate',
            'markAutoMergedMrAsClosed' => 'setMarkAutoMergedMrAsClosed',
            'deleteSourceBranchWhenMerged' => 'setDeleteSourceBranchWhenMerged',
            'autoSquashMerge' => 'setAutoSquashMerge',
            'squashMergeWithNoMergeCommit' => 'setSquashMergeWithNoMergeCommit',
            'onlyAllowOneIssueCheckPassed' => 'setOnlyAllowOneIssueCheckPassed',
            'enableCustomEvaluation' => 'setEnableCustomEvaluation',
            'evaluationTypes' => 'setEvaluationTypes',
            'canReopen' => 'setCanReopen',
            'onlyAllowMergeIfAllDiscussionsAreResolved' => 'setOnlyAllowMergeIfAllDiscussionsAreResolved',
            'mergeMethod' => 'setMergeMethod',
            'onlyAllowMergeIfVoteBiggerThan' => 'setOnlyAllowMergeIfVoteBiggerThan',
            'onlyAssigneeCanMerge' => 'setOnlyAssigneeCanMerge',
            'repositoryId' => 'setRepositoryId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 主键id
    * disableMergeBySelf  **参数解释：** 禁止合入自己创建的合并请求
    * disableApproveBySelf  **参数解释：** 禁止审核自己创建的合并请求
    * disableReviewBySelf  **参数解释：** 禁止检视自己创建的合并请求
    * createdAt  **参数解释：** 创建时间。
    * updatedAt  **参数解释：** 更新时间。
    * canForceMerge  **参数解释：** 允许仓库管理员及项目经理强制合入
    * disableSquashMerge  **参数解释：** 禁止Squash合并（合入MR时禁止Squash合并）
    * mustRelateIssue  **参数解释：** 必须与CodeArts Req关联
    * needRelateIssueBranches  **参数解释：** 必须与CodeArts Req关联-选择目标分支配置合并请求策略(分支以逗号分支的字符串)
    * needAllIssuesCheckPassed  **参数解释：** 必须与CodeArts Req关联-所有E2E单号校验必须通过
    * reviewMode  **参数解释：** 合入模式
    * addNotesAfterMerged  **参数解释：** 允许合并请求合并或关闭后继续做代码检视和评论
    * mergedCommitAuthor  **参数解释：** merged_by：使用MR合入者生成Merge Commit created_by：使用MR创建者生成Merge Commit
    * evaluationRole  **参数解释：** 是否将星级评价作为合入门禁-参与星级评价角色。 29：勾选开发者 30：勾选开发者，Committer 35：勾选Committer 40：都不勾选
    * evaluationMergeGate  **参数解释：** 是否将星级评价作为合入门禁
    * markAutoMergedMrAsClosed  **参数解释：** 是否将自动合并的MR状态标记为关闭状态
    * deleteSourceBranchWhenMerged  **参数解释：** 新建合并请求，默认开启合并后删除源分支
    * autoSquashMerge  **参数解释：** 新建合并请求，默认开启Squash合并
    * squashMergeWithNoMergeCommit  **参数解释：** Squash合并不产生Merge节点
    * onlyAllowOneIssueCheckPassed  **参数解释：** 只能关联一个单号
    * enableCustomEvaluation  **参数解释：** 启用MR自定义评价维度分类（MR评价设置）
    * evaluationTypes  **参数解释：** 评价维度（MR评价设置）
    * canReopen  **参数解释：** 不能重新打开一个已经关闭的合并请求
    * onlyAllowMergeIfAllDiscussionsAreResolved  **参数解释：** 评审问题全部解决才能合入
    * mergeMethod  **参数解释：** 合并模式。 merge：通过 Merge Commit 合并 rebase_merge：通过 Merge Commit 合并(记录半线性历史) ff：Fast-forward 合并
    * onlyAllowMergeIfVoteBiggerThan  **参数解释：** 打分模式最低合入分数。
    * onlyAssigneeCanMerge  **参数解释：** 仅合并人和合并合并请求。
    * repositoryId  **参数解释：** 仓库id。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'disableMergeBySelf' => 'getDisableMergeBySelf',
            'disableApproveBySelf' => 'getDisableApproveBySelf',
            'disableReviewBySelf' => 'getDisableReviewBySelf',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'canForceMerge' => 'getCanForceMerge',
            'disableSquashMerge' => 'getDisableSquashMerge',
            'mustRelateIssue' => 'getMustRelateIssue',
            'needRelateIssueBranches' => 'getNeedRelateIssueBranches',
            'needAllIssuesCheckPassed' => 'getNeedAllIssuesCheckPassed',
            'reviewMode' => 'getReviewMode',
            'addNotesAfterMerged' => 'getAddNotesAfterMerged',
            'mergedCommitAuthor' => 'getMergedCommitAuthor',
            'evaluationRole' => 'getEvaluationRole',
            'evaluationMergeGate' => 'getEvaluationMergeGate',
            'markAutoMergedMrAsClosed' => 'getMarkAutoMergedMrAsClosed',
            'deleteSourceBranchWhenMerged' => 'getDeleteSourceBranchWhenMerged',
            'autoSquashMerge' => 'getAutoSquashMerge',
            'squashMergeWithNoMergeCommit' => 'getSquashMergeWithNoMergeCommit',
            'onlyAllowOneIssueCheckPassed' => 'getOnlyAllowOneIssueCheckPassed',
            'enableCustomEvaluation' => 'getEnableCustomEvaluation',
            'evaluationTypes' => 'getEvaluationTypes',
            'canReopen' => 'getCanReopen',
            'onlyAllowMergeIfAllDiscussionsAreResolved' => 'getOnlyAllowMergeIfAllDiscussionsAreResolved',
            'mergeMethod' => 'getMergeMethod',
            'onlyAllowMergeIfVoteBiggerThan' => 'getOnlyAllowMergeIfVoteBiggerThan',
            'onlyAssigneeCanMerge' => 'getOnlyAssigneeCanMerge',
            'repositoryId' => 'getRepositoryId'
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
    const REVIEW_MODE_APPROVAL = 'approval';
    const REVIEW_MODE_VOTE = 'vote';
    const MERGED_COMMIT_AUTHOR_MERGED_BY = 'merged_by';
    const MERGED_COMMIT_AUTHOR_CREATED_BY = 'created_by';
    const EVALUATION_ROLE_29 = 29;
    const EVALUATION_ROLE_30 = 30;
    const EVALUATION_ROLE_35 = 35;
    const EVALUATION_ROLE_40 = 40;
    const MERGE_METHOD_MERGE = 'merge';
    const MERGE_METHOD_REBASE_MERGE = 'rebase_merge';
    const MERGE_METHOD_FF = 'ff';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReviewModeAllowableValues()
    {
        return [
            self::REVIEW_MODE_APPROVAL,
            self::REVIEW_MODE_VOTE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMergedCommitAuthorAllowableValues()
    {
        return [
            self::MERGED_COMMIT_AUTHOR_MERGED_BY,
            self::MERGED_COMMIT_AUTHOR_CREATED_BY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEvaluationRoleAllowableValues()
    {
        return [
            self::EVALUATION_ROLE_29,
            self::EVALUATION_ROLE_30,
            self::EVALUATION_ROLE_35,
            self::EVALUATION_ROLE_40,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMergeMethodAllowableValues()
    {
        return [
            self::MERGE_METHOD_MERGE,
            self::MERGE_METHOD_REBASE_MERGE,
            self::MERGE_METHOD_FF,
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
        $this->container['disableMergeBySelf'] = isset($data['disableMergeBySelf']) ? $data['disableMergeBySelf'] : null;
        $this->container['disableApproveBySelf'] = isset($data['disableApproveBySelf']) ? $data['disableApproveBySelf'] : null;
        $this->container['disableReviewBySelf'] = isset($data['disableReviewBySelf']) ? $data['disableReviewBySelf'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['canForceMerge'] = isset($data['canForceMerge']) ? $data['canForceMerge'] : null;
        $this->container['disableSquashMerge'] = isset($data['disableSquashMerge']) ? $data['disableSquashMerge'] : null;
        $this->container['mustRelateIssue'] = isset($data['mustRelateIssue']) ? $data['mustRelateIssue'] : null;
        $this->container['needRelateIssueBranches'] = isset($data['needRelateIssueBranches']) ? $data['needRelateIssueBranches'] : null;
        $this->container['needAllIssuesCheckPassed'] = isset($data['needAllIssuesCheckPassed']) ? $data['needAllIssuesCheckPassed'] : null;
        $this->container['reviewMode'] = isset($data['reviewMode']) ? $data['reviewMode'] : null;
        $this->container['addNotesAfterMerged'] = isset($data['addNotesAfterMerged']) ? $data['addNotesAfterMerged'] : null;
        $this->container['mergedCommitAuthor'] = isset($data['mergedCommitAuthor']) ? $data['mergedCommitAuthor'] : null;
        $this->container['evaluationRole'] = isset($data['evaluationRole']) ? $data['evaluationRole'] : null;
        $this->container['evaluationMergeGate'] = isset($data['evaluationMergeGate']) ? $data['evaluationMergeGate'] : null;
        $this->container['markAutoMergedMrAsClosed'] = isset($data['markAutoMergedMrAsClosed']) ? $data['markAutoMergedMrAsClosed'] : null;
        $this->container['deleteSourceBranchWhenMerged'] = isset($data['deleteSourceBranchWhenMerged']) ? $data['deleteSourceBranchWhenMerged'] : null;
        $this->container['autoSquashMerge'] = isset($data['autoSquashMerge']) ? $data['autoSquashMerge'] : null;
        $this->container['squashMergeWithNoMergeCommit'] = isset($data['squashMergeWithNoMergeCommit']) ? $data['squashMergeWithNoMergeCommit'] : null;
        $this->container['onlyAllowOneIssueCheckPassed'] = isset($data['onlyAllowOneIssueCheckPassed']) ? $data['onlyAllowOneIssueCheckPassed'] : null;
        $this->container['enableCustomEvaluation'] = isset($data['enableCustomEvaluation']) ? $data['enableCustomEvaluation'] : null;
        $this->container['evaluationTypes'] = isset($data['evaluationTypes']) ? $data['evaluationTypes'] : null;
        $this->container['canReopen'] = isset($data['canReopen']) ? $data['canReopen'] : null;
        $this->container['onlyAllowMergeIfAllDiscussionsAreResolved'] = isset($data['onlyAllowMergeIfAllDiscussionsAreResolved']) ? $data['onlyAllowMergeIfAllDiscussionsAreResolved'] : null;
        $this->container['mergeMethod'] = isset($data['mergeMethod']) ? $data['mergeMethod'] : null;
        $this->container['onlyAllowMergeIfVoteBiggerThan'] = isset($data['onlyAllowMergeIfVoteBiggerThan']) ? $data['onlyAllowMergeIfVoteBiggerThan'] : null;
        $this->container['onlyAssigneeCanMerge'] = isset($data['onlyAssigneeCanMerge']) ? $data['onlyAssigneeCanMerge'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
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
            $allowedValues = $this->getReviewModeAllowableValues();
                if (!is_null($this->container['reviewMode']) && !in_array($this->container['reviewMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reviewMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMergedCommitAuthorAllowableValues();
                if (!is_null($this->container['mergedCommitAuthor']) && !in_array($this->container['mergedCommitAuthor'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mergedCommitAuthor', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEvaluationRoleAllowableValues();
                if (!is_null($this->container['evaluationRole']) && !in_array($this->container['evaluationRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'evaluationRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMergeMethodAllowableValues();
                if (!is_null($this->container['mergeMethod']) && !in_array($this->container['mergeMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mergeMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['onlyAllowMergeIfVoteBiggerThan']) && ($this->container['onlyAllowMergeIfVoteBiggerThan'] > 5)) {
                $invalidProperties[] = "invalid value for 'onlyAllowMergeIfVoteBiggerThan', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['onlyAllowMergeIfVoteBiggerThan']) && ($this->container['onlyAllowMergeIfVoteBiggerThan'] < 0)) {
                $invalidProperties[] = "invalid value for 'onlyAllowMergeIfVoteBiggerThan', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
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
    *  **参数解释：** 主键id
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
    * @param int|null $id **参数解释：** 主键id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets disableMergeBySelf
    *  **参数解释：** 禁止合入自己创建的合并请求
    *
    * @return bool|null
    */
    public function getDisableMergeBySelf()
    {
        return $this->container['disableMergeBySelf'];
    }

    /**
    * Sets disableMergeBySelf
    *
    * @param bool|null $disableMergeBySelf **参数解释：** 禁止合入自己创建的合并请求
    *
    * @return $this
    */
    public function setDisableMergeBySelf($disableMergeBySelf)
    {
        $this->container['disableMergeBySelf'] = $disableMergeBySelf;
        return $this;
    }

    /**
    * Gets disableApproveBySelf
    *  **参数解释：** 禁止审核自己创建的合并请求
    *
    * @return bool|null
    */
    public function getDisableApproveBySelf()
    {
        return $this->container['disableApproveBySelf'];
    }

    /**
    * Sets disableApproveBySelf
    *
    * @param bool|null $disableApproveBySelf **参数解释：** 禁止审核自己创建的合并请求
    *
    * @return $this
    */
    public function setDisableApproveBySelf($disableApproveBySelf)
    {
        $this->container['disableApproveBySelf'] = $disableApproveBySelf;
        return $this;
    }

    /**
    * Gets disableReviewBySelf
    *  **参数解释：** 禁止检视自己创建的合并请求
    *
    * @return bool|null
    */
    public function getDisableReviewBySelf()
    {
        return $this->container['disableReviewBySelf'];
    }

    /**
    * Sets disableReviewBySelf
    *
    * @param bool|null $disableReviewBySelf **参数解释：** 禁止检视自己创建的合并请求
    *
    * @return $this
    */
    public function setDisableReviewBySelf($disableReviewBySelf)
    {
        $this->container['disableReviewBySelf'] = $disableReviewBySelf;
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
    * Gets canForceMerge
    *  **参数解释：** 允许仓库管理员及项目经理强制合入
    *
    * @return bool|null
    */
    public function getCanForceMerge()
    {
        return $this->container['canForceMerge'];
    }

    /**
    * Sets canForceMerge
    *
    * @param bool|null $canForceMerge **参数解释：** 允许仓库管理员及项目经理强制合入
    *
    * @return $this
    */
    public function setCanForceMerge($canForceMerge)
    {
        $this->container['canForceMerge'] = $canForceMerge;
        return $this;
    }

    /**
    * Gets disableSquashMerge
    *  **参数解释：** 禁止Squash合并（合入MR时禁止Squash合并）
    *
    * @return bool|null
    */
    public function getDisableSquashMerge()
    {
        return $this->container['disableSquashMerge'];
    }

    /**
    * Sets disableSquashMerge
    *
    * @param bool|null $disableSquashMerge **参数解释：** 禁止Squash合并（合入MR时禁止Squash合并）
    *
    * @return $this
    */
    public function setDisableSquashMerge($disableSquashMerge)
    {
        $this->container['disableSquashMerge'] = $disableSquashMerge;
        return $this;
    }

    /**
    * Gets mustRelateIssue
    *  **参数解释：** 必须与CodeArts Req关联
    *
    * @return bool|null
    */
    public function getMustRelateIssue()
    {
        return $this->container['mustRelateIssue'];
    }

    /**
    * Sets mustRelateIssue
    *
    * @param bool|null $mustRelateIssue **参数解释：** 必须与CodeArts Req关联
    *
    * @return $this
    */
    public function setMustRelateIssue($mustRelateIssue)
    {
        $this->container['mustRelateIssue'] = $mustRelateIssue;
        return $this;
    }

    /**
    * Gets needRelateIssueBranches
    *  **参数解释：** 必须与CodeArts Req关联-选择目标分支配置合并请求策略(分支以逗号分支的字符串)
    *
    * @return string|null
    */
    public function getNeedRelateIssueBranches()
    {
        return $this->container['needRelateIssueBranches'];
    }

    /**
    * Sets needRelateIssueBranches
    *
    * @param string|null $needRelateIssueBranches **参数解释：** 必须与CodeArts Req关联-选择目标分支配置合并请求策略(分支以逗号分支的字符串)
    *
    * @return $this
    */
    public function setNeedRelateIssueBranches($needRelateIssueBranches)
    {
        $this->container['needRelateIssueBranches'] = $needRelateIssueBranches;
        return $this;
    }

    /**
    * Gets needAllIssuesCheckPassed
    *  **参数解释：** 必须与CodeArts Req关联-所有E2E单号校验必须通过
    *
    * @return bool|null
    */
    public function getNeedAllIssuesCheckPassed()
    {
        return $this->container['needAllIssuesCheckPassed'];
    }

    /**
    * Sets needAllIssuesCheckPassed
    *
    * @param bool|null $needAllIssuesCheckPassed **参数解释：** 必须与CodeArts Req关联-所有E2E单号校验必须通过
    *
    * @return $this
    */
    public function setNeedAllIssuesCheckPassed($needAllIssuesCheckPassed)
    {
        $this->container['needAllIssuesCheckPassed'] = $needAllIssuesCheckPassed;
        return $this;
    }

    /**
    * Gets reviewMode
    *  **参数解释：** 合入模式
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
    * @param string|null $reviewMode **参数解释：** 合入模式
    *
    * @return $this
    */
    public function setReviewMode($reviewMode)
    {
        $this->container['reviewMode'] = $reviewMode;
        return $this;
    }

    /**
    * Gets addNotesAfterMerged
    *  **参数解释：** 允许合并请求合并或关闭后继续做代码检视和评论
    *
    * @return bool|null
    */
    public function getAddNotesAfterMerged()
    {
        return $this->container['addNotesAfterMerged'];
    }

    /**
    * Sets addNotesAfterMerged
    *
    * @param bool|null $addNotesAfterMerged **参数解释：** 允许合并请求合并或关闭后继续做代码检视和评论
    *
    * @return $this
    */
    public function setAddNotesAfterMerged($addNotesAfterMerged)
    {
        $this->container['addNotesAfterMerged'] = $addNotesAfterMerged;
        return $this;
    }

    /**
    * Gets mergedCommitAuthor
    *  **参数解释：** merged_by：使用MR合入者生成Merge Commit created_by：使用MR创建者生成Merge Commit
    *
    * @return string|null
    */
    public function getMergedCommitAuthor()
    {
        return $this->container['mergedCommitAuthor'];
    }

    /**
    * Sets mergedCommitAuthor
    *
    * @param string|null $mergedCommitAuthor **参数解释：** merged_by：使用MR合入者生成Merge Commit created_by：使用MR创建者生成Merge Commit
    *
    * @return $this
    */
    public function setMergedCommitAuthor($mergedCommitAuthor)
    {
        $this->container['mergedCommitAuthor'] = $mergedCommitAuthor;
        return $this;
    }

    /**
    * Gets evaluationRole
    *  **参数解释：** 是否将星级评价作为合入门禁-参与星级评价角色。 29：勾选开发者 30：勾选开发者，Committer 35：勾选Committer 40：都不勾选
    *
    * @return int|null
    */
    public function getEvaluationRole()
    {
        return $this->container['evaluationRole'];
    }

    /**
    * Sets evaluationRole
    *
    * @param int|null $evaluationRole **参数解释：** 是否将星级评价作为合入门禁-参与星级评价角色。 29：勾选开发者 30：勾选开发者，Committer 35：勾选Committer 40：都不勾选
    *
    * @return $this
    */
    public function setEvaluationRole($evaluationRole)
    {
        $this->container['evaluationRole'] = $evaluationRole;
        return $this;
    }

    /**
    * Gets evaluationMergeGate
    *  **参数解释：** 是否将星级评价作为合入门禁
    *
    * @return bool|null
    */
    public function getEvaluationMergeGate()
    {
        return $this->container['evaluationMergeGate'];
    }

    /**
    * Sets evaluationMergeGate
    *
    * @param bool|null $evaluationMergeGate **参数解释：** 是否将星级评价作为合入门禁
    *
    * @return $this
    */
    public function setEvaluationMergeGate($evaluationMergeGate)
    {
        $this->container['evaluationMergeGate'] = $evaluationMergeGate;
        return $this;
    }

    /**
    * Gets markAutoMergedMrAsClosed
    *  **参数解释：** 是否将自动合并的MR状态标记为关闭状态
    *
    * @return bool|null
    */
    public function getMarkAutoMergedMrAsClosed()
    {
        return $this->container['markAutoMergedMrAsClosed'];
    }

    /**
    * Sets markAutoMergedMrAsClosed
    *
    * @param bool|null $markAutoMergedMrAsClosed **参数解释：** 是否将自动合并的MR状态标记为关闭状态
    *
    * @return $this
    */
    public function setMarkAutoMergedMrAsClosed($markAutoMergedMrAsClosed)
    {
        $this->container['markAutoMergedMrAsClosed'] = $markAutoMergedMrAsClosed;
        return $this;
    }

    /**
    * Gets deleteSourceBranchWhenMerged
    *  **参数解释：** 新建合并请求，默认开启合并后删除源分支
    *
    * @return bool|null
    */
    public function getDeleteSourceBranchWhenMerged()
    {
        return $this->container['deleteSourceBranchWhenMerged'];
    }

    /**
    * Sets deleteSourceBranchWhenMerged
    *
    * @param bool|null $deleteSourceBranchWhenMerged **参数解释：** 新建合并请求，默认开启合并后删除源分支
    *
    * @return $this
    */
    public function setDeleteSourceBranchWhenMerged($deleteSourceBranchWhenMerged)
    {
        $this->container['deleteSourceBranchWhenMerged'] = $deleteSourceBranchWhenMerged;
        return $this;
    }

    /**
    * Gets autoSquashMerge
    *  **参数解释：** 新建合并请求，默认开启Squash合并
    *
    * @return bool|null
    */
    public function getAutoSquashMerge()
    {
        return $this->container['autoSquashMerge'];
    }

    /**
    * Sets autoSquashMerge
    *
    * @param bool|null $autoSquashMerge **参数解释：** 新建合并请求，默认开启Squash合并
    *
    * @return $this
    */
    public function setAutoSquashMerge($autoSquashMerge)
    {
        $this->container['autoSquashMerge'] = $autoSquashMerge;
        return $this;
    }

    /**
    * Gets squashMergeWithNoMergeCommit
    *  **参数解释：** Squash合并不产生Merge节点
    *
    * @return bool|null
    */
    public function getSquashMergeWithNoMergeCommit()
    {
        return $this->container['squashMergeWithNoMergeCommit'];
    }

    /**
    * Sets squashMergeWithNoMergeCommit
    *
    * @param bool|null $squashMergeWithNoMergeCommit **参数解释：** Squash合并不产生Merge节点
    *
    * @return $this
    */
    public function setSquashMergeWithNoMergeCommit($squashMergeWithNoMergeCommit)
    {
        $this->container['squashMergeWithNoMergeCommit'] = $squashMergeWithNoMergeCommit;
        return $this;
    }

    /**
    * Gets onlyAllowOneIssueCheckPassed
    *  **参数解释：** 只能关联一个单号
    *
    * @return bool|null
    */
    public function getOnlyAllowOneIssueCheckPassed()
    {
        return $this->container['onlyAllowOneIssueCheckPassed'];
    }

    /**
    * Sets onlyAllowOneIssueCheckPassed
    *
    * @param bool|null $onlyAllowOneIssueCheckPassed **参数解释：** 只能关联一个单号
    *
    * @return $this
    */
    public function setOnlyAllowOneIssueCheckPassed($onlyAllowOneIssueCheckPassed)
    {
        $this->container['onlyAllowOneIssueCheckPassed'] = $onlyAllowOneIssueCheckPassed;
        return $this;
    }

    /**
    * Gets enableCustomEvaluation
    *  **参数解释：** 启用MR自定义评价维度分类（MR评价设置）
    *
    * @return bool|null
    */
    public function getEnableCustomEvaluation()
    {
        return $this->container['enableCustomEvaluation'];
    }

    /**
    * Sets enableCustomEvaluation
    *
    * @param bool|null $enableCustomEvaluation **参数解释：** 启用MR自定义评价维度分类（MR评价设置）
    *
    * @return $this
    */
    public function setEnableCustomEvaluation($enableCustomEvaluation)
    {
        $this->container['enableCustomEvaluation'] = $enableCustomEvaluation;
        return $this;
    }

    /**
    * Gets evaluationTypes
    *  **参数解释：** 评价维度（MR评价设置）
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\EvaluationTypeDto[]|null
    */
    public function getEvaluationTypes()
    {
        return $this->container['evaluationTypes'];
    }

    /**
    * Sets evaluationTypes
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\EvaluationTypeDto[]|null $evaluationTypes **参数解释：** 评价维度（MR评价设置）
    *
    * @return $this
    */
    public function setEvaluationTypes($evaluationTypes)
    {
        $this->container['evaluationTypes'] = $evaluationTypes;
        return $this;
    }

    /**
    * Gets canReopen
    *  **参数解释：** 不能重新打开一个已经关闭的合并请求
    *
    * @return bool|null
    */
    public function getCanReopen()
    {
        return $this->container['canReopen'];
    }

    /**
    * Sets canReopen
    *
    * @param bool|null $canReopen **参数解释：** 不能重新打开一个已经关闭的合并请求
    *
    * @return $this
    */
    public function setCanReopen($canReopen)
    {
        $this->container['canReopen'] = $canReopen;
        return $this;
    }

    /**
    * Gets onlyAllowMergeIfAllDiscussionsAreResolved
    *  **参数解释：** 评审问题全部解决才能合入
    *
    * @return bool|null
    */
    public function getOnlyAllowMergeIfAllDiscussionsAreResolved()
    {
        return $this->container['onlyAllowMergeIfAllDiscussionsAreResolved'];
    }

    /**
    * Sets onlyAllowMergeIfAllDiscussionsAreResolved
    *
    * @param bool|null $onlyAllowMergeIfAllDiscussionsAreResolved **参数解释：** 评审问题全部解决才能合入
    *
    * @return $this
    */
    public function setOnlyAllowMergeIfAllDiscussionsAreResolved($onlyAllowMergeIfAllDiscussionsAreResolved)
    {
        $this->container['onlyAllowMergeIfAllDiscussionsAreResolved'] = $onlyAllowMergeIfAllDiscussionsAreResolved;
        return $this;
    }

    /**
    * Gets mergeMethod
    *  **参数解释：** 合并模式。 merge：通过 Merge Commit 合并 rebase_merge：通过 Merge Commit 合并(记录半线性历史) ff：Fast-forward 合并
    *
    * @return string|null
    */
    public function getMergeMethod()
    {
        return $this->container['mergeMethod'];
    }

    /**
    * Sets mergeMethod
    *
    * @param string|null $mergeMethod **参数解释：** 合并模式。 merge：通过 Merge Commit 合并 rebase_merge：通过 Merge Commit 合并(记录半线性历史) ff：Fast-forward 合并
    *
    * @return $this
    */
    public function setMergeMethod($mergeMethod)
    {
        $this->container['mergeMethod'] = $mergeMethod;
        return $this;
    }

    /**
    * Gets onlyAllowMergeIfVoteBiggerThan
    *  **参数解释：** 打分模式最低合入分数。
    *
    * @return int|null
    */
    public function getOnlyAllowMergeIfVoteBiggerThan()
    {
        return $this->container['onlyAllowMergeIfVoteBiggerThan'];
    }

    /**
    * Sets onlyAllowMergeIfVoteBiggerThan
    *
    * @param int|null $onlyAllowMergeIfVoteBiggerThan **参数解释：** 打分模式最低合入分数。
    *
    * @return $this
    */
    public function setOnlyAllowMergeIfVoteBiggerThan($onlyAllowMergeIfVoteBiggerThan)
    {
        $this->container['onlyAllowMergeIfVoteBiggerThan'] = $onlyAllowMergeIfVoteBiggerThan;
        return $this;
    }

    /**
    * Gets onlyAssigneeCanMerge
    *  **参数解释：** 仅合并人和合并合并请求。
    *
    * @return bool|null
    */
    public function getOnlyAssigneeCanMerge()
    {
        return $this->container['onlyAssigneeCanMerge'];
    }

    /**
    * Sets onlyAssigneeCanMerge
    *
    * @param bool|null $onlyAssigneeCanMerge **参数解释：** 仅合并人和合并合并请求。
    *
    * @return $this
    */
    public function setOnlyAssigneeCanMerge($onlyAssigneeCanMerge)
    {
        $this->container['onlyAssigneeCanMerge'] = $onlyAssigneeCanMerge;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库id。
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
    * @param int|null $repositoryId **参数解释：** 仓库id。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
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

