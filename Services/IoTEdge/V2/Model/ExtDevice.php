<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtDevice';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  源路径
    * destination  卷挂载路径
    * cgroupPermissions  只读，默认MRW
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'destination' => 'string',
            'cgroupPermissions' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  源路径
    * destination  卷挂载路径
    * cgroupPermissions  只读，默认MRW
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'destination' => null,
        'cgroupPermissions' => null
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
    * source  源路径
    * destination  卷挂载路径
    * cgroupPermissions  只读，默认MRW
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'destination' => 'destination',
            'cgroupPermissions' => 'cgroup_permissions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  源路径
    * destination  卷挂载路径
    * cgroupPermissions  只读，默认MRW
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'destination' => 'setDestination',
            'cgroupPermissions' => 'setCgroupPermissions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  源路径
    * destination  卷挂载路径
    * cgroupPermissions  只读，默认MRW
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'destination' => 'getDestination',
            'cgroupPermissions' => 'getCgroupPermissions'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['cgroupPermissions'] = isset($data['cgroupPermissions']) ? $data['cgroupPermissions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
            if (!preg_match("/^\/([a-zA-Z_0-9-]+\/?)+$/", $this->container['source'])) {
                $invalidProperties[] = "invalid value for 'source', must be conform to the pattern /^\/([a-zA-Z_0-9-]+\/?)+$/.";
            }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
            if (!preg_match("/^\/([a-zA-Z_0-9-]+\/?)+$/", $this->container['destination'])) {
                $invalidProperties[] = "invalid value for 'destination', must be conform to the pattern /^\/([a-zA-Z_0-9-]+\/?)+$/.";
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
    * Gets source
    *  源路径
    *
    * @return string
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string $source 源路径
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets destination
    *  卷挂载路径
    *
    * @return string
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string $destination 卷挂载路径
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets cgroupPermissions
    *  只读，默认MRW
    *
    * @return string|null
    */
    public function getCgroupPermissions()
    {
        return $this->container['cgroupPermissions'];
    }

    /**
    * Sets cgroupPermissions
    *
    * @param string|null $cgroupPermissions 只读，默认MRW
    *
    * @return $this
    */
    public function setCgroupPermissions($cgroupPermissions)
    {
        $this->container['cgroupPermissions'] = $cgroupPermissions;
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

