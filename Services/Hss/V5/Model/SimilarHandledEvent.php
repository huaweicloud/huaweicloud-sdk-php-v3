<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SimilarHandledEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SimilarHandledEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * similiarType  相似类型，包含如下:  - sameHostAndEventType : 相同的主机和事件类型  - sameFileHash : 相同的文件hash  - sameProcessHash : 相同的进程启动文件hash  - sameRemoteIp : 相同的攻击Ip  - sameProcessCmdline ：相同的进程命令行  - sameRegKey : 相同的注册表KEY  - sameUserName : 相同的登录用户名
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * abstract  告警摘要
    * handleMethod  **参数解释**： 处理方式，已处理的告警才有 **取值范围**： - mark_as_handled：手动处理 - ignore：忽略 - add_to_alarm_whitelist：加入告警白名单 - add_to_login_whitelist：加入登录白名单 - isolate_and_kill：隔离查杀
    * handler  处置账号信息
    * memo  处置备注信息
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'similiarType' => 'string',
            'eventClassId' => 'string',
            'eventId' => 'string',
            'eventType' => 'int',
            'severity' => 'string',
            'abstract' => 'string',
            'handleMethod' => 'string',
            'handler' => 'string',
            'memo' => 'string',
            'handleTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * similiarType  相似类型，包含如下:  - sameHostAndEventType : 相同的主机和事件类型  - sameFileHash : 相同的文件hash  - sameProcessHash : 相同的进程启动文件hash  - sameRemoteIp : 相同的攻击Ip  - sameProcessCmdline ：相同的进程命令行  - sameRegKey : 相同的注册表KEY  - sameUserName : 相同的登录用户名
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * abstract  告警摘要
    * handleMethod  **参数解释**： 处理方式，已处理的告警才有 **取值范围**： - mark_as_handled：手动处理 - ignore：忽略 - add_to_alarm_whitelist：加入告警白名单 - add_to_login_whitelist：加入登录白名单 - isolate_and_kill：隔离查杀
    * handler  处置账号信息
    * memo  处置备注信息
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'similiarType' => null,
        'eventClassId' => null,
        'eventId' => null,
        'eventType' => 'int32',
        'severity' => null,
        'abstract' => null,
        'handleMethod' => null,
        'handler' => null,
        'memo' => null,
        'handleTime' => 'int64'
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
    * similiarType  相似类型，包含如下:  - sameHostAndEventType : 相同的主机和事件类型  - sameFileHash : 相同的文件hash  - sameProcessHash : 相同的进程启动文件hash  - sameRemoteIp : 相同的攻击Ip  - sameProcessCmdline ：相同的进程命令行  - sameRegKey : 相同的注册表KEY  - sameUserName : 相同的登录用户名
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * abstract  告警摘要
    * handleMethod  **参数解释**： 处理方式，已处理的告警才有 **取值范围**： - mark_as_handled：手动处理 - ignore：忽略 - add_to_alarm_whitelist：加入告警白名单 - add_to_login_whitelist：加入登录白名单 - isolate_and_kill：隔离查杀
    * handler  处置账号信息
    * memo  处置备注信息
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'similiarType' => 'similiar_type',
            'eventClassId' => 'event_class_id',
            'eventId' => 'event_id',
            'eventType' => 'event_type',
            'severity' => 'severity',
            'abstract' => 'abstract',
            'handleMethod' => 'handle_method',
            'handler' => 'handler',
            'memo' => 'memo',
            'handleTime' => 'handle_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * similiarType  相似类型，包含如下:  - sameHostAndEventType : 相同的主机和事件类型  - sameFileHash : 相同的文件hash  - sameProcessHash : 相同的进程启动文件hash  - sameRemoteIp : 相同的攻击Ip  - sameProcessCmdline ：相同的进程命令行  - sameRegKey : 相同的注册表KEY  - sameUserName : 相同的登录用户名
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * abstract  告警摘要
    * handleMethod  **参数解释**： 处理方式，已处理的告警才有 **取值范围**： - mark_as_handled：手动处理 - ignore：忽略 - add_to_alarm_whitelist：加入告警白名单 - add_to_login_whitelist：加入登录白名单 - isolate_and_kill：隔离查杀
    * handler  处置账号信息
    * memo  处置备注信息
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'similiarType' => 'setSimiliarType',
            'eventClassId' => 'setEventClassId',
            'eventId' => 'setEventId',
            'eventType' => 'setEventType',
            'severity' => 'setSeverity',
            'abstract' => 'setAbstract',
            'handleMethod' => 'setHandleMethod',
            'handler' => 'setHandler',
            'memo' => 'setMemo',
            'handleTime' => 'setHandleTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * similiarType  相似类型，包含如下:  - sameHostAndEventType : 相同的主机和事件类型  - sameFileHash : 相同的文件hash  - sameProcessHash : 相同的进程启动文件hash  - sameRemoteIp : 相同的攻击Ip  - sameProcessCmdline ：相同的进程命令行  - sameRegKey : 相同的注册表KEY  - sameUserName : 相同的登录用户名
    * eventClassId  **参数解释**： 事件分类 **取值范围**：   - container_1001：容器命名空间   - container_1002：容器开放端口   - container_1003：容器安全选项   - container_1004：容器挂载目录   - containerescape_0001：容器高危系统调用   - containerescape_0002：Shocker攻击   - containerescape_0003：DirtCow攻击   - containerescape_0004：容器文件逃逸攻击   - dockerfile_001：用户自定义容器保护文件被修改   - dockerfile_002：容器文件系统可执行文件被修改   - dockerproc_001：容器进程异常事件上报   - fileprotect_0001：文件提权   - fileprotect_0002：关键文件变更   - fileprotect_0003：关键文件路径变更   - fileprotect_0004：文件/目录变更   - av_1002：病毒   - av_1003：蠕虫   - av_1004：木马   - av_1005：僵尸网络   - av_1006：后门   - av_1007：间谍软件   - av_1008：恶意广告软件   - av_1009：钓鱼   - av_1010：Rootkit   - av_1011：勒索软件   - av_1012：黑客工具   - av_1013：灰色软件   - av_1015：Webshell   - av_1016：挖矿软件   - login_0001：尝试暴力破解   - login_0002：爆破成功   - login_1001：登录成功   - login_1002：异地登录   - login_1003：弱口令   - malware_0001：shell变更事件上报   - malware_0002：反弹shell事件上报   - malware_1001：恶意程序   - procdet_0001：进程异常行为检测   - procdet_0002：进程提权   - procreport_0001：危险命令   - user_1001：账号变更   - user_1002：风险账号   - vmescape_0001：虚拟机敏感命令执行   - vmescape_0002：虚拟化进程访问敏感文件   - vmescape_0003：虚拟机异常端口访问   - webshell_0001：网站后门   - network_1001：恶意挖矿   - network_1002：对外DDoS攻击   - network_1003：恶意扫描   - network_1004：敏感区域攻击   - ransomware_0001：勒索攻击   - ransomware_0002：勒索攻击   - ransomware_0003：勒索攻击   - fileless_0001：进程注入   - fileless_0002：动态库注入进程   - fileless_0003：关键配置变更   - fileless_0004：环境变量变更   - fileless_0005：内存文件进程   - fileless_0006：vdso劫持   - crontab_1001：Crontab可疑任务   - vul_exploit_0001：Redis漏洞利用攻击   - vul_exploit_0002：Hadoop漏洞利用攻击   - vul_exploit_0003：MySQL漏洞利用攻击   - rootkit_0001：可疑rootkit文件   - rootkit_0002：可疑内核模块   - RASP_0004：上传Webshell   - RASP_0018：无文件Webshell   - blockexec_001：已知勒索攻击   - hips_0001：Windows Defender防护被禁用   - hips_0002：可疑的黑客工具   - hips_0003：可疑的勒索加密行为   - hips_0004：隐藏账号创建   - hips_0005：读取用户密码凭据   - hips_0006：可疑的SAM文件导出   - hips_0007：可疑shadow copy删除操作   - hips_0008：备份文件删除   - hips_0009：可疑勒索病毒操作注册表   - hips_0010：可疑的异常进程行为   - hips_0011：可疑的扫描探测   - hips_0012：可疑的勒索病毒脚本运行   - hips_0013：可疑的挖矿命令执行   - hips_0014：可疑的禁用windows安全中心   - hips_0015：可疑的停止防火墙服务行为   - hips_0016：可疑的系统自动恢复禁用   - hips_0017：Offies创建可执行文件   - hips_0018：带宏Offies文件异常创建   - hips_0019：可疑的注册表操作   - hips_0020：Confluence远程代码执行   - hips_0021：MSDT远程代码执行   - portscan_0001：通用端口扫描   - portscan_0002：秘密端口扫描   - k8s_1001：Kubernetes事件删除   - k8s_1002：创建特权Pod   - k8s_1003：Pod中使用交互式shell   - k8s_1004：创建敏感目录Pod   - k8s_1005：创建主机网络的Pod   - k8s_1006：创建主机Pid空间的Pod   - k8s_1007：普通pod访问APIserver认证失败   - k8s_1008：普通Pod通过Curl访问APIServer   - k8s_1009：系统管理空间执行exec   - k8s_1010：系统管理空间创建Pod   - k8s_1011：创建静态Pod   - k8s_1012：创建DaemonSet   - k8s_1013：创建集群计划任务   - k8s_1014：Secrets操作   - k8s_1015：枚举用户可执行的操作   - k8s_1016：高权限RoleBinding或ClusterRoleBinding   - k8s_1017：ServiceAccount创建   - k8s_1018：创建Cronjob   - k8s_1019：Pod中exec使用交互式shell   - k8s_1020：无权限访问Apiserver   - k8s_1021：使用curl访问APIServer   - k8s_1022：Ingress漏洞   - k8s_1023：中间人攻击   - k8s_1024：蠕虫挖矿木马   - k8s_1025：K8s事件删除   - k8s_1026：SelfSubjectRulesReview场景   - imgblock_0001：镜像白名单阻断   - imgblock_0002：镜像黑名单阻断   - imgblock_0003：镜像标签白名单阻断   - imgblock_0004：镜像标签黑名单阻断   - imgblock_0005：创建容器白名单阻断   - imgblock_0006：创建容器黑名单阻断   - imgblock_0007：容器mount proc阻断   - imgblock_0008：容器seccomp unconfined阻断   - imgblock_0009：容器特权阻断   - imgblock_0010：容器capabilities阻断
    * eventId  **参数解释**： 事件ID **取值范围**： 字符长度1-64位
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    * severity  **参数解释**： 威胁等级 **取值范围**： - Security：安全 - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    * abstract  告警摘要
    * handleMethod  **参数解释**： 处理方式，已处理的告警才有 **取值范围**： - mark_as_handled：手动处理 - ignore：忽略 - add_to_alarm_whitelist：加入告警白名单 - add_to_login_whitelist：加入登录白名单 - isolate_and_kill：隔离查杀
    * handler  处置账号信息
    * memo  处置备注信息
    * handleTime  **参数解释**： 处置时间，毫秒，已处理的告警才有 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'similiarType' => 'getSimiliarType',
            'eventClassId' => 'getEventClassId',
            'eventId' => 'getEventId',
            'eventType' => 'getEventType',
            'severity' => 'getSeverity',
            'abstract' => 'getAbstract',
            'handleMethod' => 'getHandleMethod',
            'handler' => 'getHandler',
            'memo' => 'getMemo',
            'handleTime' => 'getHandleTime'
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
        $this->container['similiarType'] = isset($data['similiarType']) ? $data['similiarType'] : null;
        $this->container['eventClassId'] = isset($data['eventClassId']) ? $data['eventClassId'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['abstract'] = isset($data['abstract']) ? $data['abstract'] : null;
        $this->container['handleMethod'] = isset($data['handleMethod']) ? $data['handleMethod'] : null;
        $this->container['handler'] = isset($data['handler']) ? $data['handler'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['handleTime'] = isset($data['handleTime']) ? $data['handleTime'] : null;
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
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be bigger than or equal to 0.";
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
    * Gets similiarType
    *  相似类型，包含如下:  - sameHostAndEventType : 相同的主机和事件类型  - sameFileHash : 相同的文件hash  - sameProcessHash : 相同的进程启动文件hash  - sameRemoteIp : 相同的攻击Ip  - sameProcessCmdline ：相同的进程命令行  - sameRegKey : 相同的注册表KEY  - sameUserName : 相同的登录用户名
    *
    * @return string|null
    */
    public function getSimiliarType()
    {
        return $this->container['similiarType'];
    }

    /**
    * Sets similiarType
    *
    * @param string|null $similiarType 相似类型，包含如下:  - sameHostAndEventType : 相同的主机和事件类型  - sameFileHash : 相同的文件hash  - sameProcessHash : 相同的进程启动文件hash  - sameRemoteIp : 相同的攻击Ip  - sameProcessCmdline ：相同的进程命令行  - sameRegKey : 相同的注册表KEY  - sameUserName : 相同的登录用户名
    *
    * @return $this
    */
    public function setSimiliarType($similiarType)
    {
        $this->container['similiarType'] = $similiarType;
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
    * Gets eventType
    *  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
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
    * @param int|null $eventType **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
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
    * Gets abstract
    *  告警摘要
    *
    * @return string|null
    */
    public function getAbstract()
    {
        return $this->container['abstract'];
    }

    /**
    * Sets abstract
    *
    * @param string|null $abstract 告警摘要
    *
    * @return $this
    */
    public function setAbstract($abstract)
    {
        $this->container['abstract'] = $abstract;
        return $this;
    }

    /**
    * Gets handleMethod
    *  **参数解释**： 处理方式，已处理的告警才有 **取值范围**： - mark_as_handled：手动处理 - ignore：忽略 - add_to_alarm_whitelist：加入告警白名单 - add_to_login_whitelist：加入登录白名单 - isolate_and_kill：隔离查杀
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
    * @param string|null $handleMethod **参数解释**： 处理方式，已处理的告警才有 **取值范围**： - mark_as_handled：手动处理 - ignore：忽略 - add_to_alarm_whitelist：加入告警白名单 - add_to_login_whitelist：加入登录白名单 - isolate_and_kill：隔离查杀
    *
    * @return $this
    */
    public function setHandleMethod($handleMethod)
    {
        $this->container['handleMethod'] = $handleMethod;
        return $this;
    }

    /**
    * Gets handler
    *  处置账号信息
    *
    * @return string|null
    */
    public function getHandler()
    {
        return $this->container['handler'];
    }

    /**
    * Sets handler
    *
    * @param string|null $handler 处置账号信息
    *
    * @return $this
    */
    public function setHandler($handler)
    {
        $this->container['handler'] = $handler;
        return $this;
    }

    /**
    * Gets memo
    *  处置备注信息
    *
    * @return string|null
    */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
    * Sets memo
    *
    * @param string|null $memo 处置备注信息
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
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

