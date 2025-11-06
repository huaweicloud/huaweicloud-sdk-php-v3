<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestListBasicDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestListBasicDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 合并请求ID。
    * iid  **参数解释：** 合并请求位于当前仓库序号。
    * title  **参数解释：** 合并请求标题。
    * sourceBranch  **参数解释：** 合并请求源分支。
    * targetBranch  **参数解释：** 合并请求目标分支。
    * state  **参数解释：** 合并请求状态。
    * createdAt  **参数解释：** 合并请求创建时间。
    * updatedAt  **参数解释：** 合并请求更新时间。
    * sourceRepositoryId  **参数解释：** 合并请求源仓库ID。
    * reviewMode  **参数解释：** 合并请求检视模式。
    * author  author
    * closedAt  **参数解释：** 合并请求关闭时间。
    * closedBy  closedBy
    * mergedAt  **参数解释：** 合并请求合并时间。
    * mergedBy  mergedBy
    * pipelineStatus  **参数解释：** 合并请求流水线状态。
    * codequalityStatus  **参数解释：** 合并请求代码质量状态。
    * pipelineStatusWithCodeQuality  **参数解释：** 合并请求流水线状态。
    * notes  **参数解释：** 合并请求检视意见。
    * sourceRepository  sourceRepository
    * targetRepository  targetRepository
    * webUrl  **参数解释：** 合并请求URL地址。
    * addedLines  **参数解释：** 合并请求新增代码行数。
    * removedLines  **参数解释：** 合并请求删除代码行数。
    * mergeRequestType  **参数解释：** 合并请求检视模式。
    * sourceGitUrl  **参数解释：** 合并请求git地址。
    * labels  **参数解释：** 合并请求标签。
    * score  **参数解释：** 合并请求分数。
    * minMergedScore  **参数解释：** 合并请求最小合入分数。
    * sourceProductId  **参数解释：** 合并请求源项目ID。
    * targetProductId  **参数解释：** 合并请求目标项目ID。
    * productName  **参数解释：** 合并请求项目名。
    * notesCount  notesCount
    * moderationResult  **参数解释：** 合并请求审核结果。
    * moderationTime  **参数解释：** 合并请求审核时间。
    * moderationStatus  **参数解释：** 合并请求审核状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'iid' => 'int',
            'title' => 'string',
            'sourceBranch' => 'string',
            'targetBranch' => 'string',
            'state' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'sourceRepositoryId' => 'int',
            'reviewMode' => 'string',
            'author' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'closedAt' => 'string',
            'closedBy' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'mergedAt' => 'string',
            'mergedBy' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'pipelineStatus' => 'string',
            'codequalityStatus' => 'string',
            'pipelineStatusWithCodeQuality' => 'string',
            'notes' => 'int',
            'sourceRepository' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ProjectSimpleDto',
            'targetRepository' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ProjectSimpleDto',
            'webUrl' => 'string',
            'addedLines' => 'int',
            'removedLines' => 'int',
            'mergeRequestType' => 'string',
            'sourceGitUrl' => 'string',
            'labels' => 'map[string,object][]',
            'score' => 'int',
            'minMergedScore' => 'int',
            'sourceProductId' => 'string',
            'targetProductId' => 'string',
            'productName' => 'string',
            'notesCount' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\NotesCountDto',
            'moderationResult' => 'bool',
            'moderationTime' => 'int',
            'moderationStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 合并请求ID。
    * iid  **参数解释：** 合并请求位于当前仓库序号。
    * title  **参数解释：** 合并请求标题。
    * sourceBranch  **参数解释：** 合并请求源分支。
    * targetBranch  **参数解释：** 合并请求目标分支。
    * state  **参数解释：** 合并请求状态。
    * createdAt  **参数解释：** 合并请求创建时间。
    * updatedAt  **参数解释：** 合并请求更新时间。
    * sourceRepositoryId  **参数解释：** 合并请求源仓库ID。
    * reviewMode  **参数解释：** 合并请求检视模式。
    * author  author
    * closedAt  **参数解释：** 合并请求关闭时间。
    * closedBy  closedBy
    * mergedAt  **参数解释：** 合并请求合并时间。
    * mergedBy  mergedBy
    * pipelineStatus  **参数解释：** 合并请求流水线状态。
    * codequalityStatus  **参数解释：** 合并请求代码质量状态。
    * pipelineStatusWithCodeQuality  **参数解释：** 合并请求流水线状态。
    * notes  **参数解释：** 合并请求检视意见。
    * sourceRepository  sourceRepository
    * targetRepository  targetRepository
    * webUrl  **参数解释：** 合并请求URL地址。
    * addedLines  **参数解释：** 合并请求新增代码行数。
    * removedLines  **参数解释：** 合并请求删除代码行数。
    * mergeRequestType  **参数解释：** 合并请求检视模式。
    * sourceGitUrl  **参数解释：** 合并请求git地址。
    * labels  **参数解释：** 合并请求标签。
    * score  **参数解释：** 合并请求分数。
    * minMergedScore  **参数解释：** 合并请求最小合入分数。
    * sourceProductId  **参数解释：** 合并请求源项目ID。
    * targetProductId  **参数解释：** 合并请求目标项目ID。
    * productName  **参数解释：** 合并请求项目名。
    * notesCount  notesCount
    * moderationResult  **参数解释：** 合并请求审核结果。
    * moderationTime  **参数解释：** 合并请求审核时间。
    * moderationStatus  **参数解释：** 合并请求审核状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'iid' => null,
        'title' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'state' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'sourceRepositoryId' => null,
        'reviewMode' => null,
        'author' => null,
        'closedAt' => null,
        'closedBy' => null,
        'mergedAt' => null,
        'mergedBy' => null,
        'pipelineStatus' => null,
        'codequalityStatus' => null,
        'pipelineStatusWithCodeQuality' => null,
        'notes' => null,
        'sourceRepository' => null,
        'targetRepository' => null,
        'webUrl' => null,
        'addedLines' => null,
        'removedLines' => null,
        'mergeRequestType' => null,
        'sourceGitUrl' => null,
        'labels' => null,
        'score' => null,
        'minMergedScore' => null,
        'sourceProductId' => null,
        'targetProductId' => null,
        'productName' => null,
        'notesCount' => null,
        'moderationResult' => null,
        'moderationTime' => 'int64',
        'moderationStatus' => null
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
    * id  **参数解释：** 合并请求ID。
    * iid  **参数解释：** 合并请求位于当前仓库序号。
    * title  **参数解释：** 合并请求标题。
    * sourceBranch  **参数解释：** 合并请求源分支。
    * targetBranch  **参数解释：** 合并请求目标分支。
    * state  **参数解释：** 合并请求状态。
    * createdAt  **参数解释：** 合并请求创建时间。
    * updatedAt  **参数解释：** 合并请求更新时间。
    * sourceRepositoryId  **参数解释：** 合并请求源仓库ID。
    * reviewMode  **参数解释：** 合并请求检视模式。
    * author  author
    * closedAt  **参数解释：** 合并请求关闭时间。
    * closedBy  closedBy
    * mergedAt  **参数解释：** 合并请求合并时间。
    * mergedBy  mergedBy
    * pipelineStatus  **参数解释：** 合并请求流水线状态。
    * codequalityStatus  **参数解释：** 合并请求代码质量状态。
    * pipelineStatusWithCodeQuality  **参数解释：** 合并请求流水线状态。
    * notes  **参数解释：** 合并请求检视意见。
    * sourceRepository  sourceRepository
    * targetRepository  targetRepository
    * webUrl  **参数解释：** 合并请求URL地址。
    * addedLines  **参数解释：** 合并请求新增代码行数。
    * removedLines  **参数解释：** 合并请求删除代码行数。
    * mergeRequestType  **参数解释：** 合并请求检视模式。
    * sourceGitUrl  **参数解释：** 合并请求git地址。
    * labels  **参数解释：** 合并请求标签。
    * score  **参数解释：** 合并请求分数。
    * minMergedScore  **参数解释：** 合并请求最小合入分数。
    * sourceProductId  **参数解释：** 合并请求源项目ID。
    * targetProductId  **参数解释：** 合并请求目标项目ID。
    * productName  **参数解释：** 合并请求项目名。
    * notesCount  notesCount
    * moderationResult  **参数解释：** 合并请求审核结果。
    * moderationTime  **参数解释：** 合并请求审核时间。
    * moderationStatus  **参数解释：** 合并请求审核状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'iid' => 'iid',
            'title' => 'title',
            'sourceBranch' => 'source_branch',
            'targetBranch' => 'target_branch',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'sourceRepositoryId' => 'source_repository_id',
            'reviewMode' => 'review_mode',
            'author' => 'author',
            'closedAt' => 'closed_at',
            'closedBy' => 'closed_by',
            'mergedAt' => 'merged_at',
            'mergedBy' => 'merged_by',
            'pipelineStatus' => 'pipeline_status',
            'codequalityStatus' => 'codequality_status',
            'pipelineStatusWithCodeQuality' => 'pipeline_status_with_code_quality',
            'notes' => 'notes',
            'sourceRepository' => 'source_repository',
            'targetRepository' => 'target_repository',
            'webUrl' => 'web_url',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines',
            'mergeRequestType' => 'merge_request_type',
            'sourceGitUrl' => 'source_git_url',
            'labels' => 'labels',
            'score' => 'score',
            'minMergedScore' => 'min_merged_score',
            'sourceProductId' => 'source_product_id',
            'targetProductId' => 'target_product_id',
            'productName' => 'product_name',
            'notesCount' => 'notes_count',
            'moderationResult' => 'moderation_result',
            'moderationTime' => 'moderation_time',
            'moderationStatus' => 'moderation_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 合并请求ID。
    * iid  **参数解释：** 合并请求位于当前仓库序号。
    * title  **参数解释：** 合并请求标题。
    * sourceBranch  **参数解释：** 合并请求源分支。
    * targetBranch  **参数解释：** 合并请求目标分支。
    * state  **参数解释：** 合并请求状态。
    * createdAt  **参数解释：** 合并请求创建时间。
    * updatedAt  **参数解释：** 合并请求更新时间。
    * sourceRepositoryId  **参数解释：** 合并请求源仓库ID。
    * reviewMode  **参数解释：** 合并请求检视模式。
    * author  author
    * closedAt  **参数解释：** 合并请求关闭时间。
    * closedBy  closedBy
    * mergedAt  **参数解释：** 合并请求合并时间。
    * mergedBy  mergedBy
    * pipelineStatus  **参数解释：** 合并请求流水线状态。
    * codequalityStatus  **参数解释：** 合并请求代码质量状态。
    * pipelineStatusWithCodeQuality  **参数解释：** 合并请求流水线状态。
    * notes  **参数解释：** 合并请求检视意见。
    * sourceRepository  sourceRepository
    * targetRepository  targetRepository
    * webUrl  **参数解释：** 合并请求URL地址。
    * addedLines  **参数解释：** 合并请求新增代码行数。
    * removedLines  **参数解释：** 合并请求删除代码行数。
    * mergeRequestType  **参数解释：** 合并请求检视模式。
    * sourceGitUrl  **参数解释：** 合并请求git地址。
    * labels  **参数解释：** 合并请求标签。
    * score  **参数解释：** 合并请求分数。
    * minMergedScore  **参数解释：** 合并请求最小合入分数。
    * sourceProductId  **参数解释：** 合并请求源项目ID。
    * targetProductId  **参数解释：** 合并请求目标项目ID。
    * productName  **参数解释：** 合并请求项目名。
    * notesCount  notesCount
    * moderationResult  **参数解释：** 合并请求审核结果。
    * moderationTime  **参数解释：** 合并请求审核时间。
    * moderationStatus  **参数解释：** 合并请求审核状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'iid' => 'setIid',
            'title' => 'setTitle',
            'sourceBranch' => 'setSourceBranch',
            'targetBranch' => 'setTargetBranch',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'sourceRepositoryId' => 'setSourceRepositoryId',
            'reviewMode' => 'setReviewMode',
            'author' => 'setAuthor',
            'closedAt' => 'setClosedAt',
            'closedBy' => 'setClosedBy',
            'mergedAt' => 'setMergedAt',
            'mergedBy' => 'setMergedBy',
            'pipelineStatus' => 'setPipelineStatus',
            'codequalityStatus' => 'setCodequalityStatus',
            'pipelineStatusWithCodeQuality' => 'setPipelineStatusWithCodeQuality',
            'notes' => 'setNotes',
            'sourceRepository' => 'setSourceRepository',
            'targetRepository' => 'setTargetRepository',
            'webUrl' => 'setWebUrl',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines',
            'mergeRequestType' => 'setMergeRequestType',
            'sourceGitUrl' => 'setSourceGitUrl',
            'labels' => 'setLabels',
            'score' => 'setScore',
            'minMergedScore' => 'setMinMergedScore',
            'sourceProductId' => 'setSourceProductId',
            'targetProductId' => 'setTargetProductId',
            'productName' => 'setProductName',
            'notesCount' => 'setNotesCount',
            'moderationResult' => 'setModerationResult',
            'moderationTime' => 'setModerationTime',
            'moderationStatus' => 'setModerationStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 合并请求ID。
    * iid  **参数解释：** 合并请求位于当前仓库序号。
    * title  **参数解释：** 合并请求标题。
    * sourceBranch  **参数解释：** 合并请求源分支。
    * targetBranch  **参数解释：** 合并请求目标分支。
    * state  **参数解释：** 合并请求状态。
    * createdAt  **参数解释：** 合并请求创建时间。
    * updatedAt  **参数解释：** 合并请求更新时间。
    * sourceRepositoryId  **参数解释：** 合并请求源仓库ID。
    * reviewMode  **参数解释：** 合并请求检视模式。
    * author  author
    * closedAt  **参数解释：** 合并请求关闭时间。
    * closedBy  closedBy
    * mergedAt  **参数解释：** 合并请求合并时间。
    * mergedBy  mergedBy
    * pipelineStatus  **参数解释：** 合并请求流水线状态。
    * codequalityStatus  **参数解释：** 合并请求代码质量状态。
    * pipelineStatusWithCodeQuality  **参数解释：** 合并请求流水线状态。
    * notes  **参数解释：** 合并请求检视意见。
    * sourceRepository  sourceRepository
    * targetRepository  targetRepository
    * webUrl  **参数解释：** 合并请求URL地址。
    * addedLines  **参数解释：** 合并请求新增代码行数。
    * removedLines  **参数解释：** 合并请求删除代码行数。
    * mergeRequestType  **参数解释：** 合并请求检视模式。
    * sourceGitUrl  **参数解释：** 合并请求git地址。
    * labels  **参数解释：** 合并请求标签。
    * score  **参数解释：** 合并请求分数。
    * minMergedScore  **参数解释：** 合并请求最小合入分数。
    * sourceProductId  **参数解释：** 合并请求源项目ID。
    * targetProductId  **参数解释：** 合并请求目标项目ID。
    * productName  **参数解释：** 合并请求项目名。
    * notesCount  notesCount
    * moderationResult  **参数解释：** 合并请求审核结果。
    * moderationTime  **参数解释：** 合并请求审核时间。
    * moderationStatus  **参数解释：** 合并请求审核状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'iid' => 'getIid',
            'title' => 'getTitle',
            'sourceBranch' => 'getSourceBranch',
            'targetBranch' => 'getTargetBranch',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'sourceRepositoryId' => 'getSourceRepositoryId',
            'reviewMode' => 'getReviewMode',
            'author' => 'getAuthor',
            'closedAt' => 'getClosedAt',
            'closedBy' => 'getClosedBy',
            'mergedAt' => 'getMergedAt',
            'mergedBy' => 'getMergedBy',
            'pipelineStatus' => 'getPipelineStatus',
            'codequalityStatus' => 'getCodequalityStatus',
            'pipelineStatusWithCodeQuality' => 'getPipelineStatusWithCodeQuality',
            'notes' => 'getNotes',
            'sourceRepository' => 'getSourceRepository',
            'targetRepository' => 'getTargetRepository',
            'webUrl' => 'getWebUrl',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines',
            'mergeRequestType' => 'getMergeRequestType',
            'sourceGitUrl' => 'getSourceGitUrl',
            'labels' => 'getLabels',
            'score' => 'getScore',
            'minMergedScore' => 'getMinMergedScore',
            'sourceProductId' => 'getSourceProductId',
            'targetProductId' => 'getTargetProductId',
            'productName' => 'getProductName',
            'notesCount' => 'getNotesCount',
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
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['sourceRepositoryId'] = isset($data['sourceRepositoryId']) ? $data['sourceRepositoryId'] : null;
        $this->container['reviewMode'] = isset($data['reviewMode']) ? $data['reviewMode'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['closedAt'] = isset($data['closedAt']) ? $data['closedAt'] : null;
        $this->container['closedBy'] = isset($data['closedBy']) ? $data['closedBy'] : null;
        $this->container['mergedAt'] = isset($data['mergedAt']) ? $data['mergedAt'] : null;
        $this->container['mergedBy'] = isset($data['mergedBy']) ? $data['mergedBy'] : null;
        $this->container['pipelineStatus'] = isset($data['pipelineStatus']) ? $data['pipelineStatus'] : null;
        $this->container['codequalityStatus'] = isset($data['codequalityStatus']) ? $data['codequalityStatus'] : null;
        $this->container['pipelineStatusWithCodeQuality'] = isset($data['pipelineStatusWithCodeQuality']) ? $data['pipelineStatusWithCodeQuality'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['sourceRepository'] = isset($data['sourceRepository']) ? $data['sourceRepository'] : null;
        $this->container['targetRepository'] = isset($data['targetRepository']) ? $data['targetRepository'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
        $this->container['mergeRequestType'] = isset($data['mergeRequestType']) ? $data['mergeRequestType'] : null;
        $this->container['sourceGitUrl'] = isset($data['sourceGitUrl']) ? $data['sourceGitUrl'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['minMergedScore'] = isset($data['minMergedScore']) ? $data['minMergedScore'] : null;
        $this->container['sourceProductId'] = isset($data['sourceProductId']) ? $data['sourceProductId'] : null;
        $this->container['targetProductId'] = isset($data['targetProductId']) ? $data['targetProductId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['notesCount'] = isset($data['notesCount']) ? $data['notesCount'] : null;
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
    *  **参数解释：** 合并请求ID。
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
    * @param int|null $id **参数解释：** 合并请求ID。
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
    *  **参数解释：** 合并请求位于当前仓库序号。
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
    * @param int|null $iid **参数解释：** 合并请求位于当前仓库序号。
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
    *  **参数解释：** 合并请求标题。
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
    * @param string|null $title **参数解释：** 合并请求标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  **参数解释：** 合并请求源分支。
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
    * @param string|null $sourceBranch **参数解释：** 合并请求源分支。
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
    *  **参数解释：** 合并请求目标分支。
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
    * @param string|null $targetBranch **参数解释：** 合并请求目标分支。
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 合并请求状态。
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
    * @param string|null $state **参数解释：** 合并请求状态。
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
    *  **参数解释：** 合并请求创建时间。
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
    * @param string|null $createdAt **参数解释：** 合并请求创建时间。
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
    *  **参数解释：** 合并请求更新时间。
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
    * @param string|null $updatedAt **参数解释：** 合并请求更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets sourceRepositoryId
    *  **参数解释：** 合并请求源仓库ID。
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
    * @param int|null $sourceRepositoryId **参数解释：** 合并请求源仓库ID。
    *
    * @return $this
    */
    public function setSourceRepositoryId($sourceRepositoryId)
    {
        $this->container['sourceRepositoryId'] = $sourceRepositoryId;
        return $this;
    }

    /**
    * Gets reviewMode
    *  **参数解释：** 合并请求检视模式。
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
    * @param string|null $reviewMode **参数解释：** 合并请求检视模式。
    *
    * @return $this
    */
    public function setReviewMode($reviewMode)
    {
        $this->container['reviewMode'] = $reviewMode;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets closedAt
    *  **参数解释：** 合并请求关闭时间。
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
    * @param string|null $closedAt **参数解释：** 合并请求关闭时间。
    *
    * @return $this
    */
    public function setClosedAt($closedAt)
    {
        $this->container['closedAt'] = $closedAt;
        return $this;
    }

    /**
    * Gets closedBy
    *  closedBy
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null
    */
    public function getClosedBy()
    {
        return $this->container['closedBy'];
    }

    /**
    * Sets closedBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null $closedBy closedBy
    *
    * @return $this
    */
    public function setClosedBy($closedBy)
    {
        $this->container['closedBy'] = $closedBy;
        return $this;
    }

    /**
    * Gets mergedAt
    *  **参数解释：** 合并请求合并时间。
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
    * @param string|null $mergedAt **参数解释：** 合并请求合并时间。
    *
    * @return $this
    */
    public function setMergedAt($mergedAt)
    {
        $this->container['mergedAt'] = $mergedAt;
        return $this;
    }

    /**
    * Gets mergedBy
    *  mergedBy
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null
    */
    public function getMergedBy()
    {
        return $this->container['mergedBy'];
    }

    /**
    * Sets mergedBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null $mergedBy mergedBy
    *
    * @return $this
    */
    public function setMergedBy($mergedBy)
    {
        $this->container['mergedBy'] = $mergedBy;
        return $this;
    }

    /**
    * Gets pipelineStatus
    *  **参数解释：** 合并请求流水线状态。
    *
    * @return string|null
    */
    public function getPipelineStatus()
    {
        return $this->container['pipelineStatus'];
    }

    /**
    * Sets pipelineStatus
    *
    * @param string|null $pipelineStatus **参数解释：** 合并请求流水线状态。
    *
    * @return $this
    */
    public function setPipelineStatus($pipelineStatus)
    {
        $this->container['pipelineStatus'] = $pipelineStatus;
        return $this;
    }

    /**
    * Gets codequalityStatus
    *  **参数解释：** 合并请求代码质量状态。
    *
    * @return string|null
    */
    public function getCodequalityStatus()
    {
        return $this->container['codequalityStatus'];
    }

    /**
    * Sets codequalityStatus
    *
    * @param string|null $codequalityStatus **参数解释：** 合并请求代码质量状态。
    *
    * @return $this
    */
    public function setCodequalityStatus($codequalityStatus)
    {
        $this->container['codequalityStatus'] = $codequalityStatus;
        return $this;
    }

    /**
    * Gets pipelineStatusWithCodeQuality
    *  **参数解释：** 合并请求流水线状态。
    *
    * @return string|null
    */
    public function getPipelineStatusWithCodeQuality()
    {
        return $this->container['pipelineStatusWithCodeQuality'];
    }

    /**
    * Sets pipelineStatusWithCodeQuality
    *
    * @param string|null $pipelineStatusWithCodeQuality **参数解释：** 合并请求流水线状态。
    *
    * @return $this
    */
    public function setPipelineStatusWithCodeQuality($pipelineStatusWithCodeQuality)
    {
        $this->container['pipelineStatusWithCodeQuality'] = $pipelineStatusWithCodeQuality;
        return $this;
    }

    /**
    * Gets notes
    *  **参数解释：** 合并请求检视意见。
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
    * @param int|null $notes **参数解释：** 合并请求检视意见。
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
        return $this;
    }

    /**
    * Gets sourceRepository
    *  sourceRepository
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ProjectSimpleDto|null
    */
    public function getSourceRepository()
    {
        return $this->container['sourceRepository'];
    }

    /**
    * Sets sourceRepository
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ProjectSimpleDto|null $sourceRepository sourceRepository
    *
    * @return $this
    */
    public function setSourceRepository($sourceRepository)
    {
        $this->container['sourceRepository'] = $sourceRepository;
        return $this;
    }

    /**
    * Gets targetRepository
    *  targetRepository
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ProjectSimpleDto|null
    */
    public function getTargetRepository()
    {
        return $this->container['targetRepository'];
    }

    /**
    * Sets targetRepository
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ProjectSimpleDto|null $targetRepository targetRepository
    *
    * @return $this
    */
    public function setTargetRepository($targetRepository)
    {
        $this->container['targetRepository'] = $targetRepository;
        return $this;
    }

    /**
    * Gets webUrl
    *  **参数解释：** 合并请求URL地址。
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
    * @param string|null $webUrl **参数解释：** 合并请求URL地址。
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets addedLines
    *  **参数解释：** 合并请求新增代码行数。
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
    * @param int|null $addedLines **参数解释：** 合并请求新增代码行数。
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
    *  **参数解释：** 合并请求删除代码行数。
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
    * @param int|null $removedLines **参数解释：** 合并请求删除代码行数。
    *
    * @return $this
    */
    public function setRemovedLines($removedLines)
    {
        $this->container['removedLines'] = $removedLines;
        return $this;
    }

    /**
    * Gets mergeRequestType
    *  **参数解释：** 合并请求检视模式。
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
    * @param string|null $mergeRequestType **参数解释：** 合并请求检视模式。
    *
    * @return $this
    */
    public function setMergeRequestType($mergeRequestType)
    {
        $this->container['mergeRequestType'] = $mergeRequestType;
        return $this;
    }

    /**
    * Gets sourceGitUrl
    *  **参数解释：** 合并请求git地址。
    *
    * @return string|null
    */
    public function getSourceGitUrl()
    {
        return $this->container['sourceGitUrl'];
    }

    /**
    * Sets sourceGitUrl
    *
    * @param string|null $sourceGitUrl **参数解释：** 合并请求git地址。
    *
    * @return $this
    */
    public function setSourceGitUrl($sourceGitUrl)
    {
        $this->container['sourceGitUrl'] = $sourceGitUrl;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释：** 合并请求标签。
    *
    * @return map[string,object][]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,object][]|null $labels **参数解释：** 合并请求标签。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets score
    *  **参数解释：** 合并请求分数。
    *
    * @return int|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param int|null $score **参数解释：** 合并请求分数。
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets minMergedScore
    *  **参数解释：** 合并请求最小合入分数。
    *
    * @return int|null
    */
    public function getMinMergedScore()
    {
        return $this->container['minMergedScore'];
    }

    /**
    * Sets minMergedScore
    *
    * @param int|null $minMergedScore **参数解释：** 合并请求最小合入分数。
    *
    * @return $this
    */
    public function setMinMergedScore($minMergedScore)
    {
        $this->container['minMergedScore'] = $minMergedScore;
        return $this;
    }

    /**
    * Gets sourceProductId
    *  **参数解释：** 合并请求源项目ID。
    *
    * @return string|null
    */
    public function getSourceProductId()
    {
        return $this->container['sourceProductId'];
    }

    /**
    * Sets sourceProductId
    *
    * @param string|null $sourceProductId **参数解释：** 合并请求源项目ID。
    *
    * @return $this
    */
    public function setSourceProductId($sourceProductId)
    {
        $this->container['sourceProductId'] = $sourceProductId;
        return $this;
    }

    /**
    * Gets targetProductId
    *  **参数解释：** 合并请求目标项目ID。
    *
    * @return string|null
    */
    public function getTargetProductId()
    {
        return $this->container['targetProductId'];
    }

    /**
    * Sets targetProductId
    *
    * @param string|null $targetProductId **参数解释：** 合并请求目标项目ID。
    *
    * @return $this
    */
    public function setTargetProductId($targetProductId)
    {
        $this->container['targetProductId'] = $targetProductId;
        return $this;
    }

    /**
    * Gets productName
    *  **参数解释：** 合并请求项目名。
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName **参数解释：** 合并请求项目名。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets notesCount
    *  notesCount
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\NotesCountDto|null
    */
    public function getNotesCount()
    {
        return $this->container['notesCount'];
    }

    /**
    * Sets notesCount
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\NotesCountDto|null $notesCount notesCount
    *
    * @return $this
    */
    public function setNotesCount($notesCount)
    {
        $this->container['notesCount'] = $notesCount;
        return $this;
    }

    /**
    * Gets moderationResult
    *  **参数解释：** 合并请求审核结果。
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
    * @param bool|null $moderationResult **参数解释：** 合并请求审核结果。
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
    *  **参数解释：** 合并请求审核时间。
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
    * @param int|null $moderationTime **参数解释：** 合并请求审核时间。
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
    *  **参数解释：** 合并请求审核状态。
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
    * @param int|null $moderationStatus **参数解释：** 合并请求审核状态。
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

