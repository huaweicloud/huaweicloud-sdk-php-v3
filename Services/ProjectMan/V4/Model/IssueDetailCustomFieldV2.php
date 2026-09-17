<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueDetailCustomFieldV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueDetailCustomFieldV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customField  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * fieldName  **参数解释：** 自定义字段名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 自定义属性对应的值，多个值以英文逗号区分开。 **取值范围：** 不涉及。
    * fieldType  **参数解释：** 自定义字段类型。 **取值范围：** textArea 多行文本 text 单行文本 select 下拉框 number 数字 time_date 日期 checkbox 多选框 radio 单选框。
    * description  **参数解释：** 自定义字段描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customField' => 'string',
            'fieldName' => 'string',
            'value' => 'string',
            'fieldType' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customField  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * fieldName  **参数解释：** 自定义字段名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 自定义属性对应的值，多个值以英文逗号区分开。 **取值范围：** 不涉及。
    * fieldType  **参数解释：** 自定义字段类型。 **取值范围：** textArea 多行文本 text 单行文本 select 下拉框 number 数字 time_date 日期 checkbox 多选框 radio 单选框。
    * description  **参数解释：** 自定义字段描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customField' => null,
        'fieldName' => null,
        'value' => null,
        'fieldType' => null,
        'description' => null
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
    * customField  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * fieldName  **参数解释：** 自定义字段名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 自定义属性对应的值，多个值以英文逗号区分开。 **取值范围：** 不涉及。
    * fieldType  **参数解释：** 自定义字段类型。 **取值范围：** textArea 多行文本 text 单行文本 select 下拉框 number 数字 time_date 日期 checkbox 多选框 radio 单选框。
    * description  **参数解释：** 自定义字段描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customField' => 'custom_field',
            'fieldName' => 'field_name',
            'value' => 'value',
            'fieldType' => 'field_type',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customField  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * fieldName  **参数解释：** 自定义字段名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 自定义属性对应的值，多个值以英文逗号区分开。 **取值范围：** 不涉及。
    * fieldType  **参数解释：** 自定义字段类型。 **取值范围：** textArea 多行文本 text 单行文本 select 下拉框 number 数字 time_date 日期 checkbox 多选框 radio 单选框。
    * description  **参数解释：** 自定义字段描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'customField' => 'setCustomField',
            'fieldName' => 'setFieldName',
            'value' => 'setValue',
            'fieldType' => 'setFieldType',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customField  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    * fieldName  **参数解释：** 自定义字段名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 自定义属性对应的值，多个值以英文逗号区分开。 **取值范围：** 不涉及。
    * fieldType  **参数解释：** 自定义字段类型。 **取值范围：** textArea 多行文本 text 单行文本 select 下拉框 number 数字 time_date 日期 checkbox 多选框 radio 单选框。
    * description  **参数解释：** 自定义字段描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'customField' => 'getCustomField',
            'fieldName' => 'getFieldName',
            'value' => 'getValue',
            'fieldType' => 'getFieldType',
            'description' => 'getDescription'
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
        $this->container['customField'] = isset($data['customField']) ? $data['customField'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['customField']) && (mb_strlen($this->container['customField']) > 30)) {
                $invalidProperties[] = "invalid value for 'customField', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['customField']) && (mb_strlen($this->container['customField']) < 2)) {
                $invalidProperties[] = "invalid value for 'customField', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['fieldName']) && (mb_strlen($this->container['fieldName']) > 30)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['fieldName']) && (mb_strlen($this->container['fieldName']) < 2)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 32)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 2)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['fieldType']) && (mb_strlen($this->container['fieldType']) > 30)) {
                $invalidProperties[] = "invalid value for 'fieldType', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['fieldType']) && (mb_strlen($this->container['fieldType']) < 2)) {
                $invalidProperties[] = "invalid value for 'fieldType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets customField
    *  **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCustomField()
    {
        return $this->container['customField'];
    }

    /**
    * Sets customField
    *
    * @param string|null $customField **参数解释：** 自定义字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCustomField($customField)
    {
        $this->container['customField'] = $customField;
        return $this;
    }

    /**
    * Gets fieldName
    *  **参数解释：** 自定义字段名称。 **取值范围：** 不涉及。
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
    * @param string|null $fieldName **参数解释：** 自定义字段名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释：** 自定义属性对应的值，多个值以英文逗号区分开。 **取值范围：** 不涉及。
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
    * @param string|null $value **参数解释：** 自定义属性对应的值，多个值以英文逗号区分开。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets fieldType
    *  **参数解释：** 自定义字段类型。 **取值范围：** textArea 多行文本 text 单行文本 select 下拉框 number 数字 time_date 日期 checkbox 多选框 radio 单选框。
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
    * @param string|null $fieldType **参数解释：** 自定义字段类型。 **取值范围：** textArea 多行文本 text 单行文本 select 下拉框 number 数字 time_date 日期 checkbox 多选框 radio 单选框。
    *
    * @return $this
    */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 自定义字段描述。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 自定义字段描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

