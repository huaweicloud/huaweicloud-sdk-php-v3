<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyReadAndWriteStrategyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyReadAndWriteStrategyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * readWeight  主数据库实例与只读数据库实例的读权重集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'readWeight' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * readWeight  主数据库实例与只读数据库实例的读权重集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'readWeight' => null
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
    * readWeight  主数据库实例与只读数据库实例的读权重集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'readWeight' => 'read_weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * readWeight  主数据库实例与只读数据库实例的读权重集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'readWeight' => 'setReadWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * readWeight  主数据库实例与只读数据库实例的读权重集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'readWeight' => 'getReadWeight'
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
        $this->container['readWeight'] = isset($data['readWeight']) ? $data['readWeight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['readWeight'] === null) {
            $invalidProperties[] = "'readWeight' can't be null";
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
    * Gets readWeight
    *  主数据库实例与只读数据库实例的读权重集合。
    *
    * @return object
    */
    public function getReadWeight()
    {
        return $this->container['readWeight'];
    }

    /**
    * Sets readWeight
    *
    * @param object $readWeight 主数据库实例与只读数据库实例的读权重集合。
    *
    * @return $this
    */
    public function setReadWeight($readWeight)
    {
        $this->container['readWeight'] = $readWeight;
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

