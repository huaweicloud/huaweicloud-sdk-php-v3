<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecuritySensitiveDataOverviewsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecuritySensitiveDataOverviewsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * datasource  数据源类型,HIVE数据源,DWS数据源,DLI数据源
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'datasource' => 'string',
            'clusterName' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * datasource  数据源类型,HIVE数据源,DWS数据源,DLI数据源
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'datasource' => null,
        'clusterName' => null,
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
    * workspace  DataArts Studio工作空间ID
    * datasource  数据源类型,HIVE数据源,DWS数据源,DLI数据源
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'datasource' => 'datasource',
            'clusterName' => 'cluster_name',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * datasource  数据源类型,HIVE数据源,DWS数据源,DLI数据源
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'datasource' => 'setDatasource',
            'clusterName' => 'setClusterName',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * datasource  数据源类型,HIVE数据源,DWS数据源,DLI数据源
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'datasource' => 'getDatasource',
            'clusterName' => 'getClusterName',
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
    const DATASOURCE_HIVE = 'HIVE';
    const DATASOURCE_DWS = 'DWS';
    const DATASOURCE_DLI = 'DLI';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatasourceAllowableValues()
    {
        return [
            self::DATASOURCE_HIVE,
            self::DATASOURCE_DWS,
            self::DATASOURCE_DLI,
        ];
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['datasource'] = isset($data['datasource']) ? $data['datasource'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
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
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDatasourceAllowableValues();
                if (!is_null($this->container['datasource']) && !in_array($this->container['datasource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 64)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 0)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets datasource
    *  数据源类型,HIVE数据源,DWS数据源,DLI数据源
    *
    * @return string|null
    */
    public function getDatasource()
    {
        return $this->container['datasource'];
    }

    /**
    * Sets datasource
    *
    * @param string|null $datasource 数据源类型,HIVE数据源,DWS数据源,DLI数据源
    *
    * @return $this
    */
    public function setDatasource($datasource)
    {
        $this->container['datasource'] = $datasource;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
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
    * Gets schemaName
    *  schema名称
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
    * @param string|null $schemaName schema名称
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
    *  表名称
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名称
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

