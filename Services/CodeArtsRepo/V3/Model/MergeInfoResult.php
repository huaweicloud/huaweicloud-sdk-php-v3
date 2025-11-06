<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approvalMergeRequestApprovers  评审人
    * author  author
    * closedAt  关闭时间
    * createdAt  创建时间
    * description  合并请求描述
    * devcloudSourceBranch  源分支
    * id  合并请求id
    * iid  当前仓库内合并请求序号
    * isSourceBranchExist  源分支是否存在
    * mergeRequestAssigneeList  检视人
    * mergeRequestDiff  mergeRequestDiff
    * mergeStatus  是否可以被合并
    * sourceBranch  源分支
    * state  合并请求状态
    * targetBranch  目标分支
    * title  标题
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approvalMergeRequestApprovers' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ApprovalMergeRequestApproversItem[]',
            'author' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\Author',
            'closedAt' => 'string',
            'createdAt' => 'string',
            'description' => 'string',
            'devcloudSourceBranch' => 'string',
            'id' => 'double',
            'iid' => 'double',
            'isSourceBranchExist' => 'bool',
            'mergeRequestAssigneeList' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestAssigneeListItem[]',
            'mergeRequestDiff' => '\HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestDiff',
            'mergeStatus' => 'string',
            'sourceBranch' => 'string',
            'state' => 'string',
            'targetBranch' => 'string',
            'title' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approvalMergeRequestApprovers  评审人
    * author  author
    * closedAt  关闭时间
    * createdAt  创建时间
    * description  合并请求描述
    * devcloudSourceBranch  源分支
    * id  合并请求id
    * iid  当前仓库内合并请求序号
    * isSourceBranchExist  源分支是否存在
    * mergeRequestAssigneeList  检视人
    * mergeRequestDiff  mergeRequestDiff
    * mergeStatus  是否可以被合并
    * sourceBranch  源分支
    * state  合并请求状态
    * targetBranch  目标分支
    * title  标题
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approvalMergeRequestApprovers' => null,
        'author' => null,
        'closedAt' => null,
        'createdAt' => null,
        'description' => null,
        'devcloudSourceBranch' => null,
        'id' => 'double',
        'iid' => 'double',
        'isSourceBranchExist' => null,
        'mergeRequestAssigneeList' => null,
        'mergeRequestDiff' => null,
        'mergeStatus' => null,
        'sourceBranch' => null,
        'state' => null,
        'targetBranch' => null,
        'title' => null,
        'updatedAt' => null
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
    * approvalMergeRequestApprovers  评审人
    * author  author
    * closedAt  关闭时间
    * createdAt  创建时间
    * description  合并请求描述
    * devcloudSourceBranch  源分支
    * id  合并请求id
    * iid  当前仓库内合并请求序号
    * isSourceBranchExist  源分支是否存在
    * mergeRequestAssigneeList  检视人
    * mergeRequestDiff  mergeRequestDiff
    * mergeStatus  是否可以被合并
    * sourceBranch  源分支
    * state  合并请求状态
    * targetBranch  目标分支
    * title  标题
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approvalMergeRequestApprovers' => 'approval_merge_request_approvers',
            'author' => 'author',
            'closedAt' => 'closed_at',
            'createdAt' => 'created_at',
            'description' => 'description',
            'devcloudSourceBranch' => 'devcloud_source_branch',
            'id' => 'id',
            'iid' => 'iid',
            'isSourceBranchExist' => 'is_source_branch_exist',
            'mergeRequestAssigneeList' => 'merge_request_assignee_list',
            'mergeRequestDiff' => 'merge_request_diff',
            'mergeStatus' => 'merge_status',
            'sourceBranch' => 'source_branch',
            'state' => 'state',
            'targetBranch' => 'target_branch',
            'title' => 'title',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approvalMergeRequestApprovers  评审人
    * author  author
    * closedAt  关闭时间
    * createdAt  创建时间
    * description  合并请求描述
    * devcloudSourceBranch  源分支
    * id  合并请求id
    * iid  当前仓库内合并请求序号
    * isSourceBranchExist  源分支是否存在
    * mergeRequestAssigneeList  检视人
    * mergeRequestDiff  mergeRequestDiff
    * mergeStatus  是否可以被合并
    * sourceBranch  源分支
    * state  合并请求状态
    * targetBranch  目标分支
    * title  标题
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'approvalMergeRequestApprovers' => 'setApprovalMergeRequestApprovers',
            'author' => 'setAuthor',
            'closedAt' => 'setClosedAt',
            'createdAt' => 'setCreatedAt',
            'description' => 'setDescription',
            'devcloudSourceBranch' => 'setDevcloudSourceBranch',
            'id' => 'setId',
            'iid' => 'setIid',
            'isSourceBranchExist' => 'setIsSourceBranchExist',
            'mergeRequestAssigneeList' => 'setMergeRequestAssigneeList',
            'mergeRequestDiff' => 'setMergeRequestDiff',
            'mergeStatus' => 'setMergeStatus',
            'sourceBranch' => 'setSourceBranch',
            'state' => 'setState',
            'targetBranch' => 'setTargetBranch',
            'title' => 'setTitle',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approvalMergeRequestApprovers  评审人
    * author  author
    * closedAt  关闭时间
    * createdAt  创建时间
    * description  合并请求描述
    * devcloudSourceBranch  源分支
    * id  合并请求id
    * iid  当前仓库内合并请求序号
    * isSourceBranchExist  源分支是否存在
    * mergeRequestAssigneeList  检视人
    * mergeRequestDiff  mergeRequestDiff
    * mergeStatus  是否可以被合并
    * sourceBranch  源分支
    * state  合并请求状态
    * targetBranch  目标分支
    * title  标题
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'approvalMergeRequestApprovers' => 'getApprovalMergeRequestApprovers',
            'author' => 'getAuthor',
            'closedAt' => 'getClosedAt',
            'createdAt' => 'getCreatedAt',
            'description' => 'getDescription',
            'devcloudSourceBranch' => 'getDevcloudSourceBranch',
            'id' => 'getId',
            'iid' => 'getIid',
            'isSourceBranchExist' => 'getIsSourceBranchExist',
            'mergeRequestAssigneeList' => 'getMergeRequestAssigneeList',
            'mergeRequestDiff' => 'getMergeRequestDiff',
            'mergeStatus' => 'getMergeStatus',
            'sourceBranch' => 'getSourceBranch',
            'state' => 'getState',
            'targetBranch' => 'getTargetBranch',
            'title' => 'getTitle',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['approvalMergeRequestApprovers'] = isset($data['approvalMergeRequestApprovers']) ? $data['approvalMergeRequestApprovers'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['closedAt'] = isset($data['closedAt']) ? $data['closedAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['devcloudSourceBranch'] = isset($data['devcloudSourceBranch']) ? $data['devcloudSourceBranch'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['isSourceBranchExist'] = isset($data['isSourceBranchExist']) ? $data['isSourceBranchExist'] : null;
        $this->container['mergeRequestAssigneeList'] = isset($data['mergeRequestAssigneeList']) ? $data['mergeRequestAssigneeList'] : null;
        $this->container['mergeRequestDiff'] = isset($data['mergeRequestDiff']) ? $data['mergeRequestDiff'] : null;
        $this->container['mergeStatus'] = isset($data['mergeStatus']) ? $data['mergeStatus'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets approvalMergeRequestApprovers
    *  评审人
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ApprovalMergeRequestApproversItem[]|null
    */
    public function getApprovalMergeRequestApprovers()
    {
        return $this->container['approvalMergeRequestApprovers'];
    }

    /**
    * Sets approvalMergeRequestApprovers
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\ApprovalMergeRequestApproversItem[]|null $approvalMergeRequestApprovers 评审人
    *
    * @return $this
    */
    public function setApprovalMergeRequestApprovers($approvalMergeRequestApprovers)
    {
        $this->container['approvalMergeRequestApprovers'] = $approvalMergeRequestApprovers;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\Author|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\Author|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets closedAt
    *  关闭时间
    *
    * @return string|null
    */
    public function getClosedAt()
    {
        return $this->container['closedAt'];
    }

    /**
    * Sets closedAt
    *
    * @param string|null $closedAt 关闭时间
    *
    * @return $this
    */
    public function setClosedAt($closedAt)
    {
        $this->container['closedAt'] = $closedAt;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets description
    *  合并请求描述
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
    * @param string|null $description 合并请求描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets devcloudSourceBranch
    *  源分支
    *
    * @return string|null
    */
    public function getDevcloudSourceBranch()
    {
        return $this->container['devcloudSourceBranch'];
    }

    /**
    * Sets devcloudSourceBranch
    *
    * @param string|null $devcloudSourceBranch 源分支
    *
    * @return $this
    */
    public function setDevcloudSourceBranch($devcloudSourceBranch)
    {
        $this->container['devcloudSourceBranch'] = $devcloudSourceBranch;
        return $this;
    }

    /**
    * Gets id
    *  合并请求id
    *
    * @return double|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param double|null $id 合并请求id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets iid
    *  当前仓库内合并请求序号
    *
    * @return double|null
    */
    public function getIid()
    {
        return $this->container['iid'];
    }

    /**
    * Sets iid
    *
    * @param double|null $iid 当前仓库内合并请求序号
    *
    * @return $this
    */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;
        return $this;
    }

    /**
    * Gets isSourceBranchExist
    *  源分支是否存在
    *
    * @return bool|null
    */
    public function getIsSourceBranchExist()
    {
        return $this->container['isSourceBranchExist'];
    }

    /**
    * Sets isSourceBranchExist
    *
    * @param bool|null $isSourceBranchExist 源分支是否存在
    *
    * @return $this
    */
    public function setIsSourceBranchExist($isSourceBranchExist)
    {
        $this->container['isSourceBranchExist'] = $isSourceBranchExist;
        return $this;
    }

    /**
    * Gets mergeRequestAssigneeList
    *  检视人
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestAssigneeListItem[]|null
    */
    public function getMergeRequestAssigneeList()
    {
        return $this->container['mergeRequestAssigneeList'];
    }

    /**
    * Sets mergeRequestAssigneeList
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestAssigneeListItem[]|null $mergeRequestAssigneeList 检视人
    *
    * @return $this
    */
    public function setMergeRequestAssigneeList($mergeRequestAssigneeList)
    {
        $this->container['mergeRequestAssigneeList'] = $mergeRequestAssigneeList;
        return $this;
    }

    /**
    * Gets mergeRequestDiff
    *  mergeRequestDiff
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestDiff|null
    */
    public function getMergeRequestDiff()
    {
        return $this->container['mergeRequestDiff'];
    }

    /**
    * Sets mergeRequestDiff
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V3\Model\MergeRequestDiff|null $mergeRequestDiff mergeRequestDiff
    *
    * @return $this
    */
    public function setMergeRequestDiff($mergeRequestDiff)
    {
        $this->container['mergeRequestDiff'] = $mergeRequestDiff;
        return $this;
    }

    /**
    * Gets mergeStatus
    *  是否可以被合并
    *
    * @return string|null
    */
    public function getMergeStatus()
    {
        return $this->container['mergeStatus'];
    }

    /**
    * Sets mergeStatus
    *
    * @param string|null $mergeStatus 是否可以被合并
    *
    * @return $this
    */
    public function setMergeStatus($mergeStatus)
    {
        $this->container['mergeStatus'] = $mergeStatus;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  源分支
    *
    * @return string|null
    */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
    * Sets sourceBranch
    *
    * @param string|null $sourceBranch 源分支
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets state
    *  合并请求状态
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
    * @param string|null $state 合并请求状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets targetBranch
    *  目标分支
    *
    * @return string|null
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string|null $targetBranch 目标分支
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
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
    * Gets updatedAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

