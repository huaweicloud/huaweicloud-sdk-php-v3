<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GitRepositoryMetaData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GitRepositoryMetaData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  仓库名称
    * namespace  所属命名空间
    * uid  唯一标识符
    * resourceVersion  资源的内部版本标识，用于并发控制
    * generation  资源的期望状态的代数，每次修改spec会自增
    * creationTimestamp  创建时间
    * finalizers  删除前需要执行的清理操作
    * managedFields  用于跟踪资源字段管理权，记录每个字段的管理者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'namespace' => 'string',
            'uid' => 'string',
            'resourceVersion' => 'string',
            'generation' => 'int',
            'creationTimestamp' => 'string',
            'finalizers' => 'string[]',
            'managedFields' => '\HuaweiCloud\SDK\Ucs\V1\Model\ManagedFieldsEntry[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  仓库名称
    * namespace  所属命名空间
    * uid  唯一标识符
    * resourceVersion  资源的内部版本标识，用于并发控制
    * generation  资源的期望状态的代数，每次修改spec会自增
    * creationTimestamp  创建时间
    * finalizers  删除前需要执行的清理操作
    * managedFields  用于跟踪资源字段管理权，记录每个字段的管理者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'namespace' => null,
        'uid' => null,
        'resourceVersion' => null,
        'generation' => 'int32',
        'creationTimestamp' => null,
        'finalizers' => null,
        'managedFields' => null
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
    * namespace  所属命名空间
    * uid  唯一标识符
    * resourceVersion  资源的内部版本标识，用于并发控制
    * generation  资源的期望状态的代数，每次修改spec会自增
    * creationTimestamp  创建时间
    * finalizers  删除前需要执行的清理操作
    * managedFields  用于跟踪资源字段管理权，记录每个字段的管理者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'namespace' => 'namespace',
            'uid' => 'uid',
            'resourceVersion' => 'resourceVersion',
            'generation' => 'generation',
            'creationTimestamp' => 'creationTimestamp',
            'finalizers' => 'finalizers',
            'managedFields' => 'managedFields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  仓库名称
    * namespace  所属命名空间
    * uid  唯一标识符
    * resourceVersion  资源的内部版本标识，用于并发控制
    * generation  资源的期望状态的代数，每次修改spec会自增
    * creationTimestamp  创建时间
    * finalizers  删除前需要执行的清理操作
    * managedFields  用于跟踪资源字段管理权，记录每个字段的管理者
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'uid' => 'setUid',
            'resourceVersion' => 'setResourceVersion',
            'generation' => 'setGeneration',
            'creationTimestamp' => 'setCreationTimestamp',
            'finalizers' => 'setFinalizers',
            'managedFields' => 'setManagedFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  仓库名称
    * namespace  所属命名空间
    * uid  唯一标识符
    * resourceVersion  资源的内部版本标识，用于并发控制
    * generation  资源的期望状态的代数，每次修改spec会自增
    * creationTimestamp  创建时间
    * finalizers  删除前需要执行的清理操作
    * managedFields  用于跟踪资源字段管理权，记录每个字段的管理者
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'uid' => 'getUid',
            'resourceVersion' => 'getResourceVersion',
            'generation' => 'getGeneration',
            'creationTimestamp' => 'getCreationTimestamp',
            'finalizers' => 'getFinalizers',
            'managedFields' => 'getManagedFields'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['resourceVersion'] = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
        $this->container['generation'] = isset($data['generation']) ? $data['generation'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['finalizers'] = isset($data['finalizers']) ? $data['finalizers'] : null;
        $this->container['managedFields'] = isset($data['managedFields']) ? $data['managedFields'] : null;
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
    * Gets namespace
    *  所属命名空间
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
    * @param string|null $namespace 所属命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets uid
    *  唯一标识符
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 唯一标识符
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets resourceVersion
    *  资源的内部版本标识，用于并发控制
    *
    * @return string|null
    */
    public function getResourceVersion()
    {
        return $this->container['resourceVersion'];
    }

    /**
    * Sets resourceVersion
    *
    * @param string|null $resourceVersion 资源的内部版本标识，用于并发控制
    *
    * @return $this
    */
    public function setResourceVersion($resourceVersion)
    {
        $this->container['resourceVersion'] = $resourceVersion;
        return $this;
    }

    /**
    * Gets generation
    *  资源的期望状态的代数，每次修改spec会自增
    *
    * @return int|null
    */
    public function getGeneration()
    {
        return $this->container['generation'];
    }

    /**
    * Sets generation
    *
    * @param int|null $generation 资源的期望状态的代数，每次修改spec会自增
    *
    * @return $this
    */
    public function setGeneration($generation)
    {
        $this->container['generation'] = $generation;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  创建时间
    *
    * @return string|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param string|null $creationTimestamp 创建时间
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets finalizers
    *  删除前需要执行的清理操作
    *
    * @return string[]|null
    */
    public function getFinalizers()
    {
        return $this->container['finalizers'];
    }

    /**
    * Sets finalizers
    *
    * @param string[]|null $finalizers 删除前需要执行的清理操作
    *
    * @return $this
    */
    public function setFinalizers($finalizers)
    {
        $this->container['finalizers'] = $finalizers;
        return $this;
    }

    /**
    * Gets managedFields
    *  用于跟踪资源字段管理权，记录每个字段的管理者
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ManagedFieldsEntry[]|null
    */
    public function getManagedFields()
    {
        return $this->container['managedFields'];
    }

    /**
    * Sets managedFields
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ManagedFieldsEntry[]|null $managedFields 用于跟踪资源字段管理权，记录每个字段的管理者
    *
    * @return $this
    */
    public function setManagedFields($managedFields)
    {
        $this->container['managedFields'] = $managedFields;
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

