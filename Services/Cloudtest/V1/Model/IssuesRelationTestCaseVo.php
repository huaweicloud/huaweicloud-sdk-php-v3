<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssuesRelationTestCaseVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssuesRelationTestCaseVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  用例ID
    * number  用例编号
    * name  用例名称
    * drRelationId  工作项id
    * statusCode  状态ID
    * statusName  状态名称
    * author  创建人名称
    * authorId  创建人ID
    * owner  处理人名称
    * projectUuid  项目ID
    * creationDate  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'number' => 'string',
            'name' => 'string',
            'drRelationId' => 'string',
            'statusCode' => 'string',
            'statusName' => 'string',
            'author' => 'string',
            'authorId' => 'string',
            'owner' => 'string',
            'projectUuid' => 'string',
            'creationDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  用例ID
    * number  用例编号
    * name  用例名称
    * drRelationId  工作项id
    * statusCode  状态ID
    * statusName  状态名称
    * author  创建人名称
    * authorId  创建人ID
    * owner  处理人名称
    * projectUuid  项目ID
    * creationDate  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'number' => null,
        'name' => null,
        'drRelationId' => null,
        'statusCode' => null,
        'statusName' => null,
        'author' => null,
        'authorId' => null,
        'owner' => null,
        'projectUuid' => null,
        'creationDate' => null
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
    * uri  用例ID
    * number  用例编号
    * name  用例名称
    * drRelationId  工作项id
    * statusCode  状态ID
    * statusName  状态名称
    * author  创建人名称
    * authorId  创建人ID
    * owner  处理人名称
    * projectUuid  项目ID
    * creationDate  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'number' => 'number',
            'name' => 'name',
            'drRelationId' => 'dr_relation_id',
            'statusCode' => 'status_code',
            'statusName' => 'status_name',
            'author' => 'author',
            'authorId' => 'author_id',
            'owner' => 'owner',
            'projectUuid' => 'project_uuid',
            'creationDate' => 'creation_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  用例ID
    * number  用例编号
    * name  用例名称
    * drRelationId  工作项id
    * statusCode  状态ID
    * statusName  状态名称
    * author  创建人名称
    * authorId  创建人ID
    * owner  处理人名称
    * projectUuid  项目ID
    * creationDate  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'number' => 'setNumber',
            'name' => 'setName',
            'drRelationId' => 'setDrRelationId',
            'statusCode' => 'setStatusCode',
            'statusName' => 'setStatusName',
            'author' => 'setAuthor',
            'authorId' => 'setAuthorId',
            'owner' => 'setOwner',
            'projectUuid' => 'setProjectUuid',
            'creationDate' => 'setCreationDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  用例ID
    * number  用例编号
    * name  用例名称
    * drRelationId  工作项id
    * statusCode  状态ID
    * statusName  状态名称
    * author  创建人名称
    * authorId  创建人ID
    * owner  处理人名称
    * projectUuid  项目ID
    * creationDate  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'number' => 'getNumber',
            'name' => 'getName',
            'drRelationId' => 'getDrRelationId',
            'statusCode' => 'getStatusCode',
            'statusName' => 'getStatusName',
            'author' => 'getAuthor',
            'authorId' => 'getAuthorId',
            'owner' => 'getOwner',
            'projectUuid' => 'getProjectUuid',
            'creationDate' => 'getCreationDate'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['drRelationId'] = isset($data['drRelationId']) ? $data['drRelationId'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['statusName'] = isset($data['statusName']) ? $data['statusName'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
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
    * Gets uri
    *  用例ID
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 用例ID
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets number
    *  用例编号
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
    * @param string|null $number 用例编号
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets name
    *  用例名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 用例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets drRelationId
    *  工作项id
    *
    * @return string|null
    */
    public function getDrRelationId()
    {
        return $this->container['drRelationId'];
    }

    /**
    * Sets drRelationId
    *
    * @param string|null $drRelationId 工作项id
    *
    * @return $this
    */
    public function setDrRelationId($drRelationId)
    {
        $this->container['drRelationId'] = $drRelationId;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态ID
    *
    * @return string|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param string|null $statusCode 状态ID
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets statusName
    *  状态名称
    *
    * @return string|null
    */
    public function getStatusName()
    {
        return $this->container['statusName'];
    }

    /**
    * Sets statusName
    *
    * @param string|null $statusName 状态名称
    *
    * @return $this
    */
    public function setStatusName($statusName)
    {
        $this->container['statusName'] = $statusName;
        return $this;
    }

    /**
    * Gets author
    *  创建人名称
    *
    * @return string|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param string|null $author 创建人名称
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets authorId
    *  创建人ID
    *
    * @return string|null
    */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
    * Sets authorId
    *
    * @param string|null $authorId 创建人ID
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets owner
    *  处理人名称
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 处理人名称
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目ID
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建时间
    *
    * @return string|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param string|null $creationDate 创建时间
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
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

