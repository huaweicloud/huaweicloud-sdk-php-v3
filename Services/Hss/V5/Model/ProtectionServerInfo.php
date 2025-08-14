<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectionServerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectionServerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释**: 项目ID **取值范围**: 字符长度0-128
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-128
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度0-128
    * hostIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度0-128
    * osType  **参数解释**: 操作系统类型 **取值范围**:   包含如下2种。     - Linux ：Linux。     - Windows ：Windows。
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下2种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。
    * ransomProtectionStatus  **参数解释**: 勒索防护状态 **取值范围**: 包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级
    * ransomProtectionFailReason  **参数解释**: 勒索防护失败细分原因 **取值范围**: 包含如下4种。   - driver_load_failed ：驱动加载失败。   - protect_interrupted ：防护中断。   - decoy_deploy_totally_failed ：全部诱饵部署失败。   - decoy_deploy_partially_failed ：部分诱饵部署失败。
    * failedDecoyDir  **参数解释**: 诱饵防护失败的目录（仅部分诱饵部署失败状态有值） **取值范围**: 字符长度0-512
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度1-128
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度1-128
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度1-128
    * protectPolicyId  **参数解释**: 防护策略ID **取值范围**: 字符长度1-128
    * protectPolicyName  **参数解释**: 防护策略名称 **取值范围**: 字符长度1-128
    * backupError  backupError
    * backupProtectionStatus  **参数解释**: 是否开启备份 **取值范围**: 包含如下3种。   - failed_to_turn_on_backup: 无法开启备份   - closed ：关闭。   - opened ：开启。
    * countProtectEvent  **参数解释**: 防护事件数 **取值范围**: 取值0-2097152
    * countBackuped  **参数解释**: 已有备份数 **取值范围**: 取值0-2097152
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 字符长度1-128
    * version  **参数解释**: 主机开通的版本    **取值范围**: 包含如下7种输入：   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * hostSource  **参数解释**: 服务器类型 **取值范围**: 包含如下3种输入：   - ecs ：弹性云服务器。   - outside ：线下主机。   - workspace ：云桌面。
    * vaultId  **参数解释**: 存储库ID **取值范围**: 字符长度0-128
    * vaultName  **参数解释**: 存储库名称 **取值范围**: 字符长度0-128
    * vaultSize  **参数解释**: 总容量，单位GB **取值范围**: 取值0-2097152
    * vaultUsed  **参数解释**: 已使用容量，单位MB **取值范围**: 取值0-2097152
    * vaultAllocated  **参数解释**: 已分配容量，单位GB，指绑定的服务器大小 **取值范围**: 取值0-2097152
    * vaultChargingMode  **参数解释**: 存储库创建模式 **取值范围**: 包含如下2种： - 按需：post_paid - 包周期：pre_paid
    * vaultStatus  **参数解释**: 存储库状态。 **取值范围**: 包含如下5种：   - available ：可用。   - lock ：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  **参数解释**: 备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用。 **取值范围**: 字符长度1-128
    * backupPolicyName  **参数解释**: 备份策略名称 **取值范围**: 字符长度1-128
    * backupPolicyEnabled  **参数解释**: 策略是否启用 **取值范围**: 包含如下2种：   - true ：策略已启用。   - false ：策略未启用。
    * resourcesNum  **参数解释**: 已绑定服务器（个） **取值范围**: 取值0-2097152
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'hostId' => 'string',
            'agentId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'privateIp' => 'string',
            'osType' => 'string',
            'osName' => 'string',
            'hostStatus' => 'string',
            'ransomProtectionStatus' => 'string',
            'ransomProtectionFailReason' => 'string',
            'failedDecoyDir' => 'string',
            'agentVersion' => 'string',
            'protectStatus' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'protectPolicyId' => 'string',
            'protectPolicyName' => 'string',
            'backupError' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectionServerInfoBackupError',
            'backupProtectionStatus' => 'string',
            'countProtectEvent' => 'int',
            'countBackuped' => 'int',
            'agentStatus' => 'string',
            'version' => 'string',
            'hostSource' => 'string',
            'vaultId' => 'string',
            'vaultName' => 'string',
            'vaultSize' => 'int',
            'vaultUsed' => 'int',
            'vaultAllocated' => 'int',
            'vaultChargingMode' => 'string',
            'vaultStatus' => 'string',
            'backupPolicyId' => 'string',
            'backupPolicyName' => 'string',
            'backupPolicyEnabled' => 'bool',
            'resourcesNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**: 项目ID **取值范围**: 字符长度0-128
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-128
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度0-128
    * hostIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度0-128
    * osType  **参数解释**: 操作系统类型 **取值范围**:   包含如下2种。     - Linux ：Linux。     - Windows ：Windows。
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下2种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。
    * ransomProtectionStatus  **参数解释**: 勒索防护状态 **取值范围**: 包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级
    * ransomProtectionFailReason  **参数解释**: 勒索防护失败细分原因 **取值范围**: 包含如下4种。   - driver_load_failed ：驱动加载失败。   - protect_interrupted ：防护中断。   - decoy_deploy_totally_failed ：全部诱饵部署失败。   - decoy_deploy_partially_failed ：部分诱饵部署失败。
    * failedDecoyDir  **参数解释**: 诱饵防护失败的目录（仅部分诱饵部署失败状态有值） **取值范围**: 字符长度0-512
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度1-128
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度1-128
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度1-128
    * protectPolicyId  **参数解释**: 防护策略ID **取值范围**: 字符长度1-128
    * protectPolicyName  **参数解释**: 防护策略名称 **取值范围**: 字符长度1-128
    * backupError  backupError
    * backupProtectionStatus  **参数解释**: 是否开启备份 **取值范围**: 包含如下3种。   - failed_to_turn_on_backup: 无法开启备份   - closed ：关闭。   - opened ：开启。
    * countProtectEvent  **参数解释**: 防护事件数 **取值范围**: 取值0-2097152
    * countBackuped  **参数解释**: 已有备份数 **取值范围**: 取值0-2097152
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 字符长度1-128
    * version  **参数解释**: 主机开通的版本    **取值范围**: 包含如下7种输入：   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * hostSource  **参数解释**: 服务器类型 **取值范围**: 包含如下3种输入：   - ecs ：弹性云服务器。   - outside ：线下主机。   - workspace ：云桌面。
    * vaultId  **参数解释**: 存储库ID **取值范围**: 字符长度0-128
    * vaultName  **参数解释**: 存储库名称 **取值范围**: 字符长度0-128
    * vaultSize  **参数解释**: 总容量，单位GB **取值范围**: 取值0-2097152
    * vaultUsed  **参数解释**: 已使用容量，单位MB **取值范围**: 取值0-2097152
    * vaultAllocated  **参数解释**: 已分配容量，单位GB，指绑定的服务器大小 **取值范围**: 取值0-2097152
    * vaultChargingMode  **参数解释**: 存储库创建模式 **取值范围**: 包含如下2种： - 按需：post_paid - 包周期：pre_paid
    * vaultStatus  **参数解释**: 存储库状态。 **取值范围**: 包含如下5种：   - available ：可用。   - lock ：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  **参数解释**: 备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用。 **取值范围**: 字符长度1-128
    * backupPolicyName  **参数解释**: 备份策略名称 **取值范围**: 字符长度1-128
    * backupPolicyEnabled  **参数解释**: 策略是否启用 **取值范围**: 包含如下2种：   - true ：策略已启用。   - false ：策略未启用。
    * resourcesNum  **参数解释**: 已绑定服务器（个） **取值范围**: 取值0-2097152
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'enterpriseProjectId' => null,
        'hostId' => null,
        'agentId' => null,
        'hostName' => null,
        'hostIp' => null,
        'privateIp' => null,
        'osType' => null,
        'osName' => null,
        'hostStatus' => null,
        'ransomProtectionStatus' => null,
        'ransomProtectionFailReason' => null,
        'failedDecoyDir' => null,
        'agentVersion' => null,
        'protectStatus' => null,
        'groupId' => null,
        'groupName' => null,
        'protectPolicyId' => null,
        'protectPolicyName' => null,
        'backupError' => null,
        'backupProtectionStatus' => null,
        'countProtectEvent' => null,
        'countBackuped' => null,
        'agentStatus' => null,
        'version' => null,
        'hostSource' => null,
        'vaultId' => null,
        'vaultName' => null,
        'vaultSize' => null,
        'vaultUsed' => null,
        'vaultAllocated' => null,
        'vaultChargingMode' => null,
        'vaultStatus' => null,
        'backupPolicyId' => null,
        'backupPolicyName' => null,
        'backupPolicyEnabled' => null,
        'resourcesNum' => null
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
    * projectId  **参数解释**: 项目ID **取值范围**: 字符长度0-128
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-128
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度0-128
    * hostIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度0-128
    * osType  **参数解释**: 操作系统类型 **取值范围**:   包含如下2种。     - Linux ：Linux。     - Windows ：Windows。
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下2种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。
    * ransomProtectionStatus  **参数解释**: 勒索防护状态 **取值范围**: 包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级
    * ransomProtectionFailReason  **参数解释**: 勒索防护失败细分原因 **取值范围**: 包含如下4种。   - driver_load_failed ：驱动加载失败。   - protect_interrupted ：防护中断。   - decoy_deploy_totally_failed ：全部诱饵部署失败。   - decoy_deploy_partially_failed ：部分诱饵部署失败。
    * failedDecoyDir  **参数解释**: 诱饵防护失败的目录（仅部分诱饵部署失败状态有值） **取值范围**: 字符长度0-512
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度1-128
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度1-128
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度1-128
    * protectPolicyId  **参数解释**: 防护策略ID **取值范围**: 字符长度1-128
    * protectPolicyName  **参数解释**: 防护策略名称 **取值范围**: 字符长度1-128
    * backupError  backupError
    * backupProtectionStatus  **参数解释**: 是否开启备份 **取值范围**: 包含如下3种。   - failed_to_turn_on_backup: 无法开启备份   - closed ：关闭。   - opened ：开启。
    * countProtectEvent  **参数解释**: 防护事件数 **取值范围**: 取值0-2097152
    * countBackuped  **参数解释**: 已有备份数 **取值范围**: 取值0-2097152
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 字符长度1-128
    * version  **参数解释**: 主机开通的版本    **取值范围**: 包含如下7种输入：   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * hostSource  **参数解释**: 服务器类型 **取值范围**: 包含如下3种输入：   - ecs ：弹性云服务器。   - outside ：线下主机。   - workspace ：云桌面。
    * vaultId  **参数解释**: 存储库ID **取值范围**: 字符长度0-128
    * vaultName  **参数解释**: 存储库名称 **取值范围**: 字符长度0-128
    * vaultSize  **参数解释**: 总容量，单位GB **取值范围**: 取值0-2097152
    * vaultUsed  **参数解释**: 已使用容量，单位MB **取值范围**: 取值0-2097152
    * vaultAllocated  **参数解释**: 已分配容量，单位GB，指绑定的服务器大小 **取值范围**: 取值0-2097152
    * vaultChargingMode  **参数解释**: 存储库创建模式 **取值范围**: 包含如下2种： - 按需：post_paid - 包周期：pre_paid
    * vaultStatus  **参数解释**: 存储库状态。 **取值范围**: 包含如下5种：   - available ：可用。   - lock ：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  **参数解释**: 备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用。 **取值范围**: 字符长度1-128
    * backupPolicyName  **参数解释**: 备份策略名称 **取值范围**: 字符长度1-128
    * backupPolicyEnabled  **参数解释**: 策略是否启用 **取值范围**: 包含如下2种：   - true ：策略已启用。   - false ：策略未启用。
    * resourcesNum  **参数解释**: 已绑定服务器（个） **取值范围**: 取值0-2097152
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'hostId' => 'host_id',
            'agentId' => 'agent_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'privateIp' => 'private_ip',
            'osType' => 'os_type',
            'osName' => 'os_name',
            'hostStatus' => 'host_status',
            'ransomProtectionStatus' => 'ransom_protection_status',
            'ransomProtectionFailReason' => 'ransom_protection_fail_reason',
            'failedDecoyDir' => 'failed_decoy_dir',
            'agentVersion' => 'agent_version',
            'protectStatus' => 'protect_status',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'protectPolicyId' => 'protect_policy_id',
            'protectPolicyName' => 'protect_policy_name',
            'backupError' => 'backup_error',
            'backupProtectionStatus' => 'backup_protection_status',
            'countProtectEvent' => 'count_protect_event',
            'countBackuped' => 'count_backuped',
            'agentStatus' => 'agent_status',
            'version' => 'version',
            'hostSource' => 'host_source',
            'vaultId' => 'vault_id',
            'vaultName' => 'vault_name',
            'vaultSize' => 'vault_size',
            'vaultUsed' => 'vault_used',
            'vaultAllocated' => 'vault_allocated',
            'vaultChargingMode' => 'vault_charging_mode',
            'vaultStatus' => 'vault_status',
            'backupPolicyId' => 'backup_policy_id',
            'backupPolicyName' => 'backup_policy_name',
            'backupPolicyEnabled' => 'backup_policy_enabled',
            'resourcesNum' => 'resources_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**: 项目ID **取值范围**: 字符长度0-128
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-128
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度0-128
    * hostIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度0-128
    * osType  **参数解释**: 操作系统类型 **取值范围**:   包含如下2种。     - Linux ：Linux。     - Windows ：Windows。
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下2种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。
    * ransomProtectionStatus  **参数解释**: 勒索防护状态 **取值范围**: 包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级
    * ransomProtectionFailReason  **参数解释**: 勒索防护失败细分原因 **取值范围**: 包含如下4种。   - driver_load_failed ：驱动加载失败。   - protect_interrupted ：防护中断。   - decoy_deploy_totally_failed ：全部诱饵部署失败。   - decoy_deploy_partially_failed ：部分诱饵部署失败。
    * failedDecoyDir  **参数解释**: 诱饵防护失败的目录（仅部分诱饵部署失败状态有值） **取值范围**: 字符长度0-512
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度1-128
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度1-128
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度1-128
    * protectPolicyId  **参数解释**: 防护策略ID **取值范围**: 字符长度1-128
    * protectPolicyName  **参数解释**: 防护策略名称 **取值范围**: 字符长度1-128
    * backupError  backupError
    * backupProtectionStatus  **参数解释**: 是否开启备份 **取值范围**: 包含如下3种。   - failed_to_turn_on_backup: 无法开启备份   - closed ：关闭。   - opened ：开启。
    * countProtectEvent  **参数解释**: 防护事件数 **取值范围**: 取值0-2097152
    * countBackuped  **参数解释**: 已有备份数 **取值范围**: 取值0-2097152
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 字符长度1-128
    * version  **参数解释**: 主机开通的版本    **取值范围**: 包含如下7种输入：   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * hostSource  **参数解释**: 服务器类型 **取值范围**: 包含如下3种输入：   - ecs ：弹性云服务器。   - outside ：线下主机。   - workspace ：云桌面。
    * vaultId  **参数解释**: 存储库ID **取值范围**: 字符长度0-128
    * vaultName  **参数解释**: 存储库名称 **取值范围**: 字符长度0-128
    * vaultSize  **参数解释**: 总容量，单位GB **取值范围**: 取值0-2097152
    * vaultUsed  **参数解释**: 已使用容量，单位MB **取值范围**: 取值0-2097152
    * vaultAllocated  **参数解释**: 已分配容量，单位GB，指绑定的服务器大小 **取值范围**: 取值0-2097152
    * vaultChargingMode  **参数解释**: 存储库创建模式 **取值范围**: 包含如下2种： - 按需：post_paid - 包周期：pre_paid
    * vaultStatus  **参数解释**: 存储库状态。 **取值范围**: 包含如下5种：   - available ：可用。   - lock ：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  **参数解释**: 备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用。 **取值范围**: 字符长度1-128
    * backupPolicyName  **参数解释**: 备份策略名称 **取值范围**: 字符长度1-128
    * backupPolicyEnabled  **参数解释**: 策略是否启用 **取值范围**: 包含如下2种：   - true ：策略已启用。   - false ：策略未启用。
    * resourcesNum  **参数解释**: 已绑定服务器（个） **取值范围**: 取值0-2097152
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'hostId' => 'setHostId',
            'agentId' => 'setAgentId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'privateIp' => 'setPrivateIp',
            'osType' => 'setOsType',
            'osName' => 'setOsName',
            'hostStatus' => 'setHostStatus',
            'ransomProtectionStatus' => 'setRansomProtectionStatus',
            'ransomProtectionFailReason' => 'setRansomProtectionFailReason',
            'failedDecoyDir' => 'setFailedDecoyDir',
            'agentVersion' => 'setAgentVersion',
            'protectStatus' => 'setProtectStatus',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'protectPolicyId' => 'setProtectPolicyId',
            'protectPolicyName' => 'setProtectPolicyName',
            'backupError' => 'setBackupError',
            'backupProtectionStatus' => 'setBackupProtectionStatus',
            'countProtectEvent' => 'setCountProtectEvent',
            'countBackuped' => 'setCountBackuped',
            'agentStatus' => 'setAgentStatus',
            'version' => 'setVersion',
            'hostSource' => 'setHostSource',
            'vaultId' => 'setVaultId',
            'vaultName' => 'setVaultName',
            'vaultSize' => 'setVaultSize',
            'vaultUsed' => 'setVaultUsed',
            'vaultAllocated' => 'setVaultAllocated',
            'vaultChargingMode' => 'setVaultChargingMode',
            'vaultStatus' => 'setVaultStatus',
            'backupPolicyId' => 'setBackupPolicyId',
            'backupPolicyName' => 'setBackupPolicyName',
            'backupPolicyEnabled' => 'setBackupPolicyEnabled',
            'resourcesNum' => 'setResourcesNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**: 项目ID **取值范围**: 字符长度0-128
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-128
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度0-128
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度0-128
    * hostIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度0-128
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度0-128
    * osType  **参数解释**: 操作系统类型 **取值范围**:   包含如下2种。     - Linux ：Linux。     - Windows ：Windows。
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下2种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。
    * ransomProtectionStatus  **参数解释**: 勒索防护状态 **取值范围**: 包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级
    * ransomProtectionFailReason  **参数解释**: 勒索防护失败细分原因 **取值范围**: 包含如下4种。   - driver_load_failed ：驱动加载失败。   - protect_interrupted ：防护中断。   - decoy_deploy_totally_failed ：全部诱饵部署失败。   - decoy_deploy_partially_failed ：部分诱饵部署失败。
    * failedDecoyDir  **参数解释**: 诱饵防护失败的目录（仅部分诱饵部署失败状态有值） **取值范围**: 字符长度0-512
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度1-128
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度1-128
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度1-128
    * protectPolicyId  **参数解释**: 防护策略ID **取值范围**: 字符长度1-128
    * protectPolicyName  **参数解释**: 防护策略名称 **取值范围**: 字符长度1-128
    * backupError  backupError
    * backupProtectionStatus  **参数解释**: 是否开启备份 **取值范围**: 包含如下3种。   - failed_to_turn_on_backup: 无法开启备份   - closed ：关闭。   - opened ：开启。
    * countProtectEvent  **参数解释**: 防护事件数 **取值范围**: 取值0-2097152
    * countBackuped  **参数解释**: 已有备份数 **取值范围**: 取值0-2097152
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 字符长度1-128
    * version  **参数解释**: 主机开通的版本    **取值范围**: 包含如下7种输入：   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * hostSource  **参数解释**: 服务器类型 **取值范围**: 包含如下3种输入：   - ecs ：弹性云服务器。   - outside ：线下主机。   - workspace ：云桌面。
    * vaultId  **参数解释**: 存储库ID **取值范围**: 字符长度0-128
    * vaultName  **参数解释**: 存储库名称 **取值范围**: 字符长度0-128
    * vaultSize  **参数解释**: 总容量，单位GB **取值范围**: 取值0-2097152
    * vaultUsed  **参数解释**: 已使用容量，单位MB **取值范围**: 取值0-2097152
    * vaultAllocated  **参数解释**: 已分配容量，单位GB，指绑定的服务器大小 **取值范围**: 取值0-2097152
    * vaultChargingMode  **参数解释**: 存储库创建模式 **取值范围**: 包含如下2种： - 按需：post_paid - 包周期：pre_paid
    * vaultStatus  **参数解释**: 存储库状态。 **取值范围**: 包含如下5种：   - available ：可用。   - lock ：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    * backupPolicyId  **参数解释**: 备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用。 **取值范围**: 字符长度1-128
    * backupPolicyName  **参数解释**: 备份策略名称 **取值范围**: 字符长度1-128
    * backupPolicyEnabled  **参数解释**: 策略是否启用 **取值范围**: 包含如下2种：   - true ：策略已启用。   - false ：策略未启用。
    * resourcesNum  **参数解释**: 已绑定服务器（个） **取值范围**: 取值0-2097152
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'hostId' => 'getHostId',
            'agentId' => 'getAgentId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'privateIp' => 'getPrivateIp',
            'osType' => 'getOsType',
            'osName' => 'getOsName',
            'hostStatus' => 'getHostStatus',
            'ransomProtectionStatus' => 'getRansomProtectionStatus',
            'ransomProtectionFailReason' => 'getRansomProtectionFailReason',
            'failedDecoyDir' => 'getFailedDecoyDir',
            'agentVersion' => 'getAgentVersion',
            'protectStatus' => 'getProtectStatus',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'protectPolicyId' => 'getProtectPolicyId',
            'protectPolicyName' => 'getProtectPolicyName',
            'backupError' => 'getBackupError',
            'backupProtectionStatus' => 'getBackupProtectionStatus',
            'countProtectEvent' => 'getCountProtectEvent',
            'countBackuped' => 'getCountBackuped',
            'agentStatus' => 'getAgentStatus',
            'version' => 'getVersion',
            'hostSource' => 'getHostSource',
            'vaultId' => 'getVaultId',
            'vaultName' => 'getVaultName',
            'vaultSize' => 'getVaultSize',
            'vaultUsed' => 'getVaultUsed',
            'vaultAllocated' => 'getVaultAllocated',
            'vaultChargingMode' => 'getVaultChargingMode',
            'vaultStatus' => 'getVaultStatus',
            'backupPolicyId' => 'getBackupPolicyId',
            'backupPolicyName' => 'getBackupPolicyName',
            'backupPolicyEnabled' => 'getBackupPolicyEnabled',
            'resourcesNum' => 'getResourcesNum'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['ransomProtectionStatus'] = isset($data['ransomProtectionStatus']) ? $data['ransomProtectionStatus'] : null;
        $this->container['ransomProtectionFailReason'] = isset($data['ransomProtectionFailReason']) ? $data['ransomProtectionFailReason'] : null;
        $this->container['failedDecoyDir'] = isset($data['failedDecoyDir']) ? $data['failedDecoyDir'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['protectPolicyId'] = isset($data['protectPolicyId']) ? $data['protectPolicyId'] : null;
        $this->container['protectPolicyName'] = isset($data['protectPolicyName']) ? $data['protectPolicyName'] : null;
        $this->container['backupError'] = isset($data['backupError']) ? $data['backupError'] : null;
        $this->container['backupProtectionStatus'] = isset($data['backupProtectionStatus']) ? $data['backupProtectionStatus'] : null;
        $this->container['countProtectEvent'] = isset($data['countProtectEvent']) ? $data['countProtectEvent'] : null;
        $this->container['countBackuped'] = isset($data['countBackuped']) ? $data['countBackuped'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['hostSource'] = isset($data['hostSource']) ? $data['hostSource'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['vaultName'] = isset($data['vaultName']) ? $data['vaultName'] : null;
        $this->container['vaultSize'] = isset($data['vaultSize']) ? $data['vaultSize'] : null;
        $this->container['vaultUsed'] = isset($data['vaultUsed']) ? $data['vaultUsed'] : null;
        $this->container['vaultAllocated'] = isset($data['vaultAllocated']) ? $data['vaultAllocated'] : null;
        $this->container['vaultChargingMode'] = isset($data['vaultChargingMode']) ? $data['vaultChargingMode'] : null;
        $this->container['vaultStatus'] = isset($data['vaultStatus']) ? $data['vaultStatus'] : null;
        $this->container['backupPolicyId'] = isset($data['backupPolicyId']) ? $data['backupPolicyId'] : null;
        $this->container['backupPolicyName'] = isset($data['backupPolicyName']) ? $data['backupPolicyName'] : null;
        $this->container['backupPolicyEnabled'] = isset($data['backupPolicyEnabled']) ? $data['backupPolicyEnabled'] : null;
        $this->container['resourcesNum'] = isset($data['resourcesNum']) ? $data['resourcesNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 128)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 128)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 0)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ransomProtectionStatus']) && (mb_strlen($this->container['ransomProtectionStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'ransomProtectionStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ransomProtectionStatus']) && (mb_strlen($this->container['ransomProtectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'ransomProtectionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ransomProtectionFailReason']) && (mb_strlen($this->container['ransomProtectionFailReason']) > 128)) {
                $invalidProperties[] = "invalid value for 'ransomProtectionFailReason', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ransomProtectionFailReason']) && (mb_strlen($this->container['ransomProtectionFailReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'ransomProtectionFailReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failedDecoyDir']) && (mb_strlen($this->container['failedDecoyDir']) > 512)) {
                $invalidProperties[] = "invalid value for 'failedDecoyDir', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['failedDecoyDir']) && (mb_strlen($this->container['failedDecoyDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'failedDecoyDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectPolicyId']) && (mb_strlen($this->container['protectPolicyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectPolicyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protectPolicyId']) && (mb_strlen($this->container['protectPolicyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectPolicyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectPolicyName']) && (mb_strlen($this->container['protectPolicyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectPolicyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protectPolicyName']) && (mb_strlen($this->container['protectPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectPolicyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupProtectionStatus']) && (mb_strlen($this->container['backupProtectionStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'backupProtectionStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backupProtectionStatus']) && (mb_strlen($this->container['backupProtectionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupProtectionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countProtectEvent']) && ($this->container['countProtectEvent'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'countProtectEvent', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['countProtectEvent']) && ($this->container['countProtectEvent'] < 0)) {
                $invalidProperties[] = "invalid value for 'countProtectEvent', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countBackuped']) && ($this->container['countBackuped'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'countBackuped', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['countBackuped']) && ($this->container['countBackuped'] < 0)) {
                $invalidProperties[] = "invalid value for 'countBackuped', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostSource']) && (mb_strlen($this->container['hostSource']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostSource', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostSource']) && (mb_strlen($this->container['hostSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostSource', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultName']) && (mb_strlen($this->container['vaultName']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultName']) && (mb_strlen($this->container['vaultName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultSize']) && ($this->container['vaultSize'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'vaultSize', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['vaultSize']) && ($this->container['vaultSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'vaultSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultUsed']) && ($this->container['vaultUsed'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'vaultUsed', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['vaultUsed']) && ($this->container['vaultUsed'] < 0)) {
                $invalidProperties[] = "invalid value for 'vaultUsed', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultAllocated']) && ($this->container['vaultAllocated'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'vaultAllocated', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['vaultAllocated']) && ($this->container['vaultAllocated'] < 0)) {
                $invalidProperties[] = "invalid value for 'vaultAllocated', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultChargingMode']) && (mb_strlen($this->container['vaultChargingMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultChargingMode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultChargingMode']) && (mb_strlen($this->container['vaultChargingMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultChargingMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultStatus']) && (mb_strlen($this->container['vaultStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'vaultStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vaultStatus']) && (mb_strlen($this->container['vaultStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupPolicyId']) && (mb_strlen($this->container['backupPolicyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'backupPolicyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backupPolicyId']) && (mb_strlen($this->container['backupPolicyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupPolicyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupPolicyName']) && (mb_strlen($this->container['backupPolicyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'backupPolicyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backupPolicyName']) && (mb_strlen($this->container['backupPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupPolicyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourcesNum']) && ($this->container['resourcesNum'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'resourcesNum', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['resourcesNum']) && ($this->container['resourcesNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourcesNum', must be bigger than or equal to 0.";
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
    * Gets projectId
    *  **参数解释**: 项目ID **取值范围**: 字符长度0-128
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
    * @param string|null $projectId **参数解释**: 项目ID **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID **取值范围**: 字符长度0-128
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器ID **取值范围**: 字符长度0-128
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
    * @param string|null $hostId **参数解释**: 服务器ID **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: Agent ID **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**: Agent ID **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 私有IP地址 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**: 私有IP地址 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**: 操作系统类型 **取值范围**:   包含如下2种。     - Linux ：Linux。     - Windows ：Windows。
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
    * @param string|null $osType **参数解释**: 操作系统类型 **取值范围**:   包含如下2种。     - Linux ：Linux。     - Windows ：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osName
    *  **参数解释**: 系统名称 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getOsName()
    {
        return $this->container['osName'];
    }

    /**
    * Sets osName
    *
    * @param string|null $osName **参数解释**: 系统名称 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**: 服务器状态 **取值范围**: 包含如下2种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。
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
    * @param string|null $hostStatus **参数解释**: 服务器状态 **取值范围**: 包含如下2种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets ransomProtectionStatus
    *  **参数解释**: 勒索防护状态 **取值范围**: 包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级
    *
    * @return string|null
    */
    public function getRansomProtectionStatus()
    {
        return $this->container['ransomProtectionStatus'];
    }

    /**
    * Sets ransomProtectionStatus
    *
    * @param string|null $ransomProtectionStatus **参数解释**: 勒索防护状态 **取值范围**: 包含如下6种。   - closed ：未开启。   - opened ：防护中。   - opening ：开启中。   - closing ：关闭中。   - protect_failed：防护失败。   - protect_degraded：防护降级
    *
    * @return $this
    */
    public function setRansomProtectionStatus($ransomProtectionStatus)
    {
        $this->container['ransomProtectionStatus'] = $ransomProtectionStatus;
        return $this;
    }

    /**
    * Gets ransomProtectionFailReason
    *  **参数解释**: 勒索防护失败细分原因 **取值范围**: 包含如下4种。   - driver_load_failed ：驱动加载失败。   - protect_interrupted ：防护中断。   - decoy_deploy_totally_failed ：全部诱饵部署失败。   - decoy_deploy_partially_failed ：部分诱饵部署失败。
    *
    * @return string|null
    */
    public function getRansomProtectionFailReason()
    {
        return $this->container['ransomProtectionFailReason'];
    }

    /**
    * Sets ransomProtectionFailReason
    *
    * @param string|null $ransomProtectionFailReason **参数解释**: 勒索防护失败细分原因 **取值范围**: 包含如下4种。   - driver_load_failed ：驱动加载失败。   - protect_interrupted ：防护中断。   - decoy_deploy_totally_failed ：全部诱饵部署失败。   - decoy_deploy_partially_failed ：部分诱饵部署失败。
    *
    * @return $this
    */
    public function setRansomProtectionFailReason($ransomProtectionFailReason)
    {
        $this->container['ransomProtectionFailReason'] = $ransomProtectionFailReason;
        return $this;
    }

    /**
    * Gets failedDecoyDir
    *  **参数解释**: 诱饵防护失败的目录（仅部分诱饵部署失败状态有值） **取值范围**: 字符长度0-512
    *
    * @return string|null
    */
    public function getFailedDecoyDir()
    {
        return $this->container['failedDecoyDir'];
    }

    /**
    * Sets failedDecoyDir
    *
    * @param string|null $failedDecoyDir **参数解释**: 诱饵防护失败的目录（仅部分诱饵部署失败状态有值） **取值范围**: 字符长度0-512
    *
    * @return $this
    */
    public function setFailedDecoyDir($failedDecoyDir)
    {
        $this->container['failedDecoyDir'] = $failedDecoyDir;
        return $this;
    }

    /**
    * Gets agentVersion
    *  **参数解释**: agent版本 **取值范围**: 字符长度1-128
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
    * @param string|null $agentVersion **参数解释**: agent版本 **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**: 防护状态 **取值范围**: 包含如下2种。 - closed ：未防护。 - opened ：防护中。
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus **参数解释**: 防护状态 **取值范围**: 包含如下2种。 - closed ：未防护。 - opened ：防护中。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 服务器组ID **取值范围**: 字符长度1-128
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**: 服务器组ID **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 服务器组名称 **取值范围**: 字符长度1-128
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**: 服务器组名称 **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets protectPolicyId
    *  **参数解释**: 防护策略ID **取值范围**: 字符长度1-128
    *
    * @return string|null
    */
    public function getProtectPolicyId()
    {
        return $this->container['protectPolicyId'];
    }

    /**
    * Sets protectPolicyId
    *
    * @param string|null $protectPolicyId **参数解释**: 防护策略ID **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setProtectPolicyId($protectPolicyId)
    {
        $this->container['protectPolicyId'] = $protectPolicyId;
        return $this;
    }

    /**
    * Gets protectPolicyName
    *  **参数解释**: 防护策略名称 **取值范围**: 字符长度1-128
    *
    * @return string|null
    */
    public function getProtectPolicyName()
    {
        return $this->container['protectPolicyName'];
    }

    /**
    * Sets protectPolicyName
    *
    * @param string|null $protectPolicyName **参数解释**: 防护策略名称 **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setProtectPolicyName($protectPolicyName)
    {
        $this->container['protectPolicyName'] = $protectPolicyName;
        return $this;
    }

    /**
    * Gets backupError
    *  backupError
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectionServerInfoBackupError|null
    */
    public function getBackupError()
    {
        return $this->container['backupError'];
    }

    /**
    * Sets backupError
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectionServerInfoBackupError|null $backupError backupError
    *
    * @return $this
    */
    public function setBackupError($backupError)
    {
        $this->container['backupError'] = $backupError;
        return $this;
    }

    /**
    * Gets backupProtectionStatus
    *  **参数解释**: 是否开启备份 **取值范围**: 包含如下3种。   - failed_to_turn_on_backup: 无法开启备份   - closed ：关闭。   - opened ：开启。
    *
    * @return string|null
    */
    public function getBackupProtectionStatus()
    {
        return $this->container['backupProtectionStatus'];
    }

    /**
    * Sets backupProtectionStatus
    *
    * @param string|null $backupProtectionStatus **参数解释**: 是否开启备份 **取值范围**: 包含如下3种。   - failed_to_turn_on_backup: 无法开启备份   - closed ：关闭。   - opened ：开启。
    *
    * @return $this
    */
    public function setBackupProtectionStatus($backupProtectionStatus)
    {
        $this->container['backupProtectionStatus'] = $backupProtectionStatus;
        return $this;
    }

    /**
    * Gets countProtectEvent
    *  **参数解释**: 防护事件数 **取值范围**: 取值0-2097152
    *
    * @return int|null
    */
    public function getCountProtectEvent()
    {
        return $this->container['countProtectEvent'];
    }

    /**
    * Sets countProtectEvent
    *
    * @param int|null $countProtectEvent **参数解释**: 防护事件数 **取值范围**: 取值0-2097152
    *
    * @return $this
    */
    public function setCountProtectEvent($countProtectEvent)
    {
        $this->container['countProtectEvent'] = $countProtectEvent;
        return $this;
    }

    /**
    * Gets countBackuped
    *  **参数解释**: 已有备份数 **取值范围**: 取值0-2097152
    *
    * @return int|null
    */
    public function getCountBackuped()
    {
        return $this->container['countBackuped'];
    }

    /**
    * Sets countBackuped
    *
    * @param int|null $countBackuped **参数解释**: 已有备份数 **取值范围**: 取值0-2097152
    *
    * @return $this
    */
    public function setCountBackuped($countBackuped)
    {
        $this->container['countBackuped'] = $countBackuped;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**: Agent状态 **取值范围**: 字符长度1-128
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus **参数解释**: Agent状态 **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 主机开通的版本    **取值范围**: 包含如下7种输入：   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 主机开通的版本    **取值范围**: 包含如下7种输入：   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets hostSource
    *  **参数解释**: 服务器类型 **取值范围**: 包含如下3种输入：   - ecs ：弹性云服务器。   - outside ：线下主机。   - workspace ：云桌面。
    *
    * @return string|null
    */
    public function getHostSource()
    {
        return $this->container['hostSource'];
    }

    /**
    * Sets hostSource
    *
    * @param string|null $hostSource **参数解释**: 服务器类型 **取值范围**: 包含如下3种输入：   - ecs ：弹性云服务器。   - outside ：线下主机。   - workspace ：云桌面。
    *
    * @return $this
    */
    public function setHostSource($hostSource)
    {
        $this->container['hostSource'] = $hostSource;
        return $this;
    }

    /**
    * Gets vaultId
    *  **参数解释**: 存储库ID **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId **参数解释**: 存储库ID **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets vaultName
    *  **参数解释**: 存储库名称 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getVaultName()
    {
        return $this->container['vaultName'];
    }

    /**
    * Sets vaultName
    *
    * @param string|null $vaultName **参数解释**: 存储库名称 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setVaultName($vaultName)
    {
        $this->container['vaultName'] = $vaultName;
        return $this;
    }

    /**
    * Gets vaultSize
    *  **参数解释**: 总容量，单位GB **取值范围**: 取值0-2097152
    *
    * @return int|null
    */
    public function getVaultSize()
    {
        return $this->container['vaultSize'];
    }

    /**
    * Sets vaultSize
    *
    * @param int|null $vaultSize **参数解释**: 总容量，单位GB **取值范围**: 取值0-2097152
    *
    * @return $this
    */
    public function setVaultSize($vaultSize)
    {
        $this->container['vaultSize'] = $vaultSize;
        return $this;
    }

    /**
    * Gets vaultUsed
    *  **参数解释**: 已使用容量，单位MB **取值范围**: 取值0-2097152
    *
    * @return int|null
    */
    public function getVaultUsed()
    {
        return $this->container['vaultUsed'];
    }

    /**
    * Sets vaultUsed
    *
    * @param int|null $vaultUsed **参数解释**: 已使用容量，单位MB **取值范围**: 取值0-2097152
    *
    * @return $this
    */
    public function setVaultUsed($vaultUsed)
    {
        $this->container['vaultUsed'] = $vaultUsed;
        return $this;
    }

    /**
    * Gets vaultAllocated
    *  **参数解释**: 已分配容量，单位GB，指绑定的服务器大小 **取值范围**: 取值0-2097152
    *
    * @return int|null
    */
    public function getVaultAllocated()
    {
        return $this->container['vaultAllocated'];
    }

    /**
    * Sets vaultAllocated
    *
    * @param int|null $vaultAllocated **参数解释**: 已分配容量，单位GB，指绑定的服务器大小 **取值范围**: 取值0-2097152
    *
    * @return $this
    */
    public function setVaultAllocated($vaultAllocated)
    {
        $this->container['vaultAllocated'] = $vaultAllocated;
        return $this;
    }

    /**
    * Gets vaultChargingMode
    *  **参数解释**: 存储库创建模式 **取值范围**: 包含如下2种： - 按需：post_paid - 包周期：pre_paid
    *
    * @return string|null
    */
    public function getVaultChargingMode()
    {
        return $this->container['vaultChargingMode'];
    }

    /**
    * Sets vaultChargingMode
    *
    * @param string|null $vaultChargingMode **参数解释**: 存储库创建模式 **取值范围**: 包含如下2种： - 按需：post_paid - 包周期：pre_paid
    *
    * @return $this
    */
    public function setVaultChargingMode($vaultChargingMode)
    {
        $this->container['vaultChargingMode'] = $vaultChargingMode;
        return $this;
    }

    /**
    * Gets vaultStatus
    *  **参数解释**: 存储库状态。 **取值范围**: 包含如下5种：   - available ：可用。   - lock ：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    *
    * @return string|null
    */
    public function getVaultStatus()
    {
        return $this->container['vaultStatus'];
    }

    /**
    * Sets vaultStatus
    *
    * @param string|null $vaultStatus **参数解释**: 存储库状态。 **取值范围**: 包含如下5种：   - available ：可用。   - lock ：被锁定。   - frozen：冻结。   - deleting：删除中。   - error：错误。
    *
    * @return $this
    */
    public function setVaultStatus($vaultStatus)
    {
        $this->container['vaultStatus'] = $vaultStatus;
        return $this;
    }

    /**
    * Gets backupPolicyId
    *  **参数解释**: 备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用。 **取值范围**: 字符长度1-128
    *
    * @return string|null
    */
    public function getBackupPolicyId()
    {
        return $this->container['backupPolicyId'];
    }

    /**
    * Sets backupPolicyId
    *
    * @param string|null $backupPolicyId **参数解释**: 备份策略ID，若为空，则为未绑定状态，若不为空，通过backup_policy_enabled字段判断策略是否启用。 **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setBackupPolicyId($backupPolicyId)
    {
        $this->container['backupPolicyId'] = $backupPolicyId;
        return $this;
    }

    /**
    * Gets backupPolicyName
    *  **参数解释**: 备份策略名称 **取值范围**: 字符长度1-128
    *
    * @return string|null
    */
    public function getBackupPolicyName()
    {
        return $this->container['backupPolicyName'];
    }

    /**
    * Sets backupPolicyName
    *
    * @param string|null $backupPolicyName **参数解释**: 备份策略名称 **取值范围**: 字符长度1-128
    *
    * @return $this
    */
    public function setBackupPolicyName($backupPolicyName)
    {
        $this->container['backupPolicyName'] = $backupPolicyName;
        return $this;
    }

    /**
    * Gets backupPolicyEnabled
    *  **参数解释**: 策略是否启用 **取值范围**: 包含如下2种：   - true ：策略已启用。   - false ：策略未启用。
    *
    * @return bool|null
    */
    public function getBackupPolicyEnabled()
    {
        return $this->container['backupPolicyEnabled'];
    }

    /**
    * Sets backupPolicyEnabled
    *
    * @param bool|null $backupPolicyEnabled **参数解释**: 策略是否启用 **取值范围**: 包含如下2种：   - true ：策略已启用。   - false ：策略未启用。
    *
    * @return $this
    */
    public function setBackupPolicyEnabled($backupPolicyEnabled)
    {
        $this->container['backupPolicyEnabled'] = $backupPolicyEnabled;
        return $this;
    }

    /**
    * Gets resourcesNum
    *  **参数解释**: 已绑定服务器（个） **取值范围**: 取值0-2097152
    *
    * @return int|null
    */
    public function getResourcesNum()
    {
        return $this->container['resourcesNum'];
    }

    /**
    * Sets resourcesNum
    *
    * @param int|null $resourcesNum **参数解释**: 已绑定服务器（个） **取值范围**: 取值0-2097152
    *
    * @return $this
    */
    public function setResourcesNum($resourcesNum)
    {
        $this->container['resourcesNum'] = $resourcesNum;
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

