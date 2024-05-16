<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityMemberSyncTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityMemberSyncTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户同步任务id。
    * projectId  项目ID。
    * domainId  租户ID。
    * instanceId  实例ID。
    * dataConnectionWorkspace  数据连接工作空间ID。
    * clusterType  集群类型 * MRS集群 * DWS集群
    * dataConnectionId  数据连接id。
    * dataConnectionName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * scheduleStartHour  调度开始时间, 单位为小时, 0~23。
    * scheduleEndHour  调度结束时间, 单位为小时, 0~23。
    * schedulePeriod  调度周期 * MINUTE  分钟为单位调度 * HOUR    小时为单位调度
    * scheduleInterval  调度间隔。
    * scheduleStatus  调度状态 * NOT_SCHEDULE  未启用任务调度 * SCHEDULING    任务调度中
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * syncMsg  同步日志。
    * syncTime  同步时间。
    * createTime  创建时间。
    * createUser  创建者。
    * updateTime  更新时间。
    * updateUser  更新者。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'domainId' => 'string',
            'instanceId' => 'string',
            'dataConnectionWorkspace' => 'string',
            'clusterType' => 'string',
            'dataConnectionId' => 'string',
            'dataConnectionName' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'scheduleStartHour' => 'int',
            'scheduleEndHour' => 'int',
            'schedulePeriod' => 'string',
            'scheduleInterval' => 'int',
            'scheduleStatus' => 'string',
            'syncStatus' => 'string',
            'syncMsg' => 'string',
            'syncTime' => 'int',
            'createTime' => 'int',
            'createUser' => 'string',
            'updateTime' => 'int',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户同步任务id。
    * projectId  项目ID。
    * domainId  租户ID。
    * instanceId  实例ID。
    * dataConnectionWorkspace  数据连接工作空间ID。
    * clusterType  集群类型 * MRS集群 * DWS集群
    * dataConnectionId  数据连接id。
    * dataConnectionName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * scheduleStartHour  调度开始时间, 单位为小时, 0~23。
    * scheduleEndHour  调度结束时间, 单位为小时, 0~23。
    * schedulePeriod  调度周期 * MINUTE  分钟为单位调度 * HOUR    小时为单位调度
    * scheduleInterval  调度间隔。
    * scheduleStatus  调度状态 * NOT_SCHEDULE  未启用任务调度 * SCHEDULING    任务调度中
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * syncMsg  同步日志。
    * syncTime  同步时间。
    * createTime  创建时间。
    * createUser  创建者。
    * updateTime  更新时间。
    * updateUser  更新者。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'domainId' => null,
        'instanceId' => null,
        'dataConnectionWorkspace' => null,
        'clusterType' => null,
        'dataConnectionId' => null,
        'dataConnectionName' => null,
        'clusterId' => null,
        'clusterName' => null,
        'scheduleStartHour' => 'int32',
        'scheduleEndHour' => 'int32',
        'schedulePeriod' => null,
        'scheduleInterval' => 'int32',
        'scheduleStatus' => null,
        'syncStatus' => null,
        'syncMsg' => null,
        'syncTime' => 'int64',
        'createTime' => 'int64',
        'createUser' => null,
        'updateTime' => 'int64',
        'updateUser' => null
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
    * id  用户同步任务id。
    * projectId  项目ID。
    * domainId  租户ID。
    * instanceId  实例ID。
    * dataConnectionWorkspace  数据连接工作空间ID。
    * clusterType  集群类型 * MRS集群 * DWS集群
    * dataConnectionId  数据连接id。
    * dataConnectionName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * scheduleStartHour  调度开始时间, 单位为小时, 0~23。
    * scheduleEndHour  调度结束时间, 单位为小时, 0~23。
    * schedulePeriod  调度周期 * MINUTE  分钟为单位调度 * HOUR    小时为单位调度
    * scheduleInterval  调度间隔。
    * scheduleStatus  调度状态 * NOT_SCHEDULE  未启用任务调度 * SCHEDULING    任务调度中
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * syncMsg  同步日志。
    * syncTime  同步时间。
    * createTime  创建时间。
    * createUser  创建者。
    * updateTime  更新时间。
    * updateUser  更新者。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'instanceId' => 'instance_id',
            'dataConnectionWorkspace' => 'data_connection_workspace',
            'clusterType' => 'cluster_type',
            'dataConnectionId' => 'data_connection_id',
            'dataConnectionName' => 'data_connection_name',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'scheduleStartHour' => 'schedule_start_hour',
            'scheduleEndHour' => 'schedule_end_hour',
            'schedulePeriod' => 'schedule_period',
            'scheduleInterval' => 'schedule_interval',
            'scheduleStatus' => 'schedule_status',
            'syncStatus' => 'sync_status',
            'syncMsg' => 'sync_msg',
            'syncTime' => 'sync_time',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户同步任务id。
    * projectId  项目ID。
    * domainId  租户ID。
    * instanceId  实例ID。
    * dataConnectionWorkspace  数据连接工作空间ID。
    * clusterType  集群类型 * MRS集群 * DWS集群
    * dataConnectionId  数据连接id。
    * dataConnectionName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * scheduleStartHour  调度开始时间, 单位为小时, 0~23。
    * scheduleEndHour  调度结束时间, 单位为小时, 0~23。
    * schedulePeriod  调度周期 * MINUTE  分钟为单位调度 * HOUR    小时为单位调度
    * scheduleInterval  调度间隔。
    * scheduleStatus  调度状态 * NOT_SCHEDULE  未启用任务调度 * SCHEDULING    任务调度中
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * syncMsg  同步日志。
    * syncTime  同步时间。
    * createTime  创建时间。
    * createUser  创建者。
    * updateTime  更新时间。
    * updateUser  更新者。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'instanceId' => 'setInstanceId',
            'dataConnectionWorkspace' => 'setDataConnectionWorkspace',
            'clusterType' => 'setClusterType',
            'dataConnectionId' => 'setDataConnectionId',
            'dataConnectionName' => 'setDataConnectionName',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'scheduleStartHour' => 'setScheduleStartHour',
            'scheduleEndHour' => 'setScheduleEndHour',
            'schedulePeriod' => 'setSchedulePeriod',
            'scheduleInterval' => 'setScheduleInterval',
            'scheduleStatus' => 'setScheduleStatus',
            'syncStatus' => 'setSyncStatus',
            'syncMsg' => 'setSyncMsg',
            'syncTime' => 'setSyncTime',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户同步任务id。
    * projectId  项目ID。
    * domainId  租户ID。
    * instanceId  实例ID。
    * dataConnectionWorkspace  数据连接工作空间ID。
    * clusterType  集群类型 * MRS集群 * DWS集群
    * dataConnectionId  数据连接id。
    * dataConnectionName  数据连接名称。
    * clusterId  集群id。
    * clusterName  集群名称。
    * scheduleStartHour  调度开始时间, 单位为小时, 0~23。
    * scheduleEndHour  调度结束时间, 单位为小时, 0~23。
    * schedulePeriod  调度周期 * MINUTE  分钟为单位调度 * HOUR    小时为单位调度
    * scheduleInterval  调度间隔。
    * scheduleStatus  调度状态 * NOT_SCHEDULE  未启用任务调度 * SCHEDULING    任务调度中
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * syncMsg  同步日志。
    * syncTime  同步时间。
    * createTime  创建时间。
    * createUser  创建者。
    * updateTime  更新时间。
    * updateUser  更新者。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'instanceId' => 'getInstanceId',
            'dataConnectionWorkspace' => 'getDataConnectionWorkspace',
            'clusterType' => 'getClusterType',
            'dataConnectionId' => 'getDataConnectionId',
            'dataConnectionName' => 'getDataConnectionName',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'scheduleStartHour' => 'getScheduleStartHour',
            'scheduleEndHour' => 'getScheduleEndHour',
            'schedulePeriod' => 'getSchedulePeriod',
            'scheduleInterval' => 'getScheduleInterval',
            'scheduleStatus' => 'getScheduleStatus',
            'syncStatus' => 'getSyncStatus',
            'syncMsg' => 'getSyncMsg',
            'syncTime' => 'getSyncTime',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser'
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
    const CLUSTER_TYPE_MRS = 'MRS';
    const CLUSTER_TYPE_DWS = 'DWS';
    const SCHEDULE_PERIOD_MINUTE = 'MINUTE';
    const SCHEDULE_PERIOD_HOUR = 'HOUR';
    const SCHEDULE_STATUS_NOT_SCHEDULE = 'NOT_SCHEDULE';
    const SCHEDULE_STATUS_SCHEDULING = 'SCHEDULING';
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
    public function getClusterTypeAllowableValues()
    {
        return [
            self::CLUSTER_TYPE_MRS,
            self::CLUSTER_TYPE_DWS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSchedulePeriodAllowableValues()
    {
        return [
            self::SCHEDULE_PERIOD_MINUTE,
            self::SCHEDULE_PERIOD_HOUR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScheduleStatusAllowableValues()
    {
        return [
            self::SCHEDULE_STATUS_NOT_SCHEDULE,
            self::SCHEDULE_STATUS_SCHEDULING,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['dataConnectionWorkspace'] = isset($data['dataConnectionWorkspace']) ? $data['dataConnectionWorkspace'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['dataConnectionId'] = isset($data['dataConnectionId']) ? $data['dataConnectionId'] : null;
        $this->container['dataConnectionName'] = isset($data['dataConnectionName']) ? $data['dataConnectionName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['scheduleStartHour'] = isset($data['scheduleStartHour']) ? $data['scheduleStartHour'] : null;
        $this->container['scheduleEndHour'] = isset($data['scheduleEndHour']) ? $data['scheduleEndHour'] : null;
        $this->container['schedulePeriod'] = isset($data['schedulePeriod']) ? $data['schedulePeriod'] : null;
        $this->container['scheduleInterval'] = isset($data['scheduleInterval']) ? $data['scheduleInterval'] : null;
        $this->container['scheduleStatus'] = isset($data['scheduleStatus']) ? $data['scheduleStatus'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
        $this->container['syncMsg'] = isset($data['syncMsg']) ? $data['syncMsg'] : null;
        $this->container['syncTime'] = isset($data['syncTime']) ? $data['syncTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataConnectionWorkspace']) && (mb_strlen($this->container['dataConnectionWorkspace']) > 32)) {
                $invalidProperties[] = "invalid value for 'dataConnectionWorkspace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['dataConnectionWorkspace']) && (mb_strlen($this->container['dataConnectionWorkspace']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataConnectionWorkspace', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getClusterTypeAllowableValues();
                if (!is_null($this->container['clusterType']) && !in_array($this->container['clusterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dataConnectionId']) && (mb_strlen($this->container['dataConnectionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'dataConnectionId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['dataConnectionId']) && (mb_strlen($this->container['dataConnectionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataConnectionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataConnectionName']) && (mb_strlen($this->container['dataConnectionName']) > 100)) {
                $invalidProperties[] = "invalid value for 'dataConnectionName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dataConnectionName']) && (mb_strlen($this->container['dataConnectionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataConnectionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleStartHour']) && ($this->container['scheduleStartHour'] > 23)) {
                $invalidProperties[] = "invalid value for 'scheduleStartHour', must be smaller than or equal to 23.";
            }
            if (!is_null($this->container['scheduleStartHour']) && ($this->container['scheduleStartHour'] < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleStartHour', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleEndHour']) && ($this->container['scheduleEndHour'] > 23)) {
                $invalidProperties[] = "invalid value for 'scheduleEndHour', must be smaller than or equal to 23.";
            }
            if (!is_null($this->container['scheduleEndHour']) && ($this->container['scheduleEndHour'] < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleEndHour', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSchedulePeriodAllowableValues();
                if (!is_null($this->container['schedulePeriod']) && !in_array($this->container['schedulePeriod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'schedulePeriod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['scheduleInterval']) && ($this->container['scheduleInterval'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'scheduleInterval', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['scheduleInterval']) && ($this->container['scheduleInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'scheduleInterval', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getScheduleStatusAllowableValues();
                if (!is_null($this->container['scheduleStatus']) && !in_array($this->container['scheduleStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scheduleStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSyncStatusAllowableValues();
                if (!is_null($this->container['syncStatus']) && !in_array($this->container['syncStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['syncMsg']) && (mb_strlen($this->container['syncMsg']) > 16777215)) {
                $invalidProperties[] = "invalid value for 'syncMsg', the character length must be smaller than or equal to 16777215.";
            }
            if (!is_null($this->container['syncMsg']) && (mb_strlen($this->container['syncMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'syncMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['syncTime']) && ($this->container['syncTime'] > 4070880010000)) {
                $invalidProperties[] = "invalid value for 'syncTime', must be smaller than or equal to 4070880010000.";
            }
            if (!is_null($this->container['syncTime']) && ($this->container['syncTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'syncTime', must be bigger than or equal to 0.";
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
    *  用户同步任务id。
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
    * @param string|null $id 用户同步任务id。
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
    *  项目ID。
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
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
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
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets dataConnectionWorkspace
    *  数据连接工作空间ID。
    *
    * @return string|null
    */
    public function getDataConnectionWorkspace()
    {
        return $this->container['dataConnectionWorkspace'];
    }

    /**
    * Sets dataConnectionWorkspace
    *
    * @param string|null $dataConnectionWorkspace 数据连接工作空间ID。
    *
    * @return $this
    */
    public function setDataConnectionWorkspace($dataConnectionWorkspace)
    {
        $this->container['dataConnectionWorkspace'] = $dataConnectionWorkspace;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型 * MRS集群 * DWS集群
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 集群类型 * MRS集群 * DWS集群
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets dataConnectionId
    *  数据连接id。
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
    * @param string|null $dataConnectionId 数据连接id。
    *
    * @return $this
    */
    public function setDataConnectionId($dataConnectionId)
    {
        $this->container['dataConnectionId'] = $dataConnectionId;
        return $this;
    }

    /**
    * Gets dataConnectionName
    *  数据连接名称。
    *
    * @return string|null
    */
    public function getDataConnectionName()
    {
        return $this->container['dataConnectionName'];
    }

    /**
    * Sets dataConnectionName
    *
    * @param string|null $dataConnectionName 数据连接名称。
    *
    * @return $this
    */
    public function setDataConnectionName($dataConnectionName)
    {
        $this->container['dataConnectionName'] = $dataConnectionName;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id。
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
    * @param string|null $clusterId 集群id。
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
    * Gets scheduleStartHour
    *  调度开始时间, 单位为小时, 0~23。
    *
    * @return int|null
    */
    public function getScheduleStartHour()
    {
        return $this->container['scheduleStartHour'];
    }

    /**
    * Sets scheduleStartHour
    *
    * @param int|null $scheduleStartHour 调度开始时间, 单位为小时, 0~23。
    *
    * @return $this
    */
    public function setScheduleStartHour($scheduleStartHour)
    {
        $this->container['scheduleStartHour'] = $scheduleStartHour;
        return $this;
    }

    /**
    * Gets scheduleEndHour
    *  调度结束时间, 单位为小时, 0~23。
    *
    * @return int|null
    */
    public function getScheduleEndHour()
    {
        return $this->container['scheduleEndHour'];
    }

    /**
    * Sets scheduleEndHour
    *
    * @param int|null $scheduleEndHour 调度结束时间, 单位为小时, 0~23。
    *
    * @return $this
    */
    public function setScheduleEndHour($scheduleEndHour)
    {
        $this->container['scheduleEndHour'] = $scheduleEndHour;
        return $this;
    }

    /**
    * Gets schedulePeriod
    *  调度周期 * MINUTE  分钟为单位调度 * HOUR    小时为单位调度
    *
    * @return string|null
    */
    public function getSchedulePeriod()
    {
        return $this->container['schedulePeriod'];
    }

    /**
    * Sets schedulePeriod
    *
    * @param string|null $schedulePeriod 调度周期 * MINUTE  分钟为单位调度 * HOUR    小时为单位调度
    *
    * @return $this
    */
    public function setSchedulePeriod($schedulePeriod)
    {
        $this->container['schedulePeriod'] = $schedulePeriod;
        return $this;
    }

    /**
    * Gets scheduleInterval
    *  调度间隔。
    *
    * @return int|null
    */
    public function getScheduleInterval()
    {
        return $this->container['scheduleInterval'];
    }

    /**
    * Sets scheduleInterval
    *
    * @param int|null $scheduleInterval 调度间隔。
    *
    * @return $this
    */
    public function setScheduleInterval($scheduleInterval)
    {
        $this->container['scheduleInterval'] = $scheduleInterval;
        return $this;
    }

    /**
    * Gets scheduleStatus
    *  调度状态 * NOT_SCHEDULE  未启用任务调度 * SCHEDULING    任务调度中
    *
    * @return string|null
    */
    public function getScheduleStatus()
    {
        return $this->container['scheduleStatus'];
    }

    /**
    * Sets scheduleStatus
    *
    * @param string|null $scheduleStatus 调度状态 * NOT_SCHEDULE  未启用任务调度 * SCHEDULING    任务调度中
    *
    * @return $this
    */
    public function setScheduleStatus($scheduleStatus)
    {
        $this->container['scheduleStatus'] = $scheduleStatus;
        return $this;
    }

    /**
    * Gets syncStatus
    *  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
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
    * @param string|null $syncStatus 同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
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
    *  同步日志。
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
    * @param string|null $syncMsg 同步日志。
    *
    * @return $this
    */
    public function setSyncMsg($syncMsg)
    {
        $this->container['syncMsg'] = $syncMsg;
        return $this;
    }

    /**
    * Gets syncTime
    *  同步时间。
    *
    * @return int|null
    */
    public function getSyncTime()
    {
        return $this->container['syncTime'];
    }

    /**
    * Sets syncTime
    *
    * @param int|null $syncTime 同步时间。
    *
    * @return $this
    */
    public function setSyncTime($syncTime)
    {
        $this->container['syncTime'] = $syncTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param int|null $createTime 创建时间。
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
    *  创建者。
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
    * @param string|null $createUser 创建者。
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
    *  更新时间。
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
    * @param int|null $updateTime 更新时间。
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
    *  更新者。
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
    * @param string|null $updateUser 更新者。
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
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

