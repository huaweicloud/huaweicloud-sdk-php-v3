<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommitRepoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommitRepoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * createdAt  创建时间
    * title  提交标题
    * parentIds  父提交id
    * message  提交信息
    * authorName  作者
    * committerName  提交作者
    * committedDate  提交时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'shortId' => 'string',
            'createdAt' => 'string',
            'title' => 'string',
            'parentIds' => 'string[]',
            'message' => 'string',
            'authorName' => 'string',
            'committerName' => 'string',
            'committedDate' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * createdAt  创建时间
    * title  提交标题
    * parentIds  父提交id
    * message  提交信息
    * authorName  作者
    * committerName  提交作者
    * committedDate  提交时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'shortId' => null,
        'createdAt' => null,
        'title' => null,
        'parentIds' => null,
        'message' => null,
        'authorName' => null,
        'committerName' => null,
        'committedDate' => 'date-time'
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
    * createdAt  创建时间
    * title  提交标题
    * parentIds  父提交id
    * message  提交信息
    * authorName  作者
    * committerName  提交作者
    * committedDate  提交时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'shortId' => 'short_id',
            'createdAt' => 'created_at',
            'title' => 'title',
            'parentIds' => 'parent_ids',
            'message' => 'message',
            'authorName' => 'author_name',
            'committerName' => 'committer_name',
            'committedDate' => 'committed_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * createdAt  创建时间
    * title  提交标题
    * parentIds  父提交id
    * message  提交信息
    * authorName  作者
    * committerName  提交作者
    * committedDate  提交时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'shortId' => 'setShortId',
            'createdAt' => 'setCreatedAt',
            'title' => 'setTitle',
            'parentIds' => 'setParentIds',
            'message' => 'setMessage',
            'authorName' => 'setAuthorName',
            'committerName' => 'setCommitterName',
            'committedDate' => 'setCommittedDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  提交对应的SHA id
    * shortId  提交对应的短SHA id
    * createdAt  创建时间
    * title  提交标题
    * parentIds  父提交id
    * message  提交信息
    * authorName  作者
    * committerName  提交作者
    * committedDate  提交时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'shortId' => 'getShortId',
            'createdAt' => 'getCreatedAt',
            'title' => 'getTitle',
            'parentIds' => 'getParentIds',
            'message' => 'getMessage',
            'authorName' => 'getAuthorName',
            'committerName' => 'getCommitterName',
            'committedDate' => 'getCommittedDate'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['parentIds'] = isset($data['parentIds']) ? $data['parentIds'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['committerName'] = isset($data['committerName']) ? $data['committerName'] : null;
        $this->container['committedDate'] = isset($data['committedDate']) ? $data['committedDate'] : null;
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

