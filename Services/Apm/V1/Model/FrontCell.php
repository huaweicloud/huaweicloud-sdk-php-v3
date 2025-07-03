<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FrontCell implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FrontCell';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataType  数据类型。
    * function  函数。
    * trace  是否调用链。
    * span  是否是span信息，如果是就跳到调用链搜索页面。
    * spanField  span字段。
    * precision  小数点位数。
    * text  文本信息。
    * unit  单位。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataType' => 'string',
            'function' => 'string',
            'trace' => 'bool',
            'span' => 'bool',
            'spanField' => 'string',
            'precision' => 'int',
            'text' => 'string',
            'unit' => 'string',
            'visible' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataType  数据类型。
    * function  函数。
    * trace  是否调用链。
    * span  是否是span信息，如果是就跳到调用链搜索页面。
    * spanField  span字段。
    * precision  小数点位数。
    * text  文本信息。
    * unit  单位。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataType' => null,
        'function' => null,
        'trace' => null,
        'span' => null,
        'spanField' => null,
        'precision' => 'int32',
        'text' => null,
        'unit' => null,
        'visible' => null
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
    * dataType  数据类型。
    * function  函数。
    * trace  是否调用链。
    * span  是否是span信息，如果是就跳到调用链搜索页面。
    * spanField  span字段。
    * precision  小数点位数。
    * text  文本信息。
    * unit  单位。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataType' => 'data_type',
            'function' => 'function',
            'trace' => 'trace',
            'span' => 'span',
            'spanField' => 'span_field',
            'precision' => 'precision',
            'text' => 'text',
            'unit' => 'unit',
            'visible' => 'visible'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataType  数据类型。
    * function  函数。
    * trace  是否调用链。
    * span  是否是span信息，如果是就跳到调用链搜索页面。
    * spanField  span字段。
    * precision  小数点位数。
    * text  文本信息。
    * unit  单位。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataType' => 'setDataType',
            'function' => 'setFunction',
            'trace' => 'setTrace',
            'span' => 'setSpan',
            'spanField' => 'setSpanField',
            'precision' => 'setPrecision',
            'text' => 'setText',
            'unit' => 'setUnit',
            'visible' => 'setVisible'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataType  数据类型。
    * function  函数。
    * trace  是否调用链。
    * span  是否是span信息，如果是就跳到调用链搜索页面。
    * spanField  span字段。
    * precision  小数点位数。
    * text  文本信息。
    * unit  单位。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataType' => 'getDataType',
            'function' => 'getFunction',
            'trace' => 'getTrace',
            'span' => 'getSpan',
            'spanField' => 'getSpanField',
            'precision' => 'getPrecision',
            'text' => 'getText',
            'unit' => 'getUnit',
            'visible' => 'getVisible'
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
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['trace'] = isset($data['trace']) ? $data['trace'] : null;
        $this->container['span'] = isset($data['span']) ? $data['span'] : null;
        $this->container['spanField'] = isset($data['spanField']) ? $data['spanField'] : null;
        $this->container['precision'] = isset($data['precision']) ? $data['precision'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
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
    * Gets dataType
    *  数据类型。
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 数据类型。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets function
    *  函数。
    *
    * @return string|null
    */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
    * Sets function
    *
    * @param string|null $function 函数。
    *
    * @return $this
    */
    public function setFunction($function)
    {
        $this->container['function'] = $function;
        return $this;
    }

    /**
    * Gets trace
    *  是否调用链。
    *
    * @return bool|null
    */
    public function getTrace()
    {
        return $this->container['trace'];
    }

    /**
    * Sets trace
    *
    * @param bool|null $trace 是否调用链。
    *
    * @return $this
    */
    public function setTrace($trace)
    {
        $this->container['trace'] = $trace;
        return $this;
    }

    /**
    * Gets span
    *  是否是span信息，如果是就跳到调用链搜索页面。
    *
    * @return bool|null
    */
    public function getSpan()
    {
        return $this->container['span'];
    }

    /**
    * Sets span
    *
    * @param bool|null $span 是否是span信息，如果是就跳到调用链搜索页面。
    *
    * @return $this
    */
    public function setSpan($span)
    {
        $this->container['span'] = $span;
        return $this;
    }

    /**
    * Gets spanField
    *  span字段。
    *
    * @return string|null
    */
    public function getSpanField()
    {
        return $this->container['spanField'];
    }

    /**
    * Sets spanField
    *
    * @param string|null $spanField span字段。
    *
    * @return $this
    */
    public function setSpanField($spanField)
    {
        $this->container['spanField'] = $spanField;
        return $this;
    }

    /**
    * Gets precision
    *  小数点位数。
    *
    * @return int|null
    */
    public function getPrecision()
    {
        return $this->container['precision'];
    }

    /**
    * Sets precision
    *
    * @param int|null $precision 小数点位数。
    *
    * @return $this
    */
    public function setPrecision($precision)
    {
        $this->container['precision'] = $precision;
        return $this;
    }

    /**
    * Gets text
    *  文本信息。
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text 文本信息。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets unit
    *  单位。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 单位。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets visible
    *  是否可见。
    *
    * @return bool|null
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param bool|null $visible 是否可见。
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
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

