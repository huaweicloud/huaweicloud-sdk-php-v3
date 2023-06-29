<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DynamicConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DynamicConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  部署应用时传递的参数名称
    * value  部署应用时传递的参数值
    * type  类型，如果填写动态参数，则类型必选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  部署应用时传递的参数名称
    * value  部署应用时传递的参数值
    * type  类型，如果填写动态参数，则类型必选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null,
        'type' => null
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
    * key  部署应用时传递的参数名称
    * value  部署应用时传递的参数值
    * type  类型，如果填写动态参数，则类型必选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  部署应用时传递的参数名称
    * value  部署应用时传递的参数值
    * type  类型，如果填写动态参数，则类型必选
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  部署应用时传递的参数名称
    * value  部署应用时传递的参数值
    * type  类型，如果填写动态参数，则类型必选
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue',
            'type' => 'getType'
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
    const TYPE_TEXT = 'text';
    const TYPE_HOST_GROUP = 'host_group';
    const TYPE_ENCRYPT = 'encrypt';
    const TYPE_ENUM = 'enum';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_HOST_GROUP,
            self::TYPE_ENCRYPT,
            self::TYPE_ENUM,
        ];
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 128)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['key']) && !preg_match("/^[a-zA-Z0-9\\-_.]*$/", $this->container['key'])) {
                $invalidProperties[] = "invalid value for 'key', must be conform to the pattern /^[a-zA-Z0-9\\-_.]*$/.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 8192)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['value']) && !preg_match("/^(?![\\s\\S]*(\\{[\\{%#]))[\\s\\S]*$/", $this->container['value'])) {
                $invalidProperties[] = "invalid value for 'value', must be conform to the pattern /^(?![\\s\\S]*(\\{[\\{%#]))[\\s\\S]*$/.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets key
    *  部署应用时传递的参数名称
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
    * @param string|null $key 部署应用时传递的参数名称
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
    *  部署应用时传递的参数值
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
    * @param string|null $value 部署应用时传递的参数值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets type
    *  类型，如果填写动态参数，则类型必选
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
    * @param string|null $type 类型，如果填写动态参数，则类型必选
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

