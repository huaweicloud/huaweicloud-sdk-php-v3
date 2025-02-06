<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UniqueAttributeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UniqueAttributeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attributePath  属性路径
    * attributeValue  属性的值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attributePath' => 'string',
            'attributeValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attributePath  属性路径
    * attributeValue  属性的值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attributePath' => null,
        'attributeValue' => null
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
    * attributePath  属性路径
    * attributeValue  属性的值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attributePath' => 'attribute_path',
            'attributeValue' => 'attribute_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attributePath  属性路径
    * attributeValue  属性的值
    *
    * @var string[]
    */
    protected static $setters = [
            'attributePath' => 'setAttributePath',
            'attributeValue' => 'setAttributeValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attributePath  属性路径
    * attributeValue  属性的值
    *
    * @var string[]
    */
    protected static $getters = [
            'attributePath' => 'getAttributePath',
            'attributeValue' => 'getAttributeValue'
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
        $this->container['attributePath'] = isset($data['attributePath']) ? $data['attributePath'] : null;
        $this->container['attributeValue'] = isset($data['attributeValue']) ? $data['attributeValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['attributePath'] === null) {
            $invalidProperties[] = "'attributePath' can't be null";
        }
            if ((mb_strlen($this->container['attributePath']) > 255)) {
                $invalidProperties[] = "invalid value for 'attributePath', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['attributePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'attributePath', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['attributeValue'] === null) {
            $invalidProperties[] = "'attributeValue' can't be null";
        }
            if ((mb_strlen($this->container['attributeValue']) > 255)) {
                $invalidProperties[] = "invalid value for 'attributeValue', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['attributeValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'attributeValue', the character length must be bigger than or equal to 1.";
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
    * Gets attributePath
    *  属性路径
    *
    * @return string
    */
    public function getAttributePath()
    {
        return $this->container['attributePath'];
    }

    /**
    * Sets attributePath
    *
    * @param string $attributePath 属性路径
    *
    * @return $this
    */
    public function setAttributePath($attributePath)
    {
        $this->container['attributePath'] = $attributePath;
        return $this;
    }

    /**
    * Gets attributeValue
    *  属性的值
    *
    * @return string
    */
    public function getAttributeValue()
    {
        return $this->container['attributeValue'];
    }

    /**
    * Sets attributeValue
    *
    * @param string $attributeValue 属性的值
    *
    * @return $this
    */
    public function setAttributeValue($attributeValue)
    {
        $this->container['attributeValue'] = $attributeValue;
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

