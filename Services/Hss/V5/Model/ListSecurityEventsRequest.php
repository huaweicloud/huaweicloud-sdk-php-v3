<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  事件类别，包含如下:   - host : 主机安全事件   - container : 容器安全事件
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * lastDays  查询时间范围天数，与自定义查询时间begin_time，end_time互斥
    * hostName  服务器名称
    * hostId  主机ID
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * containerName  容器实例名称
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * eventTypes  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3026 : crontab提权   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * severity  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * beginTime  自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * endTime  自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * eventClassIds  事件标识，包含如下: - container_1001 : 容器命名空间 - container_1002 : 容器开放端口 - container_1003 : 容器安全选项 - container_1004 : 容器挂载目录 - containerescape_0001 : 容器高危系统调用 - containerescape_0002 : Shocker攻击 - containerescape_0003 : DirtCow攻击 - containerescape_0004 : 容器文件逃逸攻击 - dockerfile_001 : 用户自定义容器保护文件被修改 - dockerfile_002 : 容器文件系统可执行文件被修改 - dockerproc_001 : 容器进程异常事件上报 - fileprotect_0001 : 文件提权 - fileprotect_0002 : 关键文件变更 - fileprotect_0003 : 关键文件路径变更 - fileprotect_0004 : 文件/目录变更 - av_1002 : 病毒 - av_1003 : 蠕虫 - av_1004 : 木马 - av_1005 : 僵尸网络 - av_1006 : 后门 - av_1007 : 间谍软件 - av_1008 : 恶意广告软件 - av_1009 : 钓鱼 - av_1010 : Rootkit - av_1011 : 勒索软件 - av_1012 : 黑客工具 - av_1013 : 灰色软件 - av_1015 : Webshell - av_1016 : 挖矿软件 - login_0001 : 尝试暴力破解 - login_0002 : 爆破成功 - login_1001 : 登录成功 - login_1002 : 异地登录 - login_1003 : 弱口令 - malware_0001 : shell变更事件上报 - malware_0002 : 反弹shell事件上报 - malware_1001 : 恶意程序 - procdet_0001 : 进程异常行为检测 - procdet_0002 : 进程提权 - crontab_0001 : crontab脚本提权 - crontab_0002 : 恶意路径提权 - procreport_0001 : 危险命令 - user_1001 : 账号变更 - user_1002 : 风险账号 - vmescape_0001 : 虚拟机敏感命令执行 - vmescape_0002 : 虚拟化进程访问敏感文件 - vmescape_0003 : 虚拟机异常端口访问 - webshell_0001 : 网站后门 - network_1001 : 恶意挖矿 - network_1002 : 对外DDoS攻击 - network_1003 : 恶意扫描 - network_1004 : 敏感区域攻击 - ransomware_0001 : 勒索攻击 - ransomware_0002 : 勒索攻击 - ransomware_0003 : 勒索攻击 - fileless_0001 : 进程注入 - fileless_0002 : 动态库注入进程 - fileless_0003 : 关键配置变更 - fileless_0004 : 环境变量变更 - fileless_0005 : 内存文件进程 - fileless_0006 : vdso劫持 - crontab_1001 : Crontab可疑任务 - vul_exploit_0001 : Redis漏洞利用攻击 - vul_exploit_0002 : Hadoop漏洞利用攻击 - vul_exploit_0003 : MySQL漏洞利用攻击 - rootkit_0001 : 可疑rootkit文件 - rootkit_0002 : 可疑内核模块 - RASP_0004 : 上传Webshell - RASP_0018 : 无文件Webshell - blockexec_001 : 已知勒索攻击 - hips_0001 : Windows Defender防护被禁用 - hips_0002 : 可疑的黑客工具 - hips_0003 : 可疑的勒索加密行为 - hips_0004 : 隐藏账号创建 - hips_0005 : 读取用户密码凭据 - hips_0006 : 可疑的SAM文件导出 - hips_0007 : 可疑shadow copy删除操作 - hips_0008 : 备份文件删除 - hips_0009 : 可疑勒索病毒操作注册表 - hips_0010 : 可疑的异常进程行为 - hips_0011 : 可疑的扫描探测 - hips_0012 : 可疑的勒索病毒脚本运行 - hips_0013 : 可疑的挖矿命令执行 - hips_0014 : 可疑的禁用windows安全中心 - hips_0015 : 可疑的停止防火墙服务行为 - hips_0016 : 可疑的系统自动恢复禁用 - hips_0017 : Offies 创建可执行文件 - hips_0018 : 带宏Offies文件异常创建 - hips_0019 : 可疑的注册表操作 - hips_0020 : Confluence远程代码执行 - hips_0021 : MSDT远程代码执行 - portscan_0001 : 通用端口扫描 - portscan_0002 : 秘密端口扫描 - k8s_1001 : Kubernetes事件删除 - k8s_1002 : 创建特权Pod - k8s_1003 : Pod中使用交互式shell - k8s_1004 : 创建敏感目录Pod - k8s_1005 : 创建主机网络的Pod - k8s_1006 : 创建主机Pid空间的Pod - k8s_1007 : 普通pod访问APIserver认证失败 - k8s_1008 : 普通Pod通过Curl访问APIServer - k8s_1009 : 系统管理空间执行exec - k8s_1010 : 系统管理空间创建Pod - k8s_1011 : 创建静态Pod - k8s_1012 : 创建DaemonSet - k8s_1013 : 创建集群计划任务 - k8s_1014 : Secrets操作 - k8s_1015 : 枚举用户可执行的操作 - k8s_1016 : 高权限RoleBinding或ClusterRoleBinding - k8s_1017 : ServiceAccount创建 - k8s_1018 : 创建Cronjob - k8s_1019 : Pod中exec使用交互式shell - k8s_1020 : 无权限访问Apiserver - k8s_1021 : 使用curl访问APIServer - k8s_1022 : Ingress漏洞 - k8s_1023 : 中间人攻击 - k8s_1024 : 蠕虫挖矿木马 - k8s_1025 : K8s事件删除 - k8s_1026 : SelfSubjectRulesReview场景 - imgblock_0001 : 镜像白名单阻断 - imgblock_0002 : 镜像黑名单阻断 - imgblock_0003 : 镜像标签白名单阻断 - imgblock_0004 : 镜像标签黑名单阻断 - imgblock_0005 : 创建容器白名单阻断 - imgblock_0006 : 创建容器黑名单阻断 - imgblock_0007 : 容器mount proc阻断 - imgblock_0008 : 容器seccomp unconfined阻断 - imgblock_0009 : 容器特权阻断 - imgblock_0010 : 容器capabilities阻断
    * severityList  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * attackTag  攻击标识，包含如下：   - attack_success : 攻击成功   - attack_attempt : 攻击尝试   - attack_blocked : 攻击被阻断   - abnormal_behavior : 异常行为   - collapsible_host : 主机失陷   - system_vulnerability : 系统脆弱性
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * tagList  事件标签列表，例如:[\"热点事件\"]
    * attCk  ATT&CK攻击阶，包含如下：   - Reconnaissance : 侦察   - Initial Access : 初始访问   - Execution : 执行   - Persistence : 持久化   - Privilege Escalation : 权限提升   - Defense Evasion : 防御绕过   - Credential Access : 凭据访问   - Command and Control : 命令与控制   - Impact : 影响破坏
    * eventName  告警名称
    * autoBlock  是否自动阻断告警
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'region' => 'string',
            'enterpriseProjectId' => 'string',
            'lastDays' => 'int',
            'hostName' => 'string',
            'hostId' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'containerName' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'eventTypes' => 'int[]',
            'handleStatus' => 'string',
            'severity' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'eventClassIds' => 'string[]',
            'severityList' => 'string[]',
            'attackTag' => 'string',
            'assetValue' => 'string',
            'tagList' => 'string[]',
            'attCk' => 'string',
            'eventName' => 'string',
            'autoBlock' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  事件类别，包含如下:   - host : 主机安全事件   - container : 容器安全事件
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * lastDays  查询时间范围天数，与自定义查询时间begin_time，end_time互斥
    * hostName  服务器名称
    * hostId  主机ID
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * containerName  容器实例名称
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * eventTypes  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3026 : crontab提权   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * severity  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * beginTime  自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * endTime  自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * eventClassIds  事件标识，包含如下: - container_1001 : 容器命名空间 - container_1002 : 容器开放端口 - container_1003 : 容器安全选项 - container_1004 : 容器挂载目录 - containerescape_0001 : 容器高危系统调用 - containerescape_0002 : Shocker攻击 - containerescape_0003 : DirtCow攻击 - containerescape_0004 : 容器文件逃逸攻击 - dockerfile_001 : 用户自定义容器保护文件被修改 - dockerfile_002 : 容器文件系统可执行文件被修改 - dockerproc_001 : 容器进程异常事件上报 - fileprotect_0001 : 文件提权 - fileprotect_0002 : 关键文件变更 - fileprotect_0003 : 关键文件路径变更 - fileprotect_0004 : 文件/目录变更 - av_1002 : 病毒 - av_1003 : 蠕虫 - av_1004 : 木马 - av_1005 : 僵尸网络 - av_1006 : 后门 - av_1007 : 间谍软件 - av_1008 : 恶意广告软件 - av_1009 : 钓鱼 - av_1010 : Rootkit - av_1011 : 勒索软件 - av_1012 : 黑客工具 - av_1013 : 灰色软件 - av_1015 : Webshell - av_1016 : 挖矿软件 - login_0001 : 尝试暴力破解 - login_0002 : 爆破成功 - login_1001 : 登录成功 - login_1002 : 异地登录 - login_1003 : 弱口令 - malware_0001 : shell变更事件上报 - malware_0002 : 反弹shell事件上报 - malware_1001 : 恶意程序 - procdet_0001 : 进程异常行为检测 - procdet_0002 : 进程提权 - crontab_0001 : crontab脚本提权 - crontab_0002 : 恶意路径提权 - procreport_0001 : 危险命令 - user_1001 : 账号变更 - user_1002 : 风险账号 - vmescape_0001 : 虚拟机敏感命令执行 - vmescape_0002 : 虚拟化进程访问敏感文件 - vmescape_0003 : 虚拟机异常端口访问 - webshell_0001 : 网站后门 - network_1001 : 恶意挖矿 - network_1002 : 对外DDoS攻击 - network_1003 : 恶意扫描 - network_1004 : 敏感区域攻击 - ransomware_0001 : 勒索攻击 - ransomware_0002 : 勒索攻击 - ransomware_0003 : 勒索攻击 - fileless_0001 : 进程注入 - fileless_0002 : 动态库注入进程 - fileless_0003 : 关键配置变更 - fileless_0004 : 环境变量变更 - fileless_0005 : 内存文件进程 - fileless_0006 : vdso劫持 - crontab_1001 : Crontab可疑任务 - vul_exploit_0001 : Redis漏洞利用攻击 - vul_exploit_0002 : Hadoop漏洞利用攻击 - vul_exploit_0003 : MySQL漏洞利用攻击 - rootkit_0001 : 可疑rootkit文件 - rootkit_0002 : 可疑内核模块 - RASP_0004 : 上传Webshell - RASP_0018 : 无文件Webshell - blockexec_001 : 已知勒索攻击 - hips_0001 : Windows Defender防护被禁用 - hips_0002 : 可疑的黑客工具 - hips_0003 : 可疑的勒索加密行为 - hips_0004 : 隐藏账号创建 - hips_0005 : 读取用户密码凭据 - hips_0006 : 可疑的SAM文件导出 - hips_0007 : 可疑shadow copy删除操作 - hips_0008 : 备份文件删除 - hips_0009 : 可疑勒索病毒操作注册表 - hips_0010 : 可疑的异常进程行为 - hips_0011 : 可疑的扫描探测 - hips_0012 : 可疑的勒索病毒脚本运行 - hips_0013 : 可疑的挖矿命令执行 - hips_0014 : 可疑的禁用windows安全中心 - hips_0015 : 可疑的停止防火墙服务行为 - hips_0016 : 可疑的系统自动恢复禁用 - hips_0017 : Offies 创建可执行文件 - hips_0018 : 带宏Offies文件异常创建 - hips_0019 : 可疑的注册表操作 - hips_0020 : Confluence远程代码执行 - hips_0021 : MSDT远程代码执行 - portscan_0001 : 通用端口扫描 - portscan_0002 : 秘密端口扫描 - k8s_1001 : Kubernetes事件删除 - k8s_1002 : 创建特权Pod - k8s_1003 : Pod中使用交互式shell - k8s_1004 : 创建敏感目录Pod - k8s_1005 : 创建主机网络的Pod - k8s_1006 : 创建主机Pid空间的Pod - k8s_1007 : 普通pod访问APIserver认证失败 - k8s_1008 : 普通Pod通过Curl访问APIServer - k8s_1009 : 系统管理空间执行exec - k8s_1010 : 系统管理空间创建Pod - k8s_1011 : 创建静态Pod - k8s_1012 : 创建DaemonSet - k8s_1013 : 创建集群计划任务 - k8s_1014 : Secrets操作 - k8s_1015 : 枚举用户可执行的操作 - k8s_1016 : 高权限RoleBinding或ClusterRoleBinding - k8s_1017 : ServiceAccount创建 - k8s_1018 : 创建Cronjob - k8s_1019 : Pod中exec使用交互式shell - k8s_1020 : 无权限访问Apiserver - k8s_1021 : 使用curl访问APIServer - k8s_1022 : Ingress漏洞 - k8s_1023 : 中间人攻击 - k8s_1024 : 蠕虫挖矿木马 - k8s_1025 : K8s事件删除 - k8s_1026 : SelfSubjectRulesReview场景 - imgblock_0001 : 镜像白名单阻断 - imgblock_0002 : 镜像黑名单阻断 - imgblock_0003 : 镜像标签白名单阻断 - imgblock_0004 : 镜像标签黑名单阻断 - imgblock_0005 : 创建容器白名单阻断 - imgblock_0006 : 创建容器黑名单阻断 - imgblock_0007 : 容器mount proc阻断 - imgblock_0008 : 容器seccomp unconfined阻断 - imgblock_0009 : 容器特权阻断 - imgblock_0010 : 容器capabilities阻断
    * severityList  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * attackTag  攻击标识，包含如下：   - attack_success : 攻击成功   - attack_attempt : 攻击尝试   - attack_blocked : 攻击被阻断   - abnormal_behavior : 异常行为   - collapsible_host : 主机失陷   - system_vulnerability : 系统脆弱性
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * tagList  事件标签列表，例如:[\"热点事件\"]
    * attCk  ATT&CK攻击阶，包含如下：   - Reconnaissance : 侦察   - Initial Access : 初始访问   - Execution : 执行   - Persistence : 持久化   - Privilege Escalation : 权限提升   - Defense Evasion : 防御绕过   - Credential Access : 凭据访问   - Command and Control : 命令与控制   - Impact : 影响破坏
    * eventName  告警名称
    * autoBlock  是否自动阻断告警
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'region' => null,
        'enterpriseProjectId' => null,
        'lastDays' => 'int32',
        'hostName' => null,
        'hostId' => null,
        'privateIp' => null,
        'publicIp' => null,
        'containerName' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'eventTypes' => 'int32',
        'handleStatus' => null,
        'severity' => null,
        'beginTime' => null,
        'endTime' => null,
        'eventClassIds' => null,
        'severityList' => null,
        'attackTag' => null,
        'assetValue' => null,
        'tagList' => null,
        'attCk' => null,
        'eventName' => null,
        'autoBlock' => null
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
    * category  事件类别，包含如下:   - host : 主机安全事件   - container : 容器安全事件
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * lastDays  查询时间范围天数，与自定义查询时间begin_time，end_time互斥
    * hostName  服务器名称
    * hostId  主机ID
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * containerName  容器实例名称
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * eventTypes  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3026 : crontab提权   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * severity  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * beginTime  自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * endTime  自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * eventClassIds  事件标识，包含如下: - container_1001 : 容器命名空间 - container_1002 : 容器开放端口 - container_1003 : 容器安全选项 - container_1004 : 容器挂载目录 - containerescape_0001 : 容器高危系统调用 - containerescape_0002 : Shocker攻击 - containerescape_0003 : DirtCow攻击 - containerescape_0004 : 容器文件逃逸攻击 - dockerfile_001 : 用户自定义容器保护文件被修改 - dockerfile_002 : 容器文件系统可执行文件被修改 - dockerproc_001 : 容器进程异常事件上报 - fileprotect_0001 : 文件提权 - fileprotect_0002 : 关键文件变更 - fileprotect_0003 : 关键文件路径变更 - fileprotect_0004 : 文件/目录变更 - av_1002 : 病毒 - av_1003 : 蠕虫 - av_1004 : 木马 - av_1005 : 僵尸网络 - av_1006 : 后门 - av_1007 : 间谍软件 - av_1008 : 恶意广告软件 - av_1009 : 钓鱼 - av_1010 : Rootkit - av_1011 : 勒索软件 - av_1012 : 黑客工具 - av_1013 : 灰色软件 - av_1015 : Webshell - av_1016 : 挖矿软件 - login_0001 : 尝试暴力破解 - login_0002 : 爆破成功 - login_1001 : 登录成功 - login_1002 : 异地登录 - login_1003 : 弱口令 - malware_0001 : shell变更事件上报 - malware_0002 : 反弹shell事件上报 - malware_1001 : 恶意程序 - procdet_0001 : 进程异常行为检测 - procdet_0002 : 进程提权 - crontab_0001 : crontab脚本提权 - crontab_0002 : 恶意路径提权 - procreport_0001 : 危险命令 - user_1001 : 账号变更 - user_1002 : 风险账号 - vmescape_0001 : 虚拟机敏感命令执行 - vmescape_0002 : 虚拟化进程访问敏感文件 - vmescape_0003 : 虚拟机异常端口访问 - webshell_0001 : 网站后门 - network_1001 : 恶意挖矿 - network_1002 : 对外DDoS攻击 - network_1003 : 恶意扫描 - network_1004 : 敏感区域攻击 - ransomware_0001 : 勒索攻击 - ransomware_0002 : 勒索攻击 - ransomware_0003 : 勒索攻击 - fileless_0001 : 进程注入 - fileless_0002 : 动态库注入进程 - fileless_0003 : 关键配置变更 - fileless_0004 : 环境变量变更 - fileless_0005 : 内存文件进程 - fileless_0006 : vdso劫持 - crontab_1001 : Crontab可疑任务 - vul_exploit_0001 : Redis漏洞利用攻击 - vul_exploit_0002 : Hadoop漏洞利用攻击 - vul_exploit_0003 : MySQL漏洞利用攻击 - rootkit_0001 : 可疑rootkit文件 - rootkit_0002 : 可疑内核模块 - RASP_0004 : 上传Webshell - RASP_0018 : 无文件Webshell - blockexec_001 : 已知勒索攻击 - hips_0001 : Windows Defender防护被禁用 - hips_0002 : 可疑的黑客工具 - hips_0003 : 可疑的勒索加密行为 - hips_0004 : 隐藏账号创建 - hips_0005 : 读取用户密码凭据 - hips_0006 : 可疑的SAM文件导出 - hips_0007 : 可疑shadow copy删除操作 - hips_0008 : 备份文件删除 - hips_0009 : 可疑勒索病毒操作注册表 - hips_0010 : 可疑的异常进程行为 - hips_0011 : 可疑的扫描探测 - hips_0012 : 可疑的勒索病毒脚本运行 - hips_0013 : 可疑的挖矿命令执行 - hips_0014 : 可疑的禁用windows安全中心 - hips_0015 : 可疑的停止防火墙服务行为 - hips_0016 : 可疑的系统自动恢复禁用 - hips_0017 : Offies 创建可执行文件 - hips_0018 : 带宏Offies文件异常创建 - hips_0019 : 可疑的注册表操作 - hips_0020 : Confluence远程代码执行 - hips_0021 : MSDT远程代码执行 - portscan_0001 : 通用端口扫描 - portscan_0002 : 秘密端口扫描 - k8s_1001 : Kubernetes事件删除 - k8s_1002 : 创建特权Pod - k8s_1003 : Pod中使用交互式shell - k8s_1004 : 创建敏感目录Pod - k8s_1005 : 创建主机网络的Pod - k8s_1006 : 创建主机Pid空间的Pod - k8s_1007 : 普通pod访问APIserver认证失败 - k8s_1008 : 普通Pod通过Curl访问APIServer - k8s_1009 : 系统管理空间执行exec - k8s_1010 : 系统管理空间创建Pod - k8s_1011 : 创建静态Pod - k8s_1012 : 创建DaemonSet - k8s_1013 : 创建集群计划任务 - k8s_1014 : Secrets操作 - k8s_1015 : 枚举用户可执行的操作 - k8s_1016 : 高权限RoleBinding或ClusterRoleBinding - k8s_1017 : ServiceAccount创建 - k8s_1018 : 创建Cronjob - k8s_1019 : Pod中exec使用交互式shell - k8s_1020 : 无权限访问Apiserver - k8s_1021 : 使用curl访问APIServer - k8s_1022 : Ingress漏洞 - k8s_1023 : 中间人攻击 - k8s_1024 : 蠕虫挖矿木马 - k8s_1025 : K8s事件删除 - k8s_1026 : SelfSubjectRulesReview场景 - imgblock_0001 : 镜像白名单阻断 - imgblock_0002 : 镜像黑名单阻断 - imgblock_0003 : 镜像标签白名单阻断 - imgblock_0004 : 镜像标签黑名单阻断 - imgblock_0005 : 创建容器白名单阻断 - imgblock_0006 : 创建容器黑名单阻断 - imgblock_0007 : 容器mount proc阻断 - imgblock_0008 : 容器seccomp unconfined阻断 - imgblock_0009 : 容器特权阻断 - imgblock_0010 : 容器capabilities阻断
    * severityList  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * attackTag  攻击标识，包含如下：   - attack_success : 攻击成功   - attack_attempt : 攻击尝试   - attack_blocked : 攻击被阻断   - abnormal_behavior : 异常行为   - collapsible_host : 主机失陷   - system_vulnerability : 系统脆弱性
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * tagList  事件标签列表，例如:[\"热点事件\"]
    * attCk  ATT&CK攻击阶，包含如下：   - Reconnaissance : 侦察   - Initial Access : 初始访问   - Execution : 执行   - Persistence : 持久化   - Privilege Escalation : 权限提升   - Defense Evasion : 防御绕过   - Credential Access : 凭据访问   - Command and Control : 命令与控制   - Impact : 影响破坏
    * eventName  告警名称
    * autoBlock  是否自动阻断告警
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'region' => 'region',
            'enterpriseProjectId' => 'enterprise_project_id',
            'lastDays' => 'last_days',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'containerName' => 'container_name',
            'offset' => 'offset',
            'limit' => 'limit',
            'eventTypes' => 'event_types',
            'handleStatus' => 'handle_status',
            'severity' => 'severity',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'eventClassIds' => 'event_class_ids',
            'severityList' => 'severity_list',
            'attackTag' => 'attack_tag',
            'assetValue' => 'asset_value',
            'tagList' => 'tag_list',
            'attCk' => 'att_ck',
            'eventName' => 'event_name',
            'autoBlock' => 'auto_block'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  事件类别，包含如下:   - host : 主机安全事件   - container : 容器安全事件
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * lastDays  查询时间范围天数，与自定义查询时间begin_time，end_time互斥
    * hostName  服务器名称
    * hostId  主机ID
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * containerName  容器实例名称
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * eventTypes  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3026 : crontab提权   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * severity  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * beginTime  自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * endTime  自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * eventClassIds  事件标识，包含如下: - container_1001 : 容器命名空间 - container_1002 : 容器开放端口 - container_1003 : 容器安全选项 - container_1004 : 容器挂载目录 - containerescape_0001 : 容器高危系统调用 - containerescape_0002 : Shocker攻击 - containerescape_0003 : DirtCow攻击 - containerescape_0004 : 容器文件逃逸攻击 - dockerfile_001 : 用户自定义容器保护文件被修改 - dockerfile_002 : 容器文件系统可执行文件被修改 - dockerproc_001 : 容器进程异常事件上报 - fileprotect_0001 : 文件提权 - fileprotect_0002 : 关键文件变更 - fileprotect_0003 : 关键文件路径变更 - fileprotect_0004 : 文件/目录变更 - av_1002 : 病毒 - av_1003 : 蠕虫 - av_1004 : 木马 - av_1005 : 僵尸网络 - av_1006 : 后门 - av_1007 : 间谍软件 - av_1008 : 恶意广告软件 - av_1009 : 钓鱼 - av_1010 : Rootkit - av_1011 : 勒索软件 - av_1012 : 黑客工具 - av_1013 : 灰色软件 - av_1015 : Webshell - av_1016 : 挖矿软件 - login_0001 : 尝试暴力破解 - login_0002 : 爆破成功 - login_1001 : 登录成功 - login_1002 : 异地登录 - login_1003 : 弱口令 - malware_0001 : shell变更事件上报 - malware_0002 : 反弹shell事件上报 - malware_1001 : 恶意程序 - procdet_0001 : 进程异常行为检测 - procdet_0002 : 进程提权 - crontab_0001 : crontab脚本提权 - crontab_0002 : 恶意路径提权 - procreport_0001 : 危险命令 - user_1001 : 账号变更 - user_1002 : 风险账号 - vmescape_0001 : 虚拟机敏感命令执行 - vmescape_0002 : 虚拟化进程访问敏感文件 - vmescape_0003 : 虚拟机异常端口访问 - webshell_0001 : 网站后门 - network_1001 : 恶意挖矿 - network_1002 : 对外DDoS攻击 - network_1003 : 恶意扫描 - network_1004 : 敏感区域攻击 - ransomware_0001 : 勒索攻击 - ransomware_0002 : 勒索攻击 - ransomware_0003 : 勒索攻击 - fileless_0001 : 进程注入 - fileless_0002 : 动态库注入进程 - fileless_0003 : 关键配置变更 - fileless_0004 : 环境变量变更 - fileless_0005 : 内存文件进程 - fileless_0006 : vdso劫持 - crontab_1001 : Crontab可疑任务 - vul_exploit_0001 : Redis漏洞利用攻击 - vul_exploit_0002 : Hadoop漏洞利用攻击 - vul_exploit_0003 : MySQL漏洞利用攻击 - rootkit_0001 : 可疑rootkit文件 - rootkit_0002 : 可疑内核模块 - RASP_0004 : 上传Webshell - RASP_0018 : 无文件Webshell - blockexec_001 : 已知勒索攻击 - hips_0001 : Windows Defender防护被禁用 - hips_0002 : 可疑的黑客工具 - hips_0003 : 可疑的勒索加密行为 - hips_0004 : 隐藏账号创建 - hips_0005 : 读取用户密码凭据 - hips_0006 : 可疑的SAM文件导出 - hips_0007 : 可疑shadow copy删除操作 - hips_0008 : 备份文件删除 - hips_0009 : 可疑勒索病毒操作注册表 - hips_0010 : 可疑的异常进程行为 - hips_0011 : 可疑的扫描探测 - hips_0012 : 可疑的勒索病毒脚本运行 - hips_0013 : 可疑的挖矿命令执行 - hips_0014 : 可疑的禁用windows安全中心 - hips_0015 : 可疑的停止防火墙服务行为 - hips_0016 : 可疑的系统自动恢复禁用 - hips_0017 : Offies 创建可执行文件 - hips_0018 : 带宏Offies文件异常创建 - hips_0019 : 可疑的注册表操作 - hips_0020 : Confluence远程代码执行 - hips_0021 : MSDT远程代码执行 - portscan_0001 : 通用端口扫描 - portscan_0002 : 秘密端口扫描 - k8s_1001 : Kubernetes事件删除 - k8s_1002 : 创建特权Pod - k8s_1003 : Pod中使用交互式shell - k8s_1004 : 创建敏感目录Pod - k8s_1005 : 创建主机网络的Pod - k8s_1006 : 创建主机Pid空间的Pod - k8s_1007 : 普通pod访问APIserver认证失败 - k8s_1008 : 普通Pod通过Curl访问APIServer - k8s_1009 : 系统管理空间执行exec - k8s_1010 : 系统管理空间创建Pod - k8s_1011 : 创建静态Pod - k8s_1012 : 创建DaemonSet - k8s_1013 : 创建集群计划任务 - k8s_1014 : Secrets操作 - k8s_1015 : 枚举用户可执行的操作 - k8s_1016 : 高权限RoleBinding或ClusterRoleBinding - k8s_1017 : ServiceAccount创建 - k8s_1018 : 创建Cronjob - k8s_1019 : Pod中exec使用交互式shell - k8s_1020 : 无权限访问Apiserver - k8s_1021 : 使用curl访问APIServer - k8s_1022 : Ingress漏洞 - k8s_1023 : 中间人攻击 - k8s_1024 : 蠕虫挖矿木马 - k8s_1025 : K8s事件删除 - k8s_1026 : SelfSubjectRulesReview场景 - imgblock_0001 : 镜像白名单阻断 - imgblock_0002 : 镜像黑名单阻断 - imgblock_0003 : 镜像标签白名单阻断 - imgblock_0004 : 镜像标签黑名单阻断 - imgblock_0005 : 创建容器白名单阻断 - imgblock_0006 : 创建容器黑名单阻断 - imgblock_0007 : 容器mount proc阻断 - imgblock_0008 : 容器seccomp unconfined阻断 - imgblock_0009 : 容器特权阻断 - imgblock_0010 : 容器capabilities阻断
    * severityList  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * attackTag  攻击标识，包含如下：   - attack_success : 攻击成功   - attack_attempt : 攻击尝试   - attack_blocked : 攻击被阻断   - abnormal_behavior : 异常行为   - collapsible_host : 主机失陷   - system_vulnerability : 系统脆弱性
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * tagList  事件标签列表，例如:[\"热点事件\"]
    * attCk  ATT&CK攻击阶，包含如下：   - Reconnaissance : 侦察   - Initial Access : 初始访问   - Execution : 执行   - Persistence : 持久化   - Privilege Escalation : 权限提升   - Defense Evasion : 防御绕过   - Credential Access : 凭据访问   - Command and Control : 命令与控制   - Impact : 影响破坏
    * eventName  告警名称
    * autoBlock  是否自动阻断告警
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'region' => 'setRegion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'lastDays' => 'setLastDays',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'containerName' => 'setContainerName',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'eventTypes' => 'setEventTypes',
            'handleStatus' => 'setHandleStatus',
            'severity' => 'setSeverity',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'eventClassIds' => 'setEventClassIds',
            'severityList' => 'setSeverityList',
            'attackTag' => 'setAttackTag',
            'assetValue' => 'setAssetValue',
            'tagList' => 'setTagList',
            'attCk' => 'setAttCk',
            'eventName' => 'setEventName',
            'autoBlock' => 'setAutoBlock'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  事件类别，包含如下:   - host : 主机安全事件   - container : 容器安全事件
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * lastDays  查询时间范围天数，与自定义查询时间begin_time，end_time互斥
    * hostName  服务器名称
    * hostId  主机ID
    * privateIp  服务器私有IP
    * publicIp  服务器公网IP
    * containerName  容器实例名称
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * eventTypes  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3026 : crontab提权   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
    * handleStatus  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
    * severity  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * beginTime  自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * endTime  自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    * eventClassIds  事件标识，包含如下: - container_1001 : 容器命名空间 - container_1002 : 容器开放端口 - container_1003 : 容器安全选项 - container_1004 : 容器挂载目录 - containerescape_0001 : 容器高危系统调用 - containerescape_0002 : Shocker攻击 - containerescape_0003 : DirtCow攻击 - containerescape_0004 : 容器文件逃逸攻击 - dockerfile_001 : 用户自定义容器保护文件被修改 - dockerfile_002 : 容器文件系统可执行文件被修改 - dockerproc_001 : 容器进程异常事件上报 - fileprotect_0001 : 文件提权 - fileprotect_0002 : 关键文件变更 - fileprotect_0003 : 关键文件路径变更 - fileprotect_0004 : 文件/目录变更 - av_1002 : 病毒 - av_1003 : 蠕虫 - av_1004 : 木马 - av_1005 : 僵尸网络 - av_1006 : 后门 - av_1007 : 间谍软件 - av_1008 : 恶意广告软件 - av_1009 : 钓鱼 - av_1010 : Rootkit - av_1011 : 勒索软件 - av_1012 : 黑客工具 - av_1013 : 灰色软件 - av_1015 : Webshell - av_1016 : 挖矿软件 - login_0001 : 尝试暴力破解 - login_0002 : 爆破成功 - login_1001 : 登录成功 - login_1002 : 异地登录 - login_1003 : 弱口令 - malware_0001 : shell变更事件上报 - malware_0002 : 反弹shell事件上报 - malware_1001 : 恶意程序 - procdet_0001 : 进程异常行为检测 - procdet_0002 : 进程提权 - crontab_0001 : crontab脚本提权 - crontab_0002 : 恶意路径提权 - procreport_0001 : 危险命令 - user_1001 : 账号变更 - user_1002 : 风险账号 - vmescape_0001 : 虚拟机敏感命令执行 - vmescape_0002 : 虚拟化进程访问敏感文件 - vmescape_0003 : 虚拟机异常端口访问 - webshell_0001 : 网站后门 - network_1001 : 恶意挖矿 - network_1002 : 对外DDoS攻击 - network_1003 : 恶意扫描 - network_1004 : 敏感区域攻击 - ransomware_0001 : 勒索攻击 - ransomware_0002 : 勒索攻击 - ransomware_0003 : 勒索攻击 - fileless_0001 : 进程注入 - fileless_0002 : 动态库注入进程 - fileless_0003 : 关键配置变更 - fileless_0004 : 环境变量变更 - fileless_0005 : 内存文件进程 - fileless_0006 : vdso劫持 - crontab_1001 : Crontab可疑任务 - vul_exploit_0001 : Redis漏洞利用攻击 - vul_exploit_0002 : Hadoop漏洞利用攻击 - vul_exploit_0003 : MySQL漏洞利用攻击 - rootkit_0001 : 可疑rootkit文件 - rootkit_0002 : 可疑内核模块 - RASP_0004 : 上传Webshell - RASP_0018 : 无文件Webshell - blockexec_001 : 已知勒索攻击 - hips_0001 : Windows Defender防护被禁用 - hips_0002 : 可疑的黑客工具 - hips_0003 : 可疑的勒索加密行为 - hips_0004 : 隐藏账号创建 - hips_0005 : 读取用户密码凭据 - hips_0006 : 可疑的SAM文件导出 - hips_0007 : 可疑shadow copy删除操作 - hips_0008 : 备份文件删除 - hips_0009 : 可疑勒索病毒操作注册表 - hips_0010 : 可疑的异常进程行为 - hips_0011 : 可疑的扫描探测 - hips_0012 : 可疑的勒索病毒脚本运行 - hips_0013 : 可疑的挖矿命令执行 - hips_0014 : 可疑的禁用windows安全中心 - hips_0015 : 可疑的停止防火墙服务行为 - hips_0016 : 可疑的系统自动恢复禁用 - hips_0017 : Offies 创建可执行文件 - hips_0018 : 带宏Offies文件异常创建 - hips_0019 : 可疑的注册表操作 - hips_0020 : Confluence远程代码执行 - hips_0021 : MSDT远程代码执行 - portscan_0001 : 通用端口扫描 - portscan_0002 : 秘密端口扫描 - k8s_1001 : Kubernetes事件删除 - k8s_1002 : 创建特权Pod - k8s_1003 : Pod中使用交互式shell - k8s_1004 : 创建敏感目录Pod - k8s_1005 : 创建主机网络的Pod - k8s_1006 : 创建主机Pid空间的Pod - k8s_1007 : 普通pod访问APIserver认证失败 - k8s_1008 : 普通Pod通过Curl访问APIServer - k8s_1009 : 系统管理空间执行exec - k8s_1010 : 系统管理空间创建Pod - k8s_1011 : 创建静态Pod - k8s_1012 : 创建DaemonSet - k8s_1013 : 创建集群计划任务 - k8s_1014 : Secrets操作 - k8s_1015 : 枚举用户可执行的操作 - k8s_1016 : 高权限RoleBinding或ClusterRoleBinding - k8s_1017 : ServiceAccount创建 - k8s_1018 : 创建Cronjob - k8s_1019 : Pod中exec使用交互式shell - k8s_1020 : 无权限访问Apiserver - k8s_1021 : 使用curl访问APIServer - k8s_1022 : Ingress漏洞 - k8s_1023 : 中间人攻击 - k8s_1024 : 蠕虫挖矿木马 - k8s_1025 : K8s事件删除 - k8s_1026 : SelfSubjectRulesReview场景 - imgblock_0001 : 镜像白名单阻断 - imgblock_0002 : 镜像黑名单阻断 - imgblock_0003 : 镜像标签白名单阻断 - imgblock_0004 : 镜像标签黑名单阻断 - imgblock_0005 : 创建容器白名单阻断 - imgblock_0006 : 创建容器黑名单阻断 - imgblock_0007 : 容器mount proc阻断 - imgblock_0008 : 容器seccomp unconfined阻断 - imgblock_0009 : 容器特权阻断 - imgblock_0010 : 容器capabilities阻断
    * severityList  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    * attackTag  攻击标识，包含如下：   - attack_success : 攻击成功   - attack_attempt : 攻击尝试   - attack_blocked : 攻击被阻断   - abnormal_behavior : 异常行为   - collapsible_host : 主机失陷   - system_vulnerability : 系统脆弱性
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * tagList  事件标签列表，例如:[\"热点事件\"]
    * attCk  ATT&CK攻击阶，包含如下：   - Reconnaissance : 侦察   - Initial Access : 初始访问   - Execution : 执行   - Persistence : 持久化   - Privilege Escalation : 权限提升   - Defense Evasion : 防御绕过   - Credential Access : 凭据访问   - Command and Control : 命令与控制   - Impact : 影响破坏
    * eventName  告警名称
    * autoBlock  是否自动阻断告警
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'region' => 'getRegion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'lastDays' => 'getLastDays',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'containerName' => 'getContainerName',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'eventTypes' => 'getEventTypes',
            'handleStatus' => 'getHandleStatus',
            'severity' => 'getSeverity',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'eventClassIds' => 'getEventClassIds',
            'severityList' => 'getSeverityList',
            'attackTag' => 'getAttackTag',
            'assetValue' => 'getAssetValue',
            'tagList' => 'getTagList',
            'attCk' => 'getAttCk',
            'eventName' => 'getEventName',
            'autoBlock' => 'getAutoBlock'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['lastDays'] = isset($data['lastDays']) ? $data['lastDays'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['eventTypes'] = isset($data['eventTypes']) ? $data['eventTypes'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['eventClassIds'] = isset($data['eventClassIds']) ? $data['eventClassIds'] : null;
        $this->container['severityList'] = isset($data['severityList']) ? $data['severityList'] : null;
        $this->container['attackTag'] = isset($data['attackTag']) ? $data['attackTag'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['attCk'] = isset($data['attCk']) ? $data['attCk'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['autoBlock'] = isset($data['autoBlock']) ? $data['autoBlock'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && !preg_match("/^.*$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 256.";
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
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 512)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
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
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 13)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 13)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 13.";
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
    * Gets category
    *  事件类别，包含如下:   - host : 主机安全事件   - container : 容器安全事件
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
    * @param string $category 事件类别，包含如下:   - host : 主机安全事件   - container : 容器安全事件
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets region
    *  Region ID
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region Region ID
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
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
    * @param string|null $enterpriseProjectId 主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
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
    *  查询时间范围天数，与自定义查询时间begin_time，end_time互斥
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
    * @param int|null $lastDays 查询时间范围天数，与自定义查询时间begin_time，end_time互斥
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
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
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
    *  主机ID
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
    * @param string|null $hostId 主机ID
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
    *  服务器私有IP
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
    * @param string|null $privateIp 服务器私有IP
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
    *  服务器公网IP
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
    * @param string|null $publicIp 服务器公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets containerName
    *  容器实例名称
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
    * @param string|null $containerName 容器实例名称
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
    *  偏移量：指定返回记录的开始位置
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
    * @param int|null $offset 偏移量：指定返回记录的开始位置
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
    *  每页显示个数
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
    * @param int|null $limit 每页显示个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets eventTypes
    *  事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3026 : crontab提权   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
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
    * @param int[]|null $eventTypes 事件类型，包含如下:   - 1001 : 通用恶意软件   - 1002 : 病毒   - 1003 : 蠕虫   - 1004 : 木马   - 1005 : 僵尸网络   - 1006 : 后门   - 1010 : Rootkit   - 1011 : 勒索软件   - 1012 ：黑客工具   - 1015 : Webshell   - 1016 : 挖矿   - 1017 : 反弹Shell   - 2001 : 一般漏洞利用   - 2012 : 远程代码执行   - 2047 : Redis漏洞利用   - 2048 : Hadoop漏洞利用   - 2049 : MySQL漏洞利用   - 3002 : 文件提权   - 3003 : 进程提权   - 3004 : 关键文件变更   - 3005 : 文件/目录变更   - 3007 : 进程异常行为   - 3015 : 高危命令执行   - 3018 : 异常Shell   - 3026 : crontab提权   - 3027 : Crontab可疑任务   - 3029 ：系统安全防护被禁用   - 3030 ：备份删除   - 3031 ：异常注册表操作   - 3036 : 容器镜像阻断   - 4002 : 暴力破解   - 4004 : 异常登录   - 4006 : 非法系统账号   - 4014 : 用户账号添加   - 4020 : 用户密码窃取   - 6002 : 端口扫描   - 6003 : 主机扫描   - 13001 : Kubernetes事件删除   - 13002 : Pod异常行为   - 13003 : 枚举用户信息   - 13004 : 绑定集群用户角色
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
    *  处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
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
    * @param string|null $handleStatus 处置状态，包含如下:   - unhandled ：未处理   - handled : 已处理
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
    *  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
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
    * @param string|null $severity 威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets beginTime
    *  自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 自定义查询时间，与查询时间范围天数互斥，查询时间段的起始时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
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
    *  自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 自定义时间，查询时间段的终止时间，毫秒级时间戳，end_time减去begin_time小于等于2天，与查询时间范围天数互斥
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
    *  事件标识，包含如下: - container_1001 : 容器命名空间 - container_1002 : 容器开放端口 - container_1003 : 容器安全选项 - container_1004 : 容器挂载目录 - containerescape_0001 : 容器高危系统调用 - containerescape_0002 : Shocker攻击 - containerescape_0003 : DirtCow攻击 - containerescape_0004 : 容器文件逃逸攻击 - dockerfile_001 : 用户自定义容器保护文件被修改 - dockerfile_002 : 容器文件系统可执行文件被修改 - dockerproc_001 : 容器进程异常事件上报 - fileprotect_0001 : 文件提权 - fileprotect_0002 : 关键文件变更 - fileprotect_0003 : 关键文件路径变更 - fileprotect_0004 : 文件/目录变更 - av_1002 : 病毒 - av_1003 : 蠕虫 - av_1004 : 木马 - av_1005 : 僵尸网络 - av_1006 : 后门 - av_1007 : 间谍软件 - av_1008 : 恶意广告软件 - av_1009 : 钓鱼 - av_1010 : Rootkit - av_1011 : 勒索软件 - av_1012 : 黑客工具 - av_1013 : 灰色软件 - av_1015 : Webshell - av_1016 : 挖矿软件 - login_0001 : 尝试暴力破解 - login_0002 : 爆破成功 - login_1001 : 登录成功 - login_1002 : 异地登录 - login_1003 : 弱口令 - malware_0001 : shell变更事件上报 - malware_0002 : 反弹shell事件上报 - malware_1001 : 恶意程序 - procdet_0001 : 进程异常行为检测 - procdet_0002 : 进程提权 - crontab_0001 : crontab脚本提权 - crontab_0002 : 恶意路径提权 - procreport_0001 : 危险命令 - user_1001 : 账号变更 - user_1002 : 风险账号 - vmescape_0001 : 虚拟机敏感命令执行 - vmescape_0002 : 虚拟化进程访问敏感文件 - vmescape_0003 : 虚拟机异常端口访问 - webshell_0001 : 网站后门 - network_1001 : 恶意挖矿 - network_1002 : 对外DDoS攻击 - network_1003 : 恶意扫描 - network_1004 : 敏感区域攻击 - ransomware_0001 : 勒索攻击 - ransomware_0002 : 勒索攻击 - ransomware_0003 : 勒索攻击 - fileless_0001 : 进程注入 - fileless_0002 : 动态库注入进程 - fileless_0003 : 关键配置变更 - fileless_0004 : 环境变量变更 - fileless_0005 : 内存文件进程 - fileless_0006 : vdso劫持 - crontab_1001 : Crontab可疑任务 - vul_exploit_0001 : Redis漏洞利用攻击 - vul_exploit_0002 : Hadoop漏洞利用攻击 - vul_exploit_0003 : MySQL漏洞利用攻击 - rootkit_0001 : 可疑rootkit文件 - rootkit_0002 : 可疑内核模块 - RASP_0004 : 上传Webshell - RASP_0018 : 无文件Webshell - blockexec_001 : 已知勒索攻击 - hips_0001 : Windows Defender防护被禁用 - hips_0002 : 可疑的黑客工具 - hips_0003 : 可疑的勒索加密行为 - hips_0004 : 隐藏账号创建 - hips_0005 : 读取用户密码凭据 - hips_0006 : 可疑的SAM文件导出 - hips_0007 : 可疑shadow copy删除操作 - hips_0008 : 备份文件删除 - hips_0009 : 可疑勒索病毒操作注册表 - hips_0010 : 可疑的异常进程行为 - hips_0011 : 可疑的扫描探测 - hips_0012 : 可疑的勒索病毒脚本运行 - hips_0013 : 可疑的挖矿命令执行 - hips_0014 : 可疑的禁用windows安全中心 - hips_0015 : 可疑的停止防火墙服务行为 - hips_0016 : 可疑的系统自动恢复禁用 - hips_0017 : Offies 创建可执行文件 - hips_0018 : 带宏Offies文件异常创建 - hips_0019 : 可疑的注册表操作 - hips_0020 : Confluence远程代码执行 - hips_0021 : MSDT远程代码执行 - portscan_0001 : 通用端口扫描 - portscan_0002 : 秘密端口扫描 - k8s_1001 : Kubernetes事件删除 - k8s_1002 : 创建特权Pod - k8s_1003 : Pod中使用交互式shell - k8s_1004 : 创建敏感目录Pod - k8s_1005 : 创建主机网络的Pod - k8s_1006 : 创建主机Pid空间的Pod - k8s_1007 : 普通pod访问APIserver认证失败 - k8s_1008 : 普通Pod通过Curl访问APIServer - k8s_1009 : 系统管理空间执行exec - k8s_1010 : 系统管理空间创建Pod - k8s_1011 : 创建静态Pod - k8s_1012 : 创建DaemonSet - k8s_1013 : 创建集群计划任务 - k8s_1014 : Secrets操作 - k8s_1015 : 枚举用户可执行的操作 - k8s_1016 : 高权限RoleBinding或ClusterRoleBinding - k8s_1017 : ServiceAccount创建 - k8s_1018 : 创建Cronjob - k8s_1019 : Pod中exec使用交互式shell - k8s_1020 : 无权限访问Apiserver - k8s_1021 : 使用curl访问APIServer - k8s_1022 : Ingress漏洞 - k8s_1023 : 中间人攻击 - k8s_1024 : 蠕虫挖矿木马 - k8s_1025 : K8s事件删除 - k8s_1026 : SelfSubjectRulesReview场景 - imgblock_0001 : 镜像白名单阻断 - imgblock_0002 : 镜像黑名单阻断 - imgblock_0003 : 镜像标签白名单阻断 - imgblock_0004 : 镜像标签黑名单阻断 - imgblock_0005 : 创建容器白名单阻断 - imgblock_0006 : 创建容器黑名单阻断 - imgblock_0007 : 容器mount proc阻断 - imgblock_0008 : 容器seccomp unconfined阻断 - imgblock_0009 : 容器特权阻断 - imgblock_0010 : 容器capabilities阻断
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
    * @param string[]|null $eventClassIds 事件标识，包含如下: - container_1001 : 容器命名空间 - container_1002 : 容器开放端口 - container_1003 : 容器安全选项 - container_1004 : 容器挂载目录 - containerescape_0001 : 容器高危系统调用 - containerescape_0002 : Shocker攻击 - containerescape_0003 : DirtCow攻击 - containerescape_0004 : 容器文件逃逸攻击 - dockerfile_001 : 用户自定义容器保护文件被修改 - dockerfile_002 : 容器文件系统可执行文件被修改 - dockerproc_001 : 容器进程异常事件上报 - fileprotect_0001 : 文件提权 - fileprotect_0002 : 关键文件变更 - fileprotect_0003 : 关键文件路径变更 - fileprotect_0004 : 文件/目录变更 - av_1002 : 病毒 - av_1003 : 蠕虫 - av_1004 : 木马 - av_1005 : 僵尸网络 - av_1006 : 后门 - av_1007 : 间谍软件 - av_1008 : 恶意广告软件 - av_1009 : 钓鱼 - av_1010 : Rootkit - av_1011 : 勒索软件 - av_1012 : 黑客工具 - av_1013 : 灰色软件 - av_1015 : Webshell - av_1016 : 挖矿软件 - login_0001 : 尝试暴力破解 - login_0002 : 爆破成功 - login_1001 : 登录成功 - login_1002 : 异地登录 - login_1003 : 弱口令 - malware_0001 : shell变更事件上报 - malware_0002 : 反弹shell事件上报 - malware_1001 : 恶意程序 - procdet_0001 : 进程异常行为检测 - procdet_0002 : 进程提权 - crontab_0001 : crontab脚本提权 - crontab_0002 : 恶意路径提权 - procreport_0001 : 危险命令 - user_1001 : 账号变更 - user_1002 : 风险账号 - vmescape_0001 : 虚拟机敏感命令执行 - vmescape_0002 : 虚拟化进程访问敏感文件 - vmescape_0003 : 虚拟机异常端口访问 - webshell_0001 : 网站后门 - network_1001 : 恶意挖矿 - network_1002 : 对外DDoS攻击 - network_1003 : 恶意扫描 - network_1004 : 敏感区域攻击 - ransomware_0001 : 勒索攻击 - ransomware_0002 : 勒索攻击 - ransomware_0003 : 勒索攻击 - fileless_0001 : 进程注入 - fileless_0002 : 动态库注入进程 - fileless_0003 : 关键配置变更 - fileless_0004 : 环境变量变更 - fileless_0005 : 内存文件进程 - fileless_0006 : vdso劫持 - crontab_1001 : Crontab可疑任务 - vul_exploit_0001 : Redis漏洞利用攻击 - vul_exploit_0002 : Hadoop漏洞利用攻击 - vul_exploit_0003 : MySQL漏洞利用攻击 - rootkit_0001 : 可疑rootkit文件 - rootkit_0002 : 可疑内核模块 - RASP_0004 : 上传Webshell - RASP_0018 : 无文件Webshell - blockexec_001 : 已知勒索攻击 - hips_0001 : Windows Defender防护被禁用 - hips_0002 : 可疑的黑客工具 - hips_0003 : 可疑的勒索加密行为 - hips_0004 : 隐藏账号创建 - hips_0005 : 读取用户密码凭据 - hips_0006 : 可疑的SAM文件导出 - hips_0007 : 可疑shadow copy删除操作 - hips_0008 : 备份文件删除 - hips_0009 : 可疑勒索病毒操作注册表 - hips_0010 : 可疑的异常进程行为 - hips_0011 : 可疑的扫描探测 - hips_0012 : 可疑的勒索病毒脚本运行 - hips_0013 : 可疑的挖矿命令执行 - hips_0014 : 可疑的禁用windows安全中心 - hips_0015 : 可疑的停止防火墙服务行为 - hips_0016 : 可疑的系统自动恢复禁用 - hips_0017 : Offies 创建可执行文件 - hips_0018 : 带宏Offies文件异常创建 - hips_0019 : 可疑的注册表操作 - hips_0020 : Confluence远程代码执行 - hips_0021 : MSDT远程代码执行 - portscan_0001 : 通用端口扫描 - portscan_0002 : 秘密端口扫描 - k8s_1001 : Kubernetes事件删除 - k8s_1002 : 创建特权Pod - k8s_1003 : Pod中使用交互式shell - k8s_1004 : 创建敏感目录Pod - k8s_1005 : 创建主机网络的Pod - k8s_1006 : 创建主机Pid空间的Pod - k8s_1007 : 普通pod访问APIserver认证失败 - k8s_1008 : 普通Pod通过Curl访问APIServer - k8s_1009 : 系统管理空间执行exec - k8s_1010 : 系统管理空间创建Pod - k8s_1011 : 创建静态Pod - k8s_1012 : 创建DaemonSet - k8s_1013 : 创建集群计划任务 - k8s_1014 : Secrets操作 - k8s_1015 : 枚举用户可执行的操作 - k8s_1016 : 高权限RoleBinding或ClusterRoleBinding - k8s_1017 : ServiceAccount创建 - k8s_1018 : 创建Cronjob - k8s_1019 : Pod中exec使用交互式shell - k8s_1020 : 无权限访问Apiserver - k8s_1021 : 使用curl访问APIServer - k8s_1022 : Ingress漏洞 - k8s_1023 : 中间人攻击 - k8s_1024 : 蠕虫挖矿木马 - k8s_1025 : K8s事件删除 - k8s_1026 : SelfSubjectRulesReview场景 - imgblock_0001 : 镜像白名单阻断 - imgblock_0002 : 镜像黑名单阻断 - imgblock_0003 : 镜像标签白名单阻断 - imgblock_0004 : 镜像标签黑名单阻断 - imgblock_0005 : 创建容器白名单阻断 - imgblock_0006 : 创建容器黑名单阻断 - imgblock_0007 : 容器mount proc阻断 - imgblock_0008 : 容器seccomp unconfined阻断 - imgblock_0009 : 容器特权阻断 - imgblock_0010 : 容器capabilities阻断
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
    *  威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
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
    * @param string[]|null $severityList 威胁等级，包含如下:   - Security ：安全   - Low : 低危   - Medium : 中危   - High : 高危   - Critical : 危急
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
    *  攻击标识，包含如下：   - attack_success : 攻击成功   - attack_attempt : 攻击尝试   - attack_blocked : 攻击被阻断   - abnormal_behavior : 异常行为   - collapsible_host : 主机失陷   - system_vulnerability : 系统脆弱性
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
    * @param string|null $attackTag 攻击标识，包含如下：   - attack_success : 攻击成功   - attack_attempt : 攻击尝试   - attack_blocked : 攻击被阻断   - abnormal_behavior : 异常行为   - collapsible_host : 主机失陷   - system_vulnerability : 系统脆弱性
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
    *  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
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
    * @param string|null $assetValue 资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
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
    *  事件标签列表，例如:[\"热点事件\"]
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
    * @param string[]|null $tagList 事件标签列表，例如:[\"热点事件\"]
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
    *  ATT&CK攻击阶，包含如下：   - Reconnaissance : 侦察   - Initial Access : 初始访问   - Execution : 执行   - Persistence : 持久化   - Privilege Escalation : 权限提升   - Defense Evasion : 防御绕过   - Credential Access : 凭据访问   - Command and Control : 命令与控制   - Impact : 影响破坏
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
    * @param string|null $attCk ATT&CK攻击阶，包含如下：   - Reconnaissance : 侦察   - Initial Access : 初始访问   - Execution : 执行   - Persistence : 持久化   - Privilege Escalation : 权限提升   - Defense Evasion : 防御绕过   - Credential Access : 凭据访问   - Command and Control : 命令与控制   - Impact : 影响破坏
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
    *  告警名称
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
    * @param string|null $eventName 告警名称
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets autoBlock
    *  是否自动阻断告警
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
    * @param bool|null $autoBlock 是否自动阻断告警
    *
    * @return $this
    */
    public function setAutoBlock($autoBlock)
    {
        $this->container['autoBlock'] = $autoBlock;
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

