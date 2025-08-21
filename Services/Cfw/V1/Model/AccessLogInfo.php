<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessLogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessLogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * url  url
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间 **取值范围**： 不涉及
    * logId  logId
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称 **取值范围**： 不涉及
    * ruleType  ruleType
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW　ID **取值范围**： 不涉及
    * qosRuleId  qosRuleId
    * qosRuleName  qosRuleName
    * qosRuleType  qosRuleType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'app' => 'string',
            'url' => 'string',
            'dstHost' => 'string',
            'dstIp' => 'string',
            'dstPort' => 'int',
            'dstRegionId' => 'string',
            'dstRegionName' => 'string',
            'dstProvinceId' => 'string',
            'dstProvinceName' => 'string',
            'dstCityId' => 'string',
            'dstCityName' => 'string',
            'hitTime' => 'int',
            'logId' => 'string',
            'protocol' => 'string',
            'ruleId' => 'string',
            'ruleName' => 'string',
            'ruleType' => 'int',
            'srcIp' => 'string',
            'srcPort' => 'int',
            'srcRegionId' => 'string',
            'srcRegionName' => 'string',
            'srcProvinceId' => 'string',
            'srcProvinceName' => 'string',
            'srcCityId' => 'string',
            'srcCityName' => 'string',
            'vgwId' => 'string',
            'qosRuleId' => 'string',
            'qosRuleName' => 'string',
            'qosRuleType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * url  url
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间 **取值范围**： 不涉及
    * logId  logId
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称 **取值范围**： 不涉及
    * ruleType  ruleType
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW　ID **取值范围**： 不涉及
    * qosRuleId  qosRuleId
    * qosRuleName  qosRuleName
    * qosRuleType  qosRuleType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'app' => null,
        'url' => null,
        'dstHost' => null,
        'dstIp' => null,
        'dstPort' => 'int32',
        'dstRegionId' => null,
        'dstRegionName' => null,
        'dstProvinceId' => null,
        'dstProvinceName' => null,
        'dstCityId' => null,
        'dstCityName' => null,
        'hitTime' => 'int64',
        'logId' => null,
        'protocol' => null,
        'ruleId' => null,
        'ruleName' => null,
        'ruleType' => 'int32',
        'srcIp' => null,
        'srcPort' => 'int32',
        'srcRegionId' => null,
        'srcRegionName' => null,
        'srcProvinceId' => null,
        'srcProvinceName' => null,
        'srcCityId' => null,
        'srcCityName' => null,
        'vgwId' => null,
        'qosRuleId' => null,
        'qosRuleName' => null,
        'qosRuleType' => null
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
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * url  url
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间 **取值范围**： 不涉及
    * logId  logId
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称 **取值范围**： 不涉及
    * ruleType  ruleType
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW　ID **取值范围**： 不涉及
    * qosRuleId  qosRuleId
    * qosRuleName  qosRuleName
    * qosRuleType  qosRuleType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'app' => 'app',
            'url' => 'url',
            'dstHost' => 'dst_host',
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'dstRegionId' => 'dst_region_id',
            'dstRegionName' => 'dst_region_name',
            'dstProvinceId' => 'dst_province_id',
            'dstProvinceName' => 'dst_province_name',
            'dstCityId' => 'dst_city_id',
            'dstCityName' => 'dst_city_name',
            'hitTime' => 'hit_time',
            'logId' => 'log_id',
            'protocol' => 'protocol',
            'ruleId' => 'rule_id',
            'ruleName' => 'rule_name',
            'ruleType' => 'rule_type',
            'srcIp' => 'src_ip',
            'srcPort' => 'src_port',
            'srcRegionId' => 'src_region_id',
            'srcRegionName' => 'src_region_name',
            'srcProvinceId' => 'src_province_id',
            'srcProvinceName' => 'src_province_name',
            'srcCityId' => 'src_city_id',
            'srcCityName' => 'src_city_name',
            'vgwId' => 'vgw_id',
            'qosRuleId' => 'qos_rule_id',
            'qosRuleName' => 'qos_rule_name',
            'qosRuleType' => 'qos_rule_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * url  url
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间 **取值范围**： 不涉及
    * logId  logId
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称 **取值范围**： 不涉及
    * ruleType  ruleType
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW　ID **取值范围**： 不涉及
    * qosRuleId  qosRuleId
    * qosRuleName  qosRuleName
    * qosRuleType  qosRuleType
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'app' => 'setApp',
            'url' => 'setUrl',
            'dstHost' => 'setDstHost',
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'dstRegionId' => 'setDstRegionId',
            'dstRegionName' => 'setDstRegionName',
            'dstProvinceId' => 'setDstProvinceId',
            'dstProvinceName' => 'setDstProvinceName',
            'dstCityId' => 'setDstCityId',
            'dstCityName' => 'setDstCityName',
            'hitTime' => 'setHitTime',
            'logId' => 'setLogId',
            'protocol' => 'setProtocol',
            'ruleId' => 'setRuleId',
            'ruleName' => 'setRuleName',
            'ruleType' => 'setRuleType',
            'srcIp' => 'setSrcIp',
            'srcPort' => 'setSrcPort',
            'srcRegionId' => 'setSrcRegionId',
            'srcRegionName' => 'setSrcRegionName',
            'srcProvinceId' => 'setSrcProvinceId',
            'srcProvinceName' => 'setSrcProvinceName',
            'srcCityId' => 'setSrcCityId',
            'srcCityName' => 'setSrcCityName',
            'vgwId' => 'setVgwId',
            'qosRuleId' => 'setQosRuleId',
            'qosRuleName' => 'setQosRuleName',
            'qosRuleType' => 'setQosRuleType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**： 动作 **取值范围**： 不涉及
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * url  url
    * dstHost  **参数解释**： 目的域名 **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间 **取值范围**： 不涉及
    * logId  logId
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称 **取值范围**： 不涉及
    * ruleType  ruleType
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： VGW　ID **取值范围**： 不涉及
    * qosRuleId  qosRuleId
    * qosRuleName  qosRuleName
    * qosRuleType  qosRuleType
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'app' => 'getApp',
            'url' => 'getUrl',
            'dstHost' => 'getDstHost',
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'dstRegionId' => 'getDstRegionId',
            'dstRegionName' => 'getDstRegionName',
            'dstProvinceId' => 'getDstProvinceId',
            'dstProvinceName' => 'getDstProvinceName',
            'dstCityId' => 'getDstCityId',
            'dstCityName' => 'getDstCityName',
            'hitTime' => 'getHitTime',
            'logId' => 'getLogId',
            'protocol' => 'getProtocol',
            'ruleId' => 'getRuleId',
            'ruleName' => 'getRuleName',
            'ruleType' => 'getRuleType',
            'srcIp' => 'getSrcIp',
            'srcPort' => 'getSrcPort',
            'srcRegionId' => 'getSrcRegionId',
            'srcRegionName' => 'getSrcRegionName',
            'srcProvinceId' => 'getSrcProvinceId',
            'srcProvinceName' => 'getSrcProvinceName',
            'srcCityId' => 'getSrcCityId',
            'srcCityName' => 'getSrcCityName',
            'vgwId' => 'getVgwId',
            'qosRuleId' => 'getQosRuleId',
            'qosRuleName' => 'getQosRuleName',
            'qosRuleType' => 'getQosRuleType'
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['dstHost'] = isset($data['dstHost']) ? $data['dstHost'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['dstRegionId'] = isset($data['dstRegionId']) ? $data['dstRegionId'] : null;
        $this->container['dstRegionName'] = isset($data['dstRegionName']) ? $data['dstRegionName'] : null;
        $this->container['dstProvinceId'] = isset($data['dstProvinceId']) ? $data['dstProvinceId'] : null;
        $this->container['dstProvinceName'] = isset($data['dstProvinceName']) ? $data['dstProvinceName'] : null;
        $this->container['dstCityId'] = isset($data['dstCityId']) ? $data['dstCityId'] : null;
        $this->container['dstCityName'] = isset($data['dstCityName']) ? $data['dstCityName'] : null;
        $this->container['hitTime'] = isset($data['hitTime']) ? $data['hitTime'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
        $this->container['srcRegionId'] = isset($data['srcRegionId']) ? $data['srcRegionId'] : null;
        $this->container['srcRegionName'] = isset($data['srcRegionName']) ? $data['srcRegionName'] : null;
        $this->container['srcProvinceId'] = isset($data['srcProvinceId']) ? $data['srcProvinceId'] : null;
        $this->container['srcProvinceName'] = isset($data['srcProvinceName']) ? $data['srcProvinceName'] : null;
        $this->container['srcCityId'] = isset($data['srcCityId']) ? $data['srcCityId'] : null;
        $this->container['srcCityName'] = isset($data['srcCityName']) ? $data['srcCityName'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['qosRuleId'] = isset($data['qosRuleId']) ? $data['qosRuleId'] : null;
        $this->container['qosRuleName'] = isset($data['qosRuleName']) ? $data['qosRuleName'] : null;
        $this->container['qosRuleType'] = isset($data['qosRuleType']) ? $data['qosRuleType'] : null;
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
    *  **参数解释**： 动作 **取值范围**： 不涉及
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
    * @param string|null $action **参数解释**： 动作 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets app
    *  **参数解释**： 应用 **取值范围**： 不涉及
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
    * @param string|null $app **参数解释**： 应用 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets url
    *  url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets dstHost
    *  **参数解释**： 目的域名 **取值范围**： 不涉及
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
    * @param string|null $dstHost **参数解释**： 目的域名 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstHost($dstHost)
    {
        $this->container['dstHost'] = $dstHost;
        return $this;
    }

    /**
    * Gets dstIp
    *  **参数解释**： 目的IP **取值范围**： 不涉及
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
    * @param string|null $dstIp **参数解释**： 目的IP **取值范围**： 不涉及
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
    *  **参数解释**： 目的端口 **取值范围**： 不涉及
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
    * @param int|null $dstPort **参数解释**： 目的端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstPort($dstPort)
    {
        $this->container['dstPort'] = $dstPort;
        return $this;
    }

    /**
    * Gets dstRegionId
    *  **参数解释**： 目的地区ID **取值范围**： 不涉及
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
    * @param string|null $dstRegionId **参数解释**： 目的地区ID **取值范围**： 不涉及
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
    *  **参数解释**： 目的地区名称 **取值范围**： 不涉及
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
    * @param string|null $dstRegionName **参数解释**： 目的地区名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstRegionName($dstRegionName)
    {
        $this->container['dstRegionName'] = $dstRegionName;
        return $this;
    }

    /**
    * Gets dstProvinceId
    *  **参数解释**： 目的省份ID **取值范围**： 不涉及
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
    * @param string|null $dstProvinceId **参数解释**： 目的省份ID **取值范围**： 不涉及
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
    *  **参数解释**： 目的省份名称 **取值范围**： 不涉及
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
    * @param string|null $dstProvinceName **参数解释**： 目的省份名称 **取值范围**： 不涉及
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
    *  **参数解释**： 目的城市ID **取值范围**： 不涉及
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
    * @param string|null $dstCityId **参数解释**： 目的城市ID **取值范围**： 不涉及
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
    *  **参数解释**： 目的城市名称 **取值范围**： 不涉及
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
    * @param string|null $dstCityName **参数解释**： 目的城市名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstCityName($dstCityName)
    {
        $this->container['dstCityName'] = $dstCityName;
        return $this;
    }

    /**
    * Gets hitTime
    *  **参数解释**： 命中时间 **取值范围**： 不涉及
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
    * @param int|null $hitTime **参数解释**： 命中时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHitTime($hitTime)
    {
        $this->container['hitTime'] = $hitTime;
        return $this;
    }

    /**
    * Gets logId
    *  logId
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
    * @param string|null $logId logId
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 协议 **取值范围**： 不涉及
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
    * @param string|null $protocol **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets ruleId
    *  **参数解释**： 规则ID **取值范围**： 不涉及
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
    * @param string|null $ruleId **参数解释**： 规则ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleName
    *  **参数解释**： 规则名称 **取值范围**： 不涉及
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
    * @param string|null $ruleName **参数解释**： 规则名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets ruleType
    *  ruleType
    *
    * @return int|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param int|null $ruleType ruleType
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets srcIp
    *  **参数解释**： 源IP **取值范围**： 不涉及
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
    * @param string|null $srcIp **参数解释**： 源IP **取值范围**： 不涉及
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
    *  **参数解释**： 源端口 **取值范围**： 不涉及
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
    * @param int|null $srcPort **参数解释**： 源端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcPort($srcPort)
    {
        $this->container['srcPort'] = $srcPort;
        return $this;
    }

    /**
    * Gets srcRegionId
    *  **参数解释**： 源地区ID **取值范围**： 不涉及
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
    * @param string|null $srcRegionId **参数解释**： 源地区ID **取值范围**： 不涉及
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
    *  **参数解释**： 源地区名称 **取值范围**： 不涉及
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
    * @param string|null $srcRegionName **参数解释**： 源地区名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcRegionName($srcRegionName)
    {
        $this->container['srcRegionName'] = $srcRegionName;
        return $this;
    }

    /**
    * Gets srcProvinceId
    *  **参数解释**： 源省份ID **取值范围**： 不涉及
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
    * @param string|null $srcProvinceId **参数解释**： 源省份ID **取值范围**： 不涉及
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
    *  **参数解释**： 源省份名称 **取值范围**： 不涉及
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
    * @param string|null $srcProvinceName **参数解释**： 源省份名称 **取值范围**： 不涉及
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
    *  **参数解释**： 源城市ID **取值范围**： 不涉及
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
    * @param string|null $srcCityId **参数解释**： 源城市ID **取值范围**： 不涉及
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
    *  **参数解释**： 源城市名称 **取值范围**： 不涉及
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
    * @param string|null $srcCityName **参数解释**： 源城市名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcCityName($srcCityName)
    {
        $this->container['srcCityName'] = $srcCityName;
        return $this;
    }

    /**
    * Gets vgwId
    *  **参数解释**： VGW　ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getVgwId()
    {
        return $this->container['vgwId'];
    }

    /**
    * Sets vgwId
    *
    * @param string|null $vgwId **参数解释**： VGW　ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
        return $this;
    }

    /**
    * Gets qosRuleId
    *  qosRuleId
    *
    * @return string|null
    */
    public function getQosRuleId()
    {
        return $this->container['qosRuleId'];
    }

    /**
    * Sets qosRuleId
    *
    * @param string|null $qosRuleId qosRuleId
    *
    * @return $this
    */
    public function setQosRuleId($qosRuleId)
    {
        $this->container['qosRuleId'] = $qosRuleId;
        return $this;
    }

    /**
    * Gets qosRuleName
    *  qosRuleName
    *
    * @return string|null
    */
    public function getQosRuleName()
    {
        return $this->container['qosRuleName'];
    }

    /**
    * Sets qosRuleName
    *
    * @param string|null $qosRuleName qosRuleName
    *
    * @return $this
    */
    public function setQosRuleName($qosRuleName)
    {
        $this->container['qosRuleName'] = $qosRuleName;
        return $this;
    }

    /**
    * Gets qosRuleType
    *  qosRuleType
    *
    * @return int|null
    */
    public function getQosRuleType()
    {
        return $this->container['qosRuleType'];
    }

    /**
    * Sets qosRuleType
    *
    * @param int|null $qosRuleType qosRuleType
    *
    * @return $this
    */
    public function setQosRuleType($qosRuleType)
    {
        $this->container['qosRuleType'] = $qosRuleType;
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

