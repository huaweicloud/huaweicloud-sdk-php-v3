<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceRepositoryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceRepositoryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  仓库ID
    * name  仓库名称
    * namespaceName  命名空间名称
    * namespaceId  命名空间ID
    * tagCount  仓库内的制品版本数量
    * pullCount  被下载总次数
    * artifactCount  制品包总数
    * description  描述
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'namespaceName' => 'string',
            'namespaceId' => 'int',
            'tagCount' => 'int',
            'pullCount' => 'int',
            'artifactCount' => 'int',
            'description' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  仓库ID
    * name  仓库名称
    * namespaceName  命名空间名称
    * namespaceId  命名空间ID
    * tagCount  仓库内的制品版本数量
    * pullCount  被下载总次数
    * artifactCount  制品包总数
    * description  描述
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'namespaceName' => null,
        'namespaceId' => null,
        'tagCount' => null,
        'pullCount' => null,
        'artifactCount' => null,
        'description' => null,
        'createdAt' => null,
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
    * id  仓库ID
    * name  仓库名称
    * namespaceName  命名空间名称
    * namespaceId  命名空间ID
    * tagCount  仓库内的制品版本数量
    * pullCount  被下载总次数
    * artifactCount  制品包总数
    * description  描述
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'namespaceName' => 'namespace_name',
            'namespaceId' => 'namespace_id',
            'tagCount' => 'tag_count',
            'pullCount' => 'pull_count',
            'artifactCount' => 'artifact_count',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  仓库ID
    * name  仓库名称
    * namespaceName  命名空间名称
    * namespaceId  命名空间ID
    * tagCount  仓库内的制品版本数量
    * pullCount  被下载总次数
    * artifactCount  制品包总数
    * description  描述
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'namespaceName' => 'setNamespaceName',
            'namespaceId' => 'setNamespaceId',
            'tagCount' => 'setTagCount',
            'pullCount' => 'setPullCount',
            'artifactCount' => 'setArtifactCount',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  仓库ID
    * name  仓库名称
    * namespaceName  命名空间名称
    * namespaceId  命名空间ID
    * tagCount  仓库内的制品版本数量
    * pullCount  被下载总次数
    * artifactCount  制品包总数
    * description  描述
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'namespaceName' => 'getNamespaceName',
            'namespaceId' => 'getNamespaceId',
            'tagCount' => 'getTagCount',
            'pullCount' => 'getPullCount',
            'artifactCount' => 'getArtifactCount',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['tagCount'] = isset($data['tagCount']) ? $data['tagCount'] : null;
        $this->container['pullCount'] = isset($data['pullCount']) ? $data['pullCount'] : null;
        $this->container['artifactCount'] = isset($data['artifactCount']) ? $data['artifactCount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
    * Gets id
    *  仓库ID
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
    * @param int|null $id 仓库ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  仓库名称
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
    * @param string|null $name 仓库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名称
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName 命名空间名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets namespaceId
    *  命名空间ID
    *
    * @return int|null
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param int|null $namespaceId 命名空间ID
    *
    * @return $this
    */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;
        return $this;
    }

    /**
    * Gets tagCount
    *  仓库内的制品版本数量
    *
    * @return int|null
    */
    public function getTagCount()
    {
        return $this->container['tagCount'];
    }

    /**
    * Sets tagCount
    *
    * @param int|null $tagCount 仓库内的制品版本数量
    *
    * @return $this
    */
    public function setTagCount($tagCount)
    {
        $this->container['tagCount'] = $tagCount;
        return $this;
    }

    /**
    * Gets pullCount
    *  被下载总次数
    *
    * @return int|null
    */
    public function getPullCount()
    {
        return $this->container['pullCount'];
    }

    /**
    * Sets pullCount
    *
    * @param int|null $pullCount 被下载总次数
    *
    * @return $this
    */
    public function setPullCount($pullCount)
    {
        $this->container['pullCount'] = $pullCount;
        return $this;
    }

    /**
    * Gets artifactCount
    *  制品包总数
    *
    * @return int|null
    */
    public function getArtifactCount()
    {
        return $this->container['artifactCount'];
    }

    /**
    * Sets artifactCount
    *
    * @param int|null $artifactCount 制品包总数
    *
    * @return $this
    */
    public function setArtifactCount($artifactCount)
    {
        $this->container['artifactCount'] = $artifactCount;
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

