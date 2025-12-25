<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateExtendAttributeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateExtendAttributeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'extendAttribute' => '\HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'extendAttribute' => null
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
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'extendAttribute' => 'extend_attribute'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $setters = [
            'extendAttribute' => 'setExtendAttribute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $getters = [
            'extendAttribute' => 'getExtendAttribute'
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
        $this->container['extendAttribute'] = isset($data['extendAttribute']) ? $data['extendAttribute'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['extendAttribute'] === null) {
            $invalidProperties[] = "'extendAttribute' can't be null";
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
    * Gets extendAttribute
    *  extendAttribute
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute
    */
    public function getExtendAttribute()
    {
        return $this->container['extendAttribute'];
    }

    /**
    * Sets extendAttribute
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute $extendAttribute extendAttribute
    *
    * @return $this
    */
    public function setExtendAttribute($extendAttribute)
    {
        $this->container['extendAttribute'] = $extendAttribute;
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

