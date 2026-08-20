<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInstanceResponseResultOpinions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInstanceResponse_result_opinions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * type  类型
    * state  状态
    * status  状态
    * region  区域
    * category  类型
    * title  标题
    * rounds  范围
    * opinion  观察者
    * description  描述
    * modifiedBy  修改人
    * modifiedDate  修改时间
    * createdBy  createdBy
    * createdDate  创建时间
    * tenantId  租户id
    * domainId  项目ID
    * issueCategory  工作项类型
    * issueId  工作项ID
    * currOwner  currOwner
    * coId  变更对象id
    * userId  用户ID
    * opinionIssueId  评审工作项ID
    * opinionIssueCategory  评审工作项类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'state' => 'string',
            'status' => 'string',
            'region' => 'string',
            'category' => 'string',
            'title' => 'string',
            'rounds' => 'string',
            'opinion' => 'string',
            'description' => 'string',
            'modifiedBy' => 'string',
            'modifiedDate' => 'string',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCreatedBy1',
            'createdDate' => 'string',
            'tenantId' => 'string',
            'domainId' => 'string',
            'issueCategory' => 'string',
            'issueId' => 'string',
            'currOwner' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCurrOwner',
            'coId' => 'string',
            'userId' => 'string',
            'opinionIssueId' => 'string',
            'opinionIssueCategory' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * type  类型
    * state  状态
    * status  状态
    * region  区域
    * category  类型
    * title  标题
    * rounds  范围
    * opinion  观察者
    * description  描述
    * modifiedBy  修改人
    * modifiedDate  修改时间
    * createdBy  createdBy
    * createdDate  创建时间
    * tenantId  租户id
    * domainId  项目ID
    * issueCategory  工作项类型
    * issueId  工作项ID
    * currOwner  currOwner
    * coId  变更对象id
    * userId  用户ID
    * opinionIssueId  评审工作项ID
    * opinionIssueCategory  评审工作项类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'state' => null,
        'status' => null,
        'region' => null,
        'category' => null,
        'title' => null,
        'rounds' => null,
        'opinion' => null,
        'description' => null,
        'modifiedBy' => null,
        'modifiedDate' => null,
        'createdBy' => null,
        'createdDate' => null,
        'tenantId' => null,
        'domainId' => null,
        'issueCategory' => null,
        'issueId' => null,
        'currOwner' => null,
        'coId' => null,
        'userId' => null,
        'opinionIssueId' => null,
        'opinionIssueCategory' => null
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
    * id  id
    * type  类型
    * state  状态
    * status  状态
    * region  区域
    * category  类型
    * title  标题
    * rounds  范围
    * opinion  观察者
    * description  描述
    * modifiedBy  修改人
    * modifiedDate  修改时间
    * createdBy  createdBy
    * createdDate  创建时间
    * tenantId  租户id
    * domainId  项目ID
    * issueCategory  工作项类型
    * issueId  工作项ID
    * currOwner  currOwner
    * coId  变更对象id
    * userId  用户ID
    * opinionIssueId  评审工作项ID
    * opinionIssueCategory  评审工作项类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'state' => 'state',
            'status' => 'status',
            'region' => 'region',
            'category' => 'category',
            'title' => 'title',
            'rounds' => 'rounds',
            'opinion' => 'opinion',
            'description' => 'description',
            'modifiedBy' => 'modified_by',
            'modifiedDate' => 'modified_date',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'tenantId' => 'tenant_id',
            'domainId' => 'domain_id',
            'issueCategory' => 'issue_category',
            'issueId' => 'issue_id',
            'currOwner' => 'curr_owner',
            'coId' => 'co_id',
            'userId' => 'user_id',
            'opinionIssueId' => 'opinion_issue_id',
            'opinionIssueCategory' => 'opinion_issue_category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * type  类型
    * state  状态
    * status  状态
    * region  区域
    * category  类型
    * title  标题
    * rounds  范围
    * opinion  观察者
    * description  描述
    * modifiedBy  修改人
    * modifiedDate  修改时间
    * createdBy  createdBy
    * createdDate  创建时间
    * tenantId  租户id
    * domainId  项目ID
    * issueCategory  工作项类型
    * issueId  工作项ID
    * currOwner  currOwner
    * coId  变更对象id
    * userId  用户ID
    * opinionIssueId  评审工作项ID
    * opinionIssueCategory  评审工作项类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'state' => 'setState',
            'status' => 'setStatus',
            'region' => 'setRegion',
            'category' => 'setCategory',
            'title' => 'setTitle',
            'rounds' => 'setRounds',
            'opinion' => 'setOpinion',
            'description' => 'setDescription',
            'modifiedBy' => 'setModifiedBy',
            'modifiedDate' => 'setModifiedDate',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'tenantId' => 'setTenantId',
            'domainId' => 'setDomainId',
            'issueCategory' => 'setIssueCategory',
            'issueId' => 'setIssueId',
            'currOwner' => 'setCurrOwner',
            'coId' => 'setCoId',
            'userId' => 'setUserId',
            'opinionIssueId' => 'setOpinionIssueId',
            'opinionIssueCategory' => 'setOpinionIssueCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * type  类型
    * state  状态
    * status  状态
    * region  区域
    * category  类型
    * title  标题
    * rounds  范围
    * opinion  观察者
    * description  描述
    * modifiedBy  修改人
    * modifiedDate  修改时间
    * createdBy  createdBy
    * createdDate  创建时间
    * tenantId  租户id
    * domainId  项目ID
    * issueCategory  工作项类型
    * issueId  工作项ID
    * currOwner  currOwner
    * coId  变更对象id
    * userId  用户ID
    * opinionIssueId  评审工作项ID
    * opinionIssueCategory  评审工作项类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'state' => 'getState',
            'status' => 'getStatus',
            'region' => 'getRegion',
            'category' => 'getCategory',
            'title' => 'getTitle',
            'rounds' => 'getRounds',
            'opinion' => 'getOpinion',
            'description' => 'getDescription',
            'modifiedBy' => 'getModifiedBy',
            'modifiedDate' => 'getModifiedDate',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'tenantId' => 'getTenantId',
            'domainId' => 'getDomainId',
            'issueCategory' => 'getIssueCategory',
            'issueId' => 'getIssueId',
            'currOwner' => 'getCurrOwner',
            'coId' => 'getCoId',
            'userId' => 'getUserId',
            'opinionIssueId' => 'getOpinionIssueId',
            'opinionIssueCategory' => 'getOpinionIssueCategory'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['rounds'] = isset($data['rounds']) ? $data['rounds'] : null;
        $this->container['opinion'] = isset($data['opinion']) ? $data['opinion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['issueCategory'] = isset($data['issueCategory']) ? $data['issueCategory'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['currOwner'] = isset($data['currOwner']) ? $data['currOwner'] : null;
        $this->container['coId'] = isset($data['coId']) ? $data['coId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['opinionIssueId'] = isset($data['opinionIssueId']) ? $data['opinionIssueId'] : null;
        $this->container['opinionIssueCategory'] = isset($data['opinionIssueCategory']) ? $data['opinionIssueCategory'] : null;
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
    * Gets id
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets state
    *  状态
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
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets category
    *  类型
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
    * @param string|null $category 类型
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets title
    *  标题
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
    * @param string|null $title 标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets rounds
    *  范围
    *
    * @return string|null
    */
    public function getRounds()
    {
        return $this->container['rounds'];
    }

    /**
    * Sets rounds
    *
    * @param string|null $rounds 范围
    *
    * @return $this
    */
    public function setRounds($rounds)
    {
        $this->container['rounds'] = $rounds;
        return $this;
    }

    /**
    * Gets opinion
    *  观察者
    *
    * @return string|null
    */
    public function getOpinion()
    {
        return $this->container['opinion'];
    }

    /**
    * Sets opinion
    *
    * @param string|null $opinion 观察者
    *
    * @return $this
    */
    public function setOpinion($opinion)
    {
        $this->container['opinion'] = $opinion;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  修改人
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
    * @param string|null $modifiedBy 修改人
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
    *  修改时间
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
    * @param string|null $modifiedDate 修改时间
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
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCreatedBy1|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCreatedBy1|null $createdBy createdBy
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
    * Gets tenantId
    *  租户id
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户id
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets domainId
    *  项目ID
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
    * @param string|null $domainId 项目ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets issueCategory
    *  工作项类型
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
    * @param string|null $issueCategory 工作项类型
    *
    * @return $this
    */
    public function setIssueCategory($issueCategory)
    {
        $this->container['issueCategory'] = $issueCategory;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项ID
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
    * @param string|null $issueId 工作项ID
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets currOwner
    *  currOwner
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCurrOwner|null
    */
    public function getCurrOwner()
    {
        return $this->container['currOwner'];
    }

    /**
    * Sets currOwner
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\ProcessInstanceResponseResultCurrOwner|null $currOwner currOwner
    *
    * @return $this
    */
    public function setCurrOwner($currOwner)
    {
        $this->container['currOwner'] = $currOwner;
        return $this;
    }

    /**
    * Gets coId
    *  变更对象id
    *
    * @return string|null
    */
    public function getCoId()
    {
        return $this->container['coId'];
    }

    /**
    * Sets coId
    *
    * @param string|null $coId 变更对象id
    *
    * @return $this
    */
    public function setCoId($coId)
    {
        $this->container['coId'] = $coId;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets opinionIssueId
    *  评审工作项ID
    *
    * @return string|null
    */
    public function getOpinionIssueId()
    {
        return $this->container['opinionIssueId'];
    }

    /**
    * Sets opinionIssueId
    *
    * @param string|null $opinionIssueId 评审工作项ID
    *
    * @return $this
    */
    public function setOpinionIssueId($opinionIssueId)
    {
        $this->container['opinionIssueId'] = $opinionIssueId;
        return $this;
    }

    /**
    * Gets opinionIssueCategory
    *  评审工作项类型
    *
    * @return string|null
    */
    public function getOpinionIssueCategory()
    {
        return $this->container['opinionIssueCategory'];
    }

    /**
    * Sets opinionIssueCategory
    *
    * @param string|null $opinionIssueCategory 评审工作项类型
    *
    * @return $this
    */
    public function setOpinionIssueCategory($opinionIssueCategory)
    {
        $this->container['opinionIssueCategory'] = $opinionIssueCategory;
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

