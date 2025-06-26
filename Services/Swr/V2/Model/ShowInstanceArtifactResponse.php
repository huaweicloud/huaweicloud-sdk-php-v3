<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceArtifactResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceArtifactResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * digest  制品摘要
    * id  制品ID
    * repositoryId  仓库ID
    * repositoryName  仓库名称
    * type  制品类型
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    * tags  制品版本的Tag列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'digest' => 'string',
            'id' => 'int',
            'repositoryId' => 'int',
            'repositoryName' => 'string',
            'type' => 'string',
            'namespaceId' => 'int',
            'mediaType' => 'string',
            'manifestMediaType' => 'string',
            'pullTime' => 'string',
            'pushTime' => 'string',
            'size' => 'int',
            'tags' => '\HuaweiCloud\SDK\Swr\V2\Model\ArtifactTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * digest  制品摘要
    * id  制品ID
    * repositoryId  仓库ID
    * repositoryName  仓库名称
    * type  制品类型
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    * tags  制品版本的Tag列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'digest' => null,
        'id' => null,
        'repositoryId' => null,
        'repositoryName' => null,
        'type' => null,
        'namespaceId' => null,
        'mediaType' => null,
        'manifestMediaType' => null,
        'pullTime' => null,
        'pushTime' => null,
        'size' => null,
        'tags' => null
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
    * digest  制品摘要
    * id  制品ID
    * repositoryId  仓库ID
    * repositoryName  仓库名称
    * type  制品类型
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    * tags  制品版本的Tag列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'digest' => 'digest',
            'id' => 'id',
            'repositoryId' => 'repository_id',
            'repositoryName' => 'repository_name',
            'type' => 'type',
            'namespaceId' => 'namespace_id',
            'mediaType' => 'media_type',
            'manifestMediaType' => 'manifest_media_type',
            'pullTime' => 'pull_time',
            'pushTime' => 'push_time',
            'size' => 'size',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * digest  制品摘要
    * id  制品ID
    * repositoryId  仓库ID
    * repositoryName  仓库名称
    * type  制品类型
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    * tags  制品版本的Tag列表
    *
    * @var string[]
    */
    protected static $setters = [
            'digest' => 'setDigest',
            'id' => 'setId',
            'repositoryId' => 'setRepositoryId',
            'repositoryName' => 'setRepositoryName',
            'type' => 'setType',
            'namespaceId' => 'setNamespaceId',
            'mediaType' => 'setMediaType',
            'manifestMediaType' => 'setManifestMediaType',
            'pullTime' => 'setPullTime',
            'pushTime' => 'setPushTime',
            'size' => 'setSize',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * digest  制品摘要
    * id  制品ID
    * repositoryId  仓库ID
    * repositoryName  仓库名称
    * type  制品类型
    * namespaceId  命名空间ID
    * mediaType  制品MIME类型
    * manifestMediaType  制品元数据MIME类型
    * pullTime  最近一次拉取时间
    * pushTime  最近一次上传时间
    * size  制品大小，单位：Byte
    * tags  制品版本的Tag列表
    *
    * @var string[]
    */
    protected static $getters = [
            'digest' => 'getDigest',
            'id' => 'getId',
            'repositoryId' => 'getRepositoryId',
            'repositoryName' => 'getRepositoryName',
            'type' => 'getType',
            'namespaceId' => 'getNamespaceId',
            'mediaType' => 'getMediaType',
            'manifestMediaType' => 'getManifestMediaType',
            'pullTime' => 'getPullTime',
            'pushTime' => 'getPushTime',
            'size' => 'getSize',
            'tags' => 'getTags'
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
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['manifestMediaType'] = isset($data['manifestMediaType']) ? $data['manifestMediaType'] : null;
        $this->container['pullTime'] = isset($data['pullTime']) ? $data['pullTime'] : null;
        $this->container['pushTime'] = isset($data['pushTime']) ? $data['pushTime'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets digest
    *  制品摘要
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
    * @param string|null $digest 制品摘要
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
    *  制品ID
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
    * @param int|null $id 制品ID
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
    *  仓库ID
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
    * @param int|null $repositoryId 仓库ID
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets repositoryName
    *  仓库名称
    *
    * @return string|null
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string|null $repositoryName 仓库名称
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets type
    *  制品类型
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
    * @param string|null $type 制品类型
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
    * Gets tags
    *  制品版本的Tag列表
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\ArtifactTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\ArtifactTag[]|null $tags 制品版本的Tag列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

