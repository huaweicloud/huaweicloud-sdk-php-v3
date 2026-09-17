<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemFlowFieldConfigVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemFlowFieldConfigVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldCode  字段编码
    * valueType  字段值类型
    * fieldOperation  字段操作类型
    * fieldValue  fieldValue
    * required  是否必填
    * fieldRange  fieldRange
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldCode' => 'string',
            'valueType' => 'string',
            'fieldOperation' => 'string',
            'fieldValue' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldValueVO',
            'required' => 'bool',
            'fieldRange' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldRangeVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldCode  字段编码
    * valueType  字段值类型
    * fieldOperation  字段操作类型
    * fieldValue  fieldValue
    * required  是否必填
    * fieldRange  fieldRange
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldCode' => null,
        'valueType' => null,
        'fieldOperation' => null,
        'fieldValue' => null,
        'required' => null,
        'fieldRange' => null
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
    * fieldCode  字段编码
    * valueType  字段值类型
    * fieldOperation  字段操作类型
    * fieldValue  fieldValue
    * required  是否必填
    * fieldRange  fieldRange
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldCode' => 'field_code',
            'valueType' => 'value_type',
            'fieldOperation' => 'field_operation',
            'fieldValue' => 'field_value',
            'required' => 'required',
            'fieldRange' => 'field_range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldCode  字段编码
    * valueType  字段值类型
    * fieldOperation  字段操作类型
    * fieldValue  fieldValue
    * required  是否必填
    * fieldRange  fieldRange
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldCode' => 'setFieldCode',
            'valueType' => 'setValueType',
            'fieldOperation' => 'setFieldOperation',
            'fieldValue' => 'setFieldValue',
            'required' => 'setRequired',
            'fieldRange' => 'setFieldRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldCode  字段编码
    * valueType  字段值类型
    * fieldOperation  字段操作类型
    * fieldValue  fieldValue
    * required  是否必填
    * fieldRange  fieldRange
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldCode' => 'getFieldCode',
            'valueType' => 'getValueType',
            'fieldOperation' => 'getFieldOperation',
            'fieldValue' => 'getFieldValue',
            'required' => 'getRequired',
            'fieldRange' => 'getFieldRange'
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
        $this->container['fieldCode'] = isset($data['fieldCode']) ? $data['fieldCode'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['fieldOperation'] = isset($data['fieldOperation']) ? $data['fieldOperation'] : null;
        $this->container['fieldValue'] = isset($data['fieldValue']) ? $data['fieldValue'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['fieldRange'] = isset($data['fieldRange']) ? $data['fieldRange'] : null;
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
    * Gets fieldCode
    *  字段编码
    *
    * @return string|null
    */
    public function getFieldCode()
    {
        return $this->container['fieldCode'];
    }

    /**
    * Sets fieldCode
    *
    * @param string|null $fieldCode 字段编码
    *
    * @return $this
    */
    public function setFieldCode($fieldCode)
    {
        $this->container['fieldCode'] = $fieldCode;
        return $this;
    }

    /**
    * Gets valueType
    *  字段值类型
    *
    * @return string|null
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string|null $valueType 字段值类型
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets fieldOperation
    *  字段操作类型
    *
    * @return string|null
    */
    public function getFieldOperation()
    {
        return $this->container['fieldOperation'];
    }

    /**
    * Sets fieldOperation
    *
    * @param string|null $fieldOperation 字段操作类型
    *
    * @return $this
    */
    public function setFieldOperation($fieldOperation)
    {
        $this->container['fieldOperation'] = $fieldOperation;
        return $this;
    }

    /**
    * Gets fieldValue
    *  fieldValue
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldValueVO|null
    */
    public function getFieldValue()
    {
        return $this->container['fieldValue'];
    }

    /**
    * Sets fieldValue
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldValueVO|null $fieldValue fieldValue
    *
    * @return $this
    */
    public function setFieldValue($fieldValue)
    {
        $this->container['fieldValue'] = $fieldValue;
        return $this;
    }

    /**
    * Gets required
    *  是否必填
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required 是否必填
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets fieldRange
    *  fieldRange
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldRangeVO|null
    */
    public function getFieldRange()
    {
        return $this->container['fieldRange'];
    }

    /**
    * Sets fieldRange
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldRangeVO|null $fieldRange fieldRange
    *
    * @return $this
    */
    public function setFieldRange($fieldRange)
    {
        $this->container['fieldRange'] = $fieldRange;
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

