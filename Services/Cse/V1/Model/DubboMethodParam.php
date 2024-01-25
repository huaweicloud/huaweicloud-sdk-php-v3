<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DubboMethodParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DubboMethodParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramKey  参数键。
    * paramSource  参数来源。
    * paramType  参数类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramKey' => 'string',
            'paramSource' => 'string',
            'paramType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramKey  参数键。
    * paramSource  参数来源。
    * paramType  参数类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramKey' => null,
        'paramSource' => null,
        'paramType' => null
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
    * paramKey  参数键。
    * paramSource  参数来源。
    * paramType  参数类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramKey' => 'paramKey',
            'paramSource' => 'paramSource',
            'paramType' => 'paramType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramKey  参数键。
    * paramSource  参数来源。
    * paramType  参数类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'paramKey' => 'setParamKey',
            'paramSource' => 'setParamSource',
            'paramType' => 'setParamType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramKey  参数键。
    * paramSource  参数来源。
    * paramType  参数类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'paramKey' => 'getParamKey',
            'paramSource' => 'getParamSource',
            'paramType' => 'getParamType'
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
        $this->container['paramKey'] = isset($data['paramKey']) ? $data['paramKey'] : null;
        $this->container['paramSource'] = isset($data['paramSource']) ? $data['paramSource'] : null;
        $this->container['paramType'] = isset($data['paramType']) ? $data['paramType'] : null;
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
    * Gets paramKey
    *  参数键。
    *
    * @return string|null
    */
    public function getParamKey()
    {
        return $this->container['paramKey'];
    }

    /**
    * Sets paramKey
    *
    * @param string|null $paramKey 参数键。
    *
    * @return $this
    */
    public function setParamKey($paramKey)
    {
        $this->container['paramKey'] = $paramKey;
        return $this;
    }

    /**
    * Gets paramSource
    *  参数来源。
    *
    * @return string|null
    */
    public function getParamSource()
    {
        return $this->container['paramSource'];
    }

    /**
    * Sets paramSource
    *
    * @param string|null $paramSource 参数来源。
    *
    * @return $this
    */
    public function setParamSource($paramSource)
    {
        $this->container['paramSource'] = $paramSource;
        return $this;
    }

    /**
    * Gets paramType
    *  参数类型。
    *
    * @return string|null
    */
    public function getParamType()
    {
        return $this->container['paramType'];
    }

    /**
    * Sets paramType
    *
    * @param string|null $paramType 参数类型。
    *
    * @return $this
    */
    public function setParamType($paramType)
    {
        $this->container['paramType'] = $paramType;
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

