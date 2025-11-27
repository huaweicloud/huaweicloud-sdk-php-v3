<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowServerResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowServerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  源端服务器ID
    * ip  源端服务器的IP
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * enterpriseProjectId  企业项目ID
    * addDate  源端服务器注册的时间
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * connected  与Agent连接状态
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * initTargetServer  initTargetServer
    * cpuQuantity  源端CPU核心数
    * memory  源端服务器物理内存大小，单位MB
    * currentTask  currentTask
    * disks  源端服务器磁盘信息
    * volumeGroups  源端服务器的卷组信息，Linux必选，如果没有卷组，输入[]
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * checks  源端环境校验信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * stateActionTime  源端状态（state）上次发生变化的时间戳
    * replicatesize  已经完成迁移的大小（B）
    * totalsize  需要迁移的数据量总大小（B）
    * lastVisitTime  agent上一次连接状态发生变化的时间戳
    * stageActionTime  迁移周期（migration_cycle）上一次变化的时间戳
    * agentVersion  Agent版本信息
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ip' => 'string',
            'name' => 'string',
            'hostname' => 'string',
            'enterpriseProjectId' => 'string',
            'addDate' => 'int',
            'osType' => 'string',
            'osVersion' => 'string',
            'oemSystem' => 'bool',
            'state' => 'string',
            'connected' => 'bool',
            'firmware' => 'string',
            'initTargetServer' => '\HuaweiCloud\SDK\Sms\V3\Model\InitTargetServer',
            'cpuQuantity' => 'int',
            'memory' => 'int',
            'currentTask' => '\HuaweiCloud\SDK\Sms\V3\Model\TaskByServerSource',
            'disks' => '\HuaweiCloud\SDK\Sms\V3\Model\ServerDisk[]',
            'volumeGroups' => '\HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]',
            'btrfsList' => '\HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]',
            'networks' => '\HuaweiCloud\SDK\Sms\V3\Model\NetWork[]',
            'checks' => '\HuaweiCloud\SDK\Sms\V3\Model\EnvironmentCheck[]',
            'migrationCycle' => 'string',
            'stateActionTime' => 'int',
            'replicatesize' => 'int',
            'totalsize' => 'int',
            'lastVisitTime' => 'int',
            'stageActionTime' => 'int',
            'agentVersion' => 'string',
            'hasTc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  源端服务器ID
    * ip  源端服务器的IP
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * enterpriseProjectId  企业项目ID
    * addDate  源端服务器注册的时间
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * connected  与Agent连接状态
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * initTargetServer  initTargetServer
    * cpuQuantity  源端CPU核心数
    * memory  源端服务器物理内存大小，单位MB
    * currentTask  currentTask
    * disks  源端服务器磁盘信息
    * volumeGroups  源端服务器的卷组信息，Linux必选，如果没有卷组，输入[]
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * checks  源端环境校验信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * stateActionTime  源端状态（state）上次发生变化的时间戳
    * replicatesize  已经完成迁移的大小（B）
    * totalsize  需要迁移的数据量总大小（B）
    * lastVisitTime  agent上一次连接状态发生变化的时间戳
    * stageActionTime  迁移周期（migration_cycle）上一次变化的时间戳
    * agentVersion  Agent版本信息
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ip' => null,
        'name' => null,
        'hostname' => null,
        'enterpriseProjectId' => null,
        'addDate' => 'int64',
        'osType' => null,
        'osVersion' => null,
        'oemSystem' => null,
        'state' => null,
        'connected' => null,
        'firmware' => null,
        'initTargetServer' => null,
        'cpuQuantity' => 'int32',
        'memory' => 'int64',
        'currentTask' => null,
        'disks' => null,
        'volumeGroups' => null,
        'btrfsList' => null,
        'networks' => null,
        'checks' => null,
        'migrationCycle' => null,
        'stateActionTime' => 'int64',
        'replicatesize' => 'int64',
        'totalsize' => 'int64',
        'lastVisitTime' => 'int64',
        'stageActionTime' => 'int64',
        'agentVersion' => null,
        'hasTc' => null
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
    * id  源端服务器ID
    * ip  源端服务器的IP
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * enterpriseProjectId  企业项目ID
    * addDate  源端服务器注册的时间
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * connected  与Agent连接状态
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * initTargetServer  initTargetServer
    * cpuQuantity  源端CPU核心数
    * memory  源端服务器物理内存大小，单位MB
    * currentTask  currentTask
    * disks  源端服务器磁盘信息
    * volumeGroups  源端服务器的卷组信息，Linux必选，如果没有卷组，输入[]
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * checks  源端环境校验信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * stateActionTime  源端状态（state）上次发生变化的时间戳
    * replicatesize  已经完成迁移的大小（B）
    * totalsize  需要迁移的数据量总大小（B）
    * lastVisitTime  agent上一次连接状态发生变化的时间戳
    * stageActionTime  迁移周期（migration_cycle）上一次变化的时间戳
    * agentVersion  Agent版本信息
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ip' => 'ip',
            'name' => 'name',
            'hostname' => 'hostname',
            'enterpriseProjectId' => 'enterprise_project_id',
            'addDate' => 'add_date',
            'osType' => 'os_type',
            'osVersion' => 'os_version',
            'oemSystem' => 'oem_system',
            'state' => 'state',
            'connected' => 'connected',
            'firmware' => 'firmware',
            'initTargetServer' => 'init_target_server',
            'cpuQuantity' => 'cpu_quantity',
            'memory' => 'memory',
            'currentTask' => 'current_task',
            'disks' => 'disks',
            'volumeGroups' => 'volume_groups',
            'btrfsList' => 'btrfs_list',
            'networks' => 'networks',
            'checks' => 'checks',
            'migrationCycle' => 'migration_cycle',
            'stateActionTime' => 'state_action_time',
            'replicatesize' => 'replicatesize',
            'totalsize' => 'totalsize',
            'lastVisitTime' => 'last_visit_time',
            'stageActionTime' => 'stage_action_time',
            'agentVersion' => 'agent_version',
            'hasTc' => 'has_tc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  源端服务器ID
    * ip  源端服务器的IP
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * enterpriseProjectId  企业项目ID
    * addDate  源端服务器注册的时间
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * connected  与Agent连接状态
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * initTargetServer  initTargetServer
    * cpuQuantity  源端CPU核心数
    * memory  源端服务器物理内存大小，单位MB
    * currentTask  currentTask
    * disks  源端服务器磁盘信息
    * volumeGroups  源端服务器的卷组信息，Linux必选，如果没有卷组，输入[]
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * checks  源端环境校验信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * stateActionTime  源端状态（state）上次发生变化的时间戳
    * replicatesize  已经完成迁移的大小（B）
    * totalsize  需要迁移的数据量总大小（B）
    * lastVisitTime  agent上一次连接状态发生变化的时间戳
    * stageActionTime  迁移周期（migration_cycle）上一次变化的时间戳
    * agentVersion  Agent版本信息
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ip' => 'setIp',
            'name' => 'setName',
            'hostname' => 'setHostname',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'addDate' => 'setAddDate',
            'osType' => 'setOsType',
            'osVersion' => 'setOsVersion',
            'oemSystem' => 'setOemSystem',
            'state' => 'setState',
            'connected' => 'setConnected',
            'firmware' => 'setFirmware',
            'initTargetServer' => 'setInitTargetServer',
            'cpuQuantity' => 'setCpuQuantity',
            'memory' => 'setMemory',
            'currentTask' => 'setCurrentTask',
            'disks' => 'setDisks',
            'volumeGroups' => 'setVolumeGroups',
            'btrfsList' => 'setBtrfsList',
            'networks' => 'setNetworks',
            'checks' => 'setChecks',
            'migrationCycle' => 'setMigrationCycle',
            'stateActionTime' => 'setStateActionTime',
            'replicatesize' => 'setReplicatesize',
            'totalsize' => 'setTotalsize',
            'lastVisitTime' => 'setLastVisitTime',
            'stageActionTime' => 'setStageActionTime',
            'agentVersion' => 'setAgentVersion',
            'hasTc' => 'setHasTc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  源端服务器ID
    * ip  源端服务器的IP
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * enterpriseProjectId  企业项目ID
    * addDate  源端服务器注册的时间
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * oemSystem  是否是OEM操作系统(Windows)
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    * connected  与Agent连接状态
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * initTargetServer  initTargetServer
    * cpuQuantity  源端CPU核心数
    * memory  源端服务器物理内存大小，单位MB
    * currentTask  currentTask
    * disks  源端服务器磁盘信息
    * volumeGroups  源端服务器的卷组信息，Linux必选，如果没有卷组，输入[]
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * checks  源端环境校验信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * stateActionTime  源端状态（state）上次发生变化的时间戳
    * replicatesize  已经完成迁移的大小（B）
    * totalsize  需要迁移的数据量总大小（B）
    * lastVisitTime  agent上一次连接状态发生变化的时间戳
    * stageActionTime  迁移周期（migration_cycle）上一次变化的时间戳
    * agentVersion  Agent版本信息
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ip' => 'getIp',
            'name' => 'getName',
            'hostname' => 'getHostname',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'addDate' => 'getAddDate',
            'osType' => 'getOsType',
            'osVersion' => 'getOsVersion',
            'oemSystem' => 'getOemSystem',
            'state' => 'getState',
            'connected' => 'getConnected',
            'firmware' => 'getFirmware',
            'initTargetServer' => 'getInitTargetServer',
            'cpuQuantity' => 'getCpuQuantity',
            'memory' => 'getMemory',
            'currentTask' => 'getCurrentTask',
            'disks' => 'getDisks',
            'volumeGroups' => 'getVolumeGroups',
            'btrfsList' => 'getBtrfsList',
            'networks' => 'getNetworks',
            'checks' => 'getChecks',
            'migrationCycle' => 'getMigrationCycle',
            'stateActionTime' => 'getStateActionTime',
            'replicatesize' => 'getReplicatesize',
            'totalsize' => 'getTotalsize',
            'lastVisitTime' => 'getLastVisitTime',
            'stageActionTime' => 'getStageActionTime',
            'agentVersion' => 'getAgentVersion',
            'hasTc' => 'getHasTc'
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
    const STATE_UNAVAILABLE = 'unavailable';
    const STATE_WAITING = 'waiting';
    const STATE_INITIALIZE = 'initialize';
    const STATE_REPLICATE = 'replicate';
    const STATE_SYNCING = 'syncing';
    const STATE_STOPPING = 'stopping';
    const STATE_STOPPED = 'stopped';
    const STATE_SKIPPING = 'skipping';
    const STATE_DELETING = 'deleting';
    const STATE_CLEARING = 'clearing';
    const STATE_CLEARED = 'cleared';
    const STATE_CLEARFAILED = 'clearfailed';
    const STATE_PREMIGREADY = 'premigready';
    const STATE_PREMIGED = 'premiged';
    const STATE_PREMIGFAILED = 'premigfailed';
    const STATE_CLONING = 'cloning';
    const STATE_CUTOVERING = 'cutovering';
    const STATE_FINISHED = 'finished';
    const STATE_ERROR = 'error';
    const FIRMWARE_BIOS = 'BIOS';
    const FIRMWARE_UEFI = 'UEFI';
    const MIGRATION_CYCLE_CUTOVERING = 'cutovering';
    const MIGRATION_CYCLE_CUTOVERED = 'cutovered';
    const MIGRATION_CYCLE_CHECKING = 'checking';
    const MIGRATION_CYCLE_SETTING = 'setting';
    const MIGRATION_CYCLE_REPLICATING = 'replicating';
    const MIGRATION_CYCLE_SYNCING = 'syncing';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_UNAVAILABLE,
            self::STATE_WAITING,
            self::STATE_INITIALIZE,
            self::STATE_REPLICATE,
            self::STATE_SYNCING,
            self::STATE_STOPPING,
            self::STATE_STOPPED,
            self::STATE_SKIPPING,
            self::STATE_DELETING,
            self::STATE_CLEARING,
            self::STATE_CLEARED,
            self::STATE_CLEARFAILED,
            self::STATE_PREMIGREADY,
            self::STATE_PREMIGED,
            self::STATE_PREMIGFAILED,
            self::STATE_CLONING,
            self::STATE_CUTOVERING,
            self::STATE_FINISHED,
            self::STATE_ERROR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFirmwareAllowableValues()
    {
        return [
            self::FIRMWARE_BIOS,
            self::FIRMWARE_UEFI,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationCycleAllowableValues()
    {
        return [
            self::MIGRATION_CYCLE_CUTOVERING,
            self::MIGRATION_CYCLE_CUTOVERED,
            self::MIGRATION_CYCLE_CHECKING,
            self::MIGRATION_CYCLE_SETTING,
            self::MIGRATION_CYCLE_REPLICATING,
            self::MIGRATION_CYCLE_SYNCING,
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['addDate'] = isset($data['addDate']) ? $data['addDate'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['oemSystem'] = isset($data['oemSystem']) ? $data['oemSystem'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['firmware'] = isset($data['firmware']) ? $data['firmware'] : null;
        $this->container['initTargetServer'] = isset($data['initTargetServer']) ? $data['initTargetServer'] : null;
        $this->container['cpuQuantity'] = isset($data['cpuQuantity']) ? $data['cpuQuantity'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['currentTask'] = isset($data['currentTask']) ? $data['currentTask'] : null;
        $this->container['disks'] = isset($data['disks']) ? $data['disks'] : null;
        $this->container['volumeGroups'] = isset($data['volumeGroups']) ? $data['volumeGroups'] : null;
        $this->container['btrfsList'] = isset($data['btrfsList']) ? $data['btrfsList'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['checks'] = isset($data['checks']) ? $data['checks'] : null;
        $this->container['migrationCycle'] = isset($data['migrationCycle']) ? $data['migrationCycle'] : null;
        $this->container['stateActionTime'] = isset($data['stateActionTime']) ? $data['stateActionTime'] : null;
        $this->container['replicatesize'] = isset($data['replicatesize']) ? $data['replicatesize'] : null;
        $this->container['totalsize'] = isset($data['totalsize']) ? $data['totalsize'] : null;
        $this->container['lastVisitTime'] = isset($data['lastVisitTime']) ? $data['lastVisitTime'] : null;
        $this->container['stageActionTime'] = isset($data['stageActionTime']) ? $data['stageActionTime'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['hasTc'] = isset($data['hasTc']) ? $data['hasTc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 255)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 0)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostname']) && (mb_strlen($this->container['hostname']) > 255)) {
                $invalidProperties[] = "invalid value for 'hostname', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['hostname']) && (mb_strlen($this->container['hostname']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostname', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['addDate']) && ($this->container['addDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'addDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['addDate']) && ($this->container['addDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'addDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 255)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFirmwareAllowableValues();
                if (!is_null($this->container['firmware']) && !in_array($this->container['firmware'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'firmware', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['cpuQuantity']) && ($this->container['cpuQuantity'] > 65535)) {
                $invalidProperties[] = "invalid value for 'cpuQuantity', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cpuQuantity']) && ($this->container['cpuQuantity'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpuQuantity', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'memory', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['memory']) && ($this->container['memory'] < 0)) {
                $invalidProperties[] = "invalid value for 'memory', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getMigrationCycleAllowableValues();
                if (!is_null($this->container['migrationCycle']) && !in_array($this->container['migrationCycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationCycle', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['migrationCycle']) && (mb_strlen($this->container['migrationCycle']) > 255)) {
                $invalidProperties[] = "invalid value for 'migrationCycle', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['migrationCycle']) && (mb_strlen($this->container['migrationCycle']) < 0)) {
                $invalidProperties[] = "invalid value for 'migrationCycle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stateActionTime']) && ($this->container['stateActionTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'stateActionTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['stateActionTime']) && ($this->container['stateActionTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'stateActionTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['replicatesize']) && ($this->container['replicatesize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'replicatesize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['replicatesize']) && ($this->container['replicatesize'] < 0)) {
                $invalidProperties[] = "invalid value for 'replicatesize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalsize']) && ($this->container['totalsize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalsize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalsize']) && ($this->container['totalsize'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalsize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastVisitTime']) && ($this->container['lastVisitTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastVisitTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastVisitTime']) && ($this->container['lastVisitTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastVisitTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['stageActionTime']) && ($this->container['stageActionTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'stageActionTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['stageActionTime']) && ($this->container['stageActionTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'stageActionTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 0.";
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
    *  源端服务器ID
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
    * @param string|null $id 源端服务器ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ip
    *  源端服务器的IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 源端服务器的IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets name
    *  用来区分不同源端服务器的名称
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
    * @param string|null $name 用来区分不同源端服务器的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets hostname
    *  源端主机名，注册源端必选，更新非必选
    *
    * @return string|null
    */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
    * Sets hostname
    *
    * @param string|null $hostname 源端主机名，注册源端必选，更新非必选
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
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
    * Gets addDate
    *  源端服务器注册的时间
    *
    * @return int|null
    */
    public function getAddDate()
    {
        return $this->container['addDate'];
    }

    /**
    * Sets addDate
    *
    * @param int|null $addDate 源端服务器注册的时间
    *
    * @return $this
    */
    public function setAddDate($addDate)
    {
        $this->container['addDate'] = $addDate;
        return $this;
    }

    /**
    * Gets osType
    *  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
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
    * @param string|null $osType 源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osVersion
    *  操作系统版本，注册必选，更新非必选
    *
    * @return string|null
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string|null $osVersion 操作系统版本，注册必选，更新非必选
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets oemSystem
    *  是否是OEM操作系统(Windows)
    *
    * @return bool|null
    */
    public function getOemSystem()
    {
        return $this->container['oemSystem'];
    }

    /**
    * Sets oemSystem
    *
    * @param bool|null $oemSystem 是否是OEM操作系统(Windows)
    *
    * @return $this
    */
    public function setOemSystem($oemSystem)
    {
        $this->container['oemSystem'] = $oemSystem;
        return $this;
    }

    /**
    * Gets state
    *  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
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
    * @param string|null $state 源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready：迁移演练就绪 premiged：迁移演练完成 premigfailed：迁移演练失败 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 error：错误
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets connected
    *  与Agent连接状态
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
    * @param bool|null $connected 与Agent连接状态
    *
    * @return $this
    */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;
        return $this;
    }

    /**
    * Gets firmware
    *  源端服务器启动类型，如BIOS或者UEFI
    *
    * @return string|null
    */
    public function getFirmware()
    {
        return $this->container['firmware'];
    }

    /**
    * Sets firmware
    *
    * @param string|null $firmware 源端服务器启动类型，如BIOS或者UEFI
    *
    * @return $this
    */
    public function setFirmware($firmware)
    {
        $this->container['firmware'] = $firmware;
        return $this;
    }

    /**
    * Gets initTargetServer
    *  initTargetServer
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\InitTargetServer|null
    */
    public function getInitTargetServer()
    {
        return $this->container['initTargetServer'];
    }

    /**
    * Sets initTargetServer
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\InitTargetServer|null $initTargetServer initTargetServer
    *
    * @return $this
    */
    public function setInitTargetServer($initTargetServer)
    {
        $this->container['initTargetServer'] = $initTargetServer;
        return $this;
    }

    /**
    * Gets cpuQuantity
    *  源端CPU核心数
    *
    * @return int|null
    */
    public function getCpuQuantity()
    {
        return $this->container['cpuQuantity'];
    }

    /**
    * Sets cpuQuantity
    *
    * @param int|null $cpuQuantity 源端CPU核心数
    *
    * @return $this
    */
    public function setCpuQuantity($cpuQuantity)
    {
        $this->container['cpuQuantity'] = $cpuQuantity;
        return $this;
    }

    /**
    * Gets memory
    *  源端服务器物理内存大小，单位MB
    *
    * @return int|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int|null $memory 源端服务器物理内存大小，单位MB
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets currentTask
    *  currentTask
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TaskByServerSource|null
    */
    public function getCurrentTask()
    {
        return $this->container['currentTask'];
    }

    /**
    * Sets currentTask
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TaskByServerSource|null $currentTask currentTask
    *
    * @return $this
    */
    public function setCurrentTask($currentTask)
    {
        $this->container['currentTask'] = $currentTask;
        return $this;
    }

    /**
    * Gets disks
    *  源端服务器磁盘信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\ServerDisk[]|null
    */
    public function getDisks()
    {
        return $this->container['disks'];
    }

    /**
    * Sets disks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\ServerDisk[]|null $disks 源端服务器磁盘信息
    *
    * @return $this
    */
    public function setDisks($disks)
    {
        $this->container['disks'] = $disks;
        return $this;
    }

    /**
    * Gets volumeGroups
    *  源端服务器的卷组信息，Linux必选，如果没有卷组，输入[]
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null
    */
    public function getVolumeGroups()
    {
        return $this->container['volumeGroups'];
    }

    /**
    * Sets volumeGroups
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null $volumeGroups 源端服务器的卷组信息，Linux必选，如果没有卷组，输入[]
    *
    * @return $this
    */
    public function setVolumeGroups($volumeGroups)
    {
        $this->container['volumeGroups'] = $volumeGroups;
        return $this;
    }

    /**
    * Gets btrfsList
    *  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]|null
    */
    public function getBtrfsList()
    {
        return $this->container['btrfsList'];
    }

    /**
    * Sets btrfsList
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]|null $btrfsList Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    *
    * @return $this
    */
    public function setBtrfsList($btrfsList)
    {
        $this->container['btrfsList'] = $btrfsList;
        return $this;
    }

    /**
    * Gets networks
    *  源端服务器的网卡信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\NetWork[]|null
    */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
    * Sets networks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\NetWork[]|null $networks 源端服务器的网卡信息
    *
    * @return $this
    */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;
        return $this;
    }

    /**
    * Gets checks
    *  源端环境校验信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\EnvironmentCheck[]|null
    */
    public function getChecks()
    {
        return $this->container['checks'];
    }

    /**
    * Sets checks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\EnvironmentCheck[]|null $checks 源端环境校验信息
    *
    * @return $this
    */
    public function setChecks($checks)
    {
        $this->container['checks'] = $checks;
        return $this;
    }

    /**
    * Gets migrationCycle
    *  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @return string|null
    */
    public function getMigrationCycle()
    {
        return $this->container['migrationCycle'];
    }

    /**
    * Sets migrationCycle
    *
    * @param string|null $migrationCycle 迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    *
    * @return $this
    */
    public function setMigrationCycle($migrationCycle)
    {
        $this->container['migrationCycle'] = $migrationCycle;
        return $this;
    }

    /**
    * Gets stateActionTime
    *  源端状态（state）上次发生变化的时间戳
    *
    * @return int|null
    */
    public function getStateActionTime()
    {
        return $this->container['stateActionTime'];
    }

    /**
    * Sets stateActionTime
    *
    * @param int|null $stateActionTime 源端状态（state）上次发生变化的时间戳
    *
    * @return $this
    */
    public function setStateActionTime($stateActionTime)
    {
        $this->container['stateActionTime'] = $stateActionTime;
        return $this;
    }

    /**
    * Gets replicatesize
    *  已经完成迁移的大小（B）
    *
    * @return int|null
    */
    public function getReplicatesize()
    {
        return $this->container['replicatesize'];
    }

    /**
    * Sets replicatesize
    *
    * @param int|null $replicatesize 已经完成迁移的大小（B）
    *
    * @return $this
    */
    public function setReplicatesize($replicatesize)
    {
        $this->container['replicatesize'] = $replicatesize;
        return $this;
    }

    /**
    * Gets totalsize
    *  需要迁移的数据量总大小（B）
    *
    * @return int|null
    */
    public function getTotalsize()
    {
        return $this->container['totalsize'];
    }

    /**
    * Sets totalsize
    *
    * @param int|null $totalsize 需要迁移的数据量总大小（B）
    *
    * @return $this
    */
    public function setTotalsize($totalsize)
    {
        $this->container['totalsize'] = $totalsize;
        return $this;
    }

    /**
    * Gets lastVisitTime
    *  agent上一次连接状态发生变化的时间戳
    *
    * @return int|null
    */
    public function getLastVisitTime()
    {
        return $this->container['lastVisitTime'];
    }

    /**
    * Sets lastVisitTime
    *
    * @param int|null $lastVisitTime agent上一次连接状态发生变化的时间戳
    *
    * @return $this
    */
    public function setLastVisitTime($lastVisitTime)
    {
        $this->container['lastVisitTime'] = $lastVisitTime;
        return $this;
    }

    /**
    * Gets stageActionTime
    *  迁移周期（migration_cycle）上一次变化的时间戳
    *
    * @return int|null
    */
    public function getStageActionTime()
    {
        return $this->container['stageActionTime'];
    }

    /**
    * Sets stageActionTime
    *
    * @param int|null $stageActionTime 迁移周期（migration_cycle）上一次变化的时间戳
    *
    * @return $this
    */
    public function setStageActionTime($stageActionTime)
    {
        $this->container['stageActionTime'] = $stageActionTime;
        return $this;
    }

    /**
    * Gets agentVersion
    *  Agent版本信息
    *
    * @return string|null
    */
    public function getAgentVersion()
    {
        return $this->container['agentVersion'];
    }

    /**
    * Sets agentVersion
    *
    * @param string|null $agentVersion Agent版本信息
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets hasTc
    *  是否安装tc组件，Linux系统此参数为必选
    *
    * @return bool|null
    */
    public function getHasTc()
    {
        return $this->container['hasTc'];
    }

    /**
    * Sets hasTc
    *
    * @param bool|null $hasTc 是否安装tc组件，Linux系统此参数为必选
    *
    * @return $this
    */
    public function setHasTc($hasTc)
    {
        $this->container['hasTc'] = $hasTc;
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

