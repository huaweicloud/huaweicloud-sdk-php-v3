<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerIpsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerIpsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**： 动作 **取值范围**： 0：只记录日志，1：重置/拦截
    * affectedOs  **参数解释**： 影响操作系统 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others
    * attackType  **参数解释**： 攻击类型 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击
    * configStatus  **参数解释**： 规则状态 **取值范围**： 0：初始化，1：配置中，2：配置成功，3：配置失败
    * contents  **参数解释**： 匹配IPS攻击的内容 **取值范围**：
    * direction  **参数解释**： 默认：null，0：客户端到服务端，1：服务端到客户端 **取值范围**： 不涉及
    * dstPort  dstPort
    * groupId  **参数解释**： 防火墙集群id **取值范围**： 不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则id **取值范围**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议类型 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE
    * severity  **参数解释**： 严重程度 **取值范围**： critical：致命，high：高危，medium:中危，low:低危
    * software  **参数解释**： 影响软件 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others
    * srcPort  srcPort
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'int',
            'affectedOs' => 'int',
            'attackType' => 'int',
            'configStatus' => 'int',
            'contents' => '\HuaweiCloud\SDK\Cfw\V1\Model\IpsContent[]',
            'direction' => 'int',
            'dstPort' => '\HuaweiCloud\SDK\Cfw\V1\Model\Port',
            'groupId' => 'string',
            'ipsCfwId' => 'string',
            'ipsId' => 'string',
            'ipsName' => 'string',
            'protocol' => 'int',
            'severity' => 'int',
            'software' => 'int',
            'srcPort' => '\HuaweiCloud\SDK\Cfw\V1\Model\Port'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**： 动作 **取值范围**： 0：只记录日志，1：重置/拦截
    * affectedOs  **参数解释**： 影响操作系统 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others
    * attackType  **参数解释**： 攻击类型 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击
    * configStatus  **参数解释**： 规则状态 **取值范围**： 0：初始化，1：配置中，2：配置成功，3：配置失败
    * contents  **参数解释**： 匹配IPS攻击的内容 **取值范围**：
    * direction  **参数解释**： 默认：null，0：客户端到服务端，1：服务端到客户端 **取值范围**： 不涉及
    * dstPort  dstPort
    * groupId  **参数解释**： 防火墙集群id **取值范围**： 不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则id **取值范围**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议类型 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE
    * severity  **参数解释**： 严重程度 **取值范围**： critical：致命，high：高危，medium:中危，low:低危
    * software  **参数解释**： 影响软件 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others
    * srcPort  srcPort
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => 'int32',
        'affectedOs' => 'int32',
        'attackType' => 'int32',
        'configStatus' => 'int32',
        'contents' => null,
        'direction' => 'int32',
        'dstPort' => null,
        'groupId' => null,
        'ipsCfwId' => null,
        'ipsId' => null,
        'ipsName' => null,
        'protocol' => 'int32',
        'severity' => 'int32',
        'software' => 'int32',
        'srcPort' => null
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
    * action  **参数解释**： 动作 **取值范围**： 0：只记录日志，1：重置/拦截
    * affectedOs  **参数解释**： 影响操作系统 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others
    * attackType  **参数解释**： 攻击类型 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击
    * configStatus  **参数解释**： 规则状态 **取值范围**： 0：初始化，1：配置中，2：配置成功，3：配置失败
    * contents  **参数解释**： 匹配IPS攻击的内容 **取值范围**：
    * direction  **参数解释**： 默认：null，0：客户端到服务端，1：服务端到客户端 **取值范围**： 不涉及
    * dstPort  dstPort
    * groupId  **参数解释**： 防火墙集群id **取值范围**： 不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则id **取值范围**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议类型 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE
    * severity  **参数解释**： 严重程度 **取值范围**： critical：致命，high：高危，medium:中危，low:低危
    * software  **参数解释**： 影响软件 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others
    * srcPort  srcPort
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'affectedOs' => 'affected_os',
            'attackType' => 'attack_type',
            'configStatus' => 'config_status',
            'contents' => 'contents',
            'direction' => 'direction',
            'dstPort' => 'dst_port',
            'groupId' => 'group_id',
            'ipsCfwId' => 'ips_cfw_id',
            'ipsId' => 'ips_id',
            'ipsName' => 'ips_name',
            'protocol' => 'protocol',
            'severity' => 'severity',
            'software' => 'software',
            'srcPort' => 'src_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**： 动作 **取值范围**： 0：只记录日志，1：重置/拦截
    * affectedOs  **参数解释**： 影响操作系统 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others
    * attackType  **参数解释**： 攻击类型 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击
    * configStatus  **参数解释**： 规则状态 **取值范围**： 0：初始化，1：配置中，2：配置成功，3：配置失败
    * contents  **参数解释**： 匹配IPS攻击的内容 **取值范围**：
    * direction  **参数解释**： 默认：null，0：客户端到服务端，1：服务端到客户端 **取值范围**： 不涉及
    * dstPort  dstPort
    * groupId  **参数解释**： 防火墙集群id **取值范围**： 不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则id **取值范围**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议类型 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE
    * severity  **参数解释**： 严重程度 **取值范围**： critical：致命，high：高危，medium:中危，low:低危
    * software  **参数解释**： 影响软件 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others
    * srcPort  srcPort
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'affectedOs' => 'setAffectedOs',
            'attackType' => 'setAttackType',
            'configStatus' => 'setConfigStatus',
            'contents' => 'setContents',
            'direction' => 'setDirection',
            'dstPort' => 'setDstPort',
            'groupId' => 'setGroupId',
            'ipsCfwId' => 'setIpsCfwId',
            'ipsId' => 'setIpsId',
            'ipsName' => 'setIpsName',
            'protocol' => 'setProtocol',
            'severity' => 'setSeverity',
            'software' => 'setSoftware',
            'srcPort' => 'setSrcPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**： 动作 **取值范围**： 0：只记录日志，1：重置/拦截
    * affectedOs  **参数解释**： 影响操作系统 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others
    * attackType  **参数解释**： 攻击类型 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击
    * configStatus  **参数解释**： 规则状态 **取值范围**： 0：初始化，1：配置中，2：配置成功，3：配置失败
    * contents  **参数解释**： 匹配IPS攻击的内容 **取值范围**：
    * direction  **参数解释**： 默认：null，0：客户端到服务端，1：服务端到客户端 **取值范围**： 不涉及
    * dstPort  dstPort
    * groupId  **参数解释**： 防火墙集群id **取值范围**： 不涉及
    * ipsCfwId  **参数解释**： cfw侧自定义IPS规则id **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * ipsId  **参数解释**： ips规则id **取值范围**： 不涉及
    * ipsName  **参数解释**： ips规则名称 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议类型 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE
    * severity  **参数解释**： 严重程度 **取值范围**： critical：致命，high：高危，medium:中危，low:低危
    * software  **参数解释**： 影响软件 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others
    * srcPort  srcPort
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'affectedOs' => 'getAffectedOs',
            'attackType' => 'getAttackType',
            'configStatus' => 'getConfigStatus',
            'contents' => 'getContents',
            'direction' => 'getDirection',
            'dstPort' => 'getDstPort',
            'groupId' => 'getGroupId',
            'ipsCfwId' => 'getIpsCfwId',
            'ipsId' => 'getIpsId',
            'ipsName' => 'getIpsName',
            'protocol' => 'getProtocol',
            'severity' => 'getSeverity',
            'software' => 'getSoftware',
            'srcPort' => 'getSrcPort'
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
    const ACTION_0 = 0;
    const ACTION_1 = 1;
    const AFFECTED_OS_0 = 0;
    const AFFECTED_OS_1 = 1;
    const AFFECTED_OS_2 = 2;
    const AFFECTED_OS_3 = 3;
    const AFFECTED_OS_4 = 4;
    const AFFECTED_OS_5 = 5;
    const AFFECTED_OS_6 = 6;
    const AFFECTED_OS_7 = 7;
    const AFFECTED_OS_8 = 8;
    const AFFECTED_OS_9 = 9;
    const AFFECTED_OS_10 = 10;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_0,
            self::ACTION_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAffectedOsAllowableValues()
    {
        return [
            self::AFFECTED_OS_0,
            self::AFFECTED_OS_1,
            self::AFFECTED_OS_2,
            self::AFFECTED_OS_3,
            self::AFFECTED_OS_4,
            self::AFFECTED_OS_5,
            self::AFFECTED_OS_6,
            self::AFFECTED_OS_7,
            self::AFFECTED_OS_8,
            self::AFFECTED_OS_9,
            self::AFFECTED_OS_10,
        ];
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
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['ipsCfwId'] = isset($data['ipsCfwId']) ? $data['ipsCfwId'] : null;
        $this->container['ipsId'] = isset($data['ipsId']) ? $data['ipsId'] : null;
        $this->container['ipsName'] = isset($data['ipsName']) ? $data['ipsName'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAffectedOsAllowableValues();
                if (!is_null($this->container['affectedOs']) && !in_array($this->container['affectedOs'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'affectedOs', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['attackType']) && ($this->container['attackType'] > 20)) {
                $invalidProperties[] = "invalid value for 'attackType', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['attackType']) && ($this->container['attackType'] < 1)) {
                $invalidProperties[] = "invalid value for 'attackType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['configStatus']) && ($this->container['configStatus'] > 3)) {
                $invalidProperties[] = "invalid value for 'configStatus', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['configStatus']) && ($this->container['configStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'configStatus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['direction']) && ($this->container['direction'] > 1)) {
                $invalidProperties[] = "invalid value for 'direction', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['direction']) && ($this->container['direction'] < 0)) {
                $invalidProperties[] = "invalid value for 'direction', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['ipsCfwId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['ipsCfwId'])) {
                $invalidProperties[] = "invalid value for 'ipsCfwId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['ipsId']) && (mb_strlen($this->container['ipsId']) > 6)) {
                $invalidProperties[] = "invalid value for 'ipsId', the character length must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['ipsId']) && (mb_strlen($this->container['ipsId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipsId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipsName']) && (mb_strlen($this->container['ipsName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ipsName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ipsName']) && (mb_strlen($this->container['ipsName']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipsName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocol']) && ($this->container['protocol'] > 24)) {
                $invalidProperties[] = "invalid value for 'protocol', must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['protocol']) && ($this->container['protocol'] < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severity']) && ($this->container['severity'] > 3)) {
                $invalidProperties[] = "invalid value for 'severity', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['severity']) && ($this->container['severity'] < 0)) {
                $invalidProperties[] = "invalid value for 'severity', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['software']) && ($this->container['software'] > 35)) {
                $invalidProperties[] = "invalid value for 'software', must be smaller than or equal to 35.";
            }
            if (!is_null($this->container['software']) && ($this->container['software'] < 0)) {
                $invalidProperties[] = "invalid value for 'software', must be bigger than or equal to 0.";
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
    * Gets action
    *  **参数解释**： 动作 **取值范围**： 0：只记录日志，1：重置/拦截
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
    * @param int|null $action **参数解释**： 动作 **取值范围**： 0：只记录日志，1：重置/拦截
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
    *  **参数解释**： 影响操作系统 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others
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
    * @param int|null $affectedOs **参数解释**： 影响操作系统 **取值范围**： 0 any、1 Windows、2 Linux、3 FreeBSD、4 Solaris、5 other Unix、6 网络设备、7 Mac OS、8 ios、9 android、10 others
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
    *  **参数解释**： 攻击类型 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击
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
    * @param int|null $attackType **参数解释**： 攻击类型 **取值范围**： 1：访问控制、2：漏洞扫描、3：邮件攻击、4：漏洞攻击、5：Web攻击、6：密码攻击、7：劫持攻击、8：协议异常、9：特洛伊木马、10：蠕虫、11：缓冲区溢出、12：黑客工具、13：间谍软件、14：DDos泛洪、15：应用层DDos攻击、16：其他可疑行为、17：可疑DNS活动、18：网络钓鱼、19：垃圾邮件、20：其他攻击
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
    *  **参数解释**： 规则状态 **取值范围**： 0：初始化，1：配置中，2：配置成功，3：配置失败
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
    * @param int|null $configStatus **参数解释**： 规则状态 **取值范围**： 0：初始化，1：配置中，2：配置成功，3：配置失败
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets contents
    *  **参数解释**： 匹配IPS攻击的内容 **取值范围**：
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\IpsContent[]|null
    */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
    * Sets contents
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\IpsContent[]|null $contents **参数解释**： 匹配IPS攻击的内容 **取值范围**：
    *
    * @return $this
    */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;
        return $this;
    }

    /**
    * Gets direction
    *  **参数解释**： 默认：null，0：客户端到服务端，1：服务端到客户端 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param int|null $direction **参数解释**： 默认：null，0：客户端到服务端，1：服务端到客户端 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets dstPort
    *  dstPort
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Port|null
    */
    public function getDstPort()
    {
        return $this->container['dstPort'];
    }

    /**
    * Sets dstPort
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Port|null $dstPort dstPort
    *
    * @return $this
    */
    public function setDstPort($dstPort)
    {
        $this->container['dstPort'] = $dstPort;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 防火墙集群id **取值范围**： 不涉及
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
    * @param string|null $groupId **参数解释**： 防火墙集群id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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
    *  **参数解释**： ips规则id **取值范围**： 不涉及
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
    * @param string|null $ipsId **参数解释**： ips规则id **取值范围**： 不涉及
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
    *  **参数解释**： ips规则名称 **取值范围**： 不涉及
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
    * @param string|null $ipsName **参数解释**： ips规则名称 **取值范围**： 不涉及
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
    *  **参数解释**： 协议类型 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE
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
    * @param int|null $protocol **参数解释**： 协议类型 **取值范围**： 1 FTP、2 TELNET、3 SMTP、4 DNS_TCP、5 DNS_UDP、6 DHCP、7 TFTP、8 FINGER、9 HTTP、10 POP3、11 SUNRPC_TCP、12 SUNRPC_UDP、13 NNTP、14 MSRPC_TCP、15 MSRPC_UDP、16 NETBIOS_NAME_TCP、17 NETBIOS_NAME_UDP、18 NETBIOS_SMB、19 NETBIOS_DATAGRAM、20 IMAP4、21 SNMP、22 LDAP、23 MSSQL、24 ORACLE
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
    *  **参数解释**： 严重程度 **取值范围**： critical：致命，high：高危，medium:中危，low:低危
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
    * @param int|null $severity **参数解释**： 严重程度 **取值范围**： critical：致命，high：高危，medium:中危，low:低危
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
    *  **参数解释**： 影响软件 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others
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
    * @param int|null $software **参数解释**： 影响软件 **取值范围**： 0 ANY、1 ADOBE、2 APACHE、3 APPLE、4 CA、5 CISCO、6 GOOGLE_CHROME、7 HP、8 IBM、9 IE、10 IIS、11 MC_AFEE、12 MEDIA_PLAYER、13 MICROSOFT_NET、14 MICROSOFT_EDGE、15 MICROSOFT_EXCHANGE、16 MICROSOFT_OFFICE、17 MICROSOFT_OUTLOOK、18 MICROSOFT_SHARE_POINT、19 MICROSOFT_WINDOWS、20 MOZILLA、21 MSSQL、22 MYSQL、23 NOVELL、24 ORACLE、25 SAMBA、26 SAMSUNG、27 SAP、28 SCADA、29 SQUID、30 SUN、31 SYMANTEC、32 TREND_MICRO、33 VMWARE、34 WORD_PRESS、35 Others
    *
    * @return $this
    */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;
        return $this;
    }

    /**
    * Gets srcPort
    *  srcPort
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Port|null
    */
    public function getSrcPort()
    {
        return $this->container['srcPort'];
    }

    /**
    * Sets srcPort
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Port|null $srcPort srcPort
    *
    * @return $this
    */
    public function setSrcPort($srcPort)
    {
        $this->container['srcPort'] = $srcPort;
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

