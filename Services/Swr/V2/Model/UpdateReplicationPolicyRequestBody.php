<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateReplicationPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateReplicationPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  策略名称, 1-256字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  策略描述描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  过滤器
    * repoScopeMode  repo的选择方式，regular，selection
    * trigger  trigger
    * override  是否覆盖，默认为false
    * enabled  是否使用，默认为false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'srcRegistry' => '\HuaweiCloud\SDK\Swr\V2\Model\ReplicationRegistry',
            'destRegistry' => '\HuaweiCloud\SDK\Swr\V2\Model\ReplicationRegistry',
            'destNamespace' => 'string',
            'filters' => '\HuaweiCloud\SDK\Swr\V2\Model\Filter[]',
            'repoScopeMode' => 'string',
            'trigger' => '\HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig',
            'override' => 'bool',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  策略名称, 1-256字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  策略描述描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  过滤器
    * repoScopeMode  repo的选择方式，regular，selection
    * trigger  trigger
    * override  是否覆盖，默认为false
    * enabled  是否使用，默认为false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'srcRegistry' => null,
        'destRegistry' => null,
        'destNamespace' => null,
        'filters' => null,
        'repoScopeMode' => null,
        'trigger' => null,
        'override' => null,
        'enabled' => null
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
    * name  策略名称, 1-256字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  策略描述描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  过滤器
    * repoScopeMode  repo的选择方式，regular，selection
    * trigger  trigger
    * override  是否覆盖，默认为false
    * enabled  是否使用，默认为false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'srcRegistry' => 'src_registry',
            'destRegistry' => 'dest_registry',
            'destNamespace' => 'dest_namespace',
            'filters' => 'filters',
            'repoScopeMode' => 'repo_scope_mode',
            'trigger' => 'trigger',
            'override' => 'override',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  策略名称, 1-256字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  策略描述描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  过滤器
    * repoScopeMode  repo的选择方式，regular，selection
    * trigger  trigger
    * override  是否覆盖，默认为false
    * enabled  是否使用，默认为false
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'srcRegistry' => 'setSrcRegistry',
            'destRegistry' => 'setDestRegistry',
            'destNamespace' => 'setDestNamespace',
            'filters' => 'setFilters',
            'repoScopeMode' => 'setRepoScopeMode',
            'trigger' => 'setTrigger',
            'override' => 'setOverride',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  策略名称, 1-256字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  策略描述描述
    * srcRegistry  srcRegistry
    * destRegistry  destRegistry
    * destNamespace  目标命名空间名，默认为空值
    * filters  过滤器
    * repoScopeMode  repo的选择方式，regular，selection
    * trigger  trigger
    * override  是否覆盖，默认为false
    * enabled  是否使用，默认为false
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'srcRegistry' => 'getSrcRegistry',
            'destRegistry' => 'getDestRegistry',
            'destNamespace' => 'getDestNamespace',
            'filters' => 'getFilters',
            'repoScopeMode' => 'getRepoScopeMode',
            'trigger' => 'getTrigger',
            'override' => 'getOverride',
            'enabled' => 'getEnabled'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['srcRegistry'] = isset($data['srcRegistry']) ? $data['srcRegistry'] : null;
        $this->container['destRegistry'] = isset($data['destRegistry']) ? $data['destRegistry'] : null;
        $this->container['destNamespace'] = isset($data['destNamespace']) ? $data['destNamespace'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['repoScopeMode'] = isset($data['repoScopeMode']) ? $data['repoScopeMode'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['override'] = isset($data['override']) ? $data['override'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['repoScopeMode'] === null) {
            $invalidProperties[] = "'repoScopeMode' can't be null";
        }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    * Gets name
    *  策略名称, 1-256字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
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
    * @param string $name 策略名称, 1-256字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
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
    *  策略描述描述
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
    * @param string|null $description 策略描述描述
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
    *  过滤器
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\Filter[]
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\Filter[] $filters 过滤器
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
    *  repo的选择方式，regular，selection
    *
    * @return string
    */
    public function getRepoScopeMode()
    {
        return $this->container['repoScopeMode'];
    }

    /**
    * Sets repoScopeMode
    *
    * @param string $repoScopeMode repo的选择方式，regular，selection
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
    * @return \HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig $trigger trigger
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
    *  是否覆盖，默认为false
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
    * @param bool|null $override 是否覆盖，默认为false
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
    *  是否使用，默认为false
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 是否使用，默认为false
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

