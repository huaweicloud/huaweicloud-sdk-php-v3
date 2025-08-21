<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostMergeRequestParamsDtoForOpenApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostMergeRequestParamsDtoForOpenApi';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  合并请求标题
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库id
    * reviewerIds  打分模式评审人ids，使用逗号分隔
    * assigneeIds  合并人ids，使用逗号分隔
    * approvalReviewerIds  审核模式检视人ids，使用逗号分隔
    * approvalApproversIds  审核人ids，使用逗号分隔
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签名称，使用逗号分隔
    * forceRemoveSourceBranch  合入后自动删除源分支
    * squash  压缩合并
    * squashCommitMessage  压缩合并信息
    * workItemIds  e2e单号
    * isUseTempBranch  使用临时分支创建合并请求
    * onlyAssigneeCanMerge  只有合并人允许合入
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'sourceBranch' => 'string',
            'targetBranch' => 'string',
            'targetRepositoryId' => 'int',
            'reviewerIds' => 'string',
            'assigneeIds' => 'string',
            'approvalReviewerIds' => 'string',
            'approvalApproversIds' => 'string',
            'description' => 'string',
            'milestoneId' => 'int',
            'labels' => 'object',
            'forceRemoveSourceBranch' => 'bool',
            'squash' => 'bool',
            'squashCommitMessage' => 'string',
            'workItemIds' => 'string[]',
            'isUseTempBranch' => 'bool',
            'onlyAssigneeCanMerge' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  合并请求标题
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库id
    * reviewerIds  打分模式评审人ids，使用逗号分隔
    * assigneeIds  合并人ids，使用逗号分隔
    * approvalReviewerIds  审核模式检视人ids，使用逗号分隔
    * approvalApproversIds  审核人ids，使用逗号分隔
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签名称，使用逗号分隔
    * forceRemoveSourceBranch  合入后自动删除源分支
    * squash  压缩合并
    * squashCommitMessage  压缩合并信息
    * workItemIds  e2e单号
    * isUseTempBranch  使用临时分支创建合并请求
    * onlyAssigneeCanMerge  只有合并人允许合入
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'targetRepositoryId' => 'int32',
        'reviewerIds' => null,
        'assigneeIds' => null,
        'approvalReviewerIds' => null,
        'approvalApproversIds' => null,
        'description' => null,
        'milestoneId' => 'int32',
        'labels' => null,
        'forceRemoveSourceBranch' => null,
        'squash' => null,
        'squashCommitMessage' => null,
        'workItemIds' => null,
        'isUseTempBranch' => null,
        'onlyAssigneeCanMerge' => null
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
    * title  合并请求标题
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库id
    * reviewerIds  打分模式评审人ids，使用逗号分隔
    * assigneeIds  合并人ids，使用逗号分隔
    * approvalReviewerIds  审核模式检视人ids，使用逗号分隔
    * approvalApproversIds  审核人ids，使用逗号分隔
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签名称，使用逗号分隔
    * forceRemoveSourceBranch  合入后自动删除源分支
    * squash  压缩合并
    * squashCommitMessage  压缩合并信息
    * workItemIds  e2e单号
    * isUseTempBranch  使用临时分支创建合并请求
    * onlyAssigneeCanMerge  只有合并人允许合入
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'sourceBranch' => 'source_branch',
            'targetBranch' => 'target_branch',
            'targetRepositoryId' => 'target_repository_id',
            'reviewerIds' => 'reviewer_ids',
            'assigneeIds' => 'assignee_ids',
            'approvalReviewerIds' => 'approval_reviewer_ids',
            'approvalApproversIds' => 'approval_approvers_ids',
            'description' => 'description',
            'milestoneId' => 'milestone_id',
            'labels' => 'labels',
            'forceRemoveSourceBranch' => 'force_remove_source_branch',
            'squash' => 'squash',
            'squashCommitMessage' => 'squash_commit_message',
            'workItemIds' => 'work_item_ids',
            'isUseTempBranch' => 'is_use_temp_branch',
            'onlyAssigneeCanMerge' => 'only_assignee_can_merge'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  合并请求标题
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库id
    * reviewerIds  打分模式评审人ids，使用逗号分隔
    * assigneeIds  合并人ids，使用逗号分隔
    * approvalReviewerIds  审核模式检视人ids，使用逗号分隔
    * approvalApproversIds  审核人ids，使用逗号分隔
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签名称，使用逗号分隔
    * forceRemoveSourceBranch  合入后自动删除源分支
    * squash  压缩合并
    * squashCommitMessage  压缩合并信息
    * workItemIds  e2e单号
    * isUseTempBranch  使用临时分支创建合并请求
    * onlyAssigneeCanMerge  只有合并人允许合入
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'sourceBranch' => 'setSourceBranch',
            'targetBranch' => 'setTargetBranch',
            'targetRepositoryId' => 'setTargetRepositoryId',
            'reviewerIds' => 'setReviewerIds',
            'assigneeIds' => 'setAssigneeIds',
            'approvalReviewerIds' => 'setApprovalReviewerIds',
            'approvalApproversIds' => 'setApprovalApproversIds',
            'description' => 'setDescription',
            'milestoneId' => 'setMilestoneId',
            'labels' => 'setLabels',
            'forceRemoveSourceBranch' => 'setForceRemoveSourceBranch',
            'squash' => 'setSquash',
            'squashCommitMessage' => 'setSquashCommitMessage',
            'workItemIds' => 'setWorkItemIds',
            'isUseTempBranch' => 'setIsUseTempBranch',
            'onlyAssigneeCanMerge' => 'setOnlyAssigneeCanMerge'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  合并请求标题
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库id
    * reviewerIds  打分模式评审人ids，使用逗号分隔
    * assigneeIds  合并人ids，使用逗号分隔
    * approvalReviewerIds  审核模式检视人ids，使用逗号分隔
    * approvalApproversIds  审核人ids，使用逗号分隔
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签名称，使用逗号分隔
    * forceRemoveSourceBranch  合入后自动删除源分支
    * squash  压缩合并
    * squashCommitMessage  压缩合并信息
    * workItemIds  e2e单号
    * isUseTempBranch  使用临时分支创建合并请求
    * onlyAssigneeCanMerge  只有合并人允许合入
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'sourceBranch' => 'getSourceBranch',
            'targetBranch' => 'getTargetBranch',
            'targetRepositoryId' => 'getTargetRepositoryId',
            'reviewerIds' => 'getReviewerIds',
            'assigneeIds' => 'getAssigneeIds',
            'approvalReviewerIds' => 'getApprovalReviewerIds',
            'approvalApproversIds' => 'getApprovalApproversIds',
            'description' => 'getDescription',
            'milestoneId' => 'getMilestoneId',
            'labels' => 'getLabels',
            'forceRemoveSourceBranch' => 'getForceRemoveSourceBranch',
            'squash' => 'getSquash',
            'squashCommitMessage' => 'getSquashCommitMessage',
            'workItemIds' => 'getWorkItemIds',
            'isUseTempBranch' => 'getIsUseTempBranch',
            'onlyAssigneeCanMerge' => 'getOnlyAssigneeCanMerge'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['targetRepositoryId'] = isset($data['targetRepositoryId']) ? $data['targetRepositoryId'] : null;
        $this->container['reviewerIds'] = isset($data['reviewerIds']) ? $data['reviewerIds'] : null;
        $this->container['assigneeIds'] = isset($data['assigneeIds']) ? $data['assigneeIds'] : null;
        $this->container['approvalReviewerIds'] = isset($data['approvalReviewerIds']) ? $data['approvalReviewerIds'] : null;
        $this->container['approvalApproversIds'] = isset($data['approvalApproversIds']) ? $data['approvalApproversIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['milestoneId'] = isset($data['milestoneId']) ? $data['milestoneId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['forceRemoveSourceBranch'] = isset($data['forceRemoveSourceBranch']) ? $data['forceRemoveSourceBranch'] : null;
        $this->container['squash'] = isset($data['squash']) ? $data['squash'] : null;
        $this->container['squashCommitMessage'] = isset($data['squashCommitMessage']) ? $data['squashCommitMessage'] : null;
        $this->container['workItemIds'] = isset($data['workItemIds']) ? $data['workItemIds'] : null;
        $this->container['isUseTempBranch'] = isset($data['isUseTempBranch']) ? $data['isUseTempBranch'] : null;
        $this->container['onlyAssigneeCanMerge'] = isset($data['onlyAssigneeCanMerge']) ? $data['onlyAssigneeCanMerge'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
            if ((mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sourceBranch'] === null) {
            $invalidProperties[] = "'sourceBranch' can't be null";
        }
            if ((mb_strlen($this->container['sourceBranch']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceBranch', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['targetBranch'] === null) {
            $invalidProperties[] = "'targetBranch' can't be null";
        }
            if ((mb_strlen($this->container['targetBranch']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetBranch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewerIds']) && (mb_strlen($this->container['reviewerIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewerIds', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assigneeIds']) && (mb_strlen($this->container['assigneeIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'assigneeIds', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['approvalReviewerIds']) && (mb_strlen($this->container['approvalReviewerIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'approvalReviewerIds', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['approvalApproversIds']) && (mb_strlen($this->container['approvalApproversIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'approvalApproversIds', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['squashCommitMessage']) && (mb_strlen($this->container['squashCommitMessage']) > 2000)) {
                $invalidProperties[] = "invalid value for 'squashCommitMessage', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['squashCommitMessage']) && (mb_strlen($this->container['squashCommitMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'squashCommitMessage', the character length must be bigger than or equal to 1.";
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
    * Gets title
    *  合并请求标题
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string $title 合并请求标题
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
    *  源分支
    *
    * @return string
    */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
    * Sets sourceBranch
    *
    * @param string $sourceBranch 源分支
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
    * @return string
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string $targetBranch 目标分支
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
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
    * Gets reviewerIds
    *  打分模式评审人ids，使用逗号分隔
    *
    * @return string|null
    */
    public function getReviewerIds()
    {
        return $this->container['reviewerIds'];
    }

    /**
    * Sets reviewerIds
    *
    * @param string|null $reviewerIds 打分模式评审人ids，使用逗号分隔
    *
    * @return $this
    */
    public function setReviewerIds($reviewerIds)
    {
        $this->container['reviewerIds'] = $reviewerIds;
        return $this;
    }

    /**
    * Gets assigneeIds
    *  合并人ids，使用逗号分隔
    *
    * @return string|null
    */
    public function getAssigneeIds()
    {
        return $this->container['assigneeIds'];
    }

    /**
    * Sets assigneeIds
    *
    * @param string|null $assigneeIds 合并人ids，使用逗号分隔
    *
    * @return $this
    */
    public function setAssigneeIds($assigneeIds)
    {
        $this->container['assigneeIds'] = $assigneeIds;
        return $this;
    }

    /**
    * Gets approvalReviewerIds
    *  审核模式检视人ids，使用逗号分隔
    *
    * @return string|null
    */
    public function getApprovalReviewerIds()
    {
        return $this->container['approvalReviewerIds'];
    }

    /**
    * Sets approvalReviewerIds
    *
    * @param string|null $approvalReviewerIds 审核模式检视人ids，使用逗号分隔
    *
    * @return $this
    */
    public function setApprovalReviewerIds($approvalReviewerIds)
    {
        $this->container['approvalReviewerIds'] = $approvalReviewerIds;
        return $this;
    }

    /**
    * Gets approvalApproversIds
    *  审核人ids，使用逗号分隔
    *
    * @return string|null
    */
    public function getApprovalApproversIds()
    {
        return $this->container['approvalApproversIds'];
    }

    /**
    * Sets approvalApproversIds
    *
    * @param string|null $approvalApproversIds 审核人ids，使用逗号分隔
    *
    * @return $this
    */
    public function setApprovalApproversIds($approvalApproversIds)
    {
        $this->container['approvalApproversIds'] = $approvalApproversIds;
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
    * Gets milestoneId
    *  里程碑id
    *
    * @return int|null
    */
    public function getMilestoneId()
    {
        return $this->container['milestoneId'];
    }

    /**
    * Sets milestoneId
    *
    * @param int|null $milestoneId 里程碑id
    *
    * @return $this
    */
    public function setMilestoneId($milestoneId)
    {
        $this->container['milestoneId'] = $milestoneId;
        return $this;
    }

    /**
    * Gets labels
    *  标签名称，使用逗号分隔
    *
    * @return object|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param object|null $labels 标签名称，使用逗号分隔
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets forceRemoveSourceBranch
    *  合入后自动删除源分支
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
    * @param bool|null $forceRemoveSourceBranch 合入后自动删除源分支
    *
    * @return $this
    */
    public function setForceRemoveSourceBranch($forceRemoveSourceBranch)
    {
        $this->container['forceRemoveSourceBranch'] = $forceRemoveSourceBranch;
        return $this;
    }

    /**
    * Gets squash
    *  压缩合并
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
    * @param bool|null $squash 压缩合并
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
    *  压缩合并信息
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
    * @param string|null $squashCommitMessage 压缩合并信息
    *
    * @return $this
    */
    public function setSquashCommitMessage($squashCommitMessage)
    {
        $this->container['squashCommitMessage'] = $squashCommitMessage;
        return $this;
    }

    /**
    * Gets workItemIds
    *  e2e单号
    *
    * @return string[]|null
    */
    public function getWorkItemIds()
    {
        return $this->container['workItemIds'];
    }

    /**
    * Sets workItemIds
    *
    * @param string[]|null $workItemIds e2e单号
    *
    * @return $this
    */
    public function setWorkItemIds($workItemIds)
    {
        $this->container['workItemIds'] = $workItemIds;
        return $this;
    }

    /**
    * Gets isUseTempBranch
    *  使用临时分支创建合并请求
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
    * @param bool|null $isUseTempBranch 使用临时分支创建合并请求
    *
    * @return $this
    */
    public function setIsUseTempBranch($isUseTempBranch)
    {
        $this->container['isUseTempBranch'] = $isUseTempBranch;
        return $this;
    }

    /**
    * Gets onlyAssigneeCanMerge
    *  只有合并人允许合入
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
    * @param bool|null $onlyAssigneeCanMerge 只有合并人允许合入
    *
    * @return $this
    */
    public function setOnlyAssigneeCanMerge($onlyAssigneeCanMerge)
    {
        $this->container['onlyAssigneeCanMerge'] = $onlyAssigneeCanMerge;
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

