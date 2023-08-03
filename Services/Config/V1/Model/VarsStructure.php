<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VarsStructure implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VarsStructure';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * varKey  参数名称。
    * varValue  参数的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'varKey' => 'string',
            'varValue' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * varKey  参数名称。
    * varValue  参数的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'varKey' => null,
        'varValue' => null
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
    * varKey  参数名称。
    * varValue  参数的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'varKey' => 'var_key',
            'varValue' => 'var_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * varKey  参数名称。
    * varValue  参数的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'varKey' => 'setVarKey',
            'varValue' => 'setVarValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * varKey  参数名称。
    * varValue  参数的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'varKey' => 'getVarKey',
            'varValue' => 'getVarValue'
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
        $this->container['varKey'] = isset($data['varKey']) ? $data['varKey'] : null;
        $this->container['varValue'] = isset($data['varValue']) ? $data['varValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['varKey']) && (mb_strlen($this->container['varKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'varKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['varKey']) && (mb_strlen($this->container['varKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'varKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['varKey']) && !preg_match("/^[A-Za-z][\\w-]*$/", $this->container['varKey'])) {
                $invalidProperties[] = "invalid value for 'varKey', must be conform to the pattern /^[A-Za-z][\\w-]*$/.";
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
    * Gets varKey
    *  参数名称。
    *
    * @return string|null
    */
    public function getVarKey()
    {
        return $this->container['varKey'];
    }

    /**
    * Sets varKey
    *
    * @param string|null $varKey 参数名称。
    *
    * @return $this
    */
    public function setVarKey($varKey)
    {
        $this->container['varKey'] = $varKey;
        return $this;
    }

    /**
    * Gets varValue
    *  参数的值。
    *
    * @return object|null
    */
    public function getVarValue()
    {
        return $this->container['varValue'];
    }

    /**
    * Sets varValue
    *
    * @param object|null $varValue 参数的值。
    *
    * @return $this
    */
    public function setVarValue($varValue)
    {
        $this->container['varValue'] = $varValue;
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

