<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageRetention implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageRetention';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  老化策略ID
    * algorithm  算法
    * rules  匹配规则
    * trigger  trigger
    * enabled  是否开启策略
    * name  策略名称
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'algorithm' => 'string',
            'rules' => '\HuaweiCloud\SDK\Swr\V2\Model\RetentionRuleResponseBody[]',
            'trigger' => '\HuaweiCloud\SDK\Swr\V2\Model\TriggerConfig',
            'enabled' => 'bool',
            'name' => 'string',
            'namespaceId' => 'int',
            'namespaceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  老化策略ID
    * algorithm  算法
    * rules  匹配规则
    * trigger  trigger
    * enabled  是否开启策略
    * name  策略名称
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'algorithm' => null,
        'rules' => null,
        'trigger' => null,
        'enabled' => null,
        'name' => null,
        'namespaceId' => null,
        'namespaceName' => null
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
    * id  老化策略ID
    * algorithm  算法
    * rules  匹配规则
    * trigger  trigger
    * enabled  是否开启策略
    * name  策略名称
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'algorithm' => 'algorithm',
            'rules' => 'rules',
            'trigger' => 'trigger',
            'enabled' => 'enabled',
            'name' => 'name',
            'namespaceId' => 'namespace_id',
            'namespaceName' => 'namespace_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  老化策略ID
    * algorithm  算法
    * rules  匹配规则
    * trigger  trigger
    * enabled  是否开启策略
    * name  策略名称
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'algorithm' => 'setAlgorithm',
            'rules' => 'setRules',
            'trigger' => 'setTrigger',
            'enabled' => 'setEnabled',
            'name' => 'setName',
            'namespaceId' => 'setNamespaceId',
            'namespaceName' => 'setNamespaceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  老化策略ID
    * algorithm  算法
    * rules  匹配规则
    * trigger  trigger
    * enabled  是否开启策略
    * name  策略名称
    * namespaceId  命名空间ID
    * namespaceName  命名空间名
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'algorithm' => 'getAlgorithm',
            'rules' => 'getRules',
            'trigger' => 'getTrigger',
            'enabled' => 'getEnabled',
            'name' => 'getName',
            'namespaceId' => 'getNamespaceId',
            'namespaceName' => 'getNamespaceName'
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['algorithm'] === null) {
            $invalidProperties[] = "'algorithm' can't be null";
        }
        if ($this->container['rules'] === null) {
            $invalidProperties[] = "'rules' can't be null";
        }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['namespaceId'] === null) {
            $invalidProperties[] = "'namespaceId' can't be null";
        }
        if ($this->container['namespaceName'] === null) {
            $invalidProperties[] = "'namespaceName' can't be null";
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
    * Gets id
    *  老化策略ID
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
    * @param int $id 老化策略ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets algorithm
    *  算法
    *
    * @return string
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param string $algorithm 算法
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets rules
    *  匹配规则
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\RetentionRuleResponseBody[]
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\RetentionRuleResponseBody[] $rules 匹配规则
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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
    * Gets enabled
    *  是否开启策略
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
    * @param bool $enabled 是否开启策略
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets name
    *  策略名称
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
    * @param string $name 策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespaceId
    *  命名空间ID
    *
    * @return int
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param int $namespaceId 命名空间ID
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
    * @return string
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string $namespaceName 命名空间名
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
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

