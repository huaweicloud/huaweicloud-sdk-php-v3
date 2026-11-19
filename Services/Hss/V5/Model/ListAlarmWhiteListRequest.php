<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmWhiteListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmWhiteListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * hash  事件白名单SHA256
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'enterpriseProjectId' => 'string',
            'hash' => 'string',
            'eventType' => 'int',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * hash  事件白名单SHA256
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'enterpriseProjectId' => null,
        'hash' => null,
        'eventType' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32'
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
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * hash  事件白名单SHA256
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'enterpriseProjectId' => 'enterprise_project_id',
            'hash' => 'hash',
            'eventType' => 'event_type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * hash  事件白名单SHA256
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'hash' => 'setHash',
            'eventType' => 'setEventType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * hash  事件白名单SHA256
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'hash' => 'getHash',
            'eventType' => 'getEventType',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 64)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) < 1)) {
                $invalidProperties[] = "invalid value for 'hash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hash']) && !preg_match("/^.*$/", $this->container['hash'])) {
                $invalidProperties[] = "invalid value for 'hash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 30000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 1000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 1000.";
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
    * Gets hash
    *  事件白名单SHA256
    *
    * @return string|null
    */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
    * Sets hash
    *
    * @param string|null $hash 事件白名单SHA256
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
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
    * @param int|null $eventType **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
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

