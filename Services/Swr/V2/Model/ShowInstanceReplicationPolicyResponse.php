<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceReplicationPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceReplicationPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  策略ID
    * name  策略名称
    * description  策略描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  源资源过滤器
    * repoScopeMode  repo过滤类型
    * trigger  trigger
    * override  是否覆盖
    * enabled  是否启用
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'description' => 'string',
            'srcRegistry' => '\HuaweiCloud\SDK\Swr\V2\Model\ReplicationRegistry',
            'destRegistry' => '\HuaweiCloud\SDK\Swr\V2\Model\ReplicationRegistry',
            'destNamespace' => 'string',
            'filters' => '\HuaweiCloud\SDK\Swr\V2\Model\Filter[]',
            'repoScopeMode' => 'string',
            'trigger' => '\HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig',
            'override' => 'bool',
            'enabled' => 'bool',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  策略ID
    * name  策略名称
    * description  策略描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  源资源过滤器
    * repoScopeMode  repo过滤类型
    * trigger  trigger
    * override  是否覆盖
    * enabled  是否启用
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'srcRegistry' => null,
        'destRegistry' => null,
        'destNamespace' => null,
        'filters' => null,
        'repoScopeMode' => null,
        'trigger' => null,
        'override' => null,
        'enabled' => null,
        'createdAt' => null,
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
    * id  策略ID
    * name  策略名称
    * description  策略描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  源资源过滤器
    * repoScopeMode  repo过滤类型
    * trigger  trigger
    * override  是否覆盖
    * enabled  是否启用
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'srcRegistry' => 'src_registry',
            'destRegistry' => 'dest_registry',
            'destNamespace' => 'dest_namespace',
            'filters' => 'filters',
            'repoScopeMode' => 'repo_scope_mode',
            'trigger' => 'trigger',
            'override' => 'override',
            'enabled' => 'enabled',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  策略ID
    * name  策略名称
    * description  策略描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  源资源过滤器
    * repoScopeMode  repo过滤类型
    * trigger  trigger
    * override  是否覆盖
    * enabled  是否启用
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'srcRegistry' => 'setSrcRegistry',
            'destRegistry' => 'setDestRegistry',
            'destNamespace' => 'setDestNamespace',
            'filters' => 'setFilters',
            'repoScopeMode' => 'setRepoScopeMode',
            'trigger' => 'setTrigger',
            'override' => 'setOverride',
            'enabled' => 'setEnabled',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  策略ID
    * name  策略名称
    * description  策略描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  源资源过滤器
    * repoScopeMode  repo过滤类型
    * trigger  trigger
    * override  是否覆盖
    * enabled  是否启用
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'srcRegistry' => 'getSrcRegistry',
            'destRegistry' => 'getDestRegistry',
            'destNamespace' => 'getDestNamespace',
            'filters' => 'getFilters',
            'repoScopeMode' => 'getRepoScopeMode',
            'trigger' => 'getTrigger',
            'override' => 'getOverride',
            'enabled' => 'getEnabled',
            'createdAt' => 'getCreatedAt',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['srcRegistry'] = isset($data['srcRegistry']) ? $data['srcRegistry'] : null;
        $this->container['destRegistry'] = isset($data['destRegistry']) ? $data['destRegistry'] : null;
        $this->container['destNamespace'] = isset($data['destNamespace']) ? $data['destNamespace'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['repoScopeMode'] = isset($data['repoScopeMode']) ? $data['repoScopeMode'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['override'] = isset($data['override']) ? $data['override'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
    *  策略ID
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
    * @param int|null $id 策略ID
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
    *  策略名称
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
    * @param string|null $name 策略名称
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
    *  策略描述
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
    * @param string|null $description 策略描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets srcRegistry
    *  srcRegistry
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\ReplicationRegistry|null
    */
    public function getSrcRegistry()
    {
        return $this->container['srcRegistry'];
    }

    /**
    * Sets srcRegistry
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\ReplicationRegistry|null $srcRegistry srcRegistry
    *
    * @return $this
    */
    public function setSrcRegistry($srcRegistry)
    {
        $this->container['srcRegistry'] = $srcRegistry;
        return $this;
    }

    /**
    * Gets destRegistry
    *  destRegistry
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\ReplicationRegistry|null
    */
    public function getDestRegistry()
    {
        return $this->container['destRegistry'];
    }

    /**
    * Sets destRegistry
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\ReplicationRegistry|null $destRegistry destRegistry
    *
    * @return $this
    */
    public function setDestRegistry($destRegistry)
    {
        $this->container['destRegistry'] = $destRegistry;
        return $this;
    }

    /**
    * Gets destNamespace
    *  目标命名空间名，默认为空值
    *
    * @return string|null
    */
    public function getDestNamespace()
    {
        return $this->container['destNamespace'];
    }

    /**
    * Sets destNamespace
    *
    * @param string|null $destNamespace 目标命名空间名，默认为空值
    *
    * @return $this
    */
    public function setDestNamespace($destNamespace)
    {
        $this->container['destNamespace'] = $destNamespace;
        return $this;
    }

    /**
    * Gets filters
    *  源资源过滤器
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\Filter[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\Filter[]|null $filters 源资源过滤器
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
        return $this;
    }

    /**
    * Gets repoScopeMode
    *  repo过滤类型
    *
    * @return string|null
    */
    public function getRepoScopeMode()
    {
        return $this->container['repoScopeMode'];
    }

    /**
    * Sets repoScopeMode
    *
    * @param string|null $repoScopeMode repo过滤类型
    *
    * @return $this
    */
    public function setRepoScopeMode($repoScopeMode)
    {
        $this->container['repoScopeMode'] = $repoScopeMode;
        return $this;
    }

    /**
    * Gets trigger
    *  trigger
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig|null
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig|null $trigger trigger
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets override
    *  是否覆盖
    *
    * @return bool|null
    */
    public function getOverride()
    {
        return $this->container['override'];
    }

    /**
    * Sets override
    *
    * @param bool|null $override 是否覆盖
    *
    * @return $this
    */
    public function setOverride($override)
    {
        $this->container['override'] = $override;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用
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
    * @param bool|null $enabled 是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

