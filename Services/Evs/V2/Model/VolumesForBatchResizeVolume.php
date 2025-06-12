<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumesForBatchResizeVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumesForBatchResizeVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  The disk ID.
    * newSize  The new disk size, in GiB. This parameter value must be greater than the original disk size and less than the maximum size allowed for a disk. The maximum disk size: - Data disk: 32,768 GiB - System disk: 1,024 GiB
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'newSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  The disk ID.
    * newSize  The new disk size, in GiB. This parameter value must be greater than the original disk size and less than the maximum size allowed for a disk. The maximum disk size: - Data disk: 32,768 GiB - System disk: 1,024 GiB
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'newSize' => 'int32'
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
    * id  The disk ID.
    * newSize  The new disk size, in GiB. This parameter value must be greater than the original disk size and less than the maximum size allowed for a disk. The maximum disk size: - Data disk: 32,768 GiB - System disk: 1,024 GiB
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'newSize' => 'new_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  The disk ID.
    * newSize  The new disk size, in GiB. This parameter value must be greater than the original disk size and less than the maximum size allowed for a disk. The maximum disk size: - Data disk: 32,768 GiB - System disk: 1,024 GiB
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'newSize' => 'setNewSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  The disk ID.
    * newSize  The new disk size, in GiB. This parameter value must be greater than the original disk size and less than the maximum size allowed for a disk. The maximum disk size: - Data disk: 32,768 GiB - System disk: 1,024 GiB
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'newSize' => 'getNewSize'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['newSize'] = isset($data['newSize']) ? $data['newSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['newSize'] === null) {
            $invalidProperties[] = "'newSize' can't be null";
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
    * Gets id
    *  The disk ID.
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id The disk ID.
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets newSize
    *  The new disk size, in GiB. This parameter value must be greater than the original disk size and less than the maximum size allowed for a disk. The maximum disk size: - Data disk: 32,768 GiB - System disk: 1,024 GiB
    *
    * @return int
    */
    public function getNewSize()
    {
        return $this->container['newSize'];
    }

    /**
    * Sets newSize
    *
    * @param int $newSize The new disk size, in GiB. This parameter value must be greater than the original disk size and less than the maximum size allowed for a disk. The maximum disk size: - Data disk: 32,768 GiB - System disk: 1,024 GiB
    *
    * @return $this
    */
    public function setNewSize($newSize)
    {
        $this->container['newSize'] = $newSize;
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

