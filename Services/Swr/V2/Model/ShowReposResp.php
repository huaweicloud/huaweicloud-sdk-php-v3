<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReposResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReposResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * logo  仓库logo地址（暂时未用）
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * domainName  租户名
    * namespace  租户的组织名称
    * tags  镜像版本列表
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    * totalRange  总记录条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'category' => 'string',
            'description' => 'string',
            'size' => 'int',
            'isPublic' => 'bool',
            'numImages' => 'int',
            'numDownload' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'logo' => 'string',
            'url' => 'string',
            'path' => 'string',
            'internalPath' => 'string',
            'domainName' => 'string',
            'namespace' => 'string',
            'tags' => 'string[]',
            'status' => 'bool',
            'totalRange' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * logo  仓库logo地址（暂时未用）
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * domainName  租户名
    * namespace  租户的组织名称
    * tags  镜像版本列表
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    * totalRange  总记录条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'category' => null,
        'description' => null,
        'size' => 'int64',
        'isPublic' => null,
        'numImages' => 'int64',
        'numDownload' => 'int64',
        'createdAt' => null,
        'updatedAt' => null,
        'logo' => null,
        'url' => null,
        'path' => null,
        'internalPath' => null,
        'domainName' => null,
        'namespace' => null,
        'tags' => null,
        'status' => null,
        'totalRange' => 'int64'
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
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * logo  仓库logo地址（暂时未用）
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * domainName  租户名
    * namespace  租户的组织名称
    * tags  镜像版本列表
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    * totalRange  总记录条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'category' => 'category',
            'description' => 'description',
            'size' => 'size',
            'isPublic' => 'is_public',
            'numImages' => 'num_images',
            'numDownload' => 'num_download',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'logo' => 'logo',
            'url' => 'url',
            'path' => 'path',
            'internalPath' => 'internal_path',
            'domainName' => 'domain_name',
            'namespace' => 'namespace',
            'tags' => 'tags',
            'status' => 'status',
            'totalRange' => 'total_range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * logo  仓库logo地址（暂时未用）
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * domainName  租户名
    * namespace  租户的组织名称
    * tags  镜像版本列表
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    * totalRange  总记录条数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'size' => 'setSize',
            'isPublic' => 'setIsPublic',
            'numImages' => 'setNumImages',
            'numDownload' => 'setNumDownload',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'logo' => 'setLogo',
            'url' => 'setUrl',
            'path' => 'setPath',
            'internalPath' => 'setInternalPath',
            'domainName' => 'setDomainName',
            'namespace' => 'setNamespace',
            'tags' => 'setTags',
            'status' => 'setStatus',
            'totalRange' => 'setTotalRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * logo  仓库logo地址（暂时未用）
    * url  仓库logo图片的URL，URL格式。（暂时未用）
    * path  镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
    * internalPath  镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    * domainName  租户名
    * namespace  租户的组织名称
    * tags  镜像版本列表
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    * totalRange  总记录条数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'size' => 'getSize',
            'isPublic' => 'getIsPublic',
            'numImages' => 'getNumImages',
            'numDownload' => 'getNumDownload',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'logo' => 'getLogo',
            'url' => 'getUrl',
            'path' => 'getPath',
            'internalPath' => 'getInternalPath',
            'domainName' => 'getDomainName',
            'namespace' => 'getNamespace',
            'tags' => 'getTags',
            'status' => 'getStatus',
            'totalRange' => 'getTotalRange'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['numImages'] = isset($data['numImages']) ? $data['numImages'] : null;
        $this->container['numDownload'] = isset($data['numDownload']) ? $data['numDownload'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['internalPath'] = isset($data['internalPath']) ? $data['internalPath'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['totalRange'] = isset($data['totalRange']) ? $data['totalRange'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['isPublic'] === null) {
            $invalidProperties[] = "'isPublic' can't be null";
        }
        if ($this->container['numImages'] === null) {
            $invalidProperties[] = "'numImages' can't be null";
        }
        if ($this->container['numDownload'] === null) {
            $invalidProperties[] = "'numDownload' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['logo'] === null) {
            $invalidProperties[] = "'logo' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['internalPath'] === null) {
            $invalidProperties[] = "'internalPath' can't be null";
        }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['totalRange'] === null) {
            $invalidProperties[] = "'totalRange' can't be null";
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
    * Gets name
    *  仓库名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 仓库名称
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
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 仓库类型（计划改造，每个镜像会有多个lable标示）
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
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 仓库描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets size
    *  仓库大小
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
    * @param int $size 仓库大小
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
    * @return bool
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool $isPublic 仓库是否为公共仓库，值为true或false
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
    * @return int
    */
    public function getNumImages()
    {
        return $this->container['numImages'];
    }

    /**
    * Sets numImages
    *
    * @param int $numImages 仓库中镜像个数，0 ~ 9223372036854775807
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
    * @return int
    */
    public function getNumDownload()
    {
        return $this->container['numDownload'];
    }

    /**
    * Sets numDownload
    *
    * @param int $numDownload 仓库下载次数
    *
    * @return $this
    */
    public function setNumDownload($numDownload)
    {
        $this->container['numDownload'] = $numDownload;
        return $this;
    }

    /**
    * Gets createdAt
    *  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
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
    *  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets logo
    *  仓库logo地址（暂时未用）
    *
    * @return string
    */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
    * Sets logo
    *
    * @param string $logo 仓库logo地址（暂时未用）
    *
    * @return $this
    */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;
        return $this;
    }

    /**
    * Gets url
    *  仓库logo图片的URL，URL格式。（暂时未用）
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 仓库logo图片的URL，URL格式。（暂时未用）
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
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 镜像pull路径，格式为 swr.cn-north-1.myhuaweicloud.com/namespace/repository
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
    * @return string
    */
    public function getInternalPath()
    {
        return $this->container['internalPath'];
    }

    /**
    * Sets internalPath
    *
    * @param string $internalPath 镜像pull路径，格式为 10.125.0.198:20202/namespace/repository
    *
    * @return $this
    */
    public function setInternalPath($internalPath)
    {
        $this->container['internalPath'] = $internalPath;
        return $this;
    }

    /**
    * Gets domainName
    *  租户名
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 租户名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets namespace
    *  租户的组织名称
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 租户的组织名称
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets tags
    *  镜像版本列表
    *
    * @return string[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[] $tags 镜像版本列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets status
    *  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @return bool
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool $status 查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets totalRange
    *  总记录条数
    *
    * @return int
    */
    public function getTotalRange()
    {
        return $this->container['totalRange'];
    }

    /**
    * Sets totalRange
    *
    * @param int $totalRange 总记录条数
    *
    * @return $this
    */
    public function setTotalRange($totalRange)
    {
        $this->container['totalRange'] = $totalRange;
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

