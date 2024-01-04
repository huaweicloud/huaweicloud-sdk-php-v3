<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationRisks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'configurationRisks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * package  组件名称
    * sourceFile  涉及文件路径
    * nodeMsg  节点信息
    * field  参数值
    * operation  修改操作类型
    * originalValue  原始值
    * value  当前值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'package' => 'string',
            'sourceFile' => 'string',
            'nodeMsg' => 'string',
            'field' => 'string',
            'operation' => 'string',
            'originalValue' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * package  组件名称
    * sourceFile  涉及文件路径
    * nodeMsg  节点信息
    * field  参数值
    * operation  修改操作类型
    * originalValue  原始值
    * value  当前值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'package' => null,
        'sourceFile' => null,
        'nodeMsg' => null,
        'field' => null,
        'operation' => null,
        'originalValue' => null,
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
    * package  组件名称
    * sourceFile  涉及文件路径
    * nodeMsg  节点信息
    * field  参数值
    * operation  修改操作类型
    * originalValue  原始值
    * value  当前值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'package' => 'package',
            'sourceFile' => 'sourceFile',
            'nodeMsg' => 'nodeMsg',
            'field' => 'field',
            'operation' => 'operation',
            'originalValue' => 'originalValue',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * package  组件名称
    * sourceFile  涉及文件路径
    * nodeMsg  节点信息
    * field  参数值
    * operation  修改操作类型
    * originalValue  原始值
    * value  当前值
    *
    * @var string[]
    */
    protected static $setters = [
            'package' => 'setPackage',
            'sourceFile' => 'setSourceFile',
            'nodeMsg' => 'setNodeMsg',
            'field' => 'setField',
            'operation' => 'setOperation',
            'originalValue' => 'setOriginalValue',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * package  组件名称
    * sourceFile  涉及文件路径
    * nodeMsg  节点信息
    * field  参数值
    * operation  修改操作类型
    * originalValue  原始值
    * value  当前值
    *
    * @var string[]
    */
    protected static $getters = [
            'package' => 'getPackage',
            'sourceFile' => 'getSourceFile',
            'nodeMsg' => 'getNodeMsg',
            'field' => 'getField',
            'operation' => 'getOperation',
            'originalValue' => 'getOriginalValue',
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
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['sourceFile'] = isset($data['sourceFile']) ? $data['sourceFile'] : null;
        $this->container['nodeMsg'] = isset($data['nodeMsg']) ? $data['nodeMsg'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['originalValue'] = isset($data['originalValue']) ? $data['originalValue'] : null;
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
    * Gets package
    *  组件名称
    *
    * @return string|null
    */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
    * Sets package
    *
    * @param string|null $package 组件名称
    *
    * @return $this
    */
    public function setPackage($package)
    {
        $this->container['package'] = $package;
        return $this;
    }

    /**
    * Gets sourceFile
    *  涉及文件路径
    *
    * @return string|null
    */
    public function getSourceFile()
    {
        return $this->container['sourceFile'];
    }

    /**
    * Sets sourceFile
    *
    * @param string|null $sourceFile 涉及文件路径
    *
    * @return $this
    */
    public function setSourceFile($sourceFile)
    {
        $this->container['sourceFile'] = $sourceFile;
        return $this;
    }

    /**
    * Gets nodeMsg
    *  节点信息
    *
    * @return string|null
    */
    public function getNodeMsg()
    {
        return $this->container['nodeMsg'];
    }

    /**
    * Sets nodeMsg
    *
    * @param string|null $nodeMsg 节点信息
    *
    * @return $this
    */
    public function setNodeMsg($nodeMsg)
    {
        $this->container['nodeMsg'] = $nodeMsg;
        return $this;
    }

    /**
    * Gets field
    *  参数值
    *
    * @return string|null
    */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
    * Sets field
    *
    * @param string|null $field 参数值
    *
    * @return $this
    */
    public function setField($field)
    {
        $this->container['field'] = $field;
        return $this;
    }

    /**
    * Gets operation
    *  修改操作类型
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 修改操作类型
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets originalValue
    *  原始值
    *
    * @return string|null
    */
    public function getOriginalValue()
    {
        return $this->container['originalValue'];
    }

    /**
    * Sets originalValue
    *
    * @param string|null $originalValue 原始值
    *
    * @return $this
    */
    public function setOriginalValue($originalValue)
    {
        $this->container['originalValue'] = $originalValue;
        return $this;
    }

    /**
    * Gets value
    *  当前值
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
    * @param string|null $value 当前值
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

