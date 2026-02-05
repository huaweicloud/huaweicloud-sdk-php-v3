<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationUpdateReqV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationUpdateReqV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**：  描述。  **约束限制**：  不涉及  **取值范围**：  0-256的不是!、<、>、=、&、\" 或 ' 的字符。  **默认取值**：  不涉及。
    * values  **参数解释**：  修改的值。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    * name  **参数解释**：  参数的名称。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'values' => 'map[string,string]',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**：  描述。  **约束限制**：  不涉及  **取值范围**：  0-256的不是!、<、>、=、&、\" 或 ' 的字符。  **默认取值**：  不涉及。
    * values  **参数解释**：  修改的值。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    * name  **参数解释**：  参数的名称。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'values' => null,
        'name' => null
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
    * description  **参数解释**：  描述。  **约束限制**：  不涉及  **取值范围**：  0-256的不是!、<、>、=、&、\" 或 ' 的字符。  **默认取值**：  不涉及。
    * values  **参数解释**：  修改的值。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    * name  **参数解释**：  参数的名称。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'values' => 'values',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**：  描述。  **约束限制**：  不涉及  **取值范围**：  0-256的不是!、<、>、=、&、\" 或 ' 的字符。  **默认取值**：  不涉及。
    * values  **参数解释**：  修改的值。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    * name  **参数解释**：  参数的名称。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'values' => 'setValues',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**：  描述。  **约束限制**：  不涉及  **取值范围**：  0-256的不是!、<、>、=、&、\" 或 ' 的字符。  **默认取值**：  不涉及。
    * values  **参数解释**：  修改的值。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    * name  **参数解释**：  参数的名称。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'values' => 'getValues',
            'name' => 'getName'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets description
    *  **参数解释**：  描述。  **约束限制**：  不涉及  **取值范围**：  0-256的不是!、<、>、=、&、\" 或 ' 的字符。  **默认取值**：  不涉及。
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
    * @param string|null $description **参数解释**：  描述。  **约束限制**：  不涉及  **取值范围**：  0-256的不是!、<、>、=、&、\" 或 ' 的字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**：  修改的值。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    *
    * @return map[string,string]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param map[string,string] $values **参数解释**：  修改的值。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：  参数的名称。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
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
    * @param string|null $name **参数解释**：  参数的名称。  **约束限制**：  不涉及  **取值范围**：  长度为1-64的a-z、A-Z、0-9、.、_ 和 -的字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

