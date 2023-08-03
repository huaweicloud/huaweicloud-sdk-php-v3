<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDependenciesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDependenciesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dependencies  依赖包列表
    * nextMarker  下次读取位置
    * count  依赖包总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dependencies' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\ListDependenciesResult[]',
            'nextMarker' => 'int',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dependencies  依赖包列表
    * nextMarker  下次读取位置
    * count  依赖包总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dependencies' => null,
        'nextMarker' => 'int64',
        'count' => 'int64'
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
    * dependencies  依赖包列表
    * nextMarker  下次读取位置
    * count  依赖包总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dependencies' => 'dependencies',
            'nextMarker' => 'next_marker',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dependencies  依赖包列表
    * nextMarker  下次读取位置
    * count  依赖包总数
    *
    * @var string[]
    */
    protected static $setters = [
            'dependencies' => 'setDependencies',
            'nextMarker' => 'setNextMarker',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dependencies  依赖包列表
    * nextMarker  下次读取位置
    * count  依赖包总数
    *
    * @var string[]
    */
    protected static $getters = [
            'dependencies' => 'getDependencies',
            'nextMarker' => 'getNextMarker',
            'count' => 'getCount'
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
        $this->container['dependencies'] = isset($data['dependencies']) ? $data['dependencies'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets dependencies
    *  依赖包列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\ListDependenciesResult[]|null
    */
    public function getDependencies()
    {
        return $this->container['dependencies'];
    }

    /**
    * Sets dependencies
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\ListDependenciesResult[]|null $dependencies 依赖包列表
    *
    * @return $this
    */
    public function setDependencies($dependencies)
    {
        $this->container['dependencies'] = $dependencies;
        return $this;
    }

    /**
    * Gets nextMarker
    *  下次读取位置
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
    * @param int|null $nextMarker 下次读取位置
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
        return $this;
    }

    /**
    * Gets count
    *  依赖包总数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 依赖包总数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

