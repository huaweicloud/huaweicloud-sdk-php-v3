<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepositoryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepositoryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  仓库编号
    * nsId  组织编号
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * creatorId  仓库创建者id
    * creatorName  仓库创建者
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * created  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * priority  镜像排序优先级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'nsId' => 'int',
            'name' => 'string',
            'category' => 'string',
            'description' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'size' => 'int',
            'isPublic' => 'bool',
            'numImages' => 'int',
            'numDownload' => 'int',
            'url' => 'string',
            'path' => 'string',
            'internalPath' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'domainId' => 'string',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  仓库编号
    * nsId  组织编号
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * creatorId  仓库创建者id
    * creatorName  仓库创建者
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * created  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * priority  镜像排序优先级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'nsId' => 'int64',
        'name' => null,
        'category' => null,
        'description' => null,
        'creatorId' => null,
        'creatorName' => null,
        'size' => 'int64',
        'isPublic' => null,
        'numImages' => 'int64',
        'numDownload' => 'int64',
        'url' => null,
        'path' => null,
        'internalPath' => null,
        'created' => null,
        'updated' => null,
        'domainId' => null,
        'priority' => 'int32'
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
    * id  仓库编号
    * nsId  组织编号
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * creatorId  仓库创建者id
    * creatorName  仓库创建者
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * created  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * priority  镜像排序优先级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'nsId' => 'ns_id',
            'name' => 'name',
            'category' => 'category',
            'description' => 'description',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'size' => 'size',
            'isPublic' => 'is_public',
            'numImages' => 'num_images',
            'numDownload' => 'num_download',
            'url' => 'url',
            'path' => 'path',
            'internalPath' => 'internal_path',
            'created' => 'created',
            'updated' => 'updated',
            'domainId' => 'domain_id',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  仓库编号
    * nsId  组织编号
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * creatorId  仓库创建者id
    * creatorName  仓库创建者
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * created  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * priority  镜像排序优先级
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'nsId' => 'setNsId',
            'name' => 'setName',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'size' => 'setSize',
            'isPublic' => 'setIsPublic',
            'numImages' => 'setNumImages',
            'numDownload' => 'setNumDownload',
            'url' => 'setUrl',
            'path' => 'setPath',
            'internalPath' => 'setInternalPath',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'domainId' => 'setDomainId',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  仓库编号
    * nsId  组织编号
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * creatorId  仓库创建者id
    * creatorName  仓库创建者
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * created  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  帐号ID
    * priority  镜像排序优先级
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'nsId' => 'getNsId',
            'name' => 'getName',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'size' => 'getSize',
            'isPublic' => 'getIsPublic',
            'numImages' => 'getNumImages',
            'numDownload' => 'getNumDownload',
            'url' => 'getUrl',
            'path' => 'getPath',
            'internalPath' => 'getInternalPath',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'domainId' => 'getDomainId',
            'priority' => 'getPriority'
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
        $this->container['nsId'] = isset($data['nsId']) ? $data['nsId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['numImages'] = isset($data['numImages']) ? $data['numImages'] : null;
        $this->container['numDownload'] = isset($data['numDownload']) ? $data['numDownload'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['internalPath'] = isset($data['internalPath']) ? $data['internalPath'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
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
    *  仓库编号
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
    * @param int|null $id 仓库编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nsId
    *  组织编号
    *
    * @return int|null
    */
    public function getNsId()
    {
        return $this->container['nsId'];
    }

    /**
    * Sets nsId
    *
    * @param int|null $nsId 组织编号
    *
    * @return $this
    */
    public function setNsId($nsId)
    {
        $this->container['nsId'] = $nsId;
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
    * Gets category
    *  仓库类型（计划改造，每个镜像会有多个lable标示）
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 仓库类型（计划改造，每个镜像会有多个lable标示）
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  仓库描述信息
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
    * @param string|null $description 仓库描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets creatorId
    *  仓库创建者id
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 仓库创建者id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  仓库创建者
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 仓库创建者
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets size
    *  仓库大小
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
    * @param int|null $size 仓库大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets isPublic
    *  仓库是否为公共仓库，值为true或false
    *
    * @return bool|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool|null $isPublic 仓库是否为公共仓库，值为true或false
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets numImages
    *  仓库中镜像个数，0 ~ 9223372036854775807
    *
    * @return int|null
    */
    public function getNumImages()
    {
        return $this->container['numImages'];
    }

    /**
    * Sets numImages
    *
    * @param int|null $numImages 仓库中镜像个数，0 ~ 9223372036854775807
    *
    * @return $this
    */
    public function setNumImages($numImages)
    {
        $this->container['numImages'] = $numImages;
        return $this;
    }

    /**
    * Gets numDownload
    *  仓库下载次数
    *
    * @return int|null
    */
    public function getNumDownload()
    {
        return $this->container['numDownload'];
    }

    /**
    * Sets numDownload
    *
    * @param int|null $numDownload 仓库下载次数
    *
    * @return $this
    */
    public function setNumDownload($numDownload)
    {
        $this->container['numDownload'] = $numDownload;
        return $this;
    }

    /**
    * Gets url
    *  仓库logo图片的URL，URL格式。（暂时未用）
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 仓库logo图片的URL，URL格式。（暂时未用）
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets path
    *  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
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
    * @param string|null $path 镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
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
    *  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
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
    * @param string|null $internalPath 镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    *
    * @return $this
    */
    public function setInternalPath($internalPath)
    {
        $this->container['internalPath'] = $internalPath;
        return $this;
    }

    /**
    * Gets created
    *  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
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
    * @param string|null $created 仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
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
    *  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
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
    * @param string|null $updated 仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
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
    * Gets priority
    *  镜像排序优先级
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 镜像排序优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

