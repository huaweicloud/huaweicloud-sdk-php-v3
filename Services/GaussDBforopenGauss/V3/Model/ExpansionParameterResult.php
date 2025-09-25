<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExpansionParameterResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExpansionParameterResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**: 参数名称。 **取值范围**: 不涉及。
    * value  **参数解释**: 参数值。 **取值范围**: 不涉及。
    * restartRequired  **参数解释**: 修改参数是否需要重启。 **取值范围**: - true：需要重启。 - false：不需要重启。
    * valueRange  **参数解释**: 参数值的取值范围。 **取值范围**: 不涉及。
    * type  **参数解释**: 参数类型。 **取值范围**: - integer：整数。 - boolean：布尔类型。 - string：字符串。
    * description  **参数解释**: 参数描述。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'restartRequired' => 'bool',
            'valueRange' => 'string',
            'type' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**: 参数名称。 **取值范围**: 不涉及。
    * value  **参数解释**: 参数值。 **取值范围**: 不涉及。
    * restartRequired  **参数解释**: 修改参数是否需要重启。 **取值范围**: - true：需要重启。 - false：不需要重启。
    * valueRange  **参数解释**: 参数值的取值范围。 **取值范围**: 不涉及。
    * type  **参数解释**: 参数类型。 **取值范围**: - integer：整数。 - boolean：布尔类型。 - string：字符串。
    * description  **参数解释**: 参数描述。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'restartRequired' => null,
        'valueRange' => null,
        'type' => null,
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
    * name  **参数解释**: 参数名称。 **取值范围**: 不涉及。
    * value  **参数解释**: 参数值。 **取值范围**: 不涉及。
    * restartRequired  **参数解释**: 修改参数是否需要重启。 **取值范围**: - true：需要重启。 - false：不需要重启。
    * valueRange  **参数解释**: 参数值的取值范围。 **取值范围**: 不涉及。
    * type  **参数解释**: 参数类型。 **取值范围**: - integer：整数。 - boolean：布尔类型。 - string：字符串。
    * description  **参数解释**: 参数描述。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'restartRequired' => 'restart_required',
            'valueRange' => 'value_range',
            'type' => 'type',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**: 参数名称。 **取值范围**: 不涉及。
    * value  **参数解释**: 参数值。 **取值范围**: 不涉及。
    * restartRequired  **参数解释**: 修改参数是否需要重启。 **取值范围**: - true：需要重启。 - false：不需要重启。
    * valueRange  **参数解释**: 参数值的取值范围。 **取值范围**: 不涉及。
    * type  **参数解释**: 参数类型。 **取值范围**: - integer：整数。 - boolean：布尔类型。 - string：字符串。
    * description  **参数解释**: 参数描述。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'restartRequired' => 'setRestartRequired',
            'valueRange' => 'setValueRange',
            'type' => 'setType',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**: 参数名称。 **取值范围**: 不涉及。
    * value  **参数解释**: 参数值。 **取值范围**: 不涉及。
    * restartRequired  **参数解释**: 修改参数是否需要重启。 **取值范围**: - true：需要重启。 - false：不需要重启。
    * valueRange  **参数解释**: 参数值的取值范围。 **取值范围**: 不涉及。
    * type  **参数解释**: 参数类型。 **取值范围**: - integer：整数。 - boolean：布尔类型。 - string：字符串。
    * description  **参数解释**: 参数描述。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'restartRequired' => 'getRestartRequired',
            'valueRange' => 'getValueRange',
            'type' => 'getType',
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['restartRequired'] = isset($data['restartRequired']) ? $data['restartRequired'] : null;
        $this->container['valueRange'] = isset($data['valueRange']) ? $data['valueRange'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    *  **参数解释**: 参数名称。 **取值范围**: 不涉及。
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
    * @param string|null $name **参数解释**: 参数名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**: 参数值。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value **参数解释**: 参数值。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets restartRequired
    *  **参数解释**: 修改参数是否需要重启。 **取值范围**: - true：需要重启。 - false：不需要重启。
    *
    * @return bool|null
    */
    public function getRestartRequired()
    {
        return $this->container['restartRequired'];
    }

    /**
    * Sets restartRequired
    *
    * @param bool|null $restartRequired **参数解释**: 修改参数是否需要重启。 **取值范围**: - true：需要重启。 - false：不需要重启。
    *
    * @return $this
    */
    public function setRestartRequired($restartRequired)
    {
        $this->container['restartRequired'] = $restartRequired;
        return $this;
    }

    /**
    * Gets valueRange
    *  **参数解释**: 参数值的取值范围。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getValueRange()
    {
        return $this->container['valueRange'];
    }

    /**
    * Sets valueRange
    *
    * @param string|null $valueRange **参数解释**: 参数值的取值范围。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setValueRange($valueRange)
    {
        $this->container['valueRange'] = $valueRange;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 参数类型。 **取值范围**: - integer：整数。 - boolean：布尔类型。 - string：字符串。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**: 参数类型。 **取值范围**: - integer：整数。 - boolean：布尔类型。 - string：字符串。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 参数描述。 **取值范围**: 不涉及。
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
    * @param string|null $description **参数解释**: 参数描述。 **取值范围**: 不涉及。
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

