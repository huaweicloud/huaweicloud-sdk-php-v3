<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FuncAsyncDestinationConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FuncAsyncDestinationConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * onSuccess  onSuccess
    * onFailure  onFailure
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'onSuccess' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncDestinationConfig',
            'onFailure' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncDestinationConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * onSuccess  onSuccess
    * onFailure  onFailure
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'onSuccess' => null,
        'onFailure' => null
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
    * onSuccess  onSuccess
    * onFailure  onFailure
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'onSuccess' => 'on_success',
            'onFailure' => 'on_failure'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * onSuccess  onSuccess
    * onFailure  onFailure
    *
    * @var string[]
    */
    protected static $setters = [
            'onSuccess' => 'setOnSuccess',
            'onFailure' => 'setOnFailure'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * onSuccess  onSuccess
    * onFailure  onFailure
    *
    * @var string[]
    */
    protected static $getters = [
            'onSuccess' => 'getOnSuccess',
            'onFailure' => 'getOnFailure'
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
        $this->container['onSuccess'] = isset($data['onSuccess']) ? $data['onSuccess'] : null;
        $this->container['onFailure'] = isset($data['onFailure']) ? $data['onFailure'] : null;
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
    * Gets onSuccess
    *  onSuccess
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncDestinationConfig|null
    */
    public function getOnSuccess()
    {
        return $this->container['onSuccess'];
    }

    /**
    * Sets onSuccess
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncDestinationConfig|null $onSuccess onSuccess
    *
    * @return $this
    */
    public function setOnSuccess($onSuccess)
    {
        $this->container['onSuccess'] = $onSuccess;
        return $this;
    }

    /**
    * Gets onFailure
    *  onFailure
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncDestinationConfig|null
    */
    public function getOnFailure()
    {
        return $this->container['onFailure'];
    }

    /**
    * Sets onFailure
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncDestinationConfig|null $onFailure onFailure
    *
    * @return $this
    */
    public function setOnFailure($onFailure)
    {
        $this->container['onFailure'] = $onFailure;
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

