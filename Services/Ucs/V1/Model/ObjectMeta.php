<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  资源ID
    * name  资源名称
    * generateName  当未提供name时，服务器使用的前缀来生成唯一名称
    * namespace  命名空间
    * labels  标签
    * annotations  注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    * resourceVersion  资源内部版本
    * generation  资源期望状态的代数
    * managedFields  记录哪些字段由哪些工作流管理
    * ownerReferences  用于定义对象间所有权关系，管理对象的依赖关系和垃圾回收机制，支持控制器对资源的管理
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'name' => 'string',
            'generateName' => 'string',
            'namespace' => 'string',
            'labels' => 'map[string,string]',
            'annotations' => 'map[string,string]',
            'creationTimestamp' => 'string',
            'updateTimestamp' => 'string',
            'resourceVersion' => 'string',
            'generation' => 'string',
            'managedFields' => '\HuaweiCloud\SDK\Ucs\V1\Model\ManagedFieldsEntry[]',
            'ownerReferences' => '\HuaweiCloud\SDK\Ucs\V1\Model\OwnerReference[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  资源ID
    * name  资源名称
    * generateName  当未提供name时，服务器使用的前缀来生成唯一名称
    * namespace  命名空间
    * labels  标签
    * annotations  注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    * resourceVersion  资源内部版本
    * generation  资源期望状态的代数
    * managedFields  记录哪些字段由哪些工作流管理
    * ownerReferences  用于定义对象间所有权关系，管理对象的依赖关系和垃圾回收机制，支持控制器对资源的管理
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'name' => null,
        'generateName' => null,
        'namespace' => null,
        'labels' => null,
        'annotations' => null,
        'creationTimestamp' => null,
        'updateTimestamp' => null,
        'resourceVersion' => null,
        'generation' => null,
        'managedFields' => null,
        'ownerReferences' => null
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
    * uid  资源ID
    * name  资源名称
    * generateName  当未提供name时，服务器使用的前缀来生成唯一名称
    * namespace  命名空间
    * labels  标签
    * annotations  注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    * resourceVersion  资源内部版本
    * generation  资源期望状态的代数
    * managedFields  记录哪些字段由哪些工作流管理
    * ownerReferences  用于定义对象间所有权关系，管理对象的依赖关系和垃圾回收机制，支持控制器对资源的管理
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'name' => 'name',
            'generateName' => 'generateName',
            'namespace' => 'namespace',
            'labels' => 'labels',
            'annotations' => 'annotations',
            'creationTimestamp' => 'creationTimestamp',
            'updateTimestamp' => 'updateTimestamp',
            'resourceVersion' => 'resourceVersion',
            'generation' => 'generation',
            'managedFields' => 'managedFields',
            'ownerReferences' => 'ownerReferences'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  资源ID
    * name  资源名称
    * generateName  当未提供name时，服务器使用的前缀来生成唯一名称
    * namespace  命名空间
    * labels  标签
    * annotations  注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    * resourceVersion  资源内部版本
    * generation  资源期望状态的代数
    * managedFields  记录哪些字段由哪些工作流管理
    * ownerReferences  用于定义对象间所有权关系，管理对象的依赖关系和垃圾回收机制，支持控制器对资源的管理
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'name' => 'setName',
            'generateName' => 'setGenerateName',
            'namespace' => 'setNamespace',
            'labels' => 'setLabels',
            'annotations' => 'setAnnotations',
            'creationTimestamp' => 'setCreationTimestamp',
            'updateTimestamp' => 'setUpdateTimestamp',
            'resourceVersion' => 'setResourceVersion',
            'generation' => 'setGeneration',
            'managedFields' => 'setManagedFields',
            'ownerReferences' => 'setOwnerReferences'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  资源ID
    * name  资源名称
    * generateName  当未提供name时，服务器使用的前缀来生成唯一名称
    * namespace  命名空间
    * labels  标签
    * annotations  注解
    * creationTimestamp  创建时间
    * updateTimestamp  更新时间
    * resourceVersion  资源内部版本
    * generation  资源期望状态的代数
    * managedFields  记录哪些字段由哪些工作流管理
    * ownerReferences  用于定义对象间所有权关系，管理对象的依赖关系和垃圾回收机制，支持控制器对资源的管理
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'name' => 'getName',
            'generateName' => 'getGenerateName',
            'namespace' => 'getNamespace',
            'labels' => 'getLabels',
            'annotations' => 'getAnnotations',
            'creationTimestamp' => 'getCreationTimestamp',
            'updateTimestamp' => 'getUpdateTimestamp',
            'resourceVersion' => 'getResourceVersion',
            'generation' => 'getGeneration',
            'managedFields' => 'getManagedFields',
            'ownerReferences' => 'getOwnerReferences'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['generateName'] = isset($data['generateName']) ? $data['generateName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
        $this->container['resourceVersion'] = isset($data['resourceVersion']) ? $data['resourceVersion'] : null;
        $this->container['generation'] = isset($data['generation']) ? $data['generation'] : null;
        $this->container['managedFields'] = isset($data['managedFields']) ? $data['managedFields'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
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
    * Gets uid
    *  资源ID
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
    * @param string|null $uid 资源ID
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets name
    *  资源名称
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
    * @param string|null $name 资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets generateName
    *  当未提供name时，服务器使用的前缀来生成唯一名称
    *
    * @return string|null
    */
    public function getGenerateName()
    {
        return $this->container['generateName'];
    }

    /**
    * Sets generateName
    *
    * @param string|null $generateName 当未提供name时，服务器使用的前缀来生成唯一名称
    *
    * @return $this
    */
    public function setGenerateName($generateName)
    {
        $this->container['generateName'] = $generateName;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
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
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets labels
    *  标签
    *
    * @return map[string,string]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,string]|null $labels 标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets annotations
    *  注解
    *
    * @return map[string,string]|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param map[string,string]|null $annotations 注解
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
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
    * Gets updateTimestamp
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param string|null $updateTimestamp 更新时间
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
        return $this;
    }

    /**
    * Gets resourceVersion
    *  资源内部版本
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
    * @param string|null $resourceVersion 资源内部版本
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
    *  资源期望状态的代数
    *
    * @return string|null
    */
    public function getGeneration()
    {
        return $this->container['generation'];
    }

    /**
    * Sets generation
    *
    * @param string|null $generation 资源期望状态的代数
    *
    * @return $this
    */
    public function setGeneration($generation)
    {
        $this->container['generation'] = $generation;
        return $this;
    }

    /**
    * Gets managedFields
    *  记录哪些字段由哪些工作流管理
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
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ManagedFieldsEntry[]|null $managedFields 记录哪些字段由哪些工作流管理
    *
    * @return $this
    */
    public function setManagedFields($managedFields)
    {
        $this->container['managedFields'] = $managedFields;
        return $this;
    }

    /**
    * Gets ownerReferences
    *  用于定义对象间所有权关系，管理对象的依赖关系和垃圾回收机制，支持控制器对资源的管理
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\OwnerReference[]|null
    */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
    * Sets ownerReferences
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\OwnerReference[]|null $ownerReferences 用于定义对象间所有权关系，管理对象的依赖关系和垃圾回收机制，支持控制器对资源的管理
    *
    * @return $this
    */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;
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

