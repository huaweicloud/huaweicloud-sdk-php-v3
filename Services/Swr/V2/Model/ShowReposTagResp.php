<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReposTagResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReposTagResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  tag编号
    * repoId  仓库编号
    * tag  Tag版本名称
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
    * deleted  镜像删除时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * scanned  镜像是否被扫描过
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
            'deleted' => 'string',
            'domainId' => 'string',
            'scanned' => 'bool',
            'tagType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  tag编号
    * repoId  仓库编号
    * tag  Tag版本名称
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
    * deleted  镜像删除时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * scanned  镜像是否被扫描过
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
        'deleted' => null,
        'domainId' => null,
        'scanned' => null,
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
    * tag  Tag版本名称
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
    * deleted  镜像删除时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * scanned  镜像是否被扫描过
    * tagType  0：manifest类型；1：manifest list类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'repoId' => 'repo_id',
            'tag' => 'Tag',
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
            'deleted' => 'deleted',
            'domainId' => 'domain_id',
            'scanned' => 'scanned',
            'tagType' => 'tag_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  tag编号
    * repoId  仓库编号
    * tag  Tag版本名称
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
    * deleted  镜像删除时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * scanned  镜像是否被扫描过
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
            'deleted' => 'setDeleted',
            'domainId' => 'setDomainId',
            'scanned' => 'setScanned',
            'tagType' => 'setTagType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  tag编号
    * repoId  仓库编号
    * tag  Tag版本名称
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
    * deleted  镜像删除时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * scanned  镜像是否被扫描过
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
            'deleted' => 'getDeleted',
            'domainId' => 'getDomainId',
            'scanned' => 'getScanned',
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
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['scanned'] = isset($data['scanned']) ? $data['scanned'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['repoId'] === null) {
            $invalidProperties[] = "'repoId' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
        }
        if ($this->container['imageId'] === null) {
            $invalidProperties[] = "'imageId' can't be null";
        }
        if ($this->container['manifest'] === null) {
            $invalidProperties[] = "'manifest' can't be null";
        }
        if ($this->container['digest'] === null) {
            $invalidProperties[] = "'digest' can't be null";
        }
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['internalPath'] === null) {
            $invalidProperties[] = "'internalPath' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['isTrusted'] === null) {
            $invalidProperties[] = "'isTrusted' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['scanned'] === null) {
            $invalidProperties[] = "'scanned' can't be null";
        }
        if ($this->container['tagType'] === null) {
            $invalidProperties[] = "'tagType' can't be null";
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
    * Gets id
    *  tag编号
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id tag编号
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
    * @return int
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param int $repoId 仓库编号
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
    *  Tag版本名称
    *
    * @return string
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string $tag Tag版本名称
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
    * @return string
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string $imageId 镜像id
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
    * @return string
    */
    public function getManifest()
    {
        return $this->container['manifest'];
    }

    /**
    * Sets manifest
    *
    * @param string $manifest 镜像manifest
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
    * @return string
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string $digest 镜像hash值
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
    * @return int
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param int $schema docker协议版本，值为1或2
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
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 镜像pull地址，格式为swr.cn-north-1.myhuaweicloud.com/namespace/repository:tag
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
    * @return string
    */
    public function getInternalPath()
    {
        return $this->container['internalPath'];
    }

    /**
    * Sets internalPath
    *
    * @param string $internalPath cce集群内镜像pull路径，格式为 10.125.0.198:20202/namespace/repository:tag
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
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 镜像大小，0 ~ 9223372036854775807
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
    * @return bool
    */
    public function getIsTrusted()
    {
        return $this->container['isTrusted'];
    }

    /**
    * Sets isTrusted
    *
    * @param bool $isTrusted 默认值为false
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
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
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
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets deleted
    *  镜像删除时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return string
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param string $deleted 镜像删除时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets domainId
    *  帐号ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 帐号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets scanned
    *  镜像是否被扫描过
    *
    * @return bool
    */
    public function getScanned()
    {
        return $this->container['scanned'];
    }

    /**
    * Sets scanned
    *
    * @param bool $scanned 镜像是否被扫描过
    *
    * @return $this
    */
    public function setScanned($scanned)
    {
        $this->container['scanned'] = $scanned;
        return $this;
    }

    /**
    * Gets tagType
    *  0：manifest类型；1：manifest list类型
    *
    * @return int
    */
    public function getTagType()
    {
        return $this->container['tagType'];
    }

    /**
    * Sets tagType
    *
    * @param int $tagType 0：manifest类型；1：manifest list类型
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

