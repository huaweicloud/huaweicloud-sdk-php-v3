<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAccessDomainResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAccessDomainResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exist  true：存在；false：不存在
    * namespace  组织名称
    * repository  镜像仓库名称
    * accessDomain  共享帐号名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间
    * status  是否过期，true：有效；false：过期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exist' => 'bool',
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
    * exist  true：存在；false：不存在
    * namespace  组织名称
    * repository  镜像仓库名称
    * accessDomain  共享帐号名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间
    * status  是否过期，true：有效；false：过期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exist' => null,
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
    * exist  true：存在；false：不存在
    * namespace  组织名称
    * repository  镜像仓库名称
    * accessDomain  共享帐号名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间
    * status  是否过期，true：有效；false：过期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exist' => 'exist',
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
    * exist  true：存在；false：不存在
    * namespace  组织名称
    * repository  镜像仓库名称
    * accessDomain  共享帐号名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间
    * status  是否过期，true：有效；false：过期
    *
    * @var string[]
    */
    protected static $setters = [
            'exist' => 'setExist',
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
    * exist  true：存在；false：不存在
    * namespace  组织名称
    * repository  镜像仓库名称
    * accessDomain  共享帐号名
    * permit  权限
    * deadline  截止时间
    * description  描述
    * creatorId  创建者ID
    * creatorName  创建者名称
    * created  镜像创建时间，UTC时间格式，时间为UTC标准时间
    * updated  镜像更新时间，UTC时间格式，时间为UTC标准时间
    * status  是否过期，true：有效；false：过期
    *
    * @var string[]
    */
    protected static $getters = [
            'exist' => 'getExist',
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
        $this->container['exist'] = isset($data['exist']) ? $data['exist'] : null;
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
    * Gets exist
    *  true：存在；false：不存在
    *
    * @return bool|null
    */
    public function getExist()
    {
        return $this->container['exist'];
    }

    /**
    * Sets exist
    *
    * @param bool|null $exist true：存在；false：不存在
    *
    * @return $this
    */
    public function setExist($exist)
    {
        $this->container['exist'] = $exist;
        return $this;
    }

    /**
    * Gets namespace
    *  组织名称
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 组织名称
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
    *  镜像仓库名称
    *
    * @return string|null
    */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
    * Sets repository
    *
    * @param string|null $repository 镜像仓库名称
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
    *  共享帐号名
    *
    * @return string|null
    */
    public function getAccessDomain()
    {
        return $this->container['accessDomain'];
    }

    /**
    * Sets accessDomain
    *
    * @param string|null $accessDomain 共享帐号名
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
    * @return string|null
    */
    public function getPermit()
    {
        return $this->container['permit'];
    }

    /**
    * Sets permit
    *
    * @param string|null $permit 权限
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
    * @return string|null
    */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
    * Sets deadline
    *
    * @param string|null $deadline 截止时间
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
    * Gets creatorId
    *  创建者ID
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
    * @param string|null $creatorId 创建者ID
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
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者名称
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
    *  镜像创建时间，UTC时间格式，时间为UTC标准时间
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
    * @param string|null $created 镜像创建时间，UTC时间格式，时间为UTC标准时间
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
    *  镜像更新时间，UTC时间格式，时间为UTC标准时间
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
    * @param string|null $updated 镜像更新时间，UTC时间格式，时间为UTC标准时间
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
    *  是否过期，true：有效；false：过期
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
    * @param bool|null $status 是否过期，true：有效；false：过期
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

