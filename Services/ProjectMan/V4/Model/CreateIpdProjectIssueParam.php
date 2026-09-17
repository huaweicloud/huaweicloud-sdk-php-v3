<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIpdProjectIssueParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIpdProjectIssueParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * featureSet  所属特性集，适用于SF类型工作项
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
    * categoryLayerId  工作项层级ID
    * parentId  父工作项ID
    * ir2rr  IR关联的RR的ID
    * us2rr  US关联的RR的ID
    * link  关联工作项ID，多值使用英文逗号分隔
    * ir2feature  IR关联的SF的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'description' => 'string',
            'status' => 'string',
            'srcDomain' => 'string',
            'featureSet' => 'string',
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
            'needBreak' => 'string',
            'categoryLayerId' => 'string',
            'parentId' => 'string',
            'ir2rr' => 'string',
            'us2rr' => 'string',
            'link' => 'string',
            'ir2feature' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * featureSet  所属特性集，适用于SF类型工作项
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
    * categoryLayerId  工作项层级ID
    * parentId  父工作项ID
    * ir2rr  IR关联的RR的ID
    * us2rr  US关联的RR的ID
    * link  关联工作项ID，多值使用英文逗号分隔
    * ir2feature  IR关联的SF的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'status' => null,
        'srcDomain' => null,
        'featureSet' => null,
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
        'needBreak' => null,
        'categoryLayerId' => null,
        'parentId' => null,
        'ir2rr' => null,
        'us2rr' => null,
        'link' => null,
        'ir2feature' => null
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
    * featureSet  所属特性集，适用于SF类型工作项
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
    * categoryLayerId  工作项层级ID
    * parentId  父工作项ID
    * ir2rr  IR关联的RR的ID
    * us2rr  US关联的RR的ID
    * link  关联工作项ID，多值使用英文逗号分隔
    * ir2feature  IR关联的SF的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'description' => 'description',
            'status' => 'status',
            'srcDomain' => 'src_domain',
            'featureSet' => 'feature_set',
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
            'needBreak' => 'need_break',
            'categoryLayerId' => 'category_layer_id',
            'parentId' => 'parent_id',
            'ir2rr' => 'ir2rr',
            'us2rr' => 'us2rr',
            'link' => 'link',
            'ir2feature' => 'ir2feature'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * featureSet  所属特性集，适用于SF类型工作项
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
    * categoryLayerId  工作项层级ID
    * parentId  父工作项ID
    * ir2rr  IR关联的RR的ID
    * us2rr  US关联的RR的ID
    * link  关联工作项ID，多值使用英文逗号分隔
    * ir2feature  IR关联的SF的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'srcDomain' => 'setSrcDomain',
            'featureSet' => 'setFeatureSet',
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
            'needBreak' => 'setNeedBreak',
            'categoryLayerId' => 'setCategoryLayerId',
            'parentId' => 'setParentId',
            'ir2rr' => 'setIr2rr',
            'us2rr' => 'setUs2rr',
            'link' => 'setLink',
            'ir2feature' => 'setIr2feature'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  工作项名称
    * description  描述信息
    * status  状态[\"Committed\", \"Analyse\", \"ToBeConfirmed\", \"Plan\", \"Doing\", \"Delivered\", \"Checking\"]
    * srcDomain  提出项目domainId
    * featureSet  所属特性集，适用于SF类型工作项
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
    * categoryLayerId  工作项层级ID
    * parentId  父工作项ID
    * ir2rr  IR关联的RR的ID
    * us2rr  US关联的RR的ID
    * link  关联工作项ID，多值使用英文逗号分隔
    * ir2feature  IR关联的SF的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'srcDomain' => 'getSrcDomain',
            'featureSet' => 'getFeatureSet',
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
            'needBreak' => 'getNeedBreak',
            'categoryLayerId' => 'getCategoryLayerId',
            'parentId' => 'getParentId',
            'ir2rr' => 'getIr2rr',
            'us2rr' => 'getUs2rr',
            'link' => 'getLink',
            'ir2feature' => 'getIr2feature'
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
        $this->container['featureSet'] = isset($data['featureSet']) ? $data['featureSet'] : null;
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
        $this->container['categoryLayerId'] = isset($data['categoryLayerId']) ? $data['categoryLayerId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['ir2rr'] = isset($data['ir2rr']) ? $data['ir2rr'] : null;
        $this->container['us2rr'] = isset($data['us2rr']) ? $data['us2rr'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['ir2feature'] = isset($data['ir2feature']) ? $data['ir2feature'] : null;
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
    * Gets featureSet
    *  所属特性集，适用于SF类型工作项
    *
    * @return string|null
    */
    public function getFeatureSet()
    {
        return $this->container['featureSet'];
    }

    /**
    * Sets featureSet
    *
    * @param string|null $featureSet 所属特性集，适用于SF类型工作项
    *
    * @return $this
    */
    public function setFeatureSet($featureSet)
    {
        $this->container['featureSet'] = $featureSet;
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
    * Gets categoryLayerId
    *  工作项层级ID
    *
    * @return string|null
    */
    public function getCategoryLayerId()
    {
        return $this->container['categoryLayerId'];
    }

    /**
    * Sets categoryLayerId
    *
    * @param string|null $categoryLayerId 工作项层级ID
    *
    * @return $this
    */
    public function setCategoryLayerId($categoryLayerId)
    {
        $this->container['categoryLayerId'] = $categoryLayerId;
        return $this;
    }

    /**
    * Gets parentId
    *  父工作项ID
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父工作项ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets ir2rr
    *  IR关联的RR的ID
    *
    * @return string|null
    */
    public function getIr2rr()
    {
        return $this->container['ir2rr'];
    }

    /**
    * Sets ir2rr
    *
    * @param string|null $ir2rr IR关联的RR的ID
    *
    * @return $this
    */
    public function setIr2rr($ir2rr)
    {
        $this->container['ir2rr'] = $ir2rr;
        return $this;
    }

    /**
    * Gets us2rr
    *  US关联的RR的ID
    *
    * @return string|null
    */
    public function getUs2rr()
    {
        return $this->container['us2rr'];
    }

    /**
    * Sets us2rr
    *
    * @param string|null $us2rr US关联的RR的ID
    *
    * @return $this
    */
    public function setUs2rr($us2rr)
    {
        $this->container['us2rr'] = $us2rr;
        return $this;
    }

    /**
    * Gets link
    *  关联工作项ID，多值使用英文逗号分隔
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
    * @param string|null $link 关联工作项ID，多值使用英文逗号分隔
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
        return $this;
    }

    /**
    * Gets ir2feature
    *  IR关联的SF的ID
    *
    * @return string|null
    */
    public function getIr2feature()
    {
        return $this->container['ir2feature'];
    }

    /**
    * Sets ir2feature
    *
    * @param string|null $ir2feature IR关联的SF的ID
    *
    * @return $this
    */
    public function setIr2feature($ir2feature)
    {
        $this->container['ir2feature'] = $ir2feature;
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

