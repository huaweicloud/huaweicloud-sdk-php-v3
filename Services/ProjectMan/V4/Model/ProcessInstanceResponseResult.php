<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInstanceResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInstanceResponse_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cc  抄送人列表
    * approver  决策人ID
    * description  评审单描述，列表接口不返回描述信息
    * closedTime  评审单完成时间
    * reviewer  评审专家ID，逗号分隔
    * type  类型
    * title  评审单标题
    * modifiedDate  评审单最后修改时间戳
    * createdBy  createdBy
    * domainId  租户id
    * number  评审单编号
    * needApproval  是否需要审批
    * br2co  基线评审对象
    * modifiedBy  modifiedBy
    * approvalTime  评审时间
    * planEndDate  计划完成时间
    * id  评审单ID
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * createdDate  创建时间
    * category  类别
    * planStartDate  计划开始时间
    * reviewConfig  reviewConfig
    * status  status
    * stage  阶段
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * attachments  附件
    * wikis  关联wiki
    * associatedocuments  关联文档
    * cos  评审对象列表
    * approvalPhaseResult  评审结果
    * ccbs  审批信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cc' => 'string',
            'approver' => 'string',
            'description' => 'string',
            'closedTime' => 'string',
            'reviewer' => 'string',
            'type' => 'string',
            'title' => 'string',
            'modifiedDate' => 'string',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCreatedBy',
            'domainId' => 'string',
            'number' => 'string',
            'needApproval' => 'bool',
            'br2co' => 'string',
            'modifiedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultModifiedBy',
            'approvalTime' => 'string',
            'planEndDate' => 'string',
            'id' => 'string',
            'state' => 'string',
            'createdDate' => 'string',
            'category' => 'string',
            'planStartDate' => 'string',
            'reviewConfig' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultReviewConfig',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultStatus',
            'stage' => 'string',
            'opinions' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultOpinions[]',
            'opinionComments' => 'string[]',
            'attachments' => 'string[]',
            'wikis' => 'string[]',
            'associatedocuments' => 'string[]',
            'cos' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCos[]',
            'approvalPhaseResult' => 'string',
            'ccbs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCcbs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cc  抄送人列表
    * approver  决策人ID
    * description  评审单描述，列表接口不返回描述信息
    * closedTime  评审单完成时间
    * reviewer  评审专家ID，逗号分隔
    * type  类型
    * title  评审单标题
    * modifiedDate  评审单最后修改时间戳
    * createdBy  createdBy
    * domainId  租户id
    * number  评审单编号
    * needApproval  是否需要审批
    * br2co  基线评审对象
    * modifiedBy  modifiedBy
    * approvalTime  评审时间
    * planEndDate  计划完成时间
    * id  评审单ID
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * createdDate  创建时间
    * category  类别
    * planStartDate  计划开始时间
    * reviewConfig  reviewConfig
    * status  status
    * stage  阶段
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * attachments  附件
    * wikis  关联wiki
    * associatedocuments  关联文档
    * cos  评审对象列表
    * approvalPhaseResult  评审结果
    * ccbs  审批信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cc' => null,
        'approver' => null,
        'description' => null,
        'closedTime' => null,
        'reviewer' => null,
        'type' => null,
        'title' => null,
        'modifiedDate' => null,
        'createdBy' => null,
        'domainId' => null,
        'number' => null,
        'needApproval' => null,
        'br2co' => null,
        'modifiedBy' => null,
        'approvalTime' => null,
        'planEndDate' => null,
        'id' => null,
        'state' => null,
        'createdDate' => null,
        'category' => null,
        'planStartDate' => null,
        'reviewConfig' => null,
        'status' => null,
        'stage' => null,
        'opinions' => null,
        'opinionComments' => null,
        'attachments' => null,
        'wikis' => null,
        'associatedocuments' => null,
        'cos' => null,
        'approvalPhaseResult' => null,
        'ccbs' => null
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
    * cc  抄送人列表
    * approver  决策人ID
    * description  评审单描述，列表接口不返回描述信息
    * closedTime  评审单完成时间
    * reviewer  评审专家ID，逗号分隔
    * type  类型
    * title  评审单标题
    * modifiedDate  评审单最后修改时间戳
    * createdBy  createdBy
    * domainId  租户id
    * number  评审单编号
    * needApproval  是否需要审批
    * br2co  基线评审对象
    * modifiedBy  modifiedBy
    * approvalTime  评审时间
    * planEndDate  计划完成时间
    * id  评审单ID
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * createdDate  创建时间
    * category  类别
    * planStartDate  计划开始时间
    * reviewConfig  reviewConfig
    * status  status
    * stage  阶段
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * attachments  附件
    * wikis  关联wiki
    * associatedocuments  关联文档
    * cos  评审对象列表
    * approvalPhaseResult  评审结果
    * ccbs  审批信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cc' => 'cc',
            'approver' => 'approver',
            'description' => 'description',
            'closedTime' => 'closed_time',
            'reviewer' => 'reviewer',
            'type' => 'type',
            'title' => 'title',
            'modifiedDate' => 'modified_date',
            'createdBy' => 'created_by',
            'domainId' => 'domain_id',
            'number' => 'number',
            'needApproval' => 'need_approval',
            'br2co' => 'br2co',
            'modifiedBy' => 'modified_by',
            'approvalTime' => 'approval_time',
            'planEndDate' => 'plan_end_date',
            'id' => 'id',
            'state' => 'state',
            'createdDate' => 'created_date',
            'category' => 'category',
            'planStartDate' => 'plan_start_date',
            'reviewConfig' => 'review_config',
            'status' => 'status',
            'stage' => 'stage',
            'opinions' => 'opinions',
            'opinionComments' => 'opinion_comments',
            'attachments' => 'attachments',
            'wikis' => 'wikis',
            'associatedocuments' => 'associatedocuments',
            'cos' => 'cos',
            'approvalPhaseResult' => 'approval_phase_result',
            'ccbs' => 'ccbs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cc  抄送人列表
    * approver  决策人ID
    * description  评审单描述，列表接口不返回描述信息
    * closedTime  评审单完成时间
    * reviewer  评审专家ID，逗号分隔
    * type  类型
    * title  评审单标题
    * modifiedDate  评审单最后修改时间戳
    * createdBy  createdBy
    * domainId  租户id
    * number  评审单编号
    * needApproval  是否需要审批
    * br2co  基线评审对象
    * modifiedBy  modifiedBy
    * approvalTime  评审时间
    * planEndDate  计划完成时间
    * id  评审单ID
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * createdDate  创建时间
    * category  类别
    * planStartDate  计划开始时间
    * reviewConfig  reviewConfig
    * status  status
    * stage  阶段
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * attachments  附件
    * wikis  关联wiki
    * associatedocuments  关联文档
    * cos  评审对象列表
    * approvalPhaseResult  评审结果
    * ccbs  审批信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'cc' => 'setCc',
            'approver' => 'setApprover',
            'description' => 'setDescription',
            'closedTime' => 'setClosedTime',
            'reviewer' => 'setReviewer',
            'type' => 'setType',
            'title' => 'setTitle',
            'modifiedDate' => 'setModifiedDate',
            'createdBy' => 'setCreatedBy',
            'domainId' => 'setDomainId',
            'number' => 'setNumber',
            'needApproval' => 'setNeedApproval',
            'br2co' => 'setBr2co',
            'modifiedBy' => 'setModifiedBy',
            'approvalTime' => 'setApprovalTime',
            'planEndDate' => 'setPlanEndDate',
            'id' => 'setId',
            'state' => 'setState',
            'createdDate' => 'setCreatedDate',
            'category' => 'setCategory',
            'planStartDate' => 'setPlanStartDate',
            'reviewConfig' => 'setReviewConfig',
            'status' => 'setStatus',
            'stage' => 'setStage',
            'opinions' => 'setOpinions',
            'opinionComments' => 'setOpinionComments',
            'attachments' => 'setAttachments',
            'wikis' => 'setWikis',
            'associatedocuments' => 'setAssociatedocuments',
            'cos' => 'setCos',
            'approvalPhaseResult' => 'setApprovalPhaseResult',
            'ccbs' => 'setCcbs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cc  抄送人列表
    * approver  决策人ID
    * description  评审单描述，列表接口不返回描述信息
    * closedTime  评审单完成时间
    * reviewer  评审专家ID，逗号分隔
    * type  类型
    * title  评审单标题
    * modifiedDate  评审单最后修改时间戳
    * createdBy  createdBy
    * domainId  租户id
    * number  评审单编号
    * needApproval  是否需要审批
    * br2co  基线评审对象
    * modifiedBy  modifiedBy
    * approvalTime  评审时间
    * planEndDate  计划完成时间
    * id  评审单ID
    * state  评审单工作状态，取值为\"正在工作\",\"作废\"
    * createdDate  创建时间
    * category  类别
    * planStartDate  计划开始时间
    * reviewConfig  reviewConfig
    * status  status
    * stage  阶段
    * opinions  变更对象评审专家Id列表（创建变更评审时使用）
    * opinionComments  评审意见
    * attachments  附件
    * wikis  关联wiki
    * associatedocuments  关联文档
    * cos  评审对象列表
    * approvalPhaseResult  评审结果
    * ccbs  审批信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'cc' => 'getCc',
            'approver' => 'getApprover',
            'description' => 'getDescription',
            'closedTime' => 'getClosedTime',
            'reviewer' => 'getReviewer',
            'type' => 'getType',
            'title' => 'getTitle',
            'modifiedDate' => 'getModifiedDate',
            'createdBy' => 'getCreatedBy',
            'domainId' => 'getDomainId',
            'number' => 'getNumber',
            'needApproval' => 'getNeedApproval',
            'br2co' => 'getBr2co',
            'modifiedBy' => 'getModifiedBy',
            'approvalTime' => 'getApprovalTime',
            'planEndDate' => 'getPlanEndDate',
            'id' => 'getId',
            'state' => 'getState',
            'createdDate' => 'getCreatedDate',
            'category' => 'getCategory',
            'planStartDate' => 'getPlanStartDate',
            'reviewConfig' => 'getReviewConfig',
            'status' => 'getStatus',
            'stage' => 'getStage',
            'opinions' => 'getOpinions',
            'opinionComments' => 'getOpinionComments',
            'attachments' => 'getAttachments',
            'wikis' => 'getWikis',
            'associatedocuments' => 'getAssociatedocuments',
            'cos' => 'getCos',
            'approvalPhaseResult' => 'getApprovalPhaseResult',
            'ccbs' => 'getCcbs'
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
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['closedTime'] = isset($data['closedTime']) ? $data['closedTime'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['needApproval'] = isset($data['needApproval']) ? $data['needApproval'] : null;
        $this->container['br2co'] = isset($data['br2co']) ? $data['br2co'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['opinions'] = isset($data['opinions']) ? $data['opinions'] : null;
        $this->container['opinionComments'] = isset($data['opinionComments']) ? $data['opinionComments'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['wikis'] = isset($data['wikis']) ? $data['wikis'] : null;
        $this->container['associatedocuments'] = isset($data['associatedocuments']) ? $data['associatedocuments'] : null;
        $this->container['cos'] = isset($data['cos']) ? $data['cos'] : null;
        $this->container['approvalPhaseResult'] = isset($data['approvalPhaseResult']) ? $data['approvalPhaseResult'] : null;
        $this->container['ccbs'] = isset($data['ccbs']) ? $data['ccbs'] : null;
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
    * Gets cc
    *  抄送人列表
    *
    * @return string|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param string|null $cc 抄送人列表
    *
    * @return $this
    */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
        return $this;
    }

    /**
    * Gets approver
    *  决策人ID
    *
    * @return string|null
    */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
    * Sets approver
    *
    * @param string|null $approver 决策人ID
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets description
    *  评审单描述，列表接口不返回描述信息
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
    * @param string|null $description 评审单描述，列表接口不返回描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets closedTime
    *  评审单完成时间
    *
    * @return string|null
    */
    public function getClosedTime()
    {
        return $this->container['closedTime'];
    }

    /**
    * Sets closedTime
    *
    * @param string|null $closedTime 评审单完成时间
    *
    * @return $this
    */
    public function setClosedTime($closedTime)
    {
        $this->container['closedTime'] = $closedTime;
        return $this;
    }

    /**
    * Gets reviewer
    *  评审专家ID，逗号分隔
    *
    * @return string|null
    */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
    * Sets reviewer
    *
    * @param string|null $reviewer 评审专家ID，逗号分隔
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets title
    *  评审单标题
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
    * @param string|null $title 评审单标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  评审单最后修改时间戳
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
    * @param string|null $modifiedDate 评审单最后修改时间戳
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCreatedBy|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCreatedBy|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets domainId
    *  租户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets number
    *  评审单编号
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 评审单编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets needApproval
    *  是否需要审批
    *
    * @return bool|null
    */
    public function getNeedApproval()
    {
        return $this->container['needApproval'];
    }

    /**
    * Sets needApproval
    *
    * @param bool|null $needApproval 是否需要审批
    *
    * @return $this
    */
    public function setNeedApproval($needApproval)
    {
        $this->container['needApproval'] = $needApproval;
        return $this;
    }

    /**
    * Gets br2co
    *  基线评审对象
    *
    * @return string|null
    */
    public function getBr2co()
    {
        return $this->container['br2co'];
    }

    /**
    * Sets br2co
    *
    * @param string|null $br2co 基线评审对象
    *
    * @return $this
    */
    public function setBr2co($br2co)
    {
        $this->container['br2co'] = $br2co;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  modifiedBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultModifiedBy|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultModifiedBy|null $modifiedBy modifiedBy
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets approvalTime
    *  评审时间
    *
    * @return string|null
    */
    public function getApprovalTime()
    {
        return $this->container['approvalTime'];
    }

    /**
    * Sets approvalTime
    *
    * @param string|null $approvalTime 评审时间
    *
    * @return $this
    */
    public function setApprovalTime($approvalTime)
    {
        $this->container['approvalTime'] = $approvalTime;
        return $this;
    }

    /**
    * Gets planEndDate
    *  计划完成时间
    *
    * @return string|null
    */
    public function getPlanEndDate()
    {
        return $this->container['planEndDate'];
    }

    /**
    * Sets planEndDate
    *
    * @param string|null $planEndDate 计划完成时间
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets id
    *  评审单ID
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
    * @param string|null $id 评审单ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets state
    *  评审单工作状态，取值为\"正在工作\",\"作废\"
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
    * @param string|null $state 评审单工作状态，取值为\"正在工作\",\"作废\"
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdDate
    *  创建时间
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
    * @param string|null $createdDate 创建时间
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets category
    *  类别
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
    * @param string|null $category 类别
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets planStartDate
    *  计划开始时间
    *
    * @return string|null
    */
    public function getPlanStartDate()
    {
        return $this->container['planStartDate'];
    }

    /**
    * Sets planStartDate
    *
    * @param string|null $planStartDate 计划开始时间
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets reviewConfig
    *  reviewConfig
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultReviewConfig|null
    */
    public function getReviewConfig()
    {
        return $this->container['reviewConfig'];
    }

    /**
    * Sets reviewConfig
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultReviewConfig|null $reviewConfig reviewConfig
    *
    * @return $this
    */
    public function setReviewConfig($reviewConfig)
    {
        $this->container['reviewConfig'] = $reviewConfig;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets stage
    *  阶段
    *
    * @return string|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string|null $stage 阶段
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets opinions
    *  变更对象评审专家Id列表（创建变更评审时使用）
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultOpinions[]|null
    */
    public function getOpinions()
    {
        return $this->container['opinions'];
    }

    /**
    * Sets opinions
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultOpinions[]|null $opinions 变更对象评审专家Id列表（创建变更评审时使用）
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
    *  评审意见
    *
    * @return string[]|null
    */
    public function getOpinionComments()
    {
        return $this->container['opinionComments'];
    }

    /**
    * Sets opinionComments
    *
    * @param string[]|null $opinionComments 评审意见
    *
    * @return $this
    */
    public function setOpinionComments($opinionComments)
    {
        $this->container['opinionComments'] = $opinionComments;
        return $this;
    }

    /**
    * Gets attachments
    *  附件
    *
    * @return string[]|null
    */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
    * Sets attachments
    *
    * @param string[]|null $attachments 附件
    *
    * @return $this
    */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;
        return $this;
    }

    /**
    * Gets wikis
    *  关联wiki
    *
    * @return string[]|null
    */
    public function getWikis()
    {
        return $this->container['wikis'];
    }

    /**
    * Sets wikis
    *
    * @param string[]|null $wikis 关联wiki
    *
    * @return $this
    */
    public function setWikis($wikis)
    {
        $this->container['wikis'] = $wikis;
        return $this;
    }

    /**
    * Gets associatedocuments
    *  关联文档
    *
    * @return string[]|null
    */
    public function getAssociatedocuments()
    {
        return $this->container['associatedocuments'];
    }

    /**
    * Sets associatedocuments
    *
    * @param string[]|null $associatedocuments 关联文档
    *
    * @return $this
    */
    public function setAssociatedocuments($associatedocuments)
    {
        $this->container['associatedocuments'] = $associatedocuments;
        return $this;
    }

    /**
    * Gets cos
    *  评审对象列表
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCos[]|null
    */
    public function getCos()
    {
        return $this->container['cos'];
    }

    /**
    * Sets cos
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCos[]|null $cos 评审对象列表
    *
    * @return $this
    */
    public function setCos($cos)
    {
        $this->container['cos'] = $cos;
        return $this;
    }

    /**
    * Gets approvalPhaseResult
    *  评审结果
    *
    * @return string|null
    */
    public function getApprovalPhaseResult()
    {
        return $this->container['approvalPhaseResult'];
    }

    /**
    * Sets approvalPhaseResult
    *
    * @param string|null $approvalPhaseResult 评审结果
    *
    * @return $this
    */
    public function setApprovalPhaseResult($approvalPhaseResult)
    {
        $this->container['approvalPhaseResult'] = $approvalPhaseResult;
        return $this;
    }

    /**
    * Gets ccbs
    *  审批信息列表
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCcbs[]|null
    */
    public function getCcbs()
    {
        return $this->container['ccbs'];
    }

    /**
    * Sets ccbs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCcbs[]|null $ccbs 审批信息列表
    *
    * @return $this
    */
    public function setCcbs($ccbs)
    {
        $this->container['ccbs'] = $ccbs;
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

