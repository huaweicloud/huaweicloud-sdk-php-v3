<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateL7PolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateL7PolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * l7policy  l7policy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'l7policy' => '\HuaweiCloud\SDK\Elb\V3\Model\UpdateL7PolicyOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * l7policy  l7policy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'l7policy' => null
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
    * l7policy  l7policy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'l7policy' => 'l7policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * l7policy  l7policy
    *
    * @var string[]
    */
    protected static $setters = [
            'l7policy' => 'setL7policy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * l7policy  l7policy
    *
    * @var string[]
    */
    protected static $getters = [
            'l7policy' => 'getL7policy'
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
        $this->container['l7policy'] = isset($data['l7policy']) ? $data['l7policy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['l7policy'] === null) {
            $invalidProperties[] = "'l7policy' can't be null";
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
    * Gets l7policy
    *  l7policy
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpdateL7PolicyOption
    */
    public function getL7policy()
    {
        return $this->container['l7policy'];
    }

    /**
    * Sets l7policy
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpdateL7PolicyOption $l7policy l7policy
    *
    * @return $this
    */
    public function setL7policy($l7policy)
    {
        $this->container['l7policy'] = $l7policy;
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

