<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIpdProjectIssueRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIpdProjectIssueRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * submittedBy  提交人Id
    * domainId  归属项目domainId
    * recipient  承接人id
    * expectDeliveryTime  期望完成时间
    * priority  优先级
    * assignedCc  抄送人id
    * category  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * assignee  责任人
    * planPi  PI ID
    * planIteration  迭代ID
    * planStartDate  计划开始时间
    * planEndDate  计划结束时间
    * workloadManDay  计划工时
    * businessDomain  领域
    * needBreak  是否需要分解
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'description' => 'string',
            'status' => 'string',
            'srcDomain' => 'string',
            'submittedBy' => 'string',
            'domainId' => 'string',
            'recipient' => 'string[]',
            'expectDeliveryTime' => 'int',
            'priority' => 'string',
            'assignedCc' => 'string[]',
            'category' => 'string',
            'assignee' => 'string',
            'planPi' => 'string',
            'planIteration' => 'string',
            'planStartDate' => 'int',
            'planEndDate' => 'int',
            'workloadManDay' => 'int',
            'businessDomain' => 'string',
            'needBreak' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * submittedBy  提交人Id
    * domainId  归属项目domainId
    * recipient  承接人id
    * expectDeliveryTime  期望完成时间
    * priority  优先级
    * assignedCc  抄送人id
    * category  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * assignee  责任人
    * planPi  PI ID
    * planIteration  迭代ID
    * planStartDate  计划开始时间
    * planEndDate  计划结束时间
    * workloadManDay  计划工时
    * businessDomain  领域
    * needBreak  是否需要分解
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'status' => null,
        'srcDomain' => null,
        'submittedBy' => null,
        'domainId' => null,
        'recipient' => null,
        'expectDeliveryTime' => 'int64',
        'priority' => null,
        'assignedCc' => null,
        'category' => null,
        'assignee' => null,
        'planPi' => null,
        'planIteration' => null,
        'planStartDate' => 'int64',
        'planEndDate' => 'int64',
        'workloadManDay' => 'int32',
        'businessDomain' => null,
        'needBreak' => null
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
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * submittedBy  提交人Id
    * domainId  归属项目domainId
    * recipient  承接人id
    * expectDeliveryTime  期望完成时间
    * priority  优先级
    * assignedCc  抄送人id
    * category  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * assignee  责任人
    * planPi  PI ID
    * planIteration  迭代ID
    * planStartDate  计划开始时间
    * planEndDate  计划结束时间
    * workloadManDay  计划工时
    * businessDomain  领域
    * needBreak  是否需要分解
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'description' => 'description',
            'status' => 'status',
            'srcDomain' => 'src_domain',
            'submittedBy' => 'submitted_by',
            'domainId' => 'domain_id',
            'recipient' => 'recipient',
            'expectDeliveryTime' => 'expect_delivery_time',
            'priority' => 'priority',
            'assignedCc' => 'assigned_cc',
            'category' => 'category',
            'assignee' => 'assignee',
            'planPi' => 'plan_pi',
            'planIteration' => 'plan_iteration',
            'planStartDate' => 'plan_start_date',
            'planEndDate' => 'plan_end_date',
            'workloadManDay' => 'workload_man_day',
            'businessDomain' => 'business_domain',
            'needBreak' => 'need_break'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * submittedBy  提交人Id
    * domainId  归属项目domainId
    * recipient  承接人id
    * expectDeliveryTime  期望完成时间
    * priority  优先级
    * assignedCc  抄送人id
    * category  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * assignee  责任人
    * planPi  PI ID
    * planIteration  迭代ID
    * planStartDate  计划开始时间
    * planEndDate  计划结束时间
    * workloadManDay  计划工时
    * businessDomain  领域
    * needBreak  是否需要分解
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'srcDomain' => 'setSrcDomain',
            'submittedBy' => 'setSubmittedBy',
            'domainId' => 'setDomainId',
            'recipient' => 'setRecipient',
            'expectDeliveryTime' => 'setExpectDeliveryTime',
            'priority' => 'setPriority',
            'assignedCc' => 'setAssignedCc',
            'category' => 'setCategory',
            'assignee' => 'setAssignee',
            'planPi' => 'setPlanPi',
            'planIteration' => 'setPlanIteration',
            'planStartDate' => 'setPlanStartDate',
            'planEndDate' => 'setPlanEndDate',
            'workloadManDay' => 'setWorkloadManDay',
            'businessDomain' => 'setBusinessDomain',
            'needBreak' => 'setNeedBreak'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * submittedBy  提交人Id
    * domainId  归属项目domainId
    * recipient  承接人id
    * expectDeliveryTime  期望完成时间
    * priority  优先级
    * assignedCc  抄送人id
    * category  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * assignee  责任人
    * planPi  PI ID
    * planIteration  迭代ID
    * planStartDate  计划开始时间
    * planEndDate  计划结束时间
    * workloadManDay  计划工时
    * businessDomain  领域
    * needBreak  是否需要分解
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'srcDomain' => 'getSrcDomain',
            'submittedBy' => 'getSubmittedBy',
            'domainId' => 'getDomainId',
            'recipient' => 'getRecipient',
            'expectDeliveryTime' => 'getExpectDeliveryTime',
            'priority' => 'getPriority',
            'assignedCc' => 'getAssignedCc',
            'category' => 'getCategory',
            'assignee' => 'getAssignee',
            'planPi' => 'getPlanPi',
            'planIteration' => 'getPlanIteration',
            'planStartDate' => 'getPlanStartDate',
            'planEndDate' => 'getPlanEndDate',
            'workloadManDay' => 'getWorkloadManDay',
            'businessDomain' => 'getBusinessDomain',
            'needBreak' => 'getNeedBreak'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['srcDomain'] = isset($data['srcDomain']) ? $data['srcDomain'] : null;
        $this->container['submittedBy'] = isset($data['submittedBy']) ? $data['submittedBy'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['expectDeliveryTime'] = isset($data['expectDeliveryTime']) ? $data['expectDeliveryTime'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['assignedCc'] = isset($data['assignedCc']) ? $data['assignedCc'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['planPi'] = isset($data['planPi']) ? $data['planPi'] : null;
        $this->container['planIteration'] = isset($data['planIteration']) ? $data['planIteration'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['workloadManDay'] = isset($data['workloadManDay']) ? $data['workloadManDay'] : null;
        $this->container['businessDomain'] = isset($data['businessDomain']) ? $data['businessDomain'] : null;
        $this->container['needBreak'] = isset($data['needBreak']) ? $data['needBreak'] : null;
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
    * Gets title
    *  工作项名称
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
    * @param string|null $title 工作项名称
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
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
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
    * @param string|null $status 状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets srcDomain
    *  提出项目domainId
    *
    * @return string|null
    */
    public function getSrcDomain()
    {
        return $this->container['srcDomain'];
    }

    /**
    * Sets srcDomain
    *
    * @param string|null $srcDomain 提出项目domainId
    *
    * @return $this
    */
    public function setSrcDomain($srcDomain)
    {
        $this->container['srcDomain'] = $srcDomain;
        return $this;
    }

    /**
    * Gets submittedBy
    *  提交人Id
    *
    * @return string|null
    */
    public function getSubmittedBy()
    {
        return $this->container['submittedBy'];
    }

    /**
    * Sets submittedBy
    *
    * @param string|null $submittedBy 提交人Id
    *
    * @return $this
    */
    public function setSubmittedBy($submittedBy)
    {
        $this->container['submittedBy'] = $submittedBy;
        return $this;
    }

    /**
    * Gets domainId
    *  归属项目domainId
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
    * @param string|null $domainId 归属项目domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets recipient
    *  承接人id
    *
    * @return string[]|null
    */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
    * Sets recipient
    *
    * @param string[]|null $recipient 承接人id
    *
    * @return $this
    */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;
        return $this;
    }

    /**
    * Gets expectDeliveryTime
    *  期望完成时间
    *
    * @return int|null
    */
    public function getExpectDeliveryTime()
    {
        return $this->container['expectDeliveryTime'];
    }

    /**
    * Sets expectDeliveryTime
    *
    * @param int|null $expectDeliveryTime 期望完成时间
    *
    * @return $this
    */
    public function setExpectDeliveryTime($expectDeliveryTime)
    {
        $this->container['expectDeliveryTime'] = $expectDeliveryTime;
        return $this;
    }

    /**
    * Gets priority
    *  优先级
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority 优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets assignedCc
    *  抄送人id
    *
    * @return string[]|null
    */
    public function getAssignedCc()
    {
        return $this->container['assignedCc'];
    }

    /**
    * Sets assignedCc
    *
    * @param string[]|null $assignedCc 抄送人id
    *
    * @return $this
    */
    public function setAssignedCc($assignedCc)
    {
        $this->container['assignedCc'] = $assignedCc;
        return $this;
    }

    /**
    * Gets category
    *  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
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
    * @param string|null $category 工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets assignee
    *  责任人
    *
    * @return string|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param string|null $assignee 责任人
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets planPi
    *  PI ID
    *
    * @return string|null
    */
    public function getPlanPi()
    {
        return $this->container['planPi'];
    }

    /**
    * Sets planPi
    *
    * @param string|null $planPi PI ID
    *
    * @return $this
    */
    public function setPlanPi($planPi)
    {
        $this->container['planPi'] = $planPi;
        return $this;
    }

    /**
    * Gets planIteration
    *  迭代ID
    *
    * @return string|null
    */
    public function getPlanIteration()
    {
        return $this->container['planIteration'];
    }

    /**
    * Sets planIteration
    *
    * @param string|null $planIteration 迭代ID
    *
    * @return $this
    */
    public function setPlanIteration($planIteration)
    {
        $this->container['planIteration'] = $planIteration;
        return $this;
    }

    /**
    * Gets planStartDate
    *  计划开始时间
    *
    * @return int|null
    */
    public function getPlanStartDate()
    {
        return $this->container['planStartDate'];
    }

    /**
    * Sets planStartDate
    *
    * @param int|null $planStartDate 计划开始时间
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets planEndDate
    *  计划结束时间
    *
    * @return int|null
    */
    public function getPlanEndDate()
    {
        return $this->container['planEndDate'];
    }

    /**
    * Sets planEndDate
    *
    * @param int|null $planEndDate 计划结束时间
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets workloadManDay
    *  计划工时
    *
    * @return int|null
    */
    public function getWorkloadManDay()
    {
        return $this->container['workloadManDay'];
    }

    /**
    * Sets workloadManDay
    *
    * @param int|null $workloadManDay 计划工时
    *
    * @return $this
    */
    public function setWorkloadManDay($workloadManDay)
    {
        $this->container['workloadManDay'] = $workloadManDay;
        return $this;
    }

    /**
    * Gets businessDomain
    *  领域
    *
    * @return string|null
    */
    public function getBusinessDomain()
    {
        return $this->container['businessDomain'];
    }

    /**
    * Sets businessDomain
    *
    * @param string|null $businessDomain 领域
    *
    * @return $this
    */
    public function setBusinessDomain($businessDomain)
    {
        $this->container['businessDomain'] = $businessDomain;
        return $this;
    }

    /**
    * Gets needBreak
    *  是否需要分解
    *
    * @return string|null
    */
    public function getNeedBreak()
    {
        return $this->container['needBreak'];
    }

    /**
    * Sets needBreak
    *
    * @param string|null $needBreak 是否需要分解
    *
    * @return $this
    */
    public function setNeedBreak($needBreak)
    {
        $this->container['needBreak'] = $needBreak;
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

