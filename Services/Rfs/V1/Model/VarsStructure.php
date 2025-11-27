<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

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
    * varKey  参数的名字
    * varValue  参数的值。  注意，参数需要以字符串形式存在，如果是数字，也需要以字符串形式存在，如'10'。  如果需要支持不同类型，或者复杂结构，请使用vars_uri或vars_body
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'varKey' => 'string',
            'varValue' => 'string',
            'encryption' => '\HuaweiCloud\SDK\Rfs\V1\Model\EncryptionStructure'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * varKey  参数的名字
    * varValue  参数的值。  注意，参数需要以字符串形式存在，如果是数字，也需要以字符串形式存在，如'10'。  如果需要支持不同类型，或者复杂结构，请使用vars_uri或vars_body
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'varKey' => null,
        'varValue' => null,
        'encryption' => null
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
    * varKey  参数的名字
    * varValue  参数的值。  注意，参数需要以字符串形式存在，如果是数字，也需要以字符串形式存在，如'10'。  如果需要支持不同类型，或者复杂结构，请使用vars_uri或vars_body
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'varKey' => 'var_key',
            'varValue' => 'var_value',
            'encryption' => 'encryption'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * varKey  参数的名字
    * varValue  参数的值。  注意，参数需要以字符串形式存在，如果是数字，也需要以字符串形式存在，如'10'。  如果需要支持不同类型，或者复杂结构，请使用vars_uri或vars_body
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $setters = [
            'varKey' => 'setVarKey',
            'varValue' => 'setVarValue',
            'encryption' => 'setEncryption'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * varKey  参数的名字
    * varValue  参数的值。  注意，参数需要以字符串形式存在，如果是数字，也需要以字符串形式存在，如'10'。  如果需要支持不同类型，或者复杂结构，请使用vars_uri或vars_body
    * encryption  encryption
    *
    * @var string[]
    */
    protected static $getters = [
            'varKey' => 'getVarKey',
            'varValue' => 'getVarValue',
            'encryption' => 'getEncryption'
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
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['varKey'] === null) {
            $invalidProperties[] = "'varKey' can't be null";
        }
            if ((mb_strlen($this->container['varKey']) > 32)) {
                $invalidProperties[] = "invalid value for 'varKey', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['varKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'varKey', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z]+[a-zA-Z0-9-_]*$/", $this->container['varKey'])) {
                $invalidProperties[] = "invalid value for 'varKey', must be conform to the pattern /^[a-zA-Z]+[a-zA-Z0-9-_]*$/.";
            }
        if ($this->container['varValue'] === null) {
            $invalidProperties[] = "'varValue' can't be null";
        }
            if ((mb_strlen($this->container['varValue']) > 2048)) {
                $invalidProperties[] = "invalid value for 'varValue', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['varValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'varValue', the character length must be bigger than or equal to 0.";
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
    *  参数的名字
    *
    * @return string
    */
    public function getVarKey()
    {
        return $this->container['varKey'];
    }

    /**
    * Sets varKey
    *
    * @param string $varKey 参数的名字
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
    *  参数的值。  注意，参数需要以字符串形式存在，如果是数字，也需要以字符串形式存在，如'10'。  如果需要支持不同类型，或者复杂结构，请使用vars_uri或vars_body
    *
    * @return string
    */
    public function getVarValue()
    {
        return $this->container['varValue'];
    }

    /**
    * Sets varValue
    *
    * @param string $varValue 参数的值。  注意，参数需要以字符串形式存在，如果是数字，也需要以字符串形式存在，如'10'。  如果需要支持不同类型，或者复杂结构，请使用vars_uri或vars_body
    *
    * @return $this
    */
    public function setVarValue($varValue)
    {
        $this->container['varValue'] = $varValue;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \HuaweiCloud\SDK\Rfs\V1\Model\EncryptionStructure|null
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \HuaweiCloud\SDK\Rfs\V1\Model\EncryptionStructure|null $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
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

