<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIpdProcessInstancesResponseResultProcessInstances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIpdProcessInstancesResponse_result_process_instances';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cc  抄送人，多值使用英文逗号分隔。
    * approver  评审单决策人。
    * closedTime  评审单完成时间。
    * reviewer  评审专家。
    * type  评审分类。
    * title  标题。
    * modifiedDate  修改时间。
    * createdBy  createdBy
    * domainId  项目空间ID。
    * number  评审编号。
    * needApproval  是否需要决策人审批。
    * modifiedBy  modifiedBy
    * approvalTime  审批时间。
    * planEndDate  计划结束时间。
    * id  评审单ID。
    * state  评审单数据状态。
    * createdDate  创建时间。
    * category  评审单类型。
    * planStartDate  计划开始时间。
    * status  status
    * ccbs  决策人对象列表。
    * opinions  opinion对象列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cc' => 'string',
            'approver' => 'string',
            'closedTime' => 'string',
            'reviewer' => 'string',
            'type' => 'string',
            'title' => 'string',
            'modifiedDate' => 'string',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'domainId' => 'string',
            'number' => 'string',
            'needApproval' => 'string',
            'modifiedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'approvalTime' => 'string',
            'planEndDate' => 'string',
            'id' => 'string',
            'state' => 'string',
            'createdDate' => 'string',
            'category' => 'string',
            'planStartDate' => 'string',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ShowIpdProcessInstancesResponseResultStatus',
            'ccbs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserObject[]',
            'opinions' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ShowIpdProcessInstancesResponseResultOpinions[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cc  抄送人，多值使用英文逗号分隔。
    * approver  评审单决策人。
    * closedTime  评审单完成时间。
    * reviewer  评审专家。
    * type  评审分类。
    * title  标题。
    * modifiedDate  修改时间。
    * createdBy  createdBy
    * domainId  项目空间ID。
    * number  评审编号。
    * needApproval  是否需要决策人审批。
    * modifiedBy  modifiedBy
    * approvalTime  审批时间。
    * planEndDate  计划结束时间。
    * id  评审单ID。
    * state  评审单数据状态。
    * createdDate  创建时间。
    * category  评审单类型。
    * planStartDate  计划开始时间。
    * status  status
    * ccbs  决策人对象列表。
    * opinions  opinion对象列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cc' => null,
        'approver' => null,
        'closedTime' => null,
        'reviewer' => null,
        'type' => null,
        'title' => null,
        'modifiedDate' => null,
        'createdBy' => null,
        'domainId' => null,
        'number' => null,
        'needApproval' => null,
        'modifiedBy' => null,
        'approvalTime' => null,
        'planEndDate' => null,
        'id' => null,
        'state' => null,
        'createdDate' => null,
        'category' => null,
        'planStartDate' => null,
        'status' => null,
        'ccbs' => null,
        'opinions' => null
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
    * cc  抄送人，多值使用英文逗号分隔。
    * approver  评审单决策人。
    * closedTime  评审单完成时间。
    * reviewer  评审专家。
    * type  评审分类。
    * title  标题。
    * modifiedDate  修改时间。
    * createdBy  createdBy
    * domainId  项目空间ID。
    * number  评审编号。
    * needApproval  是否需要决策人审批。
    * modifiedBy  modifiedBy
    * approvalTime  审批时间。
    * planEndDate  计划结束时间。
    * id  评审单ID。
    * state  评审单数据状态。
    * createdDate  创建时间。
    * category  评审单类型。
    * planStartDate  计划开始时间。
    * status  status
    * ccbs  决策人对象列表。
    * opinions  opinion对象列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cc' => 'cc',
            'approver' => 'approver',
            'closedTime' => 'closed_time',
            'reviewer' => 'reviewer',
            'type' => 'type',
            'title' => 'title',
            'modifiedDate' => 'modified_date',
            'createdBy' => 'created_by',
            'domainId' => 'domain_id',
            'number' => 'number',
            'needApproval' => 'need_approval',
            'modifiedBy' => 'modified_by',
            'approvalTime' => 'approval_time',
            'planEndDate' => 'plan_end_date',
            'id' => 'id',
            'state' => 'state',
            'createdDate' => 'created_date',
            'category' => 'category',
            'planStartDate' => 'plan_start_date',
            'status' => 'status',
            'ccbs' => 'ccbs',
            'opinions' => 'opinions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cc  抄送人，多值使用英文逗号分隔。
    * approver  评审单决策人。
    * closedTime  评审单完成时间。
    * reviewer  评审专家。
    * type  评审分类。
    * title  标题。
    * modifiedDate  修改时间。
    * createdBy  createdBy
    * domainId  项目空间ID。
    * number  评审编号。
    * needApproval  是否需要决策人审批。
    * modifiedBy  modifiedBy
    * approvalTime  审批时间。
    * planEndDate  计划结束时间。
    * id  评审单ID。
    * state  评审单数据状态。
    * createdDate  创建时间。
    * category  评审单类型。
    * planStartDate  计划开始时间。
    * status  status
    * ccbs  决策人对象列表。
    * opinions  opinion对象列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'cc' => 'setCc',
            'approver' => 'setApprover',
            'closedTime' => 'setClosedTime',
            'reviewer' => 'setReviewer',
            'type' => 'setType',
            'title' => 'setTitle',
            'modifiedDate' => 'setModifiedDate',
            'createdBy' => 'setCreatedBy',
            'domainId' => 'setDomainId',
            'number' => 'setNumber',
            'needApproval' => 'setNeedApproval',
            'modifiedBy' => 'setModifiedBy',
            'approvalTime' => 'setApprovalTime',
            'planEndDate' => 'setPlanEndDate',
            'id' => 'setId',
            'state' => 'setState',
            'createdDate' => 'setCreatedDate',
            'category' => 'setCategory',
            'planStartDate' => 'setPlanStartDate',
            'status' => 'setStatus',
            'ccbs' => 'setCcbs',
            'opinions' => 'setOpinions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cc  抄送人，多值使用英文逗号分隔。
    * approver  评审单决策人。
    * closedTime  评审单完成时间。
    * reviewer  评审专家。
    * type  评审分类。
    * title  标题。
    * modifiedDate  修改时间。
    * createdBy  createdBy
    * domainId  项目空间ID。
    * number  评审编号。
    * needApproval  是否需要决策人审批。
    * modifiedBy  modifiedBy
    * approvalTime  审批时间。
    * planEndDate  计划结束时间。
    * id  评审单ID。
    * state  评审单数据状态。
    * createdDate  创建时间。
    * category  评审单类型。
    * planStartDate  计划开始时间。
    * status  status
    * ccbs  决策人对象列表。
    * opinions  opinion对象列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'cc' => 'getCc',
            'approver' => 'getApprover',
            'closedTime' => 'getClosedTime',
            'reviewer' => 'getReviewer',
            'type' => 'getType',
            'title' => 'getTitle',
            'modifiedDate' => 'getModifiedDate',
            'createdBy' => 'getCreatedBy',
            'domainId' => 'getDomainId',
            'number' => 'getNumber',
            'needApproval' => 'getNeedApproval',
            'modifiedBy' => 'getModifiedBy',
            'approvalTime' => 'getApprovalTime',
            'planEndDate' => 'getPlanEndDate',
            'id' => 'getId',
            'state' => 'getState',
            'createdDate' => 'getCreatedDate',
            'category' => 'getCategory',
            'planStartDate' => 'getPlanStartDate',
            'status' => 'getStatus',
            'ccbs' => 'getCcbs',
            'opinions' => 'getOpinions'
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
        $this->container['closedTime'] = isset($data['closedTime']) ? $data['closedTime'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['needApproval'] = isset($data['needApproval']) ? $data['needApproval'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ccbs'] = isset($data['ccbs']) ? $data['ccbs'] : null;
        $this->container['opinions'] = isset($data['opinions']) ? $data['opinions'] : null;
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
    *  抄送人，多值使用英文逗号分隔。
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
    * @param string|null $cc 抄送人，多值使用英文逗号分隔。
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
    *  评审单决策人。
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
    * @param string|null $approver 评审单决策人。
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets closedTime
    *  评审单完成时间。
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
    * @param string|null $closedTime 评审单完成时间。
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
    *  评审专家。
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
    * @param string|null $reviewer 评审专家。
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
    *  评审分类。
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
    * @param string|null $type 评审分类。
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
    *  标题。
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
    * @param string|null $title 标题。
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
    *  修改时间。
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
    * @param string|null $modifiedDate 修改时间。
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $createdBy createdBy
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
    *  项目空间ID。
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
    * @param string|null $domainId 项目空间ID。
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
    *  评审编号。
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
    * @param string|null $number 评审编号。
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
    *  是否需要决策人审批。
    *
    * @return string|null
    */
    public function getNeedApproval()
    {
        return $this->container['needApproval'];
    }

    /**
    * Sets needApproval
    *
    * @param string|null $needApproval 是否需要决策人审批。
    *
    * @return $this
    */
    public function setNeedApproval($needApproval)
    {
        $this->container['needApproval'] = $needApproval;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  modifiedBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $modifiedBy modifiedBy
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
    *  审批时间。
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
    * @param string|null $approvalTime 审批时间。
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
    *  计划结束时间。
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
    * @param string|null $planEndDate 计划结束时间。
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
    *  评审单ID。
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
    * @param string|null $id 评审单ID。
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
    *  评审单数据状态。
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
    * @param string|null $state 评审单数据状态。
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
    *  创建时间。
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
    * @param string|null $createdDate 创建时间。
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
    *  评审单类型。
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
    * @param string|null $category 评审单类型。
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
    *  计划开始时间。
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
    * @param string|null $planStartDate 计划开始时间。
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ShowIpdProcessInstancesResponseResultStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ShowIpdProcessInstancesResponseResultStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ccbs
    *  决策人对象列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserObject[]|null
    */
    public function getCcbs()
    {
        return $this->container['ccbs'];
    }

    /**
    * Sets ccbs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserObject[]|null $ccbs 决策人对象列表。
    *
    * @return $this
    */
    public function setCcbs($ccbs)
    {
        $this->container['ccbs'] = $ccbs;
        return $this;
    }

    /**
    * Gets opinions
    *  opinion对象列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ShowIpdProcessInstancesResponseResultOpinions[]|null
    */
    public function getOpinions()
    {
        return $this->container['opinions'];
    }

    /**
    * Sets opinions
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ShowIpdProcessInstancesResponseResultOpinions[]|null $opinions opinion对象列表。
    *
    * @return $this
    */
    public function setOpinions($opinions)
    {
        $this->container['opinions'] = $opinions;
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

