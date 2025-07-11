<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  任务名称（用户自定义）
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * osType  操作系统类型，分为WINDOWS和LINUX，创建时必选，更新时可选
    * id  迁移任务ID
    * priority  进程优先级  0：低  1：标准（默认）  2：高
    * speedLimit  迁移限速
    * regionId  目的端服务器的区域ID
    * startTargetServer  迁移完成后是否启动目的端服务器  true：启动  false：停止
    * enterpriseProjectId  企业项目ID
    * migrationIp  目的端服务器的IP地址。  公网迁移时请填写弹性IP地址  专线迁移时请填写私有IP地址
    * regionName  目的端服务器的区域名称
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * vmTemplateId  模板ID
    * sourceServer  sourceServer
    * targetServer  targetServer
    * state  任务状态
    * estimateCompleteTime  预估完成时间
    * connected  连接状态
    * createDate  任务创建时间
    * startDate  任务开始时间
    * finishDate  任务结束时间
    * migrateSpeed  迁移速率，单位：MB/S
    * compressRate  压缩率
    * errorJson  错误信息
    * totalTime  任务总耗时
    * floatIp  暂时保留float,兼容现网老版本的SMS-Agent
    * remainSeconds  迁移剩余时间（秒）
    * targetSnapshotId  目的端的快照ID
    * cloneServer  cloneServer
    * subTasks  任务包含的子任务列表
    * networkCheckInfo  networkCheckInfo
    * totalCpuUsage  主机的CPU使用率，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * needMigrationTest  是否开启迁移演练
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'osType' => 'string',
            'id' => 'string',
            'priority' => 'int',
            'speedLimit' => 'int',
            'regionId' => 'string',
            'startTargetServer' => 'bool',
            'enterpriseProjectId' => 'string',
            'migrationIp' => 'string',
            'regionName' => 'string',
            'projectName' => 'string',
            'projectId' => 'string',
            'vmTemplateId' => 'string',
            'sourceServer' => '\HuaweiCloud\SDK\Sms\V3\Model\SourceServerResponse',
            'targetServer' => '\HuaweiCloud\SDK\Sms\V3\Model\TaskTargetServer',
            'state' => 'string',
            'estimateCompleteTime' => 'int',
            'connected' => 'bool',
            'createDate' => 'int',
            'startDate' => 'int',
            'finishDate' => 'int',
            'migrateSpeed' => 'double',
            'compressRate' => 'double',
            'errorJson' => 'string',
            'totalTime' => 'int',
            'floatIp' => 'string',
            'remainSeconds' => 'int',
            'targetSnapshotId' => 'string',
            'cloneServer' => '\HuaweiCloud\SDK\Sms\V3\Model\CloneServer',
            'subTasks' => '\HuaweiCloud\SDK\Sms\V3\Model\SubTask[]',
            'networkCheckInfo' => '\HuaweiCloud\SDK\Sms\V3\Model\NetworkCheckInfoRequestBody',
            'totalCpuUsage' => 'double',
            'agentCpuUsage' => 'double',
            'totalMemUsage' => 'double',
            'agentMemUsage' => 'double',
            'totalDiskIo' => 'double',
            'agentDiskIo' => 'double',
            'needMigrationTest' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  任务名称（用户自定义）
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * osType  操作系统类型，分为WINDOWS和LINUX，创建时必选，更新时可选
    * id  迁移任务ID
    * priority  进程优先级  0：低  1：标准（默认）  2：高
    * speedLimit  迁移限速
    * regionId  目的端服务器的区域ID
    * startTargetServer  迁移完成后是否启动目的端服务器  true：启动  false：停止
    * enterpriseProjectId  企业项目ID
    * migrationIp  目的端服务器的IP地址。  公网迁移时请填写弹性IP地址  专线迁移时请填写私有IP地址
    * regionName  目的端服务器的区域名称
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * vmTemplateId  模板ID
    * sourceServer  sourceServer
    * targetServer  targetServer
    * state  任务状态
    * estimateCompleteTime  预估完成时间
    * connected  连接状态
    * createDate  任务创建时间
    * startDate  任务开始时间
    * finishDate  任务结束时间
    * migrateSpeed  迁移速率，单位：MB/S
    * compressRate  压缩率
    * errorJson  错误信息
    * totalTime  任务总耗时
    * floatIp  暂时保留float,兼容现网老版本的SMS-Agent
    * remainSeconds  迁移剩余时间（秒）
    * targetSnapshotId  目的端的快照ID
    * cloneServer  cloneServer
    * subTasks  任务包含的子任务列表
    * networkCheckInfo  networkCheckInfo
    * totalCpuUsage  主机的CPU使用率，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * needMigrationTest  是否开启迁移演练
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'osType' => null,
        'id' => null,
        'priority' => 'int32',
        'speedLimit' => 'int32',
        'regionId' => null,
        'startTargetServer' => null,
        'enterpriseProjectId' => null,
        'migrationIp' => null,
        'regionName' => null,
        'projectName' => null,
        'projectId' => null,
        'vmTemplateId' => null,
        'sourceServer' => null,
        'targetServer' => null,
        'state' => null,
        'estimateCompleteTime' => 'int64',
        'connected' => null,
        'createDate' => 'int64',
        'startDate' => 'int64',
        'finishDate' => 'int64',
        'migrateSpeed' => 'double',
        'compressRate' => 'double',
        'errorJson' => null,
        'totalTime' => 'int64',
        'floatIp' => null,
        'remainSeconds' => 'int64',
        'targetSnapshotId' => null,
        'cloneServer' => null,
        'subTasks' => null,
        'networkCheckInfo' => null,
        'totalCpuUsage' => 'double',
        'agentCpuUsage' => 'double',
        'totalMemUsage' => 'double',
        'agentMemUsage' => 'double',
        'totalDiskIo' => 'double',
        'agentDiskIo' => 'double',
        'needMigrationTest' => null
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
    * name  任务名称（用户自定义）
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * osType  操作系统类型，分为WINDOWS和LINUX，创建时必选，更新时可选
    * id  迁移任务ID
    * priority  进程优先级  0：低  1：标准（默认）  2：高
    * speedLimit  迁移限速
    * regionId  目的端服务器的区域ID
    * startTargetServer  迁移完成后是否启动目的端服务器  true：启动  false：停止
    * enterpriseProjectId  企业项目ID
    * migrationIp  目的端服务器的IP地址。  公网迁移时请填写弹性IP地址  专线迁移时请填写私有IP地址
    * regionName  目的端服务器的区域名称
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * vmTemplateId  模板ID
    * sourceServer  sourceServer
    * targetServer  targetServer
    * state  任务状态
    * estimateCompleteTime  预估完成时间
    * connected  连接状态
    * createDate  任务创建时间
    * startDate  任务开始时间
    * finishDate  任务结束时间
    * migrateSpeed  迁移速率，单位：MB/S
    * compressRate  压缩率
    * errorJson  错误信息
    * totalTime  任务总耗时
    * floatIp  暂时保留float,兼容现网老版本的SMS-Agent
    * remainSeconds  迁移剩余时间（秒）
    * targetSnapshotId  目的端的快照ID
    * cloneServer  cloneServer
    * subTasks  任务包含的子任务列表
    * networkCheckInfo  networkCheckInfo
    * totalCpuUsage  主机的CPU使用率，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * needMigrationTest  是否开启迁移演练
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'osType' => 'os_type',
            'id' => 'id',
            'priority' => 'priority',
            'speedLimit' => 'speed_limit',
            'regionId' => 'region_id',
            'startTargetServer' => 'start_target_server',
            'enterpriseProjectId' => 'enterprise_project_id',
            'migrationIp' => 'migration_ip',
            'regionName' => 'region_name',
            'projectName' => 'project_name',
            'projectId' => 'project_id',
            'vmTemplateId' => 'vm_template_id',
            'sourceServer' => 'source_server',
            'targetServer' => 'target_server',
            'state' => 'state',
            'estimateCompleteTime' => 'estimate_complete_time',
            'connected' => 'connected',
            'createDate' => 'create_date',
            'startDate' => 'start_date',
            'finishDate' => 'finish_date',
            'migrateSpeed' => 'migrate_speed',
            'compressRate' => 'compress_rate',
            'errorJson' => 'error_json',
            'totalTime' => 'total_time',
            'floatIp' => 'float_ip',
            'remainSeconds' => 'remain_seconds',
            'targetSnapshotId' => 'target_snapshot_id',
            'cloneServer' => 'clone_server',
            'subTasks' => 'sub_tasks',
            'networkCheckInfo' => 'network_check_info',
            'totalCpuUsage' => 'total_cpu_usage',
            'agentCpuUsage' => 'agent_cpu_usage',
            'totalMemUsage' => 'total_mem_usage',
            'agentMemUsage' => 'agent_mem_usage',
            'totalDiskIo' => 'total_disk_io',
            'agentDiskIo' => 'agent_disk_io',
            'needMigrationTest' => 'need_migration_test'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  任务名称（用户自定义）
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * osType  操作系统类型，分为WINDOWS和LINUX，创建时必选，更新时可选
    * id  迁移任务ID
    * priority  进程优先级  0：低  1：标准（默认）  2：高
    * speedLimit  迁移限速
    * regionId  目的端服务器的区域ID
    * startTargetServer  迁移完成后是否启动目的端服务器  true：启动  false：停止
    * enterpriseProjectId  企业项目ID
    * migrationIp  目的端服务器的IP地址。  公网迁移时请填写弹性IP地址  专线迁移时请填写私有IP地址
    * regionName  目的端服务器的区域名称
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * vmTemplateId  模板ID
    * sourceServer  sourceServer
    * targetServer  targetServer
    * state  任务状态
    * estimateCompleteTime  预估完成时间
    * connected  连接状态
    * createDate  任务创建时间
    * startDate  任务开始时间
    * finishDate  任务结束时间
    * migrateSpeed  迁移速率，单位：MB/S
    * compressRate  压缩率
    * errorJson  错误信息
    * totalTime  任务总耗时
    * floatIp  暂时保留float,兼容现网老版本的SMS-Agent
    * remainSeconds  迁移剩余时间（秒）
    * targetSnapshotId  目的端的快照ID
    * cloneServer  cloneServer
    * subTasks  任务包含的子任务列表
    * networkCheckInfo  networkCheckInfo
    * totalCpuUsage  主机的CPU使用率，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * needMigrationTest  是否开启迁移演练
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'osType' => 'setOsType',
            'id' => 'setId',
            'priority' => 'setPriority',
            'speedLimit' => 'setSpeedLimit',
            'regionId' => 'setRegionId',
            'startTargetServer' => 'setStartTargetServer',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'migrationIp' => 'setMigrationIp',
            'regionName' => 'setRegionName',
            'projectName' => 'setProjectName',
            'projectId' => 'setProjectId',
            'vmTemplateId' => 'setVmTemplateId',
            'sourceServer' => 'setSourceServer',
            'targetServer' => 'setTargetServer',
            'state' => 'setState',
            'estimateCompleteTime' => 'setEstimateCompleteTime',
            'connected' => 'setConnected',
            'createDate' => 'setCreateDate',
            'startDate' => 'setStartDate',
            'finishDate' => 'setFinishDate',
            'migrateSpeed' => 'setMigrateSpeed',
            'compressRate' => 'setCompressRate',
            'errorJson' => 'setErrorJson',
            'totalTime' => 'setTotalTime',
            'floatIp' => 'setFloatIp',
            'remainSeconds' => 'setRemainSeconds',
            'targetSnapshotId' => 'setTargetSnapshotId',
            'cloneServer' => 'setCloneServer',
            'subTasks' => 'setSubTasks',
            'networkCheckInfo' => 'setNetworkCheckInfo',
            'totalCpuUsage' => 'setTotalCpuUsage',
            'agentCpuUsage' => 'setAgentCpuUsage',
            'totalMemUsage' => 'setTotalMemUsage',
            'agentMemUsage' => 'setAgentMemUsage',
            'totalDiskIo' => 'setTotalDiskIo',
            'agentDiskIo' => 'setAgentDiskIo',
            'needMigrationTest' => 'setNeedMigrationTest'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  任务名称（用户自定义）
    * type  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    * osType  操作系统类型，分为WINDOWS和LINUX，创建时必选，更新时可选
    * id  迁移任务ID
    * priority  进程优先级  0：低  1：标准（默认）  2：高
    * speedLimit  迁移限速
    * regionId  目的端服务器的区域ID
    * startTargetServer  迁移完成后是否启动目的端服务器  true：启动  false：停止
    * enterpriseProjectId  企业项目ID
    * migrationIp  目的端服务器的IP地址。  公网迁移时请填写弹性IP地址  专线迁移时请填写私有IP地址
    * regionName  目的端服务器的区域名称
    * projectName  目的端服务器所在项目名称
    * projectId  目的端服务器所在项目ID
    * vmTemplateId  模板ID
    * sourceServer  sourceServer
    * targetServer  targetServer
    * state  任务状态
    * estimateCompleteTime  预估完成时间
    * connected  连接状态
    * createDate  任务创建时间
    * startDate  任务开始时间
    * finishDate  任务结束时间
    * migrateSpeed  迁移速率，单位：MB/S
    * compressRate  压缩率
    * errorJson  错误信息
    * totalTime  任务总耗时
    * floatIp  暂时保留float,兼容现网老版本的SMS-Agent
    * remainSeconds  迁移剩余时间（秒）
    * targetSnapshotId  目的端的快照ID
    * cloneServer  cloneServer
    * subTasks  任务包含的子任务列表
    * networkCheckInfo  networkCheckInfo
    * totalCpuUsage  主机的CPU使用率，单位是百分比
    * agentCpuUsage  Agent的CPU使用率，单位是百分比
    * totalMemUsage  主机的内存使用值，单位是MB
    * agentMemUsage  Agent的内存使用值，单位是MB
    * totalDiskIo  主机的磁盘I/O值，单位是MB/s
    * agentDiskIo  Agent的磁盘I/O值，单位是MB/s
    * needMigrationTest  是否开启迁移演练
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'osType' => 'getOsType',
            'id' => 'getId',
            'priority' => 'getPriority',
            'speedLimit' => 'getSpeedLimit',
            'regionId' => 'getRegionId',
            'startTargetServer' => 'getStartTargetServer',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'migrationIp' => 'getMigrationIp',
            'regionName' => 'getRegionName',
            'projectName' => 'getProjectName',
            'projectId' => 'getProjectId',
            'vmTemplateId' => 'getVmTemplateId',
            'sourceServer' => 'getSourceServer',
            'targetServer' => 'getTargetServer',
            'state' => 'getState',
            'estimateCompleteTime' => 'getEstimateCompleteTime',
            'connected' => 'getConnected',
            'createDate' => 'getCreateDate',
            'startDate' => 'getStartDate',
            'finishDate' => 'getFinishDate',
            'migrateSpeed' => 'getMigrateSpeed',
            'compressRate' => 'getCompressRate',
            'errorJson' => 'getErrorJson',
            'totalTime' => 'getTotalTime',
            'floatIp' => 'getFloatIp',
            'remainSeconds' => 'getRemainSeconds',
            'targetSnapshotId' => 'getTargetSnapshotId',
            'cloneServer' => 'getCloneServer',
            'subTasks' => 'getSubTasks',
            'networkCheckInfo' => 'getNetworkCheckInfo',
            'totalCpuUsage' => 'getTotalCpuUsage',
            'agentCpuUsage' => 'getAgentCpuUsage',
            'totalMemUsage' => 'getTotalMemUsage',
            'agentMemUsage' => 'getAgentMemUsage',
            'totalDiskIo' => 'getTotalDiskIo',
            'agentDiskIo' => 'getAgentDiskIo',
            'needMigrationTest' => 'getNeedMigrationTest'
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
    const TYPE_MIGRATE_FILE = 'MIGRATE_FILE';
    const TYPE_MIGRATE_BLOCK = 'MIGRATE_BLOCK';
    const OS_TYPE_WINDOWS = 'WINDOWS';
    const OS_TYPE_LINUX = 'LINUX';
    const PRIORITY_0 = 0;
    const PRIORITY_1 = 1;
    const PRIORITY_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MIGRATE_FILE,
            self::TYPE_MIGRATE_BLOCK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_WINDOWS,
            self::OS_TYPE_LINUX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY_0,
            self::PRIORITY_1,
            self::PRIORITY_2,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['startTargetServer'] = isset($data['startTargetServer']) ? $data['startTargetServer'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['migrationIp'] = isset($data['migrationIp']) ? $data['migrationIp'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vmTemplateId'] = isset($data['vmTemplateId']) ? $data['vmTemplateId'] : null;
        $this->container['sourceServer'] = isset($data['sourceServer']) ? $data['sourceServer'] : null;
        $this->container['targetServer'] = isset($data['targetServer']) ? $data['targetServer'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['estimateCompleteTime'] = isset($data['estimateCompleteTime']) ? $data['estimateCompleteTime'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['finishDate'] = isset($data['finishDate']) ? $data['finishDate'] : null;
        $this->container['migrateSpeed'] = isset($data['migrateSpeed']) ? $data['migrateSpeed'] : null;
        $this->container['compressRate'] = isset($data['compressRate']) ? $data['compressRate'] : null;
        $this->container['errorJson'] = isset($data['errorJson']) ? $data['errorJson'] : null;
        $this->container['totalTime'] = isset($data['totalTime']) ? $data['totalTime'] : null;
        $this->container['floatIp'] = isset($data['floatIp']) ? $data['floatIp'] : null;
        $this->container['remainSeconds'] = isset($data['remainSeconds']) ? $data['remainSeconds'] : null;
        $this->container['targetSnapshotId'] = isset($data['targetSnapshotId']) ? $data['targetSnapshotId'] : null;
        $this->container['cloneServer'] = isset($data['cloneServer']) ? $data['cloneServer'] : null;
        $this->container['subTasks'] = isset($data['subTasks']) ? $data['subTasks'] : null;
        $this->container['networkCheckInfo'] = isset($data['networkCheckInfo']) ? $data['networkCheckInfo'] : null;
        $this->container['totalCpuUsage'] = isset($data['totalCpuUsage']) ? $data['totalCpuUsage'] : null;
        $this->container['agentCpuUsage'] = isset($data['agentCpuUsage']) ? $data['agentCpuUsage'] : null;
        $this->container['totalMemUsage'] = isset($data['totalMemUsage']) ? $data['totalMemUsage'] : null;
        $this->container['agentMemUsage'] = isset($data['agentMemUsage']) ? $data['agentMemUsage'] : null;
        $this->container['totalDiskIo'] = isset($data['totalDiskIo']) ? $data['totalDiskIo'] : null;
        $this->container['agentDiskIo'] = isset($data['agentDiskIo']) ? $data['agentDiskIo'] : null;
        $this->container['needMigrationTest'] = isset($data['needMigrationTest']) ? $data['needMigrationTest'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPriorityAllowableValues();
                if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'priority', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['priority']) && ($this->container['priority'] > 2)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] > 65535)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['migrationIp']) && (mb_strlen($this->container['migrationIp']) > 255)) {
                $invalidProperties[] = "invalid value for 'migrationIp', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['migrationIp']) && (mb_strlen($this->container['migrationIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'migrationIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vmTemplateId']) && (mb_strlen($this->container['vmTemplateId']) > 255)) {
                $invalidProperties[] = "invalid value for 'vmTemplateId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['vmTemplateId']) && (mb_strlen($this->container['vmTemplateId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vmTemplateId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 255)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['estimateCompleteTime']) && ($this->container['estimateCompleteTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'estimateCompleteTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['estimateCompleteTime']) && ($this->container['estimateCompleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'estimateCompleteTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createDate']) && ($this->container['createDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createDate']) && ($this->container['createDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'createDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startDate']) && ($this->container['startDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startDate']) && ($this->container['startDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'startDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['finishDate']) && ($this->container['finishDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'finishDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['finishDate']) && ($this->container['finishDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'finishDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['migrateSpeed']) && ($this->container['migrateSpeed'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'migrateSpeed', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['migrateSpeed']) && ($this->container['migrateSpeed'] < 0)) {
                $invalidProperties[] = "invalid value for 'migrateSpeed', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['compressRate']) && ($this->container['compressRate'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'compressRate', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['compressRate']) && ($this->container['compressRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'compressRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorJson']) && (mb_strlen($this->container['errorJson']) > 1024)) {
                $invalidProperties[] = "invalid value for 'errorJson', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['errorJson']) && (mb_strlen($this->container['errorJson']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorJson', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['floatIp']) && (mb_strlen($this->container['floatIp']) > 255)) {
                $invalidProperties[] = "invalid value for 'floatIp', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['floatIp']) && (mb_strlen($this->container['floatIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'floatIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remainSeconds']) && ($this->container['remainSeconds'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'remainSeconds', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['remainSeconds']) && ($this->container['remainSeconds'] < 0)) {
                $invalidProperties[] = "invalid value for 'remainSeconds', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetSnapshotId']) && (mb_strlen($this->container['targetSnapshotId']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetSnapshotId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetSnapshotId']) && (mb_strlen($this->container['targetSnapshotId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetSnapshotId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalCpuUsage']) && ($this->container['totalCpuUsage'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'totalCpuUsage', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['totalCpuUsage']) && ($this->container['totalCpuUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCpuUsage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentCpuUsage']) && ($this->container['agentCpuUsage'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'agentCpuUsage', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['agentCpuUsage']) && ($this->container['agentCpuUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentCpuUsage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalMemUsage']) && ($this->container['totalMemUsage'] > 1048576)) {
                $invalidProperties[] = "invalid value for 'totalMemUsage', must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['totalMemUsage']) && ($this->container['totalMemUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalMemUsage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentMemUsage']) && ($this->container['agentMemUsage'] > 1048576)) {
                $invalidProperties[] = "invalid value for 'agentMemUsage', must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['agentMemUsage']) && ($this->container['agentMemUsage'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentMemUsage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalDiskIo']) && ($this->container['totalDiskIo'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'totalDiskIo', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['totalDiskIo']) && ($this->container['totalDiskIo'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalDiskIo', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentDiskIo']) && ($this->container['agentDiskIo'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'agentDiskIo', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['agentDiskIo']) && ($this->container['agentDiskIo'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentDiskIo', must be bigger than or equal to 0.";
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
    * Gets name
    *  任务名称（用户自定义）
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
    * @param string|null $name 任务名称（用户自定义）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 任务类型，创建时必选，更新时可选 MIGRATE_FILE:文件级迁移 MIGRATE_BLOCK:块级迁移
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型，分为WINDOWS和LINUX，创建时必选，更新时可选
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型，分为WINDOWS和LINUX，创建时必选，更新时可选
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets id
    *  迁移任务ID
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
    * @param string|null $id 迁移任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets priority
    *  进程优先级  0：低  1：标准（默认）  2：高
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 进程优先级  0：低  1：标准（默认）  2：高
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets speedLimit
    *  迁移限速
    *
    * @return int|null
    */
    public function getSpeedLimit()
    {
        return $this->container['speedLimit'];
    }

    /**
    * Sets speedLimit
    *
    * @param int|null $speedLimit 迁移限速
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets regionId
    *  目的端服务器的区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 目的端服务器的区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets startTargetServer
    *  迁移完成后是否启动目的端服务器  true：启动  false：停止
    *
    * @return bool|null
    */
    public function getStartTargetServer()
    {
        return $this->container['startTargetServer'];
    }

    /**
    * Sets startTargetServer
    *
    * @param bool|null $startTargetServer 迁移完成后是否启动目的端服务器  true：启动  false：停止
    *
    * @return $this
    */
    public function setStartTargetServer($startTargetServer)
    {
        $this->container['startTargetServer'] = $startTargetServer;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets migrationIp
    *  目的端服务器的IP地址。  公网迁移时请填写弹性IP地址  专线迁移时请填写私有IP地址
    *
    * @return string|null
    */
    public function getMigrationIp()
    {
        return $this->container['migrationIp'];
    }

    /**
    * Sets migrationIp
    *
    * @param string|null $migrationIp 目的端服务器的IP地址。  公网迁移时请填写弹性IP地址  专线迁移时请填写私有IP地址
    *
    * @return $this
    */
    public function setMigrationIp($migrationIp)
    {
        $this->container['migrationIp'] = $migrationIp;
        return $this;
    }

    /**
    * Gets regionName
    *  目的端服务器的区域名称
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 目的端服务器的区域名称
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets projectName
    *  目的端服务器所在项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 目的端服务器所在项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets projectId
    *  目的端服务器所在项目ID
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
    * @param string|null $projectId 目的端服务器所在项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vmTemplateId
    *  模板ID
    *
    * @return string|null
    */
    public function getVmTemplateId()
    {
        return $this->container['vmTemplateId'];
    }

    /**
    * Sets vmTemplateId
    *
    * @param string|null $vmTemplateId 模板ID
    *
    * @return $this
    */
    public function setVmTemplateId($vmTemplateId)
    {
        $this->container['vmTemplateId'] = $vmTemplateId;
        return $this;
    }

    /**
    * Gets sourceServer
    *  sourceServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\SourceServerResponse|null
    */
    public function getSourceServer()
    {
        return $this->container['sourceServer'];
    }

    /**
    * Sets sourceServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\SourceServerResponse|null $sourceServer sourceServer
    *
    * @return $this
    */
    public function setSourceServer($sourceServer)
    {
        $this->container['sourceServer'] = $sourceServer;
        return $this;
    }

    /**
    * Gets targetServer
    *  targetServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TaskTargetServer|null
    */
    public function getTargetServer()
    {
        return $this->container['targetServer'];
    }

    /**
    * Sets targetServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TaskTargetServer|null $targetServer targetServer
    *
    * @return $this
    */
    public function setTargetServer($targetServer)
    {
        $this->container['targetServer'] = $targetServer;
        return $this;
    }

    /**
    * Gets state
    *  任务状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets estimateCompleteTime
    *  预估完成时间
    *
    * @return int|null
    */
    public function getEstimateCompleteTime()
    {
        return $this->container['estimateCompleteTime'];
    }

    /**
    * Sets estimateCompleteTime
    *
    * @param int|null $estimateCompleteTime 预估完成时间
    *
    * @return $this
    */
    public function setEstimateCompleteTime($estimateCompleteTime)
    {
        $this->container['estimateCompleteTime'] = $estimateCompleteTime;
        return $this;
    }

    /**
    * Gets connected
    *  连接状态
    *
    * @return bool|null
    */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
    * Sets connected
    *
    * @param bool|null $connected 连接状态
    *
    * @return $this
    */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;
        return $this;
    }

    /**
    * Gets createDate
    *  任务创建时间
    *
    * @return int|null
    */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
    * Sets createDate
    *
    * @param int|null $createDate 任务创建时间
    *
    * @return $this
    */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;
        return $this;
    }

    /**
    * Gets startDate
    *  任务开始时间
    *
    * @return int|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param int|null $startDate 任务开始时间
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets finishDate
    *  任务结束时间
    *
    * @return int|null
    */
    public function getFinishDate()
    {
        return $this->container['finishDate'];
    }

    /**
    * Sets finishDate
    *
    * @param int|null $finishDate 任务结束时间
    *
    * @return $this
    */
    public function setFinishDate($finishDate)
    {
        $this->container['finishDate'] = $finishDate;
        return $this;
    }

    /**
    * Gets migrateSpeed
    *  迁移速率，单位：MB/S
    *
    * @return double|null
    */
    public function getMigrateSpeed()
    {
        return $this->container['migrateSpeed'];
    }

    /**
    * Sets migrateSpeed
    *
    * @param double|null $migrateSpeed 迁移速率，单位：MB/S
    *
    * @return $this
    */
    public function setMigrateSpeed($migrateSpeed)
    {
        $this->container['migrateSpeed'] = $migrateSpeed;
        return $this;
    }

    /**
    * Gets compressRate
    *  压缩率
    *
    * @return double|null
    */
    public function getCompressRate()
    {
        return $this->container['compressRate'];
    }

    /**
    * Sets compressRate
    *
    * @param double|null $compressRate 压缩率
    *
    * @return $this
    */
    public function setCompressRate($compressRate)
    {
        $this->container['compressRate'] = $compressRate;
        return $this;
    }

    /**
    * Gets errorJson
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorJson()
    {
        return $this->container['errorJson'];
    }

    /**
    * Sets errorJson
    *
    * @param string|null $errorJson 错误信息
    *
    * @return $this
    */
    public function setErrorJson($errorJson)
    {
        $this->container['errorJson'] = $errorJson;
        return $this;
    }

    /**
    * Gets totalTime
    *  任务总耗时
    *
    * @return int|null
    */
    public function getTotalTime()
    {
        return $this->container['totalTime'];
    }

    /**
    * Sets totalTime
    *
    * @param int|null $totalTime 任务总耗时
    *
    * @return $this
    */
    public function setTotalTime($totalTime)
    {
        $this->container['totalTime'] = $totalTime;
        return $this;
    }

    /**
    * Gets floatIp
    *  暂时保留float,兼容现网老版本的SMS-Agent
    *
    * @return string|null
    */
    public function getFloatIp()
    {
        return $this->container['floatIp'];
    }

    /**
    * Sets floatIp
    *
    * @param string|null $floatIp 暂时保留float,兼容现网老版本的SMS-Agent
    *
    * @return $this
    */
    public function setFloatIp($floatIp)
    {
        $this->container['floatIp'] = $floatIp;
        return $this;
    }

    /**
    * Gets remainSeconds
    *  迁移剩余时间（秒）
    *
    * @return int|null
    */
    public function getRemainSeconds()
    {
        return $this->container['remainSeconds'];
    }

    /**
    * Sets remainSeconds
    *
    * @param int|null $remainSeconds 迁移剩余时间（秒）
    *
    * @return $this
    */
    public function setRemainSeconds($remainSeconds)
    {
        $this->container['remainSeconds'] = $remainSeconds;
        return $this;
    }

    /**
    * Gets targetSnapshotId
    *  目的端的快照ID
    *
    * @return string|null
    */
    public function getTargetSnapshotId()
    {
        return $this->container['targetSnapshotId'];
    }

    /**
    * Sets targetSnapshotId
    *
    * @param string|null $targetSnapshotId 目的端的快照ID
    *
    * @return $this
    */
    public function setTargetSnapshotId($targetSnapshotId)
    {
        $this->container['targetSnapshotId'] = $targetSnapshotId;
        return $this;
    }

    /**
    * Gets cloneServer
    *  cloneServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\CloneServer|null
    */
    public function getCloneServer()
    {
        return $this->container['cloneServer'];
    }

    /**
    * Sets cloneServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\CloneServer|null $cloneServer cloneServer
    *
    * @return $this
    */
    public function setCloneServer($cloneServer)
    {
        $this->container['cloneServer'] = $cloneServer;
        return $this;
    }

    /**
    * Gets subTasks
    *  任务包含的子任务列表
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\SubTask[]|null
    */
    public function getSubTasks()
    {
        return $this->container['subTasks'];
    }

    /**
    * Sets subTasks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\SubTask[]|null $subTasks 任务包含的子任务列表
    *
    * @return $this
    */
    public function setSubTasks($subTasks)
    {
        $this->container['subTasks'] = $subTasks;
        return $this;
    }

    /**
    * Gets networkCheckInfo
    *  networkCheckInfo
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\NetworkCheckInfoRequestBody|null
    */
    public function getNetworkCheckInfo()
    {
        return $this->container['networkCheckInfo'];
    }

    /**
    * Sets networkCheckInfo
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\NetworkCheckInfoRequestBody|null $networkCheckInfo networkCheckInfo
    *
    * @return $this
    */
    public function setNetworkCheckInfo($networkCheckInfo)
    {
        $this->container['networkCheckInfo'] = $networkCheckInfo;
        return $this;
    }

    /**
    * Gets totalCpuUsage
    *  主机的CPU使用率，单位是百分比
    *
    * @return double|null
    */
    public function getTotalCpuUsage()
    {
        return $this->container['totalCpuUsage'];
    }

    /**
    * Sets totalCpuUsage
    *
    * @param double|null $totalCpuUsage 主机的CPU使用率，单位是百分比
    *
    * @return $this
    */
    public function setTotalCpuUsage($totalCpuUsage)
    {
        $this->container['totalCpuUsage'] = $totalCpuUsage;
        return $this;
    }

    /**
    * Gets agentCpuUsage
    *  Agent的CPU使用率，单位是百分比
    *
    * @return double|null
    */
    public function getAgentCpuUsage()
    {
        return $this->container['agentCpuUsage'];
    }

    /**
    * Sets agentCpuUsage
    *
    * @param double|null $agentCpuUsage Agent的CPU使用率，单位是百分比
    *
    * @return $this
    */
    public function setAgentCpuUsage($agentCpuUsage)
    {
        $this->container['agentCpuUsage'] = $agentCpuUsage;
        return $this;
    }

    /**
    * Gets totalMemUsage
    *  主机的内存使用值，单位是MB
    *
    * @return double|null
    */
    public function getTotalMemUsage()
    {
        return $this->container['totalMemUsage'];
    }

    /**
    * Sets totalMemUsage
    *
    * @param double|null $totalMemUsage 主机的内存使用值，单位是MB
    *
    * @return $this
    */
    public function setTotalMemUsage($totalMemUsage)
    {
        $this->container['totalMemUsage'] = $totalMemUsage;
        return $this;
    }

    /**
    * Gets agentMemUsage
    *  Agent的内存使用值，单位是MB
    *
    * @return double|null
    */
    public function getAgentMemUsage()
    {
        return $this->container['agentMemUsage'];
    }

    /**
    * Sets agentMemUsage
    *
    * @param double|null $agentMemUsage Agent的内存使用值，单位是MB
    *
    * @return $this
    */
    public function setAgentMemUsage($agentMemUsage)
    {
        $this->container['agentMemUsage'] = $agentMemUsage;
        return $this;
    }

    /**
    * Gets totalDiskIo
    *  主机的磁盘I/O值，单位是MB/s
    *
    * @return double|null
    */
    public function getTotalDiskIo()
    {
        return $this->container['totalDiskIo'];
    }

    /**
    * Sets totalDiskIo
    *
    * @param double|null $totalDiskIo 主机的磁盘I/O值，单位是MB/s
    *
    * @return $this
    */
    public function setTotalDiskIo($totalDiskIo)
    {
        $this->container['totalDiskIo'] = $totalDiskIo;
        return $this;
    }

    /**
    * Gets agentDiskIo
    *  Agent的磁盘I/O值，单位是MB/s
    *
    * @return double|null
    */
    public function getAgentDiskIo()
    {
        return $this->container['agentDiskIo'];
    }

    /**
    * Sets agentDiskIo
    *
    * @param double|null $agentDiskIo Agent的磁盘I/O值，单位是MB/s
    *
    * @return $this
    */
    public function setAgentDiskIo($agentDiskIo)
    {
        $this->container['agentDiskIo'] = $agentDiskIo;
        return $this;
    }

    /**
    * Gets needMigrationTest
    *  是否开启迁移演练
    *
    * @return bool|null
    */
    public function getNeedMigrationTest()
    {
        return $this->container['needMigrationTest'];
    }

    /**
    * Sets needMigrationTest
    *
    * @param bool|null $needMigrationTest 是否开启迁移演练
    *
    * @return $this
    */
    public function setNeedMigrationTest($needMigrationTest)
    {
        $this->container['needMigrationTest'] = $needMigrationTest;
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

