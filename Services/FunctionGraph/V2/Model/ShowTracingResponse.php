<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTracingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTracingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tracingAk  apm的ak
    * tracingSk  apm的sk
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tracingAk' => 'string',
            'tracingSk' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tracingAk  apm的ak
    * tracingSk  apm的sk
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tracingAk' => null,
        'tracingSk' => null
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
    * tracingAk  apm的ak
    * tracingSk  apm的sk
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tracingAk' => 'tracing_ak',
            'tracingSk' => 'tracing_sk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tracingAk  apm的ak
    * tracingSk  apm的sk
    *
    * @var string[]
    */
    protected static $setters = [
            'tracingAk' => 'setTracingAk',
            'tracingSk' => 'setTracingSk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tracingAk  apm的ak
    * tracingSk  apm的sk
    *
    * @var string[]
    */
    protected static $getters = [
            'tracingAk' => 'getTracingAk',
            'tracingSk' => 'getTracingSk'
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
        $this->container['tracingAk'] = isset($data['tracingAk']) ? $data['tracingAk'] : null;
        $this->container['tracingSk'] = isset($data['tracingSk']) ? $data['tracingSk'] : null;
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
    * Gets tracingAk
    *  apm的ak
    *
    * @return string|null
    */
    public function getTracingAk()
    {
        return $this->container['tracingAk'];
    }

    /**
    * Sets tracingAk
    *
    * @param string|null $tracingAk apm的ak
    *
    * @return $this
    */
    public function setTracingAk($tracingAk)
    {
        $this->container['tracingAk'] = $tracingAk;
        return $this;
    }

    /**
    * Gets tracingSk
    *  apm的sk
    *
    * @return string|null
    */
    public function getTracingSk()
    {
        return $this->container['tracingSk'];
    }

    /**
    * Sets tracingSk
    *
    * @param string|null $tracingSk apm的sk
    *
    * @return $this
    */
    public function setTracingSk($tracingSk)
    {
        $this->container['tracingSk'] = $tracingSk;
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

