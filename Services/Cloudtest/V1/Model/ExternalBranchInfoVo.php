<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalBranchInfoVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalBranchInfoVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  分支ID
    * type  资源类型
    * author  创建人
    * name  名称
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * isBaseBranch  是否为基线分支。0表示不是基线分支，1表示是基线分支。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'author' => 'string',
            'name' => 'string',
            'region' => 'string',
            'lastModifier' => 'string',
            'lastModified' => '\DateTime',
            'lastModifiedTimestamp' => 'int',
            'creationDate' => '\DateTime',
            'creationDateTimestamp' => 'int',
            'authorName' => 'string',
            'isBaseBranch' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  分支ID
    * type  资源类型
    * author  创建人
    * name  名称
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * isBaseBranch  是否为基线分支。0表示不是基线分支，1表示是基线分支。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'author' => null,
        'name' => null,
        'region' => null,
        'lastModifier' => null,
        'lastModified' => 'date-time',
        'lastModifiedTimestamp' => 'int64',
        'creationDate' => 'date-time',
        'creationDateTimestamp' => 'int64',
        'authorName' => null,
        'isBaseBranch' => 'int32'
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
    * id  分支ID
    * type  资源类型
    * author  创建人
    * name  名称
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * isBaseBranch  是否为基线分支。0表示不是基线分支，1表示是基线分支。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'author' => 'author',
            'name' => 'name',
            'region' => 'region',
            'lastModifier' => 'last_modifier',
            'lastModified' => 'last_modified',
            'lastModifiedTimestamp' => 'last_modified_timestamp',
            'creationDate' => 'creation_date',
            'creationDateTimestamp' => 'creation_date_timestamp',
            'authorName' => 'author_name',
            'isBaseBranch' => 'is_base_branch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  分支ID
    * type  资源类型
    * author  创建人
    * name  名称
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * isBaseBranch  是否为基线分支。0表示不是基线分支，1表示是基线分支。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'author' => 'setAuthor',
            'name' => 'setName',
            'region' => 'setRegion',
            'lastModifier' => 'setLastModifier',
            'lastModified' => 'setLastModified',
            'lastModifiedTimestamp' => 'setLastModifiedTimestamp',
            'creationDate' => 'setCreationDate',
            'creationDateTimestamp' => 'setCreationDateTimestamp',
            'authorName' => 'setAuthorName',
            'isBaseBranch' => 'setIsBaseBranch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  分支ID
    * type  资源类型
    * author  创建人
    * name  名称
    * region  区域
    * lastModifier  最后修改人
    * lastModified  最后修改时间
    * lastModifiedTimestamp  修改时间时间戳
    * creationDate  创建时间
    * creationDateTimestamp  创建时间时间戳
    * authorName  创建人名称
    * isBaseBranch  是否为基线分支。0表示不是基线分支，1表示是基线分支。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'author' => 'getAuthor',
            'name' => 'getName',
            'region' => 'getRegion',
            'lastModifier' => 'getLastModifier',
            'lastModified' => 'getLastModified',
            'lastModifiedTimestamp' => 'getLastModifiedTimestamp',
            'creationDate' => 'getCreationDate',
            'creationDateTimestamp' => 'getCreationDateTimestamp',
            'authorName' => 'getAuthorName',
            'isBaseBranch' => 'getIsBaseBranch'
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['lastModifier'] = isset($data['lastModifier']) ? $data['lastModifier'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['lastModifiedTimestamp'] = isset($data['lastModifiedTimestamp']) ? $data['lastModifiedTimestamp'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['creationDateTimestamp'] = isset($data['creationDateTimestamp']) ? $data['creationDateTimestamp'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['isBaseBranch'] = isset($data['isBaseBranch']) ? $data['isBaseBranch'] : null;
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
    *  分支ID
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
    * @param string|null $id 分支ID
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
    *  资源类型
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
    * @param string|null $type 资源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets author
    *  创建人
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
    * @param string|null $author 创建人
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets lastModifier
    *  最后修改人
    *
    * @return string|null
    */
    public function getLastModifier()
    {
        return $this->container['lastModifier'];
    }

    /**
    * Sets lastModifier
    *
    * @param string|null $lastModifier 最后修改人
    *
    * @return $this
    */
    public function setLastModifier($lastModifier)
    {
        $this->container['lastModifier'] = $lastModifier;
        return $this;
    }

    /**
    * Gets lastModified
    *  最后修改时间
    *
    * @return \DateTime|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param \DateTime|null $lastModified 最后修改时间
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets lastModifiedTimestamp
    *  修改时间时间戳
    *
    * @return int|null
    */
    public function getLastModifiedTimestamp()
    {
        return $this->container['lastModifiedTimestamp'];
    }

    /**
    * Sets lastModifiedTimestamp
    *
    * @param int|null $lastModifiedTimestamp 修改时间时间戳
    *
    * @return $this
    */
    public function setLastModifiedTimestamp($lastModifiedTimestamp)
    {
        $this->container['lastModifiedTimestamp'] = $lastModifiedTimestamp;
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
    * Gets creationDateTimestamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreationDateTimestamp()
    {
        return $this->container['creationDateTimestamp'];
    }

    /**
    * Sets creationDateTimestamp
    *
    * @param int|null $creationDateTimestamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreationDateTimestamp($creationDateTimestamp)
    {
        $this->container['creationDateTimestamp'] = $creationDateTimestamp;
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
    * Gets isBaseBranch
    *  是否为基线分支。0表示不是基线分支，1表示是基线分支。
    *
    * @return int|null
    */
    public function getIsBaseBranch()
    {
        return $this->container['isBaseBranch'];
    }

    /**
    * Sets isBaseBranch
    *
    * @param int|null $isBaseBranch 是否为基线分支。0表示不是基线分支，1表示是基线分支。
    *
    * @return $this
    */
    public function setIsBaseBranch($isBaseBranch)
    {
        $this->container['isBaseBranch'] = $isBaseBranch;
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

