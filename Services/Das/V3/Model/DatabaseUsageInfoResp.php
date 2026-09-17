<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseUsageInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseUsageInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  数据库名称
    * totalCpu  该数据库的cpu占比
    * totalMemory  该数据库的内存占比
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'totalCpu' => 'float',
            'totalMemory' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  数据库名称
    * totalCpu  该数据库的cpu占比
    * totalMemory  该数据库的内存占比
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'totalCpu' => 'float',
        'totalMemory' => 'float'
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
    * databaseName  数据库名称
    * totalCpu  该数据库的cpu占比
    * totalMemory  该数据库的内存占比
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'totalCpu' => 'total_cpu',
            'totalMemory' => 'total_memory'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  数据库名称
    * totalCpu  该数据库的cpu占比
    * totalMemory  该数据库的内存占比
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'totalCpu' => 'setTotalCpu',
            'totalMemory' => 'setTotalMemory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  数据库名称
    * totalCpu  该数据库的cpu占比
    * totalMemory  该数据库的内存占比
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'totalCpu' => 'getTotalCpu',
            'totalMemory' => 'getTotalMemory'
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
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['totalCpu'] = isset($data['totalCpu']) ? $data['totalCpu'] : null;
        $this->container['totalMemory'] = isset($data['totalMemory']) ? $data['totalMemory'] : null;
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
    * Gets databaseName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名称
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets totalCpu
    *  该数据库的cpu占比
    *
    * @return float|null
    */
    public function getTotalCpu()
    {
        return $this->container['totalCpu'];
    }

    /**
    * Sets totalCpu
    *
    * @param float|null $totalCpu 该数据库的cpu占比
    *
    * @return $this
    */
    public function setTotalCpu($totalCpu)
    {
        $this->container['totalCpu'] = $totalCpu;
        return $this;
    }

    /**
    * Gets totalMemory
    *  该数据库的内存占比
    *
    * @return float|null
    */
    public function getTotalMemory()
    {
        return $this->container['totalMemory'];
    }

    /**
    * Sets totalMemory
    *
    * @param float|null $totalMemory 该数据库的内存占比
    *
    * @return $this
    */
    public function setTotalMemory($totalMemory)
    {
        $this->container['totalMemory'] = $totalMemory;
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

