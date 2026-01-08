<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyLabel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：转发策略id。  **取值范围**：不涉及
    * name  **参数解释**：转发策略名称。  **取值范围**：不涉及
    * priority  **参数解释**：转发策略优先级。  **取值范围**：不涉及
    * action  **参数解释**：转发策略action。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：转发策略是否启用。  **取值范围**：不涉及
    * rules  **参数解释**：规则对象列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'priority' => 'string',
            'action' => 'string',
            'adminStateUp' => 'bool',
            'rules' => '\HuaweiCloud\SDK\Elb\V3\Model\L7Rule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：转发策略id。  **取值范围**：不涉及
    * name  **参数解释**：转发策略名称。  **取值范围**：不涉及
    * priority  **参数解释**：转发策略优先级。  **取值范围**：不涉及
    * action  **参数解释**：转发策略action。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：转发策略是否启用。  **取值范围**：不涉及
    * rules  **参数解释**：规则对象列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'priority' => null,
        'action' => null,
        'adminStateUp' => null,
        'rules' => null
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
    * id  **参数解释**：转发策略id。  **取值范围**：不涉及
    * name  **参数解释**：转发策略名称。  **取值范围**：不涉及
    * priority  **参数解释**：转发策略优先级。  **取值范围**：不涉及
    * action  **参数解释**：转发策略action。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：转发策略是否启用。  **取值范围**：不涉及
    * rules  **参数解释**：规则对象列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'priority' => 'priority',
            'action' => 'action',
            'adminStateUp' => 'admin_state_up',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：转发策略id。  **取值范围**：不涉及
    * name  **参数解释**：转发策略名称。  **取值范围**：不涉及
    * priority  **参数解释**：转发策略优先级。  **取值范围**：不涉及
    * action  **参数解释**：转发策略action。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：转发策略是否启用。  **取值范围**：不涉及
    * rules  **参数解释**：规则对象列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'priority' => 'setPriority',
            'action' => 'setAction',
            'adminStateUp' => 'setAdminStateUp',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：转发策略id。  **取值范围**：不涉及
    * name  **参数解释**：转发策略名称。  **取值范围**：不涉及
    * priority  **参数解释**：转发策略优先级。  **取值范围**：不涉及
    * action  **参数解释**：转发策略action。  **取值范围**：不涉及
    * adminStateUp  **参数解释**：转发策略是否启用。  **取值范围**：不涉及
    * rules  **参数解释**：规则对象列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'priority' => 'getPriority',
            'action' => 'getAction',
            'adminStateUp' => 'getAdminStateUp',
            'rules' => 'getRules'
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['rules'] === null) {
            $invalidProperties[] = "'rules' can't be null";
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
    *  **参数解释**：转发策略id。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**：转发策略id。  **取值范围**：不涉及
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
    *  **参数解释**：转发策略名称。  **取值范围**：不涉及
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
    * @param string $name **参数解释**：转发策略名称。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释**：转发策略优先级。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority **参数解释**：转发策略优先级。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**：转发策略action。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**：转发策略action。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  **参数解释**：转发策略是否启用。  **取值范围**：不涉及
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp **参数解释**：转发策略是否启用。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets rules
    *  **参数解释**：规则对象列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\L7Rule[]
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\L7Rule[] $rules **参数解释**：规则对象列表。
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

