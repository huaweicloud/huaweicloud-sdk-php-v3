<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepoDomainsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepoDomainsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  组织
    * repository  镜像仓库
    * accessDomain  共享租户名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * status  是否过期：true:有效；false:过期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'repository' => 'string',
            'accessDomain' => 'string',
            'permit' => 'string',
            'deadline' => 'string',
            'description' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'status' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  组织
    * repository  镜像仓库
    * accessDomain  共享租户名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * status  是否过期：true:有效；false:过期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'repository' => null,
        'accessDomain' => null,
        'permit' => null,
        'deadline' => null,
        'description' => null,
        'creatorId' => null,
        'creatorName' => null,
        'created' => null,
        'updated' => null,
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
    * namespace  组织
    * repository  镜像仓库
    * accessDomain  共享租户名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * status  是否过期：true:有效；false:过期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'repository' => 'repository',
            'accessDomain' => 'access_domain',
            'permit' => 'permit',
            'deadline' => 'deadline',
            'description' => 'description',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'created' => 'created',
            'updated' => 'updated',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  组织
    * repository  镜像仓库
    * accessDomain  共享租户名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * status  是否过期：true:有效；false:过期
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'repository' => 'setRepository',
            'accessDomain' => 'setAccessDomain',
            'permit' => 'setPermit',
            'deadline' => 'setDeadline',
            'description' => 'setDescription',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  组织
    * repository  镜像仓库
    * accessDomain  共享租户名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * status  是否过期：true:有效；false:过期
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'repository' => 'getRepository',
            'accessDomain' => 'getAccessDomain',
            'permit' => 'getPermit',
            'deadline' => 'getDeadline',
            'description' => 'getDescription',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
        $this->container['accessDomain'] = isset($data['accessDomain']) ? $data['accessDomain'] : null;
        $this->container['permit'] = isset($data['permit']) ? $data['permit'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
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
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['repository'] === null) {
            $invalidProperties[] = "'repository' can't be null";
        }
        if ($this->container['accessDomain'] === null) {
            $invalidProperties[] = "'accessDomain' can't be null";
        }
        if ($this->container['permit'] === null) {
            $invalidProperties[] = "'permit' can't be null";
        }
        if ($this->container['deadline'] === null) {
            $invalidProperties[] = "'deadline' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['creatorId'] === null) {
            $invalidProperties[] = "'creatorId' can't be null";
        }
        if ($this->container['creatorName'] === null) {
            $invalidProperties[] = "'creatorName' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets namespace
    *  组织
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
    * @param string $namespace 组织
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets repository
    *  镜像仓库
    *
    * @return string
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param string $repository 镜像仓库
    *
    * @return $this
    */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;
        return $this;
    }

    /**
    * Gets accessDomain
    *  共享租户名
    *
    * @return string
    */
    public function getAccessDomain()
    {
        return $this->container['accessDomain'];
    }

    /**
    * Sets accessDomain
    *
    * @param string $accessDomain 共享租户名
    *
    * @return $this
    */
    public function setAccessDomain($accessDomain)
    {
        $this->container['accessDomain'] = $accessDomain;
        return $this;
    }

    /**
    * Gets permit
    *  权限
    *
    * @return string
    */
    public function getPermit()
    {
        return $this->container['permit'];
    }

    /**
    * Sets permit
    *
    * @param string $permit 权限
    *
    * @return $this
    */
    public function setPermit($permit)
    {
        $this->container['permit'] = $permit;
        return $this;
    }

    /**
    * Gets deadline
    *  截止时间
    *
    * @return string
    */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
    * Sets deadline
    *
    * @param string $deadline 截止时间
    *
    * @return $this
    */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string $description 描述
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
    *  创建者ID
    *
    * @return string
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string $creatorId 创建者ID
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
    *  创建者名称
    *
    * @return string
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
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
    * Gets status
    *  是否过期：true:有效；false:过期
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
    * @param bool $status 是否过期：true:有效；false:过期
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

