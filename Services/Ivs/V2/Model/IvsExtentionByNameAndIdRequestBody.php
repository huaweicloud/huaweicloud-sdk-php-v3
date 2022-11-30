<?php

namespace HuaweiCloud\SDK\Ivs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IvsExtentionByNameAndIdRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IvsExtentionByNameAndIdRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * meta  meta
    * data  data
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'meta' => '\HuaweiCloud\SDK\Ivs\V2\Model\Meta',
            'data' => '\HuaweiCloud\SDK\Ivs\V2\Model\IvsExtentionByNameAndIdRequestBodyData'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * meta  meta
    * data  data
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'meta' => null,
        'data' => null
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
    * meta  meta
    * data  data
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'meta' => 'meta',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * meta  meta
    * data  data
    *
    * @var string[]
    */
    protected static $setters = [
            'meta' => 'setMeta',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * meta  meta
    * data  data
    *
    * @var string[]
    */
    protected static $getters = [
            'meta' => 'getMeta',
            'data' => 'getData'
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
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['meta'] === null) {
            $invalidProperties[] = "'meta' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
    * Gets meta
    *  meta
    *
    * @return \HuaweiCloud\SDK\Ivs\V2\Model\Meta
    */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
    * Sets meta
    *
    * @param \HuaweiCloud\SDK\Ivs\V2\Model\Meta $meta meta
    *
    * @return $this
    */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Ivs\V2\Model\IvsExtentionByNameAndIdRequestBodyData
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Ivs\V2\Model\IvsExtentionByNameAndIdRequestBodyData $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

