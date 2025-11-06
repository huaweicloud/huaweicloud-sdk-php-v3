<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryStatisticsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryStatisticsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commitCount  **参数解释：** 提交数量。 **约束限制：** 不涉及。
    * storageSize  **参数解释：** 存储大小。 **约束限制：** 不涉及。
    * repositorySize  **参数解释：** 仓库大小。 **约束限制：** 不涉及。
    * lfsObjectsSize  **参数解释：** LFS对象大小。 **约束限制：** 不涉及。
    * tenantRepoSizeLimit  **参数解释：** 租户仓库大小限制。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commitCount' => 'int',
            'storageSize' => 'double',
            'repositorySize' => 'double',
            'lfsObjectsSize' => 'double',
            'tenantRepoSizeLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commitCount  **参数解释：** 提交数量。 **约束限制：** 不涉及。
    * storageSize  **参数解释：** 存储大小。 **约束限制：** 不涉及。
    * repositorySize  **参数解释：** 仓库大小。 **约束限制：** 不涉及。
    * lfsObjectsSize  **参数解释：** LFS对象大小。 **约束限制：** 不涉及。
    * tenantRepoSizeLimit  **参数解释：** 租户仓库大小限制。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commitCount' => 'int32',
        'storageSize' => 'double',
        'repositorySize' => 'double',
        'lfsObjectsSize' => 'double',
        'tenantRepoSizeLimit' => 'int64'
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
    * commitCount  **参数解释：** 提交数量。 **约束限制：** 不涉及。
    * storageSize  **参数解释：** 存储大小。 **约束限制：** 不涉及。
    * repositorySize  **参数解释：** 仓库大小。 **约束限制：** 不涉及。
    * lfsObjectsSize  **参数解释：** LFS对象大小。 **约束限制：** 不涉及。
    * tenantRepoSizeLimit  **参数解释：** 租户仓库大小限制。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commitCount' => 'commit_count',
            'storageSize' => 'storage_size',
            'repositorySize' => 'repository_size',
            'lfsObjectsSize' => 'lfs_objects_size',
            'tenantRepoSizeLimit' => 'tenant_repo_size_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commitCount  **参数解释：** 提交数量。 **约束限制：** 不涉及。
    * storageSize  **参数解释：** 存储大小。 **约束限制：** 不涉及。
    * repositorySize  **参数解释：** 仓库大小。 **约束限制：** 不涉及。
    * lfsObjectsSize  **参数解释：** LFS对象大小。 **约束限制：** 不涉及。
    * tenantRepoSizeLimit  **参数解释：** 租户仓库大小限制。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'commitCount' => 'setCommitCount',
            'storageSize' => 'setStorageSize',
            'repositorySize' => 'setRepositorySize',
            'lfsObjectsSize' => 'setLfsObjectsSize',
            'tenantRepoSizeLimit' => 'setTenantRepoSizeLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commitCount  **参数解释：** 提交数量。 **约束限制：** 不涉及。
    * storageSize  **参数解释：** 存储大小。 **约束限制：** 不涉及。
    * repositorySize  **参数解释：** 仓库大小。 **约束限制：** 不涉及。
    * lfsObjectsSize  **参数解释：** LFS对象大小。 **约束限制：** 不涉及。
    * tenantRepoSizeLimit  **参数解释：** 租户仓库大小限制。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'commitCount' => 'getCommitCount',
            'storageSize' => 'getStorageSize',
            'repositorySize' => 'getRepositorySize',
            'lfsObjectsSize' => 'getLfsObjectsSize',
            'tenantRepoSizeLimit' => 'getTenantRepoSizeLimit'
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
        $this->container['commitCount'] = isset($data['commitCount']) ? $data['commitCount'] : null;
        $this->container['storageSize'] = isset($data['storageSize']) ? $data['storageSize'] : null;
        $this->container['repositorySize'] = isset($data['repositorySize']) ? $data['repositorySize'] : null;
        $this->container['lfsObjectsSize'] = isset($data['lfsObjectsSize']) ? $data['lfsObjectsSize'] : null;
        $this->container['tenantRepoSizeLimit'] = isset($data['tenantRepoSizeLimit']) ? $data['tenantRepoSizeLimit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['commitCount']) && ($this->container['commitCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'commitCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['commitCount']) && ($this->container['commitCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'commitCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['storageSize']) && ($this->container['storageSize'] > 1024000.0)) {
                $invalidProperties[] = "invalid value for 'storageSize', must be smaller than or equal to 1024000.0.";
            }
            if (!is_null($this->container['storageSize']) && ($this->container['storageSize'] < 1.0)) {
                $invalidProperties[] = "invalid value for 'storageSize', must be bigger than or equal to 1.0.";
            }
            if (!is_null($this->container['repositorySize']) && ($this->container['repositorySize'] > 1024000.0)) {
                $invalidProperties[] = "invalid value for 'repositorySize', must be smaller than or equal to 1024000.0.";
            }
            if (!is_null($this->container['repositorySize']) && ($this->container['repositorySize'] < 1.0)) {
                $invalidProperties[] = "invalid value for 'repositorySize', must be bigger than or equal to 1.0.";
            }
            if (!is_null($this->container['lfsObjectsSize']) && ($this->container['lfsObjectsSize'] > 1024000.0)) {
                $invalidProperties[] = "invalid value for 'lfsObjectsSize', must be smaller than or equal to 1024000.0.";
            }
            if (!is_null($this->container['lfsObjectsSize']) && ($this->container['lfsObjectsSize'] < 1.0)) {
                $invalidProperties[] = "invalid value for 'lfsObjectsSize', must be bigger than or equal to 1.0.";
            }
            if (!is_null($this->container['tenantRepoSizeLimit']) && ($this->container['tenantRepoSizeLimit'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'tenantRepoSizeLimit', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['tenantRepoSizeLimit']) && ($this->container['tenantRepoSizeLimit'] < 1)) {
                $invalidProperties[] = "invalid value for 'tenantRepoSizeLimit', must be bigger than or equal to 1.";
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
    * Gets commitCount
    *  **参数解释：** 提交数量。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getCommitCount()
    {
        return $this->container['commitCount'];
    }

    /**
    * Sets commitCount
    *
    * @param int|null $commitCount **参数解释：** 提交数量。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setCommitCount($commitCount)
    {
        $this->container['commitCount'] = $commitCount;
        return $this;
    }

    /**
    * Gets storageSize
    *  **参数解释：** 存储大小。 **约束限制：** 不涉及。
    *
    * @return double|null
    */
    public function getStorageSize()
    {
        return $this->container['storageSize'];
    }

    /**
    * Sets storageSize
    *
    * @param double|null $storageSize **参数解释：** 存储大小。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setStorageSize($storageSize)
    {
        $this->container['storageSize'] = $storageSize;
        return $this;
    }

    /**
    * Gets repositorySize
    *  **参数解释：** 仓库大小。 **约束限制：** 不涉及。
    *
    * @return double|null
    */
    public function getRepositorySize()
    {
        return $this->container['repositorySize'];
    }

    /**
    * Sets repositorySize
    *
    * @param double|null $repositorySize **参数解释：** 仓库大小。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositorySize($repositorySize)
    {
        $this->container['repositorySize'] = $repositorySize;
        return $this;
    }

    /**
    * Gets lfsObjectsSize
    *  **参数解释：** LFS对象大小。 **约束限制：** 不涉及。
    *
    * @return double|null
    */
    public function getLfsObjectsSize()
    {
        return $this->container['lfsObjectsSize'];
    }

    /**
    * Sets lfsObjectsSize
    *
    * @param double|null $lfsObjectsSize **参数解释：** LFS对象大小。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setLfsObjectsSize($lfsObjectsSize)
    {
        $this->container['lfsObjectsSize'] = $lfsObjectsSize;
        return $this;
    }

    /**
    * Gets tenantRepoSizeLimit
    *  **参数解释：** 租户仓库大小限制。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getTenantRepoSizeLimit()
    {
        return $this->container['tenantRepoSizeLimit'];
    }

    /**
    * Sets tenantRepoSizeLimit
    *
    * @param int|null $tenantRepoSizeLimit **参数解释：** 租户仓库大小限制。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setTenantRepoSizeLimit($tenantRepoSizeLimit)
    {
        $this->container['tenantRepoSizeLimit'] = $tenantRepoSizeLimit;
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

