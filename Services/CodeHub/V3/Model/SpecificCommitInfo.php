<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpecificCommitInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpecificCommitInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * title  提交标题
    * authorName  作者
    * authorEmail  作者邮箱
    * committerName  提交作者
    * committerEmail  提交作者邮箱
    * createdAt  创建时间
    * message  提交信息
    * parentIds  父提交id
    * committedDate  提交时间
    * authoredDate  作者提交时间
    * stats  stats
    * lastPipeline  lastPipeline
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'shortId' => 'string',
            'title' => 'string',
            'authorName' => 'string',
            'authorEmail' => 'string',
            'committerName' => 'string',
            'committerEmail' => 'string',
            'createdAt' => 'string',
            'message' => 'string',
            'parentIds' => 'string[]',
            'committedDate' => '\DateTime',
            'authoredDate' => '\DateTime',
            'stats' => '\HuaweiCloud\SDK\CodeHub\V3\Model\SpecificCommitInfoStats',
            'lastPipeline' => '\HuaweiCloud\SDK\CodeHub\V3\Model\SpecificCommitInfoLastPipeline'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * title  提交标题
    * authorName  作者
    * authorEmail  作者邮箱
    * committerName  提交作者
    * committerEmail  提交作者邮箱
    * createdAt  创建时间
    * message  提交信息
    * parentIds  父提交id
    * committedDate  提交时间
    * authoredDate  作者提交时间
    * stats  stats
    * lastPipeline  lastPipeline
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'shortId' => null,
        'title' => null,
        'authorName' => null,
        'authorEmail' => null,
        'committerName' => null,
        'committerEmail' => null,
        'createdAt' => null,
        'message' => null,
        'parentIds' => null,
        'committedDate' => 'date-time',
        'authoredDate' => 'date-time',
        'stats' => null,
        'lastPipeline' => null
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
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * title  提交标题
    * authorName  作者
    * authorEmail  作者邮箱
    * committerName  提交作者
    * committerEmail  提交作者邮箱
    * createdAt  创建时间
    * message  提交信息
    * parentIds  父提交id
    * committedDate  提交时间
    * authoredDate  作者提交时间
    * stats  stats
    * lastPipeline  lastPipeline
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'shortId' => 'short_id',
            'title' => 'title',
            'authorName' => 'author_name',
            'authorEmail' => 'author_email',
            'committerName' => 'committer_name',
            'committerEmail' => 'committer_email',
            'createdAt' => 'created_at',
            'message' => 'message',
            'parentIds' => 'parent_ids',
            'committedDate' => 'committed_date',
            'authoredDate' => 'authored_date',
            'stats' => 'stats',
            'lastPipeline' => 'last_pipeline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * title  提交标题
    * authorName  作者
    * authorEmail  作者邮箱
    * committerName  提交作者
    * committerEmail  提交作者邮箱
    * createdAt  创建时间
    * message  提交信息
    * parentIds  父提交id
    * committedDate  提交时间
    * authoredDate  作者提交时间
    * stats  stats
    * lastPipeline  lastPipeline
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'shortId' => 'setShortId',
            'title' => 'setTitle',
            'authorName' => 'setAuthorName',
            'authorEmail' => 'setAuthorEmail',
            'committerName' => 'setCommitterName',
            'committerEmail' => 'setCommitterEmail',
            'createdAt' => 'setCreatedAt',
            'message' => 'setMessage',
            'parentIds' => 'setParentIds',
            'committedDate' => 'setCommittedDate',
            'authoredDate' => 'setAuthoredDate',
            'stats' => 'setStats',
            'lastPipeline' => 'setLastPipeline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * title  提交标题
    * authorName  作者
    * authorEmail  作者邮箱
    * committerName  提交作者
    * committerEmail  提交作者邮箱
    * createdAt  创建时间
    * message  提交信息
    * parentIds  父提交id
    * committedDate  提交时间
    * authoredDate  作者提交时间
    * stats  stats
    * lastPipeline  lastPipeline
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'shortId' => 'getShortId',
            'title' => 'getTitle',
            'authorName' => 'getAuthorName',
            'authorEmail' => 'getAuthorEmail',
            'committerName' => 'getCommitterName',
            'committerEmail' => 'getCommitterEmail',
            'createdAt' => 'getCreatedAt',
            'message' => 'getMessage',
            'parentIds' => 'getParentIds',
            'committedDate' => 'getCommittedDate',
            'authoredDate' => 'getAuthoredDate',
            'stats' => 'getStats',
            'lastPipeline' => 'getLastPipeline'
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
        $this->container['shortId'] = isset($data['shortId']) ? $data['shortId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['authorEmail'] = isset($data['authorEmail']) ? $data['authorEmail'] : null;
        $this->container['committerName'] = isset($data['committerName']) ? $data['committerName'] : null;
        $this->container['committerEmail'] = isset($data['committerEmail']) ? $data['committerEmail'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['parentIds'] = isset($data['parentIds']) ? $data['parentIds'] : null;
        $this->container['committedDate'] = isset($data['committedDate']) ? $data['committedDate'] : null;
        $this->container['authoredDate'] = isset($data['authoredDate']) ? $data['authoredDate'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['lastPipeline'] = isset($data['lastPipeline']) ? $data['lastPipeline'] : null;
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
    *  提交对应的SHA id
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
    * @param string|null $id 提交对应的SHA id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets shortId
    *  提交对应的短SHA id
    *
    * @return string|null
    */
    public function getShortId()
    {
        return $this->container['shortId'];
    }

    /**
    * Sets shortId
    *
    * @param string|null $shortId 提交对应的短SHA id
    *
    * @return $this
    */
    public function setShortId($shortId)
    {
        $this->container['shortId'] = $shortId;
        return $this;
    }

    /**
    * Gets title
    *  提交标题
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
    * @param string|null $title 提交标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets authorName
    *  作者
    *
    * @return string|null
    */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
    * Sets authorName
    *
    * @param string|null $authorName 作者
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets authorEmail
    *  作者邮箱
    *
    * @return string|null
    */
    public function getAuthorEmail()
    {
        return $this->container['authorEmail'];
    }

    /**
    * Sets authorEmail
    *
    * @param string|null $authorEmail 作者邮箱
    *
    * @return $this
    */
    public function setAuthorEmail($authorEmail)
    {
        $this->container['authorEmail'] = $authorEmail;
        return $this;
    }

    /**
    * Gets committerName
    *  提交作者
    *
    * @return string|null
    */
    public function getCommitterName()
    {
        return $this->container['committerName'];
    }

    /**
    * Sets committerName
    *
    * @param string|null $committerName 提交作者
    *
    * @return $this
    */
    public function setCommitterName($committerName)
    {
        $this->container['committerName'] = $committerName;
        return $this;
    }

    /**
    * Gets committerEmail
    *  提交作者邮箱
    *
    * @return string|null
    */
    public function getCommitterEmail()
    {
        return $this->container['committerEmail'];
    }

    /**
    * Sets committerEmail
    *
    * @param string|null $committerEmail 提交作者邮箱
    *
    * @return $this
    */
    public function setCommitterEmail($committerEmail)
    {
        $this->container['committerEmail'] = $committerEmail;
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
    * Gets message
    *  提交信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 提交信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets parentIds
    *  父提交id
    *
    * @return string[]|null
    */
    public function getParentIds()
    {
        return $this->container['parentIds'];
    }

    /**
    * Sets parentIds
    *
    * @param string[]|null $parentIds 父提交id
    *
    * @return $this
    */
    public function setParentIds($parentIds)
    {
        $this->container['parentIds'] = $parentIds;
        return $this;
    }

    /**
    * Gets committedDate
    *  提交时间
    *
    * @return \DateTime|null
    */
    public function getCommittedDate()
    {
        return $this->container['committedDate'];
    }

    /**
    * Sets committedDate
    *
    * @param \DateTime|null $committedDate 提交时间
    *
    * @return $this
    */
    public function setCommittedDate($committedDate)
    {
        $this->container['committedDate'] = $committedDate;
        return $this;
    }

    /**
    * Gets authoredDate
    *  作者提交时间
    *
    * @return \DateTime|null
    */
    public function getAuthoredDate()
    {
        return $this->container['authoredDate'];
    }

    /**
    * Sets authoredDate
    *
    * @param \DateTime|null $authoredDate 作者提交时间
    *
    * @return $this
    */
    public function setAuthoredDate($authoredDate)
    {
        $this->container['authoredDate'] = $authoredDate;
        return $this;
    }

    /**
    * Gets stats
    *  stats
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\SpecificCommitInfoStats|null
    */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
    * Sets stats
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\SpecificCommitInfoStats|null $stats stats
    *
    * @return $this
    */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;
        return $this;
    }

    /**
    * Gets lastPipeline
    *  lastPipeline
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\SpecificCommitInfoLastPipeline|null
    */
    public function getLastPipeline()
    {
        return $this->container['lastPipeline'];
    }

    /**
    * Sets lastPipeline
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\SpecificCommitInfoLastPipeline|null $lastPipeline lastPipeline
    *
    * @return $this
    */
    public function setLastPipeline($lastPipeline)
    {
        $this->container['lastPipeline'] = $lastPipeline;
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

