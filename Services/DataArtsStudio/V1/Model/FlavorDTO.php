<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规格ID。
    * name  规格名称。
    * disk  磁盘大小。
    * cpu  CPU大小。
    * mem  内存大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'disk' => 'int',
            'cpu' => 'int',
            'mem' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规格ID。
    * name  规格名称。
    * disk  磁盘大小。
    * cpu  CPU大小。
    * mem  内存大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'disk' => 'int32',
        'cpu' => 'int32',
        'mem' => 'int32'
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
    * id  规格ID。
    * name  规格名称。
    * disk  磁盘大小。
    * cpu  CPU大小。
    * mem  内存大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'disk' => 'disk',
            'cpu' => 'cpu',
            'mem' => 'mem'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规格ID。
    * name  规格名称。
    * disk  磁盘大小。
    * cpu  CPU大小。
    * mem  内存大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'disk' => 'setDisk',
            'cpu' => 'setCpu',
            'mem' => 'setMem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规格ID。
    * name  规格名称。
    * disk  磁盘大小。
    * cpu  CPU大小。
    * mem  内存大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'disk' => 'getDisk',
            'cpu' => 'getCpu',
            'mem' => 'getMem'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
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
    * Gets id
    *  规格ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 规格ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  规格名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规格名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets disk
    *  磁盘大小。
    *
    * @return int|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param int|null $disk 磁盘大小。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU大小。
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu CPU大小。
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
    *  内存大小。
    *
    * @return int|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param int|null $mem 内存大小。
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
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

