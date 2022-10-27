<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserPropDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserPropDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * propKey  **参数说明**：用户自定义属性键。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * propValue  **参数说明**：用户自定义属性值。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'propKey' => 'string',
            'propValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * propKey  **参数说明**：用户自定义属性键。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * propValue  **参数说明**：用户自定义属性值。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'propKey' => null,
        'propValue' => null
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
    * propKey  **参数说明**：用户自定义属性键。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * propValue  **参数说明**：用户自定义属性值。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'propKey' => 'prop_key',
            'propValue' => 'prop_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * propKey  **参数说明**：用户自定义属性键。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * propValue  **参数说明**：用户自定义属性值。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'propKey' => 'setPropKey',
            'propValue' => 'setPropValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * propKey  **参数说明**：用户自定义属性键。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * propValue  **参数说明**：用户自定义属性值。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'propKey' => 'getPropKey',
            'propValue' => 'getPropValue'
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
        $this->container['propKey'] = isset($data['propKey']) ? $data['propKey'] : null;
        $this->container['propValue'] = isset($data['propValue']) ? $data['propValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['propKey']) && !preg_match("/^[a-zA-Z0-9_-]{0,128}$/", $this->container['propKey'])) {
                $invalidProperties[] = "invalid value for 'propKey', must be conform to the pattern /^[a-zA-Z0-9_-]{0,128}$/.";
            }
            if (!is_null($this->container['propValue']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]{0,128}$/", $this->container['propValue'])) {
                $invalidProperties[] = "invalid value for 'propValue', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]{0,128}$/.";
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
    * Gets propKey
    *  **参数说明**：用户自定义属性键。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getPropKey()
    {
        return $this->container['propKey'];
    }

    /**
    * Sets propKey
    *
    * @param string|null $propKey **参数说明**：用户自定义属性键。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setPropKey($propKey)
    {
        $this->container['propKey'] = $propKey;
        return $this;
    }

    /**
    * Gets propValue
    *  **参数说明**：用户自定义属性值。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @return string|null
    */
    public function getPropValue()
    {
        return $this->container['propValue'];
    }

    /**
    * Sets propValue
    *
    * @param string|null $propValue **参数说明**：用户自定义属性值。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_? '#().,&%@!-等字符的组合。
    *
    * @return $this
    */
    public function setPropValue($propValue)
    {
        $this->container['propValue'] = $propValue;
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

