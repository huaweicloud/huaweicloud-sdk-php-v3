<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomerIpsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomerIpsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionType  **参数解释**： 动作 **约束限制**： 不涉及 **取值范围**： 0 仅记录日志 1 拦截session 2 拦截ip **默认取值**： 不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**： 不涉及 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others **默认取值**： 不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则的id **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE **默认取值**： 不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： critical：致命，high：高危，medium:中危，low:低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**： 不涉及 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others **默认取值**： 不涉及
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionType' => 'int',
            'affectedOs' => 'int',
            'attackType' => 'int',
            'ipsName' => 'string',
            'ipsId' => 'string',
            'protocol' => 'int',
            'severity' => 'int',
            'software' => 'int',
            'objectId' => 'string',
            'enterpriseProjectId' => 'string',
            'fwInstanceId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionType  **参数解释**： 动作 **约束限制**： 不涉及 **取值范围**： 0 仅记录日志 1 拦截session 2 拦截ip **默认取值**： 不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**： 不涉及 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others **默认取值**： 不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则的id **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE **默认取值**： 不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： critical：致命，high：高危，medium:中危，low:低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**： 不涉及 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others **默认取值**： 不涉及
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionType' => 'int32',
        'affectedOs' => 'int32',
        'attackType' => 'int32',
        'ipsName' => null,
        'ipsId' => null,
        'protocol' => 'int32',
        'severity' => 'int32',
        'software' => 'int32',
        'objectId' => null,
        'enterpriseProjectId' => null,
        'fwInstanceId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'projectId' => null
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
    * actionType  **参数解释**： 动作 **约束限制**： 不涉及 **取值范围**： 0 仅记录日志 1 拦截session 2 拦截ip **默认取值**： 不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**： 不涉及 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others **默认取值**： 不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则的id **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE **默认取值**： 不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： critical：致命，high：高危，medium:中危，low:低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**： 不涉及 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others **默认取值**： 不涉及
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionType' => 'action_type',
            'affectedOs' => 'affected_os',
            'attackType' => 'attack_type',
            'ipsName' => 'ips_name',
            'ipsId' => 'ips_id',
            'protocol' => 'protocol',
            'severity' => 'severity',
            'software' => 'software',
            'objectId' => 'object_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'fwInstanceId' => 'fw_instance_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionType  **参数解释**： 动作 **约束限制**： 不涉及 **取值范围**： 0 仅记录日志 1 拦截session 2 拦截ip **默认取值**： 不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**： 不涉及 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others **默认取值**： 不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则的id **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE **默认取值**： 不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： critical：致命，high：高危，medium:中危，low:低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**： 不涉及 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others **默认取值**： 不涉及
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'actionType' => 'setActionType',
            'affectedOs' => 'setAffectedOs',
            'attackType' => 'setAttackType',
            'ipsName' => 'setIpsName',
            'ipsId' => 'setIpsId',
            'protocol' => 'setProtocol',
            'severity' => 'setSeverity',
            'software' => 'setSoftware',
            'objectId' => 'setObjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'fwInstanceId' => 'setFwInstanceId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionType  **参数解释**： 动作 **约束限制**： 不涉及 **取值范围**： 0 仅记录日志 1 拦截session 2 拦截ip **默认取值**： 不涉及
    * affectedOs  **参数解释**： 影响操作系统 **约束限制**： 不涉及 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others **默认取值**： 不涉及
    * attackType  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击 **默认取值**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则的id **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE **默认取值**： 不涉及
    * severity  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： critical：致命，high：高危，medium:中危，low:低危 **默认取值**： 不涉及
    * software  **参数解释**： 影响软件 **约束限制**： 不涉及 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others **默认取值**： 不涉及
    * objectId  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * limit  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'actionType' => 'getActionType',
            'affectedOs' => 'getAffectedOs',
            'attackType' => 'getAttackType',
            'ipsName' => 'getIpsName',
            'ipsId' => 'getIpsId',
            'protocol' => 'getProtocol',
            'severity' => 'getSeverity',
            'software' => 'getSoftware',
            'objectId' => 'getObjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'fwInstanceId' => 'getFwInstanceId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'projectId' => 'getProjectId'
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
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['affectedOs'] = isset($data['affectedOs']) ? $data['affectedOs'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['ipsName'] = isset($data['ipsName']) ? $data['ipsName'] : null;
        $this->container['ipsId'] = isset($data['ipsId']) ? $data['ipsId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['actionType']) && ($this->container['actionType'] > 1024)) {
                $invalidProperties[] = "invalid value for 'actionType', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['actionType']) && ($this->container['actionType'] < 0)) {
                $invalidProperties[] = "invalid value for 'actionType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['affectedOs']) && ($this->container['affectedOs'] > 1024)) {
                $invalidProperties[] = "invalid value for 'affectedOs', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['affectedOs']) && ($this->container['affectedOs'] < 0)) {
                $invalidProperties[] = "invalid value for 'affectedOs', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackType']) && ($this->container['attackType'] > 1024)) {
                $invalidProperties[] = "invalid value for 'attackType', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['attackType']) && ($this->container['attackType'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipsName']) && (mb_strlen($this->container['ipsName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'ipsName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['ipsName']) && (mb_strlen($this->container['ipsName']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipsName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipsId']) && (mb_strlen($this->container['ipsId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'ipsId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['ipsId']) && (mb_strlen($this->container['ipsId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipsId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocol']) && ($this->container['protocol'] > 1024)) {
                $invalidProperties[] = "invalid value for 'protocol', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['protocol']) && ($this->container['protocol'] < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && ($this->container['severity'] > 1024)) {
                $invalidProperties[] = "invalid value for 'severity', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['severity']) && ($this->container['severity'] < -1024)) {
                $invalidProperties[] = "invalid value for 'severity', must be bigger than or equal to -1024.";
            }
            if (!is_null($this->container['software']) && ($this->container['software'] > 1024)) {
                $invalidProperties[] = "invalid value for 'software', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['software']) && ($this->container['software'] < -1024)) {
                $invalidProperties[] = "invalid value for 'software', must be bigger than or equal to -1024.";
            }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['fwInstanceId'])) {
                $invalidProperties[] = "invalid value for 'fwInstanceId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 1024)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1024.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 1024)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1024.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
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
    * Gets actionType
    *  **参数解释**： 动作 **约束限制**： 不涉及 **取值范围**： 0 仅记录日志 1 拦截session 2 拦截ip **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param int|null $actionType **参数解释**： 动作 **约束限制**： 不涉及 **取值范围**： 0 仅记录日志 1 拦截session 2 拦截ip **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets affectedOs
    *  **参数解释**： 影响操作系统 **约束限制**： 不涉及 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others **默认取值**： 不涉及
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
    * @param int|null $affectedOs **参数解释**： 影响操作系统 **约束限制**： 不涉及 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others **默认取值**： 不涉及
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
    *  **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击 **默认取值**： 不涉及
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
    * @param int|null $attackType **参数解释**： 攻击类型 **约束限制**： 不涉及 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets ipsName
    *  **参数解释**： ips规则名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $ipsName **参数解释**： ips规则名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setIpsName($ipsName)
    {
        $this->container['ipsName'] = $ipsName;
        return $this;
    }

    /**
    * Gets ipsId
    *  **参数解释**： ips规则的id **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $ipsId **参数解释**： ips规则的id **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setIpsId($ipsId)
    {
        $this->container['ipsId'] = $ipsId;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE **默认取值**： 不涉及
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
    * @param int|null $protocol **参数解释**： 协议类型 **约束限制**： 不涉及 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE **默认取值**： 不涉及
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
    *  **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： critical：致命，high：高危，medium:中危，low:低危 **默认取值**： 不涉及
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
    * @param int|null $severity **参数解释**： 严重程度 **约束限制**： 不涉及 **取值范围**： critical：致命，high：高危，medium:中危，low:低危 **默认取值**： 不涉及
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
    *  **参数解释**： 影响软件 **约束限制**： 不涉及 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others **默认取值**： 不涉及
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
    * @param int|null $software **参数解释**： 影响软件 **约束限制**： 不涉及 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;
        return $this;
    }

    /**
    * Gets objectId
    *  防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 防护对象ID，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为1的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
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
    * @param string|null $enterpriseProjectId 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**： 查询返回记录的数量限制 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**： 偏移量，表示查询该偏移量后面的记录 **约束限制**： 不涉及 **取值范围**： 0 - 1024 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

