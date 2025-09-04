<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTableMetaInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTableMetaInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableMetaInfos  要版本升级的批量实例。
    * tableNames  数据表名称
    * databaseNames  数据库名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableMetaInfos' => '\HuaweiCloud\SDK\GaussDB\V3\Model\TableMetaInfo[]',
            'tableNames' => 'string[]',
            'databaseNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableMetaInfos  要版本升级的批量实例。
    * tableNames  数据表名称
    * databaseNames  数据库名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableMetaInfos' => null,
        'tableNames' => null,
        'databaseNames' => null
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
    * tableMetaInfos  要版本升级的批量实例。
    * tableNames  数据表名称
    * databaseNames  数据库名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableMetaInfos' => 'table_meta_infos',
            'tableNames' => 'table_names',
            'databaseNames' => 'database_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableMetaInfos  要版本升级的批量实例。
    * tableNames  数据表名称
    * databaseNames  数据库名称
    *
    * @var string[]
    */
    protected static $setters = [
            'tableMetaInfos' => 'setTableMetaInfos',
            'tableNames' => 'setTableNames',
            'databaseNames' => 'setDatabaseNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableMetaInfos  要版本升级的批量实例。
    * tableNames  数据表名称
    * databaseNames  数据库名称
    *
    * @var string[]
    */
    protected static $getters = [
            'tableMetaInfos' => 'getTableMetaInfos',
            'tableNames' => 'getTableNames',
            'databaseNames' => 'getDatabaseNames'
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
        $this->container['tableMetaInfos'] = isset($data['tableMetaInfos']) ? $data['tableMetaInfos'] : null;
        $this->container['tableNames'] = isset($data['tableNames']) ? $data['tableNames'] : null;
        $this->container['databaseNames'] = isset($data['databaseNames']) ? $data['databaseNames'] : null;
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
    * Gets tableMetaInfos
    *  要版本升级的批量实例。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\TableMetaInfo[]|null
    */
    public function getTableMetaInfos()
    {
        return $this->container['tableMetaInfos'];
    }

    /**
    * Sets tableMetaInfos
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\TableMetaInfo[]|null $tableMetaInfos 要版本升级的批量实例。
    *
    * @return $this
    */
    public function setTableMetaInfos($tableMetaInfos)
    {
        $this->container['tableMetaInfos'] = $tableMetaInfos;
        return $this;
    }

    /**
    * Gets tableNames
    *  数据表名称
    *
    * @return string[]|null
    */
    public function getTableNames()
    {
        return $this->container['tableNames'];
    }

    /**
    * Sets tableNames
    *
    * @param string[]|null $tableNames 数据表名称
    *
    * @return $this
    */
    public function setTableNames($tableNames)
    {
        $this->container['tableNames'] = $tableNames;
        return $this;
    }

    /**
    * Gets databaseNames
    *  数据库名称
    *
    * @return string[]|null
    */
    public function getDatabaseNames()
    {
        return $this->container['databaseNames'];
    }

    /**
    * Sets databaseNames
    *
    * @param string[]|null $databaseNames 数据库名称
    *
    * @return $this
    */
    public function setDatabaseNames($databaseNames)
    {
        $this->container['databaseNames'] = $databaseNames;
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

