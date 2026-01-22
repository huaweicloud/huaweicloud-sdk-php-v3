<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpQueryCfwFlowLogsResponseDTODataRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpQueryCfwFlowLogsResponseDTO_data_records';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bytes  字节
    * direction  方向，有内到外（in2out）和外到内（out2in）两种
    * packets  字节包数
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * dstHost  目标主机
    * dstRegionId  目的地域id
    * dstRegionName  目的地域名称
    * srcRegionId  源地域id
    * srcRegionName  源地域名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bytes' => 'double',
            'direction' => 'string',
            'packets' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'logId' => 'string',
            'srcIp' => 'string',
            'srcPort' => 'int',
            'dstIp' => 'string',
            'app' => 'string',
            'dstPort' => 'int',
            'protocol' => 'string',
            'dstHost' => 'string',
            'dstRegionId' => 'string',
            'dstRegionName' => 'string',
            'srcRegionId' => 'string',
            'srcRegionName' => 'string',
            'dstProvinceId' => 'string',
            'dstProvinceName' => 'string',
            'dstCityId' => 'string',
            'dstCityName' => 'string',
            'srcProvinceId' => 'string',
            'srcProvinceName' => 'string',
            'srcCityId' => 'string',
            'srcCityName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bytes  字节
    * direction  方向，有内到外（in2out）和外到内（out2in）两种
    * packets  字节包数
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * dstHost  目标主机
    * dstRegionId  目的地域id
    * dstRegionName  目的地域名称
    * srcRegionId  源地域id
    * srcRegionName  源地域名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bytes' => 'double',
        'direction' => null,
        'packets' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'logId' => null,
        'srcIp' => null,
        'srcPort' => 'int32',
        'dstIp' => null,
        'app' => null,
        'dstPort' => 'int32',
        'protocol' => null,
        'dstHost' => null,
        'dstRegionId' => null,
        'dstRegionName' => null,
        'srcRegionId' => null,
        'srcRegionName' => null,
        'dstProvinceId' => null,
        'dstProvinceName' => null,
        'dstCityId' => null,
        'dstCityName' => null,
        'srcProvinceId' => null,
        'srcProvinceName' => null,
        'srcCityId' => null,
        'srcCityName' => null
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
    * bytes  字节
    * direction  方向，有内到外（in2out）和外到内（out2in）两种
    * packets  字节包数
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * dstHost  目标主机
    * dstRegionId  目的地域id
    * dstRegionName  目的地域名称
    * srcRegionId  源地域id
    * srcRegionName  源地域名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bytes' => 'bytes',
            'direction' => 'direction',
            'packets' => 'packets',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'logId' => 'log_id',
            'srcIp' => 'src_ip',
            'srcPort' => 'src_port',
            'dstIp' => 'dst_ip',
            'app' => 'app',
            'dstPort' => 'dst_port',
            'protocol' => 'protocol',
            'dstHost' => 'dst_host',
            'dstRegionId' => 'dst_region_id',
            'dstRegionName' => 'dst_region_name',
            'srcRegionId' => 'src_region_id',
            'srcRegionName' => 'src_region_name',
            'dstProvinceId' => 'dst_province_id',
            'dstProvinceName' => 'dst_province_name',
            'dstCityId' => 'dst_city_id',
            'dstCityName' => 'dst_city_name',
            'srcProvinceId' => 'src_province_id',
            'srcProvinceName' => 'src_province_name',
            'srcCityId' => 'src_city_id',
            'srcCityName' => 'src_city_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bytes  字节
    * direction  方向，有内到外（in2out）和外到内（out2in）两种
    * packets  字节包数
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * dstHost  目标主机
    * dstRegionId  目的地域id
    * dstRegionName  目的地域名称
    * srcRegionId  源地域id
    * srcRegionName  源地域名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    *
    * @var string[]
    */
    protected static $setters = [
            'bytes' => 'setBytes',
            'direction' => 'setDirection',
            'packets' => 'setPackets',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'logId' => 'setLogId',
            'srcIp' => 'setSrcIp',
            'srcPort' => 'setSrcPort',
            'dstIp' => 'setDstIp',
            'app' => 'setApp',
            'dstPort' => 'setDstPort',
            'protocol' => 'setProtocol',
            'dstHost' => 'setDstHost',
            'dstRegionId' => 'setDstRegionId',
            'dstRegionName' => 'setDstRegionName',
            'srcRegionId' => 'setSrcRegionId',
            'srcRegionName' => 'setSrcRegionName',
            'dstProvinceId' => 'setDstProvinceId',
            'dstProvinceName' => 'setDstProvinceName',
            'dstCityId' => 'setDstCityId',
            'dstCityName' => 'setDstCityName',
            'srcProvinceId' => 'setSrcProvinceId',
            'srcProvinceName' => 'setSrcProvinceName',
            'srcCityId' => 'setSrcCityId',
            'srcCityName' => 'setSrcCityName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bytes  字节
    * direction  方向，有内到外（in2out）和外到内（out2in）两种
    * packets  字节包数
    * startTime  开始时间，以毫秒为单位的时间戳，如1718936272648
    * endTime  结束时间，以毫秒为单位的时间戳，如1718936272648
    * logId  文档ID
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * app  规则应用类型包括：“HTTP”，“HTTPS”，“TLS1”，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”,“BGP”等。
    * dstPort  目的端口
    * protocol  协议类型:TCP为6,UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * dstHost  目标主机
    * dstRegionId  目的地域id
    * dstRegionName  目的地域名称
    * srcRegionId  源地域id
    * srcRegionName  源地域名称
    * dstProvinceId  目的省份id
    * dstProvinceName  目的省份名称
    * dstCityId  目的城市id
    * dstCityName  目的城市名称
    * srcProvinceId  源省份id
    * srcProvinceName  源省份名称
    * srcCityId  源城市id
    * srcCityName  源城市名称
    *
    * @var string[]
    */
    protected static $getters = [
            'bytes' => 'getBytes',
            'direction' => 'getDirection',
            'packets' => 'getPackets',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'logId' => 'getLogId',
            'srcIp' => 'getSrcIp',
            'srcPort' => 'getSrcPort',
            'dstIp' => 'getDstIp',
            'app' => 'getApp',
            'dstPort' => 'getDstPort',
            'protocol' => 'getProtocol',
            'dstHost' => 'getDstHost',
            'dstRegionId' => 'getDstRegionId',
            'dstRegionName' => 'getDstRegionName',
            'srcRegionId' => 'getSrcRegionId',
            'srcRegionName' => 'getSrcRegionName',
            'dstProvinceId' => 'getDstProvinceId',
            'dstProvinceName' => 'getDstProvinceName',
            'dstCityId' => 'getDstCityId',
            'dstCityName' => 'getDstCityName',
            'srcProvinceId' => 'getSrcProvinceId',
            'srcProvinceName' => 'getSrcProvinceName',
            'srcCityId' => 'getSrcCityId',
            'srcCityName' => 'getSrcCityName'
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
    const DIRECTION_OUT2IN = 'out2in';
    const DIRECTION_IN2OUT = 'in2out';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_OUT2IN,
            self::DIRECTION_IN2OUT,
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
        $this->container['bytes'] = isset($data['bytes']) ? $data['bytes'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['packets'] = isset($data['packets']) ? $data['packets'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['dstHost'] = isset($data['dstHost']) ? $data['dstHost'] : null;
        $this->container['dstRegionId'] = isset($data['dstRegionId']) ? $data['dstRegionId'] : null;
        $this->container['dstRegionName'] = isset($data['dstRegionName']) ? $data['dstRegionName'] : null;
        $this->container['srcRegionId'] = isset($data['srcRegionId']) ? $data['srcRegionId'] : null;
        $this->container['srcRegionName'] = isset($data['srcRegionName']) ? $data['srcRegionName'] : null;
        $this->container['dstProvinceId'] = isset($data['dstProvinceId']) ? $data['dstProvinceId'] : null;
        $this->container['dstProvinceName'] = isset($data['dstProvinceName']) ? $data['dstProvinceName'] : null;
        $this->container['dstCityId'] = isset($data['dstCityId']) ? $data['dstCityId'] : null;
        $this->container['dstCityName'] = isset($data['dstCityName']) ? $data['dstCityName'] : null;
        $this->container['srcProvinceId'] = isset($data['srcProvinceId']) ? $data['srcProvinceId'] : null;
        $this->container['srcProvinceName'] = isset($data['srcProvinceName']) ? $data['srcProvinceName'] : null;
        $this->container['srcCityId'] = isset($data['srcCityId']) ? $data['srcCityId'] : null;
        $this->container['srcCityName'] = isset($data['srcCityName']) ? $data['srcCityName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDirectionAllowableValues();
                if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
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
    * Gets bytes
    *  字节
    *
    * @return double|null
    */
    public function getBytes()
    {
        return $this->container['bytes'];
    }

    /**
    * Sets bytes
    *
    * @param double|null $bytes 字节
    *
    * @return $this
    */
    public function setBytes($bytes)
    {
        $this->container['bytes'] = $bytes;
        return $this;
    }

    /**
    * Gets direction
    *  方向，有内到外（in2out）和外到内（out2in）两种
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
    * @param string|null $direction 方向，有内到外（in2out）和外到内（out2in）两种
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets packets
    *  字节包数
    *
    * @return int|null
    */
    public function getPackets()
    {
        return $this->container['packets'];
    }

    /**
    * Sets packets
    *
    * @param int|null $packets 字节包数
    *
    * @return $this
    */
    public function setPackets($packets)
    {
        $this->container['packets'] = $packets;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，以毫秒为单位的时间戳，如1718936272648
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间，以毫秒为单位的时间戳，如1718936272648
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
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间，以毫秒为单位的时间戳，如1718936272648
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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
    * Gets dstRegionId
    *  目的地域id
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
    * @param string|null $dstRegionId 目的地域id
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
    *  目的地域名称
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
    * @param string|null $dstRegionName 目的地域名称
    *
    * @return $this
    */
    public function setDstRegionName($dstRegionName)
    {
        $this->container['dstRegionName'] = $dstRegionName;
        return $this;
    }

    /**
    * Gets srcRegionId
    *  源地域id
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
    * @param string|null $srcRegionId 源地域id
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
    *  源地域名称
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
    * @param string|null $srcRegionName 源地域名称
    *
    * @return $this
    */
    public function setSrcRegionName($srcRegionName)
    {
        $this->container['srcRegionName'] = $srcRegionName;
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

