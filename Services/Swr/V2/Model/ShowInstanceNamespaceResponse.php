<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceNamespaceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceNamespaceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  命名空间名称
    * metadata  metadata
    * namespaceId  命名空间ID
    * createdAt  创建时间
    * updatedAt  更新时间
    * repoCount  镜像数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata',
            'namespaceId' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'repoCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  命名空间名称
    * metadata  metadata
    * namespaceId  命名空间ID
    * createdAt  创建时间
    * updatedAt  更新时间
    * repoCount  镜像数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'metadata' => null,
        'namespaceId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'repoCount' => null
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
    * name  命名空间名称
    * metadata  metadata
    * namespaceId  命名空间ID
    * createdAt  创建时间
    * updatedAt  更新时间
    * repoCount  镜像数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'metadata' => 'metadata',
            'namespaceId' => 'namespace_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'repoCount' => 'repo_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  命名空间名称
    * metadata  metadata
    * namespaceId  命名空间ID
    * createdAt  创建时间
    * updatedAt  更新时间
    * repoCount  镜像数量
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'metadata' => 'setMetadata',
            'namespaceId' => 'setNamespaceId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'repoCount' => 'setRepoCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  命名空间名称
    * metadata  metadata
    * namespaceId  命名空间ID
    * createdAt  创建时间
    * updatedAt  更新时间
    * repoCount  镜像数量
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'metadata' => 'getMetadata',
            'namespaceId' => 'getNamespaceId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'repoCount' => 'getRepoCount'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['repoCount'] = isset($data['repoCount']) ? $data['repoCount'] : null;
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
    * Gets name
    *  命名空间名称
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
    * @param string|null $name 命名空间名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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
    * Gets repoCount
    *  镜像数量
    *
    * @return int|null
    */
    public function getRepoCount()
    {
        return $this->container['repoCount'];
    }

    /**
    * Sets repoCount
    *
    * @param int|null $repoCount 镜像数量
    *
    * @return $this
    */
    public function setRepoCount($repoCount)
    {
        $this->container['repoCount'] = $repoCount;
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

