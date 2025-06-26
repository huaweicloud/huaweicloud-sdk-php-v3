<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 参数名称。 **取值范围**： 不涉及。
    * values  **参数解释**： 参数值。 **取值范围**： 不涉及。
    * unit  **参数解释**： 参数单位。 **取值范围**： 不涉及。
    * type  **参数解释**： 参数类型。 **取值范围**： 包括boolean、string、integer、float、list。
    * readonly  **参数解释**： 是否只读。 **取值范围**： 不涉及。
    * valueRange  **参数解释**： 参数值范围。 **取值范围**： 不涉及。
    * restartRequired  **参数解释**： 是否需要重启。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'values' => '\HuaweiCloud\SDK\Dws\V2\Model\ConfigurationParameterUnit[]',
            'unit' => 'string',
            'type' => 'string',
            'readonly' => 'bool',
            'valueRange' => 'string',
            'restartRequired' => 'bool',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 参数名称。 **取值范围**： 不涉及。
    * values  **参数解释**： 参数值。 **取值范围**： 不涉及。
    * unit  **参数解释**： 参数单位。 **取值范围**： 不涉及。
    * type  **参数解释**： 参数类型。 **取值范围**： 包括boolean、string、integer、float、list。
    * readonly  **参数解释**： 是否只读。 **取值范围**： 不涉及。
    * valueRange  **参数解释**： 参数值范围。 **取值范围**： 不涉及。
    * restartRequired  **参数解释**： 是否需要重启。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'values' => null,
        'unit' => null,
        'type' => null,
        'readonly' => null,
        'valueRange' => null,
        'restartRequired' => null,
        'description' => null
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
    * name  **参数解释**： 参数名称。 **取值范围**： 不涉及。
    * values  **参数解释**： 参数值。 **取值范围**： 不涉及。
    * unit  **参数解释**： 参数单位。 **取值范围**： 不涉及。
    * type  **参数解释**： 参数类型。 **取值范围**： 包括boolean、string、integer、float、list。
    * readonly  **参数解释**： 是否只读。 **取值范围**： 不涉及。
    * valueRange  **参数解释**： 参数值范围。 **取值范围**： 不涉及。
    * restartRequired  **参数解释**： 是否需要重启。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'values' => 'values',
            'unit' => 'unit',
            'type' => 'type',
            'readonly' => 'readonly',
            'valueRange' => 'value_range',
            'restartRequired' => 'restart_required',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 参数名称。 **取值范围**： 不涉及。
    * values  **参数解释**： 参数值。 **取值范围**： 不涉及。
    * unit  **参数解释**： 参数单位。 **取值范围**： 不涉及。
    * type  **参数解释**： 参数类型。 **取值范围**： 包括boolean、string、integer、float、list。
    * readonly  **参数解释**： 是否只读。 **取值范围**： 不涉及。
    * valueRange  **参数解释**： 参数值范围。 **取值范围**： 不涉及。
    * restartRequired  **参数解释**： 是否需要重启。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'values' => 'setValues',
            'unit' => 'setUnit',
            'type' => 'setType',
            'readonly' => 'setReadonly',
            'valueRange' => 'setValueRange',
            'restartRequired' => 'setRestartRequired',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 参数名称。 **取值范围**： 不涉及。
    * values  **参数解释**： 参数值。 **取值范围**： 不涉及。
    * unit  **参数解释**： 参数单位。 **取值范围**： 不涉及。
    * type  **参数解释**： 参数类型。 **取值范围**： 包括boolean、string、integer、float、list。
    * readonly  **参数解释**： 是否只读。 **取值范围**： 不涉及。
    * valueRange  **参数解释**： 参数值范围。 **取值范围**： 不涉及。
    * restartRequired  **参数解释**： 是否需要重启。 **取值范围**： 不涉及。
    * description  **参数解释**： 参数描述。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'values' => 'getValues',
            'unit' => 'getUnit',
            'type' => 'getType',
            'readonly' => 'getReadonly',
            'valueRange' => 'getValueRange',
            'restartRequired' => 'getRestartRequired',
            'description' => 'getDescription'
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
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['restartRequired'] = isset($data['restartRequired']) ? $data['restartRequired'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['readonly'] === null) {
            $invalidProperties[] = "'readonly' can't be null";
        }
        if ($this->container['valueRange'] === null) {
            $invalidProperties[] = "'valueRange' can't be null";
        }
        if ($this->container['restartRequired'] === null) {
            $invalidProperties[] = "'restartRequired' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
    *  **参数解释**： 参数名称。 **取值范围**： 不涉及。
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
    * @param string $name **参数解释**： 参数名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ConfigurationParameterUnit[]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ConfigurationParameterUnit[] $values **参数解释**： 参数值。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释**： 参数单位。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit **参数解释**： 参数单位。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 参数类型。 **取值范围**： 包括boolean、string、integer、float、list。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： 参数类型。 **取值范围**： 包括boolean、string、integer、float、list。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets readonly
    *  **参数解释**： 是否只读。 **取值范围**： 不涉及。
    *
    * @return bool
    */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
    * Sets readonly
    *
    * @param bool $readonly **参数解释**： 是否只读。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;
        return $this;
    }

    /**
    * Gets valueRange
    *  **参数解释**： 参数值范围。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getValueRange()
    {
        return $this->container['valueRange'];
    }

    /**
    * Sets valueRange
    *
    * @param string $valueRange **参数解释**： 参数值范围。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets restartRequired
    *  **参数解释**： 是否需要重启。 **取值范围**： 不涉及。
    *
    * @return bool
    */
    public function getRestartRequired()
    {
        return $this->container['restartRequired'];
    }

    /**
    * Sets restartRequired
    *
    * @param bool $restartRequired **参数解释**： 是否需要重启。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRestartRequired($restartRequired)
    {
        $this->container['restartRequired'] = $restartRequired;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 参数描述。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释**： 参数描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

