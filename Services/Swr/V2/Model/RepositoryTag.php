<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryTag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryTag';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  版本名称
    * artifactId  关联的制品ID
    * digest  关联的制品摘要
    * id  版本ID
    * repositoryId  制品仓库仓库ID
    * type  制品类型，比如IMAGE
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'artifactId' => 'int',
            'digest' => 'string',
            'id' => 'int',
            'repositoryId' => 'int',
            'type' => 'string',
            'namespaceId' => 'int',
            'mediaType' => 'string',
            'manifestMediaType' => 'string',
            'pullTime' => 'string',
            'pushTime' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  版本名称
    * artifactId  关联的制品ID
    * digest  关联的制品摘要
    * id  版本ID
    * repositoryId  制品仓库仓库ID
    * type  制品类型，比如IMAGE
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'artifactId' => null,
        'digest' => null,
        'id' => null,
        'repositoryId' => null,
        'type' => null,
        'namespaceId' => null,
        'mediaType' => null,
        'manifestMediaType' => null,
        'pullTime' => null,
        'pushTime' => null,
        'size' => null
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
    * name  版本名称
    * artifactId  关联的制品ID
    * digest  关联的制品摘要
    * id  版本ID
    * repositoryId  制品仓库仓库ID
    * type  制品类型，比如IMAGE
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'artifactId' => 'artifact_id',
            'digest' => 'digest',
            'id' => 'id',
            'repositoryId' => 'repository_id',
            'type' => 'type',
            'namespaceId' => 'namespace_id',
            'mediaType' => 'media_type',
            'manifestMediaType' => 'manifest_media_type',
            'pullTime' => 'pull_time',
            'pushTime' => 'push_time',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  版本名称
    * artifactId  关联的制品ID
    * digest  关联的制品摘要
    * id  版本ID
    * repositoryId  制品仓库仓库ID
    * type  制品类型，比如IMAGE
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'artifactId' => 'setArtifactId',
            'digest' => 'setDigest',
            'id' => 'setId',
            'repositoryId' => 'setRepositoryId',
            'type' => 'setType',
            'namespaceId' => 'setNamespaceId',
            'mediaType' => 'setMediaType',
            'manifestMediaType' => 'setManifestMediaType',
            'pullTime' => 'setPullTime',
            'pushTime' => 'setPushTime',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  版本名称
    * artifactId  关联的制品ID
    * digest  关联的制品摘要
    * id  版本ID
    * repositoryId  制品仓库仓库ID
    * type  制品类型，比如IMAGE
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'artifactId' => 'getArtifactId',
            'digest' => 'getDigest',
            'id' => 'getId',
            'repositoryId' => 'getRepositoryId',
            'type' => 'getType',
            'namespaceId' => 'getNamespaceId',
            'mediaType' => 'getMediaType',
            'manifestMediaType' => 'getManifestMediaType',
            'pullTime' => 'getPullTime',
            'pushTime' => 'getPushTime',
            'size' => 'getSize'
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
        $this->container['artifactId'] = isset($data['artifactId']) ? $data['artifactId'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['manifestMediaType'] = isset($data['manifestMediaType']) ? $data['manifestMediaType'] : null;
        $this->container['pullTime'] = isset($data['pullTime']) ? $data['pullTime'] : null;
        $this->container['pushTime'] = isset($data['pushTime']) ? $data['pushTime'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
    *  版本名称
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
    * @param string|null $name 版本名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets artifactId
    *  关联的制品ID
    *
    * @return int|null
    */
    public function getArtifactId()
    {
        return $this->container['artifactId'];
    }

    /**
    * Sets artifactId
    *
    * @param int|null $artifactId 关联的制品ID
    *
    * @return $this
    */
    public function setArtifactId($artifactId)
    {
        $this->container['artifactId'] = $artifactId;
        return $this;
    }

    /**
    * Gets digest
    *  关联的制品摘要
    *
    * @return string|null
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string|null $digest 关联的制品摘要
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
        return $this;
    }

    /**
    * Gets id
    *  版本ID
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
    * @param int|null $id 版本ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets repositoryId
    *  制品仓库仓库ID
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId 制品仓库仓库ID
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets type
    *  制品类型，比如IMAGE
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
    * @param string|null $type 制品类型，比如IMAGE
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
    * Gets mediaType
    *  制品MIME类型
    *
    * @return string|null
    */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
    * Sets mediaType
    *
    * @param string|null $mediaType 制品MIME类型
    *
    * @return $this
    */
    public function setMediaType($mediaType)
    {
        $this->container['mediaType'] = $mediaType;
        return $this;
    }

    /**
    * Gets manifestMediaType
    *  制品元数据MIME类型
    *
    * @return string|null
    */
    public function getManifestMediaType()
    {
        return $this->container['manifestMediaType'];
    }

    /**
    * Sets manifestMediaType
    *
    * @param string|null $manifestMediaType 制品元数据MIME类型
    *
    * @return $this
    */
    public function setManifestMediaType($manifestMediaType)
    {
        $this->container['manifestMediaType'] = $manifestMediaType;
        return $this;
    }

    /**
    * Gets pullTime
    *  最近一次拉取时间
    *
    * @return string|null
    */
    public function getPullTime()
    {
        return $this->container['pullTime'];
    }

    /**
    * Sets pullTime
    *
    * @param string|null $pullTime 最近一次拉取时间
    *
    * @return $this
    */
    public function setPullTime($pullTime)
    {
        $this->container['pullTime'] = $pullTime;
        return $this;
    }

    /**
    * Gets pushTime
    *  最近一次上传时间
    *
    * @return string|null
    */
    public function getPushTime()
    {
        return $this->container['pushTime'];
    }

    /**
    * Sets pushTime
    *
    * @param string|null $pushTime 最近一次上传时间
    *
    * @return $this
    */
    public function setPushTime($pushTime)
    {
        $this->container['pushTime'] = $pushTime;
        return $this;
    }

    /**
    * Gets size
    *  制品大小，单位：Byte
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 制品大小，单位：Byte
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

