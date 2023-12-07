<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityPermissionSetPermissionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityPermissionSetPermissionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionSetId  权限集id
    * workspace  workspace 信息
    * limit  limit
    * offset  offset
    * permissionType  权限类型,DENY,ALLOW
    * permissionAction  权限操作,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * columnName  列名称
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, CLUSTER_NAME, DATABASE_NAME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionSetId' => 'string',
            'workspace' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'permissionType' => 'string',
            'permissionAction' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'datasourceType' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'columnName' => 'string',
            'syncStatus' => 'string',
            'orderBy' => 'string',
            'orderByAsc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionSetId  权限集id
    * workspace  workspace 信息
    * limit  limit
    * offset  offset
    * permissionType  权限类型,DENY,ALLOW
    * permissionAction  权限操作,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * columnName  列名称
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, CLUSTER_NAME, DATABASE_NAME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionSetId' => null,
        'workspace' => null,
        'limit' => null,
        'offset' => null,
        'permissionType' => null,
        'permissionAction' => null,
        'clusterId' => null,
        'clusterName' => null,
        'datasourceType' => null,
        'databaseName' => null,
        'tableName' => null,
        'columnName' => null,
        'syncStatus' => null,
        'orderBy' => null,
        'orderByAsc' => null
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
    * permissionSetId  权限集id
    * workspace  workspace 信息
    * limit  limit
    * offset  offset
    * permissionType  权限类型,DENY,ALLOW
    * permissionAction  权限操作,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * columnName  列名称
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, CLUSTER_NAME, DATABASE_NAME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionSetId' => 'permission_set_id',
            'workspace' => 'workspace',
            'limit' => 'limit',
            'offset' => 'offset',
            'permissionType' => 'permission_type',
            'permissionAction' => 'permission_action',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'datasourceType' => 'datasource_type',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'columnName' => 'column_name',
            'syncStatus' => 'sync_status',
            'orderBy' => 'order_by',
            'orderByAsc' => 'order_by_asc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionSetId  权限集id
    * workspace  workspace 信息
    * limit  limit
    * offset  offset
    * permissionType  权限类型,DENY,ALLOW
    * permissionAction  权限操作,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * columnName  列名称
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, CLUSTER_NAME, DATABASE_NAME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionSetId' => 'setPermissionSetId',
            'workspace' => 'setWorkspace',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'permissionType' => 'setPermissionType',
            'permissionAction' => 'setPermissionAction',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'datasourceType' => 'setDatasourceType',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'columnName' => 'setColumnName',
            'syncStatus' => 'setSyncStatus',
            'orderBy' => 'setOrderBy',
            'orderByAsc' => 'setOrderByAsc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionSetId  权限集id
    * workspace  workspace 信息
    * limit  limit
    * offset  offset
    * permissionType  权限类型,DENY,ALLOW
    * permissionAction  权限操作,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型,HIVE
    * databaseName  数据库名称
    * tableName  表名称
    * columnName  列名称
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, CLUSTER_NAME, DATABASE_NAME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionSetId' => 'getPermissionSetId',
            'workspace' => 'getWorkspace',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'permissionType' => 'getPermissionType',
            'permissionAction' => 'getPermissionAction',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'datasourceType' => 'getDatasourceType',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'columnName' => 'getColumnName',
            'syncStatus' => 'getSyncStatus',
            'orderBy' => 'getOrderBy',
            'orderByAsc' => 'getOrderByAsc'
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
    const PERMISSION_ACTION_ALL = 'ALL';
    const PERMISSION_ACTION_SELECT = 'SELECT';
    const PERMISSION_ACTION_UPDATE = 'UPDATE';
    const PERMISSION_ACTION_CREATE = 'CREATE';
    const PERMISSION_ACTION_DROP = 'DROP';
    const PERMISSION_ACTION_ALTER = 'ALTER';
    const PERMISSION_ACTION_INDEX = 'INDEX';
    const PERMISSION_ACTION_LOCK = 'LOCK';
    const PERMISSION_ACTION_READ = 'READ';
    const PERMISSION_ACTION_WRITE = 'WRITE';
    const DATASOURCE_TYPE_HIVE = 'HIVE';
    const SYNC_STATUS_UNKNOWN = 'UNKNOWN';
    const SYNC_STATUS_NOT_SYNC = 'NOT_SYNC';
    const SYNC_STATUS_SYNCING = 'SYNCING';
    const SYNC_STATUS_SYNC_SUCCESS = 'SYNC_SUCCESS';
    const SYNC_STATUS_SYNC_FAIL = 'SYNC_FAIL';
    const ORDER_BY_CLUSTER_NAME = 'CLUSTER_NAME';
    const ORDER_BY_DATABASE_NAME = 'DATABASE_NAME';
    

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
    public function getPermissionActionAllowableValues()
    {
        return [
            self::PERMISSION_ACTION_ALL,
            self::PERMISSION_ACTION_SELECT,
            self::PERMISSION_ACTION_UPDATE,
            self::PERMISSION_ACTION_CREATE,
            self::PERMISSION_ACTION_DROP,
            self::PERMISSION_ACTION_ALTER,
            self::PERMISSION_ACTION_INDEX,
            self::PERMISSION_ACTION_LOCK,
            self::PERMISSION_ACTION_READ,
            self::PERMISSION_ACTION_WRITE,
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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_CLUSTER_NAME,
            self::ORDER_BY_DATABASE_NAME,
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
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['permissionType'] = isset($data['permissionType']) ? $data['permissionType'] : null;
        $this->container['permissionAction'] = isset($data['permissionAction']) ? $data['permissionAction'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['orderByAsc'] = isset($data['orderByAsc']) ? $data['orderByAsc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['permissionSetId'] === null) {
            $invalidProperties[] = "'permissionSetId' can't be null";
        }
            if ((mb_strlen($this->container['permissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['permissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPermissionTypeAllowableValues();
                if (!is_null($this->container['permissionType']) && !in_array($this->container['permissionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPermissionActionAllowableValues();
                if (!is_null($this->container['permissionAction']) && !in_array($this->container['permissionAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
            $allowedValues = $this->getSyncStatusAllowableValues();
                if (!is_null($this->container['syncStatus']) && !in_array($this->container['syncStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets permissionSetId
    *  权限集id
    *
    * @return string
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string $permissionSetId 权限集id
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
        return $this;
    }

    /**
    * Gets workspace
    *  workspace 信息
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
    * @param string $workspace workspace 信息
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets limit
    *  limit
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  offset
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets permissionType
    *  权限类型,DENY,ALLOW
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
    * @param string|null $permissionType 权限类型,DENY,ALLOW
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
    *  权限操作,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
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
    * @param string|null $permissionAction 权限操作,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    *
    * @return $this
    */
    public function setPermissionAction($permissionAction)
    {
        $this->container['permissionAction'] = $permissionAction;
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
    *  数据源类型,HIVE
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
    * @param string|null $datasourceType 数据源类型,HIVE
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
    * Gets orderBy
    *  排序参数, CLUSTER_NAME, DATABASE_NAME
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序参数, CLUSTER_NAME, DATABASE_NAME
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets orderByAsc
    *  是否升序（仅指定排序参数时有效）
    *
    * @return bool|null
    */
    public function getOrderByAsc()
    {
        return $this->container['orderByAsc'];
    }

    /**
    * Sets orderByAsc
    *
    * @param bool|null $orderByAsc 是否升序（仅指定排序参数时有效）
    *
    * @return $this
    */
    public function setOrderByAsc($orderByAsc)
    {
        $this->container['orderByAsc'] = $orderByAsc;
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

