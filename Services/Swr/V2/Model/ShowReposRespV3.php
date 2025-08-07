<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReposRespV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReposRespV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  仓库ID
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainName  仓库所属租户
    * namespaceName  租户的组织名称
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'category' => 'string',
            'description' => 'string',
            'size' => 'int',
            'isPublic' => 'bool',
            'numImages' => 'int',
            'numDownload' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'domainName' => 'string',
            'namespaceName' => 'string',
            'status' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  仓库ID
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainName  仓库所属租户
    * namespaceName  租户的组织名称
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'category' => null,
        'description' => null,
        'size' => 'int64',
        'isPublic' => null,
        'numImages' => 'int64',
        'numDownload' => 'int64',
        'createdAt' => null,
        'updatedAt' => null,
        'domainName' => null,
        'namespaceName' => null,
        'status' => null
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
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainName  仓库所属租户
    * namespaceName  租户的组织名称
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'category' => 'category',
            'description' => 'description',
            'size' => 'size',
            'isPublic' => 'is_public',
            'numImages' => 'num_images',
            'numDownload' => 'num_download',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'domainName' => 'domain_name',
            'namespaceName' => 'namespace_name',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  仓库ID
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainName  仓库所属租户
    * namespaceName  租户的组织名称
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'size' => 'setSize',
            'isPublic' => 'setIsPublic',
            'numImages' => 'setNumImages',
            'numDownload' => 'setNumDownload',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'domainName' => 'setDomainName',
            'namespaceName' => 'setNamespaceName',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  仓库ID
    * name  仓库名称
    * category  仓库类型（计划改造，每个镜像会有多个lable标示）
    * description  仓库描述信息
    * size  仓库大小
    * isPublic  仓库是否为公共仓库，值为true或false
    * numImages  仓库中镜像个数，0 ~ 9223372036854775807
    * numDownload  仓库下载次数
    * createdAt  仓库创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updatedAt  仓库更新时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainName  仓库所属租户
    * namespaceName  租户的组织名称
    * status  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'size' => 'getSize',
            'isPublic' => 'getIsPublic',
            'numImages' => 'getNumImages',
            'numDownload' => 'getNumDownload',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'domainName' => 'getDomainName',
            'namespaceName' => 'getNamespaceName',
            'status' => 'getStatus'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['numImages'] = isset($data['numImages']) ? $data['numImages'] : null;
        $this->container['numDownload'] = isset($data['numDownload']) ? $data['numDownload'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['namespaceName'] === null) {
            $invalidProperties[] = "'namespaceName' can't be null";
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
    *  仓库ID
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
    * @param int $id 仓库ID
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
    * Gets domainName
    *  仓库所属租户
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
    * @param string $domainName 仓库所属租户
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets namespaceName
    *  租户的组织名称
    *
    * @return string
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string $namespaceName 租户的组织名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets status
    *  查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @return bool|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool|null $status 查询他人共享镜像：共享是否过期 查询我共享的镜像：默认为false,无意义
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

