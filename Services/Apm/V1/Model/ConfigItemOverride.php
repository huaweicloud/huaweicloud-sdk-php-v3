<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigItemOverride implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigItemOverride';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * envTagId  环境标签ID
    * envTagName  环境标签名
    * key  键
    * value  值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'envTagId' => 'int',
            'envTagName' => 'string',
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * envTagId  环境标签ID
    * envTagName  环境标签名
    * key  键
    * value  值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'envTagId' => 'int64',
        'envTagName' => null,
        'key' => null,
        'value' => null
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
    * envTagId  环境标签ID
    * envTagName  环境标签名
    * key  键
    * value  值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'envTagId' => 'env_tag_id',
            'envTagName' => 'env_tag_name',
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * envTagId  环境标签ID
    * envTagName  环境标签名
    * key  键
    * value  值
    *
    * @var string[]
    */
    protected static $setters = [
            'envTagId' => 'setEnvTagId',
            'envTagName' => 'setEnvTagName',
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * envTagId  环境标签ID
    * envTagName  环境标签名
    * key  键
    * value  值
    *
    * @var string[]
    */
    protected static $getters = [
            'envTagId' => 'getEnvTagId',
            'envTagName' => 'getEnvTagName',
            'key' => 'getKey',
            'value' => 'getValue'
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
        $this->container['envTagId'] = isset($data['envTagId']) ? $data['envTagId'] : null;
        $this->container['envTagName'] = isset($data['envTagName']) ? $data['envTagName'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    * Gets envTagId
    *  环境标签ID
    *
    * @return int|null
    */
    public function getEnvTagId()
    {
        return $this->container['envTagId'];
    }

    /**
    * Sets envTagId
    *
    * @param int|null $envTagId 环境标签ID
    *
    * @return $this
    */
    public function setEnvTagId($envTagId)
    {
        $this->container['envTagId'] = $envTagId;
        return $this;
    }

    /**
    * Gets envTagName
    *  环境标签名
    *
    * @return string|null
    */
    public function getEnvTagName()
    {
        return $this->container['envTagName'];
    }

    /**
    * Sets envTagName
    *
    * @param string|null $envTagName 环境标签名
    *
    * @return $this
    */
    public function setEnvTagName($envTagName)
    {
        $this->container['envTagName'] = $envTagName;
        return $this;
    }

    /**
    * Gets key
    *  键
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 键
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  值
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
    * @param string|null $value 值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

