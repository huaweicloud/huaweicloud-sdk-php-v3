<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DemoFieldAccess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DemoFieldAccess';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldName  字段名称需和keys中字段保持一致
    * fieldValue  字段值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldName' => 'string',
            'fieldValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldName  字段名称需和keys中字段保持一致
    * fieldValue  字段值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldName' => null,
        'fieldValue' => null
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
    * fieldName  字段名称需和keys中字段保持一致
    * fieldValue  字段值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldName' => 'field_name',
            'fieldValue' => 'field_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldName  字段名称需和keys中字段保持一致
    * fieldValue  字段值
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldName' => 'setFieldName',
            'fieldValue' => 'setFieldValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldName  字段名称需和keys中字段保持一致
    * fieldValue  字段值
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldName' => 'getFieldName',
            'fieldValue' => 'getFieldValue'
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
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['fieldValue'] = isset($data['fieldValue']) ? $data['fieldValue'] : null;
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
    * Gets fieldName
    *  字段名称需和keys中字段保持一致
    *
    * @return string|null
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string|null $fieldName 字段名称需和keys中字段保持一致
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets fieldValue
    *  字段值
    *
    * @return string|null
    */
    public function getFieldValue()
    {
        return $this->container['fieldValue'];
    }

    /**
    * Sets fieldValue
    *
    * @param string|null $fieldValue 字段值
    *
    * @return $this
    */
    public function setFieldValue($fieldValue)
    {
        $this->container['fieldValue'] = $fieldValue;
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

