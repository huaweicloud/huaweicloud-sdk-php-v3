<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MappingSourceFieldVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MappingSourceFieldVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetFieldId  目标字段ID，当前表的某个字段，ID字符串。
    * targetFieldName  目标字段编码。
    * fieldIds  来源字段ID，多个ID以逗号分隔。
    * transformExpression  转换表达式。
    * fieldNames  来源字段名称列表。
    * changed  字段是否发生变化。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetFieldId' => 'string',
            'targetFieldName' => 'string',
            'fieldIds' => 'string',
            'transformExpression' => 'string',
            'fieldNames' => 'string[]',
            'changed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetFieldId  目标字段ID，当前表的某个字段，ID字符串。
    * targetFieldName  目标字段编码。
    * fieldIds  来源字段ID，多个ID以逗号分隔。
    * transformExpression  转换表达式。
    * fieldNames  来源字段名称列表。
    * changed  字段是否发生变化。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetFieldId' => null,
        'targetFieldName' => null,
        'fieldIds' => null,
        'transformExpression' => null,
        'fieldNames' => null,
        'changed' => null
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
    * targetFieldId  目标字段ID，当前表的某个字段，ID字符串。
    * targetFieldName  目标字段编码。
    * fieldIds  来源字段ID，多个ID以逗号分隔。
    * transformExpression  转换表达式。
    * fieldNames  来源字段名称列表。
    * changed  字段是否发生变化。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetFieldId' => 'target_field_id',
            'targetFieldName' => 'target_field_name',
            'fieldIds' => 'field_ids',
            'transformExpression' => 'transform_expression',
            'fieldNames' => 'field_names',
            'changed' => 'changed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetFieldId  目标字段ID，当前表的某个字段，ID字符串。
    * targetFieldName  目标字段编码。
    * fieldIds  来源字段ID，多个ID以逗号分隔。
    * transformExpression  转换表达式。
    * fieldNames  来源字段名称列表。
    * changed  字段是否发生变化。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetFieldId' => 'setTargetFieldId',
            'targetFieldName' => 'setTargetFieldName',
            'fieldIds' => 'setFieldIds',
            'transformExpression' => 'setTransformExpression',
            'fieldNames' => 'setFieldNames',
            'changed' => 'setChanged'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetFieldId  目标字段ID，当前表的某个字段，ID字符串。
    * targetFieldName  目标字段编码。
    * fieldIds  来源字段ID，多个ID以逗号分隔。
    * transformExpression  转换表达式。
    * fieldNames  来源字段名称列表。
    * changed  字段是否发生变化。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetFieldId' => 'getTargetFieldId',
            'targetFieldName' => 'getTargetFieldName',
            'fieldIds' => 'getFieldIds',
            'transformExpression' => 'getTransformExpression',
            'fieldNames' => 'getFieldNames',
            'changed' => 'getChanged'
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
        $this->container['targetFieldId'] = isset($data['targetFieldId']) ? $data['targetFieldId'] : null;
        $this->container['targetFieldName'] = isset($data['targetFieldName']) ? $data['targetFieldName'] : null;
        $this->container['fieldIds'] = isset($data['fieldIds']) ? $data['fieldIds'] : null;
        $this->container['transformExpression'] = isset($data['transformExpression']) ? $data['transformExpression'] : null;
        $this->container['fieldNames'] = isset($data['fieldNames']) ? $data['fieldNames'] : null;
        $this->container['changed'] = isset($data['changed']) ? $data['changed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetFieldName'] === null) {
            $invalidProperties[] = "'targetFieldName' can't be null";
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
    * Gets targetFieldId
    *  目标字段ID，当前表的某个字段，ID字符串。
    *
    * @return string|null
    */
    public function getTargetFieldId()
    {
        return $this->container['targetFieldId'];
    }

    /**
    * Sets targetFieldId
    *
    * @param string|null $targetFieldId 目标字段ID，当前表的某个字段，ID字符串。
    *
    * @return $this
    */
    public function setTargetFieldId($targetFieldId)
    {
        $this->container['targetFieldId'] = $targetFieldId;
        return $this;
    }

    /**
    * Gets targetFieldName
    *  目标字段编码。
    *
    * @return string
    */
    public function getTargetFieldName()
    {
        return $this->container['targetFieldName'];
    }

    /**
    * Sets targetFieldName
    *
    * @param string $targetFieldName 目标字段编码。
    *
    * @return $this
    */
    public function setTargetFieldName($targetFieldName)
    {
        $this->container['targetFieldName'] = $targetFieldName;
        return $this;
    }

    /**
    * Gets fieldIds
    *  来源字段ID，多个ID以逗号分隔。
    *
    * @return string|null
    */
    public function getFieldIds()
    {
        return $this->container['fieldIds'];
    }

    /**
    * Sets fieldIds
    *
    * @param string|null $fieldIds 来源字段ID，多个ID以逗号分隔。
    *
    * @return $this
    */
    public function setFieldIds($fieldIds)
    {
        $this->container['fieldIds'] = $fieldIds;
        return $this;
    }

    /**
    * Gets transformExpression
    *  转换表达式。
    *
    * @return string|null
    */
    public function getTransformExpression()
    {
        return $this->container['transformExpression'];
    }

    /**
    * Sets transformExpression
    *
    * @param string|null $transformExpression 转换表达式。
    *
    * @return $this
    */
    public function setTransformExpression($transformExpression)
    {
        $this->container['transformExpression'] = $transformExpression;
        return $this;
    }

    /**
    * Gets fieldNames
    *  来源字段名称列表。
    *
    * @return string[]|null
    */
    public function getFieldNames()
    {
        return $this->container['fieldNames'];
    }

    /**
    * Sets fieldNames
    *
    * @param string[]|null $fieldNames 来源字段名称列表。
    *
    * @return $this
    */
    public function setFieldNames($fieldNames)
    {
        $this->container['fieldNames'] = $fieldNames;
        return $this;
    }

    /**
    * Gets changed
    *  字段是否发生变化。
    *
    * @return bool|null
    */
    public function getChanged()
    {
        return $this->container['changed'];
    }

    /**
    * Sets changed
    *
    * @param bool|null $changed 字段是否发生变化。
    *
    * @return $this
    */
    public function setChanged($changed)
    {
        $this->container['changed'] = $changed;
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

