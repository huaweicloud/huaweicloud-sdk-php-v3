<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMergeRequestApproverSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMergeRequestApproverSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：**  设置主键id。
    * target  **参数解释：**  分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * targetType  设置类型，当前仅开放branch类型
    * isUseApproval  是否为审核模式，审核模式：true 评分模式：false
    * approvalRequiredReviewers  最小检视人数
    * approvalRequiredApprovers  最小审核人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人id列表
    * appendReviewers  追加检视人实体列表
    * appendApproverIds  追加审核人id列表
    * appendApprovers  追加审核人实体列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人id列表
    * assignees  合并人实体列表
    * approverIds  审核人id列表
    * approvers  审核人实体列表
    * reviewerIds  检视人id列表
    * reviewers  检视人实体列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'target' => 'string',
            'targetType' => 'string',
            'isUseApproval' => 'bool',
            'approvalRequiredReviewers' => 'int',
            'approvalRequiredApprovers' => 'int',
            'resetApprovalsOnPush' => 'bool',
            'resetReviewersOnPush' => 'bool',
            'approversFromProject' => 'bool',
            'appendReviewerIds' => 'int[]',
            'appendReviewers' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]',
            'appendApproverIds' => 'int[]',
            'appendApprovers' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]',
            'onlyMergeWhenPipelinePass' => 'bool',
            'assigneeIds' => 'int[]',
            'assignees' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]',
            'approverIds' => 'int[]',
            'approvers' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]',
            'reviewerIds' => 'int[]',
            'reviewers' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：**  设置主键id。
    * target  **参数解释：**  分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * targetType  设置类型，当前仅开放branch类型
    * isUseApproval  是否为审核模式，审核模式：true 评分模式：false
    * approvalRequiredReviewers  最小检视人数
    * approvalRequiredApprovers  最小审核人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人id列表
    * appendReviewers  追加检视人实体列表
    * appendApproverIds  追加审核人id列表
    * appendApprovers  追加审核人实体列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人id列表
    * assignees  合并人实体列表
    * approverIds  审核人id列表
    * approvers  审核人实体列表
    * reviewerIds  检视人id列表
    * reviewers  检视人实体列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'target' => null,
        'targetType' => null,
        'isUseApproval' => null,
        'approvalRequiredReviewers' => null,
        'approvalRequiredApprovers' => null,
        'resetApprovalsOnPush' => null,
        'resetReviewersOnPush' => null,
        'approversFromProject' => null,
        'appendReviewerIds' => 'int32',
        'appendReviewers' => null,
        'appendApproverIds' => 'int32',
        'appendApprovers' => null,
        'onlyMergeWhenPipelinePass' => null,
        'assigneeIds' => 'int32',
        'assignees' => null,
        'approverIds' => 'int32',
        'approvers' => null,
        'reviewerIds' => 'int32',
        'reviewers' => null
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
    * id  **参数解释：**  设置主键id。
    * target  **参数解释：**  分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * targetType  设置类型，当前仅开放branch类型
    * isUseApproval  是否为审核模式，审核模式：true 评分模式：false
    * approvalRequiredReviewers  最小检视人数
    * approvalRequiredApprovers  最小审核人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人id列表
    * appendReviewers  追加检视人实体列表
    * appendApproverIds  追加审核人id列表
    * appendApprovers  追加审核人实体列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人id列表
    * assignees  合并人实体列表
    * approverIds  审核人id列表
    * approvers  审核人实体列表
    * reviewerIds  检视人id列表
    * reviewers  检视人实体列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'target' => 'target',
            'targetType' => 'target_type',
            'isUseApproval' => 'is_use_approval',
            'approvalRequiredReviewers' => 'approval_required_reviewers',
            'approvalRequiredApprovers' => 'approval_required_approvers',
            'resetApprovalsOnPush' => 'reset_approvals_on_push',
            'resetReviewersOnPush' => 'reset_reviewers_on_push',
            'approversFromProject' => 'approvers_from_project',
            'appendReviewerIds' => 'append_reviewer_ids',
            'appendReviewers' => 'append_reviewers',
            'appendApproverIds' => 'append_approver_ids',
            'appendApprovers' => 'append_approvers',
            'onlyMergeWhenPipelinePass' => 'only_merge_when_pipeline_pass',
            'assigneeIds' => 'assignee_ids',
            'assignees' => 'assignees',
            'approverIds' => 'approver_ids',
            'approvers' => 'approvers',
            'reviewerIds' => 'reviewer_ids',
            'reviewers' => 'reviewers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：**  设置主键id。
    * target  **参数解释：**  分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * targetType  设置类型，当前仅开放branch类型
    * isUseApproval  是否为审核模式，审核模式：true 评分模式：false
    * approvalRequiredReviewers  最小检视人数
    * approvalRequiredApprovers  最小审核人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人id列表
    * appendReviewers  追加检视人实体列表
    * appendApproverIds  追加审核人id列表
    * appendApprovers  追加审核人实体列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人id列表
    * assignees  合并人实体列表
    * approverIds  审核人id列表
    * approvers  审核人实体列表
    * reviewerIds  检视人id列表
    * reviewers  检视人实体列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'target' => 'setTarget',
            'targetType' => 'setTargetType',
            'isUseApproval' => 'setIsUseApproval',
            'approvalRequiredReviewers' => 'setApprovalRequiredReviewers',
            'approvalRequiredApprovers' => 'setApprovalRequiredApprovers',
            'resetApprovalsOnPush' => 'setResetApprovalsOnPush',
            'resetReviewersOnPush' => 'setResetReviewersOnPush',
            'approversFromProject' => 'setApproversFromProject',
            'appendReviewerIds' => 'setAppendReviewerIds',
            'appendReviewers' => 'setAppendReviewers',
            'appendApproverIds' => 'setAppendApproverIds',
            'appendApprovers' => 'setAppendApprovers',
            'onlyMergeWhenPipelinePass' => 'setOnlyMergeWhenPipelinePass',
            'assigneeIds' => 'setAssigneeIds',
            'assignees' => 'setAssignees',
            'approverIds' => 'setApproverIds',
            'approvers' => 'setApprovers',
            'reviewerIds' => 'setReviewerIds',
            'reviewers' => 'setReviewers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：**  设置主键id。
    * target  **参数解释：**  分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * targetType  设置类型，当前仅开放branch类型
    * isUseApproval  是否为审核模式，审核模式：true 评分模式：false
    * approvalRequiredReviewers  最小检视人数
    * approvalRequiredApprovers  最小审核人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人id列表
    * appendReviewers  追加检视人实体列表
    * appendApproverIds  追加审核人id列表
    * appendApprovers  追加审核人实体列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人id列表
    * assignees  合并人实体列表
    * approverIds  审核人id列表
    * approvers  审核人实体列表
    * reviewerIds  检视人id列表
    * reviewers  检视人实体列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'target' => 'getTarget',
            'targetType' => 'getTargetType',
            'isUseApproval' => 'getIsUseApproval',
            'approvalRequiredReviewers' => 'getApprovalRequiredReviewers',
            'approvalRequiredApprovers' => 'getApprovalRequiredApprovers',
            'resetApprovalsOnPush' => 'getResetApprovalsOnPush',
            'resetReviewersOnPush' => 'getResetReviewersOnPush',
            'approversFromProject' => 'getApproversFromProject',
            'appendReviewerIds' => 'getAppendReviewerIds',
            'appendReviewers' => 'getAppendReviewers',
            'appendApproverIds' => 'getAppendApproverIds',
            'appendApprovers' => 'getAppendApprovers',
            'onlyMergeWhenPipelinePass' => 'getOnlyMergeWhenPipelinePass',
            'assigneeIds' => 'getAssigneeIds',
            'assignees' => 'getAssignees',
            'approverIds' => 'getApproverIds',
            'approvers' => 'getApprovers',
            'reviewerIds' => 'getReviewerIds',
            'reviewers' => 'getReviewers'
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
    const TARGET_TYPE_BRANCH = 'branch';
    const TARGET_TYPE_FILE = 'file';
    const TARGET_TYPE_BINARY = 'binary';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_BRANCH,
            self::TARGET_TYPE_FILE,
            self::TARGET_TYPE_BINARY,
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['isUseApproval'] = isset($data['isUseApproval']) ? $data['isUseApproval'] : null;
        $this->container['approvalRequiredReviewers'] = isset($data['approvalRequiredReviewers']) ? $data['approvalRequiredReviewers'] : null;
        $this->container['approvalRequiredApprovers'] = isset($data['approvalRequiredApprovers']) ? $data['approvalRequiredApprovers'] : null;
        $this->container['resetApprovalsOnPush'] = isset($data['resetApprovalsOnPush']) ? $data['resetApprovalsOnPush'] : null;
        $this->container['resetReviewersOnPush'] = isset($data['resetReviewersOnPush']) ? $data['resetReviewersOnPush'] : null;
        $this->container['approversFromProject'] = isset($data['approversFromProject']) ? $data['approversFromProject'] : null;
        $this->container['appendReviewerIds'] = isset($data['appendReviewerIds']) ? $data['appendReviewerIds'] : null;
        $this->container['appendReviewers'] = isset($data['appendReviewers']) ? $data['appendReviewers'] : null;
        $this->container['appendApproverIds'] = isset($data['appendApproverIds']) ? $data['appendApproverIds'] : null;
        $this->container['appendApprovers'] = isset($data['appendApprovers']) ? $data['appendApprovers'] : null;
        $this->container['onlyMergeWhenPipelinePass'] = isset($data['onlyMergeWhenPipelinePass']) ? $data['onlyMergeWhenPipelinePass'] : null;
        $this->container['assigneeIds'] = isset($data['assigneeIds']) ? $data['assigneeIds'] : null;
        $this->container['assignees'] = isset($data['assignees']) ? $data['assignees'] : null;
        $this->container['approverIds'] = isset($data['approverIds']) ? $data['approverIds'] : null;
        $this->container['approvers'] = isset($data['approvers']) ? $data['approvers'] : null;
        $this->container['reviewerIds'] = isset($data['reviewerIds']) ? $data['reviewerIds'] : null;
        $this->container['reviewers'] = isset($data['reviewers']) ? $data['reviewers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTargetTypeAllowableValues();
                if (!is_null($this->container['targetType']) && !in_array($this->container['targetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetType', must be one of '%s'",
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
    * Gets id
    *  **参数解释：**  设置主键id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：**  设置主键id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets target
    *  **参数解释：**  分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    *
    * @return string|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string|null $target **参数解释：**  分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets targetType
    *  设置类型，当前仅开放branch类型
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 设置类型，当前仅开放branch类型
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets isUseApproval
    *  是否为审核模式，审核模式：true 评分模式：false
    *
    * @return bool|null
    */
    public function getIsUseApproval()
    {
        return $this->container['isUseApproval'];
    }

    /**
    * Sets isUseApproval
    *
    * @param bool|null $isUseApproval 是否为审核模式，审核模式：true 评分模式：false
    *
    * @return $this
    */
    public function setIsUseApproval($isUseApproval)
    {
        $this->container['isUseApproval'] = $isUseApproval;
        return $this;
    }

    /**
    * Gets approvalRequiredReviewers
    *  最小检视人数
    *
    * @return int|null
    */
    public function getApprovalRequiredReviewers()
    {
        return $this->container['approvalRequiredReviewers'];
    }

    /**
    * Sets approvalRequiredReviewers
    *
    * @param int|null $approvalRequiredReviewers 最小检视人数
    *
    * @return $this
    */
    public function setApprovalRequiredReviewers($approvalRequiredReviewers)
    {
        $this->container['approvalRequiredReviewers'] = $approvalRequiredReviewers;
        return $this;
    }

    /**
    * Gets approvalRequiredApprovers
    *  最小审核人数
    *
    * @return int|null
    */
    public function getApprovalRequiredApprovers()
    {
        return $this->container['approvalRequiredApprovers'];
    }

    /**
    * Sets approvalRequiredApprovers
    *
    * @param int|null $approvalRequiredApprovers 最小审核人数
    *
    * @return $this
    */
    public function setApprovalRequiredApprovers($approvalRequiredApprovers)
    {
        $this->container['approvalRequiredApprovers'] = $approvalRequiredApprovers;
        return $this;
    }

    /**
    * Gets resetApprovalsOnPush
    *  推送时是否重置审核门禁状态
    *
    * @return bool|null
    */
    public function getResetApprovalsOnPush()
    {
        return $this->container['resetApprovalsOnPush'];
    }

    /**
    * Sets resetApprovalsOnPush
    *
    * @param bool|null $resetApprovalsOnPush 推送时是否重置审核门禁状态
    *
    * @return $this
    */
    public function setResetApprovalsOnPush($resetApprovalsOnPush)
    {
        $this->container['resetApprovalsOnPush'] = $resetApprovalsOnPush;
        return $this;
    }

    /**
    * Gets resetReviewersOnPush
    *  推送时是否重置检视门禁状态
    *
    * @return bool|null
    */
    public function getResetReviewersOnPush()
    {
        return $this->container['resetReviewersOnPush'];
    }

    /**
    * Sets resetReviewersOnPush
    *
    * @param bool|null $resetReviewersOnPush 推送时是否重置检视门禁状态
    *
    * @return $this
    */
    public function setResetReviewersOnPush($resetReviewersOnPush)
    {
        $this->container['resetReviewersOnPush'] = $resetReviewersOnPush;
        return $this;
    }

    /**
    * Gets approversFromProject
    *  是否开启仅能从以下审核/检视人中追加审核人/检视人
    *
    * @return bool|null
    */
    public function getApproversFromProject()
    {
        return $this->container['approversFromProject'];
    }

    /**
    * Sets approversFromProject
    *
    * @param bool|null $approversFromProject 是否开启仅能从以下审核/检视人中追加审核人/检视人
    *
    * @return $this
    */
    public function setApproversFromProject($approversFromProject)
    {
        $this->container['approversFromProject'] = $approversFromProject;
        return $this;
    }

    /**
    * Gets appendReviewerIds
    *  追加检视人id列表
    *
    * @return int[]|null
    */
    public function getAppendReviewerIds()
    {
        return $this->container['appendReviewerIds'];
    }

    /**
    * Sets appendReviewerIds
    *
    * @param int[]|null $appendReviewerIds 追加检视人id列表
    *
    * @return $this
    */
    public function setAppendReviewerIds($appendReviewerIds)
    {
        $this->container['appendReviewerIds'] = $appendReviewerIds;
        return $this;
    }

    /**
    * Gets appendReviewers
    *  追加检视人实体列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null
    */
    public function getAppendReviewers()
    {
        return $this->container['appendReviewers'];
    }

    /**
    * Sets appendReviewers
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null $appendReviewers 追加检视人实体列表
    *
    * @return $this
    */
    public function setAppendReviewers($appendReviewers)
    {
        $this->container['appendReviewers'] = $appendReviewers;
        return $this;
    }

    /**
    * Gets appendApproverIds
    *  追加审核人id列表
    *
    * @return int[]|null
    */
    public function getAppendApproverIds()
    {
        return $this->container['appendApproverIds'];
    }

    /**
    * Sets appendApproverIds
    *
    * @param int[]|null $appendApproverIds 追加审核人id列表
    *
    * @return $this
    */
    public function setAppendApproverIds($appendApproverIds)
    {
        $this->container['appendApproverIds'] = $appendApproverIds;
        return $this;
    }

    /**
    * Gets appendApprovers
    *  追加审核人实体列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null
    */
    public function getAppendApprovers()
    {
        return $this->container['appendApprovers'];
    }

    /**
    * Sets appendApprovers
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null $appendApprovers 追加审核人实体列表
    *
    * @return $this
    */
    public function setAppendApprovers($appendApprovers)
    {
        $this->container['appendApprovers'] = $appendApprovers;
        return $this;
    }

    /**
    * Gets onlyMergeWhenPipelinePass
    *  是否开启流水线门禁
    *
    * @return bool|null
    */
    public function getOnlyMergeWhenPipelinePass()
    {
        return $this->container['onlyMergeWhenPipelinePass'];
    }

    /**
    * Sets onlyMergeWhenPipelinePass
    *
    * @param bool|null $onlyMergeWhenPipelinePass 是否开启流水线门禁
    *
    * @return $this
    */
    public function setOnlyMergeWhenPipelinePass($onlyMergeWhenPipelinePass)
    {
        $this->container['onlyMergeWhenPipelinePass'] = $onlyMergeWhenPipelinePass;
        return $this;
    }

    /**
    * Gets assigneeIds
    *  合并人id列表
    *
    * @return int[]|null
    */
    public function getAssigneeIds()
    {
        return $this->container['assigneeIds'];
    }

    /**
    * Sets assigneeIds
    *
    * @param int[]|null $assigneeIds 合并人id列表
    *
    * @return $this
    */
    public function setAssigneeIds($assigneeIds)
    {
        $this->container['assigneeIds'] = $assigneeIds;
        return $this;
    }

    /**
    * Gets assignees
    *  合并人实体列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null
    */
    public function getAssignees()
    {
        return $this->container['assignees'];
    }

    /**
    * Sets assignees
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null $assignees 合并人实体列表
    *
    * @return $this
    */
    public function setAssignees($assignees)
    {
        $this->container['assignees'] = $assignees;
        return $this;
    }

    /**
    * Gets approverIds
    *  审核人id列表
    *
    * @return int[]|null
    */
    public function getApproverIds()
    {
        return $this->container['approverIds'];
    }

    /**
    * Sets approverIds
    *
    * @param int[]|null $approverIds 审核人id列表
    *
    * @return $this
    */
    public function setApproverIds($approverIds)
    {
        $this->container['approverIds'] = $approverIds;
        return $this;
    }

    /**
    * Gets approvers
    *  审核人实体列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null
    */
    public function getApprovers()
    {
        return $this->container['approvers'];
    }

    /**
    * Sets approvers
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null $approvers 审核人实体列表
    *
    * @return $this
    */
    public function setApprovers($approvers)
    {
        $this->container['approvers'] = $approvers;
        return $this;
    }

    /**
    * Gets reviewerIds
    *  检视人id列表
    *
    * @return int[]|null
    */
    public function getReviewerIds()
    {
        return $this->container['reviewerIds'];
    }

    /**
    * Sets reviewerIds
    *
    * @param int[]|null $reviewerIds 检视人id列表
    *
    * @return $this
    */
    public function setReviewerIds($reviewerIds)
    {
        $this->container['reviewerIds'] = $reviewerIds;
        return $this;
    }

    /**
    * Gets reviewers
    *  检视人实体列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null
    */
    public function getReviewers()
    {
        return $this->container['reviewers'];
    }

    /**
    * Sets reviewers
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto[]|null $reviewers 检视人实体列表
    *
    * @return $this
    */
    public function setReviewers($reviewers)
    {
        $this->container['reviewers'] = $reviewers;
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

