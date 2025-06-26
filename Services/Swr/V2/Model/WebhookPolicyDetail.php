<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebhookPolicyDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebhookPolicyDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  触发器ID
    * name  触发器策略名称
    * description  触发器策略描述
    * targets  触发目标
    * eventTypes  事件类型
    * enabled  是否使用，可选true或false
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * creator  创建者
    * createdAt  创建时间
    * updatedAt  更新时间
    * scopeRules  触发作用范围规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'description' => 'string',
            'targets' => '\HuaweiCloud\SDK\Swr\V2\Model\Target[]',
            'eventTypes' => 'string[]',
            'enabled' => 'bool',
            'namespaceId' => 'int',
            'namespaceName' => 'string',
            'creator' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'scopeRules' => '\HuaweiCloud\SDK\Swr\V2\Model\ScopeRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  触发器ID
    * name  触发器策略名称
    * description  触发器策略描述
    * targets  触发目标
    * eventTypes  事件类型
    * enabled  是否使用，可选true或false
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * creator  创建者
    * createdAt  创建时间
    * updatedAt  更新时间
    * scopeRules  触发作用范围规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'targets' => null,
        'eventTypes' => null,
        'enabled' => null,
        'namespaceId' => null,
        'namespaceName' => null,
        'creator' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'scopeRules' => null
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
    * id  触发器ID
    * name  触发器策略名称
    * description  触发器策略描述
    * targets  触发目标
    * eventTypes  事件类型
    * enabled  是否使用，可选true或false
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * creator  创建者
    * createdAt  创建时间
    * updatedAt  更新时间
    * scopeRules  触发作用范围规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'targets' => 'targets',
            'eventTypes' => 'event_types',
            'enabled' => 'enabled',
            'namespaceId' => 'namespace_id',
            'namespaceName' => 'namespace_name',
            'creator' => 'creator',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'scopeRules' => 'scope_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  触发器ID
    * name  触发器策略名称
    * description  触发器策略描述
    * targets  触发目标
    * eventTypes  事件类型
    * enabled  是否使用，可选true或false
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * creator  创建者
    * createdAt  创建时间
    * updatedAt  更新时间
    * scopeRules  触发作用范围规则
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'targets' => 'setTargets',
            'eventTypes' => 'setEventTypes',
            'enabled' => 'setEnabled',
            'namespaceId' => 'setNamespaceId',
            'namespaceName' => 'setNamespaceName',
            'creator' => 'setCreator',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'scopeRules' => 'setScopeRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  触发器ID
    * name  触发器策略名称
    * description  触发器策略描述
    * targets  触发目标
    * eventTypes  事件类型
    * enabled  是否使用，可选true或false
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    * creator  创建者
    * createdAt  创建时间
    * updatedAt  更新时间
    * scopeRules  触发作用范围规则
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'targets' => 'getTargets',
            'eventTypes' => 'getEventTypes',
            'enabled' => 'getEnabled',
            'namespaceId' => 'getNamespaceId',
            'namespaceName' => 'getNamespaceName',
            'creator' => 'getCreator',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'scopeRules' => 'getScopeRules'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['eventTypes'] = isset($data['eventTypes']) ? $data['eventTypes'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['scopeRules'] = isset($data['scopeRules']) ? $data['scopeRules'] : null;
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
    *  触发器ID
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
    * @param int|null $id 触发器ID
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
    *  触发器策略名称
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
    * @param string|null $name 触发器策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  触发器策略描述
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
    * @param string|null $description 触发器策略描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets targets
    *  触发目标
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\Target[]|null
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\Target[]|null $targets 触发目标
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
        return $this;
    }

    /**
    * Gets eventTypes
    *  事件类型
    *
    * @return string[]|null
    */
    public function getEventTypes()
    {
        return $this->container['eventTypes'];
    }

    /**
    * Sets eventTypes
    *
    * @param string[]|null $eventTypes 事件类型
    *
    * @return $this
    */
    public function setEventTypes($eventTypes)
    {
        $this->container['eventTypes'] = $eventTypes;
        return $this;
    }

    /**
    * Gets enabled
    *  是否使用，可选true或false
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否使用，可选true或false
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets namespaceId
    *  命名空间ID
    *
    * @return int|null
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param int|null $namespaceId 命名空间ID
    *
    * @return $this
    */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName 命名空间名
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets creator
    *  创建者
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建者
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
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
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets scopeRules
    *  触发作用范围规则
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\ScopeRule[]|null
    */
    public function getScopeRules()
    {
        return $this->container['scopeRules'];
    }

    /**
    * Sets scopeRules
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\ScopeRule[]|null $scopeRules 触发作用范围规则
    *
    * @return $this
    */
    public function setScopeRules($scopeRules)
    {
        $this->container['scopeRules'] = $scopeRules;
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

