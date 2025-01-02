<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReadOnlyReplayDatabaseResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReadOnlyReplayDatabaseResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseLimit  每次返回的库上限数量
    * totalTables  返回的总表数量
    * tableLimit  每次返回的表上限数量
    * databases  可恢复到主实例的数据库列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseLimit' => 'int',
            'totalTables' => 'int',
            'tableLimit' => 'int',
            'databases' => '\HuaweiCloud\SDK\Rds\V3\Model\DelayRestoreDatabase[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseLimit  每次返回的库上限数量
    * totalTables  返回的总表数量
    * tableLimit  每次返回的表上限数量
    * databases  可恢复到主实例的数据库列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseLimit' => 'int32',
        'totalTables' => 'int32',
        'tableLimit' => 'int32',
        'databases' => null
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
    * databaseLimit  每次返回的库上限数量
    * totalTables  返回的总表数量
    * tableLimit  每次返回的表上限数量
    * databases  可恢复到主实例的数据库列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseLimit' => 'database_limit',
            'totalTables' => 'total_tables',
            'tableLimit' => 'table_limit',
            'databases' => 'databases'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseLimit  每次返回的库上限数量
    * totalTables  返回的总表数量
    * tableLimit  每次返回的表上限数量
    * databases  可恢复到主实例的数据库列表
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseLimit' => 'setDatabaseLimit',
            'totalTables' => 'setTotalTables',
            'tableLimit' => 'setTableLimit',
            'databases' => 'setDatabases'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseLimit  每次返回的库上限数量
    * totalTables  返回的总表数量
    * tableLimit  每次返回的表上限数量
    * databases  可恢复到主实例的数据库列表
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseLimit' => 'getDatabaseLimit',
            'totalTables' => 'getTotalTables',
            'tableLimit' => 'getTableLimit',
            'databases' => 'getDatabases'
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
        $this->container['databaseLimit'] = isset($data['databaseLimit']) ? $data['databaseLimit'] : null;
        $this->container['totalTables'] = isset($data['totalTables']) ? $data['totalTables'] : null;
        $this->container['tableLimit'] = isset($data['tableLimit']) ? $data['tableLimit'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
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
    * Gets databaseLimit
    *  每次返回的库上限数量
    *
    * @return int|null
    */
    public function getDatabaseLimit()
    {
        return $this->container['databaseLimit'];
    }

    /**
    * Sets databaseLimit
    *
    * @param int|null $databaseLimit 每次返回的库上限数量
    *
    * @return $this
    */
    public function setDatabaseLimit($databaseLimit)
    {
        $this->container['databaseLimit'] = $databaseLimit;
        return $this;
    }

    /**
    * Gets totalTables
    *  返回的总表数量
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
    * @param int|null $totalTables 返回的总表数量
    *
    * @return $this
    */
    public function setTotalTables($totalTables)
    {
        $this->container['totalTables'] = $totalTables;
        return $this;
    }

    /**
    * Gets tableLimit
    *  每次返回的表上限数量
    *
    * @return int|null
    */
    public function getTableLimit()
    {
        return $this->container['tableLimit'];
    }

    /**
    * Sets tableLimit
    *
    * @param int|null $tableLimit 每次返回的表上限数量
    *
    * @return $this
    */
    public function setTableLimit($tableLimit)
    {
        $this->container['tableLimit'] = $tableLimit;
        return $this;
    }

    /**
    * Gets databases
    *  可恢复到主实例的数据库列表
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\DelayRestoreDatabase[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\DelayRestoreDatabase[]|null $databases 可恢复到主实例的数据库列表
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
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

