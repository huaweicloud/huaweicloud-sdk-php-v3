<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomQosLimit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomQosLimit';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * l4  l4
    * l7  l7
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'l4' => '\HuaweiCloud\SDK\Elb\V3\Model\L4Limit',
            'l7' => '\HuaweiCloud\SDK\Elb\V3\Model\L7Limit'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * l4  l4
    * l7  l7
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'l4' => null,
        'l7' => null
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
    * l4  l4
    * l7  l7
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'l4' => 'l4',
            'l7' => 'l7'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * l4  l4
    * l7  l7
    *
    * @var string[]
    */
    protected static $setters = [
            'l4' => 'setL4',
            'l7' => 'setL7'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * l4  l4
    * l7  l7
    *
    * @var string[]
    */
    protected static $getters = [
            'l4' => 'getL4',
            'l7' => 'getL7'
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
        $this->container['l4'] = isset($data['l4']) ? $data['l4'] : null;
        $this->container['l7'] = isset($data['l7']) ? $data['l7'] : null;
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
    * Gets l4
    *  l4
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\L4Limit|null
    */
    public function getL4()
    {
        return $this->container['l4'];
    }

    /**
    * Sets l4
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\L4Limit|null $l4 l4
    *
    * @return $this
    */
    public function setL4($l4)
    {
        $this->container['l4'] = $l4;
        return $this;
    }

    /**
    * Gets l7
    *  l7
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\L7Limit|null
    */
    public function getL7()
    {
        return $this->container['l7'];
    }

    /**
    * Sets l7
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\L7Limit|null $l7 l7
    *
    * @return $this
    */
    public function setL7($l7)
    {
        $this->container['l7'] = $l7;
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

