<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Condition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Condition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * preNodeName  本节点依赖的前一个节点名称
    * expression  EL表达式，如果EL表达式的计算结果为true，则触发执行本节点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'preNodeName' => 'string',
            'expression' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * preNodeName  本节点依赖的前一个节点名称
    * expression  EL表达式，如果EL表达式的计算结果为true，则触发执行本节点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'preNodeName' => null,
        'expression' => null
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
    * preNodeName  本节点依赖的前一个节点名称
    * expression  EL表达式，如果EL表达式的计算结果为true，则触发执行本节点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'preNodeName' => 'pre_node_name',
            'expression' => 'expression'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * preNodeName  本节点依赖的前一个节点名称
    * expression  EL表达式，如果EL表达式的计算结果为true，则触发执行本节点。
    *
    * @var string[]
    */
    protected static $setters = [
            'preNodeName' => 'setPreNodeName',
            'expression' => 'setExpression'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * preNodeName  本节点依赖的前一个节点名称
    * expression  EL表达式，如果EL表达式的计算结果为true，则触发执行本节点。
    *
    * @var string[]
    */
    protected static $getters = [
            'preNodeName' => 'getPreNodeName',
            'expression' => 'getExpression'
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
        $this->container['preNodeName'] = isset($data['preNodeName']) ? $data['preNodeName'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
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
    * Gets preNodeName
    *  本节点依赖的前一个节点名称
    *
    * @return string|null
    */
    public function getPreNodeName()
    {
        return $this->container['preNodeName'];
    }

    /**
    * Sets preNodeName
    *
    * @param string|null $preNodeName 本节点依赖的前一个节点名称
    *
    * @return $this
    */
    public function setPreNodeName($preNodeName)
    {
        $this->container['preNodeName'] = $preNodeName;
        return $this;
    }

    /**
    * Gets expression
    *  EL表达式，如果EL表达式的计算结果为true，则触发执行本节点。
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression EL表达式，如果EL表达式的计算结果为true，则触发执行本节点。
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
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

