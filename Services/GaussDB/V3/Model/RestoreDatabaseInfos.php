<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreDatabaseInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreDatabaseInfos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库名称。
    * totalTables  总表数。
    * tables  表信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'totalTables' => 'int',
            'tables' => '\HuaweiCloud\SDK\GaussDB\V3\Model\RestoreDatabaseTableInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库名称。
    * totalTables  总表数。
    * tables  表信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'totalTables' => null,
        'tables' => null
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
    * name  数据库名称。
    * totalTables  总表数。
    * tables  表信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'totalTables' => 'total_tables',
            'tables' => 'tables'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库名称。
    * totalTables  总表数。
    * tables  表信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'totalTables' => 'setTotalTables',
            'tables' => 'setTables'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库名称。
    * totalTables  总表数。
    * tables  表信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'totalTables' => 'getTotalTables',
            'tables' => 'getTables'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['totalTables'] = isset($data['totalTables']) ? $data['totalTables'] : null;
        $this->container['tables'] = isset($data['tables']) ? $data['tables'] : null;
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
    * Gets name
    *  数据库名称。
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
    * @param string|null $name 数据库名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets totalTables
    *  总表数。
    *
    * @return int|null
    */
    public function getTotalTables()
    {
        return $this->container['totalTables'];
    }

    /**
    * Sets totalTables
    *
    * @param int|null $totalTables 总表数。
    *
    * @return $this
    */
    public function setTotalTables($totalTables)
    {
        $this->container['totalTables'] = $totalTables;
        return $this;
    }

    /**
    * Gets tables
    *  表信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\RestoreDatabaseTableInfo[]|null
    */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /**
    * Sets tables
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\RestoreDatabaseTableInfo[]|null $tables 表信息。
    *
    * @return $this
    */
    public function setTables($tables)
    {
        $this->container['tables'] = $tables;
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

