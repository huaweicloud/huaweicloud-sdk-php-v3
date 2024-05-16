<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StarRocksInstanceInfoInstances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StarRocksInstanceInfo_instances';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * publicIp  公网访问IP。
    * dataVip  StarRocks FE节点类型数据IP（多个IP使用逗号分隔）
    * canEnablePublicAccess  是否可公网访问。
    * currentBackupNodeId  备份节点ID。
    * clusterMode  部署模式。
    * status  实例状态。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * dbUser  默认用户名。
    * bakPeriod  备份周期。
    * bakKeepDay  备份保存天数。
    * bakExpectedStartTime  备份预计开始时间。
    * dataStoreVersionId  数据库版本ID。
    * dataStoreVersion  数据库版本。
    * dataStoreType  数据库引擎。
    * createAt  实例创建时间。
    * updateAt  实例更新时间。
    * deleteAt  实例删除时间。
    * dbPort  数据库端口号。
    * paramGroup  参数组。
    * actions  实例动作。
    * createFailErrorCode  实例创建失败错误码。
    * groups  实例分组。
    * opsWindow  opsWindow
    * tagsInfo  tagsInfo
    * timeZone  时区。
    * backupUsedSpace  备份使用空间。
    * azMode  可用区模式。  取值范围：  - single：单可用区 - multi：多可用区
    * enterpriseProjectId  企业项目ID。
    * portInfo  portInfo
    * feNodeVolumeCode  FE节点磁盘类型。
    * beNodeVolumeCode  BE节点磁盘类型。
    * feNodeVolumeSize  FE节点磁盘大小。
    * beNodeVolumeSize  BE节点磁盘大小。
    * supportDataReplication  是否支持副本。
    * newVersionAvailable  是否有数据库新版本。
    * sslOption  SSL开关。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * payModel  支付模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'publicIp' => 'string',
            'dataVip' => 'string',
            'canEnablePublicAccess' => 'bool',
            'currentBackupNodeId' => 'string',
            'clusterMode' => 'string',
            'status' => 'string',
            'isFrozen' => 'int',
            'frozenTime' => 'int',
            'dbUser' => 'string',
            'bakPeriod' => 'string',
            'bakKeepDay' => 'int',
            'bakExpectedStartTime' => 'int',
            'dataStoreVersionId' => 'string',
            'dataStoreVersion' => 'string',
            'dataStoreType' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int',
            'deleteAt' => 'int',
            'dbPort' => 'string',
            'paramGroup' => 'string',
            'actions' => '\HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]',
            'createFailErrorCode' => 'string',
            'groups' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoGroups[]',
            'opsWindow' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoOpsWindow',
            'tagsInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoTagsInfo',
            'timeZone' => 'string',
            'backupUsedSpace' => 'string',
            'azMode' => 'string',
            'enterpriseProjectId' => 'string',
            'portInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoPortInfo',
            'feNodeVolumeCode' => 'string',
            'beNodeVolumeCode' => 'string',
            'feNodeVolumeSize' => 'string',
            'beNodeVolumeSize' => 'string',
            'supportDataReplication' => 'bool',
            'newVersionAvailable' => 'bool',
            'sslOption' => 'bool',
            'dedicatedResourceId' => 'string',
            'payModel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * publicIp  公网访问IP。
    * dataVip  StarRocks FE节点类型数据IP（多个IP使用逗号分隔）
    * canEnablePublicAccess  是否可公网访问。
    * currentBackupNodeId  备份节点ID。
    * clusterMode  部署模式。
    * status  实例状态。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * dbUser  默认用户名。
    * bakPeriod  备份周期。
    * bakKeepDay  备份保存天数。
    * bakExpectedStartTime  备份预计开始时间。
    * dataStoreVersionId  数据库版本ID。
    * dataStoreVersion  数据库版本。
    * dataStoreType  数据库引擎。
    * createAt  实例创建时间。
    * updateAt  实例更新时间。
    * deleteAt  实例删除时间。
    * dbPort  数据库端口号。
    * paramGroup  参数组。
    * actions  实例动作。
    * createFailErrorCode  实例创建失败错误码。
    * groups  实例分组。
    * opsWindow  opsWindow
    * tagsInfo  tagsInfo
    * timeZone  时区。
    * backupUsedSpace  备份使用空间。
    * azMode  可用区模式。  取值范围：  - single：单可用区 - multi：多可用区
    * enterpriseProjectId  企业项目ID。
    * portInfo  portInfo
    * feNodeVolumeCode  FE节点磁盘类型。
    * beNodeVolumeCode  BE节点磁盘类型。
    * feNodeVolumeSize  FE节点磁盘大小。
    * beNodeVolumeSize  BE节点磁盘大小。
    * supportDataReplication  是否支持副本。
    * newVersionAvailable  是否有数据库新版本。
    * sslOption  SSL开关。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * payModel  支付模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'publicIp' => null,
        'dataVip' => null,
        'canEnablePublicAccess' => null,
        'currentBackupNodeId' => null,
        'clusterMode' => null,
        'status' => null,
        'isFrozen' => 'int32',
        'frozenTime' => 'int64',
        'dbUser' => null,
        'bakPeriod' => null,
        'bakKeepDay' => 'int32',
        'bakExpectedStartTime' => 'int64',
        'dataStoreVersionId' => null,
        'dataStoreVersion' => null,
        'dataStoreType' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64',
        'deleteAt' => 'int64',
        'dbPort' => null,
        'paramGroup' => null,
        'actions' => null,
        'createFailErrorCode' => null,
        'groups' => null,
        'opsWindow' => null,
        'tagsInfo' => null,
        'timeZone' => null,
        'backupUsedSpace' => null,
        'azMode' => null,
        'enterpriseProjectId' => null,
        'portInfo' => null,
        'feNodeVolumeCode' => null,
        'beNodeVolumeCode' => null,
        'feNodeVolumeSize' => null,
        'beNodeVolumeSize' => null,
        'supportDataReplication' => null,
        'newVersionAvailable' => null,
        'sslOption' => null,
        'dedicatedResourceId' => null,
        'payModel' => null
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
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * publicIp  公网访问IP。
    * dataVip  StarRocks FE节点类型数据IP（多个IP使用逗号分隔）
    * canEnablePublicAccess  是否可公网访问。
    * currentBackupNodeId  备份节点ID。
    * clusterMode  部署模式。
    * status  实例状态。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * dbUser  默认用户名。
    * bakPeriod  备份周期。
    * bakKeepDay  备份保存天数。
    * bakExpectedStartTime  备份预计开始时间。
    * dataStoreVersionId  数据库版本ID。
    * dataStoreVersion  数据库版本。
    * dataStoreType  数据库引擎。
    * createAt  实例创建时间。
    * updateAt  实例更新时间。
    * deleteAt  实例删除时间。
    * dbPort  数据库端口号。
    * paramGroup  参数组。
    * actions  实例动作。
    * createFailErrorCode  实例创建失败错误码。
    * groups  实例分组。
    * opsWindow  opsWindow
    * tagsInfo  tagsInfo
    * timeZone  时区。
    * backupUsedSpace  备份使用空间。
    * azMode  可用区模式。  取值范围：  - single：单可用区 - multi：多可用区
    * enterpriseProjectId  企业项目ID。
    * portInfo  portInfo
    * feNodeVolumeCode  FE节点磁盘类型。
    * beNodeVolumeCode  BE节点磁盘类型。
    * feNodeVolumeSize  FE节点磁盘大小。
    * beNodeVolumeSize  BE节点磁盘大小。
    * supportDataReplication  是否支持副本。
    * newVersionAvailable  是否有数据库新版本。
    * sslOption  SSL开关。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * payModel  支付模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'publicIp' => 'public_ip',
            'dataVip' => 'data_vip',
            'canEnablePublicAccess' => 'can_enable_public_access',
            'currentBackupNodeId' => 'current_backup_node_id',
            'clusterMode' => 'cluster_mode',
            'status' => 'status',
            'isFrozen' => 'is_frozen',
            'frozenTime' => 'frozen_time',
            'dbUser' => 'db_user',
            'bakPeriod' => 'bak_period',
            'bakKeepDay' => 'bak_keep_day',
            'bakExpectedStartTime' => 'bak_expected_start_time',
            'dataStoreVersionId' => 'data_store_version_id',
            'dataStoreVersion' => 'data_store_version',
            'dataStoreType' => 'data_store_type',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'deleteAt' => 'delete_at',
            'dbPort' => 'db_port',
            'paramGroup' => 'param_group',
            'actions' => 'actions',
            'createFailErrorCode' => 'create_fail_error_code',
            'groups' => 'groups',
            'opsWindow' => 'ops_window',
            'tagsInfo' => 'tags_info',
            'timeZone' => 'time_zone',
            'backupUsedSpace' => 'backup_used_space',
            'azMode' => 'az_mode',
            'enterpriseProjectId' => 'enterprise_project_id',
            'portInfo' => 'port_info',
            'feNodeVolumeCode' => 'fe_node_volume_code',
            'beNodeVolumeCode' => 'be_node_volume_code',
            'feNodeVolumeSize' => 'fe_node_volume_size',
            'beNodeVolumeSize' => 'be_node_volume_size',
            'supportDataReplication' => 'support_data_replication',
            'newVersionAvailable' => 'new_version_available',
            'sslOption' => 'ssl_option',
            'dedicatedResourceId' => 'dedicated_resource_id',
            'payModel' => 'pay_model'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * publicIp  公网访问IP。
    * dataVip  StarRocks FE节点类型数据IP（多个IP使用逗号分隔）
    * canEnablePublicAccess  是否可公网访问。
    * currentBackupNodeId  备份节点ID。
    * clusterMode  部署模式。
    * status  实例状态。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * dbUser  默认用户名。
    * bakPeriod  备份周期。
    * bakKeepDay  备份保存天数。
    * bakExpectedStartTime  备份预计开始时间。
    * dataStoreVersionId  数据库版本ID。
    * dataStoreVersion  数据库版本。
    * dataStoreType  数据库引擎。
    * createAt  实例创建时间。
    * updateAt  实例更新时间。
    * deleteAt  实例删除时间。
    * dbPort  数据库端口号。
    * paramGroup  参数组。
    * actions  实例动作。
    * createFailErrorCode  实例创建失败错误码。
    * groups  实例分组。
    * opsWindow  opsWindow
    * tagsInfo  tagsInfo
    * timeZone  时区。
    * backupUsedSpace  备份使用空间。
    * azMode  可用区模式。  取值范围：  - single：单可用区 - multi：多可用区
    * enterpriseProjectId  企业项目ID。
    * portInfo  portInfo
    * feNodeVolumeCode  FE节点磁盘类型。
    * beNodeVolumeCode  BE节点磁盘类型。
    * feNodeVolumeSize  FE节点磁盘大小。
    * beNodeVolumeSize  BE节点磁盘大小。
    * supportDataReplication  是否支持副本。
    * newVersionAvailable  是否有数据库新版本。
    * sslOption  SSL开关。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * payModel  支付模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'publicIp' => 'setPublicIp',
            'dataVip' => 'setDataVip',
            'canEnablePublicAccess' => 'setCanEnablePublicAccess',
            'currentBackupNodeId' => 'setCurrentBackupNodeId',
            'clusterMode' => 'setClusterMode',
            'status' => 'setStatus',
            'isFrozen' => 'setIsFrozen',
            'frozenTime' => 'setFrozenTime',
            'dbUser' => 'setDbUser',
            'bakPeriod' => 'setBakPeriod',
            'bakKeepDay' => 'setBakKeepDay',
            'bakExpectedStartTime' => 'setBakExpectedStartTime',
            'dataStoreVersionId' => 'setDataStoreVersionId',
            'dataStoreVersion' => 'setDataStoreVersion',
            'dataStoreType' => 'setDataStoreType',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'deleteAt' => 'setDeleteAt',
            'dbPort' => 'setDbPort',
            'paramGroup' => 'setParamGroup',
            'actions' => 'setActions',
            'createFailErrorCode' => 'setCreateFailErrorCode',
            'groups' => 'setGroups',
            'opsWindow' => 'setOpsWindow',
            'tagsInfo' => 'setTagsInfo',
            'timeZone' => 'setTimeZone',
            'backupUsedSpace' => 'setBackupUsedSpace',
            'azMode' => 'setAzMode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'portInfo' => 'setPortInfo',
            'feNodeVolumeCode' => 'setFeNodeVolumeCode',
            'beNodeVolumeCode' => 'setBeNodeVolumeCode',
            'feNodeVolumeSize' => 'setFeNodeVolumeSize',
            'beNodeVolumeSize' => 'setBeNodeVolumeSize',
            'supportDataReplication' => 'setSupportDataReplication',
            'newVersionAvailable' => 'setNewVersionAvailable',
            'sslOption' => 'setSslOption',
            'dedicatedResourceId' => 'setDedicatedResourceId',
            'payModel' => 'setPayModel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * publicIp  公网访问IP。
    * dataVip  StarRocks FE节点类型数据IP（多个IP使用逗号分隔）
    * canEnablePublicAccess  是否可公网访问。
    * currentBackupNodeId  备份节点ID。
    * clusterMode  部署模式。
    * status  实例状态。
    * isFrozen  是否冻结。
    * frozenTime  冻结时间。
    * dbUser  默认用户名。
    * bakPeriod  备份周期。
    * bakKeepDay  备份保存天数。
    * bakExpectedStartTime  备份预计开始时间。
    * dataStoreVersionId  数据库版本ID。
    * dataStoreVersion  数据库版本。
    * dataStoreType  数据库引擎。
    * createAt  实例创建时间。
    * updateAt  实例更新时间。
    * deleteAt  实例删除时间。
    * dbPort  数据库端口号。
    * paramGroup  参数组。
    * actions  实例动作。
    * createFailErrorCode  实例创建失败错误码。
    * groups  实例分组。
    * opsWindow  opsWindow
    * tagsInfo  tagsInfo
    * timeZone  时区。
    * backupUsedSpace  备份使用空间。
    * azMode  可用区模式。  取值范围：  - single：单可用区 - multi：多可用区
    * enterpriseProjectId  企业项目ID。
    * portInfo  portInfo
    * feNodeVolumeCode  FE节点磁盘类型。
    * beNodeVolumeCode  BE节点磁盘类型。
    * feNodeVolumeSize  FE节点磁盘大小。
    * beNodeVolumeSize  BE节点磁盘大小。
    * supportDataReplication  是否支持副本。
    * newVersionAvailable  是否有数据库新版本。
    * sslOption  SSL开关。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * payModel  支付模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'publicIp' => 'getPublicIp',
            'dataVip' => 'getDataVip',
            'canEnablePublicAccess' => 'getCanEnablePublicAccess',
            'currentBackupNodeId' => 'getCurrentBackupNodeId',
            'clusterMode' => 'getClusterMode',
            'status' => 'getStatus',
            'isFrozen' => 'getIsFrozen',
            'frozenTime' => 'getFrozenTime',
            'dbUser' => 'getDbUser',
            'bakPeriod' => 'getBakPeriod',
            'bakKeepDay' => 'getBakKeepDay',
            'bakExpectedStartTime' => 'getBakExpectedStartTime',
            'dataStoreVersionId' => 'getDataStoreVersionId',
            'dataStoreVersion' => 'getDataStoreVersion',
            'dataStoreType' => 'getDataStoreType',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'deleteAt' => 'getDeleteAt',
            'dbPort' => 'getDbPort',
            'paramGroup' => 'getParamGroup',
            'actions' => 'getActions',
            'createFailErrorCode' => 'getCreateFailErrorCode',
            'groups' => 'getGroups',
            'opsWindow' => 'getOpsWindow',
            'tagsInfo' => 'getTagsInfo',
            'timeZone' => 'getTimeZone',
            'backupUsedSpace' => 'getBackupUsedSpace',
            'azMode' => 'getAzMode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'portInfo' => 'getPortInfo',
            'feNodeVolumeCode' => 'getFeNodeVolumeCode',
            'beNodeVolumeCode' => 'getBeNodeVolumeCode',
            'feNodeVolumeSize' => 'getFeNodeVolumeSize',
            'beNodeVolumeSize' => 'getBeNodeVolumeSize',
            'supportDataReplication' => 'getSupportDataReplication',
            'newVersionAvailable' => 'getNewVersionAvailable',
            'sslOption' => 'getSslOption',
            'dedicatedResourceId' => 'getDedicatedResourceId',
            'payModel' => 'getPayModel'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['dataVip'] = isset($data['dataVip']) ? $data['dataVip'] : null;
        $this->container['canEnablePublicAccess'] = isset($data['canEnablePublicAccess']) ? $data['canEnablePublicAccess'] : null;
        $this->container['currentBackupNodeId'] = isset($data['currentBackupNodeId']) ? $data['currentBackupNodeId'] : null;
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['frozenTime'] = isset($data['frozenTime']) ? $data['frozenTime'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['bakPeriod'] = isset($data['bakPeriod']) ? $data['bakPeriod'] : null;
        $this->container['bakKeepDay'] = isset($data['bakKeepDay']) ? $data['bakKeepDay'] : null;
        $this->container['bakExpectedStartTime'] = isset($data['bakExpectedStartTime']) ? $data['bakExpectedStartTime'] : null;
        $this->container['dataStoreVersionId'] = isset($data['dataStoreVersionId']) ? $data['dataStoreVersionId'] : null;
        $this->container['dataStoreVersion'] = isset($data['dataStoreVersion']) ? $data['dataStoreVersion'] : null;
        $this->container['dataStoreType'] = isset($data['dataStoreType']) ? $data['dataStoreType'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['deleteAt'] = isset($data['deleteAt']) ? $data['deleteAt'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['paramGroup'] = isset($data['paramGroup']) ? $data['paramGroup'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['createFailErrorCode'] = isset($data['createFailErrorCode']) ? $data['createFailErrorCode'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['opsWindow'] = isset($data['opsWindow']) ? $data['opsWindow'] : null;
        $this->container['tagsInfo'] = isset($data['tagsInfo']) ? $data['tagsInfo'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['backupUsedSpace'] = isset($data['backupUsedSpace']) ? $data['backupUsedSpace'] : null;
        $this->container['azMode'] = isset($data['azMode']) ? $data['azMode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['portInfo'] = isset($data['portInfo']) ? $data['portInfo'] : null;
        $this->container['feNodeVolumeCode'] = isset($data['feNodeVolumeCode']) ? $data['feNodeVolumeCode'] : null;
        $this->container['beNodeVolumeCode'] = isset($data['beNodeVolumeCode']) ? $data['beNodeVolumeCode'] : null;
        $this->container['feNodeVolumeSize'] = isset($data['feNodeVolumeSize']) ? $data['feNodeVolumeSize'] : null;
        $this->container['beNodeVolumeSize'] = isset($data['beNodeVolumeSize']) ? $data['beNodeVolumeSize'] : null;
        $this->container['supportDataReplication'] = isset($data['supportDataReplication']) ? $data['supportDataReplication'] : null;
        $this->container['newVersionAvailable'] = isset($data['newVersionAvailable']) ? $data['newVersionAvailable'] : null;
        $this->container['sslOption'] = isset($data['sslOption']) ? $data['sslOption'] : null;
        $this->container['dedicatedResourceId'] = isset($data['dedicatedResourceId']) ? $data['dedicatedResourceId'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
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
    * Gets id
    *  实例ID，严格匹配UUID规则。
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
    * @param string|null $id 实例ID，严格匹配UUID规则。
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
    *  创建的实例名称。
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
    * @param string|null $name 创建的实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  租户在某一Region下的project ID。
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
    * @param string|null $projectId 租户在某一Region下的project ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets publicIp
    *  公网访问IP。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 公网访问IP。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets dataVip
    *  StarRocks FE节点类型数据IP（多个IP使用逗号分隔）
    *
    * @return string|null
    */
    public function getDataVip()
    {
        return $this->container['dataVip'];
    }

    /**
    * Sets dataVip
    *
    * @param string|null $dataVip StarRocks FE节点类型数据IP（多个IP使用逗号分隔）
    *
    * @return $this
    */
    public function setDataVip($dataVip)
    {
        $this->container['dataVip'] = $dataVip;
        return $this;
    }

    /**
    * Gets canEnablePublicAccess
    *  是否可公网访问。
    *
    * @return bool|null
    */
    public function getCanEnablePublicAccess()
    {
        return $this->container['canEnablePublicAccess'];
    }

    /**
    * Sets canEnablePublicAccess
    *
    * @param bool|null $canEnablePublicAccess 是否可公网访问。
    *
    * @return $this
    */
    public function setCanEnablePublicAccess($canEnablePublicAccess)
    {
        $this->container['canEnablePublicAccess'] = $canEnablePublicAccess;
        return $this;
    }

    /**
    * Gets currentBackupNodeId
    *  备份节点ID。
    *
    * @return string|null
    */
    public function getCurrentBackupNodeId()
    {
        return $this->container['currentBackupNodeId'];
    }

    /**
    * Sets currentBackupNodeId
    *
    * @param string|null $currentBackupNodeId 备份节点ID。
    *
    * @return $this
    */
    public function setCurrentBackupNodeId($currentBackupNodeId)
    {
        $this->container['currentBackupNodeId'] = $currentBackupNodeId;
        return $this;
    }

    /**
    * Gets clusterMode
    *  部署模式。
    *
    * @return string|null
    */
    public function getClusterMode()
    {
        return $this->container['clusterMode'];
    }

    /**
    * Sets clusterMode
    *
    * @param string|null $clusterMode 部署模式。
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 实例状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isFrozen
    *  是否冻结。
    *
    * @return int|null
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param int|null $isFrozen 是否冻结。
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets frozenTime
    *  冻结时间。
    *
    * @return int|null
    */
    public function getFrozenTime()
    {
        return $this->container['frozenTime'];
    }

    /**
    * Sets frozenTime
    *
    * @param int|null $frozenTime 冻结时间。
    *
    * @return $this
    */
    public function setFrozenTime($frozenTime)
    {
        $this->container['frozenTime'] = $frozenTime;
        return $this;
    }

    /**
    * Gets dbUser
    *  默认用户名。
    *
    * @return string|null
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string|null $dbUser 默认用户名。
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets bakPeriod
    *  备份周期。
    *
    * @return string|null
    */
    public function getBakPeriod()
    {
        return $this->container['bakPeriod'];
    }

    /**
    * Sets bakPeriod
    *
    * @param string|null $bakPeriod 备份周期。
    *
    * @return $this
    */
    public function setBakPeriod($bakPeriod)
    {
        $this->container['bakPeriod'] = $bakPeriod;
        return $this;
    }

    /**
    * Gets bakKeepDay
    *  备份保存天数。
    *
    * @return int|null
    */
    public function getBakKeepDay()
    {
        return $this->container['bakKeepDay'];
    }

    /**
    * Sets bakKeepDay
    *
    * @param int|null $bakKeepDay 备份保存天数。
    *
    * @return $this
    */
    public function setBakKeepDay($bakKeepDay)
    {
        $this->container['bakKeepDay'] = $bakKeepDay;
        return $this;
    }

    /**
    * Gets bakExpectedStartTime
    *  备份预计开始时间。
    *
    * @return int|null
    */
    public function getBakExpectedStartTime()
    {
        return $this->container['bakExpectedStartTime'];
    }

    /**
    * Sets bakExpectedStartTime
    *
    * @param int|null $bakExpectedStartTime 备份预计开始时间。
    *
    * @return $this
    */
    public function setBakExpectedStartTime($bakExpectedStartTime)
    {
        $this->container['bakExpectedStartTime'] = $bakExpectedStartTime;
        return $this;
    }

    /**
    * Gets dataStoreVersionId
    *  数据库版本ID。
    *
    * @return string|null
    */
    public function getDataStoreVersionId()
    {
        return $this->container['dataStoreVersionId'];
    }

    /**
    * Sets dataStoreVersionId
    *
    * @param string|null $dataStoreVersionId 数据库版本ID。
    *
    * @return $this
    */
    public function setDataStoreVersionId($dataStoreVersionId)
    {
        $this->container['dataStoreVersionId'] = $dataStoreVersionId;
        return $this;
    }

    /**
    * Gets dataStoreVersion
    *  数据库版本。
    *
    * @return string|null
    */
    public function getDataStoreVersion()
    {
        return $this->container['dataStoreVersion'];
    }

    /**
    * Sets dataStoreVersion
    *
    * @param string|null $dataStoreVersion 数据库版本。
    *
    * @return $this
    */
    public function setDataStoreVersion($dataStoreVersion)
    {
        $this->container['dataStoreVersion'] = $dataStoreVersion;
        return $this;
    }

    /**
    * Gets dataStoreType
    *  数据库引擎。
    *
    * @return string|null
    */
    public function getDataStoreType()
    {
        return $this->container['dataStoreType'];
    }

    /**
    * Sets dataStoreType
    *
    * @param string|null $dataStoreType 数据库引擎。
    *
    * @return $this
    */
    public function setDataStoreType($dataStoreType)
    {
        $this->container['dataStoreType'] = $dataStoreType;
        return $this;
    }

    /**
    * Gets createAt
    *  实例创建时间。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 实例创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  实例更新时间。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt 实例更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets deleteAt
    *  实例删除时间。
    *
    * @return int|null
    */
    public function getDeleteAt()
    {
        return $this->container['deleteAt'];
    }

    /**
    * Sets deleteAt
    *
    * @param int|null $deleteAt 实例删除时间。
    *
    * @return $this
    */
    public function setDeleteAt($deleteAt)
    {
        $this->container['deleteAt'] = $deleteAt;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口号。
    *
    * @return string|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param string|null $dbPort 数据库端口号。
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets paramGroup
    *  参数组。
    *
    * @return string|null
    */
    public function getParamGroup()
    {
        return $this->container['paramGroup'];
    }

    /**
    * Sets paramGroup
    *
    * @param string|null $paramGroup 参数组。
    *
    * @return $this
    */
    public function setParamGroup($paramGroup)
    {
        $this->container['paramGroup'] = $paramGroup;
        return $this;
    }

    /**
    * Gets actions
    *  实例动作。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\QueryAction[]|null $actions 实例动作。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets createFailErrorCode
    *  实例创建失败错误码。
    *
    * @return string|null
    */
    public function getCreateFailErrorCode()
    {
        return $this->container['createFailErrorCode'];
    }

    /**
    * Sets createFailErrorCode
    *
    * @param string|null $createFailErrorCode 实例创建失败错误码。
    *
    * @return $this
    */
    public function setCreateFailErrorCode($createFailErrorCode)
    {
        $this->container['createFailErrorCode'] = $createFailErrorCode;
        return $this;
    }

    /**
    * Gets groups
    *  实例分组。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoGroups[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoGroups[]|null $groups 实例分组。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets opsWindow
    *  opsWindow
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoOpsWindow|null
    */
    public function getOpsWindow()
    {
        return $this->container['opsWindow'];
    }

    /**
    * Sets opsWindow
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoOpsWindow|null $opsWindow opsWindow
    *
    * @return $this
    */
    public function setOpsWindow($opsWindow)
    {
        $this->container['opsWindow'] = $opsWindow;
        return $this;
    }

    /**
    * Gets tagsInfo
    *  tagsInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoTagsInfo|null
    */
    public function getTagsInfo()
    {
        return $this->container['tagsInfo'];
    }

    /**
    * Sets tagsInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoTagsInfo|null $tagsInfo tagsInfo
    *
    * @return $this
    */
    public function setTagsInfo($tagsInfo)
    {
        $this->container['tagsInfo'] = $tagsInfo;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets backupUsedSpace
    *  备份使用空间。
    *
    * @return string|null
    */
    public function getBackupUsedSpace()
    {
        return $this->container['backupUsedSpace'];
    }

    /**
    * Sets backupUsedSpace
    *
    * @param string|null $backupUsedSpace 备份使用空间。
    *
    * @return $this
    */
    public function setBackupUsedSpace($backupUsedSpace)
    {
        $this->container['backupUsedSpace'] = $backupUsedSpace;
        return $this;
    }

    /**
    * Gets azMode
    *  可用区模式。  取值范围：  - single：单可用区 - multi：多可用区
    *
    * @return string|null
    */
    public function getAzMode()
    {
        return $this->container['azMode'];
    }

    /**
    * Sets azMode
    *
    * @param string|null $azMode 可用区模式。  取值范围：  - single：单可用区 - multi：多可用区
    *
    * @return $this
    */
    public function setAzMode($azMode)
    {
        $this->container['azMode'] = $azMode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets portInfo
    *  portInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoPortInfo|null
    */
    public function getPortInfo()
    {
        return $this->container['portInfo'];
    }

    /**
    * Sets portInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StarRocksInstanceInfoPortInfo|null $portInfo portInfo
    *
    * @return $this
    */
    public function setPortInfo($portInfo)
    {
        $this->container['portInfo'] = $portInfo;
        return $this;
    }

    /**
    * Gets feNodeVolumeCode
    *  FE节点磁盘类型。
    *
    * @return string|null
    */
    public function getFeNodeVolumeCode()
    {
        return $this->container['feNodeVolumeCode'];
    }

    /**
    * Sets feNodeVolumeCode
    *
    * @param string|null $feNodeVolumeCode FE节点磁盘类型。
    *
    * @return $this
    */
    public function setFeNodeVolumeCode($feNodeVolumeCode)
    {
        $this->container['feNodeVolumeCode'] = $feNodeVolumeCode;
        return $this;
    }

    /**
    * Gets beNodeVolumeCode
    *  BE节点磁盘类型。
    *
    * @return string|null
    */
    public function getBeNodeVolumeCode()
    {
        return $this->container['beNodeVolumeCode'];
    }

    /**
    * Sets beNodeVolumeCode
    *
    * @param string|null $beNodeVolumeCode BE节点磁盘类型。
    *
    * @return $this
    */
    public function setBeNodeVolumeCode($beNodeVolumeCode)
    {
        $this->container['beNodeVolumeCode'] = $beNodeVolumeCode;
        return $this;
    }

    /**
    * Gets feNodeVolumeSize
    *  FE节点磁盘大小。
    *
    * @return string|null
    */
    public function getFeNodeVolumeSize()
    {
        return $this->container['feNodeVolumeSize'];
    }

    /**
    * Sets feNodeVolumeSize
    *
    * @param string|null $feNodeVolumeSize FE节点磁盘大小。
    *
    * @return $this
    */
    public function setFeNodeVolumeSize($feNodeVolumeSize)
    {
        $this->container['feNodeVolumeSize'] = $feNodeVolumeSize;
        return $this;
    }

    /**
    * Gets beNodeVolumeSize
    *  BE节点磁盘大小。
    *
    * @return string|null
    */
    public function getBeNodeVolumeSize()
    {
        return $this->container['beNodeVolumeSize'];
    }

    /**
    * Sets beNodeVolumeSize
    *
    * @param string|null $beNodeVolumeSize BE节点磁盘大小。
    *
    * @return $this
    */
    public function setBeNodeVolumeSize($beNodeVolumeSize)
    {
        $this->container['beNodeVolumeSize'] = $beNodeVolumeSize;
        return $this;
    }

    /**
    * Gets supportDataReplication
    *  是否支持副本。
    *
    * @return bool|null
    */
    public function getSupportDataReplication()
    {
        return $this->container['supportDataReplication'];
    }

    /**
    * Sets supportDataReplication
    *
    * @param bool|null $supportDataReplication 是否支持副本。
    *
    * @return $this
    */
    public function setSupportDataReplication($supportDataReplication)
    {
        $this->container['supportDataReplication'] = $supportDataReplication;
        return $this;
    }

    /**
    * Gets newVersionAvailable
    *  是否有数据库新版本。
    *
    * @return bool|null
    */
    public function getNewVersionAvailable()
    {
        return $this->container['newVersionAvailable'];
    }

    /**
    * Sets newVersionAvailable
    *
    * @param bool|null $newVersionAvailable 是否有数据库新版本。
    *
    * @return $this
    */
    public function setNewVersionAvailable($newVersionAvailable)
    {
        $this->container['newVersionAvailable'] = $newVersionAvailable;
        return $this;
    }

    /**
    * Gets sslOption
    *  SSL开关。
    *
    * @return bool|null
    */
    public function getSslOption()
    {
        return $this->container['sslOption'];
    }

    /**
    * Sets sslOption
    *
    * @param bool|null $sslOption SSL开关。
    *
    * @return $this
    */
    public function setSslOption($sslOption)
    {
        $this->container['sslOption'] = $sslOption;
        return $this;
    }

    /**
    * Gets dedicatedResourceId
    *  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    *
    * @return string|null
    */
    public function getDedicatedResourceId()
    {
        return $this->container['dedicatedResourceId'];
    }

    /**
    * Sets dedicatedResourceId
    *
    * @param string|null $dedicatedResourceId 专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    *
    * @return $this
    */
    public function setDedicatedResourceId($dedicatedResourceId)
    {
        $this->container['dedicatedResourceId'] = $dedicatedResourceId;
        return $this;
    }

    /**
    * Gets payModel
    *  支付模式。
    *
    * @return string|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string|null $payModel 支付模式。
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
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

