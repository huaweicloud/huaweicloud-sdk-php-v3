<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShrinkClusterReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShrinkClusterReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shrink  需要缩容的节点类型和数量集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shrink' => '\HuaweiCloud\SDK\Css\V1\Model\ShrinkNodeReq[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shrink  需要缩容的节点类型和数量集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shrink' => null
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
    * shrink  需要缩容的节点类型和数量集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shrink' => 'shrink'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shrink  需要缩容的节点类型和数量集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'shrink' => 'setShrink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shrink  需要缩容的节点类型和数量集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'shrink' => 'getShrink'
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
        $this->container['shrink'] = isset($data['shrink']) ? $data['shrink'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shrink'] === null) {
            $invalidProperties[] = "'shrink' can't be null";
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
    * Gets shrink
    *  需要缩容的节点类型和数量集合。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ShrinkNodeReq[]
    */
    public function getShrink()
    {
        return $this->container['shrink'];
    }

    /**
    * Sets shrink
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ShrinkNodeReq[] $shrink 需要缩容的节点类型和数量集合。
    *
    * @return $this
    */
    public function setShrink($shrink)
    {
        $this->container['shrink'] = $shrink;
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

