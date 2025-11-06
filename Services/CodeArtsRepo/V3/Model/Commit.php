<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Commit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Commit';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorEmail  作者邮箱
    * authorName  作者
    * authoredDate  作者提交时间
    * committedDate  提交时间
    * committerEmail  提交作者邮箱
    * committerName  提交作者
    * format  文件变更的详情信息，其格式由请求查询参数 stat_format 决定
    * id  提交对应的SHA id
    * message  提交的信息
    * parentIds  父提交id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorEmail' => 'string',
            'authorName' => 'string',
            'authoredDate' => '\DateTime',
            'committedDate' => '\DateTime',
            'committerEmail' => 'string',
            'committerName' => 'string',
            'format' => 'object',
            'id' => 'string',
            'message' => 'string',
            'parentIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorEmail  作者邮箱
    * authorName  作者
    * authoredDate  作者提交时间
    * committedDate  提交时间
    * committerEmail  提交作者邮箱
    * committerName  提交作者
    * format  文件变更的详情信息，其格式由请求查询参数 stat_format 决定
    * id  提交对应的SHA id
    * message  提交的信息
    * parentIds  父提交id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorEmail' => null,
        'authorName' => null,
        'authoredDate' => 'date-time',
        'committedDate' => 'date-time',
        'committerEmail' => null,
        'committerName' => null,
        'format' => null,
        'id' => null,
        'message' => null,
        'parentIds' => null
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
    * authorEmail  作者邮箱
    * authorName  作者
    * authoredDate  作者提交时间
    * committedDate  提交时间
    * committerEmail  提交作者邮箱
    * committerName  提交作者
    * format  文件变更的详情信息，其格式由请求查询参数 stat_format 决定
    * id  提交对应的SHA id
    * message  提交的信息
    * parentIds  父提交id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorEmail' => 'author_email',
            'authorName' => 'author_name',
            'authoredDate' => 'authored_date',
            'committedDate' => 'committed_date',
            'committerEmail' => 'committer_email',
            'committerName' => 'committer_name',
            'format' => 'format',
            'id' => 'id',
            'message' => 'message',
            'parentIds' => 'parent_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorEmail  作者邮箱
    * authorName  作者
    * authoredDate  作者提交时间
    * committedDate  提交时间
    * committerEmail  提交作者邮箱
    * committerName  提交作者
    * format  文件变更的详情信息，其格式由请求查询参数 stat_format 决定
    * id  提交对应的SHA id
    * message  提交的信息
    * parentIds  父提交id
    *
    * @var string[]
    */
    protected static $setters = [
            'authorEmail' => 'setAuthorEmail',
            'authorName' => 'setAuthorName',
            'authoredDate' => 'setAuthoredDate',
            'committedDate' => 'setCommittedDate',
            'committerEmail' => 'setCommitterEmail',
            'committerName' => 'setCommitterName',
            'format' => 'setFormat',
            'id' => 'setId',
            'message' => 'setMessage',
            'parentIds' => 'setParentIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorEmail  作者邮箱
    * authorName  作者
    * authoredDate  作者提交时间
    * committedDate  提交时间
    * committerEmail  提交作者邮箱
    * committerName  提交作者
    * format  文件变更的详情信息，其格式由请求查询参数 stat_format 决定
    * id  提交对应的SHA id
    * message  提交的信息
    * parentIds  父提交id
    *
    * @var string[]
    */
    protected static $getters = [
            'authorEmail' => 'getAuthorEmail',
            'authorName' => 'getAuthorName',
            'authoredDate' => 'getAuthoredDate',
            'committedDate' => 'getCommittedDate',
            'committerEmail' => 'getCommitterEmail',
            'committerName' => 'getCommitterName',
            'format' => 'getFormat',
            'id' => 'getId',
            'message' => 'getMessage',
            'parentIds' => 'getParentIds'
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
        $this->container['authorEmail'] = isset($data['authorEmail']) ? $data['authorEmail'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['authoredDate'] = isset($data['authoredDate']) ? $data['authoredDate'] : null;
        $this->container['committedDate'] = isset($data['committedDate']) ? $data['committedDate'] : null;
        $this->container['committerEmail'] = isset($data['committerEmail']) ? $data['committerEmail'] : null;
        $this->container['committerName'] = isset($data['committerName']) ? $data['committerName'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['parentIds'] = isset($data['parentIds']) ? $data['parentIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorEmail']) && !preg_match("/author_email/", $this->container['authorEmail'])) {
                $invalidProperties[] = "invalid value for 'authorEmail', must be conform to the pattern /author_email/.";
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
    * Gets format
    *  文件变更的详情信息，其格式由请求查询参数 stat_format 决定
    *
    * @return object|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param object|null $format 文件变更的详情信息，其格式由请求查询参数 stat_format 决定
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
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
    * Gets message
    *  提交的信息
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
    * @param string|null $message 提交的信息
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

