<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerAttachableQuantity implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerAttachableQuantity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeScsi' => 'int',
            'freeBlk' => 'int',
            'freeDisk' => 'int',
            'freeNic' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeScsi' => 'int32',
        'freeBlk' => 'int32',
        'freeDisk' => 'int32',
        'freeNic' => 'int32'
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
            'freeDisk' => 'free_disk',
            'freeNic' => 'free_nic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'freeScsi' => 'setFreeScsi',
            'freeBlk' => 'setFreeBlk',
            'freeDisk' => 'setFreeDisk',
            'freeNic' => 'setFreeNic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'freeScsi' => 'getFreeScsi',
            'freeBlk' => 'getFreeBlk',
            'freeDisk' => 'getFreeDisk',
            'freeNic' => 'getFreeNic'
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
        $this->container['freeNic'] = isset($data['freeNic']) ? $data['freeNic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['freeScsi'] === null) {
            $invalidProperties[] = "'freeScsi' can't be null";
        }
        if ($this->container['freeBlk'] === null) {
            $invalidProperties[] = "'freeBlk' can't be null";
        }
        if ($this->container['freeDisk'] === null) {
            $invalidProperties[] = "'freeDisk' can't be null";
        }
        if ($this->container['freeNic'] === null) {
            $invalidProperties[] = "'freeNic' can't be null";
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
    * Gets freeScsi
    *
    * @return int
    */
    public function getFreeScsi()
    {
        return $this->container['freeScsi'];
    }

    /**
    * Sets freeScsi
    *
    * @param int $freeScsi 可挂载scsi卷数。
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
    * @return int
    */
    public function getFreeBlk()
    {
        return $this->container['freeBlk'];
    }

    /**
    * Sets freeBlk
    *
    * @param int $freeBlk 可挂载vbd卷数。
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
    * @return int
    */
    public function getFreeDisk()
    {
        return $this->container['freeDisk'];
    }

    /**
    * Sets freeDisk
    *
    * @param int $freeDisk 可挂载卷数。
    *
    * @return $this
    */
    public function setFreeDisk($freeDisk)
    {
        $this->container['freeDisk'] = $freeDisk;
        return $this;
    }

    /**
    * Gets freeNic
    *
    * @return int
    */
    public function getFreeNic()
    {
        return $this->container['freeNic'];
    }

    /**
    * Sets freeNic
    *
    * @param int $freeNic 可挂载网卡数。
    *
    * @return $this
    */
    public function setFreeNic($freeNic)
    {
        $this->container['freeNic'] = $freeNic;
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

