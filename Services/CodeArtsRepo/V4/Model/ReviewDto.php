<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assignee  assignee
    * author  author
    * note  **参数解释：** 评论内容。
    * createdAt  **参数解释：** 创建时间。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repositoryPath  **参数解释：** 仓库路径。
    * repositoryId  **参数解释：** 仓库id。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 检视意见模块。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * proposer  proposer
    * reviewer  reviewer
    * resolved  **参数解释：** 是否已解决。
    * resolvedAt  **参数解释：** 解决时间。
    * link  **参数解释：** 合并请求或commit链接。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    * mergeRequestId  **参数解释：** 合并请求id(noteable_type=MergRequest时返回)。
    * mergeRequestIid  **参数解释：** 合并请求iid(noteable_type=MergRequest时返回)。
    * mergeRequestTitle  **参数解释：** 合并请求标题(noteable_type=MergRequest时返回)。
    * mergeRequestState  **参数解释：** 合并请求状态(noteable_type=MergRequest时返回)。
    * commitId  **参数解释：** commit id(noteable_type=Commit时返回)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assignee' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'author' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'note' => 'string',
            'createdAt' => 'string',
            'isReply' => 'bool',
            'resolvedBy' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'discussionId' => 'string',
            'repositoryPath' => 'string',
            'repositoryId' => 'int',
            'reviewCategories' => 'string',
            'reviewCategoriesCn' => 'string',
            'reviewCategoriesEn' => 'string',
            'reviewModules' => 'string',
            'severity' => 'string',
            'severityCn' => 'string',
            'severityEn' => 'string',
            'proposer' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'reviewer' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto',
            'resolved' => 'bool',
            'resolvedAt' => 'string',
            'link' => 'string',
            'moderationResult' => 'bool',
            'moderationTime' => 'int',
            'moderationStatus' => 'int',
            'mergeRequestId' => 'int',
            'mergeRequestIid' => 'int',
            'mergeRequestTitle' => 'string',
            'mergeRequestState' => 'string',
            'commitId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assignee  assignee
    * author  author
    * note  **参数解释：** 评论内容。
    * createdAt  **参数解释：** 创建时间。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repositoryPath  **参数解释：** 仓库路径。
    * repositoryId  **参数解释：** 仓库id。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 检视意见模块。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * proposer  proposer
    * reviewer  reviewer
    * resolved  **参数解释：** 是否已解决。
    * resolvedAt  **参数解释：** 解决时间。
    * link  **参数解释：** 合并请求或commit链接。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    * mergeRequestId  **参数解释：** 合并请求id(noteable_type=MergRequest时返回)。
    * mergeRequestIid  **参数解释：** 合并请求iid(noteable_type=MergRequest时返回)。
    * mergeRequestTitle  **参数解释：** 合并请求标题(noteable_type=MergRequest时返回)。
    * mergeRequestState  **参数解释：** 合并请求状态(noteable_type=MergRequest时返回)。
    * commitId  **参数解释：** commit id(noteable_type=Commit时返回)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assignee' => null,
        'author' => null,
        'note' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'isReply' => null,
        'resolvedBy' => null,
        'discussionId' => null,
        'repositoryPath' => null,
        'repositoryId' => null,
        'reviewCategories' => null,
        'reviewCategoriesCn' => null,
        'reviewCategoriesEn' => null,
        'reviewModules' => null,
        'severity' => null,
        'severityCn' => null,
        'severityEn' => null,
        'proposer' => null,
        'reviewer' => null,
        'resolved' => null,
        'resolvedAt' => null,
        'link' => null,
        'moderationResult' => null,
        'moderationTime' => 'int64',
        'moderationStatus' => 'int32',
        'mergeRequestId' => 'int32',
        'mergeRequestIid' => 'int32',
        'mergeRequestTitle' => null,
        'mergeRequestState' => null,
        'commitId' => null
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
    * assignee  assignee
    * author  author
    * note  **参数解释：** 评论内容。
    * createdAt  **参数解释：** 创建时间。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repositoryPath  **参数解释：** 仓库路径。
    * repositoryId  **参数解释：** 仓库id。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 检视意见模块。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * proposer  proposer
    * reviewer  reviewer
    * resolved  **参数解释：** 是否已解决。
    * resolvedAt  **参数解释：** 解决时间。
    * link  **参数解释：** 合并请求或commit链接。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    * mergeRequestId  **参数解释：** 合并请求id(noteable_type=MergRequest时返回)。
    * mergeRequestIid  **参数解释：** 合并请求iid(noteable_type=MergRequest时返回)。
    * mergeRequestTitle  **参数解释：** 合并请求标题(noteable_type=MergRequest时返回)。
    * mergeRequestState  **参数解释：** 合并请求状态(noteable_type=MergRequest时返回)。
    * commitId  **参数解释：** commit id(noteable_type=Commit时返回)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assignee' => 'assignee',
            'author' => 'author',
            'note' => 'note',
            'createdAt' => 'created_at',
            'isReply' => 'is_reply',
            'resolvedBy' => 'resolved_by',
            'discussionId' => 'discussion_id',
            'repositoryPath' => 'repository_path',
            'repositoryId' => 'repository_id',
            'reviewCategories' => 'review_categories',
            'reviewCategoriesCn' => 'review_categories_cn',
            'reviewCategoriesEn' => 'review_categories_en',
            'reviewModules' => 'review_modules',
            'severity' => 'severity',
            'severityCn' => 'severity_cn',
            'severityEn' => 'severity_en',
            'proposer' => 'proposer',
            'reviewer' => 'reviewer',
            'resolved' => 'resolved',
            'resolvedAt' => 'resolved_at',
            'link' => 'link',
            'moderationResult' => 'moderation_result',
            'moderationTime' => 'moderation_time',
            'moderationStatus' => 'moderation_status',
            'mergeRequestId' => 'merge_request_id',
            'mergeRequestIid' => 'merge_request_iid',
            'mergeRequestTitle' => 'merge_request_title',
            'mergeRequestState' => 'merge_request_state',
            'commitId' => 'commit_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assignee  assignee
    * author  author
    * note  **参数解释：** 评论内容。
    * createdAt  **参数解释：** 创建时间。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repositoryPath  **参数解释：** 仓库路径。
    * repositoryId  **参数解释：** 仓库id。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 检视意见模块。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * proposer  proposer
    * reviewer  reviewer
    * resolved  **参数解释：** 是否已解决。
    * resolvedAt  **参数解释：** 解决时间。
    * link  **参数解释：** 合并请求或commit链接。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    * mergeRequestId  **参数解释：** 合并请求id(noteable_type=MergRequest时返回)。
    * mergeRequestIid  **参数解释：** 合并请求iid(noteable_type=MergRequest时返回)。
    * mergeRequestTitle  **参数解释：** 合并请求标题(noteable_type=MergRequest时返回)。
    * mergeRequestState  **参数解释：** 合并请求状态(noteable_type=MergRequest时返回)。
    * commitId  **参数解释：** commit id(noteable_type=Commit时返回)。
    *
    * @var string[]
    */
    protected static $setters = [
            'assignee' => 'setAssignee',
            'author' => 'setAuthor',
            'note' => 'setNote',
            'createdAt' => 'setCreatedAt',
            'isReply' => 'setIsReply',
            'resolvedBy' => 'setResolvedBy',
            'discussionId' => 'setDiscussionId',
            'repositoryPath' => 'setRepositoryPath',
            'repositoryId' => 'setRepositoryId',
            'reviewCategories' => 'setReviewCategories',
            'reviewCategoriesCn' => 'setReviewCategoriesCn',
            'reviewCategoriesEn' => 'setReviewCategoriesEn',
            'reviewModules' => 'setReviewModules',
            'severity' => 'setSeverity',
            'severityCn' => 'setSeverityCn',
            'severityEn' => 'setSeverityEn',
            'proposer' => 'setProposer',
            'reviewer' => 'setReviewer',
            'resolved' => 'setResolved',
            'resolvedAt' => 'setResolvedAt',
            'link' => 'setLink',
            'moderationResult' => 'setModerationResult',
            'moderationTime' => 'setModerationTime',
            'moderationStatus' => 'setModerationStatus',
            'mergeRequestId' => 'setMergeRequestId',
            'mergeRequestIid' => 'setMergeRequestIid',
            'mergeRequestTitle' => 'setMergeRequestTitle',
            'mergeRequestState' => 'setMergeRequestState',
            'commitId' => 'setCommitId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assignee  assignee
    * author  author
    * note  **参数解释：** 评论内容。
    * createdAt  **参数解释：** 创建时间。
    * isReply  **参数解释：** 是否为回复。
    * resolvedBy  resolvedBy
    * discussionId  **参数解释：** 检视意见id(主评论和回复共用)。
    * repositoryPath  **参数解释：** 仓库路径。
    * repositoryId  **参数解释：** 仓库id。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 检视意见模块。
    * severity  **参数解释：** 严重程度key。
    * severityCn  **参数解释：** 严重程度中文。 **约束限制：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。
    * proposer  proposer
    * reviewer  reviewer
    * resolved  **参数解释：** 是否已解决。
    * resolvedAt  **参数解释：** 解决时间。
    * link  **参数解释：** 合并请求或commit链接。
    * moderationResult  **参数解释：** 内容审核结果。
    * moderationTime  **参数解释：** 内容审核时间。
    * moderationStatus  **参数解释：** 内容审核状态。
    * mergeRequestId  **参数解释：** 合并请求id(noteable_type=MergRequest时返回)。
    * mergeRequestIid  **参数解释：** 合并请求iid(noteable_type=MergRequest时返回)。
    * mergeRequestTitle  **参数解释：** 合并请求标题(noteable_type=MergRequest时返回)。
    * mergeRequestState  **参数解释：** 合并请求状态(noteable_type=MergRequest时返回)。
    * commitId  **参数解释：** commit id(noteable_type=Commit时返回)。
    *
    * @var string[]
    */
    protected static $getters = [
            'assignee' => 'getAssignee',
            'author' => 'getAuthor',
            'note' => 'getNote',
            'createdAt' => 'getCreatedAt',
            'isReply' => 'getIsReply',
            'resolvedBy' => 'getResolvedBy',
            'discussionId' => 'getDiscussionId',
            'repositoryPath' => 'getRepositoryPath',
            'repositoryId' => 'getRepositoryId',
            'reviewCategories' => 'getReviewCategories',
            'reviewCategoriesCn' => 'getReviewCategoriesCn',
            'reviewCategoriesEn' => 'getReviewCategoriesEn',
            'reviewModules' => 'getReviewModules',
            'severity' => 'getSeverity',
            'severityCn' => 'getSeverityCn',
            'severityEn' => 'getSeverityEn',
            'proposer' => 'getProposer',
            'reviewer' => 'getReviewer',
            'resolved' => 'getResolved',
            'resolvedAt' => 'getResolvedAt',
            'link' => 'getLink',
            'moderationResult' => 'getModerationResult',
            'moderationTime' => 'getModerationTime',
            'moderationStatus' => 'getModerationStatus',
            'mergeRequestId' => 'getMergeRequestId',
            'mergeRequestIid' => 'getMergeRequestIid',
            'mergeRequestTitle' => 'getMergeRequestTitle',
            'mergeRequestState' => 'getMergeRequestState',
            'commitId' => 'getCommitId'
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
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['isReply'] = isset($data['isReply']) ? $data['isReply'] : null;
        $this->container['resolvedBy'] = isset($data['resolvedBy']) ? $data['resolvedBy'] : null;
        $this->container['discussionId'] = isset($data['discussionId']) ? $data['discussionId'] : null;
        $this->container['repositoryPath'] = isset($data['repositoryPath']) ? $data['repositoryPath'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['reviewCategories'] = isset($data['reviewCategories']) ? $data['reviewCategories'] : null;
        $this->container['reviewCategoriesCn'] = isset($data['reviewCategoriesCn']) ? $data['reviewCategoriesCn'] : null;
        $this->container['reviewCategoriesEn'] = isset($data['reviewCategoriesEn']) ? $data['reviewCategoriesEn'] : null;
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['severityCn'] = isset($data['severityCn']) ? $data['severityCn'] : null;
        $this->container['severityEn'] = isset($data['severityEn']) ? $data['severityEn'] : null;
        $this->container['proposer'] = isset($data['proposer']) ? $data['proposer'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
        $this->container['resolvedAt'] = isset($data['resolvedAt']) ? $data['resolvedAt'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['moderationResult'] = isset($data['moderationResult']) ? $data['moderationResult'] : null;
        $this->container['moderationTime'] = isset($data['moderationTime']) ? $data['moderationTime'] : null;
        $this->container['moderationStatus'] = isset($data['moderationStatus']) ? $data['moderationStatus'] : null;
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['mergeRequestIid'] = isset($data['mergeRequestIid']) ? $data['mergeRequestIid'] : null;
        $this->container['mergeRequestTitle'] = isset($data['mergeRequestTitle']) ? $data['mergeRequestTitle'] : null;
        $this->container['mergeRequestState'] = isset($data['mergeRequestState']) ? $data['mergeRequestState'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 8000)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 8000.";
            }
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) < 1)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['discussionId']) && (mb_strlen($this->container['discussionId']) > 40)) {
                $invalidProperties[] = "invalid value for 'discussionId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['discussionId']) && (mb_strlen($this->container['discussionId']) < 40)) {
                $invalidProperties[] = "invalid value for 'discussionId', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
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
    * Gets assignee
    *  assignee
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
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
    * Gets note
    *  **参数解释：** 评论内容。
    *
    * @return string|null
    */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
    * Sets note
    *
    * @param string|null $note **参数解释：** 评论内容。
    *
    * @return $this
    */
    public function setNote($note)
    {
        $this->container['note'] = $note;
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
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null
    */
    public function getResolvedBy()
    {
        return $this->container['resolvedBy'];
    }

    /**
    * Sets resolvedBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null $resolvedBy resolvedBy
    *
    * @return $this
    */
    public function setResolvedBy($resolvedBy)
    {
        $this->container['resolvedBy'] = $resolvedBy;
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
    * Gets repositoryPath
    *  **参数解释：** 仓库路径。
    *
    * @return string|null
    */
    public function getRepositoryPath()
    {
        return $this->container['repositoryPath'];
    }

    /**
    * Sets repositoryPath
    *
    * @param string|null $repositoryPath **参数解释：** 仓库路径。
    *
    * @return $this
    */
    public function setRepositoryPath($repositoryPath)
    {
        $this->container['repositoryPath'] = $repositoryPath;
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
    *  **参数解释：** 意见分类中文。
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
    * @param string|null $reviewCategoriesCn **参数解释：** 意见分类中文。
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
    *  **参数解释：** 意见分类英文。
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
    * @param string|null $reviewCategoriesEn **参数解释：** 意见分类英文。
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
    *  **参数解释：** 检视意见模块。
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
    * @param string|null $reviewModules **参数解释：** 检视意见模块。
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
    * Gets proposer
    *  proposer
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null
    */
    public function getProposer()
    {
        return $this->container['proposer'];
    }

    /**
    * Sets proposer
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null $proposer proposer
    *
    * @return $this
    */
    public function setProposer($proposer)
    {
        $this->container['proposer'] = $proposer;
        return $this;
    }

    /**
    * Gets reviewer
    *  reviewer
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null
    */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
    * Sets reviewer
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserBasicDto|null $reviewer reviewer
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
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
    * Gets resolvedAt
    *  **参数解释：** 解决时间。
    *
    * @return string|null
    */
    public function getResolvedAt()
    {
        return $this->container['resolvedAt'];
    }

    /**
    * Sets resolvedAt
    *
    * @param string|null $resolvedAt **参数解释：** 解决时间。
    *
    * @return $this
    */
    public function setResolvedAt($resolvedAt)
    {
        $this->container['resolvedAt'] = $resolvedAt;
        return $this;
    }

    /**
    * Gets link
    *  **参数解释：** 合并请求或commit链接。
    *
    * @return string|null
    */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
    * Sets link
    *
    * @param string|null $link **参数解释：** 合并请求或commit链接。
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
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
    * Gets mergeRequestId
    *  **参数解释：** 合并请求id(noteable_type=MergRequest时返回)。
    *
    * @return int|null
    */
    public function getMergeRequestId()
    {
        return $this->container['mergeRequestId'];
    }

    /**
    * Sets mergeRequestId
    *
    * @param int|null $mergeRequestId **参数解释：** 合并请求id(noteable_type=MergRequest时返回)。
    *
    * @return $this
    */
    public function setMergeRequestId($mergeRequestId)
    {
        $this->container['mergeRequestId'] = $mergeRequestId;
        return $this;
    }

    /**
    * Gets mergeRequestIid
    *  **参数解释：** 合并请求iid(noteable_type=MergRequest时返回)。
    *
    * @return int|null
    */
    public function getMergeRequestIid()
    {
        return $this->container['mergeRequestIid'];
    }

    /**
    * Sets mergeRequestIid
    *
    * @param int|null $mergeRequestIid **参数解释：** 合并请求iid(noteable_type=MergRequest时返回)。
    *
    * @return $this
    */
    public function setMergeRequestIid($mergeRequestIid)
    {
        $this->container['mergeRequestIid'] = $mergeRequestIid;
        return $this;
    }

    /**
    * Gets mergeRequestTitle
    *  **参数解释：** 合并请求标题(noteable_type=MergRequest时返回)。
    *
    * @return string|null
    */
    public function getMergeRequestTitle()
    {
        return $this->container['mergeRequestTitle'];
    }

    /**
    * Sets mergeRequestTitle
    *
    * @param string|null $mergeRequestTitle **参数解释：** 合并请求标题(noteable_type=MergRequest时返回)。
    *
    * @return $this
    */
    public function setMergeRequestTitle($mergeRequestTitle)
    {
        $this->container['mergeRequestTitle'] = $mergeRequestTitle;
        return $this;
    }

    /**
    * Gets mergeRequestState
    *  **参数解释：** 合并请求状态(noteable_type=MergRequest时返回)。
    *
    * @return string|null
    */
    public function getMergeRequestState()
    {
        return $this->container['mergeRequestState'];
    }

    /**
    * Sets mergeRequestState
    *
    * @param string|null $mergeRequestState **参数解释：** 合并请求状态(noteable_type=MergRequest时返回)。
    *
    * @return $this
    */
    public function setMergeRequestState($mergeRequestState)
    {
        $this->container['mergeRequestState'] = $mergeRequestState;
        return $this;
    }

    /**
    * Gets commitId
    *  **参数解释：** commit id(noteable_type=Commit时返回)。
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
    * @param string|null $commitId **参数解释：** commit id(noteable_type=Commit时返回)。
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
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

