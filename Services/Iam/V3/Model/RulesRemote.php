<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RulesRemote implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RulesRemote';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'anyOneOf' => 'string[]',
            'notAnyOf' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'anyOneOf' => null,
        'notAnyOf' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'anyOneOf' => 'any_one_of',
            'notAnyOf' => 'not_any_of'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'anyOneOf' => 'setAnyOneOf',
            'notAnyOf' => 'setNotAnyOf'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'anyOneOf' => 'getAnyOneOf',
            'notAnyOf' => 'getNotAnyOf'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['anyOneOf'] = isset($data['anyOneOf']) ? $data['anyOneOf'] : null;
        $this->container['notAnyOf'] = isset($data['notAnyOf']) ? $data['notAnyOf'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets type
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
    * @param string $type 表示IdP断言中的属性。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets anyOneOf
    *
    * @return string[]|null
    */
    public function getAnyOneOf()
    {
        return $this->container['anyOneOf'];
    }

    /**
    * Sets anyOneOf
    *
    * @param string[]|null $anyOneOf 输入属性值中包含指定值才生效，并返回布尔值，返回值不能用于local块中的占位符。在同一个remote数组元素中，any_one_of与not_any_of互斥，两者至多填写一个，不能同时填写。
    *
    * @return $this
    */
    public function setAnyOneOf($anyOneOf)
    {
        $this->container['anyOneOf'] = $anyOneOf;
        return $this;
    }

    /**
    * Gets notAnyOf
    *
    * @return string[]|null
    */
    public function getNotAnyOf()
    {
        return $this->container['notAnyOf'];
    }

    /**
    * Sets notAnyOf
    *
    * @param string[]|null $notAnyOf 输入属性值中不包含指定值才生效，并返回布尔值，返回值不能用于local块中的占位符。在同一个remote数组元素中，any_one_of与not_any_of互斥，两者至多填写一个，不能同时填写。
    *
    * @return $this
    */
    public function setNotAnyOf($notAnyOf)
    {
        $this->container['notAnyOf'] = $notAnyOf;
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

