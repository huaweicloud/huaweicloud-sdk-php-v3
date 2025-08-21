<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 流字节数，流量日志字段 **取值范围**： 不涉及
    * direction  **参数解释**： 会话方向 **取值范围**： out2in 外到内访问 in2out 内到外访问
    * dstHost  **参数解释**： 流字节数，访问控制日志和流量日志中存在 **取值范围**： 目的网址
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * endTime  **参数解释**： 会话结束时间，流量日志字段 **取值范围**： 不涉及
    * logId  **参数解释**： 日志ID，用于分页查询 **取值范围**： 不涉及
    * packets  **参数解释**： 流包数，流量日志字段 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源Ip **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间，流量日志字段 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： 虚拟网关ID **取值范围**： 不涉及
    * sctpVerificationTag  **参数解释**： sctp验证标签，流量日志字段 **取值范围**： 不涉及
    * sctpIsHandshakeFlow  **参数解释**： sctp握手流，流量日志字段 **取值范围**： 不涉及
    * qosRuleId  **参数解释**： qos规则ID，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosRuleName  **参数解释**： qos规则名称，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelId  **参数解释**： qos通道ID，流量日志字段 **取值范围**： 不涉及
    * qosChannelName  **参数解释**： qos通道名称，流量日志字段 **取值范围**： 不涉及
    * qosDropPackets  **参数解释**： qos丢包数，流量日志字段 **取值范围**： 不涉及
    * qosDropBytes  **参数解释**： qos丢弃字节，流量日志字段 **取值范围**： 不涉及
    * qosRuleType  **参数解释**： qos规则类型，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelType  **参数解释**： qos通道类型，流量日志字段 **取值范围**： 不涉及
    * action  **参数解释**： 动作，攻击日志、访问控制日志、URL日志存在 **取值范围**： 不涉及
    * url  **参数解释**： url，URL日志字段 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleType  **参数解释**： 规则类型，访问控制日志和URL日志字段 **取值范围**： 不涉及
    * attackRule  **参数解释**： 规则类型，攻击日志字段 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID，攻击日志字段 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型，攻击日志字段 **取值范围**： 不涉及
    * eventTime  **参数解释**： 事件时间，攻击日志字段 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级，攻击日志字段 **取值范围**： 不涉及
    * packet  **参数解释**： 规则载荷，攻击日志字段 **取值范围**： 不涉及
    * source  **参数解释**： 攻击来源，攻击日志字段 **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP，攻击日志字段 **取值范围**： 不涉及
    * tag  **参数解释**： 标签类型，攻击日志字段 **取值范围**： 1 WAF回源IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'app' => 'string',
            'bytes' => 'double',
            'direction' => 'string',
            'dstHost' => 'string',
            'dstIp' => 'string',
            'dstPort' => 'int',
            'endTime' => 'int',
            'logId' => 'string',
            'packets' => 'double',
            'protocol' => 'string',
            'srcIp' => 'string',
            'srcPort' => 'int',
            'startTime' => 'int',
            'dstRegionId' => 'object',
            'dstRegionName' => 'string',
            'dstProvinceId' => 'string',
            'dstProvinceName' => 'string',
            'dstCityId' => 'string',
            'dstCityName' => 'string',
            'srcRegionId' => 'string',
            'srcRegionName' => 'string',
            'srcProvinceId' => 'string',
            'srcProvinceName' => 'string',
            'srcCityId' => 'string',
            'srcCityName' => 'string',
            'vgwId' => 'string',
            'sctpVerificationTag' => 'int',
            'sctpIsHandshakeFlow' => 'string',
            'qosRuleId' => 'string',
            'qosRuleName' => 'string',
            'qosChannelId' => 'string',
            'qosChannelName' => 'string',
            'qosDropPackets' => 'double',
            'qosDropBytes' => 'double',
            'qosRuleType' => 'int',
            'qosChannelType' => 'int',
            'action' => 'string',
            'url' => 'string',
            'hitTime' => 'int',
            'ruleId' => 'string',
            'ruleName' => 'string',
            'ruleType' => 'int',
            'attackRule' => 'string',
            'attackRuleId' => 'string',
            'attackType' => 'string',
            'eventTime' => 'int',
            'level' => 'string',
            'packet' => 'string',
            'source' => 'string',
            'realIp' => 'string',
            'tag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 流字节数，流量日志字段 **取值范围**： 不涉及
    * direction  **参数解释**： 会话方向 **取值范围**： out2in 外到内访问 in2out 内到外访问
    * dstHost  **参数解释**： 流字节数，访问控制日志和流量日志中存在 **取值范围**： 目的网址
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * endTime  **参数解释**： 会话结束时间，流量日志字段 **取值范围**： 不涉及
    * logId  **参数解释**： 日志ID，用于分页查询 **取值范围**： 不涉及
    * packets  **参数解释**： 流包数，流量日志字段 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源Ip **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间，流量日志字段 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： 虚拟网关ID **取值范围**： 不涉及
    * sctpVerificationTag  **参数解释**： sctp验证标签，流量日志字段 **取值范围**： 不涉及
    * sctpIsHandshakeFlow  **参数解释**： sctp握手流，流量日志字段 **取值范围**： 不涉及
    * qosRuleId  **参数解释**： qos规则ID，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosRuleName  **参数解释**： qos规则名称，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelId  **参数解释**： qos通道ID，流量日志字段 **取值范围**： 不涉及
    * qosChannelName  **参数解释**： qos通道名称，流量日志字段 **取值范围**： 不涉及
    * qosDropPackets  **参数解释**： qos丢包数，流量日志字段 **取值范围**： 不涉及
    * qosDropBytes  **参数解释**： qos丢弃字节，流量日志字段 **取值范围**： 不涉及
    * qosRuleType  **参数解释**： qos规则类型，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelType  **参数解释**： qos通道类型，流量日志字段 **取值范围**： 不涉及
    * action  **参数解释**： 动作，攻击日志、访问控制日志、URL日志存在 **取值范围**： 不涉及
    * url  **参数解释**： url，URL日志字段 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleType  **参数解释**： 规则类型，访问控制日志和URL日志字段 **取值范围**： 不涉及
    * attackRule  **参数解释**： 规则类型，攻击日志字段 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID，攻击日志字段 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型，攻击日志字段 **取值范围**： 不涉及
    * eventTime  **参数解释**： 事件时间，攻击日志字段 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级，攻击日志字段 **取值范围**： 不涉及
    * packet  **参数解释**： 规则载荷，攻击日志字段 **取值范围**： 不涉及
    * source  **参数解释**： 攻击来源，攻击日志字段 **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP，攻击日志字段 **取值范围**： 不涉及
    * tag  **参数解释**： 标签类型，攻击日志字段 **取值范围**： 1 WAF回源IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'app' => null,
        'bytes' => 'double',
        'direction' => null,
        'dstHost' => null,
        'dstIp' => null,
        'dstPort' => 'int32',
        'endTime' => 'int64',
        'logId' => null,
        'packets' => 'double',
        'protocol' => null,
        'srcIp' => null,
        'srcPort' => 'int32',
        'startTime' => 'int64',
        'dstRegionId' => null,
        'dstRegionName' => null,
        'dstProvinceId' => null,
        'dstProvinceName' => null,
        'dstCityId' => null,
        'dstCityName' => null,
        'srcRegionId' => null,
        'srcRegionName' => null,
        'srcProvinceId' => null,
        'srcProvinceName' => null,
        'srcCityId' => null,
        'srcCityName' => null,
        'vgwId' => null,
        'sctpVerificationTag' => 'int64',
        'sctpIsHandshakeFlow' => null,
        'qosRuleId' => null,
        'qosRuleName' => null,
        'qosChannelId' => null,
        'qosChannelName' => null,
        'qosDropPackets' => 'double',
        'qosDropBytes' => 'double',
        'qosRuleType' => null,
        'qosChannelType' => null,
        'action' => null,
        'url' => null,
        'hitTime' => 'int64',
        'ruleId' => null,
        'ruleName' => null,
        'ruleType' => 'int32',
        'attackRule' => null,
        'attackRuleId' => null,
        'attackType' => null,
        'eventTime' => 'int64',
        'level' => null,
        'packet' => null,
        'source' => null,
        'realIp' => null,
        'tag' => 'int32'
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
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 流字节数，流量日志字段 **取值范围**： 不涉及
    * direction  **参数解释**： 会话方向 **取值范围**： out2in 外到内访问 in2out 内到外访问
    * dstHost  **参数解释**： 流字节数，访问控制日志和流量日志中存在 **取值范围**： 目的网址
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * endTime  **参数解释**： 会话结束时间，流量日志字段 **取值范围**： 不涉及
    * logId  **参数解释**： 日志ID，用于分页查询 **取值范围**： 不涉及
    * packets  **参数解释**： 流包数，流量日志字段 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源Ip **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间，流量日志字段 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： 虚拟网关ID **取值范围**： 不涉及
    * sctpVerificationTag  **参数解释**： sctp验证标签，流量日志字段 **取值范围**： 不涉及
    * sctpIsHandshakeFlow  **参数解释**： sctp握手流，流量日志字段 **取值范围**： 不涉及
    * qosRuleId  **参数解释**： qos规则ID，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosRuleName  **参数解释**： qos规则名称，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelId  **参数解释**： qos通道ID，流量日志字段 **取值范围**： 不涉及
    * qosChannelName  **参数解释**： qos通道名称，流量日志字段 **取值范围**： 不涉及
    * qosDropPackets  **参数解释**： qos丢包数，流量日志字段 **取值范围**： 不涉及
    * qosDropBytes  **参数解释**： qos丢弃字节，流量日志字段 **取值范围**： 不涉及
    * qosRuleType  **参数解释**： qos规则类型，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelType  **参数解释**： qos通道类型，流量日志字段 **取值范围**： 不涉及
    * action  **参数解释**： 动作，攻击日志、访问控制日志、URL日志存在 **取值范围**： 不涉及
    * url  **参数解释**： url，URL日志字段 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleType  **参数解释**： 规则类型，访问控制日志和URL日志字段 **取值范围**： 不涉及
    * attackRule  **参数解释**： 规则类型，攻击日志字段 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID，攻击日志字段 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型，攻击日志字段 **取值范围**： 不涉及
    * eventTime  **参数解释**： 事件时间，攻击日志字段 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级，攻击日志字段 **取值范围**： 不涉及
    * packet  **参数解释**： 规则载荷，攻击日志字段 **取值范围**： 不涉及
    * source  **参数解释**： 攻击来源，攻击日志字段 **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP，攻击日志字段 **取值范围**： 不涉及
    * tag  **参数解释**： 标签类型，攻击日志字段 **取值范围**： 1 WAF回源IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'app' => 'app',
            'bytes' => 'bytes',
            'direction' => 'direction',
            'dstHost' => 'dst_host',
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'endTime' => 'end_time',
            'logId' => 'log_id',
            'packets' => 'packets',
            'protocol' => 'protocol',
            'srcIp' => 'src_ip',
            'srcPort' => 'src_port',
            'startTime' => 'start_time',
            'dstRegionId' => 'dst_region_id',
            'dstRegionName' => 'dst_region_name',
            'dstProvinceId' => 'dst_province_id',
            'dstProvinceName' => 'dst_province_name',
            'dstCityId' => 'dst_city_id',
            'dstCityName' => 'dst_city_name',
            'srcRegionId' => 'src_region_id',
            'srcRegionName' => 'src_region_name',
            'srcProvinceId' => 'src_province_id',
            'srcProvinceName' => 'src_province_name',
            'srcCityId' => 'src_city_id',
            'srcCityName' => 'src_city_name',
            'vgwId' => 'vgw_id',
            'sctpVerificationTag' => 'sctp_verification_tag',
            'sctpIsHandshakeFlow' => 'sctp_is_handshake_flow',
            'qosRuleId' => 'qos_rule_id',
            'qosRuleName' => 'qos_rule_name',
            'qosChannelId' => 'qos_channel_id',
            'qosChannelName' => 'qos_channel_name',
            'qosDropPackets' => 'qos_drop_packets',
            'qosDropBytes' => 'qos_drop_bytes',
            'qosRuleType' => 'qos_rule_type',
            'qosChannelType' => 'qos_channel_type',
            'action' => 'action',
            'url' => 'url',
            'hitTime' => 'hit_time',
            'ruleId' => 'rule_id',
            'ruleName' => 'rule_name',
            'ruleType' => 'rule_type',
            'attackRule' => 'attack_rule',
            'attackRuleId' => 'attack_rule_id',
            'attackType' => 'attack_type',
            'eventTime' => 'event_time',
            'level' => 'level',
            'packet' => 'packet',
            'source' => 'source',
            'realIp' => 'real_ip',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 流字节数，流量日志字段 **取值范围**： 不涉及
    * direction  **参数解释**： 会话方向 **取值范围**： out2in 外到内访问 in2out 内到外访问
    * dstHost  **参数解释**： 流字节数，访问控制日志和流量日志中存在 **取值范围**： 目的网址
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * endTime  **参数解释**： 会话结束时间，流量日志字段 **取值范围**： 不涉及
    * logId  **参数解释**： 日志ID，用于分页查询 **取值范围**： 不涉及
    * packets  **参数解释**： 流包数，流量日志字段 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源Ip **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间，流量日志字段 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： 虚拟网关ID **取值范围**： 不涉及
    * sctpVerificationTag  **参数解释**： sctp验证标签，流量日志字段 **取值范围**： 不涉及
    * sctpIsHandshakeFlow  **参数解释**： sctp握手流，流量日志字段 **取值范围**： 不涉及
    * qosRuleId  **参数解释**： qos规则ID，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosRuleName  **参数解释**： qos规则名称，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelId  **参数解释**： qos通道ID，流量日志字段 **取值范围**： 不涉及
    * qosChannelName  **参数解释**： qos通道名称，流量日志字段 **取值范围**： 不涉及
    * qosDropPackets  **参数解释**： qos丢包数，流量日志字段 **取值范围**： 不涉及
    * qosDropBytes  **参数解释**： qos丢弃字节，流量日志字段 **取值范围**： 不涉及
    * qosRuleType  **参数解释**： qos规则类型，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelType  **参数解释**： qos通道类型，流量日志字段 **取值范围**： 不涉及
    * action  **参数解释**： 动作，攻击日志、访问控制日志、URL日志存在 **取值范围**： 不涉及
    * url  **参数解释**： url，URL日志字段 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleType  **参数解释**： 规则类型，访问控制日志和URL日志字段 **取值范围**： 不涉及
    * attackRule  **参数解释**： 规则类型，攻击日志字段 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID，攻击日志字段 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型，攻击日志字段 **取值范围**： 不涉及
    * eventTime  **参数解释**： 事件时间，攻击日志字段 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级，攻击日志字段 **取值范围**： 不涉及
    * packet  **参数解释**： 规则载荷，攻击日志字段 **取值范围**： 不涉及
    * source  **参数解释**： 攻击来源，攻击日志字段 **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP，攻击日志字段 **取值范围**： 不涉及
    * tag  **参数解释**： 标签类型，攻击日志字段 **取值范围**： 1 WAF回源IP
    *
    * @var string[]
    */
    protected static $setters = [
            'app' => 'setApp',
            'bytes' => 'setBytes',
            'direction' => 'setDirection',
            'dstHost' => 'setDstHost',
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'endTime' => 'setEndTime',
            'logId' => 'setLogId',
            'packets' => 'setPackets',
            'protocol' => 'setProtocol',
            'srcIp' => 'setSrcIp',
            'srcPort' => 'setSrcPort',
            'startTime' => 'setStartTime',
            'dstRegionId' => 'setDstRegionId',
            'dstRegionName' => 'setDstRegionName',
            'dstProvinceId' => 'setDstProvinceId',
            'dstProvinceName' => 'setDstProvinceName',
            'dstCityId' => 'setDstCityId',
            'dstCityName' => 'setDstCityName',
            'srcRegionId' => 'setSrcRegionId',
            'srcRegionName' => 'setSrcRegionName',
            'srcProvinceId' => 'setSrcProvinceId',
            'srcProvinceName' => 'setSrcProvinceName',
            'srcCityId' => 'setSrcCityId',
            'srcCityName' => 'setSrcCityName',
            'vgwId' => 'setVgwId',
            'sctpVerificationTag' => 'setSctpVerificationTag',
            'sctpIsHandshakeFlow' => 'setSctpIsHandshakeFlow',
            'qosRuleId' => 'setQosRuleId',
            'qosRuleName' => 'setQosRuleName',
            'qosChannelId' => 'setQosChannelId',
            'qosChannelName' => 'setQosChannelName',
            'qosDropPackets' => 'setQosDropPackets',
            'qosDropBytes' => 'setQosDropBytes',
            'qosRuleType' => 'setQosRuleType',
            'qosChannelType' => 'setQosChannelType',
            'action' => 'setAction',
            'url' => 'setUrl',
            'hitTime' => 'setHitTime',
            'ruleId' => 'setRuleId',
            'ruleName' => 'setRuleName',
            'ruleType' => 'setRuleType',
            'attackRule' => 'setAttackRule',
            'attackRuleId' => 'setAttackRuleId',
            'attackType' => 'setAttackType',
            'eventTime' => 'setEventTime',
            'level' => 'setLevel',
            'packet' => 'setPacket',
            'source' => 'setSource',
            'realIp' => 'setRealIp',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * app  **参数解释**： 应用 **取值范围**： 不涉及
    * bytes  **参数解释**： 流字节数，流量日志字段 **取值范围**： 不涉及
    * direction  **参数解释**： 会话方向 **取值范围**： out2in 外到内访问 in2out 内到外访问
    * dstHost  **参数解释**： 流字节数，访问控制日志和流量日志中存在 **取值范围**： 目的网址
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： 目的端口 **取值范围**： 不涉及
    * endTime  **参数解释**： 会话结束时间，流量日志字段 **取值范围**： 不涉及
    * logId  **参数解释**： 日志ID，用于分页查询 **取值范围**： 不涉及
    * packets  **参数解释**： 流包数，流量日志字段 **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源Ip **取值范围**： 不涉及
    * srcPort  **参数解释**： 源端口 **取值范围**： 不涉及
    * startTime  **参数解释**： 会话开始时间，流量日志字段 **取值范围**： 不涉及
    * dstRegionId  **参数解释**： 目的地区ID **取值范围**： 不涉及
    * dstRegionName  **参数解释**： 目的地区名称 **取值范围**： 不涉及
    * dstProvinceId  **参数解释**： 目的省份ID **取值范围**： 不涉及
    * dstProvinceName  **参数解释**： 目的省份名称 **取值范围**： 不涉及
    * dstCityId  **参数解释**： 目的城市ID **取值范围**： 不涉及
    * dstCityName  **参数解释**： 目的城市名称 **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    * srcRegionName  **参数解释**： 源地区名称 **取值范围**： 不涉及
    * srcProvinceId  **参数解释**： 源省份ID **取值范围**： 不涉及
    * srcProvinceName  **参数解释**： 源省份名称 **取值范围**： 不涉及
    * srcCityId  **参数解释**： 源城市ID **取值范围**： 不涉及
    * srcCityName  **参数解释**： 源城市名称 **取值范围**： 不涉及
    * vgwId  **参数解释**： 虚拟网关ID **取值范围**： 不涉及
    * sctpVerificationTag  **参数解释**： sctp验证标签，流量日志字段 **取值范围**： 不涉及
    * sctpIsHandshakeFlow  **参数解释**： sctp握手流，流量日志字段 **取值范围**： 不涉及
    * qosRuleId  **参数解释**： qos规则ID，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosRuleName  **参数解释**： qos规则名称，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelId  **参数解释**： qos通道ID，流量日志字段 **取值范围**： 不涉及
    * qosChannelName  **参数解释**： qos通道名称，流量日志字段 **取值范围**： 不涉及
    * qosDropPackets  **参数解释**： qos丢包数，流量日志字段 **取值范围**： 不涉及
    * qosDropBytes  **参数解释**： qos丢弃字节，流量日志字段 **取值范围**： 不涉及
    * qosRuleType  **参数解释**： qos规则类型，流量日志、访问控制日志存在 **取值范围**： 不涉及
    * qosChannelType  **参数解释**： qos通道类型，流量日志字段 **取值范围**： 不涉及
    * action  **参数解释**： 动作，攻击日志、访问控制日志、URL日志存在 **取值范围**： 不涉及
    * url  **参数解释**： url，URL日志字段 **取值范围**： 不涉及
    * hitTime  **参数解释**： 命中时间，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleId  **参数解释**： 规则ID，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleName  **参数解释**： 规则名称，访问控制日志、URL日志存在 **取值范围**： 不涉及
    * ruleType  **参数解释**： 规则类型，访问控制日志和URL日志字段 **取值范围**： 不涉及
    * attackRule  **参数解释**： 规则类型，攻击日志字段 **取值范围**： 不涉及
    * attackRuleId  **参数解释**： 攻击规则ID，攻击日志字段 **取值范围**： 不涉及
    * attackType  **参数解释**： 攻击类型，攻击日志字段 **取值范围**： 不涉及
    * eventTime  **参数解释**： 事件时间，攻击日志字段 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级，攻击日志字段 **取值范围**： 不涉及
    * packet  **参数解释**： 规则载荷，攻击日志字段 **取值范围**： 不涉及
    * source  **参数解释**： 攻击来源，攻击日志字段 **取值范围**： 不涉及
    * realIp  **参数解释**： 真实IP，攻击日志字段 **取值范围**： 不涉及
    * tag  **参数解释**： 标签类型，攻击日志字段 **取值范围**： 1 WAF回源IP
    *
    * @var string[]
    */
    protected static $getters = [
            'app' => 'getApp',
            'bytes' => 'getBytes',
            'direction' => 'getDirection',
            'dstHost' => 'getDstHost',
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'endTime' => 'getEndTime',
            'logId' => 'getLogId',
            'packets' => 'getPackets',
            'protocol' => 'getProtocol',
            'srcIp' => 'getSrcIp',
            'srcPort' => 'getSrcPort',
            'startTime' => 'getStartTime',
            'dstRegionId' => 'getDstRegionId',
            'dstRegionName' => 'getDstRegionName',
            'dstProvinceId' => 'getDstProvinceId',
            'dstProvinceName' => 'getDstProvinceName',
            'dstCityId' => 'getDstCityId',
            'dstCityName' => 'getDstCityName',
            'srcRegionId' => 'getSrcRegionId',
            'srcRegionName' => 'getSrcRegionName',
            'srcProvinceId' => 'getSrcProvinceId',
            'srcProvinceName' => 'getSrcProvinceName',
            'srcCityId' => 'getSrcCityId',
            'srcCityName' => 'getSrcCityName',
            'vgwId' => 'getVgwId',
            'sctpVerificationTag' => 'getSctpVerificationTag',
            'sctpIsHandshakeFlow' => 'getSctpIsHandshakeFlow',
            'qosRuleId' => 'getQosRuleId',
            'qosRuleName' => 'getQosRuleName',
            'qosChannelId' => 'getQosChannelId',
            'qosChannelName' => 'getQosChannelName',
            'qosDropPackets' => 'getQosDropPackets',
            'qosDropBytes' => 'getQosDropBytes',
            'qosRuleType' => 'getQosRuleType',
            'qosChannelType' => 'getQosChannelType',
            'action' => 'getAction',
            'url' => 'getUrl',
            'hitTime' => 'getHitTime',
            'ruleId' => 'getRuleId',
            'ruleName' => 'getRuleName',
            'ruleType' => 'getRuleType',
            'attackRule' => 'getAttackRule',
            'attackRuleId' => 'getAttackRuleId',
            'attackType' => 'getAttackType',
            'eventTime' => 'getEventTime',
            'level' => 'getLevel',
            'packet' => 'getPacket',
            'source' => 'getSource',
            'realIp' => 'getRealIp',
            'tag' => 'getTag'
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['bytes'] = isset($data['bytes']) ? $data['bytes'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['dstHost'] = isset($data['dstHost']) ? $data['dstHost'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['packets'] = isset($data['packets']) ? $data['packets'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['dstRegionId'] = isset($data['dstRegionId']) ? $data['dstRegionId'] : null;
        $this->container['dstRegionName'] = isset($data['dstRegionName']) ? $data['dstRegionName'] : null;
        $this->container['dstProvinceId'] = isset($data['dstProvinceId']) ? $data['dstProvinceId'] : null;
        $this->container['dstProvinceName'] = isset($data['dstProvinceName']) ? $data['dstProvinceName'] : null;
        $this->container['dstCityId'] = isset($data['dstCityId']) ? $data['dstCityId'] : null;
        $this->container['dstCityName'] = isset($data['dstCityName']) ? $data['dstCityName'] : null;
        $this->container['srcRegionId'] = isset($data['srcRegionId']) ? $data['srcRegionId'] : null;
        $this->container['srcRegionName'] = isset($data['srcRegionName']) ? $data['srcRegionName'] : null;
        $this->container['srcProvinceId'] = isset($data['srcProvinceId']) ? $data['srcProvinceId'] : null;
        $this->container['srcProvinceName'] = isset($data['srcProvinceName']) ? $data['srcProvinceName'] : null;
        $this->container['srcCityId'] = isset($data['srcCityId']) ? $data['srcCityId'] : null;
        $this->container['srcCityName'] = isset($data['srcCityName']) ? $data['srcCityName'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['sctpVerificationTag'] = isset($data['sctpVerificationTag']) ? $data['sctpVerificationTag'] : null;
        $this->container['sctpIsHandshakeFlow'] = isset($data['sctpIsHandshakeFlow']) ? $data['sctpIsHandshakeFlow'] : null;
        $this->container['qosRuleId'] = isset($data['qosRuleId']) ? $data['qosRuleId'] : null;
        $this->container['qosRuleName'] = isset($data['qosRuleName']) ? $data['qosRuleName'] : null;
        $this->container['qosChannelId'] = isset($data['qosChannelId']) ? $data['qosChannelId'] : null;
        $this->container['qosChannelName'] = isset($data['qosChannelName']) ? $data['qosChannelName'] : null;
        $this->container['qosDropPackets'] = isset($data['qosDropPackets']) ? $data['qosDropPackets'] : null;
        $this->container['qosDropBytes'] = isset($data['qosDropBytes']) ? $data['qosDropBytes'] : null;
        $this->container['qosRuleType'] = isset($data['qosRuleType']) ? $data['qosRuleType'] : null;
        $this->container['qosChannelType'] = isset($data['qosChannelType']) ? $data['qosChannelType'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['hitTime'] = isset($data['hitTime']) ? $data['hitTime'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['attackRule'] = isset($data['attackRule']) ? $data['attackRule'] : null;
        $this->container['attackRuleId'] = isset($data['attackRuleId']) ? $data['attackRuleId'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['eventTime'] = isset($data['eventTime']) ? $data['eventTime'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['packet'] = isset($data['packet']) ? $data['packet'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['realIp'] = isset($data['realIp']) ? $data['realIp'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
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
    * Gets bytes
    *  **参数解释**： 流字节数，流量日志字段 **取值范围**： 不涉及
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
    * @param double|null $bytes **参数解释**： 流字节数，流量日志字段 **取值范围**： 不涉及
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
    *  **参数解释**： 会话方向 **取值范围**： out2in 外到内访问 in2out 内到外访问
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
    * @param string|null $direction **参数解释**： 会话方向 **取值范围**： out2in 外到内访问 in2out 内到外访问
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets dstHost
    *  **参数解释**： 流字节数，访问控制日志和流量日志中存在 **取值范围**： 目的网址
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
    * @param string|null $dstHost **参数解释**： 流字节数，访问控制日志和流量日志中存在 **取值范围**： 目的网址
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
    * Gets endTime
    *  **参数解释**： 会话结束时间，流量日志字段 **取值范围**： 不涉及
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
    * @param int|null $endTime **参数解释**： 会话结束时间，流量日志字段 **取值范围**： 不涉及
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
    *  **参数解释**： 日志ID，用于分页查询 **取值范围**： 不涉及
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
    * @param string|null $logId **参数解释**： 日志ID，用于分页查询 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets packets
    *  **参数解释**： 流包数，流量日志字段 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getPackets()
    {
        return $this->container['packets'];
    }

    /**
    * Sets packets
    *
    * @param double|null $packets **参数解释**： 流包数，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPackets($packets)
    {
        $this->container['packets'] = $packets;
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
    * Gets srcIp
    *  **参数解释**： 源Ip **取值范围**： 不涉及
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
    * @param string|null $srcIp **参数解释**： 源Ip **取值范围**： 不涉及
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
    * Gets startTime
    *  **参数解释**： 会话开始时间，流量日志字段 **取值范围**： 不涉及
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
    * @param int|null $startTime **参数解释**： 会话开始时间，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets dstRegionId
    *  **参数解释**： 目的地区ID **取值范围**： 不涉及
    *
    * @return object|null
    */
    public function getDstRegionId()
    {
        return $this->container['dstRegionId'];
    }

    /**
    * Sets dstRegionId
    *
    * @param object|null $dstRegionId **参数解释**： 目的地区ID **取值范围**： 不涉及
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
    *  **参数解释**： 虚拟网关ID **取值范围**： 不涉及
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
    * @param string|null $vgwId **参数解释**： 虚拟网关ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
        return $this;
    }

    /**
    * Gets sctpVerificationTag
    *  **参数解释**： sctp验证标签，流量日志字段 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSctpVerificationTag()
    {
        return $this->container['sctpVerificationTag'];
    }

    /**
    * Sets sctpVerificationTag
    *
    * @param int|null $sctpVerificationTag **参数解释**： sctp验证标签，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSctpVerificationTag($sctpVerificationTag)
    {
        $this->container['sctpVerificationTag'] = $sctpVerificationTag;
        return $this;
    }

    /**
    * Gets sctpIsHandshakeFlow
    *  **参数解释**： sctp握手流，流量日志字段 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSctpIsHandshakeFlow()
    {
        return $this->container['sctpIsHandshakeFlow'];
    }

    /**
    * Sets sctpIsHandshakeFlow
    *
    * @param string|null $sctpIsHandshakeFlow **参数解释**： sctp握手流，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSctpIsHandshakeFlow($sctpIsHandshakeFlow)
    {
        $this->container['sctpIsHandshakeFlow'] = $sctpIsHandshakeFlow;
        return $this;
    }

    /**
    * Gets qosRuleId
    *  **参数解释**： qos规则ID，流量日志、访问控制日志存在 **取值范围**： 不涉及
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
    * @param string|null $qosRuleId **参数解释**： qos规则ID，流量日志、访问控制日志存在 **取值范围**： 不涉及
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
    *  **参数解释**： qos规则名称，流量日志、访问控制日志存在 **取值范围**： 不涉及
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
    * @param string|null $qosRuleName **参数解释**： qos规则名称，流量日志、访问控制日志存在 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQosRuleName($qosRuleName)
    {
        $this->container['qosRuleName'] = $qosRuleName;
        return $this;
    }

    /**
    * Gets qosChannelId
    *  **参数解释**： qos通道ID，流量日志字段 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getQosChannelId()
    {
        return $this->container['qosChannelId'];
    }

    /**
    * Sets qosChannelId
    *
    * @param string|null $qosChannelId **参数解释**： qos通道ID，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQosChannelId($qosChannelId)
    {
        $this->container['qosChannelId'] = $qosChannelId;
        return $this;
    }

    /**
    * Gets qosChannelName
    *  **参数解释**： qos通道名称，流量日志字段 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getQosChannelName()
    {
        return $this->container['qosChannelName'];
    }

    /**
    * Sets qosChannelName
    *
    * @param string|null $qosChannelName **参数解释**： qos通道名称，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQosChannelName($qosChannelName)
    {
        $this->container['qosChannelName'] = $qosChannelName;
        return $this;
    }

    /**
    * Gets qosDropPackets
    *  **参数解释**： qos丢包数，流量日志字段 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getQosDropPackets()
    {
        return $this->container['qosDropPackets'];
    }

    /**
    * Sets qosDropPackets
    *
    * @param double|null $qosDropPackets **参数解释**： qos丢包数，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQosDropPackets($qosDropPackets)
    {
        $this->container['qosDropPackets'] = $qosDropPackets;
        return $this;
    }

    /**
    * Gets qosDropBytes
    *  **参数解释**： qos丢弃字节，流量日志字段 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getQosDropBytes()
    {
        return $this->container['qosDropBytes'];
    }

    /**
    * Sets qosDropBytes
    *
    * @param double|null $qosDropBytes **参数解释**： qos丢弃字节，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQosDropBytes($qosDropBytes)
    {
        $this->container['qosDropBytes'] = $qosDropBytes;
        return $this;
    }

    /**
    * Gets qosRuleType
    *  **参数解释**： qos规则类型，流量日志、访问控制日志存在 **取值范围**： 不涉及
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
    * @param int|null $qosRuleType **参数解释**： qos规则类型，流量日志、访问控制日志存在 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQosRuleType($qosRuleType)
    {
        $this->container['qosRuleType'] = $qosRuleType;
        return $this;
    }

    /**
    * Gets qosChannelType
    *  **参数解释**： qos通道类型，流量日志字段 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getQosChannelType()
    {
        return $this->container['qosChannelType'];
    }

    /**
    * Sets qosChannelType
    *
    * @param int|null $qosChannelType **参数解释**： qos通道类型，流量日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQosChannelType($qosChannelType)
    {
        $this->container['qosChannelType'] = $qosChannelType;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**： 动作，攻击日志、访问控制日志、URL日志存在 **取值范围**： 不涉及
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
    * @param string|null $action **参数解释**： 动作，攻击日志、访问控制日志、URL日志存在 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释**： url，URL日志字段 **取值范围**： 不涉及
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
    * @param string|null $url **参数解释**： url，URL日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets hitTime
    *  **参数解释**： 命中时间，访问控制日志、URL日志存在 **取值范围**： 不涉及
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
    * @param int|null $hitTime **参数解释**： 命中时间，访问控制日志、URL日志存在 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHitTime($hitTime)
    {
        $this->container['hitTime'] = $hitTime;
        return $this;
    }

    /**
    * Gets ruleId
    *  **参数解释**： 规则ID，访问控制日志、URL日志存在 **取值范围**： 不涉及
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
    * @param string|null $ruleId **参数解释**： 规则ID，访问控制日志、URL日志存在 **取值范围**： 不涉及
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
    *  **参数解释**： 规则名称，访问控制日志、URL日志存在 **取值范围**： 不涉及
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
    * @param string|null $ruleName **参数解释**： 规则名称，访问控制日志、URL日志存在 **取值范围**： 不涉及
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
    *  **参数解释**： 规则类型，访问控制日志和URL日志字段 **取值范围**： 不涉及
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
    * @param int|null $ruleType **参数解释**： 规则类型，访问控制日志和URL日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets attackRule
    *  **参数解释**： 规则类型，攻击日志字段 **取值范围**： 不涉及
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
    * @param string|null $attackRule **参数解释**： 规则类型，攻击日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackRule($attackRule)
    {
        $this->container['attackRule'] = $attackRule;
        return $this;
    }

    /**
    * Gets attackRuleId
    *  **参数解释**： 攻击规则ID，攻击日志字段 **取值范围**： 不涉及
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
    * @param string|null $attackRuleId **参数解释**： 攻击规则ID，攻击日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackRuleId($attackRuleId)
    {
        $this->container['attackRuleId'] = $attackRuleId;
        return $this;
    }

    /**
    * Gets attackType
    *  **参数解释**： 攻击类型，攻击日志字段 **取值范围**： 不涉及
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
    * @param string|null $attackType **参数解释**： 攻击类型，攻击日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets eventTime
    *  **参数解释**： 事件时间，攻击日志字段 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
    * Sets eventTime
    *
    * @param int|null $eventTime **参数解释**： 事件时间，攻击日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEventTime($eventTime)
    {
        $this->container['eventTime'] = $eventTime;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 攻击等级，攻击日志字段 **取值范围**： 不涉及
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
    * @param string|null $level **参数解释**： 攻击等级，攻击日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets packet
    *  **参数解释**： 规则载荷，攻击日志字段 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPacket()
    {
        return $this->container['packet'];
    }

    /**
    * Sets packet
    *
    * @param string|null $packet **参数解释**： 规则载荷，攻击日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPacket($packet)
    {
        $this->container['packet'] = $packet;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**： 攻击来源，攻击日志字段 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释**： 攻击来源，攻击日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets realIp
    *  **参数解释**： 真实IP，攻击日志字段 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRealIp()
    {
        return $this->container['realIp'];
    }

    /**
    * Sets realIp
    *
    * @param string|null $realIp **参数解释**： 真实IP，攻击日志字段 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRealIp($realIp)
    {
        $this->container['realIp'] = $realIp;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释**： 标签类型，攻击日志字段 **取值范围**： 1 WAF回源IP
    *
    * @return int|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param int|null $tag **参数解释**： 标签类型，攻击日志字段 **取值范围**： 1 WAF回源IP
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

