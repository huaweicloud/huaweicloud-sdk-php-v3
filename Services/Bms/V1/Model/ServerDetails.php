<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * hostId  裸金属服务器对应的主机ID
    * addresses  裸金属服务器的网络属性。详情请参见表3 addresses数据结构说明。
    * keyName  裸金属服务器使用的密钥对名称
    * image  image
    * flavor  flavor
    * securityGroups  裸金属服务器所属安全组。详情请参见表7 security_groups数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * progress  预留属性
    * configDrive  是否为裸金属服务器配置config drive分区。取值为：True或空字符串
    * metadata  metadata
    * osExtStStaskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * osExtStSvmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtSrvAttRhypervisorHostname  扩展属性，裸金属服务器所在虚拟化主机名。
    * osExtAZavailabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * osDcFdiskConfig  扩展属性，磁盘配置，取值为以下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * fault  fault
    * osSrvUsGlaunchedAt  裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-22T03:23:59.000000
    * osSrvUsGterminatedAt  裸金属服务器删除时间。时间戳格式为ISO 8601，例如：2019-05-22T04:23:59.000000
    * osExtendedVolumesvolumesAttached  挂载到裸金属服务器上的磁盘。详情请参见表9 os-extended-volumes:volumes_attached 数据结构说明。
    * description  裸金属服务器的描述信息
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sda”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data，取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签。
    * osschedulerHints  osschedulerHints
    * enterpriseProjectId  裸金属服务器所属的企业项目ID
    * sysTags  裸金属服务器系统标签。详情请参见表12 sys_tags数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'userId' => 'string',
            'name' => 'string',
            'created' => '\DateTime',
            'updated' => '\DateTime',
            'tenantId' => 'string',
            'hostId' => 'string',
            'addresses' => 'map[string,\HuaweiCloud\SDK\Bms\V1\Model\AddressInfo[]]',
            'keyName' => 'string',
            'image' => '\HuaweiCloud\SDK\Bms\V1\Model\ImageInfo',
            'flavor' => '\HuaweiCloud\SDK\Bms\V1\Model\FlavorInfos',
            'securityGroups' => '\HuaweiCloud\SDK\Bms\V1\Model\SecurityGroupsList[]',
            'accessIPv4' => 'string',
            'accessIPv6' => 'string',
            'status' => 'string',
            'progress' => 'int',
            'configDrive' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Bms\V1\Model\MetadataList',
            'osExtStStaskState' => 'string',
            'osExtStSvmState' => 'string',
            'osExtSrvAttRhost' => 'string',
            'osExtSrvAttRinstanceName' => 'string',
            'osExtStSpowerState' => 'int',
            'osExtSrvAttRhypervisorHostname' => 'string',
            'osExtAZavailabilityZone' => 'string',
            'osDcFdiskConfig' => 'string',
            'fault' => '\HuaweiCloud\SDK\Bms\V1\Model\Fault',
            'osSrvUsGlaunchedAt' => '\DateTime',
            'osSrvUsGterminatedAt' => '\DateTime',
            'osExtendedVolumesvolumesAttached' => '\HuaweiCloud\SDK\Bms\V1\Model\OsExtendedVolumesInfo[]',
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
            'osschedulerHints' => '\HuaweiCloud\SDK\Bms\V1\Model\SchedulerHints',
            'enterpriseProjectId' => 'string',
            'sysTags' => '\HuaweiCloud\SDK\Bms\V1\Model\SystemTags[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * hostId  裸金属服务器对应的主机ID
    * addresses  裸金属服务器的网络属性。详情请参见表3 addresses数据结构说明。
    * keyName  裸金属服务器使用的密钥对名称
    * image  image
    * flavor  flavor
    * securityGroups  裸金属服务器所属安全组。详情请参见表7 security_groups数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * progress  预留属性
    * configDrive  是否为裸金属服务器配置config drive分区。取值为：True或空字符串
    * metadata  metadata
    * osExtStStaskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * osExtStSvmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtSrvAttRhypervisorHostname  扩展属性，裸金属服务器所在虚拟化主机名。
    * osExtAZavailabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * osDcFdiskConfig  扩展属性，磁盘配置，取值为以下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * fault  fault
    * osSrvUsGlaunchedAt  裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-22T03:23:59.000000
    * osSrvUsGterminatedAt  裸金属服务器删除时间。时间戳格式为ISO 8601，例如：2019-05-22T04:23:59.000000
    * osExtendedVolumesvolumesAttached  挂载到裸金属服务器上的磁盘。详情请参见表9 os-extended-volumes:volumes_attached 数据结构说明。
    * description  裸金属服务器的描述信息
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sda”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data，取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签。
    * osschedulerHints  osschedulerHints
    * enterpriseProjectId  裸金属服务器所属的企业项目ID
    * sysTags  裸金属服务器系统标签。详情请参见表12 sys_tags数据结构说明。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'userId' => null,
        'name' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'tenantId' => null,
        'hostId' => null,
        'addresses' => null,
        'keyName' => null,
        'image' => null,
        'flavor' => null,
        'securityGroups' => null,
        'accessIPv4' => 'ipv4',
        'accessIPv6' => 'ipv6',
        'status' => null,
        'progress' => null,
        'configDrive' => null,
        'metadata' => null,
        'osExtStStaskState' => null,
        'osExtStSvmState' => null,
        'osExtSrvAttRhost' => null,
        'osExtSrvAttRinstanceName' => null,
        'osExtStSpowerState' => null,
        'osExtSrvAttRhypervisorHostname' => null,
        'osExtAZavailabilityZone' => null,
        'osDcFdiskConfig' => null,
        'fault' => null,
        'osSrvUsGlaunchedAt' => 'date-time',
        'osSrvUsGterminatedAt' => 'date-time',
        'osExtendedVolumesvolumesAttached' => null,
        'description' => null,
        'hostStatus' => null,
        'osExtSrvAttRhostname' => null,
        'osExtSrvAttRreservationId' => null,
        'osExtSrvAttRlaunchIndex' => null,
        'osExtSrvAttRkernelId' => 'uuid',
        'osExtSrvAttRramdiskId' => 'uuid',
        'osExtSrvAttRrootDeviceName' => null,
        'osExtSrvAttRuserData' => null,
        'locked' => null,
        'tags' => null,
        'osschedulerHints' => null,
        'enterpriseProjectId' => null,
        'sysTags' => null
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
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * hostId  裸金属服务器对应的主机ID
    * addresses  裸金属服务器的网络属性。详情请参见表3 addresses数据结构说明。
    * keyName  裸金属服务器使用的密钥对名称
    * image  image
    * flavor  flavor
    * securityGroups  裸金属服务器所属安全组。详情请参见表7 security_groups数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * progress  预留属性
    * configDrive  是否为裸金属服务器配置config drive分区。取值为：True或空字符串
    * metadata  metadata
    * osExtStStaskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * osExtStSvmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtSrvAttRhypervisorHostname  扩展属性，裸金属服务器所在虚拟化主机名。
    * osExtAZavailabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * osDcFdiskConfig  扩展属性，磁盘配置，取值为以下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * fault  fault
    * osSrvUsGlaunchedAt  裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-22T03:23:59.000000
    * osSrvUsGterminatedAt  裸金属服务器删除时间。时间戳格式为ISO 8601，例如：2019-05-22T04:23:59.000000
    * osExtendedVolumesvolumesAttached  挂载到裸金属服务器上的磁盘。详情请参见表9 os-extended-volumes:volumes_attached 数据结构说明。
    * description  裸金属服务器的描述信息
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sda”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data，取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签。
    * osschedulerHints  osschedulerHints
    * enterpriseProjectId  裸金属服务器所属的企业项目ID
    * sysTags  裸金属服务器系统标签。详情请参见表12 sys_tags数据结构说明。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userId' => 'user_id',
            'name' => 'name',
            'created' => 'created',
            'updated' => 'updated',
            'tenantId' => 'tenant_id',
            'hostId' => 'hostId',
            'addresses' => 'addresses',
            'keyName' => 'key_name',
            'image' => 'image',
            'flavor' => 'flavor',
            'securityGroups' => 'security_groups',
            'accessIPv4' => 'accessIPv4',
            'accessIPv6' => 'accessIPv6',
            'status' => 'status',
            'progress' => 'progress',
            'configDrive' => 'config_drive',
            'metadata' => 'metadata',
            'osExtStStaskState' => 'OS-EXT-STS:task_state',
            'osExtStSvmState' => 'OS-EXT-STS:vm_state',
            'osExtSrvAttRhost' => 'OS-EXT-SRV-ATTR:host',
            'osExtSrvAttRinstanceName' => 'OS-EXT-SRV-ATTR:instance_name',
            'osExtStSpowerState' => 'OS-EXT-STS:power_state',
            'osExtSrvAttRhypervisorHostname' => 'OS-EXT-SRV-ATTR:hypervisor_hostname',
            'osExtAZavailabilityZone' => 'OS-EXT-AZ:availability_zone',
            'osDcFdiskConfig' => 'OS-DCF:diskConfig',
            'fault' => 'fault',
            'osSrvUsGlaunchedAt' => 'OS-SRV-USG:launched_at',
            'osSrvUsGterminatedAt' => 'OS-SRV-USG:terminated_at',
            'osExtendedVolumesvolumesAttached' => 'os-extended-volumes:volumes_attached',
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
            'osschedulerHints' => 'os:scheduler_hints',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sysTags' => 'sys_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * hostId  裸金属服务器对应的主机ID
    * addresses  裸金属服务器的网络属性。详情请参见表3 addresses数据结构说明。
    * keyName  裸金属服务器使用的密钥对名称
    * image  image
    * flavor  flavor
    * securityGroups  裸金属服务器所属安全组。详情请参见表7 security_groups数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * progress  预留属性
    * configDrive  是否为裸金属服务器配置config drive分区。取值为：True或空字符串
    * metadata  metadata
    * osExtStStaskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * osExtStSvmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtSrvAttRhypervisorHostname  扩展属性，裸金属服务器所在虚拟化主机名。
    * osExtAZavailabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * osDcFdiskConfig  扩展属性，磁盘配置，取值为以下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * fault  fault
    * osSrvUsGlaunchedAt  裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-22T03:23:59.000000
    * osSrvUsGterminatedAt  裸金属服务器删除时间。时间戳格式为ISO 8601，例如：2019-05-22T04:23:59.000000
    * osExtendedVolumesvolumesAttached  挂载到裸金属服务器上的磁盘。详情请参见表9 os-extended-volumes:volumes_attached 数据结构说明。
    * description  裸金属服务器的描述信息
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sda”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data，取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签。
    * osschedulerHints  osschedulerHints
    * enterpriseProjectId  裸金属服务器所属的企业项目ID
    * sysTags  裸金属服务器系统标签。详情请参见表12 sys_tags数据结构说明。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userId' => 'setUserId',
            'name' => 'setName',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'tenantId' => 'setTenantId',
            'hostId' => 'setHostId',
            'addresses' => 'setAddresses',
            'keyName' => 'setKeyName',
            'image' => 'setImage',
            'flavor' => 'setFlavor',
            'securityGroups' => 'setSecurityGroups',
            'accessIPv4' => 'setAccessIPv4',
            'accessIPv6' => 'setAccessIPv6',
            'status' => 'setStatus',
            'progress' => 'setProgress',
            'configDrive' => 'setConfigDrive',
            'metadata' => 'setMetadata',
            'osExtStStaskState' => 'setOsExtStStaskState',
            'osExtStSvmState' => 'setOsExtStSvmState',
            'osExtSrvAttRhost' => 'setOsExtSrvAttRhost',
            'osExtSrvAttRinstanceName' => 'setOsExtSrvAttRinstanceName',
            'osExtStSpowerState' => 'setOsExtStSpowerState',
            'osExtSrvAttRhypervisorHostname' => 'setOsExtSrvAttRhypervisorHostname',
            'osExtAZavailabilityZone' => 'setOsExtAZavailabilityZone',
            'osDcFdiskConfig' => 'setOsDcFdiskConfig',
            'fault' => 'setFault',
            'osSrvUsGlaunchedAt' => 'setOsSrvUsGlaunchedAt',
            'osSrvUsGterminatedAt' => 'setOsSrvUsGterminatedAt',
            'osExtendedVolumesvolumesAttached' => 'setOsExtendedVolumesvolumesAttached',
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
            'osschedulerHints' => 'setOsschedulerHints',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sysTags' => 'setSysTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  裸金属服务器ID，格式为UUID
    * userId  创建裸金属服务器的用户ID，格式为UUID。
    * name  裸金属服务器名称
    * created  裸金属服务器创建时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T03:30:52Z
    * updated  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    * tenantId  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    * hostId  裸金属服务器对应的主机ID
    * addresses  裸金属服务器的网络属性。详情请参见表3 addresses数据结构说明。
    * keyName  裸金属服务器使用的密钥对名称
    * image  image
    * flavor  flavor
    * securityGroups  裸金属服务器所属安全组。详情请参见表7 security_groups数据结构说明。
    * accessIPv4  预留属性
    * accessIPv6  预留属性
    * status  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    * progress  预留属性
    * configDrive  是否为裸金属服务器配置config drive分区。取值为：True或空字符串
    * metadata  metadata
    * osExtStStaskState  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
    * osExtStSvmState  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    * osExtSrvAttRhost  扩展属性，裸金属服务器宿主名称
    * osExtSrvAttRinstanceName  扩展属性，裸金属服务器实例ID
    * osExtStSpowerState  扩展属性，裸金属服务器电源状态。例如：0表示“NO STATE”1表示“RUNNING”4表示“SHUTDOWN”
    * osExtSrvAttRhypervisorHostname  扩展属性，裸金属服务器所在虚拟化主机名。
    * osExtAZavailabilityZone  扩展属性，裸金属服务器所在可用分区名称。
    * osDcFdiskConfig  扩展属性，磁盘配置，取值为以下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    * fault  fault
    * osSrvUsGlaunchedAt  裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-22T03:23:59.000000
    * osSrvUsGterminatedAt  裸金属服务器删除时间。时间戳格式为ISO 8601，例如：2019-05-22T04:23:59.000000
    * osExtendedVolumesvolumesAttached  挂载到裸金属服务器上的磁盘。详情请参见表9 os-extended-volumes:volumes_attached 数据结构说明。
    * description  裸金属服务器的描述信息
    * hostStatus  裸金属服务器宿主机状态。UP：服务正常UNKNOWN：状态未知DOWN：服务异常MAINTENANCE：维护状态空字符串：裸金属服务器无主机信息
    * osExtSrvAttRhostname  裸金属服务器的主机名
    * osExtSrvAttRreservationId  批量创建场景，裸金属服务器的预留ID。当批量创建裸金属服务器时，这些服务器将拥有相同的reservation_id。您可以使用6.3.3-查询裸金属服务器详情列表API并指定reservation_id来过滤查询同一批创建的所有裸金属服务器。
    * osExtSrvAttRlaunchIndex  批量创建场景，裸金属服务器的启动顺序
    * osExtSrvAttRkernelId  若使用AMI格式的镜像，则表示kernel image的UUID；否则，留空
    * osExtSrvAttRramdiskId  若使用AMI格式镜像，则表示ramdisk image的UUID；否则，留空。
    * osExtSrvAttRrootDeviceName  裸金属服务器系统盘的设备名称，例如“/dev/sda”。
    * osExtSrvAttRuserData  创建裸金属服务器时指定的user_data，取值为base64编码后的结果或空字符串。
    * locked  裸金属服务器是否为锁定状态。true：锁定false：未锁定
    * tags  裸金属服务器标签。
    * osschedulerHints  osschedulerHints
    * enterpriseProjectId  裸金属服务器所属的企业项目ID
    * sysTags  裸金属服务器系统标签。详情请参见表12 sys_tags数据结构说明。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userId' => 'getUserId',
            'name' => 'getName',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'tenantId' => 'getTenantId',
            'hostId' => 'getHostId',
            'addresses' => 'getAddresses',
            'keyName' => 'getKeyName',
            'image' => 'getImage',
            'flavor' => 'getFlavor',
            'securityGroups' => 'getSecurityGroups',
            'accessIPv4' => 'getAccessIPv4',
            'accessIPv6' => 'getAccessIPv6',
            'status' => 'getStatus',
            'progress' => 'getProgress',
            'configDrive' => 'getConfigDrive',
            'metadata' => 'getMetadata',
            'osExtStStaskState' => 'getOsExtStStaskState',
            'osExtStSvmState' => 'getOsExtStSvmState',
            'osExtSrvAttRhost' => 'getOsExtSrvAttRhost',
            'osExtSrvAttRinstanceName' => 'getOsExtSrvAttRinstanceName',
            'osExtStSpowerState' => 'getOsExtStSpowerState',
            'osExtSrvAttRhypervisorHostname' => 'getOsExtSrvAttRhypervisorHostname',
            'osExtAZavailabilityZone' => 'getOsExtAZavailabilityZone',
            'osDcFdiskConfig' => 'getOsDcFdiskConfig',
            'fault' => 'getFault',
            'osSrvUsGlaunchedAt' => 'getOsSrvUsGlaunchedAt',
            'osSrvUsGterminatedAt' => 'getOsSrvUsGterminatedAt',
            'osExtendedVolumesvolumesAttached' => 'getOsExtendedVolumesvolumesAttached',
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
            'osschedulerHints' => 'getOsschedulerHints',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sysTags' => 'getSysTags'
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
    const STATUS_ERROR = 'ERROR';
    const STATUS_HARD_REBOOT = 'HARD_REBOOT';
    const STATUS_REBOOT = 'REBOOT';
    const STATUS_DELETED = 'DELETED';
    const STATUS_SHUTOFF = 'SHUTOFF';
    const OS_EXT_ST_STASK_STATE_REBOOTING = 'rebooting';
    const OS_EXT_ST_STASK_STATE_REBOOT_STARTED = 'reboot_started';
    const OS_EXT_ST_STASK_STATE_REBOOT_STARTED_HARD = 'reboot_started_hard';
    const OS_EXT_ST_STASK_STATE_POWERING_OFF = 'powering-off';
    const OS_EXT_ST_STASK_STATE_POWERING_ON = 'powering-on';
    const OS_EXT_ST_STASK_STATE_REBUILDING = 'rebuilding';
    const OS_EXT_ST_STASK_STATE_SCHEDULING = 'scheduling';
    const OS_EXT_ST_STASK_STATE_DELETING = 'deleting';
    const OS_EXT_ST_SVM_STATE_ACTIVE = 'active';
    const OS_EXT_ST_SVM_STATE_SHUTOFF = 'shutoff';
    const OS_EXT_ST_SVM_STATE_REBOOT = 'reboot';
    const OS_DC_FDISK_CONFIG_MANUAL = 'MANUAL';
    const OS_DC_FDISK_CONFIG_AUTO = 'AUTO';
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
            self::STATUS_ERROR,
            self::STATUS_HARD_REBOOT,
            self::STATUS_REBOOT,
            self::STATUS_DELETED,
            self::STATUS_SHUTOFF,
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
            self::OS_EXT_ST_SVM_STATE_ACTIVE,
            self::OS_EXT_ST_SVM_STATE_SHUTOFF,
            self::OS_EXT_ST_SVM_STATE_REBOOT,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['accessIPv4'] = isset($data['accessIPv4']) ? $data['accessIPv4'] : null;
        $this->container['accessIPv6'] = isset($data['accessIPv6']) ? $data['accessIPv6'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['configDrive'] = isset($data['configDrive']) ? $data['configDrive'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['osExtStStaskState'] = isset($data['osExtStStaskState']) ? $data['osExtStStaskState'] : null;
        $this->container['osExtStSvmState'] = isset($data['osExtStSvmState']) ? $data['osExtStSvmState'] : null;
        $this->container['osExtSrvAttRhost'] = isset($data['osExtSrvAttRhost']) ? $data['osExtSrvAttRhost'] : null;
        $this->container['osExtSrvAttRinstanceName'] = isset($data['osExtSrvAttRinstanceName']) ? $data['osExtSrvAttRinstanceName'] : null;
        $this->container['osExtStSpowerState'] = isset($data['osExtStSpowerState']) ? $data['osExtStSpowerState'] : null;
        $this->container['osExtSrvAttRhypervisorHostname'] = isset($data['osExtSrvAttRhypervisorHostname']) ? $data['osExtSrvAttRhypervisorHostname'] : null;
        $this->container['osExtAZavailabilityZone'] = isset($data['osExtAZavailabilityZone']) ? $data['osExtAZavailabilityZone'] : null;
        $this->container['osDcFdiskConfig'] = isset($data['osDcFdiskConfig']) ? $data['osDcFdiskConfig'] : null;
        $this->container['fault'] = isset($data['fault']) ? $data['fault'] : null;
        $this->container['osSrvUsGlaunchedAt'] = isset($data['osSrvUsGlaunchedAt']) ? $data['osSrvUsGlaunchedAt'] : null;
        $this->container['osSrvUsGterminatedAt'] = isset($data['osSrvUsGterminatedAt']) ? $data['osSrvUsGterminatedAt'] : null;
        $this->container['osExtendedVolumesvolumesAttached'] = isset($data['osExtendedVolumesvolumesAttached']) ? $data['osExtendedVolumesvolumesAttached'] : null;
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
        $this->container['osschedulerHints'] = isset($data['osschedulerHints']) ? $data['osschedulerHints'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[A-Z0-9-._~]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Z0-9-._~]+$/.";
            }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
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

            $allowedValues = $this->getOsDcFdiskConfigAllowableValues();
                if (!is_null($this->container['osDcFdiskConfig']) && !in_array($this->container['osDcFdiskConfig'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osDcFdiskConfig', must be one of '%s'",
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
    * Gets id
    *  裸金属服务器ID，格式为UUID
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
    * @param string $id 裸金属服务器ID，格式为UUID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userId
    *  创建裸金属服务器的用户ID，格式为UUID。
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
    * @param string|null $userId 创建裸金属服务器的用户ID，格式为UUID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets name
    *  裸金属服务器名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 裸金属服务器名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    *  裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
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
    * @param \DateTime|null $updated 裸金属服务器更新时间。时间戳格式为ISO 8601：YYYY-MM-DDTHH:MM:SSZ，例如：2019-05-22T04:30:52Z
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets tenantId
    *  裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 裸金属服务器所属租户ID，格式为UUID。该参数和project_id表示相同的概念。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets hostId
    *  裸金属服务器对应的主机ID
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
    * @param string|null $hostId 裸金属服务器对应的主机ID
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
    *  裸金属服务器的网络属性。详情请参见表3 addresses数据结构说明。
    *
    * @return map[string,\HuaweiCloud\SDK\Bms\V1\Model\AddressInfo[]]|null
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param map[string,\HuaweiCloud\SDK\Bms\V1\Model\AddressInfo[]]|null $addresses 裸金属服务器的网络属性。详情请参见表3 addresses数据结构说明。
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets keyName
    *  裸金属服务器使用的密钥对名称
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
    * @param string|null $keyName 裸金属服务器使用的密钥对名称
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets image
    *  image
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\ImageInfo|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\ImageInfo|null $image image
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\FlavorInfos|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\FlavorInfos|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets securityGroups
    *  裸金属服务器所属安全组。详情请参见表7 security_groups数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\SecurityGroupsList[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\SecurityGroupsList[]|null $securityGroups 裸金属服务器所属安全组。详情请参见表7 security_groups数据结构说明。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
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
    * Gets status
    *  裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 裸金属服务器当前状态信息。  取值范围：  ACTIVE：运行中/正在关机/删除中 BUILD：创建中 ERROR：故障 HARD_REBOOT：强制重启中 REBOOT：重启中 DELETED：实例已被正常删除 SHUTOFF：关机/正在开机/删除中/重建中/重装操作系统中/重装操作系统失败/冻结
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets configDrive
    *  是否为裸金属服务器配置config drive分区。取值为：True或空字符串
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
    * @param string|null $configDrive 是否为裸金属服务器配置config drive分区。取值为：True或空字符串
    *
    * @return $this
    */
    public function setConfigDrive($configDrive)
    {
        $this->container['configDrive'] = $configDrive;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\MetadataList
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\MetadataList $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets osExtStStaskState
    *  扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
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
    * @param string|null $osExtStStaskState 扩展属性，裸金属服务器当前的任务状态。例如：rebooting：重启中reboot_started：普通重启reboot_started_hard：强制重启powering-off：关机中powering-on：开机中rebuilding：重建中scheduling：调度中deleting：删除中
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
    *  扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
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
    * @param string|null $osExtStSvmState 扩展属性，裸金属服务器的稳定状态。例如：active：运行中shutoff：关机reboot：重启
    *
    * @return $this
    */
    public function setOsExtStSvmState($osExtStSvmState)
    {
        $this->container['osExtStSvmState'] = $osExtStSvmState;
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
    * Gets osExtSrvAttRhypervisorHostname
    *  扩展属性，裸金属服务器所在虚拟化主机名。
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
    * @param string|null $osExtSrvAttRhypervisorHostname 扩展属性，裸金属服务器所在虚拟化主机名。
    *
    * @return $this
    */
    public function setOsExtSrvAttRhypervisorHostname($osExtSrvAttRhypervisorHostname)
    {
        $this->container['osExtSrvAttRhypervisorHostname'] = $osExtSrvAttRhypervisorHostname;
        return $this;
    }

    /**
    * Gets osExtAZavailabilityZone
    *  扩展属性，裸金属服务器所在可用分区名称。
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
    * @param string|null $osExtAZavailabilityZone 扩展属性，裸金属服务器所在可用分区名称。
    *
    * @return $this
    */
    public function setOsExtAZavailabilityZone($osExtAZavailabilityZone)
    {
        $this->container['osExtAZavailabilityZone'] = $osExtAZavailabilityZone;
        return $this;
    }

    /**
    * Gets osDcFdiskConfig
    *  扩展属性，磁盘配置，取值为以下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
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
    * @param string|null $osDcFdiskConfig 扩展属性，磁盘配置，取值为以下两种：MANUAL：API使用镜像中的分区方案和文件系统创建裸金属服务器。如果目标flavor磁盘较大，则API不会对剩余磁盘空间进行分区。AUTO：API使用与目标flavor磁盘大小相同的单个分区创建裸金属服务器，API会自动调整文件系统以适应整个分区。
    *
    * @return $this
    */
    public function setOsDcFdiskConfig($osDcFdiskConfig)
    {
        $this->container['osDcFdiskConfig'] = $osDcFdiskConfig;
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
    * Gets osSrvUsGlaunchedAt
    *  裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-22T03:23:59.000000
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
    * @param \DateTime|null $osSrvUsGlaunchedAt 裸金属服务器启动时间。时间戳格式为ISO 8601，例如：2019-05-22T03:23:59.000000
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
    *  裸金属服务器删除时间。时间戳格式为ISO 8601，例如：2019-05-22T04:23:59.000000
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
    * @param \DateTime|null $osSrvUsGterminatedAt 裸金属服务器删除时间。时间戳格式为ISO 8601，例如：2019-05-22T04:23:59.000000
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
    *  挂载到裸金属服务器上的磁盘。详情请参见表9 os-extended-volumes:volumes_attached 数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\OsExtendedVolumesInfo[]|null
    */
    public function getOsExtendedVolumesvolumesAttached()
    {
        return $this->container['osExtendedVolumesvolumesAttached'];
    }

    /**
    * Sets osExtendedVolumesvolumesAttached
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\OsExtendedVolumesInfo[]|null $osExtendedVolumesvolumesAttached 挂载到裸金属服务器上的磁盘。详情请参见表9 os-extended-volumes:volumes_attached 数据结构说明。
    *
    * @return $this
    */
    public function setOsExtendedVolumesvolumesAttached($osExtendedVolumesvolumesAttached)
    {
        $this->container['osExtendedVolumesvolumesAttached'] = $osExtendedVolumesvolumesAttached;
        return $this;
    }

    /**
    * Gets description
    *  裸金属服务器的描述信息
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
    * @param string|null $description 裸金属服务器的描述信息
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
    *  裸金属服务器系统盘的设备名称，例如“/dev/sda”。
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
    * @param string|null $osExtSrvAttRrootDeviceName 裸金属服务器系统盘的设备名称，例如“/dev/sda”。
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
    *  创建裸金属服务器时指定的user_data，取值为base64编码后的结果或空字符串。
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
    * @param string|null $osExtSrvAttRuserData 创建裸金属服务器时指定的user_data，取值为base64编码后的结果或空字符串。
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
    *  裸金属服务器是否为锁定状态。true：锁定false：未锁定
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
    * @param bool|null $locked 裸金属服务器是否为锁定状态。true：锁定false：未锁定
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
    *  裸金属服务器标签。
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
    * @param string[]|null $tags 裸金属服务器标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets osschedulerHints
    *  osschedulerHints
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\SchedulerHints|null
    */
    public function getOsschedulerHints()
    {
        return $this->container['osschedulerHints'];
    }

    /**
    * Sets osschedulerHints
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\SchedulerHints|null $osschedulerHints osschedulerHints
    *
    * @return $this
    */
    public function setOsschedulerHints($osschedulerHints)
    {
        $this->container['osschedulerHints'] = $osschedulerHints;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  裸金属服务器所属的企业项目ID
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
    * @param string|null $enterpriseProjectId 裸金属服务器所属的企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets sysTags
    *  裸金属服务器系统标签。详情请参见表12 sys_tags数据结构说明。
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
    * @param \HuaweiCloud\SDK\Bms\V1\Model\SystemTags[]|null $sysTags 裸金属服务器系统标签。详情请参见表12 sys_tags数据结构说明。
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
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

