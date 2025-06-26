<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateWebhookPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateWebhookPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  触发器名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  触发器描述
    * targets  触发器目标参数
    * scopeRules  作用范围规则
    * eventTypes  触发器触发条件，当前支持PUSH_ARTIFACT
    * enabled  是否使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'targets' => '\HuaweiCloud\SDK\Swr\V2\Model\Target[]',
            'scopeRules' => '\HuaweiCloud\SDK\Swr\V2\Model\ScopeRule[]',
            'eventTypes' => 'string[]',
            'enabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  触发器名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  触发器描述
    * targets  触发器目标参数
    * scopeRules  作用范围规则
    * eventTypes  触发器触发条件，当前支持PUSH_ARTIFACT
    * enabled  是否使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'targets' => null,
        'scopeRules' => null,
        'eventTypes' => null,
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
    * name  触发器名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  触发器描述
    * targets  触发器目标参数
    * scopeRules  作用范围规则
    * eventTypes  触发器触发条件，当前支持PUSH_ARTIFACT
    * enabled  是否使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'targets' => 'targets',
            'scopeRules' => 'scope_rules',
            'eventTypes' => 'event_types',
            'enabled' => 'enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  触发器名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  触发器描述
    * targets  触发器目标参数
    * scopeRules  作用范围规则
    * eventTypes  触发器触发条件，当前支持PUSH_ARTIFACT
    * enabled  是否使用
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'targets' => 'setTargets',
            'scopeRules' => 'setScopeRules',
            'eventTypes' => 'setEventTypes',
            'enabled' => 'setEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  触发器名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
    * description  触发器描述
    * targets  触发器目标参数
    * scopeRules  作用范围规则
    * eventTypes  触发器触发条件，当前支持PUSH_ARTIFACT
    * enabled  是否使用
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'targets' => 'getTargets',
            'scopeRules' => 'getScopeRules',
            'eventTypes' => 'getEventTypes',
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
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['scopeRules'] = isset($data['scopeRules']) ? $data['scopeRules'] : null;
        $this->container['eventTypes'] = isset($data['eventTypes']) ? $data['eventTypes'] : null;
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
        if ($this->container['targets'] === null) {
            $invalidProperties[] = "'targets' can't be null";
        }
        if ($this->container['scopeRules'] === null) {
            $invalidProperties[] = "'scopeRules' can't be null";
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
    *  触发器名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
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
    * @param string $name 触发器名称，由字母、汉字、数字、下划线（_）、中划线 (-)组成，1-256个字符。
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
    *  触发器描述
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
    * @param string|null $description 触发器描述
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
    *  触发器目标参数
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\Target[]
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\Target[] $targets 触发器目标参数
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
        return $this;
    }

    /**
    * Gets scopeRules
    *  作用范围规则
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\ScopeRule[]
    */
    public function getScopeRules()
    {
        return $this->container['scopeRules'];
    }

    /**
    * Sets scopeRules
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\ScopeRule[] $scopeRules 作用范围规则
    *
    * @return $this
    */
    public function setScopeRules($scopeRules)
    {
        $this->container['scopeRules'] = $scopeRules;
        return $this;
    }

    /**
    * Gets eventTypes
    *  触发器触发条件，当前支持PUSH_ARTIFACT
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
    * @param string[]|null $eventTypes 触发器触发条件，当前支持PUSH_ARTIFACT
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
    *  是否使用
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
    * @param bool $enabled 是否使用
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

