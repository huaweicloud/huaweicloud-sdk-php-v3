<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppWhitelistEventResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppWhitelistEventResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventType  事件类型，包含如下:   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * eventName  事件名称   - \"white list alert malicious process\"   - \"white list alert suspicious process\"
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * attackPhase  **参数解释**： 攻击阶段 **取值范围**： - reconnaissance：侦查跟踪 - weaponization：武器构建 - delivery：载荷投递 - exploit：漏洞利用 - installation：安装植入 - command_and_control：命令与控制 - actions：目标达成
    * attackTag  **参数解释**： 攻击标识 **取值范围**： - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**： 处理状态 **约束限制**: 不涉及 **取值范围**: - mark_as_trust：标记为可信 - mark_as_suspicious：标记为可疑 - isolate_and_kill：隔离查杀  **默认取值**: 不涉及
    * operateAcceptList  **参数解释**: 支持的处理操作 **约束限制**: 不涉及
    * operateDetailList  操作详情信息列表（页面不展示）
    * resourceInfo  resourceInfo
    * recommendation  **参数解释**: 处置建议 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * processInfo  **参数解释**: 偏移量：进程信息列表 **约束限制**: 不涉及
    * policyId  策略ID
    * policyName  策略名称
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）。
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventId' => 'string',
            'eventClassId' => 'string',
            'eventType' => 'int',
            'eventName' => 'string',
            'severity' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'attackPhase' => 'string',
            'attackTag' => 'string',
            'occurTime' => 'int',
            'handleTime' => 'int',
            'handleStatus' => 'string',
            'handleMethod' => 'string',
            'operateAcceptList' => 'string[]',
            'operateDetailList' => '\HuaweiCloud\SDK\Hss\V5\Model\AppWhitelistEventDetailResInfo[]',
            'resourceInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ProcessEventResourceResponseInfo',
            'recommendation' => 'string',
            'processInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\EventProcessResInfo[]',
            'policyId' => 'string',
            'policyName' => 'string',
            'osType' => 'string',
            'assetValue' => 'string',
            'hostStatus' => 'string',
            'agentStatus' => 'string',
            'protectStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventType  事件类型，包含如下:   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * eventName  事件名称   - \"white list alert malicious process\"   - \"white list alert suspicious process\"
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * attackPhase  **参数解释**： 攻击阶段 **取值范围**： - reconnaissance：侦查跟踪 - weaponization：武器构建 - delivery：载荷投递 - exploit：漏洞利用 - installation：安装植入 - command_and_control：命令与控制 - actions：目标达成
    * attackTag  **参数解释**： 攻击标识 **取值范围**： - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**： 处理状态 **约束限制**: 不涉及 **取值范围**: - mark_as_trust：标记为可信 - mark_as_suspicious：标记为可疑 - isolate_and_kill：隔离查杀  **默认取值**: 不涉及
    * operateAcceptList  **参数解释**: 支持的处理操作 **约束限制**: 不涉及
    * operateDetailList  操作详情信息列表（页面不展示）
    * resourceInfo  resourceInfo
    * recommendation  **参数解释**: 处置建议 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * processInfo  **参数解释**: 偏移量：进程信息列表 **约束限制**: 不涉及
    * policyId  策略ID
    * policyName  策略名称
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）。
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventId' => null,
        'eventClassId' => null,
        'eventType' => 'int32',
        'eventName' => null,
        'severity' => null,
        'hostName' => null,
        'hostId' => null,
        'privateIp' => null,
        'publicIp' => null,
        'attackPhase' => null,
        'attackTag' => null,
        'occurTime' => 'int64',
        'handleTime' => 'int64',
        'handleStatus' => null,
        'handleMethod' => null,
        'operateAcceptList' => null,
        'operateDetailList' => null,
        'resourceInfo' => null,
        'recommendation' => null,
        'processInfo' => null,
        'policyId' => null,
        'policyName' => null,
        'osType' => null,
        'assetValue' => null,
        'hostStatus' => null,
        'agentStatus' => null,
        'protectStatus' => null
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
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventType  事件类型，包含如下:   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * eventName  事件名称   - \"white list alert malicious process\"   - \"white list alert suspicious process\"
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * attackPhase  **参数解释**： 攻击阶段 **取值范围**： - reconnaissance：侦查跟踪 - weaponization：武器构建 - delivery：载荷投递 - exploit：漏洞利用 - installation：安装植入 - command_and_control：命令与控制 - actions：目标达成
    * attackTag  **参数解释**： 攻击标识 **取值范围**： - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**： 处理状态 **约束限制**: 不涉及 **取值范围**: - mark_as_trust：标记为可信 - mark_as_suspicious：标记为可疑 - isolate_and_kill：隔离查杀  **默认取值**: 不涉及
    * operateAcceptList  **参数解释**: 支持的处理操作 **约束限制**: 不涉及
    * operateDetailList  操作详情信息列表（页面不展示）
    * resourceInfo  resourceInfo
    * recommendation  **参数解释**: 处置建议 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * processInfo  **参数解释**: 偏移量：进程信息列表 **约束限制**: 不涉及
    * policyId  策略ID
    * policyName  策略名称
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）。
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventId' => 'event_id',
            'eventClassId' => 'event_class_id',
            'eventType' => 'event_type',
            'eventName' => 'event_name',
            'severity' => 'severity',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'attackPhase' => 'attack_phase',
            'attackTag' => 'attack_tag',
            'occurTime' => 'occur_time',
            'handleTime' => 'handle_time',
            'handleStatus' => 'handle_status',
            'handleMethod' => 'handle_method',
            'operateAcceptList' => 'operate_accept_list',
            'operateDetailList' => 'operate_detail_list',
            'resourceInfo' => 'resource_info',
            'recommendation' => 'recommendation',
            'processInfo' => 'process_info',
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'osType' => 'os_type',
            'assetValue' => 'asset_value',
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'protectStatus' => 'protect_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventType  事件类型，包含如下:   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * eventName  事件名称   - \"white list alert malicious process\"   - \"white list alert suspicious process\"
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * attackPhase  **参数解释**： 攻击阶段 **取值范围**： - reconnaissance：侦查跟踪 - weaponization：武器构建 - delivery：载荷投递 - exploit：漏洞利用 - installation：安装植入 - command_and_control：命令与控制 - actions：目标达成
    * attackTag  **参数解释**： 攻击标识 **取值范围**： - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**： 处理状态 **约束限制**: 不涉及 **取值范围**: - mark_as_trust：标记为可信 - mark_as_suspicious：标记为可疑 - isolate_and_kill：隔离查杀  **默认取值**: 不涉及
    * operateAcceptList  **参数解释**: 支持的处理操作 **约束限制**: 不涉及
    * operateDetailList  操作详情信息列表（页面不展示）
    * resourceInfo  resourceInfo
    * recommendation  **参数解释**: 处置建议 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * processInfo  **参数解释**: 偏移量：进程信息列表 **约束限制**: 不涉及
    * policyId  策略ID
    * policyName  策略名称
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）。
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventId' => 'setEventId',
            'eventClassId' => 'setEventClassId',
            'eventType' => 'setEventType',
            'eventName' => 'setEventName',
            'severity' => 'setSeverity',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'attackPhase' => 'setAttackPhase',
            'attackTag' => 'setAttackTag',
            'occurTime' => 'setOccurTime',
            'handleTime' => 'setHandleTime',
            'handleStatus' => 'setHandleStatus',
            'handleMethod' => 'setHandleMethod',
            'operateAcceptList' => 'setOperateAcceptList',
            'operateDetailList' => 'setOperateDetailList',
            'resourceInfo' => 'setResourceInfo',
            'recommendation' => 'setRecommendation',
            'processInfo' => 'setProcessInfo',
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'osType' => 'setOsType',
            'assetValue' => 'setAssetValue',
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'protectStatus' => 'setProtectStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventType  事件类型，包含如下:   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * eventName  事件名称   - \"white list alert malicious process\"   - \"white list alert suspicious process\"
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位
    * attackPhase  **参数解释**： 攻击阶段 **取值范围**： - reconnaissance：侦查跟踪 - weaponization：武器构建 - delivery：载荷投递 - exploit：漏洞利用 - installation：安装植入 - command_and_control：命令与控制 - actions：目标达成
    * attackTag  **参数解释**： 攻击标识 **取值范围**： - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性
    * occurTime  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    * handleStatus  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    * handleMethod  **参数解释**： 处理状态 **约束限制**: 不涉及 **取值范围**: - mark_as_trust：标记为可信 - mark_as_suspicious：标记为可疑 - isolate_and_kill：隔离查杀  **默认取值**: 不涉及
    * operateAcceptList  **参数解释**: 支持的处理操作 **约束限制**: 不涉及
    * operateDetailList  操作详情信息列表（页面不展示）
    * resourceInfo  resourceInfo
    * recommendation  **参数解释**: 处置建议 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * processInfo  **参数解释**: 偏移量：进程信息列表 **约束限制**: 不涉及
    * policyId  策略ID
    * policyName  策略名称
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux。 - Windows：Windows。
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * hostStatus  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。
    * agentStatus  **参数解释**： Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）。
    * protectStatus  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventId' => 'getEventId',
            'eventClassId' => 'getEventClassId',
            'eventType' => 'getEventType',
            'eventName' => 'getEventName',
            'severity' => 'getSeverity',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'attackPhase' => 'getAttackPhase',
            'attackTag' => 'getAttackTag',
            'occurTime' => 'getOccurTime',
            'handleTime' => 'getHandleTime',
            'handleStatus' => 'getHandleStatus',
            'handleMethod' => 'getHandleMethod',
            'operateAcceptList' => 'getOperateAcceptList',
            'operateDetailList' => 'getOperateDetailList',
            'resourceInfo' => 'getResourceInfo',
            'recommendation' => 'getRecommendation',
            'processInfo' => 'getProcessInfo',
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'osType' => 'getOsType',
            'assetValue' => 'getAssetValue',
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'protectStatus' => 'getProtectStatus'
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
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventClassId'] = isset($data['eventClassId']) ? $data['eventClassId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['attackPhase'] = isset($data['attackPhase']) ? $data['attackPhase'] : null;
        $this->container['attackTag'] = isset($data['attackTag']) ? $data['attackTag'] : null;
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['handleTime'] = isset($data['handleTime']) ? $data['handleTime'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['handleMethod'] = isset($data['handleMethod']) ? $data['handleMethod'] : null;
        $this->container['operateAcceptList'] = isset($data['operateAcceptList']) ? $data['operateAcceptList'] : null;
        $this->container['operateDetailList'] = isset($data['operateDetailList']) ? $data['operateDetailList'] : null;
        $this->container['resourceInfo'] = isset($data['resourceInfo']) ? $data['resourceInfo'] : null;
        $this->container['recommendation'] = isset($data['recommendation']) ? $data['recommendation'] : null;
        $this->container['processInfo'] = isset($data['processInfo']) ? $data['processInfo'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventId']) && (mb_strlen($this->container['eventId']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventId']) && !preg_match("/^.*$/", $this->container['eventId'])) {
                $invalidProperties[] = "invalid value for 'eventId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 30000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 1000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 1000.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 20)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
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
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['occurTime']) && ($this->container['occurTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recommendation']) && !preg_match("/^.*$/", $this->container['recommendation'])) {
                $invalidProperties[] = "invalid value for 'recommendation', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && !preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyName']) && !preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
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
    * Gets eventId
    *  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets eventClassId
    *  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    *
    * @return string|null
    */
    public function getEventClassId()
    {
        return $this->container['eventClassId'];
    }

    /**
    * Sets eventClassId
    *
    * @param string|null $eventClassId **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    *
    * @return $this
    */
    public function setEventClassId($eventClassId)
    {
        $this->container['eventClassId'] = $eventClassId;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型，包含如下:   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @return int|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param int|null $eventType 事件类型，包含如下:   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventName
    *  事件名称   - \"white list alert malicious process\"   - \"white list alert suspicious process\"
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 事件名称   - \"white list alert malicious process\"   - \"white list alert suspicious process\"
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
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
    * Gets attackPhase
    *  **参数解释**： 攻击阶段 **取值范围**： - reconnaissance：侦查跟踪 - weaponization：武器构建 - delivery：载荷投递 - exploit：漏洞利用 - installation：安装植入 - command_and_control：命令与控制 - actions：目标达成
    *
    * @return string|null
    */
    public function getAttackPhase()
    {
        return $this->container['attackPhase'];
    }

    /**
    * Sets attackPhase
    *
    * @param string|null $attackPhase **参数解释**： 攻击阶段 **取值范围**： - reconnaissance：侦查跟踪 - weaponization：武器构建 - delivery：载荷投递 - exploit：漏洞利用 - installation：安装植入 - command_and_control：命令与控制 - actions：目标达成
    *
    * @return $this
    */
    public function setAttackPhase($attackPhase)
    {
        $this->container['attackPhase'] = $attackPhase;
        return $this;
    }

    /**
    * Gets attackTag
    *  **参数解释**： 攻击标识 **取值范围**： - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性
    *
    * @return string|null
    */
    public function getAttackTag()
    {
        return $this->container['attackTag'];
    }

    /**
    * Sets attackTag
    *
    * @param string|null $attackTag **参数解释**： 攻击标识 **取值范围**： - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性
    *
    * @return $this
    */
    public function setAttackTag($attackTag)
    {
        $this->container['attackTag'] = $attackTag;
        return $this;
    }

    /**
    * Gets occurTime
    *  **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param int|null $occurTime **参数解释**： 发生时间，毫秒 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets handleTime
    *  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getHandleTime()
    {
        return $this->container['handleTime'];
    }

    /**
    * Sets handleTime
    *
    * @param int|null $handleTime **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setHandleTime($handleTime)
    {
        $this->container['handleTime'] = $handleTime;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets handleMethod
    *  **参数解释**： 处理状态 **约束限制**: 不涉及 **取值范围**: - mark_as_trust：标记为可信 - mark_as_suspicious：标记为可疑 - isolate_and_kill：隔离查杀  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHandleMethod()
    {
        return $this->container['handleMethod'];
    }

    /**
    * Sets handleMethod
    *
    * @param string|null $handleMethod **参数解释**： 处理状态 **约束限制**: 不涉及 **取值范围**: - mark_as_trust：标记为可信 - mark_as_suspicious：标记为可疑 - isolate_and_kill：隔离查杀  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleMethod($handleMethod)
    {
        $this->container['handleMethod'] = $handleMethod;
        return $this;
    }

    /**
    * Gets operateAcceptList
    *  **参数解释**: 支持的处理操作 **约束限制**: 不涉及
    *
    * @return string[]|null
    */
    public function getOperateAcceptList()
    {
        return $this->container['operateAcceptList'];
    }

    /**
    * Sets operateAcceptList
    *
    * @param string[]|null $operateAcceptList **参数解释**: 支持的处理操作 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setOperateAcceptList($operateAcceptList)
    {
        $this->container['operateAcceptList'] = $operateAcceptList;
        return $this;
    }

    /**
    * Gets operateDetailList
    *  操作详情信息列表（页面不展示）
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AppWhitelistEventDetailResInfo[]|null
    */
    public function getOperateDetailList()
    {
        return $this->container['operateDetailList'];
    }

    /**
    * Sets operateDetailList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AppWhitelistEventDetailResInfo[]|null $operateDetailList 操作详情信息列表（页面不展示）
    *
    * @return $this
    */
    public function setOperateDetailList($operateDetailList)
    {
        $this->container['operateDetailList'] = $operateDetailList;
        return $this;
    }

    /**
    * Gets resourceInfo
    *  resourceInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProcessEventResourceResponseInfo|null
    */
    public function getResourceInfo()
    {
        return $this->container['resourceInfo'];
    }

    /**
    * Sets resourceInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProcessEventResourceResponseInfo|null $resourceInfo resourceInfo
    *
    * @return $this
    */
    public function setResourceInfo($resourceInfo)
    {
        $this->container['resourceInfo'] = $resourceInfo;
        return $this;
    }

    /**
    * Gets recommendation
    *  **参数解释**: 处置建议 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRecommendation()
    {
        return $this->container['recommendation'];
    }

    /**
    * Sets recommendation
    *
    * @param string|null $recommendation **参数解释**: 处置建议 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRecommendation($recommendation)
    {
        $this->container['recommendation'] = $recommendation;
        return $this;
    }

    /**
    * Gets processInfo
    *  **参数解释**: 偏移量：进程信息列表 **约束限制**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\EventProcessResInfo[]|null
    */
    public function getProcessInfo()
    {
        return $this->container['processInfo'];
    }

    /**
    * Sets processInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\EventProcessResInfo[]|null $processInfo **参数解释**: 偏移量：进程信息列表 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setProcessInfo($processInfo)
    {
        $this->container['processInfo'] = $processInfo;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
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
    * Gets hostStatus
    *  **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。
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
    * @param string|null $hostStatus **参数解释**： 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。
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
    *  **参数解释**： Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）。
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
    * @param string|null $agentStatus **参数解释**： Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。 - not_online：不在线的（除了在线以外的所有状态，仅作为查询条件）。
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
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
    * @param string|null $protectStatus 防护状态，包含如下2种。   - closed ：关闭。   - opened ：开启。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
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

