<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WtpProtectHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WtpProtectHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * protectStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - closed : 未防护。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。 - protection_pause : 防护暂停。
    * chargingMode  **参数解释**： 计费模式 **取值范围**： - packet_cycle ：包年/包月。 - on_demand ：按需计费。
    * resourceId  **参数解释**： 资源ID **取值范围**： 字符长度0-128位
    * raspProtectStatus  **参数解释**: 动态网页防篡改防护开启状态 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。
    * antiTamperingTimes  **参数解释**: 近7天静态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * detectTamperingTimes  **参数解释**: 近7天动态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * osName  **参数解释**： 操作系统名称 **取值范围**： 字符长度0-128位
    * osVersion  **参数解释**： 操作系统版本 **取值范围**： 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。
    * protectDirNum  **参数解释**: 防护目录数 **取值范围**: 最小值0，最大值50
    * abnormalDirList  **参数解释**: 防护状态是防护失败的防护目录列表，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: 最少0条，最多50条
    * abnormalReason  **参数解释**: 防护失败原因，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: - 1 ：某一个防护目录的路径不存在。 - 2 ：多个防护目录的路径不存在。 - 7 ：某一个防护目录未防护。 - 8 ：多个防护目录未防护。 - 10 ：某一个防护目录是网络文件系统。 - 11 ：多个防护目录是网络文件系统。
    * backupHostId  **参数解释**： 远端备份服务器ID，仅当Linux服务器开启远端备份功能时返回。 **取值范围**： 字符长度0-64位
    * interruptReason  **参数解释**： 防护中断原因，仅当防护状态是防护中断时返回。 **取值范围**： 字符长度0-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'hostId' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'assetValue' => 'string',
            'osBit' => 'string',
            'osType' => 'string',
            'protectStatus' => 'string',
            'chargingMode' => 'string',
            'resourceId' => 'string',
            'raspProtectStatus' => 'string',
            'antiTamperingTimes' => 'int',
            'detectTamperingTimes' => 'int',
            'osName' => 'string',
            'osVersion' => 'string',
            'hostStatus' => 'string',
            'agentStatus' => 'string',
            'protectDirNum' => 'int',
            'abnormalDirList' => 'string[]',
            'abnormalReason' => 'int',
            'backupHostId' => 'string',
            'interruptReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * protectStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - closed : 未防护。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。 - protection_pause : 防护暂停。
    * chargingMode  **参数解释**： 计费模式 **取值范围**： - packet_cycle ：包年/包月。 - on_demand ：按需计费。
    * resourceId  **参数解释**： 资源ID **取值范围**： 字符长度0-128位
    * raspProtectStatus  **参数解释**: 动态网页防篡改防护开启状态 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。
    * antiTamperingTimes  **参数解释**: 近7天静态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * detectTamperingTimes  **参数解释**: 近7天动态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * osName  **参数解释**： 操作系统名称 **取值范围**： 字符长度0-128位
    * osVersion  **参数解释**： 操作系统版本 **取值范围**： 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。
    * protectDirNum  **参数解释**: 防护目录数 **取值范围**: 最小值0，最大值50
    * abnormalDirList  **参数解释**: 防护状态是防护失败的防护目录列表，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: 最少0条，最多50条
    * abnormalReason  **参数解释**: 防护失败原因，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: - 1 ：某一个防护目录的路径不存在。 - 2 ：多个防护目录的路径不存在。 - 7 ：某一个防护目录未防护。 - 8 ：多个防护目录未防护。 - 10 ：某一个防护目录是网络文件系统。 - 11 ：多个防护目录是网络文件系统。
    * backupHostId  **参数解释**： 远端备份服务器ID，仅当Linux服务器开启远端备份功能时返回。 **取值范围**： 字符长度0-64位
    * interruptReason  **参数解释**： 防护中断原因，仅当防护状态是防护中断时返回。 **取值范围**： 字符长度0-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'publicIp' => null,
        'privateIp' => null,
        'groupId' => null,
        'groupName' => null,
        'assetValue' => null,
        'osBit' => null,
        'osType' => null,
        'protectStatus' => null,
        'chargingMode' => null,
        'resourceId' => null,
        'raspProtectStatus' => null,
        'antiTamperingTimes' => 'int64',
        'detectTamperingTimes' => 'int64',
        'osName' => null,
        'osVersion' => null,
        'hostStatus' => null,
        'agentStatus' => null,
        'protectDirNum' => 'int32',
        'abnormalDirList' => null,
        'abnormalReason' => 'int32',
        'backupHostId' => null,
        'interruptReason' => null
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
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * protectStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - closed : 未防护。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。 - protection_pause : 防护暂停。
    * chargingMode  **参数解释**： 计费模式 **取值范围**： - packet_cycle ：包年/包月。 - on_demand ：按需计费。
    * resourceId  **参数解释**： 资源ID **取值范围**： 字符长度0-128位
    * raspProtectStatus  **参数解释**: 动态网页防篡改防护开启状态 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。
    * antiTamperingTimes  **参数解释**: 近7天静态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * detectTamperingTimes  **参数解释**: 近7天动态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * osName  **参数解释**： 操作系统名称 **取值范围**： 字符长度0-128位
    * osVersion  **参数解释**： 操作系统版本 **取值范围**： 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。
    * protectDirNum  **参数解释**: 防护目录数 **取值范围**: 最小值0，最大值50
    * abnormalDirList  **参数解释**: 防护状态是防护失败的防护目录列表，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: 最少0条，最多50条
    * abnormalReason  **参数解释**: 防护失败原因，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: - 1 ：某一个防护目录的路径不存在。 - 2 ：多个防护目录的路径不存在。 - 7 ：某一个防护目录未防护。 - 8 ：多个防护目录未防护。 - 10 ：某一个防护目录是网络文件系统。 - 11 ：多个防护目录是网络文件系统。
    * backupHostId  **参数解释**： 远端备份服务器ID，仅当Linux服务器开启远端备份功能时返回。 **取值范围**： 字符长度0-64位
    * interruptReason  **参数解释**： 防护中断原因，仅当防护状态是防护中断时返回。 **取值范围**： 字符长度0-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'assetValue' => 'asset_value',
            'osBit' => 'os_bit',
            'osType' => 'os_type',
            'protectStatus' => 'protect_status',
            'chargingMode' => 'charging_mode',
            'resourceId' => 'resource_id',
            'raspProtectStatus' => 'rasp_protect_status',
            'antiTamperingTimes' => 'anti_tampering_times',
            'detectTamperingTimes' => 'detect_tampering_times',
            'osName' => 'os_name',
            'osVersion' => 'os_version',
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'protectDirNum' => 'protect_dir_num',
            'abnormalDirList' => 'abnormal_dir_list',
            'abnormalReason' => 'abnormal_reason',
            'backupHostId' => 'backup_host_id',
            'interruptReason' => 'interrupt_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * protectStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - closed : 未防护。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。 - protection_pause : 防护暂停。
    * chargingMode  **参数解释**： 计费模式 **取值范围**： - packet_cycle ：包年/包月。 - on_demand ：按需计费。
    * resourceId  **参数解释**： 资源ID **取值范围**： 字符长度0-128位
    * raspProtectStatus  **参数解释**: 动态网页防篡改防护开启状态 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。
    * antiTamperingTimes  **参数解释**: 近7天静态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * detectTamperingTimes  **参数解释**: 近7天动态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * osName  **参数解释**： 操作系统名称 **取值范围**： 字符长度0-128位
    * osVersion  **参数解释**： 操作系统版本 **取值范围**： 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。
    * protectDirNum  **参数解释**: 防护目录数 **取值范围**: 最小值0，最大值50
    * abnormalDirList  **参数解释**: 防护状态是防护失败的防护目录列表，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: 最少0条，最多50条
    * abnormalReason  **参数解释**: 防护失败原因，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: - 1 ：某一个防护目录的路径不存在。 - 2 ：多个防护目录的路径不存在。 - 7 ：某一个防护目录未防护。 - 8 ：多个防护目录未防护。 - 10 ：某一个防护目录是网络文件系统。 - 11 ：多个防护目录是网络文件系统。
    * backupHostId  **参数解释**： 远端备份服务器ID，仅当Linux服务器开启远端备份功能时返回。 **取值范围**： 字符长度0-64位
    * interruptReason  **参数解释**： 防护中断原因，仅当防护状态是防护中断时返回。 **取值范围**： 字符长度0-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'assetValue' => 'setAssetValue',
            'osBit' => 'setOsBit',
            'osType' => 'setOsType',
            'protectStatus' => 'setProtectStatus',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId',
            'raspProtectStatus' => 'setRaspProtectStatus',
            'antiTamperingTimes' => 'setAntiTamperingTimes',
            'detectTamperingTimes' => 'setDetectTamperingTimes',
            'osName' => 'setOsName',
            'osVersion' => 'setOsVersion',
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'protectDirNum' => 'setProtectDirNum',
            'abnormalDirList' => 'setAbnormalDirList',
            'abnormalReason' => 'setAbnormalReason',
            'backupHostId' => 'setBackupHostId',
            'interruptReason' => 'setInterruptReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * groupId  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * protectStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - closed : 未防护。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。 - protection_pause : 防护暂停。
    * chargingMode  **参数解释**： 计费模式 **取值范围**： - packet_cycle ：包年/包月。 - on_demand ：按需计费。
    * resourceId  **参数解释**： 资源ID **取值范围**： 字符长度0-128位
    * raspProtectStatus  **参数解释**: 动态网页防篡改防护开启状态 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。
    * antiTamperingTimes  **参数解释**: 近7天静态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * detectTamperingTimes  **参数解释**: 近7天动态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    * osName  **参数解释**： 操作系统名称 **取值范围**： 字符长度0-128位
    * osVersion  **参数解释**： 操作系统版本 **取值范围**： 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。
    * protectDirNum  **参数解释**: 防护目录数 **取值范围**: 最小值0，最大值50
    * abnormalDirList  **参数解释**: 防护状态是防护失败的防护目录列表，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: 最少0条，最多50条
    * abnormalReason  **参数解释**: 防护失败原因，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: - 1 ：某一个防护目录的路径不存在。 - 2 ：多个防护目录的路径不存在。 - 7 ：某一个防护目录未防护。 - 8 ：多个防护目录未防护。 - 10 ：某一个防护目录是网络文件系统。 - 11 ：多个防护目录是网络文件系统。
    * backupHostId  **参数解释**： 远端备份服务器ID，仅当Linux服务器开启远端备份功能时返回。 **取值范围**： 字符长度0-64位
    * interruptReason  **参数解释**： 防护中断原因，仅当防护状态是防护中断时返回。 **取值范围**： 字符长度0-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'assetValue' => 'getAssetValue',
            'osBit' => 'getOsBit',
            'osType' => 'getOsType',
            'protectStatus' => 'getProtectStatus',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId',
            'raspProtectStatus' => 'getRaspProtectStatus',
            'antiTamperingTimes' => 'getAntiTamperingTimes',
            'detectTamperingTimes' => 'getDetectTamperingTimes',
            'osName' => 'getOsName',
            'osVersion' => 'getOsVersion',
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'protectDirNum' => 'getProtectDirNum',
            'abnormalDirList' => 'getAbnormalDirList',
            'abnormalReason' => 'getAbnormalReason',
            'backupHostId' => 'getBackupHostId',
            'interruptReason' => 'getInterruptReason'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['raspProtectStatus'] = isset($data['raspProtectStatus']) ? $data['raspProtectStatus'] : null;
        $this->container['antiTamperingTimes'] = isset($data['antiTamperingTimes']) ? $data['antiTamperingTimes'] : null;
        $this->container['detectTamperingTimes'] = isset($data['detectTamperingTimes']) ? $data['detectTamperingTimes'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['protectDirNum'] = isset($data['protectDirNum']) ? $data['protectDirNum'] : null;
        $this->container['abnormalDirList'] = isset($data['abnormalDirList']) ? $data['abnormalDirList'] : null;
        $this->container['abnormalReason'] = isset($data['abnormalReason']) ? $data['abnormalReason'] : null;
        $this->container['backupHostId'] = isset($data['backupHostId']) ? $data['backupHostId'] : null;
        $this->container['interruptReason'] = isset($data['interruptReason']) ? $data['interruptReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) > 64)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) < 1)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osBit']) && !preg_match("/^.*$/", $this->container['osBit'])) {
                $invalidProperties[] = "invalid value for 'osBit', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['raspProtectStatus']) && (mb_strlen($this->container['raspProtectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'raspProtectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['raspProtectStatus']) && (mb_strlen($this->container['raspProtectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'raspProtectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['antiTamperingTimes']) && ($this->container['antiTamperingTimes'] > 2000000000)) {
                $invalidProperties[] = "invalid value for 'antiTamperingTimes', must be smaller than or equal to 2000000000.";
            }
            if (!is_null($this->container['antiTamperingTimes']) && ($this->container['antiTamperingTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'antiTamperingTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['detectTamperingTimes']) && ($this->container['detectTamperingTimes'] > 2000000000)) {
                $invalidProperties[] = "invalid value for 'detectTamperingTimes', must be smaller than or equal to 2000000000.";
            }
            if (!is_null($this->container['detectTamperingTimes']) && ($this->container['detectTamperingTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'detectTamperingTimes', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 128)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 0)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectDirNum']) && ($this->container['protectDirNum'] > 50)) {
                $invalidProperties[] = "invalid value for 'protectDirNum', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['protectDirNum']) && ($this->container['protectDirNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectDirNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['abnormalReason']) && ($this->container['abnormalReason'] > 11)) {
                $invalidProperties[] = "invalid value for 'abnormalReason', must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['abnormalReason']) && ($this->container['abnormalReason'] < 1)) {
                $invalidProperties[] = "invalid value for 'abnormalReason', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupHostId']) && (mb_strlen($this->container['backupHostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'backupHostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['backupHostId']) && (mb_strlen($this->container['backupHostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['interruptReason']) && (mb_strlen($this->container['interruptReason']) > 256)) {
                $invalidProperties[] = "invalid value for 'interruptReason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['interruptReason']) && (mb_strlen($this->container['interruptReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'interruptReason', the character length must be bigger than or equal to 0.";
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
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
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
    * @param string|null $hostId **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
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
    * @param string|null $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
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
    * @param string|null $privateIp **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
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
    * @param string|null $groupId **参数解释**： 策略组ID **取值范围**： 字符长度36-64位
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
    *  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
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
    * @param string|null $groupName **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets osBit
    *  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getOsBit()
    {
        return $this->container['osBit'];
    }

    /**
    * Sets osBit
    *
    * @param string|null $osBit **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
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
    * @param string|null $osType **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - closed : 未防护。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。 - protection_pause : 防护暂停。
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
    * @param string|null $protectStatus **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - closed : 未防护。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。 - protection_pause : 防护暂停。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**： 计费模式 **取值范围**： - packet_cycle ：包年/包月。 - on_demand ：按需计费。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**： 计费模式 **取值范围**： - packet_cycle ：包年/包月。 - on_demand ：按需计费。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**： 资源ID **取值范围**： 字符长度0-128位
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**： 资源ID **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets raspProtectStatus
    *  **参数解释**: 动态网页防篡改防护开启状态 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。
    *
    * @return string|null
    */
    public function getRaspProtectStatus()
    {
        return $this->container['raspProtectStatus'];
    }

    /**
    * Sets raspProtectStatus
    *
    * @param string|null $raspProtectStatus **参数解释**: 动态网页防篡改防护开启状态 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。
    *
    * @return $this
    */
    public function setRaspProtectStatus($raspProtectStatus)
    {
        $this->container['raspProtectStatus'] = $raspProtectStatus;
        return $this;
    }

    /**
    * Gets antiTamperingTimes
    *  **参数解释**: 近7天静态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    *
    * @return int|null
    */
    public function getAntiTamperingTimes()
    {
        return $this->container['antiTamperingTimes'];
    }

    /**
    * Sets antiTamperingTimes
    *
    * @param int|null $antiTamperingTimes **参数解释**: 近7天静态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    *
    * @return $this
    */
    public function setAntiTamperingTimes($antiTamperingTimes)
    {
        $this->container['antiTamperingTimes'] = $antiTamperingTimes;
        return $this;
    }

    /**
    * Gets detectTamperingTimes
    *  **参数解释**: 近7天动态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    *
    * @return int|null
    */
    public function getDetectTamperingTimes()
    {
        return $this->container['detectTamperingTimes'];
    }

    /**
    * Sets detectTamperingTimes
    *
    * @param int|null $detectTamperingTimes **参数解释**: 近7天动态网页防篡改攻击次数 **取值范围**: 最小值0，最大值2000000000
    *
    * @return $this
    */
    public function setDetectTamperingTimes($detectTamperingTimes)
    {
        $this->container['detectTamperingTimes'] = $detectTamperingTimes;
        return $this;
    }

    /**
    * Gets osName
    *  **参数解释**： 操作系统名称 **取值范围**： 字符长度0-128位
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
    * @param string|null $osName **参数解释**： 操作系统名称 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets osVersion
    *  **参数解释**： 操作系统版本 **取值范围**： 字符长度0-256位
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
    * @param string|null $osVersion **参数解释**： 操作系统版本 **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**: 服务器状态 **取值范围**: - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
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
    * @param string|null $hostStatus **参数解释**: 服务器状态 **取值范围**: - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**: Agent状态 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。
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
    * @param string|null $agentStatus **参数解释**: Agent状态 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets protectDirNum
    *  **参数解释**: 防护目录数 **取值范围**: 最小值0，最大值50
    *
    * @return int|null
    */
    public function getProtectDirNum()
    {
        return $this->container['protectDirNum'];
    }

    /**
    * Sets protectDirNum
    *
    * @param int|null $protectDirNum **参数解释**: 防护目录数 **取值范围**: 最小值0，最大值50
    *
    * @return $this
    */
    public function setProtectDirNum($protectDirNum)
    {
        $this->container['protectDirNum'] = $protectDirNum;
        return $this;
    }

    /**
    * Gets abnormalDirList
    *  **参数解释**: 防护状态是防护失败的防护目录列表，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: 最少0条，最多50条
    *
    * @return string[]|null
    */
    public function getAbnormalDirList()
    {
        return $this->container['abnormalDirList'];
    }

    /**
    * Sets abnormalDirList
    *
    * @param string[]|null $abnormalDirList **参数解释**: 防护状态是防护失败的防护目录列表，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: 最少0条，最多50条
    *
    * @return $this
    */
    public function setAbnormalDirList($abnormalDirList)
    {
        $this->container['abnormalDirList'] = $abnormalDirList;
        return $this;
    }

    /**
    * Gets abnormalReason
    *  **参数解释**: 防护失败原因，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: - 1 ：某一个防护目录的路径不存在。 - 2 ：多个防护目录的路径不存在。 - 7 ：某一个防护目录未防护。 - 8 ：多个防护目录未防护。 - 10 ：某一个防护目录是网络文件系统。 - 11 ：多个防护目录是网络文件系统。
    *
    * @return int|null
    */
    public function getAbnormalReason()
    {
        return $this->container['abnormalReason'];
    }

    /**
    * Sets abnormalReason
    *
    * @param int|null $abnormalReason **参数解释**: 防护失败原因，仅当存在防护状态是防护失败的防护目录时返回。 **取值范围**: - 1 ：某一个防护目录的路径不存在。 - 2 ：多个防护目录的路径不存在。 - 7 ：某一个防护目录未防护。 - 8 ：多个防护目录未防护。 - 10 ：某一个防护目录是网络文件系统。 - 11 ：多个防护目录是网络文件系统。
    *
    * @return $this
    */
    public function setAbnormalReason($abnormalReason)
    {
        $this->container['abnormalReason'] = $abnormalReason;
        return $this;
    }

    /**
    * Gets backupHostId
    *  **参数解释**： 远端备份服务器ID，仅当Linux服务器开启远端备份功能时返回。 **取值范围**： 字符长度0-64位
    *
    * @return string|null
    */
    public function getBackupHostId()
    {
        return $this->container['backupHostId'];
    }

    /**
    * Sets backupHostId
    *
    * @param string|null $backupHostId **参数解释**： 远端备份服务器ID，仅当Linux服务器开启远端备份功能时返回。 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setBackupHostId($backupHostId)
    {
        $this->container['backupHostId'] = $backupHostId;
        return $this;
    }

    /**
    * Gets interruptReason
    *  **参数解释**： 防护中断原因，仅当防护状态是防护中断时返回。 **取值范围**： 字符长度0-256位
    *
    * @return string|null
    */
    public function getInterruptReason()
    {
        return $this->container['interruptReason'];
    }

    /**
    * Sets interruptReason
    *
    * @param string|null $interruptReason **参数解释**： 防护中断原因，仅当防护状态是防护中断时返回。 **取值范围**： 字符长度0-256位
    *
    * @return $this
    */
    public function setInterruptReason($interruptReason)
    {
        $this->container['interruptReason'] = $interruptReason;
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

