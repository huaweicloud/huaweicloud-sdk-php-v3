<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedisConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedisConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramValue  实例配置项的值。
    * paramName  实例配置项名。
    * paramId  实例配置项ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramValue' => 'string',
            'paramName' => 'string',
            'paramId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramValue  实例配置项的值。
    * paramName  实例配置项名。
    * paramId  实例配置项ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramValue' => null,
        'paramName' => null,
        'paramId' => null
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
    * paramValue  实例配置项的值。
    * paramName  实例配置项名。
    * paramId  实例配置项ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramValue' => 'param_value',
            'paramName' => 'param_name',
            'paramId' => 'param_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramValue  实例配置项的值。
    * paramName  实例配置项名。
    * paramId  实例配置项ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramValue' => 'setParamValue',
            'paramName' => 'setParamName',
            'paramId' => 'setParamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramValue  实例配置项的值。
    * paramName  实例配置项名。
    * paramId  实例配置项ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramValue' => 'getParamValue',
            'paramName' => 'getParamName',
            'paramId' => 'getParamId'
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
        $this->container['paramValue'] = isset($data['paramValue']) ? $data['paramValue'] : null;
        $this->container['paramName'] = isset($data['paramName']) ? $data['paramName'] : null;
        $this->container['paramId'] = isset($data['paramId']) ? $data['paramId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['paramValue'] === null) {
            $invalidProperties[] = "'paramValue' can't be null";
        }
        if ($this->container['paramName'] === null) {
            $invalidProperties[] = "'paramName' can't be null";
        }
        if ($this->container['paramId'] === null) {
            $invalidProperties[] = "'paramId' can't be null";
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
    * Gets paramValue
    *  实例配置项的值。
    *
    * @return string
    */
    public function getParamValue()
    {
        return $this->container['paramValue'];
    }

    /**
    * Sets paramValue
    *
    * @param string $paramValue 实例配置项的值。
    *
    * @return $this
    */
    public function setParamValue($paramValue)
    {
        $this->container['paramValue'] = $paramValue;
        return $this;
    }

    /**
    * Gets paramName
    *  实例配置项名。
    *
    * @return string
    */
    public function getParamName()
    {
        return $this->container['paramName'];
    }

    /**
    * Sets paramName
    *
    * @param string $paramName 实例配置项名。
    *
    * @return $this
    */
    public function setParamName($paramName)
    {
        $this->container['paramName'] = $paramName;
        return $this;
    }

    /**
    * Gets paramId
    *  实例配置项ID。
    *
    * @return string
    */
    public function getParamId()
    {
        return $this->container['paramId'];
    }

    /**
    * Sets paramId
    *
    * @param string $paramId 实例配置项ID。
    *
    * @return $this
    */
    public function setParamId($paramId)
    {
        $this->container['paramId'] = $paramId;
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

