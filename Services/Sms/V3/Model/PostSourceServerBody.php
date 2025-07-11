<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostSourceServerBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostSourceServerBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * virtualizationType  操作系统虚拟化方式
    * linuxBlockCheck  Linux操作系统块检查
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    * agentVersion  Agent版本
    * kernelVersion  内核版本信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * oemSystem  是否是OEM操作系统(Windows)
    * startType  启动方式，可以取值MANUAL、MGC或者空。
    * ioReadWait  磁盘IO读时延，单位为ms
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    * platform  平台信息: hw：华为  ali：阿里 aws：亚马逊 azure：微软云 gcp：谷歌云 tencent：腾讯云 vmware hyperv other：其他
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ip' => 'string',
            'name' => 'string',
            'hostname' => 'string',
            'osType' => 'string',
            'osVersion' => 'string',
            'virtualizationType' => 'string',
            'linuxBlockCheck' => 'string',
            'firmware' => 'string',
            'cpuQuantity' => 'int',
            'memory' => 'int',
            'disks' => '\HuaweiCloud\SDK\Sms\V3\Model\ServerDisk[]',
            'btrfsList' => '\HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]',
            'networks' => '\HuaweiCloud\SDK\Sms\V3\Model\NetWork[]',
            'domainId' => 'string',
            'hasRsync' => 'bool',
            'paravirtualization' => 'bool',
            'rawDevices' => 'string',
            'driverFiles' => 'bool',
            'systemServices' => 'bool',
            'accountRights' => 'bool',
            'bootLoader' => 'string',
            'systemDir' => 'string',
            'volumeGroups' => '\HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]',
            'agentVersion' => 'string',
            'kernelVersion' => 'string',
            'migrationCycle' => 'string',
            'state' => 'string',
            'oemSystem' => 'bool',
            'startType' => 'string',
            'ioReadWait' => 'double',
            'hasTc' => 'bool',
            'platform' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * virtualizationType  操作系统虚拟化方式
    * linuxBlockCheck  Linux操作系统块检查
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    * agentVersion  Agent版本
    * kernelVersion  内核版本信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * oemSystem  是否是OEM操作系统(Windows)
    * startType  启动方式，可以取值MANUAL、MGC或者空。
    * ioReadWait  磁盘IO读时延，单位为ms
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    * platform  平台信息: hw：华为  ali：阿里 aws：亚马逊 azure：微软云 gcp：谷歌云 tencent：腾讯云 vmware hyperv other：其他
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ip' => null,
        'name' => null,
        'hostname' => null,
        'osType' => null,
        'osVersion' => null,
        'virtualizationType' => null,
        'linuxBlockCheck' => null,
        'firmware' => null,
        'cpuQuantity' => 'int32',
        'memory' => 'int64',
        'disks' => null,
        'btrfsList' => null,
        'networks' => null,
        'domainId' => null,
        'hasRsync' => null,
        'paravirtualization' => null,
        'rawDevices' => null,
        'driverFiles' => null,
        'systemServices' => null,
        'accountRights' => null,
        'bootLoader' => null,
        'systemDir' => null,
        'volumeGroups' => null,
        'agentVersion' => null,
        'kernelVersion' => null,
        'migrationCycle' => null,
        'state' => null,
        'oemSystem' => null,
        'startType' => null,
        'ioReadWait' => 'double',
        'hasTc' => null,
        'platform' => null
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
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * virtualizationType  操作系统虚拟化方式
    * linuxBlockCheck  Linux操作系统块检查
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    * agentVersion  Agent版本
    * kernelVersion  内核版本信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * oemSystem  是否是OEM操作系统(Windows)
    * startType  启动方式，可以取值MANUAL、MGC或者空。
    * ioReadWait  磁盘IO读时延，单位为ms
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    * platform  平台信息: hw：华为  ali：阿里 aws：亚马逊 azure：微软云 gcp：谷歌云 tencent：腾讯云 vmware hyperv other：其他
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ip' => 'ip',
            'name' => 'name',
            'hostname' => 'hostname',
            'osType' => 'os_type',
            'osVersion' => 'os_version',
            'virtualizationType' => 'virtualization_type',
            'linuxBlockCheck' => 'linux_block_check',
            'firmware' => 'firmware',
            'cpuQuantity' => 'cpu_quantity',
            'memory' => 'memory',
            'disks' => 'disks',
            'btrfsList' => 'btrfs_list',
            'networks' => 'networks',
            'domainId' => 'domain_id',
            'hasRsync' => 'has_rsync',
            'paravirtualization' => 'paravirtualization',
            'rawDevices' => 'raw_devices',
            'driverFiles' => 'driver_files',
            'systemServices' => 'system_services',
            'accountRights' => 'account_rights',
            'bootLoader' => 'boot_loader',
            'systemDir' => 'system_dir',
            'volumeGroups' => 'volume_groups',
            'agentVersion' => 'agent_version',
            'kernelVersion' => 'kernel_version',
            'migrationCycle' => 'migration_cycle',
            'state' => 'state',
            'oemSystem' => 'oem_system',
            'startType' => 'start_type',
            'ioReadWait' => 'io_read_wait',
            'hasTc' => 'has_tc',
            'platform' => 'platform'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * virtualizationType  操作系统虚拟化方式
    * linuxBlockCheck  Linux操作系统块检查
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    * agentVersion  Agent版本
    * kernelVersion  内核版本信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * oemSystem  是否是OEM操作系统(Windows)
    * startType  启动方式，可以取值MANUAL、MGC或者空。
    * ioReadWait  磁盘IO读时延，单位为ms
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    * platform  平台信息: hw：华为  ali：阿里 aws：亚马逊 azure：微软云 gcp：谷歌云 tencent：腾讯云 vmware hyperv other：其他
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ip' => 'setIp',
            'name' => 'setName',
            'hostname' => 'setHostname',
            'osType' => 'setOsType',
            'osVersion' => 'setOsVersion',
            'virtualizationType' => 'setVirtualizationType',
            'linuxBlockCheck' => 'setLinuxBlockCheck',
            'firmware' => 'setFirmware',
            'cpuQuantity' => 'setCpuQuantity',
            'memory' => 'setMemory',
            'disks' => 'setDisks',
            'btrfsList' => 'setBtrfsList',
            'networks' => 'setNetworks',
            'domainId' => 'setDomainId',
            'hasRsync' => 'setHasRsync',
            'paravirtualization' => 'setParavirtualization',
            'rawDevices' => 'setRawDevices',
            'driverFiles' => 'setDriverFiles',
            'systemServices' => 'setSystemServices',
            'accountRights' => 'setAccountRights',
            'bootLoader' => 'setBootLoader',
            'systemDir' => 'setSystemDir',
            'volumeGroups' => 'setVolumeGroups',
            'agentVersion' => 'setAgentVersion',
            'kernelVersion' => 'setKernelVersion',
            'migrationCycle' => 'setMigrationCycle',
            'state' => 'setState',
            'oemSystem' => 'setOemSystem',
            'startType' => 'setStartType',
            'ioReadWait' => 'setIoReadWait',
            'hasTc' => 'setHasTc',
            'platform' => 'setPlatform'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  源端在SMS数据库中的ID
    * ip  源端服务器ip，注册源端时必选，更新非必选
    * name  用来区分不同源端服务器的名称
    * hostname  源端主机名，注册源端必选，更新非必选
    * osType  源端服务器的OS类型，分为Windows和Linux，注册必选，更新非必选
    * osVersion  操作系统版本，注册必选，更新非必选
    * virtualizationType  操作系统虚拟化方式
    * linuxBlockCheck  Linux操作系统块检查
    * firmware  源端服务器启动类型，如BIOS或者UEFI
    * cpuQuantity  CPU个数，单位vCPU
    * memory  内存大小，单位MB
    * disks  源端服务器的磁盘信息
    * btrfsList  Linux 必选，源端的Btrfs信息。如果源端不存在Btrfs，则为[]
    * networks  源端服务器的网卡信息
    * domainId  租户的domainId
    * hasRsync  是否安装rsync组件，Linux系统此参数为必选
    * paravirtualization  Linux场景必选，源端是否是半虚拟化
    * rawDevices  Linux必选，裸设备列表
    * driverFiles  Windows 必选，是否缺少驱动文件
    * systemServices  Windows必选，是否存在不正常服务
    * accountRights  Windows必选，权限是否满足要求
    * bootLoader  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    * systemDir  Windows必选，系统目录
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    * agentVersion  Agent版本
    * kernelVersion  内核版本信息
    * migrationCycle  迁移周期 cutovering:启动目的端中 cutovered:启动目的端完成 checking:检查中 setting:设置中 replicating:复制中 syncing:同步中
    * state  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    * oemSystem  是否是OEM操作系统(Windows)
    * startType  启动方式，可以取值MANUAL、MGC或者空。
    * ioReadWait  磁盘IO读时延，单位为ms
    * hasTc  是否安装tc组件，Linux系统此参数为必选
    * platform  平台信息: hw：华为  ali：阿里 aws：亚马逊 azure：微软云 gcp：谷歌云 tencent：腾讯云 vmware hyperv other：其他
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ip' => 'getIp',
            'name' => 'getName',
            'hostname' => 'getHostname',
            'osType' => 'getOsType',
            'osVersion' => 'getOsVersion',
            'virtualizationType' => 'getVirtualizationType',
            'linuxBlockCheck' => 'getLinuxBlockCheck',
            'firmware' => 'getFirmware',
            'cpuQuantity' => 'getCpuQuantity',
            'memory' => 'getMemory',
            'disks' => 'getDisks',
            'btrfsList' => 'getBtrfsList',
            'networks' => 'getNetworks',
            'domainId' => 'getDomainId',
            'hasRsync' => 'getHasRsync',
            'paravirtualization' => 'getParavirtualization',
            'rawDevices' => 'getRawDevices',
            'driverFiles' => 'getDriverFiles',
            'systemServices' => 'getSystemServices',
            'accountRights' => 'getAccountRights',
            'bootLoader' => 'getBootLoader',
            'systemDir' => 'getSystemDir',
            'volumeGroups' => 'getVolumeGroups',
            'agentVersion' => 'getAgentVersion',
            'kernelVersion' => 'getKernelVersion',
            'migrationCycle' => 'getMigrationCycle',
            'state' => 'getState',
            'oemSystem' => 'getOemSystem',
            'startType' => 'getStartType',
            'ioReadWait' => 'getIoReadWait',
            'hasTc' => 'getHasTc',
            'platform' => 'getPlatform'
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
    const OS_TYPE_WINDOWS = 'WINDOWS';
    const OS_TYPE_LINUX = 'LINUX';
    const FIRMWARE_BIOS = 'BIOS';
    const FIRMWARE_UEFI = 'UEFI';
    const BOOT_LOADER_GRUB = 'GRUB';
    const BOOT_LOADER_LILO = 'LILO';
    const MIGRATION_CYCLE_CUTOVERING = 'cutovering';
    const MIGRATION_CYCLE_CUTOVERED = 'cutovered';
    const MIGRATION_CYCLE_CHECKING = 'checking';
    const MIGRATION_CYCLE_SETTING = 'setting';
    const MIGRATION_CYCLE_REPLICATING = 'replicating';
    const MIGRATION_CYCLE_SYNCING = 'syncing';
    const STATE_UNAVAILABLE = 'unavailable';
    const STATE_WAITING = 'waiting';
    const STATE_INITIALIZE = 'initialize';
    const STATE_REPLICATE = 'replicate';
    const STATE_SYNCING = 'syncing';
    const STATE_STOPPING = 'stopping';
    const STATE_STOPPED = 'stopped';
    const STATE_SKIPPING = 'skipping';
    const STATE_DELETING = 'deleting';
    const STATE_ERROR = 'error';
    const STATE_CLONING = 'cloning';
    const STATE_CUTOVERING = 'cutovering';
    const STATE_FINISHED = 'finished';
    const STATE_CLEARING = 'clearing';
    const STATE_CLEARED = 'cleared';
    const STATE_CLEARFAILED = 'clearfailed';
    const STATE_PREMIGREADY = 'premigready';
    const STATE_PREMIGING = 'premiging';
    const STATE_PREMIGED = 'premiged';
    const STATE_PREMIGFAILED = 'premigfailed';
    const START_TYPE_MANUAL = 'MANUAL';
    const START_TYPE_MGC = 'MGC';
    const START_TYPE_EMPTY = '';
    const PLATFORM_HW = 'hw';
    const PLATFORM_ALI = 'ali';
    const PLATFORM_AWS = 'aws';
    const PLATFORM_AZURE = 'azure';
    const PLATFORM_GCP = 'gcp';
    const PLATFORM_TENCENT = 'tencent';
    const PLATFORM_VMWARE = 'vmware';
    const PLATFORM_HYPERV = 'hyperv';
    const PLATFORM_OTHER = 'other';
    

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
    public function getBootLoaderAllowableValues()
    {
        return [
            self::BOOT_LOADER_GRUB,
            self::BOOT_LOADER_LILO,
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
            self::STATE_ERROR,
            self::STATE_CLONING,
            self::STATE_CUTOVERING,
            self::STATE_FINISHED,
            self::STATE_CLEARING,
            self::STATE_CLEARED,
            self::STATE_CLEARFAILED,
            self::STATE_PREMIGREADY,
            self::STATE_PREMIGING,
            self::STATE_PREMIGED,
            self::STATE_PREMIGFAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStartTypeAllowableValues()
    {
        return [
            self::START_TYPE_MANUAL,
            self::START_TYPE_MGC,
            self::START_TYPE_EMPTY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_HW,
            self::PLATFORM_ALI,
            self::PLATFORM_AWS,
            self::PLATFORM_AZURE,
            self::PLATFORM_GCP,
            self::PLATFORM_TENCENT,
            self::PLATFORM_VMWARE,
            self::PLATFORM_HYPERV,
            self::PLATFORM_OTHER,
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
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['virtualizationType'] = isset($data['virtualizationType']) ? $data['virtualizationType'] : null;
        $this->container['linuxBlockCheck'] = isset($data['linuxBlockCheck']) ? $data['linuxBlockCheck'] : null;
        $this->container['firmware'] = isset($data['firmware']) ? $data['firmware'] : null;
        $this->container['cpuQuantity'] = isset($data['cpuQuantity']) ? $data['cpuQuantity'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['disks'] = isset($data['disks']) ? $data['disks'] : null;
        $this->container['btrfsList'] = isset($data['btrfsList']) ? $data['btrfsList'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['hasRsync'] = isset($data['hasRsync']) ? $data['hasRsync'] : null;
        $this->container['paravirtualization'] = isset($data['paravirtualization']) ? $data['paravirtualization'] : null;
        $this->container['rawDevices'] = isset($data['rawDevices']) ? $data['rawDevices'] : null;
        $this->container['driverFiles'] = isset($data['driverFiles']) ? $data['driverFiles'] : null;
        $this->container['systemServices'] = isset($data['systemServices']) ? $data['systemServices'] : null;
        $this->container['accountRights'] = isset($data['accountRights']) ? $data['accountRights'] : null;
        $this->container['bootLoader'] = isset($data['bootLoader']) ? $data['bootLoader'] : null;
        $this->container['systemDir'] = isset($data['systemDir']) ? $data['systemDir'] : null;
        $this->container['volumeGroups'] = isset($data['volumeGroups']) ? $data['volumeGroups'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['migrationCycle'] = isset($data['migrationCycle']) ? $data['migrationCycle'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['oemSystem'] = isset($data['oemSystem']) ? $data['oemSystem'] : null;
        $this->container['startType'] = isset($data['startType']) ? $data['startType'] : null;
        $this->container['ioReadWait'] = isset($data['ioReadWait']) ? $data['ioReadWait'] : null;
        $this->container['hasTc'] = isset($data['hasTc']) ? $data['hasTc'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
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
            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
            if (!is_null($this->container['virtualizationType']) && (mb_strlen($this->container['virtualizationType']) > 255)) {
                $invalidProperties[] = "invalid value for 'virtualizationType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['virtualizationType']) && (mb_strlen($this->container['virtualizationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'virtualizationType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['linuxBlockCheck']) && (mb_strlen($this->container['linuxBlockCheck']) > 255)) {
                $invalidProperties[] = "invalid value for 'linuxBlockCheck', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['linuxBlockCheck']) && (mb_strlen($this->container['linuxBlockCheck']) < 0)) {
                $invalidProperties[] = "invalid value for 'linuxBlockCheck', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getFirmwareAllowableValues();
                if (!is_null($this->container['firmware']) && !in_array($this->container['firmware'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'firmware', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['firmware']) && (mb_strlen($this->container['firmware']) > 255)) {
                $invalidProperties[] = "invalid value for 'firmware', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['firmware']) && (mb_strlen($this->container['firmware']) < 0)) {
                $invalidProperties[] = "invalid value for 'firmware', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 255)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rawDevices']) && (mb_strlen($this->container['rawDevices']) > 255)) {
                $invalidProperties[] = "invalid value for 'rawDevices', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['rawDevices']) && (mb_strlen($this->container['rawDevices']) < 0)) {
                $invalidProperties[] = "invalid value for 'rawDevices', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBootLoaderAllowableValues();
                if (!is_null($this->container['bootLoader']) && !in_array($this->container['bootLoader'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bootLoader', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['systemDir']) && (mb_strlen($this->container['systemDir']) > 255)) {
                $invalidProperties[] = "invalid value for 'systemDir', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['systemDir']) && (mb_strlen($this->container['systemDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'systemDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['kernelVersion']) && (mb_strlen($this->container['kernelVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'kernelVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['kernelVersion']) && (mb_strlen($this->container['kernelVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'kernelVersion', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getMigrationCycleAllowableValues();
                if (!is_null($this->container['migrationCycle']) && !in_array($this->container['migrationCycle'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationCycle', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 255)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStartTypeAllowableValues();
                if (!is_null($this->container['startType']) && !in_array($this->container['startType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'startType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ioReadWait']) && ($this->container['ioReadWait'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'ioReadWait', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['ioReadWait']) && ($this->container['ioReadWait'] < 0)) {
                $invalidProperties[] = "invalid value for 'ioReadWait', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPlatformAllowableValues();
                if (!is_null($this->container['platform']) && !in_array($this->container['platform'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'platform', must be one of '%s'",
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
    * Gets id
    *  源端在SMS数据库中的ID
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
    * @param string|null $id 源端在SMS数据库中的ID
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
    *  源端服务器ip，注册源端时必选，更新非必选
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
    * @param string|null $ip 源端服务器ip，注册源端时必选，更新非必选
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
    * Gets virtualizationType
    *  操作系统虚拟化方式
    *
    * @return string|null
    */
    public function getVirtualizationType()
    {
        return $this->container['virtualizationType'];
    }

    /**
    * Sets virtualizationType
    *
    * @param string|null $virtualizationType 操作系统虚拟化方式
    *
    * @return $this
    */
    public function setVirtualizationType($virtualizationType)
    {
        $this->container['virtualizationType'] = $virtualizationType;
        return $this;
    }

    /**
    * Gets linuxBlockCheck
    *  Linux操作系统块检查
    *
    * @return string|null
    */
    public function getLinuxBlockCheck()
    {
        return $this->container['linuxBlockCheck'];
    }

    /**
    * Sets linuxBlockCheck
    *
    * @param string|null $linuxBlockCheck Linux操作系统块检查
    *
    * @return $this
    */
    public function setLinuxBlockCheck($linuxBlockCheck)
    {
        $this->container['linuxBlockCheck'] = $linuxBlockCheck;
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
    * Gets cpuQuantity
    *  CPU个数，单位vCPU
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
    * @param int|null $cpuQuantity CPU个数，单位vCPU
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
    *  内存大小，单位MB
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
    * @param int|null $memory 内存大小，单位MB
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets disks
    *  源端服务器的磁盘信息
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
    * @param \HuaweiCloud\SDK\Sms\V3\Model\ServerDisk[]|null $disks 源端服务器的磁盘信息
    *
    * @return $this
    */
    public function setDisks($disks)
    {
        $this->container['disks'] = $disks;
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
    * Gets domainId
    *  租户的domainId
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
    * @param string|null $domainId 租户的domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets hasRsync
    *  是否安装rsync组件，Linux系统此参数为必选
    *
    * @return bool|null
    */
    public function getHasRsync()
    {
        return $this->container['hasRsync'];
    }

    /**
    * Sets hasRsync
    *
    * @param bool|null $hasRsync 是否安装rsync组件，Linux系统此参数为必选
    *
    * @return $this
    */
    public function setHasRsync($hasRsync)
    {
        $this->container['hasRsync'] = $hasRsync;
        return $this;
    }

    /**
    * Gets paravirtualization
    *  Linux场景必选，源端是否是半虚拟化
    *
    * @return bool|null
    */
    public function getParavirtualization()
    {
        return $this->container['paravirtualization'];
    }

    /**
    * Sets paravirtualization
    *
    * @param bool|null $paravirtualization Linux场景必选，源端是否是半虚拟化
    *
    * @return $this
    */
    public function setParavirtualization($paravirtualization)
    {
        $this->container['paravirtualization'] = $paravirtualization;
        return $this;
    }

    /**
    * Gets rawDevices
    *  Linux必选，裸设备列表
    *
    * @return string|null
    */
    public function getRawDevices()
    {
        return $this->container['rawDevices'];
    }

    /**
    * Sets rawDevices
    *
    * @param string|null $rawDevices Linux必选，裸设备列表
    *
    * @return $this
    */
    public function setRawDevices($rawDevices)
    {
        $this->container['rawDevices'] = $rawDevices;
        return $this;
    }

    /**
    * Gets driverFiles
    *  Windows 必选，是否缺少驱动文件
    *
    * @return bool|null
    */
    public function getDriverFiles()
    {
        return $this->container['driverFiles'];
    }

    /**
    * Sets driverFiles
    *
    * @param bool|null $driverFiles Windows 必选，是否缺少驱动文件
    *
    * @return $this
    */
    public function setDriverFiles($driverFiles)
    {
        $this->container['driverFiles'] = $driverFiles;
        return $this;
    }

    /**
    * Gets systemServices
    *  Windows必选，是否存在不正常服务
    *
    * @return bool|null
    */
    public function getSystemServices()
    {
        return $this->container['systemServices'];
    }

    /**
    * Sets systemServices
    *
    * @param bool|null $systemServices Windows必选，是否存在不正常服务
    *
    * @return $this
    */
    public function setSystemServices($systemServices)
    {
        $this->container['systemServices'] = $systemServices;
        return $this;
    }

    /**
    * Gets accountRights
    *  Windows必选，权限是否满足要求
    *
    * @return bool|null
    */
    public function getAccountRights()
    {
        return $this->container['accountRights'];
    }

    /**
    * Sets accountRights
    *
    * @param bool|null $accountRights Windows必选，权限是否满足要求
    *
    * @return $this
    */
    public function setAccountRights($accountRights)
    {
        $this->container['accountRights'] = $accountRights;
        return $this;
    }

    /**
    * Gets bootLoader
    *  Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    *
    * @return string|null
    */
    public function getBootLoader()
    {
        return $this->container['bootLoader'];
    }

    /**
    * Sets bootLoader
    *
    * @param string|null $bootLoader Linux必选，系统引导类型，BOOT_LOADER(GRUB/LILO)
    *
    * @return $this
    */
    public function setBootLoader($bootLoader)
    {
        $this->container['bootLoader'] = $bootLoader;
        return $this;
    }

    /**
    * Gets systemDir
    *  Windows必选，系统目录
    *
    * @return string|null
    */
    public function getSystemDir()
    {
        return $this->container['systemDir'];
    }

    /**
    * Sets systemDir
    *
    * @param string|null $systemDir Windows必选，系统目录
    *
    * @return $this
    */
    public function setSystemDir($systemDir)
    {
        $this->container['systemDir'] = $systemDir;
        return $this;
    }

    /**
    * Gets volumeGroups
    *  Linux必选，如果没有卷组，输入[]
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
    * @param \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null $volumeGroups Linux必选，如果没有卷组，输入[]
    *
    * @return $this
    */
    public function setVolumeGroups($volumeGroups)
    {
        $this->container['volumeGroups'] = $volumeGroups;
        return $this;
    }

    /**
    * Gets agentVersion
    *  Agent版本
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
    * @param string|null $agentVersion Agent版本
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets kernelVersion
    *  内核版本信息
    *
    * @return string|null
    */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
    * Sets kernelVersion
    *
    * @param string|null $kernelVersion 内核版本信息
    *
    * @return $this
    */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;
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
    * Gets state
    *  源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
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
    * @param string|null $state 源端服务器状态 unavailable：环境校验不通过 waiting：等待 initialize：初始化 replicate：复制 syncing：持续同步 stopping：暂停中 stopped：已暂停 skipping：跳过中 deleting：删除中 error：错误 cloning：等待克隆完成 cutovering：启动目的端中 finished：启动目的端完成 clearing: 清理快照资源中 cleared：清理快照资源完成 clearfailed：清理快照资源失败 premigready: 迁移演练已就绪 premiging: 迁移演练中 premiged: 迁移演练已完成 premigfailed: 迁移演练失败
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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
    * Gets startType
    *  启动方式，可以取值MANUAL、MGC或者空。
    *
    * @return string|null
    */
    public function getStartType()
    {
        return $this->container['startType'];
    }

    /**
    * Sets startType
    *
    * @param string|null $startType 启动方式，可以取值MANUAL、MGC或者空。
    *
    * @return $this
    */
    public function setStartType($startType)
    {
        $this->container['startType'] = $startType;
        return $this;
    }

    /**
    * Gets ioReadWait
    *  磁盘IO读时延，单位为ms
    *
    * @return double|null
    */
    public function getIoReadWait()
    {
        return $this->container['ioReadWait'];
    }

    /**
    * Sets ioReadWait
    *
    * @param double|null $ioReadWait 磁盘IO读时延，单位为ms
    *
    * @return $this
    */
    public function setIoReadWait($ioReadWait)
    {
        $this->container['ioReadWait'] = $ioReadWait;
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
    * Gets platform
    *  平台信息: hw：华为  ali：阿里 aws：亚马逊 azure：微软云 gcp：谷歌云 tencent：腾讯云 vmware hyperv other：其他
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform 平台信息: hw：华为  ali：阿里 aws：亚马逊 azure：微软云 gcp：谷歌云 tencent：腾讯云 vmware hyperv other：其他
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
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

