<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DirectedEdgePair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DirectedEdgePair';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgePair  分支网络连接的两个端点定义，可能为两个点，也可能为两个单向边，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgePair' => '\HuaweiCloud\SDK\Cc\V3\Model\DirectedEdge[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgePair  分支网络连接的两个端点定义，可能为两个点，也可能为两个单向边，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgePair' => null
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
    * edgePair  分支网络连接的两个端点定义，可能为两个点，也可能为两个单向边，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgePair' => 'edge_pair'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgePair  分支网络连接的两个端点定义，可能为两个点，也可能为两个单向边，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'edgePair' => 'setEdgePair'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgePair  分支网络连接的两个端点定义，可能为两个点，也可能为两个单向边，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'edgePair' => 'getEdgePair'
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
        $this->container['edgePair'] = isset($data['edgePair']) ? $data['edgePair'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['edgePair'] === null) {
            $invalidProperties[] = "'edgePair' can't be null";
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
    * Gets edgePair
    *  分支网络连接的两个端点定义，可能为两个点，也可能为两个单向边，长度固定为2的数组。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\DirectedEdge[]
    */
    public function getEdgePair()
    {
        return $this->container['edgePair'];
    }

    /**
    * Sets edgePair
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\DirectedEdge[] $edgePair 分支网络连接的两个端点定义，可能为两个点，也可能为两个单向边，长度固定为2的数组。
    *
    * @return $this
    */
    public function setEdgePair($edgePair)
    {
        $this->container['edgePair'] = $edgePair;
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

