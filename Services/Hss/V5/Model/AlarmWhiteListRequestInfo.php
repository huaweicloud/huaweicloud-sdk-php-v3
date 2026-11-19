<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmWhiteListRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmWhiteListRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * hash  **参数解释**: 事件白名单SHA256 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * description  **参数解释**: 描述信息。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * deleteWhiteRule  **参数解释**: 是否删除告警白名单规则(仅删除的白名单是规则类型时使用) **约束限制**: 不涉及 **取值范围**: - true：删除告警白名单规则 - false: 不删除告警白名单规则  **默认取值**: 不涉及
    * whiteField  **参数解释**: 加白字段 **约束限制**: 不涉及 **取值范围**: - \"file_path\"：文件路径 - \"process_path\"：进程路径 - \"login_ip\"：登录ip - \"reg_key\"：注册表key - \"process_cmdline\"： 进程命令行 - \"username\"： 用户名  **默认取值**: 不涉及
    * judgeType  **参数解释**: 通配符 **约束限制**: 不涉及 **取值范围**:   - \"equal\"： 相等   - \"not_equal\"：不相等   - \"contain\"： 包含   - \"not_contain\"： 不包含  **默认取值**: 不涉及
    * fieldValue  **参数解释**: 加白字段值 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * fileHash  **参数解释**: 文件哈希 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * filePath  **参数解释**: 文件路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'int',
            'hash' => 'string',
            'description' => 'string',
            'deleteWhiteRule' => 'bool',
            'whiteField' => 'string',
            'judgeType' => 'string',
            'fieldValue' => 'string',
            'fileHash' => 'string',
            'filePath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * hash  **参数解释**: 事件白名单SHA256 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * description  **参数解释**: 描述信息。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * deleteWhiteRule  **参数解释**: 是否删除告警白名单规则(仅删除的白名单是规则类型时使用) **约束限制**: 不涉及 **取值范围**: - true：删除告警白名单规则 - false: 不删除告警白名单规则  **默认取值**: 不涉及
    * whiteField  **参数解释**: 加白字段 **约束限制**: 不涉及 **取值范围**: - \"file_path\"：文件路径 - \"process_path\"：进程路径 - \"login_ip\"：登录ip - \"reg_key\"：注册表key - \"process_cmdline\"： 进程命令行 - \"username\"： 用户名  **默认取值**: 不涉及
    * judgeType  **参数解释**: 通配符 **约束限制**: 不涉及 **取值范围**:   - \"equal\"： 相等   - \"not_equal\"：不相等   - \"contain\"： 包含   - \"not_contain\"： 不包含  **默认取值**: 不涉及
    * fieldValue  **参数解释**: 加白字段值 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * fileHash  **参数解释**: 文件哈希 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * filePath  **参数解释**: 文件路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => 'int32',
        'hash' => null,
        'description' => null,
        'deleteWhiteRule' => null,
        'whiteField' => null,
        'judgeType' => null,
        'fieldValue' => null,
        'fileHash' => null,
        'filePath' => null
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
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * hash  **参数解释**: 事件白名单SHA256 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * description  **参数解释**: 描述信息。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * deleteWhiteRule  **参数解释**: 是否删除告警白名单规则(仅删除的白名单是规则类型时使用) **约束限制**: 不涉及 **取值范围**: - true：删除告警白名单规则 - false: 不删除告警白名单规则  **默认取值**: 不涉及
    * whiteField  **参数解释**: 加白字段 **约束限制**: 不涉及 **取值范围**: - \"file_path\"：文件路径 - \"process_path\"：进程路径 - \"login_ip\"：登录ip - \"reg_key\"：注册表key - \"process_cmdline\"： 进程命令行 - \"username\"： 用户名  **默认取值**: 不涉及
    * judgeType  **参数解释**: 通配符 **约束限制**: 不涉及 **取值范围**:   - \"equal\"： 相等   - \"not_equal\"：不相等   - \"contain\"： 包含   - \"not_contain\"： 不包含  **默认取值**: 不涉及
    * fieldValue  **参数解释**: 加白字段值 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * fileHash  **参数解释**: 文件哈希 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * filePath  **参数解释**: 文件路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'hash' => 'hash',
            'description' => 'description',
            'deleteWhiteRule' => 'delete_white_rule',
            'whiteField' => 'white_field',
            'judgeType' => 'judge_type',
            'fieldValue' => 'field_value',
            'fileHash' => 'file_hash',
            'filePath' => 'file_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * hash  **参数解释**: 事件白名单SHA256 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * description  **参数解释**: 描述信息。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * deleteWhiteRule  **参数解释**: 是否删除告警白名单规则(仅删除的白名单是规则类型时使用) **约束限制**: 不涉及 **取值范围**: - true：删除告警白名单规则 - false: 不删除告警白名单规则  **默认取值**: 不涉及
    * whiteField  **参数解释**: 加白字段 **约束限制**: 不涉及 **取值范围**: - \"file_path\"：文件路径 - \"process_path\"：进程路径 - \"login_ip\"：登录ip - \"reg_key\"：注册表key - \"process_cmdline\"： 进程命令行 - \"username\"： 用户名  **默认取值**: 不涉及
    * judgeType  **参数解释**: 通配符 **约束限制**: 不涉及 **取值范围**:   - \"equal\"： 相等   - \"not_equal\"：不相等   - \"contain\"： 包含   - \"not_contain\"： 不包含  **默认取值**: 不涉及
    * fieldValue  **参数解释**: 加白字段值 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * fileHash  **参数解释**: 文件哈希 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * filePath  **参数解释**: 文件路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'hash' => 'setHash',
            'description' => 'setDescription',
            'deleteWhiteRule' => 'setDeleteWhiteRule',
            'whiteField' => 'setWhiteField',
            'judgeType' => 'setJudgeType',
            'fieldValue' => 'setFieldValue',
            'fileHash' => 'setFileHash',
            'filePath' => 'setFilePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  **参数解释**： 事件类型 **取值范围**：   - 1001：通用恶意软件   - 1002：病毒   - 1003：蠕虫   - 1004：木马   - 1005：僵尸网络   - 1006：后门   - 1010：Rootkit   - 1011：勒索软件   - 1012：黑客工具   - 1015：Webshell   - 1016：挖矿   - 1017：反弹Shell   - 2001：一般漏洞利用   - 2012：远程代码执行   - 2047：Redis漏洞利用   - 2048：Hadoop漏洞利用   - 2049：MySQL漏洞利用   - 3002：文件提权   - 3003：进程提权   - 3004：关键文件变更   - 3005：文件/目录变更   - 3007：进程异常行为   - 3015：高危命令执行   - 3018：异常Shell   - 3026：crontab提权   - 3027：Crontab可疑任务   - 3029：系统安全防护被禁用   - 3030：备份删除   - 3031：异常注册表操作   - 3036：容器镜像阻断   - 4002：暴力破解   - 4004：异常登录   - 4006：非法系统账号   - 4014：用户账号添加   - 4020：用户密码窃取   - 6002：端口扫描   - 6003：主机扫描   - 13001：Kubernetes事件删除   - 13002：Pod异常行为   - 13003：枚举用户信息   - 13004：绑定集群用户角色   - 2006：XSS攻击   - 2007：SQL注入   - 2008：XML注入   - 2009：代码注入   - 2010：命令注入   - 2011：命令执行   - 2042：漏洞逃逸攻击   - 2044：文件逃逸攻击   - 2046：JNDI注入   - 3008：容器进程异常   - 3009：容器异常启动   - 3016：高危系统调用   - 3021：敏感文件访问   - 3023：异常命令执行   - 3025：可疑异常   - 3038：系统日志删除   - 3039：可疑命令执行   - 3040：可疑进程运行   - 3041：可疑进程文件访问   - 3043：运行时异常行为   - 3044：内核模块加载   - 4016：用户账号变更   - 5001：未知网络访问   - 5003：异常外联行为   - 5014：端口转发   - 5015：可疑的下载请求   - 5016：可疑的HTTP请求   - 8005：目录遍历   - 11001：高级威胁事件   - 12001：进程注入   - 12002：动态库注入进程   - 12005：内存文件进程   - 12006：vdso劫持   - 12007：利用Windows工具攻击   - 12008：注册表恶意注入   - 60001：直接提示词注入   - 60002：恶意指令与越狱   - 61001：间接提示词注入   - 61002：数据投毒与误导   - 62001：工具反馈污染   - 62002：工具描述/接口注入   - 63001：越权操作攻击   - 63002：资源耗尽攻击   - 64001：未授权操作   - 64002：权限提升尝试   - 64003：角色访问违规   - 64004：策略约束违规   - 65001：未授权信息输出   - 65002：API密钥/凭证泄露   - 65003：内部业务数据泄露   - 65004：策略约束违规输出   - 65005：隐私信息泄露   - 66001：智能体高危命令执行   - 66002：智能体敏感文件访问   - 67001：其他类告警   - 68001：记忆投毒   - 68002：RAG异常调用   - 68003：工具参数注入   - 68004：工具循环调用   - 68005：上下文资源滥用
    * hash  **参数解释**: 事件白名单SHA256 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    * description  **参数解释**: 描述信息。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * deleteWhiteRule  **参数解释**: 是否删除告警白名单规则(仅删除的白名单是规则类型时使用) **约束限制**: 不涉及 **取值范围**: - true：删除告警白名单规则 - false: 不删除告警白名单规则  **默认取值**: 不涉及
    * whiteField  **参数解释**: 加白字段 **约束限制**: 不涉及 **取值范围**: - \"file_path\"：文件路径 - \"process_path\"：进程路径 - \"login_ip\"：登录ip - \"reg_key\"：注册表key - \"process_cmdline\"： 进程命令行 - \"username\"： 用户名  **默认取值**: 不涉及
    * judgeType  **参数解释**: 通配符 **约束限制**: 不涉及 **取值范围**:   - \"equal\"： 相等   - \"not_equal\"：不相等   - \"contain\"： 包含   - \"not_contain\"： 不包含  **默认取值**: 不涉及
    * fieldValue  **参数解释**: 加白字段值 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * fileHash  **参数解释**: 文件哈希 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * filePath  **参数解释**: 文件路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'hash' => 'getHash',
            'description' => 'getDescription',
            'deleteWhiteRule' => 'getDeleteWhiteRule',
            'whiteField' => 'getWhiteField',
            'judgeType' => 'getJudgeType',
            'fieldValue' => 'getFieldValue',
            'fileHash' => 'getFileHash',
            'filePath' => 'getFilePath'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['deleteWhiteRule'] = isset($data['deleteWhiteRule']) ? $data['deleteWhiteRule'] : null;
        $this->container['whiteField'] = isset($data['whiteField']) ? $data['whiteField'] : null;
        $this->container['judgeType'] = isset($data['judgeType']) ? $data['judgeType'] : null;
        $this->container['fieldValue'] = isset($data['fieldValue']) ? $data['fieldValue'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 30000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 30000.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 1000)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 1000.";
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^.*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^.*$/.";
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
    * Gets hash
    *  **参数解释**: 事件白名单SHA256 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
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
    * @param string|null $hash **参数解释**: 事件白名单SHA256 **约束限制**: 不涉及 **取值范围**: 字符长度0-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 描述信息。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
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
    * @param string|null $description **参数解释**: 描述信息。 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets deleteWhiteRule
    *  **参数解释**: 是否删除告警白名单规则(仅删除的白名单是规则类型时使用) **约束限制**: 不涉及 **取值范围**: - true：删除告警白名单规则 - false: 不删除告警白名单规则  **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getDeleteWhiteRule()
    {
        return $this->container['deleteWhiteRule'];
    }

    /**
    * Sets deleteWhiteRule
    *
    * @param bool|null $deleteWhiteRule **参数解释**: 是否删除告警白名单规则(仅删除的白名单是规则类型时使用) **约束限制**: 不涉及 **取值范围**: - true：删除告警白名单规则 - false: 不删除告警白名单规则  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDeleteWhiteRule($deleteWhiteRule)
    {
        $this->container['deleteWhiteRule'] = $deleteWhiteRule;
        return $this;
    }

    /**
    * Gets whiteField
    *  **参数解释**: 加白字段 **约束限制**: 不涉及 **取值范围**: - \"file_path\"：文件路径 - \"process_path\"：进程路径 - \"login_ip\"：登录ip - \"reg_key\"：注册表key - \"process_cmdline\"： 进程命令行 - \"username\"： 用户名  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getWhiteField()
    {
        return $this->container['whiteField'];
    }

    /**
    * Sets whiteField
    *
    * @param string|null $whiteField **参数解释**: 加白字段 **约束限制**: 不涉及 **取值范围**: - \"file_path\"：文件路径 - \"process_path\"：进程路径 - \"login_ip\"：登录ip - \"reg_key\"：注册表key - \"process_cmdline\"： 进程命令行 - \"username\"： 用户名  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setWhiteField($whiteField)
    {
        $this->container['whiteField'] = $whiteField;
        return $this;
    }

    /**
    * Gets judgeType
    *  **参数解释**: 通配符 **约束限制**: 不涉及 **取值范围**:   - \"equal\"： 相等   - \"not_equal\"：不相等   - \"contain\"： 包含   - \"not_contain\"： 不包含  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getJudgeType()
    {
        return $this->container['judgeType'];
    }

    /**
    * Sets judgeType
    *
    * @param string|null $judgeType **参数解释**: 通配符 **约束限制**: 不涉及 **取值范围**:   - \"equal\"： 相等   - \"not_equal\"：不相等   - \"contain\"： 包含   - \"not_contain\"： 不包含  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setJudgeType($judgeType)
    {
        $this->container['judgeType'] = $judgeType;
        return $this;
    }

    /**
    * Gets fieldValue
    *  **参数解释**: 加白字段值 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getFieldValue()
    {
        return $this->container['fieldValue'];
    }

    /**
    * Sets fieldValue
    *
    * @param string|null $fieldValue **参数解释**: 加白字段值 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFieldValue($fieldValue)
    {
        $this->container['fieldValue'] = $fieldValue;
        return $this;
    }

    /**
    * Gets fileHash
    *  **参数解释**: 文件哈希 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
    * Sets fileHash
    *
    * @param string|null $fileHash **参数解释**: 文件哈希 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**: 文件路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释**: 文件路径 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
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

