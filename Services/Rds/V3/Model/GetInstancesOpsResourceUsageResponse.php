<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetInstancesOpsResourceUsageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetInstancesOpsResourceUsageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  cpu
    * mem  mem
    * disk  disk
    * io  io
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => '\HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage',
            'mem' => '\HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage',
            'disk' => '\HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage',
            'io' => '\HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  cpu
    * mem  mem
    * disk  disk
    * io  io
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => null,
        'mem' => null,
        'disk' => null,
        'io' => null
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
    * cpu  cpu
    * mem  mem
    * disk  disk
    * io  io
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'mem' => 'mem',
            'disk' => 'disk',
            'io' => 'io'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  cpu
    * mem  mem
    * disk  disk
    * io  io
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'disk' => 'setDisk',
            'io' => 'setIo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  cpu
    * mem  mem
    * disk  disk
    * io  io
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'disk' => 'getDisk',
            'io' => 'getIo'
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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['io'] = isset($data['io']) ? $data['io'] : null;
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
    * Gets cpu
    *  cpu
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage|null $cpu cpu
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  mem
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage|null $mem mem
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets disk
    *  disk
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage|null $disk disk
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets io
    *  io
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage|null
    */
    public function getIo()
    {
        return $this->container['io'];
    }

    /**
    * Sets io
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ResourceUsage|null $io io
    *
    * @return $this
    */
    public function setIo($io)
    {
        $this->container['io'] = $io;
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

