<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepoTagResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepoTagResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  tag编号
    * repoId  仓库编号
    * tag  tag版本名称
    * imageId  镜像id
    * manifest  镜像manifest
    * digest  镜像hash值
    * schema  docker协议版本，值为1或2
    * path  镜像pull地址，格式为swr.cn-north-1.myhuaweicloud.com/namespace/repository:tag
    * internalPath  cce集群内镜像pull路径，格式为 10.125.0.198:20202/namespace/repository:tag
    * size  镜像大小，0 ~ 9223372036854775807
    * isTrusted  默认值为false
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * tagType  0：manifest类型；1：manifest list类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'repoId' => 'int',
            'tag' => 'string',
            'imageId' => 'string',
            'manifest' => 'string',
            'digest' => 'string',
            'schema' => 'int',
            'path' => 'string',
            'internalPath' => 'string',
            'size' => 'int',
            'isTrusted' => 'bool',
            'created' => 'string',
            'updated' => 'string',
            'domainId' => 'string',
            'tagType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  tag编号
    * repoId  仓库编号
    * tag  tag版本名称
    * imageId  镜像id
    * manifest  镜像manifest
    * digest  镜像hash值
    * schema  docker协议版本，值为1或2
    * path  镜像pull地址，格式为swr.cn-north-1.myhuaweicloud.com/namespace/repository:tag
    * internalPath  cce集群内镜像pull路径，格式为 10.125.0.198:20202/namespace/repository:tag
    * size  镜像大小，0 ~ 9223372036854775807
    * isTrusted  默认值为false
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * tagType  0：manifest类型；1：manifest list类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'repoId' => 'int64',
        'tag' => null,
        'imageId' => null,
        'manifest' => null,
        'digest' => null,
        'schema' => 'int64',
        'path' => null,
        'internalPath' => null,
        'size' => 'int64',
        'isTrusted' => null,
        'created' => null,
        'updated' => null,
        'domainId' => null,
        'tagType' => 'int64'
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
    * id  tag编号
    * repoId  仓库编号
    * tag  tag版本名称
    * imageId  镜像id
    * manifest  镜像manifest
    * digest  镜像hash值
    * schema  docker协议版本，值为1或2
    * path  镜像pull地址，格式为swr.cn-north-1.myhuaweicloud.com/namespace/repository:tag
    * internalPath  cce集群内镜像pull路径，格式为 10.125.0.198:20202/namespace/repository:tag
    * size  镜像大小，0 ~ 9223372036854775807
    * isTrusted  默认值为false
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * tagType  0：manifest类型；1：manifest list类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'repoId' => 'repo_id',
            'tag' => 'tag',
            'imageId' => 'image_id',
            'manifest' => 'manifest',
            'digest' => 'digest',
            'schema' => 'schema',
            'path' => 'path',
            'internalPath' => 'internal_path',
            'size' => 'size',
            'isTrusted' => 'is_trusted',
            'created' => 'created',
            'updated' => 'updated',
            'domainId' => 'domain_id',
            'tagType' => 'tag_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  tag编号
    * repoId  仓库编号
    * tag  tag版本名称
    * imageId  镜像id
    * manifest  镜像manifest
    * digest  镜像hash值
    * schema  docker协议版本，值为1或2
    * path  镜像pull地址，格式为swr.cn-north-1.myhuaweicloud.com/namespace/repository:tag
    * internalPath  cce集群内镜像pull路径，格式为 10.125.0.198:20202/namespace/repository:tag
    * size  镜像大小，0 ~ 9223372036854775807
    * isTrusted  默认值为false
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * tagType  0：manifest类型；1：manifest list类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'repoId' => 'setRepoId',
            'tag' => 'setTag',
            'imageId' => 'setImageId',
            'manifest' => 'setManifest',
            'digest' => 'setDigest',
            'schema' => 'setSchema',
            'path' => 'setPath',
            'internalPath' => 'setInternalPath',
            'size' => 'setSize',
            'isTrusted' => 'setIsTrusted',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'domainId' => 'setDomainId',
            'tagType' => 'setTagType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  tag编号
    * repoId  仓库编号
    * tag  tag版本名称
    * imageId  镜像id
    * manifest  镜像manifest
    * digest  镜像hash值
    * schema  docker协议版本，值为1或2
    * path  镜像pull地址，格式为swr.cn-north-1.myhuaweicloud.com/namespace/repository:tag
    * internalPath  cce集群内镜像pull路径，格式为 10.125.0.198:20202/namespace/repository:tag
    * size  镜像大小，0 ~ 9223372036854775807
    * isTrusted  默认值为false
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * tagType  0：manifest类型；1：manifest list类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'repoId' => 'getRepoId',
            'tag' => 'getTag',
            'imageId' => 'getImageId',
            'manifest' => 'getManifest',
            'digest' => 'getDigest',
            'schema' => 'getSchema',
            'path' => 'getPath',
            'internalPath' => 'getInternalPath',
            'size' => 'getSize',
            'isTrusted' => 'getIsTrusted',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'domainId' => 'getDomainId',
            'tagType' => 'getTagType'
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
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['manifest'] = isset($data['manifest']) ? $data['manifest'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['internalPath'] = isset($data['internalPath']) ? $data['internalPath'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['isTrusted'] = isset($data['isTrusted']) ? $data['isTrusted'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['tagType'] = isset($data['tagType']) ? $data['tagType'] : null;
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
    *  tag编号
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
    * @param int|null $id tag编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets repoId
    *  仓库编号
    *
    * @return int|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param int|null $repoId 仓库编号
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets tag
    *  tag版本名称
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag tag版本名称
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像id
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets manifest
    *  镜像manifest
    *
    * @return string|null
    */
    public function getManifest()
    {
        return $this->container['manifest'];
    }

    /**
    * Sets manifest
    *
    * @param string|null $manifest 镜像manifest
    *
    * @return $this
    */
    public function setManifest($manifest)
    {
        $this->container['manifest'] = $manifest;
        return $this;
    }

    /**
    * Gets digest
    *  镜像hash值
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
    * @param string|null $digest 镜像hash值
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
        return $this;
    }

    /**
    * Gets schema
    *  docker协议版本，值为1或2
    *
    * @return int|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param int|null $schema docker协议版本，值为1或2
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets path
    *  镜像pull地址，格式为swr.cn-north-1.myhuaweicloud.com/namespace/repository:tag
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 镜像pull地址，格式为swr.cn-north-1.myhuaweicloud.com/namespace/repository:tag
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets internalPath
    *  cce集群内镜像pull路径，格式为 10.125.0.198:20202/namespace/repository:tag
    *
    * @return string|null
    */
    public function getInternalPath()
    {
        return $this->container['internalPath'];
    }

    /**
    * Sets internalPath
    *
    * @param string|null $internalPath cce集群内镜像pull路径，格式为 10.125.0.198:20202/namespace/repository:tag
    *
    * @return $this
    */
    public function setInternalPath($internalPath)
    {
        $this->container['internalPath'] = $internalPath;
        return $this;
    }

    /**
    * Gets size
    *  镜像大小，0 ~ 9223372036854775807
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
    * @param int|null $size 镜像大小，0 ~ 9223372036854775807
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets isTrusted
    *  默认值为false
    *
    * @return bool|null
    */
    public function getIsTrusted()
    {
        return $this->container['isTrusted'];
    }

    /**
    * Sets isTrusted
    *
    * @param bool|null $isTrusted 默认值为false
    *
    * @return $this
    */
    public function setIsTrusted($isTrusted)
    {
        $this->container['isTrusted'] = $isTrusted;
        return $this;
    }

    /**
    * Gets created
    *  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets domainId
    *  帐号ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 帐号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets tagType
    *  0：manifest类型；1：manifest list类型
    *
    * @return int|null
    */
    public function getTagType()
    {
        return $this->container['tagType'];
    }

    /**
    * Sets tagType
    *
    * @param int|null $tagType 0：manifest类型；1：manifest list类型
    *
    * @return $this
    */
    public function setTagType($tagType)
    {
        $this->container['tagType'] = $tagType;
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

