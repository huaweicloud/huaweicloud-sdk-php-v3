<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class COEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'COEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * afterChange  变更对象修改后内容。
    * reviewCompleteTime  变更对象评审完成时间。
    * reviewPhaseResult  变更对象评审阶段结果。
    * reviewTime  变更对象评审时间。
    * beforeChange  变更对象工作项修改前内容。
    * category  变更对象工作项类型，此处固定为CO。
    * ccbInfo  ccbInfo
    * ccbs  变更对象决策人列表，列表中只有一个元素。
    * changeType  变更类型。
    * co2review  变更对象关联的评审单ID。
    * createdBy  变更对象的创建人ID。
    * createdDate  变更对象创建时间。
    * description  变更对象描述信息。
    * id  变更对象ID。
    * issueId  变更对象关联的工作项ID。
    * issueNumber  变更对象关联的工作项编号。
    * issueCategory  变更对象关联的工作项类型。
    * modifiedBy  变更对象最后修改人ID。
    * modifiedDate  变更对象最后修改时间。
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）。
    * opinionComments  变更对象评审意见。
    * reviewComments  变更对象评审意见（评审更新时使用）。
    * approvalComments  变更对象决策意见（决策更新时使用）。
    * reviewer  变更对象评审专家Id列表。
    * approver  变更对象决策人ID数组。
    * status  变更对象状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'afterChange' => 'string',
            'reviewCompleteTime' => 'string',
            'reviewPhaseResult' => 'string',
            'reviewTime' => 'string',
            'beforeChange' => 'string',
            'category' => 'string',
            'ccbInfo' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CcbEntity',
            'ccbs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
            'changeType' => 'string',
            'co2review' => 'string',
            'createdBy' => 'string',
            'createdDate' => 'string',
            'description' => 'string',
            'id' => 'string',
            'issueId' => 'string',
            'issueNumber' => 'string',
            'issueCategory' => 'string',
            'modifiedBy' => 'string',
            'modifiedDate' => 'string',
            'opinions' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
            'opinionComments' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewOpinionEntity[]',
            'reviewComments' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewCommentEntity[]',
            'approvalComments' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewCommentEntity[]',
            'reviewer' => 'string[]',
            'approver' => 'string[]',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * afterChange  变更对象修改后内容。
    * reviewCompleteTime  变更对象评审完成时间。
    * reviewPhaseResult  变更对象评审阶段结果。
    * reviewTime  变更对象评审时间。
    * beforeChange  变更对象工作项修改前内容。
    * category  变更对象工作项类型，此处固定为CO。
    * ccbInfo  ccbInfo
    * ccbs  变更对象决策人列表，列表中只有一个元素。
    * changeType  变更类型。
    * co2review  变更对象关联的评审单ID。
    * createdBy  变更对象的创建人ID。
    * createdDate  变更对象创建时间。
    * description  变更对象描述信息。
    * id  变更对象ID。
    * issueId  变更对象关联的工作项ID。
    * issueNumber  变更对象关联的工作项编号。
    * issueCategory  变更对象关联的工作项类型。
    * modifiedBy  变更对象最后修改人ID。
    * modifiedDate  变更对象最后修改时间。
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）。
    * opinionComments  变更对象评审意见。
    * reviewComments  变更对象评审意见（评审更新时使用）。
    * approvalComments  变更对象决策意见（决策更新时使用）。
    * reviewer  变更对象评审专家Id列表。
    * approver  变更对象决策人ID数组。
    * status  变更对象状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'afterChange' => null,
        'reviewCompleteTime' => null,
        'reviewPhaseResult' => null,
        'reviewTime' => null,
        'beforeChange' => null,
        'category' => null,
        'ccbInfo' => null,
        'ccbs' => null,
        'changeType' => null,
        'co2review' => null,
        'createdBy' => null,
        'createdDate' => null,
        'description' => null,
        'id' => null,
        'issueId' => null,
        'issueNumber' => null,
        'issueCategory' => null,
        'modifiedBy' => null,
        'modifiedDate' => null,
        'opinions' => null,
        'opinionComments' => null,
        'reviewComments' => null,
        'approvalComments' => null,
        'reviewer' => null,
        'approver' => null,
        'status' => null
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
    * afterChange  变更对象修改后内容。
    * reviewCompleteTime  变更对象评审完成时间。
    * reviewPhaseResult  变更对象评审阶段结果。
    * reviewTime  变更对象评审时间。
    * beforeChange  变更对象工作项修改前内容。
    * category  变更对象工作项类型，此处固定为CO。
    * ccbInfo  ccbInfo
    * ccbs  变更对象决策人列表，列表中只有一个元素。
    * changeType  变更类型。
    * co2review  变更对象关联的评审单ID。
    * createdBy  变更对象的创建人ID。
    * createdDate  变更对象创建时间。
    * description  变更对象描述信息。
    * id  变更对象ID。
    * issueId  变更对象关联的工作项ID。
    * issueNumber  变更对象关联的工作项编号。
    * issueCategory  变更对象关联的工作项类型。
    * modifiedBy  变更对象最后修改人ID。
    * modifiedDate  变更对象最后修改时间。
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）。
    * opinionComments  变更对象评审意见。
    * reviewComments  变更对象评审意见（评审更新时使用）。
    * approvalComments  变更对象决策意见（决策更新时使用）。
    * reviewer  变更对象评审专家Id列表。
    * approver  变更对象决策人ID数组。
    * status  变更对象状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'afterChange' => 'after_change',
            'reviewCompleteTime' => 'review_complete_time',
            'reviewPhaseResult' => 'review_phase_result',
            'reviewTime' => 'review_time',
            'beforeChange' => 'before_change',
            'category' => 'category',
            'ccbInfo' => 'ccb_info',
            'ccbs' => 'ccbs',
            'changeType' => 'change_type',
            'co2review' => 'co2review',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'description' => 'description',
            'id' => 'id',
            'issueId' => 'issue_id',
            'issueNumber' => 'issue_number',
            'issueCategory' => 'issue_category',
            'modifiedBy' => 'modified_by',
            'modifiedDate' => 'modified_date',
            'opinions' => 'opinions',
            'opinionComments' => 'opinion_comments',
            'reviewComments' => 'review_comments',
            'approvalComments' => 'approval_comments',
            'reviewer' => 'reviewer',
            'approver' => 'approver',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * afterChange  变更对象修改后内容。
    * reviewCompleteTime  变更对象评审完成时间。
    * reviewPhaseResult  变更对象评审阶段结果。
    * reviewTime  变更对象评审时间。
    * beforeChange  变更对象工作项修改前内容。
    * category  变更对象工作项类型，此处固定为CO。
    * ccbInfo  ccbInfo
    * ccbs  变更对象决策人列表，列表中只有一个元素。
    * changeType  变更类型。
    * co2review  变更对象关联的评审单ID。
    * createdBy  变更对象的创建人ID。
    * createdDate  变更对象创建时间。
    * description  变更对象描述信息。
    * id  变更对象ID。
    * issueId  变更对象关联的工作项ID。
    * issueNumber  变更对象关联的工作项编号。
    * issueCategory  变更对象关联的工作项类型。
    * modifiedBy  变更对象最后修改人ID。
    * modifiedDate  变更对象最后修改时间。
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）。
    * opinionComments  变更对象评审意见。
    * reviewComments  变更对象评审意见（评审更新时使用）。
    * approvalComments  变更对象决策意见（决策更新时使用）。
    * reviewer  变更对象评审专家Id列表。
    * approver  变更对象决策人ID数组。
    * status  变更对象状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'afterChange' => 'setAfterChange',
            'reviewCompleteTime' => 'setReviewCompleteTime',
            'reviewPhaseResult' => 'setReviewPhaseResult',
            'reviewTime' => 'setReviewTime',
            'beforeChange' => 'setBeforeChange',
            'category' => 'setCategory',
            'ccbInfo' => 'setCcbInfo',
            'ccbs' => 'setCcbs',
            'changeType' => 'setChangeType',
            'co2review' => 'setCo2review',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'description' => 'setDescription',
            'id' => 'setId',
            'issueId' => 'setIssueId',
            'issueNumber' => 'setIssueNumber',
            'issueCategory' => 'setIssueCategory',
            'modifiedBy' => 'setModifiedBy',
            'modifiedDate' => 'setModifiedDate',
            'opinions' => 'setOpinions',
            'opinionComments' => 'setOpinionComments',
            'reviewComments' => 'setReviewComments',
            'approvalComments' => 'setApprovalComments',
            'reviewer' => 'setReviewer',
            'approver' => 'setApprover',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * afterChange  变更对象修改后内容。
    * reviewCompleteTime  变更对象评审完成时间。
    * reviewPhaseResult  变更对象评审阶段结果。
    * reviewTime  变更对象评审时间。
    * beforeChange  变更对象工作项修改前内容。
    * category  变更对象工作项类型，此处固定为CO。
    * ccbInfo  ccbInfo
    * ccbs  变更对象决策人列表，列表中只有一个元素。
    * changeType  变更类型。
    * co2review  变更对象关联的评审单ID。
    * createdBy  变更对象的创建人ID。
    * createdDate  变更对象创建时间。
    * description  变更对象描述信息。
    * id  变更对象ID。
    * issueId  变更对象关联的工作项ID。
    * issueNumber  变更对象关联的工作项编号。
    * issueCategory  变更对象关联的工作项类型。
    * modifiedBy  变更对象最后修改人ID。
    * modifiedDate  变更对象最后修改时间。
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）。
    * opinionComments  变更对象评审意见。
    * reviewComments  变更对象评审意见（评审更新时使用）。
    * approvalComments  变更对象决策意见（决策更新时使用）。
    * reviewer  变更对象评审专家Id列表。
    * approver  变更对象决策人ID数组。
    * status  变更对象状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'afterChange' => 'getAfterChange',
            'reviewCompleteTime' => 'getReviewCompleteTime',
            'reviewPhaseResult' => 'getReviewPhaseResult',
            'reviewTime' => 'getReviewTime',
            'beforeChange' => 'getBeforeChange',
            'category' => 'getCategory',
            'ccbInfo' => 'getCcbInfo',
            'ccbs' => 'getCcbs',
            'changeType' => 'getChangeType',
            'co2review' => 'getCo2review',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'description' => 'getDescription',
            'id' => 'getId',
            'issueId' => 'getIssueId',
            'issueNumber' => 'getIssueNumber',
            'issueCategory' => 'getIssueCategory',
            'modifiedBy' => 'getModifiedBy',
            'modifiedDate' => 'getModifiedDate',
            'opinions' => 'getOpinions',
            'opinionComments' => 'getOpinionComments',
            'reviewComments' => 'getReviewComments',
            'approvalComments' => 'getApprovalComments',
            'reviewer' => 'getReviewer',
            'approver' => 'getApprover',
            'status' => 'getStatus'
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
    const CATEGORY_CO = 'CO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_CO,
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
        $this->container['afterChange'] = isset($data['afterChange']) ? $data['afterChange'] : null;
        $this->container['reviewCompleteTime'] = isset($data['reviewCompleteTime']) ? $data['reviewCompleteTime'] : null;
        $this->container['reviewPhaseResult'] = isset($data['reviewPhaseResult']) ? $data['reviewPhaseResult'] : null;
        $this->container['reviewTime'] = isset($data['reviewTime']) ? $data['reviewTime'] : null;
        $this->container['beforeChange'] = isset($data['beforeChange']) ? $data['beforeChange'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['ccbInfo'] = isset($data['ccbInfo']) ? $data['ccbInfo'] : null;
        $this->container['ccbs'] = isset($data['ccbs']) ? $data['ccbs'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['co2review'] = isset($data['co2review']) ? $data['co2review'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['issueNumber'] = isset($data['issueNumber']) ? $data['issueNumber'] : null;
        $this->container['issueCategory'] = isset($data['issueCategory']) ? $data['issueCategory'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['opinions'] = isset($data['opinions']) ? $data['opinions'] : null;
        $this->container['opinionComments'] = isset($data['opinionComments']) ? $data['opinionComments'] : null;
        $this->container['reviewComments'] = isset($data['reviewComments']) ? $data['reviewComments'] : null;
        $this->container['approvalComments'] = isset($data['approvalComments']) ? $data['approvalComments'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['afterChange']) && (mb_strlen($this->container['afterChange']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'afterChange', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['afterChange']) && (mb_strlen($this->container['afterChange']) < 0)) {
                $invalidProperties[] = "invalid value for 'afterChange', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reviewCompleteTime']) && (mb_strlen($this->container['reviewCompleteTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'reviewCompleteTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reviewCompleteTime']) && (mb_strlen($this->container['reviewCompleteTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewCompleteTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reviewPhaseResult']) && (mb_strlen($this->container['reviewPhaseResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'reviewPhaseResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reviewPhaseResult']) && (mb_strlen($this->container['reviewPhaseResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewPhaseResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reviewTime']) && (mb_strlen($this->container['reviewTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'reviewTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reviewTime']) && (mb_strlen($this->container['reviewTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['beforeChange']) && (mb_strlen($this->container['beforeChange']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'beforeChange', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['beforeChange']) && (mb_strlen($this->container['beforeChange']) < 0)) {
                $invalidProperties[] = "invalid value for 'beforeChange', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['changeType']) && (mb_strlen($this->container['changeType']) > 32)) {
                $invalidProperties[] = "invalid value for 'changeType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['changeType']) && (mb_strlen($this->container['changeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'changeType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['co2review']) && (mb_strlen($this->container['co2review']) > 32)) {
                $invalidProperties[] = "invalid value for 'co2review', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['co2review']) && (mb_strlen($this->container['co2review']) < 0)) {
                $invalidProperties[] = "invalid value for 'co2review', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['issueId']) && (mb_strlen($this->container['issueId']) > 19)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['issueId']) && (mb_strlen($this->container['issueId']) < 18)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['issueNumber']) && (mb_strlen($this->container['issueNumber']) > 32)) {
                $invalidProperties[] = "invalid value for 'issueNumber', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['issueNumber']) && (mb_strlen($this->container['issueNumber']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueNumber', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueCategory']) && (mb_strlen($this->container['issueCategory']) > 32)) {
                $invalidProperties[] = "invalid value for 'issueCategory', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['issueCategory']) && (mb_strlen($this->container['issueCategory']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueCategory', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modifiedBy']) && (mb_strlen($this->container['modifiedBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifiedBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifiedDate']) && (mb_strlen($this->container['modifiedDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'modifiedDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modifiedDate']) && (mb_strlen($this->container['modifiedDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifiedDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    * Gets afterChange
    *  变更对象修改后内容。
    *
    * @return string|null
    */
    public function getAfterChange()
    {
        return $this->container['afterChange'];
    }

    /**
    * Sets afterChange
    *
    * @param string|null $afterChange 变更对象修改后内容。
    *
    * @return $this
    */
    public function setAfterChange($afterChange)
    {
        $this->container['afterChange'] = $afterChange;
        return $this;
    }

    /**
    * Gets reviewCompleteTime
    *  变更对象评审完成时间。
    *
    * @return string|null
    */
    public function getReviewCompleteTime()
    {
        return $this->container['reviewCompleteTime'];
    }

    /**
    * Sets reviewCompleteTime
    *
    * @param string|null $reviewCompleteTime 变更对象评审完成时间。
    *
    * @return $this
    */
    public function setReviewCompleteTime($reviewCompleteTime)
    {
        $this->container['reviewCompleteTime'] = $reviewCompleteTime;
        return $this;
    }

    /**
    * Gets reviewPhaseResult
    *  变更对象评审阶段结果。
    *
    * @return string|null
    */
    public function getReviewPhaseResult()
    {
        return $this->container['reviewPhaseResult'];
    }

    /**
    * Sets reviewPhaseResult
    *
    * @param string|null $reviewPhaseResult 变更对象评审阶段结果。
    *
    * @return $this
    */
    public function setReviewPhaseResult($reviewPhaseResult)
    {
        $this->container['reviewPhaseResult'] = $reviewPhaseResult;
        return $this;
    }

    /**
    * Gets reviewTime
    *  变更对象评审时间。
    *
    * @return string|null
    */
    public function getReviewTime()
    {
        return $this->container['reviewTime'];
    }

    /**
    * Sets reviewTime
    *
    * @param string|null $reviewTime 变更对象评审时间。
    *
    * @return $this
    */
    public function setReviewTime($reviewTime)
    {
        $this->container['reviewTime'] = $reviewTime;
        return $this;
    }

    /**
    * Gets beforeChange
    *  变更对象工作项修改前内容。
    *
    * @return string|null
    */
    public function getBeforeChange()
    {
        return $this->container['beforeChange'];
    }

    /**
    * Sets beforeChange
    *
    * @param string|null $beforeChange 变更对象工作项修改前内容。
    *
    * @return $this
    */
    public function setBeforeChange($beforeChange)
    {
        $this->container['beforeChange'] = $beforeChange;
        return $this;
    }

    /**
    * Gets category
    *  变更对象工作项类型，此处固定为CO。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 变更对象工作项类型，此处固定为CO。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets ccbInfo
    *  ccbInfo
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CcbEntity|null
    */
    public function getCcbInfo()
    {
        return $this->container['ccbInfo'];
    }

    /**
    * Sets ccbInfo
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CcbEntity|null $ccbInfo ccbInfo
    *
    * @return $this
    */
    public function setCcbInfo($ccbInfo)
    {
        $this->container['ccbInfo'] = $ccbInfo;
        return $this;
    }

    /**
    * Gets ccbs
    *  变更对象决策人列表，列表中只有一个元素。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null
    */
    public function getCcbs()
    {
        return $this->container['ccbs'];
    }

    /**
    * Sets ccbs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $ccbs 变更对象决策人列表，列表中只有一个元素。
    *
    * @return $this
    */
    public function setCcbs($ccbs)
    {
        $this->container['ccbs'] = $ccbs;
        return $this;
    }

    /**
    * Gets changeType
    *  变更类型。
    *
    * @return string|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string|null $changeType 变更类型。
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets co2review
    *  变更对象关联的评审单ID。
    *
    * @return string|null
    */
    public function getCo2review()
    {
        return $this->container['co2review'];
    }

    /**
    * Sets co2review
    *
    * @param string|null $co2review 变更对象关联的评审单ID。
    *
    * @return $this
    */
    public function setCo2review($co2review)
    {
        $this->container['co2review'] = $co2review;
        return $this;
    }

    /**
    * Gets createdBy
    *  变更对象的创建人ID。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 变更对象的创建人ID。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  变更对象创建时间。
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 变更对象创建时间。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets description
    *  变更对象描述信息。
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
    * @param string|null $description 变更对象描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  变更对象ID。
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
    * @param string|null $id 变更对象ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets issueId
    *  变更对象关联的工作项ID。
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 变更对象关联的工作项ID。
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets issueNumber
    *  变更对象关联的工作项编号。
    *
    * @return string|null
    */
    public function getIssueNumber()
    {
        return $this->container['issueNumber'];
    }

    /**
    * Sets issueNumber
    *
    * @param string|null $issueNumber 变更对象关联的工作项编号。
    *
    * @return $this
    */
    public function setIssueNumber($issueNumber)
    {
        $this->container['issueNumber'] = $issueNumber;
        return $this;
    }

    /**
    * Gets issueCategory
    *  变更对象关联的工作项类型。
    *
    * @return string|null
    */
    public function getIssueCategory()
    {
        return $this->container['issueCategory'];
    }

    /**
    * Sets issueCategory
    *
    * @param string|null $issueCategory 变更对象关联的工作项类型。
    *
    * @return $this
    */
    public function setIssueCategory($issueCategory)
    {
        $this->container['issueCategory'] = $issueCategory;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  变更对象最后修改人ID。
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy 变更对象最后修改人ID。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  变更对象最后修改时间。
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate 变更对象最后修改时间。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets opinions
    *  变更对象评审专家Id列表（创建变更评审时使用）。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null
    */
    public function getOpinions()
    {
        return $this->container['opinions'];
    }

    /**
    * Sets opinions
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $opinions 变更对象评审专家Id列表（创建变更评审时使用）。
    *
    * @return $this
    */
    public function setOpinions($opinions)
    {
        $this->container['opinions'] = $opinions;
        return $this;
    }

    /**
    * Gets opinionComments
    *  变更对象评审意见。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewOpinionEntity[]|null
    */
    public function getOpinionComments()
    {
        return $this->container['opinionComments'];
    }

    /**
    * Sets opinionComments
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewOpinionEntity[]|null $opinionComments 变更对象评审意见。
    *
    * @return $this
    */
    public function setOpinionComments($opinionComments)
    {
        $this->container['opinionComments'] = $opinionComments;
        return $this;
    }

    /**
    * Gets reviewComments
    *  变更对象评审意见（评审更新时使用）。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewCommentEntity[]|null
    */
    public function getReviewComments()
    {
        return $this->container['reviewComments'];
    }

    /**
    * Sets reviewComments
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewCommentEntity[]|null $reviewComments 变更对象评审意见（评审更新时使用）。
    *
    * @return $this
    */
    public function setReviewComments($reviewComments)
    {
        $this->container['reviewComments'] = $reviewComments;
        return $this;
    }

    /**
    * Gets approvalComments
    *  变更对象决策意见（决策更新时使用）。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewCommentEntity[]|null
    */
    public function getApprovalComments()
    {
        return $this->container['approvalComments'];
    }

    /**
    * Sets approvalComments
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ReviewCommentEntity[]|null $approvalComments 变更对象决策意见（决策更新时使用）。
    *
    * @return $this
    */
    public function setApprovalComments($approvalComments)
    {
        $this->container['approvalComments'] = $approvalComments;
        return $this;
    }

    /**
    * Gets reviewer
    *  变更对象评审专家Id列表。
    *
    * @return string[]|null
    */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
    * Sets reviewer
    *
    * @param string[]|null $reviewer 变更对象评审专家Id列表。
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
        return $this;
    }

    /**
    * Gets approver
    *  变更对象决策人ID数组。
    *
    * @return string[]|null
    */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
    * Sets approver
    *
    * @param string[]|null $approver 变更对象决策人ID数组。
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets status
    *  变更对象状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 变更对象状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

