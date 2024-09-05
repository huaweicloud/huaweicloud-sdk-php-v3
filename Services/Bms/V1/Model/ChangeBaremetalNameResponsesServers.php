<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeBaremetalNameResponsesServers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeBaremetalNameResponsesServers';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  裸金属服务器名称
    * id  裸金属服务器唯一标识ID
    * status  裸金属服务器当前状态。ACTIVE：运行中/正在关机/删除中BUILD：创建中ERROR：故障HARD_REBOOT：强制重启中REBOOT：重启中 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器上一次更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * flavor  flavor
    * image  image
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * keyName  SSH密钥名称
    * userId  裸金属服务器所属用户ID。
    * metadata  metadata
    * hostId  裸金属服务器的主机ID
    * addresses  addresses
    * securityGroups  裸金属服务器所属安全组列表。
    * links  裸金属服务器相关信息快捷链接
    * osDcFdiskConfig  扩展属性，磁盘配置方式，取值为如下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * osExtAZavailabilityZone  扩展属性，可用分区编码。
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRhypervisorHostname  扩展属性，hypervisor主机名称，由Nova virt驱动提供
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtStStaskState  扩展属性，裸金属服务器任务状态。例如：rebooting表示重启中reboot_started表示普通重启reboot_started_hard表示强制重启powering-off表示关机中powering-on表示开机中rebuilding表示重建中scheduling表示调度中deleting表示删除中
    * osExtStSvmState  扩展属性，裸金属服务器状态。例如：RUNNING表示运行中SHUTOFF表示关机REBOOT表示重启
    * osSrvUsGlaunchedAt  扩展属性，裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-25T03:40:25.000000
    * osSrvUsGterminatedAt  扩展属性，裸金属服务器关闭时间。时间戳格式为ISO 8601，例如：2019-06-25T03:40:25.000000
    * osExtendedVolumesvolumesAttached  裸金属服务器挂载的云硬盘信息。详情请参见表 os-extended-volumes:volumes_attached字段数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * fault  fault
    * configDrive  config drive信息
    * progress  预留属性
    * description  裸金属服务器的描述信息。
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sdb”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data。取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器实例是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签
    * sysTags  裸金属服务器的系统标签
    * enterpriseProjectId  enterprise_project_id。
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'status' => 'string',
            'created' => '\DateTime',
            'updated' => '\DateTime',
            'flavor' => '\HuaweiCloud\SDK\Bms\V1\Model\FlavorInfo',
            'image' => '\HuaweiCloud\SDK\Bms\V1\Model\Image',
            'tenantId' => 'string',
            'keyName' => 'string',
            'userId' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Bms\V1\Model\MetadataInfos',
            'hostId' => 'string',
            'addresses' => '\HuaweiCloud\SDK\Bms\V1\Model\Addresses',
            'securityGroups' => '\HuaweiCloud\SDK\Bms\V1\Model\SecurityGroups[]',
            'links' => '\HuaweiCloud\SDK\Bms\V1\Model\Links[]',
            'osDcFdiskConfig' => 'string',
            'osExtAZavailabilityZone' => 'string',
            'osExtSrvAttRhost' => 'string',
            'osExtSrvAttRhypervisorHostname' => 'string',
            'osExtSrvAttRinstanceName' => 'string',
            'osExtStSpowerState' => 'int',
            'osExtStStaskState' => 'string',
            'osExtStSvmState' => 'string',
            'osSrvUsGlaunchedAt' => '\DateTime',
            'osSrvUsGterminatedAt' => '\DateTime',
            'osExtendedVolumesvolumesAttached' => '\HuaweiCloud\SDK\Bms\V1\Model\OsExtendedVolumes[]',
            'accessIPv4' => 'string',
            'accessIPv6' => 'string',
            'fault' => '\HuaweiCloud\SDK\Bms\V1\Model\Fault',
            'configDrive' => 'string',
            'progress' => 'int',
            'description' => 'string',
            'hostStatus' => 'string',
            'osExtSrvAttRhostname' => 'string',
            'osExtSrvAttRreservationId' => 'string',
            'osExtSrvAttRlaunchIndex' => 'int',
            'osExtSrvAttRkernelId' => 'string',
            'osExtSrvAttRramdiskId' => 'string',
            'osExtSrvAttRrootDeviceName' => 'string',
            'osExtSrvAttRuserData' => 'string',
            'locked' => 'bool',
            'tags' => 'string[]',
            'sysTags' => '\HuaweiCloud\SDK\Bms\V1\Model\SystemTags[]',
            'enterpriseProjectId' => 'string',
            'osschedulerHints' => '\HuaweiCloud\SDK\Bms\V1\Model\ServerOsSchedulerHints'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  裸金属服务器名称
    * id  裸金属服务器唯一标识ID
    * status  裸金属服务器当前状态。ACTIVE：运行中/正在关机/删除中BUILD：创建中ERROR：故障HARD_REBOOT：强制重启中REBOOT：重启中 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器上一次更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * flavor  flavor
    * image  image
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * keyName  SSH密钥名称
    * userId  裸金属服务器所属用户ID。
    * metadata  metadata
    * hostId  裸金属服务器的主机ID
    * addresses  addresses
    * securityGroups  裸金属服务器所属安全组列表。
    * links  裸金属服务器相关信息快捷链接
    * osDcFdiskConfig  扩展属性，磁盘配置方式，取值为如下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * osExtAZavailabilityZone  扩展属性，可用分区编码。
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRhypervisorHostname  扩展属性，hypervisor主机名称，由Nova virt驱动提供
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtStStaskState  扩展属性，裸金属服务器任务状态。例如：rebooting表示重启中reboot_started表示普通重启reboot_started_hard表示强制重启powering-off表示关机中powering-on表示开机中rebuilding表示重建中scheduling表示调度中deleting表示删除中
    * osExtStSvmState  扩展属性，裸金属服务器状态。例如：RUNNING表示运行中SHUTOFF表示关机REBOOT表示重启
    * osSrvUsGlaunchedAt  扩展属性，裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-25T03:40:25.000000
    * osSrvUsGterminatedAt  扩展属性，裸金属服务器关闭时间。时间戳格式为ISO 8601，例如：2019-06-25T03:40:25.000000
    * osExtendedVolumesvolumesAttached  裸金属服务器挂载的云硬盘信息。详情请参见表 os-extended-volumes:volumes_attached字段数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * fault  fault
    * configDrive  config drive信息
    * progress  预留属性
    * description  裸金属服务器的描述信息。
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sdb”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data。取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器实例是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签
    * sysTags  裸金属服务器的系统标签
    * enterpriseProjectId  enterprise_project_id。
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => 'uuid',
        'status' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'flavor' => null,
        'image' => null,
        'tenantId' => 'uuid',
        'keyName' => null,
        'userId' => 'uuid',
        'metadata' => null,
        'hostId' => null,
        'addresses' => null,
        'securityGroups' => null,
        'links' => null,
        'osDcFdiskConfig' => null,
        'osExtAZavailabilityZone' => null,
        'osExtSrvAttRhost' => null,
        'osExtSrvAttRhypervisorHostname' => null,
        'osExtSrvAttRinstanceName' => null,
        'osExtStSpowerState' => null,
        'osExtStStaskState' => null,
        'osExtStSvmState' => null,
        'osSrvUsGlaunchedAt' => 'date-time',
        'osSrvUsGterminatedAt' => 'date-time',
        'osExtendedVolumesvolumesAttached' => null,
        'accessIPv4' => 'ipv4',
        'accessIPv6' => 'ipv6',
        'fault' => null,
        'configDrive' => null,
        'progress' => 'int32',
        'description' => null,
        'hostStatus' => null,
        'osExtSrvAttRhostname' => null,
        'osExtSrvAttRreservationId' => 'uuid',
        'osExtSrvAttRlaunchIndex' => null,
        'osExtSrvAttRkernelId' => 'uuid',
        'osExtSrvAttRramdiskId' => 'uuid',
        'osExtSrvAttRrootDeviceName' => null,
        'osExtSrvAttRuserData' => null,
        'locked' => null,
        'tags' => null,
        'sysTags' => null,
        'enterpriseProjectId' => null,
        'osschedulerHints' => null
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
    * name  裸金属服务器名称
    * id  裸金属服务器唯一标识ID
    * status  裸金属服务器当前状态。ACTIVE：运行中/正在关机/删除中BUILD：创建中ERROR：故障HARD_REBOOT：强制重启中REBOOT：重启中 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器上一次更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * flavor  flavor
    * image  image
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * keyName  SSH密钥名称
    * userId  裸金属服务器所属用户ID。
    * metadata  metadata
    * hostId  裸金属服务器的主机ID
    * addresses  addresses
    * securityGroups  裸金属服务器所属安全组列表。
    * links  裸金属服务器相关信息快捷链接
    * osDcFdiskConfig  扩展属性，磁盘配置方式，取值为如下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * osExtAZavailabilityZone  扩展属性，可用分区编码。
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRhypervisorHostname  扩展属性，hypervisor主机名称，由Nova virt驱动提供
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtStStaskState  扩展属性，裸金属服务器任务状态。例如：rebooting表示重启中reboot_started表示普通重启reboot_started_hard表示强制重启powering-off表示关机中powering-on表示开机中rebuilding表示重建中scheduling表示调度中deleting表示删除中
    * osExtStSvmState  扩展属性，裸金属服务器状态。例如：RUNNING表示运行中SHUTOFF表示关机REBOOT表示重启
    * osSrvUsGlaunchedAt  扩展属性，裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-25T03:40:25.000000
    * osSrvUsGterminatedAt  扩展属性，裸金属服务器关闭时间。时间戳格式为ISO 8601，例如：2019-06-25T03:40:25.000000
    * osExtendedVolumesvolumesAttached  裸金属服务器挂载的云硬盘信息。详情请参见表 os-extended-volumes:volumes_attached字段数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * fault  fault
    * configDrive  config drive信息
    * progress  预留属性
    * description  裸金属服务器的描述信息。
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sdb”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data。取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器实例是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签
    * sysTags  裸金属服务器的系统标签
    * enterpriseProjectId  enterprise_project_id。
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'status' => 'status',
            'created' => 'created',
            'updated' => 'updated',
            'flavor' => 'flavor',
            'image' => 'image',
            'tenantId' => 'tenant_id',
            'keyName' => 'key_name',
            'userId' => 'user_id',
            'metadata' => 'metadata',
            'hostId' => 'hostId',
            'addresses' => 'addresses',
            'securityGroups' => 'security_groups',
            'links' => 'links',
            'osDcFdiskConfig' => 'OS-DCF:diskConfig',
            'osExtAZavailabilityZone' => 'OS-EXT-AZ:availability_zone',
            'osExtSrvAttRhost' => 'OS-EXT-SRV-ATTR:host',
            'osExtSrvAttRhypervisorHostname' => 'OS-EXT-SRV-ATTR:hypervisor_hostname',
            'osExtSrvAttRinstanceName' => 'OS-EXT-SRV-ATTR:instance_name',
            'osExtStSpowerState' => 'OS-EXT-STS:power_state',
            'osExtStStaskState' => 'OS-EXT-STS:task_state',
            'osExtStSvmState' => 'OS-EXT-STS:vm_state',
            'osSrvUsGlaunchedAt' => 'OS-SRV-USG:launched_at',
            'osSrvUsGterminatedAt' => 'OS-SRV-USG:terminated_at',
            'osExtendedVolumesvolumesAttached' => 'os-extended-volumes:volumes_attached',
            'accessIPv4' => 'accessIPv4',
            'accessIPv6' => 'accessIPv6',
            'fault' => 'fault',
            'configDrive' => 'config_drive',
            'progress' => 'progress',
            'description' => 'description',
            'hostStatus' => 'host_status',
            'osExtSrvAttRhostname' => 'OS-EXT-SRV-ATTR:hostname',
            'osExtSrvAttRreservationId' => 'OS-EXT-SRV-ATTR:reservation_id',
            'osExtSrvAttRlaunchIndex' => 'OS-EXT-SRV-ATTR:launch_index',
            'osExtSrvAttRkernelId' => 'OS-EXT-SRV-ATTR:kernel_id',
            'osExtSrvAttRramdiskId' => 'OS-EXT-SRV-ATTR:ramdisk_id',
            'osExtSrvAttRrootDeviceName' => 'OS-EXT-SRV-ATTR:root_device_name',
            'osExtSrvAttRuserData' => 'OS-EXT-SRV-ATTR:user_data',
            'locked' => 'locked',
            'tags' => 'tags',
            'sysTags' => 'sys_tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'osschedulerHints' => 'os:scheduler_hints'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  裸金属服务器名称
    * id  裸金属服务器唯一标识ID
    * status  裸金属服务器当前状态。ACTIVE：运行中/正在关机/删除中BUILD：创建中ERROR：故障HARD_REBOOT：强制重启中REBOOT：重启中 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器上一次更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * flavor  flavor
    * image  image
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * keyName  SSH密钥名称
    * userId  裸金属服务器所属用户ID。
    * metadata  metadata
    * hostId  裸金属服务器的主机ID
    * addresses  addresses
    * securityGroups  裸金属服务器所属安全组列表。
    * links  裸金属服务器相关信息快捷链接
    * osDcFdiskConfig  扩展属性，磁盘配置方式，取值为如下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * osExtAZavailabilityZone  扩展属性，可用分区编码。
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRhypervisorHostname  扩展属性，hypervisor主机名称，由Nova virt驱动提供
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtStStaskState  扩展属性，裸金属服务器任务状态。例如：rebooting表示重启中reboot_started表示普通重启reboot_started_hard表示强制重启powering-off表示关机中powering-on表示开机中rebuilding表示重建中scheduling表示调度中deleting表示删除中
    * osExtStSvmState  扩展属性，裸金属服务器状态。例如：RUNNING表示运行中SHUTOFF表示关机REBOOT表示重启
    * osSrvUsGlaunchedAt  扩展属性，裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-25T03:40:25.000000
    * osSrvUsGterminatedAt  扩展属性，裸金属服务器关闭时间。时间戳格式为ISO 8601，例如：2019-06-25T03:40:25.000000
    * osExtendedVolumesvolumesAttached  裸金属服务器挂载的云硬盘信息。详情请参见表 os-extended-volumes:volumes_attached字段数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * fault  fault
    * configDrive  config drive信息
    * progress  预留属性
    * description  裸金属服务器的描述信息。
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sdb”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data。取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器实例是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签
    * sysTags  裸金属服务器的系统标签
    * enterpriseProjectId  enterprise_project_id。
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'status' => 'setStatus',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'flavor' => 'setFlavor',
            'image' => 'setImage',
            'tenantId' => 'setTenantId',
            'keyName' => 'setKeyName',
            'userId' => 'setUserId',
            'metadata' => 'setMetadata',
            'hostId' => 'setHostId',
            'addresses' => 'setAddresses',
            'securityGroups' => 'setSecurityGroups',
            'links' => 'setLinks',
            'osDcFdiskConfig' => 'setOsDcFdiskConfig',
            'osExtAZavailabilityZone' => 'setOsExtAZavailabilityZone',
            'osExtSrvAttRhost' => 'setOsExtSrvAttRhost',
            'osExtSrvAttRhypervisorHostname' => 'setOsExtSrvAttRhypervisorHostname',
            'osExtSrvAttRinstanceName' => 'setOsExtSrvAttRinstanceName',
            'osExtStSpowerState' => 'setOsExtStSpowerState',
            'osExtStStaskState' => 'setOsExtStStaskState',
            'osExtStSvmState' => 'setOsExtStSvmState',
            'osSrvUsGlaunchedAt' => 'setOsSrvUsGlaunchedAt',
            'osSrvUsGterminatedAt' => 'setOsSrvUsGterminatedAt',
            'osExtendedVolumesvolumesAttached' => 'setOsExtendedVolumesvolumesAttached',
            'accessIPv4' => 'setAccessIPv4',
            'accessIPv6' => 'setAccessIPv6',
            'fault' => 'setFault',
            'configDrive' => 'setConfigDrive',
            'progress' => 'setProgress',
            'description' => 'setDescription',
            'hostStatus' => 'setHostStatus',
            'osExtSrvAttRhostname' => 'setOsExtSrvAttRhostname',
            'osExtSrvAttRreservationId' => 'setOsExtSrvAttRreservationId',
            'osExtSrvAttRlaunchIndex' => 'setOsExtSrvAttRlaunchIndex',
            'osExtSrvAttRkernelId' => 'setOsExtSrvAttRkernelId',
            'osExtSrvAttRramdiskId' => 'setOsExtSrvAttRramdiskId',
            'osExtSrvAttRrootDeviceName' => 'setOsExtSrvAttRrootDeviceName',
            'osExtSrvAttRuserData' => 'setOsExtSrvAttRuserData',
            'locked' => 'setLocked',
            'tags' => 'setTags',
            'sysTags' => 'setSysTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'osschedulerHints' => 'setOsschedulerHints'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  裸金属服务器名称
    * id  裸金属服务器唯一标识ID
    * status  裸金属服务器当前状态。ACTIVE：运行中/正在关机/删除中BUILD：创建中ERROR：故障HARD_REBOOT：强制重启中REBOOT：重启中 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器上一次更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * flavor  flavor
    * image  image
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * keyName  SSH密钥名称
    * userId  裸金属服务器所属用户ID。
    * metadata  metadata
    * hostId  裸金属服务器的主机ID
    * addresses  addresses
    * securityGroups  裸金属服务器所属安全组列表。
    * links  裸金属服务器相关信息快捷链接
    * osDcFdiskConfig  扩展属性，磁盘配置方式，取值为如下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * osExtAZavailabilityZone  扩展属性，可用分区编码。
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRhypervisorHostname  扩展属性，hypervisor主机名称，由Nova virt驱动提供
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtStStaskState  扩展属性，裸金属服务器任务状态。例如：rebooting表示重启中reboot_started表示普通重启reboot_started_hard表示强制重启powering-off表示关机中powering-on表示开机中rebuilding表示重建中scheduling表示调度中deleting表示删除中
    * osExtStSvmState  扩展属性，裸金属服务器状态。例如：RUNNING表示运行中SHUTOFF表示关机REBOOT表示重启
    * osSrvUsGlaunchedAt  扩展属性，裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-25T03:40:25.000000
    * osSrvUsGterminatedAt  扩展属性，裸金属服务器关闭时间。时间戳格式为ISO 8601，例如：2019-06-25T03:40:25.000000
    * osExtendedVolumesvolumesAttached  裸金属服务器挂载的云硬盘信息。详情请参见表 os-extended-volumes:volumes_attached字段数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * fault  fault
    * configDrive  config drive信息
    * progress  预留属性
    * description  裸金属服务器的描述信息。
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sdb”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data。取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器实例是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签
    * sysTags  裸金属服务器的系统标签
    * enterpriseProjectId  enterprise_project_id。
    * osschedulerHints  osschedulerHints
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'status' => 'getStatus',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'flavor' => 'getFlavor',
            'image' => 'getImage',
            'tenantId' => 'getTenantId',
            'keyName' => 'getKeyName',
            'userId' => 'getUserId',
            'metadata' => 'getMetadata',
            'hostId' => 'getHostId',
            'addresses' => 'getAddresses',
            'securityGroups' => 'getSecurityGroups',
            'links' => 'getLinks',
            'osDcFdiskConfig' => 'getOsDcFdiskConfig',
            'osExtAZavailabilityZone' => 'getOsExtAZavailabilityZone',
            'osExtSrvAttRhost' => 'getOsExtSrvAttRhost',
            'osExtSrvAttRhypervisorHostname' => 'getOsExtSrvAttRhypervisorHostname',
            'osExtSrvAttRinstanceName' => 'getOsExtSrvAttRinstanceName',
            'osExtStSpowerState' => 'getOsExtStSpowerState',
            'osExtStStaskState' => 'getOsExtStStaskState',
            'osExtStSvmState' => 'getOsExtStSvmState',
            'osSrvUsGlaunchedAt' => 'getOsSrvUsGlaunchedAt',
            'osSrvUsGterminatedAt' => 'getOsSrvUsGterminatedAt',
            'osExtendedVolumesvolumesAttached' => 'getOsExtendedVolumesvolumesAttached',
            'accessIPv4' => 'getAccessIPv4',
            'accessIPv6' => 'getAccessIPv6',
            'fault' => 'getFault',
            'configDrive' => 'getConfigDrive',
            'progress' => 'getProgress',
            'description' => 'getDescription',
            'hostStatus' => 'getHostStatus',
            'osExtSrvAttRhostname' => 'getOsExtSrvAttRhostname',
            'osExtSrvAttRreservationId' => 'getOsExtSrvAttRreservationId',
            'osExtSrvAttRlaunchIndex' => 'getOsExtSrvAttRlaunchIndex',
            'osExtSrvAttRkernelId' => 'getOsExtSrvAttRkernelId',
            'osExtSrvAttRramdiskId' => 'getOsExtSrvAttRramdiskId',
            'osExtSrvAttRrootDeviceName' => 'getOsExtSrvAttRrootDeviceName',
            'osExtSrvAttRuserData' => 'getOsExtSrvAttRuserData',
            'locked' => 'getLocked',
            'tags' => 'getTags',
            'sysTags' => 'getSysTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'osschedulerHints' => 'getOsschedulerHints'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_BUILD = 'BUILD';
    const STATUS_DELETED = 'DELETED';
    const STATUS_ERROR = 'ERROR';
    const STATUS_HARD_REBOOT = 'HARD_REBOOT';
    const STATUS_REBOOT = 'REBOOT';
    const STATUS_REBUILD = 'REBUILD';
    const STATUS_SHUTOFF = 'SHUTOFF';
    const OS_DC_FDISK_CONFIG_MANUAL = 'MANUAL';
    const OS_DC_FDISK_CONFIG_AUTO = 'AUTO';
    const OS_EXT_ST_STASK_STATE_REBOOTING = 'rebooting';
    const OS_EXT_ST_STASK_STATE_REBOOT_STARTED = 'reboot_started';
    const OS_EXT_ST_STASK_STATE_REBOOT_STARTED_HARD = 'reboot_started_hard';
    const OS_EXT_ST_STASK_STATE_POWERING_OFF = 'powering-off';
    const OS_EXT_ST_STASK_STATE_POWERING_ON = 'powering-on';
    const OS_EXT_ST_STASK_STATE_REBUILDING = 'rebuilding';
    const OS_EXT_ST_STASK_STATE_SCHEDULING = 'scheduling';
    const OS_EXT_ST_STASK_STATE_DELETING = 'deleting';
    const OS_EXT_ST_SVM_STATE_RUNNING = 'RUNNING';
    const OS_EXT_ST_SVM_STATE_SHUTOFF = 'SHUTOFF';
    const OS_EXT_ST_SVM_STATE_REBOOT = 'REBOOT';
    const HOST_STATUS_UP = 'UP';
    const HOST_STATUS_UNKNOWN = 'UNKNOWN';
    const HOST_STATUS_DOWN = 'DOWN';
    const HOST_STATUS_MAINTENANCE = 'MAINTENANCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_BUILD,
            self::STATUS_DELETED,
            self::STATUS_ERROR,
            self::STATUS_HARD_REBOOT,
            self::STATUS_REBOOT,
            self::STATUS_REBUILD,
            self::STATUS_SHUTOFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsDcFdiskConfigAllowableValues()
    {
        return [
            self::OS_DC_FDISK_CONFIG_MANUAL,
            self::OS_DC_FDISK_CONFIG_AUTO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsExtStStaskStateAllowableValues()
    {
        return [
            self::OS_EXT_ST_STASK_STATE_REBOOTING,
            self::OS_EXT_ST_STASK_STATE_REBOOT_STARTED,
            self::OS_EXT_ST_STASK_STATE_REBOOT_STARTED_HARD,
            self::OS_EXT_ST_STASK_STATE_POWERING_OFF,
            self::OS_EXT_ST_STASK_STATE_POWERING_ON,
            self::OS_EXT_ST_STASK_STATE_REBUILDING,
            self::OS_EXT_ST_STASK_STATE_SCHEDULING,
            self::OS_EXT_ST_STASK_STATE_DELETING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsExtStSvmStateAllowableValues()
    {
        return [
            self::OS_EXT_ST_SVM_STATE_RUNNING,
            self::OS_EXT_ST_SVM_STATE_SHUTOFF,
            self::OS_EXT_ST_SVM_STATE_REBOOT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostStatusAllowableValues()
    {
        return [
            self::HOST_STATUS_UP,
            self::HOST_STATUS_UNKNOWN,
            self::HOST_STATUS_DOWN,
            self::HOST_STATUS_MAINTENANCE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['osDcFdiskConfig'] = isset($data['osDcFdiskConfig']) ? $data['osDcFdiskConfig'] : null;
        $this->container['osExtAZavailabilityZone'] = isset($data['osExtAZavailabilityZone']) ? $data['osExtAZavailabilityZone'] : null;
        $this->container['osExtSrvAttRhost'] = isset($data['osExtSrvAttRhost']) ? $data['osExtSrvAttRhost'] : null;
        $this->container['osExtSrvAttRhypervisorHostname'] = isset($data['osExtSrvAttRhypervisorHostname']) ? $data['osExtSrvAttRhypervisorHostname'] : null;
        $this->container['osExtSrvAttRinstanceName'] = isset($data['osExtSrvAttRinstanceName']) ? $data['osExtSrvAttRinstanceName'] : null;
        $this->container['osExtStSpowerState'] = isset($data['osExtStSpowerState']) ? $data['osExtStSpowerState'] : null;
        $this->container['osExtStStaskState'] = isset($data['osExtStStaskState']) ? $data['osExtStStaskState'] : null;
        $this->container['osExtStSvmState'] = isset($data['osExtStSvmState']) ? $data['osExtStSvmState'] : null;
        $this->container['osSrvUsGlaunchedAt'] = isset($data['osSrvUsGlaunchedAt']) ? $data['osSrvUsGlaunchedAt'] : null;
        $this->container['osSrvUsGterminatedAt'] = isset($data['osSrvUsGterminatedAt']) ? $data['osSrvUsGterminatedAt'] : null;
        $this->container['osExtendedVolumesvolumesAttached'] = isset($data['osExtendedVolumesvolumesAttached']) ? $data['osExtendedVolumesvolumesAttached'] : null;
        $this->container['accessIPv4'] = isset($data['accessIPv4']) ? $data['accessIPv4'] : null;
        $this->container['accessIPv6'] = isset($data['accessIPv6']) ? $data['accessIPv6'] : null;
        $this->container['fault'] = isset($data['fault']) ? $data['fault'] : null;
        $this->container['configDrive'] = isset($data['configDrive']) ? $data['configDrive'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['osExtSrvAttRhostname'] = isset($data['osExtSrvAttRhostname']) ? $data['osExtSrvAttRhostname'] : null;
        $this->container['osExtSrvAttRreservationId'] = isset($data['osExtSrvAttRreservationId']) ? $data['osExtSrvAttRreservationId'] : null;
        $this->container['osExtSrvAttRlaunchIndex'] = isset($data['osExtSrvAttRlaunchIndex']) ? $data['osExtSrvAttRlaunchIndex'] : null;
        $this->container['osExtSrvAttRkernelId'] = isset($data['osExtSrvAttRkernelId']) ? $data['osExtSrvAttRkernelId'] : null;
        $this->container['osExtSrvAttRramdiskId'] = isset($data['osExtSrvAttRramdiskId']) ? $data['osExtSrvAttRramdiskId'] : null;
        $this->container['osExtSrvAttRrootDeviceName'] = isset($data['osExtSrvAttRrootDeviceName']) ? $data['osExtSrvAttRrootDeviceName'] : null;
        $this->container['osExtSrvAttRuserData'] = isset($data['osExtSrvAttRuserData']) ? $data['osExtSrvAttRuserData'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['osschedulerHints'] = isset($data['osschedulerHints']) ? $data['osschedulerHints'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && !preg_match("/^[A-Z0-9-._~]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Z0-9-._~]+$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['keyName']) && !preg_match("/^[A-Z0-9-._~]+$/", $this->container['keyName'])) {
                $invalidProperties[] = "invalid value for 'keyName', must be conform to the pattern /^[A-Z0-9-._~]+$/.";
            }
            $allowedValues = $this->getOsDcFdiskConfigAllowableValues();
                if (!is_null($this->container['osDcFdiskConfig']) && !in_array($this->container['osDcFdiskConfig'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osDcFdiskConfig', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOsExtStStaskStateAllowableValues();
                if (!is_null($this->container['osExtStStaskState']) && !in_array($this->container['osExtStStaskState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osExtStStaskState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOsExtStSvmStateAllowableValues();
                if (!is_null($this->container['osExtStSvmState']) && !in_array($this->container['osExtStSvmState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osExtStSvmState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getHostStatusAllowableValues();
                if (!is_null($this->container['hostStatus']) && !in_array($this->container['hostStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostStatus', must be one of '%s'",
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
    * Gets name
    *  裸金属服务器名称
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
    * @param string|null $name 裸金属服务器名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  裸金属服务器唯一标识ID
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
    * @param string|null $id 裸金属服务器唯一标识ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  裸金属服务器当前状态。ACTIVE：运行中/正在关机/删除中BUILD：创建中ERROR：故障HARD_REBOOT：强制重启中REBOOT：重启中 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
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
    * @param string|null $status 裸金属服务器当前状态。ACTIVE：运行中/正在关机/删除中BUILD：创建中ERROR：故障HARD_REBOOT：强制重启中REBOOT：重启中 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets created
    *  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    *
    * @return \DateTime|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param \DateTime|null $created 裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  裸金属服务器上一次更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    *
    * @return \DateTime|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param \DateTime|null $updated 裸金属服务器上一次更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\FlavorInfo|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\FlavorInfo|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets image
    *  image
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\Image|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\Image|null $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets tenantId
    *  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets keyName
    *  SSH密钥名称
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName SSH密钥名称
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets userId
    *  裸金属服务器所属用户ID。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 裸金属服务器所属用户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\MetadataInfos|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\MetadataInfos|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets hostId
    *  裸金属服务器的主机ID
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 裸金属服务器的主机ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets addresses
    *  addresses
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\Addresses|null
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\Addresses|null $addresses addresses
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets securityGroups
    *  裸金属服务器所属安全组列表。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\SecurityGroups[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\SecurityGroups[]|null $securityGroups 裸金属服务器所属安全组列表。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets links
    *  裸金属服务器相关信息快捷链接
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\Links[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\Links[]|null $links 裸金属服务器相关信息快捷链接
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets osDcFdiskConfig
    *  扩展属性，磁盘配置方式，取值为如下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    *
    * @return string|null
    */
    public function getOsDcFdiskConfig()
    {
        return $this->container['osDcFdiskConfig'];
    }

    /**
    * Sets osDcFdiskConfig
    *
    * @param string|null $osDcFdiskConfig 扩展属性，磁盘配置方式，取值为如下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    *
    * @return $this
    */
    public function setOsDcFdiskConfig($osDcFdiskConfig)
    {
        $this->container['osDcFdiskConfig'] = $osDcFdiskConfig;
        return $this;
    }

    /**
    * Gets osExtAZavailabilityZone
    *  扩展属性，可用分区编码。
    *
    * @return string|null
    */
    public function getOsExtAZavailabilityZone()
    {
        return $this->container['osExtAZavailabilityZone'];
    }

    /**
    * Sets osExtAZavailabilityZone
    *
    * @param string|null $osExtAZavailabilityZone 扩展属性，可用分区编码。
    *
    * @return $this
    */
    public function setOsExtAZavailabilityZone($osExtAZavailabilityZone)
    {
        $this->container['osExtAZavailabilityZone'] = $osExtAZavailabilityZone;
        return $this;
    }

    /**
    * Gets osExtSrvAttRhost
    *  扩展属性，裸金属服务器宿主名称
    *
    * @return string|null
    */
    public function getOsExtSrvAttRhost()
    {
        return $this->container['osExtSrvAttRhost'];
    }

    /**
    * Sets osExtSrvAttRhost
    *
    * @param string|null $osExtSrvAttRhost 扩展属性，裸金属服务器宿主名称
    *
    * @return $this
    */
    public function setOsExtSrvAttRhost($osExtSrvAttRhost)
    {
        $this->container['osExtSrvAttRhost'] = $osExtSrvAttRhost;
        return $this;
    }

    /**
    * Gets osExtSrvAttRhypervisorHostname
    *  扩展属性，hypervisor主机名称，由Nova virt驱动提供
    *
    * @return string|null
    */
    public function getOsExtSrvAttRhypervisorHostname()
    {
        return $this->container['osExtSrvAttRhypervisorHostname'];
    }

    /**
    * Sets osExtSrvAttRhypervisorHostname
    *
    * @param string|null $osExtSrvAttRhypervisorHostname 扩展属性，hypervisor主机名称，由Nova virt驱动提供
    *
    * @return $this
    */
    public function setOsExtSrvAttRhypervisorHostname($osExtSrvAttRhypervisorHostname)
    {
        $this->container['osExtSrvAttRhypervisorHostname'] = $osExtSrvAttRhypervisorHostname;
        return $this;
    }

    /**
    * Gets osExtSrvAttRinstanceName
    *  扩展属性，裸金属服务器实例ID
    *
    * @return string|null
    */
    public function getOsExtSrvAttRinstanceName()
    {
        return $this->container['osExtSrvAttRinstanceName'];
    }

    /**
    * Sets osExtSrvAttRinstanceName
    *
    * @param string|null $osExtSrvAttRinstanceName 扩展属性，裸金属服务器实例ID
    *
    * @return $this
    */
    public function setOsExtSrvAttRinstanceName($osExtSrvAttRinstanceName)
    {
        $this->container['osExtSrvAttRinstanceName'] = $osExtSrvAttRinstanceName;
        return $this;
    }

    /**
    * Gets osExtStSpowerState
    *  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    *
    * @return int|null
    */
    public function getOsExtStSpowerState()
    {
        return $this->container['osExtStSpowerState'];
    }

    /**
    * Sets osExtStSpowerState
    *
    * @param int|null $osExtStSpowerState 扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    *
    * @return $this
    */
    public function setOsExtStSpowerState($osExtStSpowerState)
    {
        $this->container['osExtStSpowerState'] = $osExtStSpowerState;
        return $this;
    }

    /**
    * Gets osExtStStaskState
    *  扩展属性，裸金属服务器任务状态。例如：rebooting表示重启中reboot_started表示普通重启reboot_started_hard表示强制重启powering-off表示关机中powering-on表示开机中rebuilding表示重建中scheduling表示调度中deleting表示删除中
    *
    * @return string|null
    */
    public function getOsExtStStaskState()
    {
        return $this->container['osExtStStaskState'];
    }

    /**
    * Sets osExtStStaskState
    *
    * @param string|null $osExtStStaskState 扩展属性，裸金属服务器任务状态。例如：rebooting表示重启中reboot_started表示普通重启reboot_started_hard表示强制重启powering-off表示关机中powering-on表示开机中rebuilding表示重建中scheduling表示调度中deleting表示删除中
    *
    * @return $this
    */
    public function setOsExtStStaskState($osExtStStaskState)
    {
        $this->container['osExtStStaskState'] = $osExtStStaskState;
        return $this;
    }

    /**
    * Gets osExtStSvmState
    *  扩展属性，裸金属服务器状态。例如：RUNNING表示运行中SHUTOFF表示关机REBOOT表示重启
    *
    * @return string|null
    */
    public function getOsExtStSvmState()
    {
        return $this->container['osExtStSvmState'];
    }

    /**
    * Sets osExtStSvmState
    *
    * @param string|null $osExtStSvmState 扩展属性，裸金属服务器状态。例如：RUNNING表示运行中SHUTOFF表示关机REBOOT表示重启
    *
    * @return $this
    */
    public function setOsExtStSvmState($osExtStSvmState)
    {
        $this->container['osExtStSvmState'] = $osExtStSvmState;
        return $this;
    }

    /**
    * Gets osSrvUsGlaunchedAt
    *  扩展属性，裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-25T03:40:25.000000
    *
    * @return \DateTime|null
    */
    public function getOsSrvUsGlaunchedAt()
    {
        return $this->container['osSrvUsGlaunchedAt'];
    }

    /**
    * Sets osSrvUsGlaunchedAt
    *
    * @param \DateTime|null $osSrvUsGlaunchedAt 扩展属性，裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-25T03:40:25.000000
    *
    * @return $this
    */
    public function setOsSrvUsGlaunchedAt($osSrvUsGlaunchedAt)
    {
        $this->container['osSrvUsGlaunchedAt'] = $osSrvUsGlaunchedAt;
        return $this;
    }

    /**
    * Gets osSrvUsGterminatedAt
    *  扩展属性，裸金属服务器关闭时间。时间戳格式为ISO 8601，例如：2019-06-25T03:40:25.000000
    *
    * @return \DateTime|null
    */
    public function getOsSrvUsGterminatedAt()
    {
        return $this->container['osSrvUsGterminatedAt'];
    }

    /**
    * Sets osSrvUsGterminatedAt
    *
    * @param \DateTime|null $osSrvUsGterminatedAt 扩展属性，裸金属服务器关闭时间。时间戳格式为ISO 8601，例如：2019-06-25T03:40:25.000000
    *
    * @return $this
    */
    public function setOsSrvUsGterminatedAt($osSrvUsGterminatedAt)
    {
        $this->container['osSrvUsGterminatedAt'] = $osSrvUsGterminatedAt;
        return $this;
    }

    /**
    * Gets osExtendedVolumesvolumesAttached
    *  裸金属服务器挂载的云硬盘信息。详情请参见表 os-extended-volumes:volumes_attached字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\OsExtendedVolumes[]|null
    */
    public function getOsExtendedVolumesvolumesAttached()
    {
        return $this->container['osExtendedVolumesvolumesAttached'];
    }

    /**
    * Sets osExtendedVolumesvolumesAttached
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\OsExtendedVolumes[]|null $osExtendedVolumesvolumesAttached 裸金属服务器挂载的云硬盘信息。详情请参见表 os-extended-volumes:volumes_attached字段数据结构说明。
    *
    * @return $this
    */
    public function setOsExtendedVolumesvolumesAttached($osExtendedVolumesvolumesAttached)
    {
        $this->container['osExtendedVolumesvolumesAttached'] = $osExtendedVolumesvolumesAttached;
        return $this;
    }

    /**
    * Gets accessIPv4
    *  预留属性
    *
    * @return string|null
    */
    public function getAccessIPv4()
    {
        return $this->container['accessIPv4'];
    }

    /**
    * Sets accessIPv4
    *
    * @param string|null $accessIPv4 预留属性
    *
    * @return $this
    */
    public function setAccessIPv4($accessIPv4)
    {
        $this->container['accessIPv4'] = $accessIPv4;
        return $this;
    }

    /**
    * Gets accessIPv6
    *  预留属性
    *
    * @return string|null
    */
    public function getAccessIPv6()
    {
        return $this->container['accessIPv6'];
    }

    /**
    * Sets accessIPv6
    *
    * @param string|null $accessIPv6 预留属性
    *
    * @return $this
    */
    public function setAccessIPv6($accessIPv6)
    {
        $this->container['accessIPv6'] = $accessIPv6;
        return $this;
    }

    /**
    * Gets fault
    *  fault
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\Fault|null
    */
    public function getFault()
    {
        return $this->container['fault'];
    }

    /**
    * Sets fault
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\Fault|null $fault fault
    *
    * @return $this
    */
    public function setFault($fault)
    {
        $this->container['fault'] = $fault;
        return $this;
    }

    /**
    * Gets configDrive
    *  config drive信息
    *
    * @return string|null
    */
    public function getConfigDrive()
    {
        return $this->container['configDrive'];
    }

    /**
    * Sets configDrive
    *
    * @param string|null $configDrive config drive信息
    *
    * @return $this
    */
    public function setConfigDrive($configDrive)
    {
        $this->container['configDrive'] = $configDrive;
        return $this;
    }

    /**
    * Gets progress
    *  预留属性
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 预留属性
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets description
    *  裸金属服务器的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 裸金属服务器的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets hostStatus
    *  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus 裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets osExtSrvAttRhostname
    *  裸金属服务器的主机名
    *
    * @return string|null
    */
    public function getOsExtSrvAttRhostname()
    {
        return $this->container['osExtSrvAttRhostname'];
    }

    /**
    * Sets osExtSrvAttRhostname
    *
    * @param string|null $osExtSrvAttRhostname 裸金属服务器的主机名
    *
    * @return $this
    */
    public function setOsExtSrvAttRhostname($osExtSrvAttRhostname)
    {
        $this->container['osExtSrvAttRhostname'] = $osExtSrvAttRhostname;
        return $this;
    }

    /**
    * Gets osExtSrvAttRreservationId
    *  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    *
    * @return string|null
    */
    public function getOsExtSrvAttRreservationId()
    {
        return $this->container['osExtSrvAttRreservationId'];
    }

    /**
    * Sets osExtSrvAttRreservationId
    *
    * @param string|null $osExtSrvAttRreservationId 批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    *
    * @return $this
    */
    public function setOsExtSrvAttRreservationId($osExtSrvAttRreservationId)
    {
        $this->container['osExtSrvAttRreservationId'] = $osExtSrvAttRreservationId;
        return $this;
    }

    /**
    * Gets osExtSrvAttRlaunchIndex
    *  批量创建场景，裸金属服务器的启动顺序
    *
    * @return int|null
    */
    public function getOsExtSrvAttRlaunchIndex()
    {
        return $this->container['osExtSrvAttRlaunchIndex'];
    }

    /**
    * Sets osExtSrvAttRlaunchIndex
    *
    * @param int|null $osExtSrvAttRlaunchIndex 批量创建场景，裸金属服务器的启动顺序
    *
    * @return $this
    */
    public function setOsExtSrvAttRlaunchIndex($osExtSrvAttRlaunchIndex)
    {
        $this->container['osExtSrvAttRlaunchIndex'] = $osExtSrvAttRlaunchIndex;
        return $this;
    }

    /**
    * Gets osExtSrvAttRkernelId
    *  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    *
    * @return string|null
    */
    public function getOsExtSrvAttRkernelId()
    {
        return $this->container['osExtSrvAttRkernelId'];
    }

    /**
    * Sets osExtSrvAttRkernelId
    *
    * @param string|null $osExtSrvAttRkernelId 若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    *
    * @return $this
    */
    public function setOsExtSrvAttRkernelId($osExtSrvAttRkernelId)
    {
        $this->container['osExtSrvAttRkernelId'] = $osExtSrvAttRkernelId;
        return $this;
    }

    /**
    * Gets osExtSrvAttRramdiskId
    *  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    *
    * @return string|null
    */
    public function getOsExtSrvAttRramdiskId()
    {
        return $this->container['osExtSrvAttRramdiskId'];
    }

    /**
    * Sets osExtSrvAttRramdiskId
    *
    * @param string|null $osExtSrvAttRramdiskId 若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    *
    * @return $this
    */
    public function setOsExtSrvAttRramdiskId($osExtSrvAttRramdiskId)
    {
        $this->container['osExtSrvAttRramdiskId'] = $osExtSrvAttRramdiskId;
        return $this;
    }

    /**
    * Gets osExtSrvAttRrootDeviceName
    *  裸金属服务器系统盘的设备名称，例如“/dev/sdb”。
    *
    * @return string|null
    */
    public function getOsExtSrvAttRrootDeviceName()
    {
        return $this->container['osExtSrvAttRrootDeviceName'];
    }

    /**
    * Sets osExtSrvAttRrootDeviceName
    *
    * @param string|null $osExtSrvAttRrootDeviceName 裸金属服务器系统盘的设备名称，例如“/dev/sdb”。
    *
    * @return $this
    */
    public function setOsExtSrvAttRrootDeviceName($osExtSrvAttRrootDeviceName)
    {
        $this->container['osExtSrvAttRrootDeviceName'] = $osExtSrvAttRrootDeviceName;
        return $this;
    }

    /**
    * Gets osExtSrvAttRuserData
    *  创建裸金属服务器时指定的user_data。取值为base64编码后的结果或空字符串。
    *
    * @return string|null
    */
    public function getOsExtSrvAttRuserData()
    {
        return $this->container['osExtSrvAttRuserData'];
    }

    /**
    * Sets osExtSrvAttRuserData
    *
    * @param string|null $osExtSrvAttRuserData 创建裸金属服务器时指定的user_data。取值为base64编码后的结果或空字符串。
    *
    * @return $this
    */
    public function setOsExtSrvAttRuserData($osExtSrvAttRuserData)
    {
        $this->container['osExtSrvAttRuserData'] = $osExtSrvAttRuserData;
        return $this;
    }

    /**
    * Gets locked
    *  裸金属服务器实例是否为锁定状态。true：锁定false：未锁定
    *
    * @return bool|null
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param bool|null $locked 裸金属服务器实例是否为锁定状态。true：锁定false：未锁定
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets tags
    *  裸金属服务器标签
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 裸金属服务器标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sysTags
    *  裸金属服务器的系统标签
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\SystemTags[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\SystemTags[]|null $sysTags 裸金属服务器的系统标签
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  enterprise_project_id。
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
    * @param string|null $enterpriseProjectId enterprise_project_id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets osschedulerHints
    *  osschedulerHints
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\ServerOsSchedulerHints|null
    */
    public function getOsschedulerHints()
    {
        return $this->container['osschedulerHints'];
    }

    /**
    * Sets osschedulerHints
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\ServerOsSchedulerHints|null $osschedulerHints osschedulerHints
    *
    * @return $this
    */
    public function setOsschedulerHints($osschedulerHints)
    {
        $this->container['osschedulerHints'] = $osschedulerHints;
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

