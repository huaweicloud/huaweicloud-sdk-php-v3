<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityPermissionSetPermissionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityPermissionSetPermissionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * permissionType  权限类型, DENY, ALLOW
    * permissionAction  权限操作列表
    * permissionActions  权限操作列表
    * permissionActionCode  权限操作编码, 位图
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型, HIVE
    * databaseName  数据库名称
    * schemaName  模式名称
    * namespace  命名空间
    * tableName  表名称
    * columnName  列名称
    * rowLevelSecurity  行级策略
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * url  url路径名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'permissionSetId' => 'string',
            'projectId' => 'string',
            'instanceId' => 'string',
            'permissionType' => 'string',
            'permissionAction' => 'string',
            'permissionActions' => 'string[]',
            'permissionActionCode' => 'int',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'datasourceType' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'namespace' => 'string',
            'tableName' => 'string',
            'columnName' => 'string',
            'rowLevelSecurity' => 'string',
            'syncStatus' => 'string',
            'syncMsg' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * permissionType  权限类型, DENY, ALLOW
    * permissionAction  权限操作列表
    * permissionActions  权限操作列表
    * permissionActionCode  权限操作编码, 位图
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型, HIVE
    * databaseName  数据库名称
    * schemaName  模式名称
    * namespace  命名空间
    * tableName  表名称
    * columnName  列名称
    * rowLevelSecurity  行级策略
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * url  url路径名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'permissionSetId' => null,
        'projectId' => null,
        'instanceId' => null,
        'permissionType' => null,
        'permissionAction' => null,
        'permissionActions' => null,
        'permissionActionCode' => null,
        'clusterId' => null,
        'clusterName' => null,
        'datasourceType' => null,
        'databaseName' => null,
        'schemaName' => null,
        'namespace' => null,
        'tableName' => null,
        'columnName' => null,
        'rowLevelSecurity' => null,
        'syncStatus' => null,
        'syncMsg' => null,
        'url' => null
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
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * permissionType  权限类型, DENY, ALLOW
    * permissionAction  权限操作列表
    * permissionActions  权限操作列表
    * permissionActionCode  权限操作编码, 位图
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型, HIVE
    * databaseName  数据库名称
    * schemaName  模式名称
    * namespace  命名空间
    * tableName  表名称
    * columnName  列名称
    * rowLevelSecurity  行级策略
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * url  url路径名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'permissionSetId' => 'permission_set_id',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'permissionType' => 'permission_type',
            'permissionAction' => 'permission_action',
            'permissionActions' => 'permission_actions',
            'permissionActionCode' => 'permission_action_code',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'datasourceType' => 'datasource_type',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'namespace' => 'namespace',
            'tableName' => 'table_name',
            'columnName' => 'column_name',
            'rowLevelSecurity' => 'row_level_security',
            'syncStatus' => 'sync_status',
            'syncMsg' => 'sync_msg',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * permissionType  权限类型, DENY, ALLOW
    * permissionAction  权限操作列表
    * permissionActions  权限操作列表
    * permissionActionCode  权限操作编码, 位图
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型, HIVE
    * databaseName  数据库名称
    * schemaName  模式名称
    * namespace  命名空间
    * tableName  表名称
    * columnName  列名称
    * rowLevelSecurity  行级策略
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * url  url路径名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'permissionSetId' => 'setPermissionSetId',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'permissionType' => 'setPermissionType',
            'permissionAction' => 'setPermissionAction',
            'permissionActions' => 'setPermissionActions',
            'permissionActionCode' => 'setPermissionActionCode',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'datasourceType' => 'setDatasourceType',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'namespace' => 'setNamespace',
            'tableName' => 'setTableName',
            'columnName' => 'setColumnName',
            'rowLevelSecurity' => 'setRowLevelSecurity',
            'syncStatus' => 'setSyncStatus',
            'syncMsg' => 'setSyncMsg',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * permissionSetId  权限集id
    * projectId  项目id
    * instanceId  实例id
    * permissionType  权限类型, DENY, ALLOW
    * permissionAction  权限操作列表
    * permissionActions  权限操作列表
    * permissionActionCode  权限操作编码, 位图
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型, HIVE
    * databaseName  数据库名称
    * schemaName  模式名称
    * namespace  命名空间
    * tableName  表名称
    * columnName  列名称
    * rowLevelSecurity  行级策略
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * syncMsg  同步信息
    * url  url路径名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'permissionSetId' => 'getPermissionSetId',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'permissionType' => 'getPermissionType',
            'permissionAction' => 'getPermissionAction',
            'permissionActions' => 'getPermissionActions',
            'permissionActionCode' => 'getPermissionActionCode',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'datasourceType' => 'getDatasourceType',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'namespace' => 'getNamespace',
            'tableName' => 'getTableName',
            'columnName' => 'getColumnName',
            'rowLevelSecurity' => 'getRowLevelSecurity',
            'syncStatus' => 'getSyncStatus',
            'syncMsg' => 'getSyncMsg',
            'url' => 'getUrl'
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
    const PERMISSION_TYPE_DENY = 'DENY';
    const PERMISSION_TYPE_ALLOW = 'ALLOW';
    const PERMISSION_ACTIONS_ALL = 'ALL';
    const PERMISSION_ACTIONS_SELECT = 'SELECT';
    const PERMISSION_ACTIONS_UPDATE = 'UPDATE';
    const PERMISSION_ACTIONS_CREATE = 'CREATE';
    const PERMISSION_ACTIONS_DROP = 'DROP';
    const PERMISSION_ACTIONS_ALTER = 'ALTER';
    const PERMISSION_ACTIONS_INDEX = 'INDEX';
    const PERMISSION_ACTIONS_LOCK = 'LOCK';
    const PERMISSION_ACTIONS_READ = 'READ';
    const PERMISSION_ACTIONS_WRITE = 'WRITE';
    const DATASOURCE_TYPE_HIVE = 'HIVE';
    const SYNC_STATUS_UNKNOWN = 'UNKNOWN';
    const SYNC_STATUS_NOT_SYNC = 'NOT_SYNC';
    const SYNC_STATUS_SYNCING = 'SYNCING';
    const SYNC_STATUS_SYNC_SUCCESS = 'SYNC_SUCCESS';
    const SYNC_STATUS_SYNC_FAIL = 'SYNC_FAIL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionTypeAllowableValues()
    {
        return [
            self::PERMISSION_TYPE_DENY,
            self::PERMISSION_TYPE_ALLOW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionActionsAllowableValues()
    {
        return [
            self::PERMISSION_ACTIONS_ALL,
            self::PERMISSION_ACTIONS_SELECT,
            self::PERMISSION_ACTIONS_UPDATE,
            self::PERMISSION_ACTIONS_CREATE,
            self::PERMISSION_ACTIONS_DROP,
            self::PERMISSION_ACTIONS_ALTER,
            self::PERMISSION_ACTIONS_INDEX,
            self::PERMISSION_ACTIONS_LOCK,
            self::PERMISSION_ACTIONS_READ,
            self::PERMISSION_ACTIONS_WRITE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatasourceTypeAllowableValues()
    {
        return [
            self::DATASOURCE_TYPE_HIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSyncStatusAllowableValues()
    {
        return [
            self::SYNC_STATUS_UNKNOWN,
            self::SYNC_STATUS_NOT_SYNC,
            self::SYNC_STATUS_SYNCING,
            self::SYNC_STATUS_SYNC_SUCCESS,
            self::SYNC_STATUS_SYNC_FAIL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['permissionType'] = isset($data['permissionType']) ? $data['permissionType'] : null;
        $this->container['permissionAction'] = isset($data['permissionAction']) ? $data['permissionAction'] : null;
        $this->container['permissionActions'] = isset($data['permissionActions']) ? $data['permissionActions'] : null;
        $this->container['permissionActionCode'] = isset($data['permissionActionCode']) ? $data['permissionActionCode'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['rowLevelSecurity'] = isset($data['rowLevelSecurity']) ? $data['rowLevelSecurity'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
        $this->container['syncMsg'] = isset($data['syncMsg']) ? $data['syncMsg'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getPermissionTypeAllowableValues();
                if (!is_null($this->container['permissionType']) && !in_array($this->container['permissionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['permissionAction']) && (mb_strlen($this->container['permissionAction']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionAction', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['permissionAction']) && (mb_strlen($this->container['permissionAction']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionAction', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissionActionCode']) && ($this->container['permissionActionCode'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'permissionActionCode', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['permissionActionCode']) && ($this->container['permissionActionCode'] < 0)) {
                $invalidProperties[] = "invalid value for 'permissionActionCode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 128)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 1)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 128)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rowLevelSecurity']) && (mb_strlen($this->container['rowLevelSecurity']) > 128)) {
                $invalidProperties[] = "invalid value for 'rowLevelSecurity', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['rowLevelSecurity']) && (mb_strlen($this->container['rowLevelSecurity']) < 1)) {
                $invalidProperties[] = "invalid value for 'rowLevelSecurity', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSyncStatusAllowableValues();
                if (!is_null($this->container['syncStatus']) && !in_array($this->container['syncStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['syncMsg']) && (mb_strlen($this->container['syncMsg']) > 10240)) {
                $invalidProperties[] = "invalid value for 'syncMsg', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['syncMsg']) && (mb_strlen($this->container['syncMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'syncMsg', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 200)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
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
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets permissionSetId
    *  权限集id
    *
    * @return string|null
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string|null $permissionSetId 权限集id
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets permissionType
    *  权限类型, DENY, ALLOW
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
    * @param string|null $permissionType 权限类型, DENY, ALLOW
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
    *  权限操作列表
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
    * @param string|null $permissionAction 权限操作列表
    *
    * @return $this
    */
    public function setPermissionAction($permissionAction)
    {
        $this->container['permissionAction'] = $permissionAction;
        return $this;
    }

    /**
    * Gets permissionActions
    *  权限操作列表
    *
    * @return string[]|null
    */
    public function getPermissionActions()
    {
        return $this->container['permissionActions'];
    }

    /**
    * Sets permissionActions
    *
    * @param string[]|null $permissionActions 权限操作列表
    *
    * @return $this
    */
    public function setPermissionActions($permissionActions)
    {
        $this->container['permissionActions'] = $permissionActions;
        return $this;
    }

    /**
    * Gets permissionActionCode
    *  权限操作编码, 位图
    *
    * @return int|null
    */
    public function getPermissionActionCode()
    {
        return $this->container['permissionActionCode'];
    }

    /**
    * Sets permissionActionCode
    *
    * @param int|null $permissionActionCode 权限操作编码, 位图
    *
    * @return $this
    */
    public function setPermissionActionCode($permissionActionCode)
    {
        $this->container['permissionActionCode'] = $permissionActionCode;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id
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
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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
    * Gets datasourceType
    *  数据源类型, HIVE
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
    * @param string|null $datasourceType 数据源类型, HIVE
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
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
    *  模式名称
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
    * @param string|null $schemaName 模式名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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
    * Gets columnName
    *  列名称
    *
    * @return string|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string|null $columnName 列名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets rowLevelSecurity
    *  行级策略
    *
    * @return string|null
    */
    public function getRowLevelSecurity()
    {
        return $this->container['rowLevelSecurity'];
    }

    /**
    * Sets rowLevelSecurity
    *
    * @param string|null $rowLevelSecurity 行级策略
    *
    * @return $this
    */
    public function setRowLevelSecurity($rowLevelSecurity)
    {
        $this->container['rowLevelSecurity'] = $rowLevelSecurity;
        return $this;
    }

    /**
    * Gets syncStatus
    *  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    *
    * @return string|null
    */
    public function getSyncStatus()
    {
        return $this->container['syncStatus'];
    }

    /**
    * Sets syncStatus
    *
    * @param string|null $syncStatus 同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    *
    * @return $this
    */
    public function setSyncStatus($syncStatus)
    {
        $this->container['syncStatus'] = $syncStatus;
        return $this;
    }

    /**
    * Gets syncMsg
    *  同步信息
    *
    * @return string|null
    */
    public function getSyncMsg()
    {
        return $this->container['syncMsg'];
    }

    /**
    * Sets syncMsg
    *
    * @param string|null $syncMsg 同步信息
    *
    * @return $this
    */
    public function setSyncMsg($syncMsg)
    {
        $this->container['syncMsg'] = $syncMsg;
        return $this;
    }

    /**
    * Gets url
    *  url路径名称。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url路径名称。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

