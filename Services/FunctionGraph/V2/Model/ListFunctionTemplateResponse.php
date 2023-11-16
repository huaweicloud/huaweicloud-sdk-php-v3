<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFunctionTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFunctionTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * funcTemplates  函数模板列表
    * nextMarker  函数下次记录读取位置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'funcTemplates' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\ShowFunctionTemplateResponseBody[]',
            'nextMarker' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * funcTemplates  函数模板列表
    * nextMarker  函数下次记录读取位置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'funcTemplates' => null,
        'nextMarker' => 'int32'
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
    * funcTemplates  函数模板列表
    * nextMarker  函数下次记录读取位置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'funcTemplates' => 'func_templates',
            'nextMarker' => 'next_marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * funcTemplates  函数模板列表
    * nextMarker  函数下次记录读取位置。
    *
    * @var string[]
    */
    protected static $setters = [
            'funcTemplates' => 'setFuncTemplates',
            'nextMarker' => 'setNextMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * funcTemplates  函数模板列表
    * nextMarker  函数下次记录读取位置。
    *
    * @var string[]
    */
    protected static $getters = [
            'funcTemplates' => 'getFuncTemplates',
            'nextMarker' => 'getNextMarker'
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
        $this->container['funcTemplates'] = isset($data['funcTemplates']) ? $data['funcTemplates'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
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
    * Gets funcTemplates
    *  函数模板列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\ShowFunctionTemplateResponseBody[]|null
    */
    public function getFuncTemplates()
    {
        return $this->container['funcTemplates'];
    }

    /**
    * Sets funcTemplates
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\ShowFunctionTemplateResponseBody[]|null $funcTemplates 函数模板列表
    *
    * @return $this
    */
    public function setFuncTemplates($funcTemplates)
    {
        $this->container['funcTemplates'] = $funcTemplates;
        return $this;
    }

    /**
    * Gets nextMarker
    *  函数下次记录读取位置。
    *
    * @return int|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param int|null $nextMarker 函数下次记录读取位置。
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
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

