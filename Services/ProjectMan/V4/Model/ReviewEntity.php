<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReviewEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReviewEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  评审单ID。
    * number  评审单编号。
    * state  评审单的生命周期。
    * title  评审单标题。
    * category  评审单类别。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * assignedCc  评审单抄送人。
    * createdTime  评审单创建时间戳。
    * modifiedTime  评审单最后修改时间戳。
    * planEndDate  计划完成日期时间戳。
    * planStartDate  计划开始日期时间戳。
    * closeTime  评审单完成时间。
    * status  status
    * description  评审单描述。
    * closedTime  评审单完成时间。
    * approver  决策人ID。
    * reviewer  评审专家ID。
    * cos  评审对象列表。
    * ccbs  审批信息列表。
    * oldStatus  oldStatus
    * cc  抄送人列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'number' => 'string',
            'state' => 'string',
            'title' => 'string',
            'category' => 'string',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'modifiedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'assignedCc' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]',
            'createdTime' => 'string',
            'modifiedTime' => 'string',
            'planEndDate' => 'string',
            'planStartDate' => 'string',
            'closeTime' => 'string',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StatusEntity',
            'description' => 'string',
            'closedTime' => 'string',
            'approver' => 'string',
            'reviewer' => 'string',
            'cos' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\COEntity[]',
            'ccbs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CcbEntity[]',
            'oldStatus' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\StatusEntity',
            'cc' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  评审单ID。
    * number  评审单编号。
    * state  评审单的生命周期。
    * title  评审单标题。
    * category  评审单类别。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * assignedCc  评审单抄送人。
    * createdTime  评审单创建时间戳。
    * modifiedTime  评审单最后修改时间戳。
    * planEndDate  计划完成日期时间戳。
    * planStartDate  计划开始日期时间戳。
    * closeTime  评审单完成时间。
    * status  status
    * description  评审单描述。
    * closedTime  评审单完成时间。
    * approver  决策人ID。
    * reviewer  评审专家ID。
    * cos  评审对象列表。
    * ccbs  审批信息列表。
    * oldStatus  oldStatus
    * cc  抄送人列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'number' => null,
        'state' => null,
        'title' => null,
        'category' => null,
        'createdBy' => null,
        'modifiedBy' => null,
        'assignedCc' => null,
        'createdTime' => null,
        'modifiedTime' => null,
        'planEndDate' => null,
        'planStartDate' => null,
        'closeTime' => null,
        'status' => null,
        'description' => null,
        'closedTime' => null,
        'approver' => null,
        'reviewer' => null,
        'cos' => null,
        'ccbs' => null,
        'oldStatus' => null,
        'cc' => null
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
    * id  评审单ID。
    * number  评审单编号。
    * state  评审单的生命周期。
    * title  评审单标题。
    * category  评审单类别。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * assignedCc  评审单抄送人。
    * createdTime  评审单创建时间戳。
    * modifiedTime  评审单最后修改时间戳。
    * planEndDate  计划完成日期时间戳。
    * planStartDate  计划开始日期时间戳。
    * closeTime  评审单完成时间。
    * status  status
    * description  评审单描述。
    * closedTime  评审单完成时间。
    * approver  决策人ID。
    * reviewer  评审专家ID。
    * cos  评审对象列表。
    * ccbs  审批信息列表。
    * oldStatus  oldStatus
    * cc  抄送人列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'number' => 'number',
            'state' => 'state',
            'title' => 'title',
            'category' => 'category',
            'createdBy' => 'created_by',
            'modifiedBy' => 'modified_by',
            'assignedCc' => 'assigned_cc',
            'createdTime' => 'created_time',
            'modifiedTime' => 'modified_time',
            'planEndDate' => 'plan_end_date',
            'planStartDate' => 'plan_start_date',
            'closeTime' => 'close_time',
            'status' => 'status',
            'description' => 'description',
            'closedTime' => 'closed_time',
            'approver' => 'approver',
            'reviewer' => 'reviewer',
            'cos' => 'cos',
            'ccbs' => 'ccbs',
            'oldStatus' => 'old_status',
            'cc' => 'cc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  评审单ID。
    * number  评审单编号。
    * state  评审单的生命周期。
    * title  评审单标题。
    * category  评审单类别。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * assignedCc  评审单抄送人。
    * createdTime  评审单创建时间戳。
    * modifiedTime  评审单最后修改时间戳。
    * planEndDate  计划完成日期时间戳。
    * planStartDate  计划开始日期时间戳。
    * closeTime  评审单完成时间。
    * status  status
    * description  评审单描述。
    * closedTime  评审单完成时间。
    * approver  决策人ID。
    * reviewer  评审专家ID。
    * cos  评审对象列表。
    * ccbs  审批信息列表。
    * oldStatus  oldStatus
    * cc  抄送人列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'number' => 'setNumber',
            'state' => 'setState',
            'title' => 'setTitle',
            'category' => 'setCategory',
            'createdBy' => 'setCreatedBy',
            'modifiedBy' => 'setModifiedBy',
            'assignedCc' => 'setAssignedCc',
            'createdTime' => 'setCreatedTime',
            'modifiedTime' => 'setModifiedTime',
            'planEndDate' => 'setPlanEndDate',
            'planStartDate' => 'setPlanStartDate',
            'closeTime' => 'setCloseTime',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'closedTime' => 'setClosedTime',
            'approver' => 'setApprover',
            'reviewer' => 'setReviewer',
            'cos' => 'setCos',
            'ccbs' => 'setCcbs',
            'oldStatus' => 'setOldStatus',
            'cc' => 'setCc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  评审单ID。
    * number  评审单编号。
    * state  评审单的生命周期。
    * title  评审单标题。
    * category  评审单类别。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * assignedCc  评审单抄送人。
    * createdTime  评审单创建时间戳。
    * modifiedTime  评审单最后修改时间戳。
    * planEndDate  计划完成日期时间戳。
    * planStartDate  计划开始日期时间戳。
    * closeTime  评审单完成时间。
    * status  status
    * description  评审单描述。
    * closedTime  评审单完成时间。
    * approver  决策人ID。
    * reviewer  评审专家ID。
    * cos  评审对象列表。
    * ccbs  审批信息列表。
    * oldStatus  oldStatus
    * cc  抄送人列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'number' => 'getNumber',
            'state' => 'getState',
            'title' => 'getTitle',
            'category' => 'getCategory',
            'createdBy' => 'getCreatedBy',
            'modifiedBy' => 'getModifiedBy',
            'assignedCc' => 'getAssignedCc',
            'createdTime' => 'getCreatedTime',
            'modifiedTime' => 'getModifiedTime',
            'planEndDate' => 'getPlanEndDate',
            'planStartDate' => 'getPlanStartDate',
            'closeTime' => 'getCloseTime',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'closedTime' => 'getClosedTime',
            'approver' => 'getApprover',
            'reviewer' => 'getReviewer',
            'cos' => 'getCos',
            'ccbs' => 'getCcbs',
            'oldStatus' => 'getOldStatus',
            'cc' => 'getCc'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['assignedCc'] = isset($data['assignedCc']) ? $data['assignedCc'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['closeTime'] = isset($data['closeTime']) ? $data['closeTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['closedTime'] = isset($data['closedTime']) ? $data['closedTime'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['cos'] = isset($data['cos']) ? $data['cos'] : null;
        $this->container['ccbs'] = isset($data['ccbs']) ? $data['ccbs'] : null;
        $this->container['oldStatus'] = isset($data['oldStatus']) ? $data['oldStatus'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 20)) {
                $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 16)) {
                $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 4)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 2)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 2)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdTime']) && (mb_strlen($this->container['createdTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifiedTime']) && (mb_strlen($this->container['modifiedTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'modifiedTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modifiedTime']) && (mb_strlen($this->container['modifiedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifiedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['planEndDate']) && (mb_strlen($this->container['planEndDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'planEndDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['planEndDate']) && (mb_strlen($this->container['planEndDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'planEndDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['planStartDate']) && (mb_strlen($this->container['planStartDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'planStartDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['planStartDate']) && (mb_strlen($this->container['planStartDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'planStartDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closeTime']) && (mb_strlen($this->container['closeTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'closeTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['closeTime']) && (mb_strlen($this->container['closeTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'closeTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['closedTime']) && (mb_strlen($this->container['closedTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'closedTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['closedTime']) && (mb_strlen($this->container['closedTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'closedTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['approver']) && (mb_strlen($this->container['approver']) > 32)) {
                $invalidProperties[] = "invalid value for 'approver', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['approver']) && (mb_strlen($this->container['approver']) < 0)) {
                $invalidProperties[] = "invalid value for 'approver', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reviewer']) && (mb_strlen($this->container['reviewer']) > 350)) {
                $invalidProperties[] = "invalid value for 'reviewer', the character length must be smaller than or equal to 350.";
            }
            if (!is_null($this->container['reviewer']) && (mb_strlen($this->container['reviewer']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewer', the character length must be bigger than or equal to 0.";
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
    * Gets number
    *  评审单编号。
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
    * @param string|null $number 评审单编号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets state
    *  评审单的生命周期。
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
    * @param string|null $state 评审单的生命周期。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets title
    *  评审单标题。
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
    * @param string|null $title 评审单标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets category
    *  评审单类别。
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
    * @param string|null $category 评审单类别。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  modifiedBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $modifiedBy modifiedBy
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets assignedCc
    *  评审单抄送人。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null
    */
    public function getAssignedCc()
    {
        return $this->container['assignedCc'];
    }

    /**
    * Sets assignedCc
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $assignedCc 评审单抄送人。
    *
    * @return $this
    */
    public function setAssignedCc($assignedCc)
    {
        $this->container['assignedCc'] = $assignedCc;
        return $this;
    }

    /**
    * Gets createdTime
    *  评审单创建时间戳。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 评审单创建时间戳。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  评审单最后修改时间戳。
    *
    * @return string|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param string|null $modifiedTime 评审单最后修改时间戳。
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
        return $this;
    }

    /**
    * Gets planEndDate
    *  计划完成日期时间戳。
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
    * @param string|null $planEndDate 计划完成日期时间戳。
    *
    * @return $this
    */
    public function setPlanEndDate($planEndDate)
    {
        $this->container['planEndDate'] = $planEndDate;
        return $this;
    }

    /**
    * Gets planStartDate
    *  计划开始日期时间戳。
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
    * @param string|null $planStartDate 计划开始日期时间戳。
    *
    * @return $this
    */
    public function setPlanStartDate($planStartDate)
    {
        $this->container['planStartDate'] = $planStartDate;
        return $this;
    }

    /**
    * Gets closeTime
    *  评审单完成时间。
    *
    * @return string|null
    */
    public function getCloseTime()
    {
        return $this->container['closeTime'];
    }

    /**
    * Sets closeTime
    *
    * @param string|null $closeTime 评审单完成时间。
    *
    * @return $this
    */
    public function setCloseTime($closeTime)
    {
        $this->container['closeTime'] = $closeTime;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusEntity|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusEntity|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  评审单描述。
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
    * @param string|null $description 评审单描述。
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
    * Gets approver
    *  决策人ID。
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
    * @param string|null $approver 决策人ID。
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets reviewer
    *  评审专家ID。
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
    * @param string|null $reviewer 评审专家ID。
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
        return $this;
    }

    /**
    * Gets cos
    *  评审对象列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\COEntity[]|null
    */
    public function getCos()
    {
        return $this->container['cos'];
    }

    /**
    * Sets cos
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\COEntity[]|null $cos 评审对象列表。
    *
    * @return $this
    */
    public function setCos($cos)
    {
        $this->container['cos'] = $cos;
        return $this;
    }

    /**
    * Gets ccbs
    *  审批信息列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CcbEntity[]|null
    */
    public function getCcbs()
    {
        return $this->container['ccbs'];
    }

    /**
    * Sets ccbs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CcbEntity[]|null $ccbs 审批信息列表。
    *
    * @return $this
    */
    public function setCcbs($ccbs)
    {
        $this->container['ccbs'] = $ccbs;
        return $this;
    }

    /**
    * Gets oldStatus
    *  oldStatus
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusEntity|null
    */
    public function getOldStatus()
    {
        return $this->container['oldStatus'];
    }

    /**
    * Sets oldStatus
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\StatusEntity|null $oldStatus oldStatus
    *
    * @return $this
    */
    public function setOldStatus($oldStatus)
    {
        $this->container['oldStatus'] = $oldStatus;
        return $this;
    }

    /**
    * Gets cc
    *  抄送人列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity[]|null $cc 抄送人列表。
    *
    * @return $this
    */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
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

