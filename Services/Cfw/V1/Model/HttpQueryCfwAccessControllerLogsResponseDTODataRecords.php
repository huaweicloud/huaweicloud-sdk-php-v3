<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpQueryCfwAccessControllerLogsResponseDTODataRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpQueryCfwAccessControllerLogsResponseDTO_data_records';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  动作0：permit，1：deny
    * ruleName  规则名称
    * ruleId  规则id
    * hitTime  命中时间，以毫秒为单位的时间戳，如1718936272648
    * srcRegionId  源区域id
    * srcRegionName  源区域name
    * dstRegionId  目的区域id
    * dstRegionName  目的区域name
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * app  规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。
    * dstHost  目标主机
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'ruleName' => 'string',
            'ruleId' => 'string',
            'hitTime' => 'int',
            'srcRegionId' => 'string',
            'srcRegionName' => 'string',
            'dstRegionId' => 'string',
            'dstRegionName' => 'string',
            'logId' => 'string',
            'srcIp' => 'string',
            'srcPort' => 'int',
            'dstIp' => 'string',
            'dstPort' => 'int',
            'protocol' => 'string',
            'app' => 'string',
            'dstHost' => 'string',
            'srcProvinceId' => 'string',
            'srcProvinceName' => 'string',
            'srcCityId' => 'string',
            'srcCityName' => 'string',
            'dstProvinceId' => 'string',
            'dstProvinceName' => 'string',
            'dstCityId' => 'string',
            'dstCityName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  动作0：permit，1：deny
    * ruleName  规则名称
    * ruleId  规则id
    * hitTime  命中时间，以毫秒为单位的时间戳，如1718936272648
    * srcRegionId  源区域id
    * srcRegionName  源区域name
    * dstRegionId  目的区域id
    * dstRegionName  目的区域name
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * app  规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。
    * dstHost  目标主机
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'ruleName' => null,
        'ruleId' => null,
        'hitTime' => 'int64',
        'srcRegionId' => null,
        'srcRegionName' => null,
        'dstRegionId' => null,
        'dstRegionName' => null,
        'logId' => null,
        'srcIp' => null,
        'srcPort' => 'int32',
        'dstIp' => null,
        'dstPort' => 'int32',
        'protocol' => null,
        'app' => null,
        'dstHost' => null,
        'srcProvinceId' => null,
        'srcProvinceName' => null,
        'srcCityId' => null,
        'srcCityName' => null,
        'dstProvinceId' => null,
        'dstProvinceName' => null,
        'dstCityId' => null,
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
    * action  动作0：permit，1：deny
    * ruleName  规则名称
    * ruleId  规则id
    * hitTime  命中时间，以毫秒为单位的时间戳，如1718936272648
    * srcRegionId  源区域id
    * srcRegionName  源区域name
    * dstRegionId  目的区域id
    * dstRegionName  目的区域name
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * app  规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。
    * dstHost  目标主机
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'ruleName' => 'rule_name',
            'ruleId' => 'rule_id',
            'hitTime' => 'hit_time',
            'srcRegionId' => 'src_region_id',
            'srcRegionName' => 'src_region_name',
            'dstRegionId' => 'dst_region_id',
            'dstRegionName' => 'dst_region_name',
            'logId' => 'log_id',
            'srcIp' => 'src_ip',
            'srcPort' => 'src_port',
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'protocol' => 'protocol',
            'app' => 'app',
            'dstHost' => 'dst_host',
            'srcProvinceId' => 'src_province_id',
            'srcProvinceName' => 'src_province_name',
            'srcCityId' => 'src_city_id',
            'srcCityName' => 'src_city_name',
            'dstProvinceId' => 'dst_province_id',
            'dstProvinceName' => 'dst_province_name',
            'dstCityId' => 'dst_city_id',
            'dstCityName' => 'dst_city_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  动作0：permit，1：deny
    * ruleName  规则名称
    * ruleId  规则id
    * hitTime  命中时间，以毫秒为单位的时间戳，如1718936272648
    * srcRegionId  源区域id
    * srcRegionName  源区域name
    * dstRegionId  目的区域id
    * dstRegionName  目的区域name
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * app  规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。
    * dstHost  目标主机
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'ruleName' => 'setRuleName',
            'ruleId' => 'setRuleId',
            'hitTime' => 'setHitTime',
            'srcRegionId' => 'setSrcRegionId',
            'srcRegionName' => 'setSrcRegionName',
            'dstRegionId' => 'setDstRegionId',
            'dstRegionName' => 'setDstRegionName',
            'logId' => 'setLogId',
            'srcIp' => 'setSrcIp',
            'srcPort' => 'setSrcPort',
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'protocol' => 'setProtocol',
            'app' => 'setApp',
            'dstHost' => 'setDstHost',
            'srcProvinceId' => 'setSrcProvinceId',
            'srcProvinceName' => 'setSrcProvinceName',
            'srcCityId' => 'setSrcCityId',
            'srcCityName' => 'setSrcCityName',
            'dstProvinceId' => 'setDstProvinceId',
            'dstProvinceName' => 'setDstProvinceName',
            'dstCityId' => 'setDstCityId',
            'dstCityName' => 'setDstCityName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  动作0：permit，1：deny
    * ruleName  规则名称
    * ruleId  规则id
    * hitTime  命中时间，以毫秒为单位的时间戳，如1718936272648
    * srcRegionId  源区域id
    * srcRegionName  源区域name
    * dstRegionId  目的区域id
    * dstRegionName  目的区域name
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * app  规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。
    * dstHost  目标主机
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'ruleName' => 'getRuleName',
            'ruleId' => 'getRuleId',
            'hitTime' => 'getHitTime',
            'srcRegionId' => 'getSrcRegionId',
            'srcRegionName' => 'getSrcRegionName',
            'dstRegionId' => 'getDstRegionId',
            'dstRegionName' => 'getDstRegionName',
            'logId' => 'getLogId',
            'srcIp' => 'getSrcIp',
            'srcPort' => 'getSrcPort',
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'protocol' => 'getProtocol',
            'app' => 'getApp',
            'dstHost' => 'getDstHost',
            'srcProvinceId' => 'getSrcProvinceId',
            'srcProvinceName' => 'getSrcProvinceName',
            'srcCityId' => 'getSrcCityId',
            'srcCityName' => 'getSrcCityName',
            'dstProvinceId' => 'getDstProvinceId',
            'dstProvinceName' => 'getDstProvinceName',
            'dstCityId' => 'getDstCityId',
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['hitTime'] = isset($data['hitTime']) ? $data['hitTime'] : null;
        $this->container['srcRegionId'] = isset($data['srcRegionId']) ? $data['srcRegionId'] : null;
        $this->container['srcRegionName'] = isset($data['srcRegionName']) ? $data['srcRegionName'] : null;
        $this->container['dstRegionId'] = isset($data['dstRegionId']) ? $data['dstRegionId'] : null;
        $this->container['dstRegionName'] = isset($data['dstRegionName']) ? $data['dstRegionName'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['dstHost'] = isset($data['dstHost']) ? $data['dstHost'] : null;
        $this->container['srcProvinceId'] = isset($data['srcProvinceId']) ? $data['srcProvinceId'] : null;
        $this->container['srcProvinceName'] = isset($data['srcProvinceName']) ? $data['srcProvinceName'] : null;
        $this->container['srcCityId'] = isset($data['srcCityId']) ? $data['srcCityId'] : null;
        $this->container['srcCityName'] = isset($data['srcCityName']) ? $data['srcCityName'] : null;
        $this->container['dstProvinceId'] = isset($data['dstProvinceId']) ? $data['dstProvinceId'] : null;
        $this->container['dstProvinceName'] = isset($data['dstProvinceName']) ? $data['dstProvinceName'] : null;
        $this->container['dstCityId'] = isset($data['dstCityId']) ? $data['dstCityId'] : null;
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
    *  动作0：permit，1：deny
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
    * @param string|null $action 动作0：permit，1：deny
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets ruleId
    *  规则id
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则id
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets hitTime
    *  命中时间，以毫秒为单位的时间戳，如1718936272648
    *
    * @return int|null
    */
    public function getHitTime()
    {
        return $this->container['hitTime'];
    }

    /**
    * Sets hitTime
    *
    * @param int|null $hitTime 命中时间，以毫秒为单位的时间戳，如1718936272648
    *
    * @return $this
    */
    public function setHitTime($hitTime)
    {
        $this->container['hitTime'] = $hitTime;
        return $this;
    }

    /**
    * Gets srcRegionId
    *  源区域id
    *
    * @return string|null
    */
    public function getSrcRegionId()
    {
        return $this->container['srcRegionId'];
    }

    /**
    * Sets srcRegionId
    *
    * @param string|null $srcRegionId 源区域id
    *
    * @return $this
    */
    public function setSrcRegionId($srcRegionId)
    {
        $this->container['srcRegionId'] = $srcRegionId;
        return $this;
    }

    /**
    * Gets srcRegionName
    *  源区域name
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
    * @param string|null $srcRegionName 源区域name
    *
    * @return $this
    */
    public function setSrcRegionName($srcRegionName)
    {
        $this->container['srcRegionName'] = $srcRegionName;
        return $this;
    }

    /**
    * Gets dstRegionId
    *  目的区域id
    *
    * @return string|null
    */
    public function getDstRegionId()
    {
        return $this->container['dstRegionId'];
    }

    /**
    * Sets dstRegionId
    *
    * @param string|null $dstRegionId 目的区域id
    *
    * @return $this
    */
    public function setDstRegionId($dstRegionId)
    {
        $this->container['dstRegionId'] = $dstRegionId;
        return $this;
    }

    /**
    * Gets dstRegionName
    *  目的区域name
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
    * @param string|null $dstRegionName 目的区域name
    *
    * @return $this
    */
    public function setDstRegionName($dstRegionName)
    {
        $this->container['dstRegionName'] = $dstRegionName;
        return $this;
    }

    /**
    * Gets logId
    *  文档ID
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
    * @param string|null $logId 文档ID
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
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
    *  源端口
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
    * @param int|null $srcPort 源端口
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
    *  目的端口
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
    * @param int|null $dstPort 目的端口
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
    *  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
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
    * @param string|null $protocol 协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
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
    *  规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。
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
    * @param string|null $app 规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
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
    * Gets srcProvinceId
    *  源省份id
    *
    * @return string|null
    */
    public function getSrcProvinceId()
    {
        return $this->container['srcProvinceId'];
    }

    /**
    * Sets srcProvinceId
    *
    * @param string|null $srcProvinceId 源省份id
    *
    * @return $this
    */
    public function setSrcProvinceId($srcProvinceId)
    {
        $this->container['srcProvinceId'] = $srcProvinceId;
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
    * Gets srcCityId
    *  源城市id
    *
    * @return string|null
    */
    public function getSrcCityId()
    {
        return $this->container['srcCityId'];
    }

    /**
    * Sets srcCityId
    *
    * @param string|null $srcCityId 源城市id
    *
    * @return $this
    */
    public function setSrcCityId($srcCityId)
    {
        $this->container['srcCityId'] = $srcCityId;
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
    * Gets dstProvinceId
    *  目的省份id
    *
    * @return string|null
    */
    public function getDstProvinceId()
    {
        return $this->container['dstProvinceId'];
    }

    /**
    * Sets dstProvinceId
    *
    * @param string|null $dstProvinceId 目的省份id
    *
    * @return $this
    */
    public function setDstProvinceId($dstProvinceId)
    {
        $this->container['dstProvinceId'] = $dstProvinceId;
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
    * Gets dstCityId
    *  目的城市id
    *
    * @return string|null
    */
    public function getDstCityId()
    {
        return $this->container['dstCityId'];
    }

    /**
    * Sets dstCityId
    *
    * @param string|null $dstCityId 目的城市id
    *
    * @return $this
    */
    public function setDstCityId($dstCityId)
    {
        $this->container['dstCityId'] = $dstCityId;
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

