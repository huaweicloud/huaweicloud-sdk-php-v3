<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomizedExtension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomizedExtension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectIdentifier  对象标识符。 > 本参数需要满足ASN1规范的点分十进制符号格式的字符串，如1.3.6.1.4.1.2011.4.99。
    * value  自定义属性内容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectIdentifier' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectIdentifier  对象标识符。 > 本参数需要满足ASN1规范的点分十进制符号格式的字符串，如1.3.6.1.4.1.2011.4.99。
    * value  自定义属性内容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectIdentifier' => null,
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
    * objectIdentifier  对象标识符。 > 本参数需要满足ASN1规范的点分十进制符号格式的字符串，如1.3.6.1.4.1.2011.4.99。
    * value  自定义属性内容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectIdentifier' => 'object_identifier',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectIdentifier  对象标识符。 > 本参数需要满足ASN1规范的点分十进制符号格式的字符串，如1.3.6.1.4.1.2011.4.99。
    * value  自定义属性内容。
    *
    * @var string[]
    */
    protected static $setters = [
            'objectIdentifier' => 'setObjectIdentifier',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectIdentifier  对象标识符。 > 本参数需要满足ASN1规范的点分十进制符号格式的字符串，如1.3.6.1.4.1.2011.4.99。
    * value  自定义属性内容。
    *
    * @var string[]
    */
    protected static $getters = [
            'objectIdentifier' => 'getObjectIdentifier',
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
        $this->container['objectIdentifier'] = isset($data['objectIdentifier']) ? $data['objectIdentifier'] : null;
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
            if (!is_null($this->container['objectIdentifier']) && (mb_strlen($this->container['objectIdentifier']) > 64)) {
                $invalidProperties[] = "invalid value for 'objectIdentifier', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['objectIdentifier']) && (mb_strlen($this->container['objectIdentifier']) < 1)) {
                $invalidProperties[] = "invalid value for 'objectIdentifier', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 64)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
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
    * Gets objectIdentifier
    *  对象标识符。 > 本参数需要满足ASN1规范的点分十进制符号格式的字符串，如1.3.6.1.4.1.2011.4.99。
    *
    * @return string|null
    */
    public function getObjectIdentifier()
    {
        return $this->container['objectIdentifier'];
    }

    /**
    * Sets objectIdentifier
    *
    * @param string|null $objectIdentifier 对象标识符。 > 本参数需要满足ASN1规范的点分十进制符号格式的字符串，如1.3.6.1.4.1.2011.4.99。
    *
    * @return $this
    */
    public function setObjectIdentifier($objectIdentifier)
    {
        $this->container['objectIdentifier'] = $objectIdentifier;
        return $this;
    }

    /**
    * Gets value
    *  自定义属性内容。
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
    * @param string|null $value 自定义属性内容。
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

