<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDataPreviewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDataPreviewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  连接id
    * dataType  数据源表类型，取值范围：hive_table、dws_table、dli_table、dli_table_managed、dli_table_external、dli_table_view、mysql_table、gbase_table、postgre_table、hbase_table、dm_table、doris_table、sqlserver_table。
    * database  database名称
    * schema  schema名称
    * table  table名称
    * datasourceWorkspaceId  数据源空间id
    * partitionsCondition  分区名称，hive类型数据源可使用预览分区中数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'guid' => 'string',
            'dataConnectionId' => 'string',
            'dataType' => 'string',
            'database' => 'string',
            'schema' => 'string',
            'table' => 'string',
            'datasourceWorkspaceId' => 'string',
            'partitionsCondition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  连接id
    * dataType  数据源表类型，取值范围：hive_table、dws_table、dli_table、dli_table_managed、dli_table_external、dli_table_view、mysql_table、gbase_table、postgre_table、hbase_table、dm_table、doris_table、sqlserver_table。
    * database  database名称
    * schema  schema名称
    * table  table名称
    * datasourceWorkspaceId  数据源空间id
    * partitionsCondition  分区名称，hive类型数据源可使用预览分区中数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'guid' => null,
        'dataConnectionId' => null,
        'dataType' => null,
        'database' => null,
        'schema' => null,
        'table' => null,
        'datasourceWorkspaceId' => null,
        'partitionsCondition' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  连接id
    * dataType  数据源表类型，取值范围：hive_table、dws_table、dli_table、dli_table_managed、dli_table_external、dli_table_view、mysql_table、gbase_table、postgre_table、hbase_table、dm_table、doris_table、sqlserver_table。
    * database  database名称
    * schema  schema名称
    * table  table名称
    * datasourceWorkspaceId  数据源空间id
    * partitionsCondition  分区名称，hive类型数据源可使用预览分区中数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'guid' => 'guid',
            'dataConnectionId' => 'data_connection_id',
            'dataType' => 'data_type',
            'database' => 'database',
            'schema' => 'schema',
            'table' => 'table',
            'datasourceWorkspaceId' => 'datasource_workspace_id',
            'partitionsCondition' => 'partitions_condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  连接id
    * dataType  数据源表类型，取值范围：hive_table、dws_table、dli_table、dli_table_managed、dli_table_external、dli_table_view、mysql_table、gbase_table、postgre_table、hbase_table、dm_table、doris_table、sqlserver_table。
    * database  database名称
    * schema  schema名称
    * table  table名称
    * datasourceWorkspaceId  数据源空间id
    * partitionsCondition  分区名称，hive类型数据源可使用预览分区中数据
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'guid' => 'setGuid',
            'dataConnectionId' => 'setDataConnectionId',
            'dataType' => 'setDataType',
            'database' => 'setDatabase',
            'schema' => 'setSchema',
            'table' => 'setTable',
            'datasourceWorkspaceId' => 'setDatasourceWorkspaceId',
            'partitionsCondition' => 'setPartitionsCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  连接id
    * dataType  数据源表类型，取值范围：hive_table、dws_table、dli_table、dli_table_managed、dli_table_external、dli_table_view、mysql_table、gbase_table、postgre_table、hbase_table、dm_table、doris_table、sqlserver_table。
    * database  database名称
    * schema  schema名称
    * table  table名称
    * datasourceWorkspaceId  数据源空间id
    * partitionsCondition  分区名称，hive类型数据源可使用预览分区中数据
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'guid' => 'getGuid',
            'dataConnectionId' => 'getDataConnectionId',
            'dataType' => 'getDataType',
            'database' => 'getDatabase',
            'schema' => 'getSchema',
            'table' => 'getTable',
            'datasourceWorkspaceId' => 'getDatasourceWorkspaceId',
            'partitionsCondition' => 'getPartitionsCondition'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['dataConnectionId'] = isset($data['dataConnectionId']) ? $data['dataConnectionId'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['datasourceWorkspaceId'] = isset($data['datasourceWorkspaceId']) ? $data['datasourceWorkspaceId'] : null;
        $this->container['partitionsCondition'] = isset($data['partitionsCondition']) ? $data['partitionsCondition'] : null;
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
        if ($this->container['guid'] === null) {
            $invalidProperties[] = "'guid' can't be null";
        }
            if (!is_null($this->container['dataConnectionId']) && (mb_strlen($this->container['dataConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataConnectionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataConnectionId']) && (mb_strlen($this->container['dataConnectionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataConnectionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataType']) && (mb_strlen($this->container['dataType']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) > 64)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) < 1)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) > 64)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) < 1)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) > 256)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) < 1)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['datasourceWorkspaceId']) && (mb_strlen($this->container['datasourceWorkspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'datasourceWorkspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['datasourceWorkspaceId']) && (mb_strlen($this->container['datasourceWorkspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'datasourceWorkspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['partitionsCondition']) && (mb_strlen($this->container['partitionsCondition']) > 256)) {
                $invalidProperties[] = "invalid value for 'partitionsCondition', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['partitionsCondition']) && (mb_strlen($this->container['partitionsCondition']) < 1)) {
                $invalidProperties[] = "invalid value for 'partitionsCondition', the character length must be bigger than or equal to 1.";
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
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
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
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets guid
    *  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    *
    * @return string
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string $guid 资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets dataConnectionId
    *  连接id
    *
    * @return string|null
    */
    public function getDataConnectionId()
    {
        return $this->container['dataConnectionId'];
    }

    /**
    * Sets dataConnectionId
    *
    * @param string|null $dataConnectionId 连接id
    *
    * @return $this
    */
    public function setDataConnectionId($dataConnectionId)
    {
        $this->container['dataConnectionId'] = $dataConnectionId;
        return $this;
    }

    /**
    * Gets dataType
    *  数据源表类型，取值范围：hive_table、dws_table、dli_table、dli_table_managed、dli_table_external、dli_table_view、mysql_table、gbase_table、postgre_table、hbase_table、dm_table、doris_table、sqlserver_table。
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 数据源表类型，取值范围：hive_table、dws_table、dli_table、dli_table_managed、dli_table_external、dli_table_view、mysql_table、gbase_table、postgre_table、hbase_table、dm_table、doris_table、sqlserver_table。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets database
    *  database名称
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database database名称
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets schema
    *  schema名称
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema schema名称
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets table
    *  table名称
    *
    * @return string|null
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string|null $table table名称
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets datasourceWorkspaceId
    *  数据源空间id
    *
    * @return string|null
    */
    public function getDatasourceWorkspaceId()
    {
        return $this->container['datasourceWorkspaceId'];
    }

    /**
    * Sets datasourceWorkspaceId
    *
    * @param string|null $datasourceWorkspaceId 数据源空间id
    *
    * @return $this
    */
    public function setDatasourceWorkspaceId($datasourceWorkspaceId)
    {
        $this->container['datasourceWorkspaceId'] = $datasourceWorkspaceId;
        return $this;
    }

    /**
    * Gets partitionsCondition
    *  分区名称，hive类型数据源可使用预览分区中数据
    *
    * @return string|null
    */
    public function getPartitionsCondition()
    {
        return $this->container['partitionsCondition'];
    }

    /**
    * Sets partitionsCondition
    *
    * @param string|null $partitionsCondition 分区名称，hive类型数据源可使用预览分区中数据
    *
    * @return $this
    */
    public function setPartitionsCondition($partitionsCondition)
    {
        $this->container['partitionsCondition'] = $partitionsCondition;
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

