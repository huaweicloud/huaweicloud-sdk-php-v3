<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeFlavorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeFlavorRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resizeFlavor  resizeFlavor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resizeFlavor' => '\HuaweiCloud\SDK\Rds\V3\Model\ResizeFlavorObject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resizeFlavor  resizeFlavor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resizeFlavor' => null
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
    * resizeFlavor  resizeFlavor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resizeFlavor' => 'resize_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resizeFlavor  resizeFlavor
    *
    * @var string[]
    */
    protected static $setters = [
            'resizeFlavor' => 'setResizeFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resizeFlavor  resizeFlavor
    *
    * @var string[]
    */
    protected static $getters = [
            'resizeFlavor' => 'getResizeFlavor'
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
        $this->container['resizeFlavor'] = isset($data['resizeFlavor']) ? $data['resizeFlavor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resizeFlavor'] === null) {
            $invalidProperties[] = "'resizeFlavor' can't be null";
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
    * Gets resizeFlavor
    *  resizeFlavor
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ResizeFlavorObject
    */
    public function getResizeFlavor()
    {
        return $this->container['resizeFlavor'];
    }

    /**
    * Sets resizeFlavor
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ResizeFlavorObject $resizeFlavor resizeFlavor
    *
    * @return $this
    */
    public function setResizeFlavor($resizeFlavor)
    {
        $this->container['resizeFlavor'] = $resizeFlavor;
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

