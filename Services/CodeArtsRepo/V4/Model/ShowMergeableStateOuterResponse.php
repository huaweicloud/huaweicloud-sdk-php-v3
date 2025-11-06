<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMergeableStateOuterResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMergeableStateOuterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mergeRequestId  **参数解释：** 合并请求id。
    * state  **参数解释：** 合并请求的可合入状态。 **约束限制：** - true，可合入。 - false，不可合入。
    * conflictPassed  **参数解释：** 合并请求冲突门禁是否通过。 **约束限制：** - true，不存在冲突。 - false，存在冲突。
    * nonFfPassed  **参数解释：** 合并请求是否需要变基。 **约束限制：** - true，不需变基。 - false，需要变基。
    * mergedByUserPassed  **参数解释：** 对当前用户是否有合入当前合并请求的权限判断。 **约束限制：** - true，有权限合入。 - false，无权限合入。
    * workInProgressPassed  **参数解释：** 合并请求WIP门禁是否通过。 **约束限制：** - true，非WIP状态。 - false，WIP状态。
    * resolveDiscussionPassed  **参数解释：** 合并请求检视意见门禁是否通过。 **约束限制：** - true，检视意见门禁通过。 - false，检视意见门禁不通过。
    * ciStatePassed  **参数解释：** 合并请求流水线门禁是否通过。 **约束限制：** - true，合并请求流水线门禁通过。 - false，合并请求流水线门禁不通过。
    * mergeBySelfPassed  **参数解释：** 对当前用户是否有合入自己创建的合并请求的判断。 **约束限制：** - true，非自己创建的mr可以合入。 - false，自己创建的mr不能合入。
    * canForceMerge  **参数解释：** 当前用户是否可以强制合入当前合并请求。 **约束限制：** - true，可以强制合入。 - false，不能强制合入。
    * votePassed  **参数解释：** 合并请求评分门禁是否通过。 **约束限制：** - true，评分门禁通过。 - false，评分门禁不通过。
    * e2eCheckPassed  **参数解释：** 合并请求必须与CodeArts Req关联门禁是否通过。 **约束限制：** - true，合并请求必须与CodeArts Req关联门禁通过。 - false，合并请求必须与CodeArts Req关联门禁不通过。
    * allIssuesPassed  **参数解释：** 合并请求所有E2E单号校验必须通过门禁是否通过。 **约束限制：** - true，合并请求所有E2E单号校验必须通过门禁通过。 - false，合并请求所有E2E单号校验必须通过门禁不通过。
    * onlyOneIssuePassed  **参数解释：** 合并请求只能关联一个单号门禁是否通过。 **约束限制：** - true，合并请求只能关联一个单号门禁通过。 - false，合并请求只能关联一个单号门禁不通过。
    * approvalReviewersRequiredPassed  **参数解释：** 合并请求检视门禁是否通过。 **约束限制：** - true，合并请求检视门禁通过。 - false，合并请求检视门禁不通过。
    * approvalApproversRequiredPassed  **参数解释：** 合并请求审核门禁是否通过。 **约束限制：** - true，合并请求审核门禁通过。 - false，合并请求审核门禁不通过。
    * evaluationPassed  **参数解释：** 合并请求星级评价门禁是否通过。 **约束限制：** - true，合并请求星级评价门禁通过。 - false，合并请求星级评价门禁不通过。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mergeRequestId' => 'int',
            'state' => 'bool',
            'conflictPassed' => 'bool',
            'nonFfPassed' => 'bool',
            'mergedByUserPassed' => 'bool',
            'workInProgressPassed' => 'bool',
            'resolveDiscussionPassed' => 'bool',
            'ciStatePassed' => 'bool',
            'mergeBySelfPassed' => 'bool',
            'canForceMerge' => 'bool',
            'votePassed' => 'bool',
            'e2eCheckPassed' => 'bool',
            'allIssuesPassed' => 'bool',
            'onlyOneIssuePassed' => 'bool',
            'approvalReviewersRequiredPassed' => 'bool',
            'approvalApproversRequiredPassed' => 'bool',
            'evaluationPassed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mergeRequestId  **参数解释：** 合并请求id。
    * state  **参数解释：** 合并请求的可合入状态。 **约束限制：** - true，可合入。 - false，不可合入。
    * conflictPassed  **参数解释：** 合并请求冲突门禁是否通过。 **约束限制：** - true，不存在冲突。 - false，存在冲突。
    * nonFfPassed  **参数解释：** 合并请求是否需要变基。 **约束限制：** - true，不需变基。 - false，需要变基。
    * mergedByUserPassed  **参数解释：** 对当前用户是否有合入当前合并请求的权限判断。 **约束限制：** - true，有权限合入。 - false，无权限合入。
    * workInProgressPassed  **参数解释：** 合并请求WIP门禁是否通过。 **约束限制：** - true，非WIP状态。 - false，WIP状态。
    * resolveDiscussionPassed  **参数解释：** 合并请求检视意见门禁是否通过。 **约束限制：** - true，检视意见门禁通过。 - false，检视意见门禁不通过。
    * ciStatePassed  **参数解释：** 合并请求流水线门禁是否通过。 **约束限制：** - true，合并请求流水线门禁通过。 - false，合并请求流水线门禁不通过。
    * mergeBySelfPassed  **参数解释：** 对当前用户是否有合入自己创建的合并请求的判断。 **约束限制：** - true，非自己创建的mr可以合入。 - false，自己创建的mr不能合入。
    * canForceMerge  **参数解释：** 当前用户是否可以强制合入当前合并请求。 **约束限制：** - true，可以强制合入。 - false，不能强制合入。
    * votePassed  **参数解释：** 合并请求评分门禁是否通过。 **约束限制：** - true，评分门禁通过。 - false，评分门禁不通过。
    * e2eCheckPassed  **参数解释：** 合并请求必须与CodeArts Req关联门禁是否通过。 **约束限制：** - true，合并请求必须与CodeArts Req关联门禁通过。 - false，合并请求必须与CodeArts Req关联门禁不通过。
    * allIssuesPassed  **参数解释：** 合并请求所有E2E单号校验必须通过门禁是否通过。 **约束限制：** - true，合并请求所有E2E单号校验必须通过门禁通过。 - false，合并请求所有E2E单号校验必须通过门禁不通过。
    * onlyOneIssuePassed  **参数解释：** 合并请求只能关联一个单号门禁是否通过。 **约束限制：** - true，合并请求只能关联一个单号门禁通过。 - false，合并请求只能关联一个单号门禁不通过。
    * approvalReviewersRequiredPassed  **参数解释：** 合并请求检视门禁是否通过。 **约束限制：** - true，合并请求检视门禁通过。 - false，合并请求检视门禁不通过。
    * approvalApproversRequiredPassed  **参数解释：** 合并请求审核门禁是否通过。 **约束限制：** - true，合并请求审核门禁通过。 - false，合并请求审核门禁不通过。
    * evaluationPassed  **参数解释：** 合并请求星级评价门禁是否通过。 **约束限制：** - true，合并请求星级评价门禁通过。 - false，合并请求星级评价门禁不通过。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mergeRequestId' => 'int32',
        'state' => null,
        'conflictPassed' => null,
        'nonFfPassed' => null,
        'mergedByUserPassed' => null,
        'workInProgressPassed' => null,
        'resolveDiscussionPassed' => null,
        'ciStatePassed' => null,
        'mergeBySelfPassed' => null,
        'canForceMerge' => null,
        'votePassed' => null,
        'e2eCheckPassed' => null,
        'allIssuesPassed' => null,
        'onlyOneIssuePassed' => null,
        'approvalReviewersRequiredPassed' => null,
        'approvalApproversRequiredPassed' => null,
        'evaluationPassed' => null
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
    * mergeRequestId  **参数解释：** 合并请求id。
    * state  **参数解释：** 合并请求的可合入状态。 **约束限制：** - true，可合入。 - false，不可合入。
    * conflictPassed  **参数解释：** 合并请求冲突门禁是否通过。 **约束限制：** - true，不存在冲突。 - false，存在冲突。
    * nonFfPassed  **参数解释：** 合并请求是否需要变基。 **约束限制：** - true，不需变基。 - false，需要变基。
    * mergedByUserPassed  **参数解释：** 对当前用户是否有合入当前合并请求的权限判断。 **约束限制：** - true，有权限合入。 - false，无权限合入。
    * workInProgressPassed  **参数解释：** 合并请求WIP门禁是否通过。 **约束限制：** - true，非WIP状态。 - false，WIP状态。
    * resolveDiscussionPassed  **参数解释：** 合并请求检视意见门禁是否通过。 **约束限制：** - true，检视意见门禁通过。 - false，检视意见门禁不通过。
    * ciStatePassed  **参数解释：** 合并请求流水线门禁是否通过。 **约束限制：** - true，合并请求流水线门禁通过。 - false，合并请求流水线门禁不通过。
    * mergeBySelfPassed  **参数解释：** 对当前用户是否有合入自己创建的合并请求的判断。 **约束限制：** - true，非自己创建的mr可以合入。 - false，自己创建的mr不能合入。
    * canForceMerge  **参数解释：** 当前用户是否可以强制合入当前合并请求。 **约束限制：** - true，可以强制合入。 - false，不能强制合入。
    * votePassed  **参数解释：** 合并请求评分门禁是否通过。 **约束限制：** - true，评分门禁通过。 - false，评分门禁不通过。
    * e2eCheckPassed  **参数解释：** 合并请求必须与CodeArts Req关联门禁是否通过。 **约束限制：** - true，合并请求必须与CodeArts Req关联门禁通过。 - false，合并请求必须与CodeArts Req关联门禁不通过。
    * allIssuesPassed  **参数解释：** 合并请求所有E2E单号校验必须通过门禁是否通过。 **约束限制：** - true，合并请求所有E2E单号校验必须通过门禁通过。 - false，合并请求所有E2E单号校验必须通过门禁不通过。
    * onlyOneIssuePassed  **参数解释：** 合并请求只能关联一个单号门禁是否通过。 **约束限制：** - true，合并请求只能关联一个单号门禁通过。 - false，合并请求只能关联一个单号门禁不通过。
    * approvalReviewersRequiredPassed  **参数解释：** 合并请求检视门禁是否通过。 **约束限制：** - true，合并请求检视门禁通过。 - false，合并请求检视门禁不通过。
    * approvalApproversRequiredPassed  **参数解释：** 合并请求审核门禁是否通过。 **约束限制：** - true，合并请求审核门禁通过。 - false，合并请求审核门禁不通过。
    * evaluationPassed  **参数解释：** 合并请求星级评价门禁是否通过。 **约束限制：** - true，合并请求星级评价门禁通过。 - false，合并请求星级评价门禁不通过。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mergeRequestId' => 'merge_request_id',
            'state' => 'state',
            'conflictPassed' => 'conflict_passed',
            'nonFfPassed' => 'non_ff_passed',
            'mergedByUserPassed' => 'merged_by_user_passed',
            'workInProgressPassed' => 'work_in_progress_passed',
            'resolveDiscussionPassed' => 'resolve_discussion_passed',
            'ciStatePassed' => 'ci_state_passed',
            'mergeBySelfPassed' => 'merge_by_self_passed',
            'canForceMerge' => 'can_force_merge',
            'votePassed' => 'vote_passed',
            'e2eCheckPassed' => 'e2e_check_passed',
            'allIssuesPassed' => 'all_issues_passed',
            'onlyOneIssuePassed' => 'only_one_issue_passed',
            'approvalReviewersRequiredPassed' => 'approval_reviewers_required_passed',
            'approvalApproversRequiredPassed' => 'approval_approvers_required_passed',
            'evaluationPassed' => 'evaluation_passed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mergeRequestId  **参数解释：** 合并请求id。
    * state  **参数解释：** 合并请求的可合入状态。 **约束限制：** - true，可合入。 - false，不可合入。
    * conflictPassed  **参数解释：** 合并请求冲突门禁是否通过。 **约束限制：** - true，不存在冲突。 - false，存在冲突。
    * nonFfPassed  **参数解释：** 合并请求是否需要变基。 **约束限制：** - true，不需变基。 - false，需要变基。
    * mergedByUserPassed  **参数解释：** 对当前用户是否有合入当前合并请求的权限判断。 **约束限制：** - true，有权限合入。 - false，无权限合入。
    * workInProgressPassed  **参数解释：** 合并请求WIP门禁是否通过。 **约束限制：** - true，非WIP状态。 - false，WIP状态。
    * resolveDiscussionPassed  **参数解释：** 合并请求检视意见门禁是否通过。 **约束限制：** - true，检视意见门禁通过。 - false，检视意见门禁不通过。
    * ciStatePassed  **参数解释：** 合并请求流水线门禁是否通过。 **约束限制：** - true，合并请求流水线门禁通过。 - false，合并请求流水线门禁不通过。
    * mergeBySelfPassed  **参数解释：** 对当前用户是否有合入自己创建的合并请求的判断。 **约束限制：** - true，非自己创建的mr可以合入。 - false，自己创建的mr不能合入。
    * canForceMerge  **参数解释：** 当前用户是否可以强制合入当前合并请求。 **约束限制：** - true，可以强制合入。 - false，不能强制合入。
    * votePassed  **参数解释：** 合并请求评分门禁是否通过。 **约束限制：** - true，评分门禁通过。 - false，评分门禁不通过。
    * e2eCheckPassed  **参数解释：** 合并请求必须与CodeArts Req关联门禁是否通过。 **约束限制：** - true，合并请求必须与CodeArts Req关联门禁通过。 - false，合并请求必须与CodeArts Req关联门禁不通过。
    * allIssuesPassed  **参数解释：** 合并请求所有E2E单号校验必须通过门禁是否通过。 **约束限制：** - true，合并请求所有E2E单号校验必须通过门禁通过。 - false，合并请求所有E2E单号校验必须通过门禁不通过。
    * onlyOneIssuePassed  **参数解释：** 合并请求只能关联一个单号门禁是否通过。 **约束限制：** - true，合并请求只能关联一个单号门禁通过。 - false，合并请求只能关联一个单号门禁不通过。
    * approvalReviewersRequiredPassed  **参数解释：** 合并请求检视门禁是否通过。 **约束限制：** - true，合并请求检视门禁通过。 - false，合并请求检视门禁不通过。
    * approvalApproversRequiredPassed  **参数解释：** 合并请求审核门禁是否通过。 **约束限制：** - true，合并请求审核门禁通过。 - false，合并请求审核门禁不通过。
    * evaluationPassed  **参数解释：** 合并请求星级评价门禁是否通过。 **约束限制：** - true，合并请求星级评价门禁通过。 - false，合并请求星级评价门禁不通过。
    *
    * @var string[]
    */
    protected static $setters = [
            'mergeRequestId' => 'setMergeRequestId',
            'state' => 'setState',
            'conflictPassed' => 'setConflictPassed',
            'nonFfPassed' => 'setNonFfPassed',
            'mergedByUserPassed' => 'setMergedByUserPassed',
            'workInProgressPassed' => 'setWorkInProgressPassed',
            'resolveDiscussionPassed' => 'setResolveDiscussionPassed',
            'ciStatePassed' => 'setCiStatePassed',
            'mergeBySelfPassed' => 'setMergeBySelfPassed',
            'canForceMerge' => 'setCanForceMerge',
            'votePassed' => 'setVotePassed',
            'e2eCheckPassed' => 'setE2eCheckPassed',
            'allIssuesPassed' => 'setAllIssuesPassed',
            'onlyOneIssuePassed' => 'setOnlyOneIssuePassed',
            'approvalReviewersRequiredPassed' => 'setApprovalReviewersRequiredPassed',
            'approvalApproversRequiredPassed' => 'setApprovalApproversRequiredPassed',
            'evaluationPassed' => 'setEvaluationPassed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mergeRequestId  **参数解释：** 合并请求id。
    * state  **参数解释：** 合并请求的可合入状态。 **约束限制：** - true，可合入。 - false，不可合入。
    * conflictPassed  **参数解释：** 合并请求冲突门禁是否通过。 **约束限制：** - true，不存在冲突。 - false，存在冲突。
    * nonFfPassed  **参数解释：** 合并请求是否需要变基。 **约束限制：** - true，不需变基。 - false，需要变基。
    * mergedByUserPassed  **参数解释：** 对当前用户是否有合入当前合并请求的权限判断。 **约束限制：** - true，有权限合入。 - false，无权限合入。
    * workInProgressPassed  **参数解释：** 合并请求WIP门禁是否通过。 **约束限制：** - true，非WIP状态。 - false，WIP状态。
    * resolveDiscussionPassed  **参数解释：** 合并请求检视意见门禁是否通过。 **约束限制：** - true，检视意见门禁通过。 - false，检视意见门禁不通过。
    * ciStatePassed  **参数解释：** 合并请求流水线门禁是否通过。 **约束限制：** - true，合并请求流水线门禁通过。 - false，合并请求流水线门禁不通过。
    * mergeBySelfPassed  **参数解释：** 对当前用户是否有合入自己创建的合并请求的判断。 **约束限制：** - true，非自己创建的mr可以合入。 - false，自己创建的mr不能合入。
    * canForceMerge  **参数解释：** 当前用户是否可以强制合入当前合并请求。 **约束限制：** - true，可以强制合入。 - false，不能强制合入。
    * votePassed  **参数解释：** 合并请求评分门禁是否通过。 **约束限制：** - true，评分门禁通过。 - false，评分门禁不通过。
    * e2eCheckPassed  **参数解释：** 合并请求必须与CodeArts Req关联门禁是否通过。 **约束限制：** - true，合并请求必须与CodeArts Req关联门禁通过。 - false，合并请求必须与CodeArts Req关联门禁不通过。
    * allIssuesPassed  **参数解释：** 合并请求所有E2E单号校验必须通过门禁是否通过。 **约束限制：** - true，合并请求所有E2E单号校验必须通过门禁通过。 - false，合并请求所有E2E单号校验必须通过门禁不通过。
    * onlyOneIssuePassed  **参数解释：** 合并请求只能关联一个单号门禁是否通过。 **约束限制：** - true，合并请求只能关联一个单号门禁通过。 - false，合并请求只能关联一个单号门禁不通过。
    * approvalReviewersRequiredPassed  **参数解释：** 合并请求检视门禁是否通过。 **约束限制：** - true，合并请求检视门禁通过。 - false，合并请求检视门禁不通过。
    * approvalApproversRequiredPassed  **参数解释：** 合并请求审核门禁是否通过。 **约束限制：** - true，合并请求审核门禁通过。 - false，合并请求审核门禁不通过。
    * evaluationPassed  **参数解释：** 合并请求星级评价门禁是否通过。 **约束限制：** - true，合并请求星级评价门禁通过。 - false，合并请求星级评价门禁不通过。
    *
    * @var string[]
    */
    protected static $getters = [
            'mergeRequestId' => 'getMergeRequestId',
            'state' => 'getState',
            'conflictPassed' => 'getConflictPassed',
            'nonFfPassed' => 'getNonFfPassed',
            'mergedByUserPassed' => 'getMergedByUserPassed',
            'workInProgressPassed' => 'getWorkInProgressPassed',
            'resolveDiscussionPassed' => 'getResolveDiscussionPassed',
            'ciStatePassed' => 'getCiStatePassed',
            'mergeBySelfPassed' => 'getMergeBySelfPassed',
            'canForceMerge' => 'getCanForceMerge',
            'votePassed' => 'getVotePassed',
            'e2eCheckPassed' => 'getE2eCheckPassed',
            'allIssuesPassed' => 'getAllIssuesPassed',
            'onlyOneIssuePassed' => 'getOnlyOneIssuePassed',
            'approvalReviewersRequiredPassed' => 'getApprovalReviewersRequiredPassed',
            'approvalApproversRequiredPassed' => 'getApprovalApproversRequiredPassed',
            'evaluationPassed' => 'getEvaluationPassed'
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
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['conflictPassed'] = isset($data['conflictPassed']) ? $data['conflictPassed'] : null;
        $this->container['nonFfPassed'] = isset($data['nonFfPassed']) ? $data['nonFfPassed'] : null;
        $this->container['mergedByUserPassed'] = isset($data['mergedByUserPassed']) ? $data['mergedByUserPassed'] : null;
        $this->container['workInProgressPassed'] = isset($data['workInProgressPassed']) ? $data['workInProgressPassed'] : null;
        $this->container['resolveDiscussionPassed'] = isset($data['resolveDiscussionPassed']) ? $data['resolveDiscussionPassed'] : null;
        $this->container['ciStatePassed'] = isset($data['ciStatePassed']) ? $data['ciStatePassed'] : null;
        $this->container['mergeBySelfPassed'] = isset($data['mergeBySelfPassed']) ? $data['mergeBySelfPassed'] : null;
        $this->container['canForceMerge'] = isset($data['canForceMerge']) ? $data['canForceMerge'] : null;
        $this->container['votePassed'] = isset($data['votePassed']) ? $data['votePassed'] : null;
        $this->container['e2eCheckPassed'] = isset($data['e2eCheckPassed']) ? $data['e2eCheckPassed'] : null;
        $this->container['allIssuesPassed'] = isset($data['allIssuesPassed']) ? $data['allIssuesPassed'] : null;
        $this->container['onlyOneIssuePassed'] = isset($data['onlyOneIssuePassed']) ? $data['onlyOneIssuePassed'] : null;
        $this->container['approvalReviewersRequiredPassed'] = isset($data['approvalReviewersRequiredPassed']) ? $data['approvalReviewersRequiredPassed'] : null;
        $this->container['approvalApproversRequiredPassed'] = isset($data['approvalApproversRequiredPassed']) ? $data['approvalApproversRequiredPassed'] : null;
        $this->container['evaluationPassed'] = isset($data['evaluationPassed']) ? $data['evaluationPassed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] < 0)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be bigger than or equal to 0.";
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
    * Gets mergeRequestId
    *  **参数解释：** 合并请求id。
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
    * @param int|null $mergeRequestId **参数解释：** 合并请求id。
    *
    * @return $this
    */
    public function setMergeRequestId($mergeRequestId)
    {
        $this->container['mergeRequestId'] = $mergeRequestId;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 合并请求的可合入状态。 **约束限制：** - true，可合入。 - false，不可合入。
    *
    * @return bool|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param bool|null $state **参数解释：** 合并请求的可合入状态。 **约束限制：** - true，可合入。 - false，不可合入。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets conflictPassed
    *  **参数解释：** 合并请求冲突门禁是否通过。 **约束限制：** - true，不存在冲突。 - false，存在冲突。
    *
    * @return bool|null
    */
    public function getConflictPassed()
    {
        return $this->container['conflictPassed'];
    }

    /**
    * Sets conflictPassed
    *
    * @param bool|null $conflictPassed **参数解释：** 合并请求冲突门禁是否通过。 **约束限制：** - true，不存在冲突。 - false，存在冲突。
    *
    * @return $this
    */
    public function setConflictPassed($conflictPassed)
    {
        $this->container['conflictPassed'] = $conflictPassed;
        return $this;
    }

    /**
    * Gets nonFfPassed
    *  **参数解释：** 合并请求是否需要变基。 **约束限制：** - true，不需变基。 - false，需要变基。
    *
    * @return bool|null
    */
    public function getNonFfPassed()
    {
        return $this->container['nonFfPassed'];
    }

    /**
    * Sets nonFfPassed
    *
    * @param bool|null $nonFfPassed **参数解释：** 合并请求是否需要变基。 **约束限制：** - true，不需变基。 - false，需要变基。
    *
    * @return $this
    */
    public function setNonFfPassed($nonFfPassed)
    {
        $this->container['nonFfPassed'] = $nonFfPassed;
        return $this;
    }

    /**
    * Gets mergedByUserPassed
    *  **参数解释：** 对当前用户是否有合入当前合并请求的权限判断。 **约束限制：** - true，有权限合入。 - false，无权限合入。
    *
    * @return bool|null
    */
    public function getMergedByUserPassed()
    {
        return $this->container['mergedByUserPassed'];
    }

    /**
    * Sets mergedByUserPassed
    *
    * @param bool|null $mergedByUserPassed **参数解释：** 对当前用户是否有合入当前合并请求的权限判断。 **约束限制：** - true，有权限合入。 - false，无权限合入。
    *
    * @return $this
    */
    public function setMergedByUserPassed($mergedByUserPassed)
    {
        $this->container['mergedByUserPassed'] = $mergedByUserPassed;
        return $this;
    }

    /**
    * Gets workInProgressPassed
    *  **参数解释：** 合并请求WIP门禁是否通过。 **约束限制：** - true，非WIP状态。 - false，WIP状态。
    *
    * @return bool|null
    */
    public function getWorkInProgressPassed()
    {
        return $this->container['workInProgressPassed'];
    }

    /**
    * Sets workInProgressPassed
    *
    * @param bool|null $workInProgressPassed **参数解释：** 合并请求WIP门禁是否通过。 **约束限制：** - true，非WIP状态。 - false，WIP状态。
    *
    * @return $this
    */
    public function setWorkInProgressPassed($workInProgressPassed)
    {
        $this->container['workInProgressPassed'] = $workInProgressPassed;
        return $this;
    }

    /**
    * Gets resolveDiscussionPassed
    *  **参数解释：** 合并请求检视意见门禁是否通过。 **约束限制：** - true，检视意见门禁通过。 - false，检视意见门禁不通过。
    *
    * @return bool|null
    */
    public function getResolveDiscussionPassed()
    {
        return $this->container['resolveDiscussionPassed'];
    }

    /**
    * Sets resolveDiscussionPassed
    *
    * @param bool|null $resolveDiscussionPassed **参数解释：** 合并请求检视意见门禁是否通过。 **约束限制：** - true，检视意见门禁通过。 - false，检视意见门禁不通过。
    *
    * @return $this
    */
    public function setResolveDiscussionPassed($resolveDiscussionPassed)
    {
        $this->container['resolveDiscussionPassed'] = $resolveDiscussionPassed;
        return $this;
    }

    /**
    * Gets ciStatePassed
    *  **参数解释：** 合并请求流水线门禁是否通过。 **约束限制：** - true，合并请求流水线门禁通过。 - false，合并请求流水线门禁不通过。
    *
    * @return bool|null
    */
    public function getCiStatePassed()
    {
        return $this->container['ciStatePassed'];
    }

    /**
    * Sets ciStatePassed
    *
    * @param bool|null $ciStatePassed **参数解释：** 合并请求流水线门禁是否通过。 **约束限制：** - true，合并请求流水线门禁通过。 - false，合并请求流水线门禁不通过。
    *
    * @return $this
    */
    public function setCiStatePassed($ciStatePassed)
    {
        $this->container['ciStatePassed'] = $ciStatePassed;
        return $this;
    }

    /**
    * Gets mergeBySelfPassed
    *  **参数解释：** 对当前用户是否有合入自己创建的合并请求的判断。 **约束限制：** - true，非自己创建的mr可以合入。 - false，自己创建的mr不能合入。
    *
    * @return bool|null
    */
    public function getMergeBySelfPassed()
    {
        return $this->container['mergeBySelfPassed'];
    }

    /**
    * Sets mergeBySelfPassed
    *
    * @param bool|null $mergeBySelfPassed **参数解释：** 对当前用户是否有合入自己创建的合并请求的判断。 **约束限制：** - true，非自己创建的mr可以合入。 - false，自己创建的mr不能合入。
    *
    * @return $this
    */
    public function setMergeBySelfPassed($mergeBySelfPassed)
    {
        $this->container['mergeBySelfPassed'] = $mergeBySelfPassed;
        return $this;
    }

    /**
    * Gets canForceMerge
    *  **参数解释：** 当前用户是否可以强制合入当前合并请求。 **约束限制：** - true，可以强制合入。 - false，不能强制合入。
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
    * @param bool|null $canForceMerge **参数解释：** 当前用户是否可以强制合入当前合并请求。 **约束限制：** - true，可以强制合入。 - false，不能强制合入。
    *
    * @return $this
    */
    public function setCanForceMerge($canForceMerge)
    {
        $this->container['canForceMerge'] = $canForceMerge;
        return $this;
    }

    /**
    * Gets votePassed
    *  **参数解释：** 合并请求评分门禁是否通过。 **约束限制：** - true，评分门禁通过。 - false，评分门禁不通过。
    *
    * @return bool|null
    */
    public function getVotePassed()
    {
        return $this->container['votePassed'];
    }

    /**
    * Sets votePassed
    *
    * @param bool|null $votePassed **参数解释：** 合并请求评分门禁是否通过。 **约束限制：** - true，评分门禁通过。 - false，评分门禁不通过。
    *
    * @return $this
    */
    public function setVotePassed($votePassed)
    {
        $this->container['votePassed'] = $votePassed;
        return $this;
    }

    /**
    * Gets e2eCheckPassed
    *  **参数解释：** 合并请求必须与CodeArts Req关联门禁是否通过。 **约束限制：** - true，合并请求必须与CodeArts Req关联门禁通过。 - false，合并请求必须与CodeArts Req关联门禁不通过。
    *
    * @return bool|null
    */
    public function getE2eCheckPassed()
    {
        return $this->container['e2eCheckPassed'];
    }

    /**
    * Sets e2eCheckPassed
    *
    * @param bool|null $e2eCheckPassed **参数解释：** 合并请求必须与CodeArts Req关联门禁是否通过。 **约束限制：** - true，合并请求必须与CodeArts Req关联门禁通过。 - false，合并请求必须与CodeArts Req关联门禁不通过。
    *
    * @return $this
    */
    public function setE2eCheckPassed($e2eCheckPassed)
    {
        $this->container['e2eCheckPassed'] = $e2eCheckPassed;
        return $this;
    }

    /**
    * Gets allIssuesPassed
    *  **参数解释：** 合并请求所有E2E单号校验必须通过门禁是否通过。 **约束限制：** - true，合并请求所有E2E单号校验必须通过门禁通过。 - false，合并请求所有E2E单号校验必须通过门禁不通过。
    *
    * @return bool|null
    */
    public function getAllIssuesPassed()
    {
        return $this->container['allIssuesPassed'];
    }

    /**
    * Sets allIssuesPassed
    *
    * @param bool|null $allIssuesPassed **参数解释：** 合并请求所有E2E单号校验必须通过门禁是否通过。 **约束限制：** - true，合并请求所有E2E单号校验必须通过门禁通过。 - false，合并请求所有E2E单号校验必须通过门禁不通过。
    *
    * @return $this
    */
    public function setAllIssuesPassed($allIssuesPassed)
    {
        $this->container['allIssuesPassed'] = $allIssuesPassed;
        return $this;
    }

    /**
    * Gets onlyOneIssuePassed
    *  **参数解释：** 合并请求只能关联一个单号门禁是否通过。 **约束限制：** - true，合并请求只能关联一个单号门禁通过。 - false，合并请求只能关联一个单号门禁不通过。
    *
    * @return bool|null
    */
    public function getOnlyOneIssuePassed()
    {
        return $this->container['onlyOneIssuePassed'];
    }

    /**
    * Sets onlyOneIssuePassed
    *
    * @param bool|null $onlyOneIssuePassed **参数解释：** 合并请求只能关联一个单号门禁是否通过。 **约束限制：** - true，合并请求只能关联一个单号门禁通过。 - false，合并请求只能关联一个单号门禁不通过。
    *
    * @return $this
    */
    public function setOnlyOneIssuePassed($onlyOneIssuePassed)
    {
        $this->container['onlyOneIssuePassed'] = $onlyOneIssuePassed;
        return $this;
    }

    /**
    * Gets approvalReviewersRequiredPassed
    *  **参数解释：** 合并请求检视门禁是否通过。 **约束限制：** - true，合并请求检视门禁通过。 - false，合并请求检视门禁不通过。
    *
    * @return bool|null
    */
    public function getApprovalReviewersRequiredPassed()
    {
        return $this->container['approvalReviewersRequiredPassed'];
    }

    /**
    * Sets approvalReviewersRequiredPassed
    *
    * @param bool|null $approvalReviewersRequiredPassed **参数解释：** 合并请求检视门禁是否通过。 **约束限制：** - true，合并请求检视门禁通过。 - false，合并请求检视门禁不通过。
    *
    * @return $this
    */
    public function setApprovalReviewersRequiredPassed($approvalReviewersRequiredPassed)
    {
        $this->container['approvalReviewersRequiredPassed'] = $approvalReviewersRequiredPassed;
        return $this;
    }

    /**
    * Gets approvalApproversRequiredPassed
    *  **参数解释：** 合并请求审核门禁是否通过。 **约束限制：** - true，合并请求审核门禁通过。 - false，合并请求审核门禁不通过。
    *
    * @return bool|null
    */
    public function getApprovalApproversRequiredPassed()
    {
        return $this->container['approvalApproversRequiredPassed'];
    }

    /**
    * Sets approvalApproversRequiredPassed
    *
    * @param bool|null $approvalApproversRequiredPassed **参数解释：** 合并请求审核门禁是否通过。 **约束限制：** - true，合并请求审核门禁通过。 - false，合并请求审核门禁不通过。
    *
    * @return $this
    */
    public function setApprovalApproversRequiredPassed($approvalApproversRequiredPassed)
    {
        $this->container['approvalApproversRequiredPassed'] = $approvalApproversRequiredPassed;
        return $this;
    }

    /**
    * Gets evaluationPassed
    *  **参数解释：** 合并请求星级评价门禁是否通过。 **约束限制：** - true，合并请求星级评价门禁通过。 - false，合并请求星级评价门禁不通过。
    *
    * @return bool|null
    */
    public function getEvaluationPassed()
    {
        return $this->container['evaluationPassed'];
    }

    /**
    * Sets evaluationPassed
    *
    * @param bool|null $evaluationPassed **参数解释：** 合并请求星级评价门禁是否通过。 **约束限制：** - true，合并请求星级评价门禁通过。 - false，合并请求星级评价门禁不通过。
    *
    * @return $this
    */
    public function setEvaluationPassed($evaluationPassed)
    {
        $this->container['evaluationPassed'] = $evaluationPassed;
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

