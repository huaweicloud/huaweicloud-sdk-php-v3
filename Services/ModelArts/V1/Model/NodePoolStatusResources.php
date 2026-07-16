<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePoolStatusResources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePoolStatus_resources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creating  creating
    * available  available
    * abnormal  abnormal
    * deleting  deleting
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creating' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount',
            'available' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount',
            'abnormal' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount',
            'deleting' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creating  creating
    * available  available
    * abnormal  abnormal
    * deleting  deleting
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creating' => null,
        'available' => null,
        'abnormal' => null,
        'deleting' => null
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
    * creating  creating
    * available  available
    * abnormal  abnormal
    * deleting  deleting
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creating' => 'creating',
            'available' => 'available',
            'abnormal' => 'abnormal',
            'deleting' => 'deleting'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creating  creating
    * available  available
    * abnormal  abnormal
    * deleting  deleting
    *
    * @var string[]
    */
    protected static $setters = [
            'creating' => 'setCreating',
            'available' => 'setAvailable',
            'abnormal' => 'setAbnormal',
            'deleting' => 'setDeleting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creating  creating
    * available  available
    * abnormal  abnormal
    * deleting  deleting
    *
    * @var string[]
    */
    protected static $getters = [
            'creating' => 'getCreating',
            'available' => 'getAvailable',
            'abnormal' => 'getAbnormal',
            'deleting' => 'getDeleting'
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
        $this->container['creating'] = isset($data['creating']) ? $data['creating'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['abnormal'] = isset($data['abnormal']) ? $data['abnormal'] : null;
        $this->container['deleting'] = isset($data['deleting']) ? $data['deleting'] : null;
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
    * Gets creating
    *  creating
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount|null
    */
    public function getCreating()
    {
        return $this->container['creating'];
    }

    /**
    * Sets creating
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount|null $creating creating
    *
    * @return $this
    */
    public function setCreating($creating)
    {
        $this->container['creating'] = $creating;
        return $this;
    }

    /**
    * Gets available
    *  available
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount|null
    */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
    * Sets available
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount|null $available available
    *
    * @return $this
    */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;
        return $this;
    }

    /**
    * Gets abnormal
    *  abnormal
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount|null
    */
    public function getAbnormal()
    {
        return $this->container['abnormal'];
    }

    /**
    * Sets abnormal
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount|null $abnormal abnormal
    *
    * @return $this
    */
    public function setAbnormal($abnormal)
    {
        $this->container['abnormal'] = $abnormal;
        return $this;
    }

    /**
    * Gets deleting
    *  deleting
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount|null
    */
    public function getDeleting()
    {
        return $this->container['deleting'];
    }

    /**
    * Sets deleting
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavorCount|null $deleting deleting
    *
    * @return $this
    */
    public function setDeleting($deleting)
    {
        $this->container['deleting'] = $deleting;
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

