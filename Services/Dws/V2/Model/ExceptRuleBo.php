<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExceptRuleBo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExceptRuleBo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * action  **参数解释**： 触发异常规则操作。 **取值范围**： 不涉及。
    * queues  **参数解释**： 异常规则绑定的资源池名称列表。 **取值范围**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'action' => 'string',
            'queues' => 'string[]',
            'exceptRules' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * action  **参数解释**： 触发异常规则操作。 **取值范围**： 不涉及。
    * queues  **参数解释**： 异常规则绑定的资源池名称列表。 **取值范围**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'action' => null,
        'queues' => null,
        'exceptRules' => null
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
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * action  **参数解释**： 触发异常规则操作。 **取值范围**： 不涉及。
    * queues  **参数解释**： 异常规则绑定的资源池名称列表。 **取值范围**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'action' => 'action',
            'queues' => 'queues',
            'exceptRules' => 'except_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * action  **参数解释**： 触发异常规则操作。 **取值范围**： 不涉及。
    * queues  **参数解释**： 异常规则绑定的资源池名称列表。 **取值范围**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'action' => 'setAction',
            'queues' => 'setQueues',
            'exceptRules' => 'setExceptRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 规则名称。 **取值范围**： 不涉及。
    * action  **参数解释**： 触发异常规则操作。 **取值范围**： 不涉及。
    * queues  **参数解释**： 异常规则绑定的资源池名称列表。 **取值范围**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'action' => 'getAction',
            'queues' => 'getQueues',
            'exceptRules' => 'getExceptRules'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['queues'] = isset($data['queues']) ? $data['queues'] : null;
        $this->container['exceptRules'] = isset($data['exceptRules']) ? $data['exceptRules'] : null;
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
    *  **参数解释**： 规则名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 规则名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**： 触发异常规则操作。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释**： 触发异常规则操作。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets queues
    *  **参数解释**： 异常规则绑定的资源池名称列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getQueues()
    {
        return $this->container['queues'];
    }

    /**
    * Sets queues
    *
    * @param string[]|null $queues **参数解释**： 异常规则绑定的资源池名称列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueues($queues)
    {
        $this->container['queues'] = $queues;
        return $this;
    }

    /**
    * Gets exceptRules
    *  **参数解释**： 异常规则配置项。 **取值范围**： 不涉及。
    *
    * @return map[string,string]|null
    */
    public function getExceptRules()
    {
        return $this->container['exceptRules'];
    }

    /**
    * Sets exceptRules
    *
    * @param map[string,string]|null $exceptRules **参数解释**： 异常规则配置项。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExceptRules($exceptRules)
    {
        $this->container['exceptRules'] = $exceptRules;
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

