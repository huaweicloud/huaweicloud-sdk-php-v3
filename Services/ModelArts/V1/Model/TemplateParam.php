<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：参数名称。 **取值范围**：不涉及。
    * description  **参数解释**：参数描述。 **取值范围**：不涉及。
    * value  **参数解释**：参数取值。 **取值范围**：不涉及。
    * visible  **参数解释**：是否展示在console。 **取值范围**：- true   -false。
    * regex  **参数解释**：正则校验。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'value' => 'string',
            'visible' => 'string',
            'regex' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：参数名称。 **取值范围**：不涉及。
    * description  **参数解释**：参数描述。 **取值范围**：不涉及。
    * value  **参数解释**：参数取值。 **取值范围**：不涉及。
    * visible  **参数解释**：是否展示在console。 **取值范围**：- true   -false。
    * regex  **参数解释**：正则校验。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'value' => null,
        'visible' => null,
        'regex' => null
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
    * name  **参数解释**：参数名称。 **取值范围**：不涉及。
    * description  **参数解释**：参数描述。 **取值范围**：不涉及。
    * value  **参数解释**：参数取值。 **取值范围**：不涉及。
    * visible  **参数解释**：是否展示在console。 **取值范围**：- true   -false。
    * regex  **参数解释**：正则校验。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'value' => 'value',
            'visible' => 'visible',
            'regex' => 'regex'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：参数名称。 **取值范围**：不涉及。
    * description  **参数解释**：参数描述。 **取值范围**：不涉及。
    * value  **参数解释**：参数取值。 **取值范围**：不涉及。
    * visible  **参数解释**：是否展示在console。 **取值范围**：- true   -false。
    * regex  **参数解释**：正则校验。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'value' => 'setValue',
            'visible' => 'setVisible',
            'regex' => 'setRegex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：参数名称。 **取值范围**：不涉及。
    * description  **参数解释**：参数描述。 **取值范围**：不涉及。
    * value  **参数解释**：参数取值。 **取值范围**：不涉及。
    * visible  **参数解释**：是否展示在console。 **取值范围**：- true   -false。
    * regex  **参数解释**：正则校验。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'value' => 'getValue',
            'visible' => 'getVisible',
            'regex' => 'getRegex'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
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
    *  **参数解释**：参数名称。 **取值范围**：不涉及。
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
    * @param string|null $name **参数解释**：参数名称。 **取值范围**：不涉及。
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
    *  **参数解释**：参数描述。 **取值范围**：不涉及。
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
    * @param string|null $description **参数解释**：参数描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**：参数取值。 **取值范围**：不涉及。
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
    * @param string|null $value **参数解释**：参数取值。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets visible
    *  **参数解释**：是否展示在console。 **取值范围**：- true   -false。
    *
    * @return string|null
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param string|null $visible **参数解释**：是否展示在console。 **取值范围**：- true   -false。
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
        return $this;
    }

    /**
    * Gets regex
    *  **参数解释**：正则校验。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
    * Sets regex
    *
    * @param string|null $regex **参数解释**：正则校验。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;
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

