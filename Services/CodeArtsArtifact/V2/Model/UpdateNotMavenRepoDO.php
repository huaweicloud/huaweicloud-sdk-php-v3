<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNotMavenRepoDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNotMavenRepoDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoName  仓库名称
    * format  仓库格式
    * description  仓库描述
    * repositoryIds  仓库id列表
    * includesPattern  路径白名单
    * deploymentPolicy  仓库属性-覆盖策略
    * autoCleanSnapshot  自动清理快照
    * snapshotAliveDays  快照保存时间长度
    * maxUniqueSnapshots  最大不同快照个数
    * allowAnonymous  是否允许匿名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoName' => 'string',
            'format' => 'string',
            'description' => 'string',
            'repositoryIds' => 'string[]',
            'includesPattern' => 'string',
            'deploymentPolicy' => 'string',
            'autoCleanSnapshot' => 'bool',
            'snapshotAliveDays' => 'string',
            'maxUniqueSnapshots' => 'string',
            'allowAnonymous' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoName  仓库名称
    * format  仓库格式
    * description  仓库描述
    * repositoryIds  仓库id列表
    * includesPattern  路径白名单
    * deploymentPolicy  仓库属性-覆盖策略
    * autoCleanSnapshot  自动清理快照
    * snapshotAliveDays  快照保存时间长度
    * maxUniqueSnapshots  最大不同快照个数
    * allowAnonymous  是否允许匿名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoName' => null,
        'format' => null,
        'description' => null,
        'repositoryIds' => null,
        'includesPattern' => null,
        'deploymentPolicy' => null,
        'autoCleanSnapshot' => null,
        'snapshotAliveDays' => null,
        'maxUniqueSnapshots' => null,
        'allowAnonymous' => null
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
    * repoName  仓库名称
    * format  仓库格式
    * description  仓库描述
    * repositoryIds  仓库id列表
    * includesPattern  路径白名单
    * deploymentPolicy  仓库属性-覆盖策略
    * autoCleanSnapshot  自动清理快照
    * snapshotAliveDays  快照保存时间长度
    * maxUniqueSnapshots  最大不同快照个数
    * allowAnonymous  是否允许匿名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoName' => 'repo_name',
            'format' => 'format',
            'description' => 'description',
            'repositoryIds' => 'repository_ids',
            'includesPattern' => 'includes_pattern',
            'deploymentPolicy' => 'deployment_policy',
            'autoCleanSnapshot' => 'auto_clean_snapshot',
            'snapshotAliveDays' => 'snapshot_alive_days',
            'maxUniqueSnapshots' => 'max_unique_snapshots',
            'allowAnonymous' => 'allow_anonymous'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoName  仓库名称
    * format  仓库格式
    * description  仓库描述
    * repositoryIds  仓库id列表
    * includesPattern  路径白名单
    * deploymentPolicy  仓库属性-覆盖策略
    * autoCleanSnapshot  自动清理快照
    * snapshotAliveDays  快照保存时间长度
    * maxUniqueSnapshots  最大不同快照个数
    * allowAnonymous  是否允许匿名
    *
    * @var string[]
    */
    protected static $setters = [
            'repoName' => 'setRepoName',
            'format' => 'setFormat',
            'description' => 'setDescription',
            'repositoryIds' => 'setRepositoryIds',
            'includesPattern' => 'setIncludesPattern',
            'deploymentPolicy' => 'setDeploymentPolicy',
            'autoCleanSnapshot' => 'setAutoCleanSnapshot',
            'snapshotAliveDays' => 'setSnapshotAliveDays',
            'maxUniqueSnapshots' => 'setMaxUniqueSnapshots',
            'allowAnonymous' => 'setAllowAnonymous'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoName  仓库名称
    * format  仓库格式
    * description  仓库描述
    * repositoryIds  仓库id列表
    * includesPattern  路径白名单
    * deploymentPolicy  仓库属性-覆盖策略
    * autoCleanSnapshot  自动清理快照
    * snapshotAliveDays  快照保存时间长度
    * maxUniqueSnapshots  最大不同快照个数
    * allowAnonymous  是否允许匿名
    *
    * @var string[]
    */
    protected static $getters = [
            'repoName' => 'getRepoName',
            'format' => 'getFormat',
            'description' => 'getDescription',
            'repositoryIds' => 'getRepositoryIds',
            'includesPattern' => 'getIncludesPattern',
            'deploymentPolicy' => 'getDeploymentPolicy',
            'autoCleanSnapshot' => 'getAutoCleanSnapshot',
            'snapshotAliveDays' => 'getSnapshotAliveDays',
            'maxUniqueSnapshots' => 'getMaxUniqueSnapshots',
            'allowAnonymous' => 'getAllowAnonymous'
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
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['repositoryIds'] = isset($data['repositoryIds']) ? $data['repositoryIds'] : null;
        $this->container['includesPattern'] = isset($data['includesPattern']) ? $data['includesPattern'] : null;
        $this->container['deploymentPolicy'] = isset($data['deploymentPolicy']) ? $data['deploymentPolicy'] : null;
        $this->container['autoCleanSnapshot'] = isset($data['autoCleanSnapshot']) ? $data['autoCleanSnapshot'] : null;
        $this->container['snapshotAliveDays'] = isset($data['snapshotAliveDays']) ? $data['snapshotAliveDays'] : null;
        $this->container['maxUniqueSnapshots'] = isset($data['maxUniqueSnapshots']) ? $data['maxUniqueSnapshots'] : null;
        $this->container['allowAnonymous'] = isset($data['allowAnonymous']) ? $data['allowAnonymous'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repoName'] === null) {
            $invalidProperties[] = "'repoName' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['repositoryIds'] === null) {
            $invalidProperties[] = "'repositoryIds' can't be null";
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
    * Gets repoName
    *  仓库名称
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
    * @param string $repoName 仓库名称
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets format
    *  仓库格式
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 仓库格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets description
    *  仓库描述
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
    * @param string|null $description 仓库描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets repositoryIds
    *  仓库id列表
    *
    * @return string[]
    */
    public function getRepositoryIds()
    {
        return $this->container['repositoryIds'];
    }

    /**
    * Sets repositoryIds
    *
    * @param string[] $repositoryIds 仓库id列表
    *
    * @return $this
    */
    public function setRepositoryIds($repositoryIds)
    {
        $this->container['repositoryIds'] = $repositoryIds;
        return $this;
    }

    /**
    * Gets includesPattern
    *  路径白名单
    *
    * @return string|null
    */
    public function getIncludesPattern()
    {
        return $this->container['includesPattern'];
    }

    /**
    * Sets includesPattern
    *
    * @param string|null $includesPattern 路径白名单
    *
    * @return $this
    */
    public function setIncludesPattern($includesPattern)
    {
        $this->container['includesPattern'] = $includesPattern;
        return $this;
    }

    /**
    * Gets deploymentPolicy
    *  仓库属性-覆盖策略
    *
    * @return string|null
    */
    public function getDeploymentPolicy()
    {
        return $this->container['deploymentPolicy'];
    }

    /**
    * Sets deploymentPolicy
    *
    * @param string|null $deploymentPolicy 仓库属性-覆盖策略
    *
    * @return $this
    */
    public function setDeploymentPolicy($deploymentPolicy)
    {
        $this->container['deploymentPolicy'] = $deploymentPolicy;
        return $this;
    }

    /**
    * Gets autoCleanSnapshot
    *  自动清理快照
    *
    * @return bool|null
    */
    public function getAutoCleanSnapshot()
    {
        return $this->container['autoCleanSnapshot'];
    }

    /**
    * Sets autoCleanSnapshot
    *
    * @param bool|null $autoCleanSnapshot 自动清理快照
    *
    * @return $this
    */
    public function setAutoCleanSnapshot($autoCleanSnapshot)
    {
        $this->container['autoCleanSnapshot'] = $autoCleanSnapshot;
        return $this;
    }

    /**
    * Gets snapshotAliveDays
    *  快照保存时间长度
    *
    * @return string|null
    */
    public function getSnapshotAliveDays()
    {
        return $this->container['snapshotAliveDays'];
    }

    /**
    * Sets snapshotAliveDays
    *
    * @param string|null $snapshotAliveDays 快照保存时间长度
    *
    * @return $this
    */
    public function setSnapshotAliveDays($snapshotAliveDays)
    {
        $this->container['snapshotAliveDays'] = $snapshotAliveDays;
        return $this;
    }

    /**
    * Gets maxUniqueSnapshots
    *  最大不同快照个数
    *
    * @return string|null
    */
    public function getMaxUniqueSnapshots()
    {
        return $this->container['maxUniqueSnapshots'];
    }

    /**
    * Sets maxUniqueSnapshots
    *
    * @param string|null $maxUniqueSnapshots 最大不同快照个数
    *
    * @return $this
    */
    public function setMaxUniqueSnapshots($maxUniqueSnapshots)
    {
        $this->container['maxUniqueSnapshots'] = $maxUniqueSnapshots;
        return $this;
    }

    /**
    * Gets allowAnonymous
    *  是否允许匿名
    *
    * @return bool|null
    */
    public function getAllowAnonymous()
    {
        return $this->container['allowAnonymous'];
    }

    /**
    * Sets allowAnonymous
    *
    * @param bool|null $allowAnonymous 是否允许匿名
    *
    * @return $this
    */
    public function setAllowAnonymous($allowAnonymous)
    {
        $this->container['allowAnonymous'] = $allowAnonymous;
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

