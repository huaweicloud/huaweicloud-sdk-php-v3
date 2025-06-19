<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalTestCaseHistoryVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalTestCaseHistoryVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * author  资源历史记录创建人ID
    * region  逻辑region
    * changes  历史记录字段变更列表
    * id  历史记录id
    * testcaseId  用例id
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'author' => 'string',
            'region' => 'string',
            'changes' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ResourceChangeExternalVo[]',
            'id' => 'string',
            'testcaseId' => 'string',
            'creationDate' => '\DateTime',
            'createDateTimestamp' => 'int',
            'authorName' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * author  资源历史记录创建人ID
    * region  逻辑region
    * changes  历史记录字段变更列表
    * id  历史记录id
    * testcaseId  用例id
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'author' => null,
        'region' => null,
        'changes' => null,
        'id' => null,
        'testcaseId' => null,
        'creationDate' => 'date-time',
        'createDateTimestamp' => 'int64',
        'authorName' => null,
        'projectId' => null
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
    * author  资源历史记录创建人ID
    * region  逻辑region
    * changes  历史记录字段变更列表
    * id  历史记录id
    * testcaseId  用例id
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'author' => 'author',
            'region' => 'region',
            'changes' => 'changes',
            'id' => 'id',
            'testcaseId' => 'testcase_id',
            'creationDate' => 'creation_date',
            'createDateTimestamp' => 'create_date_timestamp',
            'authorName' => 'author_name',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * author  资源历史记录创建人ID
    * region  逻辑region
    * changes  历史记录字段变更列表
    * id  历史记录id
    * testcaseId  用例id
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'author' => 'setAuthor',
            'region' => 'setRegion',
            'changes' => 'setChanges',
            'id' => 'setId',
            'testcaseId' => 'setTestcaseId',
            'creationDate' => 'setCreationDate',
            'createDateTimestamp' => 'setCreateDateTimestamp',
            'authorName' => 'setAuthorName',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * author  资源历史记录创建人ID
    * region  逻辑region
    * changes  历史记录字段变更列表
    * id  历史记录id
    * testcaseId  用例id
    * creationDate  创建时间
    * createDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'author' => 'getAuthor',
            'region' => 'getRegion',
            'changes' => 'getChanges',
            'id' => 'getId',
            'testcaseId' => 'getTestcaseId',
            'creationDate' => 'getCreationDate',
            'createDateTimestamp' => 'getCreateDateTimestamp',
            'authorName' => 'getAuthorName',
            'projectId' => 'getProjectId'
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['createDateTimestamp'] = isset($data['createDateTimestamp']) ? $data['createDateTimestamp'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
    * Gets author
    *  资源历史记录创建人ID
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
    * @param string|null $author 资源历史记录创建人ID
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets region
    *  逻辑region
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
    * @param string|null $region 逻辑region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets changes
    *  历史记录字段变更列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ResourceChangeExternalVo[]|null
    */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
    * Sets changes
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ResourceChangeExternalVo[]|null $changes 历史记录字段变更列表
    *
    * @return $this
    */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;
        return $this;
    }

    /**
    * Gets id
    *  历史记录id
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
    * @param string|null $id 历史记录id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets testcaseId
    *  用例id
    *
    * @return string|null
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string|null $testcaseId 用例id
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param \DateTime|null $creationDate 创建时间
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets createDateTimestamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreateDateTimestamp()
    {
        return $this->container['createDateTimestamp'];
    }

    /**
    * Sets createDateTimestamp
    *
    * @param int|null $createDateTimestamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreateDateTimestamp($createDateTimestamp)
    {
        $this->container['createDateTimestamp'] = $createDateTimestamp;
        return $this;
    }

    /**
    * Gets authorName
    *  创建人名称
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
    * @param string|null $authorName 创建人名称
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

