<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BlockDeviceAttachableQuantity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BlockDeviceAttachableQuantity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeScsi' => 'int',
            'freeBlk' => 'int',
            'freeDisk' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeScsi' => 'int32',
        'freeBlk' => 'int32',
        'freeDisk' => 'int32'
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freeScsi' => 'free_scsi',
            'freeBlk' => 'free_blk',
            'freeDisk' => 'free_disk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'freeScsi' => 'setFreeScsi',
            'freeBlk' => 'setFreeBlk',
            'freeDisk' => 'setFreeDisk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'freeScsi' => 'getFreeScsi',
            'freeBlk' => 'getFreeBlk',
            'freeDisk' => 'getFreeDisk'
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
        $this->container['freeScsi'] = isset($data['freeScsi']) ? $data['freeScsi'] : null;
        $this->container['freeBlk'] = isset($data['freeBlk']) ? $data['freeBlk'] : null;
        $this->container['freeDisk'] = isset($data['freeDisk']) ? $data['freeDisk'] : null;
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
    * Gets freeScsi
    *
    * @return int|null
    */
    public function getFreeScsi()
    {
        return $this->container['freeScsi'];
    }

    /**
    * Sets freeScsi
    *
    * @param int|null $freeScsi 云服务器可挂载scsi类型磁盘数量。
    *
    * @return $this
    */
    public function setFreeScsi($freeScsi)
    {
        $this->container['freeScsi'] = $freeScsi;
        return $this;
    }

    /**
    * Gets freeBlk
    *
    * @return int|null
    */
    public function getFreeBlk()
    {
        return $this->container['freeBlk'];
    }

    /**
    * Sets freeBlk
    *
    * @param int|null $freeBlk 云服务器可挂载virtio_blk类型磁盘数量。
    *
    * @return $this
    */
    public function setFreeBlk($freeBlk)
    {
        $this->container['freeBlk'] = $freeBlk;
        return $this;
    }

    /**
    * Gets freeDisk
    *
    * @return int|null
    */
    public function getFreeDisk()
    {
        return $this->container['freeDisk'];
    }

    /**
    * Sets freeDisk
    *
    * @param int|null $freeDisk 云服务器可挂载磁盘总数。
    *
    * @return $this
    */
    public function setFreeDisk($freeDisk)
    {
        $this->container['freeDisk'] = $freeDisk;
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

