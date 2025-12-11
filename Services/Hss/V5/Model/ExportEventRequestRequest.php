<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportEventRequestRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportEventRequestRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * lastDays  **参数解释**： 查询时间范围天数，与自定义查询时间begin_time，end_time互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostId  **参数解释**： 服务器ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * privateIp  **参数解释**： 服务器私有IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器实例名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-512位 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * exportSize  **参数解释**： 导出数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventType  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * eventTypes  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * severity  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * category  **参数解释**： 事件类别 **约束限制**： 不涉及 **取值范围**： - host：主机安全事件 - container：容器安全事件  **默认取值**： 不涉及
    * beginTime  **参数解释**： 自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * endTime  **参数解释**： 自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventClassIds  **参数解释**： 事件标识 **约束限制**： 不涉及 **取值范围**： - container_1001：容器命名空间 - container_1002：容器开放端口 - container_1003：容器安全选项 - container_1004：容器挂载目录 - containerescape_0001：容器高危系统调用 - containerescape_0002：Shocker攻击 - containerescape_0003：DirtCow攻击 - containerescape_0004：容器文件逃逸攻击 - dockerfile_001：用户自定义容器保护文件被修改 - dockerfile_002：容器文件系统可执行文件被修改 - dockerproc_001：容器进程异常事件上报 - fileprotect_0001：文件提权 - fileprotect_0002：关键文件变更 - fileprotect_0003：关键文件路径变更 - fileprotect_0004：文件/目录变更 - av_1002：病毒 - av_1003：蠕虫 - av_1004：木马 - av_1005：僵尸网络 - av_1006：后门 - av_1007：间谍软件 - av_1008：恶意广告软件 - av_1009：钓鱼 - av_1010：Rootkit - av_1011：勒索软件 - av_1012：黑客工具 - av_1013：灰色软件 - av_1015：Webshell - av_1016：挖矿软件 - login_0001：尝试暴力破解 - login_0002：爆破成功 - login_1001：登录成功 - login_1002：异地登录 - login_1003：弱口令 - malware_0001：shell变更事件上报 - malware_0002：反弹shell事件上报 - malware_1001：恶意程序 - procdet_0001：进程异常行为检测 - procdet_0002：进程提权 - procreport_0001：危险命令 - user_1001：账号变更 - user_1002：风险账号 - vmescape_0001：虚拟机敏感命令执行 - vmescape_0002：虚拟化进程访问敏感文件 - vmescape_0003：虚拟机异常端口访问 - webshell_0001：网站后门 - network_1001：恶意挖矿 - network_1002：对外DDoS攻击 - network_1003：恶意扫描 - network_1004：敏感区域攻击 - ransomware_0001：勒索攻击 - ransomware_0002：勒索攻击 - ransomware_0003：勒索攻击 - fileless_0001：进程注入 - fileless_0002：动态库注入进程 - fileless_0003：关键配置变更 - fileless_0004：环境变量变更 - fileless_0005：内存文件进程 - fileless_0006：vdso劫持 - crontab_1001：Crontab可疑任务 - vul_exploit_0001：Redis漏洞利用攻击 - vul_exploit_0002：Hadoop漏洞利用攻击 - vul_exploit_0003：MySQL漏洞利用攻击 - rootkit_0001：可疑rootkit文件 - rootkit_0002：可疑内核模块 - RASP_0004：上传Webshell - RASP_0018：无文件Webshell - blockexec_001：已知勒索攻击 - hips_0001：Windows Defender防护被禁用 - hips_0002：可疑的黑客工具 - hips_0003：可疑的勒索加密行为 - hips_0004：隐藏账号创建 - hips_0005：读取用户密码凭据 - hips_0006：可疑的SAM文件导出 - hips_0007：可疑shadow copy删除操作 - hips_0008：备份文件删除 - hips_0009：可疑勒索病毒操作注册表 - hips_0010：可疑的异常进程行为 - hips_0011：可疑的扫描探测 - hips_0012：可疑的勒索病毒脚本运行 - hips_0013：可疑的挖矿命令执行 - hips_0014：可疑的禁用windows安全中心 - hips_0015：可疑的停止防火墙服务行为 - hips_0016：可疑的系统自动恢复禁用 - hips_0017：Office 创建可执行文件 - hips_0018：带宏Office文件异常创建 - hips_0019：可疑的注册表操作 - hips_0020：Confluence远程代码执行 - hips_0021：MSDT远程代码执行 - portscan_0001：通用端口扫描 - portscan_0002：秘密端口扫描 - k8s_1001：Kubernetes事件删除 - k8s_1002：创建特权Pod - k8s_1003：Pod中使用交互式shell - k8s_1004：创建敏感目录Pod - k8s_1005：创建主机网络的Pod - k8s_1006：创建主机Pid空间的Pod - k8s_1007：普通pod访问APIserver认证失败 - k8s_1008：普通Pod通过Curl访问APIServer - k8s_1009：系统管理空间执行exec - k8s_1010：系统管理空间创建Pod - k8s_1011：创建静态Pod - k8s_1012：创建DaemonSet - k8s_1013：创建集群计划任务 - k8s_1014：Secrets操作 - k8s_1015：枚举用户可执行的操作 - k8s_1016：高权限RoleBinding或ClusterRoleBinding - k8s_1017：ServiceAccount创建 - k8s_1018：创建Cronjob - k8s_1019：Pod中exec使用交互式shell - k8s_1020：无权限访问Apiserver - k8s_1021：使用curl访问APIServer - k8s_1022：Ingress漏洞 - k8s_1023：中间人攻击 - k8s_1024：蠕虫挖矿木马 - k8s_1025：K8s事件删除 - k8s_1026：SelfSubjectRulesReview场景 - imgblock_0001：镜像白名单阻断 - imgblock_0002：镜像黑名单阻断 - imgblock_0003：镜像标签白名单阻断 - imgblock_0004：镜像标签黑名单阻断 - imgblock_0005：创建容器白名单阻断 - imgblock_0006：创建容器黑名单阻断 - imgblock_0007：容器mount proc阻断 - imgblock_0008：容器seccomp unconfined阻断 - imgblock_0009：容器特权阻断 - imgblock_0010：容器capabilities阻断 - honeypot_0001：可疑的蜜罐异常访问  **默认取值**： 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * attackTag  **参数解释**: 攻击标识 **约束限制**: 不涉及 **取值范围**: - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * tagList  **参数解释**: 事件标签列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * attCk  **参数解释**: ATT&CK攻击阶段 **约束限制**: 不涉及 **取值范围**: - Reconnaissance：侦察 - Initial Access：初始访问 - Execution：执行 - Persistence：持久化 - Privilege Escalation：权限提升 - Defense Evasion：防御绕过 - Credential Access：凭据访问 - Command and Control：命令与控制 - Impact：影响破坏  **默认取值**: 不涉及
    * eventName  **参数解释**： 告警名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * eventIdList  **参数解释**： 告警id集合 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及 \"\"
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 不涉及 **取值范围**： - true：自动阻断告警 - false：不自动阻断告警 **默认取值**： 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * eventId  **参数解释**： 事件编号 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * publicIp  **参数解释**： 服务器公网IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'lastDays' => 'int',
            'hostName' => 'string',
            'hostId' => 'string',
            'privateIp' => 'string',
            'containerName' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'exportSize' => 'int',
            'eventType' => 'int',
            'eventTypes' => 'int[]',
            'handleStatus' => 'string',
            'severity' => 'string',
            'category' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'eventClassIds' => 'string[]',
            'severityList' => 'string[]',
            'attackTag' => 'string',
            'assetValue' => 'string',
            'tagList' => 'string[]',
            'attCk' => 'string',
            'eventName' => 'string',
            'eventIdList' => 'string[]',
            'autoBlock' => 'bool',
            'clusterId' => 'string',
            'eventId' => 'string',
            'publicIp' => 'string',
            'body' => 'string[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * lastDays  **参数解释**： 查询时间范围天数，与自定义查询时间begin_time，end_time互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostId  **参数解释**： 服务器ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * privateIp  **参数解释**： 服务器私有IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器实例名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-512位 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * exportSize  **参数解释**： 导出数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventType  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * eventTypes  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * severity  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * category  **参数解释**： 事件类别 **约束限制**： 不涉及 **取值范围**： - host：主机安全事件 - container：容器安全事件  **默认取值**： 不涉及
    * beginTime  **参数解释**： 自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * endTime  **参数解释**： 自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventClassIds  **参数解释**： 事件标识 **约束限制**： 不涉及 **取值范围**： - container_1001：容器命名空间 - container_1002：容器开放端口 - container_1003：容器安全选项 - container_1004：容器挂载目录 - containerescape_0001：容器高危系统调用 - containerescape_0002：Shocker攻击 - containerescape_0003：DirtCow攻击 - containerescape_0004：容器文件逃逸攻击 - dockerfile_001：用户自定义容器保护文件被修改 - dockerfile_002：容器文件系统可执行文件被修改 - dockerproc_001：容器进程异常事件上报 - fileprotect_0001：文件提权 - fileprotect_0002：关键文件变更 - fileprotect_0003：关键文件路径变更 - fileprotect_0004：文件/目录变更 - av_1002：病毒 - av_1003：蠕虫 - av_1004：木马 - av_1005：僵尸网络 - av_1006：后门 - av_1007：间谍软件 - av_1008：恶意广告软件 - av_1009：钓鱼 - av_1010：Rootkit - av_1011：勒索软件 - av_1012：黑客工具 - av_1013：灰色软件 - av_1015：Webshell - av_1016：挖矿软件 - login_0001：尝试暴力破解 - login_0002：爆破成功 - login_1001：登录成功 - login_1002：异地登录 - login_1003：弱口令 - malware_0001：shell变更事件上报 - malware_0002：反弹shell事件上报 - malware_1001：恶意程序 - procdet_0001：进程异常行为检测 - procdet_0002：进程提权 - procreport_0001：危险命令 - user_1001：账号变更 - user_1002：风险账号 - vmescape_0001：虚拟机敏感命令执行 - vmescape_0002：虚拟化进程访问敏感文件 - vmescape_0003：虚拟机异常端口访问 - webshell_0001：网站后门 - network_1001：恶意挖矿 - network_1002：对外DDoS攻击 - network_1003：恶意扫描 - network_1004：敏感区域攻击 - ransomware_0001：勒索攻击 - ransomware_0002：勒索攻击 - ransomware_0003：勒索攻击 - fileless_0001：进程注入 - fileless_0002：动态库注入进程 - fileless_0003：关键配置变更 - fileless_0004：环境变量变更 - fileless_0005：内存文件进程 - fileless_0006：vdso劫持 - crontab_1001：Crontab可疑任务 - vul_exploit_0001：Redis漏洞利用攻击 - vul_exploit_0002：Hadoop漏洞利用攻击 - vul_exploit_0003：MySQL漏洞利用攻击 - rootkit_0001：可疑rootkit文件 - rootkit_0002：可疑内核模块 - RASP_0004：上传Webshell - RASP_0018：无文件Webshell - blockexec_001：已知勒索攻击 - hips_0001：Windows Defender防护被禁用 - hips_0002：可疑的黑客工具 - hips_0003：可疑的勒索加密行为 - hips_0004：隐藏账号创建 - hips_0005：读取用户密码凭据 - hips_0006：可疑的SAM文件导出 - hips_0007：可疑shadow copy删除操作 - hips_0008：备份文件删除 - hips_0009：可疑勒索病毒操作注册表 - hips_0010：可疑的异常进程行为 - hips_0011：可疑的扫描探测 - hips_0012：可疑的勒索病毒脚本运行 - hips_0013：可疑的挖矿命令执行 - hips_0014：可疑的禁用windows安全中心 - hips_0015：可疑的停止防火墙服务行为 - hips_0016：可疑的系统自动恢复禁用 - hips_0017：Office 创建可执行文件 - hips_0018：带宏Office文件异常创建 - hips_0019：可疑的注册表操作 - hips_0020：Confluence远程代码执行 - hips_0021：MSDT远程代码执行 - portscan_0001：通用端口扫描 - portscan_0002：秘密端口扫描 - k8s_1001：Kubernetes事件删除 - k8s_1002：创建特权Pod - k8s_1003：Pod中使用交互式shell - k8s_1004：创建敏感目录Pod - k8s_1005：创建主机网络的Pod - k8s_1006：创建主机Pid空间的Pod - k8s_1007：普通pod访问APIserver认证失败 - k8s_1008：普通Pod通过Curl访问APIServer - k8s_1009：系统管理空间执行exec - k8s_1010：系统管理空间创建Pod - k8s_1011：创建静态Pod - k8s_1012：创建DaemonSet - k8s_1013：创建集群计划任务 - k8s_1014：Secrets操作 - k8s_1015：枚举用户可执行的操作 - k8s_1016：高权限RoleBinding或ClusterRoleBinding - k8s_1017：ServiceAccount创建 - k8s_1018：创建Cronjob - k8s_1019：Pod中exec使用交互式shell - k8s_1020：无权限访问Apiserver - k8s_1021：使用curl访问APIServer - k8s_1022：Ingress漏洞 - k8s_1023：中间人攻击 - k8s_1024：蠕虫挖矿木马 - k8s_1025：K8s事件删除 - k8s_1026：SelfSubjectRulesReview场景 - imgblock_0001：镜像白名单阻断 - imgblock_0002：镜像黑名单阻断 - imgblock_0003：镜像标签白名单阻断 - imgblock_0004：镜像标签黑名单阻断 - imgblock_0005：创建容器白名单阻断 - imgblock_0006：创建容器黑名单阻断 - imgblock_0007：容器mount proc阻断 - imgblock_0008：容器seccomp unconfined阻断 - imgblock_0009：容器特权阻断 - imgblock_0010：容器capabilities阻断 - honeypot_0001：可疑的蜜罐异常访问  **默认取值**： 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * attackTag  **参数解释**: 攻击标识 **约束限制**: 不涉及 **取值范围**: - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * tagList  **参数解释**: 事件标签列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * attCk  **参数解释**: ATT&CK攻击阶段 **约束限制**: 不涉及 **取值范围**: - Reconnaissance：侦察 - Initial Access：初始访问 - Execution：执行 - Persistence：持久化 - Privilege Escalation：权限提升 - Defense Evasion：防御绕过 - Credential Access：凭据访问 - Command and Control：命令与控制 - Impact：影响破坏  **默认取值**: 不涉及
    * eventName  **参数解释**： 告警名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * eventIdList  **参数解释**： 告警id集合 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及 \"\"
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 不涉及 **取值范围**： - true：自动阻断告警 - false：不自动阻断告警 **默认取值**： 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * eventId  **参数解释**： 事件编号 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * publicIp  **参数解释**： 服务器公网IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'lastDays' => 'int32',
        'hostName' => null,
        'hostId' => null,
        'privateIp' => null,
        'containerName' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'exportSize' => 'int32',
        'eventType' => 'int32',
        'eventTypes' => 'int32',
        'handleStatus' => null,
        'severity' => null,
        'category' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'eventClassIds' => null,
        'severityList' => null,
        'attackTag' => null,
        'assetValue' => null,
        'tagList' => null,
        'attCk' => null,
        'eventName' => null,
        'eventIdList' => null,
        'autoBlock' => null,
        'clusterId' => null,
        'eventId' => null,
        'publicIp' => null,
        'body' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * lastDays  **参数解释**： 查询时间范围天数，与自定义查询时间begin_time，end_time互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostId  **参数解释**： 服务器ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * privateIp  **参数解释**： 服务器私有IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器实例名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-512位 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * exportSize  **参数解释**： 导出数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventType  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * eventTypes  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * severity  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * category  **参数解释**： 事件类别 **约束限制**： 不涉及 **取值范围**： - host：主机安全事件 - container：容器安全事件  **默认取值**： 不涉及
    * beginTime  **参数解释**： 自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * endTime  **参数解释**： 自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventClassIds  **参数解释**： 事件标识 **约束限制**： 不涉及 **取值范围**： - container_1001：容器命名空间 - container_1002：容器开放端口 - container_1003：容器安全选项 - container_1004：容器挂载目录 - containerescape_0001：容器高危系统调用 - containerescape_0002：Shocker攻击 - containerescape_0003：DirtCow攻击 - containerescape_0004：容器文件逃逸攻击 - dockerfile_001：用户自定义容器保护文件被修改 - dockerfile_002：容器文件系统可执行文件被修改 - dockerproc_001：容器进程异常事件上报 - fileprotect_0001：文件提权 - fileprotect_0002：关键文件变更 - fileprotect_0003：关键文件路径变更 - fileprotect_0004：文件/目录变更 - av_1002：病毒 - av_1003：蠕虫 - av_1004：木马 - av_1005：僵尸网络 - av_1006：后门 - av_1007：间谍软件 - av_1008：恶意广告软件 - av_1009：钓鱼 - av_1010：Rootkit - av_1011：勒索软件 - av_1012：黑客工具 - av_1013：灰色软件 - av_1015：Webshell - av_1016：挖矿软件 - login_0001：尝试暴力破解 - login_0002：爆破成功 - login_1001：登录成功 - login_1002：异地登录 - login_1003：弱口令 - malware_0001：shell变更事件上报 - malware_0002：反弹shell事件上报 - malware_1001：恶意程序 - procdet_0001：进程异常行为检测 - procdet_0002：进程提权 - procreport_0001：危险命令 - user_1001：账号变更 - user_1002：风险账号 - vmescape_0001：虚拟机敏感命令执行 - vmescape_0002：虚拟化进程访问敏感文件 - vmescape_0003：虚拟机异常端口访问 - webshell_0001：网站后门 - network_1001：恶意挖矿 - network_1002：对外DDoS攻击 - network_1003：恶意扫描 - network_1004：敏感区域攻击 - ransomware_0001：勒索攻击 - ransomware_0002：勒索攻击 - ransomware_0003：勒索攻击 - fileless_0001：进程注入 - fileless_0002：动态库注入进程 - fileless_0003：关键配置变更 - fileless_0004：环境变量变更 - fileless_0005：内存文件进程 - fileless_0006：vdso劫持 - crontab_1001：Crontab可疑任务 - vul_exploit_0001：Redis漏洞利用攻击 - vul_exploit_0002：Hadoop漏洞利用攻击 - vul_exploit_0003：MySQL漏洞利用攻击 - rootkit_0001：可疑rootkit文件 - rootkit_0002：可疑内核模块 - RASP_0004：上传Webshell - RASP_0018：无文件Webshell - blockexec_001：已知勒索攻击 - hips_0001：Windows Defender防护被禁用 - hips_0002：可疑的黑客工具 - hips_0003：可疑的勒索加密行为 - hips_0004：隐藏账号创建 - hips_0005：读取用户密码凭据 - hips_0006：可疑的SAM文件导出 - hips_0007：可疑shadow copy删除操作 - hips_0008：备份文件删除 - hips_0009：可疑勒索病毒操作注册表 - hips_0010：可疑的异常进程行为 - hips_0011：可疑的扫描探测 - hips_0012：可疑的勒索病毒脚本运行 - hips_0013：可疑的挖矿命令执行 - hips_0014：可疑的禁用windows安全中心 - hips_0015：可疑的停止防火墙服务行为 - hips_0016：可疑的系统自动恢复禁用 - hips_0017：Office 创建可执行文件 - hips_0018：带宏Office文件异常创建 - hips_0019：可疑的注册表操作 - hips_0020：Confluence远程代码执行 - hips_0021：MSDT远程代码执行 - portscan_0001：通用端口扫描 - portscan_0002：秘密端口扫描 - k8s_1001：Kubernetes事件删除 - k8s_1002：创建特权Pod - k8s_1003：Pod中使用交互式shell - k8s_1004：创建敏感目录Pod - k8s_1005：创建主机网络的Pod - k8s_1006：创建主机Pid空间的Pod - k8s_1007：普通pod访问APIserver认证失败 - k8s_1008：普通Pod通过Curl访问APIServer - k8s_1009：系统管理空间执行exec - k8s_1010：系统管理空间创建Pod - k8s_1011：创建静态Pod - k8s_1012：创建DaemonSet - k8s_1013：创建集群计划任务 - k8s_1014：Secrets操作 - k8s_1015：枚举用户可执行的操作 - k8s_1016：高权限RoleBinding或ClusterRoleBinding - k8s_1017：ServiceAccount创建 - k8s_1018：创建Cronjob - k8s_1019：Pod中exec使用交互式shell - k8s_1020：无权限访问Apiserver - k8s_1021：使用curl访问APIServer - k8s_1022：Ingress漏洞 - k8s_1023：中间人攻击 - k8s_1024：蠕虫挖矿木马 - k8s_1025：K8s事件删除 - k8s_1026：SelfSubjectRulesReview场景 - imgblock_0001：镜像白名单阻断 - imgblock_0002：镜像黑名单阻断 - imgblock_0003：镜像标签白名单阻断 - imgblock_0004：镜像标签黑名单阻断 - imgblock_0005：创建容器白名单阻断 - imgblock_0006：创建容器黑名单阻断 - imgblock_0007：容器mount proc阻断 - imgblock_0008：容器seccomp unconfined阻断 - imgblock_0009：容器特权阻断 - imgblock_0010：容器capabilities阻断 - honeypot_0001：可疑的蜜罐异常访问  **默认取值**： 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * attackTag  **参数解释**: 攻击标识 **约束限制**: 不涉及 **取值范围**: - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * tagList  **参数解释**: 事件标签列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * attCk  **参数解释**: ATT&CK攻击阶段 **约束限制**: 不涉及 **取值范围**: - Reconnaissance：侦察 - Initial Access：初始访问 - Execution：执行 - Persistence：持久化 - Privilege Escalation：权限提升 - Defense Evasion：防御绕过 - Credential Access：凭据访问 - Command and Control：命令与控制 - Impact：影响破坏  **默认取值**: 不涉及
    * eventName  **参数解释**： 告警名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * eventIdList  **参数解释**： 告警id集合 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及 \"\"
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 不涉及 **取值范围**： - true：自动阻断告警 - false：不自动阻断告警 **默认取值**： 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * eventId  **参数解释**： 事件编号 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * publicIp  **参数解释**： 服务器公网IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'lastDays' => 'last_days',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'privateIp' => 'private_ip',
            'containerName' => 'container_name',
            'offset' => 'offset',
            'limit' => 'limit',
            'exportSize' => 'export_size',
            'eventType' => 'event_type',
            'eventTypes' => 'event_types',
            'handleStatus' => 'handle_status',
            'severity' => 'severity',
            'category' => 'category',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'eventClassIds' => 'event_class_ids',
            'severityList' => 'severity_list',
            'attackTag' => 'attack_tag',
            'assetValue' => 'asset_value',
            'tagList' => 'tag_list',
            'attCk' => 'att_ck',
            'eventName' => 'event_name',
            'eventIdList' => 'event_id_list',
            'autoBlock' => 'auto_block',
            'clusterId' => 'cluster_id',
            'eventId' => 'event_id',
            'publicIp' => 'public_ip',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * lastDays  **参数解释**： 查询时间范围天数，与自定义查询时间begin_time，end_time互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostId  **参数解释**： 服务器ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * privateIp  **参数解释**： 服务器私有IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器实例名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-512位 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * exportSize  **参数解释**： 导出数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventType  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * eventTypes  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * severity  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * category  **参数解释**： 事件类别 **约束限制**： 不涉及 **取值范围**： - host：主机安全事件 - container：容器安全事件  **默认取值**： 不涉及
    * beginTime  **参数解释**： 自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * endTime  **参数解释**： 自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventClassIds  **参数解释**： 事件标识 **约束限制**： 不涉及 **取值范围**： - container_1001：容器命名空间 - container_1002：容器开放端口 - container_1003：容器安全选项 - container_1004：容器挂载目录 - containerescape_0001：容器高危系统调用 - containerescape_0002：Shocker攻击 - containerescape_0003：DirtCow攻击 - containerescape_0004：容器文件逃逸攻击 - dockerfile_001：用户自定义容器保护文件被修改 - dockerfile_002：容器文件系统可执行文件被修改 - dockerproc_001：容器进程异常事件上报 - fileprotect_0001：文件提权 - fileprotect_0002：关键文件变更 - fileprotect_0003：关键文件路径变更 - fileprotect_0004：文件/目录变更 - av_1002：病毒 - av_1003：蠕虫 - av_1004：木马 - av_1005：僵尸网络 - av_1006：后门 - av_1007：间谍软件 - av_1008：恶意广告软件 - av_1009：钓鱼 - av_1010：Rootkit - av_1011：勒索软件 - av_1012：黑客工具 - av_1013：灰色软件 - av_1015：Webshell - av_1016：挖矿软件 - login_0001：尝试暴力破解 - login_0002：爆破成功 - login_1001：登录成功 - login_1002：异地登录 - login_1003：弱口令 - malware_0001：shell变更事件上报 - malware_0002：反弹shell事件上报 - malware_1001：恶意程序 - procdet_0001：进程异常行为检测 - procdet_0002：进程提权 - procreport_0001：危险命令 - user_1001：账号变更 - user_1002：风险账号 - vmescape_0001：虚拟机敏感命令执行 - vmescape_0002：虚拟化进程访问敏感文件 - vmescape_0003：虚拟机异常端口访问 - webshell_0001：网站后门 - network_1001：恶意挖矿 - network_1002：对外DDoS攻击 - network_1003：恶意扫描 - network_1004：敏感区域攻击 - ransomware_0001：勒索攻击 - ransomware_0002：勒索攻击 - ransomware_0003：勒索攻击 - fileless_0001：进程注入 - fileless_0002：动态库注入进程 - fileless_0003：关键配置变更 - fileless_0004：环境变量变更 - fileless_0005：内存文件进程 - fileless_0006：vdso劫持 - crontab_1001：Crontab可疑任务 - vul_exploit_0001：Redis漏洞利用攻击 - vul_exploit_0002：Hadoop漏洞利用攻击 - vul_exploit_0003：MySQL漏洞利用攻击 - rootkit_0001：可疑rootkit文件 - rootkit_0002：可疑内核模块 - RASP_0004：上传Webshell - RASP_0018：无文件Webshell - blockexec_001：已知勒索攻击 - hips_0001：Windows Defender防护被禁用 - hips_0002：可疑的黑客工具 - hips_0003：可疑的勒索加密行为 - hips_0004：隐藏账号创建 - hips_0005：读取用户密码凭据 - hips_0006：可疑的SAM文件导出 - hips_0007：可疑shadow copy删除操作 - hips_0008：备份文件删除 - hips_0009：可疑勒索病毒操作注册表 - hips_0010：可疑的异常进程行为 - hips_0011：可疑的扫描探测 - hips_0012：可疑的勒索病毒脚本运行 - hips_0013：可疑的挖矿命令执行 - hips_0014：可疑的禁用windows安全中心 - hips_0015：可疑的停止防火墙服务行为 - hips_0016：可疑的系统自动恢复禁用 - hips_0017：Office 创建可执行文件 - hips_0018：带宏Office文件异常创建 - hips_0019：可疑的注册表操作 - hips_0020：Confluence远程代码执行 - hips_0021：MSDT远程代码执行 - portscan_0001：通用端口扫描 - portscan_0002：秘密端口扫描 - k8s_1001：Kubernetes事件删除 - k8s_1002：创建特权Pod - k8s_1003：Pod中使用交互式shell - k8s_1004：创建敏感目录Pod - k8s_1005：创建主机网络的Pod - k8s_1006：创建主机Pid空间的Pod - k8s_1007：普通pod访问APIserver认证失败 - k8s_1008：普通Pod通过Curl访问APIServer - k8s_1009：系统管理空间执行exec - k8s_1010：系统管理空间创建Pod - k8s_1011：创建静态Pod - k8s_1012：创建DaemonSet - k8s_1013：创建集群计划任务 - k8s_1014：Secrets操作 - k8s_1015：枚举用户可执行的操作 - k8s_1016：高权限RoleBinding或ClusterRoleBinding - k8s_1017：ServiceAccount创建 - k8s_1018：创建Cronjob - k8s_1019：Pod中exec使用交互式shell - k8s_1020：无权限访问Apiserver - k8s_1021：使用curl访问APIServer - k8s_1022：Ingress漏洞 - k8s_1023：中间人攻击 - k8s_1024：蠕虫挖矿木马 - k8s_1025：K8s事件删除 - k8s_1026：SelfSubjectRulesReview场景 - imgblock_0001：镜像白名单阻断 - imgblock_0002：镜像黑名单阻断 - imgblock_0003：镜像标签白名单阻断 - imgblock_0004：镜像标签黑名单阻断 - imgblock_0005：创建容器白名单阻断 - imgblock_0006：创建容器黑名单阻断 - imgblock_0007：容器mount proc阻断 - imgblock_0008：容器seccomp unconfined阻断 - imgblock_0009：容器特权阻断 - imgblock_0010：容器capabilities阻断 - honeypot_0001：可疑的蜜罐异常访问  **默认取值**： 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * attackTag  **参数解释**: 攻击标识 **约束限制**: 不涉及 **取值范围**: - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * tagList  **参数解释**: 事件标签列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * attCk  **参数解释**: ATT&CK攻击阶段 **约束限制**: 不涉及 **取值范围**: - Reconnaissance：侦察 - Initial Access：初始访问 - Execution：执行 - Persistence：持久化 - Privilege Escalation：权限提升 - Defense Evasion：防御绕过 - Credential Access：凭据访问 - Command and Control：命令与控制 - Impact：影响破坏  **默认取值**: 不涉及
    * eventName  **参数解释**： 告警名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * eventIdList  **参数解释**： 告警id集合 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及 \"\"
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 不涉及 **取值范围**： - true：自动阻断告警 - false：不自动阻断告警 **默认取值**： 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * eventId  **参数解释**： 事件编号 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * publicIp  **参数解释**： 服务器公网IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'lastDays' => 'setLastDays',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'privateIp' => 'setPrivateIp',
            'containerName' => 'setContainerName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'exportSize' => 'setExportSize',
            'eventType' => 'setEventType',
            'eventTypes' => 'setEventTypes',
            'handleStatus' => 'setHandleStatus',
            'severity' => 'setSeverity',
            'category' => 'setCategory',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'eventClassIds' => 'setEventClassIds',
            'severityList' => 'setSeverityList',
            'attackTag' => 'setAttackTag',
            'assetValue' => 'setAssetValue',
            'tagList' => 'setTagList',
            'attCk' => 'setAttCk',
            'eventName' => 'setEventName',
            'eventIdList' => 'setEventIdList',
            'autoBlock' => 'setAutoBlock',
            'clusterId' => 'setClusterId',
            'eventId' => 'setEventId',
            'publicIp' => 'setPublicIp',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * lastDays  **参数解释**： 查询时间范围天数，与自定义查询时间begin_time，end_time互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * hostName  **参数解释**： 服务器名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * hostId  **参数解释**： 服务器ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
    * privateIp  **参数解释**： 服务器私有IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * containerName  **参数解释**： 容器实例名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-512位 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * exportSize  **参数解释**： 导出数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventType  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * eventTypes  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    * handleStatus  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    * severity  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * category  **参数解释**： 事件类别 **约束限制**： 不涉及 **取值范围**： - host：主机安全事件 - container：容器安全事件  **默认取值**： 不涉及
    * beginTime  **参数解释**： 自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * endTime  **参数解释**： 自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * eventClassIds  **参数解释**： 事件标识 **约束限制**： 不涉及 **取值范围**： - container_1001：容器命名空间 - container_1002：容器开放端口 - container_1003：容器安全选项 - container_1004：容器挂载目录 - containerescape_0001：容器高危系统调用 - containerescape_0002：Shocker攻击 - containerescape_0003：DirtCow攻击 - containerescape_0004：容器文件逃逸攻击 - dockerfile_001：用户自定义容器保护文件被修改 - dockerfile_002：容器文件系统可执行文件被修改 - dockerproc_001：容器进程异常事件上报 - fileprotect_0001：文件提权 - fileprotect_0002：关键文件变更 - fileprotect_0003：关键文件路径变更 - fileprotect_0004：文件/目录变更 - av_1002：病毒 - av_1003：蠕虫 - av_1004：木马 - av_1005：僵尸网络 - av_1006：后门 - av_1007：间谍软件 - av_1008：恶意广告软件 - av_1009：钓鱼 - av_1010：Rootkit - av_1011：勒索软件 - av_1012：黑客工具 - av_1013：灰色软件 - av_1015：Webshell - av_1016：挖矿软件 - login_0001：尝试暴力破解 - login_0002：爆破成功 - login_1001：登录成功 - login_1002：异地登录 - login_1003：弱口令 - malware_0001：shell变更事件上报 - malware_0002：反弹shell事件上报 - malware_1001：恶意程序 - procdet_0001：进程异常行为检测 - procdet_0002：进程提权 - procreport_0001：危险命令 - user_1001：账号变更 - user_1002：风险账号 - vmescape_0001：虚拟机敏感命令执行 - vmescape_0002：虚拟化进程访问敏感文件 - vmescape_0003：虚拟机异常端口访问 - webshell_0001：网站后门 - network_1001：恶意挖矿 - network_1002：对外DDoS攻击 - network_1003：恶意扫描 - network_1004：敏感区域攻击 - ransomware_0001：勒索攻击 - ransomware_0002：勒索攻击 - ransomware_0003：勒索攻击 - fileless_0001：进程注入 - fileless_0002：动态库注入进程 - fileless_0003：关键配置变更 - fileless_0004：环境变量变更 - fileless_0005：内存文件进程 - fileless_0006：vdso劫持 - crontab_1001：Crontab可疑任务 - vul_exploit_0001：Redis漏洞利用攻击 - vul_exploit_0002：Hadoop漏洞利用攻击 - vul_exploit_0003：MySQL漏洞利用攻击 - rootkit_0001：可疑rootkit文件 - rootkit_0002：可疑内核模块 - RASP_0004：上传Webshell - RASP_0018：无文件Webshell - blockexec_001：已知勒索攻击 - hips_0001：Windows Defender防护被禁用 - hips_0002：可疑的黑客工具 - hips_0003：可疑的勒索加密行为 - hips_0004：隐藏账号创建 - hips_0005：读取用户密码凭据 - hips_0006：可疑的SAM文件导出 - hips_0007：可疑shadow copy删除操作 - hips_0008：备份文件删除 - hips_0009：可疑勒索病毒操作注册表 - hips_0010：可疑的异常进程行为 - hips_0011：可疑的扫描探测 - hips_0012：可疑的勒索病毒脚本运行 - hips_0013：可疑的挖矿命令执行 - hips_0014：可疑的禁用windows安全中心 - hips_0015：可疑的停止防火墙服务行为 - hips_0016：可疑的系统自动恢复禁用 - hips_0017：Office 创建可执行文件 - hips_0018：带宏Office文件异常创建 - hips_0019：可疑的注册表操作 - hips_0020：Confluence远程代码执行 - hips_0021：MSDT远程代码执行 - portscan_0001：通用端口扫描 - portscan_0002：秘密端口扫描 - k8s_1001：Kubernetes事件删除 - k8s_1002：创建特权Pod - k8s_1003：Pod中使用交互式shell - k8s_1004：创建敏感目录Pod - k8s_1005：创建主机网络的Pod - k8s_1006：创建主机Pid空间的Pod - k8s_1007：普通pod访问APIserver认证失败 - k8s_1008：普通Pod通过Curl访问APIServer - k8s_1009：系统管理空间执行exec - k8s_1010：系统管理空间创建Pod - k8s_1011：创建静态Pod - k8s_1012：创建DaemonSet - k8s_1013：创建集群计划任务 - k8s_1014：Secrets操作 - k8s_1015：枚举用户可执行的操作 - k8s_1016：高权限RoleBinding或ClusterRoleBinding - k8s_1017：ServiceAccount创建 - k8s_1018：创建Cronjob - k8s_1019：Pod中exec使用交互式shell - k8s_1020：无权限访问Apiserver - k8s_1021：使用curl访问APIServer - k8s_1022：Ingress漏洞 - k8s_1023：中间人攻击 - k8s_1024：蠕虫挖矿木马 - k8s_1025：K8s事件删除 - k8s_1026：SelfSubjectRulesReview场景 - imgblock_0001：镜像白名单阻断 - imgblock_0002：镜像黑名单阻断 - imgblock_0003：镜像标签白名单阻断 - imgblock_0004：镜像标签黑名单阻断 - imgblock_0005：创建容器白名单阻断 - imgblock_0006：创建容器黑名单阻断 - imgblock_0007：容器mount proc阻断 - imgblock_0008：容器seccomp unconfined阻断 - imgblock_0009：容器特权阻断 - imgblock_0010：容器capabilities阻断 - honeypot_0001：可疑的蜜罐异常访问  **默认取值**： 不涉及
    * severityList  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    * attackTag  **参数解释**: 攻击标识 **约束限制**: 不涉及 **取值范围**: - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * tagList  **参数解释**: 事件标签列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    * attCk  **参数解释**: ATT&CK攻击阶段 **约束限制**: 不涉及 **取值范围**: - Reconnaissance：侦察 - Initial Access：初始访问 - Execution：执行 - Persistence：持久化 - Privilege Escalation：权限提升 - Defense Evasion：防御绕过 - Credential Access：凭据访问 - Command and Control：命令与控制 - Impact：影响破坏  **默认取值**: 不涉及
    * eventName  **参数解释**： 告警名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * eventIdList  **参数解释**： 告警id集合 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及 \"\"
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 不涉及 **取值范围**： - true：自动阻断告警 - false：不自动阻断告警 **默认取值**： 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * eventId  **参数解释**： 事件编号 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * publicIp  **参数解释**： 服务器公网IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'lastDays' => 'getLastDays',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'privateIp' => 'getPrivateIp',
            'containerName' => 'getContainerName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'exportSize' => 'getExportSize',
            'eventType' => 'getEventType',
            'eventTypes' => 'getEventTypes',
            'handleStatus' => 'getHandleStatus',
            'severity' => 'getSeverity',
            'category' => 'getCategory',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'eventClassIds' => 'getEventClassIds',
            'severityList' => 'getSeverityList',
            'attackTag' => 'getAttackTag',
            'assetValue' => 'getAssetValue',
            'tagList' => 'getTagList',
            'attCk' => 'getAttCk',
            'eventName' => 'getEventName',
            'eventIdList' => 'getEventIdList',
            'autoBlock' => 'getAutoBlock',
            'clusterId' => 'getClusterId',
            'eventId' => 'getEventId',
            'publicIp' => 'getPublicIp',
            'body' => 'getBody'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['lastDays'] = isset($data['lastDays']) ? $data['lastDays'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['exportSize'] = isset($data['exportSize']) ? $data['exportSize'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventTypes'] = isset($data['eventTypes']) ? $data['eventTypes'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['eventClassIds'] = isset($data['eventClassIds']) ? $data['eventClassIds'] : null;
        $this->container['severityList'] = isset($data['severityList']) ? $data['severityList'] : null;
        $this->container['attackTag'] = isset($data['attackTag']) ? $data['attackTag'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['attCk'] = isset($data['attCk']) ? $data['attCk'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventIdList'] = isset($data['eventIdList']) ? $data['eventIdList'] : null;
        $this->container['autoBlock'] = isset($data['autoBlock']) ? $data['autoBlock'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['lastDays']) && ($this->container['lastDays'] > 30)) {
                $invalidProperties[] = "invalid value for 'lastDays', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['lastDays']) && ($this->container['lastDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'lastDays', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
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
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 512)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] > 100000)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 30000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 1000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 1000.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) > 32)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) < 0)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attCk']) && (mb_strlen($this->container['attCk']) > 32)) {
                $invalidProperties[] = "invalid value for 'attCk', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['attCk']) && (mb_strlen($this->container['attCk']) < 0)) {
                $invalidProperties[] = "invalid value for 'attCk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) > 128)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventName']) && !preg_match("/^.*$/", $this->container['eventName'])) {
                $invalidProperties[] = "invalid value for 'eventName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^.*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['eventId'] === null) {
            $invalidProperties[] = "'eventId' can't be null";
        }
            if ((mb_strlen($this->container['eventId']) > 128)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['eventId']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets lastDays
    *  **参数解释**： 查询时间范围天数，与自定义查询时间begin_time，end_time互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getLastDays()
    {
        return $this->container['lastDays'];
    }

    /**
    * Sets lastDays
    *
    * @param int|null $lastDays **参数解释**： 查询时间范围天数，与自定义查询时间begin_time，end_time互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLastDays($lastDays)
    {
        $this->container['lastDays'] = $lastDays;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 服务器名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
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
    * @param string|null $hostName **参数解释**： 服务器名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
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
    *  **参数解释**： 服务器ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
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
    * @param string|null $hostId **参数解释**： 服务器ID **约束限制**： 不涉及 **取值范围**： 字符长度1-256位 **默认取值**： 不涉及
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
    *  **参数解释**： 服务器私有IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
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
    * @param string|null $privateIp **参数解释**： 服务器私有IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器实例名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-512位 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName **参数解释**： 容器实例名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-512位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets exportSize
    *  **参数解释**： 导出数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getExportSize()
    {
        return $this->container['exportSize'];
    }

    /**
    * Sets exportSize
    *
    * @param int|null $exportSize **参数解释**： 导出数量 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setExportSize($exportSize)
    {
        $this->container['exportSize'] = $exportSize;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
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
    * @param int|null $eventType **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventTypes
    *  **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    *
    * @return int[]|null
    */
    public function getEventTypes()
    {
        return $this->container['eventTypes'];
    }

    /**
    * Sets eventTypes
    *
    * @param int[]|null $eventTypes **参数解释**： 事件类型 **约束限制**： 不涉及 **取值范围**： - 1001：通用恶意软件 - 1002：病毒 - 1003：蠕虫 - 1004：木马 - 1005：僵尸网络 - 1006：后门 - 1010：Rootkit - 1011：勒索软件 - 1012：黑客工具 - 1015：Webshell - 1016：挖矿 - 1017：反弹Shell - 2001：一般漏洞利用 - 2012：远程代码执行 - 2047：Redis漏洞利用 - 2048：Hadoop漏洞利用 - 2049：MySQL漏洞利用 - 3002：文件提权 - 3003：进程提权 - 3004：关键文件变更 - 3005：文件/目录变更 - 3007：进程异常行为 - 3015：高危命令执行 - 3018：异常Shell - 3027：Crontab可疑任务 - 3029：系统安全防护被禁用 - 3030：备份删除 - 3031：异常注册表操作 - 3036：容器镜像阻断 - 4002：暴力破解 - 4004：异常登录 - 4006：非法系统账号 - 4014：用户账号添加 - 4020：用户密码窃取 - 6002：端口扫描 - 6003：主机扫描 - 13001：Kubernetes事件删除 - 13002：Pod异常行为 - 13003：枚举用户信息 - 13004：绑定集群用户角色 - 11001：高级威胁事件  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setEventTypes($eventTypes)
    {
        $this->container['eventTypes'] = $eventTypes;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
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
    * @param string|null $handleStatus **参数解释**: 处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled：未处理 - handled：已处理  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
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
    * @param string|null $severity **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 事件类别 **约束限制**： 不涉及 **取值范围**： - host：主机安全事件 - container：容器安全事件  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释**： 事件类别 **约束限制**： 不涉及 **取值范围**： - host：主机安全事件 - container：容器安全事件  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**： 自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime **参数解释**： 自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**： 自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets eventClassIds
    *  **参数解释**： 事件标识 **约束限制**： 不涉及 **取值范围**： - container_1001：容器命名空间 - container_1002：容器开放端口 - container_1003：容器安全选项 - container_1004：容器挂载目录 - containerescape_0001：容器高危系统调用 - containerescape_0002：Shocker攻击 - containerescape_0003：DirtCow攻击 - containerescape_0004：容器文件逃逸攻击 - dockerfile_001：用户自定义容器保护文件被修改 - dockerfile_002：容器文件系统可执行文件被修改 - dockerproc_001：容器进程异常事件上报 - fileprotect_0001：文件提权 - fileprotect_0002：关键文件变更 - fileprotect_0003：关键文件路径变更 - fileprotect_0004：文件/目录变更 - av_1002：病毒 - av_1003：蠕虫 - av_1004：木马 - av_1005：僵尸网络 - av_1006：后门 - av_1007：间谍软件 - av_1008：恶意广告软件 - av_1009：钓鱼 - av_1010：Rootkit - av_1011：勒索软件 - av_1012：黑客工具 - av_1013：灰色软件 - av_1015：Webshell - av_1016：挖矿软件 - login_0001：尝试暴力破解 - login_0002：爆破成功 - login_1001：登录成功 - login_1002：异地登录 - login_1003：弱口令 - malware_0001：shell变更事件上报 - malware_0002：反弹shell事件上报 - malware_1001：恶意程序 - procdet_0001：进程异常行为检测 - procdet_0002：进程提权 - procreport_0001：危险命令 - user_1001：账号变更 - user_1002：风险账号 - vmescape_0001：虚拟机敏感命令执行 - vmescape_0002：虚拟化进程访问敏感文件 - vmescape_0003：虚拟机异常端口访问 - webshell_0001：网站后门 - network_1001：恶意挖矿 - network_1002：对外DDoS攻击 - network_1003：恶意扫描 - network_1004：敏感区域攻击 - ransomware_0001：勒索攻击 - ransomware_0002：勒索攻击 - ransomware_0003：勒索攻击 - fileless_0001：进程注入 - fileless_0002：动态库注入进程 - fileless_0003：关键配置变更 - fileless_0004：环境变量变更 - fileless_0005：内存文件进程 - fileless_0006：vdso劫持 - crontab_1001：Crontab可疑任务 - vul_exploit_0001：Redis漏洞利用攻击 - vul_exploit_0002：Hadoop漏洞利用攻击 - vul_exploit_0003：MySQL漏洞利用攻击 - rootkit_0001：可疑rootkit文件 - rootkit_0002：可疑内核模块 - RASP_0004：上传Webshell - RASP_0018：无文件Webshell - blockexec_001：已知勒索攻击 - hips_0001：Windows Defender防护被禁用 - hips_0002：可疑的黑客工具 - hips_0003：可疑的勒索加密行为 - hips_0004：隐藏账号创建 - hips_0005：读取用户密码凭据 - hips_0006：可疑的SAM文件导出 - hips_0007：可疑shadow copy删除操作 - hips_0008：备份文件删除 - hips_0009：可疑勒索病毒操作注册表 - hips_0010：可疑的异常进程行为 - hips_0011：可疑的扫描探测 - hips_0012：可疑的勒索病毒脚本运行 - hips_0013：可疑的挖矿命令执行 - hips_0014：可疑的禁用windows安全中心 - hips_0015：可疑的停止防火墙服务行为 - hips_0016：可疑的系统自动恢复禁用 - hips_0017：Office 创建可执行文件 - hips_0018：带宏Office文件异常创建 - hips_0019：可疑的注册表操作 - hips_0020：Confluence远程代码执行 - hips_0021：MSDT远程代码执行 - portscan_0001：通用端口扫描 - portscan_0002：秘密端口扫描 - k8s_1001：Kubernetes事件删除 - k8s_1002：创建特权Pod - k8s_1003：Pod中使用交互式shell - k8s_1004：创建敏感目录Pod - k8s_1005：创建主机网络的Pod - k8s_1006：创建主机Pid空间的Pod - k8s_1007：普通pod访问APIserver认证失败 - k8s_1008：普通Pod通过Curl访问APIServer - k8s_1009：系统管理空间执行exec - k8s_1010：系统管理空间创建Pod - k8s_1011：创建静态Pod - k8s_1012：创建DaemonSet - k8s_1013：创建集群计划任务 - k8s_1014：Secrets操作 - k8s_1015：枚举用户可执行的操作 - k8s_1016：高权限RoleBinding或ClusterRoleBinding - k8s_1017：ServiceAccount创建 - k8s_1018：创建Cronjob - k8s_1019：Pod中exec使用交互式shell - k8s_1020：无权限访问Apiserver - k8s_1021：使用curl访问APIServer - k8s_1022：Ingress漏洞 - k8s_1023：中间人攻击 - k8s_1024：蠕虫挖矿木马 - k8s_1025：K8s事件删除 - k8s_1026：SelfSubjectRulesReview场景 - imgblock_0001：镜像白名单阻断 - imgblock_0002：镜像黑名单阻断 - imgblock_0003：镜像标签白名单阻断 - imgblock_0004：镜像标签黑名单阻断 - imgblock_0005：创建容器白名单阻断 - imgblock_0006：创建容器黑名单阻断 - imgblock_0007：容器mount proc阻断 - imgblock_0008：容器seccomp unconfined阻断 - imgblock_0009：容器特权阻断 - imgblock_0010：容器capabilities阻断 - honeypot_0001：可疑的蜜罐异常访问  **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getEventClassIds()
    {
        return $this->container['eventClassIds'];
    }

    /**
    * Sets eventClassIds
    *
    * @param string[]|null $eventClassIds **参数解释**： 事件标识 **约束限制**： 不涉及 **取值范围**： - container_1001：容器命名空间 - container_1002：容器开放端口 - container_1003：容器安全选项 - container_1004：容器挂载目录 - containerescape_0001：容器高危系统调用 - containerescape_0002：Shocker攻击 - containerescape_0003：DirtCow攻击 - containerescape_0004：容器文件逃逸攻击 - dockerfile_001：用户自定义容器保护文件被修改 - dockerfile_002：容器文件系统可执行文件被修改 - dockerproc_001：容器进程异常事件上报 - fileprotect_0001：文件提权 - fileprotect_0002：关键文件变更 - fileprotect_0003：关键文件路径变更 - fileprotect_0004：文件/目录变更 - av_1002：病毒 - av_1003：蠕虫 - av_1004：木马 - av_1005：僵尸网络 - av_1006：后门 - av_1007：间谍软件 - av_1008：恶意广告软件 - av_1009：钓鱼 - av_1010：Rootkit - av_1011：勒索软件 - av_1012：黑客工具 - av_1013：灰色软件 - av_1015：Webshell - av_1016：挖矿软件 - login_0001：尝试暴力破解 - login_0002：爆破成功 - login_1001：登录成功 - login_1002：异地登录 - login_1003：弱口令 - malware_0001：shell变更事件上报 - malware_0002：反弹shell事件上报 - malware_1001：恶意程序 - procdet_0001：进程异常行为检测 - procdet_0002：进程提权 - procreport_0001：危险命令 - user_1001：账号变更 - user_1002：风险账号 - vmescape_0001：虚拟机敏感命令执行 - vmescape_0002：虚拟化进程访问敏感文件 - vmescape_0003：虚拟机异常端口访问 - webshell_0001：网站后门 - network_1001：恶意挖矿 - network_1002：对外DDoS攻击 - network_1003：恶意扫描 - network_1004：敏感区域攻击 - ransomware_0001：勒索攻击 - ransomware_0002：勒索攻击 - ransomware_0003：勒索攻击 - fileless_0001：进程注入 - fileless_0002：动态库注入进程 - fileless_0003：关键配置变更 - fileless_0004：环境变量变更 - fileless_0005：内存文件进程 - fileless_0006：vdso劫持 - crontab_1001：Crontab可疑任务 - vul_exploit_0001：Redis漏洞利用攻击 - vul_exploit_0002：Hadoop漏洞利用攻击 - vul_exploit_0003：MySQL漏洞利用攻击 - rootkit_0001：可疑rootkit文件 - rootkit_0002：可疑内核模块 - RASP_0004：上传Webshell - RASP_0018：无文件Webshell - blockexec_001：已知勒索攻击 - hips_0001：Windows Defender防护被禁用 - hips_0002：可疑的黑客工具 - hips_0003：可疑的勒索加密行为 - hips_0004：隐藏账号创建 - hips_0005：读取用户密码凭据 - hips_0006：可疑的SAM文件导出 - hips_0007：可疑shadow copy删除操作 - hips_0008：备份文件删除 - hips_0009：可疑勒索病毒操作注册表 - hips_0010：可疑的异常进程行为 - hips_0011：可疑的扫描探测 - hips_0012：可疑的勒索病毒脚本运行 - hips_0013：可疑的挖矿命令执行 - hips_0014：可疑的禁用windows安全中心 - hips_0015：可疑的停止防火墙服务行为 - hips_0016：可疑的系统自动恢复禁用 - hips_0017：Office 创建可执行文件 - hips_0018：带宏Office文件异常创建 - hips_0019：可疑的注册表操作 - hips_0020：Confluence远程代码执行 - hips_0021：MSDT远程代码执行 - portscan_0001：通用端口扫描 - portscan_0002：秘密端口扫描 - k8s_1001：Kubernetes事件删除 - k8s_1002：创建特权Pod - k8s_1003：Pod中使用交互式shell - k8s_1004：创建敏感目录Pod - k8s_1005：创建主机网络的Pod - k8s_1006：创建主机Pid空间的Pod - k8s_1007：普通pod访问APIserver认证失败 - k8s_1008：普通Pod通过Curl访问APIServer - k8s_1009：系统管理空间执行exec - k8s_1010：系统管理空间创建Pod - k8s_1011：创建静态Pod - k8s_1012：创建DaemonSet - k8s_1013：创建集群计划任务 - k8s_1014：Secrets操作 - k8s_1015：枚举用户可执行的操作 - k8s_1016：高权限RoleBinding或ClusterRoleBinding - k8s_1017：ServiceAccount创建 - k8s_1018：创建Cronjob - k8s_1019：Pod中exec使用交互式shell - k8s_1020：无权限访问Apiserver - k8s_1021：使用curl访问APIServer - k8s_1022：Ingress漏洞 - k8s_1023：中间人攻击 - k8s_1024：蠕虫挖矿木马 - k8s_1025：K8s事件删除 - k8s_1026：SelfSubjectRulesReview场景 - imgblock_0001：镜像白名单阻断 - imgblock_0002：镜像黑名单阻断 - imgblock_0003：镜像标签白名单阻断 - imgblock_0004：镜像标签黑名单阻断 - imgblock_0005：创建容器白名单阻断 - imgblock_0006：创建容器黑名单阻断 - imgblock_0007：容器mount proc阻断 - imgblock_0008：容器seccomp unconfined阻断 - imgblock_0009：容器特权阻断 - imgblock_0010：容器capabilities阻断 - honeypot_0001：可疑的蜜罐异常访问  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setEventClassIds($eventClassIds)
    {
        $this->container['eventClassIds'] = $eventClassIds;
        return $this;
    }

    /**
    * Gets severityList
    *  **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getSeverityList()
    {
        return $this->container['severityList'];
    }

    /**
    * Sets severityList
    *
    * @param string[]|null $severityList **参数解释**: 威胁等级 **约束限制**: 不涉及 **取值范围**: - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityList($severityList)
    {
        $this->container['severityList'] = $severityList;
        return $this;
    }

    /**
    * Gets attackTag
    *  **参数解释**: 攻击标识 **约束限制**: 不涉及 **取值范围**: - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性  **默认取值**: 不涉及
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
    * @param string|null $attackTag **参数解释**: 攻击标识 **约束限制**: 不涉及 **取值范围**: - attack_success：攻击成功 - attack_attempt：攻击尝试 - attack_blocked：攻击被阻断 - abnormal_behavior：异常行为 - collapsible_host：主机失陷 - system_vulnerability：系统脆弱性  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAttackTag($attackTag)
    {
        $this->container['attackTag'] = $attackTag;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
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
    * @param string|null $assetValue **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets tagList
    *  **参数解释**: 事件标签列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param string[]|null $tagList **参数解释**: 事件标签列表 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
        return $this;
    }

    /**
    * Gets attCk
    *  **参数解释**: ATT&CK攻击阶段 **约束限制**: 不涉及 **取值范围**: - Reconnaissance：侦察 - Initial Access：初始访问 - Execution：执行 - Persistence：持久化 - Privilege Escalation：权限提升 - Defense Evasion：防御绕过 - Credential Access：凭据访问 - Command and Control：命令与控制 - Impact：影响破坏  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAttCk()
    {
        return $this->container['attCk'];
    }

    /**
    * Sets attCk
    *
    * @param string|null $attCk **参数解释**: ATT&CK攻击阶段 **约束限制**: 不涉及 **取值范围**: - Reconnaissance：侦察 - Initial Access：初始访问 - Execution：执行 - Persistence：持久化 - Privilege Escalation：权限提升 - Defense Evasion：防御绕过 - Credential Access：凭据访问 - Command and Control：命令与控制 - Impact：影响破坏  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAttCk($attCk)
    {
        $this->container['attCk'] = $attCk;
        return $this;
    }

    /**
    * Gets eventName
    *  **参数解释**： 告警名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
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
    * @param string|null $eventName **参数解释**： 告警名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventIdList
    *  **参数解释**： 告警id集合 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及 \"\"
    *
    * @return string[]|null
    */
    public function getEventIdList()
    {
        return $this->container['eventIdList'];
    }

    /**
    * Sets eventIdList
    *
    * @param string[]|null $eventIdList **参数解释**： 告警id集合 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及 \"\"
    *
    * @return $this
    */
    public function setEventIdList($eventIdList)
    {
        $this->container['eventIdList'] = $eventIdList;
        return $this;
    }

    /**
    * Gets autoBlock
    *  **参数解释**： 是否自动阻断告警 **约束限制**： 不涉及 **取值范围**： - true：自动阻断告警 - false：不自动阻断告警 **默认取值**： 不涉及
    *
    * @return bool|null
    */
    public function getAutoBlock()
    {
        return $this->container['autoBlock'];
    }

    /**
    * Sets autoBlock
    *
    * @param bool|null $autoBlock **参数解释**： 是否自动阻断告警 **约束限制**： 不涉及 **取值范围**： - true：自动阻断告警 - false：不自动阻断告警 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAutoBlock($autoBlock)
    {
        $this->container['autoBlock'] = $autoBlock;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $clusterId **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets eventId
    *  **参数解释**： 事件编号 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string $eventId **参数解释**： 事件编号 **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 服务器公网IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
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
    * @param string|null $publicIp **参数解释**： 服务器公网IP **约束限制**： 不涉及 **取值范围**： 字符长度1-128位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return string[][]|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string[][]|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

