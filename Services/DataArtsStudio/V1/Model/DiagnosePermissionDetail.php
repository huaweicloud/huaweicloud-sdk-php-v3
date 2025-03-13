<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosePermissionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosePermissionDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  权限配置编号。
    * taskId  诊断任务id。
    * userName  用户名。
    * permissionType  权限类型。
    * permissionAction  权限操作。
    * permissionSource  权限来源。
    * datasourceType  数据源类型。
    * clusterName  集群名称。
    * database  数据库名。
    * schema  schema名。
    * table  表名。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'taskId' => 'string',
            'userName' => 'string',
            'permissionType' => 'string',
            'permissionAction' => 'string',
            'permissionSource' => 'string',
            'datasourceType' => 'string',
            'clusterName' => 'string',
            'database' => 'string',
            'schema' => 'string',
            'table' => 'string',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  权限配置编号。
    * taskId  诊断任务id。
    * userName  用户名。
    * permissionType  权限类型。
    * permissionAction  权限操作。
    * permissionSource  权限来源。
    * datasourceType  数据源类型。
    * clusterName  集群名称。
    * database  数据库名。
    * schema  schema名。
    * table  表名。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'taskId' => null,
        'userName' => null,
        'permissionType' => null,
        'permissionAction' => null,
        'permissionSource' => null,
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
    * id  权限配置编号。
    * taskId  诊断任务id。
    * userName  用户名。
    * permissionType  权限类型。
    * permissionAction  权限操作。
    * permissionSource  权限来源。
    * datasourceType  数据源类型。
    * clusterName  集群名称。
    * database  数据库名。
    * schema  schema名。
    * table  表名。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'taskId' => 'task_id',
            'userName' => 'user_name',
            'permissionType' => 'permission_type',
            'permissionAction' => 'permission_action',
            'permissionSource' => 'permission_source',
            'datasourceType' => 'datasource_type',
            'clusterName' => 'cluster_name',
            'database' => 'database',
            'schema' => 'schema',
            'table' => 'table',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  权限配置编号。
    * taskId  诊断任务id。
    * userName  用户名。
    * permissionType  权限类型。
    * permissionAction  权限操作。
    * permissionSource  权限来源。
    * datasourceType  数据源类型。
    * clusterName  集群名称。
    * database  数据库名。
    * schema  schema名。
    * table  表名。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'taskId' => 'setTaskId',
            'userName' => 'setUserName',
            'permissionType' => 'setPermissionType',
            'permissionAction' => 'setPermissionAction',
            'permissionSource' => 'setPermissionSource',
            'datasourceType' => 'setDatasourceType',
            'clusterName' => 'setClusterName',
            'database' => 'setDatabase',
            'schema' => 'setSchema',
            'table' => 'setTable',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  权限配置编号。
    * taskId  诊断任务id。
    * userName  用户名。
    * permissionType  权限类型。
    * permissionAction  权限操作。
    * permissionSource  权限来源。
    * datasourceType  数据源类型。
    * clusterName  集群名称。
    * database  数据库名。
    * schema  schema名。
    * table  表名。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'taskId' => 'getTaskId',
            'userName' => 'getUserName',
            'permissionType' => 'getPermissionType',
            'permissionAction' => 'getPermissionAction',
            'permissionSource' => 'getPermissionSource',
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['permissionType'] = isset($data['permissionType']) ? $data['permissionType'] : null;
        $this->container['permissionAction'] = isset($data['permissionAction']) ? $data['permissionAction'] : null;
        $this->container['permissionSource'] = isset($data['permissionSource']) ? $data['permissionSource'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissionType']) && (mb_strlen($this->container['permissionType']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['permissionType']) && (mb_strlen($this->container['permissionType']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissionAction']) && (mb_strlen($this->container['permissionAction']) > 256)) {
                $invalidProperties[] = "invalid value for 'permissionAction', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['permissionAction']) && (mb_strlen($this->container['permissionAction']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionAction', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissionSource']) && (mb_strlen($this->container['permissionSource']) > 256)) {
                $invalidProperties[] = "invalid value for 'permissionSource', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['permissionSource']) && (mb_strlen($this->container['permissionSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionSource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datasourceType']) && (mb_strlen($this->container['datasourceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['datasourceType']) && (mb_strlen($this->container['datasourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) > 128)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) < 0)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) > 128)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) < 0)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) > 128)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) < 0)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 256)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
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
    *  权限配置编号。
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
    * @param string|null $id 权限配置编号。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets taskId
    *  诊断任务id。
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
    * @param string|null $taskId 诊断任务id。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets permissionType
    *  权限类型。
    *
    * @return string|null
    */
    public function getPermissionType()
    {
        return $this->container['permissionType'];
    }

    /**
    * Sets permissionType
    *
    * @param string|null $permissionType 权限类型。
    *
    * @return $this
    */
    public function setPermissionType($permissionType)
    {
        $this->container['permissionType'] = $permissionType;
        return $this;
    }

    /**
    * Gets permissionAction
    *  权限操作。
    *
    * @return string|null
    */
    public function getPermissionAction()
    {
        return $this->container['permissionAction'];
    }

    /**
    * Sets permissionAction
    *
    * @param string|null $permissionAction 权限操作。
    *
    * @return $this
    */
    public function setPermissionAction($permissionAction)
    {
        $this->container['permissionAction'] = $permissionAction;
        return $this;
    }

    /**
    * Gets permissionSource
    *  权限来源。
    *
    * @return string|null
    */
    public function getPermissionSource()
    {
        return $this->container['permissionSource'];
    }

    /**
    * Sets permissionSource
    *
    * @param string|null $permissionSource 权限来源。
    *
    * @return $this
    */
    public function setPermissionSource($permissionSource)
    {
        $this->container['permissionSource'] = $permissionSource;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型。
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
    * @param string|null $datasourceType 数据源类型。
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
    *  集群名称。
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
    * @param string|null $clusterName 集群名称。
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
    *  数据库名。
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
    * @param string|null $database 数据库名。
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
    *  schema名。
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
    * @param string|null $schema schema名。
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
    *  表名。
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
    * @param string|null $table 表名。
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
    *  备注。
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
    * @param string|null $remark 备注。
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

