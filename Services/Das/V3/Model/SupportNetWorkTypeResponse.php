<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupportNetWorkTypeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupportNetWorkTypeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * netWork  网络类型
    * engineTypes  引擎类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'netWork' => 'string',
            'engineTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * netWork  网络类型
    * engineTypes  引擎类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'netWork' => null,
        'engineTypes' => null
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
    * netWork  网络类型
    * engineTypes  引擎类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'netWork' => 'net_work',
            'engineTypes' => 'engine_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * netWork  网络类型
    * engineTypes  引擎类型
    *
    * @var string[]
    */
    protected static $setters = [
            'netWork' => 'setNetWork',
            'engineTypes' => 'setEngineTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * netWork  网络类型
    * engineTypes  引擎类型
    *
    * @var string[]
    */
    protected static $getters = [
            'netWork' => 'getNetWork',
            'engineTypes' => 'getEngineTypes'
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
        $this->container['netWork'] = isset($data['netWork']) ? $data['netWork'] : null;
        $this->container['engineTypes'] = isset($data['engineTypes']) ? $data['engineTypes'] : null;
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
    * Gets netWork
    *  网络类型
    *
    * @return string|null
    */
    public function getNetWork()
    {
        return $this->container['netWork'];
    }

    /**
    * Sets netWork
    *
    * @param string|null $netWork 网络类型
    *
    * @return $this
    */
    public function setNetWork($netWork)
    {
        $this->container['netWork'] = $netWork;
        return $this;
    }

    /**
    * Gets engineTypes
    *  引擎类型
    *
    * @return string[]|null
    */
    public function getEngineTypes()
    {
        return $this->container['engineTypes'];
    }

    /**
    * Sets engineTypes
    *
    * @param string[]|null $engineTypes 引擎类型
    *
    * @return $this
    */
    public function setEngineTypes($engineTypes)
    {
        $this->container['engineTypes'] = $engineTypes;
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

