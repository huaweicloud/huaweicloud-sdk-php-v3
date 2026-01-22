<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAttackLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAttackLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * srcIp  源IP
    * srcPort  源端口号
    * dstIp  目的IP
    * dstPort  目的端口号
    * protocol  协议类型，包含TCP, UDP，ICMP，ICMPV6等。
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * logId  文档ID,第一页为空，其他页不为空，其他页可取上一次查询最后一条数据的log_id
    * nextDate  下个日期，当是第一页时为空，不是第一页时不为空，其他页可取上一次查询最后一条数据的event_time
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于0，首页时为空，非首页时不为空
    * limit  每页显示个数，范围为1-1024
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * action  动作包含permit，deny
    * direction  方向，包含in2out，out2in
    * attackType  参数解释： 入侵事件类型 约束限制： 不涉及 取值范围： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马 worms：蠕虫 Buffer Overflow：缓冲区溢出 Hacking tools：黑客工具 Spyware：间谍软件 DDoS flooding：DDoS泛洪 Application-layer DDoS attacks：应用层DDoS攻击 Other suspicious behavior：其他可疑行为 Suspicious DNS activity：可疑DNS活动 Phishing：网络钓鱼 Spam：垃圾邮件 Others：其他攻击 默认取值： 不涉及
    * attackRule  入侵事件规则
    * level  威胁等级，包括CRITICAL、HIGH、MEDIUM、LOW
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * dstHost  目标主机
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * attackRuleId  入侵事件id
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    * srcProvinceName  源省份名称
    * dstProvinceName  目的省份名称
    * srcCityName  源城市名称
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'srcIp' => 'string',
            'srcPort' => 'int',
            'dstIp' => 'string',
            'dstPort' => 'int',
            'protocol' => 'string',
            'app' => 'string',
            'logId' => 'string',
            'nextDate' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'fwInstanceId' => 'string',
            'action' => 'string',
            'direction' => 'string',
            'attackType' => 'string',
            'attackRule' => 'string',
            'level' => 'string',
            'enterpriseProjectId' => 'string',
            'dstHost' => 'string',
            'logType' => 'string',
            'attackRuleId' => 'string',
            'srcRegionName' => 'string',
            'dstRegionName' => 'string',
            'srcProvinceName' => 'string',
            'dstProvinceName' => 'string',
            'srcCityName' => 'string',
            'dstCityName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * srcIp  源IP
    * srcPort  源端口号
    * dstIp  目的IP
    * dstPort  目的端口号
    * protocol  协议类型，包含TCP, UDP，ICMP，ICMPV6等。
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * logId  文档ID,第一页为空，其他页不为空，其他页可取上一次查询最后一条数据的log_id
    * nextDate  下个日期，当是第一页时为空，不是第一页时不为空，其他页可取上一次查询最后一条数据的event_time
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于0，首页时为空，非首页时不为空
    * limit  每页显示个数，范围为1-1024
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * action  动作包含permit，deny
    * direction  方向，包含in2out，out2in
    * attackType  参数解释： 入侵事件类型 约束限制： 不涉及 取值范围： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马 worms：蠕虫 Buffer Overflow：缓冲区溢出 Hacking tools：黑客工具 Spyware：间谍软件 DDoS flooding：DDoS泛洪 Application-layer DDoS attacks：应用层DDoS攻击 Other suspicious behavior：其他可疑行为 Suspicious DNS activity：可疑DNS活动 Phishing：网络钓鱼 Spam：垃圾邮件 Others：其他攻击 默认取值： 不涉及
    * attackRule  入侵事件规则
    * level  威胁等级，包括CRITICAL、HIGH、MEDIUM、LOW
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * dstHost  目标主机
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * attackRuleId  入侵事件id
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    * srcProvinceName  源省份名称
    * dstProvinceName  目的省份名称
    * srcCityName  源城市名称
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'srcIp' => null,
        'srcPort' => 'int32',
        'dstIp' => null,
        'dstPort' => 'int32',
        'protocol' => null,
        'app' => null,
        'logId' => null,
        'nextDate' => 'int64',
        'offset' => 'int32',
        'limit' => null,
        'fwInstanceId' => null,
        'action' => null,
        'direction' => null,
        'attackType' => null,
        'attackRule' => null,
        'level' => null,
        'enterpriseProjectId' => null,
        'dstHost' => null,
        'logType' => null,
        'attackRuleId' => null,
        'srcRegionName' => null,
        'dstRegionName' => null,
        'srcProvinceName' => null,
        'dstProvinceName' => null,
        'srcCityName' => null,
        'dstCityName' => null
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
    * projectId  项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * srcIp  源IP
    * srcPort  源端口号
    * dstIp  目的IP
    * dstPort  目的端口号
    * protocol  协议类型，包含TCP, UDP，ICMP，ICMPV6等。
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * logId  文档ID,第一页为空，其他页不为空，其他页可取上一次查询最后一条数据的log_id
    * nextDate  下个日期，当是第一页时为空，不是第一页时不为空，其他页可取上一次查询最后一条数据的event_time
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于0，首页时为空，非首页时不为空
    * limit  每页显示个数，范围为1-1024
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * action  动作包含permit，deny
    * direction  方向，包含in2out，out2in
    * attackType  参数解释： 入侵事件类型 约束限制： 不涉及 取值范围： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马 worms：蠕虫 Buffer Overflow：缓冲区溢出 Hacking tools：黑客工具 Spyware：间谍软件 DDoS flooding：DDoS泛洪 Application-layer DDoS attacks：应用层DDoS攻击 Other suspicious behavior：其他可疑行为 Suspicious DNS activity：可疑DNS活动 Phishing：网络钓鱼 Spam：垃圾邮件 Others：其他攻击 默认取值： 不涉及
    * attackRule  入侵事件规则
    * level  威胁等级，包括CRITICAL、HIGH、MEDIUM、LOW
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * dstHost  目标主机
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * attackRuleId  入侵事件id
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    * srcProvinceName  源省份名称
    * dstProvinceName  目的省份名称
    * srcCityName  源城市名称
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'srcIp' => 'src_ip',
            'srcPort' => 'src_port',
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'protocol' => 'protocol',
            'app' => 'app',
            'logId' => 'log_id',
            'nextDate' => 'next_date',
            'offset' => 'offset',
            'limit' => 'limit',
            'fwInstanceId' => 'fw_instance_id',
            'action' => 'action',
            'direction' => 'direction',
            'attackType' => 'attack_type',
            'attackRule' => 'attack_rule',
            'level' => 'level',
            'enterpriseProjectId' => 'enterprise_project_id',
            'dstHost' => 'dst_host',
            'logType' => 'log_type',
            'attackRuleId' => 'attack_rule_id',
            'srcRegionName' => 'src_region_name',
            'dstRegionName' => 'dst_region_name',
            'srcProvinceName' => 'src_province_name',
            'dstProvinceName' => 'dst_province_name',
            'srcCityName' => 'src_city_name',
            'dstCityName' => 'dst_city_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * srcIp  源IP
    * srcPort  源端口号
    * dstIp  目的IP
    * dstPort  目的端口号
    * protocol  协议类型，包含TCP, UDP，ICMP，ICMPV6等。
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * logId  文档ID,第一页为空，其他页不为空，其他页可取上一次查询最后一条数据的log_id
    * nextDate  下个日期，当是第一页时为空，不是第一页时不为空，其他页可取上一次查询最后一条数据的event_time
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于0，首页时为空，非首页时不为空
    * limit  每页显示个数，范围为1-1024
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * action  动作包含permit，deny
    * direction  方向，包含in2out，out2in
    * attackType  参数解释： 入侵事件类型 约束限制： 不涉及 取值范围： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马 worms：蠕虫 Buffer Overflow：缓冲区溢出 Hacking tools：黑客工具 Spyware：间谍软件 DDoS flooding：DDoS泛洪 Application-layer DDoS attacks：应用层DDoS攻击 Other suspicious behavior：其他可疑行为 Suspicious DNS activity：可疑DNS活动 Phishing：网络钓鱼 Spam：垃圾邮件 Others：其他攻击 默认取值： 不涉及
    * attackRule  入侵事件规则
    * level  威胁等级，包括CRITICAL、HIGH、MEDIUM、LOW
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * dstHost  目标主机
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * attackRuleId  入侵事件id
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    * srcProvinceName  源省份名称
    * dstProvinceName  目的省份名称
    * srcCityName  源城市名称
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'srcIp' => 'setSrcIp',
            'srcPort' => 'setSrcPort',
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'protocol' => 'setProtocol',
            'app' => 'setApp',
            'logId' => 'setLogId',
            'nextDate' => 'setNextDate',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'fwInstanceId' => 'setFwInstanceId',
            'action' => 'setAction',
            'direction' => 'setDirection',
            'attackType' => 'setAttackType',
            'attackRule' => 'setAttackRule',
            'level' => 'setLevel',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'dstHost' => 'setDstHost',
            'logType' => 'setLogType',
            'attackRuleId' => 'setAttackRuleId',
            'srcRegionName' => 'setSrcRegionName',
            'dstRegionName' => 'setDstRegionName',
            'srcProvinceName' => 'setSrcProvinceName',
            'dstProvinceName' => 'setDstProvinceName',
            'srcCityName' => 'setSrcCityName',
            'dstCityName' => 'setDstCityName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * srcIp  源IP
    * srcPort  源端口号
    * dstIp  目的IP
    * dstPort  目的端口号
    * protocol  协议类型，包含TCP, UDP，ICMP，ICMPV6等。
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * logId  文档ID,第一页为空，其他页不为空，其他页可取上一次查询最后一条数据的log_id
    * nextDate  下个日期，当是第一页时为空，不是第一页时不为空，其他页可取上一次查询最后一条数据的event_time
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于0，首页时为空，非首页时不为空
    * limit  每页显示个数，范围为1-1024
    * fwInstanceId  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * action  动作包含permit，deny
    * direction  方向，包含in2out，out2in
    * attackType  参数解释： 入侵事件类型 约束限制： 不涉及 取值范围： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马 worms：蠕虫 Buffer Overflow：缓冲区溢出 Hacking tools：黑客工具 Spyware：间谍软件 DDoS flooding：DDoS泛洪 Application-layer DDoS attacks：应用层DDoS攻击 Other suspicious behavior：其他可疑行为 Suspicious DNS activity：可疑DNS活动 Phishing：网络钓鱼 Spam：垃圾邮件 Others：其他攻击 默认取值： 不涉及
    * attackRule  入侵事件规则
    * level  威胁等级，包括CRITICAL、HIGH、MEDIUM、LOW
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * dstHost  目标主机
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * attackRuleId  入侵事件id
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    * srcProvinceName  源省份名称
    * dstProvinceName  目的省份名称
    * srcCityName  源城市名称
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'srcIp' => 'getSrcIp',
            'srcPort' => 'getSrcPort',
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'protocol' => 'getProtocol',
            'app' => 'getApp',
            'logId' => 'getLogId',
            'nextDate' => 'getNextDate',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'fwInstanceId' => 'getFwInstanceId',
            'action' => 'getAction',
            'direction' => 'getDirection',
            'attackType' => 'getAttackType',
            'attackRule' => 'getAttackRule',
            'level' => 'getLevel',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'dstHost' => 'getDstHost',
            'logType' => 'getLogType',
            'attackRuleId' => 'getAttackRuleId',
            'srcRegionName' => 'getSrcRegionName',
            'dstRegionName' => 'getDstRegionName',
            'srcProvinceName' => 'getSrcProvinceName',
            'dstProvinceName' => 'getDstProvinceName',
            'srcCityName' => 'getSrcCityName',
            'dstCityName' => 'getDstCityName'
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
    const LOG_TYPE_INTERNET = 'internet';
    const LOG_TYPE_NAT = 'nat';
    const LOG_TYPE_VPC = 'vpc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogTypeAllowableValues()
    {
        return [
            self::LOG_TYPE_INTERNET,
            self::LOG_TYPE_NAT,
            self::LOG_TYPE_VPC,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['nextDate'] = isset($data['nextDate']) ? $data['nextDate'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['attackRule'] = isset($data['attackRule']) ? $data['attackRule'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['dstHost'] = isset($data['dstHost']) ? $data['dstHost'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['attackRuleId'] = isset($data['attackRuleId']) ? $data['attackRuleId'] : null;
        $this->container['srcRegionName'] = isset($data['srcRegionName']) ? $data['srcRegionName'] : null;
        $this->container['dstRegionName'] = isset($data['dstRegionName']) ? $data['dstRegionName'] : null;
        $this->container['srcProvinceName'] = isset($data['srcProvinceName']) ? $data['srcProvinceName'] : null;
        $this->container['dstProvinceName'] = isset($data['dstProvinceName']) ? $data['dstProvinceName'] : null;
        $this->container['srcCityName'] = isset($data['srcCityName']) ? $data['srcCityName'] : null;
        $this->container['dstCityName'] = isset($data['dstCityName']) ? $data['dstCityName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (!is_null($this->container['srcPort']) && ($this->container['srcPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'srcPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['srcPort']) && ($this->container['srcPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'srcPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dstPort']) && ($this->container['dstPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'dstPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['dstPort']) && ($this->container['dstPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'dstPort', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
            $allowedValues = $this->getLogTypeAllowableValues();
                if (!is_null($this->container['logType']) && !in_array($this->container['logType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets projectId
    *  项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
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
    * @param string $projectId 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，以毫秒为单位的时间戳，如1718936272648
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间，以毫秒为单位的时间戳，如1718936272648
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间，以毫秒为单位的时间戳，如1718936272648
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间，以毫秒为单位的时间戳，如1718936272648
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets srcIp
    *  源IP
    *
    * @return string|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param string|null $srcIp 源IP
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets srcPort
    *  源端口号
    *
    * @return int|null
    */
    public function getSrcPort()
    {
        return $this->container['srcPort'];
    }

    /**
    * Sets srcPort
    *
    * @param int|null $srcPort 源端口号
    *
    * @return $this
    */
    public function setSrcPort($srcPort)
    {
        $this->container['srcPort'] = $srcPort;
        return $this;
    }

    /**
    * Gets dstIp
    *  目的IP
    *
    * @return string|null
    */
    public function getDstIp()
    {
        return $this->container['dstIp'];
    }

    /**
    * Sets dstIp
    *
    * @param string|null $dstIp 目的IP
    *
    * @return $this
    */
    public function setDstIp($dstIp)
    {
        $this->container['dstIp'] = $dstIp;
        return $this;
    }

    /**
    * Gets dstPort
    *  目的端口号
    *
    * @return int|null
    */
    public function getDstPort()
    {
        return $this->container['dstPort'];
    }

    /**
    * Sets dstPort
    *
    * @param int|null $dstPort 目的端口号
    *
    * @return $this
    */
    public function setDstPort($dstPort)
    {
        $this->container['dstPort'] = $dstPort;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型，包含TCP, UDP，ICMP，ICMPV6等。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 协议类型，包含TCP, UDP，ICMP，ICMPV6等。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets app
    *  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets logId
    *  文档ID,第一页为空，其他页不为空，其他页可取上一次查询最后一条数据的log_id
    *
    * @return string|null
    */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
    * Sets logId
    *
    * @param string|null $logId 文档ID,第一页为空，其他页不为空，其他页可取上一次查询最后一条数据的log_id
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets nextDate
    *  下个日期，当是第一页时为空，不是第一页时不为空，其他页可取上一次查询最后一条数据的event_time
    *
    * @return int|null
    */
    public function getNextDate()
    {
        return $this->container['nextDate'];
    }

    /**
    * Sets nextDate
    *
    * @param int|null $nextDate 下个日期，当是第一页时为空，不是第一页时不为空，其他页可取上一次查询最后一条数据的event_time
    *
    * @return $this
    */
    public function setNextDate($nextDate)
    {
        $this->container['nextDate'] = $nextDate;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于0，首页时为空，非首页时不为空
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
    * @param int|null $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于0，首页时为空，非首页时不为空
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
    *  每页显示个数，范围为1-1024
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
    * @param int $limit 每页显示个数，范围为1-1024
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
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
    * @param string $fwInstanceId 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets action
    *  动作包含permit，deny
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 动作包含permit，deny
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets direction
    *  方向，包含in2out，out2in
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 方向，包含in2out，out2in
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets attackType
    *  参数解释： 入侵事件类型 约束限制： 不涉及 取值范围： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马 worms：蠕虫 Buffer Overflow：缓冲区溢出 Hacking tools：黑客工具 Spyware：间谍软件 DDoS flooding：DDoS泛洪 Application-layer DDoS attacks：应用层DDoS攻击 Other suspicious behavior：其他可疑行为 Suspicious DNS activity：可疑DNS活动 Phishing：网络钓鱼 Spam：垃圾邮件 Others：其他攻击 默认取值： 不涉及
    *
    * @return string|null
    */
    public function getAttackType()
    {
        return $this->container['attackType'];
    }

    /**
    * Sets attackType
    *
    * @param string|null $attackType 参数解释： 入侵事件类型 约束限制： 不涉及 取值范围： Access Control：访问控制 Vulnerability scanning：漏洞扫描 Email attack：邮件攻击 Vulnerability Attack：漏洞攻击 Web attack：Web攻击 password attack：密码攻击 Hijacking attack：劫持攻击 Protocol exception：协议异常 Trojan horse：特洛伊木马 worms：蠕虫 Buffer Overflow：缓冲区溢出 Hacking tools：黑客工具 Spyware：间谍软件 DDoS flooding：DDoS泛洪 Application-layer DDoS attacks：应用层DDoS攻击 Other suspicious behavior：其他可疑行为 Suspicious DNS activity：可疑DNS活动 Phishing：网络钓鱼 Spam：垃圾邮件 Others：其他攻击 默认取值： 不涉及
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets attackRule
    *  入侵事件规则
    *
    * @return string|null
    */
    public function getAttackRule()
    {
        return $this->container['attackRule'];
    }

    /**
    * Sets attackRule
    *
    * @param string|null $attackRule 入侵事件规则
    *
    * @return $this
    */
    public function setAttackRule($attackRule)
    {
        $this->container['attackRule'] = $attackRule;
        return $this;
    }

    /**
    * Gets level
    *  威胁等级，包括CRITICAL、HIGH、MEDIUM、LOW
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 威胁等级，包括CRITICAL、HIGH、MEDIUM、LOW
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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
    * Gets dstHost
    *  目标主机
    *
    * @return string|null
    */
    public function getDstHost()
    {
        return $this->container['dstHost'];
    }

    /**
    * Sets dstHost
    *
    * @param string|null $dstHost 目标主机
    *
    * @return $this
    */
    public function setDstHost($dstHost)
    {
        $this->container['dstHost'] = $dstHost;
        return $this;
    }

    /**
    * Gets logType
    *  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string|null $logType **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets attackRuleId
    *  入侵事件id
    *
    * @return string|null
    */
    public function getAttackRuleId()
    {
        return $this->container['attackRuleId'];
    }

    /**
    * Sets attackRuleId
    *
    * @param string|null $attackRuleId 入侵事件id
    *
    * @return $this
    */
    public function setAttackRuleId($attackRuleId)
    {
        $this->container['attackRuleId'] = $attackRuleId;
        return $this;
    }

    /**
    * Gets srcRegionName
    *  源region名称
    *
    * @return string|null
    */
    public function getSrcRegionName()
    {
        return $this->container['srcRegionName'];
    }

    /**
    * Sets srcRegionName
    *
    * @param string|null $srcRegionName 源region名称
    *
    * @return $this
    */
    public function setSrcRegionName($srcRegionName)
    {
        $this->container['srcRegionName'] = $srcRegionName;
        return $this;
    }

    /**
    * Gets dstRegionName
    *  目的region名称
    *
    * @return string|null
    */
    public function getDstRegionName()
    {
        return $this->container['dstRegionName'];
    }

    /**
    * Sets dstRegionName
    *
    * @param string|null $dstRegionName 目的region名称
    *
    * @return $this
    */
    public function setDstRegionName($dstRegionName)
    {
        $this->container['dstRegionName'] = $dstRegionName;
        return $this;
    }

    /**
    * Gets srcProvinceName
    *  源省份名称
    *
    * @return string|null
    */
    public function getSrcProvinceName()
    {
        return $this->container['srcProvinceName'];
    }

    /**
    * Sets srcProvinceName
    *
    * @param string|null $srcProvinceName 源省份名称
    *
    * @return $this
    */
    public function setSrcProvinceName($srcProvinceName)
    {
        $this->container['srcProvinceName'] = $srcProvinceName;
        return $this;
    }

    /**
    * Gets dstProvinceName
    *  目的省份名称
    *
    * @return string|null
    */
    public function getDstProvinceName()
    {
        return $this->container['dstProvinceName'];
    }

    /**
    * Sets dstProvinceName
    *
    * @param string|null $dstProvinceName 目的省份名称
    *
    * @return $this
    */
    public function setDstProvinceName($dstProvinceName)
    {
        $this->container['dstProvinceName'] = $dstProvinceName;
        return $this;
    }

    /**
    * Gets srcCityName
    *  源城市名称
    *
    * @return string|null
    */
    public function getSrcCityName()
    {
        return $this->container['srcCityName'];
    }

    /**
    * Sets srcCityName
    *
    * @param string|null $srcCityName 源城市名称
    *
    * @return $this
    */
    public function setSrcCityName($srcCityName)
    {
        $this->container['srcCityName'] = $srcCityName;
        return $this;
    }

    /**
    * Gets dstCityName
    *  目的城市名称
    *
    * @return string|null
    */
    public function getDstCityName()
    {
        return $this->container['dstCityName'];
    }

    /**
    * Sets dstCityName
    *
    * @param string|null $dstCityName 目的城市名称
    *
    * @return $this
    */
    public function setDstCityName($dstCityName)
    {
        $this->container['dstCityName'] = $dstCityName;
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

