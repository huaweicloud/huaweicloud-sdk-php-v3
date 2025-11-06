<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseMergeRequestChanges implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseMergeRequestChanges';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  合并请求id
    * iid  合并请求iid
    * projectId  仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  合并请求创建时间
    * updatedAt  合并请求更新时间
    * targetBranch  合并请求目标分支
    * sourceBranch  合并请求源分支
    * userNotesCount  检视意见数量
    * upvotes  upvotes
    * downvotes  downvotes
    * author  author
    * sourceProjectId  合并请求源仓库id
    * targetProjectId  合并请求目标仓库id
    * labels  指定仓库的标签列表
    * workInProgress  合并请求是否为wip状态
    * mergeWhenPipelineSucceeds  合并请求是否开启流水线成功后自动合入
    * mergeStatus  合并请求合入状态
    * sha  合并请求的head sha
    * shouldRemoveSourceBranch  合并请求合入后是否应该移除源分支
    * forceRemoveSourceBranch  合并请求合入后是否移除源分支
    * webUrl  合并请求url
    * squash  合并请求是否开启squash合并
    * mergeRequestType  合并请求类型
    * subscribed  是否订阅
    * changesCount  合并请求变更文件数量
    * latestBuildStartedAt  合并请求最新构建开始时间
    * latestBuildFinishedAt  合并请求最新构建结束时间
    * firstDeployedToProductionAt  first deployed to production at
    * pipeline  pipeline
    * diffRefs  diffRefs
    * mergeError  合并请求操作错误信息
    * rebaseInProgress  合并请求是否rebase中
    * divergedCommitsCount  合并请求落后提交数量
    * user  user
    * addedLines  合并请求增加行数
    * removedLines  合并请求删除行数
    * changes  合并请求文件变更
    * sourceProject  sourceProject
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'iid' => 'int',
            'projectId' => 'int',
            'title' => 'string',
            'description' => 'string',
            'state' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'targetBranch' => 'string',
            'sourceBranch' => 'string',
            'userNotesCount' => 'int',
            'upvotes' => 'int',
            'downvotes' => 'int',
            'author' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\Author',
            'sourceProjectId' => 'int',
            'targetProjectId' => 'int',
            'labels' => 'string[]',
            'workInProgress' => 'bool',
            'mergeWhenPipelineSucceeds' => 'bool',
            'mergeStatus' => 'string',
            'sha' => 'string',
            'shouldRemoveSourceBranch' => 'bool',
            'forceRemoveSourceBranch' => 'bool',
            'webUrl' => 'string',
            'squash' => 'bool',
            'mergeRequestType' => 'string',
            'subscribed' => 'bool',
            'changesCount' => 'string',
            'latestBuildStartedAt' => 'string',
            'latestBuildFinishedAt' => 'string',
            'firstDeployedToProductionAt' => 'string',
            'pipeline' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\PipelineBasicDto',
            'diffRefs' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DiffRefsDto',
            'mergeError' => 'string',
            'rebaseInProgress' => 'bool',
            'divergedCommitsCount' => 'int',
            'user' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestListDtoUser',
            'addedLines' => 'int',
            'removedLines' => 'int',
            'changes' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestDiffFileDto[]',
            'sourceProject' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ProjectSimpleDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  合并请求id
    * iid  合并请求iid
    * projectId  仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  合并请求创建时间
    * updatedAt  合并请求更新时间
    * targetBranch  合并请求目标分支
    * sourceBranch  合并请求源分支
    * userNotesCount  检视意见数量
    * upvotes  upvotes
    * downvotes  downvotes
    * author  author
    * sourceProjectId  合并请求源仓库id
    * targetProjectId  合并请求目标仓库id
    * labels  指定仓库的标签列表
    * workInProgress  合并请求是否为wip状态
    * mergeWhenPipelineSucceeds  合并请求是否开启流水线成功后自动合入
    * mergeStatus  合并请求合入状态
    * sha  合并请求的head sha
    * shouldRemoveSourceBranch  合并请求合入后是否应该移除源分支
    * forceRemoveSourceBranch  合并请求合入后是否移除源分支
    * webUrl  合并请求url
    * squash  合并请求是否开启squash合并
    * mergeRequestType  合并请求类型
    * subscribed  是否订阅
    * changesCount  合并请求变更文件数量
    * latestBuildStartedAt  合并请求最新构建开始时间
    * latestBuildFinishedAt  合并请求最新构建结束时间
    * firstDeployedToProductionAt  first deployed to production at
    * pipeline  pipeline
    * diffRefs  diffRefs
    * mergeError  合并请求操作错误信息
    * rebaseInProgress  合并请求是否rebase中
    * divergedCommitsCount  合并请求落后提交数量
    * user  user
    * addedLines  合并请求增加行数
    * removedLines  合并请求删除行数
    * changes  合并请求文件变更
    * sourceProject  sourceProject
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'iid' => null,
        'projectId' => null,
        'title' => null,
        'description' => null,
        'state' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'targetBranch' => null,
        'sourceBranch' => null,
        'userNotesCount' => null,
        'upvotes' => null,
        'downvotes' => null,
        'author' => null,
        'sourceProjectId' => null,
        'targetProjectId' => null,
        'labels' => null,
        'workInProgress' => null,
        'mergeWhenPipelineSucceeds' => null,
        'mergeStatus' => null,
        'sha' => null,
        'shouldRemoveSourceBranch' => null,
        'forceRemoveSourceBranch' => null,
        'webUrl' => null,
        'squash' => null,
        'mergeRequestType' => null,
        'subscribed' => null,
        'changesCount' => null,
        'latestBuildStartedAt' => null,
        'latestBuildFinishedAt' => null,
        'firstDeployedToProductionAt' => null,
        'pipeline' => null,
        'diffRefs' => null,
        'mergeError' => null,
        'rebaseInProgress' => null,
        'divergedCommitsCount' => null,
        'user' => null,
        'addedLines' => null,
        'removedLines' => null,
        'changes' => null,
        'sourceProject' => null
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
    * projectId  仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  合并请求创建时间
    * updatedAt  合并请求更新时间
    * targetBranch  合并请求目标分支
    * sourceBranch  合并请求源分支
    * userNotesCount  检视意见数量
    * upvotes  upvotes
    * downvotes  downvotes
    * author  author
    * sourceProjectId  合并请求源仓库id
    * targetProjectId  合并请求目标仓库id
    * labels  指定仓库的标签列表
    * workInProgress  合并请求是否为wip状态
    * mergeWhenPipelineSucceeds  合并请求是否开启流水线成功后自动合入
    * mergeStatus  合并请求合入状态
    * sha  合并请求的head sha
    * shouldRemoveSourceBranch  合并请求合入后是否应该移除源分支
    * forceRemoveSourceBranch  合并请求合入后是否移除源分支
    * webUrl  合并请求url
    * squash  合并请求是否开启squash合并
    * mergeRequestType  合并请求类型
    * subscribed  是否订阅
    * changesCount  合并请求变更文件数量
    * latestBuildStartedAt  合并请求最新构建开始时间
    * latestBuildFinishedAt  合并请求最新构建结束时间
    * firstDeployedToProductionAt  first deployed to production at
    * pipeline  pipeline
    * diffRefs  diffRefs
    * mergeError  合并请求操作错误信息
    * rebaseInProgress  合并请求是否rebase中
    * divergedCommitsCount  合并请求落后提交数量
    * user  user
    * addedLines  合并请求增加行数
    * removedLines  合并请求删除行数
    * changes  合并请求文件变更
    * sourceProject  sourceProject
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'iid' => 'iid',
            'projectId' => 'project_id',
            'title' => 'title',
            'description' => 'description',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'targetBranch' => 'target_branch',
            'sourceBranch' => 'source_branch',
            'userNotesCount' => 'user_notes_count',
            'upvotes' => 'upvotes',
            'downvotes' => 'downvotes',
            'author' => 'author',
            'sourceProjectId' => 'source_project_id',
            'targetProjectId' => 'target_project_id',
            'labels' => 'labels',
            'workInProgress' => 'work_in_progress',
            'mergeWhenPipelineSucceeds' => 'merge_when_pipeline_succeeds',
            'mergeStatus' => 'merge_status',
            'sha' => 'sha',
            'shouldRemoveSourceBranch' => 'should_remove_source_branch',
            'forceRemoveSourceBranch' => 'force_remove_source_branch',
            'webUrl' => 'web_url',
            'squash' => 'squash',
            'mergeRequestType' => 'merge_request_type',
            'subscribed' => 'subscribed',
            'changesCount' => 'changes_count',
            'latestBuildStartedAt' => 'latest_build_started_at',
            'latestBuildFinishedAt' => 'latest_build_finished_at',
            'firstDeployedToProductionAt' => 'first_deployed_to_production_at',
            'pipeline' => 'pipeline',
            'diffRefs' => 'diff_refs',
            'mergeError' => 'merge_error',
            'rebaseInProgress' => 'rebase_in_progress',
            'divergedCommitsCount' => 'diverged_commits_count',
            'user' => 'user',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines',
            'changes' => 'changes',
            'sourceProject' => 'source_project'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  合并请求id
    * iid  合并请求iid
    * projectId  仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  合并请求创建时间
    * updatedAt  合并请求更新时间
    * targetBranch  合并请求目标分支
    * sourceBranch  合并请求源分支
    * userNotesCount  检视意见数量
    * upvotes  upvotes
    * downvotes  downvotes
    * author  author
    * sourceProjectId  合并请求源仓库id
    * targetProjectId  合并请求目标仓库id
    * labels  指定仓库的标签列表
    * workInProgress  合并请求是否为wip状态
    * mergeWhenPipelineSucceeds  合并请求是否开启流水线成功后自动合入
    * mergeStatus  合并请求合入状态
    * sha  合并请求的head sha
    * shouldRemoveSourceBranch  合并请求合入后是否应该移除源分支
    * forceRemoveSourceBranch  合并请求合入后是否移除源分支
    * webUrl  合并请求url
    * squash  合并请求是否开启squash合并
    * mergeRequestType  合并请求类型
    * subscribed  是否订阅
    * changesCount  合并请求变更文件数量
    * latestBuildStartedAt  合并请求最新构建开始时间
    * latestBuildFinishedAt  合并请求最新构建结束时间
    * firstDeployedToProductionAt  first deployed to production at
    * pipeline  pipeline
    * diffRefs  diffRefs
    * mergeError  合并请求操作错误信息
    * rebaseInProgress  合并请求是否rebase中
    * divergedCommitsCount  合并请求落后提交数量
    * user  user
    * addedLines  合并请求增加行数
    * removedLines  合并请求删除行数
    * changes  合并请求文件变更
    * sourceProject  sourceProject
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'iid' => 'setIid',
            'projectId' => 'setProjectId',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'targetBranch' => 'setTargetBranch',
            'sourceBranch' => 'setSourceBranch',
            'userNotesCount' => 'setUserNotesCount',
            'upvotes' => 'setUpvotes',
            'downvotes' => 'setDownvotes',
            'author' => 'setAuthor',
            'sourceProjectId' => 'setSourceProjectId',
            'targetProjectId' => 'setTargetProjectId',
            'labels' => 'setLabels',
            'workInProgress' => 'setWorkInProgress',
            'mergeWhenPipelineSucceeds' => 'setMergeWhenPipelineSucceeds',
            'mergeStatus' => 'setMergeStatus',
            'sha' => 'setSha',
            'shouldRemoveSourceBranch' => 'setShouldRemoveSourceBranch',
            'forceRemoveSourceBranch' => 'setForceRemoveSourceBranch',
            'webUrl' => 'setWebUrl',
            'squash' => 'setSquash',
            'mergeRequestType' => 'setMergeRequestType',
            'subscribed' => 'setSubscribed',
            'changesCount' => 'setChangesCount',
            'latestBuildStartedAt' => 'setLatestBuildStartedAt',
            'latestBuildFinishedAt' => 'setLatestBuildFinishedAt',
            'firstDeployedToProductionAt' => 'setFirstDeployedToProductionAt',
            'pipeline' => 'setPipeline',
            'diffRefs' => 'setDiffRefs',
            'mergeError' => 'setMergeError',
            'rebaseInProgress' => 'setRebaseInProgress',
            'divergedCommitsCount' => 'setDivergedCommitsCount',
            'user' => 'setUser',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines',
            'changes' => 'setChanges',
            'sourceProject' => 'setSourceProject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  合并请求id
    * iid  合并请求iid
    * projectId  仓库id
    * title  合并请求标题
    * description  合并请求描述
    * state  合并请求状态
    * createdAt  合并请求创建时间
    * updatedAt  合并请求更新时间
    * targetBranch  合并请求目标分支
    * sourceBranch  合并请求源分支
    * userNotesCount  检视意见数量
    * upvotes  upvotes
    * downvotes  downvotes
    * author  author
    * sourceProjectId  合并请求源仓库id
    * targetProjectId  合并请求目标仓库id
    * labels  指定仓库的标签列表
    * workInProgress  合并请求是否为wip状态
    * mergeWhenPipelineSucceeds  合并请求是否开启流水线成功后自动合入
    * mergeStatus  合并请求合入状态
    * sha  合并请求的head sha
    * shouldRemoveSourceBranch  合并请求合入后是否应该移除源分支
    * forceRemoveSourceBranch  合并请求合入后是否移除源分支
    * webUrl  合并请求url
    * squash  合并请求是否开启squash合并
    * mergeRequestType  合并请求类型
    * subscribed  是否订阅
    * changesCount  合并请求变更文件数量
    * latestBuildStartedAt  合并请求最新构建开始时间
    * latestBuildFinishedAt  合并请求最新构建结束时间
    * firstDeployedToProductionAt  first deployed to production at
    * pipeline  pipeline
    * diffRefs  diffRefs
    * mergeError  合并请求操作错误信息
    * rebaseInProgress  合并请求是否rebase中
    * divergedCommitsCount  合并请求落后提交数量
    * user  user
    * addedLines  合并请求增加行数
    * removedLines  合并请求删除行数
    * changes  合并请求文件变更
    * sourceProject  sourceProject
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'iid' => 'getIid',
            'projectId' => 'getProjectId',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'targetBranch' => 'getTargetBranch',
            'sourceBranch' => 'getSourceBranch',
            'userNotesCount' => 'getUserNotesCount',
            'upvotes' => 'getUpvotes',
            'downvotes' => 'getDownvotes',
            'author' => 'getAuthor',
            'sourceProjectId' => 'getSourceProjectId',
            'targetProjectId' => 'getTargetProjectId',
            'labels' => 'getLabels',
            'workInProgress' => 'getWorkInProgress',
            'mergeWhenPipelineSucceeds' => 'getMergeWhenPipelineSucceeds',
            'mergeStatus' => 'getMergeStatus',
            'sha' => 'getSha',
            'shouldRemoveSourceBranch' => 'getShouldRemoveSourceBranch',
            'forceRemoveSourceBranch' => 'getForceRemoveSourceBranch',
            'webUrl' => 'getWebUrl',
            'squash' => 'getSquash',
            'mergeRequestType' => 'getMergeRequestType',
            'subscribed' => 'getSubscribed',
            'changesCount' => 'getChangesCount',
            'latestBuildStartedAt' => 'getLatestBuildStartedAt',
            'latestBuildFinishedAt' => 'getLatestBuildFinishedAt',
            'firstDeployedToProductionAt' => 'getFirstDeployedToProductionAt',
            'pipeline' => 'getPipeline',
            'diffRefs' => 'getDiffRefs',
            'mergeError' => 'getMergeError',
            'rebaseInProgress' => 'getRebaseInProgress',
            'divergedCommitsCount' => 'getDivergedCommitsCount',
            'user' => 'getUser',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines',
            'changes' => 'getChanges',
            'sourceProject' => 'getSourceProject'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['userNotesCount'] = isset($data['userNotesCount']) ? $data['userNotesCount'] : null;
        $this->container['upvotes'] = isset($data['upvotes']) ? $data['upvotes'] : null;
        $this->container['downvotes'] = isset($data['downvotes']) ? $data['downvotes'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['sourceProjectId'] = isset($data['sourceProjectId']) ? $data['sourceProjectId'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['workInProgress'] = isset($data['workInProgress']) ? $data['workInProgress'] : null;
        $this->container['mergeWhenPipelineSucceeds'] = isset($data['mergeWhenPipelineSucceeds']) ? $data['mergeWhenPipelineSucceeds'] : null;
        $this->container['mergeStatus'] = isset($data['mergeStatus']) ? $data['mergeStatus'] : null;
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['shouldRemoveSourceBranch'] = isset($data['shouldRemoveSourceBranch']) ? $data['shouldRemoveSourceBranch'] : null;
        $this->container['forceRemoveSourceBranch'] = isset($data['forceRemoveSourceBranch']) ? $data['forceRemoveSourceBranch'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['squash'] = isset($data['squash']) ? $data['squash'] : null;
        $this->container['mergeRequestType'] = isset($data['mergeRequestType']) ? $data['mergeRequestType'] : null;
        $this->container['subscribed'] = isset($data['subscribed']) ? $data['subscribed'] : null;
        $this->container['changesCount'] = isset($data['changesCount']) ? $data['changesCount'] : null;
        $this->container['latestBuildStartedAt'] = isset($data['latestBuildStartedAt']) ? $data['latestBuildStartedAt'] : null;
        $this->container['latestBuildFinishedAt'] = isset($data['latestBuildFinishedAt']) ? $data['latestBuildFinishedAt'] : null;
        $this->container['firstDeployedToProductionAt'] = isset($data['firstDeployedToProductionAt']) ? $data['firstDeployedToProductionAt'] : null;
        $this->container['pipeline'] = isset($data['pipeline']) ? $data['pipeline'] : null;
        $this->container['diffRefs'] = isset($data['diffRefs']) ? $data['diffRefs'] : null;
        $this->container['mergeError'] = isset($data['mergeError']) ? $data['mergeError'] : null;
        $this->container['rebaseInProgress'] = isset($data['rebaseInProgress']) ? $data['rebaseInProgress'] : null;
        $this->container['divergedCommitsCount'] = isset($data['divergedCommitsCount']) ? $data['divergedCommitsCount'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['sourceProject'] = isset($data['sourceProject']) ? $data['sourceProject'] : null;
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
    * Gets projectId
    *  仓库id
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId 仓库id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    *  合并请求创建时间
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
    * @param string|null $createdAt 合并请求创建时间
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
    *  合并请求更新时间
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
    * @param string|null $updatedAt 合并请求更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets targetBranch
    *  合并请求目标分支
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
    * @param string|null $targetBranch 合并请求目标分支
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
    *  合并请求源分支
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
    * @param string|null $sourceBranch 合并请求源分支
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
    * Gets upvotes
    *  upvotes
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
    * @param int|null $upvotes upvotes
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
    *  downvotes
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
    * @param int|null $downvotes downvotes
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
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\Author|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\Author|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets sourceProjectId
    *  合并请求源仓库id
    *
    * @return int|null
    */
    public function getSourceProjectId()
    {
        return $this->container['sourceProjectId'];
    }

    /**
    * Sets sourceProjectId
    *
    * @param int|null $sourceProjectId 合并请求源仓库id
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
    *  合并请求目标仓库id
    *
    * @return int|null
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param int|null $targetProjectId 合并请求目标仓库id
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
    *  指定仓库的标签列表
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
    * @param string[]|null $labels 指定仓库的标签列表
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
    *  合并请求是否为wip状态
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
    * @param bool|null $workInProgress 合并请求是否为wip状态
    *
    * @return $this
    */
    public function setWorkInProgress($workInProgress)
    {
        $this->container['workInProgress'] = $workInProgress;
        return $this;
    }

    /**
    * Gets mergeWhenPipelineSucceeds
    *  合并请求是否开启流水线成功后自动合入
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
    * @param bool|null $mergeWhenPipelineSucceeds 合并请求是否开启流水线成功后自动合入
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
    *  合并请求合入状态
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
    * @param string|null $mergeStatus 合并请求合入状态
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
    *  合并请求的head sha
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
    * @param string|null $sha 合并请求的head sha
    *
    * @return $this
    */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;
        return $this;
    }

    /**
    * Gets shouldRemoveSourceBranch
    *  合并请求合入后是否应该移除源分支
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
    * @param bool|null $shouldRemoveSourceBranch 合并请求合入后是否应该移除源分支
    *
    * @return $this
    */
    public function setShouldRemoveSourceBranch($shouldRemoveSourceBranch)
    {
        $this->container['shouldRemoveSourceBranch'] = $shouldRemoveSourceBranch;
        return $this;
    }

    /**
    * Gets forceRemoveSourceBranch
    *  合并请求合入后是否移除源分支
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
    * @param bool|null $forceRemoveSourceBranch 合并请求合入后是否移除源分支
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
    *  合并请求url
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
    * @param string|null $webUrl 合并请求url
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets squash
    *  合并请求是否开启squash合并
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
    * @param bool|null $squash 合并请求是否开启squash合并
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
    *  合并请求类型
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
    * @param string|null $mergeRequestType 合并请求类型
    *
    * @return $this
    */
    public function setMergeRequestType($mergeRequestType)
    {
        $this->container['mergeRequestType'] = $mergeRequestType;
        return $this;
    }

    /**
    * Gets subscribed
    *  是否订阅
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
    * @param bool|null $subscribed 是否订阅
    *
    * @return $this
    */
    public function setSubscribed($subscribed)
    {
        $this->container['subscribed'] = $subscribed;
        return $this;
    }

    /**
    * Gets changesCount
    *  合并请求变更文件数量
    *
    * @return string|null
    */
    public function getChangesCount()
    {
        return $this->container['changesCount'];
    }

    /**
    * Sets changesCount
    *
    * @param string|null $changesCount 合并请求变更文件数量
    *
    * @return $this
    */
    public function setChangesCount($changesCount)
    {
        $this->container['changesCount'] = $changesCount;
        return $this;
    }

    /**
    * Gets latestBuildStartedAt
    *  合并请求最新构建开始时间
    *
    * @return string|null
    */
    public function getLatestBuildStartedAt()
    {
        return $this->container['latestBuildStartedAt'];
    }

    /**
    * Sets latestBuildStartedAt
    *
    * @param string|null $latestBuildStartedAt 合并请求最新构建开始时间
    *
    * @return $this
    */
    public function setLatestBuildStartedAt($latestBuildStartedAt)
    {
        $this->container['latestBuildStartedAt'] = $latestBuildStartedAt;
        return $this;
    }

    /**
    * Gets latestBuildFinishedAt
    *  合并请求最新构建结束时间
    *
    * @return string|null
    */
    public function getLatestBuildFinishedAt()
    {
        return $this->container['latestBuildFinishedAt'];
    }

    /**
    * Sets latestBuildFinishedAt
    *
    * @param string|null $latestBuildFinishedAt 合并请求最新构建结束时间
    *
    * @return $this
    */
    public function setLatestBuildFinishedAt($latestBuildFinishedAt)
    {
        $this->container['latestBuildFinishedAt'] = $latestBuildFinishedAt;
        return $this;
    }

    /**
    * Gets firstDeployedToProductionAt
    *  first deployed to production at
    *
    * @return string|null
    */
    public function getFirstDeployedToProductionAt()
    {
        return $this->container['firstDeployedToProductionAt'];
    }

    /**
    * Sets firstDeployedToProductionAt
    *
    * @param string|null $firstDeployedToProductionAt first deployed to production at
    *
    * @return $this
    */
    public function setFirstDeployedToProductionAt($firstDeployedToProductionAt)
    {
        $this->container['firstDeployedToProductionAt'] = $firstDeployedToProductionAt;
        return $this;
    }

    /**
    * Gets pipeline
    *  pipeline
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\PipelineBasicDto|null
    */
    public function getPipeline()
    {
        return $this->container['pipeline'];
    }

    /**
    * Sets pipeline
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\PipelineBasicDto|null $pipeline pipeline
    *
    * @return $this
    */
    public function setPipeline($pipeline)
    {
        $this->container['pipeline'] = $pipeline;
        return $this;
    }

    /**
    * Gets diffRefs
    *  diffRefs
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DiffRefsDto|null
    */
    public function getDiffRefs()
    {
        return $this->container['diffRefs'];
    }

    /**
    * Sets diffRefs
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\DiffRefsDto|null $diffRefs diffRefs
    *
    * @return $this
    */
    public function setDiffRefs($diffRefs)
    {
        $this->container['diffRefs'] = $diffRefs;
        return $this;
    }

    /**
    * Gets mergeError
    *  合并请求操作错误信息
    *
    * @return string|null
    */
    public function getMergeError()
    {
        return $this->container['mergeError'];
    }

    /**
    * Sets mergeError
    *
    * @param string|null $mergeError 合并请求操作错误信息
    *
    * @return $this
    */
    public function setMergeError($mergeError)
    {
        $this->container['mergeError'] = $mergeError;
        return $this;
    }

    /**
    * Gets rebaseInProgress
    *  合并请求是否rebase中
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
    * @param bool|null $rebaseInProgress 合并请求是否rebase中
    *
    * @return $this
    */
    public function setRebaseInProgress($rebaseInProgress)
    {
        $this->container['rebaseInProgress'] = $rebaseInProgress;
        return $this;
    }

    /**
    * Gets divergedCommitsCount
    *  合并请求落后提交数量
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
    * @param int|null $divergedCommitsCount 合并请求落后提交数量
    *
    * @return $this
    */
    public function setDivergedCommitsCount($divergedCommitsCount)
    {
        $this->container['divergedCommitsCount'] = $divergedCommitsCount;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestListDtoUser|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestListDtoUser|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets addedLines
    *  合并请求增加行数
    *
    * @return int|null
    */
    public function getAddedLines()
    {
        return $this->container['addedLines'];
    }

    /**
    * Sets addedLines
    *
    * @param int|null $addedLines 合并请求增加行数
    *
    * @return $this
    */
    public function setAddedLines($addedLines)
    {
        $this->container['addedLines'] = $addedLines;
        return $this;
    }

    /**
    * Gets removedLines
    *  合并请求删除行数
    *
    * @return int|null
    */
    public function getRemovedLines()
    {
        return $this->container['removedLines'];
    }

    /**
    * Sets removedLines
    *
    * @param int|null $removedLines 合并请求删除行数
    *
    * @return $this
    */
    public function setRemovedLines($removedLines)
    {
        $this->container['removedLines'] = $removedLines;
        return $this;
    }

    /**
    * Gets changes
    *  合并请求文件变更
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestDiffFileDto[]|null
    */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
    * Sets changes
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestDiffFileDto[]|null $changes 合并请求文件变更
    *
    * @return $this
    */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;
        return $this;
    }

    /**
    * Gets sourceProject
    *  sourceProject
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ProjectSimpleDto|null
    */
    public function getSourceProject()
    {
        return $this->container['sourceProject'];
    }

    /**
    * Sets sourceProject
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ProjectSimpleDto|null $sourceProject sourceProject
    *
    * @return $this
    */
    public function setSourceProject($sourceProject)
    {
        $this->container['sourceProject'] = $sourceProject;
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

