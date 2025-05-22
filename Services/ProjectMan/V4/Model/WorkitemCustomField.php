<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkitemCustomField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkitemCustomField';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldId  自定义字段id
    * fieldName  自定义字段名称
    * fieldType  自定义字段类型, \"Date\",\"Number\",\"DateTime\", \"MultiLineText\",\"SingleLineText\", \"Select\",  \"Checkbox\"
    * fieldOptionSource  自定义字段的选项源,CUSTOM，USER，DOMAIN，ITERATION，MODULE，TAG
    * value  自定义字段值, (field_type为Date,Number,DateTime时,field_option_source为空，value值是数字的字符串)， (field_type为MultiLineText,SingleLineText时,field_option_source为空，value值是文本字符串)， (field_type为Select ,field_option_source为CUSTOM时，value值是文本字符串) (field_type为Select ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json格式{}), (field_type为Checkbox ,field_option_source为CUSTOM时，value值是字符串数组[\\\"aaa\\\"]), (field_type为\"Checkbox\" ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json的数组[{},{}])
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldId' => 'string',
            'fieldName' => 'string',
            'fieldType' => 'string',
            'fieldOptionSource' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldId  自定义字段id
    * fieldName  自定义字段名称
    * fieldType  自定义字段类型, \"Date\",\"Number\",\"DateTime\", \"MultiLineText\",\"SingleLineText\", \"Select\",  \"Checkbox\"
    * fieldOptionSource  自定义字段的选项源,CUSTOM，USER，DOMAIN，ITERATION，MODULE，TAG
    * value  自定义字段值, (field_type为Date,Number,DateTime时,field_option_source为空，value值是数字的字符串)， (field_type为MultiLineText,SingleLineText时,field_option_source为空，value值是文本字符串)， (field_type为Select ,field_option_source为CUSTOM时，value值是文本字符串) (field_type为Select ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json格式{}), (field_type为Checkbox ,field_option_source为CUSTOM时，value值是字符串数组[\\\"aaa\\\"]), (field_type为\"Checkbox\" ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json的数组[{},{}])
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldId' => null,
        'fieldName' => null,
        'fieldType' => null,
        'fieldOptionSource' => null,
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
    * fieldId  自定义字段id
    * fieldName  自定义字段名称
    * fieldType  自定义字段类型, \"Date\",\"Number\",\"DateTime\", \"MultiLineText\",\"SingleLineText\", \"Select\",  \"Checkbox\"
    * fieldOptionSource  自定义字段的选项源,CUSTOM，USER，DOMAIN，ITERATION，MODULE，TAG
    * value  自定义字段值, (field_type为Date,Number,DateTime时,field_option_source为空，value值是数字的字符串)， (field_type为MultiLineText,SingleLineText时,field_option_source为空，value值是文本字符串)， (field_type为Select ,field_option_source为CUSTOM时，value值是文本字符串) (field_type为Select ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json格式{}), (field_type为Checkbox ,field_option_source为CUSTOM时，value值是字符串数组[\\\"aaa\\\"]), (field_type为\"Checkbox\" ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json的数组[{},{}])
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldId' => 'field_id',
            'fieldName' => 'field_name',
            'fieldType' => 'field_type',
            'fieldOptionSource' => 'field_option_source',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldId  自定义字段id
    * fieldName  自定义字段名称
    * fieldType  自定义字段类型, \"Date\",\"Number\",\"DateTime\", \"MultiLineText\",\"SingleLineText\", \"Select\",  \"Checkbox\"
    * fieldOptionSource  自定义字段的选项源,CUSTOM，USER，DOMAIN，ITERATION，MODULE，TAG
    * value  自定义字段值, (field_type为Date,Number,DateTime时,field_option_source为空，value值是数字的字符串)， (field_type为MultiLineText,SingleLineText时,field_option_source为空，value值是文本字符串)， (field_type为Select ,field_option_source为CUSTOM时，value值是文本字符串) (field_type为Select ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json格式{}), (field_type为Checkbox ,field_option_source为CUSTOM时，value值是字符串数组[\\\"aaa\\\"]), (field_type为\"Checkbox\" ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json的数组[{},{}])
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldId' => 'setFieldId',
            'fieldName' => 'setFieldName',
            'fieldType' => 'setFieldType',
            'fieldOptionSource' => 'setFieldOptionSource',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldId  自定义字段id
    * fieldName  自定义字段名称
    * fieldType  自定义字段类型, \"Date\",\"Number\",\"DateTime\", \"MultiLineText\",\"SingleLineText\", \"Select\",  \"Checkbox\"
    * fieldOptionSource  自定义字段的选项源,CUSTOM，USER，DOMAIN，ITERATION，MODULE，TAG
    * value  自定义字段值, (field_type为Date,Number,DateTime时,field_option_source为空，value值是数字的字符串)， (field_type为MultiLineText,SingleLineText时,field_option_source为空，value值是文本字符串)， (field_type为Select ,field_option_source为CUSTOM时，value值是文本字符串) (field_type为Select ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json格式{}), (field_type为Checkbox ,field_option_source为CUSTOM时，value值是字符串数组[\\\"aaa\\\"]), (field_type为\"Checkbox\" ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json的数组[{},{}])
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldId' => 'getFieldId',
            'fieldName' => 'getFieldName',
            'fieldType' => 'getFieldType',
            'fieldOptionSource' => 'getFieldOptionSource',
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
        $this->container['fieldId'] = isset($data['fieldId']) ? $data['fieldId'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['fieldOptionSource'] = isset($data['fieldOptionSource']) ? $data['fieldOptionSource'] : null;
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
    * Gets fieldId
    *  自定义字段id
    *
    * @return string|null
    */
    public function getFieldId()
    {
        return $this->container['fieldId'];
    }

    /**
    * Sets fieldId
    *
    * @param string|null $fieldId 自定义字段id
    *
    * @return $this
    */
    public function setFieldId($fieldId)
    {
        $this->container['fieldId'] = $fieldId;
        return $this;
    }

    /**
    * Gets fieldName
    *  自定义字段名称
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
    * @param string|null $fieldName 自定义字段名称
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets fieldType
    *  自定义字段类型, \"Date\",\"Number\",\"DateTime\", \"MultiLineText\",\"SingleLineText\", \"Select\",  \"Checkbox\"
    *
    * @return string|null
    */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
    * Sets fieldType
    *
    * @param string|null $fieldType 自定义字段类型, \"Date\",\"Number\",\"DateTime\", \"MultiLineText\",\"SingleLineText\", \"Select\",  \"Checkbox\"
    *
    * @return $this
    */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;
        return $this;
    }

    /**
    * Gets fieldOptionSource
    *  自定义字段的选项源,CUSTOM，USER，DOMAIN，ITERATION，MODULE，TAG
    *
    * @return string|null
    */
    public function getFieldOptionSource()
    {
        return $this->container['fieldOptionSource'];
    }

    /**
    * Sets fieldOptionSource
    *
    * @param string|null $fieldOptionSource 自定义字段的选项源,CUSTOM，USER，DOMAIN，ITERATION，MODULE，TAG
    *
    * @return $this
    */
    public function setFieldOptionSource($fieldOptionSource)
    {
        $this->container['fieldOptionSource'] = $fieldOptionSource;
        return $this;
    }

    /**
    * Gets value
    *  自定义字段值, (field_type为Date,Number,DateTime时,field_option_source为空，value值是数字的字符串)， (field_type为MultiLineText,SingleLineText时,field_option_source为空，value值是文本字符串)， (field_type为Select ,field_option_source为CUSTOM时，value值是文本字符串) (field_type为Select ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json格式{}), (field_type为Checkbox ,field_option_source为CUSTOM时，value值是字符串数组[\\\"aaa\\\"]), (field_type为\"Checkbox\" ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json的数组[{},{}])
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
    * @param string|null $value 自定义字段值, (field_type为Date,Number,DateTime时,field_option_source为空，value值是数字的字符串)， (field_type为MultiLineText,SingleLineText时,field_option_source为空，value值是文本字符串)， (field_type为Select ,field_option_source为CUSTOM时，value值是文本字符串) (field_type为Select ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json格式{}), (field_type为Checkbox ,field_option_source为CUSTOM时，value值是字符串数组[\\\"aaa\\\"]), (field_type为\"Checkbox\" ,field_option_source为USER，DOMAIN，ITERATION，MODULE，TAG时，value值是Json的数组[{},{}])
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

