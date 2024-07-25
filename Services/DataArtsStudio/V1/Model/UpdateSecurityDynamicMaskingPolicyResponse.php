<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityDynamicMaskingPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityDynamicMaskingPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  策略id。
    * name  策略名称。英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * clusterId  集群id。请于集群管理页面查看集群ID信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * clusterName  集群名称。请于集群管理页面查看集群名称信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * databaseName  数据库名称。获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableId  数据表id，获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableName  数据表名称, 获取方法请参见[获取数据源中的表](getDataTables.html)。
    * userGroups  用户组列表，用户组名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置）。例如：\"userGroup1,userGroup2\"。
    * users  用户列表，用户名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置），例如：\"user1,user2\"。
    * connName  数据连接名称，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * connId  数据连接id，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * syncStatus  同步状态： - UNKNOWN 未知状态 - NOT_SYNC 未同步 - SYNCING 同步中 - SYNC_SUCCESS 同步成功 - SYNC_FAIL 同步失败 - SYNC_PARTIAL_FAIL 存在失败 - DELETE_FAIL 删除失败 - DELETING 删除中 - UPDATING 更新中 - DATA_UPDATED 数据存在更新
    * syncMsg  策略同步信息。
    * syncLog  同步运行日志, 格式为 字段同步信息+换行符。
    * createTime  策略创建时间。
    * createUser  策略创建者。
    * updateTime  策略更新时间。
    * updateUser  策略更新者。
    * schemaName  DWS数据源的模式名称。
    * policyList  动态数据脱敏策略列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'datasourceType' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'databaseName' => 'string',
            'tableId' => 'string',
            'tableName' => 'string',
            'userGroups' => 'string',
            'users' => 'string',
            'connName' => 'string',
            'connId' => 'string',
            'syncStatus' => 'string',
            'syncMsg' => 'string',
            'syncLog' => 'string',
            'createTime' => 'int',
            'createUser' => 'string',
            'updateTime' => 'int',
            'updateUser' => 'string',
            'schemaName' => 'string',
            'policyList' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DynamicMaskingPolicy[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  策略id。
    * name  策略名称。英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * clusterId  集群id。请于集群管理页面查看集群ID信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * clusterName  集群名称。请于集群管理页面查看集群名称信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * databaseName  数据库名称。获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableId  数据表id，获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableName  数据表名称, 获取方法请参见[获取数据源中的表](getDataTables.html)。
    * userGroups  用户组列表，用户组名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置）。例如：\"userGroup1,userGroup2\"。
    * users  用户列表，用户名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置），例如：\"user1,user2\"。
    * connName  数据连接名称，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * connId  数据连接id，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * syncStatus  同步状态： - UNKNOWN 未知状态 - NOT_SYNC 未同步 - SYNCING 同步中 - SYNC_SUCCESS 同步成功 - SYNC_FAIL 同步失败 - SYNC_PARTIAL_FAIL 存在失败 - DELETE_FAIL 删除失败 - DELETING 删除中 - UPDATING 更新中 - DATA_UPDATED 数据存在更新
    * syncMsg  策略同步信息。
    * syncLog  同步运行日志, 格式为 字段同步信息+换行符。
    * createTime  策略创建时间。
    * createUser  策略创建者。
    * updateTime  策略更新时间。
    * updateUser  策略更新者。
    * schemaName  DWS数据源的模式名称。
    * policyList  动态数据脱敏策略列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'datasourceType' => null,
        'clusterId' => null,
        'clusterName' => null,
        'databaseName' => null,
        'tableId' => null,
        'tableName' => null,
        'userGroups' => null,
        'users' => null,
        'connName' => null,
        'connId' => null,
        'syncStatus' => null,
        'syncMsg' => null,
        'syncLog' => null,
        'createTime' => 'int64',
        'createUser' => null,
        'updateTime' => 'int64',
        'updateUser' => null,
        'schemaName' => null,
        'policyList' => null
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
    * id  策略id。
    * name  策略名称。英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * clusterId  集群id。请于集群管理页面查看集群ID信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * clusterName  集群名称。请于集群管理页面查看集群名称信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * databaseName  数据库名称。获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableId  数据表id，获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableName  数据表名称, 获取方法请参见[获取数据源中的表](getDataTables.html)。
    * userGroups  用户组列表，用户组名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置）。例如：\"userGroup1,userGroup2\"。
    * users  用户列表，用户名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置），例如：\"user1,user2\"。
    * connName  数据连接名称，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * connId  数据连接id，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * syncStatus  同步状态： - UNKNOWN 未知状态 - NOT_SYNC 未同步 - SYNCING 同步中 - SYNC_SUCCESS 同步成功 - SYNC_FAIL 同步失败 - SYNC_PARTIAL_FAIL 存在失败 - DELETE_FAIL 删除失败 - DELETING 删除中 - UPDATING 更新中 - DATA_UPDATED 数据存在更新
    * syncMsg  策略同步信息。
    * syncLog  同步运行日志, 格式为 字段同步信息+换行符。
    * createTime  策略创建时间。
    * createUser  策略创建者。
    * updateTime  策略更新时间。
    * updateUser  策略更新者。
    * schemaName  DWS数据源的模式名称。
    * policyList  动态数据脱敏策略列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'datasourceType' => 'datasource_type',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'databaseName' => 'database_name',
            'tableId' => 'table_id',
            'tableName' => 'table_name',
            'userGroups' => 'user_groups',
            'users' => 'users',
            'connName' => 'conn_name',
            'connId' => 'conn_id',
            'syncStatus' => 'sync_status',
            'syncMsg' => 'sync_msg',
            'syncLog' => 'sync_log',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user',
            'schemaName' => 'schema_name',
            'policyList' => 'policy_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  策略id。
    * name  策略名称。英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * clusterId  集群id。请于集群管理页面查看集群ID信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * clusterName  集群名称。请于集群管理页面查看集群名称信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * databaseName  数据库名称。获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableId  数据表id，获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableName  数据表名称, 获取方法请参见[获取数据源中的表](getDataTables.html)。
    * userGroups  用户组列表，用户组名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置）。例如：\"userGroup1,userGroup2\"。
    * users  用户列表，用户名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置），例如：\"user1,user2\"。
    * connName  数据连接名称，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * connId  数据连接id，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * syncStatus  同步状态： - UNKNOWN 未知状态 - NOT_SYNC 未同步 - SYNCING 同步中 - SYNC_SUCCESS 同步成功 - SYNC_FAIL 同步失败 - SYNC_PARTIAL_FAIL 存在失败 - DELETE_FAIL 删除失败 - DELETING 删除中 - UPDATING 更新中 - DATA_UPDATED 数据存在更新
    * syncMsg  策略同步信息。
    * syncLog  同步运行日志, 格式为 字段同步信息+换行符。
    * createTime  策略创建时间。
    * createUser  策略创建者。
    * updateTime  策略更新时间。
    * updateUser  策略更新者。
    * schemaName  DWS数据源的模式名称。
    * policyList  动态数据脱敏策略列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'datasourceType' => 'setDatasourceType',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'databaseName' => 'setDatabaseName',
            'tableId' => 'setTableId',
            'tableName' => 'setTableName',
            'userGroups' => 'setUserGroups',
            'users' => 'setUsers',
            'connName' => 'setConnName',
            'connId' => 'setConnId',
            'syncStatus' => 'setSyncStatus',
            'syncMsg' => 'setSyncMsg',
            'syncLog' => 'setSyncLog',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser',
            'schemaName' => 'setSchemaName',
            'policyList' => 'setPolicyList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  策略id。
    * name  策略名称。英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符。
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * clusterId  集群id。请于集群管理页面查看集群ID信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * clusterName  集群名称。请于集群管理页面查看集群名称信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
    * databaseName  数据库名称。获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableId  数据表id，获取方法请参见[获取数据源中的表](getDataTables.html)。
    * tableName  数据表名称, 获取方法请参见[获取数据源中的表](getDataTables.html)。
    * userGroups  用户组列表，用户组名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置）。例如：\"userGroup1,userGroup2\"。
    * users  用户列表，用户名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置），例如：\"user1,user2\"。
    * connName  数据连接名称，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * connId  数据连接id，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    * syncStatus  同步状态： - UNKNOWN 未知状态 - NOT_SYNC 未同步 - SYNCING 同步中 - SYNC_SUCCESS 同步成功 - SYNC_FAIL 同步失败 - SYNC_PARTIAL_FAIL 存在失败 - DELETE_FAIL 删除失败 - DELETING 删除中 - UPDATING 更新中 - DATA_UPDATED 数据存在更新
    * syncMsg  策略同步信息。
    * syncLog  同步运行日志, 格式为 字段同步信息+换行符。
    * createTime  策略创建时间。
    * createUser  策略创建者。
    * updateTime  策略更新时间。
    * updateUser  策略更新者。
    * schemaName  DWS数据源的模式名称。
    * policyList  动态数据脱敏策略列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'datasourceType' => 'getDatasourceType',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'databaseName' => 'getDatabaseName',
            'tableId' => 'getTableId',
            'tableName' => 'getTableName',
            'userGroups' => 'getUserGroups',
            'users' => 'getUsers',
            'connName' => 'getConnName',
            'connId' => 'getConnId',
            'syncStatus' => 'getSyncStatus',
            'syncMsg' => 'getSyncMsg',
            'syncLog' => 'getSyncLog',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser',
            'schemaName' => 'getSchemaName',
            'policyList' => 'getPolicyList'
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
    const DATASOURCE_TYPE_DWS = 'DWS';
    const DATASOURCE_TYPE_DLI = 'DLI';
    const SYNC_STATUS_UNKNOWN = 'UNKNOWN';
    const SYNC_STATUS_NOT_SYNC = 'NOT_SYNC';
    const SYNC_STATUS_SYNCING = 'SYNCING';
    const SYNC_STATUS_SYNC_SUCCESS = 'SYNC_SUCCESS';
    const SYNC_STATUS_SYNC_FAIL = 'SYNC_FAIL';
    const SYNC_STATUS_SYNC_PARTIAL_FAIL = 'SYNC_PARTIAL_FAIL';
    const SYNC_STATUS_DELETE_FAIL = 'DELETE_FAIL';
    const SYNC_STATUS_DELETING = 'DELETING';
    const SYNC_STATUS_UPDATING = 'UPDATING';
    const SYNC_STATUS_DATA_UPDATED = 'DATA_UPDATED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatasourceTypeAllowableValues()
    {
        return [
            self::DATASOURCE_TYPE_HIVE,
            self::DATASOURCE_TYPE_DWS,
            self::DATASOURCE_TYPE_DLI,
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
            self::SYNC_STATUS_SYNC_PARTIAL_FAIL,
            self::SYNC_STATUS_DELETE_FAIL,
            self::SYNC_STATUS_DELETING,
            self::SYNC_STATUS_UPDATING,
            self::SYNC_STATUS_DATA_UPDATED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['userGroups'] = isset($data['userGroups']) ? $data['userGroups'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['connName'] = isset($data['connName']) ? $data['connName'] : null;
        $this->container['connId'] = isset($data['connId']) ? $data['connId'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
        $this->container['syncMsg'] = isset($data['syncMsg']) ? $data['syncMsg'] : null;
        $this->container['syncLog'] = isset($data['syncLog']) ? $data['syncLog'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['policyList'] = isset($data['policyList']) ? $data['policyList'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
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
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userGroups']) && (mb_strlen($this->container['userGroups']) > 4096)) {
                $invalidProperties[] = "invalid value for 'userGroups', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['userGroups']) && (mb_strlen($this->container['userGroups']) < 1)) {
                $invalidProperties[] = "invalid value for 'userGroups', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['users']) && (mb_strlen($this->container['users']) > 4096)) {
                $invalidProperties[] = "invalid value for 'users', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['users']) && (mb_strlen($this->container['users']) < 1)) {
                $invalidProperties[] = "invalid value for 'users', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['connName']) && (mb_strlen($this->container['connName']) > 100)) {
                $invalidProperties[] = "invalid value for 'connName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['connName']) && (mb_strlen($this->container['connName']) < 1)) {
                $invalidProperties[] = "invalid value for 'connName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['connId']) && (mb_strlen($this->container['connId']) > 128)) {
                $invalidProperties[] = "invalid value for 'connId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['connId']) && (mb_strlen($this->container['connId']) < 1)) {
                $invalidProperties[] = "invalid value for 'connId', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['syncLog']) && (mb_strlen($this->container['syncLog']) > 10240)) {
                $invalidProperties[] = "invalid value for 'syncLog', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['syncLog']) && (mb_strlen($this->container['syncLog']) < 1)) {
                $invalidProperties[] = "invalid value for 'syncLog', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) > 256)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) < 0)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateUser']) && (mb_strlen($this->container['updateUser']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateUser', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 256)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 0)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 0.";
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
    *  策略id。
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
    * @param string|null $id 策略id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  策略名称。英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 策略名称。英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
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
    * @param string|null $datasourceType 数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
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
    *  集群id。请于集群管理页面查看集群ID信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
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
    * @param string|null $clusterId 集群id。请于集群管理页面查看集群ID信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
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
    *  集群名称。请于集群管理页面查看集群名称信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
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
    * @param string|null $clusterName 集群名称。请于集群管理页面查看集群名称信息。[当数据源类型为DLI时，该参数需要填写为DLI](tag:nohcs)。
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
    *  数据库名称。获取方法请参见[获取数据源中的表](getDataTables.html)。
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
    * @param string|null $databaseName 数据库名称。获取方法请参见[获取数据源中的表](getDataTables.html)。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableId
    *  数据表id，获取方法请参见[获取数据源中的表](getDataTables.html)。
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 数据表id，获取方法请参见[获取数据源中的表](getDataTables.html)。
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets tableName
    *  数据表名称, 获取方法请参见[获取数据源中的表](getDataTables.html)。
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
    * @param string|null $tableName 数据表名称, 获取方法请参见[获取数据源中的表](getDataTables.html)。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets userGroups
    *  用户组列表，用户组名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置）。例如：\"userGroup1,userGroup2\"。
    *
    * @return string|null
    */
    public function getUserGroups()
    {
        return $this->container['userGroups'];
    }

    /**
    * Sets userGroups
    *
    * @param string|null $userGroups 用户组列表，用户组名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置）。例如：\"userGroup1,userGroup2\"。
    *
    * @return $this
    */
    public function setUserGroups($userGroups)
    {
        $this->container['userGroups'] = $userGroups;
        return $this;
    }

    /**
    * Gets users
    *  用户列表，用户名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置），例如：\"user1,user2\"。
    *
    * @return string|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param string|null $users 用户列表，用户名称逗号分隔（非必填项，但用户、用户组必须二选其一进行配置），例如：\"user1,user2\"。
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets connName
    *  数据连接名称，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    *
    * @return string|null
    */
    public function getConnName()
    {
        return $this->container['connName'];
    }

    /**
    * Sets connName
    *
    * @param string|null $connName 数据连接名称，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    *
    * @return $this
    */
    public function setConnName($connName)
    {
        $this->container['connName'] = $connName;
        return $this;
    }

    /**
    * Gets connId
    *  数据连接id，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    *
    * @return string|null
    */
    public function getConnId()
    {
        return $this->container['connId'];
    }

    /**
    * Sets connId
    *
    * @param string|null $connId 数据连接id，获取方法请参见[查询数据连接列表](ListDataconnections.html)。
    *
    * @return $this
    */
    public function setConnId($connId)
    {
        $this->container['connId'] = $connId;
        return $this;
    }

    /**
    * Gets syncStatus
    *  同步状态： - UNKNOWN 未知状态 - NOT_SYNC 未同步 - SYNCING 同步中 - SYNC_SUCCESS 同步成功 - SYNC_FAIL 同步失败 - SYNC_PARTIAL_FAIL 存在失败 - DELETE_FAIL 删除失败 - DELETING 删除中 - UPDATING 更新中 - DATA_UPDATED 数据存在更新
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
    * @param string|null $syncStatus 同步状态： - UNKNOWN 未知状态 - NOT_SYNC 未同步 - SYNCING 同步中 - SYNC_SUCCESS 同步成功 - SYNC_FAIL 同步失败 - SYNC_PARTIAL_FAIL 存在失败 - DELETE_FAIL 删除失败 - DELETING 删除中 - UPDATING 更新中 - DATA_UPDATED 数据存在更新
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
    *  策略同步信息。
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
    * @param string|null $syncMsg 策略同步信息。
    *
    * @return $this
    */
    public function setSyncMsg($syncMsg)
    {
        $this->container['syncMsg'] = $syncMsg;
        return $this;
    }

    /**
    * Gets syncLog
    *  同步运行日志, 格式为 字段同步信息+换行符。
    *
    * @return string|null
    */
    public function getSyncLog()
    {
        return $this->container['syncLog'];
    }

    /**
    * Sets syncLog
    *
    * @param string|null $syncLog 同步运行日志, 格式为 字段同步信息+换行符。
    *
    * @return $this
    */
    public function setSyncLog($syncLog)
    {
        $this->container['syncLog'] = $syncLog;
        return $this;
    }

    /**
    * Gets createTime
    *  策略创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 策略创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  策略创建者。
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 策略创建者。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets updateTime
    *  策略更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 策略更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  策略更新者。
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 策略更新者。
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets schemaName
    *  DWS数据源的模式名称。
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
    * @param string|null $schemaName DWS数据源的模式名称。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets policyList
    *  动态数据脱敏策略列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DynamicMaskingPolicy[]|null
    */
    public function getPolicyList()
    {
        return $this->container['policyList'];
    }

    /**
    * Sets policyList
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DynamicMaskingPolicy[]|null $policyList 动态数据脱敏策略列表。
    *
    * @return $this
    */
    public function setPolicyList($policyList)
    {
        $this->container['policyList'] = $policyList;
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

