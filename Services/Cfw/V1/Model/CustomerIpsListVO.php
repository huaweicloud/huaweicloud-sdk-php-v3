<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerIpsListVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerIpsListVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**：   不涉及 **取值范围**：   0：ANY   1：Windows   2：Linux   3：FreeBSD   4：Solaris   5：Other Unix   6：网络设备   7：Mac OS   8：IOS   9：Android   10：Others   **默认取值**：   不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制 2：漏洞扫描 3：邮件攻击 4：漏洞攻击 5：Web攻击 6：密码攻击 7：劫持攻击 8：协议异常 9：特洛伊木马 10：蠕虫 11：缓冲区溢出 12：黑客工具 13：间谍软件 14：DDos泛洪 15：应用层DDos攻击 16：其他可疑行为 17：可疑DNS活动 18：网络钓鱼 19：垃圾邮件 20：其他攻击 **默认取值**： 不涉及
    * configStatus  **参数解释**： 规则配置状态 **约束限制**：   不涉及 **取值范围**： 0：初始化 1：配置中 2：配置成功 3：配置失败 **默认取值**：   不涉及
    * content  **参数解释**： 匹配IPS攻击的内容 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * dstPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * dstPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 1 - 65535 **默认取值**：   不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**：   不涉及 **取值范围**：   1：FTP   2：TELNET   3：SMTP   4：DNS_TCP   5：DNS_UDP   6：DHCP   7：TFTP   8：FINGER   9：HTTP   10：POP3   11：SUNRPC_TCP   12：SUNRPC_UDP   13：NNTP   14：MSRPC_TCP   15：MSRPC_UDP   16：NETBIOS_NAME_TCP   17：NETBIOS_NAME_UDP   18：NETBIOS_SMB   19：NETBIOS_DATAGRAM   20：IMAP4   21：SNMP   22：LDAP   23：MSSQL   24：ORACLE   **默认取值**：   不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： 0：致命 1：高危 2：中危 3：低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**：   不涉及 **取值范围**： 0：ANY 1：ADOBE 2：APACHE 3：APPLE 4：CA 5：CISCO 6：GOOGLE_CHROME 7：HP 8：IBM 9：IE 10：IIS 11：MC_AFEE 12：MEDIA_PLAYER 13：MICROSOFT_NET 14：MICROSOFT_EDGE 15：MICROSOFT_EXCHANGE 16：MICROSOFT_OFFICE 17：MICROSOFT_OUTLOOK 18：MICROSOFT_SHARE_POINT 19：MICROSOFT_WINDOWS 20：MOZILLA 21：MSSQL 22：MYSQL 23：NOVELL 24：ORACLE 25：SAMBA 26：SAMSUNG 27：SAP 28：SCADA 29：SQUID 30：SUN 31：SYMANTEC 32：TREND_MICRO 33：VMWARE 34：WORD_PRESS 35：Others **默认取值**：   不涉及
    * srcPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * srcPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * groupId  **参数解释**： 集群ID **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'int',
            'affectedOs' => 'int',
            'attackType' => 'int',
            'configStatus' => 'int',
            'content' => 'string',
            'dstPortType' => 'int',
            'dstPorts' => 'string',
            'ipsCfwId' => 'string',
            'ipsId' => 'string',
            'ipsName' => 'string',
            'protocol' => 'int',
            'severity' => 'int',
            'software' => 'int',
            'srcPortType' => 'int',
            'srcPorts' => 'string',
            'groupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**：   不涉及 **取值范围**：   0：ANY   1：Windows   2：Linux   3：FreeBSD   4：Solaris   5：Other Unix   6：网络设备   7：Mac OS   8：IOS   9：Android   10：Others   **默认取值**：   不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制 2：漏洞扫描 3：邮件攻击 4：漏洞攻击 5：Web攻击 6：密码攻击 7：劫持攻击 8：协议异常 9：特洛伊木马 10：蠕虫 11：缓冲区溢出 12：黑客工具 13：间谍软件 14：DDos泛洪 15：应用层DDos攻击 16：其他可疑行为 17：可疑DNS活动 18：网络钓鱼 19：垃圾邮件 20：其他攻击 **默认取值**： 不涉及
    * configStatus  **参数解释**： 规则配置状态 **约束限制**：   不涉及 **取值范围**： 0：初始化 1：配置中 2：配置成功 3：配置失败 **默认取值**：   不涉及
    * content  **参数解释**： 匹配IPS攻击的内容 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * dstPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * dstPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 1 - 65535 **默认取值**：   不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**：   不涉及 **取值范围**：   1：FTP   2：TELNET   3：SMTP   4：DNS_TCP   5：DNS_UDP   6：DHCP   7：TFTP   8：FINGER   9：HTTP   10：POP3   11：SUNRPC_TCP   12：SUNRPC_UDP   13：NNTP   14：MSRPC_TCP   15：MSRPC_UDP   16：NETBIOS_NAME_TCP   17：NETBIOS_NAME_UDP   18：NETBIOS_SMB   19：NETBIOS_DATAGRAM   20：IMAP4   21：SNMP   22：LDAP   23：MSSQL   24：ORACLE   **默认取值**：   不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： 0：致命 1：高危 2：中危 3：低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**：   不涉及 **取值范围**： 0：ANY 1：ADOBE 2：APACHE 3：APPLE 4：CA 5：CISCO 6：GOOGLE_CHROME 7：HP 8：IBM 9：IE 10：IIS 11：MC_AFEE 12：MEDIA_PLAYER 13：MICROSOFT_NET 14：MICROSOFT_EDGE 15：MICROSOFT_EXCHANGE 16：MICROSOFT_OFFICE 17：MICROSOFT_OUTLOOK 18：MICROSOFT_SHARE_POINT 19：MICROSOFT_WINDOWS 20：MOZILLA 21：MSSQL 22：MYSQL 23：NOVELL 24：ORACLE 25：SAMBA 26：SAMSUNG 27：SAP 28：SCADA 29：SQUID 30：SUN 31：SYMANTEC 32：TREND_MICRO 33：VMWARE 34：WORD_PRESS 35：Others **默认取值**：   不涉及
    * srcPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * srcPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * groupId  **参数解释**： 集群ID **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => 'int32',
        'affectedOs' => 'int32',
        'attackType' => 'int32',
        'configStatus' => 'int32',
        'content' => null,
        'dstPortType' => 'int32',
        'dstPorts' => null,
        'ipsCfwId' => null,
        'ipsId' => null,
        'ipsName' => null,
        'protocol' => 'int32',
        'severity' => 'int32',
        'software' => 'int32',
        'srcPortType' => 'int32',
        'srcPorts' => null,
        'groupId' => null
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
    * action  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**：   不涉及 **取值范围**：   0：ANY   1：Windows   2：Linux   3：FreeBSD   4：Solaris   5：Other Unix   6：网络设备   7：Mac OS   8：IOS   9：Android   10：Others   **默认取值**：   不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制 2：漏洞扫描 3：邮件攻击 4：漏洞攻击 5：Web攻击 6：密码攻击 7：劫持攻击 8：协议异常 9：特洛伊木马 10：蠕虫 11：缓冲区溢出 12：黑客工具 13：间谍软件 14：DDos泛洪 15：应用层DDos攻击 16：其他可疑行为 17：可疑DNS活动 18：网络钓鱼 19：垃圾邮件 20：其他攻击 **默认取值**： 不涉及
    * configStatus  **参数解释**： 规则配置状态 **约束限制**：   不涉及 **取值范围**： 0：初始化 1：配置中 2：配置成功 3：配置失败 **默认取值**：   不涉及
    * content  **参数解释**： 匹配IPS攻击的内容 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * dstPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * dstPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 1 - 65535 **默认取值**：   不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**：   不涉及 **取值范围**：   1：FTP   2：TELNET   3：SMTP   4：DNS_TCP   5：DNS_UDP   6：DHCP   7：TFTP   8：FINGER   9：HTTP   10：POP3   11：SUNRPC_TCP   12：SUNRPC_UDP   13：NNTP   14：MSRPC_TCP   15：MSRPC_UDP   16：NETBIOS_NAME_TCP   17：NETBIOS_NAME_UDP   18：NETBIOS_SMB   19：NETBIOS_DATAGRAM   20：IMAP4   21：SNMP   22：LDAP   23：MSSQL   24：ORACLE   **默认取值**：   不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： 0：致命 1：高危 2：中危 3：低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**：   不涉及 **取值范围**： 0：ANY 1：ADOBE 2：APACHE 3：APPLE 4：CA 5：CISCO 6：GOOGLE_CHROME 7：HP 8：IBM 9：IE 10：IIS 11：MC_AFEE 12：MEDIA_PLAYER 13：MICROSOFT_NET 14：MICROSOFT_EDGE 15：MICROSOFT_EXCHANGE 16：MICROSOFT_OFFICE 17：MICROSOFT_OUTLOOK 18：MICROSOFT_SHARE_POINT 19：MICROSOFT_WINDOWS 20：MOZILLA 21：MSSQL 22：MYSQL 23：NOVELL 24：ORACLE 25：SAMBA 26：SAMSUNG 27：SAP 28：SCADA 29：SQUID 30：SUN 31：SYMANTEC 32：TREND_MICRO 33：VMWARE 34：WORD_PRESS 35：Others **默认取值**：   不涉及
    * srcPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * srcPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * groupId  **参数解释**： 集群ID **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'affectedOs' => 'affected_os',
            'attackType' => 'attack_type',
            'configStatus' => 'config_status',
            'content' => 'content',
            'dstPortType' => 'dst_port_type',
            'dstPorts' => 'dst_ports',
            'ipsCfwId' => 'ips_cfw_id',
            'ipsId' => 'ips_id',
            'ipsName' => 'ips_name',
            'protocol' => 'protocol',
            'severity' => 'severity',
            'software' => 'software',
            'srcPortType' => 'src_port_type',
            'srcPorts' => 'src_ports',
            'groupId' => 'group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**：   不涉及 **取值范围**：   0：ANY   1：Windows   2：Linux   3：FreeBSD   4：Solaris   5：Other Unix   6：网络设备   7：Mac OS   8：IOS   9：Android   10：Others   **默认取值**：   不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制 2：漏洞扫描 3：邮件攻击 4：漏洞攻击 5：Web攻击 6：密码攻击 7：劫持攻击 8：协议异常 9：特洛伊木马 10：蠕虫 11：缓冲区溢出 12：黑客工具 13：间谍软件 14：DDos泛洪 15：应用层DDos攻击 16：其他可疑行为 17：可疑DNS活动 18：网络钓鱼 19：垃圾邮件 20：其他攻击 **默认取值**： 不涉及
    * configStatus  **参数解释**： 规则配置状态 **约束限制**：   不涉及 **取值范围**： 0：初始化 1：配置中 2：配置成功 3：配置失败 **默认取值**：   不涉及
    * content  **参数解释**： 匹配IPS攻击的内容 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * dstPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * dstPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 1 - 65535 **默认取值**：   不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**：   不涉及 **取值范围**：   1：FTP   2：TELNET   3：SMTP   4：DNS_TCP   5：DNS_UDP   6：DHCP   7：TFTP   8：FINGER   9：HTTP   10：POP3   11：SUNRPC_TCP   12：SUNRPC_UDP   13：NNTP   14：MSRPC_TCP   15：MSRPC_UDP   16：NETBIOS_NAME_TCP   17：NETBIOS_NAME_UDP   18：NETBIOS_SMB   19：NETBIOS_DATAGRAM   20：IMAP4   21：SNMP   22：LDAP   23：MSSQL   24：ORACLE   **默认取值**：   不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： 0：致命 1：高危 2：中危 3：低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**：   不涉及 **取值范围**： 0：ANY 1：ADOBE 2：APACHE 3：APPLE 4：CA 5：CISCO 6：GOOGLE_CHROME 7：HP 8：IBM 9：IE 10：IIS 11：MC_AFEE 12：MEDIA_PLAYER 13：MICROSOFT_NET 14：MICROSOFT_EDGE 15：MICROSOFT_EXCHANGE 16：MICROSOFT_OFFICE 17：MICROSOFT_OUTLOOK 18：MICROSOFT_SHARE_POINT 19：MICROSOFT_WINDOWS 20：MOZILLA 21：MSSQL 22：MYSQL 23：NOVELL 24：ORACLE 25：SAMBA 26：SAMSUNG 27：SAP 28：SCADA 29：SQUID 30：SUN 31：SYMANTEC 32：TREND_MICRO 33：VMWARE 34：WORD_PRESS 35：Others **默认取值**：   不涉及
    * srcPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * srcPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * groupId  **参数解释**： 集群ID **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'affectedOs' => 'setAffectedOs',
            'attackType' => 'setAttackType',
            'configStatus' => 'setConfigStatus',
            'content' => 'setContent',
            'dstPortType' => 'setDstPortType',
            'dstPorts' => 'setDstPorts',
            'ipsCfwId' => 'setIpsCfwId',
            'ipsId' => 'setIpsId',
            'ipsName' => 'setIpsName',
            'protocol' => 'setProtocol',
            'severity' => 'setSeverity',
            'software' => 'setSoftware',
            'srcPortType' => 'setSrcPortType',
            'srcPorts' => 'setSrcPorts',
            'groupId' => 'setGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**：   不涉及 **取值范围**：   0：ANY   1：Windows   2：Linux   3：FreeBSD   4：Solaris   5：Other Unix   6：网络设备   7：Mac OS   8：IOS   9：Android   10：Others   **默认取值**：   不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制 2：漏洞扫描 3：邮件攻击 4：漏洞攻击 5：Web攻击 6：密码攻击 7：劫持攻击 8：协议异常 9：特洛伊木马 10：蠕虫 11：缓冲区溢出 12：黑客工具 13：间谍软件 14：DDos泛洪 15：应用层DDos攻击 16：其他可疑行为 17：可疑DNS活动 18：网络钓鱼 19：垃圾邮件 20：其他攻击 **默认取值**： 不涉及
    * configStatus  **参数解释**： 规则配置状态 **约束限制**：   不涉及 **取值范围**： 0：初始化 1：配置中 2：配置成功 3：配置失败 **默认取值**：   不涉及
    * content  **参数解释**： 匹配IPS攻击的内容 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * dstPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * dstPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 1 - 65535 **默认取值**：   不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**：   不涉及 **取值范围**：   1：FTP   2：TELNET   3：SMTP   4：DNS_TCP   5：DNS_UDP   6：DHCP   7：TFTP   8：FINGER   9：HTTP   10：POP3   11：SUNRPC_TCP   12：SUNRPC_UDP   13：NNTP   14：MSRPC_TCP   15：MSRPC_UDP   16：NETBIOS_NAME_TCP   17：NETBIOS_NAME_UDP   18：NETBIOS_SMB   19：NETBIOS_DATAGRAM   20：IMAP4   21：SNMP   22：LDAP   23：MSSQL   24：ORACLE   **默认取值**：   不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： 0：致命 1：高危 2：中危 3：低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**：   不涉及 **取值范围**： 0：ANY 1：ADOBE 2：APACHE 3：APPLE 4：CA 5：CISCO 6：GOOGLE_CHROME 7：HP 8：IBM 9：IE 10：IIS 11：MC_AFEE 12：MEDIA_PLAYER 13：MICROSOFT_NET 14：MICROSOFT_EDGE 15：MICROSOFT_EXCHANGE 16：MICROSOFT_OFFICE 17：MICROSOFT_OUTLOOK 18：MICROSOFT_SHARE_POINT 19：MICROSOFT_WINDOWS 20：MOZILLA 21：MSSQL 22：MYSQL 23：NOVELL 24：ORACLE 25：SAMBA 26：SAMSUNG 27：SAP 28：SCADA 29：SQUID 30：SUN 31：SYMANTEC 32：TREND_MICRO 33：VMWARE 34：WORD_PRESS 35：Others **默认取值**：   不涉及
    * srcPortType  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    * srcPorts  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    * groupId  **参数解释**： 集群ID **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'affectedOs' => 'getAffectedOs',
            'attackType' => 'getAttackType',
            'configStatus' => 'getConfigStatus',
            'content' => 'getContent',
            'dstPortType' => 'getDstPortType',
            'dstPorts' => 'getDstPorts',
            'ipsCfwId' => 'getIpsCfwId',
            'ipsId' => 'getIpsId',
            'ipsName' => 'getIpsName',
            'protocol' => 'getProtocol',
            'severity' => 'getSeverity',
            'software' => 'getSoftware',
            'srcPortType' => 'getSrcPortType',
            'srcPorts' => 'getSrcPorts',
            'groupId' => 'getGroupId'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['affectedOs'] = isset($data['affectedOs']) ? $data['affectedOs'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['dstPortType'] = isset($data['dstPortType']) ? $data['dstPortType'] : null;
        $this->container['dstPorts'] = isset($data['dstPorts']) ? $data['dstPorts'] : null;
        $this->container['ipsCfwId'] = isset($data['ipsCfwId']) ? $data['ipsCfwId'] : null;
        $this->container['ipsId'] = isset($data['ipsId']) ? $data['ipsId'] : null;
        $this->container['ipsName'] = isset($data['ipsName']) ? $data['ipsName'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['srcPortType'] = isset($data['srcPortType']) ? $data['srcPortType'] : null;
        $this->container['srcPorts'] = isset($data['srcPorts']) ? $data['srcPorts'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets action
    *  **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    *
    * @return int|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param int|null $action **参数解释**： 自定义IPS规则执行动作,仅更新自定义IPS规则场景下需要设置，其他场景无需设置 **约束限制**：   不涉及 **取值范围**： 0：只记录日志 1：重置/拦截 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets affectedOs
    *  **参数解释**： 影响操作系统 **约束限制**：   不涉及 **取值范围**：   0：ANY   1：Windows   2：Linux   3：FreeBSD   4：Solaris   5：Other Unix   6：网络设备   7：Mac OS   8：IOS   9：Android   10：Others   **默认取值**：   不涉及
    *
    * @return int|null
    */
    public function getAffectedOs()
    {
        return $this->container['affectedOs'];
    }

    /**
    * Sets affectedOs
    *
    * @param int|null $affectedOs **参数解释**： 影响操作系统 **约束限制**：   不涉及 **取值范围**：   0：ANY   1：Windows   2：Linux   3：FreeBSD   4：Solaris   5：Other Unix   6：网络设备   7：Mac OS   8：IOS   9：Android   10：Others   **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setAffectedOs($affectedOs)
    {
        $this->container['affectedOs'] = $affectedOs;
        return $this;
    }

    /**
    * Gets attackType
    *  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制 2：漏洞扫描 3：邮件攻击 4：漏洞攻击 5：Web攻击 6：密码攻击 7：劫持攻击 8：协议异常 9：特洛伊木马 10：蠕虫 11：缓冲区溢出 12：黑客工具 13：间谍软件 14：DDos泛洪 15：应用层DDos攻击 16：其他可疑行为 17：可疑DNS活动 18：网络钓鱼 19：垃圾邮件 20：其他攻击 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAttackType()
    {
        return $this->container['attackType'];
    }

    /**
    * Sets attackType
    *
    * @param int|null $attackType **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制 2：漏洞扫描 3：邮件攻击 4：漏洞攻击 5：Web攻击 6：密码攻击 7：劫持攻击 8：协议异常 9：特洛伊木马 10：蠕虫 11：缓冲区溢出 12：黑客工具 13：间谍软件 14：DDos泛洪 15：应用层DDos攻击 16：其他可疑行为 17：可疑DNS活动 18：网络钓鱼 19：垃圾邮件 20：其他攻击 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets configStatus
    *  **参数解释**： 规则配置状态 **约束限制**：   不涉及 **取值范围**： 0：初始化 1：配置中 2：配置成功 3：配置失败 **默认取值**：   不涉及
    *
    * @return int|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param int|null $configStatus **参数解释**： 规则配置状态 **约束限制**：   不涉及 **取值范围**： 0：初始化 1：配置中 2：配置成功 3：配置失败 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释**： 匹配IPS攻击的内容 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释**： 匹配IPS攻击的内容 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets dstPortType
    *  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    *
    * @return int|null
    */
    public function getDstPortType()
    {
        return $this->container['dstPortType'];
    }

    /**
    * Sets dstPortType
    *
    * @param int|null $dstPortType **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setDstPortType($dstPortType)
    {
        $this->container['dstPortType'] = $dstPortType;
        return $this;
    }

    /**
    * Gets dstPorts
    *  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 1 - 65535 **默认取值**：   不涉及
    *
    * @return string|null
    */
    public function getDstPorts()
    {
        return $this->container['dstPorts'];
    }

    /**
    * Sets dstPorts
    *
    * @param string|null $dstPorts **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 1 - 65535 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setDstPorts($dstPorts)
    {
        $this->container['dstPorts'] = $dstPorts;
        return $this;
    }

    /**
    * Gets ipsCfwId
    *  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getIpsCfwId()
    {
        return $this->container['ipsCfwId'];
    }

    /**
    * Sets ipsCfwId
    *
    * @param string|null $ipsCfwId **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setIpsCfwId($ipsCfwId)
    {
        $this->container['ipsCfwId'] = $ipsCfwId;
        return $this;
    }

    /**
    * Gets ipsId
    *  **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getIpsId()
    {
        return $this->container['ipsId'];
    }

    /**
    * Sets ipsId
    *
    * @param string|null $ipsId **参数解释**： ips规则ID， 可通过调用获取ips规则列表获取，通过data.records.ips_id获取。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setIpsId($ipsId)
    {
        $this->container['ipsId'] = $ipsId;
        return $this;
    }

    /**
    * Gets ipsName
    *  **参数解释**： ips规则名称 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @return string|null
    */
    public function getIpsName()
    {
        return $this->container['ipsName'];
    }

    /**
    * Sets ipsName
    *
    * @param string|null $ipsName **参数解释**： ips规则名称 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setIpsName($ipsName)
    {
        $this->container['ipsName'] = $ipsName;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 协议类型 **约束限制**：   不涉及 **取值范围**：   1：FTP   2：TELNET   3：SMTP   4：DNS_TCP   5：DNS_UDP   6：DHCP   7：TFTP   8：FINGER   9：HTTP   10：POP3   11：SUNRPC_TCP   12：SUNRPC_UDP   13：NNTP   14：MSRPC_TCP   15：MSRPC_UDP   16：NETBIOS_NAME_TCP   17：NETBIOS_NAME_UDP   18：NETBIOS_SMB   19：NETBIOS_DATAGRAM   20：IMAP4   21：SNMP   22：LDAP   23：MSSQL   24：ORACLE   **默认取值**：   不涉及
    *
    * @return int|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int|null $protocol **参数解释**： 协议类型 **约束限制**：   不涉及 **取值范围**：   1：FTP   2：TELNET   3：SMTP   4：DNS_TCP   5：DNS_UDP   6：DHCP   7：TFTP   8：FINGER   9：HTTP   10：POP3   11：SUNRPC_TCP   12：SUNRPC_UDP   13：NNTP   14：MSRPC_TCP   15：MSRPC_UDP   16：NETBIOS_NAME_TCP   17：NETBIOS_NAME_UDP   18：NETBIOS_SMB   19：NETBIOS_DATAGRAM   20：IMAP4   21：SNMP   22：LDAP   23：MSSQL   24：ORACLE   **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： 0：致命 1：高危 2：中危 3：低危 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param int|null $severity **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： 0：致命 1：高危 2：中危 3：低危 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets software
    *  **参数解释**： 影响软件 **约束限制**：   不涉及 **取值范围**： 0：ANY 1：ADOBE 2：APACHE 3：APPLE 4：CA 5：CISCO 6：GOOGLE_CHROME 7：HP 8：IBM 9：IE 10：IIS 11：MC_AFEE 12：MEDIA_PLAYER 13：MICROSOFT_NET 14：MICROSOFT_EDGE 15：MICROSOFT_EXCHANGE 16：MICROSOFT_OFFICE 17：MICROSOFT_OUTLOOK 18：MICROSOFT_SHARE_POINT 19：MICROSOFT_WINDOWS 20：MOZILLA 21：MSSQL 22：MYSQL 23：NOVELL 24：ORACLE 25：SAMBA 26：SAMSUNG 27：SAP 28：SCADA 29：SQUID 30：SUN 31：SYMANTEC 32：TREND_MICRO 33：VMWARE 34：WORD_PRESS 35：Others **默认取值**：   不涉及
    *
    * @return int|null
    */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
    * Sets software
    *
    * @param int|null $software **参数解释**： 影响软件 **约束限制**：   不涉及 **取值范围**： 0：ANY 1：ADOBE 2：APACHE 3：APPLE 4：CA 5：CISCO 6：GOOGLE_CHROME 7：HP 8：IBM 9：IE 10：IIS 11：MC_AFEE 12：MEDIA_PLAYER 13：MICROSOFT_NET 14：MICROSOFT_EDGE 15：MICROSOFT_EXCHANGE 16：MICROSOFT_OFFICE 17：MICROSOFT_OUTLOOK 18：MICROSOFT_SHARE_POINT 19：MICROSOFT_WINDOWS 20：MOZILLA 21：MSSQL 22：MYSQL 23：NOVELL 24：ORACLE 25：SAMBA 26：SAMSUNG 27：SAP 28：SCADA 29：SQUID 30：SUN 31：SYMANTEC 32：TREND_MICRO 33：VMWARE 34：WORD_PRESS 35：Others **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;
        return $this;
    }

    /**
    * Gets srcPortType
    *  **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    *
    * @return int|null
    */
    public function getSrcPortType()
    {
        return $this->container['srcPortType'];
    }

    /**
    * Sets srcPortType
    *
    * @param int|null $srcPortType **参数解释**： 端口操作类型 **约束限制**：   不涉及 **取值范围**： -1：Any 0：包含 1：排除 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setSrcPortType($srcPortType)
    {
        $this->container['srcPortType'] = $srcPortType;
        return $this;
    }

    /**
    * Gets srcPorts
    *  **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @return string|null
    */
    public function getSrcPorts()
    {
        return $this->container['srcPorts'];
    }

    /**
    * Sets srcPorts
    *
    * @param string|null $srcPorts **参数解释**： 端口 **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setSrcPorts($srcPorts)
    {
        $this->container['srcPorts'] = $srcPorts;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 集群ID **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
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
    * @param string|null $groupId **参数解释**： 集群ID **约束限制**：   不涉及 **取值范围**： 不涉及 **默认取值**：   不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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

