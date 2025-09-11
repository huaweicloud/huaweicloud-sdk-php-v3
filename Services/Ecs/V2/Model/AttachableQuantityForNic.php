<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachableQuantityForNic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachableQuantityForNic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freeEfiNic  freeEfiNic
    * freeScsi  freeScsi
    * freeBlk  freeBlk
    * freeDisk  freeDisk
    * freeNic  freeNic
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freeEfiNic' => 'int',
            'freeScsi' => 'int',
            'freeBlk' => 'int',
            'freeDisk' => 'int',
            'freeNic' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freeEfiNic  freeEfiNic
    * freeScsi  freeScsi
    * freeBlk  freeBlk
    * freeDisk  freeDisk
    * freeNic  freeNic
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freeEfiNic' => null,
        'freeScsi' => null,
        'freeBlk' => null,
        'freeDisk' => null,
        'freeNic' => null
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
    * freeEfiNic  freeEfiNic
    * freeScsi  freeScsi
    * freeBlk  freeBlk
    * freeDisk  freeDisk
    * freeNic  freeNic
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freeEfiNic' => 'free_efi_nic',
            'freeScsi' => 'free_scsi',
            'freeBlk' => 'free_blk',
            'freeDisk' => 'free_disk',
            'freeNic' => 'free_nic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freeEfiNic  freeEfiNic
    * freeScsi  freeScsi
    * freeBlk  freeBlk
    * freeDisk  freeDisk
    * freeNic  freeNic
    *
    * @var string[]
    */
    protected static $setters = [
            'freeEfiNic' => 'setFreeEfiNic',
            'freeScsi' => 'setFreeScsi',
            'freeBlk' => 'setFreeBlk',
            'freeDisk' => 'setFreeDisk',
            'freeNic' => 'setFreeNic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freeEfiNic  freeEfiNic
    * freeScsi  freeScsi
    * freeBlk  freeBlk
    * freeDisk  freeDisk
    * freeNic  freeNic
    *
    * @var string[]
    */
    protected static $getters = [
            'freeEfiNic' => 'getFreeEfiNic',
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
        $this->container['freeEfiNic'] = isset($data['freeEfiNic']) ? $data['freeEfiNic'] : null;
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
    * Gets freeEfiNic
    *  freeEfiNic
    *
    * @return int|null
    */
    public function getFreeEfiNic()
    {
        return $this->container['freeEfiNic'];
    }

    /**
    * Sets freeEfiNic
    *
    * @param int|null $freeEfiNic freeEfiNic
    *
    * @return $this
    */
    public function setFreeEfiNic($freeEfiNic)
    {
        $this->container['freeEfiNic'] = $freeEfiNic;
        return $this;
    }

    /**
    * Gets freeScsi
    *  freeScsi
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
    * @param int|null $freeScsi freeScsi
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
    *  freeBlk
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
    * @param int|null $freeBlk freeBlk
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
    *  freeDisk
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
    * @param int|null $freeDisk freeDisk
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
    *  freeNic
    *
    * @return int|null
    */
    public function getFreeNic()
    {
        return $this->container['freeNic'];
    }

    /**
    * Sets freeNic
    *
    * @param int|null $freeNic freeNic
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

