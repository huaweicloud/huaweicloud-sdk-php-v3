<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Database implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Database';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  数据库名称
    * databaseGuid  数据库guid
    * databaseQualifiedName  数据库的唯一标识名称
    * tableCount  数据库中表数目
    * dataSize  数据量大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'databaseGuid' => 'string',
            'databaseQualifiedName' => 'string',
            'tableCount' => 'int',
            'dataSize' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  数据库名称
    * databaseGuid  数据库guid
    * databaseQualifiedName  数据库的唯一标识名称
    * tableCount  数据库中表数目
    * dataSize  数据量大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'databaseGuid' => null,
        'databaseQualifiedName' => null,
        'tableCount' => null,
        'dataSize' => 'double'
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
    * databaseGuid  数据库guid
    * databaseQualifiedName  数据库的唯一标识名称
    * tableCount  数据库中表数目
    * dataSize  数据量大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'databaseGuid' => 'database_guid',
            'databaseQualifiedName' => 'database_qualified_name',
            'tableCount' => 'table_count',
            'dataSize' => 'data_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  数据库名称
    * databaseGuid  数据库guid
    * databaseQualifiedName  数据库的唯一标识名称
    * tableCount  数据库中表数目
    * dataSize  数据量大小
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'databaseGuid' => 'setDatabaseGuid',
            'databaseQualifiedName' => 'setDatabaseQualifiedName',
            'tableCount' => 'setTableCount',
            'dataSize' => 'setDataSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  数据库名称
    * databaseGuid  数据库guid
    * databaseQualifiedName  数据库的唯一标识名称
    * tableCount  数据库中表数目
    * dataSize  数据量大小
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'databaseGuid' => 'getDatabaseGuid',
            'databaseQualifiedName' => 'getDatabaseQualifiedName',
            'tableCount' => 'getTableCount',
            'dataSize' => 'getDataSize'
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
        $this->container['databaseGuid'] = isset($data['databaseGuid']) ? $data['databaseGuid'] : null;
        $this->container['databaseQualifiedName'] = isset($data['databaseQualifiedName']) ? $data['databaseQualifiedName'] : null;
        $this->container['tableCount'] = isset($data['tableCount']) ? $data['tableCount'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
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
    * Gets databaseGuid
    *  数据库guid
    *
    * @return string|null
    */
    public function getDatabaseGuid()
    {
        return $this->container['databaseGuid'];
    }

    /**
    * Sets databaseGuid
    *
    * @param string|null $databaseGuid 数据库guid
    *
    * @return $this
    */
    public function setDatabaseGuid($databaseGuid)
    {
        $this->container['databaseGuid'] = $databaseGuid;
        return $this;
    }

    /**
    * Gets databaseQualifiedName
    *  数据库的唯一标识名称
    *
    * @return string|null
    */
    public function getDatabaseQualifiedName()
    {
        return $this->container['databaseQualifiedName'];
    }

    /**
    * Sets databaseQualifiedName
    *
    * @param string|null $databaseQualifiedName 数据库的唯一标识名称
    *
    * @return $this
    */
    public function setDatabaseQualifiedName($databaseQualifiedName)
    {
        $this->container['databaseQualifiedName'] = $databaseQualifiedName;
        return $this;
    }

    /**
    * Gets tableCount
    *  数据库中表数目
    *
    * @return int|null
    */
    public function getTableCount()
    {
        return $this->container['tableCount'];
    }

    /**
    * Sets tableCount
    *
    * @param int|null $tableCount 数据库中表数目
    *
    * @return $this
    */
    public function setTableCount($tableCount)
    {
        $this->container['tableCount'] = $tableCount;
        return $this;
    }

    /**
    * Gets dataSize
    *  数据量大小
    *
    * @return double|null
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param double|null $dataSize 数据量大小
    *
    * @return $this
    */
    public function setDataSize($dataSize)
    {
        $this->container['dataSize'] = $dataSize;
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

