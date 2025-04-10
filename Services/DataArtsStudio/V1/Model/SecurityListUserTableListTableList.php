<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityListUserTableListTableList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityListUserTableList_table_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datasourceType  必填，数据源类型，枚举：HIVE[、DLI](tag:nohcs)、DWS
    * clusterId  数据源集群id ，Mrs和dws数据源必填[，dli数据源可不传](tag:nohcs)
    * databaseName  必填，数据库名称
    * schemaName  Mrs[、dli数据源](tag:nohcs)非必填，dws数据源必填，dws数据源Schema名称
    * tableName  必填，表名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datasourceType' => 'string',
            'clusterId' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datasourceType  必填，数据源类型，枚举：HIVE[、DLI](tag:nohcs)、DWS
    * clusterId  数据源集群id ，Mrs和dws数据源必填[，dli数据源可不传](tag:nohcs)
    * databaseName  必填，数据库名称
    * schemaName  Mrs[、dli数据源](tag:nohcs)非必填，dws数据源必填，dws数据源Schema名称
    * tableName  必填，表名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datasourceType' => null,
        'clusterId' => null,
        'databaseName' => null,
        'schemaName' => null,
        'tableName' => null
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
    * datasourceType  必填，数据源类型，枚举：HIVE[、DLI](tag:nohcs)、DWS
    * clusterId  数据源集群id ，Mrs和dws数据源必填[，dli数据源可不传](tag:nohcs)
    * databaseName  必填，数据库名称
    * schemaName  Mrs[、dli数据源](tag:nohcs)非必填，dws数据源必填，dws数据源Schema名称
    * tableName  必填，表名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datasourceType' => 'datasource_type',
            'clusterId' => 'cluster_id',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datasourceType  必填，数据源类型，枚举：HIVE[、DLI](tag:nohcs)、DWS
    * clusterId  数据源集群id ，Mrs和dws数据源必填[，dli数据源可不传](tag:nohcs)
    * databaseName  必填，数据库名称
    * schemaName  Mrs[、dli数据源](tag:nohcs)非必填，dws数据源必填，dws数据源Schema名称
    * tableName  必填，表名称
    *
    * @var string[]
    */
    protected static $setters = [
            'datasourceType' => 'setDatasourceType',
            'clusterId' => 'setClusterId',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datasourceType  必填，数据源类型，枚举：HIVE[、DLI](tag:nohcs)、DWS
    * clusterId  数据源集群id ，Mrs和dws数据源必填[，dli数据源可不传](tag:nohcs)
    * databaseName  必填，数据库名称
    * schemaName  Mrs[、dli数据源](tag:nohcs)非必填，dws数据源必填，dws数据源Schema名称
    * tableName  必填，表名称
    *
    * @var string[]
    */
    protected static $getters = [
            'datasourceType' => 'getDatasourceType',
            'clusterId' => 'getClusterId',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName'
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
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['datasourceType'] === null) {
            $invalidProperties[] = "'datasourceType' can't be null";
        }
            if ((mb_strlen($this->container['datasourceType']) > 10)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['datasourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
            if ((mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['databaseName']) < 0)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 128)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 0)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
            if ((mb_strlen($this->container['tableName']) > 256)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['tableName']) < 0)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 0.";
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
    * Gets datasourceType
    *  必填，数据源类型，枚举：HIVE[、DLI](tag:nohcs)、DWS
    *
    * @return string
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string $datasourceType 必填，数据源类型，枚举：HIVE[、DLI](tag:nohcs)、DWS
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets clusterId
    *  数据源集群id ，Mrs和dws数据源必填[，dli数据源可不传](tag:nohcs)
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 数据源集群id ，Mrs和dws数据源必填[，dli数据源可不传](tag:nohcs)
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets databaseName
    *  必填，数据库名称
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 必填，数据库名称
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets schemaName
    *  Mrs[、dli数据源](tag:nohcs)非必填，dws数据源必填，dws数据源Schema名称
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName Mrs[、dli数据源](tag:nohcs)非必填，dws数据源必填，dws数据源Schema名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets tableName
    *  必填，表名称
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 必填，表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
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

