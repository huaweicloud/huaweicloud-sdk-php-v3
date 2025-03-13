<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnoseNoMaskingDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnoseNoMaskingDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  详情uuid
    * projectId  项目ID
    * taskId  诊断任务id
    * datasourceType  数据源类型
    * clusterName  集群名称
    * database  数据库名称
    * schema  schema名称
    * table  表名称
    * remark  详情评价
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'taskId' => 'string',
            'datasourceType' => 'string',
            'clusterName' => 'string',
            'database' => 'string',
            'schema' => 'string',
            'table' => 'string',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  详情uuid
    * projectId  项目ID
    * taskId  诊断任务id
    * datasourceType  数据源类型
    * clusterName  集群名称
    * database  数据库名称
    * schema  schema名称
    * table  表名称
    * remark  详情评价
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'taskId' => null,
        'datasourceType' => null,
        'clusterName' => null,
        'database' => null,
        'schema' => null,
        'table' => null,
        'remark' => null
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
    * id  详情uuid
    * projectId  项目ID
    * taskId  诊断任务id
    * datasourceType  数据源类型
    * clusterName  集群名称
    * database  数据库名称
    * schema  schema名称
    * table  表名称
    * remark  详情评价
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'taskId' => 'task_id',
            'datasourceType' => 'datasource_type',
            'clusterName' => 'cluster_name',
            'database' => 'database',
            'schema' => 'schema',
            'table' => 'table',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  详情uuid
    * projectId  项目ID
    * taskId  诊断任务id
    * datasourceType  数据源类型
    * clusterName  集群名称
    * database  数据库名称
    * schema  schema名称
    * table  表名称
    * remark  详情评价
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'taskId' => 'setTaskId',
            'datasourceType' => 'setDatasourceType',
            'clusterName' => 'setClusterName',
            'database' => 'setDatabase',
            'schema' => 'setSchema',
            'table' => 'setTable',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  详情uuid
    * projectId  项目ID
    * taskId  诊断任务id
    * datasourceType  数据源类型
    * clusterName  集群名称
    * database  数据库名称
    * schema  schema名称
    * table  表名称
    * remark  详情评价
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'taskId' => 'getTaskId',
            'datasourceType' => 'getDatasourceType',
            'clusterName' => 'getClusterName',
            'database' => 'getDatabase',
            'schema' => 'getSchema',
            'table' => 'getTable',
            'remark' => 'getRemark'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['datasourceType']) && (mb_strlen($this->container['datasourceType']) > 255)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['datasourceType']) && (mb_strlen($this->container['datasourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 255)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) > 255)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) < 1)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) > 255)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) < 1)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) > 255)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) < 1)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 512)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 1)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  详情uuid
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 详情uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets taskId
    *  诊断任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 诊断任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据源类型
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
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
    * Gets database
    *  数据库名称
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
    * @param string|null $database 数据库名称
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
    *  表名称
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
    * @param string|null $table 表名称
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets remark
    *  详情评价
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 详情评价
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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

