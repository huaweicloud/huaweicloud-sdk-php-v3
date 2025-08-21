<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SimpleMergeRequestDetailDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SimpleMergeRequestDetailDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 合并请求id。 **取值范围：** 不涉及。
    * iid  **参数解释：** 合并请求iid。 **取值范围：** 不涉及。
    * title  **参数解释：** 标题。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * sourceBranch  **参数解释：** 源分支。 **取值范围：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * reviewMode  **参数解释：** 审核模式。 **取值范围：** 不涉及。
    * author  author
    * mergeRequestType  **参数解释：** 合并请求类型。 **取值范围：** 不涉及。
    * moderationResult  **参数解释：** 送审结果。 **取值范围：** - true，成功。 - false，失败
    * moderationTime  **参数解释：** 送审时间时间戳。 **取值范围：** 不涉及。
    * moderationStatus  **参数解释：** 送审状态码。 **取值范围：** 不涉及。
    * isUseTempBranch  **参数解释：** 是否使用临时分支。 **取值范围：** - true，使用。 - false，不使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'iid' => 'int',
            'title' => 'string',
            'description' => 'string',
            'sourceBranch' => 'string',
            'targetBranch' => 'string',
            'state' => 'string',
            'createdAt' => 'string',
            'reviewMode' => 'string',
            'author' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'mergeRequestType' => 'string',
            'moderationResult' => 'bool',
            'moderationTime' => 'int',
            'moderationStatus' => 'int',
            'isUseTempBranch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 合并请求id。 **取值范围：** 不涉及。
    * iid  **参数解释：** 合并请求iid。 **取值范围：** 不涉及。
    * title  **参数解释：** 标题。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * sourceBranch  **参数解释：** 源分支。 **取值范围：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * reviewMode  **参数解释：** 审核模式。 **取值范围：** 不涉及。
    * author  author
    * mergeRequestType  **参数解释：** 合并请求类型。 **取值范围：** 不涉及。
    * moderationResult  **参数解释：** 送审结果。 **取值范围：** - true，成功。 - false，失败
    * moderationTime  **参数解释：** 送审时间时间戳。 **取值范围：** 不涉及。
    * moderationStatus  **参数解释：** 送审状态码。 **取值范围：** 不涉及。
    * isUseTempBranch  **参数解释：** 是否使用临时分支。 **取值范围：** - true，使用。 - false，不使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'iid' => null,
        'title' => null,
        'description' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'state' => null,
        'createdAt' => null,
        'reviewMode' => null,
        'author' => null,
        'mergeRequestType' => null,
        'moderationResult' => null,
        'moderationTime' => 'int64',
        'moderationStatus' => null,
        'isUseTempBranch' => null
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
    * id  **参数解释：** 合并请求id。 **取值范围：** 不涉及。
    * iid  **参数解释：** 合并请求iid。 **取值范围：** 不涉及。
    * title  **参数解释：** 标题。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * sourceBranch  **参数解释：** 源分支。 **取值范围：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * reviewMode  **参数解释：** 审核模式。 **取值范围：** 不涉及。
    * author  author
    * mergeRequestType  **参数解释：** 合并请求类型。 **取值范围：** 不涉及。
    * moderationResult  **参数解释：** 送审结果。 **取值范围：** - true，成功。 - false，失败
    * moderationTime  **参数解释：** 送审时间时间戳。 **取值范围：** 不涉及。
    * moderationStatus  **参数解释：** 送审状态码。 **取值范围：** 不涉及。
    * isUseTempBranch  **参数解释：** 是否使用临时分支。 **取值范围：** - true，使用。 - false，不使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'iid' => 'iid',
            'title' => 'title',
            'description' => 'description',
            'sourceBranch' => 'source_branch',
            'targetBranch' => 'target_branch',
            'state' => 'state',
            'createdAt' => 'created_at',
            'reviewMode' => 'review_mode',
            'author' => 'author',
            'mergeRequestType' => 'merge_request_type',
            'moderationResult' => 'moderation_result',
            'moderationTime' => 'moderation_time',
            'moderationStatus' => 'moderation_status',
            'isUseTempBranch' => 'is_use_temp_branch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 合并请求id。 **取值范围：** 不涉及。
    * iid  **参数解释：** 合并请求iid。 **取值范围：** 不涉及。
    * title  **参数解释：** 标题。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * sourceBranch  **参数解释：** 源分支。 **取值范围：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * reviewMode  **参数解释：** 审核模式。 **取值范围：** 不涉及。
    * author  author
    * mergeRequestType  **参数解释：** 合并请求类型。 **取值范围：** 不涉及。
    * moderationResult  **参数解释：** 送审结果。 **取值范围：** - true，成功。 - false，失败
    * moderationTime  **参数解释：** 送审时间时间戳。 **取值范围：** 不涉及。
    * moderationStatus  **参数解释：** 送审状态码。 **取值范围：** 不涉及。
    * isUseTempBranch  **参数解释：** 是否使用临时分支。 **取值范围：** - true，使用。 - false，不使用
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'iid' => 'setIid',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'sourceBranch' => 'setSourceBranch',
            'targetBranch' => 'setTargetBranch',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'reviewMode' => 'setReviewMode',
            'author' => 'setAuthor',
            'mergeRequestType' => 'setMergeRequestType',
            'moderationResult' => 'setModerationResult',
            'moderationTime' => 'setModerationTime',
            'moderationStatus' => 'setModerationStatus',
            'isUseTempBranch' => 'setIsUseTempBranch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 合并请求id。 **取值范围：** 不涉及。
    * iid  **参数解释：** 合并请求iid。 **取值范围：** 不涉及。
    * title  **参数解释：** 标题。 **取值范围：** 不涉及。
    * description  **参数解释：** 描述。 **取值范围：** 不涉及。
    * sourceBranch  **参数解释：** 源分支。 **取值范围：** 不涉及。
    * targetBranch  **参数解释：** 目标分支。 **取值范围：** 不涉及。
    * state  **参数解释：** 状态。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * reviewMode  **参数解释：** 审核模式。 **取值范围：** 不涉及。
    * author  author
    * mergeRequestType  **参数解释：** 合并请求类型。 **取值范围：** 不涉及。
    * moderationResult  **参数解释：** 送审结果。 **取值范围：** - true，成功。 - false，失败
    * moderationTime  **参数解释：** 送审时间时间戳。 **取值范围：** 不涉及。
    * moderationStatus  **参数解释：** 送审状态码。 **取值范围：** 不涉及。
    * isUseTempBranch  **参数解释：** 是否使用临时分支。 **取值范围：** - true，使用。 - false，不使用
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'iid' => 'getIid',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'sourceBranch' => 'getSourceBranch',
            'targetBranch' => 'getTargetBranch',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'reviewMode' => 'getReviewMode',
            'author' => 'getAuthor',
            'mergeRequestType' => 'getMergeRequestType',
            'moderationResult' => 'getModerationResult',
            'moderationTime' => 'getModerationTime',
            'moderationStatus' => 'getModerationStatus',
            'isUseTempBranch' => 'getIsUseTempBranch'
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
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['reviewMode'] = isset($data['reviewMode']) ? $data['reviewMode'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['mergeRequestType'] = isset($data['mergeRequestType']) ? $data['mergeRequestType'] : null;
        $this->container['moderationResult'] = isset($data['moderationResult']) ? $data['moderationResult'] : null;
        $this->container['moderationTime'] = isset($data['moderationTime']) ? $data['moderationTime'] : null;
        $this->container['moderationStatus'] = isset($data['moderationStatus']) ? $data['moderationStatus'] : null;
        $this->container['isUseTempBranch'] = isset($data['isUseTempBranch']) ? $data['isUseTempBranch'] : null;
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
    *  **参数解释：** 合并请求id。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 合并请求id。 **取值范围：** 不涉及。
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
    *  **参数解释：** 合并请求iid。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getIid()
    {
        return $this->container['iid'];
    }

    /**
    * Sets iid
    *
    * @param int|null $iid **参数解释：** 合并请求iid。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释：** 标题。 **取值范围：** 不涉及。
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
    * @param string|null $title **参数解释：** 标题。 **取值范围：** 不涉及。
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
    *  **参数解释：** 描述。 **取值范围：** 不涉及。
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
    * @param string|null $description **参数解释：** 描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  **参数解释：** 源分支。 **取值范围：** 不涉及。
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
    * @param string|null $sourceBranch **参数解释：** 源分支。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets targetBranch
    *  **参数解释：** 目标分支。 **取值范围：** 不涉及。
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
    * @param string|null $targetBranch **参数解释：** 目标分支。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 状态。 **取值范围：** 不涉及。
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
    * @param string|null $state **参数解释：** 状态。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **取值范围：** 不涉及。
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
    * @param string|null $createdAt **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets reviewMode
    *  **参数解释：** 审核模式。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getReviewMode()
    {
        return $this->container['reviewMode'];
    }

    /**
    * Sets reviewMode
    *
    * @param string|null $reviewMode **参数解释：** 审核模式。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setReviewMode($reviewMode)
    {
        $this->container['reviewMode'] = $reviewMode;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets mergeRequestType
    *  **参数解释：** 合并请求类型。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getMergeRequestType()
    {
        return $this->container['mergeRequestType'];
    }

    /**
    * Sets mergeRequestType
    *
    * @param string|null $mergeRequestType **参数解释：** 合并请求类型。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMergeRequestType($mergeRequestType)
    {
        $this->container['mergeRequestType'] = $mergeRequestType;
        return $this;
    }

    /**
    * Gets moderationResult
    *  **参数解释：** 送审结果。 **取值范围：** - true，成功。 - false，失败
    *
    * @return bool|null
    */
    public function getModerationResult()
    {
        return $this->container['moderationResult'];
    }

    /**
    * Sets moderationResult
    *
    * @param bool|null $moderationResult **参数解释：** 送审结果。 **取值范围：** - true，成功。 - false，失败
    *
    * @return $this
    */
    public function setModerationResult($moderationResult)
    {
        $this->container['moderationResult'] = $moderationResult;
        return $this;
    }

    /**
    * Gets moderationTime
    *  **参数解释：** 送审时间时间戳。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getModerationTime()
    {
        return $this->container['moderationTime'];
    }

    /**
    * Sets moderationTime
    *
    * @param int|null $moderationTime **参数解释：** 送审时间时间戳。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setModerationTime($moderationTime)
    {
        $this->container['moderationTime'] = $moderationTime;
        return $this;
    }

    /**
    * Gets moderationStatus
    *  **参数解释：** 送审状态码。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getModerationStatus()
    {
        return $this->container['moderationStatus'];
    }

    /**
    * Sets moderationStatus
    *
    * @param int|null $moderationStatus **参数解释：** 送审状态码。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setModerationStatus($moderationStatus)
    {
        $this->container['moderationStatus'] = $moderationStatus;
        return $this;
    }

    /**
    * Gets isUseTempBranch
    *  **参数解释：** 是否使用临时分支。 **取值范围：** - true，使用。 - false，不使用
    *
    * @return bool|null
    */
    public function getIsUseTempBranch()
    {
        return $this->container['isUseTempBranch'];
    }

    /**
    * Sets isUseTempBranch
    *
    * @param bool|null $isUseTempBranch **参数解释：** 是否使用临时分支。 **取值范围：** - true，使用。 - false，不使用
    *
    * @return $this
    */
    public function setIsUseTempBranch($isUseTempBranch)
    {
        $this->container['isUseTempBranch'] = $isUseTempBranch;
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

