<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateProcessInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateProcessInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  标题
    * description  描述
    * category  类别
    * needApproval  是否需要决策人审批
    * planEndDate  计划完成日期时间戳，不可早于计划开始日期
    * planStartDate  计划开始日期时间戳，不可晚于计划完成日期
    * status  状态
    * cc  抄送人列表
    * attachWikis  关联wiki
    * attachDocuments  关联文件
    * ccbs  决策人
    * opinions  评审专家
    * cos  评审对象
    * localAttachmentNames  关联文件名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'description' => 'string',
            'category' => 'string',
            'needApproval' => 'bool',
            'planEndDate' => 'string',
            'planStartDate' => 'string',
            'status' => 'string',
            'cc' => 'string[]',
            'attachWikis' => 'string[]',
            'attachDocuments' => 'string[]',
            'ccbs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqCcbs[]',
            'opinions' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqOpinions[]',
            'cos' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqCos[]',
            'localAttachmentNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  标题
    * description  描述
    * category  类别
    * needApproval  是否需要决策人审批
    * planEndDate  计划完成日期时间戳，不可早于计划开始日期
    * planStartDate  计划开始日期时间戳，不可晚于计划完成日期
    * status  状态
    * cc  抄送人列表
    * attachWikis  关联wiki
    * attachDocuments  关联文件
    * ccbs  决策人
    * opinions  评审专家
    * cos  评审对象
    * localAttachmentNames  关联文件名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'category' => null,
        'needApproval' => null,
        'planEndDate' => null,
        'planStartDate' => null,
        'status' => null,
        'cc' => null,
        'attachWikis' => null,
        'attachDocuments' => null,
        'ccbs' => null,
        'opinions' => null,
        'cos' => null,
        'localAttachmentNames' => null
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
    * title  标题
    * description  描述
    * category  类别
    * needApproval  是否需要决策人审批
    * planEndDate  计划完成日期时间戳，不可早于计划开始日期
    * planStartDate  计划开始日期时间戳，不可晚于计划完成日期
    * status  状态
    * cc  抄送人列表
    * attachWikis  关联wiki
    * attachDocuments  关联文件
    * ccbs  决策人
    * opinions  评审专家
    * cos  评审对象
    * localAttachmentNames  关联文件名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'description' => 'description',
            'category' => 'category',
            'needApproval' => 'need_approval',
            'planEndDate' => 'plan_end_date',
            'planStartDate' => 'plan_start_date',
            'status' => 'status',
            'cc' => 'cc',
            'attachWikis' => 'attachWikis',
            'attachDocuments' => 'attachDocuments',
            'ccbs' => 'ccbs',
            'opinions' => 'opinions',
            'cos' => 'cos',
            'localAttachmentNames' => 'local_attachment_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  标题
    * description  描述
    * category  类别
    * needApproval  是否需要决策人审批
    * planEndDate  计划完成日期时间戳，不可早于计划开始日期
    * planStartDate  计划开始日期时间戳，不可晚于计划完成日期
    * status  状态
    * cc  抄送人列表
    * attachWikis  关联wiki
    * attachDocuments  关联文件
    * ccbs  决策人
    * opinions  评审专家
    * cos  评审对象
    * localAttachmentNames  关联文件名
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'description' => 'setDescription',
            'category' => 'setCategory',
            'needApproval' => 'setNeedApproval',
            'planEndDate' => 'setPlanEndDate',
            'planStartDate' => 'setPlanStartDate',
            'status' => 'setStatus',
            'cc' => 'setCc',
            'attachWikis' => 'setAttachWikis',
            'attachDocuments' => 'setAttachDocuments',
            'ccbs' => 'setCcbs',
            'opinions' => 'setOpinions',
            'cos' => 'setCos',
            'localAttachmentNames' => 'setLocalAttachmentNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  标题
    * description  描述
    * category  类别
    * needApproval  是否需要决策人审批
    * planEndDate  计划完成日期时间戳，不可早于计划开始日期
    * planStartDate  计划开始日期时间戳，不可晚于计划完成日期
    * status  状态
    * cc  抄送人列表
    * attachWikis  关联wiki
    * attachDocuments  关联文件
    * ccbs  决策人
    * opinions  评审专家
    * cos  评审对象
    * localAttachmentNames  关联文件名
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'description' => 'getDescription',
            'category' => 'getCategory',
            'needApproval' => 'getNeedApproval',
            'planEndDate' => 'getPlanEndDate',
            'planStartDate' => 'getPlanStartDate',
            'status' => 'getStatus',
            'cc' => 'getCc',
            'attachWikis' => 'getAttachWikis',
            'attachDocuments' => 'getAttachDocuments',
            'ccbs' => 'getCcbs',
            'opinions' => 'getOpinions',
            'cos' => 'getCos',
            'localAttachmentNames' => 'getLocalAttachmentNames'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['needApproval'] = isset($data['needApproval']) ? $data['needApproval'] : null;
        $this->container['planEndDate'] = isset($data['planEndDate']) ? $data['planEndDate'] : null;
        $this->container['planStartDate'] = isset($data['planStartDate']) ? $data['planStartDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['attachWikis'] = isset($data['attachWikis']) ? $data['attachWikis'] : null;
        $this->container['attachDocuments'] = isset($data['attachDocuments']) ? $data['attachDocuments'] : null;
        $this->container['ccbs'] = isset($data['ccbs']) ? $data['ccbs'] : null;
        $this->container['opinions'] = isset($data['opinions']) ? $data['opinions'] : null;
        $this->container['cos'] = isset($data['cos']) ? $data['cos'] : null;
        $this->container['localAttachmentNames'] = isset($data['localAttachmentNames']) ? $data['localAttachmentNames'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    *  标题
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
    * @param string $title 标题
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
    *  描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets category
    *  类别
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 类别
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets needApproval
    *  是否需要决策人审批
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
    * @param bool|null $needApproval 是否需要决策人审批
    *
    * @return $this
    */
    public function setNeedApproval($needApproval)
    {
        $this->container['needApproval'] = $needApproval;
        return $this;
    }

    /**
    * Gets planEndDate
    *  计划完成日期时间戳，不可早于计划开始日期
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
    * @param string|null $planEndDate 计划完成日期时间戳，不可早于计划开始日期
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
    *  计划开始日期时间戳，不可晚于计划完成日期
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
    * @param string|null $planStartDate 计划开始日期时间戳，不可晚于计划完成日期
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
    *  状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets cc
    *  抄送人列表
    *
    * @return string[]|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param string[]|null $cc 抄送人列表
    *
    * @return $this
    */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
        return $this;
    }

    /**
    * Gets attachWikis
    *  关联wiki
    *
    * @return string[]|null
    */
    public function getAttachWikis()
    {
        return $this->container['attachWikis'];
    }

    /**
    * Sets attachWikis
    *
    * @param string[]|null $attachWikis 关联wiki
    *
    * @return $this
    */
    public function setAttachWikis($attachWikis)
    {
        $this->container['attachWikis'] = $attachWikis;
        return $this;
    }

    /**
    * Gets attachDocuments
    *  关联文件
    *
    * @return string[]|null
    */
    public function getAttachDocuments()
    {
        return $this->container['attachDocuments'];
    }

    /**
    * Sets attachDocuments
    *
    * @param string[]|null $attachDocuments 关联文件
    *
    * @return $this
    */
    public function setAttachDocuments($attachDocuments)
    {
        $this->container['attachDocuments'] = $attachDocuments;
        return $this;
    }

    /**
    * Gets ccbs
    *  决策人
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqCcbs[]|null
    */
    public function getCcbs()
    {
        return $this->container['ccbs'];
    }

    /**
    * Sets ccbs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqCcbs[]|null $ccbs 决策人
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
    *  评审专家
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqOpinions[]|null
    */
    public function getOpinions()
    {
        return $this->container['opinions'];
    }

    /**
    * Sets opinions
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqOpinions[]|null $opinions 评审专家
    *
    * @return $this
    */
    public function setOpinions($opinions)
    {
        $this->container['opinions'] = $opinions;
        return $this;
    }

    /**
    * Gets cos
    *  评审对象
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqCos[]|null
    */
    public function getCos()
    {
        return $this->container['cos'];
    }

    /**
    * Sets cos
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\CreateProcessInstanceReqCos[]|null $cos 评审对象
    *
    * @return $this
    */
    public function setCos($cos)
    {
        $this->container['cos'] = $cos;
        return $this;
    }

    /**
    * Gets localAttachmentNames
    *  关联文件名
    *
    * @return string[]|null
    */
    public function getLocalAttachmentNames()
    {
        return $this->container['localAttachmentNames'];
    }

    /**
    * Sets localAttachmentNames
    *
    * @param string[]|null $localAttachmentNames 关联文件名
    *
    * @return $this
    */
    public function setLocalAttachmentNames($localAttachmentNames)
    {
        $this->container['localAttachmentNames'] = $localAttachmentNames;
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

