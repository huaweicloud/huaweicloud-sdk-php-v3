<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RaspProtectHistoryResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RaspProtectHistoryResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * privateIp  **参数解释** 应用防护事件所属云服务器的私有IP地址，用于定位事件来源主机的网络位置 **取值范围** 符合IPv4格式的字符串（如192.168.0.97），支持多个私有IP用逗号分隔
    * alarmTime  **参数解释** 应用防护事件的发生时间，以Unix时间戳（毫秒级）表示 **时间格式** 可转换为YYYY-MM-DD HH:MM:SS格式（如1736414463000对应2024-12-10 10:41:03） **取值范围** Unix时间戳（毫秒级），取值0-为当前系统时间戳
    * eventName  **参数解释** 应用防护事件的具体名称，标识事件对应的攻击类型（如ExpressionInject表示表达式注入攻击） **取值范围** 字符长度1-128位，支持英文、数字、下划线，为系统预定义的攻击类型标识
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * reqSrcIp  **参数解释** 发起攻击的源IP地址，可能是公网IP或内网IP，用于定位攻击来源 **取值范围** 符合IPv4或IPv6格式的字符串，支持单个IP或IP段（如127.0.0.1、2001:db8::1）
    * appStack  **参数解释** 应用防护事件发生时的应用程序调用堆栈信息，用于定位漏洞触发点 **取值范围** 字符长度0-4096位，支持英文、数字、符号等堆栈信息常见字符，为空表示无堆栈数据
    * attackInputName  **参数解释** 攻击请求中的附属字段名称（如请求头字段、表单字段等），用于标识攻击载荷的传入字段 **取值范围** 字符长度0-256位，支持英文、数字、符号等HTTP请求字段常见字符，为空表示无相关字段
    * attackInputValue  **参数解释** 攻击请求中包含的恶意载荷数据（如注入脚本、恶意命令等），用于分析攻击手段 **取值范围** 字符长度0-2048位，支持各类字符（含特殊字符），为空表示无恶意载荷
    * queryString  **参数解释** 攻击请求的URL查询字符串部分（即?后的参数），用于分析攻击请求的参数传递方式 **取值范围** 字符长度0-1024位，支持URL编码后的字符，为空表示无查询字符串
    * reqHeaders  **参数解释** 攻击请求的HTTP请求头信息，以JSON格式存储，包含User-Agent、Host等字段 **取值范围** 字符长度0-4096位，为JSON格式字符串，字段名和值支持常见HTTP头字符，为空表示无请求头信息
    * reqMethod  **参数解释** 攻击请求使用的HTTP方法（如GET、POST），用于分析攻击的请求类型 **取值范围** 字符长度3-10位，支持标准HTTP方法（GET、POST、PUT、DELETE等），区分大小写
    * reqParams  **参数解释** 攻击请求的请求体参数（如POST请求的表单数据），用于分析攻击的参数传递内容 **取值范围** 字符长度0-2048位，支持表单编码或JSON格式字符，为空表示无请求体参数
    * reqPath  **参数解释** 攻击请求的URL路径部分（不含查询字符串），用于定位攻击的目标接口 **取值范围** 字符长度0-512位，支持URL路径字符（如/、字母、数字、短横线、下划线），为空表示根路径
    * reqProtocol  **参数解释** 攻击请求使用的HTTP协议版本（如HTTP/1.1），用于分析攻击的协议环境 **取值范围** 字符长度5-10位，支持HTTP/1.0、HTTP/1.1、HTTP/2等标准协议版本
    * reqUrl  **参数解释** 攻击请求的完整URL地址（含协议、主机、路径、查询字符串），用于完整还原攻击请求 **取值范围** 字符长度0-1024位，符合URL格式规范，为空表示无完整URL信息
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，与请求参数的攻击标识对应（格式为小写下划线） **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * chkProbe  **参数解释**: 检测到该攻击事件的RASP探针标识，用于定位探针类型和检测模块 **取值范围**: 字符长度1-128位，支持英文、数字、点号、短横线、下划线，为系统预定义的探针标识
    * chkRule  **参数解释** 触发该防护事件的检测规则唯一标识，用于关联具体的防护规则配置 **取值范围** 字符长度1-64位，支持英文、数字、下划线，为系统预定义的规则标识（如ExpressionInject）
    * chkRuleDesc  **参数解释** 触发该防护事件的检测规则详细描述，说明规则的检测逻辑和目的 **取值范围** 字符长度0-512位，支持中文、英文、数字、常用标点符号，为空表示无规则描述
    * existBug  **参数解释** 标识该防护事件是否因应用存在漏洞导致（yes表示存在漏洞，no表示不存在） **取值范围** - yes：存在漏洞 - no：不存在漏洞 - unknown：未知
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'privateIp' => 'string',
            'alarmTime' => 'int',
            'eventName' => 'string',
            'severity' => 'string',
            'reqSrcIp' => 'string',
            'appStack' => 'string',
            'attackInputName' => 'string',
            'attackInputValue' => 'string',
            'queryString' => 'string',
            'reqHeaders' => 'string',
            'reqMethod' => 'string',
            'reqParams' => 'string',
            'reqPath' => 'string',
            'reqProtocol' => 'string',
            'reqUrl' => 'string',
            'attackTag' => 'string',
            'chkProbe' => 'string',
            'chkRule' => 'string',
            'chkRuleDesc' => 'string',
            'existBug' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * privateIp  **参数解释** 应用防护事件所属云服务器的私有IP地址，用于定位事件来源主机的网络位置 **取值范围** 符合IPv4格式的字符串（如192.168.0.97），支持多个私有IP用逗号分隔
    * alarmTime  **参数解释** 应用防护事件的发生时间，以Unix时间戳（毫秒级）表示 **时间格式** 可转换为YYYY-MM-DD HH:MM:SS格式（如1736414463000对应2024-12-10 10:41:03） **取值范围** Unix时间戳（毫秒级），取值0-为当前系统时间戳
    * eventName  **参数解释** 应用防护事件的具体名称，标识事件对应的攻击类型（如ExpressionInject表示表达式注入攻击） **取值范围** 字符长度1-128位，支持英文、数字、下划线，为系统预定义的攻击类型标识
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * reqSrcIp  **参数解释** 发起攻击的源IP地址，可能是公网IP或内网IP，用于定位攻击来源 **取值范围** 符合IPv4或IPv6格式的字符串，支持单个IP或IP段（如127.0.0.1、2001:db8::1）
    * appStack  **参数解释** 应用防护事件发生时的应用程序调用堆栈信息，用于定位漏洞触发点 **取值范围** 字符长度0-4096位，支持英文、数字、符号等堆栈信息常见字符，为空表示无堆栈数据
    * attackInputName  **参数解释** 攻击请求中的附属字段名称（如请求头字段、表单字段等），用于标识攻击载荷的传入字段 **取值范围** 字符长度0-256位，支持英文、数字、符号等HTTP请求字段常见字符，为空表示无相关字段
    * attackInputValue  **参数解释** 攻击请求中包含的恶意载荷数据（如注入脚本、恶意命令等），用于分析攻击手段 **取值范围** 字符长度0-2048位，支持各类字符（含特殊字符），为空表示无恶意载荷
    * queryString  **参数解释** 攻击请求的URL查询字符串部分（即?后的参数），用于分析攻击请求的参数传递方式 **取值范围** 字符长度0-1024位，支持URL编码后的字符，为空表示无查询字符串
    * reqHeaders  **参数解释** 攻击请求的HTTP请求头信息，以JSON格式存储，包含User-Agent、Host等字段 **取值范围** 字符长度0-4096位，为JSON格式字符串，字段名和值支持常见HTTP头字符，为空表示无请求头信息
    * reqMethod  **参数解释** 攻击请求使用的HTTP方法（如GET、POST），用于分析攻击的请求类型 **取值范围** 字符长度3-10位，支持标准HTTP方法（GET、POST、PUT、DELETE等），区分大小写
    * reqParams  **参数解释** 攻击请求的请求体参数（如POST请求的表单数据），用于分析攻击的参数传递内容 **取值范围** 字符长度0-2048位，支持表单编码或JSON格式字符，为空表示无请求体参数
    * reqPath  **参数解释** 攻击请求的URL路径部分（不含查询字符串），用于定位攻击的目标接口 **取值范围** 字符长度0-512位，支持URL路径字符（如/、字母、数字、短横线、下划线），为空表示根路径
    * reqProtocol  **参数解释** 攻击请求使用的HTTP协议版本（如HTTP/1.1），用于分析攻击的协议环境 **取值范围** 字符长度5-10位，支持HTTP/1.0、HTTP/1.1、HTTP/2等标准协议版本
    * reqUrl  **参数解释** 攻击请求的完整URL地址（含协议、主机、路径、查询字符串），用于完整还原攻击请求 **取值范围** 字符长度0-1024位，符合URL格式规范，为空表示无完整URL信息
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，与请求参数的攻击标识对应（格式为小写下划线） **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * chkProbe  **参数解释**: 检测到该攻击事件的RASP探针标识，用于定位探针类型和检测模块 **取值范围**: 字符长度1-128位，支持英文、数字、点号、短横线、下划线，为系统预定义的探针标识
    * chkRule  **参数解释** 触发该防护事件的检测规则唯一标识，用于关联具体的防护规则配置 **取值范围** 字符长度1-64位，支持英文、数字、下划线，为系统预定义的规则标识（如ExpressionInject）
    * chkRuleDesc  **参数解释** 触发该防护事件的检测规则详细描述，说明规则的检测逻辑和目的 **取值范围** 字符长度0-512位，支持中文、英文、数字、常用标点符号，为空表示无规则描述
    * existBug  **参数解释** 标识该防护事件是否因应用存在漏洞导致（yes表示存在漏洞，no表示不存在） **取值范围** - yes：存在漏洞 - no：不存在漏洞 - unknown：未知
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'privateIp' => null,
        'alarmTime' => 'int64',
        'eventName' => null,
        'severity' => null,
        'reqSrcIp' => null,
        'appStack' => null,
        'attackInputName' => null,
        'attackInputValue' => null,
        'queryString' => null,
        'reqHeaders' => null,
        'reqMethod' => null,
        'reqParams' => null,
        'reqPath' => null,
        'reqProtocol' => null,
        'reqUrl' => null,
        'attackTag' => null,
        'chkProbe' => null,
        'chkRule' => null,
        'chkRuleDesc' => null,
        'existBug' => null
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
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * privateIp  **参数解释** 应用防护事件所属云服务器的私有IP地址，用于定位事件来源主机的网络位置 **取值范围** 符合IPv4格式的字符串（如192.168.0.97），支持多个私有IP用逗号分隔
    * alarmTime  **参数解释** 应用防护事件的发生时间，以Unix时间戳（毫秒级）表示 **时间格式** 可转换为YYYY-MM-DD HH:MM:SS格式（如1736414463000对应2024-12-10 10:41:03） **取值范围** Unix时间戳（毫秒级），取值0-为当前系统时间戳
    * eventName  **参数解释** 应用防护事件的具体名称，标识事件对应的攻击类型（如ExpressionInject表示表达式注入攻击） **取值范围** 字符长度1-128位，支持英文、数字、下划线，为系统预定义的攻击类型标识
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * reqSrcIp  **参数解释** 发起攻击的源IP地址，可能是公网IP或内网IP，用于定位攻击来源 **取值范围** 符合IPv4或IPv6格式的字符串，支持单个IP或IP段（如127.0.0.1、2001:db8::1）
    * appStack  **参数解释** 应用防护事件发生时的应用程序调用堆栈信息，用于定位漏洞触发点 **取值范围** 字符长度0-4096位，支持英文、数字、符号等堆栈信息常见字符，为空表示无堆栈数据
    * attackInputName  **参数解释** 攻击请求中的附属字段名称（如请求头字段、表单字段等），用于标识攻击载荷的传入字段 **取值范围** 字符长度0-256位，支持英文、数字、符号等HTTP请求字段常见字符，为空表示无相关字段
    * attackInputValue  **参数解释** 攻击请求中包含的恶意载荷数据（如注入脚本、恶意命令等），用于分析攻击手段 **取值范围** 字符长度0-2048位，支持各类字符（含特殊字符），为空表示无恶意载荷
    * queryString  **参数解释** 攻击请求的URL查询字符串部分（即?后的参数），用于分析攻击请求的参数传递方式 **取值范围** 字符长度0-1024位，支持URL编码后的字符，为空表示无查询字符串
    * reqHeaders  **参数解释** 攻击请求的HTTP请求头信息，以JSON格式存储，包含User-Agent、Host等字段 **取值范围** 字符长度0-4096位，为JSON格式字符串，字段名和值支持常见HTTP头字符，为空表示无请求头信息
    * reqMethod  **参数解释** 攻击请求使用的HTTP方法（如GET、POST），用于分析攻击的请求类型 **取值范围** 字符长度3-10位，支持标准HTTP方法（GET、POST、PUT、DELETE等），区分大小写
    * reqParams  **参数解释** 攻击请求的请求体参数（如POST请求的表单数据），用于分析攻击的参数传递内容 **取值范围** 字符长度0-2048位，支持表单编码或JSON格式字符，为空表示无请求体参数
    * reqPath  **参数解释** 攻击请求的URL路径部分（不含查询字符串），用于定位攻击的目标接口 **取值范围** 字符长度0-512位，支持URL路径字符（如/、字母、数字、短横线、下划线），为空表示根路径
    * reqProtocol  **参数解释** 攻击请求使用的HTTP协议版本（如HTTP/1.1），用于分析攻击的协议环境 **取值范围** 字符长度5-10位，支持HTTP/1.0、HTTP/1.1、HTTP/2等标准协议版本
    * reqUrl  **参数解释** 攻击请求的完整URL地址（含协议、主机、路径、查询字符串），用于完整还原攻击请求 **取值范围** 字符长度0-1024位，符合URL格式规范，为空表示无完整URL信息
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，与请求参数的攻击标识对应（格式为小写下划线） **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * chkProbe  **参数解释**: 检测到该攻击事件的RASP探针标识，用于定位探针类型和检测模块 **取值范围**: 字符长度1-128位，支持英文、数字、点号、短横线、下划线，为系统预定义的探针标识
    * chkRule  **参数解释** 触发该防护事件的检测规则唯一标识，用于关联具体的防护规则配置 **取值范围** 字符长度1-64位，支持英文、数字、下划线，为系统预定义的规则标识（如ExpressionInject）
    * chkRuleDesc  **参数解释** 触发该防护事件的检测规则详细描述，说明规则的检测逻辑和目的 **取值范围** 字符长度0-512位，支持中文、英文、数字、常用标点符号，为空表示无规则描述
    * existBug  **参数解释** 标识该防护事件是否因应用存在漏洞导致（yes表示存在漏洞，no表示不存在） **取值范围** - yes：存在漏洞 - no：不存在漏洞 - unknown：未知
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'alarmTime' => 'alarm_time',
            'eventName' => 'event_name',
            'severity' => 'severity',
            'reqSrcIp' => 'req_src_ip',
            'appStack' => 'app_stack',
            'attackInputName' => 'attack_input_name',
            'attackInputValue' => 'attack_input_value',
            'queryString' => 'query_string',
            'reqHeaders' => 'req_headers',
            'reqMethod' => 'req_method',
            'reqParams' => 'req_params',
            'reqPath' => 'req_path',
            'reqProtocol' => 'req_protocol',
            'reqUrl' => 'req_url',
            'attackTag' => 'attack_tag',
            'chkProbe' => 'chk_probe',
            'chkRule' => 'chk_rule',
            'chkRuleDesc' => 'chk_rule_desc',
            'existBug' => 'exist_bug'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * privateIp  **参数解释** 应用防护事件所属云服务器的私有IP地址，用于定位事件来源主机的网络位置 **取值范围** 符合IPv4格式的字符串（如192.168.0.97），支持多个私有IP用逗号分隔
    * alarmTime  **参数解释** 应用防护事件的发生时间，以Unix时间戳（毫秒级）表示 **时间格式** 可转换为YYYY-MM-DD HH:MM:SS格式（如1736414463000对应2024-12-10 10:41:03） **取值范围** Unix时间戳（毫秒级），取值0-为当前系统时间戳
    * eventName  **参数解释** 应用防护事件的具体名称，标识事件对应的攻击类型（如ExpressionInject表示表达式注入攻击） **取值范围** 字符长度1-128位，支持英文、数字、下划线，为系统预定义的攻击类型标识
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * reqSrcIp  **参数解释** 发起攻击的源IP地址，可能是公网IP或内网IP，用于定位攻击来源 **取值范围** 符合IPv4或IPv6格式的字符串，支持单个IP或IP段（如127.0.0.1、2001:db8::1）
    * appStack  **参数解释** 应用防护事件发生时的应用程序调用堆栈信息，用于定位漏洞触发点 **取值范围** 字符长度0-4096位，支持英文、数字、符号等堆栈信息常见字符，为空表示无堆栈数据
    * attackInputName  **参数解释** 攻击请求中的附属字段名称（如请求头字段、表单字段等），用于标识攻击载荷的传入字段 **取值范围** 字符长度0-256位，支持英文、数字、符号等HTTP请求字段常见字符，为空表示无相关字段
    * attackInputValue  **参数解释** 攻击请求中包含的恶意载荷数据（如注入脚本、恶意命令等），用于分析攻击手段 **取值范围** 字符长度0-2048位，支持各类字符（含特殊字符），为空表示无恶意载荷
    * queryString  **参数解释** 攻击请求的URL查询字符串部分（即?后的参数），用于分析攻击请求的参数传递方式 **取值范围** 字符长度0-1024位，支持URL编码后的字符，为空表示无查询字符串
    * reqHeaders  **参数解释** 攻击请求的HTTP请求头信息，以JSON格式存储，包含User-Agent、Host等字段 **取值范围** 字符长度0-4096位，为JSON格式字符串，字段名和值支持常见HTTP头字符，为空表示无请求头信息
    * reqMethod  **参数解释** 攻击请求使用的HTTP方法（如GET、POST），用于分析攻击的请求类型 **取值范围** 字符长度3-10位，支持标准HTTP方法（GET、POST、PUT、DELETE等），区分大小写
    * reqParams  **参数解释** 攻击请求的请求体参数（如POST请求的表单数据），用于分析攻击的参数传递内容 **取值范围** 字符长度0-2048位，支持表单编码或JSON格式字符，为空表示无请求体参数
    * reqPath  **参数解释** 攻击请求的URL路径部分（不含查询字符串），用于定位攻击的目标接口 **取值范围** 字符长度0-512位，支持URL路径字符（如/、字母、数字、短横线、下划线），为空表示根路径
    * reqProtocol  **参数解释** 攻击请求使用的HTTP协议版本（如HTTP/1.1），用于分析攻击的协议环境 **取值范围** 字符长度5-10位，支持HTTP/1.0、HTTP/1.1、HTTP/2等标准协议版本
    * reqUrl  **参数解释** 攻击请求的完整URL地址（含协议、主机、路径、查询字符串），用于完整还原攻击请求 **取值范围** 字符长度0-1024位，符合URL格式规范，为空表示无完整URL信息
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，与请求参数的攻击标识对应（格式为小写下划线） **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * chkProbe  **参数解释**: 检测到该攻击事件的RASP探针标识，用于定位探针类型和检测模块 **取值范围**: 字符长度1-128位，支持英文、数字、点号、短横线、下划线，为系统预定义的探针标识
    * chkRule  **参数解释** 触发该防护事件的检测规则唯一标识，用于关联具体的防护规则配置 **取值范围** 字符长度1-64位，支持英文、数字、下划线，为系统预定义的规则标识（如ExpressionInject）
    * chkRuleDesc  **参数解释** 触发该防护事件的检测规则详细描述，说明规则的检测逻辑和目的 **取值范围** 字符长度0-512位，支持中文、英文、数字、常用标点符号，为空表示无规则描述
    * existBug  **参数解释** 标识该防护事件是否因应用存在漏洞导致（yes表示存在漏洞，no表示不存在） **取值范围** - yes：存在漏洞 - no：不存在漏洞 - unknown：未知
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'alarmTime' => 'setAlarmTime',
            'eventName' => 'setEventName',
            'severity' => 'setSeverity',
            'reqSrcIp' => 'setReqSrcIp',
            'appStack' => 'setAppStack',
            'attackInputName' => 'setAttackInputName',
            'attackInputValue' => 'setAttackInputValue',
            'queryString' => 'setQueryString',
            'reqHeaders' => 'setReqHeaders',
            'reqMethod' => 'setReqMethod',
            'reqParams' => 'setReqParams',
            'reqPath' => 'setReqPath',
            'reqProtocol' => 'setReqProtocol',
            'reqUrl' => 'setReqUrl',
            'attackTag' => 'setAttackTag',
            'chkProbe' => 'setChkProbe',
            'chkRule' => 'setChkRule',
            'chkRuleDesc' => 'setChkRuleDesc',
            'existBug' => 'setExistBug'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    * privateIp  **参数解释** 应用防护事件所属云服务器的私有IP地址，用于定位事件来源主机的网络位置 **取值范围** 符合IPv4格式的字符串（如192.168.0.97），支持多个私有IP用逗号分隔
    * alarmTime  **参数解释** 应用防护事件的发生时间，以Unix时间戳（毫秒级）表示 **时间格式** 可转换为YYYY-MM-DD HH:MM:SS格式（如1736414463000对应2024-12-10 10:41:03） **取值范围** Unix时间戳（毫秒级），取值0-为当前系统时间戳
    * eventName  **参数解释** 应用防护事件的具体名称，标识事件对应的攻击类型（如ExpressionInject表示表达式注入攻击） **取值范围** 字符长度1-128位，支持英文、数字、下划线，为系统预定义的攻击类型标识
    * severity  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    * reqSrcIp  **参数解释** 发起攻击的源IP地址，可能是公网IP或内网IP，用于定位攻击来源 **取值范围** 符合IPv4或IPv6格式的字符串，支持单个IP或IP段（如127.0.0.1、2001:db8::1）
    * appStack  **参数解释** 应用防护事件发生时的应用程序调用堆栈信息，用于定位漏洞触发点 **取值范围** 字符长度0-4096位，支持英文、数字、符号等堆栈信息常见字符，为空表示无堆栈数据
    * attackInputName  **参数解释** 攻击请求中的附属字段名称（如请求头字段、表单字段等），用于标识攻击载荷的传入字段 **取值范围** 字符长度0-256位，支持英文、数字、符号等HTTP请求字段常见字符，为空表示无相关字段
    * attackInputValue  **参数解释** 攻击请求中包含的恶意载荷数据（如注入脚本、恶意命令等），用于分析攻击手段 **取值范围** 字符长度0-2048位，支持各类字符（含特殊字符），为空表示无恶意载荷
    * queryString  **参数解释** 攻击请求的URL查询字符串部分（即?后的参数），用于分析攻击请求的参数传递方式 **取值范围** 字符长度0-1024位，支持URL编码后的字符，为空表示无查询字符串
    * reqHeaders  **参数解释** 攻击请求的HTTP请求头信息，以JSON格式存储，包含User-Agent、Host等字段 **取值范围** 字符长度0-4096位，为JSON格式字符串，字段名和值支持常见HTTP头字符，为空表示无请求头信息
    * reqMethod  **参数解释** 攻击请求使用的HTTP方法（如GET、POST），用于分析攻击的请求类型 **取值范围** 字符长度3-10位，支持标准HTTP方法（GET、POST、PUT、DELETE等），区分大小写
    * reqParams  **参数解释** 攻击请求的请求体参数（如POST请求的表单数据），用于分析攻击的参数传递内容 **取值范围** 字符长度0-2048位，支持表单编码或JSON格式字符，为空表示无请求体参数
    * reqPath  **参数解释** 攻击请求的URL路径部分（不含查询字符串），用于定位攻击的目标接口 **取值范围** 字符长度0-512位，支持URL路径字符（如/、字母、数字、短横线、下划线），为空表示根路径
    * reqProtocol  **参数解释** 攻击请求使用的HTTP协议版本（如HTTP/1.1），用于分析攻击的协议环境 **取值范围** 字符长度5-10位，支持HTTP/1.0、HTTP/1.1、HTTP/2等标准协议版本
    * reqUrl  **参数解释** 攻击请求的完整URL地址（含协议、主机、路径、查询字符串），用于完整还原攻击请求 **取值范围** 字符长度0-1024位，符合URL格式规范，为空表示无完整URL信息
    * attackTag  **参数解释** 应用防护事件的攻击类型标识，与请求参数的攻击标识对应（格式为小写下划线） **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    * chkProbe  **参数解释**: 检测到该攻击事件的RASP探针标识，用于定位探针类型和检测模块 **取值范围**: 字符长度1-128位，支持英文、数字、点号、短横线、下划线，为系统预定义的探针标识
    * chkRule  **参数解释** 触发该防护事件的检测规则唯一标识，用于关联具体的防护规则配置 **取值范围** 字符长度1-64位，支持英文、数字、下划线，为系统预定义的规则标识（如ExpressionInject）
    * chkRuleDesc  **参数解释** 触发该防护事件的检测规则详细描述，说明规则的检测逻辑和目的 **取值范围** 字符长度0-512位，支持中文、英文、数字、常用标点符号，为空表示无规则描述
    * existBug  **参数解释** 标识该防护事件是否因应用存在漏洞导致（yes表示存在漏洞，no表示不存在） **取值范围** - yes：存在漏洞 - no：不存在漏洞 - unknown：未知
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'alarmTime' => 'getAlarmTime',
            'eventName' => 'getEventName',
            'severity' => 'getSeverity',
            'reqSrcIp' => 'getReqSrcIp',
            'appStack' => 'getAppStack',
            'attackInputName' => 'getAttackInputName',
            'attackInputValue' => 'getAttackInputValue',
            'queryString' => 'getQueryString',
            'reqHeaders' => 'getReqHeaders',
            'reqMethod' => 'getReqMethod',
            'reqParams' => 'getReqParams',
            'reqPath' => 'getReqPath',
            'reqProtocol' => 'getReqProtocol',
            'reqUrl' => 'getReqUrl',
            'attackTag' => 'getAttackTag',
            'chkProbe' => 'getChkProbe',
            'chkRule' => 'getChkRule',
            'chkRuleDesc' => 'getChkRuleDesc',
            'existBug' => 'getExistBug'
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
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['alarmTime'] = isset($data['alarmTime']) ? $data['alarmTime'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['reqSrcIp'] = isset($data['reqSrcIp']) ? $data['reqSrcIp'] : null;
        $this->container['appStack'] = isset($data['appStack']) ? $data['appStack'] : null;
        $this->container['attackInputName'] = isset($data['attackInputName']) ? $data['attackInputName'] : null;
        $this->container['attackInputValue'] = isset($data['attackInputValue']) ? $data['attackInputValue'] : null;
        $this->container['queryString'] = isset($data['queryString']) ? $data['queryString'] : null;
        $this->container['reqHeaders'] = isset($data['reqHeaders']) ? $data['reqHeaders'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['reqParams'] = isset($data['reqParams']) ? $data['reqParams'] : null;
        $this->container['reqPath'] = isset($data['reqPath']) ? $data['reqPath'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
        $this->container['reqUrl'] = isset($data['reqUrl']) ? $data['reqUrl'] : null;
        $this->container['attackTag'] = isset($data['attackTag']) ? $data['attackTag'] : null;
        $this->container['chkProbe'] = isset($data['chkProbe']) ? $data['chkProbe'] : null;
        $this->container['chkRule'] = isset($data['chkRule']) ? $data['chkRule'] : null;
        $this->container['chkRuleDesc'] = isset($data['chkRuleDesc']) ? $data['chkRuleDesc'] : null;
        $this->container['existBug'] = isset($data['existBug']) ? $data['existBug'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmTime']) && ($this->container['alarmTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'alarmTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['alarmTime']) && ($this->container['alarmTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'alarmTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) > 128)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reqSrcIp']) && (mb_strlen($this->container['reqSrcIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'reqSrcIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['reqSrcIp']) && (mb_strlen($this->container['reqSrcIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqSrcIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appStack']) && (mb_strlen($this->container['appStack']) > 2048)) {
                $invalidProperties[] = "invalid value for 'appStack', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['appStack']) && (mb_strlen($this->container['appStack']) < 0)) {
                $invalidProperties[] = "invalid value for 'appStack', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackInputName']) && (mb_strlen($this->container['attackInputName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'attackInputName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['attackInputName']) && (mb_strlen($this->container['attackInputName']) < 0)) {
                $invalidProperties[] = "invalid value for 'attackInputName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackInputValue']) && (mb_strlen($this->container['attackInputValue']) > 2048)) {
                $invalidProperties[] = "invalid value for 'attackInputValue', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['attackInputValue']) && (mb_strlen($this->container['attackInputValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'attackInputValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queryString']) && (mb_strlen($this->container['queryString']) > 1024)) {
                $invalidProperties[] = "invalid value for 'queryString', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['queryString']) && (mb_strlen($this->container['queryString']) < 0)) {
                $invalidProperties[] = "invalid value for 'queryString', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqHeaders']) && (mb_strlen($this->container['reqHeaders']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reqHeaders', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reqHeaders']) && (mb_strlen($this->container['reqHeaders']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqHeaders', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqMethod']) && (mb_strlen($this->container['reqMethod']) > 32)) {
                $invalidProperties[] = "invalid value for 'reqMethod', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reqMethod']) && (mb_strlen($this->container['reqMethod']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqMethod', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqParams']) && (mb_strlen($this->container['reqParams']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reqParams', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reqParams']) && (mb_strlen($this->container['reqParams']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqParams', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqPath']) && (mb_strlen($this->container['reqPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'reqPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['reqPath']) && (mb_strlen($this->container['reqPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqProtocol']) && (mb_strlen($this->container['reqProtocol']) > 128)) {
                $invalidProperties[] = "invalid value for 'reqProtocol', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['reqProtocol']) && (mb_strlen($this->container['reqProtocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqProtocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reqUrl']) && (mb_strlen($this->container['reqUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reqUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reqUrl']) && (mb_strlen($this->container['reqUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'reqUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) > 128)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['attackTag']) && (mb_strlen($this->container['attackTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'attackTag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chkProbe']) && (mb_strlen($this->container['chkProbe']) > 128)) {
                $invalidProperties[] = "invalid value for 'chkProbe', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chkProbe']) && (mb_strlen($this->container['chkProbe']) < 1)) {
                $invalidProperties[] = "invalid value for 'chkProbe', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chkRule']) && (mb_strlen($this->container['chkRule']) > 128)) {
                $invalidProperties[] = "invalid value for 'chkRule', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['chkRule']) && (mb_strlen($this->container['chkRule']) < 1)) {
                $invalidProperties[] = "invalid value for 'chkRule', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chkRuleDesc']) && (mb_strlen($this->container['chkRuleDesc']) > 256)) {
                $invalidProperties[] = "invalid value for 'chkRuleDesc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['chkRuleDesc']) && (mb_strlen($this->container['chkRuleDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'chkRuleDesc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['existBug']) && (mb_strlen($this->container['existBug']) > 32)) {
                $invalidProperties[] = "invalid value for 'existBug', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['existBug']) && (mb_strlen($this->container['existBug']) < 1)) {
                $invalidProperties[] = "invalid value for 'existBug', the character length must be bigger than or equal to 1.";
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
    *  **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
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
    * @param string|null $hostName **参数解释** 应用防护事件所属云服务器的名称，用于标识事件来源主机 **取值范围** 字符长度1-64位，支持中文、英文、数字、短横线、下划线，符合华为云ECS命名规范
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释** 应用防护事件所属云服务器的私有IP地址，用于定位事件来源主机的网络位置 **取值范围** 符合IPv4格式的字符串（如192.168.0.97），支持多个私有IP用逗号分隔
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
    * @param string|null $privateIp **参数解释** 应用防护事件所属云服务器的私有IP地址，用于定位事件来源主机的网络位置 **取值范围** 符合IPv4格式的字符串（如192.168.0.97），支持多个私有IP用逗号分隔
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets alarmTime
    *  **参数解释** 应用防护事件的发生时间，以Unix时间戳（毫秒级）表示 **时间格式** 可转换为YYYY-MM-DD HH:MM:SS格式（如1736414463000对应2024-12-10 10:41:03） **取值范围** Unix时间戳（毫秒级），取值0-为当前系统时间戳
    *
    * @return int|null
    */
    public function getAlarmTime()
    {
        return $this->container['alarmTime'];
    }

    /**
    * Sets alarmTime
    *
    * @param int|null $alarmTime **参数解释** 应用防护事件的发生时间，以Unix时间戳（毫秒级）表示 **时间格式** 可转换为YYYY-MM-DD HH:MM:SS格式（如1736414463000对应2024-12-10 10:41:03） **取值范围** Unix时间戳（毫秒级），取值0-为当前系统时间戳
    *
    * @return $this
    */
    public function setAlarmTime($alarmTime)
    {
        $this->container['alarmTime'] = $alarmTime;
        return $this;
    }

    /**
    * Gets eventName
    *  **参数解释** 应用防护事件的具体名称，标识事件对应的攻击类型（如ExpressionInject表示表达式注入攻击） **取值范围** 字符长度1-128位，支持英文、数字、下划线，为系统预定义的攻击类型标识
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
    * @param string|null $eventName **参数解释** 应用防护事件的具体名称，标识事件对应的攻击类型（如ExpressionInject表示表达式注入攻击） **取值范围** 字符长度1-128位，支持英文、数字、下划线，为系统预定义的攻击类型标识
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
    *  **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
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
    * @param string|null $severity **参数解释** 应用防护事件的告警级别，用于筛选指定严重程度的事件 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：信息级 - Low：低危 - Medium：中危 - High：高危 - Critical：紧急 **默认取值** 无
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets reqSrcIp
    *  **参数解释** 发起攻击的源IP地址，可能是公网IP或内网IP，用于定位攻击来源 **取值范围** 符合IPv4或IPv6格式的字符串，支持单个IP或IP段（如127.0.0.1、2001:db8::1）
    *
    * @return string|null
    */
    public function getReqSrcIp()
    {
        return $this->container['reqSrcIp'];
    }

    /**
    * Sets reqSrcIp
    *
    * @param string|null $reqSrcIp **参数解释** 发起攻击的源IP地址，可能是公网IP或内网IP，用于定位攻击来源 **取值范围** 符合IPv4或IPv6格式的字符串，支持单个IP或IP段（如127.0.0.1、2001:db8::1）
    *
    * @return $this
    */
    public function setReqSrcIp($reqSrcIp)
    {
        $this->container['reqSrcIp'] = $reqSrcIp;
        return $this;
    }

    /**
    * Gets appStack
    *  **参数解释** 应用防护事件发生时的应用程序调用堆栈信息，用于定位漏洞触发点 **取值范围** 字符长度0-4096位，支持英文、数字、符号等堆栈信息常见字符，为空表示无堆栈数据
    *
    * @return string|null
    */
    public function getAppStack()
    {
        return $this->container['appStack'];
    }

    /**
    * Sets appStack
    *
    * @param string|null $appStack **参数解释** 应用防护事件发生时的应用程序调用堆栈信息，用于定位漏洞触发点 **取值范围** 字符长度0-4096位，支持英文、数字、符号等堆栈信息常见字符，为空表示无堆栈数据
    *
    * @return $this
    */
    public function setAppStack($appStack)
    {
        $this->container['appStack'] = $appStack;
        return $this;
    }

    /**
    * Gets attackInputName
    *  **参数解释** 攻击请求中的附属字段名称（如请求头字段、表单字段等），用于标识攻击载荷的传入字段 **取值范围** 字符长度0-256位，支持英文、数字、符号等HTTP请求字段常见字符，为空表示无相关字段
    *
    * @return string|null
    */
    public function getAttackInputName()
    {
        return $this->container['attackInputName'];
    }

    /**
    * Sets attackInputName
    *
    * @param string|null $attackInputName **参数解释** 攻击请求中的附属字段名称（如请求头字段、表单字段等），用于标识攻击载荷的传入字段 **取值范围** 字符长度0-256位，支持英文、数字、符号等HTTP请求字段常见字符，为空表示无相关字段
    *
    * @return $this
    */
    public function setAttackInputName($attackInputName)
    {
        $this->container['attackInputName'] = $attackInputName;
        return $this;
    }

    /**
    * Gets attackInputValue
    *  **参数解释** 攻击请求中包含的恶意载荷数据（如注入脚本、恶意命令等），用于分析攻击手段 **取值范围** 字符长度0-2048位，支持各类字符（含特殊字符），为空表示无恶意载荷
    *
    * @return string|null
    */
    public function getAttackInputValue()
    {
        return $this->container['attackInputValue'];
    }

    /**
    * Sets attackInputValue
    *
    * @param string|null $attackInputValue **参数解释** 攻击请求中包含的恶意载荷数据（如注入脚本、恶意命令等），用于分析攻击手段 **取值范围** 字符长度0-2048位，支持各类字符（含特殊字符），为空表示无恶意载荷
    *
    * @return $this
    */
    public function setAttackInputValue($attackInputValue)
    {
        $this->container['attackInputValue'] = $attackInputValue;
        return $this;
    }

    /**
    * Gets queryString
    *  **参数解释** 攻击请求的URL查询字符串部分（即?后的参数），用于分析攻击请求的参数传递方式 **取值范围** 字符长度0-1024位，支持URL编码后的字符，为空表示无查询字符串
    *
    * @return string|null
    */
    public function getQueryString()
    {
        return $this->container['queryString'];
    }

    /**
    * Sets queryString
    *
    * @param string|null $queryString **参数解释** 攻击请求的URL查询字符串部分（即?后的参数），用于分析攻击请求的参数传递方式 **取值范围** 字符长度0-1024位，支持URL编码后的字符，为空表示无查询字符串
    *
    * @return $this
    */
    public function setQueryString($queryString)
    {
        $this->container['queryString'] = $queryString;
        return $this;
    }

    /**
    * Gets reqHeaders
    *  **参数解释** 攻击请求的HTTP请求头信息，以JSON格式存储，包含User-Agent、Host等字段 **取值范围** 字符长度0-4096位，为JSON格式字符串，字段名和值支持常见HTTP头字符，为空表示无请求头信息
    *
    * @return string|null
    */
    public function getReqHeaders()
    {
        return $this->container['reqHeaders'];
    }

    /**
    * Sets reqHeaders
    *
    * @param string|null $reqHeaders **参数解释** 攻击请求的HTTP请求头信息，以JSON格式存储，包含User-Agent、Host等字段 **取值范围** 字符长度0-4096位，为JSON格式字符串，字段名和值支持常见HTTP头字符，为空表示无请求头信息
    *
    * @return $this
    */
    public function setReqHeaders($reqHeaders)
    {
        $this->container['reqHeaders'] = $reqHeaders;
        return $this;
    }

    /**
    * Gets reqMethod
    *  **参数解释** 攻击请求使用的HTTP方法（如GET、POST），用于分析攻击的请求类型 **取值范围** 字符长度3-10位，支持标准HTTP方法（GET、POST、PUT、DELETE等），区分大小写
    *
    * @return string|null
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string|null $reqMethod **参数解释** 攻击请求使用的HTTP方法（如GET、POST），用于分析攻击的请求类型 **取值范围** 字符长度3-10位，支持标准HTTP方法（GET、POST、PUT、DELETE等），区分大小写
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets reqParams
    *  **参数解释** 攻击请求的请求体参数（如POST请求的表单数据），用于分析攻击的参数传递内容 **取值范围** 字符长度0-2048位，支持表单编码或JSON格式字符，为空表示无请求体参数
    *
    * @return string|null
    */
    public function getReqParams()
    {
        return $this->container['reqParams'];
    }

    /**
    * Sets reqParams
    *
    * @param string|null $reqParams **参数解释** 攻击请求的请求体参数（如POST请求的表单数据），用于分析攻击的参数传递内容 **取值范围** 字符长度0-2048位，支持表单编码或JSON格式字符，为空表示无请求体参数
    *
    * @return $this
    */
    public function setReqParams($reqParams)
    {
        $this->container['reqParams'] = $reqParams;
        return $this;
    }

    /**
    * Gets reqPath
    *  **参数解释** 攻击请求的URL路径部分（不含查询字符串），用于定位攻击的目标接口 **取值范围** 字符长度0-512位，支持URL路径字符（如/、字母、数字、短横线、下划线），为空表示根路径
    *
    * @return string|null
    */
    public function getReqPath()
    {
        return $this->container['reqPath'];
    }

    /**
    * Sets reqPath
    *
    * @param string|null $reqPath **参数解释** 攻击请求的URL路径部分（不含查询字符串），用于定位攻击的目标接口 **取值范围** 字符长度0-512位，支持URL路径字符（如/、字母、数字、短横线、下划线），为空表示根路径
    *
    * @return $this
    */
    public function setReqPath($reqPath)
    {
        $this->container['reqPath'] = $reqPath;
        return $this;
    }

    /**
    * Gets reqProtocol
    *  **参数解释** 攻击请求使用的HTTP协议版本（如HTTP/1.1），用于分析攻击的协议环境 **取值范围** 字符长度5-10位，支持HTTP/1.0、HTTP/1.1、HTTP/2等标准协议版本
    *
    * @return string|null
    */
    public function getReqProtocol()
    {
        return $this->container['reqProtocol'];
    }

    /**
    * Sets reqProtocol
    *
    * @param string|null $reqProtocol **参数解释** 攻击请求使用的HTTP协议版本（如HTTP/1.1），用于分析攻击的协议环境 **取值范围** 字符长度5-10位，支持HTTP/1.0、HTTP/1.1、HTTP/2等标准协议版本
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
        return $this;
    }

    /**
    * Gets reqUrl
    *  **参数解释** 攻击请求的完整URL地址（含协议、主机、路径、查询字符串），用于完整还原攻击请求 **取值范围** 字符长度0-1024位，符合URL格式规范，为空表示无完整URL信息
    *
    * @return string|null
    */
    public function getReqUrl()
    {
        return $this->container['reqUrl'];
    }

    /**
    * Sets reqUrl
    *
    * @param string|null $reqUrl **参数解释** 攻击请求的完整URL地址（含协议、主机、路径、查询字符串），用于完整还原攻击请求 **取值范围** 字符长度0-1024位，符合URL格式规范，为空表示无完整URL信息
    *
    * @return $this
    */
    public function setReqUrl($reqUrl)
    {
        $this->container['reqUrl'] = $reqUrl;
        return $this;
    }

    /**
    * Gets attackTag
    *  **参数解释** 应用防护事件的攻击类型标识，与请求参数的攻击标识对应（格式为小写下划线） **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
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
    * @param string|null $attackTag **参数解释** 应用防护事件的攻击类型标识，与请求参数的攻击标识对应（格式为小写下划线） **取值范围** - Attack Success：攻击成功 - Attack Attempt：攻击尝试 - Attack Blocked：攻击被阻断 - Abnormal Behavior：异常行为 - Collapsible Host：主机失陷 - System Vulnerability：系统脆弱性
    *
    * @return $this
    */
    public function setAttackTag($attackTag)
    {
        $this->container['attackTag'] = $attackTag;
        return $this;
    }

    /**
    * Gets chkProbe
    *  **参数解释**: 检测到该攻击事件的RASP探针标识，用于定位探针类型和检测模块 **取值范围**: 字符长度1-128位，支持英文、数字、点号、短横线、下划线，为系统预定义的探针标识
    *
    * @return string|null
    */
    public function getChkProbe()
    {
        return $this->container['chkProbe'];
    }

    /**
    * Sets chkProbe
    *
    * @param string|null $chkProbe **参数解释**: 检测到该攻击事件的RASP探针标识，用于定位探针类型和检测模块 **取值范围**: 字符长度1-128位，支持英文、数字、点号、短横线、下划线，为系统预定义的探针标识
    *
    * @return $this
    */
    public function setChkProbe($chkProbe)
    {
        $this->container['chkProbe'] = $chkProbe;
        return $this;
    }

    /**
    * Gets chkRule
    *  **参数解释** 触发该防护事件的检测规则唯一标识，用于关联具体的防护规则配置 **取值范围** 字符长度1-64位，支持英文、数字、下划线，为系统预定义的规则标识（如ExpressionInject）
    *
    * @return string|null
    */
    public function getChkRule()
    {
        return $this->container['chkRule'];
    }

    /**
    * Sets chkRule
    *
    * @param string|null $chkRule **参数解释** 触发该防护事件的检测规则唯一标识，用于关联具体的防护规则配置 **取值范围** 字符长度1-64位，支持英文、数字、下划线，为系统预定义的规则标识（如ExpressionInject）
    *
    * @return $this
    */
    public function setChkRule($chkRule)
    {
        $this->container['chkRule'] = $chkRule;
        return $this;
    }

    /**
    * Gets chkRuleDesc
    *  **参数解释** 触发该防护事件的检测规则详细描述，说明规则的检测逻辑和目的 **取值范围** 字符长度0-512位，支持中文、英文、数字、常用标点符号，为空表示无规则描述
    *
    * @return string|null
    */
    public function getChkRuleDesc()
    {
        return $this->container['chkRuleDesc'];
    }

    /**
    * Sets chkRuleDesc
    *
    * @param string|null $chkRuleDesc **参数解释** 触发该防护事件的检测规则详细描述，说明规则的检测逻辑和目的 **取值范围** 字符长度0-512位，支持中文、英文、数字、常用标点符号，为空表示无规则描述
    *
    * @return $this
    */
    public function setChkRuleDesc($chkRuleDesc)
    {
        $this->container['chkRuleDesc'] = $chkRuleDesc;
        return $this;
    }

    /**
    * Gets existBug
    *  **参数解释** 标识该防护事件是否因应用存在漏洞导致（yes表示存在漏洞，no表示不存在） **取值范围** - yes：存在漏洞 - no：不存在漏洞 - unknown：未知
    *
    * @return string|null
    */
    public function getExistBug()
    {
        return $this->container['existBug'];
    }

    /**
    * Sets existBug
    *
    * @param string|null $existBug **参数解释** 标识该防护事件是否因应用存在漏洞导致（yes表示存在漏洞，no表示不存在） **取值范围** - yes：存在漏洞 - no：不存在漏洞 - unknown：未知
    *
    * @return $this
    */
    public function setExistBug($existBug)
    {
        $this->container['existBug'] = $existBug;
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

