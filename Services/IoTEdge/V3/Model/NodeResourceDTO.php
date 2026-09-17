<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeResourceDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeResourceDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  节点cpu，单位个
    * memory  节点内存，单位Byte
    * storage  磁盘，单位Byte
    * pods  容器pod数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'int',
            'memory' => 'int',
            'storage' => 'int',
            'pods' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  节点cpu，单位个
    * memory  节点内存，单位Byte
    * storage  磁盘，单位Byte
    * pods  容器pod数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => 'int64',
        'memory' => 'int64',
        'storage' => 'int64',
        'pods' => 'int64'
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
    * cpu  节点cpu，单位个
    * memory  节点内存，单位Byte
    * storage  磁盘，单位Byte
    * pods  容器pod数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'memory' => 'memory',
            'storage' => 'storage',
            'pods' => 'pods'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  节点cpu，单位个
    * memory  节点内存，单位Byte
    * storage  磁盘，单位Byte
    * pods  容器pod数量
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'storage' => 'setStorage',
            'pods' => 'setPods'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  节点cpu，单位个
    * memory  节点内存，单位Byte
    * storage  磁盘，单位Byte
    * pods  容器pod数量
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'storage' => 'getStorage',
            'pods' => 'getPods'
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
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['pods'] = isset($data['pods']) ? $data['pods'] : null;
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
    *  节点cpu，单位个
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
    * @param int|null $cpu 节点cpu，单位个
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets memory
    *  节点内存，单位Byte
    *
    * @return int|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int|null $memory 节点内存，单位Byte
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets storage
    *  磁盘，单位Byte
    *
    * @return int|null
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param int|null $storage 磁盘，单位Byte
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets pods
    *  容器pod数量
    *
    * @return int|null
    */
    public function getPods()
    {
        return $this->container['pods'];
    }

    /**
    * Sets pods
    *
    * @param int|null $pods 容器pod数量
    *
    * @return $this
    */
    public function setPods($pods)
    {
        $this->container['pods'] = $pods;
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

