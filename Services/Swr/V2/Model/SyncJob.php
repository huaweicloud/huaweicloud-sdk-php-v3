<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  租户ID
    * domainName  租户名
    * id  ID
    * namespace  组织名
    * override  是否覆盖
    * remoteNamespace  目的组织
    * remoteRegionId  目的region
    * repoName  仓库名
    * status  同步状态,waiting、running、success、failed、timeout、cancel、existed
    * syncOperatorId  操作用户ID
    * syncOperatorName  操作用户名
    * tag  镜像版本
    * updatedAt  updatedAt
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'id' => 'int',
            'namespace' => 'string',
            'override' => 'bool',
            'remoteNamespace' => 'string',
            'remoteRegionId' => 'string',
            'repoName' => 'string',
            'status' => 'string',
            'syncOperatorId' => 'string',
            'syncOperatorName' => 'string',
            'tag' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  租户ID
    * domainName  租户名
    * id  ID
    * namespace  组织名
    * override  是否覆盖
    * remoteNamespace  目的组织
    * remoteRegionId  目的region
    * repoName  仓库名
    * status  同步状态,waiting、running、success、failed、timeout、cancel、existed
    * syncOperatorId  操作用户ID
    * syncOperatorName  操作用户名
    * tag  镜像版本
    * updatedAt  updatedAt
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'domainId' => null,
        'domainName' => null,
        'id' => 'int32',
        'namespace' => null,
        'override' => null,
        'remoteNamespace' => null,
        'remoteRegionId' => null,
        'repoName' => null,
        'status' => null,
        'syncOperatorId' => null,
        'syncOperatorName' => null,
        'tag' => null,
        'updatedAt' => null
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
    * createdAt  创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  租户ID
    * domainName  租户名
    * id  ID
    * namespace  组织名
    * override  是否覆盖
    * remoteNamespace  目的组织
    * remoteRegionId  目的region
    * repoName  仓库名
    * status  同步状态,waiting、running、success、failed、timeout、cancel、existed
    * syncOperatorId  操作用户ID
    * syncOperatorName  操作用户名
    * tag  镜像版本
    * updatedAt  updatedAt
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'createdAt',
            'domainId' => 'domainID',
            'domainName' => 'domainName',
            'id' => 'id',
            'namespace' => 'namespace',
            'override' => 'override',
            'remoteNamespace' => 'remoteNamespace',
            'remoteRegionId' => 'remoteRegionId',
            'repoName' => 'repoName',
            'status' => 'status',
            'syncOperatorId' => 'syncOperatorId',
            'syncOperatorName' => 'syncOperatorName',
            'tag' => 'tag',
            'updatedAt' => 'updatedAt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  租户ID
    * domainName  租户名
    * id  ID
    * namespace  组织名
    * override  是否覆盖
    * remoteNamespace  目的组织
    * remoteRegionId  目的region
    * repoName  仓库名
    * status  同步状态,waiting、running、success、failed、timeout、cancel、existed
    * syncOperatorId  操作用户ID
    * syncOperatorName  操作用户名
    * tag  镜像版本
    * updatedAt  updatedAt
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'id' => 'setId',
            'namespace' => 'setNamespace',
            'override' => 'setOverride',
            'remoteNamespace' => 'setRemoteNamespace',
            'remoteRegionId' => 'setRemoteRegionId',
            'repoName' => 'setRepoName',
            'status' => 'setStatus',
            'syncOperatorId' => 'setSyncOperatorId',
            'syncOperatorName' => 'setSyncOperatorName',
            'tag' => 'setTag',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    * domainId  租户ID
    * domainName  租户名
    * id  ID
    * namespace  组织名
    * override  是否覆盖
    * remoteNamespace  目的组织
    * remoteRegionId  目的region
    * repoName  仓库名
    * status  同步状态,waiting、running、success、failed、timeout、cancel、existed
    * syncOperatorId  操作用户ID
    * syncOperatorName  操作用户名
    * tag  镜像版本
    * updatedAt  updatedAt
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'id' => 'getId',
            'namespace' => 'getNamespace',
            'override' => 'getOverride',
            'remoteNamespace' => 'getRemoteNamespace',
            'remoteRegionId' => 'getRemoteRegionId',
            'repoName' => 'getRepoName',
            'status' => 'getStatus',
            'syncOperatorId' => 'getSyncOperatorId',
            'syncOperatorName' => 'getSyncOperatorName',
            'tag' => 'getTag',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['override'] = isset($data['override']) ? $data['override'] : null;
        $this->container['remoteNamespace'] = isset($data['remoteNamespace']) ? $data['remoteNamespace'] : null;
        $this->container['remoteRegionId'] = isset($data['remoteRegionId']) ? $data['remoteRegionId'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['syncOperatorId'] = isset($data['syncOperatorId']) ? $data['syncOperatorId'] : null;
        $this->container['syncOperatorName'] = isset($data['syncOperatorName']) ? $data['syncOperatorName'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['override'] === null) {
            $invalidProperties[] = "'override' can't be null";
        }
        if ($this->container['remoteNamespace'] === null) {
            $invalidProperties[] = "'remoteNamespace' can't be null";
        }
        if ($this->container['remoteRegionId'] === null) {
            $invalidProperties[] = "'remoteRegionId' can't be null";
        }
        if ($this->container['repoName'] === null) {
            $invalidProperties[] = "'repoName' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['syncOperatorId'] === null) {
            $invalidProperties[] = "'syncOperatorId' can't be null";
        }
        if ($this->container['syncOperatorName'] === null) {
            $invalidProperties[] = "'syncOperatorName' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    * Gets createdAt
    *  创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
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
    * @param string $createdAt 创建时间，UTC日期格式，时间为UTC标准时间，用户需要根据本地时间计算偏移量；如东8区需要+8:00
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
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
    * @param string $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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
    * Gets id
    *  ID
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
    * @param int $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets namespace
    *  组织名
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
    * @param string $namespace 组织名
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets override
    *  是否覆盖
    *
    * @return bool
    */
    public function getOverride()
    {
        return $this->container['override'];
    }

    /**
    * Sets override
    *
    * @param bool $override 是否覆盖
    *
    * @return $this
    */
    public function setOverride($override)
    {
        $this->container['override'] = $override;
        return $this;
    }

    /**
    * Gets remoteNamespace
    *  目的组织
    *
    * @return string
    */
    public function getRemoteNamespace()
    {
        return $this->container['remoteNamespace'];
    }

    /**
    * Sets remoteNamespace
    *
    * @param string $remoteNamespace 目的组织
    *
    * @return $this
    */
    public function setRemoteNamespace($remoteNamespace)
    {
        $this->container['remoteNamespace'] = $remoteNamespace;
        return $this;
    }

    /**
    * Gets remoteRegionId
    *  目的region
    *
    * @return string
    */
    public function getRemoteRegionId()
    {
        return $this->container['remoteRegionId'];
    }

    /**
    * Sets remoteRegionId
    *
    * @param string $remoteRegionId 目的region
    *
    * @return $this
    */
    public function setRemoteRegionId($remoteRegionId)
    {
        $this->container['remoteRegionId'] = $remoteRegionId;
        return $this;
    }

    /**
    * Gets repoName
    *  仓库名
    *
    * @return string
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string $repoName 仓库名
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets status
    *  同步状态,waiting、running、success、failed、timeout、cancel、existed
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 同步状态,waiting、running、success、failed、timeout、cancel、existed
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets syncOperatorId
    *  操作用户ID
    *
    * @return string
    */
    public function getSyncOperatorId()
    {
        return $this->container['syncOperatorId'];
    }

    /**
    * Sets syncOperatorId
    *
    * @param string $syncOperatorId 操作用户ID
    *
    * @return $this
    */
    public function setSyncOperatorId($syncOperatorId)
    {
        $this->container['syncOperatorId'] = $syncOperatorId;
        return $this;
    }

    /**
    * Gets syncOperatorName
    *  操作用户名
    *
    * @return string
    */
    public function getSyncOperatorName()
    {
        return $this->container['syncOperatorName'];
    }

    /**
    * Sets syncOperatorName
    *
    * @param string $syncOperatorName 操作用户名
    *
    * @return $this
    */
    public function setSyncOperatorName($syncOperatorName)
    {
        $this->container['syncOperatorName'] = $syncOperatorName;
        return $this;
    }

    /**
    * Gets tag
    *  镜像版本
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
    * @param string $tag 镜像版本
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets updatedAt
    *  updatedAt
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
    * @param string $updatedAt updatedAt
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

