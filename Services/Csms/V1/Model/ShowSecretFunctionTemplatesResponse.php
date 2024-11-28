<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecretFunctionTemplatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecretFunctionTemplatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionTemplates  凭据轮转函数模板。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionTemplates' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionTemplates  凭据轮转函数模板。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionTemplates' => null
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
    * functionTemplates  凭据轮转函数模板。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionTemplates' => 'function_templates'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionTemplates  凭据轮转函数模板。
    *
    * @var string[]
    */
    protected static $setters = [
            'functionTemplates' => 'setFunctionTemplates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionTemplates  凭据轮转函数模板。
    *
    * @var string[]
    */
    protected static $getters = [
            'functionTemplates' => 'getFunctionTemplates'
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
        $this->container['functionTemplates'] = isset($data['functionTemplates']) ? $data['functionTemplates'] : null;
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
    * Gets functionTemplates
    *  凭据轮转函数模板。
    *
    * @return string|null
    */
    public function getFunctionTemplates()
    {
        return $this->container['functionTemplates'];
    }

    /**
    * Sets functionTemplates
    *
    * @param string|null $functionTemplates 凭据轮转函数模板。
    *
    * @return $this
    */
    public function setFunctionTemplates($functionTemplates)
    {
        $this->container['functionTemplates'] = $functionTemplates;
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

