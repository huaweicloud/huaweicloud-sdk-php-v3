<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtraDhcpOpt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtraDhcpOpt';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * optName  Option名称。
    * optValue  Option值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'optName' => 'string',
            'optValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * optName  Option名称。
    * optValue  Option值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'optName' => null,
        'optValue' => null
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
    * optName  Option名称。
    * optValue  Option值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'optName' => 'opt_name',
            'optValue' => 'opt_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * optName  Option名称。
    * optValue  Option值。
    *
    * @var string[]
    */
    protected static $setters = [
            'optName' => 'setOptName',
            'optValue' => 'setOptValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * optName  Option名称。
    * optValue  Option值。
    *
    * @var string[]
    */
    protected static $getters = [
            'optName' => 'getOptName',
            'optValue' => 'getOptValue'
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
        $this->container['optName'] = isset($data['optName']) ? $data['optName'] : null;
        $this->container['optValue'] = isset($data['optValue']) ? $data['optValue'] : null;
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
    * Gets optName
    *  Option名称。
    *
    * @return string|null
    */
    public function getOptName()
    {
        return $this->container['optName'];
    }

    /**
    * Sets optName
    *
    * @param string|null $optName Option名称。
    *
    * @return $this
    */
    public function setOptName($optName)
    {
        $this->container['optName'] = $optName;
        return $this;
    }

    /**
    * Gets optValue
    *  Option值。
    *
    * @return string|null
    */
    public function getOptValue()
    {
        return $this->container['optValue'];
    }

    /**
    * Sets optValue
    *
    * @param string|null $optValue Option值。
    *
    * @return $this
    */
    public function setOptValue($optValue)
    {
        $this->container['optValue'] = $optValue;
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

