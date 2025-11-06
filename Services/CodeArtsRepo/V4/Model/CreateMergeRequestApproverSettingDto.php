<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMergeRequestApproverSettingDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMergeRequestApproverSettingDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * target  配置分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * isUseApproval  为false时，“最小检视人数”，“最小审核人数”，“重新推送代码时重置审核人”，“重新推送代码时重置检视人”，“仅能从以下审核人/检视人中追加审核人/检视人”置为默认
    * approvalRequiredApprovers  最小审核人数
    * approvalRequiredReviewers  最小检视人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人人用户id列表
    * appendApproverIds  追加审核人用户id列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人用户id列表
    * approverIds  审核人用户id列表
    * reviewerIds  检视人用户id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'target' => 'string',
            'isUseApproval' => 'bool',
            'approvalRequiredApprovers' => 'int',
            'approvalRequiredReviewers' => 'int',
            'resetApprovalsOnPush' => 'bool',
            'resetReviewersOnPush' => 'bool',
            'approversFromProject' => 'bool',
            'appendReviewerIds' => 'int[]',
            'appendApproverIds' => 'int[]',
            'onlyMergeWhenPipelinePass' => 'bool',
            'assigneeIds' => 'int[]',
            'approverIds' => 'int[]',
            'reviewerIds' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * target  配置分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * isUseApproval  为false时，“最小检视人数”，“最小审核人数”，“重新推送代码时重置审核人”，“重新推送代码时重置检视人”，“仅能从以下审核人/检视人中追加审核人/检视人”置为默认
    * approvalRequiredApprovers  最小审核人数
    * approvalRequiredReviewers  最小检视人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人人用户id列表
    * appendApproverIds  追加审核人用户id列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人用户id列表
    * approverIds  审核人用户id列表
    * reviewerIds  检视人用户id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'target' => null,
        'isUseApproval' => null,
        'approvalRequiredApprovers' => null,
        'approvalRequiredReviewers' => null,
        'resetApprovalsOnPush' => null,
        'resetReviewersOnPush' => null,
        'approversFromProject' => null,
        'appendReviewerIds' => 'int32',
        'appendApproverIds' => 'int32',
        'onlyMergeWhenPipelinePass' => null,
        'assigneeIds' => 'int32',
        'approverIds' => 'int32',
        'reviewerIds' => 'int32'
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
    * target  配置分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * isUseApproval  为false时，“最小检视人数”，“最小审核人数”，“重新推送代码时重置审核人”，“重新推送代码时重置检视人”，“仅能从以下审核人/检视人中追加审核人/检视人”置为默认
    * approvalRequiredApprovers  最小审核人数
    * approvalRequiredReviewers  最小检视人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人人用户id列表
    * appendApproverIds  追加审核人用户id列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人用户id列表
    * approverIds  审核人用户id列表
    * reviewerIds  检视人用户id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'target' => 'target',
            'isUseApproval' => 'is_use_approval',
            'approvalRequiredApprovers' => 'approval_required_approvers',
            'approvalRequiredReviewers' => 'approval_required_reviewers',
            'resetApprovalsOnPush' => 'reset_approvals_on_push',
            'resetReviewersOnPush' => 'reset_reviewers_on_push',
            'approversFromProject' => 'approvers_from_project',
            'appendReviewerIds' => 'append_reviewer_ids',
            'appendApproverIds' => 'append_approver_ids',
            'onlyMergeWhenPipelinePass' => 'only_merge_when_pipeline_pass',
            'assigneeIds' => 'assignee_ids',
            'approverIds' => 'approver_ids',
            'reviewerIds' => 'reviewer_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * target  配置分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * isUseApproval  为false时，“最小检视人数”，“最小审核人数”，“重新推送代码时重置审核人”，“重新推送代码时重置检视人”，“仅能从以下审核人/检视人中追加审核人/检视人”置为默认
    * approvalRequiredApprovers  最小审核人数
    * approvalRequiredReviewers  最小检视人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人人用户id列表
    * appendApproverIds  追加审核人用户id列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人用户id列表
    * approverIds  审核人用户id列表
    * reviewerIds  检视人用户id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'target' => 'setTarget',
            'isUseApproval' => 'setIsUseApproval',
            'approvalRequiredApprovers' => 'setApprovalRequiredApprovers',
            'approvalRequiredReviewers' => 'setApprovalRequiredReviewers',
            'resetApprovalsOnPush' => 'setResetApprovalsOnPush',
            'resetReviewersOnPush' => 'setResetReviewersOnPush',
            'approversFromProject' => 'setApproversFromProject',
            'appendReviewerIds' => 'setAppendReviewerIds',
            'appendApproverIds' => 'setAppendApproverIds',
            'onlyMergeWhenPipelinePass' => 'setOnlyMergeWhenPipelinePass',
            'assigneeIds' => 'setAssigneeIds',
            'approverIds' => 'setApproverIds',
            'reviewerIds' => 'setReviewerIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * target  配置分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    * isUseApproval  为false时，“最小检视人数”，“最小审核人数”，“重新推送代码时重置审核人”，“重新推送代码时重置检视人”，“仅能从以下审核人/检视人中追加审核人/检视人”置为默认
    * approvalRequiredApprovers  最小审核人数
    * approvalRequiredReviewers  最小检视人数
    * resetApprovalsOnPush  推送时是否重置审核门禁状态
    * resetReviewersOnPush  推送时是否重置检视门禁状态
    * approversFromProject  是否开启仅能从以下审核/检视人中追加审核人/检视人
    * appendReviewerIds  追加检视人人用户id列表
    * appendApproverIds  追加审核人用户id列表
    * onlyMergeWhenPipelinePass  是否开启流水线门禁
    * assigneeIds  合并人用户id列表
    * approverIds  审核人用户id列表
    * reviewerIds  检视人用户id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'target' => 'getTarget',
            'isUseApproval' => 'getIsUseApproval',
            'approvalRequiredApprovers' => 'getApprovalRequiredApprovers',
            'approvalRequiredReviewers' => 'getApprovalRequiredReviewers',
            'resetApprovalsOnPush' => 'getResetApprovalsOnPush',
            'resetReviewersOnPush' => 'getResetReviewersOnPush',
            'approversFromProject' => 'getApproversFromProject',
            'appendReviewerIds' => 'getAppendReviewerIds',
            'appendApproverIds' => 'getAppendApproverIds',
            'onlyMergeWhenPipelinePass' => 'getOnlyMergeWhenPipelinePass',
            'assigneeIds' => 'getAssigneeIds',
            'approverIds' => 'getApproverIds',
            'reviewerIds' => 'getReviewerIds'
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['isUseApproval'] = isset($data['isUseApproval']) ? $data['isUseApproval'] : null;
        $this->container['approvalRequiredApprovers'] = isset($data['approvalRequiredApprovers']) ? $data['approvalRequiredApprovers'] : null;
        $this->container['approvalRequiredReviewers'] = isset($data['approvalRequiredReviewers']) ? $data['approvalRequiredReviewers'] : null;
        $this->container['resetApprovalsOnPush'] = isset($data['resetApprovalsOnPush']) ? $data['resetApprovalsOnPush'] : null;
        $this->container['resetReviewersOnPush'] = isset($data['resetReviewersOnPush']) ? $data['resetReviewersOnPush'] : null;
        $this->container['approversFromProject'] = isset($data['approversFromProject']) ? $data['approversFromProject'] : null;
        $this->container['appendReviewerIds'] = isset($data['appendReviewerIds']) ? $data['appendReviewerIds'] : null;
        $this->container['appendApproverIds'] = isset($data['appendApproverIds']) ? $data['appendApproverIds'] : null;
        $this->container['onlyMergeWhenPipelinePass'] = isset($data['onlyMergeWhenPipelinePass']) ? $data['onlyMergeWhenPipelinePass'] : null;
        $this->container['assigneeIds'] = isset($data['assigneeIds']) ? $data['assigneeIds'] : null;
        $this->container['approverIds'] = isset($data['approverIds']) ? $data['approverIds'] : null;
        $this->container['reviewerIds'] = isset($data['reviewerIds']) ? $data['reviewerIds'] : null;
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
    * Gets target
    *  配置分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
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
    * @param string|null $target 配置分支，可使用*作为通配符使用，如：dev* 指以dev开头的所有分支
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets isUseApproval
    *  为false时，“最小检视人数”，“最小审核人数”，“重新推送代码时重置审核人”，“重新推送代码时重置检视人”，“仅能从以下审核人/检视人中追加审核人/检视人”置为默认
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
    * @param bool|null $isUseApproval 为false时，“最小检视人数”，“最小审核人数”，“重新推送代码时重置审核人”，“重新推送代码时重置检视人”，“仅能从以下审核人/检视人中追加审核人/检视人”置为默认
    *
    * @return $this
    */
    public function setIsUseApproval($isUseApproval)
    {
        $this->container['isUseApproval'] = $isUseApproval;
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
    *  追加检视人人用户id列表
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
    * @param int[]|null $appendReviewerIds 追加检视人人用户id列表
    *
    * @return $this
    */
    public function setAppendReviewerIds($appendReviewerIds)
    {
        $this->container['appendReviewerIds'] = $appendReviewerIds;
        return $this;
    }

    /**
    * Gets appendApproverIds
    *  追加审核人用户id列表
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
    * @param int[]|null $appendApproverIds 追加审核人用户id列表
    *
    * @return $this
    */
    public function setAppendApproverIds($appendApproverIds)
    {
        $this->container['appendApproverIds'] = $appendApproverIds;
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
    *  合并人用户id列表
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
    * @param int[]|null $assigneeIds 合并人用户id列表
    *
    * @return $this
    */
    public function setAssigneeIds($assigneeIds)
    {
        $this->container['assigneeIds'] = $assigneeIds;
        return $this;
    }

    /**
    * Gets approverIds
    *  审核人用户id列表
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
    * @param int[]|null $approverIds 审核人用户id列表
    *
    * @return $this
    */
    public function setApproverIds($approverIds)
    {
        $this->container['approverIds'] = $approverIds;
        return $this;
    }

    /**
    * Gets reviewerIds
    *  检视人用户id列表
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
    * @param int[]|null $reviewerIds 检视人用户id列表
    *
    * @return $this
    */
    public function setReviewerIds($reviewerIds)
    {
        $this->container['reviewerIds'] = $reviewerIds;
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

