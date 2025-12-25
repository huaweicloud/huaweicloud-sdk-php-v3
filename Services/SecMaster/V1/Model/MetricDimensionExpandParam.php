<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricDimensionExpandParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricDimensionExpandParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * labels  维度扩充标签
    * functions  维度扩充方法，填写指标数据面内置方法， 参数index从1开始
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'labels' => 'string[]',
            'functions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * labels  维度扩充标签
    * functions  维度扩充方法，填写指标数据面内置方法， 参数index从1开始
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'labels' => null,
        'functions' => null
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
    * labels  维度扩充标签
    * functions  维度扩充方法，填写指标数据面内置方法， 参数index从1开始
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'labels' => 'labels',
            'functions' => 'functions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * labels  维度扩充标签
    * functions  维度扩充方法，填写指标数据面内置方法， 参数index从1开始
    *
    * @var string[]
    */
    protected static $setters = [
            'labels' => 'setLabels',
            'functions' => 'setFunctions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * labels  维度扩充标签
    * functions  维度扩充方法，填写指标数据面内置方法， 参数index从1开始
    *
    * @var string[]
    */
    protected static $getters = [
            'labels' => 'getLabels',
            'functions' => 'getFunctions'
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
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['functions'] = isset($data['functions']) ? $data['functions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['functions'] === null) {
            $invalidProperties[] = "'functions' can't be null";
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
    * Gets labels
    *  维度扩充标签
    *
    * @return string[]
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[] $labels 维度扩充标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets functions
    *  维度扩充方法，填写指标数据面内置方法， 参数index从1开始
    *
    * @return string[]
    */
    public function getFunctions()
    {
        return $this->container['functions'];
    }

    /**
    * Sets functions
    *
    * @param string[] $functions 维度扩充方法，填写指标数据面内置方法， 参数index从1开始
    *
    * @return $this
    */
    public function setFunctions($functions)
    {
        $this->container['functions'] = $functions;
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

