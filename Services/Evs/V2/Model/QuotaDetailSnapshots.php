<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaDetailSnapshots implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaDetailSnapshots';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inUse  已使用的数量。
    * limit  最大的数量。
    * reserved  预留属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inUse' => 'int',
            'limit' => 'int',
            'reserved' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inUse  已使用的数量。
    * limit  最大的数量。
    * reserved  预留属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inUse' => 'int32',
        'limit' => 'int32',
        'reserved' => 'int32'
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
    * inUse  已使用的数量。
    * limit  最大的数量。
    * reserved  预留属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inUse' => 'in_use',
            'limit' => 'limit',
            'reserved' => 'reserved'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inUse  已使用的数量。
    * limit  最大的数量。
    * reserved  预留属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'inUse' => 'setInUse',
            'limit' => 'setLimit',
            'reserved' => 'setReserved'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inUse  已使用的数量。
    * limit  最大的数量。
    * reserved  预留属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'inUse' => 'getInUse',
            'limit' => 'getLimit',
            'reserved' => 'getReserved'
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
        $this->container['inUse'] = isset($data['inUse']) ? $data['inUse'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['reserved'] = isset($data['reserved']) ? $data['reserved'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['inUse'] === null) {
            $invalidProperties[] = "'inUse' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['reserved'] === null) {
            $invalidProperties[] = "'reserved' can't be null";
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
    * Gets inUse
    *  已使用的数量。
    *
    * @return int
    */
    public function getInUse()
    {
        return $this->container['inUse'];
    }

    /**
    * Sets inUse
    *
    * @param int $inUse 已使用的数量。
    *
    * @return $this
    */
    public function setInUse($inUse)
    {
        $this->container['inUse'] = $inUse;
        return $this;
    }

    /**
    * Gets limit
    *  最大的数量。
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 最大的数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets reserved
    *  预留属性。
    *
    * @return int
    */
    public function getReserved()
    {
        return $this->container['reserved'];
    }

    /**
    * Sets reserved
    *
    * @param int $reserved 预留属性。
    *
    * @return $this
    */
    public function setReserved($reserved)
    {
        $this->container['reserved'] = $reserved;
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

