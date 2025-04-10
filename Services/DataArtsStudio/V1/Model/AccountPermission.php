<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountPermission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountPermission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * columnName  列名
    * databaseName  数据库名
    * datasourceType  数据源类型,HIVE
    * expireMsg  到期信息
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * expireTime  到期时间
    * id  权限id
    * instanceId  实例id
    * memberId  成员id
    * memberName  成员名称
    * permissionAction  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * permissionActionCode  权限位图
    * projectId  项目ID
    * rowLevelSecurity  行级权限表达式
    * rowLevelSecurityDesc  行级权限描述
    * schemaName  schema名称
    * tableName  表名
    * workspaceId  工作空间id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'columnName' => 'string',
            'databaseName' => 'string',
            'datasourceType' => 'string',
            'expireMsg' => 'string',
            'expireStatus' => 'string',
            'expireTime' => 'int',
            'id' => 'string',
            'instanceId' => 'string',
            'memberId' => 'string',
            'memberName' => 'string',
            'permissionAction' => 'string',
            'permissionActionCode' => 'int',
            'projectId' => 'string',
            'rowLevelSecurity' => 'string',
            'rowLevelSecurityDesc' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * columnName  列名
    * databaseName  数据库名
    * datasourceType  数据源类型,HIVE
    * expireMsg  到期信息
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * expireTime  到期时间
    * id  权限id
    * instanceId  实例id
    * memberId  成员id
    * memberName  成员名称
    * permissionAction  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * permissionActionCode  权限位图
    * projectId  项目ID
    * rowLevelSecurity  行级权限表达式
    * rowLevelSecurityDesc  行级权限描述
    * schemaName  schema名称
    * tableName  表名
    * workspaceId  工作空间id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'columnName' => null,
        'databaseName' => null,
        'datasourceType' => null,
        'expireMsg' => null,
        'expireStatus' => null,
        'expireTime' => 'int64',
        'id' => null,
        'instanceId' => null,
        'memberId' => null,
        'memberName' => null,
        'permissionAction' => null,
        'permissionActionCode' => 'int64',
        'projectId' => null,
        'rowLevelSecurity' => null,
        'rowLevelSecurityDesc' => null,
        'schemaName' => null,
        'tableName' => null,
        'workspaceId' => null
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
    * clusterId  集群id
    * clusterName  集群名称
    * columnName  列名
    * databaseName  数据库名
    * datasourceType  数据源类型,HIVE
    * expireMsg  到期信息
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * expireTime  到期时间
    * id  权限id
    * instanceId  实例id
    * memberId  成员id
    * memberName  成员名称
    * permissionAction  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * permissionActionCode  权限位图
    * projectId  项目ID
    * rowLevelSecurity  行级权限表达式
    * rowLevelSecurityDesc  行级权限描述
    * schemaName  schema名称
    * tableName  表名
    * workspaceId  工作空间id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'columnName' => 'column_name',
            'databaseName' => 'database_name',
            'datasourceType' => 'datasource_type',
            'expireMsg' => 'expire_msg',
            'expireStatus' => 'expire_status',
            'expireTime' => 'expire_time',
            'id' => 'id',
            'instanceId' => 'instance_id',
            'memberId' => 'member_id',
            'memberName' => 'member_name',
            'permissionAction' => 'permission_action',
            'permissionActionCode' => 'permission_action_code',
            'projectId' => 'project_id',
            'rowLevelSecurity' => 'row_level_security',
            'rowLevelSecurityDesc' => 'row_level_security_desc',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * clusterName  集群名称
    * columnName  列名
    * databaseName  数据库名
    * datasourceType  数据源类型,HIVE
    * expireMsg  到期信息
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * expireTime  到期时间
    * id  权限id
    * instanceId  实例id
    * memberId  成员id
    * memberName  成员名称
    * permissionAction  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * permissionActionCode  权限位图
    * projectId  项目ID
    * rowLevelSecurity  行级权限表达式
    * rowLevelSecurityDesc  行级权限描述
    * schemaName  schema名称
    * tableName  表名
    * workspaceId  工作空间id
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'columnName' => 'setColumnName',
            'databaseName' => 'setDatabaseName',
            'datasourceType' => 'setDatasourceType',
            'expireMsg' => 'setExpireMsg',
            'expireStatus' => 'setExpireStatus',
            'expireTime' => 'setExpireTime',
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'memberId' => 'setMemberId',
            'memberName' => 'setMemberName',
            'permissionAction' => 'setPermissionAction',
            'permissionActionCode' => 'setPermissionActionCode',
            'projectId' => 'setProjectId',
            'rowLevelSecurity' => 'setRowLevelSecurity',
            'rowLevelSecurityDesc' => 'setRowLevelSecurityDesc',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * clusterName  集群名称
    * columnName  列名
    * databaseName  数据库名
    * datasourceType  数据源类型,HIVE
    * expireMsg  到期信息
    * expireStatus  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    * expireTime  到期时间
    * id  权限id
    * instanceId  实例id
    * memberId  成员id
    * memberName  成员名称
    * permissionAction  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * permissionActionCode  权限位图
    * projectId  项目ID
    * rowLevelSecurity  行级权限表达式
    * rowLevelSecurityDesc  行级权限描述
    * schemaName  schema名称
    * tableName  表名
    * workspaceId  工作空间id
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'columnName' => 'getColumnName',
            'databaseName' => 'getDatabaseName',
            'datasourceType' => 'getDatasourceType',
            'expireMsg' => 'getExpireMsg',
            'expireStatus' => 'getExpireStatus',
            'expireTime' => 'getExpireTime',
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'memberId' => 'getMemberId',
            'memberName' => 'getMemberName',
            'permissionAction' => 'getPermissionAction',
            'permissionActionCode' => 'getPermissionActionCode',
            'projectId' => 'getProjectId',
            'rowLevelSecurity' => 'getRowLevelSecurity',
            'rowLevelSecurityDesc' => 'getRowLevelSecurityDesc',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'workspaceId' => 'getWorkspaceId'
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
    const DATASOURCE_TYPE_HIVE = 'HIVE';
    const EXPIRE_STATUS_REVOKE_FAILED = 'REVOKE_FAILED';
    const EXPIRE_STATUS_TO_BE_REVOKE = 'TO_BE_REVOKE';
    const EXPIRE_STATUS_INACTIVE = 'INACTIVE';
    const EXPIRE_STATUS_PERMANENTLY_ACTIVE = 'PERMANENTLY_ACTIVE';
    const EXPIRE_STATUS_ACTIVE = 'ACTIVE';
    const EXPIRE_STATUS_EXPIRE_SOON = 'EXPIRE_SOON';
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
    public function getExpireStatusAllowableValues()
    {
        return [
            self::EXPIRE_STATUS_REVOKE_FAILED,
            self::EXPIRE_STATUS_TO_BE_REVOKE,
            self::EXPIRE_STATUS_INACTIVE,
            self::EXPIRE_STATUS_PERMANENTLY_ACTIVE,
            self::EXPIRE_STATUS_ACTIVE,
            self::EXPIRE_STATUS_EXPIRE_SOON,
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['expireMsg'] = isset($data['expireMsg']) ? $data['expireMsg'] : null;
        $this->container['expireStatus'] = isset($data['expireStatus']) ? $data['expireStatus'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['memberId'] = isset($data['memberId']) ? $data['memberId'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['permissionAction'] = isset($data['permissionAction']) ? $data['permissionAction'] : null;
        $this->container['permissionActionCode'] = isset($data['permissionActionCode']) ? $data['permissionActionCode'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['rowLevelSecurity'] = isset($data['rowLevelSecurity']) ? $data['rowLevelSecurity'] : null;
        $this->container['rowLevelSecurityDesc'] = isset($data['rowLevelSecurityDesc']) ? $data['rowLevelSecurityDesc'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
            if ((mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['datasourceType'] === null) {
            $invalidProperties[] = "'datasourceType' can't be null";
        }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['expireMsg']) && (mb_strlen($this->container['expireMsg']) > 65535)) {
                $invalidProperties[] = "invalid value for 'expireMsg', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['expireMsg']) && (mb_strlen($this->container['expireMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'expireMsg', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['expireStatus'] === null) {
            $invalidProperties[] = "'expireStatus' can't be null";
        }
            $allowedValues = $this->getExpireStatusAllowableValues();
                if (!is_null($this->container['expireStatus']) && !in_array($this->container['expireStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'expireStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] > 2830012519194)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be smaller than or equal to 2830012519194.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be bigger than or equal to 0.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberId']) && (mb_strlen($this->container['memberId']) > 32)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['memberId']) && (mb_strlen($this->container['memberId']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) > 32)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getPermissionActionAllowableValues();
                if (!is_null($this->container['permissionAction']) && !in_array($this->container['permissionAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['permissionActionCode']) && ($this->container['permissionActionCode'] > 2830012519194)) {
                $invalidProperties[] = "invalid value for 'permissionActionCode', must be smaller than or equal to 2830012519194.";
            }
            if (!is_null($this->container['permissionActionCode']) && ($this->container['permissionActionCode'] < 0)) {
                $invalidProperties[] = "invalid value for 'permissionActionCode', must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rowLevelSecurity']) && (mb_strlen($this->container['rowLevelSecurity']) > 512)) {
                $invalidProperties[] = "invalid value for 'rowLevelSecurity', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['rowLevelSecurity']) && (mb_strlen($this->container['rowLevelSecurity']) < 1)) {
                $invalidProperties[] = "invalid value for 'rowLevelSecurity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rowLevelSecurityDesc']) && (mb_strlen($this->container['rowLevelSecurityDesc']) > 64)) {
                $invalidProperties[] = "invalid value for 'rowLevelSecurityDesc', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['rowLevelSecurityDesc']) && (mb_strlen($this->container['rowLevelSecurityDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'rowLevelSecurityDesc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 128)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 1)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
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
    * Gets clusterId
    *  集群id
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群id
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
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets columnName
    *  列名
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
    * @param string|null $columnName 列名
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名
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
    * @param string|null $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型,HIVE
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
    * @param string $datasourceType 数据源类型,HIVE
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets expireMsg
    *  到期信息
    *
    * @return string|null
    */
    public function getExpireMsg()
    {
        return $this->container['expireMsg'];
    }

    /**
    * Sets expireMsg
    *
    * @param string|null $expireMsg 到期信息
    *
    * @return $this
    */
    public function setExpireMsg($expireMsg)
    {
        $this->container['expireMsg'] = $expireMsg;
        return $this;
    }

    /**
    * Gets expireStatus
    *  权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    *
    * @return string
    */
    public function getExpireStatus()
    {
        return $this->container['expireStatus'];
    }

    /**
    * Sets expireStatus
    *
    * @param string $expireStatus 权限状态,REVOKE_FAILED,TO_BE_REVOKE,INACTIVE,PERMANENTLY_ACTIVE,ACTIVE,EXPIRE_SOON
    *
    * @return $this
    */
    public function setExpireStatus($expireStatus)
    {
        $this->container['expireStatus'] = $expireStatus;
        return $this;
    }

    /**
    * Gets expireTime
    *  到期时间
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 到期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets id
    *  权限id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 权限id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets memberId
    *  成员id
    *
    * @return string|null
    */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
    * Sets memberId
    *
    * @param string|null $memberId 成员id
    *
    * @return $this
    */
    public function setMemberId($memberId)
    {
        $this->container['memberId'] = $memberId;
        return $this;
    }

    /**
    * Gets memberName
    *  成员名称
    *
    * @return string|null
    */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
    * Sets memberName
    *
    * @param string|null $memberName 成员名称
    *
    * @return $this
    */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;
        return $this;
    }

    /**
    * Gets permissionAction
    *  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
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
    * @param string|null $permissionAction 权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    *
    * @return $this
    */
    public function setPermissionAction($permissionAction)
    {
        $this->container['permissionAction'] = $permissionAction;
        return $this;
    }

    /**
    * Gets permissionActionCode
    *  权限位图
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
    * @param int|null $permissionActionCode 权限位图
    *
    * @return $this
    */
    public function setPermissionActionCode($permissionActionCode)
    {
        $this->container['permissionActionCode'] = $permissionActionCode;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets rowLevelSecurity
    *  行级权限表达式
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
    * @param string|null $rowLevelSecurity 行级权限表达式
    *
    * @return $this
    */
    public function setRowLevelSecurity($rowLevelSecurity)
    {
        $this->container['rowLevelSecurity'] = $rowLevelSecurity;
        return $this;
    }

    /**
    * Gets rowLevelSecurityDesc
    *  行级权限描述
    *
    * @return string|null
    */
    public function getRowLevelSecurityDesc()
    {
        return $this->container['rowLevelSecurityDesc'];
    }

    /**
    * Sets rowLevelSecurityDesc
    *
    * @param string|null $rowLevelSecurityDesc 行级权限描述
    *
    * @return $this
    */
    public function setRowLevelSecurityDesc($rowLevelSecurityDesc)
    {
        $this->container['rowLevelSecurityDesc'] = $rowLevelSecurityDesc;
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
    *  表名
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
    * @param string|null $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间id
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

